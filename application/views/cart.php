        <div class="hero-wrap hero-bread" style="background-image: url('<?php echo base_url();?>assets/images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">Cart</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url();?>">Home</a></span> <span>Cart</span></p>
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
                    <th>&nbsp;</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                  </tr>
                </thead>
                <tbody>
                <?php $total_all=0; foreach($keranjang as $k){if($k['id_customer']==$this->session->userdata('usersesss')&&$k['status']==1){?>
                  <tr class="text-center">
                    <td class="product-remove"><a href="<?php echo base_url('index.php/Cart/Remove/').$k['id'];?>"><span class="ion-ios-trash"></span></a></td>
                    
                    <td ><?php $total=0; if($k['type']==1){foreach($produk as $p){if($p->id==$k['id_produk']){echo "<a href='".base_url()."index.php/Cart/cart_detail/".$k['id']."'>Lihat Gambar</a>";}}}else{foreach($custom as $c){if($c->id==$k['id_produk']){echo "<a href='".base_url()."index.php/Cart/cart_detail/".$k['id']."'>Lihat Gambar</a>";}}}?>
                    </td>
                    
                    <td class="product-name">
                      <h3><?php if($k['type']==1){foreach($produk as $p){if($p->id==$k['id_produk']){echo $p->nama;}}}else{foreach($custom as $c){if($c->id==$k['id_produk']){foreach($katalog as $i){if($c->id_katalog==$i['id']){echo $i['nama'];}}}}echo " CUSTOM";}?></h3>
                      <?php if($k['sablon']==1&&$k['type']==2){?><a href='<?php echo base_url('index.php/Cart/SablonBordir/').$k['id'];?>'><p><span class="ion-md-add-circle"></span> Tambah Sablon</p></a><?php }else{?>
                        <p>Sablon sudah ditambahkan.</p>
                      <?php } ?>
                    </td>
                    
                    <td class="price"><?php if($k['type']==1){foreach($produk as $p){if($p->id==$k['id_produk']){foreach($bom as $b){if($b['id']==$p->id_bom){if($k['qty']>100){$total = $b['total']+(15/100*$b['total']);}else{$total = $b['total'] + (50/100*$b['total']);}
                      if($k['sablon']==1){
                        foreach($sablon as $s){
                          if($s['id_keranjang']==$k['id']){
                            foreach($bom as $x){
                              if($x['id']==$s['id_bom']){
                                if($k['qty']>100){
                                  $total=$total + $x['total'];
                                  $total=$total + ($total*15/100);
                                }else{
                                  $total=$total + $x['total'];
                                  $total=$total + ($total*50/100);
                                }
                              }
                            }
                          }
                        }
                      }
                  }}}}echo "Rp. ".number_format(($total) ,2,',','.');}else{foreach($custom as $i){if($k['id_produk']==$i->id){
                          foreach($bom as $b){if($b['id']==$i->id_bom){
                            if($k['qty']>100){
                                  $total=$total + $b['total'];
                                  $total=$total + ($total*15/100);
                                }else{
                                  $total=$total + $b['total'];
                                  $total=$total + ($total*20/100);
                                }
                          }}}
                         
                      }if($k['sablon']==0){
                        foreach($sablon as $s){
                          if($s['id_keranjang']==$k['id']){
                            foreach($bom as $x){
                              if($x['id']==$s['id_bom']){
                                $total=$total + $x['total'];
                              }
                            }
                          }
                        }
                      } echo "Rp. ".number_format(($total),2,',','.');}?></h3>
                     </td>
                    
                    <td class="quantity">
                      <?php echo $k['qty']; $total=$total*$k['qty'];?>
                    </td>
                    
                    <td class="total"><?php $total_all = $total_all + $total; echo "Rp. ".number_format(($total),2,',','.');?></td>
                  </tr><!-- END TR-->
                  <?php }}?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="row justify-content-end">
          <div class="col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate">
            <div class="cart-total mb-3">
              <h3>Cart Totals</h3>
              <hr>
              <p class="d-flex total-price">
                <span>Total</span>
                <span><?php echo "Rp. ".number_format($total_all,2,',','.');?></span>
              </p>
            </div>
            <p class="text-center"><a href="<?php echo base_url('index.php/Cart/checkout/').$total_all;?>" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
          </div>
        </div>
      </div>
    </section>