
		<div class="hero-wrap js-fullheight" style="background-image: url('<?php echo base_url();?>assets/images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
        	<h3 class="v">Chloe Hampers - Costumize Everything</h3>
        	<h3 class="vr">Since - 2020</h3>
          <div class="col-md-11 ftco-animate text-center">
          	
          </div>
          <div class="mouse">
						<a href="#" class="mouse-icon">
							<div class="mouse-wheel"><span class="ion-ios-arrow-down"></span></div>
						</a>
					</div>
        </div>
      </div>
    </div>

    <div class="goto-here"></div>
    
    <section class="ftco-section ftco-product">
    	<div class="container">
		 <div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<h1 class="big">T - SHIRT</h1>
            <h2 class="mb-4">Costumizeable T-Shirt for Any Occassion</h2>
          </div>
        </div>
        	<div class="row">
    			
    			
    		</div>
    		<div class="row">
    			<div class="col-md-12">
    				<div class="product-slider owl-carousel ftco-animate">
    				<?php foreach($produk as $p){?>
    					<div class="item">
		    				<div class="product">
		    					<a href="<?php echo base_url('index.php/Item/index/').$p->id;?>" class="img-prod"><img class="img-fluid" src="<?php echo base_url();?>uploads/produk/<?php echo $p->path;?>" alt="Colorlib Template">
		    					</a>
		    					<div class="text pt-3 px-3">
		    						<h3><b><a href="<?php echo base_url('index.php/Item/index/').$p->id;?>"><?php echo $p->nama;?></a></b></h3>
		    						<div class="d-flex">
		    							<div class="pricing">
			    							<?php foreach($bom as $b){if($b['id']==$p->id_bom){echo "IDR ".number_format((($b['total']*50/100)+$b['total']),2,',','.');}}?>
			    						</div>
		    						</div>
		    					</div>
		    				</div>
	    				</div>
	    			<?php } ?>
    				</div>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-md-12">
    				<div class="product-slider owl-carousel ftco-animate">
    					<div class="item">
		    				<div class="product">
		    					<a href="<?php echo base_url('index.php/Catalog/sort/mug');?>" class="img-prod"><img class="img-fluid" src="<?php echo base_url();?>assets/images/Gambar Mug.jpg" alt="Colorlib Template">
		    					</a>
		    					<div class="text pt-3 px-3">
		    						<h3><a href="<?php echo base_url('index.php/Catalog/sort/mug');?>">Mug</a></h3>
		    						<div class="d-flex">
		    							<div class="pricing">
			    							
			    						</div>
		    						</div>
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="product">
		    					<a href="<?php echo base_url('index.php/Catalog/sort/poci');?>" class="img-prod"><img class="img-fluid" src="<?php echo base_url();?>assets/images/Gambar Poci.jpg" alt="Colorlib Template">
		    					</a>
		    					<div class="text pt-3 px-3">
		    						<h3><a href="?php echo base_url('index.php/Catalog/sort/poci');?>">Poci</a></h3>
		    						<div class="d-flex">
		    							<div class="pricing">
			    							
			    						</div>
		    						</div>
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="product">
		    					<a href="<?php echo base_url('index.php/Catalog/sort/termos');?>" class="img-prod"><img class="img-fluid" src="<?php echo base_url();?>assets/images/Gambar Termos.jpg" alt="Colorlib Template">
		    					</a>
		    					<div class="text pt-3 px-3">
		    						<h3><a href="<?php echo base_url('index.php/Catalog/sort/termos');?>">Termos</a></h3>
		    						<div class="d-flex">
		    							<div class="pricing">
			    							
			    						</div>
		    						</div>
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="product">
		    					<a href="<?php echo base_url('index.php/Catalog/sort/box');?>" class="img-prod"><img class="img-fluid" src="<?php echo base_url();?>assets/images/Gambar Box.jpg" alt="Colorlib Template">
		    					</a>
		    					<div class="text pt-3 px-3">
		    						<h3><a href="<?php echo base_url('index.php/Catalog/sort/box');?>">Box</a></h3>
		    						<div class="d-flex">
		    							<div class="pricing">
			    							
			    						</div>
		    						</div>
		    					</div>
		    				</div>
	    				</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>