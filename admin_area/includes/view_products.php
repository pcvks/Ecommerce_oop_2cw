<?php 
if(isset($_POST['delete_pro'])){
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
<h2>View Products</h2>
<div class="border_bottom">
    <form action="" metho="post" enctype="multipart/form-data" >
    <div class="search_bar">
         
    </div>
        <table class="table" >
            <thead>
                <tr>
                    <th><input type="checkbox" id="CheckAll" />Check</th>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Views</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    
                </tr>
            </thead>
            <?php $all_products = mysqli_query($con,"select * from products order by product_id DESC"); 
            $i = 1;
            while($row=mysqli_fetch_array($all_products)){

            
            ?>
            <tbody>
                <tr>
                    <td><input type="checkbox" name="deleteAll[]" value=""/></td>
                    <td><?php echo $i ;?></td>
                    <td><?php echo $row['product_title'] ?></td>
                    <td><?php echo $row['product_price'] ?></td>
                    <td><img src="product_images/<?php echo $row['product_image'] ?>" alt="" width="70" height="50" /></td>
                    <td><?php echo $row['views'] ?></td>
                    <td><?php echo $row['date'] ?></td>
                    <td>
                        <?php 
                        if($row['visible'] == 1){
                            echo "Approved";
                        }else{
                            echo "Pending";
                        }
                        ?>
                    </td>
                    
                    <td><a style="background:green; width:35px; border-radius:5px; height:25px; color:white; text-decoration:none;" href="index.php?action=edit_pro&product_id =<?php echo $row['product_id'];?>">Edit</a></td>
                    <td><a name ="delete_product" style="background:red; width:35px; border-radius:5px; height:25px; color:white; text-decoration:none;" href="index.php?=delete_pro&product_id=<?php echo $row['product_id'];?>">Delete</a></td>
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
// Delete Product 

?>
<?php include('../includes/db.php');?>