-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2021 at 08:55 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mialle`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_first_name` varchar(50) NOT NULL,
  `admin_last_name` varchar(50) NOT NULL,
  `admin_mobile` varchar(20) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_login_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_first_name`, `admin_last_name`, `admin_mobile`, `admin_email`, `admin_login_id`) VALUES
(3, 'admin', 'admin', '0788998800', 'fulladmin@gmail.com', 16),
(4, 'test', 'admin', '0722277772', 'lastadmin@gmail.com', 17);

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `buyer_id` int(11) NOT NULL,
  `buyer_first_name` varchar(30) NOT NULL,
  `buyer_last_name` varchar(50) NOT NULL,
  `buyer_mobile` varchar(10) NOT NULL,
  `buyer_email` varchar(30) NOT NULL,
  `buyer_location` varchar(500) NOT NULL,
  `buyer_login_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`buyer_id`, `buyer_first_name`, `buyer_last_name`, `buyer_mobile`, `buyer_email`, `buyer_location`, `buyer_login_id`) VALUES
(1, 'evans', 'kmeu ', '0722002200', 'vnsmusyoki@gmail.com', 'this is my account checked heehehed', 11),
(2, 'check', 'chhchchh', '0722001298', 'seller@gmail.com', 'next to police station', 12);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `category_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_desc`) VALUES
(1, 'Electronics', 'for all electric appliances updated'),
(2, 'Health and Beauty', 'all the best laptop deals'),
(3, 'Phones and Tablets', 'All digital hand gadgets'),
(4, 'Fashion and Design', 'Designer clothes'),
(5, 'Others', 'All other categories not listed above');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `feedback_user_id` int(10) NOT NULL,
  `feedback_comment` varchar(500) NOT NULL,
  `feedback_rating` varchar(50) NOT NULL,
  `feedback_order_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `feedback_user_id`, `feedback_comment`, `feedback_rating`, `feedback_order_id`) VALUES
(13, 1, 'sell this to me now', 'Excellent', 16);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL,
  `login_username` varchar(20) NOT NULL,
  `login_password` varchar(50) NOT NULL,
  `login_rank` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `login_username`, `login_password`, `login_rank`) VALUES
(11, 'intruder', '5f4dcc3b5aa765d61d8327deb882cf99', 'buyer'),
(12, 'selleraccount', '5f4dcc3b5aa765d61d8327deb882cf99', 'seller'),
(15, 'testseller', '5f4dcc3b5aa765d61d8327deb882cf99', 'seller'),
(16, 'adminadmin', '5f4dcc3b5aa765d61d8327deb882cf99', 'admin'),
(17, 'admintested', '5f4dcc3b5aa765d61d8327deb882cf99', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_ref` varchar(50) NOT NULL,
  `order_date` date NOT NULL,
  `order_buyer_user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_ref`, `order_date`, `order_buyer_user_id`) VALUES
(3, '6', '2020-12-21', 5),
(8, '6', '2020-12-21', 9),
(9, '6', '2020-12-21', 9),
(10, '6', '2020-12-21', 9),
(12, '6', '2020-12-21', 10),
(16, '6', '2023-12-21', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_details_id` int(11) NOT NULL,
  `order_details_order_id` int(10) NOT NULL,
  `order_details_product_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_details_id`, `order_details_order_id`, `order_details_product_id`) VALUES
(16, 16, 68);

-- --------------------------------------------------------

--
-- Table structure for table `pickup_points`
--

CREATE TABLE `pickup_points` (
  `pickup_point_id` int(11) NOT NULL,
  `pickup_point_location` varchar(500) NOT NULL,
  `pickup_point_shop_name` varchar(50) NOT NULL,
  `pickup_point_order_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pickup_points`
--

INSERT INTO `pickup_points` (`pickup_point_id`, `pickup_point_location`, `pickup_point_shop_name`, `pickup_point_order_id`) VALUES
(2, 'opposite bus stage nchiru market', 'Nchriru kainga ', 14),
(3, 'dedededed', 'musa collections', 16);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_description` longtext NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_user_id` int(10) NOT NULL,
  `product_images` varchar(5000) NOT NULL,
  `product_category_id` int(10) NOT NULL,
  `product_sub_category_id` int(10) NOT NULL,
  `product_status` varchar(20) NOT NULL DEFAULT 'available'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_description`, `product_price`, `product_user_id`, `product_images`, `product_category_id`, `product_sub_category_id`, `product_status`) VALUES
