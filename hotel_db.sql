-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2023 at 10:00 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `orderform`
--

CREATE TABLE `orderform` (
  `id` int(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL,
  `price` decimal(11,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderform`
--

INSERT INTO `orderform` (`id`, `username`, `password`, `price`) VALUES
(1, 'tess', '2000', '50'),
(2, 'lyn', 'lyn', '130'),
(3, 'lyn', 'lyn', '130'),
(4, 'chatter', '12345', '90'),
(5, 'yope', 'yope', '80'),
(6, '', '', '0'),
(7, 'cartoon', 'cartoon', '70'),
(8, 'yope', 'yope', '60'),
(9, 'mark', 'mark', '430'),
(10, 'yope', 'yope', '0'),
(179, 'yope', 'yope', '30'),
(180, 'yope', 'yope', '30'),
(181, 'yope', 'yope', '120'),
(182, 'yope', 'yope', '300'),
(183, 'yope', 'yope', '300'),
(184, 'mark', 'mark', '150'),
(185, 'mark', 'mark', '150'),
(186, 'mark', 'mark', '150'),
(187, 'mark', 'mark', '150'),
(188, 'yope', 'yope', '300'),
(189, 'mark', 'mark', '180'),
(190, '', '', '30'),
(191, '', '', '30'),
(192, '', '', '30'),
(193, '', '', '30'),
(194, '', '', '30'),
(195, '', '', '30'),
(196, '', '', '30'),
(197, 'yope', 'yope', '0'),
(198, '', '', '0'),
(199, 'yope', 'yope', '0'),
(200, 'yope', 'yope', '0'),
(201, 'yope', 'yope', '30'),
(202, '', '', '60'),
(203, '', '', '60'),
(204, '', '', '0'),
(205, '', '', '0'),
(206, '', '', '0'),
(207, '', '', '0'),
(208, '', '', '0'),
(209, '', '', '0'),
(210, '', '', '0'),
(211, '', '', '0'),
(212, '', '', '0'),
(213, '', '', '330'),
(214, '', '', '330'),
(215, 'mark', 'mark', '360'),
(216, 'mark', '', '300'),
(217, 'yope', '', '330'),
(218, 'yope', '', '330'),
(219, 'mark', '', '150'),
(220, 'mark', '', '150'),
(221, 'mark', '', '200'),
(222, 'mark', '', '200'),
(223, 'mark', 'mark', '200'),
(224, 'mark', 'mark', '200'),
(225, 'mark', 'mark', '180'),
(226, 'yope', 'yope', '60'),
(227, 'yope', 'yope', '60'),
(228, 'yope', 'yope', '60'),
(229, 'yope', 'yope', '660'),
(230, '', '', '180'),
(231, '', '', '180'),
(232, '', '', '180'),
(233, '', '', '180'),
(234, '', '', '180'),
(235, 'mark', 'mark', '650'),
(236, 'mark', 'mark', '650'),
(237, 'yope', 'yope', '820'),
(238, 'yope', 'yope', '820'),
(239, 'mark', 'mark', '1000'),
(240, 'mark', 'mark', '1000'),
(241, 'mark', 'mark', '1000'),
(242, 'mark', 'mark', '520'),
(243, 'abc', 'abc', '180'),
(244, 'abc', 'abc', '180'),
(245, '', '', '500'),
(246, '', '', '500'),
(247, '', '', '30'),
(248, '', '', '240'),
(249, '', '', '240'),
(250, 'abc', 'abc', '1210');

-- --------------------------------------------------------

--
-- Table structure for table `orderforms`
--

CREATE TABLE `orderforms` (
  `id` int(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL,
  `mobilephone` int(11) NOT NULL,
  `date` timestamp(5) NOT NULL DEFAULT current_timestamp(5) ON UPDATE current_timestamp(5),
  `price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderforms`
--

INSERT INTO `orderforms` (`id`, `username`, `password`, `mobilephone`, `date`, `price`) VALUES
(1, 'cartoon', 'cartoon', 0, '0000-00-00 00:00:00.00000', '200'),
(2, 'admin', 'admin', 0, '0000-00-00 00:00:00.00000', '280'),
(6, 'yope', 'yope', 0, '0000-00-00 00:00:00.00000', '150'),
(7, 'mark', 'mark', 0, '0000-00-00 00:00:00.00000', '260'),
(9, 'kate', 'kate', 0, '0000-00-00 00:00:00.00000', '180'),
(10, 'kate', 'kate', 0, '0000-00-00 00:00:00.00000', '170'),
(11, 'mark', 'mark', 0, '0000-00-00 00:00:00.00000', '60'),
(16, 'cartoon', 'cartoon', 0, '0000-00-00 00:00:00.00000', '0'),
(17, 'cartoon', 'cartoon', 0, '0000-00-00 00:00:00.00000', '0'),
(18, 'cartoon', 'cartoon', 0, '0000-00-00 00:00:00.00000', '0'),
(19, 'cartoon', 'cartoon', 0, '0000-00-00 00:00:00.00000', '80'),
(20, 'yope', 'yope', 0, '0000-00-00 00:00:00.00000', '90'),
(21, 'mark', 'mark', 0, '0000-00-00 00:00:00.00000', '60'),
(22, 'kate', 'kate', 0, '0000-00-00 00:00:00.00000', '80'),
(23, 'kate', 'kate', 0, '0000-00-00 00:00:00.00000', '80'),
(24, 'mark', 'mark', 0, '0000-00-00 00:00:00.00000', '200'),
(27, 'cartoon', 'cartoon', 0, '0000-00-00 00:00:00.00000', '310'),
(28, 'cartoon', 'cartoon', 0, '0000-00-00 00:00:00.00000', '310'),
(29, 'cartoon', 'cartoon', 0, '0000-00-00 00:00:00.00000', '90'),
(30, 'faith', '123', 0, '0000-00-00 00:00:00.00000', '210'),
(31, 'faith', '123', 0, '0000-00-00 00:00:00.00000', '210'),
(32, 'faith', '123', 0, '0000-00-00 00:00:00.00000', '210'),
(33, 'faith', '123', 0, '0000-00-00 00:00:00.00000', '210'),
(34, 'faith', '123', 0, '0000-00-00 00:00:00.00000', '40'),
(35, 'cartoon', 'cartoon', 0, '0000-00-00 00:00:00.00000', '60'),
(36, 'cartoon', 'cartoon', 0, '0000-00-00 00:00:00.00000', '60'),
(37, 'yope', 'yope', 0, '0000-00-00 00:00:00.00000', '90'),
(38, 'yope', 'yope', 0, '0000-00-00 00:00:00.00000', '90'),
(39, 'kate', 'kate', 0, '0000-00-00 00:00:00.00000', '90'),
(40, 'kate', 'kate', 0, '0000-00-00 00:00:00.00000', '90'),
(41, 'kate', 'kate', 0, '0000-00-00 00:00:00.00000', '90'),
(42, 'kate Njeri', 'kate', 717624188, '0000-00-00 00:00:00.00000', '210'),
(43, 'kate', 'kate', 0, '0000-00-00 00:00:00.00000', '30'),
(44, 'magdaline A', 'magda', 2147483647, '0000-00-00 00:00:00.00000', '120'),
(45, 'magdaline A', 'magda', 2147483647, '0000-00-00 00:00:00.00000', '250'),
(46, 'yope', 'yope', 717624100, '0000-00-00 00:00:00.00000', '140'),
(47, 'mark daniel', 'mark', 710159342, '0000-00-00 00:00:00.00000', '240'),
(48, 'mark daniel', 'mark', 710159342, '0000-00-00 00:00:00.00000', '240'),
(49, 'mark daniel', 'mark', 710159342, '0000-00-00 00:00:00.00000', '240'),
(50, 'mark daniel', 'mark', 710159342, '0000-00-00 00:00:00.00000', '240'),
(51, 'mark daniel', 'mark', 710159342, '0000-00-00 00:00:00.00000', '240'),
(52, 'magdaline A', 'magda', 799935935, '0000-00-00 00:00:00.00000', '200'),
(53, 'magdaline A', 'magda', 799935935, '0000-00-00 00:00:00.00000', '200'),
(54, 'magdaline A', 'magda', 799935935, '0000-00-00 00:00:00.00000', '200'),
(55, 'magdaline A', 'magda', 799935935, '0000-00-00 00:00:00.00000', '200'),
(56, 'magdaline A', 'magda', 799935935, '0000-00-00 00:00:00.00000', '340'),
(57, 'magdaline A', 'magda', 799935935, '0000-00-00 00:00:00.00000', '340'),
(58, 'magdaline A', 'magda', 799935935, '0000-00-00 00:00:00.00000', '280'),
(59, 'magdaline A', 'magda', 799935935, '0000-00-00 00:00:00.00000', '280'),
(60, 'magdaline A', 'magda', 799935935, '0000-00-00 00:00:00.00000', '280'),
(61, 'magdaline A', 'magda', 799935935, '0000-00-00 00:00:00.00000', '390'),
(64, 'magdaline A', 'magda', 799935935, '0000-00-00 00:00:00.00000', '290'),
(65, 'magdaline A', 'magda', 799935935, '0000-00-00 00:00:00.00000', '300'),
(66, 'magdaline A', 'magda', 799935935, '0000-00-00 00:00:00.00000', '390'),
(67, 'magdaline A', 'magda', 799935935, '0000-00-00 00:00:00.00000', '290'),
(68, 'magdaline A', 'magda', 799935935, '0000-00-00 00:00:00.00000', '360'),
(73, 'Basil ben', 'basil', 710159308, '0000-00-00 00:00:00.00000', '180'),
(74, 'magdaline A', 'magda', 710159308, '0000-00-00 00:00:00.00000', '290'),
(75, 'magdaline A', 'magda', 799935935, '0000-00-00 00:00:00.00000', '90'),
(76, 'magdaline A', 'magda', 710159308, '0000-00-00 00:00:00.00000', '420'),
(77, 'lewnorah', 'lew', 759300234, '0000-00-00 00:00:00.00000', '260'),
(78, 'lewnorah', 'lew', 759300234, '0000-00-00 00:00:00.00000', '260'),
(79, 'magdaline A', 'magda', 799935935, '0000-00-00 00:00:00.00000', '120'),
(80, 'magdaline A', 'magda', 799935935, '0000-00-00 00:00:00.00000', '270'),
(81, 'magdaline A', 'magda', 799935935, '0000-00-00 00:00:00.00000', '270'),
(82, 'magdaline A', 'magda', 799935935, '0000-00-00 00:00:00.00000', '150'),
(83, 'magdaline A', 'magda', 799935935, '0000-00-00 00:00:00.00000', '90'),
(84, 'lewnorah', 'lew', 759300234, '0000-00-00 00:00:00.00000', '320'),
(85, 'mark daniel', 'mark', 789945679, '0000-00-00 00:00:00.00000', '240'),
(86, 'mark daniel', 'mark', 789945679, '0000-00-00 00:00:00.00000', '240'),
(87, 'yope', 'yope', 99987654, '0000-00-00 00:00:00.00000', '30'),
(88, 'yope', 'yope', 789945679, '0000-00-00 00:00:00.00000', '30'),
(89, 'mark daniel', 'mark', 788945674, '0000-00-00 00:00:00.00000', '60'),
(90, '', '', 0, '0000-00-00 00:00:00.00000', '60'),
(91, '', '', 0, '0000-00-00 00:00:00.00000', '60'),
(92, '', '', 0, '0000-00-00 00:00:00.00000', '30'),
(93, 'magdaline A', 'magda', 799935935, '0000-00-00 00:00:00.00000', '150'),
(94, 'magdaline A', 'magda', 799935935, '2023-05-07 21:00:00.00000', '250'),
(95, 'magdaline A', 'magda', 799935935, '2023-05-07 21:00:00.00000', '120'),
(96, 'magdaline A', 'magda', 799935935, '2023-05-07 21:00:00.00000', '120'),
(97, 'magdaline A', 'magda', 799935935, '2023-05-07 21:00:00.00000', '60'),
(98, 'magdaline A', 'magda', 799935935, '2023-05-08 21:00:00.00000', '230'),
(99, 'magdaline A', 'magda', 799935935, '2023-05-08 21:00:00.00000', '270'),
(100, 'magdaline A', 'magda', 799935935, '2023-05-08 21:00:00.00000', '270'),
(101, 'magdaline A', 'magda', 799935935, '2023-05-08 21:00:00.00000', '30'),
(102, 'magdaline A', 'magda', 799935935, '2023-05-08 21:00:00.00000', '30'),
(103, '', '', 0, '0000-00-00 00:00:00.00000', '0'),
(104, '', '', 0, '0000-00-00 00:00:00.00000', '30'),
(105, '', '', 0, '0000-00-00 00:00:00.00000', '30'),
(106, '', '', 0, '0000-00-00 00:00:00.00000', '30'),
(107, '', '', 0, '0000-00-00 00:00:00.00000', '30'),
(108, '', '', 0, '0000-00-00 00:00:00.00000', '30'),
(109, '', '', 0, '0000-00-00 00:00:00.00000', '30'),
(110, 'magdaline A', 'mgda', 799935935, '2023-05-08 21:00:00.00000', '30'),
(111, 'magdaline A', 'mgda', 799935935, '2023-05-08 21:00:00.00000', '30'),
(112, 'magdaline A', 'magda', 799935935, '2023-05-08 21:00:00.00000', '30'),
(113, 'magdaline A', 'magda', 799935935, '2023-05-08 21:00:00.00000', '30'),
(114, 'magdaline A', 'magda', 799935935, '2023-05-08 21:00:00.00000', '30'),
(115, 'magdaline A', '', 0, '0000-00-00 00:00:00.00000', '30'),
(116, 'magdaline A', 'magda', 799935935, '2023-05-08 21:00:00.00000', '30'),
(117, 'magdaline A', 'magda', 799935935, '2023-05-08 21:00:00.00000', '30'),
(118, 'magdaline A', 'magda', 799935935, '2023-05-08 21:00:00.00000', '50'),
(119, 'magdaline A', 'magda', 799935935, '2023-05-08 21:00:00.00000', '50'),
(120, 'mark daniel', 'mark', 789945679, '2023-05-08 21:00:00.00000', '30'),
(121, 'magdaline A', 'magda', 799935935, '2023-05-08 21:00:00.00000', '20'),
(122, 'magdaline A', 'magda', 799935935, '2023-05-08 21:00:00.00000', '20'),
(123, 'magdaline A', 'magda', 799935935, '2023-05-08 21:00:00.00000', '30'),
(124, 'magdaline A', 'magda', 799935935, '2023-05-08 21:00:00.00000', '30'),
(125, 'mark daniel', 'mark', 789945679, '2023-05-08 21:00:00.00000', '20'),
(126, 'Basil ben', 'basil', 799935935, '2023-05-08 21:00:00.00000', '60'),
(127, '', '', 0, '2023-05-10 13:20:32.54540', '0'),
(128, 'magdaline A', 'magda', 799935935, '2023-05-10 13:20:53.39054', '0'),
(129, 'mary', 'mary', 710159243, '2023-05-10 13:25:07.35675', '0'),
(130, 'mary atieno', 'mary', 710159243, '2023-05-10 13:25:33.73856', '0'),
(131, 'mark daniel', 'mark', 789945679, '2023-05-09 21:00:00.00000', '30'),
(132, 'sharon Njer', 'sharon', 734564589, '2023-05-10 13:43:30.05903', '0'),
(133, 'liz Mary', 'liza', 702068092, '2023-05-09 21:00:00.00000', '120'),
(134, 'liz Mary', 'liza', 702068092, '2023-05-09 21:00:00.00000', '120'),
(135, 'liz Mary', 'liza', 702068092, '2023-05-09 21:00:00.00000', '80'),
(136, 'Akoko Jane', 'jane', 712345687, '2023-05-10 14:14:05.42681', '0'),
(137, 'magdaline A', 'magda', 799935935, '2023-05-11 21:00:00.00000', '100'),
(138, 'chatter', '12345', 710159308, '2023-05-12 21:00:00.00000', '170'),
(139, 'chatter', '12345', 710159308, '2023-05-12 21:00:00.00000', '170'),
(140, 'chatter', '12345', 710159308, '2023-05-12 21:00:00.00000', '70'),
(141, 'baso', 'baso', 710159342, '2023-05-13 07:04:55.93370', '0'),
(142, 'magdaline A', 'magda', 799935935, '2023-05-15 21:00:00.00000', '30'),
(143, 'magdaline A', 'magda', 799935935, '2023-05-20 21:00:00.00000', '30'),
(144, 'magdaline A', 'magda', 799935935, '2023-05-21 21:00:00.00000', '50'),
(145, 'magdaline A', 'magda', 799935935, '2023-05-22 21:00:00.00000', '100'),
(146, 'magdaline A', 'magda', 799935935, '2023-05-22 21:00:00.00000', '100'),
(147, 'magdaline A', 'magda', 799935935, '2023-05-22 21:00:00.00000', '80'),
(148, 'magdaline A', 'magda', 799935984, '2023-05-23 21:00:00.00000', '30'),
(149, 'magdaline A', 'magda', 799935984, '2023-05-24 21:00:00.00000', '70'),
(150, 'katenjeri', 'kate', 717624180, '2023-05-24 21:00:00.00000', '100'),
(151, 'magdaline A', 'magda', 799935984, '2023-05-25 21:00:00.00000', '30'),
(152, 'mark Daniel', 'mark', 710159342, '2023-05-25 21:00:00.00000', '80'),
(153, 'Tania Wanji', 'tania', 799935935, '2023-05-25 21:00:00.00000', '60'),
(154, 'Tania Wanji', 'tania', 799935935, '2023-05-25 21:00:00.00000', '60'),
(155, 'Tania Wanji', 'tania', 799935935, '2023-05-25 21:00:00.00000', '60'),
(156, 'magdaline A', 'magda', 799935935, '2023-05-26 21:00:00.00000', '100'),
(157, 'magdaline A', 'magda', 799935935, '2023-05-28 21:00:00.00000', '30'),
(158, 'magdaline A', 'magda', 799935935, '2023-05-29 21:00:00.00000', '100');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `itemordered` varchar(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `username`, `itemordered`, `quantity`, `price`, `total`) VALUES
(1, '0', 'tastybeans', 0, 30, 0),
(2, '0', 'tastytea', 0, 50, 0),
(3, '0', 'tastychapat', 0, 20, 0),
(4, 'tess', 'Tea', 0, 40, 0),
(5, 'tess', 'Tea', 0, 40, 0),
(6, 'tess', 'Tea', 0, 50, 0),
(7, 'tess', 'Tea', 0, 50, 0),
(8, 'tess', 'Tea', 0, 20, 0),
(9, 'tess', 'Tea', 0, 20, 0),
(10, 'tess', 'Tea', 0, 30, 0),
(11, 'tess', 'Tea', 0, 20, 0),
(12, 'tess', 'tastytea', 0, 30, 0),
(13, 'tess', 'tastychapat', 1, 20, 20),
(14, 'sda', 'tastybeans', 1, 30, 30),
(15, 'nana', 'tastytea', 2, 50, 100);

-- --------------------------------------------------------

--
-- Table structure for table `register_tbl`
--

CREATE TABLE `register_tbl` (
  ` id` int(11) NOT NULL,
  `email` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register_tbl`
--

INSERT INTO `register_tbl` (` id`, `email`, `password`) VALUES
(1, 'magdaariand', '123456789'),
(2, 'test@testin', '12345'),
(3, 'magdaariand', '12345678'),
(4, 'benta@gmail', '123w'),
(5, 'benta@gmail', '123w');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(100) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `user_type`) VALUES
(1, '', 'arianda', '123456789', 'admin'),
(2, '', 'joseph', 'qwerty', 'user'),
(3, '', 'Antony', 'mimi', 'user'),
(4, '', 'Emma', '123', 'user'),
(5, '', 'Basil', '12345', 'user'),
(6, 'benta@gmail.com', '', '123w', 'user'),
(7, 'teresa@gmail.com', '', '123e', 'user'),
(8, 'wewe@gmail.com', '', 'ccc', 'user'),
(9, 'sasa@gmail.com', '', 'sss', 'user'),
(10, 'abe@gmail.com', 'abe', 'qwe', 'user'),
(11, 'apiyo@gmail.com', 'sda', 'sda', 'user'),
(12, 'tess@gmail.com', 'tess', '2000', 'user'),
(13, 'nana@gmail.com', 'nana', 'nnn', 'user'),
(14, 'chatme245@gmail.com', 'chatter', '12345', 'user'),
(15, 'admin@gmail.comm', 'admin', 'admin', 'user'),
(16, 'lyn@gmail.com', 'lyn', 'lyn', 'user'),
(17, 'chatter@gmail.com', 'chatter', '', 'user'),
(18, 'yope@gmail.com', 'yope', 'yope', 'user'),
(19, 'cartoon@gmail.com', 'cartoon', 'cartoon', 'user'),
(20, 'markdaniel@gmail.com', 'mark', 'mark', 'user'),
(21, 'perris', 'perris', 'perris', 'user'),
(22, 'perris@gmail.com', 'perris', 'perris', 'user'),
(23, 'alice@gmail.com', 'Alice', 'Alice', 'user'),
(24, 'antonyg@gmail.com', 'Antony', '1234', 'user'),
(25, 'abc@gmail.com', 'abc', 'abc', 'user'),
(26, 'kate@gmail.com', 'kate', 'kate', 'user'),
(27, 'Faith@gmail.com', 'faith', '123', 'user'),
(28, 'ariandalyn@gmail.com', 'magdaline Arianda', 'magda', 'user'),
(29, 'katen@gmail.com', 'katenjeri', 'kate', 'user'),
(30, 'xyz@gmail.com', 'xyz n', 'xyz n', 'user'),
(31, 'jerry@gmail.com', 'jerry nj', 'jerry', 'user'),
(32, 'markd@gmail.com', 'mark daniel', 'mark', 'user'),
(33, 'basilo@gmail.com', 'Basil ben', 'basil', 'user'),
(34, 'lewnorah@gmail.com', 'lewnorah', 'lew', 'user'),
(35, 'liziane@gmail.com', 'liz Mary', 'liza', 'user'),
(36, '', 'Sarah Lyn', 'sarah', 'user'),
(37, 'jane@gmail.com', 'jane njeri', 'jane', 'user'),
(38, 'dianag.gmail.com', 'Diana Wangari', 'diana', 'user'),
(39, 'jackyj@gmail.com', 'Jacky Wangeci', 'jacky', 'user'),
(40, 'maryb@gmail.com', 'Mary Otieno', 'mary', 'user'),
(41, 'Taniam@gmail.com', 'Tania Wanjiku', 'tania', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orderform`
--
ALTER TABLE `orderform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderforms`
--
ALTER TABLE `orderforms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register_tbl`
--
ALTER TABLE `register_tbl`
  ADD PRIMARY KEY (` id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orderform`
--
ALTER TABLE `orderform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=251;

--
-- AUTO_INCREMENT for table `orderforms`
--
ALTER TABLE `orderforms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `register_tbl`
--
ALTER TABLE `register_tbl`
  MODIFY ` id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
