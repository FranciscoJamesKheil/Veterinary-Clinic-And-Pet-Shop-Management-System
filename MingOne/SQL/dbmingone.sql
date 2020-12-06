-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2020 at 12:14 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmingone`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_ID` int(3) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_ID`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `clinic`
--

CREATE TABLE `clinic` (
  `tips_ID` int(20) NOT NULL,
  `tips_post` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clinic`
--

INSERT INTO `clinic` (`tips_ID`, `tips_post`) VALUES
(6, 'Mingone tips'),
(7, 'You will need to take a bath your pet everyday');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `contact_no` int(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`first_name`, `last_name`, `contact_no`, `email`, `username`, `password`) VALUES
('James', 'Bond', 210904, 'bond@gmail.com', 'bond', '0000'),
('Edmond', 'Du', 98858912, 'ed@gmail.com', 'ed', 'ed123'),
('Jade', 'Tub', 8858921, 'jade@gmail.com', 'jade123', 'jade321'),
('James', 'Doe', 9094810, 'james@gmail.com', 'James', '7777'),
('John', 'Doe', 999588929, 'john@gmail.com', 'john', 'doe321'),
('Mary', 'Moe', 99419950, 'mary@gmail.com', 'mary', 'moe321');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `post_ID` int(10) NOT NULL,
  `post_description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`post_ID`, `post_description`) VALUES
(1, 'Veterinary Clinic and Pet shop Management System is a shop \r\nthat offer different pets, and it’s a retail business \r\nsells animals to public. Online pet shop is a reliable \r\nsource of pet, their needs such dog foods, toys and other \r\nanimal stuff, aside from that medical assistance is also \r\nprovided in our online veterinary clinic and pet shop.'),
(2, 'According to Emory Crider [2009] The idea of saving \r\ntime from shopping is a good one. Because many \r\nspecialized pet foods and pet goods come from specialty \r\nshops, doing shopping for your pets means an extra \r\ntrip. The alternative is purchasing regular food from \r\nyour grocery store and the commercial food available \r\nmight not meet the needs of your pet adequately. The \r\nconvenience of ordering pet goods online is increasing \r\nfor this reason. \r\nAnother article stated that If they are buying at an \r\nonline pet shop, as previously mentioned online \r\nshoppers seeking to obtain pet supplies crazy sales do \r\nnot have to leave their residence. Buying pet supplies \r\nonline is all about comfort. Owners can get their whole \r\nlot necessary pet supplies all within a few minutes. \r\nThis choice is really convenient for owners or families \r\nwho could not have access to enough time to regularly \r\nvisit a pet store. Jackson jones [2016]\r\n'),
(3, 'According to Emory Crider [2009] The idea of saving time \r\nfrom shopping is a good one. Because many specialized pet \r\nfoods and pet goods come from specialty shops, doing \r\nshopping for your pets means an extra trip. The \r\nalternative is purchasing regular food from your grocery \r\nstore and the commercial food available might not meet the \r\nneeds of your pet adequately.'),
(4, 'Another article stated that If they are buying at an \r\nonline pet shop, as previously mentioned online shoppers \r\nseeking to obtain pet supplies crazy sales do not have to \r\nleave their residence. Buying pet supplies online is all \r\nabout comfort. Owners can get their whole lot necessary \r\npet supplies all within a few minutes. This choice is \r\nreally convenient for owners or families who could not \r\nhave access to enough time to regularly visit a pet store. \r\nJackson jones [2016]');

-- --------------------------------------------------------

--
-- Table structure for table `pet`
--

CREATE TABLE `pet` (
  `pet_ID` int(100) NOT NULL,
  `pet_name` varchar(20) NOT NULL,
  `pet_description` varchar(100) NOT NULL,
  `pet_type` varchar(20) NOT NULL,
  `pet_price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pet`
--

INSERT INTO `pet` (`pet_ID`, `pet_name`, `pet_description`, `pet_type`, `pet_price`) VALUES
(1, 'Razor', 'Bulldog', 'Dog', 299),
(2, 'Charlie', 'Bulldog', 'Dog', 200),
(3, 'Max', 'Afador', 'Dog', 300),
(4, 'Buddy', 'Dachsador', 'Dog', 450),
(5, 'Teddy', 'Persian', 'Cat', 240),
(6, 'Toby', 'Japanese Bobtail', 'Cat', 345),
(7, 'Kitty', 'Norwegian Forest', 'Cat', 230);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_ID` int(100) NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `product_desc` varchar(100) NOT NULL,
  `product_type` varchar(20) NOT NULL,
  `product_price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_ID`, `product_name`, `product_desc`, `product_type`, `product_price`) VALUES
(1, 'Cage', 'MingOne', 'Cat', 20),
(2, 'Prod 2', 'Prod 2 Description', 'Cat', 22),
(3, 'Grooming Supplies', 'Grooming Supplies Description', 'Dog', 50),
(4, 'Food and Water Bowls', 'Food and Water Bowls Description', 'Dog', 320),
(5, 'Exercise Pen', 'Exercise Pen Description', 'Dog', 230),
(6, 'Bedding', 'Bedding description', 'Cat', 200),
(7, 'Cat Genie', 'Self-Washing Self-Flushing Cat Box', 'Cat', 300);

-- --------------------------------------------------------

--
-- Table structure for table `veterinarian`
--

CREATE TABLE `veterinarian` (
  `vet_ID` int(20) NOT NULL,
  `vet_fname` varchar(20) NOT NULL,
  `vet_lname` varchar(20) NOT NULL,
  `vet_contact` int(20) NOT NULL,
  `vet_email` varchar(25) NOT NULL,
  `vet_uname` varchar(20) NOT NULL,
  `vet_pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `veterinarian`
--

INSERT INTO `veterinarian` (`vet_ID`, `vet_fname`, `vet_lname`, `vet_contact`, `vet_email`, `vet_uname`, `vet_pass`) VALUES
(1, 'john', 'doe', 120380001, 'john@gmail.com', 'drjohn', '0909');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_ID`);

--
-- Indexes for table `clinic`
--
ALTER TABLE `clinic`
  ADD PRIMARY KEY (`tips_ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`post_ID`);

--
-- Indexes for table `pet`
--
ALTER TABLE `pet`
  ADD PRIMARY KEY (`pet_ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_ID`);

--
-- Indexes for table `veterinarian`
--
ALTER TABLE `veterinarian`
  ADD PRIMARY KEY (`vet_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clinic`
--
ALTER TABLE `clinic`
  MODIFY `tips_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `post_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pet`
--
ALTER TABLE `pet`
  MODIFY `pet_ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `veterinarian`
--
ALTER TABLE `veterinarian`
  MODIFY `vet_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
