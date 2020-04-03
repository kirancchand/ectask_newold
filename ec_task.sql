-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2019 at 07:39 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ec_task`
--

-- --------------------------------------------------------

--
-- Table structure for table `assigned_to`
--

CREATE TABLE `assigned_to` (
  `id` int(11) NOT NULL,
  `assigned_to_id` int(11) NOT NULL,
  `task_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `id` int(11) NOT NULL,
  `designation` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`id`, `designation`) VALUES
(1, 'cpo/pc'),
(2, 'scpo/hvdr'),
(3, 'ASI'),
(4, 'SI'),
(5, 'iop'),
(6, 'dysp/acp'),
(7, 'sp'),
(8, 'ssdf'),
(9, 'ssdf'),
(10, 'ssdf'),
(11, 'dfdfg'),
(12, 'dfgsdfg');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `task_id` int(11) NOT NULL,
  `message_from` int(11) NOT NULL,
  `message_to` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mode_of_receipt`
--

CREATE TABLE `mode_of_receipt` (
  `id` int(11) NOT NULL,
  `mode_of_task` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mode_of_receipt`
--

INSERT INTO `mode_of_receipt` (`id`, `mode_of_task`) VALUES
(1, 'Email'),
(2, 'Fax'),
(3, 'Letter'),
(4, 'Phone'),
(5, 'Direct');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'user'),
(2, 'cfs'),
(3, 'cfs'),
(4, 'nj'),
(5, 'nalg');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `status`) VALUES
(1, 'forward'),
(2, 'hfyv'),
(3, 'vbn'),
(4, 'asdf'),
(5, 'asdf');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(2000) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `assigned_by` int(11) DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `task_category_id` int(11) DEFAULT NULL,
  `mode_of_task_id` int(11) DEFAULT NULL,
  `created_time` datetime DEFAULT NULL,
  `expected_time` datetime DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `comments` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `name`, `description`, `created_by`, `assigned_by`, `priority`, `status_id`, `task_category_id`, `mode_of_task_id`, `created_time`, `expected_time`, `updated_time`, `remarks`, `comments`) VALUES
