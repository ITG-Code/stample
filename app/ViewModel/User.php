<?php
/**
 * Created by IntelliJ IDEA.
 * User: hannes.kindstrommer
 * Date: 2016-09-01
 * Time: 21:51
 */

namespace Stample\ViewModel;


class User
{
  public $id;
  public $email;
  public $fname;
  public $sname;
  public $lastCheck;

  public function __construct($id, $email, $fname, $sname, $lastCheck)
  {
    $this->id = $id;
    $this->email = $email;
    $this->fname = $fname;
    $this->sname = $sname;
    $this->lastCheck = $lastCheck;
  }
}