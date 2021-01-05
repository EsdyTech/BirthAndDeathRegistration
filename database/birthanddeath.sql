-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2019 at 08:10 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `birthanddeath`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `adminId` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` varchar(50) NOT NULL,
  `RegCentre` bigint(10) NOT NULL,
  `dateReg` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`adminId`, `email`, `username`, `password`, `role`, `RegCentre`, `dateReg`) VALUES
(1, 'AhmedSodiq7@gmail.com', 'Ahmed', 'admin', 'Super Administrator', 1, '0000-00-00'),
(2, 'Akintunde@yahoo.com', 'Akintunde', 'password', 'Administrator', 1, '2019-05-23'),
(3, 'enock@gmail.com', 'Enock', 'password', 'Administrator', 2, '2019-05-23'),
(4, 'kemiAdetiba@gmail.com', 'ahmed', 'password', 'Administrator', 3, '2019-05-23');

-- --------------------------------------------------------

--
-- Table structure for table `tblbirth`
--

CREATE TABLE `tblbirth` (
  `birthId` int(11) NOT NULL,
  `certNo` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `fathersName` varchar(255) NOT NULL,
  `mothersName` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `genotype` varchar(10) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `birthPlace` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `lga` varchar(255) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `yearOfBirth` date NOT NULL,
  `PlaceOfIssue` varchar(255) NOT NULL,
  `regCentre` varchar(255) NOT NULL,
  `dateReg` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbirth`
--

INSERT INTO `tblbirth` (`birthId`, `certNo`, `firstName`, `lastName`, `fathersName`, `mothersName`, `gender`, `genotype`, `weight`, `birthPlace`, `state`, `lga`, `dateOfBirth`, `yearOfBirth`, `PlaceOfIssue`, `regCentre`, `dateReg`) VALUES
(4, '100001', 'Samuel', 'Olanshile', 'olanshile Adekunle oluremi', 'Olanshile Adenike Oluranti', 'Male', 'AA', '23', 'Mushin', 'Ekiti', 'Ekiti-South', '2019-05-06', '2019-05-01', 'ibereko', 'ibereko', '2019-05-25'),
(5, '100002', 'kunle', 'kayode', 'femi kayode', 'bose kayode', 'Female', 'SS', '23', 'sokoto', 'Oyo', 'ibadan south', '2019-05-28', '2019-05-03', 'ibereko', 'ibereko', '2019-05-25');

-- --------------------------------------------------------

--
-- Table structure for table `tblcentre`
--

CREATE TABLE `tblcentre` (
  `centreId` int(11) NOT NULL,
  `centreName` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `lga` varchar(255) NOT NULL,
  `dateReg` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcentre`
--

INSERT INTO `tblcentre` (`centreId`, `centreName`, `state`, `lga`, `dateReg`) VALUES
(1, 'ibereko', 'Lagos', '', '2019-05-21'),
(2, 'apapa', 'lagos', 'apapa', '2019-05-21'),
(3, 'test', 'Bayelsa', 'Bayelsa-North', '2019-05-21'),
(4, 'Iyana-ipaja', 'Lagos', 'Mushin', '2019-05-24');

-- --------------------------------------------------------

--
-- Table structure for table `tblcertno`
--

CREATE TABLE `tblcertno` (
  `Id` int(10) NOT NULL,
  `certId` varchar(20) NOT NULL,
  `lastCertId` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcertno`
--

INSERT INTO `tblcertno` (`Id`, `certId`, `lastCertId`) VALUES
(1, '100000', '100002'),
(2, '200000', '200001');

-- --------------------------------------------------------

--
-- Table structure for table `tbldeath`
--

CREATE TABLE `tbldeath` (
  `deathId` int(11) NOT NULL,
  `certNo` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `state` varchar(255) NOT NULL,
  `lga` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `ageAtDeath` int(10) NOT NULL,
  `placeOfDeath` varchar(255) NOT NULL,
  `dateOfDeath` date NOT NULL,
  `PlaceOfIssue` varchar(255) NOT NULL,
  `regCentre` varchar(255) NOT NULL,
  `dateReg` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbldeath`
--

INSERT INTO `tbldeath` (`deathId`, `certNo`, `firstName`, `lastName`, `gender`, `state`, `lga`, `address`, `ageAtDeath`, `placeOfDeath`, `dateOfDeath`, `PlaceOfIssue`, `regCentre`, `dateReg`) VALUES
(4, '200001', 'kunle', 'jfkjsdj', 'Male', 'Akwa Ibom', 'Mushin', 'dasdas', 90, 'dasdas', '2019-05-08', 'ibereko', 'ibereko', '2019-05-25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `tblbirth`
--
ALTER TABLE `tblbirth`
  ADD PRIMARY KEY (`birthId`);

--
-- Indexes for table `tblcentre`
--
ALTER TABLE `tblcentre`
  ADD PRIMARY KEY (`centreId`);

--
-- Indexes for table `tblcertno`
--
ALTER TABLE `tblcertno`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbldeath`
--
ALTER TABLE `tbldeath`
  ADD PRIMARY KEY (`deathId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `adminId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tblbirth`
--
ALTER TABLE `tblbirth`
  MODIFY `birthId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tblcentre`
--
ALTER TABLE `tblcentre`
  MODIFY `centreId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tblcertno`
--
ALTER TABLE `tblcertno`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbldeath`
--
ALTER TABLE `tbldeath`
  MODIFY `deathId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
