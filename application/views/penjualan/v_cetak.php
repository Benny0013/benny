<div class="box">
<div class="row">           
        
         <head>
           <script language="JavaScript">
              var full = new String();
              var namahari = ("Minggu Senin Selasa Rabu Kamis Jumat Sabtu");
              namahari = namahari.split(" ");
              var namabulan = ("Januari Februari Maret April Mei Juni Juli Agustus September Oktober November Desember");
              namabulan = namabulan.split(" ");
              var tgl = new Date();
              var hari = tgl.getDay();
              var tanggal = tgl.getDate();
              var bulan = tgl.getMonth();
              var tahun = tgl.getFullYear();
              full = namahari[hari] + ", " +tanggal + " " + namabulan[bulan] + " " + tahun;
      </script>
          <div class="col-xs-12">
                    <h2 style="text-align: center;" class="box-title"><b>DAFTAR PESANAN</b></h2>
                                <center><font size="+3" style="text-transform: uppercase;"><b>ENDLESS WORKSHOP</b></font></center>
         </head>
            <body><!-- <hr style="margin-left: 150px;"> -->
              <div style=" margin-left: 200px; margin-right: 200px; border-style: solid;" "border-width: 2px margin-top:-10px;"></div><br>
              <h4 style="padding-left: 150px; padding-top: 30px; font-weight:normal; line-height: 30px; ">Tanggal Cetak :  <?php echo date('d-m-Y');?><br>
              Dicetak Oleh : <?php foreach($karyawan as $c){if($c['id']==$penjualan['id_karyawan']){echo $c['nama'];}}?> <br>
              No. Order : <?php echo $penjualan['id'];?><br>
              Order By : <?php foreach($customer as $c){if($c['id']==$penjualan['id_customer']){echo $c['nama'];}}?><br>
              Deadline Order : <?php echo $penjualan['estimasi'];?><br>
              </h4>

              <div style="padding-left: 150px; padding-top: 30px; font-weight:normal; line-height: 30px;">
                 <?php
                        foreach($keranjang as $k){
                            if($k['id']==($id2)){
                                if($k['type']=='1'){
                                    foreach($produk as $item){
                                        if($k['id_produk']==$item['id']){
                                            echo $item['nama']." - Jumlah Pesanan : ".$k['qty']."<br>";
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
                                    foreach($custom_detail as $i){
                                        if($k['id_produk']==$i['id']){
                                            foreach($katalog as $z){
                                                if($z['id']==$i['id_katalog']){
                                                    echo $z['nama']." Custom - Jumlah Pesanan : ".$k['qty']."<br>";
                                                    echo "Catatan : ".$k['ket']."<br>";
                                                    foreach($custom_detail as $cd){if($cd['id']==$k['id_produk']){foreach($custom as $c){if($c->id==$cd['id_badan']){
                                                      echo "<img src='http://localhost/thrias/uploads/custom/".$c->path."' class='img-fluid' style='width:50%;position:absolute;'>";
                                                    }else if ($c->id==$cd['id_lengan']) {
                                                       echo "<img src='http://localhost/thrias/uploads/custom/".$c->path."' class='img-fluid' style='width:50%;position:absolute;z-index: 1;'>";
                                                    }else if ($c->id==$cd['id_kerah']) {
                                                       echo "<img src='http://localhost/thrias/uploads/custom/".$c->path."' class='img-fluid' style='width:50%;position:absolute;z-index: 1;'>";
                                                    }}}}
                                                    echo "<br><br><br><br><br><br><br><br><br><br>";
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


