-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : ven. 14 jan. 2022 à 09:47
-- Version du serveur :  5.7.34
-- Version de PHP : 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `pizza_lab`
--

-- --------------------------------------------------------

--
-- Structure de la table `boisson`
--

CREATE TABLE `boisson` (
  `id` int(11) NOT NULL,
  `nom` varchar(64) NOT NULL,
  `prix` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `boisson`
--

INSERT INTO `boisson` (`id`, `nom`, `prix`) VALUES
(1, 'COCA-COLA', '1.40'),
(2, 'COCA-COLA LITE', '1.50'),
(3, 'SPRITE', '1.50'),
(4, 'ICE TEA', '1.70'),
(5, 'FANTA', '1.45'),
(6, 'MINUTE MAID', '1.80');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id_commande` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `etat` int(11) DEFAULT '0' COMMENT '0 -> en attente, 1 -> terminée',
  `date_order` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id_commande`, `id_utilisateur`, `etat`, `date_order`, `total`) VALUES
(23, 2, 1, '2022-01-13 14:15:08', 61.78),
(24, 7, 1, '2022-01-13 14:15:55', 36.2),
(25, 3, 1, '2022-01-13 14:16:29', 14.9),
(26, 4, 1, '2022-01-13 14:21:58', 39.3),
(27, 6, 0, '2022-01-13 14:22:29', 20.4),
(28, 5, 0, '2022-01-13 14:23:07', 16),
(29, 1, 1, '2022-01-13 14:40:08', 41.49),
(30, 8, 0, '2022-01-13 14:47:52', 33.95),
(31, 1, 0, '2022-01-13 17:46:29', 35.6);

-- --------------------------------------------------------

--
-- Structure de la table `commande_boisson`
--

