-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2021 at 12:15 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barbershop`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(4) NOT NULL,
  `email` varchar(300) NOT NULL,
  `phone_number` varchar(300) NOT NULL,
  `customer_name` varchar(300) NOT NULL,
  `address` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `email`, `phone_number`, `customer_name`, `address`) VALUES
(2, 'willydbd@yahoo.com', '08066619744', 'Williams', '12 Louisiana Estate Sunnyvale Estate Abuja');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(4) NOT NULL,
  `staff_name` varchar(300) NOT NULL,
  `service_rendered` varchar(300) NOT NULL,
  `amount` double(15,2) NOT NULL,
  `add_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `salescomm`
--

CREATE TABLE `salescomm` (
  `id` int(4) NOT NULL,
  `staff_name` varchar(300) NOT NULL,
  `service_rendered` varchar(300) NOT NULL,
  `amount` double(15,2) NOT NULL,
  `add_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salescomm`
--

INSERT INTO `salescomm` (`id`, `staff_name`, `service_rendered`, `amount`, `add_date`) VALUES
(1, 'PapiTunde', 'Hair cut', 500.00, '2020-01-18 15:31:11'),
(2, 'JamesDavid', 'Female', 1000.00, '2020-01-18 15:31:31'),
(3, 'TerryG', 'Hair cut', 500.00, '2020-01-18 15:31:51'),
(4, 'Ay', 'Hair Treatment', 2000.00, '2020-01-18 15:32:07'),
(5, 'PapiTunde', 'Dreadlock', 2500.00, '2020-01-18 15:32:21'),
(6, 'TemiObinna', 'Hair cut', 1000.00, '2020-01-18 15:32:40'),
(7, 'JamesDavid', 'Hair cut', 500.00, '2020-01-18 15:33:18'),
(8, 'TemiObinna', 'Hair Treatment', 2500.00, '2020-01-18 15:33:32'),
(9, 'PapiTunde', 'Hair Cut Dye', 1500.00, '2020-01-18 15:33:55'),
(10, 'TerryG', 'Children Cut', 700.00, '2020-01-20 21:51:33');

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `id` int(4) NOT NULL,
  `staff_name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`id`, `staff_name`) VALUES
(1, 'PapiTunde'),
(2, 'JamesDavid'),
(3, 'TerryG'),
(4, 'Ay'),
(5, 'TemiObinna');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`phone_number`),
  ADD UNIQUE KEY `uid` (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `staff_name` (`staff_name`);

--
-- Indexes for table `salescomm`
--
ALTER TABLE `salescomm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`staff_name`),
  ADD UNIQUE KEY `uid` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `salescomm`
--
ALTER TABLE `salescomm`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_ibfk_1` FOREIGN KEY (`staff_name`) REFERENCES `staffs` (`staff_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
