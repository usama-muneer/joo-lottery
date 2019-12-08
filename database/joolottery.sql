-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2019 at 02:39 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `joolottery`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1001, 'root', 'toor12345');

-- --------------------------------------------------------

--
-- Table structure for table `draw`
--

CREATE TABLE `draw` (
  `id` int(11) NOT NULL,
  `date_time` date NOT NULL,
  `time` time NOT NULL,
  `number` int(11) NOT NULL,
  `entered_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `checked` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `draw`
--

INSERT INTO `draw` (`id`, `date_time`, `time`, `number`, `entered_time`, `checked`) VALUES
(20, '2019-12-07', '15:15:00', 380, '2019-12-07 19:04:48', 'Yes'),
(21, '2019-12-07', '16:45:00', 671, '2019-12-07 19:04:48', 'Yes'),
(22, '2019-12-07', '20:45:00', 804, '2019-12-07 19:04:48', 'Yes'),
(40, '2019-12-07', '13:15:00', 2874, '2019-12-07 19:08:32', 'Yes'),
(48, '2019-12-08', '13:15:00', 113, '2019-12-07 20:31:07', 'Yes'),
(49, '2019-12-08', '15:15:00', 651, '2019-12-07 20:31:13', 'No'),
(50, '2019-12-08', '20:45:00', 618, '2019-12-07 20:31:16', 'No'),
(51, '2019-12-08', '16:45:00', 1673, '2019-12-07 20:31:22', 'No');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `draw`
--
ALTER TABLE `draw`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `draw`
--
ALTER TABLE `draw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