CREATE TABLE `commande_boisson` (
  `id_commande` int(11) NOT NULL,
  `id_boisson` int(11) NOT NULL,
  `quantite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commande_boisson`
--

INSERT INTO `commande_boisson` (`id_commande`, `id_boisson`, `quantite`) VALUES
(23, 1, 4),
(24, 2, 1),
(24, 4, 1),
(24, 6, 1),
(25, 1, 1),
(26, 3, 1),
(26, 4, 2),
(27, 4, 2),
(29, 2, 1),
(29, 4, 2),
(30, 4, 2),
(30, 5, 1),
(31, 2, 1),
(31, 3, 1);

-- --------------------------------------------------------

--
-- Structure de la table `commande_dessert`
--

CREATE TABLE `commande_dessert` (
  `id_commande` int(11) NOT NULL,
  `id_dessert` int(11) NOT NULL,
  `quantite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commande_dessert`
--

INSERT INTO `commande_dessert` (`id_commande`, `id_dessert`, `quantite`) VALUES
(23, 1, 2),
(23, 8, 2),
(24, 2, 1),
(24, 3, 1),
(24, 5, 1),
(25, 2, 1),
(26, 1, 1),
(26, 2, 1),
(26, 9, 1),
(28, 3, 2),
(29, 1, 1),
(29, 2, 1),
(29, 8, 1),
(30, 2, 1),
(31, 2, 1),
(31, 5, 1);

-- --------------------------------------------------------

--
-- Structure de la table `commande_pizza`
--

CREATE TABLE `commande_pizza` (
  `id_commande` int(11) NOT NULL,
  `id_pizza` int(11) NOT NULL,
  `quantite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commande_pizza`
--

INSERT INTO `commande_pizza` (`id_commande`, `id_pizza`, `quantite`) VALUES
(23, 1, 2),
(23, 3, 1),
(23, 8, 1),
(24, 5, 1),
(24, 7, 2),
(25, 6, 1),
(26, 1, 1),
(26, 2, 1),
(26, 5, 1),
(27, 4, 1),
(27, 5, 1),
(28, 1, 1),
(28, 8, 1),
(29, 1, 2),
(29, 5, 1),
(30, 3, 1),
(30, 4, 1),
(30, 5, 1),
(31, 1, 1),
(31, 6, 1),
(31, 7, 1);

-- --------------------------------------------------------

--
-- Structure de la table `dessert`
--

CREATE TABLE `dessert` (
  `id` int(11) NOT NULL,
  `nom` varchar(64) NOT NULL,
  `prix` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `dessert`
--

INSERT INTO `dessert` (`id`, `nom`, `prix`) VALUES
(1, 'SUNDAY', '5.40'),
(2, 'SO PERFECT', '2.50'),
(3, 'COOKIE', '1.50'),
(4, 'MUFFIN', '2.70'),
(5, 'BROWNIE', '3.80'),
(6, 'DONUT CHOCOLAT', '1.45'),
(7, 'DONUT NATURE', '1.20'),
(8, 'OREO CRISPY', '7.89'),
(9, 'MILKSHAKE VANILLE', '3.70'),
(10, 'MILKSHAKE CHOCOLAT', '3.60');

-- --------------------------------------------------------

--
-- Structure de la table `ingredient`
--

CREATE TABLE `ingredient` (
  `id_ingredient` int(11) NOT NULL,
  `nom_ingredient` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ingredient`
--

INSERT INTO `ingredient` (`id_ingredient`, `nom_ingredient`) VALUES
(1, 'Champignons'),
(2, 'Chorizo'),
(3, 'Crème fraiche'),
(4, 'Emmental rapé'),
(5, 'Fromage de chèvre'),
(6, 'Jambon'),
(7, 'Kebab'),
(8, 'Lardons'),
(9, 'Miel'),
(10, 'Mozzarella'),
(11, 'Pepperoni'),
(12, 'Ananas'),
(13, 'Oignons'),
(14, 'Olives'),
(15, 'Saint Nectaire'),
(16, 'Sauce tomate');

-- --------------------------------------------------------

--
-- Structure de la table `pizza`
--

CREATE TABLE `pizza` (
  `id` int(11) NOT NULL,
  `nom` varchar(64) NOT NULL,
  `prix` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `pizza`
--

INSERT INTO `pizza` (`id`, `nom`, `prix`) VALUES
(1, 'Auvergnate', '7.00'),
(2, 'Calzone', '9.00'),
(3, 'Chèvre', '9.60'),
(4, 'Chèvre-miel', '10.20'),
(5, 'Espagnole', '6.80'),
(6, 'Hawaïenne', '11.00'),
(7, 'Kebab', '8.30'),
(8, 'Margherita', '6.00'),
(9, 'Pepperoni', '8.50');

-- --------------------------------------------------------

--
-- Structure de la table `pizza_ingredient`
--

CREATE TABLE `pizza_ingredient` (
  `id_pizza` int(11) NOT NULL,
  `id_ingredient` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `pizza_ingredient`
--

INSERT INTO `pizza_ingredient` (`id_pizza`, `id_ingredient`) VALUES
(2, 1),
(5, 1),
(5, 2),
(4, 3),
(1, 4),
(3, 4),
(5, 4),
(7, 4),
(3, 5),
(4, 5),
(1, 6),
(2, 6),
(5, 6),
(6, 6),
(7, 7),
(1, 8),
(4, 9),
(2, 10),
(5, 10),
(7, 10),
(8, 10),
(9, 10),
(9, 11),
(6, 12),
(1, 13),
(5, 13),
(7, 13),
(1, 14),
(7, 14),
(1, 15),
(1, 16),
(3, 16),
(5, 16),
(6, 16),
(7, 16),
(8, 16),
(9, 16);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id_reservation` int(11) NOT NULL,
  `nb_personne` int(11) NOT NULL,
  `heure_debut` datetime NOT NULL,
  `heure_fin` datetime DEFAULT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `id_table_reservation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id_reservation`, `nb_personne`, `heure_debut`, `heure_fin`, `id_utilisateur`, `id_table_reservation`) VALUES
(1, 2, '2022-01-13 17:30:00', '2022-01-13 18:10:00', 1, 1),
(2, 2, '2022-01-13 18:30:00', '2022-01-13 19:00:00', 1, 1),
(3, 2, '2022-01-14 18:30:00', NULL, 1, 1),
(4, 2, '2022-01-14 18:30:00', NULL, 1, 2),
(5, 2, '2022-01-14 18:30:00', NULL, 1, 3),
(6, 2, '2022-01-14 18:30:00', NULL, 1, 4),
(7, 2, '2022-01-14 18:30:00', NULL, 1, 5);

-- --------------------------------------------------------

--
-- Structure de la table `table_reservation`
--

CREATE TABLE `table_reservation` (
  `id_table_reservation` int(11) NOT NULL,
  `nb_place` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `table_reservation`
--

INSERT INTO `table_reservation` (`id_table_reservation`, `nb_place`) VALUES
(1, 2),
(2, 2),
(3, 4),
(4, 4),
(5, 5);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_utilisateur` int(11) NOT NULL,
  `date_register` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nom` varchar(32) NOT NULL,
  `prenom` varchar(32) DEFAULT NULL,
  `telephone` varchar(10) NOT NULL,
  `email` varchar(128) NOT NULL,
  `mot_de_passe` varchar(64) NOT NULL,
  `niveau_acces` int(11) NOT NULL DEFAULT '1',
  `statut_account` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `date_register`, `nom`, `prenom`, `telephone`, `email`, `mot_de_passe`, `niveau_acces`, `statut_account`) VALUES
(1, '2022-01-11 00:03:36', 'HOUÉE', 'Adrien', '0649784070', 'adrien.houee1@gmail.com', 'azerty', 2, 1),
(2, '2022-01-12 15:59:48', 'Cappe', 'Dorian', '0102030405', 'dc@test.com', 'test', 1, 1),
(3, '2022-01-12 16:01:07', 'Rocheteau', 'Maxime', '0102030405', 'mr@test.com', 'test', 1, 1),
(4, '2022-01-12 16:06:34', 'Gaillot', 'Alexandre', '0504030201', 'ag@test.com', 'test', 1, 1),
(5, '2022-01-12 16:12:47', 'Kien', 'Pascal', '0908070605', 'pk@test.com', 'test', 1, 1),
(6, '2022-01-12 16:13:43', 'Noel', 'Audrey', '0103050709', 'an@test.com', 'test', 1, 1),
(7, '2022-01-12 17:23:37', 'Charles', 'Lorraine', '0908070605', 'lc@test.com', 'test', 1, 1),
(8, '2022-01-13 14:00:25', 'Charles', 'Olivier', '0204060800', 'oc@test.com', 'test', 1, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `boisson`
--
ALTER TABLE `boisson`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_commande`);

--
-- Index pour la table `commande_boisson`
--
ALTER TABLE `commande_boisson`
  ADD PRIMARY KEY (`id_commande`,`id_boisson`),
  ADD KEY `FK_commande_boisson_boisson` (`id_boisson`);

--
-- Index pour la table `commande_dessert`
--
ALTER TABLE `commande_dessert`
  ADD PRIMARY KEY (`id_commande`,`id_dessert`),
  ADD KEY `FK_commande_dessert_dessert` (`id_dessert`);

--
-- Index pour la table `commande_pizza`
--
ALTER TABLE `commande_pizza`
  ADD PRIMARY KEY (`id_commande`,`id_pizza`) USING BTREE,
  ADD KEY `FK_commande_plat_plat` (`id_pizza`);

--
-- Index pour la table `dessert`
--
ALTER TABLE `dessert`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ingredient`
--
ALTER TABLE `ingredient`
  ADD PRIMARY KEY (`id_ingredient`);

--
-- Index pour la table `pizza`
--
ALTER TABLE `pizza`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pizza_ingredient`
--
ALTER TABLE `pizza_ingredient`
  ADD PRIMARY KEY (`id_pizza`,`id_ingredient`),
  ADD KEY `FK_plat_ingredient_ingredient` (`id_ingredient`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id_reservation`),
  ADD KEY `FK_reservation_utilisateur` (`id_utilisateur`),
  ADD KEY `FK_reservation_table` (`id_table_reservation`);

--
-- Index pour la table `table_reservation`
--
ALTER TABLE `table_reservation`
  ADD PRIMARY KEY (`id_table_reservation`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `boisson`
--
ALTER TABLE `boisson`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id_commande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT pour la table `dessert`
--
ALTER TABLE `dessert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `ingredient`
--
ALTER TABLE `ingredient`
  MODIFY `id_ingredient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `pizza`
--
ALTER TABLE `pizza`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id_reservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `table_reservation`
--
ALTER TABLE `table_reservation`
  MODIFY `id_table_reservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande_boisson`
--
ALTER TABLE `commande_boisson`
  ADD CONSTRAINT `FK_commande_boisson_boisson` FOREIGN KEY (`id_boisson`) REFERENCES `boisson` (`id`),
  ADD CONSTRAINT `FK_commande_boisson_commande` FOREIGN KEY (`id_commande`) REFERENCES `commande` (`id_commande`);

--
-- Contraintes pour la table `commande_dessert`
--
ALTER TABLE `commande_dessert`
  ADD CONSTRAINT `FK_commande_dessert_commande` FOREIGN KEY (`id_commande`) REFERENCES `commande` (`id_commande`),
  ADD CONSTRAINT `FK_commande_dessert_dessert` FOREIGN KEY (`id_dessert`) REFERENCES `dessert` (`id`);

--
-- Contraintes pour la table `commande_pizza`
--
ALTER TABLE `commande_pizza`
  ADD CONSTRAINT `FK_commande_plat_commande` FOREIGN KEY (`id_commande`) REFERENCES `commande` (`id_commande`),
  ADD CONSTRAINT `FK_commande_plat_plat` FOREIGN KEY (`id_pizza`) REFERENCES `pizza` (`id`);

--
-- Contraintes pour la table `pizza_ingredient`
--
ALTER TABLE `pizza_ingredient`
  ADD CONSTRAINT `FK_plat_ingredient_ingredient` FOREIGN KEY (`id_ingredient`) REFERENCES `ingredient` (`id_ingredient`),
  ADD CONSTRAINT `FK_plat_ingredient_plat` FOREIGN KEY (`id_pizza`) REFERENCES `pizza` (`id`);

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `FK_reservation_table` FOREIGN KEY (`id_table_reservation`) REFERENCES `table_reservation` (`id_table_reservation`),
  ADD CONSTRAINT `FK_reservation_utilisateur` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
