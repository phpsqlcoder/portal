-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2020 at 01:22 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ims_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `patient_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `date`, `patient_id`, `created_at`, `updated_at`) VALUES
(1, '2019-03-11', 6, '2019-03-11 10:38:12', '2019-03-11 10:38:12'),
(2, '2019-03-11', 1, '2019-03-11 11:02:35', '2019-03-11 11:02:35'),
(3, '2019-12-06', 6, '2019-12-06 05:23:04', '2019-12-06 05:23:04'),
(4, '2019-12-06', 1, '2019-12-06 07:30:53', '2019-12-06 07:30:53');

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
(3, '2019_01_29_055120_create_products_table', 1),
(4, '2019_01_29_084107_create_services_table', 1),
(5, '2019_02_05_033704_create_patients_table', 1),
(6, '2019_02_12_022158_patient_details', 1),
(7, '2019_02_12_023402_create_transaction_headers_table', 1),
(8, '2019_02_12_025738_create_transaction_details_table', 1),
(9, '2019_02_13_030446_patient_files', 1),
(10, '2019_03_11_081247_create_stockins_table', 1);

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
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `extname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `civil_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `occupation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referral` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `fname`, `lname`, `mname`, `extname`, `gender`, `birthdate`, `address`, `contact_no`, `civil_status`, `occupation`, `referral`, `images`, `user_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Salvatore', 'Bins', 'Cummings', 'I', 'female', '1983-04-16', '221 Green Stream\nEast Gladyceland, WA 68100-6826', '1-879-854-5876 x31698', 'single', 'Operations Research Analyst', 'Mrs. Thalia Kessler', 'https://lorempixel.com/640/480/?43521|https://lorempixel.com/640/480/?60499|https://lorempixel.com/640/480/?31613|https://lorempixel.com/640/480/?45943', 1, NULL, '2019-03-11 00:39:07', '2019-03-11 00:39:07'),
(2, 'Nola', 'Mueller', 'Kunze', 'IV', 'female', '2009-04-23', '615 Wyman Ports Suite 566\nYesseniabury, NV 80037-0057', '(973) 683-0412', 'married', 'Umpire and Referee', 'Dr. Ilene Kautzer Jr.', 'https://lorempixel.com/640/480/?97023|https://lorempixel.com/640/480/?80659|https://lorempixel.com/640/480/?86306|https://lorempixel.com/640/480/?27228', 1, NULL, '2019-03-11 00:39:07', '2019-03-11 00:39:07'),
(3, 'Rosella', 'Mertz', 'Mohr', 'PhD', 'female', '1997-08-09', '541 Haag Crest Suite 066\nNew Maidafurt, OH 85616', '+17289933203', 'single', 'Record Clerk', 'Bernadine Parker', 'https://lorempixel.com/640/480/?35671|https://lorempixel.com/640/480/?48160|https://lorempixel.com/640/480/?16127|https://lorempixel.com/640/480/?85731', 1, NULL, '2019-03-11 00:39:07', '2019-03-11 00:39:07'),
(4, 'Clarabelle', 'Hoeger', 'Towne', 'DDS', 'female', '1982-12-25', '153 Upton Haven Suite 149\nNew Elwyn, ND 41572-8765', '1-465-634-2277', 'married', 'Automotive Specialty Technician', 'Emory Schneider', 'https://lorempixel.com/640/480/?40277|https://lorempixel.com/640/480/?38973|https://lorempixel.com/640/480/?60993|https://lorempixel.com/640/480/?79086', 1, NULL, '2019-03-11 00:39:07', '2019-03-11 00:39:07'),
(5, 'Dorothea', 'Lueilwitz', 'Kautzer', 'MD', 'female', '1978-05-11', '36743 Orin Drives Apt. 126\nSchummville, CT 97817', '+1.595.630.9088', 'single', 'Writer OR Author', 'Dr. Karen Flatley', 'https://lorempixel.com/640/480/?48966|https://lorempixel.com/640/480/?56187|https://lorempixel.com/640/480/?36982|https://lorempixel.com/640/480/?51772', 1, NULL, '2019-03-11 00:39:07', '2019-03-11 00:39:07'),
(6, 'Amos', 'Funk', 'Graham', 'I', 'male', '1993-01-02', '853 Smith Islands Apt. 609\nEast Daren, KY 66388', '225-682-5291 x60090', 'married', 'Law Enforcement Teacher', 'Prof. Eliza Lowe', 'https://lorempixel.com/640/480/?42036|https://lorempixel.com/640/480/?13334|https://lorempixel.com/640/480/?81071|https://lorempixel.com/640/480/?27013', 1, NULL, '2019-03-11 00:39:07', '2019-03-11 00:39:07'),
(7, 'Leonardo', 'Toy', 'Erdman', 'II', 'male', '1996-01-07', '66388 Earnest Camp Apt. 820\nCollinstown, AR 80331-1383', '921.526.2256', 'married', 'Radio Operator', 'Whitney Hodkiewicz', 'https://lorempixel.com/640/480/?43570|https://lorempixel.com/640/480/?37071|https://lorempixel.com/640/480/?30019|https://lorempixel.com/640/480/?11134', 1, NULL, '2019-03-11 00:39:07', '2019-03-11 00:39:07'),
(8, 'Celestino', 'Schneider', 'Murray', 'Jr.', 'male', '1995-10-07', '96261 Jones Mountains Suite 172\nLake Laneland, KS 91323-7595', '627.230.6551 x32652', 'married', 'Nuclear Technician', 'Barry Funk', 'https://lorempixel.com/640/480/?83847|https://lorempixel.com/640/480/?80548|https://lorempixel.com/640/480/?66889|https://lorempixel.com/640/480/?30753', 1, NULL, '2019-03-11 00:39:07', '2019-03-11 00:39:07'),
(9, 'Alan', 'McLaughlin', 'Lubowitz', 'II', 'male', '1981-02-09', '789 Domingo Spur Suite 526\nDoyleside, IL 55096', '1-929-702-1065', 'married', 'Materials Inspector', 'Ms. Helene Fay IV', 'https://lorempixel.com/640/480/?61426|https://lorempixel.com/640/480/?65105|https://lorempixel.com/640/480/?12309|https://lorempixel.com/640/480/?52250', 1, NULL, '2019-03-11 00:39:07', '2019-03-11 00:39:07'),
(10, 'Beverly', 'Stiedemann', 'Klein', 'IV', 'female', '1971-02-12', '5508 Koelpin Locks\nLangworthfurt, IN 64005', '1-221-950-2284', 'married', 'Elementary and Secondary School Administrators', 'Shawna Borer', 'https://lorempixel.com/640/480/?29605|https://lorempixel.com/640/480/?43947|https://lorempixel.com/640/480/?34538|https://lorempixel.com/640/480/?57640', 1, NULL, '2019-03-11 00:39:07', '2019-03-11 00:39:07');

