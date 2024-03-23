
<div class="form"></div>
    <form action=""  method="post" enctype="multipart/form-data">
    <table align="center" width="100%" > 
        <tr>
            <td colspan="7"><h1 >Add Brand</h1>
        <div class="border_bottom">

        </div></td>
        </tr>
        <tr>
            <td ><b  >Add New Brand:</b></td>
            <td><input  type="text" name="product_brand" size="60" required></td>
        </tr>
        
        <tr >
            <td colspan="7"><input class="submitinput" type="submit" name="insert_brand" value="Add Brand" /></td>
        </tr>
    </table>
    </form>
</div>
<?php
if(isset($_POST['insert_brand'])){
   $product_brand = mysqli_real_escape_string($con,$_POST['product_brand']);
   $insert_brand = mysqli_query($con,"insert into brands (brand_title) values ('$product_brand') ");
    if($insert_brand){
        echo "<script>alert('Product Brand Has Been Inserted Successfully')</script>";
        echo "<script>window.open(window.location.href,'_seft')</script>";
    }
}
?>