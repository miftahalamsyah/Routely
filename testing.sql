-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 27, 2024 at 05:37 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `routely`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensis`
--

CREATE TABLE `absensis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `pertemuan_id` bigint(20) UNSIGNED NOT NULL,
  `hadir` tinyint(1) DEFAULT 1,
  `keterangan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`id`, `user_id`, `message`, `created_at`, `updated_at`) VALUES
(1, 1, 'helo', '2024-01-30 09:26:14', '2024-01-30 09:26:14'),
(2, 1, 'do you know', '2024-02-10 11:15:52', '2024-02-10 11:15:52'),
(3, 1, 'i don\'t', '2024-02-10 11:15:57', '2024-02-10 11:15:57'),
(4, 2, 'yo', '2024-02-17 11:43:36', '2024-02-17 11:43:36'),
(5, 2, 'mf', '2024-02-17 11:43:40', '2024-02-17 11:43:40'),
(6, 2, 'helo', '2024-02-17 11:43:46', '2024-02-17 11:43:46'),
(7, 2, 'pintar', '2024-03-06 06:16:22', '2024-03-06 06:16:22');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hasil_apersepsi_siswa`
--

CREATE TABLE `hasil_apersepsi_siswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pertemuan_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `jawaban` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hasil_apersepsi_siswa`
--

INSERT INTO `hasil_apersepsi_siswa` (`id`, `pertemuan_id`, `user_id`, `jawaban`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'Ya sudah pernah', '2024-02-14 11:01:08', '2024-02-14 11:01:08'),
(2, 1, 4, 'belum kak', '2024-02-15 11:40:56', '2024-02-15 11:40:56'),
(3, 2, 2, 'Belum pernah', '2024-02-16 09:26:37', '2024-02-16 09:26:37'),
(4, 3, 4, 'jawaban apersepsi', '2024-02-16 10:07:30', '2024-02-16 10:07:30'),
(5, 1, 13, 'Ini merupakan pengalaman baru bagi saya, karena saya belum pernah menerapkan kemampuan berpikir komputasi dalam pembelajaran Routing Statis', '2024-02-20 10:19:13', '2024-02-20 10:19:13'),
(7, 2, 6, 'dapat', '2024-05-14 11:54:23', '2024-05-14 11:54:23'),
(8, 2, 8, 'siswa', '2024-05-14 11:55:08', '2024-05-14 11:55:08'),
(9, 1, 7, '1. Mengikuti arah petunjuk dan melakukan pengecekan alamat kembali\r\n2. Menggali informasi dan mengunjungi satu persatu alamat berdasarkan pengklasifikasian', '2024-06-26 05:55:34', '2024-06-26 05:55:34');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_kuis_siswa`
--

CREATE TABLE `hasil_kuis_siswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `jawaban` text NOT NULL,
  `dekomposisi` int(11) DEFAULT NULL,
  `abstraksi` int(11) DEFAULT NULL,
  `pengenalan_pola` int(11) DEFAULT NULL,
  `algoritma` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `benar` int(11) DEFAULT NULL,
  `salah` int(11) DEFAULT NULL,
  `kosong` int(11) DEFAULT NULL,
  `pertemuan_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hasil_kuis_siswa`
--

INSERT INTO `hasil_kuis_siswa` (`id`, `user_id`, `jawaban`, `dekomposisi`, `abstraksi`, `pengenalan_pola`, `algoritma`, `total`, `benar`, `salah`, `kosong`, `pertemuan_id`, `created_at`, `updated_at`) VALUES
(15, 2, 'dcbaNcNdadcNabcNcdcadbN', 67, 67, 100, 25, 65, 15, 3, 5, 1, '2024-05-23 01:41:18', '2024-05-23 01:41:18');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_tes_siswas`
--

CREATE TABLE `hasil_tes_siswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `jawaban` text NOT NULL,
  `dekomposisi` int(11) DEFAULT NULL,
  `abstraksi` int(11) DEFAULT NULL,
  `pengenalan_pola` int(11) DEFAULT NULL,
  `algoritma` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `benar` int(11) DEFAULT NULL,
  `salah` int(11) DEFAULT NULL,
  `kosong` int(11) DEFAULT NULL,
  `kategori_tes_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hasil_tes_siswas`
--

INSERT INTO `hasil_tes_siswas` (`id`, `user_id`, `jawaban`, `dekomposisi`, `abstraksi`, `pengenalan_pola`, `algoritma`, `total`, `benar`, `salah`, `kosong`, `kategori_tes_id`, `created_at`, `updated_at`) VALUES
(79, 14, 'bebNeccbNabbNbNbbeNc', 50, 83, 50, 75, 65, 13, 2, 5, 1, '2024-06-23 13:56:13', '2024-06-23 13:56:13'),
(80, 12, 'bebNNNNNbcabbNcNbeeN', 50, 17, 25, 75, 40, 8, 4, 8, 1, '2024-06-23 13:57:37', '2024-06-23 13:57:37'),
(81, 4, 'bNbcNeNNcaNbebNbNeNc', 67, 50, 75, 50, 60, 12, 0, 8, 1, '2024-06-23 13:58:43', '2024-06-23 13:58:43'),
(82, 15, 'bebccNcbcaNbeNNbbNNc', 83, 83, 50, 50, 70, 14, 0, 6, 1, '2024-06-23 13:59:59', '2024-06-23 13:59:59'),
(83, 5, 'bNbcNecbcNbbNbdbNNNc', 67, 83, 50, 25, 60, 12, 1, 7, 1, '2024-06-23 14:01:17', '2024-06-23 14:01:17'),
(84, 2, 'beNccNcbcaNNebNNbeNN', 67, 67, 50, 50, 60, 12, 0, 8, 1, '2024-06-23 14:02:19', '2024-06-23 14:02:19'),
(85, 7, 'bebccecbcabbebcbbeNc', 100, 100, 100, 75, 95, 19, 0, 1, 1, '2024-06-23 14:03:46', '2024-06-23 14:03:46'),
(86, 8, 'bebccecbcabbebNbbNNc', 100, 100, 75, 50, 85, 17, 0, 3, 1, '2024-06-23 14:05:38', '2024-06-23 14:05:38');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_tugas_siswas`
--

CREATE TABLE `hasil_tugas_siswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `tugas_id` bigint(20) UNSIGNED NOT NULL,
  `topologi` varchar(255) NOT NULL,
  `powerpoint` varchar(255) NOT NULL,
  `penjelasan` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hasil_tugas_siswas`
--

INSERT INTO `hasil_tugas_siswas` (`id`, `user_id`, `tugas_id`, `topologi`, `powerpoint`, `penjelasan`, `created_at`, `updated_at`) VALUES
(30, 2, 1, 'Topologi_Kel-2_Tugas- 1_U2_0624132311.pkt', 'PemecahanMasalah_Kel-2_Tugas-1_U2_0624132311pdf', NULL, '2024-06-24 06:23:11', '2024-06-24 06:23:11'),
(31, 7, 1, 'Topologi_Kel-1_Tugas- 1_U7_0624132428.pkt', 'PemecahanMasalah_Kel-1_Tugas-1_U7_0624132428pdf', NULL, '2024-06-24 06:24:28', '2024-06-24 06:24:28'),
(32, 14, 1, 'Topologi_Kel-2_Tugas- 1_U14_0624133500.pkt', 'PemecahanMasalah_Kel-2_Tugas-1_U14_0624133500pdf', NULL, '2024-06-24 06:35:00', '2024-06-24 06:35:00'),
(34, 12, 1, 'Topologi_Kel-1_Tugas- 1_U12_0624133951.pkt', 'PemecahanMasalah_Kel-1_Tugas-1_U12_0624133951pdf', NULL, '2024-06-24 06:39:51', '2024-06-24 06:39:51');

-- --------------------------------------------------------

--
-- Table structure for table `jawaban_pertanyaan_pemulihan`
--

CREATE TABLE `jawaban_pertanyaan_pemulihan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `pertanyaan_pemulihan_id` bigint(20) UNSIGNED NOT NULL,
  `jawaban` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jawaban_pertanyaan_pemulihan`
--

INSERT INTO `jawaban_pertanyaan_pemulihan` (`id`, `user_id`, `pertanyaan_pemulihan_id`, `jawaban`, `created_at`, `updated_at`) VALUES
(1, 2, 3, 'GEL', '2024-02-18 12:01:51', '2024-02-18 12:01:51'),
(2, 2, 4, 'GEL', '2024-02-19 11:12:42', '2024-02-19 11:12:42'),
(4, 13, 3, 'eyJpdiI6ImVpMFFqK1hXVkRSTjlYMVh5SGJLRGc9PSIsInZhbHVlIjoidldZZFk0RjRHRUJiRGlpN0pmd1FNV2pJZERWb1BaMzI3QllVWkhmM3B6VT0iLCJtYWMiOiIxZjFmMDYzZTMwNzRiNGRjMDEyMjhmMDQzZTAyMTBkNzYyMGM0YTczMDhjMDYyNzEzZDUxOTFhNzgyNTI5YTNlIiwidGFnIjoiIn0=', '2024-02-20 09:01:30', '2024-02-20 09:01:30');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_tes`
--

CREATE TABLE `kategori_tes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `kategori_tes` varchar(255) NOT NULL,
  `waktu_tes` varchar(255) NOT NULL,
  `passcode` varchar(255) DEFAULT NULL,
  `status_tes` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori_tes`
--

INSERT INTO `kategori_tes` (`id`, `slug`, `kategori_tes`, `waktu_tes`, `passcode`, `status_tes`, `created_at`, `updated_at`) VALUES
(1, 'pretest', 'Pretest', '60', '821936', 1, '2024-01-19 09:53:49', '2024-01-20 06:42:00'),
(2, 'posttest', 'Posttest', '60', '334348', 0, '2024-01-19 09:53:49', '2024-05-23 01:35:14');

-- --------------------------------------------------------

--
-- Table structure for table `kelompoks`
--

CREATE TABLE `kelompoks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `no_kelompok` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelompoks`
--

INSERT INTO `kelompoks` (`id`, `user_id`, `no_kelompok`, `name`, `description`, `created_at`, `updated_at`) VALUES
(37, 12, 1, 'Kelompok 1', NULL, '2024-06-23 14:24:07', '2024-06-23 14:24:07'),
(38, 7, 1, 'Kelompok 1', NULL, '2024-06-23 14:24:07', '2024-06-23 14:24:07'),
(39, 14, 2, 'Kelompok 2', NULL, '2024-06-24 06:08:09', '2024-06-24 06:08:09'),
(40, 2, 2, 'Kelompok 2', NULL, '2024-06-24 06:08:09', '2024-06-24 06:08:09');

-- --------------------------------------------------------

--
-- Table structure for table `lencana`
--

CREATE TABLE `lencana` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_lencana` varchar(255) NOT NULL,
  `gambar_lencana` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lencana`
--

INSERT INTO `lencana` (`id`, `nama_lencana`, `gambar_lencana`, `created_at`, `updated_at`) VALUES
(1, 'Berpikir Komputasi : Pengenalan Dekomposisi', '1707386955.png', '2024-02-08 10:09:15', '2024-02-08 10:09:15'),
(2, 'Berpikir Komputasi : Pengenalan Abstraksi', '1707387621.png', '2024-02-08 10:20:21', '2024-02-08 10:20:21'),
(3, 'Berpikir Komputasi : Pengenalan Pola', '1707387639.png', '2024-02-08 10:20:39', '2024-02-08 10:20:39'),
(4, 'Berpikir Komputasi : Pengenalan Algoritma', '1707387655.png', '2024-02-08 10:20:55', '2024-02-08 10:20:55');

-- --------------------------------------------------------

--
-- Table structure for table `materis`
--

CREATE TABLE `materis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pertemuan_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` text NOT NULL,
  `thumbnail_image` varchar(255) DEFAULT NULL,
  `pdf_file` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `scores` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `materis`
--

INSERT INTO `materis` (`id`, `pertemuan_id`, `title`, `slug`, `thumbnail_image`, `pdf_file`, `description`, `created_at`, `updated_at`, `scores`) VALUES
(1, 1, 'Konsep Routing  Statis dan Berpikir Komputasi', 'konsep-routing-statis-dan-berpikir-komputasi', 'Foto_Konsep Routing  Statis dan Berpikir Komputasi_1719152490.jpg', 'Materi_Konsep Routing  Statis dan Berpikir Komputasi_1719152490.pdf', 'Ini adalah deskripsi', '2024-01-19 09:57:47', '2024-06-23 14:21:30', 0),
(2, 2, 'Konfigurasi Routing Statis', 'konfigurasi-routing-statis', 'Foto_Konfigurasi Routing Statis_1719152517.jpg', 'Materi_Konfigurasi Routing Statis_1719152517.pdf', 'Konfigurasi Routing Statis', '2024-01-30 06:23:39', '2024-06-23 14:21:57', 0),
(3, 3, 'Mengidentifikasi dan Memperbaiki Masalah Routing Statis', 'mengidentifikasi-dan-memperbaiki-masalah-routing-statis', 'Foto_Mengidentifikasi dan Memperbaiki Masalah Routing Statis_1719152572.jpg', 'Materi_Mengidentifikasi dan Memperbaiki Masalah Routing Statis_1719152572.pdf', 'Mengidentifikasi dan Memperbaiki Masalah Routing Statis', '2024-01-30 06:24:29', '2024-06-23 14:22:52', 0);

-- --------------------------------------------------------

--
-- Table structure for table `materi_user`
--

