<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><i class="fa fa-arrow-right"></i> Daftar Pengerjaan Pesanan</h3>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                        <th>ID</th>                     
                        <th>Pesanan</th>
                        <th>Aksi</th>
                    </tr>
                    <?php foreach($keranjang as $k){ if($k['id_vendor']==$this->session->userdata('usersess')){?>
                    <tr>
                        <td><?php echo $k['id']; ?></td>
                        <td><?php 
                            
                              if($k['type']==1){
                                    foreach($produk as $item){
                                        if($k['id_produk']==$item['id']){
                                            echo $item['nama']." [Qty : ".$k['qty']." ] <a href='".base_url()."index.php/Pages/detail_item_v/".$k['id']."'><span class='fa fa-search'></span></a><br>";
                                        }
                                    }
                                }else{
                                  foreach($custom as $c){
                                    if($c->id==$k['id_produk']){
                                      foreach($katalog as $i){
                                        if($c->id_katalog==$i['id']){
                                          echo $i['nama'];}}}}
                                          echo " CUSTOM  [Qty : ".$k['qty']." ] <a href='".base_url()."index.php/Pages/detail_item_v/".$k['id']."'><span class='fa fa-search'></span></a><br>";
                                
                            }?></td>
                        <td><?php if($k['vendor_status']==1){echo "Belum dikonfirmasi";?>
                             
                            <?php }else if($k['vendor_status']==2){
                                ?>
                                <a href="<?php echo site_url('Pages/acc_pesanan3/'.$k['id']); ?>" class="btn btn-success btn-xs"> </span> Pembuatan Selesai</a>
                                <?php
                                }else{echo " Proses Pengemasan dan Pengiriman.";} ?>
                        </td>
                    </tr>
                    <?php }} ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
