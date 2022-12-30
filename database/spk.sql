-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2022 at 04:21 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk`
--
CREATE DATABASE IF NOT EXISTS `spk` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `spk`;

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

DROP TABLE IF EXISTS `alternatif`;
CREATE TABLE `alternatif` (
  `id` int(11) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `C1` int(11) NOT NULL,
  `C2` int(11) NOT NULL,
  `C3` int(11) NOT NULL,
  `C4` int(11) NOT NULL,
  `C5` int(11) NOT NULL,
  `C6` int(11) NOT NULL,
  `C7` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`id`, `kode`, `nama`, `C1`, `C2`, `C3`, `C4`, `C5`, `C6`, `C7`) VALUES
(1, 'A1', 'Dhika', 100, 100, 100, 50, 50, 60, 50),
(2, 'A2', 'Lulu', 100, 100, 50, 25, 75, 100, 50),
(3, 'A3', 'Asril', 100, 50, 100, 25, 75, 80, 25),
(4, 'A4', 'Derby', 50, 50, 100, 50, 100, 40, 50),
(5, 'A5', 'Ardhito', 50, 100, 100, 25, 100, 20, 25);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

DROP TABLE IF EXISTS `kriteria`;
CREATE TABLE `kriteria` (
  `id` int(11) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `bobot` int(11) NOT NULL,
  `isBenefit` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id`, `kode`, `nama`, `bobot`, `isBenefit`) VALUES
(1, 'C1', 'Dokumen Legalitas Pemohon', 30, 1),
(2, 'C2', 'Surat Tanah Agunan', 50, 1),
(3, 'C3', 'PBB Agunan', 40, 1),
(4, 'C4', 'NPWP', 20, 1),
(5, 'C5', 'Usaha', 40, 1),
(6, 'C6', 'Penghasilan', 50, 1),
(7, 'C7', 'Surat Keterangan Tidak Silang Sengketa', 20, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
