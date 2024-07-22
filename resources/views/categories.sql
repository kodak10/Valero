-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3307
-- Généré le : lun. 22 juil. 2024 à 13:31
-- Version du serveur : 8.0.30
-- Version de PHP : 8.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `valeroproject`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--


--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `nom`, `couverture`, `created_at`, `updated_at`) VALUES
(1, 'Cahier', '1719746654.png', '2024-06-30 09:24:14', '2024-06-30 09:24:14'),
(2, 'Stylos', '1719746666.png', '2024-06-30 09:24:26', '2024-06-30 09:24:26'),
(3, 'Ensemble Géogmétrie', '1719746679.png', '2024-06-30 09:24:39', '2024-06-30 09:24:39');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
