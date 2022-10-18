-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2022 at 03:55 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_csc`
--

-- --------------------------------------------------------

--
-- Table structure for table `csc`
--

CREATE TABLE `csc` (
  `studentID` int(11) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `updated_by` varchar(100) NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `csc`
--

INSERT INTO `csc` (`studentID`, `fullName`, `created_at`, `updated_at`, `updated_by`, `active`) VALUES
(476846, 'Jayson Jones Booc', '2022-10-18', '2022-10-18', 'Jayson Jones', 1),
(476980, 'James Anthony Vecina', '2022-10-18', '2022-10-18', 'Jayson Jones', 1);

-- --------------------------------------------------------

--
-- Table structure for table `csc_attendance`
--

CREATE TABLE `csc_attendance` (
  `studentID` int(11) NOT NULL,
  `timeLogin` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `csc_attendance`
--

INSERT INTO `csc_attendance` (`studentID`, `timeLogin`) VALUES
(476846, '2022-10-18 13:52:14'),
(476846, '2022-10-18 13:55:01'),
(476846, '2022-10-18 13:55:07');

-- --------------------------------------------------------

--
-- Table structure for table `csg`
--

CREATE TABLE `csg` (
  `studentID` int(50) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `updated_by` varchar(100) NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `csg`
--

INSERT INTO `csg` (`studentID`, `fullName`, `position`, `created_at`, `updated_at`, `updated_by`, `active`) VALUES
(476846, 'Jayson Jones Booc', 'Committee', '2022-10-18', '2022-10-18', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `updated_by` varchar(100) NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `firstName`, `lastName`, `username`, `password`, `role`, `created_at`, `updated_at`, `updated_by`, `active`) VALUES
(1, 'Jayson Jones', 'Booc', 'soya', '6c14da109e294d1e8155be8aa4b1ce8e', 'ADMINISTRATOR', '2022-10-18', '2022-10-18', '0000-00-00', 1),
(3, 'Jame Anthony', 'Vecina', 'james', '6c14da109e294d1e8155be8aa4b1ce8e', 'MODERATOR', '2022-10-18', '2022-10-18', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `csc`
--
ALTER TABLE `csc`
  ADD UNIQUE KEY `studentID` (`studentID`);

--
-- Indexes for table `csg`
--
ALTER TABLE `csg`
  ADD UNIQUE KEY `studentID` (`studentID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
