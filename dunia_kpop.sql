-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Okt 2021 pada 10.43
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dunia_kpop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barangs`
--

CREATE TABLE `barangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_album` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Artis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_rilis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `produser` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Genre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `barangs`
--

INSERT INTO `barangs` (`id`, `nama_album`, `gambar`, `harga`, `stock`, `keterangan`, `Artis`, `tanggal_rilis`, `produser`, `Genre`, `created_at`, `updated_at`) VALUES
(1, 'NCT 2020 - RESONANCE pt 1 [ORIGINAL KPOP ALBUM]', '../img/nct1.png', 350000, 2, 'NCT 2020 : RESONANCE Pt. 1 TIMELINE\n\n            NCT 2020 The 1st Album\n            〖 NCT 2020 : RESONANCE Pt. 1 〗\n            Pre-order ➫ 2020.09.21', 'NCT', '12 Oktober 2020', 'Lee Soo man', 'Pop', NULL, '2020-12-20 04:42:45'),
(2, 'NCT 2020 - RESONANCE pt 2 [ORIGINAL KPOP ALBUM]', '../img/nct2.png', 375000, 3, 'NCT 2020 : RESONANCE Pt. 2 TIMELINE\n\n            NCT 2020 The 1st Album\n            〖 NCT 2020 : RESONANCE Pt. 2 〗\n            Pre-order ➫ 2020.11.14', 'NCT', '23 November 2020', 'Lee Soo man', 'K-Pop', NULL, '2020-12-20 04:17:12'),
(3, 'TWICE 9th Mini Album - MORE & MORE', '../img/twice.jpg', 290000, 4, '〖 TWICE 9th Mini Album - MORE & MORE 〗 Pre-order ➫ 2020.06.01', 'TWICE', '1 Juni 2020', 'JYP Entertaiment', 'K-pop, Musik dansa elektro', NULL, '2020-12-20 02:59:23'),
(4, 'The ReVe Festival: Day 2', '../img/rv.jpg', 260000, 5, '〖 The ReVe Festival: Day 2 〗 Pre-order ➫ 2019.08.20', 'Red Velvet', '20 Agustus 2019', 'Lee Soo man', 'K-pop, R&B kontemporer, Doo-wop, Nu-disco', NULL, NULL),
(5, 'GO LIVE', '../img/skz.jpg', 260000, 5, '〖 Stray Kidz - GO LIVE 〗 Pre-order ➫ 2020.06.10', 'Stray Kids', '17 Juni 2020', 'JYP Entertaiment', 'Penyanyi rap, Hip hop', NULL, NULL),
(6, 'i DECIDE', '../img/ikon.jpg', 310000, 6, '〖 IKON - i DECIDE 〗 Pre-order ➫ 2020.01.25', 'IKON', '6 Februari 2020', 'YG Entertaiment', 'K-pop', NULL, NULL),
(7, 'The First Step: Chapter One', '../img/trs.jpg', 310000, 6, '〖 TREASURE The 1st Album - The First Step: Chapter One 〗 Pre-order ➫ 2020.07.25', 'Treasure', '7 Agustus 2020', 'Choice37; Rovin; Hea; S.eA; R. Tee', 'K-pop, Dance/Elektronik', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_12_19_102813_create_barangs_table', 1),
(5, '2020_12_19_103052_create_pesanan_details_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 2),
(8, '2020_12_19_102948_create_pesanans_table', 3);

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
-- Struktur dari tabel `pesanans`
--

CREATE TABLE `pesanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode` int(11) NOT NULL,
  `jumlah_harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pesanans`
--

INSERT INTO `pesanans` (`id`, `user_id`, `tanggal`, `status`, `kode`, `jumlah_harga`, `created_at`, `updated_at`) VALUES
(9, 1, '2020-12-20', '1', 669, 750000, '2020-12-20 03:18:39', '2020-12-20 03:18:48'),
(10, 1, '2020-12-20', '1', 104, 375000, '2020-12-20 04:11:59', '2020-12-20 04:17:12'),
(11, 2, '2020-12-20', '1', 705, 700000, '2020-12-20 04:40:59', '2020-12-20 04:42:45'),
(12, 2, '2021-05-24', '0', 509, 0, '2021-05-23 19:11:06', '2021-05-23 19:11:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan_details`
--

CREATE TABLE `pesanan_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `barang_id` int(11) NOT NULL,
  `pesanan_id` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `jumlah_harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pesanan_details`
--

INSERT INTO `pesanan_details` (`id`, `barang_id`, `pesanan_id`, `jumlah`, `jumlah_harga`, `created_at`, `updated_at`) VALUES
(35, 2, 9, 2, 750000, '2020-12-20 03:18:39', '2020-12-20 03:18:39'),
(37, 2, 10, 1, 375000, '2020-12-20 04:15:20', '2020-12-20 04:15:20'),
(39, 1, 11, 2, 700000, '2020-12-20 04:41:31', '2020-12-20 04:41:31');

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
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_telepon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `alamat`, `no_telepon`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'kimmindae', 'dindajinggan20@gmail.com', NULL, '$2y$10$hLn8STF07poUQXgSH3DCqegeuafVut5kf78/4JVKbd0GlAMorXQJS', 'Jalan Karangsari 10', '081223445981', NULL, '2020-12-19 04:58:23', '2020-12-19 21:30:37'),
(2, 'dinda', 'dindajinggan12@gmail.com', NULL, '$2y$10$uqdVMffLRsybuWGV0kTO.ezBQHEL8x5ifsRyNQCNFaijdmqibieaK', 'Jalan Kenanga', '087756869770', NULL, '2020-12-20 04:40:39', '2020-12-20 04:42:32');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barangs`
--
ALTER TABLE `barangs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

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
-- Indeks untuk tabel `pesanans`
--
ALTER TABLE `pesanans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesanan_details`
--
ALTER TABLE `pesanan_details`
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
-- AUTO_INCREMENT untuk tabel `barangs`
--
ALTER TABLE `barangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pesanans`
--
ALTER TABLE `pesanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `pesanan_details`
--
ALTER TABLE `pesanan_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
