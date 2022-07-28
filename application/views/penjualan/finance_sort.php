<div class="row">
    <div class="col-md-12">
    <?php echo form_open('Pages/sort_penjualan/') ?>
    Cari Data Penjualan Dari Tanggal <input type="date" name="dari"> Sampai <input type="date" name="sampai"> <button type="submit" ><i class="fa fa-check"></i> Confirm</button>
    <?php echo form_close(); ?>
    <a href="<?php echo site_url('Pages/finance');?>">Reset</a>
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><i class="fa fa-arrow-right"></i> Keuangan</h3>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
            <th>ID</th> 
                        <th>Tgl. Pesanan</th>
                        <th>Pesanan</th>
                        <th>List Vendor</th>
                        <th>Total Pembayaran</th>                     
                        <th>Harga Jual</th>
                        <th>Harga Produksi</th>
                        <th>Ongkos Kirim</th>
                        <th>Total Keuntungan</th>
                    </tr>
                    <?php $untung=0; foreach($penjualan as $p){if($date_from<=$p['tanggal']&&$date_to>=$p['tanggal']){ ?>
                    <tr>
            <td><?php echo $p['id']; ?></td>
            <td><?php echo $p['tanggal']; ?></td>
                        <td><?php foreach($customer as $c){if($c['id']==$p['id_customer']){echo $c['nama'];}}?></td>

                        <td><?php $keuntungan=0;$modal=0; foreach($keranjang as $k){
                             if($k['status']==($p['id']+3)){
                              if($k['type']==1){
                                    foreach($produk as $item){
                                        if($k['id_produk']==$item['id']){;
                                            echo "- ".$item['nama']." [Qty : ".$k['qty']." ] <a href='".base_url()."index.php/Pages/detail_item/".$k['id']."'><span class='fa fa-search'></span></a><br>";
                                           	foreach($bom as $b){
                                           		if($b['id']==$item['id_bom']){
                                           			$modal=$modal+$k['qty']*$b['total'];
                                           		}
                                           	}
                                           	
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
                            <td><?php echo "Rp. ".number_format(($p['total_pembayaran']+$p['ongkir']) ,2,',','.');?></td>
                            <td><?php  foreach($keranjang as $k){
                             if($k['status']==($p['id']+3)){
                              if($k['type']==1){
                                    foreach($produk as $item){
                                        if($k['id_produk']==$item['id']){;
                                           	foreach($bom as $b){
                                           		if($b['id']==$item['id_bom']){
                                           			echo "Rp. ".number_format(((($b['total']+($b['total']*50/100)))*$k['qty']) ,2,',','.')."<br>";
                                           		}
                                           	}
                                           	
                                        }
                                    }
                                }else{
                                  foreach($custom as $c){
                                    if($c->id==$k['id_produk']){
                                      foreach($katalog as $i){
                                        if($c->id_katalog==$i['id']){
                                          foreach($bom as $b){
                                              if($b['id']==$c->id_bom){
                                                echo "Rp. ".number_format(((($b['total']+($b['total']*50/100)))*$k['qty']) ,2,',','.')."<br>";
                                              }
                                            }}}}}
                                          
                                }
                              }
                            
                            }?></td>
                            <td><?php  foreach($keranjang as $k){
                             if($k['status']==($p['id']+3)){
                              if($k['type']==1){
                                    foreach($produk as $item){
                                        if($k['id_produk']==$item['id']){;
                                           	foreach($bom as $b){
                                           		if($b['id']==$item['id_bom']){
                                           			echo "Rp. ".number_format(($b['total']*$k['qty']) ,2,',','.')."<br>";
                                           		}
                                           	}
                                           	
                                        }
                                    }
                                }else{
                                  foreach($custom as $c){
                                    if($c->id==$k['id_produk']){
                                      foreach($katalog as $i){
                                        if($c->id_katalog==$i['id']){
                                          foreach($bom as $b){
                                              if($b['id']==$c->id_bom){
                                                $modal=$modal + $b['total']*$k['qty'];
                                                echo "Rp. ".number_format(($b['total']*$k['qty']) ,2,',','.')."<br>";
                                              }
                                            }}}}}
                                          
                                }
                              }
                            
                            }?></td>
                            <td><?php echo "Rp. ".number_format(($p['ongkir']) ,2,',','.');?></td>
            <td><?php echo "Rp. ".number_format(($p['total_pembayaran']-$modal) ,2,',','.');$untung=$untung+($p['total_pembayaran']-$modal);?></td>
                    </tr>
                    
                    <?php }} ?>
                    <tr>
                      <td colspan="7"><b>Total Keuntungan</b></td>
                      <td colspan="1"><?php echo "Rp. ".number_format(($untung) ,2,',','.');?></td>
                    </tr>
                </table>
                                
            </div>
        </div>
    </div>
</div>
