-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27 Jan 2020 pada 10.59
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sukses`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_akses`
--

CREATE TABLE `tb_akses` (
  `id_akses` int(11) NOT NULL,
  `ket_akses` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_akses`
--

INSERT INTO `tb_akses` (`id_akses`, `ket_akses`) VALUES
(1, 'Admin'),
(2, 'Pasien'),
(3, 'Dokter Umum'),
(4, 'Dokter Gigi'),
(5, 'Apoteker');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_antrian`
--

CREATE TABLE `tb_antrian` (
  `id_antrian` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_poli` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `no_antrian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `tb_antrian`
--

INSERT INTO `tb_antrian` (`id_antrian`, `id_user`, `id_poli`, `tanggal`, `no_antrian`) VALUES
(1, 2, 1, '2020-01-25', 1),
(2, 6, 1, '2020-01-25', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_periksa`
--

CREATE TABLE `tb_periksa` (
  `id_periksa` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_poli` int(11) NOT NULL,
  `tanggal_periksa` date NOT NULL,
  `tensi_darah` varchar(11) NOT NULL,
  `riwayat_penyakit` varchar(255) NOT NULL,
  `gejala` varchar(255) NOT NULL,
  `diagnosa` varchar(255) NOT NULL,
  `tindakan` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `resep_obat` varchar(255) NOT NULL,
  `id_status_periksa` int(11) NOT NULL,
  `id_status_obat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `tb_periksa`
--

INSERT INTO `tb_periksa` (`id_periksa`, `id_user`, `id_poli`, `tanggal_periksa`, `tensi_darah`, `riwayat_penyakit`, `gejala`, `diagnosa`, `tindakan`, `keterangan`, `resep_obat`, `id_status_periksa`, `id_status_obat`) VALUES
(1, 2, 1, '2020-01-25', '120/60', 'batuk', 'demam tinggi', 'tifus', 'suntik', 'cepat sembuh', 'paramex', 2, 1),
(2, 6, 1, '2020-01-25', '', '', '', '', '', '', '', 3, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_poli`
--

CREATE TABLE `tb_poli` (
  `id_poli` int(11) NOT NULL,
  `ket_poli` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_poli`
--

INSERT INTO `tb_poli` (`id_poli`, `ket_poli`) VALUES
(1, 'UMUM'),
(2, 'GIGI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_status`
--

CREATE TABLE `tb_status` (
  `id_status` int(11) NOT NULL,
  `ket_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_status`
--

INSERT INTO `tb_status` (`id_status`, `ket_status`) VALUES
(1, 'BELUM'),
(2, 'SUDAH'),
(3, 'PROSES');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `id_akses` int(11) NOT NULL,
  `no_identitas` varchar(20) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `id_akses`, `no_identitas`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `no_hp`, `alamat`, `email`, `pekerjaan`, `username`, `password`, `foto`) VALUES
(1, 1, '503/A.0/0066.ADM/35', 'Amry Zulfa Al Husna', 'L', 'Kediri', '1999-08-17', '082234121604', 'Dsn Bulurejo RT.02 RW.01 Ds Kawedusan Kec. Plosoklaten Kab.Kediri', 'amryzoelfa@gmail.com', 'Swasta', 'admin', 'admin', '130120202257590 Pas Foto Ukuran 4 x 6 cm.jpg'),
(2, 2, 'E31181100', 'Riwella Nanda Urbaning P', 'P', 'Jember', '1999-08-17', '082234121604', 'Jember', 'wella@gmail.com', 'Mahasiswa', 'E31181100', 'E31181100', '23012020140539FB_IMG_14989179073327064.jpg'),
(3, 3, '503/A.1/0066.DU/35', 'dr. Anindita Pramadyasiwi', 'P', 'Jember', '1988-12-12', '081222333444', 'Jember', 'anindita@yahoo.com', 'Doktor Umum', 'dokteru1', '123', '23012020141923FB_IMG_15103619233895532.jpg'),
(4, 4, '504/B.1/0066.DU/35/1', 'drg. Fariz Gustafianto', 'L', 'Jember', '1993-12-12', '085708514574', 'Jember', '', 'Dokter Gigi', 'dokterg1', '123', ''),
(5, 5, '501/P.1/0066.TK/35/1', 'Wulan Cahya Wandani', 'P', 'Situbondo', '1999-08-22', '02183482964', 'Situbondo', '', 'Swasta', 'apoteker', '123', '23012020140753FB_IMG_15063243325359950.jpg'),
(6, 2, 'E31181280', 'Rizky Nurwinda', 'P', 'Kediri', '1999-07-12', '08233344455', 'Papar, Kediri', '', 'Mahasiswa', 'E31181280', 'rizky123', ''),
(7, 2, 'E31181295', 'An Nissa Safitri', 'P', 'Lumajang', '1999-12-23', '02183482964', 'Pasirian, Lumajang', '', 'Mahasiswa', 'E31181295', '123', ''),
(8, 2, 'E31181234', 'Afif Faris Hudaifi', 'L', 'Ponorogo', '1999-07-06', '085708514574', 'Ponorogo', '', 'Mahasiswa', 'afif', '123', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_akses`
--
ALTER TABLE `tb_akses`
  ADD PRIMARY KEY (`id_akses`);

--
-- Indexes for table `tb_antrian`
--
ALTER TABLE `tb_antrian`
  ADD PRIMARY KEY (`id_antrian`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_poli` (`id_poli`);

--
-- Indexes for table `tb_periksa`
--
ALTER TABLE `tb_periksa`
  ADD PRIMARY KEY (`id_periksa`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_poli` (`id_poli`),
  ADD KEY `id_status_periksa` (`id_status_periksa`),
  ADD KEY `id_status_obat` (`id_status_obat`);

--
-- Indexes for table `tb_poli`
--
ALTER TABLE `tb_poli`
  ADD PRIMARY KEY (`id_poli`);

--
-- Indexes for table `tb_status`
--
ALTER TABLE `tb_status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_akses` (`id_akses`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_akses`
--
ALTER TABLE `tb_akses`
  MODIFY `id_akses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_antrian`
--
ALTER TABLE `tb_antrian`
  MODIFY `id_antrian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_periksa`
--
ALTER TABLE `tb_periksa`
  MODIFY `id_periksa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_poli`
--
ALTER TABLE `tb_poli`
  MODIFY `id_poli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_status`
--
ALTER TABLE `tb_status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_antrian`
--
ALTER TABLE `tb_antrian`
  ADD CONSTRAINT `tb_antrian_ibfk_1` FOREIGN KEY (`id_poli`) REFERENCES `tb_poli` (`id_poli`),
  ADD CONSTRAINT `tb_antrian_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `tb_periksa`
--
ALTER TABLE `tb_periksa`
  ADD CONSTRAINT `tb_periksa_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_periksa_ibfk_2` FOREIGN KEY (`id_poli`) REFERENCES `tb_poli` (`id_poli`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_periksa_ibfk_3` FOREIGN KEY (`id_status_periksa`) REFERENCES `tb_status` (`id_status`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_periksa_ibfk_4` FOREIGN KEY (`id_status_obat`) REFERENCES `tb_status` (`id_status`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `tb_user_ibfk_1` FOREIGN KEY (`id_akses`) REFERENCES `tb_akses` (`id_akses`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
