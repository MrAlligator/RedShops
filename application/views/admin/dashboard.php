<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo $title ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/favicon.png') ?>">
    <?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view("admin/_partials/sidebar.php") ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

        <!-- Topbar -->
        <?php $this->load->view("admin/_partials/topbar.php") ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800"></h1>
               
            </div>

            <!-- Content Row -->
            <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Data Produk</div>
                        <span class="info-box-number"><?php echo $totalproduk?></span>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                    </div>
                </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">User</div>
                        <span class="info-box-number"><?php echo $totaluser?></span>
                    </div>
                    <div class="col-auto">
                        <i class="fa fa-user fa-2x text-gray-300"></i>
                    </div>
                    </div>
                </div>
                </div>
            </div>

            <!-- Pending Requests Card Example -->
            <!--<div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Jumlah Pesanan</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">12</div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-shopping-cart text-gray-300"></i>
                    </div>-->
                  <!-- </div> 
                </div>
              </div>
            </div> -->
          </div>

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
          </div>

        </div>
        <!-- /.container-fluid -->


        </div>
      <!-- End of Main Content -->
      <!-- Footer -->
      <?php $this->load->view("admin/_partials/footer.php") ?>
      <!-- End of Footer -->

    <!-- End of Content Wrapper -->
  <?php $this->load->view("admin/_partials/modal.php") ?>
  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <?php $this->load->view("admin/_partials/scrolltop.php") ?>

  <?php $this->load->view("admin/_partials/js.php") ?>        

</body>

</html>
