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
    <center> <h1> View Product  </h1> 
          
        
                     <?php
$result=mysqli_query($con,"select * from tbl_product");
$l=mysqli_num_rows($result);
while($row=mysqli_fetch_array($result))
{
    $id=$row[0];
$name=$row[1];
$photo=$row[2];
?>
                
                
                  <?php echo $name;?>
                  <img src="myfolder/<?php echo $photo;?>" style='width:75px;height:75px;'>
                  <?php echo "<a href='delete.php?id=$id' style='color:red'>Delete Product</a></td>"?>
                  <br><br>
                <?php
     }
                  ?>
</center>      
</body>     

</html>  