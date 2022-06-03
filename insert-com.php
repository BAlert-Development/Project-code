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
<?php
include("connection.php");
include("Viewpost.html");
if(isset($_POST["submitComment"])){
$comment=mysqli_real_escape_string($conn ,$_POST["comment"]);
$sql="INSERT INTO comments(comment) Values (?)";

$stmt=mysqli_stmt_init($conn);

if(!mysqli_stmt_prepare($stmt,$sql)){
  die(mysqli_error($conn));
}else{
mysqli_stmt_bind_param($stmt,"s",$comment);
mysqli_stmt_execute($stmt);

}
}
$sql= "SELECT * FROM comments ";
  $result=$conn->query($sql);
  while($row=$result->fetch_assoc()){

      echo " 
      <div class='container-fluid' >
      <div class='Fullpost'>
      <div class='post'>
      <p class='paragraphStyle'>".$row['comment']."<p>
      <form method='POST' action='delete-com.php' id='delete' class='form-inline'>
      <div class='form-group'>
      <input type='hidden' name='comm_id' value='".$row['comm_id']."'><br>
      </div>
      <button type='submit' name='deletecom' >Delete</button>
      </form>
      <br>
      <form method='POST' action='Editcom.php' id='edit' class='form-inline'>
      <div class='form-group'>
      <input type='hidden' name='comm_id' value='".$row['comm_id']."'>
      <input type='hidden' name='comment' value='".$row['comment']."'><br>
      </div>
      <button type='submit' name='sendedit' >Edit</button>
      
      </form>
      </div>
      </div>
      </div>
    ";
     
  }

mysqli_close($conn);

?>
</body>
</html>
