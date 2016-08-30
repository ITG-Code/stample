<?php

class Account extends Controller
{
    private $user;

    public function index($args = []){

        $this->view('account/index', ['email' => Session::get("email")]);
    }

    public function login(){
        $this->user = $this->model('User');
        if($this->user->login()){
            Redirect::to('/account/home');
        }

    }
}