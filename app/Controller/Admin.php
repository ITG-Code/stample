<?php

namespace Stample\Controller;


use Stample\Core\Controller;
use Stample\Helpers\Redirect;
use Stample\Model\Admin as AdminModel;
use Stample\Model\User;

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
  public function employee($args = []){
    if(empty($args)){
      Redirect::to("/admin");
    }
    $employee = new User();
    $employee->employ($args[0]);

    $this->view("admin/employee", [
        'employee' => $employee->getViewModel(),
        ]);
  }
  public function departmentshifts(){

    $this->view('admin/shifts',[
      'shifts' => $this->adminModel->getShifts(),
    ]);

  }
  public function shifts($args){
    if(!$this->user->doesIDExist($args[0])){
      Redirect::to('/admin');
    }
    $this->view('admin/shifts',[
      'shifts' => $this->adminModel->getShifts($args[0]),
    ]);
  }
}