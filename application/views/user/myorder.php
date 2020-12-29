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
                            <th>Nama Penerima</th>
                            <th>Alamat</th>
                            <th>No Telepon</th>
                            <th>Tanggal</th>
                            <th>Ekspedisi</th>
                            <th>Total Bayar</th>
                            <th>Action</th>
                        </tr>
                        <?php foreach ($belum_bayar as $key => $value) { ?>
                            <tr>
                                <td><?= $value->no_order ?></td>
                                <td><?= $value->nama_penerima ?></td>
                                <td><?= $value->alamat ?></td>
                                <td><?= $value->no_telepon ?></td>
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
                                    <?php } else { ?>
                                        <span class="badge badge-success">Sudah Bayar</span><br>
                                        <span class="badge badge-primary">Menunggu Verifikasi</span>
                                    <?php } ?>
                                </td>
                                <td>
                                    <?php if ($value->status_bayar == 0) { ?>
                                        <a href="<?= base_url('user/pesanan_saya/bayar/' . $value->id_transaksi) ?> " class="btn btn-primary btn-sm">Bayar</a><br>
                                    <?php } ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>

                <!-- Pesanan Di Proses -->
                <div class="tab-pane fade" id="diproses" role="tabpanel" aria-labelledby="diproses-tab">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No Order</th>
                                <th>Nama Penerima</th>
                                <th>Alamat</th>
                                <th>No Telepon</th>
                                <th>Tanggal</th>
                                <th>Ekspedisi</th>
                                <th>Total Bayar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($diproses as $key => $value) { ?>
                                <tr>
                                    <td><?= $value->no_order ?></td>
                                    <td><?= $value->nama_penerima ?></td>
                                    <td><?= $value->alamat ?></td>
                                    <td><?= $value->no_telepon ?></td>
                                    <td><?= $value->tgl_transaksi ?></td>
                                    <td>
                                        <b><?= $value->ekspedisi ?></b><br>
                                        Paket : <?= $value->paket ?><br>
                                        Ongkir : <?= number_format($value->ongkir, 0) ?>
                                    </td>
                                    <td>
                                        <b>Rp.<?= number_format($value->total_bayar, 0) ?></b><br>

                                        <span class="badge badge-success">Terverifikasi</span><br>
                                        <span class="badge badge-primary">Sedang Dikemas</span>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

                <!-- Dikirim -->
                <div class="tab-pane fade" id="dikirim" role="tabpanel" aria-labelledby="dikirim-tab">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No Order</th>
                                <th>Nama Penerima</th>
                                <th>Alamat</th>
                                <th>No Telepon</th>
                                <th>Tanggal</th>
                                <th>Ekspedisi</th>
                                <th>Total Bayar</th>
                                <th>No Resi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($dikirim as $key => $value) { ?>
                                <tr>
                                    <td><?= $value->no_order ?></td>
                                    <td><?= $value->nama_penerima ?></td>
                                    <td><?= $value->alamat ?></td>
                                    <td><?= $value->no_telepon ?></td>
                                    <td><?= $value->tgl_transaksi ?></td>
                                    <td>
                                        <b><?= $value->ekspedisi ?></b><br>
                                        Paket : <?= $value->paket ?><br>
                                        Ongkir : <?= number_format($value->ongkir, 0) ?>
                                    </td>
                                    <td>
                                        <b>Rp.<?= number_format($value->total_bayar, 0) ?></b><br>

                                        <span class="badge badge-success">Dikirim</span><br>
                                    </td>
                                    <td>
                                        <?= $value->no_resi ?><br>
                                        <a href="<?= base_url('user/pesanan_saya/diterima/'.$value->id_transaksi) ?>" class="btn btn-primary btn-sm">Diterima</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

                <!-- Diproses -->
                <div class="tab-pane fade" id="selesai" role="tabpanel" aria-labelledby="selesai-tab">
                <table class="table">
                        <thead>
                            <tr>
                                <th>No Order</th>
                                <th>Nama Penerima</th>
                                <th>Alamat</th>
                                <th>No Telepon</th>
                                <th>Tanggal</th>
                                <th>Ekspedisi</th>
                                <th>Total Bayar</th>
                                <th>No Resi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($diterima as $key => $value) { ?>
                                <tr>
                                    <td><?= $value->no_order ?></td>
                                    <td><?= $value->nama_penerima ?></td>
                                    <td><?= $value->alamat ?></td>
                                    <td><?= $value->no_telepon ?></td>
                                    <td><?= $value->tgl_transaksi ?></td>
                                    <td>
                                        <b><?= $value->ekspedisi ?></b><br>
                                        Paket : <?= $value->paket ?><br>
                                        Ongkir : <?= number_format($value->ongkir, 0) ?>
                                    </td>
                                    <td>
                                        <b>Rp.<?= number_format($value->total_bayar, 0) ?></b><br>

                                        <span class="badge badge-success">Selesai</span><br>
                                    </td>
                                    <td>
                                        <?= $value->no_resi ?><br>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    </div>


    <footer>
        <?php $this->load->view("user/_partials/footer.php") ?>
    </footer>

    <!-- Modal -->
    <?php foreach ($dikirim as $key => $value) { ?>
    <div class="modal fade" id="diterima<?= $value->id_transaksi ?>" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="ion-android-close"></i></span></button>
        </div>
        <div class="modal-body">
            <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                <h2 class="modal-title text-center">Apa anda yakin pesanan sudah diterima?</h2>
                <br>
                <br>
                </div>
            </div>
            </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Tidak</button>
        <a href="<?= base_url('user/pesanan_saya/diterima/'.$value->id_transaksi) ?>" class="btn btn-success" data-dismiss="modal">Ya</a>
        </div>
        </div>
    </div>
    </div>
    <?php } ?>
    <?php $this->load->view("user/_partials/modal.php") ?>
    <?php $this->load->view("user/_partials/logout.php") ?>

    <?php $this->load->view("user/_partials/js-utama.php") ?>

</body>

</html>