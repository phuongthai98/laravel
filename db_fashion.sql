-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2020 at 06:25 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_fashion`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) NOT NULL,
  `full_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `full_name`, `email`, `password`, `avatar`) VALUES
(1, 'Nguyễn Phương Thái', 'admin@gmail.com', '$2y$10$v5CqlhevEElYGLNA0HChP.OyVzTc/4MAlpbv9KLkZ5LtjC.AkXTce\r\n', NULL),
(2, 'Nguyen Phuong Thai', 'phuongthai98@gmail.com', '$2y$10$EysUUoNL2z1/pRhVUgztwO4Ijrvu1rUN5uYlRPcyNvMxnrl4JwEIu', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `status` int(10) DEFAULT NULL,
  `type` int(10) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `status`, `type`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, '1581475152-1579447935-slider.jpg', '2020-02-12 02:39:12', '2020-02-12 02:39:12'),
(2, 1, NULL, '1581475180-1579447948-slider1.jpg', '2020-02-12 02:39:40', '2020-02-12 02:39:40'),
(3, 1, NULL, '1581475187-1579447957-slider2.jpg', '2020-02-12 02:39:47', '2020-02-12 02:39:47'),
(4, 1, NULL, '1581475194-1579448042-tt4.png', '2020-02-12 02:39:54', '2020-02-12 02:39:54');

-- --------------------------------------------------------

--
-- Table structure for table `catalogs`
--

CREATE TABLE `catalogs` (
  `id` bigint(20) NOT NULL,
  `catalog_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) DEFAULT 0,
  `parent` tinyint(4) DEFAULT 0,
  `group_menu1` tinyint(4) DEFAULT 0,
  `group_menu2` tinyint(4) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `catalogs`
--

INSERT INTO `catalogs` (`id`, `catalog_name`, `status`, `parent`, `group_menu1`, `group_menu2`, `created_at`, `updated_at`) VALUES
(1, 'Đồ nam', 1, 1, 0, 0, '2020-02-17 16:50:03', '2020-02-17 16:50:03'),
(2, 'Đồ nữ', 1, 1, 0, 0, '2020-02-17 16:50:03', '2020-02-17 16:50:03'),
(3, 'Bags', 1, 1, 0, NULL, '2020-03-02 16:27:20', '2020-03-02 16:27:20'),
(4, 'Clothing', 1, NULL, 1, 0, '2020-03-02 16:51:59', '2020-03-02 16:51:59'),
(5, 'Shoes', 1, NULL, 1, 0, '2020-03-02 16:52:14', '2020-03-02 16:52:14'),
(6, 'Bags', 1, NULL, 1, 0, '2020-03-02 16:53:03', '2020-03-02 16:53:03'),
(7, 'Headwear', 1, NULL, 1, 0, '2020-03-02 16:53:15', '2020-03-02 16:53:15'),
(8, 'Accessories', 1, NULL, 1, 0, '2020-03-02 16:53:28', '2020-03-02 16:53:28'),
(9, 'News Arrivals', 1, NULL, 1, 0, '2020-03-02 16:53:44', '2020-03-02 16:53:44');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` bigint(20) NOT NULL,
  `created_date` date DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `order_note` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `full_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_date`, `order_note`, `status`, `full_name`, `address`, `phone`) VALUES
(1, '2020-03-16 14:56:51', NULL, 0, 'Nguyen Phuong Thai', 'Ha Noi', 971874749),
(2, '2020-03-16 16:45:39', 'sadasd11111111111111111111111', 0, 'Nguyen Phuong Thai', 'Ha Noi', 971874749),
(3, '2020-03-16 16:46:00', 'sadasd11111111111111111111111', 0, 'Nguyen Phuong Thai', 'Ha Noi', 971874749),
(4, '2020-03-16 16:56:09', 'sadasd11111111111111111111111', 0, 'Nguyen Phuong Thai', 'Ha Noi', 971874749),
(5, '2020-03-16 17:00:18', 'sadasd11111111111111111111111', 0, 'Nguyen Phuong Thai', 'Ha Noi', 971874749),
(6, '2020-03-16 17:03:14', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 0, 'Nguyen Phuong Thai', 'Ha Noi', 971874749),
(7, '2020-03-16 17:04:33', NULL, 0, 'Nguyen Phuong Thai', 'Ha Noi', 971874749),
(8, '2020-03-16 17:08:18', 'sdsdff', 0, 'Nguyen Phuong Thai2', 'hn', 113);

