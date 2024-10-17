-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 17, 2024 at 12:38 PM
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
-- Database: `judgment`
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
(1, 4, 'ddaebbcbdb', 0, 100, 0, 50, 30, 3, 7, 0, 1, '2024-10-14 02:33:50', '2024-10-14 02:33:50'),
(2, 2, 'bcbbedcdNa', 100, 50, 100, 0, 70, 7, 2, 1, 1, '2024-10-17 10:31:07', '2024-10-17 10:31:07'),
(3, 6, 'bcbbNNNcNa', 100, 0, 67, 0, 50, 5, 1, 4, 1, '2024-10-17 10:32:09', '2024-10-17 10:32:09'),
(4, 8, 'bccbebdbNN', 67, 50, 67, 50, 60, 6, 2, 2, 1, '2024-10-17 10:33:36', '2024-10-17 10:33:36'),
(5, 5, 'bcbbeNNbNa', 100, 0, 100, 50, 70, 7, 0, 3, 1, '2024-10-17 10:34:52', '2024-10-17 10:34:52');

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
(1, 'pretest', 'Pretest', '60', '149873', 1, '2024-10-14 01:02:40', '2024-10-14 01:02:40'),
(2, 'posttest', 'Posttest', '60', '116375', 1, '2024-10-14 01:02:40', '2024-10-14 01:41:58');

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
(1, 6, 1, '1', NULL, '2024-10-17 10:35:18', '2024-10-17 10:35:18'),
(2, 2, 1, '1', NULL, '2024-10-17 10:35:18', '2024-10-17 10:35:18'),
(3, 8, 2, '2', NULL, '2024-10-17 10:35:28', '2024-10-17 10:35:28'),
(4, 5, 2, '2', NULL, '2024-10-17 10:35:28', '2024-10-17 10:35:28');

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
(1, 1, 'Konsep Routing  Statis dan Berpikir Komputasi', 'konsep-routing-statis-dan-berpikir-komputasi', 'Foto_Konsep Routing  Statis dan Berpikir Komputasi_1728868317.jpg', 'Materi_Konsep Routing  Statis dan Berpikir Komputasi_1728868317.pdf', 'Pernahkah Anda bertanya-tanya bagaimana pesan yang Anda kirim melalui internet bisa sampai ke tujuan dengan cepat dan tepat? Jawabannya ada pada konsep routing! Dalam materi ini, kita akan masuk ke dalam konsep routing statis, di mana kita akan belajar bagaimana \"mengarahkan\" lalu lintas data di dalam jaringan seolah-olah kita sedang membuat peta jalan. Selain itu, kita juga akan melatih kemampuan berpikir komputasi kita untuk menemukan solusi terbaik dalam berbagai skenario jaringan.', '2024-10-14 01:11:57', '2024-10-14 01:11:57', 0),
(2, 2, 'Konfigurasi Routing Statis', 'konfigurasi-routing-statis', 'Foto_Konfigurasi Routing Statis_1728868406.jpg', 'Materi_Konfigurasi Routing Statis_1728868406.pdf', '\"Konfigurasi Routing Statis\" merupakan bagian penting dalam mengelola jaringan komputer. Dalam modul ini, kita akan membahas berbagai perintah dan konfigurasi yang diperlukan untuk membuat routing statis pada router Cisco IOS. Anda akan mempelajari cara menentukan next hop, subnet mask, dan metric, serta bagaimana mengoptimalkan kinerja jaringan dengan konfigurasi routing yang tepat.', '2024-10-14 01:13:26', '2024-10-14 01:13:26', 0),
(3, 3, 'Mengidentifikasi dan Memperbaiki Masalah Routing Statis', 'mengidentifikasi-dan-memperbaiki-masalah-routing-statis', 'Foto_Mengidentifikasi dan Memperbaiki Masalah Routing Statis_1728868477.jpg', 'Materi_Mengidentifikasi dan Memperbaiki Masalah Routing Statis_1728868477.pdf', '\"Mengidentifikasi dan Memperbaiki Masalah Routing Statis\" merupakan bagian penting dalam menjaga kinerja jaringan. Dalam modul ini, kita akan membahas berbagai teknik troubleshooting yang efektif untuk mengidentifikasi dan memperbaiki masalah routing statis. Anda akan belajar cara menganalisis log sistem, menggunakan perintah debug, dan menerapkan best practice untuk mencegah terjadinya masalah di masa depan.', '2024-10-14 01:14:37', '2024-10-14 01:14:37', 0);

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
(21, '2024_01_24_145427_create_refleksis_table', 1),
(22, '2024_01_25_141517_hasil_tugas_siswa_create', 1),
(23, '2024_01_26_155111_create_nilai_tugas_table', 1),
(24, '2024_02_11_133928_create_pengajuan_masalah_table', 1),
(25, '2024_02_14_165455_create_hasil_apersepsi_siswa_table', 1),
(26, '2024_02_16_154702_create_soal_kuis_table', 1),
(27, '2024_02_16_154711_create_hasil_kuis_siswa_table', 1),
(28, '2024_02_18_173920_create_pertanyaan_pemulihan_table', 1),
(29, '2024_02_18_183925_create_jawaban_pertanyaan_pemulihan_table', 1);

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
(1, 1, NULL, NULL, 0, '2024-10-14 01:02:40', '2024-10-14 01:02:40'),
(2, 2, 70.00, NULL, 70, '2024-10-14 01:02:40', '2024-10-17 10:31:07'),
(3, 3, NULL, NULL, 0, '2024-10-14 01:02:40', '2024-10-14 01:02:40'),
(4, 4, 30.00, NULL, 30, '2024-10-14 02:32:37', '2024-10-14 02:33:50'),
(5, 5, 70.00, NULL, 70, '2024-10-17 10:27:49', '2024-10-17 10:34:52'),
(6, 6, 50.00, NULL, 50, '2024-10-17 10:28:06', '2024-10-17 10:32:09'),
(7, 7, NULL, NULL, 0, '2024-10-17 10:29:42', '2024-10-17 10:29:42'),
(8, 8, 60.00, NULL, 60, '2024-10-17 10:29:54', '2024-10-17 10:33:36');

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
(1, 'pertemuan-ke-1', 1, '2024-11-04', '\"Routing Statis dengan Perspektif Berpikir Komputasi\" adalah agar peserta didik dapat memahami, menerapkan konsep berpikir komputasi dalam penggunaan routing statis, menggunakan alat simulasi, berintegrasi dengan protokol jaringan, menganalisis permasalahan, berkolaborasi dalam tim, mengoptimalkan kinerja jaringan, dan mengembangkan keterampilan berpikir komputasional.', '<p>Bayangkan kamu seorang kurir yang bertugas mengantarkan paket ke berbagai alamat di Kabupaten Bandung Barat. Kamu memiliki peta kabupaten dan daftar alamat tujuan paket.</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>1. Bagaimana cara kalian memastikan bahwa setiap paket sampai ke alamat yang benar?</p>\r\n	</li>\r\n	<li>\r\n	<p>2. Bagaimana jika ada alamat baru yang belum pernah kalian kunjungi sebelumnya?&nbsp;</p>\r\n	</li>\r\n</ul>', '2024-10-14 01:02:40', '2024-10-14 01:03:59'),
(2, 'pertemuan-ke-2', 2, '2024-11-05', '\"Routing Statis dengan Perspektif Berpikir Komputasi\" adalah agar peserta didik dapat memahami, menerapkan konsep berpikir komputasi dalam penggunaan routing statis, menggunakan alat simulasi, berintegrasi dengan protokol jaringan, menganalisis permasalahan, berkolaborasi dalam tim, mengoptimalkan kinerja jaringan, dan mengembangkan keterampilan berpikir komputasional.', '<p>Bayangkan kamu seorang kurir yang bertugas mengantarkan paket ke berbagai alamat di Kabupaten Bandung Barat. Kamu memiliki peta kabupaten dan daftar alamat tujuan paket.</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>1. Bagaimana cara kalian memastikan bahwa setiap paket sampai ke alamat yang benar?</p>\r\n	</li>\r\n	<li>\r\n	<p>2. Bagaimana jika ada alamat baru yang belum pernah kalian kunjungi sebelumnya?&nbsp;</p>\r\n	</li>\r\n</ul>', '2024-10-14 01:02:40', '2024-10-14 01:05:46'),
(3, 'pertemuan-ke-3', 3, '2024-11-06', '\"Routing Statis dengan Perspektif Berpikir Komputasi\" adalah agar peserta didik dapat memahami, menerapkan konsep berpikir komputasi dalam penggunaan routing statis, menggunakan alat simulasi, berintegrasi dengan protokol jaringan, menganalisis permasalahan, berkolaborasi dalam tim, mengoptimalkan kinerja jaringan, dan mengembangkan keterampilan berpikir komputasional.', '<p>Bayangkan kamu seorang kurir yang bertugas mengantarkan paket ke berbagai alamat di Kabupaten Bandung Barat. Kamu memiliki peta kabupaten dan daftar alamat tujuan paket.</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>1. Bagaimana cara kalian memastikan bahwa setiap paket sampai ke alamat yang benar?</p>\r\n	</li>\r\n	<li>\r\n	<p>2. Bagaimana jika ada alamat baru yang belum pernah kalian kunjungi sebelumnya?&nbsp;</p>\r\n	</li>\r\n</ul>', '2024-10-14 01:02:40', '2024-10-14 01:05:29');

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
(1, 4, 1, 'aaa', 'aaa', 'loremipsumloremipsum', 'aaa', 'aaa', '2024-10-14 02:34:46', '2024-10-14 02:34:46'),
(2, 4, 2, NULL, NULL, NULL, NULL, 'aaa', '2024-10-14 02:34:52', '2024-10-14 02:34:52');

