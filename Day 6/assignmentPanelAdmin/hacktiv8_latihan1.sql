-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 05, 2024 at 02:32 PM
-- Server version: 8.0.30
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hacktiv8_latihan1`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id_blog` int NOT NULL,
  `judul_blog` varchar(50) NOT NULL,
  `konten_blog` text NOT NULL,
  `gambar_utama_blog` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `kategori` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id_blog` int NOT NULL,
  `judul_blog` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `konten_blog` text NOT NULL,
  `gambar_utama_blog` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id_blog`, `judul_blog`, `kategori`, `konten_blog`, `gambar_utama_blog`) VALUES
(5, 'Panduan Cahaya yang Tepat untuk Tanaman Anda', 'hiburan', 'Udara yang semakain buruk diluar membuat ini menjadi waktu yang tepat untuk menata tanaman ke dalam rumah, tetapi tahukah Anda bahwa salah satu faktor utama yang perlu dipertimbangkan adalah jumlah cahaya yang diterima oleh rumah Anda? Ketika Anda memilih tanaman, penting untuk memahami persyaratan kebutuhan cahaya mereka. Tidak perlu bingung, karena tulisan ini khusus dirancang untuk membantu Anda membuat keputusan yang tepat dalam memilih tanaman yang cocok untuk rumah Anda. Kami akan membantu Anda mengidentifikasi jenis cahaya yang masuk ke dalam rumah Anda, memahami istilah seperti cahaya langsung dan cahaya tidak langsung, serta memberikan saran tentang tanaman yang cocok untuk setiap area di rumah Anda.\r\nCahaya Langsung vs. Cahaya Tidak Langsung\r\n\r\nSatu hal yang perlu dipahami adalah perbedaan antara cahaya langsung dan cahaya tidak langsung. Cahaya langsung adalah sinar matahari yang masuk melalui jendela yang menghadap ke barat atau selatan. Ini adalah cahaya paling intens yang diterima oleh ruangan dalam rumah, dan akan mengekspos tanaman langsung ke sinar matahari. Meskipun sebagian besar tanaman hias dalam rumah tidak menyukai sinar matahari langsung, ada beberapa yang dapat menangani panasnya seperti Kaktus, Karet Kebo, dan Biola Cantik\r\n\r\nCahaya Tidak Langsung, Tapi Terang\r\n\r\nCahaya tidak langsung terang adalah cahaya yang tidak langsung tetapi tetap terang. Contohnya adalah area yang berada tepat di sebelah jendela yang menerima cahaya langsung dalam sehari, tetapi tidak lebih dari satu jam sehari sebelum terhalangi. Ini adalah kondisi ideal untuk tanaman dalam kategori ini.\r\n\r\nCahaya Sedang\r\n\r\nCahaya sedang diterima oleh area di dalam ruangan yang berjarak sekitar setengah jarak antara jendela dan dinding belakang. Tempat-tempat ini masih mendapatkan cahaya yang stabil dari jendela, tetapi bukan cahaya langsung. Cahaya ini ideal untuk banyak jenis tanaman Palem, Dracaena, Philodendron, dan tanaman dalam kategori cahaya sedang.\r\n\r\nCahaya Rendah\r\n\r\nCahaya rendah adalah area yang berjarak tujuh kaki atau lebih dari jendela dan dapat juga menjadi tempat yang sama sekali tidak menerima cahaya alami, seperti beberapa kantor dan kamar mandi. Beberapa tanaman mencintai cahaya rendah, dan banyak yang dapat beradaptasi dengannya. Meskipun tanaman cahaya rendah tumbuh lebih lambat daripada tanaman lainnya, tetap ada banyak pilihan yang tersedia. Kategori tanaman cahaya rendah adalah tempatnya tanaman dalam ruangan yang suka teduh.\r\n\r\nPenerangan Buatan untuk Tanaman\r\n\r\nPertanyaan yang sering diajukan adalah apakah Anda dapat menggunakan penerangan buatan untuk tanaman Anda. Jawabannya adalah ya. Penerangan buatan adalah cahaya yang dihasilkan oleh lampu, terutama oleh lampu tumbuh. Lampu biasa dan lampu langit-langit tidak memberikan banyak cahaya untuk fotosintesis tanaman (meskipun mereka masih memberikan sesuatu!), jadi jika satu-satunya sumber cahaya adalah lampu biasa dan lampu langit-langit, Anda akan ingin memilih tanaman yang suka cahaya rendah. Namun, lampu tumbuh memberikan cahaya yang dapat dengan mudah diolah oleh tanaman untuk fotosintesis.\r\n\r\nMemahami Cahaya dan Ruangan Anda\r\n\r\nTahukah Anda jenis cahaya apa yang ada di ruangan Anda? Cara cepat untuk mengetahuinya adalah dengan tes sederhana dengan tangan. Ambil selembar kertas atau permukaan datar lainnya dan letakkan tangan Anda sekitar 30 cm dari permukaan itu, antara tangan dan sumber cahaya. Jika Anda tidak melihat banyak bayangan atau bayangannya samar, Anda mendapatkan cahaya rendah. Jika Anda melihat bayangan tangan yang buram atau kabur, Anda mendapatkan cahaya sedang. Dalam cahaya terang, Anda akan melihat bayangan yang tajam dan jelas.', 'panduan-cahaya.png'),
(6, '7 Alat Efektif Untuk Merawat Taman, Nomor 5 Jarang Yang Tau!', 'pendidikan', 'Perawatan taman merupakan hal yang penting agar taman tetap terawat dan terlihat indah. Jika taman tidak dirawat, maka beberapa tanaman akan terlihat tidak terawat atau bahkan rusak karena alasan tertentu. Semakin jarang seseorang merawat taman, maka semakin besar usaha atau biaya yang diperlukan untuk merawat taman tersebut.\r\n\r\nTentunya, untuk menghemat biaya perawatan, semua orang dapat merawat taman mereka masing – masing dengan bantuan alat – alat yang dibuat khusus untuk memudahkan pekerjaan Anda dalam merawat taman. Mengetahui alat – alat yang dapat membantu Anda dalam merawat taman itu sangatlah penting mengingat bahwa setiap alat didesain dengan fungsi khusus dan spesifik. Dengan memperluas pengetahuan tentang alat – alat ini, maka Anda tidak akan menghadapi kebingungan dalam memilih Alat untuk perawatan taman secara spesifik. Maka dari itu, kami akan menjelaskan tentang 7 Alat kebun yang dapat membantu Anda dalam memperindah taman.\r\n\r\n1. Garpu Taman\r\nSeringkali terdapat daun – daun kering berjatuhan di area taman. Memungut dan membersihkan daun tersebut tentunya sangat menguras energi jika dilakukan dengan tangan. Untuk itu, alat kebun ini sangat berguna untuk mengumpulkan daun – daun kering ke satu titik sebelum dimasukkan ke karung untuk dibuang atau diolah lagi menjadi kompos.\r\n\r\n2. Sarung Tangan Kebun\r\nMerawat taman merupakan kegiatan hands-on, artinya kita harus siap sedia dalam terlibat langsung. Dalam terlibat langsung, tangan kita akan sering menyentuh tanah, daun, batang yang tidak hanya kotor, tapi juga dapat melukai tangan kita. Untuk melindungi tangan dari residu tanah atau hal tajam lainnya, maka Anda harus menggunakan sarung tangan setiap saat.\r\n\r\n3. Sekop\r\nTerkadang, Anda perlu membuat lubang di tanah untuk menanam tanaman baru, atau mengganti tanaman yang rusak. Dalam kegiatan tersebut, anda memerlukan alat kebun yang satu ini. Bukan hanya itu, sekop juga dapat digunakan untuk memindahkan material tanah dalam jumlah yang sedikit.\r\n\r\n4. Selang Air\r\nSeperti yang kita ketahui, tanaman yang ada di taman anda memerlukan air untuk bertahan hidup. Mungkin air ini bisa didapatkan dari hujan atau penyiram tanaman otomatis. Namun, penyiram tanaman otomatis bukan merupakan pilihan yang ekonomis walaupun sangat efisien untuk menghemat banyak waktu. Jika anda ingin pilihan yang lebih ekonomis, maka sangat disarankan untuk menyiram tanaman dengan selang air dengan sentuhan Old style.\r\n\r\n5. PH Meter Tanah\r\nTanaman memiliki toleransi yang berbeda dalam hal PH tanah. Alat Kebun Pengukur PH tanah dapat digunakan untuk memastikan bahwa tanaman anda memang dapat hidup secara layak di taman anda. Sangat disarankan untuk melakukan research terlebih dahulu tentang tanaman yang akan anda tanam dan mencocokkannya dengan PH tanah di taman anda.\r\n\r\n6. Semprotan Anti Hama\r\nHama merupakan salah satu masalah yang sering dihadapi para pecinta tanaman. Keberadaan hama memiliki dampak yang destruktif bagi tanaman kesayangan Anda. Untuk mengatasi itu, maka sangat disarankan untuk membeli cairan anti hama dan jangan lupa juga untuk membeli semprotan anti hama untuk mempermudah penyebaran cairan anti hama.\r\n\r\n7. Gunting Tanaman\r\nAlat kebun ini sangat berperan besar dalam hal estetika taman. Para tukang kebun biasanya menggunakan gunting taman untuk membuat bentuk – bentuk tertentu pada tanaman. Selain itu, Anda juga dapat memotong ranting dan daun yang sudah mati menggunakan gunting tanaman.\r\n\r\nMasih banyak alat yang dapat digunakan untuk merawat tanaman yang tentunya sangat berbeda dari apa yang sudah dikenalkan di atas. Namun, jika Anda memiliki taman yang cukup kecil, mungkin beberapa alat kebun di atas hanya perlu anda gunakan sekali dalam satu bulan. Sangat tidak efektif kan untuk membeli semua alat perawatan taman yang ada? Apalagi jika Anda memiliki waktu yang terbatas untuk membersihkan taman anda.\r\n\r\nKebetulan banget nih, di OKE Garden, ada jasa Garden Care yang dimana taman kamu akan dirawat oleh para profesional mulai dari perawatan semut putih, pemangkasan, pemberian pupuk, dan masih banyak lagi. Kamu tinggal duduk manis dan menikmati hasil dari jasa Garden Care yang kami berikan. Menarik bukan? Klik disini untuk pesan perawatan taman atau hubungi OKE Garden di sosial media seperti instagram @okegarden atau kontak lainnya untuk memesan jasa kami ya!', 'efektif.jpg'),
(7, '3 Tips Membuat Taman Depan Rumah dengan Desain Taman Kilat 1HariLangsungJadi', 'pendidikan', 'Berbagai referensi jenis taman tak jarang membuat pilihan menjadi lebih banyak. Namun, seiring berjalannya waktu mencari referensi dari berbagai sumber ada baiknya untuk kamu mulai memahami konsep desain sebelum bikin taman di rumah. Terkadang ingin konsep desain yang sesuai dengan taman impian. \r\n\r\nUntuk itu, agar Garden people tidak merasa kecewa karena hasil desainnya kurang sesuai dengan ekspektasi coba deh cek 3 tips sebelum membuat taman di depan rumah ala OKE Garden.\r\n\r\n1. Banyak berkonsultasi dengan ahli \r\n\r\n\r\nDoc.OKE Garden\r\nSebelum membuat taman, cobalah untuk berkonsultasi dengan ahlinya. OKE Garden menyediakan layanan konsultasi sebelum memulai proses pembuatan taman loh. Dengan konsultasi seperti ini, kamu bisa mendapatkan gambaran dan ide dalam membangun taman impian di rumah. Pastinya kamu akan lebih tenang setelah konsultasi. Enggak hanya itu, saat konsultasi juga akan dijelaskan terkait RAB (Rancangan Anggaran Biaya) agar kamu tahu estimasi biaya saat bikin taman.\r\n\r\n2. Mulai memilih desain untuk taman\r\n\r\n\r\n\r\nKenapa sih sebelum bikin taman perlu ada desain? Adanya desain  sebelum membuat taman akan membantu kamu untuk mewujudkan taman asri di rumah sesuai keinginan. Jadi, hasil akhir tamanmu juga akan optimal karena adanya desain. Proses desain dilakukan dengan cepat #1HARILANGSUNGJADI kamu enggak butuh waktu lama untuk hasil desain yang lebih OKE!\r\n\r\n3. Proses pembuatan taman sesuai rencana \r\n\r\n\r\nBefore\r\n\r\nAfter\r\nNah, setelah semua perencanaan dan konsep desain untuk membangun taman impian sudah didapat, langkah selanjutnya hanya tinggal menjalankan proses pembuatan taman sesuai rencana. Sebelumnya, kamu harus pahami kalau membuat taman di rumah tidak akan memakan waktu yang singkat loh. Prosesnya bisa cepat atau lama tergantung ukuran taman dan desain yang kamu inginkan ya. ', 'desain kilat.png');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int NOT NULL,
  `nama_kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Pendidikan'),
(2, 'Hiburan'),
(3, 'Hiburan');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int NOT NULL,
  `id_pengguna` int NOT NULL,
  `id_blog` int NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int NOT NULL,
  `email_pengguna` varchar(20) NOT NULL,
  `username_pengguna` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password_pengguna` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `email_pengguna`, `username_pengguna`, `password_pengguna`) VALUES
(1, 'erlina@gmail.com', 'erlinaeka', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id_student` int NOT NULL,
  `name` varchar(30) NOT NULL,
  `role` varchar(10) NOT NULL,
  `availability` varchar(10) NOT NULL,
  `age` int NOT NULL,
  `address` text NOT NULL,
  `experience` int NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`),
  ADD KEY `kategori` (`kategori`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `id_blog` (`id_blog`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id_student`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id_blog` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id_student` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`kategori`) REFERENCES `kategori` (`id_kategori`);

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`id_blog`) REFERENCES `blog` (`id_blog`),
  ADD CONSTRAINT `komentar_ibfk_2` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
