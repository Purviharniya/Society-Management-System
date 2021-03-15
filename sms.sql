-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 15, 2021 at 11:15 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

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

-- --------------------------------------------------------

--
-- Table structure for table `allotments`
--

CREATE TABLE `allotments` (
  `AllotmentID` bigint(20) NOT NULL,
  `FlatID` bigint(20) NOT NULL,
  `Date` datetime NOT NULL,
  `Duration` varchar(50) NOT NULL,
  `UpdatedBy` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdatedAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `ContactNumber` bigint(10) NOT NULL,
  `RaisedDate` date NOT NULL,
  `AdminRemark` varchar(50) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `ResolvedDate` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(7, 'A', 7, 2000, '2BHK', 20, 'Admin1', '2021-03-14 06:04:39'),
(10, 'B', 2, 200, '1BHK', 10, 'admin1', '2021-03-14 06:28:00'),
(15, 'A', 1, 2000, '1BHK', 20, 'admin1', '2021-03-15 09:52:19');

-- --------------------------------------------------------

--
-- Table structure for table `flats`
--

CREATE TABLE `flats` (
  `FlatID` bigint(20) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `ContactNumber` bigint(10) NOT NULL,
  `FlatNumber` bigint(20) NOT NULL,
  `FlatType` varchar(50) NOT NULL,
  `Maintenance` double NOT NULL,
  `BlockNumber` bigint(20) NOT NULL,
  `EmergencyContactNumber` bigint(10) NOT NULL,
  `Floor` bigint(20) NOT NULL,
  `FlatAreaID` bigint(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `FlatID` bigint(20) NOT NULL,
  `Chat` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Indexes for table `flatarea`
--
ALTER TABLE `flatarea`
  ADD PRIMARY KEY (`FlatAreaID`);

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
  MODIFY `AdminID` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `allotments`
--
ALTER TABLE `allotments`
  MODIFY `AllotmentID` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `BillID` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `RequestID` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `flatarea`
--
ALTER TABLE `flatarea`
  MODIFY `FlatAreaID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `flats`
--
ALTER TABLE `flats`
  MODIFY `FlatID` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `meetings`
--
ALTER TABLE `meetings`
  MODIFY `MeetingID` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `security`
--
ALTER TABLE `security`
  MODIFY `SecurityID` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shoutbox`
--
ALTER TABLE `shoutbox`
  MODIFY `ShoutBoxID` bigint(20) NOT NULL AUTO_INCREMENT;

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
  
 ALTER TABLE `flats`
  DROP `Username`,
  DROP `Password`;
  
 ALTER TABLE `flats` CHANGE `BlockNumber` `BlockNumber` VARCHAR(20) NOT NULL;
  
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
