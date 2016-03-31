-- phpMyAdmin SQL Dump
-- version 4.4.13.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 31, 2016 at 09:06 PM
-- Server version: 5.6.28-0ubuntu0.15.10.1
-- PHP Version: 5.6.11-1ubuntu3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digiconContact`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL,
  `office_id` varchar(8) NOT NULL,
  `name` varchar(32) NOT NULL,
  `designation` varchar(32) NOT NULL,
  `email` varchar(64) NOT NULL,
  `mobile_num_1` varchar(16) NOT NULL,
  `mobile_num_2` varchar(16) NOT NULL,
  `department` varchar(16) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `office_id`, `name`, `designation`, `email`, `mobile_num_1`, `mobile_num_2`, `department`) VALUES
(1, '1735', 'Sirajum Monir Parvez', 'Support Engineer', 'sirajum.monir@digicontechnologies.com', '01851313826', '', 'IT'),
(2, '0969', 'Naznin Akhter Happy', 'IT Help Desk Associate', 'naznin.happy@digicontechnologies.com', '01679705954', '', 'IT'),
(3, '2145', 'SHOVON RAHMAN SHUVO', 'Programmer', 'shovon.rahman@digicontechnologies.com', '01534653592', '01747423861', 'IT'),
(4, '2000', 'Rashed Musharaf', 'System Admin', 'rashed.musharaf@digicontechnologies.com', '01678665047', '01730027200', 'IT'),
(5, '2345', 'Ashraf Hussain', 'Support Engineer', 'ashraf.hussain@digicontechnologies.com', '01672766672', '', 'IT');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `user_id` int(8) NOT NULL,
  `user_name` int(32) NOT NULL,
  `level` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