-- --------------------------------------------------------

--
-- Table structure for table `patient_details`
--

CREATE TABLE `patient_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `patient_id` int(11) NOT NULL,
  `pmh_hpn` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pmh_dm` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pmh_ba` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pmh_ca` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pmh_heart_disease` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pmh_operation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `psh_smoking` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `psh_alcohol` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fmh_similar_lesions` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fmh_ca` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `allergy` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `soap` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shampoo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lotion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `perfume` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detergent` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fabric_softener` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lmp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pmp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pregnant_plans` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patient_details`
--

INSERT INTO `patient_details` (`id`, `patient_id`, `pmh_hpn`, `pmh_dm`, `pmh_ba`, `pmh_ca`, `pmh_heart_disease`, `pmh_operation`, `psh_smoking`, `psh_alcohol`, `fmh_similar_lesions`, `fmh_ca`, `allergy`, `soap`, `shampoo`, `lotion`, `perfume`, `detergent`, `fabric_softener`, `lmp`, `pmp`, `pregnant_plans`, `user_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 3, 'no', 'no', 'yes', 'no', 'no', 'yes', 'no', 'yes', 'no', 'no', 'voluptatem', 'officiis', 'aut', 'sunt', 'quo', 'vero', 'iure', 'yes', 'yes', 'no', 1, NULL, '2019-03-11 00:39:07', '2019-03-11 00:39:07'),
(2, 1, 'no', 'no', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'yes', 'omnis', 'veniam', 'id', 'ut', 'eligendi', 'quas', 'maxime', 'no', 'yes', 'yes', 1, NULL, '2019-03-11 00:39:07', '2019-03-11 00:39:07'),
(3, 5, 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'no', 'yes', 'yes', 'optio', 'explicabo', 'numquam', 'ut', 'et', 'non', 'amet', 'yes', 'no', 'yes', 1, NULL, '2019-03-11 00:39:07', '2019-03-11 00:39:07'),
(4, 2, 'yes', 'no', 'no', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'yes', 'sed', 'aut', 'ut', 'ipsam', 'iste', 'velit', 'sunt', 'no', 'yes', 'no', 1, NULL, '2019-03-11 00:39:07', '2019-03-11 00:39:07'),
(5, 6, 'yes', 'yes', 'no', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'yes', 'qui', 'animi', 'temporibus', 'rem', 'error', 'adipisci', 'id', 'yes', 'no', 'no', 1, NULL, '2019-03-11 00:39:07', '2019-03-11 00:39:07'),
(6, 9, 'no', 'yes', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'adipisci', 'ab', 'repudiandae', 'voluptatem', 'ullam', 'alias', 'voluptatem', 'no', 'no', 'no', 1, NULL, '2019-03-11 00:39:07', '2019-03-11 00:39:07'),
(7, 7, 'yes', 'no', 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'omnis', 'reiciendis', 'voluptatem', 'molestias', 'soluta', 'corrupti', 'id', 'no', 'no', 'yes', 1, NULL, '2019-03-11 00:39:07', '2019-03-11 00:39:07'),
(8, 8, 'yes', 'yes', 'no', 'no', 'yes', 'no', 'no', 'yes', 'no', 'no', 'iste', 'sunt', 'vel', 'ea', 'iste', 'commodi', 'et', 'yes', 'yes', 'no', 1, NULL, '2019-03-11 00:39:07', '2019-03-11 00:39:07'),
(9, 10, 'yes', 'no', 'yes', 'no', 'no', 'no', 'no', 'yes', 'no', 'yes', 'dolorem', 'voluptatem', 'quisquam', 'id', 'vero', 'ad', 'mollitia', 'yes', 'yes', 'no', 1, NULL, '2019-03-11 00:39:07', '2019-03-11 00:39:07'),
(10, 4, 'no', 'no', 'no', 'no', 'yes', 'yes', 'no', 'no', 'no', 'yes', 'molestiae', 'ratione', 'in', 'dolorum', 'dolore', 'laboriosam', 'et', 'no', 'yes', 'no', 1, NULL, '2019-03-11 00:39:07', '2019-03-11 00:39:07');

