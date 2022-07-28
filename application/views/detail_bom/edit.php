<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Detail Bom Edit</h3>
            </div>
			<?php echo form_open('detail_bom/edit/'.$detail_bom['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_bahan" class="control-label"><span class="text-danger">*</span>Bahan</label>
						<div class="form-group">
							<select name="id_bahan" class="form-control">
								<option value="">select bahan</option>
								<?php 
								foreach($all_bahan as $bahan)
								{
									$selected = ($bahan['id'] == $detail_bom['id_bahan']) ? ' selected="selected"' : "";

									echo '<option value="'.$bahan['id'].'" '.$selected.'>'.$bahan['nama'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('id_bahan');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="jumlah" class="control-label"><span class="text-danger">*</span>Jumlah</label>
						<div class="form-group">
							<input type="text" name="jumlah" value="<?php echo ($this->input->post('jumlah') ? $this->input->post('jumlah') : $detail_bom['jumlah']); ?>" class="form-control" id="jumlah" />
							<span class="text-danger"><?php echo form_error('jumlah');?></span>
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