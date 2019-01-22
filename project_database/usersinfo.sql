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
-- Table structure for table `usersinfo`
--

CREATE TABLE IF NOT EXISTS `usersinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dob` text NOT NULL,
  `tele` text NOT NULL,
  `country` text NOT NULL,
  `name` text NOT NULL,
  `pass` text NOT NULL,
  `photo` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `usersinfo`
--

INSERT INTO `usersinfo` (`id`, `dob`, `tele`, `country`, `name`, `pass`, `photo`) VALUES
(1, '12/12/1212', '(00)000000', 'beirut', 'hassan', 'hhhh$hhhh', 'vlcsnap-65015.png'),
(2, '11/11/1111', '(00)000000', 'tuh', 'hussein', 'hhhh$hhhh', 'vlcsnap-67772.png'),
(3, '12/12/1212', '(00)000000', 'dfg', 'hassan1', 'hhhh$hhhh', '');
