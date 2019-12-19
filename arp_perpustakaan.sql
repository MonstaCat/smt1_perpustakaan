-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2019 at 02:44 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arp_perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `nimPeminjam` int(11) NOT NULL,
  `namaPeminjam` varchar(50) NOT NULL,
  `judulBuku` varchar(50) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `tglPinjam` date NOT NULL,
  `tglKembali` date NOT NULL,
  `totalTelat` int(10) NOT NULL,
  `denda` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`nimPeminjam`, `namaPeminjam`, `judulBuku`, `jumlah`, `tglPinjam`, `tglKembali`, `totalTelat`, `denda`) VALUES
(1955301018, 'Andika Rizki Pradana', 'Hidayah', 1, '2019-12-19', '2019-12-21', 3, 2000),
(1955301019, 'Tri Hariyanto', 'Dilan 1955', 1, '2019-01-01', '2019-12-31', 0, 0),
(1955301020, 'Randi', 'Ternak Patin', 1, '2019-12-19', '2019-12-31', 1, 500),
(1955301021, 'Farah Fadhilla', 'Tutorial Pemograman', 1, '2019-12-19', '2019-12-21', 3, 2000),
(1955301022, 'Raudatul Tasya', 'Tutorial Web', 1, '2019-12-19', '2019-12-20', 2, 500),
(1955301049, 'Hadi Mustaqim', 'Kiat Sukses Ternak Lele', 1, '2019-12-19', '2019-12-21', 3, 2000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`nimPeminjam`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
