<?php
       
       include('../includes/connection.php');
       
       
        ?>  
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <?php
						$prcd = $_POST['prcd'];
					     $prc =$_POST['prc'];
				
							
								$query = "INSERT INTO tbltransac(transac_id,transac_code,date,customer_id,product_code,qty,price,status)
								VALUES ('Null','8787','2019-04-10',39,'".$prcd."','".$prc."','tae')";
								mysqli_query($db,$query)or die (mysqli_error($db));
							
						
				?>
    	<!-- <script type="text/javascript">
			alert("Successfully added.");
			window.location = "owner.php";
		</script> -->
</body>
</html>