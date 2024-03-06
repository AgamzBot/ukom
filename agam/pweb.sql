-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2024 at 11:13 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `agama`
--

CREATE TABLE `agama` (
  `kd_agama` int(50) NOT NULL,
  `nama_agama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bagi_kelas`
--

CREATE TABLE `bagi_kelas` (
  `kelas` int(100) NOT NULL,
  `tahun` int(50) NOT NULL,
  `NIS` int(100) NOT NULL,
  `no_presensi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `NIP` int(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` int(50) NOT NULL,
  `agama` int(50) NOT NULL,
  `marital` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nama_pt` varchar(100) NOT NULL,
  `ijazah` varchar(100) NOT NULL,
  `lulus` varchar(100) NOT NULL,
  `golongan` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `kelas` int(100) NOT NULL,
  `tahun` int(100) NOT NULL,
  `mapel` int(50) NOT NULL,
  `hari` varchar(50) NOT NULL,
  `jam` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `Kd_kelas` int(100) NOT NULL,
  `nama_kelas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `Kd_mapel` int(100) NOT NULL,
  `nama_mapel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `tahun` int(100) NOT NULL,
  `kelas` int(100) NOT NULL,
  `NIS` int(100) NOT NULL,
  `Semester` varchar(50) NOT NULL,
  `nil_b_indo` int(150) NOT NULL,
  `nil_matematika` int(50) NOT NULL,
  `nil_agama` int(60) NOT NULL,
  `nil_ipa` int(50) NOT NULL,
  `nil_pkn` int(50) NOT NULL,
  `nil_ips` int(50) NOT NULL,
  `nil_sbk` int(50) NOT NULL,
  `nil_penjas` int(50) NOT NULL,
  `nil_b_inggris` int(50) NOT NULL,
  `nil_mulok` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `NIS` int(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `agama` int(50) NOT NULL,
  `ayah` varchar(50) NOT NULL,
  `ibu` varchar(50) NOT NULL,
  `pekerjaan_ayah` varchar(50) NOT NULL,
  `pekerjaan_ibu` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tahun_ajaran`
--

CREATE TABLE `tahun_ajaran` (
  `id_tahunajaran` int(100) NOT NULL,
  `tahun` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`kd_agama`);

--
-- Indexes for table `bagi_kelas`
--
ALTER TABLE `bagi_kelas`
  ADD PRIMARY KEY (`kelas`,`tahun`,`NIS`),
  ADD KEY `tahun` (`tahun`),
  ADD KEY `NIS` (`NIS`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`NIP`,`agama`),
  ADD KEY `agama` (`agama`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`kelas`,`tahun`,`mapel`),
  ADD KEY `mapel` (`mapel`),
  ADD KEY `tahun` (`tahun`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`Kd_kelas`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`Kd_mapel`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`tahun`,`kelas`,`NIS`),
  ADD KEY `kelas` (`kelas`),
  ADD KEY `NIS` (`NIS`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`NIS`,`agama`),
  ADD KEY `agama` (`agama`);

--
-- Indexes for table `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  ADD PRIMARY KEY (`id_tahunajaran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agama`
--
ALTER TABLE `agama`
  MODIFY `kd_agama` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `NIP` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `kelas` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `Kd_kelas` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `Kd_mapel` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `NIS` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  MODIFY `id_tahunajaran` int(100) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bagi_kelas`
--
ALTER TABLE `bagi_kelas`
  ADD CONSTRAINT `bagi_kelas_ibfk_1` FOREIGN KEY (`tahun`) REFERENCES `tahun_ajaran` (`id_tahunajaran`),
  ADD CONSTRAINT `bagi_kelas_ibfk_2` FOREIGN KEY (`NIS`) REFERENCES `siswa` (`NIS`),
  ADD CONSTRAINT `bagi_kelas_ibfk_3` FOREIGN KEY (`kelas`) REFERENCES `kelas` (`Kd_kelas`);

--
-- Constraints for table `guru`
--
ALTER TABLE `guru`
  ADD CONSTRAINT `guru_ibfk_1` FOREIGN KEY (`agama`) REFERENCES `agama` (`kd_agama`);

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_1` FOREIGN KEY (`kelas`) REFERENCES `kelas` (`Kd_kelas`),
  ADD CONSTRAINT `jadwal_ibfk_2` FOREIGN KEY (`mapel`) REFERENCES `mapel` (`Kd_mapel`),
  ADD CONSTRAINT `jadwal_ibfk_3` FOREIGN KEY (`tahun`) REFERENCES `tahun_ajaran` (`id_tahunajaran`);

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`tahun`) REFERENCES `tahun_ajaran` (`id_tahunajaran`),
  ADD CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`kelas`) REFERENCES `kelas` (`Kd_kelas`),
  ADD CONSTRAINT `nilai_ibfk_3` FOREIGN KEY (`NIS`) REFERENCES `siswa` (`NIS`);

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`agama`) REFERENCES `agama` (`kd_agama`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
