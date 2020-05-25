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
-- Database: `food_code`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `bill_number` int(11) NOT NULL,
  `order_number` int(11) NOT NULL,
  `created` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'All Time Favourite'),
(2, 'Sandvich'),
(3, 'Salads'),
(4, 'Burgers'),
(5, 'Bakes & Meals (Served with 3Pcs. of Garlic Bread)'),
(6, 'Choice of Pasta\'s\r\n(Served with 3Pcs. of Garlic Bread)'),
(7, 'Pizza\'s'),
(8, 'Extra Toppings'),
(9, 'Hearth Stone Special'),
(10, 'Soups'),
(11, 'Starters'),
(12, 'Main Course'),
(13, 'Noodles'),
(14, 'Rice'),
(15, 'Chats');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `coustomerName` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `quantityNo` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `coustomerName`, `phone`, `product`, `quantity`, `quantityNo`, `price`, `total`, `token`) VALUES
(1, '', '', '6', '4', '1', '175', '43.75', ''),
(2, 'cac', 'sacc', '1', '4', '1', 'undefined', 'NaN', ''),
(3, 'cac', 'sacc', '1', '4', '1', 'undefined', 'NaN', ''),
(4, 'cac', 'sacc', '4', '4', '1', 'undefined', 'NaN', '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product`, `price`, `category_id`) VALUES
(1, 'French Fries', '106', 1),
(2, 'Chilli Cheese Toast ', '115', 1),
(3, 'Chilli Cheese Gralic Toas', '115', 1),
(4, 'Garlic Bread with Cheese', '98', 1),
(5, 'Garlic Bread with Cheese', '119', 1),
(6, 'Plain Sandwich', '175', 2),
(7, 'Grilled Sandwich', '175', 2),
(8, 'Club Sandwich', '175', 2),
(9, 'Russian Salad / Maccroni', '119', 3),
(10, 'Veg. Burger', '72', 4),
(11, 'Maccroni Hotpot', '205', 5),
(12, 'Veg. Augratin', '205', 5),
(13, 'Pasta Spicy Tomato / Classical Cheese', '109', 6),
(14, 'Pasta in Twin Sauce', '190', 6),
(15, 'Plain Cheese Pizza', '190', 7),
(16, 'Capsicum, Onion Pizza', '190', 7),
(17, 'Tomato, Onion Pizza', '190', 7),
(18, 'Capsicum, Onion, Mashroom', '250', 7),
(19, 'Jain Spl. Pizza', '250', 7),
(20, 'Tandoori Pizza', '250', 7),
(21, 'Super Veggie Pizza(Double Cheese)', '265', 7),
(22, 'Cheese', '55', 8),
(23, 'Paneer Salsa Wrap', '198', 9),
(24, 'Lebenense Fala Fel', '145', 9),
(25, 'Lasanana Roll', '133', 9),
(26, 'Hot & Sour', '190', 10),
(27, 'Lemon & Coriander', '109', 10),
(28, 'Veg. Noodle Soup', '109', 10),
(29, 'Veg. Munchow', '190', 10),
(30, 'Veg. Clear Soup', '189', 10),
(31, 'Spring Roll', '145', 11),
(32, 'Chilly Paneer Dry', '165', 11),
(33, 'Veg. Manchurian Dry', '150', 11),
(34, 'Potatoes in Honey & Chilly', '205', 11),
(35, 'Fried Vegetables in Salt & Papper ', '190', 11),
(36, 'Crispy Spinach & Baby - Corn', '198', 11),
(37, 'Chilly Mushroom Dry', '198', 11),
(38, 'Veg Chopsouey	', '189', 12),
(39, 'Chilly Paneer Gravy', '205', 12),
(40, 'Manchurian Gravy', '175', 12),
(41, 'Sweet & Sour Veg.', '185', 12),
(42, 'Mix. Veg. in Hot Garlic Sauce', '185', 12),
(43, 'Shreded Potatoes in Hot Garlic Sauce', '153', 12),
(44, 'Veg Hakka Noodles', '145', 13),
(45, 'Chilli Garlic Noodles', '145', 13),
(46, 'Pan Fried Noodles', '255', 13),
(47, 'Gravy Noodles', '255', 13),
(48, 'Veg. Fried Rice', '165', 14),
(49, 'Chilly Garlic Rice', '165', 14),
(50, 'Pav Bhaji', '140', 14),
(51, 'Jain Pav Bhaji', '155', 14),
(52, 'Bombay Vada Pav', '102', 14),
(53, 'Extra Pav', '35', 14),
(54, 'Dahi Bhalla / Dahi Papri', '190', 15),
(55, 'Dahi Bhalla Papri', '60', 15),
(56, 'Gol Gappa (6 pcs.)', '70', 15),
(57, 'Gol Gappa Water Extra For Packing', '140', 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
