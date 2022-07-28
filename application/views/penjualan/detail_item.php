<div class="box">
<div class="row">           
        
         <head>
           
          <div class="col-xs-12">
                    <h2 style="text-align: center;" class="box-title"><b>Detail Pesanan</b></h2>
                                <center><font size="+3" style="text-transform: uppercase;"><b>CHLOE HAMPERS</b></font></center>
         </head>
            <body><!-- <hr style="margin-left: 150px;"> -->
              <div style=" margin-left: 200px; margin-right: 200px; border-style: solid;" "border-width: 2px margin-top:-10px;"></div><br>

              <div style="padding-left: 150px; padding-top: 30px; font-weight:normal; line-height: 30px;">
                <?php
                        foreach($keranjang as $k){
                            if($k['id']==($id)){
                                if($k['type']=='1'){
                                    foreach($produk as $item){
                                        if($k['id_produk']==$item['id']){
                                            echo $item['nama']." - Jumlah Pesanan : ".$k['qty']."<br>";
                                            foreach($customer as $c){if($c['id']==$k['id_customer']){echo "Order By : ".$c['nama']."<br>";}}
                                            foreach($bom as $b){
                                              if($item['id_bom']==$b['id']){
                                                if($k['qty']>100){
                                                  echo "Harga : @IDR ".number_format(($b['total']+(15/100*$b['total'])) ,2,',','.')." x ".$k['qty']." = IDR ".number_format((($b['total']*$k['qty']+(15/100*$b['total']*$k['qty']))) ,2,',','.')."<br>";
                                                }else{
                                                  echo "Harga : @IDR ".number_format(($b['total']+(50/100*$b['total'])) ,2,',','.')." x ".$k['qty']." = IDR ".number_format((($k['qty']*$b['total']+($k['qty']*50/100*$b['total']))) ,2,',','.')."<br>"; 
                                                }
                                                
                                              }
                                            }
                                            foreach($bom as $b){
                                              if($item['id_bom']==$b['id']){
                                                echo "Biaya Produksi : @IDR ".number_format(($b['total']) ,2,',','.')." x ".$k['qty']." = IDR ".number_format(($b['total']*$k['qty']) ,2,',','.')."<br>";
                                              }
                                            }foreach($bom as $b){
                                              if($item['id_bom']==$b['id']){
                                               if($k['qty']>100){
                                                  echo "Keuntungan : IDR ".number_format((($k['qty']*$b['total']+($k['qty']*15/100*$b['total']))) ,2,',','.')." - IDR ".number_format(($b['total']*$k['qty']) ,2,',','.')." = IDR ".number_format(($b['total']*$k['qty']*15/100),2,',','.')."<br>";
                                                }else{
                                                  echo "Keuntungan : IDR ".number_format((($k['qty']*$b['total']+($k['qty']*50/100*$b['total']))) ,2,',','.')." - IDR ".number_format(($b['total']*$k['qty']) ,2,',','.')." = IDR ".number_format(($b['total']*$k['qty']*50/100),2,',','.')."<br>";
                                                }
                                              }
                                            }
                                            echo "Catatan : ".$k['ket']."<br>";
                                            echo "<div class='col-md-12'><img src='".base_url('uploads/produk/').$item['path']."' width='50%'>";
                                            if($k['sablon']==0){
                                              foreach($sablon as $s){
                                                if($s['id_keranjang']==$k['id']){
                                                  echo "<img src='".base_url('uploads/sablon/').$s['gambar']."' style='width:75px;position:absolute; z-index: 1; left:276px;top:120px;'></div>";
                                                }
                                              }
                                              
                                            }
                                        }
                                    }
                                }else if($k['type']=='2'){
                                  $total=0;
                                    foreach($custom as $i){
                                        if($k['id_produk']==$i->id){
                                            foreach($katalog as $z){
                                                if($z['id']==$i->id_katalog){
                                                    if($k['id_produk']==$i->id){
                                                      foreach($bom as $b){if($b['id']==$i->id_bom){
                                                        $total = $total + $b['total'];
                                                      }
                                                }}

                                                    echo $z['nama']." Custom - Jumlah Pesanan : ".$k['qty']."<br>";
                                                     foreach($customer as $c){if($c['id']==$k['id_customer']){echo "Order By : ".$c['nama']."<br>";}}
                                                    if($k['qty']>100){
                                                  echo "Harga : @IDR ".number_format(($total+(15/100*$total)) ,2,',','.')." x ".$k['qty']." = IDR ".number_format((($total*$k['qty']+(15/100*$total*$k['qty']))) ,2,',','.')."<br>";
                                                }else{
                                                  echo "Harga : @IDR ".number_format(($total+(50/100*$total)) ,2,',','.')." x ".$k['qty']." = IDR ".number_format((($k['qty']*$total+($k['qty']*50/100*$total))) ,2,',','.')."<br>"; 
                                                }
                                                    echo "Biaya Produksi : @IDR ".number_format(($total) ,2,',','.')." x ".$k['qty']." = IDR ".number_format(($total*$k['qty']) ,2,',','.')."<br>";
                                                    echo "Keuntungan : IDR ".number_format((($k['qty']*$total+($k['qty']*50/100*$total))) ,2,',','.')." - IDR ".number_format(($total*$k['qty']) ,2,',','.')." = IDR ".number_format(($total*$k['qty']*50/100),2,',','.')."<br>";
                                                    echo "Catatan : ".$k['ket']."<br>";
                                                    foreach($custom as $c){{if($c->id==$k['id_produk']){if($c->id==$k['id_produk']){
                                                      echo "<img src='http://localhost/benny/uploads/custom/".$c->path."' class='img-fluid' style='width:15%;position:absolute;'>";
                                                      $stemp="";
                                                      $setpos="";
                                                      if($c->id_katalog==1){
                                                        $setpos = "width:135px;height:55px;position:absolute; z-index: 1; left:190px;top:350px;";
                                                      }else if($c->id_katalog==2){
                                                        $setpos = "width:78px;height:55px;position:absolute; z-index: 1; left:203px;top:390px;";
                                                      }else if($c->id_katalog==3){
                                                        $setpos = "width:158px;height:352px;position:absolute; z-index: 3; left:165px;top:521px;";
                                                      }

                                                      foreach($sablon as $s){echo $k['id'];if($s['id_keranjang']==$k['id']){$stemp=$s['gambar'];}}
                                                      echo "<img src='http://localhost/benny/uploads/sablon/".$stemp."' class='img-fluid' style='".$setpos."'>";
                                                    }}}}echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
                                                }
                                            }
                                        }
                                    }
                                }

                            }
                        }?>
              </div>


         </body>
         </div>
                  <div class="col-xs-12">
                    <div class="row no-print">
                      <div class="col-xs-12"><br>
                      <!--   <div id="myRadioGroup">
                          <input id="a" type="radio" name="pilihan" checked="checked" value="1"/>
                            <label for="a">Cetak</label>  
                            <label>&nbsp;&nbsp;</label>
                          <input id="b" type="radio" name="pilihan" value="2"/>
                            <label for="b">Lihat</label><br><br>
                          <div id="Pil2" class="desc" > -->
                            <form>
                              <a href="#view" onclick="window.print();" class="btn btn-primary col-sm-2 btn-xx pull-right"><i class="fa fa-print"></i> Cetak </a>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
                </div>



