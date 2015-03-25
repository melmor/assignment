-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 23, 2015 at 03:31 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `pc_db`
--

CREATE TABLE IF NOT EXISTS `pc_db` (
  `staff_id` varchar(30) DEFAULT NULL,
  `group_id` varchar(10) DEFAULT NULL,
  `prj_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pc_db`
--

INSERT INTO `pc_db` (`staff_id`, `group_id`, `prj_name`) VALUES
('101', 'G-101', 'pr1'),
('101', 'G-1011', 'pr2');

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE IF NOT EXISTS `user_detail` (
  `username` varchar(30) DEFAULT NULL,
  `pwd` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `us_name` varchar(30) DEFAULT NULL,
  `user_type` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`username`, `pwd`, `email`, `us_name`, `user_type`) VALUES
('j', 'j', 'j', 'j', NULL),
('', '', '', '', NULL),
('', '', '', '', NULL),
('', '', '', '', NULL),
('', '', '', '', NULL),
('', '', '', '', NULL),
('', '', '', '', NULL),
('', '', '', '', NULL),
('', '', '', '', NULL),
('', '', '', '', NULL),
('', '', '', '', NULL),
('', '', '', '', NULL),
('', '', '', '', NULL),
('', 'abcd', 'garvit1608@gmail.com', 'garvit', NULL),
('utkarsh', 'rai', 'utk', 'utkarsh', NULL),
('aditya', 'gau', 'ad', 'aditya', NULL),
('aditya', 'a', 'ad', 'aditya', NULL),
('b', 'b', 'b', 'b', NULL),
('b', 'b', 'b', 'b', NULL),
('b', 'm', 'b', 'b', NULL),
('b', 'b', 'b', 'b', NULL),
('b', '', 'b', 'b', NULL),
('b', '', 'b', 'b', NULL),
('garvit1608', 'garvit', 'shrigarvit@rediffmail.com', 'garvit', NULL),
('utkarsh003', 'abcd', 'utkarsh@gmail.com', 'utkarsh', NULL),
('fds', '', 'ds', '', NULL),
('dfv', 'nn', 'vc', ',kk', NULL),
('', '', '', '', NULL),
('cxcd', 'd', 'c', 'fdsfd', NULL),
('ll', 'XC', 'shrigarvit@rediffmail.com', 'c', ''),
('ll', 'c', 'shrigarvit@rediffmail.com', 'c', 'PC'),
('nn', 'z', 'shrigarvit@rediffmail.com', 'xxxxzx', 'PC'),
('nn', 'mm', 'shrigarvit@rediffmail.com', 'xxxxzx', 'PC');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
