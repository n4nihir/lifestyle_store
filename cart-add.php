<?php
require 'includes/common.php';
$item_id = $_GET["id"];
$user_id = $_SESSION['uid'];
$cart_add_do = mysqli_query($con, "INSERT INTO users_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')");
header("location:products.php");
?>