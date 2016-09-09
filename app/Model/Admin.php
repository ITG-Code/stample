<?php
namespace Stample\Model;

use Stample\Core\Database;


class Admin
{
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

  public function getShiftsFromUserID($id)
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
  public function getShiftsFromDepartment(){
    $stmt = Database::getInstance()->getConnection()->prepare(
        "SELECT checkins.user, user.fname, user.sname, checkins.stamp as checkin_time, checkouts.stamp as checkout_time FROM 
(SELECT * FROM `check` WHERE checkvalue = 0) as checkins
INNER JOIN 
(SELECT * FROM `check` WHERE checkvalue = 1) as checkouts 
ON checkins.checkgroup=checkouts.checkgroup LEFT JOIN `user` ON checkins.user = user.id ORDER BY checkin_time DESC");
    $stmt->execute();
    $result = $stmt->get_result();
    $retval = [];
    while($row = $result->fetch_object()){
      $retval[] = (new Shift($row->user, $row->checkin_time, $row->checkout_time, ['fname' => $row->fname, 'sname' => $row->sname]))->getViewModel();
    }
    return $retval;
  }
}