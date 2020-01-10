<!DOCTYPE html>
<html lang="en">

	<?php  $this->load->view('_part/head.php') ?>
<body id="page-top">

	<?php $this->load->view('_part/navbar.php') ?>
  <div id="wrapper">

    <?php $this->load->view('_part/sidebar.php') ?>
    <div id="content-wrapper">

      <div class="container-fluid">


       <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.html">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Blank Page</li>
        </ol>

        <!-- Page Content -->
        <h1>Blank Page</h1>
        <hr>
        <p>This is a great starting point for new custom pages.</p>

      </div>
      <!-- /.container-fluid -->

      <?php $this->load->view('_part/footer.php') ?>
    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
<?php $this->load->view('_part/logoutm.php') ?>
<!-- Bootstrap core JavaScript-->
  <script src="http://localhost/cifirst/assets/vendor/jquery/jquery.min.js"></script>
  <script src="http://localhost/cifirst/assets/endor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="http://localhost/cifirst/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="http://localhost/cifirst/assets/js/sb-admin.min.js"></script>

</body>

</html>
