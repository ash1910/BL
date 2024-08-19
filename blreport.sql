-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2024 at 02:03 PM
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
-- Table structure for table `infos`
--

CREATE TABLE `infos` (
  `id` int(11) NOT NULL,
  `bl_number` varchar(50) DEFAULT NULL,
  `shipper` text DEFAULT NULL,
  `consignee` text DEFAULT NULL,
  `notify_party` text DEFAULT NULL,
  `place_of_receipt` text DEFAULT NULL,
  `port_of_loading` text DEFAULT NULL,
  `date_of_issue` date DEFAULT NULL,
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
  `gross_weight` float DEFAULT NULL,
  `measurement` float DEFAULT NULL,
  `shipped_on_board_the_vessel` text DEFAULT NULL,
  `on_board_date` date DEFAULT NULL,
  `freight_and_charges` text DEFAULT NULL,
  `prepaid` text DEFAULT NULL,
  `collect` text DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `infos`
--

INSERT INTO `infos` (`id`, `bl_number`, `shipper`, `consignee`, `notify_party`, `place_of_receipt`, `port_of_loading`, `date_of_issue`, `for_delivery_apply_to`, `ocean_vessel`, `voyage_no`, `port_of_discharge`, `place_of_delivery`, `final_destination`, `freight_payable_at`, `number_of_original_bl`, `marks_container_seal_no`, `number_of_packages`, `description_of_packages_and_goods`, `gross_weight`, `measurement`, `shipped_on_board_the_vessel`, `on_board_date`, `freight_and_charges`, `prepaid`, `collect`, `updated_at`, `created_at`) VALUES
(6, 'TEST', 'TEST', '0000-00-00', 'test', 'TEST', 'TEST', '2024-07-08', 'TEST111', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', '<p>TEST</p>', '<p>TEST</p>', '<p>TEST</p>', 1.1, 1.1, 'TEST', '2024-08-17', 'TEST', 'TEST', 'TEST', '2024-08-17 10:32:14', '2024-07-14 09:13:45'),
(7, 'B/L NUMBER', 'SHIPPER', 'CONSIGNEE', 'NOTIFY PARTY', 'PLACE OF RECEIPT', 'PORT LOADING', '2024-07-01', 'FOR DELIVERY OF GOODS PLEASE APPLY TO', 'OCEAN VESSEL', 'VOYAGE NO', 'PORT OF DISCHARGE', 'PLACE OF DELIVERY', 'FINAL DESTINATION', 'FREIGHT PAYABLE AT', 'TEST', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">MARKS &amp; NUMBER</span><br><span style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">CONTAINER &amp; SEAL NUMBERS</span></p>', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">NO. OF</span><br><span style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">PACKAGES</span></p>', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">DESCRIPTION OF PACKAGES AND GOODS</span><br><span style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">PARTICULARS FURNISHED BY SHIPPER</span></p>', 1, 2, 'SHIPPED ON BOARD THE VESSEL', '2024-08-17', 'FREIGHT AND CHARGES', 'PREPAID', 'COLLECT', '2024-08-17 06:28:52', '2024-07-14 09:18:25'),
(8, 'TEST_DATA', 'TEST_DATA', '0000-00-00', 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', '2024-07-02', 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', NULL, NULL, 'TEST_DATA', 'TEST_DATA', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-14 09:22:30', '2024-07-14 09:22:30'),
(26, 'B/L NUMBER', 'SHIPPER', '0000-00-00', 'NOTIFY PARTY', 'PLACE OF RECEIPT', 'PORT LOADING', '2024-07-03', 'FOR DELIVERY OF GOODS PLEASE APPLY TO:', 'OCEAN VESSEL', 'VOYAGE NO.', 'PORT OF DISCHARGE', NULL, 'FINAL DESTINATION', 'FREIGHT PAYABLE AT', 'NUMBER OF ORIGINAL B/L', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-15 09:37:49', '2024-07-15 09:37:49'),
(43, 'TEST_DATA', 'TEST_DATA', '0000-00-00', 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', '2024-07-27', 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', NULL, 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', '<p>TEST_DATA</p>', 1.23, 1.23, NULL, '2024-07-27', NULL, NULL, NULL, '2024-07-27 07:41:43', '2024-07-27 07:41:43'),
(45, 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', '2024-07-27', 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', NULL, 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', NULL, 12.34, 12.34, NULL, '2024-07-27', NULL, NULL, NULL, '2024-07-27 09:12:31', '2024-07-27 09:12:31'),
(49, 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', '2024-07-27', 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', NULL, 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', '<p>TEST_DATA TEST_DATA TEST_DATA TEST_DATA&nbsp;</p><p>TEST_DATA TEST_DATA TEST_DATA TEST_DATA&nbsp;</p><p>TEST_DATA TEST_DATA TEST_DATA TEST_DATA&nbsp;</p><p><span class=\"text-big\">TEST_DATA TEST_DATA &nbsp;TEST_SPACI-</span></p><p><span class=\"text-big\">NG</span></p>', 12.34, 12.34, NULL, '2024-07-27', NULL, NULL, NULL, '2024-07-27 09:43:34', '2024-07-27 09:43:34'),
(89, 'TEST DATA TEST DATA', 'TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA', 'TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA', 'TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA', 'TEST DATA TEST DATA', 'TEST DATA TEST DATA', '2024-07-31', 'TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA', 'TEST DATA TEST DATA', 'TEST DATA TEST DATA', 'TEST DATA TEST DATA', NULL, 'TEST DATA TEST DATA', 'TEST DATA TEST DATA', 'TEST DATA TEST DATA', '<p>TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA&nbsp;</p>', '<p>TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATDATA TEST DATA TEST DATA&nbsp;</p>', '<p>TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA&nbsp;</p>', 12.34, 56.78, NULL, '2024-07-31', NULL, NULL, NULL, '2024-07-31 07:58:08', '2024-07-31 07:58:08'),
(90, 'GTSSHJ16522', 'FOCUS APPARELS BD LTD 		\r\n DIDAR MANSION, MOLLA PARA 		\r\n NORTH HALISHAHAR, CHITTAGONG, BD', 'UNTO THE ORDER OF;\r\nISLAMI BANK BD PLC			\r\nAGRABAD CORPORATE BRANCH			\r\n3 CDA SK.MUJIB ROAD, AGRABAD, CTG', 'JENOUB UROPA READYMADE GAR . TR LLC		\r\nShed No-15,Industrial area-13, Sharjah,Near Ramez Hypermarket, 		\r\nNational paints,P.O BOX-30540,Sharjah,United Arab Emirates(UAE)\r\nContact No: +971504995940\r\nEmail # jenoub@emirates.net.ae', 'CHITTAGONG, BD.', 'CHITTAGONG, BD', '2024-05-24', 'UNICON LOGISTICS SERVICES LLC\r\n907, 9TH FLOOR, THE PRISM TOWER, \r\nBUSINESS BAY, DUBAI - UAE\r\nUAE PO BOX:416190\r\nWCA ID: 66505\r\nPhone: +97144534680', 'HR FARHA', 'MHRF0069S', 'SHARJAH,UAE', NULL, 'SHARJAH,UAE', 'DESTINATION', '03(THREE)', '<p><span class=\"text-big\">MAIN MARKS&nbsp;&nbsp;&nbsp;&nbsp;</span><br><span class=\"text-big\">&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;</span><br><span class=\"text-big\">STYLE NO&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;</span><br><span class=\"text-big\">&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;</span><br><span class=\"text-big\">SIDE MARKS&nbsp;&nbsp;&nbsp;&nbsp;</span><br><span class=\"text-big\">SIZE/COLOR&nbsp;&nbsp;&nbsp;&nbsp;</span><br><span class=\"text-big\">TOTAL PCS&nbsp;&nbsp;&nbsp;&nbsp;</span><br><span class=\"text-big\">GROSS WEIGHT: KGS&nbsp;&nbsp;&nbsp;&nbsp;</span><br><span class=\"text-big\">NET WEIGHT: KGS&nbsp;&nbsp;&nbsp;&nbsp;</span><br><span class=\"text-big\">CARTON MEASUREMENT: CM&nbsp;&nbsp;&nbsp;&nbsp;</span><br>&nbsp;</p>', '<p><span class=\"text-big\">620</span><br><span class=\"text-big\">CTNS&nbsp;</span></p>', '<p><span class=\"text-huge\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; SAID TO CONTAIN</span></p><p><span class=\"text-big\">620 CARTONS OF READYMADE GARMENTS&nbsp;</span><br><span class=\"text-big\">MENS T-SHIRT</span><br><span class=\"text-big\">HS CODE: 6109.90.00</span></p><p><span class=\"text-big\">INVOICE NO.FOCUS-41/2024 &nbsp; &nbsp;&nbsp;</span><br><span class=\"text-big\">DATE: 21.05.2024 &nbsp;</span><br><span class=\"text-big\">EXPORT LC NO &nbsp;: 004DTA220205 &nbsp; &nbsp;&nbsp;</span><br><span class=\"text-big\">DATE:31.10.2022 &nbsp;</span><br><span class=\"text-big\">EXP NO #.000235-2024 &nbsp;&nbsp;</span><br><span class=\"text-big\">DATE: 21.05.2024</span></p><p><span class=\"text-big\">ALSO NOTIFY PARTY:</span><br><span class=\"text-big\">STARGATE APPAREL DBA UNLIMITED APPAREL INC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><br><span class=\"text-big\">19 WEST 34TH STREET 11TH FLOOR, NEW YORK&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><br><span class=\"text-big\">NY 10001, USA&nbsp;&nbsp;&nbsp;</span></p><p>&nbsp;</p><p><span class=\"text-big\"><strong>CRXU9924826/40\'HC/ S. NO.:SGT8689037 &nbsp;/ MODE : CY/CY</strong></span></p>', 19870, 68, NULL, '2024-05-24', NULL, NULL, NULL, '2024-07-31 09:26:39', '2024-07-31 09:26:39'),
(91, 'GTSSHJ16522', 'UNTO THE ORDER OF; ISLAMI BANK BD PLC AGRABAD CORPORATE BRANCH 3 CDA SK.MUJIB ROAD, AGRABAD, CTG', 'UNTO THE ORDER OF; ISLAMI BANK BD PLC AGRABAD CORPORATE BRANCH 3 CDA SK.MUJIB ROAD, AGRABAD, CTG', 'JENOUB UROPA READYMADE GAR . TR LLC Shed No-15,Industrial area-13, Sharjah,Near Ramez Hypermarket, National paints,P.O BOX-30540,Sharjah,United Arab Emirates(UAE) Contact No: +971504995940 Email # jenoub@emirates.net.ae', 'CHITTAGONG, BD', 'CHITTAGONG, BD', '2024-05-24', 'UNICON LOGISTICS SERVICES LLC 907, 9TH FLOOR, THE PRISM TOWER, BUSINESS BAY, DUBAI - UAE UAE PO BOX:416190 WCA ID: 66505 Phone: +97144534680', 'HR FARHA', 'MHRF0069S', 'SHARJAH,UAE', NULL, 'SHARJAH,UAE', 'DESTINATION', '03 (THREE)', '<p><span class=\"text-big\" style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">MAIN MARKS&nbsp;&nbsp;&nbsp;&nbsp;</span><br><span class=\"text-big\" style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;</span><br><span class=\"text-big\" style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">STYLE NO&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;</span><br><span class=\"text-big\" style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;</span><br><span class=\"text-big\" style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">SIDE MARKS&nbsp;&nbsp;&nbsp;&nbsp;</span><br><span class=\"text-big\" style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">SIZE/COLOR&nbsp;&nbsp;&nbsp;&nbsp;</span><br><span class=\"text-big\" style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">TOTAL PCS&nbsp;&nbsp;&nbsp;&nbsp;</span><br><span class=\"text-big\" style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">GROSS WEIGHT: KGS&nbsp;&nbsp;&nbsp;&nbsp;</span><br><span class=\"text-big\" style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">NET WEIGHT: KGS&nbsp;&nbsp;&nbsp;&nbsp;</span><br><span class=\"text-big\" style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">CARTON MEASUREMENT: CM&nbsp;&nbsp;&nbsp;</span></p>', '<p><span class=\"text-big\" style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">620</span><br><span class=\"text-big\" style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">CTNS&nbsp;</span></p>', '<p><span class=\"text-huge\">SAID TO CONTAIN</span></p><p><span class=\"text-big\">620 CARTONS OF READYMADE GARMENTS&nbsp;</span><br><span class=\"text-big\">MENS T-SHIRT</span><br><span class=\"text-big\">HS CODE: 6109.90.00</span></p><p><span class=\"text-big\">INVOICE NO.FOCUS-41/2024 &nbsp; &nbsp;&nbsp;</span><br><span class=\"text-big\">DATE: 21.05.2024 &nbsp;</span><br><span class=\"text-big\">EXPORT LC NO &nbsp;: 004DTA220205 &nbsp; &nbsp;&nbsp;</span><br><span class=\"text-big\">DATE:31.10.2022 &nbsp;</span><br><span class=\"text-big\">EXP NO #.000235-2024 &nbsp;&nbsp;</span><br><span class=\"text-big\">DATE: 21.05.2024</span></p><p><span class=\"text-big\">ALSO NOTIFY PARTY:</span><br><span class=\"text-big\">STARGATE APPAREL DBA UNLIMITED APPAREL INC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><br><span class=\"text-big\">19 WEST 34TH STREET 11TH FLOOR, NEW YORK&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><br><span class=\"text-big\">NY 10001, USA&nbsp;&nbsp;</span></p><p><span class=\"text-big\"><strong>CRXU9924826/40\'HC/ S. NO.:SGT8689037 &nbsp;/ MODE : CY/CY</strong></span></p>', 19870, 68, NULL, '2024-05-24', NULL, NULL, NULL, '2024-07-31 09:35:11', '2024-07-31 09:35:11'),
(92, 'GTSSHJ16522', 'FOCUS APPARELS BD LTD DIDAR MANSION, MOLLA PARA\r\nNORTH HALISHAHAR, CHITTAGONG, BD', 'UNTO THE ORDER OF; ISLAMI BANK BD PLC AGRABAD\r\nCORPORATE BRANCH 3 CDA SK.MUJIB ROAD,\r\nAGRABAD, CTG', 'JENOUB UROPA READYMADE GAR . TR LLC Shed No\r\n15,Industrial area-13, Sharjah,Near Ramez\r\nHypermarket, National paints,P.O BOX\r\n30540,Sharjah,United Arab Emirates(UAE)\r\nContact No: +971504995940 Email # jenoub@emirates.net.ae', 'CHITTAGONG, BD', 'CHITTAGONG, BD', '2024-05-24', 'UNICON LOGISTICS SERVICES LLC 907, 9TH FLOOR, THE PRISM TOWER,\r\nBUSINESS BAY, DUBAI - UAE UAE PO BOX:416190\r\nWCA ID: 66505 Phone: +97144534680', 'HR FARHA', 'MHRF0069S', 'SHARJAH,UAE', NULL, 'SHARJAH,UAE', 'DESTINATION', '03 (THREE)', '<p><span class=\"text-big\" style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">MAIN MARKS&nbsp;&nbsp;&nbsp;&nbsp;</span><br><span class=\"text-big\" style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;</span><br><span class=\"text-big\" style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">STYLE NO&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;</span><br><span class=\"text-big\" style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;</span><br><span class=\"text-big\" style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">SIDE MARKS&nbsp;&nbsp;&nbsp;&nbsp;</span><br><span class=\"text-big\" style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">SIZE/COLOR&nbsp;&nbsp;&nbsp;&nbsp;</span><br><span class=\"text-big\" style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">TOTAL PCS&nbsp;&nbsp;&nbsp;&nbsp;</span><br><span class=\"text-big\" style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">GROSS WEIGHT: KGS&nbsp;&nbsp;&nbsp;&nbsp;</span><br><span class=\"text-big\" style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">NET WEIGHT: KGS&nbsp;&nbsp;&nbsp;&nbsp;</span><br><span class=\"text-big\" style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">CARTON MEASUREMENT: CM&nbsp;</span></p>', '<p><span class=\"text-big\" style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">620</span><br><span class=\"text-big\" style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">CTNS&nbsp;</span></p>', '<p><span class=\"text-huge\">SAID TO CONTAIN</span></p><p><span class=\"text-big\">620 CARTONS OF READYMADE GARMENTS&nbsp;</span><br><span class=\"text-big\">MENS T-SHIRT</span><br><span class=\"text-big\">HS CODE: 6109.90.00</span></p><p><span class=\"text-big\">INVOICE NO.FOCUS-41/2024 &nbsp; &nbsp;&nbsp;</span><br><span class=\"text-big\">DATE: 21.05.2024 &nbsp;</span><br><span class=\"text-big\">EXPORT LC NO &nbsp;: 004DTA220205 &nbsp; &nbsp;&nbsp;</span><br><span class=\"text-big\">DATE:31.10.2022 &nbsp;</span><br><span class=\"text-big\">EXP NO #.000235-2024 &nbsp;&nbsp;</span><br><span class=\"text-big\">DATE: 21.05.2024</span></p><p><span class=\"text-big\">ALSO NOTIFY PARTY:</span><br><span class=\"text-big\">STARGATE APPAREL DBA UNLIMITED APPAREL INC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><br><span class=\"text-big\">19 WEST 34TH STREET 11TH FLOOR, NEW YORK&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><br><span class=\"text-big\">NY 10001, USA&nbsp;&nbsp;</span></p><p><span class=\"text-big\"><strong>CRXU9924826/40\'HC/ S. NO.:SGT8689037 &nbsp;/ MODE : CY/CY</strong></span></p>', 19870, 68, NULL, '2024-05-24', NULL, NULL, NULL, '2024-07-31 09:44:14', '2024-07-31 09:44:14'),
(94, 'BL 12/08/2024', 'sd', 'asd', 'asdasd', 'jhj', 'hj', '2024-08-07', 'sda', 'hj', 'hj', 'sd', NULL, 'asd', 'sad', 'asd', '<p>hjh</p>', '<p>jhj</p>', '<p>hjhj</p>', 1, 1, NULL, '2024-09-04', NULL, NULL, NULL, '2024-08-12 11:08:57', '2024-08-12 11:08:57'),
(95, 'test', 'test', 'test', 'test', 'test', 'test', '2024-08-29', 'test', 'test', 'test', 'test', NULL, 'test', 'test', 'test', '<p>test</p>', '<p>test</p>', '<p>test</p>', 4, 4, NULL, '2024-08-21', NULL, NULL, NULL, '2024-08-13 06:50:10', '2024-08-13 06:50:10'),
(96, 'GTSSHJ16522', 'FOCUS APPARELS BD LTD DIDAR MANSION, MOLLA PARA NORTH HALISHAHAR, CHITTAGONG, BD', 'UNTO THE ORDER OF; ISLAMI BANK BD PLC AGRABAD CORPORATE BRANCH 3 CDA SK.MUJIB ROAD, AGRABAD, CTG', 'JENOUB UROPA READYMADE GAR . TR LLC Shed No 15,Industrial area-13, Sharjah,Near Ramez Hypermarket, National paints,P.O BOX 30540,Sharjah,United Arab Emirates(UAE) Contact No: +971504995940 Email # jenoub@emirates.net.ae', 'CHITTAGONG, BD', 'CHITTAGONG, BD', '2024-05-24', 'UNICON LOGISTICS SERVICES LLC 907, 9TH FLOOR, THE PRISM TOWER, BUSINESS BAY, DUBAI - UAE UAE PO BOX:416190 WCA ID: 66505 Phone: +97144534680', 'HR FARHA', 'MHRF0069S', 'SHARJAH,UAE', 'SHARJAH,UAE', 'SHARJAH,UAE', 'DESTINATION', '03 (THREE)', '<p><span class=\"text-big\" style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">MAIN MARKS&nbsp;:&nbsp;</span><br><span class=\"text-big\" style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">STYLE NO&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;</span><br><br><span class=\"text-big\" style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">SIDE MARKS&nbsp;&nbsp;&nbsp;&nbsp;</span><br><span class=\"text-big\" style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">SIZE/COLOR&nbsp;&nbsp;&nbsp;&nbsp;</span><br><span class=\"text-big\" style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">TOTAL PCS&nbsp;&nbsp;&nbsp;&nbsp;</span><br><span class=\"text-big\" style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">GROSS WEIGHT: KGS&nbsp;&nbsp;&nbsp;&nbsp;</span><br><span class=\"text-big\" style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">NET WEIGHT: KGS&nbsp;&nbsp;&nbsp;&nbsp;</span><br><span class=\"text-big\" style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">CARTON MEASUREMENT: CM</span></p>', '<p><span class=\"text-big\" style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">620</span><br><span class=\"text-big\" style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">CTNS&nbsp;</span></p>', '<p><span class=\"text-huge\">SAID TO CONTAIN</span></p><p><span class=\"text-big\">620 CARTONS OF READYMADE GARMENTS&nbsp;</span><br><span class=\"text-big\">MENS T-SHIRT</span><br><span class=\"text-big\">HS CODE: 6109.90.00</span></p><p><span class=\"text-big\">INVOICE NO.FOCUS-41/2024 &nbsp; &nbsp;&nbsp;</span><br><span class=\"text-big\">DATE: 21.05.2024 &nbsp;</span><br><span class=\"text-big\">EXPORT LC NO &nbsp;: 004DTA220205 &nbsp; &nbsp;&nbsp;</span><br><span class=\"text-big\">DATE:31.10.2022 &nbsp;</span><br><span class=\"text-big\">EXP NO #.000235-2024 &nbsp;&nbsp;</span><br><span class=\"text-big\">DATE: 21.05.2024</span></p><p><span class=\"text-big\">ALSO NOTIFY PARTY:</span><br><span class=\"text-big\">STARGATE APPAREL DBA UNLIMITED APPAREL INC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><br><span class=\"text-big\">19 WEST 34TH STREET 11TH FLOOR, NEW YORK&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><br><span class=\"text-big\">NY 10001, USA&nbsp;&nbsp;</span></p><p><span class=\"text-big\"><strong>CRXU9924826/40\'HC/ S. NO.:SGT8689037 &nbsp;/ MODE : CY/CY</strong></span></p>', 19870, 68, 'TEST', '2024-05-24', 'TEST', 'TEST', 'TEST', '2024-08-17 08:06:46', '2024-08-15 11:30:53');

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
(3, '0001_01_01_000002_create_jobs_table', 1);

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
('wf8Xg62S5CUxShFaJR4OEChLI79OU0CsExpMDCab', 19, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il9mbGFzaCI7YToyOntzOjM6Im5ldyI7YTowOnt9czozOiJvbGQiO2E6MTp7aTowO3M6Nzoic3VjY2VzcyI7fX1zOjY6Il90b2tlbiI7czo0MDoiV3hrSEUxUHB2VDNQYjBCR3p4OUdxdnRDZEJKUWZxOTM2cHF6d1dSeCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9wcm9maWxlIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTk7czo3OiJzdWNjZXNzIjtzOjI5OiJQcm9maWxlIFVwZGF0ZWQgU3VjY2Vzc2Z1bGx5LiI7fQ==', 1724068955);

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
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'TEST', 'TEST@TEST.COM', NULL, '$2y$12$uA46MssAAfQSrnDt87luUO7.5nFYXFK.nc.RyzRevBIkNPyijKLVS', 1, NULL, '2024-08-08 02:26:35', '2024-08-19 02:43:02'),
(2, 'TEST', 'TEST1@TEST.COM', NULL, '$2y$12$mAidWoom9CaeJ/N8W2WHI.6GCK6zckCgpv9yonsIB31W7ZYpJbAxG', NULL, NULL, '2024-08-08 02:29:21', '2024-08-08 02:29:21'),
(3, 'TEST', 'TEST2@TEST.COM', NULL, '$2y$12$40IKi3i5tkB1htEsaIwmpOzpi1ltRHnE1yTahAXJiekioiFZj2PQG', NULL, NULL, '2024-08-08 02:30:37', '2024-08-08 02:30:37'),
(4, 'TEST', 'TEST5@TEST.COM', NULL, '$2y$12$bdWzHfMXru4sB5jBIL6q8ec6R0xaTSdxCSSRDRPJGpk1uwkj1AR5i', NULL, NULL, '2024-08-08 02:38:14', '2024-08-08 02:38:14'),
(5, 'TEST', 'TEST6@TEST.COM', NULL, '$2y$12$6zojQIuhtstlzMqvo0qPeO8p3t165dKgRhyCGGwjQBX.b8IQis/ci', NULL, NULL, '2024-08-08 02:39:46', '2024-08-08 02:39:46'),
(6, 'TEST', 'TEST7@TEST.COM', NULL, '$2y$12$Fc6q0wX.u8rk0j.fyl8ZmedFCW/S078Rg4U.NPjWl0B6OI/uRkNNK', NULL, NULL, '2024-08-08 02:45:50', '2024-08-08 02:45:50'),
(7, 'TEST', 'TEST9@TEST.COM', NULL, '$2y$12$n2Wn6L/Zog93jNHHn6l2Qe/QePPRZKvW7kkU64H1R9QRtkEjqHMBe', NULL, NULL, '2024-08-08 02:50:26', '2024-08-08 02:50:26'),
(8, 'TEST', 'TEST10@TEST.COM', NULL, '$2y$12$umCvOg7kTxyMCh0UdD5pDOPe0HmC8NcmAPiNg1cPZKY3lJN874ZZK', NULL, NULL, '2024-08-08 02:51:11', '2024-08-08 02:51:11'),
(9, 'TEST', 'TEST11@TEST.COM', NULL, '$2y$12$pAnL7cMDU9VCQ3FVovMkYOiw8BEEBNaCtZPPgEHuh6ZloAgDuajvO', NULL, NULL, '2024-08-08 02:52:44', '2024-08-08 02:52:44'),
(10, 'TEST', 'TEST12@TEST.COM', NULL, '$2y$12$JiB3Euimf1mt8p4/KZqw6uESNJUJkMWISohhJw0KM1Y2ZXwcYfY3i', NULL, NULL, '2024-08-10 00:27:51', '2024-08-10 00:27:51'),
(11, 'TEST', 'TEST13@TEST.COM', NULL, '$2y$12$Z5Qe95omQGYzI2FjN9mpju7vnoUDc3OOEOKOA2b0W3hrtChqWn53a', NULL, NULL, '2024-08-10 00:48:12', '2024-08-10 00:48:12'),
(12, 'TEST', 'TEST14@TEST.COM', NULL, '$2y$12$fTV/b5uupYr5P0iT6eWOx.IyH/4fmwuprQ1VXqsj90jQ4tfnGCcs.', NULL, NULL, '2024-08-10 00:57:31', '2024-08-10 00:57:31'),
(13, 'TEST', 'TEST15@TEST.COM', NULL, '$2y$12$M2g1fRzDUlUQltuMnb.hsOFf3Wsr7fr46ts9dxLKmXAQhOmjrLlaq', NULL, NULL, '2024-08-10 01:20:54', '2024-08-10 01:20:54'),
(14, 'TEST', 'TEST17@TEST.COM', NULL, '$2y$12$h6U7CijvgP9qVusfrw0o9e.xIEQxVwnjgjMpFHtvI0Kh.Db.MAraa', NULL, NULL, '2024-08-10 02:09:08', '2024-08-10 02:09:08'),
(15, 'TEST', 'TEST16@TEST.COM', NULL, '$2y$12$P3e0JHztQw2ocpIq.qNfJuVx5ZMyRCwZwpmJ0A1diQWnZNVM3xKtC', NULL, NULL, '2024-08-10 02:17:08', '2024-08-10 02:17:08'),
(16, 'TEST', 'TEST18@TEST.COM', NULL, '$2y$12$vgzxQm3GEsrR/2aMTn7euuoCXN7C30WbuBW4s91doinqREquOSNJq', NULL, NULL, '2024-08-10 02:27:56', '2024-08-10 02:27:56'),
(17, 'TEST', 'TEST19@TEST.COM', NULL, '$2y$12$NvjbpU.RxuZXrC4Fwown7OWk5urDO.2N8jDzSIFA0tZoXT6htzlbO', NULL, NULL, '2024-08-10 02:38:10', '2024-08-10 02:38:10'),
(18, 'TEST', 'TEST20@TEST.COM', NULL, '$2y$12$q3YMTfL5xZXVzwQdF0xCROCTUc2z2rgASepl9YK5n6.urmWqJrMK.', NULL, NULL, '2024-08-10 02:39:22', '2024-08-10 02:39:22'),
(19, 'Joe Rogan', 'joe@gmail.com', NULL, '$2y$12$9hZGBaJ0zCZmIA6rTiHuYeGIOirfxDF9ncQM1USKbJUWMTaKSUwxy', NULL, NULL, '2024-08-14 01:16:16', '2024-08-14 01:16:16'),
(20, 'Roger Demi', 'roger@gmail.com', NULL, '$2y$12$mZC7sWo5XMmsiqj/wAutnejXoqHWAfjc4Q88Bb4q57Uvkkb84bPWa', NULL, NULL, '2024-08-18 02:47:57', '2024-08-18 02:47:57'),
(21, 'Robert Haiman', 'robert@gmail.com', NULL, '$2y$12$/ao3XW3BlcmRzxRht9bC/.vEklDWDH11mn8c2YheoVa5OhGgz6Qv.', NULL, NULL, '2024-08-18 03:23:16', '2024-08-18 03:23:16'),
(22, 'TEST', 'TEST21@TEST.COM', NULL, '$2y$12$MAKEl786DMgW4y4o31T9euZtpz3DgGTkhOTndiLzBAGBfHg0FT1CG', NULL, NULL, '2024-08-18 03:25:34', '2024-08-18 03:25:34'),
(23, 'TEST', 'TEST22@TEST.COM', NULL, '$2y$12$vSH3m3x9wEjk8Gli4sB.Ie4W8C0hWQxVMt8I8jN4H7hCDURvzxpqm', 1, NULL, '2024-08-18 03:27:28', '2024-08-18 03:27:28'),
(24, 'TEST', 'TEST23@TEST.COM', NULL, '$2y$12$EUSzhLcNN3.N.Qp/uWh9ie7EwzYaZDapdmOAtlGff.5EogdBV5b3a', 0, NULL, '2024-08-18 03:28:57', '2024-08-18 03:28:57'),
(25, 'TEST', 'TEST24@TEST.COM', NULL, '$2y$12$NqDeihC3.YrzU1BXp9rvFOzS7BHN1EctYJyZC8Ms4w30YhtL76Z6y', 1, NULL, '2024-08-18 03:56:30', '2024-08-18 03:56:30'),
(26, 'TEST', 'TEST25@TEST.COM', NULL, '$2y$12$6Xb/Bm9BkNzgm7IgVeo4/u5FBF2Avqg1AVSWeHQbmIGJ5eal5OEiO', 1, NULL, '2024-08-18 05:35:59', '2024-08-18 05:35:59'),
(27, 'TEST', 'TEST128@TEST.COM', NULL, '$2y$12$hfFqI5I2nXsLLVeOoG.LqenMp.LPierQobU85YKIH6klqPEDW2WDi', 1, NULL, '2024-08-18 05:40:31', '2024-08-18 05:40:31'),
(28, 'TEST', 'TEST29@TEST.COM', NULL, '$2y$12$qkTc7/vXbhq56KAd2HxdEecGhCTlSU2rBGKKRJaMfOhSIIglrFQK.', 1, NULL, '2024-08-19 00:40:04', '2024-08-19 00:40:04'),
(29, 'TEST', 'TEST30@TEST.COM', NULL, '$2y$12$MGFMcixAqi2qduP05MXMeeT5GA6BtAo65dAz1FF3BTJh7l0Ezx.aS', 1, NULL, '2024-08-19 00:41:51', '2024-08-19 00:41:51');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `infos`
--
ALTER TABLE `infos`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `infos`
--
ALTER TABLE `infos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
