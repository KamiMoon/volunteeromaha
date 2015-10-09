-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 02, 2014 at 08:11 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `volunteeromaha`
--

-- --------------------------------------------------------

--
-- Table structure for table `acos`
--

DROP TABLE IF EXISTS `acos`;
/*
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
*/
--
-- Dumping data for table `acos`
--
/*
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
*/
--
-- Table structure for table `aros`
--

DROP TABLE IF EXISTS `aros`;
/*CREATE TABLE IF NOT EXISTS `aros` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT '',
  `foreign_key` int(10) unsigned DEFAULT NULL,
  `alias` varchar(255) DEFAULT '',
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(7, NULL, 'Role', 7, '', 1, 4),
(8, NULL, 'Role', 8, '', 5, 6),
(9, NULL, 'Role', 9, '', 7, 16),
(10, NULL, 'Role', 10, '', 17, 20),
(11, NULL, 'Role', 11, '', 21, 22),
(12, NULL, 'Role', 12, '', 23, 24),
(13, 8, 'User', 1, '', 8, 9),
(14, 9, 'User', 2, '', 20, 21),
(15, 10, 'User', 3, '', 26, 27),
(16, 11, 'User', 4, '', 30, 31),
(17, 12, 'User', 5, '', 34, 35),
(18, 7, 'User', 6, '', 4, 5),
(19, 9, 'User', 7, '', 10, 11),
(20, 9, 'User', 8, '', 12, 13),
(21, 9, 'User', 9, '', 14, 15);

-- --------------------------------------------------------

--
-- Table structure for table `aros_acos`
--
*/
DROP TABLE IF EXISTS `aros_acos`;
/*CREATE TABLE IF NOT EXISTS `aros_acos` (
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
*/
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
  `classification` varchar(45) DEFAULT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `organization_id`, `name`, `photo`, `photo_dir`, `description`, `classification`, `status`, `start_time`, `end_time`, `contact_first_name`, `contact_last_name`, `phone`, `email`, `address`, `zip`, `city`, `state_id`, `created`, `modified`) VALUES
