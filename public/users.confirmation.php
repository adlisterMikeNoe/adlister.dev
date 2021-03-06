<?php
require_once '../utils/Auth.php';
require_once '../utils/Input.php';

require '../database/adlisting_login.php';
require '../database/db_connect.php';

if (isset($_POST['submit_signup'])) {
    $message_signup = "Congratulations " . $_POST['first_name'] . "!! You've created a new account";
} else {

    $message_signup = "Oops! something went wrong";
}


if (!empty($_POST['first_name']) && !empty($_POST['last_name']) &&
        !empty($_POST['email']) && !empty($_POST['user_name']) && !empty($_POST['password'])){
    
    $query = "INSERT INTO users (first_name, last_name, email, user_name, password) 
              VALUES (:first_name, :last_name, :email, :user_name, :password)";

$stmt = $dbc->prepare($query);

    $stmt->bindValue(':first_name', $_POST['first_name'], PDO::PARAM_STR);
    $stmt->bindValue(':last_name', $_POST['last_name'], PDO::PARAM_STR);
    $stmt->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
    $stmt->bindValue(':user_name', $_POST['user_name'], PDO::PARAM_STR);
    $stmt->bindValue(':password', $_POST['password'], PDO::PARAM_STR);
    $stmt->execute();
} 

header('Refresh: 5; URL=index.php');


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
                    
                            <legend class="text-center header"><?=$message_signup?></legend>
                            
                            <div class="col-md-12 text-center">
                                <h3>Hey <?=$_POST['first_name'];?>, Now you'll be redirected within <span id="timer">5</span> secs...</h3>
                                <a class="btn btn-primary btn-lg" href="ads.create.php">Start posting an Ad</a>

                                <!-- <button type="submit" class="btn btn-primary btn-lg">Start posting an Ad</button> -->
                            </div>
                           
                <!-- </div> -->
            </div>
        </div>
    </div>


  
</section>

    <?php require '../views/partials/footer.php'; ?>
//     <script type="text/javascript">

//     $('document').ready(function() {
//     var timer = 5;
//  if(timer > 0){
//         timer--;
//         $('#timer').html(timer);
//     }, 800; 
// });
//     </script>


</body>
</html>