-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2020 at 04:02 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid`
--

-- --------------------------------------------------------

--
-- Table structure for table `active`
--

CREATE TABLE `active` (
  `id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `allinone`
--

CREATE TABLE `allinone` (
  `id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `death` int(11) NOT NULL,
  `cases` int(11) NOT NULL,
  `recover` int(11) NOT NULL,
  `date` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `allinone`
--

INSERT INTO `allinone` (`id`, `state_id`, `death`, `cases`, `recover`, `date`) VALUES
(0, 5, 1, 15, 12, '');

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE `cases` (
  `id` int(250) NOT NULL,
  `state` varchar(250) NOT NULL,
  `date` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`id`, `state`, `date`) VALUES
(1, 'Andhra Pradesh', ''),
(2, 'Arunachal Pradesh', ''),
(3, 'Assam ', ''),
(4, 'Bihar', ''),
(5, 'Chhattisgarh', ''),
(6, 'Goa', ''),
(7, 'Gujarat', ''),
(8, 'Haryana ', ''),
(9, 'Himachal Pradesh ', ''),
(10, 'Jharkhand', ''),
(11, 'Karnataka', ''),
(12, 'Kerala ', ''),
(13, 'Madhya Pradesh', ''),
(14, 'Maharashtra', ''),
(15, 'Manipur', ''),
(16, 'Meghalaya', ''),
(17, 'Mizoram', ''),
(18, 'Nagaland', ''),
(19, 'Odisha', ''),
(20, 'Punjab', ''),
(21, 'Rajasthan', ''),
(22, 'Sikkim ', ''),
(23, 'Tamil Nadu', ''),
(24, 'Telangana', ''),
(25, 'Tripura ', ''),
(26, 'Uttar Pradesh', ''),
(27, 'Uttarakhand', ''),
(28, 'West Bengal', '');

-- --------------------------------------------------------

--
-- Table structure for table `death`
--

CREATE TABLE `death` (
  `id` int(11) NOT NULL,
  `death` int(11) NOT NULL,
  `total_death` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `india_details`
--

CREATE TABLE `india_details` (
  `id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `cases` int(11) NOT NULL,
  `recover` int(11) NOT NULL,
  `death` int(11) NOT NULL,
  `dates` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `india_details`
--

INSERT INTO `india_details` (`id`, `state_id`, `cases`, `recover`, `death`, `dates`) VALUES
(1, 1, 12, 1, 2, '17/04/20'),
(2, 2, 40, 21, 13, '27/04/20'),
(3, 3, 15, 1, 2, '17/04/20'),
(4, 4, 70, 12, 3, '17/04/20'),
(5, 5, 37, 5, 17, '17/04/20'),
(6, 6, 0, 0, 0, '17/04/20'),
(7, 7, 0, 0, 0, '17/04/20'),
(8, 8, 0, 0, 0, '17/04/20'),
(9, 9, 78, 12, 36, '17/04/20'),
(10, 10, 0, 0, 0, '17/04/20'),
(11, 12, 0, 0, 0, '17/04/20'),
(12, 11, 0, 0, 0, '17/04/20'),
(13, 13, 0, 0, 0, '17/04/20'),
(14, 14, 15, 10, 2, '17/04/20'),
(15, 15, 0, 0, 0, '17/04/20'),
(16, 16, 0, 0, 0, '17/04/20'),
(17, 17, 0, 0, 0, '17/04/20'),
(18, 18, 98, 15, 12, '17/04/20'),
(19, 19, 0, 0, 0, '17/04/20'),
(20, 20, 78, 6, 1, '17/04/20'),
(21, 21, 0, 0, 0, '17/04/20'),
(22, 22, 0, 0, 0, '17/04/20'),
(23, 23, 0, 0, 0, '17/04/20'),
(24, 24, 56, 12, 3, '18/04/20'),
(25, 25, 0, 0, 0, '17/04/20'),
(26, 26, 12, 1, 3, '17/04/20'),
(27, 27, 0, 0, 0, '17/04/20'),
(28, 28, 0, 0, 0, '17/04/20');

-- --------------------------------------------------------

--
-- Table structure for table `recover`
--

CREATE TABLE `recover` (
  `id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `recover` int(11) NOT NULL,
  `total_recover` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `tests` int(11) NOT NULL,
  `total_test` int(11) NOT NULL,
  `date` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `active`
--
ALTER TABLE `active`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cases`
--
ALTER TABLE `cases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `death`
--
ALTER TABLE `death`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `india_details`
--
ALTER TABLE `india_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `active`
--
ALTER TABLE `active`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cases`
--
ALTER TABLE `cases`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `death`
--
ALTER TABLE `death`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `india_details`
--
ALTER TABLE `india_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
