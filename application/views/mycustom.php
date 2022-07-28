<div class="hero-wrap hero-bread" style="background-image: url('<?php echo base_url();?>assets/images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">Custom</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url();?>">Home</a></span> <span>Custom</span></p>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 ftco-animate">
            <img src="http://localhost/thrias/uploads/custom/default.png" class="img-fluid" id="custom" style="position: absolute;">
          </div>
          <div class="col-lg-6 product-details pl-md-5 ftco-animate">
            <h3><?php if($katalog==1){echo "Custom Mug";}else if($katalog==2){echo "Custom Poci";}else if($katalog==3){echo "Custom Termos";}else if($katalog==4){echo "Custom Box";}?></h3>
            <form action="<?php echo base_url('index.php/MyCustom/add/').$katalog;?>" method="POST">
            <p>
            Pilih Warna :
            <select name="k" id="varcustom" onchange="ganticustom()"><option value="">-- Pilih <?php if($katalog==1){echo "Mug";}else if($katalog==2){echo "Poci";}else if($katalog==3){echo "Termos";}else if($katalog==4){echo "Box";}?> --</option><?php foreach($custom as $c){
              if($c->id_katalog==$katalog&&$c->keterangan==1){echo "<option value='".$c->path."'>".$c->color."</option>";}}?></select>
            </p>
            <div class="row mt-4">
              <div class="w-100"></div>
              <div class="input-group col-md-6 d-flex mb-3">
                <span class="input-group-btn mr-2">
                    <button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
                     <i class="ion-ios-remove"></i>
                    </button>
                  </span>
                <input type="text" id="quantity" name="qty" class="form-control input-number" value="1" min="1" max="100">
                <span class="input-group-btn ml-2">
                    <button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
                       <i class="ion-ios-add"></i>
                   </button>
                </span>
              </div>
            </div>
            <p><input type="submit" class="btn btn-primary py-3 px-5" value="Add to Cart"></p>
          </div>
          </form>
        </div>
      </div>
    </section>

<script>
function ganticustom() {
  var custom = document.getElementById("varcustom");
  var gambar = custom.options[custom.selectedIndex].value;
  document.getElementById("custom").src= "http://localhost/benny/uploads/custom/"+gambar;
}
</script>