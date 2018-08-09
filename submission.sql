-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 29, 2017 at 06:31 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `submission`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL auto_increment,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin101', 'admin'),
(2, 'admin002', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `id` int(100) NOT NULL auto_increment,
  `assno` varchar(30) NOT NULL,
  `coursecode` varchar(30) NOT NULL,
  `file` text NOT NULL,
  `time` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `status` varchar(30) NOT NULL default 'pending',
  `matricno` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`id`, `assno`, `coursecode`, `file`, `time`, `status`, `matricno`) VALUES
(1, 'Assignment 1', 'com 212', 'assignment/TROUBLESHOOTING2.docx', '2017-08-20 02:28:47', '7', 'HCSF/16/0001'),
(2, 'Assignment 1', 'COM 111', 'assignment/QUESTIONS.docx', '2017-08-11 14:44:01', '7', 'NCSF/15/0047'),
(3, 'Assignment 1', 'com412', 'assignment/ASM.docx', '2017-08-20 17:29:57', 'pending', 'hcsf/15/0001'),
(4, 'Assignment 1', 'com 412', 'assignment/ASM.docx', '2017-08-20 17:38:29', '60', 'hcsf/15/0001'),
(5, 'Assignment 1', 'com 412', 'assignment/e-commerce.docx', '2017-08-20 17:43:49', '10', 'Hcsf/15/0002'),
(6, 'Assignment 1', 'com 211', 'assignment/e-commerce.docx', '2017-08-21 14:43:31', '25', 'ncsf/15/0048'),
(7, 'Assignment 5', 'com 214', 'assignment/STUDENT_INFORMATION_MANAGEMENT_SYSTEM.docx', '2017-08-21 16:33:59', 'pending', 'ncsf/15/0048');

-- --------------------------------------------------------

--
-- Table structure for table `course_code`
--