(43, 'Test task ', 'Task assigned by suji sir. There is a meeting on....... ', 85, 86, NULL, 1, 4, 4, NULL, NULL, NULL, NULL, NULL),
(44, 'Test task two', 'Task assigned by suji sir. There is a meeting on....... ', 85, 86, NULL, 1, 4, 4, NULL, NULL, NULL, NULL, NULL),
(45, 'Bdhd', 'Bbdbfb', 23, 85, NULL, 1, 4, 3, NULL, NULL, NULL, NULL, NULL),
(46, 'Ananf', 'Psjcjfidjfjjffhc', 85, 85, NULL, 1, 2, 3, NULL, NULL, NULL, NULL, NULL),
(47, 'Ananf', 'Psjcjfidjfjjffhc', 85, 85, NULL, 1, 2, 3, NULL, NULL, NULL, NULL, NULL),
(49, 'Bdjjff', 'Hdjrjrjr', 85, 85, NULL, 1, 3, 2, NULL, NULL, NULL, NULL, NULL),
(50, 'Anand', 'Test', 81, 86, NULL, 1, 5, 4, NULL, NULL, NULL, NULL, NULL),
(51, 'Anand', 'Test', 81, 86, NULL, 1, 5, 4, NULL, NULL, NULL, NULL, NULL),
(52, 'Anand', 'Test', 85, 81, NULL, 1, 4, 3, NULL, NULL, NULL, NULL, NULL),
(53, 'Anan', 'Babsn', 85, 85, NULL, 1, 4, 4, NULL, NULL, NULL, NULL, NULL),
(54, 'User', 'Test', 81, 85, NULL, 1, 3, 4, NULL, NULL, NULL, NULL, NULL),
(55, 'Anand', 'Ananf', 81, 85, NULL, 1, 4, 4, NULL, NULL, NULL, NULL, NULL),
(56, 'Tas', 'Task', 81, 23, NULL, 1, 4, 4, NULL, NULL, NULL, NULL, NULL),
(57, 'Anand', 'Majority djunk cue if ', 85, 23, NULL, 1, 5, 4, NULL, NULL, NULL, NULL, NULL),
(58, 'Ananf', 'Nanns', 23, 23, NULL, 1, 3, 4, NULL, NULL, NULL, NULL, NULL),
(63, 'Tets task', 'Anaaf\n', 23, 81, NULL, 1, 4, 4, NULL, NULL, NULL, NULL, NULL),
(64, 'Test task', 'Annad', 23, 81, NULL, 1, 5, 3, NULL, NULL, NULL, NULL, NULL),
(65, 'Hxhd', 'Dhfkjloi', 23, 81, NULL, 1, 4, 3, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `task_category`
--

CREATE TABLE `task_category` (
  `id` int(11) NOT NULL,
  `category` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task_category`
--

INSERT INTO `task_category` (`id`, `category`) VALUES
(1, 'Prepare Letter'),
(2, 'Report'),
(3, 'Proposal'),
(4, 'Discussion/Meeting'),
(5, 'SW/Mobile App');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `id` int(11) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`id`, `unit`, `parent_id`) VALUES
(1, 'scrb', 0),
(2, 'SAP', 0),
(3, 'DHQ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `role_id` int(11) NOT NULL,
  `designation_id` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `pen` int(11) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email_id` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `role_id`, `designation_id`, `unit_id`, `pen`, `mobile`, `email_id`, `password`) VALUES
(23, 'a', 5, 1, 1, 8888, '6786', 'a', 'a'),
(81, 'Anu', 5, 4, 1, 223456, '13345633848', 'b', 'b'),
(84, 'Sijo', 1, 1, 1, 767675, '2234758599595', 'Sijo@gmail.com', 'S'),
(85, 'Scrb user', 5, 1, 1, 123456, '1234567890', 'User@gmail.com', 'Pass'),
(86, 'Scrb officer', 3, 4, 1, 1111, '9846', 'Scrbofficer@gmail.com', 'pass'),
(88, 'vishnu', 3, 1, 1, 123456, '9633390350', 'er', 'er');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assigned_to`
--
ALTER TABLE `assigned_to`
  ADD PRIMARY KEY (`id`),
  ADD KEY `assigned_to_fk0` (`assigned_to_id`),
  ADD KEY `assigned_to_fk1` (`task_id`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `message_fk0` (`task_id`);

--
-- Indexes for table `mode_of_receipt`
--
ALTER TABLE `mode_of_receipt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`),
  ADD KEY `task_fk0` (`created_by`),
  ADD KEY `task_fk1` (`assigned_by`),
  ADD KEY `task_fk2` (`status_id`),
  ADD KEY `task_fk3` (`task_category_id`),
  ADD KEY `task_fk4` (`mode_of_task_id`);

--
-- Indexes for table `task_category`
--
ALTER TABLE `task_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_fk0` (`role_id`),
  ADD KEY `user_fk1` (`designation_id`),
  ADD KEY `user_fk2` (`unit_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assigned_to`
--
ALTER TABLE `assigned_to`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mode_of_receipt`
--
ALTER TABLE `mode_of_receipt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `task_category`
--
ALTER TABLE `task_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assigned_to`
--
ALTER TABLE `assigned_to`
  ADD CONSTRAINT `assigned_to_fk0` FOREIGN KEY (`assigned_to_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `assigned_to_fk1` FOREIGN KEY (`task_id`) REFERENCES `task` (`id`);

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_fk0` FOREIGN KEY (`task_id`) REFERENCES `task` (`id`);

--
-- Constraints for table `task`
--
ALTER TABLE `task`
  ADD CONSTRAINT `task_fk0` FOREIGN KEY (`created_by`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `task_fk1` FOREIGN KEY (`assigned_by`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `task_fk2` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`),
  ADD CONSTRAINT `task_fk3` FOREIGN KEY (`task_category_id`) REFERENCES `task_category` (`id`),
  ADD CONSTRAINT `task_fk4` FOREIGN KEY (`mode_of_task_id`) REFERENCES `mode_of_receipt` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_fk0` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`),
  ADD CONSTRAINT `user_fk1` FOREIGN KEY (`designation_id`) REFERENCES `designation` (`id`),
  ADD CONSTRAINT `user_fk2` FOREIGN KEY (`unit_id`) REFERENCES `unit` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
