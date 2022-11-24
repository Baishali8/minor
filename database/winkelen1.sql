-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2022 at 03:19 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `winkelen`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(10) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_img`) VALUES
(1, 'Books', '../images/category/books.jpg'),
(2, 'Fashion', '../images/category/fashion.webp'),
(3, 'Mobiles', '../images/category/mobiles.jpg'),
(4, 'Electronics', '../images/category/electronics.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(10) NOT NULL,
  `category_id` int(10) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` double(10,2) NOT NULL,
  `product_img` varchar(255) NOT NULL,
  `item_register` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `category_id`, `category_name`, `product_name`, `product_price`, `product_img`, `item_register`) VALUES
(1, 2, 'Fashion', 'Cartoon Astronaut T-Shirts', 1499.00, './images/index/f1.jpg', '2022-11-07 09:57:29'),
(2, 2, 'Fashion', 'Summer Special T-shirt', 1499.00, './images/index/f2.jpg', '2022-11-07 09:57:29'),
(3, 2, 'Fashion', 'Summer Collection T-shirt', 1499.00, './images/index/f3.jpg', '2022-11-07 09:57:29'),
(4, 2, 'Fashion', 'Summer Special White Shirt', 1499.00, './images/index/f4.jpg', '2022-11-07 09:57:29'),
(5, 2, 'Fashion', 'Blue Flower printed T-shirt', 1499.00, './images/index/f5.jpg', '2022-11-07 09:57:29'),
(6, 2, 'Fashion', 'Printed Carton Jackets', 1499.00, './images/index/f6.jpg', '2022-11-07 09:57:29'),
(7, 2, 'Fashion', 'Cartoon Astronuat Plazzo', 1499.00, './images/index/f7.jpg', '2022-11-07 09:57:29'),
(8, 2, 'Fashion', 'Summer Special Top Upperwear', 1499.00, './images/index/f8.jpg', '2022-11-07 09:57:29'),
(9, 2, 'Fashion', 'Blue Cartoon Astronaut Full Sleeve Shirt', 2499.00, './images/index/n1.jpg', '2022-11-07 11:06:39'),
(10, 2, 'Fashion', 'Checked Ash Color Shirt ', 2200.00, './images/index/n2.jpg', '2022-11-07 11:06:39'),
(11, 2, 'Fashion', 'Formal White Mens Shirt', 2000.00, './images/index/n3.jpg', '2022-11-07 11:06:39'),
(12, 2, 'Fashion', 'Off-White Half Sleeve Shirt', 2000.00, './images/index/n4.jpg', '2022-11-07 11:06:39'),
(13, 2, 'Fashion', 'Full Sleeve Blue Denim Shirt', 2499.00, './images/index/n5.jpg', '2022-11-07 11:06:39'),
(14, 2, 'Fashion', 'Cartoon Astronaut Pants', 2000.00, './images/index/n6.jpg', '2022-11-07 11:06:39'),
(15, 2, 'Fashion', 'Cartoon Astronaut Shirt', 2499.00, './images/index/n7.jpg', '2022-11-07 11:06:39'),
(16, 2, 'Fashion', 'Black Half Sleeve Shirt', 2000.00, './images/index/n8.jpg', '2022-11-07 11:06:39'),
(17, 1, 'Books', 'Think And Grow Rich', 254.00, './images/index/book1.png', '2022-11-09 16:02:10'),
(18, 1, 'Books', 'Harry Potter And The Chambers Of Secret', 500.00, './images/index/book2.jpeg', '2022-11-09 16:02:10'),
(19, 1, 'Books', 'Do Epic Shit', 350.00, './images/index/book3.jpg', '2022-11-09 16:02:10'),
(20, 1, 'Books', 'Ikigai', 299.00, './images/index/book4.jpg', '2022-11-09 16:02:10'),
(21, 1, 'Books', 'Power Of Your Subconscious Mind', 150.00, './images/index/book5.jpg', '2022-11-09 16:02:10'),
(22, 1, 'Books', 'The Alchemist', 200.00, './images/index/book6.jpg', '2022-11-09 16:02:10'),
(23, 1, 'Books', 'The Psychology Of Money', 199.00, './images/index/book7.jpg', '2022-11-09 16:02:10'),
(24, 1, 'Books', 'Rich Dad Poor Dad', 299.00, './images/index/book8.jpg', '2022-11-09 16:02:10'),
(25, 4, 'Electronics', 'HP 15s-Ryzen 3 5300U 8GB SDRAM/256GB SSD 15.6inch', 36500.00, './images/index/electronic1.jpg', '2022-11-09 16:11:39'),
(26, 4, 'Electronics', 'Apple Watch Series 7 (GPS + Cellular, 45mm)', 47900.00, './images/index/electronic2.jpg', '2022-11-09 16:11:39'),
(27, 4, 'Electronics', 'Zebronics ZEB-BT6590RUCF Wireless Bluetooth Multimedia Speaker with Supporting SD Card, USB, AUX, FM & Remote Control.', 3499.00, './images/index/electronic3.jpg', '2022-11-09 16:11:39'),
(28, 4, 'Electronics', 'Canon EOS 1500D 24.1 Digital SLR Camera (Black) with EF S18-55 is II Lens', 38599.00, './images/index/electronic4.jpg', '2022-11-09 16:11:39'),
(29, 4, 'Electronics', 'Philips Audio SPA4040B/94 5.1 Channel 45W Multimedia Speakers System with Bluetooth', 4999.00, './images/index/electronic5.jpg', '2022-11-09 16:11:39'),
(30, 4, 'Electronics', 'OnePlus 108 cm (43 inches) Y Series Full HD Smart Android LED TV 43 Y1S (Black)', 24999.00, './images/index/electronic6.jpg', '2022-11-09 16:11:39'),
(31, 4, 'Electronics', 'boAt Airdopes 141 True Wireless Earbuds with 42H Playtime', 1439.00, './images/index/electronic7.jpg', '2022-11-09 16:11:39'),
(32, 4, 'Electronics', 'Sansui 140cm (55 inches) 4K Ultra HD Certified Android LED TV', 31900.00, './images/index/electronic8.jpg', '2022-11-09 16:11:39'),
(33, 4, 'Electronics', 'boAt Rockerz 450 Bluetooth On Ear Headphones with Mic, Upto 15 Hours Playback, 40MM Drivers, Padded Ear Cushions, Integrated Controls and Dual Modes', 1299.00, './images/index/electronic9.jpg', '2022-11-09 16:11:39'),
(34, 3, 'Mobiles', 'vivo Y22', 16499.00, './images/index/mobile1.jpg', '2022-11-09 16:33:45'),
(35, 3, 'Mobiles', 'Apple iPhone 13 Pro (128GB)', 111900.00, './images/index/mobile2.jpg', '2022-11-09 16:33:45'),
(36, 3, 'Mobiles', 'Samsung Galaxy M32', 13499.00, './images/index/mobile3.jpg', '2022-11-09 16:33:45'),
(37, 3, 'Mobiles', 'Vivo Y75', 20990.00, './images/index/mobile4.jpg', '2022-11-09 16:33:45'),
(38, 3, 'Mobiles', 'Apple iPhone 13 Pro', 117900.00, './images/index/mobile5.jpg', '2022-11-09 16:33:45'),
(39, 3, 'Mobiles', 'Apple iPhone 13 Pro (1TB) ', 154900.00, './images/index/mobile6.jpg', '2022-11-09 16:33:45'),
(40, 3, 'Mobiles', 'OPPO A74 5G ', 14990.00, './images/index/mobile7.jpg', '2022-11-09 16:33:45'),
(41, 3, 'Mobiles', 'OPPO A77s ', 17999.00, './images/index/mobile8.jpg', '2022-11-09 16:33:45'),
(42, 3, 'Mobiles', 'Samsung Galaxy M13', 11999.00, './images/index/mobile9.jpg', '2022-11-09 16:33:45'),
(43, 3, 'Mobiles', 'realme narzo 50i', 6999.00, './images/index/mobile10.jpg', '2022-11-09 16:33:45');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `FullName` varchar(50) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Number` bigint(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(250) NOT NULL,
  `CPassword` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `FullName`, `UserName`, `Number`, `Email`, `Password`, `CPassword`) VALUES
(1, 'Kaustav Ghosh', 'kaustav123', 9876543210, 'test@gmail.com', '$2y$10$ROupyhz20XZ.zMkGIQmM1edrcF.1e/tTaYc0iAsXuMKYHtY/ovGYO', '$2y$10$dKU8eqCkEta960uD8rzWROwEOvFgc79D3h9N0HNpEKcckX.nQnHK.'),
(2, 'abc ', 'abc', 9876543210, 'abc@gmail.com', '$2y$10$NgU847FYxZKgj2XgJQkG9.pMajxwWZOzHakhnZpBzMlB2lVICMx1q', '$2y$10$rEZ.cvn48UGdZnypOyVNgu1CQ8iDgd4Y3L/a/wf3LW3TRfzQXlyhm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `cat_fk` (`category_id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `cat_fk` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
