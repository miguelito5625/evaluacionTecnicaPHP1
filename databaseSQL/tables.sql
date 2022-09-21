
DROP DATABASE IF EXISTS `talleresguatemala`;
CREATE DATABASE IF NOT EXISTS `talleresguatemala`;

USE `talleresguatemala`;

CREATE TABLE IF NOT EXISTS `mechanics` (
id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
firstname varchar(100) NOT NULL,
lastname varchar(100) NOT NULL
);

CREATE TABLE IF NOT EXISTS `type_tools` (
id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
name varchar(50) NOT NULL,
existence INT NOT NULL DEFAULT 0
);

CREATE TABLE IF NOT EXISTS `tools` (
id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
type_tool_id INT NOT NULL,
description varchar(100) NOT NULL,
state varchar(20) DEFAULT "libre",
CONSTRAINT FK_tool_type_tool FOREIGN KEY (type_tool_id) REFERENCES `type_tools` (id)
);

CREATE TABLE IF NOT EXISTS `mechanics_tools` (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
mechanic_id INT NOT NULL,
tool_id INT NOT NULL,
CONSTRAINT FK_mechanic_mechanics_tools FOREIGN KEY (mechanic_id) REFERENCES `mechanics` (id),
CONSTRAINT FK_tool_mechanics_tools FOREIGN KEY (tool_id) REFERENCES `tools` (id)
);