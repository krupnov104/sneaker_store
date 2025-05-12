-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 10 2025 г., 18:07
-- Версия сервера: 5.7.39
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cart`
--

CREATE TABLE `cart` (
  `id` int(30) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `price` varchar(155) CHARACTER SET utf8 NOT NULL,
  `size` varchar(10) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `price` varchar(255) CHARACTER SET utf8 NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 NOT NULL,
  `description` varchar(15000) CHARACTER SET utf8 NOT NULL,
  `size` int(10) NOT NULL,
  `gen` varchar(15) CHARACTER SET utf8 NOT NULL,
  `brend` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `name`, `price`, `image`, `description`, `size`, `gen`, `brend`) VALUES
(1, 'Adidas Yeezy 500', '11990', '/img/goods/product1.png', 'Adidas Yeezy 500 ‘Blush’ — это новая модель кроссовок от Канье Уэста, сочетающая в себе ретро-стиль и современные технологии. Впервые представленные в ограниченном выпуске в феврале 2018 года в Нью-Йорке и Лос-Анджелесе, Yeezy 500 ‘Desert Rat Blush’ были переизданы в апреле того же года. Верх кроссовок ‘Desert Rat Blush’ изготовлен из премиальной замши и сетки, а резиновая подошва с амортизационным материалом adiPRENE+ напоминает технологию adidas ‘Feet You Wear’ 1990-х годов. Yeezy 500 ‘Desert Rat Blush’ стали первой моделью серии Yeezy 500.', 0, 'men', 'Adidas'),
(2, 'Nike Air Max 270', '7990', '/img/goods/product2.png', 'Кроссовки Nike Air Max 270 сочетают увеличенный язычок как у модели Air Max 180 и классические элементы дизайна Air Max 93. Эта модель с самой большой вставкой Nike Air в области пятки обеспечивает воздушную легкость при каждом шаге. Детали: смещенная шнуровка, верх из воздухопроницаемой сетки с накладками из полимерного материала, подошва из пеноматериала и большая вставка Max Air в области пятки для мягкой амортизации и комфорта каждый день.\r\n', 0, 'men', 'Nike'),
(3, 'Nike Air Force 1', '9990', '/img/goods/product3.png', 'Культовые кроссовки Nike Air Force 1 \'07 высоты low с акцентным «свушем» и фирменными шильдиками на шнурках в честь первого выпуска. Модель, история которой началась с 1982 года, получила свое название в честь самолета президента США Air Force One и стала популярной благодаря завышенной пятке и технологии амортизации для дополнительной надежности и комфорта.', 0, 'men', 'Nike'),
(4, 'Air Jordan 4 Seafoam', '15990', '/img/goods/product4.png', 'Модель \"Seafoam\" характеризуется мягким оттенком зеленого, известным как \"Oil Green\", который покрывает верхнюю часть обуви. Верх выполнен из высококачественного замша и кожи, что придает ей как стилю, так и долговечности. В дизайне присутствуют черные и белые детали, что создает эффект контраста и делает модель более универсальной для повседневной носки и коллабораций.', 0, 'men', 'Nike'),
(5, 'Nike Air Zoom Pegasus 37', '10990', '/img/goods/product5.png', 'Упругая, мягкая и износостойкая пена React пришла на замену пеноматериалу Cushlon. Благодаря этому модель получила еще больше упругости и амортизации без увеличения веса кроссовка.\r\n\r\nВставка Air Zoom осталась только в передней части стопы и поменяла свое расположение, давление в капсуле Air Zoom мужской версии составляет 1,4 атмосферы, а в женской 1 атмосфера для максимальной упругости при каждом шаге.', 0, 'women', 'Nike'),
(6, 'Nike React Infinity Run', '9990', '/img/goods/product6.png', 'Концептуально новая модель в линейке Nike созданная для снижения вероятности возникновения травм. \r\nПодошва полностью выполнена из упругой, мягкой и износостойкой пены React. Infinity Run получила на 24% больше React, чем модель Epic React 2019 года, это позволило значительно повысить амортизацию кроссовка. Геометрия подошвы Fluid Geometry за счет дополнительных бороздок и канавок помогает в фазах отталкивания и приземления.', 0, 'women', 'Nike'),
(7, 'Nike Air Max 90', '13990', '/img/goods/product7.png', 'Кроссовки AIR MAX 90 NN выполнены из комбинации искусственной кожи и текстиля. Амортизационная система AIR MAX на основе воздушных вставок помогает справиться с ударными нагрузками, обеспечивая необходимую защиту. Детали: усиленный мыс, шнуровка для плотной фиксации стопы, текстильная подкладка и стелька, рельефная резиновая подошва для оптимального сцепления с поверхностью.', 0, 'men women', 'Nike'),
(8, 'Nike Cortez', '8490', '/img/goods/product8.png', 'Кроссовки Nike Cortez Classic Leather, созданные в 1972 году как первые беговые кроссовки Nike, стали теперь иконой уличного стиля. Детали: верх из гладкой натуральной кожи, логотип Swoosh, подошва из легкого пеноматериала EVA, зубчатый узор на резиновой подметке обеспечивает надежное сцепление, что делает модель подходящей не только для повседневного ношения, но и для активного движения, шнуровка.', 0, 'women', 'Nike'),
(9, 'Nike Blazer Mid', '9990', '/img/goods/product9.png', 'Кеды Nike Blazer Mid \'77 Next Nature в классическом исполнении содержат не менее 20% переработанного материала по весу. Кожаный верх заменен на более экологичный верх из частично переработанной синтетической кожи. Открытый пеноматериал на язычке создает образ в стиле ретро. Цельная подошва, созданная методом термической обработки, придает модели минималистичный вид, который не теряет актуальности. Подметка из твердой резины с зигзагообразным рисунком для отличного сцепления и прочности.', 0, 'women men', 'Nike');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(5) UNSIGNED NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(130) NOT NULL,
  `email` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `email`) VALUES
(2, 'Shurik', '3bd131e613213ab1cfd18938ca259220', 'sasakrupnov8@gmail.com'),
(3, 'Sasha', '7d3e05fe908448cc4c2d841914dfeda3', 'sk_5plus@list.ru'),
(4, 'Denis', 'ca30facb679315df1f25f3de17884f48', 'qwdqwd@gmail.com'),
(5, 'Светлана', 'c93ce44de696500eae101c1e5a30d615', 'sk_5plus@list.ru'),
(6, 'Медный', '14cd28b34f00a9e58884d0426488806e', 'mednyi@gmail.com'),
(7, 'admin', 'c1739f3825e8903cddf94ce22c2e31b5', 'sasakrupnov8@gmail.com');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
