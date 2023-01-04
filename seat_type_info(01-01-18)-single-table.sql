-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2018 at 11:07 AM
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
-- Table structure for table `seat_type_info`
--

CREATE TABLE `seat_type_info` (
  `seatTypeId` int(11) NOT NULL,
  `seatTypeName` varchar(200) COLLATE utf8_bin NOT NULL,
  `seatRentAmount` double NOT NULL COMMENT 'Total Seat Amount',
  `rentAmount` double NOT NULL,
  `profit` double NOT NULL,
  `seatTypeStatus` int(2) NOT NULL DEFAULT '1' COMMENT '1=Active, 0=InActive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `seat_type_info`
--

--
-- Indexes for dumped tables
--

--
-- Indexes for table `seat_type_info`
--
ALTER TABLE `seat_type_info`
  ADD PRIMARY KEY (`seatTypeId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `seat_type_info`
--
ALTER TABLE `seat_type_info`
  MODIFY `seatTypeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
