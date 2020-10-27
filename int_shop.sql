-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 27 2020 г., 11:44
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `int_shop`
--

CREATE TABLE `int_shop` (
  `title` varchar(200) NOT NULL,
  `dess` varchar(5000) NOT NULL,
  `img` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `int_shop`
--

INSERT INTO `int_shop` (`title`, `dess`, `img`, `price`) VALUES
('Jeffree Star Cosmetics ORGY COLLECTION: Orgy Palette', 'The Orgy Eyeshadow Palette is the first all matte and is the largest palette JSC have ever created! This might be the only nude palette you\'ll ever need with 30 iconic nude eyeshadows. Orgy is filled with creamy, blendable mattes with the same intensely pigmented formula as our previous palettes, making it easy for those perfect nudes to melt right into each other on any skin tone. \r\nMax 2 stk pr kunde', '4.jpg', '$100,28'),
('Huda Beauty Nude Obsessions Palettes for Holiday', 'When it comes to nude eyeshadow, there’s no real trend – it’s about what nude means to you. Everyone needs a good basic nude palette, but my nude isn’t yours, and we wanted to finally create a collection of nude eyeshadows that would cater to every skin tone. So, we created three nude palettes – Light, Medium, and Rich – each one designed to look amazing on all skin tones, while giving everyone the opportunity to define their own nude.', '5.jpg', '$35,58'),
('Huda Beauty Pastel Obsessions Palettes for Spring/Summer 2020', '“If you’ve been following me on Instagram, you’ll have noticed I was majorly crushing on mint all last year, and ever since I’ve literally been obsessed with pastel shades. So, while pastels have been flooding the runways, we wanted to launch our own pastel moment for spring with three divine new Pastel Obsessions Palettes in Lilac, Rose, and Mint. I cannot wait for you guys to try these – pastels are the new neutrals!” — Huda Kattan', '6.jpg', '$29.00'),
('Jeffree Star Cosmetics Androgyny Eyeshadow Palette', 'A ten-colour eyeshadow palette. Containing both matte and metallic shadows, Androgyny Palette is a \'neutral\' collection by Jeffree Star.', '3.jpg', '$45.00'),
('Beauty Bay EYN Bright Matte 42 Colour Palette review - A Woman\'s Confidence', 'The Beauty Bay EYN Bright 42 Colour Palette contains every colour of the rainbow, how could I resist?! Take a look at my review and 3 tutorials.', '1.jpg', '$29,99'),
('Lime Crime Venus XL Palette Multi One Size', 'Lime Crime Venus XL Palette cuz you’re goddess af! Look radiant with the ultimate eyeshadow palette that is highly pigmented and ultra buttery to give ya gorgeous color that doesn’t fade out.', '2.jpg', '$76,5'),
(' CREMATED EYESHADOW PALETTE', ' The Cremated Palette is what smokey eye dreams are made of! Includes 24 sickening shades from pure white diamond to the darkest black matte to create endless intense sultry or soft, gentle looks on any skin tone.  Vegan & cruelty-free.  Please see the last image for a full list of ingredients!', 'img/4.png', ' $ 58.00'),
('  Shiseido Visionary Gel Lipstick in Shizuka Red', ' Shiseido’s most popular lipstick is a long-lasting, full-coverage lipstick that features a special gel technology that is weightless on the lips and also delvers full-coverage. The shade name is really something special to the brand too; Shizuka translates to \"quiet\" or \"calm\" in Japanese.', 'img/4.png', ' $26 ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
