CREATE DATABASE webhacking;


CREATE USER 'csweb'@'localhost' IDENTIFIED BY 'c5w3b';
FLUSH PRIVILEGES

GRANT ALL PRIVILEGES ON webhacking.* to 'csweb'@'localhost';
FLUSH PRIVILEGES

USE webhacking

CREATE TABLE `category` (
	`cid` INT PRIMARY KEY,
	`name` VARCHAR(10) NOT NULL,
	`description` TEXT NOT NULL,
) DEFAULT CHARSET=utf8;

CREATE TABLE `problem` (
	`pid` INT PRIMARY KEY,
	`name` VARCHAR(20) NOT NULL,
	`description` TEXT NOT NULL,
	`attachements` TEXT NOT NULL,
	`answer` TEXT NOT NULL
) DEFAULT CHARSET=utf8;

CREATE TABLE `attachment` (
	`aid` INT PRIMARY KEY,
	`name` VARCHAR(40) NOT NULL,
	`description` TEXT NOT NULL,
	`file` VARCHAR(120) NOT NULL
) DEFAULT CHARSET=utf8;

CREATE TABLE `prob_cate` (
	`pid` INT,
	`cid` INT,
);

CREATE TABLE `solve` (
	`sid` INT AUTO_INCREMENT PRIMARY KEY,
	`pid` INT NOT NULL,
	`uid` INT NOT NULL,
	`timestamp` TIMESTAMP,
)

CREATE TABLE `user` (
	`uid` INT AUTO_INCREMENT PRIMARY KEY,
 	`userid` VARCHAR(12) NOT NULL UNIQUE,
	`passwd` VARCHAR(42) NOT NULL,
	`nick` VARCHAR(12) NOT NULL,
)