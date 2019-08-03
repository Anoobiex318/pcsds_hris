-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2019 at 04:34 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pcsds_hris`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_user` varchar(30) NOT NULL,
  `admin_pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_user`, `admin_pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_academic_rank`
--

CREATE TABLE `tbl_academic_rank` (
  `rank_id` int(3) NOT NULL,
  `rank_name` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_department`
--

CREATE TABLE `tbl_department` (
  `dept_id` int(3) NOT NULL,
  `dept_name` char(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_department`
--

INSERT INTO `tbl_department` (`dept_id`, `dept_name`) VALUES
(1, 'OED (Office of the Executive Director)'),
(2, 'AFD (Admin and Finance Division)'),
(3, 'ECAN Monitoring and Evaluation Division (EMED)'),
(4, 'ECAN Zones Management and Enforcement Division (EZMED)'),
(5, 'ECAN Education and Extension Division (EEED)'),
(6, 'DMO South'),
(7, 'DMO North'),
(8, 'DMO Calamianes'),
(9, 'EPRPD');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_files`
--

CREATE TABLE `tbl_files` (
  `file_id` int(7) NOT NULL,
  `file_name` varchar(500) NOT NULL,
  `per_id` int(6) NOT NULL,
  `filetype` varchar(20) NOT NULL,
  `date_uploaded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_files`
--

INSERT INTO `tbl_files` (`file_id`, `file_name`, `per_id`, `filetype`, `date_uploaded`) VALUES
(54, 'uploads/All Personnel_30.4.2019_15.13 (1).xls', 165, 'xls', '2019-05-14'),
(55, 'uploads/Revised Personal Data Sheet (PDS 2017) CS Form No. 212 - abegail.xlsx', 165, 'xlsx', '2019-05-14'),
(57, 'uploads/2018 List of Trainings, Workshops, Meetings and Conferences.xlsx', 165, 'xlsx', '2019-05-15'),
(58, 'uploads/Lucifer 1 to 4.txt', 165, 'txt', '2019-06-24'),
(59, 'uploads/blank_db.sql', 167, 'sql', '2019-07-03'),
(60, 'uploads/asidatabase.sql', 1, 'sql', '2019-07-11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gass_rank`
--

CREATE TABLE `tbl_gass_rank` (
  `gass_id` int(3) NOT NULL,
  `gass_name` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_personnel`
--

CREATE TABLE `tbl_personnel` (
  `per_id` int(6) NOT NULL,
  `per_img` varchar(200) NOT NULL,
  `per_firstname` char(20) NOT NULL,
  `per_middlename` char(20) NOT NULL,
  `per_lastname` char(20) NOT NULL,
  `per_suffix` char(2) NOT NULL,
  `pos_id` int(3) NOT NULL,
  `per_gender` char(6) NOT NULL,
  `per_civil_status` varchar(10) NOT NULL,
  `per_email` varchar(100) NOT NULL,
  `per_status` varchar(100) NOT NULL,
  `per_address` varchar(150) NOT NULL,
  `per_date_of_birth` date NOT NULL,
  `per_place_of_birth` varchar(150) NOT NULL,
  `per_date_of_original_appointment` date NOT NULL,
  `per_date_of_last_appointment` date NOT NULL,
  `per_eligibility` varchar(20) NOT NULL,
  `per_position` varchar(100) NOT NULL,
  `dept_id` int(3) NOT NULL,
  `per_designation` varchar(50) NOT NULL,
  `per_tin_no` varchar(20) NOT NULL,
  `per_gsis_bp_no` varchar(15) NOT NULL,
  `per_pagibig_no` varchar(14) NOT NULL,
  `per_plantilla_no` int(25) NOT NULL,
  `promote_id` int(5) NOT NULL,
  `per_contact_no` varchar(20) NOT NULL,
  `rank_id` int(3) NOT NULL,
  `bs_name` varchar(50) NOT NULL,
  `bs_year` year(4) NOT NULL,
  `bs_school` varchar(50) NOT NULL,
  `ms_name` varchar(50) NOT NULL,
  `ms_with_unit` varchar(12) NOT NULL,
  `ms_year` year(4) NOT NULL,
  `ms_school` varchar(50) NOT NULL,
  `dr_name` varchar(50) NOT NULL,
  `dr_year` year(4) NOT NULL,
  `dr_with_unit` varchar(12) NOT NULL,
  `dr_school` varchar(50) NOT NULL,
  `other_degree` varchar(50) NOT NULL,
  `other_year` year(4) NOT NULL,
  `other_school` varchar(50) NOT NULL,
  `per_salary` varchar(1000) NOT NULL,
  `date_modified` date NOT NULL,
  `per_step` varchar(100) NOT NULL,
  `per_benefit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_personnel`
--

INSERT INTO `tbl_personnel` (`per_id`, `per_img`, `per_firstname`, `per_middlename`, `per_lastname`, `per_suffix`, `pos_id`, `per_gender`, `per_civil_status`, `per_email`, `per_status`, `per_address`, `per_date_of_birth`, `per_place_of_birth`, `per_date_of_original_appointment`, `per_date_of_last_appointment`, `per_eligibility`, `per_position`, `dept_id`, `per_designation`, `per_tin_no`, `per_gsis_bp_no`, `per_pagibig_no`, `per_plantilla_no`, `promote_id`, `per_contact_no`, `rank_id`, `bs_name`, `bs_year`, `bs_school`, `ms_name`, `ms_with_unit`, `ms_year`, `ms_school`, `dr_name`, `dr_year`, `dr_with_unit`, `dr_school`, `other_degree`, `other_year`, `other_school`, `per_salary`, `date_modified`, `per_step`, `per_benefit`) VALUES
(1, 'Koala.jpg', 'Juana', 'C', 'Dela Cruz', 'Sr', 0, 'Female', 'Married', 'wew@yahoo.com', 'Job Order', 'PCSD Building Sports Complex Road Sta. Monica Heights, Puerto Princesa City', '1995-07-17', 'Puerto Princesa City', '2007-02-01', '2007-02-01', 'CS', 'HR Staff', 0, 'DMO North                      ', '444-444-444', '555-555-555', '666-666-666', 1, 0, '+639 096-089-309', 0, '1', 2003, '3', '4', '5', 2008, '7', '8', 2018, '9', '11', '12', 2018, '', '10000', '2019-07-17', '1', '                                                    JJ\r\n                                            '),
(2, 'ID.png', 'John', 'C', 'Doe', 'Sr', 0, 'Male', 'Single', 'wew@yahoo.com', 'Permanent', 'PPC', '1992-07-17', 'PPC', '2019-07-15', '2019-07-15', 'CS', 'IT Assistant/Programmer', 0, 'ECAN Monitoring and Evaluation Division (EMED)    ', '111-111-111', '222-222-222', '333-333-333', 1, 0, '+639 104-049-265', 0, 'Mastter', 2007, 'kfjskflj;s', 'fsfferet', '1', 2008, 'ada', 'af', 2009, 'fs', 'fsf', 'ssf', 2010, 'sfs', '19000', '2019-07-17', '12', '                                                                                                    ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_position`
--

CREATE TABLE `tbl_position` (
  `pos_id` int(3) NOT NULL,
  `pos_name` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_position`
--

INSERT INTO `tbl_position` (`pos_id`, `pos_name`) VALUES
(1, 'IT Assistant/Programmer'),
(2, 'HR Staff'),
(3, 'Admin Aide'),
(4, 'Executive Director'),
(5, 'Driver');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_promotion`
--

CREATE TABLE `tbl_promotion` (
  `promote_id` int(5) NOT NULL,
  `per_id` int(6) NOT NULL,
  `rank_id` int(3) NOT NULL,
  `date_promoted` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_academic_rank`
--
ALTER TABLE `tbl_academic_rank`
  ADD PRIMARY KEY (`rank_id`);

--
-- Indexes for table `tbl_department`
--
ALTER TABLE `tbl_department`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `tbl_files`
--
ALTER TABLE `tbl_files`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `tbl_gass_rank`
--
ALTER TABLE `tbl_gass_rank`
  ADD PRIMARY KEY (`gass_id`);

--
-- Indexes for table `tbl_personnel`
--
ALTER TABLE `tbl_personnel`
  ADD PRIMARY KEY (`per_id`);

--
-- Indexes for table `tbl_position`
--
ALTER TABLE `tbl_position`
  ADD PRIMARY KEY (`pos_id`);

--
-- Indexes for table `tbl_promotion`
--
ALTER TABLE `tbl_promotion`
  ADD PRIMARY KEY (`promote_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_academic_rank`
--
ALTER TABLE `tbl_academic_rank`
  MODIFY `rank_id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_department`
--
ALTER TABLE `tbl_department`
  MODIFY `dept_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_files`
--
ALTER TABLE `tbl_files`
  MODIFY `file_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `tbl_gass_rank`
--
ALTER TABLE `tbl_gass_rank`
  MODIFY `gass_id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_personnel`
--
ALTER TABLE `tbl_personnel`
  MODIFY `per_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_position`
--
ALTER TABLE `tbl_position`
  MODIFY `pos_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_promotion`
--
ALTER TABLE `tbl_promotion`
  MODIFY `promote_id` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
