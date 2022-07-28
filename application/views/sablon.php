<div class="hero-wrap hero-bread" style="background-image: url('<?php echo base_url();?>assets/images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">Cart Detail</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url();?>">Home</a></span> <span>Cart Detail</span></p>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 ftco-animate">
            <?php if($gambar!=""){?>
              <img src="http://localhost/benny/uploads/sablon/<?php echo $gambar;?>" class="img-fluid" id="sablon" width="75px" style="position:absolute; z-index: 1; left:380px;top:150px;">
              <?php }else {} ?>
          <?php foreach($keranjang as $k){if($k['id']==$id){if($k['type']==1){foreach($produk as $p){if($p->id==$k['id_produk']){?>
            <img src="http://localhost/benny/uploads/produk/<?php echo $p->path;?>" class="img-fluid" id="badan" style="position: absolute;">
          <?php }}}else{foreach($custom as $c){
            if($c->id==$k['id_produk']){?>
            <img src="http://localhost/benny/uploads/custom/<?php echo $c->path;?>" class="img-fluid" id="kerah" style="position: absolute;z-index: 1;">
          <?php }}}}} ?>  
            <br><br><br><br><br>
          </div>
          <div class="col-lg-6 product-details pl-md-5 ftco-animate">
            <p><a href="<?php echo base_url('index.php/Cart/')?>"><input type="submit" class="btn btn-primary py-3 px-5" value="Back"><a></p>
            <form action="<?php echo base_url('index.php/Cart/add_sablon/').$id;?>" method="post" enctype="multipart/form-data" >
              <label for="path" class="control-label"><span class="text-danger"></span>Upload Gambar :</label>
            <div class="form-group">
              <input class="form-control-file <?php echo form_error('path') ? 'is-invalid':'' ?>"
                 type="file" name="path" />
              <span class="text-danger"><?php echo form_error('path');?></span>
            </div>
              <button type="submit" class="btn btn-success">
                <i class="fa fa-check"></i> Upload
              </button>
            </form>
            <br>
          </div>
        </div>
      </div>
    </section>

<script>
function pindah(){
  var letak = document.getElementById("letak");
  var gambar = letak.options[letak.selectedIndex].value;
  if(gambar==1){
    document.getElementById("sablon").style.width="75px";
    document.getElementById("sablon").style.left="380px";
    document.getElementById("sablon").style.top="150px";    
  }else if(gambar==2){
    document.getElementById("sablon").style.width="75px";
    document.getElementById("sablon").style.left="146px";
    document.getElementById("sablon").style.top="150px";
  }else if(gambar==3){
    document.getElementById("sablon").style.width="50px";
    document.getElementById("sablon").style.left="360px";
    document.getElementById("sablon").style.top="150px";
  }else if(gambar==4){
    document.getElementById("sablon").style.width="50px";
    document.getElementById("sablon").style.left="420px";
    document.getElementById("sablon").style.top="150px";
  }
  
}
</script>