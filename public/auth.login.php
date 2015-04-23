<?php
require_once '../utils/Auth.php';
require_once '../utils/Input.php';

session_start();

if(!empty($_SESSION['LOGGED_IN_USER']) && $_SESSION['LOGGED_IN_USER'] == 'guest'){
	header('Location: authorized.php');
	exit();
};

if(Auth::check()) {
	header('Location: users.show.php');
	exit();
};

// if(Input::has('username') && Input::has('password')){
// }
$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
	$message = ' ';
	Auth::attempt(Input::get('username'),Input::get('password'));

	if ($username == ' ' && $password == ' ' ){
		
		$_SESSION['LOGGED_IN_USER'] = $username;
	 	header('Location: adlister.dev');
	 exit();
	}
	// else{
	// 	$message = 'Invalid username and password';
	// }
	// $user = Auth::user()
	

// var_dump($_SESSION)
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>Most Interesting Ad Lister Ever</title>

	<?php require "../views/partials/header.php"; ?>
    

</head>
<body>
	<?php require '../views/partials/navbar.php'; ?>

	<section class="container-fluid" id="section1">
		<div class="container">
			<?= $message ?>
	      <form action= "index.php" method= "POST" class="form-signin">
	        <h2 class="form-signin-heading">Please sign in</h2>
	        <label for="inputUser" class="sr-only">Username</label>
	        <input type="username" id="inputUser" class="form-control" name= "username" placeholder="Username" required autofocus>
	        <label for="inputPassword" class="sr-only">Password</label>
	        <input type="password" id="inputPassword" class="form-control" name= "password" placeholder="Password" required>
	        <div class="checkbox">
	          <label>
	            <input type="checkbox" value="remember-me"> Remember me
	            <a href="users.create.php" style='color:#494949'>Not a member? Signup now!!</a>
	          </label>
	        </div>
	        <button class="btn btn-lg btn-primary btn-block" type="submit" value= "login">Sign in</button>
	      </form>

	    </div> <!-- /container -->
    </section>


		
  <!--   <form action = "index.php" method="POST">
        <label>Username</label>
        <input type="username" name="username"><br>
        <label>Password</label>
        <input type="password" name="password">
        <input type="submit" value = "login">
    </form> -->

    <?php require '../views/partials/footer.php'; ?>
</body>
</html>