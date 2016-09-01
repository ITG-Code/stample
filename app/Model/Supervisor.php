<?php
/**
 * Created by IntelliJ IDEA.
 * User: hannes.kindstrommer
 * Date: 2016-09-01
 * Time: 13:39
 */

namespace Stample\Model;


use Stample\Core\Database;

class Supervisor
{
    private $allUserStatus = [];

    private function fetchAllUserStatus(){
        //$stmt = Database::getInstance()->getConnection()->prepare("SELECT id as checkid, checkgroup, checkvalue , `user`, stamp FROM `check` RIGHT JOIN (SELECT MAX(id) as last FROM `check` GROUP BY `user`) as lastcheck ON `check`.`id`=`lastcheck`.last");
        $stmt = Database::getInstance()->getConnection()->prepare(
            "SELECT user.id as userid ,`check`.id AS checkid, user.fname, user.sname, user.email, `check`.checkvalue, `check`.stamp, `check`.checkgroup
            FROM `user`
            LEFT JOIN `check`
            ON user.id = `check`.user
            WHERE stamp=(select max(stamp) from `check` where user=user.id)"
        );
        $stmt->execute();
        $res = $stmt->get_result();
        $stmt->close();
        if($res->field_count){
            while ($row = $res->fetch_object()){
                $this->allUserStatus[] = $row;
            }
        }
    }
    public function getAllUsersStatus(){
        if(empty($this->allUserStatus))
            $this->fetchAllUserStatus();
        return $this->allUserStatus;
    }
}