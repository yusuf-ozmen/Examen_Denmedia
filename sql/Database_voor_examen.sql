DROP DATABASE IF EXISTS reserveren;
CREATE DATABASE reserveren;
USE reserveren;

CREATE TABLE IF NOT EXISTS `reservations` (
  `res_id` int(11) NOT NULL,
  `res_date` date,
  `res_slot` varchar(32) DEFAULT NULL,
  `res_name` varchar(255) NOT NULL,
  `res_email` varchar(255) NOT NULL,
  `res_tel` varchar(60) NOT NULL,
  `res_notes` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `reservations`
  ADD PRIMARY KEY (`res_id`),
  ADD KEY `res_date` (`res_date`),
  ADD KEY `res_slot` (`res_slot`),
  ADD KEY `res_name` (`res_name`),
  ADD KEY `res_email` (`res_email`),
  ADD KEY `res_tel` (`res_tel`);

ALTER TABLE `reservations`
  MODIFY `res_id` int(11) NOT NULL AUTO_INCREMENT;

CREATE TABLE IF NOT EXISTS `contact` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_firstname` varchar(255) DEFAULT NULL,
  `c_lastname` varchar(255) DEFAULT NULL,
  `c_subject` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `contact` (`c_id`, `c_firstname`, `c_lastname`, `c_subject`) VALUES
('1', 'Aline', 'Steward', 'This is a test');



CREATE TABLE IF NOT EXISTS `users` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_username` varchar(255) DEFAULT NULL,
  `u_password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `users` (`u_id`, `u_username`, `u_password`) VALUES
('1', 'admin', '1234');



