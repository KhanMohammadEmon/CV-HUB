DROP DATABASE IF EXISTS `cv-hub`;
CREATE DATABASE IF NOT EXISTS `cv-hub`;
USE `cv-hub`;


CREATE TABLE `user` (
  `id` int AUTO_INCREMENT,
  `first_name` varchar(50) not null,
  `last_name` varchar(50) not null,
  `email` varchar(100) UNIQUE,
  `phone_number` varchar(50),
  `password` VARCHAR(20),
  `gender` varchar(20) not null,
  `image`varchar(100),
  primary key(id)
) ;




