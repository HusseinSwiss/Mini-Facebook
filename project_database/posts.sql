-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 29, 2012 at 01:26 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `postfor` text NOT NULL,
  `posttxt` text NOT NULL,
  `date` text NOT NULL,
  `time` text NOT NULL,
  `uid` int(11) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`pid`, `postfor`, `posttxt`, `date`, `time`, `uid`) VALUES
(1, '0', '0', 'Fri 27-Jul-2012', '08:15:52', 2),
(2, 'hussein', 'ssssss', 'Fri 27-Jul-2012', '08:17:23', 2),
(3, 'hussein', 'gfgh', 'Fri 27-Jul-2012', '08:21:36', 2),
(4, 'hussein', 'f', 'Fri 27-Jul-2012', '08:21:45', 2),
(5, 'hussein', 'ddd', 'Fri 27-Jul-2012', '08:22:48', 2),
(6, 'hassan', 'rtyrt', 'Fri 27-Jul-2012', '08:33:42', 1),
(7, 'hassan', 'rtyrt', 'Fri 27-Jul-2012', '08:33:45', 1),
(8, 'hassan', 'rtyrt', 'Fri 27-Jul-2012', '08:33:49', 1),
(9, 'hassan', 'rtyrt', 'Fri 27-Jul-2012', '08:33:51', 1),
(10, 'hassan1', 'dggfs', 'Fri 27-Jul-2012', '08:34:36', 3),
(11, 'hassan1', 'dggfsdsfg', 'Fri 27-Jul-2012', '08:34:39', 3);
