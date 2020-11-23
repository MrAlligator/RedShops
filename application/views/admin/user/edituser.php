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

                            <input type="hidden" name="id" value="<?php echo $admin->id_user?>" />

                            <div class="form-group">
                                <label for="name">Password Lama</label>
                                <input name="password" class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>" type="text" value="<?php echo $admin->password ?>" readonly />
                                <div class="invalid-feedback">
                                    <?php echo form_error('password') ?>
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