<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include("connection.php");
if(isset($_POST["deletePost"])){
    $postId= $_POST["post_id"];

    $sql="DELETE FROM posts WHERE post_id='$postId'";
    $result=$conn->query($sql);
    header("Location:insert-post.php");
    }
    
?>
</body>
</html>

