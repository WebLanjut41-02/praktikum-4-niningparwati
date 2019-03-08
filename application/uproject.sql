-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2019 at 05:45 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` varchar(5) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `posisi` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `posisi`) VALUES
('AD001', 'Admin', 'Admin123', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` varchar(5) NOT NULL,
  `judul_artikel` varchar(50) NOT NULL,
  `tgl_terbit` date NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul_artikel`, `tgl_terbit`, `pengarang`, `isi`) VALUES
('A0001', 'Revolusi Industri 4.0', '2019-03-08', 'Nining Parwati', 'Konsep “Industri 4.0” pertama kali digunakan di publik dalam pameran industri Hannover Messe di kota Hannover, Jerman di tahun 2011. Dari peristiwa ini juga sebetulnya ide “Industri 2.0” dan “Industri 3.0” baru muncul, sebelumnya cuma dikenal dengan nama “Revolusi Teknologi” dan “Revolusi Digital”. Nah, lo mungkin bisa nebak, setelah 2 revolusi itu, revolusi macam apa lagi sih yang bisa terjadi? Perhatikan deh, semua revolusi itu terjadi menggunakan revolusi sebelumnya sebagai dasar. Industri 2.0 takkan muncul selama kita masih mengandalkan otot, angin, dan air untuk produksi. Industri 3.0 intinya meng-upgrade lini produksi dengan komputer dan robot. Jadi, industri 4.0 juga pasti menggunakan komputer dan robot ini sebagai dasarnya. Jadi, kemajuan apa saja yang muncul di dunia komputer kita akhir-akhir ini?'),
('A0002', 'FIT Juara', '2019-03-05', 'Anonim', 'Fokasi Bangun Negeri');

-- --------------------------------------------------------

--
-- Table structure for table `benefit`
--

CREATE TABLE `benefit` (
  `id_benefit` varchar(5) NOT NULL,
  `level` enum('Level 1','Level 2','Level 3','Level 4','Level 5') NOT NULL,
  `desc_benefit` text NOT NULL,
  `tgl_pengiriman` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id_project` varchar(5) NOT NULL,
  `nama_project` varchar(255) NOT NULL,
  `dana_dibutuhkan` varchar(20) NOT NULL,
  `jatuh_tempo` date NOT NULL,
  `detail_project` varchar(50) NOT NULL,
  `foto_project` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project_maker`
--

CREATE TABLE `project_maker` (
  `id_maker` varchar(10) NOT NULL,
  `nama_maker` varchar(20) NOT NULL,
  `ttl_maker` date NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `r_password` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `benefit`
--
ALTER TABLE `benefit`
  ADD PRIMARY KEY (`id_benefit`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id_project`);

--
-- Indexes for table `project_maker`
--
ALTER TABLE `project_maker`
  ADD PRIMARY KEY (`id_maker`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
