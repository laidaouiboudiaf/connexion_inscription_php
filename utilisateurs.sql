-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 29 mars 2022 à 12:15
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `utilisateurs`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `date_inscription` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `pseudo`, `email`, `password`, `date_inscription`) VALUES
(3, 'bilo', 'laid@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$eFRSOTJscC9McmpxczBBQQ$7RdjF19EkEl9qEqt2JtBHHxAvTumHPyt7HqD267J5OU', '2022-03-29 03:18:25'),
(4, 'fdf', 'kk@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$SktmYXU5SDIvQjFueTVqZQ$xK2N9MSvMx3AFf/9TqH0bHOW/BGW+zvJoTsoumSE33Q', '2022-03-29 05:53:50'),
(5, 'bily', 'laidaouiboudiaf@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$OFJBUERUeW9uNVdWckFzQg$1JhL6O+i+GOgSOnGOhEo0jVWg2s4pkkPQ430bjDLEgs', '2022-03-29 06:44:54'),
(6, 'bily', 'sunyixin@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$QWE3cVowVDIwVHBZZTBxRQ$49DPBQ7DOTVr5pA7VQhilcPY4A4YR3yXXp0c20+7NJ8', '2022-03-29 06:46:29'),
(7, 'bily', '1119032836@qq.com', '$argon2i$v=19$m=65536,t=4,p=1$dWZtVjVkM0liODBlaFR3dA$7w9iTjXrnLgaaPirmuwuS/JO/GaZvSpI4BK5E94Ia+w', '2022-03-29 06:51:01');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
