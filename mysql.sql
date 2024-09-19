SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE `Courier` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


INSERT INTO `Courier` (`id`, `name`) VALUES
(1, 'Петров Иван'),
(2, 'Семенов Игорь'),
(3, 'Байбурин Антон'),
(4, 'Потапов Андрей'),
(5, 'Булатов Анвар'),
(6, 'Андреева Анна'),
(7, 'Вагапов Илья'),
(8, 'Карпов Артур'),
(9, 'Касперский Роберт'),
(10, 'Галеев Роберт');

CREATE TABLE `Region` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `travel_time` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `Region` (`id`, `name`, `travel_time`) VALUES
(1, 'Санкт-Петербург', 1),
(2, 'Уфа', 2),
(3, 'Нижний Новгород', 3),
(4, 'Владимир', 4),
(5, 'Кострома', 5),
(6, 'Екатеринбург', 6),
(7, 'Ковров', 7),
(8, 'Воронеж', 8),
(9, 'Самара', 9),
(10, 'Астрахань', 10);

CREATE TABLE `Travel` (
  `id` int(10) NOT NULL,
  `region_id` int(10) NOT NULL,
  `departure` date NOT NULL,
  `courier_id` int(10) NOT NULL,
  `arrive` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `Travel` (`id`, `region_id`, `departure`, `courier_id`, `arrive`) VALUES
(1, 1, '2024-09-15', 1, '2024-09-16'),
(2, 2, '2024-09-01', 2, '2024-09-03'),
(3, 3, '2024-09-16', 3, '2024-09-19'),
(4, 4, '2024-09-19', 4, '2024-09-23'),
(5, 5, '2024-09-04', 5, '2024-09-09'),
(6, 6, '2024-09-03', 6, '2024-09-09'),
(7, 7, '2024-09-23', 7, '2024-09-30');

ALTER TABLE `Courier`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `Region`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `Travel`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `Courier`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

ALTER TABLE `Region`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

ALTER TABLE `Travel`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
