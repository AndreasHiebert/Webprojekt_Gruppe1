-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 10. Jul 2016 um 21:51
-- Server-Version: 10.1.13-MariaDB
-- PHP-Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `webprojekt`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `modules`
--

CREATE TABLE `modules` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `abbreviation` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `cp` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `modules`
--

INSERT INTO `modules` (`id`, `name`, `abbreviation`, `description`, `cp`, `status`, `semester`, `course_id`) VALUES
(1, 'Grundlagen Informatik I', 'GI I', '', 8, 0, 1, 1),
(2, 'Mathematisch-technische Grundlagen I', 'MtG I', '', 10, 0, 1, 1),
(3, 'Naturwissenschaftliche Grundlagen I', 'NG I', '', 5, 0, 1, 1),
(4, 'Corporate Management', 'CM I', '', 4, 0, 1, 1),
(5, 'Steuerungskompetenzen I', '', '', 3, 0, 1, 1),
(6, 'Grundlagen Informatik II', 'GI II', '', 8, 0, 2, 1),
(7, 'Mathematisch-technische Grundlagen II', 'MtG II', '', 10, 0, 2, 1),
(8, 'Naturwissenschaftliche Grundlagen II', 'NG II', '', 5, 0, 2, 1),
(9, 'Corporate Management II', 'CM II', '', 4, 0, 2, 1),
(10, 'Steuerungskompetenzen II', '', '', 3, 0, 2, 1),
(11, 'Moderne Computersysteme I', 'MC I', '', 10, 0, 3, 1),
(12, 'Mathematik und System Analysis', '', 'das Grauen', 5, 0, 3, 1),
(13, 'Embedded Systems', 'ES', '', 8, 0, 3, 1),
(14, 'Corporate Management III', 'CM III', '', 4, 0, 3, 1),
(15, 'Steuerungskompetenzen III', '', '', 3, 0, 3, 1),
(16, 'Moderne Computersysteme II', 'MC II', '', 10, 0, 4, 1),
(17, 'Studienschwerpunkte I', '', '- System Simulation\r\n- Embedded Systems\r\n- Mobile Computing', 10, 0, 4, 1),
(18, 'Corporate Magagement IV', 'CM IV', '', 4, 0, 4, 1),
(19, 'Steuerungskompetenzen IV', '', '', 3, 0, 4, 1),
(20, 'Praxis-/Auslandssemester', '', 'Bericht schreiben 15 Seiten Englisch', 30, 0, 5, 1),
(21, 'Projektarbeit', '', '', 13, 0, 6, 1),
(22, 'Studienschwerpunkte II', '', '- System Simulation\r\n- Embedded Systems\r\n- Mobile Computing', 10, 0, 6, 1),
(23, 'Corporate Management V', 'CM V', '', 4, 0, 6, 1),
(24, 'Steuerungskompetenzen V', '', '', 3, 0, 6, 1),
(25, 'Bachelorarbeit', '', '', 14, 0, 7, 1),
(26, 'Studienschwerpunkte III', '', '', 16, 0, 7, 1);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
