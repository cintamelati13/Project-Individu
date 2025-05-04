-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Apr 2025 pada 08.47
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpuskesmas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelurahan`
--

CREATE TABLE `kelurahan` (
  `id` int(11) NOT NULL,
  `nama_kelurahan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kelurahan`
--

INSERT INTO `kelurahan` (`id`, `nama_kelurahan`) VALUES
(1, 'PasirKuda'),
(2, 'Cibinong'),
(3, 'Mawar'),
(4, 'Srengseng Sawah'),
(5, 'Rasabou'),
(6, 'Mawar'),
(7, 'Naru'),
(8, 'Rai Oi'),
(9, 'Sangia'),
(10, 'Bugis'),
(11, 'Soro'),
(12, 'Naru Barat'),
(13, 'Kaleo'),
(14, 'Sila'),
(15, 'Parangina'),
(16, 'Oi Maci');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(15) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `thn_masuk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `thn_masuk`) VALUES
('0010274220', 'Cinta Melati', 2024),
('0010274221', 'Al Hijir', 2024),
('0010274222', 'Mawardin', 2024),
('0034424550', 'Muhammad Rizal', 2023),
('0034424551', 'Nur Indah', 2023),
('0034424554', 'Dania Islamia', 2024);

-- --------------------------------------------------------

--
-- Struktur dari tabel `paramedik`
--

