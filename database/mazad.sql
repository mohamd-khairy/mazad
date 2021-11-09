-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 26, 2021 at 12:35 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mazad`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `building` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `floor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apartment_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` enum('home','work') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `address_translations`
--

CREATE TABLE `address_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address_id` bigint(20) UNSIGNED NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ask_id` bigint(20) UNSIGNED DEFAULT NULL,
  `text` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `asks`
--

CREATE TABLE `asks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `mazad_id` bigint(20) UNSIGNED DEFAULT NULL,
  `text` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `mazad_id` bigint(20) UNSIGNED DEFAULT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text COLLATE utf8mb4_unicode_ci,
  `order` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 1, 0, 0, 0, 0, '{}', 1),
(2, 1, 'name', 'text', 'Name', 0, 1, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required\"}}', 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required\"}}', 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, '{\"validation\":{\"rule\":\"required\"}}', 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, '{}', 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, '{}', 13),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 14),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, '{}', 9),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":\"0\",\"taggable\":\"0\"}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'voyager::seeders.data_rows.roles', 0, 0, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 16),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, '{}', 17),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(21, 1, 'role_id', 'text', 'Role', 0, 1, 1, 1, 1, 1, '{}', 15),
(22, 4, 'id', 'text', 'Id', 1, 1, 0, 0, 0, 0, '{}', 1),
(23, 4, 'user_id', 'text', 'User Id', 1, 1, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required\"}}', 2),
(24, 4, 'building', 'text', 'Building', 0, 1, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required\"}}', 3),
(25, 4, 'floor', 'text', 'Floor', 0, 1, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required\"}}', 4),
(26, 4, 'apartment_number', 'text', 'Apartment Number', 0, 1, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required\"}}', 5),
(27, 4, 'lat', 'text', 'Lat', 0, 1, 1, 1, 1, 1, '{}', 6),
(28, 4, 'long', 'text', 'Long', 0, 1, 1, 1, 1, 1, '{}', 7),
(29, 4, 'type', 'text', 'Type', 0, 1, 1, 1, 1, 1, '{\"home\":\"home\",\"options\":{\"home\":\"home\",\"work\":\"work\"}}', 8),
(30, 4, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 9),
(31, 4, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 10),
(32, 5, 'id', 'text', 'Id', 1, 1, 0, 0, 0, 0, '{}', 1),
(33, 5, 'address_id', 'text', 'Address Id', 1, 1, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required\"}}', 2),
(34, 5, 'country', 'text', 'Country', 0, 1, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required\"}}', 3),
(35, 5, 'state', 'text', 'State', 0, 1, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required\"}}', 4),
(36, 5, 'district', 'text', 'District', 0, 1, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required\"}}', 5),
(37, 5, 'street', 'text', 'Street', 0, 1, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required\"}}', 6),
(38, 5, 'full_address', 'text', 'Full Address', 0, 1, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required\"}}', 7),
(39, 5, 'locale', 'text', 'Locale', 1, 1, 1, 1, 1, 1, '{\"en\":\"en\",\"options\":{\"en\":\"en\",\"ar\":\"ar\"}}', 8),
(40, 5, 'address_translation_belongsto_address_relationship', 'relationship', 'addresses', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Models\\\\Address\",\"table\":\"addresses\",\"type\":\"belongsTo\",\"column\":\"address_id\",\"key\":\"id\",\"label\":\"type\",\"pivot_table\":\"address_translations\",\"pivot\":\"0\",\"taggable\":\"0\"}', 9),
(41, 6, 'id', 'text', 'Id', 1, 1, 0, 0, 0, 0, '{}', 1),
(42, 6, 'name', 'text', 'Name', 0, 1, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required\"}}', 2),
(43, 6, 'details', 'text_area', 'Details', 0, 1, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required\"}}', 3),
(44, 6, 'price', 'number', 'Price', 0, 1, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required\"}}', 6),
(45, 6, 'price_min_plus', 'number', 'Price Min Plus', 0, 1, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required\"}}', 7),
(46, 6, 'category_id', 'text', 'Category Id', 0, 0, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required\"}}', 8),
(47, 6, 'user_id', 'text', 'User Id', 0, 0, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required\"}}', 9),
(48, 6, 'from', 'timestamp', 'From', 0, 1, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required\"}}', 10),
(49, 6, 'to', 'timestamp', 'To', 0, 1, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required\"}}', 11),
(50, 6, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"1\":\"True\",\"options\":{\"0\":\"False\",\"1\":\"True\"}}', 12),
(51, 6, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 1, 0, 1, '{}', 13),
(52, 6, 'updated_at', 'timestamp', 'Updated At', 0, 0, 1, 0, 0, 0, '{}', 14),
(53, 6, 'mazad_belongsto_user_relationship', 'relationship', 'users', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Models\\\\User\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"user_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"address_translations\",\"pivot\":\"0\",\"taggable\":\"0\"}', 4),
(54, 6, 'mazad_belongsto_category_relationship', 'relationship', 'categories', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Models\\\\Category\",\"table\":\"categories\",\"type\":\"belongsTo\",\"column\":\"category_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"address_translations\",\"pivot\":\"0\",\"taggable\":\"0\"}', 5),
(55, 7, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(56, 7, 'user_id', 'number', 'User Id', 0, 1, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required\"}}', 2),
(57, 7, 'mazad_id', 'number', 'Mazad Id', 0, 1, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required\"}}', 3),
(58, 7, 'price', 'number', 'Price', 0, 1, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required\"}}', 4),
(59, 7, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 7),
(60, 7, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 8),
(61, 7, 'comment_belongsto_user_relationship', 'relationship', 'users', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Models\\\\User\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"user_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"address_translations\",\"pivot\":\"0\",\"taggable\":\"0\"}', 5),
(62, 7, 'comment_belongsto_mazad_relationship', 'relationship', 'mazads', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Models\\\\Mazad\",\"table\":\"mazads\",\"type\":\"belongsTo\",\"column\":\"mazad_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"address_translations\",\"pivot\":\"0\",\"taggable\":\"0\"}', 6),
(63, 8, 'id', 'text', 'Id', 1, 1, 0, 0, 0, 0, '{}', 1),
(64, 8, 'user_id', 'number', 'User Id', 0, 1, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required\"}}', 2),
(65, 8, 'mazad_id', 'number', 'Mazad Id', 0, 1, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required\"}}', 3),
(66, 8, 'text', 'text_area', 'Text', 0, 1, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required\"}}', 4),
(67, 8, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
(68, 8, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(69, 8, 'ask_belongsto_user_relationship', 'relationship', 'users', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Models\\\\User\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"user_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"address_translations\",\"pivot\":\"0\",\"taggable\":\"0\"}', 7),
(70, 8, 'ask_belongsto_mazad_relationship', 'relationship', 'mazads', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Models\\\\Mazad\",\"table\":\"mazads\",\"type\":\"belongsTo\",\"column\":\"mazad_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"address_translations\",\"pivot\":\"0\",\"taggable\":\"0\"}', 8),
(71, 9, 'id', 'text', 'Id', 1, 1, 0, 0, 0, 0, '{}', 1),
(72, 9, 'user_id', 'number', 'User Id', 0, 1, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required\"}}', 2),
(73, 9, 'ask_id', 'number', 'Ask Id', 0, 1, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required\"}}', 3),
(74, 9, 'text', 'text_area', 'Text', 0, 1, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required\"}}', 4),
(75, 9, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
(76, 9, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(77, 9, 'answer_belongsto_user_relationship', 'relationship', 'users', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Models\\\\User\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"user_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"address_translations\",\"pivot\":\"0\",\"taggable\":\"0\"}', 7),
(78, 9, 'answer_belongsto_ask_relationship', 'relationship', 'asks', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Models\\\\Ask\",\"table\":\"asks\",\"type\":\"belongsTo\",\"column\":\"ask_id\",\"key\":\"id\",\"label\":\"text\",\"pivot_table\":\"address_translations\",\"pivot\":\"0\",\"taggable\":\"0\"}', 8),
(79, 10, 'id', 'text', 'Id', 1, 1, 0, 0, 0, 0, '{}', 1),
(80, 10, 'name', 'text', 'Name', 0, 1, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required\"}}', 2),
(81, 10, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 4),
(82, 10, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 5),
(83, 11, 'id', 'text', 'Id', 1, 1, 0, 0, 0, 0, '{}', 1),
(84, 11, 'photo', 'image', 'Photo', 0, 1, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required\"}}', 2),
(85, 11, 'item_id', 'number', 'Item Id', 0, 1, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required\"}}', 3),
(86, 11, 'model', 'text', 'Model', 0, 1, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required\"}}', 4),
(87, 11, 'image_belongsto_mazad_relationship', 'relationship', 'mazads', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Models\\\\Mazad\",\"table\":\"mazads\",\"type\":\"belongsTo\",\"column\":\"item_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"address_translations\",\"pivot\":\"0\",\"taggable\":\"0\"}', 5),
(88, 12, 'id', 'text', 'Id', 1, 1, 0, 0, 0, 0, '{}', 1),
(89, 12, 'user_id', 'number', 'User Id', 0, 1, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required\"}}', 2),
(90, 12, 'mazad_id', 'number', 'Mazad Id', 0, 1, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required\"}}', 3),
(91, 12, 'price', 'number', 'Price', 0, 1, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required\"}}', 4),
(92, 12, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 7),
(93, 12, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 8),
(94, 12, 'winner_belongsto_user_relationship', 'relationship', 'users', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Models\\\\User\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"user_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"address_translations\",\"pivot\":\"0\",\"taggable\":\"0\"}', 5),
(95, 12, 'winner_belongsto_mazad_relationship', 'relationship', 'mazads', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Models\\\\Mazad\",\"table\":\"mazads\",\"type\":\"belongsTo\",\"column\":\"mazad_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"address_translations\",\"pivot\":\"0\",\"taggable\":\"0\"}', 6),
(103, 1, 'email_verified_at', 'timestamp', 'Email Verified At', 0, 1, 1, 1, 1, 1, '{}', 7),
(104, 1, 'phone', 'text', 'Phone', 0, 1, 1, 1, 1, 1, '{}', 6),
(105, 1, 'type', 'select_dropdown', 'Type', 1, 1, 1, 1, 1, 1, '{\"user\":\"user\",\"options\":{\"user\":\"user\",\"admin\":\"admin\"}}', 8),
(106, 1, 'gender', 'text', 'Gender', 0, 1, 1, 1, 1, 1, '{}', 12),
(107, 1, 'birth_date', 'text', 'Birth Date', 0, 1, 1, 1, 1, 1, '{}', 11),
(108, 1, 'code', 'text', 'Code', 0, 0, 1, 1, 1, 1, '{}', 18),
(109, 10, 'image', 'image', 'Image', 0, 1, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"required\"}}', 3);

-- --------------------------------------------------------

--
-- Table structure for table `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint(4) NOT NULL DEFAULT '0',
  `details` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2021-09-26 08:36:32', '2021-09-26 09:54:44'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2021-09-26 08:36:32', '2021-09-26 08:36:32'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController', '', 1, 0, NULL, '2021-09-26 08:36:32', '2021-09-26 08:36:32'),
