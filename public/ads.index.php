<?php
// require_once '../bootstrap.php';
require_once '../database/adlisting_login.php';
require_once '../database/db_connect.php';
require_once '../utils/Auth.php';
require_once '../utils/Input.php';

	$stmt = $dbc->prepare("SELECT * FROM ads");
    $stmt->execute();

    $ads = $stmt->fetchAll(PDO::FETCH_ASSOC);


    if(Input::has('show')){
    	$id= Input::get('show');

    	// header "ads.show.php?show=$id";
    }
        
?>

<DOCTYPE>
 <html>
<head>
	<html lang="en">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
   
	<title>ADS INDEX</title>

	<?php require "../views/partials/header.php"; ?>

</head>
<body>

<?php require '../views/partials/navbar.php'; ?>

<div class="ads">
<table class ="table">


	<?php foreach($ads as $ad): ?>
	<tr>
		<td><?php echo $ad['date_posted'];?> <a href = "ads.show.php?id=<?php echo $ad['id'];?>"> <?php echo $ad['title'];?></a> <?php echo $ad['location'];?> $<?php echo $ad['price'];?>
		
	</td>
		
	</tr>
	<? endforeach;?>
</table>
</div>

<?php require '../views/partials/footer.php'; ?>
</body>
</html>