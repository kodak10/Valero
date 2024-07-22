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
-- Structure de la table `articles`
--

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `categorie_id`, `nom`, `surnoms`, `prix`, `couleurs`, `taille_format`, `en_stock`, `description`, `images`, `second_mains`, `created_at`, `updated_at`) VALUES
(1, 1, 'Cahier étudiant 200 pages', NULL, 1000.00, NULL, NULL, 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, et voluptatum amet excepturi temporibus modi iusto, vel voluptas quo id pariatur nobis aperiam quae voluptatem exercitationem, quidem optio? Praesentium, architecto?', NULL, '1', '2024-06-30 09:25:03', '2024-07-17 18:34:23'),
(2, 2, 'Bic Bleu', NULL, 100.00, NULL, NULL, 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, et voluptatum amet excepturi temporibus modi iusto, vel voluptas quo id pariatur nobis aperiam quae voluptatem exercitationem, quidem optio? Praesentium, architecto?', NULL, '1', '2024-06-30 09:25:17', '2024-07-17 18:39:55'),
(3, 3, 'Ensemble Géogmétrie', NULL, 600.00, NULL, NULL, 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, et voluptatum amet excepturi temporibus modi iusto, vel voluptas quo id pariatur nobis aperiam quae voluptatem exercitationem, quidem optio? Praesentium, architecto?', NULL, '1', '2024-06-30 09:25:34', '2024-07-17 18:34:10'),
(4, 1, 'Etudiants 300 pages', NULL, 10000.00, NULL, NULL, 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, et voluptatum amet excepturi temporibus modi iusto, vel voluptas quo id pariatur nobis aperiam quae voluptatem exercitationem, quidem optio? Praesentium, architecto?', NULL, '1', '2024-06-30 09:38:15', '2024-07-17 18:33:56');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_categorie_id_foreign` (`categorie_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_categorie_id_foreign` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
