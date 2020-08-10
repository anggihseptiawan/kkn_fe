-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Aug 10, 2020 at 03:52 AM
-- Server version: 5.7.28
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin_desa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `image` varchar(100) NOT NULL DEFAULT '',
  `password` varchar(250) NOT NULL DEFAULT '',
  `is_active` int(11) NOT NULL DEFAULT '1',
  `created_at` date DEFAULT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `name`, `email`, `image`, `password`, `is_active`, `created_at`) VALUES
(3, 'Admin', 'admin@gmail.com', 'default.jpg', '$2y$10$umxUroKR2lDI11kiKFZz9uzr5PtQ4rS.tvxvSn1qtRSb4J9cY44HW', 1, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `panduan`
--

DROP TABLE IF EXISTS `panduan`;
CREATE TABLE IF NOT EXISTS `panduan` (
  `panduan_id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(250) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `path` varchar(250) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`panduan_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `panduan`
--

INSERT INTO `panduan` (`panduan_id`, `judul`, `jenis`, `path`, `created_at`) VALUES
(11, 'Surat Keterangan Ahli Waris', 'Surat-Keterangan-Ahli-Waris', './uploads/2020/08/6567-Form_AHLI_WARIS.pdf', '2020-08-10 03:02:40'),
(12, ' Surat Keterangan Domisili', 'Surat-Keterangan-Domisili', './uploads/2020/08/2790-Form_Domisili.pdf', '2020-08-10 03:03:03'),
(13, 'Surat Keterangan Kematian', 'Surat-Keterangan-Kematian', './uploads/2020/08/9901-Form_Kematian.pdf', '2020-08-10 03:03:42'),
(14, 'Surat Keterangan Pindah', 'Surat-Keterangan-Pindah', './uploads/2020/08/4493-Form_Pindah.pdf', '2020-08-10 03:04:06'),
(15, 'Surat Keterangan Tidak Mampu', 'Surat-Keterangan-Tidak-Mampu', './uploads/2020/08/5855-Form_SKTM.pdf', '2020-08-10 03:04:41'),
(16, 'Surat Keterangan Usaha', 'Surat-Keterangan-Usaha', './uploads/2020/08/3214-Form_usaha-.pdf', '2020-08-10 03:05:27'),
(17, 'Surat Pengantar Pengurusan KTP', 'Surat-Pengantar-Pengurusan-KTP', './uploads/2020/08/4981-Form_KTP.pdf', '2020-08-10 03:06:01');

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

DROP TABLE IF EXISTS `surat`;
CREATE TABLE IF NOT EXISTS `surat` (
  `surat_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `path` varchar(255) NOT NULL,
  `path_admin` varchar(255) DEFAULT NULL,
  `feedback` varchar(500) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`surat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`surat_id`, `user_id`, `jenis`, `keterangan`, `path`, `path_admin`, `feedback`, `created_at`, `status`) VALUES
(25, 3, 'Surat-Keterangan-Usaha', 'Tes', './uploads/perizinan/2020/08/4002-Form usaha-.pdf', './uploads/perizinan/2020/08/7235-Form AHLI WARIS.pdf', NULL, '2020-08-08 08:09:22', 1),
(26, 3, 'Surat-Keterangan-Pindah', 'surat pindah', './uploads/perizinan/2020/08/5248-Form Pindah.pdf', NULL, 'Tolak', '2020-08-08 08:14:19', 2),
(27, 4, '', '', './uploads/perizinan/2020/08/5027-font-awesome-4.7.0.zip', NULL, NULL, '2020-08-09 17:31:59', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `nohp` varchar(12) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `tmp_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(250) NOT NULL DEFAULT '',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email`, `password`, `username`, `nohp`, `nik`, `nama_lengkap`, `gender`, `tmp_lahir`, `tgl_lahir`, `alamat`) VALUES
(5, 'usertesting@gmail.com', '$2y$10$x8ybO0HLCu6AQGIJ/36lSe5bkCCltJUjMTVIsA9Lvt0o9LlhJtpYS', 'user Testing', '085779995638', '321611122059600', 'User Testing', '0', 'Jakarta', '1999-11-11', 'Cikolelet');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
