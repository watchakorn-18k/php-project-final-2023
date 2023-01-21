-- Adminer 4.8.1 MySQL 5.5.5-10.4.21-MariaDB-log dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `tblpersonalsoccer`;
CREATE TABLE `tblpersonalsoccer` (
  `per_id` int(5) NOT NULL AUTO_INCREMENT,
  `per_name` varchar(12) NOT NULL,
  `national` varchar(12) NOT NULL,
  `position` varchar(12) NOT NULL,
  `team_id` varchar(5) NOT NULL,
  PRIMARY KEY (`per_id`),
  KEY `team_id` (`team_id`),
  CONSTRAINT `tblpersonalsoccer_ibfk_1` FOREIGN KEY (`team_id`) REFERENCES `tblteam` (`team_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `tblpersonalsoccer` (`per_id`, `per_name`, `national`, `position`, `team_id`) VALUES
(1,	'Torres',	'สเปน',	'กองหน้า',	'T001'),
(2,	'John terry',	'อังกฤษ',	'กองหลัง',	'T003'),
(3,	'Runny',	'อังกฤษ ',	'กองหน้า',	'T002'),
(5,	'เทส',	'ไทย',	'กองกลาง',	'T003'),
(6,	'asdsad',	'ไทย',	'กองกลาง',	'T002');

DROP TABLE IF EXISTS `tblteam`;
CREATE TABLE `tblteam` (
  `team_id` varchar(5) NOT NULL,
  `team_name` varchar(12) NOT NULL,
  PRIMARY KEY (`team_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `tblteam` (`team_id`, `team_name`) VALUES
('T001',	'Liverpool'),
('T002',	'Manchester U'),
('T003',	'Chelsea');

-- 2023-01-21 04:11:45
