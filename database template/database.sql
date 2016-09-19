-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 19, 2016 at 12:12 PM
-- Server version: 5.7.15-0ubuntu0.16.04.1
-- PHP Version: 7.0.8-0ubuntu0.16.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stample`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `all_shifts_ordered_by_checkin`
--
CREATE TABLE `all_shifts_ordered_by_checkin` (
`user` int(11)
,`fname` varchar(20)
,`sname` varchar(30)
,`checkin_time` timestamp
,`checkout_time` timestamp
);

-- --------------------------------------------------------

--
-- Table structure for table `check`
--

CREATE TABLE `check` (
  `id` int(11) NOT NULL,
  `checkgroup` int(11) NOT NULL,
  `checkvalue` tinyint(1) NOT NULL,
  `user` int(11) NOT NULL,
  `stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `check`
--

INSERT INTO `check` (`id`, `checkgroup`, `checkvalue`, `user`, `stamp`) VALUES
(77, 1, 0, 1, '2016-09-08 06:30:00'),
(78, 1, 1, 1, '2016-09-08 14:30:00'),
(79, 2, 0, 1, '2016-09-09 06:30:00'),
(80, 2, 1, 1, '2016-09-09 14:30:00'),
(81, 3, 0, 1, '2016-09-12 06:30:00'),
(82, 3, 1, 1, '2016-09-12 14:30:00'),
(89, 7, 0, 1, '2016-09-01 06:30:00'),
(90, 7, 1, 1, '2016-09-01 14:30:00'),
(91, 8, 0, 1, '2016-09-02 06:00:00'),
(92, 8, 1, 1, '2016-09-02 13:30:00'),
(93, 9, 0, 1, '2016-09-05 06:30:00'),
(94, 9, 1, 1, '2016-09-05 14:30:00'),
(95, 10, 0, 1, '2016-09-06 06:30:00'),
(96, 10, 1, 1, '2016-09-06 14:30:00'),
(97, 11, 0, 1, '2016-09-07 06:30:00'),
(98, 11, 1, 1, '2016-09-07 15:00:00'),
(99, 12, 0, 1, '2016-08-31 06:30:00'),
(100, 12, 1, 1, '2016-08-31 14:30:00'),
(114, 13, 0, 1, '2016-08-30 06:30:00'),
(115, 13, 1, 1, '2016-08-30 11:15:00'),
(116, 14, 0, 1, '2016-06-29 06:30:00'),
(117, 14, 1, 1, '2016-06-29 14:30:00'),
(118, 15, 0, 1, '2016-06-30 06:30:00'),
(119, 15, 1, 1, '2016-06-30 14:30:00'),
(120, 16, 0, 2, '2016-09-12 06:20:00'),
(121, 16, 1, 2, '2016-09-12 14:30:00'),
(124, 18, 0, 2, '2016-05-31 06:45:00'),
(125, 18, 1, 2, '2016-05-31 16:35:00'),
(126, 19, 0, 7, '2016-09-13 06:30:00'),
(130, 21, 0, 9, '2016-09-13 06:15:00'),
(132, 22, 0, 10, '2016-09-13 06:15:00'),
(211, 23, 0, 1, '2016-09-16 11:27:41'),
(212, 21, 1, 9, '2016-09-16 11:31:26'),
(213, 24, 0, 9, '2016-09-16 11:38:39'),
(214, 23, 1, 1, '2016-09-16 11:39:40'),
(215, 24, 1, 9, '2016-09-19 06:52:42'),
(216, 25, 0, 9, '2016-09-19 06:52:56');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(128) NOT NULL,
  `sname` varchar(30) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `fname` varchar(20) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `sname`, `fname`, `admin`) VALUES
