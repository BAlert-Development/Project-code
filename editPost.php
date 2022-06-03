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
    
    $postId=$_POST["post_id"];
    $content=$_POST["content"];
     echo "
    
   
     <form method='POST' action='editPost.php' id='edit' class='form-inline' >
     <div class='form-group'>
     <input type='hidden' name='post_id' value='".$postId."'>
     <textarea name='content'rows='4' cols='80' class='form-control'>".$content."</textarea>
     </div>
     <button type='submit' name='Editpost'>Edit</button>
     
     </form>

    ";

     if(isset($_POST["Editpost"])){
        $pId=$_POST["post_id"];
        $pMessage=$_POST["content"];
        $stmt=mysqli_stmt_init($conn);
       mysqli_stmt_prepare($stmt,"UPDATE posts SET content=? WHERE post_id=?");
       $stmt->bind_param("si", $pMessage, $pId);
       $stmt->execute();
        header("Location:insert-post.php");
        
        }
     
        
    ?>
</body>
</html>