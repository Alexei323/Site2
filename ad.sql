-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 17 2019 г., 00:55
-- Версия сервера: 5.7.25
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
-- База данных: `ad`
--

-- --------------------------------------------------------

--
-- Структура таблицы `apartments`
--

CREATE TABLE `apartments` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `header` text NOT NULL,
  `square` text NOT NULL,
  `price` text NOT NULL,
  `outside` text NOT NULL,
  `home` text NOT NULL,
  `nomer` text NOT NULL,
  `content` text NOT NULL,
  `contact` text NOT NULL,
  `date` text NOT NULL,
  `status` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `apartments`
--

INSERT INTO `apartments` (`id`, `id_user`, `header`, `square`, `price`, `outside`, `home`, `nomer`, `content`, `contact`, `date`, `status`, `category_id`) VALUES
(210, 1, '2', '55', '2 300 000', 'Катукова', '4', '66', 'В квартире сделан евроремонт.', '8 904 884 63 75', '01.04.2019', 1, 1),
(212, 1, '3', '122', '4 500 000', 'Шерстобитова', '33', '45', 'Квартира в отличном состоянии', '8 904 688 34 64', '01.04.2019', 1, 1),
(214, 1, '1', '44', '1 500 000', 'Зегеля', '3', '55', 'В центре города.', '8 904 644 75 86', '01.04.2019', 1, 1),
(215, 1, '2', '60', '2 500 500', 'Неделина', '44', '2', 'Без мебели, с хорошим ремонтом', '8 904 554 75 86', '01.04.2019', 1, 1),
(216, 1, '1', '87', '2 400 000', 'Терешковой', '33', '65', 'Квартира чистая и просторная.', '8 904 688 54 67', '01.04.2019', 1, 1),
(217, 1, '2', '88', '2 800 000', 'Белана', '5', '33', 'В квартире установлен кондиционер, мебель входит в стоимость', '8 904 688 54 67', '01.04.2019', 0, 1),
(218, 1, '3', '99', '3 500 000', 'Кривенкова', '44', '22', 'Ремонт от застройщика', '8 904 884 63 75', '01.04.2019', 0, 1),
(219, 1, '4', '120', '4 600 000', 'Катукова', '3', '69', 'Дом сдан, вид во двор', '8 904 554 75 86', '01.04.2019', 0, 1),
(220, 1, '2', '67', '2 300 000', 'Неделина', '5', '32', 'В отличном состоянии', '8 904 688 34 64', '01.04.2019', 1, 1),
(221, 1, '3', '89', '3 300 000-', 'Белана', '4', '66', 'Сделан дорогой ремонт', '8 904 554 75 86', '01.04.2019', 1, 1),
(222, 1, '1', '43', '2 300 000', 'Кривенкова', '8', '98', 'Ремонт от застройщика', '8 904 688 34 64', '01.04.2019', 1, 1),
(223, 1, '2', '66', '3 000 000', 'Шерстобитова', '4', '65', 'Срочно продам', '8 904 554 75 86', '01.04.2019', 1, 1),
(224, 1, '3', '120', '4 500 000', 'Зегеля', '65', '33', 'В квартире установлен кондиционер.', '8 904 688 34 64', '01.04.2019', 1, 1),
(225, 1, '4', '120', '3 500 000', 'Хорошавина', '44', '33', 'Квартира в отличном состоянии', '8 904 554 75 86', '01.04.2019', 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sort_order` varchar(20) NOT NULL,
  `status` int(11) NOT NULL,
  `url` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`, `sort_order`, `status`, `url`) VALUES
(1, 'Квартиры', '', 1, ''),
(2, 'Автомобили', '', 1, ''),
(3, 'Работа', '', 1, ''),
(4, 'Услуги', '', 1, ''),
(5, 'Бизнес', '', 1, ''),
(6, 'Техника', '', 1, ''),
(7, 'Спорт и отдых', '', 1, ''),
(8, 'Стройка', '', 1, ''),
(9, 'Мебель', '', 1, ''),
(10, 'Личные вещи', '', 1, ''),
(11, 'Животные', '', 1, ''),
(12, 'Разное', '', 1, '');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role`) VALUES
(3, 'Николай', 'kola@kola.ru', '123456', ''),
(11, 'Алексей', 'alexeitara5ov@yandex.ru', '123456', 'admin');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `apartments`
--
ALTER TABLE `apartments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `apartments`
--
ALTER TABLE `apartments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=232;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
