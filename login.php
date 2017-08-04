<?php
 require 'includes/common.php';
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Login - Lifestyle Stores</title>
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
        <?php
        include 'includes/header.php';
        ?>
        
        <div class="container login_box">
            <div class="row row_style">
                <div class="col-xs-8 col-xs-offset-2 col-md-6 col-md-offset-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h2>LOGIN</h2>
                            
                            <?php 
                            $url_log = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
                            if (strpos($url_log, 'login=empty') !== FALSE){
                            ?><div><p class="text-warning">Invalid Email ID or Password</p></div> 
                            <?php
                            }
                            ?>
                            
                        </div>
                        
                        <div class="panel-body">
                            <p class="text-warning" STYLE="padding-left: 15px;">Login to make a purchase</p>
                            <div class="row">
                                <div class="col-xs-10 col-xs-offset-1">
                                    <form method="post" action="login_submit.php">
                                        <div class="form-group"><input type="email" name="email" placeholder="Email" class="input-lg form-control"><br></div>
                                        <div class="form-group"><input type="password" name="password" placeholder="Password" class="input-lg form-control"><br><br></div>
                                        <div class="form-group"><button type="submit" class="btn btn-primary btn-lg" name="submit">Login</button></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                        <div class="panel-footer">
                            <p>Don't have an account? <a href="signup.php">Register</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>