-- --------------------------------------------------------

--
-- Table structure for table `patient_files`
--

CREATE TABLE `patient_files` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `patient_id` int(11) NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cost` decimal(16,2) NOT NULL,
  `price` decimal(16,2) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `created_at`, `updated_at`, `name`, `brand`, `cost`, `price`, `deleted_at`) VALUES
(1, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'pariatur', 'amet', '483.29', '3804.00', NULL),
(2, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'non', 'maxime', '714.69', '81.47', NULL),
(3, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'cum', 'facilis', '1148.42', '2911.28', NULL),
(4, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'reiciendis', 'autem', '2936.35', '4317.50', NULL),
(5, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'explicabo', 'odit', '4988.40', '1367.01', NULL),
(6, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'consequatur', 'rerum', '236.44', '3894.66', NULL),
(7, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'distinctio', 'autem', '1640.01', '3115.98', NULL),
(8, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'hic', 'culpa', '1782.93', '472.34', NULL),
(9, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'deserunt', 'assumenda', '2509.11', '4905.20', NULL),
(10, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'vel', 'tenetur', '4716.36', '4103.18', NULL),
(11, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'ut', 'repellendus', '3203.83', '3751.93', NULL),
(12, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'nobis', 'ipsam', '239.28', '1549.09', NULL),
(13, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'minima', 'ullam', '4939.00', '4889.07', NULL),
(14, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'beatae', 'delectus', '4804.38', '3555.00', NULL),
(15, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'ab', 'et', '2608.23', '4880.87', NULL),
(16, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'eum', 'voluptatem', '1156.35', '1009.77', NULL),
(17, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'voluptatem', 'error', '3562.90', '1571.69', NULL),
(18, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'quaerat', 'consequatur', '1619.00', '3903.00', NULL),
(19, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'ullam', 'et', '2254.20', '3832.24', NULL),
(20, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'voluptatum', 'voluptatem', '899.52', '3849.15', NULL),
(21, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'sed', 'velit', '3556.19', '3253.52', NULL),
(22, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'temporibus', 'quia', '2446.77', '3126.37', NULL),
(23, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'velit', 'id', '1407.15', '4987.79', NULL),
(24, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'occaecati', 'est', '3855.16', '4309.02', NULL),
(25, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'eveniet', 'quia', '2227.52', '2258.58', NULL),
(26, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'provident', 'incidunt', '2938.33', '2839.29', NULL),
(27, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'laudantium', 'vel', '516.00', '91.33', NULL),
(28, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'tenetur', 'et', '504.00', '4737.40', NULL),
(29, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'beatae', 'quasi', '3992.06', '1237.61', NULL),
(30, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'nobis', 'facilis', '3101.45', '3193.16', NULL),
(31, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'inventore', 'quo', '4611.92', '2096.84', NULL),
(32, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'dolore', 'illo', '3259.31', '3981.60', NULL),
(33, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'asperiores', 'alias', '3147.78', '3300.00', NULL),
(34, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'aut', 'alias', '4285.00', '3742.63', NULL),
(35, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'omnis', 'odit', '4195.00', '4819.78', NULL),
(36, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'minus', 'sit', '1790.71', '4636.66', NULL),
(37, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'occaecati', 'nihil', '3741.05', '147.71', NULL),
(38, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'voluptates', 'ullam', '4089.00', '1720.17', NULL),
(39, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'libero', 'ut', '4267.97', '1910.30', NULL),
(40, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'consequuntur', 'non', '3321.60', '1046.00', NULL),
(41, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'numquam', 'occaecati', '1359.54', '4716.44', NULL),
(42, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'amet', 'sunt', '2461.32', '3618.11', NULL),
(43, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'labore', 'iste', '3943.16', '3529.51', NULL),
(44, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'eligendi', 'sunt', '4104.19', '262.62', NULL),
(45, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'sunt', 'dolores', '572.00', '3306.70', NULL),
(46, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'culpa', 'veritatis', '2905.46', '3932.36', NULL),
(47, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'consequuntur', 'dolor', '3166.00', '2832.10', NULL),
(48, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'possimus', 'voluptatem', '849.17', '872.67', NULL),
(49, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'reiciendis', 'velit', '4393.90', '2310.12', NULL),
(50, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'deserunt', 'quos', '3604.00', '4043.64', NULL),
(51, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'deserunt', 'aliquid', '2.61', '1605.60', NULL),
(52, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'dicta', 'veniam', '1446.16', '2452.00', NULL),
(53, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'exercitationem', 'quis', '119.78', '483.64', NULL),
(54, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'illum', 'quod', '3578.37', '188.80', NULL),
(55, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'vel', 'quam', '4748.17', '396.80', NULL),
(56, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'occaecati', 'ratione', '1564.02', '3051.85', NULL),
(57, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'quis', 'ad', '4067.31', '3978.03', NULL),
(58, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'ab', 'id', '1247.63', '462.86', NULL),
(59, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'eveniet', 'non', '4357.84', '1693.50', NULL),
(60, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'illo', 'alias', '476.58', '4910.77', NULL),
(61, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'qui', 'modi', '46.85', '725.00', NULL),
(62, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'eos', 'sint', '2296.19', '3246.18', NULL),
(63, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'placeat', 'officiis', '2710.74', '2569.59', NULL),
(64, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'enim', 'doloribus', '75.83', '259.27', NULL),
(65, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'nobis', 'cum', '3865.34', '639.63', NULL),
(66, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'iure', 'ea', '2642.79', '1110.77', NULL),
(67, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'similique', 'et', '4237.40', '4738.13', NULL),
(68, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'laborum', 'aperiam', '2413.64', '1124.00', NULL),
(69, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'autem', 'voluptas', '1141.90', '4225.94', NULL),
(70, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'deleniti', 'aut', '2026.50', '1308.74', NULL),
(71, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'ratione', 'asperiores', '2568.31', '1073.00', NULL),
(72, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'et', 'magni', '4273.23', '61.06', NULL),
(73, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'voluptas', 'vitae', '4309.35', '3936.00', NULL),
(74, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'vitae', 'non', '3900.77', '2305.73', NULL),
(75, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'facilis', 'consequatur', '2647.23', '2912.05', NULL),
(76, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'itaque', 'illo', '4094.83', '4210.95', NULL),
(77, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'nesciunt', 'laudantium', '3540.31', '2300.00', NULL),
(78, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'aut', 'consequatur', '4517.31', '3540.05', NULL),
(79, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'atque', 'voluptatem', '3572.00', '196.48', NULL),
(80, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'laboriosam', 'soluta', '978.71', '2367.83', NULL),
(81, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'quidem', 'est', '2802.97', '2718.93', NULL),
(82, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'expedita', 'vel', '998.23', '3974.37', NULL),
(83, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'tempora', 'harum', '247.98', '3434.00', NULL),
(84, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'necessitatibus', 'quidem', '4885.09', '1931.17', NULL),
(85, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'eos', 'ea', '2330.64', '1389.06', NULL),
(86, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'sit', 'consequatur', '1436.30', '4044.49', NULL),
(87, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'et', 'placeat', '3181.70', '3168.00', NULL),
(88, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'ut', 'incidunt', '4227.93', '1932.11', NULL),
(89, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'qui', 'ipsum', '4715.29', '2081.90', NULL),
(90, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'eos', 'sapiente', '3534.07', '3861.04', NULL),
(91, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'sit', 'ea', '3598.45', '3057.29', NULL),
(92, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'itaque', 'dicta', '2093.01', '456.51', NULL),
(93, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'qui', 'qui', '1824.04', '3136.39', NULL),
(94, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'explicabo', 'officiis', '4607.54', '366.11', NULL),
(95, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'iste', 'libero', '1386.44', '4185.33', NULL),
(96, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'placeat', 'dignissimos', '2141.04', '2481.00', NULL),
(97, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'iure', 'fugit', '664.33', '3047.78', NULL),
(98, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'ducimus', 'at', '3821.00', '4584.59', NULL),
(99, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'debitis', 'veniam', '524.15', '4875.23', NULL),
(100, '2019-03-11 00:39:07', '2019-03-11 03:08:29', 'adipisci', 'animi', '2636.74', '1239.59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(16,2) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `created_at`, `updated_at`, `name`, `price`, `deleted_at`) VALUES
(1, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'officiis', '1387.19', NULL),
(2, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'officiis', '4035.39', NULL),
(3, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'non', '589.06', NULL),
(4, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'minus', '4595.61', NULL),
(5, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'ut', '2826.22', NULL),
(6, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'aut', '922.40', NULL),
(7, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'ut', '2693.58', NULL),
(8, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'voluptatem', '2887.00', NULL),
(9, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'ipsa', '699.30', NULL),
(10, '2019-03-11 00:39:07', '2019-03-11 00:39:07', 'nobis', '855.03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `stockins`
--

CREATE TABLE `stockins` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `document_date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` decimal(10,2) NOT NULL,
  `other_details` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stockins`
