<?php include('includes/db.php');
?>
<div class="login_box" style="width:100%;float:left;padding:15px;background:white;">
    <form method="post" action="">
        <table align="left" width="70%">
            <tr align="left">
                <td colspan="4">
                    <h2>Login.</h2><br/>
                    <span>
                        Don't have account? 
                        <a href="register.php">Register Here</a><br/><br/>
                    </span>
                </td>
            </tr>
            <tr>
                <td width="15%"><b>Email:</b></td>
                <td colspan="3"><input style="width:60%;padding:3px 10px; margin:5px 0;"  required type="text" name="email"placeholder="Email"/></td>
            </tr>
            <tr>
                <td width="15%"><b>Password:</b></td>
                <td colspan="3"><input style="width:60%;padding:3px 10px; margin:5px 0;" required type="password" name="password"placeholder="Password"/></td>
            </tr>
            <tr align="left">
                <td ></td>
                <td colspan="4"><a href="register.php?forgot_pass">
                    Forgot Password</a></td>
            </tr>
            <tr align="left">
                <td ></td>
                <td colspan="4">
                    <input style="padding:10px 15px;background:rgba(28,130,190,0.9);border:0.01px solid rgba(28,130,190,0.9);color:white;" type="submit" name="log_in" value="Login" />
                </td>
            </tr>
        </table>
    </form>
    
</div>
<?php 
include('includes/db.php');
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
            echo "<script>window.open('admin_area/index.php','_self')</script>";
        }elseif($db_row['role'] == 'USR'){
            echo "<script>alert('You have logged in  successfully!')</script>";
            echo "<script>window.open('index.php','_self')</script>";
        }else{
            echo "<script>alert('Password or email is incorrect, Please try again!')</script>";
        }
    }
}
?>
     