-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2021 at 04:48 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `collegewebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_email`, `admin_password`) VALUES
('kushal0705@gmail.com', 'kushal0705');

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

CREATE TABLE `assignments` (
  `assignment_id` int(7) NOT NULL,
  `assignment_title` varchar(255) NOT NULL,
  `assignment_description` varchar(255) NOT NULL,
  `assignment_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignments`
--

INSERT INTO `assignments` (`assignment_id`, `assignment_title`, `assignment_description`, `assignment_file`) VALUES
(1, 'Java Assignment', 'You can practice a variety range of questions in Java', 'java.pdf'),
(2, 'Android Data Fundamentals', 'Here are some of the android fundamentals that you can learn and practice', 'android-data-fundatments.pdf'),
(3, 'Theory of Computation', 'Theory of Computation Assignment 1', 'theory-of-computation1.pdf'),
(4, 'Theory of Computation', 'Theory of Computation Assignment 2', 'theory-of-computation2.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(7) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_description` text NOT NULL,
  `course_photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `course_description`, `course_photo`) VALUES
(1, 'Bachelor in Science - Information Technology', 'This degree is primarily focused on subjects such as software, databases, and networking. The BSc degree in IT is awarded for completing a programme of study in the field of software development, software testing, software engineering, web design, databases, programming, computer networking and computer systems.', 'bscit.jpg'),
(2, 'Bachelor in Science - Computer Science', 'B.Sc in Computer Science is a three-year undergraduate degree course that deals with the principles and applications of the computer. ... B.Sc in Computer Science makes students job ready to work with numerous IT and software companies as it focuses on computing methods, programming, and database.', 'bsccs.jpg'),
(3, 'Bachelors in Commerce', '“A Bachelor of Commerce, abbreviated as B.Com is an undergraduate degree in commerce and related subjects. The course is designed to provide students with a wide range of managerial skills and understanding in streams like finance, accounting, taxation and management”. ... In India, the duration of B.com is 3 years.', 'bcom.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `notes_id` int(7) NOT NULL,
  `notes_title` varchar(255) NOT NULL,
  `notes_description` varchar(255) NOT NULL,
  `notes_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`notes_id`, `notes_title`, `notes_description`, `notes_file`) VALUES
(1, 'Java ServLet', 'Learn about Java servlet in very detailed way.', 'java-servlet.pdf'),
(2, 'Java Swing', 'The Brand New Java Swing Technology to learn', 'java-swing.pdf'),
(3, 'Android Writeup 1', 'Learn the basics of android technology', 'writeup1.pdf'),
(4, 'Android Writeup 1', 'Learn the basics of android technology', 'writeup2.pdf'),
(5, 'Adroid Datepicker Library', 'Learn about the android datepicker library and practice for better', 'datepicker.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(7) NOT NULL,
  `student_username` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_password` varchar(255) NOT NULL,
  `student_gender` varchar(255) NOT NULL,
  `student_photo` varchar(255) NOT NULL,
  `student_address` text NOT NULL,
  `student_status` tinyint(1) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `student_username`, `student_email`, `student_password`, `student_gender`, `student_photo`, `student_address`, `student_status`, `timestamp`) VALUES
(1, 'pratik17042000', 'pratik@gmail.com', '$2y$10$EmOIcWhIpdeDQGb4eb7cCu.DYveX9dcaOTb.vMAZ2Be4SDAxtOpve', 'Male', 'hulk vs hulkbuster.jpg', 'Mumbai Mira Road India Maharashtra', 1, '2021-02-21 14:08:39'),
(2, 'Kushal07', 'kushal07@gmail.com', '$2y$10$uf1E0mBSWsSY6oX4Vsya/u7iZkqDvISs3bbhOGmWrM93yvUqCmWcy', 'Male', 'kushal.jpg', 'Golden Nest Mira Road Mumbai Maharashtra', 1, '2021-02-22 16:26:56'),
(4, 'Rayman', 'rayman1@gmail.com', '$2y$10$5lBCCpQFYoAJgjygYkMOFO0siOqizUwMgagWojbFY0uFM50gIzqEC', 'Male', 'joker.png', 'Jaipur Rajasthan India', 1, '2021-02-24 00:05:30'),
(5, 'anil11', 'anil@gmail.com', '$2y$10$Z7.NkQ1TnbJxE27Pd//BgurHHmItYtAJprfSKOz/AmN9q6Kw0V1iO', 'Male', 'Drag and Drop.png', 'Kolkata West Bengal India', 0, '2021-02-24 00:06:45'),
(6, 'kinni02', 'patyalkinni@gmail.com', '$2y$10$DdQew1XWn5kB3xBxbxcTC.CdbSRUH4LKSTBIg2VwIeOTIkU68MbTe', 'Female', 'Curtain menu thumbnail.png', 'Mira Road Mumbai Maharashtra India', 0, '2021-02-24 00:18:20'),
(8, 'abhishek12', 'abhishek.jain7474@gmail.com', '$2y$10$Ip3vPIBkJKrxxgtj4mehouEC1toV61huRyHUYuwJ2ES1zNoZFKUdC', 'Male', 'calci js 2.png', 'mira road', 0, '2021-02-24 12:44:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignments`
--
ALTER TABLE `assignments`
  ADD PRIMARY KEY (`assignment_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`notes_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignments`
--
ALTER TABLE `assignments`
  MODIFY `assignment_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `notes_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
