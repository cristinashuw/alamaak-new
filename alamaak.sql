-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2018 at 05:26 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alamaak`
--

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `orderName` varchar(50) NOT NULL,
  `customer` varchar(50) NOT NULL,
  `phone` text NOT NULL,
  `address` varchar(50) NOT NULL,
  `serviceDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `orderName`, `customer`, `phone`, `address`, `serviceDate`) VALUES
(44, 'General Cleaning', 'windrich.xie@gmail.com', '123123', 'asdf', '2017-06-19'),
(45, 'BathroomCleaning', 'windrich.xie@gmail.com', '123123', 'asdf', '2017-06-19'),
(46, 'General Cleaning', 'windrich.xie@gmail.com', '123123', 'asdf', '2017-06-19'),
(47, 'Sofa Cleaning', 'windrich.xie@gmail.com', '123123', 'sdf', '2017-06-19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `customer_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` text NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`customer_name`, `email`, `phone`, `password`) VALUES
('amir', 'amir@yahoo.co.id', '121', '63eefbd45d89e8c91f24b609f7539942'),
('Ani Setiowati', 'anisetiowati@yahoo.com', '34567890', '29d1e2357d7c14db51e885053a58ec67'),
('Jeky Andrew', 'jekyandrew@gmail.com', '58942819', '767454b250481aa4d50fc9626846c56a'),
('lala', 'lala@gmail.com', '85668060916', '2e3817293fc275dbee74bd71ce6eb056'),
('qwerty', 'qwerty@yahoo.co.id', '098978675432', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
('windrich', 'windrich.xie@gmail.com', '123123', 'b93939873fd4923043b9dec975811f66'),
('dasdf', 'windrich_tjia@yahoo.com', '1234', 'b93939873fd4923043b9dec975811f66');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_name` (`customer`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`customer`) REFERENCES `users` (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
