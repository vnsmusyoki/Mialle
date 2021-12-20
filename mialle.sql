-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2021 at 11:25 PM
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
(1, 'joseph', 'josehe', '0733662277', 'joseph@gmail.com', 7),
(2, 'kffkfk', 'kdodod', '0722882288', 'checked@gmail.com', 8);

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
(10, 10, 'ratedssds', 'Poor', 12);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL,
  `login_username` varchar(20) NOT NULL,
  `login_password` varchar(50) NOT NULL,
  `login_email` varchar(30) NOT NULL,
  `login_rank` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `login_username`, `login_password`, `login_email`, `login_rank`) VALUES
(5, 'intruder', '48cccca3bab2ad18832233ee8dff1b0b', 'vnsmusyoki@gmail.com', 'admin'),
(6, 'mercyline', '5f4dcc3b5aa765d61d8327deb882cf99', 'mercy@gmail.com', 'customer'),
(7, 'josejose', '5f4dcc3b5aa765d61d8327deb882cf99', 'joseph@gmail.com', 'admin'),
(8, 'checkedde', '5f4dcc3b5aa765d61d8327deb882cf99', 'checked@gmail.com', 'admin'),
(9, 'testinguser', '5f4dcc3b5aa765d61d8327deb882cf99', 'testinguser@gmail.com', 'customer'),
(10, 'onesmuscheck', '5f4dcc3b5aa765d61d8327deb882cf99', 'onesmus@gmail.com', 'customer');

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
(12, '6', '2020-12-21', 10);

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
(3, 3, 14),
(8, 8, 10),
(9, 9, 56),
(10, 10, 9),
(12, 12, 56);

-- --------------------------------------------------------

--
-- Table structure for table `pickup_points`
--

CREATE TABLE `pickup_points` (
  `pickup_point_id` int(11) NOT NULL,
  `pickup_point_location` varchar(500) NOT NULL,
  `pickup_point_shop_name` varchar(50) NOT NULL,
  `pickup_point_user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pickup_points`
--

INSERT INTO `pickup_points` (`pickup_point_id`, `pickup_point_location`, `pickup_point_shop_name`, `pickup_point_user_id`) VALUES
(1, 'Nairobi', 'john stores', 5);

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
  `product_sub_category_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_description`, `product_price`, `product_user_id`, `product_images`, `product_category_id`, `product_sub_category_id`) VALUES
(9, 'China make', 'all checedkekded', 566, 5, '61bfc75d702453.30900070.jpg', 1, 1),
(10, 'China make', 'High-performing creativity tool\r\nThe Lenovo ThinkBook 16p Gen 2 (16\" AMD) business laptop will power you through your workday—and look good doing it. With up to the AMD Ryzen™ 9 5900HX 8-core/16-thread Mobile Processor and NVIDIA® GeForce RTX™ 3060 graphics, you can easily accomplish your toughest, most creative tasks. Rigid security, 2.5K (2560 x 1600) resolution, and other smart features round out the package.', 70000, 5, '61bfc74c5e6524.16160558.jpg', 1, 1),
(13, 'ThinkBook 16p Gen 2', 'Gamers don’t have to feel bound to their desktops anymore. Legion by Lenovo lets you dominate your competitors wherever you are. Are you hardcore? We’ve got you covered with laptops that boast powerful discrete graphics and overclockable CPUs. We’ve also got budget options for casual gamers. But whatever laptop you choose will let you lose yourself in immersive audio and vivid displays.', 90000, 5, '61bf992e076157.27138231.jpg', 1, 1),
(14, 'heater sink', 'byt today', 6000, 6, '61c06ee704e274.44404888.jpg', 2, 2),
(56, 'ThinkBook 16p Gen 5', 'dededed', 6000, 7, '61c0f76f429992.38078538.jpg', 1, 2);

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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_contact` varchar(10) NOT NULL,
  `user_location` varchar(50) NOT NULL,
  `user_login_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_contact`, `user_location`, `user_login_id`) VALUES
(5, 'evans kimeu musyoki', '0720882594', 'Mombasa', 5),
(6, 'mercy meryc', '0733993388', 'Nairobi', 6),
(7, 'testing', '0722883388', 'Nairobi', 9),
(8, 'chdk djdjd jdj', '0722990099', 'Nakuru', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

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
  ADD KEY `feedbackorderdetails` (`feedback_order_id`);

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
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`sub_category_id`),
  ADD KEY `subcategorycategory` (`sub_category_category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `userslogin` (`user_login_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pickup_points`
--
ALTER TABLE `pickup_points`
  MODIFY `pickup_point_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `sub_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
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
  ADD CONSTRAINT `productowner` FOREIGN KEY (`product_user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `productsubcategory` FOREIGN KEY (`product_sub_category_id`) REFERENCES `sub_categories` (`sub_category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `subcategorycategory` FOREIGN KEY (`sub_category_category_id`) REFERENCES `categories` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `userslogin` FOREIGN KEY (`user_login_id`) REFERENCES `login` (`login_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
