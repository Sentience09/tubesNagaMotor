-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.4.3 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for tubesnagamotor
CREATE DATABASE IF NOT EXISTS `tubesnagamotor` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `tubesnagamotor`;

-- Dumping structure for table tubesnagamotor.cache
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` bigint NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tubesnagamotor.cache: ~0 rows (approximately)

-- Dumping structure for table tubesnagamotor.cache_locks
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` bigint NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_locks_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tubesnagamotor.cache_locks: ~0 rows (approximately)

-- Dumping structure for table tubesnagamotor.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`),
  KEY `failed_jobs_connection_queue_failed_at_index` (`connection`,`queue`,`failed_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tubesnagamotor.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table tubesnagamotor.jobs
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` smallint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tubesnagamotor.jobs: ~0 rows (approximately)

-- Dumping structure for table tubesnagamotor.job_batches
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tubesnagamotor.job_batches: ~0 rows (approximately)

-- Dumping structure for table tubesnagamotor.mereks
CREATE TABLE IF NOT EXISTS `mereks` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama_merek` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tubesnagamotor.mereks: ~9 rows (approximately)
INSERT INTO `mereks` (`id`, `nama_merek`, `created_at`, `updated_at`) VALUES
	(1, 'Honda Civic', '2026-06-19 03:33:55', '2026-06-19 03:33:55'),
	(2, 'Bugatti', '2026-06-20 22:24:30', '2026-06-20 22:24:30'),
	(3, 'Pagani', '2026-06-20 22:30:37', '2026-06-20 22:30:37'),
	(4, 'Lamborghini', '2026-06-20 22:31:04', '2026-06-20 22:31:04'),
	(5, 'Ferrari', '2026-06-20 22:31:11', '2026-06-20 22:31:11'),
	(6, 'Porsche', '2026-06-20 22:31:19', '2026-06-20 22:31:19'),
	(7, 'Aston Martin', '2026-06-20 22:31:26', '2026-06-20 22:31:26'),
	(8, 'McLaren', '2026-06-20 22:31:37', '2026-06-20 22:31:37'),
	(9, 'Koenigsegg', '2026-06-20 22:31:59', '2026-06-20 22:31:59');

-- Dumping structure for table tubesnagamotor.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tubesnagamotor.migrations: ~7 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '0001_01_01_000000_create_users_table', 1),
	(2, '0001_01_01_000001_create_cache_table', 1),
	(3, '0001_01_01_000002_create_jobs_table', 1),
	(4, '2026_06_04_090454_create_pesans_table', 1),
	(5, '2026_06_04_090500_create_mereks_table', 1),
	(6, '2026_06_04_090525_create_mobils_table', 1),
	(7, '2026_06_19_120418_add_detail_columns_to_mobils_table', 2);

-- Dumping structure for table tubesnagamotor.mobils
CREATE TABLE IF NOT EXISTS `mobils` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `merek_id` bigint unsigned NOT NULL,
  `nama_mobil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` bigint NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Tersedia','Terjual') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Tersedia',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tahun` int DEFAULT NULL,
  `tenaga_hp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mesin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `torsi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transmisi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `akselerasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `mobils_merek_id_foreign` (`merek_id`),
  CONSTRAINT `mobils_merek_id_foreign` FOREIGN KEY (`merek_id`) REFERENCES `mereks` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tubesnagamotor.mobils: ~10 rows (approximately)
