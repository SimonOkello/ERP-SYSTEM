-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2017 at 12:46 PM
-- Server version: 5.5.34
-- PHP Version: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hr`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_service_credits`
--

CREATE TABLE IF NOT EXISTS `add_service_credits` (
  `add_service_credits_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `days` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  PRIMARY KEY (`add_service_credits_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `allotment`
--

CREATE TABLE IF NOT EXISTS `allotment` (
  `allot_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `block` varchar(11) NOT NULL,
  `roomNum` varchar(255) NOT NULL,
  `names` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`allot_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE IF NOT EXISTS `application` (
  `job_id` int(11) NOT NULL AUTO_INCREMENT,
  `job_code` varchar(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `telephone` int(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `document` varchar(500) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Pending',
  `place` varchar(255) NOT NULL DEFAULT 'No information!',
  `inter_date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`job_code`),
  KEY `job_id` (`job_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `attendance_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` varchar(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `login_date` datetime NOT NULL,
  `logout_date` datetime NOT NULL,
  PRIMARY KEY (`attendance_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `elementary`
--

CREATE TABLE IF NOT EXISTS `elementary` (
  `elementary_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `school_name` varchar(50) NOT NULL,
  `dates_from` year(4) NOT NULL,
  `dates_to` year(4) NOT NULL,
  `scholar_academic_honors` varchar(50) NOT NULL,
  PRIMARY KEY (`elementary_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `employee_details`
--

CREATE TABLE IF NOT EXISTS `employee_details` (
  `employee_details_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` varchar(11) NOT NULL,
  `citizenship` varchar(30) NOT NULL,
  `height` varchar(10) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `bloodtype` varchar(10) NOT NULL,
  `gsis_id_no` varchar(20) NOT NULL,
  `pag_ibig_id_no` varchar(20) NOT NULL,
  `philhealth_no` varchar(20) NOT NULL,
  `sss_no` varchar(20) NOT NULL,
  `residential_address` varchar(50) NOT NULL,
  `ra_zip_code` varchar(10) NOT NULL,
  `ra_telephone_no` varchar(20) NOT NULL,
  `permanent_address` varchar(50) NOT NULL,
  `pa_zip_code` varchar(10) NOT NULL,
  `pa_telephone_no` varchar(20) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `cellphone_no` varchar(20) NOT NULL,
  `agency_employee_no` varchar(20) NOT NULL,
  `tin` varchar(20) NOT NULL,
  PRIMARY KEY (`employee_details_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `employee_details`
--

INSERT INTO `employee_details` (`employee_details_id`, `employee_id`, `citizenship`, `height`, `weight`, `bloodtype`, `gsis_id_no`, `pag_ibig_id_no`, `philhealth_no`, `sss_no`, `residential_address`, `ra_zip_code`, `ra_telephone_no`, `permanent_address`, `pa_zip_code`, `pa_telephone_no`, `email_address`, `cellphone_no`, `agency_employee_no`, `tin`) VALUES
(1, '1', '', '', '', '', '', '', '', '', 'Ruiru', '', '0728435050', '', '', '', 'chemukoima@gmail.com', '', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `graduate_studies`
--

CREATE TABLE IF NOT EXISTS `graduate_studies` (
  `graduate_studies_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `school_name` varchar(100) NOT NULL,
  `degree_course` varchar(50) NOT NULL,
  `year_graduated` varchar(30) NOT NULL,
  `dates_from` varchar(50) NOT NULL,
  `dates_to` varchar(30) NOT NULL,
  `scholar_academic_honors` varchar(100) NOT NULL,
  PRIMARY KEY (`graduate_studies_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `housing`
--

CREATE TABLE IF NOT EXISTS `housing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `block` varchar(255) NOT NULL,
  `noOfrooms` int(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
  `job_id` int(11) NOT NULL AUTO_INCREMENT,
  `job_code` varchar(255) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`job_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `leave_credits`
--

CREATE TABLE IF NOT EXISTS `leave_credits` (
  `leave_credits_id` int(11) NOT NULL AUTO_INCREMENT,
  `leave_type` varchar(20) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `days` varchar(30) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Pending',
  PRIMARY KEY (`leave_credits_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `reciever_id` int(11) NOT NULL,
  `content` varchar(400) NOT NULL,
  `date_sended` varchar(100) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `reciever_name` varchar(50) NOT NULL,
  `sender_name` varchar(200) NOT NULL,
  `message_status` varchar(100) NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `personal_information`
--

CREATE TABLE IF NOT EXISTS `personal_information` (
  `employee_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `name_extension` varchar(10) NOT NULL,
  `place_birth` varchar(30) NOT NULL,
  `sex` varchar(30) NOT NULL,
  `civil_status` varchar(30) NOT NULL,
  `department` varchar(30) NOT NULL,
  `image` varchar(500) NOT NULL,
  `cis_no` varchar(50) NOT NULL,
  `position` varchar(30) NOT NULL,
  `date_of_birth` varchar(30) NOT NULL,
  `member_id` varchar(100) NOT NULL,
  PRIMARY KEY (`employee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `personal_information`
--

INSERT INTO `personal_information` (`employee_id`, `firstname`, `middlename`, `surname`, `name_extension`, `place_birth`, `sex`, `civil_status`, `department`, `image`, `cis_no`, `position`, `date_of_birth`, `member_id`) VALUES
(1, 'Zeddy', 'Chemutai', 'Koima', 'Miss', '', 'Female', 'Single', 'ICT', 'EMP004.jpeg', '', 'administrative officer IV', '2017-11-14', '');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` varchar(11) NOT NULL,
  `proj_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `cost` varchar(255) NOT NULL,
  `client` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `progress` varchar(255) NOT NULL,
  `assigned_to` varchar(255) NOT NULL DEFAULT 'No one!',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `secondary`
--

CREATE TABLE IF NOT EXISTS `secondary` (
  `secondary_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` varchar(11) NOT NULL,
  `school_name` varchar(100) NOT NULL,
  `dates_from` year(4) NOT NULL,
  `dates_to` year(4) NOT NULL,
  `scholar_academic_honors` varchar(100) NOT NULL,
  PRIMARY KEY (`secondary_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `service_credits`
--

CREATE TABLE IF NOT EXISTS `service_credits` (
  `service_credits_id` int(11) NOT NULL AUTO_INCREMENT,
  `Balance` varchar(20) NOT NULL DEFAULT '30',
  `employee_id` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`service_credits_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `service_credits`
--

INSERT INTO `service_credits` (`service_credits_id`, `Balance`, `employee_id`, `date`) VALUES
(1, '30', 1, '2017-11-14');

-- --------------------------------------------------------

--
-- Table structure for table `team_members`
--

CREATE TABLE IF NOT EXISTS `team_members` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `id_card` int(11) NOT NULL,
  `names` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `termination`
--

CREATE TABLE IF NOT EXISTS `termination` (
  `termination_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `reason` varchar(255) NOT NULL,
  PRIMARY KEY (`termination_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `training_programs`
--

CREATE TABLE IF NOT EXISTS `training_programs` (
  `training_programs_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `title_seminar` varchar(100) NOT NULL,
  `date_from` varchar(30) NOT NULL,
  `date_to` varchar(30) NOT NULL,
  `number_hours` varchar(10) NOT NULL,
  `conducted` varchar(100) NOT NULL,
  PRIMARY KEY (`training_programs_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `employee_id`, `username`, `password`) VALUES
(1, 1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `work_experience`
--

CREATE TABLE IF NOT EXISTS `work_experience` (
  `work_experience_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `dates_from` varchar(30) NOT NULL,
  `dates_to` varchar(30) NOT NULL,
  `position_title` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `company_name` varchar(30) NOT NULL,
  `company_phone` varchar(10) NOT NULL,
  PRIMARY KEY (`work_experience_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
