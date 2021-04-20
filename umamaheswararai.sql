/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 10.4.18-MariaDB : Database - umamaheswararao
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`umamaheswararao` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `umamaheswararao`;

/*Table structure for table `multiple_users` */

DROP TABLE IF EXISTS `multiple_users`;

CREATE TABLE `multiple_users` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `user_fname` varchar(50) NOT NULL,
  `user_lname` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_gender` varchar(50) NOT NULL,
  `user_favcolor` varchar(50) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_status` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;

/*Data for the table `multiple_users` */

insert  into `multiple_users`(`user_id`,`user_name`,`user_fname`,`user_lname`,`user_email`,`user_gender`,`user_favcolor`,`user_password`,`user_status`) values 
(7,'umamaheswararao','Mahesh','Nani','umamaheswararao56@gmail.com','female','Blue,Red,Green,','02ea2ae2a237c042285e093e6972eaa9',1),
(8,'Mahesh','Ch','Sridevi','mahesh@vihangasritech.com','male','Blue,','3838573546a6df0f420ef4df425894e5',1),
(13,'umanani456','Ch','Sridevi','umamaheswararao56@gmail.com','female','Blue,Red,','202cb962ac59075b964b07152d234b70',1),
(14,'mahesh_fci@yahoo.com','Ch','Sridevi','umamaheswararao56@gmail.com','female','Blue,Red,Green,','68ce199ec2c5517597ce0a4d89620f55',1),
(18,'mahesh_fci@yahoo.com','Ch','Sridevi','umamaheswararao56@gmail.com','female','Blue,','81dc9bdb52d04dc20036dbd8313ed055',1),
(19,'mahesh_fci@yahoo.com','Ch','Sridevi','umamaheswararao56@gmail.com','male','Blue,','202cb962ac59075b964b07152d234b70',1),
(20,'mahesh_fci@yahoo.com','Ch','Sridevi','umamaheswararao56@gmail.com','male','Blue,','202cb962ac59075b964b07152d234b70',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
