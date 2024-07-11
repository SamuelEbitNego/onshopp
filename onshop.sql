-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Bulan Mei 2023 pada 07.56
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onshop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `chats`
--

CREATE TABLE `chats` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `chats`
--

INSERT INTO `chats` (`id`, `name`, `message`, `created_at`) VALUES
(6, 'admin', 'Hallo ada yang bisa kami bantu ?', '2023-05-11 17:17:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer_service`
--

CREATE TABLE `customer_service` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `customer_service`
--

INSERT INTO `customer_service` (`id`, `nama`, `email`, `pesan`) VALUES
(1, 'Samuel Ebit Nego', 'samuelebitnego13@gmail.com', 'Tolong bantu saya agar saya dapat membeli barang dengan baik'),
(2, 'Samuel Ebit Nego', 'samuelebitnego13@gmail.com', 'WOII MANA'),
(3, 'Samuel Ebit Nego', 'samuelebitnego13@gmail.com', 'asasa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(120) NOT NULL,
  `spesifikasi_produk` varchar(4000) NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id_brg`, `nama_brg`, `spesifikasi_produk`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(1, 'Baju 2023', 'Lengan Pendek Terdapat Pada Ukuran M, L, XL', 'STYLISH PRIA', 30000, 99, 'buy1.jpg'),
(2, 'Baju Keren', 'Motif Print\r\nTersedia 3 Ukuran M, L, & XL\r\n', 'STYLISH PRIA', 45000, 537, 'buy2.jpg'),
(3, 'Baju Putih', 'Motif Print\r\nTersedia 3 Ukuran M, L, & XL\r\n', 'STYLISH PRIA', 40000, 314, 'buy3.jpg\r\n'),
(4, 'Baju Kaos Hitam', 'Motif Print\r\nUkuran M, L, & XL', 'STYLISH PRIA', 45000, 1324, 'buy4.jpg'),
(5, 'Baju Hitam Gaul', 'Motif Print\r\nLengan Panjang\r\nUkuran M, L, & XL', 'STYLISH PRIA', 50000, 1214, 'buy5.jpg'),
(15, 'Tshirt Kaos', 'Kaos wanita lengan pendek Ukuran M, L, & XL', 'STYLISH WANITA', 35000, 205, 'baju1.jpg'),
(16, 'Baju Setelan', 'Bahan spandek Atasan Ld 102cm, P 60cm Celana P 80 Ada kantong', 'STYLISH WANITA', 50000, 300, 'baju_s1.jpg'),
(17, 'Distro Wanita', 'BAHAN MATT BABYTERRY M/L DAN XL L = LD 102CM PJ 68CM XL = LD 104CM PJ 70CM', 'STYLISH WANITA', 53000, 233, 'distro_keren.jpg'),
(18, 'Baju Kaos', 'Kaos wanita lengan pendek Ukuran M, L, & XL', 'STYLISH WANITA', 1000, 998, 'Capture.JPG'),
(21, 'Samsung Galaxy A04e ', '3/32GB - Black Baterai 5000 Mah', 'ELEKTRONIK', 1249000, 300, 'samsung.png'),
(22, 'Samsung Galaxy A04 ', '4/64GB - Green Display 6.5\" PLS LCD 60Hz Battery 5000mAh', 'ELEKTRONIK', 1599000, 400, 'samsung1.png'),
(23, 'Xiaomi Redmi Note 11 Graphite Gray', ' Memory Internal 64GB  Ram 4GB', 'ELEKTRONIK', 1500000, 523, 'uploaded_30f792925fc8782035d54a5984aeb19c.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_invoices`
--

CREATE TABLE `tb_invoices` (
  `id` int(11) NOT NULL,
  `nomor` int(13) DEFAULT NULL,
  `alamat` varchar(250) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_invoices`
--

INSERT INTO `tb_invoices` (`id`, `nomor`, `alamat`, `tgl_pesan`, `batas_bayar`) VALUES
(68, NULL, 'Duren sawit, Pondok Kelapa, Jakarta Timur', '2023-05-15 16:15:51', '2023-05-16 16:15:51'),
(69, NULL, '', '2023-05-15 16:16:42', '2023-05-16 16:16:42'),
(70, NULL, '', '2023-05-15 16:19:11', '2023-05-16 16:19:11'),
(71, NULL, '', '2023-05-15 16:19:27', '2023-05-16 16:19:27'),
(72, NULL, '', '2023-05-15 16:21:11', '2023-05-16 16:21:11'),
(73, NULL, '', '2023-05-15 16:21:32', '2023-05-16 16:21:32'),
(74, NULL, '', '2023-05-15 16:25:06', '2023-05-16 16:25:06'),
(75, NULL, '', '2023-05-15 16:25:32', '2023-05-16 16:25:32'),
(76, NULL, '', '2023-05-15 16:25:48', '2023-05-16 16:25:48'),
(77, NULL, '', '2023-05-15 16:26:05', '2023-05-16 16:26:05'),
(78, NULL, '', '2023-05-15 16:26:34', '2023-05-16 16:26:34'),
(79, NULL, '', '2023-05-15 16:27:15', '2023-05-16 16:27:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoices` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoices`, `id_brg`, `nama_brg`, `jumlah`, `harga`, `pilihan`) VALUES
(37, 63, 2, 'Baju Keren', 1, 45000, ''),
(38, 63, 3, 'Baju Putih', 1, 40000, ''),
(39, 63, 4, 'Baju Kaos Hitam', 1, 45000, ''),
(40, 64, 3, 'Baju Putih', 1, 40000, ''),
(41, 65, 1, 'Baju 2023', 1, 30000, ''),
(42, 66, 4, 'Baju Kaos Hitam', 1, 45000, ''),
(43, 67, 2, 'Baju Keren', 1, 45000, ''),
(44, 68, 5, 'Baju Hitam Gaul', 1, 50000, ''),
(45, 69, 15, 'Tshirt Kaos', 1, 35000, '');

--
-- Trigger `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_baju` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN
UPDATE tb_barang SET stok = stok-NEW.jumlah
WHERE id_brg = NEW.id_brg;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(300) NOT NULL,
  `role_id` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `role_id`, `created_at`) VALUES
(1, 'admin', 'admin', '123', 1, '2023-05-11 18:08:34'),
(2, 'user', 'user', '123', 2, '2023-05-11 18:08:34'),
(3, 'Samuel Ebit Nego', 'Samuel123', '123', 2, '2023-05-11 18:08:34'),
(4, 'genar', 'genar123', '123', 2, '2023-05-11 18:08:34'),
(5, 'samuel', 'samuel', '123', 2, '2023-05-11 18:08:34');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `customer_service`
--
ALTER TABLE `customer_service`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indeks untuk tabel `tb_invoices`
--
ALTER TABLE `tb_invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `chats`
--
ALTER TABLE `chats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `customer_service`
--
ALTER TABLE `customer_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `tb_invoices`
--
ALTER TABLE `tb_invoices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
