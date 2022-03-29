<?php include('includes/connection.php');?>  

<!--header area-->
<?php include 'includes/header.php'; ?>

<!--sidebar area-->
<?php include 'includes/sidebar.php'; ?>

<?php if (!isset($_SESSION['cid'])) {
  header("location: login.php");
}else{ ?>

<div class="row">
    <div class="col-lg-8">
 <div class="card mb-3">
            <div class="card-header" style="background-color: white">
              <h2>Details</h2>
            <div class="card-body" >
              <div class="table-responsive">
                            <table class="table " id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Registered Nutritionist-Dietician</th>
                                        <th>Added Date</th>
                                        <th >Time/Consultation Fee</th> 
                                    </tr>
                                </thead>
                                <tbody style="font-size: 20px">
                                  <?php            
                                   $result = mysqli_query($db, 'SELECT current_date FROM tblusers') or die(mysqli_error($db));
                                  while($row = mysqli_fetch_array($result))
                                 {   
                                  $date = $row['current_date'];
                                  } ?>
                                <?php 
                                if (!empty($_SESSION["cart"])) {
                                  $_SESSION['mm']=0;
                                  foreach($_SESSION["cart"] as $keys => $values){
                                    ?>
                                    <tr>
                                      <td><?php echo $values["name"]; ?></td>
                                       <td><?php echo $date; ?></td>
                                      <td>&#8369 <?php echo $values["price"]; ?></td>
                                    </tr>
                                    <?php 
                                    $name= $values["name"];
                                    

                                    $_SESSION['mm'] = $_SESSION['mm'] + ($values["quantity"] * $values["price"]);

                                  }
                                  ?>
                                  

                                  
                                
                             </tbody>
                               <?php
                                }
                                 ?>
                              </table>
                        </div>
            </div>
           
          </div>

          
        </div>
    </div>
     <div class="col-lg-4">
 <div class="card mb-3">
<div class="container">
     

        <div class="card-body">
  <form role="form" method="post" action="transactionsave.php?action=adds">

                            <h5><i class="fas fa-user-alt"></i> <?php echo $_SESSION['C_FNAME'] ?> <?php echo $_SESSION['C_LNAME'] ?></h5><br>
                            <h5><i class="fas fa-map-marker-alt"></i> <?php echo $_SESSION['address'] ?></h5><br>
                            <h5><i class="fas fa-phone"></i> 0<?php echo $_SESSION['contact'] ?></h5><br>
                            <h5><i class="fas fa-envelope"></i> <?php echo $_SESSION['email'] ?></h5><br>
                            <h5><i class="fas fa-calendar"></i><b style="color:green"> Please input the date you want to consult:<input type="date" name="del" style="width: 206px" required></h5></b>
                            <h6 align="justify"><i class="fas fa-info"></i> Before submitting your request, kindly attach the <b style="color:green">E-receipt (Gcash)</b> of your payment trough our live chat and wait for verification.</h6>
                            <tr> 
                 <td>Payment Method</td>
                 <td>
                  <!-- <input type="text" id="date"> -->
                <!-- <input type="button" id="btn"  value="Show"/> -->
                 <select onchange="totalprice()" class="form-control" id="paymethod" name="paymethod">
                        <!-- <option value="Cash on Delivery">Cash</option> -->
                        <option value="Cash on Pickup">Via Gcash</option>
                      </select>
                 <input type="hidden"  placeholder="HH-MM-AM/PM"  id="ftime" name="ftime" value="<?php echo date('y-m-d h:i:s') ?>"  class="form-control"/>

                            <h2>Summary</h2><br>
                            <div class="row">
                            <div class="col-lg-7" >
                            <h5>Total</h5><br>
                            </div>                            
                            <div align="right" class="col-lg-4">
                            <h5>₱<?php echo $_SESSION['mm']; ?></h5><br>
                            </div>                            
                            </div>
                            <center><button type="submit" onclick="return confirm('Confirm submission?')" class="btn btn-lg btn-success">Submit</button></center>
                            <!-- <div class="form-group">
                              <input class="form-control" placeholder="Supplier Name" name="supplier" required autofocus="autofocus">
                            </div>
                            <div class="form-group">
                              <input class="form-control" type="number" placeholder="Contact" name="contact"required>
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Email" name="email"required>
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Address" name="address"required>
                            </div> 
                             
                            <button type="submit" class="btn btn-default">Save Record</button>
                            <button type="reset" class="btn btn-default">Clear Entry</button> -->


                      </form>  
                       </div>
                </div>
 </div>
</div>
    </div>


<?php include 'includes/footer.php'; }?>
