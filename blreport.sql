-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2024 at 07:43 AM
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
  `final_destination` text DEFAULT NULL,
  `freight_payable_at` text DEFAULT NULL,
  `number_of_original_bl` text DEFAULT NULL,
  `marks_container_seal_no` text DEFAULT NULL,
  `number_of_packages` text DEFAULT NULL,
  `description_of_packages_and_goods` text DEFAULT NULL,
  `gross_weight` float DEFAULT NULL,
  `measurement` float DEFAULT NULL,
  `on_board_date` date DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `infos`
--

INSERT INTO `infos` (`id`, `bl_number`, `shipper`, `consignee`, `notify_party`, `place_of_receipt`, `port_of_loading`, `date_of_issue`, `for_delivery_apply_to`, `ocean_vessel`, `voyage_no`, `port_of_discharge`, `final_destination`, `freight_payable_at`, `number_of_original_bl`, `marks_container_seal_no`, `number_of_packages`, `description_of_packages_and_goods`, `gross_weight`, `measurement`, `on_board_date`, `updated_at`, `created_at`) VALUES
(4, 'BX35285', 'dfs', '0000-00-00', NULL, 'fsdfsd', NULL, '2024-07-08', NULL, NULL, 'BX35285', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, '2024-07-14 08:57:39', '2024-07-14 08:57:39'),
(6, 'TEST', 'TEST', '0000-00-00', NULL, 'TEST', NULL, '2024-07-08', 'TEST', 'TEST', 'TEST', 'TEST', NULL, 'TEST', 'TEST', NULL, NULL, '', NULL, NULL, NULL, '2024-07-14 09:13:45', '2024-07-14 09:13:45'),
(7, 'TEST', 'TEST', '0000-00-00', NULL, 'TEST', 'TEST', '2024-07-01', 'TEST', 'TEST', 'TEST', 'TEST', NULL, 'TEST', 'TEST', NULL, NULL, '', NULL, NULL, NULL, '2024-07-14 09:18:25', '2024-07-14 09:18:25'),
(8, 'TEST_DATA', 'TEST_DATA', '0000-00-00', 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', '2024-07-02', 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', NULL, 'TEST_DATA', 'TEST_DATA', NULL, NULL, '', NULL, NULL, NULL, '2024-07-14 09:22:30', '2024-07-14 09:22:30'),
(18, 'BX35283', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'BX35283', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, '2024-07-15 07:54:04', '2024-07-15 07:54:04'),
(26, 'B/L NUMBER', 'SHIPPER', '0000-00-00', 'NOTIFY PARTY', 'PLACE OF RECEIPT', 'PORT LOADING', '2024-07-03', 'FOR DELIVERY OF GOODS PLEASE APPLY TO:', 'OCEAN VESSEL', 'VOYAGE NO.', 'PORT OF DISCHARGE', 'FINAL DESTINATION', 'FREIGHT PAYABLE AT', 'NUMBER OF ORIGINAL B/L', NULL, NULL, '', NULL, NULL, NULL, '2024-07-15 09:37:49', '2024-07-15 09:37:49'),
(43, 'TEST_DATA', 'TEST_DATA', '0000-00-00', 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', '2024-07-27', 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', '<p>TEST_DATA</p>', 1.23, 1.23, '2024-07-27', '2024-07-27 07:41:43', '2024-07-27 07:41:43'),
(45, 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', '2024-07-27', 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', NULL, 12.34, 12.34, '2024-07-27', '2024-07-27 09:12:31', '2024-07-27 09:12:31'),
(49, 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', '2024-07-27', 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', '<p>TEST_DATA TEST_DATA TEST_DATA TEST_DATA&nbsp;</p><p>TEST_DATA TEST_DATA TEST_DATA TEST_DATA&nbsp;</p><p>TEST_DATA TEST_DATA TEST_DATA TEST_DATA&nbsp;</p><p><span class=\"text-big\">TEST_DATA TEST_DATA &nbsp;TEST_SPACI-</span></p><p><span class=\"text-big\">NG</span></p>', 12.34, 12.34, '2024-07-27', '2024-07-27 09:43:34', '2024-07-27 09:43:34'),
(52, 'TEST_DATA ', 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', '2024-07-27', 'TEST_DATA ', 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', 'TEST_DATA', '<p>TEST_DATA TEST_DATA&nbsp;</p>', 'TEST_DATA', '<p>TEST_DATA TEST_DATA TEST_DATA TEST_DATA&nbsp;</p><p><span class=\"text-big\"><strong>TEST_DATA TEST_DATA TEST_DATA&nbsp;</strong></span></p><p><span class=\"text-big\"><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<u>TEST_DATA&nbsp;</u></strong></span></p>', 1.2, 3.7, '2024-07-29', '2024-07-29 04:59:44', '2024-07-29 04:59:44'),
(73, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-29 07:07:05', '2024-07-29 07:07:05'),
(74, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-29 07:52:56', '2024-07-29 07:52:56'),
(78, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p>hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh</p>', NULL, NULL, NULL, '2024-07-30 05:40:22', '2024-07-30 05:40:22'),
(79, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p><span class=\"text-big\">I take everythinfg i a way it works perfectly</span></p><p><span class=\"text-big\">So i have to be careful about it</span></p>', NULL, NULL, NULL, '2024-07-30 06:08:25', '2024-07-30 06:08:25'),
(80, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<figure class=\"table\"><table><tbody><tr><td>2</td><td>1</td><td>5</td></tr><tr><td>4</td><td>5</td><td>1</td></tr><tr><td>12</td><td>2</td><td>4</td></tr></tbody></table></figure>', NULL, NULL, NULL, '2024-07-30 06:14:59', '2024-07-30 06:14:59'),
(81, 'TEST DATA', 'TEST DATA', 'TEST DATA', 'TEST DATA', 'TEST DATA', 'TEST DATA', '2024-07-30', 'TEST DATA', 'TEST DATA', 'TEST DATA', 'TEST DATA', 'TEST DATA', 'TEST DATA', 'TEST DATA', '<p>TEST DATA</p>', '<p>TEST DATA 1</p>', '<p>TEST DATA 2</p>', 12.34, 45.78, '2024-07-30', '2024-07-30 07:51:10', '2024-07-30 07:51:10'),
(82, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-30 08:36:14', '2024-07-30 08:36:14'),
(83, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p>saddawdsd</p>', NULL, NULL, NULL, NULL, NULL, '2024-07-30 08:37:02', '2024-07-30 08:37:02'),
(84, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-31 04:55:17', '2024-07-31 04:55:17'),
(85, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p>TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA&nbsp;</p>', '<p>sdfdsfsdf</p>', '<p>sdfsdfsdf</p>', NULL, NULL, NULL, '2024-07-31 05:04:08', '2024-07-31 05:04:08'),
(86, 'TEST DATA', 'TEST DATA', 'TEST DATA', 'TEST DATA', 'TEST DATA', 'TEST DATA', '2024-07-31', 'TEST DATA', 'TEST DATA', 'TEST DATA', 'TEST DATA', 'TEST DATA', 'TEST DATA', 'TEST DATA', '<p>TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA&nbsp;</p>', '<p>TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA&nbsp;</p>', '<p>TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA&nbsp;</p>', 12.34, 56.78, '2024-07-31', '2024-07-31 05:36:00', '2024-07-31 05:36:00'),
(88, NULL, 'I have seen nothing on the raod wiht an availabe thi which is not osdb utj hnjsadfhldsf dk fadlfkh f dkfh akhfsdfa;jfsdk jklghsdljkgh lsdhfgsdhjkl ghsdhgjhsd jhgjsdhgj hsjldghjlsh ljhg ljhsdgjl hjlshg ljhsdgjl hlgds hg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p>erijhhhhhhhhhhhhhhhh hhhhhhhhhhhhhhh hhhhhhhhhhhhhhhhhhhhhh hhhhhhhhhhhhhhhhhhhhhhhh</p>', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">I have seen nothing on the raod wiht an availabe thi which is not osdb utj hnjsadfhldsf dk fadlfkh f dkfh akhfsdfa;jfsdk jklghsdljkgh lsdhfgsdhjkl ghsdhgjhsd jhgjsdhgj hsjldghjlsh ljhg ljhsdgjl hjlshg ljhsdgjl hlgds hg</span></p>', NULL, NULL, NULL, NULL, '2024-07-31 07:29:37', '2024-07-31 07:29:37'),
(89, 'TEST DATA TEST DATA', 'TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA', 'TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA', 'TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA', 'TEST DATA TEST DATA', 'TEST DATA TEST DATA', '2024-07-31', 'TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA', 'TEST DATA TEST DATA', 'TEST DATA TEST DATA', 'TEST DATA TEST DATA', 'TEST DATA TEST DATA', 'TEST DATA TEST DATA', 'TEST DATA TEST DATA', '<p>TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA&nbsp;</p>', '<p>TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATDATA TEST DATA TEST DATA&nbsp;</p>', '<p>TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA TEST DATA&nbsp;</p>', 12.34, 56.78, '2024-07-31', '2024-07-31 07:58:08', '2024-07-31 07:58:08'),
(90, 'GTSSHJ16522', 'FOCUS APPARELS BD LTD 		\r\n DIDAR MANSION, MOLLA PARA 		\r\n NORTH HALISHAHAR, CHITTAGONG, BD', 'UNTO THE ORDER OF;\r\nISLAMI BANK BD PLC			\r\nAGRABAD CORPORATE BRANCH			\r\n3 CDA SK.MUJIB ROAD, AGRABAD, CTG', 'JENOUB UROPA READYMADE GAR . TR LLC		\r\nShed No-15,Industrial area-13, Sharjah,Near Ramez Hypermarket, 		\r\nNational paints,P.O BOX-30540,Sharjah,United Arab Emirates(UAE)\r\nContact No: +971504995940\r\nEmail # jenoub@emirates.net.ae', 'CHITTAGONG, BD.', 'CHITTAGONG, BD', '2024-05-24', 'UNICON LOGISTICS SERVICES LLC\r\n907, 9TH FLOOR, THE PRISM TOWER, \r\nBUSINESS BAY, DUBAI - UAE\r\nUAE PO BOX:416190\r\nWCA ID: 66505\r\nPhone: +97144534680', 'HR FARHA', 'MHRF0069S', 'SHARJAH,UAE', 'SHARJAH,UAE', 'DESTINATION', '03(THREE)', '<p><span class=\"text-big\">MAIN MARKS&nbsp;&nbsp;&nbsp;&nbsp;</span><br><span class=\"text-big\">&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;</span><br><span class=\"text-big\">STYLE NO&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;</span><br><span class=\"text-big\">&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;</span><br><span class=\"text-big\">SIDE MARKS&nbsp;&nbsp;&nbsp;&nbsp;</span><br><span class=\"text-big\">SIZE/COLOR&nbsp;&nbsp;&nbsp;&nbsp;</span><br><span class=\"text-big\">TOTAL PCS&nbsp;&nbsp;&nbsp;&nbsp;</span><br><span class=\"text-big\">GROSS WEIGHT: KGS&nbsp;&nbsp;&nbsp;&nbsp;</span><br><span class=\"text-big\">NET WEIGHT: KGS&nbsp;&nbsp;&nbsp;&nbsp;</span><br><span class=\"text-big\">CARTON MEASUREMENT: CM&nbsp;&nbsp;&nbsp;&nbsp;</span><br>&nbsp;</p>', '<p><span class=\"text-big\">620</span><br><span class=\"text-big\">CTNS&nbsp;</span></p>', '<p><span class=\"text-huge\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; SAID TO CONTAIN</span></p><p><span class=\"text-big\">620 CARTONS OF READYMADE GARMENTS&nbsp;</span><br><span class=\"text-big\">MENS T-SHIRT</span><br><span class=\"text-big\">HS CODE: 6109.90.00</span></p><p><span class=\"text-big\">INVOICE NO.FOCUS-41/2024 &nbsp; &nbsp;&nbsp;</span><br><span class=\"text-big\">DATE: 21.05.2024 &nbsp;</span><br><span class=\"text-big\">EXPORT LC NO &nbsp;: 004DTA220205 &nbsp; &nbsp;&nbsp;</span><br><span class=\"text-big\">DATE:31.10.2022 &nbsp;</span><br><span class=\"text-big\">EXP NO #.000235-2024 &nbsp;&nbsp;</span><br><span class=\"text-big\">DATE: 21.05.2024</span></p><p><span class=\"text-big\">ALSO NOTIFY PARTY:</span><br><span class=\"text-big\">STARGATE APPAREL DBA UNLIMITED APPAREL INC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><br><span class=\"text-big\">19 WEST 34TH STREET 11TH FLOOR, NEW YORK&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><br><span class=\"text-big\">NY 10001, USA&nbsp;&nbsp;&nbsp;</span></p><p>&nbsp;</p><p><span class=\"text-big\"><strong>CRXU9924826/40\'HC/ S. NO.:SGT8689037 &nbsp;/ MODE : CY/CY</strong></span></p>', 19870, 68, '2024-05-24', '2024-07-31 09:26:39', '2024-07-31 09:26:39'),
(91, 'GTSSHJ16522', 'UNTO THE ORDER OF; ISLAMI BANK BD PLC AGRABAD CORPORATE BRANCH 3 CDA SK.MUJIB ROAD, AGRABAD, CTG', 'UNTO THE ORDER OF; ISLAMI BANK BD PLC AGRABAD CORPORATE BRANCH 3 CDA SK.MUJIB ROAD, AGRABAD, CTG', 'JENOUB UROPA READYMADE GAR . TR LLC Shed No-15,Industrial area-13, Sharjah,Near Ramez Hypermarket, National paints,P.O BOX-30540,Sharjah,United Arab Emirates(UAE) Contact No: +971504995940 Email # jenoub@emirates.net.ae', 'CHITTAGONG, BD', 'CHITTAGONG, BD', '2024-05-24', 'UNICON LOGISTICS SERVICES LLC 907, 9TH FLOOR, THE PRISM TOWER, BUSINESS BAY, DUBAI - UAE UAE PO BOX:416190 WCA ID: 66505 Phone: +97144534680', 'HR FARHA', 'MHRF0069S', 'SHARJAH,UAE', 'SHARJAH,UAE', 'DESTINATION', '03 (THREE)', '<p><span class=\"text-big\" style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">MAIN MARKS&nbsp;&nbsp;&nbsp;&nbsp;</span><br><span class=\"text-big\" style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;</span><br><span class=\"text-big\" style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">STYLE NO&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;</span><br><span class=\"text-big\" style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;</span><br><span class=\"text-big\" style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">SIDE MARKS&nbsp;&nbsp;&nbsp;&nbsp;</span><br><span class=\"text-big\" style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">SIZE/COLOR&nbsp;&nbsp;&nbsp;&nbsp;</span><br><span class=\"text-big\" style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">TOTAL PCS&nbsp;&nbsp;&nbsp;&nbsp;</span><br><span class=\"text-big\" style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">GROSS WEIGHT: KGS&nbsp;&nbsp;&nbsp;&nbsp;</span><br><span class=\"text-big\" style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">NET WEIGHT: KGS&nbsp;&nbsp;&nbsp;&nbsp;</span><br><span class=\"text-big\" style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">CARTON MEASUREMENT: CM&nbsp;&nbsp;&nbsp;</span></p>', '<p><span class=\"text-big\" style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">620</span><br><span class=\"text-big\" style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">CTNS&nbsp;</span></p>', '<p><span class=\"text-huge\">SAID TO CONTAIN</span></p><p><span class=\"text-big\">620 CARTONS OF READYMADE GARMENTS&nbsp;</span><br><span class=\"text-big\">MENS T-SHIRT</span><br><span class=\"text-big\">HS CODE: 6109.90.00</span></p><p><span class=\"text-big\">INVOICE NO.FOCUS-41/2024 &nbsp; &nbsp;&nbsp;</span><br><span class=\"text-big\">DATE: 21.05.2024 &nbsp;</span><br><span class=\"text-big\">EXPORT LC NO &nbsp;: 004DTA220205 &nbsp; &nbsp;&nbsp;</span><br><span class=\"text-big\">DATE:31.10.2022 &nbsp;</span><br><span class=\"text-big\">EXP NO #.000235-2024 &nbsp;&nbsp;</span><br><span class=\"text-big\">DATE: 21.05.2024</span></p><p><span class=\"text-big\">ALSO NOTIFY PARTY:</span><br><span class=\"text-big\">STARGATE APPAREL DBA UNLIMITED APPAREL INC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><br><span class=\"text-big\">19 WEST 34TH STREET 11TH FLOOR, NEW YORK&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><br><span class=\"text-big\">NY 10001, USA&nbsp;&nbsp;</span></p><p><span class=\"text-big\"><strong>CRXU9924826/40\'HC/ S. NO.:SGT8689037 &nbsp;/ MODE : CY/CY</strong></span></p>', 19870, 68, '2024-05-24', '2024-07-31 09:35:11', '2024-07-31 09:35:11'),
(92, 'GTSSHJ16522', 'FOCUS APPARELS BD LTD DIDAR MANSION, MOLLA PARA\r\nNORTH HALISHAHAR, CHITTAGONG, BD', 'UNTO THE ORDER OF; ISLAMI BANK BD PLC AGRABAD\r\nCORPORATE BRANCH 3 CDA SK.MUJIB ROAD,\r\nAGRABAD, CTG', 'JENOUB UROPA READYMADE GAR . TR LLC Shed No\r\n15,Industrial area-13, Sharjah,Near Ramez\r\nHypermarket, National paints,P.O BOX\r\n30540,Sharjah,United Arab Emirates(UAE)\r\nContact No: +971504995940 Email # jenoub@emirates.net.ae', 'CHITTAGONG, BD', 'CHITTAGONG, BD', '2024-05-24', 'UNICON LOGISTICS SERVICES LLC 907, 9TH FLOOR, THE PRISM TOWER,\r\nBUSINESS BAY, DUBAI - UAE UAE PO BOX:416190\r\nWCA ID: 66505 Phone: +97144534680', 'HR FARHA', 'MHRF0069S', 'SHARJAH,UAE', 'SHARJAH,UAE', 'DESTINATION', '03 (THREE)', '<p><span class=\"text-big\" style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">MAIN MARKS&nbsp;&nbsp;&nbsp;&nbsp;</span><br><span class=\"text-big\" style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;</span><br><span class=\"text-big\" style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">STYLE NO&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;</span><br><span class=\"text-big\" style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;</span><br><span class=\"text-big\" style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">SIDE MARKS&nbsp;&nbsp;&nbsp;&nbsp;</span><br><span class=\"text-big\" style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">SIZE/COLOR&nbsp;&nbsp;&nbsp;&nbsp;</span><br><span class=\"text-big\" style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">TOTAL PCS&nbsp;&nbsp;&nbsp;&nbsp;</span><br><span class=\"text-big\" style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">GROSS WEIGHT: KGS&nbsp;&nbsp;&nbsp;&nbsp;</span><br><span class=\"text-big\" style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">NET WEIGHT: KGS&nbsp;&nbsp;&nbsp;&nbsp;</span><br><span class=\"text-big\" style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">CARTON MEASUREMENT: CM&nbsp;</span></p>', '<p><span class=\"text-big\" style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">620</span><br><span class=\"text-big\" style=\"background-color:rgb(255,255,255);color:rgb(49,48,48);\">CTNS&nbsp;</span></p>', '<p><span class=\"text-huge\">SAID TO CONTAIN</span></p><p><span class=\"text-big\">620 CARTONS OF READYMADE GARMENTS&nbsp;</span><br><span class=\"text-big\">MENS T-SHIRT</span><br><span class=\"text-big\">HS CODE: 6109.90.00</span></p><p><span class=\"text-big\">INVOICE NO.FOCUS-41/2024 &nbsp; &nbsp;&nbsp;</span><br><span class=\"text-big\">DATE: 21.05.2024 &nbsp;</span><br><span class=\"text-big\">EXPORT LC NO &nbsp;: 004DTA220205 &nbsp; &nbsp;&nbsp;</span><br><span class=\"text-big\">DATE:31.10.2022 &nbsp;</span><br><span class=\"text-big\">EXP NO #.000235-2024 &nbsp;&nbsp;</span><br><span class=\"text-big\">DATE: 21.05.2024</span></p><p><span class=\"text-big\">ALSO NOTIFY PARTY:</span><br><span class=\"text-big\">STARGATE APPAREL DBA UNLIMITED APPAREL INC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><br><span class=\"text-big\">19 WEST 34TH STREET 11TH FLOOR, NEW YORK&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><br><span class=\"text-big\">NY 10001, USA&nbsp;&nbsp;</span></p><p><span class=\"text-big\"><strong>CRXU9924826/40\'HC/ S. NO.:SGT8689037 &nbsp;/ MODE : CY/CY</strong></span></p>', 19870, 68, '2024-05-24', '2024-07-31 09:44:14', '2024-07-31 09:44:14');

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
('iDSiTWPedwjsR8a1C1RuMxc37qQb8pgAhkSOcq0w', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicU1zMkFEWldCb3JHSFo4SDFlVE5wVVp3blFqOXJCM3hGdGhrRG5tQiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9mb3JtLzkyIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1722425142),
('mhhhB2LEM8N9Kp0rWvvWgr0EylPbjLipMi2JdnYf', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiemdac0dKR2Ewa0ZicjlwNjVMNnh0Z3J4OVhKRTdKOXpXVmxqSTN3TiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9tb2RpZnkvOTIiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1722490869);

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
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
