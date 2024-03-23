<?php 
if(isset($_POST['delete_product'])){
    $delete_product = mysqli_query($con,"DELETE FROM `products` WHERE product_id = '$_POST[delete_product]' ");
    if($delete_product){
        echo "<script>alert('Product has been delete')</script>";
        echo "<script>window.open('index.php?action=view_pro','_self')</script>";
    };
};
if(isset($_POST['deleteAll'])){
    $remove = $_POST['deleteAll'];
    foreach($remove as $key){
        $run_remove = mysqli_query($con,"delete from products where product_id='$key'");
        if($run_remove){
             echo "<script>alert('Item selected  has been removed successfully!')</script>";
        echo "<script>window.open('index.php?action=view_pro','_self')</script>";
        }else{
            echo "<script>alert('Mysqli Failed: mysqli_error($con)!')</script>";
        }
       
    }
}
?>
<div class="view_product_box">
<h2>View Categories</h2>
<div class="border_bottom">
    <form action="" metho="post" enctype="multipart/form-data" >
    <div class="search_bar">
         
    </div>
        <table width="100%">
            <thead>
                <tr>
                    <th><input type="checkbox" id="CheckAll" />Check</th>
                    <th>ID</th>
                    <th>Category Title</th>
                    <th>Status</th>
                    
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <?php $all_categories = mysqli_query($con,"select * from categories order by cat_id DESC"); 
            $i = 1;
            while($row=mysqli_fetch_array($all_categories)){

            
            ?>
            <tbody>
                <tr>
                    <td><input type="checkbox" name="deleteAll[]" value="<?php echo $row['cat_id'];?>"/></td>
                    <td><?php echo $i ;?></td>
                    <td><?php echo $row['cat_title'] ?></td>
                   
                    
                    <td>
                        <?php 
                        if($row['visible'] == 1){
                            echo "Approved";
                        }else{
                            echo "Pending";
                        }
                        ?>
                    </td>
                    <td><a style="background:green; width:35px; border-radius:5px; height:25px; color:white; text-decoration:none;" href="index.php?action=edit_cat&cat_id =<?php echo $row['cat_id'];?>">Edit</a></td>
                    <td><a style="background:red; width:35px; border-radius:5px; height:25px; color:white; text-decoration:none;" href="index.php?action=view_cat&delete_cat =<?php echo $row['cat_id'];?>">Delete</a></td>
                    
                </tr>
            </tbody>
            <?php $i++ ;}?>
            <tr>
                <td>
                    <input type="submit" class="checkall" name="delete_all" value="Remove">
                </td>
            </tr>
        </table>
    </form>
</div>

</div>
<?php 
if(isset($_POST['delete_cat'])){
    $delete_cat = mysqli_query($con,"DELETE FROM `categories` WHERE cat_id = '$_POST[delete_cat]' ");
    if($delete_cat){
        echo "<script>alert('Category has been delete')</script>";
        echo "<script>window.open('index.php?action=view_cat','_self')</script>";
    };
};
if(isset($_POST['deleteAll'])){
    $remove = $_POST['deleteAll'];
    foreach($remove as $key){
        $run_remove = mysqli_query($con,"delete from categories where cat_id='$key'");
        if($run_remove){
             echo "<script>alert('Item selected  has been removed successfully!')</script>";
        echo "<script>window.open('index.php?action=view_pro','_self')</script>";
        }else{
            echo "<script>alert('Mysqli Failed: mysqli_error($con)!')</script>";
        }
       
    }
}
?>

<?php include('../includes/db.php');?>