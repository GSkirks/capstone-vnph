<?php include 'includes/header.php'; ?>
<!--sidebar area-->
<?php include 'includes/sidebar.php'; ?>

<?php include 'includes/connection.php';



if (isset($_GET["id"])) {
    $post_id = $_GET["id"];
    $sql = "SELECT * FROM posts WHERE id='$post_id'";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        $post_view = $row['view'] + 1;
        $update_view_sql = "UPDATE posts SET view='$post_view' WHERE id='$post_id'";
        $update_view = mysqli_query($db, $update_view_sql);
    }
} else {
    die("<script>window.location.replace('index1.php');</script>");
}

?>
        <div class="card-header">
                <center><h2 class=""><a href="announce.php">Announcements</a></h2></center>
        </div>
        <hr class="invis">
        <a class="btn btn-secondary btn-round" href="announce.php">Back to index</a>
        
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-title-area">
                                <span class="color-pink">
                                <?php
                                $sql1 = "SELECT cat_name FROM categories WHERE id='{$row["cat_id"]}'";
                                $result1 = mysqli_query($db, $sql1);
                                if (mysqli_num_rows($result1) > 0) {
                                    $cat_data = mysqli_fetch_assoc($result1);
                                    echo $cat_data['cat_name'];
                                }
                                ?>
                                </span>

                                <h3><?php echo $row["title"]; ?></h3>

                                <div class="blog-meta big-meta">
                                    <small><?php echo $row["date"]; ?></small>
                                    <small><i class="fa fa-eye"></i> <?php echo $row["view"]; ?></small>
                                </div><!-- end meta -->
                            </div><!-- end title -->

                            <div class="single-post-media">
                                <img src="<?php if (file_exists("admin/uploads/" . $row['img'])) { echo "admin/uploads/" . $row['img']; } else { echo "admin/uploads/" . $row['old_img']; } ?>" alt="" class="img-fluid">
                            </div><!-- end media -->

                            <div class="blog-content">  
                                <div class="pp">
                                    <p align="justify">
                                        
                                        <?php echo $row["description"]; ?>
                                    
                                    </p>

                                </div><!-- end pp -->
                            </div><!-- end content -->                            


                            <hr class="invis1">

                            <?php

                            $sql1 = "SELECT * FROM posts WHERE cat_id='{$row["cat_id"]}'";
                            $result1 = mysqli_query($db, $sql1);
                            if (mysqli_num_rows($result1) > 0) {

                            ?>
                            <div class="custombox clearfix">
                                <h4 class="small-title"><a href="#" title="">Recommended</a></h4>
                                <div class="row">
                                    <?php

                                    while ($row1 = mysqli_fetch_assoc($result1)) {

                                    ?>
                                    <div class="col-lg-6">
                                        <div class="blog-box">
                                            <div class="post-media">
                                                <a href="single.php?id=<?php echo $row1['id']; ?>" title="">
                                                    <img src="<?php if (file_exists("admin/uploads/" . $row1['img'])) { echo "admin/uploads/" . $row1['img']; } else { echo "admin/uploads/" . $row1['old_img']; } ?>" alt="" class="img-fluid">
                                                    <div class="hovereffect">
                                                        <span class=""></span>
                                                    </div><!-- end hover -->
                                                </a>
                                            </div><!-- end media -->
                                            <div class="blog-meta">
                                                <h4><a href="single.php?id=<?php echo $row1['id']; ?>" title="<?php echo $row1['title']; ?>"><?php echo $row1['title']; ?></a></h4>
                                                <small><?php echo $row1['date']; ?></small>
                                            </div><!-- end meta -->
                                        </div><!-- end blog-box -->
                                    </div><!-- end col -->
                                    <?php } ?>
                                </div><!-- end row -->
                            </div><!-- end custom-box -->
                            <?php } ?>
                        </div><!-- end page-wrapper -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->


<!-- Live chat-->
<!-- <?php include 'livechat.php'; ?> -->
<!-- Live chat-->  
<?php include 'includes/footer.php'; ?>