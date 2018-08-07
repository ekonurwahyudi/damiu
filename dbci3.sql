-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2018 at 06:50 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbci3`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nomorhp` int(64) NOT NULL,
  `jabatan` text NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `email`, `nomorhp`, `jabatan`, `username`, `password`) VALUES
(1, 'Eko', 'eko@mhs.unsyiah.ac.id', 0, '0', 'eko', 'ec967833951ea475033e1edc0b28783c'),
(3, 'Eko Nurwahyudi', 'generasic@gmail.com', 0, '0', 'eko nurwahyudi', '07c3ff252fb40ad39674ebf873cabdb1'),
(4, 'siomera', 'siomera@gmail.com', 83, 'pemilik', 'siomera', '18206e4bd704e389f6d73ba1e676d754'),
(5, 'Miti KM', 'miti@gmail.com', 0, '0', 'mahasiswa', 'ec967833951ea475033e1edc0b28783c'),
(6, 'feawf', 'efawef@gmail.com', 0, '0', 'efawf', 'c4ca4238a0b923820dcc509a6f75849b'),
(8, 'tt', 'gserg@gmail.com', 0, '0', 'tsregs', 'c81e728d9d4c2f636f067f89cc14862c'),
(9, 'fawfea', 'ewwafeaw@gmail.com', 0, '0', 'feewafw', 'c20ad4d76fe97759aa27a0c99bff6710');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
