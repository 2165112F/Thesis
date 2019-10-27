-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2019 at 05:01 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finaldatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `cancel`
--

CREATE TABLE `cancel` (
  `cancel_order` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `cancel_id` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `deduction`
--

CREATE TABLE `deduction` (
  `menu_name` varchar(150) NOT NULL,
  `quantity` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(100) NOT NULL,
  `itemname` varchar(45) NOT NULL,
  `category` char(45) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unitofmeasurement` char(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `itemname`, `category`, `quantity`, `unitofmeasurement`) VALUES
(1, 'Carrots', 'Dry Goods', 10, 'g'),
(2, 'patrick', 'pogi', 12, 'pound');

-- --------------------------------------------------------

--
-- Table structure for table `ledger`
--

CREATE TABLE `ledger` (
  `item_name` varchar(50) NOT NULL,
  `uom` int(50) NOT NULL,
  `balance` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `desciption` varchar(150) NOT NULL,
  `menu_id` int(10) NOT NULL,
  `menu_name` varchar(45) NOT NULL,
  `quantity` int(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reconcilation`
--

CREATE TABLE `reconcilation` (
  `item_name` varchar(150) NOT NULL,
  `inventory_quantity` int(50) NOT NULL,
  `current_quantity` int(50) NOT NULL,
  `remarks` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `returns`
--

CREATE TABLE `returns` (
  `return_id` int(10) NOT NULL,
  `order_table` int(40) NOT NULL,
  `return_order` varchar(50) NOT NULL,
  `quantity_order` int(40) NOT NULL,
  `remarks` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `spoilage`
--

CREATE TABLE `spoilage` (
  `spoilage_id` int(10) NOT NULL,
  `item_name` varchar(150) NOT NULL,
  `category` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cancel`
--
ALTER TABLE `cancel`
  ADD PRIMARY KEY (`cancel_id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `returns`
--
ALTER TABLE `returns`
  ADD PRIMARY KEY (`return_id`);

--
-- Indexes for table `spoilage`
--
ALTER TABLE `spoilage`
  ADD PRIMARY KEY (`spoilage_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cancel`
--
ALTER TABLE `cancel`
  MODIFY `cancel_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `returns`
--
ALTER TABLE `returns`
  MODIFY `return_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spoilage`
--
ALTER TABLE `spoilage`
  MODIFY `spoilage_id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
