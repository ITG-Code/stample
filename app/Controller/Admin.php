<?php

namespace Stample\Controller;


use Stample\Core\Controller;
use Stample\Helpers\Redirect;
use Stample\Model\Admin as AdminModel;

class Admin extends Controller
{
  private $adminModel;
  public function index(){
    if(!$this->user->isLoggedIn()){
      Redirect::to('/home/');
    }
    if(!$this->user->isAdmin()){
      Redirect::to('/account/');
    }
    $this->adminModel = new AdminModel();

    $this->view("admin/index",[
      "table" => $this->adminModel->getTableData(),
    ]);
  }
}