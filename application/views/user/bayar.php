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

        <h2>Pembayaran</h2>

        <div class="row">
            <div class="col-sm-6">

                <h2>No Rekening Toko</h2>

                <p>Silahkan transfer uang ke salah satu No Rekening dibawah ini sebesar :
                    <h2>Rp.<?= number_format($pesanan->total_bayar, 0) ?>.00</h2>
                </p>
                <table class="table">
                    <tr>
                        <th>Bank</th>
                        <th>No Rekening</th>
                        <th>Atas Nama</th>
                    </tr>
                    <?php foreach ($rekening as $key => $value) { ?>
                        <tr>
                            <td><?= $value->nama_bank ?></td>
                            <td><?= $value->no_rekening ?></td>
                            <td><?= $value->atas_nama ?></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>

            <div class="col-sm-6">

                <h2>Upload Bukti Pembayaran</h2>

                <?php
                echo form_open_multipart('user/pesanan_saya/bayar/' . $pesanan->id_transaksi);
                ?>
                <div class="form-group">
                    <label>Atas Nama</label>
                    <input class="form-control" name="atas_nama" placeholder="Atas Nama">
                </div>
                <div class="form-group">
                    <label>Nama Bank</label>
                    <input class="form-control" name="nama_bank" placeholder="Nama Bank">
                </div>
                <div class="form-group">
                    <label>No Rekening</label>
                    <input class="form-control" name="no_rekening" placeholder="No Rekening">
                </div>
                <div class="form-group mb-3">
                    <label for="formFile">Bukti Pembayaran</label>
                    <input type="file" class="form-control" name="bukti_bayar" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <?php echo form_close() ?>
            </div>

            <hr class="offset-lg">
        </div>
    </div>

    <footer>
        <?php $this->load->view("user/_partials/footer.php") ?>
    </footer>

    <!-- Modal -->
    <?php $this->load->view("user/_partials/modal.php") ?>
    <?php $this->load->view("user/_partials/logout.php") ?>

    <?php $this->load->view("user/_partials/js-utama.php") ?>

</body>

</html>