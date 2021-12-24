-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Des 2021 pada 15.11
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpuskita`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_buku`
--

CREATE TABLE `data_buku` (
  `id` int(11) NOT NULL,
  `nama_peminjam` varchar(44) NOT NULL,
  `tgl_peminjam` date NOT NULL,
  `nama_buku` varchar(64) NOT NULL,
  `pengarang` varchar(64) NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  `keterangan` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_buku`
--

INSERT INTO `data_buku` (`id`, `nama_peminjam`, `tgl_peminjam`, `nama_buku`, `pengarang`, `tgl_pengembalian`, `keterangan`) VALUES
(2, 'Ahmad', '2021-12-24', 'Seni Berbicara', 'Larry King', '2022-12-08', 'Tepat Waktu'),
(3, 'Dwi', '2021-12-25', 'The Answer', 'Alan & Barbara Pease', '2022-01-08', 'Tepat Waktu'),
(4, 'Finneas', '2021-12-15', 'Good To Great', 'Jim Collins', '2022-02-27', 'Telat'),
(5, 'Kunto', '2022-01-29', 'Hit Refresh', 'Satya Nadela', '2022-02-12', 'Tidak Kembali/Hilang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'user1', '$2y$10$I92t0SDEIVf6WE1wowOyTusBU194ZFgyRk6n7GwIJpbPAFEKNUPNu'),
(6, 'user2', '$2y$10$W0SE2OBf0GaPtJmeo9RFCu10l/yKjdbXCG0fS5/yjus0TUHOYLzpS');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_buku`
--
ALTER TABLE `data_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_buku`
--
ALTER TABLE `data_buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
