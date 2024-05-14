-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2022 at 05:08 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gestion_courrier`
--

-- --------------------------------------------------------

--
-- Table structure for table `archives`
--

CREATE TABLE `archives` (
  `id` int(11) NOT NULL,
  `filename` varchar(50) NOT NULL,
  `pdf` varchar(50) NOT NULL,
  `statut` varchar(20) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `uploadtime` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `archives`
--

INSERT INTO `archives` (`id`, `filename`, `pdf`, `statut`, `description`, `uploadtime`) VALUES
(172, 'STE', 'Assembleur (2).pdf', '', '', '2022-08-05'),
(174, 'management des entreprise', 'compte rendu word assadini.pdf', '', '', '2022-08-07');

-- --------------------------------------------------------

--
-- Table structure for table `lg_cde`
--

CREATE TABLE `lg_cde` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lg_cde`
--

INSERT INTO `lg_cde` (`id`, `nom`, `prenom`, `email`, `pass`) VALUES
(2, 'khalid', 'elbouari', 'khalid@gmail.com', '73c351c42d8dcabe71938a865ad38b31'),
(3, 'hamza', 'scrip', 'hamza@gmail.com', '8950259507cd8ce2a99f8b94674f2b77');

-- --------------------------------------------------------

--
-- Table structure for table `lg_decanat`
--

CREATE TABLE `lg_decanat` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lg_decanat`
--

INSERT INTO `lg_decanat` (`id`, `nom`, `prenom`, `email`, `pass`) VALUES
(16, 'khalid', 'elbouari', 'khalid@gmail.com', '73c351c42d8dcabe71938a865ad38b31'),
(18, 'samil', 'ayoub', 'ayoub@gmail.com', '25ae1b3ee9c85bbfa4da149f286b20f2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `archives`
--
ALTER TABLE `archives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lg_cde`
--
ALTER TABLE `lg_cde`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lg_decanat`
--
ALTER TABLE `lg_decanat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `archives`
--
ALTER TABLE `archives`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;

--
-- AUTO_INCREMENT for table `lg_cde`
--
ALTER TABLE `lg_cde`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lg_decanat`
--
ALTER TABLE `lg_decanat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
