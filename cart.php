<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <title>Cart - Lifestyle Stores</title>
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
    require 'includes/common.php';
    include 'includes/header.php';
    if (!isset($_SESSION['email'])){
        header('location: login.php'); 
        }
    
    $user_id = $_SESSION['uid'];
    $table_query = "SELECT * FROM users_items INNER JOIN items ON users_items.item_id = items.id WHERE users_items.status='Added to Cart';";
    $table_query_result = mysqli_query($con, $table_query);
    $num_rows_table = mysqli_num_rows($table_query_result);
    if ($num_rows_table == 0){
        ?><div class="center"><a href="products.php"><h1>Add items to Cart First</h1></a></div><?php
    } else {
        $count=1;
        $sum=0;?>
        
        <div class="center_cart"><h1 style="color: red;"><u> Your Cart </u></h1></div>
        <div class="col-md-8 col-md-offset-2 container table_box table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th><b>Item Number</b></th>
                        <th><b>Item Name</b></th>
                        <th><b>Price</b></th>
                        <th></th>
                    </tr>
                </thead>
            <?php while ($row = mysqli_fetch_array($table_query_result)){?>    
                <tbody>
                    <tr class="table_info">
                        <td><?php echo$count;?></td>
                        <td><?php echo$row['name'];?></td>
                        <td><?php echo$row['price'];?></td>
                        <td><a href="cart-remove.php?id= <?php echo$row['item_id'];?>" style="text-decoration: none;"><button type="submit">Delete From Cart</button></a></td>
                    </tr>
                </tbody>
        <?php 
        $count = $count+1;
        $sum = $sum + $row['price'];
        } ?>
                
                <tfoot>
                    <tr>
                        <td></td>
                        <td>Total</td>
                        <td><?php echo$sum;?></td>
                        <td><a href="success.php"><div class="btn btn-primary btn-block">Confirm Order</div></a></td>
                    </tr>
                </tfoot>
            </table>
            <div class="blank"></div>
        </div>
        
        <div class="hidden-sm hidden-md hidden-lg separator-bottom"></div>
        
    <?php        }
    include 'includes/footer.php';?>
    </body>
</html>


