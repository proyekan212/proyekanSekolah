/*
Navicat MySQL Data Transfer

Source Server         : LOCALHOST
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : vian_kelaskita

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2021-01-26 15:27:59
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for config
-- ----------------------------
DROP TABLE IF EXISTS `config`;
CREATE TABLE `config` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `var` varchar(255) NOT NULL,
  `value` longtext NOT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `var` (`var`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of config
-- ----------------------------
INSERT INTO `config` VALUES ('1', 'APP_NAME', 'Kelas Belajar', 'application name', '2021-01-07 13:55:37', '2021-01-07 13:55:37', null);
INSERT INTO `config` VALUES ('2', 'APP_VERSION', '1.0.0', 'aplication version', '2021-01-07 13:55:37', '2021-01-07 13:55:37', null);
INSERT INTO `config` VALUES ('3', 'LOGIN_SIGNATURE', '_!KELAS!_', 'signature for login account', '2021-01-07 13:55:37', '2021-01-07 13:55:37', null);

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for master_jadwalpelajaran
-- ----------------------------
DROP TABLE IF EXISTS `master_jadwalpelajaran`;
CREATE TABLE `master_jadwalpelajaran` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `nama_kelas` varchar(100) DEFAULT '',
  `guru` varchar(100) DEFAULT '',
  `jenjang` varchar(50) DEFAULT '',
  `kelas` varchar(50) DEFAULT '',
  `mata_pelajaran` varchar(50) DEFAULT '',
  `kkm` int(5) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of master_jadwalpelajaran
-- ----------------------------

-- ----------------------------
-- Table structure for master_jurusan
-- ----------------------------
DROP TABLE IF EXISTS `master_jurusan`;
CREATE TABLE `master_jurusan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jurusan` varchar(50) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of master_jurusan
-- ----------------------------
INSERT INTO `master_jurusan` VALUES ('1', 'IPA');
INSERT INTO `master_jurusan` VALUES ('2', 'IPS');

-- ----------------------------
-- Table structure for master_kelas
-- ----------------------------
DROP TABLE IF EXISTS `master_kelas`;
CREATE TABLE `master_kelas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode` varchar(5) DEFAULT NULL,
  `kelas` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of master_kelas
-- ----------------------------
INSERT INTO `master_kelas` VALUES ('1', 'X', 'Kelas X');
INSERT INTO `master_kelas` VALUES ('2', 'XI', 'Kelas XI');
INSERT INTO `master_kelas` VALUES ('3', 'XII', 'Kelas XII');

-- ----------------------------
-- Table structure for master_mapel
-- ----------------------------
DROP TABLE IF EXISTS `master_mapel`;
CREATE TABLE `master_mapel` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `kode_mapel` varchar(50) DEFAULT '',
  `nama_mapel` varchar(200) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of master_mapel
-- ----------------------------
INSERT INTO `master_mapel` VALUES ('1', '1', 'Bahasa Indonesia');
INSERT INTO `master_mapel` VALUES ('2', '2', 'Bahasa Inggris');
INSERT INTO `master_mapel` VALUES ('3', '3', 'Matematika');
INSERT INTO `master_mapel` VALUES ('4', '4', 'Biologi');
INSERT INTO `master_mapel` VALUES ('5', '5', 'Fisika');

-- ----------------------------
-- Table structure for menu
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `parent_code` varchar(255) DEFAULT NULL,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0:nonactive,  1:active-child-dropdown, 2:active-parent-dropdown, 3:single',
  `icon` varchar(255) DEFAULT NULL,
  `reorder` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`),
  KEY `name` (`name`),
  KEY `status` (`status`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES ('1', 'Teacher', 'teacher', 'Teacher', '2', null, '1', '2021-01-07 09:55:56', '2021-01-07 13:37:39', null);
INSERT INTO `menu` VALUES ('2', 'Teacher', '/matapelajaran', 'Mata Pelajaran', '1', 'book', '1', '2021-01-07 09:56:10', '2021-01-07 14:14:57', null);
INSERT INTO `menu` VALUES ('3', 'Teacher', '/materi', 'Materi dan Bahan', '1', 'book-open', '2', '2021-01-07 09:56:20', '2021-01-07 14:15:03', null);
INSERT INTO `menu` VALUES ('4', 'Teacher', '/absen', 'Absensi Guru', '1', 'activity', '3', '2021-01-07 09:56:20', '2021-01-07 14:15:05', null);
INSERT INTO `menu` VALUES ('5', 'Students', 'student', 'Student', '2', null, '2', '2021-01-07 13:22:40', '2021-01-07 13:48:31', null);
INSERT INTO `menu` VALUES ('6', 'Students', 'students', 'Materi dan Bahan', '1', 'book', '1', '2021-01-07 13:22:40', '2021-01-07 13:48:32', null);
INSERT INTO `menu` VALUES ('7', 'Kepala Sekolah', 'kepalasekolah', 'Kepala Sekolah', '2', null, '3', '2021-01-07 13:37:16', '2021-01-07 13:48:37', null);
INSERT INTO `menu` VALUES ('8', 'Kepala Sekolah', 'kepalasekolahh', 'Menu Kepala Sekolah', '1', 'book', '1', '2021-01-07 13:37:31', '2021-01-07 13:48:38', null);
INSERT INTO `menu` VALUES ('9', 'Kurikulum', 'kurikulum', 'Kurikulum', '2', null, '4', '2021-01-07 13:40:59', '2021-01-07 13:48:40', null);
INSERT INTO `menu` VALUES ('10', 'Kurikulum', 'kurikulumm', 'Menu Kurikulum', '1', 'book', '1', '2021-01-07 13:41:11', '2021-01-07 13:48:41', null);

-- ----------------------------
-- Table structure for menu_kelas
-- ----------------------------
DROP TABLE IF EXISTS `menu_kelas`;
CREATE TABLE `menu_kelas` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `parent_code` varchar(255) DEFAULT NULL,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0:nonactive,  1:active-child-dropdown, 2:active-parent-dropdown, 3:single',
  `icon` varchar(255) DEFAULT NULL,
  `reorder` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`),
  KEY `name` (`name`),
  KEY `status` (`status`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of menu_kelas
-- ----------------------------
INSERT INTO `menu_kelas` VALUES ('1', 'Kelas', '/kelas', 'Kelas', '2', null, '1', '2021-01-11 13:54:05', '2021-01-11 13:58:19', null);
INSERT INTO `menu_kelas` VALUES ('2', 'Kelas', '/kelas/chat', 'Chat', '1', 'message-square', '1', '2021-01-11 13:54:05', '2021-01-18 11:53:28', null);
INSERT INTO `menu_kelas` VALUES ('3', 'Kelas', '/kelas/video_conference', 'Video Conference', '1', 'video', '2', '2021-01-11 13:54:05', '2021-01-18 11:53:31', null);
INSERT INTO `menu_kelas` VALUES ('4', 'Kelas', '/kelas/absensi_kelas', 'Absensi Kelas', '1', 'users', '3', '2021-01-11 13:54:05', '2021-01-18 11:53:33', null);
INSERT INTO `menu_kelas` VALUES ('5', 'Kelas', '/kelas/kompetensi_dasar', 'Kompetensi Dasar', '1', 'calendar', '4', '2021-01-11 13:54:05', '2021-01-18 11:53:35', null);
INSERT INTO `menu_kelas` VALUES ('6', 'Kelas', '/kelas/rpp', 'RPP', '1', 'align-right', '5', '2021-01-11 13:54:05', '2021-01-18 11:53:38', null);
INSERT INTO `menu_kelas` VALUES ('7', 'Kelas', '/kelas/kejadian_jurnal', 'Kejadian / Jurnal', '1', 'book', '6', '2021-01-11 13:54:05', '2021-01-18 11:53:40', null);
INSERT INTO `menu_kelas` VALUES ('8', 'Kelas', '/kelas/materi_bahan_ajar', 'Materi / Bahan Ajar', '1', 'book', '7', '2021-01-11 13:54:05', '2021-01-18 11:53:45', null);
INSERT INTO `menu_kelas` VALUES ('9', 'Kelas', '/kelas/daftar_siswa_kelas', 'Daftar Siswa Kelas', '1', 'users', '8', '2021-01-11 13:54:05', '2021-01-18 11:53:47', null);
INSERT INTO `menu_kelas` VALUES ('10', 'Kelas', '/kelas/cbt', 'CBT', '1', 'airplay', '9', '2021-01-11 13:54:05', '2021-01-18 11:53:48', null);
INSERT INTO `menu_kelas` VALUES ('11', 'Kelas', '/kelas/penilaian_kd3', 'Penilaian KD 3', '1', 'file-text', '10', '2021-01-11 13:54:05', '2021-01-18 11:53:50', null);
INSERT INTO `menu_kelas` VALUES ('12', 'Kelas', '/kelas/penilaian_kd4', 'Penilaian KD 4', '1', 'file-text', '11', '2021-01-11 13:54:05', '2021-01-18 11:53:52', null);
INSERT INTO `menu_kelas` VALUES ('13', 'Kelas', '/kelas/penilaian_semester', 'Penilaian Semester', '1', 'file-text', '12', '2021-01-11 13:54:05', '2021-01-18 11:53:54', null);
INSERT INTO `menu_kelas` VALUES ('14', 'Kelas', '/kelas/rekap_rapor', 'Rekap Rapor', '1', 'file-text', '13', '2021-01-11 13:54:05', '2021-01-18 11:53:56', null);
INSERT INTO `menu_kelas` VALUES ('15', 'Kelas', '/kelas/monitor_aktifitas', 'Monitor Aktifitas', '1', 'radio', '14', '2021-01-11 13:54:05', '2021-01-18 11:53:57', null);
INSERT INTO `menu_kelas` VALUES ('16', 'Kelas', '/kelas/pengaturan_kelas', 'Pengaturan Kelas', '1', 'settings', '15', '2021-01-11 13:54:05', '2021-01-18 11:53:59', null);

-- ----------------------------
-- Table structure for menu_role
-- ----------------------------
DROP TABLE IF EXISTS `menu_role`;
CREATE TABLE `menu_role` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `menu_id` bigint(20) NOT NULL,
  `role_id` bigint(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `menu_id` (`menu_id`),
  KEY `role_id` (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of menu_role
-- ----------------------------
INSERT INTO `menu_role` VALUES ('1', '1', '1', '2021-01-07 09:57:07', '2021-01-07 09:57:07', null);
INSERT INTO `menu_role` VALUES ('2', '2', '1', '2021-01-07 09:57:12', '2021-01-07 09:57:17', null);
INSERT INTO `menu_role` VALUES ('3', '3', '1', '2021-01-07 09:57:12', '2021-01-07 09:57:17', null);
INSERT INTO `menu_role` VALUES ('4', '4', '1', '2021-01-07 09:57:12', '2021-01-07 09:57:17', null);
INSERT INTO `menu_role` VALUES ('5', '5', '5', '2021-01-07 13:27:49', '2021-01-07 13:40:18', null);
INSERT INTO `menu_role` VALUES ('6', '6', '5', '2021-01-07 13:27:51', '2021-01-07 13:40:17', null);
INSERT INTO `menu_role` VALUES ('7', '7', '2', '2021-01-07 13:40:30', '2021-01-07 13:40:30', null);
INSERT INTO `menu_role` VALUES ('8', '8', '2', '2021-01-07 13:40:32', '2021-01-07 13:40:32', null);
INSERT INTO `menu_role` VALUES ('9', '9', '3', '2021-01-07 13:41:29', '2021-01-07 13:41:29', null);
INSERT INTO `menu_role` VALUES ('10', '10', '3', '2021-01-07 13:41:31', '2021-01-07 13:41:31', null);
INSERT INTO `menu_role` VALUES ('11', '5', '1', '2021-01-07 13:42:22', '2021-01-07 13:42:22', null);
INSERT INTO `menu_role` VALUES ('12', '6', '1', '2021-01-07 13:42:24', '2021-01-07 13:42:24', null);
INSERT INTO `menu_role` VALUES ('13', '7', '1', '2021-01-07 13:42:26', '2021-01-07 13:42:26', null);
INSERT INTO `menu_role` VALUES ('14', '8', '1', '2021-01-07 13:42:30', '2021-01-07 13:42:30', null);
INSERT INTO `menu_role` VALUES ('15', '9', '1', '2021-01-07 13:42:33', '2021-01-07 13:42:33', null);
INSERT INTO `menu_role` VALUES ('16', '10', '1', '2021-01-07 13:42:35', '2021-01-07 13:42:35', null);
INSERT INTO `menu_role` VALUES ('17', '1', '4', '2021-01-07 13:46:40', '2021-01-07 13:46:40', null);
INSERT INTO `menu_role` VALUES ('18', '2', '4', '2021-01-07 13:46:40', '2021-01-07 13:46:40', null);
INSERT INTO `menu_role` VALUES ('19', '3', '4', '2021-01-07 13:46:40', '2021-01-07 13:46:40', null);
INSERT INTO `menu_role` VALUES ('20', '4', '4', '2021-01-07 13:46:40', '2021-01-07 13:46:40', null);

-- ----------------------------
-- Table structure for menu_role_kelas
-- ----------------------------
DROP TABLE IF EXISTS `menu_role_kelas`;
CREATE TABLE `menu_role_kelas` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `menu_id` bigint(20) NOT NULL,
  `role_id` bigint(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `menu_id` (`menu_id`),
  KEY `role_id` (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of menu_role_kelas
-- ----------------------------
INSERT INTO `menu_role_kelas` VALUES ('1', '1', '1', '2021-01-11 13:54:19', '2021-01-11 13:54:19', null);
INSERT INTO `menu_role_kelas` VALUES ('2', '2', '1', '2021-01-11 13:54:19', '2021-01-11 13:54:19', null);
INSERT INTO `menu_role_kelas` VALUES ('3', '3', '1', '2021-01-11 13:54:19', '2021-01-11 13:54:19', null);
INSERT INTO `menu_role_kelas` VALUES ('4', '4', '1', '2021-01-11 13:54:19', '2021-01-11 13:54:19', null);
INSERT INTO `menu_role_kelas` VALUES ('5', '5', '1', '2021-01-11 13:54:19', '2021-01-11 13:54:19', null);
INSERT INTO `menu_role_kelas` VALUES ('6', '6', '1', '2021-01-11 13:54:19', '2021-01-11 13:54:19', null);
INSERT INTO `menu_role_kelas` VALUES ('7', '7', '1', '2021-01-11 13:54:19', '2021-01-11 13:54:19', null);
INSERT INTO `menu_role_kelas` VALUES ('8', '8', '1', '2021-01-11 13:54:19', '2021-01-11 13:54:19', null);
INSERT INTO `menu_role_kelas` VALUES ('9', '9', '1', '2021-01-11 13:54:19', '2021-01-11 13:54:19', null);
INSERT INTO `menu_role_kelas` VALUES ('10', '10', '1', '2021-01-11 13:54:19', '2021-01-11 13:54:19', null);
INSERT INTO `menu_role_kelas` VALUES ('11', '11', '1', '2021-01-11 13:54:19', '2021-01-11 13:54:19', null);
INSERT INTO `menu_role_kelas` VALUES ('12', '12', '1', '2021-01-11 13:54:19', '2021-01-11 13:54:19', null);
INSERT INTO `menu_role_kelas` VALUES ('13', '13', '1', '2021-01-11 13:54:20', '2021-01-11 13:54:20', null);
INSERT INTO `menu_role_kelas` VALUES ('14', '14', '1', '2021-01-11 13:54:20', '2021-01-11 13:54:20', null);
INSERT INTO `menu_role_kelas` VALUES ('15', '15', '1', '2021-01-11 13:54:20', '2021-01-11 13:54:20', null);
INSERT INTO `menu_role_kelas` VALUES ('16', '16', '1', '2021-01-11 13:54:20', '2021-01-11 13:54:20', null);
INSERT INTO `menu_role_kelas` VALUES ('17', '1', '2', '2021-01-11 13:54:27', '2021-01-11 13:54:27', null);
INSERT INTO `menu_role_kelas` VALUES ('18', '2', '2', '2021-01-11 13:54:27', '2021-01-11 13:54:27', null);
INSERT INTO `menu_role_kelas` VALUES ('19', '3', '2', '2021-01-11 13:54:27', '2021-01-11 13:54:27', null);
INSERT INTO `menu_role_kelas` VALUES ('20', '4', '2', '2021-01-11 13:54:27', '2021-01-11 13:54:27', null);
INSERT INTO `menu_role_kelas` VALUES ('21', '5', '2', '2021-01-11 13:54:27', '2021-01-11 13:54:27', null);
INSERT INTO `menu_role_kelas` VALUES ('22', '6', '2', '2021-01-11 13:54:27', '2021-01-11 13:54:27', null);
INSERT INTO `menu_role_kelas` VALUES ('23', '7', '2', '2021-01-11 13:54:27', '2021-01-11 13:54:27', null);
INSERT INTO `menu_role_kelas` VALUES ('24', '8', '2', '2021-01-11 13:54:27', '2021-01-11 13:54:27', null);
INSERT INTO `menu_role_kelas` VALUES ('25', '9', '2', '2021-01-11 13:54:27', '2021-01-11 13:54:27', null);
INSERT INTO `menu_role_kelas` VALUES ('26', '10', '2', '2021-01-11 13:54:27', '2021-01-11 13:54:27', null);
INSERT INTO `menu_role_kelas` VALUES ('27', '11', '2', '2021-01-11 13:54:27', '2021-01-11 13:54:27', null);
INSERT INTO `menu_role_kelas` VALUES ('28', '12', '2', '2021-01-11 13:54:27', '2021-01-11 13:54:27', null);
INSERT INTO `menu_role_kelas` VALUES ('29', '13', '2', '2021-01-11 13:54:27', '2021-01-11 13:54:27', null);
INSERT INTO `menu_role_kelas` VALUES ('30', '14', '2', '2021-01-11 13:54:27', '2021-01-11 13:54:27', null);
INSERT INTO `menu_role_kelas` VALUES ('31', '15', '2', '2021-01-11 13:54:27', '2021-01-11 13:54:27', null);
INSERT INTO `menu_role_kelas` VALUES ('32', '16', '2', '2021-01-11 13:54:27', '2021-01-11 13:54:27', null);
INSERT INTO `menu_role_kelas` VALUES ('33', '1', '3', '2021-01-11 13:54:35', '2021-01-11 13:54:35', null);
INSERT INTO `menu_role_kelas` VALUES ('34', '2', '3', '2021-01-11 13:54:35', '2021-01-11 13:54:35', null);
INSERT INTO `menu_role_kelas` VALUES ('35', '3', '3', '2021-01-11 13:54:35', '2021-01-11 13:54:35', null);
INSERT INTO `menu_role_kelas` VALUES ('36', '4', '3', '2021-01-11 13:54:35', '2021-01-11 13:54:35', null);
INSERT INTO `menu_role_kelas` VALUES ('37', '5', '3', '2021-01-11 13:54:35', '2021-01-11 13:54:35', null);
INSERT INTO `menu_role_kelas` VALUES ('38', '6', '3', '2021-01-11 13:54:35', '2021-01-11 13:54:35', null);
INSERT INTO `menu_role_kelas` VALUES ('39', '7', '3', '2021-01-11 13:54:35', '2021-01-11 13:54:35', null);
INSERT INTO `menu_role_kelas` VALUES ('40', '8', '3', '2021-01-11 13:54:35', '2021-01-11 13:54:35', null);
INSERT INTO `menu_role_kelas` VALUES ('41', '9', '3', '2021-01-11 13:54:35', '2021-01-11 13:54:35', null);
INSERT INTO `menu_role_kelas` VALUES ('42', '10', '3', '2021-01-11 13:54:35', '2021-01-11 13:54:35', null);
INSERT INTO `menu_role_kelas` VALUES ('43', '11', '3', '2021-01-11 13:54:35', '2021-01-11 13:54:35', null);
INSERT INTO `menu_role_kelas` VALUES ('44', '12', '3', '2021-01-11 13:54:35', '2021-01-11 13:54:35', null);
INSERT INTO `menu_role_kelas` VALUES ('45', '13', '3', '2021-01-11 13:54:35', '2021-01-11 13:54:35', null);
INSERT INTO `menu_role_kelas` VALUES ('46', '14', '3', '2021-01-11 13:54:35', '2021-01-11 13:54:35', null);
INSERT INTO `menu_role_kelas` VALUES ('47', '15', '3', '2021-01-11 13:54:35', '2021-01-11 13:54:35', null);
INSERT INTO `menu_role_kelas` VALUES ('48', '16', '3', '2021-01-11 13:54:35', '2021-01-11 13:54:35', null);
INSERT INTO `menu_role_kelas` VALUES ('49', '1', '4', '2021-01-11 13:54:43', '2021-01-11 13:54:43', null);
INSERT INTO `menu_role_kelas` VALUES ('50', '2', '4', '2021-01-11 13:54:43', '2021-01-11 13:54:43', null);
INSERT INTO `menu_role_kelas` VALUES ('51', '3', '4', '2021-01-11 13:54:43', '2021-01-11 13:54:43', null);
INSERT INTO `menu_role_kelas` VALUES ('52', '4', '4', '2021-01-11 13:54:43', '2021-01-11 13:54:43', null);
INSERT INTO `menu_role_kelas` VALUES ('53', '5', '4', '2021-01-11 13:54:43', '2021-01-11 13:54:43', null);
INSERT INTO `menu_role_kelas` VALUES ('54', '6', '4', '2021-01-11 13:54:43', '2021-01-11 13:54:43', null);
INSERT INTO `menu_role_kelas` VALUES ('55', '7', '4', '2021-01-11 13:54:43', '2021-01-11 13:54:43', null);
INSERT INTO `menu_role_kelas` VALUES ('56', '8', '4', '2021-01-11 13:54:43', '2021-01-11 13:54:43', null);
INSERT INTO `menu_role_kelas` VALUES ('57', '9', '4', '2021-01-11 13:54:43', '2021-01-11 13:54:43', null);
INSERT INTO `menu_role_kelas` VALUES ('58', '10', '4', '2021-01-11 13:54:43', '2021-01-11 13:54:43', null);
INSERT INTO `menu_role_kelas` VALUES ('59', '11', '4', '2021-01-11 13:54:43', '2021-01-11 13:54:43', null);
INSERT INTO `menu_role_kelas` VALUES ('60', '12', '4', '2021-01-11 13:54:43', '2021-01-11 13:54:43', null);
INSERT INTO `menu_role_kelas` VALUES ('61', '13', '4', '2021-01-11 13:54:43', '2021-01-11 13:54:43', null);
INSERT INTO `menu_role_kelas` VALUES ('62', '14', '4', '2021-01-11 13:54:43', '2021-01-11 13:54:43', null);
INSERT INTO `menu_role_kelas` VALUES ('63', '15', '4', '2021-01-11 13:54:43', '2021-01-11 13:54:43', null);
INSERT INTO `menu_role_kelas` VALUES ('64', '16', '4', '2021-01-11 13:54:43', '2021-01-11 13:54:43', null);
INSERT INTO `menu_role_kelas` VALUES ('65', '1', '5', '2021-01-11 13:54:55', '2021-01-11 13:54:55', null);
INSERT INTO `menu_role_kelas` VALUES ('66', '2', '5', '2021-01-11 13:54:55', '2021-01-11 13:54:55', null);
INSERT INTO `menu_role_kelas` VALUES ('67', '3', '5', '2021-01-11 13:54:55', '2021-01-11 13:54:55', null);
INSERT INTO `menu_role_kelas` VALUES ('68', '4', '5', '2021-01-11 13:54:55', '2021-01-11 13:54:55', null);
INSERT INTO `menu_role_kelas` VALUES ('69', '5', '5', '2021-01-11 13:54:55', '2021-01-11 13:54:55', null);
INSERT INTO `menu_role_kelas` VALUES ('70', '6', '5', '2021-01-11 13:54:55', '2021-01-11 13:54:55', null);
INSERT INTO `menu_role_kelas` VALUES ('71', '7', '5', '2021-01-11 13:54:55', '2021-01-11 13:54:55', null);
INSERT INTO `menu_role_kelas` VALUES ('72', '8', '5', '2021-01-11 13:54:55', '2021-01-11 13:54:55', null);
INSERT INTO `menu_role_kelas` VALUES ('73', '9', '5', '2021-01-11 13:54:55', '2021-01-11 13:54:55', null);
INSERT INTO `menu_role_kelas` VALUES ('74', '10', '5', '2021-01-11 13:54:55', '2021-01-11 13:54:55', null);
INSERT INTO `menu_role_kelas` VALUES ('75', '11', '5', '2021-01-11 13:54:55', '2021-01-11 13:54:55', null);
INSERT INTO `menu_role_kelas` VALUES ('76', '12', '5', '2021-01-11 13:54:55', '2021-01-11 13:54:55', null);
INSERT INTO `menu_role_kelas` VALUES ('77', '13', '5', '2021-01-11 13:54:55', '2021-01-11 13:54:55', null);
INSERT INTO `menu_role_kelas` VALUES ('78', '14', '5', '2021-01-11 13:54:55', '2021-01-11 13:54:55', null);
INSERT INTO `menu_role_kelas` VALUES ('79', '15', '5', '2021-01-11 13:54:55', '2021-01-11 13:54:55', null);
INSERT INTO `menu_role_kelas` VALUES ('80', '16', '5', '2021-01-11 13:54:55', '2021-01-11 13:54:55', null);

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('3', '2019_08_19_000000_create_failed_jobs_table', '1');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for role
-- ----------------------------
DROP TABLE IF EXISTS `role`;
CREATE TABLE `role` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name_role` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name_role`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of role
-- ----------------------------
INSERT INTO `role` VALUES ('1', 'Administrator', '2021-01-05 10:45:09', '2021-01-07 13:32:19', null);
INSERT INTO `role` VALUES ('2', 'Kepala Sekolah', '2021-01-07 13:27:43', '2021-01-07 13:32:26', null);
INSERT INTO `role` VALUES ('3', 'Kurikulum', '2021-01-07 13:32:29', '2021-01-07 13:32:29', null);
INSERT INTO `role` VALUES ('4', 'Guru', '2021-01-07 13:32:35', '2021-01-07 13:32:35', null);
INSERT INTO `role` VALUES ('5', 'Siswa', '2021-01-07 13:32:38', '2021-01-07 13:32:38', null);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `role_id` bigint(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL,
  `verification_token` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  KEY `role_id` (`role_id`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'admin@gmail.com', '$2y$10$C3.Jn5ZiSK2q3Bp9aaG6I.fPD6ZagTt1HhD8AcojxwZoFGCPwkdam', '', '1', '2021-01-07 13:33:06', '2021-01-07 13:47:22', null, null);
INSERT INTO `users` VALUES ('2', 'kepalasekolah@gmail.com', '$2y$10$qAEKTNKaLDITJXm7qkbjS.lWnRnhCJsLdyjYjDqhGHNs./hIan0B6', '', '2', '2021-01-07 13:33:13', '2021-01-07 13:39:15', null, null);
INSERT INTO `users` VALUES ('3', 'kurikulum@gmail.com', '$2y$10$4Hbm/qwaR3eC53sqVoIzleUcXGdiYDqNi36eu8lP7IRFJvJsHwKG6', '', '3', '2021-01-07 13:33:20', '2021-01-07 13:39:18', null, null);
INSERT INTO `users` VALUES ('4', 'guru@gmail.com', '$2y$10$qfvGoJgS7nXGWJnqAP7wRelIuvtCwonOcwlAEzRqtCZgIgeFx9svK', '', '4', '2021-01-07 13:33:37', '2021-01-07 13:39:21', null, null);
INSERT INTO `users` VALUES ('5', 'siswa@gmail.com', '$2y$10$k8kbu3WFEa3Kv6WpO5WbE.HVAaMOZYa9FWbiuGaeDazdpMrHiHe2.', '', '5', '2021-01-07 13:33:44', '2021-01-07 13:39:21', null, null);

-- ----------------------------
-- Table structure for users_detail
-- ----------------------------
DROP TABLE IF EXISTS `users_detail`;
CREATE TABLE `users_detail` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `photo` varchar(200) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `last_login` timestamp NULL DEFAULT current_timestamp(),
  `mobile_phone` varchar(20) NOT NULL,
  `full_address` varchar(255) NOT NULL,
  `role_id` bigint(20) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0:not active | 1:active',
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users_detail
-- ----------------------------
INSERT INTO `users_detail` VALUES ('1', null, 'Erni Wiyanti, S.Pd., M.M.', 'guru@gmail.com', '2021-01-07 20:19:19', '081267067094', 'Kepulauan Riau, Batam', '4', '1', null);
