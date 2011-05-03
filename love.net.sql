-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 03, 2011 at 11:06 
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `love.net`
--

-- --------------------------------------------------------

--
-- Table structure for table `men`
--

CREATE TABLE IF NOT EXISTS `men` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `pass` varchar(100) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `facebook` varchar(100) CHARACTER SET utf8 NOT NULL,
  `kilograms` int(11) NOT NULL,
  `salary` int(11) NOT NULL,
  `car` varchar(50) CHARACTER SET utf8 NOT NULL,
  `villa` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `years` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `men`
--

INSERT INTO `men` (`id`, `name`, `pass`, `email`, `facebook`, `kilograms`, `salary`, `car`, `villa`, `height`, `years`) VALUES
(4, 'Филип Киркоров', '51eac6b471a284d3341d8c0c63d0f1a286262a18', 'filip@abv.bg', 'http://www.facebook.com/people/Filip-Kirkorov/100000978021955', 80, 2000, 'bmv', 0, 185, 50),
(5, 'Васил Найденов', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'vasko@gmail.com', 'http://www.facebook.com/people/', 90, 1000, 'red', 0, 180, 60);

-- --------------------------------------------------------

--
-- Table structure for table `women`
--

CREATE TABLE IF NOT EXISTS `women` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `kilograms` int(11) NOT NULL,
  `eyes` varchar(50) NOT NULL,
  `hair` varchar(50) NOT NULL,
  `boobs` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `years` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `women`
--

INSERT INTO `women` (`id`, `name`, `password`, `email`, `facebook`, `kilograms`, `eyes`, `hair`, `boobs`, `height`, `years`) VALUES
(20, 'Станка Петрова', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'stanka@abv.bg', 'http://www.facebook.com/', 55, 'blue', 'blond', 90, 175, 25);
