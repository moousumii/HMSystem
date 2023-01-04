-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 14, 2018 at 12:12 PM
-- Server version: 5.5.54-38.6-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zakanaka_cityhostel`
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
(10, 5, '108', 'Sylhet-08', 'Sylhet Zone, House no. 08', 1, 3, '2018-01-02 23:37:51', 10),
(11, 5, '120', 'Sylhet-20', 'Sylhet Zone, House no. 20', 1, 3, '2018-01-02 23:39:04', 10),
(12, 5, '122', 'Sylhet-22', 'Sylhet Zone, House no. 22', 1, 0, '2018-01-02 23:39:46', 10),
(13, 6, '201', 'Shamshernagar 01', 'Shamshernagar Zone, House no. 01', 1, 3, '2018-01-02 23:41:44', 10);

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
(1, 'Bazar', 1, 'Monthly Boro Bazar', ''),
(2, 'Electric Bill', 1, 'Monthly Electric Bill', ''),
(3, 'Salary', 1, 'Employee Salary', ''),
(4, 'Buileding 08 House Rent', 1, 'House Rent', ''),
(5, 'WiFi Bill', 1, 'City Hostel All Building WiFi Bill ', 'Last Date of 10  Every Month '),
(6, 'Water Expance ', 1, 'Every Month Water Filter Bill', ''),
(7, 'Buileding 20 House Rent', 1, 'House Rent ', ''),
(8, 'Buileding 22 House Rent', 1, 'House Rent ', '');

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
(8, 153500, 'Building No- 08, Salma House, Tantipara, Zindabazar, Sylhet', 'August Month Rent ', 1, 4, '2018-08-13 12:00:29', 10, 5),
(9, 53500, 'Java House, No-22, Tantipara, Zindabazar, Sylhet', 'Augest Rent Payment', 1, 8, '2018-08-13 12:04:33', 10, 5);

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
(1, 'MD. RAFIQUE MIAH', '01715083810', 'JOB HOLDER', 'N/A', 'MS. ASMA AKTHER', '01772770050', 'HOUSE WIFE ', 'N/A', 'VILL: MIRZAPUR,  P.O:  HOBIGONJ   P.S: HOBIGONJ   DIST: HOBIGONJ', '', '', '', '', '', '', '', '', '', '', '', 1),
(2, 'PROBIR KUMAR DATTA', '01724928830', 'GOVT. EMPLOYE', 'N/A', 'SHOPNA RANI DEY ', '01747467255', 'TEACHER', 'N/A', 'VILL: BARAIGRAMM   P.O:  BORLAKHA   P.S:  BORLAKHA    DIST:  MOULOVIBAZAR', '', '', '', '', '', 'NEBENDU DEY ', '01761104296', 'STUDENT', 'N/A', 'COUSIN', 'VILL: SOBOUGEBAG P.O:  SCRIMONGAL  P.S: SCRIMONGAL DIST: MOULOVIBAZAR', 2),
(3, 'LATE. MD. ILIAS CHOWDHURY', 'N/A', 'N/A', 'N/A', 'FOYJUNNESA CHOWDHURY', '01785660120', 'HOUSE WIFE', 'N/A', 'VILL: NIZCHOWKI P.O: HORIDHORPUR, P.S: NABIGONJ, DIST: HOBIGONJ', '', '', '', '', '', '', '', '', '', '', '', 3),
(4, 'Md.Abdul Hakim', '01629083890', 'PRIVET SERVICES', 'N/A', 'Mst. Afia Begum', '01726746370', 'HOUSE WIFE', 'N/A', 'Mothurapur, Nobigonj, Digholbak, Hobigonj, Sylhet', '', '', '', '', '', '', '', '', '', '', '', 4),
(5, 'SUNIL CHANDA DASH', '01711064571', 'Doctor', '5818385117406', 'DIPATI RANI DASH', '01813307094', 'Teacher', '5818385117407', 'Vill: Sabujbug   P.O: Sreemangal,  P.S:  Sreemangal   Dist: Moulvibazar, ', '', '', '', '', '', 'DIPANKAR DAS', '01718016582', 'Govt. Services ', '9110851699603', 'Mama', 'House:  Somota 32, Salobondar, sylhet', 5),
(6, 'BORUN CHANDRA DEY ', '01728649468', 'Homeo pathy Doc', 'N/A', 'LILAPOTI RANI DEY ', '01720414614', 'House wife', 'N/A', 'Vill: Kodomtoli, P.O: Sachnabazar P.S: jamalgonj, Dist: Sunamgonj', '', '', '', '', '', 'Nil Roton ', '01716706721', 'Sub Insspector ', 'N/A', 'Uncle', 'Vill: Kalipur, P.O:                            P.S:                                     Dist: Sunamgonj', 6),
(7, 'OLI ULLAH ', '01732861280', 'NRB', 'N/A', 'GUL BAHAR ', '01754820084', 'House wife', '9015027751251', 'Vill: Jamalgonj   P.O: Sachna  P.S: Jamalgonj  Dist: Sunamgonj', '', '', '', '', '', 'Gul bahar ', '01778958500', 'House wife', '9015027751251', 'Mother', 'Vill: Jamalgonj   P.O: Sachna  P.S: Jamalgonj  Dist: Sunamgonj', 7),
(8, 'MD. NURUL AMIN', '01720201177', 'Retired govt: s', 'N/A', 'M.S SHIRIA AKTER', '01717818082', 'Govt: service h', 'N/A', 'Vill: Notunpara   P.O:   Bishwambharpur P.S: Bishwambharpur  Dist:  Sunamgonj', '', '', '', '', '', 'Md. Mukarom Ali ', '01788838033', '', 'N/A', 'Uncle', 'Vill: Kuarpar P.O:  Sylhet     P.S:    Sylhet   Dist: Sylhet', 8),
(9, 'Md.Hanif', '01865006999', 'Business ', '91968629456238', 'Saleha Begum', '01729352157', 'House wife', '91962589562983', 'Vill: OABDA, P.O:  FENCHUGONJ   P.S: FENCHUGONJ  DIST: SYLHET', '', '', '', '', '', '', '', '', '', '', '', 9),
(10, 'Sadique Ahmed', '01711137307', 'Business', 'N/A', 'Nasima Akter', '01715109521', 'House wife', 'N/A', 'Vill: Baurgoria PO: Dagatshi Dist: Moulvibazar', '', '', '', '', '', '', '', '', '', '', '', 10),
(11, 'TOLSIDS ACHARJEE', '01726616463', 'Business', '6725806394222', 'JUTHIKA ACHARJEE', '01751915826', 'House wife', '6725806394223', '67/57 Bongsal Road Narayongobj', 'ASATRAJIT ACHARJEE', '01975007788', 'PRIVET JOB ( S.', '3624409270694', 'S.R PLAZA M, SAIFUR RAHMAN ROAD MOULVIBAZA, SYLHET', 'SATRAJIT ACHARJEE', '01975007788', 'PRIVET JOB ( S.', '3624409270694', 'HUSBAND ', 'S.R PLAZA M, SAIFUR RAHMAN ROAD MOULVIBAZA, SYLHET', 11),
(12, 'HIMADRI SHAKOR DAS', '01712516324', 'JOB HOLDER', '5818385013988', 'JHORNA ROY', '01729840964', 'House wife', '5818385013989', 'Vill: Ruposhpur  P.O: Sreemongol, P.S:  Sreemongol Dist: Moubvibazar, Sylhet', '', '', '', '', '', 'SWAPON ROY', '01741284117', 'JOB HOLDER', 'N/A', 'Uncle', 'LALDIGHIR PAR, SYHLET', 12),
(13, 'Tarun Kumar Paul ', '01611392494', 'Business', '5828307111229', 'Ela Rani Paul', '01674054719', 'House wife', 'N/A', 'Vill: Uttarsur P.O: Srimangol  P.O:  Srimangol  P.S: Srimangol  Dist: Moulovibazar, Sylhet', '', '', '', '', '', 'Asit Paul', '01625978542', 'JOB HOLDER', 'N/A', 'Uncle', '', 13),
(14, 'Faruk Ahmed', '01726093478', 'Business', '9115352239781', 'Kayrun Nesa Parvin', '01715518266', 'House wife', '9115352239780', 'Vill: 24 para, Assampara,    P.O:  Jaintapur,  P.S: Jaintapur,   Dist:   Sylhet', '', '', '', '', '', 'Anamul Hoque Anam', '01711572602', 'Business', 'N/A', 'Mama', '', 14),
(15, 'MD. SAIFUL ISLAM', '01717742766', 'Govt: service h', 'N/A', 'NASRIN AKTER', '01816846285', 'House wife', 'N/A', 'E-2/197, AMBAGAN COLONI, NGFF, FANCHUGONJ SYLHET', '', '', '', '', '', '', '', '', '', '', '', 15),
(16, 'Abdul Kadir', '01715035819', 'Business', '19765818042355050', 'Syeda Ruhena Akter ', '01754710632', 'House wife', '5818042355019', 'Vill: Khalagoan, P.O: Karimpur, P.S: Rajnagor, Dist; Moulvibazar', '', '', '', '', '', '', '', '', '', '', '', 16),
(17, 'Leat: Shafikur Rahman ', 'N/A', 'N/A', 'N/A', 'Afia Begum', '01757092881', 'House wife', 'N/A', 'Vill: Joykalosh, P.S: South Sunamgong, P.O: Vjanigong, Dist: Sunamgong ', '', '', '', '', '', '', '', '', '', '', '', 17),
(18, 'Kripa Shindu Datta', '01819567160', 'Business', 'N/A', 'Archana Datta', '01716785545', 'House wife', 'N/A', 'Vill: Baroigram PO+PS: Barlekha Dist: Moulvibazar, Sylhet', '', '', '', '', '', '', '', '', '', '', '', 18),
(19, 'MD. ABDUL MOTHIN', '01716885176', 'Service holder', '9018927261514', 'MISS: JAHANARA BEGUM', '01781660437', 'House wife', '9018927261515', 'Vill: Kutubpur, P.O/P.S: Sunamgonj, Dist: Sunamgonj', '', '', '', '', '', '', '', '', '', '', '', 19),
(20, 'Md. Abdul Musabbir Khasru', '01721424773', 'Business', '36226060990398', 'Samima Yeasmin Shayrin', '01724329320', 'House wife', '36226060990399', 'Vill: Master House Balla Road, P.O Chunarughat, P.S: Chunarughat Dist: Habiganj', '', '', '', '', '', 'Md. Mahbubur Rahman Shohel', '01717140267', 'Banker (City Ba', '3624418284129', 'Uncle', 'Vill: Puran Bazar, P.O: Sayestaganj, P.S: Shaystaganj, Dist: Hobiganj', 20),
(21, 'Mujibur Rahman Khan ', '01716811581', 'Govt: service h', 'N/A', 'Shamimara Khanom', '01799748084', 'House wife', 'N/A', 'Kochna Bohor, Fanchuganj, Fanchuganj, F.F Factory, Sylhet ', '', '', '', '', '', '', '', '', '', '', '', 21),
(22, 'MD.NAZRUL ISLAM ', '01712745296', 'NRB', 'N/A', 'LATE. SWABANA ISLAM', 'N/A', 'N/A', 'N/A', 'VILL: AKILPUR, P.O: PORGONA BAZAR, P.S: BISWANATH DIST: SYLHET', '', '', '', '', '', 'AZIZUR RAHMAN ALI', '01727668862', 'Business', 'N/A', 'BROTHER', 'VILL: BADEALI, P.O: TUKER BAZAR, P.S: SYLHET, DIST: SYLHRT', 22),
(23, 'SUKESH CHOWDHURY', '01714456911', 'BANKER', '5818385104885', 'BWRNALI BHATTACHARGEE', '01718222676', 'Govt: service h', '58183851048869', '', '', '', '', '', '', '', '', '', '', '', '', 23),
(24, 'Ranjit Kumar Talukder ', '01721482576', 'Service holder', 'N/A', 'Mridula Rani Talukder ', '01721482693', 'Teacher', 'N/A', 'Vill: Notun para, P.O & P.S: Sunamgonj, Dist: Sunamgonj, Sylhet', '', '', '', '', '', '', '', '', '', '', '', 24),
(25, 'Aminur Rashid Chowdhury ', '01711449532', 'Business', '5815685948849', 'Fouzia Begum ', '01715683457', 'House wife', '5815685948848', 'Shamsher Nagar, Shamsher Nagar,Shamsher Nagar, moulvibazar', '', '', '', '', '', '', '', '', '', '', '', 25),
(26, 'Md. Mobshir Ali', '01721485149', 'Business', '5816577556164', 'Aysha akter ', '01724829247', 'HOUSE WIFE', '5818063390734', 'Podinapuri, Rajnagar, Rajnagar, Moulavibazar ', '', '', '', '', '', 'Nahid Ahmed', '01738043565', 'Banker', '2848499477', 'BROTHER', 'Podinapuri, Rajnagar, Rajnagar, Moulavibazar ', 26),
(27, 'Syed Atiqul Haque', '01747211614', 'Govt: service h', 'N/A', 'Syeda Rowshon Sultana', '01776935943', 'Teacher', 'N/A', 'C/O: Syed Atiqul Haque Enatabad, Syed Bari, P.O: Habiganj, Dist: Habiganj', '', '', '', '', '', 'Syed Mohsin Husin', '01711227445', '', 'N/A', 'Uncle', 'N/A', 27),
(28, 'Habibur Rahman', '01716365152', 'Business', '3222403109425', 'Lutfun Nahar', 'N/A', 'House wife', 'N/A', 'Vill: khankashorif, P.O: Gaibandha, P.S: Gaibandha Dist: Gaibandha', '', '', '', '', '', 'Abdullha- Al- Mamun', '01732372850', 'Business', '19969018933000069', 'Uncle', 'Hawapara/81, Zindabazar, Sylhet', 28),
(29, 'Md. Mojahid Ali', '01721045703', 'Farming', '901471744611', 'Asirun Nessa', '01728046350', 'House wife', '901471744612', 'Vill: Horipur, P.S: Katal Khair, P.S: Jagannathpur, Dist: Sunamgonj', '', '', '', '', '', '', '', '', '', '', '', 29),
(30, 'Let. Harunor Rahshaed', 'N/A', 'N/A', 'N/A', 'Nasrin Sultana ', '01725435488', 'House Wife', 'N/A', 'Vill: Otra, Barishal,    P.O: FF Factory   P.S: Fenchugony', '', '', '', '', '', '', '', '', '', '', '', 30),
(31, 'MD. Zakaria', '01715207464', 'Govt. Employee', '5827408132166', 'Ftema Akther', '01752833454', 'Housewife', '5827408131679', 'Vill: Gobindrosree. P.O: Moulovibazar Sadar. P.S: Moulovibazar.', '', '', '', '', '', '', '', '', '', '', '', 31),
(32, 'Shafiul Alam Khan', '01718340392', 'Govt. Employee', '3617169103701', 'Kazi Shefa Begum', '01728188682', 'Govt. Employee', '3617169103702', 'Vill:Madhabpur. PO: Madhab pur. PS: Shantipara, Madhabpur. Dist: Habiganj', '', '', '', '', '', '', '', '', '', '', '', 32),
(33, 'Fatik Miah', '01742377225', 'Foregin', 'N/A', 'Surma Begum', '01716811705', 'House Wife', 'N/A', 'vill: Holdigul. P.O: Kalar Bazar. P.S: Rajnagar. Dist: Moulovi bazar.', '', '', '', '', '', '', '', '', '', '', '', 33),
(34, 'Kanak Lal Bhattacharjee', '01711317195', 'Businessman', '5818385129576', 'Gita Bhattacharjee', '01783714109', 'House Wife', '19675818385129579', 'Vill: Uttarshur, Hobigonj road, Srimangol. P.S: Srimangol. P.S: Srimangol. Dist: Moulovi Bazar.', '', '', '', '', '', '', '', '', '', '', '', 34),
(35, 'Jamir Ali', '01758557336', 'Businessman', '9113160388156', 'Sheikh Shafia', '', 'Housewife', '5818084336945', 'Vill: Mirjapur. P.O:Mogla Bazar. P.S:South Surma. Dist: Sylhet', '', '', '', '', '', '', '', '', '', '', '', 35),
(36, 'Nasiruddin Ahmed', '', 'N/A', 'N/A', 'Fatema Khatun ', '', 'Housewife', '3612695929069', 'Vill: Rajak Pur . P.O: Madobpur. P.S: Chunarughat . Dist: Hobiganj', '', '', '', '', '', '', '', '', '', '', '', 36),
(37, 'Md Abdul Awal', '01727167316', 'Banker', '7316608442', 'Rupnaher Begum', '01718108901', 'Housewife', '5066588921', 'Vill: Hasan Nagar . P.O: Sunamgonj . P.S: Sunamgonj .', '', '', '', '', '', '', '', '', '', '', '', 37),
(38, 'Rayhanul Islam Robin', '01765596994', 'Businessman', '18509013385000032', 'Nasima Khatun', '01730951658', 'Housewife', '9013386209827', 'Vill: Kushiura . P.O: Bangla Bazar . P.S: Dowara Bazar . Dist: Sunamgonj', '', '', '', '', '', '', '', '', '', '', '', 38),
(39, 'Shah Alam ', '01759141085', 'Businessman', '5826509462564', 'Fatema Begum', '01779696621', 'House Wife', '5826509462565', 'Vill:Jogonnath pur . P.O: Kulaura . P.S: Kulaura . Dist:Moulvi BazarN', '', '', '', '', '', '', '', '', '', '', '', 39),
(40, 'Ahmed Mohsen Babor', '01827539333', 'Businessman', '9121701641183', 'Mahmuda Khanom', '01700580190', 'Teacher', '9121701641182', 'Vill:Sreedhora. P.O;Sreedhora. P.S:Beanibazar. Dist: Sylhet', '', '', '', '', '', '', '', '', '', '', '', 40),
(41, 'Md. Abdul Khalique', '01717279618', 'teacher', '9028902215597', 'Rahena Begum', '01736362251', 'House Wife', '5966632225', 'Vill:Udayan-64 bilpar Sunamgonj. P.O:Sunamgonj. P.S:Sunamgonj', '', '', '', '', '', '', '', '', '', '', '', 41),
(42, 'Ajitkumar Malakar', '01717141139', 'Govt. Employee', '19695815657936069', 'Shilpirani Malakar', '01715745981', 'House Wife', '9112123915', 'Vill:Moidail P.O:MunshiBazar. P.S: Kamalgonj .Dist:Moulvi Bazar', '', '', '', '', '', '', '', '', '', '', '', 43),
(43, 'ForashUddin', '', '', '19683611111000004', 'Dilara Begum', '01732951570', 'House Wife', '3611111206580', 'Vill:South Nandi Para. P.O:Baniyachong. P.S:Baniyachong. Dist:Hobiganj', '', '', '', '', '', '', '', '', '', '', '', 44),
(44, 'Rabindra Talukdar', '0171696808', 'Retired', '9028902215348', 'Usha Rani Dev', '01726926808', 'Retired', '9028902215346', 'Vill:Puran Barunka. p.o:Balijuri. P.S:Tahirpur. Dist:Sunamgonj', '', '', '', '', '', '', '', '', '', '', '', 45),
(45, 'Nasim Ahmed', '01711444969', '', '', 'Sanjida Akther', '0178750800', '', '', 'Vill:Naliuri. P.S:East Badeshwar. P.S:Golapgonj. Dist:Sylhet', '', '', '', '', '', '', '', '', '', '', '', 46),
(46, 'Saleh Ahmed', '', '', '', 'Fatema Ahmed', '01715273659', '', '', 'Vill:West Barokut. P.O: West Barokut. P.S:GolapgonjDhaka', '', '', '', '', '', '', '', '', '', '', '', 47),
(47, 'Hazi MD Momin Ullah', '01746008333', 'Businessman', '', 'Delwara Begum', '01722311515', 'House WifeB.T', '', 'vill:Jareen Tea Est. P.O:Sreemangal. P.S:Sreemangal. Dist:Moulvibazar', '', '', '', '', '', '', '', '', '', '', '', 48),
(48, 'Ashukkumar Datta Roy', '01720205687', 'Govt. Employee', '9022902886689', 'Shanti Rani Roy', '01720205686', 'Teacher', '9022902886603d', 'Vill:Derai . P.O: Chandpur. P.S:Derai. Dist:Sunamgonj', '', '', '', '', '', '', '', '', '', '', '', 49),
(49, 'Md. Humayun Khan', '01716692410', 'Contractor', 'N/A', 'Shajeda Begum', '01715196208', 'Housewife', 'N/A', 'Vill:938/1 Manik villa. surapur, Moulvibazar', '', '', '', '', '', '', '', '', '', '', '', 50),
(50, 'Foyez Ahmed Ripon', '', '', '', 'Nilufa akther', '01712140988', 'Housewife', '', 'Vill:Kamud pur. P.O: Komolgonj. P.S: Shamshernagar. Dist: Moulvibazar', '', '', '', '', '', '', '', '', '', '', '', 51),
(51, 'Shukhamoy Paul', '01730019312', 'Head Accountant', '3612657887014', 'Rita Kana Paul', '01714705725', 'Housewife', 'N/A', 'Vill:Deundi Tea Est. P.O: Chandpur. P.S:Chunarughat. Dist:Habigonj', '', '', '', '', '', '', '', '', '', '', '', 52),
(52, 'Tapas Saha', '01718529859', 'Businessman', '5828307109390', 'Papia Saha', '01749743686', 'Housewife', '5828307109389', 'Vill:Shaplabag R/A. P.O: Sreemangal   P.S:Sreemangal   Dist:Moulvibazar', '', '', '', '', '', '', '', '', '', '', '', 53),
(53, 'Md. Salim Uddin', '', '', '', 'Rima Salim', '', '', '', 'Vill:Naliura. P.O:Badeshwar. P.S:Golapgonj.', '', '', '', '', '', '', '', '', '', '', '', 54),
(54, 'Md. Shirajul Bari', '01785485069', 'Businessman', '9018939303373', 'Mukta Khatun', '01736448336', 'Housewife', '9018939303374', 'Vill: Gobindopur. P.O: janigaon. dist: Sunamgonj', '', '', '', '', '', '', '', '', '', '', '', 55),
(55, 'Farid Uddin', '', 'NRB', '', 'Fateha Begum', '01715171642', 'Housewife', '', 'Vill: Borodesh. P.O: Borodesh Bazar. P.S:Kanaighat. Dist: Sylhet', '', '', '', '', '', '', '', '', '', '', '', 56),
(56, 'Ibunghal Sinha', '01711908614', 'Assistant Land ', 'N/A', 'Kunjarani Sinha', '01717471048', 'Teacher', 'N/A', 'Vill:Tetai Gaon. P.O: Adampur Bazar. P.S: Kamalgonj. Dist: Moulvi Bazar', '', '', '', '', '', '', '', '', '', '', '', 57),
(57, 'Md. Mushfiqur Rahman', '01726601712', 'Businessman', 'N/A', 'Quazi Fatema', '01731372680', 'Teacher', '9129406725076', 'Vill:Kamal Pur. P.O:Kamal Pur. P.S:Zakigonj. Dist: Sylhet', '', '', '', '', '', '', '', '', '', '', '', 58),
(58, 'Aminur Rashid', '01714867723', 'Businessman', '5811485780031', 'Hasna Rashid', '01714867723', 'Housewife', '5816541490744', 'Vill:Uttar Kulaura. P.O: Kulaura. P.S: Kulaura. Dist:Moulovibazar', '', '', '', '', '', '', '', '', '', '', '', 59),
(59, 'Shirajul Islam', '01853212999', 'Vaterinary Surg', '58214077876784', 'Nargis Akter', '01726347505', 'Housewife', 'N/A', 'Vill:Barlekha. P.O:Barlekha. P.S:Barlekha. Dist:Moulovi Bazar', '', '', '', '', '', '', '', '', '', '', '', 61),
(60, 'Sanjob Ali', '01715055982', 'Doctor', '1957821408877826', 'Nasima Begum', '01788886342', 'Housewife', 'N/A', 'Vill: Hatbon. P.O:Borolekha. P.S: Borolekha. Dist:Moulovi bazar', '', '', '', '', '', '', '', '', '', '', '', 63),
(61, 'Rezaul Karim', '01715250355', 'Businessman', '5815685946670', 'Earunnassa Begum', '01711966529', 'Housewife', '5815685946669', 'Vill:Shsmsher Nagar. P.O:Shamsher Nagar. P.S: Shamsher Nagar. Dist: Moulovibazar', '', '', '', '', '', '', '', '', '', '', '', 65),
(62, 'Blaram Banik', '01673982484', 'Businessman', '911660358', 'Devi Banik', '01760075747', 'Housewife', '7316765390', 'P.O:Sunamgonj Sadar. P.S:Sunamgonj. Dist: Sunamgonj', '', '', '', '', 'P.O:Sunamgonj Sadar. P.S:Sunamgonj. Dist: Sunamgonj', '', '', '', '', '', '', 66),
(63, 'Mashuk Ahmed', '', '', '', 'Shelina Akter', '01913310456', 'Housewife', '3627708812966', 'Vill:Shibopasha. P.O:Nabiganj. P.S:Nabigonj. Dist: Habigonj', '', '', '', '', '', '', '', '', '', '', '', 67),
(64, 'Harunur Rashid', '', '', '', 'Nazma Begum', '01715051786', 'Housewife', '91133137364582', 'Vill:Borchok. P.O:Jalalpur. P.S: Muglabazar. Dist: Sylhet', '', '', '', '', '', '', '', '', '', '', '', 68),
(65, 'Umapada Dhar', '01716885717', 'Businessman', '5828307110720', 'Shukriti Dhar', '01722028375', 'Housewife', '5828307110723', 'Vill:Srimangal. P.O:Srimangal. P.S:Srimangal. Dist: Moulovibazar', '', '', '', '', '', '', '', '', '', '', '', 69),
(66, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 70),
(67, 'Bikash Kamal Roy', '01712411437', 'teacher', '1211332435050', 'Gouri Ray', '01784612322', 'Housewife', '1211332435052', 'Vill:Satgoan.  P.O: Chandpur.  P.S: Bijoynagar. Dist: Brahmanbaria', '', '', '', '', '', '', '', '', '', '', '', 71),
(68, 'Late. Md Billal Mia', '', '', '', 'Nasima Akter', '01714896250', 'Housewife', 'N/A', 'Vill:Janpur. p.o: sirajgonj sadar. P.S:sirajgonj sadar.  Dist: Sirajgonj', '', '', '', '', '', '', '', '', '', '', '', 72),
(69, 'Monoranjon Paul', '01718013344', 'Businessman', '5828307110736', 'Sheuli Paul', '01754663387', 'Housewife', '5828307110742', 'Vill:Sreemangoal. P.O:Sreemangoal. p.s:  Sreemangoal Dist: Moulovi bazar', '', '', '', '', '', '', '', '', '', '', '', 73),
(70, 'Shah Abdul Lotif', '01731565483', 'Businessman', 'N/A', 'Shah Halima Begum', '01731565483', 'Housewife', 'N/A', 'Vill:Sodar Ghat. P.O:Notun Bazar. P.S:Nobigonj. Dist:Hobiganj', '', '', '', '', '', '', '', '', '', '', '', 76),
(71, 'Md. Abdul Kuddus', '01717271264', 'job', '19601918158000002', 'Jahanara  Begum', '01734478079', 'Housewife', '19741918158000003', 'Vill:Shahbazpur. P.O: Shaistagonj. P.S: Shaistagonj. Dist:Habigonj', '', '', '', '', '', '', '', '', '', '', '', 77),
(72, 'Sajjadur Rahman Jonu', '01755872212', 'Businessman', 'N/A', 'Nessarun Begum', '', 'Housewife', 'N/A', 'Vill: Kubajpur. P.O: Kubajpur. P.S: Jagannathpur. Dist: Sunamgonj', '', '', '', '', '', '', '', '', '', '', '', 78),
(73, 'Selim Uddin', '01795432905', 'Businessman', 'N/A', 'Rina Begum', '', 'House Wife', 'N/A', 'Vill:Naliura. P.O:East Bhadeswar. P.S:Golapgonj. Dist: Sylhet', '', '', '', '', '', '', '', '', '', '', '', 80),
(74, 'GHNASHYAM GUPTA', '01736361087', 'Businessman', '3612657876778', 'SHAFALI GUPTA', '01736361087', 'Housewife', '3612657876779', 'VILL: LUSKERPOUR, P.O: CHAND POUR, P.O: CHUNARUGHAT, DIST: HABIGANJ', '', '', '', '', '', '', '', '', '', '', '', 81),
(75, 'KORUMANOMOY DAS', '01772942792', 'teacher', 'N/A', 'LUCKY RANI DAS', '01715206619', 'FAMILY WELLFEAR', 'N/A', 'VILL:NOWAGRAM P,O:BEANIBAZAR P.S:BEANIBAZAR DIST:SYLHET', '', '', '', '', '', 'TULI RANI DAS LABONI', '01705634709', 'STUDENT', 'N/A', 'SISTER', 'VILL:NOWAGRAM P.O:BEANIBAZAR P.S:BEANIBAZAR DIST:SYLHETKH', 82),
(76, 'ABINASH CHAKRABARTY', '01749714536', 'DEED WRITER', '3627708812995', 'RINA CHAKRABARTY', '01722124477', 'GOVT JOB HOLDER', '3627708812996', 'VILL:JOYNOGOR P.O:NABIGANJ P.S:NABIGANJ  DIST:HABIGANJ', '', '', '', '', '', '', '', '', '', '', '', 83),
(77, 'SOMIRON CHOKROBORTY', '01745455367', 'Businessman', '3627708812867', 'KOBITA CHOKROBORTY', '01756700230', 'House Wife', '3627708812828', 'VILL:SHIBOPASHA P.O:NOBIGSNJ :P.S:NOBIGANJ DIST:HOBIGANJ', '', '', '', '', '', '', '', '', '', '', '', 84),
(78, 'MD ABDUSSAHID', '01705084518', 'NRB', 'N/A', 'MST SAFIQUNNAHER', '01705084518', 'Housewife', 'N/A', 'VILL:KANDA GOW P.O:SASHNA P.S:JAMALGONJ DIST:SUNAMGANJ', '', '', '', '', '', 'RAFIQUL ISLAM', '01705084518', 'STUDENT', '', '', '', 86),
(79, 'MADHUSUD PAUL', '', 'BUSINESSMEN', 'N/A', 'RINA PAUL', '', 'HOUSE WIFE', 'N/A', 'VILL: BRAHMAN BARIA, P.O: BRAHMAN BARIA P.S: BRAHMAN BARIA, DIST: BRAHMAN BARIA', '', '', '', '', '', 'RITA PUL', '', 'DOCTUR', 'N/A', 'SISTER', '', 87),
(80, 'MONINDRA PAUL', '01906415286', 'BUSINESSMEN', 'N/A', 'AJANTA PUL', '01930474661', 'HOUSE WIFE', 'N/A', 'VILL: PAIKPARA, P.O: BARHMAN BARIA, P.S: BARHMAN BARIA, DIST: BARHMAN BARIA', '', '', '', '', '', 'SHANKA CHOWDRY', '01747572818', '', 'N/A', 'UNCLE ', '', 88),
(81, 'FEROJ ALI ', '01515254890', '', '', 'LUTFA BEGUM', '', '', '', 'VILL: BADEPASHA, P.O: DEPUTI BAZAR P.S: GOLABAGANJ DIST: SYLHET', '', '', '', '', '', '', '', '', '', '', '', 89),
(82, 'barkat ali', '', 'farmar', 'N/A', 'kalpana begum', '01738609793', 'Housewife', 'N/A', 'vill:shalla p.o:ghungar goan p.s:shalla dist:sunamgonj', '', '', '', '', '', 'md:bodoruddin', '01765558914', 'STUDENT', 'N/A', 'bather', 'vill:tuker bazar', 90),
(83, 'Md. Abdul Khalique', '01713812964', 'Govt. Employee', 'N/A', 'anowara begum', '01713812383', 'Housewife', 'N/A', 'vill:bishawnath pur p.o:jury p.s:jury dist:moulvibazar', '', '', '', '', '', 'md.monir hussin', '01735125487', 'businssman', 'N/A', 'bather', 'vill:caradigirpar p.o:sylhet p.s:sylhet dist:sylhet', 91),
(84, 'LATE: BACCHU MIAH', '0', 'Businessman', 'N/A', 'KAMINA BEGUM', '01739187068', 'Housewife', 'N/A', 'vill:hariram pur p.o:jury p.s:jury dist:moulvibazar', '', '', '', '', '', 'kamal hossain', '01725746511', 'businssman', 'N/A', 'bather', 'vill:hariram pur p.o:jury p.s:jury dist:moulvibazar', 92),
(85, 'Noor islam', '01720422393', 'Businessman', 'N/A', 'Fatema Khatun', '01748284668', 'homemaker', '6438509413', 'vill:hobigonj p.o:hobigonj p.s:hobigonj dist:hobigonj', '', '', '', '', '', 'jahirul islam', '01729979096', 'STUDENT', 'N/A', 'uncel', 'vill:hobigonj p.o:hobigonj p.s:hobigonj dist:hobigonj', 93),
(86, 'paresh dash', '01745138105', 'teacher', 'N/A', 'biva dash', '01732565693', 'Housewife', 'N/A', 'vill:habigonj p.o:habigonj p.s:habigonj dist:habigonj', '', '', '', '', '', 'sushmita das', '01756957897', 'STUDENT', 'N/A', 'SISTER', 'vill:sylhet p.o:sylhet p.s:sylhet dist:sylhet', 94),
(87, 'MD ABDUSSAHID', '01705084518', 'farmar', 'N/A', 'MST SAFIQUNNAHER', 'N/A', 'Housewife', 'N/A', 'VILL:KANDA GOW P.O:SASHNA P.S:JAMAL GANJ  DIST:SUNAMGANJ', '', '', '', '', '', '', '', '', '', '', '', 95),
(88, 'ABDUL MANNAN', '01715002683', 'Businessman', 'N/A', 'RUBY BEGUM', '01761895046', 'Housewife', 'N/A', 'VILL:ATGHOR P.O:NAZIR BAZAR DIST:MOULVIBAZAR SODOR', '', '', '', '', '', '', '', '', '', '', '', 96),
(89, 'NILADRI DEV', '01718477171', 'SERVICE HULDER', 'N/A', 'Usha Rani Dev', '01724879463', 'Teacher', 'N/A', 'VILL:KHALAGAON P.O:KARIM PUR P.S:RAJNAGAR DIST:MOULOVI BAZAR ', '', '', '', '', '', 'PROTITI DEV TROPA', '01792110032', 'STUDENT', 'N/A', 'SISTER', 'WOMENS MEDICAL COLLEGE HUSTEL,SYLHET', 97),
(90, 'JOMRUT ALI', '01706139204', 'Businessman', 'N/A', 'ANUWARA KHATUN', '01780900835', 'Housewife', '3612647972671', 'VILL:KRISHNA P.O:MIRASHI P.S:CHUNARUGHAT  DIST:HABIGANJ', '', '', '', '', '', 'RAJIB AHMED', '01737098165', 'LAWER', 'N/A', 'BROTHER', 'CHATTAK,SUNAMGANJ', 98),
(91, 'Paresh dash', '01745138105', 'Teacher', 'N/A', 'Biva dash', '01732565693', 'Housewife', 'N/A', 'Vill:Habigonj p.o:Habigonj p.s:Habigonj Dist:Habigonj', '', '', '', '', '', 'Sushmita das', '01756957897', 'STUDENT', 'N/A', 'SISTER', 'Vill:sylhty p.o:sylhty p.s:sylhty dist:sylhty', 99),
(92, 'Sumsul Hoque', '01712712536', 'Businessman', 'N/A', 'Anjumanara', 'N/A', 'Housewife', 'N/A', 'Vill:Moulinagor P.o:Vimkhali P.s:Jamal Gong Dist:Sunam Gong', '', '', '', '', '', 'Kowser alam', '01726536993', 'STUDENT', 'N/A', 'Bather', 'Vill:Tilagoau P.o:Sylhet P.s:Sylhet Dist:Sylhet', 100),
(93, 'Mohibur Rahman', '01716247837', 'Businessman', '9022903889029', 'Masuda Akter', '01741020485', 'Housewife', '9022903889028', 'Vill:Derai P.o:Chand Pur P.s:Derai Dist:Sunam Gonj', '', '', '', '', '', '', '', '', '', '', '', 101),
(94, 'Sayful Islam', '01712402618', 'Businessman', 'N/A', 'Asma Akther', '01722313450', 'Housewife', 'N/A', 'Vill:Chondi Pur P.o:Derai P.s:Derai Dist:Sunam Gonj', '', '', '', '', '', 'Juma Akther', '01754989593', 'STUDENT', 'N/A', 'SISTER', 'Vill:Sylhet p.o:Sylhet p.s:Sylhet Dist:Sylhet', 102),
(95, 'Md.Madhu Miah', '01731388427', 'Businessman', 'N/A', 'Rahima Khatun', '01756375792', 'Housewife', 'N/A', 'Vill:Ananto Pur P.o:Habigonj  SadarP.s:Habigonj Dist:Habigonj', '', '', '', '', '', '', '', '', '', '', '', 103),
(96, 'HIRANDRA BISWAS', '01714506756', 'SERVICES HOLDER', 'N/A', 'TRIPTI BISWAS', '01922781164', 'HOUSE WIFE', 'N/A', 'VILL: SINDURKHAN, P.O: JANAURA, P.S: JANAURA, DIST: MOULVIBAZAR, SYLHET', '', '', '', '', '', '', '', '', '', '', '', 104),
(97, 'MOTIUR RAHMAN', '01715747362', 'BUSINESSMAN', 'N/A', 'SALEHA BEGUM', '01754839432', 'HOUSEWIFE', 'N/A', 'VILL:HARANPUR P.O: DERAI P.S:DERAI DIST:SUNAMGANJ', '', '', '', '', '', '', '', '', '', '', '', 105),
(98, 'MD. MAMUNUR RASHHID KHAN', '01716485787', 'GOVT.SERVICES H', '3612613844425', 'ROWSHON JAHAN ', '01757383470', 'TEACHER', '3612613844426', 'VILL: MAHMUDABAD, P.O: HABIGANJ, P.S: HABIGANJ, DIST: HABIGANJ', '', '', '', '', '', '', '', '', '', '', '', 106),
(99, 'MARINAL PAUL', '01711376674', 'BUSINESSMAN', 'N/A', 'BITHI PAUL', '01673055045', 'HOUSE WIFE', '', 'VILL: SRIMANGOL, P.O: SRIMANGOL, P.S:SRIMANGOL, DIST: MOULOVIBAZAR, SYLHET', '', '', '', '', '', '', '', '', '', '', '', 107),
(100, 'BABUL MIAH', '01753345611', 'BUSINESSMAN', 'N/A', 'SHILPY BEGUM', '01753345611', 'HOUSEWIFE', 'N/A', 'VILL:BHARIGAOW P.O:MUKAMBAZAR P.S:RAJNAGAR DIST:MOULIBIBAZAR', '', '', '', '', '', '', '', '', '', '', '', 108),
(101, 'AJIT KUMAR PAUL ', '01711065147,01', 'GOVT SERVICE', '5818319087026', 'BANDANA RANI PAUL', '01733671112', 'GOVT SERVICE', '5818319084739', 'VILL:RUPOS PUR R/A SREEMONGOL P.O:SREEMONGOL P.S:SREEMONGOL DIST: MOULIVIBAZAR SYLHET', '', '', '', '', '', '', '', '', '', '', '', 109),
(102, 'TUTA MIAH ', '01733822588', 'Businessman', '5813529731504', 'NASRGI SBAHAR', '01719841544', 'Housewife', '5813529731505', 'VILL: JANGIRAY, P.O: JURI, P.O: JURI, DIST: MOUBVI BAZAR, SYLHET', '', '', '', '', '', 'SAIFUR RAHMAN', '01742823450', 'STUDENT', 'N/A', 'BROTHER', 'SURMA TAWAR', 110),
(103, 'ABDUL HAMID', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 111),
(104, 'LUTHFUR RAHMAN', '01764546285', 'BUSINESSMEN', 'N/A', 'HASNA', '01745536673', 'HOUSEWIFE', 'N/A', 'Vill: Goznaipur, P,O: Dewpara, P.S: Nobigong, Dist: Hobigonz, sylhet', '', '', '', '', '', 'Bilal ', '01700905048', 'student', 'N/A', 'Bother', 'Vill: Goznaipur, P,O: Dewpara, P.S: Nobigong, Dist: Hobigonz, sylhet', 112),
(105, 'PROMOTH DEB', '01783617183', 'MANAGER OF A PR', '5818031436394', 'PUSHPO DEB', '01754303641', 'TEACHER', '5818031436318', 'Vill: Hariyaraoi, P.S: Rajnagar, P.S: Rajnagar, Dist: Moulvibazar, Sylhet', '', '', '', '', '', '', '', '', '', '', '', 113),
(106, 'MD. ISHAQU MIAH', '01718090476', 'Teacher', 'N/A', 'ABEDUNNESSA MAZUMDER', '01714458148', 'TEACHER', '', 'Vill: West Hamidnagar, P.O: Bahubal, P.S: Bahubal, Dist: Habiganj', '', '', '', '', '', 'safka monjur', '017123212383', 'student', 'N/A', 'Bother', 'Vill: West Hamidnagar, P.O: Bahubal, P.S: Bahubal, Dist: Habiganj', 114),
(107, 'UTTOM SAHA', '01721271201', 'BUSINESSMAN', 'N/A', 'LIPI SAHA', '01821146101', 'HOUSEWIFE', '', 'Vill: kazi para, P.O: Be-Baria, P.S: Be-baria,  Dist: Be-baria,  ', '', '', '', '', '', '', '', '', '', '', '', 115),
(108, 'RAMANDRO BORDHON DILU', '01719163190', 'Teacher', 'N/A', 'SUPRITI RANI BORDHON', '017600844852', 'F.W.A', 'N/A', 'Vill: Fazilpur,  P.O: Karim Nagar,  P.S: Moulvibazar, Dist: Moulvibazar, Sylhet', '', '', '', '', '', '', '', '', '', '', '', 116),
(109, 'BIJOY KUMAR DEB', '01716760671', 'Govt. services ', '5818063390677', 'BANI BALA DEB', '01723892911', 'Govt. services ', '5818063390678', 'Vill: Chatura , P.O: Rajnagar, P.S: Rajnagar, Dist: Moulvibazar, Sylhet', '', '', '', '', '', '', '', '', '', '', '', 117),
(110, 'MD. ABDUL KARIM', '01717971858', 'Govt. services ', 'N/A', 'MINU ARA', '01744499262', 'House Wife', 'N/A', 'Vill:  Sultan Mahmud Par , P.O: Habiganj, P.S: Habiganj,   Dist:  Habiganj,', '', '', '', '', '', '', '', '', '', '', '', 118),
(111, 'MD.NAZRUL ISLAM ', '01712745296', 'NRB', 'N/A', 'LATE. SWABANA ISLAM', 'N/A', 'N/A', 'N/A', 'VILL: AKILPUR, P.O: PORGONA BAZAR, P.S: BISWANATH DIST: SYLHET', '', '', '', '', '', 'AZIZUR RAHMAN ALI', '01727668862', 'Business', 'N/A', 'Bother', 'VILL: BADEALI, P.O: TUKER BAZAR, P.S: SYLHET, DIST: SYLHRT', 119),
(112, 'HIRALAL DAS', '01761841121', 'Farmar ', '9022906895763', 'NIYA DAS', 'N/A', 'House Wife', '9022906895763', 'Vill: Derai P.o: Derai Chandopur  P.S: Derai, Dist: Sunamjong', '', '', '', '', '', '', '', '', '', '', '', 120),
(113, 'SIRAJ MIAH CHOWDHARY', '01768184982', 'NRB', 'N/A', 'MRS. ZESMIN CHOWDHARY', '01782796399', 'House Wife', '5818042351946', 'Vill: Medenu mohol, P.O: Medenu mohol, P.S: Rajnagoro,  Dist: Moulvibazar, Sylhet', '', '', '', '', '', '', '', '', '', '', '', 121),
(114, 'KHALI MIAH', '+447572144040', 'NRB', 'N/A', 'RAHENA BEGUM', '01766701254', 'House Wife', 'N/A', 'N/A', '', '', '', '', '', 'Emon', '01748239453', 'Business', 'N/A', 'Bother', 'N/A', 122),
(115, 'SHYAM SUNDER GOSWAMI', '01712219117', 'Doctar', 'N/A', 'SUPROVA GOSWAMI', '01721223064', 'TEACHER', '5815676913010', 'Vill: Shiddeshor Pur,  P.O: Mashibazar,  P.S: Kamolgonj,  Dist: Moulovibazar, Sylhet', '', '', '', '', '', '', '', '', '', '', '', 123),
(116, 'GULAM HUSEN', '01715252690', 'BUSINESSMAN', 'N/A', 'FATEMA BEGUM', '01726279683', 'HOUSEWIFE', 'N/A', 'VILL-GULER HOUR, P.O-ISLAMPUR, P.S-KAMALAGONG, DIST-MOULIVIBAZAR', '', '', '', '', '', 'MOKSHUD KHAN', '01711199625', 'BUSINESSMAN', 'N/A', 'METERNAL U', '', 124),
(117, 'SHEIKH KAJAL MAHMUD ', '01715407581 ', 'BUSINESSMAN ', 'N/A ', 'SHELINA PARVIN ', '01711905017 ', 'HOUSEWIFE', 'N/A ', 'VILL-GHAJIPUR TEA ESTATE M.M ISPAHANI LTD. P.O-KULAURA P.S-KULAURA DIST-MOULIVIBAZAR', '', '', '', '', '', '', '', '', '', '', '', 126),
(118, 'MAHAMMAD FOJOL MIAH', 'NRB', 'FOREIGHNER', 'N/A ', 'AMBIA BEGUM', '01752676400', 'HOUSEWIFE ', 'N/A ', 'VILL-MUNSHIBAZAR P.O-KARIMPUR P.S-RAJNAGAR DIST-MOULIVIBAZAR', '', '', '', '', '', 'TAHMIDA TANHA', '01787356155', 'STUDENT', 'N/A ', 'SISTER', 'VILL-MUNSHIBAZAR P.O-KARIMPUR P.S-RAJNAGAR DIST-MOULIVIBAZAR', 127),
(119, 'BANAMALI CHANDA ', '01712425439', 'Teacher', '5818010321756', 'JOLY RANI CHANDA', '5818010321757', 'HOUSEWIFE', '', 'Vill: Batahunza, P.O: Mukambazar, P.S: Mukambazar dist: Moulobibazar, sylhet', '', '', '', '', '', 'Amolandushil ', '01718977125', 'job holdwe', 'N/A', 'UNCLE', 'vill: Batahunja, P.O: Mukombazar, P.S: Rajagor, Dist: Moulobibazar, sylhet', 128),
(120, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 129),
(121, 'ABDUL QUAYUM', 'N/A', 'N/A', 'N/A ', 'RAHENA BEGUM', '01726611449', 'HOUSEWIFE ', 'N/A ', 'VILL-BAGERKHAL P.O-PUTIGURI P.S-BAHUBAL DIST-HOBIGANJ', '', '', '', '', '', 'MUTALIB MIAH', '01726894387', 'JOB', 'N/A ', '', 'VILL-DAMALIPARA P.S-SYLHET DIST-SYLHET', 130),
(122, 'ABDUL KADER  ', 'N/A ', 'N/A ', ' N/A', 'DULOBI BEGUM ', '01716813617 ', 'HOUSEWIFE ', 'N/A  ', 'VILL:AL MODINA A/R BAGBARI P:O:SYLHET DIST:SYLHET', '', '', '', '', '', 'ABDUL JAHER ', '01716813617 ', 'BUSINESSMAN ', '19949014766000143 ', 'BROTHER ', 'VILL:AL MODINA A/R BAGBARI P:O:SYLHET DIST:SYLHET', 132),
(123, 'SHAFIKUR RAHMAN', '01914940541', 'BUSINESSMAN ', 'N/A  ', 'AFIA BEGUM', '01757092881', 'HOUSEWIFE  ', 'N/A ', 'VILL:JOYKHALASH P.O:UZANIGANJ P.S:SOUTH SUNAMGANJ DIST:SHUNAMGANJ', '', '', '', '', '', 'TAMANNA RAHMAN', '01705269271', 'STUDENT', 'N/A  ', 'SISTER ', 'VILL:JOYKHALASH P.O:UZANIGANJ P.S:SOUTH SUNAMGANJ DIST:SHUNAMGANJ', 133),
(124, 'MD ABDUL MATIN', '01716145738', 'TEACHER', 'N/A  ', 'GULSHANA AKTER', '01731028084', 'TEACHER', 'N/A  ', 'VILL:TETAI GOAN P.O:ADUMPUR DIST:MOULOVIBAZAR', '', '', '', '', '', '', '', '', '', '', '', 134),
(125, 'SAJNU MIA', '01709227421', 'BUSINESSMAN ', 'N/A  ', 'ROYNA BEGUM', '01709227421', 'HOUSEWIFE  ', 'N/A  ', 'VILL-RAYGHOR P.O-DHAKA DAKKIN P.S-GULAPGANJ DIAT-SYLHET', '', '', '', '', '', '', '', '', '', '', '', 135),
(126, 'ISKONDOR ALI', '01712664507', 'N/A', '9114131848310', 'AMERA BEGUM', 'N/A', 'HOUSEWIFE  ', '9114131848311', 'VILL-LAKHERPAR  P.O-JAFFLONG  P.S-GOWAINGHAT  DIST-SYLHET', '', '', '', '', '', '', '', '', '', '', '', 136),
(127, 'SAIFUL ALOM', '01718090106', 'BUSINESSMAN', 'N/A', 'JASMIN BEGUM', '01765208348', 'HOUSE WIFE', 'N/A', 'VILL-BISNAKANDI P.O-HADARPAR P.S-GOWINGHAT DIST-SYLHET', '', '', '', '', '', 'SHIPU TALUKDER', '01723288853', 'Business', '9196201106078', 'Bother', 'VILL-MOHONARAKIB P.O-SYLHET P.S JALABAD DIST-SYLHET', 137),
(128, 'SWAPON DEBBARMA', '01703530976', 'JOB', 'N/A  ', 'SANJITA DEBBARMA', 'N/A', 'HOUSEWIFE  ', 'N/A  ', 'VILL-VISHAMONI P.O-SREEMANGAL P.S-SREEMONGAL  DIST-MOULOBIBAZAR', '', '', '', '', '', 'TAYEF CHOWDHURY', '01735954066', 'JOB ', '19939012711000047', 'COUSIN', 'VILL-DORGAPASHA P.O-DORGAPASHA P.S-DAKKIN SHUNAMGANJ DIST-SUNAMGANJ', 138),
(129, 'MD JASHIM UDDIN', '01711521216', 'BUSINESSMAN  ', 'N/A  ', 'MRS RASHIDA KHATUN', '01718681989', 'HOUSEWIFE  ', 'N/A   ', 'VILL-DHALA P.O-DHALA P.S- DHALA DIAT-MYMENSINGH', 'MD.MOSTAFA KAMAL', '01722879889', 'GOVT.JOB', 'N/A', 'VILL-DHALA P.O-DHALA P.S- DHALA DIAT-MYMENSINGH', '', '', '', '', '', '', 139),
(130, 'NURUL ISLAM', '01714528069', 'TEACHER ', 'N/A   ', 'NAZMA PARVIN', '01765914012', 'HOUSEWIFE   ', 'N/A   ', 'VILL-CHATTAK P.O-CHATTAK P.S-CHATTAK DIST-SUNAMGANJ', '', '', '', '', '', 'SUFIA HAQUE', '01719350986', 'N/A', 'N/A  ', ' ', 'VILL-SYLHET P.O-SADAR SYLHET P.S-SYLHET DIST SYLHET', 140),
(131, 'MD ABDUL HAQUE', '01714756296', 'TEACHER ', '9012357555520', 'ANWARA BEGUM', '01788548496', 'HOUSEWIFE   ', '9012357555651', 'VILL-TAJ PUR P.O-GOBINDA GANJ P.S-CHHATAK DIST-SUNAMGANJ', '', '', '', '', '', '', '', '', '', '', '', 141),
(132, 'ALTAF HOSSAIN', 'N/A', 'BUSINESSMAN  ', 'N/A   ', 'NASRIN HOSSAIN', 'N/A ', 'HOUSEWIFE   ', 'N/A   ', 'VILL-BARISHAL P.O-BARISHAL P.S-BARISHAL DIST-BARISHAL', 'JOY RAHMAN', '01715356492', 'JOB', '19935825606000009', 'VILL-BARISHAL P.O-BARISHAL P.S-BARISHAL DIST-BARISHAL', '', '', '', '', '', '', 142),
(133, 'SURUJ ALI', '01712317476', 'BUSINESSMAN  ', 'N/A   ', 'SURETUN BEGUM', '01784512525', 'HOUSEWIFE   ', 'N/A   ', 'VILL-SORISH PAR P.O-NOTUN BAZAR P.S-OSMANIGHOR DIST-SYLHET', '', '', '', '', '', '', '', '', '', '', '', 143);

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
(1, '2018-08-01', 5, '2018-08-09 15:28:28', 1);

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
(1, 1, 4, 10, 3600, 0, 0, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 5500, '2018-08-09 09:28:28', 0),
(2, 1, 6, 13, 3600, 0, 0, 2000, 3000, 0, 1500, 300, 100, 1100, 0, 0, 5500, '2018-08-09 09:28:28', 0),
(3, 1, 7, 15, 3600, 0, 0, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 5500, '2018-08-09 09:28:28', 0),
(4, 1, 8, 16, 3600, 0, 0, 1000, 3000, 0, 1500, 300, 100, 1100, 0, 0, 5500, '2018-08-09 09:28:28', 0),
(5, 1, 9, 18, 3600, 0, 0, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 5500, '2018-08-09 09:28:28', 0),
(6, 1, 10, 17, 3600, 0, 0, 0, 2000, 0, 1500, 300, 100, 1100, 0, 0, 5500, '2018-08-09 09:28:28', 0),
(7, 1, 12, 21, 3600, 0, 0, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 5500, '2018-08-09 09:28:28', 0),
(8, 1, 13, 22, 3600, 0, 0, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 5500, '2018-08-09 09:28:28', 0),
(9, 1, 15, 24, 3600, 0, 0, 0, 3000, 0, 1500, 300, 100, 1100, 0, 0, 5500, '2018-08-09 09:28:28', 0),
(10, 1, 17, 33, 3600, 0, 0, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 5500, '2018-08-09 09:28:28', 0),
(11, 1, 18, 34, 3600, 0, 0, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 5500, '2018-08-09 09:28:28', 0),
(12, 1, 19, 35, 3600, 0, 0, 2000, 3000, 0, 1500, 300, 100, 1100, 0, 0, 5500, '2018-08-09 09:28:28', 0),
(13, 1, 20, 36, 3600, 0, 0, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 5500, '2018-08-09 09:28:28', 0),
(14, 1, 21, 37, 3600, 0, 0, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 5500, '2018-08-09 09:28:28', 0),
(15, 1, 23, 40, 3600, 0, 0, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 5500, '2018-08-09 09:28:28', 0),
(16, 1, 24, 41, 3600, 0, 0, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 5500, '2018-08-09 09:28:28', 0),
(17, 1, 25, 42, 3600, 0, 0, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 5500, '2018-08-09 09:28:28', 0),
(18, 1, 26, 44, 3600, 0, 0, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 5500, '2018-08-09 09:28:28', 0),
(19, 1, 27, 43, 3600, 0, 0, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 5500, '2018-08-09 09:28:28', 0),
(20, 1, 28, 50, 3600, 0, 0, 2000, 3000, 0, 1500, 300, 100, 1100, 0, 0, 5500, '2018-08-09 09:28:28', 0),
(21, 1, 29, 49, 3600, 0, 0, 2000, 3000, 0, 1500, 300, 100, 1100, 0, 0, 5500, '2018-08-09 09:28:28', 0),
(22, 1, 31, 51, 3600, 0, 0, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 5500, '2018-08-09 09:28:28', 0),
(23, 1, 32, 52, 3600, 0, 0, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 5500, '2018-08-09 09:28:28', 0),
(24, 1, 34, 55, 3600, 0, 0, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 5500, '2018-08-09 09:28:28', 0),
(25, 1, 35, 57, 3600, 0, 0, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 5500, '2018-08-09 09:28:28', 0),
(26, 1, 36, 58, 3600, 0, 0, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 5500, '2018-08-09 09:28:28', 0),
(27, 1, 37, 62, 3200, 0, 0, 0, 0, 0, 1500, 300, 100, 1534, 0, 0, 5100, '2018-08-09 09:28:28', 0),
(28, 1, 38, 63, 3200, 0, 0, 0, 0, 0, 1500, 300, 100, 1534, 0, 0, 5100, '2018-08-09 09:28:28', 0),
(29, 1, 39, 65, 3100, 0, 0, 0, 0, 0, 1500, 300, 100, 1434, 0, 0, 5000, '2018-08-09 09:28:28', 0),
(30, 1, 40, 66, 3100, 0, 0, 0, 0, 0, 1500, 300, 100, 1434, 0, 0, 5000, '2018-08-09 09:28:28', 0),
(31, 1, 41, 67, 3100, 0, 0, 0, 0, 0, 1500, 300, 100, 1434, 0, 0, 5000, '2018-08-09 09:28:28', 0),
(32, 1, 43, 70, 3200, 0, 0, 0, 0, 0, 1500, 300, 100, 1534, 0, 0, 5100, '2018-08-09 09:28:28', 0),
(33, 1, 44, 71, 3200, 0, 0, 0, 0, 0, 1500, 300, 100, 1534, 0, 0, 5100, '2018-08-09 09:28:28', 0),
(34, 1, 45, 74, 5100, 0, 0, 0, 0, 0, 1500, 300, 100, 2600, 0, 0, 7000, '2018-08-09 09:28:28', 0),
(35, 1, 46, 106, 3600, 0, 0, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 5500, '2018-08-09 09:28:28', 0),
(36, 1, 47, 107, 3600, 0, 0, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 5500, '2018-08-09 09:28:28', 0),
(37, 1, 48, 108, 3600, 0, 0, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 5500, '2018-08-09 09:28:28', 0),
(38, 1, 49, 109, 3600, 500, 0, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 5000, '2018-08-09 09:28:28', 0),
(39, 1, 50, 111, 3600, 0, 0, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 5500, '2018-08-09 09:28:28', 0),
(40, 1, 51, 114, 3600, 0, 0, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 5500, '2018-08-09 09:28:28', 0),
(41, 1, 52, 120, 3600, 0, 0, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 5500, '2018-08-09 09:28:28', 0),
(42, 1, 53, 117, 3600, 0, 0, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 5500, '2018-08-09 09:28:28', 0),
(43, 1, 54, 118, 3600, 0, 0, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 5500, '2018-08-09 09:28:28', 0),
(44, 1, 56, 126, 3600, 0, 0, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 5500, '2018-08-09 09:28:28', 0),
(45, 1, 57, 128, 3600, 0, 0, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 5500, '2018-08-09 09:28:28', 0),
(46, 1, 58, 76, 3600, 0, 0, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 5500, '2018-08-09 09:28:28', 0),
(47, 1, 59, 77, 2900, 0, 0, 0, 0, 0, 1500, 300, 100, 1300, 0, 0, 4800, '2018-08-09 09:28:28', 0),
(48, 1, 61, 81, 2900, 0, 0, 0, 0, 0, 1500, 300, 100, 1300, 0, 0, 4800, '2018-08-09 09:28:28', 0),
(49, 1, 63, 84, 2900, 0, 0, 0, 0, 0, 1500, 300, 100, 1300, 0, 0, 4800, '2018-08-09 09:28:28', 0),
(50, 1, 65, 87, 2900, 0, 0, 0, 0, 0, 1500, 300, 100, 1300, 0, 0, 4800, '2018-08-09 09:28:28', 0),
(51, 1, 66, 88, 2900, 0, 0, 0, 0, 0, 1500, 300, 100, 1300, 0, 0, 4800, '2018-08-09 09:28:28', 0),
(52, 1, 67, 89, 2900, 0, 0, 0, 0, 0, 1500, 300, 100, 1300, 0, 0, 4800, '2018-08-09 09:28:28', 0),
(53, 1, 68, 90, 5100, 0, 0, 0, 0, 0, 1500, 300, 100, 2600, 0, 0, 7000, '2018-08-09 09:28:28', 0),
(54, 1, 69, 91, 3200, 0, 0, 0, 0, 0, 1500, 300, 100, 1534, 0, 0, 5100, '2018-08-09 09:28:28', 0),
(55, 1, 71, 96, 3100, 0, 0, 0, 0, 0, 1500, 300, 100, 1434, 0, 0, 5000, '2018-08-09 09:28:28', 0),
(56, 1, 72, 93, 3200, 0, 0, 0, 0, 0, 1500, 300, 100, 1534, 0, 0, 5100, '2018-08-09 09:28:28', 0),
(57, 1, 73, 97, 3100, 0, 0, 0, 0, 0, 1500, 300, 100, 1434, 0, 0, 5000, '2018-08-09 09:28:28', 0),
(58, 1, 76, 101, 3200, 0, 0, 0, 0, 0, 1500, 300, 100, 1534, 0, 0, 5100, '2018-08-09 09:28:28', 0),
(59, 1, 77, 99, 3200, 0, 0, 0, 0, 0, 1500, 300, 100, 1534, 0, 0, 5100, '2018-08-09 09:28:28', 0),
(60, 1, 78, 102, 3100, 0, 0, 0, 0, 0, 1500, 300, 100, 1434, 0, 0, 5000, '2018-08-09 09:28:28', 0),
(61, 1, 80, 119, 3600, 0, 0, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 5500, '2018-08-09 09:28:28', 0),
(62, 1, 81, 7, 4100, 0, 500, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 6000, '2018-08-09 09:28:28', 0),
(63, 1, 82, 8, 4100, 0, 500, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 6000, '2018-08-09 09:28:28', 0),
(64, 1, 83, 11, 4100, 0, 500, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 6000, '2018-08-09 09:28:28', 0),
(65, 1, 84, 12, 4100, 0, 500, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 6000, '2018-08-09 09:28:28', 0),
(66, 1, 87, 20, 3600, 0, 0, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 5500, '2018-08-09 09:28:28', 0),
(67, 1, 88, 23, 3600, 0, 0, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 5500, '2018-08-09 09:28:28', 0),
(68, 1, 89, 110, 3600, 0, 0, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 5500, '2018-08-09 09:28:28', 0),
(69, 1, 90, 25, 4100, 0, 500, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 6000, '2018-08-09 09:28:28', 0),
(70, 1, 91, 30, 3200, 1100, 0, 0, 0, 0, 1500, 300, 100, 1534, 0, 0, 4000, '2018-08-09 09:28:28', 0),
(71, 1, 92, 29, 3200, 1100, 0, 0, 0, 0, 1500, 300, 100, 1534, 0, 0, 4000, '2018-08-09 09:28:28', 0),
(72, 1, 93, 31, 3200, 100, 0, 0, 0, 0, 1500, 300, 100, 1534, 0, 0, 5000, '2018-08-09 09:28:28', 0),
(73, 1, 94, 45, 4100, 0, 500, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 6000, '2018-08-09 09:28:28', 0),
(74, 1, 95, 14, 4100, 0, 500, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 6000, '2018-08-09 09:28:28', 0),
(75, 1, 96, 48, 3600, 0, 0, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 5500, '2018-08-09 09:28:28', 0),
(76, 1, 97, 38, 4100, 0, 500, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 6000, '2018-08-09 09:28:28', 0),
(77, 1, 98, 86, 3100, 0, 200, 0, 0, 0, 1500, 300, 100, 1300, 0, 0, 5000, '2018-08-09 09:28:28', 0),
(78, 1, 99, 46, 4100, 0, 500, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 6000, '2018-08-09 09:28:28', 0),
(79, 1, 100, 28, 3200, 100, 0, 0, 0, 0, 1500, 300, 100, 1534, 0, 0, 5000, '2018-08-09 09:28:28', 0),
(80, 1, 101, 72, 3200, 0, 0, 0, 0, 0, 1500, 300, 100, 1534, 0, 0, 5100, '2018-08-09 09:28:28', 0),
(81, 1, 102, 68, 3200, 0, 0, 0, 0, 0, 1500, 300, 100, 1534, 0, 0, 5100, '2018-08-09 09:28:28', 0),
(82, 1, 103, 94, 3200, 0, 0, 0, 0, 0, 1500, 300, 100, 1534, 0, 0, 5100, '2018-08-09 09:28:28', 0),
(83, 1, 104, 64, 3600, 0, 400, 0, 0, 0, 1500, 300, 100, 1534, 0, 0, 5900, '2018-08-09 09:28:28', 0),
(84, 1, 105, 73, 3200, 0, 0, 0, 0, 0, 1500, 300, 100, 1534, 0, 0, 5100, '2018-08-09 09:28:28', 0),
(85, 1, 106, 95, 3200, 0, 0, 0, 0, 0, 1500, 300, 100, 1534, 0, 0, 5100, '2018-08-09 09:28:28', 0),
(86, 1, 107, 105, 5100, 0, 0, 0, 0, 0, 1500, 300, 100, 2600, 1000, 0, 6000, '2018-08-09 09:28:28', 0),
(87, 1, 108, 112, 4100, 0, 500, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 6000, '2018-08-09 09:28:28', 0),
(88, 1, 109, 121, 4100, 0, 500, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 6000, '2018-08-09 09:28:28', 0),
(89, 1, 110, 26, 3200, 100, 0, 0, 0, 0, 1500, 300, 100, 1534, 0, 0, 5000, '2018-08-09 09:28:28', 0),
(90, 1, 111, 98, 3100, 0, 0, 0, 0, 0, 1500, 300, 100, 1434, 0, 0, 5000, '2018-08-09 09:28:28', 0),
(91, 1, 112, 100, 3200, 0, 0, 0, 0, 0, 1500, 300, 100, 1534, 0, 0, 5100, '2018-08-09 09:28:28', 0),
(92, 1, 113, 113, 4100, 0, 500, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 6000, '2018-08-09 09:28:28', 0),
(93, 1, 114, 122, 4100, 0, 500, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 6000, '2018-08-09 09:28:28', 0),
(94, 1, 115, 124, 4100, 0, 500, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 6000, '2018-08-09 09:28:28', 0),
(95, 1, 116, 127, 4100, 0, 500, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 6000, '2018-08-09 09:28:28', 0),
(96, 1, 117, 129, 4100, 0, 500, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 6000, '2018-08-09 09:28:28', 0),
(97, 1, 118, 53, 3600, 0, 0, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 5500, '2018-08-09 09:28:28', 0),
(98, 1, 119, 60, 5100, 0, 0, 0, 0, 0, 1500, 300, 100, 2600, 0, 0, 7000, '2018-08-09 09:28:28', 0),
(99, 1, 120, 69, 3200, 0, 0, 0, 0, 0, 1500, 300, 100, 1534, 0, 0, 5100, '2018-08-09 09:28:28', 0),
(100, 1, 121, 82, 2900, 0, 0, 0, 0, 0, 1500, 300, 100, 1300, 0, 0, 4800, '2018-08-09 09:28:28', 0),
(101, 1, 122, 83, 2900, 0, 0, 0, 0, 0, 1500, 300, 100, 1300, 0, 0, 4800, '2018-08-09 09:28:28', 0),
(102, 1, 123, 85, 2900, 0, 0, 0, 0, 0, 1500, 300, 100, 1300, 0, 0, 4800, '2018-08-09 09:28:28', 0),
(103, 1, 124, 78, 3200, 0, 0, 0, 0, 0, 1500, 300, 100, 1534, 0, 0, 5100, '2018-08-09 09:28:28', 0),
(104, 1, 126, 47, 3600, 0, 0, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 5500, '2018-08-09 09:28:28', 0),
(105, 1, 127, 59, 3600, 0, 0, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 5500, '2018-08-09 09:28:28', 0),
(106, 1, 128, 115, 3600, 0, 0, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 5500, '2018-08-09 09:28:28', 0),
(107, 1, 129, 9, 3600, 0, 0, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 5500, '2018-08-09 09:28:28', 0),
(108, 1, 130, 123, 3600, 0, 0, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 5500, '2018-08-09 09:28:28', 0),
(109, 1, 132, 56, 3600, 0, 0, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 5500, '2018-08-09 09:28:28', 0),
(110, 1, 133, 39, 3600, 0, 0, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 5500, '2018-08-09 09:28:28', 0),
(111, 1, 134, 79, 3200, 0, 0, 0, 0, 0, 1500, 300, 100, 1534, 0, 0, 5100, '2018-08-09 09:28:28', 0),
(112, 1, 135, 125, 3600, 0, 0, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 5500, '2018-08-09 09:28:28', 0),
(113, 1, 136, 54, 3600, 0, 0, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 5500, '2018-08-09 09:28:28', 0),
(114, 1, 137, 131, 3600, 0, 0, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 5500, '2018-08-09 09:28:28', 0),
(115, 1, 139, 116, 3600, 0, 0, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 5500, '2018-08-09 09:28:28', 0),
(116, 1, 140, 138, 3600, 0, 0, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 5500, '2018-08-09 09:28:28', 0),
(117, 1, 141, 92, 3600, 0, 0, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 5500, '2018-08-09 09:28:28', 0),
(118, 1, 142, 80, 3200, 0, 0, 0, 0, 0, 1500, 300, 100, 1534, 0, 0, 5100, '2018-08-09 09:28:28', 0),
(119, 1, 143, 132, 3600, 0, 0, 0, 0, 0, 1500, 300, 100, 1100, 0, 0, 5500, '2018-08-09 09:28:28', 0);

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
(1, 1, 2000, 1, 'NON RE FANDABLE FEE', 5, '2018-02-15 21:23:37', 10),
(2, 4, 3000, 1, 'RE-FANDABUL FEE', 5, '2018-02-15 21:24:06', 10),
(3, 1, 2000, 2, 'Non Re-fundabul fee', 5, '2018-02-15 21:43:04', 10),
(4, 4, 3000, 2, 'Re-fund abul fee', 5, '2018-02-15 21:43:42', 10),
(5, 1, 2000, 6, '২০১৭ / ২০১৮ থেকে সবাইকে  জামানত টাকা দিতে হয় ', 5, '2018-02-20 12:37:36', 10),
(6, 4, 3000, 6, '', 5, '2018-02-20 12:37:57', 10),
(7, 1, 1000, 8, 'Re-admission Fee ', 5, '2018-02-20 13:27:11', 10),
(8, 4, 3000, 8, '', 5, '2018-02-20 13:27:32', 10),
(9, 4, 2000, 10, 'তাকমিলা আহমেদ ডিসেম্বর ২০১৬ তে ভর্তি সময় জামানত এর ২০০০/= টাকা জমা দিয়েছে।', 5, '2018-02-22 12:32:30', 10),
(10, 4, 2000, 11, 'SWARNALI ACHARJEE ডিসেম্বর ২০১৬ তে ভর্তি সময় জামানত এর ২০০০/= টাকা জমা দিয়েছে।', 5, '2018-02-22 12:58:09', 10),
(11, 4, 3000, 15, 'SAMIA ISLAM আগের ID Number:  	801154   ২০১৭ তে ভর্তি সময় জামানত এর ৩০০০/= টাকা জমা দিয়েছে।', 5, '2018-02-23 13:07:49', 10),
(12, 4, 3000, 28, '', 5, '2018-04-16 14:47:40', 10),
(13, 1, 2000, 28, '', 5, '2018-04-16 14:48:01', 10),
(14, 1, 2000, 29, '', 5, '2018-04-16 14:48:17', 10),
(15, 4, 3000, 29, '', 5, '2018-04-16 14:48:32', 10),
(16, 1, 2000, 19, '', 5, '2018-04-16 14:49:02', 10),
(17, 4, 3000, 19, '', 5, '2018-04-16 14:49:18', 10),
(23, 2, 5500, 4, '', 5, '2018-08-09 15:55:42', 10),
(24, 2, 5500, 87, '', 5, '2018-08-09 15:57:17', 10),
(25, 2, 5500, 12, '', 5, '2018-08-09 16:06:13', 10),
(26, 2, 6000, 82, '', 5, '2018-08-09 16:12:46', 10),
(27, 2, 5500, 129, '', 5, '2018-08-09 16:14:34', 10),
(28, 2, 6000, 83, '', 5, '2018-08-09 16:15:15', 10),
(29, 2, 6000, 84, '', 5, '2018-08-09 16:15:43', 10),
(30, 2, 5500, 6, '', 5, '2018-08-09 16:16:17', 10),
(31, 2, 6000, 95, '', 5, '2018-08-09 16:16:48', 10),
(32, 2, 5500, 7, '', 5, '2018-08-09 16:17:19', 10),
(33, 2, 5500, 8, '', 5, '2018-08-09 16:17:40', 10),
(34, 2, 5500, 13, '', 5, '2018-08-09 16:18:30', 10),
(35, 2, 5500, 15, '', 5, '2018-08-09 16:22:17', 10),
(36, 2, 6000, 90, '', 5, '2018-08-09 16:22:39', 10),
(37, 2, 5000, 100, '', 5, '2018-08-09 16:23:25', 10),
(38, 2, 4000, 92, '', 5, '2018-08-09 16:24:03', 10),
(39, 2, 5000, 93, '', 5, '2018-08-09 16:24:41', 10),
(40, 2, 5500, 18, '', 5, '2018-08-09 16:26:02', 10),
(41, 2, 5500, 19, '', 5, '2018-08-09 16:26:38', 10),
(42, 2, 5500, 20, '', 5, '2018-08-09 16:26:57', 10),
(43, 2, 5500, 21, '', 5, '2018-08-09 16:27:17', 10),
(44, 2, 6000, 97, '', 5, '2018-08-09 16:27:41', 10),
(45, 2, 5500, 23, '', 5, '2018-08-09 16:28:08', 10),
(46, 2, 5500, 24, '', 5, '2018-08-09 16:28:32', 10),
(47, 2, 5500, 26, '', 5, '2018-08-09 16:30:00', 10),
(48, 2, 5500, 34, '', 5, '2018-08-09 16:31:07', 10),
(49, 2, 5500, 136, '', 5, '2018-08-09 16:31:24', 10),
(50, 2, 5500, 96, '', 5, '2018-08-09 16:33:24', 10),
(51, 2, 5500, 36, '', 5, '2018-08-09 16:34:18', 10),
(52, 2, 5500, 118, '', 5, '2018-08-09 16:34:56', 10),
(53, 2, 5500, 31, '', 5, '2018-08-09 16:35:33', 10),
(54, 2, 7000, 119, '', 5, '2018-08-09 16:36:16', 10),
(55, 2, 5500, 32, '', 5, '2018-08-09 16:36:51', 10),
(56, 2, 5500, 29, '', 5, '2018-08-09 16:39:34', 10),
(57, 2, 5500, 132, '', 5, '2018-08-09 16:40:13', 10),
(58, 2, 5000, 39, '', 5, '2018-08-09 16:44:41', 10),
(59, 2, 5100, 44, '', 5, '2018-08-09 16:45:11', 10),
(60, 2, 5100, 37, '', 5, '2018-08-09 17:02:16', 10),
(61, 2, 7000, 45, '', 5, '2018-08-09 17:02:49', 10),
(62, 2, 5100, 120, '', 5, '2018-08-09 17:03:21', 10),
(63, 2, 5100, 142, '', 5, '2018-08-09 17:03:58', 10),
(64, 2, 5100, 77, '', 5, '2018-08-09 17:04:30', 10),
(65, 2, 5000, 40, '', 5, '2018-08-09 17:05:04', 10),
(66, 2, 4800, 121, '', 5, '2018-08-09 17:06:06', 10),
(67, 2, 4800, 66, '', 5, '2018-08-09 17:06:32', 10),
(68, 2, 7000, 68, '', 5, '2018-08-09 17:07:02', 10),
(69, 2, 5000, 73, '', 5, '2018-08-09 17:07:40', 10),
(70, 2, 5500, 46, '', 5, '2018-08-12 11:56:59', 10),
(71, 2, 5500, 47, '', 5, '2018-08-12 11:57:24', 10),
(72, 2, 5000, 49, '', 5, '2018-08-12 11:58:04', 10),
(73, 2, 5500, 50, '', 5, '2018-08-12 11:58:45', 10),
(74, 2, 5500, 51, '', 5, '2018-08-12 11:59:16', 10),
(75, 2, 5500, 139, '', 5, '2018-08-12 11:59:51', 10),
(76, 2, 5500, 53, '', 5, '2018-08-12 12:00:15', 10),
(77, 2, 5500, 56, '', 5, '2018-08-12 12:00:45', 10),
(78, 2, 5500, 52, '', 5, '2018-08-12 12:01:09', 10),
(79, 2, 5500, 57, '', 5, '2018-08-12 12:01:30', 10),
(80, 2, 5500, 48, '', 5, '2018-08-12 12:02:13', 10),
(81, 2, 5500, 88, '', 5, '2018-08-12 12:03:52', 10),
(82, 2, 5500, 28, '', 5, '2018-08-12 12:04:19', 10),
(83, 2, 6000, 81, '', 5, '2018-08-12 12:05:35', 10),
(84, 2, 6000, 94, '', 5, '2018-08-12 12:06:54', 10),
(85, 2, 6000, 99, '', 5, '2018-08-12 12:07:10', 10),
(86, 2, 4000, 91, '', 5, '2018-08-12 12:08:18', 10),
(87, 2, 5100, 103, '', 5, '2018-08-12 12:09:40', 10),
(88, 2, 5100, 106, '', 5, '2018-08-12 12:10:06', 10),
(89, 2, 6000, 108, '', 5, '2018-08-12 12:10:28', 10),
(90, 2, 5500, 10, '', 5, '2018-08-12 14:58:10', 10),
(91, 2, 5500, 9, '', 5, '2018-08-12 14:59:37', 10),
(92, 2, 5500, 17, '', 5, '2018-08-12 15:00:02', 10),
(93, 2, 5500, 133, '', 5, '2018-08-12 15:00:19', 10),
(94, 2, 5500, 27, '', 5, '2018-08-12 15:00:52', 10),
(95, 2, 5500, 25, '', 5, '2018-08-12 15:01:15', 10),
(96, 2, 5500, 128, '', 5, '2018-08-12 15:02:23', 10),
(97, 2, 5500, 54, '', 5, '2018-08-12 15:02:44', 10),
(98, 2, 5500, 80, '', 5, '2018-08-12 15:03:10', 10),
(99, 2, 5500, 135, '', 5, '2018-08-12 15:03:33', 10),
(100, 2, 6000, 116, '', 5, '2018-08-12 15:04:31', 10),
(101, 2, 5900, 104, '', 5, '2018-08-12 15:05:56', 10),
(102, 2, 4800, 61, '', 5, '2018-08-12 16:33:05', 10),
(103, 2, 5100, 122, '', 5, '2018-08-12 16:33:46', 10),
(104, 2, 4800, 65, '', 5, '2018-08-12 16:34:28', 10),
(105, 2, 5100, 72, '', 5, '2018-08-12 16:34:50', 10),
(106, 2, 4800, 59, '', 5, '2018-08-12 16:35:29', 10),
(107, 2, 5100, 43, '', 5, '2018-08-12 16:36:05', 10),
(108, 2, 4800, 63, '', 5, '2018-08-12 16:36:35', 10),
(109, 2, 5000, 71, '', 5, '2018-08-12 16:37:04', 10),
(110, 2, 5000, 111, '', 5, '2018-08-12 16:37:29', 10),
(111, 2, 5100, 76, '', 5, '2018-08-12 16:37:52', 10);

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

--
-- Dumping data for table `room_info`
--

INSERT INTO `room_info` (`roomId`, `zone_info_zoneID`, `building_info_roomBuildingId`, `floor_info_roomFloorId`, `unit_info_roomUnitId`, `roomNumber`, `roomNote`, `roomStatus`, `roomTotalSeatNumber`, `roomAddedDate`, `roomAddedBy`) VALUES
(2, 5, 10, 25, 4, '108101', 'Room no. 101, Unit no. 01, Floor no. 01, House no. 08, Sylhet Zone', 1, 3, '2018-01-03 00:16:15', 10),
(3, 5, 10, 25, 4, '108102', 'Room no. 102, Unit no. 01, Floor no. 01, House no. 08, Sylhet Zone', 1, 2, '2018-01-03 00:16:41', 10),
(4, 5, 10, 25, 4, '108103', 'Room no. 104, Unit no. 01, Floor no. 01, House no. 08, Sylhet Zone', 1, 3, '2018-01-03 00:17:09', 10),
(5, 5, 10, 25, 4, '108104', '', 1, 2, '2018-01-03 00:18:02', 10),
(6, 5, 10, 25, 4, '108105', '', 1, 3, '2018-01-03 00:18:19', 10),
(7, 5, 10, 25, 4, '108106', '', 1, 3, '2018-01-03 00:18:35', 10),
(8, 5, 10, 25, 4, '108107', '', 1, 3, '2018-01-03 00:18:49', 10),
(9, 5, 10, 25, 4, '108108', '', 1, 3, '2018-01-03 00:19:23', 10),
(10, 5, 10, 25, 4, '108109', '', 1, 3, '2018-01-03 00:19:43', 10),
(11, 5, 10, 25, 4, '108110', '', 1, 1, '2018-01-03 00:20:03', 10),
(12, 5, 10, 26, 5, '108301', '', 1, 3, '2018-01-03 00:20:32', 10),
(13, 5, 10, 26, 5, '108302', '', 1, 3, '2018-01-03 00:20:49', 10),
(14, 5, 10, 26, 5, '108303', '', 1, 3, '2018-01-03 00:21:04', 10),
(15, 5, 10, 27, 6, '108401', '', 1, 3, '2018-01-03 00:21:23', 10),
(16, 5, 10, 27, 6, '108402', '', 1, 3, '2018-01-03 00:21:41', 10),
(17, 5, 10, 27, 6, '108403', '', 1, 3, '2018-01-03 00:21:59', 10),
(18, 5, 10, 27, 6, '108404', '', 1, 3, '2018-01-03 00:22:16', 10),
(19, 5, 10, 27, 6, '108405', '', 1, 3, '2018-01-03 00:22:30', 10),
(20, 5, 10, 27, 6, '108406', '', 1, 3, '2018-01-03 00:22:47', 10),
(21, 5, 10, 27, 6, '108407', '', 1, 1, '2018-01-03 00:23:01', 10),
(22, 5, 11, 28, 7, '120101', '', 1, 3, '2018-01-03 00:23:26', 10),
(23, 5, 11, 28, 7, '120102', '', 1, 3, '2018-01-03 00:23:47', 10),
(24, 5, 11, 28, 7, '120103', '', 1, 3, '2018-01-03 00:24:17', 10),
(25, 5, 11, 28, 7, '120104', '', 1, 3, '2018-01-03 00:24:34', 10),
(26, 5, 11, 28, 7, '120105', '', 1, 1, '2018-01-03 00:24:53', 10),
(27, 5, 11, 28, 7, '120106', '', 1, 1, '2018-01-03 00:25:09', 10),
(28, 5, 11, 29, 8, '120201', '', 1, 1, '2018-01-03 00:25:27', 10),
(29, 5, 11, 29, 8, '120202', '', 1, 4, '2018-01-03 00:25:41', 10),
(30, 5, 11, 29, 8, '120203', '', 1, 3, '2018-01-03 00:26:05', 10),
(31, 5, 11, 29, 8, '120204', '', 1, 3, '2018-01-03 00:26:31', 10),
(32, 5, 11, 29, 8, '120205', '', 1, 3, '2018-01-03 00:26:47', 10),
(33, 5, 11, 29, 8, '120206', '', 1, 1, '2018-01-03 00:27:01', 10),
(34, 5, 11, 30, 9, '120301', '', 1, 1, '2018-01-03 00:27:22', 10),
(35, 5, 11, 30, 9, '120302', '', 1, 4, '2018-01-03 00:27:39', 10),
(36, 5, 11, 30, 9, '120303', '', 1, 3, '2018-01-03 00:27:52', 10),
(37, 5, 11, 30, 9, '120304', '', 1, 3, '2018-01-03 00:28:08', 10),
(38, 5, 11, 30, 9, '120305', '', 1, 3, '2018-01-03 00:28:25', 10),
(39, 5, 11, 30, 9, '120306', '', 1, 1, '2018-01-03 00:28:40', 10),
(40, 5, 12, 31, 10, '122101', '', 1, 3, '2018-01-03 00:31:01', 10),
(41, 5, 12, 31, 10, '122102', '', 1, 2, '2018-01-03 00:31:22', 10),
(42, 5, 12, 31, 10, '122103', '', 1, 3, '2018-01-03 00:31:50', 10),
(43, 5, 12, 32, 11, '122401', '', 1, 3, '2018-01-03 00:32:29', 10),
(44, 5, 12, 32, 11, '122402', '', 1, 2, '2018-01-03 00:32:47', 10),
(45, 5, 12, 32, 11, '122403', '', 1, 3, '2018-01-03 00:33:06', 10),
(46, 5, 12, 33, 12, '122501', '', 1, 3, '2018-01-03 00:35:15', 10),
(47, 5, 12, 33, 12, '122502', '', 1, 2, '2018-01-03 00:35:28', 10),
(48, 5, 12, 33, 12, '122503', '', 1, 3, '2018-01-03 00:35:44', 10),
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
(93, 6, 13, 36, 23, '316', '', 1, 0, '2018-01-03 01:04:22', 10),
(94, 5, 11, 30, 9, '120307', '', 1, 2, '2018-07-15 19:24:22', 10),
(95, 5, 10, 26, 5, '108304', '', 1, 3, '2018-07-29 11:54:10', 10),
(96, 5, 10, 26, 5, '108305', '', 1, 3, '2018-07-29 11:54:42', 10),
(97, 5, 10, 26, 5, '108306', '', 1, 3, '2018-07-29 11:55:08', 10);

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
(7, 5, 10, 25, 4, 2, 6, 3600, 2, '001', 'Test Seat', 1, '2018-01-03 11:16:27', 10),
(8, 5, 10, 25, 4, 2, 6, 3600, 2, '002', '', 1, '2018-01-04 12:49:16', 10),
(9, 5, 10, 25, 4, 3, 6, 3600, 2, '003', '', 1, '2018-01-04 12:49:47', 10),
(10, 5, 10, 25, 4, 3, 6, 3600, 2, '004', '', 1, '2018-01-04 12:50:08', 10),
(11, 5, 10, 25, 4, 4, 6, 3600, 2, '005', '', 1, '2018-01-04 12:50:42', 10),
(12, 5, 10, 25, 4, 4, 6, 3600, 2, '006', '', 1, '2018-01-04 12:51:08', 10),
(13, 5, 10, 25, 4, 4, 6, 3600, 2, '007', '', 1, '2018-01-04 12:51:30', 10),
(14, 5, 10, 25, 4, 5, 6, 3600, 2, '008', '', 1, '2018-01-04 12:51:58', 10),
(15, 5, 10, 25, 4, 5, 6, 3600, 2, '009', '', 1, '2018-01-04 12:52:25', 10),
(16, 5, 10, 25, 4, 6, 6, 3600, 2, '010', '', 1, '2018-01-04 12:52:59', 10),
(17, 5, 10, 25, 4, 6, 6, 3600, 2, '011', '', 1, '2018-01-04 12:53:23', 10),
(18, 5, 10, 25, 4, 6, 6, 3600, 2, '012', '', 1, '2018-01-04 12:53:47', 10),
(20, 5, 10, 25, 4, 7, 6, 3600, 2, '013', '', 1, '2018-01-04 12:55:04', 10),
(21, 5, 10, 25, 4, 7, 6, 3600, 2, '014', '', 1, '2018-01-04 12:56:17', 10),
(22, 5, 10, 25, 4, 7, 6, 3600, 2, '015', '', 1, '2018-01-04 12:57:08', 10),
(23, 5, 10, 25, 4, 8, 6, 3600, 2, '016', '', 1, '2018-01-04 12:57:36', 10),
(24, 5, 10, 25, 4, 8, 6, 3600, 2, '017', '', 1, '2018-01-04 12:58:02', 10),
(25, 5, 10, 25, 4, 8, 6, 3600, 2, '018', '', 1, '2018-01-04 12:58:37', 10),
(26, 5, 10, 25, 4, 9, 7, 3200, 2, '019', '', 1, '2018-01-04 12:59:07', 10),
(27, 5, 10, 25, 4, 9, 7, 3200, 2, '020', '', 1, '2018-01-04 12:59:34', 10),
(28, 5, 10, 25, 4, 9, 7, 3200, 2, '021', '', 1, '2018-01-04 13:07:13', 10),
(29, 5, 10, 25, 4, 10, 7, 3200, 2, '022', '', 1, '2018-01-04 13:07:40', 10),
(30, 5, 10, 25, 4, 10, 7, 3200, 2, '023', '', 1, '2018-01-04 13:08:02', 10),
(31, 5, 10, 25, 4, 10, 7, 3200, 2, '024', '', 1, '2018-01-04 13:08:24', 10),
(32, 5, 10, 25, 4, 11, 7, 3200, 1, '025', '', 1, '2018-01-04 13:09:29', 10),
(33, 5, 10, 26, 5, 12, 6, 3600, 2, '026', '', 1, '2018-01-04 13:10:54', 10),
(34, 5, 10, 26, 5, 12, 6, 3600, 2, '027', '', 1, '2018-01-04 13:11:18', 10),
(35, 5, 10, 26, 5, 12, 6, 3600, 2, '028', '', 1, '2018-01-04 13:11:41', 10),
(36, 5, 10, 26, 5, 13, 6, 3600, 2, '029', '', 1, '2018-01-04 13:12:04', 10),
(37, 5, 10, 26, 5, 13, 6, 3600, 2, '030', '', 1, '2018-01-04 13:12:29', 10),
(38, 5, 10, 26, 5, 13, 6, 3600, 2, '031', '', 1, '2018-01-04 13:12:48', 10),
(39, 5, 10, 26, 5, 14, 6, 3600, 2, '032', '', 1, '2018-01-04 13:13:26', 10),
(40, 5, 10, 26, 5, 14, 6, 3600, 2, '033', '', 1, '2018-01-04 13:13:47', 10),
(41, 5, 10, 26, 5, 14, 6, 3600, 2, '034', '', 1, '2018-01-04 13:14:11', 10),
(42, 5, 10, 27, 6, 15, 6, 3600, 2, '035', '', 1, '2018-01-04 13:14:47', 10),
(43, 5, 10, 27, 6, 15, 6, 3600, 2, '036', '', 1, '2018-01-04 13:15:06', 10),
(44, 5, 10, 27, 6, 15, 6, 3600, 2, '037', '', 1, '2018-01-04 13:15:32', 10),
(45, 5, 10, 27, 6, 16, 6, 3600, 2, '038', '', 1, '2018-01-04 13:15:59', 10),
(46, 5, 10, 27, 6, 16, 6, 3600, 2, '039', '', 1, '2018-01-04 13:17:08', 10),
(47, 5, 10, 27, 6, 16, 6, 3600, 2, '040', '', 1, '2018-01-04 13:17:36', 10),
(48, 5, 10, 27, 6, 17, 6, 3600, 2, '041', '', 1, '2018-01-04 13:18:06', 10),
(49, 5, 10, 27, 6, 17, 6, 3600, 2, '042', '', 1, '2018-01-04 13:18:41', 10),
(50, 5, 10, 27, 6, 17, 6, 3600, 2, '043', '', 1, '2018-01-04 13:19:04', 10),
(51, 5, 10, 27, 6, 18, 6, 3600, 2, '044', '', 1, '2018-01-04 13:19:46', 10),
(52, 5, 10, 27, 6, 18, 6, 3600, 2, '045', '', 1, '2018-01-04 13:20:14', 10),
(53, 5, 10, 27, 6, 18, 6, 3600, 2, '046', '', 1, '2018-01-04 13:20:49', 10),
(54, 5, 10, 27, 6, 19, 6, 3600, 2, '047', '', 1, '2018-01-04 13:21:18', 10),
(55, 5, 10, 27, 6, 19, 6, 3600, 2, '048', '', 1, '2018-01-04 13:21:40', 10),
(56, 5, 10, 27, 6, 19, 6, 3600, 2, '049', '', 1, '2018-01-04 13:22:12', 10),
(57, 5, 10, 27, 6, 20, 6, 3600, 2, '050', '', 1, '2018-01-04 13:22:43', 10),
(58, 5, 10, 27, 6, 20, 6, 3600, 2, '051', '', 1, '2018-01-04 13:23:25', 10),
(59, 5, 10, 27, 6, 20, 6, 3600, 2, '052', '', 1, '2018-01-04 13:24:03', 10),
(60, 5, 10, 27, 6, 21, 10, 5100, 2, '053', '', 1, '2018-01-04 13:24:32', 10),
(61, 5, 11, 28, 7, 22, 7, 3200, 1, '054', '', 1, '2018-01-05 19:30:53', 10),
(62, 5, 11, 28, 7, 22, 7, 3200, 2, '055', '', 1, '2018-01-05 19:31:36', 10),
(63, 5, 11, 28, 7, 22, 7, 3200, 2, '056', '', 1, '2018-01-05 19:32:13', 10),
(64, 5, 11, 28, 7, 22, 7, 3200, 2, '057', '', 1, '2018-01-05 19:32:49', 10),
(65, 5, 11, 28, 7, 23, 8, 3100, 2, '058', '', 1, '2018-01-05 19:33:18', 10),
(66, 5, 11, 28, 7, 23, 8, 3100, 2, '059', '', 1, '2018-01-05 19:33:40', 10),
(67, 5, 11, 28, 7, 23, 8, 3100, 2, '060', '', 1, '2018-01-05 19:34:07', 10),
(68, 5, 11, 28, 7, 24, 7, 3200, 2, '061', '', 1, '2018-01-05 19:35:02', 10),
(69, 5, 11, 28, 7, 24, 7, 3200, 2, '062', '', 1, '2018-01-05 19:35:24', 10),
(70, 5, 11, 28, 7, 24, 7, 3200, 2, '063', '', 1, '2018-01-05 19:35:49', 10),
(71, 5, 11, 28, 7, 25, 7, 3200, 2, '064', '', 1, '2018-01-05 19:36:31', 10),
(72, 5, 11, 28, 7, 25, 7, 3200, 2, '065', '', 1, '2018-01-05 19:36:56', 10),
(73, 5, 11, 28, 7, 25, 7, 3200, 2, '066', '', 1, '2018-01-05 19:37:27', 10),
(74, 5, 11, 28, 7, 26, 10, 5100, 2, '067', '', 1, '2018-01-05 19:37:52', 10),
(75, 5, 11, 28, 7, 27, 7, 3200, 1, '123', '', 1, '2018-01-05 19:38:39', 10),
(76, 5, 11, 29, 8, 28, 6, 3600, 2, '068', '', 1, '2018-01-05 19:39:51', 10),
(77, 5, 11, 29, 8, 29, 9, 2900, 2, '069', '', 1, '2018-01-05 19:40:28', 10),
(78, 5, 11, 29, 8, 29, 7, 3200, 2, '070', '', 1, '2018-01-05 19:41:06', 10),
(79, 5, 11, 29, 8, 29, 7, 3200, 2, '071', '', 1, '2018-01-05 19:41:38', 10),
(80, 5, 11, 29, 8, 29, 7, 3200, 2, '072', '', 1, '2018-01-05 19:42:23', 10),
(81, 5, 11, 29, 8, 30, 9, 2900, 2, '073', '', 1, '2018-01-05 19:42:50', 10),
(82, 5, 11, 29, 8, 30, 9, 2900, 2, '074', '', 1, '2018-01-05 19:43:22', 10),
(83, 5, 11, 29, 8, 30, 7, 3200, 2, '075', '', 1, '2018-01-05 19:43:45', 10),
(84, 5, 11, 29, 8, 31, 9, 2900, 2, '076', '', 1, '2018-01-05 19:44:19', 10),
(85, 5, 11, 29, 8, 31, 9, 2900, 2, '077', '', 1, '2018-01-05 19:44:40', 10),
(86, 5, 11, 29, 8, 31, 9, 2900, 2, '078', '', 1, '2018-01-05 19:45:12', 10),
(87, 5, 11, 29, 8, 32, 9, 2900, 2, '079', '', 1, '2018-01-05 19:45:46', 10),
(88, 5, 11, 29, 8, 32, 9, 2900, 2, '080', '', 1, '2018-01-05 19:46:09', 10),
(89, 5, 11, 29, 8, 32, 9, 2900, 2, '081', '', 1, '2018-01-05 19:46:34', 10),
(90, 5, 11, 29, 8, 33, 10, 5100, 2, '082', '', 1, '2018-01-05 19:46:58', 10),
(91, 5, 11, 30, 9, 34, 7, 3200, 2, '083', '', 1, '2018-01-05 19:47:42', 10),
(92, 5, 11, 30, 9, 35, 8, 3100, 2, '084', '', 1, '2018-01-05 19:48:08', 10),
(93, 5, 11, 30, 9, 35, 7, 3200, 2, '085', '', 1, '2018-01-05 19:48:31', 10),
(94, 5, 11, 30, 9, 35, 7, 3200, 2, '086', '', 1, '2018-01-05 19:48:55', 10),
(95, 5, 11, 30, 9, 35, 7, 3200, 2, '087', '', 1, '2018-01-05 19:49:41', 10),
(96, 5, 11, 30, 9, 36, 8, 3100, 2, '088', '', 1, '2018-01-05 19:50:05', 10),
(97, 5, 11, 30, 9, 36, 8, 3100, 2, '089', '', 1, '2018-01-05 19:50:28', 10),
(98, 5, 11, 30, 9, 36, 8, 3100, 2, '090', '', 1, '2018-01-05 19:50:52', 10),
(99, 5, 11, 30, 9, 37, 7, 3200, 2, '091', '', 1, '2018-01-05 19:51:20', 10),
(100, 5, 11, 30, 9, 37, 7, 3200, 2, '092', '', 1, '2018-01-05 19:51:47', 10),
(101, 5, 11, 30, 9, 37, 7, 3200, 2, '093', '', 1, '2018-01-05 19:52:14', 10),
(102, 5, 11, 30, 9, 38, 8, 3100, 2, '094', '', 1, '2018-01-05 19:53:03', 10),
(103, 5, 11, 30, 9, 38, 7, 3200, 1, '095', '', 1, '2018-01-05 19:53:29', 10),
(104, 5, 11, 30, 9, 38, 7, 3200, 1, '096', '', 1, '2018-01-05 19:53:52', 10),
(105, 5, 11, 30, 9, 39, 10, 5100, 2, '097', '', 1, '2018-01-05 19:54:45', 10),
(106, 5, 12, 31, 10, 40, 6, 3600, 2, '098', '', 1, '2018-01-05 19:55:45', 10),
(107, 5, 12, 31, 10, 40, 6, 3600, 2, '099', '', 1, '2018-01-05 19:56:14', 10),
(108, 5, 12, 31, 10, 40, 6, 3600, 2, '100', '', 1, '2018-01-05 19:56:37', 10),
(109, 5, 12, 31, 10, 41, 6, 3600, 2, '101', '', 1, '2018-01-05 19:57:04', 10),
(110, 5, 12, 31, 10, 41, 6, 3600, 2, '102', '', 1, '2018-01-05 19:57:29', 10),
(111, 5, 12, 31, 10, 42, 6, 3600, 2, '103', '', 1, '2018-01-05 19:57:52', 10),
(112, 5, 12, 31, 10, 42, 6, 3600, 2, '104', '', 1, '2018-01-05 19:58:27', 10),
(113, 5, 12, 31, 10, 42, 6, 3600, 2, '105', '', 1, '2018-01-05 19:58:53', 10),
(114, 5, 12, 32, 11, 43, 6, 3600, 2, '106', '', 1, '2018-01-05 19:59:27', 10),
(115, 5, 12, 32, 11, 43, 6, 3600, 2, '107', '', 1, '2018-01-05 19:59:50', 10),
(116, 5, 12, 32, 11, 43, 6, 3600, 2, '108', '', 1, '2018-01-05 20:00:21', 10),
(117, 5, 12, 32, 11, 44, 6, 3600, 2, '110', '', 1, '2018-01-05 20:01:17', 10),
(118, 5, 12, 32, 11, 44, 6, 3600, 2, '111', '', 1, '2018-01-05 20:01:38', 10),
(119, 5, 12, 32, 11, 45, 6, 3600, 2, '112', '', 1, '2018-01-05 20:02:05', 10),
(120, 5, 12, 32, 11, 45, 6, 3600, 2, '113', '', 1, '2018-01-05 20:02:36', 10),
(121, 5, 12, 32, 11, 45, 6, 3600, 2, '114', '', 1, '2018-01-05 20:03:07', 10),
(122, 5, 12, 33, 12, 46, 6, 3600, 2, '115', '', 1, '2018-01-05 20:03:33', 10),
(123, 5, 12, 33, 12, 46, 6, 3600, 2, '116', '', 1, '2018-01-05 20:03:53', 10),
(124, 5, 12, 33, 12, 46, 6, 3600, 2, '117', '', 1, '2018-01-05 20:04:13', 10),
(125, 5, 12, 33, 12, 47, 6, 3600, 2, '118', '', 1, '2018-01-05 20:04:38', 10),
(126, 5, 12, 33, 12, 47, 6, 3600, 2, '119', '', 1, '2018-01-05 20:05:07', 10),
(127, 5, 12, 33, 12, 48, 6, 3600, 2, '120', '', 1, '2018-01-05 20:05:41', 10),
(128, 5, 12, 33, 12, 48, 6, 3600, 2, '121', '', 1, '2018-01-05 20:06:07', 10),
(129, 5, 12, 33, 12, 48, 6, 3600, 2, '122', '', 1, '2018-01-05 20:06:31', 10),
(131, 5, 11, 30, 9, 94, 6, 3600, 2, '124', '', 1, '2018-07-15 19:27:21', 10),
(132, 5, 11, 30, 9, 94, 6, 3600, 2, '125', '', 1, '2018-07-15 19:27:46', 10),
(133, 5, 10, 26, 5, 95, 6, 3600, 1, '126', '', 1, '2018-07-29 11:56:02', 10),
(134, 5, 10, 26, 5, 95, 6, 3600, 1, '127', '', 1, '2018-07-31 13:09:16', 10),
(135, 5, 10, 26, 5, 95, 6, 3600, 1, '128', '', 1, '2018-07-31 13:09:53', 10),
(136, 5, 10, 26, 5, 96, 6, 3600, 1, '129', '', 1, '2018-07-31 13:10:49', 10),
(137, 5, 10, 26, 5, 96, 6, 3600, 1, '130', '', 1, '2018-07-31 13:11:18', 10),
(138, 5, 10, 26, 5, 96, 6, 3600, 2, '131', '', 1, '2018-07-31 13:12:05', 10),
(139, 5, 10, 26, 5, 97, 6, 3600, 1, '132', '', 1, '2018-07-31 13:13:04', 10),
(140, 5, 10, 26, 5, 97, 6, 3600, 1, '133', '', 1, '2018-07-31 13:13:32', 10),
(141, 5, 10, 26, 5, 97, 6, 3600, 1, '134', '', 1, '2018-07-31 13:13:58', 10);

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
(7, 'Diploma', 1),
(8, 'Job Holder', 1);

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
(1, 'images/Nusrat_J_Jerin_Uncle.jpg', 'Md. Mukarrom ali ( Local Guardian )', 8),
(2, 'images/Local_Guardian_Pic.png', ' Local Guardian ', 9),
(3, 'images/Local_Guardian_Pic1.png', '', 10),
(4, 'images/SATRAJIT_ACHARJEE.jpg', 'SATRAJIT ACHARJEE ( Local Guardian )', 11),
(5, 'images/SATRAJIT_ACHARJEE1.jpg', 'HUSBAND ', 11),
(6, 'images/Local_Guardian_Pic2.png', 'Local Guardian', 13),
(7, 'images/Local_Guardian_Pic3.png', 'Local Guardian', 14),
(8, 'images/Local_Guardian_Pic4.png', '', 19),
(9, 'images/Local_Guardian_Pic5.png', '', 28),
(10, 'images/Father_Pic27.jpg', '', 39),
(11, 'images/Student_Pic37.png', '', 81),
(12, 'images/KOLI_KUMARI_DAS_SISTERI.jpg', 'SISTER', 82),
(13, 'images/Student_Pic42.png', '', 87),
(14, 'images/Mother_Pic3.jpg', '', 88),
(15, 'images/Local_Guardian_Pic6.png', '', 90),
(16, 'images/Local_Guardian_Pic7.png', '', 91),
(17, 'images/Local_Guardian_Pic8.png', '', 92),
(18, 'images/Local_Guardian_Pic9.png', '', 93),
(19, 'images/Rikha_dash_Brother1.jpg', 'SUSHNITA DAS ', 94),
(20, 'images/Female_Local_Guardian1.png', '', 99),
(21, 'images/Local_Guardian_Pic11.png', '', 100),
(22, 'images/Female_Local_Guardian2.png', '', 102),
(23, 'images/Local_Guardian_Pic12.png', '', 106),
(24, 'images/Local_Guardian_Pic13.png', '', 107),
(25, 'images/Bother_Pic3.jpg', 'BOTHER', 110),
(26, 'images/Local_Guardian_Pic14.png', '', 113),
(27, 'images/Bother_Pic7.jpg', '', 114),
(28, 'images/Student_Pic58.png', '', 115),
(29, 'images/Student_Pic59.png', '', 117),
(30, 'images/Student_Pic60.png', '', 118),
(31, 'images/AKHI_AKTER_Baba3.jpg', '', 124),
(32, 'images/AKHI_AKTER4.jpg', '', 126),
(33, 'images/FAHMIDA_A_SUMI_SISTER_S-5.jpg', 'TAHMIDA TANHA', 127),
(34, 'images/Desert.jpg', '', 130);

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
(1, '0010001', 'RIFAT JAKEYA AKHI ', '2', '0000-00-00', '01748352747', '1', 'N/A', 'N/A', 4, 7, 0, '1', 'BANGLADESHI', 1, 'VILL: MIRZAPUR,  P.O:  HOBIGONJ   P.S: HOBIGONJ   DIST: HOBIGONJ', 'MD. RAFIQUE MIAH', 'MS. ASMA AKTHER', '', 0, 0, '', 'images/akhi_room_101_s1011.jpg', 'images/college-id-card-500x500.jpg', 'images/company-id-cards-500x500.jpg', 'images/demo-image2.jpg', ' ', '0000-00-00'),
(2, '0020002', 'SWORNA DATTA ', '2', '0000-00-00', '01877262723', '7', 'N/A', 'N/A', 4, 8, 0, '2', 'BANGLADESHI', 1, 'VILL: BARAIGRAMM   P.O:  BORLAKHA   P.S:  BORLAKHA    DIST:  MOULOVIBAZAR', 'PROBIR KUMAR DATTA', 'SHOPNA RANI DEY', 'NEBENDU DEY ', 1761104296, 0, 'VILL: SOBOUGEBAG P.O:  SCRIMONGAL  P.S: SCRIMONGAL DIST: MOULOVIBAZAR', 'images/demo-image3.jpg', 'images/college-id-card-500x5001.jpg', '', '', 'FATHER / MOTHER NID NUMBER MISSING AND HER NID/ BARITH REG NUMBER MISSING', '0000-00-00'),
(3, '0030003', 'EMA KHATUN CHOWDHURY', '2', '0000-00-00', '01796299203', '7', 'N/A', 'N/A', 4, 9, 0, '1', 'BANGLADESHI', 1, 'VILL: NIZCHOWKI P.O: HORIDHORPUR, P.S: NABIGONJ, DIST: HOBIGONJ', 'LATE. MD. ILIAS CHOWDHURY', 'FOYJUNNESA CHOWDHURY', '', 0, 0, '', 'images/EMA_KHATUN_ID_801312.jpg', 'images/college-id-card-500x5002.jpg', '', '', '', '0000-00-00'),
(4, '0040004', 'Yeasmin Begum', '2', '1998-01-01', '01703831394', '7', '19983617729007749', 'N/A', 4, 10, 0, '1', 'BANGLADESHI', 1, 'Mothurapur, Nobigonj, Digholbak, Hobigonj, Sylhet', 'Md.Abdul Hakim', 'Mst. Afia Begum', '', 0, 0, '', 'images/Yasmin_Begum_ID_8001042.jpg', '', '', '', 'Old ID Number 80141 \r\nআগের ছাত্রীদের থেকে জামানত এর টাকা রাখা হত না ', '2018-02-15'),
(5, '0050005', 'SWARNA RANI DASH', '2', '0000-00-00', '01704408796', '2', '199458183855113839', 'N/A', 6, 11, 0, '2', 'BANGLADESH', 1, 'Vill: Sabujbug   P.O: Sreemangal,  P.S:  Sreemangal   Dist: Moulvibazar, ', 'SUNIL CHANDA DASH', 'DIPATI RANI DASH', 'DIPANKAR DAS', 1718016582, 2147483647, 'House:  Somota 32, Salobondar, sylhet', 'images/sowrna_rani_dash.jpg', 'images/demo-image1.jpg', '', '', 'N/A', '0000-00-00'),
(6, '0070006', 'SUMITRA RANI DEY', '2', '1998-07-03', '01782543556', '7', '19989015067013614', 'N/A', 4, 13, 0, '2', 'BANGLADESH', 1, 'Vill: Kodomtoli, P.O: Sachnabazar P.S: jamalgonj, Dist: Sunamgonj', 'BORUN CHANDRA DEY ', 'LILAPOTI RANI DEY ', 'Nil Roton ', 1716706721, 0, 'Vill: Kalipur, P.O:                            P.S:                                     Dist: Sunamgonj', 'images/Sumitra_Rani_Dey.jpg', '', 'images/Sumitra_BABA.jpg', '', '২০১৭ / ২০১৮ থেকে সবাইকে  জামানত টাকা দিতে হয় ', '2018-02-20'),
(7, '0090007', 'TANIA AKTHER', '2', '2000-03-12', '01754839525', '7', '200905027005405', 'N/A', 4, 15, 0, '1', 'BANGLADESH', 1, 'Vill: Jamalgonj   P.O: Sachna  P.S: Jamalgonj  Dist: Sunamgonj', 'OLI ULLAH ', ' 	GUL BAHAR ', 'Gul bahar ', 1778958500, 2147483647, 'Vill: Jamalgonj   P.O: Sachna  P.S: Jamalgonj  Dist: Sunamgonj', 'images/8041042p.jpg', '', 'images/8041042p1.jpg', '', 'তানিয়া আক্তার  কোচিং ২০১৭ ছাত্রীদের সাতে ছিল আর পুরন ছাত্রী তাই জামানত টাকা রাখা হয় নাই ', '2018-02-20'),
(8, '0100008', 'NUSRAT JAHAN JERIN ', '2', '2001-07-26', '01723548007', '7', 'N/A', 'N/A', 2, 16, 0, '1', 'BANGLADESH', 1, 'Vill: Notunpara   P.O:   Bishwambharpur P.S: Bishwambharpur  Dist:  Sunamgonj', 'MD. NURUL AMIN', 'M.S SHIRIA AKTER', 'Md. Mukarom Ali ', 1788838033, 0, 'Vill: Kuarpar P.O:  Sylhet     P.S:    Sylhet   Dist: Sylhet', 'images/Nusrat_J_Jerin.jpg', '', 'images/Nusrat_J_Jerin_baba.jpg', '', '২০১৭ / ২০১৮ থেকে সবাইকে  জামানত টাকা দিতে হয় ', '2018-02-20'),
(9, '0120009', 'NAZMA AKTER MONI', '2', '1995-05-05', '01706039783', '3', '91210036295962', 'N/A', 4, 18, 0, '1', 'BANGLADESH', 1, 'Vill: OABDA, P.O:  FENCHUGONJ   P.S: FENCHUGONJ  DIST: SYLHET', 'MD. HANIF ', 'SALEHA BEGUM', '', 0, 0, '', 'images/Nazma_akter_ID_800110.jpg', '', 'images/Father_Pic.jpg', '', 'আগের ছাত্রীদের থেকে জামানত এর টাকা রাখাহত না. \r\nবিঃদ্রঃ জামানত এর টাকা নেওয়া শুর হয় ২০১৬।  কোচিং এর ছাত্রীদের কাছ থেকে প্রথম জামানত এর টাকা অন্যদের থেকে  জামানত এর টাকা নেওয়া হয় নাই। ', '2018-02-21'),
(10, '0110010', 'Takmila Ahmed', '2', '1995-01-01', '01736502859', '7', 'N/A', 'N/A', 4, 17, 0, '1', 'BANGLADESH', 1, 'Vill: Baurgoria PO: Dagatshi Dist: Moulvibazar', 'Sadique Ahmed', 'Nasima Akter', '', 0, 0, '', 'images/Takmila_80192-1.jpg', '', 'images/Father_Pic1.jpg', '', 'তাকমিলা আহমেদ ডিসেম্বর ২০১৬ তে ভর্তি সময় জামানত এর ২০০০/= টাকা জমা দিয়েছে।\r\n\r\nবিঃদ্রঃ জামানত এর টাকা নেওয়া শুর হয় ২০১৬।  কোচিং এর ছাত্রীদের কাছ থেকে প্রথম জামানত এর টাকা অন্যদের থেকে  জামানত এর টাকা নেওয়া হয় নাই। ', '2018-02-22'),
(11, '0130011', 'SWARNALI ACHARJEE', '2', '1993-11-11', '01727733404', '7', 'N/A', '19936795815000030', 6, 20, 0, '2', 'BANGLADESH', 1, 'C/A SATRAJIT ACHARJEE REST INN HOSTEL AND RESTAURANT S R PLEZA MOULVIBAZAR , SYLHET ', 'TOLSIDS ACHARJEE', 'JUTHIKA ACHARJEE', 'SATRAJIT ACHARJEE', 1975007788, 2147483647, 'S.R PLAZA M, SAIFUR RAHMAN ROAD MOULVIBAZA, SYLHET', 'images/SWARNALI_ACHARJEE.jpg', '', 'images/Father_Pic2.jpg', '', 'SWARNALI ACHARJEE ডিসেম্বর ২০১৬ তে ভর্তি সময় জামানত এর ২০০০/= টাকা জমা দিয়েছে।\r\n\r\nবিঃদ্রঃ জামানত এর টাকা নেওয়া শুর হয় ২০১৬।  কোচিং এর ছাত্রীদের কাছ থেকে প্রথম জামানত এর টাকা অন্যদের থেকে  জামানত এর টাকা নেওয়া হয় নাই। ', '2018-02-22'),
(12, '0140012', 'JOYOTI DAS JOYA', '2', '1995-05-19', '01777952310', '3', '19985818385107772', 'N/A', 4, 21, 0, '2', 'BANGLADESH', 1, 'Vill: Ruposhpur  P.O: Sreemongol, P.S:  Sreemongol Dist: Moubvibazar, Sylhet', 'HIMADRI SHAKOR DAS', 'JHORNA ROY', 'SWAPON ROY', 1741284117, 0, 'LALDIGHIR PAR, SYHLET', 'images/Joyoti_80123.jpg', '', 'images/Father_Pic3.jpg', '', 'বিঃদ্রঃ জামানত এর টাকা নেওয়া শুর হয় ২০১৬।  কোচিং এর ছাত্রীদের কাছ থেকে প্রথম জামানত এর টাকা অন্যদের থেকে  জামানত এর টাকা নেওয়া হয় নাই। ', '2018-02-22'),
(13, '0150013', 'TAMA PAUL', '2', '1998-04-05', '01796958318', '7', '19985818385028090', 'N/A', 4, 22, 0, '2', 'BANGLADESH', 1, 'Vill: Uttarsur P.O: Srimangol  P.O:  Srimangol  P.S: Srimangol  Dist: Moulovibazar, Sylhet', 'Tarun Kumar Paul ', 'Ela Rani Paul', 'Asit Paul', 1625978542, 0, '', 'images/Tama_801122.jpg', '', 'images/Father_Pic4.jpg', '', 'বিঃদ্রঃ জামানত এর টাকা নেওয়া শুর হয় ২০১৬।  কোচিং এর ছাত্রীদের কাছ থেকে প্রথম জামানত এর টাকা অন্যদের থেকে  জামানত এর টাকা নেওয়া হয় নাই। ', '2018-02-22'),
(14, '0160014', 'Rima Akter ', '2', '1991-02-20', '01751295258', '3', 'N/A', '19919115352000070', 4, 23, 0, '1', 'BANGLADESH', 1, 'Vill: 24 para, Assampara,    P.O:  Jaintapur,  P.S: Jaintapur,   Dist:   Sylhet', 'Faruk Ahmed', 'Kayrun Nesa Parvin', 'Anamul Hoque Anam', 1711572602, 0, '', 'images/Rima_Akter_ID_800114.jpg', '', 'images/Father_Pic5.jpg', '', 'আগের ID Number: 801141\r\n\r\nবিঃদ্রঃ জামানত এর টাকা নেওয়া শুর হয় ২০১৬।  কোচিং এর ছাত্রীদের কাছ থেকে প্রথম জামানত এর টাকা অন্যদের থেকে  জামানত এর টাকা নেওয়া হয় নাই। ', '2018-02-23'),
(15, '0170015', 'SAMIA ISLAM', '2', '2011-11-09', '01717742766', '7', '200891237140067', 'N/A', 3, 24, 0, '1', 'BANGLADESH', 1, 'E-2/197, AMBAGAN COLONI, NGFF, FANCHUGONJ SYLHET', 'MD. SAIFUL ISLAM', 'NASRIN AKTER', '', 0, 0, '', 'images/Samiya_00_ID_801154.jpg', '', 'images/Father_Pic6.jpg', '', 'SAMIA ISLAM আগের ID Number:  	801154   ২০১৭ তে ভর্তি সময় জামানত এর ৩০০০/= টাকা জমা দিয়েছে।\r\n\r\nবিঃদ্রঃ জামানত এর টাকা নেওয়া শুর হয় ২০১৬।  কোচিং এর ছাত্রীদের কাছ থেকে প্রথম জামানত এর টাকা অন্যদের থেকে  জামানত এর টাকা নেওয়া হয় নাই। ', '2018-02-23'),
(16, '0180016', 'Kamrun Nahar Koli ', '2', '1996-07-23', '01724972525', '7', '19965818042005671', 'N/A', 4, 25, 0, '1', 'BANGLADESH', 1, 'Vill: Khalagoan, P.O: Karimpur, P.S: Rajnagor, Dist; Moulvibazar\r\n\r\nMunsibazar, Moulvibazar, Rajnagor, Karimpur, Moulvibazar ', 'Abdul Kadir', 'Syeda Ruhena Akter ', '', 0, 0, '', 'images/Kamrun_N_Koli_ID_800438.jpg', '', 'images/Father_Pic7.jpg', '', 'Kamrun Nahar Koli আগের ID Number: 801162\r\n\r\nবিঃদ্রঃ জামানত এর টাকা নেওয়া শুর হয় ২০১৬।  কোচিং এর ছাত্রীদের কাছ থেকে প্রথম জামানত এর টাকা অন্যদের থেকে  জামানত এর টাকা নেওয়া হয় নাই। ', '2018-02-23'),
(17, '0260017', 'Tamanna Akter', '2', '1997-01-01', ' 	01743667523', '7', 'N/A', 'N/A', 4, 33, 0, '1', 'BANGLADESH', 1, 'Vill: Joykalosh, P.S: South Sunamgong, P.O: Vjanigong, Dist: Sunamgong ', 'Leat: Shafikur Rahman ', 'Afia Begum', '', 0, 0, '', 'images/Tamanna_801122-1.jpg', '', '', '', 'Tamanna Akter  আগের ID Number 803752  ২০১৬ তে ভর্তি সময় জামানত এর ২০০০/= টাকা জমা দিয়েছে।\r\n\r\nবিঃদ্রঃ জামানত এর টাকা নেওয়া শুর হয় ২০১৬।  কোচিং এর ছাত্রীদের কাছ থেকে প্রথম জামানত এর টাকা অন্যদের থেকে  জামানত এর টাকা নেওয়া হয় নাই। ', '2018-02-24'),
(18, '0270018', 'Kuyel Datta Tuli', '2', '1997-01-01', '01838307425', '7', 'N/A', 'N/A', 4, 34, 0, '2', 'BANGLADESH', 1, 'Vill: Baroigram PO+PS: Barlekha Dist: Moulvibazar, Sylhet', 'Kripa Shindu Datta', 'Archana Datta', '', 0, 0, '', 'images/Kuyel_803762.jpg', '', 'images/Father_Pic8.jpg', '', 'Kuyel Datta Tuli আগের ID Number 803762  \r\n\r\nবিঃদ্রঃ জামানত এর টাকা নেওয়া শুর হয় ২০১৬।  কোচিং এর ছাত্রীদের কাছ থেকে প্রথম জামানত এর টাকা অন্যদের থেকে  জামানত এর টাকা নেওয়া হয় নাই। ', '2018-02-24'),
(19, '0280019', 'NILIMA JAHAN AKHI', '2', '1999-08-12', '01786500386', '4', '200890892700408', 'N/A', 4, 35, 0, '1', 'BANGLADESH', 1, 'Vill: Kutubpur, P.O/P.S: Sunamgonj, Dist: Sunamgonj', 'MD. ABDUL MOTHIN', 'MISS: JAHANARA BEGUM', '', 0, 0, '', 'images/Nilima_J_Akhi.jpg', '', 'images/Nilima_J_Akh_ABBAi.jpg', '', '', '2018-03-05'),
(20, '0290020', 'NUSRAT JAHAN ', '2', '1998-02-12', '01743051501', '3', '19983622602016738', '19983622606000011', 4, 36, 0, '1', 'BANGLADESH', 1, 'Vill: Master House Balla Road, P.O Chunarughat, P.S: Chunarughat Dist: Habiganj', 'Md. Abdul Musabbir Khasru', 'Samima Yeasmin Shayrin', 'Md. Mahbubur Rahman Shohel', 1717140267, 2147483647, 'Vill: Puran Bazar, P.O: Sayestaganj, P.S: Shaystaganj, Dist: Hobiganj', 'images/Nusrat_Jahan_ID_803832.jpg', '', 'images/Father_Pic9.jpg', '', '', '2018-03-08'),
(21, '0300021', 'Humayra Khanom Priya', '2', '2018-03-30', '01766347119', '7', 'N/A', '9113571427006', 4, 37, 0, '1', 'BANGLADESH', 1, 'Kochna Bohor, Fanchuganj, Fanchuganj, F.F Factory, Sylhet ', 'Mujibur Rahman Khan ', 'Shamimara Khanom', '', 0, 0, '', 'images/Humayra_Khanom_Priya_ID_800179.jpg', '', 'images/Father_Pic10.jpg', '', '', '2018-03-30'),
(22, '0320022', 'NAIMA ISLAM NAJU', '2', '1996-06-16', '01727668862', '7', '19969195007522433', 'N/A', 3, 39, 0, '1', 'BANGLADESH', 1, 'VILL: AKILPUR, P.O: PORGONA BAZAR, P.S: BISWANATH DIST: SYLHET', 'MD.NAZRUL ISLAM ', 'LATE. SWABANA ISLAM', 'AZIZUR RAHMAN ALI', 1727668862, 0, 'VILL: BADEALI, P.O: TUKER BAZAR, P.S: SYLHET, DIST: SYLHRT', 'images/Student_Pic.png', '', 'images/Father_Pic11.jpg', '', 'NAIMA ISLAM NAJU \r\n3000/= SEQURITY TAKA DAY NAI JOMA ', '2018-04-01'),
(23, '0330023', 'SUTAPA CHOWDHURY TUTUL', '2', '0000-00-00', '01736966878', '3', '19965818385026991', 'N/A', 4, 40, 0, '', 'BANGLADESH', 1, 'Surimangal, Sabujbag R/A, Surimangal,Moulavibazar, Sylhet', 'SUKESH CHOWDHURY', 'BWRNALI BHATTACHARGEE', '', 0, 0, '', 'images/Sutapa_chow_Tutul_ID_800382.jpg', '', 'images/Father_Pic12.jpg', '', '', '0000-00-00'),
(24, '0340024', 'Banosree Talukder ', '2', '1997-01-01', '01957666934', '7', 'N/A', 'N/A', 4, 41, 0, '2', 'BANGLADESH', 1, 'Vill: Notun para, P.O & P.S: Sunamgonj, Dist: Sunamgonj, Sylhet', 'Ranjit Kumar Talukder ', 'Mridula Rani Talukder ', '', 0, 0, '', 'images/Bonosrice_T_804103.jpg', '', 'images/Bother_Pic.jpg', '', '', '2018-04-01'),
(25, '0350025', 'Tasnia Binte amin ', '2', '1995-07-31', '01771844969', '1', '19955815685000134', '35385825', 4, 42, 0, '1', 'BANGLADESH', 1, 'Shamsher Nagar, Shamsher Nagar,Shamsher Nagar, moulvibazar', 'Aminur Rashid Chowdhury ', 'Fouzia Begum ', '', 0, 0, '', 'images/Tasnia_Binte_ID_800435.jpg', 'images/Tasnia_ID_01.jpg', 'images/Father_Pic13.jpg', '', '', '2018-04-01'),
(26, '0370026', 'Jakia Sultana ', '2', '1995-01-07', '01703843683', '3', '19955816577009502', 'N/A', 4, 44, 0, '1', 'BANGLADESH', 1, 'Podinapuri, Rajnagar, Rajnagar, Moulavibazar ', 'Md. Mobshir Ali', 'Aysha akter ', 'Nahid Ahmed', 1738043565, 2147483647, 'Podinapuri, Rajnagar, Rajnagar, Moulavibazar ', 'images/Jakia_Sultana_Tanni_ID_800437.jpg', 'images/Jakia_ID.jpg', 'images/Father_Pic14.jpg', '', '', '2018-04-07'),
(27, '0360027', 'Syeda Rahnuma Tarannum', '2', '0000-00-00', '01740690336', '7', 'N/A', 'N/A', 4, 43, 0, '1', 'BANGLADESH', 1, 'C/O: Syed Atiqul Haque Enatabad, Syed Bari, P.O: Habiganj, Dist: Habiganj', 'Syed Atiqul Haque', 'Syeda Rowshon Sultana', 'Syed Mohsin Husin', 1711227445, 0, 'N/A', 'images/Mother_Pic.jpg', '', 'images/Father_Pic15.jpg', '', '', '0000-00-00'),
(28, '0430028', 'Tanjina Sultana Helen', '2', '1997-12-31', '01774118937', '1', '19973222203071498', 'N/A', 7, 50, 0, '1', 'BANGLADESH', 1, 'Vill: khankashorif, P.O: Gaibandha, P.S: Gaibandha Dist: Gaibandha', 'Habibur Rahman', 'Lutfun Nahar', 'Abdullha- Al- Mamun', 1732372850, 2147483647, 'Hawapara/81, Zindabazar, Sylhet', 'images/Mother_Pic1.jpg', '', 'images/Father_Pic16.jpg', '', '', '2018-04-16'),
(29, '0420029', 'Sadia Akter Koli', '2', '1998-07-11', '017210457031', '5', '010274', 'N/A', 4, 49, 0, '1', 'BANGLADESH', 1, 'Vill: Horipur, P.S: Katal Khair, P.S: Jagannathpur, Dist: Sunamgonj', 'Md. Mojahid Ali', 'Asirun Nessa', '', 0, 0, '', 'images/Student_Pic_02.jpg', '', 'images/Father_Pic17.jpg', '', '', '2018-04-16'),
(30, '0410030', 'Minua Jahan Mim', '2', '1999-12-18', '01759030558', '3', '19999113571104659', 'N/A', 2, 48, 0, '1', 'Bangladeshi', 1, 'Vill: Otra, Barishal,    P.O: FF Factory   P.S: Fenchugony', 'Let. Harunor Rahshaed', 'Nasrin Sultana ', '', 0, 0, '', 'images/Mim_804412.jpg', '', 'images/Father_Pic18.jpg', '', '', '2018-04-17'),
(31, '0440031', 'Anika Tahsin Sadia', '2', '1998-09-08', '01719162848', '7', '19985874208052062', '19985827408000035', 4, 51, 0, '1', 'Bangladeshi', 1, 'Vill: Gobindrosree. P.O: Moulovibazar Sadar. P.S: Moulovibazar.', 'MD. Zakaria', 'Ftema Akther', '', 0, 0, '', 'images/Anika_T_Sadia_ID_2002192.jpg', '', 'images/Father_Pic19.jpg', '', '', '2018-04-17'),
(32, '0450032', 'Sabrina khan Suchi', '2', '1998-08-03', '01705240562', '', '19983617169023317', '', 4, 52, 0, '1', 'Bangladeshi', 1, 'Vill:Madhabpur. PO: Madhab pur. PS: Shantipara, Madhabpur. Dist: Habiganj', 'Shafiul Alam Khan', 'Kazi Shefa Begum', '', 0, 0, '', 'images/Suchi_804992-1.jpg', '', 'images/Father_Pic20.jpg', '', '', '2018-04-17'),
(33, '0470033', 'Mahmuda Akter', '2', '1996-06-12', '01771880806', '1', 'N/A', 'N/A', 4, 54, 0, '1', 'Bangladeshi', 1, 'vill: Holdigul. P.O: Kalar Bazar. P.S: Rajnagar. Dist: Moulovi bazar.', 'Fatik Miah', 'Surma Begum', '', 0, 0, '', 'images/Mahmuda_8041012.jpg', '', 'images/Father_Pic21.jpg', '', '', '2018-04-17'),
(34, '0480034', 'Anamika Bhattacharjee', '2', '0000-00-00', '01772594627', '7', '19995818385023532', '', 4, 55, 0, '2', 'Bangladeshi', 1, 'Vill: Uttarshur, Hobigonj road, Srimangol. P.S: Srimangol. P.S: Srimangol. Dist: Moulovi Bazar.', 'Kanak Lal Bhattacharjee', 'Gita Bhattacharjee', '', 0, 0, '', 'images/Student_Pic1.png', '', 'images/Father_Pic22.jpg', '', '', '0000-00-00'),
(35, '0500035', 'Saleha Begum', '2', '1997-01-01', '01741495864', '3', 'N/A', '9113160388156', 4, 57, 5500, '1', 'Bangladeshi', 1, 'Vill: Mirjapur. P.O:Mogla Bazar. P.S:South Surma. Dist: Sylhet', 'Jamir Ali', 'Sheikh Shafia', '', 0, 0, '', 'images/Student_Pic2.png', '', 'images/Father_Pic23.jpg', '', '', '2018-04-18'),
(36, '0510036', 'Fahmida Akter Rina ', '2', '1970-01-01', '01670 655375', '1', 'N/A', 'N/A', 4, 58, 0, '1', 'Bangladeshi', 1, 'Vill: Rajak Pur . P.O: Madobpur. P.S: Chunarughat . Dist: Hobiganj', 'Nasiruddin Ahmed', 'Fatema Khatun ', '', 0, 0, '', 'images/Student_Pic_021.jpg', '', 'images/Father_Pic24.jpg', '', '', '2018-04-18'),
(37, '0550037', 'Khadiza Begum', '2', '1999-05-05', '01729994948', '3', 'N/A', 'N/A', 3, 62, 0, '1', 'Bangladeshi', 1, 'Vill: Hasan Nagar . P.O: Sunamgonj . P.S: Sunamgonj .', 'Md Abdul Awal', 'Rupnaher Begum', '', 0, 0, '', 'images/Student_Pic3.png', '', 'images/Father_Pic25.jpg', '', '', '2018-04-18'),
(38, '0560038', 'Mst. Tanjina Jahan Shuba', '2', '2000-12-31', '01850125801', '7', 'N/A', 'N/A', 3, 63, 5100, '1', 'Bangladeshi', 1, 'Vill: Kushiura . P.O: Bangla Bazar . P.S: Dowara Bazar . Dist: Sunamgonj', 'Rayhanul Islam Robin', 'Nasima Khatun', '', 0, 0, '', 'images/Tania_Jahan.jpg', '', 'images/Father_Pic26.jpg', '', '', '2018-04-18'),
(39, '0580039', 'Sharmin Sultana Moni', '2', '1996-09-07', '01773655560', '', 'N/A', 'N/A', 4, 65, 0, '1', 'Bangladeshi', 1, 'Vill:Jogonnath pur . P.O: Kulaura . P.S: Kulaura . Dist:Moulvi Bazar', 'Shah Alam ', 'Fatema Begum', '', 0, 0, '', 'images/Student_Pic_022.jpg', '', '', '', '', '2018-04-18'),
(40, '0590040', 'Tahiyat Sultana Promi', '2', '1997-11-18', '01741956498', '', '19979121601003699', 'N/A', 4, 66, 0, '1', 'Bangladeshi', 1, 'Vill:Sreedhora. P.O;Sreedhora. P.S:Beanibazar. Dist: Sylhet', 'Ahmed Mohsen Babor', 'Mahmuda Khanom', '', 0, 0, '', 'images/Promi8041052_.jpg', '', 'images/Father_Pic28.jpg', '', '', '2018-04-18'),
(41, '0600041', 'Saima Nazmin', '2', '1998-01-07', '01748138197', '7', '19989028902001489', 'N/A', 4, 67, 5000, '1', 'Bangladeshi', 1, 'Vill:Udayan-64 bilpar Sunamgonj. P.O:Sunamgonj. P.S:Sunamgonj', 'Md. Abdul Khalique', 'Rahena Begum', '', 0, 0, '', 'images/Student_Pic4.png', '', 'images/Father_Pic29.jpg', '', '', '2018-04-18'),
(43, '0630043', 'Purobi Malakar', '2', '1998-11-27', '01794791497', '', '19985815657101668', 'N/A', 3, 70, 0, '2', 'Bangladeshi', 1, 'Vill:Moidail P.O:MunshiBazar. P.S: Kamalgonj .Dist:Moulvi Bazar', 'Ajitkumar Malakar', 'Shilpirani Malakar', '', 0, 0, '', 'images/Student_Pic6.png', '', 'images/Father_Pic31.jpg', '', '', '2018-04-18'),
(44, '0640044', 'Lucky Akter', '2', '1998-02-07', '01753463489', '1', '19983611106007214', 'N/A', 7, 71, 0, '1', 'Bangladeshi', 1, 'Vill:South Nandi Para. P.O:Baniyachong. P.S:Baniyachong. Dist:Hobiganj', 'ForashUddin', 'Dilara Begum', '', 0, 0, '', 'images/Lucky_ID_200124.jpg', '', 'images/Father_Pic32.jpg', '', '', '2018-04-18'),
(45, '0670045', 'Manmita Talukdar', '2', '1997-06-12', '01759530330', '3', 'N/A', 'N/A', 4, 74, 0, '2', 'Bangladeshi', 1, 'Vill:Puran Barunka. p.o:Balijuri. P.S:Tahirpur. Dist:Sunamgonj', 'Rabindra Talukdar', 'Usha Rani Dev', '', 0, 0, '', 'images/Student_Pic_023.jpg', '', 'images/Father_Pic33.jpg', '', '', '2018-04-18'),
(46, '0980046', 'Anika Jahan Dia', '2', '0000-00-00', '01789750800', '7', '', '', 4, 106, 0, '1', 'Bangladeshi', 1, 'Vill:Naliuri. P.S:East Badeshwar. P.S:Golapgonj. Dist:Sylhet', 'Nasim Ahmed', 'Sanjida Akther', '', 0, 0, '', 'images/ANIKA_JAHAN_DIA_2211094.jpg', '', 'images/Father_Pic34.jpg', '', '', '0000-00-00'),
(47, '0990047', 'Saida Nura', '2', '0000-00-00', '01760474660', '7', '', '', 4, 107, 0, '1', 'Bangladeshi', 1, 'Vill:West Barokut. P.O: West Barokut. P.S:Golapgonj', 'Saleh Ahmed', 'Fatema Ahmed', '', 0, 0, '', 'images/SAIDA_NURA_ID_2211083.jpg', '', 'images/Father_Pic35.jpg', '', '', '0000-00-00'),
(48, '1000048', 'Tahmina Tanjum Rafu', '2', '1998-12-22', '01782065603', '7', 'N/A', 'N/A', 4, 108, 0, '1', 'Bangladeshi', 1, 'Vill:Jareen Tea Est. P.O:Sreemangal. P.S:Sreemangal. Dist:Moulvibazar', 'Hazi MD Momin Ullah', 'Delwara Begum', '', 0, 0, '', 'images/Student_Pic9.png', '', 'images/Father_Pic36.jpg', '', '', '2018-04-19'),
(49, '1010049', 'Parmita Datta Roy', '2', '0000-00-00', '01765206163', '2', '19979022902001980', 'N/A', 4, 109, 0, '2', 'Bangladeshi', 1, 'Vill:Derai . P.O: Chandpur. P.S:Derai. Dist:Sunamgonj', 'Ashukkumar Datta Roy', 'Shanti Rani Roy', '', 0, 0, '', 'images/Parmita_ID_220112.jpg', '', 'images/Father_Pic37.jpg', '', '', '0000-00-00'),
(50, '1030050', 'Nure Nusrat Nuha', '2', '0000-00-00', '01776483772', '5', 'N/A', 'N/A', 4, 111, 0, '1', 'Bangladeshi', 1, 'Vill:938/1 Manik villa. surapur, Moulvibazar', 'Md. Humayun Khan', 'Shajeda Begum', '', 0, 0, '', 'images/demo-image.jpg', 'images/demo-image4.jpg', 'images/Father_Pic38.jpg', '', 'N/A', '0000-00-00'),
(51, '0051', 'Naznin Ahmed Rinkie', '2', '0000-00-00', '01794097641', '1', 'N/A', '19995815619009976', 4, 114, 0, '1', 'Bangladeshi', 1, 'Vill:Kamud pur. P.O: Komolgonj. P.S: Shamshernagar. Dist: Moulvibazar', 'Foyez Ahmed Ripon', 'Nilufa akther', '', 0, 0, '', 'images/MIM_ID_202222.jpg', '', 'images/Father_Pic39.jpg', '', '', '0000-00-00'),
(52, '1130052', 'Mistu Paul', '2', '1994-01-19', '01771716336', '3', 'N/A', '19943612657000102', 4, 120, 0, '2', 'Bangladeshi', 1, 'Vill:Deundi Tea Est. P.O: Chandpur. P.S:Chunarughat. Dist:Habigonj', 'Shukhamoy Paul', 'Rita Kana Paul', '', 0, 0, '', 'images/Student_Pic12.png', '', 'images/Father_Pic40.jpg', '', '', '2018-04-19'),
(53, '1100053', 'Tanni Saha', '2', '1995-12-15', '01752229708', '3', '19955828307023342', 'N/A', 4, 117, 0, '2', 'Bangladeshi', 1, 'Vill:Shaplabag R/A. P.O: Sreemangal   P.S:Sreemangal   Dist:Moulvibazar', 'Tapas Saha', 'Papia Saha', '', 0, 0, '', 'images/Student_Pic_025.jpg', '', 'images/Father_Pic41.jpg', '', '', '2018-04-19'),
(54, '1110054', 'Afsana Shahnaz', '2', '1997-01-29', '01705364838', '', 'N/A', 'N/A', 4, 118, 0, '1', 'Bangladeshi', 1, 'Vill:Naliura. P.O:Badeshwar. P.S:Golapgonj.', 'Md. Salim Uddin', 'Rima Salim', '', 0, 0, '', 'images/Student_Pic11.png', '', 'images/Father_Pic42.jpg', '', '', '2018-04-19'),
(55, '1150055', 'Nasira Begum', '2', '1996-01-01', '01746302774', '8', '19969018939102352', '', 3, 122, 0, '1', 'Bangladeshi', 1, 'Vill: Gobindopur. P.O: janigaon. dist: Sunamgonj', 'Md. Shirajul Bari', 'Mukta Khatun', '', 0, 0, '', 'images/Student_Pic13.png', '', 'images/Father_Pic43.jpg', '', '', '2018-04-19'),
(56, '1190056', 'Hena Akter', '2', '1998-11-15', '01728904682', '1', 'N/A', 'N/A', 4, 126, 0, '1', 'Bangladeshi', 1, 'Vill: Borodesh. P.O: Borodesh Bazar. P.S:Kanaighat. Dist: Sylhet', 'Farid Uddin', 'Fateha Begum', '', 0, 0, '', 'images/Student_Pic14.png', '', 'images/Father_Pic44.jpg', '', '', '2018-04-19'),
(57, '1210057', 'L. Suchona Sinha', '2', '1998-01-01', '01730659167', '5', 'N/A', 'N/A', 4, 128, 0, '2', 'Bangladeshi', 1, 'Vill:Tetai Gaon. P.O: Adampur Bazar. P.S: Kamalgonj. Dist: Moulvi Bazar', 'Ibunghal Sinha', 'Kunjarani Sinha', '', 0, 0, '', 'images/Student_Pic15.png', '', 'images/Father_Pic45.jpg', '', '', '2018-04-19'),
(58, '0680058', 'Quazi Zarin Tasnim', '2', '1995-09-06', '01799253417', '3', 'N/A', '27247130', 4, 76, 5500, '1', 'Bangladeshi', 1, 'Vill:Kamal Pur. P.O:Kamal Pur. P.S:Zakigonj. Dist: Sylhet', 'Md. Mushfiqur Rahman', 'Quazi Fatema', '', 0, 0, '', 'images/Student_Pic16.png', '', 'images/Father_Pic46.jpg', '', '', '2018-04-21'),
(59, '0690059', 'Jerin Tasmin', '2', '1970-01-01', '01714867723', '3', '06867', 'N/A', 4, 77, 0, '1', 'Bangladeshi', 1, 'Vill:Uttar Kulaura. P.O: Kulaura. P.S: Kulaura. Dist:Moulovibazar', 'Aminur Rashid', 'Hasna Rashid', '', 0, 0, '', 'images/Student_Pic17.png', '', 'images/Father_Pic47.jpg', '', '', '2018-04-21'),
(61, '0730061', 'Sanjida Islam', '2', '0000-00-00', '01853212999', '5', '19955821407001368', 'N/A', 4, 81, 0, '1', 'Bangladeshi', 1, 'Vill:Barlekha. P.O:Barlekha. P.S:Barlekha. Dist:Moulovi Bazar', 'Shirajul Islam', 'Nargis Akter', '', 0, 0, '', 'images/Sanjida_Islam_ID_200224.jpg', '', 'images/Father_Pic49.jpg', '', '', '0000-00-00'),
(63, '0760063', 'Sadia Sultana', '2', '0000-00-00', '01763899696', '7', 'N/A', 'N/A', 4, 84, 0, '1', 'Bangladeshi', 1, 'Vill: Hatbon. P.O:Borolekha. P.S: Borolekha. Dist:Moulovi bazar', 'Sanjob Ali', 'Nasima Begum', '', 0, 0, '', 'images/Sadia_Sultana_ID_200227.jpg', '', 'images/Father_Pic51.jpg', '', '', '0000-00-00'),
(65, '0790065', 'Farhana Karim Lira', '2', '1995-02-08', '01762877525', '', '19955815685000476', 'N/A', 4, 87, 0, '1', 'Bangladeshi', 1, 'Vill:Shsmsher Nagar. P.O:Shamsher Nagar. P.S: Shamsher Nagar. Dist: Moulovibazar', 'Rezaul Karim', 'Earunnassa Begum', '', 0, 0, '', 'images/Student_Pic21.png', '', 'images/Father_Pic53.jpg', '', '', '2018-04-21'),
(66, '0800066', 'Bijoya Banik', '2', '1970-01-01', '01764231423', '8', '19959028904002210', '', 4, 88, 0, '2', 'Bangladeshi', 1, 'P.O:Sunamgonj Sadar. P.S:Sunamgonj. Dist: Sunamgonj', 'Blaram Banik', 'Devi Banik', '', 0, 0, '', 'images/Student_Pic22.png', '', 'images/Father_Pic54.jpg', '', '', '2018-04-21'),
(67, '0810067', 'Yasmin Akter', '2', '1995-03-01', '01911146729', '7', '019953617714000767', 'N/A', 4, 89, 4800, '1', 'Bangladeshi', 1, 'Vill:Shibopasha. P.O:Nabiganj. P.S:Nabigonj. Dist: Habigonj', 'Mashuk Ahmed', 'Shelina Akter', '', 0, 0, '', 'images/Student_Pic_028.jpg', '', 'images/Father_Pic55.jpg', '', '', '2018-04-21'),
(68, '0820068', 'Farzana Akter', '2', '0000-00-00', '01706905653', '1', '19959113137048815', 'N/A', 4, 90, 0, '1', 'Bangladeshi', 1, 'Vill:Borchok. P.O:Jalalpur. P.S: Muglabazar. Dist: Sylhet', 'Harunur Rashid', 'Nazma Begum', '', 0, 0, '', 'images/Farjana_Akter_ID_200232.jpg', '', 'images/Father_Pic56.jpg', '', '', '0000-00-00'),
(69, '0830069', 'Tonoya Dhar', '2', '1970-01-01', '01788629259', '7', '19966827507080841', 'N/A', 4, 91, 5100, '2', 'Bangladeshi', 1, 'Vill:Srimangal. P.O:Srimangal. P.S:Srimangal. Dist: Moulovibazar', 'Umapada Dhar', 'Shukriti Dhar', '', 0, 0, '', 'images/Student_Pic_029.jpg', '', 'images/Father_Pic57.jpg', '', '', '2018-04-21'),
(70, '0840070', 'Sabikun Nahar Mukta', '2', '1970-01-01', '01768338949', '7', '19989112713014273', 'N/A', 4, 92, 0, '1', 'Bangladeshi', 1, 'Vill:Chanpur. P.O:Companigonj. P.S: Companigonj. Dist: Sylhet', 'Md.Shamsul Alam', 'Mst. Fatema Alam', '', 0, 0, '', 'images/Student_Pic_0210.jpg', '', 'images/Father_Pic58.jpg', '', '', '2018-04-21'),
(71, '0880071', 'Monisha Ray', '2', '1995-01-05', '01741825415', '7', '19951211332003476', 'N/A', 4, 96, 0, '2', 'Bangladeshi', 1, 'Vill:Satgoan.  P.O: Chandpur.  P.S: Bijoynagar. Dist: Brahmanbaria', 'Bikash Kamal Roy', 'Gouri Ray', '', 0, 0, '', 'images/Student_Pic_0211.jpg', '', 'images/Father_Pic59.jpg', '', '', '2018-04-21'),
(72, '0850072', 'Aisha', '2', '1970-01-01', '01741760978', '3', '', '4824502164710', 4, 93, 0, '1', 'Bangladeshi', 1, 'Vill:Janpur. p.o: sirajgonj sadar. P.S:sirajgonj sadar.  Dist: Sirajgonj', 'Late. Md Billal Mia', 'Nasima Akter', '', 0, 0, '', 'images/Student_Pic24.png', '', 'images/Father_Pic60.jpg', '', '', '2018-04-21'),
(73, '0890073', 'Moyouri Paul', '2', '1996-05-11', '01796609904', '3', '19955827507040849', 'N/A', 4, 97, 0, '2', 'Bangladeshi', 1, 'Vill:Sreemangoal. P.O:Sreemangoal. p.s:  Sreemangoal Dist: Moulovi bazar', 'Monoranjon Paul', 'Sheuli Paul', '', 0, 0, '', 'images/Student_Pic27.png', '', 'images/Father_Pic63.jpg', '', '', '2018-04-21'),
(76, '0930076', 'Kulsuma Begum ', '2', '1970-01-01', '01778867250', '7', 'N/A', 'N/A', 2, 101, 0, '1', 'Bangladeshi', 1, 'Vill:Sodar Ghat. P.O:Notun Bazar. P.S:Nobigonj. Dist:Hobiganj', 'Shah Abdul Lotif', 'Shah Halima Begum', '', 0, 0, '', 'images/Student_Pic_024.jpg', '', 'images/Father_Pic69.jpg', '', '', '2018-04-22'),
(77, '0910077', 'Tanjina Akter Sumi', '2', '0000-00-00', '01995822325', '7', 'N/A', 'N/A', 4, 99, 0, '1', 'Bangladeshi', 1, 'Vill:Shahbazpur. P.O: Shaistagonj. P.S: Shaistagonj. Dist:Habigonj', 'Md. Abdul Kuddus', 'Jahanara  Begum', '', 0, 0, '', 'images/TANJINA_AKTER_SUMI_R-20304.jpg', '', 'images/TANJINA_AKTER_SUMI_R-20304_BABA.jpg', '', '', '0000-00-00'),
(78, '0940078', 'Kabita Begum', '2', '1970-01-01', '01799247858', '7', 'N/AV', '19919014776000182', 4, 102, 5000, '1', 'Bangladeshi', 1, 'Vill: Kubajpur. P.O: Kubajpur. P.S: Jagannathpur. Dist: Sunamgonj', 'Sajjadur Rahman Jonu', 'Nessarun Begum', '', 0, 0, '', 'images/Student_Pic34.png', '', 'images/Father_Pic71.jpg', '', '', '2018-04-22'),
(80, '1120080', 'Tanjina Akter', '2', '1992-07-12', '01795432905', '5', 'N/A', 'N/A', 2, 119, 0, '1', 'Bangladeshi', 1, 'Vill:Naliura. P.O:East Bhadeswar. P.S:Golapgonj. Dist: Sylhet', 'Selim Uddin', 'Rina Begum', '', 0, 0, '', 'images/Student_Pic36.png', '', 'images/Father_Pic73.jpg', '', '', '2018-04-25'),
(81, '0010081', 'SHARABONY GUPTA ', '2', '0000-00-00', '01752622056', '7', '20003612657918642', 'N/A', 3, 7, 0, '2', 'Bangladeshi', 1, 'VILL: LUSKERPOUR, P.O: CHAND POUR, P.O: CHUNARUGHAT, DIST: HABIGANJ', 'GHNASHYAM GUPTA', 'SHAFALI GUPTA', '', 0, 0, '', 'images/SHARABONY_GUPTA_R-101_S-001.jpg', '', 'images/SHARABONY_GUPTA_BABA_R-101_S-001.jpg', '', 'She is a Coaching Student and Seat Booking Only 4/5 Month So, 500 tk  Additional Charge Extra.  ', '0000-00-00'),
(82, '0020082', 'KOLI KUMARI DAS SRABONI', '2', '0000-00-00', '01743090189', '7', 'N/A', 'N/A', 3, 8, 0, '2', 'Bangladeshi', 1, 'VILL;NOWAGRAM P.O:BEANIBAZAR P.S;BEANI BAZAR DIST:SYLHET', 'KORUNA MOY DAS', 'LUCKY RANI DAS', 'TULI RANI DAS LABONI', 1705634709, 0, 'VILL:NOWAGRAM P.O:BEANIBAZAR P.S:BEANIBAZAR DIST:SYLHETKH', 'images/KOLI_KUMARI_DAS_SRABONI.jpg', 'images/Student_Pic38.png', 'images/Father_Pic75.jpg', '', 'She is a Coaching Student and Seat Booking Only 4/5 Month So, 500 tk  Additional Charge Extra.  ', '0000-00-00'),
(83, '0050083', 'RIPA CHAKRABARTY RAKHI', '2', '0000-00-00', '01700686029', '1', '19993626008000221', 'N/A', 3, 11, 0, '2', 'Bangladeshi', 1, 'VILL:JOYNOGOR P.O:NABIGANJ P.S:NABIGANJ DIST:HABIGANJ', 'ABINASH CHAKRABARTY', 'RINA CHAKRBARTY', '', 0, 0, '', 'images/Ripa_chakrabarty.jpg', '', 'images/Yeasmin_Begum_Baba.jpg', '', 'She is a Coaching Student and Seat Booking Only 4/5 Month So, 500 tk  Additional Charge Extra.  ', '0000-00-00'),
(84, '0060084', 'KEYA CHOKROBORTY', '2', '0000-00-00', '01731202094', '7', '199936260080001623', 'N/A', 3, 12, 0, '2', 'Bangladeshi', 1, 'VILL:SHIBOPASHA P.O:NOBIGANJ P.S:NOBIGANJ DIST:HOBIGANJ', 'SOMIRON CHOKROBORTY', 'KOBITA CHOKROBORTY', '', 0, 0, '', 'images/KEYA_CHOKROBORTY.jpg', '', 'images/KEYA_CHOKROBORTY_Baba.jpg', '', 'She is a Coaching Student and Seat Booking Only 4/5 Month So, 500 tk  Additional Charge Extra.  ', '0000-00-00'),
(86, '0540086', 'RUMANA AKTER', '2', '2000-12-08', '', '7', 'N/A', 'N/A', 3, 61, 0, '1', 'Bangladeshi', 1, 'VILL:KANDA GOW P.O:SASHNA BAZAR P.S:JAMALGANJ DIST:SUNAMGANJ', 'Md. ABDUSSHAHID ', 'MST SAFIQUNNAHER', 'RAFIQUL ISLAM', 1705084518, 0, '', 'images/Student_Pic_0214.jpg', '', 'images/Father_Pic79.jpg', '', 'UNIVERCITY COACHING', '2018-06-23'),
(87, '0130087', 'MANISHA PAUL', '2', '1970-01-01', '01998282866', '7', 'N/A', 'N/A', 2, 20, 0, '2', 'BANGLADESHI', 1, 'VILL: BRAHMAN BARIA, P.O: BRAHMAN BARIA P.S: BRAHMAN BARIA, DIST: BRAHMAN BARIA', 'MADHUSUD PAUL', 'RINA PAUL', 'RITA PUL', 0, 0, '', 'images/Mother_Pic2.jpg', '', 'images/Bother_Pic1.jpg', '', '', '2018-06-23'),
(88, '0160088', 'ANANNA PAUL ', '2', '1999-01-01', '01903722203', '7', 'N/A', 'N/A', 2, 23, 0, '2', 'BANGLADESHI', 1, 'VILL: PAIKPARA, P.O: BARHMAN BARIA, P.S: BARHMAN BARIA, DIST: BARHMAN BARIA', 'MONINDRA PAUL', 'AJANTA PUL', 'SHANKA CHOWDRY', 1747572818, 0, '', 'images/ANANNA_PAUL_016.jpg', '', 'images/Father_Pic80.jpg', '', '', '2018-06-23'),
(89, '1020089', 'SHAHIDA SULTANA ', '2', '1992-12-13', '01768271837', '7', 'N/A', '19928428709000054', 7, 110, 5500, '1', 'BANGLADESHI', 1, 'VILL: BADEPASHA, P.O: DEPUTI BAZAR P.S: GOLABAGANJ DIST: SYLHET', 'FEROJ ALI ', 'LUTFA BEGUM', '', 0, 0, '', 'images/Student_Pic_0215.jpg', '', 'images/Bother_Pic2.jpg', '', '', '2018-06-23'),
(90, '0180090', 'Tamanna Akter shimu', '2', '0000-00-00', '01742985763', '7', 'N/A', 'N/A', 3, 25, 0, '1', 'Bangladeshi', 1, 'vill:shalla p.o:ghungar goan p.s:shalla dist:sunam gonj', 'barkat ali', 'kalpona begum', 'md:bodoruddin', 1765558914, 0, 'vill:tuker bazar', 'images/Tamanna_Akter_shimu.jpg', '', 'images/Father_Pic81.jpg', '', 'She is a Coaching Student and Seat Booking Only 4/5 Month So, 500 tk  Additional Charge Extra.  ', '0000-00-00'),
(91, '0230091', 'Fahmida Akther ', '2', '0000-00-00', '01865429548', '5', 'N/A', 'N/A', 3, 30, 0, '1', 'Bangladeshi', 1, 'vill:bishawnath pur p.o:jury p.s:jury dist:moulvibazar', 'Md. Abdul Khalique', 'anowara begum', 'md.monir hussin', 1735125487, 0, 'vill:caradigirpar p.o:sylhet p.s:sylhet dist:sylhet', 'images/Fahmida_Akther.jpg', '', 'images/Father_Pic82.jpg', '', 'She is a Coaching Student and Seat Booking Only 4/5 Month So, 1100 tk Special Discount.', '0000-00-00'),
(92, '0220092', 'Shefaly akther', '2', '0000-00-00', '01973746511', '7', 'N/A', 'N/A', 3, 29, 0, '1', 'Bangladeshi', 1, 'vill:hariram pur p.o:jury p.s:jury dist:moulvibazar', 'latebacchu miah', 'kamina begum', 'kamal hossain', 1725746511, 0, 'vill:hariram pur p.o:jury p.s:jury dist:moulvibazar', 'images/Shefaly_akther.jpg', '', 'images/Father_Pic83.jpg', '', 'She is a Coaching Student and Seat Booking Only 4/5 Month So, 1100 tk Special Discount ', '0000-00-00'),
(93, '0240093', 'JOTY AKTHER ', '2', '0000-00-00', '01721380120', '7', '20003614457018697', 'N/A', 3, 31, 0, '1', 'Bangladeshi', 1, 'vill:hobiganj p.o:hobiganj p.s:hobiganj dist:hobiganj', 'NOOR ISLAM', 'FATEMA KHATUN', 'jahirul islam', 1729979096, 0, 'vill:hobigonj p.o:hobigonj p.s:hobigonj dist:hobigonj', 'images/JOTY_AKTHER.jpg', '', 'images/JOTY_AKTHER_Mother.jpg', '', 'She is a Coaching Student and Seat Booking Only 4/5 Month So, 100 tk Special Discount.', '0000-00-00'),
(94, '0380094', 'Rikha dash', '2', '0000-00-00', '01729400739', '7', 'N/A', 'N/A', 3, 45, 0, '2', 'Bangladeshi', 1, 'vill:habigonj p.o:habigonj p.s:habigonj dist:habigonj', 'paresh dash', 'biva dash', 'sushmita das', 1756957897, 0, 'vill:sylhet p.o:sylhet p.s:sylhet dist:sylhet', 'images/Rikha_dash.jpg', '', 'images/Local_Guardian_Pic17.png', '', 'She is a Coaching Student and Seat Booking Only 4/5 Month So, 500 tk  Additional Charge Extra.  ', '0000-00-00'),
(95, '0080095', 'RUMANA AKTER', '2', '0000-00-00', '01705084518', '7', 'N/A', 'N/A', 3, 14, 0, '1', 'Bangladeshi', 1, 'VILL:KANDA GOW P.O:SASHNA BAZAR  P.S:JAMAL GANJ DIST:SUNAMGANJ', 'Md. ABDUSSHAHID', 'MST SAFIQUNNAHER', '', 0, 0, '', 'images/Student_Pic43.png', '', 'images/Father_Pic85.jpg', '', 'She is a Coaching Student and Seat Booking Only 4/5 Month So, 500 tk  Additional Charge Extra.  ', '0000-00-00'),
(96, '0410096', 'AKHI AKTER', '2', '0000-00-00', '01760126620', '7', 'N/A', 'N/A', 3, 48, 0, '1', 'Bangladeshi', 1, 'VILL:ATGHOR P.O:NAZIRA BAD P.S:MOULOVI BAZAR SODOR', 'ABDUL MANNAN', 'RUBY BEGUM', '', 0, 0, '', 'images/AKHI_AKTER.jpg', '', 'images/AKHI_AKTER_Baba.jpg', '', 'ADD:FEE MONTHLY FEE', '0000-00-00'),
(97, '0310097', 'PROTYASA DEV TOMA', '2', '0000-00-00', '01747277556', '7', 'N/A', 'N/A', 3, 38, 0, '1', 'Bangladeshi', 1, 'VILL:KHALAGAON P.O:KARIM PUR P.S:RAJNAGAR DIST:MOULOVI BAZAR', 'NILADRI DEV', 'USAH RANI DEV', 'PROTITI DEV TROPA', 1792110032, 0, 'WOMENS MEDICAL COLLEGE HUSTEL,SYLHET', 'images/PROTYASA_DEV_TOMA.jpg', '', 'images/PROTYASA_DEV_TOMA_Mother.jpg', '', 'She is a Coaching Student and Seat Booking Only 4/5 Month So, 500 tk  Additional Charge Extra.  ', '0000-00-00'),
(98, '0780098', 'ASMA AKTER', '2', '0000-00-00', '01759531156', '7', 'N/A', 'N/A', 3, 86, 5000, '1', 'Bangladeshi', 1, 'VILL:KRISNA PUR P.O:MIRASHI P.S CHUNARUGHAT DIST:HABIGANJ', 'JOMRUT ALI', 'ANWARA KHATUN', 'RAJIB AHMED', 1737098165, 0, 'CHATTAK,SUNAMGANJ', 'images/ASMA_AKTER_R-20204.jpg', '', 'images/Father_Pic88.jpg', '', 'She is a Coaching Student and Seat Booking Only 4/5 Month So, 200 tk  Additional Charge Extra.  ', '0000-00-00'),
(99, '0390099', 'Rima Das', '2', '0000-00-00', '01521234405', '7', 'N/A', 'N/A', 3, 46, 0, '2', 'Bangladeshi', 1, 'vill:Habigonj p.o:habigonj p.s:habigonj dist:habiggonj', 'paresh dash', 'Biva dash', 'Sushmita das', 1756957897, 0, 'Vill:sylhty p.o:sylhty p.s:sylhty dist:sylhty', 'images/Rima_Das.jpg', '', 'images/Rima_Das_Brother.jpg', '', 'She is a Coaching Student and Seat Booking Only 4/5 Month So, 500 tk  Additional Charge Extra.  ', '0000-00-00'),
(100, '0210100', 'Pabia Akter', '2', '0000-00-00', '01712712536', '7', 'N/A', 'N/A', 3, 28, 0, '1', 'Bangladeshi', 1, 'Vill:Mulinogor p.o:Vimkhali p.s:Jamal gonj Dist:Sunam gong', 'Sumsul Hoque', 'Anjumanara', 'Kowser alam', 1726536993, 0, 'Vill:Tilagoau P.o:Sylhet P.s:Sylhet Dist:Sylhet', 'images/Pabia_Akter.jpg', '', 'images/Pabia_Akte_Babar.jpg', '', 'She is a Coaching Student and Seat Booking Only 4/5 Month So, 500 tk Additional Charge Extra ', '0000-00-00'),
(101, '0650101', 'Tania Akter', '2', '0000-00-00', '01741745126', '1', '20009024003895357', 'N/A', 3, 72, 5100, '1', 'Bangladeshi', 1, 'Vill:Derai P.o:Chand Pur P.s:Derai Dist:Sunam Gonj', 'Mohibur Rahman', 'Mashda Akter', '', 0, 0, '', 'images/TANIA_AKTER_R-20104.jpg', '', 'images/TANIA_AKTER_R-20104_BABA.jpg', '', 'AddFee MonthlyFee', '0000-00-00'),
(102, '0610102', 'Farida Akther', '2', '0000-00-00', '01791711297', '3', 'N/A', 'N/A', 3, 68, 5100, '', 'Bangladeshi', 1, 'Vill:Chondi pur P.o:Derai P.s:Deri Dist:Sunam Gonj', 'Sayful Islam', 'Asma Akther', 'Juma Akther', 1754989593, 0, 'Vill:Sylhet p.o:Sylhet p.s:Sylhet Dist:Sylhet', 'images/FORIDA_AKTER_R-20103.jpg', '', 'images/Father_Pic92.jpg', '', 'She is a Coaching Student and Seat Booking Only 4/5 Month ', '0000-00-00'),
(103, '0860103', 'ROMANA AKTHER Reshma', '2', '0000-00-00', '01756375792', '7', 'N/A', 'N/A', 3, 94, 0, '1', 'Bangladeshi', 1, 'Vill:Ananto Pur P.o:HabigonjSadar P.s:Habigonj Dist;Habigonj', 'Md.Madhu Miah', 'Rahima Katun', '', 0, 0, '', 'images/RUMANA_AKTER_R-20302.jpg', '', 'images/Father_Pic93.jpg', '', 'She is a Coaching Student and Seat Booking Only 4/5 Month So, 400 tk  Additional Charge Extra.  ', '0000-00-00'),
(104, '0570104', 'TONNI BISWAS', '2', '0000-00-00', '01709456521', '7', 'N/A', 'N/A', 3, 64, 0, '2', 'BANGLADESHI', 1, 'VILL: SINDURKHAN, P.O: JANAURA, P.S: JANAURA, DIST: MOULVIBAZAR, SYLHET', 'HIRANDRA BISWAS', 'TRIPTI BISWAS', '', 0, 0, '', 'images/TONNI_BISWAS_R-20101.jpg', '', 'images/Father_Pic94.jpg', '', 'She is a Coaching Student and Seat Booking Only 4/5 Month So, 500 tk  Additional Charge Extra.  ', '0000-00-00'),
(105, '0660105', 'TANJINA BEGUM', '2', '0000-00-00', '01708685135', '3', 'N/A', 'N/A', 3, 73, 5100, '1', 'BANGLADESHI', 1, 'VILL:HARANPUR P.O: DERAI P.S:DERAI DIST:SUNAMGANJ', 'MOTIUR RAHMAN', 'SALEHA BEGUM', '', 0, 0, '', 'images/TANJINA_BEGUM_R-20104.jpg', '', 'images/TANJINA_BEGUM_R-20104_MOTHER.jpg', '', '', '0000-00-00'),
(106, '0870106', 'KHANAM SHAKERA JANNAT NERU', '2', '0000-00-00', '01709421258', '7', 'N/A', 'N/A', 3, 95, 0, '1', 'BANGLADESHI', 1, 'VILL: MAHMUDABAD, P.O: HABIGANJ, P.S: HABIGANJ, DIST: HABIGANJ', 'MD. MAMUNUR RASHHID KHAN', 'ROWSHON JAHAN ', '', 0, 0, '', 'images/JANNAT_NERU_R-20302.jpg', '', 'images/Father_Pic95.jpg', '', 'She is a Coaching Student and Seat Booking Only 4/5 Month So, 400 tk  Additional Charge Extra.  ', '0000-00-00'),
(107, '0970107', 'MOUMITA PAUL ', '2', '0000-00-00', '01796363646', '3', '20005827507040849', 'N/A', 3, 105, 6000, '2', 'BANGLADESHI', 1, 'VILL: SRIMANGOL, P.O: SRIMANGOL, P.S:SRIMANGOL, DIST: MOULOVIBAZAR, SYLHET', 'MARINAL PAUL', 'BITHI PAUL', '', 0, 0, '', 'images/MOUMITA_PAUL_R-20306.jpg', '', 'images/Father_Pic96.jpg', '', 'She is a Coaching Student and Seat Booking Only 4/5 Month .  ', '0000-00-00'),
(108, '1040108', 'TAHMINA SULTANA', '2', '0000-00-00', '01728659824', '3', 'N/A', 'N/A', 3, 112, 0, '1', 'BANGLADESHI', 1, 'VILL:BHARIGAOW P.O:MUKAMBAZAR P.S:RAJNAGAR DIST:MOULIBIBAZAR', 'BABUL MIAH', 'SHILPY BEGUM', '', 0, 0, '', 'images/TAHMINA_SULTANA_R-22103.jpg', '', 'images/TAHMINA_SULTANA_MOTHER_R-22103.jpg', '', 'She is a Coaching Student and Seat Booking Only 4/5 Month So, 500 tk  Additional Charge Extra.  ', '0000-00-00'),
(109, '1140109', 'MINAKSHMI PAUL MILY', '2', '0000-00-00', '01711065147', '3', 'N/A', 'N/A', 3, 121, 6000, '2', 'BANGLADESHI', 1, 'VILL:RUPOS PUR R/A SREEMONGOL P.O:SREEMONGOL P.S:SREEMONGOL DIST: MOULIVIBAZAR SYLHET', 'AJIT KUMAR PAUL ', 'BANDANA RANI PAUL', '', 0, 0, '', 'images/MINAKSHMI_PAUL_R-22403.jpg', '', 'images/MINAKSHMI_PAUL_BABA_R-22403.jpg', '', 'She is a Coaching Student and Seat Booking Only 4/5 Month So, 500 tk  Additional Charge Extra.  ', '0000-00-00'),
(110, '0190110', 'ISRAT JAHAN', '2', '0000-00-00', '01704479331', '', '002357', 'N/A', 3, 26, 5000, '', 'Bangladeshi', 1, 'VILL: JANGIRAY, P.O: JURI, P.O: JURI, DIST: MOUBVI BAZAR, SYLHET', 'TUTA MIAH ', 'NASRGI SBAHAR', 'SAIFUR RAHMAN', 1742823450, 0, 'SURMA TAWAR', 'images/ISRAT_JAHAN.jpg', '', 'images/ISRAT_JAHAN_baba.jpg', '', 'She is a Coaching Student and Seat Booking Only 4/5 Month So, 500 tk Additional Charge Extra ', '0000-00-00'),
(111, '0900111', 'MST.ASMA BEGUM SUMA', '2', '1994-09-12', '01946395765', '5', 'N/A', '19939013361000045', 3, 98, 0, '1', 'BANGLADESHI', 1, 'VILL:CHAND PUR P.O:LAXMI PUR P.S:DAWARA BAZAR DIST:SUNAMGONJ', 'ABDUL HAMID', 'HENA BEGUM', '', 0, 0, '', '', '', '', '', '', '2018-06-28'),
(112, '0920112', 'SADIYA AKTHER NAZIYA', '2', '1999-02-17', '01778067250', '7', 'N/A', 'N/A', 2, 100, 5100, '1', 'BANGLADESHI', 1, 'Vill: Goznaipur, P,O: Dewpara, P.S: Nobigong, Dist: Hobigonz, sylhet', 'LUTHFUR RAHMAN', 'HASNA', 'Bilal ', 1700905048, 0, 'Vill: Goznaipur, P,O: Dewpara, P.S: Nobigong, Dist: Hobigonz, sylhet', 'images/Student_Pic55.png', '', 'images/Bother_Pic4.jpg', '', 'old student', '2018-06-28'),
(113, '1050113', 'BUISHAKHAI DEB', '2', '0000-00-00', '01714457639', '7', '20005181031103601', 'N/A', 3, 113, 6000, '2', 'BANGLADESHI', 1, 'Vill: Hariyaraoi, P.S: Rajnagar, P.S: Rajnagar, Dist: Moulvibazar, Sylhet', 'PROMOTH DEB', 'PUSHPO DEB', '', 0, 0, '', 'images/BUISHAKHAI_DEB_SEAT_105.jpg', '', 'images/Bother_Pic5.jpg', '', 'She is a Coaching Student and Seat Booking Only 4/5 Month So, 500 tk  Additional Charge Extra.  ', '0000-00-00'),
(114, '1150114', 'NISHAT TASNIM', '2', '0000-00-00', '01777162968', '7', 'N/A', 'N/A', 3, 122, 6000, '1', 'BANGLADESHI', 1, 'Vill: West Hamidnagar, P.O: Bahubal, P.S: Bahubal, Dist: Habiganj', 'MD. ISHAQU MIAH', 'ABEDUNNESSA MAZUMDER', 'safka monjur', 2147483647, 0, 'Vill: West Hamidnagar, P.O: Bahubal, P.S: Bahubal, Dist: Habiganj', 'images/NISHAT_TASNIM_SEAT_115.jpg', '', 'images/Local_Guardian_Pic15.png', '', 'She is a Coaching Student and Seat Booking Only 4/5 Month So, 500 tk  Additional Charge Extra.  ', '0000-00-00'),
(115, '1170115', 'MADHURI SAHA', '2', '0000-00-00', '01709524462', '1', 'N/A', 'N/A', 3, 124, 6000, '2', 'BANGLADESHI', 1, 'Vill: kazi para, P.O: Be-Baria, P.S: Be-baria,  Dist: Be-baria,  ', 'UTTOM SAHA', 'LIPI SAHA', '', 0, 0, '', 'images/MADURI_SAHA_R-22501.jpg', '', 'images/Bother_Pic8.jpg', '', 'She is a Coaching Student and Seat Booking Only 4/5 Month So, 500 tk  Additional Charge Extra.  ', '0000-00-00'),
(116, '1200116', 'SONALI BORDHON MITU', '2', '0000-00-00', '01764668341', '7', 'N/A', 'N/A', 3, 127, 0, '2', 'BANGLADESHI', 1, 'Vill: Fazilpur,  P.O: Karim Nagar,  P.S: Moulvibazar, Dist: Moulvibazar, Sylhet', 'RAMANDRO BORDHON DILU', 'SUPRITI RANI BORDHON', '', 0, 0, '', 'images/SONALI_BORDHON_MITU_SEAT_120.jpg', '', 'images/Local_Guardian_Pic16.png', '', 'She is a Coaching Student and Seat Booking Only 4/5 Month So, 500 tk  Additional Charge Extra.  ', '0000-00-00'),
(117, '1220117', 'MILI RANI DEB', '2', '0000-00-00', '01740591469', '7', '19995818063040596', 'N/A', 3, 129, 6000, '1', 'BANGLADESHI', 1, 'Vill: Chatura , P.O: Rajnagar, P.S: Rajnagar, Dist: Moulvibazar, Sylhet', 'BIJOY KUMAR DEB', 'BANI BALA DEB', '', 0, 0, '', 'images/MILI_RANI_DEB_R-22503.jpg', '', 'images/MILI_RANI_DEB_R-22503_BABA.jpg', '', 'She is a Coaching Student and Seat Booking Only 4/5 Month So, 500 tk  Additional Charge Extra.  ', '0000-00-00'),
(118, '0460118', 'MARUFA AKTER', '2', '0000-00-00', '01799025258', '7', 'N/A', 'N/A', 3, 53, 0, '1', 'BANGLADESHI', 1, 'Vill:  Sultan Mahmud Par , P.O: Habiganj, P.S: Habiganj,   Dist:  Habiganj,', 'MD. ABDUL KARIM', 'MINU ARA', '', 0, 0, '', 'images/MARUFA_AKTER.jpg', '', 'images/Student_Pic_0223.jpg', '', 'Payment Only Admission & Monthly Fee', '0000-00-00'),
(119, '0530119', 'NAIMA ISLAM NAJU', '2', '1996-06-16', '01727668862', '7', '19969195007522433', 'N/A', 3, 60, 0, '1', 'BANGLADESHI', 1, 'VILL: AKILPUR, P.O: PORGONA BAZAR, P.S: BISWANATH DIST: SYLHET', 'MD.NAZRUL ISLAM ', 'LATE. SWABANA ISLAM', 'AZIZUR RAHMAN ALI', 1727668862, 0, 'VILL: BADEALI, P.O: TUKER BAZAR, P.S: SYLHET, DIST: SYLHRT', 'images/Mother_Pic6.jpg', '', 'images/Local_Guardian_Pic18.png', '', 'Payment only admission Fee & Monthly fee', '2018-06-29'),
(120, '0620120', 'RIMA DAS', '2', '1997-01-01', '01700693277', '7', '199979022905001753', 'N/A', 4, 69, 0, '2', 'BANGLADESHI', 1, 'Vill: Derai P.o: Derai Chandopur  P.S: Derai, Dist: Sunamjong', 'HIRALAL DAS', 'NIYA DAS', '', 0, 0, '', 'images/Local_Guardian_Pic19.png', '', 'images/Mother_Pic7.jpg', '', '', '2018-06-29'),
(121, '0740121', 'SHAPLA CHOWDHARY', '2', '1996-06-02', '01636621024', '7', '19955818042010427', 'N/A', 4, 82, 0, '1', 'BANGLADESHI', 1, 'Vill: Medenu mohol, P.O: Medenu mohol, P.S: Rajnagoro,  Dist: Moulvibazar, Sylhet', 'SIRAJ MIAH CHOWDHARY', 'MRS. ZESMIN CHOWDHARY', '', 0, 0, '', 'images/Shapla_Chow_ID_200223.jpg', '', 'images/Local_Guardian_Pic20.png', '', 'Old Student', '2018-06-29'),
(122, '0750122', 'TAMANNA AKTHER RIMA ', '2', '2000-03-23', '01782041311', '7', 'N/A', 'N/A', 2, 83, -300, '1', 'BANGLADESHI', 1, 'Vill: Khandigown      P.O:                        P.S:                 Dist: ', 'KHALI MIAH', 'RAHENA BEGUM', 'Emon', 1748239453, 0, 'N/A', 'images/RIMA_ID_202255_.jpg', '', 'images/Local_Guardian_Pic21.png', '', 'Old Student', '2018-06-29'),
(123, '0770123', 'SWORBA GOSWAMI', '2', '1994-12-31', '01726995040', '7', 'N/A', '19945815676000268', 4, 85, 4800, '2', 'BANGLADESHI', 1, 'Vill: Shiddeshor Pur,  P.O: Mashibazar,  P.S: Kamolgonj,  Dist: Moulovibazar, Sylhet', 'SHYAM SUNDER GOSWAMI', 'SUPROVA GOSWAMI', '', 0, 0, '', 'images/Shorna_.jpg', '', 'images/Bother_Pic10.jpg', '', 'Old Student', '2018-06-29'),
(124, '0700124', 'NAHIN AKTER', '2', '0000-00-00', '01742276857', '7', '19955815628002408', 'N/A', 3, 78, 5100, '1', 'BANGLADESHI', 1, 'VILL-GULER HOUR, P.O-ISLAMPUR, P.S-KAMALAGONG, DIST-MOULIVIBAZAR', 'GULAM HUSEN', 'FATEMA BEGUM', 'MOKSHUD KHAN', 1711199625, 0, '', 'images/NAHIN_AKTER_SEAT_70.jpg', '', 'images/AKHI_AKTER_Baba2.jpg', '', '', '0000-00-00'),
(126, '0400126', 'SAMANTA ', '2', '0000-00-00', '01762880150 ', '7', 'N/A ', 'N/A ', 3, 47, 5500, '1', 'BANGLADESHI ', 1, 'VILL-GHAJIPUR TEA ESTATE M.M ISPAHANI LTD. P.O-KULAURA P.S-KULAURA DIST-MOULIVIBAZAR', 'SHEIKH KAJAL MAHMUD ', 'SHELINA PARVIN ', '', 0, 0, '', 'images/SAMANTA_SEAT_40.jpg', '', 'images/SAMANTA_BABA_SEAT_40.jpg', '', '', '0000-00-00'),
(127, '0520127', 'FAHMIDA AKTER SUMI', '2', '0000-00-00', '01752676400', '', 'N/A ', 'N/A ', 2, 59, 5500, '', 'BANGLADESHI ', 1, 'VILL-MUNSHIBAZAR P.O-KARIMPUR P.S-RAJNAGAR DIST-MOULIVIBAZAR', 'MAHAMMAD FOJOL MIAH', 'AMBIA BEGUM', 'TAHMIDA TANHA', 1787356155, 0, 'VILL-MUNSHIBAZAR P.O-KARIMPUR P.S-RAJNAGAR DIST-MOULIVIBAZAR', 'images/FAHMIDA_AKTER_SUMI_S-52.jpg', '', 'images/FAHMIDA_A_SUMI_BABA_S-52.jpg', '', '', '0000-00-00'),
(128, '1070128', 'MONISHA CHANDA ', '2', '0000-00-00', '01777101513', '', '19965818010104590', 'N/A', 4, 115, 0, '', 'BANGLADESHI', 1, 'Vill: Batahunza, P.O: Mukambazar, P.S: Mukambazar dist: Moulobibazar, sylhet', 'BANAMALI CHANDA ', 'JOLY RANI CHANDA', 'Amolandushil ', 1718977125, 0, 'vill: Batahunja, P.O: Mukombazar, P.S: Rajagor, Dist: Moulobibazar, sylhet', 'images/Monisha_Chanda_ID_220474.jpg', '', 'images/Father_Pic70.jpg', '', '', '0000-00-00'),
(129, '0030129', 'TANDRA CHOWDHURY', '2', '0000-00-00', '01793218065', '3', 'N/A  ', 'N/A ', 3, 9, 0, '2', 'BANGLADESHI', 1, 'VILL-BOLORAMPUR P.O-SRIHALI P.S-SULLA DIST-SUNAMGANJ', 'CHITTARANJAON CHOWDHURY', 'RAKHA RANI DASH', '', 0, 0, '', 'images/TANDRA_CHOWDHURY.jpg', '', '', '', '', '0000-00-00'),
(130, '1160130', 'RUMANA AKTER', '2', '2018-12-23', '01778268520', '3', 'N/A  ', 'N/A  ', 3, 123, 5500, '1', 'BANGLADESHI ', 1, 'VILL-BAGERKHAL P.O-PUTIGURI P.S-BAHUBAL DIST-HOBIGANJ', 'ABDUL QUAYUM', 'RAHENA BEGUM', 'MUTALIB MIAH', 1726894387, 0, 'VILL-DAMALIPARA P.S-SYLHET DIST-SYLHET', 'images/Tulips.jpg', '', 'images/Lighthouse.jpg', '', '', '2018-07-23'),
(132, '0490132', 'SUMA AKTER SUMI ', '2', '0000-00-00', '01733719907', '', '199563479060912723 ', 'N/A  ', 2, 56, 0, '', 'BANGLADESHI ', 1, 'VILL:AL MODINA A/R BAGBARI P:O:SYLHET DIST:SYLHET', 'ABDUL KADER  ', 'DULOBI BEGUM ', 'ABDUL JAHER ', 1716813617, 2147483647, 'VILL:AL MODINA A/R BAGBARI P:O:SYLHET DIST:SYLHET', 'images/SUMA_AKTER_SUMI.jpg', '', 'images/Bother_Pic12.jpg', '', '', '0000-00-00'),
(133, '0320133', 'JANNATUL FERDOUSI', '2', '0000-00-00', '01705269271', '5', 'N/A   ', 'N/A  ', 2, 39, 0, '1', 'BANGLADESHI  ', 1, 'VILL:JOYKHALASH P.O:UZANIGANJ P.S:SOUTH SUNAMGANJ DIST:SHUNAMGANJ', 'SHAFIKUR RAHMAN', 'AFIA BEGUM', 'TAMANNA RAHMAN', 1705269271, 0, 'VILL:JOYKHALASH P.O:UZANIGANJ P.S:SOUTH SUNAMGANJ DIST:SHUNAMGANJ', 'images/Janntul_Ferdousi_r-303_s-32.jpg', '', '', '', '', '0000-00-00'),
(134, '0710134', 'NAIMA JEBIN ETI', '2', '2018-06-28', '01795062576', '7', ' N/A', 'N/A   ', 3, 79, 5100, '1', 'BANGLADESHI  ', 1, 'VILL:TETAI GOAN P.O:ADUMPUR DIST:MOULOVIBAZAR', 'MD ABDUL MATIN', 'GULSHANA AKTER', '', 0, 0, '', 'images/Chrysanthemum.jpg', '', '', '', '', '2018-07-24'),
(135, '1180135', 'JANNATUL FERDOUSI ', '2', '0000-00-00', '01796342056', '5', 'N/A  ', 'N/A   ', 3, 125, 0, '1', 'BANGLADESHI  ', 1, 'VILL-RAYGHOR P.O-DHAKA DAKKIN P.S-GULAPGANJ DIAT-SYLHET', 'SAJNU MIA', 'ROYNA BEGUM', '', 0, 0, '', 'images/Hydrangeas.jpg', '', 'images/Hydrangeas1.jpg', '', '', '0000-00-00'),
(136, '0470136', 'FARHANA AKTER SHIMU', '2', '0000-00-00', '01763934361', '7', '19999114131003709', 'N/A   ', 3, 54, 0, '1', 'BANGLADESHI  ', 1, 'VILL-LAKHERPAR  P.O-JAFFLONG  P.S-GOWAINGHAT  DIST-SYLHET', 'ISKONDOR ALI', 'AMERA BEGUM', '', 0, 0, '', 'images/FARHANA_AKTER_SHIMU.jpg', '', 'images/FARHANA_AKTER_SHIMU_BABA.jpg', '', '', '0000-00-00');
INSERT INTO `student_info` (`studentId`, `stdIdNo`, `studentName`, `studentGender`, `studentBirthDate`, `studentContactNo`, `studentBloodGroup`, `studentBirthRegNo`, `studentNID`, `student_admission_type_admissionTypeId`, `seat_info_studenCurrentSeatId`, `studentWalletAmount`, `studentReligion`, `nationality`, `studentStatus`, `studentAddress`, `fatherName`, `motherName`, `localGurdianName`, `localGurdianContactNo`, `localGurdianNID`, `localGurdianAddress`, `stdImage`, `stdIdCard`, `parentsImage`, `parentsIdCard`, `stdNote`, `studentAddedDate`) VALUES
(137, '1240137', 'DOLY BEGUM', '2', '1999-05-13', '01746234722', '5', 'N/A', 'N/A', 4, 131, 5500, '1', 'BANGLADESHI', 1, 'VILL-BISNAKANDI P.O-HADARPAR P.S-GOWINGHAT DIST-SYLHET', 'SAIFUL ALOM', 'JASMIN BEGUM', 'SHIPU TALUKDER', 1723288853, 2147483647, 'VILL-MOHONARAKIB P.O-SYLHET P.S JALABAD DIST-SYLHET', 'images/Female_Local_Guardian3.png', '', 'images/Bother_Pic9.jpg', '', '', '2018-07-29'),
(138, '0540138', 'CHANDANA DEBBARMA', '2', '0000-00-00', '01996475182', '3', 'N/A   ', 'N/A   ', 3, 61, 0, '2', 'BANGLADESHI  ', 1, 'VILL-VISHAMONI P.O-SREEMANGAL P.S-SREEMONGAL  DIST-MOULOBIBAZAR', 'SWAPON DEBBARMA', 'SANJITA DEBBARMA', 'TAYEF CHOWDHURY', 1735954066, 2147483647, 'VILL-DORGAPASHA P.O-DORGAPASHA P.S-DAKKIN SHUNAMGANJ DIST-SUNAMGANJ', 'images/Female_Local_Guardian4.png', '', 'images/Bother_Pic11.jpg', '', '', '0000-00-00'),
(139, '1080139', 'SAIRA SAZNIN SIMANTO', '2', '1996-10-06', '01714784775', '1', 'N/A   ', 'N/A   ', 4, 116, 0, '1', 'BANGLADESHI  ', 1, 'VILL-DHALA P.O-DHALA P.S- DHALA DIAT-MYMENSINGH', 'MD JASHIM UDDIN', 'MRS RASHIDA KHATUN', '', 0, 0, '', 'images/Tulips1.jpg', '', 'images/Jellyfish.jpg', '', '', '2018-07-31'),
(140, '1310140', 'NISHAT NAILA', '2', '0000-00-00', '01798607941', '5', 'N/A   ', 'N/A    ', 2, 138, 5500, '1', 'BANGLADESHI   ', 1, 'VILL-CHATTAK P.O-CHATTAK P.S-CHATTAK DIST-SUNAMGANJ', 'NURUL ISLAM', 'NAZMA PARVIN', 'SUFIA HAQUE', 1719350986, 0, 'VILL-SYLHET P.O-SADAR SYLHET P.S-SYLHET DIST SYLHET', 'images/NISHAT_NAILA_R-108305.jpg', '', 'images/NISHAT_NAILA_R-108305_MOTHERjpg.jpg', '', '', '0000-00-00'),
(141, '0840141', 'MEHER SULTANA MONI', '2', '0000-00-00', '01751542959', '5', '2000901235703027', 'N/A    ', 2, 92, 5500, '1', 'BANGLADESHI   ', 1, 'VILL-TAJ PUR P.O-GOBINDA GANJ P.S-CHHATAK DIST-SUNAMGANJ', 'MD ABDUL HAQUE', 'ANWARA BEGUM', '', 0, 0, '', 'images/meher_sultana_moni_r-20302.jpg', '', 'images/Bother_Pic13.jpg', '', '', '0000-00-00'),
(142, '0720142', 'AFROZA RAHMAN', '2', '1994-05-07', '01876019611', '4', 'N/A    ', 'N/A    ', 4, 80, 0, '1', 'BANGLADESHI   ', 1, 'VILL-BARISHAL P.O-BARISHAL P.S-BARISHAL DIST-BARISHAL', 'ALTAF HOSSAIN', 'NASRIN HOSSAIN', '', 0, 0, '', 'images/Tulips3.jpg', '', 'images/Chrysanthemum2.jpg', '', '', '2018-08-02'),
(143, '1250143', 'SONIYA JAHAN SUNNA', '2', '0000-00-00', '01755950481', '1', 'N/A    ', 'N/A    ', 3, 132, 5500, '1', 'BANGLADESHI   ', 1, 'VILL-SORISH PAR P.O-NOTUN BAZAR P.S-OSMANIGHOR DIST-SYLHET', 'SURUJ ALI', 'SURETUN BEGUM', '', 0, 0, '', 'images/soniya_jahan_sunna.jpg', '', 'images/Lighthouse1.jpg', '', '', '0000-00-00');

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
(1, '', '', '00:00:00', '0000-00-00', 1),
(2, '', '', '00:00:00', '0000-00-00', 2),
(3, '', '', '00:00:00', '0000-00-00', 3),
(4, '', '', '00:00:00', '0000-00-00', 4),
(5, '', '', '00:00:00', '0000-00-00', 5),
(6, '', '', '00:00:00', '0000-00-00', 6),
(7, '', '', '00:00:00', '0000-00-00', 7),
(8, '', '', '00:00:00', '0000-00-00', 8),
(9, '', '', '00:00:00', '0000-00-00', 9),
(10, '', '', '00:00:00', '0000-00-00', 10),
(11, '', '', '00:00:00', '0000-00-00', 11),
(12, '', '', '00:00:00', '0000-00-00', 12),
(13, '', '', '00:00:00', '0000-00-00', 13),
(14, '', '', '00:00:00', '0000-00-00', 14),
(15, '', '', '00:00:00', '0000-00-00', 15),
(16, '', '', '00:00:00', '0000-00-00', 16),
(17, '', '', '00:00:00', '0000-00-00', 17),
(18, '', '', '00:00:00', '0000-00-00', 18),
(19, '', '', '00:00:00', '0000-00-00', 19),
(20, '', '', '00:00:00', '0000-00-00', 20),
(21, '', '', '00:00:00', '0000-00-00', 21),
(22, 'MENTORS EDUCATION ', 'IIELTS', '00:00:00', '0000-00-00', 22),
(23, '', '', '00:00:00', '0000-00-00', 23),
(24, '', '', '00:00:00', '0000-00-00', 24),
(25, '', '', '00:00:00', '0000-00-00', 25),
(26, '', '', '00:00:00', '0000-00-00', 26),
(27, '', '', '00:00:00', '0000-00-00', 27),
(28, '', '', '00:00:00', '0000-00-00', 28),
(29, '', '', '00:00:00', '0000-00-00', 29),
(30, '', '', '00:00:00', '0000-00-00', 30),
(31, '', '', '00:00:00', '0000-00-00', 31),
(32, '', '', '00:00:00', '0000-00-00', 32),
(33, '', '', '00:00:00', '0000-00-00', 33),
(34, '', '', '00:00:00', '0000-00-00', 34),
(35, '', '', '00:00:00', '0000-00-00', 35),
(36, '', '', '00:00:00', '0000-00-00', 36),
(37, '', '', '00:00:00', '0000-00-00', 37),
(38, '', '', '00:00:00', '0000-00-00', 38),
(39, '', '', '00:00:00', '0000-00-00', 39),
(40, '', '', '00:00:00', '0000-00-00', 40),
(41, '', '', '00:00:00', '0000-00-00', 41),
(42, '', '', '00:00:00', '0000-00-00', 43),
(43, '', '', '00:00:00', '0000-00-00', 44),
(44, '', '', '00:00:00', '0000-00-00', 45),
(45, '', '', '00:00:00', '0000-00-00', 46),
(46, '', '', '00:00:00', '0000-00-00', 47),
(47, '', '', '00:00:00', '0000-00-00', 48),
(48, '', '', '00:00:00', '0000-00-00', 49),
(49, '', '', '00:00:00', '0000-00-00', 50),
(50, '', '', '00:00:00', '0000-00-00', 51),
(51, '', '', '00:00:00', '0000-00-00', 52),
(52, '', '', '00:00:00', '0000-00-00', 53),
(53, '', '', '00:00:00', '0000-00-00', 54),
(54, 'Sunmgonj Govt. College', 'B.B.S', '00:00:00', '0000-00-00', 55),
(55, '', '', '00:00:00', '0000-00-00', 56),
(56, '', '', '00:00:00', '0000-00-00', 57),
(57, '', '', '00:00:00', '0000-00-00', 58),
(58, '', '', '00:00:00', '0000-00-00', 59),
(59, '', '', '00:00:00', '0000-00-00', 61),
(60, '', '', '00:00:00', '0000-00-00', 63),
(61, '', '', '00:00:00', '0000-00-00', 65),
(62, '', '', '00:00:00', '0000-00-00', 66),
(63, '', '', '00:00:00', '0000-00-00', 67),
(64, '', '', '00:00:00', '0000-00-00', 68),
(65, '', '', '00:00:00', '0000-00-00', 69),
(66, '', '', '00:00:00', '0000-00-00', 70),
(67, '', '', '00:00:00', '0000-00-00', 71),
(68, '', '', '00:00:00', '0000-00-00', 72),
(69, '', '', '00:00:00', '0000-00-00', 73),
(70, '', '', '00:00:00', '0000-00-00', 76),
(71, '', '', '00:00:00', '0000-00-00', 77),
(72, '', '', '00:00:00', '0000-00-00', 78),
(73, '', '', '00:00:00', '0000-00-00', 80),
(74, 'UCC ', 'UNIVERSITY COACHING', '00:00:02', '0000-00-00', 81),
(75, 'OMEECA', 'ENGENERING COACHING', '00:00:11', '0000-00-00', 82),
(76, 'UCC', 'UNIVERSITY COACHING', '00:00:10', '0000-00-00', 83),
(77, 'UCC', 'UNIVERSITY COACHING', '00:00:10', '0000-00-00', 84),
(78, '', '', '00:00:00', '0000-00-00', 86),
(79, '', '', '00:00:00', '0000-00-00', 87),
(80, '', '', '00:00:00', '0000-00-00', 88),
(81, '', '', '00:00:00', '0000-00-00', 89),
(82, 'redium', 'UNIVERSITY COACHING', '11:00:00', '0000-00-00', 90),
(83, 'UCC', 'UNIVERSITY COACHING', '02:00:00', '0000-00-00', 91),
(84, 'UCC', 'UNIVERSITY COACHING', '00:00:02', '0000-00-00', 92),
(85, 'RETINA', 'madical coaching', '08:00:00', '0000-00-00', 93),
(86, 'RETINA', 'medical coaching', '10:15:00', '0000-00-00', 94),
(87, 'RETINA', 'UNIVERSITY COACHING', '00:00:03', '0000-00-00', 95),
(88, 'UCC', 'UNIVERSITY COACHING', '00:00:08', '0000-00-00', 96),
(89, 'PRIMET', 'UNIVERSITY COACHING', '00:00:11', '0000-00-00', 97),
(90, 'UCC', 'UNIVERSITY COACHING', '00:00:02', '0000-00-00', 98),
(91, 'RETINA', 'Madical coaching', '10:15:00', '0000-00-00', 99),
(92, 'Radium', 'UNIVERSITY COACHING', '00:00:11', '0000-00-00', 100),
(93, 'RETINA', 'Madical coaching', '12:30:00', '0000-00-00', 101),
(94, 'PRIMET', 'UNIVERSITY COACHING', '00:00:12', '0000-00-00', 102),
(95, 'Udvash', 'UNIVERSITY COACHING', '00:00:08', '0000-00-00', 103),
(96, 'RETINA COACHING CENTER', 'MEDICALA AND VERSITY  ADMISSIO', '00:00:10', '0000-00-00', 104),
(97, 'RATINA  MEDICAL COACHING CENTER', 'MEDICAL COACHING', '00:00:12', '0000-00-00', 105),
(98, 'UCC COACHING CENTER', 'UNVERSITY ADMISSION COACHING ', '00:00:09', '0000-00-00', 106),
(99, 'OMECA COACHING CENTER', 'UNVERSITY ADMISSION COACHING ', '00:00:11', '0000-00-00', 107),
(100, 'RETINA AND MEDICAL COACHING CENTER', 'MEDICAL COACHING', '00:00:10', '0000-00-00', 108),
(101, 'UDVASH', 'UNIVERSITY COACHING', '00:00:10', '0000-00-00', 109),
(102, 'RETINA COACHING CENTER', 'MEDICAL A ADMISSION COACHING ', '00:00:08', '0000-00-00', 110),
(103, '', '', '00:00:00', '0000-00-00', 111),
(104, '', '', '00:00:00', '0000-00-00', 112),
(105, 'RATINA  MEDICAL COACHING CENTER', 'MEDICALA AND VERSITY  ADMISSIO', '00:00:10', '0000-00-00', 113),
(106, 'RATINA  MEDICAL COACHING CENTER', 'MEDICAL COACHING', '00:00:08', '0000-00-00', 114),
(107, 'RATINA  MEDICAL COACHING CENTER', 'MEDICAL COACHING', '00:00:12', '0000-00-00', 115),
(108, 'RATINA  MEDICAL COACHING CENTER', 'MEDICALA AND VERSITY  ADMISSIO', '00:00:12', '0000-00-00', 116),
(109, 'RETINA COACHING CENTER', 'MEDICALA AND VERSITY  ADMISSIO', '00:00:12', '0000-00-00', 117),
(110, 'UCC COACHING CENTER', 'UNVERSITY ADMISSION COACHING', '00:00:10', '0000-00-00', 118),
(111, 'MENTORS EDUCATION ', 'IELTS', '00:00:10', '0000-00-00', 119),
(112, '', '', '00:00:00', '0000-00-00', 120),
(113, '', '', '00:00:00', '0000-00-00', 121),
(114, '', '', '00:00:00', '0000-00-00', 122),
(115, '', '', '00:00:00', '0000-00-00', 123),
(116, '', '', '00:00:00', '0000-00-00', 124),
(117, 'UCC ', 'UNIVERSITY COACHING ', '00:00:00', '0000-00-00', 126),
(118, '', '', '00:00:00', '0000-00-00', 127),
(119, '', '', '00:00:00', '0000-00-00', 128),
(120, '', '', '00:00:00', '0000-00-00', 129),
(121, 'RETINA', 'UNIVERSITY COACHING ', '00:00:10', '0000-00-00', 130),
(122, '', '', '00:00:00', '0000-00-00', 132),
(123, '', '', '00:00:00', '0000-00-00', 133),
(124, 'UCC ', 'UNIVERSITY COACHING  ', '00:00:10', '0000-00-00', 134),
(125, 'ISITE', 'D4', '00:00:00', '0000-00-00', 135),
(126, 'RTMI-HRDC', 'MATHS', '00:00:00', '0000-00-00', 136),
(127, '', '', '00:00:00', '0000-00-00', 137),
(128, 'RETINA ', 'MEDICAL COACHING', '00:00:10', '0000-00-00', 138),
(129, '', '', '00:00:00', '0000-00-00', 139),
(130, '', '', '00:00:00', '0000-00-00', 140),
(131, '', '', '00:00:00', '0000-00-00', 141),
(132, '', '', '00:00:00', '0000-00-00', 142),
(133, 'MEDICO', 'UNIVERSITY', '00:00:10', '0000-00-00', 143);

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
(1, 'B.K.G.C GOVT SCHOOL', 2014, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 1),
(2, 'BRINDABON COLLEGE', 2016, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 1),
(3, 'LEADING UNIVERSITY ', 2021, 'LLB', '', 0, '', '00:00:00', '', '1 ST ', 0, '3', 1),
(4, 'BORLEKHA GIRLS SCHOOL', 2015, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 2),
(5, 'NARISHAKI SCHOOL AND COLLEGE', 2017, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 2),
(6, 'LEADING UNIVERSITY ', 2021, 'ENGLISH', '', 0, '', '00:00:00', '', '1 ST', 53, '3', 2),
(7, 'J.K & H.K High School, Hobigonj', 2015, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 3),
(8, 'HOBIGONJ GOVT. MOHILA COLLEGE', 2017, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 3),
(9, 'LEADING UNIVERSITY ', 2020, 'L.L.B     ', '', 0, '', '00:00:00', '', '2ND  ', 0, '3', 3),
(10, 'Digholbak High School', 2014, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 4),
(11, 'Govt. Agrami Girls High School & Collage', 2016, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 4),
(12, 'Metropolitan University', 2020, ' CSE', '', 0, '', '00:00:00', '', '4th', 171, '3', 4),
(13, 'Sreemanagal Govt: Girls High School', 2010, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 5),
(14, 'Sreemanagal Govt: College', 2012, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 5),
(15, 'Metropolitan University ', 2017, 'MBA', '', 0, '', '00:00:00', '', '5 th', 172, '4', 5),
(16, 'Jamal gonj Girl\'s High School', 2015, '3', '', 0, '', '00:00:00', '1', '', 0, '1', 6),
(17, 'Jamal gonj Degree College', 2017, '3', '', 0, '', '00:00:00', '1', '', 0, '2', 6),
(18, 'Sylhet Govt. Women\'s College', 2020, 'Social Wor', '', 0, '', '00:00:00', '', 'First', 0, '3', 6),
(19, 'Jamal gonj Girl\'s High School', 2015, '3', '', 0, '', '00:00:00', '1', '', 0, '1', 7),
(20, 'Jamal gonj Degree College', 2017, '3', '', 0, '', '00:00:00', '1', '', 0, '2', 7),
(21, 'Metropolitan University ', 2020, 'L.L.B ( Ho', '', 0, '', '00:00:00', '', '2nd S', 173, '3', 7),
(22, 'Bishwambharpur Model High School ', 2017, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 8),
(23, 'Govt Women\'s College, Sylhet', 2019, '1', '2017-', 821, 'B', '00:00:09', '1', '', 0, '2', 8),
(24, 'Natural Gass Fertilizer High School (NGF', 2011, '2', '', 0, '', '00:00:00', '1', '', 0, '1', 9),
(25, 'Sylhet Commerce College', 2014, '2', '', 0, '', '00:00:00', '1', '', 0, '2', 9),
(26, 'Metropolitan University', 2018, 'BBA', '', 0, '', '00:00:00', '', 'Finel', 142, '3', 9),
(27, 'Ali Amzad Govt. Girts High School', 2011, '2', '', 0, '', '00:00:00', '1', '', 0, '1', 10),
(28, 'Sylhet Commerce College ', 2013, '2', '', 0, '', '00:00:00', '1', '', 0, '2', 10),
(29, 'Metropolitan University', 2017, 'BBA', '', 0, '', '00:00:00', '', '', 0, '3', 10),
(30, 'Kulaura Girl\'s High School', 2000, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 11),
(31, 'Moulvibazar Govt. Women\'s College', 2003, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 11),
(32, 'Metropolitan University', 2017, 'MBA', '', 0, '', '00:00:00', '', 'FINAL', 172, '4', 11),
(33, 'Sreemonagal Govt: Girls High School', 2013, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 12),
(34, 'Sreemanagal Govt: College', 2015, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 12),
(35, 'Metropolitan University', 2019, 'CSE', '', 0, '', '00:00:00', '', '4th ', 171, '3', 12),
(36, 'B.T.R.I High School', 2014, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 13),
(37, 'Dwarika Paul Mohila Collage', 2016, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 13),
(38, 'Metropolitan University', 2020, 'English', '', 0, '', '00:00:00', '', '4th', 171, '3', 13),
(39, 'Dr. Adris Ali High School', 2009, '3', '', 0, '', '00:00:00', '1', '', 0, '1', 14),
(40, 'Imran Ahmed Women\'s Degree College', 2012, '3', '', 0, '', '00:00:00', '1', '', 0, '2', 14),
(41, 'LEADING UNIVERSITY', 2016, 'BBA', '', 0, '', '00:00:00', '', 'Finel', 1301010354, '3', 14),
(42, 'NGFF High School', 2017, '3', '', 0, '', '00:00:00', '1', '', 0, '1', 15),
(43, 'Govt. Agrami Girls High School & Collage', 2019, '3', '2017-', 0, '00', '00:00:09', '1', '', 0, '2', 15),
(44, 'Khalagaon Karimpur high School', 2012, '2', '', 0, '', '00:00:00', '1', '', 0, '1', 16),
(45, 'Movlana Mufazzal Hussen Mohila degree ', 2014, '2', '', 0, '', '00:00:00', '1', '', 0, '2', 16),
(46, 'Metropolitan University', 2017, 'BBA', '', 0, '', '00:00:00', '', 'First', 143, '3', 16),
(47, 'Joykalosh Kjanigong Rashidia High School', 2014, '3', '', 0, '', '00:00:00', '1', '', 0, '1', 17),
(48, 'Sunamganj Govt. College', 2016, '3', '', 0, '', '00:00:00', '1', '', 0, '2', 17),
(49, 'Metropolitan University', 2020, 'L.L.B ( Ho', '', 0, '', '00:00:00', '', '8th ', 163, '3', 17),
(50, 'Barlekha Grirl\'s High School', 2013, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 18),
(51, 'Barlekha Degree College', 2015, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 18),
(52, 'LEADING UNIVERSITY', 2020, 'CSE', '', 0, '', '00:00:00', '', '8th', 1632020021, '3', 18),
(53, 'Hazi Lal Mamud high School ', 2015, '3', '', 0, '', '00:00:00', '1', '', 0, '1', 19),
(54, 'Govt. Women\'s College Sunamgonj', 2017, '3', '', 0, '', '00:00:00', '1', '', 0, '2', 19),
(55, 'Metropolitan University', 2020, 'L.L.B ( Ho', '', 0, '', '00:00:00', '', '1 Yea', 18, '3', 19),
(56, 'Dakshina Charan Pilot High School', 2013, '1', '', 0, '', '00:00:00', '2', '', 0, '1', 20),
(57, 'Central Women\'s College, Dhaka', 2015, '1', '', 0, '', '00:00:00', '2', '', 0, '2', 20),
(58, 'LEADING UNIVERSITY', 2019, 'CSE', '', 0, '', '00:00:00', '', '2nd y', 1632020004, '3', 20),
(59, 'NGFF High School', 2013, '2', '', 0, '', '00:00:00', '1', '', 0, '1', 21),
(60, 'Sylhet Commerce College', 2015, '2', '', 0, '', '00:00:00', '1', '', 0, '2', 21),
(61, 'Metropolitan University', 2020, 'BBA', '', 0, '', '00:00:00', '', '2nd y', 161116140, '3', 21),
(62, 'POLICE LINE HIGH SCHOOL', 2013, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 22),
(63, 'HAZI MOSIZ ALI GIRLS SCHOOL & COLLEGE', 2015, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 22),
(64, 'THE BUDS RESIDENTIAL MODEL SCHOOL AND CO', 2013, '3', '', 0, '', '00:00:00', '1', '', 0, '1', 23),
(65, 'THE BUDS RESIDENTIAL MODEL SCHOOL AND CO', 2015, '3', '', 0, '', '00:00:00', '1', '', 0, '2', 23),
(66, 'LEADING UNIVERSITY', 2020, 'BBA', '', 0, '', '00:00:00', '', '3 Yea', 1611010207, '3', 23),
(67, 'Govt. S.C Girls High School ', 2014, '3', '', 0, '', '00:00:00', '1', '', 0, '1', 24),
(68, 'Sunamgonj Weman Govt. College ', 2016, '3', '', 0, '', '00:00:00', '1', '', 0, '2', 24),
(69, 'LEADING UNIVERSITY', 2021, 'BBA', '', 0, '', '00:00:00', '', '1 Yea', 0, '3', 24),
(70, 'Hazi Md. Ustwar Grils High School', 2012, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 25),
(71, 'Sylhet Govt. Women\'s Collage', 2014, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 25),
(72, 'LEADING UNIVERSITY', 0000, 'English', '', 0, '', '00:00:00', '', '4 Yea', 0, '3', 25),
(73, 'Rajnagar Idial High School', 2012, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 26),
(74, 'Moulvibazar Govt. Women\'s College', 2014, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 26),
(75, 'Metropolitan University', 2018, 'BBA', '', 0, '', '00:00:00', '', 'First', 143, '3', 26),
(76, 'B.K.G.C Govt. Girl High School', 2014, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 27),
(77, 'Bribdobon Govt. College', 2016, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 27),
(78, 'Metropolitan University', 2021, 'English', '', 0, '', '00:00:00', '', '2nd y', 0, '3', 27),
(79, 'Gaibandha Teenical School  And College ', 2016, '1', '', 0, '', '00:00:00', '10', '', 0, '1', 28),
(80, 'Sylhet Polyteehnic Sylhet', 0000, '1', '', 0, '', '00:00:00', '10', '', 0, '2', 28),
(81, 'Nayabondar High School', 2015, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 29),
(82, 'Goalabazar Adarsha Mohila college', 2017, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 29),
(83, 'LEADING UNIVERSITY', 2021, 'CSE', '', 0, '', '00:00:00', '', '1 Yea', 0, '3', 29),
(84, 'N.G.F.F Highe School', 2016, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 30),
(85, 'Amborkhana Girls School and College', 2018, '3', '', 0, '', '00:00:00', '1', '', 0, '2', 30),
(86, 'The Flowers KG and High School', 2014, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 31),
(87, 'Moulvibazar Govt. College', 2016, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 31),
(88, 'Leading University', 0000, 'CSE', '', 0, '', '00:00:00', '', '', 1712020090, '3', 31),
(89, 'Premodamoyee Girls High School', 2014, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 32),
(90, 'Sylhet Govt. Womens College', 2016, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 32),
(91, 'Leading University', 0000, 'English', '', 0, '', '00:00:00', '', '', 1813030016, '3', 32),
(92, 'Alhaj Abdul Muktadir Academy', 2013, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 33),
(93, 'ScholarsHome', 2015, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 33),
(94, 'Leading University', 0000, 'CSE', '', 0, '', '00:00:00', '', '', 1612020026, '3', 33),
(95, 'Saint Martha\'s Junior High School', 2015, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 34),
(96, 'The Buds Residesial Model School and Col', 2017, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 34),
(97, 'Metropolitan University', 0000, 'L.L.B', '', 0, '', '00:00:00', '', '', 0, '3', 34),
(98, 'Raboathi Raman High School', 2013, '3', '', 0, '', '00:00:00', '1', '', 0, '1', 35),
(99, 'Latifa Shafi Chowdhory Womens Degree Col', 2015, '3', '', 0, '', '00:00:00', '1', '', 0, '2', 35),
(100, 'Metropolitan University', 0000, 'English', '', 0, '', '00:00:00', '', '', 161, '3', 35),
(101, 'Sylhet Model School and College', 2016, '2', '', 0, '', '00:00:00', '1', '', 0, '1', 36),
(102, 'Sylhet Model School and College', 2015, '2', '', 0, '', '00:00:00', '1', '', 0, '2', 36),
(103, 'Metropolitan University', 0000, 'L.L.B', '', 0, '', '00:00:00', '', '', 171, '3', 36),
(104, 'Sunamgonj Girls High School', 2015, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 37),
(105, 'Sylhet Medical Assistant Training School', 0000, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 37),
(106, 'Borokhal ML School and College', 2017, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 38),
(107, 'Shajalal City College', 0000, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 38),
(108, 'Nabin Chandra Model High School', 2012, '2', '', 0, '', '00:00:00', '1', '', 0, '1', 39),
(109, 'K.D College', 2014, '2', '', 0, '', '00:00:00', '1', '', 0, '2', 39),
(110, 'Leading University', 0000, 'Business A', '', 0, '', '00:00:00', '', '', 1511010137, '3', 39),
(111, 'kasba girls high school', 2013, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 40),
(112, 'Beanibazar Govt. College', 2015, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 40),
(113, 'Metropolitan University', 0000, 'L.L.B', '', 0, '', '00:00:00', '', '', 161, '3', 40),
(114, 'Govt.s.c Girls High School', 2013, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 41),
(115, 'Sunamgonj Govt. College', 2015, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 41),
(116, 'Metropolitan University', 0000, 'CSE', '', 0, '', '00:00:00', '', '', 161, '3', 41),
(117, 'Kamalganj Model High School', 2015, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 43),
(118, 'Suja Memorial College', 2017, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 43),
(119, 'Baniyachong Adarsho School', 2014, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 44),
(120, 'Jonab Ali Degree College', 2016, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 44),
(121, 'Govt.s.c Girls High School', 2013, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 45),
(122, 'Sunamgonj Govt. College', 2015, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 45),
(123, 'Leading University', 0000, 'English', '', 0, '', '00:00:00', '', '', 1613030071, '3', 45),
(124, 'Dr. Sayod Moqbul Hussain', 2015, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 46),
(125, 'Dhakadakshin Multiliterial High School a', 2017, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 46),
(126, 'Dhaka Dhakshin M.L High School and Colle', 2015, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 47),
(127, 'Dhaka Dhakshin M.L High School and Colle', 2017, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 47),
(128, 'B.T.R.I High School', 2014, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 48),
(129, 'The Buds Residesial Model School and Col', 2016, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 48),
(130, 'M.C College ,Sylhet', 0000, '', '', 0, '', '00:00:00', '', '', 0, '3', 48),
(131, 'Derai girls High School', 2013, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 49),
(132, 'Sunamgonj Govt. College', 2015, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 49),
(133, 'Leading University', 0000, 'CSE', '', 0, '', '00:00:00', '', '', 1612020091, '3', 49),
(134, 'Ali Amzad Govt. Girls High School', 2015, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 50),
(135, 'Moulvibazar Govt. Womens College', 2017, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 50),
(136, 'Metropolitan University', 0000, 'CSE', '', 0, '', '00:00:00', '', '', 181115048, '3', 50),
(137, 'Leading University', 0000, 'CSE', '', 0, '', '00:00:00', '', '', 182020161, '3', 51),
(138, 'Parchash High School and College', 2010, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 52),
(139, 'Brindabon Govt. College', 2012, '2', '', 0, '', '00:00:00', '1', '', 0, '2', 52),
(140, 'Leading University', 0000, 'Business A', '', 0, '', '00:00:00', '', '', 1511010230, '3', 52),
(141, 'Sreemangal Govt. Girls High School', 2012, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 53),
(142, 'Sreemangal Govt. College', 2014, '2', '', 0, '', '00:00:00', '1', '', 0, '2', 53),
(143, 'Leading University', 0000, 'Business A', '', 0, '', '00:00:00', '', '', 1511010305, '3', 53),
(144, 'Joykalash Ujanigaon Rashidiya High Schoo', 2011, '3', '', 0, '', '00:00:00', '1', '', 0, '1', 55),
(145, 'Abdul Majid College , Shantigonj', 2013, '3', '', 0, '', '00:00:00', '1', '', 0, '2', 55),
(146, 'Borodesh High School', 2014, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 56),
(147, 'Scholarshome Girls School and College', 2016, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 56),
(148, 'Metropolitan University', 0000, 'Business A', '', 0, '', '00:00:00', '', '', 171116070, '3', 56),
(149, 'Tetai Gaon Rashid Uddin High School', 2014, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 57),
(150, 'BFA Shaheen College Shamshernagar', 2016, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 57),
(151, 'Leading University', 0000, 'CSE', '', 0, '', '00:00:00', '', '', 0, '3', 57),
(152, 'Zakigonj Govt. High School', 2011, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 58),
(153, 'Siddeshwari Girls College,Dhaka', 2013, '1', '', 0, '', '00:00:00', '2', '', 0, '2', 58),
(154, 'Shahjalal University of Science and Tech', 0000, 'Political ', '', 0, '', '00:00:00', '', '', 2013235003, '3', 58),
(155, 'Matab Cyra High School', 2012, '2', '', 0, '', '00:00:00', '1', '', 0, '1', 59),
(156, 'Yakub Tajul Mohila Degree College', 2014, '2', '', 0, '', '00:00:00', '1', '', 0, '2', 59),
(157, 'Leading University', 0000, 'Business A', '', 0, '', '00:00:00', '', '', 1531010031, '3', 59),
(159, 'Barolekha Girls High School', 2012, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 61),
(160, 'Naree Shiksha Academy Degree College', 2013, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 61),
(161, 'Metropolitan University', 0000, 'CSE', '', 0, '', '00:00:00', '', '', 143115011, '3', 61),
(163, 'Barolekha Girls High School', 2012, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 63),
(164, 'Blue Bird School and College', 2014, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 63),
(165, 'Metropolitan University', 0000, 'CSE', '', 0, '', '00:00:00', '', '', 0, '3', 63),
(166, 'A.A.T.M. ML High School', 2011, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 65),
(167, 'Suya Memorial College', 2013, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 65),
(168, 'Leading University', 0000, 'Business A', '', 0, '', '00:00:00', '', '', 1511010209, '3', 65),
(169, 'Govt.s.c Girls High School', 2011, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 66),
(170, 'Sunamgonj Govt. College', 2013, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 66),
(171, 'Leading University', 0000, 'CSE', '', 0, '', '00:00:00', '', '', 1512020016, '3', 66),
(172, 'Hira Miah Girls High School', 2011, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 67),
(173, 'Nabigonj Govt. College', 2013, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 67),
(174, 'Metropolitan University', 0000, 'CSE', '', 0, '', '00:00:00', '', '', 143, '3', 67),
(175, 'Jalalpur High School', 2012, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 68),
(176, 'Jalalpur College', 2014, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 68),
(177, 'Metropolitan University', 0000, 'CSE', '', 0, '', '00:00:00', '', '', 151115124, '3', 68),
(178, 'Sreemangal Govt. Girls High School', 2012, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 69),
(179, 'The Buds Residesial Model School and Col', 2014, '2', '', 0, '', '00:00:00', '1', '', 0, '2', 69),
(180, 'Leading University', 0000, 'Business A', '', 0, '', '00:00:00', '', '', 1511010136, '3', 69),
(181, 'Companigonj Thana Sadar Model High Schoo', 2014, '3', '', 0, '', '00:00:00', '1', '', 0, '1', 70),
(182, 'M.Safiur Rahman Degree College', 2016, '3', '', 0, '', '00:00:00', '1', '', 0, '2', 70),
(183, 'Leading University', 0000, 'L.L.B', '', 0, '', '00:00:00', '', '', 1714050022, '3', 70),
(184, 'Daudpur High School', 2012, '1', '', 0, '', '00:00:00', '3', '', 0, '1', 71),
(185, 'Brahmanbaris Govt. Womens College', 2014, '1', '', 0, '', '00:00:00', '3', '', 0, '2', 71),
(186, 'Leading University', 0000, 'English', '', 0, '', '00:00:00', '', '', 1523030003, '3', 71),
(187, 'The Buds Residential Model School and Co', 2012, '2', '', 0, '', '00:00:00', '1', '', 0, '1', 73),
(188, 'Sreemangal Govt. College', 2015, '2', '', 0, '', '00:00:00', '1', '', 0, '2', 73),
(189, 'Leading University', 0000, 'Business A', '', 0, '', '00:00:00', '', '', 1511010359, '3', 73),
(191, 'Dinerpur High School', 2017, '3', '', 0, '', '00:00:00', '1', '', 0, '1', 76),
(192, 'Sylhet Central College', 0000, '3', '', 0, '', '00:00:00', '1', '', 0, '2', 76),
(193, 'Companigonj B.A High School', 2015, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 77),
(194, 'Companigonj B.A Degree College', 2017, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 77),
(195, 'Leading University', 0000, 'CSE', '', 0, '', '00:00:00', '', '', 1812020233, '3', 77),
(196, 'Aronodhoy Girls High School', 2009, '2', '', 0, '', '00:00:00', '1', '', 0, '1', 78),
(197, 'Jagannathpur Degree College', 2011, '2', '', 0, '', '00:00:00', '1', '', 0, '2', 78),
(198, 'Leading University', 0000, 'Business A', '', 0, '', '00:00:00', '', '', 0, '3', 78),
(199, 'Bhadeswar Nasir Uddin High School', 2010, '3', '', 0, '', '00:00:00', '1', '', 0, '1', 80),
(200, 'Dhaka Dhakshin M.L High School and Colle', 2012, '3', '', 0, '', '00:00:00', '1', '', 0, '2', 80),
(201, 'CHANORUGHAT PILOT GIRLS HIGH SCHOOL', 2016, '2', '', 0, '', '00:00:00', '1', '', 0, '1', 81),
(202, 'CHANORUGHAT GOVT: COLLEGE', 2018, '2', '', 0, '', '00:00:00', '1', '', 0, '2', 81),
(203, 'KHOLIL CHOWDORY ADARSHA BIDYA NIKETON', 2016, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 82),
(204, 'Beanibazar Govt. College', 2018, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 82),
(205, 'HIRAMIA GIRLS HIGH SCHOOL,NABIGANJ', 2016, '3', '', 0, '', '00:00:00', '1', '', 0, '1', 83),
(206, 'NABIGANJ COLLEGE', 2018, '3', '', 0, '', '00:00:00', '1', '', 0, '2', 83),
(207, 'HIRAMIA GIRLS HIGH SCHOOL,NABIGANJ', 2016, '3', '', 0, '', '00:00:00', '1', '', 0, '1', 84),
(208, 'NABIGANJ COLLEGE', 2018, '3', '', 0, '', '00:00:00', '1', '', 0, '2', 84),
(210, 'JAMALGANJ GIRLS HIGH SCHOOL', 2016, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 86),
(211, 'Sunamgonj Govt. College', 2018, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 86),
(212, 'GOVT.MODEL GIRLS HIGH SCHOOL', 2017, '1', '', 0, '', '00:00:00', '3', '', 0, '1', 87),
(213, 'SYLHET SCIENCE COLLEGE', 2019, '1', '2017', 30, 'A', '00:00:08', '1', '', 0, '2', 87),
(214, 'IDEAL RESIDENSITIAL SCHOOL AND COLLAGE', 2014, '2', '', 0, '', '00:00:00', '3', '', 0, '1', 88),
(215, 'BRAHMAN BARIA GOVT: COLLEGE', 2017, '2', '', 0, '', '00:00:00', '3', '', 0, '2', 88),
(216, 'gobinda chondra girl high school', 2016, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 90),
(217, 'shalla degree college', 2018, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 90),
(218, 'jury model high school', 2016, '2', '', 0, '', '00:00:00', '1', '', 0, '1', 91),
(219, 'taibunessa khanam academy degree college', 2018, '2', '', 0, '', '00:00:00', '1', '', 0, '2', 91),
(220, 'jury model high school', 2016, '2', '', 0, '', '00:00:00', '1', '', 0, '1', 92),
(221, 't.n.k degree college', 2018, '2', '', 0, '', '00:00:00', '1', '', 0, '2', 92),
(222, 'jand hk high school', 2016, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 93),
(223, ' Mohila  College habigonj', 2018, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 93),
(224, 'b.k.g.c.govt girls high school', 2016, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 94),
(225, 'JAMALGANJ GIRLS HIGH SCHOOL', 2016, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 95),
(226, 'Sunamgonj Govt. College', 2018, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 95),
(227, 'SHAH HELAL HIGH SCHOOL', 2016, '2', '', 0, '', '00:00:00', '1', '', 0, '1', 96),
(228, 'Moulvibazar Govt. College', 2018, '2', '', 0, '', '00:00:00', '1', '', 0, '2', 96),
(229, 'KHALAGAON KARIMPUR HIGH SCHOOL', 2016, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 97),
(230, 'Moulvibazar Govt. College', 2018, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 97),
(231, 'MUZAHER HIGH SCHOOL', 2016, '3', '', 0, '', '00:00:00', '1', '', 0, '1', 98),
(232, 'Brindabon Govt. College', 2018, '3', '', 0, '', '00:00:00', '2', '', 0, '2', 98),
(233, 'B.k.g.c.govt girls high school', 2016, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 99),
(234, 'Brindabon Govt. College', 2018, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 99),
(235, 'Derai girls High School', 2016, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 100),
(236, 'Derai Degree College', 2018, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 100),
(237, 'Derai girls High School', 2016, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 101),
(238, 'Derai Degree College', 2018, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 101),
(239, 'Derai girls High School', 2016, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 102),
(240, 'Derai Degree College', 2018, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 102),
(241, 'B.k.g.c.govt girls high school', 2016, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 103),
(242, 'Habigonj Govt Women College', 2018, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 103),
(243, 'HAZI ABDUL GOFUR SCHOOL AND COLLEGE', 2016, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 104),
(244, 'SREEMONGOL GOVT: COLLEGE', 2018, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 104),
(245, 'DERAI GIRLS HIGH SCHOOL', 2016, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 105),
(246, 'DERAI DEGREE COLLEGE', 2018, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 105),
(247, 'B.K.G.C GOVT. GIRLS HIGH SCHOOL', 2016, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 106),
(248, 'HABIGANJ GOVT. WOMEN COLLEGE ', 2018, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 106),
(249, 'THE BUDS REGESDEBTIAL MODEL SCHOOL AND C', 2016, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 107),
(250, 'THE BUDS REGESDEBTIAL MODEL SCHOOL AND C', 2018, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 107),
(251, 'SUNAPUR HIGH SCHOOL', 2016, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 108),
(252, 'MOULIBIBAZAR GOVT. COLLEGE', 2018, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 108),
(253, 'SREEMONGOL GOVT GIRLS HIGH SCHOOL', 2015, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 109),
(254, 'THE BUDS RESIDENTIAL MODEL SCHOOL AND CO', 2018, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 109),
(255, 'MUKTODIR GIRLS HIGH SCHOOL', 2016, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 110),
(256, 'T.N KHANOM ACADEMEY DEGREE COLLEGE', 2018, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 110),
(257, 'DINARPUR HIGH SCHOOL', 2017, '2', '', 0, '', '00:00:00', '1', '', 0, '1', 112),
(258, 'CENTRAL COLLEGE', 2019, '2', '2017-', 1025, 'b', '00:00:09', '1', '', 0, '2', 112),
(259, 'MOHALAL HIGH SCHOOL', 2016, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 113),
(260, 'MOULIBIBAZAR GOVT. COLLEGE', 2018, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 113),
(261, 'Deen Nath Insyitution', 2016, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 114),
(262, 'Sylhet Govt: Women\'s College', 2018, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 114),
(263, 'Ali Amzad Govt. Girls High School ', 2016, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 115),
(264, 'Moulvibazar Govt. College', 2018, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 115),
(265, 'Meherunnessa Girls High School', 2016, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 117),
(266, 'Moulvibazar Govt. College', 2018, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 117),
(267, 'B.K.G.C GOVT. GIRLS HIGH SCHOOL', 2016, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 118),
(268, 'Brindabon Govt. College, Hobiganj', 2018, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 118),
(269, 'POLICE LINE HIGH SCHOOL', 2013, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 119),
(270, 'HAZI MOSIZ ALI GIRLS SCHOOL & COLLEGE', 2015, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 119),
(271, 'DERAI GIRLS HIGH SCHOOL', 2015, '3', '', 0, '', '00:00:00', '1', '', 0, '1', 120),
(272, 'DERAI DEGREE COLLEGE', 2017, '3', '', 0, '', '00:00:00', '1', '', 0, '2', 120),
(273, 'North east University Bangladesh, Sylhet', 2021, 'English', '', 0, '', '00:00:00', '', '2nd', 0, '3', 120),
(274, 'Janata Highe School ', 2012, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 121),
(275, 'Universall College, Sylhet', 2014, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 121),
(276, 'Metropolitan University, Sylhet', 2018, 'English', '', 0, '', '00:00:00', '', 'Final', 143, '3', 121),
(277, 'DINARPUR HIGH SCHOOL', 2016, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 122),
(278, 'Sylhet Govt: Women\'s College', 2019, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 122),
(279, 'kali Prasad High School', 2011, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 123),
(280, 'Moulvibazar Govt. College', 2014, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 123),
(281, 'Metropolitan University, Sylhet', 2018, 'BBA', '', 0, '', '00:00:00', '', 'Final', 152, '3', 123),
(282, 'ISLAMPUR P.M.P HIGH SCHOOL', 2012, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 124),
(283, 'GOVT.AGRAGAMI GIRLS HIGH SCHOOL AND COLL', 2017, '2', '', 0, '', '00:00:00', '1', '', 0, '2', 124),
(284, 'ISRAB ALI HIGJ SCHOOL AND COLLEGE ', 2016, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 126),
(285, 'EAKUB TAJUL MOHILA DEGREE COLLEGE ', 2017, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 126),
(286, 'RAJNAGAR IDEAL HIGH SCHOOL', 2016, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 127),
(287, 'GOVT.AGRAGAMI GIRLS HIGH SCHOOL AND COLL', 2017, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 127),
(288, 'Balagonj D.N High school', 2012, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 128),
(289, 'Balagonj Degree College', 2014, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 128),
(290, 'Metropolitan University, Sylhet', 2019, 'Dept: of C', '', 0, '', '00:00:00', '', 'Final', 152, '3', 128),
(291, 'PUTIGURI S.C HIGH SCHOOL', 2016, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 130),
(292, 'GOVT.WOMENS COLLEGE,SYLHET ', 2018, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 130),
(294, 'ROSULGANJ A.K.M.P HIGH SCHOOL ', 2012, '3', '', 0, '', '00:00:00', '1', '', 0, '1', 132),
(295, 'JOGONNATOUR DEGREE COLLEGE ', 2015, '3', '', 0, '', '00:00:00', '1', '', 0, '2', 132),
(296, 'JOYKHALASH UZANIGANJ ROSHIDIA HIGH SCHOO', 2013, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 133),
(297, 'UNIVERSAL COLLEGE', 2018, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 133),
(298, 'TETAI GOAN RASHID UDDIN HIGH SCHOOL', 2016, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 134),
(299, 'BAF SHOHEEN COLLEGE', 2018, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 134),
(300, 'DAKKIN RAYGHAR GOVT PRIMARY SCHOOL', 2014, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 135),
(301, 'DHAKA DAKKIN HIGH SCHOOL AND COLLEGE', 2016, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 135),
(302, 'AMIR MEAH HIGH SCHOOL AND COLLEGE', 2016, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 136),
(303, 'IMRAN AHMED WOMENS DEGREE COLLEGE', 2018, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 136),
(304, 'KUPER BAZAR HIGH SCHOOL', 2015, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 137),
(305, 'GOWINGHAT COLLEGE', 2017, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 137),
(306, 'MOHILA COLLEGE', 2021, 'BSC', '', 0, '', '00:00:00', '', 'FIRST', 1192, '3', 137),
(307, 'MOHAJARABAD HIGH SCHOOL', 2016, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 138),
(308, 'SREEMANGAL GOVT COLLEGE', 2018, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 138),
(309, 'LEADING UNIVERSITY', 2018, 'ENGLISH', '', 0, '', '00:00:00', '', '', 0, '3', 139),
(310, 'WOMENS MODEL COLLEGE', 2018, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 140),
(311, 'AGRAGAMI GIRLS COLLEGE', 2017, '2', '', 0, '', '00:00:00', '1', '', 0, '1', 141),
(312, 'AGRAGAMI GIRLS COLLEGE', 2018, '2', '', 0, '', '00:00:00', '1', '', 0, '2', 141),
(313, 'BANGLADESH INTERNATIONAL SCHOOL AND COLL', 2011, '2', '', 0, '', '00:00:00', '2', '', 0, '1', 142),
(314, 'JESSORE SIKKAH BOARD MODEL COLLEGE', 2013, '2', '', 0, '', '00:00:00', '7', '', 0, '2', 142),
(315, 'ZAMIR AHMED M/L HIGH SCHOOL', 2016, '1', '', 0, '', '00:00:00', '1', '', 0, '1', 143),
(316, 'BISSONATH DEGREE COLLEGE', 2018, '1', '', 0, '', '00:00:00', '1', '', 0, '2', 143);

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
(1, 3600, 0, 0, 2000, 3000, '2018-02-15 21:21:33', '2021-12-31', 1, '0010001', 0, 0, 0, 0, 7, 2),
(2, 3600, 0, 0, 2000, 3000, '2018-02-15 21:40:01', '2021-12-31', 2, '0020002', 0, 0, 0, 0, 8, 2),
(3, 3600, 0, 0, 0, 0, '2018-02-15 21:53:41', '2020-12-31', 3, '0030003', 0, 0, 0, 0, 9, 2),
(4, 3600, 0, 0, 0, 0, '2018-02-15 22:08:42', '2020-12-31', 4, '0040004', 0, 0, 0, 0, 10, 1),
(5, 3600, 0, 0, 0, 0, '2018-02-18 14:13:24', '2018-04-30', 5, '0050005', 0, 0, 0, 0, 11, 2),
(6, 3600, 0, 0, 2000, 3000, '2018-02-20 12:36:43', '2020-12-31', 6, '0070006', 0, 0, 0, 0, 13, 1),
(7, 3600, 0, 0, 0, 0, '2018-02-20 13:04:43', '2020-08-31', 7, '0090007', 0, 0, 0, 0, 15, 1),
(8, 3600, 0, 0, 1000, 3000, '2018-02-20 13:26:21', '2019-04-30', 8, '0100008', 0, 0, 0, 0, 16, 1),
(9, 3600, 0, 0, 0, 0, '2018-02-21 13:04:15', '2018-05-31', 9, '0120009', 0, 0, 0, 0, 18, 1),
(10, 3600, 0, 0, 0, 2000, '2018-02-22 12:31:42', '2019-02-28', 10, '0110010', 0, 0, 0, 0, 17, 1),
(11, 3600, 0, 0, 0, 2000, '2018-02-22 12:56:21', '2018-04-30', 11, '0130011', 0, 0, 0, 0, 20, 2),
(12, 3600, 0, 0, 0, 0, '2018-02-22 13:13:15', '2019-12-31', 12, '0140012', 0, 0, 0, 0, 21, 1),
(13, 3600, 0, 0, 0, 0, '2018-02-22 13:25:12', '2020-12-31', 13, '0150013', 0, 0, 0, 0, 22, 1),
(14, 3600, 0, 0, 0, 0, '2018-02-23 12:58:55', '2018-04-30', 14, '0160014', 0, 0, 0, 0, 23, 2),
(15, 3600, 0, 0, 0, 3000, '2018-02-23 13:07:04', '2019-04-30', 15, '0170015', 0, 0, 0, 0, 24, 1),
(16, 3600, 0, 0, 0, 0, '2018-02-23 13:45:55', '2018-04-30', 16, '0180016', 0, 0, 0, 0, 25, 2),
(17, 3600, 0, 0, 0, 0, '2018-02-24 12:09:05', '2020-09-30', 17, '0260017', 0, 0, 0, 0, 33, 1),
(18, 3600, 0, 0, 0, 0, '2018-02-24 12:16:46', '2020-09-30', 18, '0270018', 0, 0, 0, 0, 34, 1),
(19, 3600, 0, 0, 2000, 3000, '2018-03-05 10:58:23', '2020-12-31', 19, '0280019', 0, 0, 0, 0, 35, 1),
(20, 3600, 0, 0, 0, 0, '2018-03-08 13:10:50', '2019-12-31', 20, '0290020', 0, 0, 0, 0, 36, 1),
(21, 3600, 0, 0, 0, 0, '2018-03-30 20:34:56', '2020-12-31', 21, '0300021', 0, 0, 0, 0, 37, 1),
(22, 3600, 0, 0, 0, 0, '2018-04-01 17:05:12', '2018-05-31', 22, '0320022', 0, 0, 0, 0, 39, 2),
(23, 3600, 0, 0, 0, 0, '2018-04-01 17:18:04', '2020-12-31', 23, '0330023', 0, 0, 0, 0, 40, 1),
(24, 3600, 0, 0, 0, 0, '2018-04-01 18:03:36', '2020-12-31', 24, '0340024', 0, 0, 0, 0, 41, 1),
(25, 3600, 0, 0, 0, 0, '2018-04-01 18:46:00', '2018-12-31', 25, '0350025', 0, 0, 0, 0, 42, 1),
(26, 3600, 0, 0, 0, 0, '2018-04-07 18:54:30', '2018-12-31', 26, '0370026', 0, 0, 0, 0, 44, 1),
(27, 3600, 0, 0, 0, 0, '2018-04-16 12:07:04', '2021-12-31', 27, '0360027', 0, 0, 0, 0, 43, 1),
(28, 3600, 0, 0, 2000, 3000, '2018-04-16 12:40:06', '2018-12-31', 28, '0430028', 0, 0, 0, 0, 50, 1),
(29, 3600, 0, 0, 2000, 3000, '2018-04-16 12:47:47', '2021-12-31', 29, '0420029', 0, 0, 0, 0, 49, 1),
(30, 3600, 0, 0, 0, 0, '2018-04-17 14:18:50', '2018-10-31', 30, '0410030', 0, 0, 0, 0, 48, 2),
(31, 3600, 0, 0, 0, 0, '2018-04-17 14:46:41', '2021-12-31', 31, '0440031', 0, 0, 0, 0, 51, 1),
(32, 3600, 0, 0, 0, 0, '2018-04-17 15:04:35', '2021-12-01', 32, '0450032', 0, 0, 0, 0, 52, 1),
(33, 3600, 0, 0, 0, 0, '2018-04-17 15:17:36', '2021-12-31', 33, '0470033', 0, 0, 0, 0, 54, 2),
(34, 3600, 0, 0, 0, 0, '2018-04-17 15:32:20', '2021-12-31', 34, '0480034', 0, 0, 0, 0, 55, 1),
(35, 3600, 0, 0, 0, 0, '2018-04-18 13:15:30', '2021-12-31', 35, '0490035', 0, 0, 0, 0, 56, 0),
(36, 3600, 0, 0, 0, 0, '2018-04-18 13:33:42', '2021-12-31', 36, '0460036', 0, 0, 0, 0, 53, 0),
(37, 3200, 0, 0, 0, 0, '2018-04-18 13:47:51', '2018-06-01', 37, '0550037', 0, 0, 0, 0, 62, 1),
(38, 3200, 0, 0, 0, 0, '2018-04-18 14:18:37', '2018-10-31', 38, '0560038', 0, 0, 0, 0, 63, 1),
(39, 3100, 0, 0, 0, 0, '2018-04-18 14:32:42', '2021-12-31', 39, '0580039', 0, 0, 0, 0, 65, 1),
(40, 3100, 0, 0, 0, 0, '2018-04-18 14:43:18', '2021-12-31', 40, '0590040', 0, 0, 0, 0, 66, 1),
(41, 3100, 0, 0, 0, 0, '2018-04-18 14:52:56', '2021-12-31', 41, '0600041', 0, 0, 0, 0, 67, 1),
(42, 3200, 0, 0, 0, 0, '2018-04-18 15:14:27', '2018-05-31', 43, '0570043', 0, 0, 0, 0, 64, 0),
(43, 3200, 0, 0, 0, 0, '2018-04-18 15:23:18', '2018-09-19', 44, '0640044', 0, 0, 0, 0, 71, 1),
(44, 5100, 0, 0, 0, 0, '2018-04-18 15:31:40', '2021-12-31', 45, '0670045', 0, 0, 0, 0, 74, 1),
(45, 3600, 0, 0, 0, 0, '2018-04-19 12:26:26', '2021-12-31', 46, '0980046', 0, 0, 0, 0, 106, 1),
(46, 3600, 0, 0, 0, 0, '2018-04-19 12:36:19', '2021-12-31', 47, '0990047', 0, 0, 0, 0, 107, 1),
(47, 3600, 0, 0, 0, 0, '2018-04-19 12:50:37', '2021-12-31', 48, '1000048', 0, 0, 0, 0, 108, 1),
(48, 3600, 500, 0, 0, 0, '2018-04-19 13:05:49', '2021-12-31', 49, '1010049', 0, 0, 0, 0, 109, 1),
(49, 3600, 0, 0, 0, 0, '2018-04-19 13:17:08', '2021-12-31', 50, '1030050', 0, 0, 0, 0, 111, 1),
(50, 3600, 0, 0, 0, 0, '2018-04-19 13:25:26', '2021-12-31', 51, '1040051', 0, 0, 0, 0, 112, 0),
(51, 3600, 0, 0, 0, 0, '2018-04-19 13:37:12', '2021-12-31', 52, '1050052', 0, 0, 0, 0, 113, 0),
(52, 3600, 0, 0, 0, 0, '2018-04-19 13:50:24', '2021-12-31', 53, '1100053', 0, 0, 0, 0, 117, 1),
(53, 3600, 0, 0, 0, 0, '2018-04-19 13:58:49', '2018-06-09', 54, '1110054', 0, 0, 0, 0, 118, 1),
(54, 3600, 0, 0, 0, 0, '2018-04-19 14:09:46', '2020-01-02', 55, '1150055', 0, 0, 0, 0, 122, 2),
(55, 3600, 0, 0, 0, 0, '2018-04-19 14:19:27', '2021-12-31', 56, '1160056', 0, 0, 0, 0, 123, 0),
(56, 3600, 0, 0, 0, 0, '2018-04-19 14:38:35', '2021-12-31', 57, '1170057', 0, 0, 0, 0, 124, 0),
(57, 3600, 0, 0, 0, 0, '2018-04-21 11:49:27', '2020-01-12', 58, '0680058', 0, 0, 0, 0, 76, 1),
(58, 2900, 0, 0, 0, 0, '2018-04-21 12:05:20', '2021-12-31', 59, '0690059', 0, 0, 0, 0, 77, 1),
(59, 2900, 0, 0, 0, 0, '2018-04-21 12:59:00', '2021-12-31', 61, '0730061', 0, 0, 0, 0, 81, 1),
(60, 2900, 0, 0, 0, 0, '2018-04-21 13:20:48', '2021-12-31', 63, '0760063', 0, 0, 0, 0, 84, 1),
(61, 2900, 0, 0, 0, 0, '2018-04-21 13:42:05', '2021-12-31', 65, '0790065', 0, 0, 0, 0, 87, 1),
(62, 2900, 0, 0, 0, 0, '2018-04-21 14:01:10', '2021-12-31', 66, '0800066', 0, 0, 0, 0, 88, 1),
(63, 2900, 0, 0, 0, 0, '2018-04-21 14:08:24', '2021-12-31', 67, '0810067', 0, 0, 0, 0, 89, 1),
(64, 5100, 900, 0, 0, 0, '2018-04-21 14:16:03', '2021-12-31', 68, '0820068', 0, 0, 0, 0, 90, 1),
(65, 3200, 0, 0, 0, 0, '2018-04-21 14:23:03', '2021-12-31', 69, '0830069', 0, 0, 0, 0, 91, 1),
(66, 3200, 0, 0, 0, 0, '2018-04-21 14:30:04', '2021-12-31', 70, '0840070', 0, 0, 0, 0, 92, 2),
(67, 3100, 0, 0, 0, 0, '2018-04-21 14:37:33', '2021-12-31', 71, '0880071', 0, 0, 0, 0, 96, 1),
(68, 3200, 0, 0, 0, 0, '2018-04-21 14:44:43', '2021-12-31', 72, '0850072', 0, 0, 0, 0, 93, 1),
(69, 3100, 0, 0, 0, 0, '2018-04-21 15:03:18', '2021-12-31', 73, '0890073', 0, 0, 0, 0, 97, 1),
(70, 3100, 0, 0, 0, 0, '2018-04-22 12:01:04', '2018-11-10', 76, '0900076', 0, 0, 0, 0, 98, 0),
(71, 3200, 0, 0, 0, 0, '2018-04-22 12:09:46', '2021-12-31', 77, '0910077', 0, 0, 0, 0, 99, 1),
(72, 3100, 0, 0, 0, 0, '2018-04-22 12:15:30', '2020-04-10', 78, '0940078', 0, 0, 0, 0, 102, 1),
(73, 3600, 0, 0, 0, 0, '2018-04-25 12:37:34', '2018-12-07', 80, '1120080', 0, 0, 0, 0, 119, 1),
(74, 3600, 0, 0, 0, 0, '2018-05-31 15:03:24', NULL, 51, '0051', 0, 0, 0, 0, 114, 1),
(75, 3600, 0, 500, 0, 0, '2018-06-23 13:06:27', '2018-10-31', 81, '0010081', 0, 0, 0, 0, 7, 1),
(76, 3600, 0, 500, 0, 0, '2018-06-23 13:58:15', '2018-10-31', 82, '0020082', 0, 0, 0, 0, 8, 1),
(77, 3600, 0, 500, 0, 0, '2018-06-23 14:25:33', '1970-01-01', 83, '0050083', 0, 0, 0, 0, 11, 1),
(78, 3600, 0, 500, 0, 0, '2018-06-23 15:04:32', '1970-01-01', 84, '0060084', 0, 0, 0, 0, 12, 1),
(79, 3200, 0, 0, 0, 0, '2018-06-23 16:43:39', '1970-01-01', 86, '0540086', 0, 0, 0, 0, 61, 2),
(80, 3600, 0, 0, 0, 0, '2018-06-23 17:40:38', '2019-05-31', 87, '0130087', 0, 0, 0, 0, 20, 1),
(81, 3600, 0, 0, 0, 0, '2018-06-23 17:53:52', '2021-12-31', 88, '0160088', 0, 0, 0, 0, 23, 1),
(82, 3600, 0, 0, 0, 0, '2018-06-23 18:02:24', '2018-12-31', 89, '1020089', 0, 0, 0, 0, 110, 1),
(83, 3600, 0, 500, 0, 0, '2018-06-24 11:57:10', '1970-01-01', 90, '0180090', 0, 0, 0, 0, 25, 1),
(84, 3200, 1100, 0, 0, 0, '2018-06-24 13:11:24', '1970-01-01', 91, '0230091', 0, 0, 0, 0, 30, 1),
(85, 3200, 1100, 0, 0, 0, '2018-06-24 13:33:47', '1970-01-01', 92, '0220092', 0, 0, 0, 0, 29, 1),
(86, 3200, 100, 0, 0, 0, '2018-06-24 14:07:21', '1970-01-01', 93, '0240093', 0, 0, 0, 0, 31, 1),
(87, 3600, 0, 500, 0, 0, '2018-06-24 14:29:30', '1970-01-01', 94, '0380094', 0, 0, 0, 0, 45, 1),
(88, 3600, 0, 500, 0, 0, '2018-06-24 14:52:42', '2018-10-31', 95, '0080095', 0, 0, 0, 0, 14, 1),
(89, 3600, 0, 0, 0, 0, '2018-06-24 15:49:27', '2018-10-31', 96, '0410096', 0, 0, 0, 0, 48, 1),
(90, 3600, 0, 500, 0, 0, '2018-06-24 16:19:06', '2018-10-31', 97, '0310097', 0, 0, 0, 0, 38, 1),
(91, 2900, 0, 200, 0, 0, '2018-06-24 16:56:41', '2018-10-31', 98, '0780098', 0, 0, 0, 0, 86, 1),
(92, 3600, 0, 500, 0, 0, '2018-06-25 12:03:51', '1970-01-01', 99, '0390099', 0, 0, 0, 0, 46, 1),
(93, 3200, 0, 0, 0, 0, '2018-06-25 12:32:01', '1970-01-01', 100, '0250100', 0, 0, 0, 0, 32, 0),
(94, 3200, 0, 0, 0, 0, '2018-06-25 13:03:20', '1970-01-01', 101, '0650101', 0, 0, 0, 0, 72, 1),
(95, 3200, 0, 0, 0, 0, '2018-06-25 13:28:19', '1970-01-01', 102, '0610102', 0, 0, 0, 0, 68, 1),
(96, 3200, 0, 0, 0, 0, '2018-06-25 14:06:13', '1970-01-01', 103, '0860103', 0, 0, 0, 0, 94, 1),
(97, 3200, 0, 0, 0, 0, '2018-06-25 16:10:48', NULL, 43, '0630043', 0, 0, 0, 0, 70, 1),
(98, 3200, 0, 400, 0, 0, '2018-06-25 16:21:49', '2018-10-31', 104, '0570104', 0, 0, 0, 0, 64, 1),
(99, 3200, 0, 0, 0, 0, '2018-06-26 16:38:29', '2018-10-31', 105, '0660105', 0, 0, 0, 0, 73, 1),
(100, 3200, 0, 0, 0, 0, '2018-06-26 19:46:18', '2018-10-31', 106, '0870106', 0, 0, 0, 0, 95, 1),
(101, 5100, 0, 0, 0, 0, '2018-06-26 20:04:20', '2018-10-31', 107, '0970107', 0, 0, 0, 0, 105, 1),
(102, 3600, 0, 500, 0, 0, '2018-06-27 12:19:28', '2018-10-31', 108, '1040108', 0, 0, 0, 0, 112, 1),
(103, 3600, 0, 500, 0, 0, '2018-06-27 13:01:29', '2018-10-31', 109, '1140109', 0, 0, 0, 0, 121, 1),
(104, 3600, 0, 0, 0, 0, '2018-06-27 17:11:34', NULL, 52, '1130052', 0, 0, 0, 0, 120, 1),
(105, 3200, 100, 0, 0, 0, '2018-06-27 20:40:59', '2018-10-31', 110, '0190110', 0, 0, 0, 0, 26, 1),
(106, 3200, 100, 0, 0, 0, '2018-06-27 20:46:15', '1970-01-01', 100, '0210100', 0, 0, 0, 0, 28, 1),
(107, 3200, 0, 0, 0, 0, '2018-06-28 13:07:00', NULL, 76, '0930076', 0, 0, 0, 0, 101, 1),
(108, 3100, 0, 0, 0, 0, '2018-06-28 13:14:15', '2018-10-31', 111, '0900111', 0, 0, 0, 0, 98, 1),
(109, 3200, 0, 0, 0, 0, '2018-06-28 18:11:19', '2019-05-31', 112, '0920112', 0, 0, 0, 0, 100, 1),
(110, 3600, 0, 500, 0, 0, '2018-06-28 18:32:24', '2018-10-31', 113, '1050113', 0, 0, 0, 0, 113, 1),
(111, 3600, 0, 0, 0, 0, '2018-06-28 18:34:31', NULL, 57, '1210057', 0, 0, 0, 0, 128, 1),
(112, 3600, 0, 0, 0, 0, '2018-06-28 18:36:56', NULL, 56, '1190056', 0, 0, 0, 0, 126, 1),
(113, 3600, 0, 500, 0, 0, '2018-06-28 18:57:53', '2018-10-31', 114, '1150114', 0, 0, 0, 0, 122, 1),
(114, 3600, 0, 500, 0, 0, '2018-06-29 14:41:45', '2018-10-31', 115, '1170115', 0, 0, 0, 0, 124, 1),
(115, 3600, 0, 500, 0, 0, '2018-06-29 14:54:13', '2018-10-31', 116, '1200116', 0, 0, 0, 0, 127, 1),
(116, 3600, 0, 500, 0, 0, '2018-06-29 17:41:01', '2018-10-31', 117, '1220117', 0, 0, 0, 0, 129, 1),
(117, 3600, 0, 0, 0, 0, '2018-06-29 17:58:25', NULL, 36, '0510036', 0, 0, 0, 0, 58, 1),
(118, 3600, 0, 0, 0, 0, '2018-06-29 17:58:47', NULL, 35, '0500035', 0, 0, 0, 0, 57, 1),
(119, 3600, 0, 0, 0, 0, '2018-06-29 18:10:26', '2018-10-31', 118, '0460118', 0, 0, 0, 0, 53, 1),
(120, 5100, 0, 0, 0, 0, '2018-06-29 18:19:58', '2018-12-31', 119, '0530119', 0, 0, 0, 0, 60, 1),
(121, 3200, 0, 0, 0, 0, '2018-06-29 18:47:59', '2021-12-31', 120, '0620120', 0, 0, 0, 0, 69, 1),
(122, 2900, 0, 0, 0, 0, '2018-06-29 19:29:13', '2018-09-30', 121, '0740121', 0, 0, 0, 0, 82, 1),
(123, 2900, 0, 0, 0, 0, '2018-06-29 19:37:52', '2019-05-31', 122, '0750122', 0, 0, 0, 0, 83, 1),
(124, 2900, 0, 0, 0, 0, '2018-06-29 19:45:15', '2018-12-31', 123, '0770123', 0, 0, 0, 0, 85, 1),
(125, 3200, 0, 0, 0, 0, '2018-07-15 12:59:42', '2018-10-31', 124, '0700124', 0, 0, 0, 0, 78, 1),
(126, 3600, 0, 0, 0, 0, '2018-07-15 13:17:56', '2018-10-31', 126, '0400126', 0, 0, 0, 0, 47, 1),
(127, 3600, 0, 0, 0, 0, '2018-07-15 13:35:31', '2018-10-31', 127, '0520127', 0, 0, 0, 0, 59, 1),
(128, 3600, 0, 0, 0, 0, '2018-07-19 14:09:08', '2019-12-31', 128, '1070128', 0, 0, 0, 0, 115, 1),
(129, 3600, 0, 0, 0, 0, '2018-07-22 13:35:11', '2018-10-31', 129, '0030129', 0, 0, 0, 0, 9, 1),
(130, 3600, 0, 0, 0, 0, '2018-07-23 13:10:14', '2018-10-31', 130, '1160130', 0, 0, 0, 0, 123, 1),
(131, 3600, 0, 0, 0, 0, '2018-07-23 13:34:11', '2018-10-31', 132, '0490132', 0, 0, 0, 0, 56, 1),
(132, 3600, 0, 0, 0, 0, '2018-07-23 14:43:36', '2018-10-31', 133, '0320133', 0, 0, 0, 0, 39, 1),
(133, 3200, 0, 0, 0, 0, '2018-07-24 15:48:16', '2018-10-31', 134, '0710134', 0, 0, 0, 0, 79, 1),
(134, 3600, 0, 0, 0, 0, '2018-07-28 12:14:08', '2018-10-31', 135, '1180135', 0, 0, 0, 0, 125, 1),
(135, 3600, 0, 0, 0, 0, '2018-07-29 12:21:42', '2018-10-31', 136, '0470136', 0, 0, 0, 0, 54, 1),
(136, 3600, 0, 0, 0, 0, '2018-07-29 15:38:40', '2021-12-31', 137, '1240137', 0, 0, 0, 0, 131, 1),
(137, 3200, 0, 0, 0, 0, '2018-07-31 12:47:47', '2018-10-31', 138, '0540138', 0, 0, 0, 0, 61, 2),
(138, 3600, 0, 0, 0, 0, '2018-07-31 12:57:35', '2018-10-31', 139, '1080139', 0, 0, 0, 0, 116, 1),
(139, 3600, 0, 0, 0, 0, '2018-07-31 13:32:59', '2018-10-31', 140, '1310140', 0, 0, 0, 0, 138, 1),
(140, 3600, 0, 0, 0, 0, '2018-08-01 15:00:22', '2018-10-31', 141, '0840141', 0, 0, 0, 0, 92, 1),
(141, 3200, 0, 0, 0, 0, '2018-08-02 11:32:36', '2018-10-31', 142, '0720142', 0, 0, 0, 0, 80, 1),
(142, 3600, 0, 0, 0, 0, '2018-08-02 11:41:12', '2018-10-31', 143, '1250143', 0, 0, 0, 0, 132, 1);

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
(1, '', 0, '', '', 1),
(2, '', 0, '', '', 2),
(3, '', 0, '', '', 3),
(4, '', 0, '', '', 4),
(5, '', 0, '', '', 5),
(6, '', 0, '', '', 6),
(7, '', 0, '', '', 7),
(8, '', 0, '', '', 8),
(9, '', 0, '', '', 9),
(10, '', 0, '', '', 11),
(11, '', 0, '', '', 12),
(12, '', 0, '', '', 13),
(13, '', 0, '', '', 14),
(14, '', 0, '', '', 15),
(15, '', 0, '', '', 16),
(16, '', 0, '', '', 17),
(17, '', 0, '', '', 18),
(18, '', 0, '', '', 19),
(19, '', 0, '', '', 20),
(20, '', 0, '', '', 21),
(21, '', 0, '', '', 23),
(22, '', 0, '', '', 24),
(23, '', 0, '', '', 25),
(24, '', 0, '', '', 26),
(25, '', 0, '', '', 27),
(26, '', 0, '', '', 29),
(27, '', 0, '', '', 31),
(28, '', 0, '', '', 32),
(29, '', 0, '', '', 33),
(30, '', 0, '', '', 34),
(31, '', 0, '', '', 35),
(32, '', 0, '', '', 36),
(33, '', 0, '', '', 39),
(34, '', 0, '', '', 40),
(35, '', 0, '', '', 41),
(36, '', 0, '', '', 45),
(37, '', 0, '', '', 49),
(38, '', 0, '', '', 50),
(39, 'city ', 0, '0', 'm', 51),
(40, '', 0, '', '', 52),
(41, '', 0, '', '', 53),
(42, '', 0, '', '', 56),
(43, '', 0, '', '', 58),
(44, '', 0, '', '', 59),
(45, '', 0, '', '', 61),
(46, '', 0, '', '', 65),
(47, '', 0, '', '', 66),
(48, '', 0, '', '', 67),
(49, '', 0, '', '', 68),
(50, '', 0, '', '', 69),
(51, '', 0, '', '', 70),
(52, '', 0, '', '', 71),
(53, '', 0, '', '', 73),
(54, '', 0, '', '', 77),
(55, '', 0, '', '', 87),
(56, 'DEPARTMENT OF AGRICULTURE', 0, 'SAAO', 'SOUT SHURNA SYLHET', 89),
(57, '', 0, '', '', 112),
(58, '', 0, '', '', 120),
(59, '', 0, '', '', 121),
(60, '', 0, '', '', 123),
(61, '', 0, '', '', 128),
(62, '', 0, '', '', 137);

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
(1, 1, 1, 2000, 0, 'NON RE FANDABLE FEE', 0, '2018-02-15 21:23:37', 10),
(2, 4, 2, 3000, 0, 'RE-FANDABUL FEE', 0, '2018-02-15 21:24:06', 10),
(3, 1, 3, 2000, 0, 'Non Re-fundabul fee', 0, '2018-02-15 21:43:04', 10),
(4, 4, 4, 3000, 0, 'Re-fund abul fee', 0, '2018-02-15 21:43:42', 10),
(5, 1, 5, 2000, 0, '২০১৭ / ২০১৮ থেকে সবাইকে  জামানত টাকা দিতে হয় ', 0, '2018-02-20 12:37:36', 10),
(6, 4, 6, 3000, 0, '', 0, '2018-02-20 12:37:57', 10),
(7, 1, 7, 1000, 0, 'Re-admission Fee ', 0, '2018-02-20 13:27:11', 10),
(8, 4, 8, 3000, 0, '', 0, '2018-02-20 13:27:32', 10),
(9, 4, 9, 2000, 0, 'তাকমিলা আহমেদ ডিসেম্বর ২০১৬ তে ভর্তি সময় জামানত এর ২০০০/= টাকা জমা দিয়েছে।', 0, '2018-02-22 12:32:30', 10),
(10, 4, 10, 2000, 0, 'SWARNALI ACHARJEE ডিসেম্বর ২০১৬ তে ভর্তি সময় জামানত এর ২০০০/= টাকা জমা দিয়েছে।', 0, '2018-02-22 12:58:09', 10),
(11, 4, 11, 3000, 0, 'SAMIA ISLAM আগের ID Number:  	801154   ২০১৭ তে ভর্তি সময় জামানত এর ৩০০০/= টাকা জমা দিয়েছে।', 0, '2018-02-23 13:07:49', 10),
(12, 4, 12, 3000, 0, '', 0, '2018-04-16 14:47:40', 10),
(13, 1, 13, 2000, 0, '', 0, '2018-04-16 14:48:01', 10),
(14, 1, 14, 2000, 0, '', 0, '2018-04-16 14:48:17', 10),
(15, 4, 15, 3000, 0, '', 0, '2018-04-16 14:48:32', 10),
(16, 1, 16, 2000, 0, '', 0, '2018-04-16 14:49:02', 10),
(17, 4, 17, 3000, 0, '', 0, '2018-04-16 14:49:18', 10),
(30, 2, 23, 5500, 0, '', 0, '2018-08-09 15:55:42', 10),
(31, 2, 24, 5500, 0, '', 0, '2018-08-09 15:57:17', 10),
(32, 2, 25, 5500, 0, '', 0, '2018-08-09 16:06:13', 10),
(33, 2, 26, 6000, 0, '', 0, '2018-08-09 16:12:46', 10),
(34, 2, 27, 5500, 0, '', 0, '2018-08-09 16:14:34', 10),
(35, 2, 28, 6000, 0, '', 0, '2018-08-09 16:15:15', 10),
(36, 2, 29, 6000, 0, '', 0, '2018-08-09 16:15:43', 10),
(37, 2, 30, 5500, 0, '', 0, '2018-08-09 16:16:17', 10),
(38, 2, 31, 6000, 0, '', 0, '2018-08-09 16:16:48', 10),
(39, 2, 32, 5500, 0, '', 0, '2018-08-09 16:17:19', 10),
(40, 2, 33, 5500, 0, '', 0, '2018-08-09 16:17:40', 10),
(41, 2, 34, 5500, 0, '', 0, '2018-08-09 16:18:30', 10),
(42, 2, 35, 5500, 0, '', 0, '2018-08-09 16:22:17', 10),
(43, 2, 36, 6000, 0, '', 0, '2018-08-09 16:22:39', 10),
(44, 2, 37, 5000, 0, '', 0, '2018-08-09 16:23:25', 10),
(45, 2, 38, 4000, 0, '', 0, '2018-08-09 16:24:03', 10),
(46, 2, 39, 5000, 0, '', 0, '2018-08-09 16:24:41', 10),
(47, 2, 40, 5500, 0, '', 0, '2018-08-09 16:26:02', 10),
(48, 2, 41, 5500, 0, '', 0, '2018-08-09 16:26:38', 10),
(49, 2, 42, 5500, 0, '', 0, '2018-08-09 16:26:57', 10),
(50, 2, 43, 5500, 0, '', 0, '2018-08-09 16:27:17', 10),
(51, 2, 44, 6000, 0, '', 0, '2018-08-09 16:27:41', 10),
(52, 2, 45, 5500, 0, '', 0, '2018-08-09 16:28:08', 10),
(53, 2, 46, 5500, 0, '', 0, '2018-08-09 16:28:32', 10),
(54, 2, 47, 5500, 0, '', 0, '2018-08-09 16:30:00', 10),
(55, 2, 48, 5500, 0, '', 0, '2018-08-09 16:31:07', 10),
(56, 2, 49, 5500, 0, '', 0, '2018-08-09 16:31:24', 10),
(57, 2, 50, 5500, 0, '', 0, '2018-08-09 16:33:24', 10),
(58, 2, 51, 5500, 0, '', 0, '2018-08-09 16:34:18', 10),
(59, 2, 52, 5500, 0, '', 0, '2018-08-09 16:34:56', 10),
(60, 2, 53, 5500, 0, '', 0, '2018-08-09 16:35:33', 10),
(61, 2, 54, 7000, 0, '', 0, '2018-08-09 16:36:16', 10),
(62, 2, 55, 5500, 0, '', 0, '2018-08-09 16:36:51', 10),
(63, 2, 56, 5500, 0, '', 0, '2018-08-09 16:39:34', 10),
(64, 2, 57, 5500, 0, '', 0, '2018-08-09 16:40:13', 10),
(65, 2, 58, 5000, 0, '', 0, '2018-08-09 16:44:41', 10),
(66, 2, 59, 5100, 0, '', 0, '2018-08-09 16:45:11', 10),
(67, 2, 60, 5100, 0, '', 0, '2018-08-09 17:02:16', 10),
(68, 2, 61, 7000, 0, '', 0, '2018-08-09 17:02:49', 10),
(69, 2, 62, 5100, 0, '', 0, '2018-08-09 17:03:21', 10),
(70, 2, 63, 5100, 0, '', 0, '2018-08-09 17:03:58', 10),
(71, 2, 64, 5100, 0, '', 0, '2018-08-09 17:04:30', 10),
(72, 2, 65, 5000, 0, '', 0, '2018-08-09 17:05:04', 10),
(73, 2, 66, 4800, 0, '', 0, '2018-08-09 17:06:06', 10),
(74, 2, 67, 4800, 0, '', 0, '2018-08-09 17:06:32', 10),
(75, 2, 68, 7000, 0, '', 0, '2018-08-09 17:07:02', 10),
(76, 2, 69, 5000, 0, '', 0, '2018-08-09 17:07:40', 10),
(77, 2, 70, 5500, 0, '', 0, '2018-08-12 11:56:59', 10),
(78, 2, 71, 5500, 0, '', 0, '2018-08-12 11:57:24', 10),
(79, 2, 72, 5000, 0, '', 0, '2018-08-12 11:58:04', 10),
(80, 2, 73, 5500, 0, '', 0, '2018-08-12 11:58:45', 10),
(81, 2, 74, 5500, 0, '', 0, '2018-08-12 11:59:16', 10),
(82, 2, 75, 5500, 0, '', 0, '2018-08-12 11:59:51', 10),
(83, 2, 76, 5500, 0, '', 0, '2018-08-12 12:00:15', 10),
(84, 2, 77, 5500, 0, '', 0, '2018-08-12 12:00:45', 10),
(85, 2, 78, 5500, 0, '', 0, '2018-08-12 12:01:09', 10),
(86, 2, 79, 5500, 0, '', 0, '2018-08-12 12:01:30', 10),
(87, 2, 80, 5500, 0, '', 0, '2018-08-12 12:02:13', 10),
(88, 2, 81, 5500, 0, '', 0, '2018-08-12 12:03:52', 10),
(89, 2, 82, 5500, 0, '', 0, '2018-08-12 12:04:19', 10),
(90, 2, 83, 6000, 0, '', 0, '2018-08-12 12:05:35', 10),
(91, 2, 84, 6000, 0, '', 0, '2018-08-12 12:06:54', 10),
(92, 2, 85, 6000, 0, '', 0, '2018-08-12 12:07:10', 10),
(93, 2, 86, 4000, 0, '', 0, '2018-08-12 12:08:18', 10),
(94, 2, 87, 5100, 0, '', 0, '2018-08-12 12:09:40', 10),
(95, 2, 88, 5100, 0, '', 0, '2018-08-12 12:10:06', 10),
(96, 2, 89, 6000, 0, '', 0, '2018-08-12 12:10:28', 10),
(97, 2, 90, 5500, 0, '', 0, '2018-08-12 14:58:10', 10),
(98, 2, 91, 5500, 0, '', 0, '2018-08-12 14:59:37', 10),
(99, 2, 92, 5500, 0, '', 0, '2018-08-12 15:00:02', 10),
(100, 2, 93, 5500, 0, '', 0, '2018-08-12 15:00:19', 10),
(101, 2, 94, 5500, 0, '', 0, '2018-08-12 15:00:52', 10),
(102, 2, 95, 5500, 0, '', 0, '2018-08-12 15:01:15', 10),
(103, 2, 96, 5500, 0, '', 0, '2018-08-12 15:02:23', 10),
(104, 2, 97, 5500, 0, '', 0, '2018-08-12 15:02:44', 10),
(105, 2, 98, 5500, 0, '', 0, '2018-08-12 15:03:10', 10),
(106, 2, 99, 5500, 0, '', 0, '2018-08-12 15:03:33', 10),
(107, 2, 100, 6000, 0, '', 0, '2018-08-12 15:04:31', 10),
(108, 2, 101, 5900, 0, '', 0, '2018-08-12 15:05:56', 10),
(109, 2, 102, 4800, 0, '', 0, '2018-08-12 16:33:05', 10),
(110, 2, 103, 5100, 0, '', 0, '2018-08-12 16:33:46', 10),
(111, 2, 104, 4800, 0, '', 0, '2018-08-12 16:34:28', 10),
(112, 2, 105, 5100, 0, '', 0, '2018-08-12 16:34:50', 10),
(113, 2, 106, 4800, 0, '', 0, '2018-08-12 16:35:29', 10),
(114, 2, 107, 5100, 0, '', 0, '2018-08-12 16:36:05', 10),
(115, 2, 108, 4800, 0, '', 0, '2018-08-12 16:36:35', 10),
(116, 2, 109, 5000, 0, '', 0, '2018-08-12 16:37:04', 10),
(117, 2, 110, 5000, 0, '', 0, '2018-08-12 16:37:29', 10),
(118, 2, 111, 5100, 0, '', 0, '2018-08-12 16:37:52', 10),
(119, 5, 8, 153500, 0, 'August Month Rent ', 0, '2018-08-13 12:00:29', 10),
(120, 5, 9, 53500, 0, 'Augest Rent Payment', 0, '2018-08-13 12:04:33', 10);

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

--
-- Dumping data for table `transfer_info`
--

INSERT INTO `transfer_info` (`transferInfoId`, `transferFromStdSeatId`, `transferToStdSeatId`, `transferDate`, `transferBy`, `transferStudent_info_student_id`) VALUES
(1, 50, 74, '2018-05-31 15:03:24', 10, 51),
(2, 42, 97, '2018-06-25 16:10:48', 10, 43),
(3, 51, 104, '2018-06-27 17:11:34', 10, 52),
(4, 93, 106, '2018-06-27 20:46:15', 10, 100),
(5, 70, 107, '2018-06-28 13:07:00', 10, 76),
(6, 56, 111, '2018-06-28 18:34:31', 10, 57),
(7, 55, 112, '2018-06-28 18:36:56', 10, 56),
(8, 36, 117, '2018-06-29 17:58:25', 10, 36),
(9, 35, 118, '2018-06-29 17:58:47', 10, 35);

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
(4, 5, 10, 25, '01', 'Unite 01, Floor no. 01, House no. 08, Sylhet Zone', 1, 10, '2018-01-02 23:51:01', 10),
(5, 5, 10, 26, '03', 'Unite 03, Floor no. 03, House no. 08, Sylhet Zone', 1, 6, '2018-01-02 23:51:44', 10),
(6, 5, 10, 27, '04', 'Unite 04, Floor no. 04, House no. 08, Sylhet Zone', 1, 7, '2018-01-02 23:52:17', 10),
(7, 5, 11, 28, '01', 'Unit no. 01, Floor no. 01, House no. 20, Sylhet Zone', 1, 6, '2018-01-03 00:01:27', 10),
(8, 5, 11, 29, '02', 'Unit no. 02, Floor no. 02, House no. 20, Sylhet Zone', 1, 6, '2018-01-03 00:05:41', 10),
(9, 5, 11, 30, '03', 'Unit no. 03, Floor no. 03, House no. 20, Sylhet Zone', 1, 7, '2018-01-03 00:06:20', 10),
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
(5, 'Sylhet', '', 1, '2018-01-02 17:33:22', 'Sylhet Zone'),
(6, 'Shamshernagar', '', 1, '2018-01-02 17:34:05', 'Shamshernagar Zone');

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
  MODIFY `buildingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `expense_field_info`
