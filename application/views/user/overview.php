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

    <div class="bars">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-4 no-padding padding-xs">
            <div class="bar medium" data-background="<?php echo base_url('assets/img/bars/macbook.jpg') ?>">
              <h3 class="title black">MacBook Air</h3>

              <div class="wrapper">
                <div class="content">
                  <hr class="offset-sm">
                  <a href="./store/" rel="nofollow" class="btn btn-default black"> Buy now </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="bar small" data-background="<?php echo base_url('assets/img/bars/dellinspirion.jpg') ?>">
              <h3 class="title black">Dell Inspirion 7000</h3>

              <div class="wrapper">
                <div class="content">
                  <hr class="offset-sm">
                  <a href="./store/" rel="nofollow" class="btn btn-primary black"> Buy now </a>
                </div>
              </div>
            </div>

            <hr class="offset-xs">
            <hr class="offset-xs">

            <div class="bar small" data-background="<?php echo base_url('assets/img/bars/surfacestudio.jpg') ?>">
              <h3 class="title">Surface Studio</h3>
              
              <div class="wrapper">
                <div class="content">
                  <hr class="offset-sm">
                  <a href="./store/" rel="nofollow" class="btn btn-primary black"> Buy now </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 no-padding hidden-xs hidden-sm">
            <div class="bar medium" data-background="<?php echo base_url('assets/img/bars/accessories.jpg') ?>">
              <h3 class="title black">Accessories</h3>
              
              <div class="wrapper">
                <div class="content">
                  <hr class="offset-sm">
                  <a href="./store/" rel="nofollow" class="btn btn-primary black"> Buy now </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr class="offset-lg">
    <hr class="offset-md">


    <section class="products">
      <?php $this->load->view("user/_partials/product1.php") ?>
    </section>

    <section class="products">
      <?php $this->load->view("user/_partials/product2.php") ?>
    </section>

    <section class="products">
      <?php $this->load->view("user/_partials/product3.php") ?>
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