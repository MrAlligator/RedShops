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
            <div class="card-header">
              <a href="<?php echo site_url('admin/admin/add') ?>"><i class="fas fa-plus"></i> Tambah Produk</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nama</th>
                      <th>Jenis</th>
                      <th>Harga</th>
                      <th>Stok</th>
                      <th>Berat</th>
                      <th>Foto</th>
                      <th>Deskripsi</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($produk as $product) : ?>
                      <tr>
                        <td>
                          <?php echo $product->nama_produk ?>
                        </td>
                        <td>
                          <?php echo $product->jenis_produk ?>
                        </td>
                        <td>
                          <?php echo $product->harga_produk ?>
                        </td>
                        <td>
                          <?php echo $product->jumlahstok ?>
                        </td>
                        <td>
                          <?php echo $product->berat ?>
                        </td>
                        <td>
                          <img src="<?php echo base_url('assets/img/products/' . $product->foto_produk) ?>" width="64" /><br>
                          <!-- <img src="<?php echo base_url('assets/img/products/' . $product->foto_produk2) ?>" width="64" /><br>
                          <img src="<?php echo base_url('assets/img/products/' . $product->foto_produk3) ?>" width="64" /> -->
                        </td>
                        <td>
                          <?php echo substr($product->deskripsi, 0, 120) ?>...</td>
                        </td>
                        <td>
                          <a href="<?php echo site_url('admin/admin/edit/' . $product->id_produk) ?>" class="btn btn-sm"><i class="fas fa-edit"></i> Edit</a>
                          <a onclick="deleteConfirm('<?php echo site_url('admin/admin/delete/' . $product->id_produk) ?>')" href="#!" class="btn btn-sm text-danger"><i class="fas fa-trash"></i> Hapus</a></td>
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
    function deleteConfirm(url) {
      $('#btn-delete').attr('href', url);
      $('#deleteModal').modal();
    }
  </script>
</body>

</html>