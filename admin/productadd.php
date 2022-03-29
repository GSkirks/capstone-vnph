<!--may problema dito connected sa productcontroller.php-->
<?php
session_start();
if(!isset($_SESSION["userid"])){
 header("Location: login.php");
}else{
include('../includes/connection.php');
include 'theme/header.php';
include 'theme/sidebar.php';

$query = "SELECT * FROM tblowner";
$result = mysqli_query($db,$query);
$query3 = "SELECT * FROM tblcategory";
$result3 = mysqli_query($db,$query3);

$query2 = 'SELECT current_date FROM tblusers';
$result2 = mysqli_query($db, $query2) or die(mysqli_error($db));
while($row2 = mysqli_fetch_array($result2)){   
$date = $row2['current_date'];
}
$sql = 'SELECT `start` + `end` as autonum FROM tblautonumber where `desc` = "PROD"';
$res = mysqli_query($db, $sql) or die(mysqli_error($db));
while($r = mysqli_fetch_array($res)){   
$autonum = $r['autonum'];
}
?>
<style type="text/css">
  .error-msg{
  text-align: center;
  font-weight: bold;
}
</style>
            <!-- Page Heading -->
            <div class="container">
      <div class="card card-register mx-auto mt-3">
      <div class="card-header"><center><h3>Add Dietician Appointment Schedule</h3></center></div>
      <div class="card-body">
  <form role="form" method="post" action="productcontroller.php?action=add">
    <?php
          if (isset($_GET['required'])) {
            if ($_GET["required"]=="product") {
              echo '<p class="error-msg text-danger">Boarding House name is required</p>';
            }elseif ($_GET["required"]=="quantity") {
               echo '<p class="error-msg text-danger">Invalid quantity</p>';
            }elseif ($_GET["required"]=="price") {
               echo '<p class="error-msg text-danger">Invalid price</p>';
            }elseif ($_GET["required"]=="markup") {
               echo '<p class="error-msg text-danger">Invalid Markup</p>';
            }elseif ($_GET["required"]=="category") {
               echo '<p class="error-msg text-danger">Category is required</p>';
            }elseif ($_GET["required"]=="supplier") {
               echo '<p class="error-msg text-danger">Owner is required</p>';
            }elseif ($_GET["required"]=="producttaken") {
               echo '<p class="error-msg text-danger">Boarding House name is already taken.</p>';
            }
            }      ?>
                      <div class="panel-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                              <input class="form-control" readonly type="number" value="<?php echo $autonum; ?>" name="code">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Registered Nutritionist-Dietician" name="product" autofocus="autofocus">
                            </div>
                            <div class="form-group">
                              <input type="text" class="form-control" id="description" name="description" placeholder="Description"/>
                            </div>  
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Full Address" name="address" >
                            </div>
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Full Name" name="name" >
                            </div>
                            <div class="form-group">
                              <input type="number" class="form-control" placeholder="Contact number" name="contact">
                            </div>
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Email Address" name="email">
                            </div>
                            <div class="form-group">
                              <input type="text"class="form-control" placeholder="Available Time ex. 8AM to 8PM" name="quantity">
                            </div>
                            <div class="form-group">
                              <input class="form-control" type="number" id="price" placeholder="Consultation Fee" name="price">
                            </div>
                            <div class="form-group">
                              <input class="form-control" type="hidden" name="user" value="<?php echo $_SESSION['userid']; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" readonly type="text" placeholder="Date In" name="date" value="<?php echo $date ?>">
                            </div>
                            <div class="form-group">
                              <select class="form-control" name="category">
                                <option selected disabled>Category</option>
                                <?php while($row3 = mysqli_fetch_array($result3)):; ?>
                              <option value="<?php echo $row3[0]; ?>"><?php echo $row3[1]; ?></option>
                              <?php endwhile; ?>
                              </select>
                            </div>
                            <div class="form-group">
                              <select class="form-control" name="supplier">
                                <option selected disabled>Owner</option>
                                <?php while($row = mysqli_fetch_array($result)):; ?>
                              <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
                              <?php endwhile; ?>
                              </select>  
                              <!-- <label for="prod_pic1">Picture 1 (Avatar):</label>
                        <div class="input-group">
                            <input type="file" class="form-control" id="prod_pic1" name="prod_pic1">  
                        </div> -->
                        <!-- <label for="prod_pic2">Picture 2 (Boarding House View):</label>
                        <div class="input-group">
                            <input type="file" class="form-control" id="prod_pic2" name="prod_pic2">  
                        </div>
                        <label for="prod_pic3">Picture 3 (Boarding House View):</label>
                        <div class="input-group">
                            <input type="file" class="form-control" id="prod_pic3" name="prod_pic3">  
                        </div> -->
                           <br> <button type="submit" id=submit name="submit" class="btn btn-info">Save</button>
                            <button type="reset" class="btn btn-danger">Clear</button>
          </div>


                      </form>  
                       </div>
                </div>
              </div>
<!--footer area-->
<?php include 'theme/footer.php'; }?>