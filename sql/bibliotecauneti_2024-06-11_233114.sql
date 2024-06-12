-- MariaDB dump 10.19  Distrib 10.4.28-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: bibliotecauneti
-- ------------------------------------------------------
-- Server version	10.4.28-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clientes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(120) NOT NULL,
  `correo` varchar(120) NOT NULL,
  `telefonos` varchar(120) DEFAULT NULL,
  `eliminado` tinyint(1) NOT NULL,
  `fecha_eliminado` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `clientes_correo_unique` (`correo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) unsigned NOT NULL,
  `reserved_at` int(10) unsigned DEFAULT NULL,
  `available_at` int(10) unsigned NOT NULL,
  `created_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;

--
-- Table structure for table `libros`
--

DROP TABLE IF EXISTS `libros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `libros` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `caratula` varchar(120) NOT NULL,
  `titulo` varchar(120) NOT NULL,
  `ano_publica` year(4) NOT NULL,
  `autor` varchar(120) NOT NULL,
  `edicion` smallint(6) NOT NULL,
  `ejemplares` smallint(6) NOT NULL,
  `disponibles` smallint(6) NOT NULL,
  `eliminado` tinyint(1) NOT NULL,
  `fecha_eliminado` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `libros`
--

/*!40000 ALTER TABLE `libros` DISABLE KEYS */;
INSERT INTO `libros` VALUES (1,'img/00.png','Prueba1',2010,'Agustin Prieto Figueroa',1,2,2,0,NULL,'2024-06-08 09:46:20',NULL),(2,'img/00.png','Prueba2 Aprendiendo C++',2005,'Hans Zinerman & William Frederesky',2,3,3,0,NULL,'2024-06-08 09:46:20',NULL),(3,'img/00.png','Prueba3 Programando AutoLisp',1998,'Un viejito loco llamado Gonzo Pereira',1,1,1,0,NULL,'2024-06-08 09:46:20',NULL),(4,'img/00.png','Aprendiendo Python para principiantes (una mirada rápida en el mundo de la programación)',2016,'Nicolas Swhangers',1,2,2,0,NULL,'2024-06-08 09:46:20',NULL),(5,'C:\\xampp\\tmp\\php9774.tmp','Aprendiendo Python',2000,'Gus Wander',1,1,1,0,NULL,'2024-06-12 06:08:36','2024-06-12 06:08:36'),(6,'img/6.png','Angular JS',2020,'Juan Garcia',1,11,11,0,NULL,'2024-06-12 06:10:31','2024-06-12 06:10:31'),(7,'img/7.png','Android',2015,'For Professionals',2,3,3,0,NULL,'2024-06-12 06:14:55','2024-06-12 06:14:55'),(8,'img/8.png','Bash',2015,'joaquin phoenix',2,2,2,0,NULL,'2024-06-12 06:16:34','2024-06-12 06:16:34'),(9,'img/9.png','html',2015,'probando',2,2,2,0,NULL,'2024-06-12 06:18:20','2024-06-12 06:18:20'),(10,'img/10.png','mysql',1902,'kiko',2,2,2,0,NULL,'2024-06-12 06:19:46','2024-06-12 06:19:46'),(11,'img/11.png','bandera',2000,'prueba2',2,2,2,0,NULL,'2024-06-12 06:22:56','2024-06-12 06:22:56'),(12,'img/12.png','tera',2023,'dsdsa',3,3,3,0,NULL,'2024-06-12 06:25:02','2024-06-12 06:25:02'),(13,'img/13.png','prueba',2000,'aaaaa',3,3,3,0,NULL,'2024-06-12 06:25:57','2024-06-12 06:25:57'),(14,'img/14.png','Diseño de Sistemas Distribuidos',2000,'asdsdsds',2,2,2,0,NULL,'2024-06-12 06:26:37','2024-06-12 06:26:37'),(15,'img/15.png','dot',2013,'Juan Garcia',2,2,2,0,NULL,'2024-06-12 06:28:09','2024-06-12 06:28:09'),(16,'img/16.png','esp',2000,'Gus Wander',1,3,3,0,NULL,'2024-06-12 06:29:06','2024-06-12 06:29:06'),(17,'img/17.png','HTML',2000,'prueba2',2,2,2,0,NULL,'2024-06-12 06:30:10','2024-06-12 06:30:10'),(18,'img/18.png','prueba',2000,'aaaaa',2,2,2,0,NULL,'2024-06-12 06:30:41','2024-06-12 06:30:41'),(19,'img/19.png','prueba',2000,'ssasasa',2,2,2,0,NULL,'2024-06-12 06:31:43','2024-06-12 06:31:43'),(20,'img/20.png','Diseño de Sistemas Distribuidos',2000,'sadsfds',2,2,2,0,NULL,'2024-06-12 06:34:13','2024-06-12 06:34:13'),(21,'img/21.png','asas',2000,'sasa',2,2,2,0,NULL,'2024-06-12 06:35:30','2024-06-12 06:35:30'),(22,'img/22.png','Aprendiendo Python',2000,'sasasa',2,3,3,0,NULL,'2024-06-12 07:23:26','2024-06-12 07:23:26'),(23,'img/23.png','Aprendiendo Python',2000,'Gus Wander',1,1,1,0,NULL,'2024-06-12 07:30:03','2024-06-12 07:30:03');
/*!40000 ALTER TABLE `libros` ENABLE KEYS */;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'0001_01_01_000000_create_users_table',1),(2,'0001_01_01_000001_create_cache_table',1),(3,'0001_01_01_000002_create_jobs_table',1),(4,'2024_06_07_150912_create_libros_table',1),(5,'2024_06_07_150929_create_clientes_table',1),(6,'2024_06_07_150941_create_prestamos_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;

--
-- Table structure for table `prestamos`
--

DROP TABLE IF EXISTS `prestamos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prestamos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `en_curso` tinyint(1) NOT NULL,
  `devolucion` date DEFAULT NULL,
  `id_cliente` bigint(20) unsigned NOT NULL,
  `id_libro` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `prestamos_id_cliente_foreign` (`id_cliente`),
  KEY `prestamos_id_libro_foreign` (`id_libro`),
  CONSTRAINT `prestamos_id_cliente_foreign` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id`),
  CONSTRAINT `prestamos_id_libro_foreign` FOREIGN KEY (`id_libro`) REFERENCES `libros` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prestamos`
--

/*!40000 ALTER TABLE `prestamos` DISABLE KEYS */;
/*!40000 ALTER TABLE `prestamos` ENABLE KEYS */;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('c5Lyy2LTy8GwtL3OJxLdmolAZZYM1ZjUdnUfAg20',1,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36','YTo0OntzOjY6Il90b2tlbiI7czo0MDoibEF5cTQzV2NPYTNvTVliTEloVk1wWDhjb1YxNkcxd25nTkZ5N0lPaiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9saWJyb3MvY3JlYXRlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9',1718163009);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin','admin@gmail.com','2024-06-08 09:46:20','$2y$12$dmTdgT2H/QsVFDa9ywy8GOUnffNPVnT5UTNT1mp6p6pOC1cSuYIPG','rPOpILv4LcMbM0xuTgL2HHP3MmdwdTDpWAdjnAAGZiI2MbrIvK7Kqek72nA9','2024-06-08 09:46:21','2024-06-08 09:46:21');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

--
-- Dumping routines for database 'bibliotecauneti'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-06-11 23:31:17
