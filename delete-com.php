<?php
include("connection.php");
if(isset($_POST["deletecom"])){
    $commId= $_POST["comm_id"];
   
 $sql= "DELETE FROM comments WHERE comm_id='$commId'";
 $result= $conn->query($sql);
 header("Location:view.php");
}

?>