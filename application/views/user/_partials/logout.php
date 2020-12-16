<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
              <h5 class="modal-title" id="exampleModalLabel">Yakin ingin keluar?</h5>
            </div>
            <!-- <div class="modal-body">klik "logout" untuk keluar</div> -->
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <a class="btn btn-primary" href="<?= base_url('user/auth/logout'); ?>">Logout</a>
            </div>
          </div>
        </div>
      </div>