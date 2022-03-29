 <?php include('includes/connection.php');?>  

<!--header area-->
<?php include 'includes/header.php'; ?>

<!--sidebar area-->
<?php include 'includes/sidebar.php'; ?>

 <?php 
 if (isset($_GET["action"])) {
  if ($_GET["action"]=='delete') {
    foreach ($_SESSION["cart"] as $keys => $values) {
      if ($values['ids']==$_GET["id"]) {
        unset($_SESSION["cart"][$keys]);
        echo '<script>alert("Appointment removed!")</script>';
        echo '<script>window.location="cart.php"</script>';
      }
    }
  }
} 
if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["cart"] as &$value){
    if($value['ids'] === $_POST["code"]){
        $value['quantity'] = $_POST["quantity"];
        break; // Stop the loop after found the product
    }
}

    
}
?>

 <div class="card mb-3">
            <div class="card-header">
            <center><div class="card-header"><h3>Your Appointment/s</h3></div></center>
            <div class="card-body">
              <div class="table-responsive">
                            <table class="table " width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                      <th>Image</th>
                                        <th>Registered Nutritionist-Dietician</th>
                                        <th width="300">Time/Consultation Fee</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                if (!empty($_SESSION["cart"])) {
                                  $_SESSION['mm']=0;
                                  foreach($_SESSION["cart"] as $keys => $values){
                                    ?>
                                    <tr>
                                      <td>
                                      <img width="90" src="admin/images/defaults.png"></td>
                                      <td><?php echo $values["name"]; ?></td>
                                      <td>₱<?php echo $values["price"]; ?></td>
                                      <td><a class="btn btn-danger" type="button" onclick="return confirm('Are you sure?')" href="cart.php?action=delete&id=<?php echo $values["ids"]; ?>">Remove</a></td>
                                    </tr>
                                    <?php 
                                    $name= $values["name"];
                                    

                                    $_SESSION['mm'] = $_SESSION['mm'] + ($values["quantity"] * $values["price"]);

                                  }
                                  ?>
                                
                             </tbody>
                             <tr>
                               <td colspan="4" align="right">Total:</td>
                                  <td align="left">₱<?php echo $_SESSION['mm']; ?></td>
                                  <td><a type="button" class="btn btn-success" href="addprod.php" >Proceed</a></td>
                             </tr>
                               <?php
                                }
                                 ?>
                              </table>
                        </div>
                    
            </div>
           
          </div>

          
        </div>


<!-- Live chat-->
<!-- <?php include 'livechat.php'; ?> -->
<!-- Live chat-->  
<?php include 'includes/footer.php'; ?>