-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jun 2021 pada 16.58
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kanwilbpnaceh`
--

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
-- Struktur dari tabel `inventaris`
--

CREATE TABLE `inventaris` (
  `id` int(20) NOT NULL,
  `Nama_Barang` varchar(255) NOT NULL,
  `No_Aset` varchar(255) NOT NULL,
  `Tgl_Peroleh` date NOT NULL,
  `Asal_Perolehan` varchar(255) NOT NULL,
  `Rupiah_Aset` varchar(255) NOT NULL,
  `Tempat_Aset` varchar(255) NOT NULL,
  `Merk_Barang` varchar(255) NOT NULL,
  `Kondisi` varchar(255) NOT NULL,
  `Image` text NOT NULL,
  `created_at` datetime(6) NOT NULL,
  `updated_at` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `inventaris`
--

INSERT INTO `inventaris` (`id`, `Nama_Barang`, `No_Aset`, `Tgl_Peroleh`, `Asal_Perolehan`, `Rupiah_Aset`, `Tempat_Aset`, `Merk_Barang`, `Kondisi`, `Image`, `created_at`, `updated_at`) VALUES
(2, 'Mini Bus', '002', '2012-07-20', 'Hibah BRR', '268,000,000', 'bidang 3', 'Nissan Kingsroad', 'bagus', 'IMSNEW.png', '2021-01-08 03:23:37.000000', '2021-06-07 11:40:37.000000'),
(6, 'Arif', '0007', '2021-05-11', 'kbma', '122222', 'jhsa', 'ssd', 'bagus', 'VB Kampus 3.jpg', '2021-05-28 13:50:15.000000', '2021-05-28 13:50:15.000000');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('lisanmoe2018@gmail.com', '$2y$10$fq4JIOlEnC5ljBW.oUhKfuqwpi1p/gZBUSPeFJBIQx86wUTt.zvJ6', '2021-04-28 10:42:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna_bidang`
--

CREATE TABLE `pengguna_bidang` (
  `Kode_Bidang` int(10) NOT NULL,
  `Nama_Bidang` varchar(255) NOT NULL,
  `Kode_Aset` varchar(255) NOT NULL,
  `Nama_Barang` varchar(255) NOT NULL,
  `Kategori` varchar(255) NOT NULL,
  `Kondisi` varchar(255) NOT NULL,
  `Image` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengguna_bidang`
--

INSERT INTO `pengguna_bidang` (`Kode_Bidang`, `Nama_Bidang`, `Kode_Aset`, `Nama_Barang`, `Kategori`, `Kondisi`, `Image`, `created_at`, `updated_at`) VALUES
(1, 'Bagian Tata Usaha Kanwil Aceh', '0987654', 'Komputer', 'Elektronik', 'bagus', '60.jpg', '2021-02-27 17:52:19', '2021-02-27 17:52:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna_pegawai`
--

CREATE TABLE `pengguna_pegawai` (
  `NRP_NIK` int(15) NOT NULL,
  `Nama_Pegawai_PPNPN` varchar(255) NOT NULL,
  `Bidang` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `Kode_Aset` varchar(255) NOT NULL,
  `Nama_Barang` varchar(255) NOT NULL,
  `Kategori` varchar(255) NOT NULL,
  `Kondisi` varchar(50) NOT NULL,
  `Image` text NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengguna_pegawai`
--

INSERT INTO `pengguna_pegawai` (`NRP_NIK`, `Nama_Pegawai_PPNPN`, `Bidang`, `Status`, `Kode_Aset`, `Nama_Barang`, `Kategori`, `Kondisi`, `Image`, `updated_at`, `created_at`) VALUES
(123456, 'Rendy', 'Bagian Tata Usaha Kanwil Aceh', 'Pegawai', '0987654', 'Komputer', 'Elektronik', 'Bagus', 'toraja.jpg', '2021-02-27 18:03:23', '2021-02-27 18:03:23');

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'KANWILBPNACEH', 'kanwilbpnaceh@gmail.com', NULL, '$2y$10$IhP.OxpHLBj73ZD.9NxnNeMXfhsEFbUmqfOKMv05ccS1kkSxQ875u', '2bH9ICbpNP3uDSgzZzdtFBoecEFLR4DORbGdUUP9119GBoFf17rH8shO3hxR', '2021-05-24 01:09:42', '2021-05-24 01:09:42');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `inventaris`
--
ALTER TABLE `inventaris`
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
-- Indeks untuk tabel `pengguna_bidang`
--
ALTER TABLE `pengguna_bidang`
  ADD PRIMARY KEY (`Kode_Bidang`);

--
-- Indeks untuk tabel `pengguna_pegawai`
--
ALTER TABLE `pengguna_pegawai`
  ADD PRIMARY KEY (`NRP_NIK`);

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
-- AUTO_INCREMENT untuk tabel `inventaris`
--
ALTER TABLE `inventaris`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
