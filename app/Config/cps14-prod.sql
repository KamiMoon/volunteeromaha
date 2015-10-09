-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 04, 2014 at 02:13 PM
-- Server version: 5.5.37
-- PHP Version: 5.3.10-1ubuntu3.11

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cps14-prod`
--

-- --------------------------------------------------------

--
-- Table structure for table `acos`
--

DROP TABLE IF EXISTS `acos`;
CREATE TABLE IF NOT EXISTS `acos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT '',
  `foreign_key` int(10) unsigned DEFAULT NULL,
  `alias` varchar(255) DEFAULT '',
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, '', NULL, 'controllers', 1, 82),
(2, 1, NULL, NULL, 'Events', 2, 11),
(3, 2, NULL, NULL, 'index', 3, 4),
(4, 2, NULL, NULL, 'view', 5, 6),
(5, 2, NULL, NULL, 'add', 7, 8),
(6, 2, NULL, NULL, 'edit', 9, 10),
(7, 1, NULL, NULL, 'Organizations', 12, 23),
(8, 7, NULL, NULL, 'index', 13, 14),
(9, 7, NULL, NULL, 'view', 15, 16),
(10, 7, NULL, NULL, 'upload', 17, 18),
(11, 7, NULL, NULL, 'add', 19, 20),
(12, 7, NULL, NULL, 'edit', 21, 22),
(13, 1, NULL, NULL, 'Pages', 24, 27),
(14, 13, NULL, NULL, 'display', 25, 26),
(15, 1, NULL, NULL, 'Registrations', 28, 37),
(16, 15, NULL, NULL, 'index', 29, 30),
(17, 15, NULL, NULL, 'view', 31, 32),
(18, 15, NULL, NULL, 'add', 33, 34),
(19, 15, NULL, NULL, 'edit', 35, 36),
(20, 1, NULL, NULL, 'Roles', 38, 49),
(21, 20, NULL, NULL, 'index', 39, 40),
(22, 20, NULL, NULL, 'view', 41, 42),
(23, 20, NULL, NULL, 'add', 43, 44),
(24, 20, NULL, NULL, 'edit', 45, 46),
(25, 20, NULL, NULL, 'delete', 47, 48),
(26, 1, NULL, NULL, 'Users', 50, 77),
(27, 26, NULL, NULL, 'home', 51, 52),
(28, 26, NULL, NULL, 'thanks', 53, 54),
(29, 26, NULL, NULL, 'about', 55, 56),
(30, 26, NULL, NULL, 'contact', 57, 58),
(31, 26, NULL, NULL, 'calendar', 59, 60),
(32, 26, NULL, NULL, 'map', 61, 62),
(33, 26, NULL, NULL, 'profile', 63, 64),
(34, 26, NULL, NULL, 'register', 65, 66),
(35, 26, NULL, NULL, 'login', 67, 68),
(36, 26, NULL, NULL, 'logout', 69, 70),
(37, 26, NULL, NULL, 'getUserById', 71, 72),
(38, 26, NULL, NULL, 'activate', 73, 74),
(39, 26, NULL, NULL, 'edit', 75, 76),
(40, 1, NULL, NULL, 'AclExtras', 78, 79),
(41, 1, NULL, NULL, 'Upload', 80, 81);

-- --------------------------------------------------------

--
-- Table structure for table `approveorgs`
--

