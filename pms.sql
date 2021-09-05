-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2021 at 07:19 PM
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
-- Database: `pms`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `ID_cart` int(11) NOT NULL,
  `productID` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `user_ID` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`ID_cart`, `productID`, `username`, `user_ID`) VALUES
(17, 'POF-120', 'axeside', '04081783011735'),
(18, 'STRAPPING-192', 'axeside', '04081783011735');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `kode` varchar(15) NOT NULL,
  `item` text NOT NULL,
  `nominal` int(12) NOT NULL,
  `status` enum('lunas','belum') NOT NULL DEFAULT 'belum',
  `dibuat` datetime NOT NULL DEFAULT current_timestamp(),
  `username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`kode`, `item`, `nominal`, `status`, `dibuat`, `username`) VALUES
('010012203204080', 'Strapping Band 12 MM - STRAPPING;', 275000, 'lunas', '2021-06-17 13:16:09', 'andy123'),
('011783011704081', 'POF Shrink Film 15 Mic x 14 Inch - POF;POF Shrink Film 15 Mic x 11 Inch - POF;PVC POLOS TRANS JEBOL - PVC;Strapping Band 15 MM - STRAPPING;', 1925000, 'lunas', '2021-07-04 14:51:51', 'axeside'),
('019635796304089', 'POF Shrink Film 15 Mic x 7 Inch - POF;POF Shrink Film 15 Mic x 14 Inch - POF;', 700000, 'lunas', '2021-07-06 14:20:04', 'andijeff'),
('0196357963686', 'POF Shrink Film 15 Mic x 7 Inch - POF;POF Shrink Film 15 Mic x 11 Inch - POF;', 1100000, 'lunas', '2021-04-05 19:35:05', 'andijeff');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productID` varchar(20) NOT NULL,
  `namaProduct` text NOT NULL,
  `gambarProduct` text NOT NULL,
  `date` date NOT NULL,
  `detail` text NOT NULL,
  `version` text NOT NULL,
  `price` int(12) NOT NULL,
  `genreProduct` enum('PVC','POF','STRAPPING') NOT NULL,
  `jumlah_pembelian` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productID`, `namaProduct`, `gambarProduct`, `date`, `detail`, `version`, `price`, `genreProduct`, `jumlah_pembelian`) VALUES
('POF-120', 'POF Shrink Film 15 Mic x 7 Inch', 'POF Shrink Film 15 Mic x 7 Inch.jpg', '2021-03-02', 'Ukuran: 7 Inch X 1332 Meter, Thickness: 15 Micro', 'New', 400000, 'POF', 0),
('POF-417', 'POF Shrink Film 15 Mic x 14 Inch', 'POF Shrink Film 15 Mic x 14 Inch.jpg', '2020-09-25', 'Ukuran: 14 Inch X 1332 Meter, Thickness: 15 Micro', 'Second', 300000, 'POF', 0),
('POF-677', 'POF Shrink Film 15 Mic x 11 Inch', 'POF Shrink Film 15 Mic x 11 Inch.jpg', '2021-03-16', 'Ukuran: 11 Inch x 1.332 Meter, Thickness: 15 Micro', 'New', 600000, 'POF', 0),
('POF-826', 'POF Shrink Film 15 Mic x 40 Inch', 'POF Shrink Film 15 Mic x 40 Inch.jpg', '2021-03-16', 'Ukuran: 40 Centimeter X 19 Inch, Thickness: 15 Micro', 'New', 900000, 'POF', 0),
('PVC-818', 'PVC POLOS TRANS JEBOL', 'PVC POLOS TRANS JEBOL.jpg', '2021-03-03', 'Ukuran: 415 x 350 x 0.07 Inch, Berat: 30 KG', 'New', 700000, 'PVC', 0),
('STRAPPING-192', 'Strapping Band 12 MM', 'Strapping Band 12 MM.jpg', '2020-12-17', 'Ukuran: Panjang 12 Milimeter', 'New', 275000, 'STRAPPING', 0),
('STRAPPING-710', 'Strapping Band 15 MM', 'Strapping Band 15 MM.jpg', '2021-01-10', 'Ukuran: Panjang 15 Milimeter', 'New', 325000, 'STRAPPING', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `user_ID` varchar(15) NOT NULL,
  `level` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nama`, `username`, `email`, `alamat`, `password`, `no_hp`, `user_ID`, `level`) VALUES
('Andy Setiawan', 'andy123', 'andy123@gmail.com', 'Jl. Bekasi Timur Raya No.17', 'andy123', '08001220323', '0408001220323', 'user'),
('Alex', 'axeside', 'axeside@gmail.com', 'Jl. Bogor Raya 13 No.17', 'axeside', '081783011735', '04081783011735', 'user'),
('Jeffry', 'andijeff', 'jandiyanto@yahoo.com', 'Sunter Paradise 3', 'andijeff', '089635796311', '04089635796311', 'user'),
('admin_pms', 'admin_pms', 'p_makmur@gmail.com', 'Jl. Pademangan 3 Gang 21 No.273', 'admin_pms', '6456427', '046456427', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`ID_cart`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `ID_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