CREATE TABLE `paramedik` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `gender` char(1) DEFAULT NULL,
  `tmp_lahir` varchar(30) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `kategori` enum('Dokter','Perawat','Bidan') DEFAULT NULL,
  `telpon` varchar(20) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `unitkerja_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `paramedik`
--

INSERT INTO `paramedik` (`id`, `nama`, `gender`, `tmp_lahir`, `tgl_lahir`, `kategori`, `telpon`, `alamat`, `unitkerja_id`) VALUES
(1, 'Goday', 'L', 'Bogor', '2005-04-21', 'Dokter', '081337092159', 'jalan bawah jembatan', 1),
(2, 'Yoga', 'L', 'Bogor', '2006-05-02', 'Perawat', '089937363123', 'Jalan lapangan semangka', 2),
(3, 'Cinta Melati', 'P', 'Naru', '2006-06-13', 'Dokter', '081435344543', 'Gang Arus', 3),
(4, 'Yeni Kurniati', 'P', 'Rasabou', '2004-12-02', 'Bidan', '082556789100', 'Gang Amaliyah', 4),
(5, 'Putri Ramadhani', 'P', 'Parangina', '2005-08-14', 'Bidan', '087009998877', 'Jl.Soekarno Hatta', 5),
(6, 'Bima Ramadhan', 'L', 'Guda', '2006-09-30', 'Dokter', '087456345123', 'Gang H.Shibi', 6),
(7, 'M.Alwan Kahfie', 'L', 'Depok', '2015-01-21', 'Dokter', '081332080420', 'Jl.Lapangan Semangka', 7),
(8, 'Suci Yati', 'P', 'Bogor', '0000-00-00', 'Perawat', '087123456345', 'Jl.Jingga', 8),
(9, 'Tati Haryati', 'P', 'Naru', '1997-09-24', 'Bidan', '087564766689', 'Jl. Mawur', 9),
(10, 'Birul Walidain', 'L', 'Rasabou', '2006-08-05', 'Perawat', '081231234456', 'Jl. Cisari', 10),
(11, 'Rosma Wati', 'P', 'Cisarua', '1993-08-09', 'Bidan', '086543554644', 'Jl. Anggrek', 7),
(12, 'Muhammad Yodi', 'L', 'Sangia', '2005-03-30', 'Perawat', '081231234434', 'Jl. Lapangan Putih', 2),
(13, 'Tri Nurjulyanti', 'P', 'Sangia', '2006-09-13', 'Perawat', '082312345564', 'Jl. Putih', 2),
(14, 'Yadi Imansyah', 'L', 'Ambalawi', '2007-09-16', 'Bidan', '021343443664', 'Jl. Anggrek', 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `id` int(11) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `tmp_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `kelurahan_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id`, `kode`, `nama`, `tmp_lahir`, `tgl_lahir`, `gender`, `email`, `alamat`, `kelurahan_id`) VALUES
(1, 'P988', 'Surya', 'Bogor', '2005-09-12', 'L', 'cntmlt130gmail.com', 'Jalan dimana aja', 1),
(2, 'P989', 'Rina', 'Jakarta', '1998-09-19', 'P', 'rina21@gmail.com', 'Jl.Melati', 2),
(3, 'P990', 'Fira', 'Depok', '2002-07-11', 'P', 'Fira5676@gmail.com', 'Jl. Merdeka', 10),
(4, 'P991', 'Dedi', 'Bekasi', '0000-00-00', 'L', 'Dedi89@gmail.com', 'Jl.  Perjuangan', 8),
(5, 'P992', 'Siti', 'Surabaya', '2002-05-18', 'P', 'Siti120@gmail.com', 'Jl. Kenanga', 7),
(6, 'P993', 'Aris', 'Medan', '2006-09-16', 'L', 'Aris231@gmail.com', 'Jl. Cempaka', 9),
(7, 'P994', 'Maya', 'Padang', '1997-08-12', 'P', 'Maya30@gmail.com', 'Gang Kecil No.5', 3),
(8, 'P995', 'Yoga', 'Tangerang', '1997-09-12', 'L', 'Yoga34@gmail.com', 'Jl.Melati', 4),
(9, 'P996', 'Tiara', 'Malang', '2007-07-15', 'P', 'Tiara10@gmail.com', 'Jl.Raya', 5),
(10, 'P997', 'Surya', 'Bekasi', '1999-10-07', 'L', 'Surya32@gmail.com', 'Jl.Lapangan Semangka', 6),
(11, 'P998', 'Nurmah', 'Bima', '0000-00-00', 'P', 'Nurmah111@gmail.com', 'Komplek Damai', 11),
(12, 'P999', 'Maskur', 'Medan', '2002-07-21', 'L', 'Maskur34@gmail.com', 'Gg Arus Jingga', 12),
(13, 'P100', 'Mira', 'Surabaya', '2001-08-09', 'P', 'Mira@gmail.com', 'Jl.Mawar', 13),
(14, 'P101', 'Sipa', 'Medan', '1993-09-11', 'P', 'Sipa3@gmail.com', 'Jl. Mawur', 14),
(15, 'P102', 'Qila', 'Bogor', '2003-04-16', 'P', 'Aqila43@gmail.com', 'Gang Shibi', 15),
(16, 'P103', 'Rosma', 'Cisarua', '1997-09-06', 'P', 'Rosma5@gmail.com', 'Jl.Anggrek', 16),
(17, 'P104', 'Rama', 'Flores', '2007-11-12', 'L', 'Rama5@gmail.com', 'Perumahan Sira', 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `periksa`
--

CREATE TABLE `periksa` (
  `id` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `berat` double DEFAULT NULL,
  `tinggi` double DEFAULT NULL,
  `tensi` varchar(20) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `pasien_id` int(11) DEFAULT NULL,
  `dokter_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `periksa`
--

INSERT INTO `periksa` (`id`, `tanggal`, `berat`, `tinggi`, `tensi`, `keterangan`, `pasien_id`, `dokter_id`) VALUES
(1, '0000-00-00', 50, 175, '120 / 80 mmHg', 'Normal', 1, 2),
(2, '0000-00-00', 55, 156, '130 / 85 mmHg', 'Sedikit Tinggi', 2, 11),
(3, '2025-03-12', 64.5, 177, '140 / 90 mmHg	', 'Hipertensi tahap 1', 3, 3),
(4, '2025-01-11', 60, 180, '110 / 70 mmHg', 'Tekanan darah bagus', 4, 8),
(5, '2025-04-15', 52, 182, '135 / 85 mmHg', 'Hipertensi ringan', 5, 7),
(6, '2025-01-12', 43, 150, '90 / 60 mmHg	', 'Tensi rendah', 6, 12),
(7, '2025-04-18', 64.8, 177, '125 / 78 mmHg', 'Normal sehat', 7, 1),
(8, '2025-01-19', 66, 180, '145 / 95 mmHg', 'Hipertensi tahap 2', 8, 4),
(9, '2025-04-16', 56, 155, '100 / 65 mmHg', 'Cenderung Rendah', 9, 5),
(10, '2025-03-17', 45, 153, '115 / 75 mmHg	', 'Normal', 10, 10),
(11, '2025-03-16', 58, 178, '120 / 80 mmHg	', 'Normal', 11, 6),
(12, '2025-01-17', 60, 164, '95 / 65 mmHg', 'Rendah tapi stabil', 12, 9),
(13, '2025-04-11', 58, 175, '110 / 70 mmHg', 'Normal sehat', 13, 13),
(14, '2025-03-19', 68, 179, '135 / 90 mmHg', 'Tekanan naik', 14, 14),
(15, '2025-02-11', 64.8, 177, '140 / 85 mmHg', 'Hipertensi ringan', 15, 1),
(16, '2025-01-17', 55.2, 177, '145 / 100 mmHg', 'Hipertensi tahap 2', 16, 3),
(17, '2025-04-02', 51, 159, '105 / 68 mmHg', 'Cenderung rendah', 17, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `prodi`
--

CREATE TABLE `prodi` (
  `kode` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `prodi`
--

INSERT INTO `prodi` (`kode`, `nama`) VALUES
('BD', 'Bisnis Digital'),
('SI', 'Sistem Informasi'),
('TI', 'Teknik Informatika');

-- --------------------------------------------------------

--
-- Struktur dari tabel `unit_kerja`
--

CREATE TABLE `unit_kerja` (
  `id` int(11) NOT NULL,
  `kode_unit` varchar(50) NOT NULL,
  `nama_unit` varchar(100) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `unit_kerja`
--

INSERT INTO `unit_kerja` (`id`, `kode_unit`, `nama_unit`, `keterangan`) VALUES
(1, 'UK002', 'UPU', 'Unit Poli Umum'),
(2, 'ULB', 'Unit Laboraturium', 'Unit Laboraturium'),
(3, 'UK003', 'UGD', 'Unit Gawat Darurat'),
(4, 'UK004', 'Farmasi', 'Apotek Rumah Sakit'),
(5, 'UK005', 'Radiologi', 'Pemeriksaan Rontgen'),
(6, 'UK006', 'Rawat Inap', 'Unit Rawat Inap'),
(7, 'UK007', 'Rekan Medis', 'Pengelolaan RM'),
(8, 'UK008', 'Gizi', 'Gizi dan Nutrisi'),
(9, 'UK009', 'Kebidanan', 'Pelayanan Ibu & Anak'),
(10, 'UK010', 'Manajemen RS', 'Administrasi RS');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `paramedik`
--
ALTER TABLE `paramedik`
  ADD PRIMARY KEY (`id`),
  ADD KEY `unitkerja_id` (`unitkerja_id`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kelurahan_id` (`kelurahan_id`);

--
-- Indeks untuk tabel `periksa`
--
ALTER TABLE `periksa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pasien_id` (`pasien_id`),
  ADD KEY `dokter_id` (`dokter_id`);

--
-- Indeks untuk tabel `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`kode`);

--
-- Indeks untuk tabel `unit_kerja`
--
ALTER TABLE `unit_kerja`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kelurahan`
--
ALTER TABLE `kelurahan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `paramedik`
--
ALTER TABLE `paramedik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `periksa`
--
ALTER TABLE `periksa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `unit_kerja`
--
ALTER TABLE `unit_kerja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `paramedik`
--
ALTER TABLE `paramedik`
  ADD CONSTRAINT `paramedik_ibfk_1` FOREIGN KEY (`unitkerja_id`) REFERENCES `unit_kerja` (`id`);

--
-- Ketidakleluasaan untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD CONSTRAINT `pasien_ibfk_1` FOREIGN KEY (`kelurahan_id`) REFERENCES `kelurahan` (`id`);

--
-- Ketidakleluasaan untuk tabel `periksa`
--
ALTER TABLE `periksa`
  ADD CONSTRAINT `periksa_ibfk_1` FOREIGN KEY (`pasien_id`) REFERENCES `pasien` (`id`),
  ADD CONSTRAINT `periksa_ibfk_2` FOREIGN KEY (`dokter_id`) REFERENCES `paramedik` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
