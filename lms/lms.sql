-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2019 at 04:30 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(5) NOT NULL,
  `bname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bimage` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bauther` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `bpublication` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `bpurchasedate` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `bprice` int(55) NOT NULL,
  `bqty` int(55) NOT NULL,
  `availableqty` int(55) NOT NULL,
  `luser` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `lasteditby` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `lasteditedtime` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `bdetails` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `bname`, `bimage`, `bauther`, `bpublication`, `bpurchasedate`, `bprice`, `bqty`, `availableqty`, `luser`, `lasteditby`, `lasteditedtime`, `bdetails`) VALUES
(65, 'Ami Topu', 'book/1.jpg', 'Jafar iqbal', 'alor pathshala', '2019-08-23', 200, 2, 3, 'sk420', '', '', 'The intellectual content in a physical book need not be a composition, nor even be called a book. Books can consist only of drawings, engravings, or photographs, or such things as '),
(66, 'mishir ali', 'book/2.jpg', 'humayun Ahamed', 'alor pathshala', '2019-08-23', 400, 2, 1, 'sk420', '', '', 'The intellectual content in a physical book need not be a composition, nor even be called a book. Books can consist only of drawings, engravings, '),
(67, 'shuvro', 'book/3.jpg', 'humayun Ahamed', 'alor pathshala', '2019-08-23', 300, 2, 1, 'sk420', '', '', 'The intellectual content in a physical book need not be a composition, nor even be called a book. Books can consist only of drawings, engravings, or photographs, or such things as crossword'),
(68, 'kothao keu nei', 'book/4.png', 'humayun Ahamed', 'alor pathshala', '2019-08-23', 500, 2, 1, 'sk420', '', '', 'The intellectual content in a physical book need not be a composition, nor even be called a book. Books can consist only of drawings, engravings, or photographs, or such things as crossword'),
(69, 'angul kata joglu vai', 'book/5.jpg', 'humayun Ahamed', 'alor pathshala', '2019-08-23', 150, 22, 21, 'sk420', '', '', 'The intellectual content in a physical book need not be a composition, nor even be called a book. Books can consist only of drawings, engravings, or photographs, or such things as crossword'),
(70, 'butterfly', 'book/6.jpg', 'humayun Ahamed', 'alor pathshala', '2019-08-23', 150, 10, 9, 'sk420', '', '', 'The intellectual content in a physical book need not be a composition, nor even be called a book. Books can consist only of drawings, engravings, or photographs, or such things as crossword'),
(71, 'How to win', 'book/7.png', 'del karnegi', 'unknown', '2019-08-23', 200, 15, 16, 'sk420', '', '', 'The intellectual content in a physical book need not be a composition, nor even be called a book. Books can consist only of drawings, engravings, or photographs, or such things as crossword'),
(72, 'friendship', 'book/8.jpg', 'del karnegi', 'unknown', '2019-08-23', 348, 15, 16, 'sk420', '', '', 'The intellectual content in a physical book need not be a composition, nor even be called a book. Books can consist only of drawings, engravings, or photographs, or such things as crossword'),
(73, 'Life', 'book/8.jpg', 'del karnegi', 'world', '2019-08-23', 322, 15, 15, 'sk420', '', '', 'The intellectual content in a physical book need not be a composition, nor even be called a book. Books can consist only of drawings, engravings, or photographs, or such things as crossword'),
(74, 'harry potter', 'book/9.jpg', 'del karnegi', 'bati ghor', '2019-08-23', 355, 15, 14, 'sk420', '', '', 'The intellectual content in a physical book need not be a composition, nor even be called a book. Books can consist only of drawings, engravings, or photographs, or such things as crossword'),
(75, 'kitty cat', 'book/10.jpg', 'del karnegi', 'boi ghor', '2019-08-23', 355, 15, 14, 'sk420', '', '', 'The intellectual content in a physical book need not be a composition, nor even be called a book. Books can consist only of drawings, engravings, or photographs, or such things as crossword'),
(76, 'lifetime', 'book/12.jpg', 'del karnegi', 'boi ghor', '2019-08-23', 355, 15, 15, 'sk420', '', '', 'The intellectual content in a physical book need not be a composition, nor even be called a book. Books can consist only of drawings, engravings, or photographs, or such things as crossword'),
(77, 'Hangover', 'book/13.jpg', 'del karnegi', 'boi ghor', '2019-08-23', 355, 15, 15, 'sk420', '', '', 'The intellectual content in a physical book need not be a composition, nor even be called a book. Books can consist only of drawings, engravings, or photographs, or such things as crossword'),
(78, 'Batman', 'book/14.jpg', 'cristopher nolan', 'foreign', '2019-08-23', 355, 15, 14, 'sk420', '', '', 'The intellectual content in a physical book need not be a composition, nor even be called a book. Books can consist only of drawings, engravings, or photographs, or such things as crossword'),
(79, 'spider man', 'book/15.jpg', 'shawon khan', 'mypublication', '2019-08-23', 500, 23, 23, 'sk420', '', '', 'The intellectual content in a physical book need not be a composition, nor even be called a book. Books can consist only of drawings, engravings, or photographs, or such things as crossword');

-- --------------------------------------------------------

--
-- Table structure for table `bookissue`
--

CREATE TABLE `bookissue` (
  `id` int(5) NOT NULL,
  `studentenrollment` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `studentname` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `studentsem` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `studentcontact` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `studentemail` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `bookname` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `bookissuedate` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `bookreturndate` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `studentusername` varchar(55) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bookissue`
