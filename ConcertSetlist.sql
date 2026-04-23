-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 23, 2026 at 05:09 AM
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
-- Database: `ConcertSetlist`
--

-- --------------------------------------------------------

--
-- Table structure for table `setlist`
--

CREATE TABLE `setlist` (
  `id` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `song` varchar(50) NOT NULL,
  `album` varchar(50) NOT NULL,
  `artist` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `setlist`
--

INSERT INTO `setlist` (`id`, `position`, `song`, `album`, `artist`) VALUES
(15, 2, 'The Man Who Sold the World', 'The Man Who Sold the World', 'David Bowie'),
(16, 3, '21st Century Schizoid Man', 'In the Court of the Crimson King', 'King Crimson'),
(17, 1, 'Something in the Way', 'Nevermind', 'Nirvana');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `setlist`
--
ALTER TABLE `setlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `setlist`
--
ALTER TABLE `setlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
