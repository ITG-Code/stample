<?php
/**
 * Created by IntelliJ IDEA.
 * User: hannes.kindstrommer
 * Date: 2016-09-06
 * Time: 14:24
 */

namespace Stample\ViewModel;


class Histogram
{
  public $user;
  public $weeks;
  public $months;

  public function __construct($user, $weeks, $months)
  {
    $this->user = $user;
    $this->weeks = $weeks;
    $this->months = $months;
  }
}