DROP TABLE IF EXISTS `approveorgs`;
CREATE TABLE IF NOT EXISTS `approveorgs` (
  `organization_id` int(11) DEFAULT NULL,
  `approved_org_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `aros`
--

DROP TABLE IF EXISTS `aros`;
CREATE TABLE IF NOT EXISTS `aros` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT '',
  `foreign_key` int(10) unsigned DEFAULT NULL,
  `alias` varchar(255) DEFAULT '',
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(7, NULL, 'Role', 7, '', 1, 4),
(8, NULL, 'Role', 8, '', 5, 6),
(9, NULL, 'Role', 9, '', 7, 10),
(10, NULL, 'Role', 10, '', 11, 14),
(11, NULL, 'Role', 11, '', 15, 16),
(12, NULL, 'Role', 12, '', 17, 18);

-- --------------------------------------------------------

--
-- Table structure for table `aros_acos`
--

DROP TABLE IF EXISTS `aros_acos`;
CREATE TABLE IF NOT EXISTS `aros_acos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) unsigned NOT NULL,
  `aco_id` int(10) unsigned NOT NULL,
  `_create` char(2) NOT NULL DEFAULT '0',
  `_read` char(2) NOT NULL DEFAULT '0',
  `_update` char(2) NOT NULL DEFAULT '0',
  `_delete` char(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `aros_acos`
--

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
(1, 7, 1, '-1', '-1', '-1', '-1'),
(2, 7, 3, '1', '1', '1', '1'),
(3, 7, 4, '1', '1', '1', '1'),
(4, 7, 8, '1', '1', '1', '1'),
(5, 7, 9, '1', '1', '1', '1'),
(6, 7, 16, '1', '1', '1', '1'),
(7, 7, 17, '1', '1', '1', '1'),
(8, 7, 18, '1', '1', '1', '1'),
(9, 7, 26, '1', '1', '1', '1'),
(10, 8, 1, '1', '1', '1', '1'),
(11, 8, 2, '1', '1', '1', '1'),
(12, 8, 7, '1', '1', '1', '1'),
(13, 8, 15, '1', '1', '1', '1'),
(14, 8, 20, '1', '1', '1', '1'),
(15, 8, 26, '1', '1', '1', '1'),
(16, 9, 1, '1', '1', '1', '1'),
(17, 9, 2, '1', '1', '1', '1'),
(18, 9, 7, '1', '1', '1', '1'),
(19, 9, 15, '1', '1', '1', '1'),
(20, 9, 26, '1', '1', '1', '1'),
(21, 10, 1, '-1', '-1', '-1', '-1'),
(22, 10, 3, '1', '1', '1', '1'),
(23, 10, 4, '1', '1', '1', '1'),
(24, 10, 8, '1', '1', '1', '1'),
(25, 10, 9, '1', '1', '1', '1'),
(26, 10, 16, '1', '1', '1', '1'),
(27, 10, 17, '1', '1', '1', '1'),
(28, 10, 18, '1', '1', '1', '1'),
(29, 10, 26, '1', '1', '1', '1'),
(30, 11, 1, '-1', '-1', '-1', '-1'),
(31, 11, 2, '1', '1', '1', '1'),
(32, 11, 8, '1', '1', '1', '1'),
(33, 11, 9, '1', '1', '1', '1'),
(34, 11, 12, '1', '1', '1', '1'),
(35, 11, 15, '1', '1', '1', '1'),
(36, 11, 26, '1', '1', '1', '1'),
(37, 12, 1, '1', '1', '1', '1'),
(38, 12, 2, '1', '1', '1', '1'),
(39, 12, 7, '1', '1', '1', '1'),
(40, 12, 15, '1', '1', '1', '1'),
(41, 12, 26, '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'School'),
(2, 'Non-Profit'),
(3, 'Corporation'),
(4, 'Government');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `organization_id` int(11) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `photo_dir` varchar(255) DEFAULT NULL,
  `description` varchar(8000) NOT NULL,
  `status` varchar(45) DEFAULT NULL,
  `start_time` datetime DEFAULT NULL,
  `end_time` datetime DEFAULT NULL,
  `contact_first_name` varchar(45) DEFAULT NULL,
  `contact_last_name` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `zip` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `state_id` int(10) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `organization_id`, `name`, `photo`, `photo_dir`, `description`, `status`, `start_time`, `end_time`, `contact_first_name`, `contact_last_name`, `phone`, `email`, `address`, `zip`, `city`, `state_id`, `created`, `modified`) VALUES
(1, 13, 'Disaster recovery volunteering', 'Disaster Recovery.jpg', '1', 'Receive special training on how to react in case of disaster.  Also, learn how to be safe and help others be safe.', '', '2014-05-21 09:00:00', '2014-05-21 17:00:00', 'Ana', 'Smith', '4025710472', 'asmith@gmail.com', '5920 Sorensen Pkwy', '68152', 'Omaha', 97, '2014-04-27 09:53:06', '2014-05-04 00:00:16'),
(2, 22, 'Cookie Sale', 'cookies.jpg', '2', 'Cookie Sale', '', '2014-05-17 09:00:00', '2014-05-17 14:00:00', 'Ana', 'Smith', '4025925952', 'girlsscoutsnebrasak@gmail.com', '2121 South 44th Street', '68105', 'Omaha', 97, '2014-04-27 10:36:05', '2014-05-02 19:45:52'),
(3, 19, 'Food Donations Collecting', 'foodcollection.jpg', '3', 'Food Donations Collecting for the Food Banks of Nebraska', '', '2014-05-12 10:00:00', '2014-05-12 18:00:00', 'Ana ', 'Smith', '4025588189', 'foodbanknebraska@gmail.com', '701 N. 6th St.', '68310', 'Beatrice', 97, '2014-04-27 10:40:54', '2014-05-02 19:47:50'),
(4, 13, 'Disaster Preparedness Training', 'disaster.jpg', '4', 'Training for the community on how to react when facing disaster and tragedies.  Learn how to act on disasters and help to safe lives.', '', '2014-05-04 14:10:00', '2014-05-04 14:10:00', 'Rose', 'Troupe', '4026985563', 'redcrossnebraska@gmail.com', '1110 Jones St', ' 68102', 'Omaha', 97, '2014-05-02 00:25:44', '2014-05-04 14:11:08'),
(5, 13, 'Disaster Action Team Training', 'DisasterActionTeamTraining.jpg', '5', 'Be part of our Disaster Action Team!', '', '2014-05-20 08:00:00', '2014-05-20 16:00:00', 'Ana', 'Smith', '4026985563', 'asmith@gmail.com', '415 S. 11th St.', '68102', 'Omaha', 97, '2014-05-02 18:33:47', '2014-05-03 10:53:45'),
(6, 13, 'First Aid Training', 'first_aid.jpg', '6', 'Learn basic First Aid.', '', '2014-05-09 10:00:00', '2014-05-09 16:00:00', 'Eri', 'Kizaki', '4029170381', 'erickizaki@gmail.com', '7327 Western Ave', '68114', 'Omaha', 97, '2014-05-03 10:25:30', '2014-05-03 22:49:50'),
(7, 24, 'Dine Out to End Hunger', 'american-food-clipart.png', '7', 'Join us at Ahmad''s Restaurant to eat a delicious meal and help to collect funds to fight hunger.', '', '2014-05-04 14:04:00', '2014-05-04 14:04:00', 'Rose', 'Troupe', '4025174578', 'rosetroupe@gmail.com', '1006 Howard St', ' 68102', 'Omaha', 97, '2014-05-03 11:15:07', '2014-05-04 14:06:07'),
(8, 21, 'Volunteer at the Zoo', 'henry-doorly-zoo.jpg', '8', 'Volunteer to clean the zoo and improve the place for Omaha visitors.', '', '2014-05-08 10:00:00', '2014-05-08 16:00:00', 'Ana ', 'Smith', '4025710472', 'asmith@gmail.com', '3701 S 10th Street ', '68107', 'Omaha', 97, '2014-05-03 22:44:55', '2014-05-03 22:44:55'),
(9, 13, 'Tornado Safety Training', 'tornadosafetytraining.png', '9', 'Learn to be safe and help others be safe during a before, during and after a tornado.', '', '2014-05-28 14:00:00', '2014-05-28 16:00:00', 'Rose', 'Troupe', '4025174578', 'rosetroupe@gmail.com', '1006 Howard St', '68102', 'Omaha', 97, '2014-05-03 23:07:49', '2014-05-03 23:07:49'),
(10, 21, 'Boy Scouts Spring Volunteering', 'spring volunteering boy scouts.jpg', '10', 'Join us at our Spring Volunteering Event to clean parks and water plants at Omaha Parks.', '', '2014-05-30 09:00:00', '2014-05-03 00:30:00', 'Ana', 'Smith', '4025710472', 'asmith@gmail.com', '3701 S 10th Street', '68107', 'Omaha', 97, '2014-05-03 23:23:18', '2014-05-03 23:24:39');

-- --------------------------------------------------------

--
-- Table structure for table `events_interests`
--

DROP TABLE IF EXISTS `events_interests`;
CREATE TABLE IF NOT EXISTS `events_interests` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `event_id` int(10) DEFAULT NULL,
  `interest_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hours`
--

DROP TABLE IF EXISTS `hours`;
CREATE TABLE IF NOT EXISTS `hours` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `status_id` int(11) DEFAULT '1',
  `user_id` int(11) DEFAULT NULL,
  `registration_id` int(11) DEFAULT NULL,
  `hours` float DEFAULT NULL,
  `school_status` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `hours`
--

INSERT INTO `hours` (`id`, `status_id`, `user_id`, `registration_id`, `hours`, `school_status`, `created`, `modified`) VALUES
(1, 2, 13, 1, 100, NULL, '2014-04-27 09:55:45', '2014-04-27 10:31:20'),
(2, 2, 8, 2, 700, NULL, '2014-04-27 10:04:43', '2014-04-29 20:22:21'),
(3, 2, 11, 3, 550, NULL, '2014-04-27 10:50:23', '2014-04-27 10:50:28'),
(4, 2, 6, 4, 350, NULL, '2014-04-27 11:03:40', '2014-04-27 11:03:40'),
(5, 2, 4, 5, 300, NULL, '2014-04-27 11:09:34', '2014-04-27 11:09:34'),
(6, 2, 12, 6, 100, NULL, '2014-04-27 11:17:45', '2014-04-27 11:17:45'),
(7, 2, 8, 9, 2, NULL, '2014-05-03 23:42:00', '2014-05-03 23:42:08');

-- --------------------------------------------------------

--
-- Table structure for table `interests`
--

DROP TABLE IF EXISTS `interests`;
CREATE TABLE IF NOT EXISTS `interests` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `interests` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `interests`
--

INSERT INTO `interests` (`id`, `interests`) VALUES
(1, 'Animals'),
(2, 'Construction'),
(3, 'Health'),
(4, 'Education');

-- --------------------------------------------------------

--
-- Table structure for table `interests_organizations`
--

DROP TABLE IF EXISTS `interests_organizations`;
CREATE TABLE IF NOT EXISTS `interests_organizations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `interest_id` int(10) DEFAULT NULL,
  `organization_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `interests_users`
--

DROP TABLE IF EXISTS `interests_users`;
CREATE TABLE IF NOT EXISTS `interests_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `interest_id` int(10) DEFAULT NULL,
  `user_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `interests_users`
--

INSERT INTO `interests_users` (`id`, `interest_id`, `user_id`) VALUES
(4, 1, 15),
(5, 2, 15),
(6, 4, 15),
(7, 1, 21);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS `members` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `organization_id` int(11) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `user_id`, `organization_id`, `role_id`, `status_id`) VALUES
(1, 1, NULL, 1, 2),
(2, 2, 1, 2, 2),
(3, 2, 2, 2, 2),
(4, 1, 3, 2, 2),
(5, 1, 4, 2, 2),
(6, 1, 5, 2, 2),
(7, 1, 6, 2, 2),
(8, 1, 7, 2, 2),
(9, 1, 8, 2, 2),
(10, 1, 9, 2, 2),
(11, 1, 10, 2, 2),
(12, 1, 11, 2, 2),
(13, 1, 12, 2, 2),
(14, 1, 13, 2, 2),
(15, 1, 14, 2, 2),
(16, 1, 15, 2, 2),
(17, 1, 16, 2, 2),
(18, 1, 17, 2, 2),
(19, 1, 18, 2, 2),
(20, 1, 19, 2, 2),
(21, 1, 20, 2, 2),
(22, 1, 21, 2, 2),
(23, 1, 22, 2, 2),
(24, 13, 13, 3, 2),
(25, 13, 14, 3, 2),
(26, 13, 15, 3, 2),
(27, 13, 16, 3, 2),
(28, 13, 17, 3, 2),
(29, 13, 18, 3, 2),
(30, 13, 19, 3, 2),
(31, 13, 20, 3, 2),
(32, 13, 21, 3, 2),
(33, 13, 22, 3, 2),
(34, 14, 3, 3, 2),
(35, 14, 4, 3, 2),
(36, 14, 5, 3, 2),
(37, 14, 6, 3, 2),
(38, 14, 7, 3, 2),
(39, 14, 8, 3, 2),
(40, 14, 9, 3, 2),
(41, 14, 11, 3, 2),
(42, 14, 10, 3, 2),
(43, 14, 12, 3, 2),
(44, 8, 3, 4, 2),
(45, 11, 6, 4, 2),
(46, 6, 9, 4, 2),
(47, 4, 8, 4, 2),
(48, 12, 10, 4, 2),
(49, 2, 23, 2, 2),
(50, 15, 2, 4, 2),
(51, 16, 24, 2, 2),
(52, 16, 13, 3, 2),
(53, 21, 25, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `organizations`
--

DROP TABLE IF EXISTS `organizations`;
CREATE TABLE IF NOT EXISTS `organizations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `status_id` int(11) DEFAULT '1',
  `name` varchar(45) DEFAULT NULL,
  `category_id` int(11) DEFAULT '1',
  `url` varchar(45) DEFAULT NULL,
  `short_description` varchar(180) DEFAULT NULL,
  `long_description` varchar(8000) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `photo_dir` varchar(255) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `state_id` int(10) DEFAULT NULL,
  `zip` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `fax` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `organizations`
--

INSERT INTO `organizations` (`id`, `status_id`, `name`, `category_id`, `url`, `short_description`, `long_description`, `photo`, `photo_dir`, `address`, `city`, `state_id`, `zip`, `phone`, `fax`, `email`, `created`, `modified`) VALUES
(1, 3, 'Phillies University', 1, '', 'Baseball School', '', 'building.jpg', '1', '123 Anystreet', 'Happytown', 106, '44345', '4022222222', '', 'tgoldsberry@unomaha.edu', '2014-04-23 20:26:08', '2014-04-23 20:26:08'),
(2, 3, 'Phillies University', 1, '', 'Baseball School', '', 'building.jpg', '2', '123 Anystreet', 'Happytown', 106, '44345', '4022222222', '', 'tgoldsberry@unomaha.edu', '2014-04-23 20:26:10', '2014-04-23 20:26:10'),
(3, 2, 'Millard North High School', 1, '', 'Millard North High School', '', 'MillardNorthHighSchool.jpg', '3', '', '', NULL, '', '', '', 'millard.north@gmail.com', '2014-04-26 13:48:29', '2014-04-27 12:27:50'),
(4, 3, 'Millard South High School', 1, '', 'Millard South High School', '', 'MillardSouthHighSchool.jpg', '4', '', '', NULL, '', '', '', 'millard.south@gmail.com', '2014-04-26 13:53:00', '2014-04-26 15:13:58'),
(5, 3, 'Millard West High School', 1, '', 'Millard West High School', '', 'MillardWestHighSchool.jpg', '5', '', '', NULL, '', '', '', 'millard.west@gmail.com', '2014-04-26 13:57:43', '2014-04-26 15:13:38'),
(6, 2, 'Omaha Benson High School', 1, '', 'Benson High School', '', 'BensonHighSchool.jpg', '6', '', '', NULL, '', '', '', 'benson@gmail.com', '2014-04-26 14:03:59', '2014-04-26 15:12:43'),
(7, 3, 'Omaha Bryan High School', 1, '', 'Bryan High School', '', 'BryanHighSchool.jpg', '7', '', '', NULL, '', '', '', 'bryan@gmail.com', '2014-04-26 14:04:33', '2014-04-26 15:12:27'),
(8, 2, 'Omaha Burke High School', 1, '', 'Burke High School', '', 'BurkeHighSchool.jpg', '8', '', '', NULL, '', '', '', 'burke@gmail.com', '2014-04-26 14:05:06', '2014-04-26 14:47:32'),
(9, 2, 'Omaha Central High School', 1, '', 'Omaha Central High School', '', 'CentralHighSchool.jpg', '9', '', '', NULL, '', '', '', 'central@gmail.com', '2014-04-26 14:30:57', '2014-04-26 14:46:45'),
(10, 2, 'Omaha South High School', 1, '', 'Omaha South High School', '', 'SouthHighSchool.jpg', '10', '', '', NULL, '', '', '', 'south@gmail.com', '2014-04-26 15:20:18', '2014-04-26 15:25:43'),
(11, 3, 'Omaha North High School', 1, '', 'Omaha North High School', '', 'NorthHighSchool.jpg', '11', '', '', NULL, '', '', '', 'omahanorth@gmail.com', '2014-04-26 15:24:37', '2014-04-26 15:26:50'),
(12, 3, 'Omaha Nortwesth High School', 1, '', 'Omaha Northwest High School', '', 'NorthWestHighSchool.jpg', '12', '', '', NULL, '', '', '', 'omahanorthwest@gmail.com', '2014-04-26 15:25:13', '2014-04-26 15:27:38'),
(13, 2, 'American Red Cross Nebraska', 2, 'http://www.redcross.org/', 'Disaster Relief, Supporting America’s Military Families, Lifesaving Blood, Health and Safety Services, International Services', 'The American Red Cross exists to provide compassionate care to those in need. Our network of generous donors, volunteers and employees share a mission of preventing and relieving suffering, here at home and around the world.', 'Red-Cross.jpg', '13', '2912 S 80th Ave', 'Omaha', 97, '68124', '4023437700', '4023437700', 'redcross@gmail.com', '2014-04-26 15:48:34', '2014-05-03 23:47:23'),
(14, 2, 'Habitat for Humanity Omaha', 2, '', 'Habitat for Humanity Omaha', '', 'habitatforhumanity.jpeg', '14', '', '', NULL, '', '', '', 'habitat@gmail.com', '2014-04-26 15:49:43', '2014-04-27 00:07:10'),
(15, 3, 'Big Brothers Big Sisters', 2, '', 'Big Brothers Big Sisters of the Midlands', '', 'bigbrothersbigsisters.jpg', '15', '', '', NULL, '', '', '', 'bigbrothers@gmail.com', '2014-04-26 15:50:14', '2014-04-27 00:07:49'),
(16, 3, 'Open Door Mission-Disapproved', 2, '', 'Open Door Mission', '', 'opendoormission.jpeg', '16', '', '', NULL, '', '', '', 'open@gmail.com', '2014-04-26 17:04:06', '2014-04-30 20:47:00'),
(17, 2, 'Joslyn Art Museum', 2, '', 'Joslyn Art Museum', '', 'joslynartmuseum.jpg', '17', '', '', NULL, '', '', '', 'joslyn@gmail.com', '2014-04-26 19:37:03', '2014-04-27 00:08:54'),
(18, 3, 'Children''s Hospital & Medical Center', 2, '', 'Children''s Hospital and Medical Center', '', 'childrenhospital&medicalcenter.jpg', '18', '', '', NULL, '', '', '', 'hospital@gmail.com', '2014-04-26 19:49:32', '2014-04-27 00:09:58'),
(19, 2, 'The Nebraska Food Bank Network', 2, 'http://www.foodpantries.org/st/nebraska', 'The Nebraska Food Bank Network', 'There are several food pantries and food banks in the Nebraska.  Keeping this free resource updated is a collaborative effort and will benefit families and individuals in need. Thank you for your support.', 'nebraskafoodbank.jpg', '19', '701 N. 6th St.', 'Beatrice', 97, '68310', '4022235306', '4022235306', 'foodbanknetwork@gmail.com', '2014-04-26 21:13:41', '2014-04-27 14:47:38'),
(20, 2, 'The Nebraska Medical Center ', 2, '', 'The Nebraska Medical Center ', '', 'nebraskamedicalcenter.jpg', '20', '', '', NULL, '', '', '', 'nebraskamedical@gmail.com', '2014-04-26 21:14:27', '2014-04-27 00:18:24'),
(21, 2, 'Boy Scouts Nebraska', 2, 'http://www.mac-bsa.org/', 'The Boy Scouts of America is one of the largest youth organizations in the United States, with 2.7 million youth members and over 1 million adult volunteers.', 'The Boy Scouts of America is one of the nation''s largest and most prominent values-based youth development organizations. The BSA provides a program for young people that builds character, trains them in the responsibilities of participating citizenship, and develops personal fitness.', 'Boy-Scouts-of-America.jpg', '21', '1209 Jackson St.', 'Omaha', 97, '68102', '4026369632', '4029854568', 'boysnebrasaka@gmail.com', '2014-04-26 21:16:45', '2014-05-04 00:16:38'),
(22, 2, 'Girl Scouts of Nebraska', 2, 'http://www.girlscoutsnebraska.org/', 'Girl Scouts of Nebraska', 'Imagine a new generation of leaders, who lead out of principle rather than pride, who are willing to step across barriers of class and race, who seek out the work that needs doing in the world, and bring boundless energy to every challenge. ', 'GirlScoutsNebraska.jpg', '22', '2121 South 44th Street', 'Omaha', 97, '68105', '4025588189', '8774475558', 'girlsscouts@gmail.com', '2014-04-26 21:17:23', '2014-04-27 14:50:20'),
(24, 2, 'Open Door Mission', 2, 'http://www.opendoormission.org/', 'Open Door Mission is a Gospel Rescue Mission founded in 1954 committed to breaking the cycle of homelessness and poverty.', 'Each day, Open Door Mission’s campus offers 816 safe, shelter beds to homeless men, women and children, serves over 2,000 hot, nutritious meals and provides preventive measures to more than 275 people living in poverty.', 'opendoormission.jpeg', '24', '2828 North 23rd Street East', 'Omaha', 97, ' 68110', '4024221111', ' 4024220737', 'opendoormission@gmail.com', '2014-04-30 20:45:04', '2014-05-03 23:53:07'),
(25, 2, 'Nebraska Humane Society', 2, 'http://www.nehumanesociety.org/site/PageServe', 'We provide education, give sanctuary to animals, encourage adoptions and promote responsible pet ownership.', 'The Nebraska Humane Society acts as a municipal shelter for more than a half dozen communities. We are not a “no-kill” shelter, we are a no-suffering shelter, because we accept and provide sanctuary to any animal from our jurisdiction that comes through our doors. We believe that every animal, even those too sick, too abused or too aggressive to be adopted deserve to be treated fairly.', 'NebraskaHumaneSociety.jpg', '25', '8929 Fort Street', 'Omaha', 97, '68134', '4024447800', '4025461476', 'nebraskahumanesociety@gmail.com', '2014-05-04 00:47:07', '2014-05-04 00:47:07');

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

DROP TABLE IF EXISTS `registrations`;
CREATE TABLE IF NOT EXISTS `registrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT '1',
  `event_id` int(11) DEFAULT NULL,
  `start_time` datetime DEFAULT NULL,
  `end_time` datetime DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `user_id`, `status_id`, `event_id`, `start_time`, `end_time`, `comment`) VALUES
