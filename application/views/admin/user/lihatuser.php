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
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <!-- <h6 class="m-0 font-weight-bold text-primary">Produk</h6> -->
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Username</th>
                      <th>Foto</th>
                      <th>Tanggal Dibuat</th>
                      <th>Jabatan</th>
                      <th>Aktif?</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($pengguna as $admin): ?>
                      <tr>
                        <td>
                          <?php echo $admin->name ?>
                        </td>
                        <td>
                          <?php echo $admin->email ?>
                        </td>
                        <td>
                          <?php echo $admin->username ?>
                        </td>
                        <td>
                          <img src="<?php echo base_url('assetsadmin/img/profile/'.$admin->image) ?>" width="64" /><br>
                        </td>
                        <td>
                          <?php echo date('d F Y', $admin->date_created) ?>
                        </td>
                        <td>
                          <?php
                          $jabatan = $admin->role_id;
                          if($jabatan == 1){
                            echo "Super Admin";
                          }else if($jabatan == 2){
                            echo "Admin";
                          }else if($jabatan == 3) {
                            echo "User";
                          }
                          ?>
                        </td>
                        <td>
                          <?php
                          $is_active = $admin->is_active;
                          if($is_active == 1){
                            echo "Sudah Diaktivasi";
                          } else if($is_active == 0){
                            echo "Belum Diaktivasi";
                          }
                          ?>
                        </td>
                        <td>
                          <a onclick="deleteConfirm('<?php echo site_url('admin/administrator/delete/'.$admin->id_user) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a></td>
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