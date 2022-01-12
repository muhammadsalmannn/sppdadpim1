-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jan 2022 pada 09.46
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sppdadpim`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `jabatans`
--

CREATE TABLE `jabatans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jabatans`
--

INSERT INTO `jabatans` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'KEPALA BIRO ADMINISTRASI PIMPINAN', '2022-01-11 23:47:36', '2022-01-11 23:47:36'),
(2, 'KEPALA BAGIAN MATERI DAN KOMUNIKASI PIMPINAN', '2022-01-11 23:47:36', '2022-01-11 23:47:36'),
(3, 'KABAG PROTOKOL', '2022-01-11 23:47:36', '2022-01-11 23:47:36'),
(4, 'KEPALA BAGIAN PERENCANAAN DAN KEPEGAWAIAN SEKRETARIAT  DAERAH', '2022-01-11 23:47:36', '2022-01-11 23:47:36'),
(5, 'KEPALA SUB BAGIAN TAMU', '2022-01-11 23:47:36', '2022-01-11 23:47:36'),
(6, 'KEPALA SUB BAGIAN ACARA', '2022-01-11 23:47:36', '2022-01-11 23:47:36'),
(7, 'KEPALA SUB BAGIAN PERENCANAAN DAN PELAPORAN', '2022-01-11 23:47:36', '2022-01-11 23:47:36'),
(8, 'KEPALA SUB BAGIAN HUBUNGAN KEPROTOKOLAN', '2022-01-11 23:47:36', '2022-01-11 23:47:36'),
(9, 'KEPALA SUB BAGIAN TATA USAHA', '2022-01-11 23:47:36', '2022-01-11 23:47:36'),
(10, 'KEPALA SUB BAGIAN KEPEGAWAIAN', '2022-01-11 23:47:36', '2022-01-11 23:47:36'),
(11, 'PRANATA HUBUNGAN MASYARAKAT AHLI MUDA', '2022-01-11 23:47:37', '2022-01-11 23:47:37'),
(12, 'KEPALA SUB BAGIAN KOMUNIKASI PIMPINAN', '2022-01-11 23:47:37', '2022-01-11 23:47:37'),
(13, 'KEPALA SUB BAGIAN DOKUMENTASI PIMPINAN', '2022-01-11 23:47:37', '2022-01-11 23:47:37'),
(14, 'ANALIS PUBLIKASI', '2022-01-11 23:47:37', '2022-01-11 23:47:37'),
(15, 'KEPALA SUB BAGIAN PENYIAPAN MATERI PIMPINAN', '2022-01-11 23:47:37', '2022-01-11 23:47:37'),
(16, 'ANALIS PROTOKOL', '2022-01-11 23:47:37', '2022-01-11 23:47:37'),
(17, 'PENYUSUN BAHAN INFORMASI DAN PUBLIKASI', '2022-01-11 23:47:37', '2022-01-11 23:47:37'),
(18, 'ANALIS KERJASAMA', '2022-01-11 23:47:37', '2022-01-11 23:47:37'),
(19, 'PENGADMINISTRASI ANALISIS DAN KEMITRAAN MEDIA', '2022-01-11 23:47:37', '2022-01-11 23:47:37'),
(20, 'PENYUSUN PROGRAM ANGGARAN DAN PELAPORAN', '2022-01-11 23:47:37', '2022-01-11 23:47:37'),
(21, 'CALON PENERJEMAH', '2022-01-11 23:47:37', '2022-01-11 23:47:37'),
(22, 'PETUGAS PROTOKOL', '2022-01-11 23:47:37', '2022-01-11 23:47:37'),
(23, 'PRANATA KOMPUTER MAHIR', '2022-01-11 23:47:37', '2022-01-11 23:47:37'),
(24, 'PENGADMINISTRASI PEMERINTAHAN', '2022-01-11 23:47:37', '2022-01-11 23:47:37'),
(25, 'PENGADMINISTRASI UMUM', '2022-01-11 23:47:37', '2022-01-11 23:47:37'),
(26, 'PENGADMINISTRASI KEUANGAN', '2022-01-11 23:47:37', '2022-01-11 23:47:37'),
(27, 'PENGADMINISTRASI PERSURATAN', '2022-01-11 23:47:37', '2022-01-11 23:47:37'),
(28, 'PENGADMINISTRASI RAPAT', '2022-01-11 23:47:37', '2022-01-11 23:47:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kendaraans`
--

CREATE TABLE `kendaraans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kendaraans`
--

