<!--dito dapat magdidisplay yung prod_pic1, prod_pic2, prod_pic3, na nasa upload image-->
<?php include('includes/connection.php');?>  

<!--header area-->
<?php include 'includes/header.php'; ?>

<!--sidebar area-->
<?php include 'includes/sidebar.php'; ?>
<?php include 'includes/script.php'; ?>

<!-- Live chat-->
<!-- <?php include 'livechat.php'; ?> -->
<!-- Live chat-->  

<div class="card-header">
                <center><h2 class=""><a href="consult.php">Nutritionist-Dietician </a></h2></center>
        </div>
        <hr class="invis">
            <a class="btn btn-secondary btn-round" href="consult.php">Back to home</a>
            <div class="col-md-12">
                <div class="row justify-content-center">
                    <div class="col-8">
         

<?php
    include('includes/connection.php');
    $product_id=$_GET['product_id'];
    $query = "SELECT * FROM tblproducts WHERE product_id='$product_id'";
    $result = mysqli_query($db,$query);
    while($res = mysqli_fetch_array($result)) {  
        //getting product id
        
    
?>   
<br>
    <div class="row justify-content-center">
    <div class="section" id="carousel">
        <div class="container"> 
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <?php if($res['prod_pic1'] != ""): ?>
                            <img width="400px" class="d-block" src="admin/images/"<?php echo $res['prod_pic1']; ?> alt="First slide">
                            <?php else: ?>
                            <img src="admin/images/defaults.png" width="400px">
                            <?php endif; ?>
                            <div class="carousel-caption d-none d-md-block">
                                <h3><?php echo $res['product_name']; ?></h3>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <?php if($res['prod_pic2'] != ""): ?>
                            <img width="400px" class="d-block" src="admin/images/"<?php echo $res['prod_pic2']; ?> alt="Second slide">
                            <?php else: ?>
                            <img width="400px" src="admin/images/default.png">
                            <?php endif; ?>
                            <div class="carousel-caption d-none d-md-block">
                                <h3><?php echo $res['product_name']; ?></h3>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <?php if($res['prod_pic3'] != ""): ?>
                            <img width="400px" class="d-block" src="admin/images/"<?php echo $res['prod_pic3']; ?> alt="Third slide">
                            <?php else: ?>
                            <img width="400px" src="admin/images/default.png">
                            <?php endif; ?>
                            <div class="carousel-caption d-none d-md-block">
                                <h3><?php echo $res['product_name']; ?></h3>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <i class="now-ui-icons arrows-1_minimal-left"></i>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <i class="now-ui-icons arrows-1_minimal-right"></i>
                    </a>
                    </div>
                </div>
        </div>

        <h4><br><br>
        <ul><b>Registered Nutritionist-Dietician: </b> 
        <span style="color:green;"><?php echo $res['product_name']; ?></span>
        </ul>   
        <ul><b>Address: </b> 
        <span style="color:green;"><?php echo $res['address']; ?></span>
        </ul>  
        <ul><b>RND ID: </b> 
        <span style="color:green;"><?php echo $res['owner_id']; ?></span>
        </ul>  
        <ul><b>Name of Dietician: </b> 
        <span style="color:green;"><?php echo $res['name']; ?></span>
        </ul> 
        <ul><b>Contact number: </b> 
        <span style="color:green;"><?php echo $res['contact']; ?></span>
        </ul> 
        <ul><b>Email: </b> 
        <span style="color:green;"><?php echo $res['email']; ?></span>
        </ul> 
        <ul><b>Description: </b>
        <span style="color:green;"><p align="justify"><?php echo $res['description']; ?></p></span>
        </ul>
        <ul><b>Category ID: </b>
        <span style="color:green;"><?php echo $res['category_id']; ?></span>
        </ul>
        <ul><b>Consultation Fee: </b>
        <span style="color:green;"><?php echo 'PHP'.$res['price'].'  per 2 weeks'; ?></span>
        </ul>
        <ul>
       <b>Schedule:</b><span style="color:green;"><?php echo $res['quantity'];?></span>
       </ul></h4>
        <?php }?>
        </div>
        </div>
                            </div>
<?php include 'includes/footer.php'; ?>