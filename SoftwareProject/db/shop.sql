-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2019 at 07:54 AM
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
-- Table structure for table `tbl_books`
--

CREATE TABLE IF NOT EXISTS `tbl_books` (
  `bookId` int(11) NOT NULL AUTO_INCREMENT,
  `author` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `publisher` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `img` varchar(150) NOT NULL,
  PRIMARY KEY (`bookId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_books`
--

INSERT INTO `tbl_books` (`bookId`, `author`, `title`, `price`, `publisher`, `category`, `img`) VALUES
(7, 'Asimov', 'Nightfall', '10.00', 'Bantam', 'Science Fiction', 'img/nightfall.jpg'),
(8, 'Clancy', 'Patriot Games', '4.95', 'Berkley', 'Thriller', 'img/patriot.JPG'),
(9, 'Clarke', '2010', '3.95', 'Ballantine', 'Science Fiction', 'img/2010.jpg');

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
(4, 'malcolm220799', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'user', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
