
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

CREATE TABLE IF NOT EXISTS `mechanics_tools` (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
mechanic_id INT UNIQUE NOT NULL,
tool_id INT NOT NULL,
CONSTRAINT FK_mechanic_mechanics_tools FOREIGN KEY (mechanic_id) REFERENCES `mechanics` (id),
CONSTRAINT FK_tool_mechanics_tools FOREIGN KEY (tool_id) REFERENCES `tools` (id)
);

CREATE OR REPLACE VIEW view_free_tools AS
SELECT * FROM tools WHERE state = 'libre';
