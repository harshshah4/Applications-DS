-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2014 at 09:37 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `sno` varchar(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`sno`, `name`, `password`) VALUES
('1', 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `javatablejsp`
--

CREATE TABLE IF NOT EXISTS `javatablejsp` (
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `sno` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `javatablejsp`
--

INSERT INTO `javatablejsp` (`username`, `password`, `sno`) VALUES
('admin', 'aaaaa', '1'),
('admin', 'aaaaa', '1');

-- --------------------------------------------------------

--
-- Table structure for table `opform`
--

CREATE TABLE IF NOT EXISTS `opform` (
  `name` varchar(30) NOT NULL,
  `regno` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `dept` varchar(30) NOT NULL,
  `course` varchar(30) NOT NULL,
  `blockno` varchar(10) NOT NULL,
  `roomno` varchar(10) NOT NULL,
  `applydate` date NOT NULL,
  `place` varchar(30) NOT NULL,
  `addr` varchar(30) NOT NULL,
  `days` varchar(30) NOT NULL,
  `leaveout` date NOT NULL,
  `outtime` varchar(20) NOT NULL,
  `returnsss` date NOT NULL,
  `intime` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `parents` varchar(30) NOT NULL,
  `parentsno` varchar(20) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'Pending(Requested)',
  `statusreturnsss` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sgnup`
--

CREATE TABLE IF NOT EXISTS `sgnup` (
  `name` varchar(30) NOT NULL,
  `fathername` varchar(30) NOT NULL,
  `regnums` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `cpassword` varchar(60) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `course` varchar(10) NOT NULL,
  `state` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `pin` varchar(8) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `dob` text NOT NULL,
  `mobileno` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
