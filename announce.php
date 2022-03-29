<?php include('includes/connection.php');?>  
<!--header area-->
<?php include 'includes/header.php'; ?>
<!--sidebar area-->
<?php include 'includes/sidebar.php'; ?>


        <?php
                    
        $sql = "SELECT * FROM posts ORDER BY id DESC LIMIT 3";
        $result = mysqli_query($db, $sql);
        if (mysqli_num_rows($result) > 0) {
            
        ?>
        <?php
        }
        ?>

        <?php
                    
        $sql = "SELECT * FROM posts ORDER BY id DESC LIMIT 100";
        $result = mysqli_query($db, $sql);
        if (mysqli_num_rows($result) > 0) {
            
        ?>

                                <div class="card-header">
                                    <center><h2 class=""><a href="announce.php">Announcements</a></h2></center>
                                </div>
                                <hr class="invis">
        <section class="section wb">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-list clearfix">

                                <?php while ($row = mysqli_fetch_assoc($result)) { ?>

                                <div class="blog-box row">
                                    <div class="col-md-4">
                                        <div class="post-media">
                                            <a href="single.php?id=<?php echo $row["id"]; ?>" title="">
                                                <img src="<?php if (file_exists("admin/uploads/" . $row['img'])) { echo "admin/uploads/" . $row['img']; } else { echo "admin/uploads/" . $row['old_img']; } ?>" alt="" class="img-fluid">
                                                <div class="hovereffect"></div>
                                            </a>
                                        </div><!-- end media -->
                                    </div><!-- end col -->


                                    <div class="blog-meta big-meta col-md-8">
                                        <span class="bg-aqua">
                                        <h5><img src="images/companylogo.png" style="width: 50px">
                                        <?php
                                        $sql1 = "SELECT cat_name FROM categories WHERE id='{$row["cat_id"]}'";
                                        $result1 = mysqli_query($db, $sql1);
                                        if (mysqli_num_rows($result1) > 0) {
                                            $cat_data = mysqli_fetch_assoc($result1);
                                            echo $cat_data['cat_name'];
                                        }
                                        ?>
                                        </span>
                                        <h4><a href="single.php?id=<?php echo $row["id"]; ?>" title="<?php echo $row["title"]; ?>"><?php echo $row["title"]; ?></a></h4>
                                        <p align="justify">
                                        <?php
                                            if ($row["description"] > 200) {
                                                echo substr($row["description"], 0, 200) . "...";
                                            } else {
                                                echo $row["description"];
                                            }
                                        ?>
                                        </p>
                                        <small><i class="fa fa-eye"></i> <?php echo $row["view"]; ?></small>
                                        <small><?php echo $row["date"]; ?></small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->

                                <hr class="invis">

                                <?php } ?>

                            </div><!-- end blog-list -->
                        </div><!-- end page-wrapper -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
        <?php } ?>


<!-- Live chat-->
<!-- <?php include 'livechat.php'; ?> -->
<!-- Live chat-->  
<?php include 'includes/footer.php'; ?>