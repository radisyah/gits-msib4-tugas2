-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 24, 2023 at 03:11 PM
-- Server version: 5.7.24
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_profil`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_prestasi`
--

CREATE TABLE `tb_prestasi` (
  `id` int(11) NOT NULL,
  `prestasi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_prestasi`
--

INSERT INTO `tb_prestasi` (`id`, `prestasi`) VALUES
(1, 'Lolos Seleksi untuk Publish Jurnal dengan akreditasi SINTA (Science and Technology). Dengan Judul:\r\n1. Pengukuran Vaaditas Aplikasi Akademik Siswa Berbasis Website menggunakan Metode R-Table dan Coehn s Cappa.\r\n2. Estimasi Pengukuran Perangkat Lunak menggunakan Matrik Function Point Analysis Studi Kasus Aplikasi Akademik Siswa Berbasis Website.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_projek`
--

CREATE TABLE `tb_projek` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `ket` text,
  `link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_projek`
--

INSERT INTO `tb_projek` (`id`, `judul`, `ket`, `link`) VALUES
(1, 'STUDI KASUS APLIKASI E-ARSIP BERBASIS WEBSITE', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'https://github.com/radisyah'),
(4, 'STUDI KASUS SISTEM INFORMASI GEOGRAFIS RUMAH SAKIT BERBASIS WEBSITE', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'https://github.com/radisyah'),
(7, 'STUDI KASUS APLIKASI PANTAUKORONA BERBASIS WEBSITE', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'https://github.com/radisyah'),
(8, 'STUDI KASUS APLIKASI E-CAPOL BERBASIS WEBSITE', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'https://github.com/radisyah'),
(9, 'STUDI KASUS APLIKASI E-KASIR BERBASIS WEBSITE', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', 'https://github.com/radisyah'),
(10, 'STUDI KASUS APLIKASI E-KASIR BERBASIS WEBSITE', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', 'https://github.com/radisyah');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tentangsaya`
--

CREATE TABLE `tb_tentangsaya` (
  `id_tentangSaya` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `alamat` varchar(35) NOT NULL,
  `no_telepon` varchar(35) NOT NULL,
  `ket` text NOT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tentangsaya`
--

INSERT INTO `tb_tentangsaya` (`id_tentangSaya`, `nama`, `email`, `alamat`, `no_telepon`, `ket`, `foto`) VALUES
(4, 'Rahmat Dimas Syahputra', 'syahputradimas965@gmail.com', 'JL. SIMOLAWANG KALIMIR NO. 44/A', '083857959431', 'Saya Rahmat Dimas Syahputra, Mahasiswa Informatika Universitas Pembangunan Nasional â€œVeteranâ€ Jawa Timur 2020 (Semester 6 ke Semester 7). Memiliki kemampuan pemrograman website serta pernah mengikuti penulisan jurnal bersama dosen pengampu dan juga memiliki kemampuan editing dan manipulasi foto. Saya memiliki minat berkarir sebagai Full Stack Web Developer.', 'foto.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_prestasi`
--
ALTER TABLE `tb_prestasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_projek`
--
ALTER TABLE `tb_projek`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_tentangsaya`
--
ALTER TABLE `tb_tentangsaya`
  ADD PRIMARY KEY (`id_tentangSaya`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_prestasi`
--
ALTER TABLE `tb_prestasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_projek`
--
ALTER TABLE `tb_projek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_tentangsaya`
--
ALTER TABLE `tb_tentangsaya`
  MODIFY `id_tentangSaya` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
