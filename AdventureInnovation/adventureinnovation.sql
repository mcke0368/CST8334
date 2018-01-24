-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Dec 14, 2017 at 08:11 PM
-- Server version: 5.7.19
-- PHP Version: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adventureinnovation`
--

-- --------------------------------------------------------

--
-- Table structure for table `certifications`
--

CREATE TABLE `certifications` (
  `id` int(11) NOT NULL,
  `guide_id` int(11) NOT NULL,
  `cert_name` longtext,
  `cert_link` longtext,
  `cert_expiry` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `certifications`
--

INSERT INTO `certifications` (`id`, `guide_id`, `cert_name`, `cert_link`, `cert_expiry`) VALUES
(1, 1, 'Swiftwater Safety Awareness', 'certification_sample.pdf', ''),
(2, 1, 'Rock Climbing Training', 'certification_sample.pdf', ''),
(3, 1, 'Zipline Saftety Course', 'certification_sample.pdf', ''),
(8, 1, 'Khalid', 'certificate_sample.pdf', '2017-12-31'),
(9, 1, 'Christian', NULL, '2017-12-31'),
(10, 1, 'Training course 1', 'certificate_sample.pdf', '2020-01-03'),
(11, 2, '111', 'certificate_sample.pdf', '2017-12-31');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `Id` int(5) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `Logo` varchar(250) DEFAULT NULL,
  `Banner` varchar(250) DEFAULT NULL,
  `Province` varchar(40) NOT NULL,
  `City` varchar(40) NOT NULL,
  `Address` varchar(250) NOT NULL,
  `Postal_code` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `company_guide`
--

CREATE TABLE `company_guide` (
  `Id` int(5) NOT NULL,
  `Company_id` int(5) NOT NULL,
  `guide_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `guide`
--

CREATE TABLE `guide` (
  `Id` int(5) NOT NULL,
  `user_id` varchar(250) NOT NULL,
  `about` longtext,
  `work_experience` longtext,
  `employment_history` longtext,
  `training` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `guide`
--

INSERT INTO `guide` (`Id`, `user_id`, `about`, `work_experience`, `employment_history`, `training`) VALUES
(1, '1', '<p>Hi I&rsquo;m Brennan, A passionate individual who loves to facilitate growth and higher experiences in others. I have been working in the industry for over 3 years now and have never looked back! I love working with different people while having fun and achieving our goals. I possess a very entrepreneurial mindset that keeps me motivated and continually recognizing new opportunities. I possess many different skills and training as well so check out my logs and profile if you want a better look under the hood! oidfjgoldkhgjldkghldkfgjl;dkfgjodkfgjdo;figj</p>', '<blockquote>\n<h5><strong>Adventure Guide</strong></h5>\n</blockquote>\n<ul>\n<li>Guiding clients on a variety of wilderness adventures including canoeing, kayaking, fishing, and day hikes while delivering an enjoyable, educational and safe environment</li>\n<li>Experience organizing, hosting and planning events for adults, youth and children</li>\n<li>Leadership skills such as communication, decision making and risk management</li>\n<li>Office duties including answering call/emails, booking clients, scheduling tours, filing client information, and office organization</li>\n<li>Planning, preparing, and guiding all multi day tours</li>\n<li>Outdoor adventure leadership</li>\n<li>Professionalism and ethics</li>\n<li>Search and rescue training</li>\n<li>Accounting</li>\n<li>Ecology</li>\n<li>Communications</li>\n<li>Computer applications</li>\n</ul>', '<h5><strong>Adventure Guide</strong></h5>\n<ul>\n<li>Guiding clients on a variety of wilderness adventures including canoeing, kayaking, fishing, and day hikes while delivering an enjoyable, educational and safe environment</li>\n<li>Experience organizing, hosting and planning events for adults, youth and children</li>\n<li>Leadership skills such as communication, decision making and risk management</li>\n<li>Office duties including answering call/emails, booking clients, scheduling tours, filing client information, and office organization</li>\n<li>Planning, preparing, and guiding all multi day tours</li>\n<li>​​​​​​​Outdoor adventure leadership</li>\n<li>Professionalism and ethics</li>\n<li>Search and rescue training</li>\n<li>Accounting</li>\n<li>Ecology</li>\n<li>Communications</li>\n<li>Computer applications</li>\n</ul>', '<ul>\n<li>Outdoor adventure leadership</li>\n<li>Professionalism and ethics</li>\n<li>Search and rescue training</li>\n<li>Accounting</li>\n<li>Risk management</li>\n<li>Ecology</li>\n<li>Communications</li>\n<li>Computer applications</li>\n</ul>'),
(2, '2', '<p>Test!</p>', '<p>123</p>', '<p>456</p>', '<p>789</p>'),
(3, '3', NULL, NULL, NULL, NULL),
(4, '4', '<p>yoyoyoyoyoyoyo</p>', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(5) NOT NULL,
  `guide_id` int(5) NOT NULL,
  `debrief` longtext NOT NULL,
  `date_created` datetime NOT NULL,
  `date_occurred` datetime NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `weather` varchar(50) DEFAULT NULL,
  `temperature` varchar(5) DEFAULT NULL,
  `route` varchar(200) DEFAULT NULL,
  `activity` varchar(200) DEFAULT NULL,
  `groupsize` int(4) DEFAULT NULL,
  `waterlevels` int(4) DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  `format` varchar(200) DEFAULT NULL,
  `notes` longtext,
  `summary` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `logbook`
--

CREATE TABLE `logbook` (
  `id` int(5) NOT NULL,
  `title` varchar(100) NOT NULL,
  `logbook_type_id` int(5) NOT NULL,
  `user_id` int(5) NOT NULL,
  `html_text` text,
  `attachment_location` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `logbook_type`
--

CREATE TABLE `logbook_type` (
  `id` int(5) NOT NULL,
  `title` varchar(100) NOT NULL,
  `user_id` int(5) NOT NULL,
  `html_text` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `email`, `password`) VALUES
(1, 'brennan', 'lemieux', 'brennan', 'brennan@brennan.com', '1234'),
(2, 'khalid', 'adan', 'khalidadan', 'k@a.com', '1234'),
(4, 'Khalid', 'Adan', 'TestuserKhalid', 'khalid@adan.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `certifications`
--
ALTER TABLE `certifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `guide_id` (`guide_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `company_guide`
--
ALTER TABLE `company_guide`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `guide`
--
ALTER TABLE `guide`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logbook`
--
ALTER TABLE `logbook`
  ADD PRIMARY KEY (`id`),
  ADD KEY `logbook_type_id` (`logbook_type_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `logbook_type`
--
ALTER TABLE `logbook_type`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `certifications`
--
ALTER TABLE `certifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company_guide`
--
ALTER TABLE `company_guide`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guide`
--
ALTER TABLE `guide`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logbook`
--
ALTER TABLE `logbook`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logbook_type`
--
ALTER TABLE `logbook_type`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `certifications`
--
ALTER TABLE `certifications`
  ADD CONSTRAINT `certifications_ibfk_1` FOREIGN KEY (`guide_id`) REFERENCES `guide` (`Id`);

--
-- Constraints for table `logbook`
--
ALTER TABLE `logbook`
  ADD CONSTRAINT `logbook_ibfk_1` FOREIGN KEY (`logbook_type_id`) REFERENCES `logbook_type` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `logbook_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `logbook_type`
--
ALTER TABLE `logbook_type`
  ADD CONSTRAINT `logbook_type_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
