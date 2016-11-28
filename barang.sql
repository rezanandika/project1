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
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` varchar(25) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `spesifikasi` text NOT NULL,
  `id_kategori` varchar(25) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `satuan` varchar(25) NOT NULL,
  `distribusi` int(10) NOT NULL,
  `id_inventaris` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `spesifikasi`, `id_kategori`, `jumlah`, `satuan`, `distribusi`, `id_inventaris`) VALUES
('', '', '', 'Pilih Kategori', 0, '', 0, 'I01'),
('B0001', 'TOSHIBA X445-45D', '- Intel Core i7\n- RAM 8GB DDR3\n- Layar 14"\n- Nvidia G840M', 'K002', 10, 'UNIT', 0, 'I01'),
('B0002', 'PC Asus S756-DD', '- Monitor LG 19"\r\n- Core i3 Haswell\r\n- Vga Intel 3300HD\r\n- Ram 4GB DDR3\r\n- Keyboard Logitech\r\n- Mouse Logitech', 'K002', 7, 'UNIT', 0, 'I02'),
('B0003', 'PRINTER EPSON L110-X', '- Printer Warna Dot Matrix', 'K003', 6, 'UNIT', 0, 'I01'),
('B0004', 'PRINTER EPSON L315-X', '- Printer Laser Jet', 'K003', 5, 'UNIT', 0, 'I01'),
('B0005', 'PRINTER EPSON L650-X', '- Printer Warna Dot Matrix', 'K003', 5, 'UNIT', 0, 'I01'),
('B0006', 'PRINTER EPSON L300-X', '- Printer Warna Dot Matrix', 'K003', 3, 'UNIT', 0, 'I01'),
('B0007', 'PRINTER EPSON L81-X', '- Printer Warna Dot Matrix', 'K003', 10, 'UNIT', 0, 'I01'),
('B010', 'ED', 'EDE', 'K001', 5, 'YES', 0, ''),
('B011', 'Asus Leptop', 'Intel', 'K002', 4, 'ITEM', 1, 'I01'),
('B22', 'CC', 'CC', 'K001', 0, 'X', 0, ''),
('CI001', 'HULK', 'HUL', 'K001', 6, 'oke', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
