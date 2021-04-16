-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2021 at 04:58 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `additional_charges`
--

CREATE TABLE `additional_charges` (
  `ChargeID` int(11) NOT NULL,
  `FlatID` bigint(20) NOT NULL,
  `Amount` int(11) NOT NULL,
  `Reason` varchar(500) NOT NULL,
  `Bill_month` varchar(100) NOT NULL,
  `Updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `Updated_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `additional_charges`
--

INSERT INTO `additional_charges` (`ChargeID`, `FlatID`, `Amount`, `Reason`, `Bill_month`, `Updated_at`, `Updated_by`) VALUES
(84, 1, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(85, 2, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(86, 3, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(87, 4, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(88, 5, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(89, 6, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(90, 7, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(91, 8, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(92, 9, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(93, 10, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(94, 11, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(95, 12, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(96, 13, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(97, 14, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(98, 15, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(99, 16, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(100, 17, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(101, 18, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(102, 19, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(103, 20, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(104, 21, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(105, 22, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(106, 23, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(107, 24, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(108, 25, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(109, 26, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(110, 27, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(111, 28, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(112, 29, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(113, 30, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(114, 31, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(115, 32, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(116, 33, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(117, 34, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(118, 35, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(119, 36, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(120, 37, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(121, 38, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(122, 39, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(123, 40, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(124, 41, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(125, 42, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(126, 43, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(127, 44, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(128, 45, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(129, 46, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(130, 47, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(131, 48, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(132, 49, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(133, 50, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(134, 51, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(135, 52, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(136, 53, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(137, 54, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(138, 55, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(139, 56, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(140, 57, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(141, 58, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(142, 59, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(143, 60, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(144, 61, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(145, 62, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(146, 63, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(147, 64, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(148, 65, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(149, 66, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(150, 67, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(151, 68, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(152, 69, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(153, 70, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(154, 71, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(155, 72, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1'),
(156, 73, 200, 'Building Repair ', 'Mar 2021', '2021-04-16 14:14:23', 'Admin1');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminID` bigint(20) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Name` text NOT NULL,
  `Password` varchar(150) NOT NULL,
  `ContactNumber` bigint(10) NOT NULL,
  `EmailID` varchar(100) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminID`, `Username`, `Name`, `Password`, `ContactNumber`, `EmailID`, `updated_at`) VALUES
(1, 'Admin1', 'Purvi H', '49f68a5c8493ec2c0bf489821c21fc3b', 9029996333, 'purvi.h@somaiya.edu', '2021-04-14 08:58:43'),
(2, 'Admin2', 'admin surname', 'e10adc3949ba59abbe56e057f20f883e', 9920835460, 'abcd@gmail.com', '2021-04-14 09:38:08');

-- --------------------------------------------------------

--
-- Table structure for table `allotments`
--

CREATE TABLE `allotments` (
  `AllotmentID` bigint(20) NOT NULL,
  `FlatID` bigint(20) NOT NULL,
  `FlatNumber` varchar(20) NOT NULL,
  `BlockNumber` varchar(50) NOT NULL,
  `OwnerName` varchar(500) NOT NULL,
  `OwnerEmail` varchar(100) NOT NULL,
  `OwnerContactNumber` bigint(10) NOT NULL,
  `OwnerAlternateContactNumber` bigint(10) NOT NULL,
  `OwnerMemberCount` bigint(20) NOT NULL,
  `isRent` tinyint(1) NOT NULL,
  `RenteeName` varchar(500) DEFAULT NULL,
  `RenteeEmail` varchar(100) DEFAULT NULL,
  `RenteeContactNumber` bigint(10) DEFAULT NULL,
  `RenteeAlternateContactNumber` bigint(10) DEFAULT NULL,
  `RenteeMemberCount` bigint(20) DEFAULT NULL,
  `updated_by` varchar(50) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `allotments`
--

INSERT INTO `allotments` (`AllotmentID`, `FlatID`, `FlatNumber`, `BlockNumber`, `OwnerName`, `OwnerEmail`, `OwnerContactNumber`, `OwnerAlternateContactNumber`, `OwnerMemberCount`, `isRent`, `RenteeName`, `RenteeEmail`, `RenteeContactNumber`, `RenteeAlternateContactNumber`, `RenteeMemberCount`, `updated_by`, `updated_at`) VALUES
(1, 13, '401', 'A', 'blabla', 'purvi.h@somaiya.edu', 9029996335, 9029996338, 3, 1, '', 'abcd@gmail.com', 9029999633, 9029996444, 4, 'Admin1', '2021-04-14 13:06:50'),
(2, 2, '101', 'A', 'Purvi ', 'purvi.h@somaiya.edu', 9029996333, 9029996333, 3, 0, '', '', 0, 0, 0, 'Admin1', '2021-04-01 06:02:13'),
(12, 8, '204', 'A', 'sgfsdfg', 'purvi.h@somaiya.edu', 987654322, 987654321, 3, 0, '', '', 0, 0, 0, '', '2021-04-14 12:03:06'),
(13, 5, '201', 'A', 'acd', 'purvi.h@somaiya.edu', 9029996333, 9920835460, 3, 0, '', '', 0, 0, 0, '', '2021-04-14 12:33:32');

-- --------------------------------------------------------

--
-- Table structure for table `bills_paid`
--

CREATE TABLE `bills_paid` (
  `BillID` bigint(20) NOT NULL,
  `BillQueueID` bigint(20) NOT NULL,
  `FlatID` bigint(20) NOT NULL,
  `BillAmount` double NOT NULL,
  `Status` int(11) NOT NULL,
  `Receipt` blob NOT NULL,
  `ReceiptName` varchar(100) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bills_paid`
--

INSERT INTO `bills_paid` (`BillID`, `BillQueueID`, `FlatID`, `BillAmount`, `Status`, `Receipt`, `ReceiptName`, `updated_at`) VALUES
(13, 206, 13, 3450, 0, '', '', '2021-04-16 14:23:05'),
(14, 207, 2, 3575, 0, '', '', '2021-04-16 14:23:09'),
(15, 208, 8, 3450, 0, '', '', '2021-04-16 14:23:12'),
(16, 209, 5, 3450, 0, '', '', '2021-04-16 14:23:15');

-- --------------------------------------------------------

--
-- Table structure for table `bill_queue`
--

CREATE TABLE `bill_queue` (
  `bill_id` bigint(20) NOT NULL,
  `FlatID` bigint(20) NOT NULL,
  `to_email` varchar(100) NOT NULL,
  `bill_month` varchar(255) NOT NULL,
  `maintenance_charges` bigint(15) NOT NULL,
  `additional_charges` int(11) NOT NULL,
  `total_charges` int(11) NOT NULL,
  `bill_gen_date` date NOT NULL,
  `bill_due_date` date NOT NULL,
  `charges_after_due` bigint(15) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `filemime` varchar(255) NOT NULL,
  `data` blob NOT NULL,
  `is_sent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill_queue`
--

INSERT INTO `bill_queue` (`bill_id`, `FlatID`, `to_email`, `bill_month`, `maintenance_charges`, `additional_charges`, `total_charges`, `bill_gen_date`, `bill_due_date`, `charges_after_due`, `filename`, `filemime`, `data`, `is_sent`) VALUES
(206, 13, 'purvi.h@somaiya.edu', 'Mar 2021', 3250, 200, 3450, '2021-04-16', '2021-05-01', 4175, 'A-401-Mar 2021.pdf', 'application/pdf', 0x433a2f78616d70702f6874646f63732f736f63696574792d6d616e6167656d656e742d73797374656d2f42696c6c55706c6f6164732f412d3430312d4d617220323032312e706466, 1),
(207, 2, 'purvi.h@somaiya.edu', 'Mar 2021', 3375, 200, 3575, '2021-04-16', '2021-05-01', 4326, 'A-102-Mar 2021.pdf', 'application/pdf', 0x433a2f78616d70702f6874646f63732f736f63696574792d6d616e6167656d656e742d73797374656d2f42696c6c55706c6f6164732f412d3130322d4d617220323032312e706466, 1),
(208, 8, 'purvi.h@somaiya.edu', 'Mar 2021', 3250, 200, 3450, '2021-04-16', '2021-05-01', 4175, 'A-204-Mar 2021.pdf', 'application/pdf', 0x433a2f78616d70702f6874646f63732f736f63696574792d6d616e6167656d656e742d73797374656d2f42696c6c55706c6f6164732f412d3230342d4d617220323032312e706466, 1),
(209, 5, 'purvi.h@somaiya.edu', 'Mar 2021', 3250, 200, 3450, '2021-04-16', '2021-05-01', 4175, 'A-201-Mar 2021.pdf', 'application/pdf', 0x433a2f78616d70702f6874646f63732f736f63696574792d6d616e6167656d656e742d73797374656d2f42696c6c55706c6f6164732f412d3230312d4d617220323032312e706466, 1);

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `RequestID` bigint(20) NOT NULL,
  `ComplaintType` varchar(50) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `BlockNumber` varchar(10) NOT NULL,
  `FlatNumber` int(11) NOT NULL,
  `ContactNumber` bigint(10) NOT NULL,
  `RaisedDate` date NOT NULL,
  `AdminRemark` varchar(50) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `ResolvedDate` date NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`RequestID`, `ComplaintType`, `Description`, `BlockNumber`, `FlatNumber`, `ContactNumber`, `RaisedDate`, `AdminRemark`, `Status`, `ResolvedDate`, `updated_at`) VALUES
(12, '5', 'Security guard is not working correctly', 'A', 802, 9029996333, '2021-03-23', 'action has being taken', '2', '2021-04-16', '2021-04-16 14:52:02'),
(13, '11', 'This year, on republic day we should plan for an event which all can participate in.', 'A', 802, 9029996333, '2021-03-23', 'event has been planned', '2', '2021-04-16', '2021-04-16 14:50:40'),
(16, '2', 'Electric board has stopped working', 'A', 802, 9029996333, '2021-03-24', 'electrician sent', '2', '2021-04-16', '2021-04-16 14:52:58'),
(17, '13', 'Problem description', 'A', 802, 9029996333, '2021-04-06', 'Problem solved\r\n', '2', '2021-04-16', '2021-04-16 14:52:27');

-- --------------------------------------------------------

--
-- Table structure for table `complainttypes`
--

CREATE TABLE `complainttypes` (
  `complaint_id` int(11) NOT NULL,
  `complaint_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complainttypes`
--

INSERT INTO `complainttypes` (`complaint_id`, `complaint_type`) VALUES
(1, 'Carpenter'),
(2, 'Electrical'),
(3, 'Plumbing'),
(4, 'Common Area'),
(5, 'Security'),
(6, 'Lift'),
(7, 'Sports & Recreational'),
(8, 'Parking'),
(9, 'Fire'),
(10, 'Billing & Payment'),
(11, 'Events'),
(12, 'Landscaping'),
(13, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `flatarea`
--

CREATE TABLE `flatarea` (
  `FlatAreaID` bigint(20) NOT NULL,
  `BlockNumber` varchar(20) NOT NULL,
  `FlatSeries` bigint(20) NOT NULL,
  `FlatArea` bigint(20) NOT NULL,
  `FlatType` varchar(10) NOT NULL,
  `Ratepsq` double NOT NULL,
  `Updatedby` varchar(20) NOT NULL,
  `UpdatedAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flatarea`
--

INSERT INTO `flatarea` (`FlatAreaID`, `BlockNumber`, `FlatSeries`, `FlatArea`, `FlatType`, `Ratepsq`, `Updatedby`, `UpdatedAt`) VALUES
(1, 'A', 1, 650, '2BHK', 5, 'Admin1', '2021-04-14 10:09:51'),
(2, 'A', 2, 675, '2BHK', 5, 'Admin1', '2021-04-14 10:17:02'),
(3, 'A', 3, 625, '2BHK', 5, 'Admin1', '2021-04-14 10:17:02'),
(4, 'A', 4, 650, '2BHK', 5, 'Admin1', '2021-04-14 10:17:02'),
(5, 'B', 1, 450, '1BHK', 5, 'Admin1', '2021-04-14 10:17:02'),
(6, 'B', 2, 400, '1BHK', 5, 'Admin1', '2021-04-14 10:17:02'),
(7, 'B', 3, 500, '1BHK', 5, 'Admin1', '2021-04-14 10:17:02'),
(8, 'B', 4, 450, '1BHK', 5, 'Admin1', '2021-04-14 10:17:02'),
(9, 'C', 1, 900, '3BHK', 5, 'Admin1', '2021-04-14 10:17:02'),
(10, 'C', 2, 950, '3BHK', 5, 'Admin1', '2021-04-14 10:17:02'),
(11, 'C', 3, 950, '3BHK', 5, 'Admin1', '2021-04-14 10:17:02'),
(12, 'C', 4, 900, '3BHK', 5, 'Admin1', '2021-04-14 10:17:02'),
(130, 'D', 1, 700, '3BHK', 5, 'Admin1', '2021-04-14 11:42:38');

-- --------------------------------------------------------

--
-- Table structure for table `flats`
--

CREATE TABLE `flats` (
  `FlatID` bigint(20) NOT NULL,
  `FlatNumber` bigint(20) NOT NULL,
  `BlockNumber` varchar(20) NOT NULL,
  `Floor` bigint(20) NOT NULL,
  `FlatAreaID` bigint(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flats`
--

INSERT INTO `flats` (`FlatID`, `FlatNumber`, `BlockNumber`, `Floor`, `FlatAreaID`, `created_at`, `updated_at`) VALUES
(1, 101, 'A', 1, 1, '2021-04-14 10:26:57', '2021-04-14 10:24:53'),
(2, 102, 'A', 1, 2, '2021-04-14 10:26:57', '2021-04-14 10:24:53'),
(3, 103, 'A', 1, 3, '2021-04-14 10:26:57', '2021-04-14 10:24:53'),
(4, 104, 'A', 1, 4, '2021-04-14 10:26:57', '2021-04-14 10:24:53'),
(5, 201, 'A', 2, 1, '2021-04-14 10:26:57', '2021-04-14 10:24:53'),
(6, 202, 'A', 2, 2, '2021-04-14 10:26:57', '2021-04-14 10:24:53'),
(7, 203, 'A', 2, 3, '2021-04-14 10:26:57', '2021-04-14 10:24:53'),
(8, 204, 'A', 2, 4, '2021-04-14 10:26:57', '2021-04-14 10:24:53'),
(9, 301, 'A', 3, 1, '2021-04-14 10:26:57', '2021-04-14 10:24:53'),
(10, 302, 'A', 3, 2, '2021-04-14 10:26:57', '2021-04-14 10:24:53'),
(11, 303, 'A', 3, 3, '2021-04-14 10:26:57', '2021-04-14 10:24:53'),
(12, 304, 'A', 3, 4, '2021-04-14 10:26:57', '2021-04-14 10:24:53'),
(13, 401, 'A', 4, 1, '2021-04-14 10:26:57', '2021-04-14 10:24:53'),
(14, 402, 'A', 4, 2, '2021-04-14 10:26:57', '2021-04-14 10:24:53'),
(15, 403, 'A', 4, 3, '2021-04-14 10:26:57', '2021-04-14 10:24:53'),
(16, 404, 'A', 4, 4, '2021-04-14 10:26:57', '2021-04-14 10:24:53'),
(17, 501, 'A', 5, 1, '2021-04-14 10:26:57', '2021-04-14 10:24:53'),
(18, 502, 'A', 5, 2, '2021-04-14 10:26:57', '2021-04-14 10:24:53'),
(19, 503, 'A', 5, 3, '2021-04-14 10:26:57', '2021-04-14 10:24:53'),
(20, 504, 'A', 5, 4, '2021-04-14 10:26:57', '2021-04-14 10:24:53'),
(21, 601, 'A', 6, 1, '2021-04-14 10:26:57', '2021-04-14 10:24:53'),
(22, 602, 'A', 6, 2, '2021-04-14 10:26:57', '2021-04-14 10:24:53'),
(23, 603, 'A', 6, 3, '2021-04-14 10:26:57', '2021-04-14 10:24:53'),
(24, 604, 'A', 6, 4, '2021-04-14 10:26:57', '2021-04-14 10:24:53'),
(25, 101, 'B', 1, 5, '2021-04-14 10:34:14', '2021-04-14 10:31:07'),
(26, 102, 'B', 1, 6, '2021-04-14 10:34:17', '2021-04-14 10:31:07'),
(27, 103, 'B', 1, 7, '2021-04-14 10:34:20', '2021-04-14 10:31:07'),
(28, 104, 'B', 1, 8, '2021-04-14 10:34:22', '2021-04-14 10:31:07'),
(29, 201, 'B', 2, 5, '2021-04-14 10:34:25', '2021-04-14 10:31:07'),
(30, 202, 'B', 2, 6, '2021-04-14 10:34:28', '2021-04-14 10:31:07'),
(31, 203, 'B', 2, 7, '2021-04-14 10:34:30', '2021-04-14 10:31:07'),
(32, 204, 'B', 2, 8, '2021-04-14 10:34:34', '2021-04-14 10:31:07'),
(33, 301, 'B', 3, 5, '2021-04-14 10:34:36', '2021-04-14 10:31:07'),
(34, 302, 'B', 3, 6, '2021-04-14 10:34:38', '2021-04-14 10:31:07'),
(35, 303, 'B', 3, 7, '2021-04-14 10:34:41', '2021-04-14 10:31:07'),
(36, 304, 'B', 3, 8, '2021-04-14 10:34:44', '2021-04-14 10:31:07'),
(37, 401, 'B', 4, 5, '2021-04-14 10:34:47', '2021-04-14 10:31:07'),
(38, 402, 'B', 4, 6, '2021-04-14 10:34:50', '2021-04-14 10:31:07'),
(39, 403, 'B', 4, 7, '2021-04-14 10:34:53', '2021-04-14 10:31:07'),
(40, 404, 'B', 4, 8, '2021-04-14 10:34:56', '2021-04-14 10:31:07'),
(41, 501, 'B', 5, 5, '2021-04-14 10:34:59', '2021-04-14 10:31:07'),
(42, 502, 'B', 5, 6, '2021-04-14 10:35:02', '2021-04-14 10:31:07'),
(43, 503, 'B', 5, 7, '2021-04-14 10:35:04', '2021-04-14 10:31:07'),
(44, 504, 'B', 5, 8, '2021-04-14 10:35:07', '2021-04-14 10:31:07'),
(45, 601, 'B', 6, 5, '2021-04-14 10:35:10', '2021-04-14 10:31:07'),
(46, 602, 'B', 6, 6, '2021-04-14 10:35:12', '2021-04-14 10:31:07'),
(47, 603, 'B', 6, 7, '2021-04-14 10:35:15', '2021-04-14 10:31:07'),
(48, 604, 'B', 6, 8, '2021-04-14 10:35:18', '2021-04-14 10:31:07'),
(49, 101, 'C', 1, 9, '2021-04-14 10:35:34', '2021-04-14 10:33:47'),
(50, 102, 'C', 1, 10, '2021-04-14 10:35:37', '2021-04-14 10:33:47'),
(51, 103, 'C', 1, 11, '2021-04-14 10:35:39', '2021-04-14 10:33:47'),
(52, 104, 'C', 1, 12, '2021-04-14 10:35:44', '2021-04-14 10:33:47'),
(53, 201, 'C', 2, 9, '2021-04-14 11:14:30', '2021-04-14 10:33:47'),
(54, 202, 'C', 2, 10, '2021-04-14 11:14:32', '2021-04-14 10:33:47'),
(55, 203, 'C', 2, 11, '2021-04-14 11:14:35', '2021-04-14 10:33:47'),
(56, 204, 'C', 2, 12, '2021-04-14 11:14:38', '2021-04-14 10:33:47'),
(57, 301, 'C', 3, 9, '2021-04-14 11:14:41', '2021-04-14 10:33:47'),
(58, 302, 'C', 3, 10, '2021-04-14 11:14:43', '2021-04-14 10:33:47'),
(59, 303, 'C', 3, 11, '2021-04-14 11:14:46', '2021-04-14 10:33:47'),
(60, 304, 'C', 3, 12, '2021-04-14 11:14:49', '2021-04-14 10:33:47'),
(61, 401, 'C', 4, 9, '2021-04-14 11:14:52', '2021-04-14 10:33:47'),
(62, 402, 'C', 4, 10, '2021-04-14 11:14:55', '2021-04-14 10:33:47'),
(63, 403, 'C', 4, 11, '2021-04-14 11:16:09', '2021-04-14 10:33:47'),
(64, 404, 'C', 4, 12, '2021-04-14 11:16:13', '2021-04-14 10:33:47'),
(65, 501, 'C', 5, 9, '2021-04-14 11:16:19', '2021-04-14 10:33:47'),
(66, 502, 'C', 5, 10, '2021-04-14 11:16:22', '2021-04-14 10:33:47'),
(67, 503, 'C', 5, 11, '2021-04-14 11:16:25', '2021-04-14 10:33:47'),
(68, 504, 'C', 5, 12, '2021-04-14 11:16:28', '2021-04-14 10:33:47'),
(69, 601, 'C', 6, 9, '2021-04-14 11:16:32', '2021-04-14 10:33:47'),
(70, 602, 'C', 6, 10, '2021-04-14 11:16:36', '2021-04-14 10:33:47'),
(71, 603, 'C', 6, 11, '2021-04-14 11:16:39', '2021-04-14 10:33:47'),
(72, 604, 'C', 6, 12, '2021-04-14 11:16:41', '2021-04-14 10:33:47'),
(73, 101, 'D', 1, 130, '2021-04-14 11:43:55', '2021-04-14 11:43:55');

-- --------------------------------------------------------

--
-- Table structure for table `security`
--

CREATE TABLE `security` (
  `SecurityID` bigint(20) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `ContactNumber` bigint(10) NOT NULL,
  `Shift` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `security`
--

INSERT INTO `security` (`SecurityID`, `Name`, `ContactNumber`, `Shift`, `created_at`, `updated_at`) VALUES
(1, 'Ramesh K', 9920835460, 'Afternoon', '2021-04-14 12:13:40', '2021-04-14 12:50:58'),
(4, 'Rakesh Kumar', 9029996333, 'Morning', '2021-04-14 12:11:26', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `securitylogin`
--

CREATE TABLE `securitylogin` (
  `SecID` bigint(20) NOT NULL,
  `SecurityID` bigint(20) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `securitylogin`
--

INSERT INTO `securitylogin` (`SecID`, `SecurityID`, `Username`, `Password`, `updated_at`) VALUES
(1, 4, 'rk', '5f4dcc3b5aa765d61d8327deb882cf99', '2021-04-09 21:33:02');

-- --------------------------------------------------------

--
-- Table structure for table `shoutbox`
--

CREATE TABLE `shoutbox` (
  `ShoutBoxID` bigint(20) NOT NULL,
  `Admin` varchar(50) NOT NULL,
  `FlatID` varchar(20) NOT NULL,
  `Chat` varchar(10000) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shoutbox`
--

INSERT INTO `shoutbox` (`ShoutBoxID`, `Admin`, `FlatID`, `Chat`, `created_at`) VALUES
(15, 'Admin1', '', 'Hello everyone, welcome to the dashboard of our society! From today this shoutbox will be used to report any situations and alerts, so please keep checking it regularly!', '2021-03-27 07:17:24'),
(21, '', '3', 'good morning', '2021-03-30 22:47:30'),
(26, 'Admin2', '', 'Meeting at 7pm, Venue: Google meet, Link will be shared later', '2021-04-16 09:16:58');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `VisitorID` bigint(20) NOT NULL,
  `FlatID` bigint(20) NOT NULL,
  `VisitorName` varchar(100) NOT NULL,
  `VisitorContactNo` bigint(10) NOT NULL,
  `AlternateVisitorContactNo` bigint(20) NOT NULL,
  `BlockNumber` varchar(50) NOT NULL,
  `FlatNumber` bigint(20) NOT NULL,
  `NoOfPeople` int(11) NOT NULL,
  `WhomToMeet` varchar(100) NOT NULL,
  `ReasonToMeet` varchar(1000) NOT NULL,
  `OTP` bigint(20) NOT NULL,
  `StartDate` date NOT NULL,
  `Duration` bigint(20) NOT NULL,
  `updated_by` varchar(50) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`VisitorID`, `FlatID`, `VisitorName`, `VisitorContactNo`, `AlternateVisitorContactNo`, `BlockNumber`, `FlatNumber`, `NoOfPeople`, `WhomToMeet`, `ReasonToMeet`, `OTP`, `StartDate`, `Duration`, `updated_by`, `updated_at`) VALUES
(1, 1, 'Esha Gupta', 9967778160, 9967778160, 'A', 101, 7, 'Purvi Harniya', 'Birthday celebration', 987456, '2021-04-16', 1, 'Admin1', '2021-04-16 14:14:35'),
(2, 2, 'Jill Shah', 7303702757, 7303702757, 'A', 102, 1, 'Riya Joshi', 'Return a novel', 125463, '2021-04-08', 1, 'Admin1', '2021-04-16 14:16:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `additional_charges`
--
ALTER TABLE `additional_charges`
  ADD PRIMARY KEY (`ChargeID`),
  ADD UNIQUE KEY `Added_by` (`ChargeID`),
  ADD KEY `additional_charges_ibfk_1` (`FlatID`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminID`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `ContactNumber` (`ContactNumber`);

--
-- Indexes for table `allotments`
--
ALTER TABLE `allotments`
  ADD PRIMARY KEY (`AllotmentID`),
  ADD UNIQUE KEY `FlatNumber` (`FlatNumber`,`BlockNumber`,`isRent`),
  ADD KEY `FOREIGN` (`FlatID`);

--
-- Indexes for table `bills_paid`
--
ALTER TABLE `bills_paid`
  ADD PRIMARY KEY (`BillID`),
  ADD KEY `FOREIGN` (`FlatID`),
  ADD KEY `BillQueueID` (`BillQueueID`);

--
-- Indexes for table `bill_queue`
--
ALTER TABLE `bill_queue`
  ADD PRIMARY KEY (`bill_id`),
  ADD KEY `FlatID` (`FlatID`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`RequestID`);

--
-- Indexes for table `complainttypes`
--
ALTER TABLE `complainttypes`
  ADD PRIMARY KEY (`complaint_id`);

--
-- Indexes for table `flatarea`
--
ALTER TABLE `flatarea`
  ADD PRIMARY KEY (`FlatAreaID`),
  ADD UNIQUE KEY `BlockNumber` (`BlockNumber`,`FlatSeries`);

--
-- Indexes for table `flats`
--
ALTER TABLE `flats`
  ADD PRIMARY KEY (`FlatID`),
  ADD UNIQUE KEY `FlatNumber` (`FlatNumber`,`BlockNumber`),
  ADD KEY `FlatAreaID` (`FlatAreaID`);

--
-- Indexes for table `security`
--
ALTER TABLE `security`
  ADD PRIMARY KEY (`SecurityID`),
  ADD UNIQUE KEY `Name` (`Name`,`ContactNumber`);

--
-- Indexes for table `securitylogin`
--
ALTER TABLE `securitylogin`
  ADD PRIMARY KEY (`SecID`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `SecurityID` (`SecurityID`),
  ADD KEY `FOREIGN` (`SecurityID`);

--
-- Indexes for table `shoutbox`
--
ALTER TABLE `shoutbox`
  ADD PRIMARY KEY (`ShoutBoxID`),
  ADD KEY `FOREIGN` (`FlatID`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`VisitorID`),
  ADD KEY `FOREIGN` (`FlatID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `additional_charges`
--
ALTER TABLE `additional_charges`
  MODIFY `ChargeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `allotments`
--
ALTER TABLE `allotments`
  MODIFY `AllotmentID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `bills_paid`
--
ALTER TABLE `bills_paid`
  MODIFY `BillID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `bill_queue`
--
ALTER TABLE `bill_queue`
  MODIFY `bill_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=210;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `RequestID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `complainttypes`
--
ALTER TABLE `complainttypes`
  MODIFY `complaint_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `flatarea`
--
ALTER TABLE `flatarea`
  MODIFY `FlatAreaID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `flats`
--
ALTER TABLE `flats`
  MODIFY `FlatID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `security`
--
ALTER TABLE `security`
  MODIFY `SecurityID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123457;

--
-- AUTO_INCREMENT for table `securitylogin`
--
ALTER TABLE `securitylogin`
  MODIFY `SecID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shoutbox`
--
ALTER TABLE `shoutbox`
  MODIFY `ShoutBoxID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `VisitorID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `additional_charges`
--
ALTER TABLE `additional_charges`
  ADD CONSTRAINT `additional_charges_ibfk_1` FOREIGN KEY (`FlatID`) REFERENCES `flats` (`FlatID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bills_paid`
--
ALTER TABLE `bills_paid`
  ADD CONSTRAINT `bills_paid_ibfk_1` FOREIGN KEY (`BillQueueID`) REFERENCES `bill_queue` (`bill_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bills_paid_ibfk_2` FOREIGN KEY (`FlatID`) REFERENCES `bill_queue` (`FlatID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bill_queue`
--
ALTER TABLE `bill_queue`
  ADD CONSTRAINT `bill_queue_ibfk_1` FOREIGN KEY (`FlatID`) REFERENCES `flats` (`FlatID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
