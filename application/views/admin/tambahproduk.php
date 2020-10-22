<!DOCTYPE html>
<html lang="en">

<head>
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
								<a href=""><i class="fas fa-arrow-left"></i> Back</a>
							</div>
							<div class="card-body">

								<form action="" method="post" enctype="multipart/form-data" >
									<div class="form-group">
										<label for="name">Name*</label>
										<input class="form-control"
										type="text" name="name" placeholder="Product name" />
										<div class="invalid-feedback">
											
										</div>
									</div>

									<div class="form-group">
										<label for="price">Price*</label>
										<input class="form-control"
										type="number" name="price" min="0" placeholder="Product price" />
										<div class="invalid-feedback">
											
										</div>
									</div>


									<div class="form-group">
										<label for="name">Photo</label>
										<input class="form-control-file"
										type="file" name="image" />
										<div class="invalid-feedback">
											
										</div>
									</div>

									<div class="form-group">
										<label for="name">Description*</label>
										<textarea class="form-control"
										name="description" placeholder="Product description..."></textarea>
										<div class="invalid-feedback">
											
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
        </div>
    </div>
    </div>

<?php $this->load->view("admin/_partials/js.php") ?>
</body>

</html>