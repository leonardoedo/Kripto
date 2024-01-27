/*
SQLyog Community v13.2.0 (64 bit)
MySQL - 10.4.24-MariaDB : Database - toko_abc
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`toko_abc` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `toko_abc`;

/*Table structure for table `barang` */

DROP TABLE IF EXISTS `barang`;

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `ket` varchar(100) DEFAULT NULL,
  `foto` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `barang` */

insert  into `barang`(`id`,`nama`,`harga`,`jumlah`,`ket`,`foto`) values 
(1,'Aglonema Suksomasi2',45000,10,'','user.png'),
(4,'cewo bayaran',10000,1,'','natan.jpg'),
(10,'PO',10000,12,'aa','mar.jpg'),
(11,'ayu',10000,1,'','elek.jpg');

/*Table structure for table `member` */

DROP TABLE IF EXISTS `member`;

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `nama_member` varchar(40) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `telp` varchar(30) DEFAULT NULL,
  `alamat` varchar(60) DEFAULT NULL,
  `kota` varchar(40) DEFAULT NULL,
  `provinsi` varchar(40) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `foto` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `member` */

insert  into `member`(`id`,`nama_member`,`email`,`telp`,`alamat`,`kota`,`provinsi`,`gender`,`username`,`password`,`foto`) values 
(1,'Agus Barongan','Agus12@gmail.com','08123','Jl. Mawar 212','Semarang','Jawa Tengah','L','Agus','123','agus.jpg'),
(2,'Joko','Joko1@gmail.com','0831','Jl. Pahlawan','Semarang','Jawa Tengah','L','Joko','123','joko.jpg'),
(3,'Rina','Rina12@gmail.com','0231','JL Mlati','Yogyakarta','DIY','P','Rina','123','rina.jpg');

/*Table structure for table `tborder` */

DROP TABLE IF EXISTS `tborder`;

CREATE TABLE `tborder` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idmember` int(10) NOT NULL,
  `tgl` date NOT NULL,
  `jenisBYR` varchar(20) DEFAULT NULL,
  `bank` varchar(40) DEFAULT NULL,
  `norek` varchar(40) DEFAULT NULL,
  `biayaKirim` double DEFAULT NULL,
  `pembelian` double DEFAULT NULL,
  `totalBYR` double DEFAULT NULL,
  `ekspedisi` varchar(40) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tborder` */

/*Table structure for table `tborder_detail` */

DROP TABLE IF EXISTS `tborder_detail`;

CREATE TABLE `tborder_detail` (
  `idorder` int(11) NOT NULL,
  `idbarang` int(11) NOT NULL,
  `jml` float NOT NULL,
  `hrg` int(11) NOT NULL,
  PRIMARY KEY (`idorder`,`idbarang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tborder_detail` */

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `iduser` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `user` */

insert  into `user`(`iduser`,`username`,`password`,`foto`) values 
(1,'admin','123','aglonemaSuksom.jpg'),
(2,'agus','123','foto1.jpg'),
(3,'joko','123','foto2.jpg'),
(4,'rina','123','foto3.jpg'),
(5,'giri','123','foto4.jpg');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
