-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2021 at 05:18 PM
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
(12, 1, '103', 'B', 'Theo J', 'theo@gmail.com', 9874563210, 9874563210, 2, 0, '-', '-', 0, 0, 0, 'Admin1', '2021-04-09 15:13:39');

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
(16, '2', 'Electric board has stopped working', 'A', 802, 9029996333, '2021-03-24', 'Electrician has completed the work', '2', '2021-03-24', '2021-03-24 08:06:20'),
(17, '6', 'not working', 'A', 802, 9029996333, '2021-03-31', 'No remark', '0', '0000-00-00', '2021-03-31 14:19:03');

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
(24, 'A', 4, 690, '2BHK', 30, 'Admin1', '2021-04-02 05:38:22'),
(49, 'E', 1, 650, '2BHK', 25, 'admin1', '2021-03-20 08:54:10'),
(50, 'E', 2, 650, '1BHK', 25, 'admin1', '2021-03-20 09:34:41'),
(63, 'F', 1, 2000, '1BHK', 20, 'admin1', '2021-03-23 16:39:09'),
(64, 'G', 2, 500, '1BHK', 50, 'admin1', '2021-03-24 06:44:21'),
(77, 'B', 1, 630, '2BHK', 25, 'Admin1', '2021-03-24 06:58:54'),
(78, 'B', 2, 640, '2BHK', 27, 'Admin1', '2021-03-24 06:58:54'),
(79, 'B', 3, 670, '1BHK', 28, 'Admin1', '2021-04-02 06:27:23'),
(80, 'B', 4, 680, '2BHK', 30, 'Admin1', '2021-03-24 06:58:54'),
(81, 'C', 1, 630, '1BHK', 25, 'Admin1', '2021-03-24 06:58:54'),
(82, 'C', 2, 640, '1BHK', 27, 'Admin1', '2021-03-24 06:58:54'),
(83, 'C', 3, 670, '1BHK', 28, 'Admin1', '2021-03-24 06:58:54'),
(84, 'C', 4, 680, '1BHK', 30, 'Admin1', '2021-03-24 06:58:54'),
(85, 'A', 1, 630, '1BHK', 30, 'Admin1', '2021-04-02 05:37:41'),
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
(2, 704, 'A', 7, 24, '2021-04-06 13:33:22', '2021-04-06 13:33:22'),
(3, 404, 'A', 4, 24, '2021-04-02 06:25:26', '2021-04-02 06:25:26'),
(6, 801, 'A', 8, 85, '2021-04-02 05:43:51', '2021-04-02 05:43:51'),
(10, 103, 'B', 1, 79, '2021-04-07 06:39:49', '2021-04-07 06:39:49'),
(11, 203, 'C', 2, 83, '2021-04-07 13:25:17', '2021-04-07 13:25:17');

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

--
-- Dumping data for table `security`
--

INSERT INTO `security` (`SecurityID`, `Name`, `ContactNumber`, `Shift`, `created_at`, `updated_at`) VALUES
(1, 'ABC', 9874563210, 'Morning', '2021-03-31 14:23:16', '2021-03-31 14:23:37');

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
(31, '', ' 6', 'Okay', '2021-04-02 00:13:31');

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
  `WhomToMeet` varchar(100) NOT NULL,
  `ReasonToMeet` varchar(1000) NOT NULL,
  `updated_by` varchar(50) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`VisitorID`, `FlatID`, `VisitorName`, `VisitorContactNo`, `AlternateVisitorContactNo`, `BlockNumber`, `FlatNumber`, `WhomToMeet`, `ReasonToMeet`, `updated_by`, `updated_at`) VALUES
(18, 1, 'Esha', 9988776655, 9988776655, 'A', 101, 'blah', 'i dont wanna say ;0', 'Admin1', '2021-03-31 14:41:21'),
(21, 1, 'jhnckjs', 9874563210, 9874563210, 'A', 405, 'me', 'no idea. suspense', 'admin1', '2021-03-31 14:44:50');

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
  ADD PRIMARY KEY (`AdminID`),
  ADD UNIQUE KEY `Username` (`Username`,`Password`);

--
-- Indexes for table `allotments`
--
ALTER TABLE `allotments`
  ADD PRIMARY KEY (`AllotmentID`),
  ADD UNIQUE KEY `FlatNumber` (`FlatNumber`,`BlockNumber`),
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
  ADD UNIQUE KEY `FlatNumber` (`FlatNumber`,`BlockNumber`),
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
  MODIFY `AllotmentID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `BillID` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `RequestID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
  MODIFY `FlatID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
  MODIFY `ShoutBoxID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `VisitorID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `visitor_flow`
--
ALTER TABLE `visitor_flow`
  MODIFY `VisitorFlowID` bigint(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
