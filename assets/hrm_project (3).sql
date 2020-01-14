-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2018 at 06:25 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrm_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance_file`
--

CREATE TABLE `attendance_file` (
  `file_id` int(11) NOT NULL,
  `attendance_file_name` varchar(200) NOT NULL,
  `upload_date` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `attendance_info`
--

CREATE TABLE `attendance_info` (
  `attendance_id` int(25) NOT NULL,
  `employee_id` varchar(15) DEFAULT NULL,
  `ac_no` varchar(15) DEFAULT NULL,
  `no` varchar(15) DEFAULT NULL,
  `employee_name` varchar(65) DEFAULT NULL,
  `auto_assign` varchar(15) DEFAULT NULL,
  `a_date` date DEFAULT NULL,
  `timetable` varchar(15) DEFAULT NULL,
  `on_duty` varchar(15) DEFAULT NULL,
  `off_duty` varchar(15) DEFAULT NULL,
  `clock_in` varchar(15) DEFAULT NULL,
  `clock_out` varchar(15) DEFAULT NULL,
  `normal` varchar(15) DEFAULT NULL,
  `real_time` varchar(15) DEFAULT NULL,
  `late` decimal(15,2) DEFAULT NULL,
  `early` decimal(15,2) DEFAULT NULL,
  `absent` varchar(15) DEFAULT NULL,
  `ot_time` decimal(15,2) DEFAULT NULL,
  `work_time` varchar(15) DEFAULT NULL,
  `exception` varchar(15) DEFAULT NULL,
  `must_c_in` varchar(15) DEFAULT NULL,
  `must_c_out` varchar(15) DEFAULT NULL,
  `department` varchar(15) DEFAULT NULL,
  `ndays` varchar(15) DEFAULT NULL,
  `weekend` varchar(15) DEFAULT NULL,
  `holiday` varchar(15) DEFAULT NULL,
  `att_time` varchar(15) DEFAULT NULL,
  `n_days_ot` varchar(15) DEFAULT NULL,
  `weekend_ot` varchar(15) DEFAULT NULL,
  `holiday_ot` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance_info`
--

