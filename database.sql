CREATE TABLE users (
	username varchar(15) ,
	password varchar(15) ,
	name varchar(40) ,
	email varchar(40) ,
	pob varchar(40) ,
	dob varchar(10) ,
	
	PRIMARY KEY  (username) );
	
	
	INSERT INTO `users` VALUES ('admin', 'admin', 'admin', 'admin@gmail.com', 'Bandung', '09-06-1994');
	INSERT INTO `users` VALUES ('luthfirendra', 'asdf', 'Luthfi', 'cyclonezable@gmail.com', 'Bandung', '09-06-1994');
	INSERT INTO `users` VALUES ('user', 'user', 'user', 'user@gmail.com', 'Bandung', '09-06-1994');