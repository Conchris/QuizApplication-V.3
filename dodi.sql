-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 24, 2019 at 11:50 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dodi`
--

-- --------------------------------------------------------

--
-- Table structure for table `arriere`
--

DROP TABLE IF EXISTS `arriere`;
CREATE TABLE IF NOT EXISTS `arriere` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `arriere`
--

INSERT INTO `arriere` (`id`, `username`, `email`, `password`) VALUES
(22, 'kabeyadodi', 'dodi@kabeya.com', 'kabeyadodi'),
(21, 'jl23', 'jl23@gmail.com', '30061996'),
(20, 'christine', 'christine@kabeya.com', '27121960'),
(19, 'constantin', 'constantin@kabeya.com', '27081950'),
(18, 'don', 'don@kabeya.com', '21705825'),
(17, 'dodi kabeya', 'dodi.kabeya.30@gmail.com', '14041998');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
