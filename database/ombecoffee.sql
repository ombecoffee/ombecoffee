# Host: localhost  (Version 5.5.5-10.1.30-MariaDB)
# Date: 2019-08-16 15:11:47
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "coffee"
#

CREATE TABLE `coffee` (
  `idcoffe` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `coffee_name` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pict` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `users_id` int(10) unsigned NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idcoffe`),
  KEY `fk_coffee_user1_idx` (`users_id`),
  CONSTRAINT `fk_coffee_user1_idx` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "coffee"
#

INSERT INTO `coffee` VALUES (2,'Hanami','HANAMI.jpg',1,'45000'),(3,'Choco Coffe Malt','b.jpg',1,'40000'),(4,'Cold Brew','coldbrew.jpg',1,'37000'),(5,'Ice Double White','ICE-DOUBLE-WHITE.jpg',1,'42000'),(6,'Thunderbolt','THUNDERBOLT.jpg',1,'45000');

#
# Structure for table "early"
#

CREATE TABLE `early` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `isi` text,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "early"
#

INSERT INTO `early` VALUES (1,'<p>Misteri pembunuh bertopeng terhadap keluarga di Kampung Gegeneng, RT 01 RW 01, Desa Sukadalam, Kecamatan Waringkurung, Serang, Banten, perlahan mulai menemukan titik terang. Polisi telah mengidentifikasi pelaku.</p>\r\n\r\n<p>EDITED</p>\r\n\r\n<p>&quot;Kalau identitas pelaku secara pasti belum. Namun, penyelidikan kita hari ini sudah mengerucut, ada beberapa nama yang sudah kita kantongi,&quot; kata Kasat Reskrim Polres Serang Kota AKP Ivan Adhitira, Rabu (14/8).</p>\r\n\r\n<p>Ivan optimistis dalam waktu dekat institusinya segera mengungkap dan menangkap pembunuh Rustandi (32) dan anaknya yang masih berusia 4 tahun itu. &quot;Kami harapkan secepat-cepatnya bisa terungkap,&quot; ujar dia.</p>\r\n\r\n<p>Dalam peristiwa itu, istri Rustandi, hanya Siti Saadiyah yang selamat. Siti mengalami luka tusuk di sekujur tubuhnya. Dia kini dirawat di RSUD Cilegon.</p>\r\n\r\n<p>Ivan sebelumnya menuturkan berdasarkan keterangan Siti, pelaku ada dua orang. Dua pelaku itu mengenakan topeng dan mengetok pintu rumah Rustandi pada Selasa (13/8) dini hari sekitar pukul 02.00 WIB.</p>\r\n\r\n<p>Kapolres Serang, AKBP Firman Affandi, meyakini pembunuh telah merencanakan aksinya sejak lama. &quot;Pelaku yang mengetuk pintu depan sudah menggunakan penutup muka, sehingga sudah dipastikan pembunuhan ini berencana,&quot; ujar Firman.</p>');

#
# Structure for table "email_admin"
#

CREATE TABLE `email_admin` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "email_admin"
#

INSERT INTO `email_admin` VALUES (1,'mufidahanisa@gmail.com');

#
# Structure for table "migrations"
#

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "migrations"
#

INSERT INTO `migrations` VALUES (1,'2019_08_12_000000_create_users_table',1),(2,'2019_08_12_000001_create_tada_table',1),(3,'2019_08_12_000002_create_coffee_table',1),(4,'2019_08_12_000004_create_store_table',1),(5,'2019_08_12_000005_create_careers_table',1),(6,'2019_08_12_000006_create_merch_kategori_table',1),(7,'2019_08_12_000007_create_merch_table',1),(8,'2019_08_12_000008_create_jadwal_table',1),(9,'2019_08_12_000009_create_pelamar_table',1),(10,'2019_08_12_000010_create_password_resets_table',1),(11,'2019_08_12_000011_create_project_table',1);

#
# Structure for table "now"
#

CREATE TABLE `now` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `isi` text,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "now"
#

