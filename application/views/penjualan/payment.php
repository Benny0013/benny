<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><i class="fa fa-arrow-right"></i> Pembayaran Masuk</h3>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
            <th>ID</th>
                        <th>Customer</th>
                        <th>List Pesanan</th>
                        <th>Jumlah Pembayaran</th>                        
                        <th>Bukti Pembayaran</th>
                        
            <th>Aksi</th>
                    </tr>
                    <?php foreach($penjualan as $p){ ?>
                    <tr>
            <td><?php echo $p['id']; ?></td>
                        <td><?php foreach($customer as $c){if($c['id']==$p['id_customer']){echo $c['nama'];}}?></td>

                        <td><?php $jp=0;$jd=0; foreach($keranjang as $k){
                             if($k['status']==($p['id']+3)){
                              if($k['type']==1){
                                    foreach($produk as $item){
                                        if($k['id_produk']==$item['id']){$jp++;
                                            echo "- ".$item['nama']." [Qty : ".$k['qty']." ] <a href='".base_url()."index.php/Pages/detail_item/".$k['id']."'><span class='fa fa-search'></span></a><br>";
                                            
                                        }
                                    }
                                }else{
                                  foreach($custom as $c){
                                    if($c->id==$k['id_produk']){
                                      foreach($katalog as $i){
                                        if($c->id_katalog==$i['id']){
                                          echo $i['nama'];}}}}
                                          echo " CUSTOM  [Qty : ".$k['qty']." ] <a href='".base_url()."index.php/Pages/detail_item/".$k['id']."'><span class='fa fa-search'></span></a><br>";
                                }
                              }
                            
                            }?></td>
                        <td><?php echo "Rp. ".number_format((($p['total_pembayaran']+$p['ongkir'])),2,',','.');?></td>    
                        <td><?php if($p['bukti_pembayaran']=='0'){echo 0;}else{echo "<img src='".base_url()."/uploads/bukti/".$p['bukti_pembayaran']."' width='50%'>";}?></td>
            <td><?php if($p['status']==3){
                    ?> <a href="<?php echo site_url('Pages/acc_pesanan/'.$p['id']); ?>" class="btn btn-info btn-xs"> Konfirmasi Pembayaran</a> <?php
                }else if($p['status']==4){
                    echo "Dalam proses pengerjaan vendor";
                }
                else if($p['status']>3){echo "Selesai";}elseif($p['status']==0){echo "Pesanan ditolak.";}elseif($p['status']<3){echo "Menunggu pembayaran.";}?>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
