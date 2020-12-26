-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2020 at 10:30 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

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
(1, 2020, 'Teknik_Informatika', '1', '200000', '1500000', '2000000', '90000', '200000', '150000', NULL, NULL);

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

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Teknik_Informatika', NULL, NULL);

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
(1, 'FT1002', 'B.indonesia', 10, '1', 'Teknik_Informatika', NULL, NULL, 2020),
(2, 'FT1003', 'B.Inggris', 11, '1', 'Teknik_Informatika', NULL, NULL, 2020),
(3, 'IF3004', 'Kerja Praktek', 10, '2', 'Teknik_Informatika', NULL, NULL, 2020),
(4, 'IF3006', 'Skripsi', 11, '2', 'Teknik_Informatika', NULL, NULL, 2020),
(5, 'IF3007', 'Wirausaha', 10, '3', 'Teknik_Informatika', NULL, NULL, 2020),
(6, 'IF3008', 'naon wae', 11, '3', 'Teknik_Informatika', NULL, NULL, 2020),
(7, 'IF3009', 'PMBBBBB', 10, '4', 'Teknik_Informatika', NULL, NULL, 2020),
(8, 'IF3010', 'Teuing', 11, '4', 'Teknik_Informatika', NULL, NULL, 2020),
(9, 'IF3011', 'B.sunda', 10, '5', 'Teknik_Informatika', NULL, NULL, 2020),
(10, 'IF3012', 'B.Francis', 11, '5', 'Teknik_Informatika', NULL, NULL, 2020),
(11, 'IF3013', 'B.Wakanda', 10, '6', 'Teknik_Informatika', NULL, NULL, 2020),
(12, 'IF3014', 'Wakanda forever', 11, '6', 'Teknik_Informatika', NULL, NULL, 2020),
(13, 'IF3015', 'Ucok', 10, '7', 'Teknik_Informatika', NULL, NULL, 2020),
(14, 'IF3016', 'CJ', 11, '7', 'Teknik_Informatika', NULL, NULL, 2020),
(15, 'IF3018', 'skp', 10, '8', 'Teknik_Informatika', NULL, NULL, 2020),
(16, 'IF3018', 'USELESS', 11, '8', 'Teknik_Informatika', NULL, NULL, 2020);

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
(1, 'A2.1700081', 'Nunu Indra Nugraha', 'Laki-laki', 'Teknik_Informatika', 'mjl', 'A2.1700081@mhs.srmik-sumedang.ac.id', 'A21700081', '$2y$10$I.U5hfQx1x7sqwhUWVqAxe.5YTMmCJcdudpFSAWCh/U.0fOl9sFum', 'Majalengka jbr2', '2020-06-02', '08723456789', 'B_1608818407.jpg', '2020', '2020-12-21 21:01:20', '2020-12-24 07:00:08');

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
(5, '2020_11_20_142918_create_jurusan_table', 1),
(6, '2020_11_20_143638_create_prodi_table', 1),
(7, '2020_11_20_143926_create_kurikulum_table', 1),
(8, '2020_11_20_144136_create_perwalian_table', 1),
(9, '2020_11_20_144337_create_pembayaran_table', 1),
(10, '2020_11_20_144630_create_pilihkelas_table', 1),
(11, '2020_11_20_144930_create_jadwal_table', 1),
(12, '2020_11_20_145156_create_dosen_table', 1),
(13, '2020_11_20_145512_create_biaya_table', 1),
(14, '2020_11_20_145709_create_mahasiswa_table', 1),
(15, '2020_11_20_150000_create_nilai_table', 1),
(16, '2020_11_25_071156_edit_field_table_kurikulum', 1),
(17, '2020_11_25_071756_add_tahun_to_kurikulum', 1),
(18, '2020_11_25_073915_add_email_to_dosen', 1),
(19, '2020_11_25_091253_create__admin_table', 1),
(20, '2020_11_26_104205_add__jurusan__to__jadwal_table', 1),
(21, '2020_12_03_145549_delete_nama_from_prodi', 1),
(22, '2020_12_13_162020_add_jenis_kelamin_to_mahasiswa', 1),
(23, '2020_12_14_163555_add_jurusan_to_perwalian', 1),
(24, '2020_12_14_164432_delete_pengambilan_from_perwalian', 1),
(25, '2020_12_15_151424_create_kelas_table', 2),
(26, '2020_12_19_093218_add_semester_to_nilai', 2),
(27, '2020_12_21_133154_add_username_to_prodi', 3),
(28, '2020_12_21_133449_create_keuangan_table', 3),
(29, '2020_12_21_170722_add_username_to_mahasiswa', 3),
(30, '2020_12_22_071321_add_tahun_di_mahasiswa', 4),
(31, '2020_12_24_045603_tambah_semester_ke_biaya', 5),
(32, '2020_12_24_045743_tambah_semester_ke_pembayaran', 5);

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

