  <?php 
        if (isset($_SESSION['userid'])) {
          if ($_SESSION['position']=='Admin') {
           echo '
<div id="wrapper">
         <ul class="sidebar navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-home"></i>
            <span>Home</span>
          </a>
        </li>
               <li class="nav-item">
          <a title="Admins" class="nav-link" href="user.php">
            <i class="fa fa-lock"></i>
            <span>Admin</span></a>
        </li>
        
        <li class="nav-item">
          <a title="Staffs" class="nav-link" href="employee.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Staffs</span></a>
        </li>

        <li class="nav-item">
        <a title="All posts" class="nav-link" href="posts.php">
          <i class="fa fa-bullhorn"></i>
          <span>Announcements</span></a>
      </li>

        <li class="nav-item">
          <a title="Patients" class="nav-link" href="customer.php">
            <i class="fas fa-fw fa-user-friends"></i>
            <span>Patients</span></a>
        </li>
         <li class="nav-item">
          <a title="Registered Nutritionist-Dieticians" class="nav-link" href="owner.php">
            <i class="fas fa-fw fa-user-tie"></i>
            <span>Nutritionist-Dieticians</span></a>
        </li>
        <li class="nav-item">
          <a title="Schedules" class="nav-link" href="product.php">
            <i class="fas fa-fw fa-info"></i>
            <span>Schedules</span></a>
        </li>
         <li class="nav-item">
          <a title="Appointments" class="nav-link" href="request.php">
            <i class="fa fa-sticky-note"></i>
            <span>Appointments</span></a>
        </li>
       

        <li class="nav-item">
          <a title="Transaction" class="nav-link" href="detail.php">
            <i class="fas fa-fw fa-receipt"></i>
            <span>Transactions</span></a>
        </li>


      </ul>
         <div id="content-wrapper">

        <div class="container-fluid">
';
          }
          elseif ($_SESSION['position']=='Encoder') {
             echo '
<div id="wrapper">
         <ul class="sidebar navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-home"></i>
            <span>Home</span>
          </a>
        </li>
        
        <li class="nav-item">
          <a title="Employees" class="nav-link" href="employee.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Employees</span></a>
        </li>
        <li class="nav-item">
          <a title="Customers" class="nav-link" href="customer.php">
            <i class="fas fa-fw fa-user-friends"></i>
            <span>Customers</span></a>
        </li>
        <li class="nav-item">
          <a title="Appointments" class="nav-link" href="product.php">
            <i class="fas fa-fw fa-shopping-cart"></i>
            <span>Appointments</span></a>
        </li>
        <li class="nav-item">
          <a title="Transaction" class="nav-link" href="detail.php">
            <i class="fas fa-fw fa-receipt"></i>
            <span>Transaction</span></a>
        </li>
         
      </ul>
         <div id="content-wrapper">

        <div class="container-fluid">
';
         
         }
        }
         ?>
        
      <!-- Sidebar -->
     

         


















