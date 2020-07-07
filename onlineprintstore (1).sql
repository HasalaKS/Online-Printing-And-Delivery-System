-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2018 at 07:33 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineprintstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Customer_ID` int(11) NOT NULL,
  `Fname` varchar(150) NOT NULL,
  `Lname` varchar(150) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Contact_no` varchar(10) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `City` varchar(100) NOT NULL,
  `User_name` varchar(50) NOT NULL,
  `Password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Customer_ID`, `Fname`, `Lname`, `Email`, `Contact_no`, `Address`, `City`, `User_name`, `Password`) VALUES
(1, 'Kasun', 'Madhuranga', 'akilamihiranga484@gmail.com', '0778990415', 'Kanampitiya Road', 'Galle', 'Kasun', '$2y$10$fJVNojypUAvGVZC1Kr9UJuxp6z4LbQjDxu0oD9tgnQHy/wQvUSrM6'),
(2, 'Akila', 'Mihiranga', 'akilamihiranga484@gmail.com', '0778990415', 'Kanampitiya Road', 'Galle', 'Akila', '$2y$10$8x76naCR7NlsqNjVf50R8e2qAWF7M7.IGspM2bpv78BTeI52JhX8C'),
(3, 'darvin', 'shane', 'darvin@gmail.com', '0711234567', 'sss/45', 'mmm', 'darvins', '$2y$10$6Iiic1LqIkgS/rnsPPJeOuXNGyoH4lC8Npi5iKKW1M4j7A3x6VCp.'),
(4, 'lakshan', 'wijewardana', 'shan@gmail.com', '0770711234', 'no 15 , gemunupura rd,', 'malabe', 'shan', '$2y$10$s9KId7ixRPysXNU/k9d7feOSXIiUn1etSfsqRueJ4rwF/WzXvvHwG');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `Message_no` int(11) NOT NULL,
  `Fname` varchar(100) NOT NULL,
  `Lname` varchar(100) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Subject` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`Message_no`, `Fname`, `Lname`, `Email`, `Subject`) VALUES
(1, 'Akila', 'Mihiranga', 'akilamihiranga484@gmail.com', 'Hi'),
(2, 'Akila', 'Mihi', 'akila@gmail.com', 'hello'),
(3, 'Akila', 'Mihi', 'akila@gmail.com', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `Customer_ID` int(11) NOT NULL,
  `customer_name` varchar(256) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `customer_email` varchar(256) NOT NULL,
  `order_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `Customer_ID`, `customer_name`, `product_id`, `quantity`, `customer_email`, `order_date`) VALUES
(1, 1, 'Kasun', 42, 20, 'akilamihiranga484@gmail.com', '2018-10-02 10:50:05'),
(2, 2, 'Akila', 35, 10, 'akilamihiranga484@gmail.com', '2018-10-02 10:51:05'),
(3, 2, 'Akila', 2, 50, 'akilamihiranga484@gmail.com', '2018-10-02 10:55:51');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category` varchar(256) NOT NULL,
  `p_name` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category`, `p_name`, `image`, `price`) VALUES
