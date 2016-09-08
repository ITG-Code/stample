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

  public function checkIn()
  {
    if(!$this->isCheckedIn()) {
      $checkgroup = $this->getNextCheckGroup();
      $stmt = Database::getInstance()->getConnection()->prepare("INSERT INTO `check`(checkgroup, checkvalue, `user`, stamp) VALUES(?,0,?,NOW()) ");
      $stmt->bind_param('ii', $checkgroup, $this->user);
      $stmt->execute();
    }

  }

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

  private function isCheckedIn()
  {
    if(!isset($this->checkvalue)) {
      $this->fetchLastSelfByUser();
    }
    return isset($this->checkvalue) ? !boolval($this->checkvalue) : false;
  }

  private function getNextCheckGroup()
  {
    $stmt = Database::getInstance()->getConnection()->prepare("SELECT MAX(checkgroup) as maxgroup from `check`");
    $stmt->execute();
    $res = $stmt->get_result();
    $row = $res->fetch_object();
    return $row->maxgroup + 1;
  }

  /*
   * Hämtar senaste check-raden som finns gjord av nuvarande användare
   */
  public function fetchLastSelfByUser()
  {
    $stmt = Database::getInstance()->getConnection()->prepare("SELECT * FROM `check` WHERE `user` = ? ORDER BY id DESC LIMIT 1");
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
   * @return mixed
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * @return mixed
   */
  public function getCheckgroup()
  {
    return $this->checkgroup;
  }

  /**
   * @return mixed
   */
  public function getCheckvalue()
  {
    return $this->checkvalue;
  }

  /**
   * @return mixed
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
   * @return mixed
   */
  public function getStamp()
  {
    return $this->stamp;
  }

  public function getViewModel()
  {
    return new \Stample\ViewModel\Check($this->id, $this->checkgroup, $this->checkvalue, $this->user, $this->stamp);
  }

}
