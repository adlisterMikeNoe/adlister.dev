<?php

require_once '../utils/Auth.php';
require_once '../utils/Input.php';


session_start();

echo "<div class = 'main'><h3>Please enter your information to log in</h3>";
$error = $user = $pass = "";

if(isset($POST['user']))
{
	$user = sanitizeString($_POST['user']);
	$pass = sanitizeString($_POST['pass']);

if($user = " " || $pass = " ")
	$error = "Not all fields were entered<br>";
else
{
		
	}
}
?>
<DOCTYPE> <html>
<head>
	<title></title>
</head>
<body>
	<?php require '../views/partials/footer.php'; ?>
</body>
</html>