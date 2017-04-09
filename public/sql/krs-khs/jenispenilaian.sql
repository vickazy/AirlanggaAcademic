-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2017 at 02:20 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airlangga_academic`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenispenilaian`
--

CREATE TABLE `jenispenilaian` (
  `id` int(11) NOT NULL,
  `id_jenis_penilaian` varchar(30) NOT NULL,
  `nama_jenis` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenispenilaian`
--

INSERT INTO `jenispenilaian` (`id`, `id_jenis_penilaian`, `nama_jenis`, `created_at`, `updated_at`) VALUES
(3, '1234', 'kiki', '2017-04-09 11:44:42', '2017-04-09 04:44:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenispenilaian`
--
ALTER TABLE `jenispenilaian`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenispenilaian`
--
ALTER TABLE `jenispenilaian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
