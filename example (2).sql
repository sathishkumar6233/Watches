-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2024 at 07:11 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `example`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcart`
--

CREATE TABLE `addcart` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `price` varchar(250) NOT NULL,
  `qty` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addcart`
--

INSERT INTO `addcart` (`id`, `userId`, `name`, `image`, `price`, `qty`) VALUES
(142, 25, 'SHEPARD PINK', 'arrival-2.png', '589', 1),
(143, 0, 'TERJAN GOLD ', 'arrival-1.png', '890', 0),
(144, 0, 'TERJAN GOLD ', 'arrival-1.png', '890', 0);

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `imagePath` varchar(256) DEFAULT NULL,
  `title` varchar(256) DEFAULT NULL,
  `subpara` varchar(250) NOT NULL,
  `price` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `imagePath`, `title`, `subpara`, `price`) VALUES
(1, 'header.png', 'NEW WATCH COLLECTION 2024', 'Discover the perfect blend of innovation, craftsmanship, and elegance         as you browse through our meticulously curated collection.', '₹1245');

-- --------------------------------------------------------

--
-- Table structure for table `feature`
--
-- Error reading structure for table example.feature: #1932 - Table &#039;example.feature&#039; doesn&#039;t exist in engine
-- Error reading data for table example.feature: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `example`.`feature`&#039; at line 1

-- --------------------------------------------------------

--
-- Table structure for table `navgation`
--

CREATE TABLE `navgation` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `url` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `navgation`
--

INSERT INTO `navgation` (`id`, `name`, `url`) VALUES
(1, 'Home', './index.php'),
(2, 'Blog', './Blog.php'),
(3, 'Shop', './shop.php'),
(4, 'Cart', './cart.php');

-- --------------------------------------------------------

--
-- Table structure for table `newarrival`
--

CREATE TABLE `newarrival` (
  `id` int(11) NOT NULL,
  `img` varchar(250) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `price` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newarrival`
--

INSERT INTO `newarrival` (`id`, `img`, `title`, `price`) VALUES
(1, 'arrival-1.png', 'TERJAN GOLD ', '890'),
(2, 'arrival-2.png', 'SHEPARD PINK', '589'),
(24, '66a874ea428e91.38412468.png', ' Breitling', '400'),
(25, '66a87512984ed3.26483122.png', ' Cartier', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `newarrivals`
--
-- Error reading structure for table example.newarrivals: #1932 - Table &#039;example.newarrivals&#039; doesn&#039;t exist in engine
-- Error reading data for table example.newarrivals: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `example`.`newarrivals`&#039; at line 1

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `img` varchar(250) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `para` varchar(250) DEFAULT NULL,
  `subpara` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `img`, `title`, `para`, `subpara`) VALUES
(1, 'assets/client-1.jpg', 'I never expected such an extensive range of watches catered\r\n                  to various tastes and preferences. It was challenging to\r\n                  choose just one! The service was impeccable, making my\r\n                  shopping experience t', 'Michael Chen', 'Financial Analyst');

-- --------------------------------------------------------

--
-- Table structure for table `story`
--

CREATE TABLE `story` (
  `id` int(11) NOT NULL,
  `imagePath` varchar(250) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `para` varchar(250) DEFAULT NULL,
  `subPara` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `story`
--

INSERT INTO `story` (`id`, `imagePath`, `title`, `para`, `subPara`) VALUES
(1, 'story.png', 'OUR STORY', 'Inspirational Watch Of This Year', 'Each timepiece featured in this collection embodies the pinnacle of\r\n          horological artistry, blending cutting-edge design with unparalleled\r\n          functionality.');

-- --------------------------------------------------------

--
-- Table structure for table `subadmin`
--

CREATE TABLE `subadmin` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(256) NOT NULL,
  `updatedaon` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subadmin`
--

INSERT INTO `subadmin` (`id`, `name`, `email`, `password`, `updatedaon`) VALUES
(1, 'sathish', 'sathishkutta59@gmail.com', '$2y$10$NwgQ32tLhw7G4j83cjzTP.rY1G6BTEVK0fOm9f4NGjdX1Qjl3gcNK', '2024-07-30 16:32:12'),
(3, 'kumar', 'www.sathis19799@gmail.com', '$2y$10$2boZQB3ex/3J0WAjlamfQu5kPK0.s9PfBi.SpN6m.XSmbVInsFfmK', '2024-07-30 16:54:08'),
(4, 'sathish', 'ringlestr@gmail.com', '$2y$10$UWK8NJdaiMcRBegG.LxyvuRZfbfCxxEm13ZNfWjvi24qC/56aCEE6', '2024-08-03 05:36:32');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `image`, `price`) VALUES
(1, 'Samsung J2 Pro', '1.jpg', 100.00),
(2, 'HP Notebook', '2.jpg', 299.00),
(3, 'Panasonic T44 Lite', '3.jpg', 125.00);

