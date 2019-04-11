-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 11, 2019 at 10:13 AM
-- Server version: 5.7.25
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `gReeneye`
--

-- --------------------------------------------------------

--
-- Table structure for table `gReeneye_dOctor`
--

CREATE TABLE `gReeneye_dOctor` (
  `gReeneye_diD` int(11) NOT NULL COMMENT 'Doctor''s ID',
  `gReeeneye_dnamE` varchar(255) NOT NULL COMMENT 'Doctor''s Name',
  `gReeneye_dexP` int(1) NOT NULL DEFAULT '1' COMMENT 'Doctor''s Experience',
  `gReeneye_dspl` varchar(255) NOT NULL COMMENT 'Doctor''s Speciality',
  `gReeneye_dratE` int(1) NOT NULL DEFAULT '1' COMMENT 'Doctor''s Rating',
  `gReeneye_dpiC` text COMMENT 'Doctor''s Pic',
  `gReeneye_dcrT` int(11) NOT NULL COMMENT 'Doctor''s Creator ''s ID',
  `gReeneye_dcrtD` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Doctor''s Create Time'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Doctor''s Table';

-- --------------------------------------------------------

--
-- Table structure for table `gReeneye_lOg`
--

CREATE TABLE `gReeneye_lOg` (
  `gReeneye_liD` int(11) NOT NULL COMMENT 'Log''s ID',
  `gReeneye_ltypE` text NOT NULL COMMENT 'Log''s Type',
  `gReeneye_lkinD` text COMMENT 'Log''s Kind',
  `gReeneye_lstS` int(1) NOT NULL COMMENT 'Log''s Status',
  `gReeneye_lmsG` longtext NOT NULL COMMENT 'Log''s Message',
  `gReeneye_lloC` text NOT NULL COMMENT 'Log''s Location',
  `gReeneye_lusR` int(11) NOT NULL COMMENT 'Log''s User',
  `gReeneye_ldatE` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Log''s Time'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='User''s Logs';

-- --------------------------------------------------------

--
-- Table structure for table `gReeneye_uSer`
--

CREATE TABLE `gReeneye_uSer` (
  `gReeneye_uiD` int(11) NOT NULL COMMENT 'Admin ID',
  `gReeneye_unamE` varchar(255) NOT NULL COMMENT 'Admin Name',
  `gReeneye_upasS` varchar(255) NOT NULL COMMENT 'Admin Password',
  `gReeneye_uriD` int(11) NOT NULL COMMENT 'Who Created ?',
  `gReeneye_ucdatE` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Admin''s Create Date',
  `gReeneye_ulogiN` longtext COMMENT 'Admin''s Login Time Details',
  `gReeneye_ulvL` int(1) NOT NULL DEFAULT '2' COMMENT 'Admin''s Level',
  `gReeneye_upiC` text COMMENT 'Admin Profile Pic'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Admin''s List';

--
-- Dumping data for table `gReeneye_uSer`
--

INSERT INTO `gReeneye_uSer` (`gReeneye_uiD`, `gReeneye_unamE`, `gReeneye_upasS`, `gReeneye_uriD`, `gReeneye_ucdatE`, `gReeneye_ulogiN`, `gReeneye_ulvL`, `gReeneye_upiC`) VALUES
(1, 'krishnaGujjjar', 'e83ffe3fe26bd38e08e6c31194067c9f88d762600d6e6c0a766945562aaa4aff', 1, '2019-03-22 15:04:54', NULL, 1, NULL),
(2, 'asifkhan', 'e83ffe3fe26bd38e08e6c31194067c9f88d762600d6e6c0a766945562aaa4aff', 1, '2019-04-02 22:22:12', NULL, 2, NULL),
(4, 'krishna', 'e83ffe3fe26bd38e08e6c31194067c9f88d762600d6e6c0a766945562aaa4aff', 1, '2019-04-08 11:31:53', NULL, 2, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gReeneye_dOctor`
--
ALTER TABLE `gReeneye_dOctor`
  ADD PRIMARY KEY (`gReeneye_diD`),
  ADD KEY `createID` (`gReeneye_dcrT`);

--
-- Indexes for table `gReeneye_lOg`
--
ALTER TABLE `gReeneye_lOg`
  ADD PRIMARY KEY (`gReeneye_liD`),
  ADD KEY `UserID` (`gReeneye_lusR`);

--
-- Indexes for table `gReeneye_uSer`
--
ALTER TABLE `gReeneye_uSer`
  ADD PRIMARY KEY (`gReeneye_uiD`),
  ADD KEY `rID` (`gReeneye_uriD`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gReeneye_dOctor`
--
ALTER TABLE `gReeneye_dOctor`
  MODIFY `gReeneye_diD` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Doctor''s ID';

--
-- AUTO_INCREMENT for table `gReeneye_lOg`
--
ALTER TABLE `gReeneye_lOg`
  MODIFY `gReeneye_liD` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Log''s ID';

--
-- AUTO_INCREMENT for table `gReeneye_uSer`
--
ALTER TABLE `gReeneye_uSer`
  MODIFY `gReeneye_uiD` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Admin ID', AUTO_INCREMENT=5;
