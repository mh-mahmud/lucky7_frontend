-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 27, 2025 at 08:19 PM
-- Server version: 8.0.31
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `allscore24_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `slotmachine`
--

DROP TABLE IF EXISTS `slotmachine`;
CREATE TABLE IF NOT EXISTS `slotmachine` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `club_id` int DEFAULT NULL,
  `username` char(50) DEFAULT NULL,
  `phone` char(50) DEFAULT NULL,
  `country` char(50) DEFAULT NULL,
  `coin_stake` decimal(10,2) DEFAULT NULL,
  `bet_line` tinyint DEFAULT NULL,
  `total_bet` decimal(10,2) DEFAULT NULL,
  `win_amount` decimal(10,2) DEFAULT NULL,
  `game_type` char(20) DEFAULT NULL,
  `game_status` enum('DRAW','LOSS','WIN') DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
