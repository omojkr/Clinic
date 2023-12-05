-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2023 at 05:57 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scheduler_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(30) NOT NULL,
  `patient_id` int(30) NOT NULL,
  `date_sched` datetime NOT NULL,
  `ailment` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `patient_id`, `date_sched`, `ailment`, `status`, `date_created`) VALUES
(8, 7, '2021-09-09 08:35:00', '', 0, '2021-09-02 23:08:04'),
(13, 12, '2023-07-07 08:35:00', 'done', 2, '2023-07-07 16:36:03'),
(14, 13, '2023-07-12 08:50:00', 'ban', 0, '2023-07-08 15:49:06'),
(17, 16, '2023-07-21 15:51:00', 'sdasdasd', 2, '2023-07-08 15:51:51'),
(18, 17, '2023-07-19 14:51:00', 'sdasdasd', 1, '2023-07-08 15:53:20');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(30) NOT NULL,
  `location` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `max_a_day` int(5) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `location`, `description`, `max_a_day`, `date_created`, `date_updated`) VALUES
(1, 'Vaccination Location 1, Sample City, Negros Occidental', '&lt;p&gt;&lt;span style=&quot;text-align: justify;&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus accumsan ac justo consequat dignissim. Nam eget pretium nisl, at tempor velit. Sed vel nisl a metus porta placerat in in neque. Praesent aliquam nisi nisl, eget porta lacus iaculis ac. Fusce dignissim et nibh vel euismod. Vestibulum eget enim metus. Ut faucibus, lectus facilisis eleifend dignissim, ligula lorem porttitor elit, eu placerat odio urna quis augue. Proin rutrum, enim in auctor rhoncus, turpis ipsum rutrum sem, nec varius purus nisi at dolor. Donec porta turpis vel erat iaculis, eget consequat mauris dapibus. Nullam euismod quam sagittis nisl maximus auctor. Duis turpis nisi, condimentum eget interdum ut, ultricies non turpis. Donec auctor a mi at commodo. Vivamus ultrices venenatis orci, vel venenatis sem pharetra ac. Ut scelerisque lorem sed purus facilisis lacinia.&lt;/span&gt;&lt;br&gt;&lt;/p&gt;', 500, '2021-06-28 09:52:13', '2021-06-28 09:52:39'),
(4, 'Sample location  2', '&lt;p&gt;Sample only&lt;/p&gt;', 100, '2021-06-28 16:19:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `patient_list`
--

CREATE TABLE `patient_list` (
  `id` int(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient_list`
--

INSERT INTO `patient_list` (`id`, `name`, `date_created`) VALUES
(12, 'Marc Daniel B. Opilas', '2023-07-07 16:36:03'),
(13, 'Opilas, Marc Daniel B', '2023-07-08 15:49:06'),
(16, 'Zheila S pach', '2023-07-08 15:51:51'),
(17, 'Zheila S pach', '2023-07-08 15:53:20');

-- --------------------------------------------------------

--
-- Table structure for table `patient_meta`
--

CREATE TABLE `patient_meta` (
  `patient_id` int(30) NOT NULL,
  `meta_field` text DEFAULT NULL,
  `meta_value` text DEFAULT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient_meta`
--

INSERT INTO `patient_meta` (`patient_id`, `meta_field`, `meta_value`, `date_created`) VALUES
(12, 'id', '13', '2023-07-07 16:45:48'),
(12, 'patient_id', '12', '2023-07-07 16:45:48'),
(12, 'name', 'Marc Daniel B. Opilas', '2023-07-07 16:45:48'),
(12, 'email', 'omo123@gmail.com', '2023-07-07 16:45:48'),
(12, 'contact', '09563222222', '2023-07-07 16:45:48'),
(12, 'gender', 'Male', '2023-07-07 16:45:48'),
(12, 'dob', '2001-07-18', '2023-07-07 16:45:48'),
(12, 'address', 'Blk 34 west Langkaan, Dasma', '2023-07-07 16:45:48'),
(13, 'id', '', '2023-07-08 15:49:06'),
(13, 'patient_id', '', '2023-07-08 15:49:06'),
(13, 'name', 'Opilas, Marc Daniel B', '2023-07-08 15:49:06'),
(13, 'email', 'omo111@gmail.com', '2023-07-08 15:49:06'),
(13, 'contact', '094651723', '2023-07-08 15:49:06'),
(13, 'gender', 'Male', '2023-07-08 15:49:06'),
(13, 'dob', '2015-06-10', '2023-07-08 15:49:06'),
(13, 'address', 'Blk 34 west Langkaan, Dasma', '2023-07-08 15:49:06'),
(16, 'id', '17', '2023-07-13 17:00:31'),
(16, 'patient_id', '16', '2023-07-13 17:00:31'),
(16, 'name', 'Zheila S pach', '2023-07-13 17:00:31'),
(16, 'email', 'zheila@gmail.com', '2023-07-13 17:00:31'),
(16, 'contact', '12312312312', '2023-07-13 17:00:31'),
(16, 'gender', 'Female', '2023-07-13 17:00:31'),
(16, 'dob', '2015-06-20', '2023-07-13 17:00:31'),
(16, 'address', 'buho', '2023-07-13 17:00:31'),
(17, 'id', '18', '2023-07-13 17:00:38'),
(17, 'patient_id', '17', '2023-07-13 17:00:38'),
(17, 'name', 'Zheila S pach', '2023-07-13 17:00:38'),
(17, 'email', 'zheila@gmail.com', '2023-07-13 17:00:38'),
(17, 'contact', '12312312312', '2023-07-13 17:00:38'),
(17, 'gender', 'Female', '2023-07-13 17:00:38'),
(17, 'dob', '2015-06-20', '2023-07-13 17:00:38'),
(17, 'address', 'buho', '2023-07-13 17:00:38');

-- --------------------------------------------------------

--
-- Table structure for table `schedule_settings`
--

CREATE TABLE `schedule_settings` (
  `meta_field` text NOT NULL,
  `meta_value` text NOT NULL,
  `date_create` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedule_settings`
--

INSERT INTO `schedule_settings` (`meta_field`, `meta_value`, `date_create`) VALUES
('day_schedule', 'Wednesday,Friday', '2023-07-08 15:53:01'),
('morning_schedule', '08:00,11:00', '2023-07-08 15:53:01'),
('afternoon_schedule', '13:00,16:00', '2023-07-08 15:53:01');

-- --------------------------------------------------------

--
-- Table structure for table `system_info`
--

CREATE TABLE `system_info` (
  `id` int(30) NOT NULL,
  `meta_field` text NOT NULL,
  `meta_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `system_info`
--

INSERT INTO `system_info` (`id`, `meta_field`, `meta_value`) VALUES
(1, 'name', 'ST. ANNE GENERAL HOSPITAL OUTPATIENT ORTHOPEDIC CLINIC'),
(6, 'short_name', 'ST. ANNE GENERAL HOSPITAL OUTPATIENT ORTHOPEDIC CLINIC'),
(11, 'logo', 'uploads/1688717820_logo.png'),
(13, 'user_avatar', 'uploads/user_avatar.jpg'),
(14, 'cover', 'uploads/1688717760_bg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `avatar` text DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 0,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`, `avatar`, `last_login`, `type`, `date_added`, `date_updated`) VALUES
(1, 'Admin ', 'Ako', 'admin', '0192023a7bbd73250516f069df18b500', 'uploads/1688797920_72690856_2452833671498432_4870553528537448448_n.jpg', NULL, 1, '2021-01-20 14:02:37', '2023-07-08 14:32:01'),
(7, 'Marc Daniel', 'Opilas', 'omojkr', '77b8d8d4c1408594d0f9172c83d14c8e', 'uploads/1688719440_271407429_3004207876509977_8705469920500918642_n.jpg', NULL, 0, '2023-07-07 16:44:22', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_list`
--
ALTER TABLE `patient_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_meta`
--
ALTER TABLE `patient_meta`
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `system_info`
--
ALTER TABLE `system_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `patient_list`
--
ALTER TABLE `patient_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `system_info`
--
ALTER TABLE `system_info`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `patient_meta`
--
ALTER TABLE `patient_meta`
  ADD CONSTRAINT `patient_meta_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patient_list` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
