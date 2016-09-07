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
    $this->getCurrentWeek();
    $this->getCurrentYear();
  }
  private function getCurrentWeek()
  {
    $currentWeeksMonday = date("Y/m/d", strtotime('monday this week'));
    $currentWeeksMonday = new \DateTime($currentWeeksMonday);
    $startDate = $currentWeeksMonday;
    $endDate = clone $startDate;
    $endDate->add(new \DateInterval("P1D"));
    $stmt = Database::getInstance()->getConnection()->prepare(
        "SELECT `user`.`id` as userid,checkvalue, COUNT(`check`.`id`) as rows, SUM(UNIX_TIMESTAMP(`check`.stamp)) as times FROM `user`
LEFT JOIN `check` ON `user`.`id` = `check`.`user`
WHERE stamp < ? AND `user`.id = ? AND stamp > ?
GROUP BY `check`.user, `check`.`checkvalue` 
ORDER BY checkvalue ASC
");

    while($startDate < new \DateTime()) {
      $valuedStartDate = $startDate->format("Y-m-d H:i:s");
      $valuedEndDate = $endDate->format("Y-m-d H:i:s");
      $stmt->bind_param('sis', $valuedEndDate, $this->user, $valuedStartDate);
      $stmt->execute();
      $result = $stmt->get_result();
      $row1 = $result->fetch_object();
      $row2 = $result->fetch_object();
      $this->weeks[] = new HistogramUnit($row1, $row2, $startDate, $endDate, true);
      $startDate->add(new \DateInterval("P1D"));
      $endDate->add(new \DateInterval("P1D"));
    }
  }

  private function getCurrentYear()
  {
    $currentYear = new \DateTime();
    $currentYear->setDate($currentYear->format('Y'), 1, 1);
    $currentYear->setTime(0, 0, 0);
    $endDate = clone $currentYear;
    $endDate->add(new \DateInterval("P1M"));
    $stmt = Database::getInstance()->getConnection()->prepare(
        "SELECT `user`.`id` as userid,checkvalue, COUNT(`check`.`id`) as rows, SUM(UNIX_TIMESTAMP(`check`.stamp)) as times FROM `user`
LEFT JOIN `check` ON `user`.`id` = `check`.`user`
WHERE stamp < ? AND `user`.id = ? AND stamp > ?
GROUP BY `check`.user, `check`.`checkvalue` 
ORDER BY checkvalue ASC
");

    while($currentYear < new \DateTime()) {
      $valuedStartDate = $currentYear->format("Y-m-d H:i:s");
      $valuedEndDate = $endDate->format("Y-m-d H:i:s");
      $stmt->bind_param('iii', $valuedEndDate, $this->user, $valuedStartDate);
      $stmt->execute();
      $result = $stmt->get_result();
      $row1 = $result->fetch_object();
      $row2 = $result->fetch_object();
      $this->months[] = new HistogramUnit($row1, $row2, $currentYear, $endDate, false);
      $currentYear->add(new \DateInterval("P1M"));
      $endDate->add(new \DateInterval("P1M"));
    }
  }
  public function getViewModel(){
    $weekViewModels = [];
    foreach($this->weeks as $day){
      $weekViewModels[] = $day->getViewModel();
    }
    $monthViewModels = [];
    foreach($this->months as $month){
      $monthViewModels[] = $month->getViewModel();
    }
    return new \Stample\ViewModel\Histogram($this->user, $weekViewModels, $monthViewModels);
  }

}