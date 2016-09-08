<?php

namespace Stample\Model;


class HistogramUnit
{
  private $user;
  private $start;

  /**
   * true = vecka
   * false = månad
   *
   * @var bool
   */
  private $dayOrMonth = false;
  private $workedTime = 0;
  private $periodEnds;

  private $hours = 0;
  private $minutes = 0;
  private $seconds = 0;

  /**
   * HistogramUnit constructor.
   * @param $checkin Histogram::getCurrentYear or Histogram::getCurrentWeek
   * @param $checkout: Pair with $checkin
   * @param $startTime: DateTime
   * @param $endTime: The time at which the period ends.
   * @param $dayOrMonth: true if class represents a day false if it's a month
   */
  public function __construct($checkin, $checkout, $startTime, $endTime, $dayOrMonth)
  {
    $this->dayOrMonth = $dayOrMonth;
    if(!is_null($checkin)) {

      if(!is_object($checkout)){
        $checkout = (object)[];
        $checkout->times = 0;
        $checkout->rows = 0;
      }
      $checkin->times = (float)$checkin->times;
      $checkout->times = (float)$checkout->times;
      if($endTime->getTimestamp() > (new \DateTime())->getTimestamp()){
        $this->periodEnds = (new \DateTime())->getTimestamp();
      }else{
        $this->periodEnds = $endTime->getTimeStamp();
      }
      /**
       * If checkin exist but checkout doesn't
       */
      if($checkin->checkvalue == 0 && !is_object($checkout)) {
        $checkout = (object)[];
        $checkout->times = (new \DateTime())->getTimestamp();
        $checkout->rows = $checkin->rows;


      }
      /**
       * If checkin doesn't exist but checkout does
       */
      if($checkin->checkvalue == 1 && !is_object($checkout)) {
        $checkout = clone $checkin;
        $checkin = (object)[];
        $checkin->times = $startTime;
        $checkin->rows = $checkout->rows;
      }

      if($checkin->rows > $checkout->rows) {
        $checkout->times += $this->periodEnds;
        $checkout->rows++;

      }
      if($checkin->rows < $checkout->rows) {
        $checkin->times += $startTime->getTimestamp();
        $checkin->rows++;

      }
      $this->workedTime = $checkout->times - $checkin->times;
      $this->toHumanTime();
    }
  }


  /**
   *
   */
  private function toHumanTime()
  {
    $this->hours = floor($this->workedTime / 3600);
    $rest = $this->workedTime % 3600;
    $this->minutes = floor($rest / 60);
    $rest = $rest % 60;
    $this->seconds = floor($rest / 1);
  }
  public function getViewModel(){
    return new \Stample\ViewModel\HistogramUnit($this->user, $this->start, $this->dayOrMonth, $this->workedTime, $this->hours, $this->minutes, $this->seconds);
  }
}