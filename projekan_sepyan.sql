-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2021 at 09:38 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projekan_sepyan`
--

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
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenjang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `mapel_id` int(11) NOT NULL,
  `kkm` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `master_jurusans`
--

CREATE TABLE `master_jurusans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `master_kelas`
--

CREATE TABLE `master_kelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `master_mapels`
--

CREATE TABLE `master_mapels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_mapel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_mapel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reorder` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_kelas`
--

INSERT INTO `menu_kelas` (`id`, `parent_code`, `code`, `name`, `status`, `icon`, `reorder`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Kelas', '/kelas', 'Kelas', '2', '', '1', '2021-01-11 06:54:05', '2021-01-11 06:58:19', NULL),
(2, 'Kelas', '/kelas/chat', 'Chat', '1', 'message-square', '1', '2021-01-11 06:54:05', '2021-01-18 04:53:28', NULL),
(3, 'Kelas', '/kelas/video_conference', 'Video Conference', '1', 'video', '2', '2021-01-11 06:54:05', '2021-01-18 04:53:31', NULL),
(4, 'Kelas', '/kelas/absensi_kelas', 'Absensi Kelas', '1', 'users', '3', '2021-01-11 06:54:05', '2021-01-18 04:53:33', NULL),
(5, 'Kelas', '/kelas/kompetensi_dasar', 'Kompetensi Dasar', '1', 'calendar', '4', '2021-01-11 06:54:05', '2021-01-18 04:53:35', NULL),
(6, 'Kelas', '/kelas/rpp', 'RPP', '1', 'align-right', '5', '2021-01-11 06:54:05', '2021-01-18 04:53:38', NULL),
(7, 'Kelas', '/kelas/kejadian_jurnal', 'Kejadian / Jurnal', '1', 'book', '6', '2021-01-11 06:54:05', '2021-01-18 04:53:40', NULL),
(8, 'Kelas', '/kelas/materi_bahan_ajar', 'Materi / Bahan Ajar', '1', 'book', '7', '2021-01-11 06:54:05', '2021-01-18 04:53:45', NULL),
(9, 'Kelas', '/kelas/daftar_siswa_kelas', 'Daftar Siswa Kelas', '1', 'users', '8', '2021-01-11 06:54:05', '2021-01-18 04:53:47', NULL),
(10, 'Kelas', '/kelas/cbt', 'CBT', '1', 'airplay', '9', '2021-01-11 06:54:05', '2021-01-18 04:53:48', NULL),
(11, 'Kelas', '/kelas/penilaian_kd3', 'Penilaian KD 3', '1', 'file-text', '10', '2021-01-11 06:54:05', '2021-01-18 04:53:50', NULL),
(12, 'Kelas', '/kelas/penilaian_kd4', 'Penilaian KD 4', '1', 'file-text', '11', '2021-01-11 06:54:05', '2021-01-18 04:53:52', NULL),
(13, 'Kelas', '/kelas/penilaian_semester', 'Penilaian Semester', '1', 'file-text', '12', '2021-01-11 06:54:05', '2021-01-18 04:53:54', NULL),
(14, 'Kelas', '/kelas/rekap_rapor', 'Rekap Rapor', '1', 'file-text', '13', '2021-01-11 06:54:05', '2021-01-18 04:53:56', NULL),
(15, 'Kelas', '/kelas/monitor_aktifitas', 'Monitor Aktifitas', '1', 'radio', '14', '2021-01-11 06:54:05', '2021-01-18 04:53:57', NULL),
(16, 'Kelas', '/kelas/pengaturan_kelas', 'Pengaturan Kelas', '1', 'settings', '15', '2021-01-11 06:54:05', '2021-01-18 04:53:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menu_roles`
--

CREATE TABLE `menu_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu_role_kelas`
--

CREATE TABLE `menu_role_kelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(155, '2014_10_12_000000_create_users_table', 1),
(156, '2014_10_12_100000_create_password_resets_table', 1),
(157, '2019_08_19_000000_create_failed_jobs_table', 1),
(158, '2021_02_11_133337_create_master_jadwal_pelajarans_table', 1),
(159, '2021_02_11_133550_create_master_jurusans_table', 1),
(160, '2021_02_11_133658_create_master_kelas_table', 1),
(161, '2021_02_11_133720_create_master_mapels_table', 1),
(162, '2021_02_11_133804_create_roles_table', 1),
(163, '2021_02_11_133827_create_user_details_table', 1),
(164, '2021_02_11_151425_create_menus_table', 1),
(165, '2021_02_11_151503_create_menu_kelas_table', 1),
(166, '2021_02_11_152323_create_menu_roles_table', 1),
(167, '2021_02_11_152728_create_menu_role_kelas_table', 1),
(168, '2021_02_11_153703_create_master_semesters_table', 1);

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
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `verify_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `token`, `role_id`, `verify_token`, `created_at`, `updated_at`) VALUES
(1, 'admin@admin.com', '$2y$10$EEf.Vouib76DkiKLGNiKOOawEslT1OEbJ.6P/o9YW8N.QZmXe7JIu', NULL, 1, NULL, '2021-02-11 09:48:20', '2021-02-11 09:48:20');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `mobile_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `verify_token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_roles`
--
ALTER TABLE `menu_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_role_kelas`
--
ALTER TABLE `menu_role_kelas`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_jadwal_pelajarans`
--
ALTER TABLE `master_jadwal_pelajarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_jurusans`
--
ALTER TABLE `master_jurusans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_kelas`
--
ALTER TABLE `master_kelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_mapels`
--
ALTER TABLE `master_mapels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `menu_roles`
--
ALTER TABLE `menu_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu_role_kelas`
--
ALTER TABLE `menu_role_kelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
