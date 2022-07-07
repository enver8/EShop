<div id="footer"><!-- #footer Begin-->
    <div class="container"> <!-- container Begin-->
        <div class="row"><!-- row Begin-->
            <div class="col-sm-6 col-md-3"><!-- col-sm-6 col-md-3 Begin-->

                <h4>Pages</h4>

                <ul><!-- ul Begin-->
                    <li><a href="cart.php">Shopping Cart</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="customer/my_account.php">My Account</a></li>                    
                </ul><!-- ul Finish-->

                <br>

                <h4>User Section</h4>

                <ul><!-- ul Begin-->
                    
                <?php 
                            
                if(!isset($_SESSION['customer_email'])){

                    echo"<a href='checkout.php'> Login </a>";

                }else{

                    echo"<a href='customer/my_account.php?my_orders'> My Account </a>";

                }
                            
                ?>

                    <li><a href="customer_register.php">Register</a></li>

                    <hr class="hidden-md hidden-lg hidden-sm">

                </ul><!-- ul Finish-->

            </div><!-- col-sm-6 col-md-3 Finish-->

            <div class="com-sm-6 col-md-3"><!-- col-sm-6 col-md-3 Begin-->

                <h4>Top Product Categoris</h4>

                <ul><!-- ul Begin-->
                
                    <?php 
                    
                        $get_p_cats = "select * from product_categories";

                        $run_p_cats = mysqli_query($con,$get_p_cats);

                        while($row_p_cats=mysqli_fetch_array($run_p_cats)){

                            $p_cat_id = $row_p_cats['p_cat_id'];
                            $p_cat_title = $row_p_cats['p_cat_title'];

                            echo "

                                <li>

                                    <a href='shop.php?p_cat=$p_cat_id'>

                                        $p_cat_title

                                    </a>

                                </li>
                            
                            ";

                        }
                    
                    ?>

                </ul><!-- ul Finish-->

                <hr class="hidden-md hidden-lg">

            </div><!-- com-sm-6 col-md-3 Finish-->

            <div class="col-sm-6 col-md-3"><!-- col-sm-6 col-md-3 Begin-->

                <h4>Find Us:</h4>
                <p><!-- p Start-->

                    <strong>EEShop inc.</strong>
                    <br/>Naselje Miljacka
                    <br/>Sarajevo
                    <br/>+3876x/xxx-xxx
                    <br/>EEShop@gmail.com
                    <br/><strong>EEShop</strong>
                </p><!-- p Finish-->

                <a href="contact.php">Chack Our Contact Page</a>

                <hr class="hidden-md hidden-lg">

            </div><!-- com-sm-6 col-md-3 Finish-->

            <div class="col-sm-6 col-md-3">

                <h4>Get The News</h4>

                <p class="text-muted">
                    Don't miss our latest update products.                   
                </p>

                <form action="" method="post"><!-- form Begin-->
                    <div class="input-group"><!-- input-group Begin-->

                        <input type="text" class="form-control" name="email">

                        <span class="input-group-btn"><!-- input-group-btn Begin-->

                            <input type="submit" value="subscribe" class="btn btn-default">

                        </span><!-- input-group-btn Finish-->

                    </div><!-- input-group Finish-->
                </form><!-- form Finish-->

                <hr>

                <h4>Keep In Touch</h4>

                <p class="social">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-google-plus"></a>
                    <a href="#" class="fa fa-envelope"></a>
                </p>

            </div>
        </div><!-- row Finish-->
    </div><!-- container Finish-->
</div><!-- #footer Finish-->

<div id="copyright"><!-- #copyright Begin-->
    <div class="container"><!-- container Begin-->
        <div class="col-md-6"><!-- col-md-6 Begin-->

            <p class="pull-left">&copy; 2022 EEShop All Rights Reserve</p>

        </div><!-- col-md-6 Finish-->
        <div class="col-md-6"><!-- col-md-6 Begin-->

            <p class="pull-right">Theme by: <a href="">EE</a></p>

        </div><!-- col-md-6 Finish-->
    </div><!-- container Finish-->
</div><!-- #copyright Finish-->