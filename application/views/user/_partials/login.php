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
                  <h2 class="modal-title text-center">Sign In</h2>
                  <br>

                  <form class="signin" action="index.php" method="post">
                    <input type="email" name="email" value="" placeholder="E-mail" required="" class="form-control" />
                    <br>
                    <input type="password" name="password" value="" placeholder="Password" required="" class="form-control" />
                    <br>

                    <button type="submit" class="btn btn-primary">Ok</button>
                    <a href="#forgin-password" data-action="Forgot-Password">Password recovery ></a>
                  </form>
                  <br>

                  <div class="social-login">
                      <div class="or"><p>OR</p></div>
                      <a href="#"><i class="icon" data-src="<?php echo base_url('assets/img/icons/facebook.svg') ?>"></i></a>
                      <p>via</p>
                      <a href="#"><i class="icon" data-src="<?php echo base_url('assets/img/icons/google-plus.svg') ?>"></i></a>
                  </div>
                  <br><br>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
          </div>
        </div>
      </div>
    </div>