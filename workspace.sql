-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2015 at 01:15 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `workspace`
--

-- --------------------------------------------------------

--
-- Table structure for table `avg_daily_rate`
--

CREATE TABLE IF NOT EXISTS `avg_daily_rate` (
  `id` int(10) NOT NULL,
  `avg_daily_rate` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `avg_daily_rate`
--

INSERT INTO `avg_daily_rate` (`id`, `avg_daily_rate`) VALUES
(1, '13.31');

-- --------------------------------------------------------

--
-- Table structure for table `cleaning_report`
--

CREATE TABLE IF NOT EXISTS `cleaning_report` (
  `id` int(100) NOT NULL,
  `room_no` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cleaning_report`
--

INSERT INTO `cleaning_report` (`id`, `room_no`) VALUES
(1, '2'),
(2, '3'),
(44, '3'),
(45, '2'),
(46, '2'),
(47, '10'),
(48, ''),
(49, '2'),
(50, '111');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(100) NOT NULL,
  `message` varchar(100) NOT NULL,
  `message1` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `message`, `message1`) VALUES
(1, '5', 'dhfuk'),
(2, '2', 'fgvbm '),
(3, '3', 'fsmckl'),
(4, '1', 'sdkjn');

-- --------------------------------------------------------

--
-- Table structure for table `complementary_room`
--

CREATE TABLE IF NOT EXISTS `complementary_room` (
  `id` int(100) NOT NULL,
  `c_room` varchar(100) NOT NULL,
  `comments` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complementary_room`
--

INSERT INTO `complementary_room` (`id`, `c_room`, `comments`) VALUES
(15, '1', 'dsvcghvcgsdvcgd'),
(20, '5', 'dlks'),
(50, '3', 'dgghad'),
(52, '9', 'bjsd'),
(55, '32', 'nfjs'),
(56, '5', 'hjxvc'),
(57, '1', 'xkjv'),
(58, '1', '5'),
(60, '78', 'ijhu7ygi7ytg'),
(61, '1', '32'),
(62, '78', 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `ID` int(10) NOT NULL,
  `Username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `ph_no` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `Username`, `password`, `email_id`, `ph_no`, `designation`) VALUES
(1, 'jinalpatel', 'jinalpatel', 'jinal.hn@gmail.com', '9825581397', 'Manager'),
(2, 'vishalDave', 'vishaldave', 'vdave@gmail.com', '9825581397', 'Desk Clerk'),
(3, 'jinal', 'jinal', 'pjinal77@gmail.com', '156458458', 'Maintenance');

-- --------------------------------------------------------

--
-- Table structure for table `maintenance`
--

CREATE TABLE IF NOT EXISTS `maintenance` (
  `id` int(100) NOT NULL,
  `o_id` int(100) NOT NULL,
  `room_no` varchar(100) NOT NULL,
  `out_of_order` varchar(100) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `comments` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maintenance`
--

INSERT INTO `maintenance` (`id`, `o_id`, `room_no`, `out_of_order`, `reason`, `comments`) VALUES
(51, 50, '1', 'No', 'Option B', 'ask\r\n'),
(52, 55, '1', 'No', 'Option B', 'ask\r\n'),
(55, 62, '12', 'Yes', 'Option A', 'efh'),
(58, 49, '1', 'No', 'Option A', 'dghje'),
(59, 56, '7', 'No', 'Option A', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `occupancy`
--

CREATE TABLE IF NOT EXISTS `occupancy` (
  `id` int(10) NOT NULL,
  `occupancy` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `occupancy`
--

INSERT INTO `occupancy` (`id`, `occupancy`) VALUES
(1, '0.55');

-- --------------------------------------------------------

--
-- Table structure for table `out_of_order`
--

CREATE TABLE IF NOT EXISTS `out_of_order` (
  `Id` int(10) NOT NULL,
  `room_no` varchar(100) NOT NULL,
  `out_of_order` varchar(10) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `comments` varchar(200) NOT NULL,
  `reason_order` varchar(100) NOT NULL,
  `comment_order` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `out_of_order`
--

INSERT INTO `out_of_order` (`Id`, `room_no`, `out_of_order`, `reason`, `comments`, `reason_order`, `comment_order`) VALUES
(57, '1', 'Yes', '', '', 'Option B', 'vj'),
(58, '3', 'Yes', '-', '-', 'Option A', 'gdklj'),
(60, '1', 'Yes', '-', '-', 'Option B', 'dshu'),
(61, '13', 'Yes', '-', '-', 'Option B', 'ok');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(100) NOT NULL DEFAULT '1',
  `cash` varchar(100) NOT NULL,
  `ame_ex` varchar(100) NOT NULL,
  `discovery` varchar(100) NOT NULL,
  `visa` varchar(100) NOT NULL,
  `master` varchar(100) NOT NULL,
  `cheque` varchar(100) NOT NULL,
  `expedia` varchar(100) NOT NULL,
  `other` varchar(100) NOT NULL,
  `note` varchar(100) NOT NULL,
  `total` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `cash`, `ame_ex`, `discovery`, `visa`, `master`, `cheque`, `expedia`, `other`, `note`, `total`) VALUES
(1, '137.41', '7.89', '84.52', '105.88', '7.89', '2.20', '8.94', '4.52', '', '359.25');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE IF NOT EXISTS `property` (
  `ID` int(100) NOT NULL,
  `property` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`ID`, `property`) VALUES
(1, 'property1'),
(2, 'property2'),
(3, 'property3'),
(4, 'property4');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `id` int(100) NOT NULL DEFAULT '1',
  `rent` varchar(100) NOT NULL,
  `re_rent` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `rent`, `re_rent`) VALUES
(1, '22', '5');

-- --------------------------------------------------------

--
-- Table structure for table `shift_report`
--

CREATE TABLE IF NOT EXISTS `shift_report` (
  `id` int(100) NOT NULL,
  `room_no` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `User` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shift_report`
--

INSERT INTO `shift_report` (`id`, `room_no`, `amount`, `type`, `User`) VALUES
(44, '3', '7.89', 'Master Card', ''),
(55, '8', '0.53', 'Cash', ''),
(56, '11', '12.22', 'Cash', ''),
(57, '2', '0.89', 'Visa', ''),
(58, '4', '8.94', 'Expedia', ''),
(59, '9', '9.99', 'Cash', ''),
(66, '78', '7.89', 'American Express', ''),
(67, '11', '12.12', 'Cash', ''),
(68, '12', '4.56', 'Cash', ''),
(69, '77', '8.63', 'Cash', ''),
(71, '2', '45.00', 'Visa', ''),
(72, '55', '0.65', 'Cheque', ''),
(74, '53', '0.66', 'Cheque', ''),
(75, '11', '4.12', 'Other', ''),
(76, '4', '0.40', 'Other', ''),
(78, '2', '0.54', 'Cash', ''),
(80, '3', '0.45', 'Cash', ''),
(81, '6', '0.41', 'Cash', ''),
(82, '59', '59.99', 'Visa', ''),
(83, '23', '8.97', 'Cash', ''),
(84, '8', '0.89', 'Cheque', ''),
(85, '79', '84.52', 'Discovery', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `ph_no` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `user_id`, `Name`, `ph_no`, `email`) VALUES
(1, 1, 'Jinal', '4082218610', 'jinal.hn@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `avg_daily_rate`
--
ALTER TABLE `avg_daily_rate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cleaning_report`
--
ALTER TABLE `cleaning_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complementary_room`
--
ALTER TABLE `complementary_room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `maintenance`
--
ALTER TABLE `maintenance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `occupancy`
--
ALTER TABLE `occupancy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `out_of_order`
--
ALTER TABLE `out_of_order`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shift_report`
--
ALTER TABLE `shift_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `avg_daily_rate`
--
ALTER TABLE `avg_daily_rate`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cleaning_report`
--
ALTER TABLE `cleaning_report`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `complementary_room`
--
ALTER TABLE `complementary_room`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `maintenance`
--
ALTER TABLE `maintenance`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `occupancy`
--
ALTER TABLE `occupancy`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `out_of_order`
--
ALTER TABLE `out_of_order`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `shift_report`
--
ALTER TABLE `shift_report`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=86;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
