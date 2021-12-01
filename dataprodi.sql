-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Des 2021 pada 16.36
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dataprodi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(10) NOT NULL,
  `nama_buku` varchar(100) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `deskripsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `nama_buku`, `pengarang`, `deskripsi`) VALUES
(10, 'Harry Potter and the Philosophers Stone', 'J.K ROWLING', 'Synopsis:\r\n\r\n“Turning the envelope over, his hand trembling, Harry saw a purple wax seal bearing a c'),
(13, 'Harry Potter And The Chamber of Secrets', 'J.K ROWLING', 'Synopsis:\r\n\r\nThe Dursleys were so mean and hideous that summer that all Harry Potter wanted was to g'),
(14, 'HARRY POTTER AND THE PRISONER OF AZKABAN ', 'J.K ROWLING', 'Synopsis:\r\n\r\nFor twelve long years, the dread fortress of Azkaban held an infamous prisoner named Si'),
(15, 'Harry Potter And The Goblet of Fire', 'J.K ROWLING', 'Synopsis:\r\n\r\nThe Triwizard Tournament is to be held at Hogwarts. Only wizards who are over seventeen'),
(16, 'HARRY POTTER AND THE ORDER OF THE PHONIX', 'J.K ROWLING', 'Synopsis:\r\n\r\nThere is a door at the end of a silent corridor. And it’s haunting Harry Pottter’s drea'),
(17, 'HARRY POTTER AND THE HALF-BLOOD PRINCE', 'J.K ROWLING', 'Synopsis:\r\n\r\nWhen Dumbledore arrives at Privet Drive one summer night to collect Harry Potter, his w'),
(18, 'HARRY POTTER AND THE DEATHLY HALLOWS', 'J.K ROWLING', 'Synopsis:\r\n\r\nAs he climbs into the sidecar of Hagrid’s motorbike and takes to the skies, leaving Pri'),
(19, 'OF SALT AND SHORE', 'ANNET SCHAAP', 'Synopsis:\r\n\r\nFor fans of The Hazel Wood, this middle grade novel takes the dark stuff of fairytales '),
(20, 'THE ENCHANTRESS RETURNS (THE LAND OF STORIES #2)', 'CHRIS COLFER', 'Synopsis:\r\n\r\nAfter decades of hiding, the evil Enchantress who cursed Sleeping Beauty is back with a'),
(21, 'THE WISHING SPELL (THE LAND OF STORIES #1)', 'CHRIS COLFER', 'Synopsis:\r\n\r\nAlex and Conner Bailey’s world is about to change, in this fast-paced adventure that un'),
(22, 'SEA WITCH', 'SARAH HENNING', 'Synopsis:\r\n\r\nEveryone knows what happens in the end. A mermaid, a prince, a true love’s kiss. But be'),
(23, 'Thinking, Fast and Slow', 'Daniel Kahneman', 'Berpikir, Cepat dan Lambat adalah buku 2011 oleh psikolog Israel Daniel Kahneman. Tesis utama buku i');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `angkatan` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`, `angkatan`) VALUES
(14, 'Sistem Informasi', '2020'),
(15, 'Akuntansi', '2020'),
(16, 'Psikologi', '2020'),
(17, 'Elektro', '2020'),
(18, 'Manajemen', '2020'),
(19, 'Sastra Indonesia', '2020');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mhs` int(11) NOT NULL,
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_jurusan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mhs`, `nama`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `username`, `password`, `id_jurusan`) VALUES
(1, 'Adelia Pramitha', '2000-03-27', 'P', 'Jalan Pandan LK.I Pare', 'adeliap', '123', 14),
(3, 'Dimas Ahmad At-Thoriqi', '2000-10-30', 'L', 'Desa Tulungrejo, Badas', 'dimasahmad', 'dimascimol', 17),
(4, 'Annisa Putri W', '2000-06-10', 'P', 'Jalan Brantas, Desa Pelem, Pare', 'annisapw', 'anputriw', 18),
(6, 'Rengganis Septiana P', '2000-09-21', 'P', 'Desa Lamong, Badas', 'rengganissp', 'ganis', 16),
(7, 'Alviyan Nuel Pratama', '1999-09-28', 'L', 'Plosoklaten', 'alviyannuel', 'nuelllll', 19),
(8, 'Via Aristin', '2000-04-05', 'P', 'Desa Ngasem, Kediri', 'viaarist', 'piyol', 15),
(9, 'Ricky S', '1999-02-12', 'L', 'Bantul, Yogyakarta', 'rickys', 'masiky', 14),
(10, 'Jaemin Na', '2000-08-18', 'L', 'Kediri', 'na.jaemin', '123', 16),
(14, 'Jaehyun Jeong', '1999-02-14', 'L', 'Pare', 'jeongyunoh', 'mybabe', 16),
(16, 'Mark Lee', '1999-08-20', 'L', 'Desa Gedangsewu, Pare', 'marklee', 'subakkk', 17),
(18, 'Bagus Mughi P', '2000-06-11', 'L', 'Desa Gedangsewu, Pare', 'bagusmughi', 'mumughi', 18),
(21, 'Kim Seon Ho', '1986-01-28', 'L', 'Busan', 'hongbanjang', '123', 17);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`) USING BTREE;

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mhs`),
  ADD KEY `id_jurusan` (`id_jurusan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
