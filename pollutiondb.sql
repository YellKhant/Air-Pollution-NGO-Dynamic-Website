-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2022 at 04:00 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pollutiondb`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `Country_ID` int(11) NOT NULL,
  `Country_Name` varchar(30) DEFAULT NULL,
  `Pollution_Rate` int(11) DEFAULT NULL,
  `Year` int(11) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Image_1` varchar(255) DEFAULT NULL,
  `Image_2` varchar(255) DEFAULT NULL,
  `Image_3` varchar(255) DEFAULT NULL,
  `Staff_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`Country_ID`, `Country_Name`, `Pollution_Rate`, `Year`, `Description`, `Image_1`, `Image_2`, `Image_3`, `Staff_ID`) VALUES
(1, 'Myanmar', 90, 2019, 'The air in Myanmar has been heavily polluted by the Yangon', 'Countries_Image/mm1.png', 'Countries_Image/mm2.jpg', 'Countries_Image/mm3.jpg', 1),
(2, 'Thailand', 88, 2019, 'The air in Thailand has been heavily polluted by the Bangkok', 'Countries_Image/tl1.png', 'Countries_Image/tl2.jpg', 'Countries_Image/tl3.jpg', 2),
(3, 'Japan', 85, 2019, 'The air in Japan has been heavily polluted by the Tokyo', 'Countries_Image/jp1.png', 'Countries_Image/jp2.jpg', 'Countries_Image/jp3.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `Feedback_ID` int(11) NOT NULL,
  `User_ID` int(11) DEFAULT NULL,
  `FeedbackDate` date DEFAULT NULL,
  `Comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`Feedback_ID`, `User_ID`, `FeedbackDate`, `Comment`) VALUES
(1, 1, '2020-03-25', 'I interest this website.');

-- --------------------------------------------------------

--
-- Table structure for table `qanda`
--

CREATE TABLE `qanda` (
  `Question_ID` int(11) NOT NULL,
  `Question` text DEFAULT NULL,
  `Question_Date` date DEFAULT NULL,
  `Answer` text DEFAULT NULL,
  `User_ID` int(11) DEFAULT NULL,
  `Staff_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `qanda`
--

INSERT INTO `qanda` (`Question_ID`, `Question`, `Question_Date`, `Answer`, `User_ID`, `Staff_ID`) VALUES
(1, 'How can we reduce air pollution?', '2020-01-01', 'We can reduce air pollution by more reuse, reduce and recycle everything that we are using now', 1, 1),
(2, 'How air pollution can effect badly to us?', '2020-01-02', 'It can effect global warming and respiratory diseases', 2, 2),
(3, 'What are the things we made to become pollution?', '2020-01-03', 'Smokes and dusts from industries, car engines and mining can make air pollution', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `recorded_histories`
--

CREATE TABLE `recorded_histories` (
  `History_ID` int(11) NOT NULL,
  `History_Date` date DEFAULT NULL,
  `User_ID` int(11) DEFAULT NULL,
  `Page_Name` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recorded_histories`
--

INSERT INTO `recorded_histories` (`History_ID`, `History_Date`, `User_ID`, `Page_Name`) VALUES
(1, '2020-01-07', 1, 'User Register'),
(2, '2020-01-08', 1, 'User Register'),
(3, '2020-01-09', 1, 'User Register');

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `Staff_ID` int(11) NOT NULL,
  `Staff_Name` varchar(30) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Password` text DEFAULT NULL,
  `Staff_Image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`Staff_ID`, `Staff_Name`, `Email`, `Password`, `Staff_Image`) VALUES
(1, 'Itachi', 'itachi@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'aaa.jpg'),
(2, 'Sasori', 'sasori@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'bbb.jpg'),
(3, 'Deidara', 'deidara@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'ccc.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_ID` int(11) NOT NULL,
  `Full_Name` varchar(30) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Dob` date DEFAULT NULL,
  `Address` text DEFAULT NULL,
  `Postcode` int(11) DEFAULT NULL,
  `User_Name` varchar(30) DEFAULT NULL,
  `Password` text DEFAULT NULL,
  `User_Image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_ID`, `Full_Name`, `Email`, `Dob`, `Address`, `Postcode`, `User_Name`, `Password`, `User_Image`) VALUES
(1, 'Thura Min', 'asd@gmail.com', '2020-02-20', 'Latha', 22, 'Thura', '827ccb0eea8a706c4c34a16891f84e7b', 'Users_Image/aaa.jpg'),
(2, 'Thiha Linn', 'fgh@gmail.com', '2020-02-20', 'Latha', 22, 'Linn', '827ccb0eea8a706c4c34a16891f84e7b', 'Users_Image/bbb.jpg'),
(3, 'Thu Thu', 'jkl@gmail.com', '2020-02-20', 'Latha', 22, 'Linn', '827ccb0eea8a706c4c34a16891f84e7b', 'Users_Image/ccc.jpg'),
(4, 'Thura Linn Htet', '123@gmail.com', '2011-11-11', 'Insein', 333, 'Htet', '827ccb0eea8a706c4c34a16891f84e7b', 'Users_Image/below(1).jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`Country_ID`),
  ADD KEY `Staff_ID` (`Staff_ID`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`Feedback_ID`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Indexes for table `qanda`
--
ALTER TABLE `qanda`
  ADD PRIMARY KEY (`Question_ID`),
  ADD KEY `User_ID` (`User_ID`),
  ADD KEY `Staff_ID` (`Staff_ID`);

--
-- Indexes for table `recorded_histories`
--
ALTER TABLE `recorded_histories`
  ADD PRIMARY KEY (`History_ID`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`Staff_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `Country_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `Feedback_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `qanda`
--
ALTER TABLE `qanda`
  MODIFY `Question_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `recorded_histories`
--
ALTER TABLE `recorded_histories`
  MODIFY `History_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `Staff_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `countries`
--
ALTER TABLE `countries`
  ADD CONSTRAINT `countries_ibfk_1` FOREIGN KEY (`Staff_ID`) REFERENCES `staffs` (`Staff_ID`);

--
-- Constraints for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD CONSTRAINT `feedbacks_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `users` (`User_ID`);

--
-- Constraints for table `qanda`
--
ALTER TABLE `qanda`
  ADD CONSTRAINT `qanda_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `users` (`User_ID`),
  ADD CONSTRAINT `qanda_ibfk_2` FOREIGN KEY (`Staff_ID`) REFERENCES `staffs` (`Staff_ID`);

--
-- Constraints for table `recorded_histories`
--
ALTER TABLE `recorded_histories`
  ADD CONSTRAINT `recorded_histories_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `users` (`User_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
