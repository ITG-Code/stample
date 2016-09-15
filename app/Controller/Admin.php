<?php

namespace Stample\Controller;


use Stample\Core\Controller;
use Stample\Helpers\Redirect;
use Stample\Model\Admin as AdminModel;
use Stample\Model\User;

class Admin extends Controller
{
  private $adminModel;

  public function __construct()
  {
    parent::__construct();
    $this->adminModel = new AdminModel();
  }

  public function index()
  {
    if(!$this->user->isLoggedIn()) {
      Redirect::to('/home/');
    }
    if(!$this->user->isAdmin()) {
      Redirect::to('/account/');
    }

    $this->view("admin/index", [
        'table' => $this->adminModel->getTableData(),
        'shifts' => $this->adminModel->getShiftsFromDepartment(),
    ]);
  }

  public function employee($args = [])
  {
    if(empty($args)) {
      Redirect::to("/admin");
    }
    if(!$this->user->doesIDExist($args[0])) {
      Redirect::to('/admin');
    }
    $employee = new User();
    $employee->employ($args[0]);
    $employee->generateHistogram();
    $this->view("admin/employee", [
        'employee' => $employee->getViewModel(),
        'shifts' => $this->adminModel->getShiftsFromUserID($employee->getID()),
    ]);
  }
}