<?php
require('conn.php')
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
    <center> <h1> Add Product  </h1> 
    <form method="post" enctype="multipart/form-data">  
        <div class="container"> 
            <input type="text" name='name' placeholder="Enter product name">
            <br>
            <br>

            <input type="file" id="f1"   size="60" name="f1"  >
            <br>
            <br>
            <input type='submit' name='add' value='Add Prodcut'>

        </div>   
    </form>  
    <?php
    if(isset($_POST['add']))
    {
        $name=$_POST['name'];
        echo $name;
     $photo=$_FILES['f1']['name'];
     echo $photo;
     move_uploaded_file($_FILES["f1"]["tmp_name"],"myfolder/".$_FILES["f1"]["name"]);
     $qry="insert into tbl_product(p_name,p_image) values('$name','$photo')";
     mysqli_query($con,$qry);
    }
    ?>
</center>      
</body>     

</html>  