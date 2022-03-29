 
<?php include('includes/connection.php');?>  

<!--header area-->
<?php include 'includes/header.php'; ?>

<!--sidebar area-->
<?php include 'includes/sidebar.php'; ?>

        <style type="text/css">
            .responsive{
                  width:100%;
                  max-width: 120px
            }
        </style>
<?php 
$query = 'SELECT *,concat(`C_FNAME`," ",`C_LNAME`)as name,add_date,C_PNUMBER,C_ADDRESS FROM tbltransacdetail a inner join tblcustomer b on a.`customer_id`=b.`C_ID`
              WHERE  transac_code ='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
               $stat = $row['status'];
               $name = $row['name'];
               $contact = $row['C_PNUMBER'];
               $address = $row['C_ADDRESS'];
              }
         
?>
 <span id="divToPrint">
 <div class="card">
   
            <div class="card-header">
              <div style="margin-bottom: 30px">
             <center><img class="responsive" src="images/companylogo.png" style="width: 120px"><h2><b> Virtual Nutritionist</b>PH</h2><p style="font-size: 20px">Brgy.Alangilan, Batangas City <br> Batangas</p></center>
         </div>
              <?php if ($stat == 'Confirmed') {
                ?>
               
         <ul>
             <div  style="margin-bottom: 30px">
            <h5>Name : <?php echo $name; ?></h5>
            <h5>Contact : 0<?php echo $contact; ?></h5>
            <h5>Address : <?php echo $address; ?></h5>
        
        </div>
            <?php  }else{
              ?>
              <h5>Your request is on process, attach your E receipt (Gcash) of your downpayment to verify your request. Please check your list of added for notification of confirmation.</h5>
           <?php } ?>
                

            <div class="card-body">
              <div class="table-responsive">
                            <table cellpadding="4" width="100%" cellspacing="0">
                                <thead align="left">
                                    <tr>
                                        <th>Registered Nutritionist-Dietician</th>
                                        <th>Consultation Date</th>
                                        <th>Price</th>
                                        <th>Full Address</th>
                                        <th>Email</th>
                                        <th>Contact Number</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php                  
                $query = "SELECT b.contact, b.email, b.address, b.product_name,a.date,a.qty,a.price,a.total FROM tbltransac a,tblproducts b WHERE a.product_code=b.product_code AND a.transac_code='".$_GET['id']."' GROUP BY a.product_code";
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                            echo '<td>'. $row['product_name'].'</td>';                     
                            echo '<td>'. $row['date'].'</td>';
                            echo '<td>&#8369 '. $row['price'].'</td>';
                            echo '<td>'. $row['address'].'</td>';
                            echo '<td>'. $row['email'].'</td>';
                            echo '<td>'. $row['contact'].'</td>';
                           
                           
                            /* echo '<td>  ';
                            echo '<center> <a  type="button" class="btn btn-lg btn-info fas fa-cart-plus" href="addtransacdetail.php?action=edit & id='.$row['transac_id'] . '"></a> </td></center>';*/
                            echo '</tr> ';
                }
            ?> 
                                    
                                </tbody>
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

                                <tr><br><br>
                                  <td colspan="4" align="right"><br><h5> Total :</h5></td>
                                  <td ><br><h5> &#8369 <?php echo $zz-150; ?></h5></td>
                                </tr>

                            </table>
                            <?php
            $result = mysqli_query($db, "SELECT * FROM tbltransacdetail 
              WHERE transac_code =".$_GET['id']) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
               $stats = $row['status'];
              }
         
                             if ($stats=='Confirmed') {
                             ?>
                             <h5><br><br>Please print this as a proof of reservation</h5>
                            <p> We hope you enjoy our service . Have a nice day!</p>

                            <p> Sincerely.</p>

                           <h4><b>Virtual Nutritionist</b>PH</h4>
                           <?php }else{

                           } ?>
                        </div>
            </div>
        
        <!--   <h5 align="right" style="margin-right: : 150px">Total Price : &#8369 <?php echo $zz; ?></h5> -->
          </div>



          
        </div><br>
</ul>
</span>
             <a href="order.php" class="btn btn-xs btn-info fas fa-arrow-left">Back</a>
             <?php 
             if ($stats=='Confirmed') {
               ?>
               <a href="#" class="btn btn-xs btn-info fas fa-print" value="print" onclick="PrintDiv();">Print</a>
            <?php }
              ?>
<!-- Live chat-->
<!-- <?php include 'livechat.php'; ?> -->
<!-- Live chat-->  
<?php include 'includes/footer.php'; ?>


        <script type="text/javascript">     
    function PrintDiv() {    
       var divToPrint = document.getElementById('divToPrint');
       var popupWin = window.open('', '_blank', 'width=800,height=800');
       popupWin.document.open();
       popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
            }
 </script>