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
                        <div class="card mb-3 col-lg-8">
							<div class="card-header">
								<a href="<?php echo site_url('admin/admin/produk') ?>"><i class="fas fa-arrow-left"></i> Back</a>
							</div>
							<div class="card-body">
                            <?php echo $this->session->flashdata('message'); ?>
								<form action="<?php echo site_url('admin/admin/add') ?>" method="post" enctype="multipart/form-data" >
                                    <div class="form-group">    
										<label for="name">Nama *</label>
										<input name="nama" class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>" type="text" placeholder="Nama Produk" />
										<div class="invalid-feedback">
                                            <?php echo form_error('nama') ?>
										</div>
                                    </div>
                                    
                                    <div class="form-group">
										<label for="kind">Jenis *</label><br>
										<select class="form-control" name="jenis" id="jenis" required>
                                            <?php foreach($menu as $row):?>
                                            <option value="<?php echo $row->jenis;?>"><?php echo $row->jenis;?></option>
                                            <?php endforeach;?>
                                        </select>
									</div>

									<div class="form-group">
										<label for="price">Harga *</label>
										<input name="harga" class="form-control <?php echo form_error('harga') ? 'is-invalid':'' ?>" type="number" min="0" placeholder="Harga Produk" />
										<div class="invalid-feedback">
                                            <?php echo form_error('harga') ?>
										</div>
									</div>

                                    <div class="form-group">
										<label for="stok">Jumlah Stok *</label>
										<input name="jumlahstok" class="form-control <?php echo form_error('jumlahstok') ? 'is-invalid':'' ?>" type="number" min="0" placeholder="Jumlah Stok" />
										<div class="invalid-feedback">
                                            <?php echo form_error('jumlahstok') ?>
										</div>
									</div>

									<div class="form-group">
										<label for="name">Foto</label>
										<div class="custom-file">
                                            <input type="file" class="custom-file-input" id="foto" name="foto">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
									</div>

                                    <div class="form-group">
										<label for="name">Foto 2</label>
										<div class="custom-file">
                                            <input type="file" class="custom-file-input" id="gambar" name="gambar">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
									</div>

                                    <div class="form-group">
										<label for="name">Foto 3</label>
										<div class="custom-file">
                                            <input type="file" class="custom-file-input" id="gbr" name="gbr">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
									</div>

									<div class="form-group">
										<label for="name">Deskripsi Singkat *</label>
										<textarea class="form-control <?php echo form_error('deskripsi') ? 'is-invalid':'' ?>" name="deskripsi" placeholder="Deskripsi Produk..."></textarea>
										<div class="invalid-feedback">
                                            <?php echo form_error('deskripsi') ?>
										</div>
									</div>

                                    <div class="form-group">
										<label for="name">Deskripsi Detail *</label>
										<textarea class="form-control <?php echo form_error('deskripsi') ? 'is-invalid':'' ?>" name="deskripsi2" placeholder="Deskripsi Produk..."></textarea>
										<div class="invalid-feedback">
                                            <?php echo form_error('deskripsi') ?>
										</div>
									</div>

                                    <div class="form-group">
										<label for="name">Spesifikasi *</label>
										<textarea class="form-control <?php echo form_error('deskripsi') ? 'is-invalid':'' ?>" name="deskripsi3" placeholder="Deskripsi Produk..."></textarea>
										<div class="invalid-feedback">
                                            <?php echo form_error('deskripsi') ?>
										</div>
									</div>

									<input class="btn btn-success" type="submit" name="btn" value="Save" />
								</form>

							</div>

							<div class="card-footer small text-muted">
								* HARUS DI ISI
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
    <?php $this->load->view("admin/_partials/modal.php") ?>
<!-- Scroll to Top Button-->
    <?php $this->load->view("admin/_partials/scrolltop.php") ?>

<?php $this->load->view("admin/_partials/js.php") ?>
</body>

</html>