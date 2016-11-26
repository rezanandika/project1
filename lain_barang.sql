-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2016 at 04:43 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `record`
--

-- --------------------------------------------------------

--
-- Table structure for table `lain_barang`
--

CREATE TABLE `lain_barang` (
  `idlainbarang` varchar(225) NOT NULL,
  `id_detail` varchar(225) NOT NULL,
  `id_lain` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lain_barang`
--

INSERT INTO `lain_barang` (`idlainbarang`, `id_detail`, `id_lain`) VALUES
('14e0041cc5c169baaf896a74cf523d06f8e2d217', 'B0001.2', 'LL02'),
('9b6d6d3bd506b49e81cf71cd2a2716bfba666b0f', 'B0001.1', 'LL02'),
('fb4ba65b29d661143847c93721f570d91358d9f6', 'B0001.1', 'LL01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lain_barang`
--
ALTER TABLE `lain_barang`
  ADD PRIMARY KEY (`idlainbarang`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
