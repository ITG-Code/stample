<?php
namespace Stample\Model;

use Stample\Core\Database;

class Admin {

	public function getTableData(){
		$stmt = Database::getInstance()->getConnection()->prepare("SELECT * FROM user_status_for_admin");
		$stmt->execute();
		$result = $stmt->get_result();
		$retval = [];
		while($row = $result->fetch_object())
		{
			$retval[] = $row;
		}
		return $retval;
	}
}