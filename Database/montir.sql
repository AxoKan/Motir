-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2024 at 03:09 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 7.4.27

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
(1, 'Marc Dolos', 'botania 2', '2024-03-17', '2024-03-24', 'Pengecekan', 50000, 'cash'),
(2, 'Marc Dolos', 'botania 1', '2024-03-14', '2024-03-25', 'Perbaikan', 100000, 'transfer'),
(3, 'Marc Dolos', 'Orchid Park', '2024-03-05', '2024-03-18', 'Pengecekan dan Perbaikan', 150000, 'cash'),
(4, 'Marc Dolos', 'sydney', '2024-03-18', '2024-03-11', 'Perbaikan', 100000, 'transfer'),
(5, 'BudhiAhwad', 'golden park', '2024-03-20', '2024-03-22', 'Pengecekan', 30000000, 'transfer'),
(6, 'BudhiAhwad', 'batu batam', '2024-03-19', '2024-03-20', 'Pengecekan', 30000000, 'transfer'),
(7, 'BudhiAhwad', 'grand batam', '2024-03-29', '2024-03-30', 'Pengecekan', 80000, 'cash'),
(8, 'weny aja', 'golden park', '2024-03-02', '2024-03-13', 'Pengecekan dan Perbaikan', 30000000, 'cash'),
(9, 'weny aja', 'komplek raflesia', '2024-03-19', '2024-03-20', 'Pengecekan', 834334, 'transfer'),
(10, 'weny aja', 'komplek asam', '2024-03-18', '2024-03-21', 'Pengecekan', 100000, 'transfer'),
(11, 'AxoAja', 'botania 2', '2024-03-21', '2024-03-21', 'Perbaikan', 30000000, 'transfer'),
(12, 'AxoAja', 'Komplek Eden Park', '2024-04-01', '2024-04-01', 'Perbaikan', 100000, 'transfer'),
(13, 'AxoAja', 'Mall Batam', '2024-03-27', '2024-04-01', 'Perbaikan', 100000, 'transfer'),
(17, 'AxoAja', 'Botania', '2024-04-01', '2024-04-05', 'Pengecekan dan Perbaikan', 100000, 'cash'),
(18, 'BudhiAhwad', 'sydney', '2024-03-18', '2024-04-17', 'Perbaikan', 100000, 'transfer');

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

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id_pesanan`, `alamat`, `metode`, `harga`, `nama_pemesan`, `tanggal_pemesanan`, `Jenis_Pemesanan`) VALUES
(2, 'sydney', 'transfer', 100000, 'BudhiAhwad', '2024-04-14', 'Perbaikan'),
(3, 'sydney', 'transfer', 100000, 'weny aja', '2024-04-22', 'Perbaikan'),
(4, 'sydney', 'cash', 100000, 'BudhiAhwad', '2024-04-01', 'Perbaikan'),
(5, 'sydney', 'transfer', 100000, 'weny aja', '2024-03-31', 'Perbaikan'),
(6, 'sydney', 'cash', 100000, 'BudhiAhwad', '2024-03-28', 'Perbaikan'),
(8, 'sydney', 'cash', 100000, 'weny aja', '2024-03-12', 'Perbaikan'),
(9, 'Botania', 'cash', 100000, 'AxoAja', '2024-04-01', 'Perbaikan');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `no_hp` varchar(255) DEFAULT NULL,
  `level` enum('Admin','Montir','User') DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `no_hp`, `level`, `photo`, `password`) VALUES
(1, 'Budhi Jayanto', 'axovers@gmail.com', '82169116807', 'Admin', 'Marcuse.jpg', 1137),
(2, 'Axovers_', 'axovers@gmail.com', '82169116807', 'Montir', 'Axo.png', 1137),
(3, 'Marc Dolos', 'axovers@gmail.com', '82169116807', 'Montir', 'Marc.jpeg', 1137),
(4, 'weny aja', 'wenny123@gmail.com', '434343', 'User', 'mini rimuru.jpg', 1137),
(5, 'BudhiAhwad', 'budijayanto174@gmail.com', '82169076811', 'User', 'PP Chip.png', 1137),
(7, 'AxoAja', 'AxoAja@gmail.com', '2232323', 'User', 'PP Astronot.png', 1137),
(9, 'budhi_ahwad', 'budijayanto174@gmail.com', '82169076811', 'Admin', 'PP Aquarium.png', 1137);

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
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
