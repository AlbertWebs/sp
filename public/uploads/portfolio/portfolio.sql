-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 16, 2020 at 09:37 PM
-- Server version: 5.7.31-0ubuntu0.18.04.1
-- PHP Version: 7.1.33-16+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stagepass`
--

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slung` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orders` int(11) DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `audience` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `venue` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` tinyint(4) DEFAULT '0',
  `image_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_three` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_four` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_five` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_six` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_seven` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_eight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_nine` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_ten` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `title`, `slung`, `orders`, `content`, `audience`, `venue`, `video`, `image_one`, `image_two`, `image_three`, `image_four`, `image_five`, `image_six`, `image_seven`, `image_eight`, `image_nine`, `image_ten`, `service`, `client`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Africa CEO Forum', 'africa-ceo-forum', 2, NULL, '2000', 'Rwanda', 1, 'ACF1.jpg', 'ACF3.jpg', 'ACF2.jpg', 'ACF4.jpg', 'ACF5.jpg', 'ACF6.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 'JhR88idXNAg', NULL, NULL),
(2, 'Safaricom full year results year 2019-2020', 'safaricom-full-year-results-year-2019-2020', 3, NULL, '1000', 'Nairobi', 0, 'IMG_6982.JPG', 'IMG_6990.JPG', 'IMG_6991.JPG', 'IMG_7009.JPG', 'IMG_7052.JPG', 'IMG_7057.JPG', NULL, NULL, NULL, NULL, '1', 'Safaricom', NULL, '2020-05-04 14:32:04', '2020-05-04 14:32:04'),
(3, 'Citam scenic design and audiovisual technology', 'citam-scenic-design-and-audiovisual-technology', 4, NULL, '1000', 'Nairobi', 0, 'IMG_7102.JPG', 'IMG_7103.JPG', 'IMG_7104.JPG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Citam', NULL, '2020-05-04 14:32:34', '2020-05-04 14:32:34'),
(4, 'Safaricom @19 Celebration', 'safaricom-at-19-celebration', 5, NULL, '2000', 'Nairobi', 0, '2019-10-3112:50:22imageIMG_4646.JPG', '2019-10-3112:50:22imageIMG_4636.JPG', '2019-10-3112:50:22imageIMG_4630.JPG', '2019-10-3112:50:22imageIMG_4629.JPG', '2019-10-3112:50:22imageIMG_4647.JPG', NULL, NULL, NULL, NULL, NULL, '1', 'Safaricom PLC', NULL, '2019-10-31 09:50:22', '2019-10-31 09:50:22'),
(5, 'Multichoice Talent Factory Launch Event', 'multichoice-talent-factory-launch-event', 7, NULL, '400', 'Nairobi', 0, 't5.jpg', 't2.jpg', 't3.jpg', 't4.jpg', 't1.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Praise Atmosphere Event', 'praise-atmosphere-event', 20, NULL, '5000', 'Nairobi', 0, 'praise3.jpg', 'p2.jpg', 'praise1.jpg', 'praise2.jpg', 'p1.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Ecobank Launch Event', 'ecobank-launch-event', 19, NULL, '500', 'Nairobi', 0, 'e4.jpg', 'e2.jpg', 'e3.jpg', 'e1.jpg', 'e5.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'EY Entrepreneur of the Year', 'ey-entrepreneur-of-the-year', 18, NULL, '500', 'Nairobi', 1, 'ey1.jpg', 'ey2.jpg', 'ey3.jpg', NULL, 'ey5.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'NQ4odbHAWv0', NULL, NULL),
(9, 'Equity Bank Finserve Launch Event', 'equity-bank-finserve-launch-event', 17, NULL, '500', 'Nairobi', 0, 'finserve.jpg', 'fi2.jpg', 'fin3.jpg', 'fi1.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'World Bank Africa SME', 'world-bank-africa-sme', 16, NULL, '500', 'Nairobi', 0, 'NEW-25.jpg', 'sm2.jpg', 'sm3.jpg', 'NEW-09.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'WHO Global Management Meeting', 'who-global-management-meeting', 15, NULL, '500', 'Nairobi', 0, 'who1.jpg', 'who2.jpg', 'who3.jpg', 'who4.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Pamoja Concert', 'pamoja-concert', 14, NULL, '25000', 'Eldoret', 0, 'pamoja1.jpg', 'p3.jpg', 'pamoja2.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'Everton VS Kariobangi Sharks', 'everton-vs-kariobangi-sharks', 6, NULL, '75000', 'Nairobi', 1, '2019-07-2415:30:32imagephoto_2019-07-24_17-10-20.jpg', '2019-07-2415:30:32imagephoto_2019-07-24_17-09-41.jpg', '2019-07-2415:30:32imagephoto_2019-07-24_17-10-02.jpg', '2019-07-2415:30:32imagephoto_2019-07-24_17-10-29.jpg', '2019-07-2415:30:32imagephoto_2019-07-24_17-10-33.jpg', NULL, NULL, NULL, NULL, NULL, '1', 'Everton VS Kariobangi Sharks', 'nL4KKS2iw4o', '2019-07-24 11:54:53', '2019-07-24 11:54:53'),
(14, 'Maisha Magic Meet and Greet', 'maisha-magic-meet-and-greet', 13, NULL, '4000', 'Nairobi', 0, '2019-07-2415:33:24imagephoto_2019-07-24_17-18-08.jpg', '2019-07-2415:33:24imagephoto_2019-07-24_17-17-03.jpg', '2019-07-2415:33:24imagephoto_2019-07-24_17-18-01.jpg', '2019-07-2415:33:24imagephoto_2019-07-24_17-18-13.jpg', '2019-07-2415:33:24imagephoto_2019-07-24_17-18-18.jpg', NULL, NULL, NULL, NULL, NULL, '1', 'Multichoice', NULL, '2019-07-24 11:55:49', '2019-07-24 11:55:49'),
(16, 'Game of Thrones Movie Premier Event', 'game-of-thrones-movie-premier-event', 8, NULL, '800', 'Nairobi', 0, 'g1.jpg', 'g2.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Multichoice', NULL, NULL, NULL),
(17, 'Future of Food', 'future-of-food', 12, NULL, '500', 'Nairobi', 0, 'f1.jpg', 'f2.jpg', 'food1.jpg', 'food3.jpg', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'SportPesa 5th Year Anniversary Event', 'sportpesa-5th-year-anniversary-event', 11, NULL, '1000', 'Nairobi', 0, 's1.jpg', 's2.jpg', 'sport3.jpg', 'sport1.jpg', 'sport2.jpg', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'SOAR Africa', 'soar-africa', 10, NULL, '20000', 'Nairobi', 1, '2019-09-1006:22:08image2019-09-1005:57:06imagephoto_2019-09-10_08-22-09.jpg', '2019-09-1005:56:09imagephoto_2019-09-10_08-20-19.jpg', '2019-09-1005:56:09imagephoto_2019-09-10_08-21-52.jpg', '2019-09-1005:56:09imagephoto_2019-09-10_08-22-04.jpg', '2019-09-1005:57:06imagephoto_2019-09-10_08-22-51.jpg', 'SOAR_ONE.JPG', 'SOAR_TWO.JPG', 'SOAR_THREE.JPG', 'SOAR_FOUR.JPG', NULL, '1', 'SOAR Africa', 'oY-1DhN1GSY', '2019-09-10 09:56:09', '2019-09-10 09:56:09'),
(22, 'KCB Simba Awards', 'kcb-simba-awards', 9, NULL, '1000', 'Nairobi', 0, 'KCB-1.jpg', 'KCB-4.jpg', 'KCB-6.jpg', 'KCB-2.jpg', 'KCB-5.jpg', 'KCB-3.jpg', 'KCB-7.jpg', 'KCB-8.jpg', NULL, NULL, '1', 'KCB Group', NULL, '2019-12-17 02:54:58', '2019-12-17 02:54:58'),
(23, 'Safaricom AGM virtual event', 'safaricom-agm-virtual-event', 2, NULL, 'n/a', 'Nairobi', 0, 'SAF-01.jpg', 'SAF-06.jpg', 'SAF-04.jpg', 'SAF-08.jpg', 'SAF-09.jpg', 'SAF-11.jpg', 'SAF-12.jpg', NULL, NULL, NULL, '1', 'Safaricom', NULL, '2020-07-31 19:19:47', '2020-07-31 19:19:47'),
(24, 'Safaricom at 20 Celebration', NULL, 1, NULL, 'n/a', 'Safaricom', 0, '2020-12-1619:22:55image218E874D-8C82-4347-8BCF-1EB280872A81-min.jpg', '2020-12-1619:22:55image1BEB1DF1-6AB0-4202-8B5D-BBFF08DE58C2-min.jpg', '2020-12-1619:22:55image77890DA7-DBF7-48A6-AA59-F21E182B0C64-min.jpg', '2020-12-1619:22:55image83D1068A-3582-453F-95E6-E45C53A29CEC-min.jpg', '2020-12-1619:22:55image781BB65C-F884-4DAF-B516-2CC1135032B6-min.jpeg', NULL, NULL, NULL, NULL, NULL, '1', 'Safaricom', NULL, '2020-12-16 16:22:55', '2020-12-16 16:22:55'),
(25, 'Safaricom full year results year 2020-2021', NULL, 1, NULL, 'n/a', 'Safaricom', 0, '2020-12-1619:25:30image1EC2CF30-2FED-4727-B396-1CB5CD91AB56.jpeg', '2020-12-1619:25:30image819002F8-F77A-4594-8837-1F68FF9165EB.jpeg', '2020-12-1619:25:30imageD9EA06C3-AF3A-4611-B795-8D5755AAA315.jpeg', '2020-12-1619:25:30image5DFD1BAC-B5E9-4C9D-9DAE-C3C033CAC475.jpeg', '2020-12-1619:25:30imageEF34C0DF-6BE3-4537-80CA-8FD09D767854.jpeg', NULL, NULL, NULL, NULL, NULL, '1', 'Safaricom', NULL, '2020-12-16 16:25:30', '2020-12-16 16:25:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
