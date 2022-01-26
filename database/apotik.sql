-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2022 at 06:20 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apotik`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `No` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `level` varchar(10) NOT NULL,
  `kodeApoteker` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`No`, `username`, `password`, `level`, `kodeApoteker`) VALUES
(7, 'admin1', 'c3284d0f94606de1fd2af172aba15bf3', 'admin', 'AP001'),
(8, 'admin', '93863810133ebebe6e4c6bbc2a6ce1e7', 'admin', 'AP002'),
(16, 'a', '0cc175b9c0f1b6a831c399e269772661', 'user', 'AP003');

-- --------------------------------------------------------

--
-- Table structure for table `apoteker`
--

CREATE TABLE `apoteker` (
  `kodeApoteker` text NOT NULL,
  `namaApoteker` text NOT NULL,
  `tanggalLahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apoteker`
--

INSERT INTO `apoteker` (`kodeApoteker`, `namaApoteker`, `tanggalLahir`) VALUES
('AP001', 'Indah1', '0000-00-00'),
('AP002', 'Ayu', '1998-06-21'),
('AP003', 'a', '0001-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `kodeObat` text NOT NULL,
  `namaObat` text NOT NULL,
  `hargaObat` text NOT NULL,
  `sisaObat` text NOT NULL,
  `tanggalKadarluasa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`kodeObat`, `namaObat`, `hargaObat`, `sisaObat`, `tanggalKadarluasa`) VALUES
('CM003', 'Megazing', '33000', '170', '2021-01-13'),
('CM004', 'Zegavit', '40000', '300', '2021-01-07'),
('CM005', 'Panadol', '26000', '200', '2021-03-09'),
('CM006', 'Zenirex', '27000', '146', '2021-11-27'),
('CM007', 'Amoxilin', '19000', '90', '2021-10-19'),
('CM008', 'Betadine', '13000', '89', '2021-12-13'),
('CM009', 'Gliserol', '36000', '240', '2021-04-06'),
('CM010', 'Promag', '11000', '241', '2021-11-03');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_obat_keluar`
--

CREATE TABLE `transaksi_obat_keluar` (
  `idTransaksi` text NOT NULL,
  `kodeObat` text NOT NULL,
  `jumlahJual` text NOT NULL,
  `kodeApoteker` text NOT NULL,
  `tanggalBeli` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi_obat_keluar`
--

INSERT INTO `transaksi_obat_keluar` (`idTransaksi`, `kodeObat`, `jumlahJual`, `kodeApoteker`, `tanggalBeli`) VALUES
('TRK001', 'CM004', '16', 'AP001', '2021-07-30'),
('TRK002', 'CM009', '34', 'AP001', '2021-08-09'),
('TRK003', 'CM007', '21', 'AP002', '2021-08-13'),
('TRK004', 'CM001', '26', 'AP002', '2021-08-27'),
('TRK005', 'CM004', '65', 'AP002', '2021-09-03'),
('TRK006', 'CM009', '32', 'AP001', '2021-09-06'),
('TRK007', 'CM005', '13', 'AP002', '2021-09-16'),
('TRK008', 'CM003', '11', 'AP001', '2021-09-28'),
('TRK010', 'CM002', '44', 'AP002', '2021-10-20'),
('TRK011', 'CM001', '1', '-', '2022-01-26'),
('TRK012', 'CM002', '1', '-', '2022-01-26'),
('TRK013', 'CM002', '1', '-', '2022-01-26'),
('TRK002', 'CM003', '10', '-', '2022-01-26'),
('TRK014', 'CM003', '10', 'AP002', '2022-01-26'),
('TRK002', 'CM003', '5', '-', '2022-01-26'),
('TRK002', 'CM003', '5', 'AP002', '2022-01-26');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_obat_masuk`
--

CREATE TABLE `transaksi_obat_masuk` (
  `idTransaksi` text NOT NULL,
  `kodeObat` text NOT NULL,
  `jumlahBeli` text NOT NULL,
  `kodeApoteker` text NOT NULL,
  `tanggalBeli` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi_obat_masuk`
--

INSERT INTO `transaksi_obat_masuk` (`idTransaksi`, `kodeObat`, `jumlahBeli`, `kodeApoteker`, `tanggalBeli`) VALUES
('TRK001', 'CM004', '1', 'AP001', '2021-07-30'),
('TRK002', 'CM003', '4', 'AP002', '2022-01-26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
