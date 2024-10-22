-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2024 at 12:16 PM
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
-- Table structure for table `airbls`
--

CREATE TABLE `airbls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shipper_name_and_address` text DEFAULT NULL,
  `shipper_account_number` text DEFAULT NULL,
  `consignee_name_and_address` text DEFAULT NULL,
  `consignee_account_number` text DEFAULT NULL,
  `issuing_carrier_agent_name_and_city` text DEFAULT NULL,
  `accounting_information` text DEFAULT NULL,
  `agent_iata_code` text DEFAULT NULL,
  `account_number` text DEFAULT NULL,
  `airport_of_departure` text DEFAULT NULL,
  `reference_number` text DEFAULT NULL,
  `to_a` text DEFAULT NULL,
  `by_first_carrier` text DEFAULT NULL,
  `to_b` text DEFAULT NULL,
  `by_a` text DEFAULT NULL,
  `to_c` text DEFAULT NULL,
  `by_b` text DEFAULT NULL,
  `currency` text DEFAULT NULL,
  `chgs_code` text DEFAULT NULL,
  `declared_value_for_carriage` text DEFAULT NULL,
  `declared_value_for_customs` text DEFAULT NULL,
  `ppd_v` text DEFAULT NULL,
  `coll_v` text DEFAULT NULL,
  `ppd_o` text DEFAULT NULL,
  `coll_o` text DEFAULT NULL,
  `airport_of_destination` text DEFAULT NULL,
  `ammount_of_insurance` text DEFAULT NULL,
  `flight_no` text DEFAULT NULL,
  `flight_date` text DEFAULT NULL,
  `no_of_pieces_rcp` text DEFAULT NULL,
  `gross_weight` text DEFAULT NULL,
  `kg_lb` text DEFAULT NULL,
  `rate_class` text DEFAULT NULL,
  `commodity_item_no` text DEFAULT NULL,
  `chargeable_weight` text DEFAULT NULL,
  `rate_charge` text DEFAULT NULL,
  `total` text DEFAULT NULL,
  `nature_and_quantity_of_goods` text DEFAULT NULL,
  `prepaid` text DEFAULT NULL,
  `collect` text DEFAULT NULL,
  `valuation_charge_a` text DEFAULT NULL,
  `valuation_charge_b` text DEFAULT NULL,
  `tax_a` text DEFAULT NULL,
  `tax_b` text DEFAULT NULL,
  `total_other_charges_due_agent_a` text DEFAULT NULL,
  `total_other_charges_due_agent_b` text DEFAULT NULL,
  `total_other_charges_due_carrier_a` text DEFAULT NULL,
  `total_other_charges_due_carrier_b` text DEFAULT NULL,
  `total_prepaid` text DEFAULT NULL,
  `total_collect` text DEFAULT NULL,
  `currency_conversion_rates` text DEFAULT NULL,
  `cc_charges_in_dest_currency` text DEFAULT NULL,
  `charges_at_destination` text DEFAULT NULL,
  `total_collect_charges` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airbls`
--
ALTER TABLE `airbls`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `airbls`
--
ALTER TABLE `airbls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
