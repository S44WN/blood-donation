-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2022 at 04:10 AM
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
-- Database: `bld_dntn`
--

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `dob` date NOT NULL,
  `sex` varchar(10) NOT NULL,
  `bloodgroup` varchar(10) NOT NULL,
  `mobile` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `town` varchar(20) DEFAULT NULL,
  `state` varchar(30) NOT NULL DEFAULT 'Patna',
  `lastdate` timestamp NOT NULL DEFAULT '2022-12-21 18:30:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`id`, `username`, `password`, `fullname`, `dob`, `sex`, `bloodgroup`, `mobile`, `email`, `town`, `state`, `lastdate`) VALUES
(1, 'johnsmith', 'p@ssw0rd', 'John Smith', '1980-01-01', 'M', 'A pos', '123-456-7890', 'john@example.com', 'New York', 'NY', '2021-12-31 18:30:00'),
(2, 'janejohnson', 'p@ssw0rd', 'Jane Johnson', '1982-02-14', 'F', 'O neg', '123-456-7891', 'jane@example.com', 'Chicago', 'IL', '2022-02-13 18:30:00'),
(3, 'robertdoe', 'p@ssw0rd', 'Robert Doe', '1985-03-31', 'M', 'B pos', '123-456-7892', 'robert@example.com', 'Los Angeles', 'CA', '2022-03-30 18:30:00'),
(4, 'sarahmiller', 'p@ssw0rd', 'Sarah Miller', '1988-04-30', 'F', 'AB pos', '123-456-7893', 'sarah@example.com', 'Houston', 'TX', '2022-04-29 18:30:00'),
(5, 'michaelbrown', 'p@ssw0rd', 'Michael Brown', '1991-05-15', 'M', 'A neg', '123-456-7894', 'michael@example.com', 'Philadelphia', 'PA', '2022-05-14 18:30:00'),
(6, 'chriswilson', 'p@ssw0rd', 'Chris Wilson', '1995-06-01', 'M', 'O pos', '123-456-7895', 'chris@example.com', 'Seattle', 'WA', '2022-05-31 18:30:00'),
(7, 'sarahdavis', 'p@ssw0rd', 'Sarah Davis', '1998-07-14', 'F', 'B neg', '123-456-7896', 'sarah@example.com', 'Boston', 'MA', '2022-07-13 18:30:00'),
(8, 'mikemiller', 'p@ssw0rd', 'Mike Miller', '2001-08-31', 'M', 'AB neg', '123-456-7897', 'mike@example.com', 'Miami', 'FL', '2022-08-30 18:30:00'),
(9, 'jenniferbrown', 'p@ssw0rd', 'Jennifer Brown', '2004-09-30', 'F', 'A pos', '123-456-7898', 'jennifer@example.com', 'Dallas', 'TX', '2022-09-29 18:30:00'),
(10, 'davidsmith', 'p@ssw0rd', 'David Smith', '2007-10-15', 'M', 'O neg', '123-456-7899', 'david@example.com', 'San Francisco', 'CA', '2022-10-14 18:30:00'),
(11, 'emmajohnson', 'p@ssw0rd', 'Emma Johnson', '2010-11-01', 'F', 'B pos', '123-456-7900', 'emma@example.com', 'Denver', 'CO', '2022-10-31 18:30:00'),
(12, 'mattdoe', 'p@ssw0rd', 'Matt Doe', '2013-12-14', 'M', 'AB+', '123-456-7901', 'matt@example.com', 'Atlanta', 'GA', '2022-12-13 18:30:00'),
(13, 'kimberlywilson', 'p@ssw0rd', 'Kimberly Wilson', '2016-01-31', 'F', 'A neg', '123-456-7902', 'kimberly@example.com', 'Phoenix', 'AZ', '2023-01-30 18:30:00'),
(14, 'andrewdavis', 'p@ssw0rd', 'Andrew Davis', '0000-00-00', 'M', 'O pos', '123-456-7903', 'andrew@example.com', 'Portland', 'OR', '0000-00-00 00:00:00'),
(15, 'lauramiller', 'p@ssw0rd', 'Laura Miller', '2020-03-15', 'F', 'B neg', '123-456-7904', 'laura@example.com', 'Tucson', 'AZ', '2023-03-14 18:30:00'),
(16, 'johnsmith', 'p@ssw0rd', 'John Smith', '2020-04-16', 'M', 'AB neg', '123-456-7890', 'john@example.com', 'Phoenix', 'AZ', '2023-04-15 18:30:00'),
(17, 'sarahjohnson', 'p@ssw0rd', 'Sarah Johnson', '2020-05-17', 'F', 'AB neg', '123-456-7891', 'sarah@example.com', 'Mesa', 'AZ', '2023-05-16 18:30:00'),
(18, 'michaelbrown', 'p@ssw0rd', 'Michael Brown', '2020-06-18', 'M', 'AB pos', '123-456-7892', 'michael@example.com', 'Chandler', 'AZ', '2023-06-17 18:30:00'),
(19, 'katiejohnson', 'p@ssw0rd', 'Katie Johnson', '2020-07-19', 'F', 'AB pos', '123-456-7893', 'katie@example.com', 'Gilbert', 'AZ', '2023-07-18 18:30:00'),
(20, 'johnsmith2', 'p@ssw0rd', 'Johney Smith', '1980-01-01', 'M', 'A pos', '124-456-7890', 'johney@example.com', 'California', 'CA', '2021-12-31 18:30:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
