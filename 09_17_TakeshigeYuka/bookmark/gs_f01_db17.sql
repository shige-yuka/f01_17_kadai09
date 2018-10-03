-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2018 年 10 月 04 日 00:28
-- サーバのバージョン： 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gs_f01_db17`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_bm_table`
--

CREATE TABLE IF NOT EXISTS `gs_bm_table` (
`id` int(12) NOT NULL,
  `book_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `book_url` text COLLATE utf8_unicode_ci NOT NULL,
  `book_comment` text COLLATE utf8_unicode_ci NOT NULL,
  `create_time` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_bm_table`
--

INSERT INTO `gs_bm_table` (`id`, `book_name`, `book_url`, `book_comment`, `create_time`) VALUES
(7, 'わかめ本', 'https://wakame.wakame', 'わかめの本です', '2018-09-23 10:15:11'),
(8, 'ああああああ', 'https://test', 'testtestes\r\ntes\r\ntest', '2018-10-01 01:25:24'),
(9, 'xxx', 'https://xxxx', 'teata<br />\r\ntest<br />\r\nteste<br />\r\n', '2018-10-01 01:28:31');

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_php02_tabel`
--

CREATE TABLE IF NOT EXISTS `gs_php02_tabel` (
`id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `detail` text COLLATE utf8_unicode_ci,
  `indate` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_php02_tabel`
--

INSERT INTO `gs_php02_tabel` (`id`, `name`, `email`, `detail`, `indate`) VALUES
(1, 'はな花子', 'hanako@hana.ko', 'こんにちは！', '2018-09-15 15:19:11'),
(2, 'たろう太郎', 'taro@ta.ro', 'こんばんは！', '2018-09-15 15:22:31'),
(3, 'さぶろう三郎', 'sabu@ro.3', 'おはよ', '2018-09-15 15:28:48'),
(4, '次郎', 'jiro@ji.ro', 'おは', '2018-09-15 15:29:25'),
(5, 'みかんぽんかん', 'mikan@pon.kan', '柑橘', '2018-09-15 15:31:01'),
(6, 'ごはん', 'rice@ri.ce', 'おにぎり', '2018-09-15 16:07:27'),
(7, 'パン', 'pan@pan.pa.n', 'クロワッサン', '2018-09-15 16:11:58'),
(8, 'dka', 'gfrad@daa.d', 'teat', '2018-09-15 16:25:54'),
(9, 'daf', 'fa@da.uy', '', '2018-09-15 16:26:15'),
(10, 'ブロッコリー', 'bro@green.green', 'みどり', '2018-09-15 16:47:53');

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_php02_table`
--

CREATE TABLE IF NOT EXISTS `gs_php02_table` (
`id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `detail` text COLLATE utf8_unicode_ci,
  `indate` datetime NOT NULL,
  `age` varchar(3) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_php02_table`
--

INSERT INTO `gs_php02_table` (`id`, `name`, `email`, `detail`, `indate`, `age`) VALUES
(1, 'はな花子', 'hanako@hana.c', 'こんにちは', '2017-05-26 00:28:56', '20'),
(2, 'たろ太朗', 'taro+test1@t.aro', 'ちわ！', '2018-09-18 00:29:31', '30'),
(3, 'こず梢', 'kozue@kozu.e', 'おはよう', '2018-09-18 00:30:09', '10'),
(4, 'じろ次郎', 'jirojiro@jir.o', 'おは！', '2018-09-18 00:30:38', '40'),
(5, 'さぶ三郎', 'sabu3@sabu.3', 'こんばんわ', '2018-09-18 00:31:06', '20'),
(6, 'しろ四郎', 'shiro@shir.o', '', '2018-09-18 13:25:58', '40'),
(7, 'あさ朝子', 'asako@a.sako', 'おはよう', '2018-09-18 13:26:31', '10'),
(8, 'めぐ恵', 'emgumi@megu.m.i', '', '2018-09-18 13:27:09', '30');

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_php03_table`
--

CREATE TABLE IF NOT EXISTS `gs_php03_table` (
`id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `detail` text COLLATE utf8_unicode_ci,
  `indate` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_php03_table`
--

INSERT INTO `gs_php03_table` (`id`, `name`, `email`, `detail`, `indate`) VALUES
(2, 'yamasaki', 'yamasaki@gs.gs', 'test02', '2018-09-15 15:22:57'),
(3, 'osg', 'osg@gs.gs', 'test03', '2018-09-15 15:23:20'),
(4, 'morita', 'morita@gs.gs', 'test04', '2018-09-15 15:23:48'),
(5, 'kimura', 'kimura@gs.gs', 'test05', '2018-09-15 15:24:48'),
(6, 'kamiyama', 'kamiyama@gs.gs', 'test06', '2018-09-15 16:12:26'),
(7, 'kanou', 'kanou@gs.gs', 'test07', '2018-09-15 16:13:06'),
(8, 'kosuge', 'kosuge@gs.gs', 'test08', '2018-09-15 16:17:04'),
(9, 'iseki', 'iseki@gs.gs', 'test09', '2018-09-15 16:47:30'),
(10, 'aaaa', 'aaaaa@aaaaa.aaa', 'tes', '2018-09-22 17:50:23'),
(11, 'aaaa', 'test@aaa.aa', 'test', '2018-09-22 17:50:32'),
(12, 'あああ', 'ああああ', 'ああああああああああ', '2018-09-23 10:14:04');

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_user_table`
--

CREATE TABLE IF NOT EXISTS `gs_user_table` (
`id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `lid` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `lpw` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `kanri_flg` int(1) NOT NULL,
  `life_flg` int(1) NOT NULL,
  `create_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_user_table`
--

INSERT INTO `gs_user_table` (`id`, `name`, `lid`, `lpw`, `kanri_flg`, `life_flg`, `create_at`) VALUES
(2, 'よねお米', 'yonekome', 'yonekome123', 1, 0, '2018-09-23 17:52:43'),
(4, 'ごまごま', 'gomagoma', 'goma', 0, 0, '2018-09-27 01:37:30'),
(9, 'ごはん', 'gohan', 'gohan', 1, 0, '2018-10-01 00:32:37'),
(35, 'パン', 'pan', 'pan', 0, 1, '2018-10-03 23:16:12'),
(38, 'vv', 'vv', 'vv', 0, 0, '2018-10-04 00:18:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gs_php02_tabel`
--
ALTER TABLE `gs_php02_tabel`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gs_php02_table`
--
ALTER TABLE `gs_php02_table`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gs_php03_table`
--
ALTER TABLE `gs_php03_table`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gs_user_table`
--
ALTER TABLE `gs_user_table`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `gs_php02_tabel`
--
ALTER TABLE `gs_php02_tabel`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `gs_php02_table`
--
ALTER TABLE `gs_php02_table`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `gs_php03_table`
--
ALTER TABLE `gs_php03_table`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `gs_user_table`
--
ALTER TABLE `gs_user_table`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
