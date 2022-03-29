<?php
session_start();
if(!isset($_SESSION["userid"])){
 header("Location: login.php");
}else{
include('../includes/connection.php');
?>


<?php

$id = $_GET['user_id']; // get id

$del = mysqli_query($db,"delete from tblusers where user_id = '$id'"); // delete 

if($del)
{
    mysqli_close($db);
    header("location:user.php");
    exit;	
}
else
{
    echo "Error deleting record"; 
}

}
?>
