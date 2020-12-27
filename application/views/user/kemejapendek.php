<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title> REDSHOP &middot; <?php echo $title ?></title>
    <?php $this->load->view("user/_partials/head.php") ?>
  </head>
  <body>
    
    <?php if (isset($user['username'])) : ?>
      <?php $this->load->view("user/_partials/cart.php") ?>
      <?php $this->load->view("user/_partials/toplinks.php") ?>
    <?php else : ?>
      <?php $this->load->view("user/_partials/toplinks.php") ?>
    <?php endif; ?>
    
    <nav class="navbar navbar-default">
        <?php $this->load->view("user/_partials/navbarkemeja.php") ?>
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
          <?php
          if(count($produk)>0)
          {
            foreach ($produk as $data) {
              ?>
              <?php 
                echo form_open('user/cart/add');
                echo form_hidden('id', $data->id_produk);
                echo form_hidden('qty', 1);
                echo form_hidden('price', $data->harga_produk);
                echo form_hidden('name', $data->nama_produk);
                echo form_hidden('options' , array('size' => 'L'));
                echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));
              ?>
              <div class="col-sm-6 col-md-3 product">
              <div class="body">
                <a href=""><img src="<?= base_url('assets/img/products/'.$data->foto_produk) ?>" width="300px" height="250px" /></a>
        
                <div class="content align-center">
                <p class="price"><?= $data->harga_produk ?></p>
                <h2 class="h3"><?= $data->nama_produk ?></h2>
                <hr class="offset-sm">
        
                <a class="btn btn-link" href="<?= site_url('user/detailproduk/lihat/'.$data->id_produk) ?>"> <i class="ion-android-open"></i> Details</a>
                <?php if(isset($user['username'])) : ?>
                  <button class="btn btn-primary btn-sm toastrDefaultSuccess rounded"> <i class="ion-bag"></i> Add to cart</button>
                <?php else : ?>
                  <a href="#signin" data-toggle="modal" data-target="#Modal-SignIn" class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</a>
                <?php endif ; ?>
                </div>
              </div>
              </div>
              <?php echo form_close(); ?>
              <?php
            }
          }
          ?>
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
    <script src="<?= base_url('assets/plugins/toastr/toastr.min.js') ?>"></script>
    <script type="text/javascript">
      $('.toastrDefaultSuccess').click(function() {
        toastr.success('Berhasil ditambahkan ke keranjang')
      });
    </script>

  </body>
</html>