INSERT INTO `mobils` (`id`, `merek_id`, `nama_mobil`, `harga`, `deskripsi`, `foto`, `status`, `created_at`, `updated_at`, `tahun`, `tenaga_hp`, `mesin`, `torsi`, `transmisi`, `akselerasi`) VALUES
	(2, 2, 'Bugatti Chiron', 48000000000, 'Dilahirkan untuk mendominasi jalanan, Bugatti Chiron adalah simbol kemewahan mutakhir dan kekuatan absolut yang hanya diciptakan sebanyak 500 unit di dunia. Di balik bodi serat karbonnya yang ikonik dan aerodinamis, bersemayam mesin legendaris 8.0L Quad-Turbo W16 yang siap melepaskan 1.479 tenaga kuda murni untuk melesatkan Anda hingga kecepatan 420 km/jam. Masuki kabin ultra-eksklusif tanpa layar digital yang abadi, nikmati kemewahan audio berlapis berlian, dan rasakan sensasi berkendara paling prestisius yang mendefinisikan ulang batas kemampuan sebuah mahakarya otomotif dunia.', '20260621071602.png', 'Tersedia', '2026-06-20 22:50:11', '2026-06-21 02:20:37', 2026, NULL, NULL, NULL, NULL, NULL),
	(3, 3, 'Pagani Huayra', 50000000000, 'Bukan sekadar hypercar, Pagani Huayra adalah mahakarya seni berjalan eksklusif buatan Italia yang memadukan romansa mesin 6.0L Twin-Turbo V12 ikonik rakitan tangan Mercedes-AMG dengan bodi Carbo-Titanium yang sangat ringan. Dihiasi pintu Gullwing yang dramatis, sistem aerodinamika aktif yang membelah angin dengan presisi, serta kemewahan interior mekanikal bak arloji mewah Swiss, Huayra adalah simbol puncak pencapaian hidup yang hanya bisa dimiliki oleh segelintir kolektor elit di dunia.', '20260621065223.jpg', 'Tersedia', '2026-06-20 22:52:23', '2026-06-20 22:52:23', NULL, NULL, NULL, NULL, NULL, NULL),
	(4, 4, 'Lamborghini Huracan LP610-4 Coupe', 10200000000, 'Ketika supercar modern beralih ke era turbo dan listrik, Lamborghini Huracan berdiri tegak sebagai ikon abadi yang mempertahankan kejayaan mesin legendaris 5.2L Naturally Aspirated V10. Dirancang dengan garis bodi tajam yang terinspirasi dari geometri jet tempur siluman, setiap deru mesinnya memuntahkan hingga 640 tenaga kuda murni langsung ke aspal tanpa intervensi turbo—menghasilkan lengkingan suara mekanis yang menggetarkan jiwa. Melalui kokpit bergaya jet tempur yang dilengkapi kontrol mutakhir dan sistem penggerak roda cerdas, Huracan bukan sekadar alat transportasi berkecepatan tinggi, melainkan sebuah instrumen kepuasan berkendara mutlak bagi mereka yang menolak untuk menjadi biasa di jalan raya.', '20260621065727.jpg', 'Tersedia', '2026-06-20 22:57:27', '2026-06-21 02:57:51', 2014, '400 HP', '411 V13', '700 lb-ft', '5-Speed Matic', '2.2 Seconds'),
	(5, 5, 'Ferrari 458 Italia', 7150000000, 'Ferrari 458 Italia bukanlah sekadar mobil sport biasa, melainkan sebuah monumen sejarah yang menandai akhir dari era kejayaan mesin 4.5L Naturally Aspirated V8 murni dari sang kuda jingkrak. Dirancang dengan sentuhan magis rumah desain legendaris Pininfarina, 458 Italia memuntahkan 562 tenaga kuda murni langsung ke roda belakang tanpa bantuan turbo—menghasilkan lengkingan suara knalpot F1 bernada tinggi yang murni, tajam, dan mustahil ditiru oleh mobil modern saat ini. Dengan teknologi sasis yang dikembangkan langsung oleh legenda balap Michael Schumacher dan transmisi dual-clutch secepat kilat, memiliki Ferrari 458 Italia berarti memiliki investasi otomotif terbaik yang nilainya terus meroket di dunia, sekaligus tiket eksklusif menuju kemurnian adrenalin berkendara yang sesungguhnya', '20260621071801.jpg', 'Tersedia', '2026-06-20 22:58:41', '2026-06-20 23:18:01', NULL, NULL, NULL, NULL, NULL, NULL),
	(6, 6, 'Porsche 911 GT3 RS', 10380000000, 'Porsche 911 GT3 RS bukanlah sekadar mobil sport pelesir, melainkan jet darat sirkuit ekstrem yang dihomologasi khusus agar legal dipacu di jalan umum. Dipersenjatai mesin legendaris 4.0L Naturally Aspirated Flat-Six yang mampu berteriak beringas hingga 9.000 rpm, monster ini memuntahkan 525 tenaga kuda murni dengan raungan mekanis khas Jerman yang presisi. Didesain radikal dengan sayap belakang raksasa berteknologi DRS ala Formula 1 serta sistem aerodinamika aktif yang menciptakan gaya tekan gravitasi masif (downforce), GT3 RS memotong angin dengan kejam di setiap tikungan. Di dalam kokpitnya yang murni serat karbon, setiap tombol di setir memberi kontrol langsung untuk mengubah traksi dan suspensi secara instan—menjadikan Porsche 911 GT3 RS sebagai puncak dari rekayasa balap tanpa kompromi bagi para pemuja kecepatan murni.', '20260621070021.jpg', 'Tersedia', '2026-06-20 23:00:21', '2026-06-20 23:00:21', NULL, NULL, NULL, NULL, NULL, NULL),
	(7, 7, 'Aston Martin Valkyrie', 65000000000, 'Diciptakan dari ambisi ekstrem hasil kolaborasi jenius antara Aston Martin dan pakar aerodinamika F1 Adrian Newey (Red Bull Racing), Valkyrie bukanlah sekadar hypercar biasa—ia adalah jet darat murni yang dilegalkan untuk jalan raya. Jantung mekanisnya ditenagai oleh mesin 6.5L Naturally Aspirated V12 racikan Cosworth berteknologi hibrida yang sanggup berteriak beringas hingga 11.100 RPM, menyemburkan 1.160 tenaga kuda murni ke aspal. Desain bodinya didominasi terowongan udara bawah lantai radikal ala jet tempur, menciptakan gaya tekan gravitasi (downforce) luar biasa yang membuat mobil ini melekat magis di setiap tikungan tajam. Begitu ekstrem dan bisingnya raungan mesin di kokpit serat karbonnya, setiap pemilik dibekali sebuah headset peredam suara kelas helikopter agar gendang telinga Anda tetap aman saat memacu batas adrenalin tertinggi dalam sejarah otomotif dunia', '20260621070248.jpg', 'Tersedia', '2026-06-20 23:02:48', '2026-06-20 23:02:48', NULL, NULL, NULL, NULL, NULL, NULL),
	(8, 8, 'McLaren Senna', 31000000000, 'Mengusung nama besar pembalap legendaris Formula 1 Ayrton Senna, karya seni radikal dari ⁠McLaren Ultimate Series ini diciptakan tanpa kompromi hanya sebanyak 500 unit di dunia. Di balik panel bodi serat karbon ultra-ringan seberat 1,1 ton, tertanam mesin monster 4.0L Twin-Turbocharged V8 yang memuntahkan 789 tenaga kuda murni untuk melesatkan Anda dari 0 ke 100 km/jam hanya dalam 2,8 detik. Didominasi sayap belakang hidrolik raksasa yang aktif menahan gravitasi bumi serta panel pintu kaca transparan yang mengekspos aspal jalanan, Senna bukan sekadar dirancang untuk membelah angin—ia dirancang untuk menaklukkan setiap sirkuit dan mendominasi jalanan dengan koneksi mekanis paling murni antara pengemudi dan kecepatan absolut', '20260621070403.jpg', 'Tersedia', '2026-06-20 23:04:03', '2026-06-20 23:04:03', NULL, NULL, NULL, NULL, NULL, NULL),
	(9, 9, 'Koenigsegg Jesko', 65000000000, 'Bukan sekadar hypercar, Koenigsegg Jesko adalah sebuah megacar revolusioner asal Swedia yang diciptakan untuk mendikte ulang hukum fisika. Dipersenjatai jantung mekanis 5.0L Twin-Turbo V12/V8 yang memuntahkan 1.600 tenaga kuda brutal, monster ini dikendalikan oleh transmisi radikal Light Speed Transmission (LST) 9-percepatan yang mampu berpindah gigi secepat kedipan mata. Melalui opsi varian Attack dengan sayap aerodinamis masif penantang gravitasi atau varian Absolut sang pemburu rekor kecepatan dunia menembus 480 km/jam, Jesko dibungkus oleh bodi serat karbon ultra-ringan dan teknologi pintu hidrolik Autoskin yang magis. Memiliki Koenigsegg Jesko adalah pernyataan kasta tertinggi—sebuah simbol dominasi absolut yang menempatkan Anda di puncak rantai makanan otomotif jagat raya.', '20260621070504.jpg', 'Tersedia', '2026-06-20 23:05:04', '2026-06-20 23:06:22', NULL, NULL, NULL, NULL, NULL, NULL),
	(10, 4, 'Lamborghini Aventador SVJ', 18500000000, 'Tajam, agresif, dan sangat ikonik, Lamborghini Aventador adalah definisi murni dari sebuah supercar poster dinding yang menggetarkan dunia. Menjadi simbol kejayaan mesin 6.5L Naturally Aspirated V12 tanpa bantuan turbo, mahakarya asal Italia ini melesatkan 700 hingga 770 tenaga kuda murni dengan raungan knalpot dramatis yang melengking layaknya jet tempur. Dilengkapi pintu gunting (Scissor Doors) yang legendaris, sasis monokok serat karbon tingkat tinggi, serta desain bodi radikal yang selalu menjadi pusat perhatian di mana pun ia berada, Aventador bukan sekadar mobil berperforma tinggi. Ia adalah sebuah pernyataan status, otoritas, dan keberanian mutlak bagi mereka yang ingin mendominasi jalanan dengan kasta tertinggi sang banteng mengamuk.', '20260621071025.jpg', 'Tersedia', '2026-06-20 23:10:25', '2026-06-20 23:10:25', NULL, NULL, NULL, NULL, NULL, NULL),
	(12, 5, 'Ferrari SF90 Stradale', 1000000000000, 'Frarriiiiiiii rattatatatatatatatatatat', '20260621093035.jpg', 'Tersedia', '2026-06-21 01:30:35', '2026-06-21 01:30:35', 2000, '400 HP', '411 V12', '600 lb-ft', '5-Speed Matic', '2.2 Seconds');

