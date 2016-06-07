-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 07 Jun 2016 pada 18.35
-- Versi Server: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bsm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `navbar_menu`
--

CREATE TABLE IF NOT EXISTS `navbar_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `icon` varchar(45) NOT NULL,
  `href` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `navbar_menu`
--

INSERT INTO `navbar_menu` (`id`, `title`, `icon`, `href`) VALUES
(1, 'Dashboard', 'fa-dashboard', 'index.php'),
(8, 'Administrator', 'fa-cogs', ''),
(9, 'Testing', 'fa-config', '#');

-- --------------------------------------------------------

--
-- Struktur dari tabel `navbar_submenu`
--

CREATE TABLE IF NOT EXISTS `navbar_submenu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_parent` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `href` varchar(45) NOT NULL,
  `icon` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_menu-submenu_idx` (`id_parent`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `navbar_submenu`
--

INSERT INTO `navbar_submenu` (`id`, `id_parent`, `title`, `href`, `icon`) VALUES
(1, 8, 'User <> Menu', 'user-menu.php', 'fa-group'),
(2, 8, 'List Menu', 'list-menu.php', 'fa-th');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tiket`
--

CREATE TABLE IF NOT EXISTS `tbl_tiket` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `harga` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_tiket`
--

INSERT INTO `tbl_tiket` (`id`, `nama`, `harga`) VALUES
(1, 'Bronze', 10000),
(2, 'Silver', 20000),
(3, 'Gold', 40000);

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
  `harga` int(11) NOT NULL,
  `bulan` varchar(10) NOT NULL,
  `tahun` int(11) NOT NULL,
  `foto_konfirm` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id_trans`),
  KEY `id_kat` (`id_kat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id_trans`, `kode_booking`, `nama`, `email`, `id_kat`, `jumlah`, `harga`, `bulan`, `tahun`, `foto_konfirm`, `status`) VALUES
(2, 'ihlo92drcg', 'Taufan Fadhilah Iskandar', 'tfi231097@gmail.com', 1, 2, 0, 'June', 2016, 'Brosur1.png', 'paid'),
(3, 'ix543gh1o1', 'Ahlul', 'ahlul@gmail.com', 2, 12, 0, 'June', 2016, '', 'book');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `birthday` date NOT NULL,
  `is_valid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `first_name`, `last_name`, `email`, `phone`, `birthday`, `is_valid`) VALUES
(1, 'sofyan.arifin', 'password', 'Sofyan', 'Arifin', 'sofyanarifin39@gmail.com', '083848650014', '1998-01-24', 1),
(2, 'ahlul.esasjana', 'password', 'AC Ahlul', 'Akbar Esasjana', 'cakahlul@gmail.com', '081234567890', '1996-12-04', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE IF NOT EXISTS `user_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  PRIMARY KEY (`id`,`id_user`,`id_menu`),
  KEY `fk_user-user_menu_idx` (`id_user`),
  KEY `fk_menu-user_menu_idx` (`id_menu`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `id_user`, `id_menu`) VALUES
(1, 1, 1),
(2, 1, 8),
(3, 2, 8);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `navbar_submenu`
--
ALTER TABLE `navbar_submenu`
  ADD CONSTRAINT `fk_menu-submenu` FOREIGN KEY (`id_parent`) REFERENCES `navbar_menu` (`id`);

--
-- Ketidakleluasaan untuk tabel `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD CONSTRAINT `tbl_transaksi_ibfk_1` FOREIGN KEY (`id_kat`) REFERENCES `tbl_tiket` (`id`);

--
-- Ketidakleluasaan untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD CONSTRAINT `fk_menu-user_menu` FOREIGN KEY (`id_menu`) REFERENCES `navbar_menu` (`id`),
  ADD CONSTRAINT `fk_user-user_menu` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
