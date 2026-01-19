-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2026 at 10:50 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `utkalika`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `pro_name` varchar(50) DEFAULT NULL,
  `product_short_nm` longtext DEFAULT NULL,
  `rating` varchar(10) DEFAULT NULL,
  `review` varchar(10) DEFAULT NULL,
  `category_id` int(10) DEFAULT NULL,
  `sub_category_id` int(10) DEFAULT NULL,
  `sub_subcategory_id` int(10) DEFAULT NULL,
  `product_code` varchar(10) DEFAULT NULL,
  `product_price` varchar(10) DEFAULT NULL,
  `pro_discount` int(10) DEFAULT NULL,
  `product_discount_price` int(10) DEFAULT NULL,
  `pro_details` longtext DEFAULT NULL,
  `product_image1` varchar(70) DEFAULT NULL,
  `product_image2` varchar(70) DEFAULT NULL,
  `product_image3` varchar(70) DEFAULT NULL,
  `product_image4` varchar(70) DEFAULT NULL,
  `product_vdo` varchar(70) DEFAULT NULL,
  `neww` int(4) DEFAULT NULL,
  `premiumm` int(4) DEFAULT NULL,
  `hott` int(4) DEFAULT NULL,
  `fabric` varchar(50) DEFAULT NULL,
  `blousee` varchar(40) DEFAULT NULL,
  `caree` varchar(50) DEFAULT NULL,
  `dimenn` varchar(50) DEFAULT NULL,
  `ave_offer` longtext DEFAULT NULL,
  `about_item` longtext DEFAULT NULL,
  `sizee` varchar(50) DEFAULT NULL,
  `pricee` int(11) DEFAULT NULL,
  `colorr` varchar(50) DEFAULT NULL,
  `stockk` int(4) DEFAULT NULL,
  `manuufacturee` varchar(70) DEFAULT NULL,
  `packer` varchar(50) DEFAULT NULL,
  `item_weight` varchar(30) DEFAULT NULL,
  `net_quentity` int(2) DEFAULT NULL,
  `generic_nm` varchar(20) DEFAULT NULL,
  `keywordss` varchar(70) DEFAULT NULL,
  `meta_desc` longtext DEFAULT NULL,
  `status` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `pro_name`, `product_short_nm`, `rating`, `review`, `category_id`, `sub_category_id`, `sub_subcategory_id`, `product_code`, `product_price`, `pro_discount`, `product_discount_price`, `pro_details`, `product_image1`, `product_image2`, `product_image3`, `product_image4`, `product_vdo`, `neww`, `premiumm`, `hott`, `fabric`, `blousee`, `caree`, `dimenn`, `ave_offer`, `about_item`, `sizee`, `pricee`, `colorr`, `stockk`, `manuufacturee`, `packer`, `item_weight`, `net_quentity`, `generic_nm`, `keywordss`, `meta_desc`, `status`) VALUES
(1, '  New Green Jacket', 'saree', '2', '11', 4, 2, 2, '1', '100', 10, 90, 'ewfdwdqw', '696df68930b1c.jpg', '696df689311ba.jpg', '696df689315e6.jpg', '696df68931a2a.jpg', '', 1, 1, 1, 'qwe', 'ewrwe', 'erwe', 'ewrwe', 'qqq', 'ere', 'ewr', 0, 'fesf', 1, 'dads', 'sadas', 'sdsd', 21, 'fgd', 'dvsdg,ghjfgk', 'dggfsd', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