-- Dumping structure for table tubesnagamotor.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tubesnagamotor.password_reset_tokens: ~0 rows (approximately)

-- Dumping structure for table tubesnagamotor.pesans
CREATE TABLE IF NOT EXISTS `pesans` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama_pengirim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesan_teks` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tubesnagamotor.pesans: ~4 rows (approximately)
INSERT INTO `pesans` (`id`, `nama_pengirim`, `no_hp`, `pesan_teks`, `created_at`, `updated_at`) VALUES
	(1, 'Andre Astamam', '085338783209', 'Honda Civic', '2026-06-19 03:38:40', '2026-06-19 03:38:40'),
	(2, 'Andre Astamam', '085338783209', 'wuling', '2026-06-20 01:42:31', '2026-06-20 01:42:31'),
	(3, 'Andre Astamam', '085338783209', 'Saya tertarik dengan mobil Ferrari SF90 Stradale', '2026-06-21 01:31:06', '2026-06-21 01:31:06'),
	(4, 'bubaga', '08721928312', 'Saya tertarik dengan mobil Ferrari SF90 Stradale', '2026-06-21 04:34:54', '2026-06-21 04:34:54');

-- Dumping structure for table tubesnagamotor.sessions
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tubesnagamotor.sessions: ~1 rows (approximately)
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('KwQNz9scWdY4WBTXxAS0npnvq5B8vBEQxYGMmLna', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Safari/537.36 OPR/132.0.0.0', 'eyJfdG9rZW4iOiJsdERiMzJmRVh3bmswVUhudTJQYTk3bUxJdjA3NUFKZ1lZMGVSdUowIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MDAwXC9hZG1pblwvZGFzaGJvYXJkIiwicm91dGUiOiJhZG1pbi5kYXNoYm9hcmQifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119LCJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI6MX0=', 1782048023);

-- Dumping structure for table tubesnagamotor.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tubesnagamotor.users: ~2 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Administrator', 'admin@gmail.com', NULL, '$2y$12$tFCIyeOOLtn6MSkpQ8VSLOe3ArM5ObYWw3HYY2gOiF/iZKG69bVSW', NULL, '2026-06-19 03:31:31', '2026-06-19 03:31:31'),
	(2, 'vano', 'vano@gmail.com', NULL, '$2y$12$set35pBjKGTrpMfGCAHTb.U9rolvgPzeR1s09zew5rUSOzYVyxU/u', NULL, '2026-06-19 03:31:31', '2026-06-19 03:31:31');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
