<?php
namespace Stample\Controller;

use \Stample\Core\Controller;
use Stample\Helpers\Redirect;

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
}