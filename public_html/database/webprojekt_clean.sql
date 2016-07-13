-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 13. Jul 2016 um 13:17
-- Server-Version: 10.1.13-MariaDB
-- PHP-Version: 7.0.5

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
-- Tabellenstruktur für Tabelle `achievements`
--

CREATE TABLE `achievements` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `code` varchar(14) NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `abbreviation` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `courses`
--

INSERT INTO `courses` (`id`, `name`, `abbreviation`) VALUES
(1, 'Intelligent Systems Design', 'ISD');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `fitnesspoints`
--

CREATE TABLE `fitnesspoints` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `achievement_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `grades`
--

CREATE TABLE `grades` (
  `id` int(11) NOT NULL,
  `grade` decimal(10,2) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `instructors`
--

CREATE TABLE `instructors` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `approved` bit(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `instructors`
--

INSERT INTO `instructors` (`id`, `name`, `email`, `password`, `approved`) VALUES
(2, 'guntherApproved', 'guntherApproved@hshl.de', 'guntherApproved', b'01');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `modules`
--

CREATE TABLE `modules` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `cp` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `modules`
--

INSERT INTO `modules` (`id`, `name`, `cp`, `semester`, `course_id`) VALUES
(1, 'Grundlagen Informatik I', 6, 1, 1),
(2, 'Mathematisch-technische Grundlagen I', 10, 1, 1),
(3, 'Naturwissenschaftliche Grundlagen I', 5, 1, 1),
(4, 'Corporate Management I', 4, 1, 1),
(5, 'Steuerungskompetenzen I', 7, 1, 1),
(6, 'Grundlagen Informatik II', 8, 2, 1),
(7, 'Mathematisch-technische Grundlagen II', 10, 2, 1),
(8, 'Naturwissenschaftliche Grundlagen II', 5, 2, 1),
(9, 'Corporate Management II', 4, 2, 1),
(10, 'Steuerungskompetenzen II', 7, 2, 1),
(11, 'Moderne Computersysteme I', 10, 3, 1),
(12, 'Mathematik und System Analysis', 5, 3, 1),
(13, 'Embedded Systems', 6, 3, 1),
(14, 'Corporate Management III', 4, 3, 1),
(15, 'Steuerungskompetenzen III', 7, 3, 1),
(16, 'Moderne Computersysteme II', 10, 4, 1),
(17, 'Studienschwerpunkte I', 8, 4, 1),
(18, 'Corporate Magagement IV', 4, 4, 1),
(19, 'Steuerungskompetenzen IV', 4, 4, 1),
(20, 'Praxis-/Auslandssemester', 30, 5, 1),
(21, 'Projektarbeit', 13, 6, 1),
(22, 'Studienschwerpunkte II', 10, 6, 1),
(23, 'Corporate Management V', 4, 6, 1),
(24, 'Steuerungskompetenzen V', 3, 6, 1),
(25, 'Bachelorarbeit', 14, 7, 1),
(26, 'Studienschwerpunkte III', 12, 7, 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `regDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `email` varchar(50) NOT NULL,
  `activeCourse` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `achievements`
--
ALTER TABLE `achievements`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `fitnesspoints`
--
ALTER TABLE `fitnesspoints`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `module_id` (`module_id`);

--
-- Indizes für die Tabelle `instructors`
--
ALTER TABLE `instructors`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `achievements`
--
ALTER TABLE `achievements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT für Tabelle `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT für Tabelle `fitnesspoints`
--
ALTER TABLE `fitnesspoints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT für Tabelle `grades`
--
ALTER TABLE `grades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT für Tabelle `instructors`
--
ALTER TABLE `instructors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT für Tabelle `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `grades`
--
ALTER TABLE `grades`
  ADD CONSTRAINT `grades_ibfk_2` FOREIGN KEY (`module_id`) REFERENCES `modules` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
