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
-- Database: `db_scmdept`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `funm` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `funm`, `username`, `password`) VALUES
(6, 'Admin', 'Admin', 'Admin'),
(7, '', 'Admin', 'Admin'),
(8, '', 'Admin', 'Admin'),
(9, '', 'Admin', 'Admin'),
(10, '', 'Admin', 'Admin'),
(11, '', 'Admin', 'Admin'),
(12, '', 'Admin', 'Admin'),
(13, '', 'Admin', 'Admin'),
(14, '', 'Admin', 'Admin'),
(15, '', 'Admin', 'Admin'),
(16, '', 'Admin', 'Admin'),
(17, '', 'Admin', 'Admin'),
(18, '', 'Admin', 'Admin'),
(19, '', 'Admin', 'Admin'),
(20, '', 'Admin', 'Admin'),
(21, '', 'Admin', 'Admin'),
(22, '', 'Admin', 'Admin'),
(23, '', 'Admin', 'Admin'),
(24, '', 'Admin', 'Admin'),
(25, '', 'Admin', 'Admin'),
(26, '', 'Admin', 'Admin'),
(27, '', 'Admin', 'Admin'),
(28, '', 'Admin', 'Admin'),
(29, '', 'Admin', 'Admin'),
(30, '', 'Admin', 'Admin'),
(31, '', 'Admin', 'Admin'),
(32, '', 'Admin', 'Admin'),
(33, '', 'Admin', 'Admin'),
(34, '', 'Admin', 'Admin'),
(35, '', 'Admin', 'Admin'),
(36, '', 'Admin', 'Admin'),
(37, '', 'Admin', 'Admin'),
(38, '', 'Admin', 'Admin'),
(39, '', 'Admin', 'Admin'),
(40, '', 'Admin', 'Admin'),
(41, '', 'Admin', 'Admin'),
(42, '', 'Admin', 'Admin'),
(43, '', 'Admin', 'Admin'),
(44, '', 'Admin', 'Admin'),
(45, '', 'Admin', 'Admin'),
(46, '', 'Admin', 'Admin'),
(47, '', 'Admin', 'Admin'),
(48, '', 'Admin', 'Admin'),
(49, '', 'Admin', 'Admin'),
(50, '', 'Admin', 'Admin'),
(51, '', 'Admin', 'Admin'),
(52, '', 'Admin', 'Admin'),
(53, '', 'Admin', 'Admin'),
(54, '', 'Admin', 'Admin'),
(55, '', 'Admin', 'Admin'),
(56, '', 'Admin', 'Admin'),
(57, '', 'Admin', 'Admin'),
(58, '', 'Admin', 'Admin'),
(59, '', 'Admin', 'Admin'),
(60, '', 'Admin', 'Admin'),
(61, '', 'Admin', 'Admin'),
(62, '', 'Admin', 'Admin'),
(63, '', 'Admin', 'Admin'),
(64, '', 'Admin', 'Admin'),
(65, '', 'Admin', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
