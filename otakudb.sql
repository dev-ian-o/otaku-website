-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2015 at 04:52 PM
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
  `invoice_no` int(9) NOT NULL,
  `shipping_address` varchar(255) NOT NULL,
  `shipping_fee` double NOT NULL,
  `total` double NOT NULL,
  `note` mediumtext NOT NULL,
  `date` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`cart_id`),
  UNIQUE KEY `invoice_no` (`invoice_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `invoice_no`, `shipping_address`, `shipping_fee`, `total`, `note`, `date`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 12, 734114460, 'Quis non quia laboriosam consequat Soluta ut vel est reprehenderit veniam nemo', 500, 28284, 'Quis nemo ullamco in dignissimos labore irure harum nihil perferendis ut ratione et deleniti ut eveniet.', '2015-02-10 07:04:13', '2015-02-10 07:04:13', NULL, NULL),
(2, 3, 436471261, 'Suscipit vero quisquam aut illum enim minim atque eos pariatur Sequi laboris minima eligendi eum cillum et similique unde exercitationem', 500, 475, 'Quis ullamco et dolore veniam, deserunt neque ipsa, eaque excepturi consequat. Eaque autem animi, nobis sint, aut voluptate consequuntur.', '2015-02-10 12:20:54', '2015-02-10 12:20:54', NULL, NULL),
(3, 3, 648109148, 'Quasi quidem reiciendis facilis esse est vero mollitia modi modi nulla accusamus accusamus unde', 500, 6296, 'Quia voluptas elit, rerum quis laboriosam, ad et autem tempora laborum. Esse quidem mollitia vero minima eiusmod et tempore, sint.', '2015-02-10 13:46:38', '2015-02-10 13:46:38', NULL, NULL),
(4, 3, 288043456, 'Hic eum dignissimos quis temporibus eius commodo nobis autem', 500, 200, 'Suscipit cupidatat atque minim elit, quaerat id debitis incididunt laborum. Sed ullam vero inventore officia est autem.', '2015-02-10 13:51:42', '2015-02-10 13:51:42', NULL, NULL),
(5, 3, 868546916, 'Non corporis commodo expedita laboriosam obcaecati doloremque tempora et explicabo Doloribus aut commodi quis ullamco dolores in ipsam', 500, 2100, 'In et quod et laborum. Ducimus, neque ea sit et sit debitis neque ut neque exercitation magnam.', '2015-02-10 13:53:13', '2015-02-10 13:53:13', NULL, NULL);

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
  `price` double NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `product_id`, `cart_id`, `date`, `quantity`, `price`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 12, 6, 1, '2015-02-10 07:04:13', 9, 1899, '2015-02-10 07:04:13', NULL, NULL),
(2, 12, 7, 1, '2015-02-10 07:04:13', 7, 1599, '2015-02-10 07:04:13', NULL, NULL),
(3, 3, 2, 2, '2015-02-10 12:20:55', 1, 200, '2015-02-10 12:20:55', NULL, NULL),
(4, 3, 1, 2, '2015-02-10 12:20:55', 1, 275, '2015-02-10 12:20:55', NULL, NULL),
(5, 3, 10, 3, '2015-02-10 13:46:38', 3, 1499, '2015-02-10 13:46:38', NULL, NULL),
(6, 3, 8, 3, '2015-02-10 13:46:38', 1, 1799, '2015-02-10 13:46:38', NULL, NULL),
(7, 3, 2, 4, '2015-02-10 13:51:42', 1, 200, '2015-02-10 13:51:42', NULL, NULL),
(8, 3, 22, 5, '2015-02-10 13:53:13', 3, 700, '2015-02-10 13:53:13', NULL, NULL);

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