(1, 1, 'Saving stuff volunteering ending', '26db0b76a462caca2d308478ecf20135_i.jpg', '1', 'hat is the assessment of a top U.S. Navy intelligence analyst, who told colleagues that ChinaÃ¢â‚¬â„¢s PeopleÃ¢â‚¬â„¢s Liberation Army (PLA) is currently conducting training exercises in a practice scenario in which the military takes the Senkaku Islands, near Taiwan.\r', 'classification is Type define this', '', '2014-02-27 14:57:00', '2014-02-27 14:57:00', 'Baka', 'Kickass', '6609981890', 'noreply@gmail.com', '6125 s 97th st', '68128', 'omaha', 97, '2014-02-27 18:28:50', '2014-02-27 18:28:50'),
(2, 1, 'Second event for org', NULL, '', 'is still disputed, though it''s believed they represent the basis for the right-to-left reading style. Other authors report origins closer to the 18th century. Manga is a Japanese term that can be translated as "whimsical sketches"; it generally means "com', '', '', '2014-02-27 11:55:00', '2014-02-27 11:55:00', '', '', '232-232-3433', 'kkk@kkk.com', '9716 ohern plz', '68127', 'omaha', 97, '2014-02-27 18:55:45', '2014-02-27 18:55:45'),
(3, 2, 'ASACP Boosts U.K. Efforts through Governmenta', 'family-icons_gg64160643.jpg', '3', 'ASACP Boosts U.K. Efforts through Governmental Outreach \r\nLOS ANGELES (February 7, 2014) Ã¢â‚¬â€� The Association of Sites Advocating Child Protection (ASACP) is proud to announce its successful participation in meetings that will help to shape the future of the Internet for digital media publishers and consumers in the U.K. and beyond.\r\n\r\nASACPÃ¢â‚¬â„¢s Director of European Outreach, Vince Charlton, attended the ParentZone launch of the PitDA (Parenting in the Digital Age) initiative, held at the House of Commons in London last month, where online child protection was the topic among British lawmakers, parents and other stakeholders, such as ASACP. Charlton notes that ParentZone fits in with the ASACP mission of educating parents in the digital era, making this organizational outreach a natural one that both groups will benefit from; while the associationÃ¢â‚¬â„¢s appearance in BritainÃ¢â‚¬â„¢s halls of power is a major achievement for ASACP and its sponsors.\r\n\r\nCharlton also recently attended the high-profile Westminster eForum Keynote Seminar, Ã¢â‚¬Å“Childhood and the Internet Ã¢â‚¬â€� Safety, Education and Regulation,Ã¢â‚¬ï¿½ in London. \r\n\r\nThe Westminster Forum is part of an ongoing program of seminars and discussions and was attended by key players such as Claire Perry MP (the advisor to the U.K. Prime Minister on Preventing the Commercialization and Sexualization of Childhood, and the moving force behind the U.K.Ã¢â‚¬â„¢s Internet filtering program); John Carr (the Secretary of the U.K. ChildrenÃ¢â‚¬â„¢s CharitiesÃ¢â‚¬â„¢ Coalition on Internet Safety); Pete Johnson from the ATVOD; and Adam Kinsley, BskyBÃ¢â‚¬â„¢s Director of Policy, representing one of the major U.K. ISPÃ¢â‚¬â„¢s implementing filtering of adult-oriented content. \r\nBoth meetings provided ASACP with the opportunity to increase its presence as a stakeholder in any discussions regarding online child protection in the U.K. and beyond.\r\n\r\nÃ¢â‚¬Å“The two U.K. sessions provided ASACP with a further opportunity to maintain and develop key relationships with those parties involved in the U.K.Ã¢â‚¬â„¢s online child protection arena and to help promote the adult entertainment industry as a credible stakeholder in these discussions,Ã¢â‚¬ï¿½ Charlton states, noting that the interaction leads to the development of common ground. \r\n\r\nÃ¢â‚¬Å“A key message coming out of the discussions was that there is no wish to go down the route of censoring or blocking online adult content but simply to get the industry to self-regulate to ensure such content remains in the hands of adults and not children Ã¢â‚¬â€� without the need for further government intervention,Ã¢â‚¬ï¿½ Charlton explains. Ã¢â‚¬Å“However, ATVOD again stated its intention to aggressively pursue those adult companies based outside of, but selling into the U.K. market, to implement age verification protocols for U.K. IP addresses.Ã¢â‚¬ï¿½\r\n\r\nIt is very clear from these discussions that this issue is not going to disappear any time soon.', '', '', '2014-01-07 00:54:00', '2014-03-12 00:54:00', 'Joseph', 'Enrequie', '343-343-2343', 'joseph@jo.com', '', '', 'san jose', 71, '2014-03-02 19:57:35', '2014-03-02 19:57:35'),
(4, 2, 'ASACP Prepares for The European Summit ', NULL, '', 'Ã¢â‚¬Å“We canÃ¢â‚¬â„¢t stress the fact enough that it is important to protect children online,Ã¢â‚¬ï¿½ TESÃ¢â‚¬â„¢ principal Andreas Bischoff stated. Ã¢â‚¬Å“A truly remarkable team of individuals, ASACP should constantly receive support from our entire industry.Ã¢â‚¬ï¿½\r\n\r\nASACP Executive Director Tim Henning and Director of European Outreach Vince Charlton will be in attendance at the event, where the pair will conduct a special workshop on March 6, entitled, Ã¢â‚¬Å“Protecting Your Business in a Changing Regulatory Landscape.Ã¢â‚¬ï¿½\r\n\r\nÃ¢â‚¬Å“We think that we should all show them the support they so deserve,Ã¢â‚¬ï¿½ Bischoff added, while encouraging event goers to attend this valuable educational session that can help protect them.', '', '', '2014-03-04 13:06:00', '2014-03-11 13:06:00', 'Jim', 'Nelson', '402-334-2532', 'nelly@jim.com', '543 S', '68106', 'omaha', 97, '2014-03-02 20:08:14', '2014-03-02 20:08:14');

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
  `status` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `hours`
--

INSERT INTO `hours` (`id`, `status_id`, `user_id`, `registration_id`, `hours`, `status`, `created`, `modified`) VALUES
(1, 1, 8, 2, 22, NULL, '2014-03-02 19:46:11', '2014-03-02 19:46:11');

-- --------------------------------------------------------

--
-- Table structure for table `organizations`
--

