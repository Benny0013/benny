<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Penjualan Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('penjualan/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Id Keranjang</th>
						<th>Id Karyawan</th>
						<th>Status</th>
						<th>Ongkir</th>
						<th>Resi</th>
						<th>Estimasi</th>
						<th>Bukti Pembayaran</th>
						<th>Alamat Pengiriman</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($penjualan as $p){ ?>
                    <tr>
						<td><?php echo $p['id']; ?></td>
						<td><?php echo $p['id_keranjang']; ?></td>
						<td><?php echo $p['id_karyawan']; ?></td>
						<td><?php echo $p['status']; ?></td>
						<td><?php echo $p['ongkir']; ?></td>
						<td><?php echo $p['resi']; ?></td>
						<td><?php echo $p['estimasi']; ?></td>
						<td><?php echo $p['bukti_pembayaran']; ?></td>
						<td><?php echo $p['alamat_pengiriman']; ?></td>
						<td>
                            <a href="<?php echo site_url('penjualan/edit/'.$p['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('penjualan/remove/'.$p['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
