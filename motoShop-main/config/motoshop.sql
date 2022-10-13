-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : Dim 07 août 2022 à 15:26
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `motoshop`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `motdepasse` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `pseudo`, `email`, `motdepasse`) VALUES
(33, 'FrankyBoub', 'frankyboub@admin.com', 'monoshop#123');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prix` int(11) NOT NULL,
  `description` text NOT NULL,
  `quantite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `image`, `nom`, `prix`, `description`, `quantite`) VALUES
(1, 'https://media.motoservices.com/media/cache/vehicle_detail/media/vehicle/2510/monster-937-plus-red-model-preview-1050x650.png', 'Ducati Monster', 2500, 'Un véritable concentré de style, de sport et de plaisir qui vous donnera envie de vous débarrasser du superflu et de vous concentrer uniquement sur l\'essentiel, le pur plaisir de conduite.', 10),
(2, 'https://media.motoservices.com/media/cache/vehicle_detail/media/vehicle/1587/suzuki-gsx250rl8-2017.jpg', 'Suzuki GSX-250R', 5399, 'Au niveau de la motorisation, la nouvelle GSX-250R développe une puissance suffisante de 24,5 chevaux à 8000 tr/mn et son couple progresse un peu, à 23,4 Nm à 6500 tr/mn (23 Nm à 6500 tr/min sur l’Inazuma). Guidon en mains ce moteur est donc un peu plus plein et plus agréable en reprises entre 20 et 90 km/h', 15),
(3, 'http://www.lerepairedesmotards.com/img/technique/fiches/tech-kawasaki-z900.jpg', 'Kawasaki Z900', 10, 'Type : Quatre cylindres en ligne, 4 temps, refroidissement liquide, distribution par double arbre à cames en tête, 16 soupapes\r\n', 5),
(4, 'https://www.kuttler.fr/19722-large_default/ktm-250-sx-f-2020.jpg', 'KTM 250 SX-F 2022\r\n', 9115, 'La KTM 250 SX-F version 2020 est appelée une fois encore à régner sans partage sur les pistes de motocross. Non contente d’être l’une des plus légères de sa catégorie, elle propose un déploiement de puissance sans égal, mais parfaitement maîtrisable.', 30),
(5, 'http://www.moto-net.com/sites/default/files/panorama-motos-gp-2019_s.jpg', 'Moto GP', 590, 'Création : 1994\r\nClassement 2021 : 9e (135 points)\r\n\r\nTeam manageur : Paolo Bonora\r\nMoteur : 4 cylindres en V\r\nPoids : 157 kg', 100),
(6, 'https://image.made-in-china.com/226f3j00dQgYGcRlvUoS/150cc-Suzuki-Motorbike.jpg', 'moto suzuki', 560, 'moto de course', 50),
(7, 'https://4cd4cj14l1sc1dgwgl3o3ja5-wpengine.netdna-ssl.com/wp-content/uploads/2017/02/suzuki-gsxs-750-l8-rouge.jpg', 'moto suzuki', 1000, 'Moto de course', 40);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