DROP TABLE IF EXISTS `organizations`;
CREATE TABLE IF NOT EXISTS `organizations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `status_id` int(11) DEFAULT '1',
  `name` varchar(45) DEFAULT NULL,
  `classification` varchar(45) DEFAULT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `organizations`
--

INSERT INTO `organizations` (`id`, `status_id`, `name`, `classification`, category_id, `url`, `short_description`, `long_description`, `photo`, `photo_dir`, `address`, `city`, `state_id`, `zip`, `phone`, `fax`, `email`, `created`, `modified`) VALUES
(1, 2, 'ASPCA', 'Animal Cruelty', 2, 'http://www.aspca.org/about-us/about-the-aspca', ' "To provide effective means for the prevention of cruelty to animals throughout the United States."', 'Who We Are\r\n\r\nThe American Society for the Prevention of Cruelty to Animals (ASPCA) was the first humane society to be established in North America and is, today, one of the largest in the world. Our organization was founded by Henry Bergh in 1866 on the belief that animals are entitled to kind and respectful treatment at the hands of humans, and must be protected under the law. Headquartered in New York City, the ASPCA maintains a strong local presence, and with programs that extend our anti-cruelty mission across the country, we are recognized as a national animal welfare organization. We are a privately funded 501(c)(3) not-for-profit corporation, and proud to boast more than 2 million supporters across the country.\r\n\r\nWhat We Do\r\n\r\nAs the first humane organization to be granted legal authority to investigate and make arrests for crimes against animals, we are wholly dedicated to fulfilling the ASPCA mission through nonviolent approaches. Our organization provides local and national leadership in three key areas: caring for pet parents and pets, providing positive outcomes for at-risk animals and serving victims of animal cruelty. For more on our work in each of these areas, please visit our programs and services page.\r\n\r\nHistory <BR>\r\n\r\nIncorporated in 1866 by a special act of the New York State legislature, the ASPCA has a history rich in challenges and victoriesÃƒÂ¢Ã¢â€šÂ¬Ã¢â‚¬ï¿½from providing care and protection for the city''s working horses and transforming dog pounds into professionally run adoptions facilities to founding an animal hospital that is still running today. Read more about our history. ', 'samurai_spirit_musou_by_artgerm-d394s01.jpg', '1', '8716 ohern plz', 'chicago', 82, '68127', '8008877654', '', 'prajolshakya@unoamah.edu', '2014-02-27 18:27:02', '2014-03-02 19:49:07'),
(2, 1, 'Protect Children Online', 'Children',2, 'http://www.asacp.org', '"Non-profit organization dedicated to eliminating child pornography "', 'ABOUT ASACP\r\n\r\nThe Association of Sites Advocating Child Protection (ASACP) is a non-profit organization dedicated to eliminating child pornography from the Internet. Founded in 1996, ASACP battles child pornography by:\r\nProviding an international reporting hotline.\r\nOrganizing the efforts of the online adult industry to combat the crime of child sexual abuse.\r\nWorking with parents to prevent children from viewing age-inappropriate material online.\r\nASACP educates members, the online adult industry, government policy makers, and the public about child protection, illegal online activities, and the efforts of the online adult industry to battle child sexual abuse.\r\nASACP provides an online hotline for web surfers and webmasters to report suspected child pornography.\r\nInvestigate reports and determine the ownership of suspected CP sites and forwards Red Flag reports to international government agencies and associations including the FBI and the National Center for Missing & Exploited Children, and International Hotlines.\r\nNotify ISPs and payment processors when their hosting and billing services are hijacked by CP operators.\r\nCreate a Code of Ethics for our Membership program - a model of effective self-regulation for the online adult industry.\r\nEstablish Best Practices which are recommended for adult sites, search engines, billing and hosting companies, dating sites, adult sites and others.\r\nASACP created the RTA ("Restricted to Adults") label to better enable parental filtering and demonstrate the adult industry''s commitment to help prevent children from viewing age-inappropriate content.\r\nInform members on current, new and pending laws and regulations pertaining to child pornography and protection.\r\nASACP is a non-profit 501(c)(4) Social Welfare Organization.\r\nADVISORY COUNCIL\r\n\r\nTheo Sapoutzis, AVN\r\nAlec Helmy, XBIZ\r\nRand Pate, Epoch Transaction Services\r\nDouglas Richter, BRIGHT GUYS INC Senior AC for AWE\r\nKim Nielsen, ATKingdom\r\nMike Ackerman, Actually Helping Inc.\r\nRelani Belous, Friend Finder Networks\r\nEUROPEAN ADVISORY COUNCIL\r\n\r\nBjorn Skarlen, CommerceGate\r\nGarion Hall, AbbyWinters\r\nSiep Kuppens, IMC - ACI\r\nChristoph Pass, SABOOM-PartnerCash\r\nTrieu Hoang, AbbyWinters\r\nDave Urban, AWE\r\nOystein Wright, Mansion Productions\r\nFOUNDER\r\n\r\nAlec Helmy\r\nSPONSORS & MEMBERS\r\n\r\nA list of sponsors\r\nA list of members\r\nASACP STAFF\r\n\r\nTim Henning, Executive Director\r\nErege Macis, Operations Director\r\nDawn Yagielowicz, Membership Manager\r\nCal Woodruff, Systems Manager\r\nLucia Varela, Hotline Analyst\r\nVince Charlton, Director of European Outreach', 'ku-bigpic.jpg', '2', '4100 North ohern', 'omaha', 97, '68131', '4023498936', '', 'lolo@lolo.com', '2014-02-27 23:21:07', '2014-03-02 19:54:46'),
(3, 1, 'third', '', 4, '', 'asdas', '', NULL, '', '', '', NULL, '', '', '', 'ada@ada.com', '2014-02-27 23:36:59', '2014-02-27 23:36:59');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--
DROP TABLE IF EXISTS `category`;
DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `category`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'School'),
(2, 'Non-Profit'),
(3, 'Corporation'),
(4, 'Government');
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `user_id`, `status_id`, `event_id`, `start_time`, `end_time`, `comment`) VALUES
(1, 1, 3, 2, '2014-03-26 00:46:00', '2014-03-26 00:46:00', 'now'),
(2, 9, 1, 1, '2014-01-05 18:44:00', '2014-02-19 18:44:00', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'VO Admin'),
(2, 'Organization Admin'),
(3, 'Student');



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
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `address`, `city`, `state_id`, `zip`, `phone`, `email`, `fax`, `username`, `password`, `activated`, `created`, `modified`, `photo`, `photo_dir`, `role_id`) VALUES
(1, 'Eric', 'Kizaki', '', '', NULL, '', '6609980166', 'erickizaki@gmail.com', '', 'voadmin', 'ed2230faafc90bc0378c8cf621f2e45c99567e53', 1, '2014-02-22 18:14:23', '2014-02-27 19:53:13', NULL, '', 1),
(2, 'Ron', 'Gorman', NULL, NULL, NULL, NULL, NULL, 'erickizaki@gmail.com', NULL, 'orgadmin1', 'ed2230faafc90bc0378c8cf621f2e45c99567e53', 1, '2014-02-22 18:18:38', '2014-02-22 18:18:48', NULL, NULL, NULL),
(3, 'Rubenia', 'Borge', NULL, NULL, NULL, NULL, NULL, 'erickizaki@gmail.com', NULL, 'volunteer1', 'ed2230faafc90bc0378c8cf621f2e45c99567e53', 1, '2014-02-22 18:19:39', '2014-02-22 18:19:46', NULL, NULL, NULL),
(4, 'Bob', 'Boot', NULL, NULL, NULL, NULL, NULL, 'erickizaki@gmail.com', NULL, 'employee1', 'ed2230faafc90bc0378c8cf621f2e45c99567e53', 1, '2014-02-22 18:23:03', '2014-02-22 18:23:12', NULL, NULL, NULL),
(5, 'Joe', 'Big', NULL, NULL, NULL, NULL, NULL, 'erickizaki@gmail.com', NULL, 'schoolAdmin1', 'ed2230faafc90bc0378c8cf621f2e45c99567e53', 1, '2014-02-22 18:23:57', '2014-02-22 18:24:05', NULL, NULL, NULL),
(6, 'Daniel', 'Dude', NULL, NULL, NULL, NULL, NULL, 'erickizaki@gmail.com', NULL, 'student1', 'ed2230faafc90bc0378c8cf621f2e45c99567e53', 1, '2014-02-22 18:25:08', '2014-02-22 18:25:16', NULL, NULL, NULL),
(7, 'Prajol', 'Shakya', NULL, NULL, NULL, NULL, NULL, 'prajolshakya@unomaha.edu', NULL, 'prajolshakya', '8f73abeb695c3ffbf71c7312e7041faa3b717703', 0, '2014-02-27 22:23:03', '2014-02-27 22:23:03', NULL, NULL, NULL),
(8, 'Prajol', 'Shakya', NULL, NULL, NULL, NULL, NULL, 'prajolshakya@unomaha.edu', NULL, 'prajolshakya1', '8f73abeb695c3ffbf71c7312e7041faa3b717703', 1, '2014-02-27 23:20:11', '2014-02-27 23:20:27', NULL, NULL, NULL),
(9, 'prajol', 'shakya', '', '', NULL, '', '', 'prajolshakya@unomaha.edu', '', 'orgadmin', '8f73abeb695c3ffbf71c7312e7041faa3b717703', 1, '2014-02-28 01:43:20', '2014-02-28 02:49:27', 'the clown.jpg', '9', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;




DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS `members` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `organization_id` int(11) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

