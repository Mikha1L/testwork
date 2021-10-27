-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 27 2021 г., 13:06
-- Версия сервера: 8.0.24
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `users`
--

-- --------------------------------------------------------

--
-- Структура таблицы `account`
--

CREATE TABLE `account` (
  `id` int NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `company_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `position` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `first_phone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `second_phone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `third_phone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `account`
--

INSERT INTO `account` (`id`, `first_name`, `last_name`, `email`, `company_name`, `position`, `first_phone`, `second_phone`, `third_phone`) VALUES
(11, 'Иван', 'Иванов', 'ivan@mail.ru', 'ООО \"Кирпич\"', 'Директор', '88524455640', '2154817', NULL),
(12, 'Петр', 'Петров', 'petya@gmail.com', NULL, NULL, '89254687755', NULL, NULL),
(13, 'Слон', 'Слонов', 'slon@mail.com', 'Зоопарк', 'Слон', NULL, NULL, NULL),
(14, 'Игорь', 'Грибов', 'gribovigor@mail.com', 'Лесник', 'Лесник', '2568495', NULL, NULL),
(15, 'Александр', 'Пушкин', 'pushkin@mail.com', NULL, 'Писатель', NULL, NULL, NULL),
(16, 'Бот', 'Тестовый', 'bot@bot.com', 'Ботоводство', 'Бот', '7894561', '895214567821', '1238547'),
(17, 'Бот', 'Ботов', 'bot@bot.com', NULL, NULL, NULL, NULL, NULL),
(18, 'Бот', 'Ботов', 'bot@bot.com', NULL, NULL, NULL, NULL, NULL),
(19, 'Бот', 'Ботов', 'bot@bot.com', NULL, NULL, NULL, NULL, NULL),
(20, 'Бот', 'Ботов', 'bot@bot.com', NULL, NULL, NULL, NULL, NULL),
(21, 'Бот', 'Ботов', 'bot@bot.com', NULL, NULL, NULL, NULL, NULL),
(22, 'Бот', 'Ботов', 'bot@bot.com', NULL, NULL, NULL, NULL, NULL),
(23, 'Бот', 'Ботов', 'bot@bot.com', NULL, NULL, NULL, NULL, NULL),
(24, 'Бот', 'Ботов', 'bot@bot.com', NULL, NULL, NULL, NULL, NULL),
(25, 'Бот', 'Ботов', 'bot@bot.com', NULL, NULL, NULL, NULL, NULL),
(26, 'Бот', 'Ботов', 'bot@bot.com', NULL, NULL, NULL, NULL, NULL),
(27, 'Бот', 'Ботов', 'bot@bot.com', NULL, NULL, NULL, NULL, NULL),
(28, 'Бот', 'Ботов', 'bot@bot.com', NULL, NULL, NULL, NULL, NULL),
(29, 'Бот', 'Ботов', 'bot@bot.com', NULL, NULL, NULL, NULL, NULL),
(30, 'Бот', 'Ботов', 'bot@bot.com', NULL, NULL, NULL, NULL, NULL),
(31, 'Бот', 'Ботов', 'bot@bot.com', NULL, NULL, NULL, NULL, NULL),
(32, 'Бот', 'Ботов', 'bot@bot.com', NULL, NULL, NULL, NULL, NULL),
(33, 'Бот', 'Ботов', 'bot@bot.com', NULL, NULL, NULL, NULL, NULL),
(34, 'Михаил', 'Седых', 'm.sed159@gmail.com', NULL, 'В поиске работы', NULL, NULL, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `account`
--
ALTER TABLE `account`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
