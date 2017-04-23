-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2017 at 05:10 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `realestate`
--

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `charge` decimal(15,2) NOT NULL,
  `address` varchar(100) NOT NULL,
  `floor_space` decimal(10,2) NOT NULL,
  `gas` varchar(50) NOT NULL,
  `water` varchar(50) NOT NULL,
  `electricity` varchar(50) NOT NULL,
  `image1` text NOT NULL,
  `image2` text NOT NULL,
  `image3` text NOT NULL,
  `image4` text NOT NULL,
  `city` varchar(50) NOT NULL,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `property_type` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `owner_name` varchar(50) NOT NULL,
  `owner_contact` varchar(20) NOT NULL,
  `bed_room` int(11) NOT NULL,
  `wash_room` int(11) NOT NULL,
  `living_room` int(11) NOT NULL,
  `kitchen` int(11) NOT NULL,
  `parking` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id`, `name`, `charge`, `address`, `floor_space`, `gas`, `water`, `electricity`, `image1`, `image2`, `image3`, `image4`, `city`, `updated`, `property_type`, `description`, `owner_name`, `owner_contact`, `bed_room`, `wash_room`, `living_room`, `kitchen`, `parking`) VALUES
(1, 'Golden Inn', '12000.00', 'Agrabad C/A, 16 no. building', '1200.00', 'ok', 'ok', 'ok', '1.jpg', '2.jpg', '3.jpg', '4.jpg', 'Chittagong', '2017-04-09 09:41:27', 'Apparnment', 'Know what buyers want and, if the home you’ve listed has any of those features, hit them hard in your listing description.\r\n\r\nAny unique amenities – a gourmet kitchen, hardwood floors, oversized yards and garages – are worth highlighting. Brand names, such as Bosch, Sub-Zero, Wolf and Viking, should be sprinkled throughout the text. Don’t neglect to “mention appealing features such as those pullout shelves in the kitchen cabinets or the walk-in pantry,” warns Melinda Fulmer of MSN Real Estate.\r\n\r\nRead through this well-written listing description of a Seattle mansion. How much do you want to walk through its “terraced gardens” and “manicured grounds,” not to mention take in the “iconic views of the Seattle skyline & Elliott Bay”? The real estate agent who wrote this listing description certainly knows how to write a dazzling listing description!', 'Imran Hossain', '01723445742', 2, 2, 2, 1, 1),
(3, 'Bhuyan Mansion', '11000.00', 'Eidgah, Boro pokurpar (south)', '2400.00', 'ok', 'ok', 'ok', '9.jpg', '10.jpg', '11.jpg', '12.jpg', 'Chittagong', '2017-04-09 15:41:46', 'Apparnment', 'Masterful design and modern luxury are uniquely embodied in this 4 bedroom 4.5 bath Duplex Penthouse with a 4500 SF wraparound terrace atop Sky Lofts Condominium. This one-of-a-kind glass house, created by New York architect James Carpenter who designed 7 World Trade Center, is sheathed in high-performance, museum-quality insulated glass atop an historic Art Deco loft building in the heart of Tribeca. The sun and temperature-controlled glass envelope of its 7500 SF interior was tastefully designed with the top art collector in mind. Unobstructed 360 views from this penthouse are truly unparalleled, and include vistas of the Freedom Tower, Empire State Building and Hudson River.', 'Imran Hossain', '01925239601', 2, 2, 2, 1, 1),
(4, 'Mitali Bhaban', '17000.00', 'Eidgah Boro pokur par', '1800.00', 'ok', 'ok', 'ok', '13.jpg', '14.jpg', '15.jpg', '16.jpg', 'Chittagong', '2017-04-09 15:57:14', 'Apparnment', 'Entertain in grand style in the 42\' x 21\' living room graced by 22\' ceilings, a wood-burning fireplace (1 of 3 in the home) surrounded by a floor-to-ceiling plain-sawn cherry wood hearth, and a perfect Freedom Tower view. The top-of-the-line chef\'s kitchen is clad with premium finishes and fixtures including custom white lacquer cabinets, bluestone counters and professional-grade appliances. Sliding glass doors in the dining area showcase views while opening up the home to even more light and air. Spill out to the awe-inspiring terrace which can be accessed from any room, where a fully-equipped outdoor stainless steel kitchen, sun deck, hot tub and private outdoor shower await.', 'Abul Kashem', '01816258974', 2, 2, 1, 1, 1),
(5, 'Sultan Bhaban', '18000.00', 'Eidgah Boraf col', '2000.00', 'ok', 'ok', 'ok', '17.jpg', '41.jpg', '19.jpg', '20.jpg', 'Chittagong', '2017-04-10 02:21:53', 'Apparnment', 'Entertain in grand style in the 42\' x 21\' living room graced by 22\' ceilings, a wood-burning fireplace (1 of 3 in the home) surrounded by a floor-to-ceiling plain-sawn cherry wood hearth, and a perfect Freedom Tower view. The top-of-the-line chef\'s kitchen is clad with premium finishes and fixtures including custom white lacquer cabinets, bluestone counters and professional-grade appliances. Sliding glass doors in the dining area showcase views while opening up the home to even more light and air. Spill out to the awe-inspiring terrace which can be accessed from any room, where a fully-equipped outdoor stainless steel kitchen, sun deck, hot tub and private outdoor shower await.', 'Belal Uddin', '01816258974', 2, 2, 1, 1, 1),
(6, 'Sultan Bhaban', '18000.00', 'Eidgah Boraf col', '2000.00', 'ok', 'ok', 'ok', '17.jpg', '41.jpg', '19.jpg', '20.jpg', 'Chittagong', '2017-04-10 02:21:53', 'Apparnment', 'Entertain in grand style in the 42\' x 21\' living room graced by 22\' ceilings, a wood-burning fireplace (1 of 3 in the home) surrounded by a floor-to-ceiling plain-sawn cherry wood hearth, and a perfect Freedom Tower view. The top-of-the-line chef\'s kitchen is clad with premium finishes and fixtures including custom white lacquer cabinets, bluestone counters and professional-grade appliances. Sliding glass doors in the dining area showcase views while opening up the home to even more light and air. Spill out to the awe-inspiring terrace which can be accessed from any room, where a fully-equipped outdoor stainless steel kitchen, sun deck, hot tub and private outdoor shower await.', 'Belal Uddin', '01816258974', 2, 2, 1, 1, 1),
(8, 'Sultan Bhaban', '18000.00', 'Eidgah Boraf col', '2000.00', 'ok', 'ok', 'ok', '17.jpg', '41.jpg', '19.jpg', '20.jpg', 'Chittagong', '2017-04-10 02:21:53', 'Apparnment', 'Entertain in grand style in the 42\' x 21\' living room graced by 22\' ceilings, a wood-burning fireplace (1 of 3 in the home) surrounded by a floor-to-ceiling plain-sawn cherry wood hearth, and a perfect Freedom Tower view. The top-of-the-line chef\'s kitchen is clad with premium finishes and fixtures including custom white lacquer cabinets, bluestone counters and professional-grade appliances. Sliding glass doors in the dining area showcase views while opening up the home to even more light and air. Spill out to the awe-inspiring terrace which can be accessed from any room, where a fully-equipped outdoor stainless steel kitchen, sun deck, hot tub and private outdoor shower await.', 'Belal Uddin', '01816258974', 2, 2, 1, 1, 1),
(9, 'Sultan Bhaban', '18000.00', 'Eidgah Boraf col', '2000.00', 'ok', 'ok', 'ok', '17.jpg', '41.jpg', '19.jpg', '20.jpg', 'Chittagong', '2017-04-10 02:21:53', 'Apparnment', 'Entertain in grand style in the 42\' x 21\' living room graced by 22\' ceilings, a wood-burning fireplace (1 of 3 in the home) surrounded by a floor-to-ceiling plain-sawn cherry wood hearth, and a perfect Freedom Tower view. The top-of-the-line chef\'s kitchen is clad with premium finishes and fixtures including custom white lacquer cabinets, bluestone counters and professional-grade appliances. Sliding glass doors in the dining area showcase views while opening up the home to even more light and air. Spill out to the awe-inspiring terrace which can be accessed from any room, where a fully-equipped outdoor stainless steel kitchen, sun deck, hot tub and private outdoor shower await.', 'Belal Uddin', '01816258974', 2, 2, 1, 1, 1),
(17, 'Sultan Bhaban', '18000.00', 'Eidgah Boraf col', '2000.00', 'ok', 'ok', 'ok', '17.jpg', '41.jpg', '19.jpg', '20.jpg', 'Comilla', '2017-04-10 02:21:53', 'Apparnment', 'Entertain in grand style in the 42\' x 21\' living room graced by 22\' ceilings, a wood-burning fireplace (1 of 3 in the home) surrounded by a floor-to-ceiling plain-sawn cherry wood hearth, and a perfect Freedom Tower view. The top-of-the-line chef\'s kitchen is clad with premium finishes and fixtures including custom white lacquer cabinets, bluestone counters and professional-grade appliances. Sliding glass doors in the dining area showcase views while opening up the home to even more light and air. Spill out to the awe-inspiring terrace which can be accessed from any room, where a fully-equipped outdoor stainless steel kitchen, sun deck, hot tub and private outdoor shower await.', 'Belal Uddin', '01816258974', 2, 2, 1, 1, 1),
(18, 'Sultan Bhaban', '18000.00', 'Eidgah Boraf col', '2000.00', 'ok', 'ok', 'ok', '17.jpg', '41.jpg', '19.jpg', '20.jpg', 'Comilla', '2017-04-10 02:21:53', 'Apparnment', 'Entertain in grand style in the 42\' x 21\' living room graced by 22\' ceilings, a wood-burning fireplace (1 of 3 in the home) surrounded by a floor-to-ceiling plain-sawn cherry wood hearth, and a perfect Freedom Tower view. The top-of-the-line chef\'s kitchen is clad with premium finishes and fixtures including custom white lacquer cabinets, bluestone counters and professional-grade appliances. Sliding glass doors in the dining area showcase views while opening up the home to even more light and air. Spill out to the awe-inspiring terrace which can be accessed from any room, where a fully-equipped outdoor stainless steel kitchen, sun deck, hot tub and private outdoor shower await.', 'Belal Uddin', '01816258974', 2, 2, 1, 1, 1),
(19, 'Sultan Bhaban', '18000.00', 'Eidgah Boraf col', '2000.00', 'ok', 'ok', 'ok', '17.jpg', '41.jpg', '19.jpg', '20.jpg', 'Comilla', '2017-04-10 02:21:53', 'Apparnment', 'Entertain in grand style in the 42\' x 21\' living room graced by 22\' ceilings, a wood-burning fireplace (1 of 3 in the home) surrounded by a floor-to-ceiling plain-sawn cherry wood hearth, and a perfect Freedom Tower view. The top-of-the-line chef\'s kitchen is clad with premium finishes and fixtures including custom white lacquer cabinets, bluestone counters and professional-grade appliances. Sliding glass doors in the dining area showcase views while opening up the home to even more light and air. Spill out to the awe-inspiring terrace which can be accessed from any room, where a fully-equipped outdoor stainless steel kitchen, sun deck, hot tub and private outdoor shower await.', 'Belal Uddin', '01816258974', 2, 2, 1, 1, 1),
(20, 'Sultan Bhaban', '18000.00', 'Eidgah Boraf col', '2000.00', 'ok', 'ok', 'ok', '17.jpg', '41.jpg', '19.jpg', '20.jpg', 'Comilla', '2017-04-10 02:21:53', 'Apparnment', 'Entertain in grand style in the 42\' x 21\' living room graced by 22\' ceilings, a wood-burning fireplace (1 of 3 in the home) surrounded by a floor-to-ceiling plain-sawn cherry wood hearth, and a perfect Freedom Tower view. The top-of-the-line chef\'s kitchen is clad with premium finishes and fixtures including custom white lacquer cabinets, bluestone counters and professional-grade appliances. Sliding glass doors in the dining area showcase views while opening up the home to even more light and air. Spill out to the awe-inspiring terrace which can be accessed from any room, where a fully-equipped outdoor stainless steel kitchen, sun deck, hot tub and private outdoor shower await.', 'Belal Uddin', '01816258974', 2, 2, 1, 1, 1),
(21, 'Sultan Bhaban', '18000.00', 'Eidgah Boraf col', '2000.00', 'ok', 'ok', 'ok', '17.jpg', '41.jpg', '19.jpg', '20.jpg', 'Comilla', '2017-04-10 02:21:53', 'Apparnment', 'Entertain in grand style in the 42\' x 21\' living room graced by 22\' ceilings, a wood-burning fireplace (1 of 3 in the home) surrounded by a floor-to-ceiling plain-sawn cherry wood hearth, and a perfect Freedom Tower view. The top-of-the-line chef\'s kitchen is clad with premium finishes and fixtures including custom white lacquer cabinets, bluestone counters and professional-grade appliances. Sliding glass doors in the dining area showcase views while opening up the home to even more light and air. Spill out to the awe-inspiring terrace which can be accessed from any room, where a fully-equipped outdoor stainless steel kitchen, sun deck, hot tub and private outdoor shower await.', 'Belal Uddin', '01816258974', 2, 2, 1, 1, 1),
(22, 'Star House', '16000.00', '347/E,Gulshan  ', '1500.00', 'ok', 'ok', 'ok', '12.jpg', '13.jpg', '14.jpg', '15.jpg', 'Dhaka', '2017-04-09 17:09:53', 'Apparnment', 'Masterful design and modern luxury are uniquely embodied in this 4 bedroom 4.5 bath Duplex Penthouse with a 4500 SF wraparound terrace atop Sky Lofts Condominium. This one-of-a-kind glass house, created by New York architect James Carpenter who designed 7 World Trade Center, is sheathed in high-performance, museum-quality insulated glass atop an historic Art Deco loft building in the heart of Tribeca. The sun and temperature-controlled glass envelope of its 7500 SF interior was tastefully designed with the top art collector in mind. Unobstructed 360 views from this penthouse are truly unparalleled, and include vistas of the Freedom Tower, Empire State Building and Hudson River.', 'Jahir Chowdhary', '01816258974', 2, 2, 3, 1, 1),
(23, 'Star House', '16000.00', '347/E,Gulshan  ', '1500.00', 'ok', 'ok', 'ok', '12.jpg', '13.jpg', '14.jpg', '15.jpg', 'Dhaka', '2017-04-09 17:09:59', 'Apparnment', 'Masterful design and modern luxury are uniquely embodied in this 4 bedroom 4.5 bath Duplex Penthouse with a 4500 SF wraparound terrace atop Sky Lofts Condominium. This one-of-a-kind glass house, created by New York architect James Carpenter who designed 7 World Trade Center, is sheathed in high-performance, museum-quality insulated glass atop an historic Art Deco loft building in the heart of Tribeca. The sun and temperature-controlled glass envelope of its 7500 SF interior was tastefully designed with the top art collector in mind. Unobstructed 360 views from this penthouse are truly unparalleled, and include vistas of the Freedom Tower, Empire State Building and Hudson River.', 'Jahir Chowdhary', '01816258974', 2, 2, 3, 1, 1),
(24, 'Star House', '16000.00', '347/E,Gulshan  ', '1500.00', 'ok', 'ok', 'ok', '12.jpg', '13.jpg', '14.jpg', '15.jpg', 'Dhaka', '2017-04-09 17:09:59', 'Apparnment', 'Masterful design and modern luxury are uniquely embodied in this 4 bedroom 4.5 bath Duplex Penthouse with a 4500 SF wraparound terrace atop Sky Lofts Condominium. This one-of-a-kind glass house, created by New York architect James Carpenter who designed 7 World Trade Center, is sheathed in high-performance, museum-quality insulated glass atop an historic Art Deco loft building in the heart of Tribeca. The sun and temperature-controlled glass envelope of its 7500 SF interior was tastefully designed with the top art collector in mind. Unobstructed 360 views from this penthouse are truly unparalleled, and include vistas of the Freedom Tower, Empire State Building and Hudson River.', 'Jahir Chowdhary', '01816258974', 2, 2, 3, 1, 1),
(25, 'Star House', '16000.00', '347/E,Gulshan  ', '1500.00', 'ok', 'ok', 'ok', '12.jpg', '13.jpg', '14.jpg', '15.jpg', 'Dhaka', '2017-04-09 17:10:03', 'Apparnment', 'Masterful design and modern luxury are uniquely embodied in this 4 bedroom 4.5 bath Duplex Penthouse with a 4500 SF wraparound terrace atop Sky Lofts Condominium. This one-of-a-kind glass house, created by New York architect James Carpenter who designed 7 World Trade Center, is sheathed in high-performance, museum-quality insulated glass atop an historic Art Deco loft building in the heart of Tribeca. The sun and temperature-controlled glass envelope of its 7500 SF interior was tastefully designed with the top art collector in mind. Unobstructed 360 views from this penthouse are truly unparalleled, and include vistas of the Freedom Tower, Empire State Building and Hudson River.', 'Jahir Chowdhary', '01816258974', 2, 2, 3, 1, 1),
(26, 'Star House', '16000.00', '347/E,Gulshan  ', '1500.00', 'ok', 'ok', 'ok', '12.jpg', '13.jpg', '14.jpg', '15.jpg', 'Dhaka', '2017-04-09 17:10:10', 'Apparnment', 'Masterful design and modern luxury are uniquely embodied in this 4 bedroom 4.5 bath Duplex Penthouse with a 4500 SF wraparound terrace atop Sky Lofts Condominium. This one-of-a-kind glass house, created by New York architect James Carpenter who designed 7 World Trade Center, is sheathed in high-performance, museum-quality insulated glass atop an historic Art Deco loft building in the heart of Tribeca. The sun and temperature-controlled glass envelope of its 7500 SF interior was tastefully designed with the top art collector in mind. Unobstructed 360 views from this penthouse are truly unparalleled, and include vistas of the Freedom Tower, Empire State Building and Hudson River.', 'Jahir Chowdhary', '01816258974', 2, 2, 3, 1, 1),
(27, 'Star House', '16000.00', '347/E,Gulshan  ', '1500.00', 'ok', 'ok', 'ok', '12.jpg', '13.jpg', '14.jpg', '15.jpg', 'Dhaka', '2017-04-09 17:10:15', 'Apparnment', 'Masterful design and modern luxury are uniquely embodied in this 4 bedroom 4.5 bath Duplex Penthouse with a 4500 SF wraparound terrace atop Sky Lofts Condominium. This one-of-a-kind glass house, created by New York architect James Carpenter who designed 7 World Trade Center, is sheathed in high-performance, museum-quality insulated glass atop an historic Art Deco loft building in the heart of Tribeca. The sun and temperature-controlled glass envelope of its 7500 SF interior was tastefully designed with the top art collector in mind. Unobstructed 360 views from this penthouse are truly unparalleled, and include vistas of the Freedom Tower, Empire State Building and Hudson River.', 'Jahir Chowdhary', '01816258974', 2, 2, 3, 1, 1),
(28, 'Star House', '16000.00', '347/E,Gulshan  ', '1500.00', 'ok', 'ok', 'ok', '12.jpg', '13.jpg', '14.jpg', '15.jpg', 'Dhaka', '2017-04-09 17:10:19', 'Apparnment', 'Masterful design and modern luxury are uniquely embodied in this 4 bedroom 4.5 bath Duplex Penthouse with a 4500 SF wraparound terrace atop Sky Lofts Condominium. This one-of-a-kind glass house, created by New York architect James Carpenter who designed 7 World Trade Center, is sheathed in high-performance, museum-quality insulated glass atop an historic Art Deco loft building in the heart of Tribeca. The sun and temperature-controlled glass envelope of its 7500 SF interior was tastefully designed with the top art collector in mind. Unobstructed 360 views from this penthouse are truly unparalleled, and include vistas of the Freedom Tower, Empire State Building and Hudson River.', 'Jahir Chowdhary', '01816258974', 2, 2, 3, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
