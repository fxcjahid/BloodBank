-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2023 at 02:17 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `camp`
--

CREATE TABLE `camp` (
  `id` int(100) NOT NULL,
  `title` varchar(500) NOT NULL,
  `organise` varchar(500) NOT NULL,
  `state` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  `country` int(11) NOT NULL,
  `pic` varchar(900) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `camp`
--

INSERT INTO `camp` (`id`, `title`, `organise`, `state`, `city`, `country`, `pic`, `description`) VALUES
(12, 'UAP Social Awareness Blood Donation Camp', 'UAP Social Awareness', 12, 10, 1, 'camp-1-1.jpg', 'UAP Social Awareness Club organised a voluntary “Blood Donation Camp” in cooperation with the Quantum Foundation on 22 January, 2019 at UAP Plaza.<br/>\r\nThe camp started at 10.00 am in the morning and continued till 5.00 pm. Students from different departments attended voluntarily in the campaign.<br/>\r\nProfessor Dr. Mohiduddin Ahmed Bhuiyan, Head, Department of Pharmacy, Md. Tarek Khan, Assistant Director, DSW, and members of the club were present during the blood donation camp. The donors were screened for Hepatitis B, Hepatitis C, Syphilis, AIDS and Malaria at free of cost. They were also given a donor card from Quantum Foundation. Total sixty three students were registered in the camp. After the check-up facilitated by Quantum Foundation’s Team, total 49 units of blood was donated by students of the university in the day-long camp.<br/>\r\nMs. Mahjabeen Gazi, Adviser, UAP Social Awareness Club coordinated the program along with the enthusiast members of the club.\r\n\r\n'),
(13, 'Blood Donation  Organized By Rotaract Club', 'ROTARACT CLUB', 17, 10, 1, 'camp-2-1.jpg', 'The Rotaract Club of East West University has organized a two-day-long blood donation camp in collaboration with Bangladesh Thalassemia Foundation.\r\n<br/><br/>\r\nBlood donation camp was inaugurated on 21 June at 9 am. and it collected blood till 5 pm on 22nd June. Students from East West University donated blood in exchange with a free test of hepatitis B and C, syphilis, malaria, and HIV.\r\n<br/><br/>\r\n219 bags of blood have been collected in this two-day blood donation camp. The collected blood has been handed over to the Bangladesh Thalassemia Foundation.\r\n<br/><br/>\r\nIt is to inform that; A thalassemia patient needs two to three bags of blood per month where helpless and poor people cannot afford to buy blood in regular basis. So that, collected blood from this donation camp to be supplied to the poor and thalassemia patients which will creates a great help to them.');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `country` int(11) NOT NULL,
  `state` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `name`, `country`, `state`) VALUES
(1, 'Dhanmondi', 1, 11),
(10, 'Mirpur', 1, 11),
(13, 'Habiganj', 1, 17),
(14, 'Cox Bazar', 1, 12);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `city` int(11) DEFAULT NULL,
  `state` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `name`, `city`, `state`) VALUES
(1, 'Bangladesh', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `units` int(100) NOT NULL,
  `description` varchar(800) NOT NULL,
  `donate_date` varchar(100) NOT NULL,
  `create_date` varchar(100) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`id`, `user_id`, `name`, `units`, `description`, `donate_date`, `create_date`) VALUES
(45, 87, 'test camp', 1, 'hey', '06-05-2020', '2023-01-17 16:01:37');

-- --------------------------------------------------------

--
-- Table structure for table `gallary`
--

CREATE TABLE `gallary` (
  `camp_id` int(100) NOT NULL,
  `pic_id` int(100) NOT NULL,
  `title` varchar(400) NOT NULL,
  `pic` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallary`
--

INSERT INTO `gallary` (`camp_id`, `pic_id`, `title`, `pic`) VALUES
(12, 218, '63d6775e4cb966.71079983_mqohnikejgplf.webp', '63d6775e4cb966.71079983_mqohnikejgplf.webp'),
(12, 219, '63d6775e4cb966.71079983_mqohnikejgplf.webp', '63d6775e4cb966.71079983_mqohnikejgplf.webp'),
(12, 220, '63d6775e4cb966.71079983_mqohnikejgplf.webp', '63d6775e4cb966.71079983_mqohnikejgplf.webp'),
(12, 221, '63d6775e4cb966.71079983_mqohnikejgplf.webp', '63d6775e4cb966.71079983_mqohnikejgplf.webp');

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`id`, `name`) VALUES
(2, 'female'),
(1, 'male'),
(3, 'others');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`) VALUES
(1, 'A+'),
(2, 'A-'),
(7, 'AB+'),
(8, 'AB-'),
(3, 'B+'),
(4, 'B-'),
(5, 'O+'),
(6, 'O-');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(3000) DEFAULT NULL,
  `patient_name` varchar(100) NOT NULL,
  `patient_age` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `gender` int(11) NOT NULL,
  `country` int(11) NOT NULL,
  `State` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  `group` int(11) NOT NULL,
  `required_date` varchar(100) DEFAULT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `title`, `description`, `patient_name`, `patient_age`, `email`, `mobile`, `gender`, `country`, `State`, `city`, `group`, `required_date`, `create_date`) VALUES
