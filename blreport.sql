-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2024 at 02:04 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blreport`
--

-- --------------------------------------------------------

--
-- Table structure for table `bls`
--

CREATE TABLE `bls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bl_number` varchar(255) NOT NULL,
  `shipper` text DEFAULT NULL,
  `consignee` text DEFAULT NULL,
  `notify_party` text DEFAULT NULL,
  `place_of_receipt` text DEFAULT NULL,
  `port_of_loading` text DEFAULT NULL,
  `date_of_issue` date NOT NULL,
  `for_delivery_apply_to` text DEFAULT NULL,
  `ocean_vessel` text DEFAULT NULL,
  `voyage_no` text DEFAULT NULL,
  `port_of_discharge` text DEFAULT NULL,
  `place_of_delivery` text DEFAULT NULL,
  `final_destination` text DEFAULT NULL,
  `freight_payable_at` text DEFAULT NULL,
  `number_of_original_bl` text DEFAULT NULL,
  `marks_container_seal_no` text DEFAULT NULL,
  `number_of_packages` text DEFAULT NULL,
  `description_of_packages_and_goods` text DEFAULT NULL,
  `gross_weight` text DEFAULT NULL,
  `measurement` text DEFAULT NULL,
  `shipped_on_board_the_vessel` text DEFAULT NULL,
  `on_board_date` date NOT NULL,
  `freight_and_charges` text DEFAULT NULL,
  `prepaid` text DEFAULT NULL,
  `collect` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bls`
--

