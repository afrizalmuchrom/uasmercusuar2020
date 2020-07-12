-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2020 at 05:51 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts_kia`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `perusahaan` longtext NOT NULL,
  `tlp` longtext NOT NULL,
  `email` longtext NOT NULL,
  `alamat` longtext NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `peta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `perusahaan`, `tlp`, `email`, `alamat`, `username`, `password`, `peta`) VALUES
(1, 'PT Joeloe Bangun Pertiwi', '+628998424630 ', 'ptjoeloebangunpertiwi@gmail.com', 'Ruko Grand Kalimas Blok A No.31, Jl. KH Nur Ali Inspeksi Kalimalang, Bekasi West Java, Indonesia', 'admin', 'admin', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.9747087385435!2d107.03359166476933!3d-6.267056495463859!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698f26168121f1%3A0x8e5135e2ef07aa6f!2sPT%20Joeloe%20Bangun%20Pertiwi!5e0!3m2!1sid!2sid!4v1594563782371!5m2!1sid!2sid\" width=\"100%\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE `tbl_about` (
  `id` int(11) NOT NULL,
  `about` text NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`id`, `about`, `visi`, `misi`) VALUES
(1, 'Nowadays the development of REPAIR STRUCTURE work in INDONESIA is growing, Recognizing the vastness of these opportunities, we are participating in the competition in that field. At present the work of REPAIR STRUCTURE by using chemicals that require the application of these materials appropriately, quickly, and paying attention to aspects of safety and the environment is needed by companies that need structural repair services. Construction chemicals can be found in structural strengthening & repair work including Crack Injection, Grouting, Patching, Water Proofing and so on. So in June 2018, PT. JOELOE BANGUN PERTIWI was established with its head office in BEKASI.', 'Being a company that provides solutions to problems with quick handling, work professionalism and still prioritizes aspects of safety & the environment. ', 'Providing the best possible service to customers, by providing work that meets the standards set.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` blob NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_berita`
--

INSERT INTO `tbl_berita` (`id`, `judul`, `isi`, `tanggal`, `gambar`) VALUES
(3, 'asu', 0x61737573696c61, '2020-07-12', 'IMG_3739.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_portofolio`
--

CREATE TABLE `tbl_portofolio` (
  `id` int(11) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_portofolio`
--

INSERT INTO `tbl_portofolio` (`id`, `gambar`) VALUES
(1, 'gambar1.jpg'),
(3, 'gambar3.jpg'),
(4, 'gambar4.jpg'),
(5, 'gambar5.jpg'),
(6, 'gambar6.jpg'),
(7, 'gambar7.jpg'),
(16, 'IMG_3739.JPG'),
(17, 'IMG_3722.JPG'),
(18, 'IMG_3726.JPG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_portofolio`
--
ALTER TABLE `tbl_portofolio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_portofolio`
--
ALTER TABLE `tbl_portofolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
