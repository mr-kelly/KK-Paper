# Sequel Pro dump
# Version 2210
# http://code.google.com/p/sequel-pro
#
# Host: 127.0.0.1 (MySQL 5.1.44)
# Database: kk_paper
# Generation Time: 2011-01-14 10:15:45 +0800
# ************************************************************

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table kk_article_categories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `kk_article_categories`;

CREATE TABLE `kk_article_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `article_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=utf8;

LOCK TABLES `kk_article_categories` WRITE;
/*!40000 ALTER TABLE `kk_article_categories` DISABLE KEYS */;
INSERT INTO `kk_article_categories` (`id`,`article_id`,`category_id`,`created`,`modified`)
VALUES
	(1,16,5,'2010-12-11 17:01:41','2010-12-11 17:01:41'),
	(2,16,6,'2010-12-11 17:01:41','2010-12-11 17:01:41'),
	(3,17,5,'2010-12-11 17:42:12','2010-12-11 17:42:12'),
	(4,17,6,'2010-12-11 17:42:12','2010-12-11 17:42:12'),
	(5,18,5,'2010-12-11 17:50:22','2010-12-11 17:50:22'),
	(6,19,5,'2010-12-11 17:50:54','2010-12-11 17:50:54'),
	(7,20,5,'2010-12-11 19:50:51','2010-12-11 19:50:51'),
	(8,20,6,'2010-12-11 19:50:51','2010-12-11 19:50:51'),
	(9,21,1,'2010-12-11 20:40:52','2010-12-11 20:40:52'),
	(10,21,5,'2010-12-11 20:40:52','2010-12-11 20:40:52'),
	(11,22,1,'2010-12-11 20:42:50','2010-12-11 20:42:50'),
	(12,22,5,'2010-12-11 20:42:50','2010-12-11 20:42:50'),
	(13,23,1,'2010-12-11 20:48:57','2010-12-11 20:48:57'),
	(14,23,5,'2010-12-11 20:48:57','2010-12-11 20:48:57'),
	(15,24,1,'2010-12-11 20:49:00','2010-12-11 20:49:00'),
	(16,24,5,'2010-12-11 20:49:00','2010-12-11 20:49:00'),
	(17,25,1,'2010-12-11 21:29:31','2010-12-11 21:29:31'),
	(18,26,1,'2010-12-11 21:30:07','2010-12-11 21:30:07'),
	(19,27,5,'2010-12-11 21:30:23','2010-12-11 21:30:23'),
	(20,28,5,'2010-12-11 23:07:25','2010-12-11 23:07:25'),
	(21,28,6,'2010-12-11 23:07:25','2010-12-11 23:07:25'),
	(31,29,5,'2010-12-12 01:02:07','2010-12-12 01:02:07'),
	(30,29,1,'2010-12-12 01:02:07','2010-12-12 01:02:07'),
	(28,30,1,'2010-12-12 00:38:50','2010-12-12 00:38:50'),
	(29,30,6,'2010-12-12 00:38:50','2010-12-12 00:38:50'),
	(32,29,8,'2010-12-12 01:02:07','2010-12-12 01:02:07'),
	(33,12,8,'2010-12-12 01:43:09','2010-12-12 01:43:09'),
	(34,31,1,'2010-12-12 15:57:20','2010-12-12 15:57:20'),
	(35,31,5,'2010-12-12 15:57:20','2010-12-12 15:57:20'),
	(36,31,6,'2010-12-12 15:57:20','2010-12-12 15:57:20'),
	(37,31,8,'2010-12-12 15:57:20','2010-12-12 15:57:20'),
	(41,32,5,'2010-12-15 11:30:39','2010-12-15 11:30:39'),
	(42,32,9,'2010-12-15 11:30:39','2010-12-15 11:30:39'),
	(43,33,1,'2010-12-15 13:47:45','2010-12-15 13:47:45'),
	(44,34,1,'2010-12-15 13:47:50','2010-12-15 13:47:50'),
	(45,35,1,'2010-12-15 13:50:26','2010-12-15 13:50:26'),
	(46,36,1,'2010-12-15 14:42:02','2010-12-15 14:42:02'),
	(47,36,5,'2010-12-15 14:42:02','2010-12-15 14:42:02'),
	(48,38,1,'2010-12-16 15:34:53','2010-12-16 15:34:53'),
	(49,37,1,'2010-12-16 15:34:53','2010-12-16 15:34:53'),
	(50,38,5,'2010-12-16 15:34:53','2010-12-16 15:34:53'),
	(51,37,5,'2010-12-16 15:34:53','2010-12-16 15:34:53');