CREATE TABLE `course_code` (
  `id` int(100) NOT NULL auto_increment,
  `coursecode` varchar(100) NOT NULL,
  `level` varchar(30) NOT NULL,
  `coursetitle` varchar(50) NOT NULL,
  `units` varchar(3) NOT NULL,
  `semester` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `course_code`
--

INSERT INTO `course_code` (`id`, `coursecode`, `level`, `coursetitle`, `units`, `semester`) VALUES
(1, 'com 111', 'ND I', 'introdudction to computer', '3', 'FIRST SEMESTER'),
(2, 'com 112', 'ND I', 'introduction to digital electronic', '3', 'FIRST SEMESTER'),
(3, 'com 113', 'ND I', 'introduction to progamming', '3', 'FIRST SEMESTER'),
(4, 'sta 111', 'ND I', 'descriptive stastistics', '2', 'FIRST SEMESTER'),
(5, 'mth 111', 'ND I', 'logic and linear algebric', '2', 'FIRST SEMESTER'),
(6, 'com 211', 'ND II', 'computer programming using oobasic', '3', 'FIRST SEMESTER'),
(7, 'com 212', 'ND II', 'introduction to system programming', '3', 'FIRST SEMESTER'),
(8, 'com 214', 'ND II', 'file organisation and management', '2', 'FIRST SEMESTER'),
(9, 'com 215', 'ND II', 'computer package 11', '3', 'FIRST SEMESTER'),
(10, 'com 216', 'ND II', 'computer system troubleshooting 1', '2', 'FIRST SEMESTER'),
(11, 'com311', 'HND I', 'operating system 1', '3', 'FIRST SEMESTER'),
(12, 'com 312', 'HND I', 'database design 1', '3', 'FIRST SEMESTER'),
(13, 'com313', 'HND I', 'computer programming using c++', '3', 'FIRST SEMESTER'),
(14, 'com 314', 'HND I', 'computer achitecture', '3', 'FIRST SEMESTER'),
(15, 'com 315', 'HND I', 'web development &design using drupal', '3', 'FIRST SEMESTER'),
(16, 'com 412', 'HND II', 'computer programming (oopascal)', '3', 'FIRST SEMESTER'),
(17, 'com 413', 'HND II', 'project management', '3', 'FIRST SEMESTER'),
(18, 'com 414', 'HND II', 'compiler construction', '3', 'FIRST SEMESTER'),
(19, 'com 415', 'HND II', 'data communication and network', '3', 'FIRST SEMESTER'),
(20, 'com 416', 'HND II', 'multimeedia', '3', 'FIRST SEMESTER');

-- --------------------------------------------------------

--
-- Table structure for table `lectural_reg`
--

CREATE TABLE `lectural_reg` (
  `id` int(100) NOT NULL auto_increment,
  `firstname` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `othername` varchar(30) NOT NULL,
  `phonenumber` varchar(30) NOT NULL,
  `coursecode` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `image` varchar(100) NOT NULL default 'image/img.png',
  `title` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL default '1111',
  `level` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `lectural_reg`
--

INSERT INTO `lectural_reg` (`id`, `firstname`, `surname`, `othername`, `phonenumber`, `coursecode`, `email`, `image`, `title`, `password`, `level`) VALUES
(1, 'Segun', 'Awonowo', 'sodiq', '09098786778', 'com 211', 'awonowo@gmail.com', 'image/img.png', 'Mr', '1111', 'ND II');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(100) NOT NULL auto_increment,
  `message` text NOT NULL,
  `sender` varchar(30) NOT NULL,
  `reciever` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `message`, `sender`, `reciever`) VALUES
(1, 'your assignment no 1 is \r\nWRITE A FORTRAN PROGRAM TO PRINT 1 - 100\r\nTO BE SUBMITTED ON THE 12-08-2017 TIME:10:00AM', 'COM 211', 'ND II'),
(2, 'YOU NO 2 ASSIGNMENT\r\n\r\nWRITE A FORTRAN PROGRAM TO ACCEPT AND PRINT THE LARGEST AMONG TO NUMBERS', 'COM 211', 'ND II'),
(3, 'when are we submitting our assignment', 'NCSF/15/0048', 'Mutolib'),
(4, 'how are you', 'COM 211', 'NCSF/15/0048'),
(5, 'how far', 'NCSF/15/0048', 'NCSF/15/0001'),
(6, 'good day sir', 'NCSF/15/0001', 'Mutolib'),
(7, 'how far my guy', 'NCSF/15/0001', 'NCSF/15/0048'),
(8, 'Your Assignment 1 question is :\r\nKindly write a java program to print  1- 1000\r\nDate: 12-08-2017\r\nTime: 10:00am <br>\r\nThanks', 'COM 212', 'ND II'),
(9, 'Good day sir <br>\r\nAm trying to submit my assignment but it is declined<br>\r\nPls am looking forward for your help<br>\r\nThanks', 'NCSF/15/0048', 'Abdul hammed'),
(41, 'hellow', 'COM 211', 'ND II'),
(42, 'gi', 'COM 211', 'HCSF/16/0001'),
(43, 'hi', 'COM 211', 'NCSF/15/0048'),
(44, '', '', ''),
(45, 'hellow admin', 'COM 211', 'admin101'),
(46, 'hellow', 'admin002', 'COM 111'),
(47, 'hellow admin', 'COM 111', 'admin002'),
(48, 'good day sir', 'HCSF/16/0001', 'Aluko'),
(49, 'hiii', 'COM 111', 'NCSF/15/0047'),
(50, 'submit your assignment tommorrow', 'com 412', 'HND II'),
(51, 'hieii\r\n', 'hcsf/15/0001', 'Hcsf/15/0002');

-- --------------------------------------------------------

--
-- Table structure for table `student_reg`
--

CREATE TABLE `student_reg` (
  `id` int(100) NOT NULL auto_increment,
  `surname` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `othername` varchar(30) NOT NULL,
  `matricno` varchar(30) NOT NULL,
  `level` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `image` varchar(30) NOT NULL default 'image/img.png',
  `password` varchar(30) NOT NULL default '12345',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `student_reg`
--

INSERT INTO `student_reg` (`id`, `surname`, `firstname`, `othername`, `matricno`, `level`, `email`, `image`, `password`) VALUES
(1, 'Ibrahim', 'Yusuf', 'Olamide', 'ncsf/16/0001', 'ND I', 'yusuf@gmail.com', 'image/img.png', '12345'),
(2, 'adekunle', 'gbenga', 'daniel', 'Ncsf/16/0002', 'ND I', 'adekunle@gmail.com', 'image/img.png', '12345'),
(3, 'Olatunde', 'Bolaji', 'Akin', 'Ncsf/16/0003', 'ND I', 'bolaji@gmail.com', 'image/img.png', '12345'),
(4, 'Deinde', 'Yasar', 'Adebayo', 'ncsf/15/0048', 'ND II', 'deindeyasar@gmail.com', 'image/img.png', '12345');
