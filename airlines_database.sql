-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2022 at 09:37 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airlines_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` enum('Perempuan','Laki-Laki') NOT NULL,
  `posisi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`, `nama`, `jenis_kelamin`, `posisi`) VALUES
(1, 'Admin 1', '372c95307bc910fc2107cdbad1ea4cef', 'adminsatu@gmail.com', 'Admin Satu', 'Laki-Laki', 'Development'),
(2, 'Admin 2', '97deb7c83265cc575c9fbb5a525358bb', 'admin2@gmail.com', 'Admin Dua', 'Perempuan', 'Development');

-- --------------------------------------------------------

--
-- Table structure for table `bandara`
--

CREATE TABLE `bandara` (
  `id_bandara` int(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bandara`
--

INSERT INTO `bandara` (`id_bandara`, `nama`, `kota`, `provinsi`) VALUES
(1, 'Bandara Soekarno-Hatta', 'Tangerang', 'Banten'),
(2, 'Bandara I Gusti Ngurah Rai', 'Bandung', 'Bali'),
(3, 'Bandara Kualanamu', 'Deli Serdang', 'Sumatera Utara'),
(4, 'Bandara Internasional Yogyakarta', 'Kulon Progo', 'Yogyakarta'),
(5, 'Bandara Sultan Aji Muhammad Sulaiman Sepinggan', 'Balik Papan', 'Kalimantan Timur'),
(6, 'Bandara Adi Sumarmo', 'Boyolali', 'Jawa Tengah'),
(7, 'Bandara El Tari', 'Kupang', 'Nusa Tenggara Timur'),
(8, 'Bandara Frans Kaisiepo', 'Biak Numfor', 'Papua'),
(9, 'Bandara Halim Perdanakusuma', 'Jakarta Timur', 'DKI Jakarta'),
(10, 'Bandara Hang Nadim', 'Batam', 'Kepulauan Riau'),
(11, 'Bandara Husein Sastranegara', 'Bandung', 'Jawa Barat'),
(12, 'Bandara Ahmad Yani', 'Semarang', 'Jawa Tengah'),
(13, 'Bandara Juanda', 'Sidoarjo', 'Jawa Timur'),
(14, 'Bandara Juwata', 'Tarakan', 'Kalimantan Utara'),
(15, 'Bandara Lombok', 'Lombok Tengah', 'Nusa Tenggara Barat'),
(16, 'Bandara Minangkabau', 'Padang Pariaman', 'Sumatera Barat'),
(17, 'Bandara Mopah', 'Merauke', 'Papua'),
(18, 'Bandara Pattimura', 'Ambon', 'Maluku'),
(19, 'Bandara Soewondo', 'Kota Medan', 'Sumatra Utara'),
(20, 'Bandara Raja Haji Fisabilillah', 'Tanjungpinang', 'Kepulauan Riau'),
(21, 'Bandara Sam Ratulangi', 'Manado', 'Sulawesi Utara'),
(22, 'Bandara Selaparang', 'Lombok', 'Nusa Tenggara Barat'),
(23, 'Bandara Sentani', 'Jayapura', 'Papua'),
(24, 'Bandara Silangit', 'Tapanuli Utara', 'Sumatera Utara'),
(25, 'Bandara Sultan Hasanuddin', 'Maros', 'SUlawesi Selatan'),
(26, 'Bandara Sultan Iskandar Muda', 'Aceh Besar', 'Aceh'),
(27, 'Bandara Sultan Mahmud Badaruddin II', 'Palembang', 'Sumatera Selatan'),
(28, 'Bandara Sultan Syarif Kasim II', 'Pekanbaru', 'Riau'),
(29, 'Bandara Supadio', 'Kubu Raya', 'Kalimantan Barat'),
(30, 'Bandara Syamsudin Noor', 'Banjarbaru', 'Kalimantan Selatan'),
(37, 'Baru', 'Bandara Baru', 'baru'),
(39, 'Bandara Baru', 'baru', 'baru');

-- --------------------------------------------------------

--
-- Table structure for table `harga`
--

