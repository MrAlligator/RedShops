<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title> RedShop &middot; <?= $title ?></title>
    <?php $this->load->view("user/_partials/head.php") ?>
</head>

<body>

    <?php $this->load->view("user/_partials/toplinks.php") ?>

    <nav class="navbar navbar-default">
        <?php $this->load->view("user/_partials/navbar.php") ?>
    </nav>

    <hr class="offset-lg">
    <hr class="offset-lg">

    <div class="container">
        <hr class="offset-md">
        <hr class="offset-md">
        <hr class="offset-md">
        <div class="col-sm-12">
            <?php
            echo form_open('user/cart/updatein');
            echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));
            ?>
            <table class="table" cellpadding="6" cellspacing="1" style="width:100%">
                <tr>
                    <th width="85px">QTY</th>
                    <th>Deskripsi</th>
                    <th style="text-align:right">Harga</th>
                    <th style="text-align:right">Berat</th>
                    <th style="text-align:right">Sub-Total</th>
                    <th class="text-center">Action</th>
                </tr>

                <?php $i = 1; ?>
                <?php $x = 'options'; ?>

                <?php
                $total_berat = 0;
                foreach ($this->cart->contents() as $items) : {
                        $barang = $this->product_model->getById($items['id']);
                        $berat = $items['qty'] * $barang->berat;

                        $total_berat = $total_berat + $berat;
                    }
                ?>
                    <tr>
                        <?php echo form_hidden($i . '[rowid]', $items['rowid']); ?>
                        <td>
                            <?php
                            echo form_input(array(
                                'name' => $i . '[qty]',
                                'value' => $items['qty'],
                                'maxlength' => '3',
                                'size' => '5',
                                'type' => 'number',
                                'class' => 'form-control',
                                'min' => '1'
                            ));
                            ?>
                        </td>
                        <td>
                            <?php echo $items['name']; ?>
                            <?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>
                            <p>
                                <?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>
                                    <label for="option">Pilihan :</label>
                                    <select name="<?= $i.'[size]' ?>">
                                    <?php echo $option_value ?>
                                    <?php if($option_value == "S") : ?>
                                        <option value="S" selected>S</option>
                                        <option value="M">M</option>
                                        <option value="L">L</option>
                                        <option value="XL">XL</option>
                                        <option value="XXL">XXL</option>
                                    <?php elseif($option_value == "M") : ?>
                                        <option value="S">S</option>
                                        <option value="M" selected>M</option>
                                        <option value="L">L</option>
                                        <option value="XL">XL</option>
                                        <option value="XXL">XXL</option>
                                    <?php elseif($option_value == "L") : ?>
                                        <option value="S">S</option>
                                        <option value="M">M</option>
                                        <option value="L" selected>L</option>
                                        <option value="XL">XL</option>
                                        <option value="XXL">XXL</option>
                                    <?php elseif($option_value == "XL") : ?>
                                        <option value="S">S</option>
                                        <option value="M">M</option>
                                        <option value="L">L</option>
                                        <option value="XL" selected>XL</option>
                                        <option value="XXL">XXL</option>
                                    <?php elseif($option_value == "XXL") : ?>
                                        <option value="S">S</option>
                                        <option value="M">M</option>
                                        <option value="L">L</option>
                                        <option value="XL">XL</option>
                                        <option value="XXL" selected>XXL</option>
                                    <?php endif; ?>
                                    </select>
                                <?php endforeach; ?>
                            </p>
                            <?php endif; ?>
                        </td>
                        <td style="text-align:right">Rp.<?php echo $this->cart->format_number($items['price']); ?></td>
                        <td style="text-align:right"><?= $barang->berat * $items['qty'] ?> gr</td>

                        <td style="text-align:right">Rp.<?php echo $this->cart->format_number($items['subtotal']); ?></td>
                        <td class="text-center">
                            <a href="<?= base_url('user/cart/deletein/' . $items['rowid']) ?>" class="btn btn-danger btn-sm"><i class="ion-ios-trash"> Hapus</i></a>
                        </td>
                    </tr>

                    <?php $i++; ?>

                <?php endforeach; ?>

                <tr>
                    <td colspan="2"> </td>
                    <td style="text-align:right" class="right">
                        <h3><strong>Total</strong></h3>
                    </td>
                    <td style="text-align:right" class="right">
                        <h3>Rp.<?php echo $this->cart->format_number($this->cart->total()); ?></h3>
                    </td>
                </tr>

            </table>

            <div class="row">
                <div class="col-sm">
                    <button class="btn btn-primary"><i class="ion-android-clipboard"></i> Update Keranjang</button>
                    <a href="<?= base_url('user/cart/clear') ?>" class="btn btn-danger"><i class="ion-ios-trash-outline"></i> Bersihkan Keranjang</a>
                    <a href="<?= base_url('user/cart/checkout') ?>" class="btn btn-primary"><i class="ion-card"></i> Checkout</a>
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
    <hr class="offset-lg">
    <hr class="offset-sm">
    <footer>
        <?php $this->load->view("user/_partials/footer.php") ?>
    </footer>

    <!-- Modal -->
    <?php $this->load->view("user/_partials/modal.php") ?>

    <?php $this->load->view("user/_partials/logout.php") ?>

    <?php $this->load->view("user/_partials/js-utama.php") ?>
    <script src="<?= base_url('assets/plugins/toastr/toastr.min.js') ?>"></script>
    <script type="text/javascript">
        $('.toastrDefaultSuccess').click(function() {
            toastr.success('Berhasil ditambahkan ke keranjang')
        });
    </script>

</body>

</html>