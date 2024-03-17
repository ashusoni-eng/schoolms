-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2024 at 06:33 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schoolms2`
--

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `classId` bigint(20) UNSIGNED NOT NULL,
  `className` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`classId`, `className`, `status`, `created_at`, `updated_at`) VALUES
(1, '8th A', 1, '2024-03-15 12:32:53', '2024-03-16 12:40:25'),
(3, '8th B', 1, '2024-03-15 12:32:53', '2024-03-16 12:40:14'),
(4, '9th A', 1, '2024-03-15 12:32:54', '2024-03-16 12:40:33'),
(6, '9th B', 1, '2024-03-15 12:32:54', '2024-03-16 12:40:41'),
(7, '10th A Science', 1, '2024-03-15 12:32:54', '2024-03-16 12:40:53'),
(8, '10th A Commerce', 1, '2024-03-15 12:32:54', '2024-03-16 12:41:05'),
(9, '10th b Science', 1, '2024-03-15 12:32:54', '2024-03-16 12:41:32'),
(10, '10th B Commerce', 1, '2024-03-15 12:32:54', '2024-03-16 12:41:43'),
(11, '11th A Science', 1, '2024-03-15 12:33:36', '2024-03-16 12:41:53'),
(12, '11th A Commerce', 1, '2024-03-15 12:33:36', '2024-03-16 12:42:08'),
(13, '11th B Sc', 1, '2024-03-15 12:33:36', '2024-03-16 12:42:26'),
(14, '11th B C', 1, '2024-03-15 12:33:36', '2024-03-16 12:42:36'),
(15, '12th A Sc', 1, '2024-03-15 12:33:37', '2024-03-16 12:42:46'),
(16, '12th A Com', 1, '2024-03-15 12:33:37', '2024-03-16 12:42:55'),
(17, '12th A Bio', 1, '2024-03-15 12:33:37', '2024-03-16 12:43:06'),
(18, '12th B Sc', 1, '2024-03-15 12:33:37', '2024-03-16 12:43:17'),
(19, '12th B Comm', 1, '2024-03-15 12:33:37', '2024-03-16 12:43:29'),
(20, '12th B Bio', 1, '2024-03-15 12:33:37', '2024-03-16 12:43:43');

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
(8, '2014_10_12_000000_create_users_table', 1),
(9, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(10, '2019_08_19_000000_create_failed_jobs_table', 1),
(11, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(12, '2024_03_08_165437_create_classes', 1),
(13, '2024_03_08_181752_create_students', 1),
(14, '2024_03_15_170744_create_class_teachers_table', 1);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `stdId` bigint(20) UNSIGNED NOT NULL,
  `stdName` varchar(255) NOT NULL,
  `classId` bigint(20) UNSIGNED NOT NULL,
  `stdIC` varchar(255) NOT NULL,
  `fathersName` varchar(255) NOT NULL,
  `mothersName` varchar(255) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `phoneNo` varchar(50) NOT NULL,
  `alternatePhone` varchar(50) NOT NULL,
  `stdGender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `stdImage` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`stdId`, `stdName`, `classId`, `stdIC`, `fathersName`, `mothersName`, `dob`, `phoneNo`, `alternatePhone`, `stdGender`, `address`, `stdImage`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Consuelo Batz', 9, '9', 'Selena Schuppe', 'Mr. Noble Johnston', '1993-02-01', '38 5737269690', '48 0576852981', 'Female', '588 Conn Mill\nWest Abner, IL 83534', 'yImg16jpg', 1, '2024-03-15 12:39:47', '2024-03-15 12:39:47'),
(2, 'Johnson Stamm', 17, '15', 'Paris Robel', 'Kaycee Marks', '1972-09-29', '37 9437344069', '51 9141606987', 'Female', '337 Myriam Tunnel Suite 353\nPort Taryn, RI 47019', 'yImg25jpg', 1, '2024-03-15 12:39:47', '2024-03-15 12:39:47'),
(3, 'Arnulfo Bruen', 9, '77', 'Mittie Cartwright', 'Dr. Dusty Daniel', '2008-07-16', '92 2169974038', '29 4089631114', 'Male', '35129 Gulgowski Cliff Apt. 760\nWest Carlottamouth, NC 99383-2321', 'yImg14jpg', 1, '2024-03-15 12:39:48', '2024-03-15 12:39:48'),
(4, 'Estelle Brown', 15, '36', 'Ross Medhurst', 'Juston Brekke', '1977-03-06', '09 5633961328', '43 9134323944', 'Male', '1961 Ana Curve Suite 478\nBeerbury, WV 66356-8583', 'yImg17jpg', 1, '2024-03-15 12:39:48', '2024-03-15 12:39:48'),
(5, 'Martina Hudson', 15, '52', 'Gerald Moore', 'Prof. Lynn Prosacco V', '1978-07-24', '62 5685405041', '58 8780776054', 'Female', '8888 Rodger Land Suite 581\nRiceside, WY 79850', 'yImg21jpg', 1, '2024-03-15 12:39:48', '2024-03-15 12:39:48'),
(6, 'Prof. Deontae Lebsack DDS', 9, '62', 'Mrs. Andreane Kertzmann PhD', 'Wiley Ondricka DDS', '1990-07-14', '55 3206000866', '10 8001670472', 'Male', '63172 Buckridge Circle\nGoodwinhaven, KS 96372', 'yImg19jpg', 1, '2024-03-15 12:39:48', '2024-03-15 12:39:48'),
(7, 'Salma Schmeler', 18, '72', 'Jamie Hansen', 'John McCullough MD', '1988-05-27', '35 2662823206', '83 6645318081', 'Female', '1400 Amani Fields\nPort Othafort, GA 02302', 'yImg28jpg', 1, '2024-03-15 12:39:48', '2024-03-15 12:39:48'),
(8, 'Lilyan Mann', 17, '30', 'Katrine Harber', 'Alberta Conroy', '2005-07-20', '02 0806176325', '56 0703364252', 'Male', '72056 Volkman Loaf Apt. 569\nSouth Stephonland, WV 34634', 'yImg23jpg', 1, '2024-03-15 12:39:48', '2024-03-15 12:39:48'),
(9, 'Joe Moen PhD', 7, '20', 'Dr. Marlene Leannon', 'Marcos Kovacek', '1987-08-22', '53 7900192087', '20 2115796756', 'Male', '38446 Edmond Causeway Suite 906\nJohnsonmouth, MD 64441-2134', 'yImg24jpg', 1, '2024-03-15 12:39:48', '2024-03-15 12:39:48'),
(10, 'Rhea Hamill', 14, '65', 'Maia Balistreri', 'Bertha Streich MD', '2016-07-19', '27 2838790067', '14 6008215686', 'Female', '32522 Harvey Cliff Suite 214\nMosciskimouth, MT 57163', 'yImg26jpg', 1, '2024-03-15 12:39:48', '2024-03-15 12:39:48');

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Ashish', 'ashish@gmail.com', NULL, '$2y$12$VwP6ZrADMxRVYD/p71K.HeDaJuys1Dwv5HSpljzW.G4fPgyY6cxta', '40ac0wnVD8fLthgWRuvVq9XBxmfhoWH0cvqVdf4yNTDRa1AB4gfd5aatXm2G', '2024-03-16 10:59:18', '2024-03-16 10:59:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`classId`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`stdId`),
  ADD KEY `students_classid_foreign` (`classId`);

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
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `classId` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `stdId` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_classid_foreign` FOREIGN KEY (`classId`) REFERENCES `classes` (`classId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
