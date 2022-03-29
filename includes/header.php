<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
        <style type="text/css">
            .responsive{
                  width:100%;
                  max-width: 50px
            }
          </style>

    <link rel="icon" type="image/png" href="images/companylogo.png">

    <title>Virtual Nutritionist PH</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

    <link href="css/cart_style.css" rel="stylesheet">


    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />


  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="/consult.php"><img class="responsive" src="images/companylogo.png" style="width: 50px"><b> Virtual Nutritionist</b>PH</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
              <?php 
     if (isset($_SESSION['cid'])) {
      echo '<a class="nav-link " href="admin.php"><i class=" fas fa-user-circle" > '.$_SESSION['C_FNAME'].' '.$_SESSION['C_LNAME'].'</i></a>';
      
     }else{
      echo '<a class="nav-link " href="register.php"><i class="fas fa-user-alt ">Sign Up</i></a>';
     }
      ?>
          </a>
        </li>
            <?php 
     if (isset($_SESSION['cid'])) {
      echo '<a class="nav-link " href="#" data-toggle="modal" data-target="#logoutModal"><i class=" fas fa-sign-out-alt" >Logout</i></a>';
     }else{
      echo '
          <a class="nav-link " href="login.php" id="userDropdown">
            <i class=" fas fa-sign-in-alt" > Login</i>
          </a>
       ' ;
     }
      ?>
    </nav>