<?php
session_start();
if(!isset($_SESSION["userid"])){
 header("Location: login.php");
}else{
include('../includes/connection.php');
include 'theme/header.php';
include 'theme/sidebar.php';
?>

<!-- Supplier Tables -->

          <div class="card mb-3">
            <div class="card-header">
              <h2>Nutritionist-Dieticians <a href="owneradd.php" type="button" class="btn btn-info fas fa-plus"> Add New</a></h2> 
            <div class="card-body">
              <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped"id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>RND</th>
                                        <th>Contact</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                         <th>Update</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php                  
                $query = 'SELECT * FROM tblowner';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                            echo '<td>'. $row['owner_name'].'</a></td>';
                            echo '<td>'. $row['contact'].'</td>';
                            echo '<td>'. $row['email'].'</td>';
                            echo '<td>'. $row['address'].'</td>';
                             echo '<td>  ';
                            echo ' <a  type="button" class="btn btn-lg btn-warning fas fa-pen" href="ownerupdate.php?action=view & id='.$row['owner_id'] . '"></a> ';
                            echo '<a title="Delete Owner" type="button" class="btn btn-lg btn-danger fa fa-trash" href="deleteowner.php?owner_id=' .$row['owner_id'] . '"></a> ';

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

<!--footer area-->
<?php include 'theme/footer.php'; ?>
<?php } ?>