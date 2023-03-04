-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2021 at 05:17 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surat`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_pemohon`
--

CREATE TABLE `data_pemohon` (
  `nik` varchar(16) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `jekel` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pemohon`
--

INSERT INTO `data_pemohon` (`nik`, `nama`, `tanggal_lahir`, `tempat_lahir`, `jekel`, `agama`, `alamat`, `telepon`, `pekerjaan`) VALUES
('1111111111111111', 'Fachri Shofiyyuddin Ahmad', '2000-05-28', 'Kudus', 'Laki-Laki', 'Islam', '                   RT 01 RW 07', '087897315639', 'Mahasiswa'),
('2222222222222222', 'Amalia', '1997-02-08', 'Kudus', 'Perempuan', 'Islam', ' RT 02 RW 03', '087897315639', 'Mahasiswa'),
('3333333333333333', 'Muhammad Ilham', '2021-01-08', 'Kudus', 'Laki-Laki', 'Islam', '      RT 01 RW 03', '087897315639', 'Mahasiswa'),
('4444444444444444', 'Muhammad Farih Ahbab', '2003-10-08', 'Kudus', 'Laki-Laki', 'Islam', '     RT 01 RW 05', '087897315639', 'Mahasiswa'),
('5555555555555555', 'Bintang Sultan Mimbar Maulana', '1999-11-15', 'Kudus', 'Laki-Laki', 'Islam', 'RT 04 RW 02', '087897315639', 'Mahasiswa'),
('9999999999999999', 'Budi', '2021-01-12', 'Kudus', 'Laki-Laki', '', '', '', ''),
('1000000000000000', 'Hadi', '2021-01-12', 'Pati', 'Laki-Laki', '', '', '', ''),
('7777777777777777', 'Fiki', '2021-01-12', 'Kudus', 'Perempuan', '', '', '', ''),
('8888888888888888', 'Inayah', '2021-01-12', 'Kudus', 'Perempuan', 'Islam', ' RT 01 RW 07', '087897315639', 'Mahasiswa'),
('1234', 'Fahri', '2021-03-16', 'Kudus', 'Perempuan', 'Islam', ' Jl. Setiabudi', '087897315639', 'Mahasiswa'),
('98', 'Fahri', '2021-03-16', 'Kudus', 'Laki-Laki', 'Islam', '  ', '', ''),
('00', 'Fahri', '2021-03-16', 'Kudus', 'Laki-Laki', 'Islam', '  Kauman', '087897315639', 'Mahasiswa'),
('12345', 'obet leon', '2021-09-01', 'admin', 'Laki-Laki', '', '', '', ''),
('1111', 'obet siahaan', '2021-09-08', 'admin', 'Laki-Laki', '', '', '', ''),
('1234567', 'obet siahaan', '2000-02-27', 'Medan', 'Laki-Laki', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `data_request_skd`
--

CREATE TABLE `data_request_skd` (
  `id_request_skd` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tanggal_request` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `scan_ktp` text NOT NULL,
  `scan_kk` text NOT NULL,
  `scan_pbb` text NOT NULL,
  `keperluan` varchar(20) NOT NULL DEFAULT '-',
  `keterangan` varchar(50) NOT NULL DEFAULT 'Data sedang diperiksa oleh Staf',
  `request` varchar(20) NOT NULL DEFAULT 'DOMISILI',
  `sebab` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `acc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_request_skd`
--

INSERT INTO `data_request_skd` (`id_request_skd`, `nik`, `tanggal_request`, `scan_ktp`, `scan_kk`, `scan_pbb`, `keperluan`, `keterangan`, `request`, `sebab`, `status`, `acc`) VALUES
(12, '1111111111111111', '2021-01-11 03:22:38', '1111111111111111 - Fachri Shofiyyuddin Ahmad_.jpg', '1111111111111111 - Fachri Shofiyyuddin Ahmad_.jpg', '', '-', 'Surat dicetak, bisa diambil!', 'DOMISILI', '', 3, '2021-01-11'),
(17, '5555555555555555', '2021-01-11 08:27:04', '5555555555555555 - Bintang Sultan Mimbar Maulana_.jpg', '5555555555555555 - Bintang Sultan Mimbar Maulana_.jpg', '', '-', 'Surat dicetak, bisa diambil!', 'DOMISILI', '', 3, '2021-01-31'),
(19, '5555555555555555', '2021-01-11 08:41:15', '5555555555555555 - Bintang Sultan Mimbar Maulana_.jpg', '5555555555555555 - Bintang Sultan Mimbar Maulana_.jpg', '', '-', 'Surat dicetak, bisa diambil!', 'DOMISILI', '', 3, '2021-01-11'),
(20, '1111111111111111', '2021-01-13 21:12:25', '1111111111111111 - Fachri Shofiyyuddin Ahmad_.jpg', '1111111111111111 - Fachri Shofiyyuddin Ahmad_.jpg', '', '-', 'Surat dicetak, bisa diambil!', 'DOMISILI', '', 3, '2021-01-14'),
(21, '1234', '2021-09-08 02:50:15', '1234_.jpg', '1234_.jpg', '', '-', 'pbb tidak ada harap lengkapi dahulu', 'DOMISILI', '', 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `data_request_skp`
--

CREATE TABLE `data_request_skp` (
  `id_request_skp` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tanggal_request` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `scan_ktp` text NOT NULL,
  `scan_kk` text NOT NULL,
  `scan_pbb` int(11) NOT NULL,
  `instansi` varchar(30) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `keperluan` varchar(30) NOT NULL,
  `keterangan` varchar(50) NOT NULL DEFAULT 'Data sedang diperiksa oleh Staf',
  `sebab` text NOT NULL,
  `lama` int(11) NOT NULL,
  `sampai_tanggal` date NOT NULL,
  `request` varchar(20) NOT NULL DEFAULT 'PAMIT',
  `status` int(11) NOT NULL DEFAULT '0',
  `acc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_request_skp`
--

INSERT INTO `data_request_skp` (`id_request_skp`, `nik`, `tanggal_request`, `scan_ktp`, `scan_kk`, `scan_pbb`, `instansi`, `jabatan`, `keperluan`, `keterangan`, `sebab`, `lama`, `sampai_tanggal`, `request`, `status`, `acc`) VALUES
(7, '1111111111111111', '2021-01-11 10:50:31', '1111111111111111 - Fachri Shofiyyuddin Ahmad_.jpg', '1111111111111111 - Fachri Shofiyyuddin Ahmad_.jpg', 0, 'PT. Djarum', 'Staf IT', 'Sakit', 'Surat dicetak, bisa diambil!', '', 2, '2021-01-12', 'PAMIT', 3, '2021-01-11'),
(8, '4444444444444444', '2021-01-11 16:03:13', '4444444444444444 - Muhammad Farih Ahbab_.jpg', '4444444444444444 - Muhammad Farih Ahbab_.jpg', 0, 'PT. Djarum', '', 'Ijin Sakit', 'Surat dicetak, bisa diambil!', '', 5, '2021-01-15', 'PAMIT', 3, '2021-01-14'),
(9, '1111111111111111', '2021-01-13 21:11:53', '1111111111111111 - Fachri Shofiyyuddin Ahmad_.jpg', '1111111111111111 - Fachri Shofiyyuddin Ahmad_.jpg', 0, 'PT. Djarum', '', 'Sakit', 'Surat dicetak, bisa diambil!', '', 2, '2021-01-15', 'PAMIT', 3, '2021-01-14');

-- --------------------------------------------------------

--
-- Table structure for table `data_request_sktm`
--

CREATE TABLE `data_request_sktm` (
  `id_request_sktm` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tanggal_request` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `scan_ktp` text NOT NULL,
  `scan_kk` text NOT NULL,
  `scan_pbb` text NOT NULL,
  `keperluan` varchar(30) NOT NULL,
  `request` varchar(20) NOT NULL DEFAULT 'TIDAK MAMPU',
  `sebab` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL DEFAULT 'Data sedang diperiksa oleh Staf',
  `status` int(11) NOT NULL DEFAULT '0',
  `acc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_request_sktm`
--

INSERT INTO `data_request_sktm` (`id_request_sktm`, `nik`, `tanggal_request`, `scan_ktp`, `scan_kk`, `scan_pbb`, `keperluan`, `request`, `sebab`, `keterangan`, `status`, `acc`) VALUES
(71, '1234', '2021-09-09 05:08:36', '1234 - Fahri_6949_ubahsktm.jpg', '1234 - Fahri_6949_ubahsktm.jpg', '1234 - Fahri_6949_ubahsktm.jpg', 'Persyaratan Beasiswa USU ', 'TIDAK MAMPU', 'Berpenghasilan dibawah 1.800.000', 'Surat dicetak, bisa diambil!', 3, '0000-00-00'),
(72, '1234', '2021-09-09 05:09:32', '1234 - Fahri_4912sktm.jpg', '1234 - Fahri_4912sktm.jpg', '1234 - Fahri_4912sktm.jpg', 'Pembuatan KIS', 'TIDAK MAMPU', 'Ekonomi terdampak Covid ', 'Surat sedang dalam proses cetak', 2, '2021-09-13'),
(73, '1234', '2021-09-14 08:42:30', '1234 - Fahri_2936sktm.jpg', '1234 - Fahri_2936sktm.jpg', '1234 - Fahri_2936sktm.jpg', 'Persyaratan Beasiswa', 'TIDAK MAMPU', 'dampak covid', 'Surat sedang dalam proses cetak', 2, '2021-09-14'),
(74, '1234', '2021-09-16 12:58:00', '1234 - Fahri_1438sktm.jpg', '1234 - Fahri_1438sktm.jpg', '1234 - Fahri_1438sktm.jpg', 'abcd', 'TIDAK MAMPU', 'efgh', 'Data sedang diperiksa oleh Staf', 1, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `data_request_sku`
--

CREATE TABLE `data_request_sku` (
  `id_request_sku` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tanggal_request` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `scan_ktp` text NOT NULL,
  `scan_kk` text NOT NULL,
  `scan_pbb` text NOT NULL,
  `usaha` varchar(30) NOT NULL,
  `keperluan` varchar(30) NOT NULL,
  `keterangan` varchar(50) NOT NULL DEFAULT 'Data sedang diperiksa oleh Staf',
  `request` varchar(20) NOT NULL DEFAULT 'USAHA',
  `sebab` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `acc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_request_sku`
--

INSERT INTO `data_request_sku` (`id_request_sku`, `nik`, `tanggal_request`, `scan_ktp`, `scan_kk`, `scan_pbb`, `usaha`, `keperluan`, `keterangan`, `request`, `sebab`, `status`, `acc`) VALUES
(7, '5555555555555555', '2021-01-11 09:26:15', '5555555555555555 - Bintang Sultan Mimbar Maulana_.jpg', '5555555555555555 - Bintang Sultan Mimbar Maulana_.jpg', '0', 'Warung Kopi', 'Bantuan UMKM', 'Surat dicetak, bisa diambil!', 'USAHA', '0', 3, '2021-01-11'),
(8, '1111111111111111', '2021-01-13 21:07:43', '1111111111111111 - Fachri Shofiyyuddin Ahmad_.jpg', '1111111111111111 - Fachri Shofiyyuddin Ahmad_.jpg', '0', 'Warung Kopi', 'Bantuan UMKM', '', 'USAHA', '0', 3, '2021-01-14'),
(9, '1234', '2021-09-06 08:16:59', '1234_.jpg', '1234_.jpg', '0', 'usaha kedai kopi', 'buat sk surat usaha', 'Surat dicetak, bisa diambil!', 'USAHA', '0', 3, '2021-09-06'),
(10, '1234', '2021-09-09 03:44:22', '1234_.jpg', '1234_.jpg', '0', 'usaha kedai kopi', 'fsfewda', 'Data sedang diperiksa oleh Staf', 'USAHA', '0', 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `data_user`
--

CREATE TABLE `data_user` (
  `nik` varchar(16) NOT NULL,
  `password` varchar(20) NOT NULL,
  `hak_akses` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_user`
--

INSERT INTO `data_user` (`nik`, `password`, `hak_akses`) VALUES
('00', '123', 'Pemohon'),
('1', '123', 'Staf'),
('1000000000000000', '10', 'Pemohon'),
('1111', '1111', 'Pemohon'),
('1111111111111111', '123', 'Pemohon'),
('1234', '123', 'Pemohon'),
('12345', '12345', 'Pemohon'),
('1234567', '1234567', 'Pemohon'),
('2', '2', 'Lurah'),
('2222222222222222', '2', 'Pemohon'),
('3333333333333333', '3', 'Pemohon'),
('4444444444444444', '4', 'Pemohon'),
('5555555555555555', '5', 'Pemohon'),
('7777777777777777', '7', 'Pemohon'),
('8888888888888888', '8', 'Pemohon'),
('98', '123', 'Pemohon'),
('9999999999999999', '9', 'Pemohon');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_pemohon`
--
ALTER TABLE `data_pemohon`
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `data_request_skd`
--
ALTER TABLE `data_request_skd`
  ADD PRIMARY KEY (`id_request_skd`),
  ADD KEY `id_pemohon` (`nik`);

--
-- Indexes for table `data_request_skp`
--
ALTER TABLE `data_request_skp`
  ADD PRIMARY KEY (`id_request_skp`),
  ADD KEY `id_pemohon` (`nik`);

--
-- Indexes for table `data_request_sktm`
--
ALTER TABLE `data_request_sktm`
  ADD PRIMARY KEY (`id_request_sktm`),
  ADD KEY `id_pemohon` (`nik`);

--
-- Indexes for table `data_request_sku`
--
ALTER TABLE `data_request_sku`
  ADD PRIMARY KEY (`id_request_sku`),
  ADD KEY `id_pemohon` (`nik`);

--
-- Indexes for table `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_request_skd`
--
ALTER TABLE `data_request_skd`
  MODIFY `id_request_skd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `data_request_skp`
--
ALTER TABLE `data_request_skp`
  MODIFY `id_request_skp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `data_request_sktm`
--
ALTER TABLE `data_request_sktm`
  MODIFY `id_request_sktm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `data_request_sku`
--
ALTER TABLE `data_request_sku`
  MODIFY `id_request_sku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_pemohon`
--
ALTER TABLE `data_pemohon`
  ADD CONSTRAINT `data_pemohon_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `data_user` (`nik`);

--
-- Constraints for table `data_request_skd`
--
ALTER TABLE `data_request_skd`
  ADD CONSTRAINT `data_request_skd_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `data_user` (`nik`);

--
-- Constraints for table `data_request_skp`
--
ALTER TABLE `data_request_skp`
  ADD CONSTRAINT `data_request_skp_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `data_user` (`nik`);

--
-- Constraints for table `data_request_sktm`
--
ALTER TABLE `data_request_sktm`
  ADD CONSTRAINT `data_request_sktm_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `data_user` (`nik`);

--
-- Constraints for table `data_request_sku`
--
ALTER TABLE `data_request_sku`
  ADD CONSTRAINT `data_request_sku_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `data_user` (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
