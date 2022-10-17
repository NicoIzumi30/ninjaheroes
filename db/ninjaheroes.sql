-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2022 at 12:21 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ninjaheroes`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `claim_p` int(1) NOT NULL,
  `claim_d` int(1) NOT NULL,
  `pass` varchar(256) NOT NULL,
  `point` int(4) NOT NULL DEFAULT 0,
  `dollar` int(4) NOT NULL DEFAULT 0,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `email`, `claim_p`, `claim_d`, `pass`, `point`, `dollar`, `date`) VALUES
(19, 'heni@gmail.comnico', 0, 0, '121233', 0, 80, '2022-10-09 11:16:20'),
(20, 'akuhaha@gmail.com', 0, 0, '89219219', 0, 80, '2022-10-09 11:26:47'),
(21, 'izumi@mail.com', 0, 0, '121233', 93, 100, '2022-10-10 09:16:56'),
(22, 'aku@gmail.com', 1, 1, '121233', 100, 100, '2022-10-16 10:26:30');

-- --------------------------------------------------------

--
-- Table structure for table `data_submit`
--

CREATE TABLE `data_submit` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `pass` varchar(256) NOT NULL,
  `server` int(1) NOT NULL,
  `item` varchar(128) NOT NULL,
  `point` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_submit`
--

INSERT INTO `data_submit` (`id`, `email`, `pass`, `server`, `item`, `point`) VALUES
(1, '', '', 5, 'Class S Scroll x10', 15),
(2, '', '', 3, 'S Gear Box x1', 5),
(3, '', '', 4, 'S Gear Box x1', 5),
(4, '', '', 2, 'Class S Scroll x10', 15),
(5, '', '', 4, 'Class S Scroll x10', 15),
(6, '', '', 4, 'SS Ninja Box x1', 50),
(7, '', '', 5, 'SSS Byron Naruto Card x50', 50),
(8, '', '', 5, 'Class A Scroll x30', 10),
(9, '', '', 4, 'S Gear Box x1', 5),
(10, '', '', 7, 'Stamina Bag x2', 1),
(11, '', '', 5, 'Class A Scroll x30', 10),
(12, '', '', 6, 'Class S Scroll x10', 15),
(13, '', '', 3, 'Secret of Heaven x50', 20),
(14, '', '', 3, 'SS Ninja Box x1', 50),
(15, '', '', 3, 'SS Ninja Box x1', 50),
(16, '', '', 4, 'Ninja SSS Boruto Karma Mode x1', 70),
(17, '', '', 4, 'Ninja S Tsunade', 7),
(18, '', '', 3, 'Ninja S Itachi x1', 7),
(19, '', '', 4, 'Class S Scroll x10', 10),
(20, 'izumi@mail.com', '121233', 3, 'Ninja S Boruto x1', 7),
(21, 'izumi@mail.com', '121233', 3, 'Ninja S Boruto x1', 7),
(22, 'izumi@mail.com', '121233', 5, 'Ninja S Sage Naruto x1', 7),
(23, 'izumi@mail.com', '121233', 5, 'Ninja S Boruto x1', 7),
(24, 'aku@gmail.com', '121233', 5, 'S Gear Box x1', 5),
(25, 'aku@gmail.com', '121233', 5, 'S Gear Box x1', 5),
(26, 'aku@gmail.com', '121233', 5, 'Class S Scroll x10', 15),
(27, 'aku@gmail.com', '121233', 4, 'Class A Scroll x30', 10);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `class` varchar(128) NOT NULL,
  `data-priode` int(3) NOT NULL,
  `data-id` int(3) NOT NULL,
  `data-name` varchar(128) NOT NULL,
  `data-point` int(3) NOT NULL,
  `img` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `class`, `data-priode`, `data-id`, `data-name`, `data-point`, `img`) VALUES
