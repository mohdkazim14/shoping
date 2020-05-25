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
-- Database: `kmail`
--

-- --------------------------------------------------------

--
-- Table structure for table `addtocart`
--

CREATE TABLE `addtocart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quntity` int(11) NOT NULL,
  `quntity1` int(11) NOT NULL,
  `created` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `bill_number` int(11) NOT NULL,
  `order_number` varchar(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `user_id`, `amount`, `bill_number`, `order_number`, `status`, `created`) VALUES
(1, 5, 812, 1588502640, '1588502640', 0, '12:44:00 pm 03/05/20'),
(2, 5, 70, 1588503429, '1588503429', 0, '12:57:09 pm 03/05/20'),
(3, 5, 70, 1588503465, '1588503465', 0, '12:57:45 pm 03/05/20'),
(4, 5, 35, 1588503924, '1588503924', 0, '01:05:24 pm 03/05/20'),
(5, 5, 48, 1588505088, '1588505088', 0, '01:24:48 pm 03/05/20'),
(6, 5, 48, 1588505104, '1588505104', 0, '01:25:04 pm 03/05/20'),
(7, 5, 48, 1588506611, '1588506611', 0, '01:50:11 pm 03/05/20'),
(8, 5, 48, 1588508559, '1588508559', 0, '02:22:39 pm 03/05/20'),
(9, 5, 0, 1588508750, '1588508750', 0, '02:25:50 pm 03/05/20'),
(10, 3, 193, 1588585209, '1588585209', 0, '11:40:09 am 04/05/20'),
(11, 3, 115, 1588586699, '1588586699', 0, '12:04:59 pm 04/05/20'),
(12, 3, 115, 1588586788, '1588586788', 0, '12:06:28 pm 04/05/20'),
(13, 3, 115, 1588586793, '1588586793', 0, '12:06:33 pm 04/05/20'),
(14, 3, 314, 1588587279, '1588587279', 0, '12:14:39 pm 04/05/20'),
(15, 3, 145, 1588587494, '1588587494', 0, '12:18:14 pm 04/05/20'),
(16, 3, 190, 1588588712, '1588588712', 0, '12:38:32 pm 04/05/20'),
(17, 3, 265, 1588589912, '1588589912', 0, '12:58:32 pm 04/05/20'),
(18, 2, 345, 1588626204, '1588626204', 0, '11:03:24 pm 04/05/20'),
(19, 2, 0, 1588626427, '1588626427', 0, '11:07:07 pm 04/05/20'),
(20, 2, 155, 1588679052, '1588679052', 0, '01:44:12 pm 05/05/20'),
(21, 2, 190, 1588679381, '1588679381', 0, '01:49:41 pm 05/05/20'),
(22, 2, 198, 1588679610, '1588679610', 0, '01:53:30 pm 05/05/20'),
(23, 2, 155, 1588680011, '1588680011', 0, '02:00:11 pm 05/05/20'),
(24, 2, 106, 1588698211, '1588698211', 0, '07:03:31 pm 05/05/20'),
(25, 2, 190, 1588764945, '1588764945', 0, '01:35:45 pm 06/05/20');

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `id` int(11) NOT NULL,
  `orderid` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mids` varchar(255) NOT NULL,
  `taxnid` varchar(255) NOT NULL,
  `taxamount` varchar(255) NOT NULL,
  `paymentmode` varchar(255) NOT NULL,
  `CURRENCY` varchar(5) NOT NULL,
  `txndate` varchar(30) NOT NULL,
  `STATUS` varchar(255) NOT NULL,
  `gatename` varchar(255) NOT NULL,
  `banktxnid` varchar(255) NOT NULL,
  `checksumhash` text NOT NULL,
  `bankname` varchar(255) NOT NULL,
  `notification` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_details`
--

