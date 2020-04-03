-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2020 at 09:19 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task_ec`
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
(1, 'CPO'),
(2, 'SCPO'),
(3, 'ASI'),
(4, 'SI'),
(5, 'CI'),
(6, 'DySP'),
(7, 'SP'),
(15, 'SA');

-- --------------------------------------------------------

--
-- Table structure for table `inteligence_data`
--

CREATE TABLE `inteligence_data` (
  `id` int(8) NOT NULL,
  `slno` int(8) DEFAULT NULL,
  `data` varchar(800) DEFAULT NULL,
  `date` varchar(30) DEFAULT NULL,
  `source` varchar(255) DEFAULT NULL,
  `ref_db` varchar(100) DEFAULT NULL,
  `ref_doc` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inteligence_data`
--

INSERT INTO `inteligence_data` (`id`, `slno`, `data`, `date`, `source`, `ref_db`, `ref_doc`) VALUES
(1, 5, 'Maoist affiliates along with ultra-left and pro LWE organised a protest march to register their protest against the alleged death of four maoist cadres (district Palakkad, October 28 & 29) in two separate encounters.  Murali Kannamppilly (ex Central Commi', '29-Oct-19', 'IB FR 1002', '19111601', 'rrrr'),
(2, 6, 'Relatives of deceased maoist Cadres, led by M.N Ravunni (Chairman, Porattam, Maoist Frontal Organisation) addressed the media on 30.10.2019 and announced that they would not take over the bodies of the Maoists, as the Police did not allow the relatives to', '30-Oct-19', 'IB FR 1002', '19111601', 'xxxx');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(40) DEFAULT NULL,
  `route` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `menu`, `route`) VALUES
(1, 'Create Task', 'task/createtask_page'),
(2, 'Task List', 'task_list/task_list'),
(3, 'Task Assigned By Me', 'task_list/task_listbyme'),
(4, 'Task Assigned To Me', 'task_list/task_listtome'),
(5, 'User List', 'user_list/user_list'),
(6, 'Designation List', 'designation_list/designation_list'),
(7, 'Status List', 'status_list/status_list'),
(8, 'Role', 'role/role'),
(9, 'Role Assigned', 'role_assigned/role_assigned'),
(10, 'Add Menu', 'menu/menu'),
(11, 'Assign Role Menu', 'menu/assignrolemenu'),
(12, 'Monthly Reports', 'reports/viewreports'),
(14, 'Intelligance Data', 'reports/inteli_report'),
(15, 'Prisoners\' Data', 'reports/prison_data'),
(16, 'Major Attacks- Timeline', 'reports/attack_data'),
(17, 'Major Incidents - Timeline', 'reports/incident_data');

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
-- Table structure for table `monthly_report`
--

