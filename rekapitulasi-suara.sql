-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2018 at 10:49 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rekapitulasi-suara`
--

-- --------------------------------------------------------

--
-- Table structure for table `calon`
--

CREATE TABLE `calon` (
  `id` int(11) NOT NULL,
  `nama_calon` varchar(50) NOT NULL,
  `nama_wakil_calon` varchar(50) NOT NULL,
  `no_urut` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calon`
--

INSERT INTO `calon` (`id`, `nama_calon`, `nama_wakil_calon`, `no_urut`) VALUES
(1, 'bimo', 'ilbad', '1'),
(2, 'atun', 'angel', '2');

-- --------------------------------------------------------

--
-- Table structure for table `desa`
--

CREATE TABLE `desa` (
  `id` int(11) NOT NULL,
  `fk_id_kecamatan` int(11) NOT NULL,
  `nama_desa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `desa`
--

INSERT INTO `desa` (`id`, `fk_id_kecamatan`, `nama_desa`) VALUES
(8, 6, 'Klojen'),
(9, 6, 'Rampal Celaket'),
(10, 6, 'Oro-Oro Dowo'),
(11, 6, 'Samaan'),
(12, 6, 'Penanggungan'),
(13, 6, 'Gadingasri'),
(14, 6, 'Bareng'),
(15, 6, 'Kasihan'),
(16, 6, 'Sukoharjo'),
(17, 6, 'Kauman'),
(18, 6, 'Kiduldalem'),
(19, 5, 'Kesatrian'),
(20, 5, 'Polehan'),
(21, 5, 'Purwantoro'),
(22, 5, 'Bunulrejo'),
(23, 5, 'Pandanwangi'),
(24, 5, 'Blimbing'),
(25, 5, 'Purwodadi'),
(26, 5, 'Arjosari'),
(27, 5, 'Balearjosari'),
(28, 5, 'Jodipan'),
(29, 5, 'Polowijen'),
(30, 7, 'Aryowinangun'),
(31, 7, 'Tlogowaru'),
(32, 7, 'Mergosono'),
(33, 7, 'Bumiayu'),
(34, 7, 'Wonokoyo'),
(35, 7, 'Buring'),
(36, 7, 'Kedungkandang'),
(37, 7, 'Cemorokandang'),
(38, 7, 'Lesanpuro'),
(39, 7, 'Madyopuro'),
(40, 7, 'Sawojajar'),
(41, 8, 'Jatimulyo'),
(42, 8, 'Lowokwaru'),
(43, 8, 'Tulusrejo'),
(44, 8, 'Mojolangu'),
(45, 8, 'Tunjungsekar'),
(46, 8, 'Tasikmadu'),
(47, 8, 'Dinoyo'),
(48, 8, 'Merjosari'),
(49, 8, 'Tlogomas'),
(50, 8, 'Sumbersari'),
(51, 8, 'Ketawanggede'),
(52, 9, 'Bandulan'),
(53, 9, 'Karangbesuki'),
(54, 9, 'Pisangcandi'),
(55, 9, 'Mulyorejo'),
(56, 9, 'Sukun'),
(57, 9, 'Tanjungrejo'),
(58, 9, 'Bandungrejosari'),
(59, 9, 'Ciptomulyo'),
(60, 9, 'Gadang'),
(61, 9, 'Kebonsari');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_pemilu`
--

CREATE TABLE `jenis_pemilu` (
  `id` int(11) NOT NULL,
  `nama_pemilu` varchar(50) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id` int(11) NOT NULL,
  `nama_kecamatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id`, `nama_kecamatan`) VALUES
(5, 'Blimbing'),
(6, 'Klojen'),
(7, 'Kedungkandang'),
(8, 'Lowokwaru'),
(9, 'Sukun');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `fk_id_petugas` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `fk_id_petugas`, `username`, `password`, `status`) VALUES
(5, 123, 'admin', '8kgyR91G', 0),
(6, 124, 'admin', 'zaoxUQC6', 0),
(7, 125, 'admin', 'WfKUQAix', 0),
(8, 126, 'admin', 'n1VohacO', 0),
(9, 127, 'admin', 'GhqhCH6C', 0),
(10, 128, 'admin', 'bM5zPl7i', 0),
(11, 129, 'admin', 'BySRllJs', 0),
(12, 130, 'admin', 'yJwVfN4g', 0),
(13, 131, 'admin', 'mcFBpWNh', 0),
(14, 132, 'admin', 'fCeArw73', 0),
(15, 133, 'admin', '5tGSqCgX', 0),
(16, 134, 'admin', 'KcnFuHCK', 0),
(17, 135, 'admin', '5UszhWM4', 0),
(18, 136, 'admin', 'meuA9e5Z', 0),
(19, 137, 'admin', 'NjdZCTsm', 0),
(20, 138, 'admin', 'Gsm3YaL3', 0),
(21, 139, 'admin', 'Hs7OeKD9', 0),
(22, 140, 'admin', 'er7BPyQU', 0),
(23, 141, 'admin', 'dU1pl5yi', 0),
(24, 142, 'admin', 'bIzJEibx', 0),
(25, 143, 'admin', 'Jllr45Td', 0),
(26, 160, 'admin', 'WzsxZ5Fk', 0),
(27, 156, 'admin', 'EbhsheX8', 0),
(28, 162, 'admin', '0CEEnZYi', 0);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id` int(11) NOT NULL,
  `fk_id_desa` int(11) NOT NULL,
  `nama_petugas` varchar(50) NOT NULL,
  `status_login` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id`, `fk_id_desa`, `nama_petugas`, `status_login`) VALUES
(112, 8, 'A Prabhu\r', 0),
(113, 9, 'A. Budi Pranoto\r', 0),
(114, 10, 'AAJ Batavia\r', 0),
(115, 11, 'Aam Dewi Hamidah\r', 0),
(116, 12, 'Aarti Lohia\r', 0),
(117, 13, 'Abdul Hadi Ismail\r', 0),
(118, 14, 'Abdul Rachman\r', 0),
(119, 15, 'Abdul Rahman\r', 0),
(120, 16, 'Abdul Rifai Natanegara\r', 0),
(121, 17, 'Abdul Slam Tahir\r', 0),
(122, 18, 'Abdullah Alatas\r', 0),
(123, 19, 'Abu Djaja Bunjamin\r', 1),
(124, 20, 'Abu Hermanto Budiono\r', 1),
(125, 21, 'Achirsyah Moeis\r', 1),
(126, 22, 'Achmad Fadjar\r', 1),
(127, 23, 'Achmad Faried Joesoef\r', 1),
(128, 24, 'Achmad Kalla\r', 1),
(129, 25, 'Achmad Latief Alwy\r', 1),
(130, 26, 'Achmad Nugraha Djuanda\r', 1),
(131, 27, 'Achmad Sandi\r', 1),
(132, 28, 'Achmad', 1),
(133, 29, 'Adam Sautin\r', 1),
(134, 30, 'Ade R. Syarief\r', 1),
(135, 31, 'Ade Tjakralaksana\r', 1),
(136, 32, 'Adelina Prasetio\r', 1),
(137, 33, 'Adhi Utomo\r', 1),
(138, 34, 'Adhi Utomo Jusman\r', 1),
(139, 35, 'Adi Bisono\r', 1),
(140, 36, 'Adi Sasono\r', 1),
(141, 37, 'Adi Sumito\r', 1),
(142, 38, 'Adimitra Baratama Nusantara\r', 1),
(143, 39, 'Aditya Koeswojo\r', 1),
(144, 40, 'Adji Muljo Teguh\r', 0),
(145, 41, 'Adnan Kelana Haryanto & Hermanto\r', 0),
(146, 42, 'Adri Achmad Drajat\r', 0),
(147, 43, 'Adriana Maya Politon\r', 0),
(148, 44, 'Adryansyah\r', 0),
(149, 45, 'Afandi Hermawan Oey\r', 0),
(150, 46, 'Afandi Hermawan Oey and Tjoeng Anna Chrisnadi\r', 0),
(151, 47, 'Agam Nugraha Subagdja\r', 0),
(152, 48, 'Ago Harlim\r', 0),
(153, 49, 'Agoeng Noegroho\r', 0),
(154, 50, 'Agung Podomoro Group\r', 0),
(155, 51, 'Agung Salim\r', 0),
(156, 52, 'Agung Tobing\r', 1),
(157, 53, 'Agus Djohari\r', 0),
(158, 54, 'AGUS HARTONO LIE\r', 0),
(159, 55, 'Agus Lasmono Sudwikatmono\r', 0),
(160, 56, 'Agus Leman Gunawan\r', 1),
(161, 57, 'Agus Makmur\r', 0),
(162, 58, 'Agus Nursalim\r', 1),
(163, 59, 'Agus Pranoto Setiadi\r', 0),
(164, 60, 'Agus Purnomo Edhi\r', 0),
(165, 61, 'Agus Soenong / Intina Wirawan The\r', 0);

-- --------------------------------------------------------

--
-- Table structure for table `rekap_suara`
--

CREATE TABLE `rekap_suara` (
  `id` int(11) NOT NULL,
  `fk_id_tps` int(11) NOT NULL,
  `fk_id_calon` int(11) NOT NULL,
  `jml_suara` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rekap_suara`
--

INSERT INTO `rekap_suara` (`id`, `fk_id_tps`, `fk_id_calon`, `jml_suara`) VALUES
(1, 1, 1, 30),
(2, 1, 2, 10),
(3, 2, 1, 40),
(4, 2, 2, 40),
(5, 3, 1, 100),
(6, 3, 2, 2),
(7, 4, 1, 12),
(8, 4, 2, 15),
(9, 5, 1, 11),
(10, 5, 2, 15),
(11, 6, 1, 16),
(12, 6, 2, 14),
(13, 7, 1, 12),
(14, 7, 2, 15),
(15, 8, 1, 13),
(16, 8, 2, 100),
(17, 9, 1, 131),
(18, 9, 2, 200);

-- --------------------------------------------------------

--
-- Table structure for table `suara_rusak`
--

CREATE TABLE `suara_rusak` (
  `id` int(11) NOT NULL,
  `fk_id_tps` int(11) NOT NULL,
  `jml_suara_rusak` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tps`
--

CREATE TABLE `tps` (
  `id` int(11) NOT NULL,
  `fk_id_desa` int(11) NOT NULL,
  `nama_tps` varchar(50) NOT NULL,
  `jml_dpt` int(11) NOT NULL,
  `lokasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tps`
--

INSERT INTO `tps` (`id`, `fk_id_desa`, `nama_tps`, `jml_dpt`, `lokasi`) VALUES
(1, 26, 'TPS No 1', 100, 'jl A'),
(2, 26, 'Tps no 2', 102, 'jl B'),
(3, 24, 'Tps no 1', 122, 'dekat sini'),
(4, 39, 'Tps no 1', 102, 'dekat sini'),
(5, 39, 'Tps no 2', 122, 'dekat sini'),
(6, 39, 'Tps no 3', 100, 'dekat sini'),
(7, 39, 'Tps no 4', 100, 'dekat sini'),
(8, 52, 'Tps no 1', 122, 'dekat sini'),
(9, 58, 'Tps no 1', 122, 'dekat sini');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calon`
--
ALTER TABLE `calon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_pemilu`
--
ALTER TABLE `jenis_pemilu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rekap_suara`
--
ALTER TABLE `rekap_suara`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suara_rusak`
--
ALTER TABLE `suara_rusak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tps`
--
ALTER TABLE `tps`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calon`
--
ALTER TABLE `calon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `desa`
--
ALTER TABLE `desa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `jenis_pemilu`
--
ALTER TABLE `jenis_pemilu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT for table `rekap_suara`
--
ALTER TABLE `rekap_suara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `suara_rusak`
--
ALTER TABLE `suara_rusak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tps`
--
ALTER TABLE `tps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
