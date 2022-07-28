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
                <?php foreach($keranjang as $k){if($k['id_customer']==$this->session->userdata('usersesss')&&$k['status']==1){?>
                  <tr class="text-center">
                    <td class="product-remove"><a href="<?php echo base_url('index.php/Cart/Remove/').$k['id'];?>"><span class="ion-ios-close"></span></a></td>
                    
                    <td ><?php if($k['type']==1){foreach($produk as $p){if($p->id==$k['id_produk']){echo "<img src='".base_url()."/uploads/produk/".$p->path."' width='70%'>";}}}else{foreach($custom_detail as $c){if($c['id']==$k['id_produk']){foreach($custom as $i){if($c['id_lengan']==$i->id){echo "<img src='".base_url()."/uploads/custom/".$i->path."' width='30%' style='position:absolute;left: 0px;top: 0px;'>";}if($c['id_badan']==$i->id){echo "<img src='".base_url()."/uploads/custom/".$i->path."' width='30%' style='position:absolute;left: 0px;top: 0px;'>";}if($c['id_kerah']==$i->id){echo "<img src='".base_url()."/uploads/custom/".$i->path."' width='30%' style='position:absolute;left: 0px;top: 0px;'>";}}}}}?>
                    </td>
                    
                    <td class="product-name">
                      <h3><?php if($k['type']==1){foreach($produk as $p){if($p->id==$k['id_produk']){echo $p->nama;}}}else{foreach($custom_detail as $c){if($c['id']==$k['id_produk']){foreach($katalog as $i){if($c['id_katalog']==$i['id']){echo $i['nama'];}}}}echo " CUSTOM";}?></h3>
                      <p><button class="btn btn-primary">+ Tambah Sablon</button></p>
                    </td>
                    
                    <td class="price">$4.90</td>
                    
                    <td class="quantity">
                      <div class="input-group mb-3">
                        <input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
                      </div>
                    </td>
                    
                    <td class="total">$4.90</td>
                  </tr><!-- END TR-->
                  <?php }}?>
                </tbody>
              </table>