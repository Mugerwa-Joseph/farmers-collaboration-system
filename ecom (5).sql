-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2020 at 02:11 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`, `role`, `email`, `mobile`, `status`) VALUES
(1, 'admin', 'admin', 0, '', '', 1),
(2, 'vishal', 'vishal', 1, 'vishal@gmail.com', '1234567890', 1),
(3, 'Arkaraj', 'Arkaraj', 1, 'arkaraj@test.com', '1234567890', 1),
(6, 'godfreymagari619@gmail.com', '1', 1, 'godfreymagari619@gmail.com', '0756784545', 1),
(7, 'godfreymagari619@gmail.com', '1', 0, 'godfreymagari619@gmail.com', '0756784545', 0),
(8, 'godfreymagari619@gmail.com', '1', 0, 'godfreymagari619@gmail.com', '', 0),
(9, 'godfreymagari619@gmail.com', '1', 0, 'gadyx@1.com', '0756784545', 0);

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `id` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `phoneno` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT '1',
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`id`, `address`, `firstname`, `lastname`, `username`, `password`, `city`, `state`, `phoneno`, `role`, `email`) VALUES
(1, 'arusha', 'Mary', 'Magari', 'mary', '506da6907f960f50cad09ca45512519f91515237', ' Nicobar Island ', 'Luwero', '765191587', '1', 'm@m.com');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categories`, `status`) VALUES
(1, 'Fruits', 1),
(2, 'Vegetable', 1),
(3, 'Grains', 1),
(4, 'Nuts', 1),
(5, 'Organic', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(75) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `comment` text NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `mobile`, `comment`, `added_on`) VALUES
(1, 'Arkaraj', 'arkaraj@test.com', '1234567890', 'Testing DataBase', '2020-09-14 00:00:00'),
(2, 'TestBot', 'Test@Bot.com', '1234567890', 'testing', '2020-01-20 07:59:38'),
(5, 'Arkaraj', 'arkaraj@test.com', '7395847373', 'This is for testing purpose', '2020-10-22 09:44:47');

-- --------------------------------------------------------

--
-- Table structure for table `coupon_master`
--

CREATE TABLE `coupon_master` (
  `id` int(11) NOT NULL,
  `coupon_code` varchar(50) NOT NULL,
  `coupon_value` int(11) NOT NULL,
  `coupon_type` varchar(10) NOT NULL,
  `cart_min_value` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coupon_master`
--

INSERT INTO `coupon_master` (`id`, `coupon_code`, `coupon_value`, `coupon_type`, `cart_min_value`, `status`) VALUES
(1, 'First50', 1000, 'Rupee', 1500, 1),
(2, 'First60', 20, 'Percentage', 1000, 1),
(3, 'Agro123', 500, 'Rupee', 1000, 1),
(5, 'XYZ40', 2000, 'Rupee', 4000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `farm`
--

CREATE TABLE `farm` (
  `id` int(255) NOT NULL,
  `farname` varchar(255) NOT NULL,
  `fid` int(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE `farmer` (
  `id` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `dcity` varchar(255) NOT NULL,
  `dstate` varchar(255) NOT NULL,
  `phoneno` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT '1',
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `olderdata`
--

CREATE TABLE `olderdata` (
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `address` varchar(250) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` int(11) NOT NULL,
  `payment_type` varchar(20) NOT NULL,
  `total_price` float NOT NULL,
  `payment_status` varchar(20) NOT NULL,
  `order_status` int(11) NOT NULL,
  `length` float NOT NULL,
  `breadth` float NOT NULL,
  `height` float NOT NULL,
  `weight` float NOT NULL,
  `txnid` varchar(20) NOT NULL,
  `mihpayid` varchar(20) NOT NULL,
  `ship_order_id` int(11) NOT NULL,
  `ship_shipment_id` int(11) NOT NULL,
  `payu_status` varchar(10) NOT NULL,
  `coupon_id` int(11) NOT NULL,
  `coupon_value` varchar(50) NOT NULL,
  `coupon_code` varchar(50) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `user_id`, `address`, `city`, `pincode`, `payment_type`, `total_price`, `payment_status`, `order_status`, `length`, `breadth`, `height`, `weight`, `txnid`, `mihpayid`, `ship_order_id`, `ship_shipment_id`, `payu_status`, `coupon_id`, `coupon_value`, `coupon_code`, `added_on`) VALUES
