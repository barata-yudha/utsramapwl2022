-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 11:15 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `utsrama`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `iddokter` int(11) NOT NULL,
  `nip` varchar(10) NOT NULL,
  `nama_lengkap` varchar(20) NOT NULL,
  `spesialis` varchar(20) NOT NULL,
  `tempat_praktek` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`iddokter`, `nip`, `nama_lengkap`, `spesialis`, `tempat_praktek`) VALUES
(1, '88972823', 'Dokter Rama', 'Gigi', 'Cirebon'),
(2, '45353456', 'Dokter Freddy', 'Obgyn', 'Cirebon'),
(3, '3989823', 'Dokter Yudha', 'Otak', 'Jakarta');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `idobat` int(11) NOT NULL,
  `kode_obat` varchar(10) NOT NULL,
  `nama_obat` varchar(50) NOT NULL,
  `bentuk` varchar(20) NOT NULL,
  `berat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`idobat`, `kode_obat`, `nama_obat`, `bentuk`, `berat`) VALUES
(1, 'OBT1', 'OBH Combi', 'Cair', '200G'),
(2, 'OBT2', 'Kayu Putih Caplang', 'Cair', '100G'),
(3, 'OBT3', 'Salep Calpanax', 'Salep', '400G');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `idpasien` int(11) NOT NULL,
  `nomor_pasien` varchar(10) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `umur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`idpasien`, `nomor_pasien`, `nama_lengkap`, `jenis_kelamin`, `umur`) VALUES
(1, '00001', 'Rama Yudha', 'Laki-Laki', 21),
(2, '0002', 'Dominika Christy', 'Perempuan', 23),
(3, '0003', 'Galendo', 'Laki-Laki', 25);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`iddokter`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`idobat`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`idpasien`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `iddokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `idobat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `idpasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
