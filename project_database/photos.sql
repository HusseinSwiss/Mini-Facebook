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
-- Table structure for table `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `photoId` int(11) NOT NULL AUTO_INCREMENT,
  `photoName` text NOT NULL,
  `photoSrc` text NOT NULL,
  `photoAlbum` int(11) NOT NULL,
  `photoUid` int(11) NOT NULL,
  PRIMARY KEY (`photoId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`photoId`, `photoName`, `photoSrc`, `photoAlbum`, `photoUid`) VALUES
(1, 'ss', 'vlcsnap-67772.png', 0, 2),
(2, 's', 'vlcsnap-67629.png', 0, 2),
(3, 'r', 'vlcsnap-66151.png', 0, 2),
(5, '', '', 4, 2),
(6, 'ghj', 'Penguins.jpg', 4, 2),
(7, 'ghj', 'Tulips.jpg', 5, 2);
