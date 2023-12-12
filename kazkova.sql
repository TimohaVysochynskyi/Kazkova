-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Час створення: Гру 12 2023 р., 21:41
-- Версія сервера: 10.4.27-MariaDB
-- Версія PHP: 8.2.0

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
(1, 'Оксана - мама Михайлика', 'З молодшим сином (4 роки) тестували 3Д казки. Казки повчального змісту,&nbsp; що озвучені приємними голосами. Після вибору казки на екрані з&#039;являється головний герой в 3Д форматі, якого можна за допомогою комп&#039;ютерної мишки збільшувати, зменшувати, повертати в різні сторони. Ідея просто чудова! Дитина не просто слухає казку, але й під час прослуховування взаємодіє з головним героєм. \n<br>Дякуємо за розвиток україномовної анімації❤️', 'InShot_20231209_082848342.mp4', '2023-12-11 10:11:29');

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
(7, 'Літачок-рятівничок', 'Наталя Вовк', 'litak', 'litak', '#', '5 |', 1),
(8, 'Прохана мавпочка', 'Автор', 'mavpa', 'mavpa', '#', '5 |', 1),
(9, 'Як зайчик сон шукав', 'Ольга Зубер', 'rabbit', 'rabbit', 'https://kazkaua.org/page/yak-zajchik-son-shukav-kazka-olgi-zuber', '5 |', 1),
(10, 'Казка про планету Земля', 'Зоя Дубінська', 'planet', 'planet', '#', '5 |', 1);

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
-- Дамп даних таблиці `user_feedback`
--

INSERT INTO `user_feedback` (`id`, `name`, `text`, `date`) VALUES
(2, 'Класний керівник (у понеділок спитаю) класу', 'На питання, &quot;Що вам сподобалося більш за все?&quot;, мої учні відповіли: &quot;Нам сподобалися іграшки! З ними можна гратися, поки слухаєш казку&quot;. &quot;І казки! Ми їх раніше не чули&quot;.', '2023-12-10 19:31:32');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблиці `kazka`
--
ALTER TABLE `kazka`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблиці `user_feedback`
--
ALTER TABLE `user_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
