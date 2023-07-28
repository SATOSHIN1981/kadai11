-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2023 年 7 月 28 日 03:27
-- サーバのバージョン： 10.4.28-MariaDB
-- PHP のバージョン: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gs_db_kadai02`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `kadai02_table`
--

CREATE TABLE `kadai02_table` (
  `id` int(12) NOT NULL,
  `uid` varchar(128) NOT NULL,
  `name` varchar(64) NOT NULL,
  `q1` int(11) NOT NULL,
  `q2` int(11) NOT NULL,
  `q3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `kadai02_table`
--

INSERT INTO `kadai02_table` (`id`, `uid`, `name`, `q1`, `q2`, `q3`) VALUES
(11, '649e6bdd05b23', '太郎', 3, 1, 3),
(12, '649e6bdd05b23', 'テスト２', 4, 4, 4),
(13, '649fa64f89028', '太郎', 4, 4, 6),
(14, '649fa79f2cac5', '治郎', 5, 3, 5),
(15, '649fa79f2cac5', 'テスト', 5, 6, 5),
(16, '64a8e27786fca', '治郎', 3, 5, 6),
(17, '64a8e27786fca', 'テスト', 6, 5, 6),
(18, '64b21e946c7a4', 'tesuto', 3, 2, 3),
(21, '64c25e9b0d963', '治郎', 7, 4, 3),
(22, '64c25e9b0d963', '治郎', 7, 4, 3),
(23, '64c25ef184470', 'tesuto', 3, 6, 4),
(24, '64c25ef184470', 'tesuto', 3, 6, 4),
(25, '64c25ef184470', 'tesuto', 3, 6, 4),
(26, '64c25ef184470', 'tesuto', 3, 6, 4),
(27, '64c25ef184470', 'tesuto', 3, 6, 4),
(28, '64c25ef184470', 'tesuto', 3, 6, 4),
(29, '64c25ef184470', 'tesuto', 3, 6, 4),
(30, '64c2669d49c40', 'ひがしむらやまにせい', 5, 1, 6),
(31, '64c2669d49c40', 'ひがしむらやまにせい', 5, 1, 6),
(32, '64c2669d49c40', 'テスト', 7, 7, 7),
(33, '64c2669d49c40', 'テスト', 7, 7, 7),
(34, '64c2669d49c40', 'テスト２', 4, 5, 4),
(35, '64c2669d49c40', 'テスト3', 4, 5, 4),
(36, '64c2669d49c40', 'テスト3', 4, 5, 4),
(37, '64c2669d49c40', 'テスト3', 4, 5, 4),
(38, '64c2669d49c40', 'テスト4', 4, 5, 4),
(39, '64c2669d49c40', 'テスト4', 6, 6, 6),
(40, '64c2669d49c40', 'テスト4', 4, 4, 4),
(41, '64c2669d49c40', 'テスト5', 1, 8, 1),
(42, '64c2669d49c40', 'ひがしむらやまにせい', 1, 1, 1),
(43, '64c2669d49c40', 'ぴかぴかまる', 2, 6, 2),
(44, '64c2669d49c40', '治郎', 6, 5, 6),
(45, '64c315819acf8', 'ひがしむらやまにせい', 1, 1, 1),
(46, '64c315819acf8', 'ひがしむらやまにせい', 1, 1, 1),
(47, '64c315819acf8', 'ひがしむらやまにせい', 1, 1, 1),
(48, '64c315819acf8', 'ひがしむらやまにせい', 1, 1, 1),
(49, '64c315819acf8', 'ひがしむらやまにせい', 1, 1, 1),
(50, '64c315819acf8', 'ひがしむらやまにせい', 1, 1, 1);

-- --------------------------------------------------------

--
-- テーブルの構造 `kadai02_table_users`
--

CREATE TABLE `kadai02_table_users` (
  `id` int(12) NOT NULL,
  `name` varchar(128) NOT NULL,
  `lid` varchar(128) NOT NULL,
  `lpw` varchar(128) NOT NULL,
  `uid` varchar(128) NOT NULL,
  `kanri_flg` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `kadai02_table_users`
--

INSERT INTO `kadai02_table_users` (`id`, `name`, `lid`, `lpw`, `uid`, `kanri_flg`) VALUES
(1, 'テスト太郎', 'test1@test.jp', 'test1test1', 'kakekikukukorogensan', '1'),
(2, 'テスト次郎', 'test2@test.jp', 'test2test2', 'mamemimumemo', '0');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `kadai02_table`
--
ALTER TABLE `kadai02_table`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `kadai02_table_users`
--
ALTER TABLE `kadai02_table_users`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `kadai02_table`
--
ALTER TABLE `kadai02_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- テーブルの AUTO_INCREMENT `kadai02_table_users`
--
ALTER TABLE `kadai02_table_users`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
