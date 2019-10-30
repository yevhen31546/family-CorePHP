/*
SQLyog Community v13.1.5  (64 bit)
MySQL - 10.4.6-MariaDB : Database - zenplan_dk_db
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`zenplan_dk_db` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `zenplan_dk_db`;

/*Table structure for table `tbl_users` */

DROP TABLE IF EXISTS `tbl_users`;

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `user_email` varchar(100) DEFAULT NULL,
  `phone_no` varchar(100) DEFAULT NULL,
  `note` varchar(100) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

/*Data for the table `tbl_users` */

insert  into `tbl_users`(`id`,`first_name`,`last_name`,`password`,`user_email`,`phone_no`,`note`,`created_by`,`created_date`) values 
(12,'tertert','ertert',NULL,'dssdf@sdfsd.com','134344234234234','werwerwerwerwer',1,'2019-10-16'),
(8,'abcdewerwerwerwer','eeeererwerwerwer',NULL,'eee@gdb.com','123456','rtyuuu',1,'2019-10-16'),
(9,'abcde','eeee',NULL,'eee@gdb.com','123456','rtyuuu',1,'2019-10-16'),
(10,'abcde','eeee',NULL,'eee@gdb.com','123456','rtyuuu',1,'2019-10-16'),
(11,'abcde','eeee',NULL,'eee@gdb.com','123456','rtyuuu',1,'2019-10-16'),
(13,'aaaaaa','eeeeeeee','$2y$10$0X3bxVrTffwDqwXnycr5KOibrgknsB65v1YKaRNlne/jIuhnHGeyq','test@gmail.com','57567567weer','werwer',1,'2019-10-18'),
(15,'testcreatedbye','testcreatedbye','$2y$10$Lqvb/igG/MjtRKd4uOoVmeYpm.zbpYvm0sOYU7Gz7xMKFTu4fI/ki','testcreatedbye@gmail.com','1234567','rtyrtytrytry',13,'2019-10-18');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
