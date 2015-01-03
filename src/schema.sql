-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2015 at 08:08 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
`cid` int(11) NOT NULL,
  `content` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`uid`, `pid`, `cid`, `content`, `date`) VALUES
(49, 48, 10, 'Final test', '2014-12-21 05:17:45'),
(49, 22, 11, 'Hi there!!', '2014-12-21 05:24:32'),
(48, 53, 13, 'ff', '2014-12-26 02:06:40');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
`post_id` bigint(20) unsigned NOT NULL,
  `heading` text NOT NULL,
  `abstract` text NOT NULL,
  `content` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_name` varchar(20) NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `heading`, `abstract`, `content`, `date`, `user_name`, `uid`) VALUES
(10, 'Stories of American Livelihood', 'Update!', 'content here', '2014-12-17 10:59:39', '', 0),
(22, 'TEST AUTO TIME', 'CREAT A TIME', '19:27', '2014-12-17 11:27:20', '', 0),
(23, 'Test', 'Call to a member function bind_param() on boolean', '<script>alert(''Hello hello!'')</script>', '2014-12-19 02:45:16', '', 0),
(48, 'Fish Leong', 'J', 'FFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFF', '2014-12-20 08:47:26', '', 49),
(49, 'Hi', 'OMG', 'There', '2014-12-21 04:32:35', '', 49),
(50, 'hhhhhhhhhhhh', 'HH', 'HH', '2014-12-21 04:53:18', '', 49),
(51, 'HI', 'TEst', '', '2014-12-21 05:30:11', '', 49),
(52, 'ff', 'ff', 'ff', '2014-12-21 05:34:14', '', 49),
(54, 'FFFFF', 'FFFFFFF', 'FFFFFFFFFFFF', '2014-12-22 09:07:42', '', 48),
(61, 'YS', '<p>YEY</p>', '<p>TEST</p>', '2015-01-03 07:04:49', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`uid` bigint(20) unsigned NOT NULL,
  `gender` varchar(20) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `pf_name` varchar(30) NOT NULL,
  `age` int(11) NOT NULL,
  `address` text NOT NULL,
  `intro` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `gender`, `user_name`, `password`, `email`, `pf_name`, `age`, `address`, `intro`, `img`) VALUES
(1, 'F', 'hlhl', '123', 'hlmom@blahba.com', '1234', 18, ' eeeee', ' eeeeeee', '20813_188421673.jpg'),
(48, 'F', 'Mom', '111', 'hlmom@blahba.com', 'XCM', 0, '', '', ''),
(49, 'F', 'kkk', 'kkk', 'kkk@kk.com', 'kk', 0, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
 ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
 ADD PRIMARY KEY (`post_id`), ADD UNIQUE KEY `post_id` (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`uid`), ADD UNIQUE KEY `uid` (`uid`), ADD UNIQUE KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
MODIFY `post_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `uid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=50;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
