-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 30, 2018 at 06:58 PM
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
-- Database: `tutor`
--

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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_tutor`
--

INSERT INTO `add_tutor` (`id`, `name`, `email`, `number`, `teaching`, `address`, `subject`) VALUES
(1, 'tejas', 'tejask@gmail.com', '9886750312', '12', 'kumta', 'Chemistry'),
(2, 'efv', 'ervfvestvgeg@gmail.com', '9886750312', '12', 'heirfvnkdsjfn', 'Chemistry'),
(3, 'sbdkcn', 'tk@gmail.com', '9886750312', '15', 'bangalore', 'Chemistry');

-- --------------------------------------------------------

--
-- Table structure for table `ajax`
--

DROP TABLE IF EXISTS `ajax`;
CREATE TABLE IF NOT EXISTS `ajax` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ajax`
--

INSERT INTO `ajax` (`id`, `address`) VALUES
(7, 'malpe'),
(2, 'bangalore'),
(3, 'surathkal'),
(4, 'zimbabwe'),
(5, 'nalgunda'),
(6, 'mangalore'),
(8, 'kankannady');

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
  `password` varchar(40) NOT NULL,
  `institute_name` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `username`, `mobile`, `password`, `institute_name`) VALUES
(1, 'tejas', 'tejask', '9886750312', 'tejaskumar', 'IITK'),
(2, 'anil', 'anil', '9739368139', 'kumar', 'JCR'),
(3, 'jayant', 'jay', '9739368139', 'hello', 'JCR'),
(4, 'sumanth', 'sum', '9739368139', 'kiran', 'JCR'),
(5, 'ajay', 'kat', '9886750312', 'kumar', 'NITK'),
(6, 'ethin', 'ethin', '9739368138', 'naik', 'SVEC');

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

DROP TABLE IF EXISTS `tutor`;
CREATE TABLE IF NOT EXISTS `tutor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `number` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `teaching` int(100) NOT NULL,
  `address` varchar(40) NOT NULL,
  `subject` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`id`, `name`, `number`, `password`, `email`, `teaching`, `address`, `subject`) VALUES
(13, 'tejas', '9886750312', 'machale', 'tejas@gmail.com', 5, 'bangalore', 'hindi'),
(14, 'kumar', '9886750312', 'tejaskuamrk', 'tejas@gmail.com', 5, 'surathkal', 'hindi'),
(1, 'tushar', '9739368139', 'hello', 'tushar@gmail.com', 23, 'surathkal', 'hindi'),
(17, 'tejaskumar', '9886750312', 'haldara', 'tejaskumark11@gmail.com', 14, 'bangalore', 'kannada'),
(18, 'tejaskumar', '9886750312', 'haldara', 'tejaskumark11@gmail.com', 14, 'Bangalore', 'kannada'),
(19, 'tejaskumar', '9886750312', 'haldara', 'tejaskumark11@gmail.com', 14, 'Bangalore', 'kannada'),
(20, 'tejaskumar', '9886750312', 'haldara', 'tejaskumark11@gmail.com', 14, 'Bangalore', 'kannada'),
(22, 'tejas', '9886750312', 'tejaskumar', 'tejasnitk@gmail.com', 14, 'zimbabwe', 'kannada'),
(23, 'Uma', '9739368139', 'tejask', 'tk@gmail.com', 12, 'chitradurga', 'Chemistry'),
(24, 'tejass', '96632155445', 'tejask', 'tk@gmail.com', 15, 'nalgunda', 'Bio-logy'),
(25, 'efv', '9886750312', 'karnatak', 'ervfvestvgeg@gmail.com', 12, 'heirfvnkdsjfn', 'Chemistry');

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
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutor_request`
--

INSERT INTO `tutor_request` (`id`, `gurdian_name`, `gurdian_mobile`, `email`, `subject`, `teaching`, `area`) VALUES
(1, 'ajitkumar', '9886750322', 'N/A', 'Mathematics', '2', 'udupi'),
(2, 'scindia', '9886665525', 'N/A', 'Geography', '8', 'dvg'),
(3, 'Tejas kumar k', '9886750312', 'N/A', '', '9', 'karnataka'),
(4, 'sunilkumar', '9342205908', 'N/A', 'History', '1', 'chitradurga'),
(5, 'jayant', '9886750312', 'N/A', 'Kannada', '5', 'hosabettu');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `usertype` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `usertype`) VALUES
(1, 'tejasnitk@gmail.com', 'tejaskumar', 'teacher'),
(2, 'tejask', 'tejaskumar', 'student'),
(3, 'kumark', 'hellohello', 'student'),
(4, 'tejask', 'tejask', 'student'),
(5, 'tejask', 'kumark', 'student'),
(6, 'tejask', 'tejask', 'student'),
(7, 'kumark', 'kumark', 'student'),
(8, 'tk@gmail.com', 'tejask', 'teacher'),
(9, 'admin@admin.com', 'admin', 'admin'),
(10, 'tk@gmail.com', 'tejask', 'teacher');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
