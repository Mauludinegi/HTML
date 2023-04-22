/*
SQLyog Professional v12.4.3 (64 bit)
MySQL - 10.4.27-MariaDB : Database - a22100036_egi purnama m
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`a22100036_egi purnama m` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `a22100036_egi purnama m`;

/*Table structure for table `mahasiswa` */

DROP TABLE IF EXISTS `mahasiswa`;

CREATE TABLE `mahasiswa` (
  `no` int(100) NOT NULL AUTO_INCREMENT,
  `nim` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `no` (`nim`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `mahasiswa` */

insert  into `mahasiswa`(`no`,`nim`,`nama`,`email`,`jurusan`,`gambar`) values 
(1,'A22100036','Egi Purnama M','Mauludinegi@gmail.com','Teknik Informatika','0.20999000 1682188972.png'),
(2,'A2210004','Son Heung Min','Son@gmail.com','Teknik Informatika','0.84853900 1682189002.png'),
(3,'A2210001','Kaoru Mitoma','Mitoma@gmail.com','Teknik Informatika','0.04319800 1682189642.png'),
(4,'A2210002','Takumi Minamino','minamino@gmail.com','Teknik Informatika','0.87465200 1682189734.png'),
(5,'A2210003','Takefusa Kubo','kubo@gmail.com','Sistem Informasi','0.26820900 1682189806.png');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