--

INSERT INTO `stockins` (`id`, `created_at`, `updated_at`, `document_date`, `user_id`, `product_id`, `qty`, `other_details`) VALUES
(1, '2019-03-11 00:39:07', '2019-03-11 00:39:07', '2011-03-21', 1, 80, '4080.90', 'Minima et maiores doloremque provident similique eum. Esse molestiae dolores aperiam aut ut. Delectus odit esse illo voluptatibus quo.'),
(2, '2019-03-11 00:39:07', '2019-03-11 00:39:07', '1997-10-23', 1, 94, '4208.44', 'Eligendi quibusdam laudantium a et vitae et et. Repudiandae quaerat non amet blanditiis sed. Rerum quas qui magni ut iusto libero corrupti et.'),
(3, '2019-03-11 00:39:07', '2019-03-11 00:39:07', '1980-04-18', 1, 14, '4765.08', 'Quibusdam ut id voluptate. Dolorem et repellat nostrum et. Quaerat molestiae pariatur explicabo at. Quia et cumque a non. Minima culpa in quis dicta sunt. Quis non quidem occaecati et eum.'),
(4, '2019-03-11 00:39:07', '2019-03-11 00:39:07', '1984-04-10', 1, 52, '2593.29', 'Consequuntur voluptatem vel nobis nihil exercitationem nulla maxime facere. Sint asperiores inventore quam enim aut. Voluptatem eligendi pariatur aspernatur vero. Explicabo sit soluta ullam pariatur.'),
(5, '2019-03-11 00:39:07', '2019-03-11 00:39:07', '1992-02-15', 1, 10, '506.53', 'Qui vel omnis dicta atque et sint eligendi. Atque aut ad mollitia ab voluptatum.'),
(6, '2019-03-11 00:39:07', '2019-03-11 00:39:07', '2014-10-24', 1, 3, '2283.96', 'Commodi totam soluta adipisci. Cumque qui consequatur animi quis unde consectetur similique. Voluptas consequatur consequuntur vero sint voluptatem soluta voluptatibus dolores.'),
(7, '2019-03-11 00:39:07', '2019-03-11 00:39:07', '2014-12-27', 1, 77, '1662.25', 'Voluptatem magni voluptas qui et et soluta beatae ut. Vel eaque sint necessitatibus maiores illo quae.'),
(8, '2019-03-11 00:39:07', '2019-03-11 00:39:07', '1996-10-08', 1, 23, '2821.39', 'Provident temporibus sint laborum alias ut quis. Eos in illum pariatur aliquid ut cupiditate omnis. Ut qui ipsa natus suscipit facere optio.'),
(9, '2019-03-11 00:39:07', '2019-03-11 00:39:07', '1976-04-19', 1, 89, '1846.37', 'Sit fuga ullam et architecto repellendus et. Sit provident voluptas et rem porro laborum. Sint cumque et dolorum quo repellat culpa tenetur. Tempore soluta eum aliquid rerum et voluptatum a.'),
(10, '2019-03-11 00:39:07', '2019-03-11 00:39:07', '2010-01-11', 1, 47, '741.57', 'Dolore animi maiores recusandae est sint et. Sed perspiciatis rerum sapiente quam. Sit repudiandae consequatur autem velit voluptatem.'),
(11, '2019-03-11 00:39:07', '2019-03-11 00:39:07', '1982-09-20', 1, 81, '2217.37', 'Quia earum et a totam et maxime. Exercitationem quisquam aut perferendis. Dignissimos at est amet possimus molestiae. Ipsam dolorem et ab ut similique et.'),
(12, '2019-03-11 00:39:07', '2019-03-11 00:39:07', '2018-09-10', 1, 77, '1716.02', 'Vero suscipit corrupti voluptas quo accusamus. Enim voluptatibus aut cum voluptas. Nesciunt nihil impedit recusandae quibusdam et omnis nihil.'),
(13, '2019-03-11 00:39:07', '2019-03-11 00:39:07', '1990-04-13', 1, 13, '2672.59', 'Ipsum praesentium sapiente et aut sequi qui. Voluptas placeat atque illo molestias.'),
(14, '2019-03-11 00:39:07', '2019-03-11 00:39:07', '2004-06-12', 1, 74, '2314.44', 'Sunt eius est nemo et doloremque quam. Et ipsam dolores tenetur vel aliquid nobis ut. Quis explicabo rerum similique rerum velit labore eveniet. Voluptatem voluptates est consequatur.'),
(15, '2019-03-11 00:39:07', '2019-03-11 00:39:07', '1981-05-23', 1, 78, '2135.72', 'Velit hic blanditiis voluptates maiores pariatur voluptas. Qui et at assumenda quaerat eum delectus. Eaque veniam blanditiis dolor voluptate id consequatur id.'),
(16, '2019-03-11 00:39:07', '2019-03-11 00:39:07', '2011-02-05', 1, 95, '4787.73', 'Consequatur rerum id nesciunt quisquam. Adipisci aliquid aut perferendis et reprehenderit. Cum qui quis exercitationem ea nostrum quia.'),
(17, '2019-03-11 00:39:07', '2019-03-11 00:39:07', '1983-11-27', 1, 30, '2243.00', 'Repellat et et aut ea vero ea. Debitis illo nemo non odit soluta quas sed. Impedit est quo enim et officiis.'),
(18, '2019-03-11 00:39:07', '2019-03-11 00:39:07', '2006-06-14', 1, 38, '3204.20', 'Ut eum ut rerum vel. Ratione laudantium consequatur cupiditate velit est. Et hic quasi suscipit nemo sit similique blanditiis sit.'),
(19, '2019-03-11 00:39:07', '2019-03-11 00:39:07', '1986-03-01', 1, 22, '3447.91', 'Dolorum recusandae ipsam excepturi doloribus. Molestiae unde laboriosam vero unde. Et quia possimus sit a hic quam ut.'),
(20, '2019-03-11 00:39:07', '2019-03-11 00:39:07', '2010-09-22', 1, 34, '851.44', 'Consequatur ratione hic quasi autem. Cum ut fuga omnis officia enim pariatur. Vitae et iusto enim dolor autem consectetur nesciunt.'),
(21, '2019-03-11 00:39:07', '2019-03-11 00:39:07', '1993-11-14', 1, 94, '2685.04', 'Impedit tempora magnam eveniet non debitis ut sed. Voluptatibus perspiciatis earum nulla laudantium quia et enim. Ducimus voluptatem dolores nihil quo quo natus incidunt.'),
(22, '2019-03-11 00:39:07', '2019-03-11 00:39:07', '1978-04-17', 1, 20, '1768.05', 'Unde unde nulla quam beatae rerum architecto. Quas quo quisquam cumque hic sed beatae exercitationem.'),
(23, '2019-03-11 00:39:07', '2019-03-11 00:39:07', '2001-08-06', 1, 43, '179.00', 'Et sunt nesciunt sequi natus. Non facilis qui ut. Vitae ea nisi sed. Qui sit quam autem cupiditate. Ullam soluta aut rerum cum omnis sit accusamus. Quo architecto ab esse.'),
(24, '2019-03-11 00:39:07', '2019-03-11 00:39:07', '2011-11-12', 1, 85, '1387.26', 'Distinctio et sit sequi corrupti. Eum pariatur in qui hic.'),
(25, '2019-03-11 00:39:07', '2019-03-11 00:39:07', '1990-07-08', 1, 45, '3429.28', 'Occaecati voluptatum maxime saepe eligendi autem. Sit fugit laboriosam voluptates itaque rerum qui temporibus. Doloribus labore maxime consequatur omnis dolores est illum.'),
(26, '2019-03-11 00:39:07', '2019-03-11 00:39:07', '2001-09-02', 1, 28, '4368.30', 'Accusamus ea porro aut molestiae ducimus. Voluptatem sint animi molestias a sequi odit. Ratione eos quia odit.'),
(27, '2019-03-11 00:39:07', '2019-03-11 00:39:07', '1976-06-01', 1, 31, '1194.94', 'Rerum quisquam ad officiis est quia. Iste explicabo assumenda et aut sed aliquam. Dicta ea natus voluptatem omnis sequi. Saepe consequatur in quam quaerat laboriosam.'),
(28, '2019-03-11 00:39:07', '2019-03-11 00:39:07', '2006-07-23', 1, 61, '4409.88', 'Animi distinctio repellendus eum dolorum modi. Ratione vero laborum modi est sapiente odit. Laborum quia doloremque accusamus et corrupti sit temporibus pariatur.'),
(29, '2019-03-11 00:39:07', '2019-03-11 00:39:07', '1973-06-27', 1, 13, '1340.00', 'Illum aspernatur eos fugit rerum non nisi. Ab dolore ullam voluptas ipsam mollitia. Sit expedita autem maxime id omnis. Laborum cum blanditiis voluptatum mollitia non.'),
(30, '2019-03-11 00:39:07', '2019-03-11 00:39:07', '1978-11-28', 1, 83, '789.00', 'Adipisci eos tempora aut porro est quia magni. Odio tenetur quia laboriosam culpa eligendi. Id eaque rem eius mollitia qui quam.'),
(31, '2019-03-11 00:39:07', '2019-03-11 00:39:07', '2007-07-27', 1, 94, '4166.63', 'Dolorem laboriosam ex hic tempora odio. Ab velit et blanditiis. Placeat ut eligendi sint quis perspiciatis veritatis. Harum ut veniam et eum autem et pariatur et.'),
(32, '2019-03-11 00:39:07', '2019-03-11 00:39:07', '1985-01-15', 1, 8, '4845.01', 'Consequuntur voluptatem quo omnis ipsam quia nam. Reiciendis placeat quibusdam voluptatem nihil minima. Neque sed explicabo fugiat dolores. Debitis temporibus in doloremque ut non.'),
(33, '2019-03-11 00:39:07', '2019-03-11 00:39:07', '1981-02-12', 1, 19, '3122.30', 'Facere qui eum perspiciatis laudantium doloribus suscipit officiis. Nesciunt eius expedita tempora atque cupiditate aut. Eos dolor corrupti alias est ut debitis. Aut quis voluptatem et.'),
(34, '2019-03-11 00:39:07', '2019-03-11 00:39:07', '2011-03-28', 1, 7, '4024.57', 'Voluptatibus accusantium quae debitis molestiae eius sunt. Hic fugiat ut ducimus et alias blanditiis. Sit voluptas saepe quaerat. Dicta est iste laudantium autem quia aperiam molestiae.'),
(35, '2019-03-11 00:39:07', '2019-03-11 00:39:07', '1977-12-12', 1, 9, '2692.06', 'Asperiores consectetur consectetur eum quis. Repellat perferendis et eveniet doloribus. Voluptas nobis soluta illum velit alias quis. Et error omnis reprehenderit aut perferendis veniam.'),
(36, '2019-03-11 00:39:07', '2019-03-11 00:39:07', '1997-06-21', 1, 21, '4876.55', 'Fugit ut reiciendis quae distinctio blanditiis corrupti aspernatur. Molestias sit occaecati qui vel necessitatibus. Est dolor aut voluptas saepe quidem occaecati fuga.'),
(37, '2019-03-11 00:39:07', '2019-03-11 00:39:07', '1998-11-24', 1, 15, '2637.28', 'Ab animi et sunt doloremque quae velit quas. Aut adipisci id qui nostrum eius et. Voluptatem vitae rem sit delectus. Magni velit quaerat molestias dolor qui.'),
(38, '2019-03-11 00:39:07', '2019-03-11 00:39:07', '1971-11-05', 1, 89, '1453.29', 'Dicta et quisquam consequatur iste. Et eveniet deserunt consectetur reiciendis. Aut delectus atque non quidem voluptatum voluptas. Et tempora aliquam sit. Sit sit nihil iure.'),
(39, '2019-03-11 00:39:07', '2019-03-11 00:39:07', '2007-12-16', 1, 16, '4962.52', 'Tempora quod veritatis culpa aut. Velit sit sunt voluptate repellendus ex voluptatem officia. Quasi ipsam fugiat culpa id officiis.'),
(40, '2019-03-11 00:39:07', '2019-03-11 00:39:07', '2008-10-04', 1, 1, '1336.00', 'Cupiditate id numquam odio. Velit nobis qui odio maxime consequatur. Similique velit excepturi repudiandae quaerat ad id.'),
(41, '2019-03-11 00:39:07', '2019-03-11 00:39:07', '2011-04-25', 1, 19, '3978.03', 'Ad porro adipisci nesciunt officiis. Odit ut reiciendis quidem delectus molestiae quia fugit enim. Molestiae rerum natus itaque.'),
(42, '2019-03-11 00:39:07', '2019-03-11 00:39:07', '1982-11-27', 1, 60, '4909.50', 'Consectetur asperiores maiores quas aspernatur. Necessitatibus consequatur blanditiis consectetur et eum quia. Et asperiores id quam quaerat sunt magni.'),
(43, '2019-03-11 00:39:07', '2019-03-11 00:39:07', '1974-03-02', 1, 99, '522.65', 'Ut aperiam eos eaque nulla qui veniam. Et provident hic error inventore perferendis. Et assumenda voluptas qui omnis porro.'),
(44, '2019-03-11 00:39:07', '2019-03-11 00:39:07', '2017-01-05', 1, 51, '2760.00', 'Quo officiis voluptates facilis sed. Minus aut laudantium minima non. Id officiis est qui quo ut dicta. Qui ipsa et et ipsa officia hic voluptates.'),
(45, '2019-03-11 00:39:07', '2019-03-11 00:39:07', '2004-01-31', 1, 65, '2978.80', 'Placeat quidem et inventore qui velit. Sapiente impedit hic autem porro et eum. Dolores nemo fugit quis cupiditate.'),
(46, '2019-03-11 00:39:07', '2019-03-11 00:39:07', '2001-06-09', 1, 39, '4193.06', 'Impedit aliquam vero corporis laborum. Maiores eum iste laborum accusamus qui eum molestias. Perspiciatis et veritatis sunt porro.'),
(47, '2019-03-11 00:39:07', '2019-03-11 00:39:07', '1981-09-05', 1, 34, '1803.20', 'Omnis eos voluptatem in voluptas voluptatum. Voluptas laudantium optio fugiat unde ratione rem. Sapiente laboriosam dolorum sint sequi qui et omnis. Doloremque omnis cum nam.'),
(48, '2019-03-11 00:39:07', '2019-03-11 00:39:07', '1997-04-21', 1, 51, '1834.69', 'Enim nihil aperiam quis sit quis incidunt. Error eaque aperiam et ratione id. Sunt recusandae neque autem tenetur quae. Est eum enim in quae. Qui laboriosam eius animi.'),
(49, '2019-03-11 00:39:07', '2019-03-11 00:39:07', '1970-06-11', 1, 40, '2855.96', 'Quae laboriosam animi cum aut molestias ut quam. Odit quo culpa dicta tenetur odio.'),
(50, '2019-03-11 00:39:07', '2019-03-11 00:39:07', '1993-01-11', 1, 11, '723.48', 'Illo molestiae aut id. Ipsa voluptatem nam non dolores magni aspernatur. Eum rerum facere dolorem repellendus recusandae.'),
(51, '2019-03-11 01:01:57', '2019-03-11 01:01:57', '2019-03-11', 1, 21, '5.00', 'ddddd');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_details`
--

CREATE TABLE `transaction_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `header_id` int(11) NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_days` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `when_to_apply` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` decimal(16,4) DEFAULT NULL,
  `price` decimal(16,4) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaction_details`
--

INSERT INTO `transaction_details` (`id`, `created_at`, `updated_at`, `header_id`, `type`, `total_days`, `when_to_apply`, `qty`, `price`, `name`, `deleted_at`) VALUES
(1, '2019-03-11 03:06:40', '2019-03-11 03:06:40', 1, 'inventory', '2', '3 times a day', '2.0000', '3253.5200', 'sed', NULL),
(2, '2019-12-05 23:36:18', '2019-12-05 23:36:18', 2, 'service', NULL, NULL, '1.0000', '589.0600', 'non', NULL),
(3, '2019-12-05 23:36:18', '2019-12-05 23:36:18', 2, 'inventory', '6', 'after dinner', '5.0000', '4889.0700', 'minima', NULL),
(4, '2019-12-05 23:36:18', '2019-12-05 23:36:18', 2, 'inventory', '2', 'after breakfast', '2.0000', '3751.9300', 'ut', NULL),
(5, '2019-12-05 23:36:18', '2019-12-05 23:36:18', 2, 'other', NULL, NULL, '1.0000', NULL, 'ghff', NULL),
(6, '2019-12-07 17:59:23', '2019-12-07 17:59:23', 3, 'inventory', '6', 'every after meal', '18.0000', '5889.0700', 'minima', NULL),
(7, '2019-12-17 22:56:05', '2019-12-17 22:56:05', 4, 'service', NULL, NULL, '1.0000', '1787.1900', 'officiis', NULL),
(8, '2019-12-17 22:56:05', '2019-12-17 22:56:05', 4, 'inventory', '7', 'twice a day', '14.0000', '3094.6600', 'consequatur', NULL),
(9, '2019-12-17 22:56:05', '2019-12-17 22:56:05', 4, 'inventory', '1', 'morning', '1.0000', '4905.2000', 'deserunt', NULL),
(10, '2019-12-17 22:56:05', '2019-12-17 22:56:05', 4, 'other', '2', 'every meal', '6.0000', NULL, 'medicine 1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transaction_headers`
--

