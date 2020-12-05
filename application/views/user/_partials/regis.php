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

                    <br><br>
                    <div class="text-center p-t-12">
                          <span class="txt1">
                                Sudah punya akun?
                          </span>
                          <a href="#signin" data-toggle="modal" data-target="#Modal-SignIn"> <i class="ion-unlocked"></i> Masuk</a>
                          </a>
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