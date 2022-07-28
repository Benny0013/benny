<div class="hero-wrap hero-bread" style="background-image: url('<?php echo base_url();?>assets/images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">Standart Product</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url();?>">Home</a></span> <span>Standart Product</span></p>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section bg-light">
      <div class="container-fluid">
        <div class="row">
        <?php foreach($produk as $p){$ada=0;if($p->id_katalog==$katalog){$ada=$ada+1;?>
          <div class="col-sm col-md-6 col-lg-3 ftco-animate">
            <div class="product">
              <a href="<?php echo base_url('index.php/Item/index/').$p->id;?>" class="img-prod"><img class="img-fluid" src="<?php echo base_url();?>uploads/produk/<?php echo $p->path;?>" alt="Colorlib Template">
              </a>
              <div class="text py-3 px-3">
                <h3><a href="<?php echo base_url('index.php/Item/index/').$p->id;?>"><?php echo $p->nama;?></a></h3>
                <div class="d-flex">
                  <div class="pricing">
                    <p class="price"><span class="price-sale"><?php foreach($bom as $b){if($b['id']==$p->id_bom){echo "IDR ".number_format((($b['total']*50/100)+$b['total']),2,',','.');}}?></span></p>
                  </div>
                </div>
                <hr>
                <p class="bottom-area d-flex">
                  <a href="<?php echo base_url('index.php/Item/index/').$p->id;?>" class="add-to-cart"><span>Detail Information</span></a>
                </p>
              </div>
            </div>
          </div>
       <?php } }?>   
        </div>
      </div>
    </section>