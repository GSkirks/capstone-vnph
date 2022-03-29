-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2021 at 02:11 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reservevision`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `cat_order` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_name`, `cat_order`) VALUES
(5, 'Announcement', '1'),
(6, 'Emergency', '2');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `h_id` int(50) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `USERNAME` varchar(50) NOT NULL,
  `dated_in` int(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `img` varchar(255) NOT NULL,
  `old_img` varchar(255) NOT NULL,
  `cat_id` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `view` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `img`, `old_img`, `cat_id`, `date`, `view`) VALUES
(34, 'Testing', 'Testing\r\nTesting Testing Reis, et al. managed a research using machine learning including Kmeans clustering for identifying false information. They focused their analysis on models that rank a randomly chosen fake news story higher than a randomly chosen fact with more than 0.85 probability. As a result, they provide a lot of contribution that are relevant to the field. First, they survey a large number of previous and related works as an attempt to implement all potential features to detect fake news. Second, their framework reveals how hard is to detect fake news, as only a small fraction of the models (only2.2%) achieve a detection performance higher than 0.85 in terms of AUC. (Reis, 2017)', '1955938698', '1692901349sana.jpg', '5', '06 Nov, 2021', 9),
(35, 'Testing 2', 'Testing 2\r\nTesting Testing Testing Reis, et al. managed a research using machine learning including Kmeans clustering for identifying false information. They focused their analysis on models that rank a randomly chosen fake news story higher than a randomly chosen fact with more than 0.85 probability. As a result, they provide a lot of contribution that are relevant to the field. First, they survey a large number of previous and related works as an attempt to implement all potential features to detect fake news. Second, their framework reveals how hard is to detect fake news, as only a small fraction of the models (only2.2%) achieve a detection performance higher than 0.85 in terms of AUC. (Reis, 2017)', '1195892141', '2025686164aaa.jpg', '6', '06 Nov, 2021', 3),
(37, 'Testing3', 'Testing Testing Testing Reis, et al. managed a research using machine learning including Kmeans clustering for identifying false information. They focused their analysis on models that rank a randomly chosen fake news story higher than a randomly chosen fact with more than 0.85 probability. As a result, they provide a lot of contribution that are relevant to the field. First, they survey a large number of previous and related works as an attempt to implement all potential features to detect fake news. Second, their framework reveals how hard is to detect fake news, as only a small fraction of the models (only2.2%) achieve a detection performance higher than 0.85 in terms of AUC. (Reis, 2017)', '21506310011.jpg', '1444455612111.png', '5', '07 Nov, 2021', 3),
(39, 'Testing4', 'Testing Testing Testing Reis, et al. managed a research using machine learning including Kmeans clustering for identifying false information. They focused their analysis on models that rank a randomly chosen fake news story higher than a randomly chosen fact with more than 0.85 probability. As a result, they provide a lot of contribution that are relevant to the field. First, they survey a large number of previous and related works as an attempt to implement all potential features to detect fake news. Second, their framework reveals how hard is to detect fake news, as only a small fraction of the models (only2.2%) achieve a detection performance higher than 0.85 in terms of AUC. (Reis, 2017)', '1994828438Screenshot_20200823_140747_com.huawei.himovie.overseas.jpg', '', '6', '07 Nov, 2021', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblautonumber`
--

CREATE TABLE `tblautonumber` (
  `id` int(11) NOT NULL,
  `start` int(11) NOT NULL,
  `end` int(11) NOT NULL,
  `increment` int(11) NOT NULL,
  `desc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblautonumber`
--

INSERT INTO `tblautonumber` (`id`, `start`, `end`, `increment`, `desc`) VALUES
(1, 1000, 109, 1, 'PROD');

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `category_id` int(11) NOT NULL,
  `category` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`category_id`, `category`) VALUES
(1, 'Boarding House'),
(2, 'Apartment');

-- --------------------------------------------------------

--
-- Table structure for table `tblcustomer`
--

CREATE TABLE `tblcustomer` (
  `C_ID` int(50) NOT NULL,
  `C_FNAME` varchar(50) NOT NULL,
  `C_LNAME` varchar(50) NOT NULL,
  `C_AGE` int(2) NOT NULL,
  `C_ADDRESS` text NOT NULL,
  `C_PNUMBER` varchar(50) NOT NULL,
  `C_GENDER` varchar(50) NOT NULL,
  `C_EMAILADD` varchar(50) NOT NULL,
  `ZIPCODE` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcustomer`
--

INSERT INTO `tblcustomer` (`C_ID`, `C_FNAME`, `C_LNAME`, `C_AGE`, `C_ADDRESS`, `C_PNUMBER`, `C_GENDER`, `C_EMAILADD`, `ZIPCODE`, `username`, `password`) VALUES
(6, 'john', 'howell', 22, 'phil', '09099818480', 'Male', 'jhowell@gmail.com', '4322', 'jwell', '$2y$10$6QTS3nb3kmh5E5MzsYaJqe1FZm9ZqNBywXcEAADMutPStUv1veO3q'),
(7, 'Jhanna', 'Atienza', 15, 'Sariaya, Quezon', '09090923871', 'Female', 'jhanna@gmail.com', '4322', 'Jhanna', '$2y$10$Nc.GHmrH0ReyOHDtbOZPyuoUAmsFuJKoTNXAVbUUOdraY1v1Amx/m'),
(9, 'John Paul', 'Atienza', 21, 'Bignay1 Sariaya, Quezon', '09200122047', 'Male', 'paul@gmail.com', '4322', 'paul', '$2y$10$TBEgq4XdeEDxdoRQfGZum..GFM5t1Dmfrm44rgAMnaGw3lUTr74M.');

-- --------------------------------------------------------

--
-- Table structure for table `tblemployee`
--

CREATE TABLE `tblemployee` (
  `emp_id` int(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `gender` varchar(50) NOT NULL,
  `age` int(2) NOT NULL,
  `position` varchar(50) NOT NULL,
  `hire_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblemployee`
--

INSERT INTO `tblemployee` (`emp_id`, `fname`, `lname`, `contact`, `email`, `address`, `gender`, `age`, `position`, `hire_date`) VALUES
(1, 'John Howell', 'Atienza', '09300122037', 'howell@gmail.com', 'Sariaya, Quezon', 'Male', 22, 'Admin', '1999-08-27'),
(2, 'Shanell', 'DeLa Cruz', '093001223211', 'shan@gmail.com', 'Batangas City, Batangas', 'Female', 21, 'Admin', '2021-11-05'),
(3, 'Lee Jarett', 'Leonardo', '09786534342', 'lee@gmail.com', 'Batangas City', 'Male', 21, 'Admin', '2019-12-02'),
(4, 'Bienvenido Jr.', 'Mendoza', '09786534342', 'bien@gmail.com', 'Batangas City', 'Male', 21, 'Admin', '2019-12-02');

-- --------------------------------------------------------

--
-- Table structure for table `tblinventory`
--

CREATE TABLE `tblinventory` (
  `transac_id` int(50) NOT NULL,
  `product_id` int(50) NOT NULL,
  `quantity` int(50) NOT NULL,
  `date_in` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblowner`
--

CREATE TABLE `tblowner` (
  `owner_id` int(11) NOT NULL,
  `owner_name` varchar(30) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblowner`
--

INSERT INTO `tblowner` (`owner_id`, `owner_name`, `contact`, `email`, `address`) VALUES
(12, 'Case Testing', '09786534213', 'case@gmail.com', 'Brgy. Alangilan, Batangas City'),
(14, 'Ben Bautista', '09786534213', 'ben@gmail.com', 'Brgy. Alangilan, Batangas City'),
(15, 'Jhanna Atienza', '09090909091', 'jhanna@gmail.com', 'Sariaya, Quezon'),
(16, 'Paul Atienza', '09080706051', 'paul@gmail.com', 'Sariaya, Quezon'),
(17, 'Pedro Penduko', '09010203045', 'pedro@gmail.com', 'Brgy. Alangilan, Batangas City');

-- --------------------------------------------------------

--
-- Table structure for table `tblproducts`
--

CREATE TABLE `tblproducts` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `price` int(20) NOT NULL,
  `profit` int(22) NOT NULL,
  `date_in` varchar(50) NOT NULL,
  `category_id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_code` varchar(11) NOT NULL,
  `status` varchar(200) NOT NULL,
  `description` longtext NOT NULL,
  `prod_pic1` varchar(222) NOT NULL,
  `prod_pic2` varchar(255) NOT NULL,
  `prod_pic3` varchar(255) NOT NULL,
  `address` varchar(222) NOT NULL,
  `name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `contact` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproducts`
--

INSERT INTO `tblproducts` (`product_id`, `product_name`, `quantity`, `price`, `profit`, `date_in`, `category_id`, `owner_id`, `user_id`, `product_code`, `status`, `description`, `prod_pic1`, `prod_pic2`, `prod_pic3`, `address`, `name`, `email`, `contact`) VALUES
(91, 'Ben Boarding House', 20, 1500, 0, '2021-11-06', 1, 14, 1, '1093', 'Available', 'Reis, et al. managed a research using machine learning including Kmeans clustering for identifying false information. They focused their analysis on models that rank a randomly chosen fake news story higher than a randomly chosen fact with more than 0.85 probability. As a result, they provide a lot of contribution that are relevant to the field. First, they survey a large number of previous and related works as an attempt to implement all potential features to detect fake news. Second, their framework reveals how hard is to detect fake news, as only a small fraction of the models (only2.2%) achieve a detection performance higher than 0.85 in terms of AUC. (Reis, 2017)', '', '', '', 'Brgy. Alangilan, Batangas City', 'Ben Bautista', 'ben@gmail.com', '09300122037'),
(92, 'Jhanna Boarding House', 25, 2000, 0, '2021-11-06', 2, 15, 1, '1094', 'Available', 'Reis, et al. managed a research using machine learning including Kmeans clustering for identifying false information. They focused their analysis on models that rank a randomly chosen fake news story higher than a randomly chosen fact with more than 0.85 probability. As a result, they provide a lot of contribution that are relevant to the field. First, they survey a large number of previous and related works as an attempt to implement all potential features to detect fake news. Second, their framework reveals how hard is to detect fake news, as only a small fraction of the models (only2.2%) achieve a detection performance higher than 0.85 in terms of AUC. (Reis, 2017)', '', '', '', 'Bignay I Sariaya, Quezon', 'Jhanna Atienza', 'jhanna@gmail.com', '09786534213'),
(93, 'Paul Boarding House', 25, 2300, 0, '2021-11-06', 1, 16, 1, '1095', 'Available', 'Reis, et al. managed a research using machine learning including Kmeans clustering for identifying false information. They focused their analysis on models that rank a randomly chosen fake news story higher than a randomly chosen fact with more than 0.85 probability. As a result, they provide a lot of contribution that are relevant to the field. First, they survey a large number of previous and related works as an attempt to implement all potential features to detect fake news. Second, their framework reveals how hard is to detect fake news, as only a small fraction of the models (only2.2%) achieve a detection performance higher than 0.85 in terms of AUC. (Reis, 2017)', '', '', '', 'Sariaya, Quezon', 'Paul Atienza', 'paul@gmail.com', '09099818480'),
(94, 'Penduko Boarding House', 15, 1300, 0, '2021-11-06', 2, 17, 1, '1096', 'Available', 'Reis, et al. managed a research using machine learning including Kmeans clustering for identifying false information. They focused their analysis on models that rank a randomly chosen fake news story higher than a randomly chosen fact with more than 0.85 probability. As a result, they provide a lot of contribution that are relevant to the field. First, they survey a large number of previous and related works as an attempt to implement all potential features to detect fake news. Second, their framework reveals how hard is to detect fake news, as only a small fraction of the models (only2.2%) achieve a detection performance higher than 0.85 in terms of AUC. (Reis, 2017)', '', '', '', 'Brgy. Alangilan, Batangas City', 'Pedro Penduko', 'pedro@gmail.com', '09099818480'),
(96, 'Test Boarding House', 29, 1200, 0, '2021-11-06', 1, 12, 1, '1098', 'Available', 'Reis, et al. managed a research using machine learning including Kmeans clustering for identifying false information. They focused their analysis on models that rank a randomly chosen fake news story higher than a randomly chosen fact with more than 0.85 probability. As a result, they provide a lot of contribution that are relevant to the field. First, they survey a large number of previous and related works as an attempt to implement all potential features to detect fake news. Second, their framework reveals how hard is to detect fake news, as only a small fraction of the models (only2.2%) achieve a detection performance higher than 0.85 in terms of AUC. (Reis, 2017)', '', '', '', 'Brgy. Alangilan, Batangas City', 'Case Testing', 'case@gmail.com', '09090909099');

-- --------------------------------------------------------

--
-- Table structure for table `tblreqs`
--

CREATE TABLE `tblreqs` (
  `D_ID` int(50) NOT NULL,
  `C_ID` int(50) NOT NULL,
  `EMP_ID` int(50) NOT NULL,
  `C_ADDRESS` text NOT NULL,
  `C_PNUMBER` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbltransac`
--

CREATE TABLE `tbltransac` (
  `transac_id` int(11) NOT NULL,
  `transac_code` int(100) NOT NULL,
  `date` varchar(50) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_code` varchar(200) NOT NULL,
  `qty` int(20) NOT NULL,
  `price` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltransac`
--

INSERT INTO `tbltransac` (`transac_id`, `transac_code`, `date`, `customer_id`, `product_code`, `qty`, `price`, `total`) VALUES
(131, 1636270192, '2021-11-06', 6, '1098', 1, 1200, 1200);

-- --------------------------------------------------------

--
-- Table structure for table `tbltransacdetail`
--

CREATE TABLE `tbltransacdetail` (
  `detail_id` int(11) NOT NULL,
  `transac_code` int(11) NOT NULL,
  `date` datetime(6) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `pay_met` varchar(30) NOT NULL,
  `totalprice` int(11) NOT NULL,
  `status` varchar(200) NOT NULL,
  `remarks` text NOT NULL,
  `add_date` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltransacdetail`
--

INSERT INTO `tbltransacdetail` (`detail_id`, `transac_code`, `date`, `customer_id`, `pay_met`, `totalprice`, `status`, `remarks`, `add_date`) VALUES
(54, 1636270192, '2021-11-06 00:00:00.000000', 6, '', 1200, 'Confirmed', 'Your request has been confirmed!', '2021-11-06 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(22) NOT NULL,
  `address` text NOT NULL,
  `position` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pass` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`user_id`, `fname`, `lname`, `email`, `contact`, `address`, `position`, `username`, `pass`) VALUES
(1, 'John Howell', 'Atienza', 'howell@gmail.com', '09099818480', 'Sariaya, Quezon', 'Admin', 'howell', '$2y$10$wFU5RcT2d6WvRiHU.t8uJepQ3D6nTRDTaFbJv774H9A86atBuKBk2'),
(2, 'Bienvenido Jr.', 'Mendoza', 'bien@gmail.com', '09300122037', 'Batangas City', 'Admin', 'bien', '$2y$10$ds1gqSSjIHq/I7c.Ly/w9eF.OPgcXyeG09wL71loBGy0qLkNzUZlS'),
(3, 'Lee Jarett', 'Leonardo', 'lee@gmail.com', '093001223211', 'Batangas City', 'Admin', 'lee', '$2y$10$l1RFNm9UyBe7o1JyO7OxfONOK1WMjbIXyd7k3PPZ1kE7/Hg0U.ysu'),
(4, 'Shanell', 'DeLa Cruz', 'shan@gmail.com', '09213213411', 'Batangas City', 'Admin', 'shan', '$2y$10$wFU5RcT2d6WvRiHU.t8uJepQ3D6nTRDTaFbJv774H9A86atBuKBk2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblautonumber`
--
ALTER TABLE `tblautonumber`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tblcustomer`
--
ALTER TABLE `tblcustomer`
  ADD PRIMARY KEY (`C_ID`);

--
-- Indexes for table `tblemployee`
--
ALTER TABLE `tblemployee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `tblowner`
--
ALTER TABLE `tblowner`
  ADD PRIMARY KEY (`owner_id`);

--
-- Indexes for table `tblproducts`
--
ALTER TABLE `tblproducts`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `FK_tblproducts_tblsupplier` (`owner_id`,`user_id`);

--
-- Indexes for table `tblreqs`
--
ALTER TABLE `tblreqs`
  ADD PRIMARY KEY (`D_ID`);

--
-- Indexes for table `tbltransac`
--
ALTER TABLE `tbltransac`
  ADD PRIMARY KEY (`transac_id`),
  ADD KEY `FK_tbltransac_details_tblcustomer` (`customer_id`);

--
-- Indexes for table `tbltransacdetail`
--
ALTER TABLE `tbltransacdetail`
  ADD PRIMARY KEY (`detail_id`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `h_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tblautonumber`
--
ALTER TABLE `tblautonumber`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblcustomer`
--
ALTER TABLE `tblcustomer`
  MODIFY `C_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tblemployee`
--
ALTER TABLE `tblemployee`
  MODIFY `emp_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblowner`
--
ALTER TABLE `tblowner`
  MODIFY `owner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tblproducts`
--
ALTER TABLE `tblproducts`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `tblreqs`
--
ALTER TABLE `tblreqs`
  MODIFY `D_ID` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbltransac`
--
ALTER TABLE `tbltransac`
  MODIFY `transac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `tbltransacdetail`
--
ALTER TABLE `tbltransacdetail`
  MODIFY `detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
