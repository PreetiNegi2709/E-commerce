-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2020 at 03:54 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `cart_id` bigint(30) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `orderdate` date NOT NULL,
  `payment_option` varchar(20) NOT NULL,
  `payment` varchar(20) NOT NULL,
  `payment_date` date NOT NULL,
  `customer_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `cart_id`, `product_id`, `qty`, `orderdate`, `payment_option`, `payment`, `payment_date`, `customer_id`) VALUES
(50, 20200515192337, 6, 1, '2020-05-15', '', '', '0000-00-00', ''),
(51, 20200515192337, 10, 1, '2020-05-15', '', '', '0000-00-00', ''),
(52, 20200515192337, 11, 1, '2020-05-15', '', '', '0000-00-00', ''),
(53, 20200515192337, 8, 1, '2020-05-15', '', '', '0000-00-00', ''),
(54, 20200515192337, 9, 1, '2020-05-15', '', '', '0000-00-00', ''),
(55, 20200515202424, 6, 1, '2020-05-15', '', '', '0000-00-00', ''),
(56, 20200515202424, 11, 1, '2020-05-15', '', '', '0000-00-00', ''),
(57, 20200515202424, 10, 1, '2020-05-15', '', '', '0000-00-00', ''),
(58, 20200515202424, 8, 1, '2020-05-15', '', '', '0000-00-00', ''),
(59, 20200515204736, 3, 1, '2020-05-15', '', '', '0000-00-00', ''),
(60, 20200516084521, 6, 1, '2020-05-16', '', '', '0000-00-00', ''),
(61, 20200516084521, 3, 1, '2020-05-16', '', '', '0000-00-00', ''),
(62, 20200516084521, 3, 1, '2020-05-16', '', '', '0000-00-00', ''),
(63, 20200516084521, 5, 1, '2020-05-16', '', '', '0000-00-00', ''),
(64, 20200516084521, 2, 1, '2020-05-16', '', '', '0000-00-00', ''),
(65, 20200516084521, 3, 1, '2020-05-16', '', '', '0000-00-00', ''),
(66, 20200516084521, 2, 1, '2020-05-16', '', '', '0000-00-00', ''),
(67, 20200516084521, 7, 1, '2020-05-16', '', '', '0000-00-00', ''),
(68, 20200516084521, 10, 1, '2020-05-16', '', '', '0000-00-00', ''),
(69, 20200516084521, 7, 1, '2020-05-16', '', '', '0000-00-00', ''),
(70, 20200516084521, 6, 1, '2020-05-16', '', '', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `upload_img`
--

CREATE TABLE `upload_img` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` int(10) NOT NULL,
  `detail` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload_img`
--

INSERT INTO `upload_img` (`id`, `name`, `price`, `detail`, `image`) VALUES
(2, 'cabin in hills', 250, 'cabin - in - woods - mountain - hills - landscape - lake - water - clouds - nature - rock', 'cabin.jpg'),
(3, 'people walking', 150, 'architecture - building - were - people - are - walking - crowd - history - landmark', 'walking.jpg'),
(5, 'fishing', 350, 'people - fishing - on - the - peaceful - beach - landscape - water - ocean - nature', 'beach.jpg'),
(6, 'close up shot', 300, 'close - up - portrate - shot - of - person - having - frickles - beautiful - eyes', 'close-up.jpg'),
(7, 'lamp', 370, 'lamp - near - open - window - beach - sunrise - nature -red sky', 'lamp.jpg'),
(8, 'table', 165, 'women - in - kitchen - setting - on - a - coffee - table - along - with - the - laptop - plants - home decore', 'coffee.jpg'),
(9, 'walking on sand', 400, 'women - wearing - white - dress - is - walking - on - the - sand - in - beach - water', 'sand.jpg'),
(10, 'bufferfly', 450, 'man - holding - beautiful - blacl - red - butterfly - on - his - hand - nature ', 'butterfly.jpg'),
(11, 'man playing guitar', 360, 'man - on - the - sidewalk - street - wearing - brown - coat - hat - playing - guitar ', 'sidewalk.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `userid` varchar(20) NOT NULL,
  `first_name` varchar(10) NOT NULL,
  `last_name` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(25) NOT NULL,
  `pro_pic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`userid`, `first_name`, `last_name`, `email`, `password`, `pro_pic`) VALUES
('dsnegi', 'D.S.', 'Negi', 'dsnegi@gmail.com', '3333', ''),
('negibeena', 'beena', 'negi', 'beenanegi@gmail.com', '2222', ''),
('negipreeti', 'preeti', 'negi', 'preetinegi@gmail.com', '0000', ''),
('negirahul', 'rahul', 'negi', 'rahul@gmail.com', '1111', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload_img`
--
ALTER TABLE `upload_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
