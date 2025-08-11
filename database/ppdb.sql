-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Nov 2023 pada 13.10
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata`
--

CREATE TABLE `biodata` (
  `id` int(10) UNSIGNED NOT NULL,
  `users` bigint(20) UNSIGNED NOT NULL,
  `nama_panggilan` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tmp_lahir` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jns_kelamin` enum('Laki-laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `anak_ke` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jml_sdr_kandung` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jml_sdr_tiri` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `biodata`
--

INSERT INTO `biodata` (`id`, `users`, `nama_panggilan`, `tmp_lahir`, `tgl_lahir`, `jns_kelamin`, `anak_ke`, `jml_sdr_kandung`, `jml_sdr_tiri`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 2, 'Risa', 'Gresik', '2008-10-21', 'Perempuan', '1', '1', '0', 'sidayu gresik', '2023-10-31 02:10:39', '2023-10-31 02:10:39'),
(2, 5, 'Risa', 'Gresik', '2023-11-15', 'Laki-laki', '1', '1', '0', 'sidayu gresik', '2023-11-25 08:03:38', '2023-11-25 08:03:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dataortu`
--

CREATE TABLE `dataortu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users` bigint(20) UNSIGNED NOT NULL,
  `nama_ayah` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ktp_ayah` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tmp_lahir_ayah` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir_ayah` date NOT NULL,
  `pendidikan_ayah` enum('SD/MI','SMP/MTs','SMA/SMK/MA','Diploma','S1','S2','S3') COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan_ayah` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama_ayah` enum('Islam','Budha','Kristen','Hindu','Khonghucu','Katolik') COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_ayah` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ibu` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ktp_ibu` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tmp_lahir_ibu` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir_ibu` date NOT NULL,
  `pendidikan_ibu` enum('SD/MI','SMP/MTs','SMA/SMK/MA','Diploma','S1','S2','S3') COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan_ibu` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama_ibu` enum('Islam','Budha','Kristen','Hindu','Khonghucu','Katolik') COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_ibu` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kk` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_wali` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tmp_lahir_wali` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir_wali` date NOT NULL,
  `pekerjaan_wali` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama_wali` enum('Islam','Budha','Kristen','Hindu','Khonghucu','Katolik') COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_wali` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_hp` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dataortu`
--

INSERT INTO `dataortu` (`id`, `users`, `nama_ayah`, `ktp_ayah`, `tmp_lahir_ayah`, `tgl_lahir_ayah`, `pendidikan_ayah`, `pekerjaan_ayah`, `agama_ayah`, `alamat_ayah`, `nama_ibu`, `ktp_ibu`, `tmp_lahir_ibu`, `tgl_lahir_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `agama_ibu`, `alamat_ibu`, `kk`, `nama_wali`, `tmp_lahir_wali`, `tgl_lahir_wali`, `pekerjaan_wali`, `agama_wali`, `alamat_wali`, `nomor_hp`, `created_at`, `updated_at`) VALUES
(1, 2, 'ayah', '5434223423243343', 'Gresik', '1978-02-19', 'SMA/SMK/MA', 'Wiraswasta', 'Islam', 'sidayu gresik', 'ibu', '5434223423243349', 'Gresik', '1980-12-19', 'SMA/SMK/MA', 'ibu rumah tangga', 'Islam', 'sidayu gresik', '5434223423243342', 'ayah', 'Gresik', '1978-02-19', 'Wiraswasta', 'Islam', 'sidayu gresik', '080987890987', '2023-10-31 02:12:43', '2023-10-31 02:12:43'),
(2, 5, 'ayah', '5434223423243343', 'Gresik', '2023-11-03', 'SD/MI', 'Wiraswasta', 'Islam', 'sidayu gresik', 'ibu', '5434223423243349', 'Gresik', '2023-11-01', 'SD/MI', 'ibu rumah tangga', 'Islam', 'sidayu gresik', '5434223423243342', 'ayah', 'Gresik', '2023-11-08', 'Wiraswasta', 'Islam', 'sidayu gresik', '085810366264', '2023-11-25 08:04:05', '2023-11-25 08:04:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datapendukung`
--

CREATE TABLE `datapendukung` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users` bigint(20) UNSIGNED NOT NULL,
  `asal_sekolah` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_sekolah` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npsn_sekolah` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kip` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kps` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kks` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pkh` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `datapendukung`
--

INSERT INTO `datapendukung` (`id`, `users`, `asal_sekolah`, `alamat_sekolah`, `npsn_sekolah`, `kip`, `kps`, `kks`, `pkh`, `created_at`, `updated_at`) VALUES
(1, 2, 'MA', 'sidayu gresik', '6545345', '987654678', NULL, NULL, NULL, '2023-10-31 02:13:10', '2023-10-31 02:13:10'),
(2, 5, 'MA', 'sidayu gresik', '6545345', '987654678', NULL, NULL, NULL, '2023-11-25 08:04:16', '2023-11-25 08:04:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `infosekolah`
--

CREATE TABLE `infosekolah` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users` bigint(20) UNSIGNED NOT NULL,
  `nama_kepsek` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_sekolah` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npsn_sekolah` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nsm_sekolah` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `akreditasi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_sekolah` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_sekolah` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp_sekolah` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visi` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `misi` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thn_ajaran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `infosekolah`
--

INSERT INTO `infosekolah` (`id`, `users`, `nama_kepsek`, `nama_sekolah`, `npsn_sekolah`, `nsm_sekolah`, `akreditasi`, `alamat_sekolah`, `email_sekolah`, `telp_sekolah`, `status`, `visi`, `misi`, `thn_ajaran`, `created_at`, `updated_at`) VALUES
(1, 1, 'MASKHANAH, M.Pd', 'MI MIFTAHUL ULUM III', '60718945', '111235250311', 'A', 'Pereng Kulon Melirang Bungah Gresik', 'mimu3pk@gmail.com', '085748000337', 'Terakreditasi', 'Visi Madrasah : “Terwujudnya Lulusan yang berkualitas dalam bidang Akademik  dan Non Akademik, Berakhlaqul Karimah, Bertaqwa kepada Allah swt serta terciptanya lingkungan yang Asri ”.', 'a. Melaksanakan PBM yang berkualitas dan efektif\r\nb. semangat belajar secara intensif kepada seluruh siswa.\r\nc. Melaksanakan kegiatan keterampilan, sehingga dapat menciptakan lulusan yang tangguh dalam menghadapi tantangan zaman.\r\nd. Menjadikan anak yang berkepribadian baik.\r\ne. Menjadikan lulusan yang taat beribadah dan bertaqwa kepada Tuhan Yang Maha Esa.\r\nf. Mengembangkan potensi siswa dalam bidang akademik maupun non akademik.\r\ng. Mewujudkan lingkungan yang nyaman dan rindang.', '2023/2024', '2023-10-31 02:06:37', '2023-11-17 02:45:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(5, '2022_07_08_063613_alter_users', 1),
(6, '2022_07_08_064219_add_photo', 1),
(7, '2022_07_08_113607_add_id_registrasi', 1),
(8, '2022_07_08_200005_create__biodata_table', 1),
(9, '2022_07_09_211945_create_dataortu_table', 1),
(10, '2022_07_10_113646_create_datapendukung_table', 1),
(11, '2022_07_11_205029_add_role_users', 1),
(12, '2022_07_19_183913_create_infosekolah_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nisn` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_registrasi` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `nisn`, `email`, `id_registrasi`, `email_verified_at`, `password`, `photo`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', '1', 'admin2403@gmail.com', '0', '2023-10-17 03:29:16', '$2y$10$NJxLbKM2uU8deN2DSIUikuBKpkQmIJOOAvZQwN9wr7QW/nl/FWdYq', 'uploads/logo.png', 'Io3wP5ycyaV3WvZXHQKFpkpH4qwJdqsf6WY3Cd0kc71HsKfJVE3Ay9djcFyE', '2023-10-17 03:29:16', '2023-11-17 02:48:39'),
(2, 2, 'Rizqiyatul Khurriyah', '1912110013', 'rikhurriyah@gmail.com', 'DAF-20231031090910', NULL, '$2y$10$GNgxlKVuHP/HPivAzdFLhOUpiEVZiDWdnB8Ho4R9Bqhl3QTozjYw6', 'uploads/mind map4.jpg', NULL, NULL, NULL),
(5, 2, 'risa', '1912110031', 'risa@gmail.com', 'DAF-20231125150252', NULL, '$2y$10$rVA0OorZFt7Oy3p6Pi0yYur9UAaMbgxf1VmfeQ5p7QWD7oxAz8yPy', 'uploads/WhatsApp Image 2023-11-20 at 13.00.03.jpeg', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`),
  ADD KEY `biodata_users_foreign` (`users`);

--
-- Indeks untuk tabel `dataortu`
--
ALTER TABLE `dataortu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dataortu_users_foreign` (`users`);

--
-- Indeks untuk tabel `datapendukung`
--
ALTER TABLE `datapendukung`
  ADD PRIMARY KEY (`id`),
  ADD KEY `datapendukung_users_foreign` (`users`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `infosekolah`
--
ALTER TABLE `infosekolah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `infosekolah_users_foreign` (`users`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT untuk tabel `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `dataortu`
--
ALTER TABLE `dataortu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `datapendukung`
--
ALTER TABLE `datapendukung`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `infosekolah`
--
ALTER TABLE `infosekolah`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `biodata`
--
ALTER TABLE `biodata`
  ADD CONSTRAINT `biodata_users_foreign` FOREIGN KEY (`users`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `dataortu`
--
ALTER TABLE `dataortu`
  ADD CONSTRAINT `dataortu_users_foreign` FOREIGN KEY (`users`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `datapendukung`
--
ALTER TABLE `datapendukung`
  ADD CONSTRAINT `datapendukung_users_foreign` FOREIGN KEY (`users`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `infosekolah`
--
ALTER TABLE `infosekolah`
  ADD CONSTRAINT `infosekolah_users_foreign` FOREIGN KEY (`users`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
