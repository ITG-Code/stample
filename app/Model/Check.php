<?php

namespace Stample\Model;

use Stample\Core\Database;

class Check
{
  private $id;
  private $checkgroup;
  private $checkvalue = 1;
  private $user;
  private $stamp;

  public function __construct($user, $other = [])
  {
    $this->user = $user;
    if(!empty($other)) {
      $this->id = $other['checkid'];
      $this->checkgroup = $other['checkgroup'];
      $this->checkvalue = $other['checkvalue'];
      $this->stamp = $other['stamp'];
    }
  }

  /**
   * Sends data to the database that are saved in specific tables that are displayed in the SQL query for when a user checks in. We also make a check to see if the user is logged in or not before sending the data.
   * @return bool
   */
  public function checkIn()
  {
    if($this->isCheckedIn()) {
      return false;
    }
    $checkgroup = $this->getNextCheckGroup();
    $stmt = Database::getInstance()->getConnection()->prepare("INSERT INTO `check`(checkgroup, checkvalue, `user`, stamp) VALUES(?,0,?,NOW()) ");
    $stmt->bind_param('ii', $checkgroup, $this->user);
    $retval = $stmt->execute();
    $stmt->close();
    return $retval;
  }

  /**
   * Sends data to the database that are saved in specific tables that are displayed in the SQL query for when a user checks out. We also make a check to see if the user is logged in or not before sending the data.
   * @return bool     : true on success, false on failure
   */
  public function checkout()
  {
    if(!$this->isCheckedIn()) {
      return false;
    }
    if(!is_int($this->checkgroup)) {
      $this->fetchLastSelfByUser();
    }
    $stmt = Database::getInstance()->getConnection()->prepare("INSERT INTO `check`(checkgroup, checkvalue, `user`, stamp) VALUES(?,1,?,NOW()) ");
    $stmt->bind_param('ii', $this->checkgroup, $this->user);
    $retval = $stmt->execute();
    $stmt->close();
    return $retval;

  }

  /**
   * Checks wether the user is checked in or not
   * @return bool   : true if checkvalue is 1, else false
   */
  private function isCheckedIn()
  {
    if(!isset($this->checkvalue)) {
      $this->fetchLastSelfByUser();
    }
    return isset($this->checkvalue) ? !boolval($this->checkvalue) : false;
  }

  /**
   *
   * @return integer    : The next checkgroup value to use when inserting a new Checkin
   */
  private function getNextCheckGroup()
  {
    $stmt = Database::getInstance()->getConnection()->prepare("SELECT MAX(checkgroup) as maxgroup from `check`");
    $stmt->execute();
    $res = $stmt->get_result();
    $row = $res->fetch_object();
    return $row->maxgroup + 1;
  }

  /**
   * Gets the latest check row made by this user object.
   */
  public function fetchLastSelfByUser()
  {
    $stmt = Database::getInstance()->getConnection()->prepare("SELECT * FROM `check` WHERE `user` = ? ORDER BY stamp DESC LIMIT 1");
    $stmt->bind_param('i', $this->user);
    $stmt->execute();
    $res = $stmt->get_result();
    $stmt->close();
    if($res->num_rows) {
      $row = $res->fetch_object();
      $this->id = $row->id ? $row->id : 0;
      $this->checkgroup = $row->checkgroup;
      $this->checkvalue = $row->checkvalue;
      $this->stamp = $row->stamp;
      return true;
    } else
      return false;
  }

  /**
   * @return integer
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * @return integer
   */
  public function getCheckgroup()
  {
    return $this->checkgroup;
  }

  /**
   * @return integer
   */
  public function getCheckvalue()
  {
    return $this->checkvalue;
  }

  /**
   * @return integer
   */
  public function getUser()
  {
    return $this->user;
  }

  /**
   * @param mixed $user
   */
  public function setUser($user)
  {
    $this->user = $user;
  }

  /**
   * @return DateTime
   */
  public function getStamp()
  {
    return $this->stamp;
  }

  /**
   * @return \Stample\ViewModel\Check
   */
  public function getViewModel()
  {
    return new \Stample\ViewModel\Check($this->id, $this->checkgroup, $this->checkvalue, $this->user, $this->stamp);
  }

}
