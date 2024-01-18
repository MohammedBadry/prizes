-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table competition.branches
CREATE TABLE IF NOT EXISTS `branches` (
  `id` bigint NOT NULL,
  `name` varchar(100) NOT NULL DEFAULT '',
  `username` varchar(100) NOT NULL DEFAULT '',
  `password` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- Dumping data for table competition.branches: ~1 rows (approximately)
REPLACE INTO `branches` (`id`, `name`, `username`, `password`) VALUES
	(1, 'Mohammed Badry', 'mbmb', '123456');

-- Dumping structure for table competition.competitions
CREATE TABLE IF NOT EXISTS `competitions` (
  `id` bigint NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `mobile` varchar(20) NOT NULL DEFAULT '',
  `winner` tinyint NOT NULL DEFAULT '0',
  `win_date` timestamp NULL DEFAULT NULL,
  `type` enum('gold','bronze','silver') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- Dumping data for table competition.competitions: ~3 rows (approximately)
REPLACE INTO `competitions` (`id`, `name`, `mobile`, `winner`, `win_date`, `type`) VALUES
	(1, 'أحمد بدري', '01021311400', 0, '2024-01-15 16:01:12', 'gold'),
	(2, 'محمد بدري', '01000376267', 0, '2024-01-15 16:01:10', 'gold'),
	(3, 'محمود عبد الله', '01097966066', 0, '2024-01-15 16:01:36', 'silver');

-- Dumping structure for table competition.game_settings
CREATE TABLE IF NOT EXISTS `game_settings` (
  `id` int NOT NULL,
  `time` int NOT NULL DEFAULT '60',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- Dumping data for table competition.game_settings: ~1 rows (approximately)
REPLACE INTO `game_settings` (`id`, `time`) VALUES
	(1, 10);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
