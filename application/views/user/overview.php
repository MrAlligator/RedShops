<!DOCTYPE html>
<html lang="en">
  <head>
    <?php $this->load->view("user/_partials/head.php") ?>
  </head>
  <body>
    
    <?php $this->load->view("user/_partials/cart.php") ?>

    <?php $this->load->view("user/_partials/toplinks.php") ?>

    
    <nav class="navbar navbar-default">
        <?php $this->load->view("user/_partials/navbar.php") ?>
    </nav>

    <?php $this->load->view("user/_partials/header.php") ?>
    
    <hr class="offset-lg">
    <hr class="offset-lg">

    <?php $this->load->view("user/_partials/bars.php") ?>

    <hr class="offset-lg">
    <hr class="offset-md">


    <section class="products">
      <div class="container">
        <?php $this->load->view("user/_partials/product1.php") ?>
        <div class="align-right align-center-xs">
          <hr class="offset-sm">
          <a href="./store/"> <h5 class="upp">View all desktops </h5> </a>
        </div>
      </div>
    </section>

    <section class="products">
      <div class="container">
        <?php $this->load->view("user/_partials/product2.php") ?>
        <div class="align-right align-center-xs">
          <hr class="offset-sm">
          <a href="./store/"> <h5 class="upp">View all devices </h5> </a>
        </div>
      </div>
    </section>

    <section class="products">
      <div class="container">
        <?php $this->load->view("user/_partials/product3.php") ?>
        <div class="align-right align-center-xs">
          <hr class="offset-sm">
          <a href="./store/"> <h5 class="upp">View all tablets </h5> </a>
        </div>
      </div>
    </section>

    <section class="products">
      <div class="container">
        <?php $this->load->view("user/_partials/product4.php") ?>
        <div class="align-right align-center-xs">
          <hr class="offset-sm">
          <a href="./store/"> <h5 class="upp">View all tablets </h5> </a>
        </div>
      </div>
    </section>

    <hr class="offset-lg">
    <hr class="offset-sm">
    <footer>
      <?php $this->load->view("user/_partials/footer.php") ?>
    </footer>

    <!-- Modal -->
    <?php $this->load->view("user/_partials/login.php") ?>

    <?php $this->load->view("user/_partials/regis.php") ?>

    <?php $this->load->view("user/_partials/regis.php") ?>

    <!-- 
    <div class="modal fade" id="Modal-Gallery" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="ion-android-close"></i></span></button>
            <h4 class="modal-title">Title</h4>
          </div>
          <div class="modal-body">
          </div>
          <div class="modal-footer">
          </div>
        </div>
      </div>
    </div>
    -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url('assets/js/jquery-latest.min.js') ?>"></script>
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/core.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/store.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/carousel.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.touchSwipe.min.js') ?>"></script>

    <script type="text/javascript" src="<?php echo base_url('assets/js/custom-scroll/jquery.mCustomScrollbar.concat.min.js') ?>"></script>


    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-ui-1.11.4.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.ui.touch-punch.js') ?>"></script>

  </body>
</html>