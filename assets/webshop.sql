-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2024 at 12:49 PM
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
-- Database: `toystore`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productcode` int(255) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `prijs` decimal(6,2) NOT NULL,
  `beschrijving` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productcode`, `naam`, `prijs`, `beschrijving`) VALUES
(1, 'Lego Stitch', 60.00, 'Dit is een lego Disney speelset van de film Lilo en Stitch deze leuke decoratie geeft een leuke toevoeging aan je huis!'),
(2, 'Winnie the Pooh Knuffel', 25.00, 'Deze schattige Winnie the Pooh geeft je een fijne nachtrust en blijft je altijd trouw!'),
(3, 'Grappige Sleutelhanger', 5.00, 'Deze hilarische sleutelhanger geeft je elke keer een lag op je gezicht als je je sleutels moet gaan gebruiken! '),
(4, 'Kinder Auto', 150.00, 'Deze leuke speel goed auto geeft elk kind een unieke buitenspeel ervaring.'),
(5, 'Racebaan', 40.00, 'Deze vette racebaan geeft een ultieme kinderervaring met levenslange speel pret!'),
(6, 'Dansende Cactus', 25.00, 'Deze dansende cactus is het leukste wat je ooit hebt gezien het is hilarisch en je hebt een leuke vriend erbij!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productcode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productcode` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
