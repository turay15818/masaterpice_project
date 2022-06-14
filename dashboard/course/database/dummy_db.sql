-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2021 at 08:31 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dummy_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `birthdate` date NOT NULL,
  `added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `first_name`, `last_name`, `email`, `birthdate`, `added`) VALUES
(1, 'Emily', 'Hegmann', 'janis.walker@example.org', '1979-03-16', '1976-04-05 11:59:54'),
(2, 'Miracle', 'Anderson', 'grady.arlo@example.net', '1975-02-02', '2006-04-13 11:34:40'),
(3, 'Kendra', 'Raynor', 'lexi.tremblay@example.net', '1979-03-19', '1987-11-17 14:51:03'),
(4, 'Simone', 'Huel', 'nikolas.little@example.net', '1971-09-30', '2006-05-13 21:56:04'),
(5, 'Ena', 'Harris', 'vicky.flatley@example.org', '2010-10-27', '2004-12-06 06:04:25'),
(6, 'Emiliano', 'Kshlerin', 'sigmund.schoen@example.org', '1979-04-20', '2009-12-10 05:42:56'),
(7, 'Jedediah', 'Hermiston', 'jankunding@example.org', '1976-08-01', '1997-09-06 03:35:39'),
(8, 'Garfield', 'Terry', 'darrion15@example.net', '1974-02-09', '1979-07-15 10:44:20'),
(9, 'Rhea', 'Keebler', 'brandon81@example.net', '2020-08-27', '2007-11-01 16:06:43'),
(10, 'Reid', 'Hegmann', 'torphy.erika@example.net', '2008-03-15', '1983-07-07 20:01:45'),
(11, 'Aubrey', 'Tremblay', 'kennith18@example.com', '1974-09-30', '2012-02-03 10:12:04'),
(12, 'Avery', 'Jenkins', 'jennyfer61@example.org', '1979-01-17', '1977-02-22 11:54:08'),
(13, 'Anika', 'Kihn', 'reinger.hannah@example.net', '1996-05-02', '1984-04-15 02:29:15'),
(14, 'Ocie', 'Wiegand', 'mariane31@example.net', '1974-05-19', '2013-11-20 22:13:15'),
(15, 'Marty', 'Nader', 'mosciski.hildegard@example.net', '2013-01-19', '1983-08-09 22:20:04'),
(16, 'Brent', 'Schmeler', 'ihermiston@example.com', '2002-02-22', '2014-05-01 20:54:14'),
(17, 'Arvilla', 'Adams', 'allen15@example.com', '2021-03-25', '1979-09-01 02:04:34'),
(18, 'Mollie', 'Conroy', 'arielle47@example.net', '1981-09-21', '1987-08-10 10:39:41'),
(19, 'Edd', 'Raynor', 'funk.kimberly@example.org', '1979-08-26', '2003-10-22 22:16:12'),
(20, 'Esmeralda', 'Emard', 'qauer@example.org', '2018-03-14', '1979-01-10 21:21:01'),
(21, 'Dion', 'O\'Hara', 'kip83@example.net', '1980-05-14', '1972-02-10 08:03:52'),
(22, 'Patience', 'Hoeger', 'carter.cecelia@example.net', '1978-07-19', '2016-06-25 17:21:40'),
(23, 'Pearl', 'Shanahan', 'nyasia.white@example.org', '1994-07-14', '1988-09-06 21:30:13'),
(24, 'Janet', 'Bogisich', 'shegmann@example.org', '2012-02-01', '2012-08-06 01:13:56'),
(25, 'Josiane', 'Toy', 'dave.boehm@example.com', '2019-11-14', '2014-03-22 10:43:13'),
(26, 'Adela', 'Lockman', 'ezra.murazik@example.net', '2004-07-01', '2019-02-02 16:10:32'),
(27, 'Winston', 'Jakubowski', 'lemuel77@example.com', '1971-08-08', '1970-03-18 03:29:42'),
(28, 'Travon', 'Rohan', 'orin.langosh@example.org', '1970-08-16', '2016-06-21 15:44:13'),
(29, 'Susie', 'Schmitt', 'theodora59@example.com', '1990-01-27', '1985-08-16 04:18:50'),
(30, 'Roma', 'Friesen', 'trey.turcotte@example.com', '1987-08-24', '1991-02-22 12:57:15'),
(31, 'Gerard', 'Schmitt', 'bonita75@example.net', '2001-07-08', '2020-12-09 23:25:19'),
(32, 'Retha', 'Ryan', 'cierra40@example.org', '1975-08-29', '2019-09-04 18:54:14'),
(33, 'Irwin', 'Reinger', 'chasity.steuber@example.com', '2000-02-19', '2010-11-20 04:27:43'),
(34, 'Cletus', 'Bernhard', 'sandra.stiedemann@example.com', '1974-04-05', '1990-02-15 22:04:40'),
(35, 'Amparo', 'Marks', 'sawayn.juston@example.net', '1985-02-02', '1981-09-12 03:10:01'),
(36, 'Dayne', 'Hagenes', 'reuben27@example.com', '2011-06-05', '2014-07-01 20:58:27'),
(37, 'Mose', 'Stehr', 'josh.abshire@example.com', '1989-10-30', '1973-03-31 18:41:15'),
(38, 'Arch', 'Stoltenberg', 'collier.janis@example.com', '1998-02-21', '2011-04-30 18:43:15'),
(39, 'Skye', 'Thompson', 'kylie.dare@example.net', '1987-10-01', '2007-08-06 14:30:21'),
(40, 'Bradley', 'Bernier', 'kris.ernie@example.com', '1981-03-17', '1988-01-27 19:24:33'),
(41, 'Lenora', 'Greenfelder', 'collins.georgianna@example.net', '1994-12-25', '1996-04-19 00:03:56'),
(42, 'Verlie', 'Legros', 'rkunze@example.org', '1980-08-16', '1973-05-12 17:11:05'),
(43, 'Marco', 'Dickens', 'dan37@example.net', '1976-05-21', '1994-04-02 06:32:44'),
(44, 'Toby', 'Steuber', 'kelly08@example.org', '2016-05-15', '1973-03-11 19:48:08'),
(45, 'Bernie', 'Kilback', 'tyson15@example.org', '1990-04-18', '1976-09-24 19:08:26'),
(46, 'Gretchen', 'Gleichner', 'nspencer@example.net', '1983-09-08', '1979-01-31 23:09:16'),
(47, 'Madelyn', 'Swaniawski', 'cassie95@example.net', '1993-09-08', '1976-03-23 01:34:13'),
(48, 'Ashleigh', 'Rohan', 'jeramie.murphy@example.net', '1996-12-14', '2011-09-25 21:39:31'),
(49, 'Arely', 'Douglas', 'leora97@example.org', '1990-05-18', '1971-09-22 08:06:48'),
(50, 'Abraham', 'Gutkowski', 'lklein@example.net', '1989-04-17', '1973-12-14 21:29:34'),
(51, 'Joaquin', 'Reilly', 'vallie.russel@example.com', '1992-08-17', '1978-03-03 06:28:19'),
(52, 'Phyllis', 'Mueller', 'o\'reilly.luella@example.com', '1997-12-02', '1990-03-18 06:29:31'),
(53, 'Franz', 'Lesch', 'dratke@example.net', '1993-10-20', '2010-03-28 11:46:55'),
(54, 'Tyson', 'Kohler', 'fpfeffer@example.org', '1980-05-27', '1970-03-23 13:51:55'),
(55, 'Toby', 'Beahan', 'powlowski.malachi@example.org', '1972-07-22', '2018-07-04 13:06:30'),
(56, 'Myrtis', 'Weissnat', 'strosin.viva@example.org', '2012-04-19', '1978-07-05 22:37:00'),
(57, 'Keyon', 'Medhurst', 'nmorar@example.org', '1973-10-28', '2020-11-11 11:40:13'),
(58, 'Viola', 'Prosacco', 'beatrice.terry@example.com', '1976-04-01', '1984-01-20 14:50:17'),
(59, 'Christopher', 'Johnson', 'elouise.abbott@example.com', '2019-04-05', '2008-06-21 16:02:58'),
(60, 'Antwan', 'Mills', 'zankunding@example.org', '1982-04-14', '1984-09-05 21:44:05'),
(61, 'Izabella', 'O\'Keefe', 'fcartwright@example.org', '1980-05-23', '2020-06-29 18:46:35'),
(62, 'Leann', 'Parker', 'anderson.blick@example.net', '1973-05-05', '2003-03-13 00:25:18'),
(63, 'Armani', 'Boehm', 'estamm@example.org', '1981-04-21', '1972-10-30 09:00:16'),
(64, 'Brionna', 'Bernier', 'hammes.lindsey@example.net', '2021-08-10', '1975-03-18 11:06:27'),
(65, 'Rogers', 'Swift', 'bbayer@example.net', '2000-10-01', '1987-06-21 11:23:06'),
(66, 'Stephon', 'Rempel', 'wilderman.savion@example.com', '1996-04-09', '1983-03-27 09:31:28'),
(67, 'Janiya', 'Marquardt', 'mitchell.waylon@example.net', '1984-08-21', '1977-06-10 03:47:07'),
(68, 'Ansel', 'Ferry', 'albina80@example.org', '2012-06-21', '2007-05-15 19:54:39'),
(69, 'Mohammad', 'Wisoky', 'sgorczany@example.org', '1979-04-09', '1985-12-06 13:01:43'),
(70, 'Lonie', 'Veum', 'rhianna43@example.net', '2018-11-19', '1975-09-09 21:36:03'),
(71, 'Marvin', 'Brekke', 'juston65@example.com', '2018-04-30', '1996-12-28 17:49:21'),
(72, 'Jazmyn', 'Schamberger', 'elaina80@example.com', '1985-04-14', '1992-10-15 11:13:08'),
(73, 'Otilia', 'Koelpin', 'erdman.loma@example.com', '1977-03-03', '1982-05-02 01:47:41'),
(74, 'Lauretta', 'Kris', 'chelsea.mcclure@example.com', '1983-02-14', '2006-03-06 05:40:07'),
(75, 'Mateo', 'Funk', 'schroeder.anjali@example.org', '2001-05-27', '1998-09-26 03:11:34'),
(76, 'Ova', 'Zemlak', 'melyssa90@example.com', '2011-04-01', '2021-03-20 00:00:59'),
(77, 'Wallace', 'Friesen', 'tkoepp@example.com', '1990-04-18', '1972-02-20 19:20:41'),
(78, 'Meghan', 'Rosenbaum', 'jerrold62@example.org', '2018-03-08', '2013-05-09 20:32:50'),
(79, 'Letitia', 'Nienow', 'agustina.boyer@example.com', '2005-02-11', '2001-11-01 04:21:28'),
(80, 'Mikayla', 'Dietrich', 'vicky61@example.net', '1974-07-11', '1981-04-01 07:37:20'),
(81, 'Shanie', 'Collins', 'yryan@example.org', '2005-07-21', '1980-09-04 01:01:28'),
(82, 'Kody', 'Walker', 'devonte.kessler@example.org', '2014-02-08', '2005-05-11 08:45:35'),
(83, 'Estella', 'Brown', 'clakin@example.com', '1977-11-08', '2017-06-22 12:08:09'),
(84, 'Liana', 'McClure', 'windler.nova@example.com', '1972-08-28', '1970-02-04 06:53:43'),
(85, 'Nikko', 'Cormier', 'emard.clarabelle@example.com', '2020-02-12', '2002-04-28 06:40:52'),
(86, 'Nora', 'Hilpert', 'afton02@example.com', '1970-10-21', '1970-09-28 15:52:19'),
(87, 'Gunner', 'Medhurst', 'zoe.nienow@example.com', '1997-10-10', '2001-08-03 16:41:29'),
(88, 'Stone', 'Quitzon', 'reinger.isabel@example.net', '1988-06-20', '2010-04-15 06:19:32'),
(89, 'Charles', 'Kessler', 'tillman.goyette@example.com', '1996-05-27', '1995-12-12 00:17:07'),
(90, 'Bryana', 'Goldner', 'jones.mia@example.com', '1998-10-14', '1977-12-23 02:22:54'),
(91, 'Missouri', 'Moore', 'yparker@example.com', '2018-06-24', '2016-01-19 17:34:18'),
(92, 'Geo', 'Koepp', 'pfadel@example.com', '2005-09-03', '1994-05-07 20:50:47'),
(93, 'Maxine', 'Fisher', 'fanny.dickens@example.net', '1988-08-27', '1997-06-23 16:09:05'),
(94, 'Amelia', 'Reilly', 'clubowitz@example.com', '1996-11-17', '2002-07-30 23:27:57'),
(95, 'Ilene', 'Bruen', 'yankunding@example.org', '1997-06-12', '2017-03-13 20:20:25'),
(96, 'Maddison', 'Turcotte', 'boyd.hayes@example.org', '2021-08-09', '1972-08-18 14:13:36'),
(97, 'Neha', 'Denesik', 'mckenzie.taya@example.com', '1999-02-15', '1992-02-08 15:21:11'),
(98, 'Paris', 'Swift', 'ryleigh.krajcik@example.net', '2012-02-22', '2003-06-12 21:45:18'),
(99, 'Frederic', 'Shields', 'keshaun.walsh@example.com', '1994-12-10', '2004-02-25 18:37:24'),
(100, 'Nettie', 'Gleichner', 'sgorczany@example.com', '1990-03-18', '1993-09-11 01:39:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
