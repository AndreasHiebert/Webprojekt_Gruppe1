-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 16. Jun 2016 um 11:14
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
-- Tabellenstruktur für Tabelle `achievements`
--

CREATE TABLE `achievements` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `code` varchar(99) NOT NULL,
  `description` text NOT NULL,
  `type` int(11) NOT NULL,
  `obtainedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fitnesspointValueId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `achievements`
--

INSERT INTO `achievements` (`id`, `name`, `code`, `description`, `type`, `obtainedDate`, `fitnesspointValueId`) VALUES
(1, 'Gebe einen Fitnesscode ein!', '0000-0000-0000', 'testcode', 0, '2016-06-13 23:48:43', 10);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `abbreviation` varchar(20) NOT NULL,
  `module` int(11) NOT NULL,
  `moduleList` int(11) NOT NULL,
  `countParticipants` int(11) NOT NULL,
  `maxCp` int(11) NOT NULL,
  `numberModule` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `courses`
--

INSERT INTO `courses` (`id`, `name`, `abbreviation`, `module`, `moduleList`, `countParticipants`, `maxCp`, `numberModule`, `description`) VALUES
(1, 'Intelligent Systems Design', 'ISD', 0, 0, 0, 210, 26, 'Informationen sind durch die Verbreitung über Internet, Funk und Satellit heute überall verfügbar. Wir greifen mit Hilfe on Applikationen, kurz Apps, über mobile Endgeräte darauf zu und navigieren uns so ganz einfach durchs Leben. Dabei gilt es, die immer komplexer werdenen Bedingungen von unterschiedlichen mobilen Geräten, von Hard- und Software sowie verschiedener Betriebssysteme zu integrieren. Die Konfiguration und das Management von Schnittstellen ist eine der zentralen Aufgaben bei der Softwareentwicklung und Programmierung von Apps Auch Computer- und Internet-Sicherheit sind wichtige Faktoren.');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `fitnesspoints`
--

CREATE TABLE `fitnesspoints` (
  `id` int(11) NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `fitnesspoints`
--

INSERT INTO `fitnesspoints` (`id`, `value`) VALUES
(1, 50),
(2, 100),
(3, 150),
(4, 200),
(5, 250),
(6, 300),
(7, 350),
(8, 400),
(9, 450),
(10, 500);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `grades`
--

CREATE TABLE `grades` (
  `id` int(11) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP
) ;

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
(1, 'boeseradmin', 'boeseradmin@boese.admin', 'toboese', b'01'),
(2, 'guntherApproved', 'guntherApproved@hshl.de', 'guntherApproved', b'01'),
(3, 'guntherNotApproved', 'guntherNotApproved@hshl.de', 'guntherNotApproved@hshl.de', b'00');

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
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `modules`
--

INSERT INTO `modules` (`id`, `name`, `abbreviation`, `description`, `cp`, `status`, `semester`) VALUES
(1, 'Grundlagen Informatik I', 'GI I', '', 8, 0, 1),
(2, 'Mathematisch-technische Grundlagen I', 'MtG I', '', 10, 0, 1),
(3, 'Naturwissenschaftliche Grundlagen I', 'NG I', '', 5, 0, 1),
(4, 'Corporate Management', 'CM I', '', 4, 0, 1),
(5, 'Steuerungskompetenzen I', '', '', 7, 0, 1),
(6, 'Grundlagen Informatik II', 'GI II', '', 8, 0, 2),
(7, 'Mathematisch-technische Grundlagen II', 'MtG II', '', 10, 0, 2),
(8, 'Naturwissenschaftliche Grundlagen II', 'NG II', '', 5, 0, 2),
(9, 'Corporate Management II', 'CM II', '', 4, 0, 2),
(10, 'Steuerungskompetenzen II', '', '', 7, 0, 2),
(11, 'Moderne Computersysteme I', 'MC I', '', 10, 0, 3),
(12, 'Mathematik und System Analysis', '', 'das Grauen', 5, 0, 3),
(13, 'Embedded Systems', 'ES', '', 8, 0, 3),
(14, 'Corporate Management III', 'CM III', '', 4, 0, 3),
(15, 'Steuerungskompetenzen III', '', '', 7, 0, 3),
(16, 'Moderne Computersysteme II', 'MC II', '', 10, 0, 4),
(17, 'Studienschwerpunkte I', '', '- System Simulation\r\n- Embedded Systems\r\n- Mobile Computing', 10, 0, 4),
(18, 'Corporate Magagement IV', 'CM IV', '', 4, 0, 4),
(19, 'Steuerungskompetenzen IV', '', '', 4, 0, 4),
(20, 'Praxis-/Auslandssemester', '', 'Bericht schreiben 15 Seiten Englisch', 30, 0, 5),
(21, 'Projektarbeit', '', '', 13, 0, 6),
(22, 'Studienschwerpunkte II', '', '- System Simulation\r\n- Embedded Systems\r\n- Mobile Computing', 12, 0, 7),
(23, 'Corporate Management V', 'CM V', '', 4, 0, 6),
(24, 'Steuerungskompetenzen V', '', '', 3, 0, 6),
(25, 'Bachelorarbeit', '', '', 14, 0, 7),
(26, 'Studienschwerpunkte III', '', '', 16, 0, 0);

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
  `activeCourse` int(50) NOT NULL,
  `fitnesspoints` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `regDate`, `email`, `activeCourse`, `fitnesspoints`) VALUES
(1, 'Tim', '1234', '2016-05-30 23:11:43', 'example1@stud.hshl.de', 0, 0),
(2, 'Timey', '12345', '2016-05-30 23:33:44', 'example2@stud.hshl.de', 0, 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT für Tabelle `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT für Tabelle `fitnesspoints`
--
ALTER TABLE `fitnesspoints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
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
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;