-- --------------------------------------------------------

--
-- Table structure for table `soal_kuis`
--

CREATE TABLE `soal_kuis` (
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
  `pertemuan_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `soal_kuis`
--

INSERT INTO `soal_kuis` (`id`, `indikator`, `pertanyaan`, `gambar`, `jawaban_a`, `jawaban_b`, `jawaban_c`, `jawaban_d`, `jawaban_e`, `kunci_jawaban`, `pembahasan`, `pertemuan_id`, `created_at`, `updated_at`) VALUES
(1, 'Dekomposisi', '<div>Pak Toha adalah seorang guru TKJT, ingin mengajarkan siswanya tentang perbedaan routing statis dan dinamis. Ia memberikan tugas kepada siswa untuk merancang jaringan sederhana dengan dua router yang menghubungkan tiga jaringan berbeda. Jaringan pertama memiliki 5 perangkat, jaringan kedua memiliki 10 perangkat, dan jaringan ketiga memiliki 15 perangkat. Pak Toha meminta siswa untuk memilih metode routing yang paling efisien untuk setiap jaringan. Untuk membantu siswa memahami masalah ini, Pak Toha meminta mereka untuk menyederhanakan masalah dengan mengidentifikasi poin-poin penting.&nbsp;<br><br>Manakah di antara opsi berikut yang paling tepat mewakili langkah penyederhanaan masalah ini?</div>', NULL, 'Menghitung total jumlah perangkat dalam jaringan.', 'Mengidentifikasi jenis perangkat yang digunakan dalam jaringan (router, switch, PC).', 'Menentukan alamat IP untuk setiap perangkat dalam jaringan.', 'Mengelompokkan jaringan berdasarkan jumlah perangkat dan kebutuhan konektivitas.', 'Menentukan alamat network tujuan dalam tabel routing untuk setiap perangkat dalam jaringan', 'd', NULL, 1, '2024-10-14 01:02:44', '2024-10-14 01:02:44'),
(2, 'Dekomposisi', '<div>Mas Tejo adalah seorang instruktur jaringan, ingin menguji pemahaman siswa tentang penerapan routing statis. Ia memberikan tugas kepada siswa untuk menghubungkan tiga jaringan berbeda menggunakan tiga router Cisco. Setiap jaringan memiliki beberapa perangkat komputer yang perlu saling berkomunikasi.&nbsp;</div><div>Untuk membantu siswa dalam menyelesaikan tugas ini, Mas Tejo meminta mereka untuk menyederhanakan masalah dengan mengidentifikasi langkah-langkah kunci yang harus diambil. Manakah di antara opsi berikut yang merupakan langkah penyederhanaan yang paling tepat?&nbsp;</div>', NULL, 'Menggambar diagram topologi jaringan yang menunjukkan hubungan antar perangkat dan jaringan.', 'Mengidentifikasi alamat IP dan subnet mask untuk setiap jaringan.', 'Menentukan router mana yang akan menjadi gateway untuk setiap jaringan.', 'Mengkonfigurasi alamat IP pada setiap interface router yang terhubung ke jaringan.', 'Semua langkah di atas adalah langkah penyederhanaan yang tepat', 'e', NULL, 1, '2024-10-14 01:19:15', '2024-10-14 01:19:15'),
(3, 'Pengenalan Pola', '<div>Sebuah kantor memiliki beberapa departemen yang terletak di lantai yang berbeda. Setiap departemen memiliki jaringan lokal sendiri dan terhubung ke jaringan utama melalui switch di setiap lantai. Untuk memastikan karyawan di setiap departemen dapat berkomunikasi dengan departemen lain, administrator jaringan memutuskan untuk menggunakan konsep routing statis.</div><div>Administrator mengamati pola berikut:</div><div>• Jika karyawan di departemen A ingin mengirim email ke karyawan di departemen B, email tersebut harus melewati switch di lantai 1.</div><div>• Jika karyawan di departemen B ingin mengakses file di server departemen C, file tersebut harus melewati switch di lantai 2.</div><div>• Jika karyawan di departemen C ingin mencetak dokumen di printer departemen A, dokumen tersebut harus melewati switch di lantai 1 dan lantai 3.</div><div>Berdasarkan pola ini, administrator jaringan dapat menyimpulkan bahwa:</div>', NULL, 'Setiap departemen harus memiliki koneksi langsung ke semua departemen lain.', 'Switch di setiap lantai berperan sebagai perantara untuk meneruskan lalu lintas antar departemen.', 'Komunikasi antar departemen hanya dapat dilakukan melalui switch di lantai 1.', 'Server departemen C harus dipindahkan ke lantai 1 agar dapat diakses oleh semua departemen.', 'Printer departemen A harus dipindahkan ke lantai 2 agar dapat diakses oleh departemen B.', 'b', NULL, 1, '2024-10-14 01:21:22', '2024-10-14 01:21:22'),
(4, 'Pengenalan Pola', '<div>Sebuah perusahaan memiliki kantor pusat dan dua kantor cabang. Kantor pusat memiliki jaringan dengan alamat IP 192.168.1.0/24, cabang A memiliki jaringan 192.168.2.0/24, dan cabang B memiliki jaringan 192.168.3.0/24. Semua kantor cabang terhubung ke kantor pusat melalui router. Perusahaan ingin menerapkan routing statis untuk memastikan komunikasi antar kantor berjalan lancar. Namun, mereka ingin meminimalkan jumlah entri routing yang perlu dikonfigurasi.&nbsp;<br><br>Manakah dari skenario berikut yang menunjukkan pola penerapan routing statis yang paling efisien dalam kasus ini?&nbsp;</div>', NULL, 'Mengkonfigurasi rute statis di setiap router untuk setiap jaringan tujuan.', 'Mengkonfigurasi rute statis hanya di router kantor pusat, dengan next hop ke masing-masing router cabang.', 'Mengkonfigurasi rute statis hanya di router kantor cabang, dengan next hop ke router kantor pusat.', 'Mengkonfigurasi rute default di semua router, dengan next hop ke router kantor pusat.', 'Mengkonfigurasi rute statis di setiap router, dengan next hop ke router kantor pusat.', 'b', NULL, 1, '2024-10-14 01:22:18', '2024-10-14 01:22:18'),
(5, 'Abstraksi', '<div>Manakah pernyataan berikut yang PALING BENAR mengenai komponen-komponen dalam tabel routing beserta fungsinya dalam menghubungkan beberapa jaringan?</div>', NULL, 'Next Hop selalu merupakan alamat IP dari router yang terhubung langsung ke jaringan tujuan.', 'Subnet Mask digunakan untuk menentukan apakah alamat tujuan berada dalam jaringan lokal atau jaringan remote.', 'Interface menunjukkan protokol jaringan yang digunakan untuk berkomunikasi dengan Next Hop.', 'Network Destination adalah alamat IP dari perangkat tujuan akhir dalam jaringan.', 'Tabel routing hanya digunakan dalam routing dinamis, bukan routing statis.', 'b', NULL, 1, '2024-10-14 01:23:17', '2024-10-14 01:23:17'),
(6, 'Abstraksi', '<div>Sebuah sekolah memiliki beberapa gedung yang terhubung melalui jaringan komputer. Setiap gedung dilengkapi dengan lab komputer yang memiliki jaringan lokal sendiri. Agar lab komputer di berbagai gedung dapat saling terhubung, sekolah memutuskan untuk menggunakan konsep routing statis.</div><div><br>Manakah pernyataan berikut yang paling BENAR mengenai konsep routing statis dalam konteks skenario di atas?</div>', NULL, 'Routing statis secara otomatis menemukan jalur terbaik antara lab komputer di gedung yang berbeda.', 'Routing statis memerlukan pertukaran informasi routing secara terus-menerus antar gedung.', 'Routing statis memungkinkan administrator jaringan untuk menentukan jalur komunikasi yang spesifik antar gedung.', 'Routing statis tidak dapat digunakan jika ada lebih dari dua gedung yang terhubung dalam jaringan.', 'Routing statis hanya dapat digunakan untuk menghubungkan komputer, tidak dapat digunakan untuk menghubungkan perangkat lain seperti printer atau server', 'c', NULL, 1, '2024-10-14 01:24:31', '2024-10-14 01:24:31'),
(7, 'Algoritma', '<div>Mas Tejo adalah seorang administrator jaringan yang ingin menambahkan rute statis baru ke tabel routing pada sebuah router. Untuk melakukannya, ia perlu menentukan beberapa informasi penting.&nbsp;</div><div>1) Menentukan <em>interface</em> yang akan digunakan untuk meneruskan paket data.&nbsp;</div><div>2) Menentukan alamat IP dari <em>next hop</em> atau <em>gateway.&nbsp;</em></div><div>3) Menentukan <em>subnet mask</em> dari jaringan tujuan.</div><div>4) Menentukan alamat jaringan tujuan (<em>network destination</em>).</div><div>Urutkan langkah-langkah di atas dalam urutan yang paling logis untuk mengkonfigurasi rute statis:&nbsp;</div>', NULL, '4, 3, 2, 1', '4, 2, 3, 1', '4, 1, 2, 3', '4, 2, 3, 1', '4, 3, 1, 2', 'a', NULL, 1, '2024-10-14 01:25:48', '2024-10-14 01:25:48'),
(8, 'Dekomposisi', '<div>Anda diberikan tugas oleh guru anda untuk mengonfigurasi sebuah topologi dengan menghubungkannya dengan routing statis. Topologi berupa komputer, switch, router, dan kabel sudah tersedia. Tugas anda adalah menghubungkan seluruh perangkat agar dapat berkomunikasi dengan baik.&nbsp;</div><div>Dari penjelasan di atas, bagaimanakah langkah penyederhanaan permasalahan yang sesuai dengan penjelasan di atas?</div>', NULL, 'Mengaktifkan DHCP di semua perangkat jaringan untuk mendapatkan IP, menambahkan entri routing statis dan next hop', 'Mengganti kabel jaringan jika terjadi masalah konektivitas.', 'Menambahkan ip address, entri routing statis, dan next hop.', 'Melakukan ping ke alamat IP tujuang untuk memastikan konektivitas jaringan.', 'Menggambarkan topologi jaringan, menambahkan perangkat, entri routing statis, dan next hop', 'c', NULL, 2, '2024-10-14 01:26:48', '2024-10-14 01:26:48'),
(9, 'Dekomposisi', '<div>Anda memiliki dua router (R1 dan R2) yang terhubung langsung melalui <em>interface</em> <em>Ethernet</em>. Alamat IP <em>interface</em> R1 adalah 192.168.1.1/24, dan alamat IP <em>interface</em> R2 adalah 192.168.2.1/24.&nbsp;</div><div>Perintah konfigurasi apa yang diperlukan pada R1 agar dapat mengirim paket ke jaringan 192.168.2.0/24?</div>', NULL, 'ip route 192.168.2.0 255.255.255.0 192.168.1.1', 'ip route 192.168.2.0 255.255.255.0 192.168.2.1', 'ip route add 192.168.2.0 255.255.255.0 eth0', 'route add -net 192.168.2.0 netmask 255.255.255.0 gw 192.168.2.1', 'Tidak perlu memerlukan konfigurasi, karena kedua router sudah terhubung langsung.', 'b', NULL, 2, '2024-10-14 01:27:52', '2024-10-14 01:27:52'),
(10, 'Pengenalan Pola', '<div>Seorang administrator jaringan sedang mengkonfigurasi routing statis untuk beberapa router dalam jaringan perusahaan. Ia menemukan pola berikut dalam konfigurasi router:</div><div>• Router 1: ip route 172.16.1.0 255.255.255.0 192.168.10.2 &amp; ip route 172.16.2.0 255.255.255.0 192.168.10.5</div><div>• Router 2: ip route 172.16.3.0 255.255.255.0 192.168.10.2 &amp; ip route 172.16.4.0 255.255.255.0 192.168.10.5</div><div>• Router 3: ip route 172.16.5.0 255.255.255.0 192.168.10.2 &amp; ip route 172.16.6.0 255.255.255.0 192.168.10.5</div><div>Berdasarkan pola yang terlihat dalam konfigurasi tersebut, kesimpulan manakah yang paling mungkin benar?<br><br></div>', NULL, 'Router A dan Router B terhubung langsung ke jaringan 192.168.1.0/24 dan 192.168.3.0/24', 'Router A dan Router B menggunakan protokol routing dinamis untuk mempelajari rute', 'Router A dan Router B menggunakan alamat IP 192.168.100.1 sebagai gateway default', 'Router A dan Router B tidak dapat berkomunikasi satu sama lain', 'Router A dan Router B terhubung ke jaringan yang sama, yaitu 192.168.100.0/24', 'c', NULL, 2, '2024-10-14 01:29:03', '2024-10-14 01:29:03'),
(11, 'Pengenalan Pola', '<div>Seorang administrator jaringan sedang mengkonfigurasi routing statis untuk beberapa router dalam jaringan perusahaan. Ia menemukan pola berikut dalam konfigurasi router:</div><div>• Router 1: ip route 172.16.1.0 255.255.255.0 192.168.10.2 &amp; ip route 172.16.2.0 255.255.255.0 192.168.10.5</div><div>• Router 2: ip route 172.16.3.0 255.255.255.0 192.168.10.2 &amp; ip route 172.16.4.0 255.255.255.0 192.168.10.5</div><div>• Router 3: ip route 172.16.5.0 255.255.255.0 192.168.10.2 &amp; ip route 172.16.6.0 255.255.255.0 192.168.10.5</div><div>Berdasarkan pola yang terlihat dalam konfigurasi tersebut, kesimpulan manakah yang paling mungkin benar?<br><br></div>', NULL, 'Router 1, 2, dan 3 menggunakan 172.16.0.0/16 sebagai next hop untuk mencapai jaringan 192.168.10.0', 'Router 1, 2, dan 3 menggunakan 192.168.10.2 dan 192.168.10.5 sebagai next hop untuk mencapai jaringan 172.16.0.0/16', 'Router 1, 2, dan 3 terhubung langsung ke jaringan 172.16.0.0/16.', 'Router 1, 2, dan 3 tidak dapat berkomunikasi satu sama lain.', 'Router 1, 2, dan 3 memiliki gateway default yang sama.', 'b', NULL, 2, '2024-10-14 01:30:57', '2024-10-14 01:30:57'),
(12, 'Abstraksi', '<div>Perhatikan gambar di atas!</div><div>Anda ingin menghubungkan Ruang 1 dengan Ruang 2. Dari perintah konfigurasi berikut manakah perintah yang BENAR agar Ruang 1 dan Ruang 2 dapat terhubung, serta bagaimana cara memverifikasi konektifitasnya!</div>', 'Gambar Kuis_Pertemuan 2_9604.png', 'Router1: ip route 192.168.2.0 255.255.255.0 192.168.100.2 dan ping 192.168.1.2', 'Router1: ip route 192.168.2.0 255.255.255.0 192.168.100.2 dan ping 192.168.2.2', 'Router1: ip route 192.168.2.0 255.255.255.0 192.168.2.2 dan ping 192.168.1.2', 'Router1: ip route 192.168.2.0 255.255.255.0 192.168.2.2 dan ping 192.168.2.2', 'Router1: ip route 192.168.2.0 255.255.255.0 192.168.1.2 dan ping 192.168.2.2', 'b', NULL, 2, '2024-10-14 01:33:24', '2024-10-14 01:33:24'),
(13, 'Algoritma', '<div>Pratama mendirikan sebuah perusahaan kecil yang memiliki tiga departemen. Terdiri dari departemen Produksi, IT, dan Keuangan. Setiap departemen memiliki jaringan lokalnya sendiri. Departemen Produksi (192.168.10.0/24), Departemen IT (192.168.20.0/24), dan Departemen Keuangan (192.168.30.0/24). Ketiga departemen ini terhubung ke sebuah router pusat.</div><div>Untuk menghubungkan ketiga departemen tersebut, seorang teknisi jaringan perlu mengkonfigurasi routing statis pada router pusat sebagai mana berikut:</div><div>1) Mengkonfigurasi<em> interface</em> pada router pusat yang terhubung ke masing-masing jaringan departemen.&nbsp;</div><div>2) Menguji konektivitas antar departemen menggunakan perintah <em>ping</em>.</div><div>3) Membuat tabel routing statis pada router pusat untuk masing-masing jaringan departemen.</div><div>4) Memeriksa konfigurasi IP address dan <em>subnet mask</em> pada perangkat di masing-masing departemen.</div><div><br>Urutan langkah yang paling tepat untuk melakukan konfigurasi tersebut adalah:</div>', NULL, '4-1-2-3', '4-1-3-2', '4-2-1-3', '4-2-3-1', '4-3-2-1', 'b', NULL, 2, '2024-10-14 01:34:37', '2024-10-14 01:34:37'),
(14, 'Dekomposisi', '<div>Seorang administrator jaringan baru saja mengkonfigurasi routing statis pada sebuah router untuk menghubungkan beberapa jaringan lokal di perusahaan. Untuk memastikan bahwa konfigurasi routing statis telah diterapkan dengan benar dan paket data dapat mencapai tujuannya, administrator tersebut menggunakan perintah <em>ping</em> dari komputer di salah satu jaringan lokal ke suatu perangkat di jaringan lain namun ia melihat pesan “<em>Destination Host Unreachable</em>”.<br> Apa penyederhanaan dari masalah tersebut?</div>', NULL, 'Router tidak memiliki rute ke jaringan tujuan.', 'Perangkat tujuan tidak aktif atau tidak merespons.', 'Terjadi loop routing di jaringan.', 'Terjadi masalah pada kabel atau interface jaringan.', 'Semua jawaban di atas berkemungkinan benar.', 'e', NULL, 3, '2024-10-14 01:35:36', '2024-10-14 01:35:36'),
(15, 'Dekomposisi', '<div>Mas Tejo, seorang administrator jaringan, sedang menghadapi masalah konektivitas yang kompleks di antara beberapa jaringan dalam perusahaan. Mas Tejo menduga masalah ini terkait dengan konfigurasi routing statis pada sebuah router. Masalah ini menyebabkan beberapa perangkat tidak dapat saling berkomunikasi.</div><div>Sederhanakan masalah yang dihadapi Mas Tejo menjadi satu permasalahan inti yang paling mungkin menyebabkan masalah konektivitas tersebut!</div>', NULL, 'Terdapat kesalahan konfigurasi pada tabel routing statis.', 'Terjadi gangguan pada interface fisik router.', 'Ada konflik alamat IP di antara beberapa perangkat.', 'Protokol routing dinamis yang digunakan mengalami gangguan.', 'Terdapat firewall yang memblokir lalu lintas jaringan.', 'a', NULL, 3, '2024-10-14 01:36:34', '2024-10-14 01:36:34'),
(16, 'Pengenalan Pola', '<div>Rafael adalah seorang teknisi jaringan yang sedang melakukan <em>troubleshooting</em> pada dua router yang saling terhubung, yaitu Router A dan Router B, Rafael menggunakan perintah <em>show ip route</em> kepada dua router tersebut yang menghasilkan <em>output</em> sebagai berikut:</div><div>• Output Router A:</div><pre>Router#show ip route<br>S* &nbsp; 10.0.0.0/24 [1/0] via 192.168.1.1, 00:01:32<br>S* &nbsp; 172.16.0.0/24 [1/0] via 192.168.2.1, 00:02:15<br>C&nbsp; &nbsp; &nbsp;192.168.0.0/24 is directly connected, GigabitEthernet0/0</pre><div><br></div><div>• Output Router B:</div><blockquote><blockquote><blockquote><pre>Router#show ip route\r\nS*   192.168.0.0/24 [1/0] via 192.168.1.2, 00:02:30\r\nS*   172.16.10.0/24 [1/0] via 192.168.2.2, 00:01:45\r\nC     10.0.0.0/24 is directly connected, GigabitEthernet0/1\r\n<br></pre></blockquote></blockquote></blockquote><div>Berdasarkan kedua <em>output</em> tersebut apa perbedaan konfigurasi antara Router A dan Router B?</div>', NULL, 'Router A memiliki rute ke jaringan 10.0.0.0, sedangkan router B tidak.', 'Router A memiliki rute ke jaringan 172.16.10.0, sedangkan router B tidak.', 'Kedua router memiliki rute langsung (directly connected) ke jaringan 192.168.0.0/24.', 'Kedua router memiliki rute langsung (directly connected) ke jaringan 10.0.0.0/24.', 'Konfigurasi next hop pada kedua router sepenuhnya sama.', 'b', NULL, 3, '2024-10-14 01:38:45', '2024-10-14 01:38:45'),
(17, 'Abstraksi', '<div>Seorang administrator jaringan sedang melakukan troubleshooting pada jaringan yang menggunakan routing statis. Ia mencoba melakukan ping dari PC di jaringan 192.168.1.0/24 ke server di jaringan 192.168.2.0/24, tetapi <em>ping</em> gagal. Ia juga menjalankan perintah <em>traceroute</em> dan melihat bahwa paket data hanya mencapai router lokal dan tidak diteruskan ke jaringan tujuan.&nbsp;</div><div>Manakah dari pernyataan berikut yang paling BENAR menjadi indikasi adanya masalah routing statis berdasarkan situasi di atas?&nbsp;</div>', NULL, 'Rute statis untuk jaringan default tidak ada atau tidak benar.', 'Rute statis untuk jaringan 192.168.1.0/24 tidak ada atau tidak benar di jaringan lokal.', 'Rute statis untuk jaringan 192.168.1.0/24 tidak ada atau tidak benar di jaringan tujuan.', 'Rute statis untuk jaringan 192.168.2.0/24 tidak ada atau tidak benar di jaringan lokal.', 'Rute statis untuk jaringan 192.168.2.0/24 tidak ada atau tidak benar di jaringan tujuan', 'd', NULL, 3, '2024-10-14 01:39:37', '2024-10-14 01:39:37'),
(18, 'Algoritma', '<div>Mas Tejo adalah seorang administrator jaringan baru saja melakukan perubahan pada konfigurasi routing statis di sebuah router untuk memperbaiki masalah konektivitas. Ia ingin memverifikasi apakah perubahan tersebut berhasil dan konektivitas antar jaringan telah pulih.&nbsp;</div><div>Urutkan langkah-langkah berikut yang paling tepat agar Mas Tejo dapat memverifikasi keberhasilan perbaikan masalah routing statis:&nbsp;</div><div>1) Jalankan perintah <em>ping</em> dari perangkat di satu jaringan ke perangkat di jaringan lain yang sebelumnya tidak dapat dijangkau.&nbsp;</div><div>2) Jalankan perintah <em>traceroute</em> dari perangkat di satu jaringan ke perangkat di jaringan lain untuk melihat jalur yang diambil oleh paket data.&nbsp;</div><div>3) Jalankan perintah <em>show ip route</em> pada router untuk memastikan rute statis yang baru telah ditambahkan atau diperbarui dengan benar.</div><div>Jawaban:</div>', NULL, '1-2-3', '1-3-2', '2-3-1', '3-1-2', '3-2-1', 'd', NULL, 3, '2024-10-14 01:40:33', '2024-10-14 01:40:33');

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
(1, 'Dekomposisi', '<div>Mas Tejo ingin membangun sebuah jaringan di warnetnya ia menggunakan konfigurasi routing statis untuk menghubungkan komputer-komputer di ruangan A dan komputer-komputer di ruangan B ke komputer master yang berada di ruangan C. Setiap ruangan memiliki masing-masing router dan switch, di ruangan A dan B terdapat 20 komputer, sedangkan di ruangan C terdiri dari 1 komputer.&nbsp;</div><div>Bagaimana strategi penyederhanaan pengerjaan tugas-tugas yang harus dilakukan untuk membangun sebuah jaringan berdasarkan penjelasan di atas?&nbsp;</div>', NULL, 'Menyiapkan 3 buah router, 3 buah switch, 40 komputer, menghubungkan tiap komputer ke switch, menghubungkan switch ke router, menghubungkan router ke router lain', 'Menyiapkan 3 buah router, 3 buah switch, 41 komputer, menghubungkan tiap komputer ke switch, menghubungkan switch ke router, menghubungkan router ke router lain', 'Menyiapkan 3 buah router, 3 buah switch, 41 komputer, menghubungkan tiap komputer ke router, menghubungkan switch ke komputer, menghubungkan router ke router lain', 'Menyiapkan 3 buah router, 3 buah switch, 40 komputer, menghubungkan tiap komputer ke router, menghubungkan switch ke komputer, menghubungkan router ke router lain', 'Menyiapkan 3 buah router, 3 buah switch, 41 komputer, menghubungkan tiap komputer ke router, menghubungkan switch ke router, menghubungkan router ke router lain', 'b', NULL, 1, '2024-10-14 01:55:14', '2024-10-14 01:55:14'),
(2, 'Dekomposisi', '<div>Marselino adalah seorang siswa jurusan TKJT, sedang mempelajari tentang routing pada jaringan komputer. Gurunya memberikan tugas untuk menganalisis tabel routing pada sebuah router. Andri melihat tabel routing tersebut berisi informasi seperti <em>network destination</em>, <em>subnet mask</em>, <em>gateway</em>, dan <em>interface</em>. Untuk memulai analisisnya, langkah pertama yang sebaiknya Marselino lakukan untuk menyederhanakan masalah tersebut?</div>', NULL, 'Menghapus beberapa entri yang sekiranya tidak perlu dari tabel routing', 'Mengubah IP pada beberapa entri untuk melihat pengaruhnya pada jalur routing.', 'Mengidentifikasi entri yang memiliki alamat jaringan tujuan yang sama dengan alamat IP router', 'Menambahkan rute statis baru ke dalam tabel routing untuk menguji konektivitas ke jaringan lain', 'Membandingkan tabel routing dengan IP pada setiap perangkat jaringan', 'c', NULL, 1, '2024-10-14 01:56:00', '2024-10-14 01:56:00'),
(3, 'Dekomposisi', '<div>Pak Toha memiliki rumah tiga lantai dengan berbagai ruangan, seperti ruang tamu, kamar tidur, dapur, dan ruang kerja. Ia ingin memasang jaringan internet di seluruh rumah agar semua perangkat dapat terhubung ke internet. Untuk menyederhanakan pemasangan jaringan, Pak Toha memutuskan untuk menggunakan konsep routing statis. Namun, ia merasa kesulitan karena banyaknya ruangan dan perangkat yang harus dihubungkan.</div><div>Manakah dari opsi berikut yang merupakan langkah dekomposisi yang tepat untuk menyederhanakan masalah pemasangan jaringan Pak Toha?</div>', NULL, 'Menentukan tabel routing untuk setiap router yang digunakan pada setiap ruangan yang ingin dihubungkan dengan internet', 'Mengelompokkan ruangan berdasarkan lantai dan menentukan jalur kabel yang optimal untuk setiap kelompok', 'Menghubungkan semua perangkat ke satu router utama tanpa mempertimbangkan lokasi ruangan.', 'Memasang access point di setiap ruangan untuk memperluas jangkauan', 'Menentukan ip address untuk setiap perangkat jaringan', 'b', NULL, 1, '2024-10-14 01:56:46', '2024-10-14 01:56:46'),
(4, 'Pengenalan Pola', '<div>Sebuah perusahaan memiliki kantor pusat dan dua kantor cabang. Kantor pusat memiliki jaringan dengan alamat IP 192.168.1.0/24, cabang A memiliki jaringan 192.168.2.0/24, dan cabang B memiliki jaringan 192.168.3.0/24. Semua kantor cabang terhubung ke kantor pusat melalui router. Perusahaan ingin menerapkan routing statis untuk memastikan komunikasi antar kantor berjalan lancar. Namun, mereka ingin meminimalkan jumlah entri routing yang perlu dikonfigurasi.&nbsp;</div><div>Manakah dari skenario berikut yang menunjukkan pola penerapan routing statis yang paling efisien dalam kasus ini?&nbsp;</div>', NULL, 'Mengkonfigurasi rute statis di setiap router untuk setiap jaringan tujuan', 'Mengkonfigurasi rute statis hanya di router kantor pusat, dengan next hop ke masing-masing router cabang', 'Mengkonfigurasi rute statis hanya di router kantor cabang, dengan next hop ke router kantor pusat', 'Mengkonfigurasi rute default di semua router, dengan next hop ke router kantor pusat', 'Mengkonfigurasi rute statis di setiap router, dengan next hop ke router kantor pusat', 'b', NULL, 1, '2024-10-14 01:57:39', '2024-10-14 01:57:39'),
(5, 'Pengenalan Pola', '<div>Sebuah rumah sakit memiliki dua gedung terpisah, yaitu Gedung A dan Gedung B, yang terhubung melalui jaringan. Setiap gedung memiliki router (Router A dan Router B) dan jaringan lokalnya sendiri (10.1.1.0/24 untuk Gedung A dan 10.1.2.0/24 untuk Gedung B). Administrator jaringan ingin agar dokter di Gedung A dapat mengakses sistem rekam medis pasien yang tersimpan di server di Gedung B.&nbsp;</div><div>Sebuah sekolah memiliki dua jurusan, yaitu Jurusan TKJ dan RPL, yang terhubung melalui jaringan sekolah. Setiap jurusan memiliki router (Router TKJ dan Router RPL) dan jaringan lokalnya sendiri (192.168.10.0/24 untuk jurusan TKJ dan 192.168.20.0/24 untuk Jurusan RPL). Administrator jaringan ingin agar siswa di jurusan RPL dapat mengakses portal sekolah yang dikelola oleh server di jurusan TKJ.&nbsp;</div><div>Apakah kedua permasalahan tersebut memiliki pola penyelesaian yang sama?&nbsp;</div>', NULL, 'Tidak, karena alamat jaringan dan next hop berbeda pada kedua kasus.', 'Ya, karena keduanya menggunakan routing statis untuk menghubungkan dua router dalam dua jaringan yang berbeda', 'Ya, karena keduanya melibatkan konfigurasi rute statis pada router yang sama', 'Tidak, karena topologi jaringan pada kedua kasus berbeda', 'Ya, karena keduanya bertujuan untuk memungkinkan akses ke jaringan lain', 'e', NULL, 1, '2024-10-14 01:58:26', '2024-10-14 01:58:26'),
(6, 'Abstraksi', '<div>Manakah pernyataan berikut yang PALING BENAR mengenai komponen-komponen dalam tabel routing beserta fungsinya dalam menghubungkan beberapa jaringan?</div>', NULL, 'Next Hop selalu merupakan alamat IP dari router yang terhubung langsung ke jaringan tujuan.', 'Subnet Mask digunakan untuk menentukan apakah alamat tujuan berada dalam jaringan lokal atau jaringan remote', 'Interface menunjukkan protokol jaringan yang digunakan untuk berkomunikasi dengan Next Hop.', 'Network Destination adalah alamat IP dari perangkat tujuan akhir dalam jaringan', 'Tabel routing hanya digunakan dalam routing dinamis, bukan routing statis', 'b', NULL, 1, '2024-10-14 01:59:29', '2024-10-14 01:59:29'),
(7, 'Abstraksi', '<div>Sebuah sekolah memiliki beberapa gedung yang terhubung melalui jaringan komputer. Setiap gedung dilengkapi dengan lab komputer yang memiliki jaringan lokal sendiri. Agar lab komputer di berbagai gedung dapat saling terhubung, sekolah memutuskan untuk menggunakan konsep routing statis.</div><div>Manakah pernyataan berikut yang paling BENAR mengenai konsep routing statis dalam konteks skenario di atas?</div>', NULL, 'Routing statis secara otomatis menemukan jalur terbaik antara lab komputer di gedung yang berbeda', 'Routing statis memerlukan pertukaran informasi routing secara terus-menerus antar gedung.', 'Routing statis memungkinkan administrator jaringan untuk menentukan jalur komunikasi yang spesifik antar gedung.', 'Routing statis tidak dapat digunakan jika ada lebih dari dua gedung yang terhubung dalam jaringan.', 'Routing statis hanya dapat digunakan untuk menghubungkan komputer, tidak dapat digunakan untuk menghubungkan perangkat lain seperti printer atau server', 'c', NULL, 1, '2024-10-14 02:00:24', '2024-10-14 02:00:24'),
(8, 'Algoritma', '<div>Perhatikan daftar di bawah ini:</div><div>1) Meneruskan paket data ke <em>next hop</em> melalui <em>interface</em> yang sesuai.</div><div>2) Menerima paket data.</div><div>3) Mencari entri yang paling cocok di tabel routing berdasarkan alamat tujuan paket.&nbsp;</div><div>4) Memeriksa alamat IP tujuan pada paket data.</div><div>Urutkan langkah-langkah yang benar dalam proses yang dilakukan router untuk menentukan jalur pengiriman paket data berdasarkan tabel routing statis:</div>', NULL, '2-4-1-3', '2-4-3-1', '2-3-1-4', '2-3-4-1', '2-1-4-3', 'b', NULL, 1, '2024-10-14 02:01:08', '2024-10-14 02:01:08'),
(9, 'Algoritma', '<div>Seorang administrator jaringan ingin menghubungkan tiga jaringan lokal (LAN) menggunakan routing statis. Setiap LAN memiliki router yang terhubung ke LAN lain melalui kabel serial.&nbsp;</div><div>1) Menentukan alamat IP dan subnet mask untuk setiap interface router.</div><div>2) Mengidentifikasi jaringan tujuan yang perlu dijangkau oleh setiap router.</div><div>3) Menentukan rute default untuk setiap router agar dapat meneruskan paket ke jaringan yang tidak diketahui.</div><div>4) Membuat tabel routing statis pada setiap router dengan memasukkan informasi tentang <em>network destination</em>, <em>subnet mask</em>, dan <em>next hop</em>.</div><div>Urutkan langkah-langkah di atas untuk membuat rencana penerapan routing statis yang tepat!</div>', NULL, '1-2-4-3', '1-4-3-2', '1-3-4-2', '1-2-3-4', '1-3-2-4', 'a', NULL, 1, '2024-10-14 02:02:07', '2024-10-14 02:02:07'),
(10, 'Pengenalan Pola', '<div>Sebuah perusahaan memiliki kantor pusat dan tiga kantor cabang (A, B, dan C) yang terhubung melalui jaringan WAN. Setiap kantor cabang memiliki jaringan lokalnya sendiri dengan <em>subnet</em> yang berbeda. Perusahaan ingin menerapkan routing statis untuk memastikan komunikasi antar kantor berjalan lancar. Berikut adalah beberapa skenario penggunaan routing statis:&nbsp;</div><div>Skenario 1: Mengkonfigurasi rute statis hanya di router kantor pusat, dengan <em>next hop</em> ke masing-masing router cabang.</div><div>Skenario 2: Mengkonfigurasi rute statis di setiap router kantor cabang untuk mengarah ke router tetangga terdekat, dan kemudian ke kantor pusat.&nbsp;</div><div>Skenario 3: Mengkonfigurasi rute statis di setiap router kantor cabang untuk mengarah langsung ke kantor pusat.&nbsp;</div><div>Skenario 4: Mengkonfigurasi <em>rute default</em> di semua router, dengan <em>next hop</em> ke router kantor pusat.</div><div>Manakah dari skenario di atas yang menunjukkan pola penerapan routing statis yang paling tepat dan efisien dalam kasus ini?</div>', NULL, 'Skenario 1', 'Skenario 2', 'Skenario 3', 'Skenario 4', 'Semua skenario sama-sama tepat dan efisien', 'a', NULL, 1, '2024-10-14 02:02:57', '2024-10-14 02:02:57'),
(11, 'Dekomposisi', '<div>Mas Tejo adalah seorang instruktur jaringan, ingin menguji pemahaman siswa tentang penerapan routing statis. Ia memberikan tugas kepada siswa untuk menghubungkan tiga jaringan berbeda menggunakan tiga router Cisco. Setiap jaringan memiliki beberapa perangkat komputer yang perlu saling berkomunikasi.&nbsp;</div><div>Untuk membantu siswa dalam menyelesaikan tugas ini, Mas Tejo meminta mereka untuk menyederhanakan masalah dengan mengidentifikasi langkah-langkah kunci yang harus diambil. Manakah di antara opsi berikut yang merupakan langkah penyederhanaan yang paling tepat?&nbsp;</div>', NULL, 'Menggambar diagram topologi jaringan yang menunjukkan hubungan antar perangkat dan jaringan.', 'Mengidentifikasi alamat IP dan subnet mask untuk setiap jaringan.', 'Menentukan router mana yang akan menjadi gateway untuk setiap jaringan.', 'Mengkonfigurasi alamat IP pada setiap interface router yang terhubung ke jaringan.', 'Semua langkah di atas adalah langkah penyederhanaan yang tepat.', 'e', NULL, 2, '2024-10-17 09:38:19', '2024-10-17 09:38:19'),
(12, 'Dekomposisi', '<div>Perhatikan gambar topologi di atas, tabel routing pada ROUTER1 adalah sebagai berikut:</div><blockquote><blockquote><blockquote><pre><strong><em>Network Destination</em></strong> | <strong><em>Subnet Mask</em></strong> | <strong><em>Next Hop</em></strong><br>192.168.2.0 | 255.255.255.0 | 192.168.100.2<br>192.168.3.0 | 255.255.255.0 | 192.168.100.2</pre></blockquote></blockquote></blockquote><div>Jika sebuah paket data dikirim dari R1PC1 (192.168.1.10) ke R2PC1 (192.168.2.20) bagaimana penyederhanaan masalah dari jalur mana yang akan diambil oleh paket data tersebut berdasarkan tabel routing di atas?</div>', '1729158032.png', 'R1PC1 > ROUTER1 (Fa0/0) > ROUTER2 (Fa0/0) > R2PC1', 'R1PC1 > ROUTER1 (Fa0/1) > ROUTER2 (Fa0/0) > ROUTER2 (Fa0/1) > R2PC2', 'R1PC1 > ROUTER1 (Fa0/1) > ROUTER2 (Fa0/1) > ROUTER2 (Fa0/0) > R2PC2', 'R1PC1 > ROUTER1 (Fa0/0) > ROUTER2 (Fa0/1) > ROUTER2 (Fa0/0) > R2PC2', 'R1PC1 > ROUTER1 (Fa0/1) > ROUTER2 (Fa0/0) > R2PC1', 'e', NULL, 2, '2024-10-17 09:40:32', '2024-10-17 09:40:32'),
(13, 'Pengenalan Pola', '<div>Sebuah kantor memiliki beberapa departemen yang terletak di lantai yang berbeda. Setiap departemen memiliki jaringan lokal sendiri dan terhubung ke jaringan utama melalui switch di setiap lantai. Untuk memastikan karyawan di setiap departemen dapat berkomunikasi dengan departemen lain, administrator jaringan memutuskan untuk menggunakan konsep routing statis.</div><div>Administrator mengamati pola berikut:</div><div><strong><em>•</em></strong> Jika karyawan di departemen A ingin mengirim email ke karyawan di departemen B, email tersebut harus melewati switch di lantai 1.</div><div><strong><em>•</em></strong> Jika karyawan di departemen B ingin mengakses file di server departemen C, file tersebut harus melewati switch di lantai 2.</div><div><strong><em>•</em></strong> Jika karyawan di departemen C ingin mencetak dokumen di printer departemen A, dokumen tersebut harus melewati switch di lantai 1 dan lantai 3.</div><div>Berdasarkan pola ini, administrator jaringan dapat menyimpulkan bahwa:</div>', NULL, 'Setiap departemen harus memiliki koneksi langsung ke semua departemen lain.', 'Switch di setiap lantai berperan sebagai perantara untuk meneruskan lalu lintas antar departemen.', 'Komunikasi antar departemen hanya dapat dilakukan melalui switch di lantai 1.', 'Server departemen C harus dipindahkan ke lantai 1 agar dapat diakses oleh semua departemen.', 'Printer departemen A harus dipindahkan ke lantai 2 agar dapat diakses oleh departemen B.', 'b', NULL, 2, '2024-10-17 09:41:53', '2024-10-17 09:41:53'),
(14, 'Pengenalan Pola', '<div>Sebuah perusahaan memiliki kantor pusat dan dua kantor cabang. Kantor pusat memiliki jaringan dengan alamat IP 192.168.1.0/24, cabang A memiliki jaringan 192.168.2.0/24, dan cabang B memiliki jaringan 192.168.3.0/24. Semua kantor cabang terhubung ke kantor pusat melalui router. Perusahaan ingin menerapkan routing statis untuk memastikan komunikasi antar kantor berjalan lancar. Namun, mereka ingin meminimalkan jumlah entri routing yang perlu dikonfigurasi.&nbsp;</div><div>Manakah dari skenario berikut yang menunjukkan pola penerapan routing statis yang paling efisien dalam kasus ini?</div>', NULL, 'Mengkonfigurasi rute statis di setiap router untuk setiap jaringan tujuan.', 'Mengkonfigurasi rute statis hanya di router kantor pusat, dengan next hop ke masing-masing router cabang.', 'Mengkonfigurasi rute statis hanya di router kantor cabang, dengan next hop ke router kantor pusat.', 'Mengkonfigurasi rute default di semua router, dengan next hop ke router kantor pusat.', 'Mengkonfigurasi rute statis di setiap router, dengan next hop ke router kantor pusat.', 'b', NULL, 2, '2024-10-17 09:42:59', '2024-10-17 09:42:59'),
(15, 'Abstraksi', '<div>Manakah pernyataan berikut yang PALING BENAR mengenai komponen-komponen dalam tabel routing beserta fungsinya dalam menghubungkan beberapa jaringan?</div>', NULL, 'Next Hop selalu merupakan alamat IP dari router yang terhubung langsung ke jaringan tujuan.', 'Subnet Mask digunakan untuk menentukan apakah alamat tujuan berada dalam jaringan lokal atau jaringan remote.', 'Interface menunjukkan protokol jaringan yang digunakan untuk berkomunikasi dengan Next Hop.', 'Network Destination adalah alamat IP dari perangkat tujuan akhir dalam jaringan.', 'Tabel routing hanya digunakan dalam routing dinamis, bukan routing statis.', 'b', NULL, 2, '2024-10-17 09:43:50', '2024-10-17 09:43:50'),
(16, 'Abstraksi', '<div>Perhatikan tabel routing berikut:</div><blockquote><pre><strong><em>Network Destination</em></strong> | <strong><em>Subnet Mask</em></strong> | <strong><em>Next Hop</em></strong> | <strong><em>Interface</em></strong><br>10.0.0.0 | 255.0.0.0 | 10.0.0.1 | eth0<br>172.16.0.0 | 255.255.0.0 | 172.16.1.1 | eth1<br>192.168.10.0 | 255.255.255.0 | 192.168.10.254 | eth2<br>0.0.0.0 | 0.0.0.0 | 192.168.1.1 | eth3</pre></blockquote><div>Berdasarkan informasi di atas, manakah pernyataan berikut yang PALING BENAR mengenai cara router akan meneruskan paket data berdasarkan tabel routing tersebut?</div>', NULL, 'Paket data dengan tujuan 10.0.0.2 akan diteruskan melalui eth0 ke 10.0.0.1.', 'Paket data dengan tujuan 172.16.5.30 akan diteruskan melalui eth1 ke 172.16.1.1.', 'Paket data dengan tujuan 192.168.10.100 akan diteruskan melalui eth2 ke 192.168.10.254.', 'Paket data dengan tujuan 8.8.8.8 (Google DNS) akan diteruskan melalui eth3 ke 192.168.1.1.', 'Semua pernyataan di atas benar.', 'e', NULL, 2, '2024-10-17 09:45:44', '2024-10-17 09:45:44'),
(17, 'Algoritma', '<div>Perhatikan daftar di bawah ini:</div><div>1) Meneruskan paket data ke <em>next hop</em> melalui <em>interface</em> yang sesuai.</div><div>2) Menerima paket data.</div><div>3) Mencari entri yang paling cocok di tabel routing berdasarkan alamat tujuan paket.&nbsp;</div><div>4) Memeriksa alamat IP tujuan pada paket data.</div><div>Urutkan langkah-langkah yang benar dalam proses yang dilakukan router untuk menentukan jalur pengiriman paket data berdasarkan tabel routing statis:</div>', NULL, '2-4-1-3', '2-4-3-1', '2-3-1-4', '2-3-4-1', '2-1-4-3', 'b', NULL, 2, '2024-10-17 09:46:56', '2024-10-17 09:46:56'),
(18, 'Algoritma', '<div>Seorang administrator jaringan ingin menghubungkan tiga jaringan lokal (LAN) menggunakan routing statis. Setiap LAN memiliki router yang terhubung ke LAN lain melalui kabel serial.&nbsp;</div><div>1) Menentukan alamat IP dan subnet mask untuk setiap interface router.</div><div>2) Mengidentifikasi jaringan tujuan yang perlu dijangkau oleh setiap router.</div><div>3) Menentukan rute default untuk setiap router agar dapat meneruskan paket ke jaringan yang tidak diketahui.</div><div>4) Membuat tabel routing statis pada setiap router dengan memasukkan informasi tentang <em>network destination</em>, <em>subnet mask</em>, dan <em>next hop</em>.</div><div>Urutkan langkah-langkah di atas untuk membuat rencana penerapan routing statis yang tepat!</div>', NULL, '1-2-4-3', '1-4-3-2', '1-3-4-2', '1-2-3-4', '1-3-2-4', 'e', NULL, 2, '2024-10-17 09:47:55', '2024-10-17 09:47:55'),
(19, 'Dekomposisi', '<div>Jika dalam tabel routing terdapat <em>next hop</em> yang menunjukkan 10.0.0.1, apa penyederhanaan dan arti tersebut dalam proses pengiriman paket?</div>', NULL, 'Paket akan langsung dikirim ke alamat tujuan akhir.', 'Paket akan dikirim ke router dengan alamat 10.0.0.1 untuk diteruskan.', 'Paket akan melewati 10 router sebelum mencapai tujuan.', 'Paket akan menunggu di router saat ini selama 10 detik.', 'Paket akan dipecah menjadi 10 bagian yang lebih kecil.', 'b', NULL, 2, '2024-10-17 09:50:08', '2024-10-17 09:50:08'),
(20, 'Dekomposisi', '<div>Anda diberikan tugas oleh guru anda untuk mengonfigurasi sebuah topologi dengan menghubungkannya dengan routing statis. Topologi berupa komputer, switch, router, dan kabel sudah tersedia. Tugas anda adalah menghubungkan seluruh perangkat agar dapat berkomunikasi dengan baik.&nbsp;<br>Dari penjelasan di atas, bagaimanakah langkah penyederhanaan permasalahan yang sesuai dengan penjelasan di atas?&nbsp;</div>', NULL, 'Mengaktifkan DHCP di semua perangkat jaringan untuk mendapatkan IP, menambahkan entri routing statis dan next hop.', 'Mengganti kabel jaringan jika terjadi masalah konektivitas.', 'Menambahkan ip address, entri routing statis, dan next hop.', 'Melakukan ping ke alamat IP tujuang untuk memastikan konektivitas jaringan.', 'Menggambarkan topologi jaringan, menambahkan perangkat, entri routing statis, dan next hop', 'c', NULL, 2, '2024-10-17 09:51:23', '2024-10-17 09:51:23'),
(21, 'Pengenalan Pola', '<div>Perhatikan tabel routing pada dua router berbeda di bawah ini:</div><div><strong><em>•</em></strong> Router A: Tujuan 192.168.1.0/24 dengan next hop 192.168.100.2 dan interface eth0/0, Tujuan 192.168.2.0/24 dengan next hop 192.168.100.5 dan interface eth0/1, dan routing terakhir dengan Tujuan 0.0.0.0/0 dengan next hop 192.168.100.1 dan interface eth0/2.</div><div><strong><em>•</em></strong> Router B: Tujuan 192.168.3.0/24 dengan next hop 192.168.100.6 dan interface eth0/0, Tujuan 192.168.4.0/24 dengan next hop 192.168.100.2 dan interface eth0/1, dan routing terakhir dengan Tujuan 0.0.0.0/0 dengan next hop 192.168.100.1 dan interface eth0/2.</div><div>Berdasarkan pola yang terlihat dalam tabel routing, manakah pernyataan berikut yang paling mungkin benar?</div>', NULL, 'Router A dan Router B terhubung langsung ke jaringan 192.168.1.0/24 dan 192.168.3.0/24.', 'Router A dan Router B menggunakan protokol routing dinamis untuk mempelajari rute.', 'Router A dan Router B menggunakan alamat IP 192.168.100.1 sebagai gateway default.', 'Router A dan Router B tidak dapat berkomunikasi satu sama lain.', 'Router A dan Router B terhubung ke jaringan yang sama, yaitu 192.168.100.0/24', 'c', NULL, 2, '2024-10-17 09:53:02', '2024-10-17 09:53:02'),
(22, 'Pengenalan Pola', '<div>Perhatikan konfigurasi routing statis pada beberapa router berikut</div><blockquote><pre><strong>Router</strong> | <strong>Konfigurasi Routing Statis</strong><br>R1 | ip route 172.16.0.0 255.255.255.0 GigabitEthernet0/0<br>R2 | Ip route 172.17.0.0 255.255.255.0 GigabitEthernet0/1<br>R3 | Ip route 192.168.1.0 255.255.255.0 Serial0/0/0</pre></blockquote><div>Berdasarkan pola konfigurasi di atas, manakah konfigurasi routing statis di bawah ini yang paling mungkin digunakan pada R4?</div>', NULL, 'ip route 192.168.1.0 255.255.255.0 Serial0/0/0', 'ip route 192.168.2.0 255.255.255.0 Serial0/0/1', 'ip route 172.18.0.0 255.255.255.0 GigabitEthernet0/2', 'ip route 172.19.0.0 255.255.255.0 GigabitEthernet0/3', 'ip route 172.20.0.0 255.255.255.0 GigabitEthernet0/4', 'b', NULL, 2, '2024-10-17 09:54:12', '2024-10-17 09:54:12'),
(23, 'Abstraksi', '<div>Perhatikan gambar di atas!</div><div>Anda ingin menghubungkan Ruang 1 dengan Ruang 2. Dari perintah konfigurasi berikut manakah perintah yang BENAR agar Ruang 1 dan Ruang 2 dapat terhubung, serta bagaimana cara memverifikasi konektifitasnya!</div>', '1729159199.png', 'Router1: ip route 192.168.2.0 255.255.255.0 192.168.100.2 dan ping 192.168.1.2', 'Router1: ip route 192.168.2.0 255.255.255.0 192.168.100.2 dan ping 192.168.2.2', 'Router1: ip route 192.168.2.0 255.255.255.0 192.168.2.2 dan ping 192.168.1.2', 'Router1: ip route 192.168.2.0 255.255.255.0 192.168.2.2 dan ping 192.168.2.2', 'Router1: ip route 192.168.2.0 255.255.255.0 192.168.1.2 dan ping 192.168.2.2', 'b', NULL, 2, '2024-10-17 09:55:25', '2024-10-17 09:59:59'),
(24, 'Abstraksi', '<div>Seorang administrator jaringan baru saja menyelesaikan konfigurasi routing statis pada sebuah router. Berikut adalah cuplikan dari konfigurasi yang telah dibuat:</div><div><strong><em>•</em></strong> ip route 192.168.10.0 255.255.255.0 172.16.0.2&nbsp;</div><div><strong><em>•</em></strong> ip route 192.168.20.0 255.255.255.0 172.16.0.5&nbsp;</div><div><strong><em>•</em></strong> ip route 0.0.0.0 0.0.0.0 172.16.0.1</div><div>Manakah pernyataan berikut yang PALING BENAR mengenai konfigurasi routing statis di atas?</div>', NULL, 'Router hanya dapat berkomunikasi dengan jaringan 192.168.10.0/24 dan 192.168.20.0/24.', 'Router akan mengirimkan semua paket yang tidak diketahui tujuannya ke alamat 172.16.0.1.', 'Router menggunakan alamat 172.16.0.2 dan 172.16.0.5 sebagai gateway untuk mencapai jaringan lain.', 'Router akan mengirimkan semua paket yang tidak diketahui tujuannya ke alamat 0.0.0.0', 'Router menggunakan alamat 192.168.10.0 dan 192.168.20.0 sebagai gateway untuk mencapai jaringan lain.', 'b', NULL, 2, '2024-10-17 09:56:24', '2024-10-17 09:56:24'),
(25, 'Algoritma', '<div>Perhatikan tabel routing berikut:</div><blockquote><blockquote><blockquote><pre><strong><em>Network Destination</em></strong> | <strong><em>Subnet Mask</em></strong> | <strong><em>Next Hop</em></strong> | <strong><em>Interface</em></strong><br>192.168.100.0 | 255.255.255.0 | 192.168.100.254 | eth0<br>192.168.200.0 | 255.255.255.0 | 192.168.100.254 | eth0<br>10.0.0.0 | 255.255.0.0 | 10.0.0.1 | eth1</pre></blockquote></blockquote></blockquote><div>Berdasarkan informasi di atas, urutkan langkah-langkah yang akan diambil oleh router untuk meneruskan paket jika router tersebut menerima sebuah paket data dengan alamat tujuan 10.10.10.10!</div>', NULL, 'Pertama router menerima paket data dengan alamat tujuan 10.10.10.10, kedua router memeriksa tabel routing untuk mencari entri yang cocok dengan alamat tujuan, ketiga router meneruskan paket data ke 10.0.0.1 melalui interface eth1, dan keempat router menemukan entri yang cocok: 10.0.0.0/255.0.0.0', 'Pertama router menerima paket data dengan alamat tujuan 10.10.10.10, kedua router menemukan entri yang cocok: 10.0.0.0/255.0.0.0, ketiga router memeriksa tabel routing untuk mencari entri yang cocok dengan alamat tujuan, dan keempat router meneruskan paket data ke 10.0.0.1 melalui interface eth1', 'Pertama router menerima paket data dengan alamat tujuan 10.10.10.10, kedua router memeriksa tabel routing untuk mencari entri yang cocok dengan alamat tujuan, ketiga router menemukan entri yang cocok: 10.0.0.0/255.0.0.0, dan keempat router meneruskan paket data ke 10.0.0.1 melalui interface eth1', 'Pertama router menerima paket data dengan alamat tujuan 10.10.10.10, kedua router meneruskan paket data ke 10.0.0.1 melalui interface eth1, ketiga router menemukan entri yang cocok: 10.0.0.0/255.0.0.0, dan keempat router memeriksa tabel routing untuk mencari entri yang cocok dengan alamat tujuan,', 'Pertama router menerima paket data dengan alamat tujuan 10.10.10.10, kedua router meneruskan paket data ke 10.0.0.1 melalui interface eth1, ketiga router memeriksa tabel routing untuk mencari entri yang cocok dengan alamat tujuan, dan keempat router menemukan entri yang cocok: 10.0.0.0/255.0.0.0.', 'c', NULL, 2, '2024-10-17 09:57:40', '2024-10-17 09:57:40');

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
(1, 1, 'Konsep Routing Statis dan Berpikir Komputasi', 'konsep-routing-statis-dan-berpikir-komputasi', 'Konsep Routing Statis dan Berpikir Komputasi', 'Tugas_P1_Konsep Routing Statis dan Berpikir Komputasi_1728868610.docx', '2024-11-04 23:59:00', '2024-10-14 01:16:50', '2024-10-14 01:16:50'),
(2, 2, 'Konfigurasi Routing Statis', 'konfigurasi-routing-statis', 'Konfigurasi Routing Statis', 'Tugas_P2_Konfigurasi Routing Statis_1728868641.docx', '2024-11-05 23:59:00', '2024-10-14 01:17:22', '2024-10-14 01:17:22'),
(3, 3, 'Mengidentifikasi dan Memperbaiki Masalah Routing Statis', 'mengidentifikasi-dan-memperbaiki-masalah-routing-statis', 'Mengidentifikasi dan Memperbaiki Masalah Routing Statis', 'Tugas_P3_Mengidentifikasi dan Memperbaiki Masalah Routing Statis_1728868667.docx', '2024-11-06 23:59:00', '2024-10-14 01:17:47', '2024-10-14 01:17:47');

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
(1, 'Miftah Rizky Alamsyah', '86047f91-ceae-4197-893d-00a306b63bc1', 'miftahrizkyalamsyah@upi.edu', NULL, '$2y$10$t3NDHboN29d4a9BZvG3fJeVqIvFccnKLUH28IgF8yEIwzzEx/oBQu', NULL, '2024-10-14 01:02:40', '2024-10-14 01:02:40', 1, NULL, NULL),
(2, 'Jajang Nurjaman', '1291cd8f-a226-4072-9e9c-1b471122e112', 'bhoysnesia@gmail.com', NULL, '$2y$10$CwX4OepLXioZzH.KeZkkEeE1M.UAcd1lL84HvMHrip0eaonLO/9Vq', NULL, '2024-10-14 01:02:40', '2024-10-17 10:28:34', 0, NULL, NULL),
(3, 'Siswa Dua', 'f2721692-7d63-47ba-b503-23cc717f125f', 'miftahrizkyalamsyah@protonmail.com', NULL, '$2y$10$tXpJ/4EFRStYxT4QM.VT4.vRT9NzQDpcuBBu9xzHkVUf9ydgVmP0e', NULL, '2024-10-14 01:02:40', '2024-10-14 01:02:40', 0, NULL, NULL),
(4, 'Akun SIswa', '4618cacc-8c26-4212-b171-f759b0868226', 'akunsiswa@routely.me', NULL, '$2y$10$/3V0cfp7PAFcBHlhXtc0nuHnZp.OyxI7nOolRX9OfXN.GQrd67E2K', NULL, '2024-10-14 02:32:37', '2024-10-14 02:32:37', 0, NULL, NULL),
(5, 'Hayley Williams', '513190e6-f38a-4324-b400-bb2aad086ab2', 'routely@routely.com', NULL, '$2y$10$hdUWc/eIdCzVaSkbtx2LnOP5HIEnfHbo9ZXQOX/qZSoVJwjfxcSSS', NULL, '2024-10-17 10:27:49', '2024-10-17 10:27:49', 0, NULL, NULL),
(6, 'Eric Ten Hag', '3605075c-6df7-4e5f-b73d-d313f72b39c5', 'mailtoandaluzia@gmail.com', NULL, '$2y$10$j0JmWXvjdTziKZY9Dq4Y5OhgfQObrK5vnRLKc0TYw200qyhNgloza', NULL, '2024-10-17 10:28:06', '2024-10-17 10:28:06', 0, NULL, NULL),
(7, 'Chester Bennington', '07112568-93bd-4d04-a370-244d9ebeccd9', 'depanbelakang@gmail.com', NULL, '$2y$10$5Hz1VuQlFN6.B./JxLyakeoMaY15L.1kZRT3lDQZMtAF9LaR9c17m', NULL, '2024-10-17 10:29:42', '2024-10-17 10:29:42', 0, NULL, NULL),
(8, 'Cheems Balltze', 'd8c5fc9c-a21f-4d42-9c9d-04dddc0a90d3', 'cheemsballtze@gmail.com', NULL, '$2y$10$GK0Kddy80O1oCkD6vU8nSuG3.4qdwVEiG3XjZkSD1SU/VN6sErwHS', NULL, '2024-10-17 10:29:54', '2024-10-17 10:29:54', 0, NULL, NULL);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hasil_apersepsi_siswa`
--
ALTER TABLE `hasil_apersepsi_siswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hasil_kuis_siswa`
--
ALTER TABLE `hasil_kuis_siswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hasil_tes_siswas`
--
ALTER TABLE `hasil_tes_siswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hasil_tugas_siswas`
--
ALTER TABLE `hasil_tugas_siswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jawaban_pertanyaan_pemulihan`
--
ALTER TABLE `jawaban_pertanyaan_pemulihan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori_tes`
--
ALTER TABLE `kategori_tes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kelompoks`
--
ALTER TABLE `kelompoks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lencana`
--
ALTER TABLE `lencana`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `materis`
--
ALTER TABLE `materis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `materi_user`
--
ALTER TABLE `materi_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `nilai_tugas`
--
ALTER TABLE `nilai_tugas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengajuan_masalah`
--
ALTER TABLE `pengajuan_masalah`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pertanyaan_pemulihan`
--
ALTER TABLE `pertanyaan_pemulihan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pertemuans`
--
ALTER TABLE `pertemuans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `refleksis`
--
ALTER TABLE `refleksis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `soal_kuis`
--
ALTER TABLE `soal_kuis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `soal_tes`
--
ALTER TABLE `soal_tes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
