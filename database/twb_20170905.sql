/*
SQLyog Community
MySQL - 5.7.16-0ubuntu0.16.04.1 : Database - twb_live
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `categories` */

CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `created_by_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `categories` */

/*Table structure for table `category_translations` */

CREATE TABLE `category_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(10) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `category_translations_category_id_foreign` (`category_id`),
  CONSTRAINT `category_translations_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `category_translations` */

/*Table structure for table `coins` */

CREATE TABLE `coins` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `score` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `coins` */

insert  into `coins`(`id`,`user_id`,`type`,`file_name`,`file_path`,`score`,`status`,`created_at`,`updated_at`) values (1,33,'twinnie','img-7604.jpg','uploads/coin-images/img-7604.jpg',200,1,'2017-08-03 13:23:22','2017-08-04 06:57:39');
insert  into `coins`(`id`,`user_id`,`type`,`file_name`,`file_path`,`score`,`status`,`created_at`,`updated_at`) values (2,33,'twinnie','IMG_7604_1501826879.jpg','uploads/coin-images/IMG_7604_1501826879.jpg',123,0,'2017-08-02 06:07:59','2017-08-04 06:57:35');
insert  into `coins`(`id`,`user_id`,`type`,`file_name`,`file_path`,`score`,`status`,`created_at`,`updated_at`) values (3,33,'bebek','dfsk-factory.jpg','uploads/coin-images/dfsk-factory.jpg',200,1,'2017-07-04 09:31:26','2017-08-04 09:31:26');
insert  into `coins`(`id`,`user_id`,`type`,`file_name`,`file_path`,`score`,`status`,`created_at`,`updated_at`) values (4,33,'strawberry','about-3.jpg','uploads/coin-images/about-3.jpg',100,1,'2017-07-04 09:31:41','2017-08-04 09:31:41');
insert  into `coins`(`id`,`user_id`,`type`,`file_name`,`file_path`,`score`,`status`,`created_at`,`updated_at`) values (5,33,'cokelat','about_3_1501839334.jpg','uploads/coin-images/about_3_1501839334.jpg',200,1,'2017-08-04 09:35:34','2017-08-04 09:35:34');
insert  into `coins`(`id`,`user_id`,`type`,`file_name`,`file_path`,`score`,`status`,`created_at`,`updated_at`) values (6,33,'keju','colored-2.jpg','uploads/coin-images/colored-2.jpg',100,1,'2017-08-04 09:36:34','2017-08-04 09:36:34');
insert  into `coins`(`id`,`user_id`,`type`,`file_name`,`file_path`,`score`,`status`,`created_at`,`updated_at`) values (7,33,'manis','colored-8.jpg','uploads/coin-images/colored-8.jpg',400,1,'2017-08-04 09:36:49','2017-08-04 09:36:49');
insert  into `coins`(`id`,`user_id`,`type`,`file_name`,`file_path`,`score`,`status`,`created_at`,`updated_at`) values (9,34,'bebek','fastcom_1502157268.png','uploads/coin-images/fastcom_1502157268.png',200,1,'2017-08-08 01:54:28','2017-08-08 01:54:58');

/*Table structure for table `coloring_images` */

CREATE TABLE `coloring_images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_birthdate` date NOT NULL,
  `user_city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_address` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `coloring_images` */

insert  into `coloring_images`(`id`,`user_id`,`title`,`file_name`,`file_path`,`user_name`,`user_email`,`user_birthdate`,`user_city`,`user_address`,`created_at`,`updated_at`,`status`) values (2,5,'Si kancil yang cerdik','colored-2.jpg','uploads/coloring-images/colored-2.jpg','Nanang','n.nurjamal@gmail.com','1978-01-01','Bandung','Bandung','2017-05-28 03:15:33','2017-08-04 09:43:18',1);
insert  into `coloring_images`(`id`,`user_id`,`title`,`file_name`,`file_path`,`user_name`,`user_email`,`user_birthdate`,`user_city`,`user_address`,`created_at`,`updated_at`,`status`) values (3,5,'Test Karya ku','colored-7_1495967085.jpg','uploads/coloring-images/colored-7_1495967085.jpg','Nanang','n.nurjamal@gmail.com','1978-01-01','Bandung','Bandung','2017-05-28 03:24:45','2017-05-29 07:41:30',1);
insert  into `coloring_images`(`id`,`user_id`,`title`,`file_name`,`file_path`,`user_name`,`user_email`,`user_birthdate`,`user_city`,`user_address`,`created_at`,`updated_at`,`status`) values (4,5,'Berkemah di hutan','colored-1_1495979940.jpg','uploads/coloring-images/colored-1_1495979940.jpg','Nanang','n.nurjamal@gmail.com','1978-01-01','Bandung','Bandung','2017-05-28 06:59:00','2017-05-29 07:41:32',1);
insert  into `coloring_images`(`id`,`user_id`,`title`,`file_name`,`file_path`,`user_name`,`user_email`,`user_birthdate`,`user_city`,`user_address`,`created_at`,`updated_at`,`status`) values (5,5,'Pesawat Terbangku','colored-3.jpg','uploads/coloring-images/colored-3.jpg','Nanang','n.nurjamal@gmail.com','1978-01-01','Bandung','Bandung','2017-05-28 06:59:31','2017-08-04 09:43:26',1);
insert  into `coloring_images`(`id`,`user_id`,`title`,`file_name`,`file_path`,`user_name`,`user_email`,`user_birthdate`,`user_city`,`user_address`,`created_at`,`updated_at`,`status`) values (6,5,'Pemandangan','colored-4.jpg','uploads/coloring-images/colored-4.jpg','Nanang','n.nurjamal@gmail.com','1978-01-01','Bandung','Bandung','2017-05-28 07:00:36','2017-05-28 07:00:36',1);
insert  into `coloring_images`(`id`,`user_id`,`title`,`file_name`,`file_path`,`user_name`,`user_email`,`user_birthdate`,`user_city`,`user_address`,`created_at`,`updated_at`,`status`) values (7,5,'Berkemah bersama keluarga','colored-5.jpg','uploads/coloring-images/colored-5.jpg','Nanang','n.nurjamal@gmail.com','1978-01-01','Bandung','Bandung','2017-05-28 07:01:16','2017-05-28 07:01:16',1);
insert  into `coloring_images`(`id`,`user_id`,`title`,`file_name`,`file_path`,`user_name`,`user_email`,`user_birthdate`,`user_city`,`user_address`,`created_at`,`updated_at`,`status`) values (8,5,'Lumba - lumba','colored-8.jpg','uploads/coloring-images/colored-8.jpg','Nanang','n.nurjamal@gmail.com','1978-01-01','Bandung','Bandung','2017-05-28 07:01:31','2017-05-28 07:01:31',1);
insert  into `coloring_images`(`id`,`user_id`,`title`,`file_name`,`file_path`,`user_name`,`user_email`,`user_birthdate`,`user_city`,`user_address`,`created_at`,`updated_at`,`status`) values (9,5,'Perahu Terbang','colored-9.jpg','uploads/coloring-images/colored-9.jpg','Nanang','n.nurjamal@gmail.com','1978-01-01','Bandung','Bandung','2017-05-28 07:01:57','2017-05-28 07:01:57',1);
insert  into `coloring_images`(`id`,`user_id`,`title`,`file_name`,`file_path`,`user_name`,`user_email`,`user_birthdate`,`user_city`,`user_address`,`created_at`,`updated_at`,`status`) values (10,5,'School Nut','colored-7_1495980135.jpg','uploads/coloring-images/colored-7_1495980135.jpg','Nanang','n.nurjamal@gmail.com','1978-01-01','Bandung','Bandung','2017-05-28 07:02:15','2017-05-28 07:02:15',1);
insert  into `coloring_images`(`id`,`user_id`,`title`,`file_name`,`file_path`,`user_name`,`user_email`,`user_birthdate`,`user_city`,`user_address`,`created_at`,`updated_at`,`status`) values (11,5,'Bunga','colored-6_1495980148.jpg','uploads/coloring-images/colored-6_1495980148.jpg','Nanang','n.nurjamal@gmail.com','1978-01-01','Bandung','Bandung','2017-05-28 07:02:28','2017-05-28 07:02:28',1);
insert  into `coloring_images`(`id`,`user_id`,`title`,`file_name`,`file_path`,`user_name`,`user_email`,`user_birthdate`,`user_city`,`user_address`,`created_at`,`updated_at`,`status`) values (12,5,'Buah-buahan','color-4.jpg','uploads/coloring-images/color-4.jpg','Nanang','n.nurjamal@gmail.com','1978-01-01','Bandung','Bandung','2017-05-28 07:22:48','2017-05-28 07:22:48',1);
insert  into `coloring_images`(`id`,`user_id`,`title`,`file_name`,`file_path`,`user_name`,`user_email`,`user_birthdate`,`user_city`,`user_address`,`created_at`,`updated_at`,`status`) values (13,1,'Domba dan Intanaa','color-3.jpg','uploads/coloring-images/color-3.jpg','pashamahardika','pasha.md5@gmail.com','1980-01-01','Bekasi','Bekasi','2017-05-28 07:33:54','2017-05-28 07:33:54',1);
insert  into `coloring_images`(`id`,`user_id`,`title`,`file_name`,`file_path`,`user_name`,`user_email`,`user_birthdate`,`user_city`,`user_address`,`created_at`,`updated_at`,`status`) values (14,25,'Binatang Berenang','color-2.jpg','uploads/coloring-images/color-2.jpg','Francensco Totti','totti@twb.com','1973-04-03','Roma','Viale dei Gladiatori','2017-05-29 00:00:48','2017-05-29 00:00:48',1);
insert  into `coloring_images`(`id`,`user_id`,`title`,`file_name`,`file_path`,`user_name`,`user_email`,`user_birthdate`,`user_city`,`user_address`,`created_at`,`updated_at`,`status`) values (15,5,'asdfasdf','family-ranch.jpg','uploads/coloring-images/family-ranch.jpg','Nanang','n.nurjamal@gmail.com','1978-01-01','Bandung','Bandung','2017-07-17 08:10:04','2017-07-17 08:10:04',1);
insert  into `coloring_images`(`id`,`user_id`,`title`,`file_name`,`file_path`,`user_name`,`user_email`,`user_birthdate`,`user_city`,`user_address`,`created_at`,`updated_at`,`status`) values (16,1,'adfsadf','farmers.jpg','uploads/coloring-images/farmers.jpg','Pasha Mahardika','pasha.md5@gmail.com','1980-01-01','Bekasi','Bekasi','2017-07-17 08:11:44','2017-07-17 08:11:44',1);
insert  into `coloring_images`(`id`,`user_id`,`title`,`file_name`,`file_path`,`user_name`,`user_email`,`user_birthdate`,`user_city`,`user_address`,`created_at`,`updated_at`,`status`) values (17,5,'asdfasdf','mewarnai-twb.jpeg','uploads/coloring-images/mewarnai-twb.jpeg','Nanang','n.nurjamal@gmail.com','1978-01-01','Bandung','Bandung','2017-07-17 09:49:41','2017-07-17 09:49:41',1);
insert  into `coloring_images`(`id`,`user_id`,`title`,`file_name`,`file_path`,`user_name`,`user_email`,`user_birthdate`,`user_city`,`user_address`,`created_at`,`updated_at`,`status`) values (18,5,'test','mewarnai-TWB_1500286940.jpeg','uploads/coloring-images/mewarnai-TWB_1500286940.jpeg','Nanang','n.nurjamal@gmail.com','1978-01-01','Bandung','Bandung','2017-07-17 10:22:21','2017-07-17 10:24:06',1);
insert  into `coloring_images`(`id`,`user_id`,`title`,`file_name`,`file_path`,`user_name`,`user_email`,`user_birthdate`,`user_city`,`user_address`,`created_at`,`updated_at`,`status`) values (19,5,'test','ff-login.png','uploads/coloring-images/ff-login.png','Nanang','n.nurjamal@gmail.com','1978-01-01','Bandung','Bandung','2017-08-04 10:35:29','2017-08-04 10:35:29',0);

/*Table structure for table `custom_field_details` */

CREATE TABLE `custom_field_details` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `custom_field_id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` int(11) NOT NULL DEFAULT '0',
  `default_value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `allow_null` int(11) NOT NULL DEFAULT '1',
  `choices` text COLLATE utf8mb4_unicode_ci,
  `multiple` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `custom_field_details` */

/*Table structure for table `custom_fields` */

CREATE TABLE `custom_fields` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rules` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `custom_fields` */

/*Table structure for table `medias` */

CREATE TABLE `medias` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullpath` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'featured',
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `medias` */

