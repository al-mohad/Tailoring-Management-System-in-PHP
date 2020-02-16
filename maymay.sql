-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2018 at 05:44 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `maymay`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
`id` int(11) NOT NULL,
  `fulname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `shoulder` varchar(100) NOT NULL,
  `hcl` varchar(100) NOT NULL,
  `bust` varchar(100) NOT NULL,
  `blousewaist` varchar(100) NOT NULL,
  `blouselength` varchar(100) NOT NULL,
  `skirtlength` varchar(100) NOT NULL,
  `skirtwaist` varchar(100) NOT NULL,
  `hips` varchar(100) NOT NULL,
  `sliplength` varchar(100) NOT NULL,
  `slipround` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `fulname`, `address`, `phone`, `email`, `comment`, `shoulder`, `hcl`, `bust`, `blousewaist`, `blouselength`, `skirtlength`, `skirtwaist`, `hips`, `sliplength`, `slipround`) VALUES
(1, 'Hauwa Shehu sani', 'Shooting Range', '0908776790', 'hawee@gmail.com', 'comment', '22', '65', '77', '55', '44', '44', '12', '55', '67', '38'),
(2, 'Rabiatu Sani', 'Marafa Estate', '0807899099', 'rabbs@ymail.com', '', '29', '65', '22', '55', '44', '44', '12', '32', '34', '32'),
(4, 'Lailah Alkasim', 'U/Rimi', '08037009898', 'lailaha@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(5, 'Maryam Muazu', 'no 8 west college road', '0806230657', 'swtmaymay@gmail.com', 'peplum top with six piece skirt. ', '', '', '', '', '', '', '', '', '', ''),
(6, 'Fari Aliyu', 'kaduna government house', '08097504878', 'mrwhite@gmail,com', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `measurement`
--

CREATE TABLE IF NOT EXISTS `measurement` (
`id` int(11) NOT NULL,
  `CustomerName` varchar(100) NOT NULL,
  `Customer_id` varchar(11) NOT NULL,
  `Shoulder` varchar(100) NOT NULL,
  `HalfCutLength` varchar(100) NOT NULL,
  `Bust` varchar(100) NOT NULL,
  `BlouseWaist` varchar(100) NOT NULL,
  `BlouseLength` varchar(100) NOT NULL,
  `SkirtLength` varchar(100) NOT NULL,
  `SkirtWaist` varchar(100) NOT NULL,
  `Hips` varchar(100) NOT NULL,
  `SlipLength` varchar(100) NOT NULL,
  `SlipRound` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `measurement`
--

INSERT INTO `measurement` (`id`, `CustomerName`, `Customer_id`, `Shoulder`, `HalfCutLength`, `Bust`, `BlouseWaist`, `BlouseLength`, `SkirtLength`, `SkirtWaist`, `Hips`, `SlipLength`, `SlipRound`) VALUES
(1, '', '', '', '', '', '', '', '', '', '', '', ''),
(2, '', '', '22', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE IF NOT EXISTS `notifications` (
`id` int(11) NOT NULL,
  `SenderName` varchar(100) NOT NULL,
  `SenderEmail` varchar(100) NOT NULL,
  `EmailSubject` varchar(100) NOT NULL,
  `Message` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
`id` int(11) NOT NULL,
  `CustomerName` varchar(100) NOT NULL,
  `NumberOfCloths` varchar(100) NOT NULL,
  `RecievedDate` date NOT NULL,
  `DueDate` date NOT NULL,
  `AssignedTailor` varchar(100) NOT NULL,
  `Comment` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `CustomerName`, `NumberOfCloths`, `RecievedDate`, `DueDate`, `AssignedTailor`, `Comment`) VALUES
(1, 'Maryam Muazu', '8', '2017-03-20', '2017-12-20', 'Garba Musa', 'European Gowns'),
(2, 'Jameelah Umar', '6', '2017-03-29', '2016-02-28', 'Garba Musa', 'borno style with beats work'),
(3, 'esther john', '1', '2018-05-08', '2018-05-12', 'salis', 'fitted gown'),
(4, 'precious daniel', '3', '2018-04-04', '0008-04-09', 'salis', 'peplum top');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `fulname` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `user_type`, `fulname`, `phone`, `address`) VALUES
(3, 'almohad', '827ccb0eea8a706c4c34a16891f84e7b', '12345@g.com', 'admin', 'Muhammad Buhari', '08078600665', ''),
(4, 'maymay', '827ccb0eea8a706c4c34a16891f84e7b', 'maymay@gmail.com', 'admin', 'Maryam Mu''azu', '08060077788', ''),
(5, 'summee', 'c4ca4238a0b923820dcc509a6f75849b', 'a@a.com', 'Tailor', 'Sumayyah Sameer', '08057889900', ''),
(7, 'almuhad', '827ccb0eea8a706c4c34a16891f84e7b', '12345@g.com', 'user', 'Muhammad Shehu', '08078600665', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `measurement`
--
ALTER TABLE `measurement`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `measurement`
--
ALTER TABLE `measurement`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
