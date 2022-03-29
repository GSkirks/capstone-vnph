


<!--may bugs pa-->


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
$query = 'SELECT concat(`C_FNAME`," ",`C_LNAME`)as name,C_PNUMBER,C_ADDRESS FROM tbltransacdetail a INNER JOIN tblcustomer b on a.`customer_id`=b.`C_ID`, tblreqs c on c. `D_ID`=b.`C_ID`
              WHERE transac_code ='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
               $stats = $row['status'];
               $name = $row['name'];
               $contact = $row['C_PNUMBER'];
               $address = $row['C_ADDRESS'];
              }
                   
?>


 <div class="card">
            <div class="card-header">
            <div  style="margin-bottom: 30px">
            <h5>Name : <?php echo $name; ?></h5>
            <h5>Contact : 0<?php echo $contact; ?></h5>
            <h5>Address : <?php echo $address; ?></h5>
          </div>
            <div class="card-body">
              <h4 style="color: blue">Information</h4>
              <div class="table-responsive">
                            <table cellpadding="5" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Boarding House</th>
                                        <th>Date</th>
                                        <th>Price</th> 
                                    </tr>
                                </thead>
                                <tbody style="font-size: 20px">
                                  <?php                  
                $query = "SELECT b.product_name,a.date,a.qty,a.price,a.total FROM tbltransac a,tblproducts b WHERE a.product_code=b.product_code AND a.transac_code='".$_GET['id']."' GROUP BY a.product_code";
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                            echo '<td>'. $row['product_name'].'</td>';                     
                            echo '<td>'. $row['date'].'</td>';
                            echo '<td>&#8369 '. $row['price'].'</td>';
                           /* echo '<td>  ';
                            echo '<center> <a  type="button" class="btn btn-lg btn-info fas fa-cart-plus" href="addtransacdetail.php?action=edit & id='.$row['transac_id'] . '"></a> </td></center>';*/
                            echo '</tr> ';
                }
            ?> 
                      <?php 
$query = 'SELECT * FROM tbltransacdetail
              WHERE
              transac_code ='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
               $zz = $row['totalprice'];
              }
         
?>

            <tr>
                                  <td colspan="4" align="right"><br><h5> Total :</h5></td>
                                  <td ><br><h5> &#8369 <?php echo $zz-150; ?></h5></td>
                                </tr>
                                    
                                </tbody>
                            </table>

                        </div>
            </div>
            <?php
           $query = 'SELECT * FROM tbltransacdetail
              WHERE
              transac_code ='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
               $zz = $row['totalprice'];
              }
         
?>

            <?php
           $query = 'SELECT * FROM tblreqs
              WHERE
              D_ID ='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
               $zz = $row['D_ID'];
              }
         
?>

         
          </div>


          
        </div><br>

             <a href="detail.php" class="btn btn-xs btn-info fas fa-arrow-left">Back</a>
        <?php include 'theme/footer.php'; ?>