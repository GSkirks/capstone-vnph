<?php
session_start();
if(!isset($_SESSION["userid"])){
 header("Location: login.php");
}else{
include('../includes/connection.php');
include 'theme/header.php';
include 'theme/sidebar.php';
 
$query = 'SELECT *,concat(`C_FNAME`," ",`C_LNAME`)as name,`C_PNUMBER`,`C_ADDRESS` FROM `tbltransacdetail` a INNER JOIN `tblcustomer` b on a.`customer_id`=b.`C_ID`
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

<span id="divToPrint">
 <div class="card">

            <div class="card-header">
            <center><img src="images/companylogo.png" style="width: 120px"><h2><b>Virtual Nutrtitionist</b>PH</h2><p style="font-size: 20px">Brgy.Alangilan, Batangas City <br> Batangas</p></center>
         
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
                                        <th>Registered Nutritionist-Dietician</th>
                                        <th>Date</th>
                                        <th>Total</th> 
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
                           echo '<td>  ';
                            /*echo '<center> <a  type="button" class="btn btn-lg btn-info fas fa-cart-plus" href="addtransacdetail.php?action=edit & id='.$row['transac_id'] . '"></a> </td></center>';*/
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
             
         
?>

            <tr>
                                  <td colspan="4" align="right"><br><h5> Total :</h5></td>
                                  <td ><br><h5> &#8369 <?php echo $zz-150; ?></h5></td>
                                </tr>
                                   
                                    
                                </tbody>
                            </table>   
                            <h5><br><br>Please print this. This is the proof of reservation of your border.</h5>
                            <p>Have a nice day!</p>

                            <p> Sincerely.</p>

                           <h4><b>Virtual Nutritionist</b>PH</h4>           </span>
                          <?php      
                        if ($row['status']=='Pending') {?>
                            <a title="Cancel" type="button" class="btn btn-xs btn-danger " onclick="return confirm('Do you want to cancel transaction?')" href="confirm.php?action=edit & cancel=<?php echo $row['transac_code']; ?> "><i class="fas fa-minus-circle"></i>Cancel</a>
                            <a title="Confirm" type="button" class="btn btn-xs btn-info " onclick="return confirm('Do you want to confirm transaction?')" href="confirm.php?action=edit & confirm=<?php echo $row['transac_code']; ?>"><i class="fas fa-check"></i>Confirm</a>
                             <a href="detail.php" class="btn btn-xs btn-warning"><i class="fas fa-sign-out-alt"></i>Back</a>
                            <?php
                             }elseif ($row['status']=='Confirmed') {?>
                               <a title="Cancel" type="button" class="btn btn-xs btn-danger " onclick="return confirm('Do you want to cancel transaction?')" href="confirm.php?action=edit & cancel=<?php echo $row['transac_code']; ?> "><i class="fas fa-minus-circle"></i>Cancel</a>
                                <a href="detail.php" class="btn btn-xs btn-warning"><i class="fas fa-sign-out-alt"></i>Back</a>
                                <a href="#" class="btn btn-xs btn-info fas fa-print" value="print" onclick="PrintDiv();">Print</a>
                            <?php 
                             }elseif ($row['status']=='Cancelled') {?>
                                <a title="Confirm" type="button" class="btn btn-xs btn-info " onclick="return confirm('Do you want to confirm transaction?')" href="confirm.php?action=edit & confirm=<?php echo $row['transac_code']; ?>"><i class="fas fa-check"></i>Confirm</a>
                                 <a href="detail.php" class="btn btn-xs btn-warning"><i class="fas fa-sign-out-alt"></i>Back</a>
                             <?php 
                             }   
                            }  ?>



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


            {}
 ?>
         
          </div>


          
        </div><br>

            
        <?php include 'theme/footer.php'; }?>

        
        <script type="text/javascript">     
    function PrintDiv() {    
       var divToPrint = document.getElementById('divToPrint');
       var popupWin = window.open('', '_blank', 'width=800,height=800');
       popupWin.document.open();
       popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
            }
 </script>