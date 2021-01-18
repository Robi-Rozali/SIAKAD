-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2021 at 06:49 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siakad`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgllahir` date NOT NULL,
  `telp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `tempat`, `tgllahir`, `telp`, `alamat`, `username`, `password`, `gambar`, `created_at`, `updated_at`) VALUES
(2, 'Robi Rozali', 'Bandung', '2020-12-21', '08655675', 'Sumedang', 'admin', '$2y$10$pqKzq3uM46UAYEJ7aXI2DeIOC.jW1FpvW/BxZfd/4jxE/8SCPQk.S', 'sayur_1608555567.PNG', '2020-12-21 05:59:27', '2020-12-21 05:59:27');

-- --------------------------------------------------------

--
-- Table structure for table `biaya`
--

CREATE TABLE `biaya` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tahun` int(11) NOT NULL,
  `jurusan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendaftaran` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upp` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usb` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sks` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ppspp` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `almamater` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `biaya`
--

INSERT INTO `biaya` (`id`, `tahun`, `jurusan`, `semester`, `pendaftaran`, `upp`, `usb`, `sks`, `ppspp`, `almamater`, `created_at`, `updated_at`) VALUES
(2, 2017, 'Sistem_Informasi', '1', '200000', '1500000', '2000000', '90000', '200000', '150000', '2020-11-24 00:46:45', '2021-01-15 23:22:10');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nidn` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namadosen` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgllahir` date NOT NULL,
  `telp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keilmuan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `nidn`, `namadosen`, `alamat`, `tempat`, `tgllahir`, `telp`, `email`, `keilmuan`, `password`, `gambar`, `created_at`, `updated_at`) VALUES
(4, 'NID007', 'Atep ruhiat', 'Sumedang kota', 'Sumedang', '2020-11-28', '08655675777', 'Contoh@gmail.com', 'Basis Data', '202cb962ac59075b964b07152d234b70', 'stmik_1610774400.png', '2020-11-27 23:17:19', '2021-01-15 22:20:00'),
(7, '0420106666', 'Iyat Ratna Komala', 'Indramayu', 'Indramayu', '2021-01-16', '08123231221', 'Contoh@gmail.com', 'Struktur Sistem Informasi', '$2y$10$5U.jNoj82pluJW4nTWRYyeGK2VOe.kzpHsYyjICZI8OT5DBdm8wJe', 'stmik_1610774507.png', '2021-01-15 22:21:47', '2021-01-15 22:21:47');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matakuliah` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ruang` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hari` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namadosen` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` year(4) NOT NULL,
  `semester` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sks` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `kode`, `matakuliah`, `kelas`, `ruang`, `hari`, `jam`, `namadosen`, `jurusan`, `tahun`, `semester`, `sks`, `created_at`, `updated_at`) VALUES