/*!40000 ALTER TABLE `kk_article_categories` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table kk_articles
# ------------------------------------------------------------

DROP TABLE IF EXISTS `kk_articles`;

CREATE TABLE `kk_articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(11) DEFAULT NULL,
  `content` text,
  `page_view` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

LOCK TABLES `kk_articles` WRITE;
/*!40000 ALTER TABLE `kk_articles` DISABLE KEYS */;
INSERT INTO `kk_articles` (`id`,`user_id`,`title`,`content`,`page_view`,`created`,`modified`)
VALUES
	(1,NULL,'dsf','wer',NULL,'2010-12-09 17:41:22','2010-12-09 17:41:22'),
	(2,NULL,'哈哈哈','成功了',NULL,'2010-12-09 18:14:02','2010-12-09 18:14:02'),
	(3,NULL,'吃熟','吃熟～～！！',NULL,'2010-12-10 00:39:51','2010-12-10 00:39:51'),
	(4,NULL,'sdf','sadf',NULL,'2010-12-11 11:44:36','2010-12-11 11:44:36'),
	(5,NULL,'哦可','阿翻',NULL,'2010-12-11 12:59:45','2010-12-11 12:59:45'),
	(6,NULL,'张家界！','哈哈',NULL,'2010-12-11 13:35:07','2010-12-11 13:35:07'),
	(7,NULL,'asdf','asdf',NULL,'2010-12-11 13:51:04','2010-12-11 13:51:04'),
	(8,NULL,'asdf','asdf',NULL,'2010-12-11 13:51:13','2010-12-11 13:51:13'),
	(9,NULL,'asdf','asdf',NULL,'2010-12-11 13:51:25','2010-12-11 13:51:25'),
	(10,NULL,'aaa','sadf',NULL,'2010-12-11 13:56:32','2010-12-11 13:56:32'),
	(11,NULL,'aaa','sadf',NULL,'2010-12-11 13:56:47','2010-12-11 13:56:47'),
	(13,NULL,'afdsaf','werewr',NULL,'2010-12-11 14:13:45','2010-12-11 14:13:45'),
	(14,NULL,'adf','sdfsdf',NULL,'2010-12-11 14:20:44','2010-12-11 14:20:44'),
	(15,NULL,'份额为','士大夫',NULL,'2010-12-11 15:52:55','2010-12-11 15:52:55'),
	(16,NULL,'明明就可以','<p>\n <img alt=\"\" src=\"/kk_paper/static/upload/images/3logos.png\" style=\"float: right; width: 517px; height: 74px; \" /></p>\n<p>\n 青年报纸！效果非常的酷～</p>',NULL,'2010-12-11 17:01:41','2010-12-11 17:01:41'),
	(17,NULL,'阿是否','<p><img src=\"/kk_paper/static/js/kindeditor/attached/20101211174157_84655.png\" alt=\"\" border=\"0\" /></p>\n<p>这样就完成了阿～</p>',NULL,'2010-12-11 17:42:12','2010-12-11 17:42:12'),
	(18,NULL,'优酷阿','&lt;embed src=\"http://player.youku.com/player.php/sid/XMjI4NDcxOTg4/v.swf\" type=\"application/x-shockwave-flash\" width=\"550\" height=\"400\" quality=\"high\" /&gt;&lt;br />',NULL,'2010-12-11 17:50:22','2010-12-11 17:50:22'),
	(19,NULL,'aasd','<span style=\"font-size:24px;\">阿道夫阿是否是f</span>',NULL,'2010-12-11 17:50:54','2010-12-11 17:50:54'),
	(20,NULL,'aasd','<span style=\"font-size:24px;\">阿道夫阿是否是f</span>',NULL,'2010-12-11 19:50:51','2010-12-11 19:50:51'),
	(37,NULL,'文章的标题','<p>文章的正文</p>\n<p>&nbsp;</p>\n<p><img src=\"/kk_paper/static/upload/img/2010/12/16/a068acf7356193bde1fb5339a559fdf5.jpg\" alt=\"\" border=\"0\" /></p>',NULL,'2010-12-16 15:34:53','2010-12-16 15:34:53'),
	(24,NULL,'去去去','去去去去',NULL,'2010-12-11 20:49:00','2010-12-11 20:49:00'),
	(25,NULL,'sdf','df',NULL,'2010-12-11 21:29:31','2010-12-11 21:29:31'),
	(26,NULL,'哈哈','阿斯顿发威尔',NULL,'2010-12-11 21:30:07','2010-12-11 21:30:07'),
	(27,NULL,'士大夫','赛弗',NULL,'2010-12-11 21:30:23','2010-12-11 21:30:23'),
	(28,NULL,'阿f\'d','放大萨芬的',NULL,'2010-12-11 23:07:25','2010-12-11 23:07:25'),
	(38,NULL,'文章的标题','<p>文章的正文</p>\n<p>&nbsp;</p>\n<p><img src=\"/kk_paper/static/upload/img/2010/12/16/a068acf7356193bde1fb5339a559fdf5.jpg\" alt=\"\" border=\"0\" /></p>',NULL,'2010-12-16 15:34:53','2010-12-16 15:34:53'),
	(31,NULL,'新文章','<img src=\"/kk_paper/static/js/kindeditor/attached/20101212155710_39754.png\" align=\"right\" alt=\"\" border=\"0\" /><p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>新闻系统~</p>',NULL,'2010-12-12 15:57:20','2010-12-12 15:57:20'),
	(32,NULL,'心碎！！！','终日惶恐～',NULL,'2010-12-12 19:57:31','2010-12-15 11:28:53'),
	(33,NULL,'asdfasdf','asdfasdf',NULL,'2010-12-15 13:47:45','2010-12-15 13:47:45'),
	(34,NULL,'阿道夫阿','威尔韦尔奇',NULL,'2010-12-15 13:47:50','2010-12-15 13:47:50');

