<div class="modal fade" id="Modal-SignIn" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="ion-android-close"></i></span></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
              <h2 class="modal-title text-center">Masuk</h2>
              <br>

              <form class="signin" action="<?php echo site_url('user/auth') ?>" method="post">
                <input type="text" name="username" value="" placeholder="E-mail / Password" required="" class="form-control" />
                <br>
                <input type="password" name="password" value="" placeholder="Password" required="" class="form-control" />
                <br>

                <button type="submit" class="btn btn-primary">Masuk</button>
                <a href="#forgin-password" data-action="Forgot-Password">Lupa Password ?</a>
              </form>
              <br>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="Modal-Registration" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="ion-android-close"></i></span></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
              <h2 class="modal-title text-center">Registration</h2>
              <?php echo $this->session->flashdata('message'); ?>
              <br>

              <form class="join" action="<?php echo base_url('user/auth/regis') ?>" method="post">
                <input type="text" id="nama" name="nama" value="" placeholder="Name" required="" class="form-control" />
                <br>

                <input type="email" id="email" name="email" value="" placeholder="E-mail" required="" class="form-control" />
                <br>

                <input type="text" id="username" name="username" value="" placeholder="Username" required="" class="form-control" />
                <br>

                <input type="password" id="password" name="password" value="" placeholder="Password" required="" class="form-control" />
                <br>

                <input type="password" id="konfirm" name="konfirm" value="" placeholder="Password again" required="" class="form-control" />
                <br>

                <button type="submit" class="btn btn-primary btn-sm">Daftar</button> &nbsp;&nbsp;
                <!-- <a href="#">Terms ></a> -->
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="Modal-ForgotPassword" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="ion-android-close"></i></span></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <h4 class="modal-title">Lupa Password Anda?</h4>
              <br>

              <form class="join" action="<?= base_url('user/auth/forgot') ?>" method="post">
                <input type="email" name="email" value="" placeholder="E-mail" required="" class="form-control" />
                <br>

                <button type="submit" class="btn btn-primary btn-sm">Reset</button>
                <a href="#Sign-In" data-action="Sign-In">Kembali</a>
              </form>
            </div>
            <div class="col-sm-6">
              <br><br>
              <p>
                Masukkan Email yang anda gunakan untuk mendaftar. Tekan Reset untuk mengirim email reset password anda.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="Modal-Alamat" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="ion-android-close"></i></span></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
              <h2 class="modal-title text-center">Manage Address</h2>
              <br>

              <form>
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <textarea class="form-control" id="alamat" name="alamat" rows="3" value="<?php echo $user['alamat']; ?>"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </form>

              <br>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>