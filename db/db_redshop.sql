-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2020 at 03:28 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `detail_transaksi`
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
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` int(11) NOT NULL,
  `jenis` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis`
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
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` varchar(64) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `jenis_produk` varchar(25) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `jumlahstok` int(11) NOT NULL,
  `berat` int(11) NOT NULL,
  `foto_produk` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `foto_produk2` varchar(256) NOT NULL DEFAULT 'default.jpg',
  `foto_produk3` varchar(256) NOT NULL DEFAULT 'default.jpg',
  `deskripsi` text NOT NULL,
  `deskripsi2` text NOT NULL,
  `deskripsi3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `jenis_produk`, `harga_produk`, `jumlahstok`, `berat`, `foto_produk`, `foto_produk2`, `foto_produk3`, `deskripsi`, `deskripsi2`, `deskripsi3`) VALUES
('5fafd9b55c2b1', 'jgjhgjhgg', 'Kaos Lengan Panjang', 2456789, 12345, 0, '5fafd9b55c2b1.jpg', 'default.jpg', 'default.jpg', 'jvjfyugjhg', 'jvjfyugjhg', 'jvjfyugjhg'),
('5fbb46cec2fb7', 'Whuzz', 'Kaos Lengan Panjang', 100000, 444, 0, 'default.jpg', 'default.jpg', 'default.jpg', 'hjgljkhg', 'lkj', 'jhgkjjkg'),
('5fbb46ec9ee58', 'kjhkjh', 'Kaos Lengan Panjang', 5436, 65446, 0, 'default.jpg', 'default.jpg', 'default.jpg', 'djhgfjfg', 'djhgfjfg', 'djhgfjfg'),
('5fc102fbc028d', 'Hoddie', 'Jaket', 200000, 23, 0, '5fc102fbc028d.jpg', 'default.jpg', 'default.jpg', 'Akwkwakwak', 'wakkawkwakwa', 'wakawkawkwakwa'),
('5fdaa6ea6b742', 'ashjfgh', 'Kaos Lengan Pendek', 1241, 124124, 0, 'default.jpg', 'default.jpg', 'default.jpg', '124124', 'dfsfaugiyg', 'igiugafiaf'),
('5fdaa73679dbd', 'ajhsfgjhagf', 'Kaos Lengan Panjang', 12313, 12442, 0, 'default.jpg', 'default.jpg', 'default.jpg', 'dskjahlg', 'kjflkjg', 'kjhljkh'),
('5fdaa7722811c', 'ajhsfgjhagf', 'Kaos Lengan Panjang', 12313, 12442, 0, 'default.jpg', 'default.jpg', 'default.jpg', 'dskjahlg', 'kjflkjg', 'kjhljkh'),
('5fdaa7915d143', 'avg', 'Kaos Lengan Pendek', 12412, 24325, 0, 'default.jpg', 'default.jpg', 'default.jpg', 'sdgvisg', 'dhfhg', 'sdkjgsjhg'),
('5fdaa7bae17fa', 'hbjk', 'Kemeja Lengan Panjang', 12124, 23546, 0, 'default.jpg', 'default.jpg', 'default.jpg', 'sdkvhls', 'kkshdvlksdh', 'jdshgkjsah'),
('5fdaa7c82f956', 'kjbkjhjkh', 'Kemeja Lengan Panjang', 124124, 124124, 0, 'default.jpg', 'default.jpg', 'default.jpg', 'jvlsvlsav', 'akjvajsvh', 'ksjvaskljvhaslv'),
('5fdaa8d8e606a', 'jkjkhj', 'Kemeja Lengan Pendek', 12512512, 2145125, 0, 'default.jpg', 'default.jpg', 'default.jpg', 'dsgsg', 'sdgsg', 'dsgsg'),
('5fdae91228391', 'Jeans Jacket', 'Jaket', 100000, 100, 0, 'default.jpg', 'default.jpg', 'default.jpg', 'jhshafjhasgfjhaf', 'kashgfasfg', 'ahjgfkjasgf'),
('5fdaea1e9c49f', 'Rizki Widya', 'Kaos Lengan Panjang', 60000, 100, 0, 'default.jpg', 'default.jpg', 'default.jpg', 'kajhflashgh', 'jashjkahg', 'jaghajk'),
('5fdaf10cac6a3', 'jghakgjhag', 'Kemeja Lengan Panjang', 94876, 76, 0, 'default.jpg', 'default.jpg', 'default.jpg', 'khqwgfjhagfagf', 'hagfashgfsagfgf', 'asfhgasjhfgjhasgf');

