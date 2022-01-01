-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2022 at 05:50 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `walking_library_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi_buku` text NOT NULL,
  `jml_halaman` varchar(10) NOT NULL,
  `penerbit` varchar(150) NOT NULL,
  `penulis` varchar(150) NOT NULL,
  `tgl_terbit` date NOT NULL,
  `berat` varchar(10) NOT NULL,
  `isbn` varchar(50) DEFAULT NULL,
  `lebar` varchar(10) NOT NULL,
  `bahasa` varchar(20) NOT NULL,
  `panjang` varchar(10) NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `gambar`, `nama`, `deskripsi_buku`, `jml_halaman`, `penerbit`, `penulis`, `tgl_terbit`, `berat`, `isbn`, `lebar`, `bahasa`, `panjang`, `harga`) VALUES
(1, 'card1.svg', 'Pemrograman Vb.Net Untuk Pemula', 'Peluang untuk menjadi developer aplikasi berbasis MS Windows masih terbentang luas mengingat sistem operasi ini merupakan yang terpopuler di dunia. Maka dengan segala kemudahan dan kepraktisannya, Visual Basic .Net masih memiliki banyak penggemar. Buku ini mengupas pemrograman Visual Basic .Net yang dapat dipelajari baik melalui teori maupun video course yang disertakan. Pembahasan di dalam buku ini meliputi: • Instalasi Visual Studio • Cara bekerja dengan menggunakan form dan kontrol • Teori tentang pemrograman berbasis object dan methods • Teknik dasar pemrograman Visual Basic .Net • Struktur percabangan dan perulangan. • Pembuatan function dan subprocedure • Pembuatan menu, dan masih banyak lagi. Setelah itu, Anda akan dilatih untuk membuat aplikasi menggunakan bantuan video course gratis! (thinkjubilee)', '232', 'Elex Media Komputindo', 'Jubilee Enterprise', '2020-06-07', '0.25 Kg', '9786230018732', '14.0 cm', 'Indonesia', '21.0cm', 65000),
(2, 'ID_PWTL2018MTH11WTL.jpg', '7 in 1 Pemrograman Web Tingkat Lanjut', 'Laravel dan VueJS merupakan 2 teknologi pemrograman web yang sedang popular saat ini. Keduanya dibahas dalam buku ini beserta integrasinya dalam pembuatan aplikasi. Selain itu, didukung juga dengan materi lain yang tidak kalah penting dengan total 7 materi pemrogaman web. Buku ini merupakan kelanjutan dari buku sebelumnya yang membahas 7 pemrograman website untuk pemula. Setiap materi dibahas mulai dari teori dasar disertai contoh script di setiap pembahasan. Beberapa materi disertai langkah-langkah membuat aplikasi dengan menerapkan materi yang dibahas. Total terdapat 5 pembahasan membuat aplikasi dari mulai login, mengatur template aplikasi, operasi CRUD, hingga logout. Kelima aplikasi tersebut terdiri atas aplikasi dengan teknik OOP, PDO, dan MVC; aplikasi dengan AJAX Jquery; aplikasi dengan Laravel; aplikasi dengan integrasi Laravel dan VueJS; serta aplikasi dengan plugin Wordpress. Keterampilan: Menengah, Tingkat Mahir Kelompok: Pemrograman Jenis buku: Referensi, Tutorial', '336', 'Elex Media Komputindo', 'Rohi Abdulloh', '2018-11-26', '0.420 kg', '9786020486628', '14 cm', 'Indonesia', '21cm', 74800),
(3, 'card3.svg', 'Rekayasa Perangkat Lunak Berorientasi Objek Menggunakan Php', 'Buku Rekayasa Perangkat Lunak Berbasis Objek berbasis bahasa PHP ini dibuat untuk digunakan pada program studi Teknik Komputer, Ilmu Komputer, Teknik Elektro, Teknik Informatika disekitar tahun kedua perkuliahan dengan beban sebanyak 3 SKS. Buku ini disertai contoh penggunaan tools dalam mempelajari siklus hidup perangkat lunak. Pada buku ini juga dipaparkan sejarah mengapa kita sampai pada bentuk rekayasa perangkat lunak seperti sekarang ini. Pembuatan program perangkat lunak merupakan teknologi yang sangat cepat berkembang, mengingat berkembangnya infrastruktur dan perangkat keras yang tersedia.\r\nStruktur buku ini memuat mengenai sejarah, definisi, komponen dan siklus hidup Rekayasa Perangkat Lunak. Selanjutnya dijelaskan pula tentang model pengembangan perangkat lunak dan manajemen pengembangan perangkat lunak. Selain itu Penulis juga menjelaskan mengenai kualitas perangkat lunak dan paradigma rekayasa perangkat lunak.', '304', 'Andi Offset', 'PROF. DR. IR. RIRI FITRI SARI, M.M., M.SC., DTM, SMIEEE', '2021-11-30', '0.405 kg', '9786230117886', '16.0 cm', 'Indonesia', '23.0cm', 89000),
(4, 'card4.svg', 'Psychological Tests For Teens: Check Your Mental Health', 'Masa remaja merupakan masa yang penuh gejolak. Dengan perkembangan fisik dan mental secara drastis, membuat kita mengalami goncangan dalam hidup. Padahal masa ini teramat sangat pendek lho, tak lebih dari 10 tahun. Namun, tanpa persiapan yang baik, akan menyulitkan kita untuk beradaptasi. Hal ini sangat memengaruhi kesehatan mental kita. Buku ini mengajak kita memahami perkembangan yang terjadi, sehingga kita yang masih remaja bisa menerimanya sebagai sesuatu hal yang alamiah. Kita perlu bersiap sehingga jika masa remaja tiba, kita bisa mengelola masa ini dengan baik. Bersiapnya kita menyongsong masa remaja, menjadikan kita mudah beradaptasi sehingga kesehatan mental kita bisa terjaga. Buku ini juga memuat serangkaian tes psikologi. Semakin lengkap kita mengerjakannya, semakin terbaca pula profile pribadi kita. Semua tes ini tidak ada yang salah. Semua jawaban benar asalkan dikerjakan secara jujur. Jangan ragu untuk mengerjakan semua soal sehingga hasilnya menampilkan kepribadian kita yang sebenarnya. Bagaimanapun hasilnya, jangan berputus asa. Kondisi mental tidak sepenuhnya bersifat permanen. Masih ada kesempatan untuk memperbaiki diri sehingga kehidupan bisa berjalan dengan menyenangkan. Selamat mencoba.\r\n', '280', 'Elex Media Komputindo', 'Nurul Chomaria, S. Psi', '2021-05-12', '0.35 kg', '9786230026287', '14.0 cm', 'Indonesia', '21.0cm', 105000),
(7, 'card5.svg', 'Rich Dad Poor Dad', 'Robert Kiyosaki telah menantang dan mengubah cara pikir puluhan juta orang di seluruh dunia tentang uang. Dengan perspektif yang kerap bertentangan dengan kebijaksanaan umum, Robert memiliki reputasi sebagai orang yang bicara secara apa adanya, tidak menganggap penting hal-hal yang umumnya dianggap serius, dan berani. Dia diakui di seluruh dunia sebagai orang yang berdedikasi dan peduli dengan pendidikan keuangan.\r\n\r\n“Alasan utama orang mengalami kesulitan keuangan adalah mereka menghabiskan waktu bertahun-tahun di sekolah tapi tidak belajar apa-apa tentang uang. Akibatnya, orang belajar untuk bekerja demi uang… tapi tidak pernah belajar membuat uang bekerja bagi mereka.”\r\n—Robert Kiyosaki', '244', 'Gramedia Pustaka Utama', 'Robert T. Kiyosaki', '2016-08-22', '0.269 kg', '9786020333175', '15.0 cm', 'Indonesia', '23.0cm', 68000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `email`, `password`, `role_id`) VALUES
(27, 'Muhammad Ismail', 'muha20170ti', 'muhaisim7@gmail.com', '$2y$10$.bafbLLmf9MDtPBxRSDoTOrV4LQwf9yr1h7ajN3GPteOfABNOLixK', 2),
(28, 'Muhammad Ismail', 'ade', 'muhaisim77@gmail.com', '$2y$10$wN4s01/d1TcrGVALzsWhxOOFTec.T5KloE44BO6skj1Op2SLMu9pS', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
