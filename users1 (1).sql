-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2020 at 06:16 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users1`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `num` int(11) UNSIGNED NOT NULL,
  `id` int(11) NOT NULL,
  `size` varchar(32) NOT NULL,
  `colour` varchar(32) NOT NULL,
  `quantity` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`num`, `id`, `size`, `colour`, `quantity`) VALUES
(1, 10, '110', 'Black', '1'),
(2, 10, '110', 'Black', '1'),
(3, 10, '110', 'Black', '2'),
(4, 10, '110', 'Black', '1'),
(5, 10, '110', 'Black', '2'),
(6, 10, '110', 'Black', '1'),
(7, 10, '110', 'Black', '2'),
(8, 10, '110', 'Black', '1'),
(9, 10, '110', 'Black', '2'),
(10, 10, '110', 'Black', '1'),
(11, 10, '110', 'Black', '2'),
(12, 10, '110', 'Black', '1'),
(13, 10, '110', 'Black', '2'),
(14, 10, '110', 'Black', '1'),
(15, 10, '110', 'Black', '2'),
(16, 10, '110', 'Black', '1'),
(17, 10, '110', 'Black', '2'),
(18, 10, '110', 'Black', '1'),
(19, 10, '110', 'Black', '2'),
(20, 10, '110', 'Black', '1'),
(21, 10, '110', 'Black', '2'),
(22, 10, '110', 'Black', '1'),
(23, 10, '110', 'Black', '2'),
(24, 10, '110', 'Black', '1'),
(25, 10, '110', 'Black', '2'),
(26, 10, '110', 'Black', '1'),
(27, 10, '110', 'Black', '2'),
(28, 10, '110', 'Black', '1'),
(29, 10, '110', 'Black', '2'),
(30, 10, '110', 'Black', '1'),
(31, 10, '110', 'Black', '2'),
(32, 10, '110', 'Black', '1'),
(33, 10, '110', 'Black', '2'),
(34, 10, '110', 'Black', '1'),
(35, 10, '110', 'Black', '2'),
(36, 10, '110', 'Black', '1'),
(37, 10, '110', 'Black', '2'),
(38, 10, '110', 'Black', '1'),
(39, 10, '110', 'Black', '2'),
(40, 10, '110', 'Black', '1'),
(41, 10, '110', 'Black', '2'),
(42, 10, '110', 'Black', '1'),
(43, 10, '110', 'Black', '2'),
(44, 10, '110', 'Black', '1'),
(45, 10, '110', 'Black', '2'),
(46, 10, '110', 'Black', '1'),
(47, 10, '110', 'Black', '2'),
(48, 10, '110', 'Black', '1'),
(49, 10, '110', 'Black', '2'),
(50, 10, '110', 'Black', '1'),
(51, 10, '110', 'Black', '2'),
(52, 10, '110', 'Black', '1'),
(53, 10, '110', 'Black', '2'),
(54, 10, '110', 'Black', '1'),
(55, 10, '110', 'Black', '2'),
(56, 10, '110', 'Black', '1'),
(57, 10, '110', 'Black', '2'),
(58, 10, '110', 'Black', '1'),
(59, 10, '110', 'Black', '2'),
(60, 10, '110', 'Black', '1'),
(61, 10, '110', 'Black', '2'),
(62, 10, '110', 'Black', '1'),
(63, 10, '110', 'Black', '2'),
(64, 10, '110', 'Black', '1'),
(65, 10, '110', 'Black', '2'),
(66, 10, '110', 'Black', '1'),
(67, 10, '110', 'Black', '2');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mes` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `mes`) VALUES
(1, 'Dias', '8777777777', ''),
(2, 'Dias', '877777777', ''),
(3, 'Dias', '877777777', 'Hello'),
(4, 'Dias', '877777777', 'Hello'),
(5, 'Dias', '877777777', 'Hello'),
(6, 'Dias', '8747777887', 'HHHHHHHHHHHHH');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(20) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `brand` varchar(100) DEFAULT NULL,
  `size` varchar(100) NOT NULL,
  `color` varchar(100) DEFAULT NULL,
  `quantity` int(255) DEFAULT NULL,
  `info` text DEFAULT NULL,
  `quality` varchar(100) DEFAULT NULL,
  `moreinfo` text DEFAULT NULL,
  `styles` varchar(100) DEFAULT NULL,
  `properties` varchar(100) DEFAULT NULL,
  `price` int(8) DEFAULT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `category`, `brand`, `size`, `color`, `quantity`, `info`, `quality`, `moreinfo`, `styles`, `properties`, `price`, `status`) VALUES
