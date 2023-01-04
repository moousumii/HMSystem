-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2018 at 01:12 PM
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

INSERT INTO `student_seat_info` (`sSeatId`, `monthelyRent`, `specialDiscount`, `additionalCharge`, `admissionFee`, `securityMoney`, `studentSeatAddedDate`, `student_info_studentId`, `student_info_studentIdNo`, `building_info_buildingId`, `floor_info_floorId`, `unit_info_unitId`, `room_info_roomId`, `seat_info_seatId`, `seat_info_studentSeatStatus`) VALUES
(1, 2000, 1200, 1500, 1480, 1300, '2017-11-11 00:45:12', 9, '', 0, 0, 0, 0, 1, 0),
(11, 2000, 1200, 1500, 0, 0, '2017-11-24 17:55:13', 9, '1112564930009', 0, 0, 0, 0, 2, 1),
(12, 2000, 300, 1500, 0, 0, '2017-11-25 01:14:40', 10, '1012130010010', 0, 0, 0, 0, 1, 1),
(13, 2000, 1000, 1000, 0, 0, '2017-12-09 01:50:17', 11, '1012130010011', 0, 0, 0, 0, 1, 1),
(14, 2000, 1200, 1500, 0, 0, '2017-12-09 01:56:37', 12, '1012130010012', 0, 0, 0, 0, 1, 1),
(15, 2000, 1200, 1500, 0, 0, '2017-12-09 01:58:08', 13, '1012130010013', 0, 0, 0, 0, 1, 1),
(16, 5000, 1200, 1500, 0, 0, '2017-12-26 15:23:44', 14, '20014', 0, 0, 0, 0, 4, 1),
(17, 5000, 1200, 1500, 0, 0, '2018-01-03 20:00:57', 15, '20015', 0, 0, 0, 0, 4, 1),
(18, 700, 1200, 1500, 0, 0, '2018-01-03 20:24:16', 16, '1012130010016', 0, 0, 0, 0, 1, 1),
(19, 700, 200, 500, 0, 0, '2018-01-04 20:49:50', 17, '1012130010017', 0, 0, 0, 0, 1, 1),
(20, 5000, 200, 500, 0, 0, '2018-01-07 00:37:58', 18, '20018', 0, 0, 0, 0, 4, 1),
(21, 700, 1200, 500, 0, 0, '2018-01-14 23:16:58', 19, '1012130010019', 0, 0, 0, 0, 1, 1);

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
  MODIFY `sSeatId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
