-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2019 at 07:35 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` varchar(20) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `street` varchar(50) NOT NULL,
  `barangay` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `contact` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `firstname`, `middlename`, `lastname`, `street`, `barangay`, `city`, `contact`) VALUES
('1115021', 'Jay', 'Pacho', 'Sabado', 'Purok 3', 'Sixto Velez', 'Sapang Dalaga', 9872678),
('1231', 'Rea Mae', 'Blanco', 'Polangas', 'Purok 2', 'Looc Proper', 'ollongapo', 9876),
('1234DE', 'Cris', 'Ma', 'Gemoros', 'Purok 4', 'Macalibre', 'Lopez Jaena', 3452678),
('1234se', 'SHARENE', 'ENAYO', 'SUMALPONG', 'ST. CATALINA', 'LOOC', 'PLARIDEL', 1223),
('234ba', 'mark', 'paak', 'saging', 'p 9', 'wew', 'ollongapo', 0),
('34574DE', 'Mary Cris', 'Landlady', 'Gemoros', 'Purok 6', 'Mobod', 'Lopez Jaena', 30972678),
('4512CE', 'JAY', 'PAAKON', 'BUANGON', 'MANYAKON', 'LAAGAN', 'MURAG IRO', 64787985);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `sales_number` varchar(10) NOT NULL,
  `customer_id` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `terms` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`sales_number`, `customer_id`, `date`, `terms`) VALUES
('112a', '1231', '2019-03-28', 'Credit'),
('1231', '1231', '2019-03-13', 'Cash'),
('1234', '1231', '2019-03-28', 'Cash');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_code` varchar(40) NOT NULL,
  `description` varchar(200) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `unit` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_code`, `description`, `price`, `unit`) VALUES
('1111sa', 'drinks', '30.78', '2 bottles'),
('112d', 'benignit', '25.00', '1 plate'),
('123af', 'baboy', '56.90', '2 kilo'),
('2324', 'gabi', '456.34', '10 kilo'),
('334f', 'cookies', '34.90', '2 plate'),
('4676gh', 'saging', '45.67', '2 kilo'),
('55556', 'SALAD', '12.09', '1 PLATE');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `product_code` varchar(15) NOT NULL,
  `sales_number` varchar(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `unit` varchar(10) NOT NULL,
  `unit_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`product_code`, `sales_number`, `quantity`, `unit`, `unit_price`) VALUES
('112d', '1231', 5, '1 kilo', '56.09'),
('2324', '1234', 3, '1 kilo', '56.09');

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `Id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`Id`, `username`, `email`, `password`) VALUES
(0, 'jay12', 'jay21@gmail.com', '11111'),
(0, 'admin', 'admin@gmail.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`sales_number`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_code`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD UNIQUE KEY `sales_number` (`sales_number`) USING BTREE,
  ADD KEY `product_code` (`product_code`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`);

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_ibfk_1` FOREIGN KEY (`product_code`) REFERENCES `product` (`product_code`),
  ADD CONSTRAINT `sales_ibfk_2` FOREIGN KEY (`sales_number`) REFERENCES `invoice` (`sales_number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
