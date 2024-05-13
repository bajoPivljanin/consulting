-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2024 at 05:59 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `consulting`
--

-- --------------------------------------------------------

--
-- Table structure for table `business_area`
--

CREATE TABLE `business_area` (
  `business_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `business_area`
--

INSERT INTO `business_area` (`business_id`, `name`, `description`) VALUES
(1, 'Programiranje', 'Opis za programiranje'),
(2, 'Preduzetništvo', 'Opis za preduzetništvo'),
(3, 'Marketing', 'Opis za marketing'),
(4, 'Prodaja', 'Opis za prodaju');

-- --------------------------------------------------------

--
-- Table structure for table `expert`
--

CREATE TABLE `expert` (
  `expert_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `short_description` varchar(1000) NOT NULL,
  `long_description` text NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `business_area_id` int(11) NOT NULL,
  `active_user` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `expert`
--

INSERT INTO `expert` (`expert_id`, `first_name`, `last_name`, `phone`, `email`, `password`, `short_description`, `long_description`, `price`, `image`, `business_area_id`, `active_user`) VALUES
(1, 'Ana', 'Petrović', '06165465', 'anapetrovic@gmail.com', 'Sifra123', '5 godina iskustva,Preko 3000 prodaja', 'Ana Petrović je priznati stručnjak u oblasti marketinga, sa zavidnih 5 godina iskustva u industriji. Poznata je po svojoj strastvenoj predanosti razvoju brendova i kreiranju inovativnih marketinških strategija. Kroz svoj rad, Ana je ostvarila impresivnih preko 3000 uspešnih prodaja, ističući se kao lider u generisanju prodaje i izgradnji brendova. Njena stručnost i posvećenost su prepoznati širom industrije, inspirišući kolege i klijente svojim rezultatima. Ana je neumorni zagovornik kreativnosti i efikasnosti u marketingu, čineći je nezaobilaznim imenom u svetu brendiranja i prodaje.', 25, 'covek1.png', 4, 1),
(2, 'Marko', 'Jovanović', '0500165', 'markojovanovic@gmail.com', 'Sifra123', '7 godina iskustva,Facebook ads expert,Analitičke sposobnosti', 'Marko Jovanović je istaknuti stručnjak u oblasti marketinga, sa impozantnih 7 godina iskustva u industriji. Poznat je kao stručnjak za Facebook oglase, istakavši se svojom ekspertizom u optimizaciji kampanja i postizanju izvanrednih rezultata. Osim toga, Marko je poznat po svojim analitičkim sposobnostima, koje su mu omogućile da dublje razume potrebe i preferencije ciljne publike. Kroz svoj rad, Marko konstantno dokazuje svoju stručnost i angažovanost u postizanju ciljeva klijenata. Njegova reputacija kao lidera u digitalnom marketingu je neupitna, a njegovo ime je sinonim za uspeh u optimizaciji oglasa i analizi rezultata kampanja.', 20, 'covek2.png', 3, 1),
(3, 'Milica', ' Kovačević', '0651616', 'milicakovacevic@gmail.com', 'Sifra1234', '6 godina iskustva,Full stack Web Developer,Preko 100 web aplikacija', 'Milica Kovačević je priznati stručnjak za programiranje sa šestogodišnjim iskustvom u industriji. Kao Full stack Web Developer, ona je stručnjak u svim aspektima razvoja web aplikacija, od front-end do back-end tehnologija. Sa impresivnim portfoliom koji obuhvata preko 100 web aplikacija, Milica demonstrira svoju sposobnost da kreira visokokvalitetne i funkcionalne digitalne proizvode. Njena stručnost, kreativnost i posvećenost čine je cenjenim profesionalcem u svetu programiranja.', 50, 'covek3.png', 1, 1),
(4, 'Stefan', 'Novak', '06541654', 'novakstefan@gmail.com', 'Sifra123321', '15 godina iskustva,$ Sedmocifrena kompanija', 'Stefan Novak je priznat stručnjak za preduzetništvo s impresivnih 15 godina iskustva u industriji. Poznat je po svojoj strastvenoj predanosti razvoju poslovanja i stvaranju inovativnih rešenja. Kroz svoju sedmocifrenu kompaniju, Novak je ostavio dubok trag u svetu preduzetništva, inspirišući druge svojim uspehom i liderstvom. Njegova posvećenost izgradnji uspešnih poslovnih modela i podršci razvoju novih talenata čini ga cenjenim liderom u svom polju.', 100, 'covek4.png', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `username`, `phone_number`, `email`, `password`) VALUES
(1, 'admin', 'admin', 'admin', '06544651', 'admin@admin.com', '$2y$10$bdwL9JI1Y3Wp1UBdycRj6OrJonmEVr6TVsXpYcMH1ERHAMGPfXlwm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `business_area`
--
ALTER TABLE `business_area`
  ADD PRIMARY KEY (`business_id`);

--
-- Indexes for table `expert`
--
ALTER TABLE `expert`
  ADD PRIMARY KEY (`expert_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `business_area`
--
ALTER TABLE `business_area`
  MODIFY `business_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `expert`
--
ALTER TABLE `expert`
  MODIFY `expert_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
