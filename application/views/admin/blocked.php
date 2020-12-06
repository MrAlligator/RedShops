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

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- 404 Error Text -->
          <div class="text-center">
            <div class="error mx-auto" data-text="404">404</div>
            <p class="lead text-gray-800 mb-5">Halaman tidak ditemukan</p>
            <p class="text-gray-500 mb-0">Nampaknya anda ingin membuka halaman diluar hak anda</p>
            <a href="<?= base_url('admin/auth/logout') ?>">&larr; Silahkan Login Kembali ya :)</a>
          </div>

        </div>
        <!-- /.container-fluid -->

  <?php $this->load->view("admin/_partials/js.php") ?>        

</body>

</html>