CREATE TABLE `materi_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `materi_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_09_17_124932_create_materis_table', 1),
(6, '2023_09_24_104152_add_is_admin_to_users_table', 1),
(7, '2023_09_26_121547_create_tugas_table', 1),
(8, '2023_09_27_064415_create_pertemuan_table', 1),
(9, '2023_09_29_054614_add_github_social_id_field', 1),
(10, '2023_10_10_115840_create_nilai_table', 1),
(11, '2023_10_10_120539_add_scores_to_materis_table', 1),
(12, '2023_10_10_122435_create_materi_user_table', 1),
(13, '2024_01_06_083413_create_chats_table', 1),
(14, '2024_01_07_090536_create_kelompoks_table', 1),
(15, '2024_01_09_184559_create_lencana_table', 1),
(16, '2024_01_10_175953_add_total_score_to_nilai_table', 1),
(17, '2024_01_11_173041_create_absensis_table', 1),
(18, '2024_01_16_160638_create_kategori_test_table', 1),
(20, '2024_01_17_160323_create_hasil_tes_siswa_table', 1),
(21, '2024_01_24_145427_create_refleksis_table', 2),
(22, '2024_01_25_141517_hasil_tugas_siswa_create', 3),
(25, '2024_01_26_155111_create_nilai_tugas_table', 4),
(28, '2024_02_11_133928_create_pengajuan_masalah_table', 5),
(29, '2024_02_14_165455_create_hasil_apersepsi_siswa_table', 6),
(30, '2024_02_16_154702_create_soal_kuis_table', 7),
(31, '2024_02_16_154711_create_hasil_kuis_siswa_table', 7),
(32, '2024_02_18_173920_create_petanyaan_pemulihan_table', 8),
(33, '2024_02_18_183925_create_jawaban_pertanyaan_pemulihan_table', 9),
(34, '2024_01_16_160734_create_soal_tes_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `pretest` double(8,2) DEFAULT NULL,
  `posttest` double(8,2) DEFAULT NULL,
  `total_nilai` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id`, `user_id`, `pretest`, `posttest`, `total_nilai`, `created_at`, `updated_at`) VALUES
(14, 14, 65.00, NULL, 65, '2024-06-23 13:56:13', '2024-06-23 13:56:13'),
(15, 12, 40.00, NULL, 40, '2024-06-23 13:57:37', '2024-06-23 13:57:37'),
(16, 4, 60.00, NULL, 60, '2024-06-23 13:58:43', '2024-06-23 13:58:43'),
(17, 15, 70.00, NULL, 70, '2024-06-23 13:59:59', '2024-06-23 13:59:59'),
(18, 5, 60.00, NULL, 60, '2024-06-23 14:01:17', '2024-06-23 14:01:17'),
(19, 2, 60.00, NULL, 60, '2024-06-23 14:02:19', '2024-06-23 14:02:19'),
(20, 7, 95.00, NULL, 95, '2024-06-23 14:03:46', '2024-06-23 14:03:46'),
(21, 8, 85.00, NULL, 85, '2024-06-23 14:05:38', '2024-06-23 14:05:38');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_tugas`
--

CREATE TABLE `nilai_tugas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tugas_id` bigint(20) UNSIGNED NOT NULL,
  `hasil_tugas_siswa_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `nilai_tugas` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nilai_tugas`
--

INSERT INTO `nilai_tugas` (`id`, `tugas_id`, `hasil_tugas_siswa_id`, `user_id`, `nilai_tugas`, `created_at`, `updated_at`) VALUES
(22, 1, 31, 7, 90, '2024-06-24 06:24:56', '2024-06-24 06:24:56');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_masalah`
--

CREATE TABLE `pengajuan_masalah` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pertemuan_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `kelompok` int(11) NOT NULL,
  `soal` varchar(255) NOT NULL,
  `keterangan` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengajuan_masalah`
--

INSERT INTO `pengajuan_masalah` (`id`, `pertemuan_id`, `user_id`, `kelompok`, `soal`, `keterangan`, `created_at`, `updated_at`) VALUES
(28, 1, 7, 1, 'Soal PM_Pertemuan 1_Kelompok 1_3553.pkt', NULL, '2024-06-23 14:39:13', '2024-06-23 14:39:13'),
(30, 1, 2, 2, 'Soal PM_Pertemuan 1_Kelompok 2_9340.pkt', 'Semangat', '2024-06-24 06:09:00', '2024-06-24 06:09:00'),
(33, 1, 12, 1, 'Soal PM_Pertemuan 1_Kelompok 1_5121.pkt', NULL, '2024-06-26 06:58:41', '2024-06-26 06:58:41');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan_pemulihan`
--

CREATE TABLE `pertanyaan_pemulihan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pertanyaan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pertanyaan_pemulihan`
--

INSERT INTO `pertanyaan_pemulihan` (`id`, `pertanyaan`, `created_at`, `updated_at`) VALUES
(1, 'Apa destinasi liburan impian Anda yang belum pernah tercapai?', '2024-02-18 11:05:57', '2024-02-18 11:05:57'),
(2, 'Apa nama makanan khas daerah kelahiran Anda yang jarang diketahui orang?', '2024-02-18 11:05:57', '2024-02-18 11:05:57'),
(3, 'Siapa penyanyi atau band favorit Anda yang tidak terlalu populer?', '2024-02-18 11:05:57', '2024-02-18 11:05:57'),
(4, 'Apa aktivitas yang paling Anda nikmati di akhir pekan?', '2024-02-18 11:05:57', '2024-02-18 11:05:57'),
(5, 'Apakah nama panggilan atau nama kecil yang hanya digunakan oleh orang-orang terdekat Anda?', '2024-02-18 11:05:57', '2024-02-18 11:05:57'),
(6, 'Apa hobi atau kegiatan yang Anda lakukan secara rahasia?', '2024-02-18 11:05:57', '2024-02-18 11:05:57'),
(7, 'Apa kota atau tempat yang paling berkesan bagi Anda yang tidak banyak orang ketahui?', '2024-02-18 11:05:57', '2024-02-18 11:05:57'),
(8, 'Apakah sesuatu yang pernah Anda lakukan yang membuat Anda merasa sangat bangga, tetapi tidak banyak orang mengetahuinya?', '2024-02-18 11:05:57', '2024-02-18 11:05:57'),
(9, 'Apa film atau acara TV yang jarang diketahui orang tetapi menjadi favorit Anda?', '2024-02-18 11:05:57', '2024-02-18 11:05:57'),
(10, 'Apakah nama pahlawan atau tokoh inspiratif yang tidak populer tetapi memiliki dampak besar pada hidup Anda?', '2024-02-18 11:05:57', '2024-02-18 11:05:57');

-- --------------------------------------------------------

--
-- Table structure for table `pertemuans`
--

CREATE TABLE `pertemuans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` text NOT NULL,
  `pertemuan_ke` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `tujuan_pembelajaran` text NOT NULL,
  `apersepsi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pertemuans`
--

INSERT INTO `pertemuans` (`id`, `slug`, `pertemuan_ke`, `tanggal`, `tujuan_pembelajaran`, `apersepsi`, `created_at`, `updated_at`) VALUES
(1, 'pertemuan-ke-1', 1, '2024-08-05', '\"Routing Statis dengan Perspektif Berpikir Komputasi\" adalah agar peserta didik dapat memahami, menerapkan konsep berpikir komputasi dalam penggunaan routing statis, menggunakan alat simulasi, berintegrasi dengan protokol jaringan, menganalisis permasalahan, berkolaborasi dalam tim, mengoptimalkan kinerja jaringan, dan mengembangkan keterampilan berpikir komputasional.', '<p>Bayangkan kamu seorang kurir yang bertugas mengantarkan paket ke berbagai alamat di Kabupaten Bandung Barat. Kamu memiliki peta kabupaten dan daftar alamat tujuan paket.</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>1. Bagaimana cara kalian memastikan bahwa setiap paket sampai ke alamat yang benar?</p>\r\n	</li>\r\n	<li>\r\n	<p>2. Bagaimana jika ada alamat baru yang belum pernah kalian kunjungi sebelumnya?&nbsp;</p>\r\n	</li>\r\n</ul>', '2024-01-19 09:53:49', '2024-06-24 01:54:22'),
(2, 'pertemuan-ke-2', 2, '2024-08-06', 'Siswa dapat', '<p>Siswa dapat 2</p>', '2024-01-19 09:53:49', '2024-06-24 02:05:19'),
(3, 'pertemuan-ke-3', 3, '2024-08-07', 'Siswa dapat', '<p>Siswa dapat 3</p>', '2024-01-19 09:53:49', '2024-06-24 02:05:34');

-- --------------------------------------------------------

--
-- Table structure for table `refleksis`
--

CREATE TABLE `refleksis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `pertemuan_id` bigint(20) UNSIGNED NOT NULL,
  `seberapa_paham` text DEFAULT NULL,
  `seberapa_baik` text DEFAULT NULL,
  `seberapa_sulit` text DEFAULT NULL,
  `hambatan` text DEFAULT NULL,
  `saran` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `refleksis`
--

INSERT INTO `refleksis` (`id`, `user_id`, `pertemuan_id`, `seberapa_paham`, `seberapa_baik`, `seberapa_sulit`, `hambatan`, `saran`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'Paham', 'Baik', 'Sulit', 'Gaada', 'Gada', '2024-01-24 10:23:01', '2024-01-24 10:23:01'),
(2, 3, 1, 'Pusing', 'Tingkatkan', 'Sangat', 'Otak saya', NULL, '2024-01-24 10:28:51', '2024-01-24 10:28:51'),
(3, 2, 2, 'Saya merasa cukup paham dengan materi pelajaran yang dibahas pada pertemuan ke-2. Materi yang dibahas adalah tentang cara membuat ringkasan. Saya sudah memahami langkah-langkah membuat ringkasan dan juga beberapa tips untuk membuat ringkasan yang baik.', 'Saya merasa cukup baik dalam mengerjakan tugas membuat ringkasan. Saya bisa menyelesaikan tugas tersebut dengan tepat waktu dan sesuai dengan instruksi yang diberikan.', 'Saya tidak merasa kesulitan dalam memahami materi pelajaran tentang cara membuat ringkasan. Materi tersebut cukup mudah dipahami dan sudah pernah saya pelajari sebelumnya.', 'Saya tidak menemukan hambatan yang berarti dalam memahami materi pelajaran tentang cara membuat ringkasan.', 'Saya rasa materi pelajaran tentang cara membuat ringkasan sudah cukup lengkap. Namun, saya ingin ada tambahan contoh-contoh ringkasan yang lebih beragam. Hal ini akan membantu saya untuk memahami materi pelajaran dengan lebih baik.', '2024-01-25 09:34:34', '2024-01-25 09:34:34'),
(4, 13, 1, 'Saya merasa cukup paham dengan materi pelajaran yang dibahas pada pertemuan ke-1. Materi yang dibahas adalah tentang cara membuat ringkasan. Saya sudah memahami langkah-langkah membuat ringkasan dan juga beberapa tips untuk membuat ringkasan yang baik.', 'Saya merasa cukup baik dalam mengerjakan tugas membuat ringkasan. Saya bisa menyelesaikan tugas tersebut dengan tepat waktu dan sesuai dengan instruksi yang diberikan.', 'Saya tidak merasa kesulitan dalam memahami materi pelajaran tentang cara membuat ringkasan. Materi tersebut cukup mudah dipahami dan sudah pernah saya pelajari sebelumnya.', 'Saya tidak menemukan hambatan yang berarti dalam memahami materi pelajaran tentang cara membuat ringkasan.', 'Saya rasa materi pelajaran tentang cara membuat ringkasan sudah cukup lengkap. Namun, saya ingin ada tambahan contoh-contoh ringkasan yang lebih beragam. Hal ini akan membantu saya untuk memahami materi pelajaran dengan lebih baik.', '2024-02-20 09:46:15', '2024-02-20 09:46:15');

-- --------------------------------------------------------

--
-- Table structure for table `soal_kuis`
--

CREATE TABLE `soal_kuis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `indikator` varchar(255) NOT NULL,
  `pertanyaan` varchar(255) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `jawaban_a` varchar(255) NOT NULL,
  `jawaban_b` varchar(255) NOT NULL,
  `jawaban_c` varchar(255) NOT NULL,
  `jawaban_d` varchar(255) NOT NULL,
  `jawaban_e` varchar(255) NOT NULL,
  `kunci_jawaban` varchar(255) NOT NULL,
  `pembahasan` varchar(255) DEFAULT NULL,
  `pertemuan_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `soal_kuis`
--

INSERT INTO `soal_kuis` (`id`, `indikator`, `pertanyaan`, `gambar`, `jawaban_a`, `jawaban_b`, `jawaban_c`, `jawaban_d`, `jawaban_e`, `kunci_jawaban`, `pembahasan`, `pertemuan_id`, `created_at`, `updated_at`) VALUES
(1, 'Dekomposisi', 'Mengapa Dekomposisi penting dalam persiapan membuat topologi routing statis?', NULL, 'Mempermudah memahami masalah secara keseluruhan', 'Memutuskan apa yang harus dikerjakan dan tidak', 'Mengurangi kebutuhan untuk algoritma', 'Memecah masalah menjadi tugas yang lebih kecil dan terkelola', 'Menyusun ulang solusi yang telah ditemukan', 'd', 'Dalam konteks persiapan membuat topologi routing statis, dekomposisi berguna untuk keterkelolaan masalah dan fokus terhadap bagian masalah yang akan dipecahkan.', 1, '2024-02-16 09:24:53', '2024-02-16 09:24:53'),
(2, 'Dekomposisi', 'Pertanyaan no 2?', NULL, 'Jawaban Salah', 'Jawaban Salah 2', 'Jawaban Benar', 'Jawaban Salah 3', 'Jawaban Salah 4', 'c', NULL, 1, '2024-02-16 10:20:18', '2024-02-16 10:20:18'),
(3, 'Dekomposisi', 'Apa tujuan utama dari dekomposisi dalam computational thinking?', NULL, 'Meningkatkan kecepatan pemrosesan data', 'Memecah masalah besar menjadi submasalah yang lebih kecil', 'Menyusun ulang kode program', 'Mengimplementasikan algoritma baru', 'Mengoptimalkan penggunaan memori', 'b', NULL, 1, '2024-02-16 10:53:59', '2024-02-16 10:53:59'),
(4, 'Dekomposisi', 'Bagaimana dekomposisi dapat membantu dalam penyelesaian masalah kompleks?', NULL, 'Mengecilkan ukuran masalah', 'Membuat program lebih kompleks', 'Menggabungkan semua aspek masalah', 'Menulis kode tanpa perencanaan', 'Mengabaikan langkah-langkah kecil', 'a', NULL, 1, '2024-02-16 10:53:59', '2024-02-16 10:53:59'),
(5, 'Dekomposisi', 'Apa langkah pertama dalam proses dekomposisi sebuah masalah?', NULL, 'Menggabungkan semua aspek masalah', 'Mengevaluasi kompleksitas waktu eksekusi', 'Menulis kode program utama', 'Membuat daftar submasalah yang harus diselesaikan', 'Mengimplementasikan algoritma baru', 'b', 'Uji coba pembahasan', 1, '2024-02-16 10:53:59', '2024-02-16 10:53:59'),
(6, 'Abstraksi', 'Apa yang dimaksud dengan abstraksi dalam pemrograman?', NULL, 'Proses mencari kesalahan dalam kode', 'Mengecilkan ukuran program', 'Menyembunyikan detail kompleksitas dan fokus pada fitur penting', 'Menulis kode tanpa perencanaan', 'Mengoptimalkan penggunaan memori', 'c', NULL, 1, '2024-02-16 10:53:59', '2024-02-16 10:53:59'),
(7, 'Abstraksi', 'Mengapa abstraksi penting dalam pengembangan perangkat lunak?', NULL, 'Membuat program lebih kompleks', 'Meningkatkan kompleksitas waktu eksekusi', 'Mengurangi keterbacaan kode', 'Mempermudah pemahaman dan pemeliharaan kode', 'Mengabaikan langkah-langkah kecil', 'd', NULL, 1, '2024-02-16 10:53:59', '2024-02-16 10:53:59'),
(8, 'Abstraksi', 'Bagaimana abstraksi membantu dalam pengorganisasian kode program?', NULL, 'Menggabungkan semua aspek program menjadi satu', 'Menyembunyikan fitur-fitur utama', 'Mengecilkan ukuran program secara keseluruhan', 'Meningkatkan reusabilitas kode', 'Menulis kode tanpa perencanaan', 'd', NULL, 1, '2024-02-16 10:53:59', '2024-02-16 10:53:59'),
(9, 'Pengenalan Pola', 'Apa yang dimaksud dengan pengenalan pola dalam konteks komputasi?', NULL, 'Proses mengelompokkan data menjadi kategori tertentu', 'Membaca pola alam secara langsung', 'Menggunakan pola sebagai nama file dalam sistem operasi', 'Menulis kode tanpa perencanaan', 'Menyembunyikan pola dalam pemrograman', 'a', NULL, 1, '2024-02-16 10:53:59', '2024-02-16 10:53:59'),
(10, 'Pengenalan Pola', 'Mengapa pengenalan pola sering digunakan dalam kecerdasan buatan?', NULL, 'Untuk membuat program lebih kompleks', 'Mempermudah pemahaman dan pemeliharaan kode', 'Meningkatkan efisiensi pengembangan', 'Untuk mengidentifikasi pola atau tren dalam data', 'Mengurangi reusabilitas kode', 'd', NULL, 1, '2024-02-16 10:53:59', '2024-02-16 10:53:59'),
(11, 'Algoritma', 'Apa peran utama algoritma dalam computational thinking?', NULL, 'Menyusun ulang kode program', 'Meningkatkan kompleksitas waktu eksekusi', 'Memecahkan masalah dan memberikan langkah-langkah solusi', 'Menulis kode tanpa perencanaan', 'Menggabungkan semua aspek masalah', 'c', NULL, 1, '2024-02-16 10:53:59', '2024-02-16 10:53:59'),
(12, 'Algoritma', 'Mengapa penting untuk merancang algoritma dengan baik dalam pengembangan perangkat lunak?', NULL, 'Untuk membuat program lebih kompleks', 'Meningkatkan kompleksitas waktu eksekusi', 'Menjamin bahwa program tidak akan pernah mengalami kesalahan', 'Memudahkan pengorganisasian kode', 'Mengabaikan perencanaan awal', 'd', NULL, 1, '2024-02-16 10:53:59', '2024-02-16 10:53:59'),
(13, 'Dekomposisi', 'Apa tujuan utama dari dekomposisi dalam computational thinking?', NULL, 'Meningkatkan kecepatan pemrosesan data', 'Memecah masalah besar menjadi submasalah yang lebih kecil', 'Menyusun ulang kode program', 'Mengimplementasikan algoritma baru', 'Mengoptimalkan penggunaan memori', 'b', NULL, 2, '2024-02-16 12:46:01', '2024-02-16 12:46:01'),
(14, 'Dekomposisi', 'Bagaimana dekomposisi dapat membantu dalam penyelesaian masalah kompleks?', NULL, 'Mengecilkan ukuran masalah', 'Membuat program lebih kompleks', 'Menggabungkan semua aspek masalah', 'Menulis kode tanpa perencanaan', 'Mengabaikan langkah-langkah kecil', 'a', NULL, 2, '2024-02-16 12:46:01', '2024-02-16 12:46:01'),
(15, 'Dekomposisi', 'Apa langkah pertama dalam proses dekomposisi sebuah masalah?', NULL, 'Menggabungkan semua aspek masalah', 'Mengevaluasi kompleksitas waktu eksekusi', 'Menulis kode program utama', 'Membuat daftar submasalah yang harus diselesaikan', 'Mengimplementasikan algoritma baru', 'b', NULL, 2, '2024-02-16 12:46:01', '2024-02-16 12:46:01'),
(16, 'Abstraksi', 'Apa yang dimaksud dengan abstraksi dalam pemrograman?', NULL, 'Proses mencari kesalahan dalam kode', 'Mengecilkan ukuran program', 'Menyembunyikan detail kompleksitas dan fokus pada fitur penting', 'Menulis kode tanpa perencanaan', 'Mengoptimalkan penggunaan memori', 'c', NULL, 2, '2024-02-16 12:46:01', '2024-02-16 12:46:01'),
(17, 'Abstraksi', 'Mengapa abstraksi penting dalam pengembangan perangkat lunak?', NULL, 'Membuat program lebih kompleks', 'Meningkatkan kompleksitas waktu eksekusi', 'Mengurangi keterbacaan kode', 'Mempermudah pemahaman dan pemeliharaan kode', 'Mengabaikan langkah-langkah kecil', 'd', NULL, 2, '2024-02-16 12:46:01', '2024-02-16 12:46:01'),
(18, 'Abstraksi', 'Bagaimana abstraksi membantu dalam pengorganisasian kode program?', NULL, 'Menggabungkan semua aspek program menjadi satu', 'Menyembunyikan fitur-fitur utama', 'Mengecilkan ukuran program secara keseluruhan', 'Meningkatkan reusabilitas kode', 'Menulis kode tanpa perencanaan', 'd', NULL, 2, '2024-02-16 12:46:01', '2024-02-16 12:46:01'),
(19, 'Pengenalan Pola', 'Apa yang dimaksud dengan pengenalan pola dalam konteks komputasi?', NULL, 'Proses mengelompokkan data menjadi kategori tertentu', 'Membaca pola alam secara langsung', 'Menggunakan pola sebagai nama file dalam sistem operasi', 'Menulis kode tanpa perencanaan', 'Menyembunyikan pola dalam pemrograman', 'a', NULL, 2, '2024-02-16 12:46:01', '2024-02-16 12:46:01'),
(20, 'Pengenalan Pola', 'Mengapa pengenalan pola sering digunakan dalam kecerdasan buatan?', NULL, 'Untuk membuat program lebih kompleks', 'Mempermudah pemahaman dan pemeliharaan kode', 'Meningkatkan efisiensi pengembangan', 'Untuk mengidentifikasi pola atau tren dalam data', 'Mengurangi reusabilitas kode', 'd', NULL, 2, '2024-02-16 12:46:01', '2024-02-16 12:46:01'),
(21, 'Algoritma', 'Apa peran utama algoritma dalam computational thinking?', NULL, 'Menyusun ulang kode program', 'Meningkatkan kompleksitas waktu eksekusi', 'Memecahkan masalah dan memberikan langkah-langkah solusi', 'Menulis kode tanpa perencanaan', 'Menggabungkan semua aspek masalah', 'c', NULL, 2, '2024-02-16 12:46:01', '2024-02-16 12:46:01'),
(22, 'Algoritma', 'Mengapa penting untuk merancang algoritma dengan baik dalam pengembangan perangkat lunak?', NULL, 'Untuk membuat program lebih kompleks', 'Meningkatkan kompleksitas waktu eksekusi', 'Menjamin bahwa program tidak akan pernah mengalami kesalahan', 'Memudahkan pengorganisasian kode', 'Mengabaikan perencanaan awal', 'd', NULL, 2, '2024-02-16 12:46:01', '2024-02-16 12:46:01'),
(23, 'Algoritma', 'Apa nama hewan yang ada dalam gambar ini?', 'Gambar Kuis_Pertemuan 2_7506.png', 'Kucing', 'Anjing', 'Kambing', 'Semangka', 'Ikan Tongkol', 'a', 'Itu adalah gambar kucing', 2, '2024-05-01 09:58:26', '2024-05-01 09:58:26'),
(24, 'Dekomposisi', 'Apa gambar dibawah ini?', 'Gambar Kuis_Pertemuan 1_4191.png', 'Kitten', 'Egg', 'Another Egg', 'Probably Egg', 'Must be Egg', 'a', 'kitten UwU', 1, '2024-05-10 09:43:11', '2024-05-10 09:43:11'),
(25, 'Dekomposisi', 'Apa tujuan utama dari dekomposisi dalam computational thinking?', NULL, 'Meningkatkan kecepatan pemrosesan data', 'Memecah masalah besar menjadi submasalah yang lebih kecil', 'Menyusun ulang kode program', 'Mengimplementasikan algoritma baru', 'Mengoptimalkan penggunaan memori', 'b', NULL, 1, '2024-05-10 09:43:39', '2024-05-10 09:43:39'),
(26, 'Dekomposisi', 'Bagaimana dekomposisi dapat membantu dalam penyelesaian masalah kompleks?', NULL, 'Mengecilkan ukuran masalah', 'Membuat program lebih kompleks', 'Menggabungkan semua aspek masalah', 'Menulis kode tanpa perencanaan', 'Mengabaikan langkah-langkah kecil', 'a', NULL, 1, '2024-05-10 09:43:39', '2024-05-10 09:43:39'),
(27, 'Dekomposisi', 'Apa langkah pertama dalam proses dekomposisi sebuah masalah?', NULL, 'Menggabungkan semua aspek masalah', 'Mengevaluasi kompleksitas waktu eksekusi', 'Menulis kode program utama', 'Membuat daftar submasalah yang harus diselesaikan', 'Mengimplementasikan algoritma baru', 'b', NULL, 1, '2024-05-10 09:43:39', '2024-05-10 09:43:39'),
(28, 'Abstraksi', 'Apa yang dimaksud dengan abstraksi dalam pemrograman?', NULL, 'Proses mencari kesalahan dalam kode', 'Mengecilkan ukuran program', 'Menyembunyikan detail kompleksitas dan fokus pada fitur penting', 'Menulis kode tanpa perencanaan', 'Mengoptimalkan penggunaan memori', 'c', NULL, 1, '2024-05-10 09:43:39', '2024-05-10 09:43:39'),
(29, 'Abstraksi', 'Mengapa abstraksi penting dalam pengembangan perangkat lunak?', NULL, 'Membuat program lebih kompleks', 'Meningkatkan kompleksitas waktu eksekusi', 'Mengurangi keterbacaan kode', 'Mempermudah pemahaman dan pemeliharaan kode', 'Mengabaikan langkah-langkah kecil', 'd', NULL, 1, '2024-05-10 09:43:39', '2024-05-10 09:43:39'),
(30, 'Abstraksi', 'Bagaimana abstraksi membantu dalam pengorganisasian kode program?', NULL, 'Menggabungkan semua aspek program menjadi satu', 'Menyembunyikan fitur-fitur utama', 'Mengecilkan ukuran program secara keseluruhan', 'Meningkatkan reusabilitas kode', 'Menulis kode tanpa perencanaan', 'd', NULL, 1, '2024-05-10 09:43:39', '2024-05-10 09:43:39'),
(31, 'Pengenalan Pola', 'Apa yang dimaksud dengan pengenalan pola dalam konteks komputasi?', NULL, 'Proses mengelompokkan data menjadi kategori tertentu', 'Membaca pola alam secara langsung', 'Menggunakan pola sebagai nama file dalam sistem operasi', 'Menulis kode tanpa perencanaan', 'Menyembunyikan pola dalam pemrograman', 'a', NULL, 1, '2024-05-10 09:43:39', '2024-05-10 09:43:39'),
(32, 'Pengenalan Pola', 'Mengapa pengenalan pola sering digunakan dalam kecerdasan buatan?', NULL, 'Untuk membuat program lebih kompleks', 'Mempermudah pemahaman dan pemeliharaan kode', 'Meningkatkan efisiensi pengembangan', 'Untuk mengidentifikasi pola atau tren dalam data', 'Mengurangi reusabilitas kode', 'd', NULL, 1, '2024-05-10 09:43:39', '2024-05-10 09:43:39'),
(33, 'Algoritma', 'Apa peran utama algoritma dalam computational thinking?', NULL, 'Menyusun ulang kode program', 'Meningkatkan kompleksitas waktu eksekusi', 'Memecahkan masalah dan memberikan langkah-langkah solusi', 'Menulis kode tanpa perencanaan', 'Menggabungkan semua aspek masalah', 'c', NULL, 1, '2024-05-10 09:43:39', '2024-05-10 09:43:39'),
(34, 'Algoritma', 'Mengapa penting untuk merancang algoritma dengan baik dalam pengembangan perangkat lunak?', NULL, 'Untuk membuat program lebih kompleks', 'Meningkatkan kompleksitas waktu eksekusi', 'Menjamin bahwa program tidak akan pernah mengalami kesalahan', 'Memudahkan pengorganisasian kode', 'Mengabaikan perencanaan awal', 'd', NULL, 1, '2024-05-10 09:43:39', '2024-05-10 09:43:39');

-- --------------------------------------------------------

--
-- Table structure for table `soal_tes`
--

CREATE TABLE `soal_tes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `indikator` varchar(255) NOT NULL,
  `pertanyaan` text NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `jawaban_a` text NOT NULL,
  `jawaban_b` text NOT NULL,
  `jawaban_c` text NOT NULL,
  `jawaban_d` text NOT NULL,
  `jawaban_e` text NOT NULL,
  `kunci_jawaban` varchar(255) NOT NULL,
  `pembahasan` text DEFAULT NULL,
  `kategori_tes_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `soal_tes`
--

INSERT INTO `soal_tes` (`id`, `indikator`, `pertanyaan`, `gambar`, `jawaban_a`, `jawaban_b`, `jawaban_c`, `jawaban_d`, `jawaban_e`, `kunci_jawaban`, `pembahasan`, `kategori_tes_id`, `created_at`, `updated_at`) VALUES
(1, 'Dekomposisi', '<p>Mas Tejo ingin membangun sebuah jaringan di warnetnya ia menggunakan konfigurasi routing statis untuk menghubungkan komputer-komputer di ruangan A dan komputer-komputer di ruangan B ke komputer master yang berada di ruangan C. Setiap ruangan memiliki masing-masing router dan switch, di ruangan A dan B terdapat 20 komputer, sedangkan di ruangan C terdiri dari 1 komputer.</p>\r\n\r\n<p>Bagaimana strategi penyederhanaan pengerjaan tugas-tugas yang harus dilakukan untuk membangun sebuah jaringan berdasarkan penjelasan di atas?</p>', NULL, 'Menyiapkan 3 buah router, 3 buah switch, 40 komputer, menghubungkan tiap komputer ke switch, menghubungkan switch ke router, menghubungkan router ke router lain', 'Menyiapkan 3 buah router, 3 buah switch, 41 komputer, menghubungkan tiap komputer ke switch, menghubungkan switch ke router, menghubungkan router ke router lain', 'Menyiapkan 3 buah router, 3 buah switch, 41 komputer, menghubungkan tiap komputer ke router, menghubungkan switch ke komputer, menghubungkan router ke router lain', 'Menyiapkan 3 buah router, 3 buah switch, 40 komputer, menghubungkan tiap komputer ke router, menghubungkan switch ke komputer, menghubungkan router ke router lain', 'Menyiapkan 3 buah router, 3 buah switch, 41 komputer, menghubungkan tiap komputer ke router, menghubungkan switch ke router, menghubungkan router ke router lain', 'b', NULL, 1, '2024-06-23 12:25:22', '2024-06-23 12:43:10'),
(2, 'Dekomposisi', '<p>Sebuah perusahaan memiliki beberapa departemen yang tersebar di gedung yang berbeda. Setiap departemen memiliki jaringan lokal sendiri dan terhubung ke jaringan utama perusahaan. Administrator jaringan ingin memastikan bahwa setiap departemen dapat berkomunikasi dengan departemen lain, namun ingin menghindari penggunaan protokol routing dinamis yang kompleks. Oleh karena itu, ia memutuskan untuk menggunakan routing statis.</p>\r\n\r\n<p>Untuk menyederhanakan proses konfigurasi routing statis, administrator jaringan dapat memecah masalah menjadi beberapa langkah yang lebih kecil. Manakah dari opsi berikut yang merupakan langkah dekomposisi yang tepat?</p>', NULL, 'Mengidentifikasi semua departemen yang perlu berkomunikasi satu sama lain.', 'Menggambarkan topologi jaringan dan menentukan jalur komunikasi antar departemen.', 'Mengkonfigurasi rute statis di setiap router untuk mengarahkan lalu lintas ke departemen yang sesuai.', 'Memastikan setiap departemen memiliki alamat jaringan yang unik.', 'Semua jawaban di atas benar.', 'e', NULL, 1, '2024-06-23 12:49:28', '2024-06-23 12:49:28'),
(3, 'Dekomposisi', '<p>Pak Toha memiliki rumah tiga lantai dengan berbagai ruangan, seperti ruang tamu, kamar tidur, dapur, dan ruang kerja. Ia ingin memasang jaringan internet di seluruh rumah agar semua perangkat dapat terhubung ke internet. Untuk menyederhanakan pemasangan jaringan, Pak Toha memutuskan untuk menggunakan konsep routing statis. Namun, ia merasa kesulitan karena banyaknya ruangan dan perangkat yang harus dihubungkan.</p>\r\n\r\n<p>Manakah dari opsi berikut yang merupakan langkah dekomposisi yang tepat untuk menyederhanakan masalah pemasangan jaringan Pak Toha?</p>', NULL, 'Membeli router yang lebih canggih dengan fitur routing dinamis.', 'Mengelompokkan ruangan berdasarkan lantai dan menentukan jalur kabel yang optimal untuk setiap kelompok.', 'Menghubungkan semua perangkat ke satu router utama tanpa mempertimbangkan lokasi ruangan.', 'Memasang access point di setiap ruangan untuk memperkuat sinyal Wi-Fi.', 'Meminta bantuan teknisi profesional untuk memasang jaringan.', 'b', NULL, 1, '2024-06-23 12:50:10', '2024-06-23 12:50:10'),
(4, 'Dekomposisi', '<p>Anda diberikan tugas oleh guru anda untuk mengonfigurasi sebuah topologi dengan menghubungkannya dengan routing statis. Topologi berupa komputer, switch, router, dan kabel sudah tersedia. Tugas anda adalah menghubungkan seluruh perangkat agar dapat berkomunikasi dengan baik.</p>\r\n\r\n<p>Dari penjelasan di atas, bagaimanakah langkah penyederhanaan permasalahan yang sesuai dengan penjelasan di atas?</p>', NULL, 'Mengaktifkan DHCP di semua perangkat jaringan untuk mendapatkan IP, menambahkan entri routing statis dan next hop.', 'Mengganti kabel jaringan jika terjadi masalah konektivitas.', 'Menambahkan IP address, entri routing statis, dan next hop.', 'Melakukan ping ke alamat IP tujuang untuk memastikan konektivitas jaringan.', 'Menggambarkan topologi jaringan, menambahkan perangkat, entri routing statis, dan next hop', 'c', NULL, 1, '2024-06-23 12:50:57', '2024-06-23 12:50:57'),
(5, 'Dekomposisi', '<p>Anda adalah seorang administrator jaringan yang bertanggung jawab untuk mengkonfigurasi routing statis pada jaringan lab sekolah. Jaringan lab terdiri dari tiga ruangan (Ruang A, Ruang B, dan Ruang C) yang masing-masing memiliki satu router (R1, R2, dan R3). R1 terhubung ke R2, dan R2 terhubung ke R3. Setiap ruang lab memiliki beberapa komputer yang terhubung ke switch. Anda ingin agar siswa dapat mengakses server yang berada di Ruang A dari Ruang B dan Ruang C. Untuk menyederhanakan tugas ini, Anda membagi tugas menjadi tiga tahapan:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Tahap 1: Konfigurasi R1 untuk meneruskan lalu lintas dari Ruang B dan Ruang C ke server di Ruang A.</p>\r\n	</li>\r\n	<li>\r\n	<p>Tahap 2: Konfigurasi R2 untuk meneruskan lalu lintas dari Ruang C ke Ruang A dan sebaliknya.</p>\r\n	</li>\r\n	<li>\r\n	<p>Tahap 3: Konfigurasi R3 untuk meneruskan lalu lintas ke Ruang A melalui R2.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>Manakah dari opsi berikut yang merupakan contoh langkah penyederhanaan masalah yang tepat untuk tahapan 1?</p>', NULL, 'Mengaktifkan DHCP di R1 agar komputer di Ruang A mendapatkan alamat IP secara otomatis.', 'Mengkonfigurasi DHCP di R1 agar komputer di Ruang B dan Ruang C dapat mengakses internet.', 'Menambahkan rute statis di R1 dengan tujuan jaringan Ruang B dan next hop alamat IP R2.', 'Menambahkan rute statis di R1 dengan tujuan jaringan Ruang C dan next hop alamat IP R3.', 'Menghubungkan semua komputer di Ruang B dan Ruang C langsung ke R1 menggunakan kabel Ethernet.', 'c', NULL, 1, '2024-06-23 12:51:38', '2024-06-23 12:51:38'),
(6, 'Dekomposisi', '<p>Anda adalah seorang administrator jaringan yang bertanggung jawab untuk mengkonfigurasi routing statis pada jaringan lab sekolah. Jaringan lab terdiri dari tiga ruangan (Ruang A, Ruang B, dan Ruang C) yang masing-masing memiliki satu router (R1, R2, dan R3). R1 terhubung ke R2, dan R2 terhubung ke R3. Setiap ruang lab memiliki beberapa komputer yang terhubung ke switch. Anda ingin agar siswa dapat mengakses server yang berada di Ruang A dari Ruang B dan Ruang C. Untuk menyederhanakan tugas ini, Anda membagi tugas menjadi tiga tahapan:</p>\r\n\r\n<ol>\r\n	<li>Tahap 1: Konfigurasi R1 untuk meneruskan lalu lintas dari Ruang B dan Ruang C ke server di Ruang A.</li>\r\n	<li>\r\n	<p>Tahap 2: Konfigurasi R2 untuk meneruskan lalu lintas dari Ruang C ke Ruang A dan sebaliknya.</p>\r\n	</li>\r\n	<li>\r\n	<p>Tahap 3: Konfigurasi R3 untuk meneruskan lalu lintas ke Ruang A melalui R2.</p>\r\n	</li>\r\n</ol>\r\n\r\n<p>Manakah dari opsi berikut yang merupakan contoh langkah penyederhanaan masalah yang tepat untuk tahapan 2?</p>', NULL, 'Mengaktifkan DHCP di R2 agar komputer di Ruang B mendapatkan alamat IP secara otomatis.', 'Mengkonfigurasi DHCP di R2 agar komputer di Ruang C dan Ruang A dapat mengakses internet.', 'Menambahkan rute statis di R2 dengan tujuan jaringan Ruang B dan next hop alamat IP R1.', 'Menambahkan rute statis di R2 dengan tujuan jaringan Ruang A dan next hop alamat IP R2.', 'Menambahkan rute statis di R2 dengan tujuan jaringan Ruang C dan next hop alamat IP R3.', 'e', NULL, 1, '2024-06-23 12:53:27', '2024-06-23 12:56:42'),
(7, 'Abstraksi', '<p>Seorang administrator jaringan sedang mengkonfigurasi routing statis untuk menghubungkan tiga kantor cabang (A, B, dan C). Setiap kantor memiliki router sendiri (Router A, Router B, dan Router C). Manakah dari langkah-langkah berikut yang<strong> BENAR</strong> untuk mengimplementasikan routing statis?</p>', NULL, 'Mengaktifkan DHCP di semua router untuk memastikan setiap perangkat mendapatkan alamat IP.', 'Mengkonfigurasi firewall di setiap router untuk membatasi lalu lintas antar kantor cabang.', 'Mengkonfigurasi rute statis di router Router A yang mengarah ke jaringan di kantor B dan C melalui Router B dan Router C.', 'Mengkonfigurasi rute statis di setiap komputer di kantor A agar dapat mengakses sumber daya di kantor B dan C.', 'Menghubungkan semua router dengan kabel serat optik untuk meningkatkan kecepatan koneksi antar kantor cabang.', 'c', NULL, 1, '2024-06-23 12:54:41', '2024-06-23 12:54:41'),
(8, 'Abstraksi', '<p>Pak Jayadi adalah seorang administrator jaringan di sebuah perusahaan kecil. Perusahaan ini memiliki dua kantor cabang yang terhubung melalui jaringan WAN. Kantor pusat menggunakan jaringan 192.168.1.0/24, sedangkan kantor cabang menggunakan jaringan 192.168.2.0/24. Pak Jayadi ingin memastikan bahwa komputer di kantor pusat dapat berkomunikasi dengan komputer di kantor cabang dan sebaliknya.</p>\r\n\r\n<p>Manakah pilihan di bawah ini yang paling<strong> BENAR</strong> mengenai skenario routing statis yang diterapkan oleh Pak Jayadi?</p>', NULL, 'Routing statis yang dikonfigurasi oleh Pak Jayadi akan secara otomatis memperbarui dirinya sendiri jika terjadi perubahan topologi jaringan.', 'Jika router di kantor cabang mengalami kegagalan, komputer di kantor pusat masih dapat berkomunikasi dengan komputer di kantor cabang.', 'Routing statis adalah pilihan yang ideal untuk jaringan yang sangat besar dan kompleks karena kemudahan pengelolaannya.', 'Konfigurasi routing statis yang dilakukan oleh Pak Jayadi memungkinkan komunikasi dua arah antara kantor pusat dan kantor cabang.', 'Routing statis tidak memerlukan pemahaman tentang alamat IP dan subnet mask karena konfigurasinya sangat sederhana.', 'b', NULL, 1, '2024-06-23 12:56:05', '2024-06-23 12:57:47'),
(9, 'Abstraksi', '<p>Sebuah sekolah memiliki beberapa gedung yang terhubung melalui jaringan komputer. Setiap gedung dilengkapi dengan lab komputer yang memiliki jaringan lokal sendiri. Agar lab komputer di berbagai gedung dapat saling terhubung, sekolah memutuskan untuk menggunakan konsep routing statis.</p>\r\n\r\n<p>Manakah pernyataan berikut yang paling <strong>BENAR</strong> mengenai konsep routing statis dalam konteks skenario di atas?</p>', NULL, 'Routing statis secara otomatis menemukan jalur terbaik antara lab komputer di gedung yang berbeda.', 'Routing statis memerlukan pertukaran informasi routing secara terus-menerus antar gedung.', 'Routing statis memungkinkan administrator jaringan untuk menentukan jalur komunikasi yang spesifik antar gedung.', 'Routing statis tidak dapat digunakan jika ada lebih dari dua gedung yang terhubung dalam jaringan.', 'Routing statis hanya dapat digunakan untuk menghubungkan komputer, tidak dapat digunakan untuk menghubungkan perangkat lain seperti printer atau server.', 'c', NULL, 1, '2024-06-23 13:04:05', '2024-06-23 13:05:25'),
(10, 'Abstraksi', '<p>Seorang administrator jaringan sedang mengkonfigurasi routing statis untuk menghubungkan dua jaringan berbeda dalam sebuah perusahaan. Ia memiliki informasi berikut:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Jaringan 1: Alamat Jaringan: 192.168.1.0/24, Alamat IP Router: 192.168.1.1</p>\r\n	</li>\r\n	<li>\r\n	<p>Jaringan 2: Alamat Jaringan: 192.168.2.0/24, Alamat IP Router: 192.168.2.1</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>Dalam situasi di atas manakah informasi yang paling <strong>PENTING</strong> dan yang <strong>TIDAK PENTING</strong> dalam membangun konfigurasi routing statis.</p>', NULL, 'Penting: Alamat IP router Jaringan 1 dan Jaringan 2, Tidak Penting: Jumlah perangkat yang terhubung ke masing-masing jaringan.', 'Penting: Alamat IP router Jaringan 1 dan Jaringan 2. Tidak Penting: Subnet mask dari masing-masing jaringan.', 'Penting: Subnet mask dari masing-masing jaringan. Tidak Penting: Alamat IP router Jaringan 1 dan Jaringan 2.', 'Penting: Jumlah perangkat yang terhubung ke masing-masing jaringan. Tidak Penting: Alamat IP router Jaringan 1 dan Jaringan 2.', 'Penting: IP Network dari masing-masing jaringan. Tidak Penting: Subnet mask dari masing-masing jaringan.', 'a', NULL, 1, '2024-06-23 13:05:16', '2024-06-23 13:05:16'),
(11, 'Abstraksi', '<p>Seorang administrator jaringan baru saja menyelesaikan konfigurasi routing statis pada sebuah router. Berikut adalah cuplikan dari konfigurasi yang telah dibuat:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>ip route 192.168.10.0 255.255.255.0 172.16.0.2</p>\r\n	</li>\r\n	<li>\r\n	<p>ip route 192.168.20.0 255.255.255.0 172.16.0.5</p>\r\n	</li>\r\n	<li>\r\n	<p>ip route 0.0.0.0 0.0.0.0 172.16.0.1</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>Manakah pernyataan berikut yang paling <strong>BENAR</strong> mengenai konfigurasi routing statis di atas?</p>', NULL, 'Router hanya dapat berkomunikasi dengan jaringan 192.168.10.0/24 dan 192.168.20.0/24.', 'Router akan mengirimkan semua paket yang tidak diketahui tujuannya ke alamat 172.16.0.1', 'Router menggunakan alamat 172.16.0.2 dan 172.16.0.5 sebagai gateway untuk mencapai jaringan lain.', 'Router akan mengirimkan semua paket yang tidak diketahui tujuannya ke alamat 0.0.0.0', 'Router menggunakan alamat 192.168.10.0 dan 192.168.20.0 sebagai gateway untuk mencapai jaringan lain.', 'b', NULL, 1, '2024-06-23 13:06:21', '2024-06-23 13:06:21'),
(12, 'Abstraksi', '<p>Anda adalah seorang administrator jaringan di sebuah perusahaan kecil yang memiliki dua router (R1 dan R2) dan dua jaringan lokal (LAN A dan LAN B).</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>LAN A: Network: 192.168.1.0/24 Router Interface: 192.168.1.1</p>\r\n	</li>\r\n	<li>\r\n	<p>LAN B: Network: 192.168.2.0/24 Router Interface: 192.168.2.1</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>R1 dan R2 terhubung langsung. Anda ingin memastikan bahwa perangkat di LAN A dapat berkomunikasi dengan perangkat di LAN B, dan sebaliknya.</p>\r\n\r\n<p>Manakah dari konfigurasi routing statis berikut yang paling BENAR untuk mencapai tujuan tersebut?</p>', NULL, 'Di R1: ip route 192.168.1.0 255.255.255.0 192.168.1.1, R2: ip route 192.168.2.0 255.255.255.0 192.168.2.1', 'Di R1: ip route 192.168.2.0 255.255.255.0 192.168.2.1, R2: ip route 192.168.1.0 255.255.255.0 192.168.1.1', 'Di R2: ip route 192.168.2.0 255.255.255.0 192.168.2.1', 'Di R1: ip route 192.168.1.0 255.255.255.0 192.168.2.1, R2: ip route 192.168.2.0 255.255.255.0 192.168.1.1', 'Di R1: ip route 192.168.2.0 255.255.255.0 192.168.1.1, R2: ip route 192.168.1.0 255.255.255.0 192.168.2.1', 'b', NULL, 1, '2024-06-23 13:07:25', '2024-06-23 13:07:25'),
(13, 'Pengenalan Pola', '<ul>\r\n	<li>\r\n	<p>1. Sebuah perusahaan memiliki dua kantor cabang (Cabang A dan Cabang B) yang terhubung melalui jaringan WAN. Setiap cabang memiliki router (Router A dan Router B) dan jaringan lokalnya sendiri (192.168.1.0/24 untuk Cabang A dan 192.168.2.0/24 untuk Cabang B). Administrator jaringan ingin agar komputer di Cabang A dapat mengakses server file di Cabang B.</p>\r\n	</li>\r\n	<li>\r\n	<p>2. Sebuah sekolah memiliki dua gedung (Gedung Utara dan Gedung Selatan) yang terhubung melalui jaringan. Setiap gedung memiliki router (Router Utara dan Router Selatan) dan jaringan lokalnya sendiri (172.16.1.0/24 untuk Gedung Utara dan 172.16.2.0/24 untuk Gedung Selatan). Administrator jaringan ingin agar siswa di Gedung Utara dapat mengakses server perpustakaan di Gedung Selatan.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>Apakah kedua permasalahan tersebut memiliki pola penyelesaian yang sama?</p>', NULL, 'Tidak, karena alamat IP tujuan dan next hop berbeda pada kedua kasus.', 'Ya, karena keduanya melibatkan konfigurasi rute statis pada router yang sama.', 'Tidak, karena topologi jaringan pada kedua kasus berbeda.', 'Ya, karena keduanya bertujuan untuk memungkinkan akses ke sumber daya di jaringan lain.', 'Ya, karena keduanya menggunakan routing statis untuk menghubungkan dua jaringan yang berbeda.', 'e', NULL, 1, '2024-06-23 13:08:56', '2024-06-23 13:08:56'),
(14, 'Pengenalan Pola', '<p>Sebuah kantor memiliki beberapa departemen yang terletak di lantai yang berbeda. Setiap departemen memiliki jaringan lokal sendiri dan terhubung ke jaringan utama melalui switch di setiap lantai. Untuk memastikan karyawan di setiap departemen dapat berkomunikasi dengan departemen lain, administrator jaringan memutuskan untuk menggunakan konsep routing statis.</p>\r\n\r\n<p>Administrator mengamati pola berikut:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>1. Jika karyawan di departemen A ingin mengirim email ke karyawan di departemen B, email tersebut harus melewati switch di lantai 1.</p>\r\n	</li>\r\n	<li>\r\n	<p>2. Jika karyawan di departemen B ingin mengakses file di server departemen C, file tersebut harus melewati switch di lantai 2.</p>\r\n	</li>\r\n	<li>\r\n	<p>3. Jika karyawan di departemen C ingin mencetak dokumen di printer departemen A, dokumen tersebut harus melewati switch di lantai 1 dan lantai 3.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>Berdasarkan pola ini, administrator jaringan dapat menyimpulkan bahwa:</p>', NULL, 'Setiap departemen harus memiliki koneksi langsung ke semua departemen lain.', 'Switch di setiap lantai berperan sebagai perantara untuk meneruskan lalu lintas antar departemen.', 'Komunikasi antar departemen hanya dapat dilakukan melalui switch di lantai 1.', 'Server departemen C harus dipindahkan ke lantai 1 agar dapat diakses oleh semua departemen.', 'Printer departemen A harus dipindahkan ke lantai 2 agar dapat diakses oleh departemen B.', 'b', NULL, 1, '2024-06-23 13:10:09', '2024-06-23 13:10:09'),
(15, 'Pengenalan Pola', '<p>Perhatikan tabel routing pada dua router berbeda di bawah ini:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Router A: Tujuan 192.168.1.0/24 dengan next hop 192.168.100.2 dan interface eth0/0, Tujuan 192.168.2.0/24 dengan next hop 192.168.100.5 dan interface eth0/1, dan routing terakhir dengan Tujuan 0.0.0.0/0 dengan next hop 192.168.100.1 dan interface eth0/2.</p>\r\n	</li>\r\n	<li>\r\n	<p>Router B: Tujuan 192.168.3.0/24 dengan next hop 192.168.100.6 dan interface eth0/0, Tujuan 192.168.4.0/24 dengan next hop 192.168.100.2 dan interface eth0/1, dan routing terakhir dengan Tujuan 0.0.0.0/0 dengan next hop 192.168.100.1 dan interface eth0/2.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>Berdasarkan pola yang terlihat dalam tabel routing, manakah pernyataan berikut yang paling mungkin benar?</p>', NULL, 'Router A dan Router B terhubung langsung ke jaringan 192.168.1.0/24 dan 192.168.3.0/24.', 'Router A dan Router B menggunakan protokol routing dinamis untuk mempelajari rute.', 'Router A dan Router B menggunakan alamat IP 192.168.100.1 sebagai gateway default.', 'Router A dan Router B tidak dapat berkomunikasi satu sama lain.', 'Router A dan Router B terhubung ke jaringan yang sama, yaitu 192.168.100.0/24.', 'c', NULL, 1, '2024-06-23 13:11:21', '2024-06-23 13:11:21'),
(16, 'Pengenalan Pola', '<p>Seorang administrator jaringan sedang mengkonfigurasi routing statis untuk beberapa router dalam jaringan perusahaan. Ia menemukan pola berikut dalam konfigurasi router:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Router 1: ip route 172.16.1.0 255.255.255.0 192.168.10.2 &amp; ip route 172.16.2.0 255.255.255.0 192.168.10.5</p>\r\n	</li>\r\n	<li>\r\n	<p>Router 2: ip route 172.16.3.0 255.255.255.0 192.168.10.2 &amp; ip route 172.16.4.0 255.255.255.0 192.168.10.5</p>\r\n	</li>\r\n	<li>\r\n	<p>Router 3: ip route 172.16.5.0 255.255.255.0 192.168.10.2 &amp; ip route 172.16.6.0 255.255.255.0 192.168.10.5</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>Berdasarkan pola yang terlihat dalam konfigurasi tersebut, kesimpulan manakah yang paling mungkin benar?</p>', NULL, 'Router 1, 2, dan 3 menggunakan 172.16.0.0/16 sebagai next hop untuk mencapai jaringan 192.168.10.0.', 'Router 1, 2, dan 3 menggunakan 192.168.10.2 dan 192.168.10.5 sebagai next hop untuk mencapai jaringan 172.16.0.0/16.', 'Router 1, 2, dan 3 terhubung langsung ke jaringan 172.16.0.0/16.', 'Router 1, 2, dan 3 tidak dapat berkomunikasi satu sama lain.', 'Router 1, 2, dan 3 memiliki gateway default yang sama.', 'b', NULL, 1, '2024-06-23 13:12:06', '2024-06-23 13:12:06'),
(17, 'Algoritma', '<p>Sebuah perusahaan logistik memiliki beberapa gudang yang tersebar di berbagai kota. Setiap gudang memiliki kendaraan pengiriman sendiri dan bertanggung jawab untuk mengirimkan paket ke wilayah tertentu. Manajer logistik ingin merancang sistem routing yang efisien untuk memastikan paket dikirimkan ke alamat yang benar dengan rute terpendek.</p>\r\n\r\n<p>Manajer logistik mengamati pola berikut:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Paket yang ditujukan ke alamat di wilayah utara harus dikirim dari gudang A.</p>\r\n	</li>\r\n	<li>\r\n	<p>Paket yang ditujukan ke alamat di wilayah selatan harus dikirim dari gudang B.</p>\r\n	</li>\r\n	<li>\r\n	<p>Paket yang ditujukan ke alamat di wilayah timur harus dikirim dari gudang C.</p>\r\n	</li>\r\n	<li>\r\n	<p>Paket yang ditujukan ke alamat di wilayah barat harus dikirim dari gudang D.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>Berdasarkan pola ini, manajer logistik ingin merancang algoritma sederhana untuk menentukan gudang mana yang harus mengirimkan paket berdasarkan alamat tujuan.</p>\r\n\r\n<p><strong>Pertanyaan:</strong></p>\r\n\r\n<ol>\r\n	<li>\r\n	<p>Jika alamat tujuan berada di wilayah selatan, pilih gudang B.</p>\r\n	</li>\r\n	<li>\r\n	<p>Jika alamat tujuan berada di wilayah utara, pilih gudang A.</p>\r\n	</li>\r\n	<li>\r\n	<p>Jika alamat tujuan berada di wilayah timur, pilih gudang C.</p>\r\n	</li>\r\n	<li>\r\n	<p>Jika alamat tujuan berada di wilayah barat, pilih gudang D.</p>\r\n	</li>\r\n	<li>\r\n	<p>Jika alamat tujuan tidak berada di wilayah manapun, kembalikan pesan error.</p>\r\n	</li>\r\n</ol>\r\n\r\n<p>Urutkan langkah-langkah di atas untuk merancang algoritma yang sesuai dengan konsep routing statis:</p>', NULL, '1, 3, 4, 2, 5', '2, 1, 3, 4, 5', '3, 1, 4, 2, 5', '2, 1, 4, 3, 5', '2, 3, 4, 1, 5', 'b', NULL, 1, '2024-06-23 13:13:07', '2024-06-23 13:13:07'),
(18, 'Algoritma', '<p>Sebuah perpustakaan memiliki sistem peminjaman buku yang sederhana. Setiap buku memiliki kode rak yang menunjukkan lokasi buku tersebut di perpustakaan. Petugas perpustakaan ingin membuat algoritma untuk membantu pengunjung menemukan buku dengan cepat.</p>\r\n\r\n<p>Petugas perpustakaan mengamati pola berikut:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Buku-buku dengan kode rak dimulai dengan huruf A terletak di rak bagian depan.</p>\r\n	</li>\r\n	<li>\r\n	<p>Buku-buku dengan kode rak dimulai dengan huruf B terletak di rak bagian tengah.</p>\r\n	</li>\r\n	<li>\r\n	<p>Buku-buku dengan kode rak dimulai dengan huruf C terletak di rak bagian belakang.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>Berdasarkan pola ini, petugas perpustakaan ingin merancang algoritma untuk mengarahkan pengunjung ke rak yang benar berdasarkan kode rak buku yang dicari.</p>\r\n\r\n<p><strong>Pertanyaan</strong>:</p>\r\n\r\n<ol>\r\n	<li>\r\n	<p>Jika kode rak dimulai dengan huruf C, arahkan pengunjung ke rak bagian belakang.</p>\r\n	</li>\r\n	<li>\r\n	<p>Jika kode rak dimulai dengan huruf B, arahkan pengunjung ke rak bagian tengah.</p>\r\n	</li>\r\n	<li>\r\n	<p>Jika kode rak dimulai dengan huruf A, arahkan pengunjung ke rak bagian depan.</p>\r\n	</li>\r\n	<li>\r\n	<p>Jika kode rak tidak dimulai dengan huruf A, B, atau C, berikan pesan bahwa buku tidak ditemukan.</p>\r\n	</li>\r\n</ol>\r\n\r\n<p>Urutkan langkah-langkah di atas untuk membentuk algoritma yang sesuai dengan konsep routing statis:</p>', NULL, '3, 1, 2, 4', '1, 2, 3, 4', '1, 3, 2, 4', '2, 3, 1, 4', '3, 2, 1, 4', 'e', NULL, 1, '2024-06-23 13:14:24', '2024-06-23 13:14:24'),
(19, 'Algoritma', '<p>Anda adalah seorang administrator jaringan yang bertanggung jawab untuk mengkonfigurasi routing statis pada router R1 untuk menghubungkan jaringan lokal (LAN) dengan jaringan WAN.</p>\r\n\r\n<p>Berikut adalah informasi yang Anda miliki:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>LAN: Network: 192.168.1.0/24 dan router Interface: 192.168.1.1</p>\r\n	</li>\r\n	<li>\r\n	<p>WAN: Gateway: 10.0.0.1</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>Anda perlu mengkonfigurasi router R1 agar perangkat di LAN dapat mengakses internet melalui WAN.</p>\r\n\r\n<p><strong>Pertanyaan: </strong></p>\r\n\r\n<ol>\r\n	<li>\r\n	<p>Verifikasi konfigurasi dengan melakukan ping ke alamat IP publik di internet.</p>\r\n	</li>\r\n	<li>\r\n	<p>Masuk ke mode konfigurasi global dengan perintah configure terminal.</p>\r\n	</li>\r\n	<li>\r\n	<p>Tambahkan rute statis default dengan perintah ip route 0.0.0.0 0.0.0.0 10.0.0.1.</p>\r\n	</li>\r\n	<li>\r\n	<p>Masuk ke mode privileged EXEC dengan perintah enable.</p>\r\n	</li>\r\n</ol>\r\n\r\n<p>Urutkan langkah-langkah berikut di atas dengan benar untuk mengkonfigurasi routing statis pada router R1:</p>', NULL, '3, 2, 4, 1', '4, 2, 1, 3', '3, 2, 4, 1', '3, 2, 1, 1', '4, 2, 3, 1', 'e', NULL, 1, '2024-06-23 13:15:17', '2024-06-23 13:15:17'),
(20, 'Algoritma', '<p>Sebuah perusahaan memiliki tiga kantor cabang (A, B, dan C) yang terhubung melalui jaringan WAN. Setiap kantor cabang memiliki router (RA, RB, dan RC) dengan konfigurasi sebagai berikut:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Kantor A (RA): Jaringan LAN: 192.168.1.0/24 Alamat IP Router: 192.168.1.1 Alamat IP WAN: 10.0.0.1/30</p>\r\n	</li>\r\n	<li>\r\n	<p>Kantor B (RB): Jaringan LAN: 192.168.2.0/24 Alamat IP Router: 192.168.2.1 Alamat IP WAN: 10.0.0.2/30</p>\r\n	</li>\r\n	<li>\r\n	<p>Kantor C (RC): Jaringan LAN: 192.168.3.0/24 Alamat IP Router: 192.168.3.1 Alamat IP WAN: 10.0.0.5/30 (terhubung ke internet)</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>Untuk memastikan semua kantor cabang dapat saling berkomunikasi dan mengakses internet, administrator jaringan perlu mengkonfigurasi routing statis pada setiap router. Manakah dari pernyataan berikut yang benar mengenai urutan konfigurasi yang paling efisien?</p>', NULL, 'Konfigurasi R1 terlebih dahulu, lalu R2, dan terakhir R3.', 'Konfigurasi R3 terlebih dahulu, lalu R2, dan terakhir R1.', 'Konfigurasi R2 terlebih dahulu, lalu R1 dan R3 secara bersamaan.', 'Urutan konfigurasi tidak penting, yang penting semua router terkonfigurasi dengan benar.', 'Konfigurasi router yang terhubung ke internet (R3) harus dilakukan terakhir.', 'c', NULL, 1, '2024-06-23 13:16:05', '2024-06-23 13:16:05'),
(21, 'Dekomposisi', '<p>Mas Tejo ingin membangun sebuah jaringan di warnetnya ia menggunakan konfigurasi routing statis untuk menghubungkan komputer-komputer di ruangan A dan komputer-komputer di ruangan B ke komputer master yang berada di ruangan C. Setiap ruangan memiliki masing-masing router dan switch, di ruangan A dan B terdapat 20 komputer, sedangkan di ruangan C terdiri dari 1 komputer.</p>\r\n\r\n<p>Bagaimana strategi penyederhanaan pengerjaan tugas-tugas yang harus dilakukan untuk membangun sebuah jaringan berdasarkan penjelasan di atas?</p>', NULL, 'Menyiapkan 3 buah router, 3 buah switch, 40 komputer, menghubungkan tiap komputer ke switch, menghubungkan switch ke router, menghubungkan router ke router lain', 'Menyiapkan 3 buah router, 3 buah switch, 41 komputer, menghubungkan tiap komputer ke switch, menghubungkan switch ke router, menghubungkan router ke router lain', 'Menyiapkan 3 buah router, 3 buah switch, 41 komputer, menghubungkan tiap komputer ke router, menghubungkan switch ke komputer, menghubungkan router ke router lain', 'Menyiapkan 3 buah router, 3 buah switch, 40 komputer, menghubungkan tiap komputer ke router, menghubungkan switch ke komputer, menghubungkan router ke router lain', 'Menyiapkan 3 buah router, 3 buah switch, 41 komputer, menghubungkan tiap komputer ke router, menghubungkan switch ke router, menghubungkan router ke router lain', 'b', NULL, 2, '2024-06-23 05:25:22', '2024-06-23 05:43:10'),
(22, 'Dekomposisi', '<p>Sebuah perusahaan memiliki beberapa departemen yang tersebar di gedung yang berbeda. Setiap departemen memiliki jaringan lokal sendiri dan terhubung ke jaringan utama perusahaan. Administrator jaringan ingin memastikan bahwa setiap departemen dapat berkomunikasi dengan departemen lain, namun ingin menghindari penggunaan protokol routing dinamis yang kompleks. Oleh karena itu, ia memutuskan untuk menggunakan routing statis.</p>\r\n\r\n<p>Untuk menyederhanakan proses konfigurasi routing statis, administrator jaringan dapat memecah masalah menjadi beberapa langkah yang lebih kecil. Manakah dari opsi berikut yang merupakan langkah dekomposisi yang tepat?</p>', NULL, 'Mengidentifikasi semua departemen yang perlu berkomunikasi satu sama lain.', 'Menggambarkan topologi jaringan dan menentukan jalur komunikasi antar departemen.', 'Mengkonfigurasi rute statis di setiap router untuk mengarahkan lalu lintas ke departemen yang sesuai.', 'Memastikan setiap departemen memiliki alamat jaringan yang unik.', 'Semua jawaban di atas benar.', 'e', NULL, 2, '2024-06-23 05:49:28', '2024-06-23 05:49:28'),
(23, 'Dekomposisi', '<p>Pak Toha memiliki rumah tiga lantai dengan berbagai ruangan, seperti ruang tamu, kamar tidur, dapur, dan ruang kerja. Ia ingin memasang jaringan internet di seluruh rumah agar semua perangkat dapat terhubung ke internet. Untuk menyederhanakan pemasangan jaringan, Pak Toha memutuskan untuk menggunakan konsep routing statis. Namun, ia merasa kesulitan karena banyaknya ruangan dan perangkat yang harus dihubungkan.</p>\r\n\r\n<p>Manakah dari opsi berikut yang merupakan langkah dekomposisi yang tepat untuk menyederhanakan masalah pemasangan jaringan Pak Toha?</p>', NULL, 'Membeli router yang lebih canggih dengan fitur routing dinamis.', 'Mengelompokkan ruangan berdasarkan lantai dan menentukan jalur kabel yang optimal untuk setiap kelompok.', 'Menghubungkan semua perangkat ke satu router utama tanpa mempertimbangkan lokasi ruangan.', 'Memasang access point di setiap ruangan untuk memperkuat sinyal Wi-Fi.', 'Meminta bantuan teknisi profesional untuk memasang jaringan.', 'b', NULL, 2, '2024-06-23 05:50:10', '2024-06-23 05:50:10'),
(24, 'Dekomposisi', '<p>Anda diberikan tugas oleh guru anda untuk mengonfigurasi sebuah topologi dengan menghubungkannya dengan routing statis. Topologi berupa komputer, switch, router, dan kabel sudah tersedia. Tugas anda adalah menghubungkan seluruh perangkat agar dapat berkomunikasi dengan baik.</p>\r\n\r\n<p>Dari penjelasan di atas, bagaimanakah langkah penyederhanaan permasalahan yang sesuai dengan penjelasan di atas?</p>', NULL, 'Mengaktifkan DHCP di semua perangkat jaringan untuk mendapatkan IP, menambahkan entri routing statis dan next hop.', 'Mengganti kabel jaringan jika terjadi masalah konektivitas.', 'Menambahkan IP address, entri routing statis, dan next hop.', 'Melakukan ping ke alamat IP tujuang untuk memastikan konektivitas jaringan.', 'Menggambarkan topologi jaringan, menambahkan perangkat, entri routing statis, dan next hop', 'c', NULL, 2, '2024-06-23 05:50:57', '2024-06-23 05:50:57'),
(25, 'Dekomposisi', '<p>Anda adalah seorang administrator jaringan yang bertanggung jawab untuk mengkonfigurasi routing statis pada jaringan lab sekolah. Jaringan lab terdiri dari tiga ruangan (Ruang A, Ruang B, dan Ruang C) yang masing-masing memiliki satu router (R1, R2, dan R3). R1 terhubung ke R2, dan R2 terhubung ke R3. Setiap ruang lab memiliki beberapa komputer yang terhubung ke switch. Anda ingin agar siswa dapat mengakses server yang berada di Ruang A dari Ruang B dan Ruang C. Untuk menyederhanakan tugas ini, Anda membagi tugas menjadi tiga tahapan:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Tahap 1: Konfigurasi R1 untuk meneruskan lalu lintas dari Ruang B dan Ruang C ke server di Ruang A.</p>\r\n	</li>\r\n	<li>\r\n	<p>Tahap 2: Konfigurasi R2 untuk meneruskan lalu lintas dari Ruang C ke Ruang A dan sebaliknya.</p>\r\n	</li>\r\n	<li>\r\n	<p>Tahap 3: Konfigurasi R3 untuk meneruskan lalu lintas ke Ruang A melalui R2.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>Manakah dari opsi berikut yang merupakan contoh langkah penyederhanaan masalah yang tepat untuk tahapan 1?</p>', NULL, 'Mengaktifkan DHCP di R1 agar komputer di Ruang A mendapatkan alamat IP secara otomatis.', 'Mengkonfigurasi DHCP di R1 agar komputer di Ruang B dan Ruang C dapat mengakses internet.', 'Menambahkan rute statis di R1 dengan tujuan jaringan Ruang B dan next hop alamat IP R2.', 'Menambahkan rute statis di R1 dengan tujuan jaringan Ruang C dan next hop alamat IP R3.', 'Menghubungkan semua komputer di Ruang B dan Ruang C langsung ke R1 menggunakan kabel Ethernet.', 'c', NULL, 2, '2024-06-23 05:51:38', '2024-06-23 05:51:38'),
(26, 'Dekomposisi', '<p>Anda adalah seorang administrator jaringan yang bertanggung jawab untuk mengkonfigurasi routing statis pada jaringan lab sekolah. Jaringan lab terdiri dari tiga ruangan (Ruang A, Ruang B, dan Ruang C) yang masing-masing memiliki satu router (R1, R2, dan R3). R1 terhubung ke R2, dan R2 terhubung ke R3. Setiap ruang lab memiliki beberapa komputer yang terhubung ke switch. Anda ingin agar siswa dapat mengakses server yang berada di Ruang A dari Ruang B dan Ruang C. Untuk menyederhanakan tugas ini, Anda membagi tugas menjadi tiga tahapan:</p>\r\n\r\n<ol>\r\n	<li>Tahap 1: Konfigurasi R1 untuk meneruskan lalu lintas dari Ruang B dan Ruang C ke server di Ruang A.</li>\r\n	<li>\r\n	<p>Tahap 2: Konfigurasi R2 untuk meneruskan lalu lintas dari Ruang C ke Ruang A dan sebaliknya.</p>\r\n	</li>\r\n	<li>\r\n	<p>Tahap 3: Konfigurasi R3 untuk meneruskan lalu lintas ke Ruang A melalui R2.</p>\r\n	</li>\r\n</ol>\r\n\r\n<p>Manakah dari opsi berikut yang merupakan contoh langkah penyederhanaan masalah yang tepat untuk tahapan 2?</p>', NULL, 'Mengaktifkan DHCP di R2 agar komputer di Ruang B mendapatkan alamat IP secara otomatis.', 'Mengkonfigurasi DHCP di R2 agar komputer di Ruang C dan Ruang A dapat mengakses internet.', 'Menambahkan rute statis di R2 dengan tujuan jaringan Ruang B dan next hop alamat IP R1.', 'Menambahkan rute statis di R2 dengan tujuan jaringan Ruang A dan next hop alamat IP R2.', 'Menambahkan rute statis di R2 dengan tujuan jaringan Ruang C dan next hop alamat IP R3.', 'e', NULL, 2, '2024-06-23 05:53:27', '2024-06-23 05:56:42'),
(27, 'Abstraksi', '<p>Seorang administrator jaringan sedang mengkonfigurasi routing statis untuk menghubungkan tiga kantor cabang (A, B, dan C). Setiap kantor memiliki router sendiri (Router A, Router B, dan Router C). Manakah dari langkah-langkah berikut yang<strong> BENAR</strong> untuk mengimplementasikan routing statis?</p>', NULL, 'Mengaktifkan DHCP di semua router untuk memastikan setiap perangkat mendapatkan alamat IP.', 'Mengkonfigurasi firewall di setiap router untuk membatasi lalu lintas antar kantor cabang.', 'Mengkonfigurasi rute statis di router Router A yang mengarah ke jaringan di kantor B dan C melalui Router B dan Router C.', 'Mengkonfigurasi rute statis di setiap komputer di kantor A agar dapat mengakses sumber daya di kantor B dan C.', 'Menghubungkan semua router dengan kabel serat optik untuk meningkatkan kecepatan koneksi antar kantor cabang.', 'c', NULL, 2, '2024-06-23 05:54:41', '2024-06-23 05:54:41'),
(28, 'Abstraksi', '<p>Pak Jayadi adalah seorang administrator jaringan di sebuah perusahaan kecil. Perusahaan ini memiliki dua kantor cabang yang terhubung melalui jaringan WAN. Kantor pusat menggunakan jaringan 192.168.1.0/24, sedangkan kantor cabang menggunakan jaringan 192.168.2.0/24. Pak Jayadi ingin memastikan bahwa komputer di kantor pusat dapat berkomunikasi dengan komputer di kantor cabang dan sebaliknya.</p>\r\n\r\n<p>Manakah pilihan di bawah ini yang paling<strong> BENAR</strong> mengenai skenario routing statis yang diterapkan oleh Pak Jayadi?</p>', NULL, 'Routing statis yang dikonfigurasi oleh Pak Jayadi akan secara otomatis memperbarui dirinya sendiri jika terjadi perubahan topologi jaringan.', 'Jika router di kantor cabang mengalami kegagalan, komputer di kantor pusat masih dapat berkomunikasi dengan komputer di kantor cabang.', 'Routing statis adalah pilihan yang ideal untuk jaringan yang sangat besar dan kompleks karena kemudahan pengelolaannya.', 'Konfigurasi routing statis yang dilakukan oleh Pak Jayadi memungkinkan komunikasi dua arah antara kantor pusat dan kantor cabang.', 'Routing statis tidak memerlukan pemahaman tentang alamat IP dan subnet mask karena konfigurasinya sangat sederhana.', 'b', NULL, 2, '2024-06-23 05:56:05', '2024-06-23 05:57:47'),
(29, 'Abstraksi', '<p>Sebuah sekolah memiliki beberapa gedung yang terhubung melalui jaringan komputer. Setiap gedung dilengkapi dengan lab komputer yang memiliki jaringan lokal sendiri. Agar lab komputer di berbagai gedung dapat saling terhubung, sekolah memutuskan untuk menggunakan konsep routing statis.</p>\r\n\r\n<p>Manakah pernyataan berikut yang paling <strong>BENAR</strong> mengenai konsep routing statis dalam konteks skenario di atas?</p>', NULL, 'Routing statis secara otomatis menemukan jalur terbaik antara lab komputer di gedung yang berbeda.', 'Routing statis memerlukan pertukaran informasi routing secara terus-menerus antar gedung.', 'Routing statis memungkinkan administrator jaringan untuk menentukan jalur komunikasi yang spesifik antar gedung.', 'Routing statis tidak dapat digunakan jika ada lebih dari dua gedung yang terhubung dalam jaringan.', 'Routing statis hanya dapat digunakan untuk menghubungkan komputer, tidak dapat digunakan untuk menghubungkan perangkat lain seperti printer atau server.', 'c', NULL, 2, '2024-06-23 06:04:05', '2024-06-23 06:05:25'),
(30, 'Abstraksi', '<p>Seorang administrator jaringan sedang mengkonfigurasi routing statis untuk menghubungkan dua jaringan berbeda dalam sebuah perusahaan. Ia memiliki informasi berikut:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Jaringan 1: Alamat Jaringan: 192.168.1.0/24, Alamat IP Router: 192.168.1.1</p>\r\n	</li>\r\n	<li>\r\n	<p>Jaringan 2: Alamat Jaringan: 192.168.2.0/24, Alamat IP Router: 192.168.2.1</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>Dalam situasi di atas manakah informasi yang paling <strong>PENTING</strong> dan yang <strong>TIDAK PENTING</strong> dalam membangun konfigurasi routing statis.</p>', NULL, 'Penting: Alamat IP router Jaringan 1 dan Jaringan 2, Tidak Penting: Jumlah perangkat yang terhubung ke masing-masing jaringan.', 'Penting: Alamat IP router Jaringan 1 dan Jaringan 2. Tidak Penting: Subnet mask dari masing-masing jaringan.', 'Penting: Subnet mask dari masing-masing jaringan. Tidak Penting: Alamat IP router Jaringan 1 dan Jaringan 2.', 'Penting: Jumlah perangkat yang terhubung ke masing-masing jaringan. Tidak Penting: Alamat IP router Jaringan 1 dan Jaringan 2.', 'Penting: IP Network dari masing-masing jaringan. Tidak Penting: Subnet mask dari masing-masing jaringan.', 'a', NULL, 2, '2024-06-23 06:05:16', '2024-06-23 06:05:16'),
(31, 'Abstraksi', '<p>Seorang administrator jaringan baru saja menyelesaikan konfigurasi routing statis pada sebuah router. Berikut adalah cuplikan dari konfigurasi yang telah dibuat:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>ip route 192.168.10.0 255.255.255.0 172.16.0.2</p>\r\n	</li>\r\n	<li>\r\n	<p>ip route 192.168.20.0 255.255.255.0 172.16.0.5</p>\r\n	</li>\r\n	<li>\r\n	<p>ip route 0.0.0.0 0.0.0.0 172.16.0.1</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>Manakah pernyataan berikut yang paling <strong>BENAR</strong> mengenai konfigurasi routing statis di atas?</p>', NULL, 'Router hanya dapat berkomunikasi dengan jaringan 192.168.10.0/24 dan 192.168.20.0/24.', 'Router akan mengirimkan semua paket yang tidak diketahui tujuannya ke alamat 172.16.0.1', 'Router menggunakan alamat 172.16.0.2 dan 172.16.0.5 sebagai gateway untuk mencapai jaringan lain.', 'Router akan mengirimkan semua paket yang tidak diketahui tujuannya ke alamat 0.0.0.0', 'Router menggunakan alamat 192.168.10.0 dan 192.168.20.0 sebagai gateway untuk mencapai jaringan lain.', 'b', NULL, 2, '2024-06-23 06:06:21', '2024-06-23 06:06:21'),
(32, 'Abstraksi', '<p>Anda adalah seorang administrator jaringan di sebuah perusahaan kecil yang memiliki dua router (R1 dan R2) dan dua jaringan lokal (LAN A dan LAN B).</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>LAN A: Network: 192.168.1.0/24 Router Interface: 192.168.1.1</p>\r\n	</li>\r\n	<li>\r\n	<p>LAN B: Network: 192.168.2.0/24 Router Interface: 192.168.2.1</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>R1 dan R2 terhubung langsung. Anda ingin memastikan bahwa perangkat di LAN A dapat berkomunikasi dengan perangkat di LAN B, dan sebaliknya.</p>\r\n\r\n<p>Manakah dari konfigurasi routing statis berikut yang paling BENAR untuk mencapai tujuan tersebut?</p>', NULL, 'Di R1: ip route 192.168.1.0 255.255.255.0 192.168.1.1, R2: ip route 192.168.2.0 255.255.255.0 192.168.2.1', 'Di R1: ip route 192.168.2.0 255.255.255.0 192.168.2.1, R2: ip route 192.168.1.0 255.255.255.0 192.168.1.1', 'Di R2: ip route 192.168.2.0 255.255.255.0 192.168.2.1', 'Di R1: ip route 192.168.1.0 255.255.255.0 192.168.2.1, R2: ip route 192.168.2.0 255.255.255.0 192.168.1.1', 'Di R1: ip route 192.168.2.0 255.255.255.0 192.168.1.1, R2: ip route 192.168.1.0 255.255.255.0 192.168.2.1', 'b', NULL, 2, '2024-06-23 06:07:25', '2024-06-23 06:07:25'),
(33, 'Pengenalan Pola', '<ul>\r\n	<li>\r\n	<p>1. Sebuah perusahaan memiliki dua kantor cabang (Cabang A dan Cabang B) yang terhubung melalui jaringan WAN. Setiap cabang memiliki router (Router A dan Router B) dan jaringan lokalnya sendiri (192.168.1.0/24 untuk Cabang A dan 192.168.2.0/24 untuk Cabang B). Administrator jaringan ingin agar komputer di Cabang A dapat mengakses server file di Cabang B.</p>\r\n	</li>\r\n	<li>\r\n	<p>2. Sebuah sekolah memiliki dua gedung (Gedung Utara dan Gedung Selatan) yang terhubung melalui jaringan. Setiap gedung memiliki router (Router Utara dan Router Selatan) dan jaringan lokalnya sendiri (172.16.1.0/24 untuk Gedung Utara dan 172.16.2.0/24 untuk Gedung Selatan). Administrator jaringan ingin agar siswa di Gedung Utara dapat mengakses server perpustakaan di Gedung Selatan.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>Apakah kedua permasalahan tersebut memiliki pola penyelesaian yang sama?</p>', NULL, 'Tidak, karena alamat IP tujuan dan next hop berbeda pada kedua kasus.', 'Ya, karena keduanya melibatkan konfigurasi rute statis pada router yang sama.', 'Tidak, karena topologi jaringan pada kedua kasus berbeda.', 'Ya, karena keduanya bertujuan untuk memungkinkan akses ke sumber daya di jaringan lain.', 'Ya, karena keduanya menggunakan routing statis untuk menghubungkan dua jaringan yang berbeda.', 'e', NULL, 2, '2024-06-23 06:08:56', '2024-06-23 06:08:56'),
(34, 'Pengenalan Pola', '<p>Sebuah kantor memiliki beberapa departemen yang terletak di lantai yang berbeda. Setiap departemen memiliki jaringan lokal sendiri dan terhubung ke jaringan utama melalui switch di setiap lantai. Untuk memastikan karyawan di setiap departemen dapat berkomunikasi dengan departemen lain, administrator jaringan memutuskan untuk menggunakan konsep routing statis.</p>\r\n\r\n<p>Administrator mengamati pola berikut:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>1. Jika karyawan di departemen A ingin mengirim email ke karyawan di departemen B, email tersebut harus melewati switch di lantai 1.</p>\r\n	</li>\r\n	<li>\r\n	<p>2. Jika karyawan di departemen B ingin mengakses file di server departemen C, file tersebut harus melewati switch di lantai 2.</p>\r\n	</li>\r\n	<li>\r\n	<p>3. Jika karyawan di departemen C ingin mencetak dokumen di printer departemen A, dokumen tersebut harus melewati switch di lantai 1 dan lantai 3.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>Berdasarkan pola ini, administrator jaringan dapat menyimpulkan bahwa:</p>', NULL, 'Setiap departemen harus memiliki koneksi langsung ke semua departemen lain.', 'Switch di setiap lantai berperan sebagai perantara untuk meneruskan lalu lintas antar departemen.', 'Komunikasi antar departemen hanya dapat dilakukan melalui switch di lantai 1.', 'Server departemen C harus dipindahkan ke lantai 1 agar dapat diakses oleh semua departemen.', 'Printer departemen A harus dipindahkan ke lantai 2 agar dapat diakses oleh departemen B.', 'b', NULL, 2, '2024-06-23 06:10:09', '2024-06-23 06:10:09'),
(35, 'Pengenalan Pola', '<p>Perhatikan tabel routing pada dua router berbeda di bawah ini:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Router A: Tujuan 192.168.1.0/24 dengan next hop 192.168.100.2 dan interface eth0/0, Tujuan 192.168.2.0/24 dengan next hop 192.168.100.5 dan interface eth0/1, dan routing terakhir dengan Tujuan 0.0.0.0/0 dengan next hop 192.168.100.1 dan interface eth0/2.</p>\r\n	</li>\r\n	<li>\r\n	<p>Router B: Tujuan 192.168.3.0/24 dengan next hop 192.168.100.6 dan interface eth0/0, Tujuan 192.168.4.0/24 dengan next hop 192.168.100.2 dan interface eth0/1, dan routing terakhir dengan Tujuan 0.0.0.0/0 dengan next hop 192.168.100.1 dan interface eth0/2.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>Berdasarkan pola yang terlihat dalam tabel routing, manakah pernyataan berikut yang paling mungkin benar?</p>', NULL, 'Router A dan Router B terhubung langsung ke jaringan 192.168.1.0/24 dan 192.168.3.0/24.', 'Router A dan Router B menggunakan protokol routing dinamis untuk mempelajari rute.', 'Router A dan Router B menggunakan alamat IP 192.168.100.1 sebagai gateway default.', 'Router A dan Router B tidak dapat berkomunikasi satu sama lain.', 'Router A dan Router B terhubung ke jaringan yang sama, yaitu 192.168.100.0/24.', 'c', NULL, 2, '2024-06-23 06:11:21', '2024-06-23 06:11:21'),
(36, 'Pengenalan Pola', '<p>Seorang administrator jaringan sedang mengkonfigurasi routing statis untuk beberapa router dalam jaringan perusahaan. Ia menemukan pola berikut dalam konfigurasi router:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Router 1: ip route 172.16.1.0 255.255.255.0 192.168.10.2 &amp; ip route 172.16.2.0 255.255.255.0 192.168.10.5</p>\r\n	</li>\r\n	<li>\r\n	<p>Router 2: ip route 172.16.3.0 255.255.255.0 192.168.10.2 &amp; ip route 172.16.4.0 255.255.255.0 192.168.10.5</p>\r\n	</li>\r\n	<li>\r\n	<p>Router 3: ip route 172.16.5.0 255.255.255.0 192.168.10.2 &amp; ip route 172.16.6.0 255.255.255.0 192.168.10.5</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>Berdasarkan pola yang terlihat dalam konfigurasi tersebut, kesimpulan manakah yang paling mungkin benar?</p>', NULL, 'Router 1, 2, dan 3 menggunakan 172.16.0.0/16 sebagai next hop untuk mencapai jaringan 192.168.10.0.', 'Router 1, 2, dan 3 menggunakan 192.168.10.2 dan 192.168.10.5 sebagai next hop untuk mencapai jaringan 172.16.0.0/16.', 'Router 1, 2, dan 3 terhubung langsung ke jaringan 172.16.0.0/16.', 'Router 1, 2, dan 3 tidak dapat berkomunikasi satu sama lain.', 'Router 1, 2, dan 3 memiliki gateway default yang sama.', 'b', NULL, 2, '2024-06-23 06:12:06', '2024-06-23 06:12:06'),
(37, 'Algoritma', '<p>Sebuah perusahaan logistik memiliki beberapa gudang yang tersebar di berbagai kota. Setiap gudang memiliki kendaraan pengiriman sendiri dan bertanggung jawab untuk mengirimkan paket ke wilayah tertentu. Manajer logistik ingin merancang sistem routing yang efisien untuk memastikan paket dikirimkan ke alamat yang benar dengan rute terpendek.</p>\r\n\r\n<p>Manajer logistik mengamati pola berikut:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Paket yang ditujukan ke alamat di wilayah utara harus dikirim dari gudang A.</p>\r\n	</li>\r\n	<li>\r\n	<p>Paket yang ditujukan ke alamat di wilayah selatan harus dikirim dari gudang B.</p>\r\n	</li>\r\n	<li>\r\n	<p>Paket yang ditujukan ke alamat di wilayah timur harus dikirim dari gudang C.</p>\r\n	</li>\r\n	<li>\r\n	<p>Paket yang ditujukan ke alamat di wilayah barat harus dikirim dari gudang D.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>Berdasarkan pola ini, manajer logistik ingin merancang algoritma sederhana untuk menentukan gudang mana yang harus mengirimkan paket berdasarkan alamat tujuan.</p>\r\n\r\n<p><strong>Pertanyaan:</strong></p>\r\n\r\n<ol>\r\n	<li>\r\n	<p>Jika alamat tujuan berada di wilayah selatan, pilih gudang B.</p>\r\n	</li>\r\n	<li>\r\n	<p>Jika alamat tujuan berada di wilayah utara, pilih gudang A.</p>\r\n	</li>\r\n	<li>\r\n	<p>Jika alamat tujuan berada di wilayah timur, pilih gudang C.</p>\r\n	</li>\r\n	<li>\r\n	<p>Jika alamat tujuan berada di wilayah barat, pilih gudang D.</p>\r\n	</li>\r\n	<li>\r\n	<p>Jika alamat tujuan tidak berada di wilayah manapun, kembalikan pesan error.</p>\r\n	</li>\r\n</ol>\r\n\r\n<p>Urutkan langkah-langkah di atas untuk merancang algoritma yang sesuai dengan konsep routing statis:</p>', NULL, '1, 3, 4, 2, 5', '2, 1, 3, 4, 5', '3, 1, 4, 2, 5', '2, 1, 4, 3, 5', '2, 3, 4, 1, 5', 'b', NULL, 2, '2024-06-23 06:13:07', '2024-06-23 06:13:07'),
(38, 'Algoritma', '<p>Sebuah perpustakaan memiliki sistem peminjaman buku yang sederhana. Setiap buku memiliki kode rak yang menunjukkan lokasi buku tersebut di perpustakaan. Petugas perpustakaan ingin membuat algoritma untuk membantu pengunjung menemukan buku dengan cepat.</p>\r\n\r\n<p>Petugas perpustakaan mengamati pola berikut:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Buku-buku dengan kode rak dimulai dengan huruf A terletak di rak bagian depan.</p>\r\n	</li>\r\n	<li>\r\n	<p>Buku-buku dengan kode rak dimulai dengan huruf B terletak di rak bagian tengah.</p>\r\n	</li>\r\n	<li>\r\n	<p>Buku-buku dengan kode rak dimulai dengan huruf C terletak di rak bagian belakang.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>Berdasarkan pola ini, petugas perpustakaan ingin merancang algoritma untuk mengarahkan pengunjung ke rak yang benar berdasarkan kode rak buku yang dicari.</p>\r\n\r\n<p><strong>Pertanyaan</strong>:</p>\r\n\r\n<ol>\r\n	<li>\r\n	<p>Jika kode rak dimulai dengan huruf C, arahkan pengunjung ke rak bagian belakang.</p>\r\n	</li>\r\n	<li>\r\n	<p>Jika kode rak dimulai dengan huruf B, arahkan pengunjung ke rak bagian tengah.</p>\r\n	</li>\r\n	<li>\r\n	<p>Jika kode rak dimulai dengan huruf A, arahkan pengunjung ke rak bagian depan.</p>\r\n	</li>\r\n	<li>\r\n	<p>Jika kode rak tidak dimulai dengan huruf A, B, atau C, berikan pesan bahwa buku tidak ditemukan.</p>\r\n	</li>\r\n</ol>\r\n\r\n<p>Urutkan langkah-langkah di atas untuk membentuk algoritma yang sesuai dengan konsep routing statis:</p>', NULL, '3, 1, 2, 4', '1, 2, 3, 4', '1, 3, 2, 4', '2, 3, 1, 4', '3, 2, 1, 4', 'e', NULL, 2, '2024-06-23 06:14:24', '2024-06-23 06:14:24');
INSERT INTO `soal_tes` (`id`, `indikator`, `pertanyaan`, `gambar`, `jawaban_a`, `jawaban_b`, `jawaban_c`, `jawaban_d`, `jawaban_e`, `kunci_jawaban`, `pembahasan`, `kategori_tes_id`, `created_at`, `updated_at`) VALUES
(39, 'Algoritma', '<p>Anda adalah seorang administrator jaringan yang bertanggung jawab untuk mengkonfigurasi routing statis pada router R1 untuk menghubungkan jaringan lokal (LAN) dengan jaringan WAN.</p>\r\n\r\n<p>Berikut adalah informasi yang Anda miliki:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>LAN: Network: 192.168.1.0/24 dan router Interface: 192.168.1.1</p>\r\n	</li>\r\n	<li>\r\n	<p>WAN: Gateway: 10.0.0.1</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>Anda perlu mengkonfigurasi router R1 agar perangkat di LAN dapat mengakses internet melalui WAN.</p>\r\n\r\n<p><strong>Pertanyaan: </strong></p>\r\n\r\n<ol>\r\n	<li>\r\n	<p>Verifikasi konfigurasi dengan melakukan ping ke alamat IP publik di internet.</p>\r\n	</li>\r\n	<li>\r\n	<p>Masuk ke mode konfigurasi global dengan perintah configure terminal.</p>\r\n	</li>\r\n	<li>\r\n	<p>Tambahkan rute statis default dengan perintah ip route 0.0.0.0 0.0.0.0 10.0.0.1.</p>\r\n	</li>\r\n	<li>\r\n	<p>Masuk ke mode privileged EXEC dengan perintah enable.</p>\r\n	</li>\r\n</ol>\r\n\r\n<p>Urutkan langkah-langkah berikut di atas dengan benar untuk mengkonfigurasi routing statis pada router R1:</p>', NULL, '3, 2, 4, 1', '4, 2, 1, 3', '3, 2, 4, 1', '3, 2, 1, 1', '4, 2, 3, 1', 'e', NULL, 2, '2024-06-23 06:15:17', '2024-06-23 06:15:17'),
(40, 'Algoritma', '<p>Sebuah perusahaan memiliki tiga kantor cabang (A, B, dan C) yang terhubung melalui jaringan WAN. Setiap kantor cabang memiliki router (RA, RB, dan RC) dengan konfigurasi sebagai berikut:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Kantor A (RA): Jaringan LAN: 192.168.1.0/24 Alamat IP Router: 192.168.1.1 Alamat IP WAN: 10.0.0.1/30</p>\r\n	</li>\r\n	<li>\r\n	<p>Kantor B (RB): Jaringan LAN: 192.168.2.0/24 Alamat IP Router: 192.168.2.1 Alamat IP WAN: 10.0.0.2/30</p>\r\n	</li>\r\n	<li>\r\n	<p>Kantor C (RC): Jaringan LAN: 192.168.3.0/24 Alamat IP Router: 192.168.3.1 Alamat IP WAN: 10.0.0.5/30 (terhubung ke internet)</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>Untuk memastikan semua kantor cabang dapat saling berkomunikasi dan mengakses internet, administrator jaringan perlu mengkonfigurasi routing statis pada setiap router. Manakah dari pernyataan berikut yang benar mengenai urutan konfigurasi yang paling efisien?</p>', NULL, 'Konfigurasi R1 terlebih dahulu, lalu R2, dan terakhir R3.', 'Konfigurasi R3 terlebih dahulu, lalu R2, dan terakhir R1.', 'Konfigurasi R2 terlebih dahulu, lalu R1 dan R3 secara bersamaan.', 'Urutan konfigurasi tidak penting, yang penting semua router terkonfigurasi dengan benar.', 'Konfigurasi router yang terhubung ke internet (R3) harus dilakukan terakhir.', 'c', NULL, 2, '2024-06-23 06:16:05', '2024-06-23 06:16:05');

-- --------------------------------------------------------

--
-- Table structure for table `tugas`
--

CREATE TABLE `tugas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pertemuan_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` text NOT NULL,
  `description` text DEFAULT NULL,
  `tugas_file` varchar(255) DEFAULT NULL,
  `due_date` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tugas`
--

INSERT INTO `tugas` (`id`, `pertemuan_id`, `name`, `slug`, `description`, `tugas_file`, `due_date`, `created_at`, `updated_at`) VALUES
(1, 1, 'Konsep Routing Statis dan Berpikir Komputasi', 'konsep-routing-statis-dan-berpikir-komputasi', 'Konsep Routing Statis dan Berpikir Komputasi', 'Tugas_P1_Konsep Routing Statis dan Berpikir Komputasi_1719209031.pdf', '2024-08-06 19:13:00', '2024-01-24 12:19:15', '2024-06-24 06:03:51'),
(2, 2, 'Konfigurasi Routing Statis', 'konfigurasi-routing-statis', 'Konfigurasi Routing Statis', 'Tugas_P2_Konfigurasi Routing Statis_1719209106.pdf', '2024-08-07 16:03:00', '2024-01-25 09:03:55', '2024-06-24 06:05:06'),
(3, 3, 'Mengidentifikasi dan Memperbaiki Masalah Routing Statis', 'mengidentifikasi-dan-memperbaiki-masalah-routing-statis', 'Mengidentifikasi dan Memperbaiki Masalah Routing Statis', 'Tugas_P3_Mengidentifikasi dan Memperbaiki Masalah Routing Statis_1719209047.pdf', '2024-08-08 20:20:00', '2024-01-29 13:20:45', '2024-06-24 06:04:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` char(36) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `github_id` varchar(255) DEFAULT NULL,
  `auth_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `slug`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`, `github_id`, `auth_type`) VALUES
