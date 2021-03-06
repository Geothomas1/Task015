<?php
require('conn.php')
?>
<!DOCTYPE html>
<html>
<head>
<title>Live As</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=3">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

  <link rel="stylesheet" >
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
header.fixed {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  padding: 70px;
  background: white;
  text-align: center;
}
html {
  --top-spacing: 100px;
  // scroll-padding-top: var(--top-spacing);
}

body {
   
  scroll-padding-top: var(--top-spacing);
  
  margin: var(--top-spacing) auto;
  
  max-width: 1400px;
  padding: 0 70px;
  font: 18px/1.4 system-ui;
}



.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.centered:hover {
  background-color: green;
}
.btn {
        cursor: pointer;
        border: 1px solid #3498db;
        background-color: transparent;
        height: 50px;
        width: 200px;
        color: #3498db;
        font-size: 1.5em;
        box-shadow: 0 6px 6px rgba(0, 0, 0, 0.6);
    }
.nav-item:hover {
                 background-color: blue;
}
</style>
</head>
<body>
<nav class="navbar navbar-toggleable-sm fixed-top bg-dark navbar-light">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="1.html">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#section2">ABOUT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#section3">CONTACT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">LOGIN</a>
      </li>

 
     
    </ul>
  </div>
</nav>
<div class="container">
  <h2></h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" ></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="6.jpg" alt="" style="width:100%;">
      </div>

      <div class="item">
        <img src="7.jpg" alt="" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="8.jpg" alt="" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div><br><br>




<div class="container-fluid section" style="height: 50%; background-color:white" id="section2">
  <div class="container text-center">
    <div class="row align-items-center">
      <div class="col">
        <h1 class="text-light">ABOUT US</h1><br><br>
<div class="container">
  <img src="9.png" alt="Snow" style="width:100%;">
    <div class="centered">LiveAs Technologies is an organization registered in 2019 that develops affordable utility software & web applications with the aim of creating self sustainable business models for economically weaker regions for its holistic development. We aim to help aspiring bootstrap entrepreneurs to set up their business easily at a very reasonable cost or at free of cost.Our parent organization LiveAs, started operation in 2016 to take care of the cultural needs of society. We have a good online presence in India and America.</div>
</div>
</div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid section" style="height: 50%; background-color:white" id="section2">
  <div class="container text-center">
    <div class="row align-items-center">
      <div class="col">
        <h1 class="text-light">OUR PRODUCTS</h1><br><br>
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
                  <br>
                  <img src="myfolder/<?php echo $photo;?>" style='width:75px;height:75px;'>

                  <br><br>
                <?php
     }
                  ?>
</div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid section" style="height: 50%;" id="section3">
  <div class="container text-center">
    <div class="row align-items-center">
      <div class="col">
        <h1 class="text-light">CONTACT US</h1><br><br>
<form>
<p><strong></strong></p>
  <label for="fname">Name:</label>
  <input type="text" placeholder="Enter First name" id="fname" name="fname"><br><br>
   <label for="phone">Mobile:</label>
  <input type="tel" placeholder="Enter Mobile number" id="num" name="num"><br><br>
  <label for="email">Email:</label>
  <input type="email" placeholder="Enter email" id="email" name="email"><br><br>
  <label for="Message">Message:</label><br><br>
  <textarea rows="4" cols="50" placeholder="Enter your message" id="msg" name="msg">
  </textarea><br><br>
   <button class="btn">Submit</button><br>
</form><br>
<center><div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=liveas mayyanad&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.embedmymap.com/">Embed My Map</a></div><style>.mapouter{position:relative;text-align:right;width:600px;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:600px;height:400px;}.gmap_iframe {width:600px!important;height:400px!important;}</style></div></center>

    </div>
  </div>
</div>

   


 
</style>
</header>
</body>
</html>
