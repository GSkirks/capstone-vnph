

<?php

if (isset($_POST["add_to_cart"])) 
{
  $av = $_POST['av'];
$qq = $_POST["quant"];
if ($av > 0) {

  if ($av > $qq || $av == $qq)  {

  if (isset($_SESSION["cart"])) 
{
  $itemarrayid = array_column($_SESSION["cart"], "ids");
  if (!in_array($_GET["id"], $itemarrayid)) {
   
    $count=count($_SESSION["cart"]);
    $itemarray = array(
     'ids' => $_GET["id"],
     'name' => $_POST["hiddenname"],
     'price' => $_POST["hiddenprice"],
     'quantity' => $_POST["quant"]);
     $_SESSION["cart"][$count] = $itemarray;
    echo "<script>alert('Appointment added!')</script>";
    echo "<script>window.location = 'cart.php'</script>";
  }else{
    echo "<script>alert('Already Added')</script>";
    echo "<script>window.location = 'cart.php'</script>";
  }
}
else
{
  $itemarray = array(
  'ids' => $_GET["id"], 
  'name' => $_POST["hiddenname"],
  'price' => $_POST["hiddenprice"],
  'quantity' => $_POST["quant"]);
  $_SESSION['cart'][0] = $itemarray;
}
}else{
        echo '<script>alert("Invalid")</script>';
      echo '<script>window.location="consult.php"</script>';

}
}else{
  echo '<script>alert("Not Available")</script>';
      echo '<script>window.location="consult.php"</script>';
}
}



 ?>

<!DOCTYPE html>
<html>
<head>
  <title>Virtual Nutritionist PH</title> 
</head>
<body>
 
<div class="row">   

  <?php 
  $query = "SELECT * FROM tblproducts WHERE quantity != 0 GROUP BY product_code";
$result = mysqli_query($db,$query);
if (mysqli_num_rows($result)>0) 
{
 while ($row=mysqli_fetch_array($result)) 
{
    $_SESSION['zero'] = $row["quantity"];
    $_SESSION['one'] = $row["product_code"];
if ($_SESSION['zero']==1) {
   $sqls = "UPDATE tblproducts SET status = 'Unavailable' WHERE product_code='".$_SESSION['one']."'";
     mysqli_query($db,$sqls)or die(mysqli_error($db));
}
   ?>
<div class="col-lg-3">
  <div class="card mb-3">
    <div class="card-body">
      <form method="post" action="consult.php?action=add&id=<?php echo $row["product_code"]; ?>">
         <center>

            <?php if($row['prod_pic1'] != ""): ?>
                <img width="125px" style="border-radius:50%" src="admin/images/<?php echo $row['image1']; ?>">
              <?php else: ?>
                <img src="admin/images/defaults.png" style="border-radius:50%" width="125px">
              <?php endif; ?>

         <h4 class="text-info"><?php echo $row["product_name"]; ?></h4>
         <h4 class="text-info">Schedule:<br>(<?php echo $row["quantity"]; ?>)</h4>
         <h4 class="text-danger">₱<?php echo $row["price"]; ?>.00</h4>
       <input class="form-control" type="number" min="0" placeholder="Quantity" name="quant" value="1">
       <input class="form-control" type="hidden" name="av" value="<?php echo $row["quantity"]; ?>">
       <input class="form-control" type="hidden" name="hiddenname" value="<?php echo $row["product_name"]; ?>">
       <input class="form-control" type="hidden" name="hiddenprice" value="<?php echo $row["price"]; ?>">
       <input class="btn btn-success" type="submit" name="add_to_cart" value="Add" style="margin-top: 10px">
       <a class="btn btn-info" style="margin-top: 10px" title="Click for more details" href="details.php?product_id=<?php echo $row['product_id'];?>"><i class="now-ui-icons gestures_tap-01"></i>View</a></center>
     </form>
    </div>
  </div>
</div>

<?php
}
}
?>
  </div>
</div>
</div>
</body>
</html>