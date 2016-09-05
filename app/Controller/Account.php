<?php
namespace Stample\Controller;

use \Stample\Core\Controller;
use \Stample\Helpers\Redirect;
use \Stample\Helpers\Session;

class Account extends Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function index($args = [])
  {
    if(!$this->user->isLoggedIn())
      Redirect::to("/home");

    $this->view('account/index', [
        'user' => $this->user->getViewModel(),
    ]);
  }

  public function login()
  {
    if($this->user->login())
      Redirect::to('/account/home');
    else
      Redirect::to('/home');
  }

  public function logout()
  {
    $this->user->logout();
    Redirect::to("/home");
  }

  public function checkIn()
  {
    $this->user->checkIn();
    Redirect::to("/account/home");
  }
  public function checkout(){
    $this->user->checkout();
    Redirect::to("/account/home");
  }
}