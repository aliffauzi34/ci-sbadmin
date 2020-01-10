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
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Charts</li>
        </ol>


        <!-- Area Chart Example-->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-chart-area"></i>
            Area Chart Example</div>
          <div class="card-body">
            <canvas id="myAreaChart" width="100%" height="30"></canvas>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

        <div class="row">
          <div class="col-lg-8">
            <div class="card mb-3">
              <div class="card-header">
                <i class="fas fa-chart-bar"></i>
                Bar Chart Example</div>
              <div class="card-body">
                <canvas id="myBarChart" width="100%" height="50"></canvas>
              </div>
              <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card mb-3">
              <div class="card-header">
                <i class="fas fa-chart-pie"></i>
                Pie Chart Example</div>
              <div class="card-body">
                <canvas id="myPieChart" width="100%" height="100"></canvas>
              </div>
              <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>
          </div>
        </div>

        <p class="small text-center text-muted my-5">
          <em>More chart examples coming soon...</em>
        </p>

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
  <script src="http://localhost/cifirst/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="http://localhost/cifirst/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="http://localhost/cifirst/assets/vendor/chart.js/Chart.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="http://localhost/cifirst/assets/js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="http://localhost/cifirst/assets/js/demo/chart-area-demo.js"></script>
  <script src="http://localhost/cifirst/assets/js/demo/chart-bar-demo.js"></script>
  <script src="http://localhost/cifirst/assets/js/demo/chart-pie-demo.js"></script>
</body>

</html>
