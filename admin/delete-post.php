<?php
session_start();
if(!isset($_SESSION["userid"])){
 header("Location: login.php");
}else{
include('../includes/connection.php');
?>


<?php

$id = $_GET['id']; // get id

$del = mysqli_query($db,"delete from posts where id = '$id'"); // delete 

if($del)
{
    mysqli_close($db);
    header("location:posts.php");
    exit;	
}
else
{
    echo "Error deleting record"; 
}

}
?>
