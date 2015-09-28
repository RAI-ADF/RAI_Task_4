
CREATE TABLE user (
  id int(2) ,
  username varchar(32) ,
  pass varchar(32) ,
  name varchar(32) ,
  email varchar(32) ,
  city varchar(32) ,
  birthdate varchar(32) ,
  PRIMARY KEY  (id) );
 
 INSERT INTO `user` VALUES (1, 'admin', 'admin', 'admin', 'admin@rai.com', 'Cimahi', '6/9/1994', 1);
 INSERT INTO `user` VALUES (2, 'user', 'user', 'user', 'user@rai.com', 'Cimahi', '6/9/1994', 2);