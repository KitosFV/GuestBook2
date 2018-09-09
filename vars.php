<?php
$id = htmlspecialchars($_GET["id"]);
$user = "pysm1t";
$host = "db4free.net";
$passwd = "935afe2c";
$name = "guestbook";
$install ="CREATE TABLE IF NOT EXISTS `messages` (`id` int(11) NOT NULL AUTO_INCREMENT,`author` varchar(255) DEFAULT NULL,`email` varchar(255) DEFAULT NULL,`message` varchar(255) DEFAULT NULL,PRIMARY KEY (`id`)) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8";