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
    <center> <h1> Admin Home page  </h1> 
    <form method="post">  
        <div class="container"> 
            <a href='addproduct.php'>Add Product</a>
            <br><br>
            <a href='viewproduct.php'>View Product</a>  
            
        </div>   
    </form>  
</center>      
</body>     

</html>  