--
ALTER TABLE `expense_field_info`
  MODIFY `fieldId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `expense_info`
--
ALTER TABLE `expense_info`
  MODIFY `expenseId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `floor_info`
--
ALTER TABLE `floor_info`
  MODIFY `floorId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `gurdian_info`
--
ALTER TABLE `gurdian_info`
  MODIFY `gurdianId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;
--
-- AUTO_INCREMENT for table `monthly_billing_info`
--
ALTER TABLE `monthly_billing_info`
  MODIFY `monthlyBillingInfoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `monthly_billng_details`
--
ALTER TABLE `monthly_billng_details`
  MODIFY `monthlyBillngDetailsId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;
--
-- AUTO_INCREMENT for table `payment_type_info`
--
ALTER TABLE `payment_type_info`
  MODIFY `paymentTypeInfoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `received_payment_info`
--
ALTER TABLE `received_payment_info`
  MODIFY `receivedPaymentInfoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
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
  MODIFY `roomId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;
--
-- AUTO_INCREMENT for table `seat_info`
--
ALTER TABLE `seat_info`
  MODIFY `seatId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;
--
-- AUTO_INCREMENT for table `seat_status_info`
--
ALTER TABLE `seat_status_info`
  MODIFY `seatStausId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `seat_type_info`
--
ALTER TABLE `seat_type_info`
  MODIFY `seatTypeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `student_admission_type`