(1, 10, 2, 1, '2014-05-06 09:00:00', '2015-05-06 09:00:00', ''),
(2, 8, 2, 1, '2014-05-06 09:00:00', '2015-05-06 09:00:00', ''),
(3, 11, 2, 1, '2014-05-06 09:00:00', '2015-05-06 09:00:00', ''),
(4, 6, 2, 3, '2014-05-01 09:00:00', '2014-12-31 09:00:00', ''),
(5, 4, 2, 3, '2014-06-01 09:00:00', '2014-12-31 09:00:00', ''),
(6, 12, 2, 2, '2014-05-01 09:00:00', '2014-06-30 09:00:00', ''),
(7, 13, 2, 4, '2014-05-26 08:00:00', '2014-05-26 17:00:00', ''),
(8, 8, 2, 5, '2014-05-26 08:38:00', '2014-05-26 05:00:00', ''),
(9, 8, 2, 9, '2014-05-28 14:00:00', '2014-05-28 16:00:00', 'Very important training.');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'VO Admin'),
(2, 'Organization Admin Primary'),
(3, 'Organization Admin Secondary'),
(4, 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

DROP TABLE IF EXISTS `schools`;
CREATE TABLE IF NOT EXISTS `schools` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=517 ;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `name`) VALUES
(500, 'Millard North High School'),
(501, 'Millard South High School'),
(502, 'Millard West High School'),
(503, 'Millard Horizon High School'),
(504, 'Omaha Benson High School Magnet'),
(505, 'Omaha Bryan High School'),
(506, 'Omaha Burke High School'),
(507, 'Omaha Central High School'),
(508, 'Omaha North High School'),
(509, 'Omaha Northwest High School'),
(510, 'Omaha South High School'),
(511, 'Westside High School'),
(512, 'Papillion-La Vista South High School'),
(513, 'Papillion La Vista Senior High School'),
(514, 'Bellevue East Senior High School'),
(515, 'Bellevue West Senior High School'),
(516, 'Ralston High School');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

