<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><i class="fa fa-truck"></i> Pengiriman</h3>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Customer</th>
                        <th>Alamat</th>                        
                        <th>List Pesanan</th>
                        <th>Resi</th>
                        <th>Aksi</th>
                    </tr>
                    <?php foreach($penjualan as $p){ ?>
                    <tr>
                        <td><?php echo $p['id']; ?></td>
                        <td><?php foreach($customer as $c){if($c['id']==$p['id_customer']){echo $c['nama'];}}?></td>
                        <td><?php foreach($customer as $c){if($c['id']==$p['id_customer']){echo $c['alamat'];}}?></td>
                        <td><?php foreach($keranjang as $k){
                            if($k['status']==($p['id']+3)){
                              if($k['type']==1){
                                    foreach($produk as $item){
                                        if($k['id_produk']==$item['id']){
                                            echo $item['nama']." [Qty : ".$k['qty']." ] <a href='".base_url()."index.php/Pages/detail_item/".$k['id']."'><span class='fa fa-search'></span></a><br>";
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
                        <td><?php if($p['resi']==0){echo "Barang belum dikirim";}else{echo $p['resi'];}?></td>
                        <td><?php if($p['status']==5||$p['status']>5){?>
                            <form action="<?php echo base_url('index.php/Pages/addresi/').$p['id'];?>" method="POST">
                                <input type="text" placeholder="Masukkan Resi" name="resi">
                                <input type="submit" class="btn btn-info btn-xs" value="Simpan"> 
                            </form>
                            <?php }else if($p['status']>5){echo "Barang sudah diterima.";}?>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