insert  into `medias`(`id`,`filename`,`path`,`fullpath`,`type`,`description`,`created_at`,`updated_at`) values (18,'banner-cimb_1495076949','banner-cimb_1495076949.jpg','uploads/post/banner-cimb_1495076949.jpg','featured','',NULL,NULL);
insert  into `medias`(`id`,`filename`,`path`,`fullpath`,`type`,`description`,`created_at`,`updated_at`) values (19,'barcode_generating_1495076987','barcode_generating_1495076987.png','uploads/post/barcode_generating_1495076987.png','featured','',NULL,NULL);
insert  into `medias`(`id`,`filename`,`path`,`fullpath`,`type`,`description`,`created_at`,`updated_at`) values (20,'bayilandak_1495077013','bayilandak_1495077013.JPG','uploads/post/bayilandak_1495077013.JPG','featured','',NULL,NULL);
insert  into `medias`(`id`,`filename`,`path`,`fullpath`,`type`,`description`,`created_at`,`updated_at`) values (21,'about-us-20170328','about-us-20170328.jpg','uploads/post/about-us-20170328.jpg','featured','',NULL,NULL);
insert  into `medias`(`id`,`filename`,`path`,`fullpath`,`type`,`description`,`created_at`,`updated_at`) values (22,'book-detail-payment-gateway-boxes','book-detail-payment-gateway-boxes.png','uploads/post/book-detail-payment-gateway-boxes.png','featured','',NULL,NULL);
insert  into `medias`(`id`,`filename`,`path`,`fullpath`,`type`,`description`,`created_at`,`updated_at`) values (23,'default-image','default-image.jpg','uploads/post/default-image.jpg','featured','',NULL,NULL);
insert  into `medias`(`id`,`filename`,`path`,`fullpath`,`type`,`description`,`created_at`,`updated_at`) values (24,'cc','cc.png','uploads/post/cc.png','featured','',NULL,NULL);
insert  into `medias`(`id`,`filename`,`path`,`fullpath`,`type`,`description`,`created_at`,`updated_at`) values (25,'book_detail_payment_gateway_boxes_1495078189','book_detail_payment_gateway_boxes_1495078189.png','uploads/post/book_detail_payment_gateway_boxes_1495078189.png','featured','',NULL,NULL);
insert  into `medias`(`id`,`filename`,`path`,`fullpath`,`type`,`description`,`created_at`,`updated_at`) values (26,'banner-cimb_1495078427','banner-cimb_1495078427.jpg','uploads/post/banner-cimb_1495078427.jpg','featured','',NULL,NULL);
insert  into `medias`(`id`,`filename`,`path`,`fullpath`,`type`,`description`,`created_at`,`updated_at`) values (27,'191276_1495088158','191276_1495088158.jpg','uploads/post/191276_1495088158.jpg','featured','',NULL,NULL);
insert  into `medias`(`id`,`filename`,`path`,`fullpath`,`type`,`description`,`created_at`,`updated_at`) values (28,'belgian-resized-for-featured','belgian-resized-for-featured.jpg','uploads/post/belgian-resized-for-featured.jpg','featured','',NULL,NULL);
insert  into `medias`(`id`,`filename`,`path`,`fullpath`,`type`,`description`,`created_at`,`updated_at`) values (29,'belgian_resized_for_featured_1495417204','belgian_resized_for_featured_1495417204.jpg','uploads/post/belgian_resized_for_featured_1495417204.jpg','featured','',NULL,NULL);
insert  into `medias`(`id`,`filename`,`path`,`fullpath`,`type`,`description`,`created_at`,`updated_at`) values (30,'kleur-sikd','kleur-sikd.png','uploads/post/kleur-sikd.png','featured','',NULL,NULL);
insert  into `medias`(`id`,`filename`,`path`,`fullpath`,`type`,`description`,`created_at`,`updated_at`) values (31,'k','k.jpg','uploads/post/k.jpg','featured','',NULL,NULL);
insert  into `medias`(`id`,`filename`,`path`,`fullpath`,`type`,`description`,`created_at`,`updated_at`) values (32,'twb-coloring-template-elephant','twb-coloring-template-elephant.jpg','uploads/post/twb-coloring-template-elephant.jpg','featured','',NULL,NULL);
insert  into `medias`(`id`,`filename`,`path`,`fullpath`,`type`,`description`,`created_at`,`updated_at`) values (33,'twb-coloring-01-01','twb-coloring-01-01.pdf','uploads/templates/twb-coloring-01-01.pdf','template_file','',NULL,NULL);
insert  into `medias`(`id`,`filename`,`path`,`fullpath`,`type`,`description`,`created_at`,`updated_at`) values (34,'twb-coloring-01-01','twb-coloring-01-01.pdf','uploads/templates/twb-coloring-01-01.pdf','template_file','',NULL,NULL);
insert  into `medias`(`id`,`filename`,`path`,`fullpath`,`type`,`description`,`created_at`,`updated_at`) values (35,'twb-coloring-01-01','twb-coloring-01-01.pdf','uploads/templates/twb-coloring-01-01.pdf','template_file','',NULL,NULL);
insert  into `medias`(`id`,`filename`,`path`,`fullpath`,`type`,`description`,`created_at`,`updated_at`) values (36,'twb-coloring-01-01','twb-coloring-01-01.pdf','uploads/templates/twb-coloring-01-01.pdf','template_file','',NULL,NULL);
insert  into `medias`(`id`,`filename`,`path`,`fullpath`,`type`,`description`,`created_at`,`updated_at`) values (37,'twb-coloring-01-01','twb-coloring-01-01.pdf','uploads/templates/twb-coloring-01-01.pdf','template_file','',NULL,NULL);
insert  into `medias`(`id`,`filename`,`path`,`fullpath`,`type`,`description`,`created_at`,`updated_at`) values (38,'twb-coloring-01-01','twb-coloring-01-01.pdf','uploads/templates/twb-coloring-01-01.pdf','template_file','',NULL,NULL);
insert  into `medias`(`id`,`filename`,`path`,`fullpath`,`type`,`description`,`created_at`,`updated_at`) values (39,'twb-coloring-01-01','twb-coloring-01-01.pdf','uploads/templates/twb-coloring-01-01.pdf','template_file','',NULL,NULL);
insert  into `medias`(`id`,`filename`,`path`,`fullpath`,`type`,`description`,`created_at`,`updated_at`) values (40,'twb-coloring-01-02','twb-coloring-01-02.pdf','uploads/templates/twb-coloring-01-02.pdf','template_file','',NULL,NULL);
insert  into `medias`(`id`,`filename`,`path`,`fullpath`,`type`,`description`,`created_at`,`updated_at`) values (41,'twb-coloring-template-fish','twb-coloring-template-fish.jpg','uploads/post/twb-coloring-template-fish.jpg','featured','',NULL,NULL);
insert  into `medias`(`id`,`filename`,`path`,`fullpath`,`type`,`description`,`created_at`,`updated_at`) values (42,'twb-coloring-01-03','twb-coloring-01-03.pdf','uploads/templates/twb-coloring-01-03.pdf','template_file','',NULL,NULL);
insert  into `medias`(`id`,`filename`,`path`,`fullpath`,`type`,`description`,`created_at`,`updated_at`) values (43,'twb-coloring-01-03','twb-coloring-01-03.pdf','uploads/templates/twb-coloring-01-03.pdf','template_file','',NULL,NULL);
insert  into `medias`(`id`,`filename`,`path`,`fullpath`,`type`,`description`,`created_at`,`updated_at`) values (44,'twb-coloring-template-turtle','twb-coloring-template-turtle.jpg','uploads/post/twb-coloring-template-turtle.jpg','featured','',NULL,NULL);
insert  into `medias`(`id`,`filename`,`path`,`fullpath`,`type`,`description`,`created_at`,`updated_at`) values (45,'TWB_COLORING_TEMPLATE_TURTLE_1495501527','TWB_COLORING_TEMPLATE_TURTLE_1495501527.jpg','uploads/post/TWB_COLORING_TEMPLATE_TURTLE_1495501527.jpg','featured','',NULL,NULL);
insert  into `medias`(`id`,`filename`,`path`,`fullpath`,`type`,`description`,`created_at`,`updated_at`) values (46,'twb-coloring-01-01','twb-coloring-01-01.pdf','uploads/templates/twb-coloring-01-01.pdf','template_file','',NULL,NULL);
insert  into `medias`(`id`,`filename`,`path`,`fullpath`,`type`,`description`,`created_at`,`updated_at`) values (47,'TWB_COLORING_TEMPLATE_TURTLE_1495501788','TWB_COLORING_TEMPLATE_TURTLE_1495501788.jpg','uploads/post/TWB_COLORING_TEMPLATE_TURTLE_1495501788.jpg','featured','',NULL,NULL);
insert  into `medias`(`id`,`filename`,`path`,`fullpath`,`type`,`description`,`created_at`,`updated_at`) values (48,'twb-coloring-01-03','twb-coloring-01-03.pdf','uploads/templates/twb-coloring-01-03.pdf','template_file','',NULL,NULL);
insert  into `medias`(`id`,`filename`,`path`,`fullpath`,`type`,`description`,`created_at`,`updated_at`) values (49,'twb-coloring-01-01','twb-coloring-01-01.pdf','uploads/templates/twb-coloring-01-01.pdf','template_file','',NULL,NULL);
insert  into `medias`(`id`,`filename`,`path`,`fullpath`,`type`,`description`,`created_at`,`updated_at`) values (50,'twb-coloring-01-02','twb-coloring-01-02.pdf','uploads/templates/twb-coloring-01-02.pdf','template_file','',NULL,NULL);
insert  into `medias`(`id`,`filename`,`path`,`fullpath`,`type`,`description`,`created_at`,`updated_at`) values (51,'product-jagung','product-jagung.png','uploads/post/product-jagung.png','featured','',NULL,NULL);
insert  into `medias`(`id`,`filename`,`path`,`fullpath`,`type`,`description`,`created_at`,`updated_at`) values (52,'product-keju','product-keju.png','uploads/post/product-keju.png','featured','',NULL,NULL);
insert  into `medias`(`id`,`filename`,`path`,`fullpath`,`type`,`description`,`created_at`,`updated_at`) values (53,'product-manis','product-manis.png','uploads/post/product-manis.png','featured','',NULL,NULL);
insert  into `medias`(`id`,`filename`,`path`,`fullpath`,`type`,`description`,`created_at`,`updated_at`) values (54,'product-pizza','product-pizza.png','uploads/post/product-pizza.png','featured','',NULL,NULL);
insert  into `medias`(`id`,`filename`,`path`,`fullpath`,`type`,`description`,`created_at`,`updated_at`) values (55,'product-sate','product-sate.png','uploads/post/product-sate.png','featured','',NULL,NULL);
insert  into `medias`(`id`,`filename`,`path`,`fullpath`,`type`,`description`,`created_at`,`updated_at`) values (56,'product-stroberi','product-stroberi.png','uploads/post/product-stroberi.png','featured','',NULL,NULL);
insert  into `medias`(`id`,`filename`,`path`,`fullpath`,`type`,`description`,`created_at`,`updated_at`) values (57,'product-susu','product-susu.png','uploads/post/product-susu.png','featured','',NULL,NULL);
insert  into `medias`(`id`,`filename`,`path`,`fullpath`,`type`,`description`,`created_at`,`updated_at`) values (58,'product-asin','product-asin.png','uploads/post/product-asin.png','featured','',NULL,NULL);
insert  into `medias`(`id`,`filename`,`path`,`fullpath`,`type`,`description`,`created_at`,`updated_at`) values (59,'product-cokelat','product-cokelat.png','uploads/post/product-cokelat.png','featured','',NULL,NULL);
insert  into `medias`(`id`,`filename`,`path`,`fullpath`,`type`,`description`,`created_at`,`updated_at`) values (60,'product-comingsoon','product-comingsoon.png','uploads/post/product-comingsoon.png','featured','',NULL,NULL);
insert  into `medias`(`id`,`filename`,`path`,`fullpath`,`type`,`description`,`created_at`,`updated_at`) values (61,'product-family-stroberi','product-family-stroberi.png','uploads/post/product-family-stroberi.png','featured','',NULL,NULL);
insert  into `medias`(`id`,`filename`,`path`,`fullpath`,`type`,`description`,`created_at`,`updated_at`) values (62,'product-family-keju','product-family-keju.png','uploads/post/product-family-keju.png','featured','',NULL,NULL);
insert  into `medias`(`id`,`filename`,`path`,`fullpath`,`type`,`description`,`created_at`,`updated_at`) values (63,'product-family-cokelat','product-family-cokelat.png','uploads/post/product-family-cokelat.png','featured','',NULL,NULL);
insert  into `medias`(`id`,`filename`,`path`,`fullpath`,`type`,`description`,`created_at`,`updated_at`) values (64,'product-special-ceria','product-special-ceria.png','uploads/post/product-special-ceria.png','featured','',NULL,NULL);
insert  into `medias`(`id`,`filename`,`path`,`fullpath`,`type`,`description`,`created_at`,`updated_at`) values (65,'gajahketibanrumah','gajahketibanrumah.png','uploads/post/gajahketibanrumah.png','featured','',NULL,NULL);
insert  into `medias`(`id`,`filename`,`path`,`fullpath`,`type`,`description`,`created_at`,`updated_at`) values (66,'summarecon1','summarecon1.jpg','uploads/post/summarecon1.jpg','featured','',NULL,NULL);
insert  into `medias`(`id`,`filename`,`path`,`fullpath`,`type`,`description`,`created_at`,`updated_at`) values (67,'summarecon1_1496804168','summarecon1_1496804168.jpg','uploads/post/summarecon1_1496804168.jpg','featured','',NULL,NULL);
insert  into `medias`(`id`,`filename`,`path`,`fullpath`,`type`,`description`,`created_at`,`updated_at`) values (68,'igtki1','igtki1.jpg','uploads/post/igtki1.jpg','featured','',NULL,NULL);
insert  into `medias`(`id`,`filename`,`path`,`fullpath`,`type`,`description`,`created_at`,`updated_at`) values (69,'ikca-3','ikca-3.jpg','uploads/post/ikca-3.jpg','featured','',NULL,NULL);
insert  into `medias`(`id`,`filename`,`path`,`fullpath`,`type`,`description`,`created_at`,`updated_at`) values (70,'summarecon1_1497419028','summarecon1_1497419028.jpg','uploads/post/summarecon1_1497419028.jpg','featured','',NULL,NULL);
insert  into `medias`(`id`,`filename`,`path`,`fullpath`,`type`,`description`,`created_at`,`updated_at`) values (71,'dongeng1','dongeng1.jpg','uploads/post/dongeng1.jpg','featured','',NULL,NULL);
insert  into `medias`(`id`,`filename`,`path`,`fullpath`,`type`,`description`,`created_at`,`updated_at`) values (72,'prj2','prj2.jpg','uploads/post/prj2.jpg','featured','',NULL,NULL);
insert  into `medias`(`id`,`filename`,`path`,`fullpath`,`type`,`description`,`created_at`,`updated_at`) values (73,'cfd3','cfd3.jpg','uploads/post/cfd3.jpg','featured','',NULL,NULL);
insert  into `medias`(`id`,`filename`,`path`,`fullpath`,`type`,`description`,`created_at`,`updated_at`) values (74,'funday-1','funday-1.jpg','uploads/post/funday-1.jpg','featured','',NULL,NULL);
insert  into `medias`(`id`,`filename`,`path`,`fullpath`,`type`,`description`,`created_at`,`updated_at`) values (75,'twb-coloring-fish','twb-coloring-fish.pdf','uploads/templates/twb-coloring-fish.pdf','template_file','',NULL,NULL);
insert  into `medias`(`id`,`filename`,`path`,`fullpath`,`type`,`description`,`created_at`,`updated_at`) values (76,'twb-coloring-elephant','twb-coloring-elephant.pdf','uploads/templates/twb-coloring-elephant.pdf','template_file','',NULL,NULL);
insert  into `medias`(`id`,`filename`,`path`,`fullpath`,`type`,`description`,`created_at`,`updated_at`) values (77,'twb-coloring-turtle','twb-coloring-turtle.pdf','uploads/templates/twb-coloring-turtle.pdf','template_file','',NULL,NULL);
insert  into `medias`(`id`,`filename`,`path`,`fullpath`,`type`,`description`,`created_at`,`updated_at`) values (78,'homebanner1_1497944767','homebanner1_1497944767.jpg','uploads/post/homebanner1_1497944767.jpg','featured','',NULL,NULL);
insert  into `medias`(`id`,`filename`,`path`,`fullpath`,`type`,`description`,`created_at`,`updated_at`) values (79,'homebanner3_1497944800','homebanner3_1497944800.png','uploads/post/homebanner3_1497944800.png','featured','',NULL,NULL);
insert  into `medias`(`id`,`filename`,`path`,`fullpath`,`type`,`description`,`created_at`,`updated_at`) values (80,'promo-carrefour_1497944823','promo-carrefour_1497944823.jpg','uploads/post/promo-carrefour_1497944823.jpg','featured','',NULL,NULL);
insert  into `medias`(`id`,`filename`,`path`,`fullpath`,`type`,`description`,`created_at`,`updated_at`) values (81,'aeon-resized','aeon-resized.jpg','uploads/post/aeon-resized.jpg','featured','',NULL,NULL);

