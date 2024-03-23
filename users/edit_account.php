
        <div class="content">
        <?php include('../includes/db.php');
?>
<script>
$(document).ready(function(){
    $("#password_confirm2").on('keyup',function(){
        //alert('testing jquery');
        var password_confirm1 = $("#password_confirm1").val();

        var password_confirm2 = $("#password_confirm2").val();

        //alert(password_confirm2);
        if(password_confirm1 == password_confirm2){
            $("#status_for_confirm_password").html('<strong style="color:green;">Password match</strong>');
        }else{
            $("#status_for_confirm_password").html('<strong style="color:red;">Password do not match</strong>');
        }
    });
});
</script>
<?php 
$select_user = mysqli_query($con,"select * from users where email='$email' ");
$fetch_user = mysqli_fetch_array($select_user);
?>
<div class="register_box" style="width:100%;float:left;padding:15px;background:white;">
    <form method="post" action="" enctype="multipart/form-data">
        <table align="left" width="70%">
            <tr align="left">
                <td colspan="4">
                    <h2>Edit Account.</h2><br/>
                    
                </td>
            </tr>
            <tr>
                <td width="15%"><b>Name:</b></td>
                <td colspan="3"><input style="width:60%;padding:3px 10px; margin:5px 0;" value="<?php echo $fetch_user['name'];?>" type="text" name="name" required placeholder="Name"/></td>
            </tr>
            <tr>
                <td width="15%"><b>Email:</b></td>
                <td colspan="3"><input style="width:60%;padding:3px 10px; margin:5px 0;" type="text" value="<?php echo $fetch_user['email'];?>" name="email" required placeholder="Email"/></td>
            </tr>
            <tr>
                <td width="15%"><b>Password:</b></td>
                <td colspan="3"><input style="width:60%;padding:3px 10px; margin:5px 0;" type="password" id="password_confirm1"value="<?php echo $fetch_user['password'];?>" required name="password" placeholder="Password"/></td>
            </tr>
            <tr>
                <td width="15%"><b>Confirm Password:</b></td>
                <td colspan="3"><input style="width:60%;padding:3px 10px; margin:5px 0;" type="password" name="password_confirm" required id="password_confirm2" placeholder="Password"/>
                <p id="status_for_confirm_password"></p><!-- Showing validate password here -->
                </td>
                
            </tr>
            <tr>
                <td width="15%"><b>Image:</b></td>
                <td colspan="3"><input style="width:80%;padding:3px 10px; margin:5px 0;" type="file" required name="image"/></td>
            </tr>
            <tr>
                <td width="15%"><b>Country:</b></td>
                <td colspan="3">
                <?php include('../includes/country_list.php');?>
                </td>
            </tr>
            <tr>
                <td width="15%"><b>City:</b></td>
                <td colspan="3"><input style="width:60%;padding:3px 10px; margin:5px 0;" type="text" name="city" required placeholder="City"/></td>
            </tr>
            <tr>
                <td width="15%"><b>Contact:</b></td>
                <td colspan="3"><input style="width:60%;padding:3px 10px; margin:5px 0;" type="text" name="contact" required placeholder="Contact"/></td>
            </tr>
            <tr>
                <td width="15%"><b>Address:</b></td>
                <td colspan="3"><input style="width:60%;padding:3px 10px; margin:5px 0;" type="text" name="user_address" required placeholder="Address"/></td>
            </tr>
            <tr align="left">
                <td ></td>
                <td colspan="4">
                    <input style="padding:10px 15px;background:rgba(28,130,190,0.9);border:0.01px solid rgba(28,130,190,0.9);color:white;" type="submit" name="register" value="Register" />
                </td>
            </tr>
        </table>
    </form>
    
</div>
<?php 
    if(isset($_POST['register'])){
        if(!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password_confirm']) && !empty($_POST['name'])){
            $ip = get_ip();
            $name = $_POST['name'];
            $email = trim($_POST['email']);
            $password = trim($_POST['password']);
            $hash_password = md5($password);
            $confirm_password = trim($_POST['password_confirm']);

            $image = $_FILES['image']['name'];
            $image_tmp = $_FILES['image']['tmp_name'];
            $country = $_POST['country'];
            $city = $_POST['city'];
            $contact = $_POST['contact'];
            $address = $_POST['user_address'];

            $check_exist = mysqli_query($con,"select * from users where email= '$email'");

            $email_count = mysqli_num_rows($check_exist);
            $row_register = mysqli_fetch_array($check_exist);
            if($email_count > 0){
                echo "<script>alert('Sorry, your email $email address already exist in our database!')</script>";
            }elseif($row_register['email'] != $email && $password == $confirm_password){
                move_uploaded_file($image_tmp,"customer/customer_images/$image");
                $run_insert = mysqli_query($con,"insert into users (ip_address,name,email,password,country,city,contact,user_address,image) values ('$ip','$name','$email','$hash_password','$country','$city','$contact','$address','$image')");
                if($run_insert){
                    $sel_user = mysqli_query($con,"select * from users where email='$email'");
                    $row_user = mysqli_fetch_array($sel_user);
                    echo $_SESSION['user_id'] = $row_user['id'] . "<br/>";
                    echo $_SESSION['role'] = $row_user['role'];
                }
                $run_cart = mysqli_query($con,"select * from cart where ip_address='$ip'");
                $check_cart = mysqli_num_rows($run_cart);
                if($check_cart == 0){
                    $_SESSION['email'] = $email;
                    echo "<script>alert('Account has been created successfully!')</script>";
                    echo "<script>window.open('customer/my_account.php','_self')</script>";
                }else{
                    $_SESSION['email'] = $email;
                    echo "<script>alert('Account has been created successfully!')</script>";
                    echo "<script>window.open('index.php','_self')</script>";
                }
            }
        }
    }
    ?>
         
        </div>
<