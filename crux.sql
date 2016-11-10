-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2016 at 03:18 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crux`
--

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE `assets` (
  `assetID` int(10) UNSIGNED NOT NULL,
  `assetName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `assetDescription` text COLLATE utf8_unicode_ci NOT NULL,
  `assetType` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `assetLocation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `assetStatus` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `assetRemarks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `assetDepartment` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `assets`
--

INSERT INTO `assets` (`assetID`, `assetName`, `assetDescription`, `assetType`, `assetLocation`, `assetStatus`, `assetRemarks`, `assetDepartment`) VALUES
(3111, 'Red Rhino', 'Use to put out fire', 'Vehicle', 'Queenstown', 'Currently putting out fire', 'None', 'SCDF'),
(4999, 'Water Pump Veh', 'Water pump vechicle to drain water in drains', 'Vehicle', 'Jurong', 'On the move to Orchard', 'None', 'NEA');

-- --------------------------------------------------------

--
-- Table structure for table `crisis`
--

CREATE TABLE `crisis` (
  `caseID` int(10) UNSIGNED NOT NULL,
  `crisisName` text COLLATE utf8_unicode_ci NOT NULL,
  `crisisCategory` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `crisisDescription` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `crisisLocation` text COLLATE utf8_unicode_ci NOT NULL,
  `crisisRemarks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `crisisLevel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `crisisLoggedBy` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `crisisDateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `incidentreports`
--

CREATE TABLE `incidentreports` (
  `caseID` int(10) UNSIGNED NOT NULL,
  `incidentName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `incidentCategory` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `incidentLocation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remarks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alertLevel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `loggedBy` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `datetimeOfIncident` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `markers`
--

CREATE TABLE `markers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lat` double(8,2) NOT NULL,
  `lng` double(8,2) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `markers`
--

INSERT INTO `markers` (`id`, `name`, `address`, `lat`, `lng`, `type`) VALUES
(22, 'Major Fire in Chinese Garden', 'Chinese garden', 1.34, 103.73, 'Crisis'),
(52, 'Fire in Ang Mo Kio', 'AMK', 1.37, 103.85, 'Crisis'),
(62, 'Flood in Orchard', 'Orchard', 1.30, 103.84, 'Crisis'),
(3111, 'Red Rhino', 'Queenstown', 1.29, 103.79, 'Asset'),
(4999, 'Water Pump Veh', 'Jurong', 1.33, 103.74, 'Asset');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2016_10_17_203655_create_users_table', 1),
(2, '2016_10_19_150018_create_incident_reports_table', 1),
(3, '2016_10_19_184941_create_crisis_table', 1),
(4, '2016_10_20_121154_create_assets_table', 1),
(5, '2016_11_05_233923_create_markers_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
  `post` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `post`) VALUES
(1, 'jianwei', 'jianwei1995@hotmail.com', '$2y$10$4kgtL38nnY7xxvXriN.zKeFJN7kspQB.LAlfurbCIIA6M77ZibFT.', 1, '6593829359'),
(2, 'john', 'johnlittle123@hotmail.com', '$2y$10$iicwn1duNNtPhpMHqCJgbuPR8mko/CLAMSMMMDV8LfTCZxeBMhfbm', 2, '6593829389'),
(3, 'jason', 'jasonsee@hotmail.com', '$2y$10$jWlnSJDnIn9fE0VAvJRDmOgL3oxkSf3ZoCqWQzErvsCt77QxqxRiu', 3, '6593829379'),
(4, 'guojun', 'guojun92@hotmail.com', '$2y$10$U8rQLEGVHRn6rpurRXq7l.eaTt9FsuMBFqtw4gtXjyHBxMvT5vc4u', 4, '6593829369'),
(5, 'zhiyang', 'zhiyang93@hotmail.com', '$2y$10$ZQmhp3IBNEIbOSUewGG7MO4EPgPNN09q7ARpCY/LaTg0TFZIFLlHa', 5, '6593829349'),
(6, 'gen', 'xiaogen94@hotmail.com', '$2y$10$FqpfhDkRUt4ukF0ajx4GsuBMrvf5JmfT/dvIt3SeL.Bvxo6Uhrygu', 6, '6593829399'),
(7, 'thomas', 'thomas@hotmail.com', '$2y$10$kFm/eI8IVUgP.jQwcVFn6eEaJwClIpbZpoLWL.DrbPcXWN73D.Sj.', 7, '6593829339'),
(8, 'ghost', 'ghost@hotmail.com', '$2y$10$eUHAG.596fTAdZf1/ZAGmuAFwF7DSUSza.CVbko1behF1OufNFHM2', 8, '6593829329'),
(9, 'kh', 'khgoh22@hotmail.com', '$2y$10$bLRThxgB5oGt1jYO2PXSn.CrF0NtQJsO/sbZazpKfLZw83MNj1vyC', 9, '6593829319');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assets`
--
ALTER TABLE `assets`
  ADD PRIMARY KEY (`assetID`);

--
-- Indexes for table `crisis`
--
ALTER TABLE `crisis`
  ADD PRIMARY KEY (`caseID`);

--
-- Indexes for table `incidentreports`
--
ALTER TABLE `incidentreports`
  ADD PRIMARY KEY (`caseID`);

--
-- Indexes for table `markers`
--
ALTER TABLE `markers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_id_unique` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assets`
--
ALTER TABLE `assets`
  MODIFY `assetID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5000;
--
-- AUTO_INCREMENT for table `crisis`
--
ALTER TABLE `crisis`
  MODIFY `caseID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `incidentreports`
--
ALTER TABLE `incidentreports`
  MODIFY `caseID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `markers`
--
ALTER TABLE `markers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5000;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
