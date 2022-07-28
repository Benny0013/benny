				<div class="hero-wrap hero-bread" style="background-image: url('<?php echo base_url();?>assets/images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">Register</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Register</span></p>
          </div>
        </div>
      </div>
    </div>
		
		<section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-8 ftco-animate">
			<form action="<?php echo base_url('index.php/Register/save');?>" class="billing-form bg-light p-3 p-md-5" method="POST">
							<h3 class="mb-4 billing-heading">Register</h3>
	          	<div class="row align-items-end">
	          		<div class="col-md-12">
	                <div class="form-group">
	                	<label for="nama">Name</label>
	                  <input type="text" class="form-control" name="nama">
	                  <span class="text-danger"><?php echo form_error('nama');?></span>
	                </div>
	              </div>
	              <div class="col-md-12">
	                <div class="form-group">
	                	<label for="alamat">Address</label>
	                  <input type="textarea" class="form-control" name="alamat">
	                  <span class="text-danger"><?php echo form_error('alamat');?></span>
	                </div>
                </div>
                <div class="col-md-12">
	                <div class="form-group">
	                	<label for="telp">Phone</label>
	                  <input type="text" class="form-control" name="telp">
	                  
	                  <span class="text-danger"><?php echo form_error('email');?></span>
	                </div>
	              </div>
	              <div class="col-md-12">
	                <div class="form-group">
	                	<label for="email">Mail</label>
	                  <input type="text" class="form-control" name="email">
	                  <span class="text-danger"><?php echo form_error('email');?></span>

	                </div>
                </div><div class="col-md-12">
	                <div class="form-group">
	                	<label for="password">Password</label>
	                  <input type="password" class="form-control" name="password">
	                  <span class="text-danger"><?php echo form_error('password');?></span>
	                </div>
	              </div>
	              <div class="col-md-12">
	                <div class="form-group">
	                	<label for="confirm">Confirmation Password</label>
	                  <input type="password" class="form-control" name="confirm">
	                  <span class="text-danger"><?php echo form_error('confirm');?></span>
	                </div>
                </div>
                  <div class="col-md-12">
	                <div class="form-group">
	                  <label for="cbx">Accept Terms and Agreements </label>
	                  <input type="checkbox" class="" name="cbx">
	                  <span class="text-danger"><?php echo form_error('cbx');?></span>                 
	                </div>
                </div>
                <div class="col-md-12">
	                <div class="form-group">
	                	<input type="submit" value="Save" class="btn btn-primary py-3 px-4">	
	                </div>
                </div>
                </div>
                	<div class="col-md-12">
	                	Already have account ? <a href="<?php echo base_url('index.php/Login/');?>">Login</a>
	            	</div>
                </div>
                </div>
	            </div>
	          </form><!-- END -->
          </div> <!-- .col-md-8 -->
        </div>
      </div>
    </section> <!-- .section -->