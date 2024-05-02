-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 22, 2022 at 12:14 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `CARTID` int(50) NOT NULL,
  `PID` int(50) NOT NULL,
  `RID` int(50) NOT NULL,
  `QUANTITY` int(50) NOT NULL,
  `STATUS` varchar(50) NOT NULL,
  `PRODUCT_NAME` varchar(50) NOT NULL,
  `PRODUCT_IMAGE` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`CARTID`, `PID`, `RID`, `QUANTITY`, `STATUS`, `PRODUCT_NAME`, `PRODUCT_IMAGE`) VALUES
(1, 2, 1, 1, 'unpaid', 'Adidas Men Running Shoes', 'images/AS2.png'),
(2, 4, 1, 1, 'unpaid', 'Campus Men Oxyfit Running Shoes', 'images/AS4.png'),
(6, 1, 1, 3, 'unpaid', 'FURO by Redchief', 'images/AS1.png'),
(5, 1, 1, 6, 'unpaid', 'FURO by Redchief', 'images/AS1.png'),
(4, 1, 1, 9, 'unpaid', 'FURO by Redchief', 'images/AS1.png'),
(3, 4, 1, 2, 'unpaid', 'Campus Men Oxyfit Running Shoes', 'images/AS4.png');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `catid` int(50) NOT NULL,
  `catname` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catid`, `catname`) VALUES
(1, 'Wrist Watch'),
(4, 'new dals'),
(2, 'Sun glasses'),
(3, 'footwear');

-- --------------------------------------------------------

--
-- Table structure for table `img`
--

DROP TABLE IF EXISTS `img`;
CREATE TABLE IF NOT EXISTS `img` (
  `PID` int(30) NOT NULL,
  `image` varchar(200) NOT NULL,
  `imgid` int(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `img`
--

INSERT INTO `img` (`PID`, `image`, `imgid`) VALUES
(1, 'images/AS1.png', 1),
(1, 'images/AS1_2.png', 2),
(1, 'images/AS1_3.png', 3),
(1, 'images/AS1_4.png', 4),
(1, 'images/AS1_5.png', 5),
(1, 'images/AS1_6.png', 6),
(2, 'images/AS2.png', 1),
(2, 'images/AS2_1.png', 2),
(2, 'images/AS2_2.png', 3),
(2, 'images/AS2_3.png', 4),
(2, 'images/AS2_4.png', 5),
(3, 'images/AS3.png', 1),
(3, 'images/AS3_1.png', 2),
(3, 'images/AS3_2.png', 3),
(3, 'images/AS3_3.png', 4),
(3, 'images/AS3_4.png', 5),
(3, 'images/AS3_5.png', 6),
(3, 'images/AS3_6.png', 7),
(4, 'images/AS4.png', 1),
(4, 'images/AS4_1.png', 2),
(4, 'images/AS4_2.png', 3),
(4, 'images/AS4_3.png', 4),
(4, 'images/AS4_4.png', 5),
(4, 'images/AS4_6.png', 6),
(5, 'images/AS5.png', 1),
(5, 'images/AS5_1.png', 2),
(5, 'images/AS5_2.png', 3),
(5, 'images/AS5_3.png', 4),
(5, 'images/AS5_4.png', 5),
(6, 'images/AS6.png', 1),
(6, 'images/AS6_1.png', 2),
(6, 'images/AS6_2.png', 3),
(6, 'images/AS6_3.png', 4),
(6, 'images/AS6_4.png', 5),
(6, 'images/AS6_5.png', 6),
(7, 'images/AW1.png', 1),
(7, 'images/AW1_1.png', 2),
(7, 'images/AW1_2.png', 3),
(7, 'images/AW1_3.png', 4),
(8, 'images/AW2.png', 1),
(8, 'images/AW2_1.PNG', 2),
(8, 'images/AW2_2.png', 3),
(8, 'images/AW2_3.png', 4),
(8, 'images/AW2_4.png', 5),
(9, 'images/AW3.png', 1),
(9, 'images/AW3_1.png', 2),
(9, 'images/AW3_2.png', 3),
(9, 'images/AW3_3.png', 4),
(9, 'images/AW3_4.png', 5),
(10, 'images/AS6.png', 1),
(10, 'images/AS6_1.png', 2),
(10, 'images/AS6_2.png', 3),
(10, 'images/AS6_3.png', 4),
(10, 'images/AS6_4.png', 5),
(10, 'images/AS6_5.png', 6),
(10, 'images/AS6.png', 1),
(10, 'images/AS6_1.png', 2),
(10, 'images/AS6_2.png', 3),
(10, 'images/AS6_3.png', 4),
(10, 'images/AS6_4.png', 5),
(10, 'images/AS6_5.png', 6),
(11, 'images/AS6.png', 1),
(11, 'images/AS6_1.png', 2),
(11, 'images/AS6_2.png', 3),
(11, 'images/AS6_3.png', 4),
(11, 'images/AS6_4.png', 5),
(11, 'images/AS6_5.png', 6),
(10, 'images/AS6.png', 1),
(10, 'images/AS6_1.png', 2),
(10, 'images/AS6_2.png', 3),
(10, 'images/AS6_3.png', 4),
(10, 'images/AS6_4.png', 5),
(10, 'images/AS6_5.png', 6),
(11, 'images/download.jpg', 1),
(11, 'images/external-harddrive.jpg', 2),
(11, 'images/laptop.jpg', 3),
(12, 'images/AS1_5.png', 1),
(12, 'images/AS1_6.png', 2),
(12, 'images/AS2.png', 3);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `PID` int(50) NOT NULL,
  `CATID` int(40) NOT NULL,
  `PRODUCT_NAME` longtext NOT NULL,
  `PRODUCT_IMAGE` varchar(90) NOT NULL,
  `PRODUCT_PRICE` double NOT NULL,
  `PRODUCT_DESC` longtext NOT NULL,
  PRIMARY KEY (`PID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`PID`, `CATID`, `PRODUCT_NAME`, `PRODUCT_IMAGE`, `PRODUCT_PRICE`, `PRODUCT_DESC`) VALUES
