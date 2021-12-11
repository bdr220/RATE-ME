-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2021 at 02:15 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rate_me`
--

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text NOT NULL,
  `datetime` int(11) NOT NULL,
  `user_id` int(15) NOT NULL,
  `store_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`, `user_id`, `store_id`) VALUES
(6, 'k3', 3, 'zsdfas', 1638751212, 0, 10),
(7, 'k5', 4, 'sFwef we f', 1638751351, 0, 10),
(8, 'sarah', 5, 'goo', 1638752171, 0, 11),
(9, 'garet', 2, 'box', 1638752225, 0, 11);

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `store_id` int(50) NOT NULL,
  `name_store` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` int(10) NOT NULL,
  `logo` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `store-rating` int(5) NOT NULL,
  `info` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`store_id`, `name_store`, `phone_number`, `logo`, `store-rating`, `info`) VALUES
(10, 'KFC', 1324, 'kfc.png', 0, 'KFC'),
(11, 'ALbeeK', 12121, 'alb.png', 0, 'البيك'),
(12, 'shawrma jaleelah', 2222, 'ii.jpg', 0, 'شاورما'),
(13, 'CAffe', 3333, 'starbucks.jpg', 0, 'cafe'),
(14, 'shawrma', 5555, 'Shawarmer.jpg', 0, 'shawrma'),
(15, 'hello', 2323, 'pizhut.jpg', 0, 'hi'),
(16, 'ok', 4444, 'hrv.jpg', 0, 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(15) NOT NULL,
  `uname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` int(10) NOT NULL,
  `Password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `creation-date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `uname`, `phone_number`, `Password`, `creation-date`) VALUES
(1, 'abdo', 111, '202cb962ac59075b964b07152d234b70', '0000-00-00'),
(2, 'khalid', 222, '202cb962ac59075b964b07152d234b70', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`store_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `store_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
