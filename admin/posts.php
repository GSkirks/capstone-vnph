<?php
session_start();
if(!isset($_SESSION["userid"])){
 header("Location: login.php");
}else{
include('../includes/connection.php');
include 'theme/header.php';
include 'theme/sidebar.php';
?>

    <!-- Begin Page Content -->
    <div class="card mb-3">

        <!-- Page Heading -->
        <div class="card-header"><h2>Posts <a href="add-post.php" type="button" class="btn btn-info fas fa-plus"> Add New</a></h2> 

        <!-- DataTales Example -->
        <div class="card-body">
            <?php 
            
            if (isset($_GET['remove_success'])) {
                if ($_GET['remove_success'] == "true") {
                    echo "<div class='alert alert-success'>Record deleted successful.</div>";
                } else {
                    echo "<div class='alert alert-danger'>Record can't deleted.</div>";
                }
            }

            ?>
              <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $sql = "SELECT * FROM posts";
                        $result = mysqli_query($db, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            $id = 1;
                            while ($row = mysqli_fetch_assoc($result)) {
                        
                        ?>
                        <tr>
                            <td><?php echo $id; ?></td>
                            <td><?php echo $row['title']; ?></td>
                            <td><?php
                            
                            $show_category = mysqli_query($db, "SELECT * FROM categories WHERE id='{$row["cat_id"]}'");
                            if (mysqli_num_rows($show_category) > 0) {
                                $category_data = mysqli_fetch_assoc($show_category);
                                echo $category_data['cat_name'];
                            }
                            
                            ?></td>
                            <td>
                                <a href="edit-post.php?id=<?php echo $row['id']; ?>" class="btn btn-lg btn-warning fas fa-pen"><i></i></a>
                                <a href="delete-post.php?id=<?php echo $row['id']; ?>" class="btn btn-lg btn-danger fa fa-trash" ><i></i></a>
                            </td>
                        </tr>
                        <?php

                            $id++; }
                        }

                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php include 'theme/footer.php'; }?>