

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fcms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(22) NOT NULL,
  `Email` varchar(22) NOT NULL,
  `Password` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `Email`, `Password`) VALUES
(1, 'admin@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `fixtures`
--

CREATE TABLE `fixtures` (
  `FixturesID` int(22) NOT NULL,
  `TournamentName` varchar(22) NOT NULL,
  `Home` varchar(22) NOT NULL,
  `Away` varchar(22) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fixtures`
--

INSERT INTO `fixtures` (`FixturesID`, `TournamentName`, `Home`, `Away`, `Date`, `Time`) VALUES
(1, 'laliga', 'sasc', 'barca', '2024-03-27', '21:30:00'),
(2, 'laliga', 'barca', 'sasc', '2024-03-21', '18:50:00'),
(3, 'laliga', 'barca', 'Liverpool', '2024-03-21', '17:21:00');

-- --------------------------------------------------------

--
-- Table structure for table `ground`
--

CREATE TABLE `ground` (
  `GroundID` int(22) NOT NULL,
  `GroundName` varchar(55) NOT NULL,
  `Location` varchar(30) NOT NULL,
  `ContactPerson` varchar(30) NOT NULL,
  `PhoneNo` int(33) NOT NULL,
  `Capacity` int(66) NOT NULL,
  `Features` varchar(33) NOT NULL,
  `Rent` int(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `image`) VALUES
(6, 'jackson', '6643b6a47436c.jpg'),
(7, 'john', '6643b72eac45b.jpg'),
(8, 'sejo', '664608ff164e2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `playerdetails`
--

CREATE TABLE `playerdetails` (
  `ID` int(22) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `position` varchar(22) NOT NULL,
  `DOB` date NOT NULL,
  `matches` int(22) NOT NULL,
  `goals` int(22) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `playerdetails`
--

INSERT INTO `playerdetails` (`ID`, `Name`, `position`, `DOB`, `matches`, `goals`, `image`) VALUES
(5, 'messi', 'forward', '1987-06-22', 3, 5, '6657487a4fae0.jpg'),
(6, 'Sergio Ramos', 'Defender', '1983-07-22', 3, 1, '665749abd2207.jpg'),
(7, 'jackson', 'Forward', '1992-10-13', 6, 6, '666a8e7ebaa47.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `PlayerID` int(22) NOT NULL,
  `TeamID` int(22) NOT NULL,
  `Name` varchar(22) NOT NULL,
  `DOB` date NOT NULL,
  `Age` int(22) NOT NULL,
  `Gender` varchar(22) NOT NULL,
  `Position` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`PlayerID`, `TeamID`, `Name`, `DOB`, `Age`, `Gender`, `Position`) VALUES
(8, 3, 'messi', '0000-00-00', 21, 'M', 'RW'),
(9, 3, 'ronaldo', '0000-00-00', 22, 'M', 'ST'),
(10, 3, 'neymar', '0000-00-00', 18, 'M', 'LW'),
(11, 3, 'ozil', '0000-00-00', 20, 'M', 'AMF'),
(12, 3, 'reus', '0000-00-00', 19, 'M', 'CMF'),
(25, 6, '﻿jelson', '0000-00-00', 0, 'gender', 'position'),
(26, 6, 'joy', '0000-00-00', 21, 'M', 'RW'),
(27, 6, 'jijo', '0000-00-00', 22, 'M', 'ST'),
(28, 6, 'anand', '0000-00-00', 18, 'M', 'LW'),
(29, 6, 'jino', '0000-00-00', 20, 'M', 'AMF'),
(30, 6, 'jacky', '0000-00-00', 19, 'M', 'CMF');

-- --------------------------------------------------------

--
-- Table structure for table `referee`
--

CREATE TABLE `referee` (
  `RefereeID` int(22) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Age` int(22) NOT NULL,
  `Email` varchar(22) NOT NULL,
  `PhoneNo` int(22) NOT NULL,
  `MatchTypes` varchar(22) NOT NULL,
  `Experience` int(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `referee`
--

INSERT INTO `referee` (`RefereeID`, `Name`, `Age`, `Email`, `PhoneNo`, `MatchTypes`, `Experience`) VALUES
(1, 'fd', 23, 'aqw2w@gmail.com', 2147483647, 'Club matches', 2),
(2, 'Joan', 26, 'joan@gmail.com', 2133445555, 'Club Matches', 2);

-- --------------------------------------------------------

--
-- Table structure for table `registered_teams`
--

CREATE TABLE `registered_teams` (
  `ID` int(22) NOT NULL,
  `TeamName` varchar(33) NOT NULL,
  `TournamentName` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registered_teams`
--

INSERT INTO `registered_teams` (`ID`, `TeamName`, `TournamentName`) VALUES
(10, 'barca', 'laliga'),
(11, 'svss', 'laliga'),
(12, 'svss', 'stbsd'),
(13, 'sasc', 'laliga'),
(14, 'SNSC', 'laliga'),
(15, 'Liverpool', 'laliga');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `TeamID` int(22) NOT NULL,
  `TeamName` text NOT NULL,
  `TeamSize` int(22) NOT NULL,
  `Captain` varchar(33) NOT NULL,
  `Email` varchar(33) NOT NULL,
  `PhoneNo` int(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`TeamID`, `TeamName`, `TeamSize`, `Captain`, `Email`, `PhoneNo`) VALUES
(1, 'barca', 23, 'steve', 'aw22@gmail.com', 2147483647),
(2, 'svss', 23, 'steve', 'aw22@gmail.com', 2147483647),
(3, 'sasc', 23, 'Anand', 'aqww@gmail.com', 1231231232),
(4, 'SNSC', 20, 'Fotric', 'aqw2w@gmail.com', 2147483647),
(5, 'Jegan JR', 18, 'ubiadh', 'ubiadh@gmail.com', 1234569870),
(6, 'Liverpool', 6, 'steve', 'aw@gmail.com', 2147483647),
(7, '', 0, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tournament`
--

CREATE TABLE `tournament` (
  `TID` int(22) NOT NULL,
  `TournamentName` varchar(30) NOT NULL,
  `Location` varchar(30) NOT NULL,
  `Owner` varchar(30) NOT NULL,
  `StartingDate` date NOT NULL,
  `EndingDate` date NOT NULL,
  `PhoneNo` int(33) NOT NULL,
  `Type` varchar(33) NOT NULL,
  `EntryFees` int(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tournament`
--

INSERT INTO `tournament` (`TID`, `TournamentName`, `Location`, `Owner`, `StartingDate`, `EndingDate`, `PhoneNo`, `Type`, `EntryFees`) VALUES
(1, 'laliga', 'spain', 'lapota', '2024-02-29', '2024-03-14', 2147483647, 'League', 1000),
(2, 'stbsd', 'sda', 'hhh', '2024-02-27', '2024-03-08', 1231231232, 'KO', 232),
(3, 'murphy', 'chennai', 'joy', '2024-03-22', '2024-03-28', 1234569870, 'League', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(22) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `Gender` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `fname`, `lname`, `Gender`, `email`, `password`) VALUES
(1, 'Sejo', 'Harrish S', 'male', 'mickeycr72003@gmail.com', '1234'),
(2, 'fotric', 'mac', 'male', 'fotric@gmail.com', '0987');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `fixtures`
--
ALTER TABLE `fixtures`
  ADD PRIMARY KEY (`FixturesID`);

--
-- Indexes for table `ground`
--
ALTER TABLE `ground`
  ADD PRIMARY KEY (`GroundID`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `playerdetails`
--
ALTER TABLE `playerdetails`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`PlayerID`),
  ADD KEY `players_FK_1` (`TeamID`);

--
-- Indexes for table `referee`
--
ALTER TABLE `referee`
  ADD PRIMARY KEY (`RefereeID`);

--
-- Indexes for table `registered_teams`
--
ALTER TABLE `registered_teams`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`TeamID`);

--
-- Indexes for table `tournament`
--
ALTER TABLE `tournament`
  ADD PRIMARY KEY (`TID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fixtures`
--
ALTER TABLE `fixtures`
  MODIFY `FixturesID` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ground`
--
ALTER TABLE `ground`
  MODIFY `GroundID` int(22) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `playerdetails`
--
ALTER TABLE `playerdetails`
  MODIFY `ID` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `PlayerID` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `referee`
--
ALTER TABLE `referee`
  MODIFY `RefereeID` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registered_teams`
--
ALTER TABLE `registered_teams`
  MODIFY `ID` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `TeamID` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tournament`
--
ALTER TABLE `tournament`
  MODIFY `TID` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `players`
--
ALTER TABLE `players`
  ADD CONSTRAINT `players_FK_1` FOREIGN KEY (`TeamID`) REFERENCES `team` (`TeamID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