CREATE TABLE `harga` (
  `id_penerbangan` int(50) NOT NULL,
  `kelas` enum('Ekonomi','Bisnis') NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `harga`
--

INSERT INTO `harga` (`id_penerbangan`, `kelas`, `harga`) VALUES
(1, 'Ekonomi', 500000),
(2, 'Ekonomi', 700000),
(3, 'Bisnis', 800000),
(4, 'Bisnis', 850000),
(5, 'Ekonomi', 600000);

-- --------------------------------------------------------

--
-- Table structure for table `pembatalan`
--

CREATE TABLE `pembatalan` (
  `id_penumpang` int(50) NOT NULL,
  `status_pembatalan` varchar(50) NOT NULL,
  `alasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembatalan`
--

INSERT INTO `pembatalan` (`id_penumpang`, `status_pembatalan`, `alasan`) VALUES
(1, 'Belum di ACC', 'Belum Tahu');

-- --------------------------------------------------------

--
-- Table structure for table `penerbangan`
--

CREATE TABLE `penerbangan` (
  `id_penerbangan` int(50) NOT NULL,
  `id_pesawat` int(50) NOT NULL,
  `tanggal_berangkat` date NOT NULL,
  `jam_berangkat` time NOT NULL,
  `tanggal_sampai` date NOT NULL,
  `jam_sampai` time NOT NULL,
  `bandara_berangkat` int(50) NOT NULL,
  `bandara_tujuan` int(50) NOT NULL,
  `tipe` enum('Ekonomi','Ekonomi-Premium','Bisnis','First-Class') NOT NULL,
  `status` enum('Check In','Waiting Room','Boarding','Final Call','Departed') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penerbangan`
--

INSERT INTO `penerbangan` (`id_penerbangan`, `id_pesawat`, `tanggal_berangkat`, `jam_berangkat`, `tanggal_sampai`, `jam_sampai`, `bandara_berangkat`, `bandara_tujuan`, `tipe`, `status`) VALUES
(1, 1, '2022-12-29', '09:22:19', '2022-12-29', '10:25:10', 6, 2, 'Ekonomi', 'Check In'),
(2, 3, '2022-12-22', '19:37:50', '2022-12-22', '21:37:50', 6, 12, 'Ekonomi-Premium', 'Waiting Room'),
(3, 3, '2022-12-24', '09:47:01', '2022-12-24', '10:56:01', 8, 14, 'Bisnis', 'Check In'),
(4, 1, '2022-12-26', '11:33:09', '2022-12-26', '12:47:09', 13, 21, 'First-Class', 'Check In'),
(5, 2, '2022-12-28', '07:42:26', '2022-12-28', '09:50:26', 39, 7, 'Ekonomi-Premium', 'Check In');

-- --------------------------------------------------------

--
-- Table structure for table `penumpang`
--

CREATE TABLE `penumpang` (
  `id_penumpang` int(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_ktp` varchar(20) DEFAULT NULL,
  `jenis_penumpang` enum('Dewasa','Infant','Bayi') NOT NULL,
  `jenis_kelamin` enum('Perempuan','Laki-Laki') NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `tambahan_bagasi` enum('5','10','15') DEFAULT NULL,
  `kursi` varchar(5) NOT NULL,
  `id_penerbangan` int(50) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penumpang`
--

INSERT INTO `penumpang` (`id_penumpang`, `nama`, `no_ktp`, `jenis_penumpang`, `jenis_kelamin`, `email`, `no_telp`, `alamat`, `kota`, `provinsi`, `tambahan_bagasi`, `kursi`, `id_penerbangan`, `id_user`) VALUES
(1, 'Agung', '3372071867035512', 'Dewasa', 'Laki-Laki', 'agung@gmail.com', '0857710029911', 'Jateng', 'Solo', 'Jateng', '5', '32A', 1, 1),
(2, 'Riyan', '3372071967035513', 'Dewasa', 'Laki-Laki', 'riyan@gmail.com', '0857711129911', 'jalan samudra', 'solo', 'jawa tengah', '5', '12A', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_data` int(50) NOT NULL,
  `total_pesanan` int(50) NOT NULL,
  `bulan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_data`, `total_pesanan`, `bulan`) VALUES
(1, 408, 'Januari'),
(2, 221, 'Februari'),
(3, 298, 'Maret'),
(4, 377, 'April'),
(5, 289, 'Mei'),
(6, 134, 'Juni'),
(7, 321, 'Juli'),
(8, 341, 'Agustus'),
(9, 200, 'September'),
(10, 193, 'Oktober'),
(11, 233, 'November'),
(12, 354, 'Desember');

-- --------------------------------------------------------

--
-- Table structure for table `pesawat`
--

CREATE TABLE `pesawat` (
  `id_pesawat` int(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kapasitas_penumpang` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesawat`
--

INSERT INTO `pesawat` (`id_pesawat`, `nama`, `kapasitas_penumpang`) VALUES
(1, 'Lion Air', 200),
(2, 'Tiger Air', 200),
(3, 'Citilink ', 250),
(4, 'Garude', 300);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `negara` varchar(100) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `jenis_kelamin` enum('Perempuan','Laki-Laki') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `nama`, `tanggal_lahir`, `negara`, `provinsi`, `kota`, `jenis_kelamin`) VALUES
(1, 'User 1', 'user1@gmail.com', 'b1157bdfaff95d0f8e650cc8efb6f3b0', 'User Satu', '2012-10-17', 'Indonesia', 'Jawa Timur', 'Surabaya', 'Laki-Laki'),
(2, 'User 2', 'user2@gmail.com', '954ffdfcbd1be10230a7068629236c1f', 'User Dua', '2021-12-11', 'Indonesia', 'Jawa Tengah', 'Solo', 'Perempuan'),
(3, 'User 3', 'user3@gmail.com', '03820257748957c8869cc51ca3eb46d6', 'User Tiga', '2022-12-08', 'Indonesia', 'Jawa Tengah', 'Surakarta', 'Laki-Laki'),
(4, 'User 4 ', 'user4@gmail.com', '0ae33b44e6a6ad70433105580398d18a', 'User Empat', '2022-12-01', 'Indonesia', 'Jawa Timur', 'Ponorogo', 'Perempuan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bandara`
--
ALTER TABLE `bandara`
  ADD PRIMARY KEY (`id_bandara`);

--
-- Indexes for table `harga`
--
ALTER TABLE `harga`
  ADD PRIMARY KEY (`id_penerbangan`);

--
-- Indexes for table `pembatalan`
--
ALTER TABLE `pembatalan`
  ADD PRIMARY KEY (`id_penumpang`),
  ADD KEY `id_penumpang` (`id_penumpang`);

--
-- Indexes for table `penerbangan`
--
ALTER TABLE `penerbangan`
  ADD PRIMARY KEY (`id_penerbangan`),
  ADD KEY `id_pesawat` (`id_pesawat`),
  ADD KEY `bandara_berangkat` (`bandara_berangkat`),
  ADD KEY `bandara_tujuan` (`bandara_tujuan`);

--
-- Indexes for table `penumpang`
--
ALTER TABLE `penumpang`
  ADD PRIMARY KEY (`id_penumpang`),
  ADD KEY `id_penerbangan` (`id_penerbangan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_data`);

--
-- Indexes for table `pesawat`
--
ALTER TABLE `pesawat`
  ADD PRIMARY KEY (`id_pesawat`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bandara`
--
ALTER TABLE `bandara`
  MODIFY `id_bandara` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `penerbangan`
--
ALTER TABLE `penerbangan`
  MODIFY `id_penerbangan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `penumpang`
--
ALTER TABLE `penumpang`
  MODIFY `id_penumpang` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_data` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pesawat`
--
ALTER TABLE `pesawat`
  MODIFY `id_pesawat` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `harga`
--
ALTER TABLE `harga`
  ADD CONSTRAINT `harga_ibfk_1` FOREIGN KEY (`id_penerbangan`) REFERENCES `penerbangan` (`id_penerbangan`);

--
-- Constraints for table `pembatalan`
--
ALTER TABLE `pembatalan`
  ADD CONSTRAINT `pembatalan_ibfk_1` FOREIGN KEY (`id_penumpang`) REFERENCES `penumpang` (`id_penumpang`);

--
-- Constraints for table `penerbangan`
--
ALTER TABLE `penerbangan`
  ADD CONSTRAINT `penerbangan_ibfk_1` FOREIGN KEY (`id_pesawat`) REFERENCES `pesawat` (`id_pesawat`),
  ADD CONSTRAINT `penerbangan_ibfk_2` FOREIGN KEY (`bandara_berangkat`) REFERENCES `bandara` (`id_bandara`),
  ADD CONSTRAINT `penerbangan_ibfk_3` FOREIGN KEY (`bandara_tujuan`) REFERENCES `bandara` (`id_bandara`);

--
-- Constraints for table `penumpang`
--
ALTER TABLE `penumpang`
  ADD CONSTRAINT `penumpang_ibfk_1` FOREIGN KEY (`id_penerbangan`) REFERENCES `penerbangan` (`id_penerbangan`),
  ADD CONSTRAINT `penumpang_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
