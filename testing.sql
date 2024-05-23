-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 23, 2024 at 04:34 AM
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
(6, 4, 2, 'sudah', '2024-03-14 06:03:01', '2024-03-14 06:03:01'),
(7, 2, 6, 'dapat', '2024-05-14 11:54:23', '2024-05-14 11:54:23'),
(8, 2, 8, 'siswa', '2024-05-14 11:55:08', '2024-05-14 11:55:08');

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
(3, 4, 'dbbabdddadbd', 33, 17, 17, 8, 75, 9, 3, 0, 1, '2024-02-16 12:17:39', '2024-02-16 12:17:39'),
(4, 4, 'badcbdcbcb', 20, 20, 0, 10, 50, 5, 5, 0, 2, '2024-02-16 13:14:38', '2024-02-16 13:14:38'),
(6, 3, 'dbbcccdbadbd', 17, 17, 17, 8, 58, 7, 5, 0, 1, '2024-02-17 05:17:34', '2024-02-17 05:17:34'),
(7, 8, 'dcadbcdbabac', 25, 17, 8, 0, 50, 6, 6, 0, 1, '2024-02-17 05:37:09', '2024-02-17 05:37:09'),
(9, 8, 'babcddadcc', 30, 30, 20, 10, 90, 9, 1, 0, 2, '2024-02-17 05:39:34', '2024-02-17 05:39:34'),
(10, 3, 'babcddaaec', 30, 30, 10, 0, 70, 7, 3, 0, 2, '2024-02-17 07:06:16', '2024-02-17 07:06:16'),
(11, 13, 'dcbabcddadbd', 42, 25, 17, 8, 92, 11, 1, 0, 1, '2024-02-20 09:51:52', '2024-02-20 09:51:52'),
(12, 5, 'bcbaddc', 43, 14, 14, 0, 42, 5, 2, 5, 1, '2024-02-22 08:17:22', '2024-02-22 08:17:22'),
(13, 5, 'badac', 40, 20, 20, 20, 50, 5, 0, 5, 2, '2024-02-22 08:17:52', '2024-02-22 08:17:52'),
(14, 6, 'dcbabcddadcdababcddadcd', 39, 26, 17, 17, 100, 23, 0, 0, 1, '2024-05-21 09:05:55', '2024-05-21 09:05:55'),
(15, 2, 'dcbaNcNdadcNabcNcdcadbN', 67, 67, 100, 25, 65, 15, 3, 5, 1, '2024-05-23 01:41:18', '2024-05-23 01:41:18'),
(16, 2, 'babcddcbNNa', 100, 100, 0, 33, 64, 7, 2, 2, 2, '2024-05-23 01:46:11', '2024-05-23 01:46:11');

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
(39, 13, 'babcddadcc', 30, 30, 20, 10, 75, 9, 1, 2, 1, '2024-02-19 12:45:31', '2024-02-19 12:45:31'),
(58, 7, 'babcdNNNNNdN', 50, 33, 17, 0, 50, 6, 0, 6, 1, '2024-05-18 08:54:50', '2024-05-18 08:54:50'),
(59, 14, 'bNbcNdaNcNNN', 33, 33, 17, 17, 50, 6, 0, 6, 1, '2024-05-18 09:50:35', '2024-05-18 09:50:35'),
(60, 15, 'bNdNNNNNcNbb', 20, 0, 0, 40, 25, 3, 2, 7, 1, '2024-05-18 10:06:56', '2024-05-18 10:06:56'),
(61, 12, 'bNdcNNabNNNb', 17, 17, 17, 17, 33, 4, 2, 6, 1, '2024-05-19 06:43:00', '2024-05-19 06:43:00'),
(62, 4, 'badcNdNdcNdN', 25, 25, 25, 13, 58, 7, 1, 4, 1, '2024-05-19 06:46:03', '2024-05-19 06:46:03'),
(63, 5, 'bcNcbccdcNdb', 10, 10, 20, 20, 50, 6, 4, 2, 1, '2024-05-19 06:46:54', '2024-05-19 06:46:54'),
(64, 6, 'badcddadccdb', 17, 25, 25, 17, 83, 10, 2, 0, 1, '2024-05-19 06:49:14', '2024-05-19 06:49:14'),
(67, 8, 'babcddNdcNdN', 33, 33, 22, 11, 75, 9, 0, 3, 1, '2024-05-19 06:52:36', '2024-05-19 06:52:36'),
(69, 2, 'baccddaNbNdb', 67, 100, 67, 33, 67, 8, 2, 2, 1, '2024-05-23 01:31:56', '2024-05-23 01:31:56'),
(70, 2, 'babcdeadce', 100, 67, 100, 50, 80, 8, 2, 0, 2, '2024-05-23 01:34:31', '2024-05-23 01:34:31');

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
(3, 2, 2, 'Topologi_1706272235.json', 'Powerpoint_1706272235.pdf', NULL, '2024-01-26 12:30:35', '2024-01-26 12:30:35'),
(6, 7, 2, 'Topologi_1706610530.json', 'Powerpoint_1706610530.pdf', NULL, '2024-01-30 10:28:50', '2024-01-30 10:28:50'),
(7, 7, 3, 'Topologi_1706611191.json', 'Powerpoint_1706611191.pdf', NULL, '2024-01-30 10:39:51', '2024-01-30 10:39:51'),
(9, 3, 2, 'Topologi_3_2_1706680863.json', 'Presentasi_3_2_1706680863.pdf', NULL, '2024-01-31 06:01:04', '2024-01-31 06:01:04'),
(10, 2, 3, 'Topologi_2_3_1706686321.json', 'Presentasi_2_3_1706686321.pdf', NULL, '2024-01-31 07:32:01', '2024-01-31 07:32:01'),
(13, 3, 3, 'Topologi_3_3_1706693398.json', 'Presentasi_3_3_1706693398.pdf', NULL, '2024-01-31 09:29:58', '2024-01-31 09:29:58'),
(18, 8, 2, 'Topologi_S8_T2_1708148415.json', 'Presentasi_S8_T2_1708148415.pdf', NULL, '2024-02-17 05:40:15', '2024-02-17 05:40:15'),
(21, 2, 1, 'Topologi_Kel-1_Tugas-1_U2_1708525278.json', 'Presentasi_Kel-1_Tugas-1_U2_1708525278.pdf', NULL, '2024-02-21 14:21:18', '2024-02-21 14:21:18'),
(22, 3, 1, 'Topologi_Kel-2_Tugas-1_U3_1708525309.json', 'Presentasi_Kel-2_Tugas-1_U3_1708525309.pdf', NULL, '2024-02-21 14:21:49', '2024-02-21 14:21:49'),
(23, 4, 1, 'Topologi_Kel-3_Tugas-1_U4_1708525401.json', 'Presentasi_Kel-3_Tugas-1_U4_1708525401.pdf', NULL, '2024-02-21 14:23:21', '2024-02-21 14:23:21'),
(24, 13, 1, 'Topologi_Kel-4_Tugas-1_U13_1708525557.json', 'Presentasi_Kel-4_Tugas-1_U13_1708525557.pdf', NULL, '2024-02-21 14:25:57', '2024-02-21 14:25:57'),
(25, 6, 1, 'Topologi_Kel-1_Tugas-1_U6_1716119719.json', 'Presentasi_Kel-1_Tugas-1_U6_1716119719.pdf', NULL, '2024-05-19 11:55:19', '2024-05-19 11:55:19');

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
(26, 15, 1, '1', NULL, '2024-05-18 10:10:50', '2024-05-18 10:10:50'),
(27, 6, 1, '1', NULL, '2024-05-18 10:10:50', '2024-05-18 10:10:50'),
(28, 2, 1, '1', NULL, '2024-05-18 10:10:50', '2024-05-18 10:10:50'),
(29, 12, 2, '2', NULL, '2024-05-18 10:11:34', '2024-05-18 10:11:34'),
(30, 5, 2, '2', NULL, '2024-05-18 10:11:34', '2024-05-18 10:11:34'),
(31, 13, 2, '2', NULL, '2024-05-18 10:11:34', '2024-05-18 10:11:34'),
(32, 14, 3, '3', NULL, '2024-05-18 10:12:11', '2024-05-18 10:12:11'),
(33, 3, 3, '3', NULL, '2024-05-18 10:12:11', '2024-05-18 10:12:11'),
(34, 4, 4, '4', NULL, '2024-05-18 10:12:20', '2024-05-18 10:12:20'),
(35, 7, 4, '4', NULL, '2024-05-18 10:12:20', '2024-05-18 10:12:20'),
(36, 8, 4, '4', NULL, '2024-05-18 10:12:20', '2024-05-18 10:12:20');

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
(1, 1, 'Pengenalan Comp Think', 'pengenalan-comp-think', 'Foto_Pengenalan Comp Think_1715147395.png', 'Materi_Pengenalan Comp Think_1715147394.pdf', 'Deskripsi ini adalah isian deskripsi', '2024-01-19 09:57:47', '2024-05-08 05:49:55', 0),
(2, 2, 'Routing dan CT', 'routing-dan-ct', '1706595819.jpg', '1706595819.pdf', 'Routing dan CT', '2024-01-30 06:23:39', '2024-01-30 06:23:39', 0),
(3, 3, 'Pendalaman Pemahaman CT dalam Routing Statis', 'pendalaman-pemahaman-ct-dalam-routing-statis', '1706595869.png', '1706595869.pdf', 'Pendalaman Pemahaman CT dalam Routing Statis', '2024-01-30 06:24:29', '2024-01-30 06:24:29', 0),
(4, 4, 'Pendalaman Pemahaman CT dalam Routing Statis 2', 'pendalaman-pemahaman-ct-dalam-routing-statis-2', 'Foto_Pendalaman Pemahaman CT dalam Routing Statis 2_1706689077.jpg', 'Materi_Pendalaman Pemahaman CT dalam Routing Statis 2_1706689077.pdf', 'Pendalaman Pemahaman CT dalam Routing Statis 2', '2024-01-30 06:24:58', '2024-01-31 08:17:57', 0);

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
(19, '2024_01_16_160734_create_soal_tes_table', 1),
(20, '2024_01_17_160323_create_hasil_tes_siswa_table', 1),
(21, '2024_01_24_145427_create_refleksis_table', 2),
(22, '2024_01_25_141517_hasil_tugas_siswa_create', 3),
(25, '2024_01_26_155111_create_nilai_tugas_table', 4),
(28, '2024_02_11_133928_create_pengajuan_masalah_table', 5),
(29, '2024_02_14_165455_create_hasil_apersepsi_siswa_table', 6),
(30, '2024_02_16_154702_create_soal_kuis_table', 7),
(31, '2024_02_16_154711_create_hasil_kuis_siswa_table', 7),
(32, '2024_02_18_173920_create_petanyaan_pemulihan_table', 8),
(33, '2024_02_18_183925_create_jawaban_pertanyaan_pemulihan_table', 9);

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
(2, 2, 66.67, 80.00, 147, '2024-01-19 09:53:49', '2024-05-23 01:34:31'),
(3, 3, 58.33, 60.00, 118, '2024-01-19 09:53:49', '2024-05-19 06:51:48'),
(4, 4, 58.33, NULL, 58, '2024-01-20 08:43:01', '2024-05-19 06:46:03'),
(5, 5, 50.00, NULL, 50, '2024-01-20 08:44:25', '2024-05-19 06:46:54'),
(6, 6, 83.33, NULL, 83, '2024-01-20 08:46:11', '2024-05-19 06:49:14'),
(7, 7, 50.00, NULL, 50, '2024-01-27 10:08:50', '2024-05-18 08:40:30'),
(8, 8, 75.00, NULL, 75, '2024-02-03 06:30:08', '2024-05-19 06:52:36'),
(9, 12, 33.33, NULL, 33, '2024-02-19 11:35:15', '2024-05-19 06:43:00'),
(10, 13, 75.00, NULL, 75, '2024-02-19 12:17:02', '2024-02-19 12:45:31'),
(11, 14, 50.00, NULL, 50, '2024-05-18 09:49:32', '2024-05-18 09:50:35'),
(12, 15, 25.00, NULL, 25, '2024-05-18 10:06:21', '2024-05-18 10:06:56');

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
(3, 2, 3, 2, 90, '2024-01-26 12:33:38', '2024-01-30 11:40:18'),
(6, 3, 7, 7, 85, '2024-01-30 12:06:15', '2024-01-30 12:06:15'),
(7, 2, 6, 7, 80, '2024-01-30 12:06:23', '2024-01-30 12:06:23'),
(9, 2, 9, 3, 80, '2024-02-03 06:05:23', '2024-02-03 06:05:23'),
(10, 3, 10, 2, 85, '2024-02-03 06:05:35', '2024-02-03 06:05:35'),
(14, 3, 13, 3, 85, '2024-02-17 05:35:35', '2024-02-17 05:35:35'),
(16, 2, 18, 8, 90, '2024-02-17 05:40:40', '2024-02-17 05:40:40'),
(17, 1, 21, 2, 85, '2024-03-14 05:54:22', '2024-03-14 05:54:22'),
(18, 1, 22, 3, 100, '2024-05-14 05:38:44', '2024-05-14 05:38:44'),
(19, 1, 23, 4, 90, '2024-05-14 05:39:05', '2024-05-14 05:39:05'),
(20, 1, 24, 13, 80, '2024-05-14 05:39:14', '2024-05-14 05:39:14');

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
(19, 1, 3, 2, 'Soal PM_Pertemuan 1_Kelompok 2_3654.json', 'Salam', '2024-02-21 13:54:14', '2024-02-21 13:54:14'),
(20, 1, 2, 1, 'Soal PM_Pertemuan 1_Kelompok 1_3679.json', NULL, '2024-02-21 13:54:39', '2024-02-21 13:54:39'),
(21, 1, 4, 3, 'Soal PM_Pertemuan 1_Kelompok 3_3720.json', NULL, '2024-02-21 13:55:20', '2024-02-21 13:55:20'),
(22, 1, 13, 4, 'Soal PM_Pertemuan 1_Kelompok 4_3766.json', '🔥', '2024-02-21 13:56:06', '2024-02-21 13:56:06'),
(23, 2, 2, 1, 'Soal PM_Pertemuan 2_Kelompok 1_8628.json', '🔥', '2024-05-08 06:10:28', '2024-05-08 06:10:28'),
(24, 3, 2, 1, 'Soal PM_Pertemuan 3_Kelompok 1_8637.json', NULL, '2024-05-08 06:10:37', '2024-05-08 06:10:37'),
(25, 4, 2, 1, 'Soal PM_Pertemuan 4_Kelompok 1_8643.json', NULL, '2024-05-08 06:10:43', '2024-05-08 06:10:43');

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
(1, 'pertemuan-ke-1', 1, '2024-05-11', '\n\"Routing Statis dengan Perspektif Berpikir Komputasi\" adalah agar peserta didik dapat memahami, menerapkan konsep berpikir komputasi dalam penggunaan routing statis, menggunakan alat simulasi, berintegrasi dengan protokol jaringan, menganalisis permasalahan, berkolaborasi dalam tim, mengoptimalkan kinerja jaringan, dan mengembangkan keterampilan problem-solving.', 'Apakah Anda pernah mengalami atau mencoba menerapkan prinsip berpikir komputasi dalam mengatasi tantangan atau permasalahan terkait konfigurasi topologi routing statis pada Cisco Packet Tracer?', '2024-01-19 09:53:49', '2024-01-19 09:53:49'),
(2, 'pertemuan-ke-2', 2, '2024-05-18', 'Siswa dapat', 'Siswa dapat 2', '2024-01-19 09:53:49', '2024-02-16 09:59:58'),
(3, 'pertemuan-ke-3', 3, '2024-05-23', 'Siswa dapat', 'Siswa dapat 3', '2024-01-19 09:53:49', '2024-02-16 10:07:45'),
(4, 'pertemuan-ke-4', 4, '2024-05-30', 'Siswa dapat', 'Siswa dapat 4', '2024-01-19 09:53:49', '2024-02-16 10:07:52');

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
  `pertanyaan` varchar(255) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `jawaban_a` varchar(255) NOT NULL,
  `jawaban_b` varchar(255) NOT NULL,
  `jawaban_c` varchar(255) NOT NULL,
  `jawaban_d` varchar(255) NOT NULL,
  `jawaban_e` varchar(255) NOT NULL,
  `kunci_jawaban` varchar(255) NOT NULL,
  `pembahasan` varchar(255) DEFAULT NULL,
  `kategori_tes_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `soal_tes`
--

INSERT INTO `soal_tes` (`id`, `indikator`, `pertanyaan`, `gambar`, `jawaban_a`, `jawaban_b`, `jawaban_c`, `jawaban_d`, `jawaban_e`, `kunci_jawaban`, `pembahasan`, `kategori_tes_id`, `created_at`, `updated_at`) VALUES
(1, 'Dekomposisi', 'Apa tujuan utama dari dekomposisi dalam computational thinking?', NULL, 'Meningkatkan kecepatan pemrosesan data', 'Memecah masalah besar menjadi submasalah yang lebih kecil', 'Menyusun ulang kode program', 'Mengimplementasikan algoritma baru', 'Mengoptimalkan penggunaan memori', 'b', NULL, 1, '2024-01-19 10:05:01', '2024-01-19 10:05:01'),
(2, 'Dekomposisi', 'Bagaimana dekomposisi dapat membantu dalam penyelesaian masalah kompleks?', NULL, 'Mengecilkan ukuran masalah', 'Membuat program lebih kompleks', 'Menggabungkan semua aspek masalah', 'Menulis kode tanpa perencanaan', 'Mengabaikan langkah-langkah kecil', 'a', NULL, 1, '2024-01-19 10:05:01', '2024-01-19 10:05:01'),
(3, 'Dekomposisi', 'Apa langkah pertama dalam proses dekomposisi sebuah masalah?', NULL, 'Menggabungkan semua aspek masalah', 'Mengevaluasi kompleksitas waktu eksekusi', 'Menulis kode program utama', 'Membuat daftar submasalah yang harus diselesaikan', 'Mengimplementasikan algoritma baru', 'b', NULL, 1, '2024-01-19 10:05:01', '2024-01-19 10:05:01'),
(4, 'Abstraksi', 'Apa yang dimaksud dengan abstraksi dalam pemrograman?', NULL, 'Proses mencari kesalahan dalam kode', 'Mengecilkan ukuran program', 'Menyembunyikan detail kompleksitas dan fokus pada fitur penting', 'Menulis kode tanpa perencanaan', 'Mengoptimalkan penggunaan memori', 'c', NULL, 1, '2024-01-19 10:05:01', '2024-01-19 10:05:01'),
(5, 'Abstraksi', 'Mengapa abstraksi penting dalam pengembangan perangkat lunak?', NULL, 'Membuat program lebih kompleks', 'Meningkatkan kompleksitas waktu eksekusi', 'Mengurangi keterbacaan kode', 'Mempermudah pemahaman dan pemeliharaan kode', 'Mengabaikan langkah-langkah kecil', 'd', NULL, 1, '2024-01-19 10:05:01', '2024-01-19 10:05:01'),
(6, 'Abstraksi', 'Bagaimana abstraksi membantu dalam pengorganisasian kode program?', NULL, 'Menggabungkan semua aspek program menjadi satu', 'Menyembunyikan fitur-fitur utama', 'Mengecilkan ukuran program secara keseluruhan', 'Meningkatkan reusabilitas kode', 'Menulis kode tanpa perencanaan', 'd', NULL, 1, '2024-01-19 10:05:01', '2024-01-19 10:05:01'),
(7, 'Pengenalan Pola', 'Apa yang dimaksud dengan pengenalan pola dalam konteks komputasi?', NULL, 'Proses mengelompokkan data menjadi kategori tertentu', 'Membaca pola alam secara langsung', 'Menggunakan pola sebagai nama file dalam sistem operasi', 'Menulis kode tanpa perencanaan', 'Menyembunyikan pola dalam pemrograman', 'a', NULL, 1, '2024-01-19 10:05:01', '2024-01-19 10:05:01'),
(8, 'Pengenalan Pola', 'Mengapa pengenalan pola sering digunakan dalam kecerdasan buatan?', NULL, 'Untuk membuat program lebih kompleks', 'Mempermudah pemahaman dan pemeliharaan kode', 'Meningkatkan efisiensi pengembangan', 'Untuk mengidentifikasi pola atau tren dalam data', 'Mengurangi reusabilitas kode', 'd', NULL, 1, '2024-01-19 10:05:01', '2024-01-19 10:05:01'),
(9, 'Algoritma', 'Apa peran utama algoritma dalam computational thinking?', NULL, 'Menyusun ulang kode program', 'Meningkatkan kompleksitas waktu eksekusi', 'Memecahkan masalah dan memberikan langkah-langkah solusi', 'Menulis kode tanpa perencanaan', 'Menggabungkan semua aspek masalah', 'c', NULL, 1, '2024-01-19 10:05:01', '2024-01-19 10:05:01'),
(10, 'Algoritma', 'Mengapa penting untuk merancang algoritma dengan baik dalam pengembangan perangkat lunak?', NULL, 'Untuk membuat program lebih kompleks', 'Meningkatkan kompleksitas waktu eksekusi', 'Menjamin bahwa program tidak akan pernah mengalami kesalahan', 'Memudahkan pengorganisasian kode', 'Mengabaikan perencanaan awal', 'd', NULL, 1, '2024-01-19 10:05:01', '2024-01-19 10:05:01'),
(11, 'Dekomposisi', 'Apa tujuan utama dari dekomposisi dalam computational thinking?', NULL, 'Meningkatkan kecepatan pemrosesan data', 'Memecah masalah besar menjadi submasalah yang lebih kecil', 'Menyusun ulang kode program', 'Mengimplementasikan algoritma baru', 'Mengoptimalkan penggunaan memori', 'b', NULL, 2, '2024-01-20 05:42:20', '2024-01-20 05:42:20'),
(12, 'Dekomposisi', 'Bagaimana dekomposisi dapat membantu dalam penyelesaian masalah kompleks?', NULL, 'Mengecilkan ukuran masalah', 'Membuat program lebih kompleks', 'Menggabungkan semua aspek masalah', 'Menulis kode tanpa perencanaan', 'Mengabaikan langkah-langkah kecil', 'a', NULL, 2, '2024-01-20 05:42:20', '2024-01-20 05:42:20'),
(13, 'Dekomposisi', 'Apa langkah pertama dalam proses dekomposisi sebuah masalah?', NULL, 'Menggabungkan semua aspek masalah', 'Mengevaluasi kompleksitas waktu eksekusi', 'Menulis kode program utama', 'Membuat daftar submasalah yang harus diselesaikan', 'Mengimplementasikan algoritma baru', 'b', NULL, 2, '2024-01-20 05:42:21', '2024-01-20 05:42:21'),
(14, 'Abstraksi', 'Apa yang dimaksud dengan abstraksi dalam pemrograman?', NULL, 'Proses mencari kesalahan dalam kode', 'Mengecilkan ukuran program', 'Menyembunyikan detail kompleksitas dan fokus pada fitur penting', 'Menulis kode tanpa perencanaan', 'Mengoptimalkan penggunaan memori', 'c', NULL, 2, '2024-01-20 05:42:21', '2024-01-20 05:42:21'),
(15, 'Abstraksi', 'Mengapa abstraksi penting dalam pengembangan perangkat lunak?', NULL, 'Membuat program lebih kompleks', 'Meningkatkan kompleksitas waktu eksekusi', 'Mengurangi keterbacaan kode', 'Mempermudah pemahaman dan pemeliharaan kode', 'Mengabaikan langkah-langkah kecil', 'd', NULL, 2, '2024-01-20 05:42:21', '2024-01-20 05:42:21'),
(16, 'Abstraksi', 'Bagaimana abstraksi membantu dalam pengorganisasian kode program?', NULL, 'Menggabungkan semua aspek program menjadi satu', 'Menyembunyikan fitur-fitur utama', 'Mengecilkan ukuran program secara keseluruhan', 'Meningkatkan reusabilitas kode', 'Menulis kode tanpa perencanaan', 'd', NULL, 2, '2024-01-20 05:42:21', '2024-01-20 05:42:21'),
(17, 'Pengenalan Pola', 'Apa yang dimaksud dengan pengenalan pola dalam konteks komputasi?', NULL, 'Proses mengelompokkan data menjadi kategori tertentu', 'Membaca pola alam secara langsung', 'Menggunakan pola sebagai nama file dalam sistem operasi', 'Menulis kode tanpa perencanaan', 'Menyembunyikan pola dalam pemrograman', 'a', NULL, 2, '2024-01-20 05:42:21', '2024-01-20 05:42:21'),
(18, 'Pengenalan Pola', 'Mengapa pengenalan pola sering digunakan dalam kecerdasan buatan?', NULL, 'Untuk membuat program lebih kompleks', 'Mempermudah pemahaman dan pemeliharaan kode', 'Meningkatkan efisiensi pengembangan', 'Untuk mengidentifikasi pola atau tren dalam data', 'Mengurangi reusabilitas kode', 'd', NULL, 2, '2024-01-20 05:42:21', '2024-01-20 05:42:21'),
(19, 'Algoritma', 'Apa peran utama algoritma dalam computational thinking?', NULL, 'Menyusun ulang kode program', 'Meningkatkan kompleksitas waktu eksekusi', 'Memecahkan masalah dan memberikan langkah-langkah solusi', 'Menulis kode tanpa perencanaan', 'Menggabungkan semua aspek masalah', 'c', NULL, 2, '2024-01-20 05:42:21', '2024-01-20 05:42:21'),
(20, 'Algoritma', 'Mengapa penting untuk merancang algoritma dengan baik dalam pengembangan perangkat lunak?', NULL, 'Untuk membuat program lebih kompleks', 'Meningkatkan kompleksitas waktu eksekusi', 'Menjamin bahwa program tidak akan pernah mengalami kesalahan', 'Memudahkan pengorganisasian kode', 'Mengabaikan perencanaan awal', 'd', NULL, 2, '2024-01-20 05:42:21', '2024-01-20 05:42:21'),
(21, 'Pengenalan Pola', 'Pola?', NULL, 'Ya', 'Pola', 'Apa itu', 'Pengenalan Pola', 'Salah', 'd', NULL, 1, '2024-01-31 06:31:23', '2024-01-31 06:31:23'),
(22, 'Algoritma', 'Dari gambar ini apa itu algoritma?', NULL, 'Algoritma adalah', 'Algoritma', 'Ya', 'Salah', 'Tidak', 'b', NULL, 1, '2024-01-31 06:32:09', '2024-01-31 06:32:09');

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
(1, 1, 'Pengenalan Berpikir Komputasi', 'pengenalan-berpikir-komputasi', 'Pengenalan Berpikir Komputasi', 'Tugas_1_Pengenalan Berpikir Komputasi_1707126611.pdf', '2024-01-31 19:13:00', '2024-01-24 12:19:15', '2024-02-05 09:50:11'),
(2, 2, 'Pengenalan Problem Posing', 'pengenalan-problem-posing', 'Pengenalan Problem Posing', '1706173435.pdf', '2024-02-01 16:03:00', '2024-01-25 09:03:55', '2024-01-25 09:03:55'),
(3, 3, 'Mastering Berpikir Komputasi 1', 'mastering-berpikir-komputasi-1', 'Mastering Berpikir Komputasi 1', '1706534445.pdf', '2024-02-05 20:20:00', '2024-01-29 13:20:45', '2024-01-29 13:20:45'),
(4, 4, 'Mastering Berpikir Komputasi 2', 'mastering-berpikir-komputasi-2', 'Mastering Berpikir Komputasi 2', '1706534462.pdf', '2024-02-05 20:20:00', '2024-01-29 13:21:02', '2024-01-29 13:21:02');

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
(1, 'Miftah Rizky Alamsyah', 'ddf4bd3f-caa8-464f-aef5-a47a98200936', 'miftahrizkyalamsyah@upi.edu', NULL, '$2y$10$Yjlz/px3bi6GqpFD9r9yUO6DEnr8vlV9GHaBhUZ.OO7knh9pm.ZbO', 'wQG6vseW4CySv78s12ajhqRcKbPrpuS36x2oQFA7B2Su6nfFzspZ23ql7Z8r', '2024-01-19 09:53:49', '2024-01-19 09:53:49', 1, NULL, NULL),
(2, 'Jajang Nurjaman', 'a9b63e8d-6591-4d9d-a468-2428c03e2bad', 'bhoysnesia@gmail.com', NULL, '$2y$10$TeMAn8HbuGWynXkJpi/hGusznVFVbjpsqcehfSHAcw1HA8/crxznC', 'YFMFPrgo0E7DcRwBzHmPEYllG2XzMMk7lQW1HRhVE7I4Yy4h7JO9FQXdufF9', '2024-01-19 09:53:49', '2024-05-18 09:42:39', 0, NULL, NULL),
(3, 'Justinus Lhaksana', '0ebfb4ac-a361-4016-9926-e920886e0b6d', 'miftahrizkyalamsyah@protonmail.com', NULL, '$2y$10$AlxalE6Ia3VEcj0RRe1voe9IuMMxaUGd11lkC.9yp3fWHHDPPxDCm', 'azx8OCFI6LbOyIu2aijOXAqnQJ09w1vLAQBwvCSieMreuoiO3Y2qXI5dS6SJ', '2024-01-19 09:53:49', '2024-05-18 09:44:22', 0, NULL, NULL),
(4, 'Eric ten Hag', '79d82d7b-a984-422a-bde5-d400bfb6dda7', 'mailtoandaluzia@gmail.com', NULL, '$2y$10$w4y/nmRSiz9Q0bJE.B4BO.xoO4owDqoGB9mcumO0ZZIR6d3e5avUa', 'moj2AsvfdJn5UMD0xUwe1xr1Oc1PdfUiRwRot9d7Ne6iYznzSiiTOJW7hfWU', '2024-01-20 08:43:01', '2024-05-18 09:43:09', 0, NULL, NULL),
(5, 'Ian MacKaye', '2ce84c22-1963-443a-92ba-c44dfb445f23', 'nrrdynrrdy@gmail.com', NULL, '$2y$10$sBSShZifpGE6J7xXsSbSAeMfu24pOHQcPRo5CIRibcHPVv9zkzkbq', '1uEX1raJs7KKN9DK7LZcviXjcPYBHukUVrBPpJpuoZZ8EABzP6KDyAS6N134', '2024-01-20 08:44:25', '2024-05-18 09:40:38', 0, NULL, NULL),
(6, 'Hayley Williams', '7685f058-e62f-4055-bf11-e4b70923b04a', 'routely@routely.com', NULL, '$2y$10$GLyfppXIYhlXpqQq1Sw/zeX8k2xDp59lDtvPw0uoWlpYfEpnvl0zm', 'aBoeKayqY5JYSafp6LCDp51VLeVfTJNxMcgp8FvTSButdxzue0sBwJDUs2Kp', '2024-01-20 08:46:11', '2024-05-18 09:38:49', 0, NULL, NULL),
(7, 'Kat Moss', 'b79924b9-b4f4-43f9-acc1-bbc83687879e', 'miftahrizkyalamsyah@hotmail.com', NULL, '$2y$10$KbRAVKdVEiYg3CfcpMtHKuDY6UtgOktxL5VHgcNyNtBQCRwI7Ksom', 'rt2YurxqMgAumdDgQE9qkbxC5rYNfg6My1P2PhHUdXv5jS1BznHfnERJl8PN', '2024-01-27 10:08:50', '2024-05-18 09:41:14', 0, NULL, NULL),
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hasil_kuis_siswa`
--
ALTER TABLE `hasil_kuis_siswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `hasil_tes_siswas`
--
ALTER TABLE `hasil_tes_siswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `hasil_tugas_siswas`
--
ALTER TABLE `hasil_tugas_siswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `nilai_tugas`
--
ALTER TABLE `nilai_tugas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pengajuan_masalah`
--
ALTER TABLE `pengajuan_masalah`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

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
