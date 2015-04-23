<?php




// if (!empty($_POST['firstname']) && !empty($_POST['lastname']) &&
//         !empty($_POST['email']) && !empty($_POST['password']) &&
//         !empty($_POST['passwordCheck'])) {
    
//     $query = "INSERT INTO users (firstname, lastname, email, username, password) 
//               VALUES (:firstname, :lastname, :email, :username, :password)";

// $stmt = $dbc->prepare($query);

//     $stmt->bindValue(':firstname', $_POST['firstname'], PDO::PARAM_STR);
//     $stmt->bindValue(':lastname', $_POST['lastname'], PDO::PARAM_STR);
//     $stmt->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
//     $stmt->bindValue(':username', $_POST['username'], PDO::PARAM_STR);
//     $stmt->bindValue(':password', $_POST['password'], PDO::PARAM_STR);
//     $stmt->execute();
// }

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

	<section class="container-fluid" id="section2">
	  
	    <div class="container">
	    <div class="row">
	        <div class="col-md-12">
	            <!-- <div class="well well-sm"> -->
	                <form class="form-horizontal" method="post" action='ads.create.php'>
	                    <fieldset>
	                        <legend class="text-center header">Sign up</legend>

	                        <div class="form-group">
	                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
	                            <div class="col-md-8">
	                                <input id="fname" name="firstname" type="text" placeholder="First Name" class="form-control">
	                            </div>
	                        </div>
	                        <div class="form-group">
	                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
	                            <div class="col-md-8">
	                                <input id="lname" name="lastname" type="text" placeholder="Last Name" class="form-control">
	                            </div>
	                        </div>

	                        <div class="form-group">
	                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
	                            <div class="col-md-8">
	                                <input id="email" name="email" type="email" placeholder="Email Address" class="form-control">
	                            </div>
	                        </div>

	                        <div class="form-group">
	                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-users bigicon"></i></span>
	                            <div class="col-md-8">
	                                <input id="user" name="username" type="text" placeholder="Username" class="form-control">
	                            </div>
	                        </div>

	                        <div class="form-group">
	                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-unlock-alt bigicon"></i></span>
	                            <div class="col-md-8">
	                                <input id="pass" name="password" type="password" placeholder="Type Password" class="form-control">
	                            </div>
	                        </div>
	                        <div class="form-group">
	                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-unlock-alt bigicon"></i></span>
	                            <div class="col-md-8">
	                                <input id="passCheck" name="passwordCheck" type="password" placeholder="Confirm Password" class="form-control">
	                            </div>
	                        </div>

	                        

	                        <div class="form-group">
	                            <div class="col-md-12 text-center">
	                                <a href="login.php"><button type="submit" class="btn btn-primary btn-lg">Submit</button></a>
	                            </div>
	                        </div>
	                    </fieldset>
	                </form>
	            <!-- </div> -->
	        </div>
	    </div>
	</div>


  
</section>


	<?php require '../views/partials/footer.php'; ?>

	
</body>
</html>