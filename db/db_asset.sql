-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2021 at 09:36 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_asset`
--

-- --------------------------------------------------------

--
-- Table structure for table `asset`
--

CREATE TABLE `asset` (
  `id` int(5) NOT NULL,
  `no_asset` varchar(50) NOT NULL,
  `nama_asset` varchar(50) NOT NULL,
  `merek` varchar(50) NOT NULL,
  `ruang_letak` varchar(25) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `penerima` varchar(50) NOT NULL,
  `status` varchar(25) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asset`
--

INSERT INTO `asset` (`id`, `no_asset`, `nama_asset`, `merek`, `ruang_letak`, `tgl_masuk`, `penerima`, `status`, `keterangan`) VALUES
(23, 'AS/AB/001', 'Infocus', 'Nikon', 'Ruang Sekcam', '2021-01-12', 'Camat Air Batu', 'Digunakan', 'Pengadaan dari Pemda'),
(24, 'AS/AB/002', 'Speaker Simbadda  CST-2500N', 'Simbadda', 'Ruang Sekcam', '2021-01-01', 'Sekretaris Camat', 'Digunakan', 'Hibah dari Dukcapil'),
(25, 'AS/AB/003', '1 Set Komputer Asus', 'Asus', 'Ruang Camat', '2021-01-05', 'Camat Air Batu', 'Digunakan', 'Pengadaan Aset dari Pemda'),
(26, 'AS/AB/004', 'AC Polytron Neuva Ice PAC05VX', 'Polytron', 'Ruang Camat', '2021-01-02', 'Camat Air Batu', 'Ada', 'Hibah dari Pemda'),
(27, 'AS/AB/005', '1 Lusin Kursi Stainless', 'Omega', 'Ruang Perpustakaan', '2021-01-09', 'Sekretaris Camat', 'Ada', 'Hibah Dari Pemda dan Belum Digunakan'),
(28, 'AS/AB/006', 'Kipas Angin', 'Polytron', 'Ruang Camat', '2021-01-15', 'Camat Air Batu', 'Ada', 'Penggunaan Dana Pribadi Pak Camat'),
(29, 'AS/AB/007', 'Tablet', 'Samsung', 'Ruang Camat', '2021-01-25', 'Sekretaris Camat', 'Digunakan', 'Untuk E-Qasir');

-- --------------------------------------------------------

--
-- Table structure for table `pajak`
--

CREATE TABLE `pajak` (
  `id` int(11) NOT NULL,
  `noph` varchar(50) NOT NULL,
  `namaph` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `bayar` int(12) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pajak`
--

INSERT INTO `pajak` (`id`, `noph`, `namaph`, `jenis`, `alamat`, `bayar`, `status`) VALUES
(1, 'PH/AB/001', 'PT Farm Indonesia', 'Perusahaan Agraris', 'Danau Sijabut', 15000000, 'Masih Beroperasi'),
(2, 'PH/AB/002', 'PT.Saya Ambil Buff', 'Perusahaan Agraris', 'Sei Alim Ulu', 10000000, 'Masih Beroperasi'),
(3, 'PH/AB/003', 'CV.Jamet United', 'Perusahaan Agraris', 'Air Teluk Kiri', 19000000, 'Masih Beroperasi'),
(4, 'PH/AB/004', 'PT.Pencari Cinta Sejati', 'Perusahaan Agraris', 'Hessa Air Genting', 15000000, 'Masih Beroperasi'),
(5, 'PH/AB/005', 'CV. Kongkalkong Gigit', 'Perusahaan Agraris', 'Danau Sijabut', 12000000, 'Masih Beroperasi');

-- --------------------------------------------------------

--
-- Table structure for table `tetap`
--

CREATE TABLE `tetap` (
  `id` int(5) NOT NULL,
  `no_asset` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis` varchar(25) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `posisi` varchar(200) NOT NULL,
  `ukuran` varchar(25) NOT NULL,
  `status` varchar(50) NOT NULL,
  `keterangan` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tetap`
--

INSERT INTO `tetap` (`id`, `no_asset`, `nama`, `jenis`, `lokasi`, `posisi`, `ukuran`, `status`, `keterangan`) VALUES
(22, 'AT/AB/001', 'Mesin Roasting Kopi', 'Peralatan dan Mesin', 'Sei Alim Ulu', 'Kantor Koperasi Kopi Desa SAU', 'Tidak ada ukuran', 'Digunakan Pemda', 'Untuk Rostingan Kopi'),
(23, 'AT/AB/002', 'Lapangan Untuk Event dan Kegiatan ', 'Tanah', 'Sei Alim Ulu', 'Di Sebeerang Kantor Kecamatan', '200 x 700 m2', 'Disewakan', 'Dapat Digunakan Masyarakat Umum'),
(24, 'AT/AB/003', 'Lapangan Futsal dan Aula Olahraga', 'Gedung dan Bangunan', 'Air Teluk Hessa', 'Depan Kantor Karang Taruna Kecamatan AB', '700 x 800 m2', 'Disewakan', 'Sarana Olahraga'),
(25, 'AT/AB/004', 'Mesin Pengolah Emas', 'Peralatan dan Mesin', 'Air Teluk Kiri', 'Depan Balai Desa ATK Samping Rumah Pak Suyatno', 'Tidak ada', 'Digunakan Pemda', 'Untuk BUMDES'),
(26, 'AT/AB/005', 'Penggiling Beras', 'Peralatan dan Mesin', 'Air Teluk Hessa', 'Di Rumah Koperasi Bersama', 'Tidak Ada', 'Digunakan Pemda', 'Untuk Pembuat Tepung');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'bpbmdab@gmail.com', 'Badan Pengelola Barang Milik Daerah', 1, 'Badan Pengelola Barang Milik Daerah'),
('camat', 'e0dc1c969db5fa159c0e3ccc290e2314', 'camatab@rocketmail.com', 'Arif Wahyudi', 2, 'Pimpinan'),
('masyarakat', 'd9a8c6c010a37fdc9850fe6d8c064880', 'masya@example.co.id', 'Warga Civilion', 3, 'Tukang Pantau Kepemerintahan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asset`
--
ALTER TABLE `asset`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no_perkara` (`no_asset`);

--
-- Indexes for table `pajak`
--
ALTER TABLE `pajak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tetap`
--
ALTER TABLE `tetap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asset`
--
ALTER TABLE `asset`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `pajak`
--
ALTER TABLE `pajak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tetap`
--
ALTER TABLE `tetap`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
