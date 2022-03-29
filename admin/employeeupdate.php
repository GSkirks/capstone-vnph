<?php
session_start();
if(!isset($_SESSION["userid"])){
 header("Location: login.php");
}else{
include('../includes/connection.php');
include 'theme/header.php';
include 'theme/sidebar.php';

$query = 'SELECT * FROM `tblemployee` WHERE `EMP_ID` = '.$_GET['id'].' ';
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
               $id = $row['emp_id'];
               $fname = $row['fname'];
               $lname = $row['lname'];
               $number = $row['contact'];
               $email = $row['email'];
               $address = $row['address'];
               $gender = $row['gender'];
               $age = $row['age'];
               $position = $row['position'];
               $hire = $row['hire_date'];
              } 
?>  

<div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header"><h2 align="center"><b>Employee Details</b></h2></div>
        <div class="card-body">


        <ul style="font-size: 25px"><b>First Name: </b> 
        <span style="color:green;"><?php echo $fname; ?></span>
        </ul>
        <ul style="font-size: 25px"><b>Surname: </b> 
        <span style="color:green;"><?php echo $lname; ?></span>
        </ul>
        <ul style="font-size: 25px"><b>Phone Number: </b> 
        <span style="color:green;"><?php echo $number; ?></span>
        </ul>
        <ul style="font-size: 25px"><b>Age: </b> 
        <span style="color:green;"><?php echo $age; ?></span>
        </ul>
        <ul style="font-size: 25px"><b>Gender: </b> 
        <span style="color:green;"><?php echo $gender; ?></span>
        </ul>
        <ul style="font-size: 25px"><b>Email Address: </b> 
        <span style="color:green;"><?php echo $email; ?></span>
        </ul>
        <ul style="font-size: 25px"><b>Position: </b> 
        <span style="color:green;"><?php echo $position; ?></span>
        </ul>        
        <ul style="font-size: 25px"><b>Hired Date: </b> 
        <span style="color:green;"><?php echo $hire; ?></span>
        </ul>     
                    </div>
                </div>
                </div>
<?php include 'theme/footer.php'; ?>    
       <?php include 'theme/footer.php'; }?>