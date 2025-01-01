-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 01, 2025 at 01:40 PM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bl_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `airbls`
--

CREATE TABLE `airbls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `airbl_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mawb_no_a` int(11) DEFAULT NULL,
  `shipper_name_and_address` text COLLATE utf8mb4_unicode_ci,
  `shipper_account_number` text COLLATE utf8mb4_unicode_ci,
  `consignee_name_and_address` text COLLATE utf8mb4_unicode_ci,
  `consignee_account_number` text COLLATE utf8mb4_unicode_ci,
  `issuing_carrier_agent_name_and_city` text COLLATE utf8mb4_unicode_ci,
  `accounting_information` text COLLATE utf8mb4_unicode_ci,
  `agent_iata_code` text COLLATE utf8mb4_unicode_ci,
  `account_number` text COLLATE utf8mb4_unicode_ci,
  `airport_of_departure` text COLLATE utf8mb4_unicode_ci,
  `reference_number` text COLLATE utf8mb4_unicode_ci,
  `to_a` text COLLATE utf8mb4_unicode_ci,
  `by_first_carrier` text COLLATE utf8mb4_unicode_ci,
  `to_b` text COLLATE utf8mb4_unicode_ci,
  `by_a` text COLLATE utf8mb4_unicode_ci,
  `to_c` text COLLATE utf8mb4_unicode_ci,
  `by_b` text COLLATE utf8mb4_unicode_ci,
  `currency` text COLLATE utf8mb4_unicode_ci,
  `chgs_code` text COLLATE utf8mb4_unicode_ci,
  `declared_value_for_carriage` text COLLATE utf8mb4_unicode_ci,
  `declared_value_for_customs` text COLLATE utf8mb4_unicode_ci,
  `ppd_v` text COLLATE utf8mb4_unicode_ci,
  `coll_v` text COLLATE utf8mb4_unicode_ci,
  `ppd_o` text COLLATE utf8mb4_unicode_ci,
  `coll_o` text COLLATE utf8mb4_unicode_ci,
  `handling_information` text COLLATE utf8mb4_unicode_ci,
  `airport_of_destination` text COLLATE utf8mb4_unicode_ci,
  `ammount_of_insurance` text COLLATE utf8mb4_unicode_ci,
  `flight_no` text COLLATE utf8mb4_unicode_ci,
  `flight_date` text COLLATE utf8mb4_unicode_ci,
  `no_of_pieces_rcp` text COLLATE utf8mb4_unicode_ci,
  `gross_weight` text COLLATE utf8mb4_unicode_ci,
  `kg_lb` text COLLATE utf8mb4_unicode_ci,
  `rate_class` text COLLATE utf8mb4_unicode_ci,
  `commodity_item_no` text COLLATE utf8mb4_unicode_ci,
  `chargeable_weight` text COLLATE utf8mb4_unicode_ci,
  `rate_charge` text COLLATE utf8mb4_unicode_ci,
  `total` text COLLATE utf8mb4_unicode_ci,
  `nature_and_quantity_of_goods` text COLLATE utf8mb4_unicode_ci,
  `prepaid` text COLLATE utf8mb4_unicode_ci,
  `collect` text COLLATE utf8mb4_unicode_ci,
  `other_charges` text COLLATE utf8mb4_unicode_ci,
  `valuation_charge_a` text COLLATE utf8mb4_unicode_ci,
  `valuation_charge_b` text COLLATE utf8mb4_unicode_ci,
  `tax_a` text COLLATE utf8mb4_unicode_ci,
  `tax_b` text COLLATE utf8mb4_unicode_ci,
  `total_other_charges_due_agent_a` text COLLATE utf8mb4_unicode_ci,
  `total_other_charges_due_agent_b` text COLLATE utf8mb4_unicode_ci,
  `total_other_charges_due_carrier_a` text COLLATE utf8mb4_unicode_ci,
  `total_other_charges_due_carrier_b` text COLLATE utf8mb4_unicode_ci,
  `total_prepaid` text COLLATE utf8mb4_unicode_ci,
  `total_collect` text COLLATE utf8mb4_unicode_ci,
  `currency_conversion_rates` text COLLATE utf8mb4_unicode_ci,
  `cc_charges_in_dest_currency` text COLLATE utf8mb4_unicode_ci,
  `charges_at_destination` text COLLATE utf8mb4_unicode_ci,
  `total_collect_charges` text COLLATE utf8mb4_unicode_ci,
  `signature_of_shipper_or_his_agent` text COLLATE utf8mb4_unicode_ci,
  `executed_on_date` text COLLATE utf8mb4_unicode_ci,
  `at_place` text COLLATE utf8mb4_unicode_ci,
  `signature_of_issuing_carrier_or_its_agent` text COLLATE utf8mb4_unicode_ci,
  `mawb_no_c` text COLLATE utf8mb4_unicode_ci,
  `mawb_no_b` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `airbls`
--

INSERT INTO `airbls` (`id`, `airbl_number`, `mawb_no_a`, `shipper_name_and_address`, `shipper_account_number`, `consignee_name_and_address`, `consignee_account_number`, `issuing_carrier_agent_name_and_city`, `accounting_information`, `agent_iata_code`, `account_number`, `airport_of_departure`, `reference_number`, `to_a`, `by_first_carrier`, `to_b`, `by_a`, `to_c`, `by_b`, `currency`, `chgs_code`, `declared_value_for_carriage`, `declared_value_for_customs`, `ppd_v`, `coll_v`, `ppd_o`, `coll_o`, `handling_information`, `airport_of_destination`, `ammount_of_insurance`, `flight_no`, `flight_date`, `no_of_pieces_rcp`, `gross_weight`, `kg_lb`, `rate_class`, `commodity_item_no`, `chargeable_weight`, `rate_charge`, `total`, `nature_and_quantity_of_goods`, `prepaid`, `collect`, `other_charges`, `valuation_charge_a`, `valuation_charge_b`, `tax_a`, `tax_b`, `total_other_charges_due_agent_a`, `total_other_charges_due_agent_b`, `total_other_charges_due_carrier_a`, `total_other_charges_due_carrier_b`, `total_prepaid`, `total_collect`, `currency_conversion_rates`, `cc_charges_in_dest_currency`, `charges_at_destination`, `total_collect_charges`, `signature_of_shipper_or_his_agent`, `executed_on_date`, `at_place`, `signature_of_issuing_carrier_or_its_agent`, `mawb_no_c`, `mawb_no_b`, `created_at`, `updated_at`) VALUES
(1, 'ALVDAC25011001', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-01', NULL, NULL, NULL, NULL, '2025-01-01 00:59:08', '2025-01-01 00:59:08'),
(2, 'ALVDAC25011002', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-02', NULL, NULL, NULL, NULL, '2025-01-01 01:00:14', '2025-01-01 01:00:14');

-- --------------------------------------------------------

--
-- Table structure for table `bls`
--

CREATE TABLE `bls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bl_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipper` text COLLATE utf8mb4_unicode_ci,
  `consignee` text COLLATE utf8mb4_unicode_ci,
  `notify_party` text COLLATE utf8mb4_unicode_ci,
  `place_of_receipt` text COLLATE utf8mb4_unicode_ci,
  `port_of_loading` text COLLATE utf8mb4_unicode_ci,
  `date_of_issue` date DEFAULT NULL,
  `for_delivery_apply_to` text COLLATE utf8mb4_unicode_ci,
  `ocean_vessel` text COLLATE utf8mb4_unicode_ci,
  `voyage_no` text COLLATE utf8mb4_unicode_ci,
  `port_of_discharge` text COLLATE utf8mb4_unicode_ci,
  `place_of_delivery` text COLLATE utf8mb4_unicode_ci,
  `final_destination` text COLLATE utf8mb4_unicode_ci,
  `freight_payable_at` text COLLATE utf8mb4_unicode_ci,
  `number_of_original_bl` text COLLATE utf8mb4_unicode_ci,
  `marks_container_seal_no` text COLLATE utf8mb4_unicode_ci,
  `number_of_packages` text COLLATE utf8mb4_unicode_ci,
  `description_of_packages_and_goods` text COLLATE utf8mb4_unicode_ci,
  `gross_weight` text COLLATE utf8mb4_unicode_ci,
  `measurement` text COLLATE utf8mb4_unicode_ci,
  `shipped_on_board_the_vessel` text COLLATE utf8mb4_unicode_ci,
  `on_board_date` date DEFAULT NULL,
  `freight_and_charges` text COLLATE utf8mb4_unicode_ci,
  `prepaid` text COLLATE utf8mb4_unicode_ci,
  `collect` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bls`