(27, 'FT2001', 'Kalkulus', 'A', 'LT.1Ruang 1', 'Senin', '10.00-13.00', 'Atep ruhiat', 'Sistem_Informasi', 2017, '1', 3, '2021-01-15 22:26:05', '2021-01-15 22:26:05'),
(28, 'FT3001', 'Pengantar Teknologi Informasi', 'A', 'LT.1Ruang 2', 'Senin', '13.00-14.00', 'Iyat Ratna Komala', 'Sistem_Informasi', 2017, '1', 3, '2021-01-15 22:26:05', '2021-01-15 22:26:05'),
(29, 'FT3007', 'Pengantar Sistem Informasi', 'A', 'LT.1Ruang 1', 'Senin', '14.00-15.00', 'Atep ruhiat', 'Sistem_Informasi', 2017, '1', 3, '2021-01-15 22:26:05', '2021-01-15 22:26:05'),
(30, 'FT3101', 'Paket Program Aplikasi', 'A', 'LT.2Ruang 5', 'Selasa', '08.00-10.00', 'Iyat Ratna Komala', 'Sistem_Informasi', 2017, '1', 2, '2021-01-15 22:26:05', '2021-01-15 22:26:05'),
(31, 'SI1016', 'Teori Organisasi Umum', 'A', 'LT.1Ruang 3', 'Selasa', '11.00-12.00', 'Iyat Ratna Komala', 'Sistem_Informasi', 2017, '1', 2, '2021-01-15 22:26:05', '2021-01-15 22:26:05'),
(32, 'ST1003', 'Ilmu Sosial dan Budaya Dasar', 'A', 'LT.1Ruang 3', 'Kamis', '09.00-13.00', 'Iyat Ratna Komala', 'Sistem_Informasi', 2017, '1', 2, '2021-01-15 22:26:05', '2021-01-15 22:26:05'),
(33, 'ST1015', 'Pengantar Manajemen', 'A', 'LT.1Ruang 2', 'Kamis', '14.00-16.00', 'Atep ruhiat', 'Sistem_Informasi', 2017, '1', 2, '2021-01-15 22:26:05', '2021-01-15 22:26:05'),
(34, 'ST1017', 'Pendidikan Pancasila', 'A', 'LT.2Ruang 5', 'Kamis', '10.00-12.00', 'Atep ruhiat', 'Sistem_Informasi', 2017, '1', 2, '2021-01-15 22:26:05', '2021-01-15 22:26:05'),
(35, 'ST1106', 'Bahasa Inggris I (Grammer)', 'A', 'LT.1Ruang 1', 'Sabtu', '08.00-09.00', 'Atep ruhiat', 'Sistem_Informasi', 2017, '1', 2, '2021-01-15 22:26:05', '2021-01-15 22:26:05'),
(36, 'FT2001', 'Kalkulus', 'B', 'LT.1Ruang 1', 'Senin', '11.00-13.00', 'Atep ruhiat', 'Sistem_Informasi', 2017, '1', 3, '2021-01-15 22:30:41', '2021-01-15 22:30:41'),
(37, 'FT3001', 'Pengantar Teknologi Informasi', 'B', 'LT.1Ruang 2', 'Senin', '13.00-14.00', 'Atep ruhiat', 'Sistem_Informasi', 2017, '1', 3, '2021-01-15 22:30:41', '2021-01-15 22:30:41'),
(38, 'FT3007', 'Pengantar Sistem Informasi', 'B', 'LT.1Ruang 3', 'Senin', '14.00-15.00', 'Atep ruhiat', 'Sistem_Informasi', 2017, '1', 3, '2021-01-15 22:30:41', '2021-01-15 22:30:41'),
(39, 'FT3101', 'Paket Program Aplikasi', 'B', 'LT.1Ruang 3', 'Selasa', '08.00-10.00', 'Iyat Ratna Komala', 'Sistem_Informasi', 2017, '1', 2, '2021-01-15 22:30:41', '2021-01-15 22:30:41'),
(40, 'SI1016', 'Teori Organisasi Umum', 'B', 'LT.1Ruang 1', 'Selasa', '11.00-12.00', 'Atep ruhiat', 'Sistem_Informasi', 2017, '1', 2, '2021-01-15 22:30:41', '2021-01-15 22:30:41'),
(41, 'ST1003', 'Ilmu Sosial dan Budaya Dasar', 'B', 'LT.1Ruang 3', 'Selasa', '09.00-13.00', 'Iyat Ratna Komala', 'Sistem_Informasi', 2017, '1', 2, '2021-01-15 22:30:41', '2021-01-15 22:30:41'),
(42, 'ST1015', 'Pengantar Manajemen', 'B', 'LT.1Ruang 3', 'Sabtu', '14.00-16.00', 'Iyat Ratna Komala', 'Sistem_Informasi', 2017, '1', 2, '2021-01-15 22:30:41', '2021-01-15 22:30:41'),
(43, 'ST1017', 'Pendidikan Pancasila', 'B', 'LT.2Ruang 4', 'Sabtu', '10.00-12.00', 'Iyat Ratna Komala', 'Sistem_Informasi', 2017, '1', 2, '2021-01-15 22:30:41', '2021-01-15 22:30:41'),
(44, 'ST1106', 'Bahasa Inggris I (Grammer)', 'B', 'LT.1Ruang 1', 'Sabtu', '08.00-09.00', 'Atep ruhiat', 'Sistem_Informasi', 2017, '1', 2, '2021-01-15 22:30:41', '2021-01-15 22:30:41'),
(45, 'FT3005', 'Jaringan Komputer', 'A', 'LT.1Ruang 1', 'Senin', '10.00-13.00', 'Atep ruhiat', 'Sistem_Informasi', 2017, '2', 3, '2021-01-15 22:33:03', '2021-01-15 22:33:03'),
(46, 'SI1004', 'Algoritma & Dasar Pemrograman', 'A', 'LT.1Ruang 2', 'Senin', '13.00-14.00', 'Iyat Ratna Komala', 'Sistem_Informasi', 2017, '2', 2, '2021-01-15 22:33:03', '2021-01-15 22:33:03'),
(47, 'SI1025', 'Proses Bisnis Organisasi', 'A', 'LT.1Ruang 2', 'Rabu', '14.00-15.00', 'Atep ruhiat', 'Sistem_Informasi', 2017, '2', 2, '2021-01-15 22:33:03', '2021-01-15 22:33:03'),
(48, 'SI4001', 'Bahasa Inggris II (Conversation)', 'A', 'LT.2Ruang 5', 'Selasa', '08.00-10.00', 'Atep ruhiat', 'Sistem_Informasi', 2017, '2', 2, '2021-01-15 22:33:03', '2021-01-15 22:33:03'),
(49, 'SI4002', 'Aljabar Linear', 'A', 'LT.1Ruang 2', 'Rabu', '11.00-12.00', 'Atep ruhiat', 'Sistem_Informasi', 2017, '2', 2, '2021-01-15 22:33:03', '2021-01-15 22:33:03'),
(50, 'SI4012', 'Organisasi & Arsitektur Komputer', 'A', 'LT.1Ruang 1', 'Rabu', '09.00-13.00', 'Atep ruhiat', 'Sistem_Informasi', 2017, '2', 2, '2021-01-15 22:33:03', '2021-01-15 22:33:03'),
(51, 'SI4045', 'Pengetahuan Bisnis', 'A', 'LT.2Ruang 4', 'Kamis', '14.00-16.00', 'Iyat Ratna Komala', 'Sistem_Informasi', 2017, '2', 3, '2021-01-15 22:33:04', '2021-01-15 22:33:04'),
(52, 'SI4046', 'Pengantar Basis data', 'A', 'LT.1Ruang 1', 'Kamis', '10.00-12.00', 'Atep ruhiat', 'Sistem_Informasi', 2017, '2', 3, '2021-01-15 22:33:04', '2021-01-15 22:33:04'),
(53, 'ST1021', 'Pendidikan Agama', 'A', 'LT.1Ruang 2', 'Kamis', '08.00-09.00', 'Atep ruhiat', 'Sistem_Informasi', 2017, '2', 2, '2021-01-15 22:33:04', '2021-01-15 22:33:04'),
(54, 'FT3005', 'Jaringan Komputer', 'B', 'LT.1Ruang 1', 'Selasa', '10.00-13.00', 'Atep ruhiat', 'Sistem_Informasi', 2017, '2', 3, '2021-01-15 22:34:55', '2021-01-15 22:34:55'),
(55, 'SI1004', 'Algoritma & Dasar Pemrograman', 'B', 'LT.1Ruang 2', 'Senin', '13.00-14.00', 'Iyat Ratna Komala', 'Sistem_Informasi', 2017, '2', 2, '2021-01-15 22:34:55', '2021-01-15 22:34:55'),
(56, 'SI1025', 'Proses Bisnis Organisasi', 'B', 'LT.2Ruang 4', 'Senin', '14.00-15.00', 'Atep ruhiat', 'Sistem_Informasi', 2017, '2', 2, '2021-01-15 22:34:55', '2021-01-15 22:34:55'),
(57, 'SI4001', 'Bahasa Inggris II (Conversation)', 'B', 'LT.1Ruang 1', 'Selasa', '08.00-10.00', 'Atep ruhiat', 'Sistem_Informasi', 2017, '2', 2, '2021-01-15 22:34:55', '2021-01-15 22:34:55'),
(58, 'SI4002', 'Aljabar Linear', 'B', 'LT.1Ruang 1', 'Selasa', '11.00-12.00', 'Iyat Ratna Komala', 'Sistem_Informasi', 2017, '2', 2, '2021-01-15 22:34:55', '2021-01-15 22:34:55'),
(59, 'SI4012', 'Organisasi & Arsitektur Komputer', 'B', 'LT.2Ruang 4', 'Selasa', '09.00-13.00', 'Iyat Ratna Komala', 'Sistem_Informasi', 2017, '2', 2, '2021-01-15 22:34:56', '2021-01-15 22:34:56'),
(60, 'SI4045', 'Pengetahuan Bisnis', 'B', 'LT.1Ruang 2', 'Sabtu', '14.00-16.00', 'Atep ruhiat', 'Sistem_Informasi', 2017, '2', 3, '2021-01-15 22:34:56', '2021-01-15 22:34:56'),
(61, 'ST1021', 'Pendidikan Agama', 'B', 'LT.1Ruang 2', 'Kamis', '10.00-12.00', 'Atep ruhiat', 'Sistem_Informasi', 2017, '2', 2, '2021-01-15 22:34:56', '2021-01-15 22:34:56'),
(71, 'FT3004', 'Sistem Operasi', 'A', 'LT.1Ruang 1', 'Rabu', '10.00-13.00', 'Atep ruhiat', 'Sistem_Informasi', 2017, '3', 3, '2021-01-15 22:40:26', '2021-01-15 22:40:26'),
(72, 'FT3010', 'Pemrograman Visual', 'A', 'LT.1Ruang 2', 'Senin', '13.00-14.00', 'Atep ruhiat', 'Sistem_Informasi', 2017, '3', 3, '2021-01-15 22:40:26', '2021-01-15 22:40:26'),
(73, 'SI1066', 'Ilmu Alamiah Visual', 'A', 'LT.1Ruang 2', 'Selasa', '14.00-15.00', 'Atep ruhiat', 'Sistem_Informasi', 2017, '3', 2, '2021-01-15 22:40:26', '2021-01-15 22:40:26'),
(74, 'SI4007', 'Perencanaan & Strategi Sistem Informasi', 'A', 'LT.1Ruang 2', 'Selasa', '08.00-10.00', 'Atep ruhiat', 'Sistem_Informasi', 2017, '3', 3, '2021-01-15 22:40:26', '2021-01-15 22:40:26'),
(75, 'SI4009', 'Struktur Data', 'A', 'LT.2Ruang 4', 'Selasa', '11.00-12.00', 'Atep ruhiat', 'Sistem_Informasi', 2017, '3', 3, '2021-01-15 22:40:26', '2021-01-15 22:40:26'),
(76, 'SI4010', 'Statistika dan Probabilitas', 'A', 'LT.1Ruang 2', 'Senin', '09.00-13.00', 'Atep ruhiat', 'Sistem_Informasi', 2017, '3', 2, '2021-01-15 22:40:26', '2021-01-15 22:40:26'),
(77, 'SI4011', 'Perancangan Basis Data', 'A', 'LT.2Ruang 5', 'Sabtu', '14.00-16.00', 'Atep ruhiat', 'Sistem_Informasi', 2017, '3', 3, '2021-01-15 22:40:26', '2021-01-15 22:40:26'),
(78, 'ST1008', 'Kewirausahaan', 'A', 'LT.2Ruang 4', 'Sabtu', '10.00-12.00', 'Atep ruhiat', 'Sistem_Informasi', 2017, '3', 2, '2021-01-15 22:40:26', '2021-01-15 22:40:26'),
(79, 'FT2004', 'Teknik Riset Operasi', 'A', 'LT.1Ruang 3', 'Senin', '10.00-13.00', 'Atep ruhiat', 'Sistem_Informasi', 2017, '4', 2, '2021-01-15 22:42:50', '2021-01-15 22:42:50'),
(80, 'FT3008', 'Interaksi Manusia & Komputer', 'A', 'LT.1Ruang 1', 'Senin', '13.00-14.00', 'Atep ruhiat', 'Sistem_Informasi', 2017, '4', 3, '2021-01-15 22:42:50', '2021-01-15 22:42:50'),
(81, 'SI4003', 'Akutansi dan Keuangan', 'A', 'LT.1Ruang 2', 'Senin', '14.00-15.00', 'Iyat Ratna Komala', 'Sistem_Informasi', 2017, '4', 2, '2021-01-15 22:42:50', '2021-01-15 22:42:50'),
(82, 'SI4013', 'Sistem Basis Data', 'A', 'LT.1Ruang 1', 'Selasa', '08.00-10.00', 'Atep ruhiat', 'Sistem_Informasi', 2017, '4', 4, '2021-01-15 22:42:50', '2021-01-15 22:42:50'),
(83, 'SI4014', 'Desain Aristektur WEB', 'A', 'LT.1Ruang 1', 'Selasa', '11.00-12.00', 'Iyat Ratna Komala', 'Sistem_Informasi', 2017, '4', 2, '2021-01-15 22:42:50', '2021-01-15 22:42:50'),
(84, 'SI4015', 'Rekayasa Sistem Informasi', 'A', 'LT.1Ruang 3', 'Selasa', '09.00-13.00', 'Atep ruhiat', 'Sistem_Informasi', 2017, '4', 3, '2021-01-15 22:42:50', '2021-01-15 22:42:50'),
(85, 'SI4016', 'Matematika Diskrit', 'A', 'LT.2Ruang 5', 'Rabu', '14.00-16.00', 'Atep ruhiat', 'Sistem_Informasi', 2017, '4', 2, '2021-01-15 22:42:50', '2021-01-15 22:42:50'),
(86, 'ST1012', 'Interpersonal Skill', 'A', 'LT.2Ruang 4', 'Rabu', '10.00-12.00', 'Iyat Ratna Komala', 'Sistem_Informasi', 2017, '4', 3, '2021-01-15 22:42:51', '2021-01-15 22:42:51'),
(87, 'FT2004', 'Teknik Riset Operasi', 'B', 'LT.1Ruang 1', 'Sabtu', '11.00-13.00', 'Atep ruhiat', 'Sistem_Informasi', 2017, '4', 2, '2021-01-15 22:44:11', '2021-01-15 22:44:11'),
(88, 'FT3008', 'Interaksi Manusia & Komputer', 'B', 'LT.1Ruang 1', 'Sabtu', '13.00-14.00', 'Atep ruhiat', 'Sistem_Informasi', 2017, '4', 3, '2021-01-15 22:44:11', '2021-01-15 22:44:11'),
(89, 'SI4003', 'Akutansi dan Keuangan', 'B', 'LT.1Ruang 1', 'Sabtu', '14.00-15.00', 'Iyat Ratna Komala', 'Sistem_Informasi', 2017, '4', 2, '2021-01-15 22:44:11', '2021-01-15 22:44:11'),
(90, 'SI4013', 'Sistem Basis Data', 'B', 'LT.1Ruang 3', 'Rabu', '08.00-10.00', 'Iyat Ratna Komala', 'Sistem_Informasi', 2017, '4', 4, '2021-01-15 22:44:11', '2021-01-15 22:44:11'),
(91, 'SI4014', 'Desain Aristektur WEB', 'B', 'LT.1Ruang 3', 'Rabu', '11.00-12.00', 'Iyat Ratna Komala', 'Sistem_Informasi', 2017, '4', 2, '2021-01-15 22:44:11', '2021-01-15 22:44:11'),
(92, 'SI4015', 'Rekayasa Sistem Informasi', 'B', 'LT.1Ruang 2', 'Rabu', '09.00-13.00', 'Iyat Ratna Komala', 'Sistem_Informasi', 2017, '4', 3, '2021-01-15 22:44:11', '2021-01-15 22:44:11'),
(93, 'SI4016', 'Matematika Diskrit', 'B', 'LT.2Ruang 5', 'Kamis', '14.00-16.00', 'Iyat Ratna Komala', 'Sistem_Informasi', 2017, '4', 2, '2021-01-15 22:44:11', '2021-01-15 22:44:11'),
(94, 'ST1012', 'Interpersonal Skill', 'B', 'LT.2Ruang 5', 'Kamis', '10.00-12.00', 'Iyat Ratna Komala', 'Sistem_Informasi', 2017, '4', 3, '2021-01-15 22:44:11', '2021-01-15 22:44:11'),
(95, 'FT3010', 'Pemrograman Visual', 'A', 'LT.2Ruang 4', 'Selasa', '10.00-13.00', 'Atep ruhiat', 'Sistem_Informasi', 2017, '3', 3, '2021-01-16 01:29:40', '2021-01-16 01:29:40');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kelas` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kuota` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `kelas`, `kuota`, `created_at`, `updated_at`) VALUES
(1, 'A', '40', '2020-12-15 08:41:19', '2020-12-15 08:41:19'),
(2, 'B', '40', '2020-12-18 07:22:39', '2020-12-18 07:22:39'),
(3, 'C', '40', '2021-01-15 22:08:05', '2021-01-15 22:08:05'),
(4, 'D', '40', '2021-01-15 22:08:10', '2021-01-15 22:08:10'),
(5, 'E', '40', '2021-01-15 22:08:24', '2021-01-15 22:08:24'),
(6, 'F', '40', '2021-01-16 02:26:03', '2021-01-16 02:26:03');

