-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2022 at 12:46 AM
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
-- Database: `salza`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_form`
--

CREATE TABLE `tb_form` (
  `id_zakat` int(11) NOT NULL,
  `nama` text NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `alamat` text DEFAULT NULL,
  `masjid` text DEFAULT NULL,
  `jenis` text DEFAULT NULL,
  `tanggungan` int(11) DEFAULT NULL,
  `beras` int(11) DEFAULT NULL,
  `uang` int(11) DEFAULT NULL,
  `infak` int(11) DEFAULT NULL,
  `tanggal` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_form`
--

INSERT INTO `tb_form` (`id_zakat`, `nama`, `nohp`, `alamat`, `masjid`, `jenis`, `tanggungan`, `beras`, `uang`, `infak`, `tanggal`) VALUES
(1, 'Muhammad Ardi', '0821321421', 'Jl. Taman Cibalagung', 'Masjid Hidayah', 'Zakat Fitrah', 2, 2, 1000000, 200000, '12/04/2022'),
(2, 'Muhammad Ryan', '08123231231', 'Jl. Merjokerto ', 'Masjid 212', 'Zakat Maal', 3, 3, 500000, 100000, '16/04/2022'),
(3, 'Aldi Taher', '0814233213', 'Jl. Tasik Ngetan Kulon', 'Masjid An Nur', 'Zakat Maal', 2, 4, 500000, 150000, '01/04/2022');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `bulan` varchar(10) NOT NULL,
  `shubuh` varchar(10) NOT NULL,
  `dzuhur` varchar(10) NOT NULL,
  `ashar` varchar(10) NOT NULL,
  `maghrib` varchar(10) NOT NULL,
  `isya` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jadwal`
--

INSERT INTO `tb_jadwal` (`bulan`, `shubuh`, `dzuhur`, `ashar`, `maghrib`, `isya`) VALUES
('Januari', '4:26', '12:05', '15:27', '18:21', '19:33'),
('Februari', '4:39', '12:11', '12:09', '15:20', '19:30'),
('Maret', '4:43', '12:05', '15:13', '18:11', '19:18'),
('April', '4:40', '11:57', '15:16', '17:57', '19.05'),
('Mei', '4:38', '11:54', '15:14', '17:49', '18.59'),
('Juni', '4:42', '11:57', '15:16', '17:50', '19:03'),
('Juli', '4:46', '12:01', '15:22', '17:56', '19:07'),
('Agustus', '4:42', '12:01', '15:28', '17:59', '19:07'),
('September', '4:31', '11:52', '15:04', '17:56', '19:02'),
('Oktober', '4:15', '11:43', '14:59', '17:52', '19:00'),
('November', '4:05', '11:43', '15:01', '17:57', '19:08'),
('Desember', '4:11', '11:53', '15:18', '18:10', '19:23');

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `email` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`email`, `username`, `password`) VALUES
('dfsa@gmail.com', 'asd', '7815696ecbf1c96e6894b779456d33'),
('dzk@gmail.com', 'dzkk', '202cb962ac59075b964b07152d234b'),
('asdasd@gmail.com', 'keren', '202cb962ac59075b964b07152d234b');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `fullname` text DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`fullname`, `email`) VALUES
('adfs', 'dfsa@gmail.com'),
('Zaki Mudhofar', 'dzk@gmail.com'),
('Ari Surya', 'asdasd@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_form`
--
ALTER TABLE `tb_form`
  ADD UNIQUE KEY `idzakat` (`id_zakat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_form`
--
ALTER TABLE `tb_form`
  MODIFY `id_zakat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
