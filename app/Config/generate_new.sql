-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 04, 2014 at 01:36 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `organization_id`, `name`, `photo`, `photo_dir`, `description`, `status`, `start_time`, `end_time`, `contact_first_name`, `contact_last_name`, `phone`, `email`, `address`, `zip`, `city`, `state_id`, `created`, `modified`) VALUES
(1, 1, 'Save the children 1', 'indian.jpg', '1', 'FUBAR and The European Summit Cook Up Support for ASACP \r\nLOS ANGELES (March 6, 2014) — The Association of Sites Advocating Child Protection (ASACP) is delighted to announce a unique fundraiser being staged by FUBAR Webmasters and The European Summit (TES), known as the “International Food Challenge.”\r\n\r\nEurope’s leading B2B conference for online entertainment industries, The European Summit is set for March 5-8 at the Hotel Calipolis in Barcelona, Spain. This executive gathering unites representatives from the affiliate, billing, casual dating, domain name, mobile technology, website services and traffic arenas, in comfortable setting with a European flair.\r\n\r\nFor more than a decade FUBAR Webmasters has chronicled adult entertainment industry parties, conferences and conventions with pictures and news of interest for those who did not attend, as well as for those who did. FUBAR shows “the babes, the craziness and players,” which make up the business of bawdiness. \r\n\r\nNow, for the first time ever, FUBAR Webmasters’ charismatic owner, Julius F. Kedvessy (JFK), will take on Walter and Andreas from TES in a U.S. vs. European Steak vs. Steak Edition of the International Food Challenge, slated for March 8 at 2 p.m.\r\n\r\nAccording to its promoters, the goal of the International Food Challenge is to create a special directory of restaurants around the world — in all cities on the adult show circuit — including Amsterdam, Barcelona, LA, Las Vegas, London, Majorca, Miami, New Orleans and Prague, among others — and to have fun and support a worthy cause while doing so.', '', '2014-03-30 15:30:00', '2014-03-30 15:30:00', 'tester', 'doe', '777-777-2322', 'jonny@gmail.com', '6125 S 97th plz', '68127', 'omaha,NE', 97, '2014-03-21 00:17:19', '2014-03-30 22:31:11'),
(2, 2, 'Save the planet', 'P1019141.JPG', '2', 'Save the Planet inaugurated a tree plantation program in the households of Chuadnga on Friday, the 13th July 2012 with an aim to motivate people to tree plantation and uphold the slogan ‘Plant a Tree for Our Lives’.  Md Nazrul Islam, the retired Professor of Chuadang Government College inaugurated the program which was attended by Save the Planet officials and local volunteers.', '', '2014-04-02 18:43:00', '2014-05-23 18:43:00', 'randy', 'johnson', '765-543-1213', 'ran@run.com', '1211 john', '68106', 'omaha', 97, '2014-03-21 00:45:04', '2014-03-21 00:45:04'),
(3, 1, 'dont the second children', 'mount-merapi-volcanic-eruption-2010.jpg', '3', 'SavingTheWorld.net is a knowledge networking site built for people who want to make a difference and save the planet, community and people at work.\r\n', '', '2014-03-22 19:19:00', '2014-03-29 19:19:00', 'asdas', 'asdas', '888-232-3433', 'aka@aka.com', '1101 park dr', '68106', 'omaha', 97, '2014-03-21 01:22:08', '2014-03-21 01:22:08'),
(4, 2, 'save the planet 2 -null', NULL, '', 'null and dull', '', '2014-03-20 19:23:00', '2014-03-20 19:23:00', '', '', '', 'null@null.com', '', '', '', NULL, '2014-03-21 01:24:19', '2014-03-21 01:24:19'),
(5, 2, 'null - save the planet3', NULL, '', 'nulll', '', '2014-03-20 19:24:00', '2014-03-20 19:24:00', '', '', '', 'setadull@gmail.com', '', '', '', NULL, '2014-03-21 01:24:44', '2014-03-21 01:24:44'),
(6, 2, 'save the planet number 4 for elk school.. ', 'family-icons_gg64160643.jpg', '', 'where will this be displayed?', '', '2014-03-30 15:27:00', '2014-03-30 15:27:00', '', '', '', 'display@dis.com', '', '', '', NULL, '2014-03-21 01:25:23', '2014-03-30 22:27:51'),
(7, 3, 'Fifth Annual Nebraska Robotics Expo', 'the clown.jpg', '7', 'On Saturday, February 22, 2014, The Strategic Air & Space Museum hosted the Fifth Annual Nebraska Robotics Expo.  Over 1,000 K-12 Nebraska students, team leaders and math and science teachers gathered for this premier robotics event that brings together two robotics competitions under one roof, the CEENBoT Robotics Showcase and the FIRST LEGO League (FLL), for a day of robotics fun in a historical venue.\r\n\r\nFIRST LEGO League hosted 46 teams, two of which were from our very own BGCM Clubs – the Council Bluffs Cobras and the Morton Panther Pack.\r\n\r\nCB Cobras\r\nIMG_6180\r\nIMG_6184\r\nIMG_6214\r\nIMG_6219\r\nIMG_6238\r\nInnovative Solution Award\r\nMedals\r\nMorton Panther Pack\r\n', '', '2014-03-12 14:16:00', '2014-03-29 14:16:00', '', '', '', 'help2@gmil.com', '2610 Hamilton St.', '68131', 'omaha', 97, '2014-03-23 20:17:49', '2014-03-23 20:17:49'),
(8, 4, ' Kids Cafe', NULL, '', '\r\nKids Cafe\r\nKids Cafe is one of the nation''s largest free meal service programs for low-income children. Founded in 1993 by Feeding America, ConAgra Foods became the program’s national sponsor six years later, and today there are over 1,500 Kids Cafe locations across the country. \r\n\r\nFood Bank for the Heartland provides food for 22 Kids Cafes in Omaha, Bellevue, Carter Lake, Council Bluffs and South Sioux City. We serve more than 6,500 meals each week to children who are at-risk of being hungry. \r\n\r\nThe goal of the Kids Cafe program is to provide an evening meal to children in our community in partnership with organizations that offer a safe haven after school. Food Bank for the Heartland works with the following locations to provide Kids Cafe: ', '', '2014-04-01 14:18:00', '2014-03-29 14:18:00', 'rick', 'morty', '', 'morty@rck.com', 'J street', '68127', 'omaha', 97, '2014-03-23 20:19:07', '2014-03-23 20:19:07'),
(9, 5, ' Food for Seniors', NULL, '', 'Many senior citizens with limited financial resources are forced to make difficult choices. They must decide between buying food and paying for medication or other expenses. \r\n\r\nFood Bank for the Heartland’s Food for Seniors Program provides bakery goods to seniors living in low-income housing in Omaha and Council Bluffs. In the Fremont area, we deliver weekly non perishable bags. With deliveries being made bimonthly, this program serves approximately 510 senior citizens in our community and places a strong emphasis on healthy, nutritious food selections.\r\n\r\nFor more information about the Food for Seniors program, please contact Ericka Smrcka, Director of Programs & Advocacy at 402.905.4803.', '', '2014-03-19 14:19:00', '2014-03-28 14:19:00', '', '', '', 'food@food.com', '', '', '', NULL, '2014-03-23 20:19:55', '2014-03-23 20:19:55'),
(10, 9, 'Supplemental Nutrition Assistance Program', NULL, '', 'SNAP is the Supplemental Nutrition Assistance Program, formerly known as the food stamp program. It is the largest federal nutritional assistance program. In 2013, approximately 180,000 Nebraskans (about 10% of the total population) received SNAP benefits. The economic impact for the state of Nebraska was $7,416,959.\r\n\r\nAbout one-third of those eligible for SNAP do not receive these benefits. Food Bank for the Heartland is joining in the nationwide effort to assist eligible citizens to claim this valuable nutrition assistance. \r\n\r\nFor more information, contact Collin Dunn, Hazel Deman or Marya Anaya, SNAP Outreach Specialists, at 1-855-444-5556.   \r\n', '', '2014-04-04 14:20:00', '2014-03-15 14:20:00', 'betty', 'stone', '', 'stone@betty.com', '', '', '', NULL, '2014-03-23 20:21:09', '2014-03-23 20:21:09'),
(11, 10, 'Educational Support', NULL, '', 'For three years BGCM  have been tracking report cards over multiple grading periods for 532 children. In the areas of reading, math, science and overall academic performance from one semester to another:\r\n\r\n37% improved overall academic standing\r\n18-25% improved their grades in one or more subjects\r\n50-70% maintained ‘C’ level grades or better\r\n10-13% fell further behind in two or more subjects\r\nNote:  Of those children who showed grade improvements 78% attended the Club 2 – 3 times or more per week.', '', '2014-05-08 14:21:00', '2014-03-28 14:21:00', '', '', '', 'prep@gmail.com', '', '', '', NULL, '2014-03-23 20:22:43', '2014-03-23 20:22:43'),
(12, 11, 'Delinquency Prevention', NULL, '', 'Over a 12 month period 3,808 juveniles were arrested by the Omaha Police Department.  Except for the youth referred to us by the juvenile court:\r\n\r\nOnly 9 were Boys & Girls Club members\r\nNone of our 223 Teens who average 2-3 times per week or more were arrested', '', '2014-05-22 14:22:00', '2014-06-13 14:22:00', '', '', '', 'many@mabt.com', '', '', '', NULL, '2014-03-23 20:23:20', '2014-03-23 20:23:20'),
(13, 12, 'At Risk Youth', NULL, '', '111 truant teens were referred to the Club by the Juvenile Court. Another 145 youth were a part of our Gang Prevention and Intervention case loads.\r\n\r\nOf these 256 at risk you, only 9% reoffended over a two year period', '', '2014-04-24 14:23:00', '2014-04-30 14:23:00', '', '', '', 'add@koss.ocm', '', '', '', NULL, '2014-03-23 20:23:58', '2014-03-23 20:23:58'),
(14, 13, 'Enhance your girl scoutcperience', NULL, '', 'From recording studios to horseback riding, from fiber arts classes to sporting events, our Community Collaborators offer something for every Girl Scout to enjoy.\r\n\r\nThese workshops are not planned, led or supervised by Girl Scouts Spirit of Nebraska staff or volunteers and are subject to change at the discretion of the sponsoring collaborator. Consult the Safety Activity Checkpoints prior to any activity. Recommended girl/adult ratios must be met and are the responsibility of leaders and parents.\r\n\r\nOnce you find a program in which you would like to participate, please contact the Community Collaborator directly. All registrations are to be made with the collaborator and all fees are paid directly to them.\r\n\r\nLet us know about your experience, so that we can share that information with our community partners. Send your comments to Lori by email or call 402.779.8239.\r\n\r\nWe welcome new Community Collaborators!\r\n\r\nIf you know of a community organization or business that offers pro', '', '2014-03-23 14:24:00', '2014-03-23 14:24:00', '', '', '', 'girls@scout.com', '', '', '', NULL, '2014-03-23 20:25:06', '2014-03-23 20:25:06'),
(15, 3, 'new event', NULL, '', 'asdasdas', '', '2014-03-30 16:57:00', '2014-03-30 16:57:00', '', '', '', 'kk@gamil.com', '', '', '', NULL, '2014-03-30 23:57:41', '2014-03-30 23:57:41');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `hours`
--