(1, 'anbuRedeem', 1, 3, 'Stamina Bag x2', 1, 'https://www.kageherostudio.com/assets/filemanager/source/event/Stamina%20Bag.png'),
(2, 'anbuRedeem', 1, 5, 'S Gear Box x1', 5, 'https://kageherostudio.com/assets/filemanager/source/event/Class-S Gear Box.png'),
(3, 'grayscale', 1, 13, 'Class A Scroll x30', 10, 'https://kageherostudio.com/assets/filemanager/source/event/Class-A Scroll.png'),
(4, 'anbuRedeem', 1, 14, 'Class S Scroll x10', 15, 'https://kageherostudio.com/assets/filemanager/source/event/Class-S Scroll.png'),
(5, 'anbuRedeem', 1, 15, 'Secret of Heaven x50', 20, 'https://kageherostudio.com/assets/filemanager/source/event/SECRET OF HEAVEN.png'),
(6, 'anbuRedeem', 1, 16, 'Beast Chakra Bag x70', 25, 'https://kageherostudio.com/assets/filemanager/source/event/Stamina Bag.png'),
(7, 'anbuRedeem', 1, 17, 'S Ninja Box x1', 30, 'https://kageherostudio.com/assets/filemanager/source/event/Class-S Gear Box.png'),
(8, 'anbuRedeem', 1, 18, 'SS Gear Box x4', 40, 'https://kageherostudio.com/assets/filemanager/source/event/Class-SS Gear Box.png'),
(9, 'anbuRedeem reward-star', 1, 19, 'SS Ninja Box x1', 50, 'https://kageherostudio.com/assets/filemanager/source/event/Class-SS Gear Box.png'),
(10, 'anbuRedeem reward-star', 1, 20, 'SSS Boruto Karma Mode Card x70', 60, 'https://kageherostudio.com/assets/filemanager/source/event/Ninja SSS - Boruto Otsusuki Mode.png'),
(11, 'anbuRedeem reward-star', 1, 21, 'Ninja SSS Boruto Karma Mode x1', 70, 'https://kageherostudio.com/assets/filemanager/source/event/Ninja SSS - Boruto Otsusuki Mode.png');

-- --------------------------------------------------------

--
-- Table structure for table `item_user`
--