/*Table structure for table `menu_item_translations` */

CREATE TABLE `menu_item_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu_item_id` int(10) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `menu_item_translations_menu_item_id_foreign` (`menu_item_id`),
  CONSTRAINT `menu_item_translations_menu_item_id_foreign` FOREIGN KEY (`menu_item_id`) REFERENCES `menu_items` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `menu_item_translations` */

insert  into `menu_item_translations`(`id`,`menu_item_id`,`locale`,`title`,`description`) values (1,1,'en','Settings',NULL);
insert  into `menu_item_translations`(`id`,`menu_item_id`,`locale`,`title`,`description`) values (2,2,'en','Permission',NULL);
insert  into `menu_item_translations`(`id`,`menu_item_id`,`locale`,`title`,`description`) values (3,3,'en','Role',NULL);
insert  into `menu_item_translations`(`id`,`menu_item_id`,`locale`,`title`,`description`) values (4,4,'en','User',NULL);
insert  into `menu_item_translations`(`id`,`menu_item_id`,`locale`,`title`,`description`) values (5,6,'en','Dashboard',NULL);
insert  into `menu_item_translations`(`id`,`menu_item_id`,`locale`,`title`,`description`) values (10,1,'id','Pengaturan',NULL);
insert  into `menu_item_translations`(`id`,`menu_item_id`,`locale`,`title`,`description`) values (11,2,'id','Hak Akses',NULL);
insert  into `menu_item_translations`(`id`,`menu_item_id`,`locale`,`title`,`description`) values (12,3,'id','Role',NULL);
insert  into `menu_item_translations`(`id`,`menu_item_id`,`locale`,`title`,`description`) values (13,4,'id','Pengguna',NULL);
insert  into `menu_item_translations`(`id`,`menu_item_id`,`locale`,`title`,`description`) values (14,6,'id','Beranda',NULL);
insert  into `menu_item_translations`(`id`,`menu_item_id`,`locale`,`title`,`description`) values (15,7,'en','News',NULL);
insert  into `menu_item_translations`(`id`,`menu_item_id`,`locale`,`title`,`description`) values (16,8,'en','All News',NULL);
insert  into `menu_item_translations`(`id`,`menu_item_id`,`locale`,`title`,`description`) values (17,9,'en','Create New',NULL);
insert  into `menu_item_translations`(`id`,`menu_item_id`,`locale`,`title`,`description`) values (18,10,'en','Events',NULL);
insert  into `menu_item_translations`(`id`,`menu_item_id`,`locale`,`title`,`description`) values (19,11,'en','All Event',NULL);
insert  into `menu_item_translations`(`id`,`menu_item_id`,`locale`,`title`,`description`) values (20,12,'en','Create New',NULL);
insert  into `menu_item_translations`(`id`,`menu_item_id`,`locale`,`title`,`description`) values (21,13,'en','Products',NULL);
insert  into `menu_item_translations`(`id`,`menu_item_id`,`locale`,`title`,`description`) values (22,14,'en','All Product',NULL);
insert  into `menu_item_translations`(`id`,`menu_item_id`,`locale`,`title`,`description`) values (23,15,'en','Create New',NULL);
insert  into `menu_item_translations`(`id`,`menu_item_id`,`locale`,`title`,`description`) values (24,16,'en','Videos',NULL);
insert  into `menu_item_translations`(`id`,`menu_item_id`,`locale`,`title`,`description`) values (25,17,'en','All Video',NULL);
insert  into `menu_item_translations`(`id`,`menu_item_id`,`locale`,`title`,`description`) values (26,18,'en','Createn New',NULL);
insert  into `menu_item_translations`(`id`,`menu_item_id`,`locale`,`title`,`description`) values (27,19,'en','Templates',NULL);
insert  into `menu_item_translations`(`id`,`menu_item_id`,`locale`,`title`,`description`) values (28,20,'en','All Templates',NULL);
insert  into `menu_item_translations`(`id`,`menu_item_id`,`locale`,`title`,`description`) values (29,21,'en','Upload New',NULL);
insert  into `menu_item_translations`(`id`,`menu_item_id`,`locale`,`title`,`description`) values (30,22,'en','Campaign',NULL);
insert  into `menu_item_translations`(`id`,`menu_item_id`,`locale`,`title`,`description`) values (31,23,'en','Participants',NULL);
insert  into `menu_item_translations`(`id`,`menu_item_id`,`locale`,`title`,`description`) values (32,24,'en','Images',NULL);
insert  into `menu_item_translations`(`id`,`menu_item_id`,`locale`,`title`,`description`) values (33,25,'en','Promo',NULL);
insert  into `menu_item_translations`(`id`,`menu_item_id`,`locale`,`title`,`description`) values (34,26,'en','All Promo',NULL);
insert  into `menu_item_translations`(`id`,`menu_item_id`,`locale`,`title`,`description`) values (35,27,'en','Create New',NULL);
insert  into `menu_item_translations`(`id`,`menu_item_id`,`locale`,`title`,`description`) values (36,28,'en','Coins',NULL);
insert  into `menu_item_translations`(`id`,`menu_item_id`,`locale`,`title`,`description`) values (37,28,'id','Koin',NULL);
insert  into `menu_item_translations`(`id`,`menu_item_id`,`locale`,`title`,`description`) values (38,29,'en','Participant',NULL);
insert  into `menu_item_translations`(`id`,`menu_item_id`,`locale`,`title`,`description`) values (39,29,'id','Peserta',NULL);
insert  into `menu_item_translations`(`id`,`menu_item_id`,`locale`,`title`,`description`) values (40,30,'en','Images',NULL);
insert  into `menu_item_translations`(`id`,`menu_item_id`,`locale`,`title`,`description`) values (41,30,'id','Gambar',NULL);
insert  into `menu_item_translations`(`id`,`menu_item_id`,`locale`,`title`,`description`) values (42,31,'en','Dashboard',NULL);
insert  into `menu_item_translations`(`id`,`menu_item_id`,`locale`,`title`,`description`) values (43,31,'id','Dashboard',NULL);

/*Table structure for table `menu_items` */

CREATE TABLE `menu_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` int(10) unsigned NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'javascript:;',
  `permission` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `menu_items_menu_id_foreign` (`menu_id`),
  CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `menu_items` */

