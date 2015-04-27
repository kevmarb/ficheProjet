# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Hôte: localhost (MySQL 5.5.33)
# Base de données: laravel_demo
# Temps de génération: 2015-04-08 19:23:19 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Affichage de la table posts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `posts`;

CREATE TABLE `posts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `title` varchar(200) NOT NULL DEFAULT '',
  `confirmed` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;

INSERT INTO `posts` (`id`, `user_id`, `content`, `title`, `confirmed`, `created_at`, `updated_at`)
VALUES
	(7,5,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris gravida sodales nunc, sed cursus nibh porttitor ac. Nullam luctus magna augue, eu condimentum diam egestas ut. Fusce imperdiet lacinia efficitur. Aliquam aliquam ipsum egestas, malesuada nisl a, imperdiet urna. Fusce at aliquet dolor. Integer varius dapibus sem, ut venenatis lacus malesuada vitae. Nullam tincidunt, lorem eu vehicula tempus, est arcu rhoncus velit, nec sagittis eros metus a ante. Aenean sodales sit amet tellus ac condimentum. Aenean non ex eu risus rutrum faucibus. Sed sed erat lectus.','lolifdsfdfjkdf',1,'2015-04-08 15:24:19','2015-04-08 13:24:19'),
	(8,5,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris gravida sodales nunc, sed cursus nibh porttitor ac. Nullam luctus magna augue, eu condimentum diam egestas ut. Fusce imperdiet lacinia efficitur. Aliquam aliquam ipsum egestas, malesuada nisl a, imperdiet urna. Fusce at aliquet dolor. Integer varius dapibus sem, ut venenatis lacus malesuada vitae. Nullam tincidunt, lorem eu vehicula tempus, est arcu rhoncus velit, nec sagittis eros metus a ante. Aenean sodales sit amet tellus ac condimentum. Aenean non ex eu risus rutrum faucibus. Sed sed erat lectus.','ffuguytreqzertyuiytre',2,'2015-04-08 15:24:22','2015-04-08 13:24:22'),
	(9,5,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris gravida sodales nunc, sed cursus nibh porttitor ac. Nullam luctus magna augue, eu condimentum diam egestas ut. Fusce imperdiet lacinia efficitur. Aliquam aliquam ipsum egestas, malesuada nisl a, imperdiet urna. Fusce at aliquet dolor. Integer varius dapibus sem, ut venenatis lacus malesuada vitae. Nullam tincidunt, lorem eu vehicula tempus, est arcu rhoncus velit, nec sagittis eros metus a ante. Aenean sodales sit amet tellus ac condimentum. Aenean non ex eu risus rutrum faucibus. Sed sed erat lectus.','ezrtyukjhgfdg',0,'2015-04-08 13:25:00','2015-04-08 13:25:00');

/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL DEFAULT '',
  `password` varchar(200) NOT NULL DEFAULT '',
  `username` varchar(50) NOT NULL DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `remember_token` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `email`, `password`, `username`, `created_at`, `updated_at`, `remember_token`)
VALUES
	(1,'jonathan@viceversa.io','$2y$10$.CPJumjJSOigdR.pb7lvTuEyFKfqk0jbbdxk49YFTR.4Qa/oAXcdS','jon','2015-04-08 09:45:40','2015-04-08 09:45:40',NULL),
	(2,'lol@lol.fr','$2y$10$YjTBjqZkU9H3b7z0MB.Gm.ausHE8m01yGMgAq1SYZh5gM.kbA4426','lolilol','2015-04-08 12:17:59','2015-04-08 10:17:59','k6kH0OSZhbWAScUKbu8D4WVDlkmcfNl1CScNZZkP8JMpfnuV3uwMvqnuxe6N'),
	(3,'rez@fsf.ge','$2y$10$k9SZyQ/.7HH5TSn9VQ/8o.H2l2JzfEwhv16SEmAm.kzOcAS8HT2sS','azeer','2015-04-08 09:53:49','2015-04-08 09:53:49',NULL),
	(4,'retgre@fdg.fr','$2y$10$KYIPgO0YxvxBXpcRlwxyFudh8yzm75lxM2x4j0k/ewton2CUzAY5e','apprezr','2015-04-08 09:54:29','2015-04-08 09:54:29',NULL),
	(5,'lol@lol.com','$2y$10$PQQslISdHhXbTJETF1BKcOJjX5IDWE2bcyCQql8PFttnS.51wskTy','lol','2015-04-08 14:34:01','2015-04-08 12:34:01','MhfYZ4F6WuudQz8RNvYytAOuVaTknDFhFPJCRmaJPInm0bJIIqb9glwvwh2C');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
