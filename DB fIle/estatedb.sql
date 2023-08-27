-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2023 at 10:19 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `estatedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) CHARACTER SET latin1 NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `agents_details`
--

CREATE TABLE `agents_details` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  `phone_number` varchar(30) NOT NULL,
  `image` varchar(30) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agents_details`
--

INSERT INTO `agents_details` (`id`, `fullname`, `email`, `password`, `phone_number`, `image`, `address`) VALUES
(1, 'Sani', 'sanimusa@gmail.com', '12345', '08076341234', 'Dan Musa Pic.jpg', 'No. 10 Court Road, Kano State'),
(2, 'Abdullahi Musa', 'abdullahi@gmail.com', '', '08011255335', 'FB_IMG_16712160377613324~2.jpg', 'Court Road');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) CHARACTER SET latin1 NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 NOT NULL,
  `contact_no` varchar(15) CHARACTER SET latin1 NOT NULL,
  `comments` varchar(255) CHARACTER SET latin1 NOT NULL,
  `date` datetime NOT NULL,
  `p_id` int(11) DEFAULT NULL,
  `owner_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `Name`, `email`, `contact_no`, `comments`, `date`, `p_id`, `owner_id`) VALUES
(5, 'Abdurrahman', 'sarkiabdul750@gmail.com', '08034588412', 'Hello hy', '2005-05-23 06:03:00', 2, 1),
(6, 'Abba', 'abba@gmail.com', '08047937595', 'Hello, I am interested on your property', '2005-05-23 06:05:00', 5, 1),
(7, 'Abdurrahman', 'sarkiabdul750@gmail.com', '08034588412', 'hgvvg', '2006-05-23 10:00:00', 2, 1),
(8, 'Aliyu', 'aliyulegend92@gmail.com', '08064378767', 'Hello Sarkin Basu', '2006-05-23 11:43:00', 1, 2),
(25, 'Abdurrahman', 'sarkiabdul750@gmail.com', '08034588412', 'v cfvyzxc', '2006-05-23 06:08:00', 2, 1),
(26, 'Abdurrahman', 'sarkiabdul750@gmail.com', '08034588412', 'Hello Legend!', '2006-05-23 06:14:00', 2, 1),
(27, 'Aliyu', 'aliyulegend92@gmail.com', '08064378767', 'Hello Sarki', '2006-05-23 06:14:00', 1, 2),
(28, 'vcv', 'aa@gmail.com', '08046282648', 'b bch', '2006-05-23 08:38:00', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `flats`
--

CREATE TABLE `flats` (
  `id` int(11) NOT NULL,
  `area` varchar(100) CHARACTER SET latin1 NOT NULL,
  `price` varchar(100) CHARACTER SET latin1 NOT NULL,
  `status` varchar(55) CHARACTER SET latin1 NOT NULL,
  `agent_name` varchar(100) NOT NULL,
  `pic` varchar(255) CHARACTER SET latin1 NOT NULL,
  `pic2` varchar(255) CHARACTER SET latin1 NOT NULL,
  `location` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_nopad_ci NOT NULL,
  `discription` varchar(255) CHARACTER SET latin1 NOT NULL,
  `Date` datetime NOT NULL,
  `rooms` varchar(20) CHARACTER SET latin1 NOT NULL,
  `bathrooms` varchar(20) CHARACTER SET latin1 NOT NULL,
  `garage` varchar(10) CHARACTER SET latin1 NOT NULL,
  `kitchan` varchar(10) CHARACTER SET latin1 NOT NULL,
  `u_id` int(11) NOT NULL,
  `flat_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flats`
--

INSERT INTO `flats` (`id`, `area`, `price`, `status`, `agent_name`, `pic`, `pic2`, `location`, `discription`, `Date`, `rooms`, `bathrooms`, `garage`, `kitchan`, `u_id`, `flat_status`) VALUES
(2, '1', '80000000', 'SALE', 'Musa Abba', '73df2171-0730-4406-869d-9af7c4c1363a.jpg', '73df2171-0730-4406-869d-9af7c4c1363a.jpg', 'Court Road', 'Available for sell....', '2003-06-23 11:10:00', '8', '4', '1', '4', 2, 0),
(3, '1', '12000000', 'SALE', 'Sani', 'sarki 2.jpg', 'sarki 4.jpg', 'Court Road', 'Availabe for sell.', '2016-05-23 03:03:00', '5', '4', '1', '2', 2, 1),
(23, '1', '750000', 'SALE', '1', '73df2171-0730-4406-869d-9af7c4c1363a.jpg', '73df2171-0730-4406-869d-9af7c4c1363a.jpg', 't fcvg', 'fv kv ', '2021-05-23 01:09:00', '12', '4', '0', '2', 2, 1),
(24, '1', '34000000', 'SALE', '2', '73df2171-0730-4406-869d-9af7c4c1363a.jpg', '73df2171-0730-4406-869d-9af7c4c1363a.jpg', 'vy lvhu', 'v clu c', '2003-06-23 09:47:00', '7', '4', '1', '1', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `lands`
--

CREATE TABLE `lands` (
  `id` int(11) NOT NULL,
  `area` varchar(100) CHARACTER SET latin1 NOT NULL,
  `price` varchar(100) CHARACTER SET latin1 NOT NULL,
  `status` varchar(55) CHARACTER SET latin1 NOT NULL,
  `agent_name` varchar(100) NOT NULL,
  `pic` varchar(255) CHARACTER SET latin1 NOT NULL,
  `pic2` varchar(255) CHARACTER SET latin1 NOT NULL,
  `location` varchar(255) CHARACTER SET latin1 NOT NULL,
  `discription` varchar(255) CHARACTER SET latin1 NOT NULL,
  `Date` datetime NOT NULL,
  `u_id` int(11) NOT NULL,
  `land_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lands`
--

INSERT INTO `lands` (`id`, `area`, `price`, `status`, `agent_name`, `pic`, `pic2`, `location`, `discription`, `Date`, `u_id`, `land_status`) VALUES
(4, '1', '34000000', 'SALE', '1', '73df2171-0730-4406-869d-9af7c4c1363a.jpg', '73df2171-0730-4406-869d-9af7c4c1363a.jpg', 'gggvg', '`vdk cvc', '2003-06-23 09:44:00', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) CHARACTER SET latin1 NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 NOT NULL,
  `subject` varchar(100) CHARACTER SET latin1 NOT NULL,
  `message` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `Name`, `email`, `subject`, `message`) VALUES
