<?php
/**
 * Created by IntelliJ IDEA.
 * User: hannes.kindstrommer
 * Date: 2016-09-06
 * Time: 14:13
 */

namespace Stample\ViewModel;


class HistogramUnit
{
  public $user;
  public $start;

  /**
   * true = vecka
   * false = månad
   *
   * @var bool
   */
  public $dayOrMonth = false;
  public $workedTime = 0;
  public $hours = 0;
  public $minutes = 0;
  public $seconds = 0;
  public $graphData = [];

  public function __construct($user, $start, $dayOrMonth, $workedTime, $hours, $miniutes, $seconds, $graphData)
  {
    $this->user = $user;
    $this->start = $start;
    $this->dayOrMonth = $dayOrMonth;
    $this->workedTime = $workedTime;
    $this->hours = $hours;
    $this->minutes = $miniutes;
    $this->seconds = $seconds;
    $this->graphData = $graphData;
  }
}