-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2023 at 10:05 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_layanan`
--

-- --------------------------------------------------------

--
-- Table structure for table `aset`
--

CREATE TABLE `aset` (
  `id_aset` int(4) NOT NULL,
  `id_user` int(4) NOT NULL,
  `nama_aset` varchar(225) NOT NULL,
  `jenis_aset` varchar(225) DEFAULT NULL,
  `harga_aset` int(50) DEFAULT NULL,
  `jumlah_aset` int(4) DEFAULT NULL,
  `desc_aset` text DEFAULT NULL,
  `status_kepemilikan` varchar(225) DEFAULT NULL,
  `status_pengajuan` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `belisaham`
--

CREATE TABLE `belisaham` (
  `id_user` int(4) NOT NULL,
  `id_saham` int(4) NOT NULL,
  `tgl_pembelian` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `jasa`
--

CREATE TABLE `jasa` (
  `Id_Jasa` int(4) NOT NULL,
  `Id_User` int(4) DEFAULT NULL,
  `Nama_Jasa` varchar(225) NOT NULL,
  `Jenis_Jasa` varchar(225) NOT NULL,
  `Desc_Jasa` text DEFAULT NULL,
  `Tgl_Pengajuan` date DEFAULT NULL,
  `Status_Jasa` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jasa`
--

INSERT INTO `jasa` (`Id_Jasa`, `Id_User`, `Nama_Jasa`, `Jenis_Jasa`, `Desc_Jasa`, `Tgl_Pengajuan`, `Status_Jasa`) VALUES
(1, NULL, 'Nama', 'Jenis', 'Desc', NULL, 'Status');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_04_03_055415_add_timestamps_to_user', 1);

-- --------------------------------------------------------

--
-- Table structure for table `modal`
--

CREATE TABLE `modal` (
  `id_modal` int(4) NOT NULL,
  `id_user` int(4) NOT NULL,
  `jenis_modal` varchar(225) NOT NULL,
  `desc_modal` text DEFAULT NULL,
  `jumlah_modal` int(50) DEFAULT NULL,
  `status` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `Id_Pembayaran` int(4) NOT NULL,
  `Id_User` int(4) DEFAULT NULL,
  `Jenis_Pembayaran` varchar(225) NOT NULL,
  `Metode_Pembayaran` varchar(225) NOT NULL,
  `Status_Pembayaran` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`Id_Pembayaran`, `Id_User`, `Jenis_Pembayaran`, `Metode_Pembayaran`, `Status_Pembayaran`) VALUES
(1, 3000, 'Tagihan', 'Transfer Bank', 'Lunas'),
(2, 3001, 'Tagihan', 'Transfer Bank', 'Belum Lunas');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED DEFAULT NULL,
  `id_aset` bigint(20) UNSIGNED NOT NULL,
  `tgl_peminjaman` date NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `pinjamaset`
--

