-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 03 mars 2023 à 16:56
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `monsalonline`
--

-- --------------------------------------------------------

--
-- Structure de la table `customer`
--

CREATE TABLE `customer` (
  `CustomerID` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `PhoneNumber` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `State` varchar(50) NOT NULL,
  `Customer_reference` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `customer`
--

INSERT INTO `customer` (`CustomerID`, `FirstName`, `LastName`, `Email`, `PhoneNumber`, `Address`, `City`, `State`, `Customer_reference`) VALUES
(40, '', '', '', '', '', '', '', ''),
(41, 'Jane', 'Doe', 'janedoe@email.com', '555-555-5556', 'ghhhj', 'Anytown', 'Anystate', 'ghhh'),
(42, 'Nouhaila', 'LAAOUINA', 'nouhaila@gmail.com', '0679974973', 'nouha@gmail.com', 'Safi', 'AZER', 'iniqid()'),
(43, 'Nouhaila', 'LAAOUINA', 'nouhaila@gmail.com', '0679974973', 'nouhaila@gmail.com', 'Safi', 'ghklk', ''),
(44, 'Nouhaila', 'LAAOUINA', 'nouhaila@gmail.com', '0679974973', 'laaouinanouhaila2019@gmail.com', 'Safi', 'ghklk', '58'),
(45, 'Nouhaila', 'LAAOUINA', 'nouhaila@gmail.com', '0679974973', 'laaouinanouhaila2019@gmail.com', 'Safi', 'ghklk', '63f5ee7405076'),
(46, 'Nouhaila', 'LAAOUINA', 'nouhaila@gmail.com', '0679974973', 'laaouinanouhaila2019@gmail.com', 'Safi', 'ghklk', '63f5eee428627'),
(47, 'Nouhaila', 'LAAOUINA', 'nouhaila@gmail.com', '0679974973', 'laaouinanouhaila2019@gmail.com', 'Safi', 'ghklk', '63f5ef46ea2be'),
(48, 'Nouhaila', 'LAAOUINA', 'nouhaila@gmail.com', '0679974973', 'laaouinanouhaila2019@gmail.com', 'Safi', 'ghklk', '63f5ef6066545'),
(49, 'Nouhaila', 'LAAOUINA', 'nouhaila@gmail.com', '0679974973', 'laaouinanouhaila2019@gmail.com', 'Safi', 'ghklk', '63f5ef709c5b1'),
(50, 'Nouhaila', 'LAAOUINA', 'nouhaila@gmail.com', '0679974973', 'laaouinanouhaila2019@gmail.com', 'Safi', 'ghklk', '63f5ef717a360'),
(51, 'Nouhaila', 'LAAOUINA', 'nouhaila@gmail.com', '0679974973', 'laaouinanouhaila2019@gmail.com', 'Safi', 'ghklk', '63f5ef722cc64'),
(52, 'Nouhaila', 'LAAOUINA', 'nouhaila@gmail.com', '0679974973', 'laaouinanouhaila2019@gmail.com', 'Safi', 'ghklk', '63f5f006c2f38'),
(53, 'Nouhaila', 'LAAOUINA', 'nouhaila@gmail.com', '0679974973', 'laaouinanouhaila2019@gmail.com', 'Safi', 'ghklk', '63f5f094273cc'),
(54, 'Nouhaila', 'LAAOUINA', 'nouhaila@gmail.com', '0679974973', 'laaouinanouhaila2019@gmail.com', 'Safi', 'ghklk', '63f5f0b69d763'),
(55, 'Nouhaila', 'LAAOUINA', 'nouhaila@gmail.com', '0679974973', 'laaouinanouhaila2019@gmail.com', 'Safi', 'ghklk', ''),
(56, 'Nouhaila', 'LAAOUINA', 'nouhaila@gmail.com', '0679974973', 'laaouinanouhaila2019@gmail.com', 'Safi', 'ghklk', ''),
(57, 'Nouhaila', 'LAAOUINA', 'nouhaila@gmail.com', '0679974973', 'laaouinanouhaila2019@gmail.com', 'Safi', 'ghklk', '3nr234gi6zh'),
(58, 'Nouhaila', 'LAAOUINA', 'nouhaila@gmail.com', '0679974973', 'laaouinanouhaila2019@gmail.com', 'Safi', 'ghklk', 'd99jr7czvg'),
(59, 'Nouhaila', 'LAAOUINA', 'nouhaila@gmail.com', '0679974973', 'laaouinanouhaila2019@gmail.com', 'Safi', 'ghklk', 'lpp7aczljae'),
(60, 'Nouhaila', 'LAAOUINA', 'nouhaila@gmail.com', '0679974973', 'laaouinanouhaila2019@gmail.com', 'Safi', 'ghklk', '6gnyd41xnxq'),
(61, 'Nouhaila', 'LAAOUINA', 'nouhaila@gmail.com', '0679974973', 'laaouinanouhaila2019@gmail.com', 'Safi', 'ghklk', '5zu74cule4x'),
(62, 'Nouhaila', 'LAAOUINA', 'nouhaila@gmail.com', '0679974973', 'laaouinanouhaila2019@gmail.com', 'Safi', 'ghklk', 'btwqywllfne'),
(63, '', '', 'nouhaila@gmail.com', '', '', '', 'ghklk', '4u30edqvqc5'),
(64, 'Nouhaila', 'LAAOUINA', 'nouhaila@gmail.com', '0679974973', 'laaouinanouhaila2019@gmail.com', 'Safi', 'ghklk', '4u30edqvqc5'),
(65, 'Nouhaila', 'LAAOUINA', 'nouhaila@gmail.com', '0679974973', 'laaouinanouhaila2019@gmail.com', 'Safi', 'ghklk', 'byaj5oi3bkj'),
(66, 'Nouhaila', 'LAAOUINA', 'nouhaila@gmail.com', '0679974973', 'laaouinanouhaila2019@gmail.com', 'Safi', 'ghklk', 'zjxr0ppep0r'),
(67, 'Nouhaila', 'LAAOUINA', 'nouhaila@gmail.com', '0679974973', 'laaouinanouhaila2019@gmail.com', 'Safi', 'ghklk', 'zjxr0ppep0r'),
(68, 'Nouhaila', 'LAAOUINA', 'nouhaila@gmail.com', '0679974973', 'laaouinanouhaila2019@gmail.com', 'Safi', 'ghklk', 'k7d6xwbb1ve'),
(69, 'Nouhaila', 'LAAOUINA', 'nouhaila@gmail.com', '0679974973', 'laaouinanouhaila2019@gmail.com', 'Safi', 'ghklk', 'k7d6xwbb1ve'),
(70, '', '', 'nouhaila@gmail.com', '', '', '', 'ghklk', 'gbqcg2t14qt'),
(71, 'Zena', 'Gonzalez', 'ryzyrykod@mailinator.com', 'taxoxu@mailinator.com', 'kelage@mailinator.com', 'piqaq@mailinator.com', 'Pa$$w0rd!', 'ttbsiylbn5n'),
(72, 'Nouhaila', 'LAAOUINA', 'nouhaila@gmail.com', '0679974973', 'laaouinanouhaila2019@gmail.com', 'Safi', 'ghklk', '3aqvgc9mvtb'),
(73, 'Nouhaila', 'LAAOUINA', 'nouhaila@gmail.com', '0679974973', 'laaouinanouhaila2019@gmail.com', 'Safi', 'ghklk', 'kxl0i0x4zxb'),
(74, 'Nouhaila', 'LAAOUINA', 'nouhaila@gmail.com', '0679974973', 'laaouinanouhaila2019@gmail.com', 'Safi', 'ghklk', 'mps6zckdhqj'),
(75, 'Nouhaila', 'LAAOUINA', 'nouhaila@gmail.com', '0679974973', 'laaouinanouhaila2019@gmail.com', 'Safi', 'ghklk', 'eh5j2vk4nrm'),
(76, 'Nouhaila', 'LAAOUINA', 'nouhaila@gmail.com', '0679974973', 'nouhaila@gmail.com', 'Safi', 'ghklk', 'eu1y7m9z81f'),
(77, 'Urielle', 'Macias', 'qamoxin@mailinator.com', 'tituroveje@mailinator.com', 'lyxiduxeby@mailinator.com', 'xijavexo@mailinator.com', 'Pa$$w0rd!', 'tpro2wvwx7q');

-- --------------------------------------------------------

--
-- Structure de la table `rendez_vous`
--

CREATE TABLE `rendez_vous` (
  `idr` int(11) NOT NULL,
  `idclient` int(11) NOT NULL,
  `dater` date NOT NULL,
  `temp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `rendez_vous`
--

INSERT INTO `rendez_vous` (`idr`, `idclient`, `dater`, `temp`) VALUES
(69, 44, '2023-03-16', '11:00'),
(73, 41, '2023-03-23', '21:00'),
(74, 41, '2023-03-25', '12:00'),
(75, 41, '2023-03-09', '10:00');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Index pour la table `rendez_vous`
--
ALTER TABLE `rendez_vous`
  ADD PRIMARY KEY (`idr`),
  ADD KEY `rendez_vous_ibfk_1` (`idclient`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `customer`
--
ALTER TABLE `customer`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT pour la table `rendez_vous`
--
ALTER TABLE `rendez_vous`
  MODIFY `idr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `rendez_vous`
--
ALTER TABLE `rendez_vous`
  ADD CONSTRAINT `rendez_vous_ibfk_1` FOREIGN KEY (`idclient`) REFERENCES `customer` (`CustomerID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