INSERT INTO `nilai` (`id`, `nim`, `nama`, `jurusan`, `semester`, `tahun`, `kode`, `matakuliah`, `sks`, `kehadiran`, `tugas`, `uts`, `uas`, `jumlah`, `grade`, `created_at`, `updated_at`) VALUES
(7, 'A2.1700081', 'Nunu Indra Nugraha', 'Teknik_Informatika', '1', 2020, 'FT1002', 'B.indonesia', 10, '100', '100', '100', '100', '100', 'B', NULL, NULL),
(8, 'A2.1700081', 'Nunu Indra Nugraha', 'Teknik_Informatika', '1', 2020, 'FT1003', 'B.Inggris', 11, '100', '100', '100', '100', '100', 'A', NULL, NULL),
(9, 'A2.1700081', 'Nunu Indra Nugraha', 'Teknik_Informatika', '2', 2020, 'IF3004', 'Kerja Praktek', 10, '100', '100', '100', '100', '100', 'B', NULL, NULL),
(10, 'A2.1700081', 'Nunu Indra Nugraha', 'Teknik_Informatika', '2', 2020, 'IF3006', 'Skripsi', 11, '100', '100', '100', '100', '100', 'A', NULL, NULL),
(11, 'A2.1700081', 'Nunu Indra Nugraha', 'Teknik_Informatika', '3', 2020, 'IF3007', 'Wirausaha', 10, '100', '100', '100', '100', '100', 'A', NULL, NULL),
(12, 'A2.1700081', 'Nunu Indra Nugraha', 'Teknik_Informatika', '3', 2020, 'IF3008', 'naon wae', 11, '100', '100', '100', '100', '100', 'A', NULL, NULL),
(13, 'A2.1700081', 'Nunu Indra Nugraha', 'Teknik_Informatika', '4', 2020, 'IF3009', 'PMBBBBB', 10, '100', '100', '100', '100', '100', 'A', NULL, NULL),
(14, 'A2.1700081', 'Nunu Indra Nugraha', 'Teknik_Informatika', '4', 2020, 'IF3010', 'Teuing', 11, '100', '100', '100', '100', '100', 'A', NULL, NULL),
(15, 'A2.1700081', 'Nunu Indra Nugraha', 'Teknik_Informatika', '5', 2020, 'IF3011', 'B.Sunda', 10, '100', '100', '100', '100', '100', 'A', NULL, NULL),
(16, 'A2.1700081', 'Nunu Indra Nugraha', 'Teknik_Informatika', '5', 2020, 'IF3012', 'B.Francis', 11, '100', '100', '100', '100', '100', 'A', NULL, NULL),
(17, 'A2.1700081', 'Nunu Indra Nugraha', 'Teknik_Informatika', '6', 2020, 'IF3013', 'B.Wakanda', 10, '100', '100', '100', '100', '100', 'A', NULL, NULL),
(18, 'A2.1700081', 'Nunu Indra Nugraha', 'Teknik_Informatika', '6', 2020, 'IF3014', 'Wakanda Forever', 11, '100', '100', '100', '100', '100', 'A', NULL, NULL);

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
(1, '2020-12-09 14:09:49', 'A2.1700081', 'Nunu Indra Nugraha', 'Teknik_Informatika', '1', 'SKS', '1890000', NULL, NULL),
(2, '2020-12-09 14:09:49', 'A2.1700081', 'Nunu Indra Nugraha', 'Teknik_Informatika', '1', 'UPP', '1500000', NULL, NULL),
(3, '2020-12-09 14:09:49', 'A2.1700081', 'Nunu Indra Nugraha', 'Teknik_Informatika', '1', 'PPSPP', '100000', NULL, NULL),
(4, '2020-12-09 14:09:49', 'A2.1700081', 'Nunu Indra Nugraha', 'Teknik_Informatika', '2', 'SKS', '180000', NULL, NULL),
(5, '2020-12-09 14:09:49', 'A2.1700081', 'Nunu Indra Nugraha', 'Teknik_Informatika', '3', 'SKS', '180000', NULL, NULL);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `perwalian`
--