(22, 2, 'Kampala', 'aaa', 333, 'COD', 44, 'pending', 1, 0, 0, 0, 0, '68d1292f9e48afc1ab53', '', 0, 0, '', 0, '', '', '2020-12-06 01:28:12'),
(23, 2, 'juma', 'mamam', 123, 'COD', 150, 'pending', 1, 0, 0, 0, 0, '7a312067a677baddcf4f', '', 0, 0, '', 0, '', '', '2020-12-06 01:29:13'),
(24, 2, 'trew', 'aaa', 333, 'COD', 3190, 'pending', 1, 0, 0, 0, 0, '5f29ea65c473e0e31b35', '', 0, 0, '', 0, '', '', '2020-12-06 01:32:48'),
(25, 2, 'izzz', 'j', 88, 'COD', 150, 'pending', 1, 0, 0, 0, 0, '4655a81e2abe5241a7a7', '', 0, 0, '', 0, '', '', '2020-12-06 01:36:46'),
(26, 2, 'jinja', 'meme', 123, 'COD', 75, 'pending', 1, 0, 0, 0, 0, 'ece3d7c27f90eb7e0b9f', '', 0, 0, '', 0, '', '', '2020-12-06 01:38:02'),
(27, 2, 'gaga', 'Kampala', 222, 'COD', 150, 'pending', 1, 0, 0, 0, 0, '46b7f273ada299d534d4', '', 0, 0, '', 0, '', '', '2020-12-06 01:47:37'),
(28, 2, 'jinja', 'meme', 123, 'COD', 330, 'pending', 1, 0, 0, 0, 0, '34e5bb4bbe5ed163ab2d', '', 0, 0, '', 0, '', '', '2020-12-06 01:50:01'),
(29, 2, 'Kampala', 'aaadddd', 333, 'COD', 150, 'pending', 1, 0, 0, 0, 0, '88e111411697c793b032', '', 0, 0, '', 0, '', '', '2020-12-06 04:51:23'),
(30, 2, 'juma', 'mamam', 123, 'COD', 480, 'pending', 1, 0, 0, 0, 0, '852d0bc2543b351e28fa', '', 0, 0, '', 0, '', '', '2020-12-06 04:53:10'),
(31, 2, 'Kampala', 'aaa', 333, 'COD', 250, 'pending', 1, 0, 0, 0, 0, '6c8f10007e18e264fef5', '', 0, 0, '', 0, '', '', '2020-12-06 04:54:49'),
(32, 2, 'i', 'j', 88, 'COD', 150, 'Success', 5, 0, 0, 0, 0, '4861dcdc0147d1ab111e', '', 0, 0, '', 0, '', '', '2020-12-06 05:04:05'),
(33, 2, 'Kampala', 'aaa', 333, 'COD', 150, 'pending', 1, 0, 0, 0, 0, 'f6dc72464a0668972ca3', '', 0, 0, '', 0, '', '', '2020-12-06 05:05:59'),
(34, 2, 'Kampala', 'aaa', 333, 'COD', 1460, 'pending', 1, 0, 0, 0, 0, '46182259a4fa411cfae6', '', 0, 0, '', 0, '', '', '2020-12-06 05:08:20'),
(35, 1, 'i', 'j', 88, 'COD', 423, 'pending', 1, 0, 0, 0, 0, '275f29cc68c6757fbb0c', '', 0, 0, '', 0, '', '', '2020-12-07 02:00:51');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `order_id`, `product_id`, `qty`, `price`) VALUES
(23, 0, 33, 1, 100),
(24, 0, 1, 1, 44),
(25, 0, 45, 1, 150),
(26, 24, 46, 1, 330),
(27, 24, 45, 1, 150),
(28, 24, 44, 1, 150),
(29, 24, 43, 1, 650),
(30, 24, 40, 1, 330),
(31, 24, 39, 1, 420),
(32, 24, 38, 1, 550),
(33, 24, 37, 1, 450),
(34, 24, 36, 1, 160),
(35, 11, 45, 1, 150),
(36, 26, 22, 1, 75),
(37, 0, 45, 1, 150),
(38, 0, 41, 1, 330),
(39, 26, 44, 1, 150),
(40, 26, 44, 1, 150),
(41, 26, 46, 1, 330),
(42, 2, 34, 1, 150),
(43, 2, 33, 1, 100),
(44, 32, 45, 1, 150),
(45, 33, 44, 1, 150),
(46, 34, 41, 1, 330),
(47, 34, 43, 1, 650),
(48, 34, 45, 1, 150),
(49, 34, 46, 1, 330),
(50, 35, 45, 1, 150),
(51, 35, 47, 1, 123),
(52, 35, 44, 1, 150);

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

