<?php
if(isset($_POST['submit'])){
    require_once 'includes/common.php';
    $email = mysqli_real_escape_string($con, $_POST["email"]);
    $password = mysqli_real_escape_string($con, $_POST["password"]);
    $select_query = "SELECT id, email FROM users WHERE email='$email' AND password='$password'";
    $select_query_do = mysqli_query($con, $select_query);
    $num_rows = mysqli_num_rows($select_query_do);
    if($num_rows==0){
        header('location:login.php?login=empty');
    } else {
        $_SESSION['email'] = $email;
        $_SESSION['uid']= mysqli_fetch_object(mysqli_query($con, "SELECT id FROM users WHERE email='$email'"))->id;
        $_SESSION['id'] = mysqli_insert_id($con);
        session_start();
        header('location:products.php');
    }
}else{
    header('location:login.php');
}
?>

