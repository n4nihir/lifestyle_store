<?php
require 'includes/common.php';

if(isset($_POST['submit'])){
    
    $name = mysqli_real_escape_string($con, $_POST['name'] );
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $contact = mysqli_real_escape_string($con, $_POST['contact']);
    $city = mysqli_real_escape_string($con, $_POST['city']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    
    //error handler
    //Check for void
    
    $sql = "SELECT * FROM users WHERE email = '$email';";
    $sql_result = mysqli_query($con, $sql);
    $sql_result_check = mysqli_num_rows($sql_result);           
    if($sql_result_check >0){
        header("location:signup.php?signup=empty");
        exit();
    } else {
        //Insert User
        $sql = "INSERT INTO users (name, email, password, contact, city, address) VALUES ('$name', '$email', '$password', '$contact', '$city', '$address');";
        $sql_result = mysqli_query($con, $sql);
        header('location:login.php');
    }    
}else{
    header("location:signup.php");
}

?>
