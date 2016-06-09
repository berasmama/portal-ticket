-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Inang: localhost
-- Waktu pembuatan: 01 Jun 2016 pada 09.33
-- Versi Server: 5.5.25a
-- Versi PHP: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `bsm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_transaksi`
--

CREATE TABLE IF NOT EXISTS `tbl_transaksi` (
  `id_trans` int(11) NOT NULL AUTO_INCREMENT,
  `kode_booking` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `id_kat` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `bulan` varchar(10) NOT NULL,
  `tahun` int(11) NOT NULL,
  `foto_konfirm` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id_trans`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id_trans`, `kode_booking`, `nama`, `email`, `id_kat`, `jumlah`, `bulan`, `tahun`, `foto_konfirm`, `status`) VALUES
(2, 'ihlo92drcg', 'Taufan Fadhilah Iskandar', 'tfi231097@gmail.com', 1, 2, 'June', 2016, 'Brosur1.png', 'paid'),
(3, 'ix543gh1o1', 'Ahlul', 'ahlul@gmail.com', 2, 12, 'June', 2016, '', 'book');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
