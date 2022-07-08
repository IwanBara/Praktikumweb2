-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2022 at 03:07 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbeventorganizer`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE `daftar` (
  `id` int(11) NOT NULL,
  `tanggal_daftar` date DEFAULT NULL,
  `alasan` varchar(200) DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  `kegiatan_id` int(11) NOT NULL,
  `kategori_peserta_id` int(11) NOT NULL,
  `nosertifikat` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `daftar`
--

INSERT INTO `daftar` (`id`, `tanggal_daftar`, `alasan`, `users_id`, `kegiatan_id`, `kategori_peserta_id`, `nosertifikat`) VALUES
(2, '2022-08-06', 'menjadi juara', 1, 12, 2, '124'),
(3, '2022-07-08', 'menjadi juara', 2, 16, 5, '12323a1'),
(4, '2022-07-08', 'Ingin membanggakan orangtua', 2, 16, 5, '12323a1');

-- --------------------------------------------------------

--
-- Table structure for table `jeniskegiatan`
--

CREATE TABLE `jeniskegiatan` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jeniskegiatan`
--

INSERT INTO `jeniskegiatan` (`id`, `nama`, `deskripsi`) VALUES
(1, 'Seminar', 'Kami bergerak di bidang Jasa sebagai solusi Virtual Event yang memberikan layanan Virtual Event Organizer, Online Event Management, Jasa Webinar Zoom, Sewa Zoom Meeting, Sewa Zoom Webinar, dan eSertifikat Generator untuk berbagai events seperti Meeting Online, Seminar Online, , Wedding, Webinar, Wisuda, Kuliah, Sekolah, Proyek, Reuni, Lelang Online, Diskusi Publik, Online Streaming, Pengajian, Peluncuran Produk, Kampanye Online, dll.dengan jasa kami event anda dapat disaksikan oleh semua orang melalui akun Youtube perusahaan, Instagram, Facebook atau Zoom Meeting yang dapat diakses dari komputer maupun Smartphone seperti, Android dan iPhone. Dengan harga murah dan kualitas terbaik.'),
(2, 'Workshop', 'workshop adalah periode diskusi atau kerja praktik tentang topik tertentu di mana sekelompok orang berbagi pengetahuan atau pengalaman mereka.  Workshop mirip dengan seminar namun umumnya jauh lebih kecil daripada konferensi. Workshop biasanya dapat menjadi elemen dari struktur konferensi dan cenderung interaktif, mendidik, dan terdapat percakapan di dalamnya. Workshop ini bermanfaat untuk memberikan kesempatan kepada sekelompok orang untuk mendalami suatu ilmu atau pelajaran tertentu.'),
(3, 'Bazaar', ' Pameran dan Bazaar di pusat keramaian menjadi ajang promosi yang efektif.  Pasalnya, event pameran dan bazaar selalu ramai dipadati pengunjung, baik yang sekadar melihat-lihat atau memang ingin mencari suatu produk.  Apalagi di akhir pekan seperti hari Sabtu dan Minggu, biasanya pengunjung semakin ramai berjejalan.'),
(4, 'Pelatihan', 'Sukses mengelola sebuah perhelatan acara (event) diperlukan persiapan yang matang dan manajemen yang efektif dalam mengatur  acara,menggerakkan orang dan  sumberdaya, administrasi dan lain lain.Training ini akan membahas bagaimana cara sukses mengelola sebuah event dalam perusahaan mulai dari persiapan, pelaksanaan dan evaluasinya. Berbagai contoh projek event akan dibahas disertai dengan tips sukses, berbagai hambatan yang ditemui dan cara mengatasinya.\n\n \n\nTUJUAN\n\nPeserta memahami dan dapat menerapkan praktek manajerial  bagaimana mengelola event yang sukses.\n\n\nMATERI\n\nIntroduction to event organizer management\nMerancang sebuah event\nTeknik Pengelolaan Event\nPost event and evaluation\nStudi kasus dan praktek'),
(5, 'Olahraga', 'Secara universal dunia olahraga mengenal dua jalur pencapaian prestasi, yaitu amatir dan profesional. Keduanya bagai dua sisi mata uang, berbeda namun saling melekat.\r\n\r\nDitinjau dari aspek tujuannya, olahraga amatir bertujuan membimbing atlet mencapai prestasi tertinggi. Menjadi juara adalah tujuan utama olahraga amatir.\r\n\r\nPeserta olahraga amatir di bawah bimbingan pelatih selalu mengutamakan pencapaian prestasi maksimal.\r\n\r\nOlahraga amatir mendapat dukungan dari pemerintah dan memperoleh bantuan keuangan negara.\r\n\r\nSementara, olahraga profesional adalah olahraga bertujuan komersial yang menekankan pada unsur hiburan dan menyediakan hadiah uang bagi sang juara.\r\n\r\nPeserta boleh didukung perusahaan-perusahaan swasta.\r\n\r\nBerolahraga adalah pekerjaan utama atlet profesional.\r\n\r\nPenonton adalah faktor penting dalam olahraga profesional sebab penjualan tiket pertandingan amat mempengaruhi bisnis ini.\r\n\r\nBahkan, pada prakteknya beberapa cabang olahraga profesional sebagai subsistem telah tumbuh menjadi industri yang menggiurkan.\r\n\r\nOlahraga menjadi sarana untuk menyalurkan minat dan bakat seseorang, serta merupakan sebuah cara untuk mengekspresikan berbagai mental positif yang pada setiap individu.\r\n\r\nDalam mengadakan sebuah sport event, membentuk sebuah konsep merupakan hal yang penting.\r\n\r\nKonsep acara yang dimaksud haruslah bagus dan menarik, tetapi bertanggung jawab.');

