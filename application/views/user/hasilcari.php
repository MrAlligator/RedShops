<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>RedShop &middot; <?= $title ?></title>
		<?php $this->load->view("user/_partials/head.php"); ?>
	</head>
	<body>

	<?php $this->load->view("user/_partials/toplinks.php") ?>

	<nav class="navbar navbar-default">
        <?php $this->load->view("user/_partials/navbar.php") ?>
	</nav>
	
    <hr class="offset-lg">
    <hr class="offset-md">
	<hr class="offset-lg">
    <hr class="offset-md">
	
	<section class="products">
      <div class="container">
        <h2 class="h2 upp align-center"> Hasil Pencarian </h2>
        <hr class="offset-lg">

        <div class="row">
			<?php
				if(count($cari)>0)
				{
					foreach ($cari as $data) {
						?>
						<div class="col-sm-6 col-md-3 product">
						<div class="body">
						  <a href="./"><img src="<?= base_url('assets/img/products/'.$data->foto_produk) ?>" alt="Apple iMac 27 Retina"/></a>
			
						  <div class="content align-center">
							<p class="price"><?= $data->harga_produk ?></p>
							<h2 class="h3"><?= $data->nama_produk ?></h2>
							<hr class="offset-sm">
			
							<button class="btn btn-link"> <i class="ion-android-open"></i> Details</button>
							<button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button>
						  </div>
						</div>
					  </div>
					  <?php
					}
				}

				else
				{
					echo "Data tidak ditemukan";
				}	

			?>
        </div>
      </div>
    </section>
	<?php $this->load->view("user/_partials/modal.php") ?>
	<?php $this->load->view("user/_partials/logout.php") ?>

	<?php $this->load->view("user/_partials/js-utama.php") ?>
	</body>
</html>