-- --------------------------------------------------------

--
-- Table structure for table `setting_toko`
--

CREATE TABLE `setting_toko` (
  `id_alamat` int(11) NOT NULL,
  `nama_toko` varchar(255) NOT NULL,
  `lokasi_toko` int(11) DEFAULT NULL,
  `alamat_toko` text NOT NULL,
  `no_telepon` varchar(20) NOT NULL DEFAULT '+62'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `setting_toko`
--

INSERT INTO `setting_toko` (`id_alamat`, `nama_toko`, `lokasi_toko`, `alamat_toko`, `no_telepon`) VALUES
(1, 'REDSHOP', 160, 'Jl. Brantas 23, Tegal Boto Lor, Sumbersari, Kec. Sumbersari, Kabupaten Jember, Jawa Timur 68121', '+6289685115937');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `kab` varchar(128) NOT NULL,
  `prov` varchar(128) NOT NULL,
  `telp` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `name`, `email`, `username`, `image`, `password`, `alamat`, `kab`, `prov`, `telp`, `role_id`, `is_active`, `date_created`) VALUES
(15, 'Rizki Pratama', 'e41181256@student.polije.ac.id', 'superadmin', '_MG_52231.JPG', '$2y$10$Ue1Gy7/2ayI9T/EctwsPS.0rl6L1CM0rI.FATdQ/onj2xW6jxmO2K', 'Dusun Krajan RT 03 / RW 04', 'Tuban', 'Jawa Timur', '082331067312', 1, 1, 1606392372),
(28, 'Rizki', 'rizkipratama7575@gmail.com', 'admin', 'default.jpg', '$2y$10$XxBOdizPLBz4BlD3IA9bHem3gouLKmtWLxZg1OJEs9Q6SJrAJNWNS', 'Belum diatur', 'Belum diatur', 'Belum diatur', 'Belum diatur', 2, 1, 1608363165),
(29, 'Rizki Widya Pratama', 'silvianawidya46@gmail.com', 'rizkiwp', 'default.jpg', '$2y$10$Q7mOLzY0.pIuwOkr2s009.9jmXd3kW7pzcPir9bGkmPfpXXVBHW8.', 'Belum diatur', 'Belum diatur', 'Belum diatur', 'Belum diatur', 3, 1, 1608363215),
(31, 'Fahim', 'fahimbarcajr@yahoo.com', 'fahim10969', 'default.jpg', '$2y$10$0ZCAhByeQQ9u5dHMzJ70Yu.lv18i3bvC2EGyat3Op1IGr0D.o36ci', 'Belum diatur', 'Belum diatur', 'Belum diatur', 'Belum diatur', 3, 1, 1608619125);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 3),
(6, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id_role` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id_role`, `role`) VALUES
(1, 'Superadmin'),
(2, 'Admin'),
(3, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
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
-- Dumping data for table `user_sub_menu`
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
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id_token` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id_token`, `email`, `token`, `date_created`) VALUES
(7, 'resest003@gmail.com', 'kAcoU1TCzY1aizJH0CB8NG/oW9scR7ch1XaEjzOi3Fo=', 1603624022),
(9, 'resest003@gmail.com', 'UV3bIn58EDA/7OK85hwlDaru1d/vo8e+3HRHgdQVCGI=', 1603718474),
(15, 'silvianawidya46@gmail.com', 'Y0UeFcehLkPiqxPCPgzVpoZmL+8YDf8nM9Hkw9QBmlo=', 1606918354),
(16, 'silvianawidya46@gmail.com', 'HQqTtd+vdyApWAsZSBXBcxvewmXa1WtXBqvQ5Urtr5g=', 1606919592),
(19, 'silvianawidya46@gmail.com', 'jh98nzIJZvHQ8clMi+3GzUcofkcP0x1AIfLNcKGVi3A=', 1606920350),
(22, 'rizkiw8778@gmail.com', 'Um0c7XM2C7VZ0p1Lfk+fKjIP+0mdfME28tbAsrmcnVw=', 1607396247),
(23, 'rizkiw8778@gmail.com', 'muogJxzbxDvz5pYph/BW2E+KjK84PHOk86yG7n6jDGI=', 1607396725),
(24, 'rizkiw8778@gmail.com', 'cHGWZoxIiyBUfsE/bSaCAll1buIrsBN6g0M42VXTHCw=', 1607396976),
(25, 'rizkipratama7575@gmail.com', 'ZmQY+Ocx+DZwmxt00dqa1YdlRSwMTPjy25jnB9Gud0I=', 1608086429),
(26, 'rizkipratama7575@gmail.com', 'VSaQsRgwOdcyn6VZu4LZs9YikNZPlWN/e/ByDCvrHSQ=', 1608177268),
(27, 'rizkiw8778@gmail.com', '80dntzm/zS8t8RB6jX/t/T9Z8AoORxjrQHUPwLgYwxM=', 1608177857),
(28, 'rizkiw8778@gmail.com', 'nK6qE1wDShbXN2yNjZkXRyejApIUa+uV0OJe72ewwh8=', 1608177921),
(29, 'rizkiw8778@gmail.com', 'KI9ILrJpsy+0mVg1/s9XfQb0bNuG6rrySaPJBEeJ6a4=', 1608189393),
(30, 'rizkiw8778@gmail.com', 'wKIpApA2UkKf6mW0BX58M+G0id64uw0NmK4Tl9gAzlg=', 1608189435),
(31, 'rizkiw8778@gmail.com', 'LKaKVihjIsfk70Sygh3g99auZu76024xte2ilejAnhw=', 1608189451),
(32, 'rizkiw8778@gmail.com', 'IVrZNLIn9AUeba6PhSkjlfXQyyr5Lmn9sWxn+ev7aMg=', 1608189503),
(33, 'rizkiw8778@gmail.com', 'ZxwImzKLeVHd5MU/wrabY/RudHTQBlULrWnT75OknU0=', 1608189526),
(34, 'rizkiw8778@gmail.com', 'Rmvf1NGQ4jLKnVgWRhaZvzRyVPmYEPTtacgoJCz/ygA=', 1608189630),
(35, 'rizkipratama7575@gmail.com', 'e8iNnzJ/BSucaIZkCi1Y3JAFHhj6kp0u0iGfAfT5gd0=', 1608189664),
(36, 'rizkipratama7575@gmail.com', 'tO6nlqzLR4HIfWlzKVPpPF6bxwjI5H9/oCy1HZZu1sM=', 1608189750),
(37, 'rizkiw8778@gmail.com', '+gXBKylVrIaWoF9nA8HeTNvDXH2kPyJmVkmLxZ6nmHI=', 1608189864),
(38, 'rizkiw8778@gmail.com', 'Vo9eCxIir/1uTfDLf5QUU4yaalzGgJawwig2VSYOGe4=', 1608189892),
(39, 'rizkiw8778@gmail.com', '060g8MDtSuas9kLJO8c+zMSbUXNjSxPAd0vvcfTjFFE=', 1608331421);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `setting_toko`
--
ALTER TABLE `setting_toko`
  ADD PRIMARY KEY (`id_alamat`);

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

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_id` (`menu_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id_token` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
