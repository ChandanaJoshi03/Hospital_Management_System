-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 22, 2026 at 05:36 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

DROP TABLE IF EXISTS `appointment`;
CREATE TABLE IF NOT EXISTS `appointment` (
  `appointment_id` int(10) NOT NULL AUTO_INCREMENT,
  `patient_id` int(10) NOT NULL,
  `appointment_name` varchar(50) NOT NULL,
  `appointment_date` date NOT NULL,
  `appointment_status` varchar(100) NOT NULL,
  PRIMARY KEY (`appointment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointment_id`, `patient_id`, `appointment_name`, `appointment_date`, `appointment_status`) VALUES
(5, 8, 'suresh', '2020-02-02', 'GOOD'),
(9, 23, 'Vinayak', '2020-08-29', 'Accepted'),
(14, 35, 'Chandana', '2021-08-04', 'Accepted'),
(17, 44, 'coldfever', '2021-08-04', 'Accepted'),
(18, 45, 'fever', '2021-08-04', 'Accepted'),
(22, 50, 'Cold', '2026-02-15', 'Accepted'),
(23, 50, 'fever', '2026-02-15', 'Rejected');

-- --------------------------------------------------------

--
-- Table structure for table `appointment_cancel`
--

DROP TABLE IF EXISTS `appointment_cancel`;
CREATE TABLE IF NOT EXISTS `appointment_cancel` (
  `appointment_cancel_id` int(11) NOT NULL AUTO_INCREMENT,
  `appointment_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `dat` date NOT NULL,
  PRIMARY KEY (`appointment_cancel_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment_cancel`
--

INSERT INTO `appointment_cancel` (`appointment_cancel_id`, `appointment_id`, `patient_id`, `description`, `dat`) VALUES
(5, 20, 45, 'fracture', '2021-08-05'),
(6, 20, 45, 'fracture', '2021-08-05');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

DROP TABLE IF EXISTS `cities`;
CREATE TABLE IF NOT EXISTS `cities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `city_name`) VALUES
(1, 'Bangalore'),
(2, 'Mangalore'),
(3, 'Hubli'),
(4, 'Dharwad'),
(5, 'Gulbarga'),
(6, 'Shahapur'),
(7, 'Belagavi'),
(8, 'Ballary');

-- --------------------------------------------------------

--
-- Table structure for table `employee_details`
--

DROP TABLE IF EXISTS `employee_details`;
CREATE TABLE IF NOT EXISTS `employee_details` (
  `employee_id` int(10) NOT NULL AUTO_INCREMENT,
  `employee_name` varchar(50) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `dob` date NOT NULL,
  `designation` varchar(100) NOT NULL,
  `experience` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(15) NOT NULL,
  `contact_no` varchar(10) NOT NULL,
  `email_id` varchar(20) NOT NULL,
  PRIMARY KEY (`employee_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_details`
--

INSERT INTO `employee_details` (`employee_id`, `employee_name`, `gender`, `dob`, `designation`, `experience`, `address`, `city`, `contact_no`, `email_id`) VALUES
(4, 'Santosh', 'male', '0000-00-00', 'Assistant', 'one year', 'holikopp', 'hydra', '9844344436', ''),
(6, 'chandana', 'female', '1999-12-03', 'computer work', '1 year', 'near sbi atm dharwad', 'dharwad', '9874561230', 'chandana'),
(8, 'komal C D', 'Female', '1999-07-23', 'computer ', '2 year', 'Near suvarna college dharwad', 'Dharwad', '9844344436', 'komalcd@gmail.com'),
(11, 'Mitr', 'Male', '2000-08-04', 'Asst', '2', 'Saptapur Dharwad', 'Dharwad', '9611778055', 'himitr@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `employee_shift_details`
--

DROP TABLE IF EXISTS `employee_shift_details`;
CREATE TABLE IF NOT EXISTS `employee_shift_details` (
  `employee_shift_id` int(10) NOT NULL AUTO_INCREMENT,
  `employee_id` int(10) NOT NULL,
  `shift_id` int(10) NOT NULL,
  PRIMARY KEY (`employee_shift_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_shift_details`
--

INSERT INTO `employee_shift_details` (`employee_shift_id`, `employee_id`, `shift_id`) VALUES
(6, 4, 10),
(7, 3, 7),
(8, 4, 8),
(9, 6, 7),
(10, 11, 9),
(11, 8, 13);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `login_id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` varchar(10) NOT NULL,
  `hint_q` varchar(30) NOT NULL,
  `hint_a` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `username`, `password`, `type`, `hint_q`, `hint_a`, `status`) VALUES
(24, 'admin', 'admin', 'admin', 'nick name', 'admin', 'Cured'),
(33, '8310644', '123123', 'patient', 'Enter Register Email address', 'komal@gmail.com', 'Cured'),
(34, '94497033', 'chandu', 'patient', 'Enter Register Email address', 'chandana@gmail.com', 'Active'),
(35, '827714', 'venkateshr', 'patient', 'Enter Register Email address', 'venkatesh@gmail.com', 'Active'),
(38, '9876541230', 'Ramram@1', 'patient', 'Enter Register Email address', 'chandanarj@gmail.com', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `patient_health_details`
--

DROP TABLE IF EXISTS `patient_health_details`;
CREATE TABLE IF NOT EXISTS `patient_health_details` (
  `patient_health_details_id` int(10) NOT NULL AUTO_INCREMENT,
  `patient_id` int(10) NOT NULL,
  `health_details` varchar(30) NOT NULL,
  `updated_date` date NOT NULL,
  `health_report_attachment` varchar(30) NOT NULL,
  PRIMARY KEY (`patient_health_details_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_health_details`
--

INSERT INTO `patient_health_details` (`patient_health_details_id`, `patient_id`, `health_details`, `updated_date`, `health_report_attachment`) VALUES
(17, 35, 'fever', '2021-08-03', 'panda.jpeg'),
(19, 37, 'Symptoms of Mild Fever', '2021-08-05', 'cute-panda-with-bamboo.jpg'),
(21, 44, 'coldfever', '2021-08-04', 'hospital_management (2).sql'),
(22, 43, 'fever', '2021-08-04', 'pink cat.jpg'),
(23, 42, 'backpain', '2021-08-04', 'pink cat.jpg'),
(24, 46, 'Back pain', '2021-08-05', 'recept1.jpg'),
(25, 47, 'fever', '2021-08-05', 'recept1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `patient_test`
--

DROP TABLE IF EXISTS `patient_test`;
CREATE TABLE IF NOT EXISTS `patient_test` (
  `patient_test_id` int(10) NOT NULL AUTO_INCREMENT,
  `patient_id` int(10) NOT NULL,
  `test_details_id` int(10) NOT NULL,
  `discription` varchar(100) NOT NULL,
  `test_date` varchar(20) NOT NULL,
  `test_status` varchar(100) NOT NULL,
  PRIMARY KEY (`patient_test_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_test`
--

INSERT INTO `patient_test` (`patient_test_id`, `patient_id`, `test_details_id`, `discription`, `test_date`, `test_status`) VALUES
(20, 16, 13, 'demo', '2020-08-29', 'Approved'),
(23, 24, 15, 'blood cancer', '2020-09-01', 'Approved'),
(25, 35, 14, 'demo', '2021-08-03', 'Approved'),
(26, 37, 13, 'Suggested to obtain bt done', '2021-08-04', 'Approved'),
(27, 44, 13, 'corona test', '2021-08-04', 'Approved'),
(28, 43, 14, 'joint pain', '2021-08-04', 'Approved'),
(29, 46, 14, 'back pain', '2021-08-05', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `p_details`
--

DROP TABLE IF EXISTS `p_details`;
CREATE TABLE IF NOT EXISTS `p_details` (
  `patient_id` int(10) NOT NULL AUTO_INCREMENT,
  `patient_full_name` varchar(50) NOT NULL,
  `patient_address` varchar(100) NOT NULL,
  `city` varchar(15) NOT NULL,
  `contact_no` varchar(10) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `blood_group` varchar(20) NOT NULL,
  `email_id` varchar(20) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `p_code` varchar(100) NOT NULL,
  PRIMARY KEY (`patient_id`),
  UNIQUE KEY `contact_no` (`contact_no`),
  UNIQUE KEY `email_id` (`email_id`),
  UNIQUE KEY `contact_no_2` (`contact_no`),
  UNIQUE KEY `email_id_2` (`email_id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_details`
--

INSERT INTO `p_details` (`patient_id`, `patient_full_name`, `patient_address`, `city`, `contact_no`, `dob`, `gender`, `blood_group`, `email_id`, `photo`, `p_code`) VALUES
(42, 'raghu', 'belagavi', 'bgm', '9087654', '1994-04-21', 'Female', 'A', 'raghu@gmail.com', 'panda.jpeg', '580012'),
(43, 'chandana', 'belagavi', 'bgm', '9632208', '1999-12-03', '', 'A', 'chan@gmail.com', 'panda.jpeg', '591444'),
(44, 'komal', 'kittur', 'dwd', '8310644', '1999-07-23', 'Female', 'A', 'komal@gmail.com', 'HD-wallpaper-chandu-name-neon-chandu-neon-light-neon-name-name-design-person-name-your-names.jpg', '590021'),
(45, 'chandana', 'joshi', 'hubli', '94497033', '1999-12-03', 'Female', 'A', 'crj@gmail.com', 'cute-panda-with-bamboo.jpg', '580003'),
(50, 'Chandana J', 'Srinagar', 'Bangalore', '9876541230', '1999-12-03', 'Female', 'B+', 'chandanarj@gmail.com', '', '560050');

-- --------------------------------------------------------

--
-- Table structure for table `shift_id`
--

DROP TABLE IF EXISTS `shift_id`;
CREATE TABLE IF NOT EXISTS `shift_id` (
  `shift_id` int(10) NOT NULL AUTO_INCREMENT,
  `shift_name` varchar(50) NOT NULL,
  PRIMARY KEY (`shift_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shift_id`
--

INSERT INTO `shift_id` (`shift_id`, `shift_name`) VALUES
(7, 'Morning'),
(8, 'Afternoon '),
(9, 'Evening'),
(12, 'Night'),
(13, 'General day');

-- --------------------------------------------------------

--
-- Table structure for table `test_details`
--

DROP TABLE IF EXISTS `test_details`;
CREATE TABLE IF NOT EXISTS `test_details` (
  `test_details_id` int(10) NOT NULL AUTO_INCREMENT,
  `test_name` varchar(50) NOT NULL,
  `test_discription` varchar(100) NOT NULL,
  `test_rate` int(20) NOT NULL,
  `test_duration` time NOT NULL,
  PRIMARY KEY (`test_details_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test_details`
--

INSERT INTO `test_details` (`test_details_id`, `test_name`, `test_discription`, `test_rate`, `test_duration`) VALUES
(13, 'Blood', 'Evaluate all diseage', 500, '00:15:00'),
(14, 'Arthroscopy', 'joint pains', 5000, '00:30:15'),
(15, 'HAEMATOLOGY', 'BLOOD', 350, '00:10:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
