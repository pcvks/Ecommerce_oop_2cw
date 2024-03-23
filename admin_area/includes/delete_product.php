<?php
include ("../includes/db.php");
$product_id = $_POST['product_id'];
$sql  = "DELETE*FROM 'products' WHERE product_id = '$product_id'";
mysqli_qeury($con, $sql);
?>