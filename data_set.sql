-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2016 at 01:37 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_scb`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_member`
--

CREATE TABLE `add_member` (
  `proj_id` int(5) NOT NULL,
  `emp_name` varchar(25) NOT NULL,
  `emp_email` varchar(25) NOT NULL,
  `user_id` varchar(10) DEFAULT 'NOT_SET',
  `status` varchar(10) DEFAULT NULL,
  `comment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_member`
--

INSERT INTO `add_member` (`proj_id`, `emp_name`, `emp_email`, `user_id`, `status`, `comment`) VALUES
(1, 'AB', 'AB@gmail.com', 'AB6KOR', 'NULL', '-'),
(1, 'CD', 'CD@gmail.com', 'CD&KOR', 'NULL', '-'),
(2, 'Q', 'Q@gmail.com', 'Q9KOR', 'ACCEPTED', 'interested in this project '),
(2, 'W', 'W@gmail.com', 'W9KOR', 'NULL', '-'),
(2, 'R', 'R@gmail.com', 'R9KOR', 'REJECTED', 'NOT INTERESTED IN THE PROJECT '),
(2, 'S', 'S@gmail.com', 'S9KOR', 'NULL', '-');

-- --------------------------------------------------------

--
-- Table structure for table `credentials`
--

CREATE TABLE `credentials` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL DEFAULT 'ROOT',
  `position` varchar(20) NOT NULL,
  `project_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `credentials`
--

INSERT INTO `credentials` (`username`, `password`, `position`, `project_id`) VALUES
('ABC9KOR', 'ROOT', 'MANAGER', 1),
('XYZ9KOR', 'ROOT', 'MANAGER', 2),
('AB6KOR', 'ROOT', 'ASSOCIATE', 1),
('CD&KOR', 'ROOT', 'ASSOCIATE', 1),
('W9KOR', 'ROOT', 'ASSOCIATE', 2),
('S9KOR', 'ROOT', 'ASSOCIATE', 2);

-- --------------------------------------------------------

--
-- Table structure for table `proj_master`
--

CREATE TABLE `proj_master` (
  `proj_id` int(5) NOT NULL,
  `proj_desc` varchar(100) NOT NULL,
  `proj_type` varchar(10) NOT NULL,
  `proj_start_date` varchar(10) NOT NULL,
  `proj_end_date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proj_master`
--

INSERT INTO `proj_master` (`proj_id`, `proj_desc`, `proj_type`, `proj_start_date`, `proj_end_date`) VALUES
(1, 'This is a dummy project ', 'BI', '2016-04-02', '2017-04-03'),
(2, 'this is a development project ', 'DEV', '2016-05-02', '2017-05-03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `proj_master`
--
ALTER TABLE `proj_master`
  ADD PRIMARY KEY (`proj_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
