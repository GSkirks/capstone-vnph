<?php 
        if (isset($_SESSION['cid'])) { ?>
            <div id="wrapper">
         <ul class="sidebar navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="consult.php">
            <i class="fas fa-fw fa-home"></i>
            <span>Home</span>
          </a>
        </li>

        <li class="nav-item">
          <a title="Announcements" class="nav-link" href="announce.php">
            <i class="fa fa-bullhorn"></i>
            <span>Announcements</span>
          </a>
        </li>

        <li class="nav-item">
          <a title="Map"class="nav-link" href="map.php">
            <i class="fa fa-map-marker"></i>
            <span>Location</span>
          </a>
        </li>

        <?php $cart = isset($_SESSION['cart'])? count($_SESSION['cart']) : 0; ?>
          <li class="nav-item">
            <?php if (isset($_POST['add_to_cart'])) {
              echo '
            <a title="Appointment/s" class="nav-link" href="cart.php">
            <i class="fa fa-plus-square"></i>
            Appointment/s </a>';
            }else{
              echo '
              <a title="Appointment/s" class="nav-link" href="cart.php">
            <i class="fa fa-plus-square"></i>
            Appointment/s <span class="text-danger">'.$cart.'</span></a>';
            }
            ?>
        </li>
        <li class="nav-item">
          <a title="Your Appointment/s" class="nav-link" href="order.php">
            <i class="fas fa-fw fa-th-list"></i>
            <span>Your Appointment/s</span></a>
        </li>
         
        
      </ul>
         <div id="content-wrapper">

        <div class="container-fluid">
       <?php  }else{ ?>
       <div id="wrapper">
         <ul class="sidebar navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="consult.php">
            <i class="fas fa-fw fa-home"></i>
            <span>Home</span>
          </a>
        </li>

        <li class="nav-item">
          <a title="Map"class="nav-link" href="map.php">
            <i class="fa fa-map-marker"></i>
            <span>Location</span>
          </a>
        </li>
        
        <li class="nav-item">
          <a title="Appointment/s" class="nav-link" href="cart.php">
            <i class="fa fa-list-alt"></i>
            <span>Your Appointment/s</span></a>
        </li>
      </ul>
         <div id="content-wrapper">

        <div class="container-fluid">
     <?php }
         ?>
        
      <!-- Sidebar -->
     

         