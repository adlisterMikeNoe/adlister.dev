<?php


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
	                <form class="form-horizontal" method="post">
	                    <fieldset>
	                        <legend class="text-center header">Sign up</legend>

	                        <div class="form-group">
	                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
	                            <div class="col-md-8">
	                                <input id="fname" name="name" type="text" placeholder="First Name" class="form-control">
	                            </div>
	                        </div>
	                        <div class="form-group">
	                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
	                            <div class="col-md-8">
	                                <input id="lname" name="name" type="text" placeholder="Last Name" class="form-control">
	                            </div>
	                        </div>

	                        <div class="form-group">
	                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
	                            <div class="col-md-8">
	                                <input id="email" name="email" type="text" placeholder="Email Address" class="form-control">
	                            </div>
	                        </div>

	                        <div class="form-group">
	                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
	                            <div class="col-md-8">
	                                <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control">
	                            </div>
	                        </div>

	                         <div class="form-group">
	                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
	                            <div class="col-md-8">
	                                <input id="user_name" name="user_name" type="text" placeholder="Username" class="form-control">
	                            </div>
	                        </div>

	                         <div class="form-group">
	                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-unlock-alt bigicon"></i></span>
	                            <div class="col-md-8">
	                                <input id="password" name="password" type="text" placeholder="Password" class="form-control">
	                            </div>
	                        </div>

	                         <div class="form-group">
	                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-unlock-alt bigicon"></i></span>
	                            <div class="col-md-8">
	                                <input id="password" name="password" type="text" placeholder="Confirm Password" class="form-control">
	                            </div>
	                        </div>

	                        <div class="form-group">
	                            <div class="col-md-12 text-center">
	                                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
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