-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 07, 2018 at 11:48 AM
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
-- Database: `student`
--
CREATE DATABASE IF NOT EXISTS `student` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `student`;

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

DROP TABLE IF EXISTS `info`;
CREATE TABLE IF NOT EXISTS `info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `age` int(100) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `name`, `username`, `age`, `mobile`, `password`) VALUES
(5, 'sre', 'fyhbhjjkl', 56, '9886750312', 'tejaskumar');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'fyhbhjjkl', 'tejaskumar'),
(2, 'tejas', 'kumar');
--
-- Database: `tejas`
--
CREATE DATABASE IF NOT EXISTS `tejas` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tejas`;

-- --------------------------------------------------------

--
-- Table structure for table `hello`
--

DROP TABLE IF EXISTS `hello`;
CREATE TABLE IF NOT EXISTS `hello` (
  `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hello`
--

INSERT INTO `hello` (`id`, `email`) VALUES
(1, 'svasv'),
(2, 'tejaskumark11@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `myguests`
--

DROP TABLE IF EXISTS `myguests`;
CREATE TABLE IF NOT EXISTS `myguests` (
  `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nkjnc`
--

DROP TABLE IF EXISTS `nkjnc`;
CREATE TABLE IF NOT EXISTS `nkjnc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` blob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
--
-- Database: `tutor`
--
CREATE DATABASE IF NOT EXISTS `tutor` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tutor`;

-- --------------------------------------------------------

--
-- Table structure for table `add_tutor`
--

DROP TABLE IF EXISTS `add_tutor`;
CREATE TABLE IF NOT EXISTS `add_tutor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `number` varchar(40) NOT NULL,
  `teaching` varchar(40) NOT NULL,
  `address` varchar(40) NOT NULL,
  `subject` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_tutor`
--

INSERT INTO `add_tutor` (`id`, `name`, `email`, `number`, `teaching`, `address`, `subject`) VALUES
(10, 'Tejas', 'tejasnitk@gmail.com', '9886750312', '14', 'Bangalore', 'Mathematics');

-- --------------------------------------------------------

--
-- Table structure for table `ajax`
--

DROP TABLE IF EXISTS `ajax`;
CREATE TABLE IF NOT EXISTS `ajax` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ajax`
--

INSERT INTO `ajax` (`id`, `address`) VALUES
(14, 'Bangalore');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `mobile` varchar(40) NOT NULL,
  `password` varchar(500) NOT NULL,
  `institute_name` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `username`, `mobile`, `password`, `institute_name`) VALUES
(11, 'tejas kumar', 'Tejas11', '9739368139', '$2y$10$fuyaNiOBT8jgD5rpykiTX.zXTEmsn0nyMY7qxXMN1nyYEL/V7J9rO', '14'),
(12, 'wefjcknm ,', 'wjbhcnm ', '9884556666', '$2y$10$vVUcgyezQK5wM76QO6mRweLLLtqhr0sSYofm0lRttj32N1GrxzSPS', '47');

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

DROP TABLE IF EXISTS `tutor`;
CREATE TABLE IF NOT EXISTS `tutor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `number` varchar(40) NOT NULL,
  `password` varchar(90) NOT NULL,
  `email` varchar(30) NOT NULL,
  `teaching` int(100) NOT NULL,
  `address` varchar(40) NOT NULL,
  `subject` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`id`, `name`, `number`, `password`, `email`, `teaching`, `address`, `subject`) VALUES
(33, 'Tejas', '9886750312', '$2y$10$ZD7skOQXWxR0g25GK91zfumWH.tVS4JLDE5oNR2/qKAMg7rMNoLOi', 'tejasnitk@gmail.com', 14, 'Bangalore', 'Mathematics');

-- --------------------------------------------------------

--
-- Table structure for table `tutor_request`
--

DROP TABLE IF EXISTS `tutor_request`;
CREATE TABLE IF NOT EXISTS `tutor_request` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gurdian_name` varchar(40) NOT NULL,
  `gurdian_mobile` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `subject` varchar(40) NOT NULL,
  `teaching` varchar(40) NOT NULL,
  `area` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(40) NOT NULL,
  `password` varchar(90) NOT NULL,
  `usertype` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `usertype`) VALUES
(25, 'wjbhcnm ', '$2y$10$vVUcgyezQK5wM76QO6mRweLLLtqhr0sSYofm0lRttj32N1GrxzSPS', 'student'),
(24, 'Tejas11', '$2y$10$fuyaNiOBT8jgD5rpykiTX.zXTEmsn0nyMY7qxXMN1nyYEL/V7J9rO', 'student'),
(23, 'tejasnitk@gmail.com', '$2y$10$ZD7skOQXWxR0g25GK91zfumWH.tVS4JLDE5oNR2/qKAMg7rMNoLOi', 'teacher');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
