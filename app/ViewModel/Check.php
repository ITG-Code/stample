<?php
/**
 * Created by IntelliJ IDEA.
 * User: hannes.kindstrommer
 * Date: 2016-09-01
 * Time: 22:01
 */

namespace Stample\ViewModel;


class Check
{
  public $id;
  public $checkgroup;
  public $checkvalue = 1;
  public $user;
  public $stamp;

  public function __construct($id, $checkgroup, $checkvalue, $user, $stamp)
  {
    $this->id = $id;
    $this->checkgroup = $checkgroup;
    $this->checkvalue = $checkvalue;
    $this->user = $user;
    $this->stamp = $stamp;
  }
}