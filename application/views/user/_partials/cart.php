  <?php 
    $keranjang = $this->cart->contents(); 
    $jml_item = 0;
    foreach ($keranjang as $key => $value) {
      $jml_item = $jml_item + $value['qty'];
    }
  ?>
    <div class="cart" data-toggle="inactive">
      <div class="label">
        <i class="ion-bag"></i> <?= $jml_item ?>
      </div>

      <div class="overlay"></div>

      <div class="window">
        <div class="title">
          <button type="button" class="close"><i class="ion-android-close"></i></button>
          <h4>Shopping cart</h4>
        </div>

        <div class="content">
          <?php foreach ($keranjang as $key => $value) {
            $barang = $this->product_model->getById($value['id']);  
          ?>
          <div class="media">
            <div class="media-left">
              <a href="#">
                <img class="media-object" src="<?= base_url('assets/img/products/'.$barang->foto_produk)?>" alt="HP Chromebook 11"/>
              </a>
            </div>
            <div class="media-body">
              <h4 class="media-heading"><?= $value['name'] ?></h4>
              <p class="price">Harga = Rp.<?= number_format($value['price'],0)?>,-</p>
              <p class="price">Subtotal = Rp.<?= number_format($value['subtotal'])?>,-</p>
            </div>
            <div class="controls">
              <div class="input-group">
                <input type="text" class="form-control input-sm" placeholder="Qty" value="<?= $value['qty'] ?>" readonly>
              </div><!-- /input-group -->

              <a href="#remove"> <i class="ion-trash-b"></i> Remove </a>
            </div>
          </div>
          <?php } ?>
          <tr>
            <td colspan="2"> </td>
            <td class="right"><strong>Total : </strong></td>
            <td class="right">Rp.<?php echo $this->cart->format_number($this->cart->total()); ?>,-</td>
          </tr>
        </div>

        <div class="checkout container-fluid">
          <div class="row">
            <div class="col-xs-12 col-sm-12 align-right">
              <a class="btn btn-primary" href="checkout/"> Checkout order </a>
            </div>
          </div>
        </div>
      </div>
    </div>