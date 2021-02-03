-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 03, 2021 at 01:20 AM
-- Server version: 5.6.49-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `socialvaidya`
--

-- --------------------------------------------------------

--
-- Table structure for table `alladmins`
--

CREATE TABLE `alladmins` (
  `id` int(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `referalcode` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `blood_group` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phone` varchar(13) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `address1` varchar(500) DEFAULT NULL,
  `address2` varchar(500) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `pincode` int(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `package` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alladmins`
--

INSERT INTO `alladmins` (`id`, `image`, `firstname`, `lastname`, `username`, `referalcode`, `dob`, `blood_group`, `email`, `password`, `phone`, `gender`, `address1`, `address2`, `city`, `pincode`, `country`, `category`, `package`, `created_at`, `updated_at`) VALUES
(1, '2264.jpg', 'Doctor Lalit', 'Singh', 'MD lalit', 'CCx008', '2020-12-24', 'AB-', 'lalit@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', '123456789', 'Male', 'Ghaziabad', 'Delhi', 'Delhi', 201009, 'India', 'Individual Doctor', 'Platinum (12 Months)', '2020-12-22 07:15:38', '2020-12-22 01:45:38'),
(2, '9147.jpg', 'Doctor Sri', 'Pandey', 'dentist_sr', 'Bx0809', '2020-12-25', 'A+', 'sri@gmail.com', '25f9e794323b453885f5181f1b624d0b', '123456789', 'Female', 'Ghaziabad', 'Delhi', 'delhi', 2010009, 'India', 'Individual Doctor', 'Silver (3 Months)', '2020-12-22 07:17:21', '2020-12-22 01:47:21'),
(3, '9321.jpg', 'Anant', 'Kumar', 'ak055', 'EE607', '2020-12-08', 'B+', 'anant@gmail.com', '25f9e794323b453885f5181f1b624d0b', '123456789', 'Male', 'Lucknow', 'Lda Colony', 'Lucknow', 201992, 'India', 'Pharmacy', 'Platinum (12 Months)', '2020-12-22 07:19:29', '2020-12-22 01:49:29'),
(4, '3384.jpg', 'Rahul', 'singh', 'rahulk', 'BN0092', '2020-12-25', 'B+', 'rahul@gmail.com', '25f9e794323b453885f5181f1b624d0b', '123456789', 'Male', 'Ghaziabad', NULL, 'delhi', 2010009, 'India', 'Individual Doctor', 'Silver (3 Months)', '2020-12-22 07:34:43', '2020-12-22 02:04:43');

-- --------------------------------------------------------

--
-- Table structure for table `askquestions`
--

CREATE TABLE `askquestions` (
  `id` int(255) NOT NULL,
  `detail` varchar(500) DEFAULT NULL,
  `looking_for` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(13) DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `askquestions`
--

INSERT INTO `askquestions` (`id`, `detail`, `looking_for`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'heyy', 'option2', 'aks@gmail.com', '9991971520', '2020-12-08', '2020-12-08 06:41:17'),
(3, 'hey this new query.', 'Just information', 'ak@gmail.com', '8858596575', '2020-12-08', '2020-12-08 06:43:52'),
(4, 'this is testing', 'Treatment details', 'akarshit@gmail.com', '8858596575', '2021-01-08', '2021-01-08 15:15:11'),
(5, 'my name is rohit singh', 'Just information', 'rohitsinghrajput6282@gmail.com', '09999181009', '2021-01-08', '2021-01-08 15:54:11'),
(6, 'my name is rohit singh.Hoer', 'Just information', 'rohitsinghrajput@gmail.com', '9999181009', '2021-01-08', '2021-01-08 16:00:20'),
(7, NULL, 'Just information', NULL, NULL, '2021-01-30', '2021-01-30 13:53:12'),
(8, ',,,,,,zb,mcnv,nzxc,bmvmzchdbz,bdm', 'Just information', 'lalitraghav457@gmail.com', '07827820996', '2021-01-30', '2021-01-30 13:53:26'),
(9, 'fsdfsd', 'Just information', NULL, NULL, '2021-01-30', '2021-01-30 13:53:58'),
(10, 'fsdfsd', 'Just information', NULL, NULL, '2021-01-30', '2021-01-30 13:53:59'),
(11, NULL, 'Just information', NULL, NULL, '2021-01-30', '2021-01-30 13:54:12'),
(12, NULL, 'Treatment details', NULL, NULL, '2021-01-30', '2021-01-30 13:54:20');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(255) NOT NULL,
  `doctor` varchar(255) DEFAULT NULL,
  `blog_title` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `descriptions` varchar(500) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `doctor`, `blog_title`, `date`, `descriptions`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Dr. Ruby Perrin', 'Social Vaidya – Making your clinic painless visit?', '2021-01-01', 'Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.', '7362.jpg', '2021-01-06 09:19:29', '2021-01-08 13:49:02'),
(2, 'Dr. Darren Elder', 'What are the benefits of Online Doctor Booking?', '2020-12-15', 'Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.', '979.jpg', '2021-01-06 09:20:19', '2021-01-06 16:20:19'),
(5, 'Dr. Deborah Angel', 'Benefits of consulting with an Online Doctor', '2021-01-20', 'Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.', '3004.jpg', '2021-01-13 09:17:20', '2021-01-13 16:17:20'),
(6, 'Dr. Sofia Brient', '5 Great reasons to use an Online Doctor', '2021-01-30', 'Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.', '8026.jpg', '2021-01-13 09:18:26', '2021-01-13 16:18:26');

-- --------------------------------------------------------

--
-- Table structure for table `bloodbanks`
--

CREATE TABLE `bloodbanks` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '0',
  `phone` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `package` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bloodbanks`
--

INSERT INTO `bloodbanks` (`id`, `email`, `password`, `name`, `status`, `phone`, `image`, `package`, `created_at`, `updated_at`) VALUES
(1, 'patanjali@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'Patanjali', 1, '8858596575', '6295.jpg', 'Gold (6 Months)', '2020-12-30 09:47:04', '2020-12-31 04:14:37');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(255) NOT NULL,
  `pharmacy_name` varchar(255) DEFAULT NULL,
  `product_id` int(255) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_code` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `patient_email` varchar(255) DEFAULT NULL,
  `session_id` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `pharmacy_name`, `product_id`, `product_name`, `product_code`, `price`, `quantity`, `patient_email`, `session_id`, `created_at`, `updated_at`) VALUES
(1, 'Amrita pharmacy', 2, 'Rahu pe mangal', 'AMT11', '34', 1, 'fateh@gmail.com', 'j5mQKwlAVQ1L70bChv2P1A21CW8eMbF7PJjaiByk', '2021-02-02 00:00:00', '2021-02-02 09:43:41'),
(2, 'nitish pharmacy', 1, 'dsadsdad', 'NTT10', '23', 1, 'deeksha@gmail.com', 'zWJqfXAKeQdyDUIPlW2ub3ztI2bAGkqoUztq4hdr', '2021-02-02 00:00:00', '2021-02-02 10:22:23');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(255) NOT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'Individual Doctor', '2020-12-21 11:42:48', '2020-12-21 06:12:48'),
(2, 'Blood Bank', '2020-12-21 11:43:10', '2020-12-21 06:13:10'),
(3, 'Diagonostics', '2020-12-21 11:43:53', '2020-12-21 06:13:53'),
(4, 'Hospital', '2020-12-21 11:44:16', '2020-12-21 06:14:16'),
(5, 'Pharmacy', '2020-12-21 11:45:11', '2020-12-21 06:15:11');

-- --------------------------------------------------------

--
-- Table structure for table `diagnosticprofiles`
--

CREATE TABLE `diagnosticprofiles` (
  `id` int(255) NOT NULL,
  `diagnosticId` int(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `user_image` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `bio` varchar(255) DEFAULT NULL,
  `diagnostic_address` varchar(255) DEFAULT NULL,
  `diagnostic_image` varchar(255) DEFAULT NULL,
  `account_holder` varchar(255) DEFAULT NULL,
  `account_number` varchar(255) DEFAULT NULL,
  `ifsc_code` varchar(255) DEFAULT NULL,
  `upi_id` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `postal_code` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `promocode` varchar(255) DEFAULT NULL,
  `services` varchar(255) DEFAULT NULL,
  `specialist` varchar(255) DEFAULT NULL,
  `award` varchar(255) DEFAULT NULL,
  `award_year` varchar(255) DEFAULT NULL,
  `membership` varchar(255) DEFAULT NULL,
  `registration_number` varchar(255) DEFAULT NULL,
  `registration_year` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diagnosticprofiles`
--

INSERT INTO `diagnosticprofiles` (`id`, `diagnosticId`, `name`, `email`, `phone`, `user_image`, `first_name`, `last_name`, `gender`, `dob`, `bio`, `diagnostic_address`, `diagnostic_image`, `account_holder`, `account_number`, `ifsc_code`, `upi_id`, `address`, `city`, `state`, `country`, `postal_code`, `price`, `promocode`, `services`, `specialist`, `award`, `award_year`, `membership`, `registration_number`, `registration_year`, `created_at`, `updated_at`, `status`) VALUES
(1, 2, 'Aanaxa Diagonostics', 'aanaxa@gmail.com', '09988998877', '2635.jpg', 'Nitish', 'Kumar', 'Male', '1988-01-04', 'Test', 'Kanpur', '1960.jpg', 'Nitish Kumar', '1234544323212', 'ICICI9090', 'Nitish@ybl', 'Delhi', 'Laal Chwok', 'Delhi', 'India', '2010232', '100', 'Freecode', 'Blood Test', 'Child', 'Best Hospital In Ghaziabad', '2016', 'Gold', 'DCDC0090908976567', '2040', '2021-02-02 10:17:38', '2021-02-02 17:17:38', 1);

-- --------------------------------------------------------

--
-- Table structure for table `diagnostics`
--

CREATE TABLE `diagnostics` (
  `id` int(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diagnostics`
--

INSERT INTO `diagnostics` (`id`, `email`, `password`, `name`, `phone`, `image`, `status`, `created_at`, `updated_at`) VALUES
(2, 'aanaxa@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'Aanaxa Diagonostics', '09988998877', '1293.jpg', 1, '2021-01-12 10:48:44', '2021-02-02 17:20:54');

-- --------------------------------------------------------

--
-- Table structure for table `doctorprofiles`
--

CREATE TABLE `doctorprofiles` (
  `id` int(255) NOT NULL,
  `userid` int(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  `doctor_image` varchar(500) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `bio` varchar(1000) DEFAULT NULL,
  `clinic_name` varchar(255) DEFAULT NULL,
  `clinic_address` varchar(500) DEFAULT NULL,
  `clinic_image` varchar(500) DEFAULT NULL,
  `account_holder_name` varchar(255) DEFAULT NULL,
  `account_number` varchar(255) DEFAULT NULL,
  `ifsc` varchar(255) DEFAULT NULL,
  `upi_id` varchar(255) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `postal_code` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `promocode` varchar(255) DEFAULT NULL,
  `services` varchar(255) DEFAULT NULL,
  `specialist` varchar(255) DEFAULT NULL,
  `degree1` varchar(255) DEFAULT NULL,
  `college1` varchar(255) DEFAULT NULL,
  `year1` varchar(255) DEFAULT NULL,
  `degree2` varchar(255) DEFAULT NULL,
  `college2` varchar(255) DEFAULT NULL,
  `year2` varchar(255) DEFAULT NULL,
  `degree3` varchar(255) DEFAULT NULL,
  `college3` varchar(255) DEFAULT NULL,
  `year3` varchar(255) DEFAULT NULL,
  `hospital_name1` varchar(255) DEFAULT NULL,
  `from1` date DEFAULT NULL,
  `to1` date DEFAULT NULL,
  `designation1` varchar(255) DEFAULT NULL,
  `hospital_name2` varchar(255) DEFAULT NULL,
  `from2` date DEFAULT NULL,
  `to2` date DEFAULT NULL,
  `designation2` varchar(255) DEFAULT NULL,
  `award1` varchar(255) DEFAULT NULL,
  `award_year` varchar(255) DEFAULT NULL,
  `membership` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctorprofiles`
--

INSERT INTO `doctorprofiles` (`id`, `userid`, `email`, `phone`, `name`, `status`, `doctor_image`, `first_name`, `last_name`, `gender`, `dob`, `bio`, `clinic_name`, `clinic_address`, `clinic_image`, `account_holder_name`, `account_number`, `ifsc`, `upi_id`, `address`, `city`, `state`, `country`, `postal_code`, `price`, `promocode`, `services`, `specialist`, `degree1`, `college1`, `year1`, `degree2`, `college2`, `year2`, `degree3`, `college3`, `year3`, `hospital_name1`, `from1`, `to1`, `designation1`, `hospital_name2`, `from2`, `to2`, `designation2`, `award1`, `award_year`, `membership`, `created_at`, `updated_at`) VALUES
(1, 1, 'anshu@gmail.com', '7879879765', 'Doctor Anshu', 1, '7763.jpg', 'Anshudhar', 'Mishra', 'Male', '1996-01-23', 'Testing', 'Anshu Clinic', 'Ghaziabad', '6263.jpg', 'Anshu', '1213231231232', 'ICICI1221', 'ANSHU@YBL', 'Kanpur', 'kakadeo', 'up', 'India', '2010232', '5000', 'SADSAD', 'Treatment', 'Dentist', 'MD', 'PSIT', '2016', 'MBBS', 'KIET', '2019', NULL, NULL, NULL, 'SJM', '2021-01-30', '2021-01-30', 'Doctor', NULL, NULL, NULL, NULL, 'IFFA', '2016', 'Gold', '2021-01-09 10:55:51', '2021-01-09 18:24:17'),
(3, 3, 'chitra@gmail.com', '09988998877', 'Dr Chitra Singh', 1, '2937.jpg', 'Chitra', 'Singh', 'Female', '1996-01-25', 'testing', 'Chitra Clinic', 'Varanasi', '6126.jpg', 'Chitra Singh', '6070809009808070605', 'ICICI12909', 'chitra@ybl', 'G-130 , G-Block , Sector-63', 'Noida', 'Uttar Pradesh', 'India', '2010009', '500', 'SADSAD', 'Treatment', 'Cardiologist', 'MD', 'KJMU', '2018', 'MBBS', 'PSIT', '2016', 'INTERCOLLEGE', 'DAV', '2012', 'SJM', '2018-01-01', '2020-01-01', 'Doctor', 'NA', NULL, NULL, 'NA', 'NA', 'NA', 'NA', '2021-01-22 06:25:02', '2021-01-22 13:25:02'),
(4, 4, 'anantraj@gmail.com', '09088098877', 'Dr Anant Raj', 1, '1720.jpg', 'Anant', 'Raj Singh', 'Male', '1997-08-20', 'Test', 'Anant Clinic Center', 'Siwan', '8296.jpg', 'Anant Raj', '7080900605043', 'BARBO0101', 'anant@ybl', 'A250,A-Block,Sector-420', 'Siwan', 'Bihar', 'India', '2010898', '250', 'HRX201', 'Online Consultation , Home Visit', 'Healthcare', 'MD', 'OXFORD UNIVERSITY', '2018', 'MBBS', 'AIIMS', '2016', 'INTERCOLLEGE', 'DELHI PUBLIC SCHOOL', '2012', 'DELHI MEDICAL COLLEGE', '2020-04-01', '2021-01-15', 'Doctor', 'NA', NULL, NULL, 'NA', 'PADMAVUSHAN', '2018', 'PRIMIUM', '2021-01-22 06:37:56', '2021-01-22 13:37:56');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `email`, `phone`, `password`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Doctor Anshu', 'anshu@gmail.com', '7879879765', '25f9e794323b453885f5181f1b624d0b', 1, '2020-12-29 05:21:18', '2020-12-31 04:14:18'),
(3, 'Dr Chitra Singh', 'chitra@gmail.com', '09988998877', '25f9e794323b453885f5181f1b624d0b', 1, '2021-01-22 06:16:32', '2021-01-22 13:16:32'),
(4, 'Dr Anant Raj', 'anantraj@gmail.com', '09088098877', '25f9e794323b453885f5181f1b624d0b', 1, '2021-01-22 06:29:21', '2021-01-22 13:29:21'),
(5, 'Lalit', 'superadmin@gmail.com', '07827820996', '25f9e794323b453885f5181f1b624d0b', 1, '2021-01-30 06:59:11', '2021-01-30 13:59:11');

-- --------------------------------------------------------

--
-- Table structure for table `doctorschedules`
--

CREATE TABLE `doctorschedules` (
  `id` int(255) NOT NULL,
  `doctorId` int(255) NOT NULL,
  `weekday` varchar(255) DEFAULT NULL,
  `starttime` varchar(255) DEFAULT NULL,
  `endtime` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorschedules`
--

INSERT INTO `doctorschedules` (`id`, `doctorId`, `weekday`, `starttime`, `endtime`, `created_at`, `updated_at`) VALUES
(7, 1, 'Sunday', '16:51', '18:51', '2021-01-27 10:21:33', '2021-01-27 17:21:33'),
(9, 1, 'Tuesday', '20:55', '17:55', '2021-01-27 10:25:29', '2021-01-27 17:25:29'),
(10, 3, 'Sunday', '17:10', '22:10', '2021-01-27 10:40:56', '2021-01-27 18:26:10'),
(11, 1, 'Sunday', '01:13', '01:13', '2021-01-28 05:43:51', '2021-01-28 12:43:51'),
(12, 5, 'Sunday', '12:33', '12:33', '2021-01-30 06:59:57', '2021-01-30 13:59:57');

-- --------------------------------------------------------

--
-- Table structure for table `doctorsocialmedia`
--

CREATE TABLE `doctorsocialmedia` (
  `id` int(255) NOT NULL,
  `user_id` int(255) DEFAULT NULL,
  `facebook_url` varchar(500) DEFAULT NULL,
  `twitter_url` varchar(500) DEFAULT NULL,
  `instagram_url` varchar(500) DEFAULT NULL,
  `pinterest_url` varchar(500) DEFAULT NULL,
  `linkedin_url` varchar(500) DEFAULT NULL,
  `youtube_url` varchar(500) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` date DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctorsocialmedia`
--

INSERT INTO `doctorsocialmedia` (`id`, `user_id`, `facebook_url`, `twitter_url`, `instagram_url`, `pinterest_url`, `linkedin_url`, `youtube_url`, `status`, `created_at`, `updated_at`) VALUES
(2, 1, 'www.facebook.com', 'www.twitter.com', 'www.instagram.com', 'www.pinterest.com', 'www.linkedin.com', 'www.youtube.com', 1, '2021-01-04', '2021-01-04 03:40:49');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_reviews`
--

CREATE TABLE `doctor_reviews` (
  `id` int(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `doctorId` int(255) DEFAULT NULL,
  `patientId` int(255) DEFAULT NULL,
  `point` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `review` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_reviews`
--

INSERT INTO `doctor_reviews` (`id`, `status`, `doctorId`, `patientId`, `point`, `title`, `review`, `created_at`, `updated_at`) VALUES
(6, 1, 1, 1, '5', 'errefewfwe', 'sdfsdfsdf', '2021-01-29 11:05:26', '2021-01-29 18:05:26'),
(7, 1, 1, 1, '4', 'Feedback', 'sxdsd', '2021-01-29 12:56:17', '2021-01-29 19:56:17'),
(8, 1, 4, 1, '5', 'new', 'new', '2021-01-30 08:28:54', '2021-01-30 15:28:54'),
(9, 1, 4, 1, '4', 'nice', 'good', '2021-01-30 08:33:26', '2021-01-30 15:33:26'),
(13, 1, 3, 1, '5', 'hi', 'hi', '2021-01-30 10:02:54', '2021-01-30 17:02:54'),
(11, 1, 1, 1, '5', 'dwadsdfcsdfc', 'dwad', '2021-01-30 08:35:16', '2021-01-30 15:35:16'),
(12, 1, 1, 1, '5', 'm k', 'nlkl', '2021-01-30 08:38:52', '2021-01-30 15:38:52'),
(14, 1, 3, 1, '1', 'joijoj', 'jkjo', '2021-01-30 10:03:48', '2021-01-30 17:03:48'),
(4, 1, 1, 1, '5', 'wqewedqw', 'qsq', '2021-01-29 06:06:16', '2021-01-29 13:06:16'),
(5, 1, 3, 2, '3', 'testing', 'test', '2021-01-29 06:10:31', '2021-01-29 13:10:31');

-- --------------------------------------------------------

--
-- Table structure for table `donatebloods`
--

CREATE TABLE `donatebloods` (
  `id` int(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `age` int(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `height` varchar(255) DEFAULT NULL,
  `weight` varchar(255) DEFAULT NULL,
  `blood_group` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donatebloods`
--

INSERT INTO `donatebloods` (`id`, `name`, `age`, `phone`, `address`, `height`, `weight`, `blood_group`, `email`, `gender`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Srishti Singh', 21, '09988992277', 'Rajsthan', '6', '60', 'A-', 'srishti@gmail.com', 'Female', '9841.jpg', '2021-01-04 12:19:14', '2021-01-04 06:49:14'),
(2, 'Atharav Agrahari', 25, '07088998877', 'Lucknow', '6', '65', 'AB+', 'atharav@gmail.com', 'Male', '1310.jpg', '2021-01-04 12:23:40', '2021-01-04 06:53:40'),
(3, 'Kumar Kartik Agrahari', 7, '08078998877', 'Amethi', '3', '40', 'O+', 'kartik@gmail.com', 'Male', '2997.jpg', '2021-01-04 12:25:12', '2021-01-04 06:55:12'),
(4, 'Rohit Singh', 40, '08080998877', 'Delhi', '5', '98', 'B+', 'rohit@gmail.com', 'Male', '1438.jpg', '2021-01-04 12:30:32', '2021-01-04 07:00:32');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hospitalprofiles`
--

CREATE TABLE `hospitalprofiles` (
  `id` int(255) NOT NULL,
  `userid` int(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `user_image` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `bio` varchar(255) DEFAULT NULL,
  `hospital_address` varchar(255) DEFAULT NULL,
  `hospital_image` varchar(255) DEFAULT NULL,
  `account_holder` varchar(255) DEFAULT NULL,
  `account_number` varchar(255) DEFAULT NULL,
  `ifsc_code` varchar(255) DEFAULT NULL,
  `upi_id` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `postal_code` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `promocode` varchar(255) DEFAULT NULL,
  `services` varchar(255) DEFAULT NULL,
  `specialist` varchar(255) DEFAULT NULL,
  `award` varchar(255) DEFAULT NULL,
  `award_year` varchar(255) DEFAULT NULL,
  `membership` varchar(255) DEFAULT NULL,
  `registration_number` varchar(255) DEFAULT NULL,
  `registration_year` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospitalprofiles`
--

INSERT INTO `hospitalprofiles` (`id`, `userid`, `name`, `email`, `phone`, `user_image`, `first_name`, `last_name`, `gender`, `dob`, `bio`, `hospital_address`, `hospital_image`, `account_holder`, `account_number`, `ifsc_code`, `upi_id`, `address`, `city`, `state`, `country`, `postal_code`, `price`, `promocode`, `services`, `specialist`, `award`, `award_year`, `membership`, `registration_number`, `registration_year`, `created_at`, `updated_at`, `status`) VALUES
(1, 3, 'Aanaxa Hospital', 'aanaxa@gmail.com', '09988998877', '4821.jpg', 'Nitish', 'Kumar', 'Male', '1990-12-15', 'TESTING', 'Delhi', '1130.jpg', 'Nitish Kumar', '12313213123123', 'ICICI9090', 'nitish@ybl', 'Kanpur', 'kakadeo', 'up', 'India', '2010232', '10000', 'SADSAD', 'Treatment', 'Child And Eye Care', 'Best Hospital In Ghaziabad', '2016', 'Gold', 'DCDC0090908976567', '2050', '2021-01-15 07:17:38', '2021-01-15 15:29:20', 1),
(2, 4, 'SJM Hospital', 'sjm@gmail.com', '09988356444', '8842.jpg', 'Akarshit', 'Agrahari', 'Male', '1999-01-21', 'test', 'Delhi', '4711.jpg', 'Akarshit Agrahari', '232342111213', 'ICICI9090', 'akarshit@gpay', 'Kanpur', 'kakadeo', 'up', 'India', '2010232', '5000', 'sdasd', 'Treatment', 'Child And Eye Care', 'Best Hospital In Ghaziabad', '2016', 'Gold', 'DCDC0090908976567', '2040', '2021-01-15 09:15:14', '2021-01-15 16:17:56', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `id` int(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `package` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`id`, `name`, `email`, `password`, `phone`, `image`, `package`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Aanaxa Hospital', 'aanaxa@gmail.com', '25f9e794323b453885f5181f1b624d0b', '09988998877', '9786.jpg', 'Silver (3 Months)', 1, '2021-01-12 10:51:51', '2021-01-13 19:08:35'),
(4, 'SJM Hospital', 'sjm@gmail.com', '25f9e794323b453885f5181f1b624d0b', '09988356444', '7747.jpg', 'Gold (6 Months)', 1, '2021-01-12 10:52:55', '2021-01-12 17:53:06');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_12_17_050947_create-products-table', 2),
(5, '2020_12_23_072602_admin_user_table', 3),
(6, '2020_12_23_083133_pharmacy_user_table', 3),
(7, '2020_12_23_090052_patient_user_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `patient_email` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `shipping_charges` float DEFAULT NULL,
  `order_status` varchar(255) DEFAULT NULL,
  `payment_method` varchar(255) DEFAULT NULL,
  `grand_total` float DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `patient_email`, `name`, `email`, `address`, `phone`, `shipping_charges`, `order_status`, `payment_method`, `grand_total`, `created_at`, `updated_at`) VALUES
(1, 17, 'fateh@gmail.com', 'Fateh singh', NULL, 'Faridabad', '8989898989', NULL, 'New', 'paytm', 68, '2021-02-02', '2021-02-02 04:14:14'),
(2, 17, 'fateh@gmail.com', 'Fateh singh', NULL, 'Faridabad', '8989898989', NULL, 'New', 'paytm', 68, '2021-02-02', '2021-02-02 04:14:34'),
(3, 17, 'fateh@gmail.com', 'Fateh singh', NULL, 'Faridabad', '8989898989', NULL, 'New', 'paytm', 34, '2021-02-02', '2021-02-02 04:19:50'),
(4, 17, 'fateh@gmail.com', 'Fateh singh', NULL, 'Faridabad', '8989898989', NULL, 'New', 'paytm', 34, '2021-02-02', '2021-02-02 04:32:58'),
(5, 13, 'deeksha@gmail.com', 'Deepa saini', NULL, 'Gaziabad', '9999999999', NULL, 'New', 'paytm', 23, '2021-02-02', '2021-02-02 04:53:02');

-- --------------------------------------------------------

--
-- Table structure for table `orders_products`
--

CREATE TABLE `orders_products` (
  `id` int(255) NOT NULL,
  `order_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `product_code` varchar(255) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_weight` varchar(255) DEFAULT NULL,
  `product_price` float DEFAULT NULL,
  `product_qty` int(255) DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders_products`
--

INSERT INTO `orders_products` (`id`, `order_id`, `user_id`, `product_id`, `product_code`, `product_name`, `product_weight`, `product_price`, `product_qty`, `created_at`, `updated_at`) VALUES
(1, 1, 17, '2', 'AMT11', 'Rahu pe mangal', NULL, 34, 1, '2021-02-02', '2021-02-02 04:14:14'),
(2, 2, 17, '2', 'AMT11', 'Rahu pe mangal', NULL, 34, 1, '2021-02-02', '2021-02-02 04:14:34'),
(3, 3, 17, '2', 'AMT11', 'Rahu pe mangal', NULL, 34, 1, '2021-02-02', '2021-02-02 04:19:50'),
(4, 4, 17, '2', 'AMT11', 'Rahu pe mangal', NULL, 34, 1, '2021-02-02', '2021-02-02 04:32:58'),
(5, 5, 13, '1', 'NTT10', 'dsadsdad', NULL, 23, 1, '2021-02-02', '2021-02-02 04:53:02');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `password` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `age` int(130) DEFAULT NULL,
  `blood_group` varchar(255) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `zipcode` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `phone`, `email`, `status`, `password`, `dob`, `age`, `blood_group`, `address`, `city`, `state`, `zipcode`, `country`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Srishti', '8858596575', 'srishti@gmail.com', 1, '25f9e794323b453885f5181f1b624d0b', '1999-01-03', 21, 'A-', 'Allahabad', 'Allahabad', 'UP', '227804', 'India', '989.jpg', '2020-12-28 06:13:56', '2020-12-30 04:52:05'),
(2, 'akarshit', '8858596575', 'akarshit@gmail.com', 1, '25f9e794323b453885f5181f1b624d0b', '2020-12-30', 25, 'A-', 'Ghaziabad', 'delhi', 'up', '2010009', 'India', '394.jpg', '2020-12-28 06:23:31', '2021-02-01 14:10:42'),
(3, 'sukanya', '8899775566', 'sukanya@gmail.com', 1, '25f9e794323b453885f5181f1b624d0b', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-12-31 09:49:31', '2021-01-13 17:30:05'),
(4, 'new', '09988998877', 'new@gmail.com', 1, '25f9e794323b453885f5181f1b624d0b', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-09 12:51:35', '2021-01-09 19:51:35'),
(5, 'abc', '09988998877', 'abc@gmail.com', 1, '25f9e794323b453885f5181f1b624d0b', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-16 10:45:23', '2021-01-16 17:45:23'),
(6, 'lalit Raghav', '09977998877', 'lalit@gmail.com', 1, '25f9e794323b453885f5181f1b624d0b', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-16 10:48:02', '2021-01-16 17:48:02'),
(7, 'Shaifali', '09988998877', 'shaifali@gmail.com', 1, 'fcda9ccc0e7dab4f949f89d4b49964c0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-16 10:53:21', '2021-01-16 17:53:21'),
(8, 'deeksha', '09988998877', 'deeksha@gmail.com', 1, '921c57648883fe285cbb4645190877f1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-16 10:55:53', '2021-01-16 17:55:53'),
(9, 'Deepak Anand', '9919763885', 'socialvaidya@gmail.com', 1, '25f9e794323b453885f5181f1b624d0b', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-25 10:46:03', '2021-01-25 17:46:03'),
(10, 'Lalit', '07827820996', 'superadmin@gmail.com', 1, '25f9e794323b453885f5181f1b624d0b', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-30 06:40:42', '2021-01-30 13:52:00');

-- --------------------------------------------------------

--
-- Table structure for table `paytm`
--

CREATE TABLE `paytm` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `amount` int(11) DEFAULT NULL,
  `order_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paytm`
--

INSERT INTO `paytm` (`id`, `name`, `phone`, `email`, `status`, `amount`, `order_id`, `transaction_id`, `created_at`, `updated_at`) VALUES
(1, 'Deepa saini', 9999999999, 'deeksha@gmail.com', 0, 23, '9999999999_698', '0', '2021-02-02 04:53:13', '2021-02-02 04:53:13'),
(2, 'Deepa saini', 9999999999, 'deeksha@gmail.com', 0, 23, '9999999999_541', '0', '2021-02-02 05:04:16', '2021-02-02 05:04:16');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacies`
--

CREATE TABLE `pharmacies` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `dob` date DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `zipcode` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pharmacies`
--

INSERT INTO `pharmacies` (`id`, `name`, `email`, `status`, `dob`, `phone`, `address`, `city`, `state`, `zipcode`, `country`, `image`, `email_verified_at`, `password`, `created_at`, `updated_at`) VALUES
(1, 'nitish', 'nitish@gmail.com', 1, '2020-12-16', '09988998877', 'Delhi Ghaziabad', 'Noida Sector-63', 'Uttar Pradesh', '226707', 'India', '8357.jpg', NULL, '25f9e794323b453885f5181f1b624d0b', '2020-12-14 04:10:46', '2021-01-16 19:48:09');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacycategories`
--

CREATE TABLE `pharmacycategories` (
  `id` int(255) NOT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `Created_at` date DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pharmacycategories`
--

INSERT INTO `pharmacycategories` (`id`, `category_name`, `Created_at`, `updated_at`) VALUES
(1, 'Phytopathology‎', '2020-12-16', '2020-12-15 18:30:00'),
(3, 'Family care', '2020-12-16', '2020-12-15 18:30:00'),
(4, 'Cancer1', '2020-12-16', '2021-01-29 12:02:00'),
(5, 'Hair care', '2020-12-16', '2020-12-15 18:30:00'),
(6, 'Skin care', '2020-12-16', '2020-12-15 18:30:00'),
(7, 'Rare diseases‎', '2020-12-16', '2020-12-15 18:30:00'),
(8, 'Baby care', '2020-12-16', '2020-12-15 18:30:00'),
(9, 'Inflammations', '2020-12-16', '2020-12-15 18:30:00'),
(10, 'Sleep disorders‎', '2020-12-16', '2020-12-15 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_image` varchar(255) DEFAULT NULL,
  `product_price` varchar(255) DEFAULT NULL,
  `product_description` varchar(500) DEFAULT NULL,
  `product_category` varchar(255) DEFAULT NULL,
  `product_quantity` varchar(255) DEFAULT NULL,
  `product_discount` varchar(255) DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_image`, `product_price`, `product_description`, `product_category`, `product_quantity`, `product_discount`, `created_at`, `updated_at`) VALUES
(1, 'new Product', '8260.jpg', '1000', NULL, 'Phytopathology‎', '50', '20', '2020-12-19', '2020-12-31 04:52:52'),
(2, 'Product', '5248.jpg', '2000', 'test', 'Family care', '10', '20%', '2020-12-19', '2020-12-19 05:10:41'),
(3, 'product 1', '4711.jpg', '100', 'this is a medicine', 'Phytopathology‎', '5', '0%', '2020-12-19', '2020-12-31 04:56:15');

-- --------------------------------------------------------

--
-- Table structure for table `requestbloods`
--

CREATE TABLE `requestbloods` (
  `id` int(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `age` int(255) DEFAULT NULL,
  `phone` varchar(13) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `height` varchar(255) DEFAULT NULL,
  `weight` varchar(255) DEFAULT NULL,
  `blood_group` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requestbloods`
--

INSERT INTO `requestbloods` (`id`, `name`, `age`, `phone`, `address`, `height`, `weight`, `blood_group`, `email`, `gender`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Ayush Gupta', 23, '8005322244', 'Lucknow', '6', '68', 'B+', 'ayush@gmail.com', 'Male', '3652.jpg', '2021-01-04 12:16:41', '2021-01-04 06:46:41'),
(2, 'Prateek Gupta', 25, '8995644424', 'Sultanpur', '5', '56', 'B+', 'prateek@gmail.com', 'Male', '2225.jpg', '2021-01-04 12:17:43', '2021-01-04 06:47:43'),
(3, 'Sukanya Chauhan', 25, '09988998877', 'Delhi', '4', '40', 'B-', 'sukanya@gmail.com', 'Female', '6964.jpg', '2021-01-04 12:18:12', '2021-01-04 06:48:12'),
(4, 'Aarushi Pandey', 40, '7866456457', 'Meerut,UP', '5', '55', 'O-', 'arushi@gmail.com', 'Female', '837.jpg', '2021-01-04 12:20:24', '2021-01-04 06:50:24'),
(5, 'Lalit Raghav', 26, '8956042321', 'Ghaziabad', '6', '56', 'O+', 'lalit@gmail.com', 'Male', '6347.jpg', '2021-01-04 12:21:14', '2021-01-04 06:51:14'),
(6, 'Abhishek Singh', 25, '09944498877', 'Delhi', '6', '76', 'A+', 'abhishek@gmail.com', 'Male', '2073.jpg', '2021-01-04 12:22:04', '2021-01-04 06:52:04');

-- --------------------------------------------------------

--
-- Table structure for table `schedule_attributes`
--

CREATE TABLE `schedule_attributes` (
  `id` int(255) NOT NULL,
  `doctorId` int(255) DEFAULT NULL,
  `scheduleId` int(255) NOT NULL,
  `starttime` varchar(255) DEFAULT NULL,
  `endtime` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule_attributes`
--

INSERT INTO `schedule_attributes` (`id`, `doctorId`, `scheduleId`, `starttime`, `endtime`, `created_at`, `updated_at`) VALUES
(1, 3, 10, '16:46', '19:46', '2021-01-27 11:17:13', '2021-01-27 18:17:13'),
(2, 3, 10, '19:47', '19:47', '2021-01-27 11:17:13', '2021-01-27 18:17:13'),
(3, 3, 10, '18:47', '22:47', '2021-01-27 11:17:13', '2021-01-27 18:17:13');

-- --------------------------------------------------------

--
-- Table structure for table `specialities`
--

CREATE TABLE `specialities` (
  `id` int(255) NOT NULL,
  `speciality_name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `specialities`
--

INSERT INTO `specialities` (`id`, `speciality_name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Urology', '3806.png', '2021-01-06 09:06:36', '2021-01-06 16:07:02'),
(2, 'Neurology', '7839.png', '2021-01-06 09:07:18', '2021-01-06 16:07:18'),
(3, 'Orthopedic', '8799.png', '2021-01-06 09:07:32', '2021-01-06 16:07:32'),
(4, 'Cardiologist', '3525.png', '2021-01-06 09:07:47', '2021-01-06 16:07:47'),
(5, 'Dentist', '9574.png', '2021-01-06 09:08:00', '2021-01-06 16:08:00');

-- --------------------------------------------------------

--
-- Table structure for table `subadmins`
--

CREATE TABLE `subadmins` (
  `id` int(255) NOT NULL,
  `subadmin_name` varchar(255) DEFAULT NULL,
  `subadmin_email` varchar(255) DEFAULT NULL,
  `subadmin_phone` varchar(11) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subadmins`
--

INSERT INTO `subadmins` (`id`, `subadmin_name`, `subadmin_email`, `subadmin_phone`, `password`, `created_at`, `updated_at`) VALUES
(2, 'Sub Admin 1', 'subadmin@gmail.com', '1023456789', '25f9e794323b453885f5181f1b624d0b', '2020-12-03 09:13:59', '2020-12-03 03:43:59'),
(3, 'new subadmin', 'admin@gmail.com', '123456789', 'e807f1fcf82d132f9bb018ca6738a19f', '2020-12-08 06:47:47', '2020-12-08 01:17:47'),
(4, 'new subadmin', 'admin@gmail.com', '9919271520', '6ebe76c9fb411be97b3b0d48b791a7c9', '2020-12-31 09:48:00', '2020-12-31 04:18:00');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptionplans`
--

CREATE TABLE `subscriptionplans` (
  `id` int(255) NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `package` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscriptionplans`
--

INSERT INTO `subscriptionplans` (`id`, `category`, `package`, `price`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Individual Doctor', 'Free', '0', 'Free', '2020-12-21 11:50:44', '2020-12-21 06:20:44'),
(2, 'Individual Doctor', 'Silver (3 Months)', '1000', '3 Months Plan', '2020-12-21 11:51:11', '2020-12-21 06:21:11'),
(3, 'Individual Doctor', 'Gold (6 Months)', '1500', 'This Plan is for 6 Months.', '2020-12-21 11:51:47', '2020-12-21 06:21:47'),
(4, 'Individual Doctor', 'Platinum (12 Months)', '3000', 'This plan is for 12 month.', '2020-12-21 11:52:20', '2020-12-21 06:22:20'),
(5, 'Blood Bank', 'Free', '0', 'Free Plan', '2020-12-21 11:52:38', '2020-12-21 06:22:38'),
(6, 'Blood Bank', 'Silver (3 Months)', '1000', 'This is for 3 Months Plan', '2020-12-21 11:52:59', '2020-12-21 06:22:59'),
(7, 'Blood Bank', 'Gold (6 Months)', '1500', 'This is for 6 Months Plan', '2020-12-21 11:53:31', '2020-12-21 06:23:31'),
(8, 'Diagonostics', 'Silver (3 Months)', '1000', 'xyz', '2020-12-31 09:46:24', '2020-12-31 04:16:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', 'superadmin@gmail.com', NULL, '$2y$10$yn7endLSgXdq4CCzFDcKUeoTiWC4hgJLDWKwzxguS5PNS6OPnS8q6', NULL, '2020-12-07 06:20:12', '2020-12-07 06:20:12'),
(3, 'admin', 'admin@gmail.com', NULL, '$2y$10$Bisti/mt0xkdOydygmDRQOzc8Rzlp.6GCh5ccNtsWKncMUAmjtXrm', NULL, '2020-12-07 23:56:27', '2020-12-07 23:56:27'),
(11, 'abhishek', 'abhishek@gmail.com', NULL, '$2y$10$lJisNm/jhhxW80dxjRIzfu9QW20xVdVYzJW8OaK4MqfVqiDGCAb3y', NULL, '2020-12-31 04:28:40', '2020-12-31 04:28:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alladmins`
--
ALTER TABLE `alladmins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `askquestions`
--
ALTER TABLE `askquestions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bloodbanks`
--
ALTER TABLE `bloodbanks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diagnosticprofiles`
--
ALTER TABLE `diagnosticprofiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diagnostics`
--
ALTER TABLE `diagnostics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctorprofiles`
--
ALTER TABLE `doctorprofiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctorschedules`
--
ALTER TABLE `doctorschedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctorsocialmedia`
--
ALTER TABLE `doctorsocialmedia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_reviews`
--
ALTER TABLE `doctor_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donatebloods`
--
ALTER TABLE `donatebloods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospitalprofiles`
--
ALTER TABLE `hospitalprofiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_products`
--
ALTER TABLE `orders_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paytm`
--
ALTER TABLE `paytm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pharmacies`
--
ALTER TABLE `pharmacies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pharmacycategories`
--
ALTER TABLE `pharmacycategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requestbloods`
--
ALTER TABLE `requestbloods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule_attributes`
--
ALTER TABLE `schedule_attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specialities`
--
ALTER TABLE `specialities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subadmins`
--
ALTER TABLE `subadmins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriptionplans`
--
ALTER TABLE `subscriptionplans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alladmins`
--
ALTER TABLE `alladmins`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `askquestions`
--
ALTER TABLE `askquestions`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bloodbanks`
--
ALTER TABLE `bloodbanks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `diagnosticprofiles`
--
ALTER TABLE `diagnosticprofiles`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `diagnostics`
--
ALTER TABLE `diagnostics`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctorprofiles`
--
ALTER TABLE `doctorprofiles`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `doctorschedules`
--
ALTER TABLE `doctorschedules`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `doctorsocialmedia`
--
ALTER TABLE `doctorsocialmedia`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctor_reviews`
--
ALTER TABLE `doctor_reviews`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `donatebloods`
--
ALTER TABLE `donatebloods`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hospitalprofiles`
--
ALTER TABLE `hospitalprofiles`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders_products`
--
ALTER TABLE `orders_products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `paytm`
--
ALTER TABLE `paytm`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pharmacies`
--
ALTER TABLE `pharmacies`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pharmacycategories`
--
ALTER TABLE `pharmacycategories`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `requestbloods`
--
ALTER TABLE `requestbloods`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `schedule_attributes`
--
ALTER TABLE `schedule_attributes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `specialities`
--
ALTER TABLE `specialities`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subadmins`
--
ALTER TABLE `subadmins`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subscriptionplans`
--
ALTER TABLE `subscriptionplans`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
