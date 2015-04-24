<?php
	if(Input::has('show'))
	$id = Input::get('show')
	$ad = Ad::find($id)
?>


<DOCTYPE <html>
<head>
	<html lang="en">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

	<title>ADS SHOW</title>

	<?php require "../views/partials/header.php"; ?>
</head>
<body>
	<?php require '../views/partials/navbar.php'; ?>


	<?php foreach ($ads as $ad): ?> 

	<?php require '../views/partials/footer.php'; ?>
</body>
</html>