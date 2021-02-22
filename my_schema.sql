-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2021 at 12:45 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `detailsdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `my_schema`
--

CREATE TABLE `my_schema` (
  `cedi` int(11) NOT NULL,
  `childWeightFrom` float NOT NULL,
  `childWeightTo` float NOT NULL,
  `color_code` int(11) NOT NULL,
  `color_description` varchar(40) NOT NULL,
  `countryImages` varchar(40) DEFAULT NULL,
  `defaultSku` varchar(40) DEFAULT NULL,
  `preferredEan` int(11) DEFAULT NULL,
  `sapAssortmentLevel` varchar(40) DEFAULT NULL,
  `sapPrice` float NOT NULL,
  `season` varchar(40) DEFAULT NULL,
  `showOnLineSku` varchar(40) DEFAULT NULL,
  `size_code` varchar(40) DEFAULT NULL,
  `size_description` varchar(40) DEFAULT NULL,
  `skuID` int(11) DEFAULT NULL,
  `skuName` varchar(255) DEFAULT NULL,
  `stateOfArticle` varchar(40) DEFAULT NULL,
  `umSAPprice` varchar(40) DEFAULT NULL,
  `volume` float NOT NULL,
  `weight` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `my_schema`
--
ALTER TABLE `my_schema`
  ADD PRIMARY KEY (`cedi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
