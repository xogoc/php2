-- phpMyAdmin SQL Dump
-- version 3.4.3.2
-- http://www.phpmyadmin.net
--
-- Хост: mysql.xogoc.z8.ru:3306
-- Время создания: Дек 13 2017 г., 23:59
-- Версия сервера: 5.1.67
-- Версия PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `db_xogoc_7`
--

-- --------------------------------------------------------

--
-- Структура таблицы `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `views` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=120 ;

--
-- Дамп данных таблицы `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `path`, `size`, `views`) VALUES
(1, 'agl.jpg', 'img/gallery/', 331976, 87),
(2, 'Chrysanthemum.jpg', 'img/gallery/', 879394, 3),
(3, 'Desert.jpg', 'img/gallery/', 845941, 0),
(4, 'Hydrangeas.jpg', 'img/gallery/', 595284, 0),
(5, 'Jellyfish.jpg', 'img/gallery/', 775702, 1),
(6, 'Koala.jpg', 'img/gallery/', 780831, 2),
(7, 'Lighthouse.jpg', 'img/gallery/', 561276, 0),
(8, 'Penguins.jpg', 'img/gallery/', 777835, 1),
(9, 'Tulips.jpg', 'img/gallery/', 620888, 1),
(10, 'Jellyfish.jpg', 'img/gallery/', 775702, 18),
(11, 'Tulips.jpg', 'img/gallery/', 620888, 50),
(12, 'Lighthouse.jpg', 'img/gallery/', 561276, 29),
(13, 'Penguins.jpg', 'img/gallery/', 777835, 27),
(14, 'Lighthouse.jpg', 'img/gallery/', 561276, 42),
(15, 'Chrysanthemum.jpg', 'img/gallery/', 879394, 27),
(16, 'Chrysanthemum.jpg', 'img/gallery/', 879394, 26),
(17, 'agl.jpg', 'img/gallery/', 331976, 12),
(18, 'Tulips.jpg', 'img/gallery/', 620888, 25),
(19, 'Koala.jpg', 'img/gallery/', 780831, 40),
(20, 'Koala.jpg', 'img/gallery/', 780831, 4),
(21, 'Chrysanthemum.jpg', 'img/gallery/', 879394, 36),
(22, 'Tulips.jpg', 'img/gallery/', 620888, 45),
(23, 'Lighthouse.jpg', 'img/gallery/', 561276, 23),
(24, 'Tulips.jpg', 'img/gallery/', 620888, 6),
(25, 'Tulips.jpg', 'img/gallery/', 620888, 50),
(26, 'Tulips.jpg', 'img/gallery/', 620888, 17),
(27, 'Hydrangeas.jpg', 'img/gallery/', 595284, 43),
(28, 'Tulips.jpg', 'img/gallery/', 620888, 22),
(29, 'Lighthouse.jpg', 'img/gallery/', 561276, 36),
(30, 'Penguins.jpg', 'img/gallery/', 777835, 25),
(31, 'Jellyfish.jpg', 'img/gallery/', 775702, 21),
(32, 'Chrysanthemum.jpg', 'img/gallery/', 879394, 27),
(33, 'Tulips.jpg', 'img/gallery/', 620888, 42),
(34, 'Tulips.jpg', 'img/gallery/', 620888, 43),
(35, 'Chrysanthemum.jpg', 'img/gallery/', 879394, 24),
(36, 'Tulips.jpg', 'img/gallery/', 620888, 18),
(37, 'Chrysanthemum.jpg', 'img/gallery/', 879394, 44),
(38, 'Desert.jpg', 'img/gallery/', 845941, 48),
(39, 'Hydrangeas.jpg', 'img/gallery/', 595284, 11),
(40, 'agl.jpg', 'img/gallery/', 331976, 14),
(41, 'Chrysanthemum.jpg', 'img/gallery/', 879394, 3),
(42, 'Koala.jpg', 'img/gallery/', 780831, 31),
(43, 'Tulips.jpg', 'img/gallery/', 620888, 26),
(44, 'agl.jpg', 'img/gallery/', 331976, 32),
(45, 'Desert.jpg', 'img/gallery/', 845941, 48),
(46, 'Chrysanthemum.jpg', 'img/gallery/', 879394, 39),
(47, 'Hydrangeas.jpg', 'img/gallery/', 595284, 14),
(48, 'Desert.jpg', 'img/gallery/', 845941, 13),
(49, 'Chrysanthemum.jpg', 'img/gallery/', 879394, 10),
(50, 'Chrysanthemum.jpg', 'img/gallery/', 879394, 14),
(51, 'Lighthouse.jpg', 'img/gallery/', 561276, 4),
(52, 'Koala.jpg', 'img/gallery/', 780831, 44),
(53, 'Tulips.jpg', 'img/gallery/', 620888, 45),
(54, 'Penguins.jpg', 'img/gallery/', 777835, 14),
(55, 'Chrysanthemum.jpg', 'img/gallery/', 879394, 45),
(56, 'Koala.jpg', 'img/gallery/', 780831, 16),
(57, 'Tulips.jpg', 'img/gallery/', 620888, 9),
(58, 'Tulips.jpg', 'img/gallery/', 620888, 45),
(59, 'Lighthouse.jpg', 'img/gallery/', 561276, 1),
(60, 'Jellyfish.jpg', 'img/gallery/', 775702, 47),
(61, 'Tulips.jpg', 'img/gallery/', 620888, 34),
(62, 'Lighthouse.jpg', 'img/gallery/', 561276, 17),
(63, 'Tulips.jpg', 'img/gallery/', 620888, 1),
(64, 'Koala.jpg', 'img/gallery/', 780831, 3),
(65, 'Chrysanthemum.jpg', 'img/gallery/', 879394, 38),
(66, 'Hydrangeas.jpg', 'img/gallery/', 595284, 45),
(67, 'Penguins.jpg', 'img/gallery/', 777835, 50),
(68, 'Penguins.jpg', 'img/gallery/', 777835, 40),
(69, 'Penguins.jpg', 'img/gallery/', 777835, 30),
(70, 'agl.jpg', 'img/gallery/', 331976, 50),
(71, 'Jellyfish.jpg', 'img/gallery/', 775702, 33),
(72, 'Desert.jpg', 'img/gallery/', 845941, 24),
(73, 'Penguins.jpg', 'img/gallery/', 777835, 14),
(74, 'Hydrangeas.jpg', 'img/gallery/', 595284, 28),
(75, 'Desert.jpg', 'img/gallery/', 845941, 45),
(76, 'Jellyfish.jpg', 'img/gallery/', 775702, 14),
(77, 'Jellyfish.jpg', 'img/gallery/', 775702, 10),
(78, 'Koala.jpg', 'img/gallery/', 780831, 25),
(79, 'Desert.jpg', 'img/gallery/', 845941, 13),
(80, 'Koala.jpg', 'img/gallery/', 780831, 22),
(81, 'agl.jpg', 'img/gallery/', 331976, 46),
(82, 'Hydrangeas.jpg', 'img/gallery/', 595284, 43),
(83, 'Tulips.jpg', 'img/gallery/', 620888, 6),
(84, 'Koala.jpg', 'img/gallery/', 780831, 40),
(85, 'Lighthouse.jpg', 'img/gallery/', 561276, 38),
(86, 'Penguins.jpg', 'img/gallery/', 777835, 12),
(87, 'Hydrangeas.jpg', 'img/gallery/', 595284, 5),
(88, 'Lighthouse.jpg', 'img/gallery/', 561276, 12),
(89, 'Hydrangeas.jpg', 'img/gallery/', 595284, 3),
(90, 'Penguins.jpg', 'img/gallery/', 777835, 35),
(91, 'Tulips.jpg', 'img/gallery/', 620888, 15),
(92, 'Tulips.jpg', 'img/gallery/', 620888, 25),
(93, 'Jellyfish.jpg', 'img/gallery/', 775702, 31),
(94, 'agl.jpg', 'img/gallery/', 331976, 37),
(95, 'Penguins.jpg', 'img/gallery/', 777835, 29),
(96, 'Chrysanthemum.jpg', 'img/gallery/', 879394, 45),
(97, 'Jellyfish.jpg', 'img/gallery/', 775702, 26),
(98, 'Lighthouse.jpg', 'img/gallery/', 561276, 20),
(99, 'Koala.jpg', 'img/gallery/', 780831, 20),
(100, 'Chrysanthemum.jpg', 'img/gallery/', 879394, 18),
(101, 'Chrysanthemum.jpg', 'img/gallery/', 879394, 50),
(102, 'Koala.jpg', 'img/gallery/', 780831, 27),
(103, 'agl.jpg', 'img/gallery/', 331976, 15),
(104, 'Penguins.jpg', 'img/gallery/', 777835, 25),
(105, 'Hydrangeas.jpg', 'img/gallery/', 595284, 30),
(106, 'Chrysanthemum.jpg', 'img/gallery/', 879394, 16),
(107, 'Tulips.jpg', 'img/gallery/', 620888, 9),
(108, 'Penguins.jpg', 'img/gallery/', 777835, 20),
(109, 'Penguins.jpg', 'img/gallery/', 777835, 43),
(110, 'Chrysanthemum.jpg', 'img/gallery/', 879394, 33),
(111, 'Hydrangeas.jpg', 'img/gallery/', 595284, 15),
(112, 'Jellyfish.jpg', 'img/gallery/', 775702, 47),
(113, 'Penguins.jpg', 'img/gallery/', 777835, 14),
(114, 'Desert.jpg', 'img/gallery/', 845941, 23),
(115, 'Lighthouse.jpg', 'img/gallery/', 561276, 26),
(116, 'Penguins.jpg', 'img/gallery/', 777835, 41),
(117, 'Jellyfish.jpg', 'img/gallery/', 775702, 22),
(118, 'Hydrangeas.jpg', 'img/gallery/', 595284, 29),
(119, 'Lighthouse.jpg', 'img/gallery/', 561276, 7);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
