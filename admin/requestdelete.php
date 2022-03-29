<?php
session_start();
if(!isset($_SESSION["userid"])){
 header("Location: login.php");
}else{
include('../includes/connection.php');
?>


<?php

$id = $_GET['detail_id']; // get id

$del = mysqli_query($db,"delete from tbltransacdetail where detail_id = '$id'"); // delete 

if($del)
{
    mysqli_close($db);
    header("location:request.php");
    exit;	
}
else
{
    echo "Error deleting record"; 
}

}
?>
