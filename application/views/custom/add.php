<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tambah Custom</h3>
            </div>
             <form action="<?php base_url('custom/add') ?>" method="post" enctype="multipart/form-data" >
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_katalog" class="control-label"><span class="text-danger">*</span>Katalog</label>
						<div class="form-group">
							<select name="id_katalog" class="form-control">
								<option value="">select katalog</option>
								<?php 
								foreach($all_katalog as $katalog)
								{
									$selected = ($katalog['id'] == $this->input->post('id_katalog')) ? ' selected="selected"' : "";

									echo '<option value="'.$katalog['id'].'" '.$selected.'>'.$katalog['nama'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('id_katalog');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_bom" class="control-label"><span class="text-danger">*</span>Bom</label>
						<div class="form-group">
							<select name="id_bom" class="form-control">
								<option value="">select bom</option>
								<?php 
								foreach($all_bom as $bom)
								{
									$selected = ($bom['id'] == $this->input->post('id_bom')) ? ' selected="selected"' : "";

									echo '<option value="'.$bom['id'].'" '.$selected.'>'.$bom['nama'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('id_bom');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="color" class="control-label"><span class="text-danger">*</span>Keterangan dan Warna</label>
						<div class="form-group">
							<input type="text" name="color" value="<?php echo $this->input->post('color'); ?>" class="form-control" id="color" />
							<span class="text-danger"><?php echo form_error('color');?></span>
						</div>
					</div>
					<div class="col-md-12">
						<label for="path" class="control-label"><span class="text-danger"></span>Gambar</label>
						<div class="form-group">
							<input class="form-control-file <?php echo form_error('path') ? 'is-invalid':'' ?>"
								 type="file" name="path" />
							<span class="text-danger"><?php echo form_error('path');?></span>
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Simpan
            	</button>
          	</div>
            </form>
      	</div>
    </div>
</div>