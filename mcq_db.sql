-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2019 at 03:04 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mcq_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(5) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(5) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `category_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `category_name`, `category_image`) VALUES
(8, 'abcd', 'pasted-image-28.png');

-- --------------------------------------------------------

--
-- Table structure for table `exam_details`
--

CREATE TABLE `exam_details` (
  `exam_id` int(10) NOT NULL,
  `category_id` varchar(110) NOT NULL,
  `title` varchar(100) NOT NULL,
  `noofquestion` varchar(10) NOT NULL,
  `total_marks` varchar(10) NOT NULL,
  `positive_marks` varchar(10) NOT NULL,
  `negative_marks` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_details`
--

INSERT INTO `exam_details` (`exam_id`, `category_id`, `title`, `noofquestion`, `total_marks`, `positive_marks`, `negative_marks`) VALUES
(1, '8', 'Small Genius', '10', '20', '2', '1');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `subject` varchar(100) NOT NULL,
  `email` text NOT NULL,
  `feedback_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `name`, `message`, `subject`, `email`, `feedback_date`) VALUES
(2, 'a', 'a', 'a', 'a', 'a'),
(3, 'kartik', 'testing', 'test', 'kansagrakd108@gmail.com', '07-04-2019');

-- --------------------------------------------------------

--
-- Table structure for table `options_master`
--

CREATE TABLE `options_master` (
  `opt_id` int(10) NOT NULL,
  `option1` text NOT NULL,
  `option2` text NOT NULL,
  `option3` text NOT NULL,
  `option4` text NOT NULL,
  `ques_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `options_master`
--

INSERT INTO `options_master` (`opt_id`, `option1`, `option2`, `option3`, `option4`, `ques_id`) VALUES
(1, 'Jyorj Bush', 'Barak Obama', 'Trumpt', 'Narendra Modi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `question_master`
--

CREATE TABLE `question_master` (
  `ques_id` int(5) NOT NULL,
  `exam_id` varchar(122) NOT NULL,
  `question_title` text NOT NULL,
  `option1` varchar(100) NOT NULL,
  `option2` varchar(100) NOT NULL,
  `option3` varchar(100) NOT NULL,
  `option4` varchar(100) NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_master`
--

INSERT INTO `question_master` (`ques_id`, `exam_id`, `question_title`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES
(1, 'Small Genius', 'Who is prime minister of USA?', 'aa', 'bb', 'cc', 'dd', 'B'),
(2, 'Small Genius', 'Who is Good', 'Animal', 'Bird', 'Human', 'All Of Above', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `result_info`
--

CREATE TABLE `result_info` (
  `result_id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `exam_id` varchar(100) NOT NULL,
  `result` varchar(100) NOT NULL,
  `r_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result_info`
--

INSERT INTO `result_info` (`result_id`, `username`, `exam_id`, `result`, `r_date`) VALUES
(2, 'kansagrakd108', 'Small Genius', '2', '09-04-2019'),
(3, 'kansagrakd108', 'Small Genius', '4', '09-04-2019'),
(4, 'kansagrakd108', 'Small Genius', '1', '09-04-2019'),
(5, 'kansagrakd108', 'Small Genius', '-2', '09-04-2019');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `customer_id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `email` text NOT NULL,
  `contact` varchar(100) NOT NULL,
  `city` text NOT NULL,
  `address` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`customer_id`, `name`, `username`, `gender`, `email`, `contact`, `city`, `address`, `password`) VALUES
(2, 'kartik kansagra', 'kansagrakd108', 'Male', 'kansagrakd108@gmail.com', '9898989898', 'Rajkot', 'near kljlkj', 'kk123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `exam_details`
--
ALTER TABLE `exam_details`
  ADD PRIMARY KEY (`exam_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `options_master`
--
ALTER TABLE `options_master`
  ADD PRIMARY KEY (`opt_id`);

--
-- Indexes for table `question_master`
--
ALTER TABLE `question_master`
  ADD PRIMARY KEY (`ques_id`);

--
-- Indexes for table `result_info`
--
ALTER TABLE `result_info`
  ADD PRIMARY KEY (`result_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `exam_details`
--
ALTER TABLE `exam_details`
  MODIFY `exam_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `options_master`
--
ALTER TABLE `options_master`
  MODIFY `opt_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `question_master`
--
ALTER TABLE `question_master`
  MODIFY `ques_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `result_info`
--
ALTER TABLE `result_info`
  MODIFY `result_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `customer_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
