-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 12, 2015 at 07:39 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sipservice`
--

-- --------------------------------------------------------

--
-- Table structure for table `sip_accounts`
--

CREATE TABLE IF NOT EXISTS `sip_accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ref` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `web` text COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `callcenter` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `package` int(11) NOT NULL,
  `sipserver` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_add` int(11) NOT NULL,
  `datecreate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL,
  `isactive` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `sip_accounts`
--

INSERT INTO `sip_accounts` (`id`, `ref`, `name`, `address`, `tel`, `web`, `email`, `callcenter`, `latitude`, `longitude`, `package`, `sipserver`, `user_add`, `datecreate`, `status`, `isactive`) VALUES
(1, '', 'บริษัท เอ็น.วี.เค.อินเตอร์ จำกัด สาขาเชียงใหม่', '44/1-2 Nimmanhaemin Road, Soi 12, Suthep, Muang, CHIANG MAI 50200, Thailand.', '+66 53 22 2111, +66 53 40 0877', 'http://www.nvk.co.th/content2', 'nvksupport@gmail.com', '888888', 18.7835259, 98.9816449, 1, 'sip3bo.dyndns.org', 1, '2015-05-12 11:39:28', 1, 1),
(2, '', 'Come On Place', '15/14 Bumroongbury Rd T.Phrasingha, Muang, Chiang Mai, 50200', '', 'http://www.comeonplace.net/', 'cop3350@gmail.com', '888888', 18.782096, 98.98091, 1, 'sip3bo.dyndns.org', 1, '2015-05-12 11:18:53', 1, 1),
(10, '', 'testhotel', 'testhotel testhotel', '', '', 'sonchai058@gmail.com', '', 2323.253232, 211.333, 1, 'sip3bo.dyndns.org', 1, '2015-05-12 12:33:38', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sip_locations`
--

CREATE TABLE IF NOT EXISTS `sip_locations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `deviceid` int(11) DEFAULT NULL,
  `user` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `dateupdate` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=68 ;

--
-- Dumping data for table `sip_locations`
--

INSERT INTO `sip_locations` (`id`, `deviceid`, `user`, `latitude`, `longitude`, `dateupdate`) VALUES
(62, 0, '3331006', 18.7502205, 98.9773576, '2015-01-12 16:14:23'),
(63, 0, '999999', 18.7500338, 98.9773537, '2015-02-12 17:52:09'),
(64, 0, '888888', 18.7753229, 98.9492126, '2015-04-28 04:27:08'),
(65, 0, '3331008', 18.7499769, 98.9772624, '2015-04-28 13:30:05'),
(66, 0, '3331010', 18.7833983, 98.9815349, '2015-04-22 13:05:00'),
(67, 0, '3331011', 18.7833569, 98.9816464, '2015-04-22 13:09:13');

-- --------------------------------------------------------

--
-- Table structure for table `sip_login`
--

CREATE TABLE IF NOT EXISTS `sip_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `account` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `sip_login`
--

INSERT INTO `sip_login` (`id`, `user`, `password`, `account`) VALUES
(1, 'admin', '1234', 0),
(2, 'nvk', '1234', 1),
(3, 'user1', '1q2w3e4r', 2),
(11, 'testhotel', '1234', 10);

-- --------------------------------------------------------

--
-- Table structure for table `sip_packages`
--

CREATE TABLE IF NOT EXISTS `sip_packages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `detail` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_add` int(11) NOT NULL,
  `datecreate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `amount` tinyint(4) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `sip_packages`
--

INSERT INTO `sip_packages` (`id`, `name`, `detail`, `user_add`, `datecreate`, `amount`, `status`) VALUES
(1, '100 user', 'ใช้งาน sip ได้ 100 users', 1, '2015-05-11 04:02:00', 100, 1),
(2, '120 user', 'ใช้งานได้ sip 120 user', 1, '2015-05-11 06:14:06', 120, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sip_status`
--

