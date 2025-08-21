-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 21 Agu 2025 pada 06.24
-- Versi server: 5.7.34
-- Versi PHP: 8.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `suci_septian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `suci`
--

CREATE TABLE `suci` (
  `id` int(11) NOT NULL,
  `nama_hewan` varchar(25) NOT NULL,
  `jenis_hewan` text NOT NULL,
  `asal_hewan` text NOT NULL,
  `jumlah_hewan` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `suci`
--

INSERT INTO `suci` (`id`, `nama_hewan`, `jenis_hewan`, `asal_hewan`, `jumlah_hewan`) VALUES
(321, 'sapi', 'mamalia', 'domestikasi', 8),
(456, 'kucing', 'mamalia', 'timur tengah', 9),
(879, 'ikan', 'vertebrata', 'cina', 6);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `suci`
--
ALTER TABLE `suci`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `suci`
--
ALTER TABLE `suci`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=880;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
