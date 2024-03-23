-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2024 at 04:27 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce_cms_tutorial`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_title` varchar(20) NOT NULL,
  `visible` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`, `visible`) VALUES
(4, 'Acer', 0),
(5, 'Asus', 0),
(6, 'Iphone', 0),
(7, 'Samsung', 0),
(8, 'Vivo', 0),
(9, 'Sony', 0),
(10, 'dell', 0),
(11, 'lenovo', 0),
(12, 'hp', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cat_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_title` varchar(20) NOT NULL,
  `ip_address` varchar(11) NOT NULL,
  `quality` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cat_id`, `product_id`, `product_title`, `ip_address`, `quality`) VALUES
(6, 2, 'Camera', '::1', 1),
(7, 3, 'Camera', '::1', 1),
(8, 4, 'Camera', '::1', 1),
(9, 5, 'Iphone', '::1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(20) NOT NULL,
  `visible` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `visible`) VALUES
(3, 'TV', 0),
(4, 'Computer', 0),
(5, 'Mobile', 0),
(6, 'Laptop', 0),
(7, 'Furniture', 0),
(8, 'Fashion', 0),
(9, 'Camera', 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_cat` int(11) NOT NULL,
  `product_brand` int(11) NOT NULL,
  `product_title` varchar(20) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `visible` int(1) NOT NULL DEFAULT 0,
  `views` int(11) NOT NULL,
  `product_keywords` varchar(30) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `visible`, `views`, `product_keywords`, `date`) VALUES
(2, 9, 9, 'Camera', 300, ' This is good product', 'digital_06.jpg', 0, 0, 'Camera', '2024-03-22'),
(3, 9, 9, 'Camera', 300, ' This is good product', 'digital_07.jpg', 0, 0, 'This is good product', '2024-03-22'),
(4, 9, 7, 'Camera', 299, ' This is good product', 'digital_17.jpg', 0, 0, 'Camera', '2024-03-22'),
(5, 5, 6, 'Iphone', 200, ' This is good product', 'digital_01.jpg', 0, 0, 'Iphone', '2024-03-22'),
(6, 9, 7, 'Camera', 100, ' this is a good product', 'camera_canon.png', 0, 0, 'Camera', '2024-03-22'),
(7, 6, 10, 'Laptop', 100, ' this is a good product', 'dell_laptop.png', 0, 0, 'dell', '2024-03-22'),
(8, 4, 11, 'Lenovo', 200, ' this is a good product', 'desktop_lenovo.png', 0, 0, 'Lenovo', '2024-03-22'),
(9, 4, 0, 'Dell', 200, ' this is good product', 'dell_desktop.png', 0, 0, 'dell', '2024-03-22'),
(10, 3, 7, 'TV', 200, ' This is a good product', 'digital_08.jpg', 0, 0, 'TV', '2024-03-22'),
(11, 5, 6, 'Ipad', 200, ' this is good product', 'digital_02.jpg', 0, 0, 'ipad', '2024-03-22'),
(12, 5, 6, 'Iphone', 200, ' this is a good product', 'digital_05.jpg', 0, 0, 'iphone', '2024-03-22'),
(14, 6, 5, 'Laptop', 200, ' this is a good product', 'digital_14.jpg', 0, 0, 'Asus', '2024-03-22'),
(15, 8, 9, 'Watch', 100, ' this is a good product', 'fashion_01.jpg', 0, 0, 'Watch', '2024-03-22'),
(16, 8, 7, 'Watch', 200, ' this is a good product', 'digital_11.jpg', 0, 0, 'Watch', '2024-03-22'),
(17, 7, 9, 'Lamp', 100, ' this is a good product', 'furniture_07.jpg', 0, 0, 'Lamp', '2024-03-22'),
(18, 7, 9, 'Lamp', 100, ' this is a good product', 'furniture_02.jpg', 0, 0, 'Lamp', '2024-03-22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `visible` int(1) NOT NULL DEFAULT 0,
  `ip_address` int(1) NOT NULL,
  `country` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `user_address` varchar(20) NOT NULL,
  `role` varchar(3) NOT NULL DEFAULT 'USR'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `image`, `name`, `email`, `password`, `visible`, `ip_address`, `country`, `city`, `contact`, `user_address`, `role`) VALUES
(1, '', 'Admin', 'kangserpobtsuasvaaj@gmail.com', '25f9e794323b453885f5181f1b624d0b', 0, 0, '', '', '', '', 'ADM'),
(2, 'pv.png.jpg', 'THE ENGLISH ACADEMIA', 'english.academia30@gmail.com', '6a204bd89f3c8348afd5c77c717a097a', 0, 0, 'LA', 'Dongdok', '02076589225', 'Vientiane', 'USR');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