(1, 'Miftah Rizky Alamsyah', 'ddf4bd3f-caa8-464f-aef5-a47a98200936', 'miftahrizkyalamsyah@upi.edu', NULL, '$2y$10$Yjlz/px3bi6GqpFD9r9yUO6DEnr8vlV9GHaBhUZ.OO7knh9pm.ZbO', 'nNIaQ7xabxlxSfJqbUYolvXqpFvIJcm30NiThrakLwqgSVzMGQ9uFhgbMsm8', '2024-01-19 09:53:49', '2024-01-19 09:53:49', 1, NULL, NULL),
(2, 'Jajang Nurjaman', 'a9b63e8d-6591-4d9d-a468-2428c03e2bad', 'bhoysnesia@gmail.com', NULL, '$2y$10$TeMAn8HbuGWynXkJpi/hGusznVFVbjpsqcehfSHAcw1HA8/crxznC', '6ZBydekEUwBlS3oDIRrqcMyTzHn9Qd4xr7c8LSzlDHPBbda4kSj28hhGZwdb', '2024-01-19 09:53:49', '2024-05-18 09:42:39', 0, NULL, NULL),
(3, 'Justinus Lhaksana', '0ebfb4ac-a361-4016-9926-e920886e0b6d', 'miftahrizkyalamsyah@protonmail.com', NULL, '$2y$10$AlxalE6Ia3VEcj0RRe1voe9IuMMxaUGd11lkC.9yp3fWHHDPPxDCm', 'V1TETrB6USRgyfoOPpEqEszpXr6r79qF8QWaQeJq5OUMoC3s3AsTYsMMfRgh', '2024-01-19 09:53:49', '2024-05-18 09:44:22', 0, NULL, NULL),
(4, 'Eric ten Hag', '79d82d7b-a984-422a-bde5-d400bfb6dda7', 'mailtoandaluzia@gmail.com', NULL, '$2y$10$w4y/nmRSiz9Q0bJE.B4BO.xoO4owDqoGB9mcumO0ZZIR6d3e5avUa', 'qpaPoQJfymp3wTpPzvO1QzCoehOJSaeeMfZnVa1nhZvIRxaF2zSE0QKk3omC', '2024-01-20 08:43:01', '2024-05-18 09:43:09', 0, NULL, NULL),
(5, 'Ian MacKaye', '2ce84c22-1963-443a-92ba-c44dfb445f23', 'nrrdynrrdy@gmail.com', NULL, '$2y$10$sBSShZifpGE6J7xXsSbSAeMfu24pOHQcPRo5CIRibcHPVv9zkzkbq', '7o9VPyd9nI2XKJOOjdbsvkeJNddH3hS985uNkqUZJbKHPwjDtjJUN2wOFOQN', '2024-01-20 08:44:25', '2024-05-18 09:40:38', 0, NULL, NULL),
(6, 'Hayley Williams', '7685f058-e62f-4055-bf11-e4b70923b04a', 'routely@routely.com', NULL, '$2y$10$GLyfppXIYhlXpqQq1Sw/zeX8k2xDp59lDtvPw0uoWlpYfEpnvl0zm', 'aBoeKayqY5JYSafp6LCDp51VLeVfTJNxMcgp8FvTSButdxzue0sBwJDUs2Kp', '2024-01-20 08:46:11', '2024-05-18 09:38:49', 0, NULL, NULL),
(7, 'Kat Moss', 'b79924b9-b4f4-43f9-acc1-bbc83687879e', 'miftahrizkyalamsyah@hotmail.com', NULL, '$2y$10$KbRAVKdVEiYg3CfcpMtHKuDY6UtgOktxL5VHgcNyNtBQCRwI7Ksom', 'JIHrc4YkrIE8sFy8X38q9yvHaf7Dir4fbG4huId7i0sc2VJEYI8KZ19wsd8Y', '2024-01-27 10:08:50', '2024-05-18 09:41:14', 0, NULL, NULL),
(8, 'Mike Kinsella', '04bf5d17-c534-4e08-afe7-eaff2219adff', 'namalengkap@gmail.com', NULL, '$2y$10$WeKUu4SFfjWfpI/WJwJsH.DDTMOTbTzkjv0llX5IHfXh6JVtACCJq', NULL, '2024-02-03 06:30:08', '2024-05-18 09:42:08', 0, NULL, NULL),
(12, 'Chester Bennington', '3f6566aa-0994-4d69-838a-ce85a0d6f0f9', 'depanbelakang@gmail.com', NULL, '$2y$10$.BoGUw.jPStKFUEmUQAWY.UpyweDcG7cjV3puXZwcmvxUWffGlmr2', NULL, '2024-02-19 11:35:15', '2024-05-18 09:38:22', 0, NULL, NULL),
(13, 'Nama Lengkap', '026a52fa-9ac4-4713-9bdc-050d32589b18', 'namalengkap@hotmail.com', NULL, '$2y$10$X/RnNOGhc1V8aVeiT8BFOe7GfkTRr1EsR0Fss5it2QBBJ4.cdnv6m', NULL, '2024-02-19 12:17:02', '2024-02-20 09:10:19', 0, NULL, NULL),
(14, 'Cheems Balltze', 'cbe6e012-ed8c-4d43-abd7-bee398de3bbe', 'cheemsballtze@gmail.com', NULL, '$2y$10$M46kgx2zLEYgy/PHlLaWGOzbHKsXGz9ooKCkaQ2T4iE.23/nKeVYO', NULL, '2024-05-18 09:49:32', '2024-05-18 09:49:32', 0, NULL, NULL),
(15, 'Harry Maguire', '98c74f39-5b64-45dc-befd-06034eefbb6f', 'harrymaguire@gmail.com', NULL, '$2y$10$wFSTIVUMaTxkJMqb4RU07e0yJjI4NDJYxqOI15o0eoAtfqCHp/4Di', NULL, '2024-05-18 10:06:21', '2024-05-18 10:06:21', 0, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensis`
--
ALTER TABLE `absensis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `absensis_user_id_foreign` (`user_id`),
  ADD KEY `absensis_pertemuan_id_foreign` (`pertemuan_id`);

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hasil_apersepsi_siswa`
--
ALTER TABLE `hasil_apersepsi_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hasil_kuis_siswa`
--
ALTER TABLE `hasil_kuis_siswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hasil_kuis_siswa_user_id_foreign` (`user_id`),
  ADD KEY `hasil_kuis_siswa_pertemuan_id_foreign` (`pertemuan_id`);

--
-- Indexes for table `hasil_tes_siswas`
--
ALTER TABLE `hasil_tes_siswas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hasil_tes_siswas_user_id_foreign` (`user_id`),
  ADD KEY `hasil_tes_siswas_kategori_tes_id_foreign` (`kategori_tes_id`);

--
-- Indexes for table `hasil_tugas_siswas`
--
ALTER TABLE `hasil_tugas_siswas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hasil_tugas_siswas_user_id_foreign` (`user_id`),
  ADD KEY `hasil_tugas_siswas_tugas_id_foreign` (`tugas_id`);

--
-- Indexes for table `jawaban_pertanyaan_pemulihan`
--
ALTER TABLE `jawaban_pertanyaan_pemulihan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jawaban_pertanyaan_pemulihan_user_id_foreign` (`user_id`),
  ADD KEY `jawaban_pertanyaan_pemulihan_pertanyaan_pemulihan_id_foreign` (`pertanyaan_pemulihan_id`);

--
-- Indexes for table `kategori_tes`
--
ALTER TABLE `kategori_tes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kategori_tes_slug_unique` (`slug`);

--
-- Indexes for table `kelompoks`
--
ALTER TABLE `kelompoks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kelompoks_user_id_foreign` (`user_id`);

--
-- Indexes for table `lencana`
--
ALTER TABLE `lencana`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materis`
--
ALTER TABLE `materis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materi_user`
--
ALTER TABLE `materi_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `materi_user_materi_id_foreign` (`materi_id`),
  ADD KEY `materi_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nilai_user_id_foreign` (`user_id`);

--
-- Indexes for table `nilai_tugas`
--
ALTER TABLE `nilai_tugas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nilai_tugas_tugas_id_foreign` (`tugas_id`),
  ADD KEY `nilai_tugas_hasil_tugas_siswa_id_foreign` (`hasil_tugas_siswa_id`),
  ADD KEY `nilai_tugas_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pengajuan_masalah`
--
ALTER TABLE `pengajuan_masalah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pertanyaan_pemulihan`
--
ALTER TABLE `pertanyaan_pemulihan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pertemuans`
--
ALTER TABLE `pertemuans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `refleksis`
--
ALTER TABLE `refleksis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soal_kuis`
--
ALTER TABLE `soal_kuis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `soal_kuis_pertemuan_id_foreign` (`pertemuan_id`);

--
-- Indexes for table `soal_tes`
--
ALTER TABLE `soal_tes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `soal_tes_kategori_tes_id_foreign` (`kategori_tes_id`);

--
-- Indexes for table `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_slug_unique` (`slug`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensis`
--
ALTER TABLE `absensis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hasil_apersepsi_siswa`
--
ALTER TABLE `hasil_apersepsi_siswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `hasil_kuis_siswa`
--
ALTER TABLE `hasil_kuis_siswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `hasil_tes_siswas`
--
ALTER TABLE `hasil_tes_siswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `hasil_tugas_siswas`
--
ALTER TABLE `hasil_tugas_siswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `jawaban_pertanyaan_pemulihan`
--
ALTER TABLE `jawaban_pertanyaan_pemulihan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategori_tes`
--
ALTER TABLE `kategori_tes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kelompoks`
--
ALTER TABLE `kelompoks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `lencana`
--
ALTER TABLE `lencana`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `materis`
--
ALTER TABLE `materis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `materi_user`
--
ALTER TABLE `materi_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `nilai_tugas`
--
ALTER TABLE `nilai_tugas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `pengajuan_masalah`
--
ALTER TABLE `pengajuan_masalah`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pertanyaan_pemulihan`
--
ALTER TABLE `pertanyaan_pemulihan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pertemuans`
--
ALTER TABLE `pertemuans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `refleksis`
--
ALTER TABLE `refleksis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `soal_kuis`
--
ALTER TABLE `soal_kuis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `soal_tes`
--
ALTER TABLE `soal_tes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absensis`
--
ALTER TABLE `absensis`
  ADD CONSTRAINT `absensis_pertemuan_id_foreign` FOREIGN KEY (`pertemuan_id`) REFERENCES `pertemuans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `absensis_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `hasil_kuis_siswa`
--
ALTER TABLE `hasil_kuis_siswa`
  ADD CONSTRAINT `hasil_kuis_siswa_pertemuan_id_foreign` FOREIGN KEY (`pertemuan_id`) REFERENCES `pertemuans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `hasil_kuis_siswa_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `hasil_tes_siswas`
--
ALTER TABLE `hasil_tes_siswas`
  ADD CONSTRAINT `hasil_tes_siswas_kategori_tes_id_foreign` FOREIGN KEY (`kategori_tes_id`) REFERENCES `kategori_tes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `hasil_tes_siswas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `hasil_tugas_siswas`
--
ALTER TABLE `hasil_tugas_siswas`
  ADD CONSTRAINT `hasil_tugas_siswas_tugas_id_foreign` FOREIGN KEY (`tugas_id`) REFERENCES `tugas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `hasil_tugas_siswas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `jawaban_pertanyaan_pemulihan`
--
ALTER TABLE `jawaban_pertanyaan_pemulihan`
  ADD CONSTRAINT `jawaban_pertanyaan_pemulihan_pertanyaan_pemulihan_id_foreign` FOREIGN KEY (`pertanyaan_pemulihan_id`) REFERENCES `pertanyaan_pemulihan` (`id`),
  ADD CONSTRAINT `jawaban_pertanyaan_pemulihan_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `kelompoks`
--
ALTER TABLE `kelompoks`
  ADD CONSTRAINT `kelompoks_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `materi_user`
--
ALTER TABLE `materi_user`
  ADD CONSTRAINT `materi_user_materi_id_foreign` FOREIGN KEY (`materi_id`) REFERENCES `materis` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `materi_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `nilai_tugas`
--
ALTER TABLE `nilai_tugas`
  ADD CONSTRAINT `nilai_tugas_hasil_tugas_siswa_id_foreign` FOREIGN KEY (`hasil_tugas_siswa_id`) REFERENCES `hasil_tugas_siswas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `nilai_tugas_tugas_id_foreign` FOREIGN KEY (`tugas_id`) REFERENCES `tugas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `nilai_tugas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `soal_kuis`
--
ALTER TABLE `soal_kuis`
  ADD CONSTRAINT `soal_kuis_pertemuan_id_foreign` FOREIGN KEY (`pertemuan_id`) REFERENCES `pertemuans` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `soal_tes`
--
ALTER TABLE `soal_tes`
  ADD CONSTRAINT `soal_tes_kategori_tes_id_foreign` FOREIGN KEY (`kategori_tes_id`) REFERENCES `kategori_tes` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
