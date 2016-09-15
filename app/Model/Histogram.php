<?php

namespace Stample\Model;

use Stample\Core\Database;

/**
 * Class Histogram
 * @package Stample\Model
 * Creates the data to create a working hour histogram for one person
 */
class Histogram
{
  private $user;
  private $weeks;
  private $months;

  public function __construct($user)
  {
    $this->user = $user;

    $currentWeeksMonday = date("Y/m/d", strtotime('monday this week'));
    $currentWeeksMonday = new \DateTime($currentWeeksMonday);
    $this->weeks = $this->getPeriod($currentWeeksMonday, new \DateTime(), 'P1D', true);

    $currentYear = new \DateTime();
    $currentYear->setDate($currentYear->format('Y'), 1, 1);
    $currentYear->setTime(0, 0, 0);
    $this->months = $this->getPeriod($currentYear, new \DateTime(), 'P1M', false);
  }

  /**
   * Creates HistogramUnits that are $interval long
   * @param \DateTime $startTime : Search for DateTimes bigger than this one
   * @param \DateTime $periodEnd : Search for DateTimes smaller than this one
   * @param \DateInterval param $interval
   * @param bool $weekOrMonth
   * @return array
   */
  private function getPeriod($startTime, $periodEnd, $interval, $weekOrMonth)
  {

    $endTime = clone $startTime;
    $endTime->add(new \DateInterval($interval));
    $stmt = Database::getInstance()->getConnection()->prepare(
        "SELECT `user`.`id` as userid,checkvalue, COUNT(`check`.`id`) as rows, SUM(UNIX_TIMESTAMP(`check`.stamp)) as times FROM `user`
LEFT JOIN `check` ON `user`.`id` = `check`.`user`
WHERE stamp < ? AND `user`.id = ? AND stamp > ?
GROUP BY `check`.user, `check`.`checkvalue` 
ORDER BY checkvalue ASC
");
    $returnValue = [];
    while($startTime < $periodEnd) {
      $valuedStartDate = $startTime->format("Y-m-d H:i:s");
      $valuedEndDate = $endTime->format("Y-m-d H:i:s");
      $stmt->bind_param('sis', $valuedEndDate, $this->user, $valuedStartDate);
      $stmt->execute();
      $result = $stmt->get_result();
      $row1 = $result->fetch_object();
      $row2 = $result->fetch_object();
      $returnValue[] = new HistogramUnit($row1, $row2, $startTime, $endTime, $weekOrMonth);
      $startTime->add(new \DateInterval($interval));
      $endTime->add(new \DateInterval($interval));
    }
    return $returnValue;
  }

  /**
   * @return \Stample\ViewModel\Histogram
   */
  public function getViewModel()
  {
    $weekViewModels = [];
    foreach($this->weeks as $day) {
      $weekViewModels[] = $day->getViewModel();
    }
    $monthViewModels = [];
    foreach($this->months as $month) {
      $monthViewModels[] = $month->getViewModel();
    }
    return new \Stample\ViewModel\Histogram($this->user, $weekViewModels, $monthViewModels);
  }

}