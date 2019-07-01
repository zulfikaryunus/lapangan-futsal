-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Jul 2019 pada 15.24
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `futsal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `lapangan`
--

CREATE TABLE `lapangan` (
  `kode_boking` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `no_hp` int(20) NOT NULL,
  `nama_team` varchar(20) NOT NULL,
  `lapangan` int(20) NOT NULL,
  `tgl_sewa` date NOT NULL,
  `jam_masuk` int(20) NOT NULL,
  `jam_keluar` int(20) NOT NULL,
  `bayar` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lapangan`
--

INSERT INTO `lapangan` (`kode_boking`, `nama`, `no_hp`, `nama_team`, `lapangan`, `tgl_sewa`, `jam_masuk`, `jam_keluar`, `bayar`) VALUES
('01', 'zulfikar', 2147483647, 'zulfikar', 2, '2019-06-30', 12, 13, 50000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `lapangan`
--
ALTER TABLE `lapangan`
  ADD PRIMARY KEY (`kode_boking`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