/*!40000 ALTER TABLE `kk_articles` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table kk_categories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `kk_categories`;

CREATE TABLE `kk_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `parent_id` int(11) DEFAULT '0',
  `description` text,
  `created` datetime DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

LOCK TABLES `kk_categories` WRITE;
/*!40000 ALTER TABLE `kk_categories` DISABLE KEYS */;
INSERT INTO `kk_categories` (`id`,`name`,`parent_id`,`description`,`created`,`timestamp`)
VALUES
	(1,'分类名称',NULL,'sfdsf','2010-12-11 11:51:40','2010-12-14 20:17:33'),
	(5,'哈哈类',NULL,'阿第三方','2010-12-11 15:48:16','2010-12-11 15:48:16'),
	(6,'safasf',NULL,'asdfsdf','2010-12-11 15:52:36','2010-12-11 15:52:36'),
	(8,'啊啊啊啊',NULL,'误区二','2010-12-11 20:35:36','2010-12-11 20:35:36'),
	(9,'属于阿',NULL,'啊都是发','2010-12-12 17:52:04','2010-12-12 17:52:04'),
	(10,'aa',NULL,'aaaa','2010-12-15 15:38:48','2010-12-15 15:38:48'),
	(12,'热点红姨',NULL,'阿飞萨地方','2010-12-16 12:20:04','2010-12-16 12:20:04'),
	(13,'部门介绍',NULL,'XXX部门的介绍','2010-12-16 15:35:26','2010-12-16 15:35:26');

/*!40000 ALTER TABLE `kk_categories` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table kk_ci_sessions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `kk_ci_sessions`;

CREATE TABLE `kk_ci_sessions` (
  `session_id` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `ip_address` varchar(16) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

LOCK TABLES `kk_ci_sessions` WRITE;
/*!40000 ALTER TABLE `kk_ci_sessions` DISABLE KEYS */;
INSERT INTO `kk_ci_sessions` (`session_id`,`ip_address`,`user_agent`,`last_activity`,`user_data`)
VALUES
	('1490907c17f97fecb6e3781625e59de5','0.0.0.0','Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_5; ',1294971026,X'613A333A7B733A373A22757365725F6964223B733A313A2231223B733A383A22757365726E616D65223B733A353A226368657079223B733A363A22737461747573223B733A313A2231223B7D'),
	('69339f277c85c375dacbfd7596079492','0.0.0.0','Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_5; ',1294969752,X'613A333A7B733A373A22757365725F6964223B733A313A2231223B733A383A22757365726E616D65223B733A353A226368657079223B733A363A22737461747573223B733A313A2231223B7D'),
	('e2057eba4e832ca1e23669d1db7d469f','0.0.0.0','Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_5; ',1294969752,X'613A333A7B733A373A22757365725F6964223B733A313A2231223B733A383A22757365726E616D65223B733A353A226368657079223B733A363A22737461747573223B733A313A2231223B7D');

