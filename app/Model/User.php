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
    public function register(){
        $name = "Kokt";
        $last = "Korv";
        $email = "kokt@korv.se";
        $password = "1234";
        $password = password_hash($password, PASSWORD_BCRYPT);
        $stmt = Database::getInstance()->getConnection()->prepare("INSERT INTO user(email, password, fname, sname) VALUES(?,?,?,?)");
        $stmt->bind_param('ssss', $email, $password, $name, $last);
        $stmt->execute();
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
}