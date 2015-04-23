<?php
// require_once '../bootstrap.php';
require_once '../database/adlisting_login.php';
require_once '../database/db_connect.php';
require_once '../utils/Auth.php';
require_once '../utils/Input.php';

	$stmt = $dbc->prepare("SELECT * FROM ads");
    $stmt->execute();

    $ads = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
?>

<DOCTYPE>
 <html>
<head>
	<title>ADS INDEX</title>
</head>
<body>
<div class="ads">
<table class ="table table-striped">


	<?php foreach($ads as $ad): ?>
	<tr>
		<td><a href = "ads.show.php?id=<?php echo $ad['id'];?>"><?php echo $ad['title'];?></a></td>
	</tr>
	<? endforeach;?>
</table>
</div>
</body>
</html>