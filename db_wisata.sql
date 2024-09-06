-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2024 at 05:26 PM
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
-- Database: `db_wisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `desas`
--

CREATE TABLE `desas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_desa` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `luas_wilayah` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `kecamatans_id` int(10) UNSIGNED DEFAULT NULL
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
-- Table structure for table `infotanahs`
--

CREATE TABLE `infotanahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_tanah` varchar(255) NOT NULL,
  `ketinggian` varchar(255) NOT NULL,
  `kelembaban` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(1, 'Rekreasi', '2024-08-24 16:31:33', '2024-08-24 16:31:33'),
(2, 'pantai', '2024-08-24 16:31:43', '2024-08-24 16:31:43'),
(3, 'Anjayy', '2024-08-24 12:17:28', '2024-08-24 12:26:31'),
(5, 'GUNung', '2024-08-25 07:41:12', '2024-08-25 07:41:12'),
(6, 'KAraoke', '2024-08-25 10:01:55', '2024-08-25 10:01:55');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatans`
--

CREATE TABLE `kecamatans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kecamatan` varchar(255) NOT NULL,
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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_08_025924_create_infotanahs_table', 1),
(6, '2022_11_09_135725_create_table_desas', 1),
(7, '2022_11_09_135819_create_desas_table', 1),
(8, '2022_11_09_140852_create_kecamatans_table', 1),
(9, '2022_11_09_142119_add_kecamatans_id_to_desas_table', 1),
(10, '2022_11_11_114455_create_pemiliklahans_table', 1),
(11, '2022_11_12_113430_create_potensis_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pemiliklahans`
--

CREATE TABLE `pemiliklahans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pemiliklahan` varchar(255) NOT NULL,
  `alamat_pemiliklahan` varchar(255) NOT NULL,
  `no_hp_pemiliklahan` varchar(255) NOT NULL,
  `email_pemiliklahan` varchar(255) NOT NULL,
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
-- Table structure for table `potensis`
--

CREATE TABLE `potensis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `desa_id` int(11) NOT NULL,
  `pemiliklahan_id` int(11) NOT NULL,
  `infotanah_id` int(11) NOT NULL,
  `luas_lahan` int(11) NOT NULL,
  `batas_lahan` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `potensi_wisata`
--

CREATE TABLE `potensi_wisata` (
  `id` int(11) NOT NULL,
  `wisata_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `potensi_wisata`
--

INSERT INTO `potensi_wisata` (`id`, `wisata_id`, `kategori_id`, `deskripsi`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(7, 9, 1, 'Curug Tirta Muncar punya keindahan yang masih sangat alami. Tak banyak wisatawan yang mengetahui tempat wisata ini. Pasalnya, akses menuju ke sini cukup sulit dengan medan curam dan licin. Padahal, saat sampai di tempat tersebut, keindahan dan segarnya air terjun akan langsung menyambutmu.\r\nLokasi: Desa Curugmuncar, Kecamatan Petungkriono, Kabupaten Pekalongan, Jawa Tengah. Jam operasional: 24 jam. Harga: Rp5.000', '-7.079035434234038', '109.72415105325625', '2024-08-25 16:14:16', '2024-08-25 16:14:16'),
(8, 10, 1, 'Saat mengunjungi telaga ini, udara dingin langsung menyapamu. Lokasinya berada di ketinggian sekitar 2.000 meter di atas permukaan laut.\n\nTak hanya udara sejuk yang bikin betah, kamu juga bisa bermain-main naik perahu. Biaya naik perahunya murah banget, cuma Rp5.000.\n\nLokasi: Desa Tlogohendro, Kecamatan Petungkriono, Kabupaten Pekalongan, Jawa Tengah\n\nJam operasional: 08.00-17.00 WIB\n\nHarga: Rp8.000', '-7.172101793225222', '109.7697751806729', '2024-08-25 16:22:49', '2024-08-25 16:22:49'),
(9, 11, 3, 'Buat kamu yang terlalu jauh mengunjungi Sea World di Jakarta Utara, datanglah ke sini. Meski ukurannya tak terlalu besar, tapi kamu bisa menikmati keindahan biota laut. Ada beragam jenis ikan yang bisa kamu lihat, seperti belut laut, lele albino, piranha, hingga aligator. \n\nLokasi: Jalan W.R. Supratman, Panjang Wetan, Pekalongan Utara, Pekalongan, Jawa Tengah\n\nJam operasional: 07.00-20.00 WIB\n\nHarga: Rp2.250-6.000', '-6.857568995906282', '109.69212312811665', '2024-08-25 16:23:32', '2024-08-25 16:23:32'),
(10, 12, 5, 'Sungai yang dikelilingi tebing berwarna serba hitam ini menjadi wisata menarik. Banyak aktivitas yang bisa kamu lakukan saat mengunjunginya.\n\nKamu bisa berenang atau rafting di sungai ini. Untuk mendapatkan paket lengkap, biayanya dibanderol Rp75 ribu. \n\nLokasi: Desa Kayupuring, Kecamatan Petungkriono, Kabupaten Pekalongan, Jawa Tengah \n\nJam operasional: 09.15-16.00 WIB\n\nHarga: Rp75 ribu per paket', '-7.107820482671381', '109.73155523791412', '2024-08-25 16:24:19', '2024-08-25 16:24:19'),
(11, 13, 2, 'Pantai ini menawarkan pemandangan matahari terbenam yang sangat indah. Sembari menunggu matahari terbenam, kamu bisa berteduh di tepian pantai.\n\nTak perlu takut dengan teriknya matahari. Sebab, banyak pepohonan cemara di tepi pantai yang bikin udaranya lebih sejuk. \n\nLokasi: Desa Wonokerto Kulon, Wonokerto, Pekalongan, Jawa Tengah\n\nJam operasional: 06.00-17.30 WIB\n\nHarga: Rp3.000-5.000', '-6.84472261108328', '109.63344072381322', '2024-08-25 16:24:59', '2024-08-25 16:24:59'),
(12, 14, 2, 'Lokasinya yang tak jauh dari kota membuat tempat ini menjadi destinasi favorit. Gak kalah dengan Pantai Wonokerto, pantai ini juga punya pemandangan matahari terbenam yang sangat indah.\n\nDi sekitar pantai ini, terdapat pelelangan ikan yang menjual aneka ikan segar. Kamu bisa membawanya pulang buat oleh-oleh keluarga, nih!\n\nLokasi: Desa Panjang Wetan, Pekalongan Utara, Pekalongan, Jawa Tengah\n\nJam operasional: 24 jam \n\nHarga: Rp2.000-5.000', '-6.858794550047183', '109.69103943066173', '2024-08-25 16:25:24', '2024-08-25 16:25:24'),
(13, 16, 3, 'ggrgrgrgr', '-7.0175877370721205', '109.78230962932413', '2024-08-27 08:52:40', '2024-08-27 08:52:40');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `wisata_id` int(11) NOT NULL,
  `nama_reviewer` varchar(255) NOT NULL,
  `ulasan` text NOT NULL,
  `rating` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_desas`
--

CREATE TABLE `table_desas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Tegar Arsyadani', 'tegararsya0117@gmail.com', '2024-08-24 09:26:58', '$2y$10$yQaQaQYZGMnOq9kKA.BbguW6EXN6HbCbv9bggTrzHHPNg4f528N9a', 'lT3FnlEIu04SXaUJxUhn4GSJxS7oO4XxEl3gaAsOP8nzkcmln2GN5IqvceJa', '2024-08-24 09:26:58', '2024-08-24 09:26:58');

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id` int(11) NOT NULL,
  `nama_wisata` varchar(255) NOT NULL,
  `images` text NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `luas_wisata` text NOT NULL,
  `deskripsi` text NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id`, `nama_wisata`, `images`, `kategori`, `luas_wisata`, `deskripsi`, `kategori_id`, `created_at`, `updated_at`) VALUES
(9, 'Curug Tirta Muncar', '[\"wisata-images\\/1724627331_50547387-2146723142052119-842992809050132309-n-e75b5d761ae90fd1afc87d0d2431ce33.jpg\"]', 'Rekreasi', '2000', 'Curug Tirta Muncar punya keindahan yang masih sangat alami. Tak banyak wisatawan yang mengetahui tempat wisata ini. Pasalnya, akses menuju ke sini cukup sulit dengan medan curam dan licin. Padahal, saat sampai di tempat tersebut, keindahan dan segarnya air terjun akan langsung menyambutmu.\r\nLokasi: Desa Curugmuncar, Kecamatan Petungkriono, Kabupaten Pekalongan, Jawa Tengah. Jam operasional: 24 jam. Harga: Rp5.000', 1, '2024-08-25 16:08:51', '2024-08-25 16:08:51'),
(10, 'Telaga Mangunan', '[\"wisata-images\\/1724627375_51608682-296333484383974-8457711386806234598-n-22572e66dcef60cd69d3d4a41131c1b9.jpg\"]', 'Rekreasi', '10000', 'Saat mengunjungi telaga ini, udara dingin langsung menyapamu. Lokasinya berada di ketinggian sekitar 2.000 meter di atas permukaan laut.\n\nTak hanya udara sejuk yang bikin betah, kamu juga bisa bermain-main naik perahu. Biaya naik perahunya murah banget, cuma Rp5.000.\n\nLokasi: Desa Tlogohendro, Kecamatan Petungkriono, Kabupaten Pekalongan, Jawa Tengah\n\nJam operasional: 08.00-17.00 WIB\n\nHarga: Rp8.000', 1, '2024-08-25 16:09:35', '2024-08-25 16:09:35'),
(11, 'Museum Bahari', '[\"wisata-images\\/1724627413_69866614-532736507484604-4176690620793107473-n-1c58bc091f509f7d85d12ca5e2ba959b.jpg\"]', 'Anjayy', '100', 'Buat kamu yang terlalu jauh mengunjungi Sea World di Jakarta Utara, datanglah ke sini. Meski ukurannya tak terlalu besar, tapi kamu bisa menikmati keindahan biota laut. Ada beragam jenis ikan yang bisa kamu lihat, seperti belut laut, lele albino, piranha, hingga aligator. \n\nLokasi: Jalan W.R. Supratman, Panjang Wetan, Pekalongan Utara, Pekalongan, Jawa Tengah\n\nJam operasional: 07.00-20.00 WIB\n\nHarga: Rp2.250-6.000', 3, '2024-08-25 16:10:13', '2024-08-25 16:10:13'),
(12, 'Black Canyon', '[\"wisata-images\\/1724627445_70918741-404603793802660-3977208516582616709-n-3ba4146d3eb78e6e584ae7891b232b46.jpg\"]', 'GUNung', '100', 'Sungai yang dikelilingi tebing berwarna serba hitam ini menjadi wisata menarik. Banyak aktivitas yang bisa kamu lakukan saat mengunjunginya.\n\nKamu bisa berenang atau rafting di sungai ini. Untuk mendapatkan paket lengkap, biayanya dibanderol Rp75 ribu. \n\nLokasi: Desa Kayupuring, Kecamatan Petungkriono, Kabupaten Pekalongan, Jawa Tengah \n\nJam operasional: 09.15-16.00 WIB\n\nHarga: Rp75 ribu per paket', 5, '2024-08-25 16:10:45', '2024-08-25 16:10:45'),
(13, 'Pantai Wonokerto', '[\"wisata-images\\/1724627473_69876334-379415449635910-4926103019358432447-n-46e4cda5615b11e88d6e0c686cbe791e.jpg\"]', 'pantai', '100', 'Pantai ini menawarkan pemandangan matahari terbenam yang sangat indah. Sembari menunggu matahari terbenam, kamu bisa berteduh di tepian pantai.\n\nTak perlu takut dengan teriknya matahari. Sebab, banyak pepohonan cemara di tepi pantai yang bikin udaranya lebih sejuk. \n\nLokasi: Desa Wonokerto Kulon, Wonokerto, Pekalongan, Jawa Tengah\n\nJam operasional: 06.00-17.30 WIB\n\nHarga: Rp3.000-5.000', 2, '2024-08-25 16:11:13', '2024-08-25 16:11:13'),
(14, 'Pantai Pasir Kencana', '[\"wisata-images\\/1724627516_67278491-619094375165933-7492227512777448989-n-90df2930a675a5983f09f9fb90db0a8f.jpg\",\"wisata-images\\/1724778173_Unofficial_JavaScript_logo_2.svg.png\",\"wisata-images\\/1724778173_start-button-png.png\",\"wisata-images\\/1724778173_python-programming.png\"]', 'pantai', '100', 'Curug Tirta Muncar punya keindahan yang masih sangat alami. Tak banyak wisatawan yang mengetahui tempat wisata ini. Pasalnya, akses menuju ke sini cukup sulit dengan medan curam dan licin. Padahal, saat sampai di tempat tersebut, keindahan dan segarnya air terjun akan langsung menyambutmu.\r\nLokasi: Desa Curugmuncar, Kecamatan Petungkriono, Kabupaten Pekalongan, Jawa Tengah. Jam operasional: 24 jam. Harga: Rp5.000', 2, '2024-08-25 16:11:56', '2024-08-27 10:02:53'),
(16, 'bjir', '[\"wisata-images\\/1724773328_spongbobo.png\",\"wisata-images\\/1724773328_setia-wo.png\",\"wisata-images\\/1724773328_minion1.png\",\"wisata-images\\/1724773328_Logo-UAD-berwarna-full-color.png\"]', 'Anjayy', '1', 'ggrgrgrgr', 3, '2024-08-27 08:42:08', '2024-08-27 08:42:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `desas`
--
ALTER TABLE `desas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `infotanahs`
--
ALTER TABLE `infotanahs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kecamatans`
--
ALTER TABLE `kecamatans`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `pemiliklahans`
--
ALTER TABLE `pemiliklahans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `potensis`
--
ALTER TABLE `potensis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `potensi_wisata`
--
ALTER TABLE `potensi_wisata`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wisata_id` (`wisata_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_desas`
--
ALTER TABLE `table_desas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `desas`
--
ALTER TABLE `desas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `infotanahs`
--
ALTER TABLE `infotanahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kecamatans`
--
ALTER TABLE `kecamatans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pemiliklahans`
--
ALTER TABLE `pemiliklahans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `potensis`
--
ALTER TABLE `potensis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `potensi_wisata`
--
ALTER TABLE `potensi_wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `table_desas`
--
ALTER TABLE `table_desas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `potensi_wisata`
--
ALTER TABLE `potensi_wisata`
  ADD CONSTRAINT `potensi_wisata_ibfk_1` FOREIGN KEY (`wisata_id`) REFERENCES `wisata` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
