-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Apr 2022 pada 04.39
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_150`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_aziz`
--

CREATE TABLE `tbl_aziz` (
  `id_aziz` int(11) NOT NULL,
  `nama_aziz` varchar(256) NOT NULL,
  `email_aziz` varchar(256) NOT NULL,
  `alamat_aziz` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_aziz`
--

INSERT INTO `tbl_aziz` (`id_aziz`, `nama_aziz`, `email_aziz`, `alamat_aziz`) VALUES
(5, 'aziz123', 'aziz@gmail.com', 'tanjung bumi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_aziz`
--
ALTER TABLE `tbl_aziz`
  ADD PRIMARY KEY (`id_aziz`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_aziz`
--
ALTER TABLE `tbl_aziz`
  MODIFY `id_aziz` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
