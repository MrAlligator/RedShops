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
            <!-- <div class="col-md-6">
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
                    <a href="<?= base_url('admin/admin/cetak') ?>" class="btn btn-warning btn-icon-split">
                        <span class="icon text-white-50">
                        <i class="fas fa-print"></i>
                        </span>
                        <span class="text">Cetak Semua</span>
                    </a>
                    <br>
                </div>
            </div> -->
            <div class="col-md-6">
                <div class="col-lg-12">
                    <a href="#" class="btn btn-danger btn-icon-split">
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
            </div>
            <hr>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                        <th>Id Order</th>
                        <th>Nama Penerima</th>
                        <th>Alamat</th>
                        <th>No Telepon</th>
                        <th>Ekspedisi</th>
                        <th>Berat</th>
                        <th>SubTotal</th>
                        <th>Total</th>
                        <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($transaksi as $items) : ?>
                        <tr>
                            <td>
                            <?php echo $items->no_order ?>
                            </td>
                            <td>
                            <?php echo $items->nama_penerima ?>
                            </td>
                            <td>
                            <?php echo $items->alamat;
                                echo '<br>'; 
                                echo $items->kabupaten;
                                echo '<br>'; 
                                echo $items->provinsi.", ".$items->kode_pos;
                            ?>
                            </td>
                            <td>
                            <?php echo $items->no_telepon ?>
                            </td>
                            <td>
                            <?php echo $items->ekspedisi.", ".$items->paket;
                                echo '<br>';
                                echo $items->estimasi.", Rp.".number_format($items->ongkir,0);
                            ?>
                            </td>
                            <td>
                                <?= $items->berat ?>gr
                            </td>
                            <td>
                            Rp.<?php echo number_format($items->grand_total,0) ?>
                            </td>
                            <td>
                            Rp.<?php echo number_format($items->total_bayar,0) ?>
                            </td>
                            <td>
                            <?php
                                $status = $items->status_bayar;
                                if($status == 0){
                                    echo "Belum bayar";
                                }else if($status == 1){
                                    echo "Sudah bayar";
                                }
                            ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                    </table>
                </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>

        <!-- End of Main Content -->

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
  <script>
    function deleteConfirm(url){
    $('#btn-delete').attr('href', url);
    $('#deleteModal').modal();
    }
  </script>
</body>

</html>