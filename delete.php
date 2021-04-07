<?php
include("conn.php");
$uc=$_GET['id'];

mysqli_query($con,"delete from tbl_product where id='$uc'");    
   header("location:viewproduct.php");

?>