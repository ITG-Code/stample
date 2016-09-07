// Hämtar och adderar alla utcheckningar samt incheckningar till en mega timestamp.
SELECT `user`.`id` as userid,checkvalue, COUNT(`check`.`id`) as rows, SUM(`check`.stamp) as times FROM `user`
LEFT JOIN `check` ON `user`.`id` = `check`.`user`
WHERE stamp < NOW() AND stamp > "2016-08-02 13:11:57"
GROUP BY `check`.user, `check`.`checkvalue`

// Samma som ovan fast tar bara ut user.id 11
SELECT `user`.`id` as userid,checkvalue, COUNT(`check`.`id`) as rows, SUM(`check`.stamp) as times FROM `user`
LEFT JOIN `check` ON `user`.`id` = `check`.`user`
WHERE stamp < NOW() AND `user`.id = 11 AND stamp > "2016-08-02 13:11:57"
GROUP BY `check`.user, `check`.`checkvalue` ORDER BY checkvalue ASC
