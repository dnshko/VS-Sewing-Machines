-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2020 at 01:28 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_vs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `email`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'piyalibasu', 'ca34cb452c9c12090f552f15b70d7763'),
(3, 'anupam', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `catrgories`
--

CREATE TABLE `catrgories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catrgories`
--

INSERT INTO `catrgories` (`category_id`, `category_name`, `category_image`) VALUES
(1, 'PORTABLE EMBROIDERY MACHINE', '51aa63cbc2cd7002bac9a21bf1a139e4.jpg'),
(2, 'MULTI NEEDLE EMBROIDERY MACHINE ', '37802aa41539763c5f5994623c8700e8.jpg'),
(3, 'STRAIGHT STITCH MACHINE', 'bf4fd39252d17783fd69fcdcc5daad5c.jpg'),
(4, 'AUTOMATI ZIGZAG SEWING MACHINE', '35324720b261869c781c439f8b887edd.jpg'),
(5, 'INDUSTRIAL SEWING MACHINE', '2c0fad55b35730ed3b1ed13601fe2c75.jpg'),
(6, 'ACCESSORIES', 'c6bacf55e67c510fa1ab3d9ab09fbe0b.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cod_location`
--

CREATE TABLE `cod_location` (
  `location_id` int(11) NOT NULL,
  `pin` int(6) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cod_location`
--

INSERT INTO `cod_location` (`location_id`, `pin`, `location`) VALUES
(1, 626124, 'svakasi');

-- --------------------------------------------------------

--
-- Table structure for table `collection`
--

CREATE TABLE `collection` (
  `collection_id` int(11) NOT NULL,
  `collection_name` varchar(255) NOT NULL,
  `collection_banner` varchar(255) NOT NULL,
  `collection_thumble` varchar(255) NOT NULL,
  `collection_details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `front_banner`
--

CREATE TABLE `front_banner` (
  `banner_id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `front_banner`
--

INSERT INTO `front_banner` (`banner_id`, `url`, `image`) VALUES
(1, 'home', '');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `record_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`record_id`, `product_id`, `category_id`) VALUES
(296, 1, 1),
(297, 154, 2),
(298, 155, 5);

-- --------------------------------------------------------

--
-- Table structure for table `product_collection`
--

CREATE TABLE `product_collection` (
  `record_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `collection_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_review`
--

CREATE TABLE `product_review` (
  `review_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `review_by(email)` varchar(255) NOT NULL,
  `review_by(name)` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `rate` float NOT NULL,
  `publish` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_review`
--

INSERT INTO `product_review` (`review_id`, `product_id`, `review_by(email)`, `review_by(name)`, `title`, `details`, `rate`, `publish`) VALUES
(2, 14, 'prasun@php.net', 'Prasun Pal', 'Nice Product', 'This Product Is Very Good.', 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `vs_cart`
--

CREATE TABLE `vs_cart` (
  `Cart_ID` int(11) NOT NULL,
  `User_ID` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_price` float NOT NULL,
  `qty` int(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vs_cart`
--

INSERT INTO `vs_cart` (`Cart_ID`, `User_ID`, `product_id`, `product_price`, `qty`, `status`) VALUES
(36, '204938054158ad45c3910ec8.32052805', 79, 90, 1, 'pending'),
(37, '193140344058ad81eb859894.50517022', 46, 297, 1, 'pending'),
(39, '53290789058ae6d56cd8a35.64828575', 69, 135, 1, 'pending'),
(40, '135337775458ae81e4e00918.09952660', 67, 180, 1, 'pending'),
(41, '135337775458ae81e4e00918.09952660', 69, 135, 1, 'pending'),
(42, '135337775458ae81e4e00918.09952660', 79, 90, 1, 'pending'),
(43, '197428019358afc660162500.63588400', 55, 288, 1, 'pending'),
(44, '83309638658b2ce17800625.10837672', 73, 945, 1, 'pending'),
(45, '83309638658b2ce17800625.10837672', 49, 837, 1, 'pending'),
(46, '60137422758bba1dc714483.24604813', 40, 405, 1, 'pending'),
(47, '188813349658bda299564f75.58350315', 86, 900, 1, 'pending'),
(48, '211704851058bfb10d9c9f16.29818895', 31, 720, 1, 'pending'),
(51, '79072661858c3b14f131cc6.96643638', 97, 405, 1, 'pending'),
(52, '151780741158c3b42f33b753.45827657', 70, 495, 1, 'pending'),
(53, '109848163558c3cdb20d6e75.86769960', 98, 360, 1, 'pending'),
(54, '163503483958c3ea790be8d1.52708224', 100, 360, 1, 'pending'),
(55, '79072661858c3b14f131cc6.96643638', 113, 234, 1, 'pending'),
(56, '180667445458c3f015eb9c74.18760172', 120, 288, 1, 'pending'),
(57, '21974877658c525dd8f4981.64332291', 68, 162, 1, 'pending'),
(59, '122261251058c5482fcb4266.98144307', 120, 288, 1, 'pending'),
(60, '33688422858c64113ca7df1.30472915', 110, 180, 10, 'pending'),
(61, '5370773858c7992a3bd056.97110580', 78, 360, 10, 'pending'),
(62, '32158280158c8027bb12386.88446589', 114, 234, 1, 'pending'),
(63, '177111682658c8dc0b9351b0.26554186', 133, 1, 1, 'pending'),
(64, '201422345458caceac1285a6.19965266', 113, 234, 1, 'pending'),
(65, '146356642858d27d864b9929.96172252', 31, 720, 1, 'pending'),
(66, '176615743158d505c33f2d62.24797309', 34, 1440, 1, 'pending'),
(67, '47535316358d60e6a864b12.80778907', 77, 450, 1, 'pending'),
(68, '149588936658d8ce40c3d231.00818757', 41, 279, 1, 'pending'),
(69, '198082928458d8ea083997e4.29843817', 54, 315, 1, 'pending'),
(70, '153009363358d93b8e71b1a7.48951932', 79, 90, 1, 'pending'),
(71, '13226739058e1f7fa3cd0d7.01467857', 41, 279, 1, 'pending'),
(72, '197422002358ea0a9228e701.91166076', 55, 288, 1, 'pending'),
(73, '1080412114590df073a01114.81558661', 108, 315, 10, 'pending'),
(74, '925696934593263dc8f11b8.08014137', 151, 2160, 2, 'pending'),
(75, '2089831850595229345073c0.58675917', 115, 234, 1, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `vs_newsletter`
--

CREATE TABLE `vs_newsletter` (
  `request_id` int(11) NOT NULL,
  `request_by` varchar(255) NOT NULL,
  `datetime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vs_newsletter`
--

INSERT INTO `vs_newsletter` (`request_id`, `request_by`, `datetime`) VALUES
(1, 'buti_253', '22-02-2017 11:31'),
(2, 'sritamachatterjee145@gmail.com', '01-03-2017 16:18'),
(3, 'info2programmer@gmail.com', '03-04-2017 13:04'),
(4, 'info2programmer@gmail.com', '11-04-2017 15:47');

-- --------------------------------------------------------

--
-- Table structure for table `vs_order`
--

CREATE TABLE `vs_order` (
  `order_id` int(11) NOT NULL,
  `cart_id` varchar(255) NOT NULL,
  `order_by` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `landmark` varchar(255) DEFAULT NULL,
  `pin` varchar(6) NOT NULL,
  `state` varchar(255) NOT NULL,
  `totalamount` float NOT NULL,
  `deliverycharge` float NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` time NOT NULL,
  `mode` varchar(255) NOT NULL,
  `payment` tinyint(1) NOT NULL DEFAULT 0,
  `current_status` varchar(255) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vs_order`
--

INSERT INTO `vs_order` (`order_id`, `cart_id`, `order_by`, `email`, `phone`, `address`, `landmark`, `pin`, `state`, `totalamount`, `deliverycharge`, `date`, `time`, `mode`, `payment`, `current_status`) VALUES
(22, '204938054158ad45c3910ec8.32052805', 'Sanjukta basu', 'basu.sanjukta20@gmail.com', '2343254364', 'fghdxhfgd', '', '700000', 'West Bengal', 90, 0, '2017-02-22', '13:34:00', 'Cash On Delivery', 1, 'Shipped'),
(24, '135337775458ae81e4e00918.09952660', 'Roma Roy', 'romaroy.smart@gmail.com', '9836808231', '8A Asoke Road\r\nGanguly Bagan East', 'Besides BOI ATM', '700084', 'West Bengal', 405, 0, '2017-02-23', '12:06:00', 'Cash On Delivery', 1, 'Pending'),
(25, '188813349658bda299564f75.58350315', 'Annopurna Sen', 'anr.365@gmail.com', '9830563985', '165 K B S Road, New Town. Kolkata 136', '', '700136', 'West Bengal', 900, 0, '2017-03-06', '23:28:00', 'Cash On Delivery', 1, 'Pending'),
(51, '32158280158c8027bb12386.88446589', 'Piyali Basu', 'piyalibasu70@gmail.com', '9830728668', 'ganguly bagan, kolkata-84', 'ganguly bagan bus stand ', '700084', 'West Bengal', 234, 50, '14-03-2017', '20:20:00', 'Online', 1, 'Pending'),
(53, '177111682658c8dc0b9351b0.26554186', 'Annesha Roy', 'info2programmer@gmail.com', '9547763998', 'Demo', '', '700052', 'West Bengal', 1, 0, '15-03-2017', '11:51:00', 'Online', 1, 'Pending'),
(54, '47535316358d60e6a864b12.80778907', 'hj', 'hyujyu', 'ujuj', 'kjnoijoi', 'p]-o', '789456', 'Andaman and Nicobar', 450, 50, '25-03-2017', '12:25:00', 'Online', 0, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `vs_product`
--

CREATE TABLE `vs_product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `selling` float NOT NULL,
  `special` tinyint(1) DEFAULT NULL,
  `SKU` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vs_product`
--

INSERT INTO `vs_product` (`product_id`, `product_name`, `description`, `image`, `price`, `selling`, `special`, `SKU`) VALUES
(1, 'product_name	', 'description	', 'img', 0, 0, 1, 'SKU'),
(154, 'demo', 'asd', 'ae149c31f006e8da69cc3793bb5a0b39.jpg', 96, 6, 1, '66'),
(155, 'ko', 'mmm', '9446c939db66b1e276eea746277ca742.jpg', 98, 98, 0, '89n');

-- --------------------------------------------------------

--
-- Table structure for table `vs_productimage`
--

CREATE TABLE `vs_productimage` (
  `image_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vs_productimage`
--

INSERT INTO `vs_productimage` (`image_id`, `product_id`, `image_path`) VALUES
(1, 1, 'path');

-- --------------------------------------------------------

--
-- Table structure for table `vs_user`
--

CREATE TABLE `vs_user` (
  `customer_id` int(11) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_number` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `billing_address` varchar(255) DEFAULT NULL,
  `shipping_address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vs_user`
--

INSERT INTO `vs_user` (`customer_id`, `customer_email`, `customer_name`, `customer_number`, `password`, `billing_address`, `shipping_address`) VALUES
(5, 'info2programmer@gmail.com', 'Sakat Bhadury', '9547763998', '202cb962ac59075b964b07152d234b70', 'Hello User', 'Hello '),
(6, 'prasun@php.net', 'Prasun Pal', '9874563210', '202cb962ac59075b964b07152d234b70', NULL, NULL),
(7, 'admin@demo.com', 'Demo', '9874563210', '202cb962ac59075b964b07152d234b70', NULL, NULL),
(8, 'saikat@visioncreative.co.in', 'Saikat Bhadury', '9547763998', '202cb962ac59075b964b07152d234b70', NULL, NULL),
(9, 'piyalibasu70@gmail.com', 'Piyali Basu', '9830728668', '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL),
(10, 'basu.sanjukta20@gmail.com', 'Sanjukta Basu', '8697446967', '76a6154889322e08f5bb1f950de4eeac', NULL, NULL),
(11, 'pallabi.mazumder.90@gmail.com', 'Pallabi Basu', '8100841382', 'd6dc56c840eb849a69c854b139c55011', NULL, NULL),
(12, 'romaroy.smart@gmail.com', 'Roma Roy', '9836808231', '2b01203e83a71e724533e861c8373705', NULL, NULL),
(13, 'deblinadas.89@gmail.com', 'Deblina Das', '8197552532', '29f13b5a475e90cb52338ef1f3c7f282', 'C105, Golden Nest Apartment, JCRLAYOUT, 2ndCross, Panathur Main Road,', ''),
(14, 'moumitamitra945@gmail.com', 'moumita mitra', '9804806521', '3063cf1ca25e85ded38bcc0064b77f51', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `catrgories`
--
ALTER TABLE `catrgories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `cod_location`
--
ALTER TABLE `cod_location`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `collection`
--
ALTER TABLE `collection`
  ADD PRIMARY KEY (`collection_id`);

--
-- Indexes for table `front_banner`
--
ALTER TABLE `front_banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`record_id`);

--
-- Indexes for table `product_collection`
--
ALTER TABLE `product_collection`
  ADD PRIMARY KEY (`record_id`);

--
-- Indexes for table `product_review`
--
ALTER TABLE `product_review`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `vs_cart`
--
ALTER TABLE `vs_cart`
  ADD PRIMARY KEY (`Cart_ID`);

--
-- Indexes for table `vs_newsletter`
--
ALTER TABLE `vs_newsletter`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `vs_order`
--
ALTER TABLE `vs_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `vs_product`
--
ALTER TABLE `vs_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `vs_productimage`
--
ALTER TABLE `vs_productimage`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `vs_user`
--
ALTER TABLE `vs_user`
  ADD PRIMARY KEY (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `catrgories`
--
ALTER TABLE `catrgories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `cod_location`
--
ALTER TABLE `cod_location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `collection`
--
ALTER TABLE `collection`
  MODIFY `collection_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `front_banner`
--
ALTER TABLE `front_banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `record_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=299;

--
-- AUTO_INCREMENT for table `product_collection`
--
ALTER TABLE `product_collection`
  MODIFY `record_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_review`
--
ALTER TABLE `product_review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vs_cart`
--
ALTER TABLE `vs_cart`
  MODIFY `Cart_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `vs_newsletter`
--
ALTER TABLE `vs_newsletter`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vs_order`
--
ALTER TABLE `vs_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `vs_product`
--
ALTER TABLE `vs_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT for table `vs_productimage`
--
ALTER TABLE `vs_productimage`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=302;

--
-- AUTO_INCREMENT for table `vs_user`
--
ALTER TABLE `vs_user`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
