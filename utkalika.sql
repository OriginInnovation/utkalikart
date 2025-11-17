-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2025 at 11:47 AM
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
-- Database: `utkalika`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `banner_image` varchar(50) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `banner_image`, `updated_at`) VALUES
(1, '68e8d17068f32.jpg', '2024-07-30 18:07:26'),
(2, '68e8cfa5a1c3f.png', '2024-06-06 10:04:19'),
(3, '68e8d15149a5e.png', '2024-06-22 01:09:59'),
(4, '68e8d15149a5e.png', '2025-11-04 09:54:26');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(50) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `status`, `updated_at`) VALUES
(1, 'MEN', 1, '2025-11-06 06:34:39'),
(2, 'WOMEN', 1, '2025-11-06 06:34:42'),
(3, 'KIDS', 1, '2025-11-06 06:34:44');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `middle_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `contact_email` varchar(50) DEFAULT NULL,
  `contact_wp_num` varchar(20) DEFAULT NULL,
  `contact_mobile_num` varchar(20) DEFAULT NULL,
  `contact_location` varchar(100) DEFAULT NULL,
  `contact_message` longtext NOT NULL,
  `date_of_contact` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

CREATE TABLE `coupon` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `code` varchar(20) DEFAULT NULL,
  `expiry` varchar(30) DEFAULT NULL,
  `details` longtext DEFAULT NULL,
  `status` int(4) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coupon`
--

INSERT INTO `coupon` (`id`, `name`, `code`, `expiry`, `details`, `status`, `updated_at`) VALUES
(2, 'hbmn', 'hgq', '2025-10-25', 'drtfyhuj', 1, '2025-10-31 08:27:40');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `enquiry_name` varchar(50) DEFAULT NULL,
  `enquiry_email` varchar(50) DEFAULT NULL,
  `enquiry_wp_num` varchar(20) DEFAULT NULL,
  `enquiry_mobile_num` varchar(20) DEFAULT NULL,
  `product_code` varchar(30) DEFAULT NULL,
  `service_name` varchar(20) NOT NULL,
  `enquiry_loc` varchar(100) DEFAULT NULL,
  `company_name` varchar(50) NOT NULL,
  `quantity` int(5) NOT NULL,
  `date_of_enquiry` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `enquiry_name`, `enquiry_email`, `enquiry_wp_num`, `enquiry_mobile_num`, `product_code`, `service_name`, `enquiry_loc`, `company_name`, `quantity`, `date_of_enquiry`) VALUES
(1, 'Monalisa  Das', 'monalisadas1964@gmail.com', '547547574575', '45448752487', '56566', '', 'Bhubaneswar', 'Techgeering', 0, '2024-07-31 11:05:41'),
(2, 'Monalisa  Das', 'monalisadas1964@gmail.com', '455555555', '54444444442', '65656', '', 'sdfgh', 'asdfghj', 0, '2024-07-31 11:07:53'),
(3, 'Monalisa  Das', 'monalisadas1964@gmail.com', '487574555', '5425452487', NULL, 'VENTE, LEASING', 'sadfgh', 'dfgh', 0, '2024-07-31 11:09:57'),
(4, 'Monalisa  Das', 'monalisadas1964@gmail.com', '8765746578965', '85284752478564', '65656', '', 'Bhubaneswar', 'dsfgh', 0, '2024-07-31 11:34:35'),
(5, 'Monalisa  Das', 'monalisadas1964@gmail.com', '52482842', '5472475475', '45435', '', 'asdfgh', 'sdfghj', 0, '2024-07-31 14:45:00');

-- --------------------------------------------------------

--
-- Table structure for table `folder`
--

