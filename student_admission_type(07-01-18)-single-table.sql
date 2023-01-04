-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2018 at 07:34 PM
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
-- Table structure for table `student_admission_type`
--

CREATE TABLE `student_admission_type` (
  `admissionTypeId` int(11) NOT NULL,
  `admissionTypeName` varchar(50) COLLATE utf8_bin NOT NULL,
  `admissionTypeStatus` int(2) NOT NULL DEFAULT '1' COMMENT '1=Active, 0=InActive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `student_admission_type`
--

INSERT INTO `student_admission_type` (`admissionTypeId`, `admissionTypeName`, `admissionTypeStatus`) VALUES
(1, 'School', 1),
(2, 'College', 1),
(3, 'Coaching', 1),
(4, 'Honours', 1),
(5, 'Masters', 1),
(6, 'MBA', 1),
(7, 'Diploma', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_admission_type`
--
ALTER TABLE `student_admission_type`
  ADD PRIMARY KEY (`admissionTypeId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_admission_type`
--
ALTER TABLE `student_admission_type`
  MODIFY `admissionTypeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
