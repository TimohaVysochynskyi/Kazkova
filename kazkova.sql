-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Час створення: Гру 04 2023 р., 10:02
-- Версія сервера: 10.4.28-MariaDB
-- Версія PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `kazkova`
--

-- --------------------------------------------------------

--
-- Структура таблиці `final_feedback`
--

CREATE TABLE `final_feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `text` text NOT NULL,
  `media` varchar(256) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп даних таблиці `final_feedback`
--

INSERT INTO `final_feedback` (`id`, `name`, `text`, `media`, `date`) VALUES
(1, 'Користувач', 'Цей сайт просто бомба!!', 'tg avatar.jpg', '2023-12-03 20:53:26'),
(2, 'Користувач', 'Офігезний сайт!', 'Біологія зошит ДЗ -- 19.10.2023.png', '2023-12-03 20:54:45'),
(3, 'Користувач', 'Цей сайт просто топ!', '', '2023-12-03 20:55:03');

-- --------------------------------------------------------

--
-- Структура таблиці `kazka`
--

CREATE TABLE `kazka` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `author` varchar(256) NOT NULL,
  `model` varchar(256) NOT NULL,
  `audio` varchar(256) NOT NULL,
  `text` text NOT NULL,
  `all_star` text NOT NULL,
  `star_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп даних таблиці `kazka`
--

INSERT INTO `kazka` (`id`, `name`, `author`, `model`, `audio`, `text`, `all_star`, `star_count`) VALUES
(1, 'Казка про тролів', 'Маргарита Сурженко', 'troll', 'troll', 'https://nochdobra.com/kazka-pro-troliv/', '5 |', 1),
(2, 'Динозаврикова вежа', 'Лана Ра', 'dinosaurs', 'dinosaurs', 'https://derevo-kazok.org/dinozavrikova-vezha-lana-ra.html', '5 |', 1),
(3, 'Всюдисушка-задавака', 'Оксана Шпортько', 'fish', 'fish', 'https://kazka.in/fairytails/oksana-shportko/vsyudysushka-zadavaka.html', '5 |', 1),
(4, 'Казка про Печальку', 'Катерина Гаврилова', 'pichalka', 'pichalka', 'https://dytpsyholog.com/2015/05/23/%D0%BA%D0%B0%D0%B7%D0%BA%D0%B0-%D0%BF%D1%80%D0%BE-%D0%BF%D0%B5%D1%87%D0%B0%D0%BB%D1%8C%D0%BA%D1%83/', '5 |', 1),
(5, 'Подорож морського коника', 'Марія Солтис Смирнова', 'konik', 'konik', 'https://www.svitkazok.in.ua/morskyi-konyk/', '5 |', 1),
(6, 'Як равлик бавився', 'Секора Ондржей', 'mushlia', 'mushlia', 'https://chl.kiev.ua/pub/Publication/Show/415', '5 | ', 1),
(7, 'Літачок-рятівничок', 'Наталя Вовк', 'litak', 'litak', 'litak', '5 |', 1),
(8, 'Прохана мавпочка', 'Автор', 'mavpa', 'mavpa', '#', '5 |', 1);

-- --------------------------------------------------------

--
-- Структура таблиці `user_feedback`
--

CREATE TABLE `user_feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `text` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `final_feedback`
--
ALTER TABLE `final_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `kazka`
--
ALTER TABLE `kazka`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `user_feedback`
--
ALTER TABLE `user_feedback`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `final_feedback`
--
ALTER TABLE `final_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблиці `kazka`
--
ALTER TABLE `kazka`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблиці `user_feedback`
--
ALTER TABLE `user_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
