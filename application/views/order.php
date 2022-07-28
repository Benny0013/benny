          <div class="hero-wrap hero-bread" style="background-image: url('<?php echo base_url();?>assets/images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">Order Status</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url();?>">Home</a></span> <span>Order Status</span></p>
          </div>
        </div>
      </div>
    </div>
    
    <section class="ftco-section ftco-cart">
      <div class="container">
        <div class="row">
          <div class="col-md-12 ftco-animate">
            <div class="cart-list">
              <table class="table">
                <thead class="thead-primary">
                  <tr class="text-center">
                    <th>#</th>
                    <th>Pesanan</th>
                    <th>Keterangan</th>
                    <th>Total Biaya</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($penjualan as $p){if($p['id_customer']==$this->session->userdata('usersesss')){?>
                  <tr class="text-center">
                    <td class="product-remove"><?php echo $p['id'];?></td>
                    
                    <td class="product-name">
                      <?php foreach($keranjang as $k){
                            if($k['status']==($p['id']+3)){
                              if($k['type']==1){
                                    foreach($produk as $item){
                                        if($k['id_produk']==$item['id']){
                                            echo $item['nama']." [Qty : ".$k['qty']." ] <a href='".base_url()."index.php/Cart/order_detail//".$k['id']."'><span class='icon-eye'></span></a><br>";
                                        }
                                    }
                                }else{
                                  foreach($custom as $c){
                                    if($c->id==$k['id_produk']){
                                      foreach($katalog as $i){
                                        if($c->id_katalog==$i['id']){
                                          echo $i['nama'];}}}}
                                          echo " CUSTOM  [Qty : ".$k['qty']." ] <a href='".base_url()."index.php/Cart/order_detail//".$k['id']."'><span class='icon-eye'></span></a><br>";
                                }
                              }
                            }?>
                    </td>
                    <td class="keterangan"><?php echo $k['ket']; ?></td>
                    <td class="price"><?php echo "Total Barang : Rp. ".number_format((($p['total_pembayaran'])),2,',','.')."<br>Ongkos Kirim : Rp. ".number_format((($p['ongkir'])),2,',','.')."<br>Total Pembayaran : Rp. ".number_format((($p['ongkir']+$p['total_pembayaran'])),2,',','.');?></td>
                    
                    <td class="quantity">
                      <?php if($p['status']==1){echo "Tunggu Konfirmasi Pesanan";}else if($p['status']==2){echo "Silahkan Bayar Tagihan dan Upload Bukti Pembayaran";?>
                      <form action="<?php echo base_url('index.php/User/addbukti/').$p['id']?>" method="post" enctype="multipart/form-data" >
            <div class="form-group">
              <input class="form-control-file <?php echo form_error('path') ? 'is-invalid':'' ?>"
                 type="file" name="path" />
              <span class="text-danger"><?php echo form_error('path');?></span>
            </div><button type="submit" class="btn btn-success">
                <i class="fa fa-check"></i> Simpan
              </button></form><?php }else if($p['status']==3){echo "Tunggu Konfirmasi Pembayaran";}else if($p['status']==4||$p['status']<=5){echo "Pembayaran sudah dikonfirmasi dan dalam Proses Pengerjaan";}else if($p['status']==6){echo "Barang sudah dikirim , resi pengiriman : ".$p['resi']." , jika sudah menerima pesanan anda silahkan klik<br>";?><a href="<?php echo site_url('User/confirm/'.$p['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-thumbs-up"></span> Confirm</a> <?php }else if($p['status']==7){echo "Selesai";}else if($p['status']==0){echo "Pesanan ditolak.";} ?>
                    </td>
                  </tr><!-- END TR-->
                  <?php }}?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>