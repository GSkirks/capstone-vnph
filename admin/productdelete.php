<?php

if (isset($_POST['deletedata'])) 
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "reservevision";

        $id = $_POST['id'];

        $connect = mysqli_connect($hostname, $username, $password, $databaseName);

        $query = "DELETE FROM 'tblproduct' WHERE 'id'=$id";
        $result = mysqli_query($connect, $query);
        if ($result) {

            header("Location: product.php?remove_success=true");
        } else {
            header("Location: product.php?remove_success=false");
        }

    } else {
        header("Location: product.php");
    }
?>