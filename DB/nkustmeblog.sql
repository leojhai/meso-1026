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
-- 資料表結構 `cadre`
--

CREATE TABLE `cadre` (
  `id` int(11) NOT NULL,
  `sku` varchar(8) NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `photo` varchar(200) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `cadre`
--

INSERT INTO `cadre` (`id`, `sku`, `name`, `description`, `photo`, `price`) VALUES
(1, 'M001', '莊釋閔 會長', '班級：進四機三甲', 'imags/莊釋閔.jpg', 20000),
(2, 'M002', '謝呈易 副會長', '班級：進四機三甲', 'imags/謝呈易.jpg', 18000),
(3, 'M003', '蔡慶彥 文書長', '班級：進四機三甲', 'imags/蔡慶彥.jpg', 25000),
(4, 'M004', '黃柏涵 財務長', '班級：進四機三甲', 'imags/黃柏涵.jpg', 30000),
(5, 'M005', '晏嘉良 活動公關長', '班級：進四機三甲', 'imags/晏嘉良.jpg', 200);

-- --------------------------------------------------------

--
-- 資料表結構 `mem`
--

CREATE TABLE `mem` (
  `id` int(11) NOT NULL,
  `sku` varchar(8) NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `photo` varchar(200) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `mem`
--

INSERT INTO `mem` (`id`, `sku`, `name`, `description`, `photo`, `price`) VALUES
(1, 'M001', '方得華 講座教授兼系主任 設計與製造', '授課領域：奈米材料、微系統量測\r\n研究專長：奈米製造、太陽能電池與光電感測元件、分子動力學、奈米結構分析與掃描探針顯微術', 'imags/方得華.jpg', 20000),
(2, 'M002', '江家慶 教授兼副系主任 設計與製造', '授課領域：光電檢測、雷射加工專題、產業實務實習、光電工程、專題研討\r\n研究專長：準分子雷射(KrF)微細加工、金屬合金熔煉銲接', 'imags/江家慶.jpg', 18000),
(3, 'M003', '張國明 教授 機光電與控制', '授課領域：自動控制、實務專題、專題研討\r\n研究專長：自動化技術、變結構系統控制、非線性系統分析與控制', 'imags/張國明.jpg', 25000),
(4, 'M004', '林明宏 教授 材料與能源', '授課領域：電機實驗、電腦輔助機械製圖、電腦3D工程繪圖\r\n研究專長：自動化技術、機械固力', 'imags/林明宏.jpg', 60),
(5, 'M005', '鄭良安 教授 機光電與控制', '授課領域：材料科學、材料實驗、熱處理\r\n研究專長：機械材料、陶瓷材料、熱處理、表面改質', 'imags/鄭良安.jpg', 90),
(6, 'M006', '陳昭先 教授 機光電與控制', '授課領域：幾何光學、現代光學工程基礎、實務專題、工程數學\r\n研究專長：光學設計量測、光學軟體、光學系統、液晶及DLP投影顯示技術', 'imags/陳昭先.jpg', 800);

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
-- 資料表結構 `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `message` varchar(100) NOT NULL,
  `link` varchar(200) NOT NULL,
  `postdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `post`
--

INSERT INTO `post` (`id`, `message`, `link`, `postdate`) VALUES
(1, '!!!請所有學制新生，盡速完成新生線上安全衛生教育訓練!!!', 'http://me.nkust.edu.tw/front/news/news.php?ID=a3Vhc19tZSZuZXdz&Sn=1038', '2020-10-06'),
(2, '(防疫)開學6件事，請大家配合遵守!!!', 'http://me.nkust.edu.tw/front/news/news.php?ID=a3Vhc19tZSZuZXdz&Sn=1030', '2020-10-26'),
(3, '高科大三週年校慶活動公告', 'https://ceed.nkust.edu.tw/p/406-1014-38118,r11.php', '2020-10-11'),
(4, '本校建工校區進修推廣處處長室即日起招募1名工讀生', 'https://ceed.nkust.edu.tw/p/405-1014-37807,c843.php', '2020-11-06'),
(5, '自109年10月19日(星期一)起開放列印進修推廣處加選繳費單，繳費截止日109年10月25日(星期日)', 'https://ceed.nkust.edu.tw/p/406-1014-37599,r11.php', '2020-10-17'),
(6, '高科大DK SHOP品牌商店開幕慶，臉書分享就抽 !!', 'http://dkshop.nkust.edu.tw/nkust_cee/cee/index/detail/21', '2020-11-06');

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
-- 資料表索引 `cadre`
--
ALTER TABLE `cadre`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `mem`
--
ALTER TABLE `mem`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `post`
--
ALTER TABLE `post`
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
-- 使用資料表自動遞增(AUTO_INCREMENT) `cadre`
--
ALTER TABLE `cadre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `mem`
--
ALTER TABLE `mem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