(61, 'ThinkBook 16p Gen 2', 'chddjddjjdjdd updated sucessfully', 45000, 1, '61c30cba0a6c03.74579831.jpg', 2, 2, 'sold'),
(68, 'clothes latest vrfrf', 'feedededede', 66666, 1, '61c425b3896802.92061328.jpg', 2, 1, 'sold');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `seller_id` int(11) NOT NULL,
  `seller_first_name` varchar(50) NOT NULL,
  `seller_last_name` varchar(50) NOT NULL,
  `seller_mobile` varchar(50) NOT NULL,
  `seller_email` varchar(50) NOT NULL,
  `seller_location` varchar(5000) NOT NULL,
  `seller_login_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`seller_id`, `seller_first_name`, `seller_last_name`, `seller_mobile`, `seller_email`, `seller_location`, `seller_login_id`) VALUES
(1, 'tes', 'seller', '0711221120', 'testsellser@gmail.com', 'next ti famous shop', 15);

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `sub_category_id` int(11) NOT NULL,
  `sub_category_name` varchar(50) NOT NULL,
  `sub_category_desc` mediumtext NOT NULL,
  `sub_category_category_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`sub_category_id`, `sub_category_name`, `sub_category_desc`, `sub_category_category_id`) VALUES
(1, 'Extensions', 'All Quality ones', 1),
(2, 'Dell', 'best laptops seen updates', 1),
(3, 'shoes', 'best retailing shoes', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD KEY `adminloginuser` (`admin_login_id`);

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`buyer_id`),
  ADD KEY `buyerlogin` (`buyer_login_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`),
  ADD KEY `feedbackorderdetails` (`feedback_order_id`),
  ADD KEY `feedbackbuyer` (`feedback_user_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_details_id`),
  ADD KEY `orderdetailsproduct` (`order_details_product_id`),
  ADD KEY `orderdetailsorder` (`order_details_order_id`);

--
-- Indexes for table `pickup_points`
--
ALTER TABLE `pickup_points`
  ADD PRIMARY KEY (`pickup_point_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `productcategory` (`product_category_id`),
  ADD KEY `productsubcategory` (`product_sub_category_id`),
  ADD KEY `productowner` (`product_user_id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`seller_id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`sub_category_id`),
  ADD KEY `subcategorycategory` (`sub_category_category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `buyer`
--
ALTER TABLE `buyer`
  MODIFY `buyer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pickup_points`
--
ALTER TABLE `pickup_points`
  MODIFY `pickup_point_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `seller_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `sub_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `adminloginuser` FOREIGN KEY (`admin_login_id`) REFERENCES `login` (`login_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `buyer`
--
ALTER TABLE `buyer`
  ADD CONSTRAINT `buyerlogin` FOREIGN KEY (`buyer_login_id`) REFERENCES `login` (`login_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedbackbuyer` FOREIGN KEY (`feedback_user_id`) REFERENCES `buyer` (`buyer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `feedbackorderdetails` FOREIGN KEY (`feedback_order_id`) REFERENCES `order_details` (`order_details_order_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `orderdetailsorder` FOREIGN KEY (`order_details_order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orderdetailsproduct` FOREIGN KEY (`order_details_product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `productcategory` FOREIGN KEY (`product_category_id`) REFERENCES `categories` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `productowner` FOREIGN KEY (`product_user_id`) REFERENCES `seller` (`seller_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `productsubcategory` FOREIGN KEY (`product_sub_category_id`) REFERENCES `sub_categories` (`sub_category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `subcategorycategory` FOREIGN KEY (`sub_category_category_id`) REFERENCES `categories` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
