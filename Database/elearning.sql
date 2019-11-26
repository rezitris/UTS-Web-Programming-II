-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2019 at 02:39 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elearning`
--

-- --------------------------------------------------------

--
-- Table structure for table `perkuliahan`
--

CREATE TABLE `perkuliahan` (
  `id` int(11) NOT NULL,
  `str_kode_matkul` varchar(50) NOT NULL,
  `str_nama_matkul` varchar(100) NOT NULL,
  `int_sks` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perkuliahan`
--

INSERT INTO `perkuliahan` (`id`, `str_kode_matkul`, `str_nama_matkul`, `int_sks`) VALUES
(1, 'IF203', 'Augmented & Virtual Reality', 3),
(2, 'IF026', 'Pemograman Web 2', 3),
(3, 'IF202', 'Desain Kreatif Aplikasi dan Game', 3),
(4, 'IF024', 'Mobile Programming', 3),
(5, 'IF015', 'Pemrograman Berorientasi Objek 1', 3);

-- --------------------------------------------------------

--
-- Table structure for table `semester_v`
--

CREATE TABLE `semester_v` (
  `id` int(11) NOT NULL,
  `int_npm` int(12) NOT NULL,
  `str_nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester_v`
--

INSERT INTO `semester_v` (`id`, `int_npm`, `str_nama`) VALUES
(2, 17111006, 'Ahmad Fauji'),
(3, 17111322, 'Andri Ilham'),
(4, 17111323, 'Anggi Nuraziz'),
(5, 17111324, 'Azhar Ryad'),
(6, 17111328, 'Hesty Sugesty'),
(7, 17111329, 'Ihsan Nurhakim Aziz'),
(8, 17111332, 'M. Nur Taufik Ramdani'),
(9, 17111331, 'Kristian Dede Firmansyah'),
(10, 17111120, 'Ridwan Ismail'),
(11, 17111116, 'Reynaldi Lesmana Putra'),
(12, 17111115, 'Resna Mulya Lesmana'),
(13, 17111117, 'Reza M Fauzi'),
(14, 17111118, 'Rezi Tristanto'),
(15, 17111124, 'Rizky Kurnia Ramadhan'),
(16, 17111140, 'Siti Nur Khadijah'),
(17, 17111139, 'Siti Muayanah'),
(18, 17111135, 'Sidik Permana'),
(19, 17111142, 'Sri Sumarni Sukmaningsih'),
(20, 17111145, 'Syadilla Triananda Safira P.'),
(21, 17111146, 'Syahidan Arrizaldy Sidik'),
(22, 17111338, 'Taufik Firmansyah'),
(23, 17111156, 'Yoga Afdilla Jamaluddin'),
(24, 17111150, 'Tessa Tiara Ningtias');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `perkuliahan`
--
ALTER TABLE `perkuliahan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semester_v`
--
ALTER TABLE `semester_v`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `perkuliahan`
--
ALTER TABLE `perkuliahan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `semester_v`
--
ALTER TABLE `semester_v`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
