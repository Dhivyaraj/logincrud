-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 30, 2021 at 07:43 AM
-- Server version: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userlogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirm_password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` smallint(6) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `confirm_password`, `phone`, `image`, `dob`, `address`, `city`, `state`, `country`, `role`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dhivyarajs', 'dhivyarajs@metaplore.com', '$2y$10$WfFkmbCjfiu6NqAbqCfixeihepbZuOcWC.Ecn0TxhIYQajkD2sL26', '$2y$10$ZnVRdQ2sjUe.2TQ388Jkb.PYgS2HP2E/n2y003Kl2mwbWYPUtm3tG', '23123121212', '9266544_IT_D002.jpg', '2021-03-25', 'aaaaaaaaaaa', 'chennais', 'tamilnadus', 'indias', 1, 1, 'h6bODlUqy2gXCimbnbWftBB4ZT7UH1xDjh0O7HIzN8hcOFu4aMP6OvCBa0Ii', '2021-03-30 00:18:38', '2021-03-30 01:56:39'),
(2, 'Dhivyaraj', 'dhivyarajsd@metaplore.com', '$2y$10$Fy.X/4g.wvlxuSUTNpKcWuUSgiRUBB3t4iO.QPAtFs3.bAuQq9W4C', '$2y$10$4jovC3apaMQQimyX7uG0nOOj8aLA/JOZh3r4BAI2yzBn6MtDM0zzW', '1231231231', '9266544_IT_D002.jpg', '2021-03-09', 'wqweqweqwe   erwer', 'werwer', 'werwer', 'werwre', 1, 1, NULL, '2021-03-30 01:34:55', '2021-03-30 01:34:55');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
