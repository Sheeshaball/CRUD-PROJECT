-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2025 at 11:21 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leleidb`
--

-- --------------------------------------------------------

--
-- Table structure for table `hapagkainan`
--

CREATE TABLE `hapagkainan` (
  `SID` int(11) NOT NULL,
  `NAME` varchar(100) DEFAULT NULL,
  `AGE` int(11) DEFAULT NULL,
  `ADDRESS` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hapagkainan`
--

INSERT INTO `hapagkainan` (`SID`, `NAME`, `AGE`, `ADDRESS`) VALUES
(1, 'lei ', 12, 'pasacola');

-- --------------------------------------------------------

--
-- Table structure for table `new_hapagkainan`
--

CREATE TABLE `new_hapagkainan` (
  `SID` int(11) NOT NULL,
  `NAME` varchar(100) DEFAULT NULL,
  `AGE` int(11) DEFAULT NULL,
  `ADDRESS` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `new_hapagkainan`
--

INSERT INTO `new_hapagkainan` (`SID`, `NAME`, `AGE`, `ADDRESS`) VALUES
(1, 'John Doe', 25, '123 Main St'),
(2, 'Jane Smith', 30, '456 Elm St'),
(3, 'Alice Johnson A.', 21, '789 Oak blck 12'),
(4, 'lei ', 15, 'metro cubao');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hapagkainan`
--
ALTER TABLE `hapagkainan`
  ADD PRIMARY KEY (`SID`);

--
-- Indexes for table `new_hapagkainan`
--
ALTER TABLE `new_hapagkainan`
  ADD PRIMARY KEY (`SID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hapagkainan`
--
ALTER TABLE `hapagkainan`
  MODIFY `SID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `new_hapagkainan`
--
ALTER TABLE `new_hapagkainan`
  MODIFY `SID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
