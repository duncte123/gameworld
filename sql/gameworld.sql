-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2017 at 03:31 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gameworld`
--

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `game_id` int(11) NOT NULL,
  `game_name` varchar(50) NOT NULL,
  `game_description` text NOT NULL,
  `game_platform` int(50) NOT NULL,
  `game_price` int(11) NOT NULL,
  `game_image` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`game_id`, `game_name`, `game_description`, `game_platform`, `game_price`, `game_image`) VALUES
(1, 'dishonored', 'This is the dishonored game i guess, idk what to put here', 1, 6900, 'http://monstervine.com/wp-content/uploads/2012/08/Dishonored-Logo.jpg'),
(2, 'dishonored', 'This is the dishonored game i guess, idk what to put here', 2, 5060, 'http://monstervine.com/wp-content/uploads/2012/08/Dishonored-Logo.jpg'),
(3, 'dishonored', 'This is the dishonored game i guess, idk what to put here', 3, 6900, 'http://monstervine.com/wp-content/uploads/2012/08/Dishonored-Logo.jpg'),
(4, 'Overwatch', 'This is the overwatch descriotion', 1, 4000, 'http://www.flipgeeks.com/wp-content/uploads/2016/12/Overwatch-Logo.jpg'),
(5, 'Overwatch', 'This is the overwatch descriotion', 3, 4000, 'http://www.flipgeeks.com/wp-content/uploads/2016/12/Overwatch-Logo.jpg'),
(6, 'Minecraft', 'This is minecraft', 3, 2300, 'https://i.ytimg.com/vi/wlzIOjmWwy4/maxresdefault.jpg'),
(7, 'Minecraft', 'This is minecraft', 2, 2300, 'http://download.gamezone.com/uploads/image/data/1110646/Mincraft-Xbox-360-Edition.png'),
(8, 'Minecraft', 'This is minecraft', 1, 2300, 'http://assets.vg247.com/current//2014/04/minecraft-ps3-boxart.png'),
(9, 'Crash Bandicoot N. Sane Trilogy', 'A short description for crash', 1, 5000, 'https://target.scene7.com/is/image/Target/52201072?wid=520&hei=520&fmt=pjpeg'),
(10, 'Rocket League', 'Rocket League', 1, 4600, 'https://images-na.ssl-images-amazon.com/images/I/816M5LfZtCL._SL1500_.jpg'),
(11, 'fallout four', 'fallout four', 1, 3000, 'https://vignette.wikia.nocookie.net/venturiantale/images/b/b6/Fallout-4-cover-art.jpg/revision/latest?cb=20170510181429'),
(12, 'horizon zero dawn', 'horizon zero dawn', 1, 6087, 'http://vignette1.wikia.nocookie.net/horizonzerodawn/images/d/d4/Horizon-zero-dawn-box-art.jpg/revision/latest?cb=20160616210605'),
(13, 'Fallout 3', 'Fallout 3', 2, 4300, 'https://upload.wikimedia.org/wikipedia/en/8/83/Fallout_3_cover_art.PNG'),
(14, 'Watch Dogs 2', 'Watch Dogs 2', 2, 7800, 'https://ubistatic19-a.akamaihd.net/ubicomstatic/en-us/global/game-info/wd2-ubicom-gameinfo-boxart-rated-tablet-v2_tablet_254078.jpg'),
(15, 'wwe 2k17 game', 'wwe 2k17 game', 2, 4560, 'http://cdn2-www.wrestlezone.com/assets/uploads/gallery/brock-lesnar-wwe-2k17/2ksmkt_wwe2k17_x360_fob.jpg'),
(16, 'Lego Marvel Super Heroes', 'Lego Marvel Super Heroes', 2, 1234, 'http://cdn2-www.superherohype.com/assets/uploads/2013/07/file_177981_0_lego_marvel_cover.jpg'),
(17, 'fallout four', 'fallout four', 2, 4311, 'https://vignette.wikia.nocookie.net/venturiantale/images/b/b6/Fallout-4-cover-art.jpg/revision/latest?cb=20170510181429'),
(18, 'Call of Duty: WWII', 'Call of Duty: WWII', 3, 9833, 'https://upload.wikimedia.org/wikipedia/en/1/18/Call_of_Duty_WWII_Cover_Art.jpg'),
(19, 'World of Warcraft', 'World of Warcraft', 3, 1234, 'http://www.mobygames.com/images/covers/l/38593-world-of-warcraft-macintosh-front-cover.jpg'),
(20, 'EVE online', 'EVE online', 3, 0, 'https://gamefaqs.akamaized.net/box/3/5/4/106354_front.jpg'),
(21, 'Cuphead', 'Cuphead', 3, 3213, 'https://cdn.releases.com/img/image/d2af5a3f-67be-423c-aa15-380b424ce311.jpg/300');

-- --------------------------------------------------------

--
-- Table structure for table `platforms`
--

CREATE TABLE `platforms` (
  `platform_id` int(11) NOT NULL,
  `platform_name` varchar(50) NOT NULL,
  `platform_color` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `platforms`
--

INSERT INTO `platforms` (`platform_id`, `platform_name`, `platform_color`) VALUES
(1, 'Playstation', 'darkblue'),
(2, 'Xbox', 'green'),
(3, 'PC', 'darkorange');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`game_id`);

--
-- Indexes for table `platforms`
--
ALTER TABLE `platforms`
  ADD PRIMARY KEY (`platform_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `game_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `platforms`
--
ALTER TABLE `platforms`
  MODIFY `platform_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
