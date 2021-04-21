-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2017 at 02:48 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineclearance1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL,
  `admin_username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL DEFAULT '1a1dc91c907325c69271ddf0c944bc72',
  `depr` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `password`, `depr`) VALUES
(1, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 0),
(2, 'aw', 'bcbe3365e6ac95ea2c0343a2395834dd', 0),
(3, 'aw', '1a1dc91c907325c69271ddf0c944bc72', 0);

-- --------------------------------------------------------

--
-- Table structure for table `clearance`
--

CREATE TABLE `clearance` (
  `clearance_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `is_accountant_approval` int(11) NOT NULL,
  `is_supply_approval` int(11) NOT NULL,
  `is_director_ppf_approval` int(11) NOT NULL,
  `is_facfed_approval` int(11) NOT NULL,
  `is_cooperative_approval` int(11) NOT NULL,
  `is_librarian_approval` int(11) NOT NULL,
  `is_registrar_approval` int(11) NOT NULL,
  `is_area_approval` int(11) NOT NULL,
  `is_dean_approval` int(11) NOT NULL,
  `is_executive_approval` int(11) NOT NULL,
  `is_hrm_approval` int(11) NOT NULL,
  `is_cao_approval` int(11) NOT NULL,
  `is_vp_admin_approval` int(11) NOT NULL,
  `is_vp_academic_approval` int(11) NOT NULL,
  `is_head_approval` int(11) NOT NULL,
  `until` varchar(15) NOT NULL,
  `mailing_address` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clearance`
--

INSERT INTO `clearance` (`clearance_id`, `id`, `is_accountant_approval`, `is_supply_approval`, `is_director_ppf_approval`, `is_facfed_approval`, `is_cooperative_approval`, `is_librarian_approval`, `is_registrar_approval`, `is_area_approval`, `is_dean_approval`, `is_executive_approval`, `is_hrm_approval`, `is_cao_approval`, `is_vp_admin_approval`, `is_vp_academic_approval`, `is_head_approval`, `until`, `mailing_address`) VALUES
(1, 65, 0, 0, 0, 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 1, 0, '', ''),
(2, 66, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(3, 68, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(4, 73, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(5, 74, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(6, 75, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(7, 76, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(8, 77, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', ''),
(9, 78, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(10, 79, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', ''),
(11, 80, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '07/24/2016', 'Carmella Valley Home'),
(12, 81, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '', ''),
(13, 82, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(14, 83, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(15, 84, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(16, 85, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(17, 86, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(18, 87, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(19, 88, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(20, 89, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(21, 90, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(22, 91, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(23, 92, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(24, 93, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(25, 94, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(26, 95, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(27, 96, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(28, 97, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(29, 98, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(30, 99, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(31, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(32, 101, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(33, 102, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(34, 103, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(35, 104, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(36, 105, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(37, 106, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(38, 107, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(39, 108, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(40, 109, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(41, 110, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(42, 111, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(43, 112, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(44, 113, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(45, 114, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(46, 115, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(47, 116, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(48, 117, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, '', ''),
(49, 118, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, '', ''),
(50, 119, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(51, 120, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(52, 121, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(53, 122, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(54, 123, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(55, 124, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(56, 125, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(57, 126, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(58, 127, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(59, 128, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(60, 129, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(61, 130, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(62, 131, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(63, 132, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(64, 133, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(65, 134, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cleared_teacher`
--