-- --------------------------------------------------------

--
-- Table structure for table `keuangan`
--

CREATE TABLE `keuangan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `keuangan`
--

INSERT INTO `keuangan` (`id`, `nama`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Robi Rozali', 'keuangan', '$2y$10$.3HiOs7qh41iyYMdPoiSH.bviysWCy6dSohnC4K4fPww39m4HTYeC', '2020-12-21 07:10:52', '2021-01-15 23:21:24');

-- --------------------------------------------------------

--
-- Table structure for table `kurikulum`
--

CREATE TABLE `kurikulum` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matakuliah` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sks` int(11) NOT NULL,
  `semester` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Tahun` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kurikulum`
--

INSERT INTO `kurikulum` (`id`, `kode`, `matakuliah`, `sks`, `semester`, `jurusan`, `created_at`, `updated_at`, `Tahun`) VALUES
(26, 'FT2001', 'Kalkulus', 3, '1', 'Sistem_Informasi', '2021-01-15 22:04:10', '2021-01-15 22:04:10', 2017),
(27, 'FT3001', 'Pengantar Teknologi Informasi', 3, '1', 'Sistem_Informasi', '2021-01-15 22:04:10', '2021-01-15 22:04:10', 2017),
(28, 'FT3007', 'Pengantar Sistem Informasi', 3, '1', 'Sistem_Informasi', '2021-01-15 22:04:10', '2021-01-15 22:04:10', 2017),
(29, 'FT3101', 'Paket Program Aplikasi', 2, '1', 'Sistem_Informasi', '2021-01-15 22:04:10', '2021-01-15 22:04:10', 2017),
(30, 'SI1016', 'Teori Organisasi Umum', 2, '1', 'Sistem_Informasi', '2021-01-15 22:04:10', '2021-01-15 22:04:10', 2017),
(31, 'ST1003', 'Ilmu Sosial dan Budaya Dasar', 2, '1', 'Sistem_Informasi', '2021-01-15 22:04:10', '2021-01-15 22:04:10', 2017),
(32, 'ST1015', 'Pengantar Manajemen', 2, '1', 'Sistem_Informasi', '2021-01-15 22:04:10', '2021-01-15 22:04:10', 2017),
(33, 'ST1017', 'Pendidikan Pancasila', 2, '1', 'Sistem_Informasi', '2021-01-15 22:04:10', '2021-01-15 22:04:10', 2017),
(34, 'ST1106', 'Bahasa Inggris I (Grammer)', 2, '1', 'Sistem_Informasi', '2021-01-15 22:04:10', '2021-01-15 22:04:10', 2017),
(35, 'FT3005', 'Jaringan Komputer', 3, '2', 'Sistem_Informasi', '2021-01-15 22:04:10', '2021-01-15 22:04:10', 2017),
(36, 'SI1004', 'Algoritma & Dasar Pemrograman', 2, '2', 'Sistem_Informasi', '2021-01-15 22:04:10', '2021-01-15 22:04:10', 2017),
(37, 'SI1025', 'Proses Bisnis Organisasi', 2, '2', 'Sistem_Informasi', '2021-01-15 22:04:10', '2021-01-15 22:04:10', 2017),
(38, 'SI4001', 'Bahasa Inggris II (Conversation)', 2, '2', 'Sistem_Informasi', '2021-01-15 22:04:10', '2021-01-15 22:04:10', 2017),
(39, 'SI4002', 'Aljabar Linear', 2, '2', 'Sistem_Informasi', '2021-01-15 22:04:10', '2021-01-15 22:04:10', 2017),
(40, 'SI4012', 'Organisasi & Arsitektur Komputer', 2, '2', 'Sistem_Informasi', '2021-01-15 22:04:10', '2021-01-15 22:04:10', 2017),
(41, 'SI4045', 'Pengetahuan Bisnis', 3, '2', 'Sistem_Informasi', '2021-01-15 22:04:10', '2021-01-15 22:04:10', 2017),
(42, 'SI4046', 'Pengantar Basis data', 3, '2', 'Sistem_Informasi', '2021-01-15 22:04:10', '2021-01-15 22:04:10', 2017),
(43, 'ST1021', 'Pendidikan Agama', 2, '2', 'Sistem_Informasi', '2021-01-15 22:04:10', '2021-01-15 22:04:10', 2017),
(44, 'FT3004', 'Sistem Operasi', 3, '3', 'Sistem_Informasi', '2021-01-15 22:04:10', '2021-01-15 22:04:10', 2017),
(45, 'FT3010', 'Pemrograman Visual', 3, '3', 'Sistem_Informasi', '2021-01-15 22:04:10', '2021-01-15 22:04:10', 2017),
(46, 'SI1066', 'Ilmu Alamiah Visual', 2, '3', 'Sistem_Informasi', '2021-01-15 22:04:10', '2021-01-15 22:04:10', 2017),
(47, 'SI4007', 'Perencanaan & Strategi Sistem Informasi', 3, '3', 'Sistem_Informasi', '2021-01-15 22:04:10', '2021-01-15 22:04:10', 2017),
(48, 'SI4009', 'Struktur Data', 3, '3', 'Sistem_Informasi', '2021-01-15 22:04:10', '2021-01-15 22:04:10', 2017),
(49, 'SI4010', 'Statistika dan Probabilitas', 2, '3', 'Sistem_Informasi', '2021-01-15 22:04:10', '2021-01-15 22:04:10', 2017),
(50, 'SI4011', 'Perancangan Basis Data', 3, '3', 'Sistem_Informasi', '2021-01-15 22:04:10', '2021-01-15 22:04:10', 2017),
(51, 'ST1008', 'Kewirausahaan', 2, '3', 'Sistem_Informasi', '2021-01-15 22:04:10', '2021-01-15 22:04:10', 2017),
(52, 'FT2004', 'Teknik Riset Operasi', 2, '4', 'Sistem_Informasi', '2021-01-15 22:04:10', '2021-01-15 22:04:10', 2017),
(53, 'FT3008', 'Interaksi Manusia & Komputer', 3, '4', 'Sistem_Informasi', '2021-01-15 22:04:10', '2021-01-15 22:04:10', 2017),
(54, 'SI4003', 'Akutansi dan Keuangan', 2, '4', 'Sistem_Informasi', '2021-01-15 22:04:10', '2021-01-15 22:04:10', 2017),
(55, 'SI4013', 'Sistem Basis Data', 4, '4', 'Sistem_Informasi', '2021-01-15 22:04:10', '2021-01-15 22:04:10', 2017),
(56, 'SI4014', 'Desain Aristektur WEB', 2, '4', 'Sistem_Informasi', '2021-01-15 22:04:10', '2021-01-15 22:04:10', 2017),
(57, 'SI4015', 'Rekayasa Sistem Informasi', 3, '4', 'Sistem_Informasi', '2021-01-15 22:04:10', '2021-01-15 22:04:10', 2017),
(58, 'SI4016', 'Matematika Diskrit', 2, '4', 'Sistem_Informasi', '2021-01-15 22:04:10', '2021-01-15 22:04:10', 2017),
(59, 'ST1012', 'Interpersonal Skill', 3, '4', 'Sistem_Informasi', '2021-01-15 22:04:10', '2021-01-15 22:04:10', 2017);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nim` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgllahir` date NOT NULL,
  `telp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama`, `jenis_kelamin`, `jurusan`, `alamat`, `email`, `username`, `password`, `tempat`, `tgllahir`, `telp`, `gambar`, `tahun`, `created_at`, `updated_at`) VALUES
(1, 'A3.1700040', 'Robi Rozali', 'Laki-laki', 'Sistem_Informasi', 'Dusun Cihonje 04/07 Desa Gunasari Sumedang', 'A3.1700040@mhs.stmik-sumedang.ac.id', 'A31700040', '$2y$10$vIrEpAZBdcyXz2xMnqLYF.umft.6e15z1EUVu84Z9Q3htsFAgZW0W', 'Bandung', '2020-11-22', '0865567567', 'Lenovo_A1000_IMG_20180120_145021_1610773909.jpg', '2017', '2020-11-22 03:32:13', '2021-01-15 22:11:49'),
(11, 'A3.1700032', 'Riki Gunawan', 'Laki-laki', 'Sistem_Informasi', 'Kasomalang Subang', 'A3.1700032@mhs.stmik-sumedang.ac.id', 'a31700032', '$2y$10$hGyBub/Dy8Deb1LffrQZWOyG7VbOd6TQP59fH1vTht4MBErne0koe', 'Subang', '1998-12-02', '08655675777', 'stmik_1610789066.png', '2017', '2021-01-16 02:24:26', '2021-01-16 02:24:57');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_11_19_082209_create_ruang_table', 1),
(5, '2020_11_20_142918_create_jurusan_table', 2),
(6, '2020_11_20_143638_create_prodi_table', 2),
(7, '2020_11_20_143926_create_kurikulum_table', 2),
(8, '2020_11_20_144136_create_perwalian_table', 2),
(9, '2020_11_20_144337_create_pembayaran_table', 2),
(10, '2020_11_20_144630_create_pilihkelas_table', 2),
(11, '2020_11_20_144930_create_jadwal_table', 2),
(12, '2020_11_20_145156_create_dosen_table', 2),
(13, '2020_11_20_145512_create_biaya_table', 2),
(14, '2020_11_20_145709_create_mahasiswa_table', 2),
(15, '2020_11_20_150000_create_nilai_table', 2),
(16, '2020_11_25_071156_edit_field_table_kurikulum', 3),
(17, '2020_11_25_071756_add_tahun_to_kurikulum', 3),
(18, '2020_11_25_073915_add_email_to_dosen', 4),
(19, '2020_11_25_091253_create__admin_table', 5),
(20, '2020_11_26_104205_add__jurusan__to__jadwal_table', 6),
(21, '2020_12_03_145549_delete_nama_from_prodi', 7),
(22, '2020_12_13_162020_add_jenis_kelamin_to_mahasiswa', 8),
(23, '2020_12_14_163555_add_jurusan_to_perwalian', 9),
(24, '2020_12_14_164432_delete_pengambilan_from_perwalian', 10),
(25, '2020_12_15_151424_create_kelas_table', 11),
(26, '2020_12_19_093218_add_semester_to_nilai', 12),
(27, '2020_12_21_133154_add_username_to_prodi', 13),
(28, '2020_12_21_133449_create_keuangan_table', 13),
(29, '2020_12_21_170722_add_username_to_mahasiswa', 14),
(30, '2020_12_22_071321_add_tahun_di_mahasiswa', 15),
(31, '2020_12_24_045603_tambah_semester_ke_biaya', 15),
(32, '2020_12_24_045743_tambah_semester_ke_pembayaran', 15),
(33, '2021_01_09_091239_add_atas_to_perwalian', 16),
(34, '2021_01_09_091355_add_status_smt_to_nilai', 16),
(35, '2021_01_11_082216_add_semester_to_pilihkelas', 17),
(36, '2021_01_14_071357_add_id_jadwal_to_pilihkelas', 18);

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nim` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_smt` int(11) NOT NULL,
  `tahun` year(4) NOT NULL,
  `kode` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matakuliah` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sks` int(11) NOT NULL,
  `kehadiran` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tugas` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uts` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uas` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grade` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id`, `nim`, `nama`, `jurusan`, `semester`, `status_smt`, `tahun`, `kode`, `matakuliah`, `sks`, `kehadiran`, `tugas`, `uts`, `uas`, `jumlah`, `grade`, `created_at`, `updated_at`) VALUES