insert  into `menu_items`(`id`,`menu_id`,`parent_id`,`link`,`permission`,`icon_class`,`order`) values (1,1,0,'javascript:;','setting','icon: settings',90000);
insert  into `menu_items`(`id`,`menu_id`,`parent_id`,`link`,`permission`,`icon_class`,`order`) values (2,1,1,'setting/permission','setting.permission',NULL,100);
insert  into `menu_items`(`id`,`menu_id`,`parent_id`,`link`,`permission`,`icon_class`,`order`) values (3,1,1,'setting/role','setting.role',NULL,200);
insert  into `menu_items`(`id`,`menu_id`,`parent_id`,`link`,`permission`,`icon_class`,`order`) values (4,1,1,'setting/user','setting.user',NULL,300);
insert  into `menu_items`(`id`,`menu_id`,`parent_id`,`link`,`permission`,`icon_class`,`order`) values (6,1,0,'/','admin','icon: home',1000);
insert  into `menu_items`(`id`,`menu_id`,`parent_id`,`link`,`permission`,`icon_class`,`order`) values (7,1,0,'javascript:;','news','icon: file-edit',2000);
insert  into `menu_items`(`id`,`menu_id`,`parent_id`,`link`,`permission`,`icon_class`,`order`) values (8,1,7,'news','news',NULL,100);
insert  into `menu_items`(`id`,`menu_id`,`parent_id`,`link`,`permission`,`icon_class`,`order`) values (9,1,7,'news/create','news.add',NULL,200);
insert  into `menu_items`(`id`,`menu_id`,`parent_id`,`link`,`permission`,`icon_class`,`order`) values (10,1,0,'javascript:;','event','icon: calendar',3000);
insert  into `menu_items`(`id`,`menu_id`,`parent_id`,`link`,`permission`,`icon_class`,`order`) values (11,1,10,'event','event',NULL,100);
insert  into `menu_items`(`id`,`menu_id`,`parent_id`,`link`,`permission`,`icon_class`,`order`) values (12,1,10,'event/create','event.add',NULL,200);
insert  into `menu_items`(`id`,`menu_id`,`parent_id`,`link`,`permission`,`icon_class`,`order`) values (13,1,0,'javascript:;','product','icon: nut',4000);
insert  into `menu_items`(`id`,`menu_id`,`parent_id`,`link`,`permission`,`icon_class`,`order`) values (14,1,13,'product','product',NULL,100);
insert  into `menu_items`(`id`,`menu_id`,`parent_id`,`link`,`permission`,`icon_class`,`order`) values (15,1,13,'product/create','product',NULL,200);
insert  into `menu_items`(`id`,`menu_id`,`parent_id`,`link`,`permission`,`icon_class`,`order`) values (16,1,0,'javascript:;','video','icon: video-camera',5000);
insert  into `menu_items`(`id`,`menu_id`,`parent_id`,`link`,`permission`,`icon_class`,`order`) values (17,1,16,'video','video',NULL,100);
insert  into `menu_items`(`id`,`menu_id`,`parent_id`,`link`,`permission`,`icon_class`,`order`) values (18,1,16,'video/create','video.add',NULL,200);
insert  into `menu_items`(`id`,`menu_id`,`parent_id`,`link`,`permission`,`icon_class`,`order`) values (19,1,0,'javascript:;','template','icon: image',6000);
insert  into `menu_items`(`id`,`menu_id`,`parent_id`,`link`,`permission`,`icon_class`,`order`) values (20,1,19,'template','template','',100);
insert  into `menu_items`(`id`,`menu_id`,`parent_id`,`link`,`permission`,`icon_class`,`order`) values (21,1,19,'template/create','template.add',NULL,200);
insert  into `menu_items`(`id`,`menu_id`,`parent_id`,`link`,`permission`,`icon_class`,`order`) values (22,1,0,'javascript:;','campaign.participant','icon: paint-bucket',7000);
insert  into `menu_items`(`id`,`menu_id`,`parent_id`,`link`,`permission`,`icon_class`,`order`) values (23,1,22,'participant','campaign.participant',NULL,100);
insert  into `menu_items`(`id`,`menu_id`,`parent_id`,`link`,`permission`,`icon_class`,`order`) values (24,1,22,'participant-images','campaign.images',NULL,200);
insert  into `menu_items`(`id`,`menu_id`,`parent_id`,`link`,`permission`,`icon_class`,`order`) values (25,1,0,'javascript:;','promo','icon: tag',6500);
insert  into `menu_items`(`id`,`menu_id`,`parent_id`,`link`,`permission`,`icon_class`,`order`) values (26,1,25,'promo','promo',NULL,100);
insert  into `menu_items`(`id`,`menu_id`,`parent_id`,`link`,`permission`,`icon_class`,`order`) values (27,1,25,'promo/create','promo.add',NULL,200);
insert  into `menu_items`(`id`,`menu_id`,`parent_id`,`link`,`permission`,`icon_class`,`order`) values (28,1,0,'javascript:;','coins','icon: plus-circle',8000);
insert  into `menu_items`(`id`,`menu_id`,`parent_id`,`link`,`permission`,`icon_class`,`order`) values (29,1,28,'coins/participant','coins',NULL,100);
insert  into `menu_items`(`id`,`menu_id`,`parent_id`,`link`,`permission`,`icon_class`,`order`) values (30,1,28,'coins/images','coins',NULL,200);
insert  into `menu_items`(`id`,`menu_id`,`parent_id`,`link`,`permission`,`icon_class`,`order`) values (31,1,28,'coins/dashboard','coins',NULL,50);

/*Table structure for table `menus` */

CREATE TABLE `menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `menus` */

insert  into `menus`(`id`,`name`,`description`) values (1,'backend',NULL);

/*Table structure for table `migrations` */

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (1,'2014_10_12_000000_create_users_table',1);
insert  into `migrations`(`id`,`migration`,`batch`) values (2,'2014_10_12_100000_create_password_resets_table',1);
insert  into `migrations`(`id`,`migration`,`batch`) values (3,'2017_05_02_090045_create_permission_tables',1);
insert  into `migrations`(`id`,`migration`,`batch`) values (16,'2017_05_12_004104_create_categories_table',2);
insert  into `migrations`(`id`,`migration`,`batch`) values (17,'2017_05_12_004157_create_tags_table',2);
insert  into `migrations`(`id`,`migration`,`batch`) values (18,'2017_05_12_004242_create_posts_table',2);
insert  into `migrations`(`id`,`migration`,`batch`) values (19,'2017_05_12_004325_create_post_has_categories_table',2);
insert  into `migrations`(`id`,`migration`,`batch`) values (20,'2017_05_12_004357_create_post_has_tags_table',2);
insert  into `migrations`(`id`,`migration`,`batch`) values (21,'2017_05_12_004526_create_post_metas_table',2);
insert  into `migrations`(`id`,`migration`,`batch`) values (22,'2017_05_12_024846_create_post_types_table',2);
insert  into `migrations`(`id`,`migration`,`batch`) values (23,'2017_05_12_024924_create_menus_table',2);
insert  into `migrations`(`id`,`migration`,`batch`) values (24,'2017_05_12_025324_create_custom_fields_table',2);
insert  into `migrations`(`id`,`migration`,`batch`) values (26,'2017_05_16_033819_add_show_name_on_permissions',3);
insert  into `migrations`(`id`,`migration`,`batch`) values (27,'2017_05_17_041821_create_table_medias',4);
insert  into `migrations`(`id`,`migration`,`batch`) values (28,'2017_05_17_041959_create_table_post_has_medias',4);
insert  into `migrations`(`id`,`migration`,`batch`) values (30,'2017_05_22_010803_add_fullpath_on_medias',5);
insert  into `migrations`(`id`,`migration`,`batch`) values (32,'2017_05_22_104037_add_type_on_post_has_medias',6);
insert  into `migrations`(`id`,`migration`,`batch`) values (33,'2017_05_23_030208_create_user_details_table',7);
insert  into `migrations`(`id`,`migration`,`batch`) values (34,'2017_05_23_030326_create_coloring_images_table',7);
insert  into `migrations`(`id`,`migration`,`batch`) values (35,'2017_05_27_062956_add_views_on_posts',8);
insert  into `migrations`(`id`,`migration`,`batch`) values (36,'2017_05_28_101611_add_status_on_coloring_images',9);
insert  into `migrations`(`id`,`migration`,`batch`) values (37,'2017_05_28_142729_add_birthdate_on_coloring_images',10);
insert  into `migrations`(`id`,`migration`,`batch`) values (38,'2017_08_03_020744_add_additional_field_on_user_details',11);
insert  into `migrations`(`id`,`migration`,`batch`) values (40,'2017_08_03_071950_create_social_accounts_table',12);
insert  into `migrations`(`id`,`migration`,`batch`) values (41,'2017_08_03_073851_add_avatar_on_user_details',13);
insert  into `migrations`(`id`,`migration`,`batch`) values (44,'2017_08_03_100445_create_coins',14);

/*Table structure for table `model_has_permissions` */

CREATE TABLE `model_has_permissions` (
  `permission_id` int(10) unsigned NOT NULL,
  `model_id` int(10) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `model_has_permissions` */

/*Table structure for table `model_has_roles` */

CREATE TABLE `model_has_roles` (
  `role_id` int(10) unsigned NOT NULL,
  `model_id` int(10) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `model_has_roles` */

insert  into `model_has_roles`(`role_id`,`model_id`,`model_type`) values (6,1,'App\\Model\\User');
insert  into `model_has_roles`(`role_id`,`model_id`,`model_type`) values (6,2,'App\\Model\\User');
insert  into `model_has_roles`(`role_id`,`model_id`,`model_type`) values (6,4,'App\\Model\\User');
insert  into `model_has_roles`(`role_id`,`model_id`,`model_type`) values (6,5,'App\\Model\\User');
insert  into `model_has_roles`(`role_id`,`model_id`,`model_type`) values (7,12,'App\\Model\\User');
insert  into `model_has_roles`(`role_id`,`model_id`,`model_type`) values (7,14,'App\\Model\\User');
insert  into `model_has_roles`(`role_id`,`model_id`,`model_type`) values (7,15,'App\\Model\\User');
insert  into `model_has_roles`(`role_id`,`model_id`,`model_type`) values (7,25,'App\\Model\\User');
insert  into `model_has_roles`(`role_id`,`model_id`,`model_type`) values (7,27,'App\\Model\\User');
insert  into `model_has_roles`(`role_id`,`model_id`,`model_type`) values (6,28,'App\\Model\\User');
insert  into `model_has_roles`(`role_id`,`model_id`,`model_type`) values (7,29,'App\\Model\\User');
insert  into `model_has_roles`(`role_id`,`model_id`,`model_type`) values (8,33,'App\\Model\\User');
insert  into `model_has_roles`(`role_id`,`model_id`,`model_type`) values (8,34,'App\\Model\\User');

/*Table structure for table `password_resets` */

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

insert  into `password_resets`(`email`,`token`,`created_at`) values ('pasha@kleur.id','$2y$10$Wa0kFlHWr58vLxuNxDZ2COwcm7TGF6IhxLoUjLCDZ1ipzloh0Nrqu','2017-05-30 07:17:28');
insert  into `password_resets`(`email`,`token`,`created_at`) values ('pasha.md5@gmail.com','$2y$10$Y2D8xs8ts8P8FF/JdSlYFuO32c5Vk9aV3dajQmOyFeOiTZGUZaqAO','2017-05-30 23:05:50');

/*Table structure for table `permissions` */

CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `show_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `permissions` */

