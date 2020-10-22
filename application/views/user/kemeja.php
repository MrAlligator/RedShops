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


    <header>
      <div class="carousel" data-count="3" data-current="1">

        <div class="items">
          <button class="btn btn-control" data-direction="right"> <i class="ion-ios-arrow-right"></i></button>
          <button class="btn btn-control" data-direction="left"> <i class="ion-ios-arrow-left"></i></button>


          <div class="item center" data-marker="1">
            <img src="<?php echo base_url('assets/img/carousel/bckg-2.jpg') ?>" alt="Background" class="background hidden-xs hidden-sm"/>
            <img src="<?php echo base_url('assets/img/carousel/bckg-2-sm.jpg') ?>" alt="Background" class="background visible-sm"/>
            <img src="<?php echo base_url('assets/img/carousel/bckg-2-xs.jpg') ?>" alt="Background" class="background visible-xs"/>

            <div class="content">
              <div class="outside-content">
                <div class="inside-content">
                  <div class="container align-right">

                    <h1 class="h3 colorful blue hidden-xs">Provide lightweight and powerull</h1>

                    <hr class="offset-sm">
                    <h2 class="h1 lg upp colorful blue">New amazing <br> laptops</h2>
                    <hr class="offset-md">
                    <hr class="offset-md">
                    <a href="./store/" rel="nofollow" class="btn btn-primary btn-lg black"> More laptops </a>

                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="item" data-marker="2">
          <img src="<?php echo base_url('assets/img/carousel/bckg-1.jpg') ?>" alt="Background" class="background hidden-xs hidden-sm"/>
            <img src="<?php echo base_url('assets/img/carousel/bckg-1-sm.jpg') ?>" alt="Background" class="background visible-sm"/>
            <img src="<?php echo base_url('assets/img/carousel/bckg-1-xs.jpg') ?>" alt="Background" class="background visible-xs"/>

            <!-- <img src="assets/img/carousel/newlaptops.jpg" alt="New laptops" title="New laptops" class="item-left hidden-xs"/> -->

            <div class="content">
              <div class="outside-content">
                <div class="inside-content">
                  <div class="container">

                    <h1 class="h3 colorful blue hidden-xs">Device is designed for the creative people</h1>
                    <hr class="offset-sm">

                    <h2 class="h1 lg upp colorful blue">Apple <br> iMac 27 Retina</h2>
                    <hr class="offset-md">
                    <hr class="offset-md">
                    <a href="./store/" rel="nofollow" class="btn btn-primary btn-lg black"> View products </a>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="item" data-marker="3">
          <img src="<?php echo base_url('assets/img/carousel/bckg-3.jpg') ?>" alt="Background" class="background hidden-xs hidden-sm"/>
            <img src="<?php echo base_url('assets/img/carousel/bckg-3-sm.jpg') ?>" alt="Background" class="background visible-sm"/>
            <img src="<?php echo base_url('assets/img/carousel/bckg-3-xs.jpg') ?>" alt="Background" class="background visible-xs"/>

            <!-- <img src="assets/img/carousel/ipadair2.jpg" alt="Apple Devices" title="Apple Devices" class="item-right hidden-xs"/> -->

            <div class="content">
              <div class="outside-content">
                <div class="inside-content">
                  <div class="container align-right">
                  
                    <h1 class="h3 colorful blue hidden-xs">Luxury watches, business tablets and 3D touch: <br> How Apple plans to stay ahead in mobile.</h1>

                    <hr class="offset-sm">
                    <h2 class="h1 lg upp colorful blue">Brand new day <br class="hidden-xs"> for business</h2>
                    <hr class="offset-md">
                    <hr class="offset-md">
                    <a href="./blog/" rel="nofollow" class="btn btn-primary btn-lg black"> View article </a>
                      
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <ul class="markers">
          <li data-marker="1" data-style="white" class="active"></li>
          <li data-marker="2" data-style="white"></li>
          <li data-marker="3" data-style="white"></li>
        </ul>

      </div>
    </header>
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