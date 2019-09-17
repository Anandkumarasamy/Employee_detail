-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 17, 2019 at 12:02 PM
-- Server version: 5.7.27-0ubuntu0.16.04.1
-- PHP Version: 7.0.33-0ubuntu0.16.04.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee`
--

-- --------------------------------------------------------

--
-- Table structure for table `project_table`
--

CREATE TABLE `project_table` (
  `EMP_NO` varchar(20) NOT NULL,
  `MARRIAGE_STATUS` varchar(20) NOT NULL,
  `TEAM_NAME` varchar(50) NOT NULL,
  `TEAM_MEMBERS` int(11) NOT NULL,
  `PROJECT_NAME` varchar(60) NOT NULL,
  `PROJECT_DURATION` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_table`
--

INSERT INTO `project_table` (`EMP_NO`, `MARRIAGE_STATUS`, `TEAM_NAME`, `TEAM_MEMBERS`, `PROJECT_NAME`, `PROJECT_DURATION`) VALUES
('Emp001', 'Single', 'Team-A', 4, 'Finance deficit', '3Months'),
('Emp002', 'Single', 'Team-B', 5, 'Product Development', '6Months'),
('Emp003', 'Married', 'Team-C', 4, 'Sales', '2Months');

-- --------------------------------------------------------

--
-- Table structure for table `std_table`
--

CREATE TABLE `std_table` (
  `ID` int(10) UNSIGNED NOT NULL,
  `EMP_NO` varchar(100) DEFAULT NULL,
  `NAME` varchar(30) DEFAULT NULL,
  `AGE` int(3) DEFAULT NULL,
  `ADDRESS` varchar(200) DEFAULT NULL,
  `EMAIL` varchar(70) DEFAULT NULL,
  `PH_NUMBER` bigint(20) DEFAULT NULL,
  `JOIN_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `std_table`
--

INSERT INTO `std_table` (`ID`, `EMP_NO`, `NAME`, `AGE`, `ADDRESS`, `EMAIL`, `PH_NUMBER`, `JOIN_DATE`) VALUES
(134, 'Emp003', 'Ramnath P', 30, 'Goa', 'ramnath@gmail.com', 7418529630, '2019-09-15 03:17:12'),
(138, 'Emp001', 'MuthuKumar J', 25, 'SNKL', 'muthukumar@gmail.com', 8529637410, '2019-09-15 05:05:36'),
(139, 'Emp002', 'Anand', 25, 'Delhi', 'anand@gmail.com', 9486201704, '2019-09-15 05:08:55');

-- --------------------------------------------------------

--
-- Table structure for table `work_table`
--

CREATE TABLE `work_table` (
  `ID` int(11) NOT NULL,
  `EMP_NO` varchar(20) NOT NULL,
  `GENDER` varchar(50) NOT NULL,
  `DEPARTMENT` varchar(255) NOT NULL,
  `SYSTEM_NO` varchar(20) NOT NULL,
  `BY_VEHICLE` varchar(50) NOT NULL,
  `LANGUAGE_KNOWN` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `work_table`
--

INSERT INTO `work_table` (`ID`, `EMP_NO`, `GENDER`, `DEPARTMENT`, `SYSTEM_NO`, `BY_VEHICLE`, `LANGUAGE_KNOWN`) VALUES
(4, 'Emp003', 'Male', 'Sales & Marketing', 'sys003', 'Bike', 'English'),
(7, 'Emp001', 'Male', 'IT-Service', 'sys004', 'Bike', 'English,Tamil,Telugu'),
(8, 'Emp002', 'Male', 'R&D', 'sys002', 'Car', 'Tamil');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `project_table`
--
ALTER TABLE `project_table`
  ADD PRIMARY KEY (`EMP_NO`);

--
-- Indexes for table `std_table`
--
ALTER TABLE `std_table`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `PH_NUMBER` (`PH_NUMBER`),
  ADD UNIQUE KEY `PH_NUMBER_2` (`PH_NUMBER`),
  ADD UNIQUE KEY `EMP_NO` (`EMP_NO`);

--
-- Indexes for table `work_table`
--
ALTER TABLE `work_table`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `EMP_NO` (`EMP_NO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `std_table`
--
ALTER TABLE `std_table`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;
--
-- AUTO_INCREMENT for table `work_table`
--
ALTER TABLE `work_table`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
