<?php 

session_start();

session_destroy();

echo "<script>window.open('index.php?action=login','_self')</script>";
?>