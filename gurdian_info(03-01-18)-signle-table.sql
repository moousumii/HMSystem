-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2018 at 03:02 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cityhostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `gurdian_info`
--

CREATE TABLE `gurdian_info` (
  `gurdianId` int(11) NOT NULL,
  `stdFatherName` varchar(40) COLLATE utf8_bin NOT NULL,
  `stdFatherContactNo` varchar(14) COLLATE utf8_bin NOT NULL,
  `stdFatherOccupation` varchar(15) COLLATE utf8_bin NOT NULL,
  `stdFatherNID` varchar(25) COLLATE utf8_bin NOT NULL,
  `stdMotherName` varchar(40) COLLATE utf8_bin NOT NULL,
  `stdMotherContactNo` varchar(14) COLLATE utf8_bin NOT NULL,
  `stdMotherOccupation` varchar(15) COLLATE utf8_bin NOT NULL,
  `stdMotherNID` varchar(25) COLLATE utf8_bin NOT NULL,
  `gurdianAddress` text COLLATE utf8_bin NOT NULL,
  `husbandName` varchar(40) COLLATE utf8_bin NOT NULL,
  `husbandContactNo` varchar(14) COLLATE utf8_bin NOT NULL,
  `husbandOccupation` varchar(15) COLLATE utf8_bin NOT NULL,
  `husbandNID` varchar(25) COLLATE utf8_bin NOT NULL,
  `husbandAddress` text COLLATE utf8_bin NOT NULL,
  `localGurdianName` varchar(40) COLLATE utf8_bin NOT NULL,
  `localGurdianContactNo` varchar(14) COLLATE utf8_bin NOT NULL,
  `localGurdianOccupation` varchar(15) COLLATE utf8_bin NOT NULL,
  `localGurdianNID` varchar(25) COLLATE utf8_bin NOT NULL,
  `localGurdianRelationship` varchar(10) COLLATE utf8_bin NOT NULL,
  `localGurdianAddress` text COLLATE utf8_bin NOT NULL,
  `student_info_studentId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gurdian_info`
--
ALTER TABLE `gurdian_info`
  ADD PRIMARY KEY (`gurdianId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gurdian_info`
--
ALTER TABLE `gurdian_info`
  MODIFY `gurdianId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
