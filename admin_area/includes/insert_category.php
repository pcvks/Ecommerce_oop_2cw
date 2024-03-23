
<div class="form"></div>
    <form action=""  method="post" enctype="multipart/form-data">
    <table align="center" width="100%" > 
        <tr>
            <td colspan="7"><h1 >Add Category</h1>
        <div class="border_bottom">

        </div></td>
        </tr>
        <tr>
            <td ><b  >Add New Category:</b></td>
            <td><input  type="text" name="product_cat" size="60" required></td>
        </tr>
        
        <tr >
            <td colspan="7"><input class="submitinput" type="submit" name="insert_cat" value="Add Category" /></td>
        </tr>
    </table>
    </form>
</div>
<?php
if(isset($_POST['insert_cat'])){
   $product_cat = mysqli_real_escape_string($con,$_POST['product_cat']);
   $insert_cat = mysqli_query($con,"insert into categories (cat_title) values ('$product_cat') ");
    if($insert_cat){
        echo "<script>alert('Product category Has Been Inserted Successfully')</script>";
        echo "<script>window.open(window.location.href,'_seft')</script>";
    }
}
?>