-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: sql210.epizy.com
-- Generation Time: Mar 12, 2018 at 11:05 PM
-- Server version: 5.6.35-81.0
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `epiz_21467689_frontside`
--

-- --------------------------------------------------------

--
-- Table structure for table `fs_admin`
--

CREATE TABLE IF NOT EXISTS `fs_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `dp_name` varchar(255) NOT NULL,
  `dp_path` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `fs_admin`
--

INSERT INTO `fs_admin` (`id`, `username`, `password`, `fname`, `lname`, `dp_name`, `dp_path`) VALUES
(1, 'fs.edausan', 'fs.niced0215', 'Edmar', 'Dausan', 'edmar.jpg', 'images/admin-dp/edmar.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `fs_graphics`
--

CREATE TABLE IF NOT EXISTS `fs_graphics` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `path` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `fs_graphics`
--

INSERT INTO `fs_graphics` (`id`, `title`, `filename`, `description`, `path`) VALUES
(8, 'banner', 'banner ss.png', 'banner ss', 'images/graphics/banner ss.png'),
(9, 'banner', 'banner3.jpg', 'banner ss', 'images/graphics/banner3.jpg'),
(10, 'sample title', '4dl.png', 'sample description', 'images/graphics/4dl.png'),
(11, 'Screenshot', 'shipbill notepng.png', 'screenshot description', 'images/graphics/shipbill notepng.png'),
(12, 'Edmar Dausan', 'dp.jpg', 'Profile Picture', 'images/graphics/dp.jpg'),
(13, 'Sam sam and ako', 'orca-image-1517667861941.jpg_1517667862065.jpeg', 'Yeah', 'images/graphics/orca-image-1517667861941.jpg_1517667862065.jpeg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
