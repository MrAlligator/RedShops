<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title> RedShop &middot;</title>
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
                Welcome back, <?= $user['name']; ?>
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
                                    <a onclick="deleteConfirm('<?php echo site_url('admin/admin/delete/') ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                                </td>
                            </tr>
                        <?php else : ?>
                            <tr>
                                <td>
                                    <?= $user['alamat'];?>
                                </td>
                                <td>
                                </td>
                            </tr>
                        <?php endif; ?>
                        <?php if ($user['alamat2'] != 'Belum diatur') : ?>
                            <tr>
                                <td>
                                    <?= $user['alamat2'];?>
                                </td>
                                <td>
                                    <a href="#alamat" data-toggle="modal" data-target="#Modal-editAlamat2" class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                                    <a onclick="deleteConfirm('<?php echo site_url('admin/admin/delete/') ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                                </td>
                            </tr>
                        <?php else : ?>
                            
                        <?php endif; ?>
                        <?php if ($user['alamat3'] != 'Belum diatur') : ?>
                            <tr>
                                <td>
                                    <?= $user['alamat3'];?>
                                </td>
                                <td>
                                    <a href="#alamat" data-toggle="modal" data-target="#Modal-editAlamat3" class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                                    <a onclick="deleteConfirm('<?php echo site_url('admin/admin/delete/') ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                                </td>
                            </tr>
                        <?php else : ?>
                            
                        <?php endif; ?>
                        </tbody>
                    </table>
                </div>
                <a href="#alamat" data-toggle="modal" data-target="#Modal-addAlamat"> <button type="button" class="btn btn-primary btn-lg"><?= $title2?></button></a>
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