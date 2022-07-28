<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Sunting Vendor</h3>
            </div>
			<?php echo form_open('vendor/edit/'.$vendor['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="nama" class="control-label"><span class="text-danger">*</span>Nama</label>
						<div class="form-group">
							<input type="text" name="nama" value="<?php echo ($this->input->post('nama') ? $this->input->post('nama') : $vendor['nama']); ?>" class="form-control" id="nama" />
							<span class="text-danger"><?php echo form_error('nama');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nip" class="control-label"><span class="text-danger">*</span>NIP</label>
						<div class="form-group">
							<input type="text" name="nip" value="<?php echo ($this->input->post('nama') ? $this->input->post('nama') : $vendor['kode']); ?>" class="form-control" id="nip" />
							<span class="text-danger"><?php echo form_error('nip');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label"><span class="text-danger">*</span>Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $vendor['email']); ?>" class="form-control" id="email" />
							<span class="text-danger"><?php echo form_error('email');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="password" class="control-label"><span class="text-danger">*</span>Password (Harap isi dalam Format MD5)</label>
						<div class="form-group">
							<input type="text" name="password" value="<?php echo ($this->input->post('password') ? $this->input->post('password') : $vendor['password']); ?>" class="form-control" id="password" />
							<span class="text-danger"><?php echo form_error('password');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="alamat" class="control-label"><span class="text-danger">*</span>Alamat</label>
						<div class="form-group">
							<textarea name="alamat" class="form-control" id="alamat" /><?php echo ($this->input->post('alamat') ? $this->input->post('alamat') : $vendor['alamat']); ?></textarea>
							<span class="text-danger"><?php echo form_error('alamat');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="notelp" class="control-label"><span class="text-danger">*</span>No Telepon</label>
						<div class="form-group">
							<input type="text" name="notelp" value="<?php echo ($this->input->post('notelp') ? $this->input->post('notelp') : $vendor['notelp']); ?>" class="form-control" id="notelp" />
							<span class="text-danger"><?php echo form_error('notelp');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="norek" class="control-label"><span class="text-danger">*</span>No Rekening</label>
						<div class="form-group">
							<input type="text" name="norek" value="<?php echo ($this->input->post('norek') ? $this->input->post('norek') : $vendor['norek']); ?>" class="form-control" id="norek" />
							<span class="text-danger"><?php echo form_error('norek');?></span>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Simpan
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>