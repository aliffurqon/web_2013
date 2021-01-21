-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 01 Feb 2014 pada 16.54
-- Versi Server: 5.6.11
-- Versi PHP: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `aliffurq_db`
--
CREATE DATABASE IF NOT EXISTS `aliffurq_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `aliffurq_db`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `foto` varchar(300) NOT NULL,
  `title` varchar(300) NOT NULL,
  `detail` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`id`, `foto`, `title`, `detail`) VALUES
(1, 'Blink.jpg', 'First Date', 'ini adalah lagu yang bernuansa tahun 70-an'),
(2, 'Blink182.jpg', 'The Best Song', 'Ini adalah lagu lagunya yang sangat famous'),
(3, 'blink-182.jpg', 'Karikatur', 'Ini adalah salah satu bentuk karikaturnya'),
(4, 'blink182#.jpg', 'Blink-182', 'Dan kau tahu lah ini siapa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member_tbl`
--

CREATE TABLE IF NOT EXISTS `member_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `membername` varchar(300) NOT NULL,
  `memberpassword` varchar(300) NOT NULL,
  `memberdesc` text NOT NULL,
  `createdate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `member_tbl`
--

INSERT INTO `member_tbl` (`id`, `membername`, `memberpassword`, `memberdesc`, `createdate`) VALUES
(3, 'aqon@gmail.com', '713007695571e482b9d5dcfe4f1293ce', '', '2013-12-14 16:19:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `newscomment_tbl`
--

CREATE TABLE IF NOT EXISTS `newscomment_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `newsid` int(11) NOT NULL,
  `createdate` datetime NOT NULL,
  `sender` varchar(300) NOT NULL,
  `comments` text NOT NULL,
  `allowed` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data untuk tabel `newscomment_tbl`
--

INSERT INTO `newscomment_tbl` (`id`, `newsid`, `createdate`, `sender`, `comments`, `allowed`) VALUES
(7, 1, '2013-11-18 17:02:54', 'aqon@gmail.com,', 'wdawd', 1),
(8, 1, '2013-11-18 17:05:28', 'aqon@gmail.com,', 'wdawdwrfawd', 1),
(9, 1, '2013-11-18 17:06:17', 'aqon@gmail.com,', 'drgvh', 1),
(10, 2, '2013-11-18 17:06:54', 'aqon@gmail.com,', 'wwwwww', 1),
(11, 1, '2013-12-09 08:59:40', 'alif@gmail.com,', 'awdawdaw', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `news_tbl`
--

CREATE TABLE IF NOT EXISTS `news_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL,
  `synopsis` text NOT NULL,
  `detail` text NOT NULL,
  `createdate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `news_tbl`
--

INSERT INTO `news_tbl` (`id`, `title`, `image`, `synopsis`, `detail`, `createdate`) VALUES
(1, 'BlackBerry: BBM di iPhone dan Android Tak Istimewa', 'bbmandroidinet460.jpg', 'Jakarta - BlackBerry Messenger (BBM) memang telah hadir lintas platform. Namun tak semua fitur istimewa BBM yang ada di handset BlackBerry 10, akan ditawarkan sepenuhnya pada aplikasi untuk perangkat Android dan iOS. ', 'Jakarta - BlackBerry Messenger (BBM) memang telah hadir lintas platform. Namun tak semua fitur istimewa BBM yang ada di handset BlackBerry 10, akan ditawarkan sepenuhnya pada aplikasi untuk perangkat Android dan iOS.\r\n\r\nMenurut penuturan vendor asal Kanada tersebut saat berkunjung ke markas detikINET, sejauh ini BBM lintas platform memang hanya menawarkan fitur dasar, yakni sekedar berkirim pesan.\r\n\r\nSementara jika dibandingkan dengan yang ditawarkan pada BBM di perangkat BlackBerry 10, versi yang menghiasi Android dan iOS memang memiliki fitur yang jauh tertinggal.\r\n\r\nMisalnya saja, fitur BBM voice dan BBM video yang saat ini hanya dapat dilakukan melalui akses BBM pada perangkat BlackBerry 10. Ditambah lagi kelebihan lainnya yang hanya dapat ditawarkan oleh BBM pada BlackBerry 10, semisal integrasi dengan BlackBerry Hub yang memudahkan penggunanya saat ada notifikasi yang masuk, serta kelebihan-kelebihan lainnya.\r\n\r\n"BBM memang telah dapat digunakan pada platform lain (Android dan iOS), namun fitur-fitur istimewa BBM sepenuhnya hanya dapat dirasakan pada aplikasi BBM pada BlackBerry 10, karena tidak seperti BBM lintas platform yang hanya berupa aplikasi, BBM pada BlackBerry 10 merupakan bagian dari sistem operasi tersebut,” ucap Ardo Fadhola, Senior Country Product Manager BlackBerry Indonesia.\r\n\r\nMeski tidak seluruh fitur istimewa BBM tersedia bagi pengguna Android dan iOS, nyatanya hanya seminggu setelah peluncurannya aplikasi pesan instan tersebut telah memikat lebih dari 20 juta pengguna.', '2013-11-08 00:00:00'),
(2, 'Twitter Melesat, Bursa Saham Rontok Angga Aliya - detikinet', 'ipotwitter460.jpg', 'New York - Pasar saham Wall Street menderita koreksi yang cukup tajam, sampai ke titik terendahnya sejak Agustus tahun 2013 ini. Penguatan saham Twitter yang melebihi ekspektasi pasar juga tidak banyak membantu.', 'New York - Pasar saham Wall Street menderita koreksi yang cukup tajam, sampai ke titik terendahnya sejak Agustus tahun 2013 ini. Penguatan saham Twitter yang melebihi ekspektasi pasar juga tidak banyak membantu.\r\n\r\nKoreksi ketiga indeks acuan di bursa Paman Sam itu gara-gara anjloknya saham Whole Foods dan Qualcomm. Perusahaan teknologi yang terdaftar di Nasdaq itu mengalami koreksi terdalam di sebulan terakhir.\r\n\r\n"Twitter jadi pusat perhatian di sini, tapi kita harus melihatnya secara keseluruhan bahwa di Nasdaq saham-saham yang kecil terkena tekanan," kata kata Ryan Detrick, analis dari Schaeffer''s Investment Research di Cincinnati, Ohio dikutip dari Reuters, Jumat (8/11/2013).\r\n\r\nSaham Twitter sempat melesat hingga 92% dari posisi awalnya USD 26 per lembar sampai mendekati USD 50 per lembar hanya dalam sehari. Sahamnya ditutup naik 73% ke level USD 44,90 per lembar.\r\n\r\nPada penutupan perdagangan Kamis waktu setempat, Indeks Dow Jones melemah 152,90 poin (0,97%) ke level 15.593,98. Indeks Standard & Poor''s 500 anjlok 23,34 poin (1,32%) ke level 1.747,15. Indeks Komposit Nasdaq jatuh 74,61 poin (1,90%) ke level 3.857,33.', '2013-11-07 00:00:00'),
(3, 'iPhone 5C dan iPad Mini Digeber dari Taiwan', 'iphone5c460.jpg', 'Taiwan - Apple dikabarkan telah menunjuk dua manufaktur baru asal Taiwan untuk ikut membantu pasokan produksi iPhone 5C dan iPad Mini seiring melonjaknya permintaan atas kedua gadget anyar tersebut. ', 'Taiwan - Apple dikabarkan telah menunjuk dua manufaktur baru asal Taiwan untuk ikut membantu pasokan produksi iPhone 5C dan iPad Mini seiring melonjaknya permintaan atas kedua gadget anyar tersebut.\r\n\r\nDi akhir 2013 ini, perusahaan asal Cupertino itu mempercayakan pembuatan handset iPhone 5C pada Wistron di Taiwan. Sedangkan untuk iPad Mini, Apple bakal mendelegasikannya kepada Compal Communications yang juga berbasis di Taiwan.\r\n\r\nApple seperti diketahui sebenarnya sudah lama bergantung pada Foxconn (Hon Hai) untuk produksi barang-barangnya. Namun seperti detikINET kutip dari Cnet, Jumat (8/11/2013), hubungan keduanya mengalami pasang surut.\r\n\r\nBanyaknya kritikan yang tertuju pada Foxconn mengenai kondisi para karyawannya, agaknya mempengaruhi hubungan tersebut. Akan tetapi, meskipun kondisi para karyawan sendiri membaik, namun Foxconn agaknya mulai kesulitan memproduksi semua iPhone yang diminta Apple.\r\n\r\nApple sendiri menolak berkomentar mengenai manufaktur maupun isu perburuhan tersebut. Adapun Wistron diyakini memulai produksi masal iPhone 5C pada akhir tahun ini dan Compal Communication yang dipercaya menggarap iPad Mini akan memulai proses manufakturnya pada tahun depan.\r\n\r\nHingga kuartal yang berakhir September kemarin, Apple sendiri mengklaim telah sukses menjual 33,8 juta unit iPhone, 14.1 juta iPad dan 4.6 juta Mac. Semuanya mengalami kenaikan penjualan, kecuali seri Mac.\r\n\r\nDikutip dari Apple Insider, penjualan iPhone mengalami kenaikan dibandingkan kuartal yang sama tahun lalu, yang hanya 26,9 juta unit. Sementara iPad, penjualannya naik tipis dari 14 juta unit.\r\n\r\nWall Street juga mencatat, bahwa Apple menangguk pendapatan kotor di kuartal terakhir dengan pencapaian antara USD 55 miliar hingga USD 58 miliar.\r\n\r\n"Kami memasuki akhir kuartal keempat dengan luar biasa. Kami mencatatkan rekor penjualan yang baik. Kami bersiap menyambut liburan akhir tahun ini dengan menjual beragam produk terbaru seperti iPhone 5C dan 5S, iOS 7, iPad Air dan iPad Mini Retina Display," kata CEO Apple, Tim Cook.', '2013-11-06 00:00:00'),
(4, 'Dikawal ''Bos X-Men'', Saham Twitter Melesat', 'profxtwitter460.jpg', 'New York - Saham perdana Twitter menggebrak lantai bursa New York. Dalam pembukaan perdagangan yang juga dihadiri ''Profesor X dari X-Men'', saham jejaring sosial 140 karakter ini sempat melonjak hingga 90% atau hampir dua kali lipat.', 'New York - Saham perdana Twitter menggebrak lantai bursa New York. Dalam pembukaan perdagangan yang juga dihadiri ''Profesor X dari X-Men'', saham jejaring sosial 140 karakter ini sempat melonjak hingga 90% atau hampir dua kali lipat.\r\n\r\nPada awal perdagangan sahamnya langsung melesat 90% ke sekitar USD 50 (Rp 550.000) per lembar. Setelah lonjakan itu laju sahamnya mulai melambat dan berada di kisaran USD 45 per lembar atau masih naik sekitar 74%.\r\n\r\nSaham perdana berkode TWTR ini dibuka di harga USD 26 per lembar. Meski beberapa analis menilai sahamnya tidak akan melesat di hari pertama, ternyata prediksi tersebut keliru.\r\n\r\nPara pendiri dan tokoh penting Twitter turut hadir dalam pembukaan perdagangan Kamis waktu setempat, dan juga aktor ''Profesor X dari X-Men'' Patrick Stewart.\r\n\r\n"Saya merasa terhormat untuk bergabung bersama @ev @jack @biz @dickc dan tim @Twitter saat IPO bersejarah pagi ini," tulis Stewart dalam postingan Twitter yang merujuk kepada para pendiri jejaring sosial itu Evan Williams, Jack Dorsey, Biz Stone, dan CEO Twitter Dick Costolo, seperti detikINET kutip dari AFP, Jumat (8/11/2013).\r\n\r\nPada penutupan perdagangan, saham Twitter ditutup naik 18,9 poin ke level USD 44,9 (Rp 449.000) atau melonjak 72,7% dari posisi awal US$ 26 (Rp 260.000) per lembar.\r\n\r\nSebelumnya melantai di bursa, Twitter sudah menaikkan rentang nilai sahamnya menjadi USD 23 (Rp 230.000) hingga USD 25 (Rp 250.000) per lembar. Sebelumnya rentang harganya ada di USD 17-20 (Rp 170.000-200.000) per lembar.\r\n\r\nNamun setelah disepakati, akhirnya harga sahamnya dipatok USD 26 per lembar. Dengan harga sahamnya itu Twitter bisa menjaring dana hingga US$ 1,82 miliar (Rp 18,2 triliun).\r\n\r\nJejaring sosial yang terkenal dengan postingan 140 karakter itu melepas 70 juta lembar saham ke pasar, dengan opsi tambahan 10,5 juta lembar lagi dalam 30 hari ke depan. Dengan saham tambahan itu total nilai IPO Twitter jadi sebesar USD 2,1 miliar (Rp 21 triliun).\r\n\r\nKapitalisasi pasar atau nilai perusahaan emiten berkode saham TWTR itu menjadi sebesar USD 14,4 miliar (Rp 144 triliun). Lebih tinggi dari prediksi awal yang ada di rentang USD 12,8-13,9 miliar (Rp 128-139 triliun).', '2013-11-08 00:00:00'),
(8, 'dwdwdawdw', 'Chrysanthemum.jpg', 'dwdwdnfjbewflaewfjva', 'fewnfjebfoboewvfiveiwv', '2013-01-01 01:01:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_tbl`
--

CREATE TABLE IF NOT EXISTS `user_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(256) NOT NULL,
  `userpassword` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `user_tbl`
--

INSERT INTO `user_tbl` (`id`, `username`, `userpassword`) VALUES
(1, 'aliffurqon', '713007695571e482b9d5dcfe4f1293ce');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
