-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2018 at 12:23 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_users`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_courses`
--

CREATE TABLE `tbl_courses` (
  `id` int(11) NOT NULL,
  `c_name` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_courses`
--

INSERT INTO `tbl_courses` (`id`, `c_name`) VALUES
(1, 'Bachelor of Arts (Honours) in Creative Media Production'),
(2, 'Bachelor of Arts (Honours) in Fine Art'),
(3, 'Bachelor of Arts (Honours) in Game Art and Visual Design'),
(4, 'Bachelor of Arts (Honours) in Graphic Design'),
(5, 'Bachelor of Arts (Honours) in Interactive Media'),
(6, 'Bachelor of Arts (Honours) in Photography'),
(7, 'Bachelor of Arts (Honours) in Product Design'),
(8, 'Bachelor of Arts (Honours) in Spatial Design'),
(9, 'Bachelor of Arts (Honours) in Journalism');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login_info`
--

CREATE TABLE `tbl_login_info` (
  `user_id` mediumint(8) UNSIGNED NOT NULL,
  `u_login_time` int(11) UNSIGNED NOT NULL,
  `u_persistence` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_login_info`
--

INSERT INTO `tbl_login_info` (`user_id`, `u_login_time`, `u_persistence`) VALUES
(13, 1528323005, '5b6341ee0e244459845af6b7e2d4e5c3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `id` tinyint(2) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`id`, `name`) VALUES
(1, 'Admin'),
(2, 'Staff'),
(3, 'Student'),
(4, 'Lecturer');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sick`
--

CREATE TABLE `tbl_sick` (
  `id` int(11) UNSIGNED NOT NULL,
  `s_name` varchar(300) NOT NULL,
  `s_surname` varchar(300) NOT NULL,
  `s_dateLong` date NOT NULL,
  `s_date` int(50) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sick`
--

INSERT INTO `tbl_sick` (`id`, `s_name`, `s_surname`, `s_dateLong`, `s_date`) VALUES
(1, 'Joana', 'Newmelon', '2018-05-31', 1527717600),
(3, 'Daniel', 'Cassar', '2018-07-17', 1531778400),
(4, 'Yannick', 'Farrugia', '2018-07-19', 1531951200),
(5, 'Daniel', 'Cassar', '2018-06-29', 1530223200);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `u_email` varchar(500) NOT NULL,
  `u_password` varchar(100) NOT NULL,
  `u_salt` varchar(100) NOT NULL,
  `u_portfolio` tinyint(4) NOT NULL,
  `role_id` tinyint(2) UNSIGNED NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `u_email`, `u_password`, `u_salt`, `u_portfolio`, `role_id`) VALUES
(4, 'cassar628@hotmail.com', '$2y$10$Zzdwy2g89HbUuw2o1tqR3ui18U1YD.5xJ7ntvhUuCG86S.z0PL41m', '6f1f5d16e6e61ecb', 0, 2),
(5, 'yannick@gmail.com', '$2y$10$htd.mYLo9gK.yUXhysivT.8FXf7OTCNHCjV1uNuP4zCwm2/9qka7q', '85d9acd273c7ea1d', 0, 1),
(6, 'joana@gmail.com', '$2y$10$9e8t4rIem6oxOUsOpmBZZ.Am8KR70WHbsaqe3OB9e6tHrONABx7M.', '7f967de94cf6cf24', 1, 1),
(7, 'cassar@gmail.com', '$2y$10$kU3yzHlK5bE4cUBCe/rE4O7B8hGXu5iEQGd0b3x/5rDxQRpEKEWHu', 'b9903563c51789cf', 0, 1),
(9, 'lorella@gmail.com', '$2y$10$dcAgKC4ipU7uN5PDLXL9N.g/IvyqaAXgaf54K48VP/gTx8DjIb94m', '208c7312e71d4cec', 0, 4),
(10, 'redd@gmail.com', '$2y$10$lneNyq7Ezp8CQCGBgABpS.Vqgvrc6gxLg7g42FKH3z909nuLKl.Na', '8d40296818a128c3', 0, 4),
(12, 'francesco@gmail.com', '$2y$10$YosyX6xabbdeXBoDe3ScduvJLS.hJ2FFYHNqP0EyfTaSzyt8U7GXa', '7355cadb2ce7d7bb', 0, 3),
(13, 'luke@gmail.com', '$2y$10$9IljwyUAvGXsJwmCxzg9euQnUoUbp9xeoE0tJZr4kZYio6ERPbO1u', '3ae085a2cb0d71c2', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_details`
--

CREATE TABLE `tbl_user_details` (
  `user_id` mediumint(8) UNSIGNED NOT NULL,
  `u_name` varchar(250) NOT NULL,
  `u_surname` varchar(250) NOT NULL,
  `u_creation` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user_details`
--

INSERT INTO `tbl_user_details` (`user_id`, `u_name`, `u_surname`, `u_creation`) VALUES
(4, 'Daniel', 'Cassar', 1526845423),
(5, 'Yannick', 'Farrugia', 1527017255),
(6, 'Joana', 'Newmelon', 1527021990),
(7, 'Daniel', 'Cassar', 1527022083),
(9, 'Lorella', 'Aquilina', 1527075057),
(10, 'Redd', 'Caruana', 1527075076),
(12, 'Francesco', 'Theuma', 1527180266),
(13, 'Luke', 'Parnis', 1527180622);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vacancy`
--

CREATE TABLE `tbl_vacancy` (
  `id` int(11) NOT NULL,
  `v_date` date NOT NULL,
  `v_date_expiry` int(100) NOT NULL,
  `v_link` varchar(1000) NOT NULL,
  `v_name` varchar(1000) NOT NULL,
  `v_description` varchar(1000) NOT NULL,
  `v_course` tinyint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_vacancy`
--

INSERT INTO `tbl_vacancy` (`id`, `v_date`, `v_date_expiry`, `v_link`, `v_name`, `v_description`, `v_course`) VALUES
(5, '2018-05-31', 1527717600, 'http://www.youtube.com', 'SpaceJam', 'I like big spaces', 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_courses`
--
ALTER TABLE `tbl_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_login_info`
--
ALTER TABLE `tbl_login_info`
  ADD KEY `fk_tbl_login_info_tbl_users1_idx` (`user_id`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sick`
--
ALTER TABLE `tbl_sick`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tbl_users_tbl_roles1_idx` (`role_id`);

--
-- Indexes for table `tbl_user_details`
--
ALTER TABLE `tbl_user_details`
  ADD KEY `fk_tbl_user_details_tbl_users_idx` (`user_id`);

--
-- Indexes for table `tbl_vacancy`
--
ALTER TABLE `tbl_vacancy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_courses`
--
ALTER TABLE `tbl_courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `id` tinyint(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_sick`
--
ALTER TABLE `tbl_sick`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_vacancy`
--
ALTER TABLE `tbl_vacancy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_login_info`
--
ALTER TABLE `tbl_login_info`
  ADD CONSTRAINT `fk_tbl_login_info_tbl_users1` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD CONSTRAINT `fk_tbl_users_tbl_roles1` FOREIGN KEY (`role_id`) REFERENCES `tbl_roles` (`id`);

--
-- Constraints for table `tbl_user_details`
--
ALTER TABLE `tbl_user_details`
  ADD CONSTRAINT `fk_tbl_user_details_tbl_users` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
