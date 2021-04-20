-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 20 avr. 2021 à 17:03
-- Version du serveur :  10.4.18-MariaDB
-- Version de PHP : 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `signup`
--

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `User` varchar(30) NOT NULL,
  `article_title` varchar(50) NOT NULL,
  `article_img` varchar(255) NOT NULL,
  `article_body` text NOT NULL,
  `article_author` varchar(50) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `User`, `article_title`, `article_img`, `article_body`, `article_author`, `reg_date`) VALUES
(11, '', '', '', '', '', '2021-04-17 21:05:33'),
(12, '', 'wild life', 'unnamed.jpg', 'Wildlife traditionally refers to undomesticated animal species, but has come to include all organisms that grow or live wild in an area without being introduced by humans.[1] Wildlife can be found in all ecosystems. Deserts, forests, rainforests, plains, grasslands, and other areas, including the most developed urban areas, all have distinct forms of wildlife. While the term in popular culture usually refers to animals that are untouched by human factors, most scientists agree that much wildlife is affected by human activities.[2]\r\n\r\n', 'anass', '2021-04-17 21:14:11'),
(14, 'shiro', 'new article', '20494859.jpg', 'article body', 'shiro ', '2021-04-20 12:14:26'),
(16, 'anass', 'anass title 2', 'unnamed.jpg', 'anass post 2', 'anass 2', '2021-04-20 14:04:29'),
(17, 'anass', 'anass title 1', 'tree-276014__340.jpg', 'anass post ', 'anass', '2021-04-20 13:50:15'),
(19, 'new user', 'new title1 ', 'tree-276014__340.jpg', 'new post', 'new author', '2021-04-20 14:46:29'),
(20, 'haroun', 'haroun title', 'tree-276014__340.jpg', 'haroun post', 'haroun', '2021-04-20 15:00:48');

-- --------------------------------------------------------

--
-- Structure de la table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `email` varchar(254) NOT NULL,
  `MDP` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `signup`
--

INSERT INTO `signup` (`id`, `Username`, `email`, `MDP`) VALUES
(4, 'anass', 'anass@gmail.com', '12IbR.gJ8wcpc'),
(5, 'new user', 'new@gmail.com', '12Bz/9hNlPLZk'),
(6, 'haroun', 'haroun@gmail.com', '12Bz/9hNlPLZk');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
