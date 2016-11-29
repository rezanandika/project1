-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2016 at 08:47 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` varchar(10) NOT NULL,
  `nama_depan` varchar(25) NOT NULL,
  `nama_belakang` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `antivirus`
--

CREATE TABLE `antivirus` (
  `id_antivirus` varchar(25) NOT NULL,
  `nama_antivirus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `antivirus`
--

INSERT INTO `antivirus` (`id_antivirus`, `nama_antivirus`) VALUES
('AA01', 'AVIRA'),
('AA02', 'SMADAV'),
('AA03', 'ESET NOD32'),
('AA04', 'AVG'),
('AA05', 'MCAFEE');

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
  `sisa_stok` int(11) NOT NULL,
  `distribusi` int(11) NOT NULL,
  `satuan` varchar(25) NOT NULL,
  `id_inventaris` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `spesifikasi`, `id_kategori`, `jumlah`, `sisa_stok`, `distribusi`, `satuan`, `id_inventaris`) VALUES
('B0001', 'ASUS ROG RG-808X', 'ok', 'K002', 3, 0, 2, 'UNIT', 'BM');

-- --------------------------------------------------------

--
-- Table structure for table `barang_pemeliharaan`
--

CREATE TABLE `barang_pemeliharaan` (
  `id_brgpemeliharaan` varchar(25) NOT NULL,
  `nama_brgpemeliharaan` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `sisa_stok` int(11) NOT NULL,
  `jml_dist` int(11) NOT NULL,
  `satuan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_pemeliharaan`
--

INSERT INTO `barang_pemeliharaan` (`id_brgpemeliharaan`, `nama_brgpemeliharaan`, `jumlah`, `tgl_masuk`, `sisa_stok`, `jml_dist`, `satuan`) VALUES
('PEM0001', 'HARDISK SATA 500GB', 3, '2016-11-28', 0, 0, 'BUAH'),
('PEM0002', 'HARDISK SATA 1 TB', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0003', 'HARDISK BACKUP SERVER 500GB RED', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0004', 'HARDISK BACKUP SERVER 500GB BLUE', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0005', 'HARDISK BACKUP SERVER 1 TB RED', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0006', 'HARDISK BACKUP SERVER 1 TB BLUE', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0007', 'HARDISK BACKUP SERVER 4 TB RED', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0008', 'HARDISK BACKUP SERVER 4 TB BLUE', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0009', 'HARDISK SERVER 500GB', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0010', 'HARDISK SERVER 1TB', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0011', 'HARDISK EXTERNAL 500GB', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0012', 'HARDISK EXTERNAL 1 TB', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0013', 'RAM DDR 2 1GB', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0014', 'RAM DDR 2 2GB', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0015', 'RAM DDR 2 4GB', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0016', 'RAM DDR 3 1GB', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0017', 'RAM DDR 3 2GB', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0018', 'RAM DDR 3 4GB', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0019', 'RAM SODIM 1GB', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0020', 'RAM SODIM 2GB', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0021', 'RAM SODIM 4GB', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0022', 'RAM SERVER 4GB', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0023', 'RAM SERVER 8GB', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0024', 'RAM SERVER 16GB', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0025', 'POWER SUPPLAY 450WATT', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0026', 'POWER SUPPLAY 500WATT', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0027', 'POWER SUPPLAY 750WATT', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0028', 'MOTHERBOARD CORE 3', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0029', 'PROCESSOR CORE 3', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0030', 'PROCESSOR CORE 5', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0031', 'DVD INTERNAL', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0032', 'DVD EXTERNAL', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0033', 'KABEL UTP LAN CAT 6', 0, '0000-00-00', 0, 0, 'METER'),
('PEM0034', 'KABEL USB SAMBUNG 1.5 METER', 0, '0000-00-00', 0, 0, 'METER'),
('PEM0035', 'KABEL USB SAMBUNG 3 METER', 0, '0000-00-00', 0, 0, 'METER'),
('PEM0036', 'KABEL HDMI 5 METER', 0, '0000-00-00', 0, 0, 'METER'),
('PEM0037', 'KABEL HDMI 10 METER', 0, '0000-00-00', 0, 0, 'METER'),
('PEM0038', 'KABEL HDMI 15 METER', 0, '0000-00-00', 0, 0, 'METER'),
('PEM0039', 'KABEL HDMI 20 METER', 0, '0000-00-00', 0, 0, 'METER'),
('PEM0040', 'KABEL HDMI 25 METER', 0, '0000-00-00', 0, 0, 'METER'),
('PEM0041', 'KABEL HDMI 30 METER', 0, '0000-00-00', 0, 0, 'METER'),
('PEM0042', 'KABEL VGA 5 METER', 0, '0000-00-00', 0, 0, 'METER'),
('PEM0043', 'KABEL VGA 10 METER', 0, '0000-00-00', 0, 0, 'METER'),
('PEM0044', 'KABEL VGA 15 METER', 0, '0000-00-00', 0, 0, 'METER'),
('PEM0045', 'KABEL VGA 20 METER', 0, '0000-00-00', 0, 0, 'METER'),
('PEM0046', 'KABEL VGA 25 METER', 0, '0000-00-00', 0, 0, 'METER'),
('PEM0047', 'KABEL VGA 30 METER', 0, '0000-00-00', 0, 0, 'METER'),
('PEM0048', 'JEK RG 45', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0049', 'MOUSE USB', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0050', 'MOUSE PS2', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0051', 'KEYBOARD USB', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0052', 'KEYBOARD PS2', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0053', 'KEYBOARD NUMERIK USB', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0054', 'BATERAI CMOS', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0055', 'BATERAI LAPTOP', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0056', 'CONVERTER USB TO VGA', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0057', 'CONVERTER VGA', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0058', 'USB LAN /100', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0059', 'USB LAN /1000', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0060', 'LAN CARD PCI /100', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0061', 'LAN CARD PCI /1000', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0062', 'SWITCH HUB 8 PORT /1000', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0063', 'SWITCH HUB 16 PORT /1000', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0064', 'SWITCH HUB 24 PORT /1000', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0065', 'SWITCH HUB 48 PORT /1000', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0066', 'VGA CARD 1GB', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0067', 'DVD BLANK', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0068', 'CISS INFUSS PRINTER INJEK', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0069', 'CISS INFUSS PRINTER ALL IN ONE BLACK', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0070', 'CISS INFUSS PRINTER ALL IN ONE YELLOW', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0071', 'CISS INFUSS PRINTER ALL IN ONE BLUE', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0072', 'CISS INFUSS PRINTER ALL IN ONE RED', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0073', 'ADAPTOR LAPTOP', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0074', 'ADAPTOR WIFI', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0075', 'WIFI IN DOOR', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0076', 'WIFI OUT DOOR', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0077', 'WIFI EXTENDER', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0078', 'ROUTER RB 1100', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0079', 'ROUTER RB 450', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0080', 'TANG CRIMPING', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0081', 'MONITOR LCD 16?', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0082', 'MONITOR LCD 19?', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0083', 'MONITOR LCD 21?', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0084', 'MONITOR LED 21?', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0085', 'KARET KENI PRINTER', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0086', 'BRACKET TV 32?', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0087', 'BRACKET TV 42?', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0088', 'CATRIDGE INFUSE PRINTER ALL IN ONE', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0089', 'MICROSOFT OFFICE 2016 PRO', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0090', 'MATA BOR 3.5?', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0091', 'BOX SWITCH HUB', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0092', 'SPIRAL KABEL UTP', 0, '0000-00-00', 0, 0, 'METER'),
('PEM0093', 'TC KABEL DAK UTP', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0094', 'TESTER JARINGAN', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0095', 'HEADSET', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0096', 'BLUETOOTH', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0097', 'MODEM SMS GATEWAY', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0098', 'MODEM', 0, '0000-00-00', 0, 0, 'BUAH'),
('PEM0099', 'PASTA PROCESSOR', 0, '0000-00-00', 0, 0, 'BUAH');

-- --------------------------------------------------------

--
-- Table structure for table `barang_rumahtangga`
--

CREATE TABLE `barang_rumahtangga` (
  `id_brgrt` varchar(25) NOT NULL,
  `nama_brgrt` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `sisa_stok` int(11) NOT NULL,
  `jml_dist` int(11) NOT NULL,
  `satuan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_rumahtangga`
--

INSERT INTO `barang_rumahtangga` (`id_brgrt`, `nama_brgrt`, `jumlah`, `tgl_masuk`, `sisa_stok`, `jml_dist`, `satuan`) VALUES
('RT0001', 'CATRIDGE CANON MP650', 3, '2016-11-14', 0, 0, 'UNIT');

-- --------------------------------------------------------

--
-- Table structure for table `detail_barang`
--

CREATE TABLE `detail_barang` (
  `id_detail` varchar(25) NOT NULL,
  `id_barang` varchar(25) NOT NULL,
  `nama_detail` varchar(50) NOT NULL,
  `spesifikasi` text NOT NULL,
  `id_kategori` varchar(25) NOT NULL,
  `id_inventaris` varchar(25) NOT NULL,
  `perangkat` text NOT NULL,
  `IP` varchar(20) NOT NULL,
  `id_pemeliharaan` text NOT NULL,
  `id_penempatan` varchar(50) DEFAULT NULL,
  `status_distribusi` int(3) DEFAULT NULL,
  `tgl_penempatan` date NOT NULL,
  `id_windows` varchar(225) NOT NULL,
  `id_antivirus` varchar(225) NOT NULL,
  `id_office` varchar(225) NOT NULL,
  `id_lain` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_barang`
--

INSERT INTO `detail_barang` (`id_detail`, `id_barang`, `nama_detail`, `spesifikasi`, `id_kategori`, `id_inventaris`, `perangkat`, `IP`, `id_pemeliharaan`, `id_penempatan`, `status_distribusi`, `tgl_penempatan`, `id_windows`, `id_antivirus`, `id_office`, `id_lain`, `status`) VALUES
('B0001.1', 'B0001', 'ASUS ROG RG-808X', 'ok', 'K002', 'BM', '', '182.168.0.56', '', '9101', 1, '2016-11-29', 'W02', 'AA01', 'O04', '', ''),
('B0001.2', 'B0001', 'ASUS ROG RG-808X', 'ok', 'K002', 'BM', '', '', '', NULL, NULL, '0000-00-00', '', '', '', '', ''),
('B0001.3', 'B0001', 'ASUS ROG RG-808X', 'ok', 'K002', 'BM', '', '', '', NULL, NULL, '0000-00-00', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `id` varchar(255) NOT NULL,
  `table_name` varchar(255) DEFAULT NULL,
  `table_field` varchar(255) DEFAULT NULL,
  `field_value` varchar(255) DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `input_by` varchar(255) DEFAULT NULL,
  `input_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id`, `table_name`, `table_field`, `field_value`, `file_name`, `url`, `input_by`, `input_date`) VALUES
('c60d98aaedb65c8ba5e023cbacb41874eb4d22ad', 'user', 'id', 'c4cab7526d9d124d79b30c818d2fcc37a1f63c73', 'Tamako.Market.600.1416434.jpg', '2016/05/c60d98aaedb65c8ba5e023cbacb41874eb4d22ad.jpg', 'c4cab7526d9d124d79b30c818d2fcc37a1f63c73', '2016-05-12 11:39:53'),
('da914eaac18d19433fe9c5b3eb8788c7b9457650', 'user', 'id', 'c4cab7526d9d124d79b30c818d2fcc37a1f63c73', 'Emoticons-icon.png', '2016/06/da914eaac18d19433fe9c5b3eb8788c7b9457650.png', 'c4cab7526d9d124d79b30c818d2fcc37a1f63c73', '2016-06-08 06:20:56'),
('eaad7968553d65eed16bdf5ddcfd516a33858b58', 'user', 'id', 'c4cab7526d9d124d79b30c818d2fcc37a1f63c73', 'user2-160x160.jpg', '2016/06/eaad7968553d65eed16bdf5ddcfd516a33858b58.jpg', 'c4cab7526d9d124d79b30c818d2fcc37a1f63c73', '2016-06-03 05:51:08');

-- --------------------------------------------------------

--
-- Table structure for table `group`
--

CREATE TABLE `group` (
  `id` varchar(255) NOT NULL DEFAULT '',
  `name` varchar(255) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT '0',
  `update_date` datetime DEFAULT NULL,
  `update_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group`
--

INSERT INTO `group` (`id`, `name`, `create_date`, `create_by`, `update_date`, `update_by`) VALUES
('54345880d047bf8496e0df28c4a3db5359083240', 'Operator', '2015-04-28 10:58:29', 0, '2015-07-14 10:35:49', 'c4cab7526d9d124d79b30c818d2fcc37a1f63c73'),
('67544603076af2daf15675402647dcbe85c629ec', 'Administrator', '2015-04-28 10:57:53', 0, '2015-07-02 08:20:31', 'c4cab7526d9d124d79b30c818d2fcc37a1f63c73'),
('da51c984897cd84a051074fe171d5a2a74757e45', 'Auditor', '2015-04-28 10:58:39', 0, '2015-07-02 08:22:16', 'c4cab7526d9d124d79b30c818d2fcc37a1f63c73');

-- --------------------------------------------------------

--
-- Table structure for table `inventaris`
--

CREATE TABLE `inventaris` (
  `id_inventaris` varchar(10) NOT NULL,
  `nama_inventaris` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventaris`
--

INSERT INTO `inventaris` (`id_inventaris`, `nama_inventaris`) VALUES
('BM', 'BARANG MODAL'),
('PEM', 'PEMELIHARAAN'),
('RT', 'RUMAH TANGGA');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` varchar(25) NOT NULL,
  `nama_kategori` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
('K001', 'PC'),
('K002', 'LAPTOP'),
('K003', 'PRINTER'),
('K004', 'SCANNER'),
('K005', 'MONITOR'),
('K006', 'LCD TV'),
('K007', 'PROYEKTOR'),
('K008', 'UPS SERVER'),
('K009', 'LAMINATING'),
('K010', 'HASH SERVER'),
('K011', 'CAMERA'),
('K012', 'CAMCORDER'),
('K013', 'TROLI LAPTOP'),
('K014', 'BOX SERVER'),
('K015', 'OS'),
('K016', 'OFFICE');

-- --------------------------------------------------------

--
-- Table structure for table `lain`
--

CREATE TABLE `lain` (
  `id_lain` varchar(10) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lain`
--

INSERT INTO `lain` (`id_lain`, `deskripsi`) VALUES
('LL01', 'KHS'),
('LL02', 'EMRY'),
('LL03', 'SQLNCI'),
('LL04', 'NVC CLIENT'),
('LL05', 'ADOBE READER'),
('LL06', 'WINRAR');

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
('0a79119d354769d007a94f796a4b823e962c9d97', 'B0001.1', 'LL06'),
('239f2b6522c5be9d26948c27027ae0bc25001403', 'B0001.1', 'LL04'),
('26b4ee8a954005fbd72014e9f0032803eba2b87d', 'B0001.1', 'LL01'),
('7e6a48d30c2ae19ed881b904ce13214f913fc3ed', 'B0001.1', 'LL05'),
('a9923db37d81969be03e6f339eda74e027568e15', 'B0001.1', 'LL03'),
('e4607407a85379b41fce29b45ab9aab64592ae6d', 'B0001.1', 'LL02');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `id_lokasi` varchar(5) NOT NULL,
  `nama_lokasi` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id_lokasi`, `nama_lokasi`) VALUES
('9101', 'KLINIK PENYAKIT DALAM'),
('9102', 'KLINIK DIABETES MILITUS'),
('9103', 'KLINIK HIPERT & GINJAL                            '),
('9104', 'KLINIK BEDAH                                      '),
('9105', 'KLINIK BEDAH SARAF'),
('9106', 'KLINIK BEDAH ORTHOPEDI                            '),
('9107', 'KLINIK ANAK                                       '),
('9109', 'KLINIK MATA                                       '),
('9110', 'KLINIK GIGI                                       '),
('9111', 'KLINIK THT                                        '),
('9112', 'KLINIK KULIT DAN KELAMIN                          '),
('9113', 'KLINIK SARAF'),
('9114', 'KLINIK JANTUNG                                    '),
('9115', 'KLINIK PARU-PARU                                  '),
('9116', 'KLINIK KESEHATAN JIWA                             '),
('9117', 'KLINIK TPK                                        '),
('9118', 'KLINIK GIZI                                       '),
('9119', 'KLINIK KEBIDANAN                                  '),
('9120', 'KLINIK VIP                                        '),
('9121', 'KLINIK ALERGI                                     '),
('9122', 'KLINIK KET.OBAT                                   '),
('9123', 'KLINIK OBAT TRADISIONAL & KOMPL.'),
('9124', 'KLINIK VCT'),
('9125', 'KLINIK REHABILITASI MEDIK'),
('9126', 'KLINIK MEDICALCHEKUP'),
('9128', 'KLINIK PTRM(PROG. TERAPI RUMATAN METADON)'),
('9140', '-'),
('9141', '-'),
('9142', '-'),
('9143', '-'),
('9144', '-'),
('9145', 'KLINIK KESEHATAN JIWA  - ABIYASA'),
('9146', 'KLINIK TPK  - ABIYASA'),
('9147', 'KLINIK GIZI  - ABIYASA'),
('9148', 'KLINIK KEBIDANAN  - ABIYASA'),
('9149', 'KLINIK VIP  - ABIYASA'),
('9150', 'KLINIK ALERGI  - ABIYASA'),
('9151', 'KLINIK PENYAKIT DALAM  - ABIYASA'),
('9152', 'KLINIK DIABETES MILITUS  - ABIYASA'),
('9153', 'KLINIK HIPERT & GINJAL  - ABIYASA'),
('9154', 'KLINIK LEBARAN  - ABIYASA'),
('9155', 'KLINIK BEDAH ONKOLOGY'),
('9156', 'KLINIK REUMATOLOGI &  IMUNOLOGI'),
('9157', 'KLINIK BEDAH UROLOGI'),
('9158', 'KLINIK BEDAH PLASTIK'),
('9159', 'KLINIK  INFERTIL'),
('9160', 'KLINIK FETOMATERNAL'),
('9161', 'KLINIK RETINA'),
('9162', 'KLINIK BEDAH - ABIYASA'),
('9163', 'KLINIK BEDAH SYARAF  - ABIYASA'),
('9164', 'KLINIK BEDAH ORTHOPEDI  - ABIYASA'),
('9165', 'KLINIK ANAK  - ABIYASA'),
('9166', 'KLINIK MATA  - ABIYASA'),
('9167', 'KLINIK GIGI  - ABIYASA'),
('9168', 'KLINIK THT  - ABIYASA'),
('9169', 'KLINIK KULIT DAN KELAMIN  - ABIYASA'),
('9170', 'KLINIK SARAF  - ABIYASA'),
('9171', 'KLINIK JANTUNG  - ABIYASA'),
('9172', 'KLINIK PARU-PARU  - ABIYASA'),
('9173', 'KLINIK KESEHATAN JIWA  - ABIYASA'),
('9174', 'KLINIK TPK  - ABIYASA'),
('9175', 'KLINIK GIZI  - ABIYASA'),
('9176', 'KLINIK KEBIDANAN  - ABIYASA'),
('9177', 'KLINIK VIP  - ABIYASA'),
('9178', 'KLINIK ALERGI  - ABIYASA'),
('9179', 'KLINIK KET.OBAT  - ABIYASA'),
('9180', 'KLINIK OBAT TRADISIONAL & KOMPL.  - ABIYASA'),
('9181', 'KLINIKKLINIK VCT  - ABIYASA'),
('9182', 'KLINIK REHABILITASI MEDIK - ABIYASA'),
('9183', 'KLINIK MEDICAL CHECKUP - ABIYASA'),
('9184', 'KLINIK PTRM - ABIYASA'),
('9185', 'KLINIK BEDAH ONKOLOGY - ABIYASA'),
('9186', 'KLINIK REUMATOLOGI & IMUNOLOGI - ABIYASA'),
('9187', 'KLINIK BEDAH UROLOGI - ABIYASA'),
('9188', 'KLINIK BEDAH PLASTIK - ABIYASA'),
('9189', 'KLINIK INFERTIL - ABIYASA'),
('9190', 'KLINIK FETOMATERNAL - ABIYASA'),
('9191', 'KLINIK RETINA - ABIYASA'),
('9192', 'KLINIK MUTIARA HATI - ABIYASA'),
('9210', '-'),
('9211', 'APOTIK RAWAT INAP                                 '),
('9212', 'APOTIK IGD                                       '),
('9213', 'APOTIK IBS                                        '),
('9214', 'APOTIK RAWAT JALAN'),
('9215', 'APOTIK RAWAT JALAN  - GERIATRI'),
('9216', 'APOTIK IGD - GERIATRI'),
('9217', 'APOTIK RAWAT INAP-GERIATRI'),
('9218', 'APOTIK KEMO'),
('9219', 'FARMASI'),
('9220', 'APOTIK HCU'),
('9221', 'APOTIK ICU'),
('9222', 'APOTIK ICCU'),
('9223', 'APOTIK IMP'),
('9251', 'APOTIK RAWAT JALAN  - GERIATRI'),
('9252', 'APOTIK RAWAT INAP - GERIATRI'),
('9253', 'APOTIK IGD - GERIATRI'),
('9254', 'APOTIK IBS - GERIATRI'),
('9302', 'CEMPAKA                                           '),
('9303', 'KENANGA                                           '),
('9304', 'DAHLIA                                            '),
('9305', 'ASOKA'),
('9306', 'MELATI                                            '),
('9307', 'SERUNI                                            '),
('9308', 'FLAMBOYAN                                         '),
('9309', 'MAWAR                                             '),
('9310', 'ASTER                                             '),
('9311', 'PSR ATAS'),
('9312', 'PSR BAWAH'),
('9313', 'ANGGREK                                           '),
('9314', 'ICU                                             '),
('9315', 'ICCU                                             '),
('9316', 'NICU'),
('9317', 'PICU                              '),
('9318', 'HCU'),
('9319', 'BOUGENVILE'),
('9325', 'CENDANA'),
('9326', 'EDELWEIS'),
('9351', 'ANTURIUM '),
('9352', 'ALAMANDA '),
('9353', 'ANYELIR '),
('9354', 'AMARILIS '),
('9355', 'ICCU - ABIYASA'),
('9356', 'NICU - ABIYASA'),
('9357', 'PICU - ABIYASA'),
('9358', 'HCU - ABIYASA'),
('9359', 'ICU - ABIYASA'),
('9362', 'ADENIUM'),
('9363', 'ADENIUM II'),
('9401', 'RADIOLOGI                                         '),
('9402', 'LABORAT PK                                       '),
('9403', 'LABORAT PA                                        '),
('9404', 'RADIOTERAPHI                                      '),
('9405', 'REHABILITASI MEDIK                                '),
('9406', 'HAEMODIALISA                                      '),
('9407', 'BANK DARAH                                        '),
('9408', 'ENDOSCOPY                                         '),
('9409', 'MEDICAL CHECK UP                                  '),
('9411', 'BEDAH SENTRAL                                     '),
('9413', 'KAMAR JENAZAH                                     '),
('9414', 'AMBULANCE'),
('9415', 'GIZI                                              '),
('9416', 'IPLRS'),
('9417', 'ICPH'),
('9418', 'KEMOTERAPI'),
('9420', 'REHABILITASI MEDIK  - ABIYASA'),
('9421', 'RADIOLOGI -  ABIYASA'),
('9422', 'HAEMODIALISA - ABIYASA'),
('9423', 'RUANG TINDAKAN ESWL'),
('9451', 'RADIOLOGI -  ABIYASA'),
('9452', 'LABORAT PK -ABIYASA'),
('9453', 'LABORAT PA - ABIYASA'),
('9455', 'REHABILITASI MEDIK  - ABIYASA'),
('9456', 'HAEMODIALISA - ABIYASA'),
('9457', 'BANK DARAH - ABIYASA'),
('9458', 'ENDOSCOPY - ABIYASA'),
('9459', 'MEDICAL CHECK UP - ABIYASA'),
('9461', 'INSTALASI BEDAH SENTRAL ABIYASA'),
('9463', 'KAMAR JENAZAH - ABIYASA'),
('9464', 'AMBULANCE - ABIYASA'),
('9465', 'GIZI - ABIYASA'),
('9466', 'IPLRS ABIYASA'),
('9467', 'ICPH - ABIYASA'),
('9468', 'RUANG TINDAKAN ESWL ABIYASA'),
('9510', 'IGD                                     '),
('9511', 'IGD II'),
('9551', 'IGD - ABIYASA'),
('9601', 'INSTALASI RAWAT JALAN I'),
('9602', 'INSTALASI RAWAT INAP I'),
('9603', 'INSTALASI FARMASI'),
('9604', 'INSTALASI MATERNAL / PERINATAL'),
('9605', 'BAGIAN PERENCANAAN'),
('9606', 'BIDANG PENUNJANG MEDIS'),
('9607', 'MONEV'),
('9609', 'KEPEGAWAIAN'),
('9610', 'BAGIAN KEUANGAN'),
('9612', 'BIDANG PELAYANAN'),
('9613', 'INSTALASI RAWAT INTENSIF'),
('9614', 'INSTALASI RAWAT INAP II'),
('9615', 'INSTALASI RAWAT JALAN II'),
('9616', 'RUMAH TANGGA'),
('9617', 'REKAM MEDIK'),
('9619', 'INSTALASI RAWAT INAP III'),
('9620', 'SATPAM'),
('9621', 'IPSRS / SARANA'),
('9622', 'BIDANG KEPERAWATAN'),
('9623', 'BID PENJAMIN MUTU & KERJASAMA'),
('9625', 'GUDANG FARMASI GERIATRI'),
('9626', 'MOD - ABIYASA'),
('9628', 'KOMED'),
('9629', 'BINA PROGRAM'),
('9630', 'BIDANG PENUNJANG SARPRAS'),
('9632', 'PENGADAAN'),
('9633', 'INSTALASI ANESTESI'),
('9634', 'BAGIAN UMUM'),
('9635', 'KASIE. PELATIHAN'),
('9636', 'KASIE. PENDIDIKAN'),
('9646', 'SMF ANESTESI DAN REANIMASI'),
('9651', 'KASIE. PELAYANAN RWT INAP'),
('9652', 'KASIE. PERAWATAN RWT INAP'),
('9653', 'KASIE. PELAYANAN RWT JALAN'),
('9654', 'KASIE. PERAWATAN RWT JALAN'),
('9655', 'KASIE. PENUNJANG TERAPI'),
('9656', 'KASIE. PENUNJANG DIAGNOSA'),
('9657', 'KASIE. PENUNJANG SARANA MEDIS'),
('9658', 'KASIE. PENUNJANG SARANA NON MEDIS'),
('9659', 'KASIE. MUTU'),
('9660', 'KASIE. KERJASAMA'),
('9661', 'GIZI NON MEDIS'),
('9662', 'RUMAH TANGGA ABIYASA'),
('9663', 'IPCN'),
('9664', 'DIREKTUR'),
('9668', 'REKAM MEDIK ABIYASA'),
('9669', 'IPSRS ABIYASA'),
('9671', ' BAGIAN KEUANGAN ABIYASA'),
('9672', '-'),
('9673', '-'),
('9674', '-'),
('9675', '-'),
('9676', '-'),
('9677', '-'),
('9678', '-'),
('9679', '-'),
('9680', '-'),
('9681', '-'),
('9697', 'REHABILITASI MEDIK ABIYASA'),
('9698', 'RADIOLOGI  ABIYASA'),
('9699', 'BENDAHARA PENERIMA'),
('9701', 'GUDANG FARMASI'),
('9702', 'GUDANG RUMAH TANGGA'),
('9703', 'GUDANG GIZI'),
('9801', 'DIKLIT DAN PENELITIAN'),
('9802', 'RADIOLOGI  ABIYASA'),
('kodeb', 'namabagian');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` varchar(255) NOT NULL DEFAULT '',
  `name` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL COMMENT 'full class icon template',
  `status` int(1) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `parent` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT 'view',
  `create_date` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT '0',
  `update_date` datetime DEFAULT NULL,
  `update_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `url`, `icon`, `status`, `order`, `parent`, `state`, `create_date`, `create_by`, `update_date`, `update_by`) VALUES
('1', 'TRANSAKSI', 'transaksi', 'fa fa-shopping-cart', 0, 7, '0', 'view', '2016-06-04 00:00:00', 1, NULL, '0'),
('10', 'Rekap Transaksi', 'rekapitulasi', 'fa fa-calendar', 1, 1, '4', 'view', '2016-06-07 00:00:00', 1, NULL, NULL),
('11', 'Rekap Lunas', 'rekapitulasi/rekap_lunas', 'fa fa-calendar-check-o', 1, 2, '4', 'view', '2016-06-07 00:00:00', 1, NULL, NULL),
('12', 'Rekap Belum Lunas', 'rekapitulasi/rekap_belum_lunas', 'fa fa-calendar-times-o', 1, 3, '4', 'view', '2016-06-07 00:00:00', 1, NULL, NULL),
('13', 'Tambah Status', 'status/form', 'fa fa-exchange', 1, 1, '5', 'view', '2016-06-07 00:00:00', 1, NULL, NULL),
('14', 'Status Laundry', 'status', 'fa fa-calendar-check-o', 1, 2, '5', 'view', '2016-06-07 00:00:00', 1, NULL, NULL),
('16', 'Layanan & Harga', 'pengaturan/layanan', 'fa fa-money', 1, 4, 'e0fdbf7f46ee7595818fc4f42a8c91f86c455d69', 'view', '2016-06-07 00:00:00', 1, NULL, NULL),
('3', 'CUSTOMER', '#', 'fa fa-users', 1, 3, '0', 'view', '2016-06-04 00:00:00', 1, NULL, NULL),
('4', 'REKAPITULASI', '#', 'fa fa-file-text-o', 1, 4, '0', 'view', '2016-06-04 00:00:00', 1, NULL, NULL),
('44413d5ea0d9d0d5220be1591110373b3ca72651', 'TRANSAKSI', 'transaksi', 'fa fa-shopping-cart', 1, 2, '0', 'view', NULL, 1, NULL, '0'),
('5', 'STATUS LAUNDRY', '#', 'fa fa-info-circle', 1, 5, '0', 'view', '2016-06-04 00:00:00', 1, NULL, NULL),
('6', 'PENGATURAN', '#', 'fa fa-cog', 1, 6, '0', 'view', '2016-06-04 00:00:00', 1, NULL, NULL),
('8', 'Tambah Customer', 'customer/form', 'fa fa-user-plus', 1, 1, '3', 'view', '2016-06-07 00:00:00', 1, NULL, NULL),
('9', 'Data Customer', 'customer', 'fa fa-list', 1, 2, '3', 'view', '2016-06-07 00:00:00', 1, NULL, NULL),
('acf9b498cbaa8de7ae8df387458ebe3a91c27c94', 'Group', 'group', 'fa fa-users', 0, 1, 'e0fdbf7f46ee7595818fc4f42a8c91f86c455d69', 'view\r\n', '2015-05-06 18:27:31', 1, NULL, '0'),
('e0fdbf7f46ee7595818fc4f42a8c91f86c455d69', 'PENGATURAN', '#', 'fa fa-cogs', 1, 6, '0', 'view', NULL, 0, NULL, '0'),
('ec43ea6c5b44b24687a3801c69aa91d563730174', 'Profile', 'user/edit?id=c4cab7526d9d124d79b30c818d2fcc37a1f63c73', 'fa fa-user', 1, 2, 'e0fdbf7f46ee7595818fc4f42a8c91f86c455d69', 'view', '2015-04-23 16:35:09', 1, NULL, '0'),
('ec55fc1a3ef2ed87f37dc222ab5a49f29b47262d', 'DASHBOARD', 'dashboard', 'fa fa-dashboard', 1, 1, '0', 'view', '2015-04-22 12:49:30', 1, NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `menugroup`
--

CREATE TABLE `menugroup` (
  `group_id` varchar(255) NOT NULL DEFAULT '',
  `menu_id` varchar(255) NOT NULL DEFAULT '',
  `view` tinyint(1) DEFAULT NULL,
  `add` tinyint(1) DEFAULT NULL,
  `edit` tinyint(1) DEFAULT NULL,
  `delete` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menugroup`
--

INSERT INTO `menugroup` (`group_id`, `menu_id`, `view`, `add`, `edit`, `delete`) VALUES
('67544603076af2daf15675402647dcbe85c629ec', '1', 1, 1, 1, 1),
('67544603076af2daf15675402647dcbe85c629ec', '10', NULL, NULL, NULL, NULL),
('67544603076af2daf15675402647dcbe85c629ec', '11', NULL, NULL, NULL, NULL),
('67544603076af2daf15675402647dcbe85c629ec', '12', NULL, NULL, NULL, NULL),
('67544603076af2daf15675402647dcbe85c629ec', '13', NULL, NULL, NULL, NULL),
('67544603076af2daf15675402647dcbe85c629ec', '14', NULL, NULL, NULL, NULL),
('67544603076af2daf15675402647dcbe85c629ec', '15', NULL, NULL, NULL, NULL),
('67544603076af2daf15675402647dcbe85c629ec', '16', NULL, NULL, NULL, NULL),
('67544603076af2daf15675402647dcbe85c629ec', '3', 1, 1, 1, 1),
('67544603076af2daf15675402647dcbe85c629ec', '4', NULL, NULL, NULL, NULL),
('67544603076af2daf15675402647dcbe85c629ec', '44413d5ea0d9d0d5220be1591110373b3ca72651', 1, 1, 1, 1),
('67544603076af2daf15675402647dcbe85c629ec', '5', NULL, NULL, NULL, NULL),
('67544603076af2daf15675402647dcbe85c629ec', '6', NULL, NULL, NULL, NULL),
('67544603076af2daf15675402647dcbe85c629ec', '7', NULL, NULL, NULL, NULL),
('67544603076af2daf15675402647dcbe85c629ec', '8', NULL, NULL, NULL, NULL),
('67544603076af2daf15675402647dcbe85c629ec', '9', NULL, NULL, NULL, NULL),
('67544603076af2daf15675402647dcbe85c629ec', 'acf9b498cbaa8de7ae8df387458ebe3a91c27c94', 1, 1, 1, 1),
('67544603076af2daf15675402647dcbe85c629ec', 'e0fdbf7f46ee7595818fc4f42a8c91f86c455d69', 1, 1, 1, 1),
('67544603076af2daf15675402647dcbe85c629ec', 'ec43ea6c5b44b24687a3801c69aa91d563730174', 1, 1, 1, 1),
('67544603076af2daf15675402647dcbe85c629ec', 'ec55fc1a3ef2ed87f37dc222ab5a49f29b47262d', 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `office`
--

CREATE TABLE `office` (
  `id_office` varchar(25) NOT NULL,
  `nama_office` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `office`
--

INSERT INTO `office` (`id_office`, `nama_office`) VALUES
('O01', 'LIBRE OFFICE'),
('O02', 'MICROSOFT OFFICE 2003'),
('O03', 'MICROSOFT OFFICE 2007'),
('O04', 'MICROSOFT OFFICE 2013');

-- --------------------------------------------------------

--
-- Table structure for table `pemeliharaan`
--

CREATE TABLE `pemeliharaan` (
  `id_pemeliharaan` varchar(25) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `jam_mulai` time NOT NULL,
  `tgl_selesai` date NOT NULL,
  `jam_selesai` time NOT NULL,
  `kerusakan` text NOT NULL,
  `penanganan` text NOT NULL,
  `petugas` varchar(100) NOT NULL,
  `sparepart` text NOT NULL,
  `id_detail` varchar(25) NOT NULL,
  `id_lokasi` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemeliharaan`
--

INSERT INTO `pemeliharaan` (`id_pemeliharaan`, `tgl_mulai`, `jam_mulai`, `tgl_selesai`, `jam_selesai`, `kerusakan`, `penanganan`, `petugas`, `sparepart`, `id_detail`, `id_lokasi`) VALUES
('PP0001', '2016-11-01', '09:16:00', '2016-11-02', '09:16:00', 'macet', 'ok', 'Reza', '', 'BM0002.2', '9101');

-- --------------------------------------------------------

--
-- Table structure for table `penempatan`
--

CREATE TABLE `penempatan` (
  `id_penempatan` varchar(25) NOT NULL,
  `tgl_penempatan` date NOT NULL,
  `id_lokasi` varchar(10) NOT NULL,
  `id_detail` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penempatan`
--

INSERT INTO `penempatan` (`id_penempatan`, `tgl_penempatan`, `id_lokasi`, `id_detail`) VALUES
('P0001', '2016-11-12', 'L001', 'B0001.1');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` varchar(25) NOT NULL,
  `nama_petugas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(2) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` text NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `username`, `password`, `nama`, `foto`) VALUES
(0, 'admin', '*4ACFE3202A5FF5CF467898FC58AAB1D615029441', 'Karunia Laundry', '');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `value` text,
  `create_date` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT '0',
  `update_date` datetime DEFAULT NULL,
  `update_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `name`, `value`, `create_date`, `create_by`, `update_date`, `update_by`) VALUES
(1, 'site_title', 'SIAPP', '2015-04-24 10:32:01', 1, '2015-04-28 16:14:47', '0'),
(2, 'tagline', '', '2015-04-24 10:32:01', 1, '2015-04-28 16:14:47', '0'),
(3, 'email', 'siapp@setneg.go.id', '2015-04-24 10:32:01', 1, '2015-04-28 16:14:47', '0'),
(4, 'time_zone', 'UTC+7', '2015-04-24 10:32:01', 1, '2015-04-28 16:14:47', '0'),
(5, 'lang', 'en', '2015-04-24 10:32:01', 1, '2015-04-28 16:14:47', '0'),
(6, 'logo', '', '2015-04-24 11:31:45', 1, '2015-04-24 11:41:25', '0'),
(7, 'facebook', '', '2015-04-24 13:32:14', 1, '2015-04-28 16:14:44', '0'),
(8, 'twitter', '', '2015-04-24 13:32:14', 1, '2015-04-28 16:14:44', '0'),
(9, 'youtube', '', '2015-04-24 13:32:14', 1, '2015-04-28 16:14:44', '0'),
(10, 'google-plus', '', '2015-04-24 13:32:14', 1, '2015-04-28 16:14:44', '0'),
(11, 'instagram', '', '2015-04-24 13:32:14', 1, '2015-04-28 16:14:44', '0'),
(12, 'template_admin', 'admin_lte', '2015-04-29 17:58:02', 1, NULL, '0'),
(13, 'template', 'one_page', '2015-04-29 17:58:21', 1, NULL, '0'),
(14, 'app_version', '1.0', '2015-06-21 04:36:00', 0, NULL, '0'),
(15, 'first_login', '0', NULL, 0, '2015-09-03 09:19:02', '0');

-- --------------------------------------------------------

--
-- Table structure for table `sparepart`
--

CREATE TABLE `sparepart` (
  `id_sparepart` varchar(25) NOT NULL,
  `id_detail` varchar(50) NOT NULL,
  `id_brgpemeliharaan` varchar(50) NOT NULL,
  `jumlah_pem` int(11) NOT NULL,
  `id_brgrt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `template`
--

CREATE TABLE `template` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `template`
--

INSERT INTO `template` (`id`, `name`, `url`, `type`, `image`) VALUES
(1, 'sb_admin2', 'template/sb_admin2/', 'admin', NULL),
(2, 'one_page', 'template/one_page/', 'public', NULL),
(3, 'admin_lte', 'template/admin_lte/', 'admin', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `no_invoice` int(11) NOT NULL,
  `jenis_bayar` varchar(15) NOT NULL,
  `sub_total` int(10) NOT NULL,
  `diskon` int(10) NOT NULL,
  `total` int(10) NOT NULL,
  `dibayar` int(10) NOT NULL,
  `sisa` int(10) NOT NULL,
  `status_pembayaran` int(15) NOT NULL,
  `status_order` varchar(15) NOT NULL,
  `tgl_terima` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `tgl_ambil` date NOT NULL,
  `nama_pengambil` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `telepon` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `name`, `email`, `username`, `password`, `telepon`) VALUES
(1, 'reza nandika', 'reza@gmail.com', 'rezanandika', 'nandika', '098765432123');

-- --------------------------------------------------------

--
-- Table structure for table `windows`
--

CREATE TABLE `windows` (
  `id_windows` varchar(25) NOT NULL,
  `nama_windows` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `windows`
--

INSERT INTO `windows` (`id_windows`, `nama_windows`) VALUES
('W01', 'WIN XP 32BIT'),
('W02', 'WIN XP 64BIT'),
('W03', 'WIN 7 PRO 32BIT'),
('W04', 'WIN 7 PRO 64BIT'),
('W05', 'WIN 7 ULTIMATE 32BIT'),
('W06', 'WIN 7 ULTIMATE 64BIT'),
('W07', 'WIN 10 32BIT'),
('W08', 'WIN 10 64BIT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `antivirus`
--
ALTER TABLE `antivirus`
  ADD PRIMARY KEY (`id_antivirus`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `barang_pemeliharaan`
--
ALTER TABLE `barang_pemeliharaan`
  ADD PRIMARY KEY (`id_brgpemeliharaan`);

--
-- Indexes for table `barang_rumahtangga`
--
ALTER TABLE `barang_rumahtangga`
  ADD PRIMARY KEY (`id_brgrt`);

--
-- Indexes for table `detail_barang`
--
ALTER TABLE `detail_barang`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group`
--
ALTER TABLE `group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventaris`
--
ALTER TABLE `inventaris`
  ADD PRIMARY KEY (`id_inventaris`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `lain`
--
ALTER TABLE `lain`
  ADD PRIMARY KEY (`id_lain`);

--
-- Indexes for table `lain_barang`
--
ALTER TABLE `lain_barang`
  ADD PRIMARY KEY (`idlainbarang`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menugroup`
--
ALTER TABLE `menugroup`
  ADD PRIMARY KEY (`group_id`,`menu_id`);

--
-- Indexes for table `office`
--
ALTER TABLE `office`
  ADD PRIMARY KEY (`id_office`);

--
-- Indexes for table `pemeliharaan`
--
ALTER TABLE `pemeliharaan`
  ADD PRIMARY KEY (`id_pemeliharaan`);

--
-- Indexes for table `penempatan`
--
ALTER TABLE `penempatan`
  ADD PRIMARY KEY (`id_penempatan`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sparepart`
--
ALTER TABLE `sparepart`
  ADD PRIMARY KEY (`id_sparepart`);

--
-- Indexes for table `template`
--
ALTER TABLE `template`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `template`
--
ALTER TABLE `template`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
