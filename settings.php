<?php
require 'includes/common.php';
if(!isset($_SESSION['email'])){
    header('location: index.php');
}
?>
    <!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Settings - Lifestyle Stores</title>
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
        <?php       include 'includes/header.php';?>
        
        <div class="container change_password_box">
            <div class="row">
                <div class="col-xs-6 col-xs-offset-3 col-md-4 col-md-offset-4">
                    <h3>Change Password</h3>
                    <?php 
                            $url_log = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
                            if (strpos($url_log, 'settings=wrong') !== FALSE){
                            ?><div><h1 class="text-warning">Old Password did not match!</h1></div> 
                            <?php
                            }if (strpos($url_log, 'settings=empty') !== FALSE){
                            ?><div><h1 class="text-warning">The new passwords did not match!</h1></div> 
                            <?php
                            }
                    ?>
                    <form method="post" action="settings_script.php">
                    <div class="form-group"><input type="password" name="old_password" placeholder="Old Password" class="input-lg"><br></div>
                    <div class="form-group"><input type="password" name="new_password" placeholder="New Password" class="input-lg"><br></div>
                    <div class="form-group"><input type="password" name="confirm_password" placeholder="Re-type New Password" class="input-lg"><br></div>
                    <div class="form-group"><button type="submit" class="btn btn-primary btn-lg" name="submit">Change</button></div>
                    </form>
                </div>
            </div>
        </div>
        
        <?php        include 'includes/footer.php';?>
    </body>
</html>
