-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20221031.25fe766a26
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2023 at 07:44 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simas`
--

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `gambar` varchar(250) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `judul`, `keterangan`, `gambar`, `created_at`, `updated_at`, `deleted_at`) VALUES
(7, 'Penyembelihan Qurban', 'Penyembelihan Qurban', '1693102900_cf676dd5398f4d0a2f9c.jpg', '2023-08-27 09:21:40', '2023-08-27 09:21:40', '0000-00-00 00:00:00'),
(8, 'Mengolah daging qurban', 'Mengolah daging qurban', '1693102937_3fc564fedf4f81ed2ba8.jpg', '2023-08-27 09:22:17', '2023-08-27 09:22:17', '0000-00-00 00:00:00'),
(9, 'Irmada', 'Irmada Daruttaqwa', '1693102998_bb3fa9e07f433c3f399d.jpg', '2023-08-27 09:23:18', '2023-08-27 09:23:18', '0000-00-00 00:00:00'),
(10, 'Pawai lomba takbir', 'Pawai lomba takbir', '1693103026_ec413973597b48a2f6de.jpg', '2023-08-27 09:23:46', '2023-08-27 09:23:46', '0000-00-00 00:00:00'),
(11, 'Safari ramadhan', 'Safari ramadhan', '1693103050_aae05fb8e9c5cb8fbb16.jpg', '2023-08-27 09:24:10', '2023-08-27 09:24:10', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `kas_masjid`
--

CREATE TABLE `kas_masjid` (
  `id_kasMasjid` int(11) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `pemasukan` int(60) NOT NULL,
  `pengeluaran` int(60) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kas_masjid`
--

INSERT INTO `kas_masjid` (`id_kasMasjid`, `keterangan`, `pemasukan`, `pengeluaran`, `tanggal`) VALUES
(1, 'Infaq jumat', 300000, 0, '2023-07-07'),
(3, 'bayar listrik', 0, 500000, '2023-07-05'),
(4, 'iuran latihan hadroh', 10000, 0, '2023-07-11'),
(5, 'dari feby', 30000, 0, '2023-07-07'),
(7, 'hamba allah', 2000000, 0, '2023-07-01'),
(9, 'bayar air', 0, 5000, '2023-07-09'),
(10, 'renovasi', 0, 250000, '2023-07-10'),
(11, 'bikin pagar', 0, 30000, '2023-07-09'),
(12, 'ganti plafon', 0, 50000, '2023-07-09'),
(13, 'dipinjam feby', 0, 1000000, '2023-07-09');

-- --------------------------------------------------------

--
-- Table structure for table `kas_sosial`
--

CREATE TABLE `kas_sosial` (
  `id_kasSosial` int(11) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `pemasukan` int(60) NOT NULL,
  `pengeluaran` int(60) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kas_sosial`
--

INSERT INTO `kas_sosial` (`id_kasSosial`, `keterangan`, `pemasukan`, `pengeluaran`, `tanggal`) VALUES
(2, 'pembelian hadroh', 0, 200000, '2023-07-11'),
(3, 'iuran pawai', 250000, 0, '2023-07-11'),
(4, 'iuran latihan hadroh', 100000, 0, '2023-07-11'),
(6, 'iuran acara makan', 50000, 0, '2023-07-10');

-- --------------------------------------------------------

--
-- Table structure for table `kepengurusan`
--

CREATE TABLE `kepengurusan` (
  `id_kepengurusan` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `jabatan` varchar(250) NOT NULL,
  `pesan` varchar(250) NOT NULL,
  `gambar` varchar(250) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kepengurusan`
--

INSERT INTO `kepengurusan` (`id_kepengurusan`, `nama`, `jabatan`, `pesan`, `gambar`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, 'Aldo Iqbal Damoro', 'Keamanan', 'Aku adalah yin, dan tidak akan pernah berubah apapun yang terjadi', '1693100531_927446a2e8f0f42f5922.jpg', '2023-08-27 08:42:11', '2023-08-27 08:42:11', '0000-00-00 00:00:00'),
(7, 'Muhammad Huzaifah', 'Bendahara', 'Tinjuku tidak mungkin meleset', '1693100671_daaf7685a80a2172cc95.jpg', '2023-08-27 08:44:31', '2023-08-27 08:44:31', '0000-00-00 00:00:00'),
(8, 'M. Ridwan Tri Saputra', 'Sekretaris', 'Aku adalah kekuatan, dan wujud asli cahaya', '1693100696_71100ac6356062e5d61c.jpg', '2023-08-27 08:44:56', '2023-08-27 08:44:56', '0000-00-00 00:00:00'),
(9, 'Fahrul Adib', 'Ketua Pengurus', 'Nothing last forever,we can change the future', '1693100968_7f5b33a2a89d02b07da4.jpeg', '2023-08-27 08:49:28', '2023-08-27 08:49:28', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `nama` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `nama`) VALUES
(1, 'sudendev', '$2y$10$Y3jYpRHo5au7j303xTnaC.VF5KfG9WED2NTkOJIBBSsdUmZswteve', 'Fahrul Adib');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `kas_masjid`
--
ALTER TABLE `kas_masjid`
  ADD PRIMARY KEY (`id_kasMasjid`);

--
-- Indexes for table `kas_sosial`
--
ALTER TABLE `kas_sosial`
  ADD PRIMARY KEY (`id_kasSosial`);

--
-- Indexes for table `kepengurusan`
--
ALTER TABLE `kepengurusan`
  ADD PRIMARY KEY (`id_kepengurusan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kas_masjid`
--
ALTER TABLE `kas_masjid`
  MODIFY `id_kasMasjid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kas_sosial`
--
ALTER TABLE `kas_sosial`
  MODIFY `id_kasSosial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kepengurusan`
--
ALTER TABLE `kepengurusan`
  MODIFY `id_kepengurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
