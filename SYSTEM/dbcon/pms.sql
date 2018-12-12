-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2018 at 02:38 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pms`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `type` varchar(111) NOT NULL,
  `pk_ID` int(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`type`, `pk_ID`) VALUES
('Project Type 1', 1),
('Project Type 2', 2),
('Project Type 3', 3);

-- --------------------------------------------------------

--
-- Table structure for table `companyname`
--

CREATE TABLE `companyname` (
  `pk_ID` int(122) NOT NULL,
  `name` varchar(113) NOT NULL,
  `companyNO` varchar(122) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companyname`
--

INSERT INTO `companyname` (`pk_ID`, `name`, `companyNO`) VALUES
(1, 'Ferma Warehouse', 'Ware123');

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `agreement` varchar(1222) NOT NULL,
  `priceDetail` varchar(1222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `position_id` int(11) NOT NULL,
  `rolePosition` varchar(1212) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`position_id`, `rolePosition`) VALUES
(1, 'Executive'),
(2, 'Project Manager'),
(3, 'Functional/Technical Members');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `pk_ID` int(11) NOT NULL,
  `projectName` varchar(110) NOT NULL,
  `projectDesc` varchar(111) NOT NULL,
  `category` varchar(140) NOT NULL,
  `cost` double NOT NULL,
  `companyName` varchar(111) NOT NULL,
  `companyNo` varchar(111) NOT NULL,
  `startdate` varchar(200) DEFAULT NULL,
  `enddate` varchar(200) DEFAULT NULL,
  `overall` varchar(250) NOT NULL,
  `pm` varchar(150) NOT NULL,
  `division` int(11) NOT NULL,
  `department` int(11) NOT NULL,
  `createddate` text NOT NULL,
  `createdtime` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`pk_ID`, `projectName`, `projectDesc`, `category`, `cost`, `companyName`, `companyNo`, `startdate`, `enddate`, `overall`, `pm`, `division`, `department`, `createddate`, `createdtime`) VALUES
(145, 'aa', 'mama', '', 1000, '', '', '2018-12-08', '2018-12-09', '', '', 0, 0, '', ''),
(146, 'Fermentation', 'agik', '', 19, '', '', '2018-01-01', '2018-02-28', '', '', 0, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `scope`
--

CREATE TABLE `scope` (
  `pk_ID` int(233) NOT NULL,
  `scope` mediumtext NOT NULL,
  `scopeDesc` mediumtext NOT NULL,
  `eststart` varchar(200) NOT NULL,
  `estEnd` varchar(200) NOT NULL,
  `numTeam` varchar(150) NOT NULL,
  `scope_id` int(11) NOT NULL,
  `pm` varchar(150) NOT NULL,
  `createddate` varchar(50) NOT NULL,
  `createdtime` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scope`
--

INSERT INTO `scope` (`pk_ID`, `scope`, `scopeDesc`, `eststart`, `estEnd`, `numTeam`, `scope_id`, `pm`, `createddate`, `createdtime`) VALUES
(123, 'FG Explosion', 'Fg ordering explosion', '123', '123', 'On-Going', 44, '', '', ''),
(123, 'testscope', 'test', '23', '34', 'On-Going', 45, '', '2018-08-13', '19:53:52 PM'),
(123, 'RM Movement', 'test', '08/23/2018', '08/31/2018', 'On-Going', 46, '', '2018-08-14', '01:41:29 AM'),
(123, 'Reports', 'IR', '08/25/2018', '08/31/2018', 'On-Going', 47, '', '2018-08-14', '01:48:15 AM'),
(124, 'FG Quantity', 'test', '08/15/2018', '08/30/2018', 'On-Going', 48, '', '2018-08-14', '02:22:25 AM');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `name` varchar(1221) NOT NULL,
  `userID` varchar(123) NOT NULL,
  `position` varchar(100) NOT NULL,
  `contactNo` varchar(1212) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`name`, `userID`, `position`, `contactNo`, `email`, `username`, `password`) VALUES
('Juan T. Delacruz', '11111', 'manager', '1234567890', 'juandelacruz@gmail.com', 'juan', 'tamad'),
('Jhomar F. Izar', '22222', 'Programmer', '09750590046', 'jhomar.izar@gmail.com', 'jhomar', 'alliswell'),
('Maria F. Deluna', '33333', 'Director', '1234234', 'maria@gmail.com', 'maria', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `pk_ID` int(11) NOT NULL,
  `task` mediumtext NOT NULL,
  `name` varchar(22) NOT NULL,
  `estTask` varchar(200) NOT NULL,
  `estDate` varchar(200) NOT NULL,
  `progress` varchar(150) NOT NULL,
  `scope_no` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `createddate` varchar(50) NOT NULL,
  `createdtime` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`pk_ID`, `task`, `name`, `estTask`, `estDate`, `progress`, `scope_no`, `id`, `createddate`, `createdtime`) VALUES
(123, 'Input Data', 'Maria F. Deluna', '2018-08-15', '2018-08-18', 'On-Going', 44, 16, '2018-08-14', '02:58:43 AM'),
(123, 'Modify', 'Maria F. Deluna', '2018-08-22', '2018-08-18', 'On-Going', 45, 17, '2018-08-14', '03:04:22 AM'),
(123, 'Modify Function', 'Maria F. Deluna', '2018-08-24', '2018-09-01', 'On-Going', 44, 18, '2018-08-14', '03:15:52 AM'),
(124, 'Modify Function', 'Jhomar F. Izar', '2018-08-01', '2018-08-31', 'On-Going', 48, 19, '2018-08-14', '03:31:03 AM');

-- --------------------------------------------------------

--
-- Table structure for table `teammember`
--

CREATE TABLE `teammember` (
  `pk_ID` int(11) NOT NULL,
  `userID` varchar(120) NOT NULL,
  `name` varchar(100) NOT NULL,
  `position` varchar(123) NOT NULL,
  `contactNo` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`pk_ID`);

--
-- Indexes for table `companyname`
--
ALTER TABLE `companyname`
  ADD PRIMARY KEY (`pk_ID`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`position_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`pk_ID`);

--
-- Indexes for table `scope`
--
ALTER TABLE `scope`
  ADD PRIMARY KEY (`scope_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teammember`
--
ALTER TABLE `teammember`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `pk_ID` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `companyname`
--
ALTER TABLE `companyname`
  MODIFY `pk_ID` int(122) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `position_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `pk_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;
--
-- AUTO_INCREMENT for table `scope`
--
ALTER TABLE `scope`
  MODIFY `scope_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `teammember`
--
ALTER TABLE `teammember`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
