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

<div class="modal fade" id="Modal-addAlamat" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="ion-android-close"></i></span></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
              <h2 class="modal-title text-center"><?= $title2 ?></h2>
              <br>

              <?php if($user['alamat'] != 'Belum diatur') : ?>
                <form class="join" action="<?= base_url('user/profile/addalamat2') ?>" method="post">
              <?php elseif($user['alamat'] != 'Belum diatur' && $user['alamat2'] != 'Belum diatur' ) : ?>
                <form class="join" action="<?= base_url('user/profile/addalamat3') ?>" method="post">
              <?php else : ?>
                <form class="join" action="<?= base_url('user/profile/addalamat') ?>" method="post">
              <?php endif ;?>
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat"></input>
                  <label for="alamat">Provinsi</label>
                  <select class="form-control" name="provinsi"></select>
                  <label for="alamat">Kabupaten</label>
                  <select class="form-control" name="kabupaten"></select>
                  <label for="alamat">No Telepon</label>
                  <input type="text" class="form-control" id="telp" name="telp" placeholder="Masukkan No Telepon"></input>
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

<div class="modal fade" id="Modal-editAlamat2" tabindex="-1" role="dialog">
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

              <form>
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $user['alamat2']; ?>"></input>
                  <label for="alamat">Provinsi</label>
                  <select class="form-control" name="provinsi"></select>
                  <label for="alamat">Kabupaten</label>
                  <select class="form-control" name="kabupaten"></select>
                  <label for="alamat">No Telepon</label>
                  <input type="text" class="form-control" id="telp" name="telp" value="<?php echo $user['telp2']; ?>"></input>
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

<div class="modal fade" id="Modal-editAlamat3" tabindex="-1" role="dialog">
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

              <form>
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $user['alamat3']; ?>"></input>
                  <label for="alamat">Provinsi</label>
                  <select class="form-control" name="provinsi"></select>
                  <label for="alamat">Kabupaten</label>
                  <select class="form-control" name="kabupaten"></select>
                  <label for="alamat">No Telepon</label>
                  <input type="text" class="form-control" id="telp" name="telp" value="<?php echo $user['telp3']; ?>"></input>
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