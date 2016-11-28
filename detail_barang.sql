-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2016 at 08:42 AM
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
-- Table structure for table `detail_barang`
--

CREATE TABLE `detail_barang` (
  `id_detail` varchar(25) NOT NULL,
  `id_barang` varchar(25) NOT NULL,
  `id_kategori` varchar(25) NOT NULL,
  `perangkat` text NOT NULL,
  `IP` varchar(20) NOT NULL,
  `id_pemeliharaan` text NOT NULL,
  `id_penempatan` varchar(50) DEFAULT NULL,
  `status_distribusi` int(3) NOT NULL,
  `id_windows` varchar(225) NOT NULL,
  `id_antivirus` varchar(225) NOT NULL,
  `id_office` varchar(225) NOT NULL,
  `id_lain` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_barang`
--

INSERT INTO `detail_barang` (`id_detail`, `id_barang`, `id_kategori`, `perangkat`, `IP`, `id_pemeliharaan`, `id_penempatan`, `status_distribusi`, `id_windows`, `id_antivirus`, `id_office`, `id_lain`) VALUES
('B0001.1', 'B0001', 'LAPTOP', 'Antivirus : AVIRA, </br>WIN XP 64BIT, MICROSOFT OFFICE 2003, .', '127.0.0.2', '', '9121', 0, 'W08', 'AA01', 'O02', ''),
('B0001.2', 'B0001', 'LAPTOP', '', '127.0.0.1', '', '9110', 0, 'W04', 'AA02', 'O04', ''),
('B0001.3', 'B0001', 'LAPTOP', '', '127.0.0.3', '', '9102', 0, 'W05', 'AA03', 'O02', ''),
('B0002.1', 'B0002', '', '', '', '', '', 0, '', '', '', ''),
('B0002.2', 'B0002', '', '', '', '', '', 0, '', '', '', ''),
('B0002.3', 'B0002', '', '', '', '', '', 0, '', '', '', ''),
('B0002.4', 'B0002', '', '', '', '', '', 0, '', '', '', ''),
('B0002.5', 'B0002', '', '', '', '', '', 0, '', '', '', ''),
('B0002.6', 'B0002', '', '', '', '', '', 0, '', '', '', ''),
('B0002.7', 'B0002', '', '', '', '', '', 0, '', '', '', ''),
('B0008.1', 'B0008', '', '', '127.0.1.1', '', '9109', 0, 'W04', 'AA05', 'O04', ''),
('B0008.10', 'B0008', '', '', '127.0.1.2', '', '9119', 0, 'W03', 'AA04', 'O03', ''),
('B0008.2', 'B0008', '', '', '127.0.1.3', '', '9101', 0, 'W05', 'AA02', 'O02', ''),
('B0008.3', 'B0008', '', '', '127.0.1.4', '', 'Pilih Lokasi', 0, 'W03', 'AA01', 'O04', ''),
('B0008.4', 'B0008', '', '', '', '', '', 0, '', '', '', ''),
('B0008.5', 'B0008', '', '', '', '', '', 0, '', '', '', ''),
('B0008.6', 'B0008', '', '', '', '', '', 0, '', '', '', ''),
('B0008.7', 'B0008', '', '', '', '', '', 0, '', '', '', ''),
('B0008.8', 'B0008', '', '', '', '', '', 0, '', '', '', ''),
('B0008.9', 'B0008', '', '', '', '', '', 0, '', '', '', ''),
('B011.1', 'B011', '', '', '127.0.1.1', '', '9101', 1, 'W01', 'AA02', 'O04', ''),
('B011.2', 'B011', '', '', '127.0.1.1', '', '9104', 1, 'W03', 'AA01', 'O02', ''),
('B011.3', 'B011', '', '', '127.0.1.2', '', '9102', 1, 'W02', 'AA02', 'O03', ''),
('B011.4', 'B011', '', '', '127.0.0.2', '', '', 0, 'W03', 'AA01', 'O03', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_barang`
--
ALTER TABLE `detail_barang`
  ADD PRIMARY KEY (`id_detail`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
