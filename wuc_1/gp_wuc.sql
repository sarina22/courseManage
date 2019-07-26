-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2019 at 02:30 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gp_wuc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tble`
--

CREATE TABLE `admin_tble` (
  `id` int(8) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) DEFAULT NULL,
  `surname` varchar(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact_number` varchar(50) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_tble`
--

INSERT INTO `admin_tble` (`id`, `firstname`, `middlename`, `surname`, `username`, `email`, `contact_number`, `dob`) VALUES
(10009, 'Damodar', '', 'Bhattarai', 'admin', 'admin@bdamodar.com.np', '', '2018-01-01'),
(10010, 'test', '', '', 'test123', '', '', '2018-01-01'),
(10011, 'tsering', 'khando', 'lama', 'tsering', 'khando@gmail.com', '989989', '2018-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `announcements_tble`
--

CREATE TABLE `announcements_tble` (
  `id` int(10) NOT NULL,
  `course_leader_id` int(8) DEFAULT NULL,
  `admin_id` int(8) DEFAULT NULL,
  `lecturer_id` int(8) DEFAULT NULL,
  `module_id` varchar(10) NOT NULL,
  `title` text NOT NULL,
  `announcement` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcements_tble`
--

INSERT INTO `announcements_tble` (`id`, `course_leader_id`, `admin_id`, `lecturer_id`, `module_id`, `title`, `announcement`, `date_added`) VALUES
(10030, NULL, 10009, NULL, '', '', 'this is a new system for us', '2019-01-01 00:00:00'),
(10034, NULL, NULL, 20004, 'CSY2028', 'post', '1234', '2019-01-01 00:00:00'),
(10035, NULL, NULL, 20004, 'CSY2030', 'fasdf', 'tsering', '2019-04-25 17:26:03'),
(10036, NULL, 10009, NULL, '', '', 'adfadfd', '2019-01-01 00:00:00'),
(10037, NULL, 10009, NULL, '', '', '', '2019-01-10 00:00:00'),
(10038, NULL, 10009, NULL, '', '', '', '2019-01-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `assignments_tble`
--

CREATE TABLE `assignments_tble` (
  `id` int(10) NOT NULL,
  `module_id` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `file` text NOT NULL,
  `name` text NOT NULL,
  `start_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deadline` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignments_tble`
--

INSERT INTO `assignments_tble` (`id`, `module_id`, `title`, `file`, `name`, `start_date`, `deadline`) VALUES
(2, 'CSY2028 ', ' abc', '../files/', '', '2019-04-24 00:00:00', '2019-04-25 00:00:00'),
(3, 'CSY2030 ', ' adf', '../files/LOGO.png', 'LOGO.png', '2019-04-02 00:00:00', '2019-04-24 00:00:00'),
(5, 'CSY2028 ', ' zxczxczc', '../files/menu-icon.png', 'menu-icon.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'CSY2030 ', ' zxczxc', '../files/logo-small.png', 'logo-small.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'CSY2028 ', ' def', '../files/man.png', 'man.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'CSY2028 ', ' ghi', '../files/student-icon.png', 'student-icon.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'CSY2030 ', ' milan', '../files/Screenshot (50).png', 'Screenshot (50).png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'CSY2028 ', ' adf', '../files/finalDBReport.docx', 'finalDBReport.docx', '2019-04-02 00:00:00', '2019-04-26 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `chapters_tble`
--

CREATE TABLE `chapters_tble` (
  `id` int(11) NOT NULL,
  `module_id` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `name` text NOT NULL,
  `filename` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chapters_tble`
--

INSERT INTO `chapters_tble` (`id`, `module_id`, `title`, `description`, `name`, `filename`) VALUES
(21, 'CSY2030', ' adf', 'dsadfasdf', '', '../files/'),
(22, 'CSY2030', ' fsdf', 'dsfdf', '', '../files/'),
(23, 'CSY2030', ' fdf', 'adfsdf', '', '../files/'),
(30, 'CSY2028', ' adfasdf', '', '', '../files/'),
(32, 'CSY2028', 'aa ', '', '', '../files/'),
(33, 'CSY2028', ' FSSS ', '', '18406487_functions.txt', '../files/18406487_functions.txt');

-- --------------------------------------------------------

--
-- Table structure for table `courses_tble`
--

CREATE TABLE `courses_tble` (
  `id` int(3) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses_tble`
--

INSERT INTO `courses_tble` (`id`, `title`) VALUES
(2, 'Computing');

-- --------------------------------------------------------

--
-- Table structure for table `course_leader_tble`
--

CREATE TABLE `course_leader_tble` (
  `id` int(8) NOT NULL,
  `password` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) DEFAULT NULL,
  `surname` varchar(50) NOT NULL,
  `qualification` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact_number` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `course_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE `forum` (
  `id` int(11) NOT NULL,
  `module_id` varchar(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `question` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`id`, `module_id`, `user_id`, `question`) VALUES
(1, 'CSY2028', 1, 'hello'),
(2, 'CSY2028', 0, 'adfadf'),
(3, 'CSY2028', 123, 'adfadf'),
(4, 'CSY2028', 20004, 'adfadf'),
(5, 'CSY2028', 20004, 'adfadf'),
(6, 'CSY2028', 20004, 'adfadf'),
(7, 'CSY2028', 20004, 'adfadf'),
(8, 'CSY2028', 20004, 'adfadf'),
(9, 'CSY2028', 20004, 'adfadf'),
(10, 'CSY2028', 20004, 'adfadf'),
(11, 'CSY2028', 20004, 'adfadf'),
(12, 'CSY2028', 20004, 'adfadf'),
(13, 'CSY2028', 20004, 'adfadf'),
(14, 'CSY2028', 20004, 'adfadf'),
(15, 'CSY2028', 20004, 'adfadf'),
(16, 'CSY2028', 20004, 'adfadf'),
(17, 'CSY2028', 20004, 'adfadf'),
(18, 'CSY2028', 20004, 'can i ask you one thing?'),
(19, 'CSY2028', 20004, 'can i ask you one thing?'),
(20, 'CSY2028', 20004, 'addf'),
(21, 'CSY2028', 20004, '123xyz'),
(22, 'CSY2030', 20004, 'how are you?'),
(23, 'CSY2028', 30266, 'adfasdf');

-- --------------------------------------------------------

--
-- Table structure for table `forum_answers_tble`
--

CREATE TABLE `forum_answers_tble` (
  `id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer` text NOT NULL,
  `user_id` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forum_answers_tble`
--

INSERT INTO `forum_answers_tble` (`id`, `question_id`, `answer`, `user_id`) VALUES
(1, 1, 'hi', 20004),
(2, 1, 'how are you?', 20004),
(3, 1, 'i am fine\r\n', 20004),
(4, 1, 'me2', 20004),
(5, 2, '123', 20004),
(6, 2, '234', 20004),
(7, 2, '456', 20004),
(8, 2, 'rtret', 20004),
(9, 22, 'i am fine', 20004),
(10, 22, 'i am fine', 30266),
(11, 22, 'how about  you?', 30266),
(12, 10, 'sdfsdf', 20004),
(13, 10, 'sfdsdf', 20004),
(14, 10, 'sdfsdf', 20004),
(15, 10, 'sfsdf', 20004),
(16, 10, 'sdf', 20004),
(17, 14, 'asdasd', 20004),
(18, 14, 'asdasd', 20004),
(19, 23, 'dfdsaf', 30266),
(20, 23, 'adfadf', 30266);

-- --------------------------------------------------------

--
-- Table structure for table `login_tble`
--

CREATE TABLE `login_tble` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `userId` int(8) NOT NULL,
  `archive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_tble`
--

INSERT INTO `login_tble` (`username`, `password`, `type`, `userId`, `archive`) VALUES
('admin', '$2y$10$zBEs4EWkh3rbYOZ0R6U3IOpKRI.oWJNROLmqKohgEJi9ryI5y/KYa', 'admin', 0, 0),
('admin@admin.com', '$2y$10$WQ/ivfLegckdW3mWWJi6PusJom9P6pH56L0XFM4h83KOyKvSWmVSy', 'admin', 10009, 0),
('tsering', '$2y$10$2x3L.8r7aHlSfMsKZMB3BueRfNFK7XPSpV06nnMMbfrdKMbo2TBAi', 'admin', 10011, 0),
('binaya@gmail.com', '$2y$10$NDPwuGgN6HnksCgb19/rseLCfH0HR4RjCdNynyGr4/1Rh4AF41cUG', 'moduleLeader', 20004, 0),
('test@g.com', '$2y$10$USbEvCS/aara23xGu1MUB.1RsxreFER5B2v1BclvYe4zf.peKryge', 'moduleLeader', 20009, 0),
('candy@gmail.com', '$2y$10$EGddmonuyYDpYNEXg7.ch.R/A6IyPhXHdRrIfE1Ca.5aWo6A6DXTy', 'student', 30266, 0),
('2222', '$2y$10$kkbcKyMSLr0aO05LHA2cR.DJSa2x5dvZQqxtbAq605Hh/RHYAXutq', 'student', 30267, 0),
('343434', '$2y$10$CmD6JUDt32n..wMuT8gnDuCMU24q8Xb9tNnyfgRo7u9T19txnAWZC', 'student', 30268, 0),
('2323', '$2y$10$NGKfxf.iUv9u1RUSwBhAzOYXOMv3L.rj3CBHvqAHPx8MnBgi2rF3m', 'student', 30269, 0),
('3434', '$2y$10$yIAhbRI0tObNpwRPKEQ61Oh.aKrhtyHELrXTAuGsdBB.vp0V0vhQS', 'student', 30270, 0),
('34434', '$2y$10$jV5vWj8E6ZxZlZOrDrW3R.EELRLXlWastZzLb9AxLh4ZRaYRyyCDm', 'student', 30271, 0),
('test@test.com', '$2y$10$9KzBkBymAIXDl0LNX4QInO0/8G7oW9xQp14mg1DVw.iwKPu7mMrLW', 'student', 30272, 0),
('test1@test.com', '$2y$10$GGFUxyYYJ75iCdmjwIORmuFxBNpNkb4V0Mirt.hlKXIGnLczBb.he', 'student', 30273, 0),
('tan.smit111h@gmail.com', '$2y$10$JrjKstwc/QzmT9/HdKHnduWboB3CjnXcgfmkbteLaELptdUrDxLNC', 'student', 30274, 0),
('2222', '$2y$10$C41ENyYdMqbxfB0/ERn.ru1.7T3oqnrUrtTuqIhDN/Va9hSfilM0O', 'student', 30000005, 0),
('343434', '$2y$10$7yhRM8JMwOHtg2K4FUf6ouEVR9VoK60NIgokeqUgrpPYiWHkszSk2', 'student', 30000006, 0),
('2323', '$2y$10$GZC8.4U5YqafBAO/6ruNKOCKTfq2xvb2lzNiutWJRV8YJUvJ3fDPi', 'student', 30000007, 0),
('3434', '$2y$10$sCWu.uLbHMvsD0IZDM4ALuIDWfhpAelsjsSaXVLNKxwLIXq.tGkdO', 'student', 30000008, 0),
('34434', '$2y$10$/oN81MW6v.h5QGpKpCcNJONPuYNxckI8xMzANbWpgme1vBZ3R5dmG', 'student', 30000009, 0),
('2222', '$2y$10$inf5wBik.SvXQM4L9mhC0eopweZa/ijHz/NZVQUlcfJBWbw3LUozK', 'student', 35000000, 0),
('343434', '$2y$10$WQyqffvBehsU2Itzp3n7g.KGGRI/LIm7rhZ3p3UEOBO4sZrPKxwMC', 'student', 35000001, 0),
('2323', '$2y$10$B3DAdHKBlFH3/singAp/ZOYFLqs15ratlPQaWKPx5.LGFYWpMS6Iq', 'student', 35000002, 0),
('3434', '$2y$10$wbLFp0cL2W2IxCv6JOmv4u5xAz8uq5r66RxHr1oYk5II1pJGo5L3q', 'student', 35000003, 0),
('34434', '$2y$10$4U3L4ksdOGtRaLjbopott.UGNXElgZE/jFNB0P/ec6TttvWIyFg1q', 'student', 35000004, 0);

-- --------------------------------------------------------

--
-- Table structure for table `modules_tble`
--

CREATE TABLE `modules_tble` (
  `id` varchar(10) NOT NULL,
  `course_id` int(3) NOT NULL,
  `title` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modules_tble`
--

INSERT INTO `modules_tble` (`id`, `course_id`, `title`, `level`, `description`) VALUES
('CSY101', 2, 'COMMUNICATIONS', 1, ''),
('CSY2028', 2, 'Web Programming', 1, 'Welcome to web123'),
('CSY2030', 2, 'SDD', 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `module_details`
--

CREATE TABLE `module_details` (
  `module_id` varchar(10) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `module_leader_tble`
--

CREATE TABLE `module_leader_tble` (
  `id` int(8) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) DEFAULT NULL,
  `surname` varchar(50) NOT NULL,
  `qualification` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact_number` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `dob` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `role` text,
  `specialise` text,
  `archive` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `module_leader_tble`
--

INSERT INTO `module_leader_tble` (`id`, `firstname`, `middlename`, `surname`, `qualification`, `email`, `contact_number`, `address`, `dob`, `status`, `role`, `specialise`, `archive`) VALUES
(20004, 'BINAYA', '', 'DHAKAL', '', 'binaya@gmail.com', '', '', '2018-01-01', 'PROVISIONAL', '', '', 0),
(20006, 'Tsering', 'Khando', 'Lama', '+2', 'khando@gmail.com', '9833223432', '', '1997-02-11', '', NULL, NULL, 0),
(20007, 'afad', 'adf', 'af', 'afaf', 'fafsdf@akdfjd.com', 'a', '', '2018-01-01', 'PROVISIONAL', 'a', 'fadf', 0),
(20008, 'I\'m', 'New', 'ModuleLeader', 'ad', 'module@g.com', 'adf', 'adf', '2018-01-01', 'PROVISIONAL', 'md', 'md', 0),
(20009, 'qqw', 'test', 'test', 'test', 'test@g.com', 'test', 'test', '2018-01-01', 'PROVISIONAL', 'a', 'fadf', 0);

-- --------------------------------------------------------

--
-- Table structure for table `module_lecturer_tble`
--

CREATE TABLE `module_lecturer_tble` (
  `lecturer_id` int(8) NOT NULL,
  `module_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `module_lecturer_tble`
--

INSERT INTO `module_lecturer_tble` (`lecturer_id`, `module_id`) VALUES
(20004, 'CSY2028'),
(20004, 'CSY2030'),
(20008, 'CSY2028'),
(20008, 'CSY2030');

-- --------------------------------------------------------

--
-- Table structure for table `students_tble`
--

CREATE TABLE `students_tble` (
  `id` int(8) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) DEFAULT NULL,
  `surname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `contact_number` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `qualification` text,
  `status` varchar(30) NOT NULL,
  `course_id` varchar(255) NOT NULL,
  `archive` tinyint(1) NOT NULL,
  `approve` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students_tble`
--

INSERT INTO `students_tble` (`id`, `firstname`, `middlename`, `surname`, `email`, `dob`, `address`, `nationality`, `contact_number`, `level`, `address2`, `qualification`, `status`, `course_id`, `archive`, `approve`) VALUES
(35000000, 'a', '', 'n1', '2222', '0000-00-00', 's1', 'nepali', '123', 1, '1', '12', 'dormant', 'c12', 0, 0),
(35000001, 'b', '', 'n2', '343434', '0000-00-00', 's2', 'nepali', '123', 2, '333', '23', 'live', 'c12', 0, 0),
(35000002, 'c', '', 'n3', '2323', '0000-00-00', 's3', 'nepali', '123', 3, '3', '32', 'provisional', 'c12', 0, 0),
(35000003, 'd', '', 'n4', '3434', '0000-00-00', 's4', 'nepali', '123', 4, '24', '23', 'provisional', 'c12', 0, 0),
(35000004, 'e', '', 'n5', '34434', '0000-00-00', 's5', 'nepali', '123', 5, '234', '23', 'live', 'c12', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `student_assignments_tble`
--

CREATE TABLE `student_assignments_tble` (
  `assignment_id` int(11) NOT NULL,
  `student_id` int(8) NOT NULL,
  `module_id` varchar(10) NOT NULL,
  `filepath` text NOT NULL,
  `name` text NOT NULL,
  `submissiondate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `grade` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_assignments_tble`
--

INSERT INTO `student_assignments_tble` (`assignment_id`, `student_id`, `module_id`, `filepath`, `name`, `submissiondate`, `grade`) VALUES
(6, 30266, 'CSY2028 ', '../files/Screenshot (177).png', 'Screenshot (177).png', '2019-04-25 12:38:51', 'F'),
(8, 30266, 'CSY2030 ', '../files/Screenshot (55).png', 'Screenshot (55).png', '2019-04-25 13:01:03', 'A+'),
(9, 30266, 'CSY2028 ', '../files/finalDBReport.docx', 'finalDBReport.docx', '2019-04-25 17:46:20', 'F');

-- --------------------------------------------------------

--
-- Table structure for table `student_modules_tble`
--

CREATE TABLE `student_modules_tble` (
  `student_id` int(8) NOT NULL,
  `module_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_modules_tble`
--

INSERT INTO `student_modules_tble` (`student_id`, `module_id`) VALUES
(1000, 'CSY2028'),
(1000, 'CSY2030'),
(30266, 'CSY2028'),
(30266, 'CSY2030');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tble`
--
ALTER TABLE `admin_tble`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `announcements_tble`
--
ALTER TABLE `announcements_tble`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`),
  ADD KEY `course_leader_id` (`course_leader_id`),
  ADD KEY `lecturer_id` (`lecturer_id`);

--
-- Indexes for table `assignments_tble`
--
ALTER TABLE `assignments_tble`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_as_module` (`module_id`);

--
-- Indexes for table `chapters_tble`
--
ALTER TABLE `chapters_tble`
  ADD PRIMARY KEY (`id`),
  ADD KEY `module_id` (`module_id`);

--
-- Indexes for table `courses_tble`
--
ALTER TABLE `courses_tble`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_leader_tble`
--
ALTER TABLE `course_leader_tble`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `contact_number` (`contact_number`),
  ADD KEY `fk_cl_course` (`course_id`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum_answers_tble`
--
ALTER TABLE `forum_answers_tble`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_tble`
--
ALTER TABLE `login_tble`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `modules_tble`
--
ALTER TABLE `modules_tble`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_CM` (`course_id`);

--
-- Indexes for table `module_details`
--
ALTER TABLE `module_details`
  ADD KEY `fk_md_modules` (`module_id`);

--
-- Indexes for table `module_leader_tble`
--
ALTER TABLE `module_leader_tble`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `module_lecturer_tble`
--
ALTER TABLE `module_lecturer_tble`
  ADD PRIMARY KEY (`lecturer_id`,`module_id`),
  ADD KEY `fk_ml_module` (`module_id`);

--
-- Indexes for table `students_tble`
--
ALTER TABLE `students_tble`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `student_assignments_tble`
--
ALTER TABLE `student_assignments_tble`
  ADD PRIMARY KEY (`assignment_id`);

--
-- Indexes for table `student_modules_tble`
--
ALTER TABLE `student_modules_tble`
  ADD PRIMARY KEY (`student_id`,`module_id`),
  ADD KEY `fk_sm_m` (`module_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tble`
--
ALTER TABLE `admin_tble`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10013;

--
-- AUTO_INCREMENT for table `announcements_tble`
--
ALTER TABLE `announcements_tble`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10039;

--
-- AUTO_INCREMENT for table `assignments_tble`
--
ALTER TABLE `assignments_tble`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `chapters_tble`
--
ALTER TABLE `chapters_tble`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `courses_tble`
--
ALTER TABLE `courses_tble`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `course_leader_tble`
--
ALTER TABLE `course_leader_tble`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `forum_answers_tble`
--
ALTER TABLE `forum_answers_tble`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `module_leader_tble`
--
ALTER TABLE `module_leader_tble`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90000000;

--
-- AUTO_INCREMENT for table `students_tble`
--
ALTER TABLE `students_tble`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35000005;

--
-- AUTO_INCREMENT for table `student_assignments_tble`
--
ALTER TABLE `student_assignments_tble`
  MODIFY `assignment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `announcements_tble`
--
ALTER TABLE `announcements_tble`
  ADD CONSTRAINT `announcements_tble_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin_tble` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `announcements_tble_ibfk_2` FOREIGN KEY (`course_leader_id`) REFERENCES `course_leader_tble` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `announcements_tble_ibfk_3` FOREIGN KEY (`lecturer_id`) REFERENCES `module_leader_tble` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `assignments_tble`
--
ALTER TABLE `assignments_tble`
  ADD CONSTRAINT `fk_as_module` FOREIGN KEY (`module_id`) REFERENCES `modules_tble` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `chapters_tble`
--
ALTER TABLE `chapters_tble`
  ADD CONSTRAINT `chapters_tble_ibfk_1` FOREIGN KEY (`module_id`) REFERENCES `modules_tble` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `course_leader_tble`
--
ALTER TABLE `course_leader_tble`
  ADD CONSTRAINT `fk_cl_course` FOREIGN KEY (`course_id`) REFERENCES `courses_tble` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `modules_tble`
--
ALTER TABLE `modules_tble`
  ADD CONSTRAINT `FK_CM` FOREIGN KEY (`course_id`) REFERENCES `courses_tble` (`id`);

--
-- Constraints for table `module_details`
--
ALTER TABLE `module_details`
  ADD CONSTRAINT `fk_md_modules` FOREIGN KEY (`module_id`) REFERENCES `modules_tble` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `module_lecturer_tble`
--
ALTER TABLE `module_lecturer_tble`
  ADD CONSTRAINT `fk_ml_lecturer` FOREIGN KEY (`lecturer_id`) REFERENCES `module_leader_tble` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_ml_module` FOREIGN KEY (`module_id`) REFERENCES `modules_tble` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