CREATE TABLE `folder` (
  `id` int(11) NOT NULL,
  `folder_name` varchar(20) NOT NULL,
  `image` varchar(70) NOT NULL,
  `status` int(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `folder`
--

INSERT INTO `folder` (`id`, `folder_name`, `image`, `status`) VALUES
(19, 'INDUSUPPLY', '6687ce1aace19.jpg', 1),
(20, 'JCB', '6687ce2c51920.jpeg', 0),
(21, 'LIFTEK', '6687ce3ae3934.jpeg', 1),
(22, 'MAC3', '6687ce4f8c601.jpeg', 0),
(23, 'SESA SYSTEMS', '6687ce5eb0648.jpg', 0),
(24, 'SFE ELECTRIC', '6687ce6c1fc77.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `form_submissions_time_zone`
--

CREATE TABLE `form_submissions_time_zone` (
  `id` int(11) NOT NULL,
  `submission_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form_submissions_time_zone`
--

INSERT INTO `form_submissions_time_zone` (`id`, `submission_date`) VALUES
(1, '2024-07-17 08:16:35'),
(2, '2024-07-17 08:26:57');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` longtext NOT NULL,
  `phone` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `status` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `phone`, `email`, `image`, `status`) VALUES
(1, 'admin', '$2y$10$IO1J1Bd15kNmTUVLne3WruVxxy.mPUg1qIyjrTlyhIpQWt.8GkstK', '7894561231', 'demo@gmail.com', '668e849bb7477.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `metatag`
--

CREATE TABLE `metatag` (
  `id` int(11) NOT NULL,
  `description` longtext NOT NULL,
  `keywords` varchar(100) NOT NULL,
  `author` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `metatag`
--

INSERT INTO `metatag` (`id`, `description`, `keywords`, `author`) VALUES
(1, 'construction', 'fvfvf,fvfbfgb', 'sssss');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `email_id` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `occasion`
--

CREATE TABLE `occasion` (
  `id` int(11) NOT NULL,
  `image` varchar(70) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `status` int(4) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `occasion`
--

INSERT INTO `occasion` (`id`, `image`, `name`, `status`, `updated_at`) VALUES
(2, '6905c991208e0.jpg', 'ytred', 1, '2025-11-01 08:49:21'),
(3, '690c4ca9e4ee1.png', 'dsfsfs', 1, '2025-11-06 07:22:17'),
(4, '690c4cb1c0f53.png', 'fvfdv', 1, '2025-11-06 07:22:25'),
(5, '690c4cbc97c27.png', 'dfvdv', 1, '2025-11-06 07:22:36'),
(6, '690c4cc55d6c6.jpeg', 'yth', 1, '2025-11-06 07:22:45');

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE `offer` (
  `id` int(11) NOT NULL,
  `offer_nm` varchar(30) DEFAULT NULL,
  `offer_code` varchar(20) DEFAULT NULL,
  `discount` varchar(20) DEFAULT NULL,
  `status` int(4) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`id`, `offer_nm`, `offer_code`, `discount`, `status`, `updated_at`) VALUES
(2, 'fgdgfd', 'fdgdf333', '11', 1, '2025-10-31 09:35:57');

-- --------------------------------------------------------

--
-- Table structure for table `pdf`
--

CREATE TABLE `pdf` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `companyname` varchar(30) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `pdfid` int(11) NOT NULL,
  `inserted_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pdf`
--

INSERT INTO `pdf` (`id`, `name`, `email`, `phone`, `companyname`, `designation`, `country`, `pdfid`, `inserted_at`) VALUES
(1, 'Monalisa Das', 'monalisadas1964@gmail.com', '777777777777777', 'dfefvfe', 'manager', 'hjgfds', 8, '2024-07-30 16:05:49'),
(2, 'Monalisa Das', 'monalisadas1964@gmail.com', '777777777777777', 'dfefvfe', 'manager', 'hjghfdxc', 8, '2024-07-30 16:09:11'),
(3, 'Monalisa Das', 'dmonalisa949@gmail.com', '888888888888888', 'dfefvfe', 'manager', 'hjgfdc', 8, '2024-07-30 16:10:49'),
(4, 'Database Administrator', 'debu@gmail.com', '555555555555555', 'dfefvfe', 'manager', 'utdhfgd', 8, '2024-07-30 16:12:00'),
(5, 'Admin', 'amitranjansamantsinghar1999@gmail.com', '333333333333333', 'dfefvfe', 'manager', 'yjthgrfd', 8, '2024-07-30 16:13:10'),
(6, 'Roni', 'debu@gmail.com', '777777777777777', 'dfefvfe', 'manager', 'jhgfxc', 8, '2024-07-30 16:19:06'),
(7, 'Monalisa Das', 'monalisadas1964@gmail.com', '777777777777777', 'dfefvfe', 'manager', 'fgxgd', 8, '2024-07-30 17:37:56'),
(8, 'Monalisa Das', 'monalisadas1964@gmail.com', '777777777777777', 'dfefvfe', 'manager', 'hkjhgf', 8, '2024-07-30 17:39:04'),
(9, 'Dibyanshu Das', 'dmonalisa949@gmail.com', '999999999999999', 'dfefvfe', 'manager', 'thgd', 8, '2024-07-30 17:39:57'),
(10, 'Admin', 'monalisadas1964@gmail.com', '444444444444444', 'ghngng', 'manager', 'hyjthfgdv', 8, '2024-07-30 17:40:24'),
(11, 'Monalisa Das', 'monalisadas1964@gmail.com', '7777777777777', 'dfefvfe', 'manager', 'jkhjgfb', 8, '2024-07-30 17:43:16'),
(12, 'Monalisa Das', 'monalisadas1964@gmail.com', '4524286', 'zxcvbnj', 'cxfgvbhnjmk', 'szxdfcgvbhjnk', 8, '2024-07-31 06:42:50'),
(13, 'Monalisa Das', 'monalisadas1964@gmail.com', '452427452', 'sdfxgc', 'szdxfcgv', 'xcvgb', 8, '2024-07-31 06:43:29'),
(14, 'Monalisa Das', 'monalisadas1964@gmail.com', '52452745', 'sdfxcgh', 'sdzfxcg', 'asdfxcgvhj', 8, '2024-07-31 06:43:54'),
(15, 'Monalisa Das', 'monalisadas1964@gmail.com', '23563521', 'zcxgvb', 'dxfghn', 'szdxfgbhjnm', 8, '2024-07-31 06:44:19');

-- --------------------------------------------------------

--
-- Table structure for table `pdfupload`
--

CREATE TABLE `pdfupload` (
  `id` int(11) NOT NULL,
  `folder_id` int(11) NOT NULL,
  `pdf_name` longtext NOT NULL,
  `pdf_upload` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pdfupload`
--

INSERT INTO `pdfupload` (`id`, `folder_id`, `pdf_name`, `pdf_upload`, `status`) VALUES
(8, 19, 'InduSupply - OTMA Afrique de l_Ouest', '6687d3bf2be3e.pdf', 1),
(9, 21, 'Catalogue Consignation InduSupply avec Tarif en EUROS - 2023', '668a3062a35c2.pdf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `rating` varchar(10) DEFAULT NULL,
  `review` varchar(10) DEFAULT NULL,
  `product_short_nm` varchar(20) DEFAULT NULL,
  `skq_code` varchar(50) DEFAULT NULL,
  `occ_id` int(20) DEFAULT NULL,
  `discount_idd` int(20) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `sub_category_id` int(11) DEFAULT NULL,
  `sub_subcategory_id` int(11) NOT NULL DEFAULT 1,
  `product_code` varchar(20) DEFAULT NULL,
  `product_price` varchar(50) DEFAULT NULL,
  `product_discount_price` varchar(50) DEFAULT NULL,
  `product_description` longtext DEFAULT NULL,
  `product_image1` varchar(100) DEFAULT NULL,
  `product_image2` varchar(80) DEFAULT NULL,
  `product_image3` varchar(80) DEFAULT NULL,
  `product_image4` varchar(80) DEFAULT NULL,
  `product_image5` varchar(70) DEFAULT NULL,
  `featured_product` int(4) DEFAULT NULL,
  `top_sell` int(4) DEFAULT NULL,
  `popul_pro` int(4) DEFAULT NULL,
  `bestsellers` int(4) DEFAULT NULL,
  `stock` int(4) NOT NULL,
  `slug` longtext DEFAULT NULL,
  `keywords` longtext DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `status` int(3) NOT NULL DEFAULT 1,
  `extra_small` int(4) DEFAULT NULL,
  `small` int(4) DEFAULT NULL,
  `medium` int(4) DEFAULT NULL,
  `large` int(4) DEFAULT NULL,
  `extra_large` int(4) DEFAULT NULL,
  `extra_large_large` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `rating`, `review`, `product_short_nm`, `skq_code`, `occ_id`, `discount_idd`, `category_id`, `sub_category_id`, `sub_subcategory_id`, `product_code`, `product_price`, `product_discount_price`, `product_description`, `product_image1`, `product_image2`, `product_image3`, `product_image4`, `product_image5`, `featured_product`, `top_sell`, `popul_pro`, `bestsellers`, `stock`, `slug`, `keywords`, `meta_description`, `status`, `extra_small`, `small`, `medium`, `large`, `extra_large`, `extra_large_large`) VALUES
(1, 'fsfs', '1.2', '1233', 'sfsf', '12233', 4, 10, 2, 5, 3, '54545', '5000', '4500.00', '<p>dfdff</p>\r\n', '691587501f8a9.jpeg', '', '', '', '', 1, 1, 1, 1, 1, 'fsfs_13_11_2025', 'fdvd', 'ygjgy', 1, 0, 1, 0, 0, 0, 0),
(2, 'ghgh', '2.3', '5221', 'fgfg gbcgfbh', '5454', 5, 0, 3, 8, 0, '8946313', '', '2000', '<p>fdvfdv</p>\r\n', '6915879d6b9f8.png', '', '', '', '', 1, 1, 1, 1, 1, 'ghgh_13_11_2025', 'dfvf', 'hgnjgjn', 1, 1, 0, 0, 0, 0, 0),
(3, 'gtfgtf', '4.2', '21033', 'gfh', '858', 6, 20, 1, 1, 8, '42545', '4444', '3555.20', '<p>waresr</p>\r\n', '691587eedfe64.png', '', '', '', '', 1, 1, 1, 1, 1, 'gtfgtf_13_11_2025', 'yh', 'hj', 1, 0, 1, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `servicesp_name` varchar(50) NOT NULL,
  `image1` varchar(90) NOT NULL,
  `image2` varchar(70) NOT NULL,
  `image3` varchar(70) NOT NULL,
  `image4` varchar(70) NOT NULL,
  `services_heading` varchar(30) NOT NULL,
  `services_description` longtext NOT NULL,
  `services_details` longtext NOT NULL,
  `status` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `servicesp_name`, `image1`, `image2`, `image3`, `image4`, `services_heading`, `services_description`, `services_details`, `status`) VALUES
(1, 'vcfbcgbf', '668eb701214eb.jpg', '', '', '', 'gbgvb', 'gvnhgvnhgng', '<p>ghghngvnhgjn</p>\r\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(11) NOT NULL,
  `sub_category_name` varchar(50) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `sub_category_name`, `category_id`, `status`, `updated_at`) VALUES
(1, 'shirt', 1, 1, '2025-11-06 06:34:39'),
(2, 't-shirt', 1, 1, '2025-11-06 06:34:39'),
(3, 'tgfdgt', 1, 1, '2025-11-06 06:34:39'),
(4, 'hghv', 2, 1, '2025-11-06 06:34:42'),
(5, 'jik', 2, 1, '2025-11-06 06:34:42'),
(6, 'hujh', 2, 1, '2025-11-06 06:34:42'),
(7, 'fgbfhfg', 3, 1, '2025-11-06 06:34:44'),
(8, 'errfse', 3, 1, '2025-11-06 06:34:44'),
(9, 'klhujkh', 3, 1, '2025-11-06 06:34:44');

-- --------------------------------------------------------

--
-- Table structure for table `sub_subcategory`
--

CREATE TABLE `sub_subcategory` (
  `id` int(11) NOT NULL,
  `image` varchar(70) DEFAULT NULL,
  `sub_subcategoryname` varchar(70) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `status` int(4) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sub_subcategory`
--

INSERT INTO `sub_subcategory` (`id`, `image`, `sub_subcategoryname`, `sub_category_id`, `category_id`, `status`, `updated_at`) VALUES
(1, '690c41e9ec3d1.png', 'jdfhvsjdk', 1, 1, 1, '2025-11-06 06:36:25'),
(2, '690c41f6ea416.png', 'fdgvdv', 2, 1, 1, '2025-11-06 06:36:38'),
(3, '690c42028f961.png', 'frgfrg', 5, 2, 1, '2025-11-06 06:36:50'),
(4, '690c420d86a24.jpg', 'thgth', 4, 2, 1, '2025-11-06 06:37:01'),
(5, '690c421921c51.png', 'hnyhnj', 6, 2, 1, '2025-11-06 06:37:13'),
(6, '690c42255111a.png', 'yujyuj', 7, 3, 1, '2025-11-06 06:37:25'),
(7, '690c42372dd48.jpeg', 'yujyj', 9, 3, 1, '2025-11-06 06:37:43'),
(8, '690c44ed8da9d.png', 'fgvfgf', 1, 1, 1, '2025-11-06 06:49:17'),
(9, '690c44fc93831.png', 'rggr', 1, 1, 1, '2025-11-06 06:49:32'),
(10, '690c4509701cf.png', 'rdgd', 1, 1, 1, '2025-11-06 06:49:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `folder`
--
ALTER TABLE `folder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form_submissions_time_zone`
--
ALTER TABLE `form_submissions_time_zone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `metatag`
--
ALTER TABLE `metatag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `occasion`
--
ALTER TABLE `occasion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pdf`
--
ALTER TABLE `pdf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pdfupload`
--
ALTER TABLE `pdfupload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `sub_subcategory`
--
ALTER TABLE `sub_subcategory`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coupon`
--
ALTER TABLE `coupon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `folder`
--
ALTER TABLE `folder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `form_submissions_time_zone`
--
ALTER TABLE `form_submissions_time_zone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `metatag`
--
ALTER TABLE `metatag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `occasion`
--
ALTER TABLE `occasion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pdf`
--
ALTER TABLE `pdf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pdfupload`
--
ALTER TABLE `pdfupload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sub_subcategory`
--
ALTER TABLE `sub_subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
