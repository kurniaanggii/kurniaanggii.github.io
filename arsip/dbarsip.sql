-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2021 at 10:57 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbarsip`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `tb_suratkeluar`
--

CREATE TABLE `tb_suratkeluar` (
  `id_suratkeluar` int(11) NOT NULL,
  `nomor_suratkeluar` varchar(30) NOT NULL,
  `tanggalsurat_suratkeluar` date NOT NULL,
  `tanggalkeluar_suratkeluar` date NOT NULL,
  `tanggal_entry` date NOT NULL,
  `perihal_suratkeluar` varchar(100) NOT NULL,
  `tujuan_suratkeluar` varchar(100) NOT NULL,
  `file_suratkeluar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_suratkeluar`
--

INSERT INTO `tb_suratkeluar` (`id_suratkeluar`, `nomor_suratkeluar`, `tanggalsurat_suratkeluar`, `tanggalkeluar_suratkeluar`, `tanggal_entry`, `perihal_suratkeluar`, `tujuan_suratkeluar`, `file_suratkeluar`) VALUES
(2, '522/2/GAPOKTAN/2021', '2021-03-24', '2021-05-11', '2021-12-06', 'Surat pemberitahuan', 'Ketua Semua Kelompok Tani', '61addad9f41a9.pdf'),
(3, '522/3/GAPOKTAN/2021', '2021-03-24', '2021-03-27', '2021-03-31', 'Berita Acara', 'Kepala Desa', '61addbff5011e.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tb_suratmasuk`
--

CREATE TABLE `tb_suratmasuk` (
  `id_suratmasuk` int(11) NOT NULL,
  `nomor_suratmasuk` varchar(30) NOT NULL,
  `tanggalsurat_suratmasuk` date NOT NULL,
  `tanggalmasuk_suratmasuk` date NOT NULL,
  `tanggal_entry` date NOT NULL,
  `perihal_suratmasuk` varchar(100) NOT NULL,
  `tujuan_suratmasuk` varchar(100) NOT NULL,
  `pengirim_suratmasuk` varchar(100) NOT NULL,
  `file_suratmasuk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_suratmasuk`
--

INSERT INTO `tb_suratmasuk` (`id_suratmasuk`, `nomor_suratmasuk`, `tanggalsurat_suratmasuk`, `tanggalmasuk_suratmasuk`, `tanggal_entry`, `perihal_suratmasuk`, `tujuan_suratmasuk`, `pengirim_suratmasuk`, `file_suratmasuk`) VALUES
(9, '1', '2021-12-01', '2021-12-03', '2021-12-06', 'Pemberitahuan Pajak', 'Poktan', 'Perpajakan', '61adde41eec70.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tb_suratkeluar`
--
ALTER TABLE `tb_suratkeluar`
  ADD PRIMARY KEY (`id_suratkeluar`),
  ADD UNIQUE KEY `nomor_suratkeluar` (`nomor_suratkeluar`);

--
-- Indexes for table `tb_suratmasuk`
--
ALTER TABLE `tb_suratmasuk`
  ADD PRIMARY KEY (`id_suratmasuk`),
  ADD UNIQUE KEY `nomor_suratmasuk` (`nomor_suratmasuk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_suratkeluar`
--
ALTER TABLE `tb_suratkeluar`
  MODIFY `id_suratkeluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_suratmasuk`
--
ALTER TABLE `tb_suratmasuk`
  MODIFY `id_suratmasuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
