-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2020 at 04:01 AM
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
-- Database: `admission`
--

-- --------------------------------------------------------

--
-- Table structure for table `centers`
--

CREATE TABLE `centers` (
  `id` int(11) NOT NULL,
  `center` varchar(125) NOT NULL,
  `center_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `centers`
--

INSERT INTO `centers` (`id`, `center`, `center_address`) VALUES
(1, 'Noida', 'Plot S-1, off, Greater Noida Expressway, Sector 135, Noida, Uttar Pradesh 201301'),
(2, 'New Delhi', 'near Fortis Hospila  Metro piller- 501 Jamia Nagar, Okhla, New Delhi, Delhi 110025'),
(3, 'LuckNow', 'Lucknow University Main Building, University Rd, Babuganj, Hasanganj, Lucknow, Uttar Pradesh 226007'),
(4, 'Varansi', 'Z-151 Ajagara mahal near Panitara , Ajagara, Varanasi, Uttar Pradesh 221005'),
(5, 'Patna', 'Ashok Rajpath, near Patna College, Patna, Bihar 800005'),
(6, 'Gaziyabad', 'Plot No. 2, Yamuna Expy, Opposite, Buddha International Circuit, Sector 17A, Gaziyabad, Uttar Pradesh 203201'),
(7, 'Dhanbad', ''),
(8, 'Rachi', ''),
(9, 'Bhunesvar', ''),
(10, 'Mumbai(Bandra)', ''),
(11, 'Kanpur', ''),
(12, 'Jaunpur', 'plot no 210, near Jaunpur City Shahganj Road, Siddikpur, Uttar Pradesh 222003'),
(13, 'Sonipat', ''),
(14, 'Chandighad', ''),
(15, 'Chattisghad', '');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course`) VALUES
(1, 'B.Tech'),
(2, 'BCA'),
(3, 'M.Tech'),
(4, 'MCA'),
(5, 'BBA'),
(6, 'MBA'),
(7, 'B.com'),
(8, 'M.Com'),
(9, 'B.A'),
(10, 'M.A'),
(11, 'BSC'),
(12, 'MSC');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(125) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `course_id` int(11) NOT NULL,
  `examCenter_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `created` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `user_id`, `firstName`, `lastName`, `email`, `number`, `course_id`, `examCenter_id`, `subject_id`, `dob`, `gender`, `address`, `city`, `state`, `country`, `created`, `status`) VALUES
(2, 1, 'mohd  ', 'kazim', 'mohdkazim14@gmail.com', '9990704662', 3, 2, 0, '0000-00-00', 'Male', 'Seelampur nEw delhi', 'Seelampur', 'New Delhi', 'INDIA', '2019-04-20', 1),
(4, 2, 'waziha ', 'ahsan', 'wazih@gmail.com', '9898989898', 4, 2, 0, '2020-12-09', 'Female', 'balwaghat', 'Jaunpu', 'UP', 'INDIA', '2019-04-20', 0),
(5, 2, 'test', 'test 2', 'tset@gmail.com', '123456789', 5, 7, 0, '1996-03-09', 'Male', 't-29 test manzil testing gali near test market test villa test nagar 111553', 'test nagar', 'test pardesh', 'INDIA', '2020-04-20', 0),
(6, 3, 'test part 1', 'test 2', 'tset@gmail.com', '123456789', 2, 7, 0, '1996-03-15', 'Female', 't-29 test manzil testing gali near test market test villa test nagar 111553', 'test nagar', 'test pardesh', 'INDIA', '2020-04-20', 0);

-- --------------------------------------------------------

--
-- Table structure for table `formdata`
--

CREATE TABLE `formdata` (
  `id` int(11) NOT NULL,
  `details_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `formdata`
--

INSERT INTO `formdata` (`id`, `details_id`, `user_id`, `created`) VALUES
(1, 2, 2, '2020-04-22'),
(2, 2, 0, '2020-04-28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` date NOT NULL,
  `token` varchar(255) NOT NULL,
  `last_login` varchar(255) NOT NULL,
  `form` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `number`, `password`, `created`, `token`, `last_login`, `form`) VALUES
(1, 'admin', 'admin@gmail.com', '9990704662', 'admin123', '0000-00-00', '743a330f95736babac1f33bc67feb1bd', '08:11:22 - 28/04/20', 0),
(2, 'kazim', 'mohdkazim14@gmail.com', '9990704662', '123', '2019-04-20', '863408901eee0439ecc59a4757003140', '08:23:45 - 28/04/20', 0),
(3, 'test', 'test@gmail.com', '9990704623', '123', '2020-04-20', '82150566c27270ea4601b38c8e40242f', '10:48:45 - 21/04/20', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `centers`
--
ALTER TABLE `centers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formdata`
--
ALTER TABLE `formdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `centers`
--
ALTER TABLE `centers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `formdata`
--
ALTER TABLE `formdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
