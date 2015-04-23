<?php
require_once '../utils/Auth.php';
require_once '../utils/Input.php';




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
	                <form class="form-horizontal" method="post" action='users.confirmation.php'>
	                    <fieldset>
	                        <legend class="text-center header">Sign up</legend>

	                        <div class="form-group">
	                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
	                            <div class="col-md-8">
	                                <input id="fname" name="first_name" type="text" placeholder="First Name" class="form-control" required="required">
	                            </div>
	                        </div>
	                        <div class="form-group">
	                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
	                            <div class="col-md-8">
	                                <input id="lname" name="last_name" type="text" placeholder="Last Name" class="form-control" required="required">
	                            </div>
	                        </div>

	                        <div class="form-group">
	                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
	                            <div class="col-md-8">
	                                <input id="email" name="email" type="email" placeholder="Email Address" class="form-control" required="required">
	                            </div>
	                        </div>

	                        <div class="form-group">
	                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-users bigicon"></i></span>
	                            <div class="col-md-8">
	                                <input id="user" name="user_name" type="text" required pattern="\w+" placeholder="Username" class="form-control" required="required">
	                            </div>
	                        </div>

	                        <div class="form-group">
	                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-unlock-alt bigicon"></i></span>
	                            <div class="col-md-8">
									<p>Password must contain six or more characters, at least one digit number, and at least one uppercase character.</p>
	                                <input id="pass" name="password" type="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])\w{6,}" placeholder="Type Password" class="form-control" onchange="form.passwordCheck.pattern = this.value;" required="required">
	                            </div>
	                        </div>
	                        <div class="form-group">
	                            <span class="col-md-1 col-md-offset-2 text-center"><!-- <i class="fa fa-unlock-alt bigicon"></i> --></span>
	                            <div class="col-md-8">
	                                <input id="passCheck" name="passwordCheck" type="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])\w{6,}" placeholder="Confirm Password" class="form-control" required="required">
	                            </div>
	                        </div>

	                        

	                        <div class="form-group">
	                            <div class="col-md-12 text-center">
	                                <button type="submit" name="submit_signup"class="btn btn-primary btn-lg">Submit</button>
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