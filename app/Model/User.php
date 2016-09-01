<?php
namespace Stample\Model;
use \Stample\Core\Database;
use \Stample\Helpers\Session;
class User
{
    public $id;
    public $email;
    private $password;
    public $fname;
    public $sname;
    private $lastCheck;

    public function prepare()  {
        if($this->isLoggedIn()){
            $this->createSelfFromID($this->id);
            $this->id = Session::get("SessionUser");
        }
    }

    public function login()
    {
        $this->email = $_POST['login-email'];
        $this->password = $_POST['login-password'];
        if (password_verify($this->password, $this->createSelfFromEmail($this->email))) {
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
    public function logout(){
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
        if ($obj = $res->fetch_object()) {
            //var_dump($obj);
            $this->id = $obj->id;
            $this->fname = $obj->fname;
            $this->sname = $obj->sname;
            $hashedPassword = $obj->password;
        }
        return boolval($hashedPassword) ? $hashedPassword : false;
    }
    private function createSelfFromID($id){
        $stmt = Database::getInstance()->getConnection()->prepare("SELECT `user`.id as userid, fname, sname, email, password, `check`.id as checkid, checkgroup checkvalue, stamp FROM `check` RIGHT JOIN user ON `check`.user=`user`.id WHERE `check`.`user` = ? ORDER BY `check`.id DESC LIMIT 1");
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $res = $stmt->get_result();
        $stmt->close();
        $hashedPassword = "";
        if ($obj = $res->fetch_object()) {
            //var_dump($obj);
            $this->id = $obj->userid;
            $this->fname = $obj->fname;
            $this->sname = $obj->sname;
            $hashedPassword = $obj->password;
            $this->lastCheck = new Check($this->id,[
                "checkid" => $obj->checkid,
                "checkvalue" => $obj->checkvalue,
                "checkgroup" => $obj->checkgroup,
                "stamp" => $obj->stamp,

                ]);
        }
        return boolval($hashedPassword) ? $hashedPassword : false;
    }
    public function register(){
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
    public function checkIn(){
        if(!isset($this->lastCheck)){
            $this->lastCheck = new Check($this->id);
        }
        $this->lastCheck->checkIn();
    }
    public function getLastCheck(){
        return $this->lastCheck;
    }
}