-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2022 at 12:22 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `turnir`
--

-- --------------------------------------------------------

--
-- Table structure for table `pregledn`
--

CREATE TABLE `pregledn` (
  `id` int(6) UNSIGNED NOT NULL,
  `ime` varchar(30) NOT NULL,
  `lokacija` varchar(50) NOT NULL,
  `datum` varchar(50) DEFAULT NULL,
  `opis` varchar(3000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pregledn`
--

INSERT INTO `pregledn` (`id`, `ime`, `lokacija`, `datum`, `opis`) VALUES
(1, 'Nis Combat', 'Nis, Srbija', '20.1.2023.', 'Nis Combat je bokserski turnir koji se održava u gradu Nisu, na jugu Srbije, 20. januara 2023. godine. Turnir Nis Combat osnovan je pre više od deset godina i od tada se redovno održava svake godine, privlačeći boksere iz celog regiona.\r\n\r\nU proteklih nekoliko godina, turnir Nis Combat bio je domaćin mnogim talentovanim bokserima, od kojih su neki postali profesionalci. Među najznačajnijim učesnicima i pobednicima turnira su bili Miloš Janjić, Nemanja Stojanović i Milica Nikolić.\r\n\r\nBokseri koji se takmiče na turniru Nis Combat mogu očekivati izazovan takmičarski okršaj u različitim kategorijama, od juniorske do seniorske. Turnir poštuje sve propise Međunarodnog bokserskog saveza'),
(2, 'Serbian Showdown', 'Beograd, Srbija', '15.2.2023.', 'Serbian Showdown je državni bokserski turnir koji se održava 15. februara u Beogradu. Turnir se održava pod pokroviteljstvom Bokserskog saveza Srbije i privlači najbolje boksere iz cele zemlje.\r\n\r\nNa Serbian Showdown-u se takmiče u različitim kategorijama, od juniorske do seniorske, i poštuju se sva pravila Međunarodnog bokserskog saveza. Bokseri mogu da očekuju izazovan takmičarski okršaj i priliku da se dokažu protiv najboljih u zemlji.\r\n\r\nOrganizatori turnira su Bokserski savez Srbije i lokalni bokserski klubovi u Beogradu. Sponzori turnira su neke od najpoznatijih srpskih kompanija, poput Telekoma Srbije i Jugoimporta SDPR.\r\n\r\nPosetioci turnira Serbian Showdown mogu očekivati nezaboravan dan pun bokserskih mečeva, uz dodatne aktivnosti poput degustacije hrane i muzičkih nastupa. Ulaznice se mogu kupiti preko interneta ili na blagajnama stadiona Partizana gde će se turnir održati.\r\n\r\nPozivamo sve ljubitelje boksa da dođu i uživaju u turniru Serbian Showdown i da podrže srpske boksere u njihovim nastojanjima da se dokažu na međunarodnom nivou.'),
(3, 'Novi Sad Brawl', 'Novi Sad, Srbija', '20.4.2023.', 'Novi Sad Brawl je bokserski turnir koji se održava u gradu Novom Sadu u aprilu 2023. godine. Turnir je organizovan od strane Bokserskog saveza Vojvodine i privlači najbolje boksere iz cele regije.\r\n\r\nNa Novi Sad Brawl-u se takmiče u različitim kategorijama, od juniorske do seniorske, i poštuju se sva pravila Međunarodnog bokserskog saveza. Bokseri mogu da očekuju izazovan takmičarski okršaj i priliku da se dokažu protiv najboljih u regiji.\r\n\r\nOrganizatori turnira su Bokserski savez Vojvodine i lokalni bokserski klubovi u Novom Sadu. Sponzori turnira su neke od najpoznatijih kompanija iz Vojvodine, poput Agrokor i SBB.\r\n\r\nPosetioci turnira Novi Sad Brawl mogu očekivati nezaboravan dan pun bokserskih mečeva, uz dodatne aktivnosti poput degustacije hrane i muzičkih nastupa. Ulaznice se mogu kupiti preko interneta ili na blagajnama sportske hale Spens gde će se turnir održati.\r\n\r\nPozivamo sve ljubitelje boksa da dođu i uživaju u turniru Novi Sad Brawl i da podrže boksere iz Vojvodine u njihovim nastojanjima da se dokažu na međunarodnom nivou.');

-- --------------------------------------------------------

--
-- Table structure for table `ucesnik`
--

CREATE TABLE `ucesnik` (
  `id` int(6) UNSIGNED NOT NULL,
  `id_takmicenja` int(3) NOT NULL,
  `ime` varchar(30) NOT NULL,
  `prezime` varchar(30) NOT NULL,
  `klub` varchar(50) DEFAULT NULL,
  `kilaza` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ucesnik`
--

INSERT INTO `ucesnik` (`id`, `id_takmicenja`, `ime`, `prezime`, `klub`, `kilaza`) VALUES
(1, 1, 'Nikola', 'Marilovic', 'BK Kraljevo', 77),
(2, 1, 'Lazar', 'Marilovic', 'BK KVS', 73),
(3, 1, 'Maksim', 'Milic', 'BK Novi Sad', 66),
(4, 1, 'Ogi', 'Markovic', 'BK Sirca', 71),
(5, 2, 'Mihajlo', 'Mikic', 'BK Krusevac', 82);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pregledn`
--
ALTER TABLE `pregledn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ucesnik`
--
ALTER TABLE `ucesnik`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pregledn`
--
ALTER TABLE `pregledn`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ucesnik`
--
ALTER TABLE `ucesnik`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
