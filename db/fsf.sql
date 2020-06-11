-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2020 at 04:53 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fsf`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phonenumber` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `firstname`, `email`, `phonenumber`, `address`, `image`, `password`) VALUES
(1, 'Niloy', 'niloy@gmail.com', '1090', 'dhaka', 'niloy.jpg', '111'),
(5, 'Md Jehan', 'ewu.jehan@gmail.com', '01762350424', 'Banasree,Dhaka', 'IMG_20160204_192746.jpg', '123'),
(6, 'Md Masrafi Rayan', 'rayan@gmail.com', '01994699017', 'Mogbazar,Dhaka', 'rayan..jpg', '123');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `district` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `image` varchar(100) NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Md Nabil', 'nabil@gmail.com', 'test', 'hi jehan'),
(2, 'Md Nabil', 'nabil@gmail.com', 'test', 'hi jehan'),
(3, 'Niloy ', 'niloy@gmail.com', 'test', 'hi jehan and rayan'),
(4, 'Jehan', 'jehan@gmail.com', 'TEst1', 'salkhfsajfpoiahtpvt'),
(5, 'NABIL', 'nabil@gmail.com', 'TEST3', 'S;EHJIUSGFKJDHIUFD'),
(6, 'jehan', 'ewu.jehan@gmail.com', 'hi', 'hi i am');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `type` varchar(20) NOT NULL,
  `description` varchar(500) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phonenumber` varchar(15) NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `image`, `type`, `description`, `address`, `phonenumber`, `uid`) VALUES
(1, 'home1.jpg', 'Home', '3 bed, 3 bath', 'Banasree,Dhaka', '01762350424', 0),
(2, 'office.jpg', 'office', '2250 sqr/feet', 'Dhaka', '01762350424', 0),
(3, 'gradge.jpg', 'Garadge', '4 car, 2 bike space', 'Bashundhara R/A, Dhaka', '01994699017', 0),
(4, 'gradge.jpg', 'Home', '2250 sqr/feet', 'Bashundhara R/A, Dhaka', '01762350424', 0),
(6, 'home.jpg', 'House', '3 bed, 3 bath', 'Banasree,Dhaka', '01762350424', 0),
(7, 'office1.jpg', 'office', '2250 sqr/feet', 'Banasree,Dhaka', '01762350424', 0);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `phonenumber` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `firstname`, `phonenumber`, `email`, `password`, `address`, `image`) VALUES
(8, 'Md Jehan', '01762350424', 'jehan@gmail.com', '123', 'Dhaka', 0x494d475f32303136303230345f3139323734362e6a7067),
(10, 'Niloy Dey', '12345678', 'niloy@gmail.com', '123', 'Dhaka', 0x6e696c6f792e6a7067),
(11, 'Rayan', '01994699017', 'ewu.jehan@gmail.com', '123', 'Dhaka', 0x726179616e2e2e6a7067),
(15, 'Saikat Hossen', '12345678', 'saikat@gmail.com', '123', 'Dhaka', 0x746573742e77656270),
(16, '', '01767308405', '', '', 'Banasree,Dhaka', 0x686f6d65312e6a7067);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
