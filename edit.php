<?php
include("conn.php");
$uc=$_GET['id'];
$qry="select * from tbl_product where id='$uc'";
	$res=mysqli_query($con,$qry);
	$row=mysqli_fetch_array($res);
?>

<!DOCTYPE html>   
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title> Admin Home </title>  
<style>   
Body {  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: pink;  
}  
  
</style>   
</head>    
<body>    
    <center> <h1> Edit Product  </h1> 
    <form method="post" enctype="multipart/form-data">  
        <div class="container"> 
            <input type="text" name='name' value=<?php echo $row[1]?>>
            <br>
            <br>
            <input type='submit' name='add' value='Update Prodcut'>

        </div>   
    </form>  
    <?php
    if(isset($_POST['add']))
    {
        $name=$_POST['name'];
     $qry="update tbl_product set p_name='$name' where id='$uc'";
     $res=mysqli_query($con,$qry);
     if($res)
     {
        header('location:viewproduct.php');
     }

    }
    ?>
</center>      
</body>     

</html>  