CREATE TABLE `cleared_teacher` (
  `cleared_teacher_id` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cleared_teacher`
--

INSERT INTO `cleared_teacher` (`cleared_teacher_id`, `id`) VALUES
(1, 80),
(2, 117),
(3, 117),
(4, 117),
(5, 117),
(6, 118),
(7, 117);

-- --------------------------------------------------------

--
-- Table structure for table `deadline`
--

CREATE TABLE `deadline` (
  `id` int(20) NOT NULL,
  `d_date` varchar(50) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deadline`
--

INSERT INTO `deadline` (`id`, `d_date`, `status`) VALUES
(2, '2017-01-23', 0),
(3, '2017-01-23', 0),
(4, '2017-01-20', 0),
(5, '2017-01-19', 0),
(6, '2017-01-24', 0),
(7, '2017-01-24', 0),
(8, '2017-01-23', 0),
(9, '2017-01-22', 0),
(10, '2017-01-02', 0),
(11, '2017-01-22', 0),
(12, '2017-01-22', 0),
(13, '2017-01-23', 0),
(14, '2017-01-23', 0),
(15, '2017-01-22', 0),
(16, '2017-01-23', 0),
(17, '2017-01-31', 0),
(18, '2017-02-24', 0),
(19, '2017-02-24', 0),
(20, '2017-02-24', 0),
(21, '2017-02-24', 0),
(22, '2017-02-25', 0),
(23, '2017-02-25', 0),
(24, '2017-02-25', 0),
(25, '2017-02-25', 0),
(26, '2017-02-24', 0),
(27, '2017-02-25', 0),
(28, '2017-02-24', 0),
(29, '2017-02-24', 0),
(30, '2017-02-24', 0),
(31, '2017-02-25', 0),
(32, '2017-02-25', 0),
(33, '2017-02-25', 0),
(34, '2017-02-25', 0),
(35, '2017-02-25', 0),
(36, '2017-02-25', 0),
(37, '2017-02-25', 0),
(38, '2017-02-25', 0),
(39, '2017-02-25', 0),
(40, '2017-02-25', 0),
(41, '2017-02-25', 0),
(42, '2017-02-25', 0),
(43, '2017-02-25', 0),
(44, '2017-02-25', 0),
(45, '2017-02-25', 0),
(46, '2017-02-25', 0),
(47, '2017-02-25', 0),
(48, '2017-02-25', 0),
(49, '2017-02-25', 0),
(50, '2017-02-24', 0),
(51, '2017-02-25', 0),
(52, '2017-02-25', 0),
(53, '2017-02-25', 0),
(54, '2017-02-25', 0),
(55, '2017-02-25', 0),
(56, '2017-02-25', 0),
(57, '2017-02-25', 0),
(58, '2017-02-25', 0),
(59, '2017-02-25', 0),
(60, '2017-02-25', 0),
(61, '2017-02-25', 0),
(62, '2017-02-25', 0),
(63, '2017-02-25', 0),
(64, '2017-02-25', 0),
(65, '2017-02-25', 0),
(66, '2017-02-25', 0),
(67, '2017-02-25', 0),
(68, '2017-02-25', 0),
(69, '2017-02-25', 0),
(70, '2017-02-25', 0),
(71, '2017-02-25', 0),
(72, '2017-02-25', 0),
(73, '2017-02-25', 0),
(74, '2017-02-25', 0),
(75, '2017-02-25', 0),
(76, '2017-02-25', 0);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(10) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `dep_name` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `req_id` int(10) NOT NULL,
  `faculty_id` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `designee`
--

CREATE TABLE `designee` (
  `designee_id` int(11) NOT NULL,
  `designee_name` text NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL DEFAULT '81dc9bdb52d04dc20036dbd8313ed055'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designee`
--

INSERT INTO `designee` (`designee_id`, `designee_name`, `username`, `password`) VALUES
(1, 'Accountant', 'accountant', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'Supply Officer', 'supplyofficer', '81dc9bdb52d04dc20036dbd8313ed055'),
(3, 'Director, Physical Plant-Facilities', 'physicalplant', '81dc9bdb52d04dc20036dbd8313ed055'),
(4, 'FACFED/Campus Faculty Club President', 'facfed', '81dc9bdb52d04dc20036dbd8313ed055'),
(5, 'Chairman, Cooperative', 'cooperative', '81dc9bdb52d04dc20036dbd8313ed055'),
(6, 'College Librarian', 'librarian', '81dc9bdb52d04dc20036dbd8313ed055'),
(7, 'Registrar', 'registrar', '81dc9bdb52d04dc20036dbd8313ed055'),
(8, 'Area Chairman', 'areachairman', '81dc9bdb52d04dc20036dbd8313ed055'),
(9, 'Dean of the College', 'dean', '81dc9bdb52d04dc20036dbd8313ed055'),
(10, 'Executive Director', 'executive', '81dc9bdb52d04dc20036dbd8313ed055'),
(11, 'Human Resource Mgt. Officer III', 'hrm', '81dc9bdb52d04dc20036dbd8313ed055'),
(12, 'Chief Administrative Officer (Adm)', 'cao', '81dc9bdb52d04dc20036dbd8313ed055'),
(13, 'Vice-President for Administration', 'administration', '81dc9bdb52d04dc20036dbd8313ed055'),
(14, 'Vice-President for Academic\\Affairs', 'academic', '81dc9bdb52d04dc20036dbd8313ed055'),
(15, 'Head of the Agency', 'head', '81dc9bdb52d04dc20036dbd8313ed055'),
(16, 'Area Chairman-BSCE', 'areachairman_bsce', '81dc9bdb52d04dc20036dbd8313ed055'),
(17, 'Area Chairman-BSIT', 'areachairman_bsit', '81dc9bdb52d04dc20036dbd8313ed055'),
(18, 'Area Chairman-BSED', 'areachairman_bsed', '81dc9bdb52d04dc20036dbd8313ed055'),
(19, 'Area Chairman-BEED', 'areachairman_beed', '81dc9bdb52d04dc20036dbd8313ed055'),
(20, 'Area Chairman-BSIS', 'areachairman_bsis', '81dc9bdb52d04dc20036dbd8313ed055'),
(21, 'Area Chairman-BSHRM', 'areachairman_bshrm', '81dc9bdb52d04dc20036dbd8313ed055'),
(22, 'Area Chairman-BS Info Tech', 'areachairman_bsinfo', '81dc9bdb52d04dc20036dbd8313ed055'),
(23, 'Area Chairman-BTTE', 'areachairman_btte', '81dc9bdb52d04dc20036dbd8313ed055'),
(24, 'Area Chairman-BSA', 'areachairman_bsa', '81dc9bdb52d04dc20036dbd8313ed055'),
(25, 'Area Chairman-BSBA', 'areachairman_bsba', '81dc9bdb52d04dc20036dbd8313ed055'),
(26, 'Area Chairman-BSOA', 'areachairman_bsoa', '81dc9bdb52d04dc20036dbd8313ed055'),
(27, 'Area Chairman-BSE', 'areachairman_bse', '81dc9bdb52d04dc20036dbd8313ed055'),
(28, 'Area Chairman-BSAccT', 'areachairman_bsacct', '81dc9bdb52d04dc20036dbd8313ed055'),
(29, 'Area Chairman-BSF', 'areachairman_bsf', '81dc9bdb52d04dc20036dbd8313ed055'),
(30, 'Area Chairman-BS Crim', 'areachairman_crim', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(10) NOT NULL,
  `faculty_id` int(15) NOT NULL,
  `faculty_Fname` varchar(20) NOT NULL,
  `faculty_Mname` varchar(20) NOT NULL,
  `faculty_Lname` varchar(20) NOT NULL,
  `Contact_num` int(15) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Designation` varchar(20) NOT NULL,
  `Department` varchar(5) NOT NULL,
  `req_id` int(20) NOT NULL,
  `dep_id` int(20) NOT NULL,
  `password` varchar(50) NOT NULL DEFAULT '81dc9bdb52d04dc20036dbd8313ed055',
  `faculty_picture` varchar(120) NOT NULL,
  `Campus` varchar(15) NOT NULL COMMENT '1 = talisay, 2 = alijis, 3 = fortune town, 4 = binalbagan',
  `course_program` varchar(15) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `faculty_id`, `faculty_Fname`, `faculty_Mname`, `faculty_Lname`, `Contact_num`, `Email`, `Designation`, `Department`, `req_id`, `dep_id`, `password`, `faculty_picture`, `Campus`, `course_program`, `status`) VALUES
(129, 12, 'Carmelo', 'Wex', 'Anthony', 9164654, 'carmelo@gmail.com', 'Permanent', 'CFAC', 0, 0, '81dc9bdb52d04dc20036dbd8313ed055', '', 'Binalbagan', 'BTTE', 0),
(130, 13, 'Nico', 'Swan', 'Pascual', 96546465, 'nico@gmail.com', 'Permanent', 'CBMA', 0, 0, '81dc9bdb52d04dc20036dbd8313ed055', '', 'Fortune Towne', 'BSA', 0),
(131, 14, 'Mark', 'Anthony', 'Fernandez', 94136131, 'mark@gmail.com', 'Parttime', 'IIT', 0, 0, '81dc9bdb52d04dc20036dbd8313ed055', '', 'Fortune Towne', 'BSBA', 0),
(80, 2222222, 'Kevin', 'Decatoria', 'Grajo', 952749822, 'kevin@gmail.com', 'Parttime', 'CIT', 0, 0, 'd93591bdf7860e1e4ee2fca799911215', 'HAHAHAHA.jpg', 'Talisay', 'BSOA', 0),
(119, 3, 'Micole', 'Marie', 'Dioma', 2147483647, 'micole@gmail.com', 'Parttime', 'CIT', 0, 0, '81dc9bdb52d04dc20036dbd8313ed055', '', 'Talisay', 'BSIT', 0),
(120, 4, 'Donard', 'Cruz', 'Ytienza', 92164631, 'donard@gmail.com', 'Permanent', 'COE', 0, 0, '81dc9bdb52d04dc20036dbd8313ed055', '', 'Talisay', 'BSIS', 0),
(121, 5, 'Rose', 'Ann', 'Balladares', 9132113, 'rose@gmail.com', 'Permanent', 'CIT', 0, 0, '81dc9bdb52d04dc20036dbd8313ed055', '', 'Alijis', 'BSED', 0),
(122, 6, 'Razel', 'Joy', 'Bacan', 956431, 'razel@gmail.com', 'Parttime', 'IIT', 0, 0, '81dc9bdb52d04dc20036dbd8313ed055', '', 'Alijis', 'BEED', 0),
(123, 7, 'Daniel', 'Robert', 'Tand', 9243515, 'daniel@gmail.com', 'Permanent', 'IIT', 0, 0, '81dc9bdb52d04dc20036dbd8313ed055', '', 'Alijis', 'BSHRM', 0),
(124, 8, 'Eliseo', 'Joy', 'Chan', 9123151, 'eliseo@gmail.com', 'Permanent', 'SAS', 0, 0, '81dc9bdb52d04dc20036dbd8313ed055', '', 'Alijis', 'BS Info Tech', 0),
(125, 9, 'Robert', 'Fernandez', 'Cunahap', 96214156, 'robert@gmail.com', 'Permanent', 'CFAC', 0, 0, '81dc9bdb52d04dc20036dbd8313ed055', '', 'Binalbagan', 'BSE', 0),
(128, 11, 'Tony', 'James', 'Parker', 9215416, 'tony@gmail.com', 'Parttime', 'CFAC', 0, 0, '81dc9bdb52d04dc20036dbd8313ed055', '', 'Binalbagan', 'BSAccT', 0),
(127, 10, 'Cris', 'John', 'Bryant', 9232464, 'cris@gmail.com', 'Permanent', 'CFAC', 0, 0, '81dc9bdb52d04dc20036dbd8313ed055', '', 'Binalbagan', 'BSF', 0),
(118, 2, 'Sweden', 'Grajo', 'Vargas', 953411, 'sweden@gmail.com', 'Permanent', 'CIT', 0, 0, '81dc9bdb52d04dc20036dbd8313ed055', '', 'Talisay', 'BS Crim', 0),
(117, 1, 'John', 'Cruz', 'Smith', 9132464, 'john@gmail.com', 'Permanent', 'COE', 0, 0, '81dc9bdb52d04dc20036dbd8313ed055', '', 'Talisay', '', 1),
(132, 15, 'Sunshine', 'Montano', 'Cruz', 9144513, 'sun@gmail.com', 'Parttime', 'CBMA', 0, 0, '81dc9bdb52d04dc20036dbd8313ed055', '', 'Fortune Towne', '', 0),
(133, 15, 'Sunshine', 'Montano', 'Cruz', 9144513, 'sun@gmail.com', 'Parttime', 'CBMA', 0, 0, '81dc9bdb52d04dc20036dbd8313ed055', '', 'Fortune Towne', '', 0),
(134, 99, 'John', 'F.', 'Wick', 2147483647, 'john@gmail.com', 'Permanent', 'COE', 0, 0, '81dc9bdb52d04dc20036dbd8313ed055', '', 'Talisay', 'BSCE', 0);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `message_id` int(11) NOT NULL,
  `designee_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `message_content` text NOT NULL,
  `message_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `designee_id`, `id`, `message_content`, `message_status`) VALUES
