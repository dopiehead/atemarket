-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 10, 2023 at 12:36 PM
-- Server version: 10.3.37-MariaDB-log-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atemtmmu_farmer`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(255) NOT NULL,
  `pic` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `pic`) VALUES
(1, 'banner/fashion.png'),
(2, 'banner/pets.png'),
(3, 'banner/housingnew.png'),
(4, 'banner/cars.png'),
(5, 'banner/beauty.png'),
(6, 'banner/services.png');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(100) NOT NULL,
  `sid` int(255) NOT NULL,
  `siname` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `con` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `cell` varchar(100) NOT NULL,
  `loc` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `views` int(255) NOT NULL,
  `discount` int(255) NOT NULL,
  `sold` tinyint(255) NOT NULL,
  `featured` tinyint(255) NOT NULL,
  `hidenum` tinyint(255) NOT NULL,
  `carDetails` varchar(255) NOT NULL,
  `vehicleType` varchar(255) NOT NULL,
  `carMileage` varchar(255) NOT NULL,
  `fashionSex` varchar(255) NOT NULL,
  `fashionSize` varchar(255) NOT NULL,
  `petsAge` varchar(255) NOT NULL,
  `farmingType` varchar(255) NOT NULL,
  `foodType` varchar(255) NOT NULL,
  `Numberrooms` varchar(255) NOT NULL,
  `Numbertoilets` varchar(255) NOT NULL,
  `housingType` varchar(255) NOT NULL,
  `employmentType` varchar(255) NOT NULL,
  `entertainmentType` varchar(255) NOT NULL,
  `babyproductType` varchar(255) NOT NULL,
  `serviceType` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `sid`, `siname`, `name`, `message`, `con`, `photo`, `price`, `cell`, `loc`, `category`, `views`, `discount`, `sold`, `featured`, `hidenum`, `carDetails`, `vehicleType`, `carMileage`, `fashionSex`, `fashionSize`, `petsAge`, `farmingType`, `foodType`, `Numberrooms`, `Numbertoilets`, `housingType`, `employmentType`, `entertainmentType`, `babyproductType`, `serviceType`, `date`) VALUES
(2, 1, 'niyialabi10@yahoo.com', 'Hayla rabbits ', '\r\n       Hyla rabbits are genetically modified broiler \r\nrabbits bred to have fast growth and reach \r\na table size within 3 months (2kg). They are \r\npure white in colour, with pink eyes. \r\nCommon Hyla breeds in Nigeria are hybrid \r\ncross products between Hyla max and Hyla \r\nNg breeds.   ', '', 'uploads/C74124F1-90F3-4C51-853E-E5969A8DEC84.jpeg', '15000', '09013414146', 'Kwara state ', 'farming', 49, 0, 0, 0, 0, '', '', '', '', '', '', 'Livestock', '', '', '', '', '', '', '', '', 'Tue, March 15, 2022 12:28AM'),
(3, 2, 'niyialabi10@gmail.com', 'Iwatch series for sale', 'Notifications on the wrist and read \r\nmessages.\r\nFitness tracking (calories, exercise minutes, \r\nstanding)\r\nWorkout tracking.\r\nHeart rate monitoring.\r\nWarn about abnormal heart rates and \r\ndetect falls.\r\nECG readings (Series 4/5/6 only) and blood \r\noxygen tracking (Series 6 only)', 'New', 'uploads/E782E89B-B1AD-46B2-9ACC-D10EE67663E6.jpeg', '180000', '09074456453', 'Tanke, Kwara state', 'Phone & Accessories ', 109, 0, 0, 1, 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Fri, March 25, 2022 7:17AM'),
(4, 2, 'niyialabi10@gmail.com', 'Hp laptop for sale ', 'Get connected with the HP 250 Laptop PC \r\nwith powerful technology and a streamlined \r\nchassis thatâ€™s easy to take everywhere you \r\ngo. Complete business tasks with a 10th \r\nGen IntelÂ® Coreâ„¢ processor and essential \r\ncollaboration tools, Nice and light The HP \r\n250 Laptop keeps up with mobile \r\nworkstyles with a thin and light design.', 'Used', 'uploads/04BBE46C-1D6B-4EED-B2D7-AD983ABDEB14.jpeg', '365000', '09074456453', 'Akure, Ondo state.', 'Electronics', 75, 10, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Fri, March 25, 2022 7:33AM'),
(5, 3, 'ngnimitech@gmail.com', 'Edifier X3   \n', '\r\n       IPX5 water proof (sweat and rain \r\nresistant) 5-6 hours listening on a full charge. \r\nCharging case can charge earpieces fully 3 \r\ntimes. Comes with 3 sets of ear tips and \r\nmicro-USB cable  ', 'New', 'uploads/A64E7DD9-2D10-4F3B-93A2-890D0BE35E05.jpeg', '\n\n 9841.5', '9074456453', ' &nbsp;Okene, Kogi state.', 'Phone & Accessories ', 83, 10, 0, 0, 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Thu, March 31, 2022 8:10PM'),
(9, 3, 'ngnimitech@gmail.com', 'iPhone 7 for sale ', '\r\n      Good battery \r\nPlus charger \r\nSlightly negotiable  ', 'Used', 'uploads/E6A5E500-E5BF-4FAD-A035-B14422CA43E0.jpeg', '50000', '09074456463', 'Ilorin ', 'Phone & Accessories', 38, 0, 1, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Thu, July 21, 2022 5:37PM'),
(10, 3, 'ngnimitech@gmail.com', 'Laptop for sale   \n', 'Hp 6930p\r\n4g ram\r\nGood battery\r\nWindows 10 pro installed \r\nCharger \r\n256G memory Slightly negotiable.    ', 'Used', 'uploads/3C0EBE86-347D-4743-881D-E60BCCDE067A.jpeg', '50000', '9013414146', '&nbsp;Berger, Lagos&nbsp;', 'Electronics', 70, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Mon, July 25, 2022 8:25PM');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(255) NOT NULL,
  `parent_comment_id` int(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `comment_sender_name` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `featured_product`
--

CREATE TABLE `featured_product` (
  `id` int(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `followers`
--

CREATE TABLE `followers` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `follower_id` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `followers`
--

INSERT INTO `followers` (`id`, `user_id`, `follower_id`) VALUES
(1, 2, 3),
(2, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `forgetp`
--

CREATE TABLE `forgetp` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `forgotten`
--

CREATE TABLE `forgotten` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `vkey` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `forgotten`
--

INSERT INTO `forgotten` (`id`, `email`, `vkey`) VALUES
(1, 'ngnimitech@gmail.com', 'cc95e5525ba0e52855ac54389baa9039'),
(2, 'niyialabi20@gmail.com', '53d14f39b07766353bab8acd0b887661');

-- --------------------------------------------------------

--
-- Table structure for table `ip`
--

CREATE TABLE `ip` (
  `id` int(255) NOT NULL,
  `ipaddress` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `ip`
--

INSERT INTO `ip` (`id`, `ipaddress`) VALUES
(1, '114.119.15'),
(2, '37.139.53.'),
(3, '42.236.10.'),
(4, '72.14.199.'),
(5, '66.249.79.'),
(6, '156.146.63'),
(7, '87.250.224'),
(8, '40.77.167.'),
(9, '157.55.39.'),
(10, '27.115.124'),
(25, '31.171.152'),
(11, '77.88.5.16'),
(12, '183.136.22'),
(90, '105.113.18'),
(13, '84.17.43.4'),
(89, '105.112.17'),
(14, '5.44.174.1'),
(15, '84.17.48.1'),
(16, '197.210.85'),
(17, '180.163.22'),
(87, '163.116.13'),
(18, '51.222.253'),
(19, '114.119.13'),
(88, '105.113.20'),
(20, '207.46.13.'),
(21, '17.121.114'),
(86, '105.113.16'),
(22, '5.45.207.1'),
(23, '138.199.26'),
(24, '18.188.118'),
(58, '195.78.54.'),
(59, '82.80.249.'),
(60, '191.101.20'),
(61, '185.51.134'),
(62, '40.77.202.'),
(63, '181.215.17'),
(64, '37.19.223.'),
(65, '105.113.21'),
(66, '66.249.65.'),
(67, '188.126.94'),
(68, '66.249.90.'),
(69, '209.85.238'),
(70, '86.164.69.'),
(71, '192.142.12'),
(72, '181.214.21'),
(73, '191.96.168'),
(74, '195.181.16'),
(75, '191.101.21'),
(76, '94.158.36.'),
(77, '149.56.160'),
(78, '51.77.105.'),
(79, '18.116.43.'),
(80, '24.220.112'),
(81, '64.233.172'),
(82, '105.112.18'),
(91, '66.249.66.'),
(92, '105.113.19'),
(93, '105.113.17'),
(94, '74.125.216'),
(95, '74.125.218'),
(96, '102.89.34.'),
(97, '102.89.32.'),
(98, '102.89.33.'),
(99, '74.125.217'),
(100, '93.158.161'),
(101, '93.28.232.'),
(102, '197.210.22'),
(103, '66.249.74.'),
(104, '66.249.73.'),
(105, '17.121.115'),
(106, '197.210.70'),
(107, '66.249.91.'),
(108, '102.22.216'),
(109, '102.89.22.'),
(110, '102.91.4.1'),
(111, '102.91.5.1'),
(112, '193.149.17'),
(113, '197.210.76'),
(114, '197.210.53'),
(115, '102.91.4.6'),
(116, '197.210.71'),
(117, '197.210.52'),
(118, '102.89.44.'),
(119, '102.89.47.'),
(120, '197.210.84'),
(121, '197.210.54'),
(122, '102.89.40.'),
(123, '102.89.42.'),
(124, '178.205.24'),
(125, '177.30.109'),
(126, '72.201.84.'),
(127, '197.210.28'),
(128, '171.13.14.'),
(129, '212.30.36.'),
(130, '87.249.132'),
(131, '216.24.213'),
(132, '143.244.37'),
(133, '149.56.150'),
(134, '181.214.20'),
(135, '192.151.15'),
(136, '31.171.155'),
(137, '180.191.14'),
(138, '173.252.10'),
(139, '76.86.97.1'),
(140, '66.102.6.1'),
(141, '66.102.7.1'),
(142, '18.191.13.'),
(143, '18.116.12.'),
(144, '66.249.88.'),
(145, '66.249.72.'),
(146, '102.89.46.'),
(147, '84.17.49.1'),
(148, '114.119.14'),
(149, '74.125.212'),
(150, '49.37.128.'),
(151, '84.17.48.6'),
(152, '173.252.12'),
(153, '69.63.189.'),
(154, '31.13.127.'),
(155, '205.169.39'),
(156, '65.154.226'),
(157, '168.151.10'),
(158, '51.83.243.'),
(159, '105.112.16'),
(160, '52.43.150.'),
(161, '174.7.32.1'),
(162, '102.89.43.'),
(163, '192.241.12'),
(164, '197.210.78'),
(165, '102.89.23.'),
(166, '37.120.142'),
(167, '77.46.151.'),
(168, '74.125.208'),
(169, '84.17.60.6'),
(170, '45.192.134'),
(171, '86.130.208'),
(172, '17.121.113'),
(173, '37.46.113.'),
(174, '106.75.72.'),
(175, '106.75.26.'),
(176, '106.75.73.'),
(177, '106.75.34.'),
(178, '69.160.160'),
(179, '5.255.253.'),
(180, '192.178.10'),
(181, '66.249.84.'),
(182, '114.119.12'),
(183, '3.145.38.2'),
(184, '173.252.87'),
(185, '37.19.217.'),
(186, '102.88.62.'),
(187, '102.88.63.'),
(188, '209.141.41'),
(189, '185.171.94'),
(190, '93.182.108'),
(191, '93.182.105'),
(192, '37.225.75.'),
(193, '41.190.30.'),
(194, '93.182.109'),
(195, '34.209.62.'),
(196, '17.246.15.'),
(197, '94.79.78.1'),
(198, '65.109.67.'),
(199, '192.99.15.'),
(200, '94.79.72.9'),
(201, '93.182.107'),
(202, '75.119.132'),
(203, '93.182.104'),
(204, '84.17.60.1'),
(205, '102.89.45.'),
(206, '93.182.106'),
(207, '93.182.110'),
(208, '209.141.33'),
(209, '105.112.12'),
(210, '163.172.24'),
(211, '89.187.171'),
(212, '66.115.142'),
(213, '41.190.31.'),
(214, '146.70.55.'),
(215, '146.70.123'),
(216, '17.241.219'),
(217, '196.196.20'),
(218, '17.241.75.'),
(219, '17.22.237.'),
(220, '209.141.51'),
(221, '138.199.59'),
(222, '213.180.20'),
(223, '185.104.18'),
(224, '196.244.19'),
(225, '17.241.227'),
(226, '164.90.214'),
(227, '185.166.17'),
(228, '52.167.144'),
(229, '151.227.80'),
(230, '66.249.77.'),
(231, '102.129.14');

-- --------------------------------------------------------

--
-- Table structure for table `newsfeed`
--

CREATE TABLE `newsfeed` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `subject` int(255) NOT NULL,
  `compose` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `newsfeed`
--

INSERT INTO `newsfeed` (`id`, `name`, `subject`, `compose`, `email`) VALUES
(1, 'Buenas tardes, encantado de saludarte. Soy Jose<br />\r\nQuerÃ­a escribirte porque me ha parecido interesante comentar contigo la posibilidad de que tu negocio aparezca cada mes en periÃ³dicos digitales como noticia para posicionar en los primeros lugares d', 0, 'Jose', 'jose@autoprensa.com');

-- --------------------------------------------------------

--
-- Table structure for table `picx`
--

CREATE TABLE `picx` (
  `id` int(255) NOT NULL,
  `sid` int(255) NOT NULL,
  `pictures` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `picx`
--

INSERT INTO `picx` (`id`, `sid`, `pictures`) VALUES
(1, 3, 'uploads/33ACA01F-DF10-4FF7-B362-CE0BC6BFC3E6.jpeg'),
(2, 5, 'uploads/DBAC4325-9A2E-4077-AF07-14F8CC003119.jpeg'),
(4, 2, 'uploads/59769D37-7CB3-4511-952B-EDEF52520FBB.jpeg'),
(12, 9, 'uploads/82BD3CED-015D-4B8F-A053-337385F0DCAC.jpeg'),
(13, 10, 'uploads/87EF574A-20AA-47B5-8D04-DD8F151E3022.jpeg'),
(31, 10, 'uploads/BF24DE0E-325B-4DD0-A85A-7F207A732F2F.jpeg'),
(32, 5, 'uploads/');

-- --------------------------------------------------------

--
-- Table structure for table `pic_setting`
--

CREATE TABLE `pic_setting` (
  `id` int(11) NOT NULL,
  `pic` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pic_setting`