DROP TABLE IF EXISTS `states`;
CREATE TABLE IF NOT EXISTS `states` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(40) NOT NULL,
  `abbrev` char(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=131 ;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `abbrev`) VALUES
(66, 'Alaska', 'AK'),
(67, 'Alabama', 'AL'),
(68, 'American Samoa', 'AS'),
(69, 'Arizona', 'AZ'),
(70, 'Arkansas', 'AR'),
(71, 'California', 'CA'),
(72, 'Colorado', 'CO'),
(73, 'Connecticut', 'CT'),
(74, 'Delaware', 'DE'),
(75, 'District of Columbia', 'DC'),
(76, 'Federated States of Micronesia', 'FM'),
(77, 'Florida', 'FL'),
(78, 'Georgia', 'GA'),
(79, 'Guam', 'GU'),
(80, 'Hawaii', 'HI'),
(81, 'Idaho', 'ID'),
(82, 'Illinois', 'IL'),
(83, 'Indiana', 'IN'),
(84, 'Iowa', 'IA'),
(85, 'Kansas', 'KS'),
(86, 'Kentucky', 'KY'),
(87, 'Louisiana', 'LA'),
(88, 'Maine', 'ME'),
(89, 'Marshall Islands', 'MH'),
(90, 'Maryland', 'MD'),
(91, 'Massachusetts', 'MA'),
(92, 'Michigan', 'MI'),
(93, 'Minnesota', 'MN'),
(94, 'Mississippi', 'MS'),
(95, 'Missouri', 'MO'),
(96, 'Montana', 'MT'),
(97, 'Nebraska', 'NE'),
(98, 'Nevada', 'NV'),
(99, 'New Hampshire', 'NH'),
(100, 'New Jersey', 'NJ'),
(101, 'New Mexico', 'NM'),
(102, 'New York', 'NY'),
(103, 'North Carolina', 'NC'),
(104, 'North Dakota', 'ND'),
(105, 'Northern Mariana Islands', 'MP'),
(106, 'Ohio', 'OH'),
(107, 'Oklahoma', 'OK'),
(108, 'Oregon', 'OR'),
(109, 'Palau', 'PW'),
(110, 'Pennsylvania', 'PA'),
(111, 'Puerto Rico', 'PR'),
(112, 'Rhode Island', 'RI'),
(113, 'South Carolina', 'SC'),
(114, 'South Dakota', 'SD'),
(115, 'Tennessee', 'TN'),
(116, 'Texas', 'TX'),
(117, 'Utah', 'UT'),
(118, 'Vermont', 'VT'),
(119, 'Virgin Islands', 'VI'),
(120, 'Virginia', 'VA'),
(121, 'Washington', 'WA'),
(122, 'West Virginia', 'WV'),
(123, 'Wisconsin', 'WI'),
(124, 'Wyoming', 'WY'),
(125, 'Armed Forces Africa', 'AE'),
(126, 'Armed Forces Americas (except Canada)', 'AA'),
(127, 'Armed Forces Canada', 'AE'),
(128, 'Armed Forces Europe', 'AE'),
(129, 'Armed Forces Middle East', 'AE'),
(130, 'Armed Forces Pacific', 'AP');

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

