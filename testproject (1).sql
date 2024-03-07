-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2024 at 03:48 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `catatan_transaksi`
--

CREATE TABLE `catatan_transaksi` (
  `ct_id` int(11) NOT NULL,
  `transaksi_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log_aktifitas`
--

CREATE TABLE `log_aktifitas` (
  `log_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `aktifitas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log_aktifitas`
--

INSERT INTO `log_aktifitas` (`log_id`, `user_id`, `tanggal`, `waktu`, `aktifitas`) VALUES
(1, 3, '0000-00-00', '00:00:00', 'Update Data'),
(2, 3, '0000-00-00', '00:00:00', 'Update Data'),
(3, 6, '0000-00-00', '00:00:00', 'Update Data'),
(4, 6, '0000-00-00', '00:00:00', 'Update Data'),
(5, 6, '2023-05-09', '10:20:22', 'Update Data'),
(6, 6, '2023-05-09', '00:00:00', 'Update Data'),
(7, 6, '2023-05-09', '20:34:17', 'Update Data'),
(8, 3, '2023-05-21', '10:38:52', 'Update Data'),
(9, 7, '2023-05-22', '09:41:30', 'Delete Data'),
(10, 8, '2023-05-22', '09:42:36', 'Delete Data'),
(11, 4, '2023-05-23', '13:47:31', 'Update Data'),
(12, 4, '2023-05-24', '18:29:01', 'Update Data'),
(13, 4, '2023-05-24', '18:29:13', 'Update Data'),
(14, 4, '2023-05-24', '18:29:24', 'Update Data'),
(15, 2, '2023-05-26', '13:20:29', 'Update Data'),
(16, 9, '2023-05-27', '14:21:08', 'Delete Data'),
(17, 10, '2023-05-29', '15:27:17', 'Delete Data'),
(18, 2, '2023-05-30', '12:49:27', 'Update Data'),
(19, 2, '2023-05-30', '13:49:54', 'Update Data'),
(20, 10, '2023-05-30', '14:00:58', 'Update Data'),
(21, 1, '2023-06-05', '20:01:39', 'Update Data'),
(22, 1, '2023-06-05', '20:03:15', 'Update Data'),
(23, 11, '2023-06-13', '18:45:34', 'Delete Data'),
(24, 11, '2023-06-15', '12:51:37', 'Update Data'),
(25, 11, '2023-06-15', '19:25:22', 'Update Data'),
(26, 12, '2023-09-06', '18:41:17', 'Insert Data'),
(27, 12, '2023-09-06', '18:42:38', 'Update Data'),
(28, 12, '2023-09-06', '19:18:50', 'Update Data'),
(29, 13, '2023-09-06', '19:34:11', 'Insert Data'),
(30, 14, '2023-09-06', '20:23:52', 'Insert Data'),
(31, 14, '2023-09-06', '23:27:28', 'Update Data'),
(32, 15, '2024-03-01', '01:52:21', 'Insert Data'),
(33, 14, '2024-03-01', '01:52:34', 'Update Data'),
(34, 14, '2024-03-01', '01:53:18', 'Update Data'),
(35, 16, '2024-03-04', '14:05:53', 'Insert Data');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kategori` enum('Makanan','Minuman') NOT NULL,
  `harga` int(12) NOT NULL,
  `stok` int(5) NOT NULL,
  `gambar` text NOT NULL,
  `status` enum('Tersedia','Habis') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `nama`, `kategori`, `harga`, `stok`, `gambar`, `status`) VALUES
(18, 'Rock Salt Cheese', 'Minuman', 14, 18, 'rocksaltcheese.png', 'Tersedia'),
(19, 'Milk tea', 'Minuman', 10, 16, 'milktea.png', 'Tersedia'),
(20, 'Chocolate With Pudding', 'Minuman', 14, 19, 'chocolate.png', 'Tersedia'),
(28, 'mango Matcha', 'Minuman', 9, 19, 'mangga.jpg', 'Tersedia'),
(29, 'Avocado Matcha', 'Minuman', 13, 19, 'avocado.jpg', 'Tersedia'),
(31, 'Mix Bubble Waffle', 'Makanan', 11, 20, 'Breyer-Group-of-Colleges-Logo-PNG.png', 'Tersedia'),
(32, 'test', 'Makanan', 1000, 1, 'croffle puff cream.webp', 'Tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` int(11) NOT NULL,
  `id_pesan` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `harga` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id`, `id_pesan`, `menu_id`, `nama`, `jumlah`, `harga`) VALUES
(34, 44, 1, 'Soto Sapi', 1, 5000),
(35, 44, 11, 'Es Teh Lemon', 1, 3500),
(36, 45, 1, 'Soto Sapi', 4, 5000),
(37, 46, 1, 'Soto Sapi', 2, 5000),
(38, 47, 1, 'Soto Sapi', 1, 5000),
(39, 47, 3, 'Soto Ayam', 1, 5000),
(40, 48, 1, 'Soto Sapi', 1, 5000),
(41, 48, 3, 'Soto Ayam', 1, 5000),
(42, 49, 12, 'Tempe', 1, 1000),
(43, 49, 1, 'Soto Sapi', 1, 5000),
(44, 50, 32, 'test', 1, 1000),
(45, 51, 18, 'Rock Salt Cheese', 1, 14),
(46, 51, 19, 'Milk tea', 1, 10),
(47, 52, 32, 'test', 1, 1000),
(48, 53, 20, 'Chocolate With Pudding', 1, 14),
(49, 53, 32, 'test', 1, 1000),
(50, 54, 32, 'test', 1, 1000),
(51, 54, 19, 'Milk tea', 1, 10),
(52, 55, 18, 'Rock Salt Cheese', 1, 14),
(53, 55, 28, 'mango Matcha', 1, 9),
(54, 56, 29, 'Avocado Matcha', 1, 13),
(55, 57, 19, 'Milk tea', 1, 10),
(56, 58, 19, 'Milk tea', 1, 10);

--
-- Triggers `pemesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan` AFTER INSERT ON `pemesanan` FOR EACH ROW BEGIN 
	UPDATE menu SET stok = stok-NEW.jumlah
    WHERE menu_id = NEW.menu_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `transaksi_id` int(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `no_meja` int(11) NOT NULL,
  `tanggal_transaksi` date NOT NULL DEFAULT current_timestamp(),
  `total_pembayaran` int(11) NOT NULL,
  `bayar` int(11) NOT NULL,
  `kembalian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`transaksi_id`, `name`, `no_meja`, `tanggal_transaksi`, `total_pembayaran`, `bayar`, `kembalian`) VALUES
(44, 'bagas', 8, '2023-06-14', 0, 0, 0),
(45, 'Budi', 7, '2023-06-15', 0, 0, 0),
(46, 'vian', 22, '2023-06-16', 0, 0, 0),
(47, 'tff', 354, '2023-06-16', 0, 0, 0),
(48, 'bab', 9, '2023-06-16', 0, 0, 0),
(49, 'ahyed', 1, '2023-09-06', 0, 0, 0),
(50, 'ahyed test', 1, '2023-09-06', 0, 0, 0),
(51, 'b', 5, '2023-09-06', 0, 0, 0),
(52, 'g', 5, '2023-09-06', 0, 0, 0),
(53, 'haziq', 1, '2024-02-06', 0, 0, 0),
(54, 'haziq', 8, '2024-02-27', 0, 0, 0),
(55, 'yana', 1, '2024-02-27', 0, 0, 0),
(56, 'ayed test', 1, '2024-03-01', 0, 0, 0),
(57, 'test 1', 7, '2024-03-01', 0, 0, 0),
(58, 'khalis', 6, '2024-03-01', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `status` enum('Aktif','Mati') NOT NULL,
  `user_role` enum('Kasir','Manager','Admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `nama`, `status`, `user_role`) VALUES
(12, 'ahyed', '123', 'ahyed kakap', 'Aktif', 'Admin'),
(13, 'yana', '123', 'yana', 'Aktif', 'Manager'),
(14, 'haziq', '123', 'ziqsam', 'Aktif', 'Kasir'),
(15, 'irfan', '123', 'irfan', 'Aktif', 'Kasir'),
(16, 'khalis123', 'khalis123', 'khalis', 'Aktif', 'Kasir');

--
-- Triggers `user`
--
DELIMITER $$
CREATE TRIGGER `insert_log` AFTER INSERT ON `user` FOR EACH ROW INSERT INTO log_aktifitas SET 
        user_id = NEW.user_id,
        tanggal = now(),
        waktu = now(),
        aktifitas = 'Insert Data'
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_log` AFTER UPDATE ON `user` FOR EACH ROW INSERT INTO log_aktifitas SET 
        user_id = NEW.user_id,
        tanggal = now(),
        waktu = now(),
        aktifitas = 'Update Data'
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catatan_transaksi`
--
ALTER TABLE `catatan_transaksi`
  ADD PRIMARY KEY (`ct_id`);

--
-- Indexes for table `log_aktifitas`
--
ALTER TABLE `log_aktifitas`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`transaksi_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catatan_transaksi`
--
ALTER TABLE `catatan_transaksi`
  MODIFY `ct_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log_aktifitas`
--
ALTER TABLE `log_aktifitas`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `transaksi_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
