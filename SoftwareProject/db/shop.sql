-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2019 at 02:40 PM
-- Server version: 5.5.34
-- PHP Version: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brands`
--

CREATE TABLE IF NOT EXISTS `tbl_brands` (
  `brandId` int(11) NOT NULL AUTO_INCREMENT,
  `brandName` varchar(50) NOT NULL,
  PRIMARY KEY (`brandId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_brands`
--

INSERT INTO `tbl_brands` (`brandId`, `brandName`) VALUES
(1, 'Samsung'),
(2, 'Apple'),
(3, 'Acer'),
(4, 'MSI'),
(5, 'Huawei');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
  `categoryId` int(11) NOT NULL AUTO_INCREMENT,
  `categoryName` varchar(50) NOT NULL,
  PRIMARY KEY (`categoryId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`categoryId`, `categoryName`) VALUES
(1, 'Laptop'),
(2, 'Smartphone');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE IF NOT EXISTS `tbl_products` (
  `productId` int(11) NOT NULL AUTO_INCREMENT,
  `productName` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `img` varchar(150) NOT NULL,
  `brandId` int(11) NOT NULL,
  `categoryId` int(11) NOT NULL,
  PRIMARY KEY (`productId`),
  KEY `brandId` (`brandId`),
  KEY `categoryId` (`categoryId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`productId`, `productName`, `price`, `img`, `brandId`, `categoryId`) VALUES
(2, 'Samsung Galaxy S9+', '599.00', 'img/Samsung/samsung-galaxy-s9-plus.jpg', 1, 2),
(3, 'Samsung Galaxy S10+', '899.00', 'img/Samsung/samsung-galaxy-s10-plus-new.jpg', 1, 2),
(4, 'Samsung Galaxy A40', '259.00', 'img/Samsung/samsung-galaxy-a40.jpg', 1, 2),
(7, 'MSI GF72 8RD-031 17.3" FHD Core i5-8300H', '999.00', 'img/MSI/MSI-laptop.jpg', 4, 1),
(8, 'Acer TravelMate P449-G3-M-57EE 14" HD Core i5-8250', '759.00', 'img/Acer/acer-laptop.png', 3, 1),
(9, 'MSI GL73 8SE-025 17.3" FHD Core i7-8750H', '1799.00', 'img/MSI/MSI-Laptop-2.jpg', 4, 1),
(10, 'iPhone XR', '799.00', 'img/apple-iphone-xr-new.jpg', 2, 2),
(11, 'iPhone XS', '1039.00', 'img/apple-iphone-xs-new.jpg', 2, 2),
(12, 'iPhone XS Max', '1149.00', 'img/apple-iphone-xs-max-new1.jpg', 2, 2),
(15, 'Huawei P30 Pro', '939.00', 'img/huawei-p30-pro.jpg', 5, 2),
(16, 'Huawei P20 Pro', '569.00', 'img/huawei-p20-pro-.jpg', 5, 2),
(18, 'Huawei Mate 20 Pro', '889.00', 'img/huawei-mate-20-pro-1.jpg', 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `userType` varchar(50) NOT NULL,
  `img` varchar(150) NOT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`userId`, `username`, `password`, `userType`, `img`) VALUES
(1, 'admin', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Administrator', ''),
(4, 'malcolm220799', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'user', ''),
(5, 'malcolm220799', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'user', '');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD CONSTRAINT `tbl_products_ibfk_1` FOREIGN KEY (`brandId`) REFERENCES `tbl_brands` (`brandId`),
  ADD CONSTRAINT `tbl_products_ibfk_2` FOREIGN KEY (`categoryId`) REFERENCES `tbl_category` (`categoryId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
