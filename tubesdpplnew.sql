-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2020 at 08:09 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubesdpplnew`
--

-- --------------------------------------------------------

--
-- Table structure for table `makanan`
--

CREATE TABLE `makanan` (
  `id` int(11) NOT NULL,
  `food` varchar(255) NOT NULL,
  `berat` int(255) NOT NULL,
  `kalori` float(255,0) NOT NULL,
  `satuan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `makanan`
--

INSERT INTO `makanan` (`id`, `food`, `berat`, `kalori`, `satuan`) VALUES
(1, 'Jagung Rebus', 250, 90, 'gram'),
(3, 'Roti Gandum', 100, 265, 'gram'),
(4, 'Mentega', 20, 143, 'gram'),
(7, 'Telur Mata Sapi', 60, 110, 'gram'),
(8, 'Susu', 250, 185, 'ml'),
(9, 'Nasi Putih', 200, 350, 'gram'),
(10, 'Ayam Bakar', 100, 129, 'gram'),
(11, 'Sambal Goreng Tempe', 100, 232, 'gram'),
(12, 'Telur Dadar', 70, 153, 'gram'),
(14, 'Ikan Lele Goreng', 90, 122, 'gram'),
(15, 'Buah Alpukat', 100, 160, 'gram'),
(16, 'Teh', 75, 30, 'gram'),
(17, 'Selai Cokelat Kacang', 28, 180, 'gram'),
(18, 'Salad Buah', 285, 192, 'gram'),
(19, 'Mayonaise', 3, 171, 'sdm'),
(20, 'Keju Cheddar', 50, 201, 'gram'),
(21, 'Perkedel Kentang', 50, 123, 'gram'),
(22, 'Ati Ayam', 50, 98, 'gram'),
(23, 'Buah Salak', 150, 63, 'gram'),
(24, 'Kopi', 75, 58, 'gram'),
(25, 'Ikan Salmon', 200, 416, 'gram'),
(26, 'Tempe Oreg', 100, 175, 'gram'),
(27, 'Telur Rebus', 100, 155, 'gram'),
(28, 'Sayur Bening Bayam', 100, 36, 'gram'),
(29, 'Roti Cokelat', 100, 293, 'gram'),
(30, 'Omelete', 100, 153, 'gram'),
(31, 'Roti Cokelat', 100, 293, 'gram'),
(33, 'Rendang Daging', 200, 571, 'gram'),
(34, 'Tumis Kantung', 100, 98, 'gram'),
(35, 'Rendang Daging', 200, 571, 'gram'),
(36, 'Tumis Kantung', 100, 98, 'gram'),
(37, 'Kentang Goreng', 100, 311, 'gram'),
(38, 'Jus Jambu Biji', 250, 130, 'gram'),
(39, 'Sayur Lodeh', 200, 136, 'gram'),
(40, 'Tahu', 100, 147, 'gram'),
(41, 'Sayur Bayam', 100, 23, 'gram'),
(42, 'Ayam Panggang', 100, 164, 'gram'),
(43, 'Perkedel Jagung', 50, 108, 'gram'),
(44, 'Sup Telur Puyuh', 100, 116, 'gram'),
(45, 'Buah Pisang', 125, 120, 'gram'),
(46, 'Kacang Hijau', 100, 102, 'gram'),
(47, 'Buah Apel', 160, 92, 'gram'),
(48, 'Ikan Kembung', 80, 87, 'gram'),
(49, 'Ayam Pop', 120, 265, 'gram'),
(50, 'Tempe', 50, 118, 'gram'),
(51, 'Buah Semangka', 100, 30, 'gram'),
(52, 'Nasi Merah', 200, 222, 'gram'),
(53, 'Tumis Daun Singkong', 120, 151, 'gram'),
(54, 'Daging Empal', 70, 147, 'gram'),
(55, 'Buah Pir', 100, 57, 'gram'),
(56, 'Madu', 1, 62, 'sdm'),
(57, 'Selai Kacang', 20, 117, 'gram'),
(58, 'Sambal Kentang', 100, 102, 'gram'),
(59, 'Buah Jeruk', 150, 47, 'gram'),
(60, 'Soup Sapi', 260, 227, 'gram'),
(61, 'Gulai Tunjang', 160, 502, 'gram'),
(62, 'Ayam Goreng Kecap', 75, 358, 'gram'),
(63, 'Tahu Goreng', 100, 111, 'gram'),
(64, 'Soup Oyong Telur Puyuh', 150, 201, 'gram'),
(65, 'Smoothie', 100, 210, 'ml'),
(66, 'Soup Mutiara Jagung', 150, 169, 'gram'),
(67, 'Pizza Sayur Panggang', 128, 360, 'gram'),
(68, 'Vegetarian Stew', 300, 369, 'gram'),
(69, 'Soup Jagung', 165, 180, 'gram'),
(70, 'Pancake Kentang', 150, 403, 'gram'),
(71, 'Yoghurt', 150, 88, 'gram'),
(72, 'Telur Dadar Sayur', 145, 180, 'gram'),
(73, 'Toge Goreng', 250, 243, 'gram'),
(74, 'ketoprak', 400, 244, 'gram'),
(75, 'Oseng Buncis Tempe', 110, 100, 'gram'),
(76, 'Tempe Paprika', 150, 200, 'gram'),
(77, 'Oatmeal', 250, 160, 'gram'),
(78, 'Sayur Daun Kelor', 100, 60, 'gram'),
(79, 'Sayur Campur Matang', 200, 162, 'gram'),
(80, 'Tahu Tempe Orak - Arik', 150, 200, 'gram'),
(81, 'Tahu Rebus', 100, 78, 'gram'),
(83, 'Teh Hijau', 180, 2, 'ml'),
(84, 'Buah Anggur', 150, 103, 'gram'),
(85, 'Teh Hijau', 180, 2, 'ml'),
(86, 'Buah Anggur', 150, 103, 'gram'),
(87, 'Telur', 60, 110, 'gram'),
(88, 'Soup Krim Jagung', 1, 50, 'porsi'),
(89, 'Es Teh', 200, 30, 'ml'),
(90, 'Air Putih', 100, 0, 'ml'),
(91, 'Es Teh', 200, 30, 'ml'),
(92, 'Air Putih', 100, 0, 'ml'),
(93, 'Oseng Buncis', 110, 100, 'gram'),
(94, 'Jus Anggur', 250, 154, 'ml'),
(95, 'Oseng Buncis', 110, 100, 'gram'),
(97, 'Salad Kubis / Salada Kol', 184, 268, 'gram'),
(98, 'Jus Tomat', 250, 70, 'ml'),
(99, 'Teh Panas', 250, 150, 'ml'),
(100, 'Pecel', 100, 230, 'gram'),
(101, 'Tempe Goreng', 50, 108, 'gram'),
(102, 'Soup Kentang', 200, 162, 'gram'),
(103, 'Keju', 30, 90, 'gram'),
(104, 'Lemon Tea', 200, 90, 'ml'),
(105, 'Gado - Gado', 200, 393, 'gram'),
(106, 'Pepes Tahu', 100, 126, 'gram'),
(107, 'Roti Tawar', 74, 200, 'gram'),
(108, 'Buah Semangka', 100, 30, 'gram'),
(109, 'Daging Ayam', 100, 245, 'gram'),
(112, 'Buah Melon', 120, 46, 'gram'),
(113, 'Daging Sapi', 100, 180, 'gram'),
(114, 'Selai Strawberry', 14, 90, 'gram'),
(115, 'Soup Jagung Rebus', 100, 113, 'gram'),
(116, 'Soup Bayam', 100, 156, 'gram'),
(117, 'Udang Rebus', 100, 91, 'gram'),
(118, 'Soup Ayam Kombinasi', 100, 95, 'gram'),
(119, 'Ikan Tuna', 120, 220, 'gram'),
(120, 'Mayonaise', 1, 57, 'sdm'),
(121, 'Mayonaise', 2, 114, 'sdm'),
(122, 'Urap', 100, 112, 'gram');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `sandi` varchar(255) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `umur` int(30) NOT NULL,
  `beratbadan` int(30) NOT NULL,
  `tinggibadan` int(30) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `sandi`, `Nama`, `email`, `umur`, `beratbadan`, `tinggibadan`, `level`) VALUES
(1, 'admin', 'admin123', 'admin_', 'admin@gmail.com', 0, 0, 0, 'admin'),
(4, 'hafi', 'hafi', '', '', 0, 0, 0, ''),
(11, 'dian', 'dian', '', '', 0, 0, 0, ''),
(12, 'bbbbb', 'bbb', 'bb', 'bbbb@gmail.com', 21, 111, 170, ''),
(13, 'nabil', 'nabil', 'nabil', 'nabil@gmail.com', 19, 75, 170, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `makanan`
--
ALTER TABLE `makanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
