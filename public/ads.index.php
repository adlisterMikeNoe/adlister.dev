<?php
// require_once '../bootstrap.php';
require_once '../database/adlisting_login.php';
require_once '../database/db_connect.php';
require_once '../utils/Auth.php';
require_once '../utils/Input.php';

$stmt = "INSERT INTO ads (id)
		   VALUES (:id)";

		$id = Input::get('id');
        
        
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
		<td><?php echo $ad['id'];?></td>
	</tr>
	<? endforeach;?>
</table>
</div>
</body>
</html>