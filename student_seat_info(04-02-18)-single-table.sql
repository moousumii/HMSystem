-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2018 at 06:37 PM
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
-- Table structure for table `student_seat_info`
--

CREATE TABLE `student_seat_info` (
  `sSeatId` int(11) NOT NULL,
  `monthelyRent` double NOT NULL DEFAULT '0',
  `specialDiscount` double NOT NULL DEFAULT '0',
  `additionalCharge` double NOT NULL DEFAULT '0',
  `admissionFee` double NOT NULL DEFAULT '0',
  `securityMoney` double NOT NULL DEFAULT '0',
  `studentSeatAddedDate` datetime NOT NULL,
  `studentExpireDate` date DEFAULT NULL,
  `student_info_studentId` int(11) NOT NULL,
  `student_info_studentIdNo` varchar(80) COLLATE utf16_bin NOT NULL,
  `building_info_buildingId` int(11) NOT NULL,
  `floor_info_floorId` int(11) NOT NULL,
  `unit_info_unitId` int(11) NOT NULL,
  `room_info_roomId` int(11) NOT NULL,
  `seat_info_seatId` int(11) NOT NULL,
  `seat_info_studentSeatStatus` tinyint(2) NOT NULL DEFAULT '1' COMMENT '1=Active, 0=inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `student_seat_info`
--



--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_seat_info`
--
ALTER TABLE `student_seat_info`
  ADD PRIMARY KEY (`sSeatId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_seat_info`
--
ALTER TABLE `student_seat_info`
  MODIFY `sSeatId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
