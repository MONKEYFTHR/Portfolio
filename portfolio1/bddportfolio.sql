CREATE DATABASE MVC;
USE MVC;
CREATE TABLE admin (
  pass varchar(50) UNIQUE
);

CREATE TABLE message(
	id int(11) PRIMARY KEY  NOT NULL auto_increment,
	expediteur varchar(50),
	date datetime NOT NULL,
	message text NOT NULL
);

CREATE TABLE article(
	nom varchar(50),
	content varchar(1000)
);
INSERT INTO MVC(pass) VALUES('Jean'); 
