<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Id Order</th>
                <th>Nama Penerima</th>
                <th>Alamat</th>
                <th>No Telepon</th>
                <th>Ekspedisi</th>
                <th>Berat</th>
                <th>SubTotal</th>
                <th>Total</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $no = 1;
                foreach ($transaksi as $items) : 
            ?>
                <tr>
                    <td>
                        <?= $no++ ?>
                    </td>
                    <td>
                        <?php echo $items->no_order ?>
                    </td>
                    <td>
                        <?php echo $items->nama_penerima ?>
                    </td>
                    <td>
                        <?php echo $items->alamat;
                            echo '<br>'; 
                            echo $items->kabupaten;
                            echo '<br>'; 
                            echo $items->provinsi.", ".$items->kode_pos;
                        ?>
                    </td>
                    <td>
                        <?php echo $items->no_telepon ?>
                    </td>
                    <td>
                        <?php echo $items->ekspedisi.", ".$items->paket;
                            echo '<br>';
                            echo $items->estimasi.", Rp.".number_format($items->ongkir,0);
                        ?>
                    </td>
                    <td>
                        <?= $items->berat ?>gr
                    </td>
                    <td>
                        Rp.<?php echo number_format($items->grand_total,0) ?>
                    </td>
                    <td>
                        Rp.<?php echo number_format($items->total_bayar,0) ?>
                    </td>
                    <td>
                        <?php
                            $status = $items->status_bayar;
                            if($status == 0){
                                echo "Belum bayar";
                            }else if($status == 1){
                                echo "Sudah bayar";
                            }
                        ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>