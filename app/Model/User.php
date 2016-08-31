<?php

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
            Session::set("sessionUser", $this->id);
            return true;
        } else {
            Session::delete("sessionUser");
            return false;
        }

    }

    public function isLoggedIn()
    {
        return boolval(Session::get("SessionUser")) ? $this->doesIDExist(Session::get('sessionUser')) : false;
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
            $this->id = $obj->id;
            $this->fname = $obj->fname;
            $this->sname = $obj->sname;
            $hashedPassword = $obj->password;
        }
        return boolval($hashedPassword) ? $hashedPassword : false;
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