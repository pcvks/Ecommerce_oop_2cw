<?php session_start(); ?>
<head>
<meta charset="UTF-8">
<title>Log In</title>

<link rel="stylesheet" href="styles/admin.css" />

</head>

<body>

<nav><a href="#" class="focus">Log In</a></nav>

<form action="" method="post" enctype="multipart/form-data">

	<h2>ເຂົ້າສູ່ລະບົບ</h2>

	<input type="text" name="email" class="text-field" placeholder="Email" />
    <input type="password" name="password" class="text-field" placeholder="Password" />
    
 <input type="submit" name="log_in" class="button" value="Log In" />

</form>

</body>
<?php 
include('../includes/db.php');
if(isset($_POST['log_in'])){
    $email = trim(mysqli_real_escape_string($con,$_POST['email']));
    $password = trim(mysqli_real_escape_string($con,$_POST['password']));
    $hash_password= md5($password);
    $sel_user = "select * from users where email ='$email' AND password='$hash_password' ";
    $run_user = mysqli_query($con,$sel_user) or die ("error: " . mysqli_error($con));
    $check_user = mysqli_num_rows($run_user);
    if($check_user > 0){
        $db_row = mysqli_fetch_array($run_user);
        $_SESSION['email'] = $db_row['email'];
        $_SESSION['name'] = $db_row['name'];
        $_SESSION['user_id'] = $db_row['id'];
        $_SESSION['role'] = $db_row['role'];
        if($db_row['role'] == 'ADM'){
            echo "<script>alert('You have logged in to Admin successfully!')</script>";
            echo "<script>window.open('index.php','_self')</script>";
        }elseif($db_row['role'] == 'USR'){
            echo "<script>alert('You have logged in  successfully!')</script>";
            echo "<script>window.open('../index.php','_self')</script>";
        }else{
            echo "<script>alert('Password or email is incorrect, Please try again!')</script>";
        }
    }
}
?>