-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2016 at 05:24 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(2) NOT NULL,
  `name` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `link`) VALUES
(10, 'home', 'home.php'),
(11, 'articles', 'articles.php'),
(12, 'services', 'services.php'),
(13, 'logos', 'logos.php'),
(14, 'tools', 'tools.php'),
(15, 'icons', 'icons.php'),
(16, 'wallpapers', 'wallpapers.php');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8_unicode_ci,
  `image` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `author` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `click` int(4) DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `text`, `image`, `author`, `click`, `date`) VALUES
(4, 'They also propose that future referendums have a guaranteed six month official campaign, and citizenship education be extended in schools with the voting age reduced to 16', 'They also propose that future referendums have a guaranteed six month official campaign, and citizenship education be extended in schools with the voting age reduced to 16.\r\nThe UK voted to leave the EU on 23 June by 51.9% to 48.1%.\r\nThe then prime minister David Cameron and the government backed a Remain vote, while the Leave campaign was fronted by ex-mayor of London Boris Johnson, who is now foreign secretary.\r\nThe Electoral Reform Society, which campaigns for democratic reform, said its polling showed Mr Cameron and other political big beasts had failed to convince the public.\r\nWhen asked about eight prominent politicians, most people said they had had no effect on the way they voted.\r\nThe only high-profile figures who, according to the poll, persuaded more voters of their position than drove them to vote the other way were Boris Johnson, Nigel Farage and US presidential candidate Donald Trump, who backed Brexit.', 'images/postImages/01092016152157.jpg', 'Chingiz Mammadli', 23, '2016-08-31 20:00:00'),
(5, 'Its impossible', 'Its impossible. for me to forget Mother Teresa -- soon to be Saint Teresa of Kolkata. She gave me a chance to escape poverty and live a different destiny in England.\r\n\r\nI was born in Kolkata in 1977, although there is no official record of my birth. Ive no memory of my birth parents and there are conflicting reports as to where and when I was born, and to whom.\r\nSome paperwork traces my origins back to the 24 Parganas district, born to destitute parents in an impoverished part of Kolkatas urban sprawl.', 'images/postImages/02092016130344.jpg', 'Chingiz Mammadli', 5, '2016-09-01 10:31:20'),
(8, 'Hangzhou on the eve of the G20 is a certain kind of awesome', 'Hangzhou on the eve of the G20 is a certain kind of awesome. A city rebuilt.\r\nFilled with brand new security kit and locked down manhole covers, it has been emptied of a third of its population.\r\nThe switch was flicked to off in factories for hundreds of miles around, the pollution haze dispersed and the sky turned G20 blue.\r\nThis weekends G20 is a demonstration that the one party state decides on a goal, it can call the country to attention and command its people to get behind it.', 'images/postImages/02092016160742.jpg', 'Vuqar Namazli', 7, '2016-08-31 14:16:29'),
(9, 'Football fans globally will have been caught up in the excitement of a new Premier League season in England, but in other leagues more than mere money and glory are at stake', 'Football fans globally will have been caught up in the excitement of a new Premier League season in England, but in other leagues more than mere money and glory are at stake.\r\nThese are competitions in conflict-affected parts of the world, where playing football can be a life-threatening risk, and where continuing to take part and play makes a powerful statement.\r\nFor example, Manchester Uniteds Europa League clash later this season against Ukrainian club Zorya Luhansk is set to be moved 560 miles across the country to Odessa on safety grounds.\r\nThe club has been unable to play in their home city of Luhansk for more than two years.\r\nThe Ukrainian side came fourth in their league last season. However, Luhansk and its surrounding areas have been embroiled in conflict since 2014, when Russia took control of the Crimean peninsula of southern Ukraine.\r\nIn the ensuing turmoil, three teams in Crimea were absorbed into the Russian league system, and the Shakhtar and Olympik clubs from Donetsk in eastern Ukraine were forced to relocate to Kiev because of the same conflict.\r\nDespite that, Shakhtar currently leads the 12-team league.', 'images/postImages/02092016160902.jpg', 'Nigar Jafarova', 10, '2016-09-02 13:35:16'),
(10, 'Wind and rain from Hurricane Hermine has battered Floridas northern Gulf Coast, causing flooding and power outages', 'Wind and rain from Hurricane Hermine has battered Floridas northern Gulf Coast, causing flooding and power outages.\r\nHermine made landfall early on Friday, becoming the first hurricane to hit the state in more than a decade.\r\nWind gusts reached 80mph (130km/h), the National Hurricane Center (NHC) said.\r\nIn the town of Cedar Key, waters rose more than 9.5ft (2.9 metres), among the highest surges ever seen, according to the National Weather Service.\r\nIt passed through Florida and has now weakened to a tropical storm, making its way through Georgia before heading for the Carolinas.', 'images/postImages/02092016160959.jpg', 'Chingiz Mammadli', 3, '2016-09-01 11:34:37'),
(19, 'Manchester City boss Pep Guardiola has left midfielder Yaya Toure out of his 2016-17 Champions League squad', 'Manchester City boss Pep Guardiola has left midfielder Yaya Toure out of his 2016-17 Champions League squad.\r\n\r\nCity could not include more than 17 overseas players in their squad.\r\n\r\nAnd Guardiola still has 18 on his books, despite letting four foreign internationals leave before Wednesdays transfer deadline.\r\n\r\nClubs can change three players after the group stage but Toure, 33, will not be able to play against Borussia Monchengladbach, Celtic and Barcelona.\r\n\r\nThe Ivory Coast international has played a major part in all Citys trophy wins since he was bought from Barcelona, then managed by Guardiola, for Â£24m in 2010.\r\n\r\nHe has only played once this season, in the second leg of the Champions League play-off against Steaua Bucharest, when City were already 5-0 up from the first game.\r\n\r\nIt was rumoured Toure might leave the club following Guardiolas arrival, with Inter Milan one of the clubs who were interested.\r\n\r\nHowever, the player never had any desire to leave City and intends to see out his contract, which expires in 2017.\r\n\r\nThe 17 overseas players Guardiola has chosen include new signings Leroy Sane and Ilkay Gundogan, who are yet to play for the club, skipper Vincent Kompany, who is recovering from groin and thigh operations which kept him out of Euro 2016, and 19-year-old forward Kelechi Iheanacho.', 'images/postImages/02092016171620.jpg', 'Naseh Bedelov', 1, '2016-09-02 15:22:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