insert  into `permissions`(`id`,`name`,`show_name`,`guard_name`,`created_at`,`updated_at`) values (4,'setting.permission','Permission','web','2017-05-15 20:25:52','2017-05-15 20:25:52');
insert  into `permissions`(`id`,`name`,`show_name`,`guard_name`,`created_at`,`updated_at`) values (5,'setting.permission.add','Add Permission','web','2017-05-15 20:26:00','2017-05-15 20:26:00');
insert  into `permissions`(`id`,`name`,`show_name`,`guard_name`,`created_at`,`updated_at`) values (6,'setting.permission.edit','Edit Permission','web','2017-05-15 20:26:07','2017-05-15 20:26:07');
insert  into `permissions`(`id`,`name`,`show_name`,`guard_name`,`created_at`,`updated_at`) values (7,'setting.permission.delete','Delete Permission','web','2017-05-15 20:26:13','2017-05-15 20:26:13');
insert  into `permissions`(`id`,`name`,`show_name`,`guard_name`,`created_at`,`updated_at`) values (8,'admin','Dashboard','web','2017-05-15 23:46:02','2017-06-03 00:28:38');
insert  into `permissions`(`id`,`name`,`show_name`,`guard_name`,`created_at`,`updated_at`) values (9,'setting.role','Role','web','2017-05-15 23:48:00','2017-05-15 23:48:00');
insert  into `permissions`(`id`,`name`,`show_name`,`guard_name`,`created_at`,`updated_at`) values (10,'setting.role.add','Add Role','web','2017-05-15 23:48:15','2017-05-16 20:16:24');
insert  into `permissions`(`id`,`name`,`show_name`,`guard_name`,`created_at`,`updated_at`) values (11,'setting.role.edit','Edit Role','web','2017-05-15 23:48:27','2017-05-15 23:48:27');
insert  into `permissions`(`id`,`name`,`show_name`,`guard_name`,`created_at`,`updated_at`) values (12,'setting.role.delete','Delete Role','web','2017-05-15 23:48:39','2017-05-15 23:48:39');
insert  into `permissions`(`id`,`name`,`show_name`,`guard_name`,`created_at`,`updated_at`) values (13,'setting.user','User','web','2017-05-15 23:49:12','2017-05-15 23:49:12');
insert  into `permissions`(`id`,`name`,`show_name`,`guard_name`,`created_at`,`updated_at`) values (14,'setting.user.add','Add User','web','2017-05-15 23:49:19','2017-05-15 23:49:19');
insert  into `permissions`(`id`,`name`,`show_name`,`guard_name`,`created_at`,`updated_at`) values (15,'setting.user.edit','Edit User','web','2017-05-15 23:49:26','2017-05-15 23:49:26');
insert  into `permissions`(`id`,`name`,`show_name`,`guard_name`,`created_at`,`updated_at`) values (16,'setting.user.delete','Delete User','web','2017-05-15 23:49:33','2017-05-15 23:49:33');
insert  into `permissions`(`id`,`name`,`show_name`,`guard_name`,`created_at`,`updated_at`) values (17,'setting','Setting','web','2017-05-16 00:39:36','2017-05-16 00:39:36');
insert  into `permissions`(`id`,`name`,`show_name`,`guard_name`,`created_at`,`updated_at`) values (18,'frontend','Frontend','web','2017-05-28 23:37:34','2017-05-28 23:37:34');
insert  into `permissions`(`id`,`name`,`show_name`,`guard_name`,`created_at`,`updated_at`) values (20,'news','See News','web','2017-06-02 20:43:35','2017-06-02 20:43:35');
insert  into `permissions`(`id`,`name`,`show_name`,`guard_name`,`created_at`,`updated_at`) values (21,'news.add','Add News','web','2017-06-02 20:43:44','2017-06-02 20:43:44');
insert  into `permissions`(`id`,`name`,`show_name`,`guard_name`,`created_at`,`updated_at`) values (22,'news.edit','Edit News','web','2017-06-02 20:43:52','2017-06-02 20:43:52');
insert  into `permissions`(`id`,`name`,`show_name`,`guard_name`,`created_at`,`updated_at`) values (23,'news.delete','Delete News','web','2017-06-02 20:44:02','2017-06-02 20:44:02');
insert  into `permissions`(`id`,`name`,`show_name`,`guard_name`,`created_at`,`updated_at`) values (24,'event','See Event','web','2017-06-02 20:45:31','2017-06-02 20:46:12');
insert  into `permissions`(`id`,`name`,`show_name`,`guard_name`,`created_at`,`updated_at`) values (25,'event.add','Add Event','web','2017-06-02 20:46:00','2017-06-02 20:46:00');
insert  into `permissions`(`id`,`name`,`show_name`,`guard_name`,`created_at`,`updated_at`) values (26,'event.edit','Edit Event','web','2017-06-02 20:46:21','2017-06-02 20:46:21');
insert  into `permissions`(`id`,`name`,`show_name`,`guard_name`,`created_at`,`updated_at`) values (27,'event.delete','Delete Event','web','2017-06-02 20:46:29','2017-06-02 20:46:29');
insert  into `permissions`(`id`,`name`,`show_name`,`guard_name`,`created_at`,`updated_at`) values (28,'product','See Product','web','2017-06-02 20:48:45','2017-06-02 20:48:45');
insert  into `permissions`(`id`,`name`,`show_name`,`guard_name`,`created_at`,`updated_at`) values (29,'product.add','Add Product','web','2017-06-02 20:48:54','2017-06-02 20:48:54');
insert  into `permissions`(`id`,`name`,`show_name`,`guard_name`,`created_at`,`updated_at`) values (30,'product.edit','Edit Product','web','2017-06-02 20:49:02','2017-06-02 20:49:02');
insert  into `permissions`(`id`,`name`,`show_name`,`guard_name`,`created_at`,`updated_at`) values (31,'product.delete','Delete Product','web','2017-06-02 20:49:13','2017-06-02 20:49:13');
insert  into `permissions`(`id`,`name`,`show_name`,`guard_name`,`created_at`,`updated_at`) values (32,'video','See Video','web','2017-06-02 20:49:56','2017-06-02 20:49:56');
insert  into `permissions`(`id`,`name`,`show_name`,`guard_name`,`created_at`,`updated_at`) values (33,'video.add','Add Video','web','2017-06-02 20:50:04','2017-06-02 20:50:04');
insert  into `permissions`(`id`,`name`,`show_name`,`guard_name`,`created_at`,`updated_at`) values (34,'video.edit','Edit Video','web','2017-06-02 20:50:12','2017-06-02 20:50:12');
insert  into `permissions`(`id`,`name`,`show_name`,`guard_name`,`created_at`,`updated_at`) values (35,'video.delete','Delete Video','web','2017-06-02 20:50:20','2017-06-02 20:50:20');
insert  into `permissions`(`id`,`name`,`show_name`,`guard_name`,`created_at`,`updated_at`) values (36,'template','See Template','web','2017-06-02 20:51:35','2017-06-02 20:51:35');
insert  into `permissions`(`id`,`name`,`show_name`,`guard_name`,`created_at`,`updated_at`) values (37,'template.add','Add Template','web','2017-06-02 20:51:41','2017-06-02 20:51:41');
insert  into `permissions`(`id`,`name`,`show_name`,`guard_name`,`created_at`,`updated_at`) values (38,'template.edit','Edit Template','web','2017-06-02 20:52:24','2017-06-02 20:52:24');
insert  into `permissions`(`id`,`name`,`show_name`,`guard_name`,`created_at`,`updated_at`) values (39,'template.delete','Delete Template','web','2017-06-02 20:52:34','2017-06-02 20:52:34');
insert  into `permissions`(`id`,`name`,`show_name`,`guard_name`,`created_at`,`updated_at`) values (40,'campaign.participant','See Campaign Participant','web','2017-06-02 20:55:10','2017-06-02 20:55:10');
insert  into `permissions`(`id`,`name`,`show_name`,`guard_name`,`created_at`,`updated_at`) values (41,'campaign.images','See Campaign Images','web','2017-06-02 20:55:22','2017-06-02 20:55:22');
insert  into `permissions`(`id`,`name`,`show_name`,`guard_name`,`created_at`,`updated_at`) values (42,'campaign.detail','Campaign Detail','web','2017-06-02 20:55:45','2017-06-02 20:55:45');
insert  into `permissions`(`id`,`name`,`show_name`,`guard_name`,`created_at`,`updated_at`) values (43,'campaign.approve','Approve Campaign','web','2017-06-02 20:55:57','2017-06-02 20:55:57');
insert  into `permissions`(`id`,`name`,`show_name`,`guard_name`,`created_at`,`updated_at`) values (44,'promo','Promo','web','2017-06-15 23:02:52','2017-06-15 23:02:52');
insert  into `permissions`(`id`,`name`,`show_name`,`guard_name`,`created_at`,`updated_at`) values (45,'promo.add','Add Promo','web','2017-06-15 23:02:57','2017-06-15 23:02:57');
insert  into `permissions`(`id`,`name`,`show_name`,`guard_name`,`created_at`,`updated_at`) values (46,'promo.edit','Edit Promo','web','2017-06-15 23:03:03','2017-06-15 23:03:03');
insert  into `permissions`(`id`,`name`,`show_name`,`guard_name`,`created_at`,`updated_at`) values (47,'promo.delete','Delete Promo','web','2017-06-15 23:03:10','2017-06-15 23:03:10');
insert  into `permissions`(`id`,`name`,`show_name`,`guard_name`,`created_at`,`updated_at`) values (48,'coins','Coin','web','2017-08-04 06:15:56','2017-08-04 06:15:56');

/*Table structure for table `post_has_categories` */

