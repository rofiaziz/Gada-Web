-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2020 at 10:55 AM
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
-- Table structure for table `laporan_kendaraan`
--

CREATE TABLE `laporan_kendaraan` (
  `id_laporan` int(11) NOT NULL,
  `id_satpam` int(11) NOT NULL,
  `date` date NOT NULL,
  `month` varchar(50) NOT NULL,
  `time` time NOT NULL,
  `owner_kendaraan` varchar(100) NOT NULL,
  `note` varchar(255) NOT NULL,
  `id_client` int(11) NOT NULL
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
-- Table structure for table `profil_satpam`
--

CREATE TABLE `profil_satpam` (
  `id_satpam` int(11) NOT NULL,
  `NIK` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `pob` varchar(100) NOT NULL,
  `goldar` varchar(2) NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `gender` int(11) NOT NULL,
  `religion` int(11) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `finger_one` int(11) NOT NULL,
  `finger_two` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `satpam`
--

CREATE TABLE `satpam` (
  `id_satpam` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `acc_state` int(11) NOT NULL,
  `jenis_kelamin` varchar(25) NOT NULL,
  `last_sign` datetime NOT NULL,
  `id_client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `id_satpam` int(5) NOT NULL
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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `privilage_level` varchar(5) NOT NULL,
  `state` int(11) NOT NULL,
  `photo` blob NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `id_company` int(5) NOT NULL,
  `id_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

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
-- Indexes for table `laporan_kendaraan`
--
ALTER TABLE `laporan_kendaraan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `pendidikan_satpam`
--
ALTER TABLE `pendidikan_satpam`
  ADD PRIMARY KEY (`id_pendidikan`),
  ADD KEY `id_satpam` (`id_satpam`);

--
-- Indexes for table `satpam`
--
ALTER TABLE `satpam`
  ADD PRIMARY KEY (`id_satpam`),
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
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_perusahaan` (`id_company`),
  ADD KEY `id_jabatan` (`id_jabatan`),
  ADD KEY `id_status` (`id_status`);

--
-- AUTO_INCREMENT for dumped tables
--

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
  MODIFY `id_company` int(5) NOT NULL AUTO_INCREMENT;
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
-- AUTO_INCREMENT for table `laporan_kendaraan`
--
ALTER TABLE `laporan_kendaraan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT;
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
-- AUTO_INCREMENT for table `satpam`
--
ALTER TABLE `satpam`
  MODIFY `id_satpam` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
