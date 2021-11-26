-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2021 at 11:49 AM
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
  `user-id` int(10) NOT NULL,
  `store-id` int(10) NOT NULL,
  `stars` int(1) NOT NULL,
  `text` varchar(100) NOT NULL,
  `creation-date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(14, 'shawrma', 5555, 'Shawarmer.jpg', 0, 'shawrma');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user-id` int(15) NOT NULL,
  `uname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` int(10) NOT NULL,
  `Password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `creation-date` date NOT NULL,
  `update-date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user-id`, `uname`, `phone_number`, `Password`, `creation-date`, `update-date`) VALUES
(1, 'abdo', 111, '202cb962ac59075b964b07152d234b70', '0000-00-00', '0000-00-00'),
(2, 'khalid', 222, '202cb962ac59075b964b07152d234b70', '0000-00-00', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`store_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user-id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `store_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user-id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
