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
                        <th>Pesanan</th>
                        <th>List Vendor</th>                        
                        
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
                                            if($k['id_vendor']==0){if($p['status']>3){
                                                ?>
                                                <form action="<?php echo base_url('index.php/Pages/vendor_add/').$k['id'];?>" method="POST">    
                                Pilih Vendor :<br>
                                                <select name="vendor">
                                                <?php
                                                    foreach($vendor as $v){
                                                        echo "<option value='".$v['id']."'>".$v['nama']."</option>";
                                                    }
                                                ?>
                                                </select>
                                                <input type="submit" class="btn btn-info btn-xs" value="Confirm"> 
                                                </form>
                                                <?php
                                            }}else{?>
                                                Vendor : 
                                            <?php if($k['vendor_status']==4){$jd++;} foreach($vendor as $v){if($v['id']==$k['id_vendor']){echo $v['nama']." <a href='".base_url()."index.php/Pages/detail_vendor/".$k['id']."'><span class='fa fa-search'></span></a><br>";}}}
                                        }
                                    }
                                }else{
                                  foreach($custom as $c){
                                    if($c->id==$k['id_produk']){$jp++;
                                      foreach($katalog as $i){
                                        if($c->id_katalog==$i['id']){
                                          echo "- ".$i['nama'];}}}}
                                          echo " CUSTOM  [Qty : ".$k['qty']." ] <a href='".base_url()."index.php/Pages/detail_item/".$k['id']."'><span class='fa fa-search'></span></a><br>";
                                          if($k['id_vendor']==0){if($p['status']>3){
                                                ?>
                                                <form action="<?php echo base_url('index.php/Pages/vendor_add/').$k['id'];?>" method="POST">    
                                Pilih Vendor :<br>
                                                <select name="vendor">
                                                <?php
                                                    foreach($vendor as $v){
                                                        echo "<option value='".$v['id']."'>".$v['nama']."</option>";
                                                    }
                                                ?>
                                                </select>
                                                <input type="submit" class="btn btn-info btn-xs" value="Confirm"> 
                                                </form>
                                                <?php
                                            }}else{?>
                                                Vendor : 
                                            <?php if($k['vendor_status']==4){$jd++;} foreach($vendor as $v){if($v['id']==$k['id_vendor']){echo $v['nama']." <a href='".base_url()."index.php/Pages/detail_vendor/".$k['id']."'><span class='fa fa-search'></span></a><br>";}}}
                                        
                                }
                              }
                            
                            }?></td>
            <td><?php if($p['status']==4){
                    if($jp==$jd){?>
                    <a href="<?php echo site_url('Pages/acc_pesanan5/'.$p['id']); ?>" class="btn btn-success btn-xs"> </span> Lanjut Proses Pengiriman</a>
                    <?php }else{
                    echo "Dalam proses pengerjaan vendor";}
                }
                else if($p['status']>4){echo "Pengerjaan Vendor Selesai";}elseif($p['status']==0){echo "Pesanan ditolak.";}?>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
