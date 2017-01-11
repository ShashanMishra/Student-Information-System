-- phpMyAdmin SQL Dump
-- version 3.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 15, 2015 at 09:29 AM
-- Server version: 5.1.30
-- PHP Version: 5.2.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `apple`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `uname` varchar(100) DEFAULT NULL,
  `uaddress` varchar(100) DEFAULT NULL,
  `udob` date DEFAULT NULL,
  `ugender` char(10) DEFAULT NULL,
  `ucontact` varchar(100) DEFAULT NULL,
  `uid` varchar(199) NOT NULL,
  `upassword` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uname`, `uaddress`, `udob`, `ugender`, `ucontact`, `uid`, `upassword`) VALUES
('akash', 'allahabad', '2015-12-31', 'male', '45454645', 'akash@gmail.com', 'allahabad'),
('ali Ahmad', 'KAnpur', '2014-12-19', 'male', '756765756765', 'ali009@gmail.com', 'allahabad'),
('Manoj Kumar', 'allahabad', '2015-12-30', 'male', '5453534534', 'manu09909@gmail.com', '54543543'),
('mudit', 'allahabad', '1983-11-30', 'male', '9944433333', 'mudit@gmail.com', '81d32773914f5810f21d551437348273a84c6a6d');
