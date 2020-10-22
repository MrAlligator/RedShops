<!DOCTYPE html>
<html lang="en">
  <head>
    <?php $this->load->view("user/_partials/head.php") ?>
  </head>
  <body>
    
    <?php $this->load->view("user/_partials/cart.php") ?>

    <?php $this->load->view("user/_partials/toplinks.php") ?>

    
    <nav class="navbar navbar-default">
        <?php $this->load->view("user/_partials/navbarcat.php") ?>
    </nav>


    <header>
      <div class="carousel" data-count="3" data-current="1">
        <div class="items">
            <?php $this->load->view("user/_partials/header1.php") ?>
        </div>
      </div>
    </header>

    <hr class="offset-lg">
    <hr class="offset-md">


    <section class="products">
      <div class="container">
        <hr class="offset-lg">

        <div class="row">

          <div class="col-sm-6 col-md-3 product">
            <div class="body">
              <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
              <a href="./"><img src="<?php echo base_url('assets/img/products/apple-imac-27-retina.jpg') ?>" alt="Apple iMac 27 Retina"/></a>

              <div class="content align-center">
                <p class="price">$2099.99</p>
                <h2 class="h3">iMac 27 Retina</h2>
                <hr class="offset-sm">

                <a href="<?php echo base_url('index.php/user/detailproduk') ?>"><button class="btn btn-link"> <i class="ion-android-open"></i> Details</button></a>
                <button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 product">
            <div class="body">
              <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
              <a href="./"><img src="<?php echo base_url('assets/img/products/microsoft-surface-studio.jpg') ?>" alt="Microsoft Surface Studio"/></a>

              <div class="content align-center">
                <p class="price">$3749.99</p>
                <h2 class="h3">Surface Studio</h2>
                <hr class="offset-sm">

                <button class="btn btn-link"> <i class="ion-android-open"></i> Details</button>
                <button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 product">
            <div class="body">
              <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
              <a href="./"><img src="<?php echo base_url('assets/img/products/dell-inspiron-23.jpg') ?>" alt="Dell Inspion 23"/></a>

              <div class="content align-center">
                <p class="price">$1987.99</p>
                <h2 class="h3">Dell Inspion 23</h2>
                <hr class="offset-sm">

                <button class="btn btn-link"> <i class="ion-android-open"></i> Details</button>
                <button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button>
              </div>
            </div>
          </div>


          <div class="col-sm-6 col-md-3 product">
            <div class="body">
              <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
              <a href="./"><img src="<?php echo base_url('assets/img/products/lenovo-ideacenter.jpg') ?>" alt="Lenovo IdeaCenter"/></a>

              <div class="content align-center">
                <p class="price">$2487.99</p>
                <h2 class="h3">Lenovo IdeaCenter</h2>
                <hr class="offset-sm">

                <button class="btn btn-link"> <i class="ion-android-open"></i> Details</button>
                <button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button>
              </div>
            </div>
          </div>
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

    <?php $this->load->view("user/_partials/forgotpass.php") ?>

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

    <?php $this->load->view("user/_partials/js-utama.php") ?>

  </body>
</html>