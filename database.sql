-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2023 at 03:44 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adminlte2`
--

-- --------------------------------------------------------

--
-- Table structure for table `casts`
--

CREATE TABLE `casts` (
  `id` int(10) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `umur` int(12) NOT NULL,
  `bio` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `casts`
--

INSERT INTO `casts` (`id`, `nama`, `umur`, `bio`) VALUES
(1, 'Cahya Lazuardi', 41, 'Reprehenderit eaque vitae quam laborum delectus.'),
(2, 'Uchita Widiastuti S.E.I', 42, 'Tempore qui ipsam sint sint ipsa.'),
(3, 'Kania Wijayanti', 15, 'Atque sapiente eveniet vel animi voluptatem ipsam et.'),
(4, 'Victoria Hassanah M.Ak', 20, 'Molestiae vitae recusandae vel non consequuntur quis.'),
(5, 'Samsul Winarno', 30, 'Magni aut qui ut ipsum blanditiis nemo.'),
(6, 'Salwa Rahmi Mayasari', 33, 'Vero quia vel est occaecati eos perferendis quae quos.'),
(7, 'Jais Ikhsan Saefullah S.E.', 47, 'Rerum laborum et itaque eius soluta rerum.'),
(8, 'Fitriani Sadina Oktaviani', 49, 'Velit enim aut ut.'),
(9, 'Budi Nugroho', 19, 'Autem quis expedita libero labore assumenda cupiditate.'),
(10, 'Elvin Nardi Iswahyudi M.Ak', 21, 'Dolor voluptate sed vel sapiente.'),
(11, 'Cengkal Saptono', 50, 'In dolor harum voluptas harum.'),
(12, 'Dian Novitasari', 50, 'Perspiciatis nobis qui quidem quibusdam pariatur minus.'),
(13, 'Fitriani Sudiati', 39, 'Dignissimos eum libero velit et at maxime.'),
(14, 'Mahmud Simbolon', 39, 'Et doloremque qui dolores ipsam ex nam et.'),
(15, 'Mutia Dalima Handayani S.Pt', 40, 'Unde in ad quo asperiores et et.'),
(16, 'Jasmin Raisa Hastuti S.E.', 32, 'Quia accusamus dolorum laudantium aut quisquam aperiam.'),
(17, 'Kurnia Ardianto S.E.I', 26, 'Perspiciatis eligendi odit ducimus et.'),
(18, 'Kemal Tugiman Dongoran', 47, 'Placeat aperiam quia voluptas maxime.'),
(19, 'Zamira Nurdiyanti', 36, 'Enim qui et est dolores consequatur quia explicabo iusto.'),
(20, 'Carub Habibi S.Gz', 50, 'Et incidunt illo rerum.');

-- --------------------------------------------------------

--
-- Table structure for table `films`
--

CREATE TABLE `films` (
  `id` int(8) NOT NULL,
  `judul` varchar(256) NOT NULL,
  `tahun` int(8) NOT NULL,
  `ringkasan` text NOT NULL,
  `poster` varchar(64) NOT NULL,
  `genre_id` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `id` int(12) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `nama`) VALUES
(1, 'Action'),
(2, 'Adventure'),
(3, 'RPG'),
(4, 'Simulation'),
(5, 'Strategy'),
(6, 'Sport');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `casts`
--
ALTER TABLE `casts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `casts`
--
ALTER TABLE `casts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `films`
--
ALTER TABLE `films`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
