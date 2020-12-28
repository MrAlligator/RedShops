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

<div class="modal fade" id="Modal-editAlamat" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="ion-android-close"></i></span></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
              <h2 class="modal-title text-center">Edit Alamat</h2>
              <br>

              <?php

              if ($this->session->flashdata('message')) {
                echo '<div class="alert alert-success">';
                echo $this->session->flashdata('message');
                echo '</div>';
              }

              echo form_open('user/profile') ?>

              <!-- <div class="row">
                <div class="form-group">
                  <label>Provinsi</label>
                  <select class="form-control" name="provinsi"></select>
                </div>
                <div class="form-group">
                  <label>Kabupaten/Kota</label>
                  <select class="form-control" name="kabupaten">
                    <option value="<?= $setting->lokasi_toko ?>"><?= $setting->lokasi_toko ?></option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $user['alamat']; ?>"></input>
                </div>
                <div class="form-group">
                  <label>No Telepon</label>
                  <input type="text" class="form-control" id="telp" name="telp" value="<?php echo $user['telp']; ?>"></input>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-success">Simpan</button>
                </div>
              </div> -->

              <form>
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $user['alamat']; ?>"></input>
                  <label for="alamat">Provinsi</label>
                  <select class="form-control" name="provinsi"></select>
                  <label for="alamat">Kabupaten</label>
                  <select class="form-control" name="kabupaten"></select>
                  <label for="alamat">No Telepon</label>
                  <input type="text" class="form-control" id="telp" name="telp" value="<?php echo $user['telp']; ?>"></input>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </form>

              <?php echo form_close() ?>

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

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a id="btn-delete" class="btn btn-danger" href="#">Delete</a>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="ubahPassModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="ion-android-close"></i></span></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
              <h2 class="modal-title text-center">Ganti Password</h2>
              <br>

              <form class="signin" action="<?php echo site_url('user/profile/editpass') ?>" method="post">
                <input type="password" id="password_lama" name="password_lama" value="" placeholder="Password Lama" required="" class="form-control" />
                <br>
                <input type="password" id="password_baru" name="password_baru" value="" placeholder="Password Baru" required="" class="form-control" />
                <br>
                <input type="password" id="konfirm_pass" name="konfirm_pass" value="" placeholder="Konfirmasi Password Baru" required="" class="form-control" />
                <br>

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