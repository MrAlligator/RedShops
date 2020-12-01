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
                  <h2 class="modal-title text-center">Login</h2>
                  <br>

                  <form class="signin" action="<?= base_url('User/Login/login_proses'); ?>" method="post">
                    <input type="email" name="email" id="email" value="" placeholder="E-mail" required class="form-control" />
                    <br>
                    <input type="password" name="password" id="password" value="" placeholder="Password" required class="form-control" />
                    <br>

                    <button type="submit" class="btn btn-primary">Ok</button>
                    <a href="#forgin-password" data-action="Forgot-Password">Lupa Password? ></a>

                    <br>
                    <div class="text-center p-t-12">
                          <span class="txt1">
                                Belum punya akun?
                          </span>
                          <a href="#signin" data-toggle="modal" data-target="#Modal-Registration"> <i class="ion-person"></i> Daftar</a>
            
                          </a>
                    
                    </div>


                  </form>
                  <br><br><br>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
          </div>
        </div>
      </div>
    </div>