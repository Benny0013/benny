<div class="hero-wrap hero-bread" style="background-image: url('<?php echo base_url();?>assets/images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">Order Detail</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url();?>">Home</a></span> <span>Order Detail</span></p>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 ftco-animate">
          <?php foreach($keranjang as $k){if($k['type']==1){if($k['id']==$id){foreach($produk as $p){if($p->id==$k['id_produk']){?>
            <img src="http://localhost/benny/uploads/produk/<?php echo $p->path;?>" class="img-fluid" id="badan" style="position: absolute;">
            <?php foreach($sablon as $s){if($s['id_keranjang']==$k['id']){?>
              <img src="http://localhost/benny/uploads/sablon/<?php echo $s['gambar'];?>" class="img-fluid" id="sablon" style="<?php if($s['type']==1){echo "width:75px;position:absolute; z-index: 1; left:380px;top:150px;";}else if($s['type']==2){echo "width:75px;position:absolute; z-index: 1; left:146px;top:150px;";}else if($s['type']==3){echo "width:50px;position:absolute; z-index: 1; left:360px;top:150px;";}else if($s['type']==4){echo "width:50px;position:absolute; z-index: 1; left:420px;top:150px;";}?>">
            <?php }} ?>
          <?php }}}}else{if($k['id']==$id){foreach($custom as $p){if($p->id==$k['id_produk']){?>
            <img src="http://localhost/benny/uploads/custom/<?php echo $p->path;?>" class="img-fluid" id="kerah" style="position: absolute;z-index: 1;">
            <?php }?>

            <?php foreach($sablon as $s){if($s['id_keranjang']==$k['id']){?>
              <img src="http://localhost/benny/uploads/sablon/<?php echo $s['gambar'];?>" class="img-fluid" id="sablon" style="<?php if($s['type']==1){echo "width:75px;position:absolute; z-index: 1; left:380px;top:150px;";}else if($s['type']==2){echo "width:75px;position:absolute; z-index: 1; left:146px;top:150px;";}else if($s['type']==3){echo "width:50px;position:absolute; z-index: 1; left:360px;top:150px;";}else if($s['type']==4){echo "width:50px;position:absolute; z-index: 1; left:420px;top:150px;";}?>">
          <?php }}}}}}?>
            
            <br><br><br><br><br>
          </div>
          <div class="col-lg-6 product-details pl-md-5 ftco-animate">
            <p><a href="<?php echo base_url('index.php/User/order')?>"><input type="submit" class="btn btn-primary py-3 px-5" value="Back"><a></p>
          </div>
          </form>
        </div>
      </div>
    </section>