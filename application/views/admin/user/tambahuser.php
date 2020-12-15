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
								<a href="<?php echo site_url('admin/administrator') ?>"><i class="fas fa-arrow-left"></i> Back</a>
							</div>
							<div class="card-body">
                            <?php echo $this->session->flashdata('message'); ?>
								<form action="<?php echo site_url('admin/administrator/add') ?>" method="post" enctype="multipart/form-data" >
                                    
                                    <div class="form-group">
										<label for="name">Nama *</label>
										<input name="name" class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>" type="text" placeholder="Nama" />
										<div class="invalid-feedback">
                                            <?php echo form_error('name') ?>
										</div>
                                    </div>
                                    
                                    <div class="form-group">
										<label for="email">Email *</label>
										<input name="email" class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>" type="email" placeholder="Email" />
										<div class="invalid-feedback">
                                            <?php echo form_error('email') ?>
										</div>
                                    </div>

                                    <div class="form-group">
										<label for="uname">Username *</label>
										<input name="username" class="form-control <?php echo form_error('username') ? 'is-invalid':'' ?>" type="text" placeholder="Username" />
										<div class="invalid-feedback">
                                            <?php echo form_error('username') ?>
										</div>
                                    </div>

                                    <div class="form-group">
										<label for="kind">Role *</label><br>
										<select class="form-control" name="role" id="role" required>
                                            <?php foreach($menu as $row):?>
                                            <option value="<?php echo $row->id_role;?>"><?php echo $row->role;?></option>
                                            <?php endforeach;?>
                                        </select>
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