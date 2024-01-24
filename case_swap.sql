-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2024 at 11:50 AM
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
-- Database: `case_swap`
--

-- --------------------------------------------------------

--
-- Table structure for table `alte_case`
--

CREATE TABLE `alte_case` (
  `id_case` int(11) NOT NULL,
  `title` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `tara` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `oras` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `suprafata` bigint(255) NOT NULL,
  `camere` int(255) NOT NULL,
  `caut_oras` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `alte_case`
--

INSERT INTO `alte_case` (`id_case`, `title`, `tara`, `oras`, `suprafata`, `camere`, `caut_oras`) VALUES
(23, 'garsoniera', 'Moldova', 'Chisinau', 30, 4, 'Bucuresti'),
(24, 'apartament', 'Romania', 'Bucuresti', 60, 2, 'Cluj-Napoca'),
(25, 'casa cu gradina', 'Spania', 'Barcelona', 150, 5, 'Madrid'),
(26, 'villa de lux', 'Franta', 'Paris', 300, 8, 'Nisa'),
(27, 'studio', 'Italia', 'Roma', 40, 1, 'Milano'),
(28, 'penthouse', 'Germania', 'Berlin', 120, 3, 'Hamburg'),
(29, 'loft', 'Olanda', 'Amsterdam', 80, 2, 'Rotterdam'),
(30, 'casuta rurala', 'Romania', 'Brasov', 100, 4, 'Sibiu'),
(31, 'apartament modern', 'Spania', 'Madrid', 70, 2, 'Barcelona'),
(32, 'casa de vacanta', 'Grecia', 'Atena', 200, 6, 'Salonic'),
(33, 'duplex', 'Italia', 'Milano', 90, 3, 'Roma'),
(34, 'garsoniera renovata', 'Romania', 'Timisoara', 35, 1, 'Cluj-Napoca'),
(35, 'apartament cu terasa', 'Franta', 'Nisa', 80, 2, 'Paris'),
(36, 'casa in regim hotelier', 'Spania', 'Barcelona', 250, 7, 'Valencia'),
(37, 'loft industrial', 'Germania', 'Hamburg', 110, 3, 'Berlin');

-- --------------------------------------------------------

--
-- Table structure for table `casute`
--

CREATE TABLE `casute` (
  `id` int(255) NOT NULL,
  `locatie` varchar(255) NOT NULL,
  `tip` varchar(255) NOT NULL,
  `suprafata` varchar(255) NOT NULL,
  `camere` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `casute`
--

INSERT INTO `casute` (`id`, `locatie`, `tip`, `suprafata`, `camere`) VALUES
(1, 'Republica Moldova', 'garsoniera', '30', 4),
(2, 'Bucuresti', 'apartament', '80', 3),
(3, 'Cluj-Napoca', 'casa', '150', 5),
(4, 'Iasi', 'garsoniera', '40', 2);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nume` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mesaj` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `ID_transaction` int(11) NOT NULL,
  `Date_start` date NOT NULL,
  `Date_end` date DEFAULT NULL,
  `id_case` int(11) NOT NULL,
  `ID_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID_user` int(11) NOT NULL,
  `username` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `password` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `email` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID_user`, `username`, `password`, `email`) VALUES
(28, 'admin', '$2y$10$1.04cbdk4Q9t.WP6etTUguzV4ph9wLB42ROYCc5nHaeBkYcCrVZ2K', 'admin@example.com'),
(30, 'admin123', '$2y$10$24ENmuF0npLIt9SMMsO//O0rX6uQsjm7EO4SCMKi5hMPHvgkfOLTm', 'admin@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alte_case`
--
ALTER TABLE `alte_case`
  ADD PRIMARY KEY (`id_case`),
  ADD UNIQUE KEY `ID_book` (`id_case`);

--
-- Indexes for table `casute`
--
ALTER TABLE `casute`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`ID_transaction`),
  ADD KEY `transaction_book_fk` (`id_case`),
  ADD KEY `transaction_user_fk` (`ID_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID_user`),
  ADD UNIQUE KEY `ID_user` (`ID_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alte_case`
--
ALTER TABLE `alte_case`
  MODIFY `id_case` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `casute`
--
ALTER TABLE `casute`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `ID_transaction` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transaction_book_fk` FOREIGN KEY (`id_case`) REFERENCES `alte_case` (`id_case`) ON UPDATE CASCADE,
  ADD CONSTRAINT `transaction_user_fk` FOREIGN KEY (`ID_user`) REFERENCES `users` (`ID_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
