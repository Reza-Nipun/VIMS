-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 24, 2020 at 10:23 AM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vt_isml_vims`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE IF NOT EXISTS `tb_admin` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `user_name` varchar(22) NOT NULL,
  `password` varchar(22) NOT NULL,
  `rule` int(2) NOT NULL,
  `project` varchar(10) NOT NULL,
  `area` varchar(15) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_name` (`user_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `name`, `user_name`, `password`, `rule`, `project`, `area`) VALUES
(4, 'Dr. Tapas Kumar Chakma', 'admin', '1212', 1, 'HIMS', 'VTG'),
(13, 'jahid', 'jahid', 'jahid', 2, '', ''),
(47, 'ISML2', 'ISML2', '123456', 2, 'VIMS', 'ISML'),
(46, 'ISML1', 'ISML1', '123456', 2, 'VIMS', 'ISML'),
(44, 'isml_vims', 'isml_vims', '1234567', 1, 'VIMS', 'ISML'),
(45, 'Dispatch', 'isml_dis', '12345', 1, 'VIMS', 'ISML');

-- --------------------------------------------------------

--
-- Table structure for table `tb_test_sync_data`
--

CREATE TABLE IF NOT EXISTS `tb_test_sync_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tb_test_sync_data`
--

INSERT INTO `tb_test_sync_data` (`id`, `name`) VALUES
(1, 'Nipun Sarker'),
(2, 'Masum'),
(3, 'Mahbub');

-- --------------------------------------------------------

--
-- Table structure for table `tb_visitor_card`
--

CREATE TABLE IF NOT EXISTS `tb_visitor_card` (
  `sl` int(3) NOT NULL AUTO_INCREMENT,
  `card_no` varchar(4) NOT NULL,
  `card_type` varchar(40) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`sl`),
  KEY `card_type` (`card_type`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=152 ;

--
-- Dumping data for table `tb_visitor_card`
--

INSERT INTO `tb_visitor_card` (`sl`, `card_no`, `card_type`, `status`) VALUES
(1, '1', 'General Visitor', 1),
(2, '2', 'General Visitor', 0),
(3, '3', 'General Visitor', 0),
(4, '4', 'General Visitor', 0),
(5, '5', 'General Visitor', 1),
(6, '6', 'General Visitor', 1),
(7, '7', 'General Visitor', 1),
(8, '8', 'General Visitor', 1),
(9, '9', 'General Visitor', 1),
(10, '10', 'General Visitor', 1),
(11, '11', 'General Visitor', 1),
(12, '12', 'General Visitor', 1),
(13, '13', 'General Visitor', 1),
(14, '14', 'General Visitor', 1),
(15, '15', 'General Visitor', 1),
(16, '1', 'Buyer', 1),
(17, '2', 'Buyer', 1),
(18, '3', 'Buyer', 1),
(19, '4', 'Buyer', 1),
(20, '5', 'Buyer', 1),
(21, '6', 'Buyer', 1),
(22, '7', 'Buyer', 1),
(23, '8', 'Buyer', 1),
(24, '9', 'Buyer', 1),
(25, '10', 'Buyer', 1),
(26, '11', 'Buyer', 1),
(27, '12', 'Buyer', 1),
(28, '13', 'Buyer', 1),
(29, '14', 'Buyer', 1),
(30, '15', 'Buyer', 1),
(31, '0', 'Other', 1),
(32, '16', 'General Visitor', 1),
(33, '17', 'General Visitor', 1),
(34, '18', 'General Visitor', 1),
(35, '19', 'General Visitor', 1),
(36, '20', 'General Visitor', 1),
(37, '21', 'General Visitor', 1),
(38, '22', 'General Visitor', 1),
(39, '23', 'General Visitor', 1),
(40, '24', 'General Visitor', 1),
(41, '25', 'General Visitor', 1),
(42, '16', 'Buyer', 1),
(43, '17', 'Buyer', 1),
(44, '18', 'Buyer', 1),
(45, '19', 'Buyer', 1),
(46, '20', 'Buyer', 1),
(47, '21', 'Buyer', 1),
(48, '22', 'Buyer', 1),
(49, '23', 'Buyer', 1),
(50, '24', 'Buyer', 1),
(51, '25', 'Buyer', 1),
(52, '26', 'General Visitor', 1),
(53, '27', 'General Visitor', 1),
(54, '28', 'General Visitor', 1),
(55, '29', 'General Visitor', 1),
(56, '30', 'General Visitor', 1),
(57, '31', 'General Visitor', 1),
(58, '32', 'General Visitor', 1),
(59, '33', 'General Visitor', 1),
(60, '34', 'General Visitor', 1),
(61, '35', 'General Visitor', 1),
(62, '36', 'General Visitor', 1),
(63, '37', 'General Visitor', 1),
(64, '38', 'General Visitor', 1),
(65, '39', 'General Visitor', 1),
(66, '40', 'General Visitor', 1),
(67, '41', 'General Visitor', 1),
(68, '42', 'General Visitor', 1),
(69, '43', 'General Visitor', 1),
(70, '44', 'General Visitor', 1),
(71, '45', 'General Visitor', 1),
(72, '46', 'General Visitor', 1),
(73, '47', 'General Visitor', 1),
(74, '48', 'General Visitor', 1),
(75, '49', 'General Visitor', 1),
(76, '50', 'General Visitor', 1),
(77, '26', 'Buyer', 1),
(78, '27', 'Buyer', 1),
(79, '28', 'Buyer', 1),
(80, '29', 'Buyer', 1),
(81, '30', 'Buyer', 1),
(82, '31', 'Buyer', 1),
(83, '32', 'Buyer', 1),
(84, '33', 'Buyer', 1),
(85, '34', 'Buyer', 1),
(86, '35', 'Buyer', 1),
(87, '36', 'Buyer', 1),
(88, '37', 'Buyer', 1),
(89, '38', 'Buyer', 1),
(90, '39', 'Buyer', 1),
(91, '40', 'Buyer', 1),
(92, '41', 'Buyer', 1),
(93, '42', 'Buyer', 1),
(94, '43', 'Buyer', 1),
(95, '44', 'Buyer', 1),
(96, '45', 'Buyer', 1),
(97, '46', 'Buyer', 1),
(98, '47', 'Buyer', 1),
(99, '48', 'Buyer', 1),
(100, '49', 'Buyer', 1),
(101, '50', 'Buyer', 1),
(102, '51', 'General Visitor', 1),
(103, '52', 'General Visitor', 1),
(104, '53', 'General Visitor', 1),
(105, '54', 'General Visitor', 1),
(106, '55', 'General Visitor', 1),
(107, '56', 'General Visitor', 1),
(108, '57', 'General Visitor', 1),
(109, '58', 'General Visitor', 1),
(110, '59', 'General Visitor', 1),
(111, '60', 'General Visitor', 1),
(112, '61', 'General Visitor', 1),
(113, '62', 'General Visitor', 1),
(114, '63', 'General Visitor', 1),
(115, '64', 'General Visitor', 1),
(116, '65', 'General Visitor', 1),
(117, '66', 'General Visitor', 1),
(118, '67', 'General Visitor', 1),
(119, '68', 'General Visitor', 1),
(120, '69', 'General Visitor', 1),
(121, '70', 'General Visitor', 1),
(122, '71', 'General Visitor', 1),
(123, '72', 'General Visitor', 1),
(124, '73', 'General Visitor', 1),
(125, '74', 'General Visitor', 1),
(126, '75', 'General Visitor', 1),
(127, '76', 'General Visitor', 1),
(128, '77', 'General Visitor', 1),
(129, '78', 'General Visitor', 1),
(130, '79', 'General Visitor', 1),
(131, '80', 'General Visitor', 1),
(132, '81', 'General Visitor', 1),
(133, '82', 'General Visitor', 1),
(134, '83', 'General Visitor', 1),
(135, '84', 'General Visitor', 1),
(136, '85', 'General Visitor', 1),
(137, '86', 'General Visitor', 1),
(138, '87', 'General Visitor', 1),
(139, '88', 'General Visitor', 1),
(140, '89', 'General Visitor', 1),
(141, '90', 'General Visitor', 1),
(142, '91', 'General Visitor', 1),
(143, '92', 'General Visitor', 1),
(144, '93', 'General Visitor', 1),
(145, '94', 'General Visitor', 1),
(146, '95', 'General Visitor', 1),
(147, '96', 'General Visitor', 1),
(148, '97', 'General Visitor', 1),
(149, '98', 'General Visitor', 1),
(150, '99', 'General Visitor', 1),
(151, '100', 'General Visitor', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_visitor_info`
--

CREATE TABLE IF NOT EXISTS `tb_visitor_info` (
  `sl` int(4) NOT NULL AUTO_INCREMENT,
  `visitor_name` varchar(60) NOT NULL,
  `visitor_nick_name` varchar(20) NOT NULL,
  `visitor_type` varchar(50) NOT NULL,
  `visitor_address` varchar(200) NOT NULL,
  `visitor_mobile_no` varchar(20) NOT NULL,
  `visiting_card_no` varchar(6) NOT NULL,
  `visiting_unit` varchar(40) NOT NULL,
  `visit_reason` varchar(200) NOT NULL,
  `contact_person` varchar(60) NOT NULL,
  `visitor_company_name` varchar(100) NOT NULL COMMENT 'this field is renamed from "contact_person_dept"',
  `date` varchar(30) NOT NULL,
  `visitor_in_time` varchar(30) NOT NULL,
  `visitor_out_time` varchar(30) NOT NULL,
  `operator_in_time` varchar(30) NOT NULL,
  `operator_out_time` varchar(30) NOT NULL,
  `month_value` varchar(10) NOT NULL,
  `year_value` int(10) NOT NULL,
  `remarks` varchar(200) NOT NULL,
  `status` varchar(20) NOT NULL,
  `user_id` varchar(4) NOT NULL,
  PRIMARY KEY (`sl`),
  KEY `visitor_type` (`visitor_type`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=174 ;

--
-- Dumping data for table `tb_visitor_info`
--

INSERT INTO `tb_visitor_info` (`sl`, `visitor_name`, `visitor_nick_name`, `visitor_type`, `visitor_address`, `visitor_mobile_no`, `visiting_card_no`, `visiting_unit`, `visit_reason`, `contact_person`, `visitor_company_name`, `date`, `visitor_in_time`, `visitor_out_time`, `operator_in_time`, `operator_out_time`, `month_value`, `year_value`, `remarks`, `status`, `user_id`) VALUES
(1, 'M NIPUN SARKER', '', 'General Visitor', 'ECOFAB', '01727135231', '2', 'ISS', 'System TEST PURPOSE', 'IT', 'ISML', '12-05-2017', '2017:12:05 16:03:35', '2017:12:05 16:05:33', '2017:12:05 16:05:00', '2017:12:05 16:05:39', '12', 2017, 'System TEST PURPOSE    ', '1', '44'),
(2, 'M NIPUN SARKER', '', 'General Visitor', 'ECOFAB', '01727135231', '2', 'ISS', 'TEST', 'IT', 'ISML', '12-05-2017', '2017:12:05 16:07:37', '2017:12:05 16:11:26', '2017:12:05 16:10:01', '2017:12:05 16:11:28', '12', 2017, 'TEST    ', '1', '44'),
(3, 'MONISHA', '', 'General Visitor', 'OTHER', '01756034725', '27', '', 'HR PUSHI', 'PUSHI', 'care bangladesh', '12-05-2017', '2017:12:05 16:37:39', '2017:12:05 16:44:09', '2017:12:05 16:42:56', '2017:12:05 16:44:20', '12', 2017, '    ', '1', '44'),
(4, 'SOJIB', '', 'General Visitor', 'UTTARA', '01965575009', '52', 'ISS', 'HR', 'ALEYA MAM', 'NAI', '12-05-2017', '2017:12:05 16:45:44', '2017:12:05 16:48:52', '2017:12:05 16:48:08', '2017:12:05 16:48:55', '12', 2017, '    ', '1', '44'),
(5, 'SOJIB', '', 'General Visitor', 'UTTARA', '01965575009', '52', 'ISS', 'HR', 'ALEYA MAM', 'NAI', '12-05-2017', '2017:12:05 16:45:44', '2017:12:05 16:48:29', '2017:12:05 16:48:17', '2017:12:05 16:48:47', '12', 2017, '    ', '1', '44'),
(6, 'Delowar', '', 'General Visitor', 'gazipur', '01726200976', '35', 'Maintenance', 'maintenance interview\r\n', 'mr. ronjit kumar', 'interview', '01-10-2018', '2018:01:10 09:35:00', '2018:01:10 16:40:13', '2018:01:10 09:40:42', '2018:01:10 16:40:16', '1', 2018, '    ', '1', '44'),
(7, 'A HOSSAIN', '', 'General Visitor', 'others', '01687392008', '41', 'Cutting', 'others probam', 'saleh ahmad', 'Priam asia', '01-10-2018', '2018:01:10 10:33:04', '2018:01:10 11:21:36', '2018:01:10 10:36:01', '2018:01:10 11:21:40', '1', 2018, '    ', '1', '44'),
(8, 'azad+1', '', 'General Visitor', 'itacol', '01713037327', '88', 'MM', '\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nother\r\n\r\n', 'mr. mijan', 'itacol ', '01-10-2018', '2018:01:10 11:30:23', '2018:01:10 12:22:01', '2018:01:10 11:32:17', '2018:01:10 12:22:03', '1', 2018, '    ', '1', '44'),
(9, 'motin', '', 'General Visitor', 'R.S enterprise', '01726408270', '13', 'Management', 'just meet\r\n', 'DGM ALOM', 'R.S enterprise', '01-10-2018', '2018:01:10 12:20:24', '2018:01:10 16:53:19', '2018:01:10 12:21:45', '2018:01:10 16:53:22', '1', 2018, '    ', '1', '44'),
(10, 'ABDUL ALI', '', 'General Visitor', 'ALPHA LIFE ', '01716673406', '43', 'HR', 'OTHER\r\n', '', 'ALPHA LIFE ', '01-10-2018', '2018:01:10 17:05:59', '2018:01:11 11:18:19', '2018:01:10 17:09:00', '2018:01:11 11:18:24', '1', 2018, '    ', '1', '44'),
(11, 'Md saiful is;am', '', 'General Visitor', 'bro-bari', '01752197219', '88', 'Maintenance', 'join\r\n', 'mr. ronjit kumar', 'no', '01-11-2018', '2018:01:11 14:42:48', '2018:01:13 10:35:24', '2018:01:11 14:45:46', '2018:01:13 10:35:30', '1', 2018, '    ', '1', '44'),
(12, 'aslam+1', '', 'General Visitor', 'veit', '01868021283', '10', 'Maintenance', 'just visite\r\n', 'mr. ronjit kumar', 'veit', '01-13-2018', '2018:01:13 10:36:01', '2018:01:13 10:40:22', '2018:01:13 10:40:11', '2018:01:13 10:40:38', '1', 2018, '    ', '1', '44'),
(13, 'Arafath', '', 'General Visitor', 'mutisha', '01712104456', '88', 'SD', 'just meet\r\n', 'shuvo sir', 'mutisha', '01-13-2018', '2018:01:13 12:42:35', '2018:01:13 14:21:52', '2018:01:13 12:44:17', '2018:01:13 14:21:54', '1', 2018, '    ', '1', '44'),
(14, 'mr. mijan', '', 'General Visitor', 'brothers', '01713067844', '88', 'Maintenance', 'just meet\r\n', 'mr. ronjit kumar', 'brothers', '01-13-2018', '2018:01:13 14:21:59', '2018:01:13 15:32:15', '2018:01:13 14:22:58', '2018:01:13 15:32:18', '1', 2018, '    ', '1', '44'),
(15, 'ABDUL ALI', '', 'General Visitor', 'ALPHA LIFE', '01716673426', '91', 'HR', 'just visite\r\n', 'isml', 'ALPHA LIFE', '01-13-2018', '2018:01:13 15:32:46', '2018:01:13 17:51:43', '2018:01:13 15:34:25', '2018:01:13 17:51:46', '1', 2018, '    ', '1', '44'),
(16, 'md.abduzzaher', '', 'General Visitor', 'af group', '01713047250', '93', 'Management', 'meeting\r\n', 'CGOO', 'naf group', '01-15-2018', '2018:01:15 11:01:19', '2018:01:15 11:32:39', '2018:01:15 11:28:44', '2018:01:15 11:32:43', '1', 2018, '    ', '1', '44'),
(17, 'Nur mohammod', '', 'General Visitor', 'mirpur 1', '01643905462', '87', 'Maintenance', 'electric work\r\n', 'kamrul ', 'bangla cat', '01-15-2018', '2018:01:15 11:29:18', '2018:01:15 11:32:01', '2018:01:15 11:31:53', '2018:01:15 11:32:32', '1', 2018, '    ', '1', '44'),
(18, 'tanvir', '', 'General Visitor', 'NS LEBEL', '01711991576', '93', 'MM', 'PERSAL SENDER\r\n', 'mr. mijan', 'NS lebel', '01-15-2018', '2018:01:15 18:15:06', '2018:01:15 18:17:38', '2018:01:15 18:17:09', '2018:01:15 18:17:44', '1', 2018, '    ', '1', '44'),
(19, 'SAMIM', '', 'General Visitor', 'OTHER', '01722600802', '40', 'Others', 'JUST MEET', 'SAMPLE MAN', 'OTHER', '01-15-2018', '2018:01:15 18:18:01', '2018:01:15 18:19:23', '2018:01:15 18:19:18', '2018:01:15 18:19:26', '1', 2018, '    ', '1', '44'),
(20, 'sazzed', '', 'General Visitor', 'afa team', '0171200559', '18', 'HR', 'just meet\r\n', 'aleya mam', 'afa team', '01-23-2018', '2018:01:23 18:14:16', '2018:01:23 18:24:45', '2018:01:23 18:17:29', '2018:01:23 18:24:49', '1', 2018, '    ', '1', '44'),
(21, 'moklesur', '', 'General Visitor', 'others', '01712859594', '2', 'Others', 'other', 'other', 'OTHER', '01-23-2018', '2018:01:23 18:17:36', '2018:01:23 18:50:16', '2018:01:23 18:20:16', '2018:01:23 18:50:25', '1', 2018, '        ', '1', '44'),
(22, 'mahabub', '', 'General Visitor', 'enargepack', '01713443279', '20', 'Maintenance', 'just visit\r\n', '', 'enargepack', '01-23-2018', '2018:01:23 18:20:30', '2018:01:23 18:25:02', '2018:01:23 18:22:07', '2018:01:23 18:25:04', '1', 2018, '    ', '1', '44'),
(23, 'saddam hossain', '', 'General Visitor', 'uni-asia', '01700970857', '21', 'Maintenance', 'just meet\r\n', 'mr. ronjit kumar', 'uni-asia', '01-23-2018', '2018:01:23 18:22:14', '2018:01:23 18:24:58', '2018:01:23 18:23:17', '2018:01:23 18:25:00', '1', 2018, '    ', '1', '44'),
(24, 'sohag+1', '', 'General Visitor', 'others', '01736298177', '22', 'Others', 'just visit', 'mr. ronjit kumar', 'OTHER', '01-23-2018', '2018:01:23 18:23:26', '2018:01:23 18:24:54', '2018:01:23 18:24:36', '2018:01:23 18:24:55', '1', 2018, '    ', '1', '44'),
(25, 'adbul lotif', '', 'General Visitor', 'others', '01721401935', '16', 'Others', 'just meet\r\n', 'atik pm', 'OTHER', '01-29-2018', '2018:01:29 14:16:46', '2018:01:29 14:18:20', '2018:01:29 14:18:11', '2018:01:29 14:18:22', '1', 2018, '    ', '1', '44'),
(26, 'md anamul huqe', '', 'General Visitor', 'others', '01614777911', '16', 'Management', 'just visit\r\n', 'mr. ronjit kumar', 'novelty eng; ', '01-29-2018', '2018:01:29 14:18:27', '2018:01:29 14:19:52', '2018:01:29 14:19:45', '2018:01:29 14:19:54', '1', 2018, '    ', '1', '44'),
(27, 'minhazz uddin', '', 'General Visitor', 'colage gate', '01737010135', '16', 'IE and Planning', 'inter view\r\n', 'safayet ', 'nai', '01-31-2018', '2018:01:31 17:10:58', '2018:02:01 09:38:09', '2018:01:31 17:13:16', '2018:02:01 09:38:11', '1', 2018, '    ', '1', '44'),
(28, 'A HOSSAIN', '', 'General Visitor', 'others', '01687392008', '17', 'Cutting', 'just meet\r\n', 'saleh ahmad', 'Priam asia', '01-31-2018', '2018:01:31 17:13:21', '2018:02:01 09:38:03', '2018:01:31 17:14:39', '2018:02:01 09:38:05', '1', 2018, '    ', '1', '44'),
(29, 'namuuz', '', 'General Visitor', 'mns', '01729464476', '18', 'Cutting', 'just meet\r\n', 'saleh ahmad', 'm&s ', '01-31-2018', '2018:01:31 17:14:43', '2018:02:01 09:38:00', '2018:01:31 17:17:43', '2018:02:01 09:38:01', '1', 2018, '    ', '1', '44'),
(30, 'basar', '', 'General Visitor', 'others', '01749373585', '1', 'Others', 'just meet\r\n', 'sahadat', 'OTHER', '01-31-2018', '2018:01:31 17:17:47', '2018:02:01 09:37:56', '2018:01:31 17:19:07', '2018:02:01 09:37:57', '1', 2018, '    ', '1', '44'),
(31, 'wasim sordar', '', 'General Visitor', 'samla unit .2', '01915524104', '2', 'HR', 'just meet\r\n', 'sopna', 'salna unit 2', '01-31-2018', '2018:01:31 17:19:12', '2018:02:01 09:37:51', '2018:01:31 17:26:29', '2018:02:01 09:37:53', '1', 2018, '    ', '1', '44'),
(32, 'salim', '', 'General Visitor', 'amra res;', '01713082774', '1', 'Maintenance', 'just visit', 'mr. ronjit kumar', 'amra res;', '02-03-2018', '2018:02:03 16:34:02', '2018:02:03 16:39:43', '2018:02:03 16:36:23', '2018:02:03 16:39:45', '2', 2018, '    ', '1', '44'),
(33, 'zakir', '', 'General Visitor', 'others', '01731670425', '2', 'Sample', 'just meet\r\n', 'siddik', 'OTHER', '02-03-2018', '2018:02:03 16:36:27', '2018:02:03 16:39:38', '2018:02:03 16:37:14', '2018:02:03 16:39:39', '2', 2018, '    ', '1', '44'),
(34, 'rana', '', 'General Visitor', 'maxim lebel', '01757039511', '3', 'MM', 'just meet\r\n', '', 'maxim lebel', '02-03-2018', '2018:02:03 16:37:21', '2018:02:03 16:39:33', '2018:02:03 16:39:28', '2018:02:03 16:39:36', '2', 2018, '    ', '1', '44'),
(35, 'A HOSSAIN', '', 'General Visitor', 'others', '01687392008', '35', 'Cutting', 'just meet', 'saleh ahmad', 'Priam asia', '02-04-2018', '2018:02:04 10:58:30', '2018:02:04 15:19:57', '2018:02:04 11:04:32', '2018:02:04 15:19:59', '2', 2018, '    ', '1', '44'),
(36, 'nitay roy', '', 'General Visitor', 'etacol', '01713210600', '23', 'SD', 'just visit\r\n', 'mr. foysal', 'etacol', '02-04-2018', '2018:02:04 11:04:44', '2018:02:04 15:19:52', '2018:02:04 11:06:20', '2018:02:04 15:19:55', '2', 2018, '    ', '1', '44'),
(37, 'K.M SHAHRIAR RUBAL', '', 'General Visitor', 'VTL', '01716541313', '1', 'HR', 'JUSTMEET\r\n', 'aleya mam', 'VTL', '02-04-2018', '2018:02:04 17:31:05', '2018:02:04 18:17:17', '2018:02:04 17:37:22', '2018:02:04 18:17:19', '2', 2018, '    ', '1', '44'),
(38, 'abdul mannan', '', 'General Visitor', 'south easth banka', '01723626327', '1', 'ISS', 'just meet\r\n', 'opu', 'south easth bank', '02-05-2018', '2018:02:05 18:10:13', '2018:02:05 18:13:24', '2018:02:05 18:12:01', '2018:02:05 18:13:26', '2', 2018, '    ', '1', '44'),
(39, 'md.sohidul amin', '', 'General Visitor', 'others', '01818573538', '2', 'HR', 'just meet\r\n', 'HR MASUD SIR', 'OTHER', '02-05-2018', '2018:02:05 18:12:05', '2018:02:05 18:13:19', '2018:02:05 18:13:14', '2018:02:05 18:13:22', '2', 2018, '    ', '1', '44'),
(40, 'roshid ', '', 'General Visitor', 'save the children', '01715908700', '1', 'HR', 'just visit\r\n', 'mst pushi', 'save the children', '02-06-2018', '2018:02:06 09:53:38', '2018:02:06 17:51:14', '2018:02:06 10:57:50', '2018:02:06 17:51:16', '2', 2018, '    ', '1', ''),
(41, 'mr.kamal', '', 'General Visitor', 'beta packger', '01713244067', '2', 'SD', 'just meet', 'mr. mijan', 'beta packger', '02-06-2018', '2018:02:06 17:46:38', '2018:02:06 17:51:04', '2018:02:06 17:49:13', '2018:02:06 17:51:07', '2', 2018, '    ', '1', '44'),
(42, 'm&s beyer', '', 'General Visitor', 'veyer', '01787684488', '1', 'HR', 'odit\r\n', 'isml', 'm&s office', '02-13-2018', '2018:02:13 09:57:16', '2018:02:13 10:00:32', '2018:02:13 10:00:20', '2018:02:13 10:00:33', '2', 2018, '    ', '1', '44'),
(43, 'md nasir uddin', '', 'General Visitor', 'coats bangladesh', '01720474614', '41', 'Warehouse', 'just bill submit store ', 'sojib', 'coats bangladesh', '02-18-2018', '2018:02:18 10:09:08', '2018:02:20 10:24:30', '2018:02:18 10:21:12', '2018:02:20 10:24:31', '2', 2018, '    ', '1', '44'),
(44, 'zahidun nobi+TABRA BANU+AMATULLA MIRZA', '', 'General Visitor', 'UL-BANGLA', '--------------------', '12', 'HR', 'JUST VISIT ', 'MST.SOPNA', 'UL-BANGLA', '02-18-2018', '2018:02:18 10:21:21', '2018:02:20 10:24:23', '2018:02:18 10:26:30', '2018:02:20 10:24:27', '2', 2018, '    ', '1', '44'),
(45, 'samim', '', 'General Visitor', 'pcc', '01715910057', '1', 'SD', 'just visit', 'MR.Doha', 'pcc', '02-20-2018', '2018:02:20 09:44:53', '2018:02:20 10:24:15', '2018:02:20 09:46:31', '2018:02:20 10:24:17', '2', 2018, '    ', '1', '44'),
(46, 'GLORIA+1', '', 'General Visitor', 'CARE bangladesh', '01960216906', '1', 'HR', 'just visit\r\n', 'aleya akter', 'CARE bangladesh', '03-03-2018', '2018:03:03 17:24:28', '2018:03:03 17:31:19', '2018:03:03 17:26:01', '2018:03:03 17:31:21', '3', 2018, '    ', '1', '44'),
(47, 'shahen mahamud', '', 'General Visitor', 'brobari', '01882523140', '2', 'IE and Planning', 'opening job\r\n', 'nur', 'nai', '03-03-2018', '2018:03:03 17:26:09', '2018:03:03 17:31:16', '2018:03:03 17:27:41', '2018:03:03 17:31:17', '3', 2018, '    ', '1', '44'),
(48, 'asad', '', 'General Visitor', 'brobari', '01670931854', '3', 'HR', 'waking\r\n', 'rahib', 'nai', '03-03-2018', '2018:03:03 17:27:45', '2018:03:03 17:31:11', '2018:03:03 17:30:16', '2018:03:03 17:31:13', '3', 2018, '    ', '1', '44'),
(49, 'azad+1', '', 'General Visitor', 'itacol', '01713037327', '4', 'SD', 'just visit', 'mizan', 'itacol ', '03-03-2018', '2018:03:03 17:30:20', '2018:03:03 17:31:07', '2018:03:03 17:31:00', '2018:03:03 17:31:09', '3', 2018, '    ', '1', '44'),
(50, 'KAZOL+2', '', 'General Visitor', 'CARE bangladesh', '01718758869', '1', 'HR', 'JUST VISIT\r\n', 'PUSHI', 'CARE bangladesh', '03-04-2018', '2018:03:04 18:05:09', '2018:03:07 10:25:40', '2018:03:04 18:07:50', '2018:03:07 10:25:42', '3', 2018, '    ', '1', '44'),
(51, 'SIDDIKUR ROHOMAN', '', 'General Visitor', 'brobari', '01739796409', '2', 'HR', 'OTHER\r\n', 'aleya akter', 'nai', '03-04-2018', '2018:03:04 18:07:58', '2018:03:07 10:25:35', '2018:03:04 18:09:05', '2018:03:07 10:25:38', '3', 2018, '    ', '1', '44'),
(52, 'razu ahmed', '', 'General Visitor', 'uttara dhaka', '01616204080', '1', 'Sample', 'just join \r\n', 'siddik', 'nai', '03-10-2018', '2018:03:10 17:08:44', '2018:03:10 17:17:51', '2018:03:10 17:10:21', '2018:03:10 17:17:53', '3', 2018, '    ', '1', '44'),
(53, 'Eng; rajiv', '', 'General Visitor', 'mirpur', '01975505063', '2', 'Management', 'meeting cgoo\r\n', 'ronjit sir', 'nai', '03-10-2018', '2018:03:10 17:10:26', '2018:03:10 17:17:40', '2018:03:10 17:12:58', '2018:03:10 17:17:42', '3', 2018, '    ', '1', '44'),
(54, 'mohishin', '', 'General Visitor', 'collage gate', '01629128464', '56', 'Sample', 'join\r\n', 'siddik', 'nai', '03-27-2018', '2018:03:27 09:37:35', '2018:03:27 18:07:12', '2018:03:27 09:39:08', '2018:03:27 18:07:14', '3', 2018, '    ', '1', '44'),
(55, 'eng;johir', '', 'General Visitor', 'others', '01711064122', '1', 'Maintenance', 'just meet', 'ronjit sir', 'nai', '03-27-2018', '2018:03:27 17:59:57', '2018:03:27 18:07:09', '2018:03:27 18:01:36', '2018:03:27 18:07:10', '3', 2018, '    ', '1', '44'),
(56, 'mr.tutul', '', 'General Visitor', 'spares sourcing', '01728169217', '10', 'Maintenance', 'just meet\r\n', 'ronjit sir', 'nai', '03-27-2018', '2018:03:27 18:01:39', '2018:03:27 18:07:04', '2018:03:27 18:03:11', '2018:03:27 18:07:06', '3', 2018, '    ', '1', '44'),
(57, 'ABDUL ALI', '', 'General Visitor', 'ALPHA LIFE ', '01716673406', '2', 'HR', 'just visit\r\n', 'other', 'ALPHA LIFE ', '03-27-2018', '2018:03:27 18:03:14', '2018:03:27 18:07:00', '2018:03:27 18:04:09', '2018:03:27 18:07:02', '3', 2018, '    ', '1', '44'),
(58, 'namuuz', '', 'General Visitor', 'mns', '01729464476', '3', 'Others', 'just meet\r\n', 'other', 'm&s ', '03-27-2018', '2018:03:27 18:04:49', '2018:03:27 18:06:56', '2018:03:27 18:06:51', '2018:03:27 18:06:58', '3', 2018, '    ', '1', '44'),
(59, 'mishu', '', 'General Visitor', 'BUFT', '01730886688', '41', 'DPD', 'INTER VIEW', 'SHOHAN', 'nai', '03-28-2018', '2018:03:28 09:34:11', '2018:03:28 14:16:15', '2018:03:28 09:37:07', '2018:03:28 14:17:30', '3', 2018, '    ', '1', '44'),
(60, 'TAHAMINA', '', 'General Visitor', 'BUFT', '01743494921', '56', 'DPD', 'INTER VIUE', 'SHOHAN', 'NAI', '03-28-2018', '2018:03:28 09:37:14', '2018:03:28 14:13:02', '2018:03:28 11:07:23', '2018:03:28 14:13:53', '3', 2018, '    ', '1', ''),
(61, 'SHITY', '', 'General Visitor', 'BUFT', '01794342190', '1', 'DPD', 'INTER VIEW', 'SHOHAN', 'NAI', '03-28-2018', '2018:03:28 11:07:34', '2018:03:28 14:17:52', '2018:03:28 11:08:33', '2018:03:28 14:19:46', '3', 2018, '    ', '1', '44'),
(62, 'israt jahan', '', 'General Visitor', 'uttara dhaka', '01775480474', '1', 'DPD', 'inter vi', 'SHOHAN', 'nai', '04-02-2018', '2018:04:03 08:32:57', '2018:04:03 08:50:49', '2018:04:03 08:39:57', '2018:04:03 08:50:51', '4', 2018, '    ', '1', '44'),
(63, 'ratul ahmed', '', 'General Visitor', 'uniteeh', '01712373777', '2', 'Maintenance', 'visit\r\n', 'ronjit sir', 'uniteeh', '04-02-2018', '2018:04:03 08:40:02', '2018:04:03 08:50:40', '2018:04:03 08:44:11', '2018:04:03 08:50:42', '4', 2018, '    ', '1', '44'),
(64, 'SORAB', '', 'General Visitor', 'uttara dhaka', '01815586412', '1', 'Cutting', 'G', '', 'NAI', '04-03-2018', '2018:04:04 09:43:34', '2018:04:04 09:44:55', '2018:04:04 09:44:51', '2018:04:04 09:44:58', '4', 2018, '    ', '1', '44'),
(65, 'shorif', '', 'General Visitor', 'prime asia', '01721128582', '1', 'Maintenance', 'just visit\r\n', 'ronjit sir', 'prime asia', '04-04-2018', '2018:04:04 14:34:38', '2018:04:05 08:16:16', '2018:04:04 14:37:56', '2018:04:05 08:16:17', '4', 2018, '    ', '1', '44'),
(66, 'sajal', '', 'General Visitor', 'olymp', '01675543618', '2', 'Others', 'meet\r\n', 'hassain', 'olymp', '04-04-2018', '2018:04:04 14:38:00', '2018:04:05 08:16:11', '2018:04:04 14:40:06', '2018:04:05 08:16:13', '4', 2018, '    ', '1', '44'),
(67, 'md nasir uddin', '', 'General Visitor', 'coats bangladesh', '01720424614', '3', 'Warehouse', 'meet\r\n', 'moinul', 'coats bangladesh', '04-04-2018', '2018:04:04 14:40:11', '2018:04:05 08:16:00', '2018:04:04 14:42:38', '2018:04:05 08:16:02', '4', 2018, '    ', '1', '44'),
(68, 'SANJIDA]', '', 'General Visitor', 'UTTARA', '01621188537', '1', 'DPD', 'INTERVIEW\r\n', 'SHOHAN', 'NAI]', '04-05-2018', '2018:04:05 16:24:38', '2018:04:05 18:18:24', '2018:04:05 16:56:42', '2018:04:05 18:18:26', '4', 2018, '        ', '1', '44'),
(69, 'A.SALAM', '', 'General Visitor', 'VEIT', '0194821299', '2', 'Maintenance', 'VISIT\r\n', 'ronjit sir', 'VEIT', '04-05-2018', '2018:04:05 16:57:01', '2018:04:05 18:18:08', '2018:04:05 16:58:13', '2018:04:05 18:18:09', '4', 2018, '    ', '1', '44'),
(70, 'HASSAN', '', 'General Visitor', 'DHAKA', '01914725012', '3', 'Others', 'VISIT\r\n', 'other', 'NAI', '04-05-2018', '2018:04:05 16:58:17', '2018:04:05 18:18:04', '2018:04:05 16:59:12', '2018:04:05 18:18:06', '4', 2018, '    ', '1', '44'),
(71, 'fatema akter', '', 'General Visitor', 'CARE bangladesh', '01783499923', '1', 'HR', 'visit ', 'PUSHI', 'CARE bangladesh', '04-10-2018', '2018:04:11 09:29:23', '2018:04:15 14:21:29', '2018:04:11 09:31:29', '2018:04:15 14:21:31', '4', 2018, '    ', '1', '44'),
(72, 'azad+1', '', 'General Visitor', 'itacol', '01713037327', '1', 'MM', 'just meet\r\n', 'mijan', 'itacol ', '04-15-2018', '2018:04:15 14:21:35', '2018:04:15 14:24:05', '2018:04:15 14:22:37', '2018:04:15 14:24:08', '4', 2018, '    ', '1', '44'),
(73, 'anisur rohaman', '', 'General Visitor', 'bypass', '01717671015', '2', 'Maintenance', 'just visit\r\n', 'ronjit sir', 'nai', '04-15-2018', '2018:04:15 14:23:03', '2018:04:16 18:12:04', '2018:04:15 14:23:58', '2018:04:16 18:12:07', '4', 2018, '    ', '1', '44'),
(74, 'korshed alom', '', 'General Visitor', 'abir dish', '01830540778', '1', 'Cutting', 'visit\r\n', 'alomgir', 'abir dish', '04-16-2018', '2018:04:16 18:08:02', '2018:04:16 18:12:16', '2018:04:16 18:09:32', '2018:04:16 18:12:18', '4', 2018, '    ', '1', '44'),
(75, 'tanvir', '', 'General Visitor', 'tns eng..', '01613215063', '3', 'Maintenance', 'others\r\n', 'shadon', 'tns eng..', '04-16-2018', '2018:04:16 18:09:37', '2018:04:16 18:12:13', '2018:04:16 18:10:47', '2018:04:16 18:12:14', '4', 2018, '    ', '1', '44'),
(76, 'ABDUL ALI', '', 'General Visitor', 'ALPHA LIFE ', '01716673406', '4', 'Others', 'just visit\r\n', 'other', 'ALPHA LIFE ', '04-16-2018', '2018:04:16 18:10:50', '2018:04:16 18:12:09', '2018:04:16 18:11:53', '2018:04:16 18:12:11', '4', 2018, '    ', '1', '44'),
(77, 'JAMAL ', '', 'General Visitor', 'nayem eng', '01818250194', '1', 'Maintenance', 'just visit\r\n', 'ronjit', 'NAYEM ENG.', '04-18-2018', '2018:04:18 11:00:25', '2018:04:18 11:02:58', '2018:04:18 11:01:52', '2018:04:18 11:03:04', '4', 2018, '    ', '1', '44'),
(78, 'samim', '', 'General Visitor', 'pcc', '01715910057', '2', 'MM', 'sample delivery\r\n', 'doha ', 'pcc', '04-18-2018', '2018:04:18 11:02:01', '2018:04:24 08:22:38', '2018:04:18 11:02:53', '2018:04:24 08:22:40', '4', 2018, '    ', '1', '44'),
(79, 'bankim', '', 'General Visitor', 'adex', '01777790235', '1', 'Maintenance', 'visit\r\n\r\n', 'mr.sadon dash', 'adex', '04-23-2018', '2018:04:24 08:22:45', '2018:04:24 08:31:37', '2018:04:24 08:25:58', '2018:04:24 08:31:38', '4', 2018, '    ', '1', '44'),
(80, 'rakib', '', 'General Visitor', 'prime asia', '01730334408', '2', 'Maintenance', 'working purpas\r\n', 'ronjit sir', 'priam asiya', '04-23-2018', '2018:04:24 08:26:02', '2018:04:24 08:31:33', '2018:04:24 08:27:09', '2018:04:24 08:31:34', '4', 2018, '    ', '1', '44'),
(81, 'hasan', '', 'General Visitor', 'co-lebel', '01976006061', '3', 'ISS', 'visit purpes\r\n', 'MR.Doha', 'co-lebel', '04-23-2018', '2018:04:24 08:27:19', '2018:04:24 08:31:27', '2018:04:24 08:29:22', '2018:04:24 08:31:30', '4', 2018, '    ', '1', '44'),
(82, 'jowel', '', 'General Visitor', 'thermex', '01944351058', '4', 'SD', 'visit purpes', 'wahid', 'thermex', '04-24-2018', '2018:04:24 08:29:27', '2018:04:24 08:31:22', '2018:04:24 08:31:11', '2018:04:24 08:31:25', '4', 2018, '    ', '1', '44'),
(83, 'monisha', '', 'General Visitor', 'care bangladesh', '01777239593', '1', 'HR', 'just visit\r\n', 'aleya akter', 'care bangladesh', '04-24-2018', '2018:04:24 17:42:34', '2018:04:24 17:51:04', '2018:04:24 17:43:50', '2018:04:24 17:51:06', '4', 2018, '    ', '1', '44'),
(84, 'Nkibul', '', 'General Visitor', 'kpmg', '01558958708', '2', 'HR', 'internal odit\r\n', 'aleya akter', 'kpmg', '04-24-2018', '2018:04:24 17:43:54', '2018:04:24 17:51:00', '2018:04:24 17:45:48', '2018:04:24 17:51:01', '4', 2018, '    ', '1', '44'),
(85, 'rased', '', 'General Visitor', 'priam bank', '01713000060', '3', 'HR', 'just visit\r\n', 'aleya akter', 'priam bank', '04-24-2018', '2018:04:24 17:45:52', '2018:04:24 17:50:55', '2018:04:24 17:47:47', '2018:04:24 17:50:57', '4', 2018, '    ', '1', '44'),
(86, 'namuuz', '', 'General Visitor', 'mns', '01729464476', '57', 'Cutting', 'JUST MEET\r\n', 'saleh sir', 'm&s ', '05-14-2018', '2018:05:14 10:53:51', '2018:05:14 18:16:32', '2018:05:14 10:54:43', '2018:05:14 18:16:34', '5', 2018, '    ', '1', '44'),
(87, 'sohid khan', '', 'General Visitor', 'others', '01919824212', '1', 'Others', 'just visut\r\n', 'others', 'others', '05-19-2018', '2018:05:29 07:42:33', '2018:05:29 08:19:45', '2018:05:29 07:44:01', '2018:05:29 08:19:47', '5', 2018, '    ', '1', '44'),
(88, 'mr.kamal', '', 'General Visitor', 'beta packger', '01713244067', '2', 'SD', 'just visit\r\n', 'miraz', 'beta packger', '05-21-2018', '2018:05:29 07:44:06', '2018:05:29 08:19:33', '2018:05:29 07:44:59', '2018:05:29 08:19:37', '5', 2018, '    ', '1', '44'),
(89, 'ibrahim miye', '', 'General Visitor', 'veait bd', '01722935040', '3', 'Maintenance', 'sarvice\r\n', 'others', 'veait bd', '05-22-2018', '2018:05:29 07:45:15', '2018:05:29 08:19:20', '2018:05:29 07:47:21', '2018:05:29 08:19:25', '5', 2018, '    ', '1', '44'),
(90, 'ripon', '', 'General Visitor', 'paramount', '01733718762', '1', 'Warehouse', 'just visit\r\n', 'store team', 'paramount', '06-24-2018', '2018:06:24 14:33:57', '2018:06:24 16:05:39', '2018:06:24 14:35:17', '2018:06:24 16:05:40', '6', 2018, '    ', '1', '44'),
(91, 'afzal hossain', '', 'General Visitor', 'others', '01687592008', '2', 'Others', 'just visit\r\n', 'others', 'others', '06-24-2018', '2018:06:24 14:35:21', '2018:06:24 16:05:35', '2018:06:24 14:36:49', '2018:06:24 16:05:36', '6', 2018, '    ', '1', '44'),
(92, 'shohag', '', 'General Visitor', 'brodbazar', '01940360734', '3', 'Management', 'just meet\r\n', 'atiq', 'nai', '06-24-2018', '2018:06:24 14:36:55', '2018:06:24 16:05:30', '2018:06:24 14:38:13', '2018:06:24 16:05:32', '6', 2018, '    ', '1', '44'),
(93, 'tonmoy', '', 'General Visitor', 'amrarisos', '01713090085', '1', 'Maintenance', 'just meet\r\n', 'ronjit', 'amrarisos ', '07-07-2018', '2018:07:07 09:33:17', '2018:07:07 09:35:32', '2018:07:07 09:35:23', '2018:07:07 09:35:34', '7', 2018, '    ', '1', '44'),
(94, 'susjhsh', '', 'General Visitor', 'index', '01730781960', '2', 'SD', 'just meet ', 'munadil', 'index', '07-02-2018', '2018:07:07 09:35:46', '2018:07:07 09:41:58', '2018:07:07 09:37:14', '2018:07:07 09:41:59', '7', 2018, '    ', '1', '44'),
(95, 'mamun+shuvo +roksana', '', 'General Visitor', 'BWB/ILO', '**********', '3', 'HR', 'ODITE', 'SOPNA /ISML', 'BWB/ILO', '07-02-2018', '2018:07:07 09:37:18', '2018:07:07 09:41:52', '2018:07:07 09:39:00', '2018:07:07 09:41:53', '7', 2018, '    ', '1', '44'),
(96, 'RAKIB', '', 'General Visitor', 'SMART', '01722630728', '4', 'HR', 'service ', 'it', 'SMART', '07-07-2018', '2018:07:07 09:39:05', '2018:07:07 09:41:48', '2018:07:07 09:41:39', '2018:07:07 09:41:49', '7', 2018, '    ', '1', '44'),
(97, 'azad+1', '', 'General Visitor', 'itacol', '01713037327', '1', 'MM', 'just meet', 'mijan/monowar', 'itacol ', '07-07-2018', '2018:07:07 09:56:01', '2018:07:08 08:15:33', '2018:07:07 09:56:48', '2018:07:08 08:15:35', '7', 2018, '        ', '1', '44'),
(98, 'RAKIB', '', 'General Visitor', 'accord', '..........', '1', 'HR', 'visit', 'isml', 'accord', '07-08-2018', '2018:07:08 15:00:58', '2018:07:08 15:04:45', '2018:07:08 15:02:15', '2018:07:08 15:05:40', '7', 2018, '    ', '1', '44'),
(99, 'yeasin ahmad', '', 'General Visitor', 'aldi\\', '*********', '2', 'HR', 'visit', 'isml', 'aldi', '07-08-2018', '2018:07:08 15:02:19', '2018:07:08 15:05:48', '2018:07:08 15:04:11', '2018:07:08 15:05:49', '7', 2018, '    ', '1', '44'),
(100, 'yeasin ahmad', '', 'General Visitor', 'aldi\\', '*********', '2', 'HR', 'visit', 'isml', 'aldi', '07-08-2018', '2018:07:08 15:02:19', '2018:07:08 15:05:44', '2018:07:08 15:04:12', '2018:07:08 15:05:46', '7', 2018, '    ', '1', '44'),
(101, 'RAKIB', '', 'General Visitor', 'gazi enterprige', '01762622133', '1', 'HR', 'meet\r\n', 'hr', 'gazi enterprige', '07-08-2018', '2018:07:08 15:05:53', '2018:07:08 15:10:24', '2018:07:08 15:08:45', '2018:07:08 15:10:26', '7', 2018, '    ', '1', '44'),
(102, 'adib', '', 'General Visitor', 'vtl', '01674252525', '2', 'Accounts And Finance', 'just meet\r\n', 'akram', 'vtl', '07-08-2018', '2018:07:08 15:08:49', '2018:07:08 15:10:20', '2018:07:08 15:10:15', '2018:07:08 15:10:21', '7', 2018, '    ', '1', '44'),
(103, 'tamanna', '', 'General Visitor', 'sudokhho', '01672695703', '1', 'HR', 'just meet\r\n', 'swopna mam', 'sudokhho', '07-16-2018', '2018:07:16 18:15:32', '2018:07:16 18:21:51', '2018:07:16 18:16:35', '2018:07:16 18:21:53', '7', 2018, '    ', '1', '44'),
(104, 'habib+1', '', 'General Visitor', 'sudokhho', '01788818941', '2', 'HR', 'just meet', 'swopna mam', 'sudokhho', '07-16-2018', '2018:07:16 18:16:39', '2018:07:16 18:21:48', '2018:07:16 18:17:34', '2018:07:16 18:21:49', '7', 2018, '    ', '1', '44'),
(105, 'saleh ahmed', '', 'General Visitor', 'dhaka', '01711380426', '3', 'HR', 'inter veiw', 'ALEYA MAM', 'dhaka', '07-16-2018', '2018:07:16 18:17:37', '2018:07:16 18:21:42', '2018:07:16 18:20:07', '2018:07:16 18:21:44', '7', 2018, '    ', '1', '44'),
(106, 'ABDUL ALI', '', 'General Visitor', 'ALPHA LIFE ', '01716673406', '4', 'HR', 'VISITE\r\n', 'isml', 'ALPHA LIFE ', '07-16-2018', '2018:07:16 18:20:28', '2018:07:16 18:21:37', '2018:07:16 18:21:34', '2018:07:16 18:21:39', '7', 2018, '    ', '1', '44'),
(107, 'shehid', '', 'General Visitor', 'mutisa', '01758896731', '1', 'MM', 'just meet\r\n', 'murad', 'mutisa', '07-18-2018', '2018:07:18 18:13:58', '2018:07:22 09:51:49', '2018:07:18 18:15:52', '2018:07:22 09:51:51', '7', 2018, '    ', '1', '44'),
(108, 'abubokkor', '', 'General Visitor', 'fabric care', '01921767322', '1', 'SD', 'fabric cheak', 'foysal', 'fabric care', '07-21-2018', '2018:07:22 09:51:57', '2018:07:23 10:27:12', '2018:07:22 09:54:15', '2018:07:23 10:27:14', '7', 2018, '    ', '1', '44'),
(109, 'kamrul hassain', '', 'General Visitor', 'abdullapur .dhaka', '01760029678', '2', 'Sample', 'interview', 'siddik ', 'nai', '07-21-2018', '2018:07:22 09:54:18', '2018:07:23 10:27:08', '2018:07:22 09:57:43', '2018:07:23 10:27:10', '7', 2018, '    ', '1', '44'),
(110, 'Morshed', '', 'General Visitor', 'mutisa', '01731253298', '3', 'MM', 'just meet', 'monowar', 'mutisa', '07-22-2018', '2018:07:22 09:57:47', '2018:07:22 10:05:32', '2018:07:22 10:05:22', '2018:07:22 10:05:33', '7', 2018, '    ', '1', '44'),
(111, 'helal', '', 'General Visitor', 'prime asia', '01730334404', '3', 'Maintenance', 'sarvice\r\n', 'ronjit', 'prime asia', '07-21-2018', '2018:07:22 10:05:39', '2018:07:23 10:27:04', '2018:07:22 10:07:15', '2018:07:23 10:27:06', '7', 2018, '    ', '1', '44'),
(112, 'helal', '', 'General Visitor', 'prime asia', '01730334404', '3', 'Maintenance', 'sarvice\r\n', 'ronjit', 'prime asia', '07-21-2018', '2018:07:22 10:05:39', '2018:07:23 10:27:01', '2018:07:22 10:07:15', '2018:07:23 10:27:02', '7', 2018, '    ', '1', '44'),
(113, 'romez', '', 'General Visitor', 'dhaka', '01701986699', '4', 'QA', 'just meet\r\n', 'alomgir', 'nai', '07-21-2018', '2018:07:22 10:07:20', '2018:07:23 10:22:55', '2018:07:22 10:09:12', '2018:07:23 10:23:07', '7', 2018, '    ', '1', '44'),
(114, 'shohel', '', 'General Visitor', 'uttara', '01728375555', '5', 'MM', 'just meet\r\n\r\n', 'jahangir', 'nai', '07-21-2018', '2018:07:22 10:09:16', '2018:07:23 10:22:18', '2018:07:22 10:10:55', '2018:07:23 10:22:23', '7', 2018, '    ', '1', '44'),
(115, 's,m faruq', '', 'General Visitor', 'montrim', '01938887163', '1', 'MM', 'just meet\r\n', 'foysak', 'montrim', '07-23-2018', '2018:07:23 17:11:52', '2018:07:23 17:20:54', '2018:07:23 17:13:30', '2018:07:23 17:20:56', '7', 2018, '    ', '1', '44'),
(116, 'abdul ali', '', 'General Visitor', 'alfha', '01936088749', '2', 'Others', 'visit\r\n', 'isml', 'alfha', '07-23-2018', '2018:07:23 17:13:35', '2018:07:23 17:20:50', '2018:07:23 17:14:33', '2018:07:23 17:20:51', '7', 2018, '    ', '1', '44'),
(117, 'rifat tanjil+5', '', 'General Visitor', 'oxfom', '01730022320', '3', 'HR', 'meting/traning', 'ALEYA MAM', 'oxfom', '07-23-2018', '2018:07:23 17:14:37', '2018:07:23 17:20:46', '2018:07:23 17:20:40', '2018:07:23 17:20:47', '7', 2018, '    ', '1', '44'),
(118, 'rohmana ', '', 'General Visitor', 'basura .dhaka', '01742924119', '1', '', 'inter view', 'nozrul', 'nai', '07-24-2018', '2018:07:24 17:47:19', '2018:07:24 17:57:53', '2018:07:24 17:48:50', '2018:07:24 17:57:55', '7', 2018, '    ', '1', '44'),
(119, 'arfath kanom', '', 'General Visitor', 'srepur .saver', '01686914780', '2', 'Others', 'inter view\r\n', 'nozrul', 'nai', '07-24-2018', '2018:07:24 17:48:54', '2018:07:24 17:57:49', '2018:07:24 17:50:12', '2018:07:24 17:57:51', '7', 2018, '    ', '1', '44'),
(120, 'romana masud', '', 'General Visitor', 'mahamudpur.dhaka', '01946341097', '3', 'Others', 'inter view', 'nozrul', 'nai', '07-24-2018', '2018:07:24 17:50:16', '2018:07:24 17:57:46', '2018:07:24 17:52:52', '2018:07:24 17:57:47', '7', 2018, '    ', '1', '44'),
(121, 'tamanna islam', '', 'General Visitor', 'tezgon.dhaka', '01676699940', '4', '', 'inter view\r\n', 'nozrul', 'nai', '07-24-2018', '2018:07:24 17:52:56', '2018:07:24 17:57:41', '2018:07:24 17:55:25', '2018:07:24 17:57:43', '7', 2018, '    ', '1', '44'),
(122, 'asad nobi', '', 'General Visitor', 'bikash', '01717877961', '5', 'Others', 'meeting\r\n', 'masud', 'bikash', '07-24-2018', '2018:07:24 17:55:31', '2018:07:24 17:57:35', '2018:07:24 17:57:31', '2018:07:24 17:57:36', '7', 2018, '    ', '1', '44'),
(123, 'yeasin', '', 'General Visitor', 'bikash', '01770496468', '2', 'HR', 'sarvice\r\n', 'masud', 'bikash', '08-09-2018', '2018:08:09 09:13:55', '2018:08:12 15:01:59', '2018:08:09 09:15:12', '2018:08:12 15:02:00', '8', 2018, '    ', '1', '44'),
(124, 'islam', '', 'General Visitor', 'nikunzo-2', '01740222448', '1', 'HR', 'joine\r\n', 'ALEYA MAM', 'nai', '08-12-2018', '2018:08:12 14:57:07', '2018:08:12 15:02:10', '2018:08:12 14:58:14', '2018:08:12 15:02:11', '8', 2018, '    ', '1', '44'),
(125, 'ekramul kobir', '', 'General Visitor', 'nai', '01678433008', '3', 'HR', 'other\r\n', 'isml', 'otobi', '08-12-2018', '2018:08:12 14:58:18', '2018:08:12 15:02:06', '2018:08:12 14:59:53', '2018:08:12 15:02:08', '8', 2018, '    ', '1', '44'),
(126, 'rofiqul islam', '', 'General Visitor', 'ali garments', '01725805603', '4', 'IE and Planning', 'bill submit', 'IE ( shimul )', 'ali garments', '08-12-2018', '2018:08:12 14:59:57', '2018:08:12 15:02:03', '2018:08:12 15:01:54', '2018:08:12 15:02:04', '8', 2018, '    ', '1', '44'),
(127, 'zaman', '', 'General Visitor', 'tuv', '01723479703', '2', 'QA', 'insp\r\n', 'raja ', 'tuv ', '08-16-2018', '2018:08:16 16:44:00', '2018:08:16 16:49:26', '2018:08:16 16:45:33', '2018:08:16 16:49:28', '8', 2018, '    ', '1', '44'),
(128, 'ekramul kobir', '', 'General Visitor', 'nai', '01678433008', '1', 'Warehouse', 'visit\r\n', 'store', 'otobi', '08-16-2018', '2018:08:16 16:45:38', '2018:08:16 16:49:31', '2018:08:16 16:46:15', '2018:08:16 16:49:33', '8', 2018, '    ', '1', '44'),
(129, 'edul', '', 'General Visitor', 'enargipack', '01940040305', '4', 'Maintenance', 'meet \r\n', 'shadon dash', 'enargipack', '08-16-2018', '2018:08:16 16:46:24', '2018:08:16 16:49:20', '2018:08:16 16:47:23', '2018:08:16 16:49:22', '8', 2018, '    ', '1', '44'),
(130, 'mamun', '', 'General Visitor', 'pal', '01755521394', '3', 'Management', 'just meeting\r\n', 'cgoo sir', 'pal', '08-16-2018', '2018:08:16 16:47:27', '2018:09:05 16:38:45', '2018:08:16 16:48:59', '2018:09:05 16:38:46', '8', 2018, '    ', '1', '44'),
(131, 'kpmg', '', 'General Visitor', 'internal adit', '0167368467', '1', 'Warehouse', 'just viSIT', 'others', 'kpmg', '09-11-2018', '2018:09:12 17:50:04', '2018:09:12 18:08:18', '2018:09:12 17:53:41', '2018:09:12 18:08:19', '9', 2018, '    ', '1', '44'),
(132, 'AKBOR', '', 'General Visitor', 'REAZ EXPORT', '01834839668', '2', 'Management', 'MEET', 'isml', 'REAZ EXPORT', '09-12-2018', '2018:09:12 17:53:46', '2018:09:12 18:08:14', '2018:09:12 17:54:56', '2018:09:12 18:08:15', '9', 2018, '    ', '1', '44'),
(133, 'JANNATUL FERDOS SARABONY', '', 'General Visitor', 'DAFFADIL INTERNATIONAL UNIVERCITY', '01836578965', '3', 'HR', 'JUST MEET', 'ALEYA MAM', 'DAFFADIL INTERNATIONAL UNIVERCITY', '09-12-2018', '2018:09:12 17:55:01', '2018:09:12 18:08:10', '2018:09:12 17:57:11', '2018:09:12 18:08:12', '9', 2018, '    ', '1', '44'),
(134, 'MD ABDUL ZAFOR', '', 'General Visitor', 'MOTIZEL', '01842952120', '4', 'Others', 'MEET JUST', 'BUYER *EKBAL SIR', 'MOTIZEL', '09-12-2018', '2018:09:12 17:57:15', '2018:09:12 18:07:25', '2018:09:12 17:58:57', '2018:09:12 18:08:08', '9', 2018, '    ', '1', '44'),
(135, 'JALAL UDDIN', '', 'General Visitor', 'GOLDEN LINE', '01711442941', '5', 'Others', 'JUST MEET', 'others', 'GOLDEN LINE', '09-12-2018', '2018:09:12 17:59:02', '2018:09:12 18:07:22', '2018:09:12 18:01:43', '2018:09:12 18:07:23', '9', 2018, '    ', '1', '44'),
(136, 'MD ABDUL ALL MAMUN', '', 'General Visitor', 'MOSTTECH INTERNATINAL', '01996804940', '6', 'Sample', 'JUST MEET', 'siddik ', 'MOSTTECH INTERNATINAL', '09-12-2018', '2018:09:12 18:01:48', '2018:09:12 18:07:19', '2018:09:12 18:06:04', '2018:09:12 18:07:20', '9', 2018, '    ', '1', '44'),
(137, 'ABDUL ALI', '', 'General Visitor', 'ALPHA LIFE ', '01716673406', '7', 'HR', 'JUST VISIT', 'isml', 'ALPHA LIFE ', '09-12-2018', '2018:09:12 18:06:08', '2018:09:12 18:07:15', '2018:09:12 18:07:08', '2018:09:12 18:07:16', '9', 2018, '    ', '1', '44'),
(138, 'puvel', '', 'General Visitor', 'XL', '01819117260', '1', 'Maintenance', ' JUST VISIT', 'KAMRUL', 'XL', '09-19-2018', '2018:09:19 17:15:22', '2018:09:23 11:59:13', '2018:09:19 17:18:57', '2018:09:23 11:59:15', '9', 2018, '    ', '1', '44'),
(139, 'moklesur ', '', 'General Visitor', 'polton', '01913307741', '2', 'Maintenance', 'interview\r\n', 'ronjit', 'nai ', '09-23-2018', '2018:09:23 11:46:55', '2018:09:23 11:59:07', '2018:09:23 11:51:54', '2018:09:23 11:59:08', '9', 2018, '    ', '1', '44'),
(140, 'monisha', '', 'General Visitor', 'care bangladesh', '01777239593', '3', 'HR', 'just visit\r\n', 'ALEYA MAM', 'care bangladesh', '09-23-2018', '2018:09:23 11:52:07', '2018:09:23 11:59:02', '2018:09:23 11:52:36', '2018:09:23 11:59:04', '9', 2018, '    ', '1', '44'),
(141, 'billal hossain', '', 'General Visitor', 'saver', '01689162098', '4', 'Maintenance', 'interview', 'ronjit', 'nai ', '09-23-2018', '2018:09:23 11:52:41', '2018:09:23 11:58:57', '2018:09:23 11:53:48', '2018:09:23 11:58:58', '9', 2018, '    ', '1', '44'),
(142, 'halal', '', 'General Visitor', 'nai', '01911234433', '5', 'Maintenance', 'interview\r\n', 'ronjit', 'nai', '09-23-2018', '2018:09:23 11:53:52', '2018:09:23 11:58:54', '2018:09:23 11:55:13', '2018:09:23 11:58:55', '9', 2018, '    ', '1', '44'),
(143, 'rashedul islam', '', 'General Visitor', 'gazipur', '01678417258', '6', 'Maintenance', 'interview\r\n', 'ronjit', 'nai', '09-23-2018', '2018:09:23 11:55:21', '2018:09:23 11:58:52', '2018:09:23 11:57:32', '2018:09:23 11:58:52', '9', 2018, '    ', '1', '44'),
(144, 'rashedul islam', '', 'General Visitor', 'gazipur', '01678417258', '6', 'Maintenance', 'interview\r\n', 'ronjit', 'nai', '09-23-2018', '2018:09:23 11:55:21', '2018:09:23 11:58:48', '2018:09:23 11:57:32', '2018:09:23 11:58:49', '9', 2018, '    ', '1', '44'),
(145, 'asrafuzaman  ', '', 'General Visitor', 'gulsan', '01743053151', '7', 'HR', 'interview\r\n', 'ALEYA MAM', 'nai', '09-23-2018', '2018:09:23 11:57:36', '2018:09:23 11:58:44', '2018:09:23 11:58:30', '2018:09:23 11:58:45', '9', 2018, '    ', '1', '44'),
(146, 'sadur rohoman', '', 'General Visitor', 'gazipur', '01921779148', '1', 'Maintenance', 'interview', 'others', 'nai', '10-07-2018', '2018:10:07 17:52:08', '2018:10:07 18:07:35', '2018:10:07 17:53:13', '2018:10:07 18:07:36', '10', 2018, '    ', '1', '44'),
(147, 'omor faruq', '', 'General Visitor', 'trtra tech', '01678590427', '2', 'Cutting', 'working\r\n', 'saleh', 'trtra tech', '10-07-2018', '2018:10:07 17:53:17', '2018:10:07 18:07:30', '2018:10:07 17:54:50', '2018:10:07 18:07:32', '10', 2018, '    ', '1', '44'),
(148, 'md nasir uddin', '', 'General Visitor', 'coats bangladesh', '01720474614', '3', 'Management', 'just meet', 'monowar', 'coats bangladesh', '10-07-2018', '2018:10:07 17:54:53', '2018:10:07 18:07:24', '2018:10:07 17:58:04', '2018:10:07 18:07:27', '10', 2018, '    ', '1', '44'),
(149, 'tanvir', '', 'General Visitor', 'NS LEBEL', '01711991576', '4', 'Management', 'just meet\r\n', 'monowar', 'NS lebel', '10-07-2018', '2018:10:07 17:58:08', '2018:10:07 18:07:20', '2018:10:07 18:02:46', '2018:10:07 18:07:21', '10', 2018, '    ', '1', '44'),
(150, 'shohel ', '', 'General Visitor', 'evince ', '01653288540', '5', 'Others', 'meet ', 'others', 'others', '10-07-2018', '2018:10:07 18:02:51', '2018:10:07 18:07:09', '2018:10:07 18:06:59', '2018:10:07 18:07:16', '10', 2018, '    ', '1', '44'),
(151, 'RSDHEKH .SAMIUL', '', 'General Visitor', 'KPMG', '01551876354', '1', 'Accounts And Finance', 'JUST MEET', 'AKRAM KHAN', 'KPMG', '10-24-2018', '2018:10:25 11:06:04', '2018:11:19 16:28:17', '2018:10:25 11:10:29', '2018:11:19 16:28:18', '10', 2018, '    ', '1', '44'),
(152, 'june ', '', 'General Visitor', 'winda ', '01734313480', '2', 'Management', 'just meet', 'cgoo sir', 'winda', '11-19-2018', '2018:11:19 16:20:09', '2018:11:19 16:28:14', '2018:11:19 16:21:28', '2018:11:19 16:28:15', '11', 2018, '    ', '1', '44'),
(153, 'moniruzaman', '', 'General Visitor', 'silver textile', '01821265103', '3', 'SD', 'visit\r\n', 'saeem khan', 'silver textile', '11-19-2018', '2018:11:19 16:21:32', '2018:11:19 16:28:09', '2018:11:19 16:23:30', '2018:11:19 16:28:10', '11', 2018, '    ', '1', '44'),
(154, 'Md samim', '', 'General Visitor', 'winda', '01931402433', '4', 'Cutting', 'visit', 'saleh', 'winda', '11-19-2018', '2018:11:19 16:23:34', '2018:11:19 16:28:04', '2018:11:19 16:25:23', '2018:11:19 16:28:06', '11', 2018, '    ', '1', '44'),
(155, 'ABDUL ALI', '', 'General Visitor', 'ALPHA LIFE ', '01716673406', '5', 'HR', 'visit ', 'isml', 'ALPHA LIFE ', '11-19-2018', '2018:11:19 16:25:28', '2018:11:19 16:27:58', '2018:11:19 16:25:58', '2018:11:19 16:27:59', '11', 2018, '    ', '1', '44'),
(156, 'Md. anwar hassain', '', 'General Visitor', 'fancy fabric', '01738342224', '6', 'SD', 'visit', 'shimul ', 'fancy fabric', '11-19-2018', '2018:11:19 16:26:02', '2018:11:19 16:27:50', '2018:11:19 16:27:45', '2018:11:19 16:27:55', '11', 2018, '    ', '1', '44'),
(157, 'Md sohel', '', 'General Visitor', 'Veit bd]', '01674981091', '1', 'Maintenance', 'visit', 'ronjit', 'Veit bd', '11-28-2018', '2018:11:28 14:13:57', '2018:11:28 14:25:42', '2018:11:28 14:16:24', '2018:11:28 14:25:43', '11', 2018, '    ', '1', '44'),
(158, 'mamun', '', 'General Visitor', 'aamra res', '01730071484', '2', 'Maintenance', 'visit', 'ronjit', 'aamra res', '11-28-2018', '2018:11:28 14:16:26', '2018:11:28 14:25:38', '2018:11:28 14:18:08', '2018:11:28 14:25:40', '11', 2018, '    ', '1', '44'),
(159, 'salim rez', '', 'General Visitor', 'aamra res', '01713082779', '3', 'Maintenance', 'visit', 'ronjit', 'aamra res', '11-28-2018', '2018:11:28 14:25:48', '2019:07:15 18:00:47', '2018:11:28 14:27:05', '2019:07:15 18:00:48', '11', 2018, '    ', '1', '44'),
(160, 'pavel mahamud', '', 'General Visitor', 'ITS', '01730783215', '1', 'HR', 'Meeting', 'swapna', 'ITS', '07-15-2019', '2019:07:15 17:49:57', '2019:07:15 18:00:42', '2019:07:15 17:52:01', '2019:07:15 18:00:44', '7', 2019, '    ', '1', '44'),
(161, 'md shohel rana', '', 'General Visitor', 'trad trims', '01777426290', '2', 'MM', 'meeting', 'monower hossain', 'trad trims', '07-15-2019', '2019:07:15 17:52:06', '2019:07:15 18:00:38', '2019:07:15 17:55:20', '2019:07:15 18:00:40', '7', 2019, '    ', '1', '44'),
(162, 'md shohel rana', '', 'General Visitor', 'trad trims', '01777426290', '2', 'MM', 'meeting', 'monower hossain', 'trad trims', '07-15-2019', '2019:07:15 17:52:06', '2019:07:15 18:00:34', '2019:07:15 17:55:22', '2019:07:15 18:00:35', '7', 2019, '    ', '1', '44'),
(163, 'salman', '', 'General Visitor', 'paxar limited', '01716040005', '4', 'SD', 'visit \r\n', 'md jahangir ', 'paxar limited', '07-15-2019', '2019:07:15 17:55:43', '2019:07:15 18:00:29', '2019:07:15 17:57:13', '2019:07:15 18:00:31', '7', 2019, '    ', '1', '44'),
(164, 'saiful mallek', '', 'General Visitor', 'mutisa clouting', '017812222820', '5', 'SD', 'visit ', 'md shahadath', 'mutisa clouthing', '07-15-2019', '2019:07:15 17:57:17', '2019:07:15 18:00:26', '2019:07:15 17:58:58', '2019:07:15 18:00:27', '7', 2019, '    ', '1', '44'),
(165, 'khaled ', '', 'General Visitor', 'kds limited', '01777775447', '6', 'SD', 'visit ', 'md kamrul islam', 'kds limited', '07-15-2019', '2019:07:15 17:59:02', '2019:07:15 18:00:21', '2019:07:15 18:00:14', '2019:07:15 18:00:23', '7', 2019, '    ', '1', '44'),
(166, 'saidur rahman', '', 'General Visitor', 'stoffatex', '01735125404', '1', 'Accounts And Finance', 'visit \r\n\r\n\r\n', 'lutfor rohoman', 'stoffatex ', '09-14-2019', '2019:09:14 12:35:28', '2019:09:22 08:34:41', '2019:09:14 12:37:49', '2019:09:22 08:34:46', '9', 2019, '    ', '1', '44'),
(167, 'md arif', '', 'General Visitor', 'eco threid', '01708811211', '2', 'MM', 'meeting ', 'jahangir', 'eco trreid', '09-14-2019', '2019:09:14 12:37:54', '2019:09:22 08:34:49', '2019:09:14 12:40:44', '2019:09:22 08:34:50', '9', 2019, '    ', '1', '44'),
(168, 'saidur rahman', '', 'General Visitor', 'stoffatex', '01735125404', '1', 'Accounts And Finance', 'visit', 'lutfor rohoman', 'stoffatex ', '09.14.2019', '2019:09:22 08:34:56', '2019:09:26 10:09:31', '2019:09:22 08:36:32', '2019:09:26 10:09:33', '', 0, '    ', '1', '44'),
(169, 'md arif', '', 'General Visitor', 'eco threid', '01708811211', '2', 'MM', 'meeting', 'monower hossain', 'eco trreid', '09-14-2019', '2019:09:22 08:37:00', '', '2019:09:22 08:38:03', '', '9', 2019, '', '0', '44'),
(170, 'JOHIR UDDIN', '', 'General Visitor', 'UNITED GLASS', '01815439063', '3', 'HR', 'VISIT', 'ENG.NAHID', 'UNITED GLASS', '09-14-2019', '2019:09:22 08:38:08', '', '2019:09:22 08:42:09', '', '9', 2019, '', '0', '44'),
(171, 'MD RAJIB HOSSION', '', 'General Visitor', 'PPC', '01970338943', '4', 'SD', 'VISIT', 'SHIMUL', 'PPC', '09-14-2019', '2019:09:22 08:42:14', '', '2019:09:22 08:43:39', '', '9', 2019, '', '0', '44'),
(172, 'ABDUL ALI', '', 'General Visitor', 'ALPHA LIFE ', '01716673406', '5', 'HR', 'VISIT', 'HR TEAM', 'ALPHA LIFE ', '09-14-2019', '2019:09:22 08:43:44', '2019:09:26 10:09:28', '2019:09:22 08:45:33', '2019:09:26 10:09:29', '9', 2019, '    ', '1', '44'),
(173, 'A HOSSAIN', '', 'General Visitor', 'others', '01687392008', '6', 'Maintenance', 'VISIT', 'RONJIT', 'Priam asia', '09-14-2019', '2019:09:22 08:45:38', '2019:09:26 10:09:23', '2019:09:22 08:46:40', '2019:09:26 10:09:24', '9', 2019, '    ', '1', '44');

-- --------------------------------------------------------

--
-- Table structure for table `tb_visitor_sub_type`
--

CREATE TABLE IF NOT EXISTS `tb_visitor_sub_type` (
  `sl` int(2) NOT NULL AUTO_INCREMENT,
  `type` varchar(30) NOT NULL,
  `sub_type` varchar(30) NOT NULL,
  PRIMARY KEY (`sl`),
  KEY `type` (`type`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tb_visitor_sub_type`
--

INSERT INTO `tb_visitor_sub_type` (`sl`, `type`, `sub_type`) VALUES
(1, 'General Visitor', 'Vendor'),
(2, 'General Visitor', 'Non Vendor'),
(3, 'Buyer', 'Local'),
(4, 'Buyer', 'Foreigner');

-- --------------------------------------------------------

--
-- Table structure for table `tb_visitor_unit`
--

CREATE TABLE IF NOT EXISTS `tb_visitor_unit` (
  `sl` int(3) NOT NULL AUTO_INCREMENT,
  `unit` varchar(30) NOT NULL,
  PRIMARY KEY (`sl`),
  KEY `unit` (`unit`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `tb_visitor_unit`
--

INSERT INTO `tb_visitor_unit` (`sl`, `unit`) VALUES
(1, 'SD'),
(2, 'ISS'),
(3, 'MM'),
(4, 'Warehouse'),
(5, 'QA'),
(6, 'HR'),
(7, 'IE and Planning'),
(8, 'DPD'),
(9, 'Maintenance'),
(10, 'Accounts And Finance'),
(11, 'Commercial'),
(12, 'SS'),
(13, 'Others'),
(14, 'Sample'),
(15, 'Cutting'),
(16, 'Management');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