(51, 'A3.1700040', 'Robi Rozali', 'Sistem_Informasi', '1', 1, 2017, 'FT2001', 'Kalkulus', 3, '100', '100', '100', '100', '100', 'A', '2021-01-16 01:32:54', '2021-01-16 01:32:54'),
(52, 'A3.1700040', 'Robi Rozali', 'Sistem_Informasi', '1', 1, 2017, 'FT3001', 'Pengantar Teknologi Informasi', 3, '80', '70', '80', '80', '67', 'A', '2021-01-16 01:32:54', '2021-01-16 01:33:49'),
(53, 'A3.1700040', 'Robi Rozali', 'Sistem_Informasi', '1', 1, 2017, 'FT3007', 'Pengantar Sistem Informasi', 3, '100', '100', '100', '100', '100', 'A', '2021-01-16 01:32:54', '2021-01-16 01:32:54'),
(54, 'A3.1700040', 'Robi Rozali', 'Sistem_Informasi', '1', 1, 2017, 'FT3101', 'Paket Program Aplikasi', 2, '100', '100', '100', '100', '100', 'A', '2021-01-16 01:32:54', '2021-01-16 01:32:54'),
(55, 'A3.1700040', 'Robi Rozali', 'Sistem_Informasi', '1', 1, 2017, 'SI1016', 'Teori Organisasi Umum', 2, '100', '100', '100', '100', '100', 'A', '2021-01-16 01:32:54', '2021-01-16 01:32:54'),
(56, 'A3.1700040', 'Robi Rozali', 'Sistem_Informasi', '1', 1, 2017, 'ST1003', 'Ilmu Sosial dan Budaya Dasar', 2, '80', '70', '60', '80', '67', 'B', '2021-01-16 01:32:54', '2021-01-16 01:32:54'),
(57, 'A3.1700040', 'Robi Rozali', 'Sistem_Informasi', '1', 1, 2017, 'ST1015', 'Pengantar Manajemen', 2, '100', '100', '100', '100', '100', 'A', '2021-01-16 01:32:54', '2021-01-16 01:32:54'),
(58, 'A3.1700040', 'Robi Rozali', 'Sistem_Informasi', '1', 1, 2017, 'ST1017', 'Pendidikan Pancasila', 2, '100', '100', '100', '100', '100', 'A', '2021-01-16 01:32:54', '2021-01-16 01:32:54'),
(59, 'A3.1700040', 'Robi Rozali', 'Sistem_Informasi', '1', 1, 2017, 'ST1106', 'Bahasa Inggris I (Grammer)', 2, '100', '100', '100', '100', '100', 'A', '2021-01-16 01:32:54', '2021-01-16 01:32:54');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tgltransaksi` datetime NOT NULL,
  `nim` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenisbayar` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `tgltransaksi`, `nim`, `nama`, `jurusan`, `semester`, `jenisbayar`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, '2021-01-16 13:28:03', 'A3.1700040', 'Robi Rozali', 'Sistem_Informasi', '1', 'SKS', '1890000', NULL, NULL),
