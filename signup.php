<?php
require 'includes/common.php';
if (isset($_SESSION['email'])){ header('location:products.php');}
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Signup - Lifestyle Stores</title>
        <link rel="icon" type="image/jpg" href="images/logo.jpg">
        <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
         <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php        include 'includes/header.php';?>
        
        <div class="container signup_box">
            <div class="row">
                <div class="col-xs-6 col-xs-offset-3 col-md-4 col-md-offset-4">
                    
                    
                    <?php
                    $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
                    if(strpos($url, 'signup=empty') !== FALSE){
                        ?><div><h1>Email ID already registered!</h1></div> 
                    <?php
                    }
                    ?>
                    
                    
                    <h1>SIGN UP</h1><hr>
                    <form method="post" action="signup_script.php">
                        <div class="form-group"><input type="text" name="name" placeholder="Name" class="input-lg form-control" required="true"><br></div>
                        <div class="form-group"><input type="email" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" class="input-lg form-control" title="Enter correct E-mail id" required="true"><br></div>
                        <div class="form-group"><input type="password" name="password" placeholder="Password" title="Use combination of special characters along with letters and numbers for a strong password" class="input-lg form-control" required="true"><br></div>
                        <div class="form-group"><input type="tel" name="contact" placeholder="Contact" pattern="([1-9])+(?:-?\d){4,}" class="input-lg form-control" required="true"><br></div>
                        <div class="form-group"><input type="text" name="city" placeholder="City" class="input-lg form-control" required="true"><br></div>
                        <div class="form-group"><input type="text" name="address" placeholder="Address" class="input-lg form-control" required="true"><br></div>
                        <div class="form-group"><button type="submit" class="btn btn-primary btn-lg" name="submit">Sign Up</button>
                    </form>
                </div>
            </div>
        </div>
        </div>
        
        <?php        include 'includes/footer.php';?>
    </body>
</html>