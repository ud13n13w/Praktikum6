-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2020 at 06:32 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pemrogramanweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `liga`
--

CREATE TABLE `liga` (
  `id` int(6) UNSIGNED NOT NULL,
  `kode` varchar(3) NOT NULL,
  `negara` varchar(30) NOT NULL,
  `champion` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `liga`
--

INSERT INTO `liga` (`id`, `kode`, `negara`, `champion`) VALUES
(1, 'Jer', 'Jerman', 4),
(2, 'Spa', 'Spanyol', 3),
(3, 'Eng', 'English', 3),
(4, 'Jer', 'Jerman', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bukutamu`
--

CREATE TABLE `tbl_bukutamu` (
  `id_bt` int(10) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_bukutamu`
--

INSERT INTO `tbl_bukutamu` (`id_bt`, `nama`, `email`, `isi`) VALUES
(1, 'Muhammad Burhanuddin Fawwaz', 'burhan1908902@gmail.com', 'Mahasiswa UPN sistem informasi 18 paralel A'),
(2, 'Jamet Habidin', 'jameteboyz@gmail.com', 'Ketua komunitas rambut celurit e-boys Gang'),
(3, 'Martin Garrix', 'martingarrix91@gmail.com', 'Pioner Youngest DJ asal Belanda'),
(10, 'Freeston Sinaga Putra', 'Freeston@gmail.com', 'Saya adalah keturunan asli batak asal sidoarjo'),
(11, 'Troye Sivan', 'troyesivan@gmail.com', 'Saya adalah penyanyi dengan genre POP'),
(12, 'Antok Putra Muhammad', 'antugamg@gmail.com', 'Rumah saya yang di IKIP deket kampus'),
(13, 'Nizar Zulmi', 'nizarzzz@gmail.com', 'Aku temen smk mu dulu di Antartika'),
(14, 'Ridwan Ali Hasan', 'ridwansan91@gmail.com', 'Temen warkop biasa dulu di Angop'),
(15, 'Soleh Arijuddin', 'solehari@gmail.com', 'Temen ngopi dulu di warkop bu susi perumahan bluru');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `liga`
--
ALTER TABLE `liga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_bukutamu`
--
ALTER TABLE `tbl_bukutamu`
  ADD PRIMARY KEY (`id_bt`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `liga`
--
ALTER TABLE `liga`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_bukutamu`
--
ALTER TABLE `tbl_bukutamu`
  MODIFY `id_bt` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
