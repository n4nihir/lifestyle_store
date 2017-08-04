<?php
require 'includes/common.php';
if(!isset($_SESSION['email'])){
    header('location: index.php');
}else{
    $uid = $_SESSION['uid'];
    $update_query = "UPDATE users_items SET status= 'Confirmed' where user_id='$uid'";
    $update_query_result = mysqli_query($con, $update_query);
    ?>
    <!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Lifestyle Stores</title>
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
        <?php include 'includes/header.php';?>
        <div class="success_message"><h1>Your order is <b>Confirmed</b>. Thank You for shopping with us.</h1></div>
        <div class="redirect"><h3><a href="products.php">Buy More!</a></h3></div>
        
        <?php            include 'includes/footer.php';?>
    </body>
</html>
<?php
}
?>
