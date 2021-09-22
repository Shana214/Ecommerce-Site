-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2021 at 09:57 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminId` int(12) NOT NULL,
  `AdminName` varchar(20) NOT NULL,
  `AdminAddress` varchar(30) NOT NULL,
  `AdminContactNo` int(12) NOT NULL,
  `AdminEmail` varchar(20) NOT NULL,
  `AdminPassword` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminId`, `AdminName`, `AdminAddress`, `AdminContactNo`, `AdminEmail`, `AdminPassword`) VALUES
(578160, 'Maria Cruz', '12 Mabuhay St. Brgy. Maligaya ', 124124, 'mariacruz@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `CartId` int(12) NOT NULL,
  `Quantity` int(15) NOT NULL,
  `TotalAmount` int(11) NOT NULL,
  `ProductId` int(11) NOT NULL,
  `CustomerId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`CartId`, `Quantity`, `TotalAmount`, `ProductId`, `CustomerId`) VALUES
(2, 2, 100, 123, 912624),
(3, 5, 50, 123, 912624),
(4, 5, 250, 123, 912624),
(14, 10, 500, 123, 912624),
(112, 5, 250, 123, 912624),
(3213, 2, 100, 123, 912624);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `CategoryId` int(12) NOT NULL,
  `CategoryName` varchar(20) NOT NULL,
  `CategoryImg` int(15) NOT NULL,
  `CategoryDescription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CategoryId`, `CategoryName`, `CategoryImg`, `CategoryDescription`) VALUES
(12345, 'Utensils', 12121, 'Products used for food.');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustomerId` int(12) NOT NULL,
  `CustomerName` varchar(30) NOT NULL,
  `CustomerAddress` varchar(30) NOT NULL,
  `CustomerContactNo` varchar(12) NOT NULL,
  `CustomerEmail` varchar(30) NOT NULL,
  `CustomerPassword` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerId`, `CustomerName`, `CustomerAddress`, `CustomerContactNo`, `CustomerEmail`, `CustomerPassword`) VALUES
(912624, 'Maria Cruz', '12 Mabuhay St. Brgy. Maligaya ', '9771062211', 'mariacruz@gmail.com', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderId` int(12) NOT NULL,
  `Quantity` int(10) NOT NULL,
  `TotalAmount` varchar(15) NOT NULL,
  `OrderDate` date NOT NULL,
  `OrderShipped` date NOT NULL,
  `CustomerId` int(12) NOT NULL,
  `PaymentId` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `PaymentId` int(12) NOT NULL,
  `ModeOfPayment` varchar(20) NOT NULL,
  `DeliveryName` varchar(25) NOT NULL,
  `DeliveryAddress` varchar(25) NOT NULL,
  `DeliveryContactNo` int(15) NOT NULL,
  `ProofOfPayment` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ProductId` int(12) NOT NULL,
  `ProductPrice` varchar(15) NOT NULL,
  `ProductDescription` text NOT NULL,
  `ProductImg` varchar(15) NOT NULL,
  `CategoryId` int(12) NOT NULL,
  `AdminId` int(12) NOT NULL,
  `ProductName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductId`, `ProductPrice`, `ProductDescription`, `ProductImg`, `CategoryId`, `AdminId`, `ProductName`) VALUES
(123, '50', '“Our most popular bottle, available in a variety of colors to help brighten up anybody’s gear. The large opening on our wide-mouth bottles easily accommodates ice cubes, fits most water purifiers and filters, and makes hand washing a breeze. The attached loop-top never gets lost and screws on and off easily. Printed graduations let keep track of your hydration. Dishwasher safe (Please make sure the top does not touch the heating element, or it will melt).”', '21212', 12345, 578160, 'Water Bottle');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminId`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`CartId`,`ProductId`,`CustomerId`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CategoryId`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerId`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderId`,`CustomerId`,`PaymentId`),
  ADD KEY `CustomerId` (`CustomerId`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`PaymentId`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductId`,`CategoryId`,`AdminId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`CustomerId`) REFERENCES `customer` (`CustomerId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
