<?php
namespace Stample\Controller;

use \Stample\Core\Controller;
use \Stample\Helpers\Redirect;
use \Stample\Helpers\Session;

class Account extends Controller
{
    private $user;

    public function __construct()
    {
        $this->user = $this->model('User');
    }

    public function index($args = [])
    {
        if (!$this->user->isLoggedIn())
            Redirect::to("/home");

        $this->view('account/index', ['email' => Session::get("email")]);
    }

    public function login()
    {
        if ($this->user->login())
            Redirect::to('/account/home');
        else
            Redirect::to('/home');

    }

    public function logout()
    {

        $this->user->logout();
        Redirect::to("/home");
    }
}