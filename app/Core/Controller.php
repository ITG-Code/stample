<?php
namespace Stample\Core;
class Controller
{

  public function view($view, $data)
  {
    // $data passed into method is now available in this view
    require_once '../app/View/' . $view . '.php';
  }


  public static function model($model)
  {
    $model = '\Stample\Model\\' . $model;
    return new $model();
  }
}