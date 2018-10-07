-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 07, 2018 at 03:02 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resume`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `phone_number` varchar(14) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(300) NOT NULL,
  `email_address` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

DROP TABLE IF EXISTS `education`;
CREATE TABLE IF NOT EXISTS `education` (
  `institute1` varchar(50) NOT NULL,
  `degree1` varchar(30) NOT NULL,
  `date_from1` varchar(30) NOT NULL,
  `date_to1` varchar(30) NOT NULL,
  `details1` varchar(200) NOT NULL,
  `institute2` varchar(50) NOT NULL,
  `degree2` varchar(30) NOT NULL,
  `date_from2` varchar(30) NOT NULL,
  `date_to2` varchar(30) NOT NULL,
  `details2` varchar(200) NOT NULL,
  `email_address` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `exp_details`
--

DROP TABLE IF EXISTS `exp_details`;
CREATE TABLE IF NOT EXISTS `exp_details` (
  `company1` varchar(50) NOT NULL,
  `design1` varchar(50) NOT NULL,
  `datefrom1` varchar(30) NOT NULL,
  `dateto1` varchar(30) NOT NULL,
  `details1` varchar(200) NOT NULL,
  `company2` varchar(50) NOT NULL,
  `design2` varchar(50) NOT NULL,
  `datefrom2` varchar(30) NOT NULL,
  `dateto2` varchar(30) NOT NULL,
  `details2` varchar(200) NOT NULL,
  `email_address` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

DROP TABLE IF EXISTS `skills`;
CREATE TABLE IF NOT EXISTS `skills` (
  `skills` varchar(200) NOT NULL,
  `hobbies` varchar(200) NOT NULL,
  `extra` varchar(200) NOT NULL,
  `email_address` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

DROP TABLE IF EXISTS `user_table`;
CREATE TABLE IF NOT EXISTS `user_table` (
  `username` varchar(40) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
