-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2021 at 07:52 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `negotiation-arena`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `created_at`) VALUES
(1, 'Anuj', 'anujjagannathan@propelurs.net', '$2y$10$n1YHcWh/HMV4hm/ZXu55o.iW8ChWMEbk2ZF8ClUFi2mziBf6dp/TG', '2021-11-01 11:19:00');

-- --------------------------------------------------------

--
-- Table structure for table `card_master`
--

CREATE TABLE `card_master` (
  `id` int(11) NOT NULL,
  `card_name` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `card_master`
--

INSERT INTO `card_master` (`id`, `card_name`, `file_name`, `status`, `created_at`) VALUES
(1, 'B15', 'B15.png', '', '2021-12-02 10:25:54');

-- --------------------------------------------------------

--
-- Table structure for table `loginhistory`
--

CREATE TABLE `loginhistory` (
  `id` int(10) NOT NULL,
  `username` varchar(250) DEFAULT NULL,
  `ipaddress` varchar(250) DEFAULT NULL,
  `Last_login` datetime DEFAULT NULL,
  `trytime` bigint(20) DEFAULT NULL,
  `platform` varchar(250) DEFAULT NULL,
  `version` varchar(250) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `playerlogin`
--

CREATE TABLE `playerlogin` (
  `id` int(10) NOT NULL,
  `username` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `arena_code` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `playerlogin`
--

INSERT INTO `playerlogin` (`id`, `username`, `email`, `arena_code`, `status`, `created_at`) VALUES
(1, 'Rohith', 'rohith@ajeyainfosol.com', '14036', 0, '2021-11-10 07:25:18'),
(2, 'Rohith', 'rohith@ajeyainfosol.com', '14036', 0, '2021-11-10 07:25:45'),
(3, 'Rohith', 'rohith@ajeyainfosol.com', '14036', 0, '2021-11-10 09:47:26');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `participant_count` varchar(255) NOT NULL,
  `event_datetime` datetime NOT NULL,
  `arena_code` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `phone`, `location`, `participant_count`, `event_datetime`, `arena_code`, `created_at`) VALUES
(1, 'Rohith', 'rohith@ajeyainfosol.com', '9600025975', 'Chennai', '4', '2021-11-25 15:20:00', '14036', '2021-11-17 06:02:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card_master`
--
ALTER TABLE `card_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loginhistory`
--
ALTER TABLE `loginhistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `playerlogin`
--
ALTER TABLE `playerlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `card_master`
--
ALTER TABLE `card_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `loginhistory`
--
ALTER TABLE `loginhistory`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `playerlogin`
--
ALTER TABLE `playerlogin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
