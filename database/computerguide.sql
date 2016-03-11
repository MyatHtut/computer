-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 11, 2016 at 05:16 PM
-- Server version: 5.5.41-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `computerguide`
--

-- --------------------------------------------------------

--
-- Table structure for table `accs`
--

CREATE TABLE IF NOT EXISTS `accs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `for` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shop` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `accs`
--

INSERT INTO `accs` (`id`, `name`, `type`, `for`, `color`, `shop`, `created_at`, `updated_at`) VALUES
(3, 'a', 'a', 's', 's', 's', '2016-03-11 04:15:09', '2016-03-11 04:15:09');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE IF NOT EXISTS `blogs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dec` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hint` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `publish_date` date NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `dec`, `hint`, `image`, `publish_date`, `author`, `created_at`, `updated_at`) VALUES
(1, 'q', 'q', 'q', 'q', '2016-01-01', 'q', '2016-03-11 04:04:04', '2016-03-11 04:04:04');

-- --------------------------------------------------------

--
-- Table structure for table `exhibitions`
--

CREATE TABLE IF NOT EXISTS `exhibitions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `exhibitions`
--

INSERT INTO `exhibitions` (`id`, `name`, `address`, `type`, `phone`, `image`, `created_at`, `updated_at`) VALUES
(5, 'KMD', 'asfsa', 'Computer Training and service', 'fafa', 'https://scontent-hkg3-1.xx.fbcdn.net/hphotos-xpt1/v/t1.0-9/12717782_1020398244665335_3117987812426797556_n.jpg?oh=09aebabfb0a4655d84a06e834d8fc43d&oe=576C6A48', '2016-03-10 08:25:09', '2016-03-10 08:25:09'),
(6, 'Technoland', 'No123, Seinhkhanthar street', 'computer and laptop', '099999,09988890', 'https://scontent-hkg3-1.xx.fbcdn.net/hphotos-xpt1/v/t1.0-9/12717782_1020398244665335_3117987812426797556_n.jpg?oh=09aebabfb0a4655d84a06e834d8fc43d&oe=576C6A48', '2016-03-10 08:25:55', '2016-03-10 08:25:55'),
(7, 'DoDOKOKO', 'No123, Seinhkhanthar street', 'computer and laptop', '099999999,09232242442,02141412', 'https://scontent-hkg3-1.xx.fbcdn.net/hphotos-xpt1/v/t1.0-9/12717782_1020398244665335_3117987812426797556_n.jpg?oh=09aebabfb0a4655d84a06e834d8fc43d&oe=576C6A48', '2016-03-10 08:35:19', '2016-03-10 08:35:19');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_12_11_151216_create_exhibitions_table', 1),
('2016_03_07_144156_create_blogs_table', 1),
('2016_03_07_144210_create_specs_table', 1),
('2016_03_07_144230_create_accs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `specs`
--

CREATE TABLE IF NOT EXISTS `specs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `os` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cpu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gcard` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ram` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `storage` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `other` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shop` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `brand` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `specs`
--

INSERT INTO `specs` (`id`, `name`, `os`, `color`, `cpu`, `gcard`, `ram`, `storage`, `other`, `shop`, `brand`, `created_at`, `updated_at`) VALUES
(2, 'safasf', 'asfasf', 'asfasf', 'asfasf', 'asfaf', 'affsf', 'asfasf', 'k', 'k', '', '2016-03-10 09:02:39', '2016-03-10 09:02:39'),
(3, 'agasgag', 'https://scontent-hkg3-1.xx.fbcdn.net/hphotos-xpt1/v/t1.0-9/12717782_1020398244665335_3117987812426797556_n.jpg?oh=09aebabfb0a4655d84a06e834d8fc43d&oe=576C6A48', 'asf', 'asfasf', 'k', 'k', 'kk', 'k', 'k', '', '2016-03-10 09:36:18', '2016-03-10 09:36:18'),
(4, 'aaso', 'https://scontent-hkg3-1.xx.fbcdn.net/hphotos-xpt1/v/t1.0-9/12717782_1020398244665335_3117987812426797556_n.jpg?oh=09aebabfb0a4655d84a06e834d8fc43d&oe=576C6A48', 'oo', 'o', 'o', 'o', 'o', 'o', 'o', '', '2016-03-10 09:42:05', '2016-03-10 09:42:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'myathtut', 'aa.htut@gmail.com', '$2y$10$avEKO7dPA3ckCT5kwdkyRubbdfRHrR/WTQKyu7Q/Z/H39UC4BKtoy', 'hDb9spAF1xPN9eJZB2xl4IKjka6v1GcDCcvtJm3t9du3Fy3jJTqfMCstNAmZ', '2016-03-08 09:04:53', '2016-03-11 04:11:06');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
