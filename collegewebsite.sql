-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2021 at 11:59 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `assignment_file` varchar(255) NOT NULL,
  `assignment_course_id` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignments`
--

INSERT INTO `assignments` (`assignment_id`, `assignment_title`, `assignment_description`, `assignment_file`, `assignment_course_id`) VALUES
(1, 'Java Assignment', 'You can practice a variety range of questions in Java', 'java.pdf', 0),
(2, 'Android Data Fundamentals', 'Here are some of the android fundamentals that you can learn and practice', 'android-data-fundatments.pdf', 0),
(3, 'Theory of Computation', 'Theory of Computation Assignment 1', 'theory-of-computation1.pdf', 0),
(4, 'Theory of Computation', 'Theory of Computation Assignment 2', 'theory-of-computation2.pdf', 0);

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
  `notes_file` varchar(255) NOT NULL,
  `notes_course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`notes_id`, `notes_title`, `notes_description`, `notes_file`, `notes_course_id`) VALUES
(1, 'Java ServLet', 'Learn about Java servlet in very detailed way.', 'java-servlet.pdf', 0),
(2, 'Java Swing', 'The Brand New Java Swing Technology to learn', 'java-swing.pdf', 0),
(3, 'Android Writeup 1', 'Learn the basics of android technology', 'writeup1.pdf', 0),
(4, 'Android Writeup 1', 'Learn the basics of android technology', 'writeup2.pdf', 0),
(5, 'Adroid Datepicker Library', 'Learn about the android datepicker library and practice for better', 'datepicker.pdf', 0);

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
  `student_course_id` int(7) NOT NULL,
  `student_photo` varchar(255) NOT NULL,
  `student_address` text NOT NULL,
  `student_status` tinyint(1) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `student_username`, `student_email`, `student_password`, `student_gender`, `student_course_id`, `student_photo`, `student_address`, `student_status`, `timestamp`) VALUES
(2, 'Kushal07', 'kushal07@gmail.com', '$2y$10$uf1E0mBSWsSY6oX4Vsya/u7iZkqDvISs3bbhOGmWrM93yvUqCmWcy', 'Male', 1, 'kushal.jpg', 'Golden Nest Mira Road Mumbai Maharashtra', 1, '2021-02-22 16:26:56'),
(4, 'Rayman', 'rayman1@gmail.com', '$2y$10$5lBCCpQFYoAJgjygYkMOFO0siOqizUwMgagWojbFY0uFM50gIzqEC', 'Male', 2, 'joker.png', 'Jaipur Rajasthan India', 1, '2021-02-24 00:05:30'),
(5, 'anil11', 'anil@gmail.com', '$2y$10$Z7.NkQ1TnbJxE27Pd//BgurHHmItYtAJprfSKOz/AmN9q6Kw0V1iO', 'Male', 3, 'Drag and Drop.png', 'Kolkata West Bengal India', 0, '2021-02-24 00:06:45'),
(6, 'kinni02', 'patyalkinni@gmail.com', '$2y$10$DdQew1XWn5kB3xBxbxcTC.CdbSRUH4LKSTBIg2VwIeOTIkU68MbTe', 'Female', 1, 'Curtain menu thumbnail.png', 'Mira Road Mumbai Maharashtra India', 0, '2021-02-24 00:18:20'),
(8, 'abhishek12', 'abhishek.jain7474@gmail.com', '$2y$10$Ip3vPIBkJKrxxgtj4mehouEC1toV61huRyHUYuwJ2ES1zNoZFKUdC', 'Male', 0, 'calci js 2.png', 'mira road', 1, '2021-02-24 12:44:19'),
(10, 'bipin', 'bipin@gmail.com', '$2y$10$jlVEOyA1jf8fxutFIL4Wh.EBtLyGdFvy6Fw17BqGzgKU2mAsjAvoe', 'Male', 0, 'Screenshot (2).png', 'golden nest', 0, '2021-02-25 14:38:56'),
(11, 'pj', 'pratik@gmail.com', '$2y$10$JPy7wkJyiIVkAwkbNxK9VOrJJevEvu7Rwa.XKZpv7ScOg8m2O055O', 'Male', 0, 'Screenshot (2).png', 'Mira road', 0, '2021-05-01 15:03:35');

-- --------------------------------------------------------

--
-- Table structure for table `suggestion`
--

CREATE TABLE `suggestion` (
  `suggestion_id` int(7) NOT NULL,
  `suggestion_email` varchar(255) NOT NULL,
  `suggestion_message` text NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Indexes for table `suggestion`
--
ALTER TABLE `suggestion`
  ADD PRIMARY KEY (`suggestion_id`);

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
  MODIFY `student_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `suggestion`
--
ALTER TABLE `suggestion`
  MODIFY `suggestion_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
