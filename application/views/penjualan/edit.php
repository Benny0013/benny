<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Penjualan Edit</h3>
            </div>
			<?php echo form_open('penjualan/edit/'.$penjualan['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_keranjang" class="control-label"><span class="text-danger">*</span>Id Keranjang</label>
						<div class="form-group">
							<input type="text" name="id_keranjang" value="<?php echo ($this->input->post('id_keranjang') ? $this->input->post('id_keranjang') : $penjualan['id_keranjang']); ?>" class="form-control" id="id_keranjang" />
							<span class="text-danger"><?php echo form_error('id_keranjang');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_karyawan" class="control-label"><span class="text-danger">*</span>Id Karyawan</label>
						<div class="form-group">
							<input type="text" name="id_karyawan" value="<?php echo ($this->input->post('id_karyawan') ? $this->input->post('id_karyawan') : $penjualan['id_karyawan']); ?>" class="form-control" id="id_karyawan" />
							<span class="text-danger"><?php echo form_error('id_karyawan');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="status" class="control-label"><span class="text-danger">*</span>Status</label>
						<div class="form-group">
							<input type="text" name="status" value="<?php echo ($this->input->post('status') ? $this->input->post('status') : $penjualan['status']); ?>" class="form-control" id="status" />
							<span class="text-danger"><?php echo form_error('status');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="ongkir" class="control-label"><span class="text-danger">*</span>Ongkir</label>
						<div class="form-group">
							<input type="text" name="ongkir" value="<?php echo ($this->input->post('ongkir') ? $this->input->post('ongkir') : $penjualan['ongkir']); ?>" class="form-control" id="ongkir" />
							<span class="text-danger"><?php echo form_error('ongkir');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="resi" class="control-label"><span class="text-danger">*</span>Resi</label>
						<div class="form-group">
							<input type="text" name="resi" value="<?php echo ($this->input->post('resi') ? $this->input->post('resi') : $penjualan['resi']); ?>" class="form-control" id="resi" />
							<span class="text-danger"><?php echo form_error('resi');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="estimasi" class="control-label"><span class="text-danger">*</span>Estimasi</label>
						<div class="form-group">
							<input type="text" name="estimasi" value="<?php echo ($this->input->post('estimasi') ? $this->input->post('estimasi') : $penjualan['estimasi']); ?>" class="has-datepicker form-control" id="estimasi" />
							<span class="text-danger"><?php echo form_error('estimasi');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="bukti_pembayaran" class="control-label"><span class="text-danger">*</span>Bukti Pembayaran</label>
						<div class="form-group">
							<input type="text" name="bukti_pembayaran" value="<?php echo ($this->input->post('bukti_pembayaran') ? $this->input->post('bukti_pembayaran') : $penjualan['bukti_pembayaran']); ?>" class="form-control" id="bukti_pembayaran" />
							<span class="text-danger"><?php echo form_error('bukti_pembayaran');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="alamat_pengiriman" class="control-label"><span class="text-danger">*</span>Alamat Pengiriman</label>
						<div class="form-group">
							<textarea name="alamat_pengiriman" class="form-control" id="alamat_pengiriman"><?php echo ($this->input->post('alamat_pengiriman') ? $this->input->post('alamat_pengiriman') : $penjualan['alamat_pengiriman']); ?></textarea>
							<span class="text-danger"><?php echo form_error('alamat_pengiriman');?></span>
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