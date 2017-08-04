<div class="container">
        <div class="jumbotron product_content">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="images/cam1.jpg"/>
                    <h3 class="product_name">Canon EOS</h3>
                    <p class="product_price">Price:Rs.36000.00</p>
                    <?php 
                    if (!isset($_SESSION['email'])) {
                        ?> 
                    <p>
                        <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                    </p> 
                        <?php 
                    } else { 
//We have created a function to check whether this particular product is added to cart or not. 
                            if (check_if_added_to_cart(1)) { 
//This is same as if(check_if_added_to_cart != 0) 
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                            } else { 
                                ?> 
                                <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                    <?php 
                            } 
                    } 
                    ?>
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="images/cam2.jpg"/>
                    <h3 class="product_name">Sony DSLR</h3>
                    <p class="product_price">Price:Rs.40000.00</p>
                    <?php 
                    if (!isset($_SESSION['email'])) {
                        ?> 
                    <p>
                        <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                    </p> 
                        <?php 
                    } else { 
//We have created a function to check whether this particular product is added to cart or not. 
                            if (check_if_added_to_cart(2)) { 
//This is same as if(check_if_added_to_cart != 0) 
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                            } else { 
                                ?> 
                                <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                    <?php 
                            } 
                    } 
                    ?>
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="images/cam3.jpg"/>
                    <h3 class="product_name">Sony DSLR</h3>
                    <p class="product_price">Price:Rs.5000.00</p>
                    <?php 
                    if (!isset($_SESSION['email'])) {
                        ?> 
                    <p>
                        <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                    </p> 
                        <?php 
                    } else { 
//We have created a function to check whether this particular product is added to cart or not. 
                            if (check_if_added_to_cart(3)) { 
//This is same as if(check_if_added_to_cart != 0) 
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                            } else { 
                                ?> 
                                <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                    <?php 
                            } 
                    } 
                    ?>
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="images/cam4.jpg"/>
                    <h3 class="product_name">Olympus DSLR</h3>
                    <p class="product_price">Price:Rs.80000.00</p>
                    <?php 
                    if (!isset($_SESSION['email'])) {
                        ?> 
                    <p>
                        <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                    </p> 
                        <?php 
                    } else { 
//We have created a function to check whether this particular product is added to cart or not. 
                            if (check_if_added_to_cart(4)) { 
//This is same as if(check_if_added_to_cart != 0) 
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                            } else { 
                                ?> 
                                <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                    <?php 
                            } 
                    } 
                    ?>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="images/watch1.jpg"/>
                    <h3 class="product_name">Titan Model #301</h3>
                    <p class="product_price">Price:Rs.13000.00</p>
                    <?php 
                    if (!isset($_SESSION['email'])) {
                        ?> 
                    <p>
                        <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                    </p> 
                        <?php 
                    } else { 
//We have created a function to check whether this particular product is added to cart or not. 
                            if (check_if_added_to_cart(5)) { 
//This is same as if(check_if_added_to_cart != 0) 
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                            } else { 
                                ?> 
                                <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                    <?php 
                            } 
                    } 
                    ?>
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="images/watch2.jpg"/>
                    <h3 class="product_name">Titan Model #201</h3>
                    <p class="product_price">Price:Rs.3000.00</p>
                    <?php 
                    if (!isset($_SESSION['email'])) {
                        ?> 
                    <p>
                        <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                    </p> 
                        <?php 
                    } else { 
//We have created a function to check whether this particular product is added to cart or not. 
                            if (check_if_added_to_cart(6)) { 
//This is same as if(check_if_added_to_cart != 0) 
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                            } else { 
                                ?> 
                                <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                    <?php 
                            } 
                    } 
                    ?>
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="images/watch3.jpg"/>
                    <h3 class="product_name">HMT Milan</h3>
                    <p class="product_price">Price:Rs.8000.00</p>
                    <?php 
                    if (!isset($_SESSION['email'])) {
                        ?> 
                    <p>
                        <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                    </p> 
                        <?php 
                    } else { 
//We have created a function to check whether this particular product is added to cart or not. 
                            if (check_if_added_to_cart(7)) { 
//This is same as if(check_if_added_to_cart != 0) 
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                            } else { 
                                ?> 
                                <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                    <?php 
                            } 
                    } 
                    ?>
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="images/watch4.jpg"/>
                    <h3 class="product_name">Faber Luba #111</h3>
                    <p class="product_price">Price:Rs.18000.00</p>
                    <?php 
                    if (!isset($_SESSION['email'])) {
                        ?> 
                    <p>
                        <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                    </p> 
                        <?php 
                    } else { 
//We have created a function to check whether this particular product is added to cart or not. 
                            if (check_if_added_to_cart(8)) { 
//This is same as if(check_if_added_to_cart != 0) 
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                            } else { 
                                ?> 
                                <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                    <?php 
                            } 
                    } 
                    ?>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="images/shirt1.jpg"/>
                    <h3 class="product_name">H&W</h3>
                    <p class="product_price">Price:Rs.800.00</p>
                    <?php 
                    if (!isset($_SESSION['email'])) {
                        ?> 
                    <p>
                        <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                    </p> 
                        <?php 
                    } else { 
//We have created a function to check whether this particular product is added to cart or not. 
                            if (check_if_added_to_cart(9)) { 
//This is same as if(check_if_added_to_cart != 0) 
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                            } else { 
                                ?> 
                                <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                    <?php 
                            } 
                    } 
                    ?>
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="images/shirt2.jpg"/>
                    <h3 class="product_name">Luis Phil</h3>
                    <p class="product_price">Price:Rs.1000.00</p>
                    <?php 
                    if (!isset($_SESSION['email'])) {
                        ?> 
                    <p>
                        <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                    </p> 
                        <?php 
                    } else { 
//We have created a function to check whether this particular product is added to cart or not. 
                            if (check_if_added_to_cart(10)) { 
//This is same as if(check_if_added_to_cart != 0) 
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                            } else { 
                                ?> 
                                <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                    <?php 
                            } 
                    } 
                    ?>
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="images/shirt3.jpg"/>
                    <h3 class="product_name">John Zok</h3>
                    <p class="product_price">Price:Rs.1500.00</p>
                    <?php 
                    if (!isset($_SESSION['email'])) {
                        ?> 
                    <p>
                        <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                    </p> 
                        <?php 
                    } else { 
//We have created a function to check whether this particular product is added to cart or not. 
                            if (check_if_added_to_cart(11)) { 
//This is same as if(check_if_added_to_cart != 0) 
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                            } else { 
                                ?> 
                                <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                    <?php 
                            } 
                    } 
                    ?>
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="images/shirt4.jpg"/>
                    <h3 class="product_name">Jhalsani</h3>
                    <p class="product_price">Price:Rs.1300.00</p>
                    <?php 
                    if (!isset($_SESSION['email'])) {
                        ?> 
                    <p>
                        <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                    </p> 
                        <?php 
                    } else { 
//We have created a function to check whether this particular product is added to cart or not. 
                            if (check_if_added_to_cart(12)) { 
//This is same as if(check_if_added_to_cart != 0) 
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                            } else { 
                                ?> 
                                <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                    <?php 
                            } 
                    } 
                    ?>
                </div>
            </div>
        </div>
        </div>
    </div>