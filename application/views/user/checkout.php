<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title> RedShop &middot; <?php echo $title ?></title>
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

        <h2>Checkout Belanja</h2>
        <!-- Main content -->
        <div class="invoice p-3 mb-3">
            <!-- title row -->
            <div class="row">
                <div class="col-sm-4">
                    <h2>
                        <small>
                            <?php
                                $hari= date("l");
                                if ($hari = "Sunday"){
                                    echo "Minggu";
                                } elseif($hari = "Monday") {
                                    echo "Senin";
                                } elseif($hari = "Tuesday") {
                                    echo "Selasa";
                                } elseif($hari = "Wednesday") {
                                    echo "Rabu";
                                } elseif($hari = "Thursday") {
                                    echo "Kamis";
                                } elseif($hari = "Friday") {
                                    echo "Jumat";
                                } else {
                                    echo "Sabtu";
                                }
                                echo date(", d F Y")
                            ?>
                        </small>
                    </h2>
                </div>
                <!-- /.col -->
            </div>
            <!-- info row -->
            <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                    Dari
                    <address>
                        <strong>RedShop Jember</strong><br>
                        <?= $alamattoko->alamat_toko ?><br>
                        Telepon: <?= $alamattoko->no_telepon ?><br>
                        Email: redshop0990@gmail.com
                    </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                    Kepada
                    <address>
                        <strong><?php echo $user['name']; ?></strong><br>
                        <?php echo $user['alamat']; ?><br>
                        Kabupaten <?php echo $user['kab']; ?>, <?php echo $user['prov']; ?><br>
                        Phone: <?php echo $user['telp']; ?><br>
                        Email: <?php echo $user['email']; ?>
                    </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                    <b>Invoice #<?php echo uniqid('invc')?></b><br>
                    <br>
                    <b>Order ID:</b> <?php echo uniqid('ordid')?><br>
                    <b>Payment Due:</b> <?php echo date('d-M-Y')?><br>
                    <b>Account:</b> <?php echo $user['username']; ?>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- Table row -->
            <div class="row">
                <div class="col-sm-12 table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nama Barang</th>
                                <th style="width: 19%;">Ukuran</th>
                                <th style="width: 10%;">Qty</th>
                                <th style="width: 19%;">Harga</th>
                                <th style="width: 10%;">Berat</th>
                                <th style="width: 20%; text-align:right;">Total Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            $total_berat = 0;
                            foreach ($this->cart->contents() as $items) {
                                $barang = $this->product_model->getById($items['id']);
                                $berat = $items['qty'] * $barang->berat;

                                $total_berat = $total_berat + $berat;
                            ?>
                                <tr>
                                    <td><?php echo $items['name']; ?></td>
                                    <td>
                                        <?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>
                                            <?php echo $option_value ?>
                                        <?php endforeach; ?>
                                    </td>
                                    <td><?php echo $items['qty']; ?></td>
                                    <td style="text-align:left">Rp.<?php echo $this->cart->format_number($items['price']); ?></td>
                                    <td style="text-align:left"><?= $barang->berat * $items['qty'] ?> gr</td>
                                    <td style="text-align:right;">Rp.<?php echo $this->cart->format_number($items['subtotal']); ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <div class="row">
                <!-- accepted payments column -->
                <div class="col-sm-6">
                    Tujuan :
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Provinsi</label>
                            <select class="form-control" name="provinsi"></select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Kabupaten/Kota</label>
                            <select class="form-control" name="kabupaten"></select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Ekspedisi</label>
                            <select class="form-control" name="ekspedisi"></select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Paket</label>
                            <select class="form-control" name="paket"></select>
                        </div>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th style="width:40%">Subtotal:</th>
                                <td style="text-align:right;">Rp.<?php echo $this->cart->format_number($this->cart->total()); ?></td>
                            </tr>
                            <tr>
                                <th>Total Berat</th>
                                <td style="text-align:right;"><?= $total_berat ?> gr</td>
                            </tr>
                            <tr>
                                <th>Ongkir</th>
                                <td style="text-align:right;"><label for="">Gratis Ongkir</label></td>
                            </tr>
                            <tr>
                                <th>Total:</th>
                                <td style="text-align:right;"><label for="">Rp.<?php echo ($this->cart->format_number($this->cart->total())); ?></label></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- this row will not appear when printing -->
            <div class="row no-print">
                <div class="col-sm-6">
                    <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i>Buat Pesanan</button>
                </div>
            </div>
        </div>

        </hr>
    </div>

    <hr class="offset-lg">
    <hr class="offset-sm">

    <!-- Script -->
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

    <script>
        $(document).ready(function() {
            //masukkan data ke select provinsi
            $.ajax({
                type: "POST",
                url: "<?= base_url('rajaongkir/provinsi') ?>",
                success: function(hasil_provinsi) {
                    $("select[name=provinsi]").html(hasil_provinsi);
                }
            });

            //masukkan data ke select kabupaten
            $("select[name=provinsi]").on("change", function() {
                var id_provinsi_terpilih = $("option:selected", this).attr("id_provinsi");
                $.ajax({
                    type: "POST",
                    url: "<?= base_url('rajaongkir/kabupaten') ?>",
                    data: 'id_provinsi=' + id_provinsi_terpilih,
                    success: function(hasil_kabupaten) {
                        $("select[name=kabupaten]").html(hasil_kabupaten);
                    }
                });
            });

            $("select[name=kabupaten]").on("change", function() {
                $.ajax({
                    type: "POST",
                    url: "<?= base_url('rajaongkir/ekspedisi') ?>",
                    success: function(hasil_ekspedisi) {
                        $("select[name=ekspedisi]").html(hasil_ekspedisi);
                    }
                });
            });

            $("select[name=ekspedisi]").on("change", function() {
                $.ajax({
                    type: "POST",
                    url: "<?= base_url('rajaongkir/shipping') ?>",
                    success: function(hasil_paket) {
                        $("select[name=paket]").html(hasil_paket);
                    }
                });
            });
        });
    </script>

    <footer>
        <?php $this->load->view("user/_partials/footer.php") ?>
    </footer>

    <!-- Modal -->
    <?php $this->load->view("user/_partials/modal.php") ?>
    <?php $this->load->view("user/_partials/logout.php") ?>

    <?php $this->load->view("user/_partials/js-utama.php") ?>

</body>

</html>