<?php
/**
 * Created by IntelliJ IDEA.
 * User: hannes.kindstrommer
 * Date: 2016-09-09
 * Time: 10:48
 */

namespace Stample\ViewModel;


class Shift
{
  public $user;
  public $fname;
  public $sname;
  public $startTime;
  public $endTime;
  public $hours;
  public $minutes;
  public $seconds;

  public function __construct($user, $fname, $sname, $startTime, $endTime, $hours, $minutes, $seconds)
  {
    $this->user = $user;
    $this->fname = $fname;
    $this->sname = $sname;
    $this->startTime = $startTime;
    $this->endTime = $endTime;
    $this->hours = $hours;
    $this->minutes = $minutes;
    $this->seconds = $seconds;
  }
}