CREATE TABLE user (
  id int(11) NOT NULL auto_increment,
  username varchar(32) NOT NULL,
  password varchar(32) NOT NULL,
  nama varchar(32) NOT NULL,
  email varchar(32) NOT NULL,
  place varchar(32) NOT NULL,
  tanggal varchar(32) NOT NULL,
  PRIMARY KEY  (id, level)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;
 
INSERT INTO `user` VALUES (1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'admin@admin.com', 'Bandung', '1/1/1999', 1);
INSERT INTO `user` VALUES (2, 'guest', '084e0343a0486ff05530df6c705c8bb4', 'Guest', 'guest@gmail.com', 'Bandung', '1/1/1999', 2);