--

INSERT INTO `bookissue` (`id`, `studentenrollment`, `studentname`, `studentsem`, `studentcontact`, `studentemail`, `bookname`, `bookissuedate`, `bookreturndate`, `studentusername`) VALUES
(39, '16103034', 'shawonkhan', 'summer', '01623272833', 'shawonkhan260@gmail.com', 'Ami Topu', '2019-08-23', '2019-08-23', 'khan260'),
(40, '16103033', 'sohankhan', 'summer', '01623272678', 'sohan@gmail.com', 'mishir ali', '2019-08-23', '', 'sohan260'),
(41, '16103032', 'Golam MoazzemNaim', 'summer', '01623272678', 'gmnaim@gmail.com', 'shuvro', '2019-08-23', '', 'gmnaim'),
(42, '16103031', 'AshikunnabiTuhin', 'summer', '01623272678', 'tuhin@gmail.com', 'kothao keu nei', '2019-08-23', '', 'tuhin260'),
(43, '16103039', 'farhansahriar', 'spring', '03523234234', 'farhan260@gmail.com', 'butterfly', '2019-08-23', '', 'farhan260'),
(44, '16103039', 'farhansahriar', 'spring', '03523234234', 'farhan260@gmail.com', 'friendship', '2019-08-23', '2019-08-23', 'farhan260'),
(45, '16103038', 'tufailahamed', 'summer', '03523234234', 'taskhan260@gmail.com', 'friendship', '2019-08-23', '', 'taskhan260'),
(46, '16103034', 'shawonkhan', 'summer', '01623272833', 'shawonkhan260@gmail.com', 'harry potter', '2019-08-23', '', 'khan260'),
(47, '23324343', 'fariajahan', 'spring', '103523234234', 'fariha@gmail.com', 'Batman', '2019-08-23', '', 'fariha260'),
(48, '23324343', 'fariajahan', 'spring', '103523234234', 'fariha@gmail.com', 'kitty cat', '2019-08-23', '', 'fariha260'),
(49, '16103034', 'shawonkhan', 'summer', '01623272833', 'shawonkhan260@gmail.com', 'angul kata joglu vai', '2019-08-23', '', 'khan260'),
(50, '16103034', 'shawonkhan', 'summer', '01623272833', 'shawonkhan260@gmail.com', 'How to win', '2019-08-23', '2019-08-23', 'khan260');

-- --------------------------------------------------------

--
-- Table structure for table `librarian_reg`
--

