-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2015 at 05:40 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `otakudb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `cart_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `shipping_address` varchar(255) NOT NULL,
  `total` double NOT NULL,
  `note` mediumtext NOT NULL,
  `date` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `cart_id` int(10) NOT NULL,
  `date` datetime NOT NULL,
  `quantity` double NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(10) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `product_desc` mediumtext NOT NULL,
  `category` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `quantity` float NOT NULL,
  `image` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_desc`, `category`, `price`, `quantity`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Fairy Tail Metal Bracelet', 'Very nice!', 'accessories', 275, 100, 'products/accessories/fairy_tail_metal_bracelet.jpg', '2015-02-09 09:37:06', NULL, NULL),
(2, 'One Piece Black Rotating Ring', 'Very Elegant!', 'accessories', 200, 100, 'products/accessories/one_piece_black_rotating_ring.jpg', '2015-02-09 09:37:06', NULL, NULL),
(3, 'Radiant Dreamer', 'Very Beautiful!', 'accessories', 250, 100, 'products/accessories/radiant_dreamer.jpg', '2015-02-09 09:37:06', NULL, NULL),
(4, 'Scouting Legion Ring', 'Good!', 'accessories', 300, 100, 'products/accessories/scouting_legion_ring.jpg', '2015-02-09 09:37:06', NULL, NULL),
(5, 'Shingeki No Kyojin Necklace', 'Nice!', 'accessories', 350, 100, 'products/accessories/shingeki_no_kyojin_necklace.jpg', '2015-02-09 09:37:06', NULL, NULL),
(6, 'Costume 1', 'Nice!', 'costumes', 1899, 100, 'products/costumes/costume1.jpg', '2015-02-09 09:37:06', NULL, NULL),
(7, 'Costume 2', 'Nice!', 'costumes', 1599, 100, 'products/costumes/costume2.jpg', '2015-02-09 09:37:06', NULL, NULL),
(8, 'Costume 3', 'Nice!', 'costumes', 1799, 100, 'products/costumes/costume3.jpg', '2015-02-09 09:37:06', NULL, NULL),
(9, 'Costume 4', 'Nice!', 'costumes', 1399, 100, 'products/costumes/costume4.png', '2015-02-09 09:37:06', NULL, NULL),
(10, 'Costume 5', 'Nice!', 'costumes', 1499, 100, 'products/costumes/costume5.jpg', '2015-02-09 09:37:06', NULL, NULL),
(11, 'Magazine 1', 'Nice!', 'magazine', 500, 100, 'products/magazines/magazine1.jpg', '2015-02-09 09:37:06', NULL, NULL),
(12, 'Magazine 2', 'Nice!', 'magazine', 500, 100, 'products/magazines/magazine2.jpg', '2015-02-09 09:37:06', NULL, NULL),
(13, 'Magazine 3', 'Nice!', 'magazine', 500, 100, 'products/magazines/magazine3.jpg', '2015-02-09 09:37:06', NULL, NULL),
(14, 'Magazine 4', 'Nice!', 'magazine', 500, 100, 'products/magazines/magazine4.jpg', '2015-02-09 09:37:06', NULL, NULL),
(15, 'Magazine 5', 'Nice!', 'magazine', 500, 100, 'products/magazines/magazine5.jpg', '2015-02-09 09:37:06', NULL, NULL),
(16, 'Toy 1', 'Nice!', 'toy', 480, 100, 'products/toys/toy1.jpg', '2015-02-09 09:37:06', NULL, NULL),
(17, 'Toy 2', 'Nice!', 'toy', 480, 100, 'products/toys/toy2.jpg', '2015-02-09 09:37:06', NULL, NULL),
(18, 'Toy 3', 'Nice!', 'toy', 480, 100, 'products/toys/toy3.jpg', '2015-02-09 09:37:06', NULL, NULL),
(19, 'Toy 4', 'Nice!', 'toy', 480, 100, 'products/toys/toy4.jpg', '2015-02-09 09:37:07', NULL, NULL),
(20, 'Toy 5', 'Nice!', 'toy', 480, 100, 'products/toys/toy5.jpg', '2015-02-09 09:37:07', NULL, NULL),
(21, 'Collectible 1', 'Nice!', 'collectibles', 700, 100, 'products/collectibles/collectible1.jpg', '2015-02-09 09:37:07', NULL, NULL),
(22, 'Collectible 2', 'Nice!', 'collectibles', 700, 100, 'products/collectibles/collectible2.jpg', '2015-02-09 09:37:07', NULL, NULL),
(23, 'Collectible 3', 'Nice!', 'collectibles', 700, 100, 'products/collectibles/collectible3.jpg', '2015-02-09 09:37:07', NULL, NULL),
(24, 'Collectible 4', 'Nice!', 'collectibles', 700, 100, 'products/collectibles/collectible4.jpg', '2015-02-09 09:37:07', NULL, NULL),
(25, 'Collectible 5', 'Nice!', 'collectibles', 700, 100, 'products/collectibles/collectible5.jpg', '2015-02-09 09:37:07', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` longtext NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `firstname`, `lastname`, `password`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ianolinaresgmail.com', 'sample', 'sampls', 'password', '', '2015-02-08 00:00:00', '2015-02-08 10:13:50', '2015-02-08 10:14:53'),
(2, 'ianolinares@gmail.com', 'sample', 'sampls', 'password', '', '2015-02-08 09:59:12', NULL, NULL),
(3, 'ianolinares@ymail.com', 'Ian', 'Olinares', '55c3b5386c486feb662a0785f340938f518d547f', '', '2015-02-08 16:04:53', NULL, NULL),
(4, 'zolo@gmail.com', 'Stephanie', 'Lowery', '92432e7c66519c4e404d347718ffe641a658ac7e', '', '2015-02-09 06:05:20', NULL, NULL),
(6, 'zolso@gmail.com', 'Stephanie', 'Lowery', '92432e7c66519c4e404d347718ffe641a658ac7e', '', '2015-02-09 06:18:40', NULL, NULL),
(8, 'hawyhysok@yahoo.com', 'Kevyn', 'Boone', '92432e7c66519c4e404d347718ffe641a658ac7e', '', '2015-02-09 06:21:35', NULL, NULL),
(9, 'cubemo@hotmail.com', 'Hunter', 'Oneill', '92432e7c66519c4e404d347718ffe641a658ac7e', '', '2015-02-09 06:22:51', NULL, NULL),
(10, 'syzyros@hotmail.com', 'Mallory', 'Dudley', '92432e7c66519c4e404d347718ffe641a658ac7e', '', '2015-02-09 06:23:25', NULL, NULL),
(11, 'muryd@hotmail.com', 'Igor', 'Haley', '92432e7c66519c4e404d347718ffe641a658ac7e', '', '2015-02-09 06:25:04', NULL, NULL),
(12, 'pupev@gmail.com', 'Thor', 'Barnes', '55c3b5386c486feb662a0785f340938f518d547f', '', '2015-02-09 06:25:51', NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