--

INSERT INTO `pic_setting` (`id`, `pic`) VALUES
(1, 'homepic/housingnew.png'),
(2, 'index-pic/gallery.PNG'),
(3, 'sx.JPG'),
(4, 'homepic/fashion.png'),
(6, 'homepic/beauty.png'),
(7, 'homepic/cars.png'),
(9, 'homepic/furniture.png'),
(10, 'homepic/electronics.png');

-- --------------------------------------------------------

--
-- Table structure for table `product_issue`
--

CREATE TABLE `product_issue` (
  `id` int(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `sender_email` varchar(255) NOT NULL,
  `issue` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(255) NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `followers` int(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `vkey` varchar(255) NOT NULL,
  `verified` tinyint(255) NOT NULL,
  `merchant` varchar(255) NOT NULL,
  `sold` int(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `profile_pic`, `name`, `email`, `followers`, `password`, `vkey`, `verified`, `merchant`, `sold`, `date`) VALUES
(1, 'profile/8026C479-939D-4D96-B85D-980E067F4B1D.jpeg', 'Neeyo', 'niyialabi10@yahoo.com', 0, '8cb2237d0679ca88db6464eac60da96345513964', 'bd66156fd880b79bef2d22bc0292328b', 1, 'Seller', 1, 'Mon, March 14, 2022 11:26AM'),
(2, 'profile/1C0D1F3C-6DB7-4161-9114-D7EB9B26B9A7.jpeg', 'Niyi', 'niyialabi10@gmail.com', 1, '8cb2237d0679ca88db6464eac60da96345513964', 'fd9aa7c9ed04f629906fbe5268bee1e4', 1, 'Seller', 0, 'Tue, March 15, 2022 12:30AM'),
(3, 'profile/DD7D51CA-CAFF-4C8E-B59C-BE7DAA5F35E0.jpeg', 'doppie_head', 'ngnimitech@gmail.com', 1, '8cb2237d0679ca88db6464eac60da96345513964', 'c3663c31371051b8564b7f6fdf2a37ff', 1, 'Seller', 3, 'Tue, March 15, 2022 7:55PM'),
(10, 'profile/', 'Samuelisreal ', 'samuelisreal101@gmail.com', 0, '4f3abfe3bac8bde0a0bb35a90481b4d306a27b1a', '1d5e43edc19f2d5cdda101ddbb052631', 0, 'Buyer', 0, 'Thu, August 25, 2022 1:50PM'),
(11, 'profile/inbound2720571699707809041.jpg', 'Oghenerhie Akpomevino', 'oghenerhie@gmail.com', 0, '5776e2f0d88a2c5883b5a89b3a215e1b0d3a2248', 'b18a255fbf796f62221461f8f5522443', 0, 'Buyer', 0, 'Thu, August 25, 2022 6:48PM'),
(12, 'profile/', 'Anongu Saaondo Williams', 'anongusaaondowilliams@gmail.com', 0, '1650134971aaed72211a7fc590303f474e675cc0', 'e5029feb0e82cce6a5aa29832bab3dc4', 1, 'Buyer', 0, 'Fri, August 26, 2022 5:49AM'),
(13, 'profile/8C2EDC46-97A1-4280-A8B8-1C186558781C.jpeg', 'Milk mealng', 'oluseunabdullahi@gmail.com', 0, '65dcfe0f28ca89b417ecf5dfd990915dccbba2a6', '29a9c2893415d16c8f00b662e71dfbd2', 1, 'Buyer', 0, 'Sun, August 28, 2022 1:01PM'),
(14, 'profile/images - 2022-09-06T164109.731.jpeg', 'Ayodeji Abimbola', 'seanp2065@gmail.com', 0, '3b189a49ff25e6c65018f3df13456836152080b7', 'fecade6966077e4648d2885895d5d7a6', 0, 'Buyer', 0, 'Sun, September 18, 2022 5:08PM'),
(29, 'profile/8380EE00-BC3E-4AD8-BDDB-49A4854B5FF6.png', 'Nimitech ', 'niyialabi20@gmail.com', 1, '8cb2237d0679ca88db6464eac60da96345513964', 'b406817ce97ad2b38dad0f6a7129be56', 1, 'Seller', 1, 'Tue, November 22, 2022 8:51PM');

-- --------------------------------------------------------

--
-- Table structure for table `seller_comment`
--

CREATE TABLE `seller_comment` (
  `id` int(255) NOT NULL,
  `sender_email` varchar(255) NOT NULL,
  `sender_name` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `seller_comment`
--

INSERT INTO `seller_comment` (`id`, `sender_email`, `sender_name`, `comment`, `product_id`, `product_name`, `date`) VALUES
(1, 'niyialabi10@yahoo.con', 'John Q', 'Nice ', 2, 'Hayla rabbits ', 'Fri, April 29, 2022 8:24PM');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(255) NOT NULL,
  `subscriber_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `subscriber_name`) VALUES
(3, 'samuelisreal101@gmail.com'),
(5, 'ngnimitech@gmail.com'),
(6, 'niyialabi10@gmail.com'),
(7, 'nimitech@gmail.com'),
(8, 'Y@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `featured_product`
--
ALTER TABLE `featured_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `followers`
--
ALTER TABLE `followers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forgetp`
--
ALTER TABLE `forgetp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forgotten`
--
ALTER TABLE `forgotten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ip`
--
ALTER TABLE `ip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsfeed`
--
ALTER TABLE `newsfeed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `picx`
--
ALTER TABLE `picx`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pic_setting`
--
ALTER TABLE `pic_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_issue`
--
ALTER TABLE `product_issue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller_comment`
--
ALTER TABLE `seller_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `featured_product`
--
ALTER TABLE `featured_product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `followers`
--
ALTER TABLE `followers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `forgetp`
--
ALTER TABLE `forgetp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `forgotten`
--
ALTER TABLE `forgotten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ip`
--
ALTER TABLE `ip`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=232;

--
-- AUTO_INCREMENT for table `newsfeed`
--
ALTER TABLE `newsfeed`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `picx`
--
ALTER TABLE `picx`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `pic_setting`
--
ALTER TABLE `pic_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product_issue`
--
ALTER TABLE `product_issue`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `seller_comment`
--
ALTER TABLE `seller_comment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
