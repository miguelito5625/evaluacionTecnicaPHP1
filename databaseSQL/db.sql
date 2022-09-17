
DROP DATABASE IF EXISTS `talleresguatemala`;
CREATE DATABASE IF NOT EXISTS `talleresguatemala`;

USE `talleresguatemala`;

CREATE TABLE IF NOT EXISTS `mechanics` (
id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
firstname varchar(255) NOT NULL,
lastname varchar(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS `tools` (
id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
nametool varchar(255) NOT NULL,
tooldescription varchar(255) NOT NULL
);