-- --------------------------------------------------------

--
-- Table structure for table `orders_detail`
--

CREATE TABLE `orders_detail` (
  `id` bigint(20) NOT NULL,
  `orders_id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `price` float(10,3) NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) NOT NULL,
  `catalog_id` bigint(20) DEFAULT NULL,
  `product_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(15,4) NOT NULL,
  `sale_price` decimal(15,4) DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `catalog_id`, `product_name`, `price`, `sale_price`, `content`, `image`, `description`, `created_date`, `modified_date`) VALUES
(1, 1, 'abc', '77777.0000', NULL, 'aaaaaaaaaaaaaaa', '1581958282-1989746_L.jpg', 'k', '2020-02-17 16:51:22', '2020-02-17 16:51:22'),
(2, NULL, 'abc123', '77777.0000', '5555.0000', 'aaaaaaaaaaaaaaa', '1581958296-fetured.jpg', 'k', '2020-02-17 16:51:36', '2020-02-17 16:51:36'),
(3, 2, 'abc', '333.0000', NULL, 'aaaaaaaaaaaaaaa', '1581958309-fetured_2.jpg', 'asdsad', '2020-02-17 16:51:49', '2020-02-17 16:51:49'),
(4, 1, 'Đồng hồ nam', '77777.0000', NULL, 'Đồng hồ nam HOT', '1581958325-cat-6.jpg', 'asdsad', '2020-02-17 16:52:05', '2020-02-17 16:52:05'),
(5, 2, 'efdvbdfgerfds', '5555.0000', NULL, NULL, '1581958340-best_sale.jpg', 'sadsad', '2020-02-17 16:52:20', '2020-02-17 16:52:20'),
(6, 2, 'Đồng hồ nam111', '11133423.0000', NULL, 'Đừng mua !', '1581958371-fetured_3.jpg', 'asdsad', '2020-02-17 16:52:51', '2020-02-17 16:52:51'),
(7, 1, 'abc555555555', '5555.0000', NULL, 'dededede', '1581958393-fetured_1.jpg', 'sadsad', '2020-02-17 16:53:13', '2020-02-17 16:53:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `user_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `full_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `full_name`, `email`, `password`, `phone`, `image`, `address`, `created_at`, `updated_at`) VALUES
(2, 'phuongthai98', 'Nguyen Phuong Thai', 'phuongthai98@gmail.com', '$2y$10$S0b5ImJnc72BzeuNOT3iOuy8cDwV0b4oBrTsJC.CNRjOASdGahtyq', '0971874749', '1583503476-sadsad.jpg', 'Ha Noi', '2020-03-02 17:00:55', '2020-03-02 17:00:55'),
(3, 'phuongthai', 'Nguyen Phuong Thai', 'npthaii@gmail.com', '$2y$10$mJgS2xWs.90gqYgkJoSpVeLYBxb.VVK5vDa9WV4xTUvnnvG3IjCGa', '113', NULL, 'Ha Noi', '2020-03-02 17:45:53', '2020-03-02 17:45:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catalogs`
--
ALTER TABLE `catalogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_id` (`orders_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `catalog_id` (`catalog_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `catalogs`
--
ALTER TABLE `catalogs`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders_detail`
--
ALTER TABLE `orders_detail`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD CONSTRAINT `orders_detail_ibfk_1` FOREIGN KEY (`orders_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `orders_detail_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`catalog_id`) REFERENCES `catalogs` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