INSERT INTO `perwalian` (`id`, `nim`, `nama`, `jurusan`, `semester`, `kode`, `matakuliah`, `sks`, `created_at`, `updated_at`) VALUES
(7, 'A2.1700081', 'Nunu Indra Nugraha', 'Teknik_Informatika', '1', 'FT1002', 'B.indonesia', 10, '2020-12-25 20:23:49', '2020-12-25 20:23:49'),
(8, 'A2.1700081', 'Nunu Indra Nugraha', 'Teknik_Informatika', '1', 'FT1003', 'B.Inggris', 11, '2020-12-25 20:23:49', '2020-12-25 20:23:49'),
(9, 'A2.1700081', 'Nunu Indra Nugraha', 'Teknik_Informatika', '2', 'IF3004', 'Kerja Praktek', 10, '2020-12-25 21:07:05', '2020-12-25 21:07:05'),
(10, 'A2.1700081', 'Nunu Indra Nugraha', 'Teknik_Informatika', '2', 'IF3006', 'Skripsi', 11, '2020-12-25 21:07:05', '2020-12-25 21:07:05'),
(11, 'A2.1700081', 'Nunu Indra Nugraha', 'Teknik_Informatika', '3', 'IF3007', 'Wirausaha', 10, '2020-12-26 00:06:36', '2020-12-26 00:06:36'),
(12, 'A2.1700081', 'Nunu Indra Nugraha', 'Teknik_Informatika', '3', 'IF3008', 'naon wae', 11, '2020-12-26 00:06:36', '2020-12-26 00:06:36'),
(13, 'A2.1700081', 'Nunu Indra Nugraha', 'Teknik_Informatika', '1', 'FT1002', 'B.indonesia', 10, '2020-12-26 00:06:37', '2020-12-26 00:06:37'),
(14, 'A2.1700081', 'Nunu Indra Nugraha', 'Teknik_Informatika', '4', 'IF3009', 'PMBBBBB', 10, '2020-12-26 00:17:18', '2020-12-26 00:17:18'),
(15, 'A2.1700081', 'Nunu Indra Nugraha', 'Teknik_Informatika', '4', 'IF3010', 'Teuing', 11, '2020-12-26 00:17:18', '2020-12-26 00:17:18'),
(16, 'A2.1700081', 'Nunu Indra Nugraha', 'Teknik_Informatika', '2', 'IF3004', 'Kerja Praktek', 10, '2020-12-26 00:17:18', '2020-12-26 00:17:18'),
(19, 'A2.1700081', 'Nunu Indra Nugraha', 'Teknik_Informatika', '5', 'IF3011', 'B.sunda', 10, '2020-12-26 01:22:02', '2020-12-26 01:22:02'),
(20, 'A2.1700081', 'Nunu Indra Nugraha', 'Teknik_Informatika', '5', 'IF3012', 'B.Francis', 11, '2020-12-26 01:22:02', '2020-12-26 01:22:02'),
(21, 'A2.1700081', 'Nunu Indra Nugraha', 'Teknik_Informatika', '6', 'IF3013', 'B.Wakanda', 10, '2020-12-26 01:25:17', '2020-12-26 01:25:17'),
(22, 'A2.1700081', 'Nunu Indra Nugraha', 'Teknik_Informatika', '6', 'IF3014', 'Wakanda forever', 11, '2020-12-26 01:25:17', '2020-12-26 01:25:17'),
(23, 'A2.1700081', 'Nunu Indra Nugraha', 'Teknik_Informatika', '7', 'IF3015', 'Ucok', 10, '2020-12-26 01:54:24', '2020-12-26 01:54:24'),
(24, 'A2.1700081', 'Nunu Indra Nugraha', 'Teknik_Informatika', '7', 'IF3016', 'CJ', 11, '2020-12-26 01:54:24', '2020-12-26 01:54:24');

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
  `kelas` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ruang` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hari` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(2, 'Teknik_Informatika', 'Nunu', '001', 'A_1608956161.jpg', 'nunu', '$2y$10$4pDJzcJXtWwOydClHCrl0eFyOXEHefu/de.OSI6Pzu/9YKWvmQthi', '2020-12-25 21:16:02', '2020-12-25 21:16:02');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `biaya`
--
ALTER TABLE `biaya`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `keuangan`
--
ALTER TABLE `keuangan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kurikulum`
--
ALTER TABLE `kurikulum`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `perwalian`
--
ALTER TABLE `perwalian`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `pilihkelas`
--
ALTER TABLE `pilihkelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ruang`
--
ALTER TABLE `ruang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
