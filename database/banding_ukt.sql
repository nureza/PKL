-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jan 2021 pada 20.31
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banding_ukt`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `banding`
--

CREATE TABLE `banding` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `npm` varchar(30) NOT NULL,
  `program_studi` text NOT NULL,
  `fakultas` text NOT NULL,
  `semester` int(11) NOT NULL,
  `alasan_banding` varchar(500) NOT NULL,
  `nama_ayah` varchar(30) NOT NULL,
  `nama_ibu` varchar(30) NOT NULL,
  `pekerjaan_ayah` text NOT NULL,
  `pekerjaan_ibu` text NOT NULL,
  `penghasilan_total` varchar(50) NOT NULL,
  `status_diri` text NOT NULL,
  `jumlah_saudara` int(11) NOT NULL,
  `jumlah_pengeluaran_perbulan` varchar(50) NOT NULL,
  `tagihan_listrik_perbulan` varchar(50) NOT NULL,
  `status_tempat_tinggal` text NOT NULL,
  `jenis_aset_yang_dimiliki` varchar(100) NOT NULL,
  `bukti_terlampir` text NOT NULL,
  `verifikasi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `banding`
--

INSERT INTO `banding` (`id`, `nama`, `npm`, `program_studi`, `fakultas`, `semester`, `alasan_banding`, `nama_ayah`, `nama_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `penghasilan_total`, `status_diri`, `jumlah_saudara`, `jumlah_pengeluaran_perbulan`, `tagihan_listrik_perbulan`, `status_tempat_tinggal`, `jenis_aset_yang_dimiliki`, `bukti_terlampir`, `verifikasi`) VALUES
(2, 'Risky Ardiansyah', '-1', 'w', 'w', -1, '', 'w', 'w', 'w', 'w', '2', 'w', 2, '2', '2', '2', 'q', 'file_18.04.806_bab1.pdf', 'diterima');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `user_role` enum('admin','mahasiswa') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `user_role`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'eza', '70d9be166c6ca3da7f6364be89aed69f', 'mahasiswa'),
(3, 'rian', 'cb2b28afc2cc836b33eb7ed86f99e65a', 'mahasiswa');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `banding`
--
ALTER TABLE `banding`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `banding`
--
ALTER TABLE `banding`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
