<?php session_start();
//  if(!isset($_SESSION['role']) && $_SESSION['role'] !='admin'){ 
// echo "<script>window.open('login.php'.'_self')</script>";
//  }else{ 
?>
<?php include'../includes/db.php' ;?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Developer</title>
    <link rel="stylesheet"  type="text/css" href="styles/style.css" />
    <!-- <link rel="stylesheet"  type="text/css" href="styles/material-dashboard.min.css" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
</head>
<body>
    <div class="container" >
        <div class="header" style="background-color:darkblue;">
            <div class="navbar-header">
                <h3><a  class="admin_name">Admin Area - <?php echo "Admin Name";?></a></h3>
            </div>
            <div class="navbar-right-header">
                <ul class="dropdown-navbar-right">
                    <li>
                        <a ><i class="fa fa-user"></i>&nbsp;<i class="fa fa-caret-down"></i> </a>
                        <ul class="subnavbar-right">
                            <li><a>User Account</a></li>
                            <li><a>Logout</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="dropdown-navbar-right">
                    <li>
                        <a ><i class="fa fa-bell"></i>&nbsp;<i class="fa fa-caret-down"></i> </a>
                        <ul class="subnavbar-right">
                            <li><a>Notification</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="body_container" >
            <div class="left_sidebar" style="background-color:lightgray;">
                <div style="padding-bottom:50px;" class="left_sidebar_box">
                    <ul class="left_sidebar_first_level">
                        <li><a href="../index.php" target="_blank"><i class="fa fa-dashboard">My Site</i></a></li>
                        <li>
                            <a href="#"><i class="fa fa-th-large"></i>&nbsp; Products <i class="arrow fa fa-angle-left"></i></a>
                        <ul class="left_sidebar_second_level">
                            <li><a href="index.php?action=add_pro">Add Product</a></li>
                            <li><a href="index.php?action=view_pro">View Products</a></li>
                        </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-plus"></i>&nbsp; Categories <i class="arrow fa fa-angle-left"></i></a>
                        <ul class="left_sidebar_second_level">
                            <li><a href="index.php?action=add_cat">Add Categories</a></li>
                            <li><a href="index.php?action=view_cat">View Categories</a></li>
                        </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-plus"></i>&nbsp; Brands <i class="arrow fa fa-angle-left"></i></a>
                        <ul class="left_sidebar_second_level">
                            <li><a href="index.php?action=add_brand">Add Brands</a></li>
                            <li><a href="index.php?action=view_brand">View Brands</a></li>
                        </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-gift"></i>&nbsp; Admin <i class="arrow fa fa-angle-left"></i></a>
                        <ul class="left_sidebar_second_level">
                            <li><a href="index.php?action=view">User</a></li>
                            <li><a href="index.php?action=view_users">List User</a></li>
                        </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-gift"></i>&nbsp; Cart <i class="arrow fa fa-angle-left"></i></a>
                        <ul class="left_sidebar_second_level">
                            
                            <li><a href="index.php?action=view_cart ">View Cart</a></li>
                        </ul>
                        </li>
                    </ul>
                </div>
                
                
            </div>
            <div class="product_side">
            <div class="card " style="display:flex; width:900px; height:100px; " style="@media (max-width:500px){ flex-direction:column;}">
            <a href="index.php?action=view_pro" style="text-decoration:none;">
                                    <div style="background-color:#ff6347; margin: 20px; height:100px; width:200px;"class="card-header  ">
                                        <div style="" class="icon icon-lg icon-shape bg-gradient-dark d-flex  shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                                        <i class="fa fa-th-large" style="display:flex;"> &nbsp; &nbsp; <h3>Products</h3></i>
                                        </div>
                                        <div class="text-end ">
                                            <p class="text-sm mb-0 text-capitalize">View Products</p>
                                            <h4 class="mb-0" style="text-align:right">8</h4>
                                        </div>
                                        
                                    <div class="card-footer ">
                                    
                                    <span class="text-success text-sm font-weight-bolder">+100% </span>
                                    than last week</p>
                                    </div>
                                    </div>
            </a>
            <a href="index.php?action=view_cat" style="text-decoration:none;">
                                    <div style="background-color:#00fa9a ; margin: 20px; height:100px; width:200px;"class="card-header  ">
                                        <div style="" class="icon icon-lg icon-shape bg-gradient-dark d-flex  shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                                        <i class="fa fa-plus" style="display:flex;"> &nbsp; &nbsp; <h3>Categories</h3></i>
                                        </div>
                                        <div class="text-end ">
                                            <p class="text-sm mb-0 text-capitalize">View Categories</p>
                                            <h4 class="mb-0" style="text-align:right">5</h4>
                                        </div>
                                        
                                    <div class="card-footer ">
                                    
                                    <span class="text-success text-sm font-weight-bolder">+100% </span>
                                    than last week</p>
                                    </div>
                                    </div>
            </a>
            <a href="index.php?action=view_brand" style="text-decoration:none;">
                                    <div style="background-color:#6495ed; margin: 20px; height:100px; width:200px;"class="card-header  ">
                                        <div style="" class="icon icon-lg icon-shape bg-gradient-dark d-flex  shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                                        <i class="fa fa-plus" style="display:flex;"> &nbsp; &nbsp; <h3>Brands</h3></i>
                                        </div>
                                        <div class="text-end ">
                                            <p class="text-sm mb-0 text-capitalize">View Brands</p>
                                            <h4 class="mb-0" style="text-align:right">9</h4>
                                        </div>
                                        
                                    <div class="card-footer ">
                                    
                                    <span class="text-success text-sm font-weight-bolder">+100% </span>
                                    than last week</p>
                                    </div>
                                    </div>
            </a>
            <a href="index.php?action=view_cart" style="text-decoration:none;">
                                    <div style="background-color:#db7093; margin: 20px; height:100px; width:200px;"class="card-header  ">
                                        <div style="display:flex;" class="icon icon-lg icon-shape bg-gradient-dark   shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                                        <i class="fa fa-gift" style="display:flex;"> &nbsp; &nbsp; <h3>Carts</h3></i>
                                        </div>
                                        <div class="text-end ">
                                            <p class="text-sm mb-0 text-capitalize">View Carts</p>
                                            <h4 style="text-align:right">8</h4>
                                        </div>
                                        
                                    <div class="card-footer ">
                                    
                                    <span class="text-success text-sm font-weight-bolder">+99% </span>
                                    than last week</p>
                                    </div>
                                    </div>
            </a>
                
                   
            </div>
            <div class="content">
                <div class="content_box">
                   <?php if(isset($_GET['action'])){
                       $action =$_GET['action'];
                   }else{
                       $action = '';
                   }

                   switch($action){
                       case 'add_pro';
                       include 'includes/insert_product.php';
                       break;

                       case 'view_pro';
                       include 'includes/view_products.php';
                       break;

                       case 'edit_pro';
                       include 'includes/edit_product.php';
                       break;

                       case 'add_cat';
                       include 'includes/insert_category.php';
                       break;

                       case 'view_cat';
                       include 'includes/view_category.php';
                       break;

                       case 'add_brand';
                       include 'includes/insert_brand.php';
                       break;

                       case 'view_brand';
                       include 'includes/view_brand.php';
                       break;
                       
                       case 'view_users';
                       include 'includes/view_users.php';
                       break;
                       case 'view_cart';
                       include 'includes/view_cart.php';
                       break;
                       case 'delete_pro';
                       include 'includes/delete_product.php';
                       break;
                   }
                       ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<script src="../js/jquery3.6.1.js">
</script>
<script>
$(document).ready(function(){
    $(".dropdown-navbar-right").on('click',function(){
        $(this).find(".subnavbar-right").slideToggle('fast');
    });
    $(".left_sidebar_first_level li").on('click',this,function(){
        $(this).find(".left_sidebar_second_level").slideToggle('fast');
    });
});
</script>
