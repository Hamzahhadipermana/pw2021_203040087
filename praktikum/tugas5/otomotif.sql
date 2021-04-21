-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Apr 2021 pada 21.38
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prakpw_otomotif_203040087`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `otomotif`
--

CREATE TABLE `otomotif` (
  `id` int(11) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `description` varchar(150) NOT NULL,
  `price` int(150) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `otomotif`
--

INSERT INTO `otomotif` (`id`, `picture`, `nama`, `description`, `price`, `category`) VALUES
(1, 'Titanium.jpeg', 'Baut Titanium', 'Baut Titanium Aksesoris Untuk Motor', 450000, 'Otomotif'),
(2, 'Probolt.jpeg', 'Baut Probolt', 'Baut Probolt Aksesoris Untuk Motor', 340000, 'Otomotif'),
(3, 'MasterRem.jpeg', 'Master Rem Nissin', 'Master Rem yang terbuat dari bahan dasar berkualitas untuk memenuhi standar', 1225000, 'Otomotif'),
(4, 'KaliperNissin.jpeg', 'Kaliper Nissin', 'Kaliper Nissin Monoblok 4 piston untuk matick all honda', 470000, 'Otomotif'),
(5, 'ShockOhlins.jpeg', 'Shock Ohlins', 'Shock Ohlins Tabung bawah fitur klik rebound aktif', 1200000, 'Otomotif'),
(6, 'ShockKTC.jpeg', 'Shock KTC', 'Shock KTC Tabung Atas fitur klik rebound aktif', 950000, 'Otomotif'),
(7, 'Stabilizer.jpeg', 'Stabilizer Ohlins', 'Stabilizer setang Ohlins alumunium (Universal)', 5550000, 'Otomotif'),
(8, 'Paharem.jpeg', 'Paha Rem', 'Paha Rem Twotone Bakaran aksesoris', 50000, 'Otomotif'),
(9, 'Disk.jpeg', 'Disk Nissin', 'Disk Nissin floating 220mm', 430000, 'Otomotif'),
(10, 'Gantungan.jpeg', 'Gantungan Twotone', 'Gantungan Variasi Twotone', 50000, 'Otomotif');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `otomotif`
--
ALTER TABLE `otomotif`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `otomotif`
--
ALTER TABLE `otomotif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
