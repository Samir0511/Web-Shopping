-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2023 at 07:55 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `ID` int(3) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `MOBILE_NO` int(10) NOT NULL,
  `MESSAGE` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`ID`, `NAME`, `MOBILE_NO`, `MESSAGE`) VALUES
(2, 'pratik', 2147483647, 'iu9jju9');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(3) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` text NOT NULL,
  `rating` int(11) NOT NULL,
  `type` text NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `product_image1` text NOT NULL,
  `product_image2` text NOT NULL,
  `product_image3` text NOT NULL,
  `product_image4` text NOT NULL,
  `product_image5` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`, `rating`, `type`, `description`, `thumbnail`, `product_image1`, `product_image2`, `product_image3`, `product_image4`, `product_image5`) VALUES
(132, 'APPLE IPHONE 14', '8245', 4, 'Mobile', 'RAM|ROM:256 GB ROM\r\nProcessor:A15 Bionic Chip,6 Core Processor\r\nRear Camera:12MP+12MP\r\nFront Camera:12MP\r\nDisplay:6.1 inch Super Retina XDR Display\r\nNetwork Type:5G,4G VOLTE,4G,3G,2G\r\nIn The Box:Handset, USB-C to Lightning Cable,Documentation\r\nColor:Midnight', 'IMG_20230210_181850.jpg', 'IMG_20230210_182028.jpg', 'IMG_20230210_181959.jpg', 'IMG_20230210_182028.jpg', 'IMG_20230210_181919.jpg', 'IMG_20230210_181934.jpg'),
(133, 'APPLE IPHONE 13', '72,999', 4, 'Mobile', 'RAM|ROM:256 GB ROM\r\nProcessor:A15 Bionic Chip\r\nRear Camera:12MP+12MP\r\nFront Camera:12MP\r\nDisplay:6.1 inch Super Retina XDR Display\r\nNetwork Type:5G,4G,3G,2G\r\nIn The Box:Handset, USB-C to Lightning Cable,Documentation\r\nColor:Midnight', 'IMG_20230210_183829.jpg', 'IMG_20230210_183815.jpg', 'IMG_20230210_183756.jpg', 'IMG_20230217_174838.jpg', 'IMG_20230210_183742.jpg', 'IMG_20230210_183726.jpg'),
(134, 'APPLE IPHONE 12', '66,999', 4, 'Mobile', 'RAM|ROM:256 GB ROM\r\nProcessor:A14 Bionic Chip with Next Generation Neural\r\nRear Camera:12MP+12MP\r\nFront Camera:12MP\r\nDisplay:6.1 inch Super Retina XDR Display\r\nNetwork Type:5G,4G,3G,2G\r\nIn The Box:Handset, USB-C to Lightning Cable,Documentation\r\nColor: Black', 'IMG_20230210_183154.jpg', 'IMG_20230210_183139.jpg', 'IMG_20230210_183053.jpg', 'IMG_20230217_175117.jpg', 'IMG_20230210_183124.jpg', 'IMG_20230210_183109.jpg'),
(135, 'APPLE IPHONE 11', '46,999', 3, 'Mobile', 'RAM|ROM:128 GB ROM\r\nProcessor:A13 Bionic Chip\r\nRear Camera:12MP+12MP\r\nFront Camera:12MP\r\nDisplay:6.1 inch Liquid Retina HD\r\nNetwork Type:4G VOLTE,4G,3G,2G\r\nIn The Box:Handset, USB-C to Lightning Cable,Documentation\r\nColor: Black', 'IMG_20230210_182728.jpg', 'IMG_20230210_182710.jpg', 'IMG_20230210_182650.jpg', 'IMG_20230210_182620.jpg', 'IMG_20230218_083544.jpg', 'IMG_20230210_182635.jpg'),
(138, 'GOOGLE PIXAL 7 ', '56,999', 4, 'Mobile', 'RAM|ROM:8 GB|128 GB ROM\r\nProcessor:Google Tensor G2\r\nRear Camera:50MP+12MP\r\nFront Camera:10.8MP\r\nDisplay:6.3 inch Full HD+ OLED Display,Battery:4270 mAh\r\nNetwork Type:5G,4G,3G,2G\r\nIn The Box:Handset, 1 M USB-C to USB-C Cable(USB 2.0), Quick Switch Adapter, Sim Tool   \r\nColor:Obsidian', '61U-Bid4WYL._SX679_.jpg', 'IMG_20230218_101049.jpg', 'IMG_20230218_101210.jpg', 'IMG_20230218_101246.jpg', 'IMG_20230218_101155.jpg', 'IMG_20230218_101134.jpg'),
(140, 'GOOGLE PIXAL 6A', '29,999', 3, 'Mobile', 'RAM|ROM:6 GB|128 GB ROM\r\nProcessor:Google Tensor \r\nRear Camera:12.2MP+12MP\r\nFront Camera:8MP\r\nDisplay:6.14 inch Full HD+ OLED Display,Battery:4410 mAh\r\nNetwork Type:5G,4G,3G,2G\r\nIn The Box:Handset, 1 M USB-C to USB-C Cable(USB 2.0), Quick Switch Adapter, Sim Tool   \r\nColor:Charcoal', 'IMG_20230218_101007.jpg', 'IMG_20230218_100953.jpg', 'IMG_20230218_100931.jpg', 'IMG_20230218_100902.jpg', 'IMG_20230218_100848.jpg', 'IMG_20230218_100918.jpg'),
(141, ' GOOGLE PIXAL 4A', '31,999', 4, 'Mobile', 'RAM|ROM:12 GB|128 GB ROM Processor:Qualcomm Snapdragon 730G Rear Camera:12.2MP Front Camera:8MP Display:5.81 inch Full HD+ OLED Display,Battery:3140 mAh Network Type:4G VOLTE,4G,3G,2G In The Box:Handset, 1 M USB-C to USB-C Cable(USB 2.0), Quick Switch Adapter, Sim Tool Color:Just Black\r\n\r\n', 'IMG_20230218_100143.jpg', 'IMG_20230218_100302.jpg', 'IMG_20230218_100236.jpg', 'IMG_20230218_100319.jpg', 'IMG_20230218_100143.jpg', 'IMG_20230218_100120.jpg'),
(142, 'ONEPLUS 11 5G', '56,999', 4, 'Mobile', 'RAM|ROM:8 GB|128 GB ROM Processor:Octa Core 3.2 GHz Rear Camera:50MP Display:6.7 inch ,Battery:5000 mAh Network Type:5G, In The Box:Data Cable,Quick Guide,SIM enjector tool,Protective case,Charger,user guide & phone Color:Titan Black\r\n', 'IMG_20230220_185637.jpg', 'IMG_20230220_185620.jpg', 'IMG_20230220_185557.jpg', 'IMG_20230220_185537.jpg', 'IMG_20230220_185515.jpg', 'IMG_20230220_185620.jpg'),
(143, 'ONEPLUS 10T 5G', '48,999', 4, 'Mobile', 'RAM|ROM:8 GB|128 GB ROM Processor:Octa Core 3.19 GHz Rear Camera:50MP Display:6.7 inch ,Battery:4800 mAh Network Type:5G, In The Box: Tray Ejector,Adapter,Phone Case,USB Cable Color:Titan Black\r\n\r\n', 'IMG_6022.jpg', 'IMG_6023.jpg', 'IMG_6024.jpg', 'IMG_6025.jpg', 'IMG_6023.jpg', 'IMG_6024.jpg'),
(144, 'OPPO RENO8T 5G', '29,999', 4, 'Mobile', 'RAM|ROM:8 GB|128 GB ROM Processor:Qualcomm Snapdragon 695 Rear Camera:108MP+2MP+2MP Front Camera:32MP Display:6.7 inch Full HD+ 3D Flexible OLED Display,Battery:4800 mAh Network Type:5G,4G VOLTE,4G,3G,2G In The Box:Handset,Charger,USB Data Cable,Sim Ejector Tool,Quick Guide,Safety Guide,Protective Case  Color:Midnight Black\r\n\r\n', 'IMG_6022.jpg', 'IMG_6025.jpg', 'IMG_6024.jpg', 'IMG_6023.jpg', 'IMG_6025.jpg', 'IMG_6024.jpg'),
(147, 'ONEPLUS 10R 5G', '35,990', 4, 'Mobile', 'RAM|ROM:8 GB|128 GB ROM Processor:Octa Core 2.2 GHz Rear Camera:50MP Display:6.7 inch ,Battery:5000 mAh Network Type:5G, In The Box:Handset,Sim Trey Ejector,Adapter,Phone Case,USB Cable Color:Sierra Black\r\n', 'IMG_6015.jpg', 'IMG_6014.jpg', 'IMG_6013.jpg', 'IMG_6012.jpg', 'IMG_6011.jpg', 'IMG_6014.jpg'),
(148, 'MACKBOOK AIR M1', '1,29,999', 4, 'COMPUTER', 'Stylish & Portable Thin and Light Laptop,13.3 inch Quad LED Backlight IPS Display(227 PPI,400 nits Brightness,Wide Colour(P3),True Tone Technology),Light Laptop without Optical Disk Drive\r\ncolour:Space Gray,\r\nPower Supply:30W AC Adapter,\r\nSSD:512,RAM:16GB\r\n', 'Screenshot_2023-02-10-18-55-08-99_c4b2fae5edd267b2847f1b32e9bc41c3.jpg', 'Screenshot_2023-02-10-18-55-11-37_c4b2fae5edd267b2847f1b32e9bc41c3.jpg', 'Screenshot_2023-02-10-18-55-14-02_c4b2fae5edd267b2847f1b32e9bc41c3.jpg', 'Screenshot_2023-02-10-18-55-24-01_c4b2fae5edd267b2847f1b32e9bc41c3.jpg', 'Screenshot_2023-02-10-18-55-26-94_c4b2fae5edd267b2847f1b32e9bc41c3.jpg', 'Screenshot_2023-02-10-18-55-29-85_c4b2fae5edd267b2847f1b32e9bc41c3.jpg'),
(149, 'MACBOOK AIR M2', '1,31,999', 4, 'COMPUTER', 'Stylish & Portable Thin and Light Laptop,13.6 inch Liquid Retina Display LED Backlight display with IPS Technology,500 nits Brightness,Wide Colour(P3),True Tone Technology),Light Laptop without Optical Disk Drive\r\ncolour:Space Gray,\r\nPower Supply:30W USB-C Power Adapter,\r\nSSD:256,RAM:16GB', 'Screenshot_2023-02-10-18-57-13-69_c4b2fae5edd267b2847f1b32e9bc41c3.jpg', 'Screenshot_2023-02-10-18-57-17-48_c4b2fae5edd267b2847f1b32e9bc41c3.jpg', 'Screenshot_2023-02-10-18-57-23-66_c4b2fae5edd267b2847f1b32e9bc41c3.jpg', 'Screenshot_2023-02-10-18-57-34-36_c4b2fae5edd267b2847f1b32e9bc41c3.jpg', 'Screenshot_2023-02-10-18-57-17-48_c4b2fae5edd267b2847f1b32e9bc41c3.jpg', 'Screenshot_2023-02-10-18-57-13-69_c4b2fae5edd267b2847f1b32e9bc41c3.jpg'),
(150, 'SAMSUNG BOOK2', '79,999', 4, 'COMPUTER', 'Stylish & Portable Thin and Light Laptop,15.6 inch Full HD  LED Backlight Display,Anti-Glare,Finger Print Sensor for Faster System Aceess,Light Laptop without Optical Disk Drive,\r\ncolour:Silver,\r\nPower Supply:65W USB Type-C Adapter,\r\nSSD:512,RAM:8GB,Graphic:4GB\r\n', 'IMG_20230220_184805.jpg', 'IMG_20230220_184822.jpg', 'IMG_20230220_184839.jpg', 'IMG_20230220_184906.jpg', 'IMG_20230220_184921.jpg', 'IMG_20230220_184948.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` char(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(10) NOT NULL DEFAULT '',
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(29, 'yogesh', 'yogesh@gmail.com', '63ee451939ed580ef3c4b6f0109d1fd0', '2147483647', 'palitana', 'palitana'),
(37, 'pratik', 'pratik@gmail.com', '14e1b600b1fd579f47433b88e8d85291', '2147483647', 'hvdfvkjrdhvk', 'cddekvkch'),
(38, 'divyesh123', 'divyeshnarigara@gmail.com', '14e1b600b1fd579f47433b88e8d85291', '2147483647', 'palitana', 'palitana'),
(39, 'sakir', 'sakir@gmail.com', '9db06bcff9248837f86d1a6bcf41c9e7', '2147483647', 'bhvanagar', 'palitana'),
(40, 'divyesh123', 'divyeshnarigara123@gmail.com', '6110b4dcb6eeace03f07863176cc3fc3', '9824946051', 'palitana', 'palitana'),
(41, 'YASHBHA', 'yash123@gmail.com', '63ee451939ed580ef3c4b6f0109d1fd0', '98989898', 'PALITANA', 'PALIATANA'),
(42, 'rohit', 'rkvariya@gmail.com', '14e1b600b1fd579f47433b88e8d85291', '9601499753', 'palitana', 'palitana'),
(43, 'samir', 'rutvikdhameliya3247@gmail.com', 'fa59d2b94e355a8b5fd0c6bac0c81be5', '1234567890', 'palitana', 'asdfghjk'),
(44, 'Rutvik', 'rutvikdhameliyaaaa@gmail.com', 'fa59d2b94e355a8b5fd0c6bac0c81be5', '2345678', 'fghjk', 'dfghjk');

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

CREATE TABLE `users_items` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_items`
--

INSERT INTO `users_items` (`id`, `user_id`, `item_id`, `status`) VALUES
(2, 44, 30, 'Added to cart'),
(3, 44, 3, 'Added to cart'),
(4, 44, 2, 'Added to cart'),
(5, 44, 1, 'Added to cart'),
(6, 44, 4, 'Added to cart'),
(7, 44, 8, 'Added to cart'),
(8, 43, 3, 'Added to cart'),
(9, 43, 17, 'Added to cart'),
(10, 43, 0, 'Added to cart'),
(11, 43, 0, 'Added to cart'),
(12, 43, 0, 'Added to cart'),
(13, 43, 0, 'Added to cart'),
(14, 43, 0, 'Added to cart'),
(15, 43, 0, 'Added to cart'),
(16, 43, 0, 'Added to cart'),
(17, 43, 0, 'Added to cart'),
(18, 43, 0, 'Added to cart'),
(19, 43, 0, 'Added to cart'),
(20, 43, 31, 'Added to cart'),
(21, 43, 0, 'Added to cart'),
(22, 43, 0, 'Added to cart'),
(23, 43, 0, 'Added to cart'),
(24, 43, 0, 'Added to cart'),
(25, 43, 0, 'Added to cart'),
(26, 43, 0, 'Added to cart'),
(27, 43, 0, 'Added to cart'),
(28, 43, 0, 'Added to cart'),
(29, 43, 0, 'Added to cart'),
(30, 43, 0, 'Added to cart'),
(31, 43, 0, 'Added to cart'),
(32, 43, 0, 'Added to cart'),
(33, 43, 4, 'Added to cart'),
(34, 43, 2, 'Added to cart'),
(35, 43, 116, 'Added to cart'),
(36, 43, 32, 'Added to cart'),
(37, 43, 115, 'Added to cart'),
(38, 43, 118, 'Added to cart'),
(39, 43, 120, 'Added to cart'),
(40, 43, 121, 'Added to cart'),
(41, 43, 122, 'Added to cart'),
(42, 43, 30, 'Added to cart'),
(43, 43, 133, 'Added to cart');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_items`
--
ALTER TABLE `users_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`,`item_id`),
  ADD KEY `item_id` (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `users_items`
--
ALTER TABLE `users_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
