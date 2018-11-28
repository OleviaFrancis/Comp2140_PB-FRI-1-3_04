-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2018 at 08:24 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elrdatabase`
--
DROP SCHEMA IF EXISTS elrdatabase2;
CREATE SCHEMA elrdatabase2;
USE elrdatabase2;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--
DROP TABLE IF EXISTS 'user';
CREATE TABLE `user` (
  `StudentID` int(11) NOT NULL,
  `FirstName` varchar(32) DEFAULT NULL,
  `LastName` varchar(32) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `DOB` varchar(15) DEFAULT NULL,
  `RoomNumber` varchar(10) DEFAULT NULL,
  `Nationality` varchar(25) DEFAULT NULL,
  `HomeAddress` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Major` varchar(50) DEFAULT NULL,
  `YearOfStudy` varchar(10) DEFAULT NULL,
  `DegreeLevel` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS 'login';
CREATE TABLE `login` (
  `StudentID` int(11) NOT NULL AUTO_INCREMENT,
  `email`varchar(32) DEFAULT NULL,
  `password`varchar(32) DEFAULT NULL
  )ENGINE=InnoDB DEFAULT CHARSET=latin1;
  

