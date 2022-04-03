-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2022 at 11:41 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keuangan`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nd` varchar(100) NOT NULL,
  `nt` varchar(100) NOT NULL,
  `nb` varchar(100) NOT NULL,
  `tl` varchar(100) NOT NULL,
  `tgl` date NOT NULL,
  `nik` char(16) NOT NULL,
  `wn` varchar(100) NOT NULL,
  `em` varchar(100) NOT NULL,
  `nh` char(12) NOT NULL,
  `al` varchar(300) NOT NULL,
  `kp` char(5) NOT NULL,
  `us` varchar(100) NOT NULL,
  `pw` varchar(100) NOT NULL,
  `fp` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nd`, `nt`, `nb`, `tl`, `tgl`, `nik`, `wn`, `em`, `nh`, `al`, `kp`, `us`, `pw`, `fp`) VALUES
('Anthony Anthony', 'Wongso Wongso', 'Sutrisno Sutrisno', 'Jakarta Jakarta', '2022-04-01', '8899001122334455', 'Indonesia Indonesia', 'AnthonyAnthony@gmail.com', '665544332211', 'Jakarta Jakarta', '54321', 'Anthony', '123', './uploads/5-57430_a-collection-of-dual-monitor-wallpapers-dual-screen.jpg'),
('dog', 'Chapo', 'Mexico', 'Mexico', '2022-04-01', '1122334455617788', 'Mexico', 'peno@gmail.com', '444466668888', 'Jakarta', '12345', 'ElChapo', '123', './uploads/471327.jpg'),
('Pablo', 'Emilio', 'Escobar', 'Jakarta', '2022-04-01', '1122334455667788', 'Indonesia', 'asd@gmail.com', '444466668888', 'Jakarta', '12345', 'Escobar', '123', './uploads/3UXLAel.png'),
('Vladimir', 'URA', 'Putin', 'Russia', '2022-04-01', '1234567887654321', 'Russia', 'Vputin@gmail.com', '223344556677', 'Russia', '12345', 'PutinA', '123', './uploads/BG.jpg'),
('Jay', 'Sinatraa', 'Won', 'America America', '2022-04-01', '2222222222222222', 'America', 'won@gmail.com', '222222222222', 'Dimana Aja', '22222', 'Sinatraa', '123', './uploads/800px-Flag_of_Australia_(converted).svg.png'),
('Tyson', '\"TenZ\"', 'Ngo', 'Vietnam', '2022-04-01', '1010101010101010', 'Canada', 'tenzombie@gmail.com', '101010101010', 'LA', '10001', 'tenz', '10', './uploads/dark-wallpaper-36.jpg'),
('Xavi', 'Alves', 'Tender', 'Jakarta', '2022-04-02', '1234567812345679', 'Indonesia', 'pen@gmail.com', '444466668888', 'Jakarta', '12345', 'XAT', '123', './uploads/206032.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`us`),
  ADD UNIQUE KEY `fp` (`fp`),
  ADD UNIQUE KEY `nik` (`nik`),
  ADD UNIQUE KEY `em` (`em`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
