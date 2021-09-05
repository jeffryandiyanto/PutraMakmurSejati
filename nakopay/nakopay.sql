-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2021 at 07:20 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nakopay`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun_bisnis`
--

CREATE TABLE `akun_bisnis` (
  `id_user` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `noHp` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `nama_usaha` text COLLATE utf8_unicode_ci NOT NULL,
  `api_key` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `akun_bisnis`
--

INSERT INTO `akun_bisnis` (`id_user`, `noHp`, `nama_usaha`, `api_key`) VALUES
('09081282200921', '081282200921', 'Putra Makmur Sejati', 'e7861098831cd3ce54a0573798cabf92');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `kode` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `item` text COLLATE utf8_unicode_ci NOT NULL,
  `nominal` int(11) NOT NULL,
  `pemilik` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('lunas','belum') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'belum',
  `dibuat` datetime NOT NULL DEFAULT current_timestamp(),
  `username` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`kode`, `item`, `nominal`, `pemilik`, `status`, `dibuat`, `username`) VALUES
('010012203204080', 'Strapping Band 12 MM - STRAPPING;', 275000, '09081282200921', 'lunas', '2021-06-17 13:16:09', 'andy123'),
('011783011704081', 'POF Shrink Film 15 Mic x 14 Inch - POF;POF Shrink Film 15 Mic x 11 Inch - POF;PVC POLOS TRANS JEBOL - PVC;Strapping Band 15 MM - STRAPPING;', 1925000, '09081282200921', 'lunas', '2021-07-04 14:51:51', 'axeside'),
('019635796304089', 'POF Shrink Film 15 Mic x 7 Inch - POF;POF Shrink Film 15 Mic x 14 Inch - POF;', 700000, '09081282200921', 'lunas', '2021-07-06 14:20:04', 'andijeff'),
('0196357963686', 'POF Shrink Film 15 Mic x 7 Inch - POF;POF Shrink Film 15 Mic x 11 Inch - POF;', 1100000, '09081282200921', 'lunas', '2021-04-05 19:35:05', 'andijeff');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` varchar(15) NOT NULL,
  `id_user` varchar(15) NOT NULL,
  `target_user` varchar(15) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp(),
  `nominal` int(11) NOT NULL DEFAULT 0,
  `kategori` enum('debit','credit') NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `target_user`, `tanggal`, `nominal`, `kategori`, `deskripsi`) VALUES
('01172111512735', '09087582065331', '017582065304087', '2021-07-11 16:51:27', 1575000, 'credit', 'Transfer via Virtual Account Rp. 1575000 ke 017582065304087'),
('01462112200961', '09089635796311', '09081282200921', '2021-06-14 17:20:09', 100000, 'credit', 'Transfer Rp. 100000 ke 09081282200921'),
('01762108245540', '09089635796311', '010012203204080', '2021-06-17 13:24:55', 275000, 'credit', 'Transfer via Virtual Account Rp. 275000 ke 010012203204080'),
('0472109521654', '09089635796311', '011783011704081', '2021-07-04 14:52:16', 1925000, 'credit', 'Transfer via Virtual Account Rp. 1925000 ke 011783011704081'),
('0492105451952', '09081212121212', '011231231204081', '2021-09-04 10:45:19', 575000, 'credit', 'Transfer via Virtual Account Rp. 575000 ke 011231231204081'),
('0542114354064', '09089635796311', '0196357963686', '2021-04-05 19:35:40', 1100000, 'credit', 'Transfer via Virtual Account Rp. 1100000 ke 0196357963686'),
('0672109205278', '09089635796311', '019635796304089', '2021-07-06 14:20:52', 700000, 'credit', 'Transfer via Virtual Account Rp. 700000 ke 019635796304089'),
('11172111512735', '09081282200921', '09087582065331', '2021-07-11 16:51:27', 1575000, 'debit', 'Menerima uang melalui Virtual Account Rp. 1575000 dari 09087582065331'),
('11462112200961', '09081282200921', '09089635796311', '2021-06-14 17:20:09', 100000, 'debit', 'Menerima uang Rp. 100000 dari 09089635796311'),
('11762108245540', '09081282200921', '09089635796311', '2021-06-17 13:24:55', 275000, 'debit', 'Menerima uang melalui Virtual Account Rp. 275000 dari 09089635796311'),
('1472109521654', '09081282200921', '09089635796311', '2021-07-04 14:52:16', 1925000, 'debit', 'Menerima uang melalui Virtual Account Rp. 1925000 dari 09089635796311'),
('1492105451952', '09081282200921', '09081212121212', '2021-09-04 10:45:19', 575000, 'debit', 'Menerima uang melalui Virtual Account Rp. 575000 dari 09081212121212'),
('1542114354064', '09081282200921', '09089635796311', '2021-04-05 19:35:40', 1100000, 'debit', 'Menerima uang melalui Virtual Account Rp. 1100000 dari 09089635796311'),
('1672109205278', '09081282200921', '09089635796311', '2021-07-06 14:20:52', 700000, 'debit', 'Menerima uang melalui Virtual Account Rp. 700000 dari 09089635796311');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(15) NOT NULL,
  `nama` text NOT NULL,
  `pin` varchar(6) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `alamat` text NOT NULL,
  `email` text NOT NULL,
  `tgl_Lahir` date NOT NULL,
  `profile_img` varchar(15) NOT NULL DEFAULT 'default.png',
  `saldo` int(8) NOT NULL DEFAULT 10000000,
  `lastLogin` date NOT NULL DEFAULT current_timestamp(),
  `status` enum('user','bisnis') NOT NULL DEFAULT 'user'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `pin`, `no_hp`, `alamat`, `email`, `tgl_Lahir`, `profile_img`, `saldo`, `lastLogin`, `status`) VALUES
('09081282200921', 'Rini Indriati', '123456', '081282200921', 'Jl. Pademangan 3 Gang 21 No.273', 'p_makmur@yahoo.com', '1999-11-27', 'default.png', 7135000, '2021-06-10', 'bisnis'),
('09089635796311', 'Andy', '123456', '089635796311', 'Sunter Paradise 3', 'andy@gmail.com', '1999-11-22', 'default.png', 5900000, '2021-06-17', 'user'),
('09081212121212', 'Test', '123456', '081212121212', 'test', 'test@gmail.com', '1999-11-11', 'default.png', 9425000, '2021-09-04', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun_bisnis`
--
ALTER TABLE `akun_bisnis`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
