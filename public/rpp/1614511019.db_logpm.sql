-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 27, 2020 at 05:04 PM
-- Server version: 10.1.44-MariaDB-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gardabha_logpm`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_projects`
--

CREATE TABLE `activity_projects` (
  `id` int(11) NOT NULL,
  `name_activity` varchar(150) NOT NULL,
  `start_date` varchar(50) NOT NULL,
  `end_date` varchar(50) NOT NULL,
  `discussion` text NOT NULL,
  `action` text NOT NULL,
  `information` text NOT NULL,
  `pic` int(11) NOT NULL,
  `created_at` varchar(50) NOT NULL,
  `category_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity_projects`
--

INSERT INTO `activity_projects` (`id`, `name_activity`, `start_date`, `end_date`, `discussion`, `action`, `information`, `pic`, `created_at`, `category_id`, `project_id`) VALUES
(1, 'Rapat Koordinasi progress pekerjaan dan persiapan pembuatan final report proyek LRT Jabodebek ke KEM', '', '', 'Meeting bersama BPPT untuk melakukan rakor progress pekerjaan dan persiapan pembuatan final report proyek LRT Jabodebek ke Kemenkomar', '', 'Materi utama:1. RAMS Analysis2. Hasil audit teknologi 3. Crashworhiness4. Persiapan uji fatique ', 1, '2019-09-16', 1, 8),
(2, 'Meeting percepatan pembangunan LRT Jabodebek : \n1. Justifikasi enggeseran depo ke cibubur, \n2. Dampa', '2019-01-07', '2019-01-08', '1. Depo rencana penyelesaian pengadaan lahan dengan LMA dan PPK sofker pembangunan LRT Jabodebek. \n2. Akan dilakukan pembahasan lebih lanjut terkait 1 DC, setiap subcont harap melepaskan potensi nilai rupiah karena pengaruh keterlambatan pembayaran, \n3. Design detail tempory depo direncanakan dibangun setelah stasiun harjamukti cibubur.', '', '1. Depo bekasi timur rencana penyelesaian pengadaan bahan (maret 2019) dan LMA dan PPK sofker pemban', 1, '2019-09-16', 1, 8),
(3, 'FAI traction motor untuk proyek LRT Jabodebek', '2019-01-07', '2019-01-09', '1. Diskusi internal dengan CAF terkait rencana FAI\n2. Verivikasi & pemeriksaan dokumen traksi motor dari ABB SHANGHAI\n3. Verivikasi \"WI\" terhadap proses dan pengujian performansi traksi motor\n4. closing meeting', '', 'FAI report terlampir', 1, '2019-09-16', 1, 8),
(4, 'Rapat Pembahasan Schedule Produksi Sarana LRT Jabodebek', '2019-01-09', '2019-01-10', '', '', 'Notulen meeting terlampir', 1, '2019-09-16', 1, 8),
(5, 'Permohonan Penyeseuaian  Interior dan Dimensi Kursi LRT Jabodebek', '2019-01-15', '2019-01-15', '', '', 'Surat Terlampir', 1, '2019-09-16', 1, 8),
(6, '1. Paparan hasil studi pendampingan Light Rail Transit (LRT) Jabodebek, \n2. Paparan hasil studi kela', '2019-01-15', '2019-01-16', '1. Diskusi dengan Bpk Dirut dan dirtekom terkait LRT Jabodebek dan diskusi terkait High Level meeting tgl 16 jan 2019\n2. Menghadiri high level meeting kegiatan perkeretaapian BPPT', '', 'Pada LRT Jabodebek perlu adanya pengujian teknis terkait:\n1. Pengujian untuk penangkal petir pada ro', 1, '2019-09-16', 1, 8),
(7, 'Pemantauan Progress Produksi Sarana LRT Jabodebek', '2019-01-16', '2019-01-18', '', '', 'Notulen meeting terlampir', 1, '2019-09-16', 3, 8),
(8, 'Hasil Kegiatan Perkeretaapian BPPT 2018', '2019-01-16', '2019-01-16', '', '', 'Notulen meeting terlampir', 1, '2019-09-16', 1, 8),
(9, 'Rapat FGD Kegiatan Perkeretaapian', '2019-01-16', '2019-01-16', '', '', 'Di JW.Mariot Surabaya', 1, '2019-09-16', 1, 8),
(10, 'MRB Carbody M-011 LRT Jabodebek', '2019-01-17', '2019-01-17', '', '', '* Notulen meeting terlampir\n* Ruang Rapat QC', 1, '2019-09-16', 1, 8),
(11, 'Evaluasi Carbody LRT Jabodebek', '2019-01-17', '2019-01-17', '', '', '* Notulen meeting terlampir\n* Ruang Rapat QC', 1, '2019-09-16', 1, 8),
(12, 'Informasi Jadwal Kedatangan Sub Assy Carbody LRT Jabodebek', '2019-01-22', '2019-01-22', '', '', 'MOM antara PT. INKA dengan Jiangsu Tedrail Co.Ltd tanggal 7-9 Januari 2019 Terlampir', 1, '2019-09-16', 4, 8),
(13, 'Koordinasi teknis sarana dan progress sarana LRT Jabodebek', '2019-01-22', '2019-01-24', '1. Koordinasi teknis terkait penjelasan deskripsi sistem Public Address& Passenger Information dari Play system sarana LRT Jabodebek. (Blok diagram funetion speci fication)\n2. Pemaparan progress fisik kedatangan komponen dan penyelesaian desain software & configuration network.\n3. Sinkronisasi radio telekomunikasi sistem dengan PA & DIDS, Rolling Stock, terkait kemungkinan kedua sistem tersebut koneksi secara jaringan \n4. Penyampaian progress fisik sarana LRT Jabodebek', '', '1. PA dan PIDS konfigurasi kerja sistemnya berdasar internet protokol dan berbasis local area networ', 1, '2019-09-16', 1, 8),
(14, 'Pengawasan Progress LRT Jabodebek', '2019-01-23', '2019-01-23', '', '', 'Ruang Rapat', 1, '2019-09-16', 1, 8),
(15, 'Evaluasi Carbody Proyek LRT Jabodebek', '2019-01-23', '2019-01-23', '', '', 'Notulen dan memo terlampir', 1, '2019-09-16', 3, 8),
(16, 'Rapat terkait LRT Jabodebek', '2019-01-23', '2019-01-24', '1. Rapat pembahasan keterlambatan pembangunan LRT Jabodebek\n2. Menghadiri undangan meeting kemenkomar jakarta terkait penyampaian progress fisik sarana LRT Jabodebek ', '', 'Hasil Rapat (23 Januari 19)\n1. Laporan Progress Prasarana \n2. Akan dilakukan evaluasi lagi terkait p', 1, '2019-09-16', 1, 8),
(17, 'FAI komponen Air seal projek LRT Jabodebek', '2019-01-23', '2019-01-27', '1. Perjalanan Madiun-Jakarta\n2. Perjalanan Jakarta-Paris\n3. Perjalanan Paris monfbrisen\n4. Factory visit dan FAI Air Seal\n5. Perjalanan Monfbrisen-Paris\n6. Perjalanan Paris-Jakarta\n7. Perjalanan Jakarta-Madiun.', '', '1. Rranggajati, Sriwijaya Air\n2. Technetics Factory, Monfbrisen France\n3. KA. Singosari', 1, '2019-09-16', 4, 8),
(18, 'Pengawasan Progress LRT Jabodebek', '2019-01-24', '2019-01-24', '', '', 'Ruang Rapat Tengah QC', 1, '2019-09-16', 1, 8),
(19, 'Meeting dengan KAI terkait LRT Jabodebek', '2019-01-29', '2019-01-29', 'Meeting dengan KAI terkait LRT Jabodebek membahas IDC', '', 'Hasil Meeting: garis besar cara perhitungan IDC sudah disepakati. INKA diminta membuat detail IDC (t', 1, '2019-09-16', 1, 8),
(20, 'Rapat koordinasi percepatan penyelesaian proyek LRT', '2019-01-31', '2019-01-31', 'Rapat koordinasi percepatan pembangunan dan penyelesaian proyek Infrastruktur (Prasarana, Fasop, Dipo)\nProyek LRT Jabodebek oleh menteri Koor. Maritim , Menteri Perhubungan', '', '1. Pembahasan rencana pembebasan 191 bidang dimana lahan untuk Dipo sarana LRT serta OCC (operating ', 1, '2019-09-16', 1, 8),
(21, 'Pembahasan Denda CAF Terkait LRT Jabodebek', '2019-02-06', '2019-02-06', '', '', 'Ruang Rapat GM Keproyekan', 1, '2019-09-16', 1, 8),
(22, 'Pembahasan Revisi Master Schedule', '2019-02-07', '2019-02-07', '', '', '* Pembahasan / Notulen terlampir\n* Ruang Rapat GM Keproyekan', 1, '2019-09-16', 1, 8),
(23, 'Meeting dengan Deputy Transportasi Pemprov Jakarta; Meeting dengan KAI, PWC, dan staff Kemenkomar', '2019-02-14', '2019-02-15', '1. Makan malam dengan Deputy Transportasi Pemprov Jakarta\n2. Meeting dengan KAI, PWC, dan Kemenkomar untuk membahas IDC LRT Jabodebek\n3. Menghadiri undangan Kemenkomar agenda rapat koordinasi percepatan pembangunan LRT Jabodebek', '', '1. Membahas rencana presentasi INKA tentang kemampuan INKA memproduksi LRT\n2. Masing-masing pihak me', 1, '2019-09-16', 1, 8),
(24, 'Survey lokasi dan pembahasan rencana kerja Temporary Pit Stop', '2019-02-14', '2019-02-15', '1. Peninjauan lokasi area loading/unbading serta area penerimaan kereta di lintas utama/eleveted rail di area stasiun harjamukti \n2. Rapat dengan PT. KAI LRT Jabodebek unit sarana untuk mendapatkan pola stabing dan keluar masuk kereta dari temporary dipo serta fasilitas / peralatan pendukung dipo\n3. Rapat koordinasi pembangunan temporary dipo (PAB dan konsep desain) antara KAI, INKA. AdhiKarya, Ditjen KA (PPK)', '', '1. Tempat loading/ unloading by multiaxle truck akan dipersiapkan pemodalan/ pengerasan untuk parkin', 1, '2019-09-16', 3, 8),
(25, 'Rapat Pembahasan Temporary Pit Stop', '2019-02-15', '2019-02-15', '', 'Tindak Lanjut Terlampir', 'Ruang Rapat Kantor Divisi LRT Jabodebek', 1, '2019-09-16', 1, 8),
(26, 'Rapat Koodinasi Pembahasan IDC proyek LRT Jabodebek, dan meeting pembebasan lahan untuk Dipo LRT Jab', '2019-02-19', '2019-02-20', '1. Meeting koordinasi untuk persiapan rapat 19 februari 2019 bersama PT. KAI Divisi. LRT Jabodebek.\n2. Rapat koordinasi terkait pembahasan IDC (interest duting construction) penyelesaian proyek LRT Jabodebek yang mundur di bulan operasionalnya karena keterlambatan penyelesaian pembangunan DIPO (Bekasi Timur)\n3. Konsolidasi perubahan FS menyesuaikan kemunduran jadwal operasional\n4. Pembahasan pembebasan lahan untuk Dipo LRT Jabodebek di Bekasi Timur\n5. Pembahasan Penlok Stasiun Dukuh Atas.', '', '1. Recana adendum kontrak sarana LRT Jabodebek akan dilakukan setelah adanya kesepakatan nilai IDC+a', 1, '2019-09-16', 1, 8),
(27, 'Pembahasan Schedule Pembayaran Sarana LRT Jabodebek', '2019-02-25', '2019-02-26', '', 'Tindak Lanjut Terlampir', 'Ruang Rapat PT INKA Madiun', 1, '2019-09-16', 1, 8),
(28, 'Monitoring & Evaluasi Rekomendasi Keselamatan Oleh KNKT', '2019-02-26', '2019-02-26', '', 'Tindak Lanjut Terlampir', 'Aula PT INKA (persero)', 1, '2019-09-16', 3, 8),
(29, 'Meeting terkait LRT Jabodebek', '2019-02-28', '2019-03-01', '1. Meeting dengan KAI terkait LRT Jabodebek\n2. Meeting dengan Kemenkomar untuk pembahasan amandemen kontrak LRT Jabodebek\n3. Meeting dengan KAI terkait LRT Jabodebek', '', '1. Simulasi Capex INKA\n2. Pembahasan Capex PT. Adhi Karya (Persero) Tbk dan PT INKA.', 1, '2019-09-16', 1, 8),
(30, 'Koordinasi Uji Fatigue Bogie Frame LRT Jabodebek', '2019-03-05', '2019-03-05', '', '', '* Pembahasan / Notulen terlampir\n* Ruang Rapat B2TKS', 1, '2019-09-16', 1, 8),
(31, 'Preparation meeting perihal pengujian bogie frame dan pembahasan sistem proteksi petir LRT Jabodebek', '2019-03-05', '2019-03-06', '1. Rapat koordinasi dalam evaluasi testting dan penempatan aktuatori sensor dalam pengujian bogie frame LRT Jabodebek (Uji Fatique)\n2. Koordinasi pembahasaan prosedur uji dan metodologi proses dalam uji konstruksi bogie frame\n3. Pembahasan penggunaan standar uji Vic atau EN\n4. Rapat pembahasan fuction descripiton safety equipmen di sarana LRT Jabodebek\n5. Pembahsan sistem grounting sarana dan sistem proteksi petir dalam sarana ', '', '1. Secara fungsi dan jaminan kekuatan struktur sudah baik, perlu dipersiapkan beberapa sparepart con', 1, '2019-09-16', 1, 8),
(32, 'Rapat Pembahasan Proteksi Petir Sarana dan Prasarana LRT Jabodebek', '2019-03-06', '2019-03-06', '', '', '* Notulen meeting terlampir\n* Ruang Rapat Kantor DIV LRT Jabodebek', 1, '2019-09-16', 1, 8),
(33, 'Pembahasan Teknis Emergency Handle, Obstacle Detection, Derailment Detection, dan Proteksi Petir', '2019-03-06', '2019-03-06', '', 'Tindak Lanjut Terlampir', 'Ruang Rapat LRT Jabodebek', 1, '2019-09-16', 1, 8),
(34, 'Pembahasan EN13749 / Standar Pengujian', '2019-03-06', '2019-03-06', '', '', '* Notulen meeting terlampir\n* Ruang Rapat SAT B2TKS', 1, '2019-09-16', 1, 8),
(35, 'Rapat Membahas NCR Wheelset LRT Jabodebek', '2019-03-11', '2019-03-11', 'Pembahasan Terlampir', '', 'Ruang GM Keproyekan', 1, '2019-09-16', 1, 8),
(36, 'Meeting terkait LRT Sumsel dan pembahasan ITP LRT Jabodebek', '2019-03-11', '2019-03-13', '1. Pembahasan data train parameter dari sarana TS 1  sid TS 8 LRT palembang yang di submit INKA dan KAI ke PPK satker LRT \n2. Pembahasan jadwal pengujian dinamik ETCS signalling per TS dan uji Integrasi ETCS signalling sarana, prasarana\n3. Pembahasan keterkaitan Kru KA dan sarana dalam uji ETCS signalling\n4. pembahasan kinematic envelope sarana LRT Jabodebek', '', '1. Adanya deviasi antara data desain dan data real saat dilakukan verifikasi dikarenakan ada range t', 1, '2019-09-16', 1, 8),
(37, 'Courtesy meeting dengan Mr. Arkaitz; meeting dengan Deputy of Transformation', '2019-03-13', '2019-03-14', '1. Courtesy meeting dengan Mr. Arkaitz\n2. Meeting dengan Deputy Gubernur Transportasi ', '', '1. Mengenai kerjasama INKA dan CAF\n2. Mengenai LRT DKI Jakarta', 1, '2019-09-16', 1, 8),
(38, 'Pembahasan Uji Fatigue Bogie Frame LRT Jabodebek', '2019-03-19', '2019-03-19', 'Pembahasan Terlampir', '', '', 1, '2019-09-16', 1, 8),
(39, 'meeting dengan Rotem, meeting dengan tim LRT Jabodebek, menghadiri pameran railtech, meeting dengan ', '2019-03-19', '2019-03-21', '1. Meeting dengan Rotem\n2. Meeting pembahasan amandemen kontrak LRT Jabodebek dengan KAI dan Kemenkomaritim\n3. Lunch meeting dengan Deputy Transportasi DKI tentang proyek LRT Jabodebek\n4. Lunch meeting KRNA Korea\n5. Meeting dengan Dir. SKF Asia Pasifik', '', '5. Mengenai rencana SKF Investasi di Indonesia', 1, '2019-09-16', 1, 8),
(40, 'Meeting dengan LRT Jabodebek dan menghadiri pameran railway dan transportasi', '2019-03-20', '2019-03-21', '1. Pertemuan dengan tim LRT jabodebek di gedung JRC \n2. Pameran Railway Transportasi di JIEX Kemayoran JKT', '', '1. Membahas adendum terim of payment, paparan versi KAI (ditolak oleh INKA), versi INKA : 10-45-35-1', 1, '2019-09-16', 1, 8),
(41, 'Koordinasi Pembahasan Junction Box Inter Car (on roof & Under Frame)   ', '2019-03-22', '2019-03-22', 'Pembahasan Terlampir', 'Tindak Lanjut Terlampir', 'Ruang GM Teknologi', 1, '2019-09-16', 1, 8),
(42, 'Pembahasan Progress LRT Jabodebek / Review Persiapan Bogie Mounting dan Pengujian TS1', '2019-03-25', '2019-03-25', 'Pembahasan Terlampir', 'Tindak Lanjut Terlampir', 'Ruang GM Keproyekan', 1, '2019-09-16', 1, 8),
(43, 'Menghadiri undangan meeting KAI dan meeting dengan Deputy Transportasi', '2019-03-25', '2019-03-25', '1. Menghadiri undangan rapat pembahasan adendum kontrak pengadaan kereta LRT Jabodebek\n2. Meeting dengan Deputy Transportasi, pembangunan Jaya, dan Kjell Hagland', '', '1. Undangan terlampir\n2. Mengenai proyek LRT DKI Jakarta dan Penjajakan Pendanaan dari Swedia', 1, '2019-09-16', 1, 8),
(44, 'Rapat teknis dengan PT. KAI dan training leadership', '2019-03-25', '2019-03-28', '1. Training leadership winning strategy-leaders talk inaguration way\n2. Rapat koordinasi teknis terkait silabus diklat sarana LRT Jabodebek pada waktu training, pembahasan materi, tempat, peserta training dengan tim diklat/SDM PT. KAI\n3. Rapat koordinasi teknis terkait pengujian statis OBCU signalling di rolling stock, dengan PT. KAI. PT Len', '', '1. Innovation harus berjalan seiring berkembangnya/ bertumbuhnya perusahaan, baik itu teknologi, pro', 1, '2019-09-16', 2, 8),
(45, 'Meeting dengan KAI , Adhi Karya, dan Kemenkomar', '2019-03-27', '2019-03-27', '1. Meeting dengan KAI, Adhi Karya, Kemenkomar\n2. Meeting dengan Deputy Transportasi, Pembangunan Jaya dan Kjell Highland', '', '1. Pembagasan cost of fund LRT Jabodebek\n2. Mengenai proyek LRT DKI Jakarta dan penjajakan dari swed', 1, '2019-09-16', 1, 8),
(46, 'Pembahasan Proyek LRT Jabodebek', '2019-03-29', '2019-03-29', '', 'Tindak Lanjut Terlampir', 'Ruang Rapat PT IMS', 1, '2019-09-16', 1, 8),
(47, 'ITP LRT Jabodebek', '2019-04-04', '2019-04-04', '', '', 'Ruang Rapat Teknologi Produksi', 1, '2019-09-16', 1, 8),
(48, 'meeting with mr. Sakaue about rolling stock gauge', '2019-04-04', '2019-04-04', '', '', '', 1, '2019-09-16', 1, 8),
(49, 'meeting tim pendamping JV Stadler dengan Lawyer INKA', '2019-04-08', '2019-04-08', 'Meeting tim pendamping JV Stadler INKA dengan Lawyer', '', 'Keinginan dari INKA sudah tersampaikan, lawyer akan membuat term sheet negosiasi dengan stader ', 1, '2019-09-16', 1, 8),
(50, 'Rapat koordinasi teknis saarana LRT Jabodebek', '2019-04-09', '2019-04-09', '1. Berangkat dari stasiun Madiun naik kereta api Bima pukul 19.38 Wib\n2. Rapat koordinasi teknis dengan direktorat sarana djka PT Adhikarya, PT. KAI, Konsultan Djka (OOG Jopness), PPK, Satker LRT Jabodebek terkait kinematik Envelosarana di area 9 stasiun yang memiliki lengkung dan berpotensi bersentuhan dengan sarana yang berplan( karena konsep deviasi bj dan sarana di area lengkung.\n2. Pembahasan teknis dan administrasi rencana pengujian sarana LRT Jabodebek, untuk test di INKA saat status dan site saat dinamis.', '', '1. Tiba di stasiun gambir hari selasa, 9 april 2019 pukul 06.00 Wib.\n2. Berdasarkan analisa vogel di', 1, '2019-09-16', 1, 8),
(51, 'Koordinasi Teknis Pekerjaan Signalling dan Pekerjaan Pengujian LRT Jabodebek', '2019-04-10', '2019-04-12', '', '', '* Notuelen Rapat Terlampir\n* Aula Bogie PT INKA (persero)', 1, '2019-09-16', 1, 8),
(52, 'Pembahasan terkait stasiun lengkung dan structure gauge antara sarana dan prasarana LRT Jabodebek', '2019-04-11', '2019-04-11', '1.  08.00-13.30 madiun jakarta\n2. 13.30-17.30 meeting\n3. 17.30-23.30 perlanan mendampingi EVP KAI LRT Jabodebek (bpk. Eko Windo) dari solo-madiun.', '', '1. Madiun-solo\n2. Pembahasan terkait stasiun lengkung dan structure gauge antara sarana dan prasaran', 1, '2019-09-16', 1, 8),
(53, 'Rapat komite audit dengan komisaris ; monitoring simulasi proyek LRT Jabodebek', '2019-04-11', '2019-04-11', '1. Rapat komite audit dengan komisaris\n2. Monitoring simulasi proyek LRT Jabodebek', '', 'Materi tentang hasil evaluasi SPI mengenai SK Divisi Baru. Keproyekan', 1, '2019-09-16', 1, 8),
(54, 'Teknis Supply Komponen LRT Jabodebek', '2019-04-18', '2019-04-18', '', 'Tindak Lanjut Terlampir', 'Ruang PM LRT', 1, '2019-09-16', 1, 8),
(55, 'Meeting dengan Rotem dan meeting dengan Deputy Transportasi', '2019-04-24', '2019-04-25', '1. Meeting dengan Rotem\n2. Lunch meeting dengan Deputy Transportasi DKI Jakarta', '', '1. Terkait LRT Jakpro line 1 fase 2\n2. Pembahasan terkait persiapan LRT Jakpro line 1 fase 2 dan per', 1, '2019-09-16', 1, 8),
(56, 'meeting dengan OCG Jopriss terkait LRT Jabodebek', '2019-04-29', '2019-04-30', '1. meeting dengan konsultan OCG Jopriss\n2. meeting dengan PT KAI\n3. meeting dengan Adhi Karya, OCG Jopriss, dan PT KAI', '', '1. gedung menara taspen\n2. stasiun juanda\n3. gedung LRT HOAdhi Karya', 1, '2019-09-16', 1, 8),
(57, 'Rapat koordinasi teknis LRT Jabodebek dan FGO LRT Sumsel', '2019-04-29 dan 2019-05-02', '2019-04-30 dan 2019-05-03', '1. Rapat dengan OCG Jopriss (konsultan PPK sofker LRT Jabodebek DJKA). Membahas kinematic envelope sarana LRT di Staraigh Line (Lurusan) dan Inforface design whell set dinamic play vs 52D checkdril.\n2. Rapat dengan KSP, Waskita Karya PPK Stakhor LRT Sumsel, Len, KAI, membahas keterlambatan cominisionary/ testing peralatan dipo.\n3. FGO operasional dan perawatan serta pembangunan sarana &prasarana LRT Sumsel.', '', '1. INKA telah menyampaikan usulan dengan teknis integrasi dan akan diberlakukan dengan pihak PPK & A', 1, '2019-09-16', 1, 8),
(58, 'Percepatan penyelesaian TS1 LRT Jabodebek ', '2019-05-02', '2019-05-02', '1. Open item di bogie Assy\n2. Open item di tack 4\n3. Open item di tack 5\n4. Open item di tack 6\n5. Consumable', 'Terlampir', 'Ruang Rapat GM Keproyekan', 1, '2019-09-16', 1, 8),
(59, 'Pembahasan detail desain sarana LRT Jabodebek', '2019-05-02', '2019-05-03', '1. Emergency Door Hande\n2. Gap antara running rail dan guide rail\n3. Desain operasional pintu penumpang\n4. PIDS dan PAS', 'Terlampir', 'Direktorat Teknologi PT INKA', 1, '2019-09-16', 1, 8),
(60, 'CAF Visit bersama Potential Customer (Deputy Transportasi DKI Jakarta)', '2019-05-06', '2019-05-12', '1. Perjalanan Jkt-Ams Perjalanan Ams-Bilbao \n2.Visit CAF \n3.Visit CAF Power \n4. Visit Zaragoza\n5. Perjalanan Bilbao-Ams\n6. Perjalanan Ams-Zurich\n7.Enjoying commuter made Stadler\n8. Visit Stadler Factories \n9. Perjalanan Zurich-Ams \n10.Perjalanan Ams-Jakarta', '', '1. 18.40 (6Mei)-06.00(7Mei) \n2. 7 mei pk 09.15-11.20 Beasain\n3. Irura, Gipuzkua, Spain ke \n4.Dipo Tr', 1, '2019-09-16', 1, 8),
(61, 'Penentuan Jarak Gap Checkrail, widening dan PIT pada Stabling', '2019-05-09', '2019-05-09', 'Rapat penentuan jarak GAP checkrail, widening, dan PIT pada stabling', '', 'Notulen meeting terlampir', 1, '2019-09-16', 1, 8),
(62, 'Pembahasan Temporary Pit Stop LRT Jabodebek', '2019-05-10', '2019-05-10', '1. Desain Temporary Pit Stop\n2. Lingkup Pekerjaan di Temporary Stop\n3. Kebutuhan Minimum Prasarana dan Fasilitas Pendukung di Temporary Pit Stop\n4. Lokasi Temporary Pit Stop\n5. Pemasangan 3 rail pada Temporary Pit Stop', 'Terlampir', 'Ruang rapat unit LRT', 1, '2019-09-16', 1, 8),
(63, 'menghadiri rapat terkait LRT Jabodebek', '2019-05-10', '2019-05-10', '1. Menghadiri rapat lanjutan pembahasan temporary PIT\n2. Menghadiri rapat pembahasan persiapan integrasi prasarana & sarana LRT Jabodebek', '', '1. Sudah diikuti, terdapat permintaan data terkait minimum requirement di dipo & rapat lanjutan pada', 1, '2019-09-16', 1, 8),
(64, 'Seminar LRT Sumsel; rapat koordinasi LRT Jabodebek', '2019-05-14', '2019-05-15', '1. Seminar mengenal LRT lebih dekat, dengan civitas akademika/ universitas di Rembang, DJKA, KAI, Waskita, INKA\n2. Peninjauan lokasi stasiun harjamukti dan rencana pembangunan temporary  dipo di sebelah stasiun harjamukti\n3. Rapat koordinasi penentuan construction gage stasiun yang akan dibangun', '', '1. INKA presentasi materi tentang teknologi sarana perkeretaapian LRT Sumsel\n2. Pembangunan tentang ', 1, '2019-09-16', 2, 8),
(65, 'meeting dengan PT. Adhi Karya, OCG Jopriss dan DJKA terkait LRT Jabodebek', '2019-05-21', '2019-05-21', 'diskusi dengan adi karya OCG Jopriss dan DJKA terkait dengan Gap antara kereta dan platform pada stasiun lengkung', '', '', 1, '2019-09-16', 1, 8),
(66, 'Pembahasan Layout Depo LRT Jabodebek', '2019-05-21', '2019-05-22', '1. kapasitas perawatan Heavy Maintenance\n2. Layout Heavy Maintenance Area\n3. Kebutuhan Data (dimensi, loading, powerconsumption)', 'Terlampir', 'Ruang Rapat Divisi Teknologi PT INKA', 1, '2019-09-16', 1, 8),
(67, 'Inspeksi dan Pengawasan Progress Produksi Sarana LRT Jabodebek', '2019-05-23', '2019-05-24', '1. Progres Pekerjaan\n2. Delivery Sarana\n3. Outstanding Issue\n4. Profile Roda\n5. Wheel Rail Interface\n6. Automatic Tight Lock Coupler\n7. Pengujian Statis dinamis  bogie frame\n8. Derailment detection System\n9. Emergency Door System', 'Terlampir', 'Ruang Rapat Divisi Teknologi PT INKA', 1, '2019-09-16', 3, 8),
(68, 'Kick Of Meeting Addendum Pengadaan Sarana 186 Car LRT Jabodebek', '2019-05-24', '2019-05-24', '1. Addendum Perjanjian Pengadaan Sarana LRT Jabodebek\n2. Biaya Peralatan dan biaya operasional Pit Stop sesuai dengan Matriks Lingkup Pekerjaan\n3. Denda Keterlambatan atas penyelesaian barang', 'Terlampir', 'Meeting Room Hotel Amaris Madiun', 1, '2019-09-16', 1, 8),
(69, 'Rapat Pembahasan Temporary Pit Stop', '2019-05-27', '2019-05-27', 'Temporary Pit Stop\n', 'Terlampir', 'Ruang Rapat LRT Jabodebek', 1, '2019-09-16', 1, 8),
(70, 'Meeting bersama Dirkeu dan  64 Dipo LRT Jakpro', '2019-05-28', '2019-05-28', 'Meeting dengan direktur keuangan beserta GM Dipo LRT Jakpro', '', '1. Membahas masalah MSA LRT Jakpro\n2. Secara prinsip manajemen PT LRT Jakarta berminat untuk memberi', 1, '2019-09-16', 1, 8),
(71, 'Mapping persiapan penyelesaian LRT Jabodebek dan DMU Philipina', '2019-06-12', '2019-06-12', '1. Jadwal Penyerahan kereta tidak sesuai kesepakatan awal dengan PT. KAI Potensi mundur dari jadwal\n2. Komponen LRT yang belum aman dan potensi masalah\n3. Jadwal kedatangan komponen/part untuk interior panel, passanger seat & aluminium ekstrusi yang di supply IMS\n4. Untuk uji dinamik awal/TS1 CCD collector akan menggunakan bahan cast iron\n5. Dari hasil trial TS1 dibutuhkan as made drawing mekanik dan elektrik', 'Terlampir', 'Ruang Rapat QC dan MMLH', 1, '2019-09-16', 1, 8),
(72, 'Menghadiri undangan rapat Adhi Karya LRT Jabodebek', '2019-06-25', '2019-06-25', '1. Rapat korrdinasi teknis dengan tim PT.Adhikarya, PT KAI, OCE  Jopriss, PPK Satker LRT DJKA, terkait input kesan urut . Kontruksi sub system terlampir', '', 'INKA sudah memberikan rekomendasi construction gate gap sesuai hasil simulasi DKF dan plossing cr0ss', 1, '2019-09-16', 1, 8),
(73, 'Meeting dengan Rotem & Meeting dengan KAI', '2019-06-26', '2019-06-27', 'A. Meeting dengan Rotem\nB. Meeting dengan KAI :', '', 'A :\n1. Rotem berniat untuk mengajak INKA dalam proyek Jakarta LRT line 1 fase 2\n2. INKA diharapkan d', 1, '2019-09-16', 1, 8),
(74, 'Uji Bogie LRT Jabodebek dan Rapat Koordinasi Integrasi Sarana & Prasarana dan ......', '2019-06-26', '2019-06-27', '1. Rapat Koordinasi terkait pembahasan integrasi prasarana dan sarana LRT Jabodebek dengan PT.KAI, Adhikarya, Systra Int Arupa bina, OCG Jopriss, PPk Satker, LRT DJKA Kemenhub, dan surveyor', '', 'Terkait issue pada pin c dan d akan dibahas -> pertemuan lanjutan untuk detailnya', 1, '2019-09-16', 1, 8),
(75, 'Workshop Depot LRT Jabodebek', '2019-07-01', '2019-07-01', 'Rapat integrasi depot LRT Jabodebek dengan PT. KAI, PT. Adhi Karya, Konsultan KAI, ............ , membahas tentang :\n1. Layout peralatan dan...........\n2. Construction gage di area dipo (pit, walkway, dll)\n3. Dynamic Kinematic Envelope di area dipo saat sarana melintas\n4. pola perawatan sarana mulai harian sampai tahunan', '', '* PT. Adhi Karya dan PT. KAI memohon bantuan pada INKA untuk melakukan analisa dan simulasi ke pada ', 1, '2019-09-16', 2, 8),
(76, 'Koordinasi Percepatan Pembangunan LRT Jabodebek', '2019-07-02', '2019-07-04', 'A. Koordinasi Percepatan Pembangunan LRT Jabodebek\nB. Rapat dengan Kemenkomar\nC. Diskusi PMO dengan Driektur PT Sinergi Daya Mitra\nD. Rapat dengan Divre 3 Sumsel', '', 'A. Meeting dengan Direktur Keuangan & Direktur Teknik KC 1, Diskusi tentang peluang pengadaan, INKa ', 1, '2019-09-16', 1, 8),
(77, 'Rencana Stabling Sarana LRT Jabodebek', '2019-07-02', '2019-07-02', 'Rapat koordinasi dan konsolidasi dengan GM LRT Jakarta beserta tim teknis pembangunan depo LRT Jakarta (Wika) terkait kemungkinan stabling sarana LRT Jabodebek, dimana stabling depo LRT ...... di lantai 2. kemungkinannya terdapat 12 line, 1 line bisa menampung 2 TS LRT Jabodebek.\nKendalanya : terdapat lengkung kecil 40 mm saat menuju dipo, terdapat DKE sarana yang intringement dengan construction gage dipo', '', 'PT. LRT Jakarta, PT. LRT ....., Wika .... memberikan drawing track alignment depo beserta area stabl', 1, '2019-09-16', 1, 8),
(78, 'Pengujian Kekuatan Struktur Bogie Frame Sarana LRT Jabodebek', '2019-07-03', '2019-07-04', '* Pengujian status exeptional load bogie frame sarana LRT Jabodebek\n* Witness pelaksanaan uji sebagai salah satu syarat sertifikasi sarana untuk uji rancang bangun & kontruksi\n* Pelaksanaan disaksikan oleh tim penguji PT. KAI, dan balai pengujian perkeretaapian, serta kasubdit kelainan & pengembangan barang DJKA\n* Mengantar tamu dari PT. KAI dan tim balai pengujian perkeretaapian DJKA ke Jakarta', '', '* Hasil uji statis dilakukan analisa oleh tim B2TKS dan merekomendasikan laporan analisa disampaikan', 1, '2019-09-16', 3, 8),
(79, 'Pembahasan prasarana LRT test run sarana LRT & pengujian dinamik kekuatan struktur bogie frame LRT J', '2019-07-09', '2019-07-12', '* Rapat koordinasi pembahasan penggunaan prasarana LRT untuk digunakan sebagai objek infrastruktur dalam uji dinamik sarana LRT Jabodebek dengan PT. KAI, PT. Adhi Karya, PPK LRT Jabodebek, Balai pengujian KA. Membahas beberapa poin diantaranya, timeline pegujian, syarat sertifikasi sarana & prasarana serta PKS (perjanjian kerja sama) antara INKA, PPK, KAI, Adhi untuk serah guna sementara saat uji integrasi\n* Pengujian dinamik konstruksi bogie frame LRT Jabodebek. start eyele uji ..... untuk 6 juta eyele.\n* Rapat koordinasi pembangunan dipo LRT Jabodebek\n* Pembahasan milestone pengujian sarana & prasarana ...... LRT Jabodebek', '', '* INKA submit data KE, DKE, cross section R sarana di desain constrution gate dipo\n* INKA submit ren', 1, '2019-09-16', 1, 8),
(80, 'Rapat Addendum LRT Jabodebek', '2019-07-16', '2019-07-16', '1. Delievery\n2. Keterlambatan Pengiriman Barang\n3. Dampak Biaya Perubahan Waktu Penyelesaian Barang\n4. Pengujian', '1.1 PT INKA mengusulkan delievery sarana sebagai berikut:', '', 1, '2019-09-16', 1, 8),
(81, 'rapat Div LRT Jabodebek', '2019-07-23', '2019-07-23', '1. Rapat koordinasi teknis depo perihal finalisasi kinematic  ..... pada area depo dan layout heavy & light maintenance building depo\n* INKA telah memberikan data .................. dan DKE sarana LRT Jabodebek di area depo khususnya area transisi / peralihan antara track lurus dan lengkung\n* INKA memberikan inputan untuk penambahan jarak 5 meter area lengkung peralihan di depo untuk mangakomodasi maximum lateral movement sarana LRT\n2. Rapat pembahasan test & ......... GOA 3\n* PT. INKA memberikan & menyampaiakan data rencana detail test activity sarana\n* PT. Adhi Karya belum bisa menyampaikan test ..... maupun durasi masing-masing item test pada Railway System Test', '', '', 1, '2019-09-16', 1, 8),
(82, 'FAI box-box LRT Jabodebek ', '2019-07-22', '2019-07-22', 'Terlampir', '', 'Terlampir', 1, '2019-09-16', 1, 8),
(83, 'Rapat Addendum LRT Jabodebek & Meeting dengan Kemenkamar', '2019-07-23', '2019-07-25', '1. Pembahasan addendum pengadaan sarana 186 Car Light Rail Transit Jabodebek\n2. Meeting dengan PMU\n3. Menghadiri meeting dengan Kemenkamar - pembahasan percepatan pembangunan LRT Jabodebek', '2.1 Sinkronisasi \"need\" INKA & proposal Sinergi Daya Mitra\n2.2 Hari Kamis, 1-8-2019 akan mempresenta', '', 1, '2019-09-16', 1, 8),
(84, 'Pembahasan Power Supply LRT Jabodebek & PKS Test Run Sarana LRT', '2019-07-25', '2019-07-26', '1. Workshop integrasi power supply system dengan ........ terkait dengan sistem ....... sub station / gardu listrik terkait kapastas daya yang dibutuhkan selama akselarasi, deselrasi, dan stabil jalan di kecepatan tertentu\n2. Pembahasan supply power system telekomunikasi, turn out, wesel, PSD\n3. Pembahasan progress pembebasan lahan depo sarana LRT Jabodebek\n4. Pembahasan milestone perjalanan / derasional LRT Jabodebek\n5. Pembahasan isu rolling stock kesesuaian dengan KP 765\n6. Terkait mechanical coupler sarana LRT Jabodebek yang menggunakan tipe automative tight lock harus disampaikan ke KAI / Kemenkamar\n7. Cek kondisi tempat ....... sarana, serta uji coba crane (hasil baik)\n8. Pembahasan kesepakatan antara KAI, INKA, PPK, Adhi Karya terkait rencana uji sarana prasarana', '8. INKA - Adhi Karya diminta bahas detail terkait tugas / tanggung jawab (1 Agustus 2019)', '', 1, '2019-09-16', 1, 8),
(85, 'Pembahasan Status Pengujian Dinamis Bogie LRT ', '2019-07-26', '2019-07-26', '', '', 'Terlampir', 1, '2019-09-16', 1, 8),
(86, 'Permasalahan Uji fatigue Bogie frame LRT Jabodebek', '2019-07-30', '2019-07-30', 'Terlampir', '', 'Terlampir', 1, '2019-09-16', 1, 8),
(87, 'Pembahasan box IP 66 LRT Jabodebek', '2019-08-02', '2019-08-02', '1. Terkait baut menggunakan Long cap nut\n2. Pemasangan marking box menggunakan sika bounding\n3. Inspeksi terhadap audit vendor IMS terkait mutu & kapasitas akan dilakukan oleh INKA & IMS', '', '', 1, '2019-09-16', 1, 8),
(88, 'Site visit Proyek LRT Jabodebek', '2019-08-05', '2019-08-07', '1. Site Visit / Kunjungan lapangan untuk monitoring progress infrastruktur LRT Jabodebek di stasiun TMII, stasium Jati Mulya, Dipo LRT Bekasi Timur\n2. Presentasi progress fisik sarana LRT Jabodebek\n3. Rapat pembahasan teknis rencana FAT sarana, pembahasan tindak lanjut uji fatigue bogie frame sarana LRT Jabodebek\n4. Pembahasan run simulation sarana LRT Jabodebek', '2.1 Pendetailan item pengujian sarana dalam kegiatan FAT\n2.2 Membuat timeline pegujian ulang fatigue', '1. Dengan tim yang terlibat antara lain, KAI, Adhi Karya, INKA, .............\n3. INKA ....... Run cu', 1, '2019-09-16', 1, 8),
(89, 'Persiapan FAT dengan KAI', '2019-08-06', '2019-08-07', '1. Koordinasi terkait persiapan FAT dengan KAI\n2. Meeting dengan direktur proyek LRT Jakarta Fase 1 - Jak pro', '1.1 INKA akan segera membuat protokol FAT untuk direview bersama dengan KAI\n1.2 FAT tetap dilakukan ', '2. Mambahas Stabling LRT di Depo LRT Jakarta', 1, '2019-09-16', 1, 8),
(90, 'Pembahasan Biaya Penyambungan Listrik saat Uji Sarana LRT Jabodebek & FGD Sinkronisasi LRT Jabodebek', '2019-08-12', '2019-08-16', '1. Pembahasan pembiayaan dalam penyambungan listrik dan pemakaian listrik di line 1 main track antara stasiun Harjomuksi - stasiun Ciracas saat uji dinamik sarana LRT Jabodebek (type test) dan (routine test)\n2. Pembahasan / focus group discussion sinkronisasi timeline operasional LRT Jabodebek. Melakukan pembahasan skema delievery sarana dan time score kesiapan infrastruktur\n3. Pembahasan dan pendetailan test protocol dan ITP sarana PT. INKA dalam pelaksanaan Factory acceptance Test', '1. PT. INKA menyatakan bahwa menanggung biaya pemasaran kebutuhan listrik untuk keperluan uji dinami', '', 1, '2019-09-16', 1, 8),
(91, 'FGD Sinkronisasi Penyelenggaraan LRT Jabodebek', '2019-08-14', '2019-08-15', '', '', '', 1, '2019-09-16', 1, 8),
(92, 'Rapat pembahasan Factory Acceptance test (FAT) sarana LRT Jabodebek.', '2019-08-16', '2019-08-16', '1. Paparan PT.INKA\n2. Paparan PT.KAI\n3. Standar Pengujian Factory Acceptance test (FAT)\n4. type test', 'Terlampir', 'Ruang rapat unit RT kantor pusat Bandung', 1, '2019-09-16', 1, 8),
(93, 'MRB Corner Air Seal dan Upper Seat', '2019-08-19', '2019-08-19', '1. Spesifikasi material dalam approval drawing adalah AI 380 sedangkan barang yang dikirim adalah ADC 12,\n2. Diketemukan beberapa kondisi barang yang pecah dan kusam.\n3. Diketemukan barang dengan kondisi adanya indiksi adanya indikasi crack setelah dilakukan pengujian penetrant test.', 'Terlampir', '', 1, '2019-09-16', 1, 8),
(94, 'Pendetailan Timeline LRT Jabodebek', '2019-08-19', '2019-08-20', 'A. Pembahasan Jadwal pengujian railway sistem\n1. Jalan bangunan di setiap line\n2. Pengujian TPS 3 / substation gardu\n3. Pengujian high voltage network dan third rail\n4. Pengujian dinamic rolling stock\nB. Sinkronisasi dengan uji integrasi\nC. Pengecekan kinematic envelope sarana, kesesuaian dengan construction gate prasarana\nD. Pengecekan .... area di stabling entry. dipo lantai 1 dan lantai 2', '', '', 1, '2019-09-16', 1, 8),
(95, 'Survey Ke Depo LRT Jakarta', '2019-08-20', '2019-08-20', 'Survey lokasi depo dan pemaparan hasil simulasi awal interface sarana dengan prasarana', '', 'Dilakukan survey serta pengukuran konstruksi dipo yang berpotensi bersinggungan dengan sarana', 1, '2019-09-16', 3, 8),
(96, 'MRB CCD LRT Jabodebek ', '2019-08-21', '2019-08-21', '1. Respon dari vendor terhadap NCR \n', 'Terlampir', 'Ruang Rapat QC lantai 1', 1, '2019-09-16', 1, 8),
(97, 'Pembahasan Terkait LRT Jabodebek Dengan Dirut KAI & Adhi Karya & Dirut INKA', '2019-08-21', '2019-08-21', 'Pembahasan Terkait LRT Jabodebek bersama Dirut KAI & Adhi Karya & Dirut INKA', '1. INKA mengirimkan kereta ke Jakarta berdasarkan schedule yang disepakati 1 TS, 3 TS, 3 TS, dst\n2. ', '', 1, '2019-09-16', 1, 8),
(98, 'Introduction Scope ISA LRT Jabodebek', '2019-08-29', '2019-08-29', 'Pembahasan persiapan kegiatan safety assesment sub system LRT Jabedebek dalam menuju kesiapan operasional maupun dalam waktu dekat pengujian dinamik sarana LRT Jabodebek. (INKA, KAI, Adhi Karya, IC. KAI, Independent Safely Assesor (ISA) Adhi Karya dari TUV Rheinland ', 'Baik INKA dan KAI dan Adhi Karya sepakat melakukan safely assesment terhadap sub system yang terkait', '', 1, '2019-09-16', 1, 8),
(99, 'Revitalisasi 10 TS KRL KFW ', '2018-10-30', '2018-10-30', 'Pembahasan Terlampir', '', 'Ruang Rapat Pemasaran', 1, '2019-09-18', 1, 9),
(100, 'Kick Of Meeting', '2019-01-15', '2019-01-15', 'Pekerjaan Revitalisasi 10 TS KRL KFW', '', 'Ruang Rapat Pemasaran', 1, '2019-09-18', 1, 9),
(101, 'Pemaparan Pekerjaan Revitalisasi 10 TS KRL KFW', '2019-01-28', '2019-01-28', 'Pembahasan Terlampir', '', 'Ruang Rapat Pemasaran', 1, '2019-09-18', 1, 9),
(102, 'Revitalisasi KFW', '2019-01-28', '2019-01-28', '', 'Tindak lanjut Terlampir', 'Ruang Rapat WS AC Geger', 1, '2019-09-18', 1, 9),
(103, 'Arahan GM, PPC, terkait Revitalisasi KRL-KFW', '2019-01-29', '2019-01-29', 'Pembahasan Terlampir', 'Tindak lanjut terlampir', 'Ruang Rapat PPC', 1, '2019-09-18', 1, 9),
(104, 'Laporan Hasil Pekerjaan', '2019-01-30', '2019-01-30', 'Pembahasan Terlampir', '', '', 1, '2019-09-18', 1, 9),
(105, 'Pembahasan rencana penempatan unit gerbong terbuka milik negara', '2019-01-31', '2019-01-31', '', '', 'Ruang Rapat Direktorat Sarana Perkeretaapian Gd. Menara Thamrin Lt.3A ', 1, '2019-09-18', 1, 9),
(106, 'Konsineering Proyek Revitalisasi 10 TS KRL KFW', '2019-02-04', '2019-02-07', '', '', 'Ruang Rapat Hotel Amaris lt 2', 1, '2019-09-18', 1, 9),
(107, 'Menyusun Breakdown Activity (To Do List) Proyek revitalisasi 10 TS KRL Kfw', '2019-02-04', '2019-02-07', 'Pembahasan Terlampir', '', 'Ruang Rapat Hotel Amaris lt 2', 1, '2019-09-18', 1, 9),
(108, 'Persiapan Materi Rapat dengan DJKA', '2019-02-11', '2019-02-11', 'Pembahasan Terlampir', '', 'Ruang Rapat Pemasaran', 1, '2019-09-18', 1, 9),
(109, 'Tindak Lanjut pengecekan KRL KFW', '2019-02-15', '2019-02-15', '1. Kontrak revitalisasi 10 TS KRL KFW\n2. Konsinyering revitalisasi 10 TS KRL KFW di hotel Amaris ', 'Terlampir', 'Workshop PT.INKA ', 1, '2019-09-18', 1, 9),
(110, 'Pembahasan rencana penempatan 19 unit gerbong milik negara dan trainset @2 unit kereta inspeksi SI 3', '2019-02-19', '2019-02-19', 'Pembahasan Terlampir', 'Terlampir', 'Ruang Rapat Direktorat Sarana Perkeretaapian Gd. Menara Thamrin Lt.3A ', 1, '2019-09-18', 1, 9),
(111, 'Memantau proses dissmounting KFW serta mencatat no KA, Bogie, axle, dan gear box', '2019-02-22', '2019-02-25', '1. Diskoper TCI dan MCI\n-Penepatan Pinbar Couper\n-Pelepasan koneksi Afa Ring\n-Pelepasan koneksi flexible hose\n(stand by) persiapan lengrir kereta mei dan MC 2 ke gedung, KCI manggarai\n2. +Pengecekan komponen bogie\n+Pelepasan koneksi WEA Ring\n+Pelepasan komponen mekanik\n-Bolt mono link\n-Bolt Anti roll bar\n-Bolt traksi motor (2)-Bolt treton Pop\n-Bolt Pipa Tal stay\n3. - Bolt Adafter berring\n-Bolt harmonika\n-Bolt safety wire\n-Pin, path road, cabif order, safety wire\n-Yap oli coupcing blok.\n4.- Pelepasan Mono Link\n- Pelepasan anti roll bar\n- pelepasan center pivot\n- pemindahan car body ke bogie temporary\npengawalan langsung kereta pada jalur stabling', '', '1. Langsung ke jalur gepung kci-manggarai\n2. pekerjaan dilaksanakan mulai jam 08.00-22.00 WIB\n3. pel', 1, '2019-09-18', 3, 9),
(112, 'Koordinasi Progress Proyek KRL KFW', '2019-02-25', '2019-02-25', 'Pembahasan Terlampir', 'Terlampir', 'Ruang Rapat Pemasaran', 1, '2019-09-18', 1, 9),
(113, 'Rapat Penyusunan Metode Perbaikan KRL KFW', '2019-03-11', '2019-03-11', '', 'Tindak lanjut Terlampir', 'Ruang Rapat Pemaaran', 1, '2019-09-18', 1, 9),
(114, 'Pembahasan Hasil Kajian penurunan Daya pada kereta Revitalisasi KRL/KFW Dan Justifikasi desain', '2019-03-12', '2019-03-12', '', 'Tindak lanjut Terlampir', 'Ruang Rapat Satket PPSP Lt 3', 1, '2019-09-18', 1, 9),
(115, 'AC KFW', '2019-03-13', '2019-03-13', '', '', 'Ruang Rapat SBU AC', 1, '2019-09-18', 1, 9),
(116, 'Rapat Evaluasi Proyek Revitalisasi KRL KFW', '2019-03-15', '2019-03-15', '', 'Tindak lanjut Terlampir', 'Ruang Rapat Pemaaran', 1, '2019-09-18', 1, 9),
(117, 'Pembahasan Tindak lanjut rencana penarikan KRL KFW', '2019-03-18', '2019-03-18', '', 'Tindak lanjut Terlampir', 'Ruang Rapat Lokomotif Direktorat Sarana Perkeretaapian', 1, '2019-09-18', 1, 9),
(118, 'Rapat Evaluasi Proyek Revitalisasi KRL KFW', '2019-03-22', '2019-03-22', '', 'Tindak lanjut Terlampir', 'Ruang Rapat Pemasaran', 1, '2019-09-18', 1, 9),
(119, 'Permohonan ijin masuk Balai Yasa Manggarai', '2019-04-02', '2019-04-02', '', 'Tindak Lanjut Terlampir', '', 1, '2019-09-18', 4, 9),
(120, 'Review takt KRL Kfw Revitalisasi', '2019-04-04', '2019-04-04', 'Pembahasan Terlampir', '', 'Ruang Rapat Finishing lt 2', 1, '2019-09-18', 1, 9),
(121, 'Penyiapan kereta, setting rangkaian loko dan bandul, tes angin air spring dan brake, pembuatan BA pe', '2019-04-11', '2019-04-13', '1. Pemeriksaan bersama KRL KFW TS 3 sebelum berangkat (INKA, KCI, PJKA)\n2. Pembuatan BA Pemeriksaan bersama\n3. Pengiriman KRL KFW TS 3 dari MRI ke Madiun\n4. Koordinasi bersama INKA, KCI untuk rencana Pemeriksaaan TS 4,6,5,10 Depok ke By MRI', '', '1. Sebelum dilakukan pemeriksaan, dilakukan pengukuran Roda di depo KRL Bukit Duri (INKA-KJI)\n2. Pen', 1, '2019-09-18', 3, 9),
(122, 'Rapat evaluasi dan tindak lanjut KRL KFW', '2019-04-12', '2019-04-12', 'Pembahasan Terlampir', 'Tindak lanjut Terlampir', 'Ruang Rapat Pemasaran', 1, '2019-09-18', 1, 9),
(123, 'Pembahasan penarikan KRL KFW', '2019-04-16', '2019-04-16', 'Pembahasan Terlampir', '', 'Dipo Depok', 1, '2019-09-18', 1, 9),
(124, 'Rapat Evaluasi & Tindak Lanjut Revitalisasi KRL KFW', '2019-04-22', '2019-04-22', '', 'Tindak lanjut Terlampir', 'Ruang Rapat Pemasaran', 1, '2019-09-18', 1, 9),
(125, 'Pemindahan Bogie TS 6 ke Ts 8 KRL KFW', '2019-04-24', '2019-04-26', '1. -Pembongkaran KFW T5 4 (center plust, anti roolbar\n- Koordinasi dengan OHM KCI ((fasilitas, penyiapan workshop, eksekusi)\n2. -lanjut pembongkaran T5 4\n- pasang lembah center plust dan anti roll bar T58 \n- pemindahan bogie M1&M2 T5 4 ke M! &M2 T5 8\n3. lanjut Assy bogie T5 8 utk di kirim ke Madiun\n4. Pemeriksaan keembali roda', '', '1. Bogie M1&M2 T5 4 diganti dengan dummy bogie\n2. -Koordinasi dengan KCI, DAOP I, \n-Pembuatan BA Pem', 1, '2019-09-18', 4, 9),
(126, 'Pembongkaran KRL KFW TS 4, Pemindahan Bogie TS4 - TS 8 & persiapan penarikan KFW TS 8 dari by MRI -M', '2019-04-24', '2019-04-27', '', '', '', 1, '2019-09-18', 4, 9),
(127, 'rapat pembahasan scope pekerjaan SPPJ proyek KRL-KFW', '2019-05-08', '2019-05-08', 'Pembahasan Terlampir', 'Tindak Lanjut Terlampir', 'Ruang Rapat Finishing', 1, '2019-09-18', 1, 9),
(128, 'Rapat tindak lanjut dan evaluasi revitalisasi KRL KFW', '2019-05-10', '2019-05-10', 'Pembahasan Terlampir', 'Tindak Lanjut Terlampir', 'Ruang Rapat Finishing', 1, '2019-09-18', 1, 9),
(129, 'Monitoring Pemeriksaan dan evaluasi revitalisasi 10 trainset KRL KFW', '2019-05-19', '2019-05-21', '', 'Tindak lanjut Terlampir', 'Ruang Rapat Pemasaran', 1, '2019-09-18', 1, 9),
(130, 'Pembongkaran panel FRP End wall revitalisasi KRl KFW', '2019-05-23', '2019-05-23', '', 'Tindak lanjut Terlampir', 'Ruang Rapat Finishing', 1, '2019-09-18', 1, 9),
(131, 'Pembahasan Panel elektrik KRL KFW', '2019-05-27', '2019-05-27', '', 'Tindak lanjut Terlampir', 'Ruang Rapat Teknologi Produksi', 1, '2019-09-18', 1, 9),
(132, 'Inspection dan testing traksi motor untuk proyek KRL KFW', '2019-05-28', '2019-05-28', '1. Perjalaanan Madiun-Surabaya \n2. Perjalanan Stasiun Gubeng-PT. ABB Margomulyo\n3. Tes dan Inspeksi proses Pemeriksaan dan pengujian traksi motor di ABB \n4. Perjalanan PT. ABB Margomulyo-Stasiun Gubeng\n5. Perjalanan surabaya-madiun.', '', '', 1, '2019-09-18', 3, 9),
(133, 'menghadiri meeting bersama kemenhub mengenai KRL KFW dan Depo Cipinang\n', '2019-06-19', '2019-06-20', '1. Pembahasan Penggusuran depo Cipinang\n2. Colour Scheme\n3. Trac KRL Solo-Yogya\nKoordinasi dengan PPK untuk progress KFW\nKooordinasi penambahan anggaran', '', 'Malang', 1, '2019-09-18', 1, 9),
(134, 'Pertemuan dengan Satker PPSP terkait addendum KRL KFW', '2019-06-26', '2019-06-27', '1. Koordinasi persetujuan colour scheme\n2. Koordinasi progress dan tambahan anggaran\n3. Koordinasi penggunaan depo di MRI\n4. Identifikasi bom KFW di MRI', '', '1. Kantor Satker Jakarta\n2. Kantor KCI dan Depo Mri Jakarta', 1, '2019-09-18', 1, 9),
(135, 'Rapat Satker PPSP, Jakarta', '2019-07-10', '2019-07-12', '1. Koordinasi penarikan kereta dan pelepasan komponen \n2. Rapat Bakp. KFW \n3. Pemutahiran Program Mutu\n4. Pembahasan Colour Seteme\n5. Usulan Penambahan anggaran KFW yang belum masuk kontrak.', '', '1. Daop 1&2 MRI\n2. SATKER\n3. SATKER', 1, '2019-09-18', 1, 9),
(136, 'Koordinasi-koordinasi pelaksanaan pembongkaran air dryer, kompressor, door engine & koordinasi denga', '2019-07-24', '2019-07-26', '1. Koordinasi pembongkaran Door engine & compressor\n2. - Koordinasi dengan BPKP untuk penambahan kegiatan diluar kontrak\n- Pengambilan compressor di depo depok \nkoordinasi dengan Satker\n3.-  Pengiriman door engine ke festo\n- pengiriman compressor ke pindad\n- kontrak pengiriman KFL KFW MRI-MN\n4. Memindahkan rubber spring ke kereta TS 5 yang akan dikirim ke INKA\n5. Pengecekan ulang komponen 4 TS yang ada di MRI\n6. Pengembalian alat-alat ke Daop KCI dan MRI', '', '1. Depo KCI MRI Jakarta\n2.BPKP Jakarta\n3. Depo Depok\n4. Jakarta\n5. KCI MRI ke Bekasi dan Bandung\n6. ', 1, '2019-09-18', 1, 9),
(137, 'penambahan lingkup kerja diluar kontrak pekerjaan revisi KRL KFW', '2019-07-25', '2019-07-25', 'konsultasi rencana pendampingan BPKP terkait revisi usulan penagihan biaya revitalisasi proyek kereta KFW', '', 'Kantor pusat BPKP jakarta', 1, '2019-09-18', 1, 9),
(138, 'Mengawasi mengkoordinir kegiatan pembongkaran penginapan komponen KRL/KFW', '2019-07-25', '2019-07-27', '1. mengawasi kegiatan pembongkaran komponen :\n- door engine\n- cylinder pneumatic\n- panel DMV proyek KRL-KFW\n2. Mengkoordinir pengiriman komponen \n- cylinder pneumatic\n- door engine\n- compressor\n- panel Pmv\n3. Koordinasi surat Administrasi dengan pihak KCI', '', '1. Kegiatan dimulai pukul 08.30-16.30 di balaiyasa Manggarai bersama finishing\n2. kegiatan dimulai p', 1, '2019-09-18', 3, 9),
(139, 'Pembentukan teknis usulan penambahan lingkup di luar kontrak pekerjaan revisi KRL/KRW', '2019-07-30', '2019-07-31', '1. Rapat pembahasan kegiatan diluar kontrak\n2. koordinasi dengan satker untuk penawaran harga/biaya penambahan ', '', '1. Direktorat Sarana jakarta\n2. Satker', 1, '2019-09-18', 1, 9),
(140, 'Pembuatan BA Penarikan & pengecekan TS 5 KRl KFW', '2019-08-27', '2019-08-29', '', '', '', 1, '2019-09-18', 1, 9),
(141, 'Kunjungan ke PT. ABB dilanjut rapat progress KFW dengan PJKA', '2019-08-28', '2019-08-28', '1. berangkat kunjungan ke PT. ABB bersama konsultan KFW, untuk mengecek progres perbaikan Traction motor\n2. Rapat progres KRl KFW bersama DJKA dan Bapak Dikomtek', '', '1. Proyek KRL KFW waktu pelaksanaan 13.00-16.00\n2. waktu pelaksanaan 19.00-21.00', 1, '2019-09-18', 3, 9),
(142, 'Koodinasi proyek KRL KFW- Penarikan KRL KFW TS 5 relasi', '2019-09-02', '2019-09-04', '', '', '', 1, '2019-09-18', 1, 9),
(143, 'Pengiriman 15 BG Bangladesh Batch 1', '2019-01-25', '2019-02-07', '', '', '', 1, '2019-09-18', 4, 10),
(144, 'Pengurusan Customs Clearance Proyek BG Bangladesh', '2019-01-26', '2019-01-30', '', '', '', 1, '2019-09-18', 4, 10),
(145, 'Commisioning 15 BG Bangladesh Batch 1', '2019-02-04', '2019-02-16', '', '', '', 1, '2019-09-18', 2, 10),
(146, 'Pengurusan Custom Clearance & Endorse Dokumen', '2019-03-19', '2019-03-24', '', '', '', 1, '2019-09-18', 4, 10),
(147, 'Pengiriman 18 BG Kereta Bangladesh Batch 2', '2019-03-23', '2019-04-07', '', '', '', 1, '2019-09-18', 4, 10),
(148, 'Commisioning 18 BG Kereta Bangladesh Batch 2', '2019-03-31', '2019-04-16', '', '', '', 1, '2019-09-18', 2, 10),
(149, 'Pengurusan Custom Clearance & Endorse Dokumen Proyek BG Kereta Bangladesh Batch 3', '2019-05-09', '2019-05-15', 'Endorse Dokumen, Custom Clearance, Shipment 3 proyek 50 BG Bangladesh', '1. Dokumen dari Sonali Bank dikirim / diteruskan ke Bangladesh Bank untuk dilakukan pengecekan dan s', '', 1, '2019-09-18', 4, 10),
(150, 'Pengiriman 17 BG Kereta Bangladesh Batch 3', '2019-05-12', '2019-05-28', '', '', '', 1, '2019-09-18', 4, 10),
(151, 'Commisioning 17 BG Kereta Bangladesh Batch 3', '2019-05-19', '2019-06-02', '', '', '', 1, '2019-09-18', 2, 10),
(152, 'Menjemput Tamu Bangladesh Railway', '2019-02-22', '2019-02-22', '', '', 'di Surabaya', 1, '2019-09-18', 4, 11),
(153, 'Menjemput Tamu Bangladesh Railway untuk Agenda Study Tour', '2019-03-28', '2019-03-28', '', '', 'di Bandara Juanda, Surabaya', 1, '2019-09-18', 4, 11),
(154, 'Site Visit, Bio Toilet bersama Tim Study Tour Bangladesh Railway', '2019-03-31', '2019-04-01', '1. Mendampingi team Bangladesh Railway Study Tour\n2. Mendampingi team Bangladesh Railway studi banding toilet ramah lingkungan', '', '1. di DIY dan sekitarnya\n2. di Depo Yogyakarta', 1, '2019-09-18', 4, 11),
(155, 'Koordinasi Pengiriman Kereta MG Bangladesh', '2019-07-07', '2019-07-10', '1. Meeting dengan PD, CME Project\n2. Site visit kereta BG', '', '1. Notulen terlampir\n2. di Stasiun Kamlapur Dhaka', 1, '2019-09-18', 1, 11),
(156, 'Koordinasi Kebutuhan Spring 200 MG Bangladesh', '2019-07-17', '2019-07-17', 'Pembahasan Terlampir', 'Tindak lanjut Terlampir', 'Ruang Rapat Logistik 1.6', 1, '2019-09-18', 1, 11),
(157, 'Pengiriman Kereta MG Batch 1 (26 cars)', '2019-07-28', '2019-08-11', '', '', 'ke Bangladesh', 1, '2019-09-18', 4, 11),
(158, 'Commisioning Kereta MG Batch 1 (26 cars)', '2019-08-01', '2019-08-15', '', '', 'ke Bangladesh ', 1, '2019-09-18', 2, 11),
(159, 'Commisioning Kereta MG Bangladesh Batch 1 (Lanjutan)', '2019-09-02', '2019-09-11', '', '', 'ke Bangladesh ', 1, '2019-09-18', 2, 11),
(160, 'Pengadaan 4 TS KRDE Bandara International Adi Soemarmo\r\n', '2019-07-24', '2019-07-24', '', 'Tindak lanjut Terlampir\r\n', 'Ruang Rapat Pemasaran\r\n', 1, '2019-09-18', 1, 12),
(169, 'Notulen rapat', '2019-10-16', '2019-10-16', 'Tindak lanjut pekerjaan re layout panel elektrik proyek Revitalisasa KRL KFW', '-', 'Di ruang rapat Finishing', 29, '2019-10-18', 4, 9),
(170, 'Peminjaman rool filter kfw dan koordinasi  pantograph', '2019-10-24', '2019-09-25', '1. Koordinasi pembahasan pantograph dengan satker\n2. Peminjaman rool filter ke depo krl depok', 'Rool filter dikirim ke pt inka madiun untuk di desain ulang inka', 'Harus dikembalikan ke depo krl depok setelah 2 minggu.', 29, '2019-11-02', 1, 9),
(171, 'Rapat pembahasan rev. KFW. K Ukur. TMC', '2019-10-29', '2019-10-30', '1 Metode kerja pengerjaan\n2 Prgress\n3 Sistem Pengawasan', '1 Untuk KFW akan dilakukan pengawasan termin ke 3 di minggu ke3 Nop 19', '1. Diusahakan sesuai jadwal.', 29, '2019-11-02', 1, 9),
(176, 'Pembahasan Addendum Pengadaan Sarana 186 Car Light Rail trainset (LRT) Jabodebek', '09/26/2019', '09/26/2019', '1. Keterlambatan sarana\r\n2. Biaya Penyesuaian, Penyesuaian jadwal FAT\r\n3. Pengiriman Barang, Pembayaran Harga Barang\r\n4. Tempat menerima Barang, Uji Pertama, dan lain-lain.\r\n', '1. Terhadap Keterlambatan atas sarana dikenakan denda kepada PT. INKA\r\n2. Usulan PT. KAI untuk perhi', '-', 1, '2019-11-18', 1, 8),
(177, 'Permohonan Dinas Luar Negeri Bangladesh', '07/29/2019', '07/29/2019', 'Commisioning Kereta MG Batch 1 (26 Cars)', '-', '-', 1, '2019-11-18', 5, 11),
(178, 'Informasi Pembatalan Dinas Luar Negeri (Bangladesh)', '09/24/2019', '09/24/2019', '-', '-', 'Pengurusan Custom Clearance dan Endorse Dokumen Proyek MG Bangladesh', 1, '2019-11-18', 5, 11),
(179, 'Permohonan Personil Pengiriman Kereta MG Bangladesh Batch 3', '10/07/2019', '10/07/2019', '-', '-', '-', 1, '2019-11-18', 5, 11),
(180, 'Permohonan Pengiriman Komponen', '07/22/2019', '07/22/2019', '-', '-', 'Jadwal Pembongkaran Komponen Door Engine Terlampir', 1, '2019-11-18', 5, 9),
(181, 'Permintaan Personil Untuk Pembongkaran Komponen', '07/22/2019', '07/22/2019', '-', '-', 'Jadwal Pembongkaran Komponen Door Engine Terlampir', 1, '2019-11-18', 5, 9),
(182, 'Revisi Permintaan Konsineering Proyek Revitalisasi KRL KFW', '02/04/2019', '02/04/2019', '-', '-', '-', 1, '2019-11-18', 5, 9);
INSERT INTO `activity_projects` (`id`, `name_activity`, `start_date`, `end_date`, `discussion`, `action`, `information`, `pic`, `created_at`, `category_id`, `project_id`) VALUES
(183, 'Permohonan Ijin Membawa APD Untuk Dinas Luar Kota', '02/21/2019', '02/21/2019', 'Keperluan Memandu Proses Dismounting KFW serta Mencatat No. KA. Bogie, Axle dan Gear Box', '-', '-', 1, '2019-11-18', 5, 9),
(184, 'Undangan Rapat', '03/01/2019', '03/01/2019', 'Pemaparan Progres Proyek Revitalisasi 10 TS KRL KFW', '-', '-', 1, '2019-11-18', 5, 9),
(185, 'Permohonan Ijin Pembukaan WBS Aftersales', '03/04/2019', '03/04/2019', '-', '-', '-', 1, '2019-11-18', 5, 9),
(186, 'Revisi Undangan Rapat', '03/04/2019', '03/04/2019', 'Pemaparan Progress Proyek Revitalisasi 10 TS KRL KFW', '-', '-', 1, '2019-11-18', 5, 9),
(187, 'Persetujuan Pembatalan Tiket', '03/04/2019', '03/04/2019', '-', '-', '-', 1, '2019-11-18', 5, 9),
(188, 'Pembukaan WBS After Sales Perbaikan Gearbox & Traction Motor', '03/08/2019', '03/08/2019', '-', '-', '-', 1, '2019-11-18', 5, 9),
(189, 'Permintaan Persiapan Pengiriman dan Pembuatan Surat Jalan', '03/14/2019', '03/14/2019', '-', '-', '-', 1, '2019-11-18', 5, 9),
(190, 'Laporan Proyek', '03/21/2019', '03/04/2019', '1. Progress Perkembangan Proyek\r\n2. Rencana Pekerjaan Minggu Berikutnya\r\n3. Permasalahan yang terjadi', '-', '-', 1, '2019-11-18', 5, 9),
(191, 'Undangan Rapat', '03/15/2019', '03/15/2019', 'Rapat Evaluasi Proyek Revitalisasi KRL KFW', '-', '-', 1, '2019-11-18', 5, 9),
(192, 'Undangan', '03/22/2019', '03/22/2019', 'Rapat Evaluasi Proyek KRL KFW', '-', '-', 1, '2019-11-18', 5, 9),
(193, 'Permohonan Penyediaan Gudang Khusus Proyek Revitalisasi KRL KFW 10 TS', '03/27/2019', '03/27/2019', '-', '-', '-', 1, '2019-11-18', 5, 9),
(194, 'Undangan Rapat', '04/22/2019', '04/22/2019', 'Rapat Evaluasi dan Tindak Lanjut Revitalisasi KRL KFW', '-', '-', 1, '2019-11-18', 5, 9),
(195, 'Permohonan Persiapan Pengiriman dan Surat Jalan 4 Unit Dummy Bogie', '04/23/2019', '04/23/2019', '-', '-', '-', 1, '2019-11-18', 5, 9),
(196, 'Revitalisasi krl kfw', '2019-11-18', '2019-11-18', 'ordinasi kesesuaian sarana dan prasarana revitalisasi krl kfw', 'Rapat', 'Dibuatkan berita acara', 29, '2019-11-19', 1, 9),
(197, 'Procurement of 10 Unit AC PNR', '10/02/2019', '10/02/2019', 'Terlampir', 'Terlampir', 'Terlampir', 1, '2019-11-25', 1, 13),
(198, 'Permintaan Penerbitan PR Jasa Pengiriman 10 Unit AC PNR', '08/13/2019', '08/14/2019', 'Terlampir', 'Terlampir', 'Terlampir', 1, '2019-11-25', 1, 13),
(199, 'Diskusi 10 AC PNR kemungkinan penggunaan control panel existence', '07/10/2019', '07/10/2019', 'Terlampir', 'Terlampir', 'Terlampir', 1, '2019-11-25', 1, 13),
(200, 'Review Anggaran Procurement of 10 (ten) Air Conditioning Philipine National Railways', '07/03/2019', '07/03/2019', '1. Harga komponen yang tecantum di dalam SPHsudah sesuai dengan harga pasar (sesuai informasi dari vendor melalui SBU AC).\r\n2. Proyek Procurement of 10 (ten) Air Conditioning Philipine National Railways, menurut SPH direncanakan CM 13,74%, angka tersebut kurang dari target perusahaan sebesar minimal 20%.\r\n3. CM bisa ditingkatkan lagi dengan cara menggunakan control panel dan electric plug existing, dengan estimasi tersebut CM bisa meningkat menjadi 18,93%. Angka tersebut masih bisa naik ataupun turun tergantung hasil investigasi terhadap control panel existing yang segera akan dilakukan\r\n4. akan segera dilakukan rapat lanjutan untuk membahas rencana investigasi control panel dan electric plug existing dan segera dibuat buku budget atas proyek tersebut diatas sebagai acuan pengelolaan proyek.', '-', '-', 1, '2019-11-25', 1, 13),
(201, 'Standard of Drawing approval customer', '03/19/2019', '03/19/2019', 'Terlampir', 'Terlampir', '-', 1, '2019-11-25', 1, 13),
(202, 'Mapping kesiapan delivery LRT jabodebek dan DMU Filipina', '06/12/2019', '06/12/2019', 'Terlampir ', 'Terlampir', 'Terlampir', 1, '2019-11-25', 1, 13),
(203, 'Pre Inspection 2 TS DMU', '08/18/2019', '08/18/2019', 'Terlampir', '-', '-', 1, '2019-11-25', 1, 13),
(204, 'Pembahasan Genset 2 TS DMU Philipine', '04/01/2019', '04/01/2019', '1. Uji ulang endurance\r\n2. Modifikasi Improvement\r\n3. Waranty\r\n4. Pengiriman', '1. Genset harus lulus uji ulang endurance performance dilaksanakan setelah di pasang di kereta \r\n2. ', '-', 1, '2019-11-25', 1, 13),
(205, 'Pembahasan Project Filipina', '09/21/2018', '09/21/2018', 'Terlampir', 'Terlampir', 'Terlampir', 1, '2019-11-25', 1, 13),
(206, 'Pembahasan Layanan Tema Investigasi Control Panel Air Conditioning', '08/06/2019', '08/06/2019', 'Terlampir', '-', '-', 1, '2019-11-25', 1, 13),
(207, 'Pemberitahuan Terkait perbandingan antara Standard Welding', '03/25/2019', '03/25/2019', '-', '-', '-', 1, '2019-11-25', 5, 13),
(208, 'Permohonan Personel untuk investigasi panel proyek 10 unit AC PNR', '07/11/2019', '07/11/2019', '-', '-', '-', 1, '2019-11-25', 5, 13),
(209, 'Permohonan investigasi control panel proyek 10 unit AC PNR', '07/22/2019', '07/22/2019', '-', '-', '-', 1, '2019-11-25', 5, 13),
(210, 'Permintaan Penerbitan PR Jasa Pengiriman 10 Unit AC PNR', '08/14/2019', '08/14/2019', '-', '-', '-', 1, '2019-11-25', 5, 13),
(211, 'Permintaan komponen panel proyek 10 unit AC PNR', '08/27/2019', '08/27/2019', '-', '-', '-', 1, '2019-11-25', 5, 13),
(212, 'Permintaan Pembelian Langsung komponen Elektrik Proyek 10 AC PNR', '11/18/2019', '11/18/2019', '-', '-', '-', 1, '2019-11-25', 5, 13),
(213, 'Inspection Gate', '06/12/2019', '06/12/2019', '-', '-', '-', 1, '2019-11-25', 5, 13),
(214, 'Permohonan Kepastian Pengiriman 2 TS DMU Philipina', '08/22/2019', '08/22/2019', '-', '--', '-', 1, '2019-11-25', 5, 13),
(215, 'MoM Site Inspection 2 TS DMU Philippina oleh tim PNR', '08/30/2019', '08/30/2019', '-', '-', '-', 1, '2019-11-25', 5, 13),
(216, 'Koordinasi Progress 4 TS DMU Untuk  Persiapan Inspeksi PNR', '09/30/2019', '09/30/2019', '-', '-', '-', 1, '2019-11-25', 1, 13),
(217, 'Permohonan Personil Pengiriman kereta MG Bangladesh Batch 4', '11/18/2019', '11/18/2019', 'Terlampir', '-', '-', 1, '2019-12-16', 5, 11),
(218, 'Permohonan personil commisioning kereta MG Bangladesh Batch 4', '11/22/2019', '11/22/2019', 'Terlampir', '-', '-', 1, '2019-12-16', 5, 11),
(219, 'Surat komplain permasalahan kereta proyek 50 BG ', '11/22/2019', '11/22/2019', 'Terlampir', 'Terlampir', '-', 1, '2019-12-16', 4, 10),
(220, 'Permohonan personil commisioning kereta MG Bangladesh Batch 5', '12/09/2019', '12/09/2019', 'Terlampir', '-', '-', 1, '2019-12-16', 5, 11),
(221, 'Inspection for 50 BG Bangladesh Shipment 1', '01/07/2019', '01/09/2019', 'Terlampir', '-', '-', 1, '2019-12-17', 1, 10),
(222, 'Lesson Learn Bangladesh BG MG', '01/18/2019', '01/18/2019', 'Terlampir', 'Terlampir', '-', 1, '2019-12-17', 1, 10),
(223, 'Pembahasan Persiapan Inspeksi BG Batch 2 dan Bio Toilet MG', '01/30/2019', '01/30/2019', 'Terlampir', 'Terlampir', '-', 1, '2019-12-17', 1, 11),
(224, 'Inspection for 50 BG Bangladesh Shipment 2', '02/12/2019', '02/15/2019', 'Terlampir', '-', '-', 1, '2019-12-17', 1, 10),
(225, 'Bangladesh Railway Request regarding Bio Toilet as per official letter No. BR/ADB-2/50 BG Contract-5', '02/28/2019', '02/28/2019', 'Terlampir', 'Terlampir', 'Terlampir', 1, '2019-12-17', 1, 10),
(226, 'Pembahasan hasil prototype inspection 200 MG', '05/21/2019', '05/22/2019', 'Terlampir', 'Terlampir', 'Terlampir', 1, '2019-12-17', 1, 11),
(227, 'Koordinasi Kebutuhan Spring 200 MG Bangladesh ', '07/17/2019', '07/17/2019', 'Terlampir', 'Terlampir', '-', 1, '2019-12-17', 1, 11),
(228, 'Kick Of Meeting', '07/24/2019', '07/24/2019', 'Terlampir', '-', '-', 1, '2019-12-17', 1, 12),
(229, 'Pembahasan Inspection & Test Plan dan Design Review Plan 4 TS KRDE BIAS', '10/17/2019', '10/17/2019', 'Terlampir', 'Terlampir', 'Terlampir', 1, '2019-12-17', 3, 12),
(231, 'Review Engineering Schedule 4 TS KRDE KAI', '07/17/2019', '07/17/2019', 'Terlampir', '-', '-', 1, '2019-12-17', 1, 12),
(232, 'Tinjauan Kontrak Pengadaan 20 Trainset KRDE untuk KA Jarak Menengah', '10/07/2019', '10/07/2019', 'Terlampir', '-', '-', 1, '2019-12-17', 1, 12),
(233, 'Kesiapan Prasarana untuk Rolling Stock Dynamic Test (RSDT) LRT Jabodebek antara stasiun Harjamukti d', '09/27/2019', '09/27/2019', 'Terlampir', 'Terlampir', '-', 1, '2019-12-17', 1, 8),
(234, 'Pembahasan Finalisasi Elevasi Depo', '09/26/2019', '09/26/2019', 'Terlampir', 'Terlampir', 'Terlampir', 1, '2019-12-17', 1, 8),
(236, 'Test Load & NDT Spreader Beam Gantry Crane Pit Stop Cibubur KM 14+800 Tol Jagorawi', '10/01/2019', '10/01/2019', 'Terlampir', '-', '-', 1, '2019-12-17', 1, 8),
(237, 'Uji Coba LRT Jabodebek', '10/08/2019', '10/08/2019', 'Terlampir', 'Terlampir', 'Terlampir', 1, '2019-12-17', 1, 8),
(238, 'Rapat Koordinasi Penyelesaian Proyek LRT Jabodebek', '10/10/2019', '10/10/2019', 'Terlampir', 'Terlampir', 'Terlampir', 1, '2019-12-17', 1, 8),
(239, 'Koordinasi FAT LRT Jabodebek TS2, TS3, & TS4', '11/02/2019', '11/02/2019', 'Terlampir', 'Terlampir', 'Terlampir', 1, '2019-12-17', 1, 8),
(240, 'Pembahasan Cost Overrum LRT Jabodebek', '11/05/2019', '11/05/2019', 'Terlampir', 'Terlampir', '-', 1, '2019-12-17', 1, 8),
(241, 'Penambahan Lingkup Pekerjaan Gantry Crane Pit Stop', '11/14/2019', '11/14/2019', 'Terlampir', 'Terlampir', 'Terlampir', 1, '2019-12-17', 1, 8),
(242, 'Rapat Koordinasi Pembayaran Sarana LRT Jabodebek', '11/20/2019', '11/20/2019', 'Terlampir', 'Terlampir', 'Terlampir', 1, '2019-12-17', 1, 8),
(243, 'Pembahasan Tern of Payment Lanjutkan Sarana 31TS LRT Jabodebek', '11/26/2019', '11/26/2019', 'Terlampir', 'Terlampir', 'Terlampir', 1, '2019-12-17', 1, 8),
(244, 'Pengujian Sarana LRT Jabodebek', '11/26/2019', '11/26/2019', 'Terlampir', 'Terlampir', 'Terlampir', 1, '2019-12-17', 1, 8),
(245, 'LRT Jabodebek Depot Workshop', '12/03/2019', '12/03/2019', 'Terlampir', 'Terlampir', 'Terlampir', 1, '2019-12-17', 1, 8),
(246, 'Pembahasan Usulan Term of Payment 31 TS LRT Jabodebek', '11/25/2019', '11/25/2019', 'Terlampir', '-', '-', 1, '2019-12-17', 1, 8),
(248, 'Pembahasan Desain Track Work LRT Jabodebek', '12/05/2019', '12/05/2019', 'Terlampir', 'Terlampir', 'Terlampir', 1, '2019-12-17', 1, 8),
(250, 'Rapat Koordinasi terkait Percepatan Pembangunan LRT Jabodebek dengan Pembahasan Teknis terhadap Peru', '12/02/2019', '12/02/2019', 'Terlampir', 'Terlampir', 'Terlampir', 1, '2019-12-18', 1, 8),
(251, 'Pembahasan PKS Uji Performance Dynamic LRT Jabodebek', '11/29/2019', '11/29/2019', 'Terlampir', 'Terlampir', 'Terlampir', 1, '2019-12-18', 1, 8),
(252, 'Nota Kesepahaman Penyediaan Pasokan Tenaga Listrik untuk PT Industri Kereta Api', '10/11/2019', '10/11/2019', 'Terlampir', 'Terlampir', '-', 1, '2019-12-18', 4, 8),
(253, 'Trial Sequence PIDS Sarana LRT Jabodebek', '12/12/2019', '12/12/2019', 'Terlampir', 'Terlampir', 'Terlampir', 1, '2019-12-18', 1, 8),
(254, 'Pengadaan 1 Unit Track Motor Car Lebar Spoor 1435 MM Untuk Aceh Tahun Anggaran 2019-2020', '07/25/2019', '07/25/2019', 'Terlampir', '-', 'Terlampir', 1, '2019-12-18', 1, 15),
(255, 'Review Final Draft Master Schedule 1 Unit TMC Aceh 2019', '10/10/2019', '10/10/2019', 'Terlampir', '-', 'Terlampir', 1, '2019-12-18', 1, 15),
(256, 'Persiapan penyampaian data kepada Konsultan pengawas TMC dan Kereta Ukur dan Review penyusunan Maste', '10/24/2019', '10/24/2019', 'Terlampir', 'Terlampir', '-', 1, '2019-12-18', 1, 15),
(257, 'Pengadaan 1 Unit Kereta Ukur Prasarana Tahun Anggaran 2019-2020', '07/25/2019', '07/25/2019', 'Terlampir', '-', 'Terlampir', 1, '2019-12-18', 1, 16),
(258, 'Diskusi 10 AC PNR - Kemungkinan penggunaan control panel existing', '07/10/2019', '07/10/2019', 'Terlampir', '-', 'Terlampir', 1, '2019-12-18', 1, 17),
(259, 'Review Anggaran 10 Unit AC PNR', '07/03/2019', '07/03/2019', 'Terlampir', '-', '-', 1, '2019-12-18', 1, 17),
(260, 'Pengiriman 10 Unit AC PNR', '08/13/2019', '08/13/2019', 'Terlampir', 'Terlampir', 'Terlampir', 1, '2019-12-18', 1, 17),
(261, 'Permintaan Penerbitan PR Jasa Pengiriman 10 Unit AC PNR', '08/14/2019', '08/14/2019', '-', '-', '-', 1, '2019-12-18', 5, 17),
(262, 'Pembahasan kontrak 10 AC PNR', '08/06/2019', '08/06/2019', 'Terlampir', '-', '-', 1, '2019-12-18', 1, 17),
(263, 'Pengiriman 10 Unit AC PNR \"update\"', '10/02/2019', '10/02/2019', 'Terlampir', 'Terlampir', 'Terlampir', 1, '2019-12-18', 1, 17),
(264, 'Persiapan Pemasangan AC Proyek 10 Unit AC PNR', '11/22/2019', '11/22/2019', 'Terlampir', 'Terlampir', 'Terlampir', 1, '2019-12-18', 1, 17),
(265, 'Minutes Of Meeting Progress Delivery Purchase Order 4400000267 Project LRT JABODEBEK', '12/10/2019', '12/10/2019', 'Terlampir', '-', '-', 1, '2019-12-26', 1, 8),
(266, 'Percepatan Ultimate dan Pembahasan perjanjian kerja sama Rolling Stock LRT Jabodebek', '09/23/2019', '09/27/2019', 'Terlampir', '-', '-', 1, '2020-01-02', 1, 8),
(267, 'Monitoring Revitalisasi KRL KFW', '09/26/2019', '09/27/2019', 'Monitoring tim DJKA untuk progres termin II KRL KFW', '-', '-', 1, '2020-01-02', 3, 9),
(268, 'Site Visit temporary pit stop LRT Jabodebek', '10/02/2019', '10/02/2019', 'Terlampir', '-', 'Terlampir', 1, '2020-01-02', 3, 8),
(269, 'Inspeksi jarak bebas proyek LRT Jabodebek', '09/26/2019', '09/27/2019', '1. Meeting Vertikal Entrance Depo LRT Jabodebek\r\n2. Tinjauan Stasiun Harjamukti', '-', 'Terlampir', 1, '2020-01-02', 3, 8),
(270, 'Diskusi terkait addendum LRT Jabodebek', '09/24/2019', '09/24/2019', 'Diskusi terkait addendum LRT Jabodebek', '-', 'Terlampir', 1, '2020-01-02', 1, 8),
(271, 'Menghadiri rapat koordinasi percepatan pembangunan LRT Jabodebek', '10/03/2019', '10/03/2019', 'Terlampir', '-', 'Terlampir', 1, '2020-01-02', 1, 8),
(272, 'Kunjungan proses Combine test prpulsi LRT Jabodbek di CAF Spanyol', '10/22/2019', '10/26/2019', '-', '-', '-', 1, '2020-01-02', 3, 8),
(273, 'Peminjaman Rol Filter untuk Pengadaan baru KRL KFW di PT. KCI dan Satker', '10/24/2019', '10/25/2019', 'Terlampir', '-', 'Terlampir', 1, '2020-01-02', 3, 9),
(274, 'Rapat Koordinasi Pengiriman sarana LRT Jabodebek TS 1', '10/04/2019', '10/04/2019', 'Terlampir', '-', 'Terlampir', 1, '2020-01-02', 1, 8),
(275, 'Rapat Koordinasi Teknis, Rapat koordinasi pengujian sarana, Ekspedisi Pengiriman sarana ', '10/07/2019', '10/13/2019', 'Terlampir', '-', 'Terlampir', 1, '2020-01-02', 1, 8),
(276, 'Rapat Koordinasi Teknis LRT Jabodebetabek', '10/15/2019', '10/16/2019', 'Terlampir', '-', '-', 1, '2020-01-02', 1, 8),
(277, 'Rapat Koordinasi LRT Jabodetabek', '10/16/2019', '10/16/2019', 'Mengikuti Rapat koordinasi LRT Jabodebek di kantor menko maritim Jakarta', '-', 'Terlampir', 1, '2020-01-02', 1, 8),
(278, 'Koordinasi dan Penandatanganan BAPP termin II revitalisasi KRL KFW', '10/15/2019', '10/15/2019', '-', '-', '-', 1, '2020-01-02', 1, 9),
(279, 'Rapat LRT Jabodebek di stasiun Gondangdia', '10/21/2019', '10/21/2019', 'Terlampir', '-', 'Terlampir', 1, '2020-01-02', 1, 8),
(280, 'Workshop PSD (Passenger screen Door & Power Supply', '10/10/2019', '10/10/2019', 'Workshop PSD (Passenger screen Door & Power Supply LRT Jabodebek', '-', 'Terlampir', 1, '2020-01-02', 4, 8),
(281, 'Koordinasi proyek KRL KFW-Penarikan KRL KFW TS 5 relasi', '09/05/2019', '09/05/2019', '1. Koordinasi dengan satker untuk laporan bulanan revitalisasi KRL KFW\r\n2. Pengawalan kereta', '-', '-', 1, '2020-01-02', 1, 9),
(282, 'Konfirmasi Buffer Stop & Dynamic Kinematic Envelope', '10/30/2019', '10/31/2019', 'Terlampir', '-', 'Terlampir', 1, '2020-01-02', 1, 8),
(283, 'Konfirmasi Buffer Stop & Dynamic Kinematic Envelope', '10/30/2019', '11/01/2019', '-', '-', 'Terlampir', 1, '2020-01-02', 1, 8),
(284, 'Witness perbaikan traksi motor di ABB Surabaya', '10/25/2019', '10/25/2019', 'Inspeksi progres perbaikan traksi motor KRL KFW di PT. ABB Surabaya', '-', 'Terlampir', 1, '2020-01-02', 3, 9),
(285, 'Submit dokumen tender procurement of train (standar gauge, DMU) PNR', '10/20/2019', '10/24/2019', 'Terlampir', '-', 'Terlampir', 1, '2020-01-02', 4, 13),
(286, 'Kunjungan proses combine test propulsi LRT Jabodebek di CAF Spanyol', '10/22/2019', '10/26/2019', 'Terlampir', '-', 'Terlampir', 1, '2020-01-02', 3, 8),
(287, 'Meeting persiapan komisioning', '2020-01-06', '2020-01-06', 'Pembahasan teknis', 'Tim berangkat 12 jan 2020', '', 37, '2020-01-06', 5, 11),
(291, 'Pertemuan awal dengan BPKP terkait Pra Audit Kontrak Sarana LRT Jabodebek dan Gantry Crane Pit Stop', '11/14/2019', '11/16/2019', 'Terlampir', 'Terlampir', 'Terlampir', 1, '2020-01-22', 1, 8),
(292, 'Pembahasan Keterlambatan Tahap III Penyerahan ke 7 sampai dengan ke 9 atas pengadaan 438 Unit kereta', '2019-11-18', '2019-11-18', 'Terlampir', 'Terlampir', 'Terlampir', 1, '2020-01-22', 1, 8),
(294, 'Pembahasan Cost Overrun Proyek LRT Jabodebek', '11/06/2019', '01/06/2020', 'Terlampir', 'Terlampir', 'Terlampir', 1, '2020-01-23', 1, 8),
(295, 'Pembahasan perjanjian kerjasama Uji Performance Dinamik Sarana LRT', '11/11/2019', '11/11/2019', 'Terlampir', 'Terlampir', 'Terlampir', 1, '2020-01-23', 1, 8),
(296, 'Rapat Internal PT INKA (PERSERO)', '11/19/2019', '11/20/2019', '1. Pembahasan Analisa Finansial FS Dry Port Filipina\r\n2. Koordinasi rencana Commisioning vendor untuk proyek 4 TS DMU\r\n3. Koordinasi rencana Pre Inspection oleh team PNR', '-', 'Terlampir', 1, '2020-01-23', 1, 13),
(297, 'Pembahasan Term of Payment Lanjutan 31 TS LRT Jabodebek', '11/26/2019', '11/26/2019', 'Terlampir', 'Terlampir', 'Terlampir', 1, '2020-01-23', 1, 8),
(298, 'Manila LRTA Line 2 Bersama CAF', '10/27/2019', '10/29/2019', 'Terlampir', '-', 'Terlampir', 1, '2020-01-23', 1, 13),
(299, 'Rapat pembahasan term of payment dan Pengurusan Visa', '11/20/2019', '11/21/2019', 'Terlampir', '-', 'Terlampir', 1, '2020-01-23', 1, 8),
(300, 'Pembahasan Cost Over run Proyek LRT Jabodebek', '11/06/2019', '11/06/2019', 'Terlampir', '-', 'Terlampir', 1, '2020-01-23', 1, 8),
(301, 'Pembahasan Perjanjian Kerjasama Uji Peformance Dynamic  LRT', '11/29/2019', '11/29/2019', 'Pembahasan PKS Uji Dinamic Sarana LRT Jabodebek di Gedung Arthaloka Jakarta', 'Terlampir', 'Terlampir', 1, '2020-01-23', 1, 8),
(302, 'Koordinasi LRT Jabodebek', '12/02/2019', '12/05/2019', 'Terlampir', 'Terlampir', 'Terlampir', 1, '2020-01-23', 1, 8),
(303, 'Satker-BAPP dan Add KFW, penarikan kereta dan kontrak kfw', '12/10/2019', '12/12/2019', 'Terlampir', 'Terlampir', 'Terlampir', 1, '2020-01-23', 1, 9),
(304, 'Pengujian kereta LRT Jabodebek dengan Beban AW3', '12/09/2019', '12/09/2019', 'Rapat Pembahasan Uji kereta LRT AW3 dengan DIR PRASARANA di gedung graha 55 Tanah Abang Jakarta', 'Terlampir', 'Terlampir', 1, '2020-01-23', 1, 8),
(305, 'Koordinasi LRT Jabodebek', '12/02/2019', '12/04/2019', 'Terlampir', '-', 'Terlampir', 1, '2020-01-23', 1, 8),
(306, 'Rapat Pembahasan Penentuan lokasi pengujian AW 3', '12/17/2019', '12/17/2019', 'Terlampir', '-', 'Terlampir', 1, '2020-01-23', 1, 8),
(307, 'Koordinasi LRT Jabodebek dan Addendum LRT Jabodebek', '12/11/2019', '12/13/2019', 'Terlampir', '-', 'Terlampir', 1, '2020-01-23', 1, 8),
(308, 'Pembahasan Dokumen Prosedur Pengujian Sarana LRT Jabodebek', '12/17/2019', '12/18/2019', 'Terlampir', '-', 'Terlampir', 1, '2020-01-23', 1, 8),
(309, 'Pengujian traction motor LRT palembang', '12/18/2019', '12/19/2019', 'Terlampir', 'Terlampir', 'Terlampir', 1, '2020-01-23', 1, 8),
(312, 'Test Load & NDT Spreader Beam Gantry Crane Pit Stop Cibubur KM 14+800 Tol Jagorawi', '10/01/2019', '10/01/2019', 'Terlampir', 'Terlampir', 'Terlampir', 1, '2020-02-26', 1, 8),
(313, 'Uji Coba LRT Jabodebek', '10/08/2019', '10/08/2019', 'Terlampir', 'Terlampir', 'Terlampir', 1, '2020-02-26', 1, 8),
(314, 'Pembahasan Teknis Platform Screen Door LRT Jabodebek', '10/10/2019', '10/10/2019', 'Terlampir', 'Terlampir', 'Terlampir', 1, '2020-02-26', 1, 8),
(315, 'Paparan KEMENKOMAR Tentang LRT JABODEBEK', '', '', 'Terlampir', 'Terlampir', 'Terlampir', 1, '2020-02-26', 1, 8),
(316, 'Paparan KEMENKOMAR Tentang LRT JABODEBEK', '10/29/2019', '10/29/2019', 'Terlampir', 'Terlampir', 'Terlampir', 1, '2020-02-26', 1, 8),
(317, 'Pembahasan Lingkup Pekerjaan Gantry Crane Pit Stop', '11/14/2019', '11/14/2019', 'Terlampir', 'Terlampir', 'Terlampir', 1, '2020-02-26', 1, 8),
(318, 'Pembahasan Sistem Penangkal Petir dan Sistem Pentanahan', '11/17/2019', '11/17/2019', 'Terlampir', 'Terlampir', 'Terlampir', 1, '2020-02-26', 1, 8),
(319, 'Rapat Koordinasi Pembayaran Sarana LRT Jabodebek', '11/20/2019', '11/20/2019', 'Terlampir', 'Terlampir', 'Terlampir', 1, '2020-02-26', 1, 8),
(320, 'Pengujian Sarana LRT Jabodebek', '11/26/2019', '11/26/2019', 'Terlampir', 'Terlampir', 'Terlampir', 1, '2020-02-26', 1, 8),
(321, 'Pembahasan Term of Payment Lanjutan Sarana 31 TS LRT Jabodebek', '11/26/2019', '11/26/2019', 'Terlampir', 'Terlampir', 'Terlampir', 1, '2020-02-26', 1, 8),
(322, 'Pembahasan PKS Uji Perfomance Dynamic LRT Jabodebek', '11/29/2019', '11/29/2019', 'Terlampir', 'Terlampir', 'Terlampir', 1, '2020-02-26', 1, 8),
(323, 'Pembahasan Percepatan Proyek LRT Jabodebek', '11/29/2019', '11/29/2019', 'Terlampir', 'Terlampir', 'Terlampir', 1, '2020-02-26', 1, 8),
(324, 'Pembahasan Lingkup Pekerjaan Gantry Crane Pit Stop', '', '', 'Terlampir', 'Terlampir', 'Terlampir', 1, '2020-02-26', 1, 8),
(325, 'Pembahasan Desain Track Work LRT Jabodebek', '12/05/2019', '12/05/2019', 'Terlampir', 'Terlampir', 'Terlampir', 1, '2020-02-26', 1, 8),
(326, 'Progress Delivery Purchase Order 4400000267 Project LRT Jabodebek', '12/10/2019', '12/10/2019', 'Terlampir', 'Terlampir', 'Terlampir', 1, '2020-02-26', 1, 8),
(327, 'Percepatan Pembangunan LRT Jabodebek', '12/10/2019', '12/10/2019', 'Terlampir', 'Terlampir', 'Terlampir', 1, '2020-02-26', 1, 8),
(328, 'Pembahsan Addendum Pengadaan Sarana 186 Car Light Rail Transit ( LRT Jabodebek)', '12/11/2019', '12/11/2019', 'Terlampir', 'Terlampir', 'Terlampir', 1, '2020-02-26', 1, 8),
(329, 'Pembahasan Update Proyek LRT Jabodebek hingga 13 Desember 2019', '12/13/2019', '12/13/2019', 'Terlampir', 'Terlampir', 'Terlampir', 1, '2020-02-26', 1, 8),
(330, 'Pembahasan Dokumen Prosedur Pengujian Sarana LRT Jabodebek', '12/17/2019', '12/17/2019', 'Terlampir', 'Terlampir', 'Terlampir', 1, '2020-02-26', 1, 8),
(331, 'Pembahsan Penentuan Lokasi Pengujian AW 3 dengan Kecepatan 80 km/jam', '12/17/2019', '12/17/2019', 'Terlampir', 'Terlampir', 'Terlampir', 1, '2020-02-26', 1, 8),
(332, 'Sertu', '2020-02-26', '2020-02-26', 'F', 'F', 'H', 46, '2020-02-26', 1, 8),
(333, 'test judul 1', '2020-04-20', '2020-04-21', 'test pembahasan', 'test tindak lanjut', '-', 1, '2020-04-20', 1, 16),
(334, 'Meeting', '2020-04-20', '2020-04-20', 'Lrt', 'Segera', 'Urgent', 1, '2020-04-20', 1, 8),
(335, 'Pembahasan Jarak Bebas Sarana dan Prasarana pada Stasiun LRT Jabodebek', '2020-01-15', '2020-01-15', 'Terlampir', 'a. PT INKA (Persero) akan membuat justifikasi teknis terkait kondisi jarak bebas sarana-prasarana LRT Jabodebek pada stasiun Lurus dan akan dipaparkan pada tanggal 20 Januari 2020 dan untuk stasiun lengkung pada tanggal 5 Februari 2020.\r\nb. Satker LRT Jabodebek akan memfasilitasi terkait rapat-rapat tersebut', 'terlampir', 1, '2020-05-03', 1, 8),
(336, 'Pembahasan PEngawasan FAT Sarana', '2020-01-16', '2020-01-16', '1. Dokumen Sarana\r\n2. Pengiriman Sarana\r\n3. Integrator Sarana dan Prasarana\r\n4. Pengujian Sarana dan Stabling Sarana\r\n5. Pengujian FAT', 'Terlampir', 'Terlampir', 1, '2020-05-03', 1, 8),
(337, 'Pembahasan Dokumen Prosedur Pengujian Sarana LRT Jabodebek', '2020-01-17', '2020-01-17', '1. Dokumen yang harus diserahkan\r\n2. Dokumen Prosedur uji statis\r\n3. Prosedur FAT\r\n4. Laporan FAT', 'Terlampir', 'Terlampir', 1, '2020-05-03', 1, 8),
(338, 'Pembahasan Jarak Bebas Sarana dan Prasarana pada Stasiun Lurus dan Perubahan Coupler System', '2020-01-21', '2020-01-21', 'Terlampir', '1) Pada prinsipnya forum sepakat dengan usulan dari PT INKA namun perlu dibuatkan SOP terkait automatic coupler system tersebut\r\n2) PT Adhi Karya akan mengkonfirmasi terkait produksi buffer stop apakah masih bisa dilakukan perubahan desain atau tidak.\r\n3) Akan dilakukan pembahasan kembali pada tanggal 3 Februari 2020 terkait perubahan Buffer Stop tersebut', 'Terlampir', 1, '2020-05-03', 1, 8),
(339, 'Rapat Pembahasan Dokumen dan Pengujian Dinamis', '2020-01-21', '2020-01-22', '1. Persyaratan dokumen dalam proses integrasi sarana-prasarana\r\n2. Dokumen yang harus diserahkan sebelum pengiriman sarana\r\n3. Dokumen prosedur pengujian FAT\r\n4. Prosedur pengujian dynamic\r\n5. SOP FAT', 'Terlampir', 'Terlampir', 1, '2020-05-03', 1, 8),
(340, 'Pembahasan Dokumen dan FAT', '2020-01-31', '2020-01-31', '1. Progres Produksi\r\n2. Pelaksanaan Pengawasan \r\n3. Tindak Lanjut Temuan\r\n4. Dokumen', 'Terlampir', 'Terlampir', 1, '2020-05-03', 1, 8),
(341, 'Rapat Koordinasi Light Rail Transit (LRT)', '2020-02-03', '2020-02-03', '1. Finalisasi Feasibility Study \r\n2. Progres Pembebasan Lahan\r\n3. Technical Issues Sarana dan Prasarana\r\n4. Progres Pembentukan Project Management Unit (PMU) LRT Jabodebek', 'Terlampir', 'Terlampir', 1, '2020-05-03', 1, 8),
(342, 'Rapat Pembahasan Jarak Bebas Sarana-Prasarana LRT Jabodebek pada Stasiun Lengkung dan Buffer Stop and Automatic Coupler System', '2020-02-04', '2020-02-04', 'Terlampir', 'Terlampir', 'Terlampir', 1, '2020-05-03', 1, 8),
(343, 'Pembahasan Addendum Perjanjian Pengadaan 186 Car LRT Jabodebek', '2020-02-04', '2020-02-04', 'Addendum Perjanjian', 'Terlampir', 'Terlampir', 1, '2020-05-03', 1, 8),
(344, 'Rapat Integrasi Sarana-Prasarana LRT Jabodebek', '2020-02-04', '2020-02-04', '1. Interface / Integrasi Tindak Lanjut', 'Terlampir', 'Terlampir', 1, '2020-05-03', 1, 8),
(345, 'PMO LRT Jabodebek', '2020-02-12', '2020-02-12', 'Terlampir', 'Terlampir', 'Terlampir', 1, '2020-05-03', 1, 8),
(346, 'PMO LRT Jabodebek', '2020-02-13', '2020-05-13', 'Terlampir', 'Terlampir', '-', 1, '2020-05-03', 1, 8),
(347, 'Pembahasan Persiapan Detail Teknis Pengujian Dinamis Sarana LRT Jabodebek', '2020-02-19', '2020-02-19', '1. Persyaratan Dokumen Sebelum Pengiriman Sarana\r\n2. Tahapan Pengujian\r\n3. Setting Parameter Internal INKA\r\n4. Dynamic Test', 'Terlampir', 'Terlampir', 1, '2020-05-03', 1, 8),
(348, 'Rapat Pembahasan Addendum Perjanjian Pengadaan Sarana 186 Car LRT Jabodebek', '2020-02-24', '2020-02-24', 'Addendum Kontrak ', 'Terlampir', 'Terlampir', 1, '2020-05-03', 1, 8),
(349, 'Pembahasan Denda Sarana LRT Jabodebek', '2020-02-20', '2020-02-20', '1. Perhitungan Denda Skema Perhitungan Denda\r\n2. Skema Perhitungan Denda', 'Terlampir', 'Terlampir', 1, '2020-05-03', 1, 8),
(350, 'Review Dokumen Teknis dan Laporan FAI Komponen Sarana LRT Jabodebek', '2020-02-27', '2020-02-27', '1. Dokumen\r\n2. FAI Traction conventer (VVVF)\r\n3. FAI Traction Motor\r\n4. FAI Air Conditioner5. Laporan Hasil Pengujian Insulasi Kabel\r\n5. Hasil FAI Door System', 'Terlampir', 'Terlampir', 1, '2020-05-03', 1, 8),
(351, 'PMO ', '2020-02-27', '2020-02-27', 'Terlampir', 'Terlampir', 'Terlampir', 1, '2020-05-03', 1, 8),
(352, 'Pembahasan Addendum Proyek LRT Jabodebek antara PT KAI dengan PT INKA', '2020-03-03', '2020-03-03', 'Terlampir', 'Terlampir', 'Terlampir', 1, '2020-05-05', 1, 8),
(353, 'Koordinasi TCMS-OBCU, ground reference dan kebutuhan pengujian TCMS-OBCU', '2020-03-04', '2020-03-04', '1. Kebutuhan menyamakan Ground Reference\r\n2. Uji Fungsi TCMS_OBCU', 'Terlampir', '-', 1, '2020-05-05', 1, 8),
(354, 'PMO LRT Jabodebek', '2020-03-04', '2020-03-04', 'Terlampir', '-', '-', 1, '2020-05-05', 1, 8),
(355, 'Pembahasan Lanjutan PIDS pada sarana LRT Jabodebek', '2020-03-06', '2020-03-06', 'PIS pada Sarana LRT Jabodebek', 'Terlampir', '-', 1, '2020-05-05', 1, 8),
(356, 'Integrasi Persinyalan dan Sarana LRT Jabodebek (SIV, Floating Voltage OBCU)', '2020-03-11', '2020-03-11', '1. Floating Voltage\r\n2. Gangguan SIV dan OBCU\r\n3. ICD\r\n4. Integrator Sarana\r\n5. Communication Protocol TCMS-OBCU\r\n6. Simulasi Handshaking Software\r\n7. Wiring Door Loop', 'Terlampir', '-', 1, '2020-05-05', 1, 8),
(357, 'Pembahasan Dokumen Pengujian Dinamis Sarana LRT Jabodebek', '2020-03-11', '2020-10-21', '<p>1. Dokumen Pengujian Dinamis Sarana</p>\r\n\r\n<p>2. Setting Parameter</p>\r\n\r\n<p>3. Pengujian Dinamis</p>\r\n\r\n<p>4. Dokumen Hasil Setting Parameter</p>\r\n', 'Terlampir', '-', 1, '2020-05-05', 1, 8),
(358, 'Discussion about dynamic procedure LRT Jabodebek', '2020-03-12', '2020-03-12', '<p>1. Grouping of trainset that will be used for crush load condition (Crush Load only Type Test)</p>\r\n\r\n<p>2. Verticle / Track Interaction</p>\r\n\r\n<p>3. Traction Performance Procedure</p>\r\n\r\n<p>4. Braking Test Procedure</p>\r\n\r\n<p>5. Propulsion and braking thermal</p>\r\n\r\n<p>6. Speed Regulation Procedure</p>\r\n\r\n<p>7. CCD and compability power contact Procedure</p>\r\n\r\n<p>8. Air System and compressor duty cycle Procedure</p>\r\n\r\n<p>9. Short circuit Test Procedure</p>\r\n\r\n<p>10. Interruption and voltage jump</p>\r\n', 'Terlampir', '-', 1, '2020-05-05', 1, 8),
(363, 'Rapat TMC Aceh', '2020-05-05', '2020-05-05', 'Progres dan penjadwalan ulang', 'Justifikasi', 'Terlampir', 29, '2020-05-11', 1, 9),
(364, 'Rapat K Ukur', '2020-05-05', '2020-05-05', 'Progres dan penjadwalan ', 'Justifikasi', 'Terkampir', 29, '2020-05-11', 1, 9),
(365, 'TMC dan K Ukur ', '2020-05-04', '2020-05-04', 'Koordinasi pencapaian progres tmc dan ukur', 'Laporan progres ke Tim konsultan PT skalarido', '-', 29, '2020-05-11', 1, 9),
(366, 'Pembahasan Justifikasi Desain & Estimasi harga Addendum Revitalisasi  KFW', '2019-06-24', '2019-06-24', 'Addendum Harga Revitalisasi KFW', 'Terlampir', 'Terlampir', 1, '2020-05-11', 1, 9),
(367, 'Prosedur Pengujian Motor Traction Proyek Revitalisasi KRL KFW 2018', '2019-11-07', '2019-11-07', '<p>1. Prosedur Pengujian Motor Traction</p>\r\n\r\n<p>2. Pendampingan pada saat pengujian dan jaminan kwalitas</p>\r\n', 'Terlampir', 'Terlampir', 1, '2020-05-11', 1, 9),
(368, 'Pembahasan terkait Permohonan Pinjam Turntable untuk Memutar Kereta', '2019-10-23', '2019-10-23', 'Terlampir', 'Terlampir', 'Terlampir', 1, '2020-05-11', 1, 9),
(369, 'Proyeksi 4 TS KRDE BIAS', '2020-01-28', '2020-01-28', 'Forecasting Proyeksi 4 TS KRDE BIAS', '-', 'Terlampir', 1, '2020-05-11', 1, 12),
(370, 'Review Proyek 4 TS KRDE BIAS', '2020-03-04', '2020-03-04', 'Terlampir', 'Terlampir', '-', 1, '2020-05-11', 1, 12),
(372, 'aktivitas metting bersama kai di jakarta', '2020-05-13', '2020-05-14', 'rapart lrt 2', 'terlampir', '-', 1, '2020-05-13', 1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `activity_project_plans`
--

CREATE TABLE `activity_project_plans` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `plan_start_date` varchar(50) NOT NULL,
  `plan_end_date` varchar(50) NOT NULL,
  `created_at` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `status_realization` varchar(50) NOT NULL,
  `note` text NOT NULL,
  `pic` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `level_priority` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity_project_plans`
--

INSERT INTO `activity_project_plans` (`id`, `name`, `plan_start_date`, `plan_end_date`, `created_at`, `description`, `status_realization`, `note`, `pic`, `project_id`, `level_priority`) VALUES
(12, 'aktivitas', '2019-10-01', '2019-10-08', '2019-10-01', 'Aktivitas 1', 'terealisasi', 'Catatan ', 2, 12, 'normal'),
(13, 'Senin rapat bersama IT', '2019-10-01', '2019-10-01', '2019-10-01', 'Membahas server hosting', 'on progress', 'Segera di laksanakan', 1, 9, 'normal'),
(14, 'RAkor dengan Suplier Gantry Crane LRT bersama Logistik di Mdn', '2019-11-20', '2019-11-20', '2019-11-19', '-', 'Rencana', '-', 10, 8, 'normal'),
(15, 'Rakor PKS Uji dinamis ', '2019-11-29', '2019-11-29', '2019-11-27', 'Di Arthaloka / Mess.  inka  Jakarta', 'Rencana', '', 10, 8, 'normal'),
(16, 'Meeting final Log Inka dg PT. Wirya', '2019-11-28', '2019-11-28', '2019-11-27', '        Sewa operasi gantry crane  untuk angkat Sarana LRT ', 'Rencana', '        ', 10, 8, 'urgent'),
(17, 'Kontrak penarikan kereta 3 ts dan ijin uji coba Adaptor couplet', '2020-01-08', '2020-01-09', '2020-01-06', 'Koordinasi dng Daop 1 dan dipo kci mri', 'on progress', 'Dinas', 29, 9, 'normal'),
(18, 'Rapat koordinasi', '2020-01-06', '2020-01-06', '2020-01-06', 'Pembahasan uji jalan dan pengiriman 3 ts krl kfw', 'terealisasi', 'Tibdak lanjut rapat Komett tanggal 3 jam 2020', 29, 9, 'normal'),
(19, 'test aktivitas ', '2020-04-20', '2020-04-21', '2020-04-20', ' test deskripsi', 'on progress', ' catatan', 1, 16, 'normal');

-- --------------------------------------------------------

--
-- Table structure for table `attachments`
--

CREATE TABLE `attachments` (
  `id` int(11) NOT NULL,
  `activity_project_id` int(11) NOT NULL,
  `attachment` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attachments`
--

INSERT INTO `attachments` (`id`, `activity_project_id`, `attachment`) VALUES
(2, 2, 'LRTJBDB2-MeetingpercepatanpembangunanLRT Jabodebek(7-8 Jan2019).pdf'),
(3, 3, 'LRTJBDB3-FAItractionmotoruntukproyekLRTJabodebek(7-9 Jan2019).pdf'),
(4, 4, 'LRTJBDB4-(KAI)NotulenRapat 9-10Januari2019-RapatPembahasanScheduleProduksiSaranaLRTJabodebek.pdf'),
(5, 5, 'LRTJBDB5-KR.104 I 1-DIV.LRT-2019-15Jan2019-PermohonanPenyesuaianInteriordanDimensiKursiLRTJabodebek.'),
(6, 6, 'LRTJBDB6-Paparanhasilstudidanpaparanstudikelayan(15-16Jan2019).pdf'),
(7, 7, 'LRTJBDB7-(KAI)NotulenRapat16-18Januari 2019-PemantauanProgressProduksiSaranaLRTJabodebek.pdf'),
(8, 8, 'LRTJBDB8-(BPPT)NotulenRapatHighLevelMeeting-16Januari2019JWMarriotSurabaya-HasilKegiatanPerkeretapia'),
(9, 9, 'LRT-JBDB9-DaftarHadirRapatFGDkegiatanperkeretaapian16Januari2019diJWMarriotSurbaya.pdf'),
(10, 10, 'LRT-JBDB10-Notulenrapat17Januari2019-MRBCarbodyM-011LRTJabodebek.pdf'),
(11, 11, 'LRTJBDB11-Notulenrapat17Januari2019-EvaluasiCarbodyLRTJabodebek.pdf'),
(12, 12, 'LRTJBDB12-M-01442201922Januari2019-InformasiJadwalKedatanganSubAssyCarbodyLRTJabodebek.pdf'),
(13, 13, 'LRTJBDB13-KoordinasiteknissaranadanprogresssaranaLRTJabodebek(22-24Jan2019).pdf'),
(14, 14, 'LRTJBDB14-Attendancelist23Jan2019-PengawasprogresLRTJabodebek.pdf'),
(15, 15, 'LRTJBDB15-M-0029430201923Jan2019-EvaluasiCarbodyproyekLRTJabodebek.pdf'),
(16, 16, 'LRTJBDB16-Rapat terkaitLRTJabodebek(23-24Jan2019).pdf'),
(17, 17, 'LRTJBDB17-FAIkomponenairsealprojekLRTJabodebek(23-27Januari2019).pdf'),
(18, 18, 'LRTJBDB18-Attendancelist24Januari2019-PengawasanprogressLRTJabodebek.pdf'),
(19, 19, 'LRTJBDB19-MeetingdenganKAIterkaitLRTJabodebek(29Januari2019).pdf'),
(20, 20, 'LRTJBDB20-RapatKoordinasipercepatanpenyelesaianLRTJabodebek(31Januari2019).pdf'),
(21, 21, 'LRTJBDB21-Attendancelist6Feb2019-PembahasandendaCAFterkaitLRTJabodebek.pdf'),
(22, 22, 'LRTJBDB22-(KAI)NotulenRapat7Februari2019-PembahasanRevisiMasterScheduleLRTJabodebek.pdf'),
(23, 23, 'LRTJBDB23-MeetingdenganDeputyTransportasiPemprovJakarta(14-15Februari2019).pdf'),
(24, 24, 'LRTJBDB24-SurveylokasidanpembahasanrencanakerjaTemporaryPitStop(14-15Februari2019).pdf'),
(25, 25, 'LRTJBDB25-(KAI)NotulenRapat15Februari2019-RapatPembahasanTemporaryPitStopLRTJabodebek.pdf'),
(26, 26, 'LRTJBDB26-RapatKoordinasiPembahasanIDCproyekLRTJabodebek(19-20Februari2019).pdf'),
(27, 27, 'LRTJBDB27-(KAI)NotulenRapat25-26Februari2019-PembahasanSchedulePembayaranSaranaLRTJabodebek.pdf'),
(28, 28, 'LRTJBDB28-Notulenrapat26Februari 2019-MonitoringdanEvaluasiRekomendasiKNKT.pdf'),
(29, 29, 'LRTJBDB29-MeetingterkaitLRTJabodebek(28Februari-1Maret2019).pdf'),
(30, 30, 'LRTJBDB30-NotulenRapat5Maret2019-KoordinasiUjiFatigueBogieFrameLRTJabodebek.pdf'),
(31, 31, 'LRTJBDB31-PreparationmeetingperihalpengujianbogieframedanpembahasansistemproteksipetirLRTJabodebek(5'),
(32, 32, 'LRTJBDB32-(KAI)NotulenRapat6Maret2019-PembahasanProteksiPetirSaranadanPrasaranaLRTJabodebek.pdf'),
(33, 33, 'LRTJBDB33-(KAI)NotulenRapat6Maret2019-PembahasanTeknsiEmergencyHandle,ObstacleDetection,DerailmentDe'),
(34, 34, 'LRTJBDB34-NotulenRapat6Maret2019-PembahasanEN13749LRTJabodebek.pdf'),
(35, 35, 'LRTJBDB35-NotulenMeeting11Maret2019-NCRWheelSetLRTJabodebek.pdf'),
(36, 36, 'LRTJBDB36-MeetingterkaitLRTSumseldanPembahasanITPLRTJabodebek(11-13Maret2019).pdf'),
(37, 37, 'LRTJBDB37-CourtesymeetingdenganMR.ArkaitzmeetingdengandeputyofTransformation(13-14Maret2019).pdf'),
(38, 38, 'LRTJBDB38-NotulenRapat19Maret2019-PembahasanUjiFatigueBogieFrameLRTJabodebek.pdf'),
(39, 39, 'LRTJBDB39-MeetingdenganRotem,MeetingdenganLRTJabodebek (19-21Maret2019).pdf'),
(40, 40, 'LRTJBDB40-MeetingdenganLRTJabodebekdanPameranrailwaydantransportasi(20-21Maret2019).pdf'),
(41, 41, 'LRTJBDB41-NotulenRapat22Maret2019-KoordinasiJunctionBoxElektrikdanDoorEngineLRTJabodebek.pdf'),
(42, 42, 'LRTJBDB42-NotulenRapat25Maret2019-ReviewPersiapanBogieMountingdanPengujianTS1LRTJabodebek.pdf'),
(43, 43, 'LRTJBDB43-MenghadiriundanganmeetingKAIdanMeetingdenganDeputyTranspotasi(25Maret2019).pdf'),
(44, 44, 'LRTJBDB44-RapatteknisdenganPT.KAIdantrainingleadership(25-28maret2019).pdf'),
(45, 45, 'LRTJBDB45-MeetingdenganKAI,ADhiKarya,danKemenkomar(27Maret2019).pdf'),
(46, 46, 'LRTJBDB46-NotulenRapat29Maret2019-INKA-IMSterkaitproyekLRTJabodebek.pdf'),
(47, 47, 'LRTJBDB47-Attendancelist4April2019-ITPLRTJabodebek.pdf'),
(48, 48, 'LRTJBDB48-MeetingwithMr.Sakaueaboutrollingstockgauge(4April2019).pdf'),
(49, 49, 'LRTJBDB49-MeetingtimpendampingJV.StadlerdenganLawyerINKA(8April2019).pdf'),
(50, 50, 'LRTJBDB50-RapatkoordinasiteknissaranaLRTJabodebek(9April2019).pdf'),
(51, 51, 'LRTJBDB51-NotulenRapat10-12April2019-KoordinasiTeknisPekerjaanSignallingdanPekerjaanPengujianLRTJabo'),
(52, 52, 'LRTJBDB52-PembahasanterkaitstasiunlengkungdanstructuregaugeantarasaranadanprasaranaLRTJabodebek(11Ap'),
(53, 53, 'LRTJBDB53-Rapatkomiteauditdengankomisaris,monitoringsimulasiproyekLRT-(11April2019).pdf'),
(54, 54, 'LRTJBDB54-NotulenRapat18April2019-SupplyKomponenLRTJabodebek.pdf'),
(55, 55, 'LRTJBDB55-MeetingdenganRotemdanMeetingdenganDeputyTransportasi(24-25april2019).pdf'),
(56, 56, 'LRTJBDB56-MeetingdenganOCGJoprissterkaitLRTJabodebek(29-30April2019).pdf'),
(57, 57, 'LRTJBDB57-RapatkoordinasiteknisLRTJabodebekdanFGOLRTSumsel(29 April-3Mei2019).pdf'),
(58, 58, 'LRTJBDB58-NotulenRapat2Mei2019-PercepatanpenyelesaianTS1LRTJabodebek.pdf'),
(59, 59, 'LRTJBDB59-(KAI)2-3Mei2019-PembahasanDetailDesainSaranaLRTJabodebek.pdf'),
(60, 60, 'LRTJBDB60-CAFVisitbersamapotentialcustomer(DeputyTransportasiDKIJakarta(6-12Mei2019).pdf'),
(61, 61, 'LRTJBDB61-PenentuanJarakGapCheckrail,widening,danPITpadastabling(9Mei2019).pdf'),
(62, 62, 'LRTJBDB62-(KAI)NotulenRapat10Mei2019-PembahasanTemporaryPitStopLRTJabodebek(2).pdf'),
(63, 63, 'LRTJBDB63-MenghadirirapatterkaitLRTJabodbek(10Mei2019).pdf'),
(64, 64, 'LRTJBDB64-SeminarLRTSumsel,RapatkoordinasiLRTJabodebek(14-15Mei2019).pdf'),
(65, 65, 'LRTJBDB65-MeetingdenganPTAdhikarya,OCGJoprissdanSJKAterkaitLRTJabodebek(21Mei2019).pdf'),
(66, 66, 'LRTJBDB66-NotulenRapat-21mei2019_R_PembahasanLayoutDepoLRTJabodebek.pdf'),
(67, 67, 'LRTJBDB67-NotulenRapat-23mei2019_R_InspeksidanPengawasanProgresProduksiSaranaLRTJabodebek_opt.pdf'),
(68, 68, 'LRTJBDB68-(KAI)NotulenRapat24Mei2019-KickofMeetingaddendumpengadaansarana186carLRTJabodebek.pdf'),
(69, 69, 'LRTJBDB69-(KAI)NotulenRapat27Mei2019-RapatPembahasanTemporaryPitStop.pdf'),
(70, 70, 'LRTJBDB70-MeetingbersamaDirkeudan64DipoLRTJakpro(28Mei2019).pdf'),
(71, 71, 'LRTJBDB71-NotulenRapat12Juni2019-MappingpersiapanpenyelesaianLRTJabodebekdanDMUPhilipina.pdf'),
(72, 72, 'LRTJBDB72-MenghadiriundanganrapatAdhiKaryaLRTJabodebek(25Juni2019).pdf'),
(73, 73, 'LRTJBDB73-MeetingdenganRotemdanMeetingdenganKAI(26-27Juni2019.pdf'),
(74, 74, 'LRTJBDB74-UjibogieLRTJabodebekdanrapatKoordinasiIntegrasisaranadanprasaranav(26-27Juni2019).pdf'),
(75, 75, 'LRTJBDB75-WorkshopDepoLRTJabodebek(1Juli2019).pdf'),
(76, 76, 'LRTJBDB76-KoordinasiPercepatanPembangunanLRTJabodebek(2-4Juli2019).pdf'),
(77, 77, 'LRTJBDB77-RencanaStablingsaranaLRTJabodebek(2Juli2019).pdf'),
(78, 78, 'LRTJBDB78-PengujiankekuatanstrukturbogieframesaranaLRTJabodebek(3-4Juli2019).pdf'),
(79, 79, 'LRTJBDB79-PembahasanprasaranaLRTtestrunsaranaLRT&pengujiandinamikkekuatanstrukturbogieframeLRTJabode'),
(80, 80, 'LRTJBDB80-RapatAddendumLRTJabodebek(16Juli2019).pdf'),
(81, 81, 'LRTJBDB81-RapatDivisiLRTJabodebek(23Juli2019).pdf'),
(82, 82, 'LRTJBDB82-Permohonanuntukmelanjutkanpekerjaanpemasanganelectricalboxsaranalrtjabodebek(22Juli2019).p'),
(83, 83, 'LRTJBDB83-RapataddendumLRTJabodebek&MeetingKemenkomar(23-25Juli2019).pdf'),
(84, 84, 'LRTJBDB84-PembahasanPowersupplyLRTJabodebek&PKStestrunsaranaLRT(25-26Juli2019).pdf'),
(85, 85, 'LRTJBDB85-NotulenRapat-PembahasanstatusPengujianDinamisBogieLRT(26juli2019).pdf'),
(86, 86, 'LRTJBDB86-NotulenRapat-PermasalahanUjiFatigueBogieFrameLRTJabodebek(30juli2019).pdf'),
(87, 87, 'LRTJBDB87-RIS-001-240-INKA-2019-Pembahasanboxip65lrtjabodebek(2agustus2019).pdf'),
(88, 88, 'LRTJBDB88-SItevisitproyekLRTJabodebek(5-7Agustus2019).pdf'),
(89, 89, 'LRTJBDB89-PersiapanFATdenganKAI(6-7Agustus2019).pdf'),
(90, 90, 'LRTJBDB90-PembahasanbiayapenyambunganlistriksaatujisaranaLRTJabodebek&FGDsinkronisasiLRTJabodebek(12'),
(91, 91, 'LRTJBDB91-FGDsinkronisasipenyelenggaraanLRTJabodebek-(14-15Agustus2019).pdf'),
(92, 92, 'LRTJBDB92-KelengkapandokprasyaratFATLRTJabodebek(16Agustus2019).pdf'),
(93, 93, 'LRTJBDB93-MRBCornerSealdanUpperSeat(senin19agustus2019).pdf'),
(94, 94, 'LRTJBDB94-PengendalianTimelineLRTJabodebek(19-20Agustus2019).pdf'),
(95, 95, 'LRTJBDB95-SurveykeDepoLRTJakarta(20agustus2019).pdf'),
(96, 96, 'LRTJBDB96-HasilMRBCCD(21agustus2019).pdf'),
(97, 97, 'LRTJBDB97-PembahasanterkaitLRTJabodebekdenganDirutKAI&AdhiKarya&DirutINKA(21Agustus2019).pdf'),
(98, 98, 'LRTJBDB98-IntroductionscopeISALRTJabodebek(29Agustus2019).pdf'),
(99, 99, 'KFW1-Revitalisasi10TSKRLKFW(30oktober2018).pdf'),
(100, 100, 'KFW2-KickOfMeetingRevitalisasiKRLKFW(30oktober2018).pdf'),
(101, 101, 'KFW3-NotulenRapat28Januari2019-PemaparanPekerjaanRevitalisasi10TSKRLKFW.pdf'),
(102, 102, 'KFW4-NotulenRapat28Januari2019-RevitalisasiKFW.pdf'),
(103, 103, 'KFW5-ArahanGM,PPC,terkaitRevitalisasiKRL-KFW(29januari2019).pdf'),
(104, 104, 'KFW6-LaporanHasilPekerjaan(30Januari2019).pdf'),
(105, 105, 'KFW7-PembahasanRencanaPenempatanUnitGerbongTerbukaMilikNegara(31Januari2019).pdf'),
(106, 106, 'KFW8-AttendanceList4Februari2019-KonsineeringProyekRevitalisasi10TSKRLKFW.pdf'),
(107, 107, 'KFW9-RisalahRapatKoordinasiTgl2&7Februari2019BreakDownActivity.pdf'),
(108, 108, 'KFW10-PersiapanMateriRapatdenganDJKA(11Februari2019).pdf'),
(109, 109, 'KFW11-TindakLanjutPengecekanKRLKFW(15februari2019).pdf'),
(110, 110, 'KFW12-PembahasanRencanaPenempatan19UnitGerbongMilikNegaradanTrainset@2UnitKereta(19februari2019).pdf'),
(111, 111, 'KFW13-MemantauprosesdissmountingKFWsertamencatatnoKA,Bogie,axle,dangearbox(22-25 Februari 2019).pdf'),
(112, 112, 'KFW14-RapatPembahasanRevitalisasiKRLKFW(25Februari2019).pdf'),
(113, 113, 'KFW15-RapatPenyusunanMetode(11Maret2019).pdf'),
(114, 114, 'KFW16-PembahasanHasilKajianPenurunanDayapadaKeretaRevitalisasiKRLKFWdanJustifikasi(12Maret2019).pdf'),
(115, 115, 'KFW17-Attendancelist13Maret2019-ACKFW.pdf'),
(116, 116, 'KFW18-NotulenRapatEvaluasiProyekRevitalisasiKRLKfW(15Maret2019).pdf'),
(117, 117, 'KFW19-PembahasanTindakLanjutRencanaPenarikanKRLKFW(18Maret2019).pdf'),
(118, 118, 'KFW20-RapatEvaluasiProyekRevitalisasiKRLKFW(22Maret2019).pdf'),
(119, 119, 'KFW21-PermohonanIjinMasukBalaiYasaManggarai(2April2019).pdf'),
(120, 120, 'KFW22-ReviewTaktKFWRevitalisasi(4April2019).pdf'),
(121, 121, 'KFW23-PenyiapanKereta,SettingRangkaianLokodanBandul,TesAnginAirSpringdanBrake,PembuatanBAPengetesanK'),
(122, 122, 'KFW24-RapatTindakLanjutdanEvaluasiRevitalisasiKFW(12April2019).pdf'),
(123, 123, 'KFW25-PembahasanPenarikanKRLKFW(16April2019).pdf'),
(124, 124, 'KFW26-NotulenRapatEvaluasidanTindakLanjutRevitalisasiKRLKFW(22April2019).pdf'),
(125, 125, 'KFW27-PemindahanbogieTS6keTS8KRLKFW(24-26April2019).pdf'),
(126, 126, 'KFW28-PembongkaranKRLKFWTS4,PemindahanBogieTS4-TS8,&PersiapanPenarikanKFWTS8daribyMRIMadiun(24-27Apr'),
(127, 127, 'KFW29-RapatPembahasanScopePekerjaanSPPJProyekKRLKFW(8Mei2019).pdf'),
(128, 128, 'KFW30-RapatTindakLanjutdanEvaluasiRevitalisasiKFW(10Mei2019).pdf'),
(129, 129, 'KFW31-MonitoringPemeriksaandanEvaluasiRevitalisasiKRLKFW(19-21Mei2019).pdf'),
(130, 130, 'KFW32-PembongkaranPanelFRPEndWallRevitalisasiKRLKFW(23Mei2019).pdf'),
(131, 131, 'KFW33-PembahasanPanelElektrikKRLKFW(27Mei2019).pdf'),
(132, 132, 'KFW34-InspectiondanTestingTraksiMotorUntukProyekKRLKFW(28Mei2019).pdf'),
(133, 133, 'KFW35-MenghadiriMeetingBersamaKemenhubMengenaiKRLKFWdanDepoCipinang(19-20Juni2019).pdf'),
(134, 134, 'KFW36-PertemuandenganSatkerPPSPterkaitaddendumKRLKFW(26-27Juni2019).pdf'),
(135, 135, 'KFW37-RapatSatkerPPSPJakarta(10-12Juli2019).pdf'),
(136, 136, 'KFW38-Koordinasi-koordinasipelaksanaanpembongkaranairdryer,kompressor,doorengine,&koordinasidenganBP'),
(137, 137, 'KFW39-PenambahanLingkupKerjadiluarKontrakPekerjaanRevisiKRLKFW(25Juli2019).pdf'),
(138, 138, 'KFW40-MengawasiMengkoordinirKegiatanPembongkaranPenginapanKomponenKRLKFW(25-27Juli2019).pdf'),
(139, 139, 'KFW41-PembentukanTeknisUsulanPenambahanLingkupdiluarKontrakPekerjaanRevisiKRLKFW(30-31Juli2019).pdf'),
(140, 140, 'KFW42-PembuatanBAPenarikan&pengecekanTS5KRLKFW(27-29Agustus2019).pdf'),
(141, 141, 'KFW43-KunjungankePT.ABBdilanjutRapatProgressKFWdenganPJKA(28Agustus2019).pdf'),
(142, 142, 'KFW44-KoordinasiProyekKRLKFWPenarikanKRLKFWTS5Relasi(2-4September2019).pdf'),
(143, 143, 'BG1-Pengiriman15BGBangladeshBatch1(25Januari-7Februari2019).pdf'),
(144, 144, 'BG2-PengurusanCustomsClearenceProyekBGBangladesh(26-30Januari2019).pdf'),
(145, 145, 'BG3-Commisioning15BGBangladeshBatch1(4-16Februari2019).pdf'),
(146, 146, 'BG4-PengurusanCustomsClearence&EndorseDokumen(19-24Maret2019).pdf'),
(147, 147, 'BG5-Pengiriman18BGKeretaBangladeshBatch2(23Maret-7April2019).pdf'),
(148, 148, 'BG6-Commisioning18BGKeretaBangladeshBatch2(31Maret-16April2019).pdf'),
(149, 149, 'BG7-PengurusanCustomClearance&EndorseDokumenProyekBGKeretaBangladeshBatch3(9-15Mei2019).pdf'),
(150, 150, 'BG8-Pengiriman17KeretaBangladeshBatch3(12-28Mei2019).pdf'),
(151, 151, 'BG9-Commisioning17BGKeretaBangladeshBatch3(19Mei-2Juni2019).pdf'),
(152, 152, 'MG1-MenjemputTamuBangladeshRailway(22Februari2019).pdf'),
(153, 153, 'MG2-MenjemputTamuBangladeshRailwayUntukAgendaStudyTour(28Maret2019).pdf'),
(154, 154, 'MG3-siteVisit,BioToiletBersamaTimStudyTourBangladeshRailway(31Maret-1April2019).pdf'),
(155, 155, 'MG4-KoordinasiPengirimanKeretaMGBangladesh(7-10Juli2019).pdf'),
(156, 156, 'MG5-MG5-RIS-KoordinasiKebutuhanSpring200MGBangladesh-0001.pdf'),
(157, 157, 'MG6-PengirimanKeretaMGBatch1(26cars)(28Juli-11Agustus2019).pdf'),
(158, 158, 'MG7-CommisioningKeretaMGBatch1(26 cars)(1-15Agustus2019).pdf'),
(159, 159, 'MG8-CommisioningKeretaMGBangladeshBatch1(lanjutan)(2-11September2019).pdf'),
(160, 160, 'KRDEBias-2019.pdf'),
(161, 161, '293fbf48b4f8ca1ecfb52f45d6a2572a.jpg'),
(172, 0, ''),
(173, 0, ''),
(183, 169, '1571392041957.jpg'),
(184, 169, '1571392092247.jpg'),
(185, 169, '1571392164994.jpg'),
(191, 176, 'Notulen-Pembahasan addendum pengadaan sarana 186 LRT Jabodebek.pdf'),
(192, 177, 'M-0120-240.BR-2019-permohonan dinas LN Bang An Agus.pdf'),
(193, 178, 'M-0151 240.BR 2019-Informasi pembatalan dinas luar negeri.pdf'),
(194, 179, 'M-0158 240.BR 2019-Permohonan personil pengiriman MG Bangladesh batch 3.pdf'),
(195, 180, 'M 040. Memo Permohonan pengiriman komponen.pdf'),
(196, 181, 'M 041 Memo Permintaan personil utk pembongkaran komponen di By Mri.pdf'),
(197, 182, 'M-001.01.240.KRLKFW 2019 4 Feb 2019 - Revisi pemilihan konsineering proyek revitalisasi KRL KFW.pdf'),
(198, 183, 'M-003 240.KRLKFW 2019 - Permohonan Ijin Membawa APD untuk dinas Luar Kota.pdf'),
(199, 184, 'M-004 240.KRLKFW 2019 1 Maret 2019 - Undangan Rapat 4 Maret 2019.pdf'),
(200, 185, 'M-005 240.KRLKfW 2019 4 Maret 2019  - Permohonan Ijin Pembukaan WBS Aftersales.pdf'),
(201, 186, 'M-006 240.KRLKFW 2019 5 Maret 2019 - Revisi Undangan Rapat.pdf'),
(202, 187, 'M-008 240.KRLKFW 2019 - 4 Maret 2019 Persetujuan pembatalan tiket.pdf'),
(203, 188, 'M-009 240.KRKLFW 2019 8 Maret 2019 - Pembukaan WBS Aftes Sales perbaikan gearbox dan traction motor.'),
(204, 188, 'M-009 240.KRKLFW 2019 8 Maret 2019 - Pembukaan WBS Aftes Sales perbaikan gearbox dan traction motor.'),
(205, 188, 'M-009 240.KRKLFW 2019 8 Maret 2019 - Pembukaan WBS Aftes Sales perbaikan gearbox dan traction motor.'),
(206, 189, 'M-10 240.KRLKFW 2019 - 14 Maret 2019 - Permintaan persiapan pengiriman dan pembuatan surat jalan.pdf'),
(207, 188, 'M-009 240.KRKLFW 2019 8 Maret 2019 - Pembukaan WBS Aftes Sales perbaikan gearbox dan traction motor.'),
(208, 188, 'M-009 240.KRKLFW 2019 8 Maret 2019 - Pembukaan WBS Aftes Sales perbaikan gearbox dan traction motor.'),
(209, 188, 'M-009 240.KRKLFW 2019 8 Maret 2019 - Pembukaan WBS Aftes Sales perbaikan gearbox dan traction motor.pdf'),
(210, 190, 'M-011 240.KRLKfW 2019 - 21 Maret 2019 (Laporan proyek KRL KfW).pdf'),
(211, 191, 'M-012 240.KRLKfW 2019 - 15 Maret 2019 (Undangan rapat).pdf'),
(212, 192, 'M-012 240.KRLKfW 2019 - 22 Maret 2019 (Undangan).pdf'),
(213, 193, 'M-016 240.KRLKFW 2019 - 27 Maret 2019 (Permohonan penyediaan gudang khusu proyek revitalisasi 10 TS KRL-KFW).pdf'),
(214, 193, 'M-016 240.KRLKFW 2019 - Permohonan Penyediaan gudang khusus proyek revitalisasi 10 TS KRL KFW.pdf'),
(215, 193, 'M-016 240.KRLKFW 2019 - Permohonan peyediaan gudang khusu proyek 10 TS KFW 1 April 2019.pdf'),
(216, 194, 'M-018 240.KRLKFW 2019-Undangan rapat.pdf'),
(217, 195, 'M-019 240.KRLKFW 2019-Permohonan persiapan pengiriman dan surat jalan 4 unit dummy bogie.pdf'),
(218, 197, 'Notulen-Pengiriman 10 unit AC PNR tgl 02 Oktober 2019.pdf'),
(219, 197, ''),
(220, 197, ''),
(221, 197, ''),
(222, 198, 'M-067 241 2019-Permintaan penerbitan PR Jasa pengiriman 10 unit AC PNR.pdf'),
(223, 199, 'RIS Procurement 10 AC PNR.pdf'),
(224, 200, ''),
(225, 200, '3 - 7 -2019 - Review Anggaran 10 unit AC PNR.pdf'),
(226, 201, 'M-037 331 2019 - 20 Maret 2019 (Pemberitahuan terkait revisi standard welding pada proyek Philippine).pdf'),
(227, 202, 'M-037 240 2019 - Undangan Rapat 12 Juni 2019.pdf'),
(228, 202, 'Notulen Rapat 12 Juni 2019 - Mapping persiapan penyelesaian LRT Jabodebek dan DMU Philipina.pdf'),
(229, 203, '20190818 Pre-Inspoection 2DMU PNR.docx.pdf'),
(230, 204, 'Notulen rapat 1 April 2019 - Pembahasan genset 2 TS DMU Philipine.pdf'),
(231, 205, 'Notulen Rapat 21 September 2018.pdf'),
(232, 206, 'Notulen Rapat- Pembahasan Laporan Tema investigasi control panel AC.pdf'),
(233, 199, 'M-0042-241-2019-Diskusi pemakaian control panel dan Electric plug existing.pdf'),
(234, 207, 'M-043 331 2019 - 25 Maret 2019 (Pemberitahuan terkait perbandingan anatara standard welding).pdf'),
(235, 208, 'M-045 241 2019 - Permohonan personil untuk investigasi panel proyek 10 unit AC PNR.pdf'),
(236, 209, 'M-051 240 2019-Permohonan investigasi control panel proyek 10 unit AC PNR.pdf'),
(237, 210, 'M-067 241 2019-Permintaan penerbitan PR Jasa pengiriman 10 unit AC PNR.pdf'),
(238, 210, ''),
(239, 211, 'M-079-241-2019-permintaan komponen panel proyek 10 ac pnr.pdf'),
(240, 212, 'M-109 241 2019 TENTANG PERMINTAAN PEMBELIAN LANGSUNG KOMP ELEKTRIK PROYEK 10 AC PNR TGL 18 NOV 2019.pdf'),
(241, 213, ''),
(242, 213, 'M-0115 430 2019 - Inspection Gate.pdf'),
(243, 214, 'M-0174-442-2019-permohonan kepastian pengiriman 2ts dmu pilippina-PM Philipine.pdf'),
(244, 215, 'M-348 340 2019-MoM Site Inspection 2 TS DMU Philippina Oleh Tim PNR.pdf'),
(245, 216, 'RIS-311.SM INKA 2019 Pembhasan Progres 4TS DMU Untuk Persiapan Inpeksi PNR 30 Septeber 2019.pdf'),
(246, 217, 'M-0185 240.BR 2019-Permohonan personil tim pengiriman kereta MG Bangladesh Batch 4.pdf'),
(247, 218, 'M-0189 240.BR 2019 Permohonan Personil Comimisioning Kereta MG Bangladesh Batch 4 22 November 2019.pdf'),
(248, 219, 'M-0190 240.BR 2019 Surat Komplain Permasalahan Kereta Proyek 50 BG 22 November 2019.pdf'),
(249, 220, 'M-0203 240.BR 2019 permohonan com MG batch 5.pdf'),
(250, 221, 'RIS-001-240-BR-INKA-2018-Inspection for 50 BG Bangladesh Shiptment 1.pdf'),
(251, 222, 'RIS-002-240-BR-INKA-2019- notulen rapat lesson learn bangaldesh - fix.pdf'),
(252, 223, ''),
(253, 223, 'RIS-003-240-BR-INKA-2019-Pembahasaan Persiapan Inspeksi BG Batch 2 dan Bio-Toilet MG.pdf'),
(254, 224, 'RIS-004-240-BR-INKA-2019-Minute of Meeting - Inspection for 50 BG Bangladesh Shipment 2.pdf'),
(255, 225, 'RIS-005-240-BR-INKA-2019-BIO-TOILET.pdf'),
(256, 226, 'RIS-006-240-BR-INKA-2019-Pembahasan hasil prototype inspection 200 Mg_compressed (1).pdf'),
(257, 226, ''),
(258, 226, ''),
(259, 227, 'RIS-Koordinasi kebutuhan spring 200 MG Bangladesh-0001.pdf'),
(260, 228, 'IV.09.23.014.2019.01-Pengadaan 4 TS KRDE BIAS.pdf'),
(261, 228, ''),
(262, 229, 'RIS-016 241 INKA 2019 Pembahasan ITP dan Design Review Plan KRDE BIAS_compressed.pdf'),
(263, 229, ''),
(264, 231, 'RIS Review Engineering Schedule 4 TS KRDE KAI.pdf'),
(265, 232, 'NOTULEN TINJAUAN KONTRAK lV.09.23.023.2019.01 07 OKTR 2019 Ruang rapat pemasaran.pdf'),
(266, 233, '(KAI) Notulen Usulan finalisasi Master schedule LRT Jabodebek 2019 09 27_S_Kesiapan Prasarana untuk Rolling Stock Dynamic Test (RSDT) LRT Jabodebek antara Stasiun Harjamukti dan Stasiun Cawang.pdf'),
(267, 233, ''),
(268, 234, '(KAI) Notulen Usulan finalisasi Master schedule LRT Jabodebek 2019 09 27_S_Kesiapan Prasarana untuk Rolling Stock Dynamic Test (RSDT) LRT Jabodebek antara Stasiun Harjamukti dan Stasiun Cawang.pdf'),
(269, 236, 'Notulen Test Load dan NDT 011019.pdf'),
(270, 237, '2019 10 08_R_Pembahasan SOP Uji Statis Dinamis Sarana LRT Jabodebek.pdf'),
(271, 237, ''),
(272, 238, 'Notulen-Rapat koordinasi penyelesaian proyek LRT Jabodebek tgl 10 oktober 2019.pdf'),
(273, 239, 'RIS RAPAT 04-11-2019.pdf'),
(274, 240, 'notulen rapat tanggal 5 nov 2019 di r. rapat keproyekan .pdf'),
(275, 241, 'Notulen Rapat Pembahasan Lingkup Pekerjaan Gantry Crane Pit Stop 14 November 2019. PDF.pdf'),
(276, 241, '886 - Terlampir, Undangan Pembahasan Lingkup Pekerjaan Gantry Crane Pit Stop.pdf'),
(277, 242, '2019 11 20_R_Rapat Koordinasi Pembayaran Sarana LRT Jabodebek.pdf'),
(278, 243, 'Notule Rapat Pembahasan Term Of Payment Lanjutan Srana 32 TS LRT Jabodebek.pdf'),
(279, 244, 'LRTJB_RR_191126_UjiSarana_v1.pdf'),
(280, 245, '2019 03 03_R_LRT Jabodebek Depot Workshop.pdf'),
(281, 246, 'Notulen Rapat Koordinasi 25 November 2019.pdf'),
(282, 248, '2019 12 05_R_Pembahasan Desain Track Work LRT Jabodebek.pdf'),
(283, 250, ''),
(284, 250, '20191202_Final & Pengantar_Risalah Rakor LRT Pembahasan Sistem Tertentu.pdf'),
(285, 251, 'SKMBT_28319112913300-merged.pdf'),
(286, 252, 'Nota Kesepahaman Anatara PT PLN (Persero) Dengan PT INKA (Persero) Tentang Penyediaan Pasokan Tenaga Listrik Untuk PT INKA.pdf'),
(287, 253, '2019 12 12_UT_Simulasi PIDS.pdf'),
(288, 254, 'IV.09.23.017.2019.01-Pengadaan 1 unit track motor car lebar spoor 1435 MM untuk aceh thn anggaran 2019-2020.pdf'),
(289, 255, 'RIS-012 241 INKA 2019-Review final draft master schedule 1 unit tmc aceh 2019 & lampiran master schedule.pdf'),
(290, 256, 'RIS 019 241 INKA 2019 Agenda Persiapan Penyampaian Data kepada Pengawas TMC dan KA Ukur.pdf'),
(291, 256, ''),
(292, 257, 'IV.09.23.016.2019.01-Pengadaan 1 unit kereta ukur prasarana thn anggaran 2019-2020.pdf'),
(293, 258, 'RIS Procurement 10 AC PNR.pdf'),
(294, 259, '3 - 7 -2019 - Review Anggaran 10 unit AC PNR.pdf'),
(295, 260, '13-08-2019-Notulen  Meeting-pengiriman 10 unit AC PNR.pdf'),
(296, 261, 'M-067 241 2019-Permintaan penerbitan PR Jasa pengiriman 10 unit AC PNR.pdf'),
(297, 262, 'Notulen Rapat- Pembahasan Laporan Tema investigasi control panel AC.pdf'),
(298, 263, 'Notulen-Pengiriman 10 unit AC PNR tgl 02 Oktober 2019.pdf'),
(299, 264, 'RIS Persiapan Pemasangan AC Proyek 10 Unit AC PNR Tanggal 22 November 2019.pdf'),
(300, 265, 'Minutes of Meeting Project LRT Jabodebek Desember 10 2019.pdf'),
(303, 268, 'Realisasi SPPD Jakarta a.n Panji S dan Dimas Aliakbar  tgl 2 Oktober 2019.pdf'),
(305, 270, 'Realisasi - SPPD Jakarta a.n Bambang Kushendarto tgl 24 September 2019.pdf'),
(307, 272, 'SPPD LN Spanyol a.n. panji sulalisono & dadik pranata tirta 22-26 okt 2019.pdf'),
(313, 278, 'SPPD Malang a.ll. herman syahroni 15 okt 2019.pdf'),
(320, 285, 'SPPD a.n. Dadik Pranata Tirta ke Manila 24 Oktober 2019.pdf'),
(332, 0, '1582707206239.jpg'),
(347, 286, ''),
(380, 286, ''),
(388, 266, 'Realisasi SPPD Jakarta an. Panji S dan Lucky A tgl 23,25-27 September 2019.pdf'),
(389, 267, '10-26548-Realisasi SPPD Surabaya a.n Wely Mulyono dkk tgl 26-27 September 2019.pdf'),
(390, 269, '10-26512-Realisasi SPPD Jakarta a.n Emir P dkk tgl 26-27 September 2019.pdf'),
(391, 271, 'SPPD Jakarta a.n. bambang kushendarto 3 okt 2019.pdf'),
(392, 273, 'SPPD jakarta a.n wely mulyono a herman syahroni tgl. 24-25 oktober 2019.pdf'),
(393, 289, 'image.jpg'),
(394, 274, 'SPPD PANJI SULAKSONO 4 OKT 2019.pdf'),
(395, 275, 'SPPD PANJI SULAKSONO 7 SD 13 OKT 2019.pdf'),
(396, 276, 'SPPD PANJI SULAKSONO 15 SD 16 OKT 2019.pdf'),
(397, 277, 'SPPD EMANUEL PASTIADI 16 OKT 2019.pdf'),
(398, 279, 'SPPD Jakarta a.n Panji Sulaksono tgl 21 oktober 2019.pdf'),
(399, 280, 'SPPD Jakarta tgl 10 oktober 2019, a.n emir-0001.pdf'),
(400, 281, 'SPPD tambahan a.n rudi hermanto 5 sept 2019.pdf'),
(401, 282, 'sppd jakarta a.n. toto isdarto dan warida f tgl 30-31 okt 2019.pdf'),
(402, 283, 'SPPD Jakarta a.n T. Emoto tgl 30 Oktober - November 2019.pdf'),
(403, 284, 'SPPD Surabaya a.n Emanuel Pastiadi, Afahlan Risky H, Yuliana Lingga P, Karisma Rizal, tgl 25 Oktober 2019 (2).pdf'),
(404, 286, 'SPPD Spanyol a.n Panji Sulaksono & Dadik Pranata Tirta 22-26 Oktober 2019. 21 Oktober 2019.pdf'),
(405, 291, 'SPPD Jakarta a.n Moch. Iszar dan Emamnuel Pastiadi tgl 14 - 15 November 2019.pdf'),
(406, 292, 'SPPD Jakarta a.n Takashi Emoto, Toto Isdarto, Moh. Faza Rosyada tgl 14 sd 16 November 2019.pdf'),
(408, 294, 'SPPD Jakarta a.n Paji Sulaksono tgl 06 November 2019.pdf'),
(409, 295, 'SPPD Jakrata a.n Panji Sulaksono Tgl 11 November 2019, 18 Nov 2019.pdf'),
(410, 296, 'SPPD Madiun a.n Dadik Pranata Tirta tgl 19-20 November 2019. 27 November 2019.pdf'),
(411, 297, 'SPPD a.n Moch Iszar, Budi W, Emanuel Pastiadi, Ayu Berlianti, Denna Maulana Tanggal 26 Nov 2019.pdf'),
(412, 298, 'SPPD Swedia, Manila LRT Ume 2 Bersama Caf tgl 27-29 Oktober 2019 a.n Dadik Pranata (2).pdf'),
(413, 299, 'Realisasi SPPD Jakarta a.n. Moch Iszar, Emanuel Pastiadi, Bambang Kushendarto tanggal 20-21 Nov 2019.pdf'),
(414, 300, 'SPPD Jkarata Moch Iszar Dan Emanuel Pastiagi tgl 06 November 2019.pdf'),
(416, 301, 'SPPD Jakarta a.n Emanuel Pastiadi, Heny Iyna N, Wilda, Sunaryo tgl 29 November 2019.pdf'),
(417, 302, 'SPPD a.n Emanuel Pastiadi, Denna Maulana, Lucky Andoyo tgl 02-05 Des 2019_reduce.pdf'),
(418, 303, 'SPPD Jakarta a.n Wely Mulyono dan Herman S. Tgl. 10-12 Desember 2019.pdf'),
(419, 304, 'SPPD Jakarta a.n Emnuel Pastiadi dan Dian Y P tgl 09 Desember 2019.pdf'),
(420, 305, 'SPPD a.n Moch Iszar Jakarta Tgl 02-04 Desember 2019, 12 Desember 2019.pdf'),
(421, 306, 'SPPD a.n Emanuel Pastiadi ke Jakarta Tgl 17 Desember 2019.pdf'),
(422, 307, 'SPPD a.n Emanuel Pastiadi ke Jakarta Tgl 11-13 Desember 2019.pdf'),
(424, 309, 'Realisasi SPPD a.n. dian saputra & ahmad ridwan _ 18-19 des 2019 realisasi.pdf'),
(425, 312, '3.5-Notulen Test Load dan NDT 011019.pdf'),
(426, 313, '3.4-2019 10 08_R_Pembahasan SOP Uji Statis Dinamis Sarana LRT Jabodebek.pdf'),
(427, 314, '3.3-2019 10 10_R_Pembahasan Teknis Platform Screen Door LRT Jabodebek.pdf'),
(428, 315, '3.2-Maritim-LRT Jabodebek_Rakor_20191016.pdf'),
(429, 316, '3.1-LRT Jabodebek_Rakor_20191029_final (1).pdf'),
(430, 317, 'Notulen Rapat Pembahasan Lingkup Pekerjaan Gantry Crane Pit Stop 14 November 2019. PDF.pdf'),
(431, 318, '2.6-Risalah Rapat Pembahsan Sistem Penangkal Petir Dan Sistem Pertanahan.pdf'),
(432, 319, '2.5-2019 11 20_R_Rapat Koordinasi Pembayaran Sarana LRT Jabodebek.pdf'),
(433, 320, '2.4-LRTJB_RR_191126_UjiSarana_v1.pdf'),
(434, 321, '2.3-Notule Rapat Pembahasan Term Of Payment Lanjutan Srana 32 TS LRT Jabodebek.pdf'),
(435, 322, '2.2-SKMBT_28319112913300-merged.pdf'),
(436, 323, '2.1-(KAI)-Pembahasan Percepatan Proyek LRT Jabodebek-29 november 2019.pdf'),
(437, 324, '1.8-2019 03 03_R_LRT Jabodebek Depot Workshop.pdf'),
(438, 325, '1.7-(KAI)-Pembahasan Desain Track Work LRT Jabodebek-5 Desember 2019.pdf'),
(439, 326, '1.6-MOM-INKA CAF 10 desember 2019.pdf'),
(440, 327, '1.5-20191202_Final & Pengantar_Risalah Rakor LRT Pembahasan Sistem Tertentu.pdf'),
(441, 328, '1.4-Notulen Rapat Tgl. 11 Desember 2019 LRT Jabodebek.pdf'),
(442, 329, '1.3-20191213 Risalah LRT untuk SKM Ekonomi.PDF'),
(443, 330, '1.2-2019 12 17_R_Pembahasan Dokumen Prosedur Pengujian Sarana LRT Jabodebek.pdf'),
(444, 331, '1.1-2019 12 17_R_Notulen Rpt Pembahasan Penentuan Lokasi Pengujian AW-3 dengan V 80kmph_compressed.pdf'),
(445, 328, ''),
(446, 328, ''),
(447, 332, 'SPPD a.n Dian Yudha dan Abdollah tgl 17-18 Desember 2019.pdf'),
(448, 332, 'SPPD a.n Emanuel Pastiadi ke Jakarta Tgl 17 Desember 2019.pdf'),
(449, 333, '1587347545635.jpg'),
(450, 333, 'laporan-perhari.pdf'),
(451, 335, '1. Ris Pembahasan Jarak Bebas Sarana dan Pasarana pada Stasiun LRT Jabodebek tgl 15 jan 2020.pdf'),
(452, 335, ''),
(453, 336, '2. 2020 01 16_R_Pembahasan Pengawasan FAT Sarana.pdf'),
(454, 337, '3. 2020 1 17 Pembahasan Dokumen Prosedur Pengujian Sarana LRT Jabodebek.PDF'),
(455, 337, '3. 2020 1 17 Pembahasan Dokumen Prosedur Pengujian Sarana LRT Jabodebek.PDF'),
(456, 337, '3. 2020 1 17 Pembahasan Dokumen Prosedur Pengujian Sarana LRT Jabodebek.PDF'),
(457, 337, '3. 2020 1 17 Pembahasan Dokumen Prosedur Pengujian Sarana LRT Jabodebek.PDF'),
(458, 337, '3. 2020 1 17 Pembahasan Dokumen Prosedur Pengujian Sarana LRT Jabodebek.PDF'),
(459, 337, '3. 2020 1 17 Pembahasan Dokumen Prosedur Pengujian Sarana LRT Jabodebek.PDF'),
(460, 338, '4. Risalah Rapat Pembahasan Jarak Bebas Sarana - Prasarana LRT Jabodebek pada stasiun lurus dan perubahan coupler system .pdf'),
(461, 338, ''),
(462, 339, '5.  2020 01 21-22_R_Rapat Pembahasan Dokumen dan Pengujian Dinamis.pdf'),
(463, 340, '6. RIS KG 104 I 20 DIV.LRT-2020 Pembahasan Dokuman dan FAT Tanggal 31 Januari 2020.pdf'),
(464, 341, '1. 20200203 Risalah Rakor LRT- kemenkomar.pdf'),
(465, 342, '2. Risalah rapat Pembahasan Jarak Bebas Sarana dan Prasarana LRT Jabodebek pada Stasiun Lengkung dan Buffer Stop, 04 Februari 2020.pdf'),
(466, 343, '3. 2020 02 04_R_Pembahasan Adendum Perjanjian Pengadaan 186 Car LRT Jabodebek.pdf'),
(467, 344, '4. 2020 02 04_R_Rapat Integrasi Sarana-Prasarana LRT Jabodebek.pdf'),
(468, 345, '5. PMO 12 FEBRUARI 2020.pdf'),
(469, 346, '6. PMO 13 FEBRUARI 2020 (INKA).pdf'),
(470, 347, '7. Notulen Rapat Agenda Pembahasan Persiapan Detail Teknis Pengujian Dinamis Sarana LRT Jabodebek Tgl 19 Feb 2020.pdf'),
(471, 348, '8. 2020 02 24_R_Pembahasan Addendum Perjanjian Pengadaan Sarana 186 Car LRT Jabodebek-dikompresi.pdf'),
(472, 349, '9. Notulen Rapat KAI Pembahasan Denda Sarana LRT Jabodebek tanggal 20 Feb 2020.pdf'),
(473, 350, '10. R_27-02-2020 Rapat pembahasan dokumen teknis dan dokumen FAI.PDF'),
(474, 350, '10. R_27-02-2020 Rapat pembahasan dokumen teknis dan dokumen FAI.PDF'),
(475, 350, '10. R_27-02-2020 Rapat pembahasan dokumen teknis dan dokumen FAI.PDF'),
(476, 350, '10. R_27-02-2020 Rapat pembahasan dokumen teknis dan dokumen FAI.PDF'),
(477, 350, '10. R_27-02-2020 Rapat pembahasan dokumen teknis dan dokumen FAI.PDF'),
(478, 351, '11. MOM PMO LRT Jabodebek 27 Feb 20-dikompresi.pdf'),
(481, 350, '10. R_27-02-2020 Rapat pembahasan dokumen teknis dan dokumen FAI.PDF'),
(482, 350, '10. R_27-02-2020 Rapat pembahasan dokumen teknis dan dokumen FAI.PDF'),
(483, 350, '10. R_27-02-2020 Rapat pembahasan dokumen teknis dan dokumen FAI.PDF'),
(485, 350, ''),
(486, 350, '10. R_27-02-2020 Rapat pembahasan dokumen teknis dan dokumen FAI.pdf'),
(487, 352, '1. RIS-1 D4 MBU 1 03 2020 Pembahasan Addendum Proyek LRT Jabodebek antara PT KAI & PT INKA 3mar20.PDF'),
(488, 352, '1. RIS-1 D4 MBU 1 03 2020 Pembahasan Addendum Proyek LRT Jabodebek antara PT KAI & PT INKA 3mar20.PDF'),
(489, 352, '1. RIS-1_D4_MBU_1_03_2020_Pembahasan_Addendum_Proyek_LRT_Jabodebek_antara_PT_KAI_&_PT_INKA_3mar20.PDF'),
(490, 353, '2. RIS 001_204.LRT_2020 INKA-LEN.pdf'),
(491, 354, '3. MOM PMO LRT JABODEBEK 4 Maret 2020 efa01.pdf'),
(493, 356, '5. 2020 03 11_R_Integrasi Persinyalan dan Sarana LRT Jabodebek (SIV, Floating Voltage OBCU).pdf'),
(496, 358, ''),
(497, 358, '7. RIS-002240.LRTINKA.2020.12-03-2020.pdf'),
(498, 352, '1. RIS-1_D4_MBU_1_03_2020_Pembahasan_Addendum_Proyek_LRT_Jabodebek_antara_PT_KAI_&_PT_INKA_3mar20.PDF'),
(501, 352, '1. RIS-1_D4_MBU_1_03_2020_Pembahasan_Addendum_Proyek_LRT_Jabodebek_antara_PT_KAI_&_PT_INKA_3mar20.PDF'),
(502, 352, ''),
(503, 352, '1. RIS-1_D4_MBU_1_03_2020_Pembahasan_Addendum_Proyek_LRT_Jabodebek_antara_PT_KAI_&_PT_INKA_3mar20.PDF'),
(505, 357, '6. 20200311 -P.OK Notulen Pembahasan Dokumen Pengujian Dinamis Sarana LRT Jabodebek.pdf'),
(506, 352, '1. RIS-1_D4_MBU_1_03_2020_Pembahasan_Addendum_Proyek_LRT_Jabodebek_antara_PT_KAI_&_PT_INKA_3mar20.PDF'),
(507, 352, '1. RIS-1_D4_MBU_1_03_2020_Pembahasan_Addendum Proyek LRT Jabodebek antara PT KAI Dan PT INKA 3mar20.PDF'),
(508, 352, '1. RIS 1_D4_MBU_1_03_2020_Pembahasan_Addendum Proyek LRT Jabodebek antara PT KAI Dan PT INKA 3mar20.PDF'),
(510, 352, '1. RIS 1_D4_MBU_1_03_2020_Pembahasan_Addendum Proyek LRT Jabodebek antara PT KAI Dan PT INKA 3mar20.pdf'),
(511, 359, 'images (2).jpeg'),
(512, 361, '1589047465026.jpg'),
(513, 362, '1589049352992.jpg'),
(514, 363, 'BA Pengawasan tmc 5 Mei 2020.doc'),
(515, 364, 'BA Pengawasan K.Ukur 5 Mei 2020.doc'),
(516, 365, 'progres tmc april 2020.pdf'),
(517, 365, 'Progres kereta ukur April 2020.pdf'),
(518, 365, '2. PAPARAN forecasting K.UKUR dan TMC rapat 5 Mei 2020 rev.pptx'),
(519, 366, 'RIS-Pembahasan Justifikasi desain dan estimasi harga addendum Rev.KRLKFW.pdf'),
(520, 367, 'RIS-31_443_INKA_2019 Risalah Rapat Pembahasan prosedur Pengujian Motor Traction Proyek Revitalisasi KRL-KFW.pdf'),
(521, 368, 'NOTULEN RAPAT PT KERETA API INDONESIA.pdf'),
(522, 369, 'RIS-008 241 INKA 2020 Proyeksi 4 TS KRDE BIAS.pdf'),
(523, 370, 'M-019 240.KRLKFW 2019-Permohonan persiapan pengiriman dan surat jalan 4 unit dummy bogie.pdf'),
(524, 0, '1589339738202.jpg'),
(525, 0, '1589341129325.jpg'),
(528, 370, '1589349913886.jpg'),
(529, 0, '1589351429245.jpg'),
(530, 372, '1589355916627.jpg'),
(531, 372, 'M-019 240.KRLKFW 2019-Permohonan persiapan pengiriman dan surat jalan 4 unit dummy bogie.pdf'),
(532, 0, '1589356431957.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'meeting'),
(2, 'training'),
(3, 'inspection'),
(4, 'others'),
(5, 'memo');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comment` text,
  `comment_sender_name` varchar(50) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `title`, `parent_comment_id`, `comment`, `comment_sender_name`, `date`) VALUES
(2, 'Amandemen kontrak LRT Jabodebek', 1, 'oke', 'Admin', '0000-00-00 00:00:00'),
(3, 'Amandemen kontrak LRT Jabodebek', 1, 'oke', 'Admin', '0000-00-00 00:00:00'),
(6, 'coba', 0, 'test', 'ehe', '0000-00-00 00:00:00'),
(7, 'coba', 6, 'test', 'ehe', '0000-00-00 00:00:00'),
(10, 'Amandemen kontrak LRT Jabodebek', 0, 'halo', 'Admin', '0000-00-00 00:00:00'),
(12, 'Amandemen kontrak LRT Jabodebek', 10, 'Masuk admin', 'Wiwid Afriyanto', '0000-00-00 00:00:00'),
(15, 'test isu 1', 14, 'mean hapus ta chat e @andi', 'Admin', '0000-00-00 00:00:00'),
(17, 'test isu 1', 15, 'Opo', 'Admin', '0000-00-00 00:00:00'),
(19, 'test isu 1', 18, 'sek grung proses', 'Admin', '0000-00-00 00:00:00'),
(24, 'Trip supply  listrik saat Uji dinamik LRT ts1', 0, 'test', 'Admin', '0000-00-00 00:00:00'),
(25, 'test isu 1', 0, 'test', 'Admin', '0000-00-00 00:00:00'),
(26, 'test isu 1', 0, 'test', 'Admin', '0000-00-00 00:00:00'),
(29, 'isu baru', 0, 'isu', 'Admin', '2020-05-13 04:32:39'),
(30, 'isu baru', 0, 'isu baru', 'Admin', '2020-05-13 04:33:10'),
(34, 'isu', 33, 'oke masuk', 'alfan', '2020-05-13 06:35:03'),
(35, 'test isu', 0, 'test isu', 'Andi', '2020-05-13 07:58:08'),
(36, 'test isu', 35, 'oke', 'Admin', '2020-05-13 07:59:47');

-- --------------------------------------------------------

--
-- Table structure for table `issues`
--

CREATE TABLE `issues` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `description` varchar(255) NOT NULL,
  `level` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `project_id` int(11) NOT NULL,
  `pic` int(11) NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  `finished_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issues`
--

INSERT INTO `issues` (`id`, `name`, `description`, `level`, `status`, `project_id`, `pic`, `image`, `finished_by`) VALUES
(7, 'HV BOX IP 65', '', 'major', 'close', 8, 10, NULL, NULL),
(13, 'isu', '', 'major', 'close', 12, 1, NULL, NULL),
(16, 'Pemasangan Ac terlambat ', '', 'moderate', 'open', 0, 29, NULL, NULL),
(17, 'Keterlambatan pemasangan AC', '', 'moderate', 'open', 0, 29, NULL, NULL),
(19, 'Bbb', '', 'minor', 'close', 9, 29, NULL, NULL),
(22, 'PKS Uji Dinamis  LRT Jabo', '', 'moderate', 'open', 8, 10, NULL, NULL),
(23, 'Trip supply  listrik saat Uji dinamik LRT ts1', '', 'major', 'close', 8, 10, NULL, 1),
(25, 'BA FAT  Ts2', '', 'major', 'close', 8, 10, NULL, NULL),
(26, 'test isu 1', '', 'minor', 'open', 16, 1, NULL, NULL),
(28, 'Propulsi', '', 'major', 'close', 12, 1, NULL, NULL),
(29, 'isu', '', 'minor', 'open', 8, 1, '1589339738202.jpg', NULL),
(30, 'isu baru', 'close', 'major', 'close', 9, 1, '1589341129325.jpg', 1),
(31, 'isu', 'closed isu', 'major', 'close', 12, 46, '1589351429245.jpg', 1),
(32, 'test isu', 'closed isu', 'major', 'close', 8, 1, '1589356431957.jpg', 30);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`) VALUES
(8, 'LRT Jabodebek'),
(9, 'KRL KFW'),
(10, '50 BG'),
(11, '200 MG'),
(12, '4 TS KRDE BIAS'),
(13, '4 TS DMU Philipina'),
(14, '3 Loco + 15 Passenger Coach'),
(15, 'TMC'),
(16, 'Kereta Ukur'),
(17, '10 AC PNR');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nip` int(11) NOT NULL DEFAULT '0',
  `password` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `position` varchar(25) NOT NULL,
  `project_to_pm` varchar(15) DEFAULT NULL,
  `role_user` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nip`, `password`, `name`, `gender`, `position`, `project_to_pm`, `role_user`) VALUES
(1, 1, '0192023a7bbd73250516f069df18b500', 'Admin', 'L', 'staff', '', '001'),
(3, 999400001, '9e469b9965126036fc08bfa8dd31e9d6', 'Bambang ', 'L', 'GM', '', '002'),
(10, 999500020, 'ec3d4ddd8ede81d3bc77b265ab428171', 'Pastiadi', 'L', 'SM', '', '002'),
(29, 998500028, '09ed5715e859adfcc967b79b608c8ae0', 'Wely', 'L', 'PM KRL KFW', '9', '003'),
(30, 661900279, '5fbc1b1d12e9ee7b4ffe4558f27fd957', 'Andi', 'L', 'Staff Keproyekan', '', '005'),
(31, 991100029, '20eaa211969f3076a4fbb4128252bea8', 'Andy', 'L', 'Staff Keproyekan', '', '005'),
(32, 991200001, 'acc565da7766b81d757a8a46e2330fb7', 'Firdaus', 'L', 'Staff Keproyekan', '', '005'),
(33, 661700323, '86716eda4ef632d97ad4757620bb63cc', 'Ardhanu', 'L', 'Staff Keproyekan', '', '005'),
(34, 661600329, '0af3f997a4891a0ed21c16670df803eb', 'Wahyuni', 'P', 'Staff Keproyekan', '', '005'),
(35, 661800038, '9903ba2118cb00d6e0c2981ad9dd5885', 'Mega', 'P', 'Staff Keproyekan', '', '005'),
(36, 661700344, 'b95371f0643ac6d45e511ed2b9611a66', 'Azizah', 'P', 'Staff Keproyekan', '', '005'),
(37, 999900118, '66054c2e5baff221961905fd5495a230', 'Sutoro', 'L', 'PM Bangladesh', '11', '003'),
(39, 661900299, '63fc34871890ecb06fe78bfc3c4166a4', 'Indah P', 'P', 'Sekretaris Divisi', '', '005'),
(40, 999500018, '9a8e6c890af56235f7401e39d7e9fab5', 'Moch.  Izar', 'L', 'General Manager', '', '002'),
(41, 991800025, 'e0da7cf3a926881b442f67148fa0936a', 'Dadik Pranata Tirta', 'L', 'PM Philipina', '13', '003'),
(45, 990900016, '51f036719982fc37d81abe24c0da3048', 'Wiwid Afriyanto', 'L', 'PM LRT Jabodebek', '8', '003'),
(46, 2, '0192023a7bbd73250516f069df18b500', 'alfan', 'L', 'staff 4 ts krde', '12', '004');

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

CREATE TABLE `views` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `db_id` int(11) NOT NULL,
  `menu` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `views`
--

INSERT INTO `views` (`id`, `user_id`, `db_id`, `menu`) VALUES
(1, 1, 370, 1),
(2, 1, 368, 1),
(3, 46, 370, 1),
(4, 1, 372, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_projects`
--
ALTER TABLE `activity_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activity_project_plans`
--
ALTER TABLE `activity_project_plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attachments`
--
ALTER TABLE `attachments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issues`
--
ALTER TABLE `issues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`nip`);

--
-- Indexes for table `views`
--
ALTER TABLE `views`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_projects`
--
ALTER TABLE `activity_projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=373;

--
-- AUTO_INCREMENT for table `activity_project_plans`
--
ALTER TABLE `activity_project_plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `attachments`
--
ALTER TABLE `attachments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=533;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `issues`
--
ALTER TABLE `issues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `views`
--
ALTER TABLE `views`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
