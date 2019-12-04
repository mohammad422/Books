-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2019 at 08:36 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_authors`
--

CREATE TABLE `tbl_authors` (
  `ID` int(11) NOT NULL,
  `authorName` varchar(65) COLLATE utf8_bin NOT NULL,
  `Picture` varchar(65) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tbl_authors`
--

INSERT INTO `tbl_authors` (`ID`, `authorName`, `Picture`) VALUES
(1, 'Charls Dickens', 'Dickens.jpg'),
(2, 'Victor Hugo', 'VictorHugo.jpg'),
(3, 'Feodor Dastayovski', 'dasta.jpg'),
(4, 'Leo Tolstoy', 'leo.jpg'),
(5, 'Homa Katoozian', 'Dr_Katouzian.jpg'),
(6, 'Ervand Abrahamian', 'ervand.jfif'),
(7, 'David Tomson', 'tomson.jpg'),
(8, 'Orlando_Figes ', 'Orlando_Figes.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_books`
--

CREATE TABLE `tbl_books` (
  `ID` int(11) NOT NULL,
  `title` varchar(65) COLLATE utf8_bin NOT NULL,
  `Cover` varchar(65) COLLATE utf8_bin NOT NULL,
  `Overview` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tbl_books`
--

INSERT INTO `tbl_books` (`ID`, `title`, `Cover`, `Overview`) VALUES
(1, 'Oliver Twist', 'Oliver-Twist.jpg', 'this is a test.'),
(2, 'Les Misrable', 'mis.jpg', 'this is a test'),
(3, 'the Persian', 'iranian.jpg', 'The story of Oliver Twist - orphaned, and set upon by evil and adversity from his first breath - shocked readers when it was published. After running away from the workhouse and pompous beadle Mr Bumble, Oliver finds himself lured into a den of thieves peopled by vivid and memorable characters - the Artful Dodger, vicious burglar Bill Sikes, his dog Bull\'s Eye, and prostitute Nancy, all watched over by cunning master-thief Fagin. Combining elements of Gothic Romance, the Newgate Novel and popular melodrama, Dickens created an entirely new kind of fiction, scathing in its indictment of a cruel society, and pervaded by an unforgettable sense of threat and mystery. This Penguin Classics edition of Oliver Twist is the first critical edition to faithfully reproduce the text as its earliest readers would have encountered it from its serialisation in Bentley\'s Miscellany, and includes an introduction by Philip Horne, a glossary of Victorian thieves\' slang, a chronology of Dickens\'s life, a map of contemporary London and all of George Cruikshank\'s original illustrations. For more than seventy years, Penguin has been the leading publisher of classic literature in the English-speaking world. With more than 1,700 titles, Penguin Classics represents a global bookshelf of the best works throughout history and across genres and disciplines. Readers trust the series to provide authoritative texts enhanced by introductions and notes by distinguished scholars and contemporary authors, as well as up-to-date translations by award-winning translators.'),
(4, 'War and Peace', 'war.jpg', 'The story of Oliver Twist - orphaned, and set upon by evil and adversity from his first breath - shocked readers when it was published. After running away from the workhouse and pompous beadle Mr Bumble, Oliver finds himself lured into a den of thieves peopled by vivid and memorable characters - the Artful Dodger, vicious burglar Bill Sikes, his dog Bull\'s Eye, and prostitute Nancy, all watched over by cunning master-thief Fagin. Combining elements of Gothic Romance, the Newgate Novel and popular melodrama, Dickens created an entirely new kind of fiction, scathing in its indictment of a cruel society, and pervaded by an unforgettable sense of threat and mystery. This Penguin Classics edition of Oliver Twist is the first critical edition to faithfully reproduce the text as its earliest readers would have encountered it from its serialisation in Bentley\'s Miscellany, and includes an introduction by Philip Horne, a glossary of Victorian thieves\' slang, a chronology of Dickens\'s life, a map of contemporary London and all of George Cruikshank\'s original illustrations. For more than seventy years, Penguin has been the leading publisher of classic literature in the English-speaking world. With more than 1,700 titles, Penguin Classics represents a global bookshelf of the best works throughout history and across genres and disciplines. Readers trust the series to provide authoritative texts enhanced by introductions and notes by distinguished scholars and contemporary authors, as well as up-to-date translations by award-winning translators.'),
(5, 'Iran Between two revolution', 'ira.jpg', 'The story of Oliver Twist - orphaned, and set upon by evil and adversity from his first breath - shocked readers when it was published. After running away from the workhouse and pompous beadle Mr Bumble, Oliver finds himself lured into a den of thieves peopled by vivid and memorable characters - the Artful Dodger, vicious burglar Bill Sikes, his dog Bull\'s Eye, and prostitute Nancy, all watched over by cunning master-thief Fagin. Combining elements of Gothic Romance, the Newgate Novel and popular melodrama, Dickens created an entirely new kind of fiction, scathing in its indictment of a cruel society, and pervaded by an unforgettable sense of threat and mystery. This Penguin Classics edition of Oliver Twist is the first critical edition to faithfully reproduce the text as its earliest readers would have encountered it from its serialisation in Bentley\'s Miscellany, and includes an introduction by Philip Horne, a glossary of Victorian thieves\' slang, '),
(6, 'Karmazov brothers', 'karmazov.jpg', 'The story of Oliver Twist - orphaned, and set upon by evil and adversity from his first breath - shocked readers when it was published. After running away from the workhouse and pompous beadle Mr Bumble, Oliver finds himself lured into a den of thieves peopled by vivid and memorable characters - the Artful Dodger, vicious burglar Bill Sikes, his dog Bull\'s Eye, and prostitute Nancy, all watched over by cunning master-thief Fagin. Combining elements of Gothic Romance, the Newgate Novel and popular melodrama, Dickens created an entirely new kind of fiction, scathing in its indictment of a cruel society, and pervaded by an unforgettable sense of threat and mystery. This Penguin Classics edition of Oliver Twist is the first critical edition to faithfully reproduce the text as its earliest readers would have encountered it from its serialisation in Bentley\'s Miscellany, and includes an introduction by Philip Horne, a glossary of Victorian thieves\' slang,'),
(7, 'David Kaperfield', 'david.jfif', 'raised in a workhouse in the fictional town of Mudfog, located 70 miles (110 km) north of London.He is orphaned by his father\'s mysterious absence and his mother Agnes\' death in childbirth, welcomed only in the workhouse and robbed of her gold name locket. Oliver is meagerly provided for under the terms of the Poor Law and spends the first nine years of his life living at a baby farm in the \'care\' of a woman named Mrs. Mann. Oliver is brought up with little food and few comforts. Around the time of Oliver\'s ninth birthday'),
(8, 'A peaple\'s tragedy', 'trajedy.jpg', 'raised in a workhouse in the fictional town of Mudfog, located 70 miles (110 km) north of London.He is orphaned by his father\'s mysterious absence and his mother Agnes\' death in childbirth, welcomed only in the workhouse and robbed of her gold name locket. Oliver is meagerly provided for under the terms of the Poor Law and spends the first nine years of his life living at a baby farm in the \'care\' of a woman named Mrs. Mann. Oliver is brought up with little food and few comforts. Around the time of Oliver\'s ninth birthday'),
(9, 'Europe Since Napoleon', 'europe.jpg', 'raised in a workhouse in the fictional town of Mudfog, located 70 miles (110 km) north of London.He is orphaned by his father\'s mysterious absence and his mother Agnes\' death in childbirth, welcomed only in the workhouse and robbed of her gold name locket. Oliver is meagerly provided for under the terms of the Poor Law and spends the first nine years of his life living at a baby farm in the \'care\' of a woman named Mrs. Mann. Oliver is brought up with little food and few comforts. Around the time of Oliver\'s ninth birthday');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_book_has_author`
--

CREATE TABLE `tbl_book_has_author` (
  `ID` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tbl_book_has_author`
--

INSERT INTO `tbl_book_has_author` (`ID`, `book_id`, `author_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 5),
(4, 4, 4),
(5, 5, 6),
(6, 6, 3),
(7, 7, 1),
(8, 8, 8),
(9, 9, 7);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `ID` int(11) NOT NULL,
  `firstname` varchar(65) COLLATE utf8_bin NOT NULL,
  `lastname` varchar(65) COLLATE utf8_bin NOT NULL,
  `username` varchar(65) COLLATE utf8_bin NOT NULL,
  `password` varchar(65) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`ID`, `firstname`, `lastname`, `username`, `password`) VALUES
(1, 'Mohammad Javad', 'Darestani', 'mohammad325', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(2, 'Parsa', 'Majid', 'p2005', '5f6955d227a320c7f1f6c7da2a6d96a851a8118f');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_authors`
--
ALTER TABLE `tbl_authors`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_books`
--
ALTER TABLE `tbl_books`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_book_has_author`
--
ALTER TABLE `tbl_book_has_author`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `book_id` (`book_id`),
  ADD KEY `author_id` (`author_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_authors`
--
ALTER TABLE `tbl_authors`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_books`
--
ALTER TABLE `tbl_books`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_book_has_author`
--
ALTER TABLE `tbl_book_has_author`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_book_has_author`
--
ALTER TABLE `tbl_book_has_author`
  ADD CONSTRAINT `tbl_book_has_author_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `tbl_books` (`ID`),
  ADD CONSTRAINT `tbl_book_has_author_ibfk_2` FOREIGN KEY (`author_id`) REFERENCES `tbl_authors` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
