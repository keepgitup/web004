-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-02-16 01:31:30
-- 伺服器版本： 10.4.22-MariaDB
-- PHP 版本： 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `web004`
--

-- --------------------------------------------------------

--
-- 資料表結構 `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `acc` text COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '帳號',
  `pw` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `pr` text COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `admin`
--

INSERT INTO `admin` (`id`, `acc`, `pw`, `pr`) VALUES
(1, 'kkk', '1234', '333');

-- --------------------------------------------------------

--
-- 資料表結構 `bottom`
--

CREATE TABLE `bottom` (
  `id` int(10) NOT NULL COMMENT '流水號',
  `bottom` text COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '頁尾版權'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `goods`
--

CREATE TABLE `goods` (
  `id` int(10) UNSIGNED NOT NULL,
  `no` text COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '商品編號',
  `name` text COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '商品',
  `price` int(5) NOT NULL COMMENT '商品單價',
  `stock` int(5) NOT NULL COMMENT '庫存量',
  `spec` text COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '規格',
  `intro` text COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '商品簡介',
  `img` text COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '商品圖片',
  `big` int(5) NOT NULL COMMENT '大分類',
  `mid` int(5) NOT NULL COMMENT '次分類',
  `sh` int(2) NOT NULL COMMENT '是否上架'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `acc` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `pw` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `tel` int(11) NOT NULL,
  `addr` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `regdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `total` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `member`
--

INSERT INTO `member` (`id`, `acc`, `pw`, `name`, `tel`, `addr`, `email`, `regdate`, `total`) VALUES
(1, 'keep', '1234', 'keep', 55688, 'hsinchu', 'keep@gmail.com', '2022-02-15 01:26:06', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `ord`
--

CREATE TABLE `ord` (
  `id` int(10) UNSIGNED NOT NULL COMMENT '流水號',
  `no` text COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '編號',
  `acc` text COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '帳號',
  `name` text COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '姓名',
  `email` text COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '電子郵件',
  `addr` text COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '地址',
  `tel` text COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '電話',
  `total` text COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '總價',
  `goods` text COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '商品',
  `orddate` timestamp NOT NULL DEFAULT current_timestamp() COMMENT '訂購日期'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `type`
--

CREATE TABLE `type` (
  `id` int(10) NOT NULL COMMENT '流水號',
  `name` int(11) NOT NULL COMMENT '選單名稱',
  `parent` int(2) NOT NULL COMMENT '大分類'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `type`
--

INSERT INTO `type` (`id`, `name`, `parent`) VALUES
(1, 0, 0),
(2, 0, 0),
(3, 0, 0),
(4, 0, 0),
(5, 0, 0),
(6, 0, 0),
(7, 0, 0),
(8, 0, 0),
(9, 0, 0),
(10, 0, 0),
(11, 0, 0),
(12, 0, 0),
(13, 0, 0),
(14, 0, 0),
(15, 0, 0),
(16, 0, 0),
(17, 0, 0),
(18, 0, 0),
(19, 0, 0),
(20, 0, 0),
(21, 0, 0),
(22, 0, 0),
(23, 0, 0),
(24, 0, 0),
(25, 0, 0),
(26, 0, 0),
(27, 0, 0),
(28, 0, 0),
(29, 0, 0),
(30, 0, 0),
(31, 0, 0),
(32, 0, 0),
(33, 0, 0),
(34, 0, 0),
(35, 0, 0),
(36, 0, 0),
(37, 0, 0),
(38, 0, 0),
(39, 0, 0),
(40, 0, 0),
(41, 0, 0),
(42, 0, 0),
(43, 0, 0),
(44, 0, 0),
(45, 0, 0),
(46, 0, 0),
(47, 0, 0),
(48, 0, 0),
(49, 0, 0),
(50, 0, 0),
(51, 0, 0),
(52, 0, 0),
(53, 0, 0),
(54, 0, 0),
(55, 0, 0),
(56, 0, 0),
(57, 0, 0),
(58, 0, 0),
(59, 0, 0),
(60, 0, 0),
(61, 0, 0),
(62, 0, 0),
(63, 0, 0),
(64, 0, 0),
(65, 0, 0),
(66, 0, 0),
(67, 0, 0),
(68, 0, 0),
(69, 0, 0),
(70, 0, 0),
(71, 0, 0),
(72, 0, 0),
(73, 0, 0),
(74, 0, 0),
(75, 0, 0),
(76, 0, 0),
(77, 0, 0),
(78, 0, 0),
(79, 0, 0),
(80, 0, 0),
(81, 0, 0),
(82, 0, 0),
(83, 0, 0),
(84, 0, 0),
(85, 0, 0),
(86, 0, 0),
(87, 0, 0),
(88, 0, 0),
(89, 0, 0),
(90, 0, 0),
(91, 0, 0),
(92, 0, 0),
(93, 0, 0),
(94, 0, 0),
(95, 0, 0),
(96, 0, 0);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `bottom`
--
ALTER TABLE `bottom`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `ord`
--
ALTER TABLE `ord`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `bottom`
--
ALTER TABLE `bottom`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '流水號';

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `ord`
--
ALTER TABLE `ord`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '流水號';

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `type`
--
ALTER TABLE `type`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '流水號', AUTO_INCREMENT=97;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
