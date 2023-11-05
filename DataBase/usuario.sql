-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2023 at 06:54 PM
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
  `LG_User` varchar(100) NOT NULL COMMENT 'Login User',
  `PS_User` varchar(250) NOT NULL COMMENT 'Password User'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`ID_User`, `NM_User`, `EM_User`, `DN_User`, `ST_User`, `AD_User`, `SX_User`, `CT_User`, `LG_User`, `PS_User`) VALUES
(26, 'usuario 1', 'usuario1@teste.com', '2023-11-09', 'Alagoas - AL', 'rua usuario1', 'masculino', 'praia , nacionais', 'user1', '123'),
(27, 'usuario 2', 'usuario2@teste.com', '2023-11-23', 'Acre - AC', 'rua usuario2', 'feminino', 'nacionais', 'user1', '789'),
(28, 'usuario 3', 'usuario3@teste.com', '2023-11-20', 'Amapá - AP', 'rua usuario3', 'masculino', 'praia', 'user3', '456');

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
  MODIFY `ID_User` int(4) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key', AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
