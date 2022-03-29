<?php
session_start();
if(!isset($_SESSION["userid"])){
 header("Location: login.php");
}else{
include('../includes/connection.php');
include 'theme/header.php';
include 'theme/sidebar.php';
?> 


          <div class="card mb-3">
            <div class="card-header">
              <h2>Appointments</h2>
            <div class="card-body">
              <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Patient</th>
                                        <th>Date</th>
                                        <th>Total</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php                  
                $query = 'SELECT *,concat(`C_FNAME`," ",`C_LNAME`)as name FROM tbltransacdetail a, tblcustomer b WHERE a.`customer_id`=b.`C_ID` ';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                          
                            echo '<tr>';                     
                            echo '<td>'. $row['name'].'</td>';
                            echo '<td>'. $row['date'].'</td>';
                            echo '<td>'. $row['totalprice'].'</td>';
                            echo '<td>'. $row['status'].'</td>';
                            echo '<td>';
                            echo '<a title="Delete Boarding House" type="button" class="btn btn-lg btn-danger fa fa-trash" href="requestdelete.php?detail_id=' .$row['detail_id'] . '"></a> ';
                             echo '<td>';
                            if ($row['status']=='Pending') {?>
                            <a title="Cancel" type="button" class="btn btn-xs btn-danger " onclick="return confirm('Do you want to cancel transaction?')" href="confirm.php?action=edit & cancel=<?php echo $row['transac_code']; ?> ">Cancel</a>
                            <a title="Confirm" type="button" class="btn btn-xs btn-info " onclick="return confirm('Do you want to confirm transaction?')" href="confirm.php?action=edit & confirm=<?php echo $row['transac_code']; ?>">Confirm</a>
                            <?php
                             }elseif ($row['status']=='Confirmed') {?>
                               <a title="Cancel" type="button" class="btn btn-xs btn-danger " onclick="return confirm('Do you want to cancel transaction?')" href="confirm.php?action=edit & cancel=<?php echo $row['transac_code']; ?> ">Cancel</a>
                            
                             <?php 
                             }    

                             
                            echo '</td>';
                            echo '</tr> ';

                }
            ?> 
                                    
                                </tbody>
                            </table>
                        </div>
            </div>
           
          </div>

          
        </div>
        <!-- /.container-fluid -->

<?php include 'theme/footer.php'; }?>
<?php include 'addtransac.php'; ?>