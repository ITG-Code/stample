<?php

class User
{
    public $id;
    public $email;
    private $password;
    public $fname;
    public $ename;

    public function login(){
        $this->email = $_POST['login-email'];
        $this->password = $_POST['login-password'];

        if(strlen($this->email) > 1)
            return false;
        elseif(strlen($this->password) > 1)
            return false;
        else
            return true;
    }
}