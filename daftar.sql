-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 07. Desember 2015 jam 13:27
-- Versi Server: 5.5.16
-- Versi PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `daftar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata`
--

CREATE TABLE IF NOT EXISTS `biodata` (
  `name` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `jenis_kelamin` tinytext NOT NULL,
  `umur` int(11) NOT NULL,
  `agama` varchar(13) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user` mediumint(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `umur` int(3) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `password` varchar(8) NOT NULL,
  PRIMARY KEY (`user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1235 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user`, `nama`, `alamat`, `jenis_kelamin`, `umur`, `agama`, `tempat_lahir`, `password`) VALUES
(1234, 'nda zulda', 'Bojonghuni', 'Pria', 21, 'Islam', 'Ciamis', '7110eda4');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