DROP TABLE IF EXISTS `statuses`;
CREATE TABLE IF NOT EXISTS `statuses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `status`) VALUES
(1, 'Pending'),
(2, 'Approved'),
(3, 'Disapproved');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `address` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state_id` int(10) DEFAULT NULL,
  `zip` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `fax` varchar(50) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `activated` tinyint(4) NOT NULL DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `photo_dir` varchar(255) DEFAULT NULL,
  `terms` tinyint(1) NOT NULL DEFAULT '0',
  `leaderboardopt` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `address`, `city`, `state_id`, `zip`, `phone`, `email`, `fax`, `username`, `password`, `activated`, `created`, `modified`, `photo`, `photo_dir`, `terms`, `leaderboardopt`) VALUES
(1, 'Eric', 'Kizaki', '', '', NULL, '', '6609980166', 'erickizaki@gmail.com', '', 'voadmin', 'ed2230faafc90bc0378c8cf621f2e45c99567e53', 1, '2014-02-22 18:14:23', '2014-02-27 19:53:13', NULL, NULL, 0, 0),
(2, 'Ken', 'Griffey Jr.', NULL, NULL, NULL, NULL, NULL, 'tgoldsberry@unomaha.edu', NULL, 'phillies', 'ed2230faafc90bc0378c8cf621f2e45c99567e53', 1, '2014-04-23 20:22:20', '2014-04-23 20:22:20', NULL, NULL, 1, 0),
(3, 'Vincent', 'Hendricks', '', '', NULL, '', '', 'rborge@unomaha.edu', '', 'vhendricks', 'ed2230faafc90bc0378c8cf621f2e45c99567e53', 1, '2014-04-26 11:39:03', '2014-04-26 12:05:33', '1.jpg', '3', 1, 0),
(4, 'Craig', 'Donovan', '5007 Underwood Ave', 'Omaha', 97, '68132', '4025678956', 'rborge@unomaha.edu', '', 'cdonovan', 'ed2230faafc90bc0378c8cf621f2e45c99567e53', 1, '2014-04-26 11:46:12', '2014-04-27 14:26:34', '2.jpg', '4', 1, 0),
(5, 'Stephen', 'Haney', '', '', NULL, '', '', 'rborge@unomaha.edu', '', 'shaney', 'ed2230faafc90bc0378c8cf621f2e45c99567e53', 1, '2014-04-26 11:48:17', '2014-04-26 12:08:07', '4.jpg', '5', 1, 0),
(6, 'Brian', 'Banks', '621 Pacific St', 'Omaha', 97, '68108', '4023453438', 'rborge@unomaha.edu', '', 'bbanks', 'ed2230faafc90bc0378c8cf621f2e45c99567e53', 1, '2014-04-26 11:52:51', '2014-04-27 14:16:42', '5.jpg', '6', 1, 0),
(7, 'Jacob', 'Townsend', '', '', NULL, '', '', 'rborge@unomaha.edu', '', 'jtownsend', 'ed2230faafc90bc0378c8cf621f2e45c99567e53', 1, '2014-04-26 12:14:57', '2014-04-26 12:15:42', '6.jpg', '7', 1, 0),
(8, 'Madeline', 'Bernard', '17330 W Ctr Rd #STE 106', 'Omaha', 97, '68130', '4026979888', 'rborge@unomaha.edu', '4025175694', 'mbernard', 'ed2230faafc90bc0378c8cf621f2e45c99567e53', 1, '2014-04-26 12:28:04', '2014-04-27 14:23:37', '8.jpg', '8', 1, 0),
(9, 'Emi', 'Sheppard', '', '', NULL, '', '', 'rborge@unomaha.edu', '', 'esheppard', 'ed2230faafc90bc0378c8cf621f2e45c99567e53', 1, '2014-04-26 12:29:35', '2014-04-26 13:01:45', '1.jpg', '9', 1, 0),
(10, 'Lilah', 'Beck', '', '', NULL, '', '', 'rborge@unomaha.edu', '', 'lbeck', 'ed2230faafc90bc0378c8cf621f2e45c99567e53', 1, '2014-04-26 12:50:36', '2014-04-26 13:02:28', '3.jpg', '10', 1, 0),
(11, 'Celeste', 'Lucas', '3821 Ctr St', 'Omaha', 97, '68105', '4025731888', 'rborge@unomaha.edu', '', 'clucas', 'ed2230faafc90bc0378c8cf621f2e45c99567e53', 1, '2014-04-26 12:52:04', '2014-04-27 14:24:40', '25.jpg', '11', 1, 0),
(12, 'Fatima', 'Pratt', '3007 S 83rd Plz', 'Omaha', 97, '68124', '4023912923', 'rborge@unomaha.edu', '', 'fpratt', 'ed2230faafc90bc0378c8cf621f2e45c99567e53', 1, '2014-04-26 12:53:37', '2014-04-27 14:27:24', '26.jpg', '12', 1, 0),
(13, 'Ana', 'Smith', '', '', NULL, '', '', 'rborge@unomaha.edu', '', 'asmith', 'ed2230faafc90bc0378c8cf621f2e45c99567e53', 1, '2014-04-27 01:18:47', '2014-05-03 10:35:19', 'AnaSmith.jpg', '13', 1, 0),
(14, 'James', 'Roth', '', '', NULL, '', '', 'rborge@unomaha.edu', '', 'jroth', 'ed2230faafc90bc0378c8cf621f2e45c99567e53', 1, '2014-04-27 01:42:30', '2014-05-03 10:35:58', 'JamesRoth.jpg', '14', 1, 0),
(15, 'Billy', 'Butler', '6001 Dodge St', 'Omaha', 97, '68182', '4022222222', 'tgoldsberry@unomaha.edu', '4022222222', 'royals16', 'ed2230faafc90bc0378c8cf621f2e45c99567e53', 1, '2014-04-30 14:39:51', '2014-04-30 17:07:48', 'billyb.png', '15', 1, 0),
(16, 'Rose', 'Troupe', '', '', NULL, '', '', 'rborge@unomaha.edu', '', 'rtroupe', 'ed2230faafc90bc0378c8cf621f2e45c99567e53', 1, '2014-04-30 20:20:09', '2014-04-30 20:39:55', 'RoseTroupe(rtroupe).jpg', '16', 1, 0),
(17, 'Derek', 'Jeter', '', '', NULL, '', '', 'tgoldsberry@unomaha.edu', '', 'yankees2', 'ed2230faafc90bc0378c8cf621f2e45c99567e53', 0, '2014-04-30 20:59:48', '2014-05-01 18:08:22', NULL, '', 1, 0),
(18, 'Mike', 'Troub', NULL, NULL, NULL, NULL, NULL, 'tgoldsberry@unomaha.edu', NULL, 'Angels27', 'ed2230faafc90bc0378c8cf621f2e45c99567e53', 1, '2014-05-01 18:15:45', '2014-05-01 18:15:45', NULL, NULL, 1, 0),
(19, 'Ted', 'Boyce', '', '', NULL, '', '', 'rborge@unomaha.edu', '', 'tboyce', 'ed2230faafc90bc0378c8cf621f2e45c99567e53', 1, '2014-05-01 22:00:46', '2014-05-01 22:10:47', 'malevolunteer-TedBoyce.jpg', '19', 1, 0),
(20, 'Mark', 'Hunter', NULL, NULL, NULL, NULL, NULL, 'rborge@unomaha.edu', NULL, 'mhunter', 'ed2230faafc90bc0378c8cf621f2e45c99567e53', 1, '2014-05-04 00:39:10', '2014-05-04 00:39:10', NULL, NULL, 1, 0),
(21, 'Mark', 'Lybeck', '521 S. 13th St.', 'Omaha', 97, '68102', '4029875546', 'rborge@unomaha.edu', '4023778896', 'mlybeck', 'ed2230faafc90bc0378c8cf621f2e45c99567e53', 1, '2014-05-04 00:39:43', '2014-05-04 00:42:31', 'PetVolunteeringAdmin.jpg', '21', 1, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