CREATE TABLE IF NOT EXISTS `sip_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `sip_status`
--

INSERT INTO `sip_status` (`id`, `name`) VALUES
(1, 'ปกติ'),
(2, 'ระงับ'),
(3, 'ยกเลิก');

-- --------------------------------------------------------

--
-- Table structure for table `sip_users`
--

CREATE TABLE IF NOT EXISTS `sip_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `deviceid` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `account` int(11) NOT NULL,
  `sipname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `datecreate` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `isactive` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=231 ;

--
-- Dumping data for table `sip_users`
--

INSERT INTO `sip_users` (`id`, `deviceid`, `account`, `sipname`, `password`, `name`, `address`, `tel`, `email`, `datecreate`, `isactive`) VALUES
(1, '6BE95487528D71A2942FFF288319314', 1, '3331005', 'SIParmy3331005', '', '', '', NULL, '2015-01-13 11:17:31', 1),
(2, 'E2C3B1E940638AA8B29F1D829233A437', 1, '999999', 'SIP3bo999999', 'Boiz', '', '', NULL, '2015-02-13 07:04:44', 1),
(3, '764BD7EA7CE38251BB1BC2DFEACF426E', 1, '888888', 'SIP3bo888888', 'June', '', '', NULL, '2015-02-13 07:04:53', 1),
(4, '939CD3ADD962F5AD6AB66D6E3ABF85', 1, '3331006', 'SIParmy3331006', '', '', '', NULL, '2015-01-15 07:52:09', 1),
(5, '712A174D5C5AA9644E8E8D1C7B37ADF9', 2, '3331007', 'SIParmy3331007', '', '', '', NULL, '2015-04-20 23:43:19', 1),
(6, 'D6E43947D695DB667A0D9EA5964B6', 2, '3331008', 'SIParmy3331008', '', '', '', NULL, '2015-04-21 01:47:45', 1),
(7, '9E26EF6FF72A3BAF7BC5367619D22', 2, '3331009', 'SIParmy3331009', '', '', '', NULL, '2015-04-21 03:17:42', 1),
(8, '598795D4ECC40A65511A757F5C51E97', 2, '3331010', 'SIParmy3331010', '', '', '', NULL, '2015-04-22 12:49:23', 1),
(10, 'E2C3B1E940638AA8B29F1D829233A437', 2, '3331011', 'SIParmy3331011', NULL, NULL, NULL, NULL, '2015-04-22 13:06:41', 1),
(11, '4F4B12E99A1910EF9C27808C9E21C498', 2, '3331012', 'SIParmy3331012', NULL, NULL, NULL, NULL, '2015-04-28 10:25:49', 1),
(12, NULL, 1, '3331013', 'SIParmy3331013', NULL, NULL, NULL, NULL, '2015-02-13 07:00:42', 0),
(13, NULL, 1, '3331014', 'SIParmy3331014', NULL, NULL, NULL, NULL, '2015-02-13 07:00:55', 0),
(14, NULL, 1, '3331015', 'SIParmy3331015', NULL, NULL, NULL, NULL, '2015-02-13 07:01:15', 0),
(15, NULL, 1, '3331016', 'SIParmy3331016', NULL, NULL, NULL, NULL, '2015-02-13 07:01:22', 0),
(16, NULL, 1, '3331017', 'SIParmy3331017', NULL, NULL, NULL, NULL, '2015-02-13 07:01:26', 0),
(17, NULL, 1, '3331018', 'SIParmy3331018', NULL, NULL, NULL, NULL, '2015-02-13 07:01:30', 0),
(18, NULL, 1, '3331019', 'SIParmy3331019', NULL, NULL, NULL, NULL, '2015-02-13 07:01:34', 0),
(19, NULL, 1, '3331020', 'SIParmy3331020', NULL, NULL, NULL, NULL, '2015-02-13 07:01:40', 0),
(20, NULL, 1, '3331021', 'SIParmy3331021', NULL, NULL, NULL, NULL, '2015-02-13 07:02:34', 0),
(21, NULL, 1, '3331022', 'SIParmy3331022', NULL, NULL, NULL, NULL, '2015-02-13 07:02:39', 0),
(22, NULL, 1, '3331023', 'SIParmy3331023', NULL, NULL, NULL, NULL, '2015-02-13 07:02:45', 0),
(23, NULL, 1, '3331024', 'SIParmy3331024', NULL, NULL, NULL, NULL, '2015-02-13 07:02:52', 0),
(24, NULL, 1, '3331025', 'SIParmy3331025', NULL, NULL, NULL, NULL, '2015-02-13 07:02:58', 0),
(25, NULL, 1, '3331026', 'SIParmy3331026', NULL, NULL, NULL, NULL, '2015-02-13 07:03:07', 0),
(26, NULL, 1, '3331027', 'SIParmy3331027', NULL, NULL, NULL, NULL, '2015-02-13 07:03:15', 0),
(27, NULL, 1, '3331028', 'SIParmy3331028', NULL, NULL, NULL, NULL, '2015-02-13 07:03:21', 0),
(28, NULL, 1, '3331029', 'SIParmy3331029', NULL, NULL, NULL, NULL, '2015-02-13 07:03:29', 0),
(29, NULL, 1, '3331030', 'SIParmy3331030', NULL, NULL, NULL, NULL, '2015-02-13 07:03:37', 0),
(30, NULL, 4, '333005', 'SIPtesthotel333005', NULL, NULL, NULL, NULL, '2015-05-12 12:04:03', 0),
(31, NULL, 8, '3330039', 'SIPtesthotel3330039', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(32, NULL, 8, '3330040', 'SIPtesthotel3330040', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(33, NULL, 8, '3330041', 'SIPtesthotel3330041', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(34, NULL, 8, '3330042', 'SIPtesthotel3330042', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(35, NULL, 8, '3330043', 'SIPtesthotel3330043', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(36, NULL, 8, '3330044', 'SIPtesthotel3330044', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(37, NULL, 8, '3330045', 'SIPtesthotel3330045', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(38, NULL, 8, '3330046', 'SIPtesthotel3330046', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(39, NULL, 8, '3330047', 'SIPtesthotel3330047', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(40, NULL, 8, '3330048', 'SIPtesthotel3330048', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(41, NULL, 8, '3330049', 'SIPtesthotel3330049', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(42, NULL, 8, '3330050', 'SIPtesthotel3330050', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(43, NULL, 8, '3330051', 'SIPtesthotel3330051', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(44, NULL, 8, '3330052', 'SIPtesthotel3330052', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(45, NULL, 8, '3330053', 'SIPtesthotel3330053', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(46, NULL, 8, '3330054', 'SIPtesthotel3330054', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(47, NULL, 8, '3330055', 'SIPtesthotel3330055', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(48, NULL, 8, '3330056', 'SIPtesthotel3330056', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(49, NULL, 8, '3330057', 'SIPtesthotel3330057', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(50, NULL, 8, '3330058', 'SIPtesthotel3330058', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(51, NULL, 8, '3330059', 'SIPtesthotel3330059', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(52, NULL, 8, '3330060', 'SIPtesthotel3330060', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(53, NULL, 8, '3330061', 'SIPtesthotel3330061', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(54, NULL, 8, '3330062', 'SIPtesthotel3330062', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(55, NULL, 8, '3330063', 'SIPtesthotel3330063', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(56, NULL, 8, '3330064', 'SIPtesthotel3330064', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(57, NULL, 8, '3330065', 'SIPtesthotel3330065', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(58, NULL, 8, '3330066', 'SIPtesthotel3330066', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(59, NULL, 8, '3330067', 'SIPtesthotel3330067', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(60, NULL, 8, '3330068', 'SIPtesthotel3330068', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(61, NULL, 8, '3330069', 'SIPtesthotel3330069', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(62, NULL, 8, '3330070', 'SIPtesthotel3330070', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(63, NULL, 8, '3330071', 'SIPtesthotel3330071', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(64, NULL, 8, '3330072', 'SIPtesthotel3330072', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(65, NULL, 8, '3330073', 'SIPtesthotel3330073', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(66, NULL, 8, '3330074', 'SIPtesthotel3330074', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(67, NULL, 8, '3330075', 'SIPtesthotel3330075', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(68, NULL, 8, '3330076', 'SIPtesthotel3330076', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(69, NULL, 8, '3330077', 'SIPtesthotel3330077', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(70, NULL, 8, '3330078', 'SIPtesthotel3330078', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(71, NULL, 8, '3330079', 'SIPtesthotel3330079', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(72, NULL, 8, '3330080', 'SIPtesthotel3330080', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(73, NULL, 8, '3330081', 'SIPtesthotel3330081', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(74, NULL, 8, '3330082', 'SIPtesthotel3330082', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(75, NULL, 8, '3330083', 'SIPtesthotel3330083', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(76, NULL, 8, '3330084', 'SIPtesthotel3330084', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(77, NULL, 8, '3330085', 'SIPtesthotel3330085', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(78, NULL, 8, '3330086', 'SIPtesthotel3330086', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(79, NULL, 8, '3330087', 'SIPtesthotel3330087', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(80, NULL, 8, '3330088', 'SIPtesthotel3330088', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(81, NULL, 8, '3330089', 'SIPtesthotel3330089', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(82, NULL, 8, '3330090', 'SIPtesthotel3330090', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(83, NULL, 8, '3330091', 'SIPtesthotel3330091', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(84, NULL, 8, '3330092', 'SIPtesthotel3330092', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(85, NULL, 8, '3330093', 'SIPtesthotel3330093', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(86, NULL, 8, '3330094', 'SIPtesthotel3330094', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(87, NULL, 8, '3330095', 'SIPtesthotel3330095', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(88, NULL, 8, '3330096', 'SIPtesthotel3330096', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(89, NULL, 8, '3330097', 'SIPtesthotel3330097', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(90, NULL, 8, '3330098', 'SIPtesthotel3330098', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(91, NULL, 8, '3330099', 'SIPtesthotel3330099', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(92, NULL, 8, '3330100', 'SIPtesthotel3330100', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(93, NULL, 8, '3330101', 'SIPtesthotel3330101', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(94, NULL, 8, '3330102', 'SIPtesthotel3330102', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(95, NULL, 8, '3330103', 'SIPtesthotel3330103', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(96, NULL, 8, '3330104', 'SIPtesthotel3330104', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(97, NULL, 8, '3330105', 'SIPtesthotel3330105', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(98, NULL, 8, '3330106', 'SIPtesthotel3330106', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(99, NULL, 8, '3330107', 'SIPtesthotel3330107', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(100, NULL, 8, '3330108', 'SIPtesthotel3330108', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(101, NULL, 8, '3330109', 'SIPtesthotel3330109', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(102, NULL, 8, '3330110', 'SIPtesthotel3330110', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(103, NULL, 8, '3330111', 'SIPtesthotel3330111', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(104, NULL, 8, '3330112', 'SIPtesthotel3330112', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(105, NULL, 8, '3330113', 'SIPtesthotel3330113', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(106, NULL, 8, '3330114', 'SIPtesthotel3330114', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(107, NULL, 8, '3330115', 'SIPtesthotel3330115', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(108, NULL, 8, '3330116', 'SIPtesthotel3330116', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(109, NULL, 8, '3330117', 'SIPtesthotel3330117', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(110, NULL, 8, '3330118', 'SIPtesthotel3330118', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(111, NULL, 8, '3330119', 'SIPtesthotel3330119', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(112, NULL, 8, '3330120', 'SIPtesthotel3330120', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(113, NULL, 8, '3330121', 'SIPtesthotel3330121', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(114, NULL, 8, '3330122', 'SIPtesthotel3330122', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(115, NULL, 8, '3330123', 'SIPtesthotel3330123', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(116, NULL, 8, '3330124', 'SIPtesthotel3330124', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(117, NULL, 8, '3330125', 'SIPtesthotel3330125', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(118, NULL, 8, '3330126', 'SIPtesthotel3330126', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(119, NULL, 8, '3330127', 'SIPtesthotel3330127', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(120, NULL, 8, '3330128', 'SIPtesthotel3330128', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(121, NULL, 8, '3330129', 'SIPtesthotel3330129', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(122, NULL, 8, '3330130', 'SIPtesthotel3330130', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(123, NULL, 8, '3330131', 'SIPtesthotel3330131', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(124, NULL, 8, '3330132', 'SIPtesthotel3330132', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(125, NULL, 8, '3330133', 'SIPtesthotel3330133', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(126, NULL, 8, '3330134', 'SIPtesthotel3330134', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(127, NULL, 8, '3330135', 'SIPtesthotel3330135', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(128, NULL, 8, '3330136', 'SIPtesthotel3330136', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(129, NULL, 8, '3330137', 'SIPtesthotel3330137', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(130, NULL, 8, '3330138', 'SIPtesthotel3330138', NULL, NULL, NULL, NULL, '2015-05-12 12:19:43', 0),
(131, NULL, 10, '3330141', 'SIPtesthotel3330141', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(132, NULL, 10, '3330142', 'SIPtesthotel3330142', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(133, NULL, 10, '3330143', 'SIPtesthotel3330143', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(134, NULL, 10, '3330144', 'SIPtesthotel3330144', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(135, NULL, 10, '3330145', 'SIPtesthotel3330145', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(136, NULL, 10, '3330146', 'SIPtesthotel3330146', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(137, NULL, 10, '3330147', 'SIPtesthotel3330147', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(138, NULL, 10, '3330148', 'SIPtesthotel3330148', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(139, NULL, 10, '3330149', 'SIPtesthotel3330149', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(140, NULL, 10, '3330150', 'SIPtesthotel3330150', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(141, NULL, 10, '3330151', 'SIPtesthotel3330151', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(142, NULL, 10, '3330152', 'SIPtesthotel3330152', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(143, NULL, 10, '3330153', 'SIPtesthotel3330153', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(144, NULL, 10, '3330154', 'SIPtesthotel3330154', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(145, NULL, 10, '3330155', 'SIPtesthotel3330155', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(146, NULL, 10, '3330156', 'SIPtesthotel3330156', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(147, NULL, 10, '3330157', 'SIPtesthotel3330157', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(148, NULL, 10, '3330158', 'SIPtesthotel3330158', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(149, NULL, 10, '3330159', 'SIPtesthotel3330159', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(150, NULL, 10, '3330160', 'SIPtesthotel3330160', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(151, NULL, 10, '3330161', 'SIPtesthotel3330161', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(152, NULL, 10, '3330162', 'SIPtesthotel3330162', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(153, NULL, 10, '3330163', 'SIPtesthotel3330163', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(154, NULL, 10, '3330164', 'SIPtesthotel3330164', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(155, NULL, 10, '3330165', 'SIPtesthotel3330165', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(156, NULL, 10, '3330166', 'SIPtesthotel3330166', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(157, NULL, 10, '3330167', 'SIPtesthotel3330167', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(158, NULL, 10, '3330168', 'SIPtesthotel3330168', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(159, NULL, 10, '3330169', 'SIPtesthotel3330169', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(160, NULL, 10, '3330170', 'SIPtesthotel3330170', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(161, NULL, 10, '3330171', 'SIPtesthotel3330171', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(162, NULL, 10, '3330172', 'SIPtesthotel3330172', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(163, NULL, 10, '3330173', 'SIPtesthotel3330173', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(164, NULL, 10, '3330174', 'SIPtesthotel3330174', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(165, NULL, 10, '3330175', 'SIPtesthotel3330175', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(166, NULL, 10, '3330176', 'SIPtesthotel3330176', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(167, NULL, 10, '3330177', 'SIPtesthotel3330177', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(168, NULL, 10, '3330178', 'SIPtesthotel3330178', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(169, NULL, 10, '3330179', 'SIPtesthotel3330179', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(170, NULL, 10, '3330180', 'SIPtesthotel3330180', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(171, NULL, 10, '3330181', 'SIPtesthotel3330181', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(172, NULL, 10, '3330182', 'SIPtesthotel3330182', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(173, NULL, 10, '3330183', 'SIPtesthotel3330183', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(174, NULL, 10, '3330184', 'SIPtesthotel3330184', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(175, NULL, 10, '3330185', 'SIPtesthotel3330185', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(176, NULL, 10, '3330186', 'SIPtesthotel3330186', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(177, NULL, 10, '3330187', 'SIPtesthotel3330187', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(178, NULL, 10, '3330188', 'SIPtesthotel3330188', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(179, NULL, 10, '3330189', 'SIPtesthotel3330189', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(180, NULL, 10, '3330190', 'SIPtesthotel3330190', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(181, NULL, 10, '3330191', 'SIPtesthotel3330191', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(182, NULL, 10, '3330192', 'SIPtesthotel3330192', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(183, NULL, 10, '3330193', 'SIPtesthotel3330193', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(184, NULL, 10, '3330194', 'SIPtesthotel3330194', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(185, NULL, 10, '3330195', 'SIPtesthotel3330195', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(186, NULL, 10, '3330196', 'SIPtesthotel3330196', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(187, NULL, 10, '3330197', 'SIPtesthotel3330197', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(188, NULL, 10, '3330198', 'SIPtesthotel3330198', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(189, NULL, 10, '3330199', 'SIPtesthotel3330199', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(190, NULL, 10, '3330200', 'SIPtesthotel3330200', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(191, NULL, 10, '3330201', 'SIPtesthotel3330201', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(192, NULL, 10, '3330202', 'SIPtesthotel3330202', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(193, NULL, 10, '3330203', 'SIPtesthotel3330203', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(194, NULL, 10, '3330204', 'SIPtesthotel3330204', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(195, NULL, 10, '3330205', 'SIPtesthotel3330205', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(196, NULL, 10, '3330206', 'SIPtesthotel3330206', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(197, NULL, 10, '3330207', 'SIPtesthotel3330207', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(198, NULL, 10, '3330208', 'SIPtesthotel3330208', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(199, NULL, 10, '3330209', 'SIPtesthotel3330209', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(200, NULL, 10, '3330210', 'SIPtesthotel3330210', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(201, NULL, 10, '3330211', 'SIPtesthotel3330211', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(202, NULL, 10, '3330212', 'SIPtesthotel3330212', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(203, NULL, 10, '3330213', 'SIPtesthotel3330213', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(204, NULL, 10, '3330214', 'SIPtesthotel3330214', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(205, NULL, 10, '3330215', 'SIPtesthotel3330215', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(206, NULL, 10, '3330216', 'SIPtesthotel3330216', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(207, NULL, 10, '3330217', 'SIPtesthotel3330217', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(208, NULL, 10, '3330218', 'SIPtesthotel3330218', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(209, NULL, 10, '3330219', 'SIPtesthotel3330219', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(210, NULL, 10, '3330220', 'SIPtesthotel3330220', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(211, NULL, 10, '3330221', 'SIPtesthotel3330221', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(212, NULL, 10, '3330222', 'SIPtesthotel3330222', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(213, NULL, 10, '3330223', 'SIPtesthotel3330223', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(214, NULL, 10, '3330224', 'SIPtesthotel3330224', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(215, NULL, 10, '3330225', 'SIPtesthotel3330225', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(216, NULL, 10, '3330226', 'SIPtesthotel3330226', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(217, NULL, 10, '3330227', 'SIPtesthotel3330227', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(218, NULL, 10, '3330228', 'SIPtesthotel3330228', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(219, NULL, 10, '3330229', 'SIPtesthotel3330229', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(220, NULL, 10, '3330230', 'SIPtesthotel3330230', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(221, NULL, 10, '3330231', 'SIPtesthotel3330231', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(222, NULL, 10, '3330232', 'SIPtesthotel3330232', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(223, NULL, 10, '3330233', 'SIPtesthotel3330233', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(224, NULL, 10, '3330234', 'SIPtesthotel3330234', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(225, NULL, 10, '3330235', 'SIPtesthotel3330235', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(226, NULL, 10, '3330236', 'SIPtesthotel3330236', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(227, NULL, 10, '3330237', 'SIPtesthotel3330237', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(228, NULL, 10, '3330238', 'SIPtesthotel3330238', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(229, NULL, 10, '3330239', 'SIPtesthotel3330239', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0),
(230, NULL, 10, '3330240', 'SIPtesthotel3330240', NULL, NULL, NULL, NULL, '2015-05-12 12:33:38', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sip_webdetail`
--

