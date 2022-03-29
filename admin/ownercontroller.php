<?php 
       include('../includes/connection.php');

       		if (isset($_POST['submit'])) {
						$sm = $_POST['supplier'];
					    $contact = $_POST['contact'];
					    $email = $_POST['email'];
						$address = $_POST['address'];
				
			if ($_GET['action'] == 'add') {		
			if ($sm == "") {
              header("Location: owneradd.php?required=name");
            }elseif ($contact == "" || $contact < 0 ) {
              header("Location: owneradd.php?required=contact");    
            }elseif ($email == "" ) {
              header("Location: owneradd.php?required=email");  
            }elseif ($address == "") {
              header("Location: owneradd.php?required=address");  
            }else{	
				$query = "INSERT INTO tblowner(owner_id,owner_name,contact,email,address)
				VALUES ('Null','".$sm."','".$contact."','".$email."','".$address."')";
				mysqli_query($db,$query)or die (mysqli_error($db));
				?>
				<script type="text/javascript">
				alert("Successfully added.");
				window.location = "owner.php";
				</script>
				<?php
			}
			}
			if ($_GET['action'] == 'update') {
            	$id = $_POST['id'];
			if ($sm == "") {
              header("Location: ownerupdate.php?required=name&id=".$id."");
            }elseif ($contact == "" || $contact < 0 ) {
              header("Location: ownerupdate.php?required=contact&id=".$id."");    
            }elseif ($email == "" ) {
              header("Location: ownerupdate.php?required=email&id=".$id."");  
            }elseif ($address == "") {
              header("Location: ownerupdate.php?required=address&id=".$id."");  
            }else{	
				$query = 'UPDATE tblowner set owner_name ="'.$sm.'",contact ='.$contact.', email="'.$email.'",address ="'.$address.'" WHERE owner_id ="'.$id.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));
				?>
				<script type="text/javascript">
				alert("Update Successful.");
				window.location = "owner.php";
				</script>
				<?php
			}
			}
		}
			?>
    	