(32, 7, 66, 'qwertyui', 1),
(33, 7, 65, 'test mic check', 1),
(34, 7, 65, 'qwertyuwertyuqwertyuwerty', 1),
(35, 1, 65, 'testing ah', 1),
(36, 6, 68, 'awawaw', 0),
(37, 6, 65, 'WHAAT', 1),
(38, 6, 74, 'test message\r\n', 1),
(39, 6, 74, 'test 2', 1),
(40, 1, 77, 'kulang ka ', 0),
(41, 1, 66, 'qwertyui\r\n', 1),
(42, 1, 66, 'test\r\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pds_civil_service`
--

CREATE TABLE `pds_civil_service` (
  `civil_service_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `career_service` varchar(25) NOT NULL,
  `rating` int(11) NOT NULL,
  `date_of_examination` varchar(15) NOT NULL,
  `place_of_examination` text NOT NULL,
  `license_number` int(15) NOT NULL,
  `license_date_of_release` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pds_civil_service`
--

INSERT INTO `pds_civil_service` (`civil_service_id`, `id`, `career_service`, `rating`, `date_of_examination`, `place_of_examination`, `license_number`, `license_date_of_release`) VALUES
(1, 79, 'test', 99, '11/11/1111', 'test', 99, '11/11/1111'),
(3, 80, 'test career', 90, '12/25/2017', 'Tai tung', 11, '12/31/2018'),
(4, 100, '', 0, '', '', 0, ''),
(5, 101, '', 0, '', '', 0, ''),
(6, 102, '', 0, '', '', 0, ''),
(7, 103, '', 0, '', '', 0, ''),
(8, 104, '', 0, '', '', 0, ''),
(9, 105, '', 0, '', '', 0, ''),
(10, 106, '', 0, '', '', 0, ''),
(11, 107, '', 0, '', '', 0, ''),
(12, 108, '', 0, '', '', 0, ''),
(13, 109, '', 0, '', '', 0, ''),
(14, 110, '', 0, '', '', 0, ''),
(15, 111, '', 0, '', '', 0, ''),
(16, 112, '', 0, '', '', 0, ''),
(17, 113, '', 0, '', '', 0, ''),
(18, 114, '', 0, '', '', 0, ''),
(19, 115, '', 0, '', '', 0, ''),
(20, 116, '', 0, '', '', 0, ''),
(21, 117, '', 0, '', '', 0, ''),
(22, 118, '', 0, '', '', 0, ''),
(23, 119, '', 0, '', '', 0, ''),
(24, 120, '', 0, '', '', 0, ''),
(25, 121, '', 0, '', '', 0, ''),
(26, 122, '', 0, '', '', 0, ''),
(27, 123, '', 0, '', '', 0, ''),
(28, 124, '', 0, '', '', 0, ''),
(29, 125, '', 0, '', '', 0, ''),
(30, 126, '', 0, '', '', 0, ''),
(31, 127, '', 0, '', '', 0, ''),
(32, 128, '', 0, '', '', 0, ''),
(33, 129, '', 0, '', '', 0, ''),
(34, 130, '', 0, '', '', 0, ''),
(35, 131, '', 0, '', '', 0, ''),
(36, 132, '', 0, '', '', 0, ''),
(37, 133, '', 0, '', '', 0, ''),
(38, 134, '', 0, '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `pds_educational_background`
--

CREATE TABLE `pds_educational_background` (
  `educational_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `educational_level` text NOT NULL,
  `educational_name_of_school` text NOT NULL,
  `educational_degree_course` text NOT NULL,
  `educational_year_graduated` text NOT NULL,
  `educational_highest_grade` text NOT NULL,
  `educational_date_from` text NOT NULL,
  `educational_date_to` text NOT NULL,
  `educational_scholarship` text NOT NULL,
  `secondary_level` varchar(20) NOT NULL,
  `secondary_name` varchar(20) NOT NULL,
  `secondary_degree` varchar(20) NOT NULL,
  `secondary_year` varchar(20) NOT NULL,
  `secondary_highest` varchar(20) NOT NULL,
  `secondary_date_form` varchar(20) NOT NULL,
  `secondary_date_to` varchar(20) NOT NULL,
  `secondary_scholarship` varchar(20) NOT NULL,
  `vocational_level` varchar(20) NOT NULL,
  `vocational_name` varchar(20) NOT NULL,
  `vocational_degree` varchar(20) NOT NULL,
  `vocational_year` varchar(20) NOT NULL,
  `vocational_highest` varchar(20) NOT NULL,
  `vocational_date_form` varchar(20) NOT NULL,
  `vocational_date_to` varchar(20) NOT NULL,
  `vocational_scholarship` varchar(20) NOT NULL,
  `college_level` varchar(20) NOT NULL,
  `college_name` varchar(20) NOT NULL,
  `college_degree` varchar(20) NOT NULL,
  `college_year` varchar(20) NOT NULL,
  `college_highest` varchar(20) NOT NULL,
  `college_date_form` varchar(20) NOT NULL,
  `college_date_to` varchar(20) NOT NULL,
  `college_scholarship` varchar(20) NOT NULL,
  `graduate_level` int(20) NOT NULL,
  `graduate_name` int(20) NOT NULL,
  `graduate_degree` int(20) NOT NULL,
  `graduate_year` int(20) NOT NULL,
  `graduate_highest` varchar(20) NOT NULL,
  `graduate_date_from` int(20) NOT NULL,
  `graduate_date_to` int(20) NOT NULL,
  `graduate_scholarship` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pds_educational_background`
--

INSERT INTO `pds_educational_background` (`educational_id`, `id`, `educational_level`, `educational_name_of_school`, `educational_degree_course`, `educational_year_graduated`, `educational_highest_grade`, `educational_date_from`, `educational_date_to`, `educational_scholarship`, `secondary_level`, `secondary_name`, `secondary_degree`, `secondary_year`, `secondary_highest`, `secondary_date_form`, `secondary_date_to`, `secondary_scholarship`, `vocational_level`, `vocational_name`, `vocational_degree`, `vocational_year`, `vocational_highest`, `vocational_date_form`, `vocational_date_to`, `vocational_scholarship`, `college_level`, `college_name`, `college_degree`, `college_year`, `college_highest`, `college_date_form`, `college_date_to`, `college_scholarship`, `graduate_level`, `graduate_name`, `graduate_degree`, `graduate_year`, `graduate_highest`, `graduate_date_from`, `graduate_date_to`, `graduate_scholarship`) VALUES
(1, 100, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(2, 101, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(3, 102, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(4, 103, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(5, 104, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(6, 105, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(7, 106, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(8, 107, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(9, 108, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(10, 109, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(11, 110, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(12, 111, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(13, 112, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(14, 113, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(15, 114, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(16, 115, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(17, 116, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(18, 117, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(19, 118, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(20, 119, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(21, 120, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(22, 121, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(23, 122, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(24, 123, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(25, 124, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(26, 125, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(27, 126, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(28, 127, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(29, 128, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(30, 129, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(31, 130, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(32, 131, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(33, 132, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(34, 133, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0),
(35, 134, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pds_family_background`
--

CREATE TABLE `pds_family_background` (
  `family_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `spouse_surname` varchar(20) NOT NULL,
  `spouse_firstname` varchar(20) NOT NULL,
  `spouse_middlename` varchar(20) NOT NULL,
  `spouse_occupation` varchar(20) NOT NULL,
  `spouse_employer_name` varchar(20) NOT NULL,
  `spouse_business_address` text NOT NULL,
  `spouse_tel_no` varchar(20) NOT NULL,
  `father_surname` varchar(20) NOT NULL,
  `father_firstname` varchar(20) NOT NULL,
  `father_middlename` varchar(20) NOT NULL,
  `mother_surname` varchar(20) NOT NULL,
  `mother_firstname` varchar(20) NOT NULL,
  `mother_middlename` varchar(20) NOT NULL,
  `child_name` varchar(35) NOT NULL,
  `child_birthday` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pds_family_background`
--

INSERT INTO `pds_family_background` (`family_id`, `id`, `spouse_surname`, `spouse_firstname`, `spouse_middlename`, `spouse_occupation`, `spouse_employer_name`, `spouse_business_address`, `spouse_tel_no`, `father_surname`, `father_firstname`, `father_middlename`, `mother_surname`, `mother_firstname`, `mother_middlename`, `child_name`, `child_birthday`) VALUES
(1, 79, 'test', 'test', 'test', 'test', 'test', 'test', '(111) 111-1111', 'test', 'test', 'test', 'test', 'test', 'test', 'child1', '55/55/5555'),
(3, 80, 'Vargas', 'Sweden', 'Labalo', 'Civil Engr.', 'Silver Dragon', 'Riverside', '(312) 312-3123', 'Grajo', 'Jerry', 'C', 'Decatoria', 'Arlene', 'G', 'Raijin', '12/31/2018'),
(4, 100, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 101, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 102, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 103, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, 104, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, 105, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, 106, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, 107, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, 108, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(13, 109, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(14, 110, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(15, 111, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(16, 112, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(17, 113, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(18, 114, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(19, 115, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(20, 116, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(21, 117, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(22, 118, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(23, 119, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(24, 120, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(25, 121, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(26, 122, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(27, 123, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(28, 124, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(29, 125, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(30, 126, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(31, 127, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(32, 128, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(33, 129, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(34, 130, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(35, 131, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(36, 132, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(37, 133, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(38, 134, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pds_other_info`
--

CREATE TABLE `pds_other_info` (
  `pds_other_info_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `other_special_skill` varchar(30) NOT NULL,
  `other_non_academic` varchar(30) NOT NULL,
  `other_membership` varchar(30) NOT NULL,
  `36_a` int(11) NOT NULL,
  `36_a_yes` text NOT NULL,
  `36_b` int(11) NOT NULL,
  `36_b_yes` text NOT NULL,
  `37_a` int(11) NOT NULL,
  `37_a_yes` text NOT NULL,
  `37_b` int(11) NOT NULL,
  `37_b_yes` text NOT NULL,
  `number_38` int(11) NOT NULL,
  `number_38_yes` text NOT NULL,
  `number_39` int(11) NOT NULL,
  `number_39_yes` text NOT NULL,
  `number_40` int(11) NOT NULL,
  `number_40_yes` text NOT NULL,
  `41_a` int(11) NOT NULL,
  `41_a_yes` text NOT NULL,
  `41_b` int(11) NOT NULL,
  `41_b_yes` text NOT NULL,
  `41_c` int(11) NOT NULL,
  `41_c_yes` text NOT NULL,
  `references_name` varchar(30) NOT NULL,
  `references_address` varchar(30) NOT NULL,
  `references_tel_no` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pds_other_info`
--

INSERT INTO `pds_other_info` (`pds_other_info_id`, `id`, `other_special_skill`, `other_non_academic`, `other_membership`, `36_a`, `36_a_yes`, `36_b`, `36_b_yes`, `37_a`, `37_a_yes`, `37_b`, `37_b_yes`, `number_38`, `number_38_yes`, `number_39`, `number_39_yes`, `number_40`, `number_40_yes`, `41_a`, `41_a_yes`, `41_b`, `41_b_yes`, `41_c`, `41_c_yes`, `references_name`, `references_address`, `references_tel_no`) VALUES
(1, 79, 'Dota 2', 'Best Carry', 'Gold', 0, 'awwawaw', 1, 'sssss', 1, 'ddddd', 0, 'fffffff', 1, 'ggggggg', 0, 'hhhhh', 0, 'jjjjjj', 1, 'test_message1', 0, 'test_message2', 1, 'test_message3', 'Donard', 'Ytienza', '(656) 544-5665'),
(3, 80, 'Dota 2', 'Best Carry', 'Gold', 0, 'awwawaw', 1, 'sssss', 1, 'ddddd', 0, 'fffffff', 1, 'ggggggg', 0, 'hhhhh', 0, 'jjjjjj', 1, 'test_message1', 0, 'test_message2', 1, 'test_message3', 'Donard', 'Ytienza', '(656) 544-5665'),
(4, 100, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(5, 101, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(6, 102, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(7, 103, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(8, 104, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(9, 105, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(10, 106, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(11, 107, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(12, 108, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(13, 109, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(14, 110, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(15, 111, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(16, 112, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(17, 113, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(18, 114, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(19, 115, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(20, 116, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(21, 117, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(22, 118, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(23, 119, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(24, 120, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(25, 121, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(26, 122, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(27, 123, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(28, 124, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(29, 125, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(30, 126, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(31, 127, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(32, 128, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(33, 129, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(34, 130, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(35, 131, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(36, 132, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(37, 133, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', ''),
(38, 134, '', '', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pds_personal_information`
--

CREATE TABLE `pds_personal_information` (
  `personal_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `middlename` varchar(20) NOT NULL,
  `name_extension` varchar(10) NOT NULL,
  `birthday` varchar(10) NOT NULL,
  `place_of_birth` text NOT NULL,
  `sex` varchar(10) NOT NULL,
  `civil_status` int(5) NOT NULL,
  `other_civil_status` varchar(20) NOT NULL,
  `citizenship` varchar(20) NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `blood_type` varchar(10) NOT NULL,
  `gsis_id_no` int(15) NOT NULL,
  `pagibig_id_no` int(15) NOT NULL,
  `philhealth_no` int(15) NOT NULL,
  `sss_no` int(15) NOT NULL,
  `residential_address` text NOT NULL,
  `residential_zipcode` int(15) NOT NULL,
  `residential_tel_no` varchar(15) NOT NULL,
  `permanent_address` text NOT NULL,
  `permanent_zipcode` int(15) NOT NULL,
  `permanent_tel_no` varchar(15) NOT NULL,
  `email_address` varchar(30) NOT NULL,
  `cellphone_no` int(15) NOT NULL,
  `agency_employee_no` int(15) NOT NULL,
  `tin_no` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pds_personal_information`
--

INSERT INTO `pds_personal_information` (`personal_id`, `id`, `surname`, `firstname`, `middlename`, `name_extension`, `birthday`, `place_of_birth`, `sex`, `civil_status`, `other_civil_status`, `citizenship`, `height`, `weight`, `blood_type`, `gsis_id_no`, `pagibig_id_no`, `philhealth_no`, `sss_no`, `residential_address`, `residential_zipcode`, `residential_tel_no`, `permanent_address`, `permanent_zipcode`, `permanent_tel_no`, `email_address`, `cellphone_no`, `agency_employee_no`, `tin_no`) VALUES
(1, 79, 'test', 'test', 'test', 'Sr.', '11/11/1111', 'test', '', 6, 'test', 'Filipino', 2, 2, 'O', 11111111, 11111111, 11111111, 11111111, 'test', 111111111, '(111) 111-1111', 'test', 2222222, '(222) 222-2222', 'test@test.test', 2147483647, 11111111, 1111111111),
(3, 80, 'Grajo', 'Kevin', 'Decatoria', 'III', '11/11/1111', 'Bacolod City', 'M', 5, '', 'Filipino', 2, 100, 'AB', 1212121, 2121212, 3232323, 2323232, 'Talisay City', 6115, '(122) 122-1221', 'Bacolod', 6100, '(211) 211-2112', 'kevin@gmail.com', 2147483647, 121212, 222111),
(4, 100, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(5, 101, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(6, 102, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(7, 103, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(8, 104, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(9, 105, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(10, 106, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(11, 107, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(12, 108, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(13, 109, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(14, 110, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(15, 111, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(16, 112, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(17, 113, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(18, 114, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(19, 115, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(20, 116, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(21, 117, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(22, 118, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(23, 119, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(24, 120, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(25, 121, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(26, 122, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(27, 123, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(28, 124, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(29, 125, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(30, 126, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(31, 127, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(32, 128, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(33, 129, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(34, 130, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(35, 131, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(36, 132, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(37, 133, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0),
(38, 134, '', '', '', '', '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, '', 0, '', '', 0, '', '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pds_training_program`
--

CREATE TABLE `pds_training_program` (
  `training_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `title_of_seminar` varchar(25) NOT NULL,
  `training_date_from` varchar(15) NOT NULL,
  `training_date_to` varchar(15) NOT NULL,
  `training_number_of_hours` int(11) NOT NULL,
  `conducted_by` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pds_training_program`
--

INSERT INTO `pds_training_program` (`training_id`, `id`, `title_of_seminar`, `training_date_from`, `training_date_to`, `training_number_of_hours`, `conducted_by`) VALUES
(1, 79, 'test', '11/11/1111', '22/22/2222', 11, 'test'),
(3, 80, 'Game Development', '11/01/2015', '12/01/2015', 243, 'Stratium'),
(4, 100, '', '', '', 0, ''),
(5, 101, '', '', '', 0, ''),
(6, 102, '', '', '', 0, ''),
(7, 103, '', '', '', 0, ''),
(8, 104, '', '', '', 0, ''),
(9, 105, '', '', '', 0, ''),
(10, 106, '', '', '', 0, ''),
(11, 107, '', '', '', 0, ''),
(12, 108, '', '', '', 0, ''),
(13, 109, '', '', '', 0, ''),
(14, 110, '', '', '', 0, ''),
(15, 111, '', '', '', 0, ''),
(16, 112, '', '', '', 0, ''),
(17, 113, '', '', '', 0, ''),
(18, 114, '', '', '', 0, ''),
(19, 115, '', '', '', 0, ''),
(20, 116, '', '', '', 0, ''),
(21, 117, '', '', '', 0, ''),
(22, 118, '', '', '', 0, ''),
(23, 119, '', '', '', 0, ''),
(24, 120, '', '', '', 0, ''),
(25, 121, '', '', '', 0, ''),
(26, 122, '', '', '', 0, ''),
(27, 123, '', '', '', 0, ''),
(28, 124, '', '', '', 0, ''),
(29, 125, '', '', '', 0, ''),
(30, 126, '', '', '', 0, ''),
(31, 127, '', '', '', 0, ''),
(32, 128, '', '', '', 0, ''),
(33, 129, '', '', '', 0, ''),
(34, 130, '', '', '', 0, ''),
(35, 131, '', '', '', 0, ''),
(36, 132, '', '', '', 0, ''),
(37, 133, '', '', '', 0, ''),
(38, 134, '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `pds_voluntary_work`
--

CREATE TABLE `pds_voluntary_work` (
  `voluntary_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `name_and_address` text NOT NULL,
  `voluntary_work_from` varchar(15) NOT NULL,
  `voluntary_work_to` varchar(15) NOT NULL,
  `number_of_hours` int(11) NOT NULL,
  `position` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pds_voluntary_work`
--

INSERT INTO `pds_voluntary_work` (`voluntary_id`, `id`, `name_and_address`, `voluntary_work_from`, `voluntary_work_to`, `number_of_hours`, `position`) VALUES
(1, 79, 'test', '11/11/1111', '22/22/2222', 22, 'test'),
(3, 80, 'Stratium', '12/12/2012', '12/31/2019', 234, 'President'),
(4, 100, '', '', '', 0, ''),
(5, 101, '', '', '', 0, ''),
(6, 102, '', '', '', 0, ''),
(7, 103, '', '', '', 0, ''),
(8, 104, '', '', '', 0, ''),
(9, 105, '', '', '', 0, ''),
(10, 106, '', '', '', 0, ''),
(11, 107, '', '', '', 0, ''),
(12, 108, '', '', '', 0, ''),
(13, 109, '', '', '', 0, ''),
(14, 110, '', '', '', 0, ''),
(15, 111, '', '', '', 0, ''),
(16, 112, '', '', '', 0, ''),
(17, 113, '', '', '', 0, ''),
(18, 114, '', '', '', 0, ''),
(19, 115, '', '', '', 0, ''),
(20, 116, '', '', '', 0, ''),
(21, 117, '', '', '', 0, ''),
(22, 118, '', '', '', 0, ''),
(23, 119, '', '', '', 0, ''),
(24, 120, '', '', '', 0, ''),
(25, 121, '', '', '', 0, ''),
(26, 122, '', '', '', 0, ''),
(27, 123, '', '', '', 0, ''),
(28, 124, '', '', '', 0, ''),
(29, 125, '', '', '', 0, ''),
(30, 126, '', '', '', 0, ''),
(31, 127, '', '', '', 0, ''),
(32, 128, '', '', '', 0, ''),
(33, 129, '', '', '', 0, ''),
(34, 130, '', '', '', 0, ''),
(35, 131, '', '', '', 0, ''),
(36, 132, '', '', '', 0, ''),
(37, 133, '', '', '', 0, ''),
(38, 134, '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `pds_work_experience`
--

CREATE TABLE `pds_work_experience` (
  `work_experience_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `work_experience_from` varchar(15) NOT NULL,
  `work_experience_to` varchar(15) NOT NULL,
  `position_title` varchar(25) NOT NULL,
  `department` varchar(20) NOT NULL,
  `monthly_salary` int(11) NOT NULL,
  `salary_grade` varchar(5) NOT NULL,
  `status_of_appointment` varchar(15) NOT NULL,
  `govt_service` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pds_work_experience`
--

INSERT INTO `pds_work_experience` (`work_experience_id`, `id`, `work_experience_from`, `work_experience_to`, `position_title`, `department`, `monthly_salary`, `salary_grade`, `status_of_appointment`, `govt_service`) VALUES
(1, 79, '11/11/1111', '22/22/2222', 'test', 'test', 100000000, '11-1', 'test', 'yes'),
(3, 80, '11/11/1111', '22/22/2222', 'President', 'DOH', 1000000, '10-0', 'OK', 'No'),
(4, 100, '', '', '', '', 0, '', '', ''),
(5, 101, '', '', '', '', 0, '', '', ''),
(6, 102, '', '', '', '', 0, '', '', ''),
(7, 103, '', '', '', '', 0, '', '', ''),
(8, 104, '', '', '', '', 0, '', '', ''),
(9, 105, '', '', '', '', 0, '', '', ''),
(10, 106, '', '', '', '', 0, '', '', ''),
(11, 107, '', '', '', '', 0, '', '', ''),
(12, 108, '', '', '', '', 0, '', '', ''),
(13, 109, '', '', '', '', 0, '', '', ''),
(14, 110, '', '', '', '', 0, '', '', ''),
(15, 111, '', '', '', '', 0, '', '', ''),
(16, 112, '', '', '', '', 0, '', '', ''),
(17, 113, '', '', '', '', 0, '', '', ''),
(18, 114, '', '', '', '', 0, '', '', ''),
(19, 115, '', '', '', '', 0, '', '', ''),
(20, 116, '', '', '', '', 0, '', '', ''),
(21, 117, '', '', '', '', 0, '', '', ''),
(22, 118, '', '', '', '', 0, '', '', ''),
(23, 119, '', '', '', '', 0, '', '', ''),
(24, 120, '', '', '', '', 0, '', '', ''),
(25, 121, '', '', '', '', 0, '', '', ''),
(26, 122, '', '', '', '', 0, '', '', ''),
(27, 123, '', '', '', '', 0, '', '', ''),
(28, 124, '', '', '', '', 0, '', '', ''),
(29, 125, '', '', '', '', 0, '', '', ''),
(30, 126, '', '', '', '', 0, '', '', ''),
(31, 127, '', '', '', '', 0, '', '', ''),
(32, 128, '', '', '', '', 0, '', '', ''),
(33, 129, '', '', '', '', 0, '', '', ''),
(34, 130, '', '', '', '', 0, '', '', ''),
(35, 131, '', '', '', '', 0, '', '', ''),
(36, 132, '', '', '', '', 0, '', '', ''),
(37, 133, '', '', '', '', 0, '', '', ''),
(38, 134, '', '', '', '', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `requirement`
--

CREATE TABLE `requirement` (
  `req_id` int(10) NOT NULL,
  `req_content` text NOT NULL,
  `designee_id` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requirement`
--

INSERT INTO `requirement` (`req_id`, `req_content`, `designee_id`) VALUES
(1, 'DBM Form SUC IA', 7),
(2, 'List of Failures/Dropouts', 7),
(3, 'Grade Sheets-undergraduate/graduate studies.', 7),
(4, 'Various Forms for Laboratory School Advisers', 7),
(5, 'All Daily Time Records', 11),
(6, 'Updated Personal Data Sheet', 11),
(7, 'Three (3) original copies of Statement of Assets, Liabilities, and Network (SALN)', 11),
(8, 'Certified Photocopy of Master''s and Doctorate Transcript of Records/Diploma of Degree''s obtained of the current school year', 11),
(9, 'Photocopy of Renewed PRC License/ID or Renewal Application for those teaching courses which require a license to teach. (Waiver will not be accepted and non-submission is taken to mean that the faculty has no license).', 11),
(10, 'Certified true copy of Marriage Certificate for both married male and female faculty', 11),
(11, 'Property Clearance', 2),
(12, 'Keys of Laboratories Rooms / Shoprooms', 2),
(13, 'List of room fixtures needing inspection and repair', 3),
(14, 'Second original copy of Grade Sheets for undergraduate and graduate programs', 9),
(15, 'Class Records', 9),
(16, 'Midterm and Final Examinations with Table of Specification (1st and 2nd Semesters)', 9),
(17, 'Accomplishment Report to include; Academic Advising Report; List of Instructional Materials/Technology Prepared and Used in the classroom; Report on seminars/training''s attended; and Photocopy of Certificates of Participation/Resources Speaker ship in seminar/training''s ', 9),
(18, 'Course Syllabus for all subjects/courses taught and documentary evidence of distribution to students', 9),
(19, 'List of books, laboratory needs, supplies and materials needed ', 9),
(20, 'Job-Released Accomplishments', 9),
(21, 'On-going/Proposed Research, Extension, Production Initiatives', 9),
(22, 'Accomplished Commitment Form for First Semester', 9),
(23, 'For advisers of student organizations, financial report of student organizations/student activities that involved finances collections and contributions (e.g educational tours, raffle draws, fund raising projects, etc.)', 9),
(24, 'Compliance Report on educational tours/field trips conducted which is marked "complied" by CHED', 9),
(25, 'Copy of on-going/proposed research , extension, production initiatives ', 10),
(26, 'Copy of financial reports of student organizations/student activities that involved finances, collections and contributions (e.g educational tours with compliance report marked"Complied" by CHED, raffle draws, fund raising, etc.)', 10),
(27, 'Liquidation of cash advances/travel expenses, etc.', 13);

-- --------------------------------------------------------

--
-- Table structure for table `requirementstatus`
--

CREATE TABLE `requirementstatus` (
  `reqstat_id` int(10) NOT NULL,
  `status` int(10) NOT NULL,
  `id` int(10) NOT NULL,
  `req_id` int(10) NOT NULL,
  `designee_id` int(11) NOT NULL,
  `file` varchar(120) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requirementstatus`
--

INSERT INTO `requirementstatus` (`reqstat_id`, `status`, `id`, `req_id`, `designee_id`, `file`) VALUES
(1, 0, 79, 11, 2, 'ceres.jpg'),
(2, 0, 79, 11, 2, 'ceres.jpg'),
(3, 0, 79, 11, 2, 'ceres.jpg'),
(4, 0, 79, 11, 2, 'ceres.jpg'),
(5, 0, 79, 11, 2, 'ceres.jpg'),
(6, 0, 79, 11, 2, 'ceres.jpg'),
(7, 0, 79, 11, 2, 'ceres.jpg'),
(8, 0, 79, 11, 2, 'ceres.jpg'),
(9, 0, 79, 11, 2, 'ceres.jpg'),
(10, 0, 79, 11, 2, 'ceres.jpg'),
(11, 0, 79, 11, 2, 'ceres.jpg'),
(12, 0, 79, 11, 2, 'ceres.jpg'),
(13, 0, 79, 13, 3, 'cap.png'),
(14, 0, 79, 13, 3, 'cap.png'),
(15, 0, 79, 13, 3, 'cap.png'),
(16, 0, 79, 13, 3, 'cap.png'),
(17, 0, 79, 13, 3, 'cap.png'),
(18, 0, 79, 13, 3, 'cap.png'),
(19, 0, 79, 13, 3, 'cap.png'),
(20, 0, 79, 13, 3, 'cap.png'),
(21, 0, 79, 13, 3, 'cap.png'),
(22, 0, 79, 13, 3, 'cap.png'),
(23, 0, 79, 13, 3, 'cap.png'),
(24, 0, 79, 13, 3, 'cap.png'),
(25, 0, 79, 1, 7, '43.jpg'),
(26, 0, 79, 14, 9, 'l;.jpg'),
(27, 0, 81, 11, 2, 'nybl.xlsx'),
(28, 1, 80, 11, 2, 'nybl.xlsx'),
(30, 1, 80, 12, 2, 'pds-jo-2014.xls'),
(31, 1, 117, 11, 2, '6a00d83451c73369e20162fcddf9ab970d-600wi.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(15) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL DEFAULT '81dc9bdb52d04dc20036dbd8313ed055',
  `usertype` int(1) NOT NULL COMMENT '1 = admin, 2 = department, 3 = faculty'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `usertype`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(15, 'Accountant', '81dc9bdb52d04dc20036dbd8313ed055', 2),
(16, '69', '81dc9bdb52d04dc20036dbd8313ed055', 3),
(17, '69', '81dc9bdb52d04dc20036dbd8313ed055', 3),
(18, 'Supply Officer', '81dc9bdb52d04dc20036dbd8313ed055', 2),
(19, '4444444', '81dc9bdb52d04dc20036dbd8313ed055', 3),
(20, '1111111', '81dc9bdb52d04dc20036dbd8313ed055', 3),
(21, '2222222', '81dc9bdb52d04dc20036dbd8313ed055', 3),
(22, '3333333', '81dc9bdb52d04dc20036dbd8313ed055', 3),
(23, '21300712', '81dc9bdb52d04dc20036dbd8313ed055', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `clearance`
--
ALTER TABLE `clearance`
  ADD PRIMARY KEY (`clearance_id`);

--
-- Indexes for table `cleared_teacher`
--
ALTER TABLE `cleared_teacher`
  ADD PRIMARY KEY (`cleared_teacher_id`);

--
-- Indexes for table `deadline`
--
ALTER TABLE `deadline`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designee`
--
ALTER TABLE `designee`
  ADD PRIMARY KEY (`designee_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `pds_civil_service`
--
ALTER TABLE `pds_civil_service`
  ADD PRIMARY KEY (`civil_service_id`);

--
-- Indexes for table `pds_educational_background`
--
ALTER TABLE `pds_educational_background`
  ADD PRIMARY KEY (`educational_id`);

--
-- Indexes for table `pds_family_background`
--
ALTER TABLE `pds_family_background`
  ADD PRIMARY KEY (`family_id`);

--
-- Indexes for table `pds_other_info`
--
ALTER TABLE `pds_other_info`
  ADD PRIMARY KEY (`pds_other_info_id`);

--
-- Indexes for table `pds_personal_information`
--
ALTER TABLE `pds_personal_information`
  ADD PRIMARY KEY (`personal_id`);

--
-- Indexes for table `pds_training_program`
--
ALTER TABLE `pds_training_program`
  ADD PRIMARY KEY (`training_id`);

--
-- Indexes for table `pds_voluntary_work`
--
ALTER TABLE `pds_voluntary_work`
  ADD PRIMARY KEY (`voluntary_id`);

--
-- Indexes for table `pds_work_experience`
--
ALTER TABLE `pds_work_experience`
  ADD PRIMARY KEY (`work_experience_id`);

--
-- Indexes for table `requirement`
--
ALTER TABLE `requirement`
  ADD PRIMARY KEY (`req_id`);

--
-- Indexes for table `requirementstatus`
--
ALTER TABLE `requirementstatus`
  ADD PRIMARY KEY (`reqstat_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `clearance`
--
ALTER TABLE `clearance`
  MODIFY `clearance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `cleared_teacher`
--
ALTER TABLE `cleared_teacher`
  MODIFY `cleared_teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `deadline`
--
ALTER TABLE `deadline`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `designee`
--
ALTER TABLE `designee`
  MODIFY `designee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `pds_civil_service`
--
ALTER TABLE `pds_civil_service`
  MODIFY `civil_service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `pds_educational_background`
--
ALTER TABLE `pds_educational_background`
  MODIFY `educational_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `pds_family_background`
--
ALTER TABLE `pds_family_background`
  MODIFY `family_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `pds_other_info`
--
ALTER TABLE `pds_other_info`
  MODIFY `pds_other_info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `pds_personal_information`
--
ALTER TABLE `pds_personal_information`
  MODIFY `personal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `pds_training_program`
--
ALTER TABLE `pds_training_program`
  MODIFY `training_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `pds_voluntary_work`
--
ALTER TABLE `pds_voluntary_work`
  MODIFY `voluntary_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `pds_work_experience`
--
ALTER TABLE `pds_work_experience`
  MODIFY `work_experience_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `requirement`
--
ALTER TABLE `requirement`
  MODIFY `req_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `requirementstatus`
--
ALTER TABLE `requirementstatus`
  MODIFY `reqstat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
