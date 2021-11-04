-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2021 at 06:39 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `go_my_squad`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(100) NOT NULL,
  `post_id` varchar(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `content_comment` varchar(10000) NOT NULL,
  `image` varchar(100) NOT NULL,
  `created` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `post_id`, `user_id`, `name`, `content_comment`, `image`, `created`) VALUES
(158475791, '5424577', '20', 'Mahdi Mahdi', 'joining... pls check discord i sent u a request', 'upload/IMG-2034_1.png', '1635501407'),
(158475795, '5424589', '20', 'Mahdi Mahdi', 'ok joining check discord', 'upload/IMG-2034_1.png', '1635506699'),
(158475796, '5424590', '20', 'Mahdi Mahdi', 'mpmp', 'upload/IMG-2034_1.png', '1635506717'),
(158475800, '5424598', '20', 'Mahdi Mahdi', 'joining  ', 'upload/IMG-2034_1.png', '1635775034'),
(158475801, '5424599', '20', 'Mahdi', 'this is a test comment n1', 'upload/IMG-2034_1.png', '1635867838'),
(158475802, '5424600', '20', 'Mahdi', 'this is a test comment n2', 'upload/IMG-2034_1.png', '1635867842'),
(158475803, '5424601', '20', 'Mahdi', 'this is a test comment n3', 'upload/IMG-2034_1.png', '1635867847'),
(158475804, '5424602', '20', 'Mahdi', 'this is a test comment n4', 'upload/IMG-2034_1.png', '1635867853'),
(158475805, '5424603', '20', 'Mahdi', 'this is a test comment n6', 'upload/IMG-2034_1.png', '1635867862'),
(158475806, '5424613', '20', 'Mahdi', 'This site is under development', 'upload/IMG-2034_1.png', '1635869105'),
(158475808, '5424613', '20', 'Mahdi', 'but it is ready for basic use !', 'upload/IMG-2034_1.png', '1635869170');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `photo_id` int(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `date_added` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `content` varchar(100) NOT NULL,
  `category_id` int(10) NOT NULL,
  `created` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `user_id`, `content`, `category_id`, `created`) VALUES
(5424599, '20', 'this is a test post n1', 0, '1635867812'),
(5424600, '20', 'this is a test post n2', 0, '1635867814'),
(5424601, '20', 'this is a test post n3', 0, '1635867819'),
(5424602, '20', 'this is a test post n4', 0, '1635867821'),
(5424603, '20', 'this is a test post n5', 0, '1635867824'),
(5424607, '20', 'GO MY SQUAD\nGAMING NETWORK COMMUNITY ||Beta_VersionV4', 0, '1635867970'),
(5424608, '20', 'this is a test post n1', 1, '1635867812'),
(5424609, '20', 'this is a test post n2', 1, '1635867814'),
(5424610, '20', 'this is a test post n3', 1, '1635867819'),
(5424611, '20', 'this is a test post n4', 1, '1635867821'),
(5424612, '20', 'this is a test post n5', 1, '1635867824'),
(5424613, '20', 'GO MY SQUAD\r\nGAMING NETWORK COMMUNITY ||Beta_VersionV4', 1, '1635867970');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `discord` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `password2` varchar(100) NOT NULL,
  `profile_picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `email`, `age`, `discord`, `password`, `password2`, `profile_picture`) VALUES
(18, 'admin', 'gomysquad@admin.com', '20', 'admin#1337', 'admin', 'admin', 'upload/user.png'),
(19, 'mahdi', 'user@admin.com', '25', 'omar#123', '0000', '0000', 'upload/user.png'),
(20, 'Mahdi', 'mahdi@gmail.com', '23', 'mahdi#1337', '0000', '0000', 'upload/IMG-2034_1.png'),
(21, 'Mahdi', 'mahdiabid@gmail.com', '24', 'mahdi#2142', '0000', '0000', ''),
(22, 'omar123', 'omar456@gmail.com', '27', 'omar#8543', '0000', '0000', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`photo_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158475809;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `photo_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5424614;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
