-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 
-- 伺服器版本： 8.0.17
-- PHP 版本： 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `nkustmeblog`
--

-- --------------------------------------------------------

--
-- 資料表結構 `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `message` varchar(100) NOT NULL,
  `postdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `news`
--

INSERT INTO `news` (`id`, `message`, `postdate`) VALUES
(1, '今天沒有下雨，好熱喔', '2020-09-03 16:00:47'),
(2, '挖哩勒', '2020-09-03 16:00:47'),
(3, '快下課了啦', '2020-09-03 16:03:09'),
(4, '肚子好餓', '2020-09-03 16:03:09'),
(5, '有點想睡覺', '2020-09-03 16:03:09'),
(6, '天氣好好，想出去飛', '2020-09-03 16:03:09'),
(7, 'XDDDDDDDDDDD', '2020-09-03 16:03:09'),
(8, '來啊，互相傷害啊', '2020-09-03 16:03:09'),
(9, '#像極了愛情', '2020-09-03 16:03:09'),
(10, '今晚，我想來點...', '2020-09-03 16:03:09'),
(13, '每天過，過每天', '2020-09-04 11:00:05'),
(14, 'cc0 免費圖庫', '2020-09-04 15:07:33'),
(15, 'Photoscape：在筆電介面解析有點模糊(已解決)', '2020-09-04 15:08:19'),
(17, '下週二作業，播放清單', '2020-09-04 16:30:59'),
(18, '每日一修', '2020-09-06 14:45:22'),
(24, '水唷', '2020-11-04 16:23:47'),
(26, '小夫到此一遊！', '2020-11-04 16:52:14'),
(28, '111111', '2020-11-05 16:32:00'),
(30, '', '2020-11-05 16:33:35'),
(31, '111111', '2020-11-05 16:34:53'),
(32, '22222', '2020-11-05 16:36:20');

-- --------------------------------------------------------

--
-- 資料表結構 `students`
--

CREATE TABLE `students` (
  `sid` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `mid` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `sname` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `students`
--

INSERT INTO `students` (`sid`, `mid`, `sname`, `password`) VALUES
('C107242105', '1', '黃柏涵', '8586'),
('C107242127', '1', '謝呈易', '6810'),
('C107283119', '2', '翁慶瑋', '0910'),
('ggd', '1', 'leo', '000');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`sid`,`mid`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