CREATE TABLE `pinjamaset` (
  `id_user` int(4) NOT NULL,
  `id_aset` int(4) NOT NULL,
  `tgl_peminjaman` date DEFAULT NULL,
  `tgl_pengembalian` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `saham`
--

CREATE TABLE `saham` (
  `Id_Saham` int(4) NOT NULL,
  `Id_User` int(4) DEFAULT NULL,
  `Nama_Saham` varchar(225) NOT NULL,
  `Jenis_Saham` varchar(225) NOT NULL,
  `Biaya_Saham` int(50) DEFAULT NULL,
  `Status_Saham` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `saham`
--

INSERT INTO `saham` (`Id_Saham`, `Id_User`, `Nama_Saham`, `Jenis_Saham`, `Biaya_Saham`, `Status_Saham`) VALUES
(1, 3002, 'Name', 'Saham Biasa', 1000000, 'Status'),
(4, 3000, 'Name', 'Saham Biasa', 2000000, 'Status');

-- --------------------------------------------------------

--
-- Table structure for table `simpanan`
--

CREATE TABLE `simpanan` (
  `id_simpanan` int(4) NOT NULL,
  `id_user` int(4) NOT NULL,
  `jenis_simpanan` varchar(225) NOT NULL,
  `tgl_awal` date DEFAULT NULL,
  `jumlah_simpanan` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `simpanan`
--

INSERT INTO `simpanan` (`id_simpanan`, `id_user`, `jenis_simpanan`, `tgl_awal`, `jumlah_simpanan`) VALUES
(1, 3000, 'Simpanan Pokok', '2023-03-30', 500000),
(2, 3001, 'Simpanan Pokok', '2023-03-30', 500000),
(3, 3002, 'Simpanan Pokok', '2023-03-30', 500000),
(10, 3003, 'Simpanan Wajib', '2023-04-04', 1230000);

-- --------------------------------------------------------

--
-- Table structure for table `simpanan_old`
--

CREATE TABLE `simpanan_old` (
  `id_simpanan` int(4) NOT NULL,
  `id_user` int(4) NOT NULL,
  `jenis_simpanan` varchar(225) NOT NULL,
  `tgl_awal` date DEFAULT NULL,
  `jumlah_simpanan` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE `surat` (
  `Id_Surat` int(4) NOT NULL,
  `Id_User` int(4) DEFAULT NULL,
  `Jenis_Surat` varchar(225) NOT NULL,
  `Desc_Surat` text DEFAULT NULL,
  `Jenis_Tabungan` varchar(225) DEFAULT NULL,
  `Jenis_Simpanan` varchar(225) DEFAULT NULL,
  `Status` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`Id_Surat`, `Id_User`, `Jenis_Surat`, `Desc_Surat`, `Jenis_Tabungan`, `Jenis_Simpanan`, `Status`) VALUES
(1, NULL, 'Jenisedit', 'Desc', 'Tabungan', 'Simpanan', 'Status');

-- --------------------------------------------------------

--
-- Table structure for table `tabungan`
--

CREATE TABLE `tabungan` (
  `id_tabungan` int(4) NOT NULL,
  `id_user` int(4) NOT NULL,
  `jenis_tabungan` varchar(225) NOT NULL,
  `tgl_awal` date DEFAULT NULL,
  `semester` varchar(225) DEFAULT NULL,
  `golongan_ukt` varchar(225) DEFAULT NULL,
  `paket` varchar(225) DEFAULT NULL,
  `jumlah_tabungan` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(4) NOT NULL,
  `status_user` varchar(225) DEFAULT NULL,
  `username` varchar(225) NOT NULL,
  `no_telp` int(15) DEFAULT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `status_user`, `username`, `no_telp`, `email`, `password`, `created_at`, `updated_at`) VALUES
(3000, 'anggota', 'Ado', 2147483647, 'adi@mail.com', '$2y$10$TUBganA.IN95qF3ILNaCqe5dKzvIfI/wPSdu/OGFyxz1kmcQX1iKi', NULL, '2023-04-02 22:59:46'),
(3001, 'anggota', 'Lia', 2147483647, 'lia@mail.com', 'abcd', NULL, NULL),
(3002, 'anggota', 'Ani', 2147483647, 'ani@mail.com', 'uity', NULL, NULL),
(3003, NULL, 'Budi', NULL, 'budi123@mail.com', '$2y$10$M0T1GTxfLohHP9E2El2eTOcux91ZcP/rUzQu28DoOYkZEt26oKU0m', '2023-04-03 23:54:06', '2023-04-03 23:54:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jasa`
--
ALTER TABLE `jasa`
  ADD PRIMARY KEY (`Id_Jasa`),
  ADD UNIQUE KEY `id_user` (`Id_User`);

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
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`Id_Pembayaran`),
  ADD KEY `Id_User` (`Id_User`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pinjaman_id_user_foreign` (`id_user`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `saham`
--
ALTER TABLE `saham`
  ADD PRIMARY KEY (`Id_Saham`),
  ADD KEY `saham_ibfk_1` (`Id_User`);

--
-- Indexes for table `simpanan`
--
ALTER TABLE `simpanan`
  ADD PRIMARY KEY (`id_simpanan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jasa`
--
ALTER TABLE `jasa`
  MODIFY `Id_Jasa` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `Id_Pembayaran` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `saham`
--
ALTER TABLE `saham`
  MODIFY `Id_Saham` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `simpanan`
--
ALTER TABLE `simpanan`
  MODIFY `id_simpanan` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3004;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`Id_User`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `pinjaman_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `saham`
--
ALTER TABLE `saham`
  ADD CONSTRAINT `saham_ibfk_1` FOREIGN KEY (`Id_User`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `simpanan`
--
ALTER TABLE `simpanan`
  ADD CONSTRAINT `simpanan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
