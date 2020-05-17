<?php

$filterGroupData = "INSERT INTO `filter_group` (`id`, `category_id`, `title`) VALUES
(8, 6, 'Объем оперативной памяти '),
(9, 6, 'Поколение процессора Intel'),
(10, 6, 'Цвет '),
(11, 6, 'Оптический привод '),
(12, 6, 'Количество слотов для оперативной памяти'),
(13, 6, 'Батарея'),
(14, 6, 'Тип оперативной памяти '),
(15, 31, 'Разрешение дисплея '),
(16, 31, 'Тип матрицы '),
(17, 31, 'Оперативная память '),
(18, 31, 'Встроенная память '),
(19, 31, 'Максимальный объем поддерживаемой карты памяти '),
(20, 31, 'Комбинированный слот'),
(21, 31, 'Операционная система '),
(22, 31, 'Количество ядер '),
(23, 31, 'Стабилизация основной камеры '),
(24, 31, 'Емкость аккумулятора '),
(25, 31, 'Возможность беспроводной зарядки'),
(26, 31, 'Быстрая зарядка'),
(27, 31, 'Материал корпуса'),
(28, 31, 'Разъем зарядного устройства'),
(29, 31, 'Цвет '),
(30, 22, 'Объем памяти'),
(31, 22, 'Разрядность шины памяти'),
(32, 22, 'Тип памяти'),
(33, 22, 'Форм-фактор'),
(34, 22, 'Дополнительное питание'),
(35, 22, 'Максимально поддерживаемое разрешение'),
(36, 22, 'Минимально необходимая мощность БП'),
(51, 23, 'Объем'),
(52, 23, 'Тип накопителя'),
(53, 24, 'Тип разъема'),
(54, 24, 'Формфактор'),
(55, 24, 'Встроенное видео'),
(56, 24, 'Количество разъемов SATA II'),
(57, 24, 'Количество разъемов SATA III'),
(58, 24, 'Количество слотов памяти'),
(59, 25, 'Мощность'),
(60, 25, 'Модульное подключение кабелей'),
(61, 25, 'Тип'),
(62, 26, 'Форм-фактор материнской платы'),
(63, 26, 'Количество отсеков 5.25'),
(64, 26, 'Количество отсеков 2.5'),
(65, 26, 'Мощность блока питания'),
(66, 27, 'Назначение'),
(67, 27, 'Размеры'),
(68, 27, 'Размер вентилятора'),
(69, 28, 'Диагональ дисплея'),
(70, 28, 'Максимальное разрешение дисплея'),
(71, 28, 'Тип матрицы'),
(72, 28, 'Частота обновления'),
(73, 28, 'Интерфейсы'),
(74, 28, 'Отношение сторон'),
(75, 28, 'Цвет'),
(76, 28, 'Встроенные колонки'),
(77, 28, 'Игровые технологии'),
(78, 28, 'Покрытие'),
(79, 29, 'Размер мыши'),
(80, 29, 'Назначение'),
(81, 29, 'Интерфейс'),
(82, 29, 'Длина кабеля'),
(83, 33, 'Объём памяти'),
(84, 33, 'Стандарт памяти'),
(85, 34, 'Форм-фактор'),
(86, 34, 'Материал'),
(87, 34, 'Цвет'),
(88, 34, 'Подходит к'),
(89, 34, 'Особенности'),
(90, 35, 'Вид'),
(91, 35, 'Наличие рамки'),
(92, 36, 'Максимальная загрузка белья'),
(93, 36, 'Класс отжима'),
(94, 36, 'Класс энергопотребления'),
(95, 36, 'Количество белья при сушке'),
(96, 37, 'Тип компрессора '),
(97, 37, 'Способ установки'),
(98, 37, 'Система размораживания холодильной камеры'),
(99, 37, 'Количество компрессоров '),
(100, 37, 'Тип управления '),
(101, 37, 'Расположение морозильной камеры'),
(102, 38, 'Тип'),
(103, 38, 'Газ-контроль'),
(104, 39, 'Тип управления'),
(105, 39, 'Ручные настройки'),
(106, 39, 'Дисплей'),
(107, 40, 'Тип'),
(108, 40, 'Способ установки'),
(109, 40, 'Объем'),
(110, 40, 'Цвет'),
(111, 41, 'Тип используемого кофе'),
(112, 41, 'Резервуар для воды'),
(113, 41, 'Емкость для молока'),
(114, 42, 'Колка льда'),
(115, 42, 'Тип'),
(116, 42, 'Вес'),
(117, 42, 'Цвет изделия'),
(118, 42, 'Мощность'),
(119, 43, 'Тип компрессора'),
(120, 43, 'Функции'),
(121, 43, 'Цвет'),
(122, 44, 'Тип'),
(123, 44, 'Максимальная мощность'),
(124, 44, 'Количество лопастей'),
(125, 44, 'Управление'),
(126, 44, 'Вид'),
(127, 44, 'Диаметр'),
(128, 45, 'Мощность'),
(129, 45, 'Объем'),
(130, 45, 'Индикатор температуры'),
(131, 46, 'Тип'),
(132, 46, 'Цвет'),
(133, 46, 'Максимальная нагрузка'),
(134, 46, 'Обивка'),
(135, 48, 'Материал'),
(136, 48, 'Материал чехла'),
(137, 49, 'Размер'),
(138, 49, 'Тип'),
(139, 49, 'Цвет'),
(140, 51, 'Ширина'),
(141, 51, 'Глубина'),
(142, 51, 'Высота'),
(143, 51, 'Особенности'),
(144, 52, 'Тип'),
(145, 52, 'Цвет'),
(146, 52, 'Вид'),
(147, 52, 'Материал каркаса')";

return $filterGroupData;
