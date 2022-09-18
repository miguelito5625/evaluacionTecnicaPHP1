
DROP DATABASE IF EXISTS `talleresguatemala`;
CREATE DATABASE IF NOT EXISTS `talleresguatemala`;

USE `talleresguatemala`;

CREATE TABLE IF NOT EXISTS `mechanics` (
id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
firstname varchar(100) NOT NULL,
lastname varchar(100) NOT NULL
);

CREATE TABLE IF NOT EXISTS `tools` (
id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
name varchar(50) NOT NULL,
description varchar(100) NOT NULL,
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

CREATE OR REPLACE VIEW view_mechanics_tools AS
SELECT 
mechanics_tools.id, tools.id as tool_id, tools.name AS tool_name, mechanics.id AS mechanic_id, 
mechanics.firstname AS mechanic_firstname, mechanics.lastname AS mechanic_lastname
FROM ((mechanics_tools
INNER JOIN mechanics ON mechanics_tools.mechanic_id = mechanics.id)
INNER JOIN tools ON mechanics_tools.tool_id = tools.id);

