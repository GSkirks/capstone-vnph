<?php
session_start();
if(!isset($_SESSION["userid"])){
 header("Location: login.php");
}else{
include('../includes/connection.php');
include 'theme/header.php';
include 'theme/sidebar.php';
}?>
<?php 
$query = 'SELECT concat(fname," ",lname)as name,email,user_id,username,position,address,contact FROM tblusers
              WHERE
              user_id ='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
               $zz = $row['user_id'];
               $i = $row['name'];
               $b = $row['email'];
               $d = $row['username'];
               $c = $row['position'];
               $contact = $row['contact'];
               $address = $row['address'];
      
             
              }
              
              $id = $_GET['id'];
         
?>

<div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header"><h2 align="center"><b>Admin Details</b></h2></div>
        <div class="card-body">

        <ul style="font-size: 25px"><b>Admin Name: </b> 
        <span style="color:green;"><?php echo $i; ?></span>
        </ul>
        <ul style="font-size: 25px"><b>Email: </b> 
        <span style="color:green;"><?php echo $b; ?></span>
        </ul>
        <ul style="font-size: 25px"><b>Address: </b> 
        <span style="color:green;"><?php echo $address; ?></span>
        </ul>
        <ul style="font-size: 25px"><b>Contact number: </b> 
        <span style="color:green;"><?php echo $contact; ?></span>
        </ul>
        <ul style="font-size: 25px"><b>Username: </b> 
        <span style="color:green;"><?php echo $d; ?></span>
        </ul>
        <ul style="font-size: 25px"><b>Position: </b> 
        <span style="color:green;"><?php echo $c; ?></span>
        </ul>
    
                    </div>
                </div>
                </div>
<?php include 'theme/footer.php'; ?>



