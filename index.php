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
                        <a href="logout.php">Logout</a>
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
                <?php 
               cart();
                ?>
                <div id="products_box">
                <?php if(!isset($_GET['action'])){?>
                    <?php
                   getPro();
                    ?>
                    <?php 
                    get_pro_by_cat_id();
                    
               
                ?> 
                <?php 
                get_pro_by_brand_id();
                ?> 
                <?php }else{ ?>
                <?php include('login.php')?>
                <?php } ?>
                </div>
            </div>
        </div>
       <?php
       include('includes/footer.php');
       ?>