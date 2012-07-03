-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 03, 2012 at 08:39 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `id` int(11) NOT NULL COMMENT 'Element ID',
  `title` varchar(50) COLLATE utf8_bin NOT NULL COMMENT 'Title',
  `authorName` varchar(50) COLLATE utf8_bin NOT NULL COMMENT 'Author name',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `authorName`) VALUES
(1, 'Harry Potter', 'rk Rolling '),
(5, 'Max Pain', 'Pitt Murphy');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) COLLATE utf8_bin NOT NULL COMMENT 'First Name',
  `lastName` varchar(50) COLLATE utf8_bin NOT NULL COMMENT 'Last Name',
  `username` varchar(16) COLLATE utf8_bin NOT NULL COMMENT 'username',
  `password` int(16) NOT NULL COMMENT 'password',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `username`, `password`) VALUES
(0, 'Yaniv1', 'Testing', 'yaniv2', 121212),
(2, 'Tester', 'Tester', 'tester', 123123),
(6, 'Yaniv', 'Rozany', 'yaniv1', 123123);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