CREATE TABLE `item_user` (
  `id` int(11) NOT NULL,
  `id_account` int(11) NOT NULL,
  `class` varchar(128) NOT NULL,
  `data-priode` int(3) NOT NULL,
  `data-id` int(3) NOT NULL,
  `data-name` varchar(128) NOT NULL,
  `data-point` int(3) NOT NULL,
  `img` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item_user`
--

INSERT INTO `item_user` (`id`, `id_account`, `class`, `data-priode`, `data-id`, `data-name`, `data-point`, `img`) VALUES
(1, 19, 'grayscale', 1, 3, 'Stamina Bag x2', 1, 'https://www.kageherostudio.com/assets/filemanager/source/event/Stamina%20Bag.png'),
(2, 19, 'grayscale', 1, 5, 'S Gear Box x1', 5, 'https://kageherostudio.com/assets/filemanager/source/event/Class-S Gear Box.png'),
(3, 19, 'grayscale', 1, 13, 'Class A Scroll x30', 10, 'https://kageherostudio.com/assets/filemanager/source/event/Class-A Scroll.png'),
(4, 19, 'grayscale', 1, 14, 'Class S Scroll x10', 15, 'https://kageherostudio.com/assets/filemanager/source/event/Class-S Scroll.png'),
(5, 19, 'grayscale', 1, 15, 'Secret of Heaven x50', 20, 'https://kageherostudio.com/assets/filemanager/source/event/SECRET OF HEAVEN.png'),
(6, 19, 'anbuRedeem', 1, 16, 'Beast Chakra Bag x70', 25, 'https://kageherostudio.com/assets/filemanager/source/event/Stamina Bag.png'),
(7, 19, 'anbuRedeem', 1, 17, 'S Ninja Box x1', 30, 'https://kageherostudio.com/assets/filemanager/source/event/Class-S Gear Box.png'),
(8, 19, 'anbuRedeem', 1, 18, 'SS Gear Box x4', 40, 'https://kageherostudio.com/assets/filemanager/source/event/Class-SS Gear Box.png'),
(9, 19, 'anbuRedeem reward-star', 1, 19, 'SS Ninja Box x1', 50, 'https://kageherostudio.com/assets/filemanager/source/event/Class-SS Gear Box.png'),
(10, 19, 'anbuRedeem reward-star', 1, 20, 'SSS Boruto Karma Mode Card x70', 60, 'https://kageherostudio.com/assets/filemanager/source/event/Ninja SSS - Boruto Otsusuki Mode.png'),
(11, 19, 'anbuRedeem', 1, 21, 'Ninja SSS Boruto Karma Mode x1', 70, 'https://kageherostudio.com/assets/filemanager/source/event/Ninja SSS - Boruto Otsusuki Mode.png'),
(12, 20, 'anbuRedeem', 1, 3, 'Stamina Bag x2', 1, 'https://www.kageherostudio.com/assets/filemanager/source/event/Stamina%20Bag.png'),
(13, 20, 'anbuRedeem', 1, 5, 'S Gear Box x1', 5, 'https://kageherostudio.com/assets/filemanager/source/event/Class-S Gear Box.png'),
(14, 20, 'anbuRedeem', 1, 13, 'Class A Scroll x30', 10, 'https://kageherostudio.com/assets/filemanager/source/event/Class-A Scroll.png'),
(15, 20, 'anbuRedeem', 1, 14, 'Class S Scroll x10', 15, 'https://kageherostudio.com/assets/filemanager/source/event/Class-S Scroll.png'),
(16, 20, 'anbuRedeem', 1, 15, 'Secret of Heaven x50', 20, 'https://kageherostudio.com/assets/filemanager/source/event/SECRET OF HEAVEN.png'),
(17, 20, 'anbuRedeem', 1, 16, 'Beast Chakra Bag x70', 25, 'https://kageherostudio.com/assets/filemanager/source/event/Stamina Bag.png'),
(18, 20, 'anbuRedeem', 1, 17, 'S Ninja Box x1', 30, 'https://kageherostudio.com/assets/filemanager/source/event/Class-S Gear Box.png'),
(19, 20, 'anbuRedeem', 1, 18, 'SS Gear Box x4', 40, 'https://kageherostudio.com/assets/filemanager/source/event/Class-SS Gear Box.png'),
(20, 20, 'grayscale', 1, 19, 'SS Ninja Box x1', 50, 'https://kageherostudio.com/assets/filemanager/source/event/Class-SS Gear Box.png'),
(21, 20, 'anbuRedeem reward-star', 1, 20, 'SSS Boruto Karma Mode Card x70', 60, 'https://kageherostudio.com/assets/filemanager/source/event/Ninja SSS - Boruto Otsusuki Mode.png'),
(22, 20, 'grayscale', 1, 21, 'Ninja SSS Boruto Karma Mode x1', 70, 'https://kageherostudio.com/assets/filemanager/source/event/Ninja SSS - Boruto Otsusuki Mode.png'),
(23, 21, 'anbuRedeem', 1, 3, 'Stamina Bag x2', 1, 'https://www.kageherostudio.com/assets/filemanager/source/event/Stamina%20Bag.png'),
(24, 21, 'anbuRedeem', 1, 5, 'S Gear Box x1', 5, 'https://kageherostudio.com/assets/filemanager/source/event/Class-S Gear Box.png'),
(25, 21, 'anbuRedeem', 1, 13, 'Class A Scroll x30', 10, 'https://kageherostudio.com/assets/filemanager/source/event/Class-A Scroll.png'),
(26, 21, 'anbuRedeem', 1, 14, 'Class S Scroll x10', 15, 'https://kageherostudio.com/assets/filemanager/source/event/Class-S Scroll.png'),
(27, 21, 'anbuRedeem', 1, 15, 'Secret of Heaven x50', 20, 'https://kageherostudio.com/assets/filemanager/source/event/SECRET OF HEAVEN.png'),
(28, 21, 'anbuRedeem', 1, 16, 'Beast Chakra Bag x70', 25, 'https://kageherostudio.com/assets/filemanager/source/event/Stamina Bag.png'),
(29, 21, 'anbuRedeem', 1, 17, 'S Ninja Box x1', 30, 'https://kageherostudio.com/assets/filemanager/source/event/Class-S Gear Box.png'),
(30, 21, 'anbuRedeem', 1, 18, 'SS Gear Box x4', 40, 'https://kageherostudio.com/assets/filemanager/source/event/Class-SS Gear Box.png'),
(31, 21, 'anbuRedeem reward-star', 1, 19, 'SS Ninja Box x1', 50, 'https://kageherostudio.com/assets/filemanager/source/event/Class-SS Gear Box.png'),
(32, 21, 'anbuRedeem reward-star', 1, 20, 'SSS Boruto Karma Mode Card x70', 60, 'https://kageherostudio.com/assets/filemanager/source/event/Ninja SSS - Boruto Otsusuki Mode.png'),
(33, 21, 'anbuRedeem', 1, 21, 'Ninja SSS Boruto Karma Mode x1', 70, 'https://kageherostudio.com/assets/filemanager/source/event/Ninja SSS - Boruto Otsusuki Mode.png'),
(34, 22, 'anbuRedeem', 1, 3, 'Stamina Bag x2', 1, 'https://www.kageherostudio.com/assets/filemanager/source/event/Stamina%20Bag.png'),
(35, 22, 'grayscale', 1, 5, 'S Gear Box x1', 5, 'https://kageherostudio.com/assets/filemanager/source/event/Class-S Gear Box.png'),
(36, 22, 'grayscale', 1, 13, 'Class A Scroll x30', 10, 'https://kageherostudio.com/assets/filemanager/source/event/Class-A Scroll.png'),
(37, 22, 'grayscale', 1, 14, 'Class S Scroll x10', 15, 'https://kageherostudio.com/assets/filemanager/source/event/Class-S Scroll.png'),
(38, 22, 'anbuRedeem', 1, 15, 'Secret of Heaven x50', 20, 'https://kageherostudio.com/assets/filemanager/source/event/SECRET OF HEAVEN.png'),
(39, 22, 'anbuRedeem', 1, 16, 'Beast Chakra Bag x70', 25, 'https://kageherostudio.com/assets/filemanager/source/event/Stamina Bag.png'),
(40, 22, 'anbuRedeem', 1, 17, 'S Ninja Box x1', 30, 'https://kageherostudio.com/assets/filemanager/source/event/Class-S Gear Box.png'),
(41, 22, 'anbuRedeem', 1, 18, 'SS Gear Box x4', 40, 'https://kageherostudio.com/assets/filemanager/source/event/Class-SS Gear Box.png'),
(42, 22, 'anbuRedeem reward-star', 1, 19, 'SS Ninja Box x1', 50, 'https://kageherostudio.com/assets/filemanager/source/event/Class-SS Gear Box.png'),
(43, 22, 'anbuRedeem reward-star', 1, 20, 'SSS Boruto Karma Mode Card x70', 60, 'https://kageherostudio.com/assets/filemanager/source/event/Ninja SSS - Boruto Otsusuki Mode.png'),
(44, 22, 'anbuRedeem', 1, 21, 'Ninja SSS Boruto Karma Mode x1', 70, 'https://kageherostudio.com/assets/filemanager/source/event/Ninja SSS - Boruto Otsusuki Mode.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Nico Izumi', 'izumi@mail.com', 'default.jpg', '$2y$10$wR4tHLYloJ1gtSRO1edJyuqjh.bQe77/JBY9e7TObN4anVV/63kX.', 1, 1, 1664092535);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(4, 1, 5),
(6, 1, 6),
(11, 1, 10),
(13, 1, 12),
(14, 1, 13),
(15, 2, 1),
(16, 2, 5),
(17, 2, 11),
(18, 2, 13),
(21, 1, 2),
(22, 1, 9),
(23, 1, 11);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`, `icon`) VALUES
(1, 'Dashboard', 'fas fa-fw fa-tachometer-alt');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'administrator');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `is_active`) VALUES
(1, 1, 'Dashboard', 'dashboard', 1),
(19, 1, 'Data Akun', 'dashboard/data', 1),
(20, 1, 'Data Reward', 'dashboard/data_reward', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_submit`
--
ALTER TABLE `data_submit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_user`
--
ALTER TABLE `item_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `data_submit`
--
ALTER TABLE `data_submit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `item_user`
--
ALTER TABLE `item_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
