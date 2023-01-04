-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Feb 12, 2018 at 07:10 AM
-- Server version: 5.5.54-38.6-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zakanaka_cityhostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE IF NOT EXISTS `admin_info` (
  `adminID` int(11) NOT NULL AUTO_INCREMENT,
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
  `adminUpdateDate` datetime NOT NULL,
  PRIMARY KEY (`adminID`),
  UNIQUE KEY `adminUserID` (`adminUserID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=21 ;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`adminID`, `adminName`, `adminEmail`, `adminContact`, `adminAddress`, `adminUserID`, `adminPassword`, `adminStatus`, `admin_role_roleID`, `zone_info_zoneID`, `adminNote`, `adminJoinDate`, `adminUpdateDate`) VALUES
(1, 'SatrlabITSatrlabIT', 'starlabTeam@gmail.com', '01719450855017194508', 'Zindabazar,Sylhet', 'starlabIT', 'd7ea52fb792bed01df7174c48605cf19', 1, 1, 1, '', '2017-11-24 16:39:00', '0000-00-00 00:00:00'),
(6, 'Excellent Store Keeper', 'storekeeper_excellent@starlabit.email', 'Rifat', 'Excellent 631ea72176464e6d2b8adda6c47a993a\n', 'stock', 'd7ea52fb792bed01df7174c48605cf19', 1, 3, 3, '', '2017-05-03 12:05:12', '0000-00-00 00:00:00'),
(7, 'admin admin', 'admin@excellent.com', '123456', 'address', 'StarLabIT1', 'd7ea52fb792bed01df7174c48605cf19', 1, 2, 3, '', '2017-03-22 12:27:38', '0000-00-00 00:00:00'),
(8, 'Mr. Rifat', 'rifat@jonota.com', '01727414166', 'Zindabazar', 'admin', 'd7ea52fb792bed01df7174c48605cf19', 1, 2, 3, '', '2017-06-30 19:24:59', '0000-00-00 00:00:00'),
(9, 'Excellent - 1 Manager', 'excellent1@starlabit.email', '123456', 'Zindabazar', 'manager', 'b4af804009cb036a4ccdc33431ef9ac9', 1, 4, 4, '', '2017-09-25 12:31:43', '2017-04-27 19:11:08'),
(10, 'Kayser Dipu', 'salimshoes@gmail.com', '01777505207', 'Zindabazar, Sylhet', 'dipu', 'e7723011542b53de5cada92580b10c20', 1, 4, 5, '', '2018-01-02 19:20:43', '0000-00-00 00:00:00'),
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

CREATE TABLE IF NOT EXISTS `admin_role` (
  `roleID` int(11) NOT NULL AUTO_INCREMENT,
  `roleName` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`roleID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5 ;

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

CREATE TABLE IF NOT EXISTS `building_info` (
  `buildingId` int(11) NOT NULL AUTO_INCREMENT,
  `zone_info_zoneId` int(11) NOT NULL,
  `buildingNumber` varchar(200) COLLATE utf8_bin NOT NULL,
  `buildingTitle` varchar(200) COLLATE utf8_bin NOT NULL,
  `buildingNote` text COLLATE utf8_bin NOT NULL,
  `buildingStatus` int(2) NOT NULL DEFAULT '1' COMMENT '0=InActive,1=Active',
  `buildingTotalFloorNumber` int(3) NOT NULL DEFAULT '0',
  `buildingAddedDate` datetime NOT NULL,
  `buildingAddedBy` int(11) NOT NULL,
  PRIMARY KEY (`buildingId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=14 ;

--
-- Dumping data for table `building_info`
--

INSERT INTO `building_info` (`buildingId`, `zone_info_zoneId`, `buildingNumber`, `buildingTitle`, `buildingNote`, `buildingStatus`, `buildingTotalFloorNumber`, `buildingAddedDate`, `buildingAddedBy`) VALUES
(10, 5, '108', 'Sylhet-08', 'Sylhet Zone, House no. 08', 1, 1, '2018-01-02 23:37:51', 10),
(11, 5, '120', 'Sylhet-20', 'Sylhet Zone, House no. 20', 1, 3, '2018-01-02 23:39:04', 10),
(12, 5, '122', 'Sylhet-22', 'Sylhet Zone, House no. 22', 1, 0, '2018-01-02 23:39:46', 10),
(13, 6, '201', 'Shamshernagar 01', 'Shamshernagar Zone, House no. 01', 1, 3, '2018-01-02 23:41:44', 10);

-- --------------------------------------------------------

--
-- Table structure for table `expense_field_info`
--

CREATE TABLE IF NOT EXISTS `expense_field_info` (
  `fieldId` int(11) NOT NULL AUTO_INCREMENT,
  `fieldTitle` varchar(100) COLLATE utf16_bin NOT NULL,
  `fieldStatus` int(11) NOT NULL DEFAULT '1' COMMENT '0=InActive,1=Active',
  `fieldDetails` text COLLATE utf16_bin NOT NULL,
  `fieldNote` text COLLATE utf16_bin NOT NULL,
  PRIMARY KEY (`fieldId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `expense_info`
--

CREATE TABLE IF NOT EXISTS `expense_info` (
  `expenseId` int(11) NOT NULL AUTO_INCREMENT,
  `expenseAmount` double NOT NULL,
  `expenseDetails` text COLLATE utf16_bin NOT NULL,
  `expenseNote` text COLLATE utf16_bin NOT NULL,
  `expenseStatus` int(11) NOT NULL DEFAULT '1' COMMENT '0=InActive,1=Active',
  `expense_field_info_fieldId` int(11) NOT NULL,
  `expenseAddedDate` datetime NOT NULL,
  `expenseAddedBy` int(11) NOT NULL,
  `zone_info_expenseZoneId` int(11) NOT NULL,
  PRIMARY KEY (`expenseId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf16 COLLATE=utf16_bin AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `floor_info`
--

CREATE TABLE IF NOT EXISTS `floor_info` (
  `floorId` int(11) NOT NULL AUTO_INCREMENT,
  `zone_info_zoneID` int(11) NOT NULL,
  `building_info_floorBuildingId` int(11) NOT NULL,
  `floorNumber` varchar(200) COLLATE utf8_bin NOT NULL,
  `floorNote` text COLLATE utf8_bin NOT NULL,
  `floorStatus` int(2) NOT NULL DEFAULT '1' COMMENT '0=InActive, 1=Active',
  `floorTotalNumberUnit` int(3) NOT NULL DEFAULT '0',
  `floorAddedDate` datetime NOT NULL,
  `floorAddedBy` int(11) NOT NULL,
  PRIMARY KEY (`floorId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=37 ;

--
-- Dumping data for table `floor_info`
--

INSERT INTO `floor_info` (`floorId`, `zone_info_zoneID`, `building_info_floorBuildingId`, `floorNumber`, `floorNote`, `floorStatus`, `floorTotalNumberUnit`, `floorAddedDate`, `floorAddedBy`) VALUES
(25, 5, 10, '01', 'Floor no. 01, House no 08, Sylhet zone', 1, 1, '2018-01-02 23:46:27', 10),
(26, 5, 10, '03', 'Floor no. 03, House no. 08, Sylhet Zone', 1, 1, '2018-01-02 23:47:51', 10),
(27, 5, 10, '04', 'Floor no. 04, House no. 08, Sylhet Zone', 1, 1, '2018-01-02 23:48:51', 10),
(28, 5, 11, '01', 'Floor no. 01, House no. 20, Sylhet Zone', 1, 1, '2018-01-02 23:54:11', 10),
(29, 5, 11, '02', 'Floor no. 02, House no. 20, Sylhet Zone', 1, 1, '2018-01-02 23:54:11', 10),
(30, 5, 11, '03', 'Floor no. 03, House no. 20, Sylhet Zone', 1, 1, '2018-01-02 23:54:11', 10),
(31, 5, 12, '01', 'Floor no. 01, House no. 22, Sylhet Zone', 1, 1, '2018-01-02 23:55:12', 10),
(32, 5, 12, '04', 'Floor no. 04, House no. 22, Sylhet Zone', 1, 1, '2018-01-02 23:55:12', 10),
(33, 5, 12, '05', 'Floor no. 05, House no. 22, Sylhet Zone', 1, 1, '2018-01-02 23:55:12', 10),
(34, 6, 13, '01', 'Floor no. 01, House no. 01, Shamshernagar Zone', 1, 3, '2018-01-02 23:57:10', 10),
(35, 6, 13, '02', 'Floor no. 02, House no. 01, Shamshernagar Zone', 1, 4, '2018-01-02 23:57:10', 10),
(36, 6, 13, '03', 'Floor no. 03, House no. 01, Shamshernagar Zone', 1, 4, '2018-01-02 23:57:10', 10);

-- --------------------------------------------------------

--
-- Table structure for table `gurdian_info`
--

CREATE TABLE IF NOT EXISTS `gurdian_info` (
  `gurdianId` int(11) NOT NULL AUTO_INCREMENT,
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
  `student_info_studentId` int(11) NOT NULL,
  PRIMARY KEY (`gurdianId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Dumping data for table `gurdian_info`
--

INSERT INTO `gurdian_info` (`gurdianId`, `stdFatherName`, `stdFatherContactNo`, `stdFatherOccupation`, `stdFatherNID`, `stdMotherName`, `stdMotherContactNo`, `stdMotherOccupation`, `stdMotherNID`, `gurdianAddress`, `husbandName`, `husbandContactNo`, `husbandOccupation`, `husbandNID`, `husbandAddress`, `localGurdianName`, `localGurdianContactNo`, `localGurdianOccupation`, `localGurdianNID`, `localGurdianRelationship`, `localGurdianAddress`, `student_info_studentId`) VALUES
(1, 'LATE. MD. ILIAS CHOWDHURY', '00000', 'N/A', 'N/A', 'FOYJUNNESA CHOWDHURY', 'FOYJUNNESA CHO', 'HOUSE WAIF', 'N/A', 'VILL: NIZCHOWKI P.O: HORIDHORPUR, P.S: NABIGONJ, DIST: HOBIGONJ', '', '', '', '', '', '', '', '', '', '', '', 0),
(2, 'Md.Abdul Hakim', '+8801629083890', 'PRIVATE SERVICE', 'N/A', 'Mst. Afia Begum', '+8801726746370', 'HOUSE WAIF', 'N/A', 'Mothurapur, Nobigonj, Digholbak, Hobigonj, Sylhet', '', '', '', '', '', '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `monthly_billing_info`
--

CREATE TABLE IF NOT EXISTS `monthly_billing_info` (
  `monthlyBillingInfoId` int(11) NOT NULL AUTO_INCREMENT,
  `monthlyBillingMonth` date NOT NULL,
  `zone_info_billZoneId` int(11) NOT NULL,
  `monthlyBillingInfoAddedDate` datetime NOT NULL,
  `monthlyBillingInfoStatus` int(2) NOT NULL DEFAULT '0' COMMENT '1=final, 0=pending',
  PRIMARY KEY (`monthlyBillingInfoId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `monthly_billng_details`
--

CREATE TABLE IF NOT EXISTS `monthly_billng_details` (
  `monthlyBillngDetailsId` int(11) NOT NULL AUTO_INCREMENT,
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
  `billingDetailsStatus` tinyint(2) NOT NULL COMMENT '0=pendinf, 1=paid, 2=half paid',
  PRIMARY KEY (`monthlyBillngDetailsId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `payment_type_info`
--

CREATE TABLE IF NOT EXISTS `payment_type_info` (
  `paymentTypeInfoId` int(11) NOT NULL AUTO_INCREMENT,
  `paymentTypeTitle` varchar(50) COLLATE utf8_bin NOT NULL,
  `paymentTypeInfoStatus` tinyint(2) NOT NULL,
  PRIMARY KEY (`paymentTypeInfoId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5 ;

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

CREATE TABLE IF NOT EXISTS `received_payment_info` (
  `receivedPaymentInfoId` int(11) NOT NULL AUTO_INCREMENT,
  `payment_type_info_paymentTypeId` int(11) NOT NULL,
  `receivedPaymentAmount` double NOT NULL,
  `student_info_paymentStudentId` int(11) NOT NULL,
  `receivedPaymentNote` text COLLATE utf8_bin NOT NULL,
  `zone_info_paymentZoneId` int(11) NOT NULL,
  `receivedPaymentDate` datetime NOT NULL,
  `receivedPaymentAddedBy` int(11) NOT NULL,
  PRIMARY KEY (`receivedPaymentInfoId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=25 ;

--
-- Dumping data for table `received_payment_info`
--

INSERT INTO `received_payment_info` (`receivedPaymentInfoId`, `payment_type_info_paymentTypeId`, `receivedPaymentAmount`, `student_info_paymentStudentId`, `receivedPaymentNote`, `zone_info_paymentZoneId`, `receivedPaymentDate`, `receivedPaymentAddedBy`) VALUES
(18, 1, 2000, 17, '', 5, '2018-01-06 20:33:50', 10),
(19, 4, 3000, 18, '', 5, '2018-01-06 20:59:44', 10),
(20, 1, 2000, 18, '', 5, '2018-01-07 11:57:27', 10),
(21, 1, 2000, 19, '', 5, '2018-01-07 12:26:57', 10),
(22, 4, 3000, 19, '', 5, '2018-01-07 12:27:11', 10),
(23, 1, 2000, 20, '', 5, '2018-01-21 12:34:02', 10),
(24, 4, 3000, 20, '', 5, '2018-01-21 12:34:16', 10);

-- --------------------------------------------------------

--
-- Table structure for table `return_payment_info`
--

CREATE TABLE IF NOT EXISTS `return_payment_info` (
  `returnPaymentInfoId` int(11) NOT NULL AUTO_INCREMENT,
  `return_payment_type_info_returnPaymentTypeId` int(11) NOT NULL,
  `returnPaymentAmount` double NOT NULL,
  `student_info_returnPaymentStudentId` int(11) NOT NULL,
  `returnPaymentNote` text COLLATE utf8_bin NOT NULL,
  `zone_info_returnPaymentZoneId` int(11) NOT NULL,
  `returnPaymentDate` datetime NOT NULL,
  `returnPaymentAddedBy` int(11) NOT NULL,
  PRIMARY KEY (`returnPaymentInfoId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `return_payment_type_info`
--

CREATE TABLE IF NOT EXISTS `return_payment_type_info` (
  `returnPaymentTypeInfoId` int(11) NOT NULL AUTO_INCREMENT,
  `returnPaymentTypeTitle` varchar(50) COLLATE utf8_bin NOT NULL,
  `returnPaymentTypeInfoStatus` tinyint(2) NOT NULL,
  PRIMARY KEY (`returnPaymentTypeInfoId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=10 ;

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

CREATE TABLE IF NOT EXISTS `room_info` (
  `roomId` int(11) NOT NULL AUTO_INCREMENT,
  `zone_info_zoneID` int(11) NOT NULL,
  `building_info_roomBuildingId` int(11) NOT NULL,
  `floor_info_roomFloorId` int(11) NOT NULL,
  `unit_info_roomUnitId` int(11) NOT NULL,
  `roomNumber` varchar(200) COLLATE utf8_bin NOT NULL,
  `roomNote` text COLLATE utf8_bin NOT NULL,
  `roomStatus` int(2) NOT NULL DEFAULT '1' COMMENT '0=InActive, 1=Active',
  `roomTotalSeatNumber` int(3) NOT NULL DEFAULT '0',
  `roomAddedDate` datetime NOT NULL,
  `roomAddedBy` int(11) NOT NULL,
  PRIMARY KEY (`roomId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=94 ;

--
-- Dumping data for table `room_info`
--

INSERT INTO `room_info` (`roomId`, `zone_info_zoneID`, `building_info_roomBuildingId`, `floor_info_roomFloorId`, `unit_info_roomUnitId`, `roomNumber`, `roomNote`, `roomStatus`, `roomTotalSeatNumber`, `roomAddedDate`, `roomAddedBy`) VALUES
(2, 5, 10, 25, 4, '101', 'Room no. 101, Unit no. 01, Floor no. 01, House no. 08, Sylhet Zone', 1, 3, '2018-01-03 00:16:15', 10),
(3, 5, 10, 25, 4, '102', 'Room no. 102, Unit no. 01, Floor no. 01, House no. 08, Sylhet Zone', 1, 2, '2018-01-03 00:16:41', 10),
(4, 5, 10, 25, 4, '103', 'Room no. 104, Unit no. 01, Floor no. 01, House no. 08, Sylhet Zone', 1, 3, '2018-01-03 00:17:09', 10),
(5, 5, 10, 25, 4, '104', '', 1, 2, '2018-01-03 00:18:02', 10),
(6, 5, 10, 25, 4, '105', '', 1, 3, '2018-01-03 00:18:19', 10),
(7, 5, 10, 25, 4, '106', '', 1, 3, '2018-01-03 00:18:35', 10),
(8, 5, 10, 25, 4, '107', '', 1, 3, '2018-01-03 00:18:49', 10),
(9, 5, 10, 25, 4, '108', '', 1, 3, '2018-01-03 00:19:23', 10),
(10, 5, 10, 25, 4, '109', '', 1, 3, '2018-01-03 00:19:43', 10),
(11, 5, 10, 25, 4, '110', '', 1, 1, '2018-01-03 00:20:03', 10),
(12, 5, 10, 26, 5, '301', '', 1, 3, '2018-01-03 00:20:32', 10),
(13, 5, 10, 26, 5, '302', '', 1, 3, '2018-01-03 00:20:49', 10),
(14, 5, 10, 26, 5, '303', '', 1, 3, '2018-01-03 00:21:04', 10),
(15, 5, 10, 27, 6, '401', '', 1, 3, '2018-01-03 00:21:23', 10),
(16, 5, 10, 27, 6, '402', '', 1, 3, '2018-01-03 00:21:41', 10),
(17, 5, 10, 27, 6, '403', '', 1, 3, '2018-01-03 00:21:59', 10),
(18, 5, 10, 27, 6, '404', '', 1, 3, '2018-01-03 00:22:16', 10),
(19, 5, 10, 27, 6, '405', '', 1, 3, '2018-01-03 00:22:30', 10),
(20, 5, 10, 27, 6, '406', '', 1, 3, '2018-01-03 00:22:47', 10),
(21, 5, 10, 27, 6, '407', '', 1, 1, '2018-01-03 00:23:01', 10),
(22, 5, 11, 28, 7, '101', '', 1, 3, '2018-01-03 00:23:26', 10),
(23, 5, 11, 28, 7, '102', '', 1, 3, '2018-01-03 00:23:47', 10),
(24, 5, 11, 28, 7, '103', '', 1, 3, '2018-01-03 00:24:17', 10),
(25, 5, 11, 28, 7, '104', '', 1, 3, '2018-01-03 00:24:34', 10),
(26, 5, 11, 28, 7, '105', '', 1, 1, '2018-01-03 00:24:53', 10),
(27, 5, 11, 28, 7, '106', '', 1, 1, '2018-01-03 00:25:09', 10),
(28, 5, 11, 29, 8, '201', '', 1, 1, '2018-01-03 00:25:27', 10),
(29, 5, 11, 29, 8, '202', '', 1, 4, '2018-01-03 00:25:41', 10),
(30, 5, 11, 29, 8, '203', '', 1, 3, '2018-01-03 00:26:05', 10),
(31, 5, 11, 29, 8, '204', '', 1, 3, '2018-01-03 00:26:31', 10),
(32, 5, 11, 29, 8, '205', '', 1, 3, '2018-01-03 00:26:47', 10),
(33, 5, 11, 29, 8, '206', '', 1, 1, '2018-01-03 00:27:01', 10),
(34, 5, 11, 30, 9, '301', '', 1, 1, '2018-01-03 00:27:22', 10),
(35, 5, 11, 30, 9, '302', '', 1, 4, '2018-01-03 00:27:39', 10),
(36, 5, 11, 30, 9, '303', '', 1, 3, '2018-01-03 00:27:52', 10),
(37, 5, 11, 30, 9, '304', '', 1, 3, '2018-01-03 00:28:08', 10),
(38, 5, 11, 30, 9, '305', '', 1, 3, '2018-01-03 00:28:25', 10),
(39, 5, 11, 30, 9, '306', '', 1, 1, '2018-01-03 00:28:40', 10),
(40, 5, 12, 31, 10, '101', '', 1, 3, '2018-01-03 00:31:01', 10),
(41, 5, 12, 31, 10, '102', '', 1, 2, '2018-01-03 00:31:22', 10),
(42, 5, 12, 31, 10, '103', '', 1, 3, '2018-01-03 00:31:50', 10),
(43, 5, 12, 32, 11, '401', '', 1, 3, '2018-01-03 00:32:29', 10),
(44, 5, 12, 32, 11, '402', '', 1, 2, '2018-01-03 00:32:47', 10),
(45, 5, 12, 32, 11, '403', '', 1, 3, '2018-01-03 00:33:06', 10),
(46, 5, 12, 33, 12, '501', '', 1, 3, '2018-01-03 00:35:15', 10),
(47, 5, 12, 33, 12, '502', '', 1, 2, '2018-01-03 00:35:28', 10),
(48, 5, 12, 33, 12, '503', '', 1, 3, '2018-01-03 00:35:44', 10),
(49, 6, 13, 34, 13, '101', '', 1, 0, '2018-01-03 00:44:09', 10),
(50, 6, 13, 34, 13, '102', '', 1, 0, '2018-01-03 00:44:30', 10),
(51, 6, 13, 34, 13, '103', '', 1, 0, '2018-01-03 00:44:49', 10),
(52, 6, 13, 34, 13, '104', '', 1, 0, '2018-01-03 00:45:33', 10),
(53, 6, 13, 34, 14, '105', '', 1, 0, '2018-01-03 00:45:52', 10),
(54, 6, 13, 34, 14, '106', '', 1, 0, '2018-01-03 00:46:07', 10),
(55, 6, 13, 34, 14, '107', '', 1, 0, '2018-01-03 00:47:06', 10),
(56, 6, 13, 34, 14, '108', '', 1, 0, '2018-01-03 00:47:24', 10),
(57, 6, 13, 34, 15, '109', '', 1, 0, '2018-01-03 00:48:54', 10),
(58, 6, 13, 34, 15, '110', '', 1, 0, '2018-01-03 00:49:11', 10),
(59, 6, 13, 34, 15, '111', '', 1, 0, '2018-01-03 00:49:36', 10),
(60, 6, 13, 34, 15, '112', '', 1, 0, '2018-01-03 00:49:50', 10),
(61, 6, 13, 35, 16, '201', '', 1, 0, '2018-01-03 00:50:24', 10),
(62, 6, 13, 35, 16, '202', '', 1, 0, '2018-01-03 00:50:47', 10),
(63, 6, 13, 35, 16, '203', '', 1, 0, '2018-01-03 00:51:06', 10),
(64, 6, 13, 35, 16, '204', '', 1, 0, '2018-01-03 00:52:17', 10),
(65, 6, 13, 35, 17, '205', '', 1, 0, '2018-01-03 00:52:38', 10),
(66, 6, 13, 35, 17, '206', '', 1, 0, '2018-01-03 00:53:04', 10),
(67, 6, 13, 35, 17, '207', '', 1, 0, '2018-01-03 00:53:21', 10),
(68, 6, 13, 35, 17, '208', '', 1, 0, '2018-01-03 00:53:39', 10),
(69, 6, 13, 35, 18, '209', '', 1, 0, '2018-01-03 00:53:59', 10),
(70, 6, 13, 35, 18, '209', '', 1, 0, '2018-01-03 00:54:17', 10),
(71, 6, 13, 35, 18, '210', '', 1, 0, '2018-01-03 00:54:36', 10),
(72, 6, 13, 35, 18, '211', '', 1, 0, '2018-01-03 00:54:57', 10),
(73, 6, 13, 35, 18, '212', '', 1, 0, '2018-01-03 00:55:17', 10),
(74, 6, 13, 35, 19, '213', '', 1, 0, '2018-01-03 00:55:41', 10),
(75, 6, 13, 35, 19, '214', '', 1, 0, '2018-01-03 00:56:01', 10),
(76, 6, 13, 35, 19, '215', '', 1, 0, '2018-01-03 00:56:19', 10),
(77, 6, 13, 35, 19, '216', '', 1, 0, '2018-01-03 00:56:37', 10),
(78, 6, 13, 36, 20, '301', '', 1, 0, '2018-01-03 00:58:52', 10),
(79, 6, 13, 36, 20, '302', '', 1, 0, '2018-01-03 00:59:11', 10),
(80, 6, 13, 36, 20, '303', '', 1, 0, '2018-01-03 00:59:28', 10),
(81, 6, 13, 36, 20, '304', '', 1, 0, '2018-01-03 00:59:48', 10),
(82, 6, 13, 36, 21, '305', '', 1, 0, '2018-01-03 01:00:05', 10),
(83, 6, 13, 36, 21, '306', '', 1, 0, '2018-01-03 01:00:25', 10),
(84, 6, 13, 36, 21, '307', '', 1, 0, '2018-01-03 01:00:50', 10),
(85, 6, 13, 36, 21, '308', '', 1, 0, '2018-01-03 01:01:13', 10),
(86, 6, 13, 36, 22, '309', '', 1, 0, '2018-01-03 01:01:40', 10),
(87, 6, 13, 36, 22, '310', '', 1, 0, '2018-01-03 01:01:57', 10),
(88, 6, 13, 36, 22, '311', '', 1, 0, '2018-01-03 01:02:14', 10),
(89, 6, 13, 36, 22, '304', '', 1, 0, '2018-01-03 01:02:52', 10),
(90, 6, 13, 36, 23, '313', '', 1, 0, '2018-01-03 01:03:12', 10),
(91, 6, 13, 36, 23, '314', '', 1, 0, '2018-01-03 01:03:34', 10),
(92, 6, 13, 36, 23, '315', '', 1, 0, '2018-01-03 01:04:06', 10),
(93, 6, 13, 36, 23, '316', '', 1, 0, '2018-01-03 01:04:22', 10);

-- --------------------------------------------------------

--
-- Table structure for table `seat_info`
--

CREATE TABLE IF NOT EXISTS `seat_info` (
  `seatId` int(11) NOT NULL AUTO_INCREMENT,
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
  `seatAddedBy` int(11) NOT NULL,
  PRIMARY KEY (`seatId`),
  UNIQUE KEY `seatNumber` (`seatNumber`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf16 COLLATE=utf16_bin AUTO_INCREMENT=130 ;

--
-- Dumping data for table `seat_info`
--

INSERT INTO `seat_info` (`seatId`, `zone_info_zoneID`, `building_info_seatBuildingId`, `floor_info_seatFloorId`, `unit_info_seatUnitId`, `room_info_seatRoomId`, `seat_type_info_seatSeatTypeId`, `seat_type_info_seatRentAmount`, `seat_status_info_seatSeatStausId`, `seatNumber`, `seatNote`, `seatStatus`, `seatAddedDate`, `seatAddedBy`) VALUES
(7, 5, 10, 25, 4, 2, 6, 3600, 1, '001', 'Test Seat', 1, '2018-01-03 11:16:27', 10),
(8, 5, 10, 25, 4, 2, 6, 3600, 1, '002', '', 1, '2018-01-04 12:49:16', 10),
(9, 5, 10, 25, 4, 3, 6, 3600, 1, '003', '', 1, '2018-01-04 12:49:47', 10),
(10, 5, 10, 25, 4, 3, 6, 3600, 1, '004', '', 1, '2018-01-04 12:50:08', 10),
(11, 5, 10, 25, 4, 4, 6, 3600, 1, '005', '', 1, '2018-01-04 12:50:42', 10),
(12, 5, 10, 25, 4, 4, 6, 3600, 1, '006', '', 1, '2018-01-04 12:51:08', 10),
(13, 5, 10, 25, 4, 4, 6, 3600, 1, '007', '', 1, '2018-01-04 12:51:30', 10),
(14, 5, 10, 25, 4, 5, 6, 3600, 1, '008', '', 1, '2018-01-04 12:51:58', 10),
(15, 5, 10, 25, 4, 5, 6, 3600, 1, '009', '', 1, '2018-01-04 12:52:25', 10),
(16, 5, 10, 25, 4, 6, 6, 3600, 1, '010', '', 1, '2018-01-04 12:52:59', 10),
(17, 5, 10, 25, 4, 6, 6, 3600, 1, '011', '', 1, '2018-01-04 12:53:23', 10),
(18, 5, 10, 25, 4, 6, 6, 3600, 1, '012', '', 1, '2018-01-04 12:53:47', 10),
(20, 5, 10, 25, 4, 7, 6, 3600, 1, '013', '', 1, '2018-01-04 12:55:04', 10),
(21, 5, 10, 25, 4, 7, 6, 3600, 1, '014', '', 1, '2018-01-04 12:56:17', 10),
(22, 5, 10, 25, 4, 7, 6, 3600, 1, '015', '', 1, '2018-01-04 12:57:08', 10),
(23, 5, 10, 25, 4, 8, 6, 3600, 1, '016', '', 1, '2018-01-04 12:57:36', 10),
(24, 5, 10, 25, 4, 8, 6, 3600, 1, '017', '', 1, '2018-01-04 12:58:02', 10),
(25, 5, 10, 25, 4, 8, 6, 3600, 1, '018', '', 1, '2018-01-04 12:58:37', 10),
(26, 5, 10, 25, 4, 9, 7, 3200, 1, '019', '', 1, '2018-01-04 12:59:07', 10),
(27, 5, 10, 25, 4, 9, 7, 3200, 2, '020', '', 1, '2018-01-04 12:59:34', 10),
(28, 5, 10, 25, 4, 9, 7, 3200, 1, '021', '', 1, '2018-01-04 13:07:13', 10),
(29, 5, 10, 25, 4, 10, 7, 3200, 1, '022', '', 1, '2018-01-04 13:07:40', 10),
(30, 5, 10, 25, 4, 10, 7, 3200, 1, '023', '', 1, '2018-01-04 13:08:02', 10),
(31, 5, 10, 25, 4, 10, 7, 3200, 1, '024', '', 1, '2018-01-04 13:08:24', 10),
(32, 5, 10, 25, 4, 11, 7, 3200, 1, '025', '', 1, '2018-01-04 13:09:29', 10),
(33, 5, 10, 26, 5, 12, 6, 3600, 1, '026', '', 1, '2018-01-04 13:10:54', 10),
(34, 5, 10, 26, 5, 12, 6, 3600, 1, '027', '', 1, '2018-01-04 13:11:18', 10),
(35, 5, 10, 26, 5, 12, 6, 3600, 1, '028', '', 1, '2018-01-04 13:11:41', 10),
(36, 5, 10, 26, 5, 13, 6, 3600, 1, '029', '', 1, '2018-01-04 13:12:04', 10),
(37, 5, 10, 26, 5, 13, 6, 3600, 1, '030', '', 1, '2018-01-04 13:12:29', 10),
(38, 5, 10, 26, 5, 13, 6, 3600, 1, '031', '', 1, '2018-01-04 13:12:48', 10),
(39, 5, 10, 26, 5, 14, 6, 3600, 1, '032', '', 1, '2018-01-04 13:13:26', 10),
(40, 5, 10, 26, 5, 14, 6, 3600, 1, '033', '', 1, '2018-01-04 13:13:47', 10),
(41, 5, 10, 26, 5, 14, 6, 3600, 1, '034', '', 1, '2018-01-04 13:14:11', 10),
(42, 5, 10, 27, 6, 15, 6, 3600, 1, '035', '', 1, '2018-01-04 13:14:47', 10),
(43, 5, 10, 27, 6, 15, 6, 3600, 1, '036', '', 1, '2018-01-04 13:15:06', 10),
(44, 5, 10, 27, 6, 15, 6, 3600, 1, '037', '', 1, '2018-01-04 13:15:32', 10),
(45, 5, 10, 27, 6, 16, 6, 3600, 1, '038', '', 1, '2018-01-04 13:15:59', 10),
(46, 5, 10, 27, 6, 16, 6, 3600, 1, '039', '', 1, '2018-01-04 13:17:08', 10),
(47, 5, 10, 27, 6, 16, 6, 3600, 1, '040', '', 1, '2018-01-04 13:17:36', 10),
(48, 5, 10, 27, 6, 17, 6, 3600, 1, '041', '', 1, '2018-01-04 13:18:06', 10),
(49, 5, 10, 27, 6, 17, 6, 3600, 1, '042', '', 1, '2018-01-04 13:18:41', 10),
(50, 5, 10, 27, 6, 17, 6, 3600, 1, '043', '', 1, '2018-01-04 13:19:04', 10),
(51, 5, 10, 27, 6, 18, 6, 3600, 1, '044', '', 1, '2018-01-04 13:19:46', 10),
(52, 5, 10, 27, 6, 18, 6, 3600, 1, '045', '', 1, '2018-01-04 13:20:14', 10),
(53, 5, 10, 27, 6, 18, 6, 3600, 1, '046', '', 1, '2018-01-04 13:20:49', 10),
(54, 5, 10, 27, 6, 19, 6, 3600, 1, '047', '', 1, '2018-01-04 13:21:18', 10),
(55, 5, 10, 27, 6, 19, 6, 3600, 1, '048', '', 1, '2018-01-04 13:21:40', 10),
(56, 5, 10, 27, 6, 19, 6, 3600, 1, '049', '', 1, '2018-01-04 13:22:12', 10),
(57, 5, 10, 27, 6, 20, 6, 3600, 1, '050', '', 1, '2018-01-04 13:22:43', 10),
(58, 5, 10, 27, 6, 20, 6, 3600, 1, '051', '', 1, '2018-01-04 13:23:25', 10),
(59, 5, 10, 27, 6, 20, 6, 3600, 1, '052', '', 1, '2018-01-04 13:24:03', 10),
(60, 5, 10, 27, 6, 21, 10, 5100, 1, '053', '', 1, '2018-01-04 13:24:32', 10),
(61, 5, 11, 25, 4, 2, 7, 3200, 1, '054', '', 1, '2018-01-05 19:30:53', 10),
(62, 5, 11, 28, 7, 22, 7, 3200, 1, '055', '', 1, '2018-01-05 19:31:36', 10),
(63, 5, 11, 28, 7, 22, 7, 3200, 1, '056', '', 1, '2018-01-05 19:32:13', 10),
(64, 5, 11, 28, 7, 22, 7, 3200, 1, '057', '', 1, '2018-01-05 19:32:49', 10),
(65, 5, 11, 28, 7, 23, 8, 3100, 1, '058', '', 1, '2018-01-05 19:33:18', 10),
(66, 5, 11, 28, 7, 23, 8, 3100, 1, '059', '', 1, '2018-01-05 19:33:40', 10),
(67, 5, 11, 28, 7, 23, 8, 3100, 1, '060', '', 1, '2018-01-05 19:34:07', 10),
(68, 5, 11, 28, 7, 24, 7, 3200, 1, '061', '', 1, '2018-01-05 19:35:02', 10),
(69, 5, 11, 28, 7, 24, 7, 3200, 1, '062', '', 1, '2018-01-05 19:35:24', 10),
(70, 5, 11, 28, 7, 24, 7, 3200, 1, '063', '', 1, '2018-01-05 19:35:49', 10),
(71, 5, 11, 28, 7, 25, 7, 3200, 1, '064', '', 1, '2018-01-05 19:36:31', 10),
(72, 5, 11, 28, 7, 25, 7, 3200, 1, '065', '', 1, '2018-01-05 19:36:56', 10),
(73, 5, 11, 28, 7, 25, 7, 3200, 1, '066', '', 1, '2018-01-05 19:37:27', 10),
(74, 5, 11, 28, 7, 26, 10, 5100, 1, '067', '', 1, '2018-01-05 19:37:52', 10),
(75, 5, 11, 28, 7, 27, 7, 3200, 1, '123', '', 1, '2018-01-05 19:38:39', 10),
(76, 5, 11, 29, 8, 28, 6, 3600, 1, '068', '', 1, '2018-01-05 19:39:51', 10),
(77, 5, 11, 29, 8, 29, 9, 2900, 1, '069', '', 1, '2018-01-05 19:40:28', 10),
(78, 5, 11, 29, 8, 29, 7, 3200, 1, '070', '', 1, '2018-01-05 19:41:06', 10),
(79, 5, 11, 29, 8, 29, 7, 3200, 1, '071', '', 1, '2018-01-05 19:41:38', 10),
(80, 5, 11, 29, 8, 29, 7, 3200, 1, '072', '', 1, '2018-01-05 19:42:23', 10),
(81, 5, 11, 29, 8, 30, 9, 2900, 1, '073', '', 1, '2018-01-05 19:42:50', 10),
(82, 5, 11, 29, 8, 30, 9, 2900, 1, '074', '', 1, '2018-01-05 19:43:22', 10),
(83, 5, 11, 29, 8, 30, 9, 2900, 1, '075', '', 1, '2018-01-05 19:43:45', 10),
(84, 5, 11, 29, 8, 31, 9, 2900, 1, '076', '', 1, '2018-01-05 19:44:19', 10),
(85, 5, 11, 29, 8, 31, 9, 2900, 1, '077', '', 1, '2018-01-05 19:44:40', 10),
(86, 5, 11, 29, 8, 31, 9, 2900, 1, '078', '', 1, '2018-01-05 19:45:12', 10),
(87, 5, 11, 29, 8, 32, 9, 2900, 1, '079', '', 1, '2018-01-05 19:45:46', 10),
(88, 5, 11, 29, 8, 32, 9, 2900, 1, '080', '', 1, '2018-01-05 19:46:09', 10),
(89, 5, 11, 29, 8, 32, 9, 2900, 1, '081', '', 1, '2018-01-05 19:46:34', 10),
(90, 5, 11, 29, 8, 33, 10, 5100, 1, '082', '', 1, '2018-01-05 19:46:58', 10),
(91, 5, 11, 30, 9, 34, 7, 3200, 1, '083', '', 1, '2018-01-05 19:47:42', 10),
(92, 5, 11, 30, 9, 35, 7, 3200, 1, '084', '', 1, '2018-01-05 19:48:08', 10),
(93, 5, 11, 30, 9, 35, 7, 3200, 1, '085', '', 1, '2018-01-05 19:48:31', 10),
(94, 5, 11, 30, 9, 35, 7, 3200, 1, '086', '', 1, '2018-01-05 19:48:55', 10),
(95, 5, 11, 30, 9, 35, 7, 3200, 1, '087', '', 1, '2018-01-05 19:49:41', 10),
(96, 5, 11, 30, 9, 36, 8, 3100, 1, '088', '', 1, '2018-01-05 19:50:05', 10),
(97, 5, 11, 30, 9, 36, 8, 3100, 1, '089', '', 1, '2018-01-05 19:50:28', 10),
(98, 5, 11, 30, 9, 36, 8, 3100, 1, '090', '', 1, '2018-01-05 19:50:52', 10),
(99, 5, 11, 30, 9, 37, 7, 3200, 1, '091', '', 1, '2018-01-05 19:51:20', 10),
(100, 5, 11, 30, 9, 37, 7, 3200, 1, '092', '', 1, '2018-01-05 19:51:47', 10),
(101, 5, 11, 30, 9, 37, 7, 3200, 1, '093', '', 1, '2018-01-05 19:52:14', 10),
(102, 5, 11, 30, 9, 38, 8, 3100, 1, '094', '', 1, '2018-01-05 19:53:03', 10),
(103, 5, 11, 30, 9, 38, 7, 3200, 1, '095', '', 1, '2018-01-05 19:53:29', 10),
(104, 5, 11, 30, 9, 38, 7, 3200, 1, '096', '', 1, '2018-01-05 19:53:52', 10),
(105, 5, 11, 30, 9, 39, 10, 5100, 1, '097', '', 1, '2018-01-05 19:54:45', 10),
(106, 5, 12, 31, 10, 40, 6, 3600, 1, '098', '', 1, '2018-01-05 19:55:45', 10),
(107, 5, 12, 31, 10, 40, 6, 3600, 1, '099', '', 1, '2018-01-05 19:56:14', 10),
(108, 5, 12, 31, 10, 40, 6, 3600, 1, '100', '', 1, '2018-01-05 19:56:37', 10),
(109, 5, 12, 31, 10, 41, 6, 3600, 1, '101', '', 1, '2018-01-05 19:57:04', 10),
(110, 5, 12, 31, 10, 41, 6, 3600, 1, '102', '', 1, '2018-01-05 19:57:29', 10),
(111, 5, 12, 31, 10, 42, 6, 3600, 1, '103', '', 1, '2018-01-05 19:57:52', 10),
(112, 5, 12, 31, 10, 42, 6, 3600, 1, '104', '', 1, '2018-01-05 19:58:27', 10),
(113, 5, 12, 31, 10, 42, 6, 3600, 1, '105', '', 1, '2018-01-05 19:58:53', 10),
(114, 5, 12, 32, 11, 43, 6, 3600, 1, '106', '', 1, '2018-01-05 19:59:27', 10),
(115, 5, 12, 32, 11, 43, 6, 3600, 1, '107', '', 1, '2018-01-05 19:59:50', 10),
(116, 5, 12, 32, 11, 43, 6, 3600, 1, '108', '', 1, '2018-01-05 20:00:21', 10),
(117, 5, 12, 32, 11, 44, 6, 3600, 1, '110', '', 1, '2018-01-05 20:01:17', 10),
(118, 5, 12, 32, 11, 44, 6, 3600, 1, '111', '', 1, '2018-01-05 20:01:38', 10),
(119, 5, 12, 32, 11, 45, 6, 3600, 1, '112', '', 1, '2018-01-05 20:02:05', 10),
(120, 5, 12, 32, 11, 45, 6, 3600, 1, '113', '', 1, '2018-01-05 20:02:36', 10),
(121, 5, 12, 32, 11, 45, 6, 3600, 1, '114', '', 1, '2018-01-05 20:03:07', 10),
(122, 5, 12, 33, 12, 46, 6, 3600, 1, '115', '', 1, '2018-01-05 20:03:33', 10),
(123, 5, 12, 33, 12, 46, 6, 3600, 1, '116', '', 1, '2018-01-05 20:03:53', 10),
(124, 5, 12, 33, 12, 46, 6, 3600, 1, '117', '', 1, '2018-01-05 20:04:13', 10),
(125, 5, 12, 33, 12, 47, 6, 3600, 1, '118', '', 1, '2018-01-05 20:04:38', 10),
(126, 5, 12, 33, 12, 47, 6, 3600, 1, '119', '', 1, '2018-01-05 20:05:07', 10),
(127, 5, 12, 33, 12, 48, 6, 3600, 1, '120', '', 1, '2018-01-05 20:05:41', 10),
(128, 5, 12, 33, 12, 48, 6, 3600, 1, '121', '', 1, '2018-01-05 20:06:07', 10),
(129, 5, 12, 33, 12, 48, 6, 3600, 1, '122', '', 1, '2018-01-05 20:06:31', 10);

-- --------------------------------------------------------

--
-- Table structure for table `seat_status_info`
--

CREATE TABLE IF NOT EXISTS `seat_status_info` (
  `seatStausId` int(11) NOT NULL AUTO_INCREMENT,
  `seatStatusTitle` varchar(100) COLLATE utf8_bin NOT NULL,
  `seatStatusStatus` int(2) NOT NULL DEFAULT '1' COMMENT '1=active, 0=Inactive',
  PRIMARY KEY (`seatStausId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5 ;

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

CREATE TABLE IF NOT EXISTS `seat_type_info` (
  `seatTypeId` int(11) NOT NULL AUTO_INCREMENT,
  `seatTypeName` varchar(200) COLLATE utf8_bin NOT NULL,
  `seatRentAmount` double NOT NULL COMMENT 'Total Seat Amount',
  `rentAmount` double NOT NULL,
  `profit` double NOT NULL,
  `seatTypeStatus` int(2) NOT NULL DEFAULT '1' COMMENT '1=Active, 0=InActive',
  PRIMARY KEY (`seatTypeId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=13 ;

--
-- Dumping data for table `seat_type_info`
--

INSERT INTO `seat_type_info` (`seatTypeId`, `seatTypeName`, `seatRentAmount`, `rentAmount`, `profit`, `seatTypeStatus`) VALUES
(6, 'Type-A', 3600, 2500, 1100, 1),
(7, 'Type-B', 3200, 1666, 1534, 1),
(8, 'Type-C', 3100, 1666, 1434, 1),
(9, 'Type-D', 2900, 1600, 1300, 1),
(10, 'Type-E', 5100, 2500, 2600, 1),
(11, 'Type-SA', 2700, 1500, 1200, 1),
(12, 'Type-SB', 3200, 1500, 1700, 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_admission_type`
--

CREATE TABLE IF NOT EXISTS `student_admission_type` (
  `admissionTypeId` int(11) NOT NULL AUTO_INCREMENT,
  `admissionTypeName` varchar(50) COLLATE utf8_bin NOT NULL,
  `admissionTypeStatus` int(2) NOT NULL DEFAULT '1' COMMENT '1=Active, 0=InActive',
  PRIMARY KEY (`admissionTypeId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=8 ;

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

CREATE TABLE IF NOT EXISTS `student_image_info` (
  `sImgId` int(11) NOT NULL AUTO_INCREMENT,
  `imageName` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `imageCaption` varchar(80) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `student_info_studentId` int(11) NOT NULL,
  PRIMARY KEY (`sImgId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf16 COLLATE=utf16_bin AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE IF NOT EXISTS `student_info` (
  `studentId` int(11) NOT NULL,
  `stdIdNo` varchar(80) CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `studentName` varchar(40) CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `studentGender` varchar(10) CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `studentBirthDate` date NOT NULL,
  `studentContactNo` varchar(14) CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `studentBloodGroup` varchar(5) CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `studentBirthRegNo` varchar(25) CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `studentNID` varchar(25) CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `student_admission_type_admissionTypeId` int(11) NOT NULL,
  `seat_info_studenCurrentSeatId` int(11) NOT NULL,
  `studentWalletAmount` double NOT NULL DEFAULT '0',
  `studentReligion` text CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `nationality` text CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `studentStatus` int(2) NOT NULL DEFAULT '1' COMMENT '1=Active,2=InActive,3=Complete,4=On Hold',
  `studentAddress` text CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `fatherName` varchar(40) CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `motherName` varchar(40) CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `localGurdianName` varchar(40) CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `localGurdianContactNo` int(11) NOT NULL,
  `localGurdianNID` int(11) NOT NULL,
  `localGurdianAddress` text CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `stdImage` varchar(400) CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `stdIdCard` varchar(400) CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `parentsImage` varchar(400) CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `parentsIdCard` varchar(400) CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `stdNote` text CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `studentAddedDate` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`studentId`, `stdIdNo`, `studentName`, `studentGender`, `studentBirthDate`, `studentContactNo`, `studentBloodGroup`, `studentBirthRegNo`, `studentNID`, `student_admission_type_admissionTypeId`, `seat_info_studenCurrentSeatId`, `studentWalletAmount`, `studentReligion`, `nationality`, `studentStatus`, `studentAddress`, `fatherName`, `motherName`, `localGurdianName`, `localGurdianContactNo`, `localGurdianNID`, `localGurdianAddress`, `stdImage`, `stdIdCard`, `parentsImage`, `parentsIdCard`, `stdNote`, `studentAddedDate`) VALUES
(0, '0040000', 'EMA KHATUN CHOWDHURY', '2', '1998-01-01', '01796299203', '7', 'N/A', 'N/A', 4, 9, 0, '1', 'BANGLADESH', 1, 'VILL: NIZCHOWKI P.O: HORIDHORPUR, P.S: NABIGONJ, DIST: HOBIGONJ', 'LATE. MD. ILIAS CHOWDHURY', 'FOYJUNNESA CHOWDHURY', '', 0, 0, '', 'images/EMA_KHATUN_ID_801311.jpg', '', '', '', 'EMA KHATUN CHOWDHURY OLD ID NO: 80131, SHE NOT A PAY SEQURITY TK.', '2018-02-09'),
(0, '0040000', 'Yeasmin Begum', '2', '1998-01-01', '+8801703831394', '7', '19983617729007749', 'N/A', 4, 10, 0, '1', 'BANGLADESH', 1, 'Mothurapur, Nobigonj, Digholbak, Hobigonj, Sylhet', 'Md.Abdul Hakim', 'Mst. Afia Begum', '', 0, 0, '', 'images/Yasmin_Begum_ID_8001041.jpg', '', '', '', 'Yeasmin Begum, OLD ID NO:80141\r\n2016 আগের ছাত্রীদের থেকে জামানত এর টাকা রাখা হত না', '2018-02-09');

-- --------------------------------------------------------

--
-- Table structure for table `student_other_courses`
--

CREATE TABLE IF NOT EXISTS `student_other_courses` (
  `coursesId` int(11) NOT NULL AUTO_INCREMENT,
  `courseInstitutionName` varchar(80) COLLATE utf8_bin NOT NULL,
  `courseName` varchar(30) COLLATE utf8_bin NOT NULL,
  `courseTime` time NOT NULL,
  `courseDays` date NOT NULL,
  `student_info_studentId` int(11) NOT NULL,
  PRIMARY KEY (`coursesId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Dumping data for table `student_other_courses`
--

INSERT INTO `student_other_courses` (`coursesId`, `courseInstitutionName`, `courseName`, `courseTime`, `courseDays`, `student_info_studentId`) VALUES
(1, '', '', '00:00:00', '0000-00-00', 0),
(2, '', '', '00:00:00', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `student_qualification`
--

CREATE TABLE IF NOT EXISTS `student_qualification` (
  `sQId` int(11) NOT NULL AUTO_INCREMENT,
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
  `student_info_studentId` int(11) NOT NULL,
  PRIMARY KEY (`sQId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf16 COLLATE=utf16_bin AUTO_INCREMENT=7 ;

--
-- Dumping data for table `student_qualification`
--

INSERT INTO `student_qualification` (`sQId`, `institutionName`, `passingYear`, `group`, `class`, `classRoll`, `section`, `classTime`, `board`, `semester`, `sQInstitutionId`, `qualificationType`, `student_info_studentId`) VALUES
(1, 'J.K & H.K High School, Hobigonj', 2015, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 0),
(2, 'HOBIGONJ GOVT. MOHILA COLLEGE', 2017, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 0),
(3, 'LEADING UNIVERSITY', 2020, 'L.L.B     ', '', 0, '', '00:00:00', '', '2ND  ', 0, '3', 0),
(4, 'Digholbak High School', 2014, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 0),
(5, 'Govt. Agrami Girls High School & Collage', 2016, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 0),
(6, 'Metropolitan University', 2020, 'CSE', '', 0, '', '00:00:00', '', '2ND  ', 171, '3', 0);

-- --------------------------------------------------------

--
-- Table structure for table `student_seat_info`
--

CREATE TABLE IF NOT EXISTS `student_seat_info` (
  `sSeatId` int(11) NOT NULL,
  `monthelyRent` double NOT NULL DEFAULT '0',
  `specialDiscount` double NOT NULL DEFAULT '0',
  `additionalCharge` double NOT NULL DEFAULT '0',
  `admissionFee` double NOT NULL DEFAULT '0',
  `securityMoney` double NOT NULL DEFAULT '0',
  `studentSeatAddedDate` datetime NOT NULL,
  `studentExpireDate` date DEFAULT NULL,
  `student_info_studentId` int(11) NOT NULL,
  `student_info_studentIdNo` varchar(80) CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `building_info_buildingId` int(11) NOT NULL,
  `floor_info_floorId` int(11) NOT NULL,
  `unit_info_unitId` int(11) NOT NULL,
  `room_info_roomId` int(11) NOT NULL,
  `seat_info_seatId` int(11) NOT NULL,
  `seat_info_studentSeatStatus` tinyint(2) NOT NULL DEFAULT '1' COMMENT '1=Active, 0=inactive'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_seat_info`
--

INSERT INTO `student_seat_info` (`sSeatId`, `monthelyRent`, `specialDiscount`, `additionalCharge`, `admissionFee`, `securityMoney`, `studentSeatAddedDate`, `studentExpireDate`, `student_info_studentId`, `student_info_studentIdNo`, `building_info_buildingId`, `floor_info_floorId`, `unit_info_unitId`, `room_info_roomId`, `seat_info_seatId`, `seat_info_studentSeatStatus`) VALUES
(0, 3600, 0, 0, 0, 0, '2018-02-09 20:19:04', '2020-12-31', 0, '0030000', 0, 0, 0, 0, 9, 1),
(0, 3600, 0, 0, 0, 0, '2018-02-09 20:58:24', '2020-12-31', 0, '0040000', 0, 0, 0, 0, 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_working_info`
--

CREATE TABLE IF NOT EXISTS `student_working_info` (
  `sWId` int(11) NOT NULL AUTO_INCREMENT,
  `companyName` varchar(30) COLLATE utf16_bin NOT NULL,
  `workId` int(11) NOT NULL,
  `designation` varchar(20) COLLATE utf16_bin NOT NULL,
  `officeLocation` text COLLATE utf16_bin NOT NULL,
  `student_info_studentId` int(11) NOT NULL,
  PRIMARY KEY (`sWId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf16 COLLATE=utf16_bin AUTO_INCREMENT=13 ;

--
-- Dumping data for table `student_working_info`
--

INSERT INTO `student_working_info` (`sWId`, `companyName`, `workId`, `designation`, `officeLocation`, `student_info_studentId`) VALUES
(11, '', 0, '', '', 0),
(12, '', 0, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `transaction_info`
--

CREATE TABLE IF NOT EXISTS `transaction_info` (
  `transactionId` int(11) NOT NULL AUTO_INCREMENT,
  `TransactionTypeId` tinyint(4) NOT NULL COMMENT '5=expense, <5=received payment, >5= return',
  `transactionRefferenceId` int(11) NOT NULL,
  `transactionAmount` double NOT NULL,
  `transactionPrevDue` double NOT NULL,
  `transactionDetails` text COLLATE utf8_bin NOT NULL,
  `zone_info_transactionZoneId` int(11) NOT NULL,
  `transactionDate` datetime NOT NULL,
  `transactionAddedBy` int(11) NOT NULL,
  PRIMARY KEY (`transactionId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=26 ;

-- --------------------------------------------------------

--
-- Table structure for table `transaction_type_info`
--

CREATE TABLE IF NOT EXISTS `transaction_type_info` (
  `transactionTypeId` int(11) NOT NULL AUTO_INCREMENT,
  `transactionTypeTitle` varchar(50) COLLATE utf8_bin NOT NULL,
  `transactionTypeLink` varchar(100) COLLATE utf8_bin NOT NULL,
  `transactionTypeStatus` tinyint(2) NOT NULL,
  PRIMARY KEY (`transactionTypeId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=10 ;

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

CREATE TABLE IF NOT EXISTS `transfer_info` (
  `transferInfoId` int(11) NOT NULL AUTO_INCREMENT,
  `transferFromStdSeatId` int(11) NOT NULL,
  `transferToStdSeatId` int(11) NOT NULL,
  `transferDate` datetime NOT NULL,
  `transferBy` int(11) NOT NULL,
  `transferStudent_info_student_id` int(11) NOT NULL,
  PRIMARY KEY (`transferInfoId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Dumping data for table `transfer_info`
--

INSERT INTO `transfer_info` (`transferInfoId`, `transferFromStdSeatId`, `transferToStdSeatId`, `transferDate`, `transferBy`, `transferStudent_info_student_id`) VALUES
(1, 17, 21, '2018-01-24 13:35:45', 10, 17);

-- --------------------------------------------------------

--
-- Table structure for table `unit_info`
--

CREATE TABLE IF NOT EXISTS `unit_info` (
  `unitId` int(11) NOT NULL AUTO_INCREMENT,
  `zone_info_zoneId` int(11) NOT NULL,
  `building_info_unitBuildingId` int(11) NOT NULL,
  `floor_info_unitFloorId` int(11) NOT NULL,
  `unitNumber` varchar(200) COLLATE utf8_bin NOT NULL,
  `unitNote` text COLLATE utf8_bin NOT NULL,
  `unitStatus` int(2) NOT NULL DEFAULT '1' COMMENT '0=Inactive, 1=Active',
  `unitTotalNumberRoom` int(11) NOT NULL,
  `unitAddedDate` datetime NOT NULL,
  `uniAddedBy` int(11) NOT NULL,
  PRIMARY KEY (`unitId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=24 ;

--
-- Dumping data for table `unit_info`
--

INSERT INTO `unit_info` (`unitId`, `zone_info_zoneId`, `building_info_unitBuildingId`, `floor_info_unitFloorId`, `unitNumber`, `unitNote`, `unitStatus`, `unitTotalNumberRoom`, `unitAddedDate`, `uniAddedBy`) VALUES
(4, 5, 10, 25, '01', 'Unite 01, Floor no. 01, House no. 08, Sylhet Zone', 1, 10, '2018-01-02 23:51:01', 10),
(5, 5, 10, 26, '03', 'Unite 03, Floor no. 03, House no. 08, Sylhet Zone', 1, 3, '2018-01-02 23:51:44', 10),
(6, 5, 10, 27, '04', 'Unite 04, Floor no. 04, House no. 08, Sylhet Zone', 1, 7, '2018-01-02 23:52:17', 10),
(7, 5, 11, 28, '01', 'Unit no. 01, Floor no. 01, House no. 20, Sylhet Zone', 1, 6, '2018-01-03 00:01:27', 10),
(8, 5, 11, 29, '02', 'Unit no. 02, Floor no. 02, House no. 20, Sylhet Zone', 1, 6, '2018-01-03 00:05:41', 10),
(9, 5, 11, 30, '03', 'Unit no. 03, Floor no. 03, House no. 20, Sylhet Zone', 1, 6, '2018-01-03 00:06:20', 10),
(10, 5, 12, 31, '01', 'Unit no. 01, Floor no. 01, House no. 22, Sylhet Zone', 1, 3, '2018-01-03 00:06:55', 10),
(11, 5, 12, 32, '04', 'Unit no. 04, Floor no. 04, House no. 22, Sylhet Zone', 1, 3, '2018-01-03 00:08:02', 10),
(12, 5, 12, 33, '05', 'Unit no. 05, Floor no. 05, House no. 22, Sylhet Zone', 1, 3, '2018-01-03 00:08:27', 10),
(13, 6, 13, 34, '101', 'Unit no. 101, Floor no. 01, House no. 01, Shamshernagar Zone', 1, 4, '2018-01-03 00:12:02', 10),
(14, 6, 13, 34, '102', 'Unit no. 102, Floor no. 01, House no. 01, Shamshernagar Zone', 1, 4, '2018-01-03 00:12:02', 10),
(15, 6, 13, 34, '103', 'Unit no. 103, Floor no. 01, House no. 01, Shamshernagar Zone', 1, 4, '2018-01-03 00:12:02', 10),
(16, 6, 13, 35, '201', 'Unit no. 201, Floor no. 02, House no. 01, Shamshernagar Zone', 1, 4, '2018-01-03 00:13:41', 10),
(17, 6, 13, 35, '202', 'Unit no. 202, Floor no. 02, House no. 01, Shamshernagar Zone', 1, 4, '2018-01-03 00:13:41', 10),
(18, 6, 13, 35, '203', 'Unit no. 203, Floor no. 02, House no. 01, Shamshernagar Zone', 1, 5, '2018-01-03 00:13:41', 10),
(19, 6, 13, 35, '204', 'Unit no. 204, Floor no. 02, House no. 01, Shamshernagar Zone', 1, 4, '2018-01-03 00:13:41', 10),
(20, 6, 13, 36, '301', 'Unit no. 301, Floor no. 03, House no. 01, Shamshernagar Zone', 1, 4, '2018-01-03 00:14:52', 10),
(21, 6, 13, 36, '302', 'Unit no. 302, Floor no. 03, House no. 01, Shamshernagar Zone', 1, 4, '2018-01-03 00:14:52', 10),
(22, 6, 13, 36, '303', 'Unit no. 303, Floor no. 03, House no. 01, Shamshernagar Zone', 1, 4, '2018-01-03 00:14:52', 10),
(23, 6, 13, 36, '304', 'Unit no. 304, Floor no. 03, House no. 01, Shamshernagar Zone', 1, 4, '2018-01-03 00:14:52', 10);

-- --------------------------------------------------------

--
-- Table structure for table `zone_info`
--

CREATE TABLE IF NOT EXISTS `zone_info` (
  `zoneID` int(11) NOT NULL AUTO_INCREMENT,
  `zoneTitle` varchar(40) COLLATE utf8_bin NOT NULL,
  `zoneAddress` text COLLATE utf8_bin NOT NULL,
  `zoneStatus` int(2) NOT NULL DEFAULT '1' COMMENT '0=InActive,1=Active',
  `zoneAddedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `zoneNote` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`zoneID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=7 ;

--
-- Dumping data for table `zone_info`
--

INSERT INTO `zone_info` (`zoneID`, `zoneTitle`, `zoneAddress`, `zoneStatus`, `zoneAddedDate`, `zoneNote`) VALUES
(5, 'Sylhet', '', 1, '2018-01-02 17:33:22', 'Sylhet Zone'),
(6, 'Shamshernagar', '', 1, '2018-01-02 17:34:05', 'Shamshernagar Zone');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
