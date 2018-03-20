-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2018 at 07:41 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testupload`
--

-- --------------------------------------------------------

--
-- Table structure for table `testdb`
--

CREATE TABLE `testdb` (
  `id` int(11) NOT NULL,
  `file` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testdb`
--

INSERT INTO `testdb` (`id`, `file`) VALUES
(47, 'Annex F - Overseas Intenrship Progress Report- Damian.docx'),
(48, 'Elisha Zacarias CV.docx'),
(49, 'Buying A Wig by Clara Chow.pdf'),
(50, 'Buying A Wig by Clara Chow.docx'),
(51, 'Annex E - Claim for overseas internship - Damian .docx'),
(52, 'Annex F - Overseas Intenrship Progress Report- Damian.docx'),
(53, 'C273 notes (2).docx'),
(54, 'C273 notes (2).docx'),
(55, 'C273 notes (2).docx'),
(56, 'C273 notes (2).docx'),
(57, 'Elisha Encinas Zacarias CV.docx'),
(58, 'C273 notes (2).docx'),
(59, 'C273 notes (2).docx'),
(60, 'C273 notes (2).docx'),
(61, 'C273 notes (2).docx'),
(62, 'Buying A Wig by Clara Chow.docx'),
(63, 'Annex E - Claim for overseas internship - Damian .docx'),
(64, 'Annex F - Overseas Intenrship Progress Report- Damian.docx'),
(65, 'Elisha Encinas Zacarias CV.docx'),
(66, 'Annex F - Overseas Intenrship Progress Report- Damian.docx'),
(67, 'Elisha Zacarias Cover Letter.docx');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `testdb`
--
ALTER TABLE `testdb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `testdb`
--
ALTER TABLE `testdb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
