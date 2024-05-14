-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 25 oct. 2022 à 00:49
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestcourr`
--

-- --------------------------------------------------------

--
-- Structure de la table `archive`
--

CREATE TABLE `archive` (
  `Num_arch` int(11) NOT NULL,
  `nom_courrier_archiver` varchar(30) NOT NULL,
  `date_archivage` date NOT NULL,
  `pdf_Arch` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `archive`
--

INSERT INTO `archive` (`Num_arch`, `nom_courrier_archiver`, `date_archivage`, `pdf_Arch`) VALUES
(11, 'Last', '2022-10-25', 'modules.pdf');

-- --------------------------------------------------------

--
-- Structure de la table `courrier`
--

CREATE TABLE `courrier` (
  `id` int(11) NOT NULL,
  `Nom_courrier` varchar(50) NOT NULL,
  `pdf` varchar(50) NOT NULL,
  `statut` varchar(20) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `uploadtime` date DEFAULT NULL,
  `code` int(11) DEFAULT NULL,
  `Num_arch` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `courrier`
--

INSERT INTO `courrier` (`id`, `Nom_courrier`, `pdf`, `statut`, `description`, `uploadtime`, `code`, `Num_arch`) VALUES
(7, 'test', 'downloadfile-3.pdf', '  5/5  ', 'admis', '2022-10-24', 2, NULL),
(9, 'test', 'modules.pdf', '0/5', 'non admis', '2022-10-24', 2, NULL),
(10, 'test', 'modules.pdf', NULL, NULL, '2022-10-25', 1, NULL),
(11, 'Last', 'modules.pdf', '  5/5', 'admis', '2022-10-25', 1, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `departement`
--

CREATE TABLE `departement` (
  `Num_dept` int(11) NOT NULL,
  `Nom_dept` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `departement`
--

INSERT INTO `departement` (`Num_dept`, `Nom_dept`) VALUES
(1, 'CED'),
(2, 'decanat');

-- --------------------------------------------------------

--
-- Structure de la table `employee`
--

CREATE TABLE `employee` (
  `code` int(11) NOT NULL,
  `Nom_complet` varchar(60) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Back_up_code` varchar(8) NOT NULL,
  `sexe` varchar(6) NOT NULL,
  `Num_dept` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `employee`
--

INSERT INTO `employee` (`code`, `Nom_complet`, `Email`, `Password`, `Back_up_code`, `sexe`, `Num_dept`) VALUES
(0, 'Bessi Haitam', 'x@gmail.com', 'cc8c0a97c2dfcd73caff160b65aa39e2', '41112859', 'Homme', 1),
(1, 'bessi', 'a@gmail.com', 'cc8c0a97c2dfcd73caff160b65aa39e2', '59574764', 'Femme', 2),
(2, 'hmad', 'b@gmail.com', 'cc8c0a97c2dfcd73caff160b65aa39e2', '61899951', 'Femme', 1),
(3, 'cdcd', '', 'd41d8cd98f00b204e9800998ecf8427e', '63840851', 'Homme', 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `archive`
--
ALTER TABLE `archive`
  ADD PRIMARY KEY (`Num_arch`);

--
-- Index pour la table `courrier`
--
ALTER TABLE `courrier`
  ADD PRIMARY KEY (`id`),
  ADD KEY `code` (`code`),
  ADD KEY `Num_arch` (`Num_arch`);

--
-- Index pour la table `departement`
--
ALTER TABLE `departement`
  ADD PRIMARY KEY (`Num_dept`);

--
-- Index pour la table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`code`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `archive`
--
ALTER TABLE `archive`
  MODIFY `Num_arch` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `courrier`
--
ALTER TABLE `courrier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `employee`
--
ALTER TABLE `employee`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
