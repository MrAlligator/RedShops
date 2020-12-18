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

    <?php $this->load->view("user/_partials/cart.php") ?>

    <?php $this->load->view("user/_partials/toplinks.php") ?>

    <nav class="navbar navbar-default">
        <?php $this->load->view("user/_partials/navbar.php") ?>
    </nav>

    <hr class="offset-lg">
    <hr class="offset-lg">

    <div class="container">
        <hr class="offset-md">

        <div class="row">
            <div class="col-sm-3 col-md-2">
                <h2>My Account</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3 col-md-2">
                Welcome back, <?= $user['name']; ?>
            </div>
        </div>

        <hr class="offset-md">

        <div class="row">
            <div class="col-sm-8 col-md-8">
                <h2>My Orders</h2>
                You haven't placed any orders yet
            </div>
        </div>

        <hr class="offset-md">

        <div class="row">
            <div class="col-sm-8 col-md-8">
                <h2>My Address</h2>
                <?= $user['alamat']; ?>
                <!-- No addresses are currently saved -->
            </div>
            <div class="col-sm-8 col-md-3">
                <a href="#alamat" data-toggle="modal" data-target="#Modal-Alamat"> <button type="button" class="btn btn-primary btn-lg">Manage Adresses</button></a>
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

    <?php $this->load->view("user/_partials/js-utama.php") ?>

</body>

</html>