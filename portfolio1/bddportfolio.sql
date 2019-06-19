CREATE DATABASE messagerie_1;
USE messagerie;
CREATE TABLE admin (
	id varchar(50) UNIQUE,
  pass varchar(50) UNIQUE,
);

CREATE TABLE message(
	id int(11) PRIMARY KEY  NOT NULL auto_increment,
	expediteur varchar(50),
	date datetime NOT NULL,
	message text NOT NULL,
);
