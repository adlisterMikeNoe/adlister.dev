<?
require_once '../database/adlisting_login.php';
require_once '../database/adlisting_login.php';

 var_dump($_GET);
  var_dump($_POST);


$zip_code= $_REQUEST['zip_code'] ;
if ($zip_code=="1")
    echo "You are serviced by branch 1!";
else
    echo "You are not serviced.";



?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcpbmyxz17BawCGQ3hX8yKMFzp2Zy9Ua8"></script>

    <title>Ad Lister | Create your ad</title>

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
                            <legend class="text-center header">Create an Ad</legend>

                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-bars bigicon"></i></span>
                                <div class="col-md-8">
                                    <input id="title" required name="title" type="text" placeholder="Title" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-usd bigicon"></i></span>
                                <div class="col-md-8">
                                    <input id="price" required name="price" type="number" placeholder="Price" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-map-marker bigicon"></i></span>
                                <div class="col-md-8">
                                    <input id="location" name="location" type="text" placeholder="Location" class="form-control">
                                </div>
                            </div>

                             <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-map-marker bigicon"></i></span>
                                <div class="col-md-8">
                                    <input id="zip_code" required name="zip_code"  pattern="[0-9].{5}" placeholder="Zip Code" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                                <div class="col-md-8">
                                    <input id="phone" required name="phone" type="tel" placeholder="Phone" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-cloud-upload bigicon"></i></span>
                                <div class="col-md-8">
                                    <input id="fileToUpload" name="fileToUpload" type="file" class="form-control" multiple>
                                </div>
                            </div>

                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                                <div class="col-md-8">
                                    <textarea class="form-control" id="description" required name="descrition" placeholder="Enter a detail description for your product or service." rows="7"></textarea>
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