CREATE TABLE `monthly_report` (
  `id` int(8) NOT NULL,
  `slno` int(8) DEFAULT NULL,
  `catagory` varchar(55) DEFAULT NULL,
  `place` varchar(55) DEFAULT NULL,
  `date` varchar(30) DEFAULT NULL,
  `particulars` varchar(800) DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `monthly_report`
--

INSERT INTO `monthly_report` (`id`, `slno`, `catagory`, `place`, `date`, `particulars`, `remarks`) VALUES
(1, 6, 'intcol', 'WND', '0000-00-00', 'At 23:00 Hrs, 3 PLGA Cadres of CPI (Maoist) had visited CR Estate Bungalow Karinkannikkunnu, in Padinjarathara PS limits. No one was identified.', ''),
(2, 7, 'intcol', 'KNR', '0000-00-00', 'KATS intelligence team received information about the presence of Maoist in the inner forest of Aralam. Hence, search was conducted with the help of tribal people and forest watchers and a resting place of Maoists was found out with their leftovers at the', ''),
(3, 8, 'sight', 'WND', '2012-sep-10', '4 PLGA cadres of CPI (Maoist) were sighted at Anakunjimoola Colony. Soman, Jisha, Santhosh, and suspected Kotta Honda Ravi were identified.', ''),
(4, 9, 'sight', 'WND', '2013-jan-23', '4 PLGA cadres of CPI (Maoist) were sighted at one Moideen Kutty\'s home. Soman, Jisha, Santhosh, and suspected Kotta Honda Ravi were identified', ''),
(5, 16, 'frontorgact', 'MPM', '0000-00-00', 'At around 6.00 pm a Commemoration Public meeting under the name ?Guerrilla war in Pandikkad? was conducted at Pandikkad, Malappuram under the leadership of ?Purogamana Yuvajana Prasthanam?. The program was presided over by CP Nahas (Vidhyarthi Yuvajana Pr', ''),
(6, 26, 'lpact', 'PKD', '2016-aug-30', '?Ooru? mela was conducted in Aanavai ?Ooru? in connection with Onam celebrations. Around 250 tribal people participated in the programme. It was a new experience to the people of that area. Police donated new clothes and arranged Onam Sadya as part of the', '');

-- --------------------------------------------------------

--
-- Table structure for table `priority`
--

CREATE TABLE `priority` (
  `id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `priority`
--

INSERT INTO `priority` (`id`, `Name`) VALUES
(1, 'Normal'),
(2, 'Urgent'),
(3, 'Very Urgent');

-- --------------------------------------------------------

--
-- Table structure for table `prisoners_data`
--

CREATE TABLE `prisoners_data` (
  `id` int(8) NOT NULL,
  `slno` int(8) DEFAULT NULL,
  `digor` varchar(85) DEFAULT NULL,
  `refdb` varchar(55) DEFAULT NULL,
  `prisoners_name` varchar(85) DEFAULT NULL,
  `prisoners_no` varchar(50) DEFAULT NULL,
  `msg_from` varchar(55) DEFAULT NULL,
  `msg_date` varchar(22) DEFAULT NULL,
  `action_date` varchar(22) DEFAULT NULL,
  `desig_point` varchar(255) DEFAULT NULL,
  `case_ref` varchar(85) DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `prisoners_data`
--

INSERT INTO `prisoners_data` (`id`, `slno`, `digor`, `refdb`, `prisoners_name`, `prisoners_no`, `msg_from`, `msg_date`, `action_date`, `desig_point`, `case_ref`, `remarks`) VALUES
(1, 6, '492', 'P12', 'nnnnnnn', '1212', 'DSB, TSR', '04-Dec-19', '06-Dec-19', 'Principle Sessions Court, Thirupur', '', 'Cancelled'),
(2, 7, '385', 'P13', 'yyyyyy', '1215', 'DSB, TSR', '20-Nov-19', '22-Nov-19', 'Principle Sessions Court, Udagamandalam, TN', '', '');

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
(0, 'Default User'),
(1, 'superadmin'),
(2, 'admin'),
(3, 'State'),
(4, 'District');

-- --------------------------------------------------------

--
-- Table structure for table `rolemenu`
--

CREATE TABLE `rolemenu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rolemenu`
--

INSERT INTO `rolemenu` (`id`, `role_id`, `menu_id`) VALUES
(96, 2, 1),
(97, 2, 2),
(98, 2, 3),
(99, 2, 4),
(100, 2, 5),
(101, 2, 6),
(102, 2, 7),
(103, 2, 8),
(104, 2, 9),
(105, 2, 10),
(106, 2, 11),
(107, 2, 12),
(108, 1, 1),
(109, 1, 2),
(110, 1, 3),
(111, 1, 4),
(112, 1, 5),
(113, 1, 6),
(114, 1, 7),
(115, 1, 8),
(116, 1, 9),
(117, 1, 10),
(118, 1, 11),
(119, 1, 12),
(120, 1, 14),
(121, 1, 15),
(122, 1, 16),
(123, 1, 17),
(124, 3, 5),
(125, 3, 8),
(126, 3, 9),
(127, 3, 11),
(128, 3, 12),
(129, 3, 14),
(130, 3, 15),
(131, 3, 16),
(132, 3, 17);

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
(2, 'In progress');

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
(195, 'Task1', 'hello kuttuusss', 24, 48, 1, 1, 1, 2, '2020-01-18 09:27:33', '2020-01-30 11:11:00', NULL, NULL, NULL),
(196, 'Task2', 'hahaha', 24, 48, 2, 1, 3, 2, '2020-01-18 09:46:36', '2020-01-31 11:11:00', NULL, NULL, NULL),
(197, 'task3', 'entha cheyka', 24, 48, 3, 1, 3, NULL, '2020-01-18 10:18:18', '2020-02-14 14:22:00', '2020-02-18 12:38:50', NULL, NULL);

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
-- Table structure for table `timeline_attack`
--

CREATE TABLE `timeline_attack` (
  `id` int(8) NOT NULL,
  `date` varchar(55) DEFAULT NULL,
  `header` varchar(255) DEFAULT NULL,
  `data` varchar(800) DEFAULT NULL,
  `place` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `timeline_attack`
--

INSERT INTO `timeline_attack` (`id`, `date`, `header`, `data`, `place`) VALUES
(1, '3/12/1993', 'Mumbai Serial bombings, 1993', 'On 12 March 1993 a series of 15 improvised explosive devices (IEDs) mostly car-bombs but including some motor-cycle borne IEDs exploded at well know locations across Mumbai including the Stock Exchange and several hotels. A total of 257 people were killed', 'Mumbai'),
(2, '1/23/1998', 'Virar Bombings', 'Between?23 January and? February 1998?a series of bomb blasts struck the Mumbai rail network including stations (Kanjurmarg, Santacruz, Kandivali) and track (between Gurgaon and Malad) . Four were killed and 32 injured. Several local Indian activists and ', 'Mumbai'),
(3, '3/20/2000', 'Chittisinghpura Massacre', 'In the early hours of?20 March 2000?terrorists dressed in Indian Army fatigues and believed affiliated with Lashkar-e-Taiba infiltrated the Sikh village of Chittisinghpura in Anantnag district of Kashmir, rounded up locals who had been celebrating a relig', 'Kashmir'),
(4, '5/1/2000', 'The 2000 Church bombings', 'Between?May and July?2000?a series of bombings was conducted on Christian Churches in the southern and western states of Karnataka, Andhra Pradesh and Goa. A total of nine separate churches were bombed with five people wounded and one device exploded whil', 'Karnataka, Andhra Pradesh, Goa'),
(5, '12/22/2000', 'Red Fort Attack', 'On?22 December 2000?terrorists of the Lashkar-e-Taiba led by a Pakistani operative Ashfaw Ahmed carried out a small-arms fire assault on the iconic Red Fort in Delhi in which two soldiers and one civilian guard were killed and 14 people were wounded. The ', 'New Delhi');

-- --------------------------------------------------------

--
-- Table structure for table `timeline_incident`
--

CREATE TABLE `timeline_incident` (
  `id` varchar(8) NOT NULL,
  `year` int(8) DEFAULT NULL,
  `slno` int(8) DEFAULT NULL,
  `date` varchar(55) DEFAULT NULL,
  `month` varchar(55) DEFAULT NULL,
  `data` varchar(800) DEFAULT NULL,
  `catagory` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `timeline_incident`
--

INSERT INTO `timeline_incident` (`id`, `year`, `slno`, `date`, `month`, `data`, `catagory`) VALUES
('1', 2000, 1, '3/6/2000', 'Mar-6', 'A group of 100 armed Naxalites attacked Asarali police station, about 250 km from district headquarters of Gadchiroli, on Maharashtra\'s border with Andhra Pradesh early on March 6 and took away firearms and cash Rs. 8000, police said. Police said here tha', 'IM'),
('2', 2000, 2, '3/7/2000', 'Mar-7', 'In another incident, two suspected naxalites belonging to the PWG were killed and a huge cache of arms was recovered after an encounter with the police in Karimnagar district. Two others escaped under the cover of darkness. Several arms and ammunition inc', 'IM'),
('3', 2000, 3, '3/7/2000', 'Mar-7', 'Suspected Naxalites belonging to the banned People?s War Group (PWG) have blown up the office-cum-residence of an Agriculture Extension Officer near Kalimela, Malkangiri district, late on March 7, delayed reports stated. The police have launched combing o', 'IR'),
('4', 2000, 4, '3/7/2000', 'Mar-7', 'Using landmines, the outlawed People\'s War Group (PWG) killed the Andhra Pradesh Panchayat Raj Minister, Madhava Reddy and three of his security guards. Earlier, Reddy was the Home Minister of the State.?', 'IR'),
('5', 2000, 5, '3/8/2000', 'Mar-8', 'India?s Parliament was informed on March 8 that 2,213 persons were killed in Andhra Pradesh, Bihar, Madhya Pradesh, Maharashtra and Orissa in 1999 in the various acts of violence committed by the banned People?s War Group of Naxalites. The Central governm', 'KM'),
('6', 2000, 6, '3/8/2000', 'Mar-8', 'Seven policemen were killed in a landmine blast set-off by the People?s War Group near Labhar in Bihar, on March 8.?', 'KM'),
('7', 2000, 7, '3/8/2000', 'Mar-8', 'The Chief Ministers of Naxal affected States are meeting in the country?s capital, New Delhi, on April 3 next, to evolve a joint-strategy to combat naxalite violence. The meeting has been announced in the wake of the killing of a Minister in Andhra Prades', 'KR'),
('8', 2000, 8, '3/10/2000', 'Mar-10', 'Naxalites of the banned Peoples\' War Group (PWG), had killed a farmer and blew up the house of a Range Forest Officer (RFO) in Sawargaon, Gadchiroli district, Maharashtra, on 10 March . The RFO and his family was way from home at the time of the blast. Th', 'KR');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `id` int(11) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0'
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
(24, 'KANNAN ', 1, 1, 1, 800880, '97979797111', 'kannu066@gmail.com', 'kannan'),
(48, 'KANNAN S NAIR', 1, 1, 1, 800880, '9562215467', 'kannankulathoor@gmail.com', '123456'),
(49, 'Suji Kumar', 3, 4, 1, 800000, '9797979711', 'sujikumar@gmail.com', 'sujikumar');

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
-- Indexes for table `inteligence_data`
--
ALTER TABLE `inteligence_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `route` (`route`);

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
-- Indexes for table `monthly_report`
--
ALTER TABLE `monthly_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `priority`
--
ALTER TABLE `priority`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prisoners_data`
--
ALTER TABLE `prisoners_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rolemenu`
--
ALTER TABLE `rolemenu`
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
-- Indexes for table `timeline_attack`
--
ALTER TABLE `timeline_attack`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timeline_incident`
--
ALTER TABLE `timeline_incident`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
-- AUTO_INCREMENT for table `priority`
--
ALTER TABLE `priority`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rolemenu`
--
ALTER TABLE `rolemenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=198;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

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
