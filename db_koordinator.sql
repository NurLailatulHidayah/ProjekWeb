-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Sep 2022 pada 07.25
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_koordinator`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `Nama_Mahasiswa` varchar(45) NOT NULL,
  `Nim` varchar(45) NOT NULL,
  `Kelas` varchar(45) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Alamat` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `Nama_Mahasiswa`, `Nim`, `Kelas`, `Email`, `Alamat`) VALUES
(6, 'rizal', '362155401120', '1D', 'rizal11@gmail.com', 'wonosobo'),
(7, 'jehan', '362155401189', '1D', 'jehan12@gmail.com', 'muncar'),
(8, 'irsya', '36215540110', '1D', 'irsya12@gmail.com', 'rogojampi'),
(9, 'danur', '362155401109', '1D', 'danu12@gmail.com', 'jember'),
(15, 'Zayidan', '362155401118', '1D', 'zayidan12@gmail.com', 'Tegaldlimo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `murid`
--

CREATE TABLE `murid` (
  `id` int(11) NOT NULL,
  `NIM` varchar(45) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Mata_Kuliah` varchar(50) NOT NULL,
  `Dosen` varchar(50) NOT NULL,
  `Nilai` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `murid`
--

INSERT INTO `murid` (`id`, `NIM`, `Nama`, `Mata_Kuliah`, `Dosen`, `Nilai`) VALUES
(1, '362155401119', 'M.Sofi Ulinuha Adian', 'PBO', 'Lutfi Hakim', '90'),
(2, '362155401101', 'Alvin Ikhsan Nur Wahid', 'WEB Dasar', 'Farisqi', '91'),
(3, '362155401116', 'Nur Lailatul Hidayah', 'Pemrograman WEB Dasar', 'Farisqi', '92'),
(4, '362155401105', 'Puti Nur Sakinah', 'PBO', 'Lutfi Hakim', '93'),
(5, '362155401122', 'Fitri Sukma Kinasih', 'PBO', 'Lutfi Hakim', '94');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pendaftar`
--

CREATE TABLE `tb_pendaftar` (
  `Id` int(11) NOT NULL,
  `Tempat_KP` varchar(45) NOT NULL,
  `Alamat_KP` varchar(45) NOT NULL,
  `Tanggal_Mulai` date NOT NULL,
  `Tanggal_Selesai` date NOT NULL,
  `Proposal` varchar(45) NOT NULL,
  `Anggota_Kelompok` varchar(45) NOT NULL,
  `Dosen` varchar(45) NOT NULL,
  `Perusahaan` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pendaftar`
--

INSERT INTO `tb_pendaftar` (`Id`, `Tempat_KP`, `Alamat_KP`, `Tanggal_Mulai`, `Tanggal_Selesai`, `Proposal`, `Anggota_Kelompok`, `Dosen`, `Perusahaan`) VALUES
(125, 'Rogojampi', 'Jl.Banyuwangi', '2022-09-01', '2022-09-30', 'SPL.pptx', 'Nur Lailatul Hidayah', 'Farisqi', 'PT.Mandiri'),
(126, 'Purwoharjo', 'Jl.Songgon', '2022-09-02', '2022-09-29', 'K3 didunia Informatika.docx', 'Putri Sukma Kinasih', 'Lutfi Hakim', 'PT.Sukses'),
(127, 'Purwoharjo', 'Jl.Benculuk', '2022-09-03', '2022-10-01', '1. EK 1.pdf', 'Fitri Sukma Kinasih', 'Lutfi', 'PT.Niaga'),
(128, 'Srono', 'Jl.Rogojampi', '2022-09-01', '2022-09-30', 'EK 2 (1).pdf', 'Alvin Ikhsan Nur Wahid', 'Farisqi', 'PT.Perburuhan'),
(129, 'Pulau Merah', 'Jl.Pesanggaran', '2022-09-02', '2022-10-01', 'Langkah.docx', 'M. Shofi Ulinuha Adian', 'Lutfi Hakim', 'PT. Bumi Sukses Indo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `Id_pengguna` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`Id_pengguna`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Admin', 'admin', 'admin', 'admin'),
(2, 'pengguna', '', '', 'pengguna');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tmhs`
--

CREATE TABLE `tmhs` (
  `Id` int(11) NOT NULL,
  `Tempat_KP` varchar(45) NOT NULL,
  `Alamat_KP` varchar(45) NOT NULL,
  `Tanggal_mulai` date NOT NULL,
  `Tanggal_selesai` date NOT NULL,
  `Proposal` varchar(45) NOT NULL,
  `Anggota_kelompok_Id` varchar(45) NOT NULL,
  `Dosen_Id` varchar(50) NOT NULL,
  `Perusahaan_Id` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tmhs`
--

INSERT INTO `tmhs` (`Id`, `Tempat_KP`, `Alamat_KP`, `Tanggal_mulai`, `Tanggal_selesai`, `Proposal`, `Anggota_kelompok_Id`, `Dosen_Id`, `Perusahaan_Id`) VALUES
(1, 'Rogojampi', 'Jl.Banyuwangi', '2022-09-01', '2022-09-30', 'Langkah Download.pdf', 'Putri Nur Sakinah', 'Farisqi', 'Pt.Mandiri'),
(2, 'Purwoharjo', 'Jl.Benculuk', '2022-08-29', '2022-09-27', 'Makalah K3_kelompok5.pdf', 'Nur Lailatul Hidayah', 'Lutfi Hakim', 'Pt.Sejahtera'),
(3, 'Songgon', 'Jl.Rogojampi', '2022-09-01', '2022-09-30', 'Vektor bagian 1.pdf', 'Fitri Sukma Kinasih', 'Farisqi', 'Pt.Sukses Abadi'),
(4, 'Srono', 'Jl.Mangir', '2022-09-03', '2022-10-05', 'BahanKuliahALIN01-03.pdf', 'M.Shofi Ulinuha Adian', 'Farisqi', 'Pt.Jaya Abadi'),
(5, 'Banyuwangi', 'Jl.Kalipuro', '2022-09-01', '2022-09-29', '4. Normalisasi.ppt', 'Alvin Ikhsan Nur Wahid', 'Lutfi Hakim', 'Pt.Lestari');

-- --------------------------------------------------------

--
-- Struktur dari tabel `unggah`
--

CREATE TABLE `unggah` (
  `id` int(11) NOT NULL,
  `surat_izin` varchar(50) NOT NULL,
  `jadwal_ujian` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `unggah`
--

INSERT INTO `unggah` (`id`, `surat_izin`, `jadwal_ujian`) VALUES
(1, '8. keypad.pdf', '7. PIR.pdf'),
(2, 'Queue.pdf', 'Searching.pdf'),
(3, 'Praktikum 6 - Class.pdf', 'Praktikum 10 - Stack.pdf'),
(4, '3 Array.pdf', 'Laporan Insertion Sort.docx'),
(5, 'Stack.pdf', 'T6 - Bubbled dan Shell Sort.pdf');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `murid`
--
ALTER TABLE `murid`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pendaftar`
--
ALTER TABLE `tb_pendaftar`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`Id_pengguna`);

--
-- Indeks untuk tabel `tmhs`
--
ALTER TABLE `tmhs`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `unggah`
--
ALTER TABLE `unggah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `murid`
--
ALTER TABLE `murid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_pendaftar`
--
ALTER TABLE `tb_pendaftar`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT untuk tabel `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `Id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tmhs`
--
ALTER TABLE `tmhs`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `unggah`
--
ALTER TABLE `unggah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
