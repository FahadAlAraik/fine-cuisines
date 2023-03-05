-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15 ديسمبر 2021 الساعة 22:04
-- إصدار الخادم: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- بنية الجدول `albaikmenu`
--

CREATE TABLE `albaikmenu` (
  `imgSource` varchar(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `description` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `albaikmenu`
--

INSERT INTO `albaikmenu` (`imgSource`, `name`, `description`) VALUES
('AlBaik Menu/chicken-fillet-nuggets.png', 'Chicken-Fillet-Nuggets', '7 or 10 pieces chicken fillet nuggets'),
('AlBaik Menu/chicken-meal.png', 'Chicken-Meal', '4 or 8 pieces chicken meals come with fries');

-- --------------------------------------------------------

--
-- بنية الجدول `casapastamenu`
--

CREATE TABLE `casapastamenu` (
  `imgSource` varchar(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `description` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `casapastamenu`
--

INSERT INTO `casapastamenu` (`imgSource`, `name`, `description`) VALUES
('Casa Pasta Menu/beef-pasta.jpg', 'Beef-Pasta', 'Shrimp Pasta, nothing new.'),
('Casa Pasta Menu/shrimp-pasta.jpg', 'Shrimp-Pasta', 'Shrimp Pasta, nothing new.');

-- --------------------------------------------------------

--
-- بنية الجدول `cheesecakefactorymenu`
--

CREATE TABLE `cheesecakefactorymenu` (
  `imgSource` varchar(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `description` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `cheesecakefactorymenu`
--

INSERT INTO `cheesecakefactorymenu` (`imgSource`, `name`, `description`) VALUES
('Cheese Cake Factory Menu/RomanoChicken.jpg', 'Romano-Chicken-Macaroni', 'this one is also good'),
('Cheese Cake Factory Menu/steak-diane.jpg', 'Steak-Diane', 'I actually tried it, very good');

-- --------------------------------------------------------

--
-- بنية الجدول `herfymenu`
--

CREATE TABLE `herfymenu` (
  `imgSource` varchar(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `description` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `herfymenu`
--

INSERT INTO `herfymenu` (`imgSource`, `name`, `description`) VALUES
('Herfy Menu/kids-meal.png', 'Chicken-Kids-Meal-Burger', 'With a mystery prize in it '),
('Herfy Menu/chicken-tortilla.png', 'Chicken-Tortilla', 'Signature Tortilla');

-- --------------------------------------------------------

--
-- بنية الجدول `kfcmenu`
--

CREATE TABLE `kfcmenu` (
  `imgSource` varchar(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `description` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `kfcmenu`
--

INSERT INTO `kfcmenu` (`imgSource`, `name`, `description`) VALUES
('KFC Menu/super-dinner.png', 'Super-Dinner', '4 chicken pcs + fries + coleslaw + bun + drink'),
('KFC Menu/super-mega-deal.png', 'Super-Mega-Deal', '12 pcs Chicken + Fries');

-- --------------------------------------------------------

--
-- بنية الجدول `kudumenu`
--

CREATE TABLE `kudumenu` (
  `imgSource` varchar(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `description` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `kudumenu`
--

INSERT INTO `kudumenu` (`imgSource`, `name`, `description`) VALUES
('Kudu Menu/grilled-chicken-meal.png', 'Grilled-Chicken-Meal', 'Grilled Chicken and fries'),
('Kudu Menu/kudu-chicken.jpg', 'Signature-Kudu-Chicken', 'The famous kudu chicken meal');

-- --------------------------------------------------------

--
-- بنية الجدول `mcdonaldsmenu`
--

CREATE TABLE `mcdonaldsmenu` (
  `imgSource` varchar(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `description` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `mcdonaldsmenu`
--

INSERT INTO `mcdonaldsmenu` (`imgSource`, `name`, `description`) VALUES
('McDonalds Menu/grand-chicken-special.png\r\n', 'Grand-Chicken-Special', 'Try the new Grand Chicken Special'),
('McDonalds Menu/mcchicken.png', 'McChicken-Meal', 'Signature McChicken Meal');

-- --------------------------------------------------------

--
-- بنية الجدول `ratings`
--

CREATE TABLE `ratings` (
  `restaurant` varchar(128) NOT NULL,
  `fname` varchar(128) NOT NULL,
  `lname` varchar(128) NOT NULL,
  `rating` varchar(128) NOT NULL,
  `star` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- بنية الجدول `search`
--

CREATE TABLE `search` (
  `restaurant` varchar(128) NOT NULL,
  `specialty` varchar(128) NOT NULL,
  `location` varchar(128) NOT NULL,
  `rating` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `search`
--

INSERT INTO `search` (`restaurant`, `specialty`, `location`, `rating`) VALUES
('AlBaik', 'Sandwiches', 'Almalqa', '5'),
('CasaPasta', 'Sandwiches', 'Almoroj', '4'),
('CheeseCake-Factory', 'Steak Pizza', 'Ghirnatah', '5'),
('Herfy', 'Fast Food', 'Alshafa', '4'),
('KFC', 'Sandwiches', 'Olaya', '1'),
('Kudu', 'Burger', 'Alyasmeen', '3'),
('McDonalds', 'Fast Food', 'Riyadh', '5'),
('Shawarma-House', 'Sandwiches', 'Almoroj', '3'),
('Yummywok', 'Chineese', 'Alyasmeen', '2');

-- --------------------------------------------------------

--
-- بنية الجدول `shawarmahousemenu`
--

CREATE TABLE `shawarmahousemenu` (
  `imgSource` varchar(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `description` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `shawarmahousemenu`
--

INSERT INTO `shawarmahousemenu` (`imgSource`, `name`, `description`) VALUES
('Shawarma House Menu/arabie.jpg', 'Arabie-Chicken', 'regular Arabie Chicken'),
('Shawarma House Menu/chicken-shawarma.jpg', 'Chicken-Shawarma-Sandwich', 'regular sandwich');

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `firstName` varchar(128) NOT NULL,
  `lastName` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `admin` int(128) NOT NULL,
  `restaurant` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`firstName`, `lastName`, `email`, `password`, `admin`, `restaurant`) VALUES
('Fahad', 'AlAraik', 'fahad@gmail.com', '123', 1, 'Herfy'),
('lol', 'lol', 'lol', 'lol', 1, 'Open this select menu');

-- --------------------------------------------------------

--
-- بنية الجدول `yummywokmenu`
--

CREATE TABLE `yummywokmenu` (
  `imgSource` varchar(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `description` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `yummywokmenu`
--

INSERT INTO `yummywokmenu` (`imgSource`, `name`, `description`) VALUES
('Yummywok Menu/chinese-noodles.png', 'Chinese-Noodles', 'Famous Chinese Noodles'),
('Yummywok Menu/japanese-noodles.png', 'Japanese-Noodles', 'Famous Japanese Noodles');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albaikmenu`
--
ALTER TABLE `albaikmenu`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `casapastamenu`
--
ALTER TABLE `casapastamenu`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `cheesecakefactorymenu`
--
ALTER TABLE `cheesecakefactorymenu`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `herfymenu`
--
ALTER TABLE `herfymenu`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `kfcmenu`
--
ALTER TABLE `kfcmenu`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `kudumenu`
--
ALTER TABLE `kudumenu`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `mcdonaldsmenu`
--
ALTER TABLE `mcdonaldsmenu`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`restaurant`);

--
-- Indexes for table `shawarmahousemenu`
--
ALTER TABLE `shawarmahousemenu`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `yummywokmenu`
--
ALTER TABLE `yummywokmenu`
  ADD PRIMARY KEY (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
