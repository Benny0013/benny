<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Custom Detail Edit</h3>
            </div>
			<?php echo form_open('custom_detail/edit/'.$custom_detail['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_lengan" class="control-label"><span class="text-danger">*</span>Id Lengan</label>
						<div class="form-group">
							<input type="text" name="id_lengan" value="<?php echo ($this->input->post('id_lengan') ? $this->input->post('id_lengan') : $custom_detail['id_lengan']); ?>" class="form-control" id="id_lengan" />
							<span class="text-danger"><?php echo form_error('id_lengan');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_badan" class="control-label"><span class="text-danger">*</span>Id Badan</label>
						<div class="form-group">
							<input type="text" name="id_badan" value="<?php echo ($this->input->post('id_badan') ? $this->input->post('id_badan') : $custom_detail['id_badan']); ?>" class="form-control" id="id_badan" />
							<span class="text-danger"><?php echo form_error('id_badan');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_kerah" class="control-label"><span class="text-danger">*</span>Id Kerah</label>
						<div class="form-group">
							<input type="text" name="id_kerah" value="<?php echo ($this->input->post('id_kerah') ? $this->input->post('id_kerah') : $custom_detail['id_kerah']); ?>" class="form-control" id="id_kerah" />
							<span class="text-danger"><?php echo form_error('id_kerah');?></span>
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