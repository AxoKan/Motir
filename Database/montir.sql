-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2024 at 04:28 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `montir`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id_history` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `tanggal_awal` date DEFAULT NULL,
  `tanggal_akhir` date DEFAULT NULL,
  `jenis` enum('Perbaikan','Pengecekan','Pengecekan dan Perbaikan') DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `metode` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id_history`, `nama`, `alamat`, `tanggal_awal`, `tanggal_akhir`, `jenis`, `harga`, `metode`) VALUES
(4, 'Budhi Jayanto', 'botania 2', '2024-03-17', '2024-03-24', 'Pengecekan', 50000, 'cash'),
(5, 'Erwin Lie', 'botania 1', '2024-03-14', '2024-03-25', 'Perbaikan', 100000, 'transfer'),
(6, 'Keane MB', 'Orchid Park', '2024-03-05', '2024-03-18', 'Pengecekan dan Perbaikan', 150000, 'cash'),
(7, 'David Lim', 'sydney', '2024-03-18', '2024-03-11', 'Perbaikan', 100000, 'transfer'),
(8, 'Evanexel Benedict', 'golden park', '2024-03-20', '2024-03-22', 'Pengecekan', 30000000, 'transfer'),
(9, 'Lietat Lim', 'batu batam', '2024-03-19', '2024-03-20', 'Pengecekan', 30000000, 'transfer'),
(10, 'Lina Lim', 'grand batam', '2024-03-29', '2024-03-30', 'Pengecekan', 80000, 'cash'),
(11, 'Yuro Stoner', 'golden park', '2024-03-02', '2024-03-13', 'Pengecekan dan Perbaikan', 30000000, 'cash'),
(12, 'Budhi Jayanto', 'komplek raflesia', '2024-03-19', '2024-03-20', 'Pengecekan', 834334, 'transfer'),
(13, 'Budhi Jayanto', 'komplek asam', '2024-03-18', '2024-03-21', 'Pengecekan', 100000, 'transfer');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id_pesanan` int(11) NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `metode` enum('cash','transfer') DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `nama_pemesan` varchar(255) DEFAULT NULL,
  `tanggal_pemesanan` date DEFAULT NULL,
  `Jenis_Pemesanan` enum('Perbaikan','Pengecekan','Pengecekan dan Perbaikan') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `no_hp` varchar(255) DEFAULT NULL,
  `level` enum('1','2','3') DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `alamat`, `no_hp`, `level`, `photo`, `password`) VALUES
(1, 'Budhi Jayanto', 'axovers@gmail.com', 'botania 2', '82169116807', '1', 'PP Astronot.png', 1137),
(2, 'Axovers_', 'axovers@gmail.com', 'botania 2', '82169116807', '2', 'Axo.png', 1137),
(3, 'Marc Dolos', 'axovers@gmail.com', 'botania 2', '82169116807', '3', 'Marc.jpeg', 1137),
(4, 'weny aja', 'wenny123@gmail.com', 'botania 2', '434343', '3', 'mini rimuru.jpg', 1137),
(5, 'BudhiAhwad', 'budijayanto174@gmail.com', 'Bukit Palem Permai', '82169076811', '3', 'PP Chip.png', 1137);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id_history`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
