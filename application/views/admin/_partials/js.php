<!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('assetsadmin/vendor/jquery/jquery.min.js') ?>"></script>
  <script src="<?php echo base_url('assetsadmin/vendor/jquery/jquery-3.3.1.min.js') ?>"></script>
  <script src="<?php echo base_url('assetsadmin/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('assetsadmin/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('assetsadmin/js/sb-admin-2.min.js') ?>"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url('assetsadmin/vendor/chart.js/Chart.min.js') ?>"></script>
  <script src="<?php echo base_url('assetsadmin/vendor/datatables/jquery.dataTables.min.js') ?>"></script>
  <script src="<?php echo base_url('assetsadmin/vendor/datatables/dataTables.bootstrap4.min.js') ?>"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url('assetsadmin/js/demo/chart-area-demo.js') ?>"></script>
  <script src="<?php echo base_url('assetsadmin/js/demo/chart-pie-demo.js') ?>"></script>
  <script src="<?php echo base_url('assetsadmin/js/demo/datatables-demo.js') ?>"></script>

  <script>
    $('.custom-file-input').on('change', function() {
      let fileName = $(this).val().split('\\').pop();
      $(this).next('.custom-file-label').addClass("selected").html(fileName)
    });
  </script>