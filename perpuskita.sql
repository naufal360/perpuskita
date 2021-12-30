-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Des 2021 pada 17.05
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
(2, 'Ahmad', '2021-01-05', 'Cedera Kepala', 'M. Z. Arifin', '2022-01-08', 'Tepat Waktu'),
(3, 'Naufal', '2021-02-13', 'Kesejahteraan Sosial', 'Isbandi Rukminto Adi', '2021-02-27', 'Telat'),
(6, 'Fadhil', '2021-04-14', 'Kolaborasi PHP 5 dan Mysql untuk pengembangan website + cd', 'Eko Priyo Utama', '2021-04-28', 'Tidak Kembali/Hilang'),
(8, 'Dwi', '2021-05-08', 'Lembaga Keuangan Islam', 'Nurul Huda', '2021-05-10', 'Tepat Waktu'),
(9, 'Pertiwi', '2021-06-08', 'Metodologi Penelitian Bidang Kesehatan ED. 2', 'Moch. Imron TA', '2021-06-28', 'Tidak Kembali/Hilang'),
(10, 'Ani', '2021-07-01', 'Strategi Bahasa Assembler + CD', 'Jason P', '2021-07-09', 'Telat');

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
(6, 'user2', '$2y$10$W0SE2OBf0GaPtJmeo9RFCu10l/yKjdbXCG0fS5/yjus0TUHOYLzpS'),
(7, 'user3', '$2y$10$pexnRrU1PhSdaMcF1Qy34uaQef0fnKsXXtPRtc23W6nptGZf1KaMW'),
(8, 'user4', '$2y$10$sFixSCuExUoftUO2UyqNquu.jpAG2kGmn/yXbFDvI/SeeYJYilqA.'),
(9, 'user5', '$2y$10$pD/O2PUdi6zRDG1Vr9GtrujZlZJEA/vP3O7hVWrfu.wGdFEWhyv1O'),
(10, 'user6', '$2y$10$LUxGzX1gTvfyBXJIAk5Rv.VfhpvekejgzqNRokLg7Zd9wOO1FAk9K'),
(11, 'user7', '$2y$10$29YS.tAdlgls3GgGPUu2zep7Gw5xTP4H/.xS38c4d2tnbEeYPzSgS');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
