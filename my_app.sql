-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2022 at 06:14 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `mail` varchar(250) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `cpass` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `phn` varchar(255) NOT NULL,
  `height` int(20) NOT NULL,
  `weight` int(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `fname`, `lname`, `mail`, `pass`, `cpass`, `dob`, `phn`, `height`, `weight`, `gender`, `image`, `status`) VALUES
(1, 'Venkat', 'S', 'venkatesh@gmail.com', '123', '123', '1998-11-19', '8754140467', 155, 66, 'Male', 'wallpaperflare.com_wallpaper.jpg', 1),
(2, 'Venkateshsa', 'S', 'venkat@gmail.com', '123', '123', '2022-09-23', '8754140467', 768, 1213, 'Male', 'wallpaperflare.com_wallpaper.jpg', 0),
(3, 'Venkatesh', 'S', 'venkat@gmail.com', '12', '12', '2022-09-15', '8754140467', 768, 12, 'Male', 'wallpaperflare.com_wallpaper.jpg', 0),
(4, 'Venkatesh2', 'S', 'venkat@gmail.com', '123', '123', '2022-09-22', '8754140467', 768, 546, 'Male', 'wallpaperflare.com_wallpaper.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Venkat', 'johnwickrenault@gmail.com', '$2y$10$WV8yXdxe3eA6KkrkmBby0OPYoE4/wbWMbIFPo9nDy/e.3xHaO7yBK'),
(2, 'Venkatesh', 'venkatsudalai19@gmail.com', '$2y$10$De.S2U2uDF7GUDePzBM84uY61HVybkHS8vXagm8hHG0Z36VmPyA.u');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
