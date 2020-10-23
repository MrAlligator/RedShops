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
        <?php $this->load->view("user/_partials/product1.php") ?>
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