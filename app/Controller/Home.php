<?php
namespace Stample\Controller;

use \Stample\Core\Controller;
use Stample\Helpers\Redirect;

class Home extends Controller
{
  public function __construct()
  {
  }

  public function index($args = [])
  {

    $user = $this->model('user');
    if($user->isLoggedIn())
      Redirect::to("/account/home");

    $this->view('home/index', []);
  }
}