INSERT INTO `hours` (`id`, `status_id`, `user_id`, `registration_id`, `hours`, `status`, `created`, `modified`) VALUES
(1, 2, 1, 1, 66, NULL, '2014-03-21 00:34:58', '2014-03-30 23:44:41'),
(2, 2, 9, 5, 14, NULL, '2014-03-23 20:38:33', '2014-03-23 20:38:33'),
(3, 2, 9, 5, 12, NULL, '2014-03-23 20:38:47', '2014-03-23 20:38:47'),
(4, 2, 10, 8, 1, NULL, '2014-03-23 20:39:21', '2014-03-23 20:39:21'),
(5, 2, 10, 7, 23, NULL, '2014-03-23 20:39:52', '2014-03-31 00:04:50'),
(6, 2, 10, 6, 44, NULL, '2014-03-23 20:40:00', '2014-03-23 20:40:00'),
(7, 2, 10, 8, 4, NULL, '2014-03-23 20:40:02', '2014-03-23 20:40:02'),
(8, 2, 10, 8, 4, NULL, '2014-03-23 20:41:49', '2014-03-23 20:41:49'),
(9, 2, 8, 9, 34, NULL, '2014-03-23 20:42:16', '2014-03-23 20:42:16'),
(10, 2, 9, 16, 1, NULL, '2014-03-30 23:31:04', '2014-03-30 23:51:56'),
(11, 2, 9, 17, 21, NULL, '2014-03-31 00:03:00', '2014-03-31 00:03:00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `user_id`, `organization_id`, `role_id`, `status_id`) VALUES
(1, 1, NULL, 1, 2),
(2, 2, 1, 2, 2),
(3, 3, 2, 2, 2),
(4, 1, 1, 3, 2),
(5, 3, 2, 4, 2),
(6, 3, 1, 3, 2),
(7, 2, 1, 3, 1),
(8, 1, 2, 4, 2),
(9, 14, 3, 2, 2),
(10, 15, 4, 2, 2),
(11, 16, 5, 2, 2),
(12, 17, 6, 2, 2),
(13, 18, 7, 2, 2),
(14, 19, 8, 2, 2),
(15, 21, 9, 2, 2),
(16, 22, 10, 2, 2),
(17, 23, 11, 2, 2),
(18, 24, 12, 2, 2),
(19, 25, 13, 2, 2),
(20, 26, 14, 2, 2),
(21, 9, 15, 2, 2),
(22, 9, 15, 3, 1),
(23, 10, 1, 3, 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `organizations`
--

INSERT INTO `organizations` (`id`, `status_id`, `name`, `category_id`, `url`, `short_description`, `long_description`, `photo`, `photo_dir`, `address`, `city`, `state_id`, `zip`, `phone`, `fax`, `email`, `created`, `modified`) VALUES
(1, 2, 'ASACP', 2, 'http://book.cakephp.org', 'the Association of Sites Advocating Child Protection work with U.S. Customs Service and the FBI to enforce anti-child pornography laws.', 'MISSION\r\n\r\nFounded in 1996, ASACP is a non-profit organization dedicated to online child protection. ASACP battles child pornography through its CP Reporting Hotline and helps parents prevent children from viewing age-restricted material online with the Restricted To Adults - RTA Website Label.\r\nWHY ASACP?\r\n\r\nShutting down CP sites (and catching child pornographers) can only happen if suspected sites are reported and investigated. Government bodies around the world are inundated with reports and the resources to review them all simply do not exist.\r\n\r\nASACP offers a secure, anonymous reporting system for the general public to report questionable content who may feel uncomfortable contacting government agencies.\r\n\r\nASACP fosters communication and cooperation with the online adult industry. This means we have the outreach and access to involve adult sites and their customers in our fight.\r\n\r\nASACP has the knowledge and technical ability to review submitted reports and forward suspect sites to the authorities who consider our Red Flag Reports to be high priority.\r\n\r\nWHAT WE DO & HOW WE DO IT\r\n\r\nASACP educates members, the online adult industry, government policy makers, and the public about child protection, illegal online activities, and the efforts of the online adult industry to battle child sexual abuse. To do this, ASACP:\r\n\r\nASACP provides an online hotline for web surfers and webmasters to report suspected child pornography.\r\nInvestigates reports and determine the ownership of suspected CP sites and forwards Red Flag reports to international government agencies and associations including the FBI and the National Center for Missing & Exploited Children, as well as International Hotlines.\r\nNotifies ISPs and payment processors when their hosting and billing services are hijacked by CP operators.\r\nCreates a Code of Ethics for our Membership program - a model of effective self-regulation for the online adult industry.\r\nEstablishes Best Practices which are recommended for adult sites, search engines, billing and hosting companies, dating sites, adult sites and others.\r\nCreated the RTA ("Restricted to Adults") label to better enable parental filtering, and to demonstrate the online adult industry''s commitment to helping parents prevent children from viewing age-inappropriate content.\r\nInforms members on current, new and pending laws and regulations pertaining to child pornography and protection.\r\nHOW YOU CAN HELP\r\n\r\nJoin ASACP and become a Member or Sponsor!\r\nLabel your website with the Restricted To Adults RTA Website Label.\r\nDonate to ASACP\r\n', 'mainpageimage.jpg', '1', '6125 S 97th plz', 'omaha', 97, '68127', '660-998-1890', '', 'asacp@org.org', '2014-03-21 00:12:50', '2014-03-30 19:25:18'),
(2, 2, 'Black Elk Elementary School', 1, 'https://www.google.com', 'Registration will be held for Pre-School and Kindergarten on Thursday, March 13, 2014 at Aura School, 3:30-7:00 pm for any Elk Township ', 'New Jersey Department of Education School Self-Assessment for determining Grades under the Anti-Bullying Bill of Rights Act\r\n\r\nCore Element #1 HIB Programs, Approaches or Other Initiatives:\r\nPossible Score = 15\r\nAura Score = 9\r\n\r\nCore Element #2 Training on the BOE-approved HIB Policy\r\nPossible Score = 9\r\nAura Score = 9\r\n\r\nCore Element #3 Other Staff Instruction and Training Programs\r\nPossible Score = 15\r\nAura Score = 10\r\n\r\nCore Element #4 Curriculum and Instruction on HIB and Related Information and Skills\r\nPossible Score = 6\r\nAura Score = 4\r\n\r\nCore Element #5 HIB Personnel\r\nPossible Score = 9\r\nAura Score = 6\r\n\r\nCore Element #6 School Leveled HIB Incident Reporting Procedure\r\nPossible Score = 6\r\nAura Score = 4\r\nCore Element # 7 HIB Investigation Procedures\r\nPossible Score = 12\r\nAura Score = 8\r\n\r\nTotal Possible = 75\r\nAura Total = 49 \r\n', 'Aura logo_done.jpg', '2', '147 Railroad Ave', 'Monroeville', 100, '08343', '888-987-1118', '', 'aurora@aura.com', '2014-03-21 00:25:26', '2014-03-30 19:32:26'),
(3, 2, 'Knights of Ak-Sar-Ben', 2, '', 'Are you ready to enhance your event experience? ', 'River City Rodeo:\r\nAs Omaha''s Official Community Celebration and home to the Justin Boots Championships, Douglas County Fair and Ak-Sar-Ben 4-H Stock Show this annual event takes place in September and generates a walloping $21.3 million economic impact. To learn more, visit the event website at rivercityrodeo.com.\r\n\r\nStock Show:\r\nSince 1928 the Knights of Ak-Sar-Ben have produced an annual Stock Show. Today, the Ak-Sar-Ben 4-H Stock Show welcomes youths from 10 states to its annual competition, to learn more click here.\r\n\r\nCoronation & Scholarship Ball:\r\nIn 1895 the first Coronation Ball was held in Omaha. In 2013 the tradition continued honoring more than 250 families and generating more than $700,000 in scholarship support. To learn more about the mission click here or select a tab below.\r\n\r\nThe 2014 Coronation & Scholarship Ball will be Saturday, October 18th.\r\n\r\nScholarship\r\nMonarchs\r\nCourt of Honor\r\nCourt Login\r\nTribute Cards\r\nEvent Reservation  Please email Sue Eiserman at eisermans@aksarben.org  or call 402.554.9600 Ext 106 before Oct. 7th\r\nGeneral Admission Seating for Ball available for $25 - can purchase night of the Ball.  Business attire. CenturyLink Convention Center Doors open at 8 p.m.  CenturyLink Box Office will NOT be selling tickets - come to Convention Center.\r\nEndowment\r\nWomen''s Ball Committee', 'Brown_Lucero_3P4461.jpg', '3', '6125 S 97th plz', 'omaha', 97, '68127', '', '', 'jimmy@johns.com', '2014-03-23 19:38:30', '2014-03-23 19:38:30'),
(4, 2, 'Omaha Community Foundation', 2, 'http://omahafoundation.org/about/', 'The Omaha Community Foundation connects people who care about our community with the people and nonprofits who are doing the most good here.', 'DOING THE MOST GOOD FOR OUR COMMUNITY\r\n\r\nHaving a great community doesn’t just happen. It requires the efforts of many – each bringing their own unique talents, insights, strengths, abilities and willingness to make a difference. Helping people to do the most good in our community is what the Omaha Community Foundation does best and it begins by understanding the needs in our community, the nonprofit resources available to address these needs and the areas where additional resources are needed.\r\n\r\nThat’s also why we do all we can to connect with the organizations, individuals and groups that make up Omaha’s nonprofit community. And we do all we can to provide opportunities for you to access available funding and keep us current with your own efforts. With the Omaha Community Foundation, you’re able to:\r\n\r\nApply for discretionary grants that are available through various funds and initiatives\r\nIncrease your knowledge and understanding of how philanthropy works and the resources available to you in Omaha\r\nLearn more about Omaha Community Foundation services for nonprofit account holders', 'chittenden-252x148.jpg', '4', '302 South 36th Street ', 'omaha', 97, '68131', '402-887-8989', '', 'kick@starter.com', '2014-03-23 19:47:55', '2014-03-23 19:48:42'),
(5, 2, 'Goodwill Industries, Inc.', 3, '', 'Visit all 16 of our retail locations, or enjoy shopping Goodwill from the comfort of your own home, visit shopgoodwill.com.', 'CURRENT JOB OPENINGS AT GOODWILL\r\nJoin the nearly 650 employees who have found a satisfying job with Goodwill Industries. We are looking for individuals to work part-time and full-time. We hire management staff, case managers, retail clerks, truck drivers, custodial workers, donation center attendants, administrative support staff and more! We offer flexible schedules and great benefits - competitive wages, health and dental insurance, life insurance, a retirement plan, and educational assistance.\r\nNote: To apply for positions at Goodwill Industries, Inc. applicants must have a personal email account. Visit Yahoo or Hotmail to create a free email account, and feel free to visit our careers website at your convenience.\r\nAll positions at Goodwill require criminal background checks and pre-employment drug testing to be conducted. Please see our Drug & Alcohol Policy.\r\nGoodwill Industries uses E-Verify to confirm employment eligibility for all newly hired employees.\r\nE-Verify information (English - PDF)\r\nE-Verify information (Spanish - PDF)\r\nFind the Job that is Right for You!\r\nAbilityOne Program\r\nThe AbilityOne Program provides custodial, postal and grounds maintenance services to the federal government throughout Omaha, Bellevue and Lincoln.', 'index_donate.jpg', '5', '6001 west dodge', 'omaha', 97, '68106', '402-887-8989', '', 'goodwill@gmail.com', '2014-03-23 19:52:27', '2014-03-23 19:52:53'),
(6, 2, 'Boys & Girls Club of Omaha', 2, '', 'Boys & Girls Clubs are a safe place to learn and grow – all while having fun. It is the place where great futures are started each and every day. ', 'In every community, boys and girls are left to find their own recreation and companionship in the streets. An increasing number of children are at home with no adult care or supervision. Young people need to know that someone cares about them.\r\nBoys & Girls Clubs offer that and more. Club programs and services promote and enhance the development of boys and girls by instilling a sense of competence, usefulness, belonging and influence.\r\n\r\nBoys & Girls Clubs of the Midlands (BGCM) is one of the largest youth service agencies in the Omaha / Council Bluffs metro area. With six Club locations in North and South Omaha, Mount View Elementary, Westbrook Elementary (Westside), and Carter Lake and Council Bluffs, IA, two middle school sitse at Morton Middle School and King Science & Technology Middle School in Omaha, BGCM helps over 4,700 kids receive the direction and educational support that is vital to their success.', NULL, '', '2610 Hamilton St.', 'omaha', 97, '68131', '', '', 'jane3@dsd.com', '2014-03-23 19:54:31', '2014-03-23 19:54:31'),
(7, 2, 'YWCA', 2, '', 'The Women’s Center for Advancement’s mission is to help women and their families stay safe…grow strong.', 'Prevention & Education\r\nWomen’s Center for Advancement offers community education and training that includes educational presentations for area schools, businesses, agencies and other community groups and organizations. It also includes providing domestic violence training seminars for clergy, law enforcement, medical professionals and other professionals.\r\nUniversity Initiatives\r\nThrough the funding support of Alegent and Catholic Health Initiatives, The Women’s Center for Advancement is currently working in partnership with Omaha area universities, University of Nebraska at Omaha and Creighton University, to create and implement a comprehensive violence prevention program that is tailored to meet the unique needs of each university.  The needs are identified through the creation of a coalition compromised of faculty, staff, students and WCA staff.  The coalition then creates a comprehensive strategy to address violence prevention that may occur across all levels of the university from the individual student up to the universities’ policies and procedures.\r\nCampus Violence Prevention Initiatives Include:\r\nRisk reduction and awareness education through classroom presentations and campus staff and faculty training\r\nEvaluation of the policies and procedures for reporting, service access and coordination of services on the campuses\r\nIntervention and support for survivors of violence through individual advocacy services\r\nPrimary prevention through the implementation of the Green Dot program, which promotes active bystander skills in situations that may lead to power-based personal violence (sexual assault, stalking, and partner violence).\r\nThe Green Dot curriculum is a bystander engagement strategy.  It is implemented through an educational and awareness campaign to increase the number of students to move from passive agreement that violence is wrong to daily action toward prevention.  This curriculum empowers every member of a community to become role models in preventing sexual assault, stalking and partner violence.\r\nLearn more at www.livethegreendot.com\r\n“Like” the university Green Dot Facebook pages for updates and more info!\r\nCreighton Green Dot on Facebook\r\nUniversity of Nebraska at Omaha Green Dot on Facebook\r\nObjectives and Desired Outcomes:\r\nIncrease the confidence and skills of students to develop and maintain healthy relationships\r\nPromote student leadership in violence prevention\r\nRaise expectations for equality and respect in relationships\r\nSupport students and their families in healing from previous experiences with violence.\r\nTo learn more about partner violence/sexual assault issues that college students face, please see this 2010 study conducted by: Centers for Disease Control and Prevention, National Center for Injury Prevention and Control, and Division of Violence Prevention.\r\nFor more information, please contact:\r\nJustine O’Neill-Hedlund, MSc\r\nProgram Administrator\r\nWomen’s Center for Advancement\r\njustineo@wcaomaha.org\r\n(402) 345-6555', NULL, '', ' 222 S 29th St', 'omaha', 97, '68131', '', '', 'ymca@help.com', '2014-03-23 19:57:35', '2014-03-23 19:57:35'),
(8, 2, 'Nebraska Urban Indian Health Coalition', 2, '', 'Helping indians since 1979', 'The Nebraska Urban Indian Health Coalition, Inc. (NUIHC) was founded in Omaha, Nebraska in 1986 by an intertribal group of concerned Native Americans. This visionary group saw a need to create an organization with the mission to elevate the health status of urban Indians to the highest level possible.\r\n\r\nToday NUIHC, the only urban Indian organization in Omaha, is governed by a five-member Native American board of directors. NUIHC pioneered community health care as the first community health center in Lincoln and currently has a diverse patient base of almost 12,000.\r\n\r\nThe staff includes family practice physicians, nurse practitioners, nursing staff, marriage and family counselors, therapists, certified translators/interpreters and support staff. Available services include primary care, health education, nutrition counseling, testing and lab facilities and domestic violence intervention.\r\n', 'indian.jpg', '8', '2240 Landon Court', 'omaha', 97, '68102', '4023460902', '', 'indian@indiansunited.com', '2014-03-23 19:59:45', '2014-03-23 19:59:45'),
(9, 2, 'Adams Elementary', 1, '', 'Thank you for visiting our website.  Please visit us often to keep up on all the exciting events here at our school!', 'Archer News\r\n\r\n2014-2015 PTA - Tuesday, March 18, 2014\r\nby Adams Archer VIEW COUNT:4\r\nIt''s that time of year again to elect new officers and committee chairs for the PTA. Forms will go home with students after Spring Break. Even if you have verbally committed to a position, please fill out the form and return it to the office.\r\n\r\nField Day - Tuesday, March 18, 2014\r\nby Adams Archer VIEW COUNT:3\r\nField Day will be held on May 20th this year and the PTA will be providing shirts for all the students free of charge. A form will be sent home requesting the size shirt needed for each student.\r\n\r\nSpring Skate Daze Party - Tuesday, March 18, 2014\r\nby Adams Archer VIEW COUNT:3\r\nFriday, May 9th will be the spring Skate Daze party. The time will be from 6:00-8:00 p.m. and since they are open late on Friday nights, you may stay after 8 for a small fee and continue to skate or use the Playdazium.\r\n\r\nPTA Scholarship - Tuesday, March 18, 2014\r\nby Adams Archer VIEW COUNT:3\r\nEach year the PTA offers two $500.00 scholarships to graduating Omaha area high school seniors who attended Adams Elementary School for at least two years.\r\n\r\nYearbooks - Tuesday, March 18, 2014', NULL, '', '3420 N 78th St ', 'omaha', 97, '68134', '', '', 'school1@gmail.com', '2014-03-23 20:03:20', '2014-03-23 20:03:20'),
(10, 2, 'Bancroft Elementary!', 1, '', 'The Curriculum and Learning Focus for the 2013-2014 School Year is:\r\n', 'Jodie Lenser, Principal\r\nRocky Parkert, Assistant Principal\r\n The gradual release of instruction with literacy strategies across the content areas and consistent procedures and routines.\r\n \r\nThe Curriculum and Learning Focus for the 2013-2014 School Year is:\r\nThe gradual release of instruction with literacy strategies across the content areas and consistent procedures and routines.\r\n \r\n ', 'school2.JPG', '10', '2724 Riverview Blvd', 'omaha', 97, '68108', '', '', 'school2@school.com', '2014-03-23 20:06:39', '2014-03-23 20:06:39'),
(11, 2, 'Castelar Elementary School', 1, '', 'Omaha Public Schools . . . Doing Great Things for Young People\r\n', 'Castelar Elementary is located in the enclave of South Omaha. Its neighborhood and community are rich in cultural diversity. Students are served in pre-kindergarten through fifth grade. Class size averages from fifteen to twenty students in the primary rooms and twenty to twenty-five in the intermediate classrooms. Besides offering the regular elementary curriculum, Castelar Elementary is an English as a Second Language Comprehensive Center and Dual Language School. Castelar not only serves the academic needs of children, but it also reaches out to its community. The school offers a community outreach program and serves as a community liaison by assisting families who are new to the city and who have need for information and material resources. Staff and parents share the common vision that all students are eager and successful learners. This common mission helps to ensure that the highest quality educational opportunities are offered and that all children are able to reach their highest potential.\r\n', 'school3.JPG', '11', '2316 South 18th Street', 'omaha', 97, '68108', '4023447794', '', 'hool3@ssss.com', '2014-03-23 20:08:33', '2014-03-23 20:08:33'),
(12, 2, 'Dundee Elementary School', 1, '', 'Principal''s Greeting\r\n', 'Welcome to Dundee Elementary School via the World Wide Web.  We are excited to have the opportunity to share information with you about our school and all the wonderful things happening at Dundee!\r\n\r\nDundee serves approximately 580 students.  We have three classrooms at each grade: Kindergarten through sixth, an ESL program, and two classrooms for students with behavior disorders.  We are very proud of all of our students and the hard work they do each day to meet the high expectations of academic achievement and citizenship that makes Dundee one of the finest schools in the District.\r\n\r\nThe staff at Dundee Elementary is dedicated, hard working, and enthusiastic!  They participate in a variety of professional development throughout the year to insure that our students receive a top quality, well-rounded educational program.\r\n\r\nDundee is blessed to have outstanding parent and community support.  A dynamic PTA provides resources for extended learning activities, family events, and a variety of other activities that our students and staff enjoy all year long!\r\n\r\nPlease take time to visit our web pages. Better yet, feel free to stop in and pay us a visit.  We would love to show you our beautiful school and have you see our teachers and students engaged in instruction and learning first hand!  Our door is always open and we look forward to your visit!\r\n\r\nSincerely,\r\n\r\n\r\nKaye Goetzinger\r\nPrincipal\r\n', NULL, '', '310 North 51st Street', 'omaha', 97, '68132', '4024454545', '', 'school4@sc.com', '2014-03-23 20:10:42', '2014-03-23 20:10:42'),
(13, 2, 'Florence Elementary School', 1, '', 'The Florence School is located at 7902 North 36th Street in the Florence neighborhood of north Omaha, Nebraska. ', 'Florence School\r\nFrom Wikipedia, the free encyclopedia\r\n  (Redirected from Florence Elementary School)\r\nFlorence Elementary School\r\nLocation\r\n7902 North 36th Street\r\nOmaha, NE 68112\r\nInformation\r\nType	public, elementary school\r\nSchool district	Omaha Public Schools\r\nPrincipal	Mrs. Black\r\nGrades	K-6\r\nWebsite	http://www.ops.org/elementary/florence\r\nThe Florence School is located at 7902 North 36th Street in the Florence neighborhood of north Omaha, Nebraska. The first school in the Florence-area was built in what was then called Cutler''s Park by Mormon pioneers in the late 1840s. The present-day Florence Elementary School was started in the late 1850s after the town of Florence was founded.[1]\r\nAbout[edit]\r\n\r\nAs early as 1868 the Florence School was used as an polling place in Nebraska state elections.[2] A new building was erected in 1889 at the base of the bluff overlooking the Missouri River.[3] In the 1890s, Julia Krisl became one of the first Czech principals in the city of Omaha while at the Florence School.[4] The Florence School building was replaced in 1964.[5] Florence B. Reynolds, a principal at the school in the 1920s, was a published scholar who examined labor relations with teachers.[6]\r\nReferences[edit]\r\n\r\nJump up ^ Historic Florence - Culter''s Park Marker. Florence Historical Society. Retrieved 12/26/07.\r\nJump up ^ (1868) Laws, Joint Resolutions, and Memorials, Passed at the Legislative Assembly of the State of Nebraska. p 239.\r\nJump up ^ Nebraska Department of Public Instruction. (1949) Biennial Report of the State Superintendent of Public Instruction to the Nebraska State Legislature. p 396.\r\nJump up ^ Rosický, R. (1929) A History of Czechs (Bohemians) in Nebraska. Czech Historical Society of Nebraska. p 461.\r\nJump up ^ (1964) North western reporter. Second series. N.W. 2d. p 792.\r\nJump up ^ Nebraska State Education Association. (1929) The Nebraska Educational Journal. p 133.', NULL, '', '7902 North 36th Street', 'omaha', 97, '68112', '', '', 'florence@school5.com', '2014-03-23 20:11:38', '2014-03-23 20:11:38'),
(14, 2, 'Nebraska Food Bank Network', 1, '', 'Donate online using the Virtual BackPack Drive sponsored by the Woodhouse Auto Family.\r\n', 'ne in five kids in Nebraska and western Iowa under the age of 18 is at-risk for hunger. The BackPack Program is designed to provide food for hungry children at times when other resources are not available, such as during weekends and school vacations.\r\n\r\nStaff members at local elementary schools identify chronically hungry students then Food Bank for the Heartland supplies packs filled with nutritious food for those children to take home on Friday afternoons. Each pack provides two breakfast meals and two lunch or dinner meals. They are delivered to participating schools by Food Bank for the Heartland volunteers and staff members.\r\n\r\nThe BackPack Program launched in 2006 with just three schools participating, and today we are distributing 8,361packs to children in need each week in 228 schools across Nebraska and western Iowa. During the 2012-2013 school year, 59 percent of the children who received packs lived in rural areas of Nebraska and western Iowa and 41 percent lived in the Omaha Metro Area.\r\n\r\nTo learn more, please contact Michelle Sause, Child Hunger Program Coordinator, at Food Bank for the Heartland at 402.905.4811.\r\n\r\nWith the rising cost of living expenses, more and more families are struggling to make ends meet. The price per pack is $4. Contact Brian Barks, Director of Development & PR, at 402.905.4808 for sponsorship information.\r\n\r\nDonate online using the Virtual BackPack Drive sponsored by the Woodhouse Auto Family.\r\n\r\nView a list of schools participating in the Backpack program.', NULL, '', '', '', NULL, '', '', '', 'iii@isda.com', '2014-03-23 20:13:23', '2014-03-23 20:13:23'),
(15, 1, 'Animal Cruelty Prevention', 2, '', 'stop animal cruelty', '', NULL, '', '', '', NULL, '', '', '', 'animal@animal.com', '2014-03-23 20:14:55', '2014-03-23 20:14:55');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `user_id`, `status_id`, `event_id`, `start_time`, `end_time`, `comment`) VALUES
(1, 1, 2, 1, '2014-03-19 18:29:00', '2014-03-18 18:29:00', 'my comment'),
(2, 2, 2, 1, '2014-03-21 18:41:00', '2014-03-28 18:41:00', 'asdas'),
(3, 1, 2, 2, '2014-03-25 18:45:00', '2014-03-27 18:45:00', 'I am the org admin but i am participating.. how will this work out'),
(4, 3, 2, 1, '2014-03-12 00:28:00', '2014-03-15 00:28:00', 'asd'),
(5, 9, 2, 14, '2014-03-24 14:25:00', '2014-03-24 14:25:00', 'work'),
(6, 10, 2, 3, '2014-03-13 14:26:00', '2014-03-22 14:26:00', ''),
(7, 10, 2, 8, '2014-03-11 14:27:00', '2014-03-21 14:27:00', ''),
(8, 10, 2, 12, '2014-03-27 14:27:00', '2014-03-29 14:27:00', ''),
(9, 8, 2, 11, '2014-03-21 14:28:00', '2014-03-28 14:28:00', 'ss'),
(10, 11, 2, 13, '2014-03-11 14:28:00', '2014-03-22 14:28:00', 's'),
(11, 11, 2, 10, '2014-03-26 14:29:00', '2014-03-22 14:29:00', ''),
(12, 12, 2, 4, '2014-03-19 14:30:00', '2014-03-15 14:30:00', ''),
(13, 12, 2, 11, '2014-03-20 14:30:00', '2014-03-24 14:30:00', ''),
(14, 13, 2, 10, '2014-03-06 14:30:00', '2014-03-29 14:30:00', 'prajol'),
(15, 13, 2, 8, '2014-03-01 14:31:00', '2014-03-02 14:31:00', 'sss'),
(16, 9, 2, 7, '2014-03-25 16:30:00', '2014-03-12 16:30:00', ''),
(17, 9, 2, 15, '2014-03-12 17:00:00', '2014-03-14 17:00:00', 'asda');

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
  `leaderboardopt` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `address`, `city`, `state_id`, `zip`, `phone`, `email`, `fax`, `username`, `password`, `activated`, `created`, `modified`, `photo`, `photo_dir`, `leaderboardopt`) VALUES
