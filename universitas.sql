-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Des 2023 pada 01.01
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `universitas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta`
--

CREATE TABLE `peserta` (
  `NIM` varchar(12) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Prodi` varchar(30) NOT NULL,
  `Alamat` text NOT NULL,
  `Kontak` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `peserta` (`NIM`, `Nama`, `Prodi`, `Alamat`, `Kontak`) VALUES
('230104040200', 'Sophia Putri Anwar Aliza', 'Bisnis & Informasi', 'Nusantara', '087652431987'),
('230104040201', 'Fareilla Putri Anwar Elzahra', 'Teknik Informatika', 'Nusantara', '089649000413'),
('230104040202', 'Alicia Putri Anwar Elyana', 'Teknik Informatika', 'Nusantara', '081234567654'),
('230104040203', 'Catherine Putri Anwar Ersyila', 'Teknik Informatika', 'Nusantara', '081265349867'),
('230104040205', 'Arsyilla Putri Anwar Elzena', 'Teknik Informatika', 'Nusantara', '085213459876'),
('230104040207', 'Muhammad Anwar Al-Banjary', 'Sistem Informasi', 'Banjarmasin', '089743219876'),
('230104040208', 'Muhammad Nur Ihsan', 'Akuntansi', 'Barabai', '087645677654'),
('230104040211', 'Ihsanul Fikrie', 'Managemen', 'Barabai', '089043210987'),
('230104040212', 'M. Kaspul Anwar', 'Teknik Informatika', 'Banjarmasin', '089612345678'),
('230104040213', 'M. Fauzil El Adhiem', 'Teknologi Informasi', 'Banjarbaru', '081512349687'),
('230104040219', 'Destiny Rogers', 'Musik', 'California', '087654321234');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`NIM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
