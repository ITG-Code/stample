<?php
namespace Stample\Model;

use \Stample\Core\Database;
use \Stample\Helpers\Session;

class User
{
  private $id;
  private $email;
  private $password;
  private $fname;
  private $sname;
  private $lastCheck;
  private $histogram;

  public function prepare()
  {
    if($this->isLoggedIn()) {
      $this->id = Session::get("SessionUser");
      if($this->getCheckCount())
        $this->createExtendedSelfFromID($this->id);
      else
        $this->createSelfFromID($this->id);

    }
  }

  public function login()
  {
    $this->email = $_POST['login-email'];
    $this->password = $_POST['login-password'];
    if(password_verify($this->password, $this->createSelfFromEmail($this->email))) {
      Session::set("SessionUser", $this->id);
      return true;
    } else {
      Session::delete("SessionUser");
      return false;
    }

  }

  public function isLoggedIn()
  {
    return boolval(Session::get("SessionUser")) ? $this->doesIDExist(Session::get('SessionUser')) : false;
  }

  public function logout()
  {
    Session::delete("SessionUser");
  }

  private function createSelfFromEmail($email)
  {
    $stmt = Database::getInstance()->getConnection()->prepare("SELECT * FROM user WHERE email = ?");
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $res = $stmt->get_result();
    $stmt->close();
    $hashedPassword = "";
    if($obj = $res->fetch_object()) {
      //var_dump($obj);
      $this->id = $obj->id;
      $this->fname = $obj->fname;
      $this->sname = $obj->sname;
      $hashedPassword = $obj->password;
    }
    return boolval($hashedPassword) ? $hashedPassword : false;
  }
  private function createSelfFromID($id)
  {
    $stmt = Database::getInstance()->getConnection()->prepare("SELECT * FROM user WHERE id = ?");
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $res = $stmt->get_result();
    $stmt->close();
    $hashedPassword = "";
    if($obj = $res->fetch_object()) {
      //var_dump($obj);
      $this->id = $obj->id;
      $this->fname = $obj->fname;
      $this->sname = $obj->sname;
      $hashedPassword = $obj->password;
    }
    return boolval($hashedPassword) ? $hashedPassword : false;
  }
  private function createExtendedSelfFromID($id)
  {
    $stmt = Database::getInstance()->getConnection()->prepare("SELECT `user`.id as userid, fname, sname, email, password, `check`.id as checkid, checkgroup, checkvalue, stamp FROM `check` RIGHT JOIN user ON `check`.user=`user`.id WHERE `check`.`user` = ? ORDER BY `check`.id DESC LIMIT 1");
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $res = $stmt->get_result();
    $stmt->close();
    $hashedPassword = "";
    if($obj = $res->fetch_object()) {
      //var_dump($obj);
      $this->id = $obj->userid;
      $this->fname = $obj->fname;
      $this->sname = $obj->sname;
      $hashedPassword = $obj->password;
      $this->lastCheck = new \Stample\Model\Check($this->id, [
          "checkid" => $obj->checkid,
          "checkvalue" => $obj->checkvalue,
          "checkgroup" => $obj->checkgroup,
          "stamp" => $obj->stamp,

      ]);
    }
    return boolval($hashedPassword) ? $hashedPassword : false;
  }


  public function register()
  {
    $name = "Kokt";
    $last = "Korv";
    $email = "kokt@korv.se";
    $password = "1234";
    $password = password_hash($password, PASSWORD_BCRYPT);
    $stmt = Database::getInstance()->getConnection()->prepare("INSERT INTO user(email, password, fname, sname) VALUES(?,?,?,?)");
    $stmt->bind_param('ssss', $email, $password, $name, $last);
    $stmt->execute();
    $stmt->close();
  }

  private function doesIDExist($id)
  {
    $stmt = Database::getInstance()->getConnection()->prepare("SELECT count(*) as idcount FROM user WHERE id = ?");
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $res = $stmt->get_result();
    $stmt->close();
    $row = $res->fetch_object();
    return boolval($row->idcount);
  }
  private function getCheckCount(){
    $stmt = Database::getInstance()->getConnection()->prepare("SELECT count(*) as rowcount FROM `check` WHERE user = ?");
    $stmt->bind_param('i', $this->id);
    $stmt->execute();
    $res = $stmt->get_result();
    $stmt->close();
    $row = $res->fetch_object();
    return $row->rowcount;
  }

  public function checkIn()
  {
    if(!isset($this->lastCheck)) {
      $this->lastCheck = new \Stample\Model\Check($this->id);
    }
    $this->lastCheck->fetchLastSelfByUser();
    $this->lastCheck->checkIn();
  }
  public function checkout(){
    if(!isset($this->lastCheck)) {
      $this->lastCheck = new \Stample\Model\Check($this->id);
    }
    $this->lastCheck->fetchLastSelfByUser();
    return $this->lastCheck->checkout();
  }

  public function getLastCheck()
  {
    return $this->lastCheck;
  }
  public function getViewModel(){
    return new \Stample\ViewModel\User($this->id, $this->email, $this->fname, $this->sname, $this->lastCheck->getViewModel(), $this->histogram->getViewModel());
  }
  public function generateHistogram(){
    $this->histogram = new Histogram($this->id);
  }
}