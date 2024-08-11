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


-- Dumping database structure for webdev
CREATE DATABASE IF NOT EXISTS `webdev` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `webdev`;

-- Dumping structure for table webdev.courses
CREATE TABLE IF NOT EXISTS `courses` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `course_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table webdev.courses: ~9 rows (approximately)
INSERT INTO `courses` (`id`, `course_name`, `description`, `duration`, `created_at`, `updated_at`) VALUES
	(1, 'Data Science', 'Provident corporis rem inventore aut.', '90 Menit', '2024-08-10 08:20:31', '2024-08-10 08:20:31'),
	(2, 'Mobile Developer', 'Neque aspernatur eaque hic debitis et. Eos itaque aut et modi dolore aut.', '90 Menit', '2024-08-10 08:20:31', '2024-08-10 08:20:31'),
	(3, 'Cloud Computing', 'Corporis voluptatem accusamus quis sed dolorum deserunt incidunt. Enim et cumque quasi quasi magni ab magni.', '90 Menit', '2024-08-10 08:20:31', '2024-08-10 08:20:31'),
	(4, 'Web Developer', 'Facere deserunt aut id sapiente fugit.', '90 Menit', '2024-08-10 08:20:31', '2024-08-10 08:20:31'),
	(5, 'Artificial Intelligence', 'Fuga quas voluptas cum id laudantium autem vel. Laudantium voluptatum voluptate numquam et voluptatum.', '90 Menit', '2024-08-10 08:20:31', '2024-08-10 08:20:31'),
	(6, 'Cyber Security', 'Excepturi qui est dolor voluptatem.', '90 Menit', '2024-08-10 08:20:31', '2024-08-10 08:20:31'),
	(7, 'Data Analyst', 'Totam eius qui voluptatum. Autem cum ex quis vero deleniti quo quod.', '90 Menit', '2024-08-10 08:20:31', '2024-08-10 08:20:31'),
	(8, 'Machine Learning', 'Magnam est autem sint sequi accusantium.', '90 Menit', '2024-08-10 08:20:31', '2024-08-10 08:20:31'),
	(9, 'Full Stack Developer', 'Labore sed est aliquid iste. Porro fugit ab maiores praesentium ut.', '90 Menit', '2024-08-10 08:20:31', '2024-08-10 08:20:31');

-- Dumping structure for table webdev.failed_jobs
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

-- Dumping data for table webdev.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table webdev.materials
CREATE TABLE IF NOT EXISTS `materials` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `material_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_id` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table webdev.materials: ~10 rows (approximately)
INSERT INTO `materials` (`id`, `title`, `description`, `material_link`, `course_id`, `created_at`, `updated_at`) VALUES
	(2, 'Sint qui iusto.', 'Magni voluptatem ipsa quasi magnam tempora. Nihil eveniet et quaerat quam reprehenderit sit totam.', 'WDHOAacMzhQIMAuVg41E', 2, '2024-03-12 22:28:22', '2024-03-12 22:28:22'),
	(3, 'Quia quia.', 'Amet velit ea consequatur dolor reiciendis. Mollitia ut inventore dolor deleniti molestiae.', 'UnK8wYbXTAG690qkqY7i', 5, '2024-07-30 13:11:43', '2024-07-30 13:11:43'),
	(4, 'Eligendi praesentium.', 'Nostrum ad quia quis ea quas blanditiis nam illum. Harum voluptas laborum ut dolorem.', 'KrvREshdayWWVboYVL30', 5, '2024-04-19 12:25:38', '2024-04-19 12:25:38'),
	(5, 'Vitae mollitia accusantium.', 'Suscipit maiores velit quia odio. Ab et non et dolorum eos ullam officiis odio.', 'CaYnanOkTwmIDhOov2en', 8, '2024-07-17 09:07:17', '2024-07-17 09:07:17'),
	(6, 'Temporibus aut.', 'Quia fugit dolore nihil quibusdam asperiores ut reiciendis praesentium.', 'wteeqy55g8vzdn0KCNcD', 7, '2024-05-02 21:10:16', '2024-05-02 21:10:16'),
	(7, 'Aut neque.', 'Repudiandae esse vitae itaque tempore consequuntur quaerat commodi.', 'fbmQ4iw2L0hDCf1RCExm', 9, '2024-05-28 01:18:02', '2024-05-28 01:18:02'),
	(8, 'Est ut facilis.', 'Nostrum sint repudiandae iure tempore.', 'JCD0SsV1ABSRHzfVPNSp', 9, '2024-03-16 14:43:50', '2024-03-16 14:43:50'),
	(9, 'Voluptatibus odit.', 'Iste explicabo sit exercitationem consequatur. Doloremque error blanditiis sit magni.', 'RpSaRglvbSl1k08hyvEm', 6, '2024-07-08 14:53:16', '2024-07-08 14:53:16'),
	(10, 'Saepe ipsa.', 'Cupiditate rerum tenetur impedit quo dolor.', 'XNyCD0nvMbD5T5Dqm3Lo', 2, '2024-07-23 02:41:21', '2024-07-23 02:41:21'),
	(11, 'Pengelolaan Sumber Daya AI', 'Pemanfaatan AI di Era 5.0', 'https://www.youtube.com/watch?v=UYp32dGr5X8', 5, '2024-08-10 15:51:39', '2024-08-10 15:56:34');

-- Dumping structure for table webdev.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table webdev.migrations: ~9 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
	(4, '2019_08_19_000000_create_failed_jobs_table', 1),
	(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(6, '2023_11_24_071443_add_roles_phone_address_to_users', 1),
	(7, '2023_12_24_071042_create_courses_table', 1),
	(8, '2023_12_24_071608_create_materials_table', 1),
	(9, '2024_05_08_064503_create_permission_tables', 1);

-- Dumping structure for table webdev.model_has_permissions
CREATE TABLE IF NOT EXISTS `model_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table webdev.model_has_permissions: ~0 rows (approximately)

