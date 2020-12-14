-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Des 2020 pada 13.31
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_redshop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` int(11) NOT NULL,
  `jenis` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `jenis`) VALUES
(1, 'Kaos Lengan Panjang'),
(2, 'Kemeja Lengan Panjang'),
(3, 'Celana Pendek'),
(4, 'Jaket'),
(5, 'Kemeja Lengan Pendek'),
(6, 'Kaos Lengan Pendek'),
(7, 'Celana Panjang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` varchar(64) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `jenis_produk` varchar(25) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `jumlahstok` int(11) NOT NULL,
  `foto_produk` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `foto_produk2` varchar(256) NOT NULL,
  `deskripsi` text NOT NULL,
  `deskripsi2` text NOT NULL,
  `deskripsi3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `jenis_produk`, `harga_produk`, `jumlahstok`, `foto_produk`, `foto_produk2`, `deskripsi`, `deskripsi2`, `deskripsi3`) VALUES
('5fafd9b55c2b1', 'jgjhgjhgg', 'Kaos Lengan Panjang', 2456789, 12345, '5fafd9b55c2b1.jpg', 'default.jpg', 'jvjfyugjhg', 'jvjfyugjhg', 'jvjfyugjhg'),
('5fbb46cec2fb7', 'Whuzz', 'Kaos Lengan Panjang', 100000, 444, 'default.jpg', 'default.jpg', 'hjgljkhg', 'lkj', 'jhgkjjkg'),
('5fbb46ec9ee58', 'kjhkjh', 'Kaos Lengan Panjang', 5436, 65446, 'default.jpg', 'default.jpg', 'djhgfjfg', 'djhgfjfg', 'djhgfjfg'),
('5fc102fbc028d', 'Hoddie', 'Jaket', 200000, 23, '5fc102fbc028d.jpg', 'default.jpg', 'Akwkwakwak', 'wakkawkwakwa', 'wakawkawkwakwa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `setting_toko`
--

CREATE TABLE `setting_toko` (
  `id_alamat` int(11) NOT NULL,
  `nama_toko` varchar(255) NOT NULL,
  `lokasi_toko` int(11) DEFAULT NULL,
  `alamat_toko` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `setting_toko`
--

INSERT INTO `setting_toko` (`id_alamat`, `nama_toko`, `lokasi_toko`, `alamat_toko`) VALUES
(1, 'REDSHOP', NULL, 'Jl. Brantas 23, Tegal Boto Lor, Sumbersari, Kec. Sumbersari, Kabupaten Jember, Jawa Timur 68121');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_transaksi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `name`, `email`, `username`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(15, 'Rizki Pratama', 'e41181256@student.polije.ac.id', 'superadmin', 'IMG_1216.jpg', '$2y$10$Ue1Gy7/2ayI9T/EctwsPS.0rl6L1CM0rI.FATdQ/onj2xW6jxmO2K', 1, 1, 1606392372),
(20, 'Silviana', 'silvianawidya46@gmail.com', 'admin', 'default.jpg', '$2y$10$8GLRq0LPEyHM4WNVNq41LOUa4HB2ByzRfJ3Pnzv8OrEq0a0nmRK6K', 2, 1, 1606920350),
(21, 'obay', 'ilmi.obbi@gmail.com', 'obay', 'default.jpg', '$2y$10$R/jIbdBOYo/HfUFYDUwrqOXHbyLvomqNnRBAUGNdAc87zSjDmgTrG', 1, 0, 1606921272),
(26, 'Rizki Widya', 'rizkiw8778@gmail.com', 'mrrest', 'default.jpg', '$2y$10$0r2e6Y6Dsj1tstUf45hl6OqX9z6yVIb4aUH./bbP3yQxx45dgtekC', 3, 1, 1607434853);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 3),
(6, 2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Administrator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id_role` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id_role`, `role`) VALUES
(1, 'Superadmin'),
(2, 'Admin'),
(3, 'User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(10, 1, 'Dashboard', 'admin/admin', 'fas fa-fw fa-tachometer-alt', 1),
(11, 1, 'Produk', 'admin/admin/produk', 'fas fa-fw fa-folder', 1),
(12, 2, 'Profil Saya', 'admin/user', 'fas fa-fw fa-user', 1),
(13, 2, 'Edit Profil', 'admin/user/editprofil', 'fas fa-fw fa-user-edit', 1),
(14, 2, 'Ubah Password', 'admin/user/editpass', 'fas fa-fw fa-key', 1),
(15, 3, 'User', 'admin/administrator', 'fas fa-fw fa-users', 1),
(16, 1, 'Transaksi', 'admin/admin/transaksi', 'fas fa-fw fa-handshake', 1),
(17, 1, 'Alamat Toko', 'admin/admin/editalamat', 'fas fa-map-marked-alt', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `id_token` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_token`
--

INSERT INTO `user_token` (`id_token`, `email`, `token`, `date_created`) VALUES
(7, 'resest003@gmail.com', 'kAcoU1TCzY1aizJH0CB8NG/oW9scR7ch1XaEjzOi3Fo=', 1603624022),
(9, 'resest003@gmail.com', 'UV3bIn58EDA/7OK85hwlDaru1d/vo8e+3HRHgdQVCGI=', 1603718474),
(15, 'silvianawidya46@gmail.com', 'Y0UeFcehLkPiqxPCPgzVpoZmL+8YDf8nM9Hkw9QBmlo=', 1606918354),
(16, 'silvianawidya46@gmail.com', 'HQqTtd+vdyApWAsZSBXBcxvewmXa1WtXBqvQ5Urtr5g=', 1606919592),
(19, 'silvianawidya46@gmail.com', 'jh98nzIJZvHQ8clMi+3GzUcofkcP0x1AIfLNcKGVi3A=', 1606920350),
(22, 'rizkiw8778@gmail.com', 'Um0c7XM2C7VZ0p1Lfk+fKjIP+0mdfME28tbAsrmcnVw=', 1607396247),
(23, 'rizkiw8778@gmail.com', 'muogJxzbxDvz5pYph/BW2E+KjK84PHOk86yG7n6jDGI=', 1607396725),
(24, 'rizkiw8778@gmail.com', 'cHGWZoxIiyBUfsE/bSaCAll1buIrsBN6g0M42VXTHCw=', 1607396976);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `setting_toko`
--
ALTER TABLE `setting_toko`
  ADD PRIMARY KEY (`id_alamat`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_id` (`menu_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id_token`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id_token` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
