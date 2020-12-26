<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title> RedShop &middot; <?php echo $title ?></title>
    <?php $this->load->view("user/_partials/head.php") ?>
</head>

<body>

    <?php if (isset($user['username'])) : ?>
        <?php $this->load->view("user/_partials/cart.php") ?>
        <?php $this->load->view("user/_partials/toplinks.php") ?>
    <?php else : ?>
        <?php $this->load->view("user/_partials/toplinks.php") ?>
    <?php endif; ?>

    <nav class="navbar navbar-default">
        <?php $this->load->view("user/_partials/navbar.php") ?>
    </nav>

    <hr class="offset-lg">
    <hr class="offset-lg">

    <div class="container">
        <hr class="offset-md">

        <div class="row">
            <div class="col-sm-3 col-md-2">
                <h2>Akun Saya</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <?php echo $this->session->flashdata('message'); ?>
                Welcome back, <?= $user['name']; ?></br>
                <a href="#alamat" data-toggle="modal" data-target="#ubahPassModal">Ubah Kata Sandi</a>
                </br>
                </br>
            </div>
            <div class="col-lg-8">
                <form action="<?php echo site_url('user/profile/editprofil') ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label for="username" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="username" name="username" value="<?php echo $user['username']; ?>" onkeyup="this.value = this.value.toLowerCase()"> <?= form_error('name', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" value="<?php echo $user['name']; ?>"><?= form_error('name', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-3">
                                    <img src="<?php echo base_url('assetsadmin/img/profile/').$user['image']; ?>" class='img-thumbnail'>
                                </div>
                                <div class="col-sm-9">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image" name="image">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row justify-content-end">
                        <div class="col-sm-3">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <hr class="offset-md">

        <div class="row">
            <div class="col-sm-12">
                <h2>Pesanan Saya</h2>
                You haven't placed any orders yet
            </div>
        </div>

        <hr class="offset-md">

        <div class="row">
            <div class="col-sm-12">
                <h2>Alamat Saya</h2>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($user['alamat'] != 'Belum diatur') : ?>
                                <tr>
                                    <td>
                                        <?= $user['alamat']; ?>, <?= $user['kab']; ?>, <?= $user['prov']; ?>
                                        </br><?= $user['telp']; ?></td>
                                    </td>
                                    <td>
                                        <a href="#alamat" data-toggle="modal" data-target="#Modal-editAlamat" class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                                    </td>
                                </tr>
                            <?php else : ?>
                                <tr>
                                    <td>
                                        <?= $user['alamat']; ?>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
                <a href="#alamat" data-toggle="modal" data-target="#Modal-addAlamat"> <button type="button" class="btn btn-primary btn-lg"><?= $title2 ?></button></a>
            </div>
        </div>

        </hr>
    </div>

    <hr class="offset-lg">
    <hr class="offset-sm">
    <footer>
        <?php $this->load->view("user/_partials/footer.php") ?>
    </footer>

    <!-- Modal -->
    <?php $this->load->view("user/_partials/modal.php") ?>
    <?php $this->load->view("user/_partials/logout.php") ?>

    <?php $this->load->view("user/_partials/js-utama.php") ?>

</body>

</html>