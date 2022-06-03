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

$commId=$_POST["comm_id"];
$comment=$_POST["comment"];
echo "


<form id='edit' method='POST' action='Editcom.php' class='form-inline'>
<div class='form-group'>
<input type='hidden' name='comm_id' value='".$commId."'>
<textarea name='comment'rows='4' cols='80'  class='form-control'>".$comment."</textarea><br>
<button type='submit' name='editcom'>Edit</button>
</div>
</form>

";

if(isset($_POST["editcom"])){
    $commId= $_POST["comm_id"];
    $comment= $_POST["comment"];
    $stmt=mysqli_stmt_init($conn);
   mysqli_stmt_prepare($stmt ,"UPDATE comments SET comment=? WHERE comm_id=?");
   $stmt->bind_param("si", $comment, $commId);
   $stmt->execute();
   header("Location:view.php");
}

    
    
    
?>    

</body>
</html>