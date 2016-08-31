<?php

class Account extends Controller
{
    private $user;

    public function index($args = [])
    {
        $this->user = $this->model('User');
        if (!$this->user->loggedIn())
            Redirect::to("/home/login");

        $this->view('account/index', ['email' => Session::get("email")]);
    }

    public function login()
    {
        if ($this->user->login())
            Redirect::to('/account/home');
        else
            Redirect::to('/home/login');

    }

    public function logout()
    {
        $this->user->logout();
        Redirect::to("/home/login");
    }
}