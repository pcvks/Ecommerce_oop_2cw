<?php include('includes/header.php');?>
        </div>
         <div class="menu_bar">
                <ul id="menu">
                    <li>
                        <a href="index.php">Home</a>
                        <a href="all_product.php">All Products</a>
                        <a href="my_account.php">My Account</a>
                        <a href="cart.php">Shopping Cart</a>
                        <a href="contact.php">Contact Us</a>
                    </li>
                    <li>
                        
                    </li>
                </ul>
            </div>
        <div class="content">
            <div id="sidebar">
                <div id="sidebar_title">
                    Categories
                </div>
                <ul id="cats">
                    
                    <?php
                getCats();
                    ?>
                </ul>
                <div id="sidebar_title">
                    Brands
                </div>
                <ul id="cats">
                    <?php
                    getBrands();
                    ?>
                </ul>
            </div>
            <div class="contentbody">
                <div id="products_box">
               <?php
               if(isset($_GET['pro_id'])){
                   $product_id = $_GET['pro_id'];
                   $run_query_by_pro_id = mysqli_query($con,"select * from
                    products where product_id='$product_id'");
                    while($row_pro = mysqli_fetch_array($run_query_by_pro_id)){
                        $pro_id = $row_pro['product_id'];
                        $pro_cat = $row_pro['product_cat'];
                        $pro_brand = $row_pro['product_brand'];
                        $pro_title = $row_pro['product_title'];
                        $pro_price = $row_pro['product_price'];
                        $pro_image = $row_pro['product_image'];
                        echo "
                        <div id='single_product'>
                        <h3>$pro_title</h3>
                        <img src='admin_area/product_images/$pro_image' width='180' height='180' />
                        <p><b>Price: $ $pro_price</b></p>
                        <a href='detail.php?pro_id=$pro_id'>Details</a>
                        <a href='index.php?add_cart=$pro_id'>
                        <button style='float:right; background-color: red; width: 100%;'>Add to Cart</button>
                        </a>
                        </div>";
                    }
               }
               ?>
                </div>
            </div>
        </div>
       <?php
       include('includes/footer.php');
       ?>