<?php

require 'includes/common.php';
if(!isset($_SESSION['email'])){
    header('location: index.php');
} else {
    $old_pw = $_POST['old_password'];
    $new_pw = $_POST['new_password'];
    $re_new_pw = $_POST['confirm_password'];
    $email = $_SESSION['email'];
    $confirm_query = "SELECT password FROM users WHERE email='$email' AND password='$old_pw'";
    $confirm_query_result = mysqli_query($con, $confirm_query);
    $num_rows_check = mysqli_num_rows($confirm_query_result);
//match password
    if($re_new_pw !== $new_pw){
        header('location:settings.php?settings=empty');
    } elseif ($num_rows_check ==0) {
        header('location:settings.php?settings=wrong');
    } else {
        $update_query = "UPDATE users SET password = '$new_pw' WHERE email='$email'";
        $update_query_result = mysqli_query($con, $update_query);
        header('location:products.php?pass=success');
    }
}

?>