(1, 'Aliyu Ishaq', 'aliyuishaq102@gmail.com', 'ggdfbvhgbvhv', 'vdcbv hvbk vbv vbk');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) CHARACTER SET latin1 NOT NULL,
  `reply` varchar(255) CHARACTER SET latin1 NOT NULL,
  `date` datetime NOT NULL,
  `p_id` int(11) DEFAULT NULL,
  `message_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`id`, `Name`, `reply`, `date`, `p_id`, `message_id`) VALUES
(17, 'Abdurrahman', 'v bhv', '2006-05-23 07:02:00', 2, 27),
(19, 'Abdurrahman', 'Yes', '2008-05-23 11:30:00', 2, 8),
(20, 'Aliyu', 'guio kmb', '2008-05-23 11:31:00', 1, 26);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) CHARACTER SET latin1 NOT NULL,
  `F_name` varchar(100) CHARACTER SET latin1 NOT NULL,
  `Address` varchar(255) CHARACTER SET latin1 NOT NULL,
  `cnic_no` varchar(20) CHARACTER SET latin1 NOT NULL,
  `contact_no` varchar(20) CHARACTER SET latin1 NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 NOT NULL,
  `image` varchar(255) CHARACTER SET latin1 NOT NULL,
  `user_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Name`, `F_name`, `Address`, `cnic_no`, `contact_no`, `email`, `password`, `image`, `user_status`) VALUES
(1, 'Aliyu', 'Ishaq Abdullahi', 'Naibawa', '123456789012342', '08064378767', 'aliyulegend92@gmail.com', '123456', 'Aliyu.jpg', 1),
(2, 'Abdurrahman', 'Abdullahi Adam', 'Court Road', '123456789012340', '08034588412', 'sarkiabdul750@gmail.com', '123456', 'sarkin basu.jpg', 1),
(3, 'Zainab', 'Badamasi Bature', 'Rijiyar Zaki, Kano State', '112233445566778', '09060383304', 'zainabbadamasibature2020@gmail.com', '12345', 'images.png', 1),
(4, 'Bello', 'Azaharuddeen', 'Buk New Site', '445567945738628', '08162666514', 'bello@gmail.com', '12345', 'pngtree-businessman-user-avatar-free-vector-png-image_1538405.jpg', 1),
(5, 'Abba', 'Muhammed', 'Naibawa', '0', '08047937595', 'abba@gmail.com', '123456', 'Ahmad Photo.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agents_details`
--
ALTER TABLE `agents_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flats`
--
ALTER TABLE `flats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lands`
--
ALTER TABLE `lands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `agents_details`
--
ALTER TABLE `agents_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `flats`
--
ALTER TABLE `flats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `lands`
--
ALTER TABLE `lands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
