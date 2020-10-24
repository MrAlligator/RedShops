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
                        <h1 class="mt-4">Add New</h1>
                        <div class="card mb-3">
							<div class="card-header">
								<a href="<?php echo site_url('admin/produk') ?>"><i class="fas fa-arrow-left"></i> Back</a>
							</div>
							<div class="card-body">

								<form action="<?php echo site_url('admin/produk/add') ?>" method="post" enctype="multipart/form-data" >
                                    <!--<div class="form-group">
										<label for="name">ID Produk*</label>
										<input name="id" class="form-control" type="text" placeholder="Product ID" />
										<div class="invalid-feedback">
											
										</div>
                                    </div>-->
                                    
                                    <div class="form-group">
										<label for="name">Nama*</label>
										<input name="nama" class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>" type="text" placeholder="Product name" />
										<div class="invalid-feedback">
                                            <?php echo form_error('nama') ?>
										</div>
                                    </div>
                                    
                                    <div class="form-group">
										<label for="kind">Jenis*</label><br>
										<select name='jenis'>
                                            <option value='Kaos'>Kaos</option>
                                            <option value='Kemeja' selected='selected'>Kemeja</option>
                                            <option value='Celana'>Celana</option>
                                            <option value='Jaket'>Jaket</option>
                                        </select>
										<div class="invalid-feedback">
                                            <?php echo form_error('jenis') ?>
										</div>
									</div>

									<div class="form-group">
										<label for="price">Harga*</label>
										<input name="harga" class="form-control <?php echo form_error('harga') ? 'is-invalid':'' ?>" type="number" min="0" placeholder="Product price" />
										<div class="invalid-feedback">
                                            <?php echo form_error('harga') ?>
										</div>
									</div>


									<div class="form-group">
										<label for="name">Foto</label>
										<input name="foto" class="form-control-file <?php echo form_error('foto') ? 'is-invalid':'' ?>" type="file"/>
										<div class="invalid-feedback">
                                            <?php echo form_error('foto') ?>
										</div>
									</div>

									<div class="form-group">
										<label for="name">Deskripsi*</label>
										<textarea class="form-control <?php echo form_error('deskripsi') ? 'is-invalid':'' ?>" name="deskripsi" placeholder="Product description..."></textarea>
										<div class="invalid-feedback">
                                            <?php echo form_error('deskripsi') ?>
										</div>
									</div>

									<input class="btn btn-success" type="submit" name="btn" value="Save" />
								</form>

							</div>

							<div class="card-footer small text-muted">
								* required fields
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