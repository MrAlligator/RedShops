-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Des 2020 pada 14.53
-- Versi server: 10.3.15-MariaDB
-- Versi PHP: 7.3.6

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
-- Struktur dari tabel `produk`
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
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `jenis_produk`, `harga_produk`, `jumlahstok`, `berat`, `foto_produk`, `foto_produk2`, `foto_produk3`, `deskripsi`, `deskripsi2`, `deskripsi3`) VALUES
('5fe9d2f9012b0', 'Clauso', 'Kaos Lengan Pendek', 75000, 20, 100, '5fe9d2f9012b01.jpg', 'default.jpg', 'default.jpg', 'Pilihan solid untuk meramaikan momen hangout santai mu. Kaos crewneck dengan fitur grafis artistik tersemat di dada.\r\nTerbuat dari material katun yang nyaman dengan warna putih basic yg cocok untuk\r\nsegala gaya.', 'Bahan : Katun\r\nStyle : Casual\r\nPanjang Lengan : Pendek\r\nGaris Leher : Crew Neck\r\nAsal Produk : Lokal\r\nMaterial : Cotton Combed 30s \r\nSablon : Discharge', 'Size Chart: \r\nS = ( L 45cm X P 66cm )\r\nM = ( L 47cm X P 69cm )\r\nL = ( L 49cm X P 72cm )\r\nXL= ( L 51cm X P 75cm )\r\n\r\nKebijakan Retur Produk: \r\n- Hangtag barcode harus masih terpasang \r\n- Produk masih dalam keadaan semula & tidak kotor \r\n- Hanya berlaku untuk tukar ukuran & produk cacat produksi (rusak,berlubang,robek) \r\n- Retur TIDAK BERLAKU untuk kesalahan model dan warna \r\n- Ketersediaan produk pengganti tergantung stok yang tersedia'),
('5fe9d98d6bd88', 'Retaka', 'Kaos Lengan Pendek', 85000, 20, 100, '5fe9d98d6bd881.jpg', 'default.jpg', 'default.jpg', 'Dengan konsep K-Pop dan memukau kaum gadis, Kaos crewneck dengan desain artis korea terkenal yang akan membuatmu tampil seperti mereka.\r\nTerbuat dari material katun yang nyaman dengan warna putih basic yg cocok untuk\r\nsegala gaya.', 'Bahan : Katun\r\nStyle : Casual\r\nPanjang Lengan : Pendek\r\nGaris Leher : Crew Neck\r\nAsal Produk : Lokal\r\nMaterial : Cotton Combed 30s \r\nSablon : Discharge', 'Size Chart: \r\nS = ( L 45cm X P 66cm )\r\nM = ( L 47cm X P 69cm )\r\nL = ( L 49cm X P 72cm )\r\nXL= ( L 51cm X P 75cm )'),
('5fe9dac5e9c4b', 'Eagel', 'Kaos Lengan Pendek', 65000, 25, 100, '5fe9dac5e9c4b1.jpg', '5fe9dac5e9c4b1.jpg', '5fe9dac5e9c4b1.jpg', 'Pilihan yang sangat bagus dengan model 2 warna yang mempesona. Kaos crewneck dengan fitur grafis artistik tersemat di dada.\r\nTerbuat dari material katun yang nyaman dengan warna putih basic yg cocok untuk\r\nsegala gaya.', 'Bahan : Katun\r\nStyle : Casual\r\nPanjang Lengan : Pendek\r\nGaris Leher : Crew Neck\r\nAsal Produk : Lokal\r\nMaterial : Cotton Combed 30s \r\nSablon : Discharge', 'Size Chart: \r\nS = ( L 45cm X P 66cm )\r\nM = ( L 47cm X P 69cm )\r\nL = ( L 49cm X P 72cm )\r\nXL= ( L 51cm X P 75cm )'),
('5fe9db5d67027', 'Mamba', 'Kaos Lengan Pendek', 85000, 20, 100, '5fe9db5d670271.jpg', 'default.jpg', 'default.jpg', 'Pilihan solid untuk meramaikan momen hangout santai mu bersama pasangan. Kaos hitam dengan fitur grafis lingkaran dan bintang tersemat di dada.\r\nTerbuat dari material katun yang nyaman dengan warna hitam basic yg cocok untuk\r\nsegala gaya.', 'Bahan : Katun\r\nStyle : Casual\r\nPanjang Lengan : Pendek\r\nGaris Leher : Crew Neck\r\nAsal Produk : Lokal\r\nMaterial : Cotton Combed 30s \r\nSablon : Discharge', 'Size Chart: \r\nS = ( L 45cm X P 66cm )\r\nM = ( L 47cm X P 69cm )\r\nL = ( L 49cm X P 72cm )\r\nXL= ( L 51cm X P 75cm )\r\n'),
('5fe9de8b31fee', 'Harisan', 'Kemeja Lengan Pendek', 150000, 25, 175, '5fe9de8b31fee1.jpg', '5fe9de8b31fee1.jpg', '5fe9de8b31fee1.jpg', 'Dengan corak yang sangat banyak seperti sobekan kain. Akan membuat orang yang memakainya lebih berwarna dan tampil percaya diri.', 'Bahan : Katun\r\nStyle : Casual\r\nPanjang Lengan : Pendek\r\nAsal Produk : Lokal', 'Size Chart: \r\nS = ( L 45cm X P 66cm )\r\nM = ( L 47cm X P 69cm )\r\nL = ( L 49cm X P 72cm )\r\nXL= ( L 51cm X P 75cm )'),
('5fe9df0a70d20', 'Loverboy', 'Kemeja Lengan Pendek', 135000, 12, 150, '5fe9df0a70d201.jpg', '5fe9df0a70d201.jpg', '5fe9df0a70d201.jpg', 'Percaya diri dengan kemeja bermotif abstract, Seperti anda memakai kemeja buatan ibu anda dengan bahan yang sangat halus dan dingin.', 'Bahan : Katun\r\nStyle : Casual\r\nPanjang Lengan : Pendek\r\nAsal Produk : Lokal', 'Size Chart: \r\nS = ( L 45cm X P 66cm )\r\nM = ( L 47cm X P 69cm )\r\nL = ( L 49cm X P 72cm )\r\nXL= ( L 51cm X P 75cm )\r\n'),
('5fe9dfdfaa977', 'Hindia', 'Kemeja Lengan Pendek', 145000, 23, 140, '5fe9dfdfaa9771.jpg', 'default.jpg', 'default.jpg', 'Dengan corak yang sangat membuatmu sangat trendi. Akan membuat orang yang memakainya lebih berwarna dan tampil percaya diri. ', 'Bahan : Katun\r\nStyle : Casual\r\nPanjang Lengan : Pendek\r\nAsal Produk : Lokal', 'Size Chart: \r\nS = ( L 45cm X P 66cm )\r\nM = ( L 47cm X P 69cm )\r\nL = ( L 49cm X P 72cm )\r\nXL= ( L 51cm X P 75cm )\r\n'),
('5fe9e0a310a2d', 'Newspapez', 'Kemeja Lengan Pendek', 180000, 12, 150, '5fe9e0a310a2d1.jpg', 'default.jpg', 'default.jpg', 'Dengan desain yang simple dan tidak banyak warna, Kemeja ini sangat cocok dengan kalian yang ingin menemui pasangan kalian atau dengan hang out bersama.', 'Bahan : Katun\r\nStyle : Casual\r\nPanjang Lengan : Pendek\r\nAsal Produk : Lokal', 'Size Chart: \r\nS = ( L 45cm X P 66cm )\r\nM = ( L 47cm X P 69cm )\r\nL = ( L 49cm X P 72cm )\r\nXL= ( L 51cm X P 75cm )'),
('5fe9e1b01312e', 'Rainbow', 'Jaket', 235000, 10, 200, '5fe9e1b01312e1.jpg', 'default.jpg', 'default.jpg', 'Dengan warna cerah dan bahan yang hangat. Cocok dengan kalian yang suka bepergian dan tampil dengan simple dengan hoddie ini.', 'SIZE CHART\r\n_____\r\n\r\n   Tinggi Hoodie   Lebar Dada   Panjang Lengan\r\nS        64	                  48                      70\r\nM       66                   52                      74\r\nL        68	                  56                      78\r\nXL     70                    60                      82', '- Bahan fleece\r\n- Sablon plastisol high density\r\n- Regular fit\r\n- Kantong kangaroo\r\n');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
