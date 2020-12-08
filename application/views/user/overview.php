<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title> RedShop  &middot;</title>
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

    <section class="products">
      <div class="container">
        <?php $this->load->view("user/_partials/product1.php") ?>
        <div class="align-right align-center-xs">
          <hr class="offset-sm">
          <a href="<?= base_url('user/kemejapanjang') ?>"> <h5 class="upp">Selengkapnya...</h5> </a>
        </div>
      </div>
    </section>

    <section class="products">
      <div class="container">
        <?php $this->load->view("user/_partials/product5.php") ?>
        <div class="align-right align-center-xs">
          <hr class="offset-sm">
          <a href="<?= base_url('user/kemejapendek') ?>"> <h5 class="upp">Selengkapnya...</h5> </a>
        </div>
      </div>
    </section>

    <section class="products">
      <div class="container">
        <?php $this->load->view("user/_partials/product2.php") ?>
        <div class="align-right align-center-xs">
          <hr class="offset-sm">
          <a href="<?= base_url('user/kaospanjang') ?>"> <h5 class="upp">Selengkapnya...</h5> </a>
        </div>
      </div>
    </section>

    <section class="products">
      <div class="container">
        <?php $this->load->view("user/_partials/product3.php") ?>
        <div class="align-right align-center-xs">
          <hr class="offset-sm">
          <a href="<?= base_url('user/kaospendek') ?>"> <h5 class="upp">Selengkapnya...</h5> </a>
        </div>
      </div>
    </section>

    <section class="products">
      <div class="container">
        <?php $this->load->view("user/_partials/product6.php") ?>
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
    <?php $this->load->view("user/_partials/modal.php") ?>

    <?php $this->load->view("user/_partials/logout.php") ?>

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