-- phpMyAdmin SQL Dump
-- version 4.5.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 30. Nov 2016 um 15:40
-- Server-Version: 5.6.26
-- PHP-Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `mockupdatadb`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `mockupdatatable`
--

CREATE TABLE `mockupdatatable` (
  `id` int(11) NOT NULL,
  `vorname` varchar(255) NOT NULL,
  `nachname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ipnr` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `mockupdatatable`
--

INSERT INTO `mockupdatatable` (`id`, `vorname`, `nachname`, `email`, `ipnr`) VALUES
(1, 'Adam', 'Anderson', 'aanderson8@google.fr', '118.93.83.157'),
(2, 'Susan', 'Andrews', 'sandrewsn@google.co.jp', '228.214.9.251'),
(3, 'Catherine', 'Andrews', 'candrewsp@noaa.gov', '11211187178'),
(4, 'Alan', 'Bradley', 'abradley1c@globo.com', '229152117127'),
(5, 'Anne', 'Brooks', 'abrooks16@bravesites.com', '243.159.39.234'),
(6, 'Russell', 'Brown', 'rbrownq@nifty.com', '215.38.120.242'),
(7, 'Ryan', 'Burton', 'rburton18@foxnews.com', '159.60.107.14'),
(8, 'Roy', 'Campbell', 'rcampbell1@geocities.com', '237.232.34.20'),
(9, 'Russell', 'Campbell', 'rcampbell17@eventbrite.com', '251.2.92.63'),
(10, 'Bonnie', 'Coleman', 'bcoleman11@fc2.com', '109150122102'),
(11, 'Ernest', 'Coleman', 'ecoleman15@businessweek.com', '213.173.4.7'),
(12, 'Richard', 'Cruz', 'rcruz7@unc.edu', '235.124.23.221'),
(13, 'Sean', 'Cruz', 'scruz10@answers.com', '92.255.49.227'),
(14, 'Rebecca', 'Cunningham', 'rcunninghamd@mac.com', '65.79.191.52'),
(15, 'Margaret', 'Evans', 'mevansh@pcworld.com', '162.10.86.196'),
(16, 'Jeffrey', 'Ford', 'jford14@cnet.com', '210.216.54.14'),
(17, 'Andrea', 'Gardner', 'agardnerv@woothemes.com', '179.91.0.30'),
(18, 'Deborah', 'George', 'dgeorge6@furl.net', '201.76.47.162'),
(19, 'Sean', 'Gibson', 'sgibsony@alexa.com', '48.114.103.55'),
(20, 'Virginia', 'Graham', 'vgrahamk@aol.com', '165.219.171.1'),
(21, 'Steven', 'Hamilton', 'shamiltonu@state.tx.us', '38.194.91.201'),
(22, 'Virginia', 'Hawkins', 'vhawkinsf@ehow.com', '93.120.46.203'),
(23, 'Edward', 'Hicks', 'ehicksc@pcworld.com', '199.153.27.1'),
(24, 'Mark', 'Johnson', 'mjohnsonj@hostgator.com', '73.87.135.206'),
(25, 'Ruth', 'Jordan', 'rjordan1a@smugmug.com', '193.140.80.64'),
(26, 'Antonio', 'Kim', 'akim4@odnoklassniki.ru', '168.244.191.78'),
(27, 'Jennifer', 'Marshall', 'jmarshallt@gnu.org', '104.191.49.94'),
(28, 'Eric', 'Matthews', 'ematthews5@independent.co.uk', '138.194.30.1'),
(29, 'Raymond', 'Mcdonald', 'rmcdonald2@ihg.com', '161.24.42.24'),
(30, 'Eric', 'Miller', 'emillere@creativecommons.org', '122.159.17.218'),
(31, 'Jonathan', 'Morales', 'jmoralesa@ovh.net', '97.65.110.105'),
(32, 'Marie', 'Morgan', 'mmorganb@cloudflare.com', '226.79.152.112'),
(33, 'Amanda', 'Nelson', 'anelson13@indiatimes.com', '161185121245'),
(34, 'Lisa', 'Olson', 'lolsonr@telegraph.co.uk', '77245172100'),
(35, 'Alice', 'Ortiz', 'aortizw@histats.com', '179.52.222.21'),
(36, 'Peter', 'Phillips', 'pphillipss@1688.com', '11.158.255.76'),
(37, 'Matthew', 'Porter', 'mporter9@europa.eu', '174.81.178.88'),
(38, 'Tammy', 'Ray', 'trayx@weather.com', '192.243.38.190'),
(39, 'Mark', 'Richardson', 'mrichardson1d@ihg.com', '209.217.14.154'),
(40, 'Joan', 'Roberts', 'jroberts12@alibaba.com', '4.91.143.62'),
(41, 'Kathleen', 'Rose', 'kroseg@pinterest.com', '222.172.140.56'),
(42, 'Steve', 'Sanders', 'ssanders1b@wikispaces.com', '91.61.109.245'),
(43, 'Shirley', 'Scott', 'sscottm@macromedia.com', '219.237.108.82'),
(44, 'Lillian', 'Stephens', 'lstephens19@hugedomains.com', '89.85.137.204'),
(45, 'Nicole', 'Thompson', 'nthompson3@admin.ch', '13183208155'),
(46, 'Marie', 'Thompson', 'mthompsonz@yelp.com', '162.164.5.231'),
(47, 'Alan', 'Vasquez', 'avasquezo@miibeian.gov.cn', '178.109.86.172'),
(48, 'Mildred', 'Watkins', 'mwatkins0@miibeian.gov.cn', '150.67.132.64'),
(49, 'Eugene', 'Williams', 'ewilliamsi@deliciousdays.com', '67.208.26.182'),
(50, 'Catherine', 'Williams', 'cwilliamsl@360.cn', '154.87.204.51');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `mockupdatatable`
--
ALTER TABLE `mockupdatatable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `mockupdatatable`
--
ALTER TABLE `mockupdatatable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
