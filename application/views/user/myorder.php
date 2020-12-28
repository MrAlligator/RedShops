<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title> RedShop &middot; <?php echo $title ?></title>
    <?php $this->load->view("user/_partials/head.php") ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

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

        <div class="row">
            <?php

            if ($this->session->flashdata('message')) {
                echo '<div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-check"></i>';
                echo $this->session->flashdata('message');
                echo '</h5>
            </div>';
            }
            ?>

            <h2>Pesanan Saya</h2>

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="order-tab" data-toggle="tab" href="#order" role="tab" aria-controls="order" aria-selected="true">Order</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="diproses-tab" data-toggle="tab" href="#diproses" role="tab" aria-controls="diproses" aria-selected="false">Di Proses</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="dikirim-tab" data-toggle="tab" href="#dikirim" role="tab" aria-controls="dikirim" aria-selected="false">Di Kirim</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="selesai-tab" data-toggle="tab" href="#selesai" role="tab" aria-controls="selesai" aria-selected="false">Selesai</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="order" role="tabpanel" aria-labelledby="order-tab">
                    <table class="table">
                        <tr>
                            <th>No Order</th>
                            <th>Tanggal</th>
                            <th>Ekspedisi</th>
                            <th>Total Bayar</th>
                            <th>Action</th>
                        </tr>
                        <?php foreach ($belum_bayar as $key => $value) { ?>
                            <tr>
                                <td><?= $value->no_order ?></td>
                                <td><?= $value->tgl_transaksi ?></td>
                                <td>
                                    <b><?= $value->ekspedisi ?></b><br>
                                    Paket : <?= $value->paket ?><br>
                                    Ongkir : <?= number_format($value->ongkir, 0) ?>
                                </td>
                                <td>
                                    <b>Rp.<?= number_format($value->total_bayar, 0) ?></b><br>
                                    <?php if ($value->status_bayar == 0) { ?>
                                        <span class="badge badge-warning">Belum Bayar</span>
                                    <?php } elseif ($value->status_bayar == 1) { ?>
                                        <span class="badge badge-success">Sudah Bayar</span><br>
                                        <span class="badge badge-primary">Menunggu Verifikasi</span>
                                    <?php } ?>
                                </td>
                                <td>
                                    <?php if ($value->status_bayar == 0) { ?>
                                        <a href="<?= base_url('user/pesanan_saya/bayar/' . $value->id_transaksi) ?> " class="btn btn-primary btn-sm">Bayar</a><br><br>
                                    <?php } ?>
                                    <!-- <a href="https://api.whatsapp.com/send?phone=6285215822336&text=Hai%2C%20Admin%20RedShop.%20Saya%20<?= $user['username'] ?>.%0ASaya%20Melakukan%20Pemesanan%20dengan%20Rincian%20:%0ANomor%20Order%20=%20<?php echo $value->no_order ?>%0ANama%20Penerima%20=%20<?php echo $value->nama_penerima ?>%0AAlamat%20Penerima%20=%20<?php echo $value->alamat ?>,%20<?php echo $value->kabupaten ?>,%20<?php echo $value->provinsi ?>,%20<?php echo $value->kode_pos ?>%0ATelepon%20Penerima%20=%20<?php echo $value->no_telepon ?>%0AEkspedisi%20=%20<?php echo $value->ekspedisi ?>,%20<?php echo $value->paket ?>(<?php echo $value->estimasi ?>)%0AOngkos%20Kirim%20=%20Rp.<?php echo $value->ongkir ?>,-%0ASubtotal%20Pembelanjaan%20=%20Rp.<?php echo $value->grand_total ?>,-%0ATotal%20yang%20dibayarkan%20=%20Rp.<?php echo $value->total_bayar ?>,-%0A%0A%0ATerima%20Kasih" class="btn btn-primary btn-sm">Bayar</a><br><br> -->
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
                <div class="tab-pane fade" id="diproses" role="tabpanel" aria-labelledby="diproses-tab">
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </div>
                <div class="tab-pane fade" id="dikirim" role="tabpanel" aria-labelledby="dikirim-tab">
                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </div>
                <div class="tab-pane fade" id="selesai" role="tabpanel" aria-labelledby="selesai-tab">
                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </div>
            </div>

        </div>
    </div>


    <footer>
        <?php $this->load->view("user/_partials/footer.php") ?>
    </footer>

    <!-- Modal -->
    <?php $this->load->view("user/_partials/modal.php") ?>
    <?php $this->load->view("user/_partials/logout.php") ?>

    <?php $this->load->view("user/_partials/js-utama.php") ?>

</body>

</html>