-- --------------------------------------------------------

--
-- Table structure for table `kategoripeserta`
--

CREATE TABLE `kategoripeserta` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kategoripeserta`
--

INSERT INTO `kategoripeserta` (`id`, `nama`) VALUES
(1, 'Pelajar'),
(2, 'Mahasiswa'),
(3, 'Karyawan Swasta'),
(4, 'Guru/Dosen'),
(5, 'Umum'),
(6, 'ASN'),
(7, 'siswa');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(11) NOT NULL,
  `judul` varchar(200) DEFAULT NULL,
  `kapasitas` int(11) DEFAULT NULL,
  `harga_tiket` double DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `narasumber` varchar(200) DEFAULT NULL,
  `tempat` varchar(100) DEFAULT NULL,
  `pic` varchar(45) DEFAULT NULL,
  `jenis_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `judul`, `kapasitas`, `harga_tiket`, `tanggal`, `narasumber`, `tempat`, `pic`, `jenis_id`) VALUES
(11, 'Seminar Sukses Kuliah di Luar Negeri', 100, 20000, '2022-07-24', 'Dr. Seto Waluyo, Dr. Annisa PhD, Misna Azqia M.Kom', 'Aula Kampus B2 STT-NF', 'ahmad fathan', 1),
(12, 'Event olahraga Badminton', 500, 30000, '2022-07-28', 'Iwan Bara', 'Gor Lamahu', 'Raihan Zalfa', 5),
(13, 'Event Bazar', 500, 25000, '2022-07-26', 'Ariel Noah', 'Prj', 'Askari', 3),
(15, 'Seminar Kesehatan Nasional', 400, 30000, '2022-08-04', 'Mahalini Raharja', 'GIS', 'Rassyid', 1),
(16, 'Event olahraga futsal', 200, 50000, '2022-07-19', 'Rasyid Amar', 'Gor Golden', 'Askari', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `created_at`, `last_login`, `role`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'admin@sttnf.ac.id', '2022-07-06 07:50:38', '2022-07-06 07:50:38', 'admin'),
(2, 'user1', '827ccb0eea8a706c4c34a16891f84e7b', 'user1@gmail.com', '2022-07-07 14:07:50', '2022-07-07 14:07:50', 'USER');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pesanan_users1_idx` (`users_id`),
  ADD KEY `fk_pesanan_produk1_idx` (`kegiatan_id`),
  ADD KEY `fk_daftar_kategori_peserta1_idx` (`kategori_peserta_id`);

--
-- Indexes for table `jeniskegiatan`
--
ALTER TABLE `jeniskegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategoripeserta`
--
ALTER TABLE `kategoripeserta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_produk_jenis_produk_idx` (`jenis_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar`
--
ALTER TABLE `daftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jeniskegiatan`
--
ALTER TABLE `jeniskegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kategoripeserta`
--
ALTER TABLE `kategoripeserta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `daftar`
--
ALTER TABLE `daftar`
  ADD CONSTRAINT `daftar_ibfk_1` FOREIGN KEY (`kegiatan_id`) REFERENCES `kegiatan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `daftar_ibfk_2` FOREIGN KEY (`kategori_peserta_id`) REFERENCES `kategoripeserta` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `daftar_ibfk_3` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD CONSTRAINT `kegiatan_ibfk_1` FOREIGN KEY (`jenis_id`) REFERENCES `jeniskegiatan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