INSERT INTO `now` VALUES (1,'<p>Misteri pembunuh bertopeng terhadap keluarga di Kampung Gegeneng, RT 01 RW 01, Desa Sukadalam, Kecamatan Waringkurung, Serang, Banten, perlahan mulai menemukan titik terang. Polisi telah mengidentifikasi pelaku.</p>\r\n\r\n<p>EDITED</p>\r\n\r\n<p>&quot;Kalau identitas pelaku secara pasti belum. Namun, penyelidikan kita hari ini sudah mengerucut, ada beberapa nama yang sudah kita kantongi,&quot; kata Kasat Reskrim Polres Serang Kota AKP Ivan Adhitira, Rabu (14/8).</p>\r\n\r\n<p>Ivan optimistis dalam waktu dekat institusinya segera mengungkap dan menangkap pembunuh Rustandi (32) dan anaknya yang masih berusia 4 tahun itu. &quot;Kami harapkan secepat-cepatnya bisa terungkap,&quot; ujar dia.</p>\r\n\r\n<p>Dalam peristiwa itu, istri Rustandi, hanya Siti Saadiyah yang selamat. Siti mengalami luka tusuk di sekujur tubuhnya. Dia kini dirawat di RSUD Cilegon.</p>\r\n\r\n<p>Ivan sebelumnya menuturkan berdasarkan keterangan Siti, pelaku ada dua orang. Dua pelaku itu mengenakan topeng dan mengetok pintu rumah Rustandi pada Selasa (13/8) dini hari sekitar pukul 02.00 WIB.</p>\r\n\r\n<p>Kapolres Serang, AKBP Firman Affandi, meyakini pembunuh telah merencanakan aksinya sejak lama. &quot;Pelaku yang mengetuk pintu depan sudah menggunakan penutup muka, sehingga sudah dipastikan pembunuhan ini berencana,&quot; ujar Firman.</p>');

#
# Structure for table "password_resets"
#

