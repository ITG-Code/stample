<?php
namespace Stample\Model;

use Stample\Core\Database;

class Admin {
	public function getTableData(){
		$stmt = Database::getInstance()->getConnection()->prepare("
		SELECT user.id, user.fname, user.sname, user.email, c.checkvalue, c.stamp, c.checkgroup, c.id AS checkid
		FROM `user`
		LEFT JOIN `check` AS c
		ON user.id = c.user
		WHERE stamp=(select MAX(stamp) FROM `check` WHERE user=user.id)");

		$stmt->execute();
		$res = $stmt->get_result();
		$retval = [];
		while($row = $stmt->fetch_object())
		{
			$retval[] = $row;
		}
		
		return $retval;

	}


}