CREATE TABLE `post_has_categories` (
  `id` bigint(20) NOT NULL,
  `post_id` bigint(20) unsigned NOT NULL,
  `category_id` int(10) unsigned NOT NULL,
  KEY `post_has_categories_post_id_foreign` (`post_id`),
  KEY `post_has_categories_category_id_foreign` (`category_id`),
  CONSTRAINT `post_has_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  CONSTRAINT `post_has_categories_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `post_has_categories` */

/*Table structure for table `post_has_medias` */

CREATE TABLE `post_has_medias` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `post_id` bigint(20) unsigned NOT NULL,
  `media_id` int(10) unsigned NOT NULL,
  KEY `post_has_medias_post_id_foreign` (`post_id`),
  KEY `post_has_medias_media_id_foreign` (`media_id`),
  KEY `id` (`id`),
  CONSTRAINT `post_has_medias_media_id_foreign` FOREIGN KEY (`media_id`) REFERENCES `medias` (`id`) ON DELETE CASCADE,
  CONSTRAINT `post_has_medias_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `post_has_medias` */

insert  into `post_has_medias`(`id`,`post_id`,`media_id`) values (24,34,32);
insert  into `post_has_medias`(`id`,`post_id`,`media_id`) values (30,32,47);
insert  into `post_has_medias`(`id`,`post_id`,`media_id`) values (32,56,41);
insert  into `post_has_medias`(`id`,`post_id`,`media_id`) values (46,251,51);
insert  into `post_has_medias`(`id`,`post_id`,`media_id`) values (47,252,58);
insert  into `post_has_medias`(`id`,`post_id`,`media_id`) values (48,253,52);
insert  into `post_has_medias`(`id`,`post_id`,`media_id`) values (49,254,59);
insert  into `post_has_medias`(`id`,`post_id`,`media_id`) values (50,255,56);
insert  into `post_has_medias`(`id`,`post_id`,`media_id`) values (51,256,55);
insert  into `post_has_medias`(`id`,`post_id`,`media_id`) values (52,257,53);
insert  into `post_has_medias`(`id`,`post_id`,`media_id`) values (53,258,54);
insert  into `post_has_medias`(`id`,`post_id`,`media_id`) values (54,259,57);
insert  into `post_has_medias`(`id`,`post_id`,`media_id`) values (55,260,60);
insert  into `post_has_medias`(`id`,`post_id`,`media_id`) values (56,261,61);
insert  into `post_has_medias`(`id`,`post_id`,`media_id`) values (57,262,62);
insert  into `post_has_medias`(`id`,`post_id`,`media_id`) values (58,263,63);
insert  into `post_has_medias`(`id`,`post_id`,`media_id`) values (59,264,64);
insert  into `post_has_medias`(`id`,`post_id`,`media_id`) values (61,272,68);
insert  into `post_has_medias`(`id`,`post_id`,`media_id`) values (62,273,69);
insert  into `post_has_medias`(`id`,`post_id`,`media_id`) values (63,274,70);
insert  into `post_has_medias`(`id`,`post_id`,`media_id`) values (64,275,71);
insert  into `post_has_medias`(`id`,`post_id`,`media_id`) values (65,276,72);
insert  into `post_has_medias`(`id`,`post_id`,`media_id`) values (66,277,73);
insert  into `post_has_medias`(`id`,`post_id`,`media_id`) values (67,278,74);
insert  into `post_has_medias`(`id`,`post_id`,`media_id`) values (68,56,75);
insert  into `post_has_medias`(`id`,`post_id`,`media_id`) values (69,34,76);
insert  into `post_has_medias`(`id`,`post_id`,`media_id`) values (70,32,77);
insert  into `post_has_medias`(`id`,`post_id`,`media_id`) values (71,279,78);
insert  into `post_has_medias`(`id`,`post_id`,`media_id`) values (72,280,79);
insert  into `post_has_medias`(`id`,`post_id`,`media_id`) values (73,281,80);
insert  into `post_has_medias`(`id`,`post_id`,`media_id`) values (74,283,81);

/*Table structure for table `post_has_tags` */

CREATE TABLE `post_has_tags` (
  `id` bigint(20) NOT NULL,
  `post_id` bigint(20) unsigned NOT NULL,
  `tag_id` int(10) unsigned NOT NULL,
  KEY `post_has_tags_post_id_foreign` (`post_id`),
  KEY `post_has_tags_tag_id_foreign` (`tag_id`),
  CONSTRAINT `post_has_tags_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  CONSTRAINT `post_has_tags_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `post_has_tags` */

/*Table structure for table `post_meta_translations` */

CREATE TABLE `post_meta_translations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_meta_id` bigint(20) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `post_meta_translation_post_meta_id_foreign` (`post_meta_id`),
  CONSTRAINT `post_meta_translation_post_meta_id_foreign` FOREIGN KEY (`post_meta_id`) REFERENCES `post_metas` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=137 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `post_meta_translations` */

insert  into `post_meta_translations`(`id`,`post_meta_id`,`locale`,`value`) values (108,111,'en','Regular Pack');
insert  into `post_meta_translations`(`id`,`post_meta_id`,`locale`,`value`) values (109,112,'en','Regular Pack');
insert  into `post_meta_translations`(`id`,`post_meta_id`,`locale`,`value`) values (110,113,'en','Regular Pack');
insert  into `post_meta_translations`(`id`,`post_meta_id`,`locale`,`value`) values (111,114,'en','Regular Pack');
insert  into `post_meta_translations`(`id`,`post_meta_id`,`locale`,`value`) values (112,115,'en','Regular Pack');
insert  into `post_meta_translations`(`id`,`post_meta_id`,`locale`,`value`) values (113,116,'en','Regular Pack');
insert  into `post_meta_translations`(`id`,`post_meta_id`,`locale`,`value`) values (114,117,'en','Regular Pack');
insert  into `post_meta_translations`(`id`,`post_meta_id`,`locale`,`value`) values (115,118,'en','Regular Pack');
insert  into `post_meta_translations`(`id`,`post_meta_id`,`locale`,`value`) values (116,119,'en','Regular Pack');
insert  into `post_meta_translations`(`id`,`post_meta_id`,`locale`,`value`) values (117,120,'en','Regular Pack');
insert  into `post_meta_translations`(`id`,`post_meta_id`,`locale`,`value`) values (118,121,'en','Family Pack');
insert  into `post_meta_translations`(`id`,`post_meta_id`,`locale`,`value`) values (120,123,'en','Family Pack');
insert  into `post_meta_translations`(`id`,`post_meta_id`,`locale`,`value`) values (121,124,'en','Family Pack');
insert  into `post_meta_translations`(`id`,`post_meta_id`,`locale`,`value`) values (123,126,'en','Special Pack');
insert  into `post_meta_translations`(`id`,`post_meta_id`,`locale`,`value`) values (135,138,'en','https://www.youtube.com/watch?v=VoUjaLDXBDc');
insert  into `post_meta_translations`(`id`,`post_meta_id`,`locale`,`value`) values (136,139,'en','VoUjaLDXBDc');

/*Table structure for table `post_metas` */

CREATE TABLE `post_metas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` bigint(20) unsigned NOT NULL,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `post_metas_post_id_foreign` (`post_id`),
  CONSTRAINT `post_metas_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=140 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `post_metas` */

insert  into `post_metas`(`id`,`post_id`,`meta_key`) values (111,251,'product_type');
insert  into `post_metas`(`id`,`post_id`,`meta_key`) values (112,252,'product_type');
insert  into `post_metas`(`id`,`post_id`,`meta_key`) values (113,253,'product_type');
insert  into `post_metas`(`id`,`post_id`,`meta_key`) values (114,254,'product_type');
insert  into `post_metas`(`id`,`post_id`,`meta_key`) values (115,255,'product_type');
insert  into `post_metas`(`id`,`post_id`,`meta_key`) values (116,256,'product_type');
insert  into `post_metas`(`id`,`post_id`,`meta_key`) values (117,257,'product_type');
insert  into `post_metas`(`id`,`post_id`,`meta_key`) values (118,258,'product_type');
insert  into `post_metas`(`id`,`post_id`,`meta_key`) values (119,259,'product_type');
insert  into `post_metas`(`id`,`post_id`,`meta_key`) values (120,260,'product_type');
insert  into `post_metas`(`id`,`post_id`,`meta_key`) values (121,261,'product_type');
insert  into `post_metas`(`id`,`post_id`,`meta_key`) values (123,263,'product_type');
insert  into `post_metas`(`id`,`post_id`,`meta_key`) values (124,262,'product_type');
insert  into `post_metas`(`id`,`post_id`,`meta_key`) values (126,264,'product_type');
insert  into `post_metas`(`id`,`post_id`,`meta_key`) values (138,282,'video_link');
insert  into `post_metas`(`id`,`post_id`,`meta_key`) values (139,282,'video_id');

/*Table structure for table `post_translations` */

CREATE TABLE `post_translations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` bigint(20) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  `page_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `post_translations_post_id_foreign` (`post_id`),
  CONSTRAINT `post_translations_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=316 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `post_translations` */

insert  into `post_translations`(`id`,`post_id`,`locale`,`title`,`excerpt`,`content`,`page_title`,`meta_description`) values (272,251,'en','Jagung','',NULL,'','');
insert  into `post_translations`(`id`,`post_id`,`locale`,`title`,`excerpt`,`content`,`page_title`,`meta_description`) values (273,252,'en','Asin','',NULL,'','');
insert  into `post_translations`(`id`,`post_id`,`locale`,`title`,`excerpt`,`content`,`page_title`,`meta_description`) values (274,253,'en','Keju','',NULL,'','');
insert  into `post_translations`(`id`,`post_id`,`locale`,`title`,`excerpt`,`content`,`page_title`,`meta_description`) values (275,254,'en','Cokelat','',NULL,'','');
insert  into `post_translations`(`id`,`post_id`,`locale`,`title`,`excerpt`,`content`,`page_title`,`meta_description`) values (276,255,'en','Stroberi','',NULL,'','');
insert  into `post_translations`(`id`,`post_id`,`locale`,`title`,`excerpt`,`content`,`page_title`,`meta_description`) values (277,256,'en','Sate','',NULL,'','');
insert  into `post_translations`(`id`,`post_id`,`locale`,`title`,`excerpt`,`content`,`page_title`,`meta_description`) values (278,257,'en','Manis','',NULL,'','');
insert  into `post_translations`(`id`,`post_id`,`locale`,`title`,`excerpt`,`content`,`page_title`,`meta_description`) values (279,258,'en','Pizza','',NULL,'','');
insert  into `post_translations`(`id`,`post_id`,`locale`,`title`,`excerpt`,`content`,`page_title`,`meta_description`) values (280,259,'en','Susu','',NULL,'','');
insert  into `post_translations`(`id`,`post_id`,`locale`,`title`,`excerpt`,`content`,`page_title`,`meta_description`) values (281,260,'en','Rumput Laut','',NULL,'','');
insert  into `post_translations`(`id`,`post_id`,`locale`,`title`,`excerpt`,`content`,`page_title`,`meta_description`) values (282,261,'en','Stroberi','',NULL,'','');
insert  into `post_translations`(`id`,`post_id`,`locale`,`title`,`excerpt`,`content`,`page_title`,`meta_description`) values (284,263,'en','Cokelat','',NULL,'','');
insert  into `post_translations`(`id`,`post_id`,`locale`,`title`,`excerpt`,`content`,`page_title`,`meta_description`) values (285,262,'en','Keju','',NULL,'','');
insert  into `post_translations`(`id`,`post_id`,`locale`,`title`,`excerpt`,`content`,`page_title`,`meta_description`) values (287,264,'en','Ceria','',NULL,'','');
insert  into `post_translations`(`id`,`post_id`,`locale`,`title`,`excerpt`,`content`,`page_title`,`meta_description`) values (300,272,'en','IGTKI with Tini Wini Biti','Tini Wini Biti di tahun 2015 mengikuti kegiatan yang diselenggarakan oleh Ikatan Guru Taman Kanak-Kanak Indonesia yang dilakukan di Taman Mini Indonesia Indah. Ada beberapa kegiatan yang dilakukan di sana, diantaranya lomba mewarnai, lomba futsal, lomba menari, dan menonton film bersama di di teater Keong Mas. Acara ini sendiri diikuti oleh beberapa TK di wilayah Jakarta.','Tini Wini Biti di tahun 2015 mengikuti kegiatan yang diselenggarakan oleh Ikatan Guru Taman Kanak-Kanak Indonesia yang dilakukan di Taman Mini Indonesia Indah. Ada beberapa kegiatan yang dilakukan di sana, diantaranya lomba mewarnai, lomba futsal, lomba menari, dan menonton film bersama di di teater Keong Mas. Acara ini sendiri diikuti oleh beberapa TK di wilayah Jakarta.','IGTKI with Tini Wini Biti','');
insert  into `post_translations`(`id`,`post_id`,`locale`,`title`,`excerpt`,`content`,`page_title`,`meta_description`) values (301,273,'en','IKCA (Indonesia Kids Choice Award)','Acara yang didalamnya memilih acara kartun, artis\ndan musisi Indonesia terbaik yang dipilih langsung\noleh anak anak Indonesia melalui School to school\nselam 1 bulan, menjadi agenda tahunan bagi Global\nTv bekerja sama dengan Nickelodeon. Didalam event\nschool to schoolnya sendiri ada berbagai kegiatan\nseperti Lomba Mewarnai Tini Wini Biti bagi kelas 1\nSD. Dan diacara malam Final, Tin Wini Biti\nmembagikan hadiah bagi para audience dan artis\nyang ikut memeriahkan acara tersebut.','Acara yang didalamnya memilih acara kartun, artis dan musisi Indonesia terbaik yang dipilih langsung oleh anak anak Indonesia melalui School to school selam 1 bulan, menjadi agenda tahunan bagi Global Tv bekerja sama dengan Nickelodeon. Didalam event school to schoolnya sendiri ada berbagai kegiatan seperti Lomba Mewarnai Tini Wini Biti bagi kelas 1 SD. Dan diacara malam Final, Tin Wini Biti membagikan hadiah bagi para audience dan artis yang ikut memeriahkan acara tersebut.','IKCA (Indonesia Kids Choice Award)','');
insert  into `post_translations`(`id`,`post_id`,`locale`,`title`,`excerpt`,`content`,`page_title`,`meta_description`) values (302,274,'en','Tini Wini Biti at Summarecon','Dalam rangka menyambut tahun Kambing, Summarecon\nSerpong mengadakan event Shawn the Sheep the Movie\nselama sebulan penuh. Acara yang digelar berupa\nlomba mewarnai bersama Tini Wini Biti dan live\nperformance dari artis-artis ibukota di setiap\nweekend.','Dalam rangka menyambut tahun Kambing, Summarecon Serpong mengadakan event Shawn the Sheep the Movie selama sebulan penuh. Acara yang digelar berupa lomba mewarnai bersama Tini Wini Biti dan live performance dari artis-artis ibukota di setiap weekend.','Tini Wini Biti at Summarecon','');
insert  into `post_translations`(`id`,`post_id`,`locale`,`title`,`excerpt`,`content`,`page_title`,`meta_description`) values (303,275,'en','Negeri Dongeng with Tini Wini Biti','Acara ini digelar di Kids and Family Expo yang\ndiselenggarakan di JEC Jogjakarta pada tanggal 1-5\nApril 2015. Acara ini juga menjadi ajang untuk\nMoms dan si kecil untuk berinteraksi langsung\ndengan maskot dari 5 binatang Tini Wini Biti.\nSelain itu si kecil juga bisa berfoto bersama\nkeluarga di area photoboth, serta berkaraoke\nbersama menyanyikan jingle Tini Wini Biti.','Acara ini digelar di Kids and Family Expo yang diselenggarakan di JEC Jogjakarta pada tanggal 1-5 April 2015. Acara ini juga menjadi ajang untuk Moms dan si kecil untuk berinteraksi langsung dengan maskot dari 5 binatang Tini Wini Biti. Selain itu si kecil juga bisa berfoto bersama keluarga di area photoboth, serta berkaraoke bersama menyanyikan jingle Tini Wini Biti.','Negeri Dongeng with Tini Wini Biti','');
insert  into `post_translations`(`id`,`post_id`,`locale`,`title`,`excerpt`,`content`,`page_title`,`meta_description`) values (304,276,'en','Pekan Raya Jakarta','Dalam rangka menyambut Ulang Tahun Kota DKI\nJakarta, Pekan Raya Jakarta (PRJ) selalu menjadi\nevent yang paling ditunggu tunggu dan diminati.\nPada event ini Tini Wini Biti membuka booth dengan\nbeberapa kegiatan yaitu Lomba karaoke Jingle Tini\nWini Biti serta foto dibooth TWB dengan 5 boneka\nbinatang Tini Wini Biti dan Big Icon Gajah TWB.','Dalam rangka menyambut Ulang Tahun Kota DKI Jakarta, Pekan Raya Jakarta (PRJ) selalu menjadi event yang paling ditunggu tunggu dan diminati. Pada event ini Tini Wini Biti membuka booth dengan beberapa kegiatan yaitu Lomba karaoke Jingle Tini Wini Biti serta foto dibooth TWB dengan 5 boneka binatang Tini Wini Biti dan Big Icon Gajah TWB.','Pekan Raya Jakarta','');
insert  into `post_translations`(`id`,`post_id`,`locale`,`title`,`excerpt`,`content`,`page_title`,`meta_description`) values (305,277,'en','Car Free Day with Tini Wini Biti','Kegiatan Fun Day with Tini Wini Biti ini dilakukan\ndi acara Car Free Day dengan menampilkan acara\nolah raga bersama dengan jingle Tini Wini Biti\nbersama dengan para maskot. Kegiatan ini terbuka\nuntuk umum, mengambil tempat di dekat Bunderan HI.\nAcara juga dimeriahkan dengan berjalan bersama di\nseputaran Thamrin-Sudirman dengan para dancer yang\nmelakukan Flash Mob dengan jingle Tini Wini Biti','Kegiatan Fun Day with Tini Wini Biti ini dilakukan di acara Car Free Day dengan menampilkan acara olah raga bersama dengan jingle Tini Wini Biti bersama dengan para maskot. Kegiatan ini terbuka untuk umum, mengambil tempat di dekat Bunderan HI. Acara juga dimeriahkan dengan berjalan bersama di seputaran Thamrin-Sudirman dengan para dancer yang melakukan Flash Mob dengan jingle Tini Wini Biti','Car Free Day with Tini Wini Biti','');
insert  into `post_translations`(`id`,`post_id`,`locale`,`title`,`excerpt`,`content`,`page_title`,`meta_description`) values (306,278,'en','Fun Day with Tini Wini Biti','Acara ini merupakan kegiatan road show ke beberapa\nsekolah SD di Jabodetabek. Kegiatan ini\nbekerjasama dengan majalah Kiddo dengan\nmenampilkan lomba antar kelas seperti lomba\nmewarnai dan lomba menari dnegan jingle Tini Wini\nBiti','Acara ini merupakan kegiatan road show ke beberapa sekolah SD di Jabodetabek. Kegiatan ini bekerjasama dengan majalah Kiddo dengan menampilkan lomba antar kelas seperti lomba mewarnai dan lomba menari dnegan jingle Tini Wini Biti','Fun Day with Tini Wini Biti','');
insert  into `post_translations`(`id`,`post_id`,`locale`,`title`,`excerpt`,`content`,`page_title`,`meta_description`) values (307,56,'en','Bermain Bersama Ikan','',NULL,'Bermain Bersama Ikan','');
insert  into `post_translations`(`id`,`post_id`,`locale`,`title`,`excerpt`,`content`,`page_title`,`meta_description`) values (308,34,'en','Taman Favorit Gajah','',NULL,'Taman Favorit Gajah','');
insert  into `post_translations`(`id`,`post_id`,`locale`,`title`,`excerpt`,`content`,`page_title`,`meta_description`) values (309,32,'en','Sahabat Main Kura - Kura','',NULL,'Sahabat Main Kura - Kura','');
insert  into `post_translations`(`id`,`post_id`,`locale`,`title`,`excerpt`,`content`,`page_title`,`meta_description`) values (310,279,'en','Promo Ramayana','',NULL,'Promo Ramayana','');
insert  into `post_translations`(`id`,`post_id`,`locale`,`title`,`excerpt`,`content`,`page_title`,`meta_description`) values (311,280,'en','Promo Alfa','',NULL,'Promo Alfa','');
insert  into `post_translations`(`id`,`post_id`,`locale`,`title`,`excerpt`,`content`,`page_title`,`meta_description`) values (312,281,'en','Promo Carrefour','',NULL,'Promo Carrefour','');
insert  into `post_translations`(`id`,`post_id`,`locale`,`title`,`excerpt`,`content`,`page_title`,`meta_description`) values (314,282,'en','Tini Wini Biti','Ayo download Dunia Tini Wini Biti di Google Play\ndan hidupkan imajinasi si kecil dengan karakter di\ndalamnya. <br /><br />Kumpulkan koleksi ke-14\nkoinnya, sekarang juga!','Ayo download Dunia Tini Wini Biti di Google Play dan hidupkan imajinasi si kecil dengan karakter di dalamnya. <br /><br />Kumpulkan koleksi ke-14 koinnya, sekarang juga!','Tini Wini Biti','');
insert  into `post_translations`(`id`,`post_id`,`locale`,`title`,`excerpt`,`content`,`page_title`,`meta_description`) values (315,283,'en','Promo AEON','',NULL,'Promo AEON','');

/*Table structure for table `post_type_translations` */

CREATE TABLE `post_type_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_type_id` int(10) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `post_type_translations_post_type_id_foreign` (`post_type_id`),
  CONSTRAINT `post_type_translations_post_type_id_foreign` FOREIGN KEY (`post_type_id`) REFERENCES `post_types` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `post_type_translations` */

insert  into `post_type_translations`(`id`,`post_type_id`,`locale`,`title`,`excerpt`,`content`) values (1,1,'en','News','News',NULL);
insert  into `post_type_translations`(`id`,`post_type_id`,`locale`,`title`,`excerpt`,`content`) values (2,1,'id','Berita','Berita',NULL);
insert  into `post_type_translations`(`id`,`post_type_id`,`locale`,`title`,`excerpt`,`content`) values (3,2,'en','Events','Events',NULL);
insert  into `post_type_translations`(`id`,`post_type_id`,`locale`,`title`,`excerpt`,`content`) values (4,2,'id','Acara','Acara',NULL);
insert  into `post_type_translations`(`id`,`post_type_id`,`locale`,`title`,`excerpt`,`content`) values (5,3,'en','Videos','Video',NULL);
insert  into `post_type_translations`(`id`,`post_type_id`,`locale`,`title`,`excerpt`,`content`) values (6,3,'id','Video','Video',NULL);
insert  into `post_type_translations`(`id`,`post_type_id`,`locale`,`title`,`excerpt`,`content`) values (7,4,'en','Template','Template',NULL);
insert  into `post_type_translations`(`id`,`post_type_id`,`locale`,`title`,`excerpt`,`content`) values (8,4,'id','Template','Template',NULL);
insert  into `post_type_translations`(`id`,`post_type_id`,`locale`,`title`,`excerpt`,`content`) values (9,5,'en','Product','Product',NULL);
insert  into `post_type_translations`(`id`,`post_type_id`,`locale`,`title`,`excerpt`,`content`) values (10,5,'id','Produk','Produk',NULL);

/*Table structure for table `post_types` */

CREATE TABLE `post_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_by_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pts_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `post_types` */

insert  into `post_types`(`id`,`slug`,`created_by`,`created_by_name`,`created_at`,`updated_at`) values (1,'news',1,'pashamahardika',NULL,NULL);
insert  into `post_types`(`id`,`slug`,`created_by`,`created_by_name`,`created_at`,`updated_at`) values (2,'event',1,'pashamahardika',NULL,NULL);
insert  into `post_types`(`id`,`slug`,`created_by`,`created_by_name`,`created_at`,`updated_at`) values (3,'video',1,'pashamahardika',NULL,NULL);
insert  into `post_types`(`id`,`slug`,`created_by`,`created_by_name`,`created_at`,`updated_at`) values (4,'template',1,'pashamahardika',NULL,NULL);
insert  into `post_types`(`id`,`slug`,`created_by`,`created_by_name`,`created_at`,`updated_at`) values (5,'product',1,'pashamahardika',NULL,NULL);

/*Table structure for table `posts` */

CREATE TABLE `posts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_type_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'post',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'draft',
  `parent_id` bigint(20) NOT NULL DEFAULT '0',
  `sort_order` int(11) NOT NULL DEFAULT '0',
  `publish_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_by_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `views` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `posts_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=284 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `posts` */

insert  into `posts`(`id`,`slug`,`post_type_id`,`status`,`parent_id`,`sort_order`,`publish_at`,`created_by`,`created_by_name`,`created_at`,`updated_at`,`views`) values (32,'test-template','4','publish',0,0,'2017-05-22 00:00:00',1,'pashamahardika','2017-05-22 05:51:18','2017-06-14 00:00:23',0);
insert  into `posts`(`id`,`slug`,`post_type_id`,`status`,`parent_id`,`sort_order`,`publish_at`,`created_by`,`created_by_name`,`created_at`,`updated_at`,`views`) values (34,'template-kedua','4','publish',0,0,'2017-05-25 00:00:00',1,'pashamahardika','2017-05-22 06:23:17','2017-06-13 23:59:47',0);
insert  into `posts`(`id`,`slug`,`post_type_id`,`status`,`parent_id`,`sort_order`,`publish_at`,`created_by`,`created_by_name`,`created_at`,`updated_at`,`views`) values (56,'bermain-bersama-ikan','4','publish',0,0,'2017-05-22 00:00:00',5,'Nanang','2017-05-22 19:48:08','2017-06-13 23:59:24',0);
insert  into `posts`(`id`,`slug`,`post_type_id`,`status`,`parent_id`,`sort_order`,`publish_at`,`created_by`,`created_by_name`,`created_at`,`updated_at`,`views`) values (251,'produk-jagung','5','publish',0,0,'2017-05-16 00:00:00',5,'Nanang','2017-05-28 21:02:10','2017-05-28 21:13:31',0);
insert  into `posts`(`id`,`slug`,`post_type_id`,`status`,`parent_id`,`sort_order`,`publish_at`,`created_by`,`created_by_name`,`created_at`,`updated_at`,`views`) values (252,'asin','5','publish',0,0,'2017-05-16 00:00:00',5,'Nanang','2017-05-28 21:13:55','2017-05-28 21:13:55',0);
insert  into `posts`(`id`,`slug`,`post_type_id`,`status`,`parent_id`,`sort_order`,`publish_at`,`created_by`,`created_by_name`,`created_at`,`updated_at`,`views`) values (253,'keju','5','publish',0,0,'2017-05-16 00:00:00',5,'Nanang','2017-05-28 21:14:13','2017-05-28 21:14:13',0);
insert  into `posts`(`id`,`slug`,`post_type_id`,`status`,`parent_id`,`sort_order`,`publish_at`,`created_by`,`created_by_name`,`created_at`,`updated_at`,`views`) values (254,'cokelat','5','publish',0,0,'2017-05-16 00:00:00',5,'Nanang','2017-05-28 21:14:41','2017-05-28 21:14:41',0);
insert  into `posts`(`id`,`slug`,`post_type_id`,`status`,`parent_id`,`sort_order`,`publish_at`,`created_by`,`created_by_name`,`created_at`,`updated_at`,`views`) values (255,'stroberi','5','publish',0,0,'2017-05-17 00:00:00',5,'Nanang','2017-05-28 21:15:02','2017-05-28 21:15:02',0);
insert  into `posts`(`id`,`slug`,`post_type_id`,`status`,`parent_id`,`sort_order`,`publish_at`,`created_by`,`created_by_name`,`created_at`,`updated_at`,`views`) values (256,'sate','5','publish',0,0,'2017-05-18 00:00:00',5,'Nanang','2017-05-28 21:15:19','2017-05-28 21:15:19',0);
insert  into `posts`(`id`,`slug`,`post_type_id`,`status`,`parent_id`,`sort_order`,`publish_at`,`created_by`,`created_by_name`,`created_at`,`updated_at`,`views`) values (257,'manis','5','publish',0,0,'2017-05-18 00:00:00',5,'Nanang','2017-05-28 21:15:34','2017-05-28 21:15:34',0);
insert  into `posts`(`id`,`slug`,`post_type_id`,`status`,`parent_id`,`sort_order`,`publish_at`,`created_by`,`created_by_name`,`created_at`,`updated_at`,`views`) values (258,'pizza','5','publish',0,0,'2017-05-19 00:00:00',5,'Nanang','2017-05-28 21:15:50','2017-05-28 21:15:50',0);
insert  into `posts`(`id`,`slug`,`post_type_id`,`status`,`parent_id`,`sort_order`,`publish_at`,`created_by`,`created_by_name`,`created_at`,`updated_at`,`views`) values (259,'susu','5','publish',0,0,'2017-05-20 00:00:00',5,'Nanang','2017-05-28 21:16:04','2017-05-28 21:16:04',0);
insert  into `posts`(`id`,`slug`,`post_type_id`,`status`,`parent_id`,`sort_order`,`publish_at`,`created_by`,`created_by_name`,`created_at`,`updated_at`,`views`) values (260,'rumput-laut','5','publish',0,0,'2017-05-20 00:00:00',5,'Nanang','2017-05-28 21:16:25','2017-05-28 21:16:25',0);
insert  into `posts`(`id`,`slug`,`post_type_id`,`status`,`parent_id`,`sort_order`,`publish_at`,`created_by`,`created_by_name`,`created_at`,`updated_at`,`views`) values (261,'stroberi-2','5','publish',0,0,'2017-05-21 00:00:00',5,'Nanang','2017-05-28 21:17:16','2017-05-28 21:17:16',0);
insert  into `posts`(`id`,`slug`,`post_type_id`,`status`,`parent_id`,`sort_order`,`publish_at`,`created_by`,`created_by_name`,`created_at`,`updated_at`,`views`) values (262,'keju-2','5','publish',0,0,'2017-05-21 00:00:00',5,'Nanang','2017-05-28 21:17:29','2017-05-28 21:17:48',0);
insert  into `posts`(`id`,`slug`,`post_type_id`,`status`,`parent_id`,`sort_order`,`publish_at`,`created_by`,`created_by_name`,`created_at`,`updated_at`,`views`) values (263,'cokelat-2','5','publish',0,0,'2017-05-21 00:00:00',5,'Nanang','2017-05-28 21:17:41','2017-05-28 21:17:41',0);
insert  into `posts`(`id`,`slug`,`post_type_id`,`status`,`parent_id`,`sort_order`,`publish_at`,`created_by`,`created_by_name`,`created_at`,`updated_at`,`views`) values (264,'ceria','5','publish',0,0,'2017-05-21 00:00:00',5,'Nanang','2017-05-28 21:18:12','2017-05-29 02:02:53',0);
insert  into `posts`(`id`,`slug`,`post_type_id`,`status`,`parent_id`,`sort_order`,`publish_at`,`created_by`,`created_by_name`,`created_at`,`updated_at`,`views`) values (272,'igtki-with-tini-wini-biti-2','1','publish',0,0,'2015-09-08 00:00:00',1,'Pasha Mahardika','2017-06-13 22:39:16','2017-06-14 00:58:03',3);
insert  into `posts`(`id`,`slug`,`post_type_id`,`status`,`parent_id`,`sort_order`,`publish_at`,`created_by`,`created_by_name`,`created_at`,`updated_at`,`views`) values (273,'ikca-indonesia-kids-choice-award','1','publish',0,0,'2016-06-01 00:00:00',1,'Pasha Mahardika','2017-06-13 22:42:54','2017-06-13 22:43:04',1);
insert  into `posts`(`id`,`slug`,`post_type_id`,`status`,`parent_id`,`sort_order`,`publish_at`,`created_by`,`created_by_name`,`created_at`,`updated_at`,`views`) values (274,'tini-wini-biti-at-summarecon','1','publish',0,0,'2016-10-12 00:00:00',1,'Pasha Mahardika','2017-06-13 22:43:58','2017-06-17 21:11:15',2);
insert  into `posts`(`id`,`slug`,`post_type_id`,`status`,`parent_id`,`sort_order`,`publish_at`,`created_by`,`created_by_name`,`created_at`,`updated_at`,`views`) values (275,'negeri-dongeng-with-tini-wini-biti','1','publish',0,0,'2016-11-18 00:00:00',1,'Pasha Mahardika','2017-06-13 22:45:10','2017-06-13 22:45:10',0);
insert  into `posts`(`id`,`slug`,`post_type_id`,`status`,`parent_id`,`sort_order`,`publish_at`,`created_by`,`created_by_name`,`created_at`,`updated_at`,`views`) values (276,'pekan-raya-jakarta','1','publish',0,0,'2017-02-02 00:00:00',1,'Pasha Mahardika','2017-06-13 22:46:24','2017-06-17 21:11:21',1);
insert  into `posts`(`id`,`slug`,`post_type_id`,`status`,`parent_id`,`sort_order`,`publish_at`,`created_by`,`created_by_name`,`created_at`,`updated_at`,`views`) values (277,'car-free-day-with-tini-wini-biti','1','publish',0,0,'2017-03-02 00:00:00',1,'Pasha Mahardika','2017-06-13 22:47:43','2017-06-13 22:47:43',0);
insert  into `posts`(`id`,`slug`,`post_type_id`,`status`,`parent_id`,`sort_order`,`publish_at`,`created_by`,`created_by_name`,`created_at`,`updated_at`,`views`) values (278,'fun-day-with-tini-wini-biti','1','publish',0,0,'2017-06-01 00:00:00',1,'Pasha Mahardika','2017-06-13 22:48:34','2017-08-29 05:43:00',2);
insert  into `posts`(`id`,`slug`,`post_type_id`,`status`,`parent_id`,`sort_order`,`publish_at`,`created_by`,`created_by_name`,`created_at`,`updated_at`,`views`) values (279,'promo-ramayana','6','publish',0,0,'2017-06-20 00:00:00',1,'Pasha Mahardika','2017-06-20 07:46:18','2017-06-20 07:46:18',0);
insert  into `posts`(`id`,`slug`,`post_type_id`,`status`,`parent_id`,`sort_order`,`publish_at`,`created_by`,`created_by_name`,`created_at`,`updated_at`,`views`) values (280,'promo-alfa','6','publish',0,0,'2017-06-20 00:00:00',1,'Pasha Mahardika','2017-06-20 07:46:43','2017-06-20 07:46:43',0);
insert  into `posts`(`id`,`slug`,`post_type_id`,`status`,`parent_id`,`sort_order`,`publish_at`,`created_by`,`created_by_name`,`created_at`,`updated_at`,`views`) values (281,'promo-carrefour','6','publish',0,0,'2017-06-20 00:00:00',1,'Pasha Mahardika','2017-06-20 07:47:07','2017-06-20 07:47:07',0);
insert  into `posts`(`id`,`slug`,`post_type_id`,`status`,`parent_id`,`sort_order`,`publish_at`,`created_by`,`created_by_name`,`created_at`,`updated_at`,`views`) values (282,'tini-wini-biti','3','publish',0,0,'2017-06-20 00:00:00',1,'Pasha Mahardika','2017-06-20 07:50:22','2017-06-20 07:50:48',0);
insert  into `posts`(`id`,`slug`,`post_type_id`,`status`,`parent_id`,`sort_order`,`publish_at`,`created_by`,`created_by_name`,`created_at`,`updated_at`,`views`) values (283,'promo-aeon','6','publish',0,0,'2017-07-11 00:00:00',1,'Pasha Mahardika','2017-07-12 04:23:09','2017-07-12 04:23:09',0);

/*Table structure for table `role_has_permissions` */

CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `role_has_permissions` */

insert  into `role_has_permissions`(`permission_id`,`role_id`) values (4,6);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (5,6);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (6,6);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (7,6);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (8,6);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (9,6);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (10,6);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (11,6);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (12,6);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (13,6);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (14,6);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (15,6);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (16,6);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (17,6);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (20,6);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (21,6);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (22,6);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (23,6);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (24,6);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (25,6);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (26,6);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (27,6);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (28,6);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (29,6);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (30,6);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (31,6);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (32,6);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (33,6);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (34,6);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (35,6);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (36,6);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (37,6);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (38,6);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (39,6);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (40,6);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (41,6);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (42,6);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (43,6);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (44,6);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (45,6);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (46,6);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (47,6);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (48,6);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (8,7);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (18,7);
insert  into `role_has_permissions`(`permission_id`,`role_id`) values (18,8);

/*Table structure for table `roles` */

CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `roles` */

insert  into `roles`(`id`,`name`,`guard_name`,`created_at`,`updated_at`) values (6,'Admin','web','2017-05-15 20:44:57','2017-05-15 23:46:22');
insert  into `roles`(`id`,`name`,`guard_name`,`created_at`,`updated_at`) values (7,'Frontend','web','2017-05-28 23:37:50','2017-05-28 23:37:50');
insert  into `roles`(`id`,`name`,`guard_name`,`created_at`,`updated_at`) values (8,'Coin','web','2017-08-04 06:20:52','2017-08-04 06:23:10');

/*Table structure for table `social_accounts` */

CREATE TABLE `social_accounts` (
  `user_id` int(11) NOT NULL,
  `provider_user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `social_accounts` */

insert  into `social_accounts`(`user_id`,`provider_user_id`,`provider`,`created_at`,`updated_at`) values (33,'10214366217535687','facebook','2017-08-04 06:24:33','2017-08-04 06:24:33');
insert  into `social_accounts`(`user_id`,`provider_user_id`,`provider`,`created_at`,`updated_at`) values (34,'1370869552997425','facebook','2017-08-08 01:52:35','2017-08-08 01:52:35');

/*Table structure for table `tag_translations` */

CREATE TABLE `tag_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tag_id` int(10) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `tag_translations_tag_id_foreign` (`tag_id`),
  CONSTRAINT `tag_translations_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tag_translations` */

/*Table structure for table `tags` */

CREATE TABLE `tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_by_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tags_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tags` */

/*Table structure for table `user_details` */

CREATE TABLE `user_details` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `birth_date` date DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `mother_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_details_user_id_foreign` (`user_id`),
  CONSTRAINT `user_details_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `user_details` */

insert  into `user_details`(`id`,`user_id`,`birth_date`,`address`,`city`,`created_at`,`updated_at`,`mother_name`,`school_name`,`class_name`,`avatar`) values (3,12,'2012-01-28','Bekasi','Bekasi','2017-05-27 20:15:47','2017-05-27 20:15:47',NULL,NULL,NULL,NULL);
insert  into `user_details`(`id`,`user_id`,`birth_date`,`address`,`city`,`created_at`,`updated_at`,`mother_name`,`school_name`,`class_name`,`avatar`) values (5,15,'2012-01-01','Jakarta','Jakarta','2017-05-27 23:11:44','2017-05-27 23:11:44',NULL,NULL,NULL,NULL);
insert  into `user_details`(`id`,`user_id`,`birth_date`,`address`,`city`,`created_at`,`updated_at`,`mother_name`,`school_name`,`class_name`,`avatar`) values (6,1,'1980-01-01','Bekasi','Bekasi',NULL,NULL,NULL,NULL,NULL,NULL);
insert  into `user_details`(`id`,`user_id`,`birth_date`,`address`,`city`,`created_at`,`updated_at`,`mother_name`,`school_name`,`class_name`,`avatar`) values (7,5,'1978-01-01','Bekasi','Bandung',NULL,'2017-08-04 10:39:17','test nama ibuxx','sekolahan','3B',NULL);
insert  into `user_details`(`id`,`user_id`,`birth_date`,`address`,`city`,`created_at`,`updated_at`,`mother_name`,`school_name`,`class_name`,`avatar`) values (10,25,'1973-04-03','Viale dei Gladiatori','Roma','2017-05-29 00:00:03','2017-05-29 00:00:03',NULL,NULL,NULL,NULL);
insert  into `user_details`(`id`,`user_id`,`birth_date`,`address`,`city`,`created_at`,`updated_at`,`mother_name`,`school_name`,`class_name`,`avatar`) values (11,27,'1994-04-02','Buenos Aires','Buenos Aires','2017-05-31 00:13:38','2017-05-31 00:13:38',NULL,NULL,NULL,NULL);
insert  into `user_details`(`id`,`user_id`,`birth_date`,`address`,`city`,`created_at`,`updated_at`,`mother_name`,`school_name`,`class_name`,`avatar`) values (12,29,'1984-10-10','Bekasi','Bekasi','2017-08-03 02:50:10','2017-08-03 02:50:10','Lies','SDN 01 Petang','06-A',NULL);
insert  into `user_details`(`id`,`user_id`,`birth_date`,`address`,`city`,`created_at`,`updated_at`,`mother_name`,`school_name`,`class_name`,`avatar`) values (17,33,NULL,NULL,NULL,'2017-08-04 06:24:33','2017-08-04 06:24:33','Jennifer','SDN 02','05','https://graph.facebook.com/v2.10/10214366217535687/picture?type=normal');
insert  into `user_details`(`id`,`user_id`,`birth_date`,`address`,`city`,`created_at`,`updated_at`,`mother_name`,`school_name`,`class_name`,`avatar`) values (18,34,NULL,NULL,NULL,'2017-08-08 01:52:35','2017-08-08 01:52:35',NULL,NULL,NULL,'https://graph.facebook.com/v2.10/1370869552997425/picture?type=normal');

/*Table structure for table `users` */

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`) values (1,'Pasha Mahardika','pasha.md5s@gmail.com','$2y$10$DH7lKsY4qsLG7M5VYczPxuCF.TLKKtJEzbnchrNrTWY6NzkKPcF3G','5R23RV1dxhAsqbwmf71R7t18zOpaH5ORxS9xYqLndKkPQochOR28ieHC3hJw','2017-05-02 02:18:22','2017-05-30 02:43:14');
insert  into `users`(`id`,`name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`) values (5,'Nanang','n.nurjamal@gmail.com','$2y$10$XS2euMmFxtsVeTxzPCijXuTNC4S4if6qW2O9xBuBTuhnKG6MWvp5e','sxzMU7KStPPLukwTpg2uGWzA94mippyoZr08g5wmus5t6mU7N9wumC9X6Zdm','2017-05-17 20:49:12','2017-05-17 20:49:12');
insert  into `users`(`id`,`name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`) values (12,'Reyvan Attalif Ibarhim','reyvan@gmail.com','$2y$10$SV.D/Xq2G0ab1IVKJO/l3eWY7qRV1pNri82ii//9wqHsLEEJTAoNu','iJRH0Rvw3cxlUgb0jdMygHOZxzRF9Y6aZl69EXCrmPlM50Gs67WytEbMv6Lf','2017-05-27 20:15:47','2017-05-27 20:15:47');
insert  into `users`(`id`,`name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`) values (15,'Alula Tsabita','luuuuul@gmail.com','$2y$10$h418leHM002AznfGk5SES./qu.djvGy4T6sCV7ofLl3pAE.JG4/0.','E09fUT9TWkDoRjwjHd7sK3z18FZaZ9cNuRVcoDpcfXd0gwVARLMyohIKhgiV','2017-05-27 23:11:44','2017-05-27 23:11:44');
insert  into `users`(`id`,`name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`) values (25,'Francensco Totti','totti@twb.com','$2y$10$dp1658yULRlx7BwuSWpKBuG635SWtOP0CyEAH5lXBrlaSmgpSFk3K','dFu6o1XzrDoKUJbpYxK66RXiQjPEiqDPwTdjRqFIOFUCGEFFBUv7Gj2EAZXJ','2017-05-29 00:00:03','2017-05-29 00:00:03');
insert  into `users`(`id`,`name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`) values (27,'Lionel Messi','messi@twb.com','$2y$10$VcO7EcUpbRL0I6KRzRdtyORdZBgSUUavSS54o07SVDxYcZY7m.2dC','Brg1oAVuqa8EPJTfbUJgP7Rlz5d6FVTdogwyShWvAN1CJ4W49R81OdtWySCO','2017-05-31 00:13:38','2017-05-31 00:13:38');
insert  into `users`(`id`,`name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`) values (28,'Tini Wini Biti','web@tiniwinibiti.id','$2y$10$5p4VPcqHBk4hug1nGgMQfOfuGhtyKvPPU.WQGWKp.6CNtMCU2uPEe','OBAa7GGPMj1wzwQgyMaZu0u5TvybSO0mD5qOe39ING4UwLsygLcTwAiyauK0','2017-06-06 20:09:31','2017-06-06 20:09:31');
insert  into `users`(`id`,`name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`) values (29,'Pasha Mahardika','me@pashamahardika.com','$2y$10$zJFfN.1ksPgYFBPjNpVdbORWcZf5mWMYvRrH/1Cjndko1GD7b7pkm','9l2zAHB39cRAds3iLrp2QjDQBwgbl4O5rGwDKwg2oTWcnJ29WO5iA58ykApf','2017-08-03 02:50:10','2017-08-03 03:05:11');
insert  into `users`(`id`,`name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`) values (33,'Pasha Mahardika','pasha.md5@gmail.com','$2y$10$G8569uey.qix2lesLnrhHOctagtaCYNJZ5nHQEQaX8TneTkhf37G6','lMbwNROYt7c3BLo30esxKsIX3ROxlUKvh0xNrDjKY2G0Fl0Lm9hmzIPfvu4U','2017-08-04 06:24:33','2017-08-04 06:24:33');
insert  into `users`(`id`,`name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`) values (34,'Usertoyota Dua','pasha@kleur.id','$2y$10$m.gHbPMpmv6C0dfQ6mI53.KsCFe9v8CqZ/QOc.YvGbpXSblTDpQT6',NULL,'2017-08-08 01:52:35','2017-08-08 01:52:35');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
