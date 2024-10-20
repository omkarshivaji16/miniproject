-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2022 at 10:40 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ewaste`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcategory`
--

CREATE TABLE `addcategory` (
  `catid` int(11) NOT NULL,
  `cname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addcategory`
--

INSERT INTO `addcategory` (`catid`, `cname`) VALUES
(2, 'MAJOR APPLIANCES');

-- --------------------------------------------------------

--
-- Table structure for table `addcomplaint`
--

CREATE TABLE `addcomplaint` (
  `fid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `aid` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `comment` varchar(50) NOT NULL,
  `reply` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addcomplaint`
--

INSERT INTO `addcomplaint` (`fid`, `name`, `aid`, `phone`, `emailid`, `comment`, `reply`) VALUES
(1, 'test', '13', '7889862810', 'kezhakkethill@gmail.com', 'the employee name is not valid', '');

-- --------------------------------------------------------

--
-- Table structure for table `addfeedback`
--

CREATE TABLE `addfeedback` (
  `fid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `uid` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `comment` varchar(50) NOT NULL,
  `reply` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `addplan`
--

CREATE TABLE `addplan` (
  `planid` int(11) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `plan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addplan`
--

INSERT INTO `addplan` (`planid`, `cname`, `plan`) VALUES
(3, 'MAJOR APPLIANCES', 'SILVER PLAN');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `agentreg`
--

CREATE TABLE `agentreg` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phoneno` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `agenname` varchar(50) NOT NULL,
  `license` varchar(50) NOT NULL,
  `catname` varchar(50) NOT NULL,
  `gad` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` enum('pending','Active','Activated','Inactive','Inactivated') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agentreg`
--

INSERT INTO `agentreg` (`id`, `name`, `address`, `phoneno`, `location`, `agenname`, `license`, `catname`, `gad`, `email`, `username`, `password`, `status`) VALUES
(10, 'Rock Services', 'Chetomkara jn ', '9867561234', 'BUDHANOOR', 'Rockz Services', 'rz007az', 'MAJOR APPLIANCES', 'Refrigerator', 'rokz@gmail.com', 'rokz', 'rokz123', 'pending'),
(13, 'test', 'Puthuparambil', '7889862810', 'Pathanamthitta', 'Kezhakkethill services', 'aqwe1234', 'MAJOR APPLIANCES', 'pc', 'kezhakkethill@gmail.com', 'test', 'test123', 'Activated');

-- --------------------------------------------------------

--
-- Table structure for table `bookagency`
--

CREATE TABLE `bookagency` (
  `bookid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `uid` varchar(50) NOT NULL,
  `agid` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `loc` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `wastetype` varchar(50) NOT NULL,
  `plan` varchar(50) NOT NULL,
  `status` enum('pending','Accept','Accepted','Reject','Rejected') NOT NULL DEFAULT 'pending',
  `amount` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookagency`
--

INSERT INTO `bookagency` (`bookid`, `name`, `uid`, `agid`, `address`, `phone`, `loc`, `email`, `wastetype`, `plan`, `status`, `amount`) VALUES
(8, 'hallo', '15', '13', 'halloworld ', '1324567234', 'sbhdisbd', 'lnjsbdhugyhd@gmail.com', 'MAJOR APPLIANCES', '750', 'Accepted', '100');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ctype` varchar(50) NOT NULL,
  `cno` varchar(50) NOT NULL,
  `cvv` varchar(50) NOT NULL,
  `cdate` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `paydate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payid`, `name`, `email`, `ctype`, `cno`, `cvv`, `cdate`, `amount`, `paydate`) VALUES
(4, 'hallo', 'lnjsbdhugyhd@gmail.com', 'Visa', '1234567890098765', '123', '15/2002', '100', '2022-09-08'),
(5, 'hallo', 'lnjsbdhugyhd@gmail.com', '', '1234567890123456', '234', '05/2022', '100', '2022-08-25');

-- --------------------------------------------------------

--
-- Table structure for table `sentreport`
--

CREATE TABLE `sentreport` (
  `rid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `wastetype` varchar(50) NOT NULL,
  `product` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sentreport`
--

INSERT INTO `sentreport` (`rid`, `name`, `wastetype`, `product`, `date`) VALUES
(3, 'Ah', 'CPU', 'Acer core', '2022-08-09');

-- --------------------------------------------------------

--
-- Table structure for table `userreg`
--

CREATE TABLE `userreg` (
  `uid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phoneno` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` enum('pending','Active','Activated','Inactive','Inactivated') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userreg`
--

INSERT INTO `userreg` (`uid`, `name`, `address`, `phoneno`, `location`, `email`, `username`, `password`, `status`) VALUES
(15, 'hallo', 'halloworld ', '1324567234', 'sbhdisbd', 'lnjsbdhugyhd@gmail.com', 'gaz', 'gaz123', 'Activated');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcategory`
--
ALTER TABLE `addcategory`
  ADD PRIMARY KEY (`catid`);

--
-- Indexes for table `addcomplaint`
--
ALTER TABLE `addcomplaint`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `addfeedback`
--
ALTER TABLE `addfeedback`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `addplan`
--
ALTER TABLE `addplan`
  ADD PRIMARY KEY (`planid`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agentreg`
--
ALTER TABLE `agentreg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookagency`
--
ALTER TABLE `bookagency`
  ADD PRIMARY KEY (`bookid`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payid`);

--
-- Indexes for table `sentreport`
--
ALTER TABLE `sentreport`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `userreg`
--
ALTER TABLE `userreg`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcategory`
--
ALTER TABLE `addcategory`
  MODIFY `catid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `addcomplaint`
--
ALTER TABLE `addcomplaint`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `addfeedback`
--
ALTER TABLE `addfeedback`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `addplan`
--
ALTER TABLE `addplan`
  MODIFY `planid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `agentreg`
--
ALTER TABLE `agentreg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `bookagency`
--
ALTER TABLE `bookagency`
  MODIFY `bookid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sentreport`
--
ALTER TABLE `sentreport`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `userreg`
--
ALTER TABLE `userreg`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