(1, 'Nike Sportswear', 'Худи и толстовки', 'Nike', 'M', 'Blue', 5, 'Худи Nike Sportswear из мягкой ткани френч терри защищает от холода и обеспечивает комфорт. Надень модель, застегни молнию и покажи всем, за кого болеешь.', 'Хлопок', 'Худи Nike Sportswear из мягкой ткани френч терри защищает от холода и обеспечивает комфорт. Надень модель, застегни молнию и покажи всем, за кого болеешь.', 'Повседневная', 'Длинные рукава', 9000, 'Есть в наличии'),
(2, 'Nike Air', 'Худи и толстовки', 'Nike', 'S', 'Black', 7, 'Худи Nike Air выполнена из комфортного мягкого флиса со свободным кроем. Дизайн вдохновлен разметкой баскетбольной площадки.', '98% хлопок/2% спандекс', 'Худи Nike Air выполнена из комфортного мягкого флиса со свободным кроем. Дизайн вдохновлен разметкой баскетбольной площадки.', 'Повседневная', 'Длинные рукава', 10000, 'Есть в наличии'),
(3, 'ФУТБОЛКА SPIDER-MAN\r\n', 'Футболки и майки', 'Adidas', 'S M L', 'Black', 3, 'Если твоему ребенку нравится Человек-паук, то понравится и эта футболка adidas из мягкого и комфортного материала. Ведь в ней так удобно играть весь день.', 'Хлопок', 'Если твоему ребенку нравится Человек-паук, то понравится и эта футболка adidas из мягкого и комфортного материала. Ведь в ней так удобно играть весь день.', 'Повседневная ', 'Рифленый круглый ворот', 5000, 'Нет в наличии'),
(4, 'Nike Sportswear Windrunner', 'Куртки и жилеты', 'Nike', 'S M L XL', 'White', 10, 'Привлекай внимание — выбирай куртку Nike Sportswear Windrunner с принтом Just Do It. Эта классическая модель с молнией во всю длину, дизайн которой вдохновлен оригинальной курткой Windrunner 1978 года, идеально подходит для игр, тренировок и любых других занятий.', '98% полиэстер, 2% спандекс', 'Привлекай внимание — выбирай куртку Nike Sportswear Windrunner с принтом Just Do It. Эта классическая модель с молнией во всю длину, дизайн которой вдохновлен оригинальной курткой Windrunner 1978 года, идеально подходит для игр, тренировок и любых других занятий.', 'Повседневная', 'Молния во всю длину', 15000, 'Есть в наличии'),
(5, 'ХУДИ MUST HAVES BADGE OF SPORT', 'Худи и толстовки', 'Adidas', 'S M L XL', 'Black', 7, 'Универсальная худи для школы, спорта и отдыха. Удобный карман-кенгуру и прорезиненный логотип adidas на груди.\r\n\r\n', '70% хлопок / 30% полиэстер', 'Универсальная худи для школы, спорта и отдыха. Удобный карман-кенгуру и прорезиненный логотип adidas на груди.\r\n\r\n', 'Повседневная', 'Длинные рукава с удобными рифлеными манжетами', 20000, 'Есть в наличии'),
(6, 'ТОЛСТОВКА AEROREADY', 'Худи и толстовки', 'Adidas', 'M L', 'Red', 2, 'Толстовка adidas в спортивном стиле для тренировок и отдыха. Удлиненная модель дополнена манжетами с прорезями для больших пальцев, которые уютно согревают руки. Отводящая влагу ткань сохраняет ощущения сухости во время активного движения.', '100% полиэстер', 'Толстовка adidas в спортивном стиле для тренировок и отдыха. Удлиненная модель дополнена манжетами с прорезями для больших пальцев, которые уютно согревают руки. Отводящая влагу ткань сохраняет ощущения сухости во время активного движения.', 'Повседневная', 'Застежка на молнию; воротник-стойка', 13000, 'Есть в наличии'),
(7, 'БРЮКИ CONDIVO 20', 'Брюки и джинсы', 'Adidas', '128 140 152', 'Blue', 5, 'На скамье запасных. На улицах города. Будь амбассадором красивой игры. Эти облегающие брюки Condivo с термопринтами выполнены в классическом футбольном стиле. Чем бы ты ни занимался вне поля, мягкая ткань будет впитывать влагу и обеспечивать комфорт.', '100% переработанный полиэстер', 'На скамье запасных. На улицах города. Будь амбассадором красивой игры. Эти облегающие брюки Condivo с термопринтами выполнены в классическом футбольном стиле. Чем бы ты ни занимался вне поля, мягкая ткань будет впитывать влагу и обеспечивать комфорт.', 'Для спорта', 'Легкий, впитывающий влагу материал AEROREADY', 7000, 'Есть в наличии'),
(8, 'БРЮКИ LINEAR COLORBLOCK', 'Брюки и джинсы', 'Adidas', '110 116 128', 'Grey', 0, 'Эти брюки с атлетическим кроем подойдут к любому образу. Модель, вдохновленная классическими спортивными костюмами adidas, сочетает в себе комфорт и стиль на каждый день.\r\n\r\n', '70% хлопок, 30% переработанный полиэстер', 'Эти брюки с атлетическим кроем подойдут к любому образу. Модель, вдохновленная классическими спортивными костюмами adidas, сочетает в себе комфорт и стиль на каждый день.\r\n\r\n', 'Для спорта', 'Эластичный пояс на завязках-шнурках', 9000, 'Нет в наличии'),
(9, 'ФУТБОЛКА CONDIVO 20', 'Футболки и майки', 'Adidas', 'S', 'Black', 4, 'Победа на футбольном поле означает множество часов усердных тренировок. В этом джерси Condivo ты сможешь показать все, на что способен. Легкая ткань впитывает влагу, а удлиненная спинка закрывает поясницу.\r\n\r\n', '98% переработанный полиэстер', 'Победа на футбольном поле означает множество часов усердных тренировок. В этом джерси Condivo ты сможешь показать все, на что способен. Легкая ткань впитывает влагу, а удлиненная спинка закрывает поясницу.\r\n\r\n', 'Для спорта', 'Классический крой, круглый ворот', 4000, 'Есть в наличии'),
(10, 'ШОРТЫ MUST HAVES 3-STRIPES', 'Юбки и шорты', 'Adidas', '110 116 128', 'Black', 2, 'Чем хороша одежда в спортивном стиле? Ее главная задача: твой комфорт. Эти шорты adidas для юных спортсменов выполнены из особо мягкой ткани. Культовые три полоски по бокам не оставляют сомнения в том, какой бренд ты выбираешь.\r\n\r\n', ' 52% хлопок / 48% переработанный полиэстер', 'Чем хороша одежда в спортивном стиле? Ее главная задача: твой комфорт. Эти шорты adidas для юных спортсменов выполнены из особо мягкой ткани. Культовые три полоски по бокам не оставляют сомнения в том, какой бренд ты выбираешь.\r\n\r\n', 'Для спорта', 'Эластичный пояс на завязках-шнурках', 4500, 'Есть в наличии');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `login` varchar(100) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `name`, `email`) VALUES
(1, 'admin', '85f36d9e6ca704c4c4203ee1dfca387c', 'admin', ''),
(2, 'Dias', '9f0b5c5afc2606e46c0443987ac39770', 'Dias', '');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `num` int(11) UNSIGNED NOT NULL,
  `id` int(20) NOT NULL,
  `quantity` varchar(11) NOT NULL,
  `colour` varchar(32) NOT NULL,
  `size` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`num`, `id`, `quantity`, `colour`, `size`) VALUES
(1, 10, '1', 'Black', '110'),
(2, 10, '2', 'Black', '110');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`num`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`num`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `num` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1004;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `num` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