--

INSERT INTO `bls` (`id`, `bl_number`, `shipper`, `consignee`, `notify_party`, `place_of_receipt`, `port_of_loading`, `date_of_issue`, `for_delivery_apply_to`, `ocean_vessel`, `voyage_no`, `port_of_discharge`, `place_of_delivery`, `final_destination`, `freight_payable_at`, `number_of_original_bl`, `marks_container_seal_no`, `number_of_packages`, `description_of_packages_and_goods`, `gross_weight`, `measurement`, `shipped_on_board_the_vessel`, `on_board_date`, `freight_and_charges`, `prepaid`, `collect`, `created_at`, `updated_at`) VALUES
(3, 'ALV-SE25011001', NULL, NULL, NULL, NULL, NULL, '2025-01-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-01', NULL, NULL, NULL, '2025-01-01 00:43:26', '2025-01-01 00:43:26'),
(4, 'ALV-SE25011002', NULL, NULL, NULL, NULL, NULL, '2025-01-02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-02', NULL, NULL, NULL, '2025-01-01 00:46:43', '2025-01-01 00:46:43');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
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
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_07_13_105553_create_bls_table', 1),
(5, '2024_08_27_052110_create_orders_table', 1),
(6, '2024_10_05_104811_create_airbls_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shipper` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `consignee` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `carrier` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `notify_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `vessel_details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `voyage` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `receiving_unit` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_of_service` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_order_number` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `place_of_receipt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `port_of_loading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `port_of_discharge` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `final_pd` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_order_date` date NOT NULL,
  `marks_and_no` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `general_description_of_goods` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gross_weight` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `measurement` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `comments` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@example.com', '2024-12-31 06:40:33', '$2y$12$2JR8/2.PrlYOdPa4t47baO/hu61/hVcGAGwGJrBP4E2m4ba2NbCtW', 'SuperAdmin', 1, 'NTawmYDY0T0jBXf7A9k8PDXfsnYyM8dD4ZQLXef3sF5h3LxKYIKDISIt58zw', '2024-12-31 06:40:35', '2024-12-31 06:40:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airbls`
--
ALTER TABLE `airbls`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `airbls`
--
ALTER TABLE `airbls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bls`
--
ALTER TABLE `bls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