-- --------------------------------------------------------

--
-- Table structure for table `tes`
--

CREATE TABLE `tes` (
  `id` int(11) NOT NULL,
  `img1` varchar(250) DEFAULT NULL,
  `para` varchar(250) DEFAULT NULL,
  `img2` varchar(250) DEFAULT NULL,
  `title1` varchar(250) DEFAULT NULL,
  `title2` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `img1` varchar(250) DEFAULT NULL,
  `para` varchar(250) DEFAULT NULL,
  `img2` varchar(250) DEFAULT NULL,
  `title1` varchar(250) DEFAULT NULL,
  `title2` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `userlist`
--
-- Error reading structure for table example.userlist: #1932 - Table &#039;example.userlist&#039; doesn&#039;t exist in engine
-- Error reading data for table example.userlist: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `example`.`userlist`&#039; at line 1

-- --------------------------------------------------------

--
-- Table structure for table `userlists`
--

CREATE TABLE `userlists` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `conformpassword` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userlists`
--

INSERT INTO `userlists` (`id`, `name`, `email`, `password`, `conformpassword`) VALUES
(24, 'porani', 'porani12@gmail.com', 'Porani@12', 'Porani@12'),
(25, 'sathish', 'sathishkutta59@gmail.com', 'Sathish@123', 'Sathish@123'),
(26, 'kumar', 'kumar@gmail.com', 'Sathish@123', 'Sathish@123'),
(27, 'anu', 'anuskha@gmail.com', 'Anu@12345', 'Anu@12345');

-- --------------------------------------------------------

--
-- Table structure for table `watchcollection`
--

CREATE TABLE `watchcollection` (
  `id` int(11) NOT NULL,
  `img` varchar(250) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `price` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `watchcollection`
--

INSERT INTO `watchcollection` (`id`, `img`, `title`, `price`) VALUES
(1, 'arrival-1.png', 'TERJAN GOLD', '890'),
(2, 'arrival-2.png', 'SHEPARD PINK', '589'),
(3, 'arrival-3.png', 'TITAN BLACK', '678'),
(4, 'arrival-4.png', 'ADERTICA WHITE', '570');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcart`
--
ALTER TABLE `addcart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navgation`
--
ALTER TABLE `navgation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newarrival`
--
ALTER TABLE `newarrival`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `story`
--
ALTER TABLE `story`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subadmin`
--
ALTER TABLE `subadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tes`
--
ALTER TABLE `tes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlists`
--
ALTER TABLE `userlists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `watchcollection`
--
ALTER TABLE `watchcollection`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcart`
--
ALTER TABLE `addcart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `navgation`
--
ALTER TABLE `navgation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `newarrival`
--
ALTER TABLE `newarrival`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `story`
--
ALTER TABLE `story`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subadmin`
--
ALTER TABLE `subadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tes`
--
ALTER TABLE `tes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userlists`
--
ALTER TABLE `userlists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `watchcollection`
--
ALTER TABLE `watchcollection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
