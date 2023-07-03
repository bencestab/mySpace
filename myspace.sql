-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Jul 03, 2023 at 08:03 PM
-- Server version: 8.0.33
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myspace_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `cont_id` int NOT NULL,
  `cont_title` varchar(255) NOT NULL,
  `cont_url` varchar(255) NOT NULL,
  `cont_img` varchar(255) NOT NULL,
  `cont_content` text NOT NULL,
  `cont_creator` int NOT NULL,
  `cont_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cont_state` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`cont_id`, `cont_title`, `cont_url`, `cont_img`, `cont_content`, `cont_creator`, `cont_create`, `cont_state`) VALUES
(1, 'Falcon 9 launches ESA’s Euclid space telescope', 'falcon_9_launches_esas_euclid_space_telescope', 'https://i0.wp.com/spacenews.com/wp-content/uploads/2023/07/f9-euclid-liftoff1.jpg?resize=1200%2C797&ssl=1', 'A SpaceX Falcon 9 lifted off at 11:12 a.m. Eastern July 1 from Cape Canaveral’s Space Launch Complex 40. The rocket deployed its payload, the European Space Agency’s Euclid spacecraft, 41 minutes later after placing it on a trajectory to the Earth-sun L-2 Lagrange point. The rocket’s booster, on its second flight after launching the Ax-2 private astronaut mission in May, landed on a droneship in the Atlantic Ocean.', 1, '2023-07-03 18:32:00', 1),
(2, 'NASA to add fourth pair of roll-out arrays to ISS', '', 'https://i0.wp.com/spacenews.com/wp-content/uploads/2023/06/irosa23june15.jpg?resize=1200%2C670&ssl=1', 'Boeing and Redwire announced June 28 that they signed a contract for a fourth pair of ISS Roll-Out Solar Arrays, or IROSA, for the station. Redwire developed the array technology, known as ROSA, which uses solar arrays that are launched in a rolled-up form factor and then extend once in space.\r\n\r\n', 2, '2023-07-03 18:34:30', 1),
(3, 'Firefly to launch Lockheed Martin small-satellite experiment', '', 'https://i0.wp.com/spacenews.com/wp-content/uploads/2023/06/Firefly-phot-_AlphaSunset-4-12-2-VSFB.jpg?resize=1200%2C900&ssl=1', 'The company in 2021 signed an agreement to launch up to 58 payloads with ABL Space, a small-satellite launcher in which Lockheed Martin has made a strategic investment. ABL’s first launch attempt in January failed and the company has not yet announced when it will try to launch again. ', 1, '2023-07-03 18:34:30', 1),
(4, 'New Firefly to launch Lockheed Martin small-satellite experiment', '', 'https://i0.wp.com/spacenews.com/wp-content/uploads/2023/06/Firefly-phot-_AlphaSunset-4-12-2-VSFB.jpg?resize=1200%2C900&ssl=1', 'The company in 2021 signed an agreement to launch up to 58 payloads with ABL Space, a small-satellite launcher in which Lockheed Martin has made a strategic investment. ABL’s first launch attempt in January failed and the company has not yet announced when it will try to launch again. ', 1, '2023-07-03 18:34:30', 0);

-- --------------------------------------------------------

--
-- Table structure for table `navigation`
--

CREATE TABLE `navigation` (
  `nav_id` int NOT NULL,
  `nav_title` varchar(255) NOT NULL,
  `nav_contentid` int NOT NULL,
  `nav_creator` int NOT NULL,
  `nav_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nav_state` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `navigation`
--

INSERT INTO `navigation` (`nav_id`, `nav_title`, `nav_contentid`, `nav_creator`, `nav_create`, `nav_state`) VALUES
(1, 'About us', 1, 1, '2023-06-12 18:45:26', 1),
(2, 'Info', 2, 1, '2023-06-12 18:45:26', 1),
(3, 'Info3', 2, 1, '2023-06-12 18:45:26', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int NOT NULL,
  `user_realname` varchar(255) NOT NULL,
  `user_nickname` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_adminstate` varchar(255) NOT NULL,
  `user_state` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_realname`, `user_nickname`, `user_password`, `user_adminstate`, `user_state`) VALUES
(1, 'Balog Róbert', 'bobby', '123456', 'superadmin', 1),
(2, 'Stab Bence', 'bence', '123456', 'superadmin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`cont_id`);

--
-- Indexes for table `navigation`
--
ALTER TABLE `navigation`
  ADD PRIMARY KEY (`nav_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `cont_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `navigation`
--
ALTER TABLE `navigation`
  MODIFY `nav_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

