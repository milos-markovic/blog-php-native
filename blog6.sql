-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2018 at 11:57 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog6`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `section` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `section`, `image`, `created_at`, `updated_at`, `user_id`) VALUES
(16, 'Jimi hendrix', 'James Marshall Hendrix poznatiji kao Jimi Hendrix. Iako njegova solo karijera (od izlaska prvog singla 1966. pa sve do smrti 1970.g.) traje svega Äetiri godine, priÄa o njegovoj glazbenoj karijeri zapoÄinje puno prije. JoÅ¡ od malih nogu zanima se za gitaru, pa je i prve akorde nauÄio prije nego Å¡to je krenuo u Å¡kolu. Postoji i jedna anegdota koja je nagovjeÅ¡tavala Jimijevu zaljubljenost u sviranje:...Jimi je po svojoj sobi ludovao i zamiÅ¡ljao da svira gitaru kada mu je doÅ¡ao otac s metlom i rekao da pospremi sobu. Otac je otiÅ¡ao s miÅ¡ljenjem da Ä‡e mu sin napraviti kako mu je rekao, a kada se vratio naÅ¡ao je Jimija kako spava s metlom preko sebe kao da drÅ¾i gitaru. Probudio ga je i upitao "Å ta si radio?", a Jimi mu je odgovorio "Svirao sam metlu!".', 'jimi hendriks.jpg', '2018-04-08 10:49:19', '0000-00-00 00:00:00', 1),
(17, 'Eric Clapton', 'Erik Patrik Klepton (engl. Eric Patrick Clapton; roÄ‘en 30. marta 1945, poznat pod nadimkom â€žSlouhendâ€œ (engl. Slowhand - â€žspororukiâ€œ)) engleski je rok-gitarista, pevaÄ i kompozitor. Jedini je muziÄar koji je tri puta priman u Rokenrol kuÄ‡u slavnih. MuziÄki kritiÄari i publika smatraju ga jednim od najveÄ‡ih gitarista svih vremena. Erik Klepton je rangiran kao 2. na Roling stounovoj listi najveÄ‡ih gitarista svih vremena i kao 53. na njihovoj listi 100 najveÄ‡ih umetnika svih vremena.', 'eric.jpg', '2018-06-08 09:59:20', '2018-06-08 09:59:20', 1),
(18, 'Carlos Santana', 'Karlos Augusto Alves Santana (engl. Carlos Augusto Alves Santana), (roÄ‘en 20. jula 1947.), poznat kao Karlos Santana ili samo Santana, je muziÄar ameriÄkog "Latino roka" i gitarista, rodom iz Meksika. Dobitnik je Gremi nagrade.\r\n\r\nPostao je slavan kasnih 1960. godina i ranih 1970. sa svojom grupom, Santana Bluz Bend (engl. Santana Blues Band), koji su se najÄeÅ¡Ä‡e pojavljivali pod nazivom "Santana" i koji su stvorili veoma uspeÅ¡nu meÅ¡avinu salse, roka, bluza i dÅ¾eza. Njihov zvuk obeleÅ¾en je Santaninom, Äesto veoma visokom i Äistom gitarskom linijom koja je u kontrastu sa latinoameriÄkim instrumentacijama na dairama i kongama. Santana je nastavio da radi na ovaj naÄin tokom sledeÄ‡ih decenija, a doÅ¾iveo je iznenadnu reafirmaciju svoje popularnosti u kasnim 1990. godinama.', 'santana.jpg', '2018-06-08 11:52:14', '0000-00-00 00:00:00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `article_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `comment`, `article_id`) VALUES
(4, 'Milos', 'This is good article', 16);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `usertype_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `usertype_id`) VALUES
(1, 'Milos', 'Markovic', 'milos@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 1),
(2, 'Djordje', 'Markovic', 'djoka@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 2),
(7, 'Branka', 'Markovic', 'branka@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 1);

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE `usertype` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_id` (`article_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usertype_id` (`usertype_id`),
  ADD KEY `usertype_id_2` (`usertype_id`);

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `usertype`
--
ALTER TABLE `usertype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`usertype_id`) REFERENCES `usertype` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
