<?php
session_start();
if(!isset($_SESSION["userid"])){
 header("Location: login.php");
}else{
include('../includes/connection.php');
include 'theme/header.php';
include 'theme/sidebar.php';
include '../includes/script.php';?>
<body class="index-page sidebar-collapse">

    <!-- End Navbar -->
    <div class="wrapper">

<br>
        <div class="main">
            <div class="section section-basic">
                <div class="container">
                      <h2>Purchased Product Information</h2>
                      <hr color="orange">
                      <a href='admin_panel.php' class='btn btn-warning btn-round'>Back to Home</a>
                <br>
                <div class="col-md-12">
               

<?php
// including the database connection file
include("../includes/connection.php");
if(isset($_POST['submit'])){

    $product_name = $_POST['product_name'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $address = $_POST['address'];
    $description = $_POST['description'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $name = $_POST['name'];

    move_uploaded_file($_FILES["prod_pic1"]["tmp_name"],"../images/" . $_FILES["prod_pic1"]["name"]);         
    $prod_pic1=$_FILES["prod_pic1"]["name"];
    move_uploaded_file($_FILES["prod_pic2"]["tmp_name"],"../images/" . $_FILES["prod_pic2"]["name"]);         
    $prod_pic2=$_FILES["prod_pic2"]["name"];
    move_uploaded_file($_FILES["prod_pic3"]["tmp_name"],"../images/" . $_FILES["prod_pic3"]["name"]);         
    $prod_pic3=$_FILES["prod_pic3"]["name"];

     // checking empty fields
    if(empty($product_name) || empty($description) || empty($quantity) || empty($price) || empty($email) 
        || empty($contact) || empty($name) || empty($address) || empty($prod_pic1) || empty($prod_pic2) || empty($prod_pic3)){    
            
        if(empty($product_name)) {
            echo "<font color='red'>RND name field is empty!</font><br/>";
        }
        
        if(empty($description)) {
            echo "<font color='red'>Description field is empty!</font><br/>";
        }

        if(empty($quantity)) {
            echo "<font color='red'>Available beds field is empty!</font><br/>";
        }   

        if(empty($price)) {
            echo "<font color='red'>Price field is empty!</font><br/>";
        }   

        if(empty($contact)) {
            echo "<font color='red'>Contact field is empty!</font><br/>";
        } 

        if(empty($email)) {
            echo "<font color='red'>Email field is empty!</font><br/>";
        }

        if(empty($name)) {
            echo "<font color='red'>Owner Name field is empty!</font><br/>";
        }

        if(empty($address)) {
            echo "<font color='red'>Address field is empty!</font><br/>";
        }

        if(empty($prod_pic1)) {
            echo "<font color='red'>Picture1 field is empty!</font><br/>";
        }

        if(empty($prod_pic2)) {
            echo "<font color='red'>Picture2 field is empty!</font><br/>";
        }

        if(empty($prod_pic3)) {
            echo "<font color='red'>Picture3 field is empty!</font><br/>";
        }

    } else {    

        $query = "INSERT INTO tblproducts (product_name, description, quantity, contact, price, email, address, name, prod_pic1, prod_pic2, prod_pic3) 
        VALUES ('$product_name','$description','$quantity','$contact','$price','$email','$name','$prod_pic1','$prod_pic2','$prod_pic3')";  

        $result = mysqli_query($db,$query);
            
        if($result){
            
            $product_name = $_POST['product_name'];
            $quantity = $_POST['quantityty'];
            
            date_default_timezone_set('Asia/Manila');

            $date = date("Y-m-d H:i:s");
            $id=$_SESSION['id'];
            
            $query=mysqli_query($db,"SELECT product_name FROM tblproducts WHERE product_id='$product_name'")or die(mysqli_error());
          
                $row=mysqli_fetch_array($query);
                $product=$row['product_name'];
                $remarks="added a new product $quantity of $product_name";  
            


        //redirecting to the display page.
        header("Location: product.php");
        }
        
    }
}

?>



<div class="panel panel-success panel-size-custom">
          <div class="panel-heading"><h3>Add Purchased Products</h3></div>

          <div class="panel-body">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form group">
                    <label for="product_name">Registered Nutritionist-Dietician:</label>
                    <input type="text" class="form-control" id="product_name" name="product_name" placeholder="RND"/>
                    <label for="description">Description:</label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="Description"/>
                    <label for="contact">Contact:</label>
                    <input type="text" class="form-control" id="contact" name="contact" placeholder="Number"/>
                    <label for="price">Price (Php):</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="Price per month"/>
                    <label for="quantity">Available beds:</label>
                    <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Available beds"/>
                    <label for="quantity">Owner name:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Owner name"/>
                    <label for="quantity">Email:</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email"/>
                    <label for="quantity">Address:</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Address"/>

                        
                        <label for="prod_pic1">Picture 1 (Front View):</label>
                        <div class="input-group">
                            <input type="file" class="form-control" id="prod_pic1" name="prod_pic1">  
                        </div>
                        <label for="prod_pic2">Picture 2 (Side View):</label>
                        <div class="input-group">
                            <input type="file" class="form-control" id="prod_pic2" name="prod_pic2">  
                        </div>
                        <label for="prod_pic3">Picture 3 (Specifications):</label>
                        <div class="input-group">
                            <input type="file" class="form-control" id="prod_pic3" name="prod_pic3">  
                        </div>
                <br>

                <div class="form group">
                    <button type="submit" class="btn btn-success btn-round" id="submit" name="submit">
                    <i class="now-ui-icons ui-1_check"></i> Add Product
                    </button> 
                </div>
            </form>
          </div>
        </div> 
        <br> 
    </div>
</div>
</div>
<!--footer area-->
<?php include 'theme/footer.php'; }?>