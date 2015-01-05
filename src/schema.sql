-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2015 at 02:50 AM
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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`uid`, `pid`, `cid`, `content`, `date`) VALUES
(60, 62, 14, 'ee', '2015-01-04 06:15:49'),
(1, 62, 15, 'ff', '2015-01-04 09:23:02'),
(1, 64, 17, 'Testing script injection: <script>alert(''inject'');</script>', '2015-01-04 10:16:21');

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
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `heading`, `abstract`, `content`, `date`, `user_name`, `uid`) VALUES
(10, 'Stories of American Livelihood', 'Update!', 'content here', '2014-12-17 10:59:39', '', 0),
(62, 'Hi', '<p>test</p>', '<p>test</p>', '2015-01-04 06:06:32', '', 60),
(64, 'Test if can delete', '<p>elegant</p>', '', '2015-01-04 09:18:38', '', 1),
(65, 'Testing', '<p>Testing script injection: &lt;script&gt;alert(''inject'');&lt;/script&gt;</p>', '', '2015-01-04 10:22:55', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`uid` bigint(20) unsigned NOT NULL,
  `gender` varchar(40) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pf_name` varchar(40) NOT NULL,
  `age` int(11) NOT NULL,
  `address` text NOT NULL,
  `intro` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `gender`, `user_name`, `password`, `email`, `pf_name`, `age`, `address`, `intro`, `img`) VALUES
(1, 'M', 'hlhl', '1234', 'hlmom@blahba.com', '1234', 18, ' 123   ', ' 123   ', '20813_188421673.jpg'),
(61, 'I would rather not say', 'hltest', 'c2dba6ed4330d6960a78', 'test@gmail.com', 'TestPass', 0, ' d   ', '    ', '');

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
MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
MODIFY `post_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `uid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=62;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
