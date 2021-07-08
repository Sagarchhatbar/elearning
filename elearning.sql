-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2020 at 12:05 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elearning`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(50) NOT NULL,
  `pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `pass`) VALUES
('d19ce154@charusat.edu.in', 'd19ce154'),
('d19ce157@charusat.edu.in', 'd19ce157'),
('d19ce158@charusat.edu.in', 'd19ce158'),
('d19ce161@charusat.edu.in', 'd19ce161');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id_msg` int(11) NOT NULL,
  `uname` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(100) NOT NULL,
  `ctime` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id_msg`, `uname`, `email`, `subject`, `message`, `ctime`) VALUES
(3, 'Sagaer', 'sagar.chhart@gmail.c', 'material req', 'ccxz', ''),
(4, 'hemie', 'hemil.so9@gmail.com', 'material req', 'azx', ''),
(5, 'hemie', 'hemil.so9@gmail.com', 'material req', 'azx', ''),
(6, 'Sagaer', 'hemil.so9@gmail.com', 'material req', 'gffghhgfdfghgjhgcfghgfghgf', ''),
(7, 'hemienew', 'hemilnew.so9@gmail.c', 'asxcxnew', 'newnwewnewnewnenwenw\r\n', ''),
(8, 'hemienew', 'hemilnew.so9@gmail.c', 'asxcxnew', 'newnwewnewnewnenwenw\r\n', ''),
(9, 'hemie', 'hemil.so9@gmail.com', 'asxcx', 'sdfgjjnbvcxzxcvbnds', ''),
(10, 'hemie', 'hemil.so9@gmail.com', 'asxcx', 'sdfgjjnbvcxzxcvbnds', ''),
(11, 'hemie', 'hemil.so9@gmail.com', 'material req', 'qwertynbxz', ''),
(12, 'hemie', 'hemil.so9@gmail.com', 'material req', 'qwertynbxz', ''),
(13, 'fnal', 'final@gmail.com', 'final', 'heyehddb', ''),
(14, 'FINAL', 'final@gmail.com', 'FINAL', 'HEYEYEY', ''),
(15, 'hemie', 'date@gmail.com', 'material req', 'date check kar to', 'Apr,03,2020 07:'),
(16, 'hemie', 'date@gmail.com', 'material req', 'date check kar to', 'Apr,03,2020 10:');

-- --------------------------------------------------------

--
-- Table structure for table `login_record`
--

CREATE TABLE `login_record` (
  `id` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `paas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(6) NOT NULL,
  `fnm` varchar(20) NOT NULL,
  `mnm` varchar(20) NOT NULL,
  `lnm` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `user_type` varchar(10) NOT NULL,
  `institue` varchar(50) NOT NULL,
  `pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `fnm`, `mnm`, `lnm`, `email`, `user_type`, `institue`, `pass`) VALUES
(0, 'Soni', 'hemil', 'bhabhab', 'hemil.so9@gmail.com', 'student', 'Charotar', 'hems'),
(0, 'Soni', 'hemil', 'bhabhab', 'hemilsoni@gmail.com', 'student', 'Charotar', 'hemil'),
(0, 'Hemil', 'Hareshbhai', 'Soni', 'hemil.so9@gmail.com', 'student', 'Charotar', 'hemil'),
(0, 'sagar', '12345678909876', 'chhatbar', 'sagar@gmail.com', 'student', 'Charotar', 'sagar123'),
(0, 'Hemil', 'hemil', 'bhabhab', 'hemil.so9@gmail.com', 'student', 'Charotar', '123'),
(0, 'Dodi', 'j', 'Tank', 'd123@gmail.com', 'student', 'Charotar', '123'),
(0, 'madhavan', 'H', 'Rajpura', 'rajpura.madhavan@gmail.com', 'student', 'Charotar', ''),
(0, 'madhavan', 'H', 'Soni', 'rajpura.madhavan@gmail.com', 'student', 'Charotar', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id_msg`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id_msg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
