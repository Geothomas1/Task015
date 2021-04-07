<?php
require('conn.php')
?>
<!DOCTYPE html>   
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title> Login Page </title>  
<style>   
Body {  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: pink;  
}  
  
</style>   
</head>    
<body>    
    <center> <h1> Admin Login Form </h1> 
    <form method="post">  
        <div class="container">   
            <label>Username : </label>   
            <input type="text" placeholder="Enter Username" name="username" required> 
            <br> <br>
            <label>Password : </label>   
            <input type="password" placeholder="Enter Password" name="password" required> 
            <br><br> 
            <button type="submit" name="login">Login</button>   
        </div>   
    </form>  
    <?php
if(isset($_POST['login']))
{
    $user=$_POST['username'];
    $pass=$_POST['password'];
    $result="select * from tbl_login where username='$user' and password='$pass'";
    $res=mysqli_query($con,$result);
     $num=mysqli_num_rows($res);
     $num1=mysqli_fetch_array($res);
 if($num1[1]=='admin' && $num1[2]=='admin')
 {
    header('location:adminhome.php');
 }
 else
{
echo "<script type='text/javascript'> alert('Wrong username or password');</script>";
}
}
?>
    </center>      
</body>     

</html>  