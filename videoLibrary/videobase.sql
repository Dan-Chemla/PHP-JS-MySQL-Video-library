-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2019 at 03:45 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `videobase`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `CategoryID` int(11) NOT NULL,
  `CategoryName` varchar(25) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`CategoryID`, `CategoryName`) VALUES
(1, 'Automotive'),
(52, 'Business and Finance'),
(123, 'Careers'),
(132, 'Education'),
(150, 'Events and Attractions'),
(186, 'Family and Relationships'),
(201, 'Fine Art'),
(210, 'Food and Drink'),
(223, 'Healthy Living'),
(239, 'Hobbies & Interests'),
(274, 'Home and Garden'),
(286, 'Medical Health'),
(324, 'Movies'),
(338, 'Music and Audio'),
(379, 'News and Politics'),
(391, 'Personal Finance'),
(422, 'Pets'),
(432, 'Pop Culture'),
(441, 'Real Estate'),
(453, 'Religion and Spirituality'),
(464, 'Science'),
(473, 'Shopping'),
(483, 'Sports'),
(552, 'Style and Fashion'),
(596, 'Technology and Computing'),
(640, 'Television'),
(653, 'Travel'),
(680, 'Video Gaming');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` char(36) NOT NULL,
  `firstName` varchar(15) NOT NULL,
  `lastName` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `firstName`, `lastName`, `email`, `username`, `password`) VALUES
('2c649d16-0057-11e9-8691-c85b76df7dbd', '6', '7', '855', '55858', '1c8e6d9301b25a912093090c7561436e71d7a544'),
('7bc01c99-f2ef-11e8-8c15-c85b76df7dbd', 'ani', 'ata', 'oran.g@youappi.com', '787', 'e00988f42f7fc5f14ec6a0e7905789110f23c5de'),
('7f8e404c-fd31-11e8-97cc-c85b76df7dbd', 'Mickey', '2', 'oran.g@youappi.com', '910', 'c70dfb07dc67c9dd6a8bc01130acf68d1fbf035f'),
('9f7d01d9-fd48-11e8-97cc-c85b76df7dbd', '', '', '', '14', 'fa35e192121eabf3dabf9f5ea6abdbcbc107ac3b');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `UserID` char(36) DEFAULT NULL,
  `VIdeoID` int(11) NOT NULL,
  `VideoTitle` varchar(50) NOT NULL,
  `CategoryID` int(11) DEFAULT NULL,
  `Description` varchar(150) NOT NULL,
  `Link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`UserID`, `VIdeoID`, `VideoTitle`, `CategoryID`, `Description`, `Link`) VALUES
('7bc01c99-f2ef-11e8-8c15-c85b76df7dbd', 33, 'kjhdkjaejknmdanmk,', 210, 'Video', 'https://www.youtube.com/watch?v=jwc-X8wV7OM'),
('7bc01c99-f2ef-11e8-8c15-c85b76df7dbd', 34, '9090', 186, 'Video', 'https://www.youtube.com/watch?v=65rxBoi74C8'),
('7bc01c99-f2ef-11e8-8c15-c85b76df7dbd', 35, 'jholdll,', 210, 'video', 'https://www.youtube.com/watch?v=65rxBoi74C8'),
('7bc01c99-f2ef-11e8-8c15-c85b76df7dbd', 36, 'Queen', 338, 'Video', 'https://www.youtube.com/watch?v=AyRpGcXSgvc'),
('7bc01c99-f2ef-11e8-8c15-c85b76df7dbd', 37, 'Queen - Bohemian Rhapsody (Official Video)', 338, 'Video', 'https://www.youtube.com/watch?v=fJ9rUzIMcZQ'),
('7bc01c99-f2ef-11e8-8c15-c85b76df7dbd', 38, 'test', 1, '-------', ''),
('7bc01c99-f2ef-11e8-8c15-c85b76df7dbd', 39, 'Omer', 1, 'Video', 'https://www.youtube.com/watch?v=JExpHd0vzdk'),
('7bc01c99-f2ef-11e8-8c15-c85b76df7dbd', 40, 'ttt', 1, '', ''),
('7f8e404c-fd31-11e8-97cc-c85b76df7dbd', 45, 'test', 239, '', 'https://www.youtube.com/watch?v=65rxBoi74C8'),
('7f8e404c-fd31-11e8-97cc-c85b76df7dbd', 46, 'yosi', 1, 'yos', 'https://www.youtube.com/watch?v=4KcMdH8qiuk'),
('9f7d01d9-fd48-11e8-97cc-c85b76df7dbd', 47, '', 1, '', ''),
('7bc01c99-f2ef-11e8-8c15-c85b76df7dbd', 48, 'yosi', 274, 'SqsQSqs', ''),
('7bc01c99-f2ef-11e8-8c15-c85b76df7dbd', 49, 'sdd', 1, 'dASsS', 'https://www.youtube.com/watch?v=HgwCeNVPlo0'),
('2c649d16-0057-11e9-8691-c85b76df7dbd', 50, 'lkiuhpok', 1, 'plk=', 'https://www.youtube.com/watch?v=65rxBoi74C8'),
('7bc01c99-f2ef-11e8-8c15-c85b76df7dbd', 51, 'hfj,kujhgtrfed', 324, '', 'https://www.youtube.com/watch?v=wzIMAJFHaiQ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`CategoryID`),
  ADD KEY `CategoryName` (`CategoryName`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `UserID` (`UserID`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`VIdeoID`),
  ADD KEY `UserID` (`UserID`),
  ADD KEY `CategoryID` (`CategoryID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `CategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=681;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `VIdeoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `videos_ibfk_3` FOREIGN KEY (`CategoryID`) REFERENCES `categories` (`CategoryID`),
  ADD CONSTRAINT `videos_ibfk_4` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
