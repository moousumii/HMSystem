-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2018 at 06:40 PM
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
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `adminID` int(11) NOT NULL,
  `adminName` varchar(40) COLLATE utf8_bin NOT NULL,
  `adminEmail` varchar(50) COLLATE utf8_bin NOT NULL,
  `adminContact` varchar(20) COLLATE utf8_bin NOT NULL,
  `adminAddress` text COLLATE utf8_bin NOT NULL,
  `adminUserID` varchar(30) COLLATE utf8_bin NOT NULL,
  `adminPassword` varchar(400) COLLATE utf8_bin NOT NULL,
  `adminStatus` int(2) NOT NULL DEFAULT '1' COMMENT '0=InActive, 1=Active',
  `admin_role_roleID` int(11) NOT NULL,
  `zone_info_zoneID` int(11) NOT NULL,
  `adminNote` text COLLATE utf8_bin NOT NULL,
  `adminJoinDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `adminUpdateDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`adminID`, `adminName`, `adminEmail`, `adminContact`, `adminAddress`, `adminUserID`, `adminPassword`, `adminStatus`, `admin_role_roleID`, `zone_info_zoneID`, `adminNote`, `adminJoinDate`, `adminUpdateDate`) VALUES
(1, 'SatrlabITSatrlabIT', 'starlabTeam@gmail.com', '01719450855017194508', 'Zindabazar,Sylhet', 'starlabIT', 'd7ea52fb792bed01df7174c48605cf19', 1, 1, 1, '', '2017-11-24 16:39:00', '0000-00-00 00:00:00'),
(6, 'Excellent Store Keeper', 'storekeeper_excellent@starlabit.email', 'Rifat', 'Excellent 631ea72176464e6d2b8adda6c47a993a\n', 'stock', 'd7ea52fb792bed01df7174c48605cf19', 1, 3, 3, '', '2017-05-03 12:05:12', '0000-00-00 00:00:00'),
(7, 'admin admin', 'admin@excellent.com', '123456', 'address', 'StarLabIT1', 'd7ea52fb792bed01df7174c48605cf19', 1, 2, 3, '', '2017-03-22 12:27:38', '0000-00-00 00:00:00'),
(8, 'Mr. Rifat', 'rifat@jonota.com', '01727414166', 'Zindabazar', 'admin', 'd7ea52fb792bed01df7174c48605cf19', 1, 2, 3, '', '2017-06-30 19:24:59', '0000-00-00 00:00:00'),
(9, 'Excellent - 1 Manager', 'excellent1@starlabit.email', '123456', 'Zindabazar', 'manager', 'b4af804009cb036a4ccdc33431ef9ac9', 1, 4, 4, '', '2017-09-25 12:31:43', '2017-04-27 19:11:08'),
(10, 'Salim Shoes Manager', 'salimshoes@gmail.com', '12345678979654', 'Zindabazar, Sylhet', 'salim', 'd7ea52fb792bed01df7174c48605cf19', 1, 4, 5, '', '2017-08-30 18:11:27', '0000-00-00 00:00:00'),
(11, 'Excellent - 2 Manager', 'excellent2@starlab.email', '0123456789', 'Zindabazar', 'excellent2', '29ce822e8b7e51a318e382b0e34f4360', 1, 4, 6, '', '2017-04-27 13:09:18', '0000-00-00 00:00:00'),
(12, 'name', 'email@gmail.com', '2453557', 'address', 'userId', '5dbab745ca7dc1a1abb2e4352bdb0549', 1, 4, 4, '', '2017-08-03 16:29:52', '0000-00-00 00:00:00'),
(13, 'name', '', '2453557', '', 'manager1', '25d55ad283aa400af464c76d713c07ad', 1, 4, 0, 'Note', '2017-09-20 20:26:20', '0000-00-00 00:00:00'),
(14, 'user name', '', '0123456789', '', 'user', '12345678', 1, 0, 1, 'note', '2017-10-28 04:00:51', '0000-00-00 00:00:00'),
(15, 'StarLab Admin', '', '0123456789', '', 'starLab', '123456789', 1, 0, 1, 'Note', '2017-10-26 18:51:36', '0000-00-00 00:00:00'),
(16, 'City Hostel', '', '123456789', '', 'hostelAdmin', '123456789', 1, 0, 1, 'note', '2017-10-28 04:00:59', '0000-00-00 00:00:00'),
(17, 'user name', '', '0123456789', '', 'userID', '123456', 1, 0, 0, 'note of admin', '2017-10-28 03:59:09', '0000-00-00 00:00:00'),
(18, 'user name', '', '012345778', '', 'manager5', '12345678', 1, 4, 0, 'note', '2017-10-29 09:34:39', '0000-00-00 00:00:00'),
(19, 'name', '', '123456', '', 'userName', '25f9e794323b453885f5181f1b624d0b', 1, 4, 1, 'note', '2017-11-10 06:20:32', '0000-00-00 00:00:00'),
(20, 'name', '', '123465', '', 'id ', '25f9e794323b453885f5181f1b624d0b', 1, 4, 3, 'user', '2017-11-10 06:30:16', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `admin_role`
--

CREATE TABLE `admin_role` (
  `roleID` int(11) NOT NULL,
  `roleName` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `admin_role`
--

INSERT INTO `admin_role` (`roleID`, `roleName`) VALUES
(1, 'Super Admin'),
(2, 'Admin'),
(4, 'Manager');

-- --------------------------------------------------------

--
-- Table structure for table `building_info`
--

CREATE TABLE `building_info` (
  `buildingId` int(11) NOT NULL,
  `zone_info_zoneId` int(11) NOT NULL,
  `buildingNumber` varchar(200) COLLATE utf8_bin NOT NULL,
  `buildingTitle` varchar(200) COLLATE utf8_bin NOT NULL,
  `buildingNote` text COLLATE utf8_bin NOT NULL,
  `buildingStatus` int(2) NOT NULL DEFAULT '1' COMMENT '0=InActive,1=Active',
  `buildingTotalFloorNumber` int(3) NOT NULL DEFAULT '0',
  `buildingAddedDate` datetime NOT NULL,
  `buildingAddedBy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `building_info`
--

INSERT INTO `building_info` (`buildingId`, `zone_info_zoneId`, `buildingNumber`, `buildingTitle`, `buildingNote`, `buildingStatus`, `buildingTotalFloorNumber`, `buildingAddedDate`, `buildingAddedBy`) VALUES
(1, 1, '1', 'Title', 'note\r\n', 1, 2, '0000-00-00 00:00:00', 0),
(2, 3, '2', 'New building', 'Building Note', 1, 2, '0000-00-00 00:00:00', 0),
(3, 1, '3', 'Hostel Building', 'Note', 1, 0, '0000-00-00 00:00:00', 0),
(4, 0, '4', 'Building Title', 'New Building', 1, 0, '0000-00-00 00:00:00', 0),
(5, 0, '4', 'new', 'building', 1, 0, '2017-10-31 13:01:06', 0),
(6, 0, '5', 'Building', 'Added', 1, 1, '2017-10-31 13:33:21', 9),
(7, 4, '8', 'building name', 'added', 1, 0, '2017-11-03 12:34:07', 9),
(8, 0, '1', 'building', 'note', 1, 0, '2017-11-03 12:36:16', 9),
(9, 0, '2', 'title', 'note', 1, 0, '2017-11-03 12:36:54', 9),
(10, 3, '15', 'title', '', 1, 1, '2018-01-18 21:35:26', 9);

-- --------------------------------------------------------

--
-- Table structure for table `expense_field_info`
--

CREATE TABLE `expense_field_info` (
  `fieldId` int(11) NOT NULL,
  `fieldTitle` varchar(100) COLLATE utf16_bin NOT NULL,
  `fieldStatus` int(11) NOT NULL DEFAULT '1' COMMENT '0=InActive,1=Active',
  `fieldDetails` text COLLATE utf16_bin NOT NULL,
  `fieldNote` text COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `expense_field_info`
--

INSERT INTO `expense_field_info` (`fieldId`, `fieldTitle`, `fieldStatus`, `fieldDetails`, `fieldNote`) VALUES
(1, 'expense', 1, 'fieldDetails', 'fieldNote'),
(2, 'new expense', 1, 'expense details', 'note');

-- --------------------------------------------------------

--
-- Table structure for table `expense_info`
--

CREATE TABLE `expense_info` (
  `expenseId` int(11) NOT NULL,
  `expenseAmount` double NOT NULL,
  `expenseDetails` text COLLATE utf16_bin NOT NULL,
  `expenseNote` text COLLATE utf16_bin NOT NULL,
  `expenseStatus` int(11) NOT NULL DEFAULT '1' COMMENT '0=InActive,1=Active',
  `expense_field_info_fieldId` int(11) NOT NULL,
  `expenseAddedDate` datetime NOT NULL,
  `expenseAddedBy` int(11) NOT NULL,
  `zone_info_expenseZoneId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `expense_info`
--

INSERT INTO `expense_info` (`expenseId`, `expenseAmount`, `expenseDetails`, `expenseNote`, `expenseStatus`, `expense_field_info_fieldId`, `expenseAddedDate`, `expenseAddedBy`, `zone_info_expenseZoneId`) VALUES
(1, 1000, 'details', 'note', 1, 1, '0000-00-00 00:00:00', 0, 1),
(2, 20000000, 'details of expense', 'note of expense', 1, 2, '0000-00-00 00:00:00', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `floor_info`
--

CREATE TABLE `floor_info` (
  `floorId` int(11) NOT NULL,
  `zone_info_zoneID` int(11) NOT NULL,
  `building_info_floorBuildingId` int(11) NOT NULL,
  `floorNumber` varchar(200) COLLATE utf8_bin NOT NULL,
  `floorNote` text COLLATE utf8_bin NOT NULL,
  `floorStatus` int(2) NOT NULL DEFAULT '1' COMMENT '0=InActive, 1=Active',
  `floorTotalNumberUnit` int(3) NOT NULL DEFAULT '0',
  `floorAddedDate` datetime NOT NULL,
  `floorAddedBy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `floor_info`
--

INSERT INTO `floor_info` (`floorId`, `zone_info_zoneID`, `building_info_floorBuildingId`, `floorNumber`, `floorNote`, `floorStatus`, `floorTotalNumberUnit`, `floorAddedDate`, `floorAddedBy`) VALUES
(1, 0, 0, '3', '', 1, 2, '0000-00-00 00:00:00', 0),
(2, 0, 0, '1', 'note', 1, 1, '0000-00-00 00:00:00', 0),
(3, 0, 0, '2', 'note', 1, 0, '0000-00-00 00:00:00', 0),
(4, 0, 0, '1', 'new floor', 1, 0, '0000-00-00 00:00:00', 0),
(5, 0, 0, '2', 'floor', 1, 0, '0000-00-00 00:00:00', 0),
(6, 3, 5, '1', 'note', 1, 0, '0000-00-00 00:00:00', 0),
(7, 1, 1, '2', 'floor', 1, 0, '0000-00-00 00:00:00', 0),
(8, 3, 1, '1', 'note', 1, 0, '0000-00-00 00:00:00', 0),
(9, 3, 1, '2', 'note', 1, 0, '0000-00-00 00:00:00', 0),
(10, 1, 1, '1', 'floor', 1, 0, '2017-10-31 12:54:30', 0),
(11, 1, 1, '2', 'new', 1, 0, '2017-10-31 12:54:30', 0),
(12, 1, 1, '1', 'floor', 1, 0, '2017-10-31 12:55:17', 0),
(13, 1, 1, '2', 'new', 1, 0, '2017-10-31 12:55:17', 0),
(14, 1, 1, '1', 'floor', 1, 0, '2017-10-31 12:55:40', 0),
(15, 1, 1, '2', 'new', 1, 0, '2017-10-31 12:55:40', 0),
(16, 1, 1, '1', 'floor', 1, 0, '2017-10-31 12:55:55', 0),
(17, 1, 1, '2', 'new', 1, 0, '2017-10-31 12:55:55', 0),
(18, 1, 1, '1', 'floor', 1, 0, '2017-10-31 12:56:32', 0),
(19, 1, 1, '2', 'new', 1, 0, '2017-10-31 12:56:32', 0),
(20, 1, 1, '1', 'floor ', 1, 0, '2017-10-31 13:30:42', 9),
(21, 1, 1, '2', 'new', 1, 0, '2017-10-31 13:30:42', 9),
(22, 1, 1, '1', 'floor ', 1, 0, '2017-10-31 13:31:24', 9),
(23, 1, 1, '2', 'new', 1, 0, '2017-10-31 13:31:24', 9),
(24, 4, 6, '1', 'new', 1, 0, '2017-10-31 22:43:57', 9),
(25, 3, 10, '15', '', 1, 1, '2018-01-18 21:35:44', 9);

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
-- Dumping data for table `gurdian_info`
--

INSERT INTO `gurdian_info` (`gurdianId`, `stdFatherName`, `stdFatherContactNo`, `stdFatherOccupation`, `stdFatherNID`, `stdMotherName`, `stdMotherContactNo`, `stdMotherOccupation`, `stdMotherNID`, `gurdianAddress`, `husbandName`, `husbandContactNo`, `husbandOccupation`, `husbandNID`, `husbandAddress`, `localGurdianName`, `localGurdianContactNo`, `localGurdianOccupation`, `localGurdianNID`, `localGurdianRelationship`, `localGurdianAddress`, `student_info_studentId`) VALUES
(6, 'father name', '12345', 'occupation', '123456', 'mother name', '123456', 'occupation', '123456', 'address', 'husband name', '123456', '123456', '123456', 'address', 'local gurdian name', '316641', 'occupation', '123456', 'relationsh', 'Address', 16),
(7, 'father name', '12345', 'occupation', '123456', 'mother name', '123456', 'occupation', '123456', 'Address', 'husband name', '0123456789', 'occupation', '123456', 'Address', 'local gurdian name', '316641', 'occupation', '123456', 'relationsh', 'Local Gurdian''s Address', 17),
(8, 'father name', '12345', 'occupation', '123456', 'mother name', '123456', 'occupation', '123456', '', '', '', '', '', '', 'gurdian', '316641', 'occupation', '123456', 'relationsh', '', 18),
(9, 'father name', '12345', 'occupation', '123456', 'mother name', '123456', '', '', '', '', '', '', '', '', 'local gurdian name', '12345', '', '', '', '', 19),
(10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'gurdian', '316641', 'occupation', '123456', 'relationsh', '', 20),
(11, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'gurdian', '316641', 'occupation', '123456', 'relationsh', '', 21);

-- --------------------------------------------------------

--
-- Table structure for table `monthly_billing_info`
--

CREATE TABLE `monthly_billing_info` (
  `monthlyBillingInfoId` int(11) NOT NULL,
  `monthlyBillingMonth` date NOT NULL,
  `zone_info_billZoneId` int(11) NOT NULL,
  `monthlyBillingInfoAddedDate` datetime NOT NULL,
  `monthlyBillingInfoStatus` int(2) NOT NULL DEFAULT '0' COMMENT '1=final, 0=pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `monthly_billing_info`
--

INSERT INTO `monthly_billing_info` (`monthlyBillingInfoId`, `monthlyBillingMonth`, `zone_info_billZoneId`, `monthlyBillingInfoAddedDate`, `monthlyBillingInfoStatus`) VALUES
(7, '2017-12-24', 1, '2017-11-14 02:59:53', 1),
(9, '2017-12-27', 1, '2017-12-08 21:25:52', 1);

-- --------------------------------------------------------

--
-- Table structure for table `monthly_billng_details`
--

CREATE TABLE `monthly_billng_details` (
  `monthlyBillngDetailsId` int(11) NOT NULL,
  `monthly_billing_info_billId` int(11) NOT NULL,
  `student_info_billStudentId` int(11) NOT NULL,
  `seat_info_billStudentSeatId` int(11) NOT NULL,
  `billing_details_monthelyRent` double NOT NULL DEFAULT '0',
  `billing_details_specialDiscount` double NOT NULL DEFAULT '0',
  `billing_details_additionalCharge` double NOT NULL DEFAULT '0',
  `billing_details_admissionFee` double NOT NULL,
  `billing_details_securityMoney` double NOT NULL DEFAULT '0',
  `billingDetailsStudentPreviousDue` double NOT NULL DEFAULT '0',
  `billingDetailsStudentFoodAmount` double NOT NULL DEFAULT '0',
  `billingDetailsStudentElecticBill` double NOT NULL DEFAULT '0',
  `billingDetailsStudentWifiBill` double NOT NULL DEFAULT '0',
  `billingDetailsHostelProfit` double NOT NULL DEFAULT '0',
  `billingDetailsStudentBillDiscount` double NOT NULL DEFAULT '0',
  `billingDetailsStudentOtherAmount` double NOT NULL,
  `billingDetailsStudentTotalAmount` double NOT NULL,
  `billingDetailsLastUpdatedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `billingDetailsStatus` tinyint(2) NOT NULL COMMENT '0=pendinf, 1=paid, 2=half paid'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `monthly_billng_details`
--

INSERT INTO `monthly_billng_details` (`monthlyBillngDetailsId`, `monthly_billing_info_billId`, `student_info_billStudentId`, `seat_info_billStudentSeatId`, `billing_details_monthelyRent`, `billing_details_specialDiscount`, `billing_details_additionalCharge`, `billing_details_admissionFee`, `billing_details_securityMoney`, `billingDetailsStudentPreviousDue`, `billingDetailsStudentFoodAmount`, `billingDetailsStudentElecticBill`, `billingDetailsStudentWifiBill`, `billingDetailsHostelProfit`, `billingDetailsStudentBillDiscount`, `billingDetailsStudentOtherAmount`, `billingDetailsStudentTotalAmount`, `billingDetailsLastUpdatedDate`, `billingDetailsStatus`) VALUES
(4, 7, 9, 1, 2000, 1200, 1500, 1480, 1300, 0, 500, 0, 0, 0, 0, 250, 750, '2017-11-13 20:59:53', 0),
(6, 8, 10, 1, 2000, 300, 1500, 0, 0, 0, 1000, 300, 200, 1000, 700, 1000, 3500, '2017-12-08 15:20:39', 0),
(7, 9, 9, 2, 2000, 1200, 1500, 0, 0, -1100, 1000, 300, 200, 1000, 700, 1000, 4000, '2017-12-08 15:25:52', 0),
(8, 9, 10, 15, 2000, 300, 1500, 0, 0, 0, 1000, 300, 200, 1000, 700, 1000, 6000, '2017-12-08 15:25:52', 0);

-- --------------------------------------------------------

--
-- Table structure for table `payment_type_info`
--

CREATE TABLE `payment_type_info` (
  `paymentTypeInfoId` int(11) NOT NULL,
  `paymentTypeTitle` varchar(50) COLLATE utf8_bin NOT NULL,
  `paymentTypeInfoStatus` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `payment_type_info`
--

INSERT INTO `payment_type_info` (`paymentTypeInfoId`, `paymentTypeTitle`, `paymentTypeInfoStatus`) VALUES
(1, 'Admission Fee', 1),
(2, 'Bill Payment', 1),
(3, 'Other', 1),
(4, 'Security', 1);

-- --------------------------------------------------------

--
-- Table structure for table `received_payment_info`
--

CREATE TABLE `received_payment_info` (
  `receivedPaymentInfoId` int(11) NOT NULL,
  `payment_type_info_paymentTypeId` int(11) NOT NULL,
  `receivedPaymentAmount` double NOT NULL,
  `student_info_paymentStudentId` int(11) NOT NULL,
  `receivedPaymentNote` text COLLATE utf8_bin NOT NULL,
  `zone_info_paymentZoneId` int(11) NOT NULL,
  `receivedPaymentDate` datetime NOT NULL,
  `receivedPaymentAddedBy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `received_payment_info`
--

INSERT INTO `received_payment_info` (`receivedPaymentInfoId`, `payment_type_info_paymentTypeId`, `receivedPaymentAmount`, `student_info_paymentStudentId`, `receivedPaymentNote`, `zone_info_paymentZoneId`, `receivedPaymentDate`, `receivedPaymentAddedBy`) VALUES
(1, 1, 5000, 1, 'note', 1, '2017-11-18 22:19:38', 9),
(2, 2, 1000, 1, 'notes', 1, '2017-11-19 00:08:46', 9),
(3, 2, 1000, 1, 'notes', 1, '2017-11-19 00:13:00', 9),
(4, 1, 100, 1, 'note', 3, '2017-11-19 00:20:00', 9),
(5, 1, 100, 1, 'note', 1, '2017-11-19 00:22:53', 9),
(6, 2, 100, 1, 'note', 1, '2017-11-19 00:23:42', 9),
(7, 2, 100, 1, 'note', 1, '2017-11-19 00:34:47', 9),
(8, 2, 100, 1, 'note', 1, '2017-11-19 00:36:41', 9),
(9, 2, 100, 1, 'note', 1, '2017-11-19 00:41:47', 9),
(10, 2, 50, 1, '', 1, '2017-11-19 00:42:10', 9),
(11, 2, 50, 1, '', 1, '2017-11-19 00:44:15', 9),
(12, 1, 80, 1, '', 1, '2017-11-19 17:01:37', 9),
(13, 1, 80, 1, 'note', 1, '2017-11-19 17:02:01', 9),
(14, 2, 200, 1, 'note', 1, '2017-11-19 17:06:02', 9),
(15, 1, 100, 1, 'note', 1, '2017-11-19 17:07:55', 9),
(16, 1, 100, 1, 'note', 1, '2017-11-19 17:16:27', 9),
(17, 1, 100, 1, 'note', 1, '2017-11-19 17:17:49', 9);

-- --------------------------------------------------------

--
-- Table structure for table `return_payment_info`
--

CREATE TABLE `return_payment_info` (
  `returnPaymentInfoId` int(11) NOT NULL,
  `return_payment_type_info_returnPaymentTypeId` int(11) NOT NULL,
  `returnPaymentAmount` double NOT NULL,
  `student_info_returnPaymentStudentId` int(11) NOT NULL,
  `returnPaymentNote` text COLLATE utf8_bin NOT NULL,
  `zone_info_returnPaymentZoneId` int(11) NOT NULL,
  `returnPaymentDate` datetime NOT NULL,
  `returnPaymentAddedBy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `return_payment_info`
--

INSERT INTO `return_payment_info` (`returnPaymentInfoId`, `return_payment_type_info_returnPaymentTypeId`, `returnPaymentAmount`, `student_info_returnPaymentStudentId`, `returnPaymentNote`, `zone_info_returnPaymentZoneId`, `returnPaymentDate`, `returnPaymentAddedBy`) VALUES
(2, 6, 5000, 1, 'note', 1, '2017-11-19 20:50:54', 9);

-- --------------------------------------------------------

--
-- Table structure for table `return_payment_type_info`
--

CREATE TABLE `return_payment_type_info` (
  `returnPaymentTypeInfoId` int(11) NOT NULL,
  `returnPaymentTypeTitle` varchar(50) COLLATE utf8_bin NOT NULL,
  `returnPaymentTypeInfoStatus` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `return_payment_type_info`
--

INSERT INTO `return_payment_type_info` (`returnPaymentTypeInfoId`, `returnPaymentTypeTitle`, `returnPaymentTypeInfoStatus`) VALUES
(6, 'Admission Fee', 1),
(7, 'Advance', 1),
(8, 'Other', 1),
(9, 'Security', 1);

-- --------------------------------------------------------

--
-- Table structure for table `room_info`
--

CREATE TABLE `room_info` (
  `roomId` int(11) NOT NULL,
  `zone_info_zoneID` int(11) NOT NULL,
  `building_info_roomBuildingId` int(11) NOT NULL,
  `floor_info_roomFloorId` int(11) NOT NULL,
  `unit_info_roomUnitId` int(11) NOT NULL,
  `roomNumber` varchar(200) COLLATE utf8_bin NOT NULL,
  `roomNote` text COLLATE utf8_bin NOT NULL,
  `roomStatus` int(2) NOT NULL DEFAULT '1' COMMENT '0=InActive, 1=Active',
  `roomTotalSeatNumber` int(3) NOT NULL DEFAULT '0',
  `roomAddedDate` datetime NOT NULL,
  `roomAddedBy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `room_info`
--

INSERT INTO `room_info` (`roomId`, `zone_info_zoneID`, `building_info_roomBuildingId`, `floor_info_roomFloorId`, `unit_info_roomUnitId`, `roomNumber`, `roomNote`, `roomStatus`, `roomTotalSeatNumber`, `roomAddedDate`, `roomAddedBy`) VALUES
(1, 1, 2, 1, 1, '301', 'room added', 1, 0, '2017-11-03 12:32:24', 9),
(2, 3, 10, 25, 4, '15', '', 1, 1, '2018-01-18 21:36:15', 9);

-- --------------------------------------------------------

--
-- Table structure for table `seat_info`
--

CREATE TABLE `seat_info` (
  `seatId` int(11) NOT NULL,
  `zone_info_zoneID` int(11) NOT NULL,
  `building_info_seatBuildingId` int(11) NOT NULL,
  `floor_info_seatFloorId` int(11) NOT NULL,
  `unit_info_seatUnitId` int(11) NOT NULL,
  `room_info_seatRoomId` int(11) NOT NULL,
  `seat_type_info_seatSeatTypeId` int(11) NOT NULL,
  `seat_type_info_seatRentAmount` double NOT NULL DEFAULT '0',
  `seat_status_info_seatSeatStausId` int(11) NOT NULL DEFAULT '1',
  `seatNumber` varchar(100) COLLATE utf16_bin NOT NULL,
  `seatNote` text COLLATE utf16_bin NOT NULL,
  `seatStatus` int(2) NOT NULL DEFAULT '1' COMMENT '0=InActive,1=Active',
  `seatAddedDate` datetime NOT NULL,
  `seatAddedBy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `seat_info`
--

INSERT INTO `seat_info` (`seatId`, `zone_info_zoneID`, `building_info_seatBuildingId`, `floor_info_seatFloorId`, `unit_info_seatUnitId`, `room_info_seatRoomId`, `seat_type_info_seatSeatTypeId`, `seat_type_info_seatRentAmount`, `seat_status_info_seatSeatStausId`, `seatNumber`, `seatNote`, `seatStatus`, `seatAddedDate`, `seatAddedBy`) VALUES
(1, 1, 7, 1, 1, 1, 1, 0, 1, '101213001', 'seat added.', 1, '2017-11-04 01:32:09', 9),
(2, 1, 0, 0, 0, 0, 1, 0, 2, '111256493', '', 1, '2017-11-08 14:28:55', 9),
(3, 1, 3, 2, 1, 1, 2, 0, 4, '4', 'note', 1, '2017-11-08 14:29:45', 9),
(4, 1, 1, 1, 1, 1, 2, 0, 1, '2', 'note', 1, '2017-11-08 14:32:09', 9),
(5, 1, 0, 0, 0, 0, 0, 0, 1, '5', '', 1, '2017-11-08 16:12:38', 9),
(6, 3, 1, 0, 0, 0, 0, 0, 1, '6', '', 1, '2017-11-08 16:18:29', 9),
(7, 3, 10, 25, 4, 2, 3, 200, 1, '15', '', 1, '2018-01-18 21:36:36', 9);

-- --------------------------------------------------------

--
-- Table structure for table `seat_status_info`
--

CREATE TABLE `seat_status_info` (
  `seatStausId` int(11) NOT NULL,
  `seatStatusTitle` varchar(100) COLLATE utf8_bin NOT NULL,
  `seatStatusStatus` int(2) NOT NULL DEFAULT '1' COMMENT '1=active, 0=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `seat_status_info`
--

INSERT INTO `seat_status_info` (`seatStausId`, `seatStatusTitle`, `seatStatusStatus`) VALUES
(1, 'Active', 1),
(2, 'Booked', 1),
(3, 'On hold', 1),
(4, 'Inactive', 1);

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

INSERT INTO `seat_type_info` (`seatTypeId`, `seatTypeName`, `seatRentAmount`, `rentAmount`, `profit`, `seatTypeStatus`) VALUES
(1, 'Booked', 700, 500, 200, 1),
(2, 'Type Name', 5000, 0, 0, 1),
(3, 'new', 200, 100, 100, 1);

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

-- --------------------------------------------------------

--
-- Table structure for table `student_image_info`
--

CREATE TABLE `student_image_info` (
  `sImgId` int(11) NOT NULL,
  `imageName` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `imageCaption` varchar(80) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `student_info_studentId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `student_image_info`
--

INSERT INTO `student_image_info` (`sImgId`, `imageName`, `imageCaption`, `student_info_studentId`) VALUES
(3, 'images/colour_people_icons_free_ubersocialmedia.jpg', 'caption 1', 10),
(4, 'images/_83351965_explorer273lincolnshirewoldssouthpicturebynicholassilkstone115.jpg', 'caption for 2', 10);

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `studentId` int(11) NOT NULL,
  `stdIdNo` varchar(80) COLLATE utf16_bin NOT NULL,
  `studentName` varchar(40) COLLATE utf16_bin NOT NULL,
  `studentGender` varchar(10) COLLATE utf16_bin NOT NULL,
  `studentBirthDate` date NOT NULL,
  `studentContactNo` varchar(14) COLLATE utf16_bin NOT NULL,
  `studentBloodGroup` varchar(5) COLLATE utf16_bin NOT NULL,
  `studentBirthRegNo` varchar(25) COLLATE utf16_bin NOT NULL,
  `studentNID` varchar(25) COLLATE utf16_bin NOT NULL,
  `student_admission_type_admissionTypeId` int(11) NOT NULL,
  `seat_info_studenCurrentSeatId` int(11) NOT NULL,
  `studentWalletAmount` double NOT NULL DEFAULT '0',
  `studentReligion` text COLLATE utf16_bin NOT NULL,
  `nationality` text COLLATE utf16_bin NOT NULL,
  `studentStatus` int(2) NOT NULL DEFAULT '1' COMMENT '1=Active,2=InActive,3=Complete,4=On Hold',
  `studentAddress` text COLLATE utf16_bin NOT NULL,
  `fatherName` varchar(40) COLLATE utf16_bin NOT NULL,
  `motherName` varchar(40) COLLATE utf16_bin NOT NULL,
  `localGurdianName` varchar(40) COLLATE utf16_bin NOT NULL,
  `localGurdianContactNo` int(11) NOT NULL,
  `localGurdianNID` int(11) NOT NULL,
  `localGurdianAddress` text COLLATE utf16_bin NOT NULL,
  `stdImage` varchar(400) COLLATE utf16_bin NOT NULL,
  `stdIdCard` varchar(400) COLLATE utf16_bin NOT NULL,
  `parentsImage` varchar(400) COLLATE utf16_bin NOT NULL,
  `parentsIdCard` varchar(400) COLLATE utf16_bin NOT NULL,
  `stdNote` text COLLATE utf16_bin NOT NULL,
  `studentAddedDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`studentId`, `stdIdNo`, `studentName`, `studentGender`, `studentBirthDate`, `studentContactNo`, `studentBloodGroup`, `studentBirthRegNo`, `studentNID`, `student_admission_type_admissionTypeId`, `seat_info_studenCurrentSeatId`, `studentWalletAmount`, `studentReligion`, `nationality`, `studentStatus`, `studentAddress`, `fatherName`, `motherName`, `localGurdianName`, `localGurdianContactNo`, `localGurdianNID`, `localGurdianAddress`, `stdImage`, `stdIdCard`, `parentsImage`, `parentsIdCard`, `stdNote`, `studentAddedDate`) VALUES
(1, '1', 'name', '', '0000-00-00', '0123456789', '', '', '123456789123', 1, 0, 450, '1', '', 1, '', 'father''s name', 'mother''s name', 'gurdian name ', 316641, 5952555, 'address', 'images/colour_people_icons_free_ubersocialmedia1.jpg', '', '', '', 'note', '2017-11-08'),
(2, '2', 'std name', '', '2017-11-23', '123456', '', '', '541546', 1, 0, -1100, '1', '', 3, '', 'name of father', 'name of mother', 'gurdian', 56565, 8656656, 'gurdian''s address', 'images/Nice-Image.png', '', '', '', 'note', '2017-11-08'),
(3, '3', '', '', '1970-01-01', '', '', '', '', 1, 0, -1100, '1', '', 1, '', '', '', '', 0, 0, '', 'images/_83351965_explorer273lincolnshirewoldssouthpicturebynicholassilkstone1.jpg', 'images/ID-card1.png', '', '', '', '2017-11-09'),
(4, '4', 'student', '', '2017-11-23', '123456', '', '', '123456', 1, 0, -1100, '1', '', 1, '', 'father', 'mother', 'gurdian', 123456, 123456, 'address', 'images/_83351965_explorer273lincolnshirewoldssouthpicturebynicholassilkstone2.jpg', 'images/ID-card2.png', '', '', 'note', '2017-11-09'),
(5, '5', 'students', '', '2017-11-30', '151646484', '', '', '151646484', 1, 0, -1100, '1', '', 1, '', 'name', 'name', 'name', 151646484, 151646484, 'address', 'images/colour_people_icons_free_ubersocialmedia2.jpg', 'images/ID-card3.png', 'images/trolltunga.jpg', 'images/Colorful-Balloons-Image.jpg', 'students note', '2017-11-09'),
(9, '1112564930009', 'student Name', '', '0000-00-00', '01759631254', '', '', '14785236985214756', 1, 2, 3650, '1', '', 1, '', 'father', 'mother', 'gurdian name', 1716012111, 2147483647, 'address', 'images/_83351965_explorer273lincolnshirewoldssouthpicturebynicholassilkstone114.jpg', 'images/back16.jpg', 'images/profile13.jpg', 'images/back17.jpg', 'note for new student', '0000-00-00'),
(10, '1012130010010', 'shamsia sharmin', '', '1991-06-25', '01759721013', '', '', '15963247865', 1, 1, 6000, '1', '', 1, '', 'Samsul Islam', 'Anwara Islam', 'Samsul Amin Raky', 1716112110, 2147483647, 'Address', 'images/41171.jpg', 'images/back171.jpg', 'images/_83351965_explorer273lincolnshirewoldssouthpicturebynicholassilkstone3.jpg', 'images/colour_people_icons_free_ubersocialmedia15.jpg', 'note', '2017-11-25'),
(11, '1012130010011', 'student Name', '', '1991-01-06', '01759631254', '3', '154789632546', '12365478963544', 5, 1, 0, '1', 'Bangladeshi', 1, 'address', 'father', 'mother', 'gurdian name', 2147483647, 2147483647, 'address', 'images/_83351965_explorer273lincolnshirewoldssouthpicturebynicholassilkstone7.jpg', 'images/ID-card9.png', 'images/411101.jpg', 'images/back1421.jpg', 'note', '2017-12-09'),
(12, '1012130010012', 'name', '', '2017-12-12', '01759631254', '1', '456866863', '12365478963544', 1, 1, 0, '1', 'bangladeshi', 1, 'address', 'father', 'mother', 'gurdian name', 2147483647, 2147483647, 'address', '', '', '', '', '', '2017-12-09'),
(13, '1012130010013', 'name', '', '2017-12-12', '01759631254', '1', '456866863', '12365478963544', 1, 1, 0, '1', 'bangladeshi', 1, 'address', 'father', 'mother', 'gurdian name', 2147483647, 2147483647, 'address', '', '', '', '', '', '2017-12-09'),
(14, '20014', 'student Name', '', '2017-12-26', '123456', '3', '13456494', '123456', 2, 4, 0, '2', 'Bangladesh', 1, '', 'father', 'mother', 'gurdian', 316641, 123456, '', '', '', '', '', '', '2017-12-26'),
(15, '20015', 'std name', '', '2018-01-03', '123456', '3', '13456494', '541546', 1, 4, 0, '3', 'Bangladesh', 1, '', 'father', 'mother', 'local gurdian name', 316641, 123456, '', '', '', '', '', '', '2018-01-03'),
(16, '1012130010016', 'name of student', '1', '0000-00-00', '123456', '1', '13456494', '123456', 7, 1, 0, '1', 'Bangladesh', 1, 'Address', 'father', 'mother', 'local gurdian name', 316641, 123456, 'Address', '', '', '', '', 'note', '0000-00-00'),
(17, '1012130010017', 'student Name', '1', '2018-01-04', '123456', '1', '13456494', '123456', 2, 1, 0, '2', 'Bangladesh', 1, 'Address', 'father name', 'mother''s name', 'local gurdian name', 316641, 123456, 'Local Gurdian''s Address', 'images/Nice-Image1.png', 'images/525784bfddc6b14.jpg', 'images/colour_people_icons_free_ubersocialmedia1.jpg', 'images/image-classification-15.png', 'Note', '2018-01-04'),
(18, '20018', 'name of student', '1', '2018-01-07', '0123456789', '2', '13456494', '123456', 7, 4, 0, '3', 'Bangladesh', 1, '', 'father', 'mother''s name', 'gurdian', 316641, 123456, '', '', '', '', '', '', '2018-01-07'),
(19, '1012130010019', 'std', '1', '2018-01-14', '01759631254', '8', '13456494', '14785236985214756', 2, 1, 0, '4', 'Bangladesh', 1, '', 'father name', 'mother', 'local gurdian name', 12345, 0, '', '', '', '', '', '', '2018-01-14'),
(20, '150020', 'students', '2', '2018-02-06', '993', '3', '13456494', '123456', 1, 7, 0, '2', 'Bangladesh', 1, '', 'father name', 'mother', 'gurdian', 316641, 123456, '', '', '', '', '', '', '2018-02-04'),
(21, '150021', 'students', '2', '2018-02-20', '0123456789', '3', '13456494', '123456', 1, 7, 0, '1', 'Bangladesh', 1, '', 'father name', 'mother', 'gurdian', 316641, 123456, '', '', '', '', '', '', '2018-02-04');

-- --------------------------------------------------------

--
-- Table structure for table `student_other_courses`
--

CREATE TABLE `student_other_courses` (
  `coursesId` int(11) NOT NULL,
  `courseInstitutionName` varchar(80) COLLATE utf8_bin NOT NULL,
  `courseName` varchar(30) COLLATE utf8_bin NOT NULL,
  `courseTime` time NOT NULL,
  `courseDays` date NOT NULL,
  `student_info_studentId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `student_other_courses`
--

INSERT INTO `student_other_courses` (`coursesId`, `courseInstitutionName`, `courseName`, `courseTime`, `courseDays`, `student_info_studentId`) VALUES
(1, 'IELTS', 'IELTS', '00:00:02', '0000-00-00', 11),
(2, '', '', '00:00:00', '0000-00-00', 12),
(3, '', '', '00:00:00', '0000-00-00', 13),
(4, '', '', '00:00:00', '0000-00-00', 14),
(5, '', '', '00:00:00', '0000-00-00', 15),
(6, '', '', '00:00:00', '0000-00-00', 16),
(7, '', '', '00:00:00', '0000-00-00', 17),
(8, '', '', '00:00:00', '0000-00-00', 18),
(9, '', '', '00:00:00', '0000-00-00', 19),
(10, '', '', '00:00:00', '0000-00-00', 20),
(11, '', '', '00:00:00', '0000-00-00', 21);

-- --------------------------------------------------------

--
-- Table structure for table `student_qualification`
--

CREATE TABLE `student_qualification` (
  `sQId` int(11) NOT NULL,
  `institutionName` varchar(40) COLLATE utf16_bin NOT NULL,
  `passingYear` year(4) NOT NULL,
  `group` varchar(10) COLLATE utf16_bin NOT NULL,
  `class` varchar(5) COLLATE utf16_bin NOT NULL,
  `classRoll` int(11) NOT NULL,
  `section` varchar(5) COLLATE utf16_bin NOT NULL,
  `classTime` time NOT NULL,
  `board` varchar(10) COLLATE utf16_bin NOT NULL,
  `semester` varchar(5) COLLATE utf16_bin NOT NULL,
  `sQInstitutionId` int(11) NOT NULL,
  `qualificationType` varchar(20) COLLATE utf16_bin NOT NULL COMMENT '1=SSC,2=HSC,3=Graduation,4=Post Graduation ',
  `student_info_studentId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `student_qualification`
--

INSERT INTO `student_qualification` (`sQId`, `institutionName`, `passingYear`, `group`, `class`, `classRoll`, `section`, `classTime`, `board`, `semester`, `sQInstitutionId`, `qualificationType`, `student_info_studentId`) VALUES
(10, 'School', 2008, 'science', '', 0, '', '00:00:00', 'Sylhet', '', 0, '1', 9),
(11, 'college', 2010, 'science', '', 0, '', '00:00:00', 'sylhet', '', 0, '2', 9),
(12, 'leading ', 2015, 'CSE', '', 0, '', '00:00:00', '', 'N/A', 1101020034, '3', 9),
(13, 'leading', 2017, 'MBA', '', 0, '', '00:00:00', '', '2nd', 1102543698, '4', 9),
(14, 'School', 2008, 'science', '', 0, '', '00:00:00', 'Sylhet', '', 0, '1', 10),
(15, 'college', 0000, 'science', '', 0, '', '00:00:00', 'sylhet', '', 0, '2', 10),
(16, 'leading ', 2015, 'CSE', '', 0, '', '00:00:00', '', 'N/A', 1101020034, '3', 10),
(17, 'School', 2008, 'science', '', 0, '', '00:00:00', 'Sylhet', '', 0, '1', 11),
(18, 'college', 2010, 'science', '2014', 0, '', '00:00:00', 'sylhet', '', 0, '2', 11),
(19, 'leading ', 2015, 'CSE', '', 0, '', '00:00:00', '', 'N/A', 1101020034, '3', 11),
(20, 'leading', 2017, 'MBA', '', 0, '', '00:00:00', '', '2nd', 1102543698, '4', 11),
(21, 'school', 2012, 'science', '', 0, 'A', '10:00:00', 'Sylhet', '', 0, '1', 14),
(22, 'college', 2014, '1', '2nd', 306, 'A', '10:00:00', 'Sylhet', '', 0, '2', 14),
(23, 'school', 2012, 'science', '8', 0, '', '00:00:00', 'sylhet', '', 0, '1', 15),
(24, 'school', 2012, 'science', '', 0, '', '00:00:00', 'sylhet', '', 0, '1', 16),
(25, 'school', 2012, 'arts', '', 0, '', '00:00:00', 'sylhet', '', 0, '1', 17),
(26, 'college', 2014, 'Science', '', 0, '', '00:00:00', 'Sylhet', '', 0, '2', 17),
(27, 'school', 2012, 'science', '', 0, '', '00:00:00', 'sylhet', '', 0, '1', 18),
(28, 'college', 2014, 'Science', '', 0, '', '00:00:00', 'Sylhet', '', 0, '2', 18),
(29, 'school', 2012, '3', '', 0, '', '00:00:00', '1', '', 0, '1', 19),
(30, 'college', 2014, '2', '', 0, '', '00:00:00', '1', '', 0, '2', 19),
(31, 'school', 2012, '1', '', 0, '', '00:00:00', '2', '', 0, '1', 20),
(32, 'school', 2012, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 21);

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

INSERT INTO `student_seat_info` (`sSeatId`, `monthelyRent`, `specialDiscount`, `additionalCharge`, `admissionFee`, `securityMoney`, `studentSeatAddedDate`, `studentExpireDate`, `student_info_studentId`, `student_info_studentIdNo`, `building_info_buildingId`, `floor_info_floorId`, `unit_info_unitId`, `room_info_roomId`, `seat_info_seatId`, `seat_info_studentSeatStatus`) VALUES
(1, 2000, 1200, 1500, 1480, 1300, '2017-11-11 00:45:12', NULL, 9, '', 0, 0, 0, 0, 1, 0),
(11, 2000, 1200, 1500, 0, 0, '2017-11-24 17:55:13', NULL, 9, '1112564930009', 0, 0, 0, 0, 2, 1),
(12, 2000, 300, 1500, 0, 0, '2017-11-25 01:14:40', NULL, 10, '1012130010010', 0, 0, 0, 0, 1, 1),
(13, 2000, 1000, 1000, 0, 0, '2017-12-09 01:50:17', NULL, 11, '1012130010011', 0, 0, 0, 0, 1, 1),
(14, 2000, 1200, 1500, 0, 0, '2017-12-09 01:56:37', NULL, 12, '1012130010012', 0, 0, 0, 0, 1, 1),
(15, 2000, 1200, 1500, 0, 0, '2017-12-09 01:58:08', NULL, 13, '1012130010013', 0, 0, 0, 0, 1, 1),
(16, 5000, 1200, 1500, 0, 0, '2017-12-26 15:23:44', NULL, 14, '20014', 0, 0, 0, 0, 4, 1),
(17, 5000, 1200, 1500, 0, 0, '2018-01-03 20:00:57', NULL, 15, '20015', 0, 0, 0, 0, 4, 1),
(18, 700, 1200, 1500, 0, 0, '2018-01-03 20:24:16', NULL, 16, '1012130010016', 0, 0, 0, 0, 1, 1),
(19, 700, 200, 500, 0, 0, '2018-01-04 20:49:50', NULL, 17, '1012130010017', 0, 0, 0, 0, 1, 1),
(20, 5000, 200, 500, 0, 0, '2018-01-07 00:37:58', NULL, 18, '20018', 0, 0, 0, 0, 4, 1),
(21, 700, 1200, 500, 0, 0, '2018-01-14 23:16:58', '0000-00-00', 19, '1012130010019', 0, 0, 0, 0, 1, 1),
(22, 200, 1000, 5000, 0, 0, '2018-02-04 22:57:15', '2020-01-09', 20, '150020', 0, 0, 0, 0, 7, 1),
(23, 200, 1000, 1500, 0, 0, '2018-02-04 23:25:46', '2018-02-04', 21, '150021', 0, 0, 0, 0, 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_working_info`
--

CREATE TABLE `student_working_info` (
  `sWId` int(11) NOT NULL,
  `companyName` varchar(30) COLLATE utf16_bin NOT NULL,
  `workId` int(11) NOT NULL,
  `designation` varchar(20) COLLATE utf16_bin NOT NULL,
  `officeLocation` text COLLATE utf16_bin NOT NULL,
  `student_info_studentId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `student_working_info`
--

INSERT INTO `student_working_info` (`sWId`, `companyName`, `workId`, `designation`, `officeLocation`, `student_info_studentId`) VALUES
(4, 'Star lab IT', 124563, 'Developer', 'Mirzajanggal, Sylhet', 9),
(5, 'Star lab IT', 124563, 'Developer', 'address office', 11),
(6, '', 0, '', '', 14),
(7, '', 0, '', '', 15);

-- --------------------------------------------------------

--
-- Table structure for table `transaction_info`
--

CREATE TABLE `transaction_info` (
  `transactionId` int(11) NOT NULL,
  `TransactionTypeId` tinyint(4) NOT NULL COMMENT '5=expense, <5=received payment, >5= return',
  `transactionRefferenceId` int(11) NOT NULL,
  `transactionAmount` double NOT NULL,
  `transactionPrevDue` double NOT NULL,
  `transactionDetails` text COLLATE utf8_bin NOT NULL,
  `zone_info_transactionZoneId` int(11) NOT NULL,
  `transactionDate` datetime NOT NULL,
  `transactionAddedBy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `transaction_info`
--

INSERT INTO `transaction_info` (`transactionId`, `TransactionTypeId`, `transactionRefferenceId`, `transactionAmount`, `transactionPrevDue`, `transactionDetails`, `zone_info_transactionZoneId`, `transactionDate`, `transactionAddedBy`) VALUES
(1, 1, 1, 5000, 0, 'note', 0, '2017-11-18 22:19:38', 9),
(2, 2, 3, 1000, 0, 'notes', 0, '2017-11-19 00:13:00', 9),
(3, 1, 4, 100, 0, 'note', 0, '2017-11-19 00:20:00', 9),
(4, 1, 5, 100, 0, 'note', 0, '2017-11-19 00:22:53', 9),
(5, 2, 6, 100, 0, 'note', 0, '2017-11-19 00:23:42', 9),
(6, 2, 7, 100, 0, 'note', 0, '2017-11-19 00:34:48', 9),
(7, 2, 8, 100, 0, 'note', 0, '2017-11-19 00:36:41', 9),
(8, 2, 9, 100, 0, 'note', 0, '2017-11-19 00:41:47', 9),
(9, 2, 10, 50, 0, '', 0, '2017-11-19 00:42:10', 9),
(10, 2, 11, 50, 0, '', 0, '2017-11-19 00:44:15', 9),
(11, 1, 12, 80, 0, '', 0, '2017-11-19 17:01:37', 9),
(12, 1, 13, 80, 0, 'note', 0, '2017-11-19 17:02:01', 9),
(13, 2, 14, 200, 0, 'note', 0, '2017-11-19 17:06:03', 9),
(14, 1, 15, 100, 0, 'note', 0, '2017-11-19 17:07:55', 9),
(15, 1, 16, 100, 0, 'note', 0, '2017-11-19 17:16:27', 9),
(16, 1, 17, 100, 0, 'note', 0, '2017-11-19 17:17:49', 9),
(18, 6, 2, 5000, 0, 'note', 0, '2017-11-19 20:50:54', 9);

-- --------------------------------------------------------

--
-- Table structure for table `transaction_type_info`
--

CREATE TABLE `transaction_type_info` (
  `transactionTypeId` int(11) NOT NULL,
  `transactionTypeTitle` varchar(50) COLLATE utf8_bin NOT NULL,
  `transactionTypeLink` varchar(100) COLLATE utf8_bin NOT NULL,
  `transactionTypeStatus` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `transaction_type_info`
--

INSERT INTO `transaction_type_info` (`transactionTypeId`, `transactionTypeTitle`, `transactionTypeLink`, `transactionTypeStatus`) VALUES
(1, 'Admission Fee', 'viewReceivePayment', 1),
(2, 'Bill Payment', 'viewReceivePayment', 1),
(3, 'Other', 'viewReceivePayment', 1),
(4, 'Security', 'viewReceivePayment', 1),
(5, 'Expense', 'viewExpense', 1),
(6, 'Return Admission Fee', 'viewReturnPayment', 1),
(7, 'Return Advance', 'viewReturnPayment', 1),
(8, 'Return Other', 'viewReturnPayment', 1),
(9, 'Return Security', 'viewReturnPayment', 1);

-- --------------------------------------------------------

--
-- Table structure for table `transfer_info`
--

CREATE TABLE `transfer_info` (
  `transferInfoId` int(11) NOT NULL,
  `transferFromStdSeatId` int(11) NOT NULL,
  `transferToStdSeatId` int(11) NOT NULL,
  `transferDate` datetime NOT NULL,
  `transferBy` int(11) NOT NULL,
  `transferStudent_info_student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `unit_info`
--

CREATE TABLE `unit_info` (
  `unitId` int(11) NOT NULL,
  `zone_info_zoneId` int(11) NOT NULL,
  `building_info_unitBuildingId` int(11) NOT NULL,
  `floor_info_unitFloorId` int(11) NOT NULL,
  `unitNumber` varchar(200) COLLATE utf8_bin NOT NULL,
  `unitNote` text COLLATE utf8_bin NOT NULL,
  `unitStatus` int(2) NOT NULL DEFAULT '1' COMMENT '0=Inactive, 1=Active',
  `unitTotalNumberRoom` int(11) NOT NULL,
  `unitAddedDate` datetime NOT NULL,
  `uniAddedBy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `unit_info`
--

INSERT INTO `unit_info` (`unitId`, `zone_info_zoneId`, `building_info_unitBuildingId`, `floor_info_unitFloorId`, `unitNumber`, `unitNote`, `unitStatus`, `unitTotalNumberRoom`, `unitAddedDate`, `uniAddedBy`) VALUES
(1, 1, 1, 2, '1', 'unit added', 1, 0, '2017-11-02 09:17:20', 9),
(2, 4, 3, 1, '2', 'new unit', 1, 0, '2017-11-02 09:17:20', 9),
(3, 3, 4, 2, '2', 'unit added', 1, 0, '2017-11-02 16:50:07', 9),
(4, 3, 10, 25, '15', '', 1, 1, '2018-01-18 21:36:04', 9);

-- --------------------------------------------------------

--
-- Table structure for table `zone_info`
--

CREATE TABLE `zone_info` (
  `zoneID` int(11) NOT NULL,
  `zoneTitle` varchar(40) COLLATE utf8_bin NOT NULL,
  `zoneAddress` text COLLATE utf8_bin NOT NULL,
  `zoneStatus` int(2) NOT NULL DEFAULT '1' COMMENT '0=InActive,1=Active',
  `zoneAddedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `zoneNote` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `zone_info`
--

INSERT INTO `zone_info` (`zoneID`, `zoneTitle`, `zoneAddress`, `zoneStatus`, `zoneAddedDate`, `zoneNote`) VALUES
(1, 'Sylhet', '', 1, '2017-11-09 15:32:18', 'City Hostel'),
(3, 'Shamsen Nagar', '', 1, '2017-11-09 15:20:07', 'Hostel'),
(4, 'Zone', '', 1, '2017-10-28 03:58:14', 'new zone ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`adminID`),
  ADD UNIQUE KEY `adminUserID` (`adminUserID`);

--
-- Indexes for table `admin_role`
--
ALTER TABLE `admin_role`
  ADD PRIMARY KEY (`roleID`);

--
-- Indexes for table `building_info`
--
ALTER TABLE `building_info`
  ADD PRIMARY KEY (`buildingId`);

--
-- Indexes for table `expense_field_info`
--
ALTER TABLE `expense_field_info`
  ADD PRIMARY KEY (`fieldId`);

--
-- Indexes for table `expense_info`
--
ALTER TABLE `expense_info`
  ADD PRIMARY KEY (`expenseId`);

--
-- Indexes for table `floor_info`
--
ALTER TABLE `floor_info`
  ADD PRIMARY KEY (`floorId`);

--
-- Indexes for table `gurdian_info`
--
ALTER TABLE `gurdian_info`
  ADD PRIMARY KEY (`gurdianId`);

--
-- Indexes for table `monthly_billing_info`
--
ALTER TABLE `monthly_billing_info`
  ADD PRIMARY KEY (`monthlyBillingInfoId`);

--
-- Indexes for table `monthly_billng_details`
--
ALTER TABLE `monthly_billng_details`
  ADD PRIMARY KEY (`monthlyBillngDetailsId`);

--
-- Indexes for table `payment_type_info`
--
ALTER TABLE `payment_type_info`
  ADD PRIMARY KEY (`paymentTypeInfoId`);

--
-- Indexes for table `received_payment_info`
--
ALTER TABLE `received_payment_info`
  ADD PRIMARY KEY (`receivedPaymentInfoId`);

--
-- Indexes for table `return_payment_info`
--
ALTER TABLE `return_payment_info`
  ADD PRIMARY KEY (`returnPaymentInfoId`);

--
-- Indexes for table `return_payment_type_info`
--
ALTER TABLE `return_payment_type_info`
  ADD PRIMARY KEY (`returnPaymentTypeInfoId`);

--
-- Indexes for table `room_info`
--
ALTER TABLE `room_info`
  ADD PRIMARY KEY (`roomId`);

--
-- Indexes for table `seat_info`
--
ALTER TABLE `seat_info`
  ADD PRIMARY KEY (`seatId`),
  ADD UNIQUE KEY `seatNumber` (`seatNumber`);

--
-- Indexes for table `seat_status_info`
--
ALTER TABLE `seat_status_info`
  ADD PRIMARY KEY (`seatStausId`);

--
-- Indexes for table `seat_type_info`
--
ALTER TABLE `seat_type_info`
  ADD PRIMARY KEY (`seatTypeId`);

--
-- Indexes for table `student_admission_type`
--
ALTER TABLE `student_admission_type`
  ADD PRIMARY KEY (`admissionTypeId`);

--
-- Indexes for table `student_image_info`
--
ALTER TABLE `student_image_info`
  ADD PRIMARY KEY (`sImgId`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`studentId`),
  ADD UNIQUE KEY `stdIdNo` (`stdIdNo`);

--
-- Indexes for table `student_other_courses`
--
ALTER TABLE `student_other_courses`
  ADD PRIMARY KEY (`coursesId`);

--
-- Indexes for table `student_qualification`
--
ALTER TABLE `student_qualification`
  ADD PRIMARY KEY (`sQId`);

--
-- Indexes for table `student_seat_info`
--
ALTER TABLE `student_seat_info`
  ADD PRIMARY KEY (`sSeatId`);

--
-- Indexes for table `student_working_info`
--
ALTER TABLE `student_working_info`
  ADD PRIMARY KEY (`sWId`);

--
-- Indexes for table `transaction_info`
--
ALTER TABLE `transaction_info`
  ADD PRIMARY KEY (`transactionId`);

--
-- Indexes for table `transaction_type_info`
--
ALTER TABLE `transaction_type_info`
  ADD PRIMARY KEY (`transactionTypeId`);

--
-- Indexes for table `transfer_info`
--
ALTER TABLE `transfer_info`
  ADD PRIMARY KEY (`transferInfoId`);

--
-- Indexes for table `unit_info`
--
ALTER TABLE `unit_info`
  ADD PRIMARY KEY (`unitId`);

--
-- Indexes for table `zone_info`
--
ALTER TABLE `zone_info`
  ADD PRIMARY KEY (`zoneID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `admin_role`
--
ALTER TABLE `admin_role`
  MODIFY `roleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `building_info`
--
ALTER TABLE `building_info`
  MODIFY `buildingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `expense_field_info`
--
ALTER TABLE `expense_field_info`
  MODIFY `fieldId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `expense_info`
--
ALTER TABLE `expense_info`
  MODIFY `expenseId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `floor_info`
--
ALTER TABLE `floor_info`
  MODIFY `floorId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `gurdian_info`
--
ALTER TABLE `gurdian_info`
  MODIFY `gurdianId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `monthly_billing_info`
--
ALTER TABLE `monthly_billing_info`
  MODIFY `monthlyBillingInfoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `monthly_billng_details`
--
ALTER TABLE `monthly_billng_details`
  MODIFY `monthlyBillngDetailsId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `payment_type_info`
--
ALTER TABLE `payment_type_info`
  MODIFY `paymentTypeInfoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `received_payment_info`
--
ALTER TABLE `received_payment_info`
  MODIFY `receivedPaymentInfoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `return_payment_info`
--
ALTER TABLE `return_payment_info`
  MODIFY `returnPaymentInfoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `return_payment_type_info`
--
ALTER TABLE `return_payment_type_info`
  MODIFY `returnPaymentTypeInfoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `room_info`
--
ALTER TABLE `room_info`
  MODIFY `roomId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `seat_info`
--
ALTER TABLE `seat_info`
  MODIFY `seatId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `seat_status_info`
--
ALTER TABLE `seat_status_info`
  MODIFY `seatStausId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `seat_type_info`
--
ALTER TABLE `seat_type_info`
  MODIFY `seatTypeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `student_admission_type`
--
ALTER TABLE `student_admission_type`
  MODIFY `admissionTypeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `student_image_info`
--
ALTER TABLE `student_image_info`
  MODIFY `sImgId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `studentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `student_other_courses`
--
ALTER TABLE `student_other_courses`
  MODIFY `coursesId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `student_qualification`
--
ALTER TABLE `student_qualification`
  MODIFY `sQId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `student_seat_info`
--
ALTER TABLE `student_seat_info`
  MODIFY `sSeatId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `student_working_info`
--
ALTER TABLE `student_working_info`
  MODIFY `sWId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `transaction_info`
--
ALTER TABLE `transaction_info`
  MODIFY `transactionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `transaction_type_info`
--
ALTER TABLE `transaction_type_info`
  MODIFY `transactionTypeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `transfer_info`
--
ALTER TABLE `transfer_info`
  MODIFY `transferInfoId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `unit_info`
--
ALTER TABLE `unit_info`
  MODIFY `unitId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `zone_info`
--
ALTER TABLE `zone_info`
  MODIFY `zoneID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
