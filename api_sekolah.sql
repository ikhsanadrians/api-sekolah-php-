-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 19 Sep 2022 pada 12.43
-- Versi server: 5.7.33
-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `api_sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_guru`
--

CREATE TABLE `tbl_guru` (
  `kdguru` int(11) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `namaguru` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `jk` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_guru`
--

INSERT INTO `tbl_guru` (`kdguru`, `nip`, `namaguru`, `alamat`, `jk`) VALUES
(1, '19860301', 'Veri Husaeni', 'alamat ini kosong', 'Laki-Laki'),
(2, '19860302', 'Supriadi', 'alamat ini kosong', 'Laki-laki'),
(3, '19860303', 'Edi Kusaynto', 'alamat ini kosong', 'Laki-Laki'),
(4, '19860304', 'Budi Pangestu', 'alamat ini kosong', 'Laki-laki'),
(5, '19860305', 'Patah Yasin', 'Alamat ini kosong', 'Laki-Laki');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jurusan`
--

CREATE TABLE `tbl_jurusan` (
  `kdjurusan` int(11) NOT NULL,
  `namajurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_jurusan`
--

INSERT INTO `tbl_jurusan` (`kdjurusan`, `namajurusan`) VALUES
(1, 'Rekayasa Perangkat Lunak'),
(2, 'Teknik Komputer dan Jaringan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kelas`
--

CREATE TABLE `tbl_kelas` (
  `kdkelas` int(11) NOT NULL,
  `namakelas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`kdkelas`, `namakelas`) VALUES
(1, '10 RPL 1'),
(2, '10 RPL 2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mapel`
--

CREATE TABLE `tbl_mapel` (
  `kdmapel` int(11) NOT NULL,
  `namamapel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_mapel`
--

INSERT INTO `tbl_mapel` (`kdmapel`, `namamapel`) VALUES
(1, 'Pemrograman Dasar'),
(2, 'Komputer dan Jaringan Dasar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_nilai`
--

CREATE TABLE `tbl_nilai` (
  `kdnilai` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `kdguru` int(11) NOT NULL,
  `kdjurusan` int(11) NOT NULL,
  `kdkelas` int(11) NOT NULL,
  `kdmapel` int(11) NOT NULL,
  `uts` varchar(10) NOT NULL,
  `uas` varchar(10) NOT NULL,
  `na` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `nis` int(11) NOT NULL,
  `namasiswa` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `jk` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`nis`, `namasiswa`, `alamat`, `jk`) VALUES
(191, 'faris', 'jkt', 'laki'),
(1234, 'Raya', 'tj b', 'Wanita'),
(6969, 'Maulani Sintani', 'Bekasi Indah Tanjoeng Barat', 'Wanita'),
(8182, 'maulana', 'jkt', 'Pria'),
(12334, 'Ferdi Santana Darma', 'Bekasi Pondok Gede', 'Pria'),
(12341, 'ADELIA SURYANI PUTRI', 'Belum ada alamat', '-'),
(12342, 'AFIVA ISNA FAUZIA', 'Belum ada alamat', '-'),
(12343, 'ALYA DEA AGUSTININGSIH', 'Belum ada alamat', '-'),
(12344, 'ANAS SURYA BAGASASI', 'Belum ada alamat', '-'),
(12346, 'AWALIA AGUSTIN', 'Belum ada alamat', '-'),
(12347, 'DELA LESTARI', 'Belum ada alamat', '-'),
(12348, 'ERLIYAN AULIA', 'Belum ada alamat', '-'),
(12349, 'FIRDA TRI YUANISA', 'Belum ada alamat', '-'),
(12350, 'FRANSISKO RAFAEL', 'Belum ada alamat', '-'),
(112233, 'Dudung Arizki', 'Tanjoeng Barat', 'Pria'),
(123412, 'JONO', 'disini', 'jk'),
(133455, 'tes', 'ddd', 'Tes'),
(11223344, 'Maulana Sentana Dharma Putra Peduli Lindungi', 'Bekasi Indah , Komplek Kodam Jaya', 'Wanita');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `passwords` varchar(50) CHARACTER SET ascii COLLATE ascii_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `passwords`) VALUES
(1, 'ferdiks', 'ferdisusanto123'),
(2, 'natans', 'natans234'),
(3, 'laravelorenzo', 'laravel123'),
(4, 'ghhhgds', '123f'),
(5, 'rafael', 'rafael123'),
(6, 'hafiz', 'hafiz123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD PRIMARY KEY (`kdguru`);

--
-- Indeks untuk tabel `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  ADD PRIMARY KEY (`kdjurusan`);

--
-- Indeks untuk tabel `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD PRIMARY KEY (`kdkelas`);

--
-- Indeks untuk tabel `tbl_mapel`
--
ALTER TABLE `tbl_mapel`
  ADD PRIMARY KEY (`kdmapel`);

--
-- Indeks untuk tabel `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  ADD PRIMARY KEY (`kdnilai`),
  ADD KEY `nis` (`nis`,`kdguru`,`kdjurusan`,`kdkelas`,`kdmapel`),
  ADD KEY `kdguru` (`kdguru`),
  ADD KEY `kdkelas` (`kdkelas`),
  ADD KEY `kdjurusan` (`kdjurusan`),
  ADD KEY `kdmapel` (`kdmapel`);

--
-- Indeks untuk tabel `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_guru`
--
ALTER TABLE `tbl_guru`
  MODIFY `kdguru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  MODIFY `kdjurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  MODIFY `kdkelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_mapel`
--
ALTER TABLE `tbl_mapel`
  MODIFY `kdmapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  MODIFY `kdnilai` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  ADD CONSTRAINT `tbl_nilai_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `tbl_siswa` (`nis`),
  ADD CONSTRAINT `tbl_nilai_ibfk_2` FOREIGN KEY (`kdguru`) REFERENCES `tbl_guru` (`kdguru`),
  ADD CONSTRAINT `tbl_nilai_ibfk_3` FOREIGN KEY (`kdkelas`) REFERENCES `tbl_kelas` (`kdkelas`),
  ADD CONSTRAINT `tbl_nilai_ibfk_4` FOREIGN KEY (`kdjurusan`) REFERENCES `tbl_jurusan` (`kdjurusan`),
  ADD CONSTRAINT `tbl_nilai_ibfk_5` FOREIGN KEY (`kdmapel`) REFERENCES `tbl_mapel` (`kdmapel`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
