-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 19, 2017 at 01:59 AM
-- Server version: 5.5.54-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tbh`
--

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

CREATE TABLE IF NOT EXISTS `buy` (
  `name` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `title` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `department` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `subject` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `price` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `semester` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `email ID` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `contact` varchar(20) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `buy`
--

INSERT INTO `buy` (`name`, `title`, `department`, `subject`, `price`, `semester`, `email ID`, `contact`) VALUES
('Abhinav Agrawal', 'Differential Calculus', 'ICT', 'Maths', '200', '1', 'abhinav@thebookhub.in', '9916903100'),
('Mayank Jain', 'Drafter', 'E.G.', 'E.G.', '200', '1/2', 'mayank@meanmetalmotors.com', '8884974100'),
('Aman Poddar', 'DSC part 1', 'MATHS', 'Maths', '120', '1', 'poddaraman2012@gmail.com', '07795179977'),
('Aman Poddar', 'DSC part 2', 'MATHS', 'Maths', '120', '1', 'poddaraman2012@gmail.com', '07795179977'),
('Aman Duggal', 'Basic thermodynamics by P.K.Nag', 'Mech', 'thermo', '400', '3', 'aman@thebookhub.in', '9980831064'),
('Abhilash Agrawal', 'Engineering chemistry by Jain & Jain', 'First Year', 'chemistry', '70', '1/2', 'agrawalabhilash@outlook.com', '9036418009'),
('Shradha', 'engineering graphics by potty', 'First Year', 'engineering graphics', '200', '1/2', 'shradha991@gmail.com', '7795168290'),
('Vasundhra Dhamija', 'Basic Electronics Notes from Om Xerox', 'First Year', 'Basic Electronics', '120', '1/2', 'vasundhra95@gmail.com', '07259647292'),
('Vineet', 'Engineering mathematics by DSC part 1', 'All', 'Maths', '400', '1-4', 'pvineet131@gmail.com', '9035118351'),
('Vineet', 'Engineering mathematics by DSC part 2', 'All', 'Maths', '400', '2', 'pvineet131@gmail.com', '9035118351'),
('Sanjula K', 'Higher Engineering Mathematics - Dr B S Grewal', 'Mathematics', 'Engineering Mathematics', '270', '1-4', 'sanjula1996@gmail.com', '7259632436');

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE IF NOT EXISTS `list` (
  `Title` varchar(50) COLLATE latin1_general_ci NOT NULL COMMENT 'Name of book',
  `Name` varchar(50) COLLATE latin1_general_ci NOT NULL COMMENT 'Name of student',
  `Mobile` varchar(15) COLLATE latin1_general_ci NOT NULL DEFAULT 'NA',
  `Hostel` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `Email` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT 'NA'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`Title`, `Name`, `Mobile`, `Hostel`, `Email`) VALUES
('Harry Potter and the deathly hallows', 'Abhinav Agrawal', '9916903100', '20', 'abhinav@thebookhub.in'),
('The Da Vinci Code', 'Rajkumar', '7204261815', '10', 'rajlakkim@gmail.com'),
('Inferno', 'Jawahar', '9035196292', '16', ' jawahar.reddy007@gmail.com'),
('Skin', 'Tushar Sinha', '9886436420', '6', 'tushar.m.sinha@gmail.com'),
('The Count Of Monte Cristo', 'Sachin Arora', '9591315095', '16', 'sachin95arora@gmail.com'),
('The Curious case of Benjamin Button', 'Karan Saxena', '9921992219', '15', 'iamtheman@gmail.com'),
('50 shades of Grey', 'Satya Vadlamani', '9739889704', '19', 'hello@satyakumar.com'),
('The rozabal line', 'abhilash arora', '9739309000', '16', 'abhilasharoraofficial@gmail.com'),
('I Am Dead But My Heart Beats', 'Kumar Meet', ' 7411262564', '19', 'kumarmeet.rock@gmail.com'),
('The Da VInci Code', 'Prashant Dubey', '9743266855', '16', 'Prashant28041995@gmail.com'),
('Inferno', 'Prashant Dubey', '9743266855', '16', 'Prashant28041995@gmail.com'),
('You don''t look sick', 'Melanie S Pratt', '2524555049', 'NA', ' melbellp186@yahoo.com'),
('Jack and master', 'Rohit Bhushan', '9663606455', '17', 'rohitbhushan96@gmail.com'),
('half girlfriend', 'ABHILASH ARORA', '9739309000', '15', 'abhilasharoraofficial@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
