<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title> RedShops &middot; <?= $produk->nama_produk ?></title>
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
      <?php $this->load->view("user/_partials/navbar.php") ?>
    </nav>
    <hr class="offset-lg">
    <hr class="offset-lg">
    <hr class="offset-lg hidden-xs">


    <section class="product">
      <div class="container">
        <div class="row">
          <div class="col-sm-7 col-md-7 white no-padding">
            <div class="carousel-product" data-count="3" data-current="1">

              <div class="items">
                <button class="btn btn-control" data-direction="right"> <i class="ion-ios-arrow-right"></i></button>
                <button class="btn btn-control" data-direction="left"> <i class="ion-ios-arrow-left"></i></button>

                <div class="item center" data-marker="1">
                  <img src="<?php echo base_url('assets/img/products/'. $produk->foto_produk) ?>" alt="Microsoft Surface Studio" class="background"/>
                </div>
                
                <div class="item" data-marker="2">
                  <img src="<?php echo base_url('assets/img/products/'. $produk->foto_produk2) ?>" alt="Microsoft Surface Studio" class="background"/>
                </div>

                <div class="item" data-marker="3">
                  <img src="<?php echo base_url('assets/img/products/'. $produk->foto_produk3) ?>" alt="Microsoft Surface Studio" class="background"/>
                </div>
              </div>

              <ul class="markers">
                <li data-marker="1" class="active"></li>
                <li data-marker="2"></li>
                <li data-marker="3"></li>
              </ul>

            </div>
          </div>
          <div class="col-sm-5 col-md-5 no-padding-xs">
            <div class="caption">
              <img src="<?php echo base_url('assets/img/brands/microsoft.png') ?>" alt="Microsoft" class="brand hidden-xs hidden-sm" />

              <h1><?= $produk->nama_produk ?></h1>

              <p><?= $produk->deskripsi ?></p>
              <hr class="offset-md hidden-sm">
              <hr class="offset-sm visible-sm">
              <hr class="offset-xs visible-sm">

              <p class="price">Rp. <?= $produk->harga_produk ?>,-</p>
              <hr class="offset-md">

              <button class="btn btn-primary rounded"> <i class="ion-bag"></i> Add to cart</button>
              <?php if($produk->jenis_produk == 'Kemeja Lengan Panjang'): ?>
                <a href="<?= base_url('user/kemejapanjang') ?>" class="btn btn-link">Lihat yang lain</a>
              <?php elseif($produk->jenis_produk == 'Kemeja Lengan Pendek'): ?>
                <a href="<?= base_url('user/kemejapendek') ?>" class="btn btn-link">Lihat yang lain</a>
              <?php elseif($produk->jenis_produk == 'Jaket'): ?>
                <a href="<?= base_url('user/jaker') ?>" class="btn btn-link">Lihat yang lain</a>
              <?php elseif($produk->jenis_produk == 'Kaos Lengan Pendek'): ?>
                <a href="<?= base_url('user/kaospendek') ?>" class="btn btn-link">Lihat yang lain</a>
              <?php elseif($produk->jenis_produk == 'Kaos Lengan Panjang'): ?>
                <a href="<?= base_url('user/kaospanjang') ?>" class="btn btn-link">Lihat yang lain</a>
              <?php endif ; ?>
            </div>
          </div>
        </div>
        <hr class="offset-sm hidden-xs">

        <div class="row">
          <div class="col-sm-7 white sm-padding">
            <hr class="offset-sm visible-xs">

            <h2 class="h1"><?= $produk->nama_produk ?></h2>
            <br>

            <p>
              <?= $produk->deskripsi2 ?>
            </p>
            <br>

             <h2>Spesifikasi Produk</h2>
             <br>

              <div class="row specification">
                <div class="col-sm-4"> <label><?= $produk->nama_produk ?></label> </div>
                <div class="col-sm-8"> <p><?= $produk->deskripsi3 ?></p> </div>
              </div>
              <hr class="offset-lg">
          </div>
          <div class="col-sm-5 no-padding-xs">
            <div class="talk white">
              <h2 class="h3">Do you have any questions?</h2>
              <p class="">Whatsuping now with our manager</p>
              <hr class="offset-md">

              <a href="tel:+80005554465" class="btn btn-primary btn-sm"> <i class="ion-social-whatsapp"></i> 8000 555-44-65 </a>
              <hr class="offset-md visible-xs">
            </div>
            <hr class="offset-sm hidden-xs">            
          </div>
        </div>
      </div>
    </section>
    <hr class="offset-lg">


    <hr class="offset-lg">
    <hr class="offset-sm">
    <footer>
      <?php $this->load->view("user/_partials/footer.php") ?>
    </footer>

    <!-- Modal -->
    <?php $this->load->view("user/_partials/modal.php") ?>
    <?php $this->load->view("user/_partials/logout.php") ?>

    <?php $this->load->view("user/_partials/js-produk.php") ?>

  </body>
</html>