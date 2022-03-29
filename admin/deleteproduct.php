<?php
session_start();
if(!isset($_SESSION["userid"])){
 header("Location: login.php");
}else{
include('../includes/connection.php');
?>


<?php

$id = $_GET['product_id']; // get id

$del = mysqli_query($db,"delete from tblproducts where product_id = '$id'"); // delete 

if($del)
{
    mysqli_close($db);
    header("location:product.php");
    exit;	
}
else
{
    echo "Error deleting record"; 
}

}
?>
