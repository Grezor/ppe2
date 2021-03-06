-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 17 avr. 2019 à 08:05
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ppe1719`
--

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

DROP TABLE IF EXISTS `panier`;
CREATE TABLE IF NOT EXISTS `panier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_produit` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `date_beg` datetime DEFAULT NULL COMMENT 'uniquement si le type du produit == borne',
  `date_end` datetime DEFAULT NULL COMMENT 'uniquement si le type du produit == borne',
  PRIMARY KEY (`id`),
  KEY `fk_id_user` (`id_user`),
  KEY `fk_id_produit` (`id_produit`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci COMMENT='Normalement , a la place de "id_user" , il devrais y avoir "session_token" , pour pouvoir avoir un même compte ouvert deux fois en même temps ( genre phone et laptop ) sans que les panier se chevauche ,\r\nce qui entrain la création d''une table " session " ou seront stocké les diffrent token de session de l''utilisateur   \r\nManque de temps malheureusement';

--
-- Déchargement des données de la table `panier`
--

INSERT INTO `panier` (`id`, `id_user`, `id_produit`, `quantite`, `date_beg`, `date_end`) VALUES
(2, 3, 5, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `photos`
--

DROP TABLE IF EXISTS `photos`;
CREATE TABLE IF NOT EXISTS `photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_prise` datetime DEFAULT NULL,
  `id_reservation` int(11) DEFAULT NULL,
  `url` varchar(45) DEFAULT NULL,
  `estAime` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `id_reservation_idx` (`id_reservation`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `photos`
--

INSERT INTO `photos` (`id`, `date_prise`, `id_reservation`, `url`, `estAime`) VALUES
(2, '2019-04-05 15:09:52', 3, '2.jpg', 1),
(3, '2019-04-05 15:09:52', 3, '1.jpg', 1),
(4, '2019-04-05 15:09:52', 3, '3.jpg', 1),
(5, '2019-03-05 16:31:16', 3, '5.jpg', 1),
(6, '2019-03-05 16:31:16', 3, '5.jpg', 1),
(7, '2019-03-05 16:31:16', 3, '5.jpg', 0),
(8, '2019-03-05 16:31:16', 3, '5.jpg', 1),
(9, '2019-03-05 16:31:16', 3, '5.jpg', 1),
(10, '2019-03-05 16:31:16', 3, '5.jpg', 1),
(11, '2019-03-05 16:31:16', 3, '5.jpg', 1),
(12, '2019-03-05 16:31:16', 3, '5.jpg', 1),
(13, '2019-03-05 16:31:16', 3, '5.jpg', 1),
(14, '2019-03-05 16:31:16', 3, '5.jpg', 1),
(15, '2019-03-05 16:31:16', 3, '5.jpg', 1),
(16, '2019-03-05 16:31:16', 3, '5.jpg', 0),
(17, '2019-03-05 16:31:16', 3, '5.jpg', 1),
(18, '2019-03-05 16:31:16', 3, '5.jpg', 1),
(19, '2019-03-05 16:31:16', 3, '5.jpg', 1),
(20, '2019-03-05 16:31:16', 3, '5.jpg', 1),
(21, '2019-03-05 16:31:16', 3, '5.jpg', 1),
(22, '2019-03-05 16:31:16', 3, '5.jpg', 1),
(23, '2019-03-05 16:31:16', 3, '5.jpg', 1),
(24, '2019-03-05 16:31:16', 3, '5.jpg', 1),
(25, '2019-03-05 16:31:16', 3, '5.jpg', 0),
(26, '2019-03-05 16:31:16', 3, '5.jpg', 1),
(27, '2019-03-05 16:31:16', 3, '5.jpg', 1),
(28, '2019-03-05 16:31:16', 3, '5.jpg', 1),
(29, '2019-03-05 16:31:16', 3, '5.jpg', 1);

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `type` enum('borne','consomable') COLLATE latin1_general_ci NOT NULL,
  `description` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `prix` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT '0',
  `img_url` varchar(255) COLLATE latin1_general_ci NOT NULL DEFAULT 'no_img.jpg',
  `promo` int(11) NOT NULL DEFAULT '0' COMMENT 'En % de rabais sur le prix du produit',
  `stock` int(11) NOT NULL DEFAULT '0' COMMENT 'MAX = 1 pour les Bornes',
  `code_article` int(11) NOT NULL DEFAULT '0' COMMENT 'borne like "9*****" and consomable like "1*****"',
  PRIMARY KEY (`id`),
  UNIQUE KEY `Index 2` (`code_article`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci COMMENT='cette table contient les divers produit ( SAUF BORNES ) que l''utilisateur peut acheter pour complété ça résevation , tel que des imprimante portable , feuille d''impression , etc ( ce ne sont que des exmples ! ) \r\n ';

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `nom`, `type`, `description`, `prix`, `img_url`, `promo`, `stock`, `code_article`) VALUES
(1, 'Cartouche encres noir', 'consomable', 'Une cartouche d\'encre de couleur noir permetant l\'impression de plus de 200 photos !', '15.99', 'no_img.jpg', 0, 0, 10001),
(2, 'Cartouche encres rouge', 'consomable', 'Une cartouche d\'encre de couleur rouge permetant l\'impression de plus de 200 photos !', '15.99', 'no_img.jpg', 0, 0, 10002),
(3, 'Cartouche encres rouge', 'consomable', 'Une cartouche d\'encre de couleur rouge permetant l\'impression de plus de 200 photos !', '15.99', 'no_img.jpg', 0, 0, 10003),
(4, 'Borne prenium', 'borne', 'Une joli borne, de qualité supérieure !', '199.99', 'borne2.jpg', 0, 1, 90001),
(5, 'testBornes', 'borne', 'Une joli borne, de qualité supérieure !', '199.99', 'borne2.jpg', 0, 1, 90002);

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE IF NOT EXISTS `reservations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_users` int(11) NOT NULL,
  `forfait` int(11) NOT NULL DEFAULT '25' COMMENT 'nombre de "like" restant que l''utilisateur peut attribuer aux photos liées à la réservation',
  `likes` int(11) NOT NULL DEFAULT '0' COMMENT 'nombre de "like" déja attribués aux photos liées à la reservation',
  `id_borne` int(11) NOT NULL,
  `date_beg` datetime NOT NULL,
  `date_end` datetime NOT NULL,
  `code_event` varchar(6) NOT NULL COMMENT 'code composé de "#00000" pas de lettres/',
  PRIMARY KEY (`id`),
  KEY `id_bornes` (`id_borne`),
  KEY `id_users` (`id_users`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COMMENT='le forfait le plus petit est iniatlement set a 25,\r\ndans "API_ecommerce.php" il nous faut crée une "insert ''réservation'' ..." avec le champ "forfait" en tant que varibale ,\r\net recueillir depuis l''interface web le forfait choisi par le consommateur ( ex : 25 // 50 // 75 // 100 ) ';

--
-- Déchargement des données de la table `reservations`
--

INSERT INTO `reservations` (`id`, `id_users`, `forfait`, `likes`, `id_borne`, `date_beg`, `date_end`, `code_event`) VALUES
(2, 3, 25, 0, 4, '2019-03-05 00:00:00', '2019-03-06 00:00:00', ''),
(3, 3, 0, 25, 4, '2019-04-03 00:00:00', '2019-04-15 00:00:00', ''),
(4, 3, 25, 0, 4, '2019-04-20 00:00:00', '2019-04-30 00:00:00', 'OKTEST');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `confirmation_token` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `confirmed_at` datetime DEFAULT NULL,
  `reset_token` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `roles` enum('menber','Admin') COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `confirmation_token`, `confirmed_at`, `reset_token`, `reset_at`, `roles`) VALUES
(3, 'coucou', 'test@gmail.com', '721a9b52bfceacc503c056e3b9b93cfa', NULL, NULL, NULL, NULL, 'Admin'),
(4, 'yolo', 'yolo@efficom.com', '098f6bcd4621d373cade4e832627b4f6', NULL, NULL, NULL, NULL, 'menber');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `panier`
--
ALTER TABLE `panier`
  ADD CONSTRAINT `fk_id_produit` FOREIGN KEY (`id_produit`) REFERENCES `produits` (`id`),
  ADD CONSTRAINT `fk_id_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `photos`
--
ALTER TABLE `photos`
  ADD CONSTRAINT `fk_idresa` FOREIGN KEY (`id_reservation`) REFERENCES `reservations` (`id`);

--
-- Contraintes pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `reservations_ibfk_2` FOREIGN KEY (`id_borne`) REFERENCES `produits` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