INSERT INTO `bls` (`id`, `bl_number`, `shipper`, `consignee`, `notify_party`, `place_of_receipt`, `port_of_loading`, `date_of_issue`, `for_delivery_apply_to`, `ocean_vessel`, `voyage_no`, `port_of_discharge`, `place_of_delivery`, `final_destination`, `freight_payable_at`, `number_of_original_bl`, `marks_container_seal_no`, `number_of_packages`, `description_of_packages_and_goods`, `gross_weight`, `measurement`, `shipped_on_board_the_vessel`, `on_board_date`, `freight_and_charges`, `prepaid`, `collect`, `created_at`, `updated_at`) VALUES
(1, 'HNS0LZDB24', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', '2024-08-27', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', '<p>TEST</p>', '<p>TEST</p>', '<p>TEST</p>', 'TEST', 'TEST', 'TEST', '2024-08-27', 'TEST', 'TEST', 'TEST', '2024-08-27 02:42:57', '2024-08-27 02:42:57'),
(2, 'HNSOH4SH09', 'SHIPPER', 'CONSIGNEE', 'NOTIFY PARTY', 'PLACE OF RECEIPT', 'PORT LOADING', '2024-08-27', 'FOR DELIVERY OF GOODS PLEASE APPLY TO:', 'OCEAN VESSEL', 'VOYAGE NO.', 'PORT OF DISCHARGE', 'PLACE OF DELIVERY', 'FINAL DESTINATION', 'FREIGHT PAYABLE AT', 'NUMBER OF ORIGINAL B/L', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">MARKS &amp; NUMBER</span><br><span style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">CONTAINER &amp; SEAL NUMBERS</span></p>', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">NO. OF</span><br><span style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">PACKAGES</span></p>', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">DESCRIPTION OF PACKAGES AND GOODS</span><br><span style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">PARTICULARS FURNISHED BY SHIPPER</span></p>', 'GROSS WEIGHT\r\nKILOS', 'MESUREMENT\r\nCBM', 'SHIPPED ON BOARD THE VESSEL', '2024-08-27', 'FREIGHT AND CHARGES', 'PREPAID', 'COLLECT', '2024-08-27 02:45:27', '2024-08-27 02:45:27'),
(3, 'HNSCLI178J', 'd asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd avd asd asd asd asd asd asd asd a', 'd asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd a', 'd asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd a', 'TEST TESTE TEST TEST TEST', 'TEST TESTE TEST TEST TEST', '2024-08-28', 'd asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd a', 'TEST TESTE TEST TEST TEST', 'TEST TESTE TEST TEST TEST', 'TEST TESTE TEST TEST TEST', 'TEST TESTE TEST TEST TEST', 'TEST TESTE TEST TEST TEST', 'TEST TESTE TEST TEST TEST', 'TEST TESTE TEST TEST TEST', '<p>d asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd&nbsp;</p>', '<p>d asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd a</p>', '<p>d asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asdd asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd a ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad &nbsp;asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd d asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd a d asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd ad asd asd asd asd asd asd asd a</p>', '12GG', '515GG', 'TEST TESTE TEST TEST TEST', '2024-08-28', 'TEST TESTE TESTTEST TESTE TEST TEST TESTTEST TESTE TEST TEST TEST TEST TEST', 'TEST TESTE TEST TEST TESTTEST TESTE TEST TEST TESTTEST TESTE TEST TEST TEST', 'TEST TESTE TEST TEST TESTTEST TESTE TEST TEST TESTTEST TESTE TEST TEST TEST', '2024-08-28 04:38:16', '2024-08-28 04:38:16'),
(4, 'HNS4OQ5O3C', NULL, NULL, NULL, NULL, NULL, '2024-08-28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-08-28', NULL, NULL, NULL, '2024-08-28 05:31:22', '2024-08-28 05:31:22'),
(5, 'HNSFOC0SII', 'CRYSTAL VESTITI LTD. 74/1 VOGRA, NATIONAL UNIVERSITYJOYDEBPUR, GAZIPUR, BANGLADESH.', 'TOMAS BODERO S.A. POL. IND. LOS PEDERNALES C/PIEDRA DESILEX 09195 PEDERNALES BURGOS, SPAIN.', 'TOMAS BODERO S.A. POL. IND. LOS PEDERNALES C/PIEDRA DESILEX 09195 PEDERNALES BURGOS, SPAIN.', 'CHITTAGONG, BANGLADESH', 'CHITTAGONG, BANGLADESH', '2024-08-28', 'ASERCOMEX LOGISTICS CENTRO DE TRANSPORTES DE BURGOS,CALLE VITORIA, 286 EDIFICIO CD BURGOS, PLANTA 1ªT - 09007 BURGOS(ESPANA) CIF-VAT: ES 09316126 EMAIL: JAVIER@ASERCOMEX.ES TEL :+34 947 48 25 05', 'SKY WIND', 'V. – 044S', 'BARCELONA, SPAIN', NULL, NULL, NULL, '03 (Month)', '<p><span class=\"text-big\">CODE</span><br><span class=\"text-big\">NAME</span><br><span class=\"text-big\">ARTICLE</span><br><span class=\"text-big\">COLOR</span><br><span class=\"text-big\">SIZE</span><br><span class=\"text-big\">QTY</span><br><span class=\"text-big\">CARTON NO</span><br><span class=\"text-big\">EAN CODE</span><br><span class=\"text-big\">ORDER</span></p>', '<p>365 CTNS</p>', '<p><span class=\"text-big\">CTNS</span><br><span class=\"text-big\">(STTHCR: E3E65 H CUANRDTROENDS ANREDA SDIXYT MYA FDIVEE G CATRNMSEONNTSLY )</span><br><span class=\"text-big\">DOVER HV TROUSERS</span><br><span class=\"text-big\">KING HV TROUSERS</span><br><span class=\"text-big\">HS CODE: 62034300</span><br><span class=\"text-big\">I N V N O : C V L - 0 5 7 - 2 0 2 4 D T : 0 2 - 0 7- 2 0 2 4</span><br><span class=\"text-big\">EXP NO: 1619-000805-2024 DT: 02-07-2024</span><br><span class=\"text-big\">Contract no: B320 DT: 05-03-2024</span><br><span class=\"text-big\">CON: BEAU2467898 /20\'GP SEAL NO:YMAQ278740</span><br><span class=\"text-big\">FCL/FCL</span></p>', '4377.30 KGS', '17.52 CBM', NULL, '2024-08-28', NULL, NULL, 'FREIGHT COLLECTED', '2024-08-28 05:52:02', '2024-08-28 05:52:02');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(9, '2024_07_13_105553_create_bls_table', 4),
(10, '2024_08_27_052110_create_orders_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shipper` text NOT NULL,
  `consignee` text NOT NULL,
  `carrier` text NOT NULL,
  `notify_address` text NOT NULL,
  `vessel_details` text NOT NULL,
  `voyage` text NOT NULL,
  `receiving_unit` text NOT NULL,
  `type_of_service` text NOT NULL,
  `job_order_number` text NOT NULL,
  `place_of_receipt` text NOT NULL,
  `port_of_loading` text NOT NULL,
  `port_of_discharge` text NOT NULL,
  `final_pd` text NOT NULL,
  `job_order_date` date NOT NULL,
  `marks_and_no` text NOT NULL,
  `general_description_of_goods` text NOT NULL,
  `gross_weight` text NOT NULL,
  `measurement` text NOT NULL,
  `comments` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `shipper`, `consignee`, `carrier`, `notify_address`, `vessel_details`, `voyage`, `receiving_unit`, `type_of_service`, `job_order_number`, `place_of_receipt`, `port_of_loading`, `port_of_discharge`, `final_pd`, `job_order_date`, `marks_and_no`, `general_description_of_goods`, `gross_weight`, `measurement`, `comments`, `created_at`, `updated_at`) VALUES
(1, 'Shipper', 'Consignee', 'Carrier', 'Notify Address', 'Vessel Details', 'Voyage', 'Receiving Unit', 'Type of Service', 'Job Order Number', 'Place of Receipt', 'Port of Loading', 'Port of Discharge', 'Final P.D', '2024-08-28', '<p><strong>Marks and Numbers</strong></p>', '<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;**** SEA/AIR SHIPMENT ****</p><p><strong>Number of packages, kind of packages, general</strong><br><strong>description of goods, (Said to contain)</strong></p>', 'Gross Weight', 'Measurement', 'Comments / Special Instructions:', '2024-08-28 01:13:10', '2024-08-28 01:13:10');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('XKE8K1sAfG3zej8VXHnIRVupRJh06lsEidAVTnWK', 19, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiNHVCMDFOdXNSSUVwVlNDTHRsMUJnbDBweW1XS0RsbWlHb2RFbDJyWiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hZGQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxOTt9', 1725105669);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `role` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `status`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'TEST', 'TEST@TEST.COM', NULL, '$2y$12$LAM8NTxZSZdhrBq5ceXkf.n8H179wBmFRxT8eIz2zfD0zlnoCGFJO', 0, '', NULL, '2024-08-08 02:26:35', '2024-08-29 06:35:00'),
(2, 'TEST', 'TEST1@TEST.COM', NULL, '$2y$12$mAidWoom9CaeJ/N8W2WHI.6GCK6zckCgpv9yonsIB31W7ZYpJbAxG', 0, '', NULL, '2024-08-08 02:29:21', '2024-08-20 03:51:06'),
(3, 'TEST', 'TEST2@TEST.COM', NULL, '$2y$12$40IKi3i5tkB1htEsaIwmpOzpi1ltRHnE1yTahAXJiekioiFZj2PQG', NULL, '', NULL, '2024-08-08 02:30:37', '2024-08-08 02:30:37'),
(4, 'TEST', 'TEST5@TEST.COM', NULL, '$2y$12$bdWzHfMXru4sB5jBIL6q8ec6R0xaTSdxCSSRDRPJGpk1uwkj1AR5i', NULL, '', NULL, '2024-08-08 02:38:14', '2024-08-08 02:38:14'),
(5, 'TEST', 'TEST6@TEST.COM', NULL, '$2y$12$6zojQIuhtstlzMqvo0qPeO8p3t165dKgRhyCGGwjQBX.b8IQis/ci', NULL, '', NULL, '2024-08-08 02:39:46', '2024-08-08 02:39:46'),
(6, 'TEST', 'TEST7@TEST.COM', NULL, '$2y$12$Fc6q0wX.u8rk0j.fyl8ZmedFCW/S078Rg4U.NPjWl0B6OI/uRkNNK', NULL, '', NULL, '2024-08-08 02:45:50', '2024-08-08 02:45:50'),
(7, 'TEST', 'TEST9@TEST.COM', NULL, '$2y$12$n2Wn6L/Zog93jNHHn6l2Qe/QePPRZKvW7kkU64H1R9QRtkEjqHMBe', NULL, '', NULL, '2024-08-08 02:50:26', '2024-08-08 02:50:26'),
(8, 'TEST', 'TEST10@TEST.COM', NULL, '$2y$12$umCvOg7kTxyMCh0UdD5pDOPe0HmC8NcmAPiNg1cPZKY3lJN874ZZK', NULL, '', NULL, '2024-08-08 02:51:11', '2024-08-08 02:51:11'),
(9, 'TEST', 'TEST11@TEST.COM', NULL, '$2y$12$pAnL7cMDU9VCQ3FVovMkYOiw8BEEBNaCtZPPgEHuh6ZloAgDuajvO', NULL, '', NULL, '2024-08-08 02:52:44', '2024-08-08 02:52:44'),
(10, 'TEST', 'TEST12@TEST.COM', NULL, '$2y$12$JiB3Euimf1mt8p4/KZqw6uESNJUJkMWISohhJw0KM1Y2ZXwcYfY3i', NULL, '', NULL, '2024-08-10 00:27:51', '2024-08-10 00:27:51'),
(11, 'TEST', 'TEST13@TEST.COM', NULL, '$2y$12$Z5Qe95omQGYzI2FjN9mpju7vnoUDc3OOEOKOA2b0W3hrtChqWn53a', NULL, '', NULL, '2024-08-10 00:48:12', '2024-08-10 00:48:12'),
(12, 'TEST', 'TEST14@TEST.COM', NULL, '$2y$12$fTV/b5uupYr5P0iT6eWOx.IyH/4fmwuprQ1VXqsj90jQ4tfnGCcs.', NULL, '', NULL, '2024-08-10 00:57:31', '2024-08-10 00:57:31'),
(13, 'TEST', 'TEST15@TEST.COM', NULL, '$2y$12$M2g1fRzDUlUQltuMnb.hsOFf3Wsr7fr46ts9dxLKmXAQhOmjrLlaq', NULL, '', NULL, '2024-08-10 01:20:54', '2024-08-10 01:20:54'),
(14, 'TEST', 'TEST17@TEST.COM', NULL, '$2y$12$h6U7CijvgP9qVusfrw0o9e.xIEQxVwnjgjMpFHtvI0Kh.Db.MAraa', NULL, '', NULL, '2024-08-10 02:09:08', '2024-08-10 02:09:08'),
(15, 'TEST', 'TEST16@TEST.COM', NULL, '$2y$12$P3e0JHztQw2ocpIq.qNfJuVx5ZMyRCwZwpmJ0A1diQWnZNVM3xKtC', NULL, '', NULL, '2024-08-10 02:17:08', '2024-08-10 02:17:08'),
(16, 'TEST', 'TEST18@TEST.COM', NULL, '$2y$12$vgzxQm3GEsrR/2aMTn7euuoCXN7C30WbuBW4s91doinqREquOSNJq', NULL, '', NULL, '2024-08-10 02:27:56', '2024-08-10 02:27:56'),
(17, 'TEST', 'TEST19@TEST.COM', NULL, '$2y$12$NvjbpU.RxuZXrC4Fwown7OWk5urDO.2N8jDzSIFA0tZoXT6htzlbO', NULL, '', NULL, '2024-08-10 02:38:10', '2024-08-10 02:38:10'),
(18, 'TEST', 'TEST20@TEST.COM', NULL, '$2y$12$q3YMTfL5xZXVzwQdF0xCROCTUc2z2rgASepl9YK5n6.urmWqJrMK.', NULL, '', NULL, '2024-08-10 02:39:22', '2024-08-10 02:39:22'),
(19, 'Joe Rogan', 'joe@gmail.com', NULL, '$2y$12$9z21J.UWwEl1JEt5uY3bfOFp8vprX3iYItjWH./wlVmnF4Bpf/Kti', 1, '', NULL, '2024-08-14 01:16:16', '2024-08-22 04:44:29'),
(20, 'Roger Demi', 'roger@gmail.com', NULL, '$2y$12$mZC7sWo5XMmsiqj/wAutnejXoqHWAfjc4Q88Bb4q57Uvkkb84bPWa', NULL, '', NULL, '2024-08-18 02:47:57', '2024-08-18 02:47:57'),
(21, 'Robert Haiman', 'robert@gmail.com', NULL, '$2y$12$/ao3XW3BlcmRzxRht9bC/.vEklDWDH11mn8c2YheoVa5OhGgz6Qv.', NULL, '', NULL, '2024-08-18 03:23:16', '2024-08-18 03:23:16'),
(22, 'TEST', 'TEST21@TEST.COM', NULL, '$2y$12$MAKEl786DMgW4y4o31T9euZtpz3DgGTkhOTndiLzBAGBfHg0FT1CG', NULL, '', NULL, '2024-08-18 03:25:34', '2024-08-18 03:25:34'),
(23, 'TEST', 'TEST22@TEST.COM', NULL, '$2y$12$vSH3m3x9wEjk8Gli4sB.Ie4W8C0hWQxVMt8I8jN4H7hCDURvzxpqm', 1, '', NULL, '2024-08-18 03:27:28', '2024-08-18 03:27:28'),
(24, 'TEST', 'TEST23@TEST.COM', NULL, '$2y$12$EUSzhLcNN3.N.Qp/uWh9ie7EwzYaZDapdmOAtlGff.5EogdBV5b3a', 0, '', NULL, '2024-08-18 03:28:57', '2024-08-18 03:28:57'),
(25, 'TEST', 'TEST24@TEST.COM', NULL, '$2y$12$NqDeihC3.YrzU1BXp9rvFOzS7BHN1EctYJyZC8Ms4w30YhtL76Z6y', 1, '', NULL, '2024-08-18 03:56:30', '2024-08-18 03:56:30'),
(26, 'TEST', 'TEST25@TEST.COM', NULL, '$2y$12$6Xb/Bm9BkNzgm7IgVeo4/u5FBF2Avqg1AVSWeHQbmIGJ5eal5OEiO', 1, '', NULL, '2024-08-18 05:35:59', '2024-08-18 05:35:59'),
(27, 'TEST', 'TEST128@TEST.COM', NULL, '$2y$12$hfFqI5I2nXsLLVeOoG.LqenMp.LPierQobU85YKIH6klqPEDW2WDi', 1, '', NULL, '2024-08-18 05:40:31', '2024-08-18 05:40:31'),
(28, 'TEST', 'TEST29@TEST.COM', NULL, '$2y$12$qkTc7/vXbhq56KAd2HxdEecGhCTlSU2rBGKKRJaMfOhSIIglrFQK.', 1, '', NULL, '2024-08-19 00:40:04', '2024-08-19 00:40:04'),
(29, 'TEST', 'TEST30@TEST.COM', NULL, '$2y$12$MGFMcixAqi2qduP05MXMeeT5GA6BtAo65dAz1FF3BTJh7l0Ezx.aS', 1, '', NULL, '2024-08-19 00:41:51', '2024-08-19 00:41:51'),
(30, 'TEST', 'TEST28@TEST.COM', NULL, '$2y$12$mGKAI/j0e7JXggn1DUD0k.wK5u2Cn4dgC31OYbbg/owN9LMjzNoDa', 1, '', NULL, '2024-08-20 00:23:21', '2024-08-20 00:23:21'),
(31, 'TEST', 'TEST31@TEST.COM', NULL, '$2y$12$Pa22Lb5qUqn9elu/Yu6IwOhdvtTpjNfWs7d8m/QLJkfSdnYDdha72', 1, '', NULL, '2024-08-20 00:24:24', '2024-08-20 00:24:24'),
(32, 'TEST', 'TEST32@TEST.COM', NULL, '$2y$12$eWuhVbnmbkY1nCGFe0ZxUupUf31RWbSJ0iHmM5LJt7TUiwcTOmomm', 0, '', NULL, '2024-08-20 00:25:34', '2024-08-20 00:25:34'),
(33, 'TEST', 'TEST33@TEST.COM', NULL, '$2y$12$0Om2fn01HMDB8NJwENRLlOKk3x6sdkNBZVIgHjDAb6K.O7KhjUaN6', 1, '', NULL, '2024-08-20 00:28:43', '2024-08-20 00:28:43'),
(34, 'TEST', 'TEST34@TEST.COM', NULL, '$2y$12$fCELZTbr2AUlIsZkLjJO6uZmAvLKnr30kG9hPLD3UV0JjbTvFgwTW', 1, '', NULL, '2024-08-29 06:35:39', '2024-08-29 06:35:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bls`
--
ALTER TABLE `bls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bls`
--
ALTER TABLE `bls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