--
ALTER TABLE `student_admission_type`
  MODIFY `admissionTypeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `student_image_info`
--
ALTER TABLE `student_image_info`
  MODIFY `sImgId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `studentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;
--
-- AUTO_INCREMENT for table `student_other_courses`
--
ALTER TABLE `student_other_courses`
  MODIFY `coursesId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;
--
-- AUTO_INCREMENT for table `student_qualification`
--
ALTER TABLE `student_qualification`
  MODIFY `sQId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=317;
--
-- AUTO_INCREMENT for table `student_seat_info`
--
ALTER TABLE `student_seat_info`
  MODIFY `sSeatId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;
--
-- AUTO_INCREMENT for table `student_working_info`
--
ALTER TABLE `student_working_info`
  MODIFY `sWId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `transaction_info`
--
ALTER TABLE `transaction_info`
  MODIFY `transactionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;
--
-- AUTO_INCREMENT for table `transaction_type_info`
--
ALTER TABLE `transaction_type_info`
  MODIFY `transactionTypeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `transfer_info`
--
ALTER TABLE `transfer_info`
  MODIFY `transferInfoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `unit_info`
--
ALTER TABLE `unit_info`
  MODIFY `unitId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `zone_info`
--
ALTER TABLE `zone_info`
  MODIFY `zoneID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