INSERT INTO `payment_details` (`id`, `orderid`, `user_id`, `mids`, `taxnid`, `taxamount`, `paymentmode`, `CURRENCY`, `txndate`, `STATUS`, `gatename`, `banktxnid`, `checksumhash`, `bankname`, `notification`) VALUES
(7, '1588588712', 3, 'RJtzlO63042946153463', '20200504111212800110168298401513146', '190.00', 'NB', 'INR', '2020-05-04 16:09:39.0', 'TXN_SUCCESS', 'AXIS', '11266947743', 'b9DxV1bH32rOxw25JYp5/ylt8W8SEs5UCSNh9PbwqgC/YadjsJBhi1m2LYPhGVzjxdGW3fEwEpM2K8xEBkQrzyGVn3GGkZbFCZVBN5Dew1g=', 'AXIS', 1),
(8, '1588588712', 3, 'RJtzlO63042946153463', '20200504111212800110168298401513146', '190.00', 'NB', 'INR', '2020-05-04 16:09:39.0', 'TXN_SUCCESS', 'AXIS', '11266947743', 'ZCLM37VoiZO45OYXouRNCVShvr4bYv26keSn9YRPSZwXN9DVF1UHBH7Rw4UqmZ6Fzn5zBCsnY4k94bohieaVqK7+439P6ObadjB8PlUozdQ=', 'AXIS', 1),
(9, '1588589912', 3, 'RJtzlO63042946153463', '20200504111212800110168423001480655', '1.00', 'NB', 'INR', '2020-05-04 16:29:04.0', 'TXN_SUCCESS', 'AXIS', '12471776962', 'jEDEBMtBjzUjSSUdZU9YYxDtQxS33of0gzOVta2F2YR7sTL2W0awLkm9j9wo2EyPs9hexMo5PKdnwXrGtKxBzcxSTJArr18fXjnL4mQCLRw=', 'AXIS', 2),
(10, '1588626204', 2, 'RJtzlO63042946153463', '20200505111212800110168389801501085', '345.00', 'NB', 'INR', '2020-05-05 02:33:32.0', 'TXN_SUCCESS', 'AXIS', '10242430097', '/o4pQDYj7S/grbjb7vKGQpRE36siDJjJqRJAC2eALq60GvIipnX544cDX84lSDIV668AEiKBQ4ukfgl7PggsLF48s5TapfmcCRbznXl95FI=', 'AXIS', 1),
(11, '1588679052', 2, 'RJtzlO63042946153463', '20200505111212800110168478001501377', '155.00', 'NB', 'INR', '2020-05-05 17:14:23.0', 'TXN_SUCCESS', 'PNB', '17575216961', 'pMD01mF9Xt/p4Y5pPdzNopI6XIPBoWYucwZX7QTB1L2OxLQO06TPmfhRDm7ArWJSlPvUKuTUSrE8qiVvXymFERqG6Qc+RQz9MrEtPGPoqgQ=', 'PNB', 1),
(12, '1588679381', 2, 'RJtzlO63042946153463', '20200505111212800110168221201524207', '190.00', 'NB', 'INR', '2020-05-05 17:19:50.0', 'TXN_SUCCESS', 'JKB', '14329600431', 'IfYLy8hAnfhWCxrXqfPcghikIMn9t+loJCQEuiqzlPHfKWRSZ7i94fPGjZs+qz8hW+cuozyqI5/xcmewUVGimY4jAREItWQur4PNhKkfBoQ=', 'JKB', 2),
(13, '1588679381', 2, 'RJtzlO63042946153463', '20200505111212800110168221201524207', '190.00', 'NB', 'INR', '2020-05-05 17:19:50.0', 'TXN_SUCCESS', 'JKB', '14329600431', 'gHb2v6y9YqhgI7/ubTwEH4McJssXkhyPMy907VUBtz6f/1QdnJvmmIFicL5GBb3wj2TLxR3R9ffeLtDWrB3dp3W5JbwFkH4KU/rJ5qYRjsg=', 'JKB', 1),
(14, '1588679610', 2, 'RJtzlO63042946153463', '20200505111212800110168875201506174', '1225.00', 'NB', 'INR', '2020-05-05 17:23:47.0', 'TXN_FAILURE', 'ICICI', '13643501692', '5azGkKK57eWBZdGDbUx+7OPKmRcS+41DjqfokKX4UG5plmLb66vAeDXnISpj2V8ZxeibWRCEdPA25o386u9x953WlEF6iCDF5JmO8wp0E5g=', 'ICICI', 1),
(15, '1588698211', 2, 'RJtzlO63042946153463', '20200505111212800110168958501501706', '6200.00', 'NB', 'INR', '2020-05-05 22:33:44.0', 'TXN_SUCCESS', 'ICICI', '12008692312', '5MmU/j+hpb4EnNLJoZPLjB5MIFtBQV+5/U/8Btj6QIaPHUfN+GskSZXG+5j5co9GS4Wnn3l+uMv62KnOEprveW34Dc4m5Wbai3jQYPhe8GA=', 'ICICI', 1),
(16, '1588764945', 2, 'RJtzlO63042946153463', '20200506111212800110168439301507294', '6200.00', 'NB', 'INR', '2020-05-06 17:06:07.0', 'TXN_SUCCESS', 'LVB', '12351901141', '03wTBzqjHLKHXdmqgdC6Ekx7+7ThYe+pvzWYdptg0QOfKkO321O8PUku/vG1CTMTmQ5cVxHz/0ywuUEBcVgZ2YtvvWrI9eQSAOl9W6W3QU0=', 'LVB', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `category_id`, `quantity`, `status`) VALUES
(1, 'French Fries', 106, 1, '', 0),
(2, 'Chilli Cheese Toast ', 115, 1, '', 0),
(3, 'Chilli Cheese Gralic Toas', 115, 1, '', 0),
(4, 'Garlic Bread with Cheese', 98, 1, '', 0),
(5, 'Garlic Bread with Cheese', 119, 1, '', 0),
(6, 'Plain Sandwich', 175, 2, '', 0),
(7, 'Grilled Sandwich', 175, 2, '', 0),
(8, 'Club Sandwich', 175, 2, '', 0),
(9, 'Russian Salad / Maccroni', 119, 3, '', 0),
(10, 'Veg. Burger', 72, 4, '', 0),
(11, 'Maccroni Hotpot', 205, 5, '', 0),
(12, 'Veg. Augratin', 205, 5, '', 0),
(13, 'Pasta Spicy Tomato / Classical Cheese', 109, 6, '', 0),
(14, 'Pasta in Twin Sauce', 190, 6, '', 0),
(15, 'Plain Cheese Pizza', 190, 7, '', 0),
(16, 'Capsicum, Onion Pizza', 190, 7, '', 0),
(17, 'Tomato, Onion Pizza', 190, 7, '', 0),
(18, 'Capsicum, Onion, Mashroom', 250, 7, '', 0),
(19, 'Jain Spl. Pizza', 250, 7, '', 0),
(20, 'Tandoori Pizza', 250, 7, '', 0),
(21, 'Super Veggie Pizza(Double Cheese)', 265, 7, '', 0),
(22, 'Cheese', 55, 8, '', 0),
(23, 'Paneer Salsa Wrap', 198, 9, '', 0),
(24, 'Lebenense Fala Fel', 145, 9, '', 0),
(25, 'Lasanana Roll', 133, 9, '', 0),
(26, 'Hot & Sour', 190, 10, '', 0),
(27, 'Lemon & Coriander', 109, 10, '', 0),
(28, 'Veg. Noodle Soup', 109, 10, '', 0),
(29, 'Veg. Munchow', 190, 10, '', 0),
(30, 'Veg. Clear Soup', 189, 10, '', 0),
(31, 'Spring Roll', 145, 11, '', 0),
(32, 'Chilly Paneer Dry', 165, 11, '', 0),
(33, 'Veg. Manchurian Dry', 150, 11, '', 0),
(34, 'Potatoes in Honey & Chilly', 205, 11, '', 0),
(35, 'Fried Vegetables in Salt & Papper ', 190, 11, '', 0),
(36, 'Crispy Spinach & Baby - Corn', 198, 11, '', 0),
(37, 'Chilly Mushroom Dry', 198, 11, '', 0),
(38, 'Veg Chopsouey	', 189, 12, '', 0),
(39, 'Chilly Paneer Gravy', 205, 12, '', 0),
(40, 'Manchurian Gravy', 175, 12, '', 0),
(41, 'Sweet & Sour Veg.', 185, 12, '', 0),
(42, 'Mix. Veg. in Hot Garlic Sauce', 185, 12, '', 0),
(43, 'Shreded Potatoes in Hot Garlic Sauce', 153, 12, '', 0),
(44, 'Veg Hakka Noodles', 145, 13, '', 0),
(45, 'Chilli Garlic Noodles', 145, 13, '', 0),
(46, 'Pan Fried Noodles', 255, 13, '', 0),
(47, 'Gravy Noodles', 255, 13, '', 0),
(48, 'Veg. Fried Rice', 165, 14, '', 0),
(49, 'Chilly Garlic Rice', 165, 14, '', 0),
(50, 'Pav Bhaji', 140, 14, '', 0),
(51, 'Jain Pav Bhaji', 155, 14, '', 0),
(52, 'Bombay Vada Pav', 102, 14, '', 0),
(53, 'Extra Pav', 35, 14, '', 0),
(54, 'Dahi Bhalla / Dahi Papri', 190, 15, '', 0),
(55, 'Dahi Bhalla Papri', 60, 15, '', 0),
(56, 'Gol Gappa (6 pcs.)', 70, 15, '', 0),
(57, 'Gol Gappa Water Extra For Packing', 140, 15, '', 0);

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
  `created` varchar(25) NOT NULL,
  `lastlogin` varchar(25) NOT NULL,
  `otp` int(11) NOT NULL,
  `ip` varchar(201) NOT NULL,
  `status` int(11) NOT NULL,
  `online` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `number`, `password`, `created`, `lastlogin`, `otp`, `ip`, `status`, `online`) VALUES
