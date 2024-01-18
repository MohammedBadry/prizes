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

-- Dumping structure for table prizes.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table prizes.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table prizes.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table prizes.migrations: ~0 rows (approximately)
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2019_12_14_000002_create_settings_table', 2);

-- Dumping structure for table prizes.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table prizes.password_reset_tokens: ~0 rows (approximately)

-- Dumping structure for table prizes.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table prizes.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table prizes.settings
CREATE TABLE IF NOT EXISTS `settings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `time` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table prizes.settings: ~0 rows (approximately)
REPLACE INTO `settings` (`id`, `time`, `created_at`, `updated_at`) VALUES
	(1, 10, NULL, '2024-01-16 17:53:09');

-- Dumping structure for table prizes.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `is_winner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `win_date` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_mobile_unique` (`mobile`),
  UNIQUE KEY `users_code_unique` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=197 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table prizes.users: ~195 rows (approximately)
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `mobile`, `code`, `password`, `remember_token`, `type`, `is_winner`, `win_date`, `created_at`, `updated_at`) VALUES
	(1, 'Admin', 'admin@admin.com', NULL, NULL, NULL, '$2y$12$PPEX3okFoBgkGJJ3JN.Wv.aKwkQhFD99Ksle31VTI.Xztg9pveJJy', NULL, 'admin', '0', NULL, '2024-01-16 17:43:50', '2024-01-16 18:22:51'),
	(2, 'تجربة 1', NULL, NULL, '512346578', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:12', '2024-01-16 17:45:12'),
	(3, 'تجربة 2', NULL, NULL, '512346579', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:12', '2024-01-16 17:45:12'),
	(4, 'تجربة 3', NULL, NULL, '512346580', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:12', '2024-01-16 17:45:12'),
	(5, 'تجربة 4', NULL, NULL, '512346581', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:12', '2024-01-16 17:45:12'),
	(6, 'تجربة 5', NULL, NULL, '512346582', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:12', '2024-01-16 17:45:12'),
	(7, 'تجربة 6', NULL, NULL, '512346583', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:12', '2024-01-16 17:45:12'),
	(8, 'تجربة 7', NULL, NULL, '512346584', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:12', '2024-01-16 17:45:12'),
	(9, 'تجربة 8', NULL, NULL, '512346585', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:12', '2024-01-16 17:45:12'),
	(10, 'تجربة 9', NULL, NULL, '512346586', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:12', '2024-01-16 17:45:12'),
	(11, 'تجربة 10', NULL, NULL, '512346587', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:12', '2024-01-16 17:45:12'),
	(12, 'تجربة 11', NULL, NULL, '512346588', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:12', '2024-01-16 17:45:12'),
	(13, 'تجربة 12', NULL, NULL, '512346589', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:12', '2024-01-16 17:45:12'),
	(14, 'تجربة 13', NULL, NULL, '512346590', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:12', '2024-01-16 17:45:12'),
	(15, 'تجربة 14', NULL, NULL, '512346591', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:12', '2024-01-16 17:45:12'),
	(16, 'تجربة 15', NULL, NULL, '512346592', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:12', '2024-01-16 17:45:12'),
	(17, 'تجربة 16', NULL, NULL, '512346593', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:12', '2024-01-16 17:45:12'),
	(18, 'تجربة 17', NULL, NULL, '512346594', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:12', '2024-01-16 17:45:12'),
	(19, 'تجربة 18', NULL, NULL, '512346595', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:12', '2024-01-16 17:45:12'),
	(20, 'تجربة 19', NULL, NULL, '512346596', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:12', '2024-01-16 17:45:12'),
	(21, 'تجربة 20', NULL, NULL, '512346597', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:12', '2024-01-16 17:45:12'),
	(22, 'تجربة 21', NULL, NULL, '512346598', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:12', '2024-01-16 17:45:12'),
	(23, 'تجربة 22', NULL, NULL, '512346599', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:12', '2024-01-16 17:45:12'),
	(24, 'تجربة 23', NULL, NULL, '512346600', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:12', '2024-01-16 17:45:12'),
	(25, 'تجربة 24', NULL, NULL, '512346601', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(26, 'تجربة 25', NULL, NULL, '512346602', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(27, 'تجربة 26', NULL, NULL, '512346603', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(28, 'تجربة 27', NULL, NULL, '512346604', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(29, 'تجربة 28', NULL, NULL, '512346605', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(30, 'تجربة 29', NULL, NULL, '512346606', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(31, 'تجربة 30', NULL, NULL, '512346607', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(32, 'تجربة 31', NULL, NULL, '512346608', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(33, 'تجربة 32', NULL, NULL, '512346609', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(34, 'تجربة 33', NULL, NULL, '512346610', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(35, 'تجربة 34', NULL, NULL, '512346611', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(36, 'تجربة 35', NULL, NULL, '512346612', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(37, 'تجربة 36', NULL, NULL, '512346613', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(38, 'تجربة 37', NULL, NULL, '512346614', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(39, 'تجربة 38', NULL, NULL, '512346615', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(40, 'تجربة 39', NULL, NULL, '512346616', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(41, 'تجربة 40', NULL, NULL, '512346617', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(42, 'تجربة 41', NULL, NULL, '512346618', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(43, 'تجربة 42', NULL, NULL, '512346619', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(44, 'تجربة 43', NULL, NULL, '512346620', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(45, 'تجربة 44', NULL, NULL, '512346621', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(46, 'تجربة 45', NULL, NULL, '512346622', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(47, 'تجربة 46', NULL, NULL, '512346623', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(48, 'تجربة 47', NULL, NULL, '512346624', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(49, 'تجربة 48', NULL, NULL, '512346625', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(50, 'تجربة 49', NULL, NULL, '512346626', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(51, 'تجربة 50', NULL, NULL, '512346627', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(52, 'تجربة 51', NULL, NULL, '512346628', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(53, 'تجربة 52', NULL, NULL, '512346629', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(54, 'تجربة 53', NULL, NULL, '512346630', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(55, 'تجربة 54', NULL, NULL, '512346631', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(56, 'تجربة 55', NULL, NULL, '512346632', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(57, 'تجربة 56', NULL, NULL, '512346633', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(58, 'تجربة 57', NULL, NULL, '512346634', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(59, 'تجربة 58', NULL, NULL, '512346635', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(60, 'تجربة 59', NULL, NULL, '512346636', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(61, 'تجربة 60', NULL, NULL, '512346637', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(62, 'تجربة 61', NULL, NULL, '512346638', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(63, 'تجربة 62', NULL, NULL, '512346639', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(64, 'تجربة 63', NULL, NULL, '512346640', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(65, 'تجربة 64', NULL, NULL, '512346641', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(66, 'تجربة 65', NULL, NULL, '512346642', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(67, 'تجربة 66', NULL, NULL, '512346643', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(68, 'تجربة 67', NULL, NULL, '512346644', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(69, 'تجربة 68', NULL, NULL, '512346645', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(70, 'تجربة 69', NULL, NULL, '512346646', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(71, 'تجربة 70', NULL, NULL, '512346647', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(72, 'تجربة 71', NULL, NULL, '512346648', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(73, 'تجربة 72', NULL, NULL, '512346649', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(74, 'تجربة 73', NULL, NULL, '512346650', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(75, 'تجربة 74', NULL, NULL, '512346651', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(76, 'تجربة 75', NULL, NULL, '512346652', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(77, 'تجربة 76', NULL, NULL, '512346653', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(78, 'تجربة 77', NULL, NULL, '512346654', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(79, 'تجربة 78', NULL, NULL, '512346655', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(80, 'تجربة 79', NULL, NULL, '512346656', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(81, 'تجربة 80', NULL, NULL, '512346657', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(82, 'تجربة 81', NULL, NULL, '512346658', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(83, 'تجربة 82', NULL, NULL, '512346659', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(84, 'تجربة 83', NULL, NULL, '512346660', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(85, 'تجربة 84', NULL, NULL, '512346661', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(86, 'تجربة 85', NULL, NULL, '512346662', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(87, 'تجربة 86', NULL, NULL, '512346663', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(88, 'تجربة 87', NULL, NULL, '512346664', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(89, 'تجربة 88', NULL, NULL, '512346665', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(90, 'تجربة 89', NULL, NULL, '512346666', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(91, 'تجربة 90', NULL, NULL, '512346667', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(92, 'تجربة 91', NULL, NULL, '512346668', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(93, 'تجربة 92', NULL, NULL, '512346669', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(94, 'تجربة 93', NULL, NULL, '512346670', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(95, 'تجربة 94', NULL, NULL, '512346671', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(96, 'تجربة 95', NULL, NULL, '512346672', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(97, 'تجربة 96', NULL, NULL, '512346673', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(98, 'تجربة 97', NULL, NULL, '512346674', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(99, 'تجربة 98', NULL, NULL, '512346675', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(100, 'تجربة 99', NULL, NULL, '512346676', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(101, 'تجربة 100', NULL, NULL, '512346677', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(103, 'تجربة 102', NULL, NULL, '512346679', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(104, 'تجربة 103', NULL, NULL, '512346680', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(105, 'تجربة 104', NULL, NULL, '512346681', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(106, 'تجربة 105', NULL, NULL, '512346682', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(107, 'تجربة 106', NULL, NULL, '512346683', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(108, 'تجربة 107', NULL, NULL, '512346684', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(109, 'تجربة 108', NULL, NULL, '512346685', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(110, 'تجربة 109', NULL, NULL, '512346686', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(111, 'تجربة 110', NULL, NULL, '512346687', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(112, 'تجربة 111', NULL, NULL, '512346688', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(113, 'تجربة 112', NULL, NULL, '512346689', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(114, 'تجربة 113', NULL, NULL, '512346690', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(115, 'تجربة 114', NULL, NULL, '512346691', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(116, 'تجربة 115', NULL, NULL, '512346692', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(117, 'تجربة 116', NULL, NULL, '512346693', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(118, 'تجربة 117', NULL, NULL, '512346694', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(119, 'تجربة 118', NULL, NULL, '512346695', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(120, 'تجربة 119', NULL, NULL, '512346696', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(121, 'تجربة 120', NULL, NULL, '512346697', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(122, 'تجربة 121', NULL, NULL, '512346698', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(123, 'تجربة 122', NULL, NULL, '512346699', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(124, 'تجربة 123', NULL, NULL, '512346700', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(125, 'تجربة 124', NULL, NULL, '512346701', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(126, 'تجربة 125', NULL, NULL, '512346702', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(127, 'تجربة 126', NULL, NULL, '512346703', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(128, 'تجربة 127', NULL, NULL, '512346704', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(129, 'تجربة 128', NULL, NULL, '512346705', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(130, 'تجربة 129', NULL, NULL, '512346706', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(131, 'تجربة 130', NULL, NULL, '512346707', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(132, 'تجربة 131', NULL, NULL, '512346708', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(133, 'تجربة 132', NULL, NULL, '512346709', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(134, 'تجربة 133', NULL, NULL, '512346710', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(135, 'تجربة 134', NULL, NULL, '512346711', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(136, 'تجربة 135', NULL, NULL, '512346712', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(137, 'تجربة 136', NULL, NULL, '512346713', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(138, 'تجربة 137', NULL, NULL, '512346714', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(139, 'تجربة 138', NULL, NULL, '512346715', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(140, 'تجربة 139', NULL, NULL, '512346716', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(141, 'تجربة 140', NULL, NULL, '512346717', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(142, 'تجربة 141', NULL, NULL, '512346718', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(143, 'تجربة 142', NULL, NULL, '512346719', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(144, 'تجربة 143', NULL, NULL, '512346720', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(145, 'تجربة 144', NULL, NULL, '512346721', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(146, 'تجربة 145', NULL, NULL, '512346722', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(147, 'تجربة 146', NULL, NULL, '512346723', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(148, 'تجربة 147', NULL, NULL, '512346724', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(149, 'تجربة 148', NULL, NULL, '512346725', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(150, 'تجربة 149', NULL, NULL, '512346726', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(151, 'تجربة 150', NULL, NULL, '512346727', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(152, 'تجربة 151', NULL, NULL, '512346728', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(153, 'تجربة 152', NULL, NULL, '512346729', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(154, 'تجربة 153', NULL, NULL, '512346730', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(155, 'تجربة 154', NULL, NULL, '512346731', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(156, 'تجربة 155', NULL, NULL, '512346732', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(157, 'تجربة 156', NULL, NULL, '512346733', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(158, 'تجربة 157', NULL, NULL, '512346734', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(159, 'تجربة 158', NULL, NULL, '512346735', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(160, 'تجربة 159', NULL, NULL, '512346736', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(161, 'تجربة 160', NULL, NULL, '512346737', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(162, 'تجربة 161', NULL, NULL, '512346738', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(163, 'تجربة 162', NULL, NULL, '512346739', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(164, 'تجربة 163', NULL, NULL, '512346740', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(165, 'تجربة 164', NULL, NULL, '512346741', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(166, 'تجربة 165', NULL, NULL, '512346742', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(167, 'تجربة 166', NULL, NULL, '512346743', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(168, 'تجربة 167', NULL, NULL, '512346744', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(169, 'تجربة 168', NULL, NULL, '512346745', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(170, 'تجربة 169', NULL, NULL, '512346746', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(171, 'تجربة 170', NULL, NULL, '512346747', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(172, 'تجربة 171', NULL, NULL, '512346748', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(173, 'تجربة 172', NULL, NULL, '512346749', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(174, 'تجربة 173', NULL, NULL, '512346750', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(175, 'تجربة 174', NULL, NULL, '512346751', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(176, 'تجربة 175', NULL, NULL, '512346752', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(177, 'تجربة 176', NULL, NULL, '512346753', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(178, 'تجربة 177', NULL, NULL, '512346754', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(179, 'تجربة 178', NULL, NULL, '512346755', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(180, 'تجربة 179', NULL, NULL, '512346756', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(181, 'تجربة 180', NULL, NULL, '512346757', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(182, 'تجربة 181', NULL, NULL, '512346758', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(183, 'تجربة 182', NULL, NULL, '512346759', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(184, 'تجربة 183', NULL, NULL, '512346760', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(185, 'تجربة 184', NULL, NULL, '512346761', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(186, 'تجربة 185', NULL, NULL, '512346762', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(187, 'تجربة 186', NULL, NULL, '512346763', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(188, 'تجربة 187', NULL, NULL, '512346764', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(189, 'تجربة 188', NULL, NULL, '512346765', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(190, 'تجربة 189', NULL, NULL, '512346766', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(191, 'تجربة 190', NULL, NULL, '512346767', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(192, 'تجربة 191', NULL, NULL, '512346768', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(193, 'تجربة 192', NULL, NULL, '512346769', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(194, 'تجربة 193', NULL, NULL, '512346770', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(195, 'تجربة 194', NULL, NULL, '512346771', NULL, NULL, NULL, 'user', '0', NULL, '2024-01-16 17:45:13', '2024-01-16 17:45:13'),
	(196, 'test', NULL, NULL, '512003333', '4444', '$2y$12$23Q0MczTB/.b8ddHtZPt5uRr8kH.jlFAXIDR2hjHeJrTn1kfmJQl.', NULL, 'user', '0', NULL, '2024-01-16 17:54:23', '2024-01-16 17:54:23');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
