-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2022 at 10:38 AM
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
-- Database: `cake_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `body` text DEFAULT NULL,
  `published` tinyint(1) DEFAULT 0,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `user_id`, `title`, `slug`, `body`, `published`, `created`, `modified`) VALUES
(1, 1, 'Bài viết đầu tiên', 'bai-viet-dau-tien', 'Đây là bài viết đầu tiên', 1, '2022-03-01 23:34:12', '2022-03-01 23:34:12'),
(3, 1, 'Bài viết đầu tiên 1', 'bai-viet-dau-tien-1', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic, mollitia. Veniam animi minus iusto quae dolorum aut ipsa aliquam aliquid. Eos dignissimos laborum necessitatibus eligendi voluptatem consectetur ipsam inventore. Voluptatem?\r\n', 1, '2022-03-01 23:34:12', '2022-03-01 23:34:12'),
(4, 1, 'Bài viết đầu tiên 12', 'bai-viet-dau-tien-12', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic, mollitia. Veniam animi minus iusto quae dolorum aut ipsa aliquam aliquid. Eos dignissimos laborum necessitatibus eligendi voluptatem consectetur ipsam inventore. Voluptatem?\r\n', 1, '2022-03-01 23:34:12', '2022-03-01 23:34:12'),
(5, 1, 'Bài viết đầu tiên 121', 'bai-viet-dau-tien1-12', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic, mollitia. Veniam animi minus iusto quae dolorum aut ipsa aliquam aliquid. Eos dignissimos laborum necessitatibus eligendi voluptatem consectetur ipsam inventore. Voluptatem?\r\n', 1, '2022-03-01 23:34:12', '2022-03-01 23:34:12'),
(6, 1, 'Bài viết đầu tiên 121', 'bai-viet-dau-tien-112', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic, mollitia. Veniam animi minus iusto quae dolorum aut ipsa aliquam aliquid. Eos dignissimos laborum necessitatibus eligendi voluptatem consectetur ipsam inventore. Voluptatem?\r\n', 1, '2022-03-01 23:34:12', '2022-03-01 23:34:12');

-- --------------------------------------------------------

--
-- Table structure for table `articles_tags`
--

CREATE TABLE `articles_tags` (
  `article_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `title` varchar(191) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(2) NOT NULL DEFAULT 1,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `image`, `status`, `created`, `modified`) VALUES
(1, 'cakephp@dandev.net', '123456', 'user-img/default.jpg', 0, '2022-03-01 23:34:12', '2022-03-04 09:33:46'),
(2, 'nhanacc8@gmail.com', '$2y$10$FAKR7X41nZKUmnYYkfY/s.Mx9tamFDg7KohDR8Ysq79xHQmcPprJi', 'user-img/default.jpg', 1, '2022-03-03 13:17:11', '2022-03-04 09:33:22'),
(3, 'nhanacc8@1gmail.com', '$2y$10$nl8RjzlHLdWAvr53dyniHevK1eC7eHjvlisDJodGto2e1hH9qSS5C', 'user-img/default.jpg', 0, '2022-03-03 17:27:51', '2022-03-04 09:33:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `user_key` (`user_id`);

--
-- Indexes for table `articles_tags`
--
ALTER TABLE `articles_tags`
  ADD PRIMARY KEY (`article_id`,`tag_id`),
  ADD KEY `tag_key` (`tag_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `user_key` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `articles_tags`
--
ALTER TABLE `articles_tags`
  ADD CONSTRAINT `article_key` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`),
  ADD CONSTRAINT `tag_key` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
