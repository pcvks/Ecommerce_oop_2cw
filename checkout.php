<?php
session_start();

include('includes/header.php');
?>
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
            
           
               
                 <?php 
                 if(!isset($_SESSION['user_id'])){
                 include('payment.php');
                 }else{
                     include('login.php');
                 }
                 echo $_SESSION['user_id'] . "<br/>";
                 echo $_SESSION['role'];
                 ?>
                
             
        </div>
       <?php
       include('includes/footer.php');
       ?>