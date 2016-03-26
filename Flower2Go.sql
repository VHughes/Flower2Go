-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 26, 2016 at 07:00 AM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `bouquets`
--

CREATE TABLE `bouquets` (
  `b_id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `desc` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `state` varchar(200) NOT NULL,
  `total` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `e_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `desc` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`e_id`, `name`, `price`, `desc`) VALUES
(1, 'weddings', '200.00', 'Get any assortment of flowers for your wedding!'),
(2, 'graduation', '40.00', 'Surprise your graduate with some gorgeous flowers!');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `price` int(11) NOT NULL,
  `description` varchar(200) NOT NULL,
  `SKU` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`price`, `description`, `SKU`, `title`, `id`, `quantity`) VALUES
(6, 'An all-time favourite.', 38497598, 'Red Rose', 22, 200),
(4, 'Bright and vibrant!', 237408798, 'Tulip', 23, 120),
(5, 'Celebrate the spring!', 29348908, 'Daffodil', 24, 100),
(8, 'Buy now! Limited edition.', 78623490, 'Blue Rose', 25, 50),
(12, 'Melt her heart with this Hawaiian classic.', 9382409, 'Bird of Paridise', 26, 20),
(3, 'Beautifully simple.', 2147483647, 'Daisy', 27, 80);

-- --------------------------------------------------------

--
-- Table structure for table `singles`
--

CREATE TABLE `singles` (
  `s_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `desc` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `firstname`, `lastname`, `email`) VALUES
('1', '1', '1', '1', '1'),
('1', '1', '', '', ''),
('', '', '', '', ''),
('its', 'hello', 'hello', 'adele', 'me'),
(':usr', ':pwd', ':fname', ':lname', ':email'),
(':usr', ':pwd', ':fname', ':lname', ':email'),
(':usr', ':pwd', ':fname', ':lname', ':email'),
(':usr', ':pwd', ':fname', ':lname', ':email'),
(':usr', ':pwd', ':fname', ':lname', ':email'),
(':usr', ':pwd', ':fname', ':lname', ':email'),
(':usr', ':pwd', ':fname', ':lname', ':email'),
(':usr', ':pwd', ':fname', ':lname', ':email'),
(':usr', ':pwd', ':fname', ':lname', ':email'),
(':usr', ':pwd', ':fname', ':lname', ':email'),
(':usr', ':pwd', ':fname', ':lname', ':email'),
(':usr', ':pwd', ':fname', ':lname', ':email'),
(':usr', ':pwd', ':fname', ':lname', ':email'),
(':usr', ':pwd', ':fname', ':lname', ':email'),
(':usr', ':pwd', ':fname', ':lname', ':email'),
(':usr', ':pwd', ':fname', ':lname', ':email'),
(':usr', ':pwd', ':fname', ':lname', ':email'),
(':usr', ':pwd', ':fname', ':lname', ':email'),
('a00893034a', 'a', 'a', 'a', 'a'),
('i', 'i', 'i', 'i', 'i'),
('i', 'i', 'i', 'i', 'i'),
('s', 's', 's', 's', 'ss'),
('s', 's', 's', 'ss', 'ssssssss'),
('', '', '', '', ''),
('www', 'w', 'w', 'www', 'www'),
('www', 'w', 'w', 'www', 'www'),
('aa', 'aa', 'qaa', 'aa', 'aa'),
('asdfsa', 'asdfdasf', 'adfdsa', 'asdfdasf', 'asdf@asdf.com'),
('asdfsa', 'asdfdasf', 'adfdsa', 'asdfdasf', 'asdf@asdf.com'),
('cc', 'ee', 'aa', 'bb', 'dd@cc.dd'),
('cc', 'ee', 'aa', 'bb', 'dd'),
('cc', 'ee', 'aa', 'bb', 'dd'),
('cc', 'ee', 'aa', 'bb', 'dd'),
('ee', 'e', 'e', 'eee', 'e'),
('sss', 'ss', 's', 's', 's'),
('asasa', 'sasasa', 'asa', 'sas', 'sasasasasasas'),
('sdsd', 'dsd', 'sds', 'dsd', 'dsds'),
('dSDS', 'sDSDS', 'SDSD', 'SDS', 'DDSD'),
('aa', 'aaa', 'a', 'aaaaa', 'a'),
('sdsds', 'sdsd', 'sdsd', 'dsds', 'dsd'),
('11', '11', '11', '11', '11'),
('22', 'b6d767d2f8ed5d21a44b0e5886680cb9', '22', '22', '22'),
('1234', '81dc9bdb52d04dc20036dbd8313ed055', '1234', '1234', '1234'),
('aa', '4124bc0a9335c27f086f24ba207a4912', 'aa', 'a', 'aa'),
('sss', '03c7c0ace395d80182db07ae2c30f034', 's', 's', 's'),
('33', '182be0c5cdcd5072bb1864cdee4d3d6e', '33', '33', '33'),
('23232', '149815eb972b3c370dee3b89d645ae14', '232', '2323', '323'),
('ff', '633de4b0c14ca52ea2432a3c8a5c4c31', 'ff', 'ff', 'ff'),
('A', '7fc56270e7a70fa81a5935b72eacbe29', 'A', 'A', 'A@a.com'),
('A00912216', '1b610a98fe238c5f4f63eb858eba6225', 'Alexis', 'Barbot', 'alexisbarbot@hotmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bouquets`
--
ALTER TABLE `bouquets`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `singles`
--
ALTER TABLE `singles`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bouquets`
--
ALTER TABLE `bouquets`
  MODIFY `b_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `e_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `singles`
--
ALTER TABLE `singles`
  MODIFY `s_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;