-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2020 at 10:37 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `satpam`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id_attendance` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jam_masuk` time NOT NULL,
  `jam_keluar` time NOT NULL,
  `keterangan` text NOT NULL,
  `id_satpam` int(11) NOT NULL,
  `id_client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `id_bank` int(11) NOT NULL,
  `nama_bank` varchar(50) NOT NULL,
  `no_rek` int(50) NOT NULL,
  `id_satpam` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bpjs`
--

CREATE TABLE `bpjs` (
  `id_bpjs` int(11) NOT NULL,
  `bpjs_kesehatan` varchar(100) NOT NULL,
  `bpjs_tenagakerja` varchar(100) NOT NULL,
  `id_satpam` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `city` int(11) NOT NULL,
  `address` text NOT NULL,
  `no_mou` varchar(25) NOT NULL,
  `quota_satpam` int(11) NOT NULL,
  `satpam_deploy` int(11) NOT NULL,
  `periode_perjanjian` date NOT NULL,
  `kontak` int(11) NOT NULL,
  `waktu_langganan` int(5) NOT NULL,
  `id_perusahaan` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id_company` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(50) NOT NULL,
  `about` text NOT NULL,
  `jumlah_client` int(11) NOT NULL,
  `limit_satpam` int(11) NOT NULL,
  `masa_berlangganan` varchar(50) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `verifikasi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id_company`, `name`, `email`, `pass`, `address`, `city`, `about`, `jumlah_client`, `limit_satpam`, `masa_berlangganan`, `id_paket`, `verifikasi`) VALUES
(1, 'Garuda', 'garuda@gmail.com', 'Garuda123', 'Yogyakarta', 'Yogya', 'tentang', 100, 100, '1 tahun', 1, 'verified'),
(2, 'coba coba', 'coba@email', 'coba123', 'jogja stasiun tugu', 'Jogja', 'keterangan lanjut', 10, 10, '1 tahun', 2, 'not verified');

-- --------------------------------------------------------

--
-- Table structure for table `daily_schedule`
--

CREATE TABLE `daily_schedule` (
  `id_schedule` int(11) NOT NULL,
  `id_satpam` int(11) NOT NULL,
  `id_company` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `date` date NOT NULL,
  `month` varchar(50) NOT NULL,
  `shift` varchar(50) NOT NULL,
  `check_in` time NOT NULL,
  `check_out` time NOT NULL,
  `state` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_keluarga`
--

CREATE TABLE `data_keluarga` (
  `id_keluarga` int(11) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `status_perkawinan` varchar(100) NOT NULL,
  `nama_istri` varchar(100) NOT NULL,
  `NIK_istri` int(50) NOT NULL,
  `jumlah_anak` int(11) NOT NULL,
  `id_satpam` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `guest_book`
--

CREATE TABLE `guest_book` (
  `id` int(11) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  `address` text NOT NULL,
  `no_telp` int(50) NOT NULL,
  `company` text NOT NULL,
  `requirement` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jabatan_admin`
--

CREATE TABLE `jabatan_admin` (
  `id_jabatan` int(11) NOT NULL,
  `jenis_jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan_admin`
--

INSERT INTO `jabatan_admin` (`id_jabatan`, `jenis_jabatan`) VALUES
(1, 'super admin'),
(2, 'admin'),
(3, 'client'),
(4, 'satpam');

-- --------------------------------------------------------

--
-- Table structure for table `laporan_kejadian`
--

CREATE TABLE `laporan_kejadian` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `day` text NOT NULL,
  `incident` text NOT NULL,
  `tindak_lanjut` text NOT NULL,
  `note` text NOT NULL,
  `id_satpam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `laporan_kendaraan`
--

CREATE TABLE `laporan_kendaraan` (
  `id_laporan` int(11) NOT NULL,
  `date` date NOT NULL,
  `time_in` time NOT NULL,
  `time_out` time NOT NULL,
  `driver` text NOT NULL,
  `month` int(11) NOT NULL,
  `no_kendaraan` varchar(100) NOT NULL,
  `note` text NOT NULL,
  `company` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id_message` int(11) NOT NULL,
  `sender` int(11) NOT NULL,
  `reciever` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(8, '2020_06_03_081320_create_permissions_table', 1),
(22, '2014_10_12_000000_create_users_table', 2),
(23, '2014_10_12_100000_create_password_resets_table', 2),
(24, '2020_06_04_095619_create_permissions_table', 2),
(25, '2020_06_04_095654_create_roles_table', 2),
(26, '2020_06_04_095957_create_users_permissions_table', 3),
(27, '2020_06_04_100024_create_users_roles_table', 3),
(28, '2020_06_04_100147_create_roles_permissions_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `mutasi`
--

CREATE TABLE `mutasi` (
  `id` int(11) NOT NULL,
  `id_outsourcing` int(11) NOT NULL,
  `company` text NOT NULL,
  `day_shif` text NOT NULL,
  `time_shif` text NOT NULL,
  `shif` text NOT NULL,
  `nama_satpam_new` text NOT NULL,
  `jabatan` text NOT NULL,
  `uraian` text NOT NULL,
  `keterangan` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(11) NOT NULL,
  `nama_paket` varchar(50) NOT NULL,
  `jumlah_satpam` int(11) NOT NULL,
  `tagihan` int(20) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id_paket`, `nama_paket`, `jumlah_satpam`, `tagihan`, `keterangan`) VALUES
(1, 'paket 1', 10, 10000000, 'Deskripsi Paket yang berisi keterangan mengenai biaya serta jumlah satpam yang bisa didapatkan\r\nmengenai biaya serta jumlah satpam yang bisa didapatkan'),
(2, 'paket 2', 100, 100000000, 'Deskripsi Paket yang berisi keterangan mengenai biaya serta jumlah satpam yang bisa didapatkan\r\nmengenai biaya serta jumlah satpam yang bisa didapatkan');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan_satpam`
--

CREATE TABLE `pendidikan_satpam` (
  `id_pendidikan` int(11) NOT NULL,
  `pendidikan_tertinggi` varchar(50) NOT NULL,
  `nama_instansi` varchar(100) NOT NULL,
  `no_ijasah` varchar(100) NOT NULL,
  `tahun_lulus` int(11) NOT NULL,
  `pendidikan_satpam` varchar(50) NOT NULL,
  `tempat_diklat` varchar(50) NOT NULL,
  `no_ijasah_satpam` int(100) NOT NULL,
  `no_kta` int(100) NOT NULL,
  `tahun_penyelenggaraan` int(11) NOT NULL,
  `masa_berlaku` varchar(50) NOT NULL,
  `id_satpam` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penilaian_satpam`
--

CREATE TABLE `penilaian_satpam` (
  `id` int(11) NOT NULL,
  `nama_satpam_dinilai` text NOT NULL,
  `kedisiplinan` int(11) NOT NULL,
  `kesopanan` int(11) NOT NULL,
  `semangat_kerja` int(11) NOT NULL,
  `kerapihan` int(11) NOT NULL,
  `penerimaan_kritik` int(11) NOT NULL,
  `kerja_tim` int(11) NOT NULL,
  `kepatuhan_sop` int(11) NOT NULL,
  `kekompakan` int(11) NOT NULL,
  `kepatuhan_perintah` int(11) NOT NULL,
  `layanan_prima` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `id_satpam_penilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'View Dashboard', 'view->dashboard', '2020-06-05 16:12:37', '2020-06-05 16:12:37');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`role_id`, `permission_id`, `created_at`, `updated_at`) VALUES
(3, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profil_satpam`
--

CREATE TABLE `profil_satpam` (
  `id_satpam` int(11) NOT NULL,
  `nama` text NOT NULL,
  `TTL` text NOT NULL,
  `pendidikan` text NOT NULL,
  `identitas` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `no_kta` int(25) NOT NULL,
  `no_sajam` int(25) NOT NULL,
  `goldar` varchar(2) NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `gender` int(11) NOT NULL,
  `religion` text NOT NULL,
  `ijasah_satpam` int(25) NOT NULL,
  `no_telp` int(25) NOT NULL,
  `tempat_kerja` text NOT NULL,
  `mulai_kerja` date NOT NULL,
  `BNI` int(25) NOT NULL,
  `finger_one` int(11) NOT NULL,
  `finger_two` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', NULL, NULL),
(3, 'Admin2', 'admin-2', '2020-06-05 16:15:43', '2020-06-05 16:15:43');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2020-06-05 17:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `satpam`
--

CREATE TABLE `satpam` (
  `id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `acc_state` int(11) NOT NULL,
  `jenis_kelamin` varchar(25) NOT NULL,
  `last_sign` datetime NOT NULL,
  `id_client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `satpam`
--

INSERT INTO `satpam` (`id`, `name`, `email`, `pass`, `acc_state`, `jenis_kelamin`, `last_sign`, `id_client`) VALUES
(1, 'mamas', 'mamas@gmail.com', 'mamas123', 1, 'laki-laki', '0000-00-00 00:00:00', 1),
(2, 'Ganteng', 'ganteng@email.com', 'ganteng123', 1, 'laki-laki', '2020-04-08 00:00:00', 1),
(3, 'Bambang', 'bambangganteng@gmail.com', 'bambang123', 0, 'laki-laki', '2020-04-25 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sertifikat`
--

CREATE TABLE `sertifikat` (
  `id_sertifikat` int(11) NOT NULL,
  `no_sertifikat` int(25) NOT NULL,
  `no_pegawai` int(25) NOT NULL,
  `bidang` varchar(50) NOT NULL,
  `kualifikasi` varchar(50) NOT NULL,
  `waktu_berlaku` date NOT NULL,
  `id_satpam` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sidik_jari`
--

CREATE TABLE `sidik_jari` (
  `id_sidik_jari` int(11) NOT NULL,
  `sidikjari_1` varchar(255) NOT NULL,
  `sidikjari_2` varchar(255) NOT NULL,
  `id_satpam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `jenis_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id_status`, `jenis_status`) VALUES
(1, 'aktif'),
(2, 'suspend'),
(3, 'blokir'),
(4, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'rofi', 'rofi260@gmail.com', 'coba123', NULL, NULL, NULL),
(2, 'mamas', 'rofi123@gmail.com', 'coba123', NULL, NULL, NULL),
(3, 'rofi', 'rofi@rofi.com', '$2y$10$lMkvPbE5ulXVzkaI2WfNi.MUYoRlhEVFvfn5BFHL4mXF7rmqef1IC', 'ZnT3R0Ku70Sld6EueSD0oEDdWLwKpEVqKbO9o4kEmncoFYcKSJKOPmFDm9p4', '2020-06-09 04:05:50', '2020-06-09 04:05:50'),
(4, 'satpam', 'satpam@gmail.com', '$2y$10$qn6iEckuh7DCszynjwEWxOnY.tfSxwlzGqL9BCGCOqXAnWD/uTgDW', 'mtJIKyUsS9GXuOKplNFt4mDl90oKHIvxEfSAlqfRjdc3w0zdRkqqgFEJ16Hz', '2020-06-10 06:03:01', '2020-06-10 06:03:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id_attendance`);

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id_bank`),
  ADD KEY `id_satpam` (`id_satpam`);

--
-- Indexes for table `bpjs`
--
ALTER TABLE `bpjs`
  ADD PRIMARY KEY (`id_bpjs`),
  ADD KEY `id_satpam` (`id_satpam`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`),
  ADD KEY `id_perusahaan` (`id_perusahaan`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id_company`),
  ADD KEY `id_paket` (`id_paket`);

--
-- Indexes for table `daily_schedule`
--
ALTER TABLE `daily_schedule`
  ADD PRIMARY KEY (`id_schedule`);

--
-- Indexes for table `data_keluarga`
--
ALTER TABLE `data_keluarga`
  ADD PRIMARY KEY (`id_keluarga`),
  ADD KEY `id_satpam` (`id_satpam`);

--
-- Indexes for table `jabatan_admin`
--
ALTER TABLE `jabatan_admin`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `laporan_kejadian`
--
ALTER TABLE `laporan_kejadian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_satpam` (`id_satpam`);

--
-- Indexes for table `laporan_kendaraan`
--
ALTER TABLE `laporan_kendaraan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pendidikan_satpam`
--
ALTER TABLE `pendidikan_satpam`
  ADD PRIMARY KEY (`id_pendidikan`),
  ADD KEY `id_satpam` (`id_satpam`);

--
-- Indexes for table `penilaian_satpam`
--
ALTER TABLE `penilaian_satpam`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_satpam_penilai` (`id_satpam_penilai`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`),
  ADD UNIQUE KEY `permissions_slug_unique` (`slug`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD KEY `permission_role_role_id_foreign` (`role_id`),
  ADD KEY `permission_role_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD KEY `permission_user_user_id_foreign` (`user_id`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD KEY `role_user_user_id_foreign` (`user_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `satpam`
--
ALTER TABLE `satpam`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_client` (`id_client`);

--
-- Indexes for table `sertifikat`
--
ALTER TABLE `sertifikat`
  ADD KEY `id_satpam` (`id_satpam`);

--
-- Indexes for table `sidik_jari`
--
ALTER TABLE `sidik_jari`
  ADD PRIMARY KEY (`id_sidik_jari`),
  ADD KEY `id_satpam` (`id_satpam`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

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
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id_attendance` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `id_bank` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bpjs`
--
ALTER TABLE `bpjs`
  MODIFY `id_bpjs` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id_company` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `daily_schedule`
--
ALTER TABLE `daily_schedule`
  MODIFY `id_schedule` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `data_keluarga`
--
ALTER TABLE `data_keluarga`
  MODIFY `id_keluarga` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jabatan_admin`
--
ALTER TABLE `jabatan_admin`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `laporan_kejadian`
--
ALTER TABLE `laporan_kejadian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `laporan_kendaraan`
--
ALTER TABLE `laporan_kendaraan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pendidikan_satpam`
--
ALTER TABLE `pendidikan_satpam`
  MODIFY `id_pendidikan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `penilaian_satpam`
--
ALTER TABLE `penilaian_satpam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `satpam`
--
ALTER TABLE `satpam`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
