<?php

namespace Stample\Model;


class Histogram
{
  private $user;
  private $start;

  /**
   * true = vecka
   * false = månad
   *
   * @var bool
   */
  private $weekOrMonth = false;
  private $workedTime = 0;

  private $hours;
  private $minutes;
  private $seconds;

  public function __construct($checkin, $checkouts, $startTime, $weekOrMonth)
  {

  }


  private function toHumanTime(){
    $this->hours = floor($this->workedTime / 3600);
    $rest = $this->workedTime % 3600;
    $this->minutes = floor($rest % 60);
    $this->seconds = floor($rest / 1);
  }
}