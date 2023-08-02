-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 02, 2023 at 10:36 AM
-- Server version: 8.0.28
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `add_no` varchar(50) DEFAULT NULL,
  `att_date` date DEFAULT NULL,
  `present_absent` int DEFAULT NULL,
  `subject_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`add_no`, `att_date`, `present_absent`, `subject_name`) VALUES
('2020PC', '2022-08-20', 1, 'c++'),
('2020PC6521', '2022-08-19', 0, 'accounting'),
('2020PC6521', '2022-08-21', 0, 'Book keeping'),
('2020PC6521', '2022-08-21', 0, 'Book keeping'),
('2020PC', '2022-08-23', 1, 'data science'),
('2020PC1323', '2022-08-24', 1, 'accounting'),
('2020PC1323', '2022-08-24', 0, 'Book keeping'),
('2020PC7621', '2022-08-25', 1, 'Rotational Motion'),
('2020PC6521', '2022-08-21', 0, 'Book keeping'),
('2020PC', '2022-08-23', 1, 'data science'),
('2020PC1323', '2022-08-24', 1, 'Accounting'),
('2020PC1323', '2022-08-24', 0, 'Book keeping'),
('2020PC7621', '2022-08-25', 1, 'Rotational Motion'),
('2020PC7621', '2022-08-25', 0, 'Organic chemistry');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `branch_id` int DEFAULT NULL,
  `branch_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branch_id`, `branch_name`) VALUES
(106, 'architecture'),
(104, 'bachelor of commerce'),
(103, 'biotechnology'),
(101, 'computer science'),
(102, 'information technology');

-- --------------------------------------------------------

--
-- Table structure for table `divison`
--

CREATE TABLE `divison` (
  `div_id` int DEFAULT NULL,
  `div_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `divison`
--

INSERT INTO `divison` (`div_id`, `div_name`) VALUES
(11, 'A'),
(12, 'B'),
(13, 'C'),
(76, 'E');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `sem_id` int DEFAULT NULL,
  `semester_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`sem_id`, `semester_name`) VALUES
(21, '1 sem'),
(22, '2 sem'),
(23, '3 sem'),
(24, '4 sem'),
(25, '5 sem'),
(26, '6 semester');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `addmission_no` varchar(50) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `roll_no` int DEFAULT NULL,
  `branch_name` varchar(50) DEFAULT NULL,
  `year` varchar(50) DEFAULT NULL,
  `divison` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `semester` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`addmission_no`, `name`, `roll_no`, `branch_name`, `year`, `divison`, `email`, `semester`) VALUES
('2018PC8097', 'Ishita rathi', 756, 'computer science', '3 year', 'B', 'isita@gmail', '4 sem'),
('2019PC', 'Aarya Arora', 8644, 'bachelor of commerce', '2 year', 'A', 'aaryabscb@gmail', '3 sem'),
('2020PC', 'Arpit Dubey', 6524, 'computer science', '2 year', 'A', 'darpitbsccs@gmail', '4 sem'),
('2020PC1323', 'ADITI KHILARE', 8356, 'information technology', '2 year', 'B', 'aditibcom@gmail.com', '5 sem'),
('2020PC6521', 'FIZA MEHTA', 6521, 'bachelor of commerce', '2 year', 'B', 'fizabcom@gmail.com', '3 sem'),
('2020PC7621', 'TANUJA TIWARI', 7524, 'BIOTECHNOLOGY', '3 year', 'C', 'tanujab@gmail.com', '6 semester'),
('2021', 'Aashish shetty', 5580, 'information technology', '3 year', 'C', 'ashettybscit@gmail', '6 semester'),
('2022PC', 'Sharavan singh', 6920, 'biotechnology', '1 year', 'C', 'sharavanbsctech@gmail', '4 sem'),
('2023PC', 'Dhwani sharma', 7221, 'computer science', '3 year', 'B', 'sdhwanibsccs@gmail', '5 sem');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int DEFAULT NULL,
  `sub_name` varchar(50) NOT NULL,
  `sub_code` varchar(50) DEFAULT NULL,
  `branch_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `sub_name`, `sub_code`, `branch_name`) VALUES
(203, 'Accounting', 'a1', 'bachelor of commerce'),
(207, 'Book keeping', 'b2', 'bachelor of commerce'),
(201, 'c++', 'c2', 'computer science'),
(208, 'cloud computing', 'cc2', 'information technology'),
(206, 'data science', 'd1', 'computer science'),
(202, 'java', 'j1', 'Information technology'),
(204, 'organic chemistry', 'o3', 'biotechnology'),
(205, 'Rotational motion', 'r4', 'biotechnology');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `user_type` varchar(50) DEFAULT NULL,
  `email_id` varchar(50) NOT NULL,
  `pass` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_type`, `email_id`, `pass`) VALUES
(1234, 'username', 'Admin', 'ad@gmail', '1234'),
(932, 'Aman', 'Admin', 'aman2772013@gmail.com', '1234'),
(990, 'Ankit', 'Admin', 'an@gmail.com', '1234'),
(8767, 'himnashu', 'teacher', 'ar@gmail.com', '1234'),
(2345, 'dhevaakar', 'Admin', 'dhev@gmail', '123'),
(1290, 'pankaj', 'Admin', 'pa@gmail', '123'),
(8767, 'sanjana', 'Admin', 'sa@gmail', '1232'),
(2029, 'shreya', 'teacher', 'sh@gmail', '123'),
(207, 'Amreeta', 'teacher', 'sh@gmail.com', '1234'),
(74387, 'tanuaja', 'Admin', 'tan@gmail', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

CREATE TABLE `year` (
  `year_id` int DEFAULT NULL,
  `year_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `year`
--

INSERT INTO `year` (`year_id`, `year_name`) VALUES
(1, '1 year'),
(2, '2 year'),
(3, '3 year');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD KEY `subject_name` (`subject_name`),
  ADD KEY `add_no` (`add_no`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`branch_name`);

--
-- Indexes for table `divison`
--
ALTER TABLE `divison`
  ADD PRIMARY KEY (`div_name`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`semester_name`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`addmission_no`),
  ADD KEY `branch_name` (`branch_name`),
  ADD KEY `year` (`year`),
  ADD KEY `divison` (`divison`),
  ADD KEY `semester` (`semester`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`sub_name`),
  ADD KEY `branch_name` (`branch_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email_id`);

--
-- Indexes for table `year`
--
ALTER TABLE `year`
  ADD PRIMARY KEY (`year_name`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`subject_name`) REFERENCES `subject` (`sub_name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `attendance_ibfk_2` FOREIGN KEY (`add_no`) REFERENCES `student` (`addmission_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`branch_name`) REFERENCES `branch` (`branch_name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_ibfk_2` FOREIGN KEY (`year`) REFERENCES `year` (`year_name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_ibfk_3` FOREIGN KEY (`divison`) REFERENCES `divison` (`div_name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_ibfk_4` FOREIGN KEY (`semester`) REFERENCES `semester` (`semester_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `subject_ibfk_1` FOREIGN KEY (`branch_name`) REFERENCES `branch` (`branch_name`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
