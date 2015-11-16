-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- 생성 시간: 15-11-16 11:32
-- 서버 버전: 5.6.24
-- PHP 버전: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 데이터베이스: `speldnz`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- 테이블의 덤프 데이터 `pages`
--

INSERT INTO `pages` (`id`, `title`, `content`, `parent_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'About Us', '', 0, '2015-11-16 08:20:43', NULL, NULL),
(2, 'Learning', '', 0, '2015-11-16 08:20:43', NULL, NULL),
(3, 'Dyslexia', '', 0, '2015-11-16 08:20:43', NULL, NULL),
(4, 'Dypraxia', '', 0, '2015-11-16 08:20:43', NULL, NULL),
(5, 'ADHD', '', 0, '2015-11-16 08:20:43', NULL, NULL),
(6, 'Dysgraphia', '', 0, '2015-11-16 08:20:43', NULL, NULL),
(7, 'Dyscalculia', '', 0, '2015-11-16 08:20:43', NULL, NULL),
(8, 'News & Event', '', 0, '2015-11-16 08:20:43', NULL, NULL),
(9, 'Contact Us', '', 0, '2015-11-16 08:20:43', NULL, NULL),
(10, 'FAQ', '', 0, '2015-11-16 08:20:43', NULL, NULL);

-- --------------------------------------------------------

--
-- 테이블 구조 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(300) NOT NULL,
  `lastname` varchar(300) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(300) NOT NULL,
  `contact` int(50) NOT NULL,
  `role` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` int(225) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- 테이블의 덤프 데이터 `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `address`, `contact`, `role`, `created_at`, `updated_at`, `deleted_at`, `remember_token`) VALUES
(1, 'Martin', 'Cho', 'martin.cho@gmail.com', '1', 'flat 2 87 manuka road, bayview, Auckland 0629', 211977703, 1, '2015-11-13 04:08:07', NULL, NULL, 0),
(2, 'Peter', 'Pan', 'p.p@gmail.com', '1', '12 queen street, Auckland', 12345678, NULL, '2015-11-16 09:00:49', NULL, NULL, 0),
(3, 'Ben', 'Smith', 'b.s@gmail.com', '1', '34 glenfield Road, Glenfield', 45612378, NULL, '2015-11-16 09:00:49', NULL, NULL, 0),
(4, '', '', 'marry.smith@hotmail.com', '$2y$10$pYk37ZzaytuWhS1Km91yweVFLSY/HyTcGqTTqscSx9O', '', 0, NULL, '2015-11-15 21:00:37', '2015-11-15 21:00:37', NULL, 0),
(5, 'Aaron', 'Smith', '', '$2y$10$uDr01QNmcPuS/mYMktNLGe/AGy7hF5/mTE1H3Omo20x', '99 baliwood Road, Auckland', 88754111, NULL, '2015-11-15 21:05:15', '2015-11-15 21:05:15', NULL, 0);

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- 테이블의 인덱스 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- 테이블의 AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
