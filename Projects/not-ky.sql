-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2017 at 10:20 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `c43_not_ky`
--
CREATE DATABASE IF NOT EXISTS `c43_not_ky` DEFAULT CHARACTER SET utf8 COLLATE utf8_croatian_ci;
USE `c43_not_ky`;

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `account_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `confirmation_message`
--

CREATE TABLE `confirmation_message` (
  `message_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer_info`
--

CREATE TABLE `customer_info` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `address` int(11) NOT NULL,
  `date_of_birth` date NOT NULL,
  `email` int(11) NOT NULL,
  `telephone_num` int(11) NOT NULL,
  `fax_num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer_registration`
--

CREATE TABLE `customer_registration` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `daily_activities`
--

CREATE TABLE `daily_activities` (
  `activity_id` int(11) NOT NULL,
  `activity_name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `picnics`
--

CREATE TABLE `picnics` (
  `picnic_title` varchar(255) NOT NULL,
  `place` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `activities` int(11) NOT NULL,
  `food` int(11) NOT NULL,
  `departure_time` int(11) NOT NULL,
  `arrival_time` date NOT NULL,
  `return_time` int(11) NOT NULL,
  `transportation` int(11) NOT NULL,
  `capacity` int(11) NOT NULL,
  `num_of_people_book_picnic` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `picnic_lists`
--

CREATE TABLE `picnic_lists` (
  `picnic_reference_number` int(11) NOT NULL,
  `date` date NOT NULL,
  `place` int(11) NOT NULL,
  `description` int(11) NOT NULL,
  `price_per_person` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registration_form`
--

CREATE TABLE `registration_form` (
  `form_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` int(11) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `picnic_lists`
--
ALTER TABLE `picnic_lists`
  ADD PRIMARY KEY (`date`);
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
