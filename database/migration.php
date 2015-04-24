<?php
require 'adlisting_login.php';
require 'db_connect.php';


$dbc->exec('DROP TABLE IF EXISTS users,ads');


$query = 'CREATE TABLE users (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,

	
	first_name VARCHAR(100) NOT NULL, 
	last_name VARCHAR(100) NOT NULL,
	user_name VARCHAR(10) NOT NULL,
	password VARCHAR(10) NOT NULL,
	email VARCHAR(100) NOT NULL,
	PRIMARY KEY (id),
	UNIQUE (user_name),
	UNIQUE (email)
	)';
$dbc->exec($query);


$query = 'CREATE TABLE ads (
		id INT UNSIGNED NOT NULL AUTO_INCREMENT,
		title VARCHAR(100) NOT NULL,
		price FLOAT NOT NULL,
		phone int(10) NOT NULL,
		image BLOB,
		description TEXT NOT NULL,
		date_posted DATE NOT NULL,
		zip_code int(5),
		location VARCHAR(100),
		user_id int UNSIGNED NOT NULL,
		PRIMARY KEY (id),
		FOREIGN KEY (user_id) REFERENCES users(id)
		)';
$dbc->exec($query);

?>