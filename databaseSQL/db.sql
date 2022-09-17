
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
name varchar(255) NOT NULL,
description varchar(255) NOT NULL,
state varchar(20) DEFAULT "libre"
);


CREATE OR REPLACE VIEW view_free_tools AS
SELECT * FROM tools WHERE state = 'libre';
