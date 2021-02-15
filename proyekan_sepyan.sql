-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 15, 2021 at 03:45 PM
-- Server version: 10.5.8-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyekan_sepyan`
--

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `id` bigint(20) NOT NULL,
  `var` varchar(255) NOT NULL,
  `value` longtext NOT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`id`, `var`, `value`, `desc`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'APP_NAME', 'Kelas Belajar', 'application name', '2021-01-07 06:55:37', '2021-01-07 06:55:37', NULL),
(2, 'APP_VERSION', '1.0.0', 'aplication version', '2021-01-07 06:55:37', '2021-01-07 06:55:37', NULL),
(3, 'LOGIN_SIGNATURE', '_!KELAS!_', 'signature for login account', '2021-01-07 06:55:37', '2021-01-07 06:55:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `master_jadwal_pelajarans`
--

CREATE TABLE `master_jadwal_pelajarans` (
  `id` int(6) NOT NULL,
  `nama_kelas` varchar(100) DEFAULT '',
  `guru` varchar(100) DEFAULT '',
  `jenjang` varchar(50) DEFAULT '',
  `kelas` varchar(50) DEFAULT '',
  `mata_pelajaran` varchar(50) DEFAULT '',
  `kkm` int(5) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `master_jurusans`
--

CREATE TABLE `master_jurusans` (
  `id` int(11) NOT NULL,
  `jurusan` varchar(50) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_jurusans`
--

INSERT INTO `master_jurusans` (`id`, `jurusan`) VALUES
(1, 'IPA'),
(2, 'IPS');

-- --------------------------------------------------------

--
-- Table structure for table `master_kejadian_jurnals`
--

CREATE TABLE `master_kejadian_jurnals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `kejadian` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `butir_sikap` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hapus` tinyint(1) NOT NULL DEFAULT 0,
  `tindakan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tindak_lanjut` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `master_kejadian_jurnals`
--

INSERT INTO `master_kejadian_jurnals` (`id`, `user_id`, `waktu`, `kejadian`, `butir_sikap`, `hapus`, `tindakan`, `tindak_lanjut`, `created_at`, `updated_at`) VALUES
(1, 9, '2021-02-13 17:15:16', 'dqw', 'Jujur', 1, 'Positif (+)', 'eewqe', '2021-02-13 09:53:20', '2021-02-13 10:15:16'),
(2, 9, '2021-02-13 17:21:07', 'dqd', 'Tanggung Jawab', 1, 'Positif (+)', 'dqwdqwdqdwqdddddddddddddddddddddddddddddddd', '2021-02-13 10:16:39', '2021-02-13 10:21:07'),
(3, 9, '2021-02-15 06:00:02', 'eqwe', 'Tanggung Jawab', 1, 'Positif (+)', 'ewqe', '2021-02-13 10:24:33', '2021-02-14 23:00:02'),
(4, 9, '2021-02-15 05:59:00', 'eqwe', 'Jujur', 1, 'Positif (+)', 'ewqeqe', '2021-02-14 22:46:08', '2021-02-14 22:59:00');

-- --------------------------------------------------------

--
-- Table structure for table `master_kelas`
--

