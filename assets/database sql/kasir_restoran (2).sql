-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jun 2023 pada 10.35
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kasir_restoran`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `catatan_transaksi`
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
-- Struktur dari tabel `log_aktifitas`
--

CREATE TABLE `log_aktifitas` (
  `log_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `aktifitas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `log_aktifitas`
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
(25, 11, '2023-06-15', '19:25:22', 'Update Data');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
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
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`menu_id`, `nama`, `kategori`, `harga`, `stok`, `gambar`, `status`) VALUES
(1, 'Soto Sapi', 'Makanan', 5000, 36, 'soto_sapi.jpeg', 'Tersedia'),
(3, 'Soto Ayam', 'Makanan', 5000, 37, 'soto_ayam.jpg', 'Tersedia'),
(4, 'Teh Hangat Atau Panas', 'Minuman', 3000, 47, 'teh_hangat.jpeg', 'Tersedia'),
(5, 'Es Teh', 'Minuman', 3000, 50, 'es_teh.jpg', 'Tersedia'),
(6, 'Kopi', 'Minuman', 3000, 50, 'kopi.jpeg', 'Tersedia'),
(7, 'Es Kopi', 'Minuman', 4500, 49, 'es_kopi.jpg', 'Tersedia'),
(9, 'Bakmi', 'Makanan', 8000, 50, 'bakmi.jpg', 'Habis'),
(10, 'Nasi Padang', 'Makanan', 10000, 40, 'nasi_padang.jpeg', 'Tersedia'),
(11, 'Es Teh Lemon', 'Minuman', 3500, 98, 'es_teh_lemon.jpg', 'Tersedia'),
(12, 'Tempe', 'Makanan', 1000, 100, 'tempe.jpg', 'Tersedia'),
(14, 'Tahu', 'Makanan', 1000, 100, 'tahu.jpg', 'Tersedia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
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
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id`, `id_pesan`, `menu_id`, `nama`, `jumlah`, `harga`) VALUES
(34, 44, 1, 'Soto Sapi', 1, 5000),
(35, 44, 11, 'Es Teh Lemon', 1, 3500),
(36, 45, 1, 'Soto Sapi', 4, 5000),
(37, 46, 1, 'Soto Sapi', 2, 5000),
(38, 47, 1, 'Soto Sapi', 1, 5000),
(39, 47, 3, 'Soto Ayam', 1, 5000),
(40, 48, 1, 'Soto Sapi', 1, 5000),
(41, 48, 3, 'Soto Ayam', 1, 5000);

--
-- Trigger `pemesanan`
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
-- Struktur dari tabel `transaksi`
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
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`transaksi_id`, `name`, `no_meja`, `tanggal_transaksi`, `total_pembayaran`, `bayar`, `kembalian`) VALUES
(44, 'bagas', 8, '2023-06-14', 0, 0, 0),
(45, 'Budi', 7, '2023-06-15', 0, 0, 0),
(46, 'vian', 22, '2023-06-16', 0, 0, 0),
(47, 'tff', 354, '2023-06-16', 0, 0, 0),
(48, 'bab', 9, '2023-06-16', 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
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
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `nama`, `status`, `user_role`) VALUES
(1, 'admin', '123', 'Bagas', 'Aktif', 'Admin'),
(2, 'mager', 'ya', 'Sudirman Said', 'Aktif', 'Manager'),
(10, 'kasir', 'ya', 'Kariii', 'Aktif', 'Kasir'),
(11, 'Kasir1', 'ya', 'Jihan', 'Mati', 'Kasir');

--
-- Trigger `user`
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
-- Indeks untuk tabel `catatan_transaksi`
--
ALTER TABLE `catatan_transaksi`
  ADD PRIMARY KEY (`ct_id`);

--
-- Indeks untuk tabel `log_aktifitas`
--
ALTER TABLE `log_aktifitas`
  ADD PRIMARY KEY (`log_id`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`transaksi_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `catatan_transaksi`
--
ALTER TABLE `catatan_transaksi`
  MODIFY `ct_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `log_aktifitas`
--
ALTER TABLE `log_aktifitas`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `transaksi_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
