
/* Tar ut alla checkins / checkouts gruppvis baserat på "checkgroup" och visar upp det i en tabell som |userid|namn|efternamn|checkin|checkout| */
SELECT checkins.user, user.fname, user.sname, checkins.stamp as checkin_time, checkouts.stamp as checkout_time FROM 
(SELECT * FROM `check` WHERE checkvalue = 1) as checkins
INNER JOIN 
(SELECT * FROM `check` WHERE checkvalue = 0) as checkouts 
ON checkins.checkgroup=checkouts.checkgroup LEFT JOIN `user` ON checkins.user = user.id ORDER BY checkin_time ASC

/* - Tar ut senaste aktiviteten som "user" gjort (checkin eller checkout)  - */
SELECT * FROM `check` WHERE user = 8 ORDER BY stamp DESC LIMIT 1; 
SELECT * FROM `user` WHERE fname ORDER BY id DESC;

/* View för admins */
SELECT user.id ,user.fname, user.sname, user.email, `check`.user, `check`.checkvalue, `check`.stamp, `check`.checkgroup
FROM `user`
LEFT JOIN `check`
ON user.id = `check`.user
WHERE stamp=(select max(stamp) from `check` where user=user.id)

 /* Uppdaterad view som innhehåller check id för admins*/
SELECT user.id, user.fname, user.sname, user.email, c.checkvalue, c.stamp, c.checkgroup, c.id AS checkid
FROM `user`
LEFT JOIN `check` AS c
ON user.id = c.user
WHERE stamp=(select MAX(stamp) FROM `check` WHERE user=user.id)

/* Tid som personer arbetat */
SELECT
(
    (SELECT SUM(stamp) FROM `check` WHERE checkgroup = 1 AND checkvalue = 0 AND stamp < NOW() )
  -
    (SELECT SUM(stamp) FROM `check` WHERE checkgroup = 1 AND checkvalue = 1 AND stamp < NOW())
) AS worked

/*
SELECT user.id, fname, sname, email, checkvalue
FROM `user`
LEFT JOIN (SELECT * FROM `check` ORDER BY stamp DESC) as lastcheck
ON user.id = lastcheck.user;

SELECT user.id, fname, sname, email, checkvalue, stamp
FROM `user`
LEFT JOIN `check` ON `user`.`id` = `check`.`user`
ORDER BY stamp DESC

SELECT user.id, fname, sname, email, checkvalue, stamp
FROM `user`
LEFT JOIN `check` 
ON user.id = `check`.user
*/
SELECT
(
   (SELECT `check`.stamp FROM `check` WHERE checkgroup = 4 AND checkvalue = 1)
   AND
   (SELECT `check`.stamp FROM `check` WHERE checkgroup = 4 AND checkvalue = 1)
)

SELECT 
    (checkdata.checkvalue - userdata.id) AS subtracted_value
FROM 
  `check` AS checkdata 
JOIN 
    user AS userdata ON checkdata.id = userdata.id

SELECT stamp AS work_of_the_day
FROM `check` AS calc
WHERE (id = 2) - (id = 1)

SELECT user.id AS userid, user.fname, user.sname, user.email, c.user, c.checkvalue, c.stamp, c.checkgroup
FROM `user`
LEFT JOIN `check` AS c
ON user.id = c.user
WHERE stamp = 
(
    (SELECT stamp FROM `check` WHERE checkgroup = 4 AND checkvalue = 1)
    AND
    (SELECT stamp FROM `check` WHERE checkgroup = 4 AND checkvalue = 0)
)

SELECT user.id AS userid, user.fname, user.sname, user.email, c.user, c.checkvalue, c.stamp, c.checkgroup
FROM `user`
LEFT JOIN `check` AS c
ON user.id = c.user
WHERE checkgroup = 4

SELECT user.id, user.fname, user.sname, user.email, `check`.checkvalue, `check`.stamp
FROM `user` 
LEFT JOIN `check`
ON user.id = `check`.user
ORDER BY user.id WHERE stamp

SELECT user.id ,user.fname, user.sname, user.email, checktest.user, checktest.checkvalue, checktest.stamp
FROM `user`
LEFT JOIN `check` AS checktest 
ON user.id = checktest.user
WHERE checktest.checkvalue ORDER BY user.id ASC

SELECT user.id ,user.fname, user.sname, user.email, checktest.user, checktest.checkvalue, checktest.stamp
FROM `user`
LEFT JOIN `check` AS checktest 
ON user.id = checktest.user
WHERE checktest.stamp=(select max(checktest.stamp) from `check` where checktest.user=user.id)
select max(stamp) from `check` where user





