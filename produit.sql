-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 23 juin 2022 à 15:39
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `produit`
--

-- --------------------------------------------------------

--
-- Structure de la table `aliments`
--

DROP TABLE IF EXISTS `aliments`;
CREATE TABLE IF NOT EXISTS `aliments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` text COLLATE utf8_unicode_ci NOT NULL,
  `quantiter` int NOT NULL,
  `type` text COLLATE utf8_unicode_ci NOT NULL,
  `minimum` int NOT NULL,
  `prix` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=100 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `aliments`
--

INSERT INTO `aliments` (`id`, `nom`, `quantiter`, `type`, `minimum`, `prix`) VALUES
(39, 'Crème Fraiche', 0, 'Alimentaire', 2, 0),
(40, 'Lardon', 0, 'Alimentaire', 1, 0),
(36, 'Allumettes', 0, 'Produit', 1, 0),
(37, 'VitroCleam', 0, 'Produit', 1, 0),
(35, 'Sucre (morceau)', 0, 'Alimentaire', 1, 0),
(34, 'Café', 0, 'Alimentaire', 1, 0),
(33, 'Gâteau - Granola', 0, 'Alimentaire', 0, 0),
(43, 'Yaourt Frutos', 0, 'Alimentaire', 4, 0),
(44, 'Charcuterie - Jambon', 0, 'Alimentaire', 1, 0),
(45, 'Charcuterie - Saucisse', 0, 'Alimentaire', 1, 0),
(46, 'Oeuf', 0, 'Alimentaire', 2, 0),
(47, 'Yaourt Danette', 0, 'Alimentaire', 4, 0),
(48, 'Fromage - Camenbert', 0, 'Alimentaire', 0, 1),
(49, 'Fromage - Roquefort', 0, 'Alimentaire', 0, 0),
(50, 'Fromage - Kiri', 0, 'Alimentaire', 0, 0),
(51, 'Yaourt Fruit', 0, 'Alimentaire', 4, 0),
(52, 'Charcuterie - Saucisson', 0, 'Alimentaire', 1, 0),
(53, 'Pâte - Coquillette', 0, 'Alimentaire', 2, 0),
(54, 'Pâte - Farfalle', 0, 'Alimentaire', 2, 0),
(55, 'Pâte - Penne', 0, 'Alimentaire', 2, 0),
(56, 'Riz (sachet)', 0, 'Alimentaire', 2, 0),
(57, 'Boite - Cassoulet', 0, 'Alimentaire', 2, 0),
(58, 'Boite - Saucisse Lentille', 0, 'Alimentaire', 2, 0),
(59, 'Boite - Ravioli', 0, 'Alimentaire', 2, 0),
(60, 'Pizza', 0, 'Alimentaire', 2, 0),
(61, 'Brique de lait', 0, 'Alimentaire', 2, 0),
(62, 'Bouteille d\'eau', 0, 'Alimentaire', 2, 0),
(63, 'Eponge', 5, 'Produit', 1, 0),
(64, 'Charcuterie - Paté de foie', 0, 'Alimentaire', 1, 0),
(65, 'Charcuterie - Paté de cannard', 0, 'Alimentaire', 1, 0),
(66, 'Charcuterie - Rilettes porc', 0, 'Alimentaire', 1, 0),
(67, 'Charcuterie - Rilettes poulet', 0, 'Alimentaire', 0, 0),
(68, 'Chocolat (poudre)', 0, 'Alimentaire', 1, 0),
(69, 'Beurre - Cuisson', 0, 'Alimentaire', 1, 0),
(70, 'Beurre - demi sel / doux', 0, 'Alimentaire', 1, 0),
(71, 'Mayonnaisse', 0, 'Alimentaire', 1, 0),
(72, 'Legume - Salade', 0, 'Alimentaire', 0, 0),
(73, 'Steak haché', 0, 'Alimentaire', 4, 0),
(74, 'Filet - Poulet ou Dinde', 0, 'Alimentaire', 4, 0),
(75, 'Poisson - Pané', 0, 'Alimentaire', 1, 0),
(76, 'Poisson - Cabillaud', 0, 'Alimentaire', 1, 0),
(77, 'Poisson - Saumon', 0, 'Alimentaire', 1, 0),
(78, 'Cote de porc', 0, 'Alimentaire', 4, 0),
(79, 'Legume - Brocolie', 0, 'Alimentaire', 1, 0),
(80, 'Legume - Haricot Vert', 0, 'Alimentaire', 1, 0),
(81, 'Pomme de terre', 0, 'Alimentaire', 0, 0),
(82, 'Oignon Jaune', 0, 'Alimentaire', 2, 0),
(83, 'Oignon Rouge', 0, 'Alimentaire', 2, 0),
(84, 'Pain de mie', 2, 'Alimentaire', 1, 0),
(85, 'Cuisse de poulet', 0, 'Alimentaire', 0, 0),
(86, 'Baguette de pain', 0, 'Alimentaire', 0, 0),
(87, 'Hamburger', 0, 'Alimentaire', 1, 0),
(88, 'Fromage - Gruyère ', 0, 'Alimentaire', 1, 0),
(89, 'Huile d\'olive', 0, 'Alimentaire', 1, 0),
(90, 'Huile de cuisson', 0, 'Alimentaire', 1, 0),
(91, 'Sac Poubelle', 2, 'Produit', 1, 0),
(92, 'Pastille de lave vaiselle', 1, 'Produit', 1, 0),
(93, 'Liquide de rinçage', 1, 'Produit', 1, 0),
(94, 'Lessive', 2, 'Produit', 1, 0),
(95, 'Nettoyant sol', 2, 'Produit', 1, 0),
(96, 'Paic - Liquide vaiselle', 1, 'Produit', 1, 0),
(97, 'Gateau - Barquette Choco', 0, 'Alimentaire', 1, 0),
(98, 'Gâteau - Savanne', 0, 'Alimentaire', 1, 0),
(99, 'Céréale - Miel Pops', 0, 'Alimentaire', 2, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
