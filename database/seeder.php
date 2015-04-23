<?php

require 'adlisting_login.php';
require 'db_connect.php';


$insert = $dbc->prepare('TRUNCATE users');
$query = "INSERT INTO users (first_name, last_name, user_name, password, email)
		   VALUES (:first_name, :last_name, :user_name, :password, :email)";
// $insert->execute();

$users = [
	['first_name'=>'noe','last_name'=>'nevarez','user_name'=>'noen','password'=>'po0l','email'=>'noe@no.com'],
	['first_name'=>'mike','last_name'=>'villareal','user_name'=>'mikev','password'=>'l000k','email'=>'mike@v.com'],
	['first_name'=>'ryan Valley','last_name'=>'dinesman','user_name'=>'ryand','password'=>'p009','email'=>'ryan@d.com'],
	

];

$stmt = $dbc->prepare($query);

foreach ($users as $users){
	$stmt->bindValue(':first_name', $users['first_name'], PDO::PARAM_STR);
	$stmt->bindValue(':last_name', $users['last_name'], PDO::PARAM_STR);
	$stmt->bindValue(':user_name', $users['user_name'], PDO::PARAM_STR);
	$stmt->bindValue(':password', $users['password'], PDO::PARAM_STR);
	$stmt->bindValue(':email', $users['email'], PDO::PARAM_STR);
	$stmt->execute();

	// $dbc->exec($query);
}


$insert = $dbc->prepare('TRUNCATE ads');
$query = "INSERT INTO ads (title, price, phone, image, description, date_posted, user_id)
		   VALUES (:title, :price, :phone, :image, :description, :date_posted, :user_id)";
// $insert->execute();

$ads = [
	['title'=>'Mac Book Pro','price'=>'1000','phone'=>'2100009876','image'=>'image.jpg','description'=>'Mac Book Pro, gentle used, bought it 6 months ago', 'date_posted'=>'2015-04-19', 'user_id'=>'1'],
	['title'=>'iPhone 6','price'=>'600','phone'=>'2100009876','image'=>'image.jpg','description'=>'brand new iPhone i do not like and need to get rid of it','date_posted'=>'2015-04-19', 'user_id'=>'2'],
	['title'=>'Mac Book Pro','price'=>'1000','phone'=>'2100009876','image'=>'image.jpg','description'=>'Mac Book Pro, gentle used, bought it 6 months ago', 'date_posted'=>'2015-04-19', 'user_id'=>'3'],
	['title'=>'iPhone 6','price'=>'600','phone'=>'2100009876','image'=>'image.jpg','description'=>'brand new iPhone i do not like and need to get rid of it','date_posted'=>'2015-04-19', 'user_id'=>'2'],
];

$stmt = $dbc->prepare($query);

foreach ($ads as $ad){
	$stmt->bindValue(':title', $ad['title'], PDO::PARAM_STR);
	$stmt->bindValue(':price', $ad['price'], PDO::PARAM_STR);
	$stmt->bindValue(':phone', $ad['phone'], PDO::PARAM_STR);
	$stmt->bindValue(':image', $ad['image'], PDO::PARAM_STR);
	$stmt->bindValue(':description', $ad['description'], PDO::PARAM_STR);
	$stmt->bindValue(':date_posted',$ad['date_posted'], PDO::PARAM_STR);
	$stmt->bindValue(':user_id',$ad['user_id'], PDO::PARAM_STR);
	$stmt->execute();

	// $dbc->exec($query);
}




?>