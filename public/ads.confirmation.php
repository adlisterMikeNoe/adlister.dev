<?php

if (isset($_POST['submit_signup'])) {
    $message_signup = "Congratulations " . "!! You've created a new ad";
} 

if (!empty($_POST['first_name']) && !empty($_POST['last_name']) &&
        !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['user_name']) &&
        !empty($_POST['passwordCheck']) && ($_POST['password']== $_POST['passwordCheck'])){
    
    $query = "INSERT INTO ads (title, price, phone, image, description, date_posted, user_id)
		   VALUES (:title, :price, :phone, :image, :description, :date_posted, :user_id)";

	$stmt = $dbc->prepare($query);

	$stmt->bindValue(':title', $ad['title'], PDO::PARAM_STR);
	$stmt->bindValue(':price', $ad['price'], PDO::PARAM_STR);
	$stmt->bindValue(':phone', $ad['phone'], PDO::PARAM_STR);
	$stmt->bindValue(':image', $ad['image'], PDO::PARAM_STR);
	$stmt->bindValue(':description', $ad['description'], PDO::PARAM_STR);
	$stmt->bindValue(':date_posted',$ad['date_posted'], PDO::PARAM_STR);
	$stmt->bindValue(':user_id',$ad['user_id'], PDO::PARAM_STR);
	$stmt->execute();

?>

<DOCTYPE> <html>
<head>

	<html lang="en">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


	<title>Ad Confirmation</title>

	<?php require "../views/partials/header.php"; ?>
</head>
<body>
	<?php require '../views/partials/navbar.php'; ?>


	<?php require '../views/partials/footer.php'; ?>
</body>
</html>