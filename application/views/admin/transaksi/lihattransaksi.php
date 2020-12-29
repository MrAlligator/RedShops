<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo $title ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/favicon.png') ?>">
    <?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php $this->load->view("admin/_partials/sidebar.php") ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php $this->load->view("admin/_partials/topbar.php") ?>
                <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <div class="col-md-6">
                <div class="col-lg-12">
                    Cetak<br>
                    <a href="<?= base_url('admin/admin/cetak') ?>" class="btn btn-warning btn-icon-split">
                        <span class="icon text-white-50">
                        <i class="fas fa-print"></i>
                        </span>
                        <span class="text">Cetak</span>
                    </a>
                    <a href="<?= base_url('admin/admin/cetak2') ?>" class="btn btn-warning btn-icon-split">
                        <span class="icon text-white-50">
                        <i class="fas fa-print"></i>
                        </span>
                        <span class="text">Cetak Belum Bayar</span>
                    </a>
                    <a href="<?= base_url('admin/admin/cetak3') ?>" class="btn btn-warning btn-icon-split">
                        <span class="icon text-white-50">
                        <i class="fas fa-print"></i>
                        </span>
                        <span class="text">Cetak Sudah Bayar</span>
                    </a>
                    <br>
                </div>
            </div>
            <!-- <div class="col-md-6">
                <div class="col-lg-12">
                    <a href="<?= base_url('admin/admin/pdf') ?>" class="btn btn-danger btn-icon-split">
                        <span class="icon text-white-50">
                        <i class="fas fa-file-pdf"></i>
                        </span>
                        <span class="text">Ekspor</span>
                    </a>
                    <a href="#" class="btn btn-danger btn-icon-split">
                        <span class="icon text-white-50">
                        <i class="fas fa-file-pdf"></i>
                        </span>
                        <span class="text">Ekspor Belum Bayar</span>
                    </a>
                    <a href="#" class="btn btn-danger btn-icon-split">
                        <span class="icon text-white-50">
                        <i class="fas fa-file-pdf"></i>
                        </span>
                        <span class="text">Ekspor Sudah Bayar</span>
                    </a>
                </div>
            </div> -->
            <hr>

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

                    <!-- Pesanan -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="pesananmasuk-tab" data-toggle="tab" href="#pesananmasuk" role="tab" aria-controls="pesananmasuk" aria-selected="true">Pesanan Masuk</a>
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
                                <div class="tab-pane fade show active" id="pesananmasuk" role="tabpanel" aria-labelledby="pesananmasuk-tab">
                                    <br>

                                    <!-- Belum Bayar -->
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellpadding="0">
                                            <thead>
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
                                            </thead>
                                            <tbody>
                                                <?php foreach ($pesanan as $key => $value) { ?>
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
                                                            <?php if ($value->status_bayar == 1) { ?>
                                                                <button class="btn btn-success btn-sm btn-flat" data-toggle="modal" data-target="#bukti_pembayaran<?= $value->id_transaksi ?>">Cek Bukti Pembayaran</button><br><br>
                                                                <a href="<?= base_url('admin/admin/verifikasi/' . $value->id_transaksi) ?> " class="btn btn-primary btn-sm">Verifikasi</a><br>
                                                            <?php } ?>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="diproses" role="tabpanel" aria-labelledby="diproses-tab">
                                    <br>

                                    <!-- Pesanan Di Proses -->
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellpadding="0">
                                            <thead>
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
                                            </thead>
                                            <tbody>
                                                <?php foreach ($pesanan_diproses as $key => $value) { ?>
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
                                                            <span class="badge badge-primary">Sedang Dikemas</span>
                                                        </td>
                                                        <td>
                                                            <?php if ($value->status_bayar == 1) { ?>
                                                                <a href="<?= base_url('admin/admin/kirim/' . $value->id_transaksi) ?> " class="btn btn-primary btn-sm">Verifikasi</a><br>
                                                            <?php } ?>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
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
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>

    <!-- End of Main Content -->

    <?php foreach ($pesanan as $key => $value) { ?>
        <div class="modal fade" id="bukti_pembayaran<?= $value->id_transaksi ?>">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><?= $value->no_order ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <table class="table">
                            <tr>
                                <th>Nama Bank</th>
                                <th>:</th>
                                <td><?= $value->nama_bank ?></td>
                            </tr>
                            <tr>
                                <th>No Rekening</th>
                                <th>:</th>
                                <td><?= $value->no_rekening ?></td>
                            </tr>
                            <tr>
                                <th>Atas Nama</th>
                                <th>:</th>
                                <td><?= $value->atas_nama ?></td>
                            </tr>
                            <tr>
                                <th>Total Bayar</th>
                                <th>:</th>
                                <td>Rp.<?= number_format($value->total_bayar, 0) ?></td>
                            </tr>
                        </table>

                        <img class="img-fluid pad" src="<?= base_url('assets/img/buktipembayaran/' . $value->bukti_bayar) ?>" alt="">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>

    <!-- Footer -->
    <?php $this->load->view("admin/_partials/footer.php") ?>
    <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <?php $this->load->view("admin/_partials/scrolltop.php") ?>

    <?php $this->load->view("admin/_partials/modal.php") ?>
    <?php $this->load->view("admin/_partials/js.php") ?>

    <!-- <script>
        function deleteConfirm(url) {
            $('#btn-delete').attr('href', url);
            $('#deleteModal').modal();
        }
    </script> -->
</body>

</html>