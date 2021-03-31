-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2021 at 09:28 AM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminID` bigint(20) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `ContactNumber` bigint(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminID`, `Username`, `Password`, `ContactNumber`, `created_at`, `updated_at`) VALUES
(1, 'Admin1', 'e19d5cd5af0378da05f63f891c7467af', 9029996333, '2021-03-20 05:43:38', '2021-03-20 05:43:38');

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
(1, 2, '102', 'A', 'Jill Shah', 'jill25@somaiya.edu', 7303702757, 9320032757, 4, 0, NULL, NULL, NULL, NULL, NULL, 'admin1', '2021-03-22 18:59:30'),
(2, 1, '101', 'A', 'Jack Shah', 'jillshah255@gmail.com', 9320032757, 7303702757, 4, 1, 'Heena Shah', 'heenashah255@gmail.com', 7303702757, 9320032757, 4, 'admin1', '2021-03-22 19:01:42'),
(5, 4, '202', 'B', 'jillllllllllllll', 'j@gmail.com', 9874563210, 8303702759, 4, 0, NULL, NULL, NULL, NULL, NULL, '', '2021-03-28 10:32:36'),
(6, 2, '801', 'A', 'Purvi', 'purvi.h@somaiya.edu', 9029996333, 9920835460, 3, 0, 'NULL', 'NULL', 0, 0, 0, 'admin1', '2021-03-31 05:45:44'),
(8, 3, '401', 'A', 'asfheasrf', 'fsjlh@gmail.com', 9029996335, 9029996338, 3, 1, 'efdfrsg', 'dsfsr@gmail.com', 9029996330, 9029996337, 6, 'admin1', '2021-03-31 05:59:18');

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `BillID` bigint(20) NOT NULL,
  `FlatID` bigint(20) NOT NULL,
  `BillAmount` double NOT NULL,
  `DueDate` datetime NOT NULL,
  `Status` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(12, '5', 'Security uncle is sleeping while duty', 'A', 802, 9029996333, '2021-03-23', 'Action is being taken', '1', '2021-03-24', '2021-03-24 13:45:36'),
(13, '11', 'This year, on republic day we should plan for an event which all can participate in.', 'A', 802, 9029996333, '2021-03-23', 'The committee is planning something new', '2', '2021-03-24', '2021-03-24 05:59:13'),
(16, '2', 'Electric board has stopped working', 'A', 802, 9029996333, '2021-03-24', 'Electrician has completed the work', '2', '2021-03-24', '2021-03-24 08:06:20');

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
(7, 'H', 7, 2000, '2BHK', 50, 'Admin1', '2021-03-18 14:18:44'),
(10, 'S', 2, 200, '1BHK', 10, 'Admin1', '2021-03-18 13:01:53'),
(15, 'H', 1, 2000, '1BHK', 20, 'Admin1', '2021-03-18 14:21:44'),
(24, 'A', 4, 690, '2BHK', 25, 'Admin1', '2021-03-20 09:35:48'),
(49, 'E', 1, 650, '2BHK', 25, 'admin1', '2021-03-20 08:54:10'),
(50, 'E', 2, 650, '1BHK', 25, 'admin1', '2021-03-20 09:34:41'),
(63, 'F', 1, 2000, '1BHK', 20, 'admin1', '2021-03-23 16:39:09'),
(64, 'G', 2, 500, '1BHK', 50, 'admin1', '2021-03-24 06:44:21'),
(77, 'B', 1, 630, '2BHK', 25, 'Admin1', '2021-03-24 06:58:54'),
(78, 'B', 2, 640, '2BHK', 27, 'Admin1', '2021-03-24 06:58:54'),
(79, 'B', 3, 670, '2BHK', 28, 'Admin1', '2021-03-24 06:58:54'),
(80, 'B', 4, 680, '2BHK', 30, 'Admin1', '2021-03-24 06:58:54'),
(81, 'C', 1, 630, '1BHK', 25, 'Admin1', '2021-03-24 06:58:54'),
(82, 'C', 2, 640, '1BHK', 27, 'Admin1', '2021-03-24 06:58:54'),
(83, 'C', 3, 670, '1BHK', 28, 'Admin1', '2021-03-24 06:58:54'),
(84, 'C', 4, 680, '1BHK', 30, 'Admin1', '2021-03-24 06:58:54'),
(85, 'D', 1, 630, '2BHK', 25, 'Admin1', '2021-03-24 06:58:54'),
(86, 'D', 2, 640, '2BHK', 27, 'Admin1', '2021-03-24 06:58:54'),
(87, 'D', 3, 670, '2BHK', 28, 'Admin1', '2021-03-24 06:58:54'),
(88, 'D', 4, 680, '2BHK', 30, 'Admin1', '2021-03-24 06:58:54');