/*!40000 ALTER TABLE `kk_ci_sessions` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table kk_login_attempts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `kk_login_attempts`;

CREATE TABLE `kk_login_attempts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(40) COLLATE utf8_bin NOT NULL,
  `login` varchar(50) COLLATE utf8_bin NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;



# Dump of table kk_menu
# ------------------------------------------------------------

DROP TABLE IF EXISTS `kk_menu`;

CREATE TABLE `kk_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `menu_order` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

LOCK TABLES `kk_menu` WRITE;
/*!40000 ALTER TABLE `kk_menu` DISABLE KEYS */;
INSERT INTO `kk_menu` (`id`,`text`,`link`,`parent_id`,`menu_order`,`created`,`modified`)
VALUES
	(24,'通知公告','adf',NULL,40,'2011-01-14 10:10:04','2011-01-14 10:10:51'),
	(23,'下载中心','ldaf',NULL,999,'2011-01-14 10:05:41','2011-01-14 10:08:29'),
	(7,'首页','home',NULL,0,'2010-12-14 19:34:04','2011-01-14 10:07:39'),
	(11,'部门介绍','/catalog/category/12',NULL,0,'2010-12-16 15:48:43','2011-01-14 10:07:41'),
	(10,'专业介绍','http://go.com',NULL,0,'2010-12-14 19:37:54','2011-01-14 10:07:47'),
	(14,'新闻动态','d',NULL,0,'2010-12-17 15:49:40','2011-01-14 10:07:49'),
	(22,'规章制度','阿',NULL,0,'2011-01-14 10:05:16','2011-01-14 10:05:16'),
	(21,'工作研究','阿',NULL,99,'2011-01-14 10:02:33','2011-01-14 10:07:35'),
	(20,'联系我们','ok',NULL,0,'2011-01-14 10:01:20','2011-01-14 10:01:20');

/*!40000 ALTER TABLE `kk_menu` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table kk_user_autologin
# ------------------------------------------------------------

DROP TABLE IF EXISTS `kk_user_autologin`;

CREATE TABLE `kk_user_autologin` (
  `key_id` char(32) COLLATE utf8_bin NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`key_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

LOCK TABLES `kk_user_autologin` WRITE;
/*!40000 ALTER TABLE `kk_user_autologin` DISABLE KEYS */;
INSERT INTO `kk_user_autologin` (`key_id`,`user_id`,`user_agent`,`last_ip`,`last_login`)
VALUES
	(X'6536656563613163663436336431383062333861343236373135616561646239',1,'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_5; en-US) AppleWebKit/534.10 (KHTML, like Gecko) Chrome/8.0.552.231 Safari/534.10','0.0.0.0','2011-01-12 23:56:55');

/*!40000 ALTER TABLE `kk_user_autologin` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table kk_user_profiles
# ------------------------------------------------------------

DROP TABLE IF EXISTS `kk_user_profiles`;

CREATE TABLE `kk_user_profiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `profile_content` text COLLATE utf8_bin,
  `role` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

LOCK TABLES `kk_user_profiles` WRITE;
/*!40000 ALTER TABLE `kk_user_profiles` DISABLE KEYS */;
INSERT INTO `kk_user_profiles` (`id`,`user_id`,`profile_content`,`role`)
VALUES
	(1,1,NULL,'admin'),
	(2,2,NULL,'user');

/*!40000 ALTER TABLE `kk_user_profiles` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table kk_users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `kk_users`;

CREATE TABLE `kk_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT '1',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `ban_reason` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `new_password_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `new_password_requested` datetime DEFAULT NULL,
  `new_email` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `new_email_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

LOCK TABLES `kk_users` WRITE;
/*!40000 ALTER TABLE `kk_users` DISABLE KEYS */;
INSERT INTO `kk_users` (`id`,`username`,`password`,`email`,`activated`,`banned`,`ban_reason`,`new_password_key`,`new_password_requested`,`new_email`,`new_email_key`,`last_ip`,`last_login`,`created`,`modified`)
VALUES
	(1,'chepy','$2a$08$/iTQ0J.dKO.6O7tc7M0I9.mB/QSM/HWPfSlK83IP7ZA7O57rAkv0u','chepy.v@gmail.com',1,0,NULL,NULL,NULL,NULL,NULL,'0.0.0.0','2011-01-14 09:49:14','2010-12-07 17:54:01','2011-01-14 09:49:14'),
	(2,'admin','$2a$08$k4ex6HTL0zvjZyyWBaQhTu5gCbvXnI.xSV13ymeF6sbAaZ/O76H0W','admin@admin.com',1,0,NULL,NULL,NULL,NULL,NULL,'0.0.0.0','2010-12-17 20:36:34','2010-12-17 20:10:25','2010-12-17 20:36:34');

/*!40000 ALTER TABLE `kk_users` ENABLE KEYS */;
UNLOCK TABLES;





/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
