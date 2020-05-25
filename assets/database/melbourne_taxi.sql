-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2020 at 04:03 AM
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
-- Database: `melbourne_taxi`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `pick_up_date` varchar(255) NOT NULL,
  `pick_up_time` varchar(255) NOT NULL,
  `no_of_passengers` varchar(255) NOT NULL,
  `pick_up_location` varchar(255) NOT NULL,
  `drop_off_location` varchar(255) NOT NULL,
  `type_of_cab` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `date_of_return` text NOT NULL,
  `retrun_flight_details` varchar(255) NOT NULL,
  `mode_of_payments` varchar(255) NOT NULL,
  `any_instruction` text NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `created` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `pick_up_date`, `pick_up_time`, `no_of_passengers`, `pick_up_location`, `drop_off_location`, `type_of_cab`, `phone`, `date_of_return`, `retrun_flight_details`, `mode_of_payments`, `any_instruction`, `ip_address`, `created`) VALUES
(1, 'dfvsh', '27/05/2020', '18:50', '2', 'KAZIM', 'asczds', 'Sedan (Luxury) 11$ Extra 4 Seater (Generaly For Corporate Bookings', 'cdsvfd', '18/05/2020', 'aiklcsnx', 'Debit card', 'kaim', '::1', ''),
(2, 'dfvsh', '27/05/2020', '18:50', '2', 'KAZIM', 'asczds', 'Sedan (Luxury) 11$ Extra 4 Seater (Generaly For Corporate Bookings', 'cdsvfd', '18/05/2020', 'aiklcsnx', 'Debit card', 'kaim', '::1', '');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `massage` text NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `created` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `website`, `massage`, `ip_address`, `created`) VALUES
(1, 'Test', 'Test@gmail.com', 'Test.com', 'Testing', '192.168.0.105', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
