-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15 Feb 2019 pada 08.45
-- Versi Server: 10.1.22-MariaDB
-- PHP Version: 7.0.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ph`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_input`
--

CREATE TABLE `tb_input` (
  `nis` varchar(100) NOT NULL,
  `namasiswa` varchar(100) NOT NULL,
  `rombel` varchar(100) NOT NULL,
  `rayon` varchar(100) NOT NULL,
  `reward` varchar(100) NOT NULL,
  `skor_reward` varchar(100) NOT NULL,
  `punishment` varchar(100) NOT NULL,
  `skor_punishment` varchar(100) NOT NULL,
  `total_reward` varchar(100) NOT NULL,
  `total_punishment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_input`
--

INSERT INTO `tb_input` (`nis`, `namasiswa`, `rombel`, `rayon`, `reward`, `skor_reward`, `punishment`, `skor_punishment`, `total_reward`, `total_punishment`) VALUES
('11706139', 'farad', 'RPL XI-2', 'Cicurug 1', 'H5.1', '', 'P4.1', '', '', ''),
('11706389', 'Maharani Khalillah', 'RPL XI-2', 'j', 'H3.1', '', 'P5.2', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_punishment`
--

CREATE TABLE `tb_punishment` (
  `no` int(11) NOT NULL,
  `kode_punishment` varchar(100) NOT NULL,
  `skor_punishment` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_punishment`
--

INSERT INTO `tb_punishment` (`no`, `kode_punishment`, `skor_punishment`) VALUES
(1, '', 0),
(2, 'hhfhua', 1000),
(3, 'ppp', 1000),
(4, 'ini', 20);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_reward`
--

CREATE TABLE `tb_reward` (
  `no` int(11) NOT NULL,
  `kode_reward` varchar(100) NOT NULL,
  `skor_reward` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_reward`
--

INSERT INTO `tb_reward` (`no`, `kode_reward`, `skor_reward`) VALUES
(1, 'H3.1', 100),
(2, '', 0),
(3, '', 0),
(4, '', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`username`, `password`) VALUES
('ini', 'apa'),
('ini', 'apa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_punishment`
--
ALTER TABLE `tb_punishment`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tb_reward`
--
ALTER TABLE `tb_reward`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_punishment`
--
ALTER TABLE `tb_punishment`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_reward`
--
ALTER TABLE `tb_reward`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