(18, 'Animea, need 4 bags', 'Patient problem: Animea\r\nBlood Group: A(+)\r\nAmount of Blood:\r\n4 Begs\r\nBlood Donation Date: 19/01/2023 \r\nPlace of Blood Donation:National Hospital, sadarghat \r\nContact no:01478963214', 'Stephen Rudra Biswas', '23', 'rudra@gmail.com', '014789632**', 2, 1, 11, 1, 1, '2023-01-11 00:00:00', '2023-01-15 20:07:35'),
(19, 'Injured from bike accident, need 1 ', 'Patient problem: Injured from bike accident\r\nBlood Group: A(+)\r\nAmount of Blood:\r\n1 Bag\r\nBlood Donation Date: 18/01/2023\r\nPlace of Blood Donation:Popular hospital, Rayshaheb bazar\r\nContact no:01854326978', 'Kazi Nayeem Hossain', '24', 'nayeem@gmail.com', '01854326**8', 1, 1, 12, 1, 1, '2023-01-19 00:00:00', '2023-01-15 20:09:15'),
(20, 'Kidney Transplant, need 1 bag', 'Blood is urgently needed\r\nPatient problem: Kidney operation\r\nBlood Group: A(+)\r\nAmount of Blood:\r\n1 Begs\r\nBlood Donation Date: 26/01/2023\r\nPlace of Blood Donation: Mohakhali\r\nGuestliver Hospital\r\nContact no:01479932487 ', 'Arnob Mallick', '30', 'arnob@gmail.com', '01479932***', 1, 1, 13, 1, 1, '2023-01-11 00:00:00', '2023-01-15 20:11:38'),
(21, 'Pregnancy, need 1 bag ', 'Patient problem: Pregnancy\r\nBlood Group: A(+)\r\nAmount of Blood:\r\n1 Bag\r\nBlood Donation Date: 13/02/2023\r\nPlace of Blood Donation:Holy Family, Mogbazar\r\nContact no:01365478925 ', 'Aishi Clara Mondal', '40', 'aishi@gmail.com', '013654789**', 2, 1, 14, 1, 1, '2023-01-18 00:00:00', '2023-01-15 20:12:35'),
(22, 'Pregnancy, need 2 bags', 'Patient problem: Pregnancy\r\nBlood Group: A(+)\r\nAmount of Blood:\r\n2 Bags\r\nBlood Donation Date: 22/02/2023\r\nPlace of Blood Donation:Holy Family, Mogbazar\r\nContact no:01785236984 ', 'Tasfia Ahmed', '32', 'meheli@gmail.com', '01785236**4', 2, 1, 15, 1, 1, '2023-01-04 00:00:00', '2023-01-15 20:13:32'),
(23, 'Dengue, need 1 bag', 'Patient problem: Dengue\r\nBlood Group: B(+)\r\nAmount of Blood:\r\n1 Bag\r\nBlood Donation Date: 19/01/2023\r\nPlace of Blood Donation:Solimullah Medical College\r\nContact no:01793245684 ', 'Manna Salwa', '40', 'salwa@gmail.com', '017932456**4', 2, 1, 16, 1, 7, '2023-01-17 00:00:00', '2023-01-15 20:14:36'),
(24, 'Animea, need 4 bags', 'Patient problem: Animea\r\nBlood Group: A(+)\r\nAmount of Blood:\r\n4 Begs\r\nBlood Donation Date: 19/01/2023 \r\nPlace of Blood Donation:National Hospital, sadarghat \r\nContact no:01478963214', 'Stephen Rudra Biswas', '23', 'rudra@gmail.com', '014789632**', 2, 1, 16, 1, 2, '2023-01-27 00:00:00', '2023-01-15 20:07:35'),
(25, 'Injured from bike accident, need 1 ', 'Patient problem: Injured from bike accident\r\nBlood Group: A(+)\r\nAmount of Blood:\r\n1 Bag\r\nBlood Donation Date: 18/01/2023\r\nPlace of Blood Donation:Popular hospital, Rayshaheb bazar\r\nContact no:01854326978', 'Kazi Nayeem Hossain', '24', 'nayeem@gmail.com', '01854326**8', 1, 1, 17, 1, 3, '2023-01-29 00:00:00', '2023-01-15 20:09:15'),
(26, 'Kidney Transplant, need 1 bag', 'Blood is urgently needed\r\nPatient problem: Kidney operation\r\nBlood Group: A(+)\r\nAmount of Blood:\r\n1 Begs\r\nBlood Donation Date: 26/01/2023\r\nPlace of Blood Donation: Mohakhali\r\nGuestliver Hospital\r\nContact no:01479932487 ', 'Arnob Mallick', '30', 'arnob@gmail.com', '01479932***', 1, 1, 11, 1, 4, '2023-01-12 00:00:00', '2023-01-15 20:11:38'),
(27, 'Pregnancy, need 1 bag ', 'Patient problem: Pregnancy\r\nBlood Group: A(+)\r\nAmount of Blood:\r\n1 Bag\r\nBlood Donation Date: 13/02/2023\r\nPlace of Blood Donation:Holy Family, Mogbazar\r\nContact no:01365478925 ', 'Aishi Clara Mondal', '40', 'aishi@gmail.com', '013654789**', 2, 1, 14, 1, 5, '2023-01-12 00:00:00', '2023-01-15 20:12:35'),
(28, 'Pregnancy, need 2 bags', 'Patient problem: Pregnancy\r\nBlood Group: A(+)\r\nAmount of Blood:\r\n2 Bags\r\nBlood Donation Date: 22/02/2023\r\nPlace of Blood Donation:Holy Family, Mogbazar\r\nContact no:01785236984 ', 'Tasfia Ahmed', '32', 'meheli@gmail.com', '01785236**4', 2, 1, 15, 1, 1, '2023-01-24 00:00:00', '2023-01-15 20:13:32'),
(29, 'Dengue, need 1 bag', 'Patient problem: Dengue\r\nBlood Group: B(+)\r\nAmount of Blood:\r\n1 Bag\r\nBlood Donation Date: 19/01/2023\r\nPlace of Blood Donation:Solimullah Medical College\r\nContact no:01793245684 ', 'Manna Salwa', '40', 'salwa@gmail.com', '017932456**4', 2, 1, 16, 1, 6, '2023-01-24 00:00:00', '2023-01-15 20:14:36'),
(32, 'Dengue, need 1 bag', 'Patient problem: Dengue\r\nBlood Group: B(+)\r\nAmount of Blood:\r\n1 Bag\r\nBlood Donation Date: 19/01/2023\r\nPlace of Blood Donation:Solimullah Medical College\r\nContact no:01793245684 ', 'Manna Salwa', '40', 'salwa@gmail.com', '017932456**4', 2, 1, 16, 1, 7, '2023-01-24 00:00:00', '2023-01-15 20:14:36'),
(33, 'Pregnancy, need 2 bags', 'Patient problem: Pregnancy\r\nBlood Group: A(+)\r\nAmount of Blood:\r\n2 Bags\r\nBlood Donation Date: 22/02/2023\r\nPlace of Blood Donation:Holy Family, Mogbazar\r\nContact no:01785236984 ', 'Tasfia Ahmed', '32', 'meheli@gmail.com', '01785236**4', 2, 1, 15, 1, 8, '2023-01-24 00:00:00', '2023-01-15 20:13:32'),
(34, 'Pregnancy, need 1 bag ', 'Patient problem: Pregnancy\r\nBlood Group: A(+)\r\nAmount of Blood:\r\n1 Bag\r\nBlood Donation Date: 13/02/2023\r\nPlace of Blood Donation:Holy Family, Mogbazar\r\nContact no:01365478925 ', 'Aishi Clara Mondal', '40', 'aishi@gmail.com', '013654789**', 2, 1, 14, 1, 5, '2023-01-12 00:00:00', '2023-01-15 20:12:35'),
(35, 'Kidney Transplant, need 1 bag', 'Blood is urgently needed\r\nPatient problem: Kidney operation\r\nBlood Group: A(+)\r\nAmount of Blood:\r\n1 Begs\r\nBlood Donation Date: 26/01/2023\r\nPlace of Blood Donation: Mohakhali\r\nGuestliver Hospital\r\nContact no:01479932487 ', 'Arnob Mallick', '30', 'arnob@gmail.com', '01479932***', 1, 1, 11, 1, 6, '2023-01-12 00:00:00', '2023-01-15 20:11:38'),
(36, 'Injured from bike accident, need 1 ', 'Patient problem: Injured from bike accident\r\nBlood Group: A(+)\r\nAmount of Blood:\r\n1 Bag\r\nBlood Donation Date: 18/01/2023\r\nPlace of Blood Donation:Popular hospital, Rayshaheb bazar\r\nContact no:01854326978', 'Kazi Nayeem Hossain', '24', 'nayeem@gmail.com', '01854326**8', 1, 1, 17, 1, 3, '2023-01-29 00:00:00', '2023-01-15 20:09:15'),
(37, 'Animea, need 4 bags', 'Patient problem: Animea\r\nBlood Group: A(+)\r\nAmount of Blood:\r\n4 Begs\r\nBlood Donation Date: 19/01/2023 \r\nPlace of Blood Donation:National Hospital, sadarghat \r\nContact no:01478963214', 'Stephen Rudra Biswas', '23', 'rudra@gmail.com', '014789632**', 2, 1, 16, 1, 8, '2023-01-27 00:00:00', '2023-01-15 20:07:35'),
(38, 'Dengue, need 1 bag', 'Patient problem: Dengue\r\nBlood Group: B(+)\r\nAmount of Blood:\r\n1 Bag\r\nBlood Donation Date: 19/01/2023\r\nPlace of Blood Donation:Solimullah Medical College\r\nContact no:01793245684 ', 'Manna Salwa', '40', 'salwa@gmail.com', '017932456**4', 2, 1, 16, 1, 7, '2023-01-17 00:00:00', '2023-01-15 20:14:36'),
(39, 'Pregnancy, need 2 bags', 'Patient problem: Pregnancy\r\nBlood Group: A(+)\r\nAmount of Blood:\r\n2 Bags\r\nBlood Donation Date: 22/02/2023\r\nPlace of Blood Donation:Holy Family, Mogbazar\r\nContact no:01785236984 ', 'Tasfia Ahmed', '32', 'meheli@gmail.com', '01785236**4', 2, 1, 15, 1, 7, '2023-01-04 00:00:00', '2023-01-15 20:13:32'),
(40, 'Pregnancy, need 1 bag ', 'Patient problem: Pregnancy\r\nBlood Group: A(+)\r\nAmount of Blood:\r\n1 Bag\r\nBlood Donation Date: 13/02/2023\r\nPlace of Blood Donation:Holy Family, Mogbazar\r\nContact no:01365478925 ', 'Aishi Clara Mondal', '40', 'aishi@gmail.com', '013654789**', 2, 1, 14, 1, 2, '2023-01-18 00:00:00', '2023-01-15 20:12:35'),
(41, 'Kidney Transplant, need 1 bag', 'Blood is urgently needed\r\nPatient problem: Kidney operation\r\nBlood Group: A(+)\r\nAmount of Blood:\r\n1 Begs\r\nBlood Donation Date: 26/01/2023\r\nPlace of Blood Donation: Mohakhali\r\nGuestliver Hospital\r\nContact no:01479932487 ', 'Arnob Mallick', '30', 'arnob@gmail.com', '01479932***', 1, 1, 13, 1, 1, '2023-01-11 00:00:00', '2023-01-15 20:11:38'),
(42, 'Injured from bike accident, need 1 ', 'Patient problem: Injured from bike accident\r\nBlood Group: A(+)\r\nAmount of Blood:\r\n1 Bag\r\nBlood Donation Date: 18/01/2023\r\nPlace of Blood Donation:Popular hospital, Rayshaheb bazar\r\nContact no:01854326978', 'Kazi Nayeem Hossain', '24', 'nayeem@gmail.com', '01854326**8', 1, 1, 12, 1, 8, '2023-01-19 00:00:00', '2023-01-15 20:09:15'),
(43, 'Animea, need 4 bags', 'Patient problem: Animea\r\nBlood Group: A(+)\r\nAmount of Blood:\r\n4 Begs\r\nBlood Donation Date: 19/01/2023 \r\nPlace of Blood Donation:National Hospital, sadarghat \r\nContact no:01478963214', 'Stephen Rudra Biswas', '23', 'rudra@gmail.com', '01478963298', 2, 1, 11, 1, 5, '2023-01-11', '2023-01-15 20:07:35'),
(44, 'Pregnancy, need 2 bags', 'Patient problem: Pregnancy\r\nBlood Group: A(+)\r\nAmount of Blood:\r\n2 Bags\r\nBlood Donation Date: 22/02/2023\r\nPlace of Blood Donation:Holy Family, Mogbazar\r\nContact no:01785236984 ', 'Tasfia Ahmed', '32', 'meheli@gmail.com', '01785236**4', 2, 1, 15, 1, 7, '2023-01-04 00:00:00', '2023-01-15 20:13:32'),
(45, 'Dengue, need 1 bag', 'Patient problem: Dengue\r\nBlood Group: B(+)\r\nAmount of Blood:\r\n1 Bag\r\nBlood Donation Date: 19/01/2023\r\nPlace of Blood Donation:Solimullah Medical College\r\nContact no:01793245684 ', 'Manna Salwa', '40', 'salwa@gmail.com', '017932456**4', 2, 1, 16, 1, 7, '2023-01-17 00:00:00', '2023-01-15 20:14:36'),
(46, 'Pregnancy, need 1 bag ', 'Patient problem: Pregnancy\r\nBlood Group: A(+)\r\nAmount of Blood:\r\n1 Bag\r\nBlood Donation Date: 13/02/2023\r\nPlace of Blood Donation:Holy Family, Mogbazar\r\nContact no:01365478925 ', 'Aishi Clara Mondal', '40', 'aishi@gmail.com', '013654789**', 2, 1, 14, 1, 5, '2023-01-12 00:00:00', '2023-01-15 20:12:35'),
(47, 'Kidney Transplant, need 1 bag', 'Blood is urgently needed\r\nPatient problem: Kidney operation\r\nBlood Group: A(+)\r\nAmount of Blood:\r\n1 Begs\r\nBlood Donation Date: 26/01/2023\r\nPlace of Blood Donation: Mohakhali\r\nGuestliver Hospital\r\nContact no:01479932487 ', 'Arnob Mallick', '30', 'arnob@gmail.com', '01479932***', 1, 1, 11, 1, 4, '2023-01-12 00:00:00', '2023-01-15 20:11:38'),
(48, 'Dengue, need 1 bag', 'Patient problem: Dengue\r\nBlood Group: B(+)\r\nAmount of Blood:\r\n1 Bag\r\nBlood Donation Date: 19/01/2023\r\nPlace of Blood Donation:Solimullah Medical College\r\nContact no:01793245684 ', 'Manna Salwa', '40', 'salwa@gmail.com', '017932456**4', 2, 1, 16, 1, 7, '2023-01-17 00:00:00', '2023-01-15 20:14:36'),
(49, 'Animea, need 4 bags', 'Patient problem: Animea\r\nBlood Group: A(+)\r\nAmount of Blood:\r\n4 Begs\r\nBlood Donation Date: 19/01/2023 \r\nPlace of Blood Donation:National Hospital, sadarghat \r\nContact no:01478963214', 'Stephen Rudra Biswas', '23', 'rudra@gmail.com', '014789632**', 2, 1, 11, 1, 1, '2023-01-11 00:00:00', '2023-01-15 20:07:35'),
(51, 'Pregnancy, need 2 bags', 'Patient problem: Pregnancy\r\nBlood Group: A(+)\r\nAmount of Blood:\r\n2 Bags\r\nBlood Donation Date: 22/02/2023\r\nPlace of Blood Donation:Holy Family, Mogbazar\r\nContact no:01785236984 ', 'Tasfia Ahmed', '32', 'meheli@gmail.com', '01785236**4', 2, 1, 15, 1, 7, '2023-01-04 00:00:00', '2023-01-15 20:13:32'),
(52, 'Pregnancy, need 1 bag ', 'Patient problem: Pregnancy\r\nBlood Group: A(+)\r\nAmount of Blood:\r\n1 Bag\r\nBlood Donation Date: 13/02/2023\r\nPlace of Blood Donation:Holy Family, Mogbazar\r\nContact no:01365478925 ', 'Aishi Clara Mondal', '40', 'aishi@gmail.com', '013654789**', 2, 1, 14, 1, 2, '2023-01-18 00:00:00', '2023-01-15 20:12:35'),
(53, 'Pregnancy, need 2 bags', 'Patient problem: Pregnancy\r\nBlood Group: A(+)\r\nAmount of Blood:\r\n2 Bags\r\nBlood Donation Date: 22/02/2023\r\nPlace of Blood Donation:Holy Family, Mogbazar\r\nContact no:01785236984 ', 'Tasfia Ahmed', '32', 'meheli@gmail.com', '01785236**4', 2, 1, 15, 1, 7, '2023-01-04 00:00:00', '2023-01-15 20:13:32'),
(54, 'Need emergency 4 bags blood for pregnant', 'Need emergency 4 bags blood for pregnant', 'Stephen Rudra Biswas', '26', 'rudra@gmail.com', '01478963200', 3, 1, 14, 10, 6, '2023-01-29', '2023-01-15 20:07:35'),
(55, 'Injured from bike accident, need 1 ', 'Patient problem: Injured from bike accident\r\nBlood Group: A(+)\r\nAmount of Blood:\r\n1 Bag\r\nBlood Donation Date: 18/01/2023\r\nPlace of Blood Donation:Popular hospital, Rayshaheb bazar\r\nContact no:01854326978', 'Kazi Nayeem Hossain', '24', 'nayeem@gmail.com', '01854326**8', 1, 1, 17, 1, 3, '2023-01-29 00:00:00', '2023-01-15 20:09:15'),
(56, 'Pregnancy, need 2 bags', 'Patient problem: Pregnancy\r\nBlood Group: A(+)\r\nAmount of Blood:\r\n2 Bags\r\nBlood Donation Date: 22/02/2023\r\nPlace of Blood Donation:Holy Family, Mogbazar\r\nContact no:01785236984 ', 'Tasfia Ahmed', '32', 'meheli@gmail.com', '01785236**4', 2, 1, 15, 1, 8, '2023-01-24 00:00:00', '2023-01-15 20:13:32'),
(57, 'Kidney Transplant, need 1 bag', 'Blood is urgently needed\r\nPatient problem: Kidney operation\r\nBlood Group: A(+)\r\nAmount of Blood:\r\n1 Begs\r\nBlood Donation Date: 26/01/2023\r\nPlace of Blood Donation: Mohakhali\r\nGuestliver Hospital\r\nContact no:01479932487 ', 'Arnob Mallick', '30', 'arnob@gmail.com', '01479932***', 1, 1, 11, 1, 4, '2023-01-12 00:00:00', '2023-01-15 20:11:38'),
(58, 'Pregnancy, need 2 bags', 'Patient problem: Pregnancy\r\nBlood Group: A(+)\r\nAmount of Blood:\r\n2 Bags\r\nBlood Donation Date: 22/02/2023\r\nPlace of Blood Donation:Holy Family, Mogbazar\r\nContact no:01785236984 ', 'Tasfia Ahmed', '32', 'meheli@gmail.com', '01785236**4', 2, 1, 15, 1, 7, '2023-01-04 00:00:00', '2023-01-15 20:13:32'),
(59, 'Kidney Transplant, need 1 bag', 'Blood is urgently needed\r\nPatient problem: Kidney operation\r\nBlood Group: A(+)\r\nAmount of Blood:\r\n1 Begs\r\nBlood Donation Date: 26/01/2023\r\nPlace of Blood Donation: Mohakhali\r\nGuestliver Hospital\r\nContact no:01479932487 ', 'Arnob Mallick', '30', 'arnob@gmail.com', '01479932***', 1, 1, 11, 1, 6, '2023-01-12 00:00:00', '2023-01-15 20:11:38'),
(60, 'Bike accident emergency need B+ ', 'need urgent', 'MD Jahid Islam', '25', 'Fxcjahid3@gmail.com', '01623547800', 1, 1, 11, 10, 3, '2023-02-18', '2023-02-02 19:27:35');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `site_name` varchar(100) DEFAULT NULL,
  `phone` int(15) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`site_name`, `phone`, `email`, `address`) VALUES
