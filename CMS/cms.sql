-- phpMyAdmin SQL Dump
-- version 4.5.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 09 Jan 2016 pada 06.15
-- Versi Server: 10.1.9-MariaDB-log
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `username` text NOT NULL,
  `password` text NOT NULL,
  `level` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`username`, `password`, `level`) VALUES
('Administrator', '123', 'Admin'),
('Erikodiony', '123', 'User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `no` int(11) NOT NULL,
  `judul` text NOT NULL,
  `head` text NOT NULL,
  `isi` text NOT NULL,
  `kategori` text NOT NULL,
  `bulan` text NOT NULL,
  `tahun` text NOT NULL,
  `kontrib` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`no`, `judul`, `head`, `isi`, `kategori`, `bulan`, `tahun`, `kontrib`) VALUES
(1, 'Halo Dunia (User)', 'User Posting', '<p>Ini adalah posting pertama ku (User) ! :)&nbsp;</p>', 'SainsTek', 'Januari', '2016', 'User'),
(2, 'Halo Dunia (Admin)', 'Ini Posting pertamaku (Admin)', '<p>Ini adalah posting pertama ku (admin) ! :)&nbsp;</p>', 'SainsTek', 'Januari', '2016', 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `judul` text NOT NULL,
  `urutan` text NOT NULL,
  `mail` text NOT NULL,
  `isikom` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`judul`, `urutan`, `mail`, `isikom`) VALUES
('Halo Dunia (User)', '1', 'User', '<p>Ini adalah Komentar pertamaku (user)</p>'),
('Halo Dunia (Admin)', '1', 'Admin', '<p>Ini adalah Komentar Pertama ku (Admin) !&nbsp;<img src="http://localhost/CMS/Scripts/Tinymce/plugins/emoticons/img/smiley-cool.gif" alt="cool" /></p>');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