INSERT INTO `kendaraans` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Dinas / Umum', '2022-01-11 23:47:38', '2022-01-11 23:47:38'),
(2, 'Mobil Pribadi', '2022-01-11 23:47:38', '2022-01-11 23:47:38'),
(3, 'Mobil Dinas', '2022-01-11 23:47:38', '2022-01-11 23:47:38'),
(4, 'Kereta Rel Listrik', '2022-01-11 23:47:38', '2022-01-11 23:47:38'),
(5, 'Kapal Laut', '2022-01-11 23:47:38', '2022-01-11 23:47:38'),
(6, 'Pesawat', '2022-01-11 23:47:38', '2022-01-11 23:47:38'),
(7, 'Bus', '2022-01-11 23:47:38', '2022-01-11 23:47:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_01_05_041111_create_pegawais_table', 1),
(6, '2022_01_05_041152_create_perjalanans_table', 1),
(7, '2022_01_05_041315_create_pangkats_table', 1),
(8, '2022_01_05_041333_create_jabatans_table', 1),
(9, '2022_01_05_053939_create_surats_table', 1),
(10, '2022_01_05_054449_create_kendaraans_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pangkats`
--

CREATE TABLE `pangkats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `golongan` enum('I','II','III','IV') COLLATE utf8mb4_unicode_ci NOT NULL,
  `ruang` enum('a','b','c','d') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pangkats`
--

INSERT INTO `pangkats` (`id`, `golongan`, `ruang`, `created_at`, `updated_at`) VALUES
(1, 'I', 'a', '2022-01-11 23:47:37', '2022-01-11 23:47:37'),
(2, 'I', 'b', '2022-01-11 23:47:37', '2022-01-11 23:47:37'),
(3, 'I', 'c', '2022-01-11 23:47:37', '2022-01-11 23:47:37'),
(4, 'I', 'd', '2022-01-11 23:47:37', '2022-01-11 23:47:37'),
(5, 'II', 'a', '2022-01-11 23:47:37', '2022-01-11 23:47:37'),
(6, 'II', 'b', '2022-01-11 23:47:37', '2022-01-11 23:47:37'),
(7, 'II', 'c', '2022-01-11 23:47:37', '2022-01-11 23:47:37'),
(8, 'II', 'd', '2022-01-11 23:47:37', '2022-01-11 23:47:37'),
(9, 'III', 'a', '2022-01-11 23:47:37', '2022-01-11 23:47:37'),
(10, 'III', 'b', '2022-01-11 23:47:38', '2022-01-11 23:47:38'),
(11, 'III', 'c', '2022-01-11 23:47:38', '2022-01-11 23:47:38'),
(12, 'III', 'd', '2022-01-11 23:47:38', '2022-01-11 23:47:38'),
(13, 'IV', 'a', '2022-01-11 23:47:38', '2022-01-11 23:47:38'),
(14, 'IV', 'b', '2022-01-11 23:47:38', '2022-01-11 23:47:38'),
(15, 'IV', 'c', '2022-01-11 23:47:38', '2022-01-11 23:47:38'),
(16, 'IV', 'd', '2022-01-11 23:47:38', '2022-01-11 23:47:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawais`
--

CREATE TABLE `pegawais` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pangkat_id` bigint(20) UNSIGNED NOT NULL,
  `jabatan_id` bigint(20) UNSIGNED NOT NULL,
  `pengikut_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pegawais`
--

INSERT INTO `pegawais` (`id`, `pangkat_id`, `jabatan_id`, `pengikut_id`, `nama`, `nip`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, 'MUHAMMAD SALMAN', '081254759189', '2022-01-12 00:20:58', '2022-01-12 00:20:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perjalanans`
--

CREATE TABLE `perjalanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kendaraan_id` bigint(20) UNSIGNED NOT NULL,
  `lama_perjalanan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_berangkat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Samarinda',
  `tempat_tujuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_berangkat` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `perjalanans`
--

INSERT INTO `perjalanans` (`id`, `kendaraan_id`, `lama_perjalanan`, `tempat_berangkat`, `tempat_tujuan`, `tanggal_berangkat`, `tanggal_kembali`, `created_at`, `updated_at`) VALUES
(1, 1, '3', 'Samarinda', 'Bandung', '2022-01-12', '2022-01-14', '2022-01-12 00:21:19', '2022-01-12 00:21:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `surats`
--

CREATE TABLE `surats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `pegawai_id` bigint(20) UNSIGNED NOT NULL,
  `perjalanan_id` bigint(20) UNSIGNED NOT NULL,
  `nomor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uraian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `surats`
--

INSERT INTO `surats` (`id`, `user_id`, `pegawai_id`, `perjalanan_id`, `nomor`, `uraian`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '090.1/123/B.Adpim-II', '<div><strong>salman</strong></div>', '2022-01-12 00:21:40', '2022-01-12 00:21:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Biro Administrasi Pimpinan', 'admin.adpim@gmail.com', '2022-01-11 23:47:34', '$2y$10$ndv8RHc8gqLZN752T9zWFuTYpNob./XNcYH8YODAuR/Q57D2ECJPG', 1, 'mhqCxGEyYd', '2022-01-11 23:47:34', '2022-01-11 23:47:34'),
(2, 'Mrs. Ariane Crist', 'prosacco.tremaine@example.com', '2022-01-11 23:47:36', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'P3MNly5Li8', '2022-01-11 23:47:36', '2022-01-11 23:47:36'),
(3, 'Margie Towne', 'olaf46@example.com', '2022-01-11 23:47:36', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'VmbruL4EAz', '2022-01-11 23:47:36', '2022-01-11 23:47:36'),
(4, 'Luciano Kassulke', 'jamar45@example.net', '2022-01-11 23:47:36', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'bYzj3v6wKF', '2022-01-11 23:47:36', '2022-01-11 23:47:36'),
(5, 'Prof. Maxwell Altenwerth Sr.', 'bogan.kristina@example.org', '2022-01-11 23:47:36', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'FWTYcFcCCA', '2022-01-11 23:47:36', '2022-01-11 23:47:36');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jabatans`
--
ALTER TABLE `jabatans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kendaraans`
--
ALTER TABLE `kendaraans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pangkats`
--
ALTER TABLE `pangkats`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pegawais`
--
ALTER TABLE `pegawais`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pegawais_nip_unique` (`nip`);

--
-- Indeks untuk tabel `perjalanans`
--
ALTER TABLE `perjalanans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `surats`
--
ALTER TABLE `surats`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jabatans`
--
ALTER TABLE `jabatans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `kendaraans`
--
ALTER TABLE `kendaraans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pangkats`
--
ALTER TABLE `pangkats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `pegawais`
--
ALTER TABLE `pegawais`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `perjalanans`
--
ALTER TABLE `perjalanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `surats`
--
ALTER TABLE `surats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
