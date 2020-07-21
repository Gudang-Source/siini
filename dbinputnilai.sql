-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 14 Mei 2019 pada 14.49
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbinputnilai`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_admin` varchar(30) NOT NULL,
  `foto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`username`, `password`, `nama_admin`, `foto`) VALUES
('admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin SIINI', ''),
('agung', 'af61985fab499287e2e0608e71c8a4006a3c4a2c', 'Agng', ''),
('widuri', '088635f9bf8afe8a376d4f892a0b5922fb0a95ee', 'Widuri', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_dosen`
--

CREATE TABLE `tbl_dosen` (
  `nid` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_dosen` varchar(30) NOT NULL,
  `foto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_dosen`
--

INSERT INTO `tbl_dosen` (`nid`, `password`, `nama_dosen`, `foto`) VALUES
('101111640001', 'ce3eaa938d09504bae9458dffb805f2de7c9da4e', 'Imam Zaenuddin', ''),
('101111640002', '4746430088648973cc6b23e9ef7b1dce270ffa0e', 'Khaerudin', 'logoFav.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_krs`
--

CREATE TABLE `tbl_krs` (
  `kd_krs` varchar(10) NOT NULL,
  `kode_mk` varchar(5) NOT NULL,
  `nid` varchar(20) NOT NULL,
  `ruang` varchar(5) NOT NULL,
  `jam_kuliah` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_krs`
--

INSERT INTO `tbl_krs` (`kd_krs`, `kode_mk`, `nid`, `ruang`, `jam_kuliah`) VALUES
('KRS_002', 'MK001', '101111640001', 'A101', '09:00-12:00'),
('KRS_1', 'MK001', '101111640001', 'B301', '09:00-11:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mahasiswa`
--

CREATE TABLE `tbl_mahasiswa` (
  `nim` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_mhs` varchar(30) NOT NULL,
  `jk_mhs` enum('Laki-Laki','Perempuan','','') NOT NULL,
  `thn_akademik` year(4) NOT NULL,
  `jurusan_mhs` enum('Teknik Informatika','Sistem Informasi','Manajemen Informatika','Komputerisasi Akuntansi') NOT NULL,
  `jenjang_mhs` enum('D3','S1','','') NOT NULL,
  `kelas_program` enum('Pagi','Malam','Shift','') NOT NULL,
  `foto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_mahasiswa`
--

INSERT INTO `tbl_mahasiswa` (`nim`, `password`, `nama_mhs`, `jk_mhs`, `thn_akademik`, `jurusan_mhs`, `jenjang_mhs`, `kelas_program`, `foto`) VALUES
('109150640001', '89dd90f20144b1245053ee6e9b76f3b9a61d868c', 'Nia Kurniadin', 'Laki-Laki', 2015, 'Teknik Informatika', 'S1', 'Pagi', ''),
('109150640002', '0b56821524090012832b63ee64197cb20d24c2d5', 'Wahidin', 'Laki-Laki', 2015, 'Teknik Informatika', 'S1', 'Shift', 'darto1.jpg'),
('109150640003', '4c6f9c6577a6a289af2784997d0c2d07a2b5c52e', 'Indrajit', 'Laki-Laki', 2015, 'Teknik Informatika', 'S1', 'Shift', ''),
('109150640004', '3f547476e0ce8e681ded188f0322a4d5e0d56ec4', 'Danil Nurhakim', 'Laki-Laki', 2015, 'Teknik Informatika', 'S1', 'Shift', ''),
('109150640005', 'a53a33601b8dd9d06ae9e50f1f30fbe957aba866', 'Ahmad apudin', 'Laki-Laki', 2015, 'Teknik Informatika', 'S1', 'Pagi', ''),
('109150640100', 'af61985fab499287e2e0608e71c8a4006a3c4a2c', 'Agung Ribowo', 'Laki-Laki', 2015, 'Teknik Informatika', 'S1', 'Shift', 'IMG-20171223-WA0010_(2).jpg'),
('109150640101', 'f3bbda5f9289ddc884c06aa0420f9770ca08560c', 'Deri Susilo', 'Perempuan', 2014, 'Sistem Informasi', 'S1', 'Pagi', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_matakuliah`
--

CREATE TABLE `tbl_matakuliah` (
  `kode_mk` varchar(5) NOT NULL,
  `nama_mk` varchar(30) NOT NULL,
  `jml_sks` int(2) NOT NULL,
  `semester` enum('1','2','3','4','5','6','7','8') NOT NULL,
  `jurusan` enum('Teknik Informatika','Sistem Informasi','Manajemen Informatika','Komputerisasi Akuntansi') NOT NULL,
  `nid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_matakuliah`
--

INSERT INTO `tbl_matakuliah` (`kode_mk`, `nama_mk`, `jml_sks`, `semester`, `jurusan`, `nid`) VALUES
('MK001', 'Pemrograman 3', 3, '5', 'Teknik Informatika', '101111640001'),
('MK002', 'Implementasi Basis Data', 2, '5', 'Teknik Informatika', '101111640002');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_nilai`
--

CREATE TABLE `tbl_nilai` (
  `nim` varchar(20) NOT NULL,
  `kode_mk` varchar(5) NOT NULL,
  `nid` varchar(20) NOT NULL,
  `thn_akademik` year(4) NOT NULL,
  `semester` enum('1','2','3','4','5','6','7','8') NOT NULL,
  `nilai` int(3) NOT NULL,
  `grade` char(2) NOT NULL,
  `tgl_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_nilai`
--

INSERT INTO `tbl_nilai` (`nim`, `kode_mk`, `nid`, `thn_akademik`, `semester`, `nilai`, `grade`, `tgl_input`) VALUES
('109150640100', 'MK001', '101111640001', 2015, '5', 90, 'A', '2018-03-21'),
('109150640003', 'MK002', '101111640002', 2015, '5', 70, 'C+', '2018-04-11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tbl_dosen`
--
ALTER TABLE `tbl_dosen`
  ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `tbl_krs`
--
ALTER TABLE `tbl_krs`
  ADD PRIMARY KEY (`kd_krs`),
  ADD KEY `kode_mk` (`kode_mk`),
  ADD KEY `nid` (`nid`);

--
-- Indexes for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `tbl_matakuliah`
--
ALTER TABLE `tbl_matakuliah`
  ADD PRIMARY KEY (`kode_mk`),
  ADD KEY `nid` (`nid`);

--
-- Indexes for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  ADD KEY `nim` (`nim`),
  ADD KEY `kode_mk` (`kode_mk`),
  ADD KEY `nid` (`nid`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_krs`
--
ALTER TABLE `tbl_krs`
  ADD CONSTRAINT `tbl_krs_ibfk_1` FOREIGN KEY (`nid`) REFERENCES `tbl_dosen` (`nid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_krs_ibfk_2` FOREIGN KEY (`kode_mk`) REFERENCES `tbl_matakuliah` (`kode_mk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_matakuliah`
--
ALTER TABLE `tbl_matakuliah`
  ADD CONSTRAINT `tbl_matakuliah_ibfk_1` FOREIGN KEY (`nid`) REFERENCES `tbl_dosen` (`nid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  ADD CONSTRAINT `tbl_nilai_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `tbl_mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_nilai_ibfk_2` FOREIGN KEY (`nid`) REFERENCES `tbl_dosen` (`nid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_nilai_ibfk_3` FOREIGN KEY (`kode_mk`) REFERENCES `tbl_matakuliah` (`kode_mk`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