CREATE TABLE `password_resets` (
  `email` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `token` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "password_resets"
#


#
# Structure for table "tada"
#

CREATE TABLE `tada` (
  `idtada` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idtada`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "tada"
#

INSERT INTO `tada` VALUES (1,'Promo Summer','promo ini hannya berlaku dengan pembayaran menggunakan TADA silahkan scan gambar dibawah ini','b.png');

#
# Structure for table "time"
#

CREATE TABLE `time` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `time` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;

#
# Data for table "time"
#

INSERT INTO `time` VALUES (1,'00:00'),(2,'00:30'),(3,'01:00'),(4,'01:30'),(5,'02:00'),(6,'02:30'),(7,'03:00'),(8,'03:30'),(9,'04:00'),(10,'04:30'),(11,'05:00'),(12,'05:30'),(13,'06:00'),(14,'06:30'),(15,'07:00'),(16,'07:30'),(17,'08:00'),(18,'08:30'),(19,'09:00'),(20,'09:30'),(21,'10:00'),(22,'10:30'),(23,'11:00'),(24,'11:30'),(25,'12:00'),(26,'12:30'),(27,'13:00'),(28,'13:30'),(29,'14:00'),(30,'14:30'),(31,'15:00'),(32,'15:30'),(33,'16:00'),(34,'16:30'),(35,'17:00'),(36,'17:30'),(37,'18:00'),(38,'18:30'),(39,'19:00'),(40,'19:30'),(41,'20:00'),(42,'20:30'),(43,'21:00'),(44,'21:30'),(45,'22:00'),(46,'22:30'),(47,'23:00'),(48,'23:30\r\n');

#
# Structure for table "users"
#

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verrifed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "users"
#

INSERT INTO `users` VALUES (1,'Anisa Mufidah','$2y$10$h0rUB.tDLVeGxrwr9149iuCVeBhfIQRtzDNWvNCp4QeeBxwlKVEou','mufidahanisa@gmail.com',NULL,NULL,'2019-08-12 15:26:44','2019-08-12 15:26:44'),(2,'Anisa Mufidah','$2y$10$/vCLL4zDKpLUS/IxuywOMev7HAG6XT8L39RTpQju.exxGUNN0r3Sm','aldis289@gmail.com',NULL,NULL,'2019-08-12 15:54:44','2019-08-12 15:54:44');

#
# Structure for table "store"
#

CREATE TABLE `store` (
  `id_store` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_store` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` text COLLATE utf8mb4_unicode_ci,
  `users_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_store`),
  KEY `fk_store_user1_idx` (`users_id`),
  CONSTRAINT `fk_store_user1_idx` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "store"
#

INSERT INTO `store` VALUES (1,'Pondok Indah Mall','Pondok Indah','ombe-pluit-1.jpg',1),(2,'Summarecon Mal Bekasi','Bekasi','bekasi.jpg',1),(3,'Pantai Indah Kapuk','Pantai Indah Kapuk','pik.jpg',1),(4,'Kelapa Gading','Kelapa Gading','klpgading.jpg',1);

#
# Structure for table "careers"
#

CREATE TABLE `careers` (
  `idcareers` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `posisi` varchar(70) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `store_id_store` int(10) unsigned NOT NULL,
  `users_id` int(10) unsigned NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idcareers`),
  KEY `fk_careers_user1_idx` (`users_id`),
  KEY `fk_careers_store_idx` (`store_id_store`),
  CONSTRAINT `fk_careers_store_idx` FOREIGN KEY (`store_id_store`) REFERENCES `store` (`id_store`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_careers_user1_idx` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "careers"
#

INSERT INTO `careers` VALUES (1,'Quality Analyst','<p>menjadi Quality Analyst</p>\r\n',1,1,'y.jpg');

#
# Structure for table "pelamar"
#

CREATE TABLE `pelamar` (
  `idpelamar` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_store` int(10) unsigned NOT NULL DEFAULT '0',
  `nama` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `careers_idcareers` int(10) unsigned NOT NULL,
  `email` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idpelamar`),
  KEY `fk_table1_store1_idx` (`id_store`),
  KEY `fk_pelamar_careers1_idx` (`careers_idcareers`),
  CONSTRAINT `fk_pelamar_careers1_idx` FOREIGN KEY (`careers_idcareers`) REFERENCES `careers` (`idcareers`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_table1_store1_idx` FOREIGN KEY (`id_store`) REFERENCES `store` (`id_store`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "pelamar"
#

INSERT INTO `pelamar` VALUES (5,1,'apel',1,'mufidahanisa@gmail.com'),(8,1,'anisa',1,'mufidahanisa@gmail.com'),(9,1,'apel',1,'1512503192@student.budiluhur.ac.id'),(10,1,'ikan bakar',1,'muf@gmail.com'),(11,1,'anisa',1,'aldis289@gmail.com'),(12,1,'mata',1,'aldis289@gmail.com'),(13,1,'anisa',1,'1512503192@student.budiluhur.ac.id'),(14,1,'anisa',1,'1512503192@student.budiluhur.ac.id'),(15,1,'anisa',1,'1512503192@student.budiluhur.ac.id'),(16,1,'anisa',1,'1512503192@student.budiluhur.ac.id'),(17,1,'anisa',1,'1512503192@student.budiluhur.ac.id'),(18,1,'putra tekno asia',1,'denin.resky@gmail.com');

#
# Structure for table "jadwal"
#

CREATE TABLE `jadwal` (
  `idjadwal` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `hari` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jam_buka` text COLLATE utf8mb4_unicode_ci,
  `jam_tutup` text COLLATE utf8mb4_unicode_ci,
  `store_id_store` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idjadwal`),
  KEY `fk_jadwal_store1_idx` (`store_id_store`),
  CONSTRAINT `fk_jadwal_store1_idx` FOREIGN KEY (`store_id_store`) REFERENCES `store` (`id_store`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "jadwal"
#

INSERT INTO `jadwal` VALUES (5,'Monday','01:30','03:30',1),(8,'Tuesday','07:00','15:00',1),(9,'Monday','08:30','17:30',2),(10,'Tuesday','08:30','17:30',2),(11,'Monday','09:00','19:00',3),(12,'Tuesday','09:00','19:00',3),(13,'Monday','10:00','21:00',4),(14,'Tuesday','10:00','21:00',4);

#
# Structure for table "project"
#

CREATE TABLE `project` (
  `idproject` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `project_name` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `pict` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `users_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idproject`),
  KEY `fk_project_users1_idx` (`users_id`),
  CONSTRAINT `fk_project_users1_idx` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "project"
#

INSERT INTO `project` VALUES (1,'Coffe Tour','<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores hic numquam, debitis quidem dolorem magni mollitia iste ab vero cum minus, harum corporis! Repellat laboriosam tenetur vero provident aliquid alias</p>','o.jpg',1),(2,'Indonesian Coffee Competition','<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores hic numquam, debitis quidem dolorem magni mollitia iste ab vero cum minus, harum corporis! Repellat laboriosam tenetur vero provident aliquid alias?</p>\r\n','IMG_5895.jpg',1),(3,'Coffe Event','<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores hic numquam, debitis quidem dolorem magni mollitia iste ab vero cum minus, harum corporis! Repellat laboriosam tenetur vero provident aliquid alias</p>\r\n','IMG_5894-718d4.jpg',1);

#
# Structure for table "people"
#

CREATE TABLE `people` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `people_name` varchar(255) DEFAULT NULL,
  `pict` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `users_id` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`Id`),
  KEY `users_id` (`users_id`),
  CONSTRAINT `people_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "people"
#

INSERT INTO `people` VALUES (1,'anisa','2.jpg','<p>haiiiiiiiiiiiiiii</p>\r\n',1);

#
# Structure for table "merch_kategori"
#

CREATE TABLE `merch_kategori` (
  `idmerchkategori` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `merch_name` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `users_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idmerchkategori`),
  KEY `fk_merch_kategori_user1_idx` (`users_id`),
  CONSTRAINT `fk_merch_kategori_user1_idx` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "merch_kategori"
#

INSERT INTO `merch_kategori` VALUES (1,'Filter Beans',1),(2,'Pin',1),(3,'WorkShirt',1);

#
# Structure for table "merch"
#

CREATE TABLE `merch` (
  `idmerch` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pic` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idmerch_kategori` int(10) unsigned NOT NULL,
  `harga` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idmerch`),
  KEY `fk_merch_kategori_merch1_idx` (`idmerch_kategori`),
  CONSTRAINT `fk_merch_kategori_merch1_idx` FOREIGN KEY (`idmerch_kategori`) REFERENCES `merch_kategori` (`idmerchkategori`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "merch"
#

INSERT INTO `merch` VALUES (1,'Filter beans limited edition','omb-logo.png',1,'20000'),(2,'WorkShirt limited edition','1.jpeg',3,'200000'),(3,'Pin series 3','71sJlSCstzL-_UX679_.jpg',2,'25000'),(4,'Pin series 1','uy.jpg',2,'28000'),(5,'Pin Series 2','r.jpg',2,'25000'),(6,'WorkShirt series 2','2.png',3,'220000');

#
# Structure for table "guides"
#

CREATE TABLE `guides` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `step` text,
  `pict` varchar(255) DEFAULT NULL,
  `users_id` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`Id`),
  KEY `users_id` (`users_id`),
  CONSTRAINT `guides_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

#
# Data for table "guides"
#

INSERT INTO `guides` VALUES (1,'Make Americano','<ol>\r\n\t<li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos, dolores eos dolorem reiciendis doloribus, veritatis fuga ipsum harum magni, quod quo excepturi eum vero consequatur earum vel asperiores veniam commodi!<img alt=\"\" src=\"https://www.roastycoffee.com/wp-content/uploads/irene-coco-153263-unsplash-800x530.jpg\" style=\"height:530px; width:800px\" /></li>\r\n\t<li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos, dolores eos dolorem reiciendis doloribus, veritatis fuga ipsum harum magni, quod quo excepturi eum vero consequatur earum vel asperiores veniam commodi!&nbsp;<img alt=\"\" src=\"https://www.roastycoffee.com/wp-content/uploads/karl-fredrickson-35017-unsplash-800x533.jpg\" style=\"height:533px; width:800px\" /></li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n','dd.jpg',1),(2,'Highcharts Demo','<p>step</p>\r\n','a.jpg',1),(3,'test','<p>isufisj</p>\r\n','ICE-DOUBLE-WHITE.jpg',1),(4,'test','<p>yyy</p>\r\n','r.jpg',1);
