<?php include('includes/connection.php');?>  

<!--header area-->
<?php include 'includes/header.php'; ?>

<!--sidebar area-->
<?php include 'includes/sidebar.php'; ?>


          <?php
if(!isset($_SESSION["cid"])){
 header("Location: consult.php");
}
else{
?>
<?php
}
?> 
          <div class="card mb-3">
          <center><div class="card-header"><h3>List of Added</h3></div></center>
              <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Added Date</th>
                                        <th>Status</th>
                                        <th width="250">Remarks</th>
                                        <th></th>
                                      <!--   <th>Option</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php                  
                $query = "SELECT * FROM tbltransacdetail  WHERE customer_id='".$_SESSION['cid']."'";
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';                  
                            echo '<td>'. $row['date'].'</td>';
                            echo '<td>'. $row['status'].'</td>';
                            echo '<td>'. $row['remarks'].'</td>';
                            echo '<td>  ';
                            echo '<center> <a class="btn btn-info" title="View list Of Added" href="orderdetail.php?id='. $row['transac_code'].'">View detail</a> </center></td>';
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
<!-- Live chat-->
<!-- <?php include 'livechat.php'; ?> -->
<!-- Live chat-->  
<?php include 'includes/footer.php'; ?>
<?php include 'admin/addtransac.php'; ?>