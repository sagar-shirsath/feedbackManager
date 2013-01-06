-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 06, 2013 at 07:43 PM
-- Server version: 5.5.28
-- PHP Version: 5.3.10-1ubuntu3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `feedback`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `feedback_form_id` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `description`, `feedback_form_id`, `created`, `modified`) VALUES
(1, 'Introduction To Programming', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Software Engineering', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_forms`
--

CREATE TABLE IF NOT EXISTS `feedback_forms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(11) DEFAULT NULL,
  `rating` int(11) DEFAULT '0',
  `is_submitted` tinyint(1) DEFAULT '0',
  `semester` int(11) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `q_name` varchar(255) DEFAULT NULL,
  `ratings` int(11) DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `q_name`, `ratings`, `created`, `modified`) VALUES
(3, 'Teacher is prepared for class', NULL, '2013-01-06 16:20:48', '2013-01-06 16:20:48'),
(4, 'Teacher knows his/her subject well', 0, '2013-01-06 16:55:25', '2013-01-06 16:55:25'),
(5, 'Teacher is organized and neat', 0, '2013-01-06 17:01:05', '2013-01-06 17:01:05'),
(6, 'Teacher plans class time and assignments that help students to solve the problem and think critically', 0, '2013-01-06 17:02:59', '2013-01-06 17:02:59'),
(7, 'Teacher plans provides activities that make subject matter meaningful', 0, '2013-01-06 17:03:08', '2013-01-06 17:03:08'),
(8, 'Teacher is flexible in accommodating for individual student needs.', 0, '2013-01-06 17:03:20', '2013-01-06 17:03:20'),
(9, ' Teacher is clear in giving directions and on explaining waht is expected on assignments and tests.', 0, '2013-01-06 17:03:44', '2013-01-06 17:03:44'),
(10, 'Teacher allows you to be active in the classroom learning environment.', 0, '2013-01-06 17:03:54', '2013-01-06 17:03:54'),
(11, 'Teacher is puncture and manages the time well.', 0, '2013-01-06 17:04:02', '2013-01-06 17:04:02'),
(12, 'Teacher returns homework in a timely manner.', 0, '2013-01-06 17:04:10', '2013-01-06 17:04:10'),
(13, 'Teacher has clear classroom procedures so students dont waste time.', 0, '2013-01-06 17:04:20', '2013-01-06 17:04:20'),
(14, 'Teacher grades fairly.', 0, '2013-01-06 17:04:27', '2013-01-06 17:04:27'),
(15, 'I have learned a lot from this teacher about this subject.', 0, '2013-01-06 17:04:36', '2013-01-06 17:04:36'),
(16, ' Teacher gives me good feedback on homework and projects so that i can improve.', 0, '2013-01-06 17:04:45', '2013-01-06 17:04:45'),
(17, ' Teacher is creative in developing activities and lessons.', 0, '2013-01-06 17:04:54', '2013-01-06 17:04:54'),
(18, 'Teacher encourages students to speak up and be active in the class', 0, '2013-01-06 17:05:08', '2013-01-06 17:05:08'),
(19, 'Teacher listens and understands students point of view; he/she may not agree,but students feel understood.', 0, '2013-01-06 17:05:17', '2013-01-06 17:05:17'),
(20, 'You can count on the teachers word.', 0, '2013-01-06 17:05:24', '2013-01-06 17:05:24'),
(21, 'Teacher respects the opinions and decisions of students.', 0, '2013-01-06 17:05:32', '2013-01-06 17:05:32'),
(22, 'Teacher is willing to accept responsibility for his/her own mistakes.', 0, '2013-01-06 17:05:40', '2013-01-06 17:05:40'),
(23, 'Teacher is willing to learn from students.', 0, '2013-01-06 17:06:08', '2013-01-06 17:06:08'),
(24, ' Teacher is sensitive to the needs of students', 0, '2013-01-06 17:06:15', '2013-01-06 17:06:15'),
(25, 'Teachers words and action match', 0, '2013-01-06 17:06:22', '2013-01-06 17:06:22'),
(26, 'Teacher is fun to be with', 0, '2013-01-06 17:06:31', '2013-01-06 17:06:31'),
(27, 'Teacher likes and respects students', 0, '2013-01-06 17:06:40', '2013-01-06 17:06:40'),
(28, 'Teacher helps you when you ask for help.', 0, '2013-01-06 17:06:48', '2013-01-06 17:06:48'),
(29, ' Teacher is consistent and fair in discipline.', 0, '2013-01-06 17:06:55', '2013-01-06 17:06:55'),
(30, ' I trust this teacher.', 0, '2013-01-06 17:07:02', '2013-01-06 17:07:02'),
(31, 'Teacher tries to model what teacher expects of students', 0, '2013-01-06 17:07:11', '2013-01-06 17:07:11'),
(32, 'Teacher is fair and firm in discipline without being too strict.', 0, '2013-01-06 17:07:19', '2013-01-06 17:07:19');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE IF NOT EXISTS `ratings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rating` int(11) DEFAULT '0',
  `user_id` int(11) DEFAULT NULL,
  `question_id` int(11) DEFAULT NULL,
  `feedback_form_id` int(11) DEFAULT NULL,
  `subject_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

-- --------------------------------------------------------

--
-- Table structure for table `schema_migrations`
--

CREATE TABLE IF NOT EXISTS `schema_migrations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class` varchar(255) NOT NULL,
  `type` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `schema_migrations`
--

INSERT INTO `schema_migrations` (`id`, `class`, `type`, `created`) VALUES
(1, 'InitMigrations', 'Migrations', '2013-01-06 16:15:52'),
(2, 'ConvertVersionToClassNames', 'Migrations', '2013-01-06 16:15:52'),
(3, 'IncreaseClassNameLength', 'Migrations', '2013-01-06 16:15:53'),
(6, 'AddingTables', 'app', '2013-01-06 16:16:12'),
(7, 'AddRatingTable', 'app', '2013-01-06 16:16:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(36) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(1) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `is_verified` tinyint(1) DEFAULT '0',
  `verify_token` varchar(45) DEFAULT NULL,
  `dob` datetime DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `created`, `modified`, `is_verified`, `verify_token`, `dob`, `age`, `address`) VALUES
(1, 'admin', 'admin@yopmail.com', '97b3815e21b5f94bd1dba29eacaae4c0ebd2c22c', 3, '2013-01-04 00:00:00', '2013-01-03 00:00:00', 1, 'ee3', '0000-00-00 00:00:00', 25, 'Pune'),
(3, 'student', 'student@yopmail.com', '7031b2de52f09f86bd36dafbe471b71ae6dc1404', 1, '2013-01-06 16:45:49', '2013-01-06 16:45:49', 1, NULL, NULL, 12, 'pune'),
(4, 'Teacher', 'teacher@yopmail.com', '281005308d31c3d79473853082826c2c9297f0bf', 2, '2013-01-06 17:49:33', '2013-01-06 17:49:33', 1, NULL, NULL, 30, 'Pune'),
(5, 'Roy', 'akroy@yopmail.com', 'bc51bf6f2c672793c1d234bf284455418892129c', 2, '2013-01-06 17:57:15', '2013-01-06 17:57:15', 1, NULL, NULL, 35, 'Pune');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
