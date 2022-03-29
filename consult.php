<?php if (isset($_SESSION['C_ID']))?>
<?php include('includes/connection.php');?>  
<!--header area-->
<?php include 'includes/header.php'; ?>
<!--sidebar area-->
<?php include 'includes/sidebar.php'; ?>
<!--header-->
        <div class="card-header">
                <center><h2 class=""><a href="consult.php">Nutritionist-Dieticians</a></h2></center>
        </div>
        <hr class="invis">
<!-- Trigger the modal with a button -->
<!-- <a type="button" class="fas fa-fw fa-question" data-toggle="modal" data-target="#myModal"></a> -->
<?php include 'includes/cakes.php'; ?>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">FAQ</h4>
      </div>
      <div class="modal-body">

      <div class="powr-faq" id="00a13fca_1635342170"></div>
 <script src="https://www.powr.io/powr.js?platform=html"></script>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    </div>
</div>

<!-- Live chat-->
<!-- <?php include 'livechat.php'; ?> -->
<!-- Live chat-->  
      <!--footer area-->
<?php include 'includes/footer.php'; ?>