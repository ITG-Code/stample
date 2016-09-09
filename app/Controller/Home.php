<?php
namespace Stample\Controller;

use \Stample\Core\Controller;
use Stample\Helpers\Redirect;
use Stample\Helpers\Session;

class Home extends Controller
{
  public function __construct()
  {
    parent::__construct();
  }

  public function index($args = [])
  {
    if($this->user->isLoggedIn())
      Redirect::to("/account/home");

    $this->view('home/index', []);
  }
  public function register(){
    if($this->user->isLoggedIn())
      Redirect::to("/account/home");

    $this->view('home/register', []);
  }
  public function setSkin($args = []){
    if($args[0] == "darkly"){
      Session::set('skin', true);
    }else{
      Session::set('skin', false);
    }
  }
}