-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 23, 2021 at 06:32 PM
-- Server version: 5.6.50-log
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo-kelaskita`
--

-- --------------------------------------------------------

--
-- Table structure for table `absens`
--

CREATE TABLE IF NOT EXISTS `absens` (
  `id` bigint(20) unsigned NOT NULL,
  `kelas_mapel_id` int(11) NOT NULL,
  `siswa_id` int(11) NOT NULL,
  `pertemuan` int(11) NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `absen_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `absens`
--

INSERT INTO `absens` (`id`, `kelas_mapel_id`, `siswa_id`, `pertemuan`, `status`, `absen_at`, `created_at`, `updated_at`) VALUES
(3, 11, 6, 1, NULL, NULL, '2021-05-30 20:49:00', '2021-05-30 20:49:00'),
(4, 11, 6, 2, NULL, NULL, '2021-05-30 22:22:53', '2021-05-30 22:22:53'),
(5, 12, 6, 1, NULL, NULL, '2021-05-30 23:24:54', '2021-05-30 23:24:54'),
(6, 12, 6, 2, NULL, NULL, '2021-05-30 23:27:36', '2021-05-30 23:27:36'),
(7, 11, 6, 3, NULL, NULL, '2021-05-30 23:28:54', '2021-05-30 23:28:54'),
(8, 32, 11, 1, NULL, NULL, '2021-06-22 00:04:01', '2021-06-22 00:04:01'),
(9, 33, 11, 1, NULL, NULL, '2021-06-22 00:06:44', '2021-06-22 00:06:44');

-- --------------------------------------------------------

--
-- Table structure for table `block_kelas_mapels`
--

CREATE TABLE IF NOT EXISTS `block_kelas_mapels` (
  `id` bigint(20) unsigned NOT NULL,
  `kelas_mapel_id` int(11) NOT NULL,
  `daftar_kelas_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE IF NOT EXISTS `config` (
  `id` bigint(20) NOT NULL,
  `var` varchar(255) NOT NULL,
  `value` longtext NOT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`id`, `var`, `value`, `desc`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'APP_NAME', 'Kelas Belajar', 'application name', '2021-01-07 06:55:37', '2021-01-07 06:55:37', NULL),
(2, 'APP_VERSION', '1.0.0', 'aplication version', '2021-01-07 06:55:37', '2021-01-07 06:55:37', NULL),
(3, 'LOGIN_SIGNATURE', '_!KELAS!_', 'signature for login account', '2021-01-07 06:55:37', '2021-01-07 06:55:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `daftar_kelas`
--

CREATE TABLE IF NOT EXISTS `daftar_kelas` (
  `id` bigint(20) unsigned NOT NULL,
  `user_id` int(11) NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `rombel_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `daftar_kelas`
--

INSERT INTO `daftar_kelas` (`id`, `user_id`, `kelas_id`, `rombel_id`, `created_at`, `updated_at`) VALUES
(1, 4, 2, 1, '2021-04-19 08:46:59', '2021-04-19 08:46:59'),
(2, 6, 2, 1, '2021-04-21 00:34:51', '2021-04-21 00:34:51'),
(3, 4, 5, 1, '2021-05-27 16:19:32', '2021-05-27 19:02:01'),
(4, 7, 5, 1, '2021-05-27 16:19:37', '2021-05-27 18:45:12'),
(5, 7, 5, 1, '2021-05-27 16:23:32', '2021-05-27 18:46:11'),
(6, 6, 5, 1, '2021-05-27 16:23:43', '2021-05-27 18:46:06'),
(7, 7, 4, 1, '2021-05-27 16:55:55', '2021-05-27 16:55:55'),
(8, 6, 4, 1, '2021-05-27 17:22:44', '2021-05-27 17:22:44'),
(9, 13, 7, 1, '2021-06-21 23:53:22', '2021-06-21 23:53:22'),
(10, 8, 7, 1, '2021-06-21 23:53:54', '2021-06-21 23:53:54'),
(11, 19, 7, 1, '2021-06-21 23:59:17', '2021-06-21 23:59:17');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jurnal_gurus`
--

CREATE TABLE IF NOT EXISTS `jurnal_gurus` (
  `id` bigint(20) unsigned NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `waktu` date NOT NULL,
  `hapus` int(11) NOT NULL DEFAULT '0',
  `pertemuan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `materi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jurnal_gurus`
--

INSERT INTO `jurnal_gurus` (`id`, `kelas_id`, `waktu`, `hapus`, `pertemuan`, `materi`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-02-10', 1, 'pertermuan 4', 'dqwd', '2021-02-20 00:27:01', '2021-02-20 00:34:02'),
(2, 1, '2021-02-16', 1, 'pertermuan 3', 'ddqd', '2021-02-20 00:34:10', '2021-02-20 00:34:23'),
(3, 1, '2021-02-17', 0, 'pertermuan 2', 'halooo', '2021-02-20 00:34:19', '2021-02-28 04:10:18');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `id` bigint(20) unsigned NOT NULL,
  `hapus` int(11) NOT NULL DEFAULT '0',
  `master_kelas_id` int(11) NOT NULL,
  `tahun_akademik_id` int(11) NOT NULL,
  `jurusan_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `hapus`, `master_kelas_id`, `tahun_akademik_id`, `jurusan_id`, `created_at`, `updated_at`) VALUES
(1, 0, 1, 2, 1, '2021-03-18 07:29:05', '2021-03-18 07:29:05'),
(2, 0, 2, 2, 1, '2021-03-18 03:54:21', '2021-03-19 03:54:21'),
(3, 0, 2, 3, 1, '2021-05-07 12:47:27', '2021-05-07 12:47:27'),
(4, 0, 1, 3, 1, '2021-05-07 13:00:45', '2021-05-07 13:00:45'),
(5, 0, 3, 3, 1, '2021-05-25 10:46:17', '2021-05-25 10:46:17'),
(6, 1, 1, 3, 2, '2021-06-17 20:28:11', '2021-06-17 20:34:00'),
(7, 0, 6, 6, 4, '2021-06-21 23:53:11', '2021-06-21 23:53:11');

-- --------------------------------------------------------

--
-- Table structure for table `keterampilan_kompetensi_dasars`
--

CREATE TABLE IF NOT EXISTS `keterampilan_kompetensi_dasars` (
  `id` bigint(20) unsigned NOT NULL,
  `kd_id` int(11) NOT NULL,
  `keterampilan_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `keterampilan_kompetensi_dasars`
--

INSERT INTO `keterampilan_kompetensi_dasars` (`id`, `kd_id`, `keterampilan_id`, `created_at`, `updated_at`) VALUES
(1, 5, 7, '2021-04-29 00:15:00', '2021-04-29 00:15:00'),
(2, 7, 7, '2021-04-29 00:15:00', '2021-04-29 00:15:00'),
(3, 5, 1, '2021-04-29 00:34:56', '2021-04-29 00:34:56'),
(4, 7, 1, '2021-04-29 00:34:56', '2021-04-29 00:34:56'),
(5, 5, 2, '2021-04-29 00:47:35', '2021-04-29 00:47:35'),
(6, 7, 3, '2021-04-30 01:35:56', '2021-04-30 01:35:56'),
(7, 5, 4, '2021-05-01 23:28:50', '2021-05-01 23:28:50'),
(8, 7, 4, '2021-05-01 23:28:50', '2021-05-01 23:28:50'),
(9, 5, 5, '2021-05-01 23:32:03', '2021-05-01 23:32:03'),
(10, 5, 6, '2021-05-25 11:11:02', '2021-05-25 11:11:02'),
(11, 7, 6, '2021-05-25 11:11:02', '2021-05-25 11:11:02');

-- --------------------------------------------------------

--
-- Table structure for table `kompetensi_dasars`
--

CREATE TABLE IF NOT EXISTS `kompetensi_dasars` (
  `id` bigint(20) unsigned NOT NULL,
  `nama_kompetensi_dasar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kompetensi_inti_id` int(11) NOT NULL,
  `semester_id` int(11) NOT NULL,
  `hapus` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kompetensi_dasars`
--

INSERT INTO `kompetensi_dasars` (`id`, `nama_kompetensi_dasar`, `kompetensi_inti_id`, `semester_id`, `hapus`, `created_at`, `updated_at`) VALUES
(1, 'Menerapkan prinsip-prinsip pengukuran besaran fisis, ketepatan, ketelitian dan angka penting, serta notasi ilmiah', 1, 1, 0, NULL, NULL),
(2, 'Menerapkan prinsip penjumlahan vektor sebidang (misalnya perpindahan)', 1, 1, 0, NULL, NULL),
(3, 'Menganalisis interaksi pada gaya serta hubungan antara gaya, massa dan gerak lurus benda serta penerapannya dalam kehidupan sehari-hari', 1, 2, 0, NULL, NULL),
(4, 'Menganalisis konsep energi, usaha (kerja), hubungan usaha (kerja) dan perubahan energi, hukum kekekalan energi, serta penerapannya dalam peristiwa sehari-hari', 1, 2, 0, NULL, NULL),
(5, 'Menyajikan hasil pengukuran besaran fisis berikut ketelitiannya dengan menggunakan peralatan dan teknik yang tepat serta mengikuti kaidah angka penting untuk suatu penyelidikan ilmiah', 2, 1, 0, NULL, NULL),
(6, 'adding', 1, 1, 0, '2021-04-14 03:55:59', '2021-04-14 03:55:59'),
(7, 'Menyajikan hasil pengukuran', 2, 1, 0, NULL, NULL),
(8, 'belajar', 1, 2, 0, '2021-06-21 23:57:21', '2021-06-21 23:57:21');

-- --------------------------------------------------------

--
-- Table structure for table `master_jadwal_pelajarans`
--

CREATE TABLE IF NOT EXISTS `master_jadwal_pelajarans` (
  `id` bigint(20) unsigned NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `semester_id` int(11) NOT NULL,
  `mapel_id` int(11) NOT NULL,
  `pertemuan` int(11) NOT NULL DEFAULT '16',
  `hapus` int(11) NOT NULL DEFAULT '0',
  `kkm` int(11) NOT NULL DEFAULT '75',
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `master_jadwal_pelajarans`
--

INSERT INTO `master_jadwal_pelajarans` (`id`, `kelas_id`, `semester_id`, `mapel_id`, `pertemuan`, `hapus`, `kkm`, `user_id`, `created_at`, `updated_at`) VALUES
(25, 3, 1, 2, 16, 0, 75, 2, '2021-06-08 01:59:36', '2021-06-08 01:59:36'),
(26, 3, 1, 3, 16, 0, 75, 2, '2021-06-08 02:00:08', '2021-06-08 02:00:08'),
(27, 3, 1, 1, 16, 0, 75, 2, '2021-06-08 02:00:23', '2021-06-08 02:00:23'),
(28, 4, 1, 3, 16, 0, 75, 7, '2021-06-13 00:55:48', '2021-06-13 00:55:48'),
(29, 4, 1, 2, 16, 0, 75, 2, '2021-06-19 04:13:21', '2021-06-19 04:13:21'),
(30, 6, 1, 2, 16, 0, 75, 2, '2021-06-19 04:14:03', '2021-06-19 04:14:03'),
(31, 4, 1, 1, 16, 0, 75, 2, '2021-06-19 04:14:24', '2021-06-19 04:14:24'),
(32, 7, 1, 1, 16, 0, 75, 2, '2021-06-22 00:01:28', '2021-06-22 00:01:28'),
(33, 7, 1, 3, 16, 0, 75, 58, '2021-06-22 00:06:08', '2021-06-22 00:06:08');

-- --------------------------------------------------------

--
-- Table structure for table `master_jurusans`
--

CREATE TABLE IF NOT EXISTS `master_jurusans` (
  `id` bigint(20) unsigned NOT NULL,
  `jurusan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hapus` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `master_jurusans`
--

INSERT INTO `master_jurusans` (`id`, `jurusan`, `hapus`, `created_at`, `updated_at`) VALUES
(1, 'bahasa', 1, '2021-03-10 22:39:31', '2021-03-10 22:42:18'),
(2, 'agama', 0, '2021-03-10 22:39:50', '2021-03-10 22:39:50'),
(3, 'ipa', 0, '2021-03-10 22:39:55', '2021-03-10 22:39:55'),
(4, 'IPS', 0, '2021-06-17 07:21:36', '2021-06-17 07:21:36');

-- --------------------------------------------------------

--
-- Table structure for table `master_kejadian_jurnals`
--

CREATE TABLE IF NOT EXISTS `master_kejadian_jurnals` (
  `id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `kejadian` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `butir_sikap` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hapus` tinyint(1) NOT NULL DEFAULT '0',
  `kelas_mapel_id` int(11) NOT NULL,
  `tindakan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tindak_lanjut` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `master_kejadian_jurnals`
--

INSERT INTO `master_kejadian_jurnals` (`id`, `user_id`, `waktu`, `kejadian`, `butir_sikap`, `hapus`, `kelas_mapel_id`, `tindakan`, `tindak_lanjut`, `created_at`, `updated_at`) VALUES
(1, 3, '2021-04-30 13:43:31', 'eek dicela', 'Jujur', 1, 2, 'Negatif (-)', 'eek dicelana', '2021-03-24 23:31:56', '2021-04-30 06:43:31');

-- --------------------------------------------------------

--
-- Table structure for table `master_kelas`
--

CREATE TABLE IF NOT EXISTS `master_kelas` (
  `id` bigint(20) unsigned NOT NULL,
  `hapus` int(11) NOT NULL DEFAULT '0',
  `kode_kelas_id` int(11) NOT NULL,
  `jurusan_id` int(11) NOT NULL,
  `kelas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `master_kelas`
--

INSERT INTO `master_kelas` (`id`, `hapus`, `kode_kelas_id`, `jurusan_id`, `kelas`, `created_at`, `updated_at`) VALUES
(1, 0, 1, 1, 'IPA 1', '2021-03-18 07:11:52', '2021-03-18 07:11:52'),
(2, 0, 2, 1, 'ipa 2', '2021-03-19 03:54:07', '2021-03-19 03:54:07'),
(3, 0, 3, 1, 'X IPA A', '2021-05-25 10:46:02', '2021-05-25 10:46:02'),
(4, 0, 1, 2, 'IPA Z', '2021-06-17 15:22:25', '2021-06-17 15:22:25'),
(5, 1, 3, 2, 'IPA 34', '2021-06-17 20:34:59', '2021-06-17 20:39:41'),
(6, 0, 1, 4, 'a', '2021-06-21 23:52:39', '2021-06-21 23:52:39');

-- --------------------------------------------------------

--
-- Table structure for table `master_kode_kelas`
--

CREATE TABLE IF NOT EXISTS `master_kode_kelas` (
  `id` bigint(20) unsigned NOT NULL,
  `kode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numerik` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `master_kode_kelas`
--

INSERT INTO `master_kode_kelas` (`id`, `kode`, `name`, `numerik`, `created_at`, `updated_at`) VALUES
(1, 'X', 'KELAS X', 0, NULL, NULL),
(2, 'XI', 'KELAS XI', 1, NULL, NULL),
(3, 'XII', 'KELAS XII', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `master_kompetensi_intis`
--

CREATE TABLE IF NOT EXISTS `master_kompetensi_intis` (
  `id` bigint(20) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `master_kompetensi_intis`
--

INSERT INTO `master_kompetensi_intis` (`id`, `name`, `kode`, `created_at`, `updated_at`) VALUES
(1, 'pengetahuan', '3', NULL, NULL),
(2, 'keterampilan', '4', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `master_k_k_m_s`
--

CREATE TABLE IF NOT EXISTS `master_k_k_m_s` (
  `id` bigint(20) unsigned NOT NULL,
  `kkm` int(11) NOT NULL,
  `hapus` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `master_k_k_m_s`
--

INSERT INTO `master_k_k_m_s` (`id`, `kkm`, `hapus`, `created_at`, `updated_at`) VALUES
(1, 80, 1, '2021-03-10 06:07:32', '2021-03-10 06:07:36'),
(2, 90, 0, '2021-03-10 23:11:54', '2021-03-10 23:11:54'),
(3, 88, 1, '2021-06-17 20:26:40', '2021-06-17 20:26:54');

-- --------------------------------------------------------

--
-- Table structure for table `master_mapels`
--

CREATE TABLE IF NOT EXISTS `master_mapels` (
  `id` bigint(20) unsigned NOT NULL,
  `nama_mapel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan_id` int(11) NOT NULL,
  `kkm_id` int(11) NOT NULL,
  `hapus` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `master_mapels`
--

INSERT INTO `master_mapels` (`id`, `nama_mapel`, `jurusan_id`, `kkm_id`, `hapus`, `created_at`, `updated_at`) VALUES
(1, 'puisi', 1, 1, 0, '2021-03-10 22:45:32', '2021-03-10 22:45:32'),
(2, 'Kalkulus', 3, 1, 0, '2021-03-10 22:53:23', '2021-03-10 22:53:23'),
(3, 'Fisika', 3, 2, 0, '2021-03-10 23:14:20', '2021-03-10 23:14:20'),
(4, 'Kalkulus', 3, 2, 0, '2021-06-17 07:23:52', '2021-06-17 07:23:52'),
(5, 'kalkulus X', 4, 2, 1, '2021-06-17 20:27:11', '2021-06-17 20:27:29');

-- --------------------------------------------------------

--
-- Table structure for table `master_nilai_keterampilans`
--

CREATE TABLE IF NOT EXISTS `master_nilai_keterampilans` (
  `id` bigint(20) unsigned NOT NULL,
  `user_detail_id` int(11) NOT NULL,
  `penilaian_keterampilan_id` int(11) NOT NULL,
  `materi` int(11) NOT NULL DEFAULT '0',
  `jumlah_skor` int(11) NOT NULL DEFAULT '0',
  `tugas` int(11) NOT NULL DEFAULT '0',
  `nilai` int(11) NOT NULL DEFAULT '0',
  `remidi` int(11) DEFAULT NULL,
  `feedback` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `master_nilai_keterampilans`
--

INSERT INTO `master_nilai_keterampilans` (`id`, `user_detail_id`, `penilaian_keterampilan_id`, `materi`, `jumlah_skor`, `tugas`, `nilai`, `remidi`, `feedback`, `created_at`, `updated_at`) VALUES
(1, 4, 1, 0, 0, 0, 100, NULL, NULL, '2021-04-29 00:35:10', '2021-04-30 01:36:40'),
(2, 6, 1, 0, 0, 0, 61, NULL, NULL, '2021-04-29 00:35:16', '2021-04-30 01:36:47'),
(3, 4, 2, 0, 0, 0, 80, NULL, NULL, '2021-04-29 00:47:45', '2021-04-29 00:47:45'),
(4, 6, 2, 0, 0, 0, 60, NULL, NULL, '2021-04-29 00:47:48', '2021-04-29 00:47:48'),
(5, 4, 3, 0, 0, 0, 100, NULL, NULL, '2021-04-30 01:36:04', '2021-04-30 01:36:04'),
(6, 6, 3, 0, 0, 0, 70, NULL, NULL, '2021-04-30 01:36:06', '2021-04-30 01:36:06'),
(7, 4, 6, 0, 0, 0, 80, NULL, NULL, '2021-05-25 11:11:14', '2021-05-25 11:11:14'),
(8, 6, 6, 0, 0, 0, 30, NULL, NULL, '2021-05-25 11:11:23', '2021-05-25 11:11:23');

-- --------------------------------------------------------

--
-- Table structure for table `master_nilai_pengetahuans`
--

CREATE TABLE IF NOT EXISTS `master_nilai_pengetahuans` (
  `id` bigint(20) unsigned NOT NULL,
  `user_detail_id` int(11) NOT NULL,
  `penilaian_pengetahuan_id` int(11) NOT NULL,
  `nilai` int(11) NOT NULL DEFAULT '0',
  `remidi` int(11) DEFAULT NULL,
  `feedback` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `master_nilai_pengetahuans`
--

INSERT INTO `master_nilai_pengetahuans` (`id`, `user_detail_id`, `penilaian_pengetahuan_id`, `nilai`, `remidi`, `feedback`, `created_at`, `updated_at`) VALUES
(1, 4, 4, 22, NULL, NULL, '2021-04-22 02:24:32', '2021-04-29 07:05:10'),
(2, 6, 4, 100, NULL, 'wqe', '2021-04-22 02:25:38', '2021-04-22 02:32:47'),
(3, 4, 2, 70, NULL, NULL, '2021-04-29 09:09:22', '2021-04-29 09:09:22'),
(4, 6, 2, 80, NULL, NULL, '2021-04-29 09:09:26', '2021-04-29 09:09:26'),
(5, 4, 3, 50, NULL, NULL, '2021-04-30 07:42:40', '2021-04-30 07:42:40'),
(6, 6, 3, 60, NULL, NULL, '2021-04-30 07:42:42', '2021-04-30 07:42:42'),
(7, 7, 6, 20, 100, NULL, '2021-06-19 04:15:30', '2021-06-19 04:15:32'),
(8, 6, 6, 30, 1, NULL, '2021-06-19 04:15:34', '2021-06-19 04:29:26');

-- --------------------------------------------------------

--
-- Table structure for table `master_penilaian_keterampilans`
--

CREATE TABLE IF NOT EXISTS `master_penilaian_keterampilans` (
  `id` bigint(20) unsigned NOT NULL,
  `skema_id` int(11) NOT NULL,
  `nama_penilaian` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kompetensi_dasar` text COLLATE utf8mb4_unicode_ci,
  `keterangan` text COLLATE utf8mb4_unicode_ci,
  `kelas_mapel_id` int(11) NOT NULL,
  `hapus` int(11) NOT NULL DEFAULT '0',
  `mulai_pengerjaan` date DEFAULT NULL,
  `finish_pengerjaan` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `master_penilaian_keterampilans`
--

INSERT INTO `master_penilaian_keterampilans` (`id`, `skema_id`, `nama_penilaian`, `kompetensi_dasar`, `keterangan`, `kelas_mapel_id`, `hapus`, `mulai_pengerjaan`, `finish_pengerjaan`, `created_at`, `updated_at`) VALUES
(1, 2, 'nilai', NULL, 'mantap pak', 5, 0, '2021-04-16', '2021-04-14', '2021-04-29 00:34:56', '2021-04-29 00:34:56'),
(2, 3, 'penlawawqwd', NULL, 'lala', 5, 0, '2021-04-03', '2021-04-17', '2021-04-29 00:47:35', '2021-04-29 00:47:35'),
(3, 2, 'lololowqeq', '5,7,', 'ww', 5, 0, '2021-04-30', '2021-05-21', '2021-04-30 01:35:56', '2021-05-01 23:28:36'),
(5, 2, 'weqeqwe', NULL, 'ww', 5, 0, '2021-05-15', '2021-05-14', '2021-05-01 23:32:03', '2021-05-01 23:32:03'),
(6, 3, 'pp', NULL, 'adadadada', 9, 0, '2021-05-14', '2021-05-26', '2021-05-25 11:11:02', '2021-05-25 11:11:02');

-- --------------------------------------------------------

--
-- Table structure for table `master_penilaian_pengetahuans`
--

CREATE TABLE IF NOT EXISTS `master_penilaian_pengetahuans` (
  `id` bigint(20) unsigned NOT NULL,
  `pertemuan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kompetensi_dasar_id` int(11) NOT NULL,
  `penilaian_harian` int(11) NOT NULL,
  `instruksi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas_mapel_id` int(11) NOT NULL,
  `hapus` smallint(6) NOT NULL DEFAULT '0',
  `skema_id` int(11) NOT NULL,
  `mulai_pengerjaan` timestamp NULL DEFAULT NULL,
  `finish_pengerjaan` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `master_penilaian_pengetahuans`
--

INSERT INTO `master_penilaian_pengetahuans` (`id`, `pertemuan`, `kompetensi_dasar_id`, `penilaian_harian`, `instruksi`, `kelas_mapel_id`, `hapus`, `skema_id`, `mulai_pengerjaan`, `finish_pengerjaan`, `created_at`, `updated_at`) VALUES
(1, 'pertermuan 1', 1, 3, 'wwww', 5, 1, 2, '2021-04-15 17:00:00', '2021-04-10 17:00:00', '2021-04-29 07:29:11', '2021-04-29 09:54:07'),
(2, 'pertermuan 2', 2, 22, 'lololo', 5, 0, 3, NULL, NULL, '2021-04-29 09:09:08', '2021-04-29 09:09:08'),
(3, 'pertermuan 2', 4, 2, 'ww', 5, 0, 1, '2021-04-08 17:00:00', '2021-04-30 17:00:00', '2021-04-30 07:42:30', '2021-04-30 07:42:30'),
(4, 'pertermuan 1', 3, 80, 'aaaaaaaaaaaa', 9, 0, 1, '2021-05-07 04:00:00', '2021-05-26 04:00:00', '2021-05-25 11:08:30', '2021-05-25 11:08:30'),
(5, 'pertermuan 1', 2, 0, 'ww1', 21, 0, 1, '2021-06-08 17:00:00', '2021-06-09 17:00:00', '2021-06-08 01:26:56', '2021-06-08 01:26:56'),
(6, 'pertermuan 1', 3, 20, 'dwqdqw', 31, 0, 2, '2021-06-03 17:00:00', '2021-06-24 17:00:00', '2021-06-19 04:15:12', '2021-06-19 04:15:12');

-- --------------------------------------------------------

--
-- Table structure for table `master_rpps`
--

CREATE TABLE IF NOT EXISTS `master_rpps` (
  `id` bigint(20) unsigned NOT NULL,
  `hapus` int(11) NOT NULL DEFAULT '0',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `master_rpps`
--

INSERT INTO `master_rpps` (`id`, `hapus`, `name`, `name_file`, `kelas_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'laffa kita', '1614260240.profile__PT_LAFFA_KITA_BERJAYA.pdf', 1, '2021-02-25 06:37:20', '2021-02-25 23:12:37'),
(2, 1, 'dqwd', '1614511019.db_logpm.sql', 1, '2021-02-28 04:16:59', '2021-02-28 04:17:03'),
(3, 0, 'Jambu', '1616651090.DETEKSI_SERANGAN_MENGGUNAKAN_HONEYPOT_BERBASIS_ANDROID_cd.pdf', 2, '2021-03-24 22:44:50', '2021-03-24 22:44:50'),
(4, 0, 'Test Customer', '1624101292.artikel6.png', 31, '2021-06-19 04:14:52', '2021-06-19 04:14:52');

-- --------------------------------------------------------

--
-- Table structure for table `master_semesters`
--

CREATE TABLE IF NOT EXISTS `master_semesters` (
  `id` bigint(20) unsigned NOT NULL,
  `nama_semester` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `master_semesters`
--

INSERT INTO `master_semesters` (`id`, `nama_semester`, `created_at`, `updated_at`) VALUES
(1, 'ganjil', NULL, NULL),
(2, 'genap', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `master_skema_keterampilans`
--

CREATE TABLE IF NOT EXISTS `master_skema_keterampilans` (
  `id` bigint(20) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `master_skema_keterampilans`
--

INSERT INTO `master_skema_keterampilans` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'tes tulis', NULL, NULL),
(2, 'tes lisan', NULL, NULL),
(3, 'penugasan', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `master_skema_pengetahuans`
--

CREATE TABLE IF NOT EXISTS `master_skema_pengetahuans` (
  `id` bigint(20) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `master_skema_pengetahuans`
--

INSERT INTO `master_skema_pengetahuans` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'tes tulis', NULL, NULL),
(2, 'tes lisan', NULL, NULL),
(3, 'penugasan', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `materi_bahan_belajars`
--

CREATE TABLE IF NOT EXISTS `materi_bahan_belajars` (
  `id` bigint(20) unsigned NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hapus` int(11) NOT NULL DEFAULT '0',
  `rating` int(11) NOT NULL DEFAULT '0',
  `sender_id` int(11) NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `type` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kelas_mapel_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `materi_bahan_belajars`
--

INSERT INTO `materi_bahan_belajars` (`id`, `link`, `name`, `hapus`, `rating`, `sender_id`, `kelas_id`, `type`, `kelas_mapel_id`, `created_at`, `updated_at`) VALUES
(1, '1618656623.04-04-2021-09.16.02(2).pdf', 'aku', 0, 0, 2, 1, 'file', 3, '2021-04-17 03:50:23', '2021-04-17 03:50:23'),
(2, 'wi1FjeorSdE', 'Test Customer', 0, 0, 58, 7, NULL, 33, '2021-06-22 00:09:20', '2021-06-22 00:09:20');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE IF NOT EXISTS `menus` (
  `id` bigint(20) NOT NULL,
  `parent_code` varchar(255) DEFAULT NULL,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1' COMMENT '0:nonactive,  1:active-child-dropdown, 2:active-parent-dropdown, 3:single',
  `icon` varchar(255) DEFAULT NULL,
  `reorder` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `parent_code`, `code`, `name`, `status`, `icon`, `reorder`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Teacher', 'teacher', 'Teacher', 2, NULL, 1, '2021-01-07 02:55:56', '2021-01-07 06:37:39', NULL),
(2, 'Teacher', '/matapelajaran', 'Mata Pelajaran', 1, 'book', 1, '2021-01-07 02:56:10', '2021-01-07 07:14:57', NULL),
(3, 'Teacher', '/materi', 'Materi dan Bahan', 1, 'book-open', 2, '2021-01-07 02:56:20', '2021-01-07 07:15:03', NULL),
(4, 'Teacher', '/absen', 'Absensi Guru', 1, 'activity', 3, '2021-01-07 02:56:20', '2021-01-07 07:15:05', NULL),
(5, 'Students', 'student', 'Student', 2, NULL, 2, '2021-01-07 06:22:40', '2021-01-07 06:48:31', NULL),
(6, 'Students', 'materi_kelas_student', 'Materi dan Bahan', 1, 'book', 1, '2021-01-07 06:22:40', '2021-04-17 08:48:35', NULL),
(7, 'Kepala Sekolah', 'kepalasekolah', 'Kepala Sekolah', 0, NULL, 3, '2021-01-07 06:37:16', '2021-03-06 13:29:43', NULL),
(8, 'Kepala Sekolah', 'kepalasekolahh', 'Menu Kepala Sekolah', 0, 'book', 1, '2021-01-07 06:37:31', '2021-03-06 13:29:39', NULL),
(9, 'Kurikulum', 'kurikulum', 'Kurikulum', 0, NULL, 4, '2021-01-07 06:40:59', '2021-03-06 13:29:33', NULL),
(10, 'Kurikulum', 'kurikulumm', 'Menu Kurikulum', 0, 'book', 1, '2021-01-07 06:41:11', '2021-03-06 13:29:29', NULL),
(11, 'Administrator', 'Administrator', 'Administrator', 2, NULL, 1, '2021-03-06 12:31:52', '2021-03-06 13:26:52', NULL),
(12, 'Setting_Semester', '/Setting_Semester', 'Setting Semester', 1, NULL, 1, '2021-03-06 12:34:21', '2021-03-06 13:20:20', NULL),
(13, 'Data_Master_Kelas', 'Data_Master_Kelas', 'Data Master Kelas', 1, NULL, 1, '2021-03-06 12:35:06', '2021-03-06 12:35:06', NULL),
(14, 'Data_Master_Jurusan', 'Data_Master_Jurusan', 'Data Master Jurusan', 1, NULL, 1, '2021-03-06 12:36:17', '2021-03-06 12:36:17', NULL),
(15, 'Data_Master_Siswa', 'Data_Master_Siswa', 'Data Master Siswa', 1, NULL, 1, '2021-03-06 12:36:46', '2021-03-06 12:36:46', NULL),
(16, 'Data_Master_Guru', 'Data_Master_Guru', 'Data Master Guru', 1, NULL, 1, '2021-03-06 12:37:54', '2021-03-06 12:37:54', NULL),
(17, 'Jadwal_Pelajaran', 'Jadwal_Pelajaran', 'Jadwal Pelajaran', 1, NULL, 1, '2021-03-06 12:41:22', '2021-03-06 12:41:22', NULL),
(18, 'Kompetensi_Inti', 'Kompetensi_Inti', 'Kompetensi Inti', 1, NULL, 1, '2021-03-06 12:41:59', '2021-03-06 12:41:59', NULL),
(19, 'Kompetensi_Dasar', 'Kompetensi_Dasar', 'Kompetensi Dasar', 1, NULL, 1, '2021-03-06 12:42:22', '2021-03-06 12:42:22', NULL),
(20, 'Monitoring_Aktivitas_Guru', 'Monitoring_Aktivitas_Guru', 'Monitoring Aktivitas Guru', 1, NULL, 1, '2021-03-06 12:43:02', '2021-03-06 12:43:02', NULL),
(21, 'Monitoring_Aktivitas_Siswa', 'Monitoring_Aktivitas_Siswa', 'Monitoring Aktivitas Siswa', 1, NULL, 1, '2021-03-06 12:43:41', '2021-03-06 12:43:41', NULL),
(22, 'Setting_Kelas_Ajar', 'Setting_Kelas_Ajar', 'Setting Kelas Ajar', 0, NULL, 1, '2021-03-06 12:44:13', '2021-06-17 22:13:26', NULL),
(23, 'Master_KKM', 'Master_KKM', 'Master KKM', 1, NULL, 1, '2021-03-06 12:45:04', '2021-03-06 12:45:04', NULL),
(24, 'Laporan', 'Laporan', 'Laporan', 0, NULL, 1, '2021-03-06 12:45:53', '2021-06-17 22:13:34', NULL),
(25, 'Laporan', 'Laporan_Kehadiran_Siswa', 'Laporan Kehadiran Siswa', 0, NULL, 1, '2021-03-06 12:46:43', '2021-06-17 22:13:37', NULL),
(26, 'Laporan', 'Laporan_Kehadiran_Guru', 'Laporan Kehadiran Guru', 2, NULL, 1, '2021-03-06 12:47:10', '2021-03-06 12:47:10', NULL),
(27, 'Laporan', 'Cetak_Penilaian', 'Cetak Penilaian', 2, NULL, 1, '2021-03-06 12:47:37', '2021-03-06 12:47:37', NULL),
(28, 'Tahun_Akademik', 'Tahun_Akademik', 'Tahun Akademik', 1, NULL, 1, '2021-03-06 13:22:17', '2021-03-06 13:27:58', NULL),
(29, 'DataMasterMapel', 'data_master_mapel', 'Data Master Mata Pelajaran', 1, NULL, 1, '2021-03-06 12:46:43', '2021-03-09 15:31:09', NULL),
(30, 'Tahun Akademik', '/tahun_akademik', 'Tahun Akademik', 1, NULL, 1, '2021-03-06 12:34:21', '2021-03-06 13:20:20', NULL),
(31, 'Data Kelas', '/data_kelas', 'Data Kelas', 1, NULL, 1, '2021-03-06 12:34:21', '2021-03-06 13:20:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menu_kelas`
--

CREATE TABLE IF NOT EXISTS `menu_kelas` (
  `id` bigint(20) NOT NULL,
  `parent_code` varchar(255) DEFAULT NULL,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1' COMMENT '0:nonactive,  1:active-child-dropdown, 2:active-parent-dropdown, 3:single',
  `icon` varchar(255) DEFAULT NULL,
  `reorder` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_kelas`
--

INSERT INTO `menu_kelas` (`id`, `parent_code`, `code`, `name`, `status`, `icon`, `reorder`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Kelas', '/kelas', 'Kelas', 2, NULL, 1, '2021-01-11 06:54:05', '2021-01-11 06:58:19', NULL),
(2, 'Kelas', '/kelas/chat', 'Chat', 1, 'message-square', 1, '2021-01-11 06:54:05', '2021-01-18 04:53:28', NULL),
(3, 'Kelas', '/kelas/video_conference', 'Video Conference', 1, 'video', 2, '2021-01-11 06:54:05', '2021-01-18 04:53:31', NULL),
(4, 'Kelas', '/kelas/absensi_kelas', 'Absensi Kelas', 1, 'users', 3, '2021-01-11 06:54:05', '2021-01-18 04:53:33', NULL),
(5, 'Kelas', 'kelas/kompetensi_dasar', 'Kompetensi Dasar', 1, 'calendar', 4, '2021-01-11 06:54:05', '2021-02-28 16:32:27', NULL),
(6, 'Kelas', '/kelas/rpp', 'RPP', 1, 'align-right', 5, '2021-01-11 06:54:05', '2021-01-18 04:53:38', NULL),
(7, 'Kelas', '/kelas/kejadian_jurnal', 'Kejadian / Jurnal', 1, 'book', 6, '2021-01-11 06:54:05', '2021-01-18 04:53:40', NULL),
(8, 'Kelas', '/kelas/materi_bahan_ajar', 'Materi / Bahan Ajar', 1, 'book', 7, '2021-01-11 06:54:05', '2021-01-18 04:53:45', NULL),
(9, 'Kelas', '/kelas/daftar_siswa_kelas', 'Daftar Siswa Kelas', 1, 'users', 8, '2021-01-11 06:54:05', '2021-01-18 04:53:47', NULL),
(10, 'Kelas', '/kelas/cbt', 'CBT', 1, 'airplay', 9, '2021-01-11 06:54:05', '2021-01-18 04:53:48', NULL),
(11, 'Kelas', '/kelas/penilaian_pengetahuan ', 'Penilaian Pengetahuan ', 1, 'file-text', 10, '2021-01-11 06:54:05', '2021-02-15 08:40:56', NULL),
(12, 'Kelas', '/kelas/penilaian_keterampilan', 'Penilaian Keterampilan', 1, 'file-text', 11, '2021-01-11 06:54:05', '2021-02-18 14:22:45', NULL),
(13, 'Kelas', '/kelas/penilaian_semester', 'Penilaian Semester', 1, 'file-text', 12, '2021-01-11 06:54:05', '2021-01-18 04:53:54', NULL),
(14, 'Kelas', '/kelas/rekap_raport', 'Rekap Rapor', 1, 'file-text', 13, '2021-01-11 06:54:05', '2021-04-21 09:36:58', NULL),
(15, 'Kelas', '/kelas/monitor_aktifitas', 'Monitor Aktifitas', 1, 'radio', 14, '2021-01-11 06:54:05', '2021-01-18 04:53:57', NULL),
(16, 'Kelas', '/kelas/pengaturan_kelas', 'Pengaturan Kelas', 1, 'settings', 15, '2021-01-11 06:54:05', '2021-01-18 04:53:59', NULL),
(17, 'Kelas', '/kelas/jurnal_guru', 'Jurnal Guru', 1, 'book', 6, '2021-01-11 06:54:05', '2021-01-18 04:53:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menu_roles`
--

CREATE TABLE IF NOT EXISTS `menu_roles` (
  `id` bigint(20) NOT NULL,
  `menu_id` bigint(20) NOT NULL,
  `role_id` bigint(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_roles`
--

INSERT INTO `menu_roles` (`id`, `menu_id`, `role_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 0, '2021-01-07 02:57:07', '2021-03-16 11:08:34', '2021-03-16 11:08:34'),
(2, 2, 0, '2021-01-07 02:57:12', '2021-03-16 11:08:43', '2021-03-16 11:08:43'),
(3, 3, 0, '2021-01-07 02:57:12', '2021-03-16 11:09:12', '2021-03-16 11:09:12'),
(4, 4, 0, '2021-01-07 02:57:12', '2021-03-16 11:08:50', '2021-03-16 11:08:50'),
(5, 5, 3, '2021-01-07 06:27:49', '2021-03-04 15:49:55', NULL),
(6, 6, 3, '2021-01-07 06:27:51', '2021-03-04 15:49:41', NULL),
(7, 7, 1, '2021-01-07 06:40:30', '2021-03-05 07:54:21', NULL),
(8, 8, 1, '2021-01-07 06:40:32', '2021-03-05 07:54:34', NULL),
(9, 9, 1, '2021-01-07 06:41:29', '2021-03-04 15:50:20', NULL),
(10, 10, 1, '2021-01-07 06:41:31', '2021-03-04 15:50:29', NULL),
(11, 5, 0, '2021-01-07 06:42:22', '2021-03-16 11:09:37', '2021-03-16 11:09:37'),
(12, 6, 0, '2021-01-07 06:42:24', '2021-03-16 11:09:40', '2021-03-16 11:09:40'),
(13, 7, 1, '2021-01-07 06:42:26', '2021-01-07 06:42:26', NULL),
(17, 1, 2, '2021-01-07 06:46:40', '2021-03-04 15:50:58', NULL),
(18, 2, 2, '2021-01-07 06:46:40', '2021-03-04 15:50:58', NULL),
(19, 3, 2, '2021-01-07 06:46:40', '2021-03-04 15:50:58', NULL),
(20, 4, 2, '2021-01-07 06:46:40', '2021-03-04 15:50:58', NULL),
(21, 11, 1, '2021-03-06 12:48:31', '2021-03-06 12:48:31', NULL),
(22, 12, 1, '2021-03-06 12:48:41', '2021-03-06 12:48:41', NULL),
(23, 13, 1, '2021-03-06 12:48:47', '2021-03-06 12:48:47', NULL),
(24, 14, 1, '2021-03-06 12:48:56', '2021-03-06 12:48:56', NULL),
(25, 15, 1, '2021-03-06 12:49:03', '2021-03-06 12:49:03', NULL),
(26, 16, 1, '2021-03-06 12:49:15', '2021-03-06 12:49:15', NULL),
(27, 17, 1, '2021-03-06 12:49:24', '2021-03-06 12:49:24', NULL),
(28, 18, 1, '2021-03-06 12:49:32', '2021-03-06 12:49:32', NULL),
(29, 19, 1, '2021-03-06 12:49:42', '2021-03-06 12:49:42', NULL),
(30, 20, 1, '2021-03-06 12:49:52', '2021-03-06 12:49:52', NULL),
(31, 21, 1, '2021-03-06 12:49:59', '2021-03-06 12:49:59', NULL),
(32, 22, 1, '2021-03-06 12:50:07', '2021-03-06 12:50:07', NULL),
(33, 23, 1, '2021-03-06 12:50:55', '2021-03-06 12:50:55', NULL),
(34, 24, 1, '2021-03-06 12:51:02', '2021-03-06 12:51:02', NULL),
(35, 25, 1, '2021-03-06 12:51:09', '2021-03-06 12:51:09', NULL),
(36, 29, 1, '2021-03-06 12:49:32', '2021-03-06 12:49:32', NULL),
(37, 30, 1, '2021-03-06 12:49:32', '2021-03-06 12:49:32', NULL),
(38, 31, 1, '2021-03-06 12:49:32', '2021-03-06 12:49:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menu_role_kelas`
--

CREATE TABLE IF NOT EXISTS `menu_role_kelas` (
  `id` bigint(20) NOT NULL,
  `menu_id` bigint(20) NOT NULL,
  `role_id` bigint(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_role_kelas`
--

INSERT INTO `menu_role_kelas` (`id`, `menu_id`, `role_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, '2021-01-11 06:54:19', '2021-01-11 06:54:19', NULL),
(2, 2, 1, '2021-01-11 06:54:19', '2021-01-11 06:54:19', NULL),
(3, 3, 1, '2021-01-11 06:54:19', '2021-01-11 06:54:19', NULL),
(4, 4, 1, '2021-01-11 06:54:19', '2021-01-11 06:54:19', NULL),
(5, 5, 1, '2021-01-11 06:54:19', '2021-01-11 06:54:19', NULL),
(6, 6, 1, '2021-01-11 06:54:19', '2021-01-11 06:54:19', NULL),
(7, 7, 1, '2021-01-11 06:54:19', '2021-01-11 06:54:19', NULL),
(8, 8, 1, '2021-01-11 06:54:19', '2021-01-11 06:54:19', NULL),
(9, 9, 1, '2021-01-11 06:54:19', '2021-01-11 06:54:19', NULL),
(10, 10, 1, '2021-01-11 06:54:19', '2021-01-11 06:54:19', NULL),
(11, 11, 1, '2021-01-11 06:54:19', '2021-01-11 06:54:19', NULL),
(12, 12, 1, '2021-01-11 06:54:19', '2021-01-11 06:54:19', NULL),
(13, 13, 1, '2021-01-11 06:54:20', '2021-01-11 06:54:20', NULL),
(14, 14, 1, '2021-01-11 06:54:20', '2021-01-11 06:54:20', NULL),
(15, 15, 1, '2021-01-11 06:54:20', '2021-01-11 06:54:20', NULL),
(16, 16, 1, '2021-01-11 06:54:20', '2021-01-11 06:54:20', NULL),
(17, 1, 2, '2021-01-11 06:54:27', '2021-01-11 06:54:27', NULL),
(18, 2, 2, '2021-01-11 06:54:27', '2021-01-11 06:54:27', NULL),
(19, 3, 2, '2021-01-11 06:54:27', '2021-01-11 06:54:27', NULL),
(20, 4, 2, '2021-01-11 06:54:27', '2021-01-11 06:54:27', NULL),
(21, 5, 2, '2021-01-11 06:54:27', '2021-01-11 06:54:27', NULL),
(22, 6, 2, '2021-01-11 06:54:27', '2021-01-11 06:54:27', NULL),
(23, 7, 2, '2021-01-11 06:54:27', '2021-01-11 06:54:27', NULL),
(24, 8, 2, '2021-01-11 06:54:27', '2021-01-11 06:54:27', NULL),
(25, 9, 2, '2021-01-11 06:54:27', '2021-01-11 06:54:27', NULL),
(26, 10, 2, '2021-01-11 06:54:27', '2021-01-11 06:54:27', NULL),
(27, 11, 2, '2021-01-11 06:54:27', '2021-01-11 06:54:27', NULL),
(28, 12, 2, '2021-01-11 06:54:27', '2021-01-11 06:54:27', NULL),
(29, 13, 2, '2021-01-11 06:54:27', '2021-01-11 06:54:27', NULL),
(30, 14, 2, '2021-01-11 06:54:27', '2021-01-11 06:54:27', NULL),
(31, 15, 2, '2021-01-11 06:54:27', '2021-01-11 06:54:27', NULL),
(32, 16, 2, '2021-01-11 06:54:27', '2021-01-11 06:54:27', NULL),
(33, 1, 3, '2021-01-11 06:54:35', '2021-01-11 06:54:35', NULL),
(34, 2, 3, '2021-01-11 06:54:35', '2021-01-11 06:54:35', NULL),
(35, 3, 3, '2021-01-11 06:54:35', '2021-01-11 06:54:35', NULL),
(36, 4, 3, '2021-01-11 06:54:35', '2021-01-11 06:54:35', NULL),
(37, 5, 3, '2021-01-11 06:54:35', '2021-01-11 06:54:35', NULL),
(38, 6, 3, '2021-01-11 06:54:35', '2021-01-11 06:54:35', NULL),
(39, 7, 3, '2021-01-11 06:54:35', '2021-01-11 06:54:35', NULL),
(40, 8, 3, '2021-01-11 06:54:35', '2021-01-11 06:54:35', NULL),
(41, 9, 3, '2021-01-11 06:54:35', '2021-01-11 06:54:35', NULL),
(42, 10, 3, '2021-01-11 06:54:35', '2021-01-11 06:54:35', NULL),
(43, 11, 3, '2021-01-11 06:54:35', '2021-01-11 06:54:35', NULL),
(44, 12, 3, '2021-01-11 06:54:35', '2021-01-11 06:54:35', NULL),
(45, 13, 3, '2021-01-11 06:54:35', '2021-01-11 06:54:35', NULL),
(46, 14, 3, '2021-01-11 06:54:35', '2021-01-11 06:54:35', NULL),
(47, 15, 3, '2021-01-11 06:54:35', '2021-01-11 06:54:35', NULL),
(48, 16, 3, '2021-01-11 06:54:35', '2021-01-11 06:54:35', NULL),
(49, 1, 4, '2021-01-11 06:54:43', '2021-01-11 06:54:43', NULL),
(50, 2, 4, '2021-01-11 06:54:43', '2021-01-11 06:54:43', NULL),
(51, 3, 4, '2021-01-11 06:54:43', '2021-01-11 06:54:43', NULL),
(52, 4, 4, '2021-01-11 06:54:43', '2021-01-11 06:54:43', NULL),
(53, 5, 4, '2021-01-11 06:54:43', '2021-01-11 06:54:43', NULL),
(54, 6, 4, '2021-01-11 06:54:43', '2021-01-11 06:54:43', NULL),
(55, 7, 4, '2021-01-11 06:54:43', '2021-01-11 06:54:43', NULL),
(56, 8, 4, '2021-01-11 06:54:43', '2021-01-11 06:54:43', NULL),
(57, 9, 4, '2021-01-11 06:54:43', '2021-01-11 06:54:43', NULL),
(58, 10, 4, '2021-01-11 06:54:43', '2021-01-11 06:54:43', NULL),
(59, 11, 4, '2021-01-11 06:54:43', '2021-01-11 06:54:43', NULL),
(60, 12, 4, '2021-01-11 06:54:43', '2021-01-11 06:54:43', NULL),
(61, 13, 4, '2021-01-11 06:54:43', '2021-01-11 06:54:43', NULL),
(62, 14, 4, '2021-01-11 06:54:43', '2021-01-11 06:54:43', NULL),
(63, 15, 4, '2021-01-11 06:54:43', '2021-01-11 06:54:43', NULL),
(64, 16, 4, '2021-01-11 06:54:43', '2021-01-11 06:54:43', NULL),
(65, 1, 5, '2021-01-11 06:54:55', '2021-01-11 06:54:55', NULL),
(66, 2, 5, '2021-01-11 06:54:55', '2021-01-11 06:54:55', NULL),
(67, 3, 5, '2021-01-11 06:54:55', '2021-01-11 06:54:55', NULL),
(68, 4, 5, '2021-01-11 06:54:55', '2021-01-11 06:54:55', NULL),
(69, 5, 5, '2021-01-11 06:54:55', '2021-01-11 06:54:55', NULL),
(70, 6, 5, '2021-01-11 06:54:55', '2021-01-11 06:54:55', NULL),
(71, 7, 5, '2021-01-11 06:54:55', '2021-01-11 06:54:55', NULL),
(72, 8, 5, '2021-01-11 06:54:55', '2021-01-11 06:54:55', NULL),
(73, 9, 5, '2021-01-11 06:54:55', '2021-01-11 06:54:55', NULL),
(74, 10, 5, '2021-01-11 06:54:55', '2021-01-11 06:54:55', NULL),
(75, 11, 5, '2021-01-11 06:54:55', '2021-01-11 06:54:55', NULL),
(76, 12, 5, '2021-01-11 06:54:55', '2021-01-11 06:54:55', NULL),
(77, 13, 5, '2021-01-11 06:54:55', '2021-01-11 06:54:55', NULL),
(78, 14, 5, '2021-01-11 06:54:55', '2021-01-11 06:54:55', NULL),
(79, 15, 5, '2021-01-11 06:54:55', '2021-01-11 06:54:55', NULL),
(80, 16, 5, '2021-01-11 06:54:55', '2021-01-11 06:54:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=121 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(16, '2021_02_11_153703_create_master_semesters_table', 6),
(19, '2021_02_17_154740_create_kompetensi_dasars_table', 9),
(28, '2021_02_20_070844_create_jurnal_gurus_table', 13),
(32, '2021_02_21_081600_create_daftar_kelas_table', 16),
(36, '2021_02_17_154535_create_master_kompetensi_intis_table', 20),
(42, '2021_02_23_150357_create_master_rpps_table', 22),
(47, '2021_02_24_134323_create_materi_bahan_belajars_table', 23),
(49, '2021_02_28_141528_create_master_kode_kelas_table', 25),
(56, '2021_02_11_133720_create_master_mapels_table', 29),
(58, '2021_03_09_150223_create_master_k_k_m_s_table', 30),
(61, '2021_02_11_133550_create_master_jurusans_table', 31),
(63, '2021_03_18_075534_create_tahun_akademiks_table', 32),
(65, '2021_02_21_080256_create_rombel_kelas_table', 34),
(66, '2021_02_11_133658_create_master_kelas_table', 35),
(67, '2021_03_18_133827_create_kelas_table', 36),
(74, '2021_02_17_144025_create_master_penilaian_pengetahuans_table', 38),
(79, '2021_03_20_132144_create_tugas_siswas_table', 41),
(82, '2021_02_11_133337_create_master_jadwal_pelajarans_table', 42),
(86, '2021_03_23_113936_create_tugas_siswa_pengetahuans_table', 43),
(88, '2021_02_13_095112_create_master_kejadian_jurnals_table', 45),
(92, '2021_03_26_124141_create_absens_table', 46),
(97, '2021_04_04_132757_create_master_nilai_pengetahuans_table', 48),
(100, '2021_03_23_113950_create_tugas_siswa_keterampilans_table', 50),
(106, '2014_10_12_000000_create_users_table', 53),
(108, '2021_02_11_133827_create_user_details_table', 54),
(109, '2021_04_04_132749_create_master_nilai_keterampilans_table', 55),
(110, '2021_04_23_115629_create_master_skema_keterampilans_table', 56),
(111, '2021_02_18_144628_create_master_penilaian_keterampilans_table', 57),
(112, '2021_04_29_062007_create_penilaian_kompetensi_dasars_table', 58),
(113, '2021_04_29_070438_create_keterampilan_kompetensi_dasars_table', 59),
(115, '2021_04_29_134822_create_master_skema_pengetahuans_table', 60),
(116, '2021_05_02_051046_create_setting_semesters_table', 61),
(118, '2021_05_27_112148_create_block_kelas_mapels_table', 62),
(120, '2021_03_30_025504_create_absens_table', 63);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penilaian_kompetensi_dasars`
--

CREATE TABLE IF NOT EXISTS `penilaian_kompetensi_dasars` (
  `id` bigint(20) unsigned NOT NULL,
  `penilaian_id` int(11) NOT NULL,
  `kompetensi_dasar_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) NOT NULL,
  `name_role` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name_role`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'administrator', '2021-02-13 04:46:21', '2021-02-13 04:46:21', NULL),
(2, 'guru', '2021-02-13 04:46:21', '2021-03-04 15:47:27', NULL),
(3, 'siswa', '2021-02-13 04:46:21', '2021-03-04 15:47:36', NULL),
(4, 'guruc', '2021-02-13 04:46:21', '2021-03-04 15:47:06', NULL),
(5, 'siswac', '2021-02-13 04:46:21', '2021-03-04 15:47:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rombel_kelas`
--

CREATE TABLE IF NOT EXISTS `rombel_kelas` (
  `id` bigint(20) unsigned NOT NULL,
  `hapus` int(11) NOT NULL DEFAULT '0',
  `jurusan_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rombel_kelas`
--

INSERT INTO `rombel_kelas` (`id`, `hapus`, `jurusan_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 0, 1, 'rombel1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `setting_semesters`
--

CREATE TABLE IF NOT EXISTS `setting_semesters` (
  `id` bigint(20) unsigned NOT NULL,
  `semester_id` int(11) NOT NULL,
  `tahun_akademik_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setting_semesters`
--

INSERT INTO `setting_semesters` (`id`, `semester_id`, `tahun_akademik_id`, `created_at`, `updated_at`) VALUES
(1, 1, 6, NULL, '2021-06-22 00:03:39');

-- --------------------------------------------------------

--
-- Table structure for table `tahun_akademiks`
--

CREATE TABLE IF NOT EXISTS `tahun_akademiks` (
  `id` bigint(20) unsigned NOT NULL,
  `tahun_akademik` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hapus` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tahun_akademiks`
--

INSERT INTO `tahun_akademiks` (`id`, `tahun_akademik`, `hapus`, `created_at`, `updated_at`) VALUES
(1, '2020/2021', 1, '2021-03-18 01:11:54', '2021-03-18 01:16:19'),
(2, '2018/2019', 0, '2021-03-18 07:01:04', '2021-03-18 07:01:04'),
(3, '2021/2022', 0, '2021-05-07 12:45:33', '2021-05-07 12:45:33'),
(4, '2022/2025', 1, '2021-06-17 20:27:39', '2021-06-17 20:27:53'),
(5, '2022/2023', 0, '2021-06-21 23:40:44', '2021-06-21 23:40:44'),
(6, '2023/2024', 0, '2021-06-21 23:52:05', '2021-06-21 23:52:05');

-- --------------------------------------------------------

--
-- Table structure for table `tugas_siswas`
--

CREATE TABLE IF NOT EXISTS `tugas_siswas` (
  `id` bigint(20) unsigned NOT NULL,
  `kompetensi_inti_id` int(11) NOT NULL,
  `file_path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penilaian_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tugas_siswas`
--

INSERT INTO `tugas_siswas` (`id`, `kompetensi_inti_id`, `file_path`, `penilaian_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, '1', 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tugas_siswa_keterampilans`
--

CREATE TABLE IF NOT EXISTS `tugas_siswa_keterampilans` (
  `id` bigint(20) unsigned NOT NULL,
  `penilaian_keterampilan_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `filename_path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tugas_siswa_keterampilans`
--

INSERT INTO `tugas_siswa_keterampilans` (`id`, `penilaian_keterampilan_id`, `user_id`, `filename_path`, `created_at`, `updated_at`) VALUES
(1, 1, 8, '1619085292.yoggapw-dikonversi[1].pdf', '2021-04-22 02:54:52', '2021-04-22 02:54:52'),
(2, 1, 6, '1619100527.tutorial_logbook_web1.pdf', '2021-04-22 07:08:47', '2021-04-22 07:08:47');

-- --------------------------------------------------------

--
-- Table structure for table `tugas_siswa_pengetahuans`
--

CREATE TABLE IF NOT EXISTS `tugas_siswa_pengetahuans` (
  `id` bigint(20) unsigned NOT NULL,
  `penilaian_pengetahuan_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `filename_path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tugas_siswa_pengetahuans`
--

INSERT INTO `tugas_siswa_pengetahuans` (`id`, `penilaian_pengetahuan_id`, `user_id`, `filename_path`, `created_at`, `updated_at`) VALUES
(1, 2, 4, 'oke', NULL, NULL),
(2, 4, 8, '1619097980.yoggapw-dikonversi[1].pdf', '2021-04-22 06:26:20', '2021-04-22 06:26:20'),
(3, 4, 6, '1619099009.vpngate_vpn115758508.opengw.net_tcp_1671.ovpn', '2021-04-22 06:43:29', '2021-04-22 06:43:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verify_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `hapus` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `token`, `verify_token`, `created_at`, `updated_at`, `active`, `hapus`) VALUES
(1, '4892118481', '$2y$10$VtSxgzGRFmmAxsbOanQJpe4PoQOqtvGJ53RRo1nPuAJpd87rOu8.e', NULL, NULL, NULL, '2021-06-22 00:05:46', 0, 0),
(2, '9630159739', '$2y$10$jogAhsur6Si7jFJ9IcqBFe9RykIRw0tdqtYl3rMOgtO00MNAFjE3e', NULL, NULL, NULL, '2021-06-22 00:02:19', 0, 0),
(3, '9630159739', '$2y$10$GT8DC/RyTOe3PvIevhLs3u.PApaxbdtu/ok3tWxqLeJaMv24wDqW.', NULL, NULL, NULL, NULL, 0, 0),
(4, '2766170294', '$2y$10$8W5XSqBNaGdcUkSSoKTtMeC4bSGL1A9I5sSC0wFjO7fzF630GJyku', NULL, NULL, NULL, '2021-05-30 23:14:38', 0, 0),
(5, '7724909893', '$2y$10$iZGAwJi3uNiV7d04AoRC3.wqIdXVDITpcVoBSIVLzVjd9nKlGigM.', NULL, NULL, NULL, NULL, 0, 0),
(6, '901247874124', '$2y$10$zDiaF3oRkHe4/NUyXIb8pe8bpkhoYlDKW4YhjYYOq7NMkZ3gu3w2m', NULL, NULL, '2021-04-19 08:17:36', '2021-06-21 23:39:18', 0, 0),
(7, '222222', '$2y$10$JWFeuBSaWGMckKr4l3oqee36fXI0DH2BCTudQy8EGMnY5sRIgLsh6', NULL, NULL, '2021-04-19 08:19:29', '2021-06-22 19:25:41', 1, 0),
(8, '3123124124', '$2y$10$PAyngHaRebsHcTAiH9Ey5O8mttoT8NoY3p/9G5tFn6c2F5QC08asm', NULL, NULL, '2021-04-19 09:00:06', '2021-05-31 11:58:34', 0, 0),
(9, 'bb', '$2y$10$l5UMlxUD/Iy3hRVprdUC5eaDWMTgoRjwNpnMUUzmRYVO.CZXTZhFu', NULL, NULL, '2021-05-07 12:59:57', '2021-05-07 12:59:57', 0, 0),
(10, '345345345', '$2y$10$OXFMySihFs3x7zNDkp/duu/.O6PkUnoTWoe8uV67zjLgpp8S/ia0W', NULL, NULL, '2021-06-17 07:22:16', '2021-06-22 00:00:31', 0, 0),
(11, '199009052019031024', '$2y$10$h/XX2QpXznIdEk9NRuQ3/eikD6OejDJgYMkto85aPBA428OWg8PpO', NULL, NULL, '2021-06-17 07:23:06', '2021-06-17 07:23:06', 0, 0),
(33, '77777', '$2y$10$WUTRbE4Q/G2ehY12boGOO.fYAQsrh9JctvFQiFiCEgoBX9c0g0Smq', NULL, NULL, '2021-06-17 19:40:04', '2021-06-17 20:22:46', 0, 1),
(57, '363636363636', '$2y$10$2uvAmkhaf3VWl5CF/ujC6uuMbKb7wGULfNr24aOY/8ErPb2DyhjHC', NULL, NULL, '2021-06-17 20:23:27', '2021-06-17 20:23:55', 0, 1),
(58, '3123123', '$2y$10$eWBAdOOLGffFZde7H85.n.hgqltBcUlhiWNLHqlaO26uL2Z9emkxO', NULL, NULL, '2021-06-21 23:56:33', '2021-06-22 00:06:23', 1, 0),
(59, '74816348123', '$2y$10$PVfID2MEXk8YarT29YTzw.JI6JkVlbtk9x89hOcxtWMfb5XB1QyzW', NULL, NULL, '2021-06-21 23:58:58', '2021-06-22 00:02:39', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE IF NOT EXISTS `user_details` (
  `id` bigint(20) unsigned NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat_lahir` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `nisn_or_nip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_masuk` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `kelas_id` int(11) DEFAULT NULL,
  `mobile_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mapel_id` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `hapus` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `photo`, `name`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `nisn_or_nip`, `tahun_masuk`, `email`, `user_id`, `role_id`, `last_login`, `kelas_id`, `mobile_phone`, `full_address`, `mapel_id`, `status`, `hapus`, `created_at`, `updated_at`) VALUES
(1, NULL, 'w', NULL, NULL, NULL, '4892118481', NULL, NULL, 1, 1, '2021-04-17 09:27:20', NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(2, NULL, 'k', NULL, NULL, NULL, '9630159739', NULL, NULL, 2, 2, '2021-04-19 14:15:13', NULL, NULL, NULL, 2, 0, 0, NULL, NULL),
(3, NULL, 'q', NULL, NULL, NULL, '9820460350', NULL, NULL, 3, 3, '2021-04-17 09:28:06', NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(4, NULL, 'coklah', 'perempuan', 'banyuwangi', '2021-04-09', '901247874124', '2019', 'verrnayb@gmail.com', 6, 3, '2021-04-19 15:17:36', NULL, NULL, NULL, NULL, 0, 0, '2021-04-19 08:17:36', '2021-04-19 08:17:36'),
(5, '197906102005011011-SURYADI,_S.Pd.,M.M.-4.jpg', 'SURYADI, S.Pd.,M.M.', 'laki-laki', 'banyuwangi', NULL, '197906102005011011', '2004', 'carinahafizah@gmail.com', 7, 2, '2021-06-23 02:28:18', NULL, NULL, NULL, 3, 0, 0, '2021-04-19 08:19:29', '2021-06-22 19:28:18'),
(6, NULL, 'aku bagus', 'perempuan', 'banyuwangi', '2021-04-01', '3123124124', '2020', 'm@gmail.com', 8, 3, '2021-04-19 16:01:53', NULL, NULL, NULL, NULL, 0, 0, '2021-04-19 09:00:06', '2021-04-19 09:00:06'),
(7, NULL, '2213123213', 'laki-laki', 'wqe', '2021-05-11', 'bb', '2021', 'v@gmail.com', 9, 3, '2021-05-07 08:59:57', NULL, NULL, NULL, NULL, 0, 0, '2021-05-07 12:59:57', '2021-05-07 12:59:57'),
(8, NULL, 'fgdegdfgdf', 'laki-laki', 'sdfsdfsdfsdf', '2006-01-31', '345345345', '2019', 'siswa@siswa.com', 10, 3, '2021-06-17 14:22:16', NULL, NULL, NULL, NULL, 0, 0, '2021-06-17 07:22:16', '2021-06-17 07:22:16'),
(9, NULL, 'sepyan purnomo', 'laki-laki', 'banyuwangi', NULL, '199009052019031024', '2018', 'vian@vian.zom', 11, 2, '2021-06-18 03:01:48', NULL, NULL, NULL, 1, 0, 0, '2021-06-17 07:23:06', '2021-06-17 20:01:48'),
(13, NULL, 'Kaja 2', 'laki-laki', 'Banyuwangi', '2021-06-03', '77777', '2021', 'Kaja@kaja.com', 33, 3, '2021-06-18 03:22:46', NULL, NULL, NULL, NULL, 0, 1, '2021-06-17 19:40:05', '2021-06-17 20:22:46'),
(17, NULL, 'Muhammad Nabil Tamami', 'laki-laki', 'Banyuwangi', NULL, '363636363636', '2017', 'nabil@admin.com', 57, 2, '2021-06-18 03:23:55', NULL, NULL, NULL, 1, 0, 1, '2021-06-17 20:23:27', '2021-06-17 20:23:55'),
(18, NULL, 'gg', 'laki-laki', 'banyuwangi', NULL, '3123123', '2016', 'verrandyb@gmail.com', 58, 2, '2021-06-22 06:56:33', NULL, NULL, NULL, 1, 0, 0, '2021-06-21 23:56:33', '2021-06-21 23:56:33'),
(19, NULL, 'verr', 'laki-laki', 'banyuwangi', '2021-02-22', '74816348123', '2023', 'verrandyb@gmail.com', 59, 3, '2021-06-22 06:58:58', NULL, NULL, NULL, NULL, 0, 0, '2021-06-21 23:58:58', '2021-06-21 23:58:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absens`
--
ALTER TABLE `absens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `block_kelas_mapels`
--
ALTER TABLE `block_kelas_mapels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `var` (`var`);

--
-- Indexes for table `daftar_kelas`
--
ALTER TABLE `daftar_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurnal_gurus`
--
ALTER TABLE `jurnal_gurus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keterampilan_kompetensi_dasars`
--
ALTER TABLE `keterampilan_kompetensi_dasars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kompetensi_dasars`
--
ALTER TABLE `kompetensi_dasars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_jadwal_pelajarans`
--
ALTER TABLE `master_jadwal_pelajarans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_jurusans`
--
ALTER TABLE `master_jurusans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_kejadian_jurnals`
--
ALTER TABLE `master_kejadian_jurnals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_kelas`
--
ALTER TABLE `master_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_kode_kelas`
--
ALTER TABLE `master_kode_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_kompetensi_intis`
--
ALTER TABLE `master_kompetensi_intis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_k_k_m_s`
--
ALTER TABLE `master_k_k_m_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_mapels`
--
ALTER TABLE `master_mapels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_nilai_keterampilans`
--
ALTER TABLE `master_nilai_keterampilans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_nilai_pengetahuans`
--
ALTER TABLE `master_nilai_pengetahuans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_penilaian_keterampilans`
--
ALTER TABLE `master_penilaian_keterampilans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_penilaian_pengetahuans`
--
ALTER TABLE `master_penilaian_pengetahuans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_rpps`
--
ALTER TABLE `master_rpps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_semesters`
--
ALTER TABLE `master_semesters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_skema_keterampilans`
--
ALTER TABLE `master_skema_keterampilans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_skema_pengetahuans`
--
ALTER TABLE `master_skema_pengetahuans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materi_bahan_belajars`
--
ALTER TABLE `materi_bahan_belajars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`),
  ADD KEY `name` (`name`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `menu_kelas`
--
ALTER TABLE `menu_kelas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`),
  ADD KEY `name` (`name`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `menu_roles`
--
ALTER TABLE `menu_roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_id` (`menu_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `menu_role_kelas`
--
ALTER TABLE `menu_role_kelas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_id` (`menu_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `penilaian_kompetensi_dasars`
--
ALTER TABLE `penilaian_kompetensi_dasars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name_role`);

--
-- Indexes for table `rombel_kelas`
--
ALTER TABLE `rombel_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting_semesters`
--
ALTER TABLE `setting_semesters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tahun_akademiks`
--
ALTER TABLE `tahun_akademiks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tugas_siswas`
--
ALTER TABLE `tugas_siswas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tugas_siswa_keterampilans`
--
ALTER TABLE `tugas_siswa_keterampilans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tugas_siswa_pengetahuans`
--
ALTER TABLE `tugas_siswa_pengetahuans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nisn_or_nip` (`nisn_or_nip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absens`
--
ALTER TABLE `absens`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `block_kelas_mapels`
--
ALTER TABLE `block_kelas_mapels`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `daftar_kelas`
--
ALTER TABLE `daftar_kelas`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jurnal_gurus`
--
ALTER TABLE `jurnal_gurus`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `keterampilan_kompetensi_dasars`
--
ALTER TABLE `keterampilan_kompetensi_dasars`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `kompetensi_dasars`
--
ALTER TABLE `kompetensi_dasars`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `master_jadwal_pelajarans`
--
ALTER TABLE `master_jadwal_pelajarans`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `master_jurusans`
--
ALTER TABLE `master_jurusans`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `master_kejadian_jurnals`
--
ALTER TABLE `master_kejadian_jurnals`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `master_kelas`
--
ALTER TABLE `master_kelas`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `master_kode_kelas`
--
ALTER TABLE `master_kode_kelas`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `master_kompetensi_intis`
--
ALTER TABLE `master_kompetensi_intis`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `master_k_k_m_s`
--
ALTER TABLE `master_k_k_m_s`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `master_mapels`
--
ALTER TABLE `master_mapels`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `master_nilai_keterampilans`
--
ALTER TABLE `master_nilai_keterampilans`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `master_nilai_pengetahuans`
--
ALTER TABLE `master_nilai_pengetahuans`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `master_penilaian_keterampilans`
--
ALTER TABLE `master_penilaian_keterampilans`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `master_penilaian_pengetahuans`
--
ALTER TABLE `master_penilaian_pengetahuans`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `master_rpps`
--
ALTER TABLE `master_rpps`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `master_semesters`
--
ALTER TABLE `master_semesters`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `master_skema_keterampilans`
--
ALTER TABLE `master_skema_keterampilans`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `master_skema_pengetahuans`
--
ALTER TABLE `master_skema_pengetahuans`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `materi_bahan_belajars`
--
ALTER TABLE `materi_bahan_belajars`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `menu_kelas`
--
ALTER TABLE `menu_kelas`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `menu_roles`
--
ALTER TABLE `menu_roles`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `menu_role_kelas`
--
ALTER TABLE `menu_role_kelas`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=121;
--
-- AUTO_INCREMENT for table `penilaian_kompetensi_dasars`
--
ALTER TABLE `penilaian_kompetensi_dasars`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `rombel_kelas`
--
ALTER TABLE `rombel_kelas`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `setting_semesters`
--
ALTER TABLE `setting_semesters`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tahun_akademiks`
--
ALTER TABLE `tahun_akademiks`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tugas_siswas`
--
ALTER TABLE `tugas_siswas`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tugas_siswa_keterampilans`
--
ALTER TABLE `tugas_siswa_keterampilans`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tugas_siswa_pengetahuans`
--
ALTER TABLE `tugas_siswa_pengetahuans`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
