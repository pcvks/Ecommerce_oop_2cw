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
                <h1 style="text-align:center; font-size:30px;">Contact to Admin</h1>
            <h2 style="text-align:center;">porchouavang Kangser </h2>
            <h2  style="text-align:center;">+8652076589225</h2>
            </div>
        </div>
       <?php
       include('includes/footer.php');
       ?>