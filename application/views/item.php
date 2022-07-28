<div class="hero-wrap hero-bread" style="background-image: url('<?php echo base_url();?>assets/images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">Product Detail</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url();?>">Home</a></span> <span>Product Detail</span></p>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 ftco-animate">
            <img src="<?php echo base_url();?>uploads/produk/<?php echo $produk->path;?>" class="img-fluid" alt="Colorlib Template">
          </div>
          <div class="col-lg-6 product-details pl-md-5 ftco-animate">
            <h3><?php echo $produk->nama;?></h3>
            <p class="price" id="price"><span><?php $harga=0; foreach($bom as $b){if($b['id']==$produk->id_bom){$harga=$b['total']; echo "IDR ".number_format((($b['total']*50/100)+$b['total']),2,',','.');}}?></span></p>
            <p>
            <?php echo $produk->deskripsi;?>
            </p>
            <form action="<?php echo base_url('index.php/Cart/add_standart/').$produk->id;?>" method="POST">
            <div class="row mt-4">
              <div class="w-100"></div>
              <div class="input-group col-md-6 d-flex mb-3">
                <span class="input-group-btn mr-2">
                    <button type="button" class="quantity-left-minus btn" data-type="minus" data-field="" onclick="jumlah()">
                     <i class="ion-ios-remove"></i>
                    </button>
                  </span>
                <input type="text" id="quantity" name="qty" class="form-control input-number" value="1" min="1" onkeyup="jumlah()">
                <span class="input-group-btn ml-2">
                    <button type="button" class="quantity-right-plus btn" data-type="plus" data-field="" onclick="jumlah()">
                       <i class="ion-ios-add"></i>
                   </button>
                </span>
              </div>
            </div><div class="row mt-4">
              <div class="w-100"></div>
              <div class="input-group col-md-6 d-flex mb-3">
                <textarea placeholder="Masukkan Catatan..." name="ket"></textarea>
              </div>
            </div>
            <p><input type="submit" class="btn btn-primary py-3 px-5" value="Add to Cart"></p>
          </div>
          </form>
        </div>
      </div>
    </section>

    <script>
function jumlah(){
  var price = <?php echo $harga;?>;
  var qty = document.getElementById("quantity").value;
 
  if(qty>100){
    price = price + (15/100*price);
  }else{
    price = price + (20/100*price);
  }
  var newprice = new Intl.NumberFormat('en-EN', { style: 'currency', currency: 'IDR' }).format(price);
  document.getElementById("price").innerHTML = "<span>"+newprice+"</span>";
}
</script>
