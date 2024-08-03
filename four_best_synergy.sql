-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2024 at 01:25 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `four_best_synergy`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi_karyawan`
--

CREATE TABLE `absensi_karyawan` (
  `id` int(11) NOT NULL,
  `id_pegawai` int(11) DEFAULT NULL,
  `tanggal_absen` date DEFAULT NULL,
  `jam_masuk` time DEFAULT NULL,
  `jam_keluar` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `absensi_karyawan`
--

INSERT INTO `absensi_karyawan` (`id`, `id_pegawai`, `tanggal_absen`, `jam_masuk`, `jam_keluar`) VALUES
(1, 29, '2024-08-08', '17:32:00', '22:46:00'),
(2, 29, '2024-07-30', '21:46:00', '22:46:00');

-- --------------------------------------------------------

--
-- Table structure for table `master_gaji_pegawai`
--

CREATE TABLE `master_gaji_pegawai` (
  `id` int(11) NOT NULL,
  `id_pegawai` int(11) DEFAULT NULL,
  `gaji_pokok` decimal(15,2) DEFAULT NULL,
  `denda_keterlambatan` decimal(15,2) DEFAULT NULL,
  `pemotongan_gaji_harian` decimal(15,2) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `master_gaji_pegawai`
--

INSERT INTO `master_gaji_pegawai` (`id`, `id_pegawai`, `gaji_pokok`, `denda_keterlambatan`, `pemotongan_gaji_harian`, `created_at`, `updated_at`) VALUES
(12, 28, 5555.00, 5555.00, 5555.00, '2024-08-03 08:42:43', '2024-08-03 08:42:43');

-- --------------------------------------------------------

--
-- Table structure for table `master_hari_kerja`
--

CREATE TABLE `master_hari_kerja` (
  `id` int(10) NOT NULL,
  `hari` varchar(20) NOT NULL,
  `jam_masuk` time NOT NULL,
  `jam_keluar` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `master_hari_kerja`
--

INSERT INTO `master_hari_kerja` (`id`, `hari`, `jam_masuk`, `jam_keluar`) VALUES
(1, 'Senin', '08:30:00', '17:30:00'),
(2, 'Selasa', '08:00:00', '17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `master_pegawai`
--

CREATE TABLE `master_pegawai` (
  `id_pegawai` int(10) NOT NULL,
  `nama_pegawai` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telepon_pegawai` varchar(40) NOT NULL,
  `email_pegawai` varchar(50) NOT NULL,
  `tanggal_gabung` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `master_pegawai`
--

INSERT INTO `master_pegawai` (`id_pegawai`, `nama_pegawai`, `alamat`, `telepon_pegawai`, `email_pegawai`, `tanggal_gabung`, `created_at`, `updated_at`) VALUES
(28, 'Rian Tito', 'JL.CIkoko Barat IV RT006 RW004', '085710421023', 'riantito73@gmail.com', '2024-08-03', '2024-08-03 07:29:59', '2024-08-03 07:29:59'),
(29, 'Rian Tito2', 'JL.CIkoko Barat IV RT006 RW004', '085710421021', 'riantito155@gmail.com', '2024-08-08', '2024-08-03 08:40:39', '2024-08-03 08:40:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `telepon`, `email`, `password`, `created_at`, `update_at`) VALUES
(2, 'Rian Tito', '085710421023', 'riantito73@gmail.com', '$2y$10$ozJuk3qGPZYBkTbKLDS6N.mtPrue7mWI.esq.9xEf/cajH6p3Dn7S', '2024-08-03 03:32:37', '2024-08-03 03:32:37'),
(3, 'Rian Tito2', '085710421022', 'riantito155@gmail.com', '$2y$10$n7Lrv6ryOxYd5fGB/G/G0.xqF/RJiXcZjQcNue0wHEBgw/pMAUgLK', '2024-08-03 03:52:06', '2024-08-03 03:52:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi_karyawan`
--
ALTER TABLE `absensi_karyawan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indexes for table `master_gaji_pegawai`
--
ALTER TABLE `master_gaji_pegawai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pegawai_id` (`id_pegawai`);

--
-- Indexes for table `master_hari_kerja`
--
ALTER TABLE `master_hari_kerja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_pegawai`
--
ALTER TABLE `master_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi_karyawan`
--
ALTER TABLE `absensi_karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `master_gaji_pegawai`
--
ALTER TABLE `master_gaji_pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `master_hari_kerja`
--
ALTER TABLE `master_hari_kerja`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `master_pegawai`
--
ALTER TABLE `master_pegawai`
  MODIFY `id_pegawai` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absensi_karyawan`
--
ALTER TABLE `absensi_karyawan`
  ADD CONSTRAINT `absensi_karyawan_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `master_pegawai` (`id_pegawai`);

--
-- Constraints for table `master_gaji_pegawai`
--
ALTER TABLE `master_gaji_pegawai`
  ADD CONSTRAINT `master_gaji_pegawai_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `master_pegawai` (`id_pegawai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
