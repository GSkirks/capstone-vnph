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
$query = 'SELECT C_ID,concat(C_FNAME," ",C_LNAME)as name,C_AGE,C_ADDRESS,C_PNUMBER,C_GENDER,C_EMAILADD,ZIPCODE FROM tblcustomer
              WHERE
              C_ID ='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
               
               $i = $row['name'];
               $b = $row['C_AGE'];
               $d = $row['C_ADDRESS'];
                $p = $row['C_PNUMBER'];
               $g = $row['C_GENDER'];
               $e = $row['C_EMAILADD'];
               $z = $row['ZIPCODE'];
             
             
              }
              
              $id = $_GET['id'];
         
?>

               <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header"><h2 align="center"><b>Client Details</b></h2></div>
        <div class="card-body">


        <ul style="font-size: 25px"><b>Customer Name: </b> 
        <span style="color:green;"><?php echo $i; ?></span>
        </ul>
        <ul style="font-size: 25px"><b>Age: </b> 
        <span style="color:green;"><?php echo $b; ?></span>
        </ul>
        <ul style="font-size: 25px"><b>Address: </b> 
        <span style="color:green;"><?php echo $d; ?></span>
        </ul>
        <ul style="font-size: 25px"><b>Phone Number: </b> 
        <span style="color:green;"><?php echo $p; ?></span>
        </ul>
        <ul style="font-size: 25px"><b>Gender: </b> 
        <span style="color:green;"><?php echo $g; ?></span>
        </ul>
        <ul style="font-size: 25px"><b>Email Address: </b> 
        <span style="color:green;"><?php echo $e; ?></span>
        </ul>
        <ul style="font-size: 25px"><b>Zip Code: </b> 
        <span style="color:green;"><?php echo $z; ?></span>
        </ul>        
                    </div>
                </div>
                </div>
<?php include 'theme/footer.php'; ?>     



