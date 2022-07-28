<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Sablon Detail Add</h3>
            </div>
            <?php echo form_open('sablon_detail/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_keranjang" class="control-label"><span class="text-danger">*</span>Id Keranjang</label>
						<div class="form-group">
							<input type="text" name="id_keranjang" value="<?php echo $this->input->post('id_keranjang'); ?>" class="form-control" id="id_keranjang" />
							<span class="text-danger"><?php echo form_error('id_keranjang');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_bom" class="control-label"><span class="text-danger">*</span>Id Bom</label>
						<div class="form-group">
							<input type="text" name="id_bom" value="<?php echo $this->input->post('id_bom'); ?>" class="form-control" id="id_bom" />
							<span class="text-danger"><?php echo form_error('id_bom');?></span>
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
						<label for="gambar" class="control-label"><span class="text-danger">*</span>Gambar</label>
						<div class="form-group">
							<input type="text" name="gambar" value="<?php echo $this->input->post('gambar'); ?>" class="form-control" id="gambar" />
							<span class="text-danger"><?php echo form_error('gambar');?></span>
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