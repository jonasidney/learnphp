-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2023 at 07:59 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cadastros`
--

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `ID_User` int(4) NOT NULL COMMENT 'Primary Key',
  `NM_User` varchar(250) NOT NULL COMMENT 'Name User',
  `EM_User` varchar(250) NOT NULL COMMENT 'E-mal User',
  `DN_User` date NOT NULL COMMENT 'Date User',
  `ST_User` varchar(250) NOT NULL COMMENT 'State User',
  `AD_User` varchar(250) NOT NULL COMMENT 'Address User',
  `SX_User` varchar(10) NOT NULL COMMENT 'Sex User',
  `CT_User` varchar(100) NOT NULL COMMENT 'Category Interest',
  `LG_user` varchar(100) NOT NULL COMMENT 'Login User',
  `PS_User` varchar(250) NOT NULL COMMENT 'Password User'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID_User`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID_User` int(4) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
