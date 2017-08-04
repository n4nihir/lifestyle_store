<?php

function check_if_added_to_cart($item_id){
    $con = mysqli_connect("sql12.freemysqlhosting.net", "sql12188622", "ALibAuHspV", "sql12188622");
    $user_id = $_SESSION['uid'];
    
    $select_query = "SELECT * FROM users_items WHERE item_id='$item_id' AND user_id ='$user_id' and status='Added to cart'";
    $select_query_do = mysqli_query($con, $select_query);
    if(mysqli_num_rows($select_query_do)>=1){
        return 1;
    } else {
        return 0;    
    }
}