(1, 'Banners', 'Banner Design 1', 'img/banner1.jpg', 10),
(2, 'Banners', 'Banner Design 2', 'img/banner2.jpg', 10),
(3, 'Banners', 'Banner Design 3', 'img/banner3.jpg', 15),
(4, 'Banners', 'Banner Design 4', 'img/banner4.jpg', 25),
(5, 'Banners', 'Banner Design 5', 'img/banner5.jpg', 20),
(6, 'Banners', 'Banner Design 6', 'img/banner6.jpg', 20),
(7, 'Banners', 'Banner Design 7', 'img/banner7.jpg', 20),
(8, 'Banners', 'Banner Design 8', 'img/banner8.jpg', 25),
(9, 'Booklets', 'Booklets Design 1', 'img/book1.jpg', 5),
(10, 'Booklets', 'Booklets Design 2', 'img/book2.jpg', 5),
(11, 'Booklets', 'Booklets Design 3', 'img/book3.jpg', 8),
(12, 'Booklets', 'Booklets Design 4', 'img/book4.jpg', 7),
(13, 'Booklets', 'Booklets Design 5', 'img/book5.jpg', 5),
(14, 'Booklets', 'Booklets Design 6', 'img/book6.jpg', 5),
(15, 'Booklets', 'Booklets Design 7', 'img/book7.jpg', 5),
(16, 'Booklets', 'Booklets Design 8', 'img/book8.jpg', 7),
(17, 'Envelopes', 'Envelopes Design 1', 'img/envi1.jpg', 5),
(18, 'Envelopes', 'Envelopes Design 2', 'img/envi2.jpg', 5),
(19, 'Envelopes', 'Envelopes Design 3', 'img/envi3.jpg', 6),
(20, 'Envelopes', 'Envelopes Design 4', 'img/envi4.jpg', 5),
(21, 'Envelopes', 'Envelopes Design 5', 'img/envi5.jpg', 6),
(22, 'Envelopes', 'Envelopes Design 6', 'img/envi6.jpg', 7),
(23, 'Envelopes', 'Envelopes Design 7', 'img/envi7.jpg', 6),
(24, 'Envelopes', 'Envelopes Design 8', 'img/envi8.jpg', 5),
(25, 'Invitation', 'Invitation Design 1', 'img/invi1.jpg', 5),
(26, 'Invitation', 'Invitation Design 2', 'img/invi2.jpg', 7),
(27, 'Invitation', 'Invitation Design 3', 'img/invi3.jpg', 6),
(28, 'Invitation', 'Invitation Design 4', 'img/invi4.jpg', 7),
(29, 'Invitation', 'Invitation Design 5', 'img/invi5.jpg', 5),
(30, 'Invitation', 'Invitation Design 6', 'img/invi6.jpg', 5),
(31, 'Invitation', 'Invitation Design 7', 'img/invi7.jpg', 7),
(32, 'Invitation', 'Invitation Design 8', 'img/invi8.jpg', 5),
(33, 'Labels', 'Labels Design 1', 'img/label1.jpg', 6),
(34, 'Labels', 'Labels Design 2', 'img/label2.jpg', 5),
(35, 'Labels', 'Labels Design 3', 'img/label3.jpg', 5),
(36, 'Labels', 'Labels Design 4', 'img/label4.jpg', 6),
(37, 'Labels', 'Labels Design 5', 'img/label5.jpg', 5),
(38, 'Labels', 'Labels Design 6', 'img/label6.jpg', 7),
(39, 'Labels', 'Labels Design 7', 'img/label7.png', 4),
(40, 'Labels', 'Labels Design 8', 'img/label8.jpg', 7),
(41, 'Post_Card', 'Post Card Design 1', 'img/post1.jpg', 5),
(42, 'Post_Card', 'Post Card Design 2', 'img/post2.jpg', 5),
(43, 'Post_Card', 'Post Card Design 3', 'img/post3.jpg', 4),
(44, 'Post_Card', 'Post Card Design 4', 'img/post4.jpg', 5),
(45, 'Post_Card', 'Post Card Design 5', 'img/post5.jpg', 5),
(46, 'Post_Card', 'Post Card Design 6', 'img/post6.jpg', 4),
(47, 'Post_Card', 'Post Card Design 7', 'img/post7.jpg', 6),
(48, 'Post_Card', 'Post Card Design 8', 'img/post8.jpg', 5),
(49, 'Stickers', 'Stickers Design 1', 'img/sti1.jpg', 2),
(50, 'Stickers', 'Stickers Design 2', 'img/sti2.jpg', 1),
(51, 'Stickers', 'Stickers Design 3', 'img/sti3.jpg', 2),
(52, 'Stickers', 'Stickers Design 4', 'img/sti4.jpg', 2),
(53, 'Stickers', 'Stickers Design 5', 'img/sti5.jpg', 3),
(54, 'Stickers', 'Stickers Design 6', 'img/sti6.jpg', 1),
(55, 'Stickers', 'Stickers Design 7', 'img/sti7.jpg', 1),
(56, 'Stickers', 'Stickers Design 8', 'img/sti8.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `shipping_address`
--

CREATE TABLE `shipping_address` (
  `Shipping_ID` int(11) NOT NULL,
  `Name` varchar(256) NOT NULL,
  `Email` varchar(256) NOT NULL,
  `Address1` varchar(256) NOT NULL,
  `Address2` varchar(256) NOT NULL,
  `City` varchar(256) NOT NULL,
  `Zip_Code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipping_address`
--

INSERT INTO `shipping_address` (`Shipping_ID`, `Name`, `Email`, `Address1`, `Address2`, `City`, `Zip_Code`) VALUES
(1, 'Akila', 'akila@gmail.com', 'No.142/15E,', 'Kanampitiya Road', 'galle', '80000'),
(2, 'Akila', 'akila@gmail.com', 'No.142/15E,', 'Kanampitiya Road', 'galle', '80000'),
(3, 'Akila', 'akila@gmail.com', 'No.142/15E,', 'Kanampitiya Road', 'galle', '80000'),
(4, 'Akila', 'akila@gmail.com', 'No.142/15E,', 'Kanampitiya Road', 'galle', '80000'),
(5, 'Kasun', 'kasun@gmail.com', 'no1', 'karapitiya', 'Galle', '80000'),
(6, 'Kasun', 'kasun@gmail.com', 'no1', 'karapitiya', 'Galle', '80000'),
(7, 'Kasun', 'kasun@gmail.com', 'no1', 'karapitiya', 'Galle', '80000'),
(8, 'Kasun', 'kasun@gmail.com', 'no1', 'karapitiya', 'Galle', '80000'),
(9, 'Kasun', 'kasun@gmail.com', 'no1', 'karapitiya', 'Galle', '80000'),
(10, 'knk', 'akila@gmail.com', 'mn', 'mn', 'nn', '80000'),
(11, 'Akila', 'akila@gmail.com', 'No.142/15E,', 'karapitiya', 'Galle', '80000'),
(12, 'Akila', 'akila@gmail.com', 'No.142/15E,', 'karapitiya', 'Galle', '80000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Customer_ID`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`Message_no`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping_address`
--
ALTER TABLE `shipping_address`
  ADD PRIMARY KEY (`Shipping_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Customer_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `Message_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `shipping_address`
--
ALTER TABLE `shipping_address`
  MODIFY `Shipping_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
