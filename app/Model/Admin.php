<?php
namespace Stample\Model;

use Stample\Core\Database;


class Admin
{

  /**
   * This function gets data from the view "user_data_for_admin" which is a SQL query.
   * @return \stdClass
   */
  public function getTableData()
  {
    $stmt = Database::getInstance()->getConnection()->prepare("SELECT * FROM user_status_for_admin");
    $stmt->execute();
    $result = $stmt->get_result();
    $retval = [];
    while($row = $result->fetch_object()) {
      $retval[] = $row;
    }
    return $retval;
  }

  /**
   * This function fetch data from the database with the help of a SQL query, the reason for the query not being a view is becaues of the difficulties of getting the shift start and end from a specific user that can't be defined in the database because the id will change depending on what part of the website you're viewing.
   * @param integer $id     : userID
   * @return \Stample\ViewModel\Shift array
   */
  public static function getShiftsFromUserID($id)
  {
    $stmt = Database::getInstance()->getConnection()->prepare(
        "SELECT  checkins.user, checkins.stamp as checkin_time, checkouts.stamp as checkout_time FROM 
(SELECT * FROM `check` WHERE checkvalue = 0 AND user = ?) as checkins
INNER JOIN 
(SELECT * FROM `check` WHERE checkvalue = 1 AND user = ?) as checkouts 
ON checkins.checkgroup=checkouts.checkgroup");
    $stmt->bind_param('ii', $id, $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $retval = [];
    while($row = $result->fetch_object())
      $retval[] = (new Shift($row->user, $row->checkin_time, $row->checkout_time))->getViewModel();

    return $retval;
  }

  /**
   * This function gets the data from the database with the help of the view "all_shifts_ordered_by_checkin" which is  a SQL query, the query simply does what the name suggests, it gets the shifts from database and order them by the most recent checkins.
   * @return \Stample\ViewModel\Shift array
   */
  public function getShiftsFromDepartment()
  {
    $stmt = Database::getInstance()->getConnection()->prepare(
        "SELECT * FROM all_shifts_ordered_by_checkin");
    $stmt->execute();
    $result = $stmt->get_result();
    $retval = [];
    while($row = $result->fetch_object()) {
      $retval[] = (new Shift($row->user, $row->checkin_time, $row->checkout_time, ['fname' => $row->fname, 'sname' => $row->sname]))->getViewModel();
    }
    return $retval;
  }
}