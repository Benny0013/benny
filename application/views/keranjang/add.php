<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Keranjang Add</h3>
            </div>
            <?php echo form_open('keranjang/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_customer" class="control-label"><span class="text-danger">*</span>Id Customer</label>
						<div class="form-group">
							<input type="text" name="id_customer" value="<?php echo $this->input->post('id_customer'); ?>" class="form-control" id="id_customer" />
							<span class="text-danger"><?php echo form_error('id_customer');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_produk" class="control-label"><span class="text-danger">*</span>Id Produk</label>
						<div class="form-group">
							<input type="text" name="id_produk" value="<?php echo $this->input->post('id_produk'); ?>" class="form-control" id="id_produk" />
							<span class="text-danger"><?php echo form_error('id_produk');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="type" class="control-label"><span class="text-danger">*</span>Type</label>
						<div class="form-group">
							<input type="text" name="type" value="<?php echo $this->input->post('type'); ?>" class="form-control" id="type" />
							<span class="text-danger"><?php echo form_error('type');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="qty" class="control-label"><span class="text-danger">*</span>Qty</label>
						<div class="form-group">
							<input type="text" name="qty" value="<?php echo $this->input->post('qty'); ?>" class="form-control" id="qty" />
							<span class="text-danger"><?php echo form_error('qty');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="sablon" class="control-label"><span class="text-danger">*</span>Sablon</label>
						<div class="form-group">
							<input type="text" name="sablon" value="<?php echo $this->input->post('sablon'); ?>" class="form-control" id="sablon" />
							<span class="text-danger"><?php echo form_error('sablon');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="status" class="control-label"><span class="text-danger">*</span>Status</label>
						<div class="form-group">
							<input type="text" name="status" value="<?php echo $this->input->post('status'); ?>" class="form-control" id="status" />
							<span class="text-danger"><?php echo form_error('status');?></span>
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>