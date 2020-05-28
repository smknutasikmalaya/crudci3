-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.8-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for latihan
CREATE DATABASE IF NOT EXISTS `latihan` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `latihan`;

-- Dumping structure for table latihan.datasiswa
CREATE TABLE IF NOT EXISTS `datasiswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table latihan.datasiswa: ~5 rows (approximately)
/*!40000 ALTER TABLE `datasiswa` DISABLE KEYS */;
INSERT INTO `datasiswa` (`id`, `nama`, `alamat`, `jurusan`, `kelas`) VALUES
	(11, 'Disza Jatnika ', 'Buninagara 1\r\n', 'Rekayasa Perangkat Lunak', 'XII'),
	(12, 'Nopi Supriatna', 'Kalangsari', 'Rekayasa Perangkat Lunak', 'XII'),
	(13, 'Hasbi Komarudin', 'Buninagara 1', 'Rekayasa Perangkat Lunak', 'XII'),
	(14, 'Iqbal', 'Tasikmalaya', 'Rekayasa Perangkat Lunak', 'XII'),
	(15, 'Fikri Nurfazri', 'Argasari', 'Rekayasa Perangkat Lunak', 'XI');
/*!40000 ALTER TABLE `datasiswa` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
