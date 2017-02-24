-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 25, 2017 at 12:05 AM
-- Server version: 5.7.17-0ubuntu0.16.04.1
-- PHP Version: 5.6.29-1+deb.sury.org~xenial+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kalpana`
--

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role`, `status`) VALUES
(1, 'add', 0),
(2, 'FOo', 0),
(3, 'Manager', 1),
(4, 'HOD', 1),
(5, 'Holistic User', 1),
(6, 'dsfdfas', 0),
(7, 'Hshsdfg', 0),
(8, 'Foobar', 1),
(9, 'adasdasdas', 0),
(10, 'Jigar', 1),
(11, 'dgdgd dgdfg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tax_category`
--

CREATE TABLE `tax_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_on` datetime NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tax_category`
--

INSERT INTO `tax_category` (`id`, `name`, `category`, `status`, `created_on`, `created_by`, `updated_on`, `updated_by`) VALUES
(1, 'Centeral Exile Tax', 2, 0, '2017-02-20 09:21:37', 1, NULL, 1),
(3, 'Income Tax', 1, 1, '2017-02-20 09:22:08', 1, NULL, 1),
(4, 'Sales Tax', 2, 1, '2017-02-20 10:53:46', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tax_rate`
--

CREATE TABLE `tax_rate` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `rate` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `updated_by` datetime DEFAULT NULL,
  `updated_on` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tax_rate`
--

INSERT INTO `tax_rate` (`id`, `name`, `rate`, `category_id`, `status`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(1, 'Foo', 34, 3, 1, 1, '2017-02-21 09:13:59', '2017-02-21 10:49:04', 1),
(2, 'FOoBAR', 25, 4, 0, 1, '2017-02-21 10:41:50', '2017-02-21 10:49:19', 1),
(3, 'BAR', 25, 3, 1, 1, '2017-02-21 10:41:51', '2017-02-21 10:48:54', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `login_username` varchar(40) NOT NULL,
  `hash_password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_by` int(11) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `login_username`, `hash_password`, `role_id`, `email`, `mobile_no`, `status`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(1, 'JIgar Kumar', 'jigar', 'jigar', 3, 'jigare', '324244', 1, 2, '1002-02-21 00:00:00', 324, '1002-02-21 00:00:00'),
(2, 'jigar', 'jigar46', 'b9505292a9a3c3ea9f87f359b4f0e8cb25b30021', 5, 'jigarprajapat@gmail.com', '987654310', 1, 1, NULL, NULL, NULL),
(3, 'kiran', 'kiran123', 'b8dd71d434bc71c7490c623a4db009daf92bc2d8', 3, 'kiran123@gmail.com', '9876543210', 1, 1, '2017-02-24 05:39:08', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tax_category`
--
ALTER TABLE `tax_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tax_rate`
--
ALTER TABLE `tax_rate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_index` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tax_category`
--
ALTER TABLE `tax_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tax_rate`
--
ALTER TABLE `tax_rate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