(1, 'emil@it-gymnasiet.se', '$2y$10$smXmVurdX3QFX5eWQek4du6H0X4db581gvsv7DW3MX.XSuA3vNyQ2', 'Gunnarsson', 'Emil', 1),
(2, 'hannes@it-gymnasiet.se', '$2y$10$fCH5z0x0HAadP8ukaRV4SeygUcS9CTSqT6DoxXmNVlialY5YaWfwm', 'Kindströmmer', 'Hannes', 0),
(7, 'pontus@it-gymnasiet.se', '$2y$10$smXmVurdX3QFX5eWQek4du6H0X4db581gvsv7DW3MX.XSuA3vNyQ2', 'Astanius', 'Pontus', 0),
(8, 'bengt@it-gymnasiet.se', '$2y$10$smXmVurdX3QFX5eWQek4du6H0X4db581gvsv7DW3MX.XSuA3vNyQ2', 'Karlsson', 'Bengt', 0),
(9, 'dennis@it-gymnasiet.se', '$2y$10$smXmVurdX3QFX5eWQek4du6H0X4db581gvsv7DW3MX.XSuA3vNyQ2', 'Johansson', 'Dennis', 0),
(10, 'rickardh@it-gymnasiet.se', '$2y$10$smXmVurdX3QFX5eWQek4du6H0X4db581gvsv7DW3MX.XSuA3vNyQ2', 'Forslund', 'Rickardh', 0),
(11, 'kappa@keepo.se', '$2y$10$fCH5z0x0HAadP8ukaRV4SeygUcS9CTSqT6DoxXmNVlialY5YaWfwm', 'Keepo', 'Kappa', 0);

-- --------------------------------------------------------

--
-- Stand-in structure for view `user_status_for_admin`
--
CREATE TABLE `user_status_for_admin` (
`userid` int(11)
,`fname` varchar(20)
,`sname` varchar(30)
,`email` varchar(50)
,`user` int(11)
,`checkvalue` tinyint(1)
,`stamp` timestamp
,`checkgroup` int(11)
);

-- --------------------------------------------------------

--
-- Structure for view `all_shifts_ordered_by_checkin`
--
DROP TABLE IF EXISTS `all_shifts_ordered_by_checkin`;

CREATE ALGORITHM=UNDEFINED DEFINER=`stample`@`%` SQL SECURITY DEFINER VIEW `all_shifts_ordered_by_checkin`  AS  select `checkins`.`user` AS `user`,`user`.`fname` AS `fname`,`user`.`sname` AS `sname`,`checkins`.`stamp` AS `checkin_time`,`checkouts`.`stamp` AS `checkout_time` from ((((select `check`.`id` AS `id`,`check`.`checkgroup` AS `checkgroup`,`check`.`checkvalue` AS `checkvalue`,`check`.`user` AS `user`,`check`.`stamp` AS `stamp` from `check` where (`check`.`checkvalue` = 0))) `checkins` join (select `check`.`id` AS `id`,`check`.`checkgroup` AS `checkgroup`,`check`.`checkvalue` AS `checkvalue`,`check`.`user` AS `user`,`check`.`stamp` AS `stamp` from `check` where (`check`.`checkvalue` = 1)) `checkouts` on((`checkins`.`checkgroup` = `checkouts`.`checkgroup`))) left join `user` on((`checkins`.`user` = `user`.`id`))) order by `checkins`.`stamp` desc ;

-- --------------------------------------------------------

--
-- Structure for view `user_status_for_admin`
--
DROP TABLE IF EXISTS `user_status_for_admin`;

CREATE ALGORITHM=UNDEFINED DEFINER=`stample`@`%` SQL SECURITY DEFINER VIEW `user_status_for_admin`  AS  select `user`.`id` AS `userid`,`user`.`fname` AS `fname`,`user`.`sname` AS `sname`,`user`.`email` AS `email`,`check`.`user` AS `user`,`check`.`checkvalue` AS `checkvalue`,`check`.`stamp` AS `stamp`,`check`.`checkgroup` AS `checkgroup` from (`user` left join `check` on((`user`.`id` = `check`.`user`))) where (`check`.`stamp` = (select max(`check`.`stamp`) from `check` where (`check`.`user` = `user`.`id`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `check`
--
ALTER TABLE `check`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user` (`user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `check`
--
ALTER TABLE `check`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=217;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `check`
--
ALTER TABLE `check`
  ADD CONSTRAINT `check_user` FOREIGN KEY (`user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