CREATE TABLE `order_status` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_status`
--

INSERT INTO `order_status` (`id`, `name`) VALUES
(1, 'Pending'),
(2, 'Processing'),
(3, 'Shipped'),
(4, 'Canceled'),
(5, 'Complete');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `sub_categories_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mrp` float NOT NULL,
  `price` float NOT NULL,
  `qty` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `short_desc` varchar(2000) NOT NULL,
  `description` text NOT NULL,
  `best_seller` int(11) NOT NULL,
  `meta_title` varchar(2000) NOT NULL,
  `meta_desc` varchar(2000) NOT NULL,
  `meta_keyword` varchar(2000) NOT NULL,
  `added_by` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `Rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `categories_id`, `sub_categories_id`, `name`, `mrp`, `price`, `qty`, `image`, `short_desc`, `description`, `best_seller`, `meta_title`, `meta_desc`, `meta_keyword`, `added_by`, `status`, `Rating`) VALUES
(1, 1, 1, 'Fresh Organic Simla Apple Fruit 4 Pieces', 9999, 44, 10, 'apples.jpg', '100% Wax Free, Pack contains 4 pieces\nGood source of Vitamin C, Dietary Fiber, Flavonoids and antioxidants', 'Shimla apples are commonly grown apples in India. They are one of the healthiest fruit. They are good source of vitamin c, dietary fiber, flavonoids and antioxidants. Store them in a cool dry place away from direct sunlight. They can eaten as a fresh or used in fruit chat, salads, smoothies, pies etc.', 1, 'apple', '', 'apple', 0, 1, 5),
(2, 1, 1, 'Pears', 165800, 35, 4, 'pears.jpg', 'Aenean tempus ut leo nec laoreet. Vestibulum ut est neque.', 'Curabitur eget augue dolor. Curabitur id dapibus massa. Vestibulum at enim quis metus ultrices posuere vitae sit amet eros. Morbi et libero pellentesque, efficitur odio nec, congue lorem. Vestibulum faucibus, risus eget pretium efficitur, neque nulla eleifend purus, non venenatis lorem ligula vel nulla. Fusce finibus efficitur sapien vitae laoreet. Integer imperdiet justo sed tellus dictum, at egestas arcu finibus. Fusce et augue elit. Praesent tincidunt purus in purus dictum volutpat. Aenean tempus ut leo nec laoreet. Vestibulum ut est neque.', 0, 'Pears', '', 'Pears', 0, 1, 4),
(3, 1, 1, 'Cherries', 115900, 40, 5, 'cherries.jpg', 'Nullam purus lorem, tincidunt vitae tristique non, imperdiet ut urna.', 'Nullam a nunc et lorem ornare faucibus. Etiam tortor lacus, auctor eget enim at, tincidunt dignissim magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin tincidunt eros eget felis tempor, id volutpat ipsum lacinia. Donec scelerisque risus non purus scelerisque tristique. Mauris enim ligula, condimentum sed iaculis nec, porttitor eu nunc. Sed hendrerit vel arcu vitae iaculis. Phasellus vehicula molestie leo. Nullam purus lorem, tincidunt vitae tristique non, imperdiet ut urna.', 0, 'Pears', 'Pears', 'Pears', 0, 1, 4),
(4, 1, 2, 'Bananas', 1999, 25, 3, 'bananas.jpg', 'per inceptos himenaeos. Ut commodo ullamcorper quam non pulvinar.', 'Duis a felis congue, feugiat est non, suscipit quam. In elit lacus, auctor sed lacus eget, egestas consectetur leo. Duis pellentesque pharetra ante, ac ornare nibh faucibus id. Integer pulvinar malesuada nisl. Nulla vel orci nunc. Nullam a tellus eu ex ullamcorper mollis. Donec commodo ligula a accumsan fermentum. Mauris sed orci lacinia, posuere leo molestie, pretium mi. Cras sodales, neque id cursus fermentum, mi purus vehicula sem, vel laoreet lorem justo id tortor. Sed ut urna ut ipsum vestibulum commodo. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut commodo ullamcorper quam non pulvinar.', 1, 'bananas', 'bananas', 'bananas', 0, 1, 4),
(5, 1, 2, 'Mangoes', 2799, 2399, 8, 'mangoes.jpg', 'a nisl pharetra orci, at condimentum nisl lorem elementum ipsum.', 'Nunc auctor turpis ante, eget bibendum mi mollis in. Aliquam quis neque ut libero malesuada auctor. Aliquam interdum enim at commodo gravida. Donec nisl sem, molestie ut quam quis, vulputate venenatis ipsum. Aenean quis ex ut magna accumsan fringilla. Quisque id ex massa. Sed libero ante, fringilla ac condimentum in, porttitor ac risus. Integer mattis odio nec nunc semper imperdiet. In porttitor tellus eget sapien vulputate, eu euismod lacus aliquet. Maecenas molestie elit augue, sit amet fringilla dolor congue et. Nunc eu libero auctor, sollicitudin lectus quis, porta ligula. In vel ullamcorper risus. Nullam viverra, mi sit amet laoreet luctus, urna nisl pharetra orci, at condimentum nisl lorem elementum ipsum.', 1, 'mangoes', 'mangoes', 'Fresh Indian mangoes', 0, 1, 4),
(6, 1, 3, 'Oranges', 1999, 1500, 10, 'oranges.jpg', 'lacus quis urna tristique suscipit. Praesent vitae mi mollis dui facilisis convallis eu faucibus augue.', 'Duis in risus quis lectus dictum fringilla. Aenean tempor pellentesque velit id ullamcorper. Ut id aliquam odio. Morbi id pharetra libero, ut tempor nisi. Maecenas a lectus nec risus maximus rutrum. Mauris vel elit ut magna semper laoreet nec sed magna. Quisque eleifend vel sem non malesuada. Interdum et malesuada fames ac ante ipsum primis in faucibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum eget posuere orci, eu ultrices sapien. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam sit amet ex dictum nisl bibendum elementum non in turpis. In bibendum ipsum nunc, bibendum lacinia lacus maximus eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus aliquam lacus quis urna tristique suscipit. Praesent vitae mi mollis dui facilisis convallis eu faucibus augue.', 1, 'Oranges', 'Oranges', 'Oranges', 0, 1, 4),
(7, 1, 3, 'Mausambi', 1900, 53, 20, 'mausambi.jpg', 'isl pharetra orci, at condimentum nisl lorem elementum ipsum.', 'Nunc auctor turpis ante, eget bibendum mi mollis in. Aliquam quis neque ut libero malesuada auctor. Aliquam interdum enim at commodo gravida. Donec nisl sem, molestie ut quam quis, vulputate venenatis ipsum. Aenean quis ex ut magna accumsan fringilla. Quisque id ex massa. Sed libero ante, fringilla ac condimentum in, porttitor ac risus. Integer mattis odio nec nunc semper imperdiet. In porttitor tellus eget sapien vulputate, eu euismod lacus aliquet. Maecenas molestie elit augue, sit amet fringilla dolor congue et. Nunc eu libero auctor, sollicitudin lectus quis, porta ligula. In vel ullamcorper risus. Nullam viverra, mi sit amet laoreet luctus, urna nisl pharetra orci, at condimentum nisl lorem elementum ipsum.', 0, 'mausambi', 'mausambi', 'mausambi', 0, 1, 3),
(8, 1, 4, 'Strawberry', 1120, 550, 10, 'strawberry.jpg', 'rius, lacus velit aliquam ex, in dignissim sem eros ac erat. Vestibulum ac arcu tortor.', 'Vestibulum in auctor turpis. Quisque hendrerit eget turpis et molestie. Phasellus nec nibh a lacus rhoncus eleifend. Donec suscipit id diam non mattis. Fusce eu luctus leo. Etiam eget dui libero. Etiam eros lorem, rhoncus et convallis eget, tempus vel tellus. Nam at diam quis nisl tincidunt aliquam. Quisque placerat magna non libero interdum varius vel id risus. Vivamus mollis maximus fermentum. Donec eget nulla dui. Sed ultricies malesuada metus, non feugiat purus fringilla ac. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer accumsan, tortor id eleifend varius, lacus velit aliquam ex, in dignissim sem eros ac erat. Vestibulum ac arcu tortor.', 0, 'strawberry', '', 'strawberry', 0, 1, 4),
(9, 1, 4, 'Kiwi', 650, 1560, 10, 'kiwi.jpg', 's mus. Vestibulum eget posuere orci, eu ultrices sapien. Orc', 'aximus rutrum. Mauris vel elit ut magna semper laoreet nec sed magna. Quisque eleifend vel sem non malesuada. Interdum et malesuada fames ac ante ipsum primis in faucibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum eget posuere orci, eu ultrices sapien. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam sit amet ex d', 0, 'kiwi', '', 'kiwi', 0, 1, 3),
(10, 1, 4, 'Pomegranate', 100, 70, 50, 'pomegranate.jpg', 'test', 'test', 1, 'pomegranate', 'pomegranate', 'pomegranate', 0, 1, 2),
(11, 1, 5, 'Watermelon', 100, 150, 10, 'watermelon.jpg', 'Test', 'test', 1, 'watermelon', 'watermelon', 'watermelon', 0, 1, 5),
(12, 2, 6, 'Potatoes', 120, 50, 10, 'potatoes.jpg', 'Test desc', 'Test desc', 1, 'Potatoes', 'Potatoes', 'Potatoes', 2, 1, 5),
(13, 2, 6, 'Tomatoes', 200, 130, 10, 'tomatoes.jpg', 'Test desc', 'Test desc', 1, 'tomatoes', 'tomatoes', 'tomatoes', 2, 1, 4),
(14, 2, 6, 'Peas', 201, 30, 10, 'peas.jpg', 'Test desc', 'Test desc', 0, 'peas', 'peas', 'peas', 2, 1, 5),
(15, 2, 6, 'Brinjal', 202, 50, 10, 'brinjal.jpg', 'Test desc', 'Test desc', 0, 'brinjal', 'brinjal', 'brinjal', 2, 1, 2),
(16, 2, 6, 'Ladyfingers', 203, 50, 10, 'ladyfingers.jpg', 'Test desc', 'Test desc', 0, 'ladyfingers', 'ladyfingers', 'ladyfingers', 1, 1, 3),
(17, 2, 6, 'Carrots', 204, 45, 10, 'carrots.jpg', 'Test desc', 'Test desc', 1, 'carrots', 'carrots', 'carrots', 2, 1, 5),
(18, 2, 6, 'Onions', 205, 50, 10, 'onions.jpg', 'Test desc', 'Test desc', 1, 'onions', 'onions', 'onions', 2, 1, 4),
(19, 2, 6, 'Bottle gourd', 206, 150, 10, 'bottlegourd.jpg', 'Test desc', 'Test desc', 0, 'bottle gourd', 'bottle gourd', 'bottle gourd', 2, 1, 4),
(20, 2, 7, 'Lettuce', 206, 125, 10, 'lettuce.jpg', 'Test desc', 'Test desc', 0, 'lettuce', 'lettuce', 'lettuce', 2, 1, 3),
(21, 2, 7, 'Spinach', 207, 70, 10, 'spinach.jpg', 'Test desc', 'Test desc', 1, 'spinach', 'spinach', 'spinach', 2, 1, 4),
(22, 2, 8, 'Cauliflower', 200, 75, 10, 'cauliflower.jpg', 'Test desc', 'Test desc', 0, 'cauliflower', 'cauliflower', 'cauliflower', 2, 1, 4),
(23, 2, 8, 'Cabbage', 208, 45, 10, 'cabbage.jpg', 'Test desc', 'Test desc', 1, 'cabbage', 'cabbage', 'cabbage', 2, 1, 5),
(24, 2, 9, 'Pumpkin', 209, 60, 10, 'pumpkin.jpg', 'Test desc', 'Test desc', 0, 'pumpkin', 'pumpkin', 'pumpkin', 2, 1, 3),
(25, 2, 9, 'Cucumber', 210, 35, 10, 'cucumber.jpg', 'Test desc', 'Test desc', 0, 'cucumber', 'cucumber', 'cucumber', 2, 1, 3),
(26, 3, 10, 'Wheat(1 Kg)', 211, 150, 10, 'wheat.jpg', 'Test desc', 'Test desc', 1, 'wheat', 'wheat', 'wheat', 2, 1, 4),
(27, 3, 10, 'Oats', 212, 170, 10, 'oats.jpg', 'Test desc', 'Test desc', 0, 'oats', 'oats', 'oats', 2, 1, 4),
(28, 3, 10, 'RICE', 213, 180, 10, 'rice.jpg', 'Test desc', 'Test desc', 1, 'rice', 'rice', 'rice', 2, 1, 4),
(29, 3, 10, 'CORN', 214, 35, 10, 'corn.jpg', 'Test desc', 'Test desc', 1, 'corn', 'corn', 'corn', 2, 1, 4),
(30, 3, 10, 'BARLEY', 215, 150, 10, 'barley.jpg', 'Test desc', 'Test desc', 0, 'barley', 'barley', 'barley', 2, 1, 5),
(31, 3, 10, 'MILLET', 216, 330, 10, 'millet.jpg', 'Test desc', 'Test desc', 0, 'millet', 'millet', 'millet', 2, 1, 3),
(32, 3, 10, 'RYE', 217, 500, 10, 'rye.jpg', 'Test desc', 'Test desc', 0, 'rye', 'rye', 'rye', 2, 1, 3),
(33, 3, 10, 'Sorghum', 218, 100, 10, 'sorghum.jpg', 'Test desc', 'Test desc', 0, 'sorghum', 'sorghum', 'sorghum', 2, 1, 4),
(34, 3, 10, 'TRITICALE', 219, 150, 10, 'triticale.jpg', 'Test desc', 'Test desc', 0, 'triticale', 'triticale', 'triticale', 2, 1, 3),
(35, 3, 11, 'Buckwheat', 220, 300, 10, 'buckwheat.jpg', 'Test desc', 'Test desc', 0, 'buckwheat', 'buckwheat', 'buckwheat', 2, 1, 2),
(36, 4, 0, 'Peanuts', 221, 160, 10, 'peanuts.jpg', 'Test desc', 'Test desc', 1, 'peanuts', 'peanuts', 'peanuts', 2, 1, 4),
(37, 4, 0, 'Almonds (500g)', 222, 450, 10, 'almonds.jpg', 'Test desc', 'Test desc', 1, 'almonds', 'almonds', 'almonds', 1, 1, 4),
(38, 4, 0, 'Cashew Nuts', 223, 550, 10, 'cashew.jpg', 'Test desc', 'Test desc', 1, 'cashew', 'cashew', 'cashew', 1, 1, 5),
(39, 4, 0, 'Hazelnuts', 224, 420, 10, 'hazelnuts.jpg', 'Test desc', 'Test desc', 0, 'hazelnuts', 'hazelnuts', 'hazelnuts', 1, 1, 4),
(40, 4, 0, 'Pecans', 225, 330, 10, 'pecans.jpg', 'Test desc', 'Test desc', 0, 'pecans', 'pecans', 'pecans', 1, 1, 3),
(41, 4, 0, 'Pistachio Nuts', 226, 330, 10, 'pistachio.jpg', 'Test desc', 'Test desc', 1, 'pista', 'pista', 'pista', 1, 1, 4),
(42, 4, 0, 'Walnuts', 227, 350, 10, 'walnuts.jpg', 'Test desc', 'Test desc', 0, 'walnuts', 'walnuts', 'walnuts', 2, 1, 5),
(43, 4, 0, 'Pine Nuts', 228, 650, 10, 'pinenuts.jpg', 'Test desc', 'Test desc', 1, '', '', '', 2, 1, 3),
(44, 4, 0, 'Chestnuts', 229, 150, 10, 'chestnuts.jpg', 'Test desc', 'Test desc', 0, 'chestnuts', 'chestnuts', 'chestnuts', 0, 1, 4),
(45, 5, 12, 'Farm made Bread', 40, 150, 10, 'bread.jpg', 'Test desc', 'Test desc', 1, 'bread', 'bread', 'bread', 3, 1, 5),
(46, 5, 13, 'Home made Chocolate(500g)', 230, 330, 10, 'homechocolate.jpg', 'Test desc', 'Test desc', 1, 'chocolate', 'chocolate', 'chocolate', 3, 1, 5),
(47, 3, 11, 'peaches', 12, 123, 12, '917752849_clipart-fruit-guava-1.png', 'ads', 'asd', 0, 'asdasd', 'asdsa', 'asdsad', 6, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `shiprocket_token`
--

CREATE TABLE `shiprocket_token` (
  `id` int(11) NOT NULL,
  `token` varchar(500) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shiprocket_token`
--

INSERT INTO `shiprocket_token` (`id`, `token`, `added_on`) VALUES
(1, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjQ5NDkwOSwiaXNzIjoiaHR0cHM6Ly9hcGl2Mi5zaGlwcm9ja2V0LmluL3YxL2V4dGVybmFsL2F1dGgvbG9naW4iLCJpYXQiOjE1OTA0MDQ4NTMsImV4cCI6MTU5MTI2ODg1MywibmJmIjoxNTkwNDA0ODUzLCJqdGkiOiJWZU4zaE5YMm1LdVY4cXB0In0.YKracv-yDKppYb2FISr5zE_4gEGWIAz-HzIa6cit9nw', '2020-12-06 11:15:58');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `sub_categories` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `categories_id`, `sub_categories`, `status`) VALUES
(0, 4, 'General', 1),
(1, 1, 'General', 1),
(2, 1, 'Tropic and Exotic', 1),
(3, 1, 'Citrus', 1),
(4, 1, 'Berries', 1),
(5, 1, 'Melons', 1),
(6, 2, 'General', 1),
(7, 2, 'Leafy Green', 1),
(8, 2, 'Cruciferous', 1),
(9, 2, 'Marrow', 1),
(10, 3, 'Cereals', 1),
(11, 3, 'Pseudo-Cereals', 1),
(12, 5, 'Bread', 1),
(13, 5, 'Chocolate', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `name`, `password`, `email`, `mobile`, `added_on`) VALUES
(1, 'Arkaraj Ghosh', 'Arkaraj', 'arkaraj@test.com', '7395847373', '2020-08-13 00:00:00'),
(2, 'Bot 1', 'AgroBot', 'agro@bot.com', '1234567890', '2020-09-14 00:00:00'),
(3, 'Arkaraj', 'test1234', 'arkaraj@test.com', '1122334455', '2020-09-13 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `user_id`, `product_id`, `added_on`) VALUES
(12, 0, 46, '2020-12-06 12:16:17'),
(13, 0, 41, '2020-12-06 12:16:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupon_master`
--
ALTER TABLE `coupon_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farm`
--
ALTER TABLE `farm`
  ADD PRIMARY KEY (`id`),
  ADD KEY `farname` (`farname`),
  ADD KEY `fid` (`fid`);

--
-- Indexes for table `farmer`
--
ALTER TABLE `farmer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `firstname` (`firstname`),
  ADD KEY `dcity` (`dcity`);

--
-- Indexes for table `olderdata`
--
ALTER TABLE `olderdata`
  ADD PRIMARY KEY (`product_id`,`order_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shiprocket_token`
--
ALTER TABLE `shiprocket_token`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `coupon_master`
--
ALTER TABLE `coupon_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `farm`
--
ALTER TABLE `farm`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `farmer`
--
ALTER TABLE `farmer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `order_status`
--
ALTER TABLE `order_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `shiprocket_token`
--
ALTER TABLE `shiprocket_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `farm`
--
ALTER TABLE `farm`
  ADD CONSTRAINT `farm_ibfk_1` FOREIGN KEY (`fid`) REFERENCES `farmer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
