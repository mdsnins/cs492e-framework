CREATE DATABASE webhacking;

CREATE TABLE `category` (
	`cid` INTEGER PRIMARY KEY,
	`name` VARCHAR(10) NOT NULL,
	`description` TEXT NOT NULL,
) DEFAULT CHARSET=utf8;

CREATE TABLE `problem` (
	`pid` INTEGER PRIMARY KEY,
	`name` VARCHAR(20) NOT NULL,
	`description` TEXT NOT NULL,
) DEFAULT CHARSET=utf8;

CREATE TABLE `cate_map` (
	`pid` INTEGER,
	`cid` INTEGER
);
