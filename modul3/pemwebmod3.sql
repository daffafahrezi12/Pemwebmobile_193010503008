/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 10.4.14-MariaDB : Database - pemwebmod3
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`pemwebmod3` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `pemwebmod3`;

/*Table structure for table `departement` */

DROP TABLE IF EXISTS `departement`;

CREATE TABLE `departement` (
  `id_departement` int(11) NOT NULL,
  `nama_departement` varchar(20) NOT NULL,
  PRIMARY KEY (`id_departement`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `departement` */

insert  into `departement`(`id_departement`,`nama_departement`) values 
(1,'FT'),
(2,'FEB'),
(3,'FH');

/*Table structure for table `employee` */

DROP TABLE IF EXISTS `employee`;

CREATE TABLE `employee` (
  `id_employe` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `id_departement` int(11) NOT NULL,
  PRIMARY KEY (`id_employe`),
  KEY `id_departement` (`id_departement`),
  CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`id_departement`) REFERENCES `employee` (`id_employe`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `employee` */

insert  into `employee`(`id_employe`,`nama`,`id_departement`) values 
(1,'daffa',1),
(2,'fahrezi',2),
(3,'daffa fahrezi',3);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