-- --------------------------------------------------------

--
-- Table structure for table `flats`
--

CREATE TABLE `flats` (
  `FlatID` bigint(20) NOT NULL,
  `FlatNumber` bigint(20) NOT NULL,
  `FlatType` varchar(50) NOT NULL,
  `Maintenance` double NOT NULL,
  `BlockNumber` varchar(20) NOT NULL,
  `Floor` bigint(20) NOT NULL,
  `FlatAreaID` bigint(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flats`
--

INSERT INTO `flats` (`FlatID`, `FlatNumber`, `FlatType`, `Maintenance`, `BlockNumber`, `Floor`, `FlatAreaID`, `created_at`, `updated_at`) VALUES
(2, 801, '1 BHK', 17280, 'A', 5, 22, '2021-03-28 14:14:41', '2021-03-28 14:14:41'),
(3, 401, '1 BHK', 0, 'A', 5, 0, '2021-03-28 14:14:31', '2021-03-28 14:14:31'),
(4, 302, '1 BHK', 0, 'F', 3, 0, '2021-03-24 06:45:48', '2021-03-24 06:45:48');

-- --------------------------------------------------------

--
-- Table structure for table `meetings`
--

CREATE TABLE `meetings` (
  `MeetingID` bigint(20) NOT NULL,
  `StartTime` time NOT NULL,
  `Duration` varchar(50) NOT NULL,
  `Purpose` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(22, '', '2 ', 'hey', '2021-03-30 23:15:05');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `VisitorID` bigint(20) NOT NULL,
  `FlatID` bigint(20) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `ContactNumber` bigint(10) NOT NULL,
  `BlockNumber` bigint(20) NOT NULL,
  `OtpDuration` varchar(5) NOT NULL,
  `WhomToMeet` varchar(100) NOT NULL,
  `ReasonToMeet` varchar(1000) NOT NULL,
  `OTP` bigint(6) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `visitor_flow`
--

CREATE TABLE `visitor_flow` (
  `VisitorFlowID` bigint(20) NOT NULL,
  `VisitorID` bigint(20) NOT NULL,
  `TimeIn` time NOT NULL,
  `TimeOut` time NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminID`);

--
-- Indexes for table `allotments`
--
ALTER TABLE `allotments`
  ADD PRIMARY KEY (`AllotmentID`),
  ADD KEY `FOREIGN` (`FlatID`);

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`BillID`),
  ADD KEY `FOREIGN` (`FlatID`);

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
  ADD KEY `FlatAreaID` (`FlatAreaID`),
  ADD KEY `FlatAreaID_2` (`FlatAreaID`);

--
-- Indexes for table `meetings`
--
ALTER TABLE `meetings`
  ADD PRIMARY KEY (`MeetingID`);

--
-- Indexes for table `security`
--
ALTER TABLE `security`
  ADD PRIMARY KEY (`SecurityID`);

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
-- Indexes for table `visitor_flow`
--
ALTER TABLE `visitor_flow`
  ADD PRIMARY KEY (`VisitorFlowID`),
  ADD KEY `FOREIGN` (`VisitorID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `allotments`
--
ALTER TABLE `allotments`
  MODIFY `AllotmentID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `BillID` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `RequestID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `complainttypes`
--
ALTER TABLE `complainttypes`
  MODIFY `complaint_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `flatarea`
--
ALTER TABLE `flatarea`
  MODIFY `FlatAreaID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `flats`
--
ALTER TABLE `flats`
  MODIFY `FlatID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `meetings`
--
ALTER TABLE `meetings`
  MODIFY `MeetingID` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `security`
--
ALTER TABLE `security`
  MODIFY `SecurityID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shoutbox`
--
ALTER TABLE `shoutbox`
  MODIFY `ShoutBoxID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `VisitorID` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `visitor_flow`
--
ALTER TABLE `visitor_flow`
  MODIFY `VisitorFlowID` bigint(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
