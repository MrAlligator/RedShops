-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Nov 2020 pada 03.56
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
('5f9681f325ac4', 'Buzz', 'Kemeja', 11111, 11, '5f9681f325ac4.jpg', 'default.jpg', 'asffsaf', 'asfasfsafasf', 'asfasfasfaf'),
('5f969053d2350', 'Kemeja Pantai', 'Kemeja', 100000, 100, 'default.jpg', 'default.jpg', 'jhasfgagasg', 'jashfgaskfgajhg', 'ashfgakjshfga'),
('5fafd9b55c2b1', 'jgjhgjhgg', 'Kemeja Lengan Panjang', 2456789, 12345, 'default.jpg', 'default.jpg', 'jvjfyugjhg', 'fcjhgljhglg', 'hgughhlhn'),
('5fafdb8f91089', 'lkhkjhadhh', 'Kemeja Lengan Panjang', 1111111, 1111, 'default.jpg', 'default.jpg', 'askjfhaskjfhf', 'asjfhasjkhf', 'akjsfhjkashf'),
('5fafdb9d3bf09', 'asihflakshfashflfakj', 'Kemeja Lengan Panjang', 123123, 1241241, 'default.jpg', 'default.jpg', 'asfagasg', 'gasgasgag', 'agasgasf'),
('5fafdbaf70908', 'jsahfgaksjfgaskufg', 'Kemeja Lengan Panjang', 124124, 124124, 'default.jpg', 'default.jpg', 'ajhfalfhalkhf', 'aksjfakjshjhk', 'askjgfakjfhg'),
('5fafdbe9a2edb', 'asjhfgajhsfgajhsgf', 'Kemeja Lengan Panjang', 112123, 123123, 'default.jpg', 'default.jpg', 'askjfhafkjhf', 'askfaskjfh', 'askfgakfg');

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
(1, 'Rizki Widya Pratama', 'rizkiw8778@gmail.com', 'mrrest', 'keluarga.png', '$2y$10$0Os.BnnacxdWurQ.5.eXZeQeLRpMpHjfmFIXcYa3UHUlTbNIt1E12', 2, 1, 1603526127),
(13, 'Rizki Pratama', 'resest003@gmail.com', 'resest', 'Logo2.png', '$2y$10$5n6G.7OOZkmiQuU5tDVrZ.IOecji1Ignbb0S45hdpxupJNKMWxpQ.', 2, 1, 1603620724),
(14, 'Najwa Sya\'baniffadilla', 'najwaf1998@gmail.com', 'najwaf', 'default.jpg', '$2y$10$KGx6PVT9CSlE8B/lXlLzzupQbJjaFEKccklnP8msEzX89WS0WtuFC', 2, 1, 1603715824);

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
(2, 'admin');

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
(10, 'rizkiw8778@gmail.com', 'qsLH04ewbqCYlpXYyG0ZqpE4HlEeIk+8TnJ7rgqRyw4=', 1603856518),
(11, 'rizkiw8778@gmail.com', 'k7E9Fv7YjAmACsNAB+Io7aReWJ3qC8DzGyALvs03lVI=', 1603856600),
(12, 'rizkiw8778@gmail.com', 'uZaJho4CPGijdo6toudCWKupW8cX4KqciWANaIH/swU=', 1605852546);

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
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id_role`);

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
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id_token` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;