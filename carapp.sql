-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2018 at 11:37 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `bodytype`
--

CREATE TABLE `bodytype` (
  `bodyType` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `brake`
--

CREATE TABLE `brake` (
  `brakeId` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `brakepad`
--

CREATE TABLE `brakepad` (
  `VIN` varchar(17) NOT NULL,
  `RPO` varchar(3) NOT NULL,
  `quantityindex` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brakepad`
--

INSERT INTO `brakepad` (`VIN`, `RPO`, `quantityindex`) VALUES
('0000000000000', 'J65', 4);

-- --------------------------------------------------------

--
-- Table structure for table `calipercarrier`
--

CREATE TABLE `calipercarrier` (
  `leftorright` varchar(5) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `vin` varchar(17) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `rpo` varchar(3) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `ID` int(10) UNSIGNED NOT NULL,
  `spindlebracketfitment` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `caliperfitment` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `minimumwheeldiameter` decimal(4,2) NOT NULL,
  `quantity` int(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `calipercarrier`
--

INSERT INTO `calipercarrier` (`leftorright`, `vin`, `rpo`, `ID`, `spindlebracketfitment`, `caliperfitment`, `minimumwheeldiameter`, `quantity`) VALUES
('left', '00000000000000000', 'J65', 1, 'fbody', 'fbody', '0.00', 0),
('right', '00000000000000000', 'J65', 2, 'fbody', 'fbody', '0.00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fitment`
--

CREATE TABLE `fitment` (
  `bodystyle` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `year` int(4) NOT NULL,
  `model` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fitment`
--

INSERT INTO `fitment` (`bodystyle`, `year`, `model`) VALUES
('fourthgenfbody', 1998, 'camaro'),
('fourthgenfbody', 1998, 'firebird'),
('fourthgenfbody', 1999, 'camaro'),
('fourthgenfbody', 1999, 'firebird'),
('fourthgenfbody', 2000, 'camaro'),
('fourthgenfbody', 2000, 'firebird'),
('fourthgenfbody', 2001, 'camaro'),
('fourthgenfbody', 2001, 'firebird'),
('fourthgenfbody', 2002, 'camaro'),
('fourthgenfbody', 2002, 'firebird'),
('fbodyplusc4c5c6', 1988, 'corvette'),
('fbodyplusc4c5c6', 1989, 'corvette'),
('fbodyplusc4c5c6', 1990, 'corvette'),
('fbodyplusc4c5c6', 1991, 'corvette'),
('fbodyplusc4c5c6', 1992, 'corvette'),
('fbodyplusc4c5c6', 1993, 'corvette'),
('fbodyplusc4c5c6', 1994, 'corvette'),
('fbodyplusc4c5c6', 1995, 'corvette'),
('fbodyplusc4c5c6', 1996, 'corvette'),
('fbodyplusc4c5c6', 1997, 'corvette'),
('fbodyplusc4c5c6', 1998, 'camaro'),
('fbodyplusc4c5c6', 1998, 'corvette'),
('fbodyplusc4c5c6', 1998, 'firebird'),
('fbodyplusc4c5c6', 1999, 'camaro'),
('fbodyplusc4c5c6', 1999, 'corvette'),
('fbodyplusc4c5c6', 1999, 'firebird'),
('fbodyplusc4c5c6', 2000, 'camaro'),
('fbodyplusc4c5c6', 2000, 'corvette'),
('fbodyplusc4c5c6', 2000, 'firebird'),
('fbodyplusc4c5c6', 2001, 'camaro'),
('fbodyplusc4c5c6', 2001, 'corvette'),
('fbodyplusc4c5c6', 2001, 'firebird'),
('fbodyplusc4c5c6', 2002, 'camaro'),
('fbodyplusc4c5c6', 2002, 'corvette'),
('fbodyplusc4c5c6', 2002, 'firebird'),
('fbodyplusc4c5c6', 2003, 'corvette'),
('fbodyplusc4c5c6', 2004, 'corvette'),
('fbodyplusc4c5c6', 2004, 'ctsv'),
('fbodyplusc4c5c6', 2005, 'corvette'),
('fbodyplusc4c5c6', 2005, 'ctsv'),
('fbodyplusc4c5c6', 2006, 'corvette'),
('fbodyplusc4c5c6', 2006, 'ctsv'),
('fbodyplusc4c5c6', 2007, 'corvette'),
('fbodyplusc4c5c6', 2007, 'ctsv'),
('fbodyplusc4c5c6', 2008, 'corvette'),
('fbodyplusc4c5c6', 2009, 'corvette'),
('fbodyplusc4c5c6', 2010, 'camaro'),
('fbodyplusc4c5c6', 2010, 'corvette'),
('fbodyplusc4c5c6', 2011, 'camaro'),
('fbodyplusc4c5c6', 2011, 'corvette'),
('fbodyplusc4c5c6', 2012, 'camaro'),
('fbodyplusc4c5c6', 2012, 'corvette'),
('fbodyplusc4c5c6', 2013, 'camaro'),
('fbodyplusc4c5c6', 2013, 'corvette'),
('fbodyplusc4c5c6', 2014, 'camaro'),
('fbodyplusc4c5c6', 2015, 'camaro'),
('fbodyplusc4c5c6', 2016, 'camaro'),
('fbodyplusc4c5c6', 2017, 'camaro'),
('fbodyplusc4c5c6', 2018, 'camaro'),
('fbodyplusc5c6', 1997, 'corvette'),
('fbodyplusc5c6', 1998, 'corvette'),
('fbodyplusc5c6', 1999, 'corvette'),
('fbodyplusc5c6', 2000, 'corvette'),
('fbodyplusc5c6', 2001, 'corvette'),
('fbodyplusc5c6', 2002, 'corvette'),
('fbodyplusc5c6', 1997, 'corvette'),
('fbodyplusc5c6', 2003, 'corvette'),
('fbodyplusc5c6', 2004, 'corvette'),
('fbodyplusc5c6', 2005, 'corvette'),
('fbodyplusc5c6', 2006, 'corvette'),
('fbodyplusc5c6', 2007, 'corvette'),
('fbodyplusc5c6', 2008, 'corvette'),
('fbodyplusc5c6', 2009, 'corvette'),
('fbodyplusc5c6', 2010, 'corvette'),
('fbodyplusc5c6', 2011, 'corvette'),
('fbodyplusc5c6', 2012, 'corvette'),
('fbodyplusc5c6', 2013, 'corvette'),
('fbodyplusc5c6', 1998, 'camaro'),
('fbodyplusc5c6', 1999, 'camaro'),
('fbodyplusc5c6', 2000, 'camaro'),
('fbodyplusc5c6', 2001, 'camaro'),
('fbodyplusc5c6', 2002, 'camaro'),
('fbodyplusc5c6', 1998, 'firebird'),
('fbodyplusc5c6', 1999, 'firebird'),
('fbodyplusc5c6', 2000, 'firebird'),
('fbodyplusc5c6', 2001, 'firebird'),
('fbodyplusc5c6', 2002, 'firebird'),
('thirdgenfbody', 1993, 'firebird'),
('thirdgenfbody', 1994, 'firebird'),
('thirdgenfbody', 1995, 'firebird'),
('thirdgenfbody', 1996, 'firebird'),
('thirdgenfbody', 1997, 'firebird'),
('thirdgenfbody', 1993, 'camaro'),
('thirdgenfbody', 1994, 'camaro'),
('thirdgenfbody', 1995, 'camaro'),
('thirdgenfbody', 1996, 'camaro'),
('thirdgenfbody', 1997, 'camaro'),
('c4', 1988, 'corvette'),
('c4', 1989, 'corvette'),
('c4', 1990, 'corvette'),
('c4', 1991, 'corvette'),
('c4', 1992, 'corvette'),
('c4', 1993, 'corvette'),
('c4', 1994, 'corvette'),
('c4', 1995, 'corvette'),
('c4', 1996, 'corvette'),
('c5c6', 1997, 'corvette'),
('c5c6', 1998, 'corvette'),
('c5c6', 1999, 'corvette'),
('c5c6', 2000, 'corvette'),
('c5c6', 2001, 'corvette'),
('c5c6', 2002, 'corvette'),
('c5c6', 2003, 'corvette'),
('c5c6', 2004, 'corvette'),
('c5c6', 2005, 'corvette'),
('c5c6', 2006, 'corvette'),
('c5c6', 2007, 'corvette'),
('c5c6', 2008, 'corvette'),
('c5c6', 2009, 'corvette'),
('c5c6', 2010, 'corvette'),
('c5c6', 2011, 'corvette'),
('c5c6', 2012, 'corvette'),
('c5c6', 2013, 'corvette'),
('fbody', 1993, 'firebird'),
('fbody', 1994, 'firebird'),
('fbody', 1995, 'firebird'),
('fbody', 1996, 'firebird'),
('fbody', 1997, 'firebird'),
('fbody', 1998, 'firebird'),
('fbody', 1999, 'firebird'),
('fbody', 2000, 'firebird'),
('fbody', 2001, 'firebird'),
('fbody', 2002, 'firebird'),
('fbody', 1993, 'camaro'),
('fbody', 1994, 'camaro'),
('fbody', 1995, 'camaro'),
('fbody', 1996, 'camaro'),
('fbody', 1997, 'camaro'),
('fbody', 1998, 'camaro'),
('fbody', 1999, 'camaro'),
('fbody', 2000, 'camaro'),
('fbody', 2001, 'camaro'),
('fbody', 2002, 'camaro'),
('fbodyc5c6ctsv', 1998, 'firebird'),
('fbodyc5c6ctsv', 1999, 'firebird'),
('fbodyc5c6ctsv', 2000, 'firebird'),
('fbodyc5c6ctsv', 2001, 'firebird'),
('fbodyc5c6ctsv', 2002, 'firebird'),
('fbodyc5c6ctsv', 1998, 'camaro'),
('fbodyc5c6ctsv', 1999, 'camaro'),
('fbodyc5c6ctsv', 2000, 'camaro'),
('fbodyc5c6ctsv', 2001, 'camaro'),
('fbodyc5c6ctsv', 2002, 'camaro'),
('fbodyc5c6ctsv', 1997, 'corvette'),
('fbodyc5c6ctsv', 1998, 'corvette'),
('fbodyc5c6ctsv', 1999, 'corvette'),
('fbodyc5c6ctsv', 2000, 'corvette'),
('fbodyc5c6ctsv', 2001, 'corvette'),
('fbodyc5c6ctsv', 2002, 'corvette'),
('fbodyc5c6ctsv', 2003, 'corvette'),
('fbodyc5c6ctsv', 2004, 'corvette'),
('fbodyc5c6ctsv', 2005, 'corvette'),
('fbodyc5c6ctsv', 2006, 'corvette'),
('fbodyc5c6ctsv', 2007, 'corvette'),
('fbodyc5c6ctsv', 2008, 'corvette'),
('fbodyc5c6ctsv', 2009, 'corvette'),
('fbodyc5c6ctsv', 2010, 'corvette'),
('fbodyc5c6ctsv', 2011, 'corvette'),
('fbodyc5c6ctsv', 2012, 'corvette'),
('fbodyc5c6ctsv', 2013, 'corvette'),
('fbodyc5c6ctsv', 2004, 'ctsv'),
('fbodyc5c6ctsv', 2005, 'ctsv'),
('fbodyc5c6ctsv', 2006, 'ctsv'),
('fbodyc5c6ctsv', 2007, 'ctsv');

-- --------------------------------------------------------

--
-- Table structure for table `frontcaliper`
--

CREATE TABLE `frontcaliper` (
  `VIN` varchar(3) NOT NULL,
  `carrierfitment` varchar(3) NOT NULL,
  `caliperorwheelcylinder` varchar(8) NOT NULL,
  `RPO` varchar(3) NOT NULL,
  `pistonsize` decimal(4,3) NOT NULL,
  `rotorwidth` decimal(4,3) NOT NULL,
  `pistons` int(1) NOT NULL,
  `spindleid` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `fronthub`
--

CREATE TABLE `fronthub` (
  `id` int(10) UNSIGNED NOT NULL,
  `spindlefitment` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `wheelboltquantity` int(11) NOT NULL,
  `pitchcirclediameter` decimal(4,3) NOT NULL,
  `trackoffset` int(11) DEFAULT NULL,
  `vin` int(17) NOT NULL,
  `rpo` varchar(3) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `quantity` int(1) UNSIGNED NOT NULL,
  `leftorrightthreads` varchar(5) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `frontrotor`
--

CREATE TABLE `frontrotor` (
  `VIN` varchar(17) NOT NULL,
  `RPO` varchar(3) NOT NULL,
  `boltpattern` int(1) NOT NULL,
  `diameter` decimal(6,4) NOT NULL,
  `quantityindex` int(11) NOT NULL,
  `width` decimal(6,4) NOT NULL,
  `hubdiameter` decimal(6,4) NOT NULL,
  `surfacewidth` decimal(6,4) NOT NULL,
  `fitment` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `offset` decimal(6,4) NOT NULL,
  `pitchcirclediameter` decimal(4,3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `frontspindle`
--

CREATE TABLE `frontspindle` (
  `VIN` varchar(17) NOT NULL,
  `RPO` varchar(3) NOT NULL,
  `abs` tinyint(1) DEFAULT NULL,
  `leftorright` varchar(5) NOT NULL,
  `fitment` varchar(20) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `make`
--

CREATE TABLE `make` (
  `makeId` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `model`
--

CREATE TABLE `model` (
  `modelId` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pad`
--

CREATE TABLE `pad` (
  `padId` varchar(3) NOT NULL,
  `caliperFitment` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `rearcalipercarrier`
--

CREATE TABLE `rearcalipercarrier` (
  `leftorright` varchar(5) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `vin` varchar(17) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `rpo` varchar(3) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `ID` int(10) UNSIGNED NOT NULL,
  `rotorfitment` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `caliperfitment1` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `caliperfitment2` varchar(20) NOT NULL,
  `caliperfitment3` varchar(20) NOT NULL,
  `minimumwheeldiameter` decimal(4,2) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `rearspindle`
--

CREATE TABLE `rearspindle` (
  `VIN` varchar(17) NOT NULL,
  `RPO` varchar(3) NOT NULL,
  `abs` tinyint(1) DEFAULT NULL,
  `leftorright` varchar(5) NOT NULL,
  `fitment` varchar(20) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `restraint`
--

CREATE TABLE `restraint` (
  `restraintId` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `rpolist`
--

CREATE TABLE `rpolist` (
  `VIN` varchar(17) NOT NULL,
  `listRPOs` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tire`
--

CREATE TABLE `tire` (
  `VIN` varchar(19) NOT NULL,
  `diameter` double NOT NULL,
  `width` int(3) NOT NULL,
  `height` int(2) NOT NULL,
  `speedrating` int(3) NOT NULL,
  `RPO` varchar(3) NOT NULL,
  `quantityindex` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `torqueconverter`
--

CREATE TABLE `torqueconverter` (
  `torqueConverterID` varchar(3) NOT NULL,
  `engineFitment` int(11) NOT NULL,
  `transmissionInputShaftFitment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `transfercase`
--

CREATE TABLE `transfercase` (
  `transferCaseId` varchar(1) NOT NULL,
  `torqueRating` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `transmission`
--

CREATE TABLE `transmission` (
  `RPO` varchar(3) NOT NULL,
  `ecm` varchar(30) NOT NULL,
  `speedSensor` varchar(30) NOT NULL,
  `powerRating` int(4) NOT NULL,
  `length` varchar(15) NOT NULL,
  `flywheel` varchar(20) NOT NULL,
  `slipyokesplines` int(11) NOT NULL,
  `transmissioninputsplines` int(11) NOT NULL,
  `VIN` varchar(17) NOT NULL,
  `inputsplines` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `transmissioninputshaft`
--

CREATE TABLE `transmissioninputshaft` (
  `splines` int(2) NOT NULL,
  `length` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `transmissionoutputshaft`
--

CREATE TABLE `transmissionoutputshaft` (
  `transmissionOutputShaftId` text NOT NULL,
  `transmissionOutputShaftLength` varchar(15) NOT NULL,
  `transmissionOutputShaftSplines` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user` varchar(16) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` varchar(16) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user`, `password`) VALUES
('bob', 'bobpassword'),
('nick', 'nickpassword');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `VIN` varchar(17) NOT NULL,
  `miles` decimal(7,0) DEFAULT NULL,
  `year` int(11) NOT NULL,
  `make` varchar(20) NOT NULL,
  `model` varchar(20) NOT NULL,
  `titlestatus` varchar(7) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `RPOlist` varchar(400) NOT NULL,
  `price` decimal(7,5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `vehiclecondition`
--

CREATE TABLE `vehiclecondition` (
  `restraint` tinyint(1) DEFAULT NULL,
  `bodyType` tinyint(1) DEFAULT NULL,
  `transferCase` tinyint(1) DEFAULT NULL,
  `rod` tinyint(1) DEFAULT NULL,
  `cam` tinyint(1) DEFAULT NULL,
  `crank` tinyint(1) DEFAULT NULL,
  `piston` tinyint(1) DEFAULT NULL,
  `pcv` tinyint(1) DEFAULT NULL,
  `intake` tinyint(1) DEFAULT NULL,
  `head` tinyint(1) DEFAULT NULL,
  `tbi` tinyint(1) DEFAULT NULL,
  `exhaustTip` tinyint(1) DEFAULT NULL,
  `catMidPipe` tinyint(1) DEFAULT NULL,
  `exhaustManifold` tinyint(1) DEFAULT NULL,
  `transmissionInput` tinyint(1) DEFAULT NULL,
  `transmissionConverter` tinyint(1) DEFAULT NULL,
  `transmissionOutput` tinyint(1) DEFAULT NULL,
  `wheels` tinyint(1) DEFAULT NULL,
  `tires` tinyint(1) DEFAULT NULL,
  `rotor` tinyint(1) DEFAULT NULL,
  `caliper` tinyint(1) DEFAULT NULL,
  `pad` tinyint(1) DEFAULT NULL,
  `drier` tinyint(1) DEFAULT NULL,
  `compressor` tinyint(1) DEFAULT NULL,
  `condenser` tinyint(1) DEFAULT NULL,
  `hose` tinyint(1) DEFAULT NULL,
  `torqueArmOrDriveLine` tinyint(1) DEFAULT NULL,
  `coilSpring` tinyint(1) DEFAULT NULL,
  `axle` tinyint(1) DEFAULT NULL,
  `controlArm` tinyint(1) DEFAULT NULL,
  `crossmember` tinyint(1) DEFAULT NULL,
  `shock` tinyint(1) DEFAULT NULL,
  `hub` tinyint(1) DEFAULT NULL,
  `panhardBar` tinyint(1) DEFAULT NULL,
  `swayBar` tinyint(1) DEFAULT NULL,
  `differential` tinyint(1) DEFAULT NULL,
  `shockBrace` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `wheel`
--

CREATE TABLE `wheel` (
  `VIN` varchar(19) NOT NULL,
  `diameter` double DEFAULT NULL,
  `backspacing` decimal(5,4) NOT NULL,
  `width` decimal(5,4) NOT NULL,
  `material` varchar(25) NOT NULL,
  `RPO` varchar(3) NOT NULL,
  `quantityindex` int(1) NOT NULL,
  `boltquantity` int(1) NOT NULL,
  `pitchcirclediameter` decimal(4,3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

CREATE TABLE `year` (
  `yearId` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bodytype`
--
ALTER TABLE `bodytype`
  ADD PRIMARY KEY (`bodyType`);

--
-- Indexes for table `brake`
--
ALTER TABLE `brake`
  ADD PRIMARY KEY (`brakeId`);

--
-- Indexes for table `brakepad`
--
ALTER TABLE `brakepad`
  ADD PRIMARY KEY (`VIN`,`RPO`,`quantityindex`);

--
-- Indexes for table `calipercarrier`
--
ALTER TABLE `calipercarrier`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `frontcaliper`
--
ALTER TABLE `frontcaliper`
  ADD PRIMARY KEY (`VIN`);

--
-- Indexes for table `fronthub`
--
ALTER TABLE `fronthub`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frontrotor`
--
ALTER TABLE `frontrotor`
  ADD PRIMARY KEY (`VIN`,`RPO`,`quantityindex`);

--
-- Indexes for table `frontspindle`
--
ALTER TABLE `frontspindle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `make`
--
ALTER TABLE `make`
  ADD PRIMARY KEY (`makeId`);

--
-- Indexes for table `model`
--
ALTER TABLE `model`
  ADD PRIMARY KEY (`modelId`);

--
-- Indexes for table `pad`
--
ALTER TABLE `pad`
  ADD PRIMARY KEY (`padId`);

--
-- Indexes for table `rearcalipercarrier`
--
ALTER TABLE `rearcalipercarrier`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `rearspindle`
--
ALTER TABLE `rearspindle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restraint`
--
ALTER TABLE `restraint`
  ADD PRIMARY KEY (`restraintId`);

--
-- Indexes for table `rpolist`
--
ALTER TABLE `rpolist`
  ADD PRIMARY KEY (`VIN`);

--
-- Indexes for table `tire`
--
ALTER TABLE `tire`
  ADD PRIMARY KEY (`VIN`,`RPO`,`quantityindex`);

--
-- Indexes for table `torqueconverter`
--
ALTER TABLE `torqueconverter`
  ADD PRIMARY KEY (`torqueConverterID`);

--
-- Indexes for table `transfercase`
--
ALTER TABLE `transfercase`
  ADD PRIMARY KEY (`transferCaseId`);

--
-- Indexes for table `transmission`
--
ALTER TABLE `transmission`
  ADD PRIMARY KEY (`RPO`,`VIN`);

--
-- Indexes for table `transmissionoutputshaft`
--
ALTER TABLE `transmissionoutputshaft`
  ADD PRIMARY KEY (`transmissionOutputShaftId`(3));

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`VIN`,`year`,`make`,`model`);

--
-- Indexes for table `wheel`
--
ALTER TABLE `wheel`
  ADD PRIMARY KEY (`VIN`,`RPO`,`quantityindex`);

--
-- Indexes for table `year`
--
ALTER TABLE `year`
  ADD PRIMARY KEY (`yearId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calipercarrier`
--
ALTER TABLE `calipercarrier`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `frontspindle`
--
ALTER TABLE `frontspindle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rearcalipercarrier`
--
ALTER TABLE `rearcalipercarrier`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rearspindle`
--
ALTER TABLE `rearspindle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
