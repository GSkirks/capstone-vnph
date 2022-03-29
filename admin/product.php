<?php
session_start();
if(!isset($_SESSION["userid"])){
 header("Location: login.php");
}else{
include('../includes/connection.php');
include 'theme/header.php';
include 'theme/sidebar.php';
?>  

<!-- Product Tables -->

<div class="card mb-3">
            <div class="card-header">
              <h2>Schedules <a href="productadd.php" type="button" class="btn btn-info fas fa-plus"> Add New</a></h2> 
            <div class="card-body">
              <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>RND</th>
                                        <th>Price</th>
                                        <th>Date In</th>
                                        <th>Owner</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php                  
                $query = 'SELECT *,category,owner_name,concat(d.`fname`," ",d.`lname`)as name FROM tblproducts a inner join tblcategory b inner join tblowner c inner join tblusers d on a.`category_id` = b.`category_id` and a.`owner_id` = c.`owner_id` and a.`user_id` = d.`user_id`';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                            echo '<td> '.$row['product_name'].'</td>';  
                            echo '<td>'. $row['price'].'</td>';
                            echo '<td>'. $row['date_in'].'</td>';
                            echo '<td>'. $row['owner_name'].'</td>';
                            echo '<td>'. $row['status'].'</td>';
                             echo '<td>  ';
                      

                             echo '<a title="Update Boarding House" type="button" class="btn btn-lg btn-warning fas fa-pen" href="productupdate.php?action=view & id='.$row['product_code'] . '"></a> ';
                             echo '<a title="Delete Boarding House" type="button" class="btn btn-lg btn-danger fa fa-trash" href="deleteproduct.php?product_id=' .$row['product_id'] . '"></a> ';
                            echo '</tr> ';
                }
            ?> 
                                    
                                </tbody>
                            </table>
                        </div>
            </div>
           
          </div>
</div>
          
        </div>

        <!-- /.container-fluid -->  
          
<!--footer area-->
<?php include 'theme/footer.php'; }?>