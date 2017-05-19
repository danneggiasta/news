-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2017 at 12:42 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` mediumint(9) NOT NULL,
  `label` varchar(100) NOT NULL,
  `title` varchar(200) NOT NULL,
  `header` varchar(300) NOT NULL,
  `body` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `label`, `title`, `header`, `body`) VALUES
(1, 'Home', 'Home Page', 'World News', 'Nulla vitae ultricies metus, sed consequat elit. Suspendisse nisl velit, cursus sed mattis a, varius sit amet nibh. Cras imperdiet nulla vitae euismod blandit. Sed pulvinar nibh ut dolor semper accumsan. Phasellus lorem erat, fringilla vestibulum est sit amet, lobortis tincidunt leo. Nam non posuere lorem. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc scelerisque, odio eu efficitur commodo, tortor tellus accumsan magna, ut eleifend sem velit vitae sapien. Donec nec ornare mi, sit amet mollis neque. Donec mattis sapien elit, at hendrerit diam suscipit in. In molestie ut diam vitae luctus. Duis neque lorem, ultricies eu elit vitae, malesuada varius arcu. Suspendisse lobortis blandit orci sit amet mattis.'),
(2, 'Tech', 'Tech Page', 'Technology', 'Nulla vitae ultricies metus, sed consequat elit. Suspendisse nisl velit, cursus sed mattis a, varius sit amet nibh. Cras imperdiet nulla vitae euismod blandit. Sed pulvinar nibh ut dolor semper accumsan. Phasellus lorem erat, fringilla vestibulum est sit amet, lobortis tincidunt leo. Nam non posuere lorem. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc scelerisque, odio eu efficitur commodo, tortor tellus accumsan magna, ut eleifend sem velit vitae sapien. Donec nec ornare mi, sit amet mollis neque. Donec mattis sapien elit, at hendrerit diam suscipit in. In molestie ut diam vitae luctus. Duis neque lorem, ultricies eu elit vitae, malesuada varius arcu. Suspendisse lobortis blandit orci sit amet mattis.'),
(3, 'Sport', 'Sport Page', 'Sport', 'Nulla vitae ultricies metus, sed consequat elit. Suspendisse nisl velit, cursus sed mattis a, varius sit amet nibh. Cras imperdiet nulla vitae euismod blandit. Sed pulvinar nibh ut dolor semper accumsan. Phasellus lorem erat, fringilla vestibulum est sit amet, lobortis tincidunt leo. Nam non posuere lorem. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc scelerisque, odio eu efficitur commodo, tortor tellus accumsan magna, ut eleifend sem velit vitae sapien. Donec nec ornare mi, sit amet mollis neque. Donec mattis sapien elit, at hendrerit diam suscipit in. In molestie ut diam vitae luctus. Duis neque lorem, ultricies eu elit vitae, malesuada varius arcu. Suspendisse lobortis blandit orci sit amet mattis.'),
(4, 'Weather', 'Weateher Page', 'Weather', 'Nulla vitae ultricies metus, sed consequat elit. Suspendisse nisl velit, cursus sed mattis a, varius sit amet nibh. Cras imperdiet nulla vitae euismod blandit. Sed pulvinar nibh ut dolor semper accumsan. Phasellus lorem erat, fringilla vestibulum est sit amet, lobortis tincidunt leo. Nam non posuere lorem. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc scelerisque, odio eu efficitur commodo, tortor tellus accumsan magna, ut eleifend sem velit vitae sapien. Donec nec ornare mi, sit amet mollis neque. Donec mattis sapien elit, at hendrerit diam suscipit in. In molestie ut diam vitae luctus. Duis neque lorem, ultricies eu elit vitae, malesuada varius arcu. Suspendisse lobortis blandit orci sit amet mattis.'),
(5, 'About', 'About Page', 'About', 'Nulla vitae ultricies metus, sed consequat elit. Suspendisse nisl velit, cursus sed mattis a, varius sit amet nibh. Cras imperdiet nulla vitae euismod blandit. Sed pulvinar nibh ut dolor semper accumsan. Phasellus lorem erat, fringilla vestibulum est sit amet, lobortis tincidunt leo. Nam non posuere lorem. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc scelerisque, odio eu efficitur commodo, tortor tellus accumsan magna, ut eleifend sem velit vitae sapien. Donec nec ornare mi, sit amet mollis neque. Donec mattis sapien elit, at hendrerit diam suscipit in. In molestie ut diam vitae luctus. Duis neque lorem, ultricies eu elit vitae, malesuada varius arcu. Suspendisse lobortis blandit orci sit amet mattis.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first` varchar(255) NOT NULL,
  `last` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first`, `last`, `email`, `pass`, `status`) VALUES
(32, 'a', 'a', 'asdas@asdsad', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
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
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