CREATE TABLE IF NOT EXISTS `sip_webdetail` (
  `WD_ID` int(11) NOT NULL AUTO_INCREMENT,
  `WD_Logo` varchar(100) NOT NULL COMMENT 'LOGO เว็บ',
  `WD_Icon` varchar(100) NOT NULL COMMENT 'ICON เว็บ',
  `WD_BGcolor` varchar(10) NOT NULL COMMENT 'โคดสี พื้นหลัง',
  `WD_Background` varchar(100) NOT NULL COMMENT 'รูปพื้นหลัง',
  `WD_TitleImgLogin` varchar(100) NOT NULL COMMENT 'รูปไตเติ้ลหน้า Login',
  `WD_Name` varchar(100) NOT NULL COMMENT 'ชื่อเว็บไซต์',
  `WD_NameCompany` varchar(100) NOT NULL COMMENT 'ชื่อบริษัท',
  `WD_Address` text NOT NULL COMMENT 'ที่อยู่บริษัท',
  `WD_Email` varchar(240) NOT NULL COMMENT 'อีเมล์',
  `WD_Tel` varchar(200) NOT NULL COMMENT 'เบอร์โทรศัพท์',
  `WD_Fax` varchar(200) NOT NULL COMMENT 'แฟกซ์',
  `WD_Title` text NOT NULL COMMENT 'ไตเติ้ล/เรื่องย่อ',
  `WD_Descrip` text NOT NULL COMMENT 'รายละเอัยดเว็บไซต์',
  `WD_Keyword` text NOT NULL COMMENT 'คีย์เวิร์ด',
  `WD_Stats` text NOT NULL COMMENT 'โค๊ดสถิติ',
  `WD_FbFanpage` text NOT NULL COMMENT 'Facebook Fanpage',
  `WD_EmbedVDO` text NOT NULL COMMENT 'Embed Youtube',
  `WD_Latitude` float NOT NULL COMMENT 'พิกัด(latitude)',
  `WD_Longjitude` float NOT NULL COMMENT 'พิกัด(longjitude)',
  `WD_ImgMap` varchar(100) NOT NULL COMMENT 'รูปหมุดในแผนที่',
  PRIMARY KEY (`WD_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sip_webdetail`
--

INSERT INTO `sip_webdetail` (`WD_ID`, `WD_Logo`, `WD_Icon`, `WD_BGcolor`, `WD_Background`, `WD_TitleImgLogin`, `WD_Name`, `WD_NameCompany`, `WD_Address`, `WD_Email`, `WD_Tel`, `WD_Fax`, `WD_Title`, `WD_Descrip`, `WD_Keyword`, `WD_Stats`, `WD_FbFanpage`, `WD_EmbedVDO`, `WD_Latitude`, `WD_Longjitude`, `WD_ImgMap`) VALUES
(1, '10922641_10153072602165127_4527996033182144277_n.png', '10922641_10153072602165127_4527996033182144277_n.png', '#FDFDFD', 'living-room-26405.jpg', '10922641_10153072602165127_4527996033182144277_n.png', 'ระบบจัดการข้อมูลโรงแรม', 'บริษัท เอ็น.วี.เค.อินเตอร์ จำกัด สาขาเชียงใหม่', '44/1-2 Nimmanhaemin Road, Soi 12, Suthep, Muang, CHIANG MAI 50200, Thailand.', 'nvksupport@gmail.com', '053 – 399288 , 053 – 399255', '053 – 399255', 'ระบบจัดการข้อมูลโรงแรม เป็นระบบที่สร้างขึ้นมาเพื่อจัดการข้อมูลโรงแรม..', 'ระบบจัดการข้อมูลโรงแรม เป็นระบบที่สร้างขึ้นมาเพื่อจัดการข้อมูลโรงแรม..ระบบจัดการข้อมูลโรงแรม เป็นระบบที่สร้างขึ้นมาเพื่อจัดการข้อมูลโรงแรม..', 'ที่พัก,ห้องพัก,โรงแรม,เช่า', '', 'https://www.facebook.com/ServiceTechnologyConsultant', '', 1545.22, 22.333, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
