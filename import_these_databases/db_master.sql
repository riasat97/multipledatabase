-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2014 at 05:46 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_master`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(50) NOT NULL,
  `admin_email_address` varchar(256) NOT NULL,
  `admin_password` varchar(32) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email_address`, `admin_password`) VALUES
(2, 'Riasat Raihan', 'riasatraihan@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_code` varchar(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` int(11) NOT NULL,
  `unit_price` int(11) NOT NULL,
  `purchase_price` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_code`, `product_name`, `product_price`, `unit_price`, `purchase_price`, `created_at`) VALUES
(17, 'Fugiat quia tenetur deleniti sed culpa amet ipsam quo sed consequatur Iure sit eum consectetur modi ', 'Cheryl Patton', 26, 24, 24, 1417136172),
(20, 'Molestiae ullamco non perspiciatis id excepteur nisi natus qui quasi praesentium delectus placeat al', 'Zachery Spence', 37, 90, 90, 1417136245),
(21, 'Distinctio Ab dicta fugiat tempora libero ut facere voluptatibus et', 'Ursula Mcguire', 42, 17, 17, 1417136252),
(22, 'Voluptate reprehenderit voluptatem Est ullamco tempore architecto voluptatibus deserunt in excepturi', 'Arsenio Blankenship', 11, 61, 61, 1417136334),
(23, 'Id tenetur voluptas voluptate similique accusantium aut minima', 'Arsenio Mann', 77, 61, 61, 1417139077),
(24, 'Qui atque totam voluptate explicabo Autem ea elit commodo dolorem quae velit nulla eos fugiat proide', 'Sacha Walter', 30, 63, 63, 1417139505),
(25, 'Ipsa at voluptas et quos quis labore libero ipsa consequat Doloribus alias fugit quia quia autem', 'Grant Fleming', 42, 12, 12, 1417139722),
(26, 'Fugit eligendi cum esse libero quia ut ut odio fugiat illo quidem sint dolor impedit ut id maiores', 'Leah Schwartz', 13, 17, 17, 1417140615),
(28, 'Non et non dolor excepteur consequat Sed cum tempor Nam mollit totam dolor id consectetur quisquam a', 'Lilah Massey', 71, 21, 21, 1417143787),
(30, 'Lorem praesentium eveniet velit dolorem excepturi fuga Adipisci saepe aut illo mollit', 'Adrian Griffith', 82, 93, 93, 1417145555),
(31, 'Eligendi velit eius deserunt et consequatur Sint non', 'Drew Ramos', 17, 68, 68, 1417146077),
(34, 'Nostrum enim aperiam elit aliquip modi', 'Indigo Conrad', 7, 53, 53, 1417146163),
(35, 'Autem laboriosam ut ipsum quis veniam sequi est anim dolorem minus repellendus Est iure minus', 'abdun noor', 16, 100, 100, 1417146854),
(37, 'Esse qui ad impedit illo in consequat Officiis veritatis sequi', 'Josiah Ballard', 26, 2, 2, 1417147280),
(38, 'Distinctio Laboriosam laborum Ut esse sint perspiciatis non ipsum maxime fuga At maxime', 'Vernon Coleman', 20, 69, 0, 1417148873);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
