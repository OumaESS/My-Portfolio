-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 16 sep. 2020 à 18:40
-- Version du serveur :  5.7.24
-- Version de PHP : 7.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `portfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `login`
--

INSERT INTO `login` (`login_id`, `user_name`, `password`) VALUES
(1, 'oumaima', '12345');

-- --------------------------------------------------------

--
-- Structure de la table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `source` varchar(250) NOT NULL,
  `img` varchar(250) NOT NULL,
  `descr` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `projects`
--

INSERT INTO `projects` (`id`, `name`, `source`, `img`, `descr`) VALUES
(1, 'Challenge', 'https://github.com/OumaESS/Chaleng-point', 'point.png', 'A challenge against the clock, its goal is to work well on native CSS.'),
(2, 'TODO-list', 'https://github.com/OumaESS/todo-list-challenge', 'todo.png', 'Working only with CSS3 for making the mokap real'),
(3, 'Test Covid-19', 'https://github.com/OumaESS/Corona-test', 'Covid.png', 'Work with JAva-script to make the site dynamic and flixable.'),
(4, 'PS/UI/Grid', 'https://github.com/OumaESS/MaquetteN1', 'PS.png', 'Work on Photoshop to measure the grid and to understand the PS.'),
(5, 'Montre', 'https://github.com/OumaESS/Horloge', 'Clock.jpg', 'Dans ce projet, nous allons utiliser ce que nous avons appris et le mettre en pratique dans une demo, en utilisant JavaScript et CSS pour creer une horloge analogique fonctionnelle.'),
(6, 'Site vitraine', 'https://github.com/yahyabouhlal/Workflow', 'vitr.png', 'This brief was so comprehensive to gain more information on SASS and pure HTML and CSS.');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Index pour la table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
