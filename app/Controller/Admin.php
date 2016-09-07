<?php

namespace Stample\Controller;


use Stample\Core\Controller;
use Stample\Model\Admin as AdminModel;

class Admin extends Controller
{
  private $adminModel
  public function index(){
    $this->adminModel = new AdminModel();

    $this->view("admin/table",[
      "table" => $this->adminModel->getTableData(),
    ]);
  }
}