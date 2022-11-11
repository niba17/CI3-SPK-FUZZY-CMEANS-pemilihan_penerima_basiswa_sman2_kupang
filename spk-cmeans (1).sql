-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2022 at 02:23 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk-cmeans`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(4, 'tiara', 'e358efa489f58062f10dd7316b65649e');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `tanggungan_ortu` double NOT NULL,
  `penghasilan_ortu` double NOT NULL,
  `tagihan_air` double NOT NULL,
  `tagihan_listrik` double NOT NULL,
  `nilai_raport` decimal(4,2) NOT NULL,
  `id_siswa` int(11) DEFAULT NULL,
  `id_perhitungan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `tanggungan_ortu`, `penghasilan_ortu`, `tagihan_air`, `tagihan_listrik`, `nilai_raport`, `id_siswa`, `id_perhitungan`) VALUES
(27388, 0.75, 1, 0.25, 0, '0.25', NULL, NULL),
(27389, 0.5, 1, 0.75, 0.75, '0.75', NULL, NULL),
(27390, 0.25, 0.75, 1, 0.25, '0.25', NULL, NULL),
(27391, 0.75, 1, 0.5, 0.75, '0.25', NULL, NULL),
(27392, 0.75, 0.5, 0.5, 0.75, '1.00', NULL, NULL),
(27393, 0.5, 0.25, 1, 0.5, '1.00', NULL, NULL),
(27394, 0.25, 0.5, 0.25, 0, '1.00', NULL, NULL),
(27395, 1, 1, 1, 1, '0.25', NULL, NULL),
(27396, 0.5, 0.5, 0.75, 0.25, '0.25', NULL, NULL),
(27397, 0.75, 1, 0.5, 0.5, '1.00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `perhitungan`
--

CREATE TABLE `perhitungan` (
  `id_perhitungan` int(11) NOT NULL,
  `matrix_x` double NOT NULL,
  `matrix_u` double NOT NULL,
  `p_total_f_objektif` double NOT NULL,
  `id_siswa` int(11) DEFAULT NULL,
  `id_kriteria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perhitungan`
--

INSERT INTO `perhitungan` (`id_perhitungan`, `matrix_x`, `matrix_u`, `p_total_f_objektif`, `id_siswa`, `id_kriteria`) VALUES
(14805, 0.75, 1, 0.29373023162864, NULL, NULL),
(14806, 0.5, 1, 0.11145673444052, NULL, NULL),
(14807, 0.25, 0.75, 0.20009580959985, NULL, NULL),
(14808, 0.75, 1, 0.14866649053517, NULL, NULL),
(14809, 0.75, 0.5, 0.12634566431988, NULL, NULL),
(14810, 0.5, 0.25, 0.25810411989377, NULL, NULL),
(14811, 0.25, 0.5, 0.37031910431106, NULL, NULL),
(14812, 1, 1, 0.38397080490499, NULL, NULL),
(14813, 0.5, 0.5, 0.11811578098095, NULL, NULL),
(14814, 0.75, 1, 0.12282752935483, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `random`
--

CREATE TABLE `random` (
  `id` int(11) NOT NULL,
  `data` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `random`
--

INSERT INTO `random` (`id`, `data`) VALUES
(3303, 0.617),
(3304, 0.094),
(3305, 0.657),
(3306, 0.976),
(3307, 0.735),
(3308, 0.728),
(3309, 0.547),
(3310, 0.796),
(3311, 0.61),
(3312, 0.376);

-- --------------------------------------------------------

--
-- Table structure for table `random2`
--

CREATE TABLE `random2` (
  `id` int(11) NOT NULL,
  `data` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `random2`
--

INSERT INTO `random2` (`id`, `data`) VALUES
(3243, 0.087),
(3244, 0.419),
(3245, 0.285),
(3246, 0.79),
(3247, 0.054),
(3248, 0.946),
(3249, 0.198),
(3250, 0.318),
(3251, 0.28),
(3252, 0.523);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `jk` varchar(128) NOT NULL,
  `nis` int(123) NOT NULL,
  `kelas` varchar(128) NOT NULL,
  `tahun_angkatan` int(128) NOT NULL,
  `nama_beasiswa` varchar(128) NOT NULL,
  `tahun_beasiswa` int(128) NOT NULL,
  `tanggungan_ortu` int(128) NOT NULL,
  `penghasilan_ortu` int(128) NOT NULL,
  `tagihan_air` int(128) NOT NULL,
  `tagihan_listrik` int(128) NOT NULL,
  `nilai_raport` decimal(4,2) NOT NULL,
  `id_kriteria` int(11) DEFAULT NULL,
  `id_perhitungan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nama`, `jk`, `nis`, `kelas`, `tahun_angkatan`, `nama_beasiswa`, `tahun_beasiswa`, `tanggungan_ortu`, `penghasilan_ortu`, `tagihan_air`, `tagihan_listrik`, `nilai_raport`, `id_kriteria`, `id_perhitungan`) VALUES
(55, 'Max Robinson Tagi Huma', 'Laki - Laki', 21323123, '10 A', 324234, 'qeweqeq', 123132, 4, 600000, 250000, 350000, '62.00', NULL, NULL),
(56, 'Antonia Akulina Elsandha Pohto', '', 2234342, '10 A', 45354, 'rwerer', 4353, 3, 600000, 60000, 60000, '82.00', NULL, NULL),
(57, 'Esther Laure', '', 24342, '10 A', 32424423, 'ewrewef', 234342, 2, 1200000, 40000, 250000, '65.00', NULL, NULL),
(58, 'Sonia Agnes Nenotek', '', 234242, '10 A', 2343, 'ewfef', 23423423, 4, 600000, 150000, 60000, '65.00', NULL, NULL),
(59, 'Bryan Julio Oematan', '', 24342, '10 A', 43534, 'wewrwer', 3454535, 4, 1600000, 150000, 60000, '90.00', NULL, NULL),
(60, 'Esterranda Afri Bella', '', 23434, '10 B', 2423432, 'rwrrw', 75556, 3, 3500000, 40000, 150000, '90.00', NULL, NULL),
(61, 'Brigita Jesica Faot', '', 35534, '10 B', 354535, 'efwef', 534535, 2, 1600000, 250000, 400000, '90.00', NULL, NULL),
(62, 'Mesandra Boimau', '', 23423, '10 B', 234, 'efwwww', 54353, 5, 600000, 40000, 40000, '65.00', NULL, NULL),
(63, 'Nadine Gretha Ester Letty', '', 24324, '10 C', 312313, 'werwer', 243423, 3, 1600000, 60000, 250000, '65.00', NULL, NULL),
(64, 'Evered P.O. Haning', '', 24343, '10 C', 342342, 'qweeq', 4323, 4, 600000, 150000, 150000, '90.00', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`),
  ADD KEY `id_perhitungan` (`id_perhitungan`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `perhitungan`
--
ALTER TABLE `perhitungan`
  ADD PRIMARY KEY (`id_perhitungan`),
  ADD KEY `id_kriteria` (`id_kriteria`),
  ADD KEY `id_siswa` (`id_siswa`),
  ADD KEY `matrix_x` (`matrix_x`),
  ADD KEY `matrix_u` (`matrix_u`);

--
-- Indexes for table `random`
--
ALTER TABLE `random`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `random2`
--
ALTER TABLE `random2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `id_kriteria` (`id_kriteria`),
  ADD KEY `id_perhitungan` (`id_perhitungan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27398;

--
-- AUTO_INCREMENT for table `perhitungan`
--
ALTER TABLE `perhitungan`
  MODIFY `id_perhitungan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14815;

--
-- AUTO_INCREMENT for table `random`
--
ALTER TABLE `random`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3313;

--
-- AUTO_INCREMENT for table `random2`
--
ALTER TABLE `random2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3253;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD CONSTRAINT `kriteria_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`);

--
-- Constraints for table `perhitungan`
--
ALTER TABLE `perhitungan`
  ADD CONSTRAINT `perhitungan_ibfk_1` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id_kriteria`);

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`id_perhitungan`) REFERENCES `perhitungan` (`id_perhitungan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