(1, 'Eric', 'Kizaki', '', '', NULL, '', '6609980166', 'erickizaki@gmail.com', '', 'voadmin', 'ed2230faafc90bc0378c8cf621f2e45c99567e53', 1, '2014-02-22 18:14:23', '2014-02-27 19:53:13', NULL, NULL, 0),
(8, 'Bob', 'Smith', NULL, NULL, NULL, NULL, NULL, 'namakusi@gmail.com', NULL, 'Student3', 'ed2230faafc90bc0378c8cf621f2e45c99567e53', 1, '2014-03-23 19:23:53', '2014-03-23 19:24:35', NULL, NULL, 0),
(9, 'Jon', 'De', NULL, NULL, NULL, NULL, NULL, 'namakusi@gmail.com', NULL, 'student1', 'ed2230faafc90bc0378c8cf621f2e45c99567e53', 1, '2014-03-23 19:25:38', '2014-03-23 19:25:48', NULL, NULL, 0),
(10, 'Jackie', 'Johnson', NULL, NULL, NULL, NULL, NULL, 'namakusi@gmail.com', NULL, 'student2', 'ed2230faafc90bc0378c8cf621f2e45c99567e53', 1, '2014-03-23 19:26:35', '2014-03-23 19:26:48', NULL, NULL, 0),
(11, 'Renee', 'Brone', NULL, NULL, NULL, NULL, NULL, 'namakusi@gmail.com', NULL, 'student4', 'ed2230faafc90bc0378c8cf621f2e45c99567e53', 1, '2014-03-23 19:27:14', '2014-03-23 19:27:45', NULL, NULL, 0),
(12, 'Randy', 'Jackson', NULL, NULL, NULL, NULL, NULL, 'namakusi@gmail.com', NULL, 'student6', 'ed2230faafc90bc0378c8cf621f2e45c99567e53', 1, '2014-03-23 19:28:00', '2014-03-23 19:28:10', NULL, NULL, 0),
(13, 'billy', 'bats', NULL, NULL, NULL, NULL, NULL, 'prajolshakya@unomaha.edu', NULL, 'student7', 'ed2230faafc90bc0378c8cf621f2e45c99567e53', 1, '2014-03-23 19:28:30', '2014-03-23 19:28:43', NULL, NULL, 0),
(14, 'dave ', 'edwards', '9716 ohern plz', 'omaha', 97, '68127', '443-435-6767', 'namakusi@gmail.com', '', 'org1', 'ed2230faafc90bc0378c8cf621f2e45c99567e53', 1, '2014-03-23 19:29:04', '2014-03-23 19:34:41', NULL, '', 0),
(15, 'prasad', 'supekra', NULL, NULL, NULL, NULL, NULL, 'namakusi@gmail.com', NULL, 'org2', 'ed2230faafc90bc0378c8cf621f2e45c99567e53', 1, '2014-03-23 19:29:39', '2014-03-23 19:29:47', NULL, NULL, 0),
(16, 'Niaomi', 'Kristen', NULL, NULL, NULL, NULL, NULL, 'namakusi@gmail.com', NULL, 'org3', 'ed2230faafc90bc0378c8cf621f2e45c99567e53', 1, '2014-03-23 19:30:26', '2014-03-23 19:32:01', NULL, NULL, 0),
(17, 'star', 'bucks', NULL, NULL, NULL, NULL, NULL, 'namakusi@gmail.com', NULL, 'org4', 'ed2230faafc90bc0378c8cf621f2e45c99567e53', 1, '2014-03-23 19:30:51', '2014-03-23 19:32:05', NULL, NULL, 0),
(18, 'Aaron', 'Blake', NULL, NULL, NULL, NULL, NULL, 'namakusi@gmail.com', NULL, 'org5', 'ed2230faafc90bc0378c8cf621f2e45c99567e53', 1, '2014-03-23 19:31:37', '2014-03-23 19:32:07', NULL, NULL, 0),
(19, 'catherine', 'davis', NULL, NULL, NULL, NULL, NULL, 'namakusi@gmail.com', NULL, 'org6', 'ed2230faafc90bc0378c8cf621f2e45c99567e53', 1, '2014-03-23 19:32:52', '2014-03-23 19:33:23', NULL, NULL, 0),
(20, 'ed', 'timothy', NULL, NULL, NULL, NULL, NULL, 'namakusi@gmail.com', NULL, 'org7', 'ed2230faafc90bc0378c8cf621f2e45c99567e53', 1, '2014-03-23 19:33:21', '2014-03-23 19:33:37', NULL, NULL, 0),
(21, 'jeff', 'johnson', NULL, NULL, NULL, NULL, NULL, 'namakusi@gmail.com', NULL, 'school1', 'ed2230faafc90bc0378c8cf621f2e45c99567e53', 1, '2014-03-23 19:39:49', '2014-03-23 19:40:02', NULL, NULL, 0),
(22, 'gerge', 'vander', NULL, NULL, NULL, NULL, NULL, 'namakusi@gmail.com', NULL, 'school2', 'ed2230faafc90bc0378c8cf621f2e45c99567e53', 1, '2014-03-23 19:40:21', '2014-03-23 19:40:34', NULL, NULL, 0),
(23, 'henry', 'williams', NULL, NULL, NULL, NULL, NULL, 'namakusi@gmail.com', NULL, 'school3', 'ed2230faafc90bc0378c8cf621f2e45c99567e53', 1, '2014-03-23 19:41:28', '2014-03-23 19:41:42', NULL, NULL, 0),
(24, 'Frank', 'Kayastha', NULL, NULL, NULL, NULL, NULL, 'namakusi@gmail.com', NULL, 'school4', 'ed2230faafc90bc0378c8cf621f2e45c99567e53', 1, '2014-03-23 19:41:56', '2014-03-23 19:42:07', NULL, NULL, 0),
(25, 'Jamie', 'Kirilov', NULL, NULL, NULL, NULL, NULL, 'namakusi@gmail.com', NULL, 'school5', 'ed2230faafc90bc0378c8cf621f2e45c99567e53', 1, '2014-03-23 19:45:23', '2014-03-23 19:45:36', NULL, NULL, 0),
(26, 'chris', 'beecham', NULL, NULL, NULL, NULL, NULL, 'namakusi@gmail.com', NULL, 'school6', 'ed2230faafc90bc0378c8cf621f2e45c99567e53', 1, '2014-03-23 19:46:08', '2014-03-23 19:46:20', NULL, NULL, 0),
(27, 'prajolnostudent', 'shakyanostudent', NULL, NULL, NULL, NULL, NULL, 'namakusi@gmail.com', NULL, 'nostudent', 'ed2230faafc90bc0378c8cf621f2e45c99567e53', 1, '2014-04-04 01:01:05', '2014-04-04 01:01:31', NULL, NULL, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
