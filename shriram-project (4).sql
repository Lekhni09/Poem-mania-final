-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2021 at 04:50 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shriram-project`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_billdetails`
--

CREATE TABLE `tbl_billdetails` (
  `BDid` int(11) NOT NULL,
  `BMId` int(11) NOT NULL,
  `ProductId` int(11) NOT NULL,
  `Qty` int(11) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_billdetails`
--

INSERT INTO `tbl_billdetails` (`BDid`, `BMId`, `ProductId`, `Qty`, `Price`) VALUES
(4, 7, 3, 1, 200),
(5, 7, 1, 1, 200),
(6, 8, 6, 1, 600),
(7, 8, 7, 1, 250),
(8, 8, 8, 1, 900),
(9, 9, 1, 1, 200),
(10, 9, 8, 1, 900),
(11, 9, 10, 1, 699),
(12, 10, 6, 1, 600);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_billmaster`
--

CREATE TABLE `tbl_billmaster` (
  `BMId` int(11) NOT NULL,
  `RegId` int(11) NOT NULL,
  `BillDate` varchar(200) NOT NULL,
  `Total` int(11) NOT NULL,
  `Tax` int(11) NOT NULL,
  `Disc` int(11) NOT NULL,
  `Net` int(11) NOT NULL,
  `BA_Name` varchar(200) NOT NULL,
  `BA_Address` varchar(500) NOT NULL,
  `BA_Email` varchar(300) NOT NULL,
  `BA_Mobile` varchar(300) NOT NULL,
  `DA_Name` varchar(300) NOT NULL,
  `DA_Address` varchar(300) NOT NULL,
  `DA_Email` varchar(500) NOT NULL,
  `DA_Mobile` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_billmaster`
--

INSERT INTO `tbl_billmaster` (`BMId`, `RegId`, `BillDate`, `Total`, `Tax`, `Disc`, `Net`, `BA_Name`, `BA_Address`, `BA_Email`, `BA_Mobile`, `DA_Name`, `DA_Address`, `DA_Email`, `DA_Mobile`) VALUES
(7, 1, '26-01-21', 400, 0, 0, 400, 'Name B', 'Address B', 'EmailB', 'MOBILE B', 'NAME D', 'address D', 'EMAIL D', 'MOBILE D'),
(8, 6, '07-02-21', 1750, 0, 0, 1750, 'raju kumar', 'Godavari apartment c block', 'raju3@gmail.com', '123456789', 'raju kumar', 'Godavari apartment c block', 'raju3@gmail.com', '123456789'),
(9, 1, '08-02-21', 1799, 0, 0, 1799, 'Name B', 'Godavari apartment c block', 'EmailB', '1234567891133333', 'monica verma', 'address Drt', 'abc@gmail.com', '7654321'),
(10, 9, '14-05-21', 600, 0, 0, 600, '201 managalam pg', 'Address B', 'raju3@gmail.com', '8003647246', 'lekhni bhatnagar', '2 gha 12 vigyan nagar kota', 'lekhni@gmail.com', '80036472446');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `CartId` int(11) NOT NULL,
  `RegId` int(11) NOT NULL,
  `ProductId` int(11) NOT NULL,
  `Qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`CartId`, `RegId`, `ProductId`, `Qty`) VALUES
(16, 0, 1, 1),
(18, 0, 11, 1),
(22, 0, 6, 1),
(26, 0, 12, 1),
(27, 1, 12, 1),
(28, 1, 13, 1),
(29, 5, 10, 1),
(32, 1, 1, 1),
(33, 1, 3, 1),
(34, 1, 15, 1),
(35, 0, 3, 1),
(38, 5, 6, 1),
(39, 0, 9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `contact_id` int(200) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Mobile` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Subject` varchar(300) NOT NULL,
  `Message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`contact_id`, `Name`, `Mobile`, `Email`, `Subject`, `Message`) VALUES
(1, 'asdfadf', 'asdf', 'sadfasd', 'sadfas', 'sadfsafsdf'),
(2, 'dvsdv', 'fvsv', 'sadfasd', 'fvsdvfasfad', 'dvsd');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `CategoryID` int(200) NOT NULL,
  `ProductId` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `PhotoUrl` varchar(200) NOT NULL,
  `Price` int(11) NOT NULL,
  `OfferPrice` int(11) NOT NULL,
  `IsOffer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`CategoryID`, `ProductId`, `Name`, `Description`, `PhotoUrl`, `Price`, `OfferPrice`, `IsOffer`) VALUES
(1, 1, 'The Lost Letter ', 'A poetry book on a girl describing her whole life on girls', 'ProductImages/letter.jpg', 200, 150, 1),
(1, 3, 'A Conspiracy of Stars', 'A poetry on love for stars for a boy ', 'ProductImages/stars.jpg', 200, 150, 1),
(1, 5, 'The Year After You ', 'A book of college relationship and there life after breakup ', 'ProductImages/year.jpg', 350, 500, 200),
(1, 6, 'See you in the cosmos', 'poem on a girl in love with stars', 'ProductImages/cosmos.jpg', 600, 350, 550),
(1, 7, 'Her favorite color is yellow', 'A Book of short Poems on how beautifully a girl loves the colour', 'ProductImages/yellow.jpg', 250, 200, 320),
(1, 8, '2 A.M Thoughts', ' A poetry Book on things that roam in head at night ', 'ProductImages/cursed.jpg', 900, 560, 299),
(1, 9, 'Adultescence', 'A Poetry book on adults and their change in life ', 'ProductImages/save.jpg', 650, 600, 549),
(1, 10, 'A Girl in Pieces', 'A poetry book on how a Girl carries herself after Breakup', 'ProductImages/pieces.jpg', 699, 599, 499),
(1, 11, 'A Sense of the Infinite', 'A poem by Rupi Kaur on short poems of life ', 'ProductImages/sense.jpg', 788, 800, 699),
(2, 12, 'Milk ands Honey', 'A Poetry book by Rupi Kaur and her poetry about life', 'ProductImages/milkhoney.jpg', 200, 250, 300),
(2, 13, 'The Sun and her Flowers', 'A poetry book by Rupi kaur about life and Reality', 'ProductImages/sunflower.jpg', 500, 300, 150),
(2, 14, 'For when she\'s feeling blue.', 'A poetry by Edgar about how a girl feels when she is low. ', 'ProductImages/blue.jpg', 850, 700, 250),
(2, 15, '2 Fish', 'A Poetry on animals and dependency of humans on them ', 'ProductImages/poetry.jpg', 654, 599, 500),
(2, 16, 'The Anatomy of dreams', 'A Poetry book on love for stars', 'ProductImages/anatomy.jpg', 900, 850, 500),
(2, 17, 'Words that Kill', 'A poetry on a how a person kills himself because of unnecessary anger.', 'ProductImages/kill.jpg', 789, 699, 600),
(2, 18, 'Wilder girls', 'A poetry on wild cares that live carefree and worries for no one ', 'ProductImages/wilder.jpg', 900, 899, 560),
(3, 19, 'The Dark between the stars ', 'A Poetry on the darkness personified by stars', 'ProductImages/dark.jpg', 650, 800, 600),
(3, 20, 'He calls you Beautiful', 'A poetry on childhood relationship', 'ProductImages/beautiful.jpg', 750, 899, 600),
(4, 21, 'Emily Dickson Poems ', 'This is beautiful collection of sonnets written on life and love explained through poems ', 'ProductImages/emily.jpg', 300, 250, 600),
(4, 22, 'Graffiti', ' Graffiti is a book having a good collection of poems based on culture .', 'ProductImages/graffiti.jpg', 600, 590, 550),
(4, 23, 'Nobody Knows But You ', 'This Poetry Book is full of a depressed girl who just lost her family and property in a natural disaster .', 'ProductImages/nobody.jpg', 900, 509, 650),
(4, 24, 'Wicked Saints', 'This book is filled with poems based on evil desires of saints.', 'ProductImages/saints.jpg', 600, 520, 960),
(5, 25, 'Mistress Of The Ritz', 'A Poetry based on history of the Mistress of a place called Ritz and all about her lifestyle.', 'ProductImages/mistress.jpg', 1050, 850, 1050),
(5, 26, 'The Ocean at the End of the Lane .', 'The Poetry Book is based on a man who lost everything during a journey on his ship.', 'ProductImages/ocean.jpg', 560, 450, 900),
(5, 27, 'The Soul is a River ', 'This is a poetry book based on different souls personified by water ', 'ProductImages/river.jpg', 500, 230, 600);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_productcategory`
--

CREATE TABLE `tbl_productcategory` (
  `CategoryID` int(11) NOT NULL,
  `CategoryName` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_productcategory`
--

INSERT INTO `tbl_productcategory` (`CategoryID`, `CategoryName`) VALUES
(1, ' Love Poems'),
(2, 'Inspirational Poems'),
(3, 'Fantasy Poems'),
(4, 'Sonnet'),
(5, 'Narrative Poems');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_register`
--

CREATE TABLE `tbl_register` (
  `RegId` int(200) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Mobile` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_register`
--

INSERT INTO `tbl_register` (`RegId`, `Name`, `Mobile`, `Email`, `Password`) VALUES
(1, 'lamha Bhatnagar', '7894561234', 'lamha@gmail.com', 'lamha'),
(2, 'seema Bhatnagar', '7822823127', 'seema@gmail.com', 'seema'),
(3, 'Atidivya patra', '7418529631', 'atidivya@gmail.com', 'atidivya'),
(5, 'satyam chandra', '7822823127', 'satyam.rock27@gmail.com', 'lekhni'),
(6, 'vedant bhatnagar', '789458125', 'vishu@gmail.com', 'vishu'),
(7, 'lekhni bhatnagar', '8003647246', 'vimmy@gmail.com', 'Lily@123'),
(8, 'Vivek Bhatnagar', '9829335730', 'vivek@gmail.com', 'vivek'),
(9, 'lekhni', '8003647246', 'lekhni@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registration`
--

CREATE TABLE `tbl_registration` (
  `Name` varchar(200) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Mobile` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `UserId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_registration`
--

INSERT INTO `tbl_registration` (`Name`, `Address`, `Mobile`, `Email`, `Password`, `UserId`) VALUES
('afsdfsd', 'fasfasdf', 'asfasdf', 'safasdf', 'safsadf', 1),
('asfsafasdf', 'asfsadf', 'sadfsadf', 'asdfsdaf', 'safsfsdf', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_billdetails`
--
ALTER TABLE `tbl_billdetails`
  ADD PRIMARY KEY (`BDid`);

--
-- Indexes for table `tbl_billmaster`
--
ALTER TABLE `tbl_billmaster`
  ADD PRIMARY KEY (`BMId`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`CartId`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`ProductId`);

--
-- Indexes for table `tbl_productcategory`
--
ALTER TABLE `tbl_productcategory`
  ADD PRIMARY KEY (`CategoryID`);

--
-- Indexes for table `tbl_register`
--
ALTER TABLE `tbl_register`
  ADD PRIMARY KEY (`RegId`);

--
-- Indexes for table `tbl_registration`
--
ALTER TABLE `tbl_registration`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_billdetails`
--
ALTER TABLE `tbl_billdetails`
  MODIFY `BDid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_billmaster`
--
ALTER TABLE `tbl_billmaster`
  MODIFY `BMId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `CartId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `contact_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `ProductId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tbl_productcategory`
--
ALTER TABLE `tbl_productcategory`
  MODIFY `CategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_register`
--
ALTER TABLE `tbl_register`
  MODIFY `RegId` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_registration`
--
ALTER TABLE `tbl_registration`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
