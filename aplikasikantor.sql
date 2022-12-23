-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Des 2022 pada 09.45
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasikantor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_beban`
--

CREATE TABLE `tb_beban` (
  `id` int(11) NOT NULL,
  `id_gardu` int(11) NOT NULL,
  `nilai` varchar(30) NOT NULL,
  `waktu` enum('Siang','Malam') NOT NULL,
  `hasil` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_beban`
--

INSERT INTO `tb_beban` (`id`, `id_gardu`, `nilai`, `waktu`, `hasil`) VALUES
(5, 9, '40', 'Siang', 'TIDAK'),
(6, 9, '55', 'Malam', 'TIDAK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bebanreal`
--

CREATE TABLE `tb_bebanreal` (
  `id` int(11) NOT NULL,
  `id_gardu` int(11) NOT NULL,
  `nilai` double NOT NULL,
  `waktu` enum('Siang','Malam') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_bebanreal`
--

INSERT INTO `tb_bebanreal` (`id`, `id_gardu`, `nilai`, `waktu`) VALUES
(5, 9, 100.31, 'Siang'),
(6, 9, 136.95, 'Malam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gangguangardu`
--

CREATE TABLE `tb_gangguangardu` (
  `id` int(11) NOT NULL,
  `no_gardu` varchar(50) NOT NULL,
  `kapasitas` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `komponen` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `penyebab_gangguan` varchar(200) NOT NULL,
  `uraian` varchar(100) NOT NULL,
  `material_terpakai` varchar(200) NOT NULL,
  `vol` varchar(100) NOT NULL,
  `frekuensi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_gangguangardu`
--

INSERT INTO `tb_gangguangardu` (`id`, `no_gardu`, `kapasitas`, `tanggal`, `komponen`, `jenis`, `keterangan`, `penyebab_gangguan`, `uraian`, `material_terpakai`, `vol`, `frekuensi`) VALUES
(1, 'KT 3A', '400', '2020-10-17', 'Kabel', 'opstik', 'Short Circuit', 'kabel terbakar', 'Penggantian dengan kabel LVTC', 'Kabel LVTC 70 mm', '12 m', 1),
(2, 'KT-7', '400', '2020-12-06', 'FCO', '-', 'putus', '-', 'Ganti trafo', '-', '-', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gsp`
--

CREATE TABLE `tb_gsp` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `regu_perampalan` varchar(50) NOT NULL,
  `no_tiang/gardu` varchar(50) NOT NULL,
  `penyulang` varchar(50) NOT NULL,
  `jenis_pohon` varchar(100) NOT NULL,
  `pohon` int(11) NOT NULL,
  `gardu` int(11) NOT NULL,
  `layangan` int(11) NOT NULL,
  `akar` int(11) NOT NULL,
  `animal_guard` int(11) NOT NULL,
  `rantas` int(11) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_gsp`
--

INSERT INTO `tb_gsp` (`id`, `tanggal`, `regu_perampalan`, `no_tiang/gardu`, `penyulang`, `jenis_pohon`, `pohon`, `gardu`, `layangan`, `akar`, `animal_guard`, `rantas`, `lokasi`, `status`, `keterangan`) VALUES
(1, '2020-08-01', 'Regu C', '-', 'Detian', 'Pohon Ketapang', 1, 1, 2, 3, 1, 2, 'Dipanjaitan', 'Aman Bawah Jaringan', 'Pemangkasan Pohon'),
(2, '2020-08-05', 'Regu C', '-', 'Detian', 'Pohon Ketapang', 1, 0, 0, 0, 0, 0, 'Dipanjaitan', 'Aman Bawah Jaringan', 'Pemangkasan pohon');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hasilpengukuran`
--

CREATE TABLE `tb_hasilpengukuran` (
  `id` int(11) NOT NULL,
  `id_gardu` int(11) NOT NULL,
  `nol_omega` varchar(30) DEFAULT NULL,
  `body_omega` varchar(30) DEFAULT NULL,
  `arrester_omega` varchar(30) DEFAULT NULL,
  `nol_ma` varchar(30) DEFAULT NULL,
  `body_ma` varchar(30) DEFAULT NULL,
  `arrester_ma` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_hasilpengukuran`
--

INSERT INTO `tb_hasilpengukuran` (`id`, `id_gardu`, `nol_omega`, `body_omega`, `arrester_omega`, `nol_ma`, `body_ma`, `arrester_ma`) VALUES
(5, 9, '-', '-', '-', '-', '-', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_induk`
--

CREATE TABLE `tb_induk` (
  `id` int(11) NOT NULL,
  `id_gardu` int(11) NOT NULL,
  `r` varchar(30) NOT NULL,
  `s` varchar(30) NOT NULL,
  `t` varchar(30) NOT NULL,
  `n` varchar(30) NOT NULL,
  `tegphb` varchar(30) NOT NULL,
  `waktu` enum('Siang','Malam') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_induk`
--

INSERT INTO `tb_induk` (`id`, `id_gardu`, `r`, `s`, `t`, `n`, `tegphb`, `waktu`) VALUES
(12, 9, '133', '140', '163', '50', '231', 'Siang'),
(13, 9, '189', '187', '215', '100', '233', 'Malam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jeniskabel`
--

CREATE TABLE `tb_jeniskabel` (
  `id` int(11) NOT NULL,
  `id_gardu` int(11) DEFAULT NULL,
  `rute` varchar(20) NOT NULL,
  `jeniskabel` varchar(10) NOT NULL,
  `kha` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jrs`
--

CREATE TABLE `tb_jrs` (
  `id` int(11) NOT NULL,
  `id_gardu` int(11) NOT NULL,
  `r` int(11) DEFAULT NULL,
  `s` int(11) DEFAULT NULL,
  `t` int(11) DEFAULT NULL,
  `n` int(11) DEFAULT NULL,
  `tegphb` int(11) DEFAULT NULL,
  `waktu` enum('siang','malam') NOT NULL,
  `id_jurusan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jrs`
--

INSERT INTO `tb_jrs` (`id`, `id_gardu`, `r`, `s`, `t`, `n`, `tegphb`, `waktu`, `id_jurusan`) VALUES
(21, 9, 35, 37, 31, 11, 398, 'siang', 1),
(22, 9, 41, 60, 38, 26, 402, 'malam', 1),
(23, 9, 0, 8, 1, 8, 399, 'siang', 2),
(24, 9, 0, 11, 2, 9, 404, 'malam', 2),
(25, 9, 103, 94, 127, 35, 400, 'siang', 3),
(26, 9, 141, 117, 171, 71, 405, 'malam', 3),
(27, 9, 0, 0, 0, 0, 229, 'siang', 4),
(28, 9, 0, 0, 0, 0, 231, 'malam', 4),
(29, 9, 0, 0, 0, 0, 230, 'siang', 5),
(30, 9, 0, 0, 0, 0, 231, 'malam', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jurusan`
--

CREATE TABLE `tb_jurusan` (
  `id` int(11) NOT NULL,
  `jurusan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_jurusan`
--

INSERT INTO `tb_jurusan` (`id`, `jurusan`) VALUES
(1, 'JURUSAN/ROUTE A'),
(2, 'JURUSAN/ROUTE B'),
(3, 'JURUSAN/ROUTE C'),
(4, 'JURUSAN/ROUTE D'),
(5, '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_keterangan`
--

CREATE TABLE `tb_keterangan` (
  `id` int(11) NOT NULL,
  `id_gardu` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_keterangan`
--

INSERT INTO `tb_keterangan` (`id`, `id_gardu`, `gambar`, `keterangan`) VALUES
(1, 9, '', 'LOREM IPSUP'),
(2, 9, '', 'keterangan gardu kt-171 adalah text lorem');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kontruksijtm`
--

CREATE TABLE `tb_kontruksijtm` (
  `id` int(11) NOT NULL,
  `id_penyulang` int(11) NOT NULL,
  `nomor` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `keadaan` varchar(100) NOT NULL,
  `tinggi` varchar(100) NOT NULL,
  `kekuatan` varchar(100) NOT NULL,
  `penghalangpanjat` varchar(100) NOT NULL,
  `kepemilikan` varchar(100) NOT NULL,
  `panjanghantaran` varchar(100) NOT NULL,
  `jenispenghantar` varchar(100) NOT NULL,
  `jeniskawat` varchar(100) NOT NULL,
  `jenisikatanhantaran` varchar(100) NOT NULL,
  `jenistegangan` varchar(100) NOT NULL,
  `tiang` varchar(10) NOT NULL,
  `row` varchar(10) NOT NULL,
  `masalah` varchar(100) NOT NULL,
  `saran` varchar(100) NOT NULL,
  `utuh` varchar(10) NOT NULL,
  `atas` varchar(10) NOT NULL,
  `bawah` varchar(10) NOT NULL,
  `konstruksi` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kontruksijtm`
--

INSERT INTO `tb_kontruksijtm` (`id`, `id_penyulang`, `nomor`, `jenis`, `keadaan`, `tinggi`, `kekuatan`, `penghalangpanjat`, `kepemilikan`, `panjanghantaran`, `jenispenghantar`, `jeniskawat`, `jenisikatanhantaran`, `jenistegangan`, `tiang`, `row`, `masalah`, `saran`, `utuh`, `atas`, `bawah`, `konstruksi`, `alamat`) VALUES
(1, 1, '7L81', 'Besi Bulat', 'Baik', '11', '156', 'Tidak Ada', 'PLN', '50', 'SUTM', 'AAAC70', 'Baik', 'tm', '', '', 'kurang baik', 'kurang baik', '', '', '', 'TM.1', 'jl.sei jang'),
(2, 1, '12', 'beton', 'baik', '13', '300', 'penghalang panjat isi', 'pln', '50', 'sktm', 'xple 240', 'baik', 'tm', '', '', 'sfmksf', 'wnskdn', '', '', '', 'fkslf', 'jwjrwl');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_monitoring`
--

CREATE TABLE `tb_monitoring` (
  `id` int(11) NOT NULL,
  `no_wo` varchar(150) NOT NULL,
  `tgl_terbit` date NOT NULL,
  `uraian_pekerjaan` varchar(200) NOT NULL,
  `lokasi` varchar(200) NOT NULL,
  `vol_target` int(11) NOT NULL,
  `satuan_target` varchar(100) NOT NULL,
  `vol_realisasi` int(11) NOT NULL,
  `satuan_realisasi` varchar(100) NOT NULL,
  `tgl_realisasi` date NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `pencapaian` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_monitoring`
--

INSERT INTO `tb_monitoring` (`id`, `no_wo`, `tgl_terbit`, `uraian_pekerjaan`, `lokasi`, `vol_target`, `satuan_target`, `vol_realisasi`, `satuan_realisasi`, `tgl_realisasi`, `keterangan`, `status`, `pencapaian`) VALUES
(1, '23/WO-PREVENTIF/PLNATPI-RKT/IX/2019\r\n', '2020-09-20', 'PENGAMBILAN SUSPENSION PIN KE ULP BINTAN CENTER\r\n', 'JL. PANTAI IMPIAN\r\n', 18, 'BH', 24, 'BH', '2020-09-20', '-', 'SELESAI\r\n', 133),
(2, '23/WO-PREVENTIF/PLNATPI-RKT/IX/2019', '2019-09-20', 'PENGAMBILAN SUSPENSION PIN KE ULP BINTAN CENTER', 'JL. PANTAI IMPIAN', 18, 'BH', 24, '', '2019-09-20', 'PELAKSANA : TIM INSPEKSI', 'Selesai', 100);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nhfuse`
--

CREATE TABLE `tb_nhfuse` (
  `id` int(11) NOT NULL,
  `id_gardu` int(11) NOT NULL,
  `r` int(11) NOT NULL,
  `s` int(11) NOT NULL,
  `t` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_nhfuse`
--

INSERT INTO `tb_nhfuse` (`id`, `id_gardu`, `r`, `s`, `t`, `id_jurusan`) VALUES
(11, 9, 200, 200, 160, 1),
(12, 9, 160, 100, 160, 2),
(13, 9, 250, 200, 200, 3),
(14, 9, 0, 160, 100, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pelaksana`
--

CREATE TABLE `tb_pelaksana` (
  `id` int(11) NOT NULL,
  `no_gardu` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `petugas` varchar(20) NOT NULL,
  `penyulang` varchar(20) NOT NULL,
  `lokasi` text NOT NULL,
  `type` enum('BETON','KIOS','TIANG','C') NOT NULL,
  `kapasitas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pelaksana`
--

INSERT INTO `tb_pelaksana` (`id`, `no_gardu`, `tanggal`, `petugas`, `penyulang`, `lokasi`, `type`, `kapasitas`) VALUES
(9, 'KT-171', '2020-06-02', 'Deva dan Sabari', 'Kamboja', 'Jl. Sultan Mahmud              ', 'TIANG', '250 KVA'),
(13, 'KT-193', '2019-04-08', 'DEVA DAN SABARI', 'KAMBOJA', 'JL.KP.BULANG LAUT', 'TIANG', '100 KVA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pelaksanajtm`
--

CREATE TABLE `tb_pelaksanajtm` (
  `id` int(11) NOT NULL,
  `garduinduk` varchar(50) NOT NULL,
  `penyulang` varchar(50) NOT NULL,
  `petugas` varchar(50) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pelaksanajtm`
--

INSERT INTO `tb_pelaksanajtm` (`id`, `garduinduk`, `penyulang`, `petugas`, `tanggal`, `total`) VALUES
(1, 'AIR RAJA', 'VICTORIA', 'BENNY & HAZMIR', '02 AGUSTUS 2020', '2.45 Kms'),
(3, 'victoria', 'kamboja', 'bibi', '2020-10-20', '123'),
(4, 'dsdskd', 'ddkdm', 'ksks', '2020-09-27', '134'),
(5, 'Air Raja', 'Angel', 'BENNY S & HAZMI R', '2020-08-20', '0.80 Kms');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pemerhatikan`
--

CREATE TABLE `tb_pemerhatikan` (
  `id` int(11) NOT NULL,
  `id_gardu` int(11) NOT NULL,
  `nama_bidang` varchar(50) NOT NULL,
  `kondisi` varchar(50) NOT NULL,
  `saran` varchar(50) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `keterangan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pemerhatikan`
--

INSERT INTO `tb_pemerhatikan` (`id`, `id_gardu`, `nama_bidang`, `kondisi`, `saran`, `tanggal`, `keterangan`) VALUES
(46, 9, 'KONDISI UMUM', 'Kurang Baik', 'Rubah Kontruksi Co', '0000-00-00', 'Menghadap Ke Jalan'),
(47, 9, 'CAT PINTU BAGIAN LUAR', 'Boks Kotor, Instalasi Rapi', '-', '0000-00-00', '-'),
(48, 9, 'SPEKNYA SESUAI ATAU TIDAK', 'Tidak Sesuai', 'Disesuaikan', '0000-00-00', '-'),
(49, 9, 'FUNGSINYA', 'Rusak', 'Diganti', '0000-00-00', '-'),
(50, 9, 'BURUNG, SERANGGA DLL', 'Tidak Ada', '-', '0000-00-00', '-'),
(51, 9, 'TIDAK ADA, TIDAK TERBACA', 'Ada', '-', '0000-00-00', '-'),
(52, 9, 'KONDISI UMUM PERALATAN DALAM PANEL', 'Kotor', '-', '0000-00-00', '-'),
(53, 9, 'PACKING SEEL', 'Bersih', '-', '0000-00-00', '-'),
(54, 9, 'BAIK / BERKARAT', 'Mulus', '-', '0000-00-00', '-'),
(55, 9, 'TANDA KERUSAKAN', 'Tidak Ada', '-', '0000-00-00', '-'),
(56, 9, 'TRAFO TIDAK NORMAL', 'Normal', '-', '0000-00-00', '-'),
(57, 9, 'ADA / TIDAK ADA', 'Ada', '-', '0000-00-00', '-'),
(58, 9, 'SAMBUNGAN GROUNDING (TM/TR)', 'Ada', '-', '0000-00-00', '-'),
(59, 9, 'FISIK DAN FUNGSINYA', 'Kurang Baik', 'Ganti Polymer', '0000-00-00', 'Keramik'),
(60, 9, 'KONDISI FISIKNYA', 'Baik', '-', '0000-00-00', '-'),
(61, 9, 'KONDISI FISIKNYA', 'Baik', '-', '0000-00-00', '-'),
(62, 9, 'JENIS KONEKTORNYA', 'Paraller Group', '-', '0000-00-00', '-'),
(63, 9, 'FISIK DAN FUNGSINYA', 'Baik', '-', '0000-00-00', '-'),
(64, 9, 'ISOLASINYA', 'Baik', '-', '0000-00-00', '-'),
(65, 9, 'FISIK DAN FUNGSINYA', 'Baik', '-', '0000-00-00', '-'),
(66, 9, 'NH FUSE TERPASANG', '160,200,100,250 AMP', '-', '0000-00-00', '-'),
(67, 9, 'KONDISI FISIKNYA', 'Baik', '-', '0000-00-00', '-'),
(68, 9, 'JENIS KONEKTORNYA', 'Joint Bimetal', '-', '0000-00-00', '-'),
(69, 9, 'KONDISI FISIKNYA', 'Baik', '-', '0000-00-00', '-'),
(70, 9, 'KONDISI FISIKNYA', 'Baik', '-', '0000-00-00', '-'),
(71, 9, 'KONDISI FISIKNYA', 'Kurang Baik', 'Ganti Polymer', '0000-00-00', 'Keramik'),
(72, 9, 'SAMBUNGAN / HUBUNGAN KE TANAH', 'Ada', '-', '0000-00-00', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pemeriksa`
--

CREATE TABLE `tb_pemeriksa` (
  `id` int(11) NOT NULL,
  `id_gardu` int(11) NOT NULL,
  `bidangyangdiperiksa` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pemeriksa`
--

INSERT INTO `tb_pemeriksa` (`id`, `id_gardu`, `bidangyangdiperiksa`) VALUES
(51, 9, 'Kontruksi'),
(52, 9, 'PHB'),
(53, 9, 'AC FUSE'),
(54, 9, 'KUNCI'),
(55, 9, 'Gangguan Binatang'),
(56, 9, 'Tanda Peringatan'),
(57, 9, 'Kebersihan'),
(58, 9, 'Kebocoran Minyak'),
(59, 9, 'Kondisi Tangki'),
(60, 9, 'Loncatan Bunga Api'),
(61, 9, 'Bunyi Dengung'),
(62, 9, 'Pertanahan'),
(63, 9, 'FUSE TM'),
(64, 9, 'Jumper TM'),
(65, 9, 'Konektor TM'),
(66, 9, 'Saklar TR'),
(67, 9, 'Kabel TR'),
(68, 9, 'Fuse TR'),
(69, 9, 'Konektor TR'),
(70, 9, 'Bushing TM'),
(71, 9, 'Arester'),
(72, 13, 'Kontruksi'),
(73, 13, 'PHB'),
(74, 13, 'AC FUSE'),
(75, 13, 'KUNCI'),
(76, 13, 'Gangguan Binatang'),
(77, 13, 'Tanda Peringatan'),
(78, 13, 'Kebersihan'),
(79, 13, 'Kebocoran Minyak'),
(80, 13, 'Kondisi Tangki'),
(81, 13, 'Loncatan Bunga Api'),
(82, 13, 'Bunyi Dengung'),
(83, 13, 'Pertanahan'),
(84, 13, 'FUSE TM'),
(85, 13, 'Jumper TM'),
(86, 13, 'Konektor TM'),
(87, 13, 'Saklar TR'),
(88, 13, 'Kabel TR'),
(89, 13, 'Fuse TR'),
(90, 13, 'Konektor TR'),
(91, 13, 'Bushing TM'),
(92, 13, 'Bushing TR'),
(93, 13, 'Arester');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penyeimbang`
--

CREATE TABLE `tb_penyeimbang` (
  `id` int(11) NOT NULL,
  `id_gardu` int(11) NOT NULL,
  `beban_puncak` varchar(20) NOT NULL,
  `max` int(11) NOT NULL,
  `min` int(11) NOT NULL,
  `selisih` varchar(11) NOT NULL,
  `hasil` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_penyeimbang`
--

INSERT INTO `tb_penyeimbang` (`id`, `id_gardu`, `beban_puncak`, `max`, `min`, `selisih`, `hasil`) VALUES
(5, 9, 'MALAM', 215, 187, '13', 'SEIMBANG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pp`
--

CREATE TABLE `tb_pp` (
  `id` int(11) NOT NULL,
  `tgl_pekerjaan` date NOT NULL,
  `no_tiang/gardu` varchar(100) NOT NULL,
  `penyulang` varchar(100) NOT NULL,
  `kontruksi` varchar(100) NOT NULL,
  `jumlah` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `uraian_pekerjaan` varchar(100) NOT NULL,
  `sebelum` int(11) NOT NULL,
  `pekerjaan` int(11) NOT NULL,
  `sesudah` int(11) NOT NULL,
  `petugas_pelaksana` varchar(100) NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pp`
--

INSERT INTO `tb_pp` (`id`, `tgl_pekerjaan`, `no_tiang/gardu`, `penyulang`, `kontruksi`, `jumlah`, `lokasi`, `uraian_pekerjaan`, `sebelum`, `pekerjaan`, `sesudah`, `petugas_pelaksana`, `keterangan`) VALUES
(1, '2020-08-05', 'KT-111', 'Victoria\r\n', '-', '3 buah', 'Jl. Arif Rahman Hakim\r\n', 'Penggantian Arrester\r\n', 0, 0, 0, 'Pemeliharaan Teknik\r\n', '06/WO-HAR/PLNATPI-UKT/VIII/2020\r\n'),
(2, '2020-08-05', 'KT- 095', 'Victoria', '-', '3 buah', 'Jl. Haji Ungar', 'Penggantian Cut Out', 0, 0, 0, 'Pemeliharaan Teknik', '06/WO-HAR/PLNATPI-UKT/VIII/2020');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_se`
--

CREATE TABLE `tb_se` (
  `id` int(11) NOT NULL,
  `nama_gardu` varchar(100) NOT NULL,
  `lokasi_gardu` varchar(200) NOT NULL,
  `ulp` varchar(100) NOT NULL,
  `up3` varchar(100) NOT NULL,
  `waktu_pelaksana` date NOT NULL,
  `kva` int(11) NOT NULL,
  `tipe_seal` varchar(100) NOT NULL,
  `kelas` int(11) NOT NULL,
  `kategori` int(11) NOT NULL,
  `inspeksi_fisik` varchar(50) NOT NULL,
  `karakteristik_tier1` varchar(100) NOT NULL,
  `health_tier1` varchar(50) NOT NULL,
  `karakteristik_tier2` varchar(50) NOT NULL,
  `health_tier2` varchar(100) NOT NULL,
  `tier3` varchar(100) NOT NULL,
  `health_index` varchar(100) NOT NULL,
  `catatan_perbaikan` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_se`
--

INSERT INTO `tb_se` (`id`, `nama_gardu`, `lokasi_gardu`, `ulp`, `up3`, `waktu_pelaksana`, `kva`, `tipe_seal`, `kelas`, `kategori`, `inspeksi_fisik`, `karakteristik_tier1`, `health_tier1`, `karakteristik_tier2`, `health_tier2`, `tier3`, `health_index`, `catatan_perbaikan`) VALUES
(1, 'KT-217', 'JL.BASUKI RAHMAT (PELNUS)\r\n', 'Tanjungpinang Kota\r\n', 'Tanjungpinang\r\n', '2020-09-07', 160, 'Hermetik\r\n', 2, 4, 'KURANG', 'Visual Inspection dan Load Reading and Profilling\r\n', 'KURANG', '-', '-', '-', '-', 'KUNCI RUSAK, CO KERAMIK, KABEL ALTRAK TIDAK MENGGUNAKAN SCHOUN, LV BOARD KEROPOS, BUSING TM TIDAK MENGGUNAKAN PLAT L, NH FUSE TIDAK SESUAI,OUT GOING RUTE A LANGSUNG KE AMR\r\n'),
(2, 'KT-145', 'JL.BUKIT BARISAN', 'Tanjungpinang Kota', 'Tanjungpinang', '2020-09-05', 250, 'Hermetik', 2, 4, 'KURANG', 'kdakdmakdm', 'eqraraf', 'dadadaff', 'fafaaaaf', 'kkfns', 'fsfs', 'NH FUSE TIDAK SESUAI, KUNCI RUSAK, KABEL ALTRAK TIDAK MENGGUNAKAN SCHOUN, LV BOARD KEROPOS, BUSING TM TIDAK MENGGUNAKAN PLAT L, GRONDING BODY TRAFO MASUK DALAM PIPA, GRONDING NETRAL PUTUS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_trafo`
--

CREATE TABLE `tb_trafo` (
  `id` int(11) NOT NULL,
  `id_gardu` int(11) NOT NULL,
  `up3` varchar(50) NOT NULL,
  `ulp` varchar(50) NOT NULL,
  `merk` varchar(30) NOT NULL,
  `tahunpembuatan` year(4) NOT NULL,
  `beratminyak` varchar(30) NOT NULL,
  `berattotal` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_trafo`
--

INSERT INTO `tb_trafo` (`id`, `id_gardu`, `up3`, `ulp`, `merk`, `tahunpembuatan`, `beratminyak`, `berattotal`) VALUES
(7, 9, 'TANJUNGPINANG', 'TANJUNGPINANG KOTA', 'UNINDO', 2013, '250 kg', '1085'),
(10, 13, 'Tanjungpinang', 'Tanjungpinang Kota', 'UNINDO', 1993, '140 KG', '605 KG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_wo`
--

CREATE TABLE `tb_wo` (
  `id` int(11) NOT NULL,
  `nomor` varchar(100) NOT NULL,
  `perihal` varchar(100) NOT NULL,
  `tugas` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `target` varchar(100) NOT NULL,
  `realisasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_wo`
--

INSERT INTO `tb_wo` (`id`, `nomor`, `perihal`, `tugas`, `pekerjaan`, `lokasi`, `target`, `realisasi`) VALUES
(1, '/WO-PREVENTIF/PLANTPI-RKT/ / 2019', 'WORK ORDER', 'PT. HALEYORA POWER AREA TANJUNG PINANG								\r\n								\r\n								\r\n								\r\n', 'TES', 'JL.PEMUDA', 'II', 'II');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(4, 'Zayus Rifan', 'zayusrifan05@gmail.com', 'default.jpg', '$2y$10$ykqR6CjijhnxMiOKbDh4n./5oJven3Kwzn.CPIO4fyfWI/In3EGaO', 2, 1, 1600498405),
(6, 'Rifan', 'rifanmidai99@gmail.com', 'avatar2.png', '$2y$10$wgv6GwA16NHCELMxd4Egn.UFdCRN.zMyrJBPY/WiE2OEoCLmdm0LS', 1, 1, 1600507968),
(7, 'Risna', 'risna.rj27@gmail.com', 'avatar2.png', '$2y$10$93Gqel47VXouyFsHlIK9weXOqNdr4ui7PnH10vsDbGmgrhf/12tiW', 1, 1, 1602327258),
(8, 'septyasari', 'septyasari92@gmail.com', 'default.jpg', '$2y$10$Kr8NCgC29MyhhpvdC9Q63.UcZrdg0edC4L1BTDa0l2dyotkxsWtKq', 2, 1, 1613559185);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 3),
(5, 1, 6),
(6, 2, 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Menu Sistem'),
(2, 'Menu'),
(3, 'Menu Manajemen'),
(6, 'User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Beranda', 'dashboard', 'mdi mdi-speedometer', 1),
(2, 2, 'Gardu', 'gardu', 'mdi mdi-panorama-fisheye', 1),
(4, 3, 'Menu', 'menu', 'mdi mdi-folder ', 1),
(7, 2, 'JTM', 'jtm', 'mdi mdi-panorama-fisheye', 1),
(8, 2, 'WO', 'wo', 'mdi mdi-panorama-fisheye', 1),
(9, 2, 'Laporan Distribusi', 'lapdis', 'mdi mdi-panorama-fisheye', 1),
(11, 3, 'Submenu', 'menu/submenu', 'mdi mdi-table-large', 1),
(12, 3, 'Role Akses', 'menu/role', 'mdi mdi-account-plus', 1),
(13, 3, 'User Akses', 'menu/user_akses', 'mdi mdi-account-settings\r\n', 1),
(14, 6, 'Profil Saya', 'user', 'mdi mdi-account-circle', 1),
(15, 6, 'Edit Profil', 'user/edit', '	\r\nmdi mdi-tooltip-edit', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu_sub`
--

CREATE TABLE `user_sub_menu_sub` (
  `Id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `submenu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_sub_menu_sub`
--

INSERT INTO `user_sub_menu_sub` (`Id`, `menu_id`, `submenu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(3, 2, 7, 'Inspeksi', 'jtm/inspeksi', 'mdi mdi-panorama-fisheye', 1),
(5, 2, 2, 'Gangguan', 'gardu/gangguan', 'mdi mdi-panorama-fisheye', 1),
(6, 2, 2, 'Inspeksi', 'gardu/inspeksi', 'mdi mdi-panorama-fisheye', 1),
(7, 2, 8, 'Monitoring', 'wo/monitoring', 'mdi mdi-panorama-fisheye', 1),
(8, 2, 8, 'Input WO', 'wo/inputwo', 'mdi mdi-panorama-fisheye', 1),
(9, 2, 9, 'Pekerjaan Pemeliharaan', 'lapdis/pp\r\n', 'mdi mdi-panorama-fisheye', 1),
(11, 2, 9, 'GSP', 'lapdis/gsp', 'mdi mdi-panorama-fisheye', 1),
(12, 2, 9, 'SE 017', 'lapdis/se', 'mdi mdi-panorama-fisheye', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_beban`
--
ALTER TABLE `tb_beban`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_gardu` (`id_gardu`);

--
-- Indeks untuk tabel `tb_bebanreal`
--
ALTER TABLE `tb_bebanreal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_gardu` (`id_gardu`);

--
-- Indeks untuk tabel `tb_gangguangardu`
--
ALTER TABLE `tb_gangguangardu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_gsp`
--
ALTER TABLE `tb_gsp`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_hasilpengukuran`
--
ALTER TABLE `tb_hasilpengukuran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_gardu` (`id_gardu`);

--
-- Indeks untuk tabel `tb_induk`
--
ALTER TABLE `tb_induk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_gardu` (`id_gardu`);

--
-- Indeks untuk tabel `tb_jeniskabel`
--
ALTER TABLE `tb_jeniskabel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_gardu` (`id_gardu`);

--
-- Indeks untuk tabel `tb_jrs`
--
ALTER TABLE `tb_jrs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_jrs_ibfk_1` (`id_jurusan`),
  ADD KEY `id_gardu` (`id_gardu`);

--
-- Indeks untuk tabel `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_keterangan`
--
ALTER TABLE `tb_keterangan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_gardu` (`id_gardu`);

--
-- Indeks untuk tabel `tb_kontruksijtm`
--
ALTER TABLE `tb_kontruksijtm`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_penyulang` (`id_penyulang`);

--
-- Indeks untuk tabel `tb_monitoring`
--
ALTER TABLE `tb_monitoring`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_nhfuse`
--
ALTER TABLE `tb_nhfuse`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_jurusan` (`id_jurusan`),
  ADD KEY `id_gardu` (`id_gardu`);

--
-- Indeks untuk tabel `tb_pelaksana`
--
ALTER TABLE `tb_pelaksana`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pelaksanajtm`
--
ALTER TABLE `tb_pelaksanajtm`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pemerhatikan`
--
ALTER TABLE `tb_pemerhatikan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_gardu` (`id_gardu`);

--
-- Indeks untuk tabel `tb_pemeriksa`
--
ALTER TABLE `tb_pemeriksa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_gardu` (`id_gardu`);

--
-- Indeks untuk tabel `tb_penyeimbang`
--
ALTER TABLE `tb_penyeimbang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_gardu` (`id_gardu`);

--
-- Indeks untuk tabel `tb_pp`
--
ALTER TABLE `tb_pp`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_se`
--
ALTER TABLE `tb_se`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_trafo`
--
ALTER TABLE `tb_trafo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_gardu` (`id_gardu`);

--
-- Indeks untuk tabel `tb_wo`
--
ALTER TABLE `tb_wo`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu_sub`
--
ALTER TABLE `user_sub_menu_sub`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_beban`
--
ALTER TABLE `tb_beban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_bebanreal`
--
ALTER TABLE `tb_bebanreal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_gangguangardu`
--
ALTER TABLE `tb_gangguangardu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_gsp`
--
ALTER TABLE `tb_gsp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_hasilpengukuran`
--
ALTER TABLE `tb_hasilpengukuran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_induk`
--
ALTER TABLE `tb_induk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tb_jrs`
--
ALTER TABLE `tb_jrs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_keterangan`
--
ALTER TABLE `tb_keterangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_kontruksijtm`
--
ALTER TABLE `tb_kontruksijtm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_monitoring`
--
ALTER TABLE `tb_monitoring`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_nhfuse`
--
ALTER TABLE `tb_nhfuse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tb_pelaksana`
--
ALTER TABLE `tb_pelaksana`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tb_pelaksanajtm`
--
ALTER TABLE `tb_pelaksanajtm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_pemerhatikan`
--
ALTER TABLE `tb_pemerhatikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT untuk tabel `tb_pemeriksa`
--
ALTER TABLE `tb_pemeriksa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT untuk tabel `tb_penyeimbang`
--
ALTER TABLE `tb_penyeimbang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_pp`
--
ALTER TABLE `tb_pp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_se`
--
ALTER TABLE `tb_se`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_trafo`
--
ALTER TABLE `tb_trafo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_wo`
--
ALTER TABLE `tb_wo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu_sub`
--
ALTER TABLE `user_sub_menu_sub`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_beban`
--
ALTER TABLE `tb_beban`
  ADD CONSTRAINT `tb_beban_ibfk_1` FOREIGN KEY (`id_gardu`) REFERENCES `tb_pelaksana` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_bebanreal`
--
ALTER TABLE `tb_bebanreal`
  ADD CONSTRAINT `tb_bebanreal_ibfk_1` FOREIGN KEY (`id_gardu`) REFERENCES `tb_pelaksana` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_hasilpengukuran`
--
ALTER TABLE `tb_hasilpengukuran`
  ADD CONSTRAINT `tb_hasilpengukuran_ibfk_1` FOREIGN KEY (`id_gardu`) REFERENCES `tb_pelaksana` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_induk`
--
ALTER TABLE `tb_induk`
  ADD CONSTRAINT `tb_induk_ibfk_1` FOREIGN KEY (`id_gardu`) REFERENCES `tb_pelaksana` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_jeniskabel`
--
ALTER TABLE `tb_jeniskabel`
  ADD CONSTRAINT `tb_jeniskabel_ibfk_1` FOREIGN KEY (`id_gardu`) REFERENCES `tb_pelaksana` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_jrs`
--
ALTER TABLE `tb_jrs`
  ADD CONSTRAINT `tb_jrs_ibfk_1` FOREIGN KEY (`id_jurusan`) REFERENCES `tb_jurusan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_jrs_ibfk_2` FOREIGN KEY (`id_gardu`) REFERENCES `tb_pelaksana` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_keterangan`
--
ALTER TABLE `tb_keterangan`
  ADD CONSTRAINT `tb_keterangan_ibfk_1` FOREIGN KEY (`id_gardu`) REFERENCES `tb_pelaksana` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_nhfuse`
--
ALTER TABLE `tb_nhfuse`
  ADD CONSTRAINT `tb_nhfuse_ibfk_1` FOREIGN KEY (`id_jurusan`) REFERENCES `tb_jurusan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_nhfuse_ibfk_2` FOREIGN KEY (`id_gardu`) REFERENCES `tb_pelaksana` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_pemerhatikan`
--
ALTER TABLE `tb_pemerhatikan`
  ADD CONSTRAINT `tb_pemerhatikan_ibfk_1` FOREIGN KEY (`id_gardu`) REFERENCES `tb_pelaksana` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_pemeriksa`
--
ALTER TABLE `tb_pemeriksa`
  ADD CONSTRAINT `tb_pemeriksa_ibfk_1` FOREIGN KEY (`id_gardu`) REFERENCES `tb_pelaksana` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_penyeimbang`
--
ALTER TABLE `tb_penyeimbang`
  ADD CONSTRAINT `tb_penyeimbang_ibfk_1` FOREIGN KEY (`id_gardu`) REFERENCES `tb_pelaksana` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_trafo`
--
ALTER TABLE `tb_trafo`
  ADD CONSTRAINT `tb_trafo_ibfk_1` FOREIGN KEY (`id_gardu`) REFERENCES `tb_pelaksana` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
