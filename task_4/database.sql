CREATE DATABASE RAI_04;
CREATE TABLE userdata(
	id int(15) NOT NULL AUTO_INCREMENT,
	username varchar(32) NOT NULL,
	password varchar(16) NOT NULL,

	name varchar(64) NOT NULL,
	email varchar(64) NOT NULL,
	placeOfBirth varchar(32) NOT NULL,
	dateOfBirth date NOT NULL,
	isAdmin enum('0','1') NOT NULL,
	PRIMARY KEY (id),
)