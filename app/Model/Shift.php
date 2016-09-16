<?php

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

  public function __construct($user, $startTime, $endTime, $name = [])
  {
    if(!empty($name)) {
      $this->fname = $name['fname'];
      $this->sname = $name['sname'];
    }
    $this->user = $user;
    $this->startTime = $startTime;
    $this->endTime = $endTime;
    $this->calcTotalTime();
  }

  /**
   *  Calculates how many hours, minutes and seconds long this shift was
   */
  private function calcTotalTime()
  {
    $shiftTime = (new \DateTime($this->endTime))->getTimestamp() - (new \DateTime($this->startTime))->getTimestamp();
    $this->hours = floor($shiftTime / 3600);
    $remainder = $shiftTime % 3600;
    $this->minutes = floor($remainder / 60);
    $remainder = $remainder % 60;
    $this->seconds = floor($remainder / 1);
  }

  /**
   * @return \Stample\ViewModel\Shift
   */
  public function getViewModel()
  {
    return new \Stample\ViewModel\Shift($this->user, $this->fname, $this->sname, $this->startTime, $this->endTime, $this->hours, $this->minutes, $this->seconds);
  }
}