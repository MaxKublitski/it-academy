-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 01 2019 г., 17:27
-- Версия сервера: 10.3.13-MariaDB
-- Версия PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `cinema`
--

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`) VALUES
(76, 'admin@admin.com', '[\"ROLE_ADMIN\"]', '$argon2id$v=19$m=65536,t=4,p=1$dEhCVi5wcEdiN2gueHVybQ$P2aUiSeOxMbN85V8zuHghQP3E8jH7n4TgBzxyO2rsoI'),
(77, '0user@user.com', '[\"ROLE_USER\"]', '$argon2id$v=19$m=65536,t=4,p=1$YXhaSDRUVVZsZnhjNWNBWQ$vuszRikZ+bx7jhPhuP+SXuX/pzilG/ykyVSxBzPMI1E'),
(78, '1user@user.com', '[\"ROLE_USER\"]', '$argon2id$v=19$m=65536,t=4,p=1$dGZQOUd3aTMyemhiWU9jeg$ijJhcO0I3VpAGwRnCDGmVcWjIBnwXB0o1PKzamlW8Ko'),
(79, '2user@user.com', '[\"ROLE_USER\"]', '$argon2id$v=19$m=65536,t=4,p=1$aC9HbHZSR3BhMWlMNkk0bw$W1/Xf4szy0Fnsgo7UB2mBDlSMNOCFEO8OLCYQ20ozig'),
(80, '3user@user.com', '[\"ROLE_USER\"]', '$argon2id$v=19$m=65536,t=4,p=1$cTVWSnNvbWJydmlQNTF1Vw$+aO1EALRVOvvrIE9+E56lWf41kLZewj/bQEN8aFl4Rk'),
(81, '4user@user.com', '[\"ROLE_USER\"]', '$argon2id$v=19$m=65536,t=4,p=1$dGdaNGVGWHJxUlFtL3cxMQ$vwH1lZoc5NPRxYQDj8i2/PRq2dF4L9z6NFj2bwYkJAo'),
(82, '5user@user.com', '[\"ROLE_USER\"]', '$argon2id$v=19$m=65536,t=4,p=1$RFBIMUdJcGZJdVJDb1VIWQ$r40ATk3uQ2GrnvDlui6hxow3vBDgnhA0GxMS9BQee1k'),
(83, '6user@user.com', '[\"ROLE_USER\"]', '$argon2id$v=19$m=65536,t=4,p=1$QXJJMFg2dWE0VW4vTldBdQ$JmMmGpuyu6G2qPDdqju0RvD0wsp3o29qpFdl/wOjfXI'),
(84, '7user@user.com', '[\"ROLE_USER\"]', '$argon2id$v=19$m=65536,t=4,p=1$UmY0bXBvdXkxYW8zL2xieQ$c7gIHTOpvA0TPWedAnRqW2TK32JMzEaCIpG87WscXmE'),
(85, '8user@user.com', '[\"ROLE_USER\"]', '$argon2id$v=19$m=65536,t=4,p=1$STFZbS5ZQ1J1MDRueXJ0aw$hIvlH2W4MfjBL/c0rneeRtyX1O5/t9ECjsXF2I0bC6I'),
(86, '9user@user.com', '[\"ROLE_USER\"]', '$argon2id$v=19$m=65536,t=4,p=1$WVliUEFSbGFhQm5HLnJQSA$j7d8Qxg6IrImIMl9iMvTuO+ngfheXbC4w4ulw+siSpM'),
(87, '10user@user.com', '[\"ROLE_USER\"]', '$argon2id$v=19$m=65536,t=4,p=1$Vm4yU09RaFdveHRjRURmZg$wUrclGyXQAToInbwWnhW3UTeyabqHMPZrCwz1oRYCa0'),
(88, '11user@user.com', '[\"ROLE_USER\"]', '$argon2id$v=19$m=65536,t=4,p=1$SXdLbjhGakZlUzNTQ3V6Qg$HD7/Fy8N+1Rhwl10MAPVHST27g8+pucHcA137IgfnBI'),
(89, '12user@user.com', '[\"ROLE_USER\"]', '$argon2id$v=19$m=65536,t=4,p=1$VkNNQVFZZnlHRWlvdXBPOQ$NAEkOLpJ39TlmJXnC7SKThDKFy6EV3MXdKetmxZ5O4w'),
(90, '13user@user.com', '[\"ROLE_USER\"]', '$argon2id$v=19$m=65536,t=4,p=1$LjJmcGlRV25TRmpuL1I0eg$jWGK30HxhFoMuO7UMtkSPwF7BL0Vj1V/vQbosLOJgFk'),
(91, '14user@user.com', '[\"ROLE_USER\"]', '$argon2id$v=19$m=65536,t=4,p=1$WVRRZmF5dGh3aEYydklrQQ$pFQVPcXw5+krjhHpq2sLvNviW30i0P9sZddF1gjTDqA'),
(92, '15user@user.com', '[\"ROLE_USER\"]', '$argon2id$v=19$m=65536,t=4,p=1$aHdGMjJiY0paMFN3dWVaTw$TwZGmXvoYHyLRHhleB4PdtZqPxAd6zzBLJ4i6hwKERE'),
(93, '16user@user.com', '[\"ROLE_USER\"]', '$argon2id$v=19$m=65536,t=4,p=1$UlJsMVdHOWF2bllkemsvZw$wrCk/CP9qcn0XF9Ud/p0u90yD4EA0vCoKR84BuJHBCA'),
(94, '17user@user.com', '[\"ROLE_USER\"]', '$argon2id$v=19$m=65536,t=4,p=1$NHRMRXVzd2dCRWY2d1hxdA$6TP8UfTwL45MskOfJz58g0m+Wkvg0vmrM6K8duezafs'),
(95, '18user@user.com', '[\"ROLE_USER\"]', '$argon2id$v=19$m=65536,t=4,p=1$aGwzd3VSZVczN3lrcFc4Wg$QeaCz6bn7hxOwiPyq7KI9Klp/NH5QClhW50pg9RHjqg'),
(96, '19user@user.com', '[\"ROLE_USER\"]', '$argon2id$v=19$m=65536,t=4,p=1$OU9WeDZhbGpBRTdLU1ZKRQ$csgqIfpnF/UXghqLi8UcxKVphIpSMfsp0GJO+K/QXwA'),
(97, 'mishka@mail.ru', '[]', 'qwerty'),
(99, 'mishdka@mail.ru', '[]', 'qwerty'),
(101, 'misa@mail.ru', '[]', 'qwerty'),
(102, 'mia@mail.ru', '[]', 'qwerty'),
(103, 'mi@mail.ru', '[]', 'qwerty'),
(104, 'sd@dg', '[\"ROLE_USER\"]', 'qwerty'),
(105, 'sd@dgasd', '[\"ROLE_USER\"]', '$argon2id$v=19$m=65536,t=4,p=1$R2lkY3lnMDF3dlFzRFRqNA$SGiLn3cPmcx+AZn5m9uSRqD0Ine8MZE29NTLKuazzyY');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
