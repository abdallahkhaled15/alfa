-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2021 at 03:07 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `allpr`
--

-- --------------------------------------------------------

--
-- Table structure for table `allgategories`
--

CREATE TABLE `allgategories` (
  `id` int(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(250) NOT NULL,
  `dis` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `allgategories`
--

INSERT INTO `allgategories` (`id`, `name`, `price`, `image`, `dis`) VALUES
(1, 'alfa', 52, 'uploads/logo.jpg', 'art'),
(2, 'sls', 500, 'uploads/evengy.jpg', 'gifts');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `tlprice` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phonenumber` int(11) NOT NULL,
  `location` varchar(250) NOT NULL,
  `product_1_id` int(11) NOT NULL,
  `product_1_num` int(11) NOT NULL,
  `product_2_id` int(11) NOT NULL,
  `product_2_name` int(11) NOT NULL,
  `product_3_id` int(1) NOT NULL,
  `product_3_name` int(11) NOT NULL,
  `product_4_id` int(11) NOT NULL,
  `product_4_name` int(11) NOT NULL,
  `product_5_id` int(11) NOT NULL,
  `product_5_name` int(11) NOT NULL,
  `product_6_id` int(11) NOT NULL,
  `product_6_name` int(11) NOT NULL,
  `product_7_id` int(11) NOT NULL,
  `product_7_name` int(11) NOT NULL,
  `product_8_id` int(11) NOT NULL,
  `product_8_name` int(11) NOT NULL,
  `product_9_id` int(11) NOT NULL,
  `product_9_name` int(11) NOT NULL,
  `product_10_id` int(11) NOT NULL,
  `product_10_name` int(11) NOT NULL,
  `product_11_id` int(11) NOT NULL,
  `product_11_name` int(11) NOT NULL,
  `product_12_id` int(11) NOT NULL,
  `product_12_name` int(11) NOT NULL,
  `product_13_id` int(11) NOT NULL,
  `product_13_name` int(11) NOT NULL,
  `product_14_id` int(11) NOT NULL,
  `product_14_name` int(11) NOT NULL,
  `product_15_id` int(11) NOT NULL,
  `product_15_name` int(11) NOT NULL,
  `product_16_id` int(11) NOT NULL,
  `product_16_name` int(11) NOT NULL,
  `product_17_id` int(11) NOT NULL,
  `product_17_name` int(11) NOT NULL,
  `product_18_id` int(11) NOT NULL,
  `product_18_name` int(11) NOT NULL,
  `product_19_id` int(11) NOT NULL,
  `product_19_name` int(11) NOT NULL,
  `product_20_id` int(11) NOT NULL,
  `product_20_name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `name`, `tlprice`, `email`, `phonenumber`, `location`, `product_1_id`, `product_1_num`, `product_2_id`, `product_2_name`, `product_3_id`, `product_3_name`, `product_4_id`, `product_4_name`, `product_5_id`, `product_5_name`, `product_6_id`, `product_6_name`, `product_7_id`, `product_7_name`, `product_8_id`, `product_8_name`, `product_9_id`, `product_9_name`, `product_10_id`, `product_10_name`, `product_11_id`, `product_11_name`, `product_12_id`, `product_12_name`, `product_13_id`, `product_13_name`, `product_14_id`, `product_14_name`, `product_15_id`, `product_15_name`, `product_16_id`, `product_16_name`, `product_17_id`, `product_17_name`, `product_18_id`, `product_18_name`, `product_19_id`, `product_19_name`, `product_20_id`, `product_20_name`) VALUES
(9, ' ', 0, '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, ' ', 0, '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, ' ', 0, '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, ' ', 0, '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allgategories`
--
ALTER TABLE `allgategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allgategories`
--
ALTER TABLE `allgategories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
