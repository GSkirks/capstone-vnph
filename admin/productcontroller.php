<!--may problema dito dun sa part ng upload image-->
<?php
     include('../includes/connection.php');
     if (isset($_POST['submit'])) {

		if ($_GET['action'] == 'add') {	
		$product = $_POST['product'];
		$quantity = $_POST['quantity'];
		$price = $_POST['price'];
		$markup = $_POST['markup'];
		$category = $_POST['category'];
		$supplier = $_POST['supplier'];
		$address = $_POST['address'];
		$description = $_POST['description'];
		$contact = $_POST['contact'];
		$email = $_POST['email'];
		$name = $_POST['name'];
//dito//
		move_uploaded_file($_FILES["prod_pic1"]["tmp_name"],"images/" . $_FILES["prod_pic1"]["name"]);         
		$prod_pic1=$_FILES["prod_pic1"]["name"];
		move_uploaded_file($_FILES["prod_pic2"]["tmp_name"],"images/" . $_FILES["prod_pic2"]["name"]);         
		$prod_pic2=$_FILES["prod_pic2"]["name"];
		move_uploaded_file($_FILES["prod_pic3"]["tmp_name"],"images/" . $_FILES["prod_pic3"]["name"]);         
		$prod_pic3=$_FILES["prod_pic3"]["name"];

			$result = mysqli_query($db, "SELECT * FROM tblproducts WHERE product_name = '".$product."'");
			$checkprod = mysqli_num_rows($result);
			if ($checkprod > 0) {
              header("Location: productadd.php?required=producttaken");    
            }elseif ($product == "") {
              header("Location: productadd.php?required=product");  
            }elseif ($price == "" || $price < 0 ) {
              header("Location: productadd.php?required=price");   
            }elseif ($category == "") {
			  header("Location: productadd.php?required=category");  
			} elseif ($name == "") {
			  header("Location: productadd.php?required=name");  
			}elseif ($email == "") {
			  header("Location: productadd.php?required=email");  
			}elseif ($contact == "") {
			  header("Location: productadd.php?required=contact");  
			}elseif ($address == "") {
				header("Location: productadd.php?required=address");  
			}else{ 
            	$code = $_POST['code'];
				$date = $_POST['date'];
				$user = $_POST['user'];
//dito//
				$prod_pic1=$_POST["prod_pic1"];
				$prod_pic2=$_POST["prod_pic2"];
				$prod_pic3=$_POST["prod_pic3"];
//dito//
            	$query = "INSERT INTO `tblproducts`(`product_name`, `quantity`, `price`, `profit`, `date_in`, `category_id`, `owner_id`, `user_id`, `product_code`, `status`,`prod_pic1`,`prod_pic2`,`prod_pic3`,`address`,`description`,`contact`,`email`,`name`)
				VALUES ('".$product."','".$quantity."','".$price."','".$markup."','".$date."','".$category."','".$supplier."','".$user."','".$code."','Available', '".$prod_pic1."', '".$prod_pic2."', '".$prod_pic3."', '".$address."', '".$description."', '".$contact."', '".$email."', '".$name."')";
				mysqli_query($db,$query)or die (mysqli_error($db));
				$sql = "UPDATE `tblautonumber` SET `end`=`end`+`increment` WHERE `desc` = 'PROD'";
				mysqli_query($db,$sql)or die (mysqli_error($db));
				?>
				<script type="text/javascript">
				alert("Successfully added.");
				window.location = "product.php";
				</script>
				<?php
		}			
		}if ($_GET['action'] == 'update') {
		$product = $_POST['product'];
		$price = $_POST['price'];
		$markup = $_POST['markup'];
		$category = $_POST['category'];
		$supplier = $_POST['supplier'];
		$address = $_POST['address'];
		$description = $_POST['description'];
		$contact = $_POST['contact'];
		$email = $_POST['email'];
		$name = $_POST['name'];

		
			$id = $_POST['id'];
			if ($product == "") {
              header("Location: productupdate.php?required=product&id=".$id."");
            }elseif ($price == "" || $price < 0 ) {
              header("Location: productupdate.php?required=price&id=".$id."");  
            }elseif ($category == "") {
              header("Location: productupdate.php?required=category&id=".$id."");   
            }else{
            	$query = 'UPDATE tblproducts set product_name ="'.$product.'", price="'.$price.'",
					profit ="'.$markup.'",`category_id`="'.$category.'",`owner_id`="'.$supplier.'", address="'.$address.'", contact="'.$contact.'", description="'.$description.'", email="'.$email.'", name="'.$name.'" WHERE product_code ="'.$id.'"';
				mysqli_query($db, $query) or die(mysqli_error($db));
				
					?>
				<script type="text/javascript">
				alert("Update successfully.");
				window.location = "product.php";
				</script>
				<?php
		}		
		}if ($_GET['action'] == 'updatequantity') {
		$quantity = $_POST['quantity'];
			$id = $_POST['id'];
			if (empty($quantity) || $quantity < 0) {
				header("Location: updatequantity.php?required=quant&id=".$id."");  
			}else{
				$sql = 'UPDATE tblproducts set quantity = quantity + "'.$quantity.'" WHERE product_code ="'.$id.'"';
				mysqli_query($db, $sql) or die(mysqli_error($db));
				?>
				<script type="text/javascript">
				alert("Update successfully.");
				window.location = "product.php";
				</script>
				<?php
			}
		}			
		}
				?>
    	