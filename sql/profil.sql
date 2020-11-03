-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Nov 2020 pada 01.45
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `profil`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `isi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`id`, `isi`) VALUES
(1, 'saya membuat web ini untuk mengerjakan tugas UTS.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
--

CREATE TABLE `blog` (
  `id` int(5) NOT NULL,
  `judul` varchar(500) NOT NULL,
  `autor` varchar(25) NOT NULL,
  `tanggal` date NOT NULL,
  `isi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `blog`
--

INSERT INTO `blog` (`id`, `judul`, `autor`, `tanggal`, `isi`) VALUES
(2, 'Sepeda motor', 'Anggito', '2020-11-01', 'Sepeda motor adalah kendaraan beroda dua[1] yang digerakkan oleh sebuah mesin. Letak kedua roda sebaris lurus dan pada kecepatan tinggi sepeda motor tetap stabil disebabkan oleh gaya giroskopik. Sedangkan pada kecepatan rendah, kestabilan atau keseimbangan sepeda motor bergantung kepada pengaturan setang oleh pengendara. Penggunaan sepeda motor di Indonesia sangat populer karena harganya yang relatif murah, terjangkau untuk sebagian besar kalangan dan penggunaan bahan bakarnya serta serta biaya '),
(6, 'Jaket', 'wikipedia', '2020-06-24', '<p><strong>Jaket</strong>&nbsp;adalah&nbsp;<a href=\"https://id.wikipedia.org/wiki/Baju\" title=\"Baju\">baju</a>&nbsp;luar yang panjangnya hingga&nbsp;<a href=\"https://id.wikipedia.org/wiki/Pinggang\" title=\"Pinggang\">pinggang</a>&nbsp;atau&nbsp;<a href=\"https://id.wikipedia.org/wiki/Pinggul\" title=\"Pinggul\">pinggul</a>, dipakai untuk menahan angin dan cuaca dingin. Bukaan jaket terletak di bagian depan dari leher ke bawah.&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id` int(3) NOT NULL,
  `instagram` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nomer` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id`, `instagram`, `email`, `nomer`) VALUES
(1, 'anggito666', 'anggitoabimanyu00@gmail.com', '081398290811');

-- --------------------------------------------------------

--
-- Struktur dari tabel `portofolio`
--

CREATE TABLE `portofolio` (
  `id` int(3) NOT NULL,
  `profil` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `portofolio`
--

INSERT INTO `portofolio` (`id`, `profil`) VALUES
(3, '<p>Nama saya Anggito Abimanyu saya kuliah di Universitas Pembangunan Jaya, saya masuk ke Universitas pada tahun 2018 dan pada tahun yang sama saya lulus sekolah di sekolah menengah kejuruan, jurusan yang saya ambil saat Smk yaitu Tkj&nbsp;<img alt=\"heart\" src=\"http://localhost/uts/ckeditor/plugins/smiley/images/heart.png\" style=\"height:23px; width:23px\" title=\"heart\" /></p>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