(1, 3, 'FURO by Redchief', '1', 400, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'),
(2, 3, 'Adidas Men Running Shoes', '2', 400, '* Sole: Ethylene Vinyl Acetate * Closure: Lace-Up * Shoe Width: Medium * This product runs a size small. If you usually buy UK 9, buy UK 10 for this * Material Type: Synthetic * Lifestyle: Casual * Closure Type: Lace-Up * Warranty Type: Manufacturer * Product warranty against manufacturing defects: 90 days * Care Instructions: Allow your pair of shoes to air and de-odorize at a regular basis, this also helps them retain their natural shape; use shoe bags to prevent any stains or mildew; dust any dry dirt from the surface using a clean cloth, do not use polish or shiner'),
(3, 3, 'Campus Men Oxyfit Running Shoes', '3', 600, '* Sole: Ethylene Vinyl Acetate * Closure: Lace-Up * Shoe Width: Regular * WHAT YOU GET: 1. One Pair of Sports Shoes as shown in the pictures. 2. Storage Box. 3. Sparx Trust * MADE OF: High Quality Mesh as upper material and EVA as sole material * KEY FEATURES: Made to Last Long, Elegant Packaging, Perfect Gifting Option, Zero compromise on quality * CARE INSTRUCTIONS: Soaking in water may damage the product. For cleaning just wipe dirt or mud off with a soft moist cloth. Do not use any hard bristles brush for cleaning. Do not bleach or use harsh cleaning agents. Do not machine wash or machine dry. Just dry in shade. Do not use any heating equipement for drying * THE BRAND: Sparx is all about passion, challenges and zeal of people who like to live on-the-edge, have a dare-devil spirit and do things differently. Checkout our exciting range of shoes, sandals & flip-flops * Lifestyle: Outdoor'),
(4, 3, 'Campus Men Oxyfit Running Shoes', '4', 600, '* Sole: Ethylene Vinyl Acetate * Closure: Lace-Up * Shoe Width: Regular * WHAT YOU GET: 1. One Pair of Sports Shoes as shown in the pictures. 2. Storage Box. 3. Sparx Trust * MADE OF: High Quality Mesh as upper material and EVA as sole material * KEY FEATURES: Made to Last Long, Elegant Packaging, Perfect Gifting Option, Zero compromise on quality * CARE INSTRUCTIONS: Soaking in water may damage the product. For cleaning just wipe dirt or mud off with a soft moist cloth. Do not use any hard bristles brush for cleaning. Do not bleach or use harsh cleaning agents. Do not machine wash or machine dry. Just dry in shade. Do not use any heating equipement for drying * THE BRAND: Sparx is all about passion, challenges and zeal of people who like to live on-the-edge, have a dare-devil spirit and do things differently. Checkout our exciting range of shoes, sandals & flip-flops * Lifestyle: Outdoor'),
(5, 3, 'Red Tape Men Rso108 Walking Shoes', '5', 500, '* Sole: Rubber * Closure: Lace-Up * Shoe Width: Medium * Material Type: Mesh * Lifestyle: Sports * Closure Type: Slip On * Warranty Type: Manufacturer * Product warranty against manufacturing defects: 30 days * Care Instructions: Allow your pair of shoes to air and de-odorize at a regular basis, this also helps them retain their natural shape; use shoe bags to prevent any stains or mildew; dust any dry dirt from the surface using a clean cloth, do not use polish or shiner'),
(10, 3, 'Denill Women Comfortable Wedge Heel Fashion Sandal', '10', 500, 'good for walking'),
(11, 1, 'we', '11', 1, 'adsdg'),
(12, 1, 'FURO by Redchief', '12', 123, 'good'),
(7, 1, 'VILLS LAURRENS Analogue Men Watch (Black Dial Black Colored Strap)', '7', 499, '* Dial Color: Black * Dial Shape: Round * Strap Color: Black; Strap Material: Stainless Steel * Watch Movement Type: Quartz * Model number: VL-1114'),
(8, 1, 'Sonata Formal Analog Black Dial Men Watch NM7924NM01/NN7924NM01', '8', 599, '* Dial Color: Black, Case Shape: Round * Band Color: Black, Band Material: Stainless Steel * Case Thickness (mm): 8.60 mm * Case Length(6H-12H) (mm): 45.30 mm. Case Width(3H-9H) 39.70 mm * Watch Movement Type: Quartz, Watch Display Type: Analog * Warranty type: Manufacturer; 12 Months Manufacturer Warranty * Remove plastic at crown to start the watch'),
(9, 1, 'Samsung Galaxy Watch Active 2 (Bluetooth, 44 mm) - Black, Aluminium Dial, Silicon Straps', '9', 799, 'good');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(30) NOT NULL,
  `name` varchar(40) NOT NULL,
  `Phno` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `logintype` varchar(10) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `Phno`, `Email`, `Gender`, `Password`, `logintype`, `Address`) VALUES
(1, 'Jay', '1234567890', 'jay.solanki0906@gmail.com', 'Male', '1234', 'User', 'jay soiuwgsbdjw'),
(2, 'Jay', '1234567890', 'jay.solanki0906@gmail.com', 'Male', '12345', 'Admin', 'jay soiuwgsbdjw'),
(3, 'Jay Solanki', '1234567890', 'jay.solanki0906@gmail.com', 'Male', '12345678', 'User', 'raj banglows');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
