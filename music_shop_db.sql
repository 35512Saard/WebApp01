-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2024 at 08:56 AM
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
-- Database: `music_shop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `like_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`like_id`, `user_id`, `products_id`) VALUES
(12, 8, 2),
(11, 8, 6);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `products_id` int(11) NOT NULL,
  `products_name` varchar(255) NOT NULL,
  `products_brand` varchar(255) NOT NULL,
  `products_model` varchar(255) DEFAULT NULL,
  `products_color` varchar(50) DEFAULT NULL,
  `products_num` int(11) DEFAULT NULL,
  `products_price` int(11) NOT NULL,
  `products_image` varchar(255) NOT NULL,
  `like_count` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`products_id`, `products_name`, `products_brand`, `products_model`, `products_color`, `products_num`, `products_price`, `products_image`, `like_count`) VALUES
(1, 'กีต้า', 'ยามาห้า', '125454', 'น้ำตาล', 20, 1200, 'uploads/Yamaha-F310-กีตาร์โปร่ง-music-arms.jpg', 0),
(2, 'product1', 'product1', 'product1', 'product1', 1, 2, 'uploads/Frist-กลองชุด-Gusta-First-BK.jpg', 1),
(6, 'product3', 'product3', 'product3', 'product3', 3, 333, 'uploads/1-92.jpg', 1),
(10, 'Electric guitar', 'product', 'product', 'black', 10, 1000, 'uploads/Yamaha-F310-กีตาร์โปร่ง-music-arms.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_fname` varchar(255) NOT NULL,
  `user_lname` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_phone` varchar(255) NOT NULL,
  `role` enum('admin','user') DEFAULT 'user',
  `user_email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_fname`, `user_lname`, `user_password`, `user_phone`, `role`, `user_email`) VALUES
(6, 'user2', 'user2', '$2y$10$fK.3V/p3yzj0KvdUb2opYe.YI6.yUXyx.gI/hUa2OYGVN.2/an.6W', '0123456789', 'user', 'user2@user2'),
(7, 'user3', 'user3', '$2y$10$svbpm3Yrms7nCTCKtsi8pej0echDyL4vTPlwS10VXHBk9vm1cpiEe', '0123456789', 'admin', 'user3@user3'),
(8, 'final', 'final', '$2y$10$6azAsBp2jSgufQa4k326K.fE/7QZAyOsLZbM/1t0WSz6W9y/67QkW', 'final', 'user', 'final@final');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`like_id`),
  ADD UNIQUE KEY `user_id` (`user_id`,`products_id`),
  ADD KEY `product_id` (`products_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`products_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `like_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `products_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`products_id`) REFERENCES `products` (`products_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
