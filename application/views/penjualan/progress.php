<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><i class="fa fa-list"></i> Order Status</h3>
            </div>
            <div class="box-body">
                <?php foreach($penjualan as $p){?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title"></i> Order ID #<?php echo $p['id'];?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-body">
                    <b>Nama Pemesan :</b> <?php foreach($customer as $c){if($c['id']==$p['id_customer']){echo $c['nama'];}}?><br><br>
                        <b>Alamat</b> : <br><?php foreach($customer as $c){if($c['id']==$p['id_customer']){echo $c['alamat'];}}?><br><br>
                    <b>Vendor : </b><br><?php foreach($vendor as $v){if($v['id']==$p['id_vendor']){echo $v['kode']." - ".$v['nama']."<br>Alamat : ".$v['alamat']."<br> No Telepon : ".$v['notelp']." <br> No. Rekening : ".$v['norek'];}}?>
                    <br><br><b>List Pesanan :</b> <br>
                    <?php foreach($keranjang as $k){
                            if($k['status']==($p['id']+3)){
                              if($k['type']==1){
                                    foreach($produk as $item){
                                        if($k['id_produk']==$item['id']){
                                            echo "- ".$item['nama']." [Qty : ".$k['qty']." ] <a href='".base_url()."index.php/Pages/detail_item/".$k['id']."'><span class='fa fa-search'></span></a><br>";
                                        }
                                    }
                                }else{
                                  foreach($custom_detail as $c){
                                    if($c['id']==$k['id_produk']){
                                      foreach($katalog as $i){
                                        if($c['id_katalog']==$i['id']){
                                          echo $i['nama'];}}}}
                                          echo " CUSTOM  [Qty : ".$k['qty']." ] <a href='".base_url()."index.php/Pages/detail_item/".$k['id']."'><span class='fa fa-search'></span></a><br>";
                                }
                              }
                            }?>
                    <br>
                    <b>Status : <?php if($p['status']==0){echo "Pesanan Di Tolak oleh Admin";}else if($p['status']==1){echo "Menunggu Konfirmasi Admin";}else if($p['status']==2){echo "Menunggu Pembayaran Pemesan";}else if($p['status']==3){echo "Memilih Vendor";}else if($p['status']==4){echo "Menunggu Konfirmasi Vendor";}else if($p['status']==5){echo "Menunggu Pembayaran Konfirmasi Vendor";}else if($p['status']==6){echo "Proses Pengerjaan Vendor";}else if($p['status']==7){echo "Proses Pengerjaan Vendor";}else if($p['status']==8){echo "Barang Selesai. Menunggu Resi Pengiriman.";}else if($p['status']==9){echo "Barang Sedang dikirim Menunggu Konfirmasi Pemesan";}else if($p['status']==10){echo "Pesanan Diterima oleh Pemesan";} ?></b><br><br>
                    Progress ( <?php if($p['status']==0){echo "0%";}else if($p['status']==1){echo "10%";}else if($p['status']==2){echo "20%";}else if($p['status']==3){echo "30%";}else if($p['status']==4){echo "40%";}else if($p['status']==5){echo "50%";}else if($p['status']==6){echo "60%";}else if($p['status']==7){echo "70%";}else if($p['status']==8){echo "80%";}else if($p['status']==9){echo "90%";}else if($p['status']==10){echo "100%";} ?>)
                    <div class="progress">
                        <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php if($p['status']==0){echo '0%';}else if($p['status']==1){echo '10%';}else if($p['status']==2){echo '20%';}else if($p['status']==3){echo '30%';}else if($p['status']==4){echo '40%';}else if($p['status']==5){echo '50%';}else if($p['status']==6){echo '60%';}else if($p['status']==7){echo '70%';}else if($p['status']==8){echo '80%';}else if($p['status']==9){echo '90%';}else if($p['status']==10){echo '100%';} ?>">
                    </div>
                    </div>
                    </div>
                <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
