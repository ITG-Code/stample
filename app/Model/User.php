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

        $loginStatus = true;

        if(strlen($this->email) < 1)
            $loginStatus = false;
        elseif(strlen($this->password) < 1)
            $loginStatus = false;

        if($loginStatus){
            Session::set('email', $this->email);
            return true;
        }else
            return false;
    }
    public function isLoggedIn(){
        return boolval(Session::get('email'));
    }
}