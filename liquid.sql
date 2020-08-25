-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2019 at 05:37 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `liquid`
--

-- --------------------------------------------------------

--
-- Table structure for table `cabang`
--

CREATE TABLE `cabang` (
  `id_cabang` varchar(11) NOT NULL,
  `nama_cabang` varchar(128) NOT NULL,
  `alamat_cabang` varchar(128) NOT NULL,
  `no_telp` int(128) NOT NULL,
  `jumlah_transaksi` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cabang`
--

INSERT INTO `cabang` (`id_cabang`, `nama_cabang`, `alamat_cabang`, `no_telp`, `jumlah_transaksi`) VALUES
('LLC001', 'Bojongsoang', 'Jl. Raya Bojongsoang No.97 Bojongsoang (40288)', 896689934, 0),
('LLC002', 'Sukabirus', 'Jl. Raya Bojongsoang No.94 Dayeuhkolot  (40257)', 896681234, 0),
('LLC003', 'Sukapura', 'Jl. Sukapura No. 76 (40267)', 812241553, 0);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_barang`
--

CREATE TABLE `jenis_barang` (
  `id_jenis_barang` int(11) NOT NULL,
  `jenis_barang` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_barang`
--

INSERT INTO `jenis_barang` (`id_jenis_barang`, `jenis_barang`) VALUES
(1, 'SATUAN'),
(2, 'KILOAN'),
(3, 'SEPATU');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `no_hp` int(12) NOT NULL,
  `nota` varchar(128) NOT NULL,
  `nama_barang` varchar(128) NOT NULL,
  `jenis_barang` varchar(128) NOT NULL,
  `berat_barang` int(11) NOT NULL,
  `kode_cabang` varchar(128) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_keluar` date NOT NULL,
  `status` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama`, `email`, `no_hp`, `nota`, `nama_barang`, `jenis_barang`, `berat_barang`, `kode_cabang`, `tgl_masuk`, `tgl_keluar`, `status`) VALUES
(1, 'Nanda', 'aserarser@gmail.com', 896689934, 'LLC001N0001', 'Baju ', 'SATUAN', 1, 'LLC001', '2019-04-12', '2019-04-12', 'Selesai'),
(4, 'christine', 'christinehtg@student.telkomuniversity.ac.id', 2147483647, 'LLC001N0004', 'pakaian', 'KILOAN', 5, 'LLC001', '2019-04-12', '2019-04-14', 'Progres'),
(6, 'raka sastra ', 'hgusraka28@gmail.com', 2147483647, 'LLC002N0006', 'pakaian', 'KILOAN', 4, 'LLC002', '2019-04-12', '2019-04-14', 'Progres'),
(7, 'Yuda Danan Jaya', 'yudadananjaya111@gmail.com', 2147483647, 'LLC001N0007', 'pakaian', 'KILOAN', 5, 'LLC001', '2019-04-14', '2019-04-15', 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `level` varchar(128) NOT NULL,
  `is_active` int(11) NOT NULL,
  `date_create` int(11) NOT NULL,
  `reset_password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `password`, `level`, `is_active`, `date_create`, `reset_password`) VALUES
(1, 'Nanda Saputra Pradana', 'nsp.mailku@gmail.com', '$2y$10$muxL7OPeAQz/Uwgh9kRcROlUvrU.qiUHeumSTgyNNNjt4v2qXIBn2', 'Admin', 1, 1554827603, ''),
(2, 'Administrator', 'admin@liquid.com', '$2y$10$AEtz3GGaRzKY4/kbJi855OWeQMa5HiFTUTGhogcUIDt886xNx7dIy', 'Petugas', 1, 1554830762, ''),
(5, 'Owner', 'owner@liquid.com', '$2y$10$scAi11s/3POP013.pld7c.rjRRaYjOabwg5hZCssHlJPI.Nn3X3Xu', 'Owner', 1, 1555246902, ''),
(6, 'ALYA SYIFA IHSANI', 'alyasyifaihsani01@gmail.com', '$2y$10$3ZPUuf.syx.RRUEGYuqAdukb0rOc8hlotXNXpdLmXcOKXdjFg9ubW', 'Admin', 1, 1555247747, ''),
(7, 'Kasir', 'petugas@liquid.com', '$2y$10$nHv7X3E/rGYb654d1opOYOvJnyPPw5DfvOecbR6YuylYFuCuM12Iy', 'Petugas', 1, 1555248025, ''),
(8, 'CHRISTINE YUNITA H', 'christinehtg@student.telkomuniversity.ac.id', '$2y$10$zCRbwwDC5Zuc4oijYvQMRu0tgSiGrd3oPmiqWyJDnHEX9ftKjHiaK', 'Petugas', 1, 1555250559, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis_barang`
--
ALTER TABLE `jenis_barang`
  ADD PRIMARY KEY (`id_jenis_barang`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis_barang`
--
ALTER TABLE `jenis_barang`
  MODIFY `id_jenis_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
