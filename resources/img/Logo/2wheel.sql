-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2022 at 04:28 AM
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
-- Database: `2wheel`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_data`
--

CREATE TABLE `blog_data` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `blog_data`
--

INSERT INTO `blog_data` (`id`, `title`, `content`) VALUES
(13, 'About+', '%3Csample+about%3E%0D%0A'),
(15, 'HONDA+CBR1000RR-R+FIREBLADE+SP', '%3Cp%3EWith+the+2020+Honda+Fireblade+SP+the+Japanese+firm+have+made+their+on-track+intentions+loud+and+clear.+From+its+exotic+price+tag%2C+to+its+tiny+dimensions%2C+to+the+way+the+engine+screams%2C+at+the+expense+of+the+old+bike%E2%80%99s+low-down+torque%2C+the+new+Blade+is+now+flagrantly+aimed+at+the+well-healed%2C+hardened+trackday+addict+or+racer.%3C%2Fp%3E%3Cp%3EIt%E2%80%99s+still+beautifully+appointed+but+is+now+as+single+minded+as+they+come+-+loud%2C+face-meltingly+fast+and+a+demon+in+the+corners.+You%E2%80%99ll+need+the+commitment+and+the+skill+of+a+racer+to+do+it+any+kind+of+justice%2C+which+may+limit+its+road+appeal%2C+but+Honda+want+to+win+superbike+races+and+they+might+just+have+the+tool+to+do+it.%3C%2Fp%3E');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UID` int(11) NOT NULL,
  `uhash` varchar(64) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UID`, `uhash`, `fname`, `lname`, `dob`, `email`, `password`) VALUES
(16, 'cff36a5b8b1fd42062026d7f67c3c090', 'abc8', 'abc8', '2022-12-06', 'abc8@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_data`
--
ALTER TABLE `blog_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UID`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `uhash` (`uhash`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_data`
--
ALTER TABLE `blog_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
