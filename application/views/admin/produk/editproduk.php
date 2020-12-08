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
                        <h1 class="mt-4"></h1>
                        <div class="card mb-3">
                        <div class="card-header">
                        <a href="<?php echo site_url('admin/produk/') ?>"><i class="fas fa-arrow-left"></i>
                            Back</a>
                        </div>
                        <div class="card-body">

                        <form action="" method="post" enctype="multipart/form-data">
                        <!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
                            oleh controller tempat vuew ini digunakan. Yakni admin/products/edit/ID --->

                            <input type="hidden" name="id" value="<?php echo $produk->id_produk?>" />

                            <div class="form-group">
                                <label for="name">Nama*</label>
                                <input name="nama" class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>" type="text" placeholder="Product name" value="<?php echo $produk->nama_produk ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('nama') ?>
                                </div>
                                </div>
                                    
                                <div class="form-group">
                                        <label for="kind">Jenis*</label><br>
                                        <select class="form-control" name="jenis" id="jenis" required>
                                            <?php foreach($menu as $row):?>
                                            <option value="<?php echo $row->jenis;?>"><?php echo $row->jenis;?></option>
                                            <?php endforeach;?>
                                        </select>
<<<<<<< Updated upstream
                                    </div>

                                    <div class="form-group">
                                        <label for="price">Harga*</label>
                                        <input name="harga" class="form-control <?php echo form_error('harga') ? 'is-invalid':'' ?>" type="number" min="0" placeholder="Product price" value="<?php echo $produk->harga_produk ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('harga') ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="stok">Jumlah Stok*</label>
                                        <input name="jumlahstok" class="form-control <?php echo form_error('jumlahstok') ? 'is-invalid':'' ?>" type="number" min="0" placeholder="Jumlah Stok" value="<?php echo $produk->jumlahstok ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('jumlahstok') ?>
                                        </div>
                                    </div>

                                    <!-- <div class="form-group">
                                        <label for="name">Photo</label>
                                        <input class="form-control-file <?php echo form_error('foto') ? 'is-invalid':'' ?>" type="file" name="foto" />
                                        <input type="hidden" name="old_image" value="<?php echo $produk->foto_produk ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('foto') ?>
                                        </div>
                                    </div> -->

                                    <div class="form-group">
                                    <label for="name">Foto</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <img src="<?php echo base_url('assets/img/products/').$produk->foto_produk ?>" class='img-thumbnail'>
                                            </div>
                                            <div class="col-sm-9">
                                            <div class="custom-file">
                                                <input type="hidden" name="old_image" value="<?php echo $produk->foto_produk ?>" />
                                                <input type="file" class="custom-file-input" id="foto" name="foto">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="name">Deskripsi*</label>
                                        <textarea class="form-control <?php echo form_error('deskripsi') ? 'is-invalid':'' ?>" name="deskripsi" placeholder="Product description..."><?php echo $produk->deskripsi ?></textarea>
                                        <div class="invalid-feedback">
=======
										<div class="invalid-feedback">
                                            <?php echo form_error('jenis') ?>
										</div>
									</div>

									<div class="form-group">
										<label for="price">Harga*</label>
										<input name="harga" class="form-control <?php echo form_error('harga') ? 'is-invalid':'' ?>" type="number" min="0" placeholder="Product price" value="<?php echo $produk->harga_produk ?>" />
										<div class="invalid-feedback">
                                            <?php echo form_error('harga') ?>
										</div>
									</div>

                                    <div class="form-group">
										<label for="stok">Jumlah Stok*</label>
										<input name="jumlahstok" class="form-control <?php echo form_error('jumlahstok') ? 'is-invalid':'' ?>" type="number" min="0" placeholder="Product stock" value="<?php echo $produk->harga_produk ?>" />
										<div class="invalid-feedback">
                                            <?php echo form_error('jumlahstok') ?>
										</div>
									</div>


									<!--<div class="form-group">
										<label for="name">Foto</label>
										<input name="foto" class="form-control-file <?php echo form_error('foto') ? 'is-invalid':'' ?>" type="file"/>
										<div class="invalid-feedback">
                                            <?php echo form_error('foto') ?>
										</div>
									</div> -->

									<div class="form-group">
										<label for="name">Deskripsi*</label>
										<textarea class="form-control <?php echo form_error('deskripsi') ? 'is-invalid':'' ?>" name="deskripsi" placeholder="Product description..."><?php echo $produk->deskripsi ?></textarea>
										<div class="invalid-feedback">
>>>>>>> Stashed changes
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

<!-- Scroll to Top Button-->
    <?php $this->load->view("admin/_partials/scrolltop.php") ?>

<!-- Logout Modal-->
<?php $this->load->view("admin/_partials/modal.php") ?>

<?php $this->load->view("admin/_partials/js.php") ?>
</body>

</html>