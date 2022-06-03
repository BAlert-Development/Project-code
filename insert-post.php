<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="alert.css">
  
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://kit.fontawesome.com/b7e40e141.js">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <title>Help | BAlert</title>
</head>
<body>
    <section class="sub-header">
        <nav>
            <a href="Index.html"> <img src="Images/logo.jpg"></a>
            <div class="nav-links" id="navLinks">
              <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="Index.html">HOME</a></li>
                    <li><a href="AboutUs.html">ABOUT</a></li>
                    <li><a href="insert-post.php">ALERT</a></li>
                    <li><a href="Help.html">HELP</a></li>
                    <li><a href="login.php">SIGN IN</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
  
        <div class="text-box">
            <h1 class="animate__animated animate__fadeInUp">Alert</h1>
        </div>
    </section>

    

  
 

<?php
include("connection.php");

if(isset($_POST["submitPost"])){
$content= mysqli_real_escape_string($conn, $_POST["content"]);

$sql="INSERT INTO posts(content) VALUES (?)";


$stmt=mysqli_stmt_init($conn);

if(!mysqli_stmt_prepare($stmt, $sql)){
  echo "SQL error!";
}else{
mysqli_stmt_bind_param($stmt, "s", $content);
mysqli_stmt_execute($stmt);


}
}
$sql= "SELECT * FROM posts ";
    $result=$conn->query($sql);
    while($row=$result->fetch_assoc()){

        echo "
        <div class='container-fluid' >
        <div class='Fullpost'>
        <div class='post'>
        <div class='imgDivStyle'><img src='notification icon.jpg' class='imageStyling'></div>
        <p class='paragraphStyle'>".$row['content']."<p>
        <br>
        <form method='POST' action='delete.php' id='delete' class='form-inline'>
        <div class='form-group'>
        <input type='hidden' name='post_id' value='".$row['post_id']."'>
        <br>
        <button type='submit' name='deletePost' >Delete</button>
        </div>
        </form>
        <br>
        <form method='POST' action='editPost.php' id='edit' class='form-inline'>
        <div class='form-group'>
<input type='hidden' name='post_id' value='".$row['post_id']."'>
<input type='hidden' name='content' value='".$row['content']."'>
<br>
<button type='submit' name='editpost' >Edit</button>
</div>
</form>
<br>
<form method='POST' action='view.php' id='view' class='form-inline'>
<div class='form-group'>
<input type='hidden' name='post_id' value='".$row['post_id']."'>
<input type='hidden' name='content' value='".$row['content']."'>
<br>
<button type='submit' name='editpost'>View</button>
</div>
</form>
</div>
</div>
</div>";
       
       
    }

mysqli_close($conn);

//include("AlertPage.html");

?>
 <form action="insert-post.php" method="POST" >  
      
      <div id="container"  class="form-group">
           
              <textarea placeholer="Add new.." id="newAlert" name ="content" rows="4" cols="80">
              </textarea><br> 
  
</form> 
      <div>   
          <button type="submit" id="upload"  name="submitPost" >Upload</button>
          <button type="button" id="cancel"  >Cancel</button>
      </div>
      </div>
  
  </form>
</body>
</html>