INSERT INTO `attendance_info` (`attendance_id`, `employee_id`, `ac_no`, `no`, `employee_name`, `auto_assign`, `a_date`, `timetable`, `on_duty`, `off_duty`, `clock_in`, `clock_out`, `normal`, `real_time`, `late`, `early`, `absent`, `ot_time`, `work_time`, `exception`, `must_c_in`, `must_c_out`, `department`, `ndays`, `weekend`, `holiday`, `att_time`, `n_days_ot`, `weekend_ot`, `holiday_ot`) VALUES
(1, 'EMP3178', '97', '', 'Jony Shikdar', 'May', '2018-05-01', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(2, 'EMP3178', '97', '', 'Jony Shikdar', 'May', '2018-05-02', 'Daytime', '', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(3, 'EMP3178', '97', '', 'Jony Shikdar', 'May', '2018-05-03', 'Daytime', '09:00', '19:05', '', '', '1', '', '0.00', '0.00', '', '65.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(4, 'EMP3178', '98', '', 'Jony Shikdar', 'May', '2018-05-04', 'Daytime', '10:20', '18:00', '', '', '1', '', '80.00', '0.00', '', '150.00', '', '', 'True', 'True', 'Jacquard', '', 'WeekEnd', '', '', '', '', ''),
(5, 'EMP3178', '97', '', 'Jony Shikdar', 'May', '2018-05-05', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(6, 'EMP3178', '97', '', 'Jony Shikdar', 'May', '2018-05-06', 'Daytime', '08:48', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(7, 'EMP3178', '97', '', 'Jony Shikdar', 'May', '2018-05-07', 'Daytime', '', '', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(8, 'EMP3178', '97', '', 'Jony Shikdar', 'May', '2018-05-08', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(9, 'EMP3178', '97', '', 'Jony Shikdar', 'May', '2018-05-09', 'Daytime', '09:00', '18:00', '', '', '1', '', '60.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(10, 'EMP3178', '97', '', 'Jony Shikdar', 'May', '2018-05-10', 'Daytime', '10:00', '18:00', '', '', '1', '', '60.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(11, 'EMP3178', '97', '', 'Jony Shikdar', 'May', '2018-05-11', 'Daytime', '', '', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', 'WeekEnd', '', '', '', '', ''),
(12, 'EMP3178', '97', '', 'Jony Shikdar', 'May', '2018-05-12', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(13, 'EMP3178', '97', '', 'Jony Shikdar', 'May', '2018-05-13', 'Daytime', '09:00', '19:05', '', '', '1', '', '0.00', '0.00', '', '65.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(14, 'EMP3178', '97', '', 'Jony Shikdar', 'May', '2018-05-14', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(15, 'EMP3178', '97', '', 'Jony Shikdar', 'May', '2018-05-15', 'Daytime', '', '', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(16, 'EMP3178', '97', '', 'Jony Shikdar', 'May', '2018-05-16', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(17, 'EMP3178', '97', '', 'Jony Shikdar', 'May', '2018-05-17', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(18, 'EMP3178', '97', '', 'Jony Shikdar', 'May', '2018-05-18', 'Daytime', '', '', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', 'WeekEnd', '', '', '', '', ''),
(19, 'EMP3178', '97', '', 'Jony Shikdar', 'May', '2018-05-19', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(20, 'EMP3178', '97', '', 'Jony Shikdar', 'May', '2018-05-20', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(21, 'EMP3178', '97', '', 'Jony Shikdar', 'May', '2018-05-21', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(22, 'EMP3178', '97', '', 'Jony Shikdar', 'May', '2018-05-22', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(23, 'EMP3178', '97', '', 'Jony Shikdar', 'May', '2018-05-23', 'Daytime', '09:20', '18:00', '', '', '1', '', '20.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(24, 'EMP3178', '97', '', 'Jony Shikdar', 'May', '2018-05-24', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(25, 'EMP3178', '98', '', 'Jony Shikdar', 'May', '2018-05-25', 'Daytime', '', '', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', 'WeekEnd', '', '', '', '', ''),
(26, 'EMP3178', '98', '', 'Jony Shikdar', 'May', '2018-05-26', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(27, 'EMP3178', '98', '', 'Jony Shikdar', 'May', '2018-05-27', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(28, 'EMP3178', '98', '', 'Jony Shikdar', 'May', '2018-05-28', 'Daytime', '09:35', '18:00', '', '', '1', '', '35.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(29, 'EMP3178', '98', '', 'Jony Shikdar', 'May', '2018-05-29', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(30, 'EMP3178', '98', '', 'Jony Shikdar', 'May', '2018-05-30', 'Daytime', '09:00', '17:45', '', '', '1', '', '0.00', '0.15', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(31, 'EMP3178', '98', '', 'Jony Shikdar', 'May', '2018-05-31', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(32, 'EMP8026 ', '98', '', 'Robin', 'May', '2018-05-01', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(33, 'EMP8026 ', '98', '', 'Robin', 'May', '2018-05-02', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(34, 'EMP8026 ', '98', '', 'Robin', 'May', '2018-05-03', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(35, 'EMP8026 ', '98', '', 'Robin', 'May', '2018-05-04', 'Daytime', '', '', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', 'WeekEnd', '', '', '', '', ''),
(36, 'EMP8026 ', '98', '', 'Robin', 'May', '2018-05-05', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(37, 'EMP8026 ', '98', '', 'Robin', 'May', '2018-05-06', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(38, 'EMP8026 ', '98', '', 'Robin', 'May', '2018-05-07', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(39, 'EMP8026 ', '98', '', 'Robin', 'May', '2018-05-08', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(40, 'EMP8026 ', '98', '', 'Robin', 'May', '2018-05-09', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(41, 'EMP8026 ', '98', '', 'Robin', 'May', '2018-05-10', 'Daytime', '09:00', '17:50', '', '', '1', '', '0.00', '0.10', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(42, 'EMP8026 ', '98', '', 'Robin', 'May', '2018-05-11', 'Daytime', '', '', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', 'WeekEnd', '', '', '', '', ''),
(43, 'EMP8026 ', '98', '', 'Robin', 'May', '2018-05-12', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(44, 'EMP8026 ', '98', '', 'Robin', 'May', '2018-05-13', 'Daytime', '10:00', '18:00', '', '', '1', '', '1.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(45, 'EMP8026 ', '98', '', 'Robin', 'May', '2018-05-14', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(46, 'EMP8026 ', '98', '', 'Robin', 'May', '2018-05-15', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(47, 'EMP8026 ', '98', '', 'Robin', 'May', '2018-05-16', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(48, 'EMP8026 ', '98', '', 'Robin', 'May', '2018-05-17', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(49, 'EMP8026 ', '99', '', 'Robin', 'May', '2018-05-18', 'Daytime', '', '', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', 'WeekEnd', '', '', '', '', ''),
(50, 'EMP8026 ', '99', '', 'Robin', 'May', '2018-05-19', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(51, 'EMP8026 ', '99', '', 'Robin', 'May', '2018-05-20', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(52, 'EMP8026 ', '99', '', 'Robin', 'May', '2018-05-21', 'Daytime', '11:00', '18:00', '', '', '1', '', '2.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(53, 'EMP8026 ', '99', '', 'Robin', 'May', '2018-05-22', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(54, 'EMP8026 ', '99', '', 'Robin', 'May', '2018-05-23', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(55, 'EMP8026 ', '99', '', 'Robin', 'May', '2018-05-24', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(56, 'EMP8026 ', '99', '', 'Robin', 'May', '2018-05-25', 'Daytime', '', '', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', 'WeekEnd', '', '', '', '', ''),
(57, 'EMP8026 ', '99', '', 'Robin', 'May', '2018-05-26', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(58, 'EMP8026 ', '99', '', 'Robin', 'May', '2018-05-27', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(59, 'EMP8026 ', '99', '', 'Robin', 'May', '2018-05-28', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(60, 'EMP8026 ', '99', '', 'Robin', 'May', '2018-05-29', 'Daytime', '09:35', '18:00', '', '', '1', '', '0.35', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(61, 'EMP8026 ', '99', '', 'Robin', 'May', '2018-05-30', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(62, 'EMP8026 ', '99', '', 'Robin', 'May', '2018-05-31', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(63, 'EMP8393', '99', '', 'Md Saddam Hossain', 'May', '2018-05-01', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(64, 'EMP8393', '99', '', 'Md Saddam Hossain', 'May', '2018-05-02', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(65, 'EMP8393', '99', '', 'Md Saddam Hossain', 'May', '2018-05-03', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(66, 'EMP8393', '99', '', 'Md Saddam Hossain', 'May', '2018-05-04', 'Daytime', '', '', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', 'WeekEnd', '', '', '', '', ''),
(67, 'EMP8393', '99', '', 'Md Saddam Hossain', 'May', '2018-05-05', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(68, 'EMP8393', '99', '', 'Md Saddam Hossain', 'May', '2018-05-06', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(69, 'EMP8393', '99', '', 'Md Saddam Hossain', 'May', '2018-05-07', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(70, 'EMP8393', '99', '', 'Md Saddam Hossain', 'May', '2018-05-08', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(71, 'EMP8393', '99', '', 'Md Saddam Hossain', 'May', '2018-05-09', 'Daytime', '09:00', '14:00', '', '', '1', '', '0.00', '4.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(72, 'EMP8393', '99', '', 'Md Saddam Hossain', 'May', '2018-05-10', 'Daytime', '09:20', '18:00', '', '', '1', '', '0.20', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(73, 'EMP8393', '100', '', 'Md Saddam Hossain', 'May', '2018-05-11', 'Daytime', '', '', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', 'WeekEnd', '', '', '', '', ''),
(74, 'EMP8393', '100', '', 'Md Saddam Hossain', 'May', '2018-05-12', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(75, 'EMP8393', '100', '', 'Md Saddam Hossain', 'May', '2018-05-13', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(76, 'EMP8393', '100', '', 'Md Saddam Hossain', 'May', '2018-05-14', 'Daytime', '09:00', '15:40', '', '', '1', '', '0.00', '2.20', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(77, 'EMP8393', '100', '', 'Md Saddam Hossain', 'May', '2018-05-15', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(78, 'EMP8393', '100', '', 'Md Saddam Hossain', 'May', '2018-05-16', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(79, 'EMP8393', '100', '', 'Md Saddam Hossain', 'May', '2018-05-17', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(80, 'EMP8393', '100', '', 'Md Saddam Hossain', 'May', '2018-05-18', 'Daytime', '', '', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', 'WeekEnd', '', '', '', '', ''),
(81, 'EMP8393', '100', '', 'Md Saddam Hossain', 'May', '2018-05-19', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(82, 'EMP8393', '100', '', 'Md Saddam Hossain', 'May', '2018-05-20', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(83, 'EMP8393', '100', '', 'Md Saddam Hossain', 'May', '2018-05-21', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(84, 'EMP8393', '100', '', 'Md Saddam Hossain', 'May', '2018-05-22', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(85, 'EMP8393', '100', '', 'Md Saddam Hossain', 'May', '2018-05-23', 'Daytime', '09:45', '19:00', '', '', '1', '', '0.45', '0.00', '', '1.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(86, 'EMP8393', '100', '', 'Md Saddam Hossain', 'May', '2018-05-24', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(87, 'EMP8393', '100', '', 'Md Saddam Hossain', 'May', '2018-05-25', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', 'WeekEnd', '', '', '', '', ''),
(88, 'EMP8393', '100', '', 'Md Saddam Hossain', 'May', '2018-05-26', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(89, 'EMP8393', '100', '', 'Md Saddam Hossain', 'May', '2018-05-27', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(90, 'EMP8393', '100', '', 'Md Saddam Hossain', 'May', '2018-05-28', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(91, 'EMP8393', '100', '', 'Md Saddam Hossain', 'May', '2018-05-29', 'Daytime', '09:34', '18:00', '', '', '1', '', '0.34', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(92, 'EMP8393', '100', '', 'Md Saddam Hossain', 'May', '2018-05-30', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(93, 'EMP8393', '100', '', 'Md Saddam Hossain', 'May', '2018-05-31', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(94, 'EMP6825', '100', '', 'Md. Mohsin', 'May', '2018-05-01', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(95, 'EMP6825', '100', '', 'Md. Mohsin', 'May', '2018-05-02', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(96, 'EMP6825', '100', '', 'Md. Mohsin', 'May', '2018-05-03', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(97, 'EMP6825', '101', '', 'Md. Mohsin', 'May', '2018-05-04', 'Daytime', '', '', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', 'WeekEnd', '', '', '', '', ''),
(98, 'EMP6825', '101', '', 'Md. Mohsin', 'May', '2018-05-05', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(99, 'EMP6825', '101', '', 'Md. Mohsin', 'May', '2018-05-06', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(100, 'EMP6825', '101', '', 'Md. Mohsin', 'May', '2018-05-07', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(101, 'EMP6825', '101', '', 'Md. Mohsin', 'May', '2018-05-08', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(102, 'EMP6825', '101', '', 'Md. Mohsin', 'May', '2018-05-09', 'Daytime', '09:00', '17:40', '', '', '1', '', '0.00', '0.20', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(103, 'EMP6825', '101', '', 'Md. Mohsin', 'May', '2018-05-10', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(104, 'EMP6825', '101', '', 'Md. Mohsin', 'May', '2018-05-11', 'Daytime', '', '', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', 'WeekEnd', '', '', '', '', ''),
(105, 'EMP6825', '101', '', 'Md. Mohsin', 'May', '2018-05-12', 'Daytime', '10:00', '18:00', '', '', '1', '', '1.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(106, 'EMP6825', '101', '', 'Md. Mohsin', 'May', '2018-05-13', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(107, 'EMP6825', '101', '', 'Md. Mohsin', 'May', '2018-05-14', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(108, 'EMP6825', '101', '', 'Md. Mohsin', 'May', '2018-05-15', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(109, 'EMP6825', '101', '', 'Md. Mohsin', 'May', '2018-05-16', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(110, 'EMP6825', '101', '', 'Md. Mohsin', 'May', '2018-05-17', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(111, 'EMP6825', '101', '', 'Md. Mohsin', 'May', '2018-05-18', 'Daytime', '', '', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', 'WeekEnd', '', '', '', '', ''),
(112, 'EMP6825', '101', '', 'Md. Mohsin', 'May', '2018-05-19', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(113, 'EMP6825', '101', '', 'Md. Mohsin', 'May', '2018-05-20', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(114, 'EMP6825', '101', '', 'Md. Mohsin', 'May', '2018-05-21', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(115, 'EMP6825', '101', '', 'Md. Mohsin', 'May', '2018-05-22', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(116, 'EMP6825', '101', '', 'Md. Mohsin', 'May', '2018-05-23', 'Daytime', '10:30', '18:00', '', '', '1', '', '1.30', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(117, 'EMP6825', '101', '', 'Md. Mohsin', 'May', '2018-05-24', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(118, 'EMP6825', '101', '', 'Md. Mohsin', 'May', '2018-05-25', 'Daytime', '', '', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', 'WeekEnd', '', '', '', '', ''),
(119, 'EMP6825', '101', '', 'Md. Mohsin', 'May', '2018-05-26', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(120, 'EMP6825', '101', '', 'Md. Mohsin', 'May', '2018-05-27', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(121, 'EMP6825', '102', '', 'Md. Mohsin', 'May', '2018-05-28', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(122, 'EMP6825', '102', '', 'Md. Mohsin', 'May', '2018-05-29', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(123, 'EMP6825', '102', '', 'Md. Mohsin', 'May', '2018-05-30', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(124, 'EMP6825', '102', '', 'Md. Mohsin', 'May', '2018-05-31', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(125, 'EMP3880', '102', '', 'Salma', 'May', '2018-05-01', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(126, 'EMP3880', '102', '', 'Salma', 'May', '2018-05-02', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(127, 'EMP3880', '102', '', 'Salma', 'May', '2018-05-03', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(128, 'EMP3880', '102', '', 'Salma', 'May', '2018-05-04', 'Daytime', '', '', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', 'WeekEnd', '', '', '', '', ''),
(129, 'EMP3880', '102', '', 'Salma', 'May', '2018-05-05', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(130, 'EMP3880', '102', '', 'Salma', 'May', '2018-05-06', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(131, 'EMP3880', '102', '', 'Salma', 'May', '2018-05-07', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(132, 'EMP3880', '102', '', 'Salma', 'May', '2018-05-08', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(133, 'EMP3880', '102', '', 'Salma', 'May', '2018-05-09', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(134, 'EMP3880', '102', '', 'Salma', 'May', '2018-05-10', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(135, 'EMP3880', '102', '', 'Salma', 'May', '2018-05-11', 'Daytime', '', '', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', 'WeekEnd', '', '', '', '', ''),
(136, 'EMP3880', '102', '', 'Salma', 'May', '2018-05-12', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(137, 'EMP3880', '102', '', 'Salma', 'May', '2018-05-13', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(138, 'EMP3880', '102', '', 'Salma', 'May', '2018-05-14', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(139, 'EMP3880', '102', '', 'Salma', 'May', '2018-05-15', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(140, 'EMP3880', '102', '', 'Salma', 'May', '2018-05-16', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(141, 'EMP3880', '102', '', 'Salma', 'May', '2018-05-17', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(142, 'EMP3880', '102', '', 'Salma', 'May', '2018-05-18', 'Daytime', '', '', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', 'WeekEnd', '', '', '', '', ''),
(143, 'EMP3880', '102', '', 'Salma', 'May', '2018-05-19', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(144, 'EMP3880', '102', '', 'Salma', 'May', '2018-05-20', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(145, 'EMP3880', '103', '', 'Salma', 'May', '2018-05-21', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(146, 'EMP3880', '103', '', 'Salma', 'May', '2018-05-22', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(147, 'EMP3880', '103', '', 'Salma', 'May', '2018-05-23', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(148, 'EMP3880', '103', '', 'Salma', 'May', '2018-05-24', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(149, 'EMP3880', '103', '', 'Salma', 'May', '2018-05-25', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', 'WeekEnd', '', '', '', '', ''),
(150, 'EMP3880', '103', '', 'Salma', 'May', '2018-05-26', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(151, 'EMP3880', '103', '', 'Salma', 'May', '2018-05-27', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(152, 'EMP3880', '103', '', 'Salma', 'May', '2018-05-28', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(153, 'EMP3880', '103', '', 'Salma', 'May', '2018-05-29', 'Daytime', '09:00', '19:30', '', '', '1', '', '0.00', '0.00', '', '1.30', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(154, 'EMP3880', '103', '', 'Salma', 'May', '2018-05-30', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', ''),
(155, 'EMP3880', '103', '', 'Salma', 'May', '2018-05-31', 'Daytime', '09:00', '18:00', '', '', '1', '', '0.00', '0.00', '', '0.00', '', '', 'True', 'True', 'Jacquard', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `bonus_type`
--

CREATE TABLE `bonus_type` (
  `bonus_type_id` varchar(15) NOT NULL,
  `bonus_type` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bonus_type`
--

INSERT INTO `bonus_type` (`bonus_type_id`, `bonus_type`) VALUES
('EmpTy5ba4fbff86', 'Durga Puja');

-- --------------------------------------------------------

--
-- Table structure for table `company_info`
--

CREATE TABLE `company_info` (
  `company_id` varchar(25) NOT NULL,
  `company_name` varchar(60) NOT NULL,
  `company_address` varchar(150) NOT NULL,
  `company_details` varchar(200) NOT NULL,
  `company_city` varchar(50) NOT NULL,
  `company_street` varchar(50) NOT NULL,
  `company_zip` int(10) NOT NULL,
  `company_number` varchar(20) NOT NULL,
  `company_2number` varchar(20) NOT NULL,
  `company_email` varchar(30) NOT NULL,
  `company_fax` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_info`
--

INSERT INTO `company_info` (`company_id`, `company_name`, `company_address`, `company_details`, `company_city`, `company_street`, `company_zip`, `company_number`, `company_2number`, `company_email`, `company_fax`) VALUES
('1', 'HR management ', '19/1, Panthapath, Dhaka-1205', 'No Details', 'Dhaka', 'Panthapath', 1205, '01765087654', '01656877567', 'No@gmail.com', 'No fax');

-- --------------------------------------------------------

--
-- Table structure for table `dept_info`
--

CREATE TABLE `dept_info` (
  `dept_id` varchar(15) NOT NULL,
  `dept_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dept_info`
--

INSERT INTO `dept_info` (`dept_id`, `dept_name`) VALUES
('Dep5bae409ac43c', 'Accounts'),
('Dep5bb7212699e1', 'Sales & Marketing'),
('Dep5bb7213deb4d', 'Production');

-- --------------------------------------------------------

--
-- Table structure for table `desgn_info`
--

CREATE TABLE `desgn_info` (
  `desgn_id` varchar(15) NOT NULL,
  `desgn_name` varchar(85) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `desgn_info`
--

INSERT INTO `desgn_info` (`desgn_id`, `desgn_name`) VALUES
('Des5bae454f9d3f', 'Chief Accountant'),
('Des5bb720d6e2ca', 'Asst. Accountant'),
('Des5bb720f10de3', 'Blowing Asst. Operator'),
('Des5bb720fda44e', 'Executive HR'),
('Des5bb721060ed8', 'Executive Marketing');

-- --------------------------------------------------------

--
-- Table structure for table `employee_info`
--

CREATE TABLE `employee_info` (
  `employee_id` varchar(25) NOT NULL,
  `employee_name` varchar(40) NOT NULL,
  `employee_type` varchar(20) NOT NULL,
  `employee_gender` varchar(25) NOT NULL,
  `employee_dept` varchar(45) NOT NULL,
  `employee_desgn` varchar(45) NOT NULL,
  `employee_pay` varchar(25) NOT NULL,
  `employee_idno` varchar(20) NOT NULL,
  `employee_dob` varchar(25) NOT NULL,
  `employee_joindate` varchar(25) NOT NULL,
  `newName` varchar(500) NOT NULL,
  `employee_contNum` varchar(20) NOT NULL,
  `employee_email` varchar(40) NOT NULL,
  `employee_ref` varchar(20) NOT NULL,
  `employee_marital_status` varchar(20) NOT NULL,
  `employee_nid` varchar(25) NOT NULL,
  `employee_passportid` varchar(25) NOT NULL,
  `employee_emg_contNum` varchar(20) DEFAULT NULL,
  `father_name` varchar(60) DEFAULT NULL,
  `mother_name` varchar(60) DEFAULT NULL,
  `present_address` varchar(150) DEFAULT NULL,
  `permanent_address` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_info`
--

INSERT INTO `employee_info` (`employee_id`, `employee_name`, `employee_type`, `employee_gender`, `employee_dept`, `employee_desgn`, `employee_pay`, `employee_idno`, `employee_dob`, `employee_joindate`, `newName`, `employee_contNum`, `employee_email`, `employee_ref`, `employee_marital_status`, `employee_nid`, `employee_passportid`, `employee_emg_contNum`, `father_name`, `mother_name`, `present_address`, `permanent_address`) VALUES
('Emp5b920b0be9eb7', 'Jony Shikdar', 'Staff', 'Male', 'Production', 'Blowing Asst. Operator', '', 'EMP0128', '03/02/1994', '09/03/2018', '24862187_1543348409047365_3311190201032314793_n.jpg', '01752098765', 'jony@gmail.com', 'tanveer', 'Married', '1111', '122', '3', 's', 'ww', 's', 'a'),
('Emp5b96a99263ebf', 'Robin', 'Staff', 'Male', 'Accounts', 'Executive HR', '', 'EMP0986', '01/01/1993', '09/01/2018', '24882939_1907557306164273_702241327_o.jpg', '01676233232', 'robin@gmail.com', 'Jony Shikdar', 'Married', '3435444545', '36e33ee', '5', 's', 'w', 'w', 'a'),
('Emp5b981d9a7d2da', 'Md Saddam Hossain', 'Staff', 'Male', 'Sales & Marketing', 'Executive Marketing', '', 'EMP6431', '09/01/1992', '09/03/2018', '', '0167623676', 'sa.ho@gmail.com', 'No', 'Divorced', '346555545', '77667676', '', '', '', '', ''),
('Emp5b9e9ba4c7c8a', 'Salma', 'Staff', 'Female', 'Accounts', 'Executive HR', '', 'EMP0908', '02/11/1992', '09/01/2018', '24882939_1907557306164273_702241327_o.jpg', '01676233232', 'salma@gmail.com', 'Robin', 'Married', '3435444545', '77667676', '', '', '', '', ''),
('Emp5ba3edb1c6a0f', 'fahim', 'Worker', 'Male', 'Production', 'Blowing Asst. Operator', '', 'EMP2321', '03/02/1994', '09/22/2018', '41543079_2128029407221512_5299740865873313792_n.jpg', '01676233232', 'fahimulislam93@gmail.com', 'No', 'Divorced', '3435444545', '36e33ee', '', '', '', '', ''),
('Emp5bf32486afd87', 'Asmaul hosen', 'Manager', 'Male', 'Sales & Marketing', 'Asst. Accountant', 'Debit Card', 'EMP9939', '01/09/1996', '10/14/2018', '', '01752052488', '1000159@daffodil.ac', 'No', 'Single', '3435444545', '77667676', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `employee_type`
--

CREATE TABLE `employee_type` (
  `employee_type_id` varchar(25) NOT NULL,
  `employee_type` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_type`
--

INSERT INTO `employee_type` (`employee_type_id`, `employee_type`) VALUES
('EmpTy5b903551b8884', 'Manager'),
('EmpTy5b9035d4c9b9d', 'Staff'),
('EmpTy5b9b8e1b28099', 'Worker');

-- --------------------------------------------------------

--
-- Table structure for table `holiday_info`
--

CREATE TABLE `holiday_info` (
  `holiday_info_id` varchar(15) NOT NULL,
  `holiday_title` varchar(25) DEFAULT NULL,
  `datefrom` date DEFAULT NULL,
  `dateto` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `holiday_info`
--

INSERT INTO `holiday_info` (`holiday_info_id`, `holiday_title`, `datefrom`, `dateto`) VALUES
('Hol5ba3872038c6', 'eid', '2018-05-05', '2018-05-08'),
('Hol5bbbb467ae00', 'Durag Puja', '2018-05-15', '2018-05-18');

-- --------------------------------------------------------

--
-- Table structure for table `out_work_info`
--

CREATE TABLE `out_work_info` (
  `requisition_id` varchar(15) NOT NULL,
  `employee_name` varchar(65) NOT NULL,
  `requisition_title` varchar(65) NOT NULL,
  `requisition_date` varchar(15) NOT NULL,
  `requisition_time_from` varchar(20) NOT NULL,
  `requisition_time_to` varchar(20) NOT NULL,
  `requisition_enter` varchar(20) NOT NULL,
  `requisition_details` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `out_work_info`
--

INSERT INTO `out_work_info` (`requisition_id`, `employee_name`, `requisition_title`, `requisition_date`, `requisition_time_from`, `requisition_time_to`, `requisition_enter`, `requisition_details`) VALUES
('Req5bafde0838c4', 'Jony Shikdar', 'ok', '01/02/2018', '09', '10', '11', ''),
('Req5bafdef5d040', 'Robin', 'ok', '01/02/2018', '09', '10', '11', 'ok');

-- --------------------------------------------------------

--
-- Table structure for table `salary_info`
--

CREATE TABLE `salary_info` (
  `salary_id` varchar(25) NOT NULL,
  `employee_name` varchar(50) DEFAULT NULL,
  `Basic_Salary` int(20) DEFAULT NULL,
  `House_rent` int(20) DEFAULT NULL,
  `Medical` int(20) DEFAULT NULL,
  `Transport` int(20) DEFAULT NULL,
  `vat` int(20) DEFAULT NULL,
  `total_salary` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salary_info`
--

INSERT INTO `salary_info` (`salary_id`, `employee_name`, `Basic_Salary`, `House_rent`, `Medical`, `Transport`, `vat`, `total_salary`) VALUES
('Sal5b97c69466417', 'Jony Shikdar', 12000, 600, 360, 240, 264, 12936),
('Sal5b9b8e90ab343', 'Md Saddam Hossain', 9000, 180, 180, 270, 193, 9437),
('Sal5bc1f244be9a9', 'Salma', 11000, 660, 110, 220, 839, 11151),
('Sal5bc1f25688175', 'fahim', 10000, 400, 200, 400, 550, 10450),
('Sal5bf3f4c222142', 'Asmaul hosen', 35000, 1050, 700, 1050, 1890, 35910);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_ID` varchar(25) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Type` varchar(30) NOT NULL,
  `Acess` int(5) DEFAULT NULL,
  `OTP` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_ID`, `Email`, `Password`, `Name`, `Type`, `Acess`, `OTP`) VALUES
('123', 'asmaul@gmail.com', '1234', 'asmaul', 'Manager', 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance_file`
--
ALTER TABLE `attendance_file`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `attendance_info`
--
ALTER TABLE `attendance_info`
  ADD PRIMARY KEY (`attendance_id`);

--
-- Indexes for table `bonus_type`
--
ALTER TABLE `bonus_type`
  ADD PRIMARY KEY (`bonus_type_id`);

--
-- Indexes for table `company_info`
--
ALTER TABLE `company_info`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `dept_info`
--
ALTER TABLE `dept_info`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `desgn_info`
--
ALTER TABLE `desgn_info`
  ADD PRIMARY KEY (`desgn_id`);

--
-- Indexes for table `employee_info`
--
ALTER TABLE `employee_info`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `employee_type`
--
ALTER TABLE `employee_type`
  ADD PRIMARY KEY (`employee_type_id`);

--
-- Indexes for table `holiday_info`
--
ALTER TABLE `holiday_info`
  ADD PRIMARY KEY (`holiday_info_id`);

--
-- Indexes for table `out_work_info`
--
ALTER TABLE `out_work_info`
  ADD PRIMARY KEY (`requisition_id`);

--
-- Indexes for table `salary_info`
--
ALTER TABLE `salary_info`
  ADD PRIMARY KEY (`salary_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance_file`
--
ALTER TABLE `attendance_file`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attendance_info`
--
ALTER TABLE `attendance_info`
  MODIFY `attendance_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
