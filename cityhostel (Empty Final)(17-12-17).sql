-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2017 at 10:02 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

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
(1, 'SatrlabITSatrlabIT', 'starlabTeam@gmail.com', '01719450855017194508', 'Zindabazar,Sylhet', 'starlabIT', 'd7ea52fb792bed01df7174c48605cf19', 1, 1, 5, '', '2017-12-15 12:52:26', '0000-00-00 00:00:00'),
(6, 'Excellent Store Keeper', 'storekeeper_excellent@starlabit.email', 'Rifat', 'Excellent 631ea72176464e6d2b8adda6c47a993a\n', 'stock', 'd7ea52fb792bed01df7174c48605cf19', 1, 3, 3, '', '2017-05-03 12:05:12', '0000-00-00 00:00:00'),
(7, 'admin admin', 'admin@excellent.com', '123456', 'address', 'StarLabIT1', 'd7ea52fb792bed01df7174c48605cf19', 1, 2, 3, '', '2017-03-22 12:27:38', '0000-00-00 00:00:00'),
(8, 'Mr. Rifat', 'rifat@jonota.com', '01727414166', 'Zindabazar', 'admin', 'd7ea52fb792bed01df7174c48605cf19', 1, 4, 3, '', '2017-12-16 20:56:19', '0000-00-00 00:00:00'),
(9, 'Excellent - 1 Manager', 'excellent1@starlabit.email', '123456', 'Zindabazar', 'manager', 'b4af804009cb036a4ccdc33431ef9ac9', 1, 4, 4, '', '2017-09-25 12:31:43', '2017-04-27 19:11:08'),
(10, 'Salim Shoes Manager', 'salimshoes@gmail.com', '12345678979654', 'Zindabazar, Sylhet', 'salim', 'd7ea52fb792bed01df7174c48605cf19', 1, 4, 5, '', '2017-08-30 18:11:27', '0000-00-00 00:00:00'),
(13, 'name', '', '2453557', '', 'manager1', '25d55ad283aa400af464c76d713c07ad', 1, 4, 0, 'Note', '2017-09-20 20:26:20', '0000-00-00 00:00:00');

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

-- --------------------------------------------------------

--
-- Table structure for table `gurdian_info`
--

CREATE TABLE `gurdian_info` (
  `gurdianId` int(11) NOT NULL,
  `gurdianName` varchar(40) COLLATE utf8_bin NOT NULL,
  `gurdianContactNo` varchar(14) COLLATE utf8_bin NOT NULL,
  `gurdianOccupation` varchar(15) COLLATE utf8_bin NOT NULL,
  `gurdianNID` varchar(25) COLLATE utf8_bin NOT NULL,
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
(3, 'On Hold', 1),
(4, 'Inactive', 1);

-- --------------------------------------------------------

--
-- Table structure for table `seat_type_info`
--

CREATE TABLE `seat_type_info` (
  `seatTypeId` int(11) NOT NULL,
  `seatTypeName` varchar(200) COLLATE utf8_bin NOT NULL,
  `seatRentAmount` double NOT NULL,
  `seatTypeStatus` int(2) NOT NULL DEFAULT '1' COMMENT '1=Active, 0=InActive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
(5, 'Masters', 1);

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

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `studentId` int(11) NOT NULL,
  `stdIdNo` varchar(80) COLLATE utf16_bin NOT NULL,
  `studentName` varchar(40) COLLATE utf16_bin NOT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `student_qualification`
--

CREATE TABLE `student_qualification` (
  `sQId` int(11) NOT NULL,
  `institutionName` varchar(40) COLLATE utf16_bin NOT NULL,
  `passingYear` year(4) NOT NULL,
  `group` varchar(10) COLLATE utf16_bin NOT NULL,
  `board` varchar(10) COLLATE utf16_bin NOT NULL,
  `semester` varchar(5) COLLATE utf16_bin NOT NULL,
  `sQInstitutionId` int(11) NOT NULL,
  `qualificationType` varchar(20) COLLATE utf16_bin NOT NULL COMMENT '1=SSC,2=HSC,3=Graduation,4=Post Graduation ',
  `student_info_studentId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

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
  `seat_info_seatId` int(11) NOT NULL,
  `seat_info_studentSeatStatus` tinyint(2) NOT NULL DEFAULT '1' COMMENT '1=Active, 0=inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

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
  `unitTotalNumberRoom` int(11) NOT NULL DEFAULT '0',
  `unitAddedDate` datetime NOT NULL,
  `uniAddedBy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
(5, 'Sylhet', '', 1, '2017-12-16 14:27:57', 'Zone Note');

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
  MODIFY `buildingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `expense_field_info`
--
ALTER TABLE `expense_field_info`
  MODIFY `fieldId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `expense_info`
--
ALTER TABLE `expense_info`
  MODIFY `expenseId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `floor_info`
--
ALTER TABLE `floor_info`
  MODIFY `floorId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `gurdian_info`
--
ALTER TABLE `gurdian_info`
  MODIFY `gurdianId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `monthly_billing_info`
--
ALTER TABLE `monthly_billing_info`
  MODIFY `monthlyBillingInfoId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `monthly_billng_details`
--
ALTER TABLE `monthly_billng_details`
  MODIFY `monthlyBillngDetailsId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `payment_type_info`
--
ALTER TABLE `payment_type_info`
  MODIFY `paymentTypeInfoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `received_payment_info`
--
ALTER TABLE `received_payment_info`
  MODIFY `receivedPaymentInfoId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `return_payment_info`
--
ALTER TABLE `return_payment_info`
  MODIFY `returnPaymentInfoId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `return_payment_type_info`
--
ALTER TABLE `return_payment_type_info`
  MODIFY `returnPaymentTypeInfoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `room_info`
--
ALTER TABLE `room_info`
  MODIFY `roomId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `seat_info`
--
ALTER TABLE `seat_info`
  MODIFY `seatId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `seat_status_info`
--
ALTER TABLE `seat_status_info`
  MODIFY `seatStausId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `seat_type_info`
--
ALTER TABLE `seat_type_info`
  MODIFY `seatTypeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `student_admission_type`
--
ALTER TABLE `student_admission_type`
  MODIFY `admissionTypeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `student_image_info`
--
ALTER TABLE `student_image_info`
  MODIFY `sImgId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `studentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `student_other_courses`
--
ALTER TABLE `student_other_courses`
  MODIFY `coursesId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `student_qualification`
--
ALTER TABLE `student_qualification`
  MODIFY `sQId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student_seat_info`
--
ALTER TABLE `student_seat_info`
  MODIFY `sSeatId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `student_working_info`
--
ALTER TABLE `student_working_info`
  MODIFY `sWId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `transaction_info`
--
ALTER TABLE `transaction_info`
  MODIFY `transactionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
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
  MODIFY `unitId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `zone_info`
--
ALTER TABLE `zone_info`
  MODIFY `zoneID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
