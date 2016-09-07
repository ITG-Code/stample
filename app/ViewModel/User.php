<?php

namespace Stample\ViewModel;


class User
{
  public $id;
  public $email;
  public $fname;
  public $sname;
  public $lastCheck;
  public $histogram;
  public function __construct($id, $email, $fname, $sname, $lastCheck, $histogram)
  {
    $this->id = $id;
    $this->email = $email;
    $this->fname = $fname;
    $this->sname = $sname;
    $this->lastCheck = $lastCheck;
    $this->histogram = $histogram;
  }
}