CREATE TABLE `master_kelas` (
  `id` int(11) NOT NULL,
  `kode` varchar(5) DEFAULT NULL,
  `kelas` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_kelas`
--

INSERT INTO `master_kelas` (`id`, `kode`, `kelas`) VALUES
(1, 'X', 'Kelas X'),
(2, 'XI', 'Kelas XI'),
(3, 'XII', 'Kelas XII');

-- --------------------------------------------------------

--
-- Table structure for table `master_mapels`
--

CREATE TABLE `master_mapels` (
  `id` int(6) NOT NULL,
  `kode_mapel` varchar(50) DEFAULT '',
  `nama_mapel` varchar(200) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_mapels`
--

INSERT INTO `master_mapels` (`id`, `kode_mapel`, `nama_mapel`) VALUES
(1, '1', 'Bahasa Indonesia'),
(2, '2', 'Bahasa Inggris'),
(3, '3', 'Matematika'),
(4, '4', 'Biologi'),
(5, '5', 'Fisika');

-- --------------------------------------------------------

--
-- Table structure for table `master_semesters`
--

CREATE TABLE `master_semesters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) NOT NULL,
  `parent_code` varchar(255) DEFAULT NULL,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0:nonactive,  1:active-child-dropdown, 2:active-parent-dropdown, 3:single',
  `icon` varchar(255) DEFAULT NULL,
  `reorder` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `parent_code`, `code`, `name`, `status`, `icon`, `reorder`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Teacher', 'teacher', 'Teacher', 2, NULL, 1, '2021-01-07 02:55:56', '2021-01-07 06:37:39', NULL),
(2, 'Teacher', '/matapelajaran', 'Mata Pelajaran', 1, 'book', 1, '2021-01-07 02:56:10', '2021-01-07 07:14:57', NULL),
(3, 'Teacher', '/materi', 'Materi dan Bahan', 1, 'book-open', 2, '2021-01-07 02:56:20', '2021-01-07 07:15:03', NULL),
(4, 'Teacher', '/absen', 'Absensi Guru', 1, 'activity', 3, '2021-01-07 02:56:20', '2021-01-07 07:15:05', NULL),
(5, 'Students', 'student', 'Student', 2, NULL, 2, '2021-01-07 06:22:40', '2021-01-07 06:48:31', NULL),
(6, 'Students', 'students', 'Materi dan Bahan', 1, 'book', 1, '2021-01-07 06:22:40', '2021-01-07 06:48:32', NULL),
(7, 'Kepala Sekolah', 'kepalasekolah', 'Kepala Sekolah', 2, NULL, 3, '2021-01-07 06:37:16', '2021-01-07 06:48:37', NULL),
(8, 'Kepala Sekolah', 'kepalasekolahh', 'Menu Kepala Sekolah', 1, 'book', 1, '2021-01-07 06:37:31', '2021-01-07 06:48:38', NULL),
(9, 'Kurikulum', 'kurikulum', 'Kurikulum', 2, NULL, 4, '2021-01-07 06:40:59', '2021-01-07 06:48:40', NULL),
(10, 'Kurikulum', 'kurikulumm', 'Menu Kurikulum', 1, 'book', 1, '2021-01-07 06:41:11', '2021-01-07 06:48:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menu_kelas`
--

CREATE TABLE `menu_kelas` (
  `id` bigint(20) NOT NULL,
  `parent_code` varchar(255) DEFAULT NULL,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0:nonactive,  1:active-child-dropdown, 2:active-parent-dropdown, 3:single',
  `icon` varchar(255) DEFAULT NULL,
  `reorder` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_kelas`
--

INSERT INTO `menu_kelas` (`id`, `parent_code`, `code`, `name`, `status`, `icon`, `reorder`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Kelas', '/kelas', 'Kelas', 2, NULL, 1, '2021-01-11 06:54:05', '2021-01-11 06:58:19', NULL),
(2, 'Kelas', '/kelas/chat', 'Chat', 1, 'message-square', 1, '2021-01-11 06:54:05', '2021-01-18 04:53:28', NULL),
(3, 'Kelas', '/kelas/video_conference', 'Video Conference', 1, 'video', 2, '2021-01-11 06:54:05', '2021-01-18 04:53:31', NULL),
(4, 'Kelas', '/kelas/absensi_kelas', 'Absensi Kelas', 1, 'users', 3, '2021-01-11 06:54:05', '2021-01-18 04:53:33', NULL),
(5, 'Kelas', '/kelas/kompetensi_dasar', 'Kompetensi Dasar', 1, 'calendar', 4, '2021-01-11 06:54:05', '2021-01-18 04:53:35', NULL),
(6, 'Kelas', '/kelas/rpp', 'RPP', 1, 'align-right', 5, '2021-01-11 06:54:05', '2021-01-18 04:53:38', NULL),
(7, 'Kelas', '/kelas/kejadian_jurnal', 'Kejadian / Jurnal', 1, 'book', 6, '2021-01-11 06:54:05', '2021-01-18 04:53:40', NULL),
(8, 'Kelas', '/kelas/materi_bahan_ajar', 'Materi / Bahan Ajar', 1, 'book', 7, '2021-01-11 06:54:05', '2021-01-18 04:53:45', NULL),
(9, 'Kelas', '/kelas/daftar_siswa_kelas', 'Daftar Siswa Kelas', 1, 'users', 8, '2021-01-11 06:54:05', '2021-01-18 04:53:47', NULL),
(10, 'Kelas', '/kelas/cbt', 'CBT', 1, 'airplay', 9, '2021-01-11 06:54:05', '2021-01-18 04:53:48', NULL),
(11, 'Kelas', '/kelas/penilaian_pengetahuan ', 'Penilaian Pengetahuan ', 1, 'file-text', 10, '2021-01-11 06:54:05', '2021-02-15 08:40:56', NULL),
(12, 'Kelas', '/kelas/penilaian_kd4', 'Penilaian KD 4', 1, 'file-text', 11, '2021-01-11 06:54:05', '2021-01-18 04:53:52', NULL),
(13, 'Kelas', '/kelas/penilaian_semester', 'Penilaian Semester', 1, 'file-text', 12, '2021-01-11 06:54:05', '2021-01-18 04:53:54', NULL),
(14, 'Kelas', '/kelas/rekap_rapor', 'Rekap Rapor', 1, 'file-text', 13, '2021-01-11 06:54:05', '2021-01-18 04:53:56', NULL),
(15, 'Kelas', '/kelas/monitor_aktifitas', 'Monitor Aktifitas', 1, 'radio', 14, '2021-01-11 06:54:05', '2021-01-18 04:53:57', NULL),
(16, 'Kelas', '/kelas/pengaturan_kelas', 'Pengaturan Kelas', 1, 'settings', 15, '2021-01-11 06:54:05', '2021-01-18 04:53:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menu_roles`
--

CREATE TABLE `menu_roles` (
  `id` bigint(20) NOT NULL,
  `menu_id` bigint(20) NOT NULL,
  `role_id` bigint(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_roles`
--

INSERT INTO `menu_roles` (`id`, `menu_id`, `role_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, '2021-01-07 02:57:07', '2021-01-07 02:57:07', NULL),
(2, 2, 1, '2021-01-07 02:57:12', '2021-01-07 02:57:17', NULL),
(3, 3, 1, '2021-01-07 02:57:12', '2021-01-07 02:57:17', NULL),
(4, 4, 1, '2021-01-07 02:57:12', '2021-01-07 02:57:17', NULL),
(5, 5, 5, '2021-01-07 06:27:49', '2021-01-07 06:40:18', NULL),
(6, 6, 5, '2021-01-07 06:27:51', '2021-01-07 06:40:17', NULL),
(7, 7, 2, '2021-01-07 06:40:30', '2021-01-07 06:40:30', NULL),
(8, 8, 2, '2021-01-07 06:40:32', '2021-01-07 06:40:32', NULL),
(9, 9, 3, '2021-01-07 06:41:29', '2021-01-07 06:41:29', NULL),
(10, 10, 3, '2021-01-07 06:41:31', '2021-01-07 06:41:31', NULL),
(11, 5, 1, '2021-01-07 06:42:22', '2021-01-07 06:42:22', NULL),
(12, 6, 1, '2021-01-07 06:42:24', '2021-01-07 06:42:24', NULL),
(13, 7, 1, '2021-01-07 06:42:26', '2021-01-07 06:42:26', NULL),
(14, 8, 1, '2021-01-07 06:42:30', '2021-01-07 06:42:30', NULL),
(15, 9, 1, '2021-01-07 06:42:33', '2021-01-07 06:42:33', NULL),
(16, 10, 1, '2021-01-07 06:42:35', '2021-01-07 06:42:35', NULL),
(17, 1, 4, '2021-01-07 06:46:40', '2021-01-07 06:46:40', NULL),
(18, 2, 4, '2021-01-07 06:46:40', '2021-01-07 06:46:40', NULL),
(19, 3, 4, '2021-01-07 06:46:40', '2021-01-07 06:46:40', NULL),
(20, 4, 4, '2021-01-07 06:46:40', '2021-01-07 06:46:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menu_role_kelas`
--

CREATE TABLE `menu_role_kelas` (
  `id` bigint(20) NOT NULL,
  `menu_id` bigint(20) NOT NULL,
  `role_id` bigint(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_02_11_153703_create_master_semesters_table', 2),
(6, '2014_10_12_000000_create_users_table', 3),
(13, '2021_02_13_095112_create_master_kejadian_jurnals_table', 4);

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) NOT NULL,
  `name_role` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name_role`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'administrator', '2021-02-13 04:46:21', '2021-02-13 04:46:21', NULL),
(2, 'kepala sekolah', '2021-02-13 04:46:21', '2021-02-13 04:46:21', NULL),
(3, 'kurikulum', '2021-02-13 04:46:21', '2021-02-13 04:46:21', NULL),
(4, 'guru', '2021-02-13 04:46:21', '2021-02-13 04:46:21', NULL),
(5, 'siswa', '2021-02-13 04:46:21', '2021-02-13 04:46:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `verify_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `token`, `role_id`, `verify_token`, `created_at`, `updated_at`) VALUES
(1, 'FTAxJLTLCT@gmail.com', '$2y$10$NVqvSgw/5hWrFJ4OdTmRnuDQaarNaRU.YYhRF035RYf6ODsK1rxLe', NULL, 1, NULL, NULL, NULL),
(5, 'WdoNswn5xc@gmail.com', '$2y$10$ZE0jXc.n7zNBOVkB0QMUvexV.EZCNierGZ11yK8upkR9EzLXkLrUy', NULL, 1, NULL, NULL, NULL),
(6, 'PqlH3enexz@gmail.com', '$2y$10$Vo2ew0IhpLpdioNOvwsRKO5rornPo6.tzlMXV5nDruEq5bNhp8S.W', NULL, 2, NULL, NULL, NULL),
(7, 'h2wBzszylL@gmail.com', '$2y$10$kexd3KSfVkWxDvsxPXATT.9AJIY9rF5FXZdei95XN.Nj0A9ETrL7G', NULL, 3, NULL, NULL, NULL),
(8, 'mhouVNXD6o@gmail.com', '$2y$10$IGG6F4dqiBk5GIpXHG..GuQhAII3es4ji9qpouEZPlT5KnQUdVxHK', NULL, 4, NULL, NULL, NULL),
(9, 'SgLGEPL7IO@gmail.com', '$2y$10$brdPQqeX8WaGwABK59skwuCVlJGG6xsNLW.D4Lt/u7Fr4Ryl1fs6e', NULL, 5, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nisn_or_nip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `mobile_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `var` (`var`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
  ADD PRIMARY KEY (`id`),
  ADD KEY `master_kejadian_jurnals_user_id_foreign` (`user_id`);

--
-- Indexes for table `master_kelas`
--
ALTER TABLE `master_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_mapels`
--
ALTER TABLE `master_mapels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_semesters`
--
ALTER TABLE `master_semesters`
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
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name_role`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_jadwal_pelajarans`
--
ALTER TABLE `master_jadwal_pelajarans`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_jurusans`
--
ALTER TABLE `master_jurusans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `master_kejadian_jurnals`
--
ALTER TABLE `master_kejadian_jurnals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `master_kelas`
--
ALTER TABLE `master_kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `master_mapels`
--
ALTER TABLE `master_mapels`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `master_semesters`
--
ALTER TABLE `master_semesters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `menu_kelas`
--
ALTER TABLE `menu_kelas`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `menu_roles`
--
ALTER TABLE `menu_roles`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `menu_role_kelas`
--
ALTER TABLE `menu_role_kelas`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `master_kejadian_jurnals`
--
ALTER TABLE `master_kejadian_jurnals`
  ADD CONSTRAINT `master_kejadian_jurnals_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
