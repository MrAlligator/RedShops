        <h2 class="h2 upp align-center"> KAOS PENDEK</h2>
        <hr class="offset-lg">

        <div class="row">
        <?php
          $tot = count($produk3);
          if($tot>0)
          {
            foreach ($produk3 as $data) {
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