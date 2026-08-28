-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2026 at 08:14 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `20242021_3a2`
--

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

CREATE TABLE `awards` (
  `ID` int(11) NOT NULL,
  `Judul` varchar(100) NOT NULL,
  `Deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `awards`
--

INSERT INTO `awards` (`ID`, `Judul`, `Deskripsi`) VALUES
(1, 'MTV Video Music Awards (VMA)\r\n', 'Memenangkan Best Metaverse Performance (2022) serta Best Group atau Group of the Year (2023 & 2025).'),
(2, 'Guinness World Records', 'Memecahkan berbagai rekor, termasuk sebagai artis musik dengansubscriber terbanyak di YouTube'),
(3, 'MAMA Awards 2022', 'BLACKPINK memenangkan kategori Best Female Group serta Worldwide Fans\' Choice Top 10 (menjadi satu-satunya grup wanita yang meraih penghargaan tersebut pada tahun itu).');

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE `music` (
  `ID` int(11) NOT NULL,
  `Judul` varchar(100) NOT NULL,
  `Link` varchar(255) NOT NULL,
  `Viewers` varchar(20) NOT NULL,
  `Presentase` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`ID`, `Judul`, `Link`, `Viewers`, `Presentase`) VALUES
(1, 'DDU-DU DDU-DU ', 'https://youtu.be/IHNzOHi8sJs', '255B+', 100),
(2, 'KILL THIS LOVE', 'https://youtu.be/2S24-y0Ij3Y', '2B+', 90),
(3, 'HOW YOU LIKE THAT', 'https://youtu.be/ioNng23DkIM', '1B+', 75),
(4, 'AS IF IT\'S YOUR LAST', 'https://youtu.be/Amq-qlqbjYA', '1B+', 65),
(5, 'BOOMBAYAH', 'https://youtu.be/bwmSjveL3Lc', '1B+', 60);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `awards`
--
ALTER TABLE `awards`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `awards`
--
ALTER TABLE `awards`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `music`
--
ALTER TABLE `music`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
