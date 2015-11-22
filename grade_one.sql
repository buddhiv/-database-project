-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2015 at 05:46 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `grade_one`
--

-- --------------------------------------------------------

--
-- Table structure for table `acadamic`
--

CREATE TABLE IF NOT EXISTS `acadamic` (
  `acadamic_id` int(10) NOT NULL DEFAULT '0',
  `exam` varchar(255) DEFAULT NULL,
  `subject` varchar(31) DEFAULT NULL,
  `result` varchar(7) NOT NULL,
  PRIMARY KEY (`acadamic_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `achievement`
--

CREATE TABLE IF NOT EXISTS `achievement` (
  `achievement_id` int(10) NOT NULL AUTO_INCREMENT,
  `year` date DEFAULT NULL,
  `Student_SchoolStudentstudent_id` int(10) NOT NULL,
  `Student_SchoolSchoolschool_id` int(10) NOT NULL,
  PRIMARY KEY (`achievement_id`),
  KEY `get` (`Student_SchoolStudentstudent_id`,`Student_SchoolSchoolschool_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE IF NOT EXISTS `applicant` (
  `applicant_id` int(10) NOT NULL,
  `name_in_full` varchar(255) NOT NULL,
  `name_with_initials` varchar(255) NOT NULL,
  `nic` varchar(15) NOT NULL,
  `religion` varchar(31) NOT NULL,
  `address` varchar(255) NOT NULL,
  `is_sri_lankan` tinyint(4) NOT NULL,
  `district` varchar(31) NOT NULL,
  `divisional_sec_area` varchar(63) NOT NULL,
  `grama_niladari_divi` varchar(63) NOT NULL,
  `telephone` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`applicant_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `child`
--

CREATE TABLE IF NOT EXISTS `child` (
  `child_id` int(10) NOT NULL,
  `name_in_full` varchar(255) DEFAULT NULL,
  `name_with_initials` varchar(255) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `religion` varchar(31) DEFAULT NULL,
  `sex` varchar(7) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `medium` varchar(15) NOT NULL,
  `Applicantapplicant_id` int(10) NOT NULL,
  `Location_infolocation_info_id` int(10) NOT NULL,
  `Methodmethod_id` int(10) NOT NULL,
  PRIMARY KEY (`child_id`),
  KEY `has` (`Applicantapplicant_id`),
  KEY `applying_on` (`Methodmethod_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `location_duration_info`
--

CREATE TABLE IF NOT EXISTS `location_duration_info` (
  `location_id` int(10) NOT NULL AUTO_INCREMENT,
  `year` date DEFAULT NULL,
  `grama_div` varchar(255) DEFAULT NULL,
  `polling_div` varchar(255) DEFAULT NULL,
  `polling_district` varchar(255) DEFAULT NULL,
  `Childchild_id` int(10) NOT NULL,
  `confirm` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`location_id`),
  KEY `at` (`Childchild_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE IF NOT EXISTS `marks` (
  `mark_id` int(10) NOT NULL AUTO_INCREMENT,
  `case` int(10) DEFAULT NULL,
  `marks` int(10) DEFAULT NULL,
  `Childchild_id` int(10) NOT NULL,
  PRIMARY KEY (`mark_id`),
  KEY `graded_with` (`Childchild_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `method`
--

CREATE TABLE IF NOT EXISTS `method` (
  `method_id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`method_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `non acadamic`
--

CREATE TABLE IF NOT EXISTS `non acadamic` (
  `non_acadamic_id` int(10) NOT NULL DEFAULT '0',
  `case` varchar(255) DEFAULT NULL,
  `place` int(10) DEFAULT NULL,
  PRIMARY KEY (`non_acadamic_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `past_pupil_method`
--

CREATE TABLE IF NOT EXISTS `past_pupil_method` (
  `Studentstudent_id` int(10) NOT NULL,
  KEY `assign_past_pupil` (`Studentstudent_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `present_pupil_method`
--

CREATE TABLE IF NOT EXISTS `present_pupil_method` (
  `Studentstudent_id` int(10) NOT NULL,
  KEY `assign_present_pupil` (`Studentstudent_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resident_method`
--

CREATE TABLE IF NOT EXISTS `resident_method` (
  `resident_id` int(10) NOT NULL,
  `num_of_years_spent` int(10) DEFAULT NULL,
  `ownership` varchar(127) NOT NULL,
  `num_of_closes_schools` int(10) DEFAULT NULL,
  `confirm` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE IF NOT EXISTS `school` (
  `school_id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `district` varchar(31) DEFAULT NULL,
  `divisional_sec_area` varchar(63) DEFAULT NULL,
  `telephone` varchar(15) DEFAULT NULL,
  `category` varchar(31) NOT NULL,
  `is_rural` int(10) DEFAULT NULL,
  PRIMARY KEY (`school_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `school_child`
--

CREATE TABLE IF NOT EXISTS `school_child` (
  `Schoolschool_id` int(10) NOT NULL,
  `Childchild_id` int(10) NOT NULL,
  `distance` double NOT NULL,
  `priority` int(10) NOT NULL,
  PRIMARY KEY (`Schoolschool_id`,`Childchild_id`),
  KEY `FKSchool_Chi805148` (`Childchild_id`),
  KEY `FKSchool_Chi426422` (`Schoolschool_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff_method`
--

CREATE TABLE IF NOT EXISTS `staff_method` (
  `Teacherteacher_id` int(10) NOT NULL,
  KEY `assign_teacher` (`Teacherteacher_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `student_id` int(10) NOT NULL AUTO_INCREMENT,
  `number` int(10) DEFAULT NULL,
  `name_in_full` varchar(63) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student_school`
--

CREATE TABLE IF NOT EXISTS `student_school` (
  `Studentstudent_id` int(10) NOT NULL,
  `Schoolschool_id` int(10) NOT NULL,
  `registered_date` date DEFAULT NULL,
  `leaving_date` date DEFAULT NULL,
  `is_old_boy` tinyint(4) NOT NULL,
  `starting_grade` int(10) DEFAULT NULL,
  `Column` int(10) DEFAULT NULL,
  PRIMARY KEY (`Studentstudent_id`,`Schoolschool_id`),
  KEY `FKStudent_Sc753998` (`Studentstudent_id`),
  KEY `FKStudent_Sc241997` (`Schoolschool_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `teacher_id` int(10) NOT NULL AUTO_INCREMENT,
  `subject` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `name_in_full` varchar(255) DEFAULT NULL,
  `telephone` int(10) NOT NULL,
  PRIMARY KEY (`teacher_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `teacher_school`
--

CREATE TABLE IF NOT EXISTS `teacher_school` (
  `Teacherteacher_id` int(10) NOT NULL,
  `Schoolschool_id` int(10) NOT NULL,
  `start_of_working_date` date NOT NULL,
  `leaving_date` date NOT NULL,
  `distance_from_permanent_residence` int(10) NOT NULL,
  PRIMARY KEY (`Teacherteacher_id`,`Schoolschool_id`),
  KEY `FKTeacher_Sc884864` (`Teacherteacher_id`),
  KEY `FKTeacher_Sc916622` (`Schoolschool_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `achievement`
--
ALTER TABLE `achievement`
  ADD CONSTRAINT `get` FOREIGN KEY (`Student_SchoolStudentstudent_id`, `Student_SchoolSchoolschool_id`) REFERENCES `student_school` (`Studentstudent_id`, `Schoolschool_id`);

--
-- Constraints for table `child`
--
ALTER TABLE `child`
  ADD CONSTRAINT `applying_on` FOREIGN KEY (`Methodmethod_id`) REFERENCES `method` (`method_id`),
  ADD CONSTRAINT `has` FOREIGN KEY (`Applicantapplicant_id`) REFERENCES `applicant` (`applicant_id`);

--
-- Constraints for table `location_duration_info`
--
ALTER TABLE `location_duration_info`
  ADD CONSTRAINT `at` FOREIGN KEY (`Childchild_id`) REFERENCES `child` (`child_id`);

--
-- Constraints for table `marks`
--
ALTER TABLE `marks`
  ADD CONSTRAINT `graded_with` FOREIGN KEY (`Childchild_id`) REFERENCES `child` (`child_id`);

--
-- Constraints for table `past_pupil_method`
--
ALTER TABLE `past_pupil_method`
  ADD CONSTRAINT `assign_past_pupil` FOREIGN KEY (`Studentstudent_id`) REFERENCES `student` (`student_id`);

--
-- Constraints for table `present_pupil_method`
--
ALTER TABLE `present_pupil_method`
  ADD CONSTRAINT `assign_present_pupil` FOREIGN KEY (`Studentstudent_id`) REFERENCES `student` (`student_id`);

--
-- Constraints for table `school_child`
--
ALTER TABLE `school_child`
  ADD CONSTRAINT `FKSchool_Chi426422` FOREIGN KEY (`Schoolschool_id`) REFERENCES `school` (`school_id`),
  ADD CONSTRAINT `FKSchool_Chi805148` FOREIGN KEY (`Childchild_id`) REFERENCES `child` (`child_id`);

--
-- Constraints for table `staff_method`
--
ALTER TABLE `staff_method`
  ADD CONSTRAINT `assign_teacher` FOREIGN KEY (`Teacherteacher_id`) REFERENCES `teacher` (`teacher_id`);

--
-- Constraints for table `student_school`
--
ALTER TABLE `student_school`
  ADD CONSTRAINT `FKStudent_Sc241997` FOREIGN KEY (`Schoolschool_id`) REFERENCES `school` (`school_id`),
  ADD CONSTRAINT `FKStudent_Sc753998` FOREIGN KEY (`Studentstudent_id`) REFERENCES `student` (`student_id`);

--
-- Constraints for table `teacher_school`
--
ALTER TABLE `teacher_school`
  ADD CONSTRAINT `FKTeacher_Sc884864` FOREIGN KEY (`Teacherteacher_id`) REFERENCES `teacher` (`teacher_id`),
  ADD CONSTRAINT `FKTeacher_Sc916622` FOREIGN KEY (`Schoolschool_id`) REFERENCES `school` (`school_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