(2, '2021-01-16 13:28:03', 'A3.1700040', 'Robi Rozali', 'Sistem_Informasi', '1', 'UPP', '1500000', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `perwalian`
--

CREATE TABLE `perwalian` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nim` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matakuliah` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sks` int(11) NOT NULL,
  `atas` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `perwalian`
--

INSERT INTO `perwalian` (`id`, `nim`, `nama`, `jurusan`, `semester`, `kode`, `matakuliah`, `sks`, `atas`, `created_at`, `updated_at`) VALUES
(50, 'A3.1700040', 'Robi Rozali', 'Sistem_Informasi', '1', 'FT2001', 'Kalkulus', 3, 0, '2021-01-16 01:31:05', '2021-01-16 01:31:05'),
(51, 'A3.1700040', 'Robi Rozali', 'Sistem_Informasi', '1', 'FT3001', 'Pengantar Teknologi Informasi', 3, 0, '2021-01-16 01:31:05', '2021-01-16 01:31:05'),
(52, 'A3.1700040', 'Robi Rozali', 'Sistem_Informasi', '1', 'FT3007', 'Pengantar Sistem Informasi', 3, 0, '2021-01-16 01:31:05', '2021-01-16 01:31:05'),
(53, 'A3.1700040', 'Robi Rozali', 'Sistem_Informasi', '1', 'FT3101', 'Paket Program Aplikasi', 2, 0, '2021-01-16 01:31:05', '2021-01-16 01:31:05'),
(54, 'A3.1700040', 'Robi Rozali', 'Sistem_Informasi', '1', 'SI1016', 'Teori Organisasi Umum', 2, 0, '2021-01-16 01:31:05', '2021-01-16 01:31:05'),
(55, 'A3.1700040', 'Robi Rozali', 'Sistem_Informasi', '1', 'ST1003', 'Ilmu Sosial dan Budaya Dasar', 2, 0, '2021-01-16 01:31:05', '2021-01-16 01:31:05'),
(56, 'A3.1700040', 'Robi Rozali', 'Sistem_Informasi', '1', 'ST1015', 'Pengantar Manajemen', 2, 0, '2021-01-16 01:31:05', '2021-01-16 01:31:05'),
(57, 'A3.1700040', 'Robi Rozali', 'Sistem_Informasi', '1', 'ST1017', 'Pendidikan Pancasila', 2, 0, '2021-01-16 01:31:05', '2021-01-16 01:31:05'),
(58, 'A3.1700040', 'Robi Rozali', 'Sistem_Informasi', '1', 'ST1106', 'Bahasa Inggris I (Grammer)', 2, 0, '2021-01-16 01:31:05', '2021-01-16 01:31:05'),
(59, 'A3.1700040', 'Robi Rozali', 'Sistem_Informasi', '2', 'FT3005', 'Jaringan Komputer', 3, 0, '2021-01-16 01:36:39', '2021-01-16 01:36:39'),
(60, 'A3.1700040', 'Robi Rozali', 'Sistem_Informasi', '2', 'SI1004', 'Algoritma & Dasar Pemrograman', 2, 0, '2021-01-16 01:36:39', '2021-01-16 01:36:39'),
(61, 'A3.1700040', 'Robi Rozali', 'Sistem_Informasi', '2', 'SI1025', 'Proses Bisnis Organisasi', 2, 0, '2021-01-16 01:36:39', '2021-01-16 01:36:39'),
(62, 'A3.1700040', 'Robi Rozali', 'Sistem_Informasi', '2', 'SI4001', 'Bahasa Inggris II (Conversation)', 2, 0, '2021-01-16 01:36:39', '2021-01-16 01:36:39'),
(63, 'A3.1700040', 'Robi Rozali', 'Sistem_Informasi', '2', 'SI4002', 'Aljabar Linear', 2, 0, '2021-01-16 01:36:39', '2021-01-16 01:36:39'),
(64, 'A3.1700040', 'Robi Rozali', 'Sistem_Informasi', '2', 'SI4012', 'Organisasi & Arsitektur Komputer', 2, 0, '2021-01-16 01:36:39', '2021-01-16 01:36:39'),
(65, 'A3.1700040', 'Robi Rozali', 'Sistem_Informasi', '2', 'SI4045', 'Pengetahuan Bisnis', 3, 0, '2021-01-16 01:36:39', '2021-01-16 01:36:39'),
(66, 'A3.1700040', 'Robi Rozali', 'Sistem_Informasi', '2', 'SI4046', 'Pengantar Basis data', 3, 0, '2021-01-16 01:36:39', '2021-01-16 01:36:39'),
(67, 'A3.1700040', 'Robi Rozali', 'Sistem_Informasi', '2', 'ST1021', 'Pendidikan Agama', 2, 0, '2021-01-16 01:36:39', '2021-01-16 01:36:39'),
(68, 'A3.1700040', 'Robi Rozali', 'Sistem_Informasi', '4', 'FT2004', 'Teknik Riset Operasi', 2, 0, '2021-01-16 01:36:39', '2021-01-16 01:36:39');

-- --------------------------------------------------------

--
-- Table structure for table `pilihkelas`
--

CREATE TABLE `pilihkelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nim` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` year(4) NOT NULL,
  `kode` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matakuliah` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` int(11) NOT NULL,
  `kelas` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ruang` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hari` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pilihkelas`
--

INSERT INTO `pilihkelas` (`id`, `nim`, `nama`, `jurusan`, `tahun`, `kode`, `matakuliah`, `semester`, `kelas`, `ruang`, `hari`, `jam`, `id_jadwal`, `created_at`, `updated_at`) VALUES
(44, 'A3.1700040', 'Robi Rozali', 'Sistem Informasi', 2017, 'FT2001', 'Kalkulus', 1, 'A', 'LT.1Ruang 1', 'Senin', '10.00-13.00', 27, '2021-01-16 01:32:09', '2021-01-16 01:32:09'),
(45, 'A3.1700040', 'Robi Rozali', 'Sistem Informasi', 2017, 'FT3001', 'Pengantar Teknologi Informasi', 1, 'A', 'LT.1Ruang 2', 'Senin', '13.00-14.00', 28, '2021-01-16 01:32:09', '2021-01-16 01:32:09'),
(46, 'A3.1700040', 'Robi Rozali', 'Sistem Informasi', 2017, 'FT3007', 'Pengantar Sistem Informasi', 1, 'B', 'LT.1Ruang 3', 'Senin', '14.00-15.00', 38, '2021-01-16 01:32:09', '2021-01-16 01:32:09'),
(47, 'A3.1700040', 'Robi Rozali', 'Sistem Informasi', 2017, 'FT3101', 'Paket Program Aplikasi', 1, 'A', 'LT.2Ruang 5', 'Selasa', '08.00-10.00', 30, '2021-01-16 01:32:09', '2021-01-16 01:32:09'),
(48, 'A3.1700040', 'Robi Rozali', 'Sistem Informasi', 2017, 'SI1016', 'Teori Organisasi Umum', 1, 'A', 'LT.1Ruang 3', 'Selasa', '11.00-12.00', 31, '2021-01-16 01:32:09', '2021-01-16 01:32:09'),
(49, 'A3.1700040', 'Robi Rozali', 'Sistem Informasi', 2017, 'ST1003', 'Ilmu Sosial dan Budaya Dasar', 1, 'B', 'LT.1Ruang 3', 'Selasa', '09.00-13.00', 41, '2021-01-16 01:32:09', '2021-01-16 01:32:09'),
(50, 'A3.1700040', 'Robi Rozali', 'Sistem Informasi', 2017, 'ST1015', 'Pengantar Manajemen', 1, 'A', 'LT.1Ruang 2', 'Kamis', '14.00-16.00', 33, '2021-01-16 01:32:09', '2021-01-16 01:32:09'),
(51, 'A3.1700040', 'Robi Rozali', 'Sistem Informasi', 2017, 'ST1017', 'Pendidikan Pancasila', 1, 'A', 'LT.2Ruang 5', 'Kamis', '10.00-12.00', 34, '2021-01-16 01:32:09', '2021-01-16 01:32:09'),
(52, 'A3.1700040', 'Robi Rozali', 'Sistem Informasi', 2017, 'ST1106', 'Bahasa Inggris I (Grammer)', 1, 'A', 'LT.1Ruang 1', 'Sabtu', '08.00-09.00', 35, '2021-01-16 01:32:09', '2021-01-16 01:32:09');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prodi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ketua` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nidn` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id`, `prodi`, `ketua`, `nidn`, `gambar`, `username`, `password`, `created_at`, `updated_at`) VALUES
(2, 'Manajemen_Informatika', 'Fathoni Mahardika', '0420106666', 'stmik_1610774135.png', 'prodiMI', '$2y$10$YqdWQPt/jSvXQ5GxjczRKuhR3FDT9BwG6PgfDdTHN4A/pgesec8rW', '2020-11-22 00:25:28', '2021-01-15 22:17:17'),
(3, 'Teknik_Informatika', 'Fidi Supriadi', '0420106666', 'stmik_1610774189.png', 'proditi', '$2y$10$iZ0hc1fMcuZGf3R7wdTQsubHEpIx/JMAmTWmQETpEJjFd.4n8htiO', '2020-11-22 02:15:54', '2021-01-15 22:17:35'),
(4, 'Sistem_Informasi', 'Robi Rozali', 'ads21123', 'stmik_1606302856.png', 'prodi', '$2y$10$AkhiCI/r00gzZQb2eqAPj.YIO6BHLLrQMs9FKhCRfTGDQudCwEFke', '2020-11-25 04:14:16', '2021-01-15 22:17:51');