(4, 'addresses', 'addresses', 'Address', 'Addresses', 'voyager-folder', 'App\\Models\\Address', NULL, NULL, NULL, 1, 1, '{\"order_column\":\"id\",\"order_display_column\":\"id\",\"order_direction\":\"desc\",\"default_search_key\":\"id\"}', '2021-09-26 08:41:20', '2021-09-26 08:41:20'),
(5, 'address_translations', 'address-translations', 'Address Translation', 'Address Translations', 'voyager-folder', 'App\\Models\\AddressTranslation', NULL, NULL, NULL, 1, 1, '{\"order_column\":\"id\",\"order_display_column\":\"id\",\"order_direction\":\"desc\",\"default_search_key\":\"full_address\",\"scope\":null}', '2021-09-26 08:43:12', '2021-09-26 08:43:51'),
(6, 'mazads', 'mazads', 'Mazad', 'Mazads', 'voyager-folder', 'App\\Models\\Mazad', NULL, NULL, NULL, 1, 1, '{\"order_column\":\"id\",\"order_display_column\":\"id\",\"order_direction\":\"desc\",\"default_search_key\":\"name\",\"scope\":null}', '2021-09-26 08:45:53', '2021-09-26 09:58:02'),
(7, 'comments', 'comments', 'Comment', 'Comments', 'voyager-folder', 'App\\Models\\Comment', NULL, NULL, NULL, 1, 1, '{\"order_column\":\"id\",\"order_display_column\":\"id\",\"order_direction\":\"desc\",\"default_search_key\":\"price\",\"scope\":null}', '2021-09-26 09:33:08', '2021-09-26 09:56:44'),
(8, 'asks', 'asks', 'Ask', 'Asks', 'voyager-folder', 'App\\Models\\Ask', NULL, NULL, NULL, 1, 1, '{\"order_column\":\"id\",\"order_display_column\":\"id\",\"order_direction\":\"desc\",\"default_search_key\":\"text\",\"scope\":null}', '2021-09-26 09:34:34', '2021-09-26 09:56:02'),
(9, 'answers', 'answers', 'Answer', 'Answers', 'voyager-folder', 'App\\Models\\Answer', NULL, NULL, NULL, 1, 1, '{\"order_column\":\"id\",\"order_display_column\":\"id\",\"order_direction\":\"desc\",\"default_search_key\":\"text\",\"scope\":null}', '2021-09-26 09:36:00', '2021-09-26 09:55:53'),
(10, 'categories', 'categories', 'Category', 'Categories', 'voyager-folder', 'App\\Models\\Category', NULL, NULL, NULL, 1, 1, '{\"order_column\":\"id\",\"order_display_column\":\"id\",\"order_direction\":\"desc\",\"default_search_key\":\"name\",\"scope\":null}', '2021-09-26 09:37:28', '2021-09-26 10:13:18'),
(11, 'images', 'images', 'Image', 'Images', 'voyager-folder', 'App\\Models\\Image', NULL, NULL, NULL, 1, 1, '{\"order_column\":\"id\",\"order_display_column\":\"id\",\"order_direction\":\"desc\",\"default_search_key\":\"model\",\"scope\":null}', '2021-09-26 09:38:10', '2021-09-26 09:38:49'),
(12, 'winners', 'winners', 'Winner', 'Winners', 'voyager-folder', 'App\\Models\\Winner', NULL, NULL, NULL, 1, 1, '{\"order_column\":\"id\",\"order_display_column\":\"id\",\"order_direction\":\"desc\",\"default_search_key\":\"user_id\",\"scope\":null}', '2021-09-26 09:39:33', '2021-09-26 09:58:23');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci,
  `item_id` bigint(20) UNSIGNED DEFAULT NULL,
  `model` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mazads`
--

CREATE TABLE `mazads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price_min_plus` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `from` datetime DEFAULT NULL,
  `to` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2021-09-26 08:36:32', '2021-09-26 08:36:32');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2021-09-26 08:36:32', '2021-09-26 08:36:32', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 7, '2021-09-26 08:36:32', '2021-09-26 09:45:29', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 3, '2021-09-26 08:36:32', '2021-09-26 08:36:32', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 2, '2021-09-26 08:36:32', '2021-09-26 08:36:32', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 9, '2021-09-26 08:36:32', '2021-09-26 09:45:32', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 1, '2021-09-26 08:36:32', '2021-09-26 09:43:39', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 2, '2021-09-26 08:36:32', '2021-09-26 09:43:39', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 3, '2021-09-26 08:36:32', '2021-09-26 09:43:39', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 4, '2021-09-26 08:36:32', '2021-09-26 09:43:55', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 8, '2021-09-26 08:36:32', '2021-09-26 09:45:29', 'voyager.settings.index', NULL),
(11, 1, 'Addresses', '', '_self', 'voyager-folder', NULL, 22, 1, '2021-09-26 08:41:20', '2021-09-26 09:43:40', 'voyager.addresses.index', NULL),
(12, 1, 'Address Translations', '', '_self', 'voyager-folder', NULL, 22, 2, '2021-09-26 08:43:12', '2021-09-26 09:43:45', 'voyager.address-translations.index', NULL),
(13, 1, 'Mazads', '', '_self', 'voyager-folder', NULL, 23, 1, '2021-09-26 08:45:53', '2021-09-26 09:44:28', 'voyager.mazads.index', NULL),
(14, 1, 'Comments', '', '_self', 'voyager-folder', NULL, 23, 3, '2021-09-26 09:33:08', '2021-09-26 09:44:43', 'voyager.comments.index', NULL),
(15, 1, 'Asks', '', '_self', 'voyager-folder', NULL, 23, 4, '2021-09-26 09:34:34', '2021-09-26 09:44:43', 'voyager.asks.index', NULL),
(16, 1, 'Answers', '', '_self', 'voyager-folder', NULL, 23, 5, '2021-09-26 09:36:00', '2021-09-26 09:44:43', 'voyager.answers.index', NULL),
(17, 1, 'Categories', '', '_self', 'voyager-folder', NULL, NULL, 5, '2021-09-26 09:37:28', '2021-09-26 09:45:29', 'voyager.categories.index', NULL),
(18, 1, 'Images', '', '_self', 'voyager-folder', NULL, 23, 2, '2021-09-26 09:38:10', '2021-09-26 09:44:43', 'voyager.images.index', NULL),
(19, 1, 'Winners', '', '_self', 'voyager-folder', NULL, 23, 6, '2021-09-26 09:39:33', '2021-09-26 09:44:47', 'voyager.winners.index', NULL),
(22, 1, 'Addresses', '', '_self', 'voyager-double-down', '#000000', NULL, 4, '2021-09-26 09:43:32', '2021-09-26 09:46:27', NULL, ''),
(23, 1, 'Mazad', '', '_self', 'voyager-double-down', '#000000', NULL, 6, '2021-09-26 09:44:22', '2021-09-26 09:46:37', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_01_01_000000_add_voyager_user_fields', 1),
(4, '2016_01_01_000000_create_data_types_table', 1),
(5, '2016_05_19_173453_create_menu_table', 1),
(6, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(7, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(8, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(9, '2016_06_01_000004_create_oauth_clients_table', 1),
(10, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(11, '2016_10_21_190000_create_roles_table', 1),
(12, '2016_10_21_190000_create_settings_table', 1),
(13, '2016_11_30_135954_create_permission_table', 1),
(14, '2016_11_30_141208_create_permission_role_table', 1),
(15, '2016_12_26_201236_data_types__add__server_side', 1),
(16, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(17, '2017_01_14_005015_create_translations_table', 1),
(18, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(19, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(20, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(21, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(22, '2017_08_05_000000_add_group_to_settings_table', 1),
(23, '2017_11_26_013050_add_user_role_relationship', 1),
(24, '2017_11_26_015000_create_user_roles_table', 1),
(25, '2018_03_11_000000_add_user_settings', 1),
(26, '2018_03_14_000000_add_details_to_data_types_table', 1),
(27, '2018_03_16_000000_make_settings_value_nullable', 1),
(28, '2019_08_19_000000_create_failed_jobs_table', 1),
(29, '2021_06_27_225315_create_images_table', 1),
(30, '2021_06_29_214248_create_user_translations_table', 1),
(31, '2021_07_01_091457_create_addresses_table', 1),
(32, '2021_07_01_093004_create_address_translations_table', 1),
(33, '2021_09_24_180857_create_mazads_table', 1),
(34, '2021_09_24_180950_create_categories_table', 1),
(35, '2021_09_24_181803_create_answers_table', 1),
(36, '2021_09_24_181813_create_asks_table', 1),
(37, '2021_09_24_181823_create_winners_table', 1),
(38, '2021_09_24_181831_create_comments_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'oebbZa6JLg5MjmtDZ0BCPbXsC41YRjTF1yODAyVg', NULL, 'http://localhost', 1, 0, 0, '2021-09-26 08:41:41', '2021-09-26 08:41:41'),
(2, NULL, 'Laravel Password Grant Client', 'tVPXZr5JYJlPvqogEIF8hyWcidBJXEgIZ67UZZU5', 'users', 'http://localhost', 0, 1, 0, '2021-09-26 08:41:41', '2021-09-26 08:41:41');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-09-26 08:41:41', '2021-09-26 08:41:41');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2021-09-26 08:36:32', '2021-09-26 08:36:32'),
(2, 'browse_bread', NULL, '2021-09-26 08:36:32', '2021-09-26 08:36:32'),
(3, 'browse_database', NULL, '2021-09-26 08:36:32', '2021-09-26 08:36:32'),
(4, 'browse_media', NULL, '2021-09-26 08:36:32', '2021-09-26 08:36:32'),
(5, 'browse_compass', NULL, '2021-09-26 08:36:32', '2021-09-26 08:36:32'),
(6, 'browse_menus', 'menus', '2021-09-26 08:36:32', '2021-09-26 08:36:32'),
(7, 'read_menus', 'menus', '2021-09-26 08:36:32', '2021-09-26 08:36:32'),
(8, 'edit_menus', 'menus', '2021-09-26 08:36:32', '2021-09-26 08:36:32'),
(9, 'add_menus', 'menus', '2021-09-26 08:36:32', '2021-09-26 08:36:32'),
(10, 'delete_menus', 'menus', '2021-09-26 08:36:32', '2021-09-26 08:36:32'),
(11, 'browse_roles', 'roles', '2021-09-26 08:36:32', '2021-09-26 08:36:32'),
(12, 'read_roles', 'roles', '2021-09-26 08:36:32', '2021-09-26 08:36:32'),
(13, 'edit_roles', 'roles', '2021-09-26 08:36:32', '2021-09-26 08:36:32'),
(14, 'add_roles', 'roles', '2021-09-26 08:36:32', '2021-09-26 08:36:32'),
(15, 'delete_roles', 'roles', '2021-09-26 08:36:32', '2021-09-26 08:36:32'),
(16, 'browse_users', 'users', '2021-09-26 08:36:32', '2021-09-26 08:36:32'),
(17, 'read_users', 'users', '2021-09-26 08:36:32', '2021-09-26 08:36:32'),
(18, 'edit_users', 'users', '2021-09-26 08:36:32', '2021-09-26 08:36:32'),
(19, 'add_users', 'users', '2021-09-26 08:36:32', '2021-09-26 08:36:32'),
(20, 'delete_users', 'users', '2021-09-26 08:36:32', '2021-09-26 08:36:32'),
(21, 'browse_settings', 'settings', '2021-09-26 08:36:32', '2021-09-26 08:36:32'),
(22, 'read_settings', 'settings', '2021-09-26 08:36:32', '2021-09-26 08:36:32'),
(23, 'edit_settings', 'settings', '2021-09-26 08:36:32', '2021-09-26 08:36:32'),
(24, 'add_settings', 'settings', '2021-09-26 08:36:32', '2021-09-26 08:36:32'),
(25, 'delete_settings', 'settings', '2021-09-26 08:36:32', '2021-09-26 08:36:32'),
(26, 'browse_addresses', 'addresses', '2021-09-26 08:41:20', '2021-09-26 08:41:20'),
(27, 'read_addresses', 'addresses', '2021-09-26 08:41:20', '2021-09-26 08:41:20'),
(28, 'edit_addresses', 'addresses', '2021-09-26 08:41:20', '2021-09-26 08:41:20'),
(29, 'add_addresses', 'addresses', '2021-09-26 08:41:20', '2021-09-26 08:41:20'),
(30, 'delete_addresses', 'addresses', '2021-09-26 08:41:20', '2021-09-26 08:41:20'),
(31, 'browse_address_translations', 'address_translations', '2021-09-26 08:43:12', '2021-09-26 08:43:12'),
(32, 'read_address_translations', 'address_translations', '2021-09-26 08:43:12', '2021-09-26 08:43:12'),
(33, 'edit_address_translations', 'address_translations', '2021-09-26 08:43:12', '2021-09-26 08:43:12'),
(34, 'add_address_translations', 'address_translations', '2021-09-26 08:43:12', '2021-09-26 08:43:12'),
(35, 'delete_address_translations', 'address_translations', '2021-09-26 08:43:12', '2021-09-26 08:43:12'),
(36, 'browse_mazads', 'mazads', '2021-09-26 08:45:53', '2021-09-26 08:45:53'),
(37, 'read_mazads', 'mazads', '2021-09-26 08:45:53', '2021-09-26 08:45:53'),
(38, 'edit_mazads', 'mazads', '2021-09-26 08:45:53', '2021-09-26 08:45:53'),
(39, 'add_mazads', 'mazads', '2021-09-26 08:45:53', '2021-09-26 08:45:53'),
(40, 'delete_mazads', 'mazads', '2021-09-26 08:45:53', '2021-09-26 08:45:53'),
(41, 'browse_comments', 'comments', '2021-09-26 09:33:08', '2021-09-26 09:33:08'),
(42, 'read_comments', 'comments', '2021-09-26 09:33:08', '2021-09-26 09:33:08'),
(43, 'edit_comments', 'comments', '2021-09-26 09:33:08', '2021-09-26 09:33:08'),
(44, 'add_comments', 'comments', '2021-09-26 09:33:08', '2021-09-26 09:33:08'),
(45, 'delete_comments', 'comments', '2021-09-26 09:33:08', '2021-09-26 09:33:08'),
(46, 'browse_asks', 'asks', '2021-09-26 09:34:34', '2021-09-26 09:34:34'),
(47, 'read_asks', 'asks', '2021-09-26 09:34:34', '2021-09-26 09:34:34'),
(48, 'edit_asks', 'asks', '2021-09-26 09:34:34', '2021-09-26 09:34:34'),
(49, 'add_asks', 'asks', '2021-09-26 09:34:34', '2021-09-26 09:34:34'),
(50, 'delete_asks', 'asks', '2021-09-26 09:34:34', '2021-09-26 09:34:34'),
(51, 'browse_answers', 'answers', '2021-09-26 09:36:00', '2021-09-26 09:36:00'),
(52, 'read_answers', 'answers', '2021-09-26 09:36:00', '2021-09-26 09:36:00'),
(53, 'edit_answers', 'answers', '2021-09-26 09:36:00', '2021-09-26 09:36:00'),
(54, 'add_answers', 'answers', '2021-09-26 09:36:00', '2021-09-26 09:36:00'),
(55, 'delete_answers', 'answers', '2021-09-26 09:36:00', '2021-09-26 09:36:00'),
(56, 'browse_categories', 'categories', '2021-09-26 09:37:28', '2021-09-26 09:37:28'),
(57, 'read_categories', 'categories', '2021-09-26 09:37:28', '2021-09-26 09:37:28'),
(58, 'edit_categories', 'categories', '2021-09-26 09:37:28', '2021-09-26 09:37:28'),
(59, 'add_categories', 'categories', '2021-09-26 09:37:28', '2021-09-26 09:37:28'),
(60, 'delete_categories', 'categories', '2021-09-26 09:37:28', '2021-09-26 09:37:28'),
(61, 'browse_images', 'images', '2021-09-26 09:38:10', '2021-09-26 09:38:10'),
(62, 'read_images', 'images', '2021-09-26 09:38:10', '2021-09-26 09:38:10'),
(63, 'edit_images', 'images', '2021-09-26 09:38:10', '2021-09-26 09:38:10'),
(64, 'add_images', 'images', '2021-09-26 09:38:10', '2021-09-26 09:38:10'),
(65, 'delete_images', 'images', '2021-09-26 09:38:10', '2021-09-26 09:38:10'),
(66, 'browse_winners', 'winners', '2021-09-26 09:39:33', '2021-09-26 09:39:33'),
(67, 'read_winners', 'winners', '2021-09-26 09:39:33', '2021-09-26 09:39:33'),
(68, 'edit_winners', 'winners', '2021-09-26 09:39:33', '2021-09-26 09:39:33'),
(69, 'add_winners', 'winners', '2021-09-26 09:39:33', '2021-09-26 09:39:33'),
(70, 'delete_winners', 'winners', '2021-09-26 09:39:33', '2021-09-26 09:39:33');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2021-09-26 08:36:32', '2021-09-26 08:36:32'),
(2, 'user', 'Normal User', '2021-09-26 08:36:32', '2021-09-26 08:36:32');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `details` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `group` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Site Title', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Site Description', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', '', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', '', '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'Voyager', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Welcome to Voyager. The Missing Admin for Laravel', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', '', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', '', '', 'text', 1, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` enum('user','admin') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `gender` enum('male','female') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `phone`, `type`, `gender`, `birth_date`, `code`, `remember_token`, `settings`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'admin@admin.com', 'users/default.png', '2021-09-26 11:59:53', '$2y$10$.oQYH1YIq4cmGoINdq8Tq.J2utwblFdSqZdWv0rOkxIdJ8QYCdY6y', NULL, 'admin', NULL, NULL, NULL, NULL, NULL, '2021-09-26 08:37:45', '2021-09-26 08:37:45');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_translations`
--

CREATE TABLE `user_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_translations`
--

INSERT INTO `user_translations` (`id`, `name`, `user_id`, `locale`) VALUES
(1, 'admin', 1, 'en');

-- --------------------------------------------------------

--
-- Table structure for table `winners`
--

CREATE TABLE `winners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `mazad_id` bigint(20) UNSIGNED DEFAULT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `addresses_user_id_foreign` (`user_id`);

--
-- Indexes for table `address_translations`
--
ALTER TABLE `address_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `address_translations_address_id_foreign` (`address_id`),
  ADD KEY `address_translations_locale_index` (`locale`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `asks`
--
ALTER TABLE `asks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Indexes for table `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mazads`
--
ALTER TABLE `mazads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- Indexes for table `user_translations`
--
ALTER TABLE `user_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_translations_user_id_foreign` (`user_id`),
  ADD KEY `user_translations_locale_index` (`locale`);

--
-- Indexes for table `winners`
--
ALTER TABLE `winners`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `address_translations`
--
ALTER TABLE `address_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `asks`
--
ALTER TABLE `asks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mazads`
--
ALTER TABLE `mazads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_translations`
--
ALTER TABLE `user_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `winners`
--
ALTER TABLE `winners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `address_translations`
--
ALTER TABLE `address_translations`
  ADD CONSTRAINT `address_translations_address_id_foreign` FOREIGN KEY (`address_id`) REFERENCES `addresses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_translations`
--
ALTER TABLE `user_translations`
  ADD CONSTRAINT `user_translations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
