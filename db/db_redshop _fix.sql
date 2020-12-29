-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Des 2020 pada 03.04
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
  `id_detail_transaksi` int(11) NOT NULL,
  `no_order` varchar(16) DEFAULT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL
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
('5fe9e1b01312e', 'Rainbow', 'Jaket', 235000, 10, 200, '5fe9e1b01312e1.jpg', 'default.jpg', 'default.jpg', 'Dengan warna cerah dan bahan yang hangat. Cocok dengan kalian yang suka bepergian dan tampil dengan simple dengan hoddie ini.', 'SIZE CHART\r\n_____\r\n\r\n   Tinggi Hoodie   Lebar Dada   Panjang Lengan\r\nS        64	                  48                      70\r\nM       66                   52                      74\r\nL        68	                  56                      78\r\nXL     70                    60                      82', '- Bahan fleece\r\n- Sablon plastisol high density\r\n- Regular fit\r\n- Kantong kangaroo\r\n'),
('5fe9e705e447f', 'Riszaku', 'Jaket', 200000, 11, 200, '5fe9e705e447f1.jpg', 'default.jpg', 'default.jpg', 'Dengan desain yang dibuat oleh para ahli fashion, Hoddie ini sangat cocok buat kamu yang suka tampil dengan gaya kalem namun menawan.', 'SIZE CHART\r\n_____\r\n\r\n   Tinggi Hoodie   Lebar Dada   Panjang Lengan\r\nS        64	                  48                      70\r\nM       66                   52                      74\r\nL        68	                  56                      78\r\nXL     70                    60                      82', 'Spesifikasi\r\n- Bahan fleece\r\n- Sablon plastisol high density\r\n- Regular fit\r\n- Kantong kangaroo'),
('5fe9e7d1d174b', 'Mances', 'Jaket', 170000, 10, 200, '5fe9e7d1d174b1.jpg', 'default.jpg', 'default.jpg', 'Mances Bomber kembali dengan desain yang bertemakan rock atau metal, dimana hoddie ini di cirikan dan di desain dengan sangat baik tanpa banyak corak dan tidak berkesan terlalu kontras.', '   Tinggi Hoodie   Lebar Dada   Panjang Lengan\r\nS        64	                  48                      70\r\nM       66                   52                      74\r\nL        68	                  56                      78\r\nXL     70                    60                      82', 'Spesifikasi\r\n- Bahan parasit\r\n- Sablon plastisol high density\r\n- Regular fit\r\n'),
('5fe9e8b0e24d9', 'Kurobik', 'Jaket', 175000, 3, 200, '5fe9e8b0e24d91.jpg', 'default.jpg', 'default.jpg', 'Hoddie dengan desain metal yang sangat bisa membuatmu terlihat sangar dan percaya diri. jangan sampe kehabisan yaaaa...', 'Tinggi Hoodie   Lebar Dada   Panjang Lengan\r\nS        64	                  48                      70\r\nM       66                   52                      74\r\nL        68	                  56                      78\r\nXL     70                    60                      82', 'Spesifikasi\r\n- Bahan fleece\r\n- Sablon plastisol high density\r\n- Regular fit\r\n- Kantong kangaroo'),
('5fe9fc9c6a8f3', 'Ramjun', 'Kaos Lengan Panjang', 100000, 12, 55, '5fe9fc9c6a8f31.jpg', 'default.jpg', 'default.jpg', 'Bosen pake T-shirt terus? Tenang! kita juga menyediakan T -shirt lengan panjang juga loh! Bahannya yang terbuat dari Cotton bikin kalian nyaman! Kalo panas ga kepanasan, kalo dingin ga kedinginan. Pokonya pas deh!\r\n', 'Cocok untuk Pria dan Wanita (Unisex) \r\nSize Cart\r\nPanjang x Lebar\r\nSmall = 70CM x 46CM\r\nMedium = 72CM x 48CM\r\nLarge = 74CM x 50CM\r\nXtra Large = 76CM x 52CM', 'Kaos Polos bahan 100% Cotton Combed 30s Reaktif, bahan langsung terasa adem begitu dipakai dan ga panas lebih tipis dibanding 20s/24s. Cocok digunakan di iklim tropis seperti Indonesia.\r\nBahan 100% cotton combed 30s type reaktif grade A gramasi 150-160 Lembut, menyerap keringat, dan sangat nyaman dipakai.\r\nRip spandex ( tidak mudah melar )\r\nLebar rip 1,5 cm\r\nJahitan pundak rantai ( Rapat dan presisi )\r\nJahitan lengan kumis ( Overdek jarum 3 )\r\nJahitan bawah kumis ( Overdek jarum 3 )\r\nBenang yang digunakan full cotton\r\nWhosing bagian dalam kaos\r\nTanpa merek ( Non label )\r\nPola kaos dan ukuran standar asia\r\nFinising sangat rapih dan bersih\r\nQuality control'),
('5fea016ba013a', 'Maternal', 'Kaos Lengan Panjang', 100000, 20, 100, '5fea016ba013a1.jpg', 'default.jpg', 'default.jpg', 'Bosen pake T-shirt yang gitu gitu aja? Tenang! kita juga menyediakan yang lengan panjang loh! Bahannya yang terbuat dari Cotton bikin kalian nyaman! Kalo panas ga kepanasan, kalo dingin ga kedinginan. Pokonya pas deh!\r\n', 'Cocok untuk Pria dan Wanita (Unisex) \r\nSize Cart\r\nPanjang x Lebar\r\nSmall = 70CM x 46CM\r\nMedium = 72CM x 48CM\r\nLarge = 74CM x 50CM\r\nXtra Large = 76CM x 52CM', 'Kaos Polos bahan 100% Cotton Combed 30s Reaktif, bahan langsung terasa adem begitu dipakai dan ga panas lebih tipis dibanding 20s/24s. Cocok digunakan di iklim tropis seperti Indonesia.\r\nBahan 100% cotton combed 30s type reaktif grade A gramasi 150-160 Lembut, menyerap keringat, dan sangat nyaman dipakai.\r\nRip spandex ( tidak mudah melar )\r\nLebar rip 1,5 cm\r\nJahitan pundak rantai ( Rapat dan presisi )\r\nJahitan lengan kumis ( Overdek jarum 3 )\r\nJahitan bawah kumis ( Overdek jarum 3 )\r\nBenang yang digunakan full cotton\r\nWhosing bagian dalam kaos\r\nTanpa merek ( Non label )\r\nPola kaos dan ukuran standar asia\r\nFinising sangat rapih dan bersih\r\nQuality control'),
('5fea031bda4f8', 'Leaf', 'Kaos Lengan Panjang', 150000, 10, 50, '5fea031bda4f81.jpg', 'default.jpg', 'default.jpg', 'Bosen pake T-shirt yang gitu gitu aja? Tenang! kita juga menyediakan yang lengan panjang loh! Bahannya yang terbuat dari Cotton bikin kalian nyaman! Kalo panas ga kepanasan, kalo dingin ga kedinginan. Pokonya pas deh!\r\n', 'Cocok untuk Pria dan Wanita (Unisex) \r\nSize Cart\r\nPanjang x Lebar\r\nSmall = 70CM x 46CM\r\nMedium = 72CM x 48CM\r\nLarge = 74CM x 50CM\r\nXtra Large = 76CM x 52CM', 'Kaos Polos bahan 100% Cotton Combed 30s Reaktif, bahan langsung terasa adem begitu dipakai dan ga panas lebih tipis dibanding 20s/24s. Cocok digunakan di iklim tropis seperti Indonesia.\r\nBahan 100% cotton combed 30s type reaktif grade A gramasi 150-160 Lembut, menyerap keringat, dan sangat nyaman dipakai.\r\nRip spandex ( tidak mudah melar )\r\nLebar rip 1,5 cm\r\nJahitan pundak rantai ( Rapat dan presisi )\r\nJahitan lengan kumis ( Overdek jarum 3 )\r\nJahitan bawah kumis ( Overdek jarum 3 )\r\nBenang yang digunakan full cotton\r\nWhosing bagian dalam kaos\r\nTanpa merek ( Non label )\r\nPola kaos dan ukuran standar asia\r\nFinising sangat rapih dan bersih\r\nQuality control'),
('5fea042cb8af5', 'Greendark', 'Kaos Lengan Panjang', 125000, 14, 125, '5fea042cb8af51.jpg', 'default.jpg', 'default.jpg', 'Kamu bosen kan pake  T- Shirt yang gitu gitu aja ? Cobain nih baju keluaran baru milik kami! dijamin tidak mengecewakan dan menambah kecemu mbak mas bro!!', 'Cocok untuk Pria dan Wanita (Unisex) \r\nSize Cart\r\nPanjang x Lebar\r\nSmall = 70CM x 46CM\r\nMedium = 72CM x 48CM\r\nLarge = 74CM x 50CM\r\nXtra Large = 76CM x 52CM', 'Kaos Polos bahan 100% Cotton Combed 30s Reaktif, bahan langsung terasa adem begitu dipakai dan ga panas lebih tipis dibanding 20s/24s. Cocok digunakan di iklim tropis seperti Indonesia.\r\nBahan 100% cotton combed 30s type reaktif grade A gramasi 150-160 Lembut, menyerap keringat, dan sangat nyaman dipakai.\r\nRip spandex ( tidak mudah melar )\r\nLebar rip 1,5 cm\r\nJahitan pundak rantai ( Rapat dan presisi )\r\nJahitan lengan kumis ( Overdek jarum 3 )\r\nJahitan bawah kumis ( Overdek jarum 3 )\r\nBenang yang digunakan full cotton\r\nWhosing bagian dalam kaos\r\nTanpa merek ( Non label )\r\nPola kaos dan ukuran standar asia\r\nFinising sangat rapih dan bersih\r\nQuality control'),
('5fea05a662fa5', 'RepperHunt', 'Kemeja Lengan Panjang', 175000, 10, 150, '5fea05a662fa51.jpg', 'default.jpg', 'default.jpg', 'Cobain deh kemeja buatan kami dengan desain yang baru dan selalu bisa membuatmu nyaman dalam pemakaiannya. Apalagi nih baju bisa dipake waktu lagi dingin dan panas juga karena bahan yang sangat bagus.', 'Estimasi ukuran :\r\n- M ( 50 lebar x 72 panjang )\r\n- L ( 52 lebar x 74 panjang )\r\n- XL ( 54 lebar x 76 panjang )\r\nTIDAK MENERIMA TUKAR SIZE', '- Smua Foto di edit dan di Foto langsung oleh owner. ( Tidak ambil Foto dr org lain)\r\n- Silahkan tanya dulu model dan size yang anda inginkan sebelum order ,untuk menghindari kekosongan stock .\r\n- Size , warna , dan bentuk di gambar sesuai  dengan keadaan asli .\r\n- Bahan Halus & Tidak kasar.'),
('5fea05f227e3e', 'LovHubird', 'Kemeja Lengan Panjang', 200000, 13, 200, '5fea05f227e3e1.jpg', 'default.jpg', 'default.jpg', 'Cobain deh kemeja buatan kami dengan desain yang baru dan selalu bisa membuatmu nyaman dalam pemakaiannya. Apalagi nih baju bisa dipake waktu lagi dingin dan panas juga karena bahan yang sangat bagus.\r\n', 'Estimasi ukuran :\r\n- M ( 50 lebar x 72 panjang )\r\n- L ( 52 lebar x 74 panjang )\r\n- XL ( 54 lebar x 76 panjang )', '- Smua Foto di edit dan di Foto langsung oleh owner. ( Tidak ambil Foto dr org lain)\r\n- Silahkan tanya dulu model dan size yang anda inginkan sebelum order ,untuk menghindari kekosongan stock .\r\n- Size , warna , dan bentuk di gambar sesuai  dengan keadaan asli .\r\n- Bahan Halus & Tidak kasar.'),
('5fea064841378', 'DeadBear', 'Kemeja Lengan Panjang', 130000, 50, 150, '5fea0648413781.jpg', 'default.jpg', 'default.jpg', 'Cobain deh kemeja buatan kami dengan desain yang baru dan selalu bisa membuatmu nyaman dalam pemakaiannya. Apalagi nih baju bisa dipake waktu lagi dingin dan panas juga karena bahan yang sangat bagus.\r\n', 'Estimasi ukuran :\r\n- M ( 50 lebar x 72 panjang )\r\n- L ( 52 lebar x 74 panjang )\r\n- XL ( 54 lebar x 76 panjang )\r\nTIDAK MENERIMA TUKAR SIZE', '- Smua Foto di edit dan di Foto langsung oleh owner. ( Tidak ambil Foto dr org lain)\r\n- Silahkan tanya dulu model dan size yang anda inginkan sebelum order ,untuk menghindari kekosongan stock .\r\n- Size , warna , dan bentuk di gambar sesuai  dengan keadaan asli .\r\n- Bahan Halus & Tidak kasar.'),
('5fea06bd4647e', 'RoseGold', 'Kemeja Lengan Panjang', 200000, 8, 200, '5fea06bd4647e1.jpg', 'default.jpg', 'default.jpg', 'RoseGold Ngeluarin flanel baru nihh gaess!!! Masa iya gabeli ? Masa cuma mau diliatin doang? Kuy dibeli, Stok terbatas ya gaes...', 'Estimasi ukuran :\r\n- M ( 50 lebar x 72 panjang )\r\n- L ( 52 lebar x 74 panjang )\r\n- XL ( 54 lebar x 76 panjang )\r\nTIDAK MENERIMA TUKAR SIZE', '- Smua Foto di edit dan di Foto langsung oleh owner. ( Tidak ambil Foto dr org lain)\r\n- Silahkan tanya dulu model dan size yang anda inginkan sebelum order ,untuk menghindari kekosongan stock .\r\n- Size , warna , dan bentuk di gambar sesuai  dengan keadaan asli .\r\n- Bahan Halus & Tidak kasar.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekening`
--

CREATE TABLE `rekening` (
  `id_rekening` int(11) NOT NULL,
  `nama_bank` varchar(25) DEFAULT NULL,
  `no_rekening` varchar(25) DEFAULT NULL,
  `atas_nama` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rekening`
--

INSERT INTO `rekening` (`id_rekening`, `nama_bank`, `no_rekening`, `atas_nama`) VALUES
(1, 'BRI', '111928372264778', 'Redshops Store'),
(2, 'Mandiri', '7283920152632', 'Redshops Store'),
(3, 'BCA', '8263718295', 'Redshops Store'),
(4, 'BNI', '7772618293', 'Redshops Store');

-- --------------------------------------------------------

--
-- Struktur dari tabel `setting_toko`
--

CREATE TABLE `setting_toko` (
  `id_alamat` int(11) NOT NULL,
  `nama_toko` varchar(255) NOT NULL,
  `lokasi_toko` int(11) DEFAULT NULL,
  `alamat_toko` text NOT NULL,
  `no_telepon` varchar(20) NOT NULL DEFAULT '+62'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `setting_toko`
--

INSERT INTO `setting_toko` (`id_alamat`, `nama_toko`, `lokasi_toko`, `alamat_toko`, `no_telepon`) VALUES
(1, 'REDSHOP', 160, 'Jl. Brantas 23, Tegal Boto Lor, Sumbersari, Kec. Sumbersari, Kabupaten Jember, Jawa Timur 68121', '+6289685115937');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `no_order` varchar(16) NOT NULL,
  `tgl_transaksi` date DEFAULT NULL,
  `nama_penerima` varchar(50) DEFAULT NULL,
  `provinsi` varchar(50) DEFAULT NULL,
  `kabupaten` varchar(50) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `kode_pos` varchar(10) DEFAULT NULL,
  `no_telepon` varchar(16) DEFAULT NULL,
  `ekspedisi` varchar(255) DEFAULT NULL,
  `paket` varchar(255) DEFAULT NULL,
  `estimasi` varchar(255) DEFAULT NULL,
  `ongkir` int(11) DEFAULT NULL,
  `berat` int(11) DEFAULT NULL,
  `grand_total` int(11) DEFAULT NULL,
  `total_bayar` int(11) DEFAULT NULL,
  `status_bayar` int(1) DEFAULT NULL,
  `bukti_bayar` varchar(255) DEFAULT NULL,
  `atas_nama` varchar(50) DEFAULT NULL,
  `nama_bank` varchar(50) DEFAULT NULL,
  `no_rekening` varchar(50) DEFAULT NULL,
  `no_resi` varchar(25) DEFAULT NULL,
  `status_order` int(1) DEFAULT NULL
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
  `alamat` varchar(128) NOT NULL,
  `kab` varchar(128) NOT NULL,
  `prov` varchar(128) NOT NULL,
  `telp` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `name`, `email`, `username`, `image`, `password`, `alamat`, `kab`, `prov`, `telp`, `role_id`, `is_active`, `date_created`) VALUES
(15, 'Rizki Pratama', 'e41181256@student.polije.ac.id', 'superadmin', '_MG_52231.JPG', '$2y$10$Ue1Gy7/2ayI9T/EctwsPS.0rl6L1CM0rI.FATdQ/onj2xW6jxmO2K', 'Dusun Krajan RT 03 / RW 04', 'Tuban', 'Jawa Timur', '082331067312', 1, 1, 1606392372),
(28, 'Rizki', 'rizkipratama7575@gmail.com', 'admin', 'default.jpg', '$2y$10$XxBOdizPLBz4BlD3IA9bHem3gouLKmtWLxZg1OJEs9Q6SJrAJNWNS', 'Belum diatur', 'Belum diatur', 'Belum diatur', 'Belum diatur', 2, 1, 1608363165),
(29, 'Rizki Widya Pratama', 'silvianawidya46@gmail.com', 'rizkiwp', 'default.jpg', '$2y$10$Q7mOLzY0.pIuwOkr2s009.9jmXd3kW7pzcPir9bGkmPfpXXVBHW8.', 'Belum diatur', 'Belum diatur', 'Belum diatur', 'Belum diatur', 3, 1, 1608363215),
(31, 'Fahim', 'fahimbarcajr@yahoo.com', 'fahim10969', 'default.jpg', '$2y$10$0ZCAhByeQQ9u5dHMzJ70Yu.lv18i3bvC2EGyat3Op1IGr0D.o36ci', 'Belum diatur', 'Belum diatur', 'Belum diatur', 'Belum diatur', 3, 1, 1608619125);

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
-- Indeks untuk tabel `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_detail_transaksi`);

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
-- Indeks untuk tabel `rekening`
--
ALTER TABLE `rekening`
  ADD PRIMARY KEY (`id_rekening`);

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
-- AUTO_INCREMENT untuk tabel `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id_detail_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `rekening`
--
ALTER TABLE `rekening`
  MODIFY `id_rekening` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id_token` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
