<?php
/**
 * Created by IntelliJ IDEA.
 * User: hannes.kindstrommer
 * Date: 2016-09-09
 * Time: 10:28
 */

namespace Stample\Model;


class Shift
{
  private $user;
  private $fname = "";
  private $sname = "";
  private $startTime;
  private $endTime;
  private $hours;
  private $minutes;
  private $seconds;

  public function __construct($user, $startTime, $endTime, $name= [])
  {
    if(!empty($name)){
      $this->fname = $name['fname'];
      $this->sname = $name['sname'];
    }
    $this->user = $user;
    $this->startTime = $startTime;
    $this->endTime = $endTime;
    $this->calcTotalTime();
  }
  private function calcTotalTime()
  {
    $shiftTime = (new \DateTime($this->endTime))->getTimestamp() - (new \DateTime($this->startTime))->getTimestamp();
    $this->hours = $shiftTime % 3600;
    $remainder = floor($shiftTime / 3600);
    $this->minutes = $remainder % 60;
    $remainder = floor($remainder / 60);
    $this->seconds = floor($remainder % 1);
  }
  public function getViewModel(){
      return new \Stample\ViewModel\Shift($this->user, $this->fname, $this->sname, $this->startTime, $this->endTime, $this->hours, $this->minutes, $this->seconds);
  }
}