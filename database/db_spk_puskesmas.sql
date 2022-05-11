-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Bulan Mei 2021 pada 09.56
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_spk_puskesmas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `kdKriteria` int(11) NOT NULL,
  `kriteria` varchar(100) NOT NULL,
  `sifat` char(1) NOT NULL,
  `bobot` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`kdKriteria`, `kriteria`, `sifat`, `bobot`) VALUES
(5, 'Biaya', 'C', 5),
(6, 'Dosen', 'B', 5),
(7, 'Prestasi', 'B', 4),
(8, 'Akreditasi', 'B', 3),
(9, 'Relasi', 'B', 2),
(10, 'Fasilitas', 'B', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `kdUniversitas` int(11) NOT NULL,
  `kdKriteria` int(11) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`kdUniversitas`, `kdKriteria`, `nilai`) VALUES
(4, 5, 4),
(4, 6, 3),
(4, 7, 4),
(4, 8, 4),
(4, 9, 4),
(4, 10, 1),
(5, 5, 4),
(5, 6, 5),
(5, 7, 4),
(5, 8, 3),
(5, 9, 3),
(5, 10, 3),
(6, 5, 2),
(6, 6, 3),
(6, 7, 4),
(6, 8, 3),
(6, 9, 4),
(6, 10, 4),
(7, 5, 4),
(7, 6, 4),
(7, 7, 4),
(7, 8, 4),
(7, 9, 4),
(7, 10, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `subkriteria`
--

CREATE TABLE `subkriteria` (
  `kdSubKriteria` int(11) NOT NULL,
  `subKriteria` varchar(50) NOT NULL,
  `value` int(11) NOT NULL,
  `kdKriteria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `subkriteria`
--

INSERT INTO `subkriteria` (`kdSubKriteria`, `subKriteria`, `value`, `kdKriteria`) VALUES
(1, 'tidak memadai', 1, 10),
(2, 'kurang memadai', 2, 10),
(3, 'cukup memadai', 3, 10),
(4, 'memadai', 4, 10),
(5, 'sangat memadai', 5, 10),
(11, 'sangat mahal', 1, 5),
(12, 'mahal', 2, 5),
(13, 'sedang', 3, 5),
(14, 'murah', 4, 5),
(15, 'sangat murah', 5, 5),
(16, 'tidak kompeten', 1, 6),
(17, 'kurang kompeten', 2, 6),
(18, 'cukup kompeten', 3, 6),
(19, 'kompeten', 4, 6),
(20, 'sangat kompeten', 5, 6),
(21, 'tidak unggul', 1, 7),
(22, 'kurang unggul', 2, 7),
(23, 'cukup unggul', 3, 7),
(24, 'unggul', 4, 7),
(25, 'sangat unggul', 5, 7),
(26, 'sangat rendah', 1, 8),
(27, 'rendah', 2, 8),
(28, 'cukup', 3, 8),
(29, 'tinggi', 4, 8),
(30, 'sangat tinggi', 5, 8),
(31, 'tidak ada', 1, 9),
(32, 'kurang menunjang', 2, 9),
(33, 'cukup menunjang', 3, 9),
(34, 'menunjang', 4, 9),
(35, 'sangat menunjang', 5, 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `universitas`
--

CREATE TABLE `universitas` (
  `kdUniversitas` int(11) NOT NULL,
  `universitas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `universitas`
--

INSERT INTO `universitas` (`kdUniversitas`, `universitas`) VALUES
(4, 'Univ Sapu jagad aa'),
(5, 'Univ Merdeka Indonesia'),
(6, 'Univ Bangsa Jaya Abadi'),
(7, 'Univ Merdeka Indonesia 2');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`kdKriteria`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD UNIQUE KEY `indexNilai` (`kdUniversitas`,`kdKriteria`) USING BTREE,
  ADD KEY `kdKriteria` (`kdKriteria`);

--
-- Indeks untuk tabel `subkriteria`
--
ALTER TABLE `subkriteria`
  ADD PRIMARY KEY (`kdSubKriteria`),
  ADD KEY `kdKriteria` (`kdKriteria`);

--
-- Indeks untuk tabel `universitas`
--
ALTER TABLE `universitas`
  ADD PRIMARY KEY (`kdUniversitas`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `kdKriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `subkriteria`
--
ALTER TABLE `subkriteria`
  MODIFY `kdSubKriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT untuk tabel `universitas`
--
ALTER TABLE `universitas`
  MODIFY `kdUniversitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`kdUniversitas`) REFERENCES `universitas` (`kdUniversitas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`kdKriteria`) REFERENCES `kriteria` (`kdKriteria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `subkriteria`
--
ALTER TABLE `subkriteria`
  ADD CONSTRAINT `subkriteria_ibfk_1` FOREIGN KEY (`kdKriteria`) REFERENCES `kriteria` (`kdKriteria`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
