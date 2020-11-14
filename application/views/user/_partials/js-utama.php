<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url('assets/js/jquery-latest.min.js') ?>"></script>
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/core.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/store.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/carousel.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.touchSwipe.min.js') ?>"></script>

    <script type="text/javascript" src="<?php echo base_url('assets/js/custom-scroll/jquery.mCustomScrollbar.concat.min.js') ?>"></script>


    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-ui-1.11.4.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.ui.touch-punch.js') ?>"></script>

    <script type="text/javascript">
        $(document).ready(function(){
        });
    </script>
    <script type="text/javascript">
    $(document).ready(function(){
        $('.add_cart').click(function(){
            var produk_id    = $(this).data("produkid");
            var produk_nama  = $(this).data("produknama");
            var produk_harga = $(this).data("produkharga");
            var quantity     = $('#' + produk_id).val();
            $.ajax({
                url : "<?php echo base_url();?>index.php/cart/add_to_cart",
                method : "POST",
                data : {produk_id: produk_id, produk_nama: produk_nama, produk_harga: produk_harga, quantity: quantity},
                success: function(data){
                    $('#detail_cart').html(data);
                }
            });
        });
 
        // Load shopping cart
        $('#detail_cart').load("<?php echo base_url();?>index.php/cart/load_cart");
 
        //Hapus Item Cart
        $(document).on('click','.hapus_cart',function(){
            var row_id=$(this).attr("id"); //mengambil row_id dari artibut id
            $.ajax({
                url : "<?php echo base_url();?>cart/hapus_cart",
                method : "POST",
                data : {row_id : row_id},
                success :function(data){
                    $('#detail_cart').html(data);
                }
            });
        });
    });
</script>