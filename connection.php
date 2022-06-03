<?php
$hostName="localhost";
$userName="root";
$password="";
$database="b_alert";

$conn= new mysqli($hostName,$userName,$password,$database);

if($conn == !false){
    //echo"connected successful";
}else{
    echo"connection failed";
}
?>