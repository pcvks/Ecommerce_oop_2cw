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
<h2>View Products</h2>
<div class="border_bottom">
    <form action="" metho="post" enctype="multipart/form-data" >
    <div class="search_bar">
         
    </div>
        <table width="100%">
            <thead>
                <tr>
                    <th><input type="checkbox" id="CheckAll" />Check</th>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Quality</th>
                    
                    <th>Edit</th>
                    <th>Date</th>
                    
                
                    
                </tr>
            </thead>
            <?php $all_products = mysqli_query($con,"select * from cart order by product_id DESC"); 
            $i = 1;
            while($row=mysqli_fetch_array($all_products)){

            
            ?>
            <tbody>
                <tr>
                    <td><input type="checkbox" name="deleteAll[]" value=""/></td>
                    <td><?php echo $i ;?></td>
                    <td><?php echo $row['product_title'] ?></td>
                    <td><?php echo $row['quality'] ?></td>
                    
                    
                     <td><a style="background:green; width:35px; border-radius:5px; height:25px; color:white; text-decoration:none;" href="index.php?action=edit_pro&product_id =<?php echo $row['product_id'];?>">Edit</a></td>
                    <td><a style="background:red; width:35px; border-radius:5px; height:25px; color:white; text-decoration:none;" href="index.php?action=view_pro&delete_product =<?php echo $row['product_id'];?>">Delete</a></td>
                   
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