CREATE TABLE `librarian_reg` (
  `id` int(5) NOT NULL,
  `firstname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `contact` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `createdby` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tokenExpire` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `librarian_reg`
--

INSERT INTO `librarian_reg` (`id`, `firstname`, `lastname`, `username`, `password`, `email`, `contact`, `image`, `createdby`, `token`, `tokenExpire`) VALUES
(1, 'Shawon', 'khan', 'sk420', '262fd345916d6767ed8bb776eed77688', 'shawonkhan260@gmail.com', '01623272833', 'images/p4.png', '', '', ''),
(2, 'Golam Moazzem', 'Naim', 'gmnaim', '697cdd116e90553bbc25a5d1d4998c27', 'gmnaim@gmail.com', '017142424234', 'images/image.jpg', 'sk420', '', ''),
(3, 'Zahid', 'Sohan', 'jason', '697cdd116e90553bbc25a5d1d4998c27', 'jason1995@gmail.com', '016273643445', 'images/user.png', 'sk420', '', ''),
(4, 'Ashikunnabi', 'Tuhin', 'tuhin260', '697cdd116e90553bbc25a5d1d4998c27', 'tuhin260@gmail.com', '017239238923', 'images/user.png', 'sk420', '', ''),
(5, 'faria', 'jahan', 'jahan', '697cdd116e90553bbc25a5d1d4998c27', 'jahan23@gmail.com', '0172387238', 'images/user.png', 'sk420', '', ''),
(6, 'farhan', 'sahriar', 'farhan', '697cdd116e90553bbc25a5d1d4998c27', 'farhan@gmail.com', '017823783234', 'images/user.png', 'sk420', '', ''),
(7, 'rubaiya zahin', 'sunnah', 'sunnah', '697cdd116e90553bbc25a5d1d4998c27', 'sunnah@gmail.com', '017878322323', 'images/user.png', 'sk420', '', ''),
(8, 'sajal', 'hasan', 'sajal', '697cdd116e90553bbc25a5d1d4998c27', 'sajal@gmail.com', '0189342323', 'images/user.png', 'sk420', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(5) NOT NULL,
  `luser` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `suser` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(555) COLLATE utf8_unicode_ci NOT NULL,
  `readstatus` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `luser`, `suser`, `title`, `message`, `readstatus`) VALUES
(15, 'sk420', 'khan260', 'alert', 'your book return date is near. please return your book within this time. thank you', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `student_reg`
--

CREATE TABLE `student_reg` (
  `id` int(5) NOT NULL,
  `firstname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `contact` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sem` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `enrollmentno` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tokenExpire` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student_reg`
--

INSERT INTO `student_reg` (`id`, `firstname`, `lastname`, `username`, `password`, `email`, `contact`, `sem`, `enrollmentno`, `status`, `image`, `token`, `tokenExpire`) VALUES
(32, 'shawon', 'khan', 'khan260', '262fd345916d6767ed8bb776eed77688', 'shawonkhan260@gmail.com', '01623272833', 'summer', '16103034', 'yes', 'images/p9.jpg', '', ''),
(33, 'sohan', 'khan', 'sohan260', '262fd345916d6767ed8bb776eed77688', 'sohan@gmail.com', '01623272678', 'summer', '16103033', 'yes', 'images/user.png', '', ''),
(34, 'Golam Moazzem', 'Naim', 'gmnaim', '262fd345916d6767ed8bb776eed77688', 'gmnaim@gmail.com', '01623272678', 'summer', '16103032', 'yes', 'images/user.png', '', ''),
(35, 'Ashikunnabi', 'Tuhin', 'tuhin260', '262fd345916d6767ed8bb776eed77688', 'tuhin@gmail.com', '01623272678', 'summer', '16103031', 'yes', 'images/user.png', '', ''),
(36, 'sajal', 'khan', 'saja260', '262fd345916d6767ed8bb776eed77688', 'sajal@gmail.com', '03523272678', 'summer', '16103039', 'yes', 'images/user.png', '', ''),
(37, 'tufail', 'ahamed', 'taskhan260', '262fd345916d6767ed8bb776eed77688', 'taskhan260@gmail.com', '03523234234', 'summer', '16103038', 'yes', 'images/user.png', '', ''),
(38, 'farhan', 'sahriar', 'farhan260', '262fd345916d6767ed8bb776eed77688', 'farhan260@gmail.com', '03523234234', 'spring', '16103036', 'yes', 'images/user.png', '', ''),
(39, 'faria', 'jahan', 'fariha260', '262fd345916d6767ed8bb776eed77688', 'fariha@gmail.com', '103523234234', 'spring', '23324343', 'yes', 'images/user.png', '', ''),
(40, 'rubaiya zahin', 'sunnah', 'sunnah260', '262fd345916d6767ed8bb776eed77688', 'jahinsunnah@gmail.com', '016732872378', 'spring', '2332434', 'no', 'images/user.png', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookissue`
--
ALTER TABLE `bookissue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `librarian_reg`
--
ALTER TABLE `librarian_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_reg`
--
ALTER TABLE `student_reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `bookissue`
--
ALTER TABLE `bookissue`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `librarian_reg`
--
ALTER TABLE `librarian_reg`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `student_reg`
--
ALTER TABLE `student_reg`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