CREATE TABLE `transaction_headers` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `patient_id` int(11) NOT NULL,
  `chief_complaint` text COLLATE utf8mb4_unicode_ci,
  `diagnoses` text COLLATE utf8mb4_unicode_ci,
  `recommendation` text COLLATE utf8mb4_unicode_ci,
  `remarks` text COLLATE utf8mb4_unicode_ci,
  `visit_date` datetime NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaction_headers`
--

INSERT INTO `transaction_headers` (`id`, `created_at`, `updated_at`, `patient_id`, `chief_complaint`, `diagnoses`, `recommendation`, `remarks`, `visit_date`, `deleted_at`, `user_id`) VALUES
(1, '2019-03-11 03:06:40', '2019-03-11 03:06:40', 1, 'sadsa', 'fgfghgf', 'fgghf', 'gffg', '2019-03-11 00:00:00', NULL, 1),
(2, '2019-12-05 23:36:18', '2019-12-05 23:36:18', 1, 'complaint', 'diagnosisremarks', 'recommendaion', 'remarks', '2019-12-06 00:00:00', NULL, 1),
(3, '2019-12-07 17:59:23', '2019-12-07 17:59:23', 1, NULL, NULL, NULL, NULL, '2019-12-08 00:00:00', NULL, 1),
(4, '2019-12-17 22:56:05', '2019-12-17 22:56:05', 1, 'complaint info', 'diagnosis 1\r\ndiagnoses 2', 'recommendation 1\r\nrecommendation 2', 'remarks 1', '2019-12-18 00:00:00', NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'jundrie', 'jatano@philsaga.com', 'user', '2019-03-11 00:39:06', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'G5hhQuAIwx', '2019-03-11 00:39:06', '2019-03-11 00:39:06'),
(2, 'jun', 'jun@jun.com', 'user', NULL, '$2y$10$sEFC5oKuwmXkkxlFXw9EZuXWOOCJl.2shgI4AV3N5bXez.C8qiSc6', NULL, '2019-12-17 22:47:37', '2019-12-17 22:47:37'),
(3, 'aaaa', 'aaaa@gmail.com', 'user', NULL, '$2y$10$JsUHC.2rRWn3wuS4C1tChurRjn5OIhGpUekhGKi97tqsrr6HdpAmG', NULL, '2020-01-12 00:36:56', '2020-01-12 00:36:56'),
(4, 'jatano', 'jatanod@philsaga.com', 'user', NULL, '$2y$10$zuvkE07PNpgkNZy3MJyco.AoKI7Mky2l/MFpyyHCiRdMJ/UWTj1nS', NULL, '2020-08-10 02:14:33', '2020-08-10 02:14:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_details`
--
ALTER TABLE `patient_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_files`
--
ALTER TABLE `patient_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stockins`
--
ALTER TABLE `stockins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction_details`
--
ALTER TABLE `transaction_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction_headers`
--
ALTER TABLE `transaction_headers`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `patient_details`
--
ALTER TABLE `patient_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `patient_files`
--
ALTER TABLE `patient_files`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `stockins`
--
ALTER TABLE `stockins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `transaction_details`
--
ALTER TABLE `transaction_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transaction_headers`
--
ALTER TABLE `transaction_headers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
