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
                <?php $this->load->view("admin/_partials/topbar.php") ?>
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <?php echo form_open('admin/editalamat') ?>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Provinsi</label>
                            <select class="form-control" name="provinsi"></select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Kabupaten/Kota</label>
                            <select class="form-control" name="kabupaten"></select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Nama Toko</label>
                        <input type="text" class="form-control" name="nama_toko" required>
                    </div>
                    <div class="form-group">
                        <label>Alamat Toko</label>
                        <input type="text" class="form-control" name="alamat_toko" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                    <?php echo form_close() ?>
                </div>
            </div>
            <!-- End of Main Content -->

            <!-- Script -->
            <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

            <script>
                $(document).ready(function() {
                    //masukkan data ke select provinsi
                    $.ajax({
                        type: "POST",
                        url: "<?= base_url('rajaongkir/provinsi') ?>",
                        success: function(hasil_provinsi) {
                            // console.log(hasil_provinsi);
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
                                // console.log(hasil_kabupaten);
                                $("select[name=kabupaten]").html(hasil_kabupaten);
                            }
                        });
                    });
                });
            </script>

            <!-- Footer -->
            <?php $this->load->view("admin/_partials/footer.php") ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->
        <?php $this->load->view("admin/_partials/modal.php") ?>
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <?php $this->load->view("admin/_partials/scrolltop.php") ?>

    <?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>