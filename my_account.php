
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
        <?php if(isset($_SESSION['user_id'])) {?>
        <div class="user_content">
            <?php 
            if(isset($_GET['action'])){
                $action = $_GET['action'];
            }else{
                $action = '';
            }
            switch($action){
                case "edit_account";
                include ('users/edit_account.php');
                break;
                case "change_password";
                echo $action;
                break;
                default;
                case "delete_account";
                echo $action;
                break;
                case "logout";
                echo $action;
                break;
                echo "Do something";
                break;
            }
            // if($_GET['action'] == 'edit_account'){
            //     echo $action;
            // }
            ?>
           
        </div>
        <ul  style="background:white;font-family: Comic Sans Ms;text-color:strong; margin:0 50px 0 1200px; box-shadow: 0 6px 5px 5px; width:200px; height:150px; right:30px; text-align:center;">
        <li ><a href="my_account.php?action=my_order">My Order</a></li>
        <li><a href="my_account.php?action=edit_account">Edit Account</a></li>
        <li><a href="my_account.php?action=change_password">Change Password</a></li>
        <li><a href="my_account.php?action=delete_account">Delete Account</a></li>
        <li><a href="my_account.php?action=logout">Logout</a></li>
        </ul>
            <?php }else {?>
                <!-- <h1>Edit Your Account</h1>
                <h5><a href="users/edit_account.php">Edit</a> to Your Account!</h5> -->
            <?php }?>
       <?php
       include('includes/footer.php');
       ?>