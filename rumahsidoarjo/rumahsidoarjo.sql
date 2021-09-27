-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Sep 2021 pada 07.00
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rumahsidoarjo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cctv`
--

CREATE TABLE `cctv` (
  `id_cctv` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `link` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `damkar`
--

CREATE TABLE `damkar` (
  `id_damkar` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_tlp` varchar(13) NOT NULL,
  `penanggungjawab` varchar(50) NOT NULL,
  `lat` varchar(50) NOT NULL,
  `long` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kantor_polisi`
--

CREATE TABLE `kantor_polisi` (
  `id_kantor_polisi` int(11) NOT NULL,
  `nama_kantor_polisi` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `no_tlp` varchar(200) NOT NULL,
  `penanggungjawab` varchar(50) NOT NULL,
  `lat` varchar(100) NOT NULL,
  `long` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_wisata`
--

CREATE TABLE `kategori_wisata` (
  `id_kategori_wisata` int(11) NOT NULL,
  `kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kecamatan` int(11) NOT NULL,
  `id_kelurahan` int(11) NOT NULL,
  `kecamatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelurahan`
--

CREATE TABLE `kelurahan` (
  `id_kelurahan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kesehatan`
--

CREATE TABLE `kesehatan` (
  `id_kesehatan` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kepemilikan` enum('Pemerintah','Swasta') NOT NULL,
  `kategori` enum('PKM UTAMA','PKM PEMBANTU','RSU') NOT NULL,
  `no_telepon` varchar(13) NOT NULL,
  `fax` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `website` varchar(200) NOT NULL,
  `penanggung_jawab` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `lat` varchar(100) NOT NULL,
  `long` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `panik_button`
--

CREATE TABLE `panik_button` (
  `id_laporan` int(11) NOT NULL,
  `NIK` varchar(12) NOT NULL,
  `kategori` enum('Kejahatan','Kecelakaan','Kebakaran') NOT NULL,
  `lokasi_kejadian` int(11) NOT NULL,
  `waktu_kejadian` time NOT NULL,
  `bukti_kejadian` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `kantor_pengaduan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pariwisata`
--

CREATE TABLE `pariwisata` (
  `id_wisata` int(11) NOT NULL,
  `id_kategori_wisata` int(11) NOT NULL,
  `id_ulasan` int(11) NOT NULL,
  `nama_wisata` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `pengelola` varchar(100) NOT NULL,
  `no_telepon` varchar(13) NOT NULL,
  `jam_buka` time NOT NULL,
  `jam_tutup` time NOT NULL,
  `tarif_wisata` varchar(20) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` int(11) NOT NULL,
  `lat` varchar(50) NOT NULL,
  `long` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rule_admin`
--

CREATE TABLE `rule_admin` (
  `id_role` int(11) NOT NULL,
  `nama_role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sekolah`
--

CREATE TABLE `sekolah` (
  `id_sekolah` int(11) NOT NULL,
  `id_kecamatan` int(11) NOT NULL,
  `nama_sekolah` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `akredisai` enum('A','B','C','Belum Memiliki Akreditasi') NOT NULL,
  `NPSN` varchar(50) NOT NULL,
  `no_telepon` varchar(13) NOT NULL,
  `jenjang` enum('SD','SLB','SMP') NOT NULL,
  `status` enum('Swasta','Negeri') NOT NULL,
  `foto` varchar(30) NOT NULL,
  `lat` varchar(50) NOT NULL,
  `long` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ulasan_wisata`
--

CREATE TABLE `ulasan_wisata` (
  `id_ulasan` int(11) NOT NULL,
  `ulasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_admin`
--

CREATE TABLE `user_admin` (
  `NIP` varchar(30) NOT NULL,
  `id_role` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_tlp` varchar(13) NOT NULL,
  `email` varchar(30) NOT NULL,
  `foto` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_mobile`
--

CREATE TABLE `user_mobile` (
  `NIK` varchar(12) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki - Laki','Perempuan') NOT NULL,
  `no_telepon` varchar(13) NOT NULL,
  `password` varchar(50) NOT NULL,
  `foto_ktp` varchar(30) NOT NULL,
  `foto_selfie` varchar(30) NOT NULL,
  `selfie_ktp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cctv`
--
ALTER TABLE `cctv`
  ADD PRIMARY KEY (`id_cctv`);

--
-- Indeks untuk tabel `damkar`
--
ALTER TABLE `damkar`
  ADD PRIMARY KEY (`id_damkar`);

--
-- Indeks untuk tabel `kantor_polisi`
--
ALTER TABLE `kantor_polisi`
  ADD PRIMARY KEY (`id_kantor_polisi`);

--
-- Indeks untuk tabel `kategori_wisata`
--
ALTER TABLE `kategori_wisata`
  ADD PRIMARY KEY (`id_kategori_wisata`);

--
-- Indeks untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`),
  ADD UNIQUE KEY `id_kelurahan` (`id_kelurahan`);

--
-- Indeks untuk tabel `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD PRIMARY KEY (`id_kelurahan`);

--
-- Indeks untuk tabel `kesehatan`
--
ALTER TABLE `kesehatan`
  ADD PRIMARY KEY (`id_kesehatan`);

--
-- Indeks untuk tabel `panik_button`
--
ALTER TABLE `panik_button`
  ADD PRIMARY KEY (`id_laporan`),
  ADD UNIQUE KEY `NIK` (`NIK`);

--
-- Indeks untuk tabel `pariwisata`
--
ALTER TABLE `pariwisata`
  ADD PRIMARY KEY (`id_wisata`),
  ADD UNIQUE KEY `id_kategori_wisata` (`id_kategori_wisata`),
  ADD UNIQUE KEY `id_ulasan` (`id_ulasan`);

--
-- Indeks untuk tabel `rule_admin`
--
ALTER TABLE `rule_admin`
  ADD PRIMARY KEY (`id_role`);

--
-- Indeks untuk tabel `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`id_sekolah`),
  ADD UNIQUE KEY `id_kecamatan` (`id_kecamatan`);

--
-- Indeks untuk tabel `ulasan_wisata`
--
ALTER TABLE `ulasan_wisata`
  ADD PRIMARY KEY (`id_ulasan`);

--
-- Indeks untuk tabel `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`NIP`),
  ADD UNIQUE KEY `id_role` (`id_role`);

--
-- Indeks untuk tabel `user_mobile`
--
ALTER TABLE `user_mobile`
  ADD PRIMARY KEY (`NIK`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cctv`
--
ALTER TABLE `cctv`
  MODIFY `id_cctv` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `damkar`
--
ALTER TABLE `damkar`
  MODIFY `id_damkar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kantor_polisi`
--
ALTER TABLE `kantor_polisi`
  MODIFY `id_kantor_polisi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategori_wisata`
--
ALTER TABLE `kategori_wisata`
  MODIFY `id_kategori_wisata` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kelurahan`
--
ALTER TABLE `kelurahan`
  MODIFY `id_kelurahan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kesehatan`
--
ALTER TABLE `kesehatan`
  MODIFY `id_kesehatan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `panik_button`
--
ALTER TABLE `panik_button`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pariwisata`
--
ALTER TABLE `pariwisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `rule_admin`
--
ALTER TABLE `rule_admin`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id_sekolah` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ulasan_wisata`
--
ALTER TABLE `ulasan_wisata`
  MODIFY `id_ulasan` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD CONSTRAINT `kecamatan_ibfk_1` FOREIGN KEY (`id_kelurahan`) REFERENCES `kelurahan` (`id_kelurahan`);

--
-- Ketidakleluasaan untuk tabel `pariwisata`
--
ALTER TABLE `pariwisata`
  ADD CONSTRAINT `pariwisata_ibfk_1` FOREIGN KEY (`id_kategori_wisata`) REFERENCES `kategori_wisata` (`id_kategori_wisata`),
  ADD CONSTRAINT `pariwisata_ibfk_2` FOREIGN KEY (`id_ulasan`) REFERENCES `ulasan_wisata` (`id_ulasan`);

--
-- Ketidakleluasaan untuk tabel `sekolah`
--
ALTER TABLE `sekolah`
  ADD CONSTRAINT `sekolah_ibfk_1` FOREIGN KEY (`id_kecamatan`) REFERENCES `kecamatan` (`id_kecamatan`);

--
-- Ketidakleluasaan untuk tabel `user_admin`
--
ALTER TABLE `user_admin`
  ADD CONSTRAINT `user_admin_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `rule_admin` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
