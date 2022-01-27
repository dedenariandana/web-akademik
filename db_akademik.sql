-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2022 at 06:47 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_akademik`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mahasiswa`
--

CREATE TABLE `tbl_mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `nim_mahasiswa` varchar(50) NOT NULL,
  `nama_mahasiswa` varchar(50) NOT NULL,
  `prodi_mahasiswa` varchar(20) NOT NULL,
  `Matkul` enum('analisis_algoritma','pemograman_linear','pemograman_web','Teknologi_multimedia','testing_implementasi_perangkat_lunak','Teori_Bahasa_otomata') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_mahasiswa`
--

INSERT INTO `tbl_mahasiswa` (`id_mahasiswa`, `nim_mahasiswa`, `nama_mahasiswa`, `prodi_mahasiswa`, `Matkul`) VALUES
(3, '1901010020', 'dewa ngakan klaci ariandana', 'ilkom', ''),
(4, '1901010020', 'dewa ngakan klaci ariandana', 'ilkom', 'testing_implementasi_perangkat_lunak'),
(5, '1901010020', 'dewa ngakan klaci ariandana', 'ilkom', 'Teknologi_multimedia'),
(6, '1901010020', 'dewa ngakan klaci ariandana', 'ilkom', 'analisis_algoritma'),
(7, '1901010020', 'dewa ngakan klaci ariandana', 'ilkom', ''),
(8, '1901010020', 'dewa ngakan klaci ariandana', 'ilkom', ''),
(9, '1901010020', 'dewa ngakan klaci ariandana', 'ilkom', 'pemograman_linear');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_matkul`
--

CREATE TABLE `tbl_matkul` (
  `id_matkul` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `sks` int(11) NOT NULL,
  `dosen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_matkul`
--

INSERT INTO `tbl_matkul` (`id_matkul`, `nama`, `sks`, `dosen`) VALUES
(1, 'analisis algoritma', 3, 'DR.DYAH SUSILOWATO, M.KOM.'),
(2, 'PEMOGRAMAN LINIER', 3, 'AHMAD, M.Pd'),
(3, 'PEMOGRAMAN WEB', 2, 'PAHRUL IRFAN S.KOM, M.KOM'),
(4, 'TEKNOLOGI MULTIMEDIA', 2, 'DIAN SYAHFITRI'),
(5, 'TESTING IMPLEMENTASI PERANGKAT LUNAK', 2, 'APRIANI, M.KOM'),
(6, 'TEORI BAHASA OTOMATA', 3, 'AHMAD ADIL S.Kom M.Sc');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hak_akses` enum('admin','mahasiswa') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `nama`, `username`, `password`, `hak_akses`) VALUES
(1, 'admin', 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `tbl_matkul`
--
ALTER TABLE `tbl_matkul`
  ADD PRIMARY KEY (`id_matkul`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_matkul`
--
ALTER TABLE `tbl_matkul`
  MODIFY `id_matkul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