-- Dumping structure for table webdev.model_has_roles
CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `role_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table webdev.model_has_roles: ~1 rows (approximately)
INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
	(1, 'App\\Models\\User', 1);

-- Dumping structure for table webdev.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table webdev.password_reset_tokens: ~0 rows (approximately)

-- Dumping structure for table webdev.permissions
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table webdev.permissions: ~4 rows (approximately)
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
	(1, 'material-list', 'web', '2024-08-10 08:20:32', '2024-08-10 08:20:32'),
	(2, 'material-create', 'web', '2024-08-10 08:20:32', '2024-08-10 08:20:32'),
	(3, 'material-edit', 'web', '2024-08-10 08:20:32', '2024-08-10 08:20:32'),
	(4, 'material-delete', 'web', '2024-08-10 08:20:32', '2024-08-10 08:20:32');

-- Dumping structure for table webdev.personal_access_tokens
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

-- Dumping data for table webdev.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table webdev.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table webdev.roles: ~2 rows (approximately)
INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'web', '2024-08-10 08:20:32', '2024-08-10 08:20:32'),
	(2, 'user', 'web', '2024-08-10 08:20:32', '2024-08-10 08:20:32');

-- Dumping structure for table webdev.role_has_permissions
CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table webdev.role_has_permissions: ~4 rows (approximately)
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
	(1, 2),
	(2, 2),
	(3, 2),
	(4, 2);

-- Dumping structure for table webdev.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'mahasiswa',
  `handphone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table webdev.users: ~2 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `roles`, `handphone`, `address`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Ardi', 'ardi@gmail.com', 'mahasiswa', NULL, NULL, NULL, '$2y$10$Klglm1vD3W3DK2yJSAzsmerY8j0l6EcQe6Dt7uOQwWbnv1lisy4XK', NULL, NULL, NULL, NULL, '2024-08-10 08:20:32', '2024-08-10 08:20:32'),
	(2, 'Muhammad Irfan Akbar', 'irfan@gmail.com', 'mahasiswa', NULL, NULL, NULL, '$2y$10$FsytwrHKyvM0U4sRzFgfhuaDY1hvWBdWX145Wdt0dn1t3AngMlmkW', NULL, NULL, NULL, NULL, '2024-08-10 08:21:19', '2024-08-10 08:21:19');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
