-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 21 2017 г., 11:52
-- Версия сервера: 5.5.48
-- Версия PHP: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `lamps`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Brands`
--

CREATE TABLE IF NOT EXISTS `Brands` (
  `BrandID` int(11) NOT NULL,
  `BrandName` varchar(50) DEFAULT NULL,
  `BrandInfo` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Brands`
--

INSERT INTO `Brands` (`BrandID`, `BrandName`, `BrandInfo`) VALUES
(1, 'XingFeng', ''),
(2, 'SunLush', ''),
(3, 'Phicans', ''),
(4, 'Vi-Ko', ''),
(5, 'Gau''s', '');

-- --------------------------------------------------------

--
-- Структура таблицы `Categories`
--

CREATE TABLE IF NOT EXISTS `Categories` (
  `CategoryID` int(11) NOT NULL,
  `CategoryName` varchar(50) DEFAULT NULL,
  `CategoryInfo` varchar(200) DEFAULT NULL,
  `Accomp` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Categories`
--

INSERT INTO `Categories` (`CategoryID`, `CategoryName`, `CategoryInfo`, `Accomp`) VALUES
(1, 'Люстры', '', 0),
(2, 'Торшеры', '', 0),
(3, 'Настенные светильники', '', 0),
(4, 'DownLights', '', 0),
(5, 'Подвесные светильники', '', 0),
(6, 'Светорегуляторы', '', 1),
(7, 'Лампы LED', 'Светодиодные лампы', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `Products`
--

CREATE TABLE IF NOT EXISTS `Products` (
  `ProductID` int(11) NOT NULL,
  `CategoryID` int(11) DEFAULT NULL,
  `BrandID` int(11) DEFAULT NULL,
  `ProductName` varchar(50) DEFAULT NULL,
  `ProductPrice` decimal(10,2) DEFAULT NULL,
  `ProductInfo` varchar(255) DEFAULT NULL,
  `ProductBigImage` varchar(200) DEFAULT NULL,
  `ProductSmallImage` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Products`
--

INSERT INTO `Products` (`ProductID`, `CategoryID`, `BrandID`, `ProductName`, `ProductPrice`, `ProductInfo`, `ProductBigImage`, `ProductSmallImage`) VALUES
(1, 5, 1, 'XF32', '157.00', 'Подвесной светильник, металлический, патрон Е27, диаметр плафона 320 мм, высота подвеса 1550 мм', './images/big/XF32.jpg', './images/small/XF32.jpg'),
(2, 5, 1, 'XF35', '125.00', 'Подвесной светильник, алюминиевый, патрон Е27, диаметр плафона 350 мм, высота подвеса 1560 мм', './images/big/XF35.jpg', './images/small/XF35.jpg'),
(3, 5, 1, 'XF37A', '175.00', 'Подвесной светильник, алюминиевый, патрон Е27, диаметр плафона 365 мм, высота подвеса 1610 мм', './images/big/XF37A.jpg', './images/small/XF37A.jpg'),
(4, 5, 1, 'XF41', '624.00', 'Подвесной светильник, алюминиевый, патрон Е27, диаметр плафона 410 мм, высота подвеса 1580 мм', './images/big/XF41.jpg', './images/small/XF41.jpg'),
(5, 5, 1, 'XF44A', '220.00', 'Подвесной светильник, алюминиевый, патрон Е27, диаметр плафона 450 мм, высота подвеса 1550 мм', './images/big/XF44A.jpg', './images/small/XF44A.jpg'),
(6, 5, 1, 'XF45A', '149.00', 'Подвесной светильник, алюминиевый, патрон Е27, диаметр плафона 450 мм, высота подвеса 1600 мм', './images/big/XF45A.jpg', './images/small/XF45A.jpg'),
(7, 5, 1, 'XF47', '223.00', 'Подвесной светильник, алюминиевый, патрон Е27, диаметр плафона 465 мм, высота подвеса 1550 мм', './images/big/XF47.jpg', './images/small/XF47.jpg'),
(8, 4, 1, 'XF8002', '178.00', 'Светильник типа DownLight, для энергосберегающей лампы типа PL-C, патрон G24, диаметр 228 мм, высота 120 мм', './images/big/XF8002.jpg', './images/small/XF8002.jpg'),
(9, 4, 1, 'XF8003E', '157.00', 'Светильник типа DownLight, для энергосберегающей лампы типа PL-C, патрон G24, диаметр 230 мм, высота 130 мм', './images/big/XF8003E.jpg', './images/small/XF8003E.jpg'),
(10, 4, 1, 'XF8021E', '245.00', 'Светильник типа DownLight, для энергосберегающей лампы типа PL-C, патрон G24, размер 230х230 мм, высота 122 мм', './images/big/XF8021E.jpg', './images/small/XF8021E.jpg'),
(11, 4, 1, 'XF8027B', '235.00', 'Светильник типа DownLight, для металло-галогенной лампы 70-150 Вт, патрон RX7s, размер 250х250 мм, высота 130 мм', './images/big/XF8027B.jpg', './images/small/XF8027B.jpg'),
(12, 4, 1, 'XF8032A', '233.00', 'Светильник типа DownLight, для энергосберегающей лампы, патрон Е27, диаметр 350 мм, высота 125 мм', './images/big/XF8032A.jpg', './images/small/XF8032A.jpg'),
(13, 3, 1, 'XFWL25', '185.00', 'Настенный светильник для галогенной лампы, патрон RX7s, размер 205х190х165 мм', './images/big/XFWL25.jpg', './images/small/XFWL25.jpg'),
(14, 3, 1, 'XF-WL7', '184.00', 'Настенный светильник, металлический, патрон Е27, размер 240х300 мм', './images/big/XF-WL7.jpg', './images/small/XF-WL7.jpg'),
(15, 3, 2, '3AB011', '267.00', 'Настенный светильник, под энергосберегающую лампу, патрон Е27, диаметр 105 мм, высота 280 мм', './images/big/3ab011.jpg', './images/small/3ab011.jpg'),
(16, 3, 2, '3AB012', '303.00', 'Настенный светильник, под 2 энергосберегающие лампы, патрон Е27, диаметр 105 мм, высота 280 мм', './images/big/3ab012.jpg', './images/small/3ab012.jpg'),
(17, 3, 2, '2881', '169.00', 'Настенный светильник, под галогенную лампу, патрон G27, размер 148х77 мм', './images/big/2881.jpg', './images/small/2881.jpg'),
(18, 3, 2, '2884', '211.00', 'Настенный светильник, под галогенную лампу, патрон RX7s, размер 147х147 мм, высота 280 мм', './images/big/2884.jpg', './images/small/2884.jpg'),
(19, 3, 2, '2903', '199.00', 'Настенный светильник, под галогенную лампу, патрон G9, диаметр 118 мм, высота 93 мм', './images/big/2903.jpg', './images/small/2903.jpg'),
(20, 3, 2, '2904', '209.00', 'Настенный светильник, под галогенную лампу, патрон G9, диаметр 118 мм, высота 93 мм', './images/big/2904.jpg', './images/small/2904.jpg'),
(21, 3, 2, '51388', '330.00', 'Настенный светильник цвета бронзы, под галогенную лампу, патрон G9, размер 120х120х160 мм', './images/big/51388.jpg', './images/small/51388.jpg'),
(22, 3, 2, '52500', '195.00', 'Настенный светильник цвета античной бронзы, под галогенную лампу, патрон G9, размер 110х92х85 мм', './images/big/52500.jpg', './images/small/52500.jpg'),
(23, 3, 2, '52501', '195.00', 'Настенный светильник, серебристый, под галогенную лампу, патрон G9, размер 110х92х85 мм', './images/big/52501.jpg', './images/small/52501.jpg'),
(24, 3, 2, '52502', '299.00', 'Настенный светильник цвета античной бронзы, под галогенную лампу, патрон G9, размер 110х176х85 мм', './images/big/52502.jpg', './images/small/52502.jpg'),
(25, 3, 2, '52503', '299.00', 'Настенный светильник, серебристый, под галогенную лампу, патрон G9, размер 110х176х85 мм', './images/big/52503.jpg', './images/small/52503.jpg'),
(26, 3, 2, '52941', '173.00', 'Настенный светильник', './images/big/52941.jpg', './images/small/52941.jpg'),
(27, 3, 2, '90100', '43.00', 'Планка рассеивания для светильника 52941', './images/big90100.jpg', './images/small/90100.jpg'),
(28, 3, 2, '90102', '43.00', 'Планка рассеивания для светильника 52941', './images/big/90102.jpg', './images/small/90102.jpg'),
(29, 3, 2, 'BG1901', '177.00', 'Настенный светильник, под галогенную лампу, патрон G9, размер 195х88х85 мм', './images/big/bg1901.jpg', './images/small/bg1901.jpg'),
(30, 6, 4, '90552020', '75.00', 'Светорегулятор Vi-Ko Yasemin белого цвета, до 600 Вт', './images/big/90552020.jpg', './images/small/90552020.jpg'),
(31, 6, 4, '90554020', '75.00', 'Светорегулятор Vi-Ko Yasemin кремового цвета, до 600 Вт', './images/big/90554020.jpg', './images/small/90554020.jpg'),
(32, 6, 4, '90561020', '80.00', 'Светорегулятор Vi-Ko Carmen белого цвета, до 600 Вт', './images/big/90561020.jpg', './images/small/90561020.jpg'),
(33, 6, 4, '90562020', '80.00', 'Светорегулятор Vi-Ko Carmen кремового цвета, до 600 Вт', './images/big/90562020.jpg', './images/small/90562020.jpg'),
(34, 3, 5, 'GS-306002/1W', '103.00', '', './images/big/306002-1W.jpg', './images/small/306002-1W.jpg'),
(35, 3, 5, 'GS-306021/1W', '103.00', '', './images/big/306021-1W.jpg', './images/small/306021-1W.jpg'),
(36, 3, 5, 'GS-306088/1W SJ', '177.00', '', './images/big/306088_1W.jpg', './images/small/306088_1W.jpg'),
(37, 3, 5, 'GS-306163/2W F GD', '520.00', '', './images/big/306163_2W.jpg', './images/small/306163_2W.jpg'),
(38, 3, 5, 'GS-306180/1W SN', '189.00', '', './images/big/306180_1W.jpg', './images/small/306180_1W.jpg'),
(39, 3, 5, 'GS-306183/1T SN', '278.00', '', './images/big/306183_1T.jpg', './images/small/306183_1T.jpg'),
(40, 3, 5, 'GS-306196/1W', '140.00', '', './images/big/306196_1W.jpg', './images/small/306196_1W.jpg'),
(41, 3, 5, 'GS-306209/1W', '80.00', '', './images/big/306209_1W.jpg', './images/small/306209_1W.jpg'),
(42, 3, 5, 'GS-GS-306218/1W SN', '91.00', '', './images/big/306218_1W.jpg', './images/small/306218_1W.jpg'),
(43, 3, 5, 'GS-306256/5W CR', '820.00', '', './images/big/306256-5W.jpg', './images/small/306256-5W.jpg'),
(44, 3, 5, 'GS-706186/1W SN', '177.00', '', './images/big/706186_1W.jpg', './images/small/706186_1W.jpg'),
(45, 3, 5, 'GS-706208/1W SN', '177.00', '', './images/big/706208_1W.jpg', './images/small/706208_1W.jpg'),
(46, 3, 5, 'GS-706227/1W SN', '120.00', '', './images/big/706227_1W.jpg', './images/small/706227_1W.jpg'),
(47, 3, 5, 'GS-706228/1W SN', '160.00', '', './images/big/706228_1W.jpg', './images/small/706228_1W.jpg'),
(48, 3, 5, 'GS-706228/2W SN', '153.00', '', './images/big/706228_2W.jpg', './images/small/706228_2W.jpg'),
(49, 3, 5, 'GS-706229/2W B SN', '190.00', '', './images/big/706229_2W_B.jpg', './images/small/706229_2W_B.jpg'),
(50, 3, 5, 'GS-706229/6C SN', '599.00', '', './images/big/706229_6C.jpg', './images/small/706229_6C.jpg'),
(51, 3, 5, 'GS-706237/2W SN', '151.00', '', './images/big/706237_2W.jpg', './images/small/706237_2W.jpg'),
(52, 1, 5, 'GS-306002/3P', '230.00', '', './images/big/306002-3P.jpg', './images/small/306002-3P.jpg'),
(53, 1, 5, 'GS-306008/1P', '243.00', '', './images/big/306008_1P.jpg', './images/small/306008_1P.jpg'),
(54, 1, 5, 'GS-306021/3P', '230.00', '', './images/big/306021-3P.jpg', './images/small/306021-3P.jpg'),
(55, 1, 5, 'GS-306054/6C', '299.00', '', './images/big/306054_6C.jpg', './images/small/306054_6C.jpg'),
(56, 1, 5, 'GS-306088/2C', '210.00', '', './images/big/306088_2C.jpg', './images/small/306088_2C.jpg'),
(57, 1, 5, 'GS-306088/5P', '944.00', '', './images/big/306088_5P.jpg', './images/small/306088_5P.jpg'),
(58, 1, 5, 'GS-306117/5C SN', '265.00', '', './images/big/306117_5C.jpg', './images/small/306117_5C.jpg'),
(59, 1, 5, 'GS-306130/3P SN', '260.00', '', './images/big/306130_3P.jpg', './images/small/306130_3P.jpg'),
(60, 1, 5, 'GS-306133/5P GD', '1199.00', '', './images/big/306133_5P.jpg', './images/small/306133_5P.jpg'),
(61, 1, 5, 'GS-306163/3P F GD', '830.00', '', './images/big/306163_3P.jpg', './images/small/306163_3P.jpg'),
(62, 1, 5, 'GS-306180/1P SN', '145.00', '', './images/big/306180_1P.jpg', './images/small/306180_1P.jpg'),
(63, 1, 5, 'GS-306180/3P SN', '230.00', '', './images/big/306180_3P.jpg', './images/small/306180_3P.jpg'),
(64, 1, 5, 'GS-306180/5P SN', '355.00', '', './images/big/306180_5P.jpg', './images/small/306180_5P.jpg'),
(65, 1, 5, 'GS-306183/3P SN', '510.00', '', './images/big/306183_3P.jpg', './images/small/306183_3P.jpg'),
(66, 1, 5, 'GS-306184/3P', '250.00', '', './images/big/306184_3P.jpg', './images/small/306184_3P.jpg'),
(67, 1, 5, 'GS-306188/2P', '270.00', '', './images/big/306188_2P.jpg', './images/small/306188_2P.jpg'),
(68, 1, 5, 'GS-GS-306196/5P', '725.00', '', './images/big/306196_5P.jpg', './images/small/306196_5P.jpg'),
(69, 1, 5, 'GS-306202/5P SN', '460.00', '', './images/big/306202_5P.jpg', './images/small/306202_5P.jpg'),
(70, 1, 5, 'GS-306209/3P', '399.00', '', './images/big/306209_3P.jpg', './images/small/306209_3P.jpg'),
(71, 1, 5, 'GS-306218/3P SN', '257.00', '', './images/big/306218_3P.jpg', './images/small/306218_3P.jpg'),
(72, 1, 5, 'GS-306218/5P SN', '580.00', '', './images/big/306218_5P.jpg', './images/small/306218_5P.jpg'),
(73, 1, 5, 'GS-306253/6P CR', '820.00', '', './images/big/306253_6P.jpg', './images/small/306253_6P.jpg'),
(74, 1, 5, 'GS-306256/5C CR', '820.00', '', './images/big/306256_5C.jpg', './images/small/306256_5C.jpg'),
(75, 1, 5, 'GS-306260/6C SN', '299.00', '', './images/big/306260_6C.jpg', './images/small/306260_6C.jpg'),
(76, 2, 5, 'GS-306054/5F', '439.00', '', './images/big/306054-5F.jpg', './images/small/306054-5F.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `Topsale`
--

CREATE TABLE IF NOT EXISTS `Topsale` (
  `TopsaleID` int(11) NOT NULL,
  `ProductID` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Topsale`
--

INSERT INTO `Topsale` (`TopsaleID`, `ProductID`) VALUES
(1, 1),
(2, 2),
(3, 20);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Brands`
--
ALTER TABLE `Brands`
  ADD PRIMARY KEY (`BrandID`);

--
-- Индексы таблицы `Categories`
--
ALTER TABLE `Categories`
  ADD PRIMARY KEY (`CategoryID`);

--
-- Индексы таблицы `Products`
--
ALTER TABLE `Products`
  ADD PRIMARY KEY (`ProductID`),
  ADD KEY `BrandID` (`BrandID`),
  ADD KEY `CategoryID` (`CategoryID`);

--
-- Индексы таблицы `Topsale`
--
ALTER TABLE `Topsale`
  ADD PRIMARY KEY (`TopsaleID`),
  ADD KEY `ProductID` (`ProductID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Brands`
--
ALTER TABLE `Brands`
  MODIFY `BrandID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `Categories`
--
ALTER TABLE `Categories`
  MODIFY `CategoryID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `Products`
--
ALTER TABLE `Products`
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT для таблицы `Topsale`
--
ALTER TABLE `Topsale`
  MODIFY `TopsaleID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `Products`
--
ALTER TABLE `Products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`BrandID`) REFERENCES `Brands` (`BrandID`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`CategoryID`) REFERENCES `Categories` (`CategoryID`);

--
-- Ограничения внешнего ключа таблицы `Topsale`
--
ALTER TABLE `Topsale`
  ADD CONSTRAINT `topsale_ibfk_1` FOREIGN KEY (`ProductID`) REFERENCES `Products` (`ProductID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