-- --------------------------------------------------------

--
-- Table structure for table `ruang`
--

CREATE TABLE `ruang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `lantai` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ruang`
--

INSERT INTO `ruang` (`id`, `nama`, `kapasitas`, `lantai`, `created_at`, `updated_at`) VALUES
(1, 'Ruang 1', 40, 'LT.1', '2020-11-22 06:59:37', '2020-11-22 06:59:37'),
(3, 'Ruang 2', 40, 'LT.1', '2021-01-03 08:42:20', '2021-01-03 08:42:20'),
(4, 'Ruang 3', 40, 'LT.1', '2021-01-03 08:42:42', '2021-01-03 08:42:42'),
(5, 'Ruang 4', 40, 'LT.2', '2021-01-03 08:42:53', '2021-01-03 08:42:53'),
(6, 'Ruang 5', 40, 'LT.2', '2021-01-03 08:43:03', '2021-01-03 08:43:03'),
(7, 'Ruang 8', 40, 'LT.2', '2021-01-16 02:25:50', '2021-01-16 02:25:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `biaya`
--
ALTER TABLE `biaya`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keuangan`
--
ALTER TABLE `keuangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kurikulum`
--
ALTER TABLE `kurikulum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perwalian`
--
ALTER TABLE `perwalian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pilihkelas`
--
ALTER TABLE `pilihkelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `biaya`
--
ALTER TABLE `biaya`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `keuangan`
--
ALTER TABLE `keuangan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kurikulum`
--
ALTER TABLE `kurikulum`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `perwalian`
--
ALTER TABLE `perwalian`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `pilihkelas`
--
ALTER TABLE `pilihkelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ruang`
--
ALTER TABLE `ruang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