('Blood Donation', 162350000, 'infoxx@site.com', 'House - 20, Block - H , City, Country');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `city` int(11) DEFAULT NULL,
  `country` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `name`, `city`, `country`) VALUES
(11, 'Dhaka', NULL, 1),
(12, 'Chittagong', NULL, 6),
(13, 'Barisal', NULL, 1),
(14, 'Khulna', NULL, 1),
(15, 'Rajshahi', NULL, 1),
(16, 'Rangpur', NULL, 1),
(17, 'Sylhet', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` enum('donor','admin') NOT NULL DEFAULT 'donor',
  `phone` int(16) NOT NULL,
  `gender` int(11) NOT NULL,
  `blood` int(11) NOT NULL,
  `birthday` varchar(100) NOT NULL,
  `last_donate` varchar(100) DEFAULT NULL,
  `available` int(11) NOT NULL DEFAULT 1,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `role`, `phone`, `gender`, `blood`, `birthday`, `last_donate`, `available`, `created`) VALUES
(33, 'Arnob Mallick', NULL, 'arnob@gmail.com', '$2y$10$BZWVP3tfey0uVxKiGUE5F.qKNdNIvoEHatN9j2EN9DyCzPRkSsZRy', 'donor', 1479932, 2, 2, '1997-01-15', '29-01-2020', 1, '2023-01-15 20:28:51'),
(34, 'Arnob Mallick', NULL, 'arnob@gmail.com', '$2y$10$BZWVP3tfey0uVxKiGUE5F.qKNdNIvoEHatN9j2EN9DyCzPRkSsZRy', 'donor', 1479932, 2, 1, '1997-01-15', '29-01-2020', 0, '2023-01-15 20:28:51'),
(35, 'Tasfia Ahmed', NULL, 'tasfia.b@gmail.com', '$2y$10$BZWVP3tfey0uVxKiGUE5F.qKNdNIvoEHatN9j2EN9DyCzPRkSsZRy', 'donor', 1479932, 2, 2, '1997-01-15', '29-01-2020', 1, '2023-01-15 20:28:51'),
(38, 'Arnob Mallick', NULL, 'arnob@gmail.com', '$2y$10$BZWVP3tfey0uVxKiGUE5F.qKNdNIvoEHatN9j2EN9DyCzPRkSsZRy', 'donor', 1479932, 2, 1, '1997-01-15', '29-01-2020', 1, '2023-01-15 20:28:51'),
(39, 'Tasfia Ahmed', NULL, 'tasfia.b@gmail.com', '$2y$10$BZWVP3tfey0uVxKiGUE5F.qKNdNIvoEHatN9j2EN9DyCzPRkSsZRy', 'donor', 1479932, 2, 2, '1997-01-15', '29-01-2020', 1, '2023-01-15 20:28:51'),
(41, 'Kazi Nayeem Hossain', NULL, 'arzakinayem@gmail.com', '$2y$10$BZWVP3tfey0uVxKiGUE5F.qKNdNIvoEHatN9j2EN9DyCzPRkSsZRy', 'donor', 1479932, 2, 4, '1997-01-15', '29-01-2020', 1, '2023-01-15 20:28:51'),
(43, 'Mumtahina Faguni', NULL, 'amun.falguni32@gmail.com', '$2y$10$BZWVP3tfey0uVxKiGUE5F.qKNdNIvoEHatN9j2EN9DyCzPRkSsZRy', 'donor', 1479932, 2, 6, '1997-01-15', '29-01-2020', 1, '2023-01-15 20:28:51'),
(44, 'Pantho Bihosh', NULL, 'panth.bisho42b@gmail.com', '$2y$10$BZWVP3tfey0uVxKiGUE5F.qKNdNIvoEHatN9j2EN9DyCzPRkSsZRy', 'donor', 1479932, 2, 7, '1997-01-15', '29-01-2020', 1, '2023-01-15 20:28:51'),
(45, 'Azizul Haque', NULL, 'aziziha121@gmail.com', '$2y$10$BZWVP3tfey0uVxKiGUE5F.qKNdNIvoEHatN9j2EN9DyCzPRkSsZRy', 'donor', 1479932, 2, 8, '1997-01-15', '29-01-2020', 1, '2023-01-15 20:28:51'),
(46, 'Md Arif Khan', NULL, 'arif.khan42@gmail.com', '$2y$10$BZWVP3tfey0uVxKiGUE5F.qKNdNIvoEHatN9j2EN9DyCzPRkSsZRy', 'donor', 1479932, 2, 8, '1997-01-15', '29-01-2020', 1, '2023-01-15 20:28:51'),
(47, 'Keya Ahmed Ora', NULL, 'arkeya.oran2@gmail.com', '$2y$10$BZWVP3tfey0uVxKiGUE5F.qKNdNIvoEHatN9j2EN9DyCzPRkSsZRy', 'donor', 1479932, 2, 7, '1997-01-15', '29-01-2020', 1, '2023-01-15 20:28:51'),
(49, 'Arnob Mallick', NULL, 'arnob@gmail.com', '$2y$10$BZWVP3tfey0uVxKiGUE5F.qKNdNIvoEHatN9j2EN9DyCzPRkSsZRy', 'donor', 1479932, 2, 1, '1997-01-15', '29-01-2020', 1, '2023-01-15 20:28:51'),
(50, 'Tasfia Ahmed', NULL, 'tasfia.b@gmail.com', '$2y$10$BZWVP3tfey0uVxKiGUE5F.qKNdNIvoEHatN9j2EN9DyCzPRkSsZRy', 'donor', 1479932, 2, 2, '1997-01-15', '29-01-2020', 1, '2023-01-15 20:28:51'),
(52, 'Kazi Nayeem Hossain', NULL, 'arzakinayem@gmail.com', '$2y$10$BZWVP3tfey0uVxKiGUE5F.qKNdNIvoEHatN9j2EN9DyCzPRkSsZRy', 'donor', 1479932, 2, 4, '1997-01-15', '29-01-2020', 1, '2023-01-15 20:28:51'),
(54, 'Mumtahina Faguni', NULL, 'amun.falguni32@gmail.com', '$2y$10$BZWVP3tfey0uVxKiGUE5F.qKNdNIvoEHatN9j2EN9DyCzPRkSsZRy', 'donor', 1479932, 2, 6, '1997-01-15', '29-01-2020', 1, '2023-01-15 20:28:51'),
(55, 'Pantho Bihosh', NULL, 'panth.bisho42b@gmail.com', '$2y$10$BZWVP3tfey0uVxKiGUE5F.qKNdNIvoEHatN9j2EN9DyCzPRkSsZRy', 'donor', 1479932, 2, 7, '1997-01-15', '29-01-2020', 1, '2023-01-15 20:28:51'),
(56, 'Azizul Haque', NULL, 'aziziha121@gmail.com', '$2y$10$BZWVP3tfey0uVxKiGUE5F.qKNdNIvoEHatN9j2EN9DyCzPRkSsZRy', 'donor', 1479932, 2, 8, '1997-01-15', '29-01-2020', 1, '2023-01-15 20:28:51'),
(57, 'Md Arif Khan', NULL, 'arif.khan42@gmail.com', '$2y$10$BZWVP3tfey0uVxKiGUE5F.qKNdNIvoEHatN9j2EN9DyCzPRkSsZRy', 'donor', 1479932, 2, 8, '1997-01-15', '29-01-2020', 1, '2023-01-15 20:28:51'),
(58, 'Keya Ahmed Ora', NULL, 'arkeya.oran2@gmail.com', '$2y$10$BZWVP3tfey0uVxKiGUE5F.qKNdNIvoEHatN9j2EN9DyCzPRkSsZRy', 'donor', 1479932, 2, 7, '1997-01-15', '29-01-2020', 1, '2023-01-15 20:28:51'),
(59, 'Shahbaz Bin Yamini', NULL, 'shahbaz.binr3@gmail.com', '$2y$10$BZWVP3tfey0uVxKiGUE5F.qKNdNIvoEHatN9j2EN9DyCzPRkSsZRy', 'donor', 1479932, 2, 6, '1997-01-15', '29-01-2020', 1, '2023-01-15 20:28:51'),
(60, 'Mizanur Rahaman Mizan', NULL, 'aminz33@gmail.com', '$2y$10$BZWVP3tfey0uVxKiGUE5F.qKNdNIvoEHatN9j2EN9DyCzPRkSsZRy', 'donor', 1479932, 2, 5, '1997-01-15', '29-01-2020', 1, '2023-01-15 20:28:51'),
(61, 'MD. Jahid Islam', NULL, 'ah.rasel@gmail.com', '$2y$10$BZWVP3tfey0uVxKiGUE5F.qKNdNIvoEHatN9j2EN9DyCzPRkSsZRy', 'donor', 1623547800, 3, 4, '1997-01-15', '2020-01-29', 0, '2023-01-15 20:28:51'),
(62, 'Emd Uddin', NULL, 'amd.uddin@gmail.com', '$2y$10$BZWVP3tfey0uVxKiGUE5F.qKNdNIvoEHatN9j2EN9DyCzPRkSsZRy', 'donor', 1479932, 2, 3, '1997-01-15', '29-01-2020', 1, '2023-01-15 20:28:51'),
(63, 'Golam Rahman Sagor', NULL, 'golam.sagor@gmail.com', '$2y$10$BZWVP3tfey0uVxKiGUE5F.qKNdNIvoEHatN9j2EN9DyCzPRkSsZRy', 'donor', 1479932, 2, 2, '1997-01-15', '29-01-2020', 1, '2023-01-15 20:28:51'),
(64, 'Md. Abul Kalam', NULL, 'abul.kalam@gmail.com', '$2y$10$BZWVP3tfey0uVxKiGUE5F.qKNdNIvoEHatN9j2EN9DyCzPRkSsZRy', 'donor', 1479932, 2, 1, '1997-01-15', '29-01-2020', 1, '2023-01-15 20:28:51'),
(65, 'Arnob Mallick', NULL, 'arnob@gmail.com', '$2y$10$BZWVP3tfey0uVxKiGUE5F.qKNdNIvoEHatN9j2EN9DyCzPRkSsZRy', 'donor', 1479932, 2, 1, '1997-01-15', '29-01-2020', 1, '2023-01-15 20:28:51'),
(66, 'Tasfia Ahmed', NULL, 'tasfia.b@gmail.com', '$2y$10$BZWVP3tfey0uVxKiGUE5F.qKNdNIvoEHatN9j2EN9DyCzPRkSsZRy', 'donor', 1479932, 2, 2, '1997-01-15', '29-01-2020', 1, '2023-01-15 20:28:51'),
(67, 'Aishi Mondal', NULL, 'aishi.mondal@gmail.com', '$2y$10$BZWVP3tfey0uVxKiGUE5F.qKNdNIvoEHatN9j2EN9DyCzPRkSsZRy', 'donor', 1479932, 2, 3, '1997-01-15', '2023-01-01', 1, '2023-01-15 20:28:51'),
(68, 'Kazi Nayeem Hossain', NULL, 'arzakinayem@gmail.com', '$2y$10$BZWVP3tfey0uVxKiGUE5F.qKNdNIvoEHatN9j2EN9DyCzPRkSsZRy', 'donor', 1479932, 2, 4, '1997-01-15', '29-01-2020', 1, '2023-01-15 20:28:51'),
(70, 'Mumtahina Faguni', NULL, 'amun.falguni32@gmail.com', '$2y$10$BZWVP3tfey0uVxKiGUE5F.qKNdNIvoEHatN9j2EN9DyCzPRkSsZRy', 'donor', 1479932, 2, 6, '1997-01-15', '29-01-2020', 1, '2023-01-15 20:28:51'),
(71, 'Pantho Bihosh', NULL, 'panth.bisho42b@gmail.com', '$2y$10$BZWVP3tfey0uVxKiGUE5F.qKNdNIvoEHatN9j2EN9DyCzPRkSsZRy', 'donor', 1479932, 2, 7, '1997-01-15', '29-01-2020', 1, '2023-01-15 20:28:51'),
(72, 'Azizul Haque', NULL, 'aziziha121@gmail.com', '$2y$10$BZWVP3tfey0uVxKiGUE5F.qKNdNIvoEHatN9j2EN9DyCzPRkSsZRy', 'donor', 1479932, 2, 8, '1997-01-15', '29-01-2020', 1, '2023-01-15 20:28:51'),
(73, 'Md Arif Khan', NULL, 'arif.khan42@gmail.com', '$2y$10$BZWVP3tfey0uVxKiGUE5F.qKNdNIvoEHatN9j2EN9DyCzPRkSsZRy', 'donor', 1479932, 2, 8, '1997-01-15', '29-01-2020', 1, '2023-01-15 20:28:51'),
(74, 'Keya Ahmed Ora', NULL, 'arkeya.oran2@gmail.com', '$2y$10$BZWVP3tfey0uVxKiGUE5F.qKNdNIvoEHatN9j2EN9DyCzPRkSsZRy', 'donor', 1479932, 2, 7, '1997-01-15', '29-01-2020', 1, '2023-01-15 20:28:51'),
(75, 'Shahbaz Bin Yamini', NULL, 'shahbaz.binr3@gmail.com', '$2y$10$BZWVP3tfey0uVxKiGUE5F.qKNdNIvoEHatN9j2EN9DyCzPRkSsZRy', 'donor', 1479932, 2, 6, '1997-01-15', '29-01-2020', 1, '2023-01-15 20:28:51'),
(76, 'Mizanur Rahaman Mizan', NULL, 'aminz33@gmail.com', '$2y$10$BZWVP3tfey0uVxKiGUE5F.qKNdNIvoEHatN9j2EN9DyCzPRkSsZRy', 'donor', 1479932, 2, 5, '1997-01-15', '29-01-2020', 1, '2023-01-15 20:28:51'),
(78, 'Emd Uddin', NULL, 'amd.uddin@gmail.com', '$2y$10$BZWVP3tfey0uVxKiGUE5F.qKNdNIvoEHatN9j2EN9DyCzPRkSsZRy', 'donor', 1479932, 2, 3, '1997-01-15', '29-01-2020', 1, '2023-01-15 20:28:51'),
(80, 'Md. Abul Kalam', NULL, 'abul.kalam@gmail.com', '$2y$10$BZWVP3tfey0uVxKiGUE5F.qKNdNIvoEHatN9j2EN9DyCzPRkSsZRy', 'donor', 1479932, 2, 1, '1997-01-15', '29-01-2020', 1, '2023-01-15 20:28:51'),
(81, 'Arnob Mallick', NULL, 'arnob@gmail.com', '$2y$10$BZWVP3tfey0uVxKiGUE5F.qKNdNIvoEHatN9j2EN9DyCzPRkSsZRy', 'donor', 1479932, 2, 1, '1997-01-15', '29-01-2020', 1, '2023-01-15 20:28:51'),
(82, 'Tasfia Ahmed', NULL, 'tasfia.b@gmail.com', '$2y$10$BZWVP3tfey0uVxKiGUE5F.qKNdNIvoEHatN9j2EN9DyCzPRkSsZRy', 'donor', 1479932, 2, 2, '1997-01-15', '29-01-2020', 1, '2023-01-15 20:28:51'),
(83, 'Aishi Mondal', NULL, 'aishi.mondal@gmail.com', '$2y$10$BZWVP3tfey0uVxKiGUE5F.qKNdNIvoEHatN9j2EN9DyCzPRkSsZRy', 'donor', 1479932, 2, 3, '1997-01-15', '29-01-2020', 1, '2023-01-15 20:28:51'),
(84, 'Kazi Nayeem Hossain', NULL, 'arzakinayem@gmail.com', '$2y$10$BZWVP3tfey0uVxKiGUE5F.qKNdNIvoEHatN9j2EN9DyCzPRkSsZRy', 'donor', 1479932, 2, 4, '1997-01-15', '29-01-2020', 1, '2023-01-15 20:28:51'),
(86, 'Mumtahina Faguni', NULL, 'amun.falguni32@gmail.com', '$2y$10$BZWVP3tfey0uVxKiGUE5F.qKNdNIvoEHatN9j2EN9DyCzPRkSsZRy', 'donor', 1479932, 2, 6, '1997-01-15', '29-01-2020', 1, '2023-01-15 20:28:51'),
(87, 'Pantho Bihosh', NULL, 'panth.bisho42b@gmail.com', '$2y$10$BZWVP3tfey0uVxKiGUE5F.qKNdNIvoEHatN9j2EN9DyCzPRkSsZRy', 'donor', 1479932, 2, 7, '1997-01-15', '29-01-2020', 1, '2023-01-15 20:28:51'),
(88, 'Azizul Haque', NULL, 'aziziha121@gmail.com', '$2y$10$BZWVP3tfey0uVxKiGUE5F.qKNdNIvoEHatN9j2EN9DyCzPRkSsZRy', 'donor', 1479932, 2, 8, '1997-01-15', '29-01-2020', 1, '2023-01-15 20:28:51'),
(89, 'Md Arif Khan', NULL, 'arif.khan42@gmail.com', '$2y$10$BZWVP3tfey0uVxKiGUE5F.qKNdNIvoEHatN9j2EN9DyCzPRkSsZRy', 'donor', 1479932, 2, 8, '1997-01-15', '29-01-2020', 1, '2023-01-15 20:28:51'),
(90, 'Keya Ahmed Ora', NULL, 'arkeya.oran2@gmail.com', '$2y$10$BZWVP3tfey0uVxKiGUE5F.qKNdNIvoEHatN9j2EN9DyCzPRkSsZRy', 'donor', 1479932, 2, 7, '1997-01-15', '29-01-2020', 1, '2023-01-15 20:28:51'),
(91, 'Shahbaz Bin Yamini', NULL, 'shahbaz.binr3@gmail.com', '$2y$10$BZWVP3tfey0uVxKiGUE5F.qKNdNIvoEHatN9j2EN9DyCzPRkSsZRy', 'donor', 1479932, 2, 6, '1997-01-15', '29-01-2020', 1, '2023-01-15 20:28:51'),
(92, 'Mizanur Rahaman Mizan', NULL, 'aminz33@gmail.com', '$2y$10$BZWVP3tfey0uVxKiGUE5F.qKNdNIvoEHatN9j2EN9DyCzPRkSsZRy', 'donor', 1479932, 2, 5, '1997-01-15', '29-01-2020', 1, '2023-01-15 20:28:51'),
(94, 'Emd Uddin', NULL, 'amd.uddin@gmail.com', '$2y$10$BZWVP3tfey0uVxKiGUE5F.qKNdNIvoEHatN9j2EN9DyCzPRkSsZRy', 'donor', 1479932, 2, 3, '1997-01-15', '29-01-2020', 1, '2023-01-15 20:28:51'),
(95, 'Golam Rahman Sagor', NULL, 'golam.sagor@gmail.com', '$2y$10$BZWVP3tfey0uVxKiGUE5F.qKNdNIvoEHatN9j2EN9DyCzPRkSsZRy', 'donor', 1479932, 2, 2, '1997-01-15', '29-01-2020', 1, '2023-01-15 20:28:51'),
(96, 'Md. Abul Kalam', NULL, 'abul.kalam@gmail.com', '$2y$10$BZWVP3tfey0uVxKiGUE5F.qKNdNIvoEHatN9j2EN9DyCzPRkSsZRy', 'donor', 1479932, 2, 1, '1997-01-15', '29-01-2020', 1, '2023-01-15 20:28:51'),
(97, 'Arnob Mallick', NULL, 'arnob@gmail.com', '$2y$10$BZWVP3tfey0uVxKiGUE5F.qKNdNIvoEHatN9j2EN9DyCzPRkSsZRy', 'donor', 1479932, 2, 1, '1997-01-15', '29-01-2020', 1, '2023-01-15 20:28:51'),
(98, 'Tasfia Ahmed', NULL, 'tasfia.b@gmail.com', '$2y$10$BZWVP3tfey0uVxKiGUE5F.qKNdNIvoEHatN9j2EN9DyCzPRkSsZRy', 'donor', 1479932, 2, 2, '1997-01-15', '29-01-2020', 1, '2023-01-15 20:28:51'),
(99, 'Aishi Mondal', NULL, 'aishi.mondal@gmail.com', '$2y$10$BZWVP3tfey0uVxKiGUE5F.qKNdNIvoEHatN9j2EN9DyCzPRkSsZRy', 'donor', 1479932, 2, 3, '1997-01-15', '29-01-2020', 1, '2023-01-15 20:28:51'),
(100, 'Kazi Nayeem Hossain', NULL, 'arzakinayem@gmail.com', '$2y$10$BZWVP3tfey0uVxKiGUE5F.qKNdNIvoEHatN9j2EN9DyCzPRkSsZRy', 'donor', 1479932, 2, 4, '1997-01-15', '29-01-2020', 1, '2023-01-15 20:28:51'),
(102, 'Mumtahina Faguni', NULL, 'amun.falguni32@gmail.com', '$2y$10$BZWVP3tfey0uVxKiGUE5F.qKNdNIvoEHatN9j2EN9DyCzPRkSsZRy', 'donor', 1479932, 2, 6, '1997-01-15', '29-01-2020', 1, '2023-01-15 20:28:51'),
(103, 'Pantho Bihosh', NULL, 'panth.bisho42b@gmail.com', '$2y$10$BZWVP3tfey0uVxKiGUE5F.qKNdNIvoEHatN9j2EN9DyCzPRkSsZRy', 'donor', 1479932, 2, 7, '1997-01-15', '29-01-2020', 1, '2023-01-15 20:28:51'),
(104, 'Azizul Haque', NULL, 'aziziha121@gmail.com', '$2y$10$BZWVP3tfey0uVxKiGUE5F.qKNdNIvoEHatN9j2EN9DyCzPRkSsZRy', 'donor', 1479932, 2, 8, '1997-01-15', '29-01-2020', 1, '2023-01-15 20:28:51'),
(105, 'Md Arif Khan', NULL, 'arif.khan42@gmail.com', '$2y$10$BZWVP3tfey0uVxKiGUE5F.qKNdNIvoEHatN9j2EN9DyCzPRkSsZRy', 'donor', 1479932, 2, 8, '1997-01-15', '29-01-2020', 1, '2023-01-15 20:28:51'),
(106, 'Keya Ahmed Ora', NULL, 'arkeya.oran2@gmail.com', '$2y$10$BZWVP3tfey0uVxKiGUE5F.qKNdNIvoEHatN9j2EN9DyCzPRkSsZRy', 'donor', 1479932, 2, 7, '1997-01-15', '29-01-2020', 1, '2023-01-15 20:28:51'),
(107, 'Shahbaz Bin Yamini', NULL, 'shahbaz.binr3@gmail.com', '$2y$10$BZWVP3tfey0uVxKiGUE5F.qKNdNIvoEHatN9j2EN9DyCzPRkSsZRy', 'donor', 1479932, 2, 6, '1997-01-15', '29-01-2020', 1, '2023-01-15 20:28:51'),
(108, 'Mizanur Rahaman Mizan', NULL, 'aminz33@gmail.com', '$2y$10$BZWVP3tfey0uVxKiGUE5F.qKNdNIvoEHatN9j2EN9DyCzPRkSsZRy', 'donor', 1479932, 2, 5, '1997-01-15', '29-01-2020', 1, '2023-01-15 20:28:51'),
(110, 'Emd Uddin', NULL, 'amd.uddin@gmail.com', '$2y$10$BZWVP3tfey0uVxKiGUE5F.qKNdNIvoEHatN9j2EN9DyCzPRkSsZRy', 'donor', 1479932, 2, 3, '1997-01-15', '29-01-2020', 1, '2023-01-15 20:28:51'),
(112, 'Md. Abul Kalam', NULL, 'abul.kalam@gmail.com', '$2y$10$BZWVP3tfey0uVxKiGUE5F.qKNdNIvoEHatN9j2EN9DyCzPRkSsZRy', 'donor', 1479932, 2, 1, '1997-01-15', '29-01-2020', 1, '2023-01-15 20:28:51'),
(121, 'MD. Jahid Islam', NULL, 'fxcjahid3@gmail.com', '$2y$10$lxnp5hExtXSu9WqUsPGVK.Q.SHSvjagEfpvlN2N4M4Z0L3aSToa0S', 'admin', 1623547800, 1, 6, '2000-11-24', '2023-01-01', 1, '2023-01-20 19:12:16'),
(122, 'MD arif bapari', NULL, 'Fxcjahid3@gmail.com', '$2y$10$PfXuaixfaDOyJeFU0wNVluGy5aSScQzVu/iBbgLlHpqI1kXIAftNO', 'donor', 1623547800, 1, 1, '2000-11-01', '2023-02-22', 1, '2023-02-02 19:32:47'),
(123, 'Admin', NULL, 'admin@test.com', '$2y$10$Si1jPxsuSXrBWOIpCUYoeO0O5SkZI3/wO3zYt9mo3.xCGlOmDwCLi', 'admin', 1623547800, 1, 1, '08-02-2000', '08-02-2023', 1, '2023-02-02 20:15:26');

-- --------------------------------------------------------

--
-- Table structure for table `users_info`
--

CREATE TABLE `users_info` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `description` varchar(3000) DEFAULT NULL,
  `city` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  `country` int(11) NOT NULL,
  `religion` varchar(100) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_info`
--

INSERT INTO `users_info` (`id`, `user_id`, `description`, `city`, `state`, `country`, `religion`, `address`) VALUES
(9, 121, 'How are you?  ', 10, 11, 1, NULL, 'Road-8,Sect'),
(12, 122, 'Hello, My name is arif bapari', 10, 11, 1, NULL, ''),
(13, 123, 'noting..', 10, 11, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_request`
--

CREATE TABLE `users_request` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `message` varchar(2000) NOT NULL,
  `received` int(11) NOT NULL,
  `create_at` varchar(100) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_request`
--

INSERT INTO `users_request` (`id`, `user_id`, `name`, `phone`, `message`, `received`, `create_at`) VALUES
(3, 121, 'MD. Jahid Islam', 1623547800, 'need faster', 121, '2023-01-20 21:19:19'),
(4, 63, 'Golam Rahman Sagor', 1623547800, 'Golam Rahman Sagor', 121, '2023-01-20 21:21:30'),
(5, 121, 'MD. Jahid Islam', 1623547800, 'ddddd', 121, '2023-01-20 21:42:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `camp`
--
ALTER TABLE `camp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `state` (`state`),
  ADD KEY `city` (`city`,`country`),
  ADD KEY `country_relation` (`country`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`),
  ADD KEY `city_state_relation` (`state`),
  ADD KEY `city_country_relation` (`country`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`),
  ADD KEY `country_state_relation` (`state`),
  ADD KEY `country_city_relation` (`city`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `gallary`
--
ALTER TABLE `gallary`
  ADD PRIMARY KEY (`pic_id`),
  ADD KEY `camp_image` (`camp_id`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `city` (`city`),
  ADD KEY `state` (`State`),
  ADD KEY `country` (`country`),
  ADD KEY `group` (`group`),
  ADD KEY `gender` (`gender`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `country` (`country`),
  ADD KEY `city` (`city`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gender_relationship` (`gender`),
  ADD KEY `blood_relationship` (`blood`);

--
-- Indexes for table `users_info`
--
ALTER TABLE `users_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD KEY `city_country_relation` (`country`),
  ADD KEY `city_forigen_relation` (`city`),
  ADD KEY `state_forigen_relation` (`state`);

--
-- Indexes for table `users_request`
--
ALTER TABLE `users_request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_forigion_relation` (`user_id`),
  ADD KEY `received_forigion_relation` (`received`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `camp`
--
ALTER TABLE `camp`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `gallary`
--
ALTER TABLE `gallary`
  MODIFY `pic_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=222;

--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `users_info`
--
ALTER TABLE `users_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users_request`
--
ALTER TABLE `users_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `camp`
--
ALTER TABLE `camp`
  ADD CONSTRAINT `city_relation` FOREIGN KEY (`city`) REFERENCES `city` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `country_relation` FOREIGN KEY (`country`) REFERENCES `country` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `state_relation` FOREIGN KEY (`state`) REFERENCES `state` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `donation`
--
ALTER TABLE `donation`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gallary`
--
ALTER TABLE `gallary`
  ADD CONSTRAINT `camp_image` FOREIGN KEY (`camp_id`) REFERENCES `camp` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `city` FOREIGN KEY (`city`) REFERENCES `city` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `country` FOREIGN KEY (`country`) REFERENCES `country` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `gender` FOREIGN KEY (`gender`) REFERENCES `gender` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `group` FOREIGN KEY (`group`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `state` FOREIGN KEY (`State`) REFERENCES `state` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `blood_relationship` FOREIGN KEY (`blood`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `gender_relationship` FOREIGN KEY (`gender`) REFERENCES `gender` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users_info`
--
ALTER TABLE `users_info`
  ADD CONSTRAINT `city_country_relation` FOREIGN KEY (`country`) REFERENCES `country` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `city_forigen_relation` FOREIGN KEY (`city`) REFERENCES `city` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `state_forigen_relation` FOREIGN KEY (`state`) REFERENCES `state` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users_request`
--
ALTER TABLE `users_request`
  ADD CONSTRAINT `received_forigion_relation` FOREIGN KEY (`received`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_forigion_relation` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