(1, 'admin', 'smtpe498@gmail.com', '7845697415', '123', '12:07:28 pm 01/05/20', '', 0, '::1', 0, 0),
(2, 'Mohd kazim', 'mohdkazim14@gmail.com', '9874561230', '1414', '12:09:26 pm 01/05/20', '', 352601, '::1', 0, 1),
(3, 'Adptabiz ', 'kazim.adaptabiz@gmail.com', '7865498710', 'kazim', '12:10:37 pm 01/05/20', '', 96543, '::1', 2, 0),
(4, 'AAmir abbas', 'aamirabbas11mailhere.com', '9889215807', '123', '12:11:34 pm 01/05/20', '', 0, '::1', 0, 0),
(5, 'Waziha Ahsan', 'wazihaahsan14@gmail.com', '7864598721', '123', '12:12:10 pm 01/05/20', '', 0, '::1', 0, 0),
(6, 'sagar khan', 'sagarkhan199812@gmail.com', '7896549236', '123', '12:12:34 pm 01/05/20', '', 0, '::1', 0, 0),
(7, 'Office ', 'kazimoffice19@gmail.com', '7854698230', '123', '12:12:50 pm 01/05/20', '', 0, '::1', 0, 0),
(8, 'MKK', 'kazimkhan1kk@gmail.com', '9851236547', '123', '12:13:09 pm 01/05/20', '', 0, '::1', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addtocart`
--
ALTER TABLE `addtocart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
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
-- AUTO_INCREMENT for table `addtocart`
--
ALTER TABLE `addtocart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `payment_details`
--
ALTER TABLE `payment_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
