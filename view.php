<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="alert.css">
    <title>Document</title>
</head>
<body>
<!-- <header>   
        
        <div id="logo" >
                    <img src="logo.jpeg" alt="">
                </div>
    <nav class="navbar navbar-expand-sm justify-content-center">
               <div class="nav_bar">
                <ul  class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Help</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Log Out</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Sign In</a></li>
                </ul>
    </div>
    </nav>  
    <div class="container-fluid ">    
    <div class="home-text">
              <h1>Welcome to Balert</h1>
    </div>
              <h3>Where we help to keep you safe..</h3>
    </div>
    </header> -->

      <nav>
          <a href="Index.html"> <img src="logo.jpg"></a>
          <div class="nav-links" id="navLinks">
            <i class="fa fa-times" onclick="hideMenu()"></i>
              <ul>
                  <li><a href="Index.html">HOME</a></li>
                  <li><a href="AboutUs.html">ABOUT</a></li>
                  <li><a href="Alert.html">ALERT</a></li>
                  <li><a href="Help.html">HELP</a></li>
                  <li><a href="login.php">SIGN IN</a></li>
              </ul>
          </div>
          <i class="fa fa-bars" onclick="showMenu()"></i>
      </nav>

    <div class="text-box">
        <h1 class="animate__animated animate__fadeInUp">Help</h1>
    </div>




<?php
include("connection.php");
$sql= "SELECT * FROM posts ";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
    echo"
    <div class='container-fluid' >
    <div class='Fullpost'>
    <div class='post'>
    <p class='paragraphStyle'>".$row['content']."<p><br>
    </div>
    </div>
    </div>
    ";
    include("insert-com.php");
?>
</body>
</html>
