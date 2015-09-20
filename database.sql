CREATE DATABASE rai_task_4_1103120100;
USE 'rai_task_4_1103120100';

CREATE TABLE  users (
  id INT NOT NULL AUTO_INCREMENT,
  username VARCHAR( 100 ) NOT NULL,
  password VARCHAR( 100 ) NOT NULL,
  name VARCHAR( 100 ) NOT NULL,
  email VARCHAR( 100 ) NOT NULL,
  birthplace VARCHAR( 100 ),
  birthdate VARCHAR( 100 ),
  PRIMARY KEY (id, username)
) ENGINE = INNODB;

CREATE TABLE  mutations (
  id INT NOT NULL AUTO_INCREMENT,
  user_id INT NOT NULL,
  name VARCHAR( 100 ) NOT NULL,
  date VARCHAR( 100 ) NOT NULL,
  type VARCHAR( 100 ) NOT NULL,
  amount VARCHAR( 100 ) NOT NULL,
  note VARCHAR( 100 ),

  INDEX user_id_index(user_id),
  FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
  PRIMARY KEY(id)
) ENGINE = INNODB;
