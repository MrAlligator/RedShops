        <h2 class="h2 upp align-center"> KEMEJA </h2>
        <hr class="offset-lg">

        <div class="row">

        <?php
				if(count($kemeja)>0)
				{
					foreach ($kemeja as $data) {
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
			  ?>


        </div>
