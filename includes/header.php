<?php
include("includes/db.php");
include("function/functions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="styles/style.css" />
    <script src="js/jquery3.6.1.js"></script>
</head>
<body>
    <div class="container">
        <div class="header">
                <div class="header_logo">
            <a href="index.php">
                <img src="images/logo.png" id="logo" alt="">
            </a>
                </div>
                <div id="form">
                    <form action="results.php" method="get" >
                        <input type="text" name="user_query" placeholder="Search a Product">
                        <input type="submit" name="search" value="Search">
                    </form>
            </div>
            <div class="cart">
                <ul>
                    <li class="dropdown_header_cart">
                        <div id="notification_total_art" class="shopping-cart">
                            <img src="images/cart_icon.png" id="cart_image" alt="">
                            <div class="noti_cart_number">
                                <?php 
                                total_items();
                                ?>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            
            <div class="register_login">
            <?php 
            if(!isset($_SESSION['user_id'])){?>
           
                <div class="login">
                    <a href="index.php?action=login">Login</a>
                </div>
                <div class="register" color="white">
                    <a href="register.php">Register</a>
                </div>
                <?php }else{ ?>
                <?php 
                $select_user = mysqli_query($con,"select * from users where id='$_SESSION[user_id]' ");
                $data_user = mysqli_fetch_array($select_user);
                ?>
            <div style="float:left; height:35px; line-height:35px; position:relative;
            top:15px; margin-left:35px;" id="profile">
            <ul style="list-style:none; position:relative;">
            <li class="dropdown_header">
            <a  style="line-height:35px; color:black;text-decoration:none;" href="">
            <!-- <?php if($data_user['image'] !=''){ ?>
            <span><img style="width:25px; height:25px; border-radius:10px;" 
            src="customer/customer_images/<?php echo $data_user['image']; ?>" alt=""></span></a>
            <?php }else{ ?> -->
                <span><img style="width:25px;position:relative;top:-1.8px; height:25px; border-radius:10px;" src="images/profile-icon.png" alt=""></span></a>
            <?php } ?>
            <ul style="top:40px; right:1px;white-space:nowrap;background:white;width;auto;
            z-index:11; display:none; position:absolute;" class="dropdown_menu_header">
            <li><a  style="line-height:35px; color:black;text-decoration:none;" href="customer/my_account.php">Account Setting </a></li>
            <li><a  style="line-height:35px; color:black;text-decoration:none;" href="logout.php">Logout </a></li>
            </ul>
            </li>
            </ul>
            </div>
           <?php }?>
            </div>
            <script>
            $(document).ready(function(){
                $(".dropdown_header").click(function(){
                    $(this).find(".dropdown_menu_header").slideToggle("fast");
                });
            });</script>
           