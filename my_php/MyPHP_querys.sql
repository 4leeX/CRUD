create database loginapp;

use loginapp;

create table users(
	id int not null primary key AUTO_INCREMENT,
	username varchar(32) not null